<?php


/**
 * Base class that represents a row from the 'gicim_photos_27_june_13_bak' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGicimPhotos27June13Bak extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GicimPhotos27June13BakPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GicimPhotos27June13BakPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the url_data field.
     * @var        string
     */
    protected $url_data;

    /**
     * The value for the imagepk field.
     * @var        double
     */
    protected $imagepk;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the type_status field.
     * @var        string
     */
    protected $type_status;

    /**
     * The value for the urlimage field.
     * @var        string
     */
    protected $urlimage;

    /**
     * The value for the etatdoc field.
     * @var        string
     */
    protected $etatdoc;

    /**
     * The value for the gicimimageid field.
     * @var        double
     */
    protected $gicimimageid;

    /**
     * The value for the gicimpoissonsid field.
     * @var        double
     */
    protected $gicimpoissonsid;

    /**
     * The value for the fbsyncode field.
     * @var        double
     */
    protected $fbsyncode;

    /**
     * The value for the famille field.
     * @var        string
     */
    protected $famille;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the catalog_no field.
     * @var        string
     */
    protected $catalog_no;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the region field.
     * @var        string
     */
    protected $region;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the collector field.
     * @var        string
     */
    protected $collector;

    /**
     * The value for the datecollected field.
     * @var        string
     */
    protected $datecollected;

    /**
     * The value for the yearcollected field.
     * @var        double
     */
    protected $yearcollected;

    /**
     * The value for the observations field.
     * @var        string
     */
    protected $observations;

    /**
     * The value for the medium field.
     * @var        string
     */
    protected $medium;

    /**
     * The value for the paysadmin field.
     * @var        string
     */
    protected $paysadmin;

    /**
     * The value for the pkid field.
     * @var        string
     */
    protected $pkid;

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
     * Get the [url_data] column value.
     *
     * @return string
     */
    public function getUrlData()
    {

        return $this->url_data;
    }

    /**
     * Get the [imagepk] column value.
     *
     * @return double
     */
    public function getImagepk()
    {

        return $this->imagepk;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [type_status] column value.
     *
     * @return string
     */
    public function getTypeStatus()
    {

        return $this->type_status;
    }

    /**
     * Get the [urlimage] column value.
     *
     * @return string
     */
    public function getUrlimage()
    {

        return $this->urlimage;
    }

    /**
     * Get the [etatdoc] column value.
     *
     * @return string
     */
    public function getEtatdoc()
    {

        return $this->etatdoc;
    }

    /**
     * Get the [gicimimageid] column value.
     *
     * @return double
     */
    public function getGicimimageid()
    {

        return $this->gicimimageid;
    }

    /**
     * Get the [gicimpoissonsid] column value.
     *
     * @return double
     */
    public function getGicimpoissonsid()
    {

        return $this->gicimpoissonsid;
    }

    /**
     * Get the [fbsyncode] column value.
     *
     * @return double
     */
    public function getFbsyncode()
    {

        return $this->fbsyncode;
    }

    /**
     * Get the [famille] column value.
     *
     * @return string
     */
    public function getFamille()
    {

        return $this->famille;
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
     * Get the [author] column value.
     *
     * @return string
     */
    public function getAuthor()
    {

        return $this->author;
    }

    /**
     * Get the [catalog_no] column value.
     *
     * @return string
     */
    public function getCatalogNo()
    {

        return $this->catalog_no;
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
     * Get the [region] column value.
     *
     * @return string
     */
    public function getRegion()
    {

        return $this->region;
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
     * Get the [collector] column value.
     *
     * @return string
     */
    public function getCollector()
    {

        return $this->collector;
    }

    /**
     * Get the [datecollected] column value.
     *
     * @return string
     */
    public function getDatecollected()
    {

        return $this->datecollected;
    }

    /**
     * Get the [yearcollected] column value.
     *
     * @return double
     */
    public function getYearcollected()
    {

        return $this->yearcollected;
    }

    /**
     * Get the [observations] column value.
     *
     * @return string
     */
    public function getObservations()
    {

        return $this->observations;
    }

    /**
     * Get the [medium] column value.
     *
     * @return string
     */
    public function getMedium()
    {

        return $this->medium;
    }

    /**
     * Get the [paysadmin] column value.
     *
     * @return string
     */
    public function getPaysadmin()
    {

        return $this->paysadmin;
    }

    /**
     * Get the [pkid] column value.
     *
     * @return string
     */
    public function getPkid()
    {

        return $this->pkid;
    }

    /**
     * Set the value of [url_data] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setUrlData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_data !== $v) {
            $this->url_data = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::URL_DATA;
        }


        return $this;
    } // setUrlData()

    /**
     * Set the value of [imagepk] column.
     *
     * @param  double $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setImagepk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->imagepk !== $v) {
            $this->imagepk = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::IMAGEPK;
        }


        return $this;
    } // setImagepk()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [type_status] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setTypeStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_status !== $v) {
            $this->type_status = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::TYPE_STATUS;
        }


        return $this;
    } // setTypeStatus()

    /**
     * Set the value of [urlimage] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setUrlimage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->urlimage !== $v) {
            $this->urlimage = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::URLIMAGE;
        }


        return $this;
    } // setUrlimage()

    /**
     * Set the value of [etatdoc] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setEtatdoc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etatdoc !== $v) {
            $this->etatdoc = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::ETATDOC;
        }


        return $this;
    } // setEtatdoc()

    /**
     * Set the value of [gicimimageid] column.
     *
     * @param  double $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setGicimimageid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->gicimimageid !== $v) {
            $this->gicimimageid = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::GICIMIMAGEID;
        }


        return $this;
    } // setGicimimageid()

    /**
     * Set the value of [gicimpoissonsid] column.
     *
     * @param  double $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setGicimpoissonsid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->gicimpoissonsid !== $v) {
            $this->gicimpoissonsid = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::GICIMPOISSONSID;
        }


        return $this;
    } // setGicimpoissonsid()

    /**
     * Set the value of [fbsyncode] column.
     *
     * @param  double $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setFbsyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fbsyncode !== $v) {
            $this->fbsyncode = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::FBSYNCODE;
        }


        return $this;
    } // setFbsyncode()

    /**
     * Set the value of [famille] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setFamille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->famille !== $v) {
            $this->famille = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::FAMILLE;
        }


        return $this;
    } // setFamille()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [catalog_no] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setCatalogNo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->catalog_no !== $v) {
            $this->catalog_no = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::CATALOG_NO;
        }


        return $this;
    } // setCatalogNo()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [region] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->region !== $v) {
            $this->region = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::REGION;
        }


        return $this;
    } // setRegion()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [collector] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setCollector($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->collector !== $v) {
            $this->collector = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::COLLECTOR;
        }


        return $this;
    } // setCollector()

    /**
     * Set the value of [datecollected] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setDatecollected($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datecollected !== $v) {
            $this->datecollected = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::DATECOLLECTED;
        }


        return $this;
    } // setDatecollected()

    /**
     * Set the value of [yearcollected] column.
     *
     * @param  double $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setYearcollected($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->yearcollected !== $v) {
            $this->yearcollected = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::YEARCOLLECTED;
        }


        return $this;
    } // setYearcollected()

    /**
     * Set the value of [observations] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setObservations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->observations !== $v) {
            $this->observations = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::OBSERVATIONS;
        }


        return $this;
    } // setObservations()

    /**
     * Set the value of [medium] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setMedium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->medium !== $v) {
            $this->medium = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::MEDIUM;
        }


        return $this;
    } // setMedium()

    /**
     * Set the value of [paysadmin] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setPaysadmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paysadmin !== $v) {
            $this->paysadmin = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::PAYSADMIN;
        }


        return $this;
    } // setPaysadmin()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return GicimPhotos27June13Bak The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = GicimPhotos27June13BakPeer::PKID;
        }


        return $this;
    } // setPkid()

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

            $this->url_data = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->imagepk = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->status = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->type_status = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->urlimage = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->etatdoc = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->gicimimageid = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->gicimpoissonsid = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->fbsyncode = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->famille = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->name = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->author = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->catalog_no = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->country = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->region = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->locality = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->collector = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->datecollected = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->yearcollected = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->observations = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->medium = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->paysadmin = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->pkid = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = GicimPhotos27June13BakPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GicimPhotos27June13Bak object", $e);
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
            $con = Propel::getConnection(GicimPhotos27June13BakPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GicimPhotos27June13BakPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GicimPhotos27June13BakPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GicimPhotos27June13BakQuery::create()
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
            $con = Propel::getConnection(GicimPhotos27June13BakPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GicimPhotos27June13BakPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = GicimPhotos27June13BakPeer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GicimPhotos27June13BakPeer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::URL_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`URL_Data`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::IMAGEPK)) {
            $modifiedColumns[':p' . $index++]  = '`IMAGEPK`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`Status`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::TYPE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`Type_status`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::URLIMAGE)) {
            $modifiedColumns[':p' . $index++]  = '`URLIMAGE`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::ETATDOC)) {
            $modifiedColumns[':p' . $index++]  = '`ETATDOC`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::GICIMIMAGEID)) {
            $modifiedColumns[':p' . $index++]  = '`GICIMimageID`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::GICIMPOISSONSID)) {
            $modifiedColumns[':p' . $index++]  = '`GicimPoissonsID`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::FBSYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FBSYNCODE`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::FAMILLE)) {
            $modifiedColumns[':p' . $index++]  = '`FAMILLE`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`Name`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::CATALOG_NO)) {
            $modifiedColumns[':p' . $index++]  = '`Catalog_no`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`Country`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::REGION)) {
            $modifiedColumns[':p' . $index++]  = '`REGION`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::COLLECTOR)) {
            $modifiedColumns[':p' . $index++]  = '`Collector`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::DATECOLLECTED)) {
            $modifiedColumns[':p' . $index++]  = '`Datecollected`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::YEARCOLLECTED)) {
            $modifiedColumns[':p' . $index++]  = '`Yearcollected`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::OBSERVATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`OBSERVATIONS`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::MEDIUM)) {
            $modifiedColumns[':p' . $index++]  = '`Medium`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::PAYSADMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PAYSADMIN`';
        }
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `gicim_photos_27_june_13_bak` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`URL_Data`':
                        $stmt->bindValue($identifier, $this->url_data, PDO::PARAM_STR);
                        break;
                    case '`IMAGEPK`':
                        $stmt->bindValue($identifier, $this->imagepk, PDO::PARAM_STR);
                        break;
                    case '`Status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`Type_status`':
                        $stmt->bindValue($identifier, $this->type_status, PDO::PARAM_STR);
                        break;
                    case '`URLIMAGE`':
                        $stmt->bindValue($identifier, $this->urlimage, PDO::PARAM_STR);
                        break;
                    case '`ETATDOC`':
                        $stmt->bindValue($identifier, $this->etatdoc, PDO::PARAM_STR);
                        break;
                    case '`GICIMimageID`':
                        $stmt->bindValue($identifier, $this->gicimimageid, PDO::PARAM_STR);
                        break;
                    case '`GicimPoissonsID`':
                        $stmt->bindValue($identifier, $this->gicimpoissonsid, PDO::PARAM_STR);
                        break;
                    case '`FBSYNCODE`':
                        $stmt->bindValue($identifier, $this->fbsyncode, PDO::PARAM_STR);
                        break;
                    case '`FAMILLE`':
                        $stmt->bindValue($identifier, $this->famille, PDO::PARAM_STR);
                        break;
                    case '`Name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`Catalog_no`':
                        $stmt->bindValue($identifier, $this->catalog_no, PDO::PARAM_STR);
                        break;
                    case '`Country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`REGION`':
                        $stmt->bindValue($identifier, $this->region, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Collector`':
                        $stmt->bindValue($identifier, $this->collector, PDO::PARAM_STR);
                        break;
                    case '`Datecollected`':
                        $stmt->bindValue($identifier, $this->datecollected, PDO::PARAM_STR);
                        break;
                    case '`Yearcollected`':
                        $stmt->bindValue($identifier, $this->yearcollected, PDO::PARAM_STR);
                        break;
                    case '`OBSERVATIONS`':
                        $stmt->bindValue($identifier, $this->observations, PDO::PARAM_STR);
                        break;
                    case '`Medium`':
                        $stmt->bindValue($identifier, $this->medium, PDO::PARAM_STR);
                        break;
                    case '`PAYSADMIN`':
                        $stmt->bindValue($identifier, $this->paysadmin, PDO::PARAM_STR);
                        break;
                    case '`PKID`':
                        $stmt->bindValue($identifier, $this->pkid, PDO::PARAM_STR);
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
        $this->setPkid($pk);

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


            if (($retval = GicimPhotos27June13BakPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GicimPhotos27June13BakPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUrlData();
                break;
            case 1:
                return $this->getImagepk();
                break;
            case 2:
                return $this->getStatus();
                break;
            case 3:
                return $this->getTypeStatus();
                break;
            case 4:
                return $this->getUrlimage();
                break;
            case 5:
                return $this->getEtatdoc();
                break;
            case 6:
                return $this->getGicimimageid();
                break;
            case 7:
                return $this->getGicimpoissonsid();
                break;
            case 8:
                return $this->getFbsyncode();
                break;
            case 9:
                return $this->getFamille();
                break;
            case 10:
                return $this->getName();
                break;
            case 11:
                return $this->getAuthor();
                break;
            case 12:
                return $this->getCatalogNo();
                break;
            case 13:
                return $this->getCountry();
                break;
            case 14:
                return $this->getRegion();
                break;
            case 15:
                return $this->getLocality();
                break;
            case 16:
                return $this->getCollector();
                break;
            case 17:
                return $this->getDatecollected();
                break;
            case 18:
                return $this->getYearcollected();
                break;
            case 19:
                return $this->getObservations();
                break;
            case 20:
                return $this->getMedium();
                break;
            case 21:
                return $this->getPaysadmin();
                break;
            case 22:
                return $this->getPkid();
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
        if (isset($alreadyDumpedObjects['GicimPhotos27June13Bak'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GicimPhotos27June13Bak'][$this->getPrimaryKey()] = true;
        $keys = GicimPhotos27June13BakPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUrlData(),
            $keys[1] => $this->getImagepk(),
            $keys[2] => $this->getStatus(),
            $keys[3] => $this->getTypeStatus(),
            $keys[4] => $this->getUrlimage(),
            $keys[5] => $this->getEtatdoc(),
            $keys[6] => $this->getGicimimageid(),
            $keys[7] => $this->getGicimpoissonsid(),
            $keys[8] => $this->getFbsyncode(),
            $keys[9] => $this->getFamille(),
            $keys[10] => $this->getName(),
            $keys[11] => $this->getAuthor(),
            $keys[12] => $this->getCatalogNo(),
            $keys[13] => $this->getCountry(),
            $keys[14] => $this->getRegion(),
            $keys[15] => $this->getLocality(),
            $keys[16] => $this->getCollector(),
            $keys[17] => $this->getDatecollected(),
            $keys[18] => $this->getYearcollected(),
            $keys[19] => $this->getObservations(),
            $keys[20] => $this->getMedium(),
            $keys[21] => $this->getPaysadmin(),
            $keys[22] => $this->getPkid(),
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
        $pos = GicimPhotos27June13BakPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUrlData($value);
                break;
            case 1:
                $this->setImagepk($value);
                break;
            case 2:
                $this->setStatus($value);
                break;
            case 3:
                $this->setTypeStatus($value);
                break;
            case 4:
                $this->setUrlimage($value);
                break;
            case 5:
                $this->setEtatdoc($value);
                break;
            case 6:
                $this->setGicimimageid($value);
                break;
            case 7:
                $this->setGicimpoissonsid($value);
                break;
            case 8:
                $this->setFbsyncode($value);
                break;
            case 9:
                $this->setFamille($value);
                break;
            case 10:
                $this->setName($value);
                break;
            case 11:
                $this->setAuthor($value);
                break;
            case 12:
                $this->setCatalogNo($value);
                break;
            case 13:
                $this->setCountry($value);
                break;
            case 14:
                $this->setRegion($value);
                break;
            case 15:
                $this->setLocality($value);
                break;
            case 16:
                $this->setCollector($value);
                break;
            case 17:
                $this->setDatecollected($value);
                break;
            case 18:
                $this->setYearcollected($value);
                break;
            case 19:
                $this->setObservations($value);
                break;
            case 20:
                $this->setMedium($value);
                break;
            case 21:
                $this->setPaysadmin($value);
                break;
            case 22:
                $this->setPkid($value);
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
        $keys = GicimPhotos27June13BakPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUrlData($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setImagepk($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStatus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeStatus($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUrlimage($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEtatdoc($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGicimimageid($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGicimpoissonsid($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFbsyncode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFamille($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setName($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAuthor($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCatalogNo($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCountry($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRegion($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLocality($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCollector($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDatecollected($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setYearcollected($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setObservations($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMedium($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPaysadmin($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPkid($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GicimPhotos27June13BakPeer::DATABASE_NAME);

        if ($this->isColumnModified(GicimPhotos27June13BakPeer::URL_DATA)) $criteria->add(GicimPhotos27June13BakPeer::URL_DATA, $this->url_data);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::IMAGEPK)) $criteria->add(GicimPhotos27June13BakPeer::IMAGEPK, $this->imagepk);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::STATUS)) $criteria->add(GicimPhotos27June13BakPeer::STATUS, $this->status);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::TYPE_STATUS)) $criteria->add(GicimPhotos27June13BakPeer::TYPE_STATUS, $this->type_status);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::URLIMAGE)) $criteria->add(GicimPhotos27June13BakPeer::URLIMAGE, $this->urlimage);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::ETATDOC)) $criteria->add(GicimPhotos27June13BakPeer::ETATDOC, $this->etatdoc);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::GICIMIMAGEID)) $criteria->add(GicimPhotos27June13BakPeer::GICIMIMAGEID, $this->gicimimageid);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::GICIMPOISSONSID)) $criteria->add(GicimPhotos27June13BakPeer::GICIMPOISSONSID, $this->gicimpoissonsid);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::FBSYNCODE)) $criteria->add(GicimPhotos27June13BakPeer::FBSYNCODE, $this->fbsyncode);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::FAMILLE)) $criteria->add(GicimPhotos27June13BakPeer::FAMILLE, $this->famille);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::NAME)) $criteria->add(GicimPhotos27June13BakPeer::NAME, $this->name);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::AUTHOR)) $criteria->add(GicimPhotos27June13BakPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::CATALOG_NO)) $criteria->add(GicimPhotos27June13BakPeer::CATALOG_NO, $this->catalog_no);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::COUNTRY)) $criteria->add(GicimPhotos27June13BakPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::REGION)) $criteria->add(GicimPhotos27June13BakPeer::REGION, $this->region);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::LOCALITY)) $criteria->add(GicimPhotos27June13BakPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::COLLECTOR)) $criteria->add(GicimPhotos27June13BakPeer::COLLECTOR, $this->collector);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::DATECOLLECTED)) $criteria->add(GicimPhotos27June13BakPeer::DATECOLLECTED, $this->datecollected);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::YEARCOLLECTED)) $criteria->add(GicimPhotos27June13BakPeer::YEARCOLLECTED, $this->yearcollected);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::OBSERVATIONS)) $criteria->add(GicimPhotos27June13BakPeer::OBSERVATIONS, $this->observations);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::MEDIUM)) $criteria->add(GicimPhotos27June13BakPeer::MEDIUM, $this->medium);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::PAYSADMIN)) $criteria->add(GicimPhotos27June13BakPeer::PAYSADMIN, $this->paysadmin);
        if ($this->isColumnModified(GicimPhotos27June13BakPeer::PKID)) $criteria->add(GicimPhotos27June13BakPeer::PKID, $this->pkid);

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
        $criteria = new Criteria(GicimPhotos27June13BakPeer::DATABASE_NAME);
        $criteria->add(GicimPhotos27June13BakPeer::PKID, $this->pkid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getPkid();
    }

    /**
     * Generic method to set the primary key (pkid column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPkid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPkid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GicimPhotos27June13Bak (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUrlData($this->getUrlData());
        $copyObj->setImagepk($this->getImagepk());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setTypeStatus($this->getTypeStatus());
        $copyObj->setUrlimage($this->getUrlimage());
        $copyObj->setEtatdoc($this->getEtatdoc());
        $copyObj->setGicimimageid($this->getGicimimageid());
        $copyObj->setGicimpoissonsid($this->getGicimpoissonsid());
        $copyObj->setFbsyncode($this->getFbsyncode());
        $copyObj->setFamille($this->getFamille());
        $copyObj->setName($this->getName());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setCatalogNo($this->getCatalogNo());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setRegion($this->getRegion());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCollector($this->getCollector());
        $copyObj->setDatecollected($this->getDatecollected());
        $copyObj->setYearcollected($this->getYearcollected());
        $copyObj->setObservations($this->getObservations());
        $copyObj->setMedium($this->getMedium());
        $copyObj->setPaysadmin($this->getPaysadmin());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPkid(NULL); // this is a auto-increment column, so set to default value
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
     * @return GicimPhotos27June13Bak Clone of current object.
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
     * @return GicimPhotos27June13BakPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GicimPhotos27June13BakPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->url_data = null;
        $this->imagepk = null;
        $this->status = null;
        $this->type_status = null;
        $this->urlimage = null;
        $this->etatdoc = null;
        $this->gicimimageid = null;
        $this->gicimpoissonsid = null;
        $this->fbsyncode = null;
        $this->famille = null;
        $this->name = null;
        $this->author = null;
        $this->catalog_no = null;
        $this->country = null;
        $this->region = null;
        $this->locality = null;
        $this->collector = null;
        $this->datecollected = null;
        $this->yearcollected = null;
        $this->observations = null;
        $this->medium = null;
        $this->paysadmin = null;
        $this->pkid = null;
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
        return (string) $this->exportTo(GicimPhotos27June13BakPeer::DEFAULT_STRING_FORMAT);
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
