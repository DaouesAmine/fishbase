<?php


/**
 * Base class that represents a row from the 'cl50' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCl50 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'Cl50Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        Cl50Peer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the cl50code field.
     * @var        int
     */
    protected $cl50code;

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
     * The value for the family field.
     * @var        string
     */
    protected $family;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the number2 field.
     * @var        int
     */
    protected $number2;

    /**
     * The value for the sex2 field.
     * @var        string
     */
    protected $sex2;

    /**
     * The value for the cl50refno field.
     * @var        int
     */
    protected $cl50refno;

    /**
     * The value for the minimumweight field.
     * @var        double
     */
    protected $minimumweight;

    /**
     * The value for the modalweight field.
     * @var        double
     */
    protected $modalweight;

    /**
     * The value for the maximumweight field.
     * @var        double
     */
    protected $maximumweight;

    /**
     * The value for the lifestage field.
     * @var        string
     */
    protected $lifestage;

    /**
     * The value for the length field.
     * @var        double
     */
    protected $length;

    /**
     * The value for the appliedstress field.
     * @var        string
     */
    protected $appliedstress;

    /**
     * The value for the dataref field.
     * @var        int
     */
    protected $dataref;

    /**
     * The value for the temp field.
     * @var        double
     */
    protected $temp;

    /**
     * The value for the salinity field.
     * @var        int
     */
    protected $salinity;

    /**
     * The value for the oxygen field.
     * @var        int
     */
    protected $oxygen;

    /**
     * The value for the oxygenmgl field.
     * @var        double
     */
    protected $oxygenmgl;

    /**
     * The value for the ph field.
     * @var        double
     */
    protected $ph;

    /**
     * The value for the alkalinity field.
     * @var        double
     */
    protected $alkalinity;

    /**
     * The value for the chemicalgroup field.
     * @var        string
     */
    protected $chemicalgroup;

    /**
     * The value for the chemicalgroup2 field.
     * @var        string
     */
    protected $chemicalgroup2;

    /**
     * The value for the chemicalname field.
     * @var        string
     */
    protected $chemicalname;

    /**
     * The value for the purity field.
     * @var        double
     */
    protected $purity;

    /**
     * The value for the vehicle field.
     * @var        string
     */
    protected $vehicle;

    /**
     * The value for the purity2 field.
     * @var        string
     */
    protected $purity2;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the chemicaluse field.
     * @var        string
     */
    protected $chemicaluse;

    /**
     * The value for the cl50 field.
     * @var        double
     */
    protected $cl50;

    /**
     * The value for the exposition field.
     * @var        int
     */
    protected $exposition;

    /**
     * The value for the flow field.
     * @var        int
     */
    protected $flow;

    /**
     * The value for the flowrate field.
     * @var        double
     */
    protected $flowrate;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the cl50refnofb field.
     * @var        int
     */
    protected $cl50refnofb;

    /**
     * The value for the datareffb field.
     * @var        int
     */
    protected $datareffb;

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
     * The value for the checked field.
     * @var        int
     */
    protected $checked;

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
     * Get the [cl50code] column value.
     *
     * @return int
     */
    public function getCl50code()
    {

        return $this->cl50code;
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
     * Get the [family] column value.
     *
     * @return string
     */
    public function getFamily()
    {

        return $this->family;
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
     * Get the [number2] column value.
     *
     * @return int
     */
    public function getNumber2()
    {

        return $this->number2;
    }

    /**
     * Get the [sex2] column value.
     *
     * @return string
     */
    public function getSex2()
    {

        return $this->sex2;
    }

    /**
     * Get the [cl50refno] column value.
     *
     * @return int
     */
    public function getCl50refno()
    {

        return $this->cl50refno;
    }

    /**
     * Get the [minimumweight] column value.
     *
     * @return double
     */
    public function getMinimumweight()
    {

        return $this->minimumweight;
    }

    /**
     * Get the [modalweight] column value.
     *
     * @return double
     */
    public function getModalweight()
    {

        return $this->modalweight;
    }

    /**
     * Get the [maximumweight] column value.
     *
     * @return double
     */
    public function getMaximumweight()
    {

        return $this->maximumweight;
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
     * Get the [length] column value.
     *
     * @return double
     */
    public function getLength()
    {

        return $this->length;
    }

    /**
     * Get the [appliedstress] column value.
     *
     * @return string
     */
    public function getAppliedstress()
    {

        return $this->appliedstress;
    }

    /**
     * Get the [dataref] column value.
     *
     * @return int
     */
    public function getDataref()
    {

        return $this->dataref;
    }

    /**
     * Get the [temp] column value.
     *
     * @return double
     */
    public function getTemp()
    {

        return $this->temp;
    }

    /**
     * Get the [salinity] column value.
     *
     * @return int
     */
    public function getSalinity()
    {

        return $this->salinity;
    }

    /**
     * Get the [oxygen] column value.
     *
     * @return int
     */
    public function getOxygen()
    {

        return $this->oxygen;
    }

    /**
     * Get the [oxygenmgl] column value.
     *
     * @return double
     */
    public function getOxygenmgl()
    {

        return $this->oxygenmgl;
    }

    /**
     * Get the [ph] column value.
     *
     * @return double
     */
    public function getPh()
    {

        return $this->ph;
    }

    /**
     * Get the [alkalinity] column value.
     *
     * @return double
     */
    public function getAlkalinity()
    {

        return $this->alkalinity;
    }

    /**
     * Get the [chemicalgroup] column value.
     *
     * @return string
     */
    public function getChemicalgroup()
    {

        return $this->chemicalgroup;
    }

    /**
     * Get the [chemicalgroup2] column value.
     *
     * @return string
     */
    public function getChemicalgroup2()
    {

        return $this->chemicalgroup2;
    }

    /**
     * Get the [chemicalname] column value.
     *
     * @return string
     */
    public function getChemicalname()
    {

        return $this->chemicalname;
    }

    /**
     * Get the [purity] column value.
     *
     * @return double
     */
    public function getPurity()
    {

        return $this->purity;
    }

    /**
     * Get the [vehicle] column value.
     *
     * @return string
     */
    public function getVehicle()
    {

        return $this->vehicle;
    }

    /**
     * Get the [purity2] column value.
     *
     * @return string
     */
    public function getPurity2()
    {

        return $this->purity2;
    }

    /**
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
    }

    /**
     * Get the [chemicaluse] column value.
     *
     * @return string
     */
    public function getChemicaluse()
    {

        return $this->chemicaluse;
    }

    /**
     * Get the [cl50] column value.
     *
     * @return double
     */
    public function getCl50()
    {

        return $this->cl50;
    }

    /**
     * Get the [exposition] column value.
     *
     * @return int
     */
    public function getExposition()
    {

        return $this->exposition;
    }

    /**
     * Get the [flow] column value.
     *
     * @return int
     */
    public function getFlow()
    {

        return $this->flow;
    }

    /**
     * Get the [flowrate] column value.
     *
     * @return double
     */
    public function getFlowrate()
    {

        return $this->flowrate;
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
     * Get the [cl50refnofb] column value.
     *
     * @return int
     */
    public function getCl50refnofb()
    {

        return $this->cl50refnofb;
    }

    /**
     * Get the [datareffb] column value.
     *
     * @return int
     */
    public function getDatareffb()
    {

        return $this->datareffb;
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
     * Get the [checked] column value.
     *
     * @return int
     */
    public function getChecked()
    {

        return $this->checked;
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
     * Set the value of [cl50code] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setCl50code($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cl50code !== $v) {
            $this->cl50code = $v;
            $this->modifiedColumns[] = Cl50Peer::CL50CODE;
        }


        return $this;
    } // setCl50code()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = Cl50Peer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = Cl50Peer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = Cl50Peer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = Cl50Peer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = Cl50Peer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = Cl50Peer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [number2] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setNumber2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number2 !== $v) {
            $this->number2 = $v;
            $this->modifiedColumns[] = Cl50Peer::NUMBER2;
        }


        return $this;
    } // setNumber2()

    /**
     * Set the value of [sex2] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setSex2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex2 !== $v) {
            $this->sex2 = $v;
            $this->modifiedColumns[] = Cl50Peer::SEX2;
        }


        return $this;
    } // setSex2()

    /**
     * Set the value of [cl50refno] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setCl50refno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cl50refno !== $v) {
            $this->cl50refno = $v;
            $this->modifiedColumns[] = Cl50Peer::CL50REFNO;
        }


        return $this;
    } // setCl50refno()

    /**
     * Set the value of [minimumweight] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setMinimumweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->minimumweight !== $v) {
            $this->minimumweight = $v;
            $this->modifiedColumns[] = Cl50Peer::MINIMUMWEIGHT;
        }


        return $this;
    } // setMinimumweight()

    /**
     * Set the value of [modalweight] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setModalweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->modalweight !== $v) {
            $this->modalweight = $v;
            $this->modifiedColumns[] = Cl50Peer::MODALWEIGHT;
        }


        return $this;
    } // setModalweight()

    /**
     * Set the value of [maximumweight] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setMaximumweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maximumweight !== $v) {
            $this->maximumweight = $v;
            $this->modifiedColumns[] = Cl50Peer::MAXIMUMWEIGHT;
        }


        return $this;
    } // setMaximumweight()

    /**
     * Set the value of [lifestage] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setLifestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifestage !== $v) {
            $this->lifestage = $v;
            $this->modifiedColumns[] = Cl50Peer::LIFESTAGE;
        }


        return $this;
    } // setLifestage()

    /**
     * Set the value of [length] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setLength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->length !== $v) {
            $this->length = $v;
            $this->modifiedColumns[] = Cl50Peer::LENGTH;
        }


        return $this;
    } // setLength()

    /**
     * Set the value of [appliedstress] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setAppliedstress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->appliedstress !== $v) {
            $this->appliedstress = $v;
            $this->modifiedColumns[] = Cl50Peer::APPLIEDSTRESS;
        }


        return $this;
    } // setAppliedstress()

    /**
     * Set the value of [dataref] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setDataref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dataref !== $v) {
            $this->dataref = $v;
            $this->modifiedColumns[] = Cl50Peer::DATAREF;
        }


        return $this;
    } // setDataref()

    /**
     * Set the value of [temp] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setTemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temp !== $v) {
            $this->temp = $v;
            $this->modifiedColumns[] = Cl50Peer::TEMP;
        }


        return $this;
    } // setTemp()

    /**
     * Set the value of [salinity] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = Cl50Peer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Set the value of [oxygen] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setOxygen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oxygen !== $v) {
            $this->oxygen = $v;
            $this->modifiedColumns[] = Cl50Peer::OXYGEN;
        }


        return $this;
    } // setOxygen()

    /**
     * Set the value of [oxygenmgl] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setOxygenmgl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmgl !== $v) {
            $this->oxygenmgl = $v;
            $this->modifiedColumns[] = Cl50Peer::OXYGENMGL;
        }


        return $this;
    } // setOxygenmgl()

    /**
     * Set the value of [ph] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setPh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ph !== $v) {
            $this->ph = $v;
            $this->modifiedColumns[] = Cl50Peer::PH;
        }


        return $this;
    } // setPh()

    /**
     * Set the value of [alkalinity] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setAlkalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->alkalinity !== $v) {
            $this->alkalinity = $v;
            $this->modifiedColumns[] = Cl50Peer::ALKALINITY;
        }


        return $this;
    } // setAlkalinity()

    /**
     * Set the value of [chemicalgroup] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setChemicalgroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemicalgroup !== $v) {
            $this->chemicalgroup = $v;
            $this->modifiedColumns[] = Cl50Peer::CHEMICALGROUP;
        }


        return $this;
    } // setChemicalgroup()

    /**
     * Set the value of [chemicalgroup2] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setChemicalgroup2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemicalgroup2 !== $v) {
            $this->chemicalgroup2 = $v;
            $this->modifiedColumns[] = Cl50Peer::CHEMICALGROUP2;
        }


        return $this;
    } // setChemicalgroup2()

    /**
     * Set the value of [chemicalname] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setChemicalname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemicalname !== $v) {
            $this->chemicalname = $v;
            $this->modifiedColumns[] = Cl50Peer::CHEMICALNAME;
        }


        return $this;
    } // setChemicalname()

    /**
     * Set the value of [purity] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setPurity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->purity !== $v) {
            $this->purity = $v;
            $this->modifiedColumns[] = Cl50Peer::PURITY;
        }


        return $this;
    } // setPurity()

    /**
     * Set the value of [vehicle] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setVehicle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vehicle !== $v) {
            $this->vehicle = $v;
            $this->modifiedColumns[] = Cl50Peer::VEHICLE;
        }


        return $this;
    } // setVehicle()

    /**
     * Set the value of [purity2] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setPurity2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->purity2 !== $v) {
            $this->purity2 = $v;
            $this->modifiedColumns[] = Cl50Peer::PURITY2;
        }


        return $this;
    } // setPurity2()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = Cl50Peer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [chemicaluse] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setChemicaluse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemicaluse !== $v) {
            $this->chemicaluse = $v;
            $this->modifiedColumns[] = Cl50Peer::CHEMICALUSE;
        }


        return $this;
    } // setChemicaluse()

    /**
     * Set the value of [cl50] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setCl50($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->cl50 !== $v) {
            $this->cl50 = $v;
            $this->modifiedColumns[] = Cl50Peer::CL50;
        }


        return $this;
    } // setCl50()

    /**
     * Set the value of [exposition] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setExposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->exposition !== $v) {
            $this->exposition = $v;
            $this->modifiedColumns[] = Cl50Peer::EXPOSITION;
        }


        return $this;
    } // setExposition()

    /**
     * Set the value of [flow] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setFlow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flow !== $v) {
            $this->flow = $v;
            $this->modifiedColumns[] = Cl50Peer::FLOW;
        }


        return $this;
    } // setFlow()

    /**
     * Set the value of [flowrate] column.
     *
     * @param  double $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setFlowrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->flowrate !== $v) {
            $this->flowrate = $v;
            $this->modifiedColumns[] = Cl50Peer::FLOWRATE;
        }


        return $this;
    } // setFlowrate()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = Cl50Peer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [cl50refnofb] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setCl50refnofb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cl50refnofb !== $v) {
            $this->cl50refnofb = $v;
            $this->modifiedColumns[] = Cl50Peer::CL50REFNOFB;
        }


        return $this;
    } // setCl50refnofb()

    /**
     * Set the value of [datareffb] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setDatareffb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datareffb !== $v) {
            $this->datareffb = $v;
            $this->modifiedColumns[] = Cl50Peer::DATAREFFB;
        }


        return $this;
    } // setDatareffb()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = Cl50Peer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cl50 The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = Cl50Peer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = Cl50Peer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cl50 The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = Cl50Peer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [checked] column.
     *
     * @param  int $v new value
     * @return Cl50 The current object (for fluent API support)
     */
    public function setChecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checked !== $v) {
            $this->checked = $v;
            $this->modifiedColumns[] = Cl50Peer::CHECKED;
        }


        return $this;
    } // setChecked()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cl50 The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = Cl50Peer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cl50 The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = Cl50Peer::TS;
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

            $this->cl50code = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->genus = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->species = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->speccode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->stockcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->family = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->famcode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->number2 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->sex2 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->cl50refno = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->minimumweight = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->modalweight = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->maximumweight = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->lifestage = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->length = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->appliedstress = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->dataref = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->temp = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->salinity = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->oxygen = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->oxygenmgl = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->ph = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->alkalinity = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->chemicalgroup = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->chemicalgroup2 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->chemicalname = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->purity = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->vehicle = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->purity2 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->commonname = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->chemicaluse = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->cl50 = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->exposition = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->flow = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->flowrate = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->comments = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->cl50refnofb = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->datareffb = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->entered = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->dateentered = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->modified = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->datemodified = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->checked = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->datechecked = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->ts = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 45; // 45 = Cl50Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cl50 object", $e);
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
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = Cl50Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = Cl50Query::create()
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
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                Cl50Peer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = Cl50Peer::CL50CODE;
        if (null !== $this->cl50code) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . Cl50Peer::CL50CODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(Cl50Peer::CL50CODE)) {
            $modifiedColumns[':p' . $index++]  = '`CL50Code`';
        }
        if ($this->isColumnModified(Cl50Peer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(Cl50Peer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(Cl50Peer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(Cl50Peer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(Cl50Peer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Family`';
        }
        if ($this->isColumnModified(Cl50Peer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`famcode`';
        }
        if ($this->isColumnModified(Cl50Peer::NUMBER2)) {
            $modifiedColumns[':p' . $index++]  = '`Number2`';
        }
        if ($this->isColumnModified(Cl50Peer::SEX2)) {
            $modifiedColumns[':p' . $index++]  = '`Sex2`';
        }
        if ($this->isColumnModified(Cl50Peer::CL50REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`CL50RefNo`';
        }
        if ($this->isColumnModified(Cl50Peer::MINIMUMWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`MinimumWeight`';
        }
        if ($this->isColumnModified(Cl50Peer::MODALWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`ModalWeight`';
        }
        if ($this->isColumnModified(Cl50Peer::MAXIMUMWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`MaximumWeight`';
        }
        if ($this->isColumnModified(Cl50Peer::LIFESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`LifeStage`';
        }
        if ($this->isColumnModified(Cl50Peer::LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Length`';
        }
        if ($this->isColumnModified(Cl50Peer::APPLIEDSTRESS)) {
            $modifiedColumns[':p' . $index++]  = '`AppliedStress`';
        }
        if ($this->isColumnModified(Cl50Peer::DATAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DataRef`';
        }
        if ($this->isColumnModified(Cl50Peer::TEMP)) {
            $modifiedColumns[':p' . $index++]  = '`Temp`';
        }
        if ($this->isColumnModified(Cl50Peer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(Cl50Peer::OXYGEN)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygen`';
        }
        if ($this->isColumnModified(Cl50Peer::OXYGENMGL)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygenmgl`';
        }
        if ($this->isColumnModified(Cl50Peer::PH)) {
            $modifiedColumns[':p' . $index++]  = '`pH`';
        }
        if ($this->isColumnModified(Cl50Peer::ALKALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Alkalinity`';
        }
        if ($this->isColumnModified(Cl50Peer::CHEMICALGROUP)) {
            $modifiedColumns[':p' . $index++]  = '`ChemicalGroup`';
        }
        if ($this->isColumnModified(Cl50Peer::CHEMICALGROUP2)) {
            $modifiedColumns[':p' . $index++]  = '`ChemicalGroup2`';
        }
        if ($this->isColumnModified(Cl50Peer::CHEMICALNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ChemicalName`';
        }
        if ($this->isColumnModified(Cl50Peer::PURITY)) {
            $modifiedColumns[':p' . $index++]  = '`Purity`';
        }
        if ($this->isColumnModified(Cl50Peer::VEHICLE)) {
            $modifiedColumns[':p' . $index++]  = '`Vehicle`';
        }
        if ($this->isColumnModified(Cl50Peer::PURITY2)) {
            $modifiedColumns[':p' . $index++]  = '`Purity2`';
        }
        if ($this->isColumnModified(Cl50Peer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(Cl50Peer::CHEMICALUSE)) {
            $modifiedColumns[':p' . $index++]  = '`ChemicalUse`';
        }
        if ($this->isColumnModified(Cl50Peer::CL50)) {
            $modifiedColumns[':p' . $index++]  = '`CL50`';
        }
        if ($this->isColumnModified(Cl50Peer::EXPOSITION)) {
            $modifiedColumns[':p' . $index++]  = '`Exposition`';
        }
        if ($this->isColumnModified(Cl50Peer::FLOW)) {
            $modifiedColumns[':p' . $index++]  = '`Flow`';
        }
        if ($this->isColumnModified(Cl50Peer::FLOWRATE)) {
            $modifiedColumns[':p' . $index++]  = '`FlowRate`';
        }
        if ($this->isColumnModified(Cl50Peer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(Cl50Peer::CL50REFNOFB)) {
            $modifiedColumns[':p' . $index++]  = '`CL50RefNoFB`';
        }
        if ($this->isColumnModified(Cl50Peer::DATAREFFB)) {
            $modifiedColumns[':p' . $index++]  = '`DataRefFb`';
        }
        if ($this->isColumnModified(Cl50Peer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(Cl50Peer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(Cl50Peer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(Cl50Peer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(Cl50Peer::CHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Checked`';
        }
        if ($this->isColumnModified(Cl50Peer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(Cl50Peer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `cl50` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`CL50Code`':
                        $stmt->bindValue($identifier, $this->cl50code, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`Family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`famcode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Number2`':
                        $stmt->bindValue($identifier, $this->number2, PDO::PARAM_INT);
                        break;
                    case '`Sex2`':
                        $stmt->bindValue($identifier, $this->sex2, PDO::PARAM_STR);
                        break;
                    case '`CL50RefNo`':
                        $stmt->bindValue($identifier, $this->cl50refno, PDO::PARAM_INT);
                        break;
                    case '`MinimumWeight`':
                        $stmt->bindValue($identifier, $this->minimumweight, PDO::PARAM_STR);
                        break;
                    case '`ModalWeight`':
                        $stmt->bindValue($identifier, $this->modalweight, PDO::PARAM_STR);
                        break;
                    case '`MaximumWeight`':
                        $stmt->bindValue($identifier, $this->maximumweight, PDO::PARAM_STR);
                        break;
                    case '`LifeStage`':
                        $stmt->bindValue($identifier, $this->lifestage, PDO::PARAM_STR);
                        break;
                    case '`Length`':
                        $stmt->bindValue($identifier, $this->length, PDO::PARAM_STR);
                        break;
                    case '`AppliedStress`':
                        $stmt->bindValue($identifier, $this->appliedstress, PDO::PARAM_STR);
                        break;
                    case '`DataRef`':
                        $stmt->bindValue($identifier, $this->dataref, PDO::PARAM_INT);
                        break;
                    case '`Temp`':
                        $stmt->bindValue($identifier, $this->temp, PDO::PARAM_STR);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_INT);
                        break;
                    case '`Oxygen`':
                        $stmt->bindValue($identifier, $this->oxygen, PDO::PARAM_INT);
                        break;
                    case '`Oxygenmgl`':
                        $stmt->bindValue($identifier, $this->oxygenmgl, PDO::PARAM_STR);
                        break;
                    case '`pH`':
                        $stmt->bindValue($identifier, $this->ph, PDO::PARAM_STR);
                        break;
                    case '`Alkalinity`':
                        $stmt->bindValue($identifier, $this->alkalinity, PDO::PARAM_STR);
                        break;
                    case '`ChemicalGroup`':
                        $stmt->bindValue($identifier, $this->chemicalgroup, PDO::PARAM_STR);
                        break;
                    case '`ChemicalGroup2`':
                        $stmt->bindValue($identifier, $this->chemicalgroup2, PDO::PARAM_STR);
                        break;
                    case '`ChemicalName`':
                        $stmt->bindValue($identifier, $this->chemicalname, PDO::PARAM_STR);
                        break;
                    case '`Purity`':
                        $stmt->bindValue($identifier, $this->purity, PDO::PARAM_STR);
                        break;
                    case '`Vehicle`':
                        $stmt->bindValue($identifier, $this->vehicle, PDO::PARAM_STR);
                        break;
                    case '`Purity2`':
                        $stmt->bindValue($identifier, $this->purity2, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`ChemicalUse`':
                        $stmt->bindValue($identifier, $this->chemicaluse, PDO::PARAM_STR);
                        break;
                    case '`CL50`':
                        $stmt->bindValue($identifier, $this->cl50, PDO::PARAM_STR);
                        break;
                    case '`Exposition`':
                        $stmt->bindValue($identifier, $this->exposition, PDO::PARAM_INT);
                        break;
                    case '`Flow`':
                        $stmt->bindValue($identifier, $this->flow, PDO::PARAM_INT);
                        break;
                    case '`FlowRate`':
                        $stmt->bindValue($identifier, $this->flowrate, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`CL50RefNoFB`':
                        $stmt->bindValue($identifier, $this->cl50refnofb, PDO::PARAM_INT);
                        break;
                    case '`DataRefFb`':
                        $stmt->bindValue($identifier, $this->datareffb, PDO::PARAM_INT);
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
                    case '`Checked`':
                        $stmt->bindValue($identifier, $this->checked, PDO::PARAM_INT);
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
        $this->setCl50code($pk);

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


            if (($retval = Cl50Peer::doValidate($this, $columns)) !== true) {
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
        $pos = Cl50Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCl50code();
                break;
            case 1:
                return $this->getGenus();
                break;
            case 2:
                return $this->getSpecies();
                break;
            case 3:
                return $this->getSpeccode();
                break;
            case 4:
                return $this->getStockcode();
                break;
            case 5:
                return $this->getFamily();
                break;
            case 6:
                return $this->getFamcode();
                break;
            case 7:
                return $this->getNumber2();
                break;
            case 8:
                return $this->getSex2();
                break;
            case 9:
                return $this->getCl50refno();
                break;
            case 10:
                return $this->getMinimumweight();
                break;
            case 11:
                return $this->getModalweight();
                break;
            case 12:
                return $this->getMaximumweight();
                break;
            case 13:
                return $this->getLifestage();
                break;
            case 14:
                return $this->getLength();
                break;
            case 15:
                return $this->getAppliedstress();
                break;
            case 16:
                return $this->getDataref();
                break;
            case 17:
                return $this->getTemp();
                break;
            case 18:
                return $this->getSalinity();
                break;
            case 19:
                return $this->getOxygen();
                break;
            case 20:
                return $this->getOxygenmgl();
                break;
            case 21:
                return $this->getPh();
                break;
            case 22:
                return $this->getAlkalinity();
                break;
            case 23:
                return $this->getChemicalgroup();
                break;
            case 24:
                return $this->getChemicalgroup2();
                break;
            case 25:
                return $this->getChemicalname();
                break;
            case 26:
                return $this->getPurity();
                break;
            case 27:
                return $this->getVehicle();
                break;
            case 28:
                return $this->getPurity2();
                break;
            case 29:
                return $this->getCommonname();
                break;
            case 30:
                return $this->getChemicaluse();
                break;
            case 31:
                return $this->getCl50();
                break;
            case 32:
                return $this->getExposition();
                break;
            case 33:
                return $this->getFlow();
                break;
            case 34:
                return $this->getFlowrate();
                break;
            case 35:
                return $this->getComments();
                break;
            case 36:
                return $this->getCl50refnofb();
                break;
            case 37:
                return $this->getDatareffb();
                break;
            case 38:
                return $this->getEntered();
                break;
            case 39:
                return $this->getDateentered();
                break;
            case 40:
                return $this->getModified();
                break;
            case 41:
                return $this->getDatemodified();
                break;
            case 42:
                return $this->getChecked();
                break;
            case 43:
                return $this->getDatechecked();
                break;
            case 44:
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
        if (isset($alreadyDumpedObjects['Cl50'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cl50'][$this->getPrimaryKey()] = true;
        $keys = Cl50Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCl50code(),
            $keys[1] => $this->getGenus(),
            $keys[2] => $this->getSpecies(),
            $keys[3] => $this->getSpeccode(),
            $keys[4] => $this->getStockcode(),
            $keys[5] => $this->getFamily(),
            $keys[6] => $this->getFamcode(),
            $keys[7] => $this->getNumber2(),
            $keys[8] => $this->getSex2(),
            $keys[9] => $this->getCl50refno(),
            $keys[10] => $this->getMinimumweight(),
            $keys[11] => $this->getModalweight(),
            $keys[12] => $this->getMaximumweight(),
            $keys[13] => $this->getLifestage(),
            $keys[14] => $this->getLength(),
            $keys[15] => $this->getAppliedstress(),
            $keys[16] => $this->getDataref(),
            $keys[17] => $this->getTemp(),
            $keys[18] => $this->getSalinity(),
            $keys[19] => $this->getOxygen(),
            $keys[20] => $this->getOxygenmgl(),
            $keys[21] => $this->getPh(),
            $keys[22] => $this->getAlkalinity(),
            $keys[23] => $this->getChemicalgroup(),
            $keys[24] => $this->getChemicalgroup2(),
            $keys[25] => $this->getChemicalname(),
            $keys[26] => $this->getPurity(),
            $keys[27] => $this->getVehicle(),
            $keys[28] => $this->getPurity2(),
            $keys[29] => $this->getCommonname(),
            $keys[30] => $this->getChemicaluse(),
            $keys[31] => $this->getCl50(),
            $keys[32] => $this->getExposition(),
            $keys[33] => $this->getFlow(),
            $keys[34] => $this->getFlowrate(),
            $keys[35] => $this->getComments(),
            $keys[36] => $this->getCl50refnofb(),
            $keys[37] => $this->getDatareffb(),
            $keys[38] => $this->getEntered(),
            $keys[39] => $this->getDateentered(),
            $keys[40] => $this->getModified(),
            $keys[41] => $this->getDatemodified(),
            $keys[42] => $this->getChecked(),
            $keys[43] => $this->getDatechecked(),
            $keys[44] => $this->getTs(),
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
        $pos = Cl50Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCl50code($value);
                break;
            case 1:
                $this->setGenus($value);
                break;
            case 2:
                $this->setSpecies($value);
                break;
            case 3:
                $this->setSpeccode($value);
                break;
            case 4:
                $this->setStockcode($value);
                break;
            case 5:
                $this->setFamily($value);
                break;
            case 6:
                $this->setFamcode($value);
                break;
            case 7:
                $this->setNumber2($value);
                break;
            case 8:
                $this->setSex2($value);
                break;
            case 9:
                $this->setCl50refno($value);
                break;
            case 10:
                $this->setMinimumweight($value);
                break;
            case 11:
                $this->setModalweight($value);
                break;
            case 12:
                $this->setMaximumweight($value);
                break;
            case 13:
                $this->setLifestage($value);
                break;
            case 14:
                $this->setLength($value);
                break;
            case 15:
                $this->setAppliedstress($value);
                break;
            case 16:
                $this->setDataref($value);
                break;
            case 17:
                $this->setTemp($value);
                break;
            case 18:
                $this->setSalinity($value);
                break;
            case 19:
                $this->setOxygen($value);
                break;
            case 20:
                $this->setOxygenmgl($value);
                break;
            case 21:
                $this->setPh($value);
                break;
            case 22:
                $this->setAlkalinity($value);
                break;
            case 23:
                $this->setChemicalgroup($value);
                break;
            case 24:
                $this->setChemicalgroup2($value);
                break;
            case 25:
                $this->setChemicalname($value);
                break;
            case 26:
                $this->setPurity($value);
                break;
            case 27:
                $this->setVehicle($value);
                break;
            case 28:
                $this->setPurity2($value);
                break;
            case 29:
                $this->setCommonname($value);
                break;
            case 30:
                $this->setChemicaluse($value);
                break;
            case 31:
                $this->setCl50($value);
                break;
            case 32:
                $this->setExposition($value);
                break;
            case 33:
                $this->setFlow($value);
                break;
            case 34:
                $this->setFlowrate($value);
                break;
            case 35:
                $this->setComments($value);
                break;
            case 36:
                $this->setCl50refnofb($value);
                break;
            case 37:
                $this->setDatareffb($value);
                break;
            case 38:
                $this->setEntered($value);
                break;
            case 39:
                $this->setDateentered($value);
                break;
            case 40:
                $this->setModified($value);
                break;
            case 41:
                $this->setDatemodified($value);
                break;
            case 42:
                $this->setChecked($value);
                break;
            case 43:
                $this->setDatechecked($value);
                break;
            case 44:
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
        $keys = Cl50Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCl50code($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGenus($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpecies($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeccode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStockcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFamily($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFamcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNumber2($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSex2($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCl50refno($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMinimumweight($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setModalweight($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMaximumweight($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLifestage($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLength($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAppliedstress($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDataref($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTemp($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSalinity($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setOxygen($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setOxygenmgl($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPh($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAlkalinity($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setChemicalgroup($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setChemicalgroup2($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setChemicalname($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPurity($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setVehicle($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setPurity2($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setCommonname($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setChemicaluse($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setCl50($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setExposition($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setFlow($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setFlowrate($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setComments($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setCl50refnofb($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDatareffb($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setEntered($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDateentered($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setModified($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDatemodified($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setChecked($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDatechecked($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setTs($arr[$keys[44]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(Cl50Peer::DATABASE_NAME);

        if ($this->isColumnModified(Cl50Peer::CL50CODE)) $criteria->add(Cl50Peer::CL50CODE, $this->cl50code);
        if ($this->isColumnModified(Cl50Peer::GENUS)) $criteria->add(Cl50Peer::GENUS, $this->genus);
        if ($this->isColumnModified(Cl50Peer::SPECIES)) $criteria->add(Cl50Peer::SPECIES, $this->species);
        if ($this->isColumnModified(Cl50Peer::SPECCODE)) $criteria->add(Cl50Peer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(Cl50Peer::STOCKCODE)) $criteria->add(Cl50Peer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(Cl50Peer::FAMILY)) $criteria->add(Cl50Peer::FAMILY, $this->family);
        if ($this->isColumnModified(Cl50Peer::FAMCODE)) $criteria->add(Cl50Peer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(Cl50Peer::NUMBER2)) $criteria->add(Cl50Peer::NUMBER2, $this->number2);
        if ($this->isColumnModified(Cl50Peer::SEX2)) $criteria->add(Cl50Peer::SEX2, $this->sex2);
        if ($this->isColumnModified(Cl50Peer::CL50REFNO)) $criteria->add(Cl50Peer::CL50REFNO, $this->cl50refno);
        if ($this->isColumnModified(Cl50Peer::MINIMUMWEIGHT)) $criteria->add(Cl50Peer::MINIMUMWEIGHT, $this->minimumweight);
        if ($this->isColumnModified(Cl50Peer::MODALWEIGHT)) $criteria->add(Cl50Peer::MODALWEIGHT, $this->modalweight);
        if ($this->isColumnModified(Cl50Peer::MAXIMUMWEIGHT)) $criteria->add(Cl50Peer::MAXIMUMWEIGHT, $this->maximumweight);
        if ($this->isColumnModified(Cl50Peer::LIFESTAGE)) $criteria->add(Cl50Peer::LIFESTAGE, $this->lifestage);
        if ($this->isColumnModified(Cl50Peer::LENGTH)) $criteria->add(Cl50Peer::LENGTH, $this->length);
        if ($this->isColumnModified(Cl50Peer::APPLIEDSTRESS)) $criteria->add(Cl50Peer::APPLIEDSTRESS, $this->appliedstress);
        if ($this->isColumnModified(Cl50Peer::DATAREF)) $criteria->add(Cl50Peer::DATAREF, $this->dataref);
        if ($this->isColumnModified(Cl50Peer::TEMP)) $criteria->add(Cl50Peer::TEMP, $this->temp);
        if ($this->isColumnModified(Cl50Peer::SALINITY)) $criteria->add(Cl50Peer::SALINITY, $this->salinity);
        if ($this->isColumnModified(Cl50Peer::OXYGEN)) $criteria->add(Cl50Peer::OXYGEN, $this->oxygen);
        if ($this->isColumnModified(Cl50Peer::OXYGENMGL)) $criteria->add(Cl50Peer::OXYGENMGL, $this->oxygenmgl);
        if ($this->isColumnModified(Cl50Peer::PH)) $criteria->add(Cl50Peer::PH, $this->ph);
        if ($this->isColumnModified(Cl50Peer::ALKALINITY)) $criteria->add(Cl50Peer::ALKALINITY, $this->alkalinity);
        if ($this->isColumnModified(Cl50Peer::CHEMICALGROUP)) $criteria->add(Cl50Peer::CHEMICALGROUP, $this->chemicalgroup);
        if ($this->isColumnModified(Cl50Peer::CHEMICALGROUP2)) $criteria->add(Cl50Peer::CHEMICALGROUP2, $this->chemicalgroup2);
        if ($this->isColumnModified(Cl50Peer::CHEMICALNAME)) $criteria->add(Cl50Peer::CHEMICALNAME, $this->chemicalname);
        if ($this->isColumnModified(Cl50Peer::PURITY)) $criteria->add(Cl50Peer::PURITY, $this->purity);
        if ($this->isColumnModified(Cl50Peer::VEHICLE)) $criteria->add(Cl50Peer::VEHICLE, $this->vehicle);
        if ($this->isColumnModified(Cl50Peer::PURITY2)) $criteria->add(Cl50Peer::PURITY2, $this->purity2);
        if ($this->isColumnModified(Cl50Peer::COMMONNAME)) $criteria->add(Cl50Peer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(Cl50Peer::CHEMICALUSE)) $criteria->add(Cl50Peer::CHEMICALUSE, $this->chemicaluse);
        if ($this->isColumnModified(Cl50Peer::CL50)) $criteria->add(Cl50Peer::CL50, $this->cl50);
        if ($this->isColumnModified(Cl50Peer::EXPOSITION)) $criteria->add(Cl50Peer::EXPOSITION, $this->exposition);
        if ($this->isColumnModified(Cl50Peer::FLOW)) $criteria->add(Cl50Peer::FLOW, $this->flow);
        if ($this->isColumnModified(Cl50Peer::FLOWRATE)) $criteria->add(Cl50Peer::FLOWRATE, $this->flowrate);
        if ($this->isColumnModified(Cl50Peer::COMMENTS)) $criteria->add(Cl50Peer::COMMENTS, $this->comments);
        if ($this->isColumnModified(Cl50Peer::CL50REFNOFB)) $criteria->add(Cl50Peer::CL50REFNOFB, $this->cl50refnofb);
        if ($this->isColumnModified(Cl50Peer::DATAREFFB)) $criteria->add(Cl50Peer::DATAREFFB, $this->datareffb);
        if ($this->isColumnModified(Cl50Peer::ENTERED)) $criteria->add(Cl50Peer::ENTERED, $this->entered);
        if ($this->isColumnModified(Cl50Peer::DATEENTERED)) $criteria->add(Cl50Peer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(Cl50Peer::MODIFIED)) $criteria->add(Cl50Peer::MODIFIED, $this->modified);
        if ($this->isColumnModified(Cl50Peer::DATEMODIFIED)) $criteria->add(Cl50Peer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(Cl50Peer::CHECKED)) $criteria->add(Cl50Peer::CHECKED, $this->checked);
        if ($this->isColumnModified(Cl50Peer::DATECHECKED)) $criteria->add(Cl50Peer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(Cl50Peer::TS)) $criteria->add(Cl50Peer::TS, $this->ts);

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
        $criteria = new Criteria(Cl50Peer::DATABASE_NAME);
        $criteria->add(Cl50Peer::CL50CODE, $this->cl50code);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCl50code();
    }

    /**
     * Generic method to set the primary key (cl50code column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCl50code($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCl50code();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cl50 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setFamily($this->getFamily());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setNumber2($this->getNumber2());
        $copyObj->setSex2($this->getSex2());
        $copyObj->setCl50refno($this->getCl50refno());
        $copyObj->setMinimumweight($this->getMinimumweight());
        $copyObj->setModalweight($this->getModalweight());
        $copyObj->setMaximumweight($this->getMaximumweight());
        $copyObj->setLifestage($this->getLifestage());
        $copyObj->setLength($this->getLength());
        $copyObj->setAppliedstress($this->getAppliedstress());
        $copyObj->setDataref($this->getDataref());
        $copyObj->setTemp($this->getTemp());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setOxygen($this->getOxygen());
        $copyObj->setOxygenmgl($this->getOxygenmgl());
        $copyObj->setPh($this->getPh());
        $copyObj->setAlkalinity($this->getAlkalinity());
        $copyObj->setChemicalgroup($this->getChemicalgroup());
        $copyObj->setChemicalgroup2($this->getChemicalgroup2());
        $copyObj->setChemicalname($this->getChemicalname());
        $copyObj->setPurity($this->getPurity());
        $copyObj->setVehicle($this->getVehicle());
        $copyObj->setPurity2($this->getPurity2());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setChemicaluse($this->getChemicaluse());
        $copyObj->setCl50($this->getCl50());
        $copyObj->setExposition($this->getExposition());
        $copyObj->setFlow($this->getFlow());
        $copyObj->setFlowrate($this->getFlowrate());
        $copyObj->setComments($this->getComments());
        $copyObj->setCl50refnofb($this->getCl50refnofb());
        $copyObj->setDatareffb($this->getDatareffb());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setChecked($this->getChecked());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCl50code(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cl50 Clone of current object.
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
     * @return Cl50Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new Cl50Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->cl50code = null;
        $this->genus = null;
        $this->species = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->family = null;
        $this->famcode = null;
        $this->number2 = null;
        $this->sex2 = null;
        $this->cl50refno = null;
        $this->minimumweight = null;
        $this->modalweight = null;
        $this->maximumweight = null;
        $this->lifestage = null;
        $this->length = null;
        $this->appliedstress = null;
        $this->dataref = null;
        $this->temp = null;
        $this->salinity = null;
        $this->oxygen = null;
        $this->oxygenmgl = null;
        $this->ph = null;
        $this->alkalinity = null;
        $this->chemicalgroup = null;
        $this->chemicalgroup2 = null;
        $this->chemicalname = null;
        $this->purity = null;
        $this->vehicle = null;
        $this->purity2 = null;
        $this->commonname = null;
        $this->chemicaluse = null;
        $this->cl50 = null;
        $this->exposition = null;
        $this->flow = null;
        $this->flowrate = null;
        $this->comments = null;
        $this->cl50refnofb = null;
        $this->datareffb = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->checked = null;
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
        return (string) $this->exportTo(Cl50Peer::DEFAULT_STRING_FORMAT);
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
