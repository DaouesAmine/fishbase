<?php


/**
 * Base class that represents a row from the 'isscaap' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseIsscaap extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'IsscaapPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        IsscaapPeer
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
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the valid field.
     * @var        int
     */
    protected $valid;

    /**
     * The value for the genus field.
     * @var        string
     */
    protected $genus;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the agglevel field.
     * @var        string
     */
    protected $agglevel;

    /**
     * The value for the isscaap field.
     * @var        int
     */
    protected $isscaap;

    /**
     * The value for the taxcode field.
     * @var        string
     */
    protected $taxcode;

    /**
     * The value for the alphacode field.
     * @var        string
     */
    protected $alphacode;

    /**
     * The value for the scientific field.
     * @var        string
     */
    protected $scientific;

    /**
     * The value for the english field.
     * @var        string
     */
    protected $english;

    /**
     * The value for the french field.
     * @var        string
     */
    protected $french;

    /**
     * The value for the spanish field.
     * @var        string
     */
    protected $spanish;

    /**
     * The value for the arabic field.
     * @var        string
     */
    protected $arabic;

    /**
     * The value for the chinese field.
     * @var        string
     */
    protected $chinese;

    /**
     * The value for the russian field.
     * @var        string
     */
    protected $russian;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the family field.
     * @var        string
     */
    protected $family;

    /**
     * The value for the order field.
     * @var        string
     */
    protected $order;

    /**
     * The value for the troph field.
     * @var        double
     */
    protected $troph;

    /**
     * The value for the setroph field.
     * @var        double
     */
    protected $setroph;

    /**
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the remarktroph field.
     * @var        string
     */
    protected $remarktroph;

    /**
     * The value for the slmax field.
     * @var        double
     */
    protected $slmax;

    /**
     * The value for the refnosl field.
     * @var        int
     */
    protected $refnosl;

    /**
     * The value for the remarksl field.
     * @var        string
     */
    protected $remarksl;

    /**
     * The value for the reef field.
     * @var        double
     */
    protected $reef;

    /**
     * The value for the pelagic field.
     * @var        double
     */
    protected $pelagic;

    /**
     * The value for the demersal field.
     * @var        double
     */
    protected $demersal;

    /**
     * The value for the deepsea field.
     * @var        double
     */
    protected $deepsea;

    /**
     * The value for the resilience field.
     * @var        string
     */
    protected $resilience;

    /**
     * The value for the resilienceremark field.
     * @var        string
     */
    protected $resilienceremark;

    /**
     * The value for the resilienceval field.
     * @var        double
     */
    protected $resilienceval;

    /**
     * The value for the stats_data field.
     * @var        int
     */
    protected $stats_data;

    /**
     * The value for the stats_catch field.
     * @var        int
     */
    protected $stats_catch;

    /**
     * The value for the stats_aquaculture field.
     * @var        int
     */
    protected $stats_aquaculture;

    /**
     * The value for the fs_aquatic field.
     * @var        int
     */
    protected $fs_aquatic;

    /**
     * The value for the fs_aquaticsumm field.
     * @var        int
     */
    protected $fs_aquaticsumm;

    /**
     * The value for the fs_cultured field.
     * @var        int
     */
    protected $fs_cultured;

    /**
     * The value for the fs_culturedsumm field.
     * @var        int
     */
    protected $fs_culturedsumm;

    /**
     * The value for the firms field.
     * @var        int
     */
    protected $firms;

    /**
     * The value for the firms_summ field.
     * @var        int
     */
    protected $firms_summ;

    /**
     * The value for the figis_id field.
     * @var        int
     */
    protected $figis_id;

    /**
     * The value for the col_id field.
     * @var        string
     */
    protected $col_id;

    /**
     * The value for the db field.
     * @var        string
     */
    protected $db;

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
     * Get the [autoctr] column value.
     *
     * @return int
     */
    public function getAutoctr()
    {

        return $this->autoctr;
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
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
     * Get the [valid] column value.
     *
     * @return int
     */
    public function getValid()
    {

        return $this->valid;
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
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [agglevel] column value.
     *
     * @return string
     */
    public function getAgglevel()
    {

        return $this->agglevel;
    }

    /**
     * Get the [isscaap] column value.
     *
     * @return int
     */
    public function getIsscaap()
    {

        return $this->isscaap;
    }

    /**
     * Get the [taxcode] column value.
     *
     * @return string
     */
    public function getTaxcode()
    {

        return $this->taxcode;
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
     * Get the [scientific] column value.
     *
     * @return string
     */
    public function getScientific()
    {

        return $this->scientific;
    }

    /**
     * Get the [english] column value.
     *
     * @return string
     */
    public function getEnglish()
    {

        return $this->english;
    }

    /**
     * Get the [french] column value.
     *
     * @return string
     */
    public function getFrench()
    {

        return $this->french;
    }

    /**
     * Get the [spanish] column value.
     *
     * @return string
     */
    public function getSpanish()
    {

        return $this->spanish;
    }

    /**
     * Get the [arabic] column value.
     *
     * @return string
     */
    public function getArabic()
    {

        return $this->arabic;
    }

    /**
     * Get the [chinese] column value.
     *
     * @return string
     */
    public function getChinese()
    {

        return $this->chinese;
    }

    /**
     * Get the [russian] column value.
     *
     * @return string
     */
    public function getRussian()
    {

        return $this->russian;
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
     * Get the [family] column value.
     *
     * @return string
     */
    public function getFamily()
    {

        return $this->family;
    }

    /**
     * Get the [order] column value.
     *
     * @return string
     */
    public function getOrder()
    {

        return $this->order;
    }

    /**
     * Get the [troph] column value.
     *
     * @return double
     */
    public function getTroph()
    {

        return $this->troph;
    }

    /**
     * Get the [setroph] column value.
     *
     * @return double
     */
    public function getSetroph()
    {

        return $this->setroph;
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
     * Get the [remarktroph] column value.
     *
     * @return string
     */
    public function getRemarktroph()
    {

        return $this->remarktroph;
    }

    /**
     * Get the [slmax] column value.
     *
     * @return double
     */
    public function getSlmax()
    {

        return $this->slmax;
    }

    /**
     * Get the [refnosl] column value.
     *
     * @return int
     */
    public function getRefnosl()
    {

        return $this->refnosl;
    }

    /**
     * Get the [remarksl] column value.
     *
     * @return string
     */
    public function getRemarksl()
    {

        return $this->remarksl;
    }

    /**
     * Get the [reef] column value.
     *
     * @return double
     */
    public function getReef()
    {

        return $this->reef;
    }

    /**
     * Get the [pelagic] column value.
     *
     * @return double
     */
    public function getPelagic()
    {

        return $this->pelagic;
    }

    /**
     * Get the [demersal] column value.
     *
     * @return double
     */
    public function getDemersal()
    {

        return $this->demersal;
    }

    /**
     * Get the [deepsea] column value.
     *
     * @return double
     */
    public function getDeepsea()
    {

        return $this->deepsea;
    }

    /**
     * Get the [resilience] column value.
     *
     * @return string
     */
    public function getResilience()
    {

        return $this->resilience;
    }

    /**
     * Get the [resilienceremark] column value.
     *
     * @return string
     */
    public function getResilienceremark()
    {

        return $this->resilienceremark;
    }

    /**
     * Get the [resilienceval] column value.
     *
     * @return double
     */
    public function getResilienceval()
    {

        return $this->resilienceval;
    }

    /**
     * Get the [stats_data] column value.
     *
     * @return int
     */
    public function getStatsData()
    {

        return $this->stats_data;
    }

    /**
     * Get the [stats_catch] column value.
     *
     * @return int
     */
    public function getStatsCatch()
    {

        return $this->stats_catch;
    }

    /**
     * Get the [stats_aquaculture] column value.
     *
     * @return int
     */
    public function getStatsAquaculture()
    {

        return $this->stats_aquaculture;
    }

    /**
     * Get the [fs_aquatic] column value.
     *
     * @return int
     */
    public function getFsAquatic()
    {

        return $this->fs_aquatic;
    }

    /**
     * Get the [fs_aquaticsumm] column value.
     *
     * @return int
     */
    public function getFsAquaticsumm()
    {

        return $this->fs_aquaticsumm;
    }

    /**
     * Get the [fs_cultured] column value.
     *
     * @return int
     */
    public function getFsCultured()
    {

        return $this->fs_cultured;
    }

    /**
     * Get the [fs_culturedsumm] column value.
     *
     * @return int
     */
    public function getFsCulturedsumm()
    {

        return $this->fs_culturedsumm;
    }

    /**
     * Get the [firms] column value.
     *
     * @return int
     */
    public function getFirms()
    {

        return $this->firms;
    }

    /**
     * Get the [firms_summ] column value.
     *
     * @return int
     */
    public function getFirmsSumm()
    {

        return $this->firms_summ;
    }

    /**
     * Get the [figis_id] column value.
     *
     * @return int
     */
    public function getFigisId()
    {

        return $this->figis_id;
    }

    /**
     * Get the [col_id] column value.
     *
     * @return string
     */
    public function getColId()
    {

        return $this->col_id;
    }

    /**
     * Get the [db] column value.
     *
     * @return string
     */
    public function getDb()
    {

        return $this->db;
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
     * @return Isscaap The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = IsscaapPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [ordnum] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setOrdnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordnum !== $v) {
            $this->ordnum = $v;
            $this->modifiedColumns[] = IsscaapPeer::ORDNUM;
        }


        return $this;
    } // setOrdnum()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = IsscaapPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = IsscaapPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = IsscaapPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = IsscaapPeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [valid] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setValid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valid !== $v) {
            $this->valid = $v;
            $this->modifiedColumns[] = IsscaapPeer::VALID;
        }


        return $this;
    } // setValid()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = IsscaapPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = IsscaapPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [agglevel] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setAgglevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agglevel !== $v) {
            $this->agglevel = $v;
            $this->modifiedColumns[] = IsscaapPeer::AGGLEVEL;
        }


        return $this;
    } // setAgglevel()

    /**
     * Set the value of [isscaap] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setIsscaap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->isscaap !== $v) {
            $this->isscaap = $v;
            $this->modifiedColumns[] = IsscaapPeer::ISSCAAP;
        }


        return $this;
    } // setIsscaap()

    /**
     * Set the value of [taxcode] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setTaxcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taxcode !== $v) {
            $this->taxcode = $v;
            $this->modifiedColumns[] = IsscaapPeer::TAXCODE;
        }


        return $this;
    } // setTaxcode()

    /**
     * Set the value of [alphacode] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setAlphacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alphacode !== $v) {
            $this->alphacode = $v;
            $this->modifiedColumns[] = IsscaapPeer::ALPHACODE;
        }


        return $this;
    } // setAlphacode()

    /**
     * Set the value of [scientific] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setScientific($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->scientific !== $v) {
            $this->scientific = $v;
            $this->modifiedColumns[] = IsscaapPeer::SCIENTIFIC;
        }


        return $this;
    } // setScientific()

    /**
     * Set the value of [english] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setEnglish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->english !== $v) {
            $this->english = $v;
            $this->modifiedColumns[] = IsscaapPeer::ENGLISH;
        }


        return $this;
    } // setEnglish()

    /**
     * Set the value of [french] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->french !== $v) {
            $this->french = $v;
            $this->modifiedColumns[] = IsscaapPeer::FRENCH;
        }


        return $this;
    } // setFrench()

    /**
     * Set the value of [spanish] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setSpanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spanish !== $v) {
            $this->spanish = $v;
            $this->modifiedColumns[] = IsscaapPeer::SPANISH;
        }


        return $this;
    } // setSpanish()

    /**
     * Set the value of [arabic] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setArabic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->arabic !== $v) {
            $this->arabic = $v;
            $this->modifiedColumns[] = IsscaapPeer::ARABIC;
        }


        return $this;
    } // setArabic()

    /**
     * Set the value of [chinese] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setChinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chinese !== $v) {
            $this->chinese = $v;
            $this->modifiedColumns[] = IsscaapPeer::CHINESE;
        }


        return $this;
    } // setChinese()

    /**
     * Set the value of [russian] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->russian !== $v) {
            $this->russian = $v;
            $this->modifiedColumns[] = IsscaapPeer::RUSSIAN;
        }


        return $this;
    } // setRussian()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = IsscaapPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = IsscaapPeer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [order] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order !== $v) {
            $this->order = $v;
            $this->modifiedColumns[] = IsscaapPeer::ORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [troph] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setTroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->troph !== $v) {
            $this->troph = $v;
            $this->modifiedColumns[] = IsscaapPeer::TROPH;
        }


        return $this;
    } // setTroph()

    /**
     * Set the value of [setroph] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setSetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->setroph !== $v) {
            $this->setroph = $v;
            $this->modifiedColumns[] = IsscaapPeer::SETROPH;
        }


        return $this;
    } // setSetroph()

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = IsscaapPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [remarktroph] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setRemarktroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarktroph !== $v) {
            $this->remarktroph = $v;
            $this->modifiedColumns[] = IsscaapPeer::REMARKTROPH;
        }


        return $this;
    } // setRemarktroph()

    /**
     * Set the value of [slmax] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setSlmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->slmax !== $v) {
            $this->slmax = $v;
            $this->modifiedColumns[] = IsscaapPeer::SLMAX;
        }


        return $this;
    } // setSlmax()

    /**
     * Set the value of [refnosl] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setRefnosl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refnosl !== $v) {
            $this->refnosl = $v;
            $this->modifiedColumns[] = IsscaapPeer::REFNOSL;
        }


        return $this;
    } // setRefnosl()

    /**
     * Set the value of [remarksl] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setRemarksl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarksl !== $v) {
            $this->remarksl = $v;
            $this->modifiedColumns[] = IsscaapPeer::REMARKSL;
        }


        return $this;
    } // setRemarksl()

    /**
     * Set the value of [reef] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setReef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->reef !== $v) {
            $this->reef = $v;
            $this->modifiedColumns[] = IsscaapPeer::REEF;
        }


        return $this;
    } // setReef()

    /**
     * Set the value of [pelagic] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setPelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pelagic !== $v) {
            $this->pelagic = $v;
            $this->modifiedColumns[] = IsscaapPeer::PELAGIC;
        }


        return $this;
    } // setPelagic()

    /**
     * Set the value of [demersal] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setDemersal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->demersal !== $v) {
            $this->demersal = $v;
            $this->modifiedColumns[] = IsscaapPeer::DEMERSAL;
        }


        return $this;
    } // setDemersal()

    /**
     * Set the value of [deepsea] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setDeepsea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deepsea !== $v) {
            $this->deepsea = $v;
            $this->modifiedColumns[] = IsscaapPeer::DEEPSEA;
        }


        return $this;
    } // setDeepsea()

    /**
     * Set the value of [resilience] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setResilience($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resilience !== $v) {
            $this->resilience = $v;
            $this->modifiedColumns[] = IsscaapPeer::RESILIENCE;
        }


        return $this;
    } // setResilience()

    /**
     * Set the value of [resilienceremark] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setResilienceremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resilienceremark !== $v) {
            $this->resilienceremark = $v;
            $this->modifiedColumns[] = IsscaapPeer::RESILIENCEREMARK;
        }


        return $this;
    } // setResilienceremark()

    /**
     * Set the value of [resilienceval] column.
     *
     * @param  double $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setResilienceval($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->resilienceval !== $v) {
            $this->resilienceval = $v;
            $this->modifiedColumns[] = IsscaapPeer::RESILIENCEVAL;
        }


        return $this;
    } // setResilienceval()

    /**
     * Set the value of [stats_data] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setStatsData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stats_data !== $v) {
            $this->stats_data = $v;
            $this->modifiedColumns[] = IsscaapPeer::STATS_DATA;
        }


        return $this;
    } // setStatsData()

    /**
     * Set the value of [stats_catch] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setStatsCatch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stats_catch !== $v) {
            $this->stats_catch = $v;
            $this->modifiedColumns[] = IsscaapPeer::STATS_CATCH;
        }


        return $this;
    } // setStatsCatch()

    /**
     * Set the value of [stats_aquaculture] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setStatsAquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stats_aquaculture !== $v) {
            $this->stats_aquaculture = $v;
            $this->modifiedColumns[] = IsscaapPeer::STATS_AQUACULTURE;
        }


        return $this;
    } // setStatsAquaculture()

    /**
     * Set the value of [fs_aquatic] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFsAquatic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fs_aquatic !== $v) {
            $this->fs_aquatic = $v;
            $this->modifiedColumns[] = IsscaapPeer::FS_AQUATIC;
        }


        return $this;
    } // setFsAquatic()

    /**
     * Set the value of [fs_aquaticsumm] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFsAquaticsumm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fs_aquaticsumm !== $v) {
            $this->fs_aquaticsumm = $v;
            $this->modifiedColumns[] = IsscaapPeer::FS_AQUATICSUMM;
        }


        return $this;
    } // setFsAquaticsumm()

    /**
     * Set the value of [fs_cultured] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFsCultured($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fs_cultured !== $v) {
            $this->fs_cultured = $v;
            $this->modifiedColumns[] = IsscaapPeer::FS_CULTURED;
        }


        return $this;
    } // setFsCultured()

    /**
     * Set the value of [fs_culturedsumm] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFsCulturedsumm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fs_culturedsumm !== $v) {
            $this->fs_culturedsumm = $v;
            $this->modifiedColumns[] = IsscaapPeer::FS_CULTUREDSUMM;
        }


        return $this;
    } // setFsCulturedsumm()

    /**
     * Set the value of [firms] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFirms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->firms !== $v) {
            $this->firms = $v;
            $this->modifiedColumns[] = IsscaapPeer::FIRMS;
        }


        return $this;
    } // setFirms()

    /**
     * Set the value of [firms_summ] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFirmsSumm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->firms_summ !== $v) {
            $this->firms_summ = $v;
            $this->modifiedColumns[] = IsscaapPeer::FIRMS_SUMM;
        }


        return $this;
    } // setFirmsSumm()

    /**
     * Set the value of [figis_id] column.
     *
     * @param  int $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setFigisId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->figis_id !== $v) {
            $this->figis_id = $v;
            $this->modifiedColumns[] = IsscaapPeer::FIGIS_ID;
        }


        return $this;
    } // setFigisId()

    /**
     * Set the value of [col_id] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setColId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->col_id !== $v) {
            $this->col_id = $v;
            $this->modifiedColumns[] = IsscaapPeer::COL_ID;
        }


        return $this;
    } // setColId()

    /**
     * Set the value of [db] column.
     *
     * @param  string $v new value
     * @return Isscaap The current object (for fluent API support)
     */
    public function setDb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->db !== $v) {
            $this->db = $v;
            $this->modifiedColumns[] = IsscaapPeer::DB;
        }


        return $this;
    } // setDb()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Isscaap The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = IsscaapPeer::TS;
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

            $this->autoctr = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ordnum = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->famcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->speccode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->stockcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->syncode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->valid = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->genus = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->species = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->agglevel = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->isscaap = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->taxcode = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->alphacode = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->scientific = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->english = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->french = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->spanish = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->arabic = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->chinese = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->russian = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->author = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->family = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->order = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->troph = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->setroph = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->refno = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->remarktroph = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->slmax = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->refnosl = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->remarksl = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->reef = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->pelagic = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->demersal = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->deepsea = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->resilience = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->resilienceremark = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->resilienceval = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->stats_data = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->stats_catch = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->stats_aquaculture = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->fs_aquatic = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->fs_aquaticsumm = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->fs_cultured = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->fs_culturedsumm = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->firms = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->firms_summ = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->figis_id = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->col_id = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->db = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->ts = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 50; // 50 = IsscaapPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Isscaap object", $e);
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
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = IsscaapPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = IsscaapQuery::create()
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
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                IsscaapPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = IsscaapPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . IsscaapPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(IsscaapPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(IsscaapPeer::ORDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`OrdNum`';
        }
        if ($this->isColumnModified(IsscaapPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(IsscaapPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(IsscaapPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(IsscaapPeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Syncode`';
        }
        if ($this->isColumnModified(IsscaapPeer::VALID)) {
            $modifiedColumns[':p' . $index++]  = '`Valid`';
        }
        if ($this->isColumnModified(IsscaapPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(IsscaapPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(IsscaapPeer::AGGLEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`AggLevel`';
        }
        if ($this->isColumnModified(IsscaapPeer::ISSCAAP)) {
            $modifiedColumns[':p' . $index++]  = '`ISSCAAP`';
        }
        if ($this->isColumnModified(IsscaapPeer::TAXCODE)) {
            $modifiedColumns[':p' . $index++]  = '`TaxCode`';
        }
        if ($this->isColumnModified(IsscaapPeer::ALPHACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AlphaCode`';
        }
        if ($this->isColumnModified(IsscaapPeer::SCIENTIFIC)) {
            $modifiedColumns[':p' . $index++]  = '`Scientific`';
        }
        if ($this->isColumnModified(IsscaapPeer::ENGLISH)) {
            $modifiedColumns[':p' . $index++]  = '`English`';
        }
        if ($this->isColumnModified(IsscaapPeer::FRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`French`';
        }
        if ($this->isColumnModified(IsscaapPeer::SPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`Spanish`';
        }
        if ($this->isColumnModified(IsscaapPeer::ARABIC)) {
            $modifiedColumns[':p' . $index++]  = '`Arabic`';
        }
        if ($this->isColumnModified(IsscaapPeer::CHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`Chinese`';
        }
        if ($this->isColumnModified(IsscaapPeer::RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`Russian`';
        }
        if ($this->isColumnModified(IsscaapPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(IsscaapPeer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Family`';
        }
        if ($this->isColumnModified(IsscaapPeer::ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`Order`';
        }
        if ($this->isColumnModified(IsscaapPeer::TROPH)) {
            $modifiedColumns[':p' . $index++]  = '`Troph`';
        }
        if ($this->isColumnModified(IsscaapPeer::SETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`seTroph`';
        }
        if ($this->isColumnModified(IsscaapPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(IsscaapPeer::REMARKTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkTroph`';
        }
        if ($this->isColumnModified(IsscaapPeer::SLMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SLmax`';
        }
        if ($this->isColumnModified(IsscaapPeer::REFNOSL)) {
            $modifiedColumns[':p' . $index++]  = '`RefNoSL`';
        }
        if ($this->isColumnModified(IsscaapPeer::REMARKSL)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkSL`';
        }
        if ($this->isColumnModified(IsscaapPeer::REEF)) {
            $modifiedColumns[':p' . $index++]  = '`Reef`';
        }
        if ($this->isColumnModified(IsscaapPeer::PELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pelagic`';
        }
        if ($this->isColumnModified(IsscaapPeer::DEMERSAL)) {
            $modifiedColumns[':p' . $index++]  = '`Demersal`';
        }
        if ($this->isColumnModified(IsscaapPeer::DEEPSEA)) {
            $modifiedColumns[':p' . $index++]  = '`DeepSea`';
        }
        if ($this->isColumnModified(IsscaapPeer::RESILIENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Resilience`';
        }
        if ($this->isColumnModified(IsscaapPeer::RESILIENCEREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`ResilienceRemark`';
        }
        if ($this->isColumnModified(IsscaapPeer::RESILIENCEVAL)) {
            $modifiedColumns[':p' . $index++]  = '`ResilienceVal`';
        }
        if ($this->isColumnModified(IsscaapPeer::STATS_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`Stats_data`';
        }
        if ($this->isColumnModified(IsscaapPeer::STATS_CATCH)) {
            $modifiedColumns[':p' . $index++]  = '`Stats_Catch`';
        }
        if ($this->isColumnModified(IsscaapPeer::STATS_AQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Stats_Aquaculture`';
        }
        if ($this->isColumnModified(IsscaapPeer::FS_AQUATIC)) {
            $modifiedColumns[':p' . $index++]  = '`FS_Aquatic`';
        }
        if ($this->isColumnModified(IsscaapPeer::FS_AQUATICSUMM)) {
            $modifiedColumns[':p' . $index++]  = '`FS_AquaticSumm`';
        }
        if ($this->isColumnModified(IsscaapPeer::FS_CULTURED)) {
            $modifiedColumns[':p' . $index++]  = '`FS_Cultured`';
        }
        if ($this->isColumnModified(IsscaapPeer::FS_CULTUREDSUMM)) {
            $modifiedColumns[':p' . $index++]  = '`FS_CulturedSumm`';
        }
        if ($this->isColumnModified(IsscaapPeer::FIRMS)) {
            $modifiedColumns[':p' . $index++]  = '`FIRMS`';
        }
        if ($this->isColumnModified(IsscaapPeer::FIRMS_SUMM)) {
            $modifiedColumns[':p' . $index++]  = '`FIRMS_Summ`';
        }
        if ($this->isColumnModified(IsscaapPeer::FIGIS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`FIGIS_ID`';
        }
        if ($this->isColumnModified(IsscaapPeer::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`CoL_ID`';
        }
        if ($this->isColumnModified(IsscaapPeer::DB)) {
            $modifiedColumns[':p' . $index++]  = '`DB`';
        }
        if ($this->isColumnModified(IsscaapPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `isscaap` (%s) VALUES (%s)',
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
                    case '`OrdNum`':
                        $stmt->bindValue($identifier, $this->ordnum, PDO::PARAM_INT);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`Syncode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`Valid`':
                        $stmt->bindValue($identifier, $this->valid, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`AggLevel`':
                        $stmt->bindValue($identifier, $this->agglevel, PDO::PARAM_STR);
                        break;
                    case '`ISSCAAP`':
                        $stmt->bindValue($identifier, $this->isscaap, PDO::PARAM_INT);
                        break;
                    case '`TaxCode`':
                        $stmt->bindValue($identifier, $this->taxcode, PDO::PARAM_STR);
                        break;
                    case '`AlphaCode`':
                        $stmt->bindValue($identifier, $this->alphacode, PDO::PARAM_STR);
                        break;
                    case '`Scientific`':
                        $stmt->bindValue($identifier, $this->scientific, PDO::PARAM_STR);
                        break;
                    case '`English`':
                        $stmt->bindValue($identifier, $this->english, PDO::PARAM_STR);
                        break;
                    case '`French`':
                        $stmt->bindValue($identifier, $this->french, PDO::PARAM_STR);
                        break;
                    case '`Spanish`':
                        $stmt->bindValue($identifier, $this->spanish, PDO::PARAM_STR);
                        break;
                    case '`Arabic`':
                        $stmt->bindValue($identifier, $this->arabic, PDO::PARAM_STR);
                        break;
                    case '`Chinese`':
                        $stmt->bindValue($identifier, $this->chinese, PDO::PARAM_STR);
                        break;
                    case '`Russian`':
                        $stmt->bindValue($identifier, $this->russian, PDO::PARAM_STR);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`Family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`Order`':
                        $stmt->bindValue($identifier, $this->order, PDO::PARAM_STR);
                        break;
                    case '`Troph`':
                        $stmt->bindValue($identifier, $this->troph, PDO::PARAM_STR);
                        break;
                    case '`seTroph`':
                        $stmt->bindValue($identifier, $this->setroph, PDO::PARAM_STR);
                        break;
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`RemarkTroph`':
                        $stmt->bindValue($identifier, $this->remarktroph, PDO::PARAM_STR);
                        break;
                    case '`SLmax`':
                        $stmt->bindValue($identifier, $this->slmax, PDO::PARAM_STR);
                        break;
                    case '`RefNoSL`':
                        $stmt->bindValue($identifier, $this->refnosl, PDO::PARAM_INT);
                        break;
                    case '`RemarkSL`':
                        $stmt->bindValue($identifier, $this->remarksl, PDO::PARAM_STR);
                        break;
                    case '`Reef`':
                        $stmt->bindValue($identifier, $this->reef, PDO::PARAM_STR);
                        break;
                    case '`Pelagic`':
                        $stmt->bindValue($identifier, $this->pelagic, PDO::PARAM_STR);
                        break;
                    case '`Demersal`':
                        $stmt->bindValue($identifier, $this->demersal, PDO::PARAM_STR);
                        break;
                    case '`DeepSea`':
                        $stmt->bindValue($identifier, $this->deepsea, PDO::PARAM_STR);
                        break;
                    case '`Resilience`':
                        $stmt->bindValue($identifier, $this->resilience, PDO::PARAM_STR);
                        break;
                    case '`ResilienceRemark`':
                        $stmt->bindValue($identifier, $this->resilienceremark, PDO::PARAM_STR);
                        break;
                    case '`ResilienceVal`':
                        $stmt->bindValue($identifier, $this->resilienceval, PDO::PARAM_STR);
                        break;
                    case '`Stats_data`':
                        $stmt->bindValue($identifier, $this->stats_data, PDO::PARAM_INT);
                        break;
                    case '`Stats_Catch`':
                        $stmt->bindValue($identifier, $this->stats_catch, PDO::PARAM_INT);
                        break;
                    case '`Stats_Aquaculture`':
                        $stmt->bindValue($identifier, $this->stats_aquaculture, PDO::PARAM_INT);
                        break;
                    case '`FS_Aquatic`':
                        $stmt->bindValue($identifier, $this->fs_aquatic, PDO::PARAM_INT);
                        break;
                    case '`FS_AquaticSumm`':
                        $stmt->bindValue($identifier, $this->fs_aquaticsumm, PDO::PARAM_INT);
                        break;
                    case '`FS_Cultured`':
                        $stmt->bindValue($identifier, $this->fs_cultured, PDO::PARAM_INT);
                        break;
                    case '`FS_CulturedSumm`':
                        $stmt->bindValue($identifier, $this->fs_culturedsumm, PDO::PARAM_INT);
                        break;
                    case '`FIRMS`':
                        $stmt->bindValue($identifier, $this->firms, PDO::PARAM_INT);
                        break;
                    case '`FIRMS_Summ`':
                        $stmt->bindValue($identifier, $this->firms_summ, PDO::PARAM_INT);
                        break;
                    case '`FIGIS_ID`':
                        $stmt->bindValue($identifier, $this->figis_id, PDO::PARAM_INT);
                        break;
                    case '`CoL_ID`':
                        $stmt->bindValue($identifier, $this->col_id, PDO::PARAM_STR);
                        break;
                    case '`DB`':
                        $stmt->bindValue($identifier, $this->db, PDO::PARAM_STR);
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


            if (($retval = IsscaapPeer::doValidate($this, $columns)) !== true) {
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
        $pos = IsscaapPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrdnum();
                break;
            case 2:
                return $this->getFamcode();
                break;
            case 3:
                return $this->getSpeccode();
                break;
            case 4:
                return $this->getStockcode();
                break;
            case 5:
                return $this->getSyncode();
                break;
            case 6:
                return $this->getValid();
                break;
            case 7:
                return $this->getGenus();
                break;
            case 8:
                return $this->getSpecies();
                break;
            case 9:
                return $this->getAgglevel();
                break;
            case 10:
                return $this->getIsscaap();
                break;
            case 11:
                return $this->getTaxcode();
                break;
            case 12:
                return $this->getAlphacode();
                break;
            case 13:
                return $this->getScientific();
                break;
            case 14:
                return $this->getEnglish();
                break;
            case 15:
                return $this->getFrench();
                break;
            case 16:
                return $this->getSpanish();
                break;
            case 17:
                return $this->getArabic();
                break;
            case 18:
                return $this->getChinese();
                break;
            case 19:
                return $this->getRussian();
                break;
            case 20:
                return $this->getAuthor();
                break;
            case 21:
                return $this->getFamily();
                break;
            case 22:
                return $this->getOrder();
                break;
            case 23:
                return $this->getTroph();
                break;
            case 24:
                return $this->getSetroph();
                break;
            case 25:
                return $this->getRefno();
                break;
            case 26:
                return $this->getRemarktroph();
                break;
            case 27:
                return $this->getSlmax();
                break;
            case 28:
                return $this->getRefnosl();
                break;
            case 29:
                return $this->getRemarksl();
                break;
            case 30:
                return $this->getReef();
                break;
            case 31:
                return $this->getPelagic();
                break;
            case 32:
                return $this->getDemersal();
                break;
            case 33:
                return $this->getDeepsea();
                break;
            case 34:
                return $this->getResilience();
                break;
            case 35:
                return $this->getResilienceremark();
                break;
            case 36:
                return $this->getResilienceval();
                break;
            case 37:
                return $this->getStatsData();
                break;
            case 38:
                return $this->getStatsCatch();
                break;
            case 39:
                return $this->getStatsAquaculture();
                break;
            case 40:
                return $this->getFsAquatic();
                break;
            case 41:
                return $this->getFsAquaticsumm();
                break;
            case 42:
                return $this->getFsCultured();
                break;
            case 43:
                return $this->getFsCulturedsumm();
                break;
            case 44:
                return $this->getFirms();
                break;
            case 45:
                return $this->getFirmsSumm();
                break;
            case 46:
                return $this->getFigisId();
                break;
            case 47:
                return $this->getColId();
                break;
            case 48:
                return $this->getDb();
                break;
            case 49:
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
        if (isset($alreadyDumpedObjects['Isscaap'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Isscaap'][$this->getPrimaryKey()] = true;
        $keys = IsscaapPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getOrdnum(),
            $keys[2] => $this->getFamcode(),
            $keys[3] => $this->getSpeccode(),
            $keys[4] => $this->getStockcode(),
            $keys[5] => $this->getSyncode(),
            $keys[6] => $this->getValid(),
            $keys[7] => $this->getGenus(),
            $keys[8] => $this->getSpecies(),
            $keys[9] => $this->getAgglevel(),
            $keys[10] => $this->getIsscaap(),
            $keys[11] => $this->getTaxcode(),
            $keys[12] => $this->getAlphacode(),
            $keys[13] => $this->getScientific(),
            $keys[14] => $this->getEnglish(),
            $keys[15] => $this->getFrench(),
            $keys[16] => $this->getSpanish(),
            $keys[17] => $this->getArabic(),
            $keys[18] => $this->getChinese(),
            $keys[19] => $this->getRussian(),
            $keys[20] => $this->getAuthor(),
            $keys[21] => $this->getFamily(),
            $keys[22] => $this->getOrder(),
            $keys[23] => $this->getTroph(),
            $keys[24] => $this->getSetroph(),
            $keys[25] => $this->getRefno(),
            $keys[26] => $this->getRemarktroph(),
            $keys[27] => $this->getSlmax(),
            $keys[28] => $this->getRefnosl(),
            $keys[29] => $this->getRemarksl(),
            $keys[30] => $this->getReef(),
            $keys[31] => $this->getPelagic(),
            $keys[32] => $this->getDemersal(),
            $keys[33] => $this->getDeepsea(),
            $keys[34] => $this->getResilience(),
            $keys[35] => $this->getResilienceremark(),
            $keys[36] => $this->getResilienceval(),
            $keys[37] => $this->getStatsData(),
            $keys[38] => $this->getStatsCatch(),
            $keys[39] => $this->getStatsAquaculture(),
            $keys[40] => $this->getFsAquatic(),
            $keys[41] => $this->getFsAquaticsumm(),
            $keys[42] => $this->getFsCultured(),
            $keys[43] => $this->getFsCulturedsumm(),
            $keys[44] => $this->getFirms(),
            $keys[45] => $this->getFirmsSumm(),
            $keys[46] => $this->getFigisId(),
            $keys[47] => $this->getColId(),
            $keys[48] => $this->getDb(),
            $keys[49] => $this->getTs(),
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
        $pos = IsscaapPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrdnum($value);
                break;
            case 2:
                $this->setFamcode($value);
                break;
            case 3:
                $this->setSpeccode($value);
                break;
            case 4:
                $this->setStockcode($value);
                break;
            case 5:
                $this->setSyncode($value);
                break;
            case 6:
                $this->setValid($value);
                break;
            case 7:
                $this->setGenus($value);
                break;
            case 8:
                $this->setSpecies($value);
                break;
            case 9:
                $this->setAgglevel($value);
                break;
            case 10:
                $this->setIsscaap($value);
                break;
            case 11:
                $this->setTaxcode($value);
                break;
            case 12:
                $this->setAlphacode($value);
                break;
            case 13:
                $this->setScientific($value);
                break;
            case 14:
                $this->setEnglish($value);
                break;
            case 15:
                $this->setFrench($value);
                break;
            case 16:
                $this->setSpanish($value);
                break;
            case 17:
                $this->setArabic($value);
                break;
            case 18:
                $this->setChinese($value);
                break;
            case 19:
                $this->setRussian($value);
                break;
            case 20:
                $this->setAuthor($value);
                break;
            case 21:
                $this->setFamily($value);
                break;
            case 22:
                $this->setOrder($value);
                break;
            case 23:
                $this->setTroph($value);
                break;
            case 24:
                $this->setSetroph($value);
                break;
            case 25:
                $this->setRefno($value);
                break;
            case 26:
                $this->setRemarktroph($value);
                break;
            case 27:
                $this->setSlmax($value);
                break;
            case 28:
                $this->setRefnosl($value);
                break;
            case 29:
                $this->setRemarksl($value);
                break;
            case 30:
                $this->setReef($value);
                break;
            case 31:
                $this->setPelagic($value);
                break;
            case 32:
                $this->setDemersal($value);
                break;
            case 33:
                $this->setDeepsea($value);
                break;
            case 34:
                $this->setResilience($value);
                break;
            case 35:
                $this->setResilienceremark($value);
                break;
            case 36:
                $this->setResilienceval($value);
                break;
            case 37:
                $this->setStatsData($value);
                break;
            case 38:
                $this->setStatsCatch($value);
                break;
            case 39:
                $this->setStatsAquaculture($value);
                break;
            case 40:
                $this->setFsAquatic($value);
                break;
            case 41:
                $this->setFsAquaticsumm($value);
                break;
            case 42:
                $this->setFsCultured($value);
                break;
            case 43:
                $this->setFsCulturedsumm($value);
                break;
            case 44:
                $this->setFirms($value);
                break;
            case 45:
                $this->setFirmsSumm($value);
                break;
            case 46:
                $this->setFigisId($value);
                break;
            case 47:
                $this->setColId($value);
                break;
            case 48:
                $this->setDb($value);
                break;
            case 49:
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
        $keys = IsscaapPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrdnum($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFamcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeccode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStockcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSyncode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setValid($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGenus($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSpecies($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAgglevel($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIsscaap($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTaxcode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAlphacode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setScientific($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEnglish($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFrench($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSpanish($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setArabic($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setChinese($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRussian($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAuthor($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFamily($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setOrder($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTroph($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSetroph($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRefno($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setRemarktroph($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setSlmax($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setRefnosl($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setRemarksl($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setReef($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setPelagic($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDemersal($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDeepsea($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setResilience($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setResilienceremark($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setResilienceval($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setStatsData($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setStatsCatch($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setStatsAquaculture($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setFsAquatic($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setFsAquaticsumm($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setFsCultured($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setFsCulturedsumm($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFirms($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setFirmsSumm($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setFigisId($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setColId($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setDb($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setTs($arr[$keys[49]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(IsscaapPeer::DATABASE_NAME);

        if ($this->isColumnModified(IsscaapPeer::AUTOCTR)) $criteria->add(IsscaapPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(IsscaapPeer::ORDNUM)) $criteria->add(IsscaapPeer::ORDNUM, $this->ordnum);
        if ($this->isColumnModified(IsscaapPeer::FAMCODE)) $criteria->add(IsscaapPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(IsscaapPeer::SPECCODE)) $criteria->add(IsscaapPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(IsscaapPeer::STOCKCODE)) $criteria->add(IsscaapPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(IsscaapPeer::SYNCODE)) $criteria->add(IsscaapPeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(IsscaapPeer::VALID)) $criteria->add(IsscaapPeer::VALID, $this->valid);
        if ($this->isColumnModified(IsscaapPeer::GENUS)) $criteria->add(IsscaapPeer::GENUS, $this->genus);
        if ($this->isColumnModified(IsscaapPeer::SPECIES)) $criteria->add(IsscaapPeer::SPECIES, $this->species);
        if ($this->isColumnModified(IsscaapPeer::AGGLEVEL)) $criteria->add(IsscaapPeer::AGGLEVEL, $this->agglevel);
        if ($this->isColumnModified(IsscaapPeer::ISSCAAP)) $criteria->add(IsscaapPeer::ISSCAAP, $this->isscaap);
        if ($this->isColumnModified(IsscaapPeer::TAXCODE)) $criteria->add(IsscaapPeer::TAXCODE, $this->taxcode);
        if ($this->isColumnModified(IsscaapPeer::ALPHACODE)) $criteria->add(IsscaapPeer::ALPHACODE, $this->alphacode);
        if ($this->isColumnModified(IsscaapPeer::SCIENTIFIC)) $criteria->add(IsscaapPeer::SCIENTIFIC, $this->scientific);
        if ($this->isColumnModified(IsscaapPeer::ENGLISH)) $criteria->add(IsscaapPeer::ENGLISH, $this->english);
        if ($this->isColumnModified(IsscaapPeer::FRENCH)) $criteria->add(IsscaapPeer::FRENCH, $this->french);
        if ($this->isColumnModified(IsscaapPeer::SPANISH)) $criteria->add(IsscaapPeer::SPANISH, $this->spanish);
        if ($this->isColumnModified(IsscaapPeer::ARABIC)) $criteria->add(IsscaapPeer::ARABIC, $this->arabic);
        if ($this->isColumnModified(IsscaapPeer::CHINESE)) $criteria->add(IsscaapPeer::CHINESE, $this->chinese);
        if ($this->isColumnModified(IsscaapPeer::RUSSIAN)) $criteria->add(IsscaapPeer::RUSSIAN, $this->russian);
        if ($this->isColumnModified(IsscaapPeer::AUTHOR)) $criteria->add(IsscaapPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(IsscaapPeer::FAMILY)) $criteria->add(IsscaapPeer::FAMILY, $this->family);
        if ($this->isColumnModified(IsscaapPeer::ORDER)) $criteria->add(IsscaapPeer::ORDER, $this->order);
        if ($this->isColumnModified(IsscaapPeer::TROPH)) $criteria->add(IsscaapPeer::TROPH, $this->troph);
        if ($this->isColumnModified(IsscaapPeer::SETROPH)) $criteria->add(IsscaapPeer::SETROPH, $this->setroph);
        if ($this->isColumnModified(IsscaapPeer::REFNO)) $criteria->add(IsscaapPeer::REFNO, $this->refno);
        if ($this->isColumnModified(IsscaapPeer::REMARKTROPH)) $criteria->add(IsscaapPeer::REMARKTROPH, $this->remarktroph);
        if ($this->isColumnModified(IsscaapPeer::SLMAX)) $criteria->add(IsscaapPeer::SLMAX, $this->slmax);
        if ($this->isColumnModified(IsscaapPeer::REFNOSL)) $criteria->add(IsscaapPeer::REFNOSL, $this->refnosl);
        if ($this->isColumnModified(IsscaapPeer::REMARKSL)) $criteria->add(IsscaapPeer::REMARKSL, $this->remarksl);
        if ($this->isColumnModified(IsscaapPeer::REEF)) $criteria->add(IsscaapPeer::REEF, $this->reef);
        if ($this->isColumnModified(IsscaapPeer::PELAGIC)) $criteria->add(IsscaapPeer::PELAGIC, $this->pelagic);
        if ($this->isColumnModified(IsscaapPeer::DEMERSAL)) $criteria->add(IsscaapPeer::DEMERSAL, $this->demersal);
        if ($this->isColumnModified(IsscaapPeer::DEEPSEA)) $criteria->add(IsscaapPeer::DEEPSEA, $this->deepsea);
        if ($this->isColumnModified(IsscaapPeer::RESILIENCE)) $criteria->add(IsscaapPeer::RESILIENCE, $this->resilience);
        if ($this->isColumnModified(IsscaapPeer::RESILIENCEREMARK)) $criteria->add(IsscaapPeer::RESILIENCEREMARK, $this->resilienceremark);
        if ($this->isColumnModified(IsscaapPeer::RESILIENCEVAL)) $criteria->add(IsscaapPeer::RESILIENCEVAL, $this->resilienceval);
        if ($this->isColumnModified(IsscaapPeer::STATS_DATA)) $criteria->add(IsscaapPeer::STATS_DATA, $this->stats_data);
        if ($this->isColumnModified(IsscaapPeer::STATS_CATCH)) $criteria->add(IsscaapPeer::STATS_CATCH, $this->stats_catch);
        if ($this->isColumnModified(IsscaapPeer::STATS_AQUACULTURE)) $criteria->add(IsscaapPeer::STATS_AQUACULTURE, $this->stats_aquaculture);
        if ($this->isColumnModified(IsscaapPeer::FS_AQUATIC)) $criteria->add(IsscaapPeer::FS_AQUATIC, $this->fs_aquatic);
        if ($this->isColumnModified(IsscaapPeer::FS_AQUATICSUMM)) $criteria->add(IsscaapPeer::FS_AQUATICSUMM, $this->fs_aquaticsumm);
        if ($this->isColumnModified(IsscaapPeer::FS_CULTURED)) $criteria->add(IsscaapPeer::FS_CULTURED, $this->fs_cultured);
        if ($this->isColumnModified(IsscaapPeer::FS_CULTUREDSUMM)) $criteria->add(IsscaapPeer::FS_CULTUREDSUMM, $this->fs_culturedsumm);
        if ($this->isColumnModified(IsscaapPeer::FIRMS)) $criteria->add(IsscaapPeer::FIRMS, $this->firms);
        if ($this->isColumnModified(IsscaapPeer::FIRMS_SUMM)) $criteria->add(IsscaapPeer::FIRMS_SUMM, $this->firms_summ);
        if ($this->isColumnModified(IsscaapPeer::FIGIS_ID)) $criteria->add(IsscaapPeer::FIGIS_ID, $this->figis_id);
        if ($this->isColumnModified(IsscaapPeer::COL_ID)) $criteria->add(IsscaapPeer::COL_ID, $this->col_id);
        if ($this->isColumnModified(IsscaapPeer::DB)) $criteria->add(IsscaapPeer::DB, $this->db);
        if ($this->isColumnModified(IsscaapPeer::TS)) $criteria->add(IsscaapPeer::TS, $this->ts);

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
        $criteria = new Criteria(IsscaapPeer::DATABASE_NAME);
        $criteria->add(IsscaapPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Isscaap (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrdnum($this->getOrdnum());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setValid($this->getValid());
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setAgglevel($this->getAgglevel());
        $copyObj->setIsscaap($this->getIsscaap());
        $copyObj->setTaxcode($this->getTaxcode());
        $copyObj->setAlphacode($this->getAlphacode());
        $copyObj->setScientific($this->getScientific());
        $copyObj->setEnglish($this->getEnglish());
        $copyObj->setFrench($this->getFrench());
        $copyObj->setSpanish($this->getSpanish());
        $copyObj->setArabic($this->getArabic());
        $copyObj->setChinese($this->getChinese());
        $copyObj->setRussian($this->getRussian());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setFamily($this->getFamily());
        $copyObj->setOrder($this->getOrder());
        $copyObj->setTroph($this->getTroph());
        $copyObj->setSetroph($this->getSetroph());
        $copyObj->setRefno($this->getRefno());
        $copyObj->setRemarktroph($this->getRemarktroph());
        $copyObj->setSlmax($this->getSlmax());
        $copyObj->setRefnosl($this->getRefnosl());
        $copyObj->setRemarksl($this->getRemarksl());
        $copyObj->setReef($this->getReef());
        $copyObj->setPelagic($this->getPelagic());
        $copyObj->setDemersal($this->getDemersal());
        $copyObj->setDeepsea($this->getDeepsea());
        $copyObj->setResilience($this->getResilience());
        $copyObj->setResilienceremark($this->getResilienceremark());
        $copyObj->setResilienceval($this->getResilienceval());
        $copyObj->setStatsData($this->getStatsData());
        $copyObj->setStatsCatch($this->getStatsCatch());
        $copyObj->setStatsAquaculture($this->getStatsAquaculture());
        $copyObj->setFsAquatic($this->getFsAquatic());
        $copyObj->setFsAquaticsumm($this->getFsAquaticsumm());
        $copyObj->setFsCultured($this->getFsCultured());
        $copyObj->setFsCulturedsumm($this->getFsCulturedsumm());
        $copyObj->setFirms($this->getFirms());
        $copyObj->setFirmsSumm($this->getFirmsSumm());
        $copyObj->setFigisId($this->getFigisId());
        $copyObj->setColId($this->getColId());
        $copyObj->setDb($this->getDb());
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
     * @return Isscaap Clone of current object.
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
     * @return IsscaapPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new IsscaapPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->ordnum = null;
        $this->famcode = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->syncode = null;
        $this->valid = null;
        $this->genus = null;
        $this->species = null;
        $this->agglevel = null;
        $this->isscaap = null;
        $this->taxcode = null;
        $this->alphacode = null;
        $this->scientific = null;
        $this->english = null;
        $this->french = null;
        $this->spanish = null;
        $this->arabic = null;
        $this->chinese = null;
        $this->russian = null;
        $this->author = null;
        $this->family = null;
        $this->order = null;
        $this->troph = null;
        $this->setroph = null;
        $this->refno = null;
        $this->remarktroph = null;
        $this->slmax = null;
        $this->refnosl = null;
        $this->remarksl = null;
        $this->reef = null;
        $this->pelagic = null;
        $this->demersal = null;
        $this->deepsea = null;
        $this->resilience = null;
        $this->resilienceremark = null;
        $this->resilienceval = null;
        $this->stats_data = null;
        $this->stats_catch = null;
        $this->stats_aquaculture = null;
        $this->fs_aquatic = null;
        $this->fs_aquaticsumm = null;
        $this->fs_cultured = null;
        $this->fs_culturedsumm = null;
        $this->firms = null;
        $this->firms_summ = null;
        $this->figis_id = null;
        $this->col_id = null;
        $this->db = null;
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
        return (string) $this->exportTo(IsscaapPeer::DEFAULT_STRING_FORMAT);
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
