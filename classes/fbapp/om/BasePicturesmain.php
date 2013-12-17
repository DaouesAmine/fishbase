<?php


/**
 * Base class that represents a row from the 'picturesmain' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePicturesmain extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PicturesmainPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PicturesmainPeer
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
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the picgenus field.
     * @var        string
     */
    protected $picgenus;

    /**
     * The value for the picspecies field.
     * @var        string
     */
    protected $picspecies;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the picname field.
     * @var        string
     */
    protected $picname;

    /**
     * The value for the scanned field.
     * @var        int
     */
    protected $scanned;

    /**
     * The value for the picturetype field.
     * @var        string
     */
    protected $picturetype;

    /**
     * The value for the pictype field.
     * @var        string
     */
    protected $pictype;

    /**
     * The value for the rank field.
     * @var        int
     */
    protected $rank;

    /**
     * The value for the bestpic field.
     * @var        int
     */
    protected $bestpic;

    /**
     * The value for the score field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $score;

    /**
     * The value for the occurrence field.
     * @var        int
     */
    protected $occurrence;

    /**
     * The value for the cdrom field.
     * @var        int
     */
    protected $cdrom;

    /**
     * The value for the lifestage field.
     * @var        string
     */
    protected $lifestage;

    /**
     * The value for the size field.
     * @var        double
     */
    protected $size;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the size2 field.
     * @var        double
     */
    protected $size2;

    /**
     * The value for the lenghttype2 field.
     * @var        string
     */
    protected $lenghttype2;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the province field.
     * @var        string
     */
    protected $province;

    /**
     * The value for the latdeg field.
     * @var        int
     */
    protected $latdeg;

    /**
     * The value for the latmin field.
     * @var        double
     */
    protected $latmin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the longdeg field.
     * @var        int
     */
    protected $longdeg;

    /**
     * The value for the longmin field.
     * @var        double
     */
    protected $longmin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the depth field.
     * @var        double
     */
    protected $depth;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the authname field.
     * @var        string
     */
    protected $authname;

    /**
     * The value for the reference field.
     * @var        int
     */
    protected $reference;

    /**
     * The value for the pagecode field.
     * @var        string
     */
    protected $pagecode;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the logofile field.
     * @var        string
     */
    protected $logofile;

    /**
     * The value for the copyright field.
     * @var        string
     */
    protected $copyright;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the publicdomain field.
     * @var        boolean
     */
    protected $publicdomain;

    /**
     * The value for the newpic field.
     * @var        string
     */
    protected $newpic;

    /**
     * The value for the picpreferred field.
     * @var        boolean
     */
    protected $picpreferred;

    /**
     * The value for the picpreferredmale field.
     * @var        boolean
     */
    protected $picpreferredmale;

    /**
     * The value for the picpreferredfem field.
     * @var        boolean
     */
    protected $picpreferredfem;

    /**
     * The value for the picpreferredjuv field.
     * @var        boolean
     */
    protected $picpreferredjuv;

    /**
     * The value for the eol field.
     * @var        int
     */
    protected $eol;

    /**
     * The value for the taxo field.
     * @var        int
     */
    protected $taxo;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->score = 0;
    }

    /**
     * Initializes internal state of BasePicturesmain object.
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [picgenus] column value.
     *
     * @return string
     */
    public function getPicgenus()
    {

        return $this->picgenus;
    }

    /**
     * Get the [picspecies] column value.
     *
     * @return string
     */
    public function getPicspecies()
    {

        return $this->picspecies;
    }

    /**
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
    }

    /**
     * Get the [picname] column value.
     *
     * @return string
     */
    public function getPicname()
    {

        return $this->picname;
    }

    /**
     * Get the [scanned] column value.
     *
     * @return int
     */
    public function getScanned()
    {

        return $this->scanned;
    }

    /**
     * Get the [picturetype] column value.
     *
     * @return string
     */
    public function getPicturetype()
    {

        return $this->picturetype;
    }

    /**
     * Get the [pictype] column value.
     *
     * @return string
     */
    public function getPictype()
    {

        return $this->pictype;
    }

    /**
     * Get the [rank] column value.
     *
     * @return int
     */
    public function getRank()
    {

        return $this->rank;
    }

    /**
     * Get the [bestpic] column value.
     *
     * @return int
     */
    public function getBestpic()
    {

        return $this->bestpic;
    }

    /**
     * Get the [score] column value.
     *
     * @return int
     */
    public function getScore()
    {

        return $this->score;
    }

    /**
     * Get the [occurrence] column value.
     *
     * @return int
     */
    public function getOccurrence()
    {

        return $this->occurrence;
    }

    /**
     * Get the [cdrom] column value.
     *
     * @return int
     */
    public function getCdrom()
    {

        return $this->cdrom;
    }

    /**
     * Get the [lifestage] column value.
     *
     * @return string
     */
    public function getLifestage()
    {

        return $this->lifestage;
    }

    /**
     * Get the [size] column value.
     *
     * @return double
     */
    public function getSize()
    {

        return $this->size;
    }

    /**
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
    }

    /**
     * Get the [size2] column value.
     *
     * @return double
     */
    public function getSize2()
    {

        return $this->size2;
    }

    /**
     * Get the [lenghttype2] column value.
     *
     * @return string
     */
    public function getLenghttype2()
    {

        return $this->lenghttype2;
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
     * Get the [province] column value.
     *
     * @return string
     */
    public function getProvince()
    {

        return $this->province;
    }

    /**
     * Get the [latdeg] column value.
     *
     * @return int
     */
    public function getLatdeg()
    {

        return $this->latdeg;
    }

    /**
     * Get the [latmin] column value.
     *
     * @return double
     */
    public function getLatmin()
    {

        return $this->latmin;
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
     * Get the [longdeg] column value.
     *
     * @return int
     */
    public function getLongdeg()
    {

        return $this->longdeg;
    }

    /**
     * Get the [longmin] column value.
     *
     * @return double
     */
    public function getLongmin()
    {

        return $this->longmin;
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
     * Get the [depth] column value.
     *
     * @return double
     */
    public function getDepth()
    {

        return $this->depth;
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
     * Get the [optionally formatted] temporal [date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = '%x')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
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
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [authname] column value.
     *
     * @return string
     */
    public function getAuthname()
    {

        return $this->authname;
    }

    /**
     * Get the [reference] column value.
     *
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [pagecode] column value.
     *
     * @return string
     */
    public function getPagecode()
    {

        return $this->pagecode;
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
     * Get the [logofile] column value.
     *
     * @return string
     */
    public function getLogofile()
    {

        return $this->logofile;
    }

    /**
     * Get the [copyright] column value.
     *
     * @return string
     */
    public function getCopyright()
    {

        return $this->copyright;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [publicdomain] column value.
     *
     * @return boolean
     */
    public function getPublicdomain()
    {

        return $this->publicdomain;
    }

    /**
     * Get the [newpic] column value.
     *
     * @return string
     */
    public function getNewpic()
    {

        return $this->newpic;
    }

    /**
     * Get the [picpreferred] column value.
     *
     * @return boolean
     */
    public function getPicpreferred()
    {

        return $this->picpreferred;
    }

    /**
     * Get the [picpreferredmale] column value.
     *
     * @return boolean
     */
    public function getPicpreferredmale()
    {

        return $this->picpreferredmale;
    }

    /**
     * Get the [picpreferredfem] column value.
     *
     * @return boolean
     */
    public function getPicpreferredfem()
    {

        return $this->picpreferredfem;
    }

    /**
     * Get the [picpreferredjuv] column value.
     *
     * @return boolean
     */
    public function getPicpreferredjuv()
    {

        return $this->picpreferredjuv;
    }

    /**
     * Get the [eol] column value.
     *
     * @return int
     */
    public function getEol()
    {

        return $this->eol;
    }

    /**
     * Get the [taxo] column value.
     *
     * @return int
     */
    public function getTaxo()
    {

        return $this->taxo;
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
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = PicturesmainPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = PicturesmainPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [picgenus] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicgenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picgenus !== $v) {
            $this->picgenus = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICGENUS;
        }


        return $this;
    } // setPicgenus()

    /**
     * Set the value of [picspecies] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picspecies !== $v) {
            $this->picspecies = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICSPECIES;
        }


        return $this;
    } // setPicspecies()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = PicturesmainPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [picname] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picname !== $v) {
            $this->picname = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICNAME;
        }


        return $this;
    } // setPicname()

    /**
     * Set the value of [scanned] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setScanned($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->scanned !== $v) {
            $this->scanned = $v;
            $this->modifiedColumns[] = PicturesmainPeer::SCANNED;
        }


        return $this;
    } // setScanned()

    /**
     * Set the value of [picturetype] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicturetype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picturetype !== $v) {
            $this->picturetype = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICTURETYPE;
        }


        return $this;
    } // setPicturetype()

    /**
     * Set the value of [pictype] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPictype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pictype !== $v) {
            $this->pictype = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICTYPE;
        }


        return $this;
    } // setPictype()

    /**
     * Set the value of [rank] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setRank($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rank !== $v) {
            $this->rank = $v;
            $this->modifiedColumns[] = PicturesmainPeer::RANK;
        }


        return $this;
    } // setRank()

    /**
     * Set the value of [bestpic] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setBestpic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestpic !== $v) {
            $this->bestpic = $v;
            $this->modifiedColumns[] = PicturesmainPeer::BESTPIC;
        }


        return $this;
    } // setBestpic()

    /**
     * Set the value of [score] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setScore($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->score !== $v) {
            $this->score = $v;
            $this->modifiedColumns[] = PicturesmainPeer::SCORE;
        }


        return $this;
    } // setScore()

    /**
     * Set the value of [occurrence] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setOccurrence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->occurrence !== $v) {
            $this->occurrence = $v;
            $this->modifiedColumns[] = PicturesmainPeer::OCCURRENCE;
        }


        return $this;
    } // setOccurrence()

    /**
     * Set the value of [cdrom] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setCdrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cdrom !== $v) {
            $this->cdrom = $v;
            $this->modifiedColumns[] = PicturesmainPeer::CDROM;
        }


        return $this;
    } // setCdrom()

    /**
     * Set the value of [lifestage] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLifestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifestage !== $v) {
            $this->lifestage = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LIFESTAGE;
        }


        return $this;
    } // setLifestage()

    /**
     * Set the value of [size] column.
     *
     * @param  double $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setSize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->size !== $v) {
            $this->size = $v;
            $this->modifiedColumns[] = PicturesmainPeer::SIZE;
        }


        return $this;
    } // setSize()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [size2] column.
     *
     * @param  double $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setSize2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->size2 !== $v) {
            $this->size2 = $v;
            $this->modifiedColumns[] = PicturesmainPeer::SIZE2;
        }


        return $this;
    } // setSize2()

    /**
     * Set the value of [lenghttype2] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLenghttype2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lenghttype2 !== $v) {
            $this->lenghttype2 = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LENGHTTYPE2;
        }


        return $this;
    } // setLenghttype2()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [province] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->province !== $v) {
            $this->province = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PROVINCE;
        }


        return $this;
    } // setProvince()

    /**
     * Set the value of [latdeg] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLatdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdeg !== $v) {
            $this->latdeg = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LATDEG;
        }


        return $this;
    } // setLatdeg()

    /**
     * Set the value of [latmin] column.
     *
     * @param  double $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latmin !== $v) {
            $this->latmin = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LATMIN;
        }


        return $this;
    } // setLatmin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = PicturesmainPeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [longdeg] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLongdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdeg !== $v) {
            $this->longdeg = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LONGDEG;
        }


        return $this;
    } // setLongdeg()

    /**
     * Set the value of [longmin] column.
     *
     * @param  double $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLongmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longmin !== $v) {
            $this->longmin = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LONGMIN;
        }


        return $this;
    } // setLongmin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = PicturesmainPeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Set the value of [depth] column.
     *
     * @param  double $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setDepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depth !== $v) {
            $this->depth = $v;
            $this->modifiedColumns[] = PicturesmainPeer::DEPTH;
        }


        return $this;
    } // setDepth()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = PicturesmainPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = PicturesmainPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = PicturesmainPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [authname] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setAuthname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authname !== $v) {
            $this->authname = $v;
            $this->modifiedColumns[] = PicturesmainPeer::AUTHNAME;
        }


        return $this;
    } // setAuthname()

    /**
     * Set the value of [reference] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = PicturesmainPeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [pagecode] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPagecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pagecode !== $v) {
            $this->pagecode = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PAGECODE;
        }


        return $this;
    } // setPagecode()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = PicturesmainPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [logofile] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setLogofile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logofile !== $v) {
            $this->logofile = $v;
            $this->modifiedColumns[] = PicturesmainPeer::LOGOFILE;
        }


        return $this;
    } // setLogofile()

    /**
     * Set the value of [copyright] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setCopyright($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->copyright !== $v) {
            $this->copyright = $v;
            $this->modifiedColumns[] = PicturesmainPeer::COPYRIGHT;
        }


        return $this;
    } // setCopyright()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = PicturesmainPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Sets the value of the [publicdomain] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPublicdomain($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->publicdomain !== $v) {
            $this->publicdomain = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PUBLICDOMAIN;
        }


        return $this;
    } // setPublicdomain()

    /**
     * Set the value of [newpic] column.
     *
     * @param  string $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setNewpic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->newpic !== $v) {
            $this->newpic = $v;
            $this->modifiedColumns[] = PicturesmainPeer::NEWPIC;
        }


        return $this;
    } // setNewpic()

    /**
     * Sets the value of the [picpreferred] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicpreferred($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->picpreferred !== $v) {
            $this->picpreferred = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICPREFERRED;
        }


        return $this;
    } // setPicpreferred()

    /**
     * Sets the value of the [picpreferredmale] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicpreferredmale($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->picpreferredmale !== $v) {
            $this->picpreferredmale = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICPREFERREDMALE;
        }


        return $this;
    } // setPicpreferredmale()

    /**
     * Sets the value of the [picpreferredfem] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicpreferredfem($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->picpreferredfem !== $v) {
            $this->picpreferredfem = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICPREFERREDFEM;
        }


        return $this;
    } // setPicpreferredfem()

    /**
     * Sets the value of the [picpreferredjuv] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setPicpreferredjuv($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->picpreferredjuv !== $v) {
            $this->picpreferredjuv = $v;
            $this->modifiedColumns[] = PicturesmainPeer::PICPREFERREDJUV;
        }


        return $this;
    } // setPicpreferredjuv()

    /**
     * Set the value of [eol] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setEol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eol !== $v) {
            $this->eol = $v;
            $this->modifiedColumns[] = PicturesmainPeer::EOL;
        }


        return $this;
    } // setEol()

    /**
     * Set the value of [taxo] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setTaxo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taxo !== $v) {
            $this->taxo = $v;
            $this->modifiedColumns[] = PicturesmainPeer::TAXO;
        }


        return $this;
    } // setTaxo()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = PicturesmainPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = PicturesmainPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = PicturesmainPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = PicturesmainPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = PicturesmainPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = PicturesmainPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Picturesmain The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PicturesmainPeer::TS;
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
            if ($this->score !== 0) {
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
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->picgenus = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->picspecies = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->syncode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->picname = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->scanned = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->picturetype = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->pictype = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->rank = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->bestpic = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->score = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->occurrence = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->cdrom = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->lifestage = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->size = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->lengthtype = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->size2 = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->lenghttype2 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->locality = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->province = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->latdeg = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->latmin = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->northsouth = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->longdeg = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->longmin = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->eastwest = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->depth = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->remark = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->date = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->c_code = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->authname = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->reference = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->pagecode = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->url = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->logofile = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->copyright = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->comment = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->publicdomain = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
            $this->newpic = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->picpreferred = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
            $this->picpreferredmale = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
            $this->picpreferredfem = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
            $this->picpreferredjuv = ($row[$startcol + 43] !== null) ? (boolean) $row[$startcol + 43] : null;
            $this->eol = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->taxo = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->entered = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->dateentered = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->modified = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->datemodified = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->expert = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->datechecked = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ts = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 53; // 53 = PicturesmainPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Picturesmain object", $e);
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
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PicturesmainPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PicturesmainQuery::create()
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
            $con = Propel::getConnection(PicturesmainPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PicturesmainPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PicturesmainPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PicturesmainPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PicturesmainPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(PicturesmainPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`PicGenus`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`PicSpecies`';
        }
        if ($this->isColumnModified(PicturesmainPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Syncode`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PicName`';
        }
        if ($this->isColumnModified(PicturesmainPeer::SCANNED)) {
            $modifiedColumns[':p' . $index++]  = '`Scanned`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICTURETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`PictureType`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`PicType`';
        }
        if ($this->isColumnModified(PicturesmainPeer::RANK)) {
            $modifiedColumns[':p' . $index++]  = '`Rank`';
        }
        if ($this->isColumnModified(PicturesmainPeer::BESTPIC)) {
            $modifiedColumns[':p' . $index++]  = '`BestPic`';
        }
        if ($this->isColumnModified(PicturesmainPeer::SCORE)) {
            $modifiedColumns[':p' . $index++]  = '`Score`';
        }
        if ($this->isColumnModified(PicturesmainPeer::OCCURRENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Occurrence`';
        }
        if ($this->isColumnModified(PicturesmainPeer::CDROM)) {
            $modifiedColumns[':p' . $index++]  = '`CDROM`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LIFESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`LifeStage`';
        }
        if ($this->isColumnModified(PicturesmainPeer::SIZE)) {
            $modifiedColumns[':p' . $index++]  = '`Size`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(PicturesmainPeer::SIZE2)) {
            $modifiedColumns[':p' . $index++]  = '`Size2`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LENGHTTYPE2)) {
            $modifiedColumns[':p' . $index++]  = '`LenghtType2`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`Province`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LATDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatDeg`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatMin`';
        }
        if ($this->isColumnModified(PicturesmainPeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LONGDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongDeg`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LONGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongMin`';
        }
        if ($this->isColumnModified(PicturesmainPeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(PicturesmainPeer::DEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`Depth`';
        }
        if ($this->isColumnModified(PicturesmainPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(PicturesmainPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`Date`';
        }
        if ($this->isColumnModified(PicturesmainPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(PicturesmainPeer::AUTHNAME)) {
            $modifiedColumns[':p' . $index++]  = '`AuthName`';
        }
        if ($this->isColumnModified(PicturesmainPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Reference`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PAGECODE)) {
            $modifiedColumns[':p' . $index++]  = '`PageCode`';
        }
        if ($this->isColumnModified(PicturesmainPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(PicturesmainPeer::LOGOFILE)) {
            $modifiedColumns[':p' . $index++]  = '`LogoFile`';
        }
        if ($this->isColumnModified(PicturesmainPeer::COPYRIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`Copyright`';
        }
        if ($this->isColumnModified(PicturesmainPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PUBLICDOMAIN)) {
            $modifiedColumns[':p' . $index++]  = '`PublicDomain`';
        }
        if ($this->isColumnModified(PicturesmainPeer::NEWPIC)) {
            $modifiedColumns[':p' . $index++]  = '`NewPic`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERRED)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferred`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERREDMALE)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredMale`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERREDFEM)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredFem`';
        }
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERREDJUV)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredJuv`';
        }
        if ($this->isColumnModified(PicturesmainPeer::EOL)) {
            $modifiedColumns[':p' . $index++]  = '`EOL`';
        }
        if ($this->isColumnModified(PicturesmainPeer::TAXO)) {
            $modifiedColumns[':p' . $index++]  = '`Taxo`';
        }
        if ($this->isColumnModified(PicturesmainPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(PicturesmainPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(PicturesmainPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(PicturesmainPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(PicturesmainPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(PicturesmainPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(PicturesmainPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `picturesmain` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`autoctr`':
                        $stmt->bindValue($identifier, $this->autoctr, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`PicGenus`':
                        $stmt->bindValue($identifier, $this->picgenus, PDO::PARAM_STR);
                        break;
                    case '`PicSpecies`':
                        $stmt->bindValue($identifier, $this->picspecies, PDO::PARAM_STR);
                        break;
                    case '`Syncode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`PicName`':
                        $stmt->bindValue($identifier, $this->picname, PDO::PARAM_STR);
                        break;
                    case '`Scanned`':
                        $stmt->bindValue($identifier, $this->scanned, PDO::PARAM_INT);
                        break;
                    case '`PictureType`':
                        $stmt->bindValue($identifier, $this->picturetype, PDO::PARAM_STR);
                        break;
                    case '`PicType`':
                        $stmt->bindValue($identifier, $this->pictype, PDO::PARAM_STR);
                        break;
                    case '`Rank`':
                        $stmt->bindValue($identifier, $this->rank, PDO::PARAM_INT);
                        break;
                    case '`BestPic`':
                        $stmt->bindValue($identifier, $this->bestpic, PDO::PARAM_INT);
                        break;
                    case '`Score`':
                        $stmt->bindValue($identifier, $this->score, PDO::PARAM_INT);
                        break;
                    case '`Occurrence`':
                        $stmt->bindValue($identifier, $this->occurrence, PDO::PARAM_INT);
                        break;
                    case '`CDROM`':
                        $stmt->bindValue($identifier, $this->cdrom, PDO::PARAM_INT);
                        break;
                    case '`LifeStage`':
                        $stmt->bindValue($identifier, $this->lifestage, PDO::PARAM_STR);
                        break;
                    case '`Size`':
                        $stmt->bindValue($identifier, $this->size, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`Size2`':
                        $stmt->bindValue($identifier, $this->size2, PDO::PARAM_STR);
                        break;
                    case '`LenghtType2`':
                        $stmt->bindValue($identifier, $this->lenghttype2, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Province`':
                        $stmt->bindValue($identifier, $this->province, PDO::PARAM_STR);
                        break;
                    case '`LatDeg`':
                        $stmt->bindValue($identifier, $this->latdeg, PDO::PARAM_INT);
                        break;
                    case '`LatMin`':
                        $stmt->bindValue($identifier, $this->latmin, PDO::PARAM_STR);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LongDeg`':
                        $stmt->bindValue($identifier, $this->longdeg, PDO::PARAM_INT);
                        break;
                    case '`LongMin`':
                        $stmt->bindValue($identifier, $this->longmin, PDO::PARAM_STR);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`Depth`':
                        $stmt->bindValue($identifier, $this->depth, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`Date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`AuthName`':
                        $stmt->bindValue($identifier, $this->authname, PDO::PARAM_STR);
                        break;
                    case '`Reference`':
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case '`PageCode`':
                        $stmt->bindValue($identifier, $this->pagecode, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`LogoFile`':
                        $stmt->bindValue($identifier, $this->logofile, PDO::PARAM_STR);
                        break;
                    case '`Copyright`':
                        $stmt->bindValue($identifier, $this->copyright, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`PublicDomain`':
                        $stmt->bindValue($identifier, (int) $this->publicdomain, PDO::PARAM_INT);
                        break;
                    case '`NewPic`':
                        $stmt->bindValue($identifier, $this->newpic, PDO::PARAM_STR);
                        break;
                    case '`PicPreferred`':
                        $stmt->bindValue($identifier, (int) $this->picpreferred, PDO::PARAM_INT);
                        break;
                    case '`PicPreferredMale`':
                        $stmt->bindValue($identifier, (int) $this->picpreferredmale, PDO::PARAM_INT);
                        break;
                    case '`PicPreferredFem`':
                        $stmt->bindValue($identifier, (int) $this->picpreferredfem, PDO::PARAM_INT);
                        break;
                    case '`PicPreferredJuv`':
                        $stmt->bindValue($identifier, (int) $this->picpreferredjuv, PDO::PARAM_INT);
                        break;
                    case '`EOL`':
                        $stmt->bindValue($identifier, $this->eol, PDO::PARAM_INT);
                        break;
                    case '`Taxo`':
                        $stmt->bindValue($identifier, $this->taxo, PDO::PARAM_INT);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
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


            if (($retval = PicturesmainPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PicturesmainPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getPicgenus();
                break;
            case 3:
                return $this->getPicspecies();
                break;
            case 4:
                return $this->getSyncode();
                break;
            case 5:
                return $this->getPicname();
                break;
            case 6:
                return $this->getScanned();
                break;
            case 7:
                return $this->getPicturetype();
                break;
            case 8:
                return $this->getPictype();
                break;
            case 9:
                return $this->getRank();
                break;
            case 10:
                return $this->getBestpic();
                break;
            case 11:
                return $this->getScore();
                break;
            case 12:
                return $this->getOccurrence();
                break;
            case 13:
                return $this->getCdrom();
                break;
            case 14:
                return $this->getLifestage();
                break;
            case 15:
                return $this->getSize();
                break;
            case 16:
                return $this->getLengthtype();
                break;
            case 17:
                return $this->getSize2();
                break;
            case 18:
                return $this->getLenghttype2();
                break;
            case 19:
                return $this->getLocality();
                break;
            case 20:
                return $this->getProvince();
                break;
            case 21:
                return $this->getLatdeg();
                break;
            case 22:
                return $this->getLatmin();
                break;
            case 23:
                return $this->getNorthsouth();
                break;
            case 24:
                return $this->getLongdeg();
                break;
            case 25:
                return $this->getLongmin();
                break;
            case 26:
                return $this->getEastwest();
                break;
            case 27:
                return $this->getDepth();
                break;
            case 28:
                return $this->getRemark();
                break;
            case 29:
                return $this->getDate();
                break;
            case 30:
                return $this->getCCode();
                break;
            case 31:
                return $this->getAuthname();
                break;
            case 32:
                return $this->getReference();
                break;
            case 33:
                return $this->getPagecode();
                break;
            case 34:
                return $this->getUrl();
                break;
            case 35:
                return $this->getLogofile();
                break;
            case 36:
                return $this->getCopyright();
                break;
            case 37:
                return $this->getComment();
                break;
            case 38:
                return $this->getPublicdomain();
                break;
            case 39:
                return $this->getNewpic();
                break;
            case 40:
                return $this->getPicpreferred();
                break;
            case 41:
                return $this->getPicpreferredmale();
                break;
            case 42:
                return $this->getPicpreferredfem();
                break;
            case 43:
                return $this->getPicpreferredjuv();
                break;
            case 44:
                return $this->getEol();
                break;
            case 45:
                return $this->getTaxo();
                break;
            case 46:
                return $this->getEntered();
                break;
            case 47:
                return $this->getDateentered();
                break;
            case 48:
                return $this->getModified();
                break;
            case 49:
                return $this->getDatemodified();
                break;
            case 50:
                return $this->getExpert();
                break;
            case 51:
                return $this->getDatechecked();
                break;
            case 52:
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
        if (isset($alreadyDumpedObjects['Picturesmain'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Picturesmain'][$this->getPrimaryKey()] = true;
        $keys = PicturesmainPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getPicgenus(),
            $keys[3] => $this->getPicspecies(),
            $keys[4] => $this->getSyncode(),
            $keys[5] => $this->getPicname(),
            $keys[6] => $this->getScanned(),
            $keys[7] => $this->getPicturetype(),
            $keys[8] => $this->getPictype(),
            $keys[9] => $this->getRank(),
            $keys[10] => $this->getBestpic(),
            $keys[11] => $this->getScore(),
            $keys[12] => $this->getOccurrence(),
            $keys[13] => $this->getCdrom(),
            $keys[14] => $this->getLifestage(),
            $keys[15] => $this->getSize(),
            $keys[16] => $this->getLengthtype(),
            $keys[17] => $this->getSize2(),
            $keys[18] => $this->getLenghttype2(),
            $keys[19] => $this->getLocality(),
            $keys[20] => $this->getProvince(),
            $keys[21] => $this->getLatdeg(),
            $keys[22] => $this->getLatmin(),
            $keys[23] => $this->getNorthsouth(),
            $keys[24] => $this->getLongdeg(),
            $keys[25] => $this->getLongmin(),
            $keys[26] => $this->getEastwest(),
            $keys[27] => $this->getDepth(),
            $keys[28] => $this->getRemark(),
            $keys[29] => $this->getDate(),
            $keys[30] => $this->getCCode(),
            $keys[31] => $this->getAuthname(),
            $keys[32] => $this->getReference(),
            $keys[33] => $this->getPagecode(),
            $keys[34] => $this->getUrl(),
            $keys[35] => $this->getLogofile(),
            $keys[36] => $this->getCopyright(),
            $keys[37] => $this->getComment(),
            $keys[38] => $this->getPublicdomain(),
            $keys[39] => $this->getNewpic(),
            $keys[40] => $this->getPicpreferred(),
            $keys[41] => $this->getPicpreferredmale(),
            $keys[42] => $this->getPicpreferredfem(),
            $keys[43] => $this->getPicpreferredjuv(),
            $keys[44] => $this->getEol(),
            $keys[45] => $this->getTaxo(),
            $keys[46] => $this->getEntered(),
            $keys[47] => $this->getDateentered(),
            $keys[48] => $this->getModified(),
            $keys[49] => $this->getDatemodified(),
            $keys[50] => $this->getExpert(),
            $keys[51] => $this->getDatechecked(),
            $keys[52] => $this->getTs(),
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
        $pos = PicturesmainPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setPicgenus($value);
                break;
            case 3:
                $this->setPicspecies($value);
                break;
            case 4:
                $this->setSyncode($value);
                break;
            case 5:
                $this->setPicname($value);
                break;
            case 6:
                $this->setScanned($value);
                break;
            case 7:
                $this->setPicturetype($value);
                break;
            case 8:
                $this->setPictype($value);
                break;
            case 9:
                $this->setRank($value);
                break;
            case 10:
                $this->setBestpic($value);
                break;
            case 11:
                $this->setScore($value);
                break;
            case 12:
                $this->setOccurrence($value);
                break;
            case 13:
                $this->setCdrom($value);
                break;
            case 14:
                $this->setLifestage($value);
                break;
            case 15:
                $this->setSize($value);
                break;
            case 16:
                $this->setLengthtype($value);
                break;
            case 17:
                $this->setSize2($value);
                break;
            case 18:
                $this->setLenghttype2($value);
                break;
            case 19:
                $this->setLocality($value);
                break;
            case 20:
                $this->setProvince($value);
                break;
            case 21:
                $this->setLatdeg($value);
                break;
            case 22:
                $this->setLatmin($value);
                break;
            case 23:
                $this->setNorthsouth($value);
                break;
            case 24:
                $this->setLongdeg($value);
                break;
            case 25:
                $this->setLongmin($value);
                break;
            case 26:
                $this->setEastwest($value);
                break;
            case 27:
                $this->setDepth($value);
                break;
            case 28:
                $this->setRemark($value);
                break;
            case 29:
                $this->setDate($value);
                break;
            case 30:
                $this->setCCode($value);
                break;
            case 31:
                $this->setAuthname($value);
                break;
            case 32:
                $this->setReference($value);
                break;
            case 33:
                $this->setPagecode($value);
                break;
            case 34:
                $this->setUrl($value);
                break;
            case 35:
                $this->setLogofile($value);
                break;
            case 36:
                $this->setCopyright($value);
                break;
            case 37:
                $this->setComment($value);
                break;
            case 38:
                $this->setPublicdomain($value);
                break;
            case 39:
                $this->setNewpic($value);
                break;
            case 40:
                $this->setPicpreferred($value);
                break;
            case 41:
                $this->setPicpreferredmale($value);
                break;
            case 42:
                $this->setPicpreferredfem($value);
                break;
            case 43:
                $this->setPicpreferredjuv($value);
                break;
            case 44:
                $this->setEol($value);
                break;
            case 45:
                $this->setTaxo($value);
                break;
            case 46:
                $this->setEntered($value);
                break;
            case 47:
                $this->setDateentered($value);
                break;
            case 48:
                $this->setModified($value);
                break;
            case 49:
                $this->setDatemodified($value);
                break;
            case 50:
                $this->setExpert($value);
                break;
            case 51:
                $this->setDatechecked($value);
                break;
            case 52:
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
        $keys = PicturesmainPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPicgenus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPicspecies($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSyncode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPicname($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setScanned($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPicturetype($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPictype($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRank($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBestpic($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setScore($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOccurrence($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCdrom($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLifestage($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSize($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLengthtype($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSize2($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLenghttype2($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setLocality($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setProvince($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLatdeg($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLatmin($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setNorthsouth($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLongdeg($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setLongmin($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setEastwest($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDepth($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setRemark($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDate($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCCode($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAuthname($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setReference($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setPagecode($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setUrl($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLogofile($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setCopyright($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setComment($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setPublicdomain($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setNewpic($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setPicpreferred($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setPicpreferredmale($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setPicpreferredfem($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setPicpreferredjuv($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setEol($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setTaxo($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setEntered($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setDateentered($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setModified($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setDatemodified($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setExpert($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDatechecked($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTs($arr[$keys[52]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PicturesmainPeer::DATABASE_NAME);

        if ($this->isColumnModified(PicturesmainPeer::AUTOCTR)) $criteria->add(PicturesmainPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(PicturesmainPeer::SPECCODE)) $criteria->add(PicturesmainPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(PicturesmainPeer::PICGENUS)) $criteria->add(PicturesmainPeer::PICGENUS, $this->picgenus);
        if ($this->isColumnModified(PicturesmainPeer::PICSPECIES)) $criteria->add(PicturesmainPeer::PICSPECIES, $this->picspecies);
        if ($this->isColumnModified(PicturesmainPeer::SYNCODE)) $criteria->add(PicturesmainPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(PicturesmainPeer::PICNAME)) $criteria->add(PicturesmainPeer::PICNAME, $this->picname);
        if ($this->isColumnModified(PicturesmainPeer::SCANNED)) $criteria->add(PicturesmainPeer::SCANNED, $this->scanned);
        if ($this->isColumnModified(PicturesmainPeer::PICTURETYPE)) $criteria->add(PicturesmainPeer::PICTURETYPE, $this->picturetype);
        if ($this->isColumnModified(PicturesmainPeer::PICTYPE)) $criteria->add(PicturesmainPeer::PICTYPE, $this->pictype);
        if ($this->isColumnModified(PicturesmainPeer::RANK)) $criteria->add(PicturesmainPeer::RANK, $this->rank);
        if ($this->isColumnModified(PicturesmainPeer::BESTPIC)) $criteria->add(PicturesmainPeer::BESTPIC, $this->bestpic);
        if ($this->isColumnModified(PicturesmainPeer::SCORE)) $criteria->add(PicturesmainPeer::SCORE, $this->score);
        if ($this->isColumnModified(PicturesmainPeer::OCCURRENCE)) $criteria->add(PicturesmainPeer::OCCURRENCE, $this->occurrence);
        if ($this->isColumnModified(PicturesmainPeer::CDROM)) $criteria->add(PicturesmainPeer::CDROM, $this->cdrom);
        if ($this->isColumnModified(PicturesmainPeer::LIFESTAGE)) $criteria->add(PicturesmainPeer::LIFESTAGE, $this->lifestage);
        if ($this->isColumnModified(PicturesmainPeer::SIZE)) $criteria->add(PicturesmainPeer::SIZE, $this->size);
        if ($this->isColumnModified(PicturesmainPeer::LENGTHTYPE)) $criteria->add(PicturesmainPeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(PicturesmainPeer::SIZE2)) $criteria->add(PicturesmainPeer::SIZE2, $this->size2);
        if ($this->isColumnModified(PicturesmainPeer::LENGHTTYPE2)) $criteria->add(PicturesmainPeer::LENGHTTYPE2, $this->lenghttype2);
        if ($this->isColumnModified(PicturesmainPeer::LOCALITY)) $criteria->add(PicturesmainPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(PicturesmainPeer::PROVINCE)) $criteria->add(PicturesmainPeer::PROVINCE, $this->province);
        if ($this->isColumnModified(PicturesmainPeer::LATDEG)) $criteria->add(PicturesmainPeer::LATDEG, $this->latdeg);
        if ($this->isColumnModified(PicturesmainPeer::LATMIN)) $criteria->add(PicturesmainPeer::LATMIN, $this->latmin);
        if ($this->isColumnModified(PicturesmainPeer::NORTHSOUTH)) $criteria->add(PicturesmainPeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(PicturesmainPeer::LONGDEG)) $criteria->add(PicturesmainPeer::LONGDEG, $this->longdeg);
        if ($this->isColumnModified(PicturesmainPeer::LONGMIN)) $criteria->add(PicturesmainPeer::LONGMIN, $this->longmin);
        if ($this->isColumnModified(PicturesmainPeer::EASTWEST)) $criteria->add(PicturesmainPeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(PicturesmainPeer::DEPTH)) $criteria->add(PicturesmainPeer::DEPTH, $this->depth);
        if ($this->isColumnModified(PicturesmainPeer::REMARK)) $criteria->add(PicturesmainPeer::REMARK, $this->remark);
        if ($this->isColumnModified(PicturesmainPeer::DATE)) $criteria->add(PicturesmainPeer::DATE, $this->date);
        if ($this->isColumnModified(PicturesmainPeer::C_CODE)) $criteria->add(PicturesmainPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(PicturesmainPeer::AUTHNAME)) $criteria->add(PicturesmainPeer::AUTHNAME, $this->authname);
        if ($this->isColumnModified(PicturesmainPeer::REFERENCE)) $criteria->add(PicturesmainPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(PicturesmainPeer::PAGECODE)) $criteria->add(PicturesmainPeer::PAGECODE, $this->pagecode);
        if ($this->isColumnModified(PicturesmainPeer::URL)) $criteria->add(PicturesmainPeer::URL, $this->url);
        if ($this->isColumnModified(PicturesmainPeer::LOGOFILE)) $criteria->add(PicturesmainPeer::LOGOFILE, $this->logofile);
        if ($this->isColumnModified(PicturesmainPeer::COPYRIGHT)) $criteria->add(PicturesmainPeer::COPYRIGHT, $this->copyright);
        if ($this->isColumnModified(PicturesmainPeer::COMMENT)) $criteria->add(PicturesmainPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(PicturesmainPeer::PUBLICDOMAIN)) $criteria->add(PicturesmainPeer::PUBLICDOMAIN, $this->publicdomain);
        if ($this->isColumnModified(PicturesmainPeer::NEWPIC)) $criteria->add(PicturesmainPeer::NEWPIC, $this->newpic);
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERRED)) $criteria->add(PicturesmainPeer::PICPREFERRED, $this->picpreferred);
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERREDMALE)) $criteria->add(PicturesmainPeer::PICPREFERREDMALE, $this->picpreferredmale);
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERREDFEM)) $criteria->add(PicturesmainPeer::PICPREFERREDFEM, $this->picpreferredfem);
        if ($this->isColumnModified(PicturesmainPeer::PICPREFERREDJUV)) $criteria->add(PicturesmainPeer::PICPREFERREDJUV, $this->picpreferredjuv);
        if ($this->isColumnModified(PicturesmainPeer::EOL)) $criteria->add(PicturesmainPeer::EOL, $this->eol);
        if ($this->isColumnModified(PicturesmainPeer::TAXO)) $criteria->add(PicturesmainPeer::TAXO, $this->taxo);
        if ($this->isColumnModified(PicturesmainPeer::ENTERED)) $criteria->add(PicturesmainPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(PicturesmainPeer::DATEENTERED)) $criteria->add(PicturesmainPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(PicturesmainPeer::MODIFIED)) $criteria->add(PicturesmainPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(PicturesmainPeer::DATEMODIFIED)) $criteria->add(PicturesmainPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(PicturesmainPeer::EXPERT)) $criteria->add(PicturesmainPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(PicturesmainPeer::DATECHECKED)) $criteria->add(PicturesmainPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(PicturesmainPeer::TS)) $criteria->add(PicturesmainPeer::TS, $this->ts);

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
        $criteria = new Criteria(PicturesmainPeer::DATABASE_NAME);
        $criteria->add(PicturesmainPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Picturesmain (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setPicgenus($this->getPicgenus());
        $copyObj->setPicspecies($this->getPicspecies());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setPicname($this->getPicname());
        $copyObj->setScanned($this->getScanned());
        $copyObj->setPicturetype($this->getPicturetype());
        $copyObj->setPictype($this->getPictype());
        $copyObj->setRank($this->getRank());
        $copyObj->setBestpic($this->getBestpic());
        $copyObj->setScore($this->getScore());
        $copyObj->setOccurrence($this->getOccurrence());
        $copyObj->setCdrom($this->getCdrom());
        $copyObj->setLifestage($this->getLifestage());
        $copyObj->setSize($this->getSize());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setSize2($this->getSize2());
        $copyObj->setLenghttype2($this->getLenghttype2());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setProvince($this->getProvince());
        $copyObj->setLatdeg($this->getLatdeg());
        $copyObj->setLatmin($this->getLatmin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLongdeg($this->getLongdeg());
        $copyObj->setLongmin($this->getLongmin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setDepth($this->getDepth());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setDate($this->getDate());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setAuthname($this->getAuthname());
        $copyObj->setReference($this->getReference());
        $copyObj->setPagecode($this->getPagecode());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setLogofile($this->getLogofile());
        $copyObj->setCopyright($this->getCopyright());
        $copyObj->setComment($this->getComment());
        $copyObj->setPublicdomain($this->getPublicdomain());
        $copyObj->setNewpic($this->getNewpic());
        $copyObj->setPicpreferred($this->getPicpreferred());
        $copyObj->setPicpreferredmale($this->getPicpreferredmale());
        $copyObj->setPicpreferredfem($this->getPicpreferredfem());
        $copyObj->setPicpreferredjuv($this->getPicpreferredjuv());
        $copyObj->setEol($this->getEol());
        $copyObj->setTaxo($this->getTaxo());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
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
     * @return Picturesmain Clone of current object.
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
     * @return PicturesmainPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PicturesmainPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->speccode = null;
        $this->picgenus = null;
        $this->picspecies = null;
        $this->syncode = null;
        $this->picname = null;
        $this->scanned = null;
        $this->picturetype = null;
        $this->pictype = null;
        $this->rank = null;
        $this->bestpic = null;
        $this->score = null;
        $this->occurrence = null;
        $this->cdrom = null;
        $this->lifestage = null;
        $this->size = null;
        $this->lengthtype = null;
        $this->size2 = null;
        $this->lenghttype2 = null;
        $this->locality = null;
        $this->province = null;
        $this->latdeg = null;
        $this->latmin = null;
        $this->northsouth = null;
        $this->longdeg = null;
        $this->longmin = null;
        $this->eastwest = null;
        $this->depth = null;
        $this->remark = null;
        $this->date = null;
        $this->c_code = null;
        $this->authname = null;
        $this->reference = null;
        $this->pagecode = null;
        $this->url = null;
        $this->logofile = null;
        $this->copyright = null;
        $this->comment = null;
        $this->publicdomain = null;
        $this->newpic = null;
        $this->picpreferred = null;
        $this->picpreferredmale = null;
        $this->picpreferredfem = null;
        $this->picpreferredjuv = null;
        $this->eol = null;
        $this->taxo = null;
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
        return (string) $this->exportTo(PicturesmainPeer::DEFAULT_STRING_FORMAT);
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
