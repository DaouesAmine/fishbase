<?php


/**
 * Base class that represents a row from the 'genetics' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGenetics extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GeneticsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GeneticsPeer
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
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the geneticsrefno field.
     * @var        int
     */
    protected $geneticsrefno;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the tissues field.
     * @var        string
     */
    protected $tissues;

    /**
     * The value for the chromosomeno field.
     * @var        int
     */
    protected $chromosomeno;

    /**
     * The value for the chromosomeref field.
     * @var        int
     */
    protected $chromosomeref;

    /**
     * The value for the chromosomedip field.
     * @var        int
     */
    protected $chromosomedip;

    /**
     * The value for the chromosomediptemp field.
     * @var        int
     */
    protected $chromosomediptemp;

    /**
     * The value for the chromosomedipmax field.
     * @var        int
     */
    protected $chromosomedipmax;

    /**
     * The value for the chromosomedipref field.
     * @var        int
     */
    protected $chromosomedipref;

    /**
     * The value for the chromosometyperef field.
     * @var        int
     */
    protected $chromosometyperef;

    /**
     * The value for the metacentric field.
     * @var        int
     */
    protected $metacentric;

    /**
     * The value for the submetacentric field.
     * @var        int
     */
    protected $submetacentric;

    /**
     * The value for the subtelocentric field.
     * @var        int
     */
    protected $subtelocentric;

    /**
     * The value for the telocentric field.
     * @var        int
     */
    protected $telocentric;

    /**
     * The value for the metasubmetacentric field.
     * @var        int
     */
    protected $metasubmetacentric;

    /**
     * The value for the subteloacrocentric field.
     * @var        int
     */
    protected $subteloacrocentric;

    /**
     * The value for the chromosomearm field.
     * @var        int
     */
    protected $chromosomearm;

    /**
     * The value for the chromosomearmcalc field.
     * @var        int
     */
    protected $chromosomearmcalc;

    /**
     * The value for the chromosomearmtemp field.
     * @var        int
     */
    protected $chromosomearmtemp;

    /**
     * The value for the chromosomearmref field.
     * @var        int
     */
    protected $chromosomearmref;

    /**
     * The value for the sexmech field.
     * @var        string
     */
    protected $sexmech;

    /**
     * The value for the sexmechref field.
     * @var        int
     */
    protected $sexmechref;

    /**
     * The value for the dnasequence field.
     * @var        int
     */
    protected $dnasequence;

    /**
     * The value for the dnaseqref field.
     * @var        int
     */
    protected $dnaseqref;

    /**
     * The value for the dnaanalysis field.
     * @var        int
     */
    protected $dnaanalysis;

    /**
     * The value for the dnaanalref field.
     * @var        int
     */
    protected $dnaanalref;

    /**
     * The value for the geneticmarker field.
     * @var        int
     */
    protected $geneticmarker;

    /**
     * The value for the gmarkerref field.
     * @var        int
     */
    protected $gmarkerref;

    /**
     * The value for the dna field.
     * @var        double
     */
    protected $dna;

    /**
     * The value for the dnaref field.
     * @var        int
     */
    protected $dnaref;

    /**
     * The value for the remarksref field.
     * @var        int
     */
    protected $remarksref;

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
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

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
     * Get the [stockcode] column value.
     *
     * @return int
     */
    public function getStockcode()
    {

        return $this->stockcode;
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
     * Get the [geneticsrefno] column value.
     *
     * @return int
     */
    public function getGeneticsrefno()
    {

        return $this->geneticsrefno;
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
     * Get the [c_code] column value.
     *
     * @return string
     */
    public function getCCode()
    {

        return $this->c_code;
    }

    /**
     * Get the [sex] column value.
     *
     * @return string
     */
    public function getSex()
    {

        return $this->sex;
    }

    /**
     * Get the [tissues] column value.
     *
     * @return string
     */
    public function getTissues()
    {

        return $this->tissues;
    }

    /**
     * Get the [chromosomeno] column value.
     *
     * @return int
     */
    public function getChromosomeno()
    {

        return $this->chromosomeno;
    }

    /**
     * Get the [chromosomeref] column value.
     *
     * @return int
     */
    public function getChromosomeref()
    {

        return $this->chromosomeref;
    }

    /**
     * Get the [chromosomedip] column value.
     *
     * @return int
     */
    public function getChromosomedip()
    {

        return $this->chromosomedip;
    }

    /**
     * Get the [chromosomediptemp] column value.
     *
     * @return int
     */
    public function getChromosomediptemp()
    {

        return $this->chromosomediptemp;
    }

    /**
     * Get the [chromosomedipmax] column value.
     *
     * @return int
     */
    public function getChromosomedipmax()
    {

        return $this->chromosomedipmax;
    }

    /**
     * Get the [chromosomedipref] column value.
     *
     * @return int
     */
    public function getChromosomedipref()
    {

        return $this->chromosomedipref;
    }

    /**
     * Get the [chromosometyperef] column value.
     *
     * @return int
     */
    public function getChromosometyperef()
    {

        return $this->chromosometyperef;
    }

    /**
     * Get the [metacentric] column value.
     *
     * @return int
     */
    public function getMetacentric()
    {

        return $this->metacentric;
    }

    /**
     * Get the [submetacentric] column value.
     *
     * @return int
     */
    public function getSubmetacentric()
    {

        return $this->submetacentric;
    }

    /**
     * Get the [subtelocentric] column value.
     *
     * @return int
     */
    public function getSubtelocentric()
    {

        return $this->subtelocentric;
    }

    /**
     * Get the [telocentric] column value.
     *
     * @return int
     */
    public function getTelocentric()
    {

        return $this->telocentric;
    }

    /**
     * Get the [metasubmetacentric] column value.
     *
     * @return int
     */
    public function getMetasubmetacentric()
    {

        return $this->metasubmetacentric;
    }

    /**
     * Get the [subteloacrocentric] column value.
     *
     * @return int
     */
    public function getSubteloacrocentric()
    {

        return $this->subteloacrocentric;
    }

    /**
     * Get the [chromosomearm] column value.
     *
     * @return int
     */
    public function getChromosomearm()
    {

        return $this->chromosomearm;
    }

    /**
     * Get the [chromosomearmcalc] column value.
     *
     * @return int
     */
    public function getChromosomearmcalc()
    {

        return $this->chromosomearmcalc;
    }

    /**
     * Get the [chromosomearmtemp] column value.
     *
     * @return int
     */
    public function getChromosomearmtemp()
    {

        return $this->chromosomearmtemp;
    }

    /**
     * Get the [chromosomearmref] column value.
     *
     * @return int
     */
    public function getChromosomearmref()
    {

        return $this->chromosomearmref;
    }

    /**
     * Get the [sexmech] column value.
     *
     * @return string
     */
    public function getSexmech()
    {

        return $this->sexmech;
    }

    /**
     * Get the [sexmechref] column value.
     *
     * @return int
     */
    public function getSexmechref()
    {

        return $this->sexmechref;
    }

    /**
     * Get the [dnasequence] column value.
     *
     * @return int
     */
    public function getDnasequence()
    {

        return $this->dnasequence;
    }

    /**
     * Get the [dnaseqref] column value.
     *
     * @return int
     */
    public function getDnaseqref()
    {

        return $this->dnaseqref;
    }

    /**
     * Get the [dnaanalysis] column value.
     *
     * @return int
     */
    public function getDnaanalysis()
    {

        return $this->dnaanalysis;
    }

    /**
     * Get the [dnaanalref] column value.
     *
     * @return int
     */
    public function getDnaanalref()
    {

        return $this->dnaanalref;
    }

    /**
     * Get the [geneticmarker] column value.
     *
     * @return int
     */
    public function getGeneticmarker()
    {

        return $this->geneticmarker;
    }

    /**
     * Get the [gmarkerref] column value.
     *
     * @return int
     */
    public function getGmarkerref()
    {

        return $this->gmarkerref;
    }

    /**
     * Get the [dna] column value.
     *
     * @return double
     */
    public function getDna()
    {

        return $this->dna;
    }

    /**
     * Get the [dnaref] column value.
     *
     * @return int
     */
    public function getDnaref()
    {

        return $this->dnaref;
    }

    /**
     * Get the [remarksref] column value.
     *
     * @return int
     */
    public function getRemarksref()
    {

        return $this->remarksref;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
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
     * @return Genetics The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = GeneticsPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = GeneticsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = GeneticsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [geneticsrefno] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setGeneticsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->geneticsrefno !== $v) {
            $this->geneticsrefno = $v;
            $this->modifiedColumns[] = GeneticsPeer::GENETICSREFNO;
        }


        return $this;
    } // setGeneticsrefno()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = GeneticsPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = GeneticsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = GeneticsPeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [tissues] column.
     *
     * @param  string $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setTissues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tissues !== $v) {
            $this->tissues = $v;
            $this->modifiedColumns[] = GeneticsPeer::TISSUES;
        }


        return $this;
    } // setTissues()

    /**
     * Set the value of [chromosomeno] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomeno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomeno !== $v) {
            $this->chromosomeno = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMENO;
        }


        return $this;
    } // setChromosomeno()

    /**
     * Set the value of [chromosomeref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomeref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomeref !== $v) {
            $this->chromosomeref = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEREF;
        }


        return $this;
    } // setChromosomeref()

    /**
     * Set the value of [chromosomedip] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomedip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomedip !== $v) {
            $this->chromosomedip = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEDIP;
        }


        return $this;
    } // setChromosomedip()

    /**
     * Set the value of [chromosomediptemp] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomediptemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomediptemp !== $v) {
            $this->chromosomediptemp = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEDIPTEMP;
        }


        return $this;
    } // setChromosomediptemp()

    /**
     * Set the value of [chromosomedipmax] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomedipmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomedipmax !== $v) {
            $this->chromosomedipmax = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEDIPMAX;
        }


        return $this;
    } // setChromosomedipmax()

    /**
     * Set the value of [chromosomedipref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomedipref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomedipref !== $v) {
            $this->chromosomedipref = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEDIPREF;
        }


        return $this;
    } // setChromosomedipref()

    /**
     * Set the value of [chromosometyperef] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosometyperef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosometyperef !== $v) {
            $this->chromosometyperef = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMETYPEREF;
        }


        return $this;
    } // setChromosometyperef()

    /**
     * Set the value of [metacentric] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setMetacentric($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->metacentric !== $v) {
            $this->metacentric = $v;
            $this->modifiedColumns[] = GeneticsPeer::METACENTRIC;
        }


        return $this;
    } // setMetacentric()

    /**
     * Set the value of [submetacentric] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSubmetacentric($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->submetacentric !== $v) {
            $this->submetacentric = $v;
            $this->modifiedColumns[] = GeneticsPeer::SUBMETACENTRIC;
        }


        return $this;
    } // setSubmetacentric()

    /**
     * Set the value of [subtelocentric] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSubtelocentric($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->subtelocentric !== $v) {
            $this->subtelocentric = $v;
            $this->modifiedColumns[] = GeneticsPeer::SUBTELOCENTRIC;
        }


        return $this;
    } // setSubtelocentric()

    /**
     * Set the value of [telocentric] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setTelocentric($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->telocentric !== $v) {
            $this->telocentric = $v;
            $this->modifiedColumns[] = GeneticsPeer::TELOCENTRIC;
        }


        return $this;
    } // setTelocentric()

    /**
     * Set the value of [metasubmetacentric] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setMetasubmetacentric($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->metasubmetacentric !== $v) {
            $this->metasubmetacentric = $v;
            $this->modifiedColumns[] = GeneticsPeer::METASUBMETACENTRIC;
        }


        return $this;
    } // setMetasubmetacentric()

    /**
     * Set the value of [subteloacrocentric] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSubteloacrocentric($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->subteloacrocentric !== $v) {
            $this->subteloacrocentric = $v;
            $this->modifiedColumns[] = GeneticsPeer::SUBTELOACROCENTRIC;
        }


        return $this;
    } // setSubteloacrocentric()

    /**
     * Set the value of [chromosomearm] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomearm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomearm !== $v) {
            $this->chromosomearm = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEARM;
        }


        return $this;
    } // setChromosomearm()

    /**
     * Set the value of [chromosomearmcalc] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomearmcalc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomearmcalc !== $v) {
            $this->chromosomearmcalc = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEARMCALC;
        }


        return $this;
    } // setChromosomearmcalc()

    /**
     * Set the value of [chromosomearmtemp] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomearmtemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomearmtemp !== $v) {
            $this->chromosomearmtemp = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEARMTEMP;
        }


        return $this;
    } // setChromosomearmtemp()

    /**
     * Set the value of [chromosomearmref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setChromosomearmref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chromosomearmref !== $v) {
            $this->chromosomearmref = $v;
            $this->modifiedColumns[] = GeneticsPeer::CHROMOSOMEARMREF;
        }


        return $this;
    } // setChromosomearmref()

    /**
     * Set the value of [sexmech] column.
     *
     * @param  string $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSexmech($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sexmech !== $v) {
            $this->sexmech = $v;
            $this->modifiedColumns[] = GeneticsPeer::SEXMECH;
        }


        return $this;
    } // setSexmech()

    /**
     * Set the value of [sexmechref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setSexmechref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sexmechref !== $v) {
            $this->sexmechref = $v;
            $this->modifiedColumns[] = GeneticsPeer::SEXMECHREF;
        }


        return $this;
    } // setSexmechref()

    /**
     * Set the value of [dnasequence] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setDnasequence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dnasequence !== $v) {
            $this->dnasequence = $v;
            $this->modifiedColumns[] = GeneticsPeer::DNASEQUENCE;
        }


        return $this;
    } // setDnasequence()

    /**
     * Set the value of [dnaseqref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setDnaseqref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dnaseqref !== $v) {
            $this->dnaseqref = $v;
            $this->modifiedColumns[] = GeneticsPeer::DNASEQREF;
        }


        return $this;
    } // setDnaseqref()

    /**
     * Set the value of [dnaanalysis] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setDnaanalysis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dnaanalysis !== $v) {
            $this->dnaanalysis = $v;
            $this->modifiedColumns[] = GeneticsPeer::DNAANALYSIS;
        }


        return $this;
    } // setDnaanalysis()

    /**
     * Set the value of [dnaanalref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setDnaanalref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dnaanalref !== $v) {
            $this->dnaanalref = $v;
            $this->modifiedColumns[] = GeneticsPeer::DNAANALREF;
        }


        return $this;
    } // setDnaanalref()

    /**
     * Set the value of [geneticmarker] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setGeneticmarker($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->geneticmarker !== $v) {
            $this->geneticmarker = $v;
            $this->modifiedColumns[] = GeneticsPeer::GENETICMARKER;
        }


        return $this;
    } // setGeneticmarker()

    /**
     * Set the value of [gmarkerref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setGmarkerref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gmarkerref !== $v) {
            $this->gmarkerref = $v;
            $this->modifiedColumns[] = GeneticsPeer::GMARKERREF;
        }


        return $this;
    } // setGmarkerref()

    /**
     * Set the value of [dna] column.
     *
     * @param  double $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setDna($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dna !== $v) {
            $this->dna = $v;
            $this->modifiedColumns[] = GeneticsPeer::DNA;
        }


        return $this;
    } // setDna()

    /**
     * Set the value of [dnaref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setDnaref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dnaref !== $v) {
            $this->dnaref = $v;
            $this->modifiedColumns[] = GeneticsPeer::DNAREF;
        }


        return $this;
    } // setDnaref()

    /**
     * Set the value of [remarksref] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setRemarksref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->remarksref !== $v) {
            $this->remarksref = $v;
            $this->modifiedColumns[] = GeneticsPeer::REMARKSREF;
        }


        return $this;
    } // setRemarksref()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = GeneticsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genetics The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = GeneticsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = GeneticsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genetics The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = GeneticsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = GeneticsPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genetics The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = GeneticsPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Genetics The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = GeneticsPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genetics The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = GeneticsPeer::TS;
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
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->geneticsrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->sex = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->tissues = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->chromosomeno = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->chromosomeref = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->chromosomedip = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->chromosomediptemp = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->chromosomedipmax = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->chromosomedipref = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->chromosometyperef = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->metacentric = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->submetacentric = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->subtelocentric = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->telocentric = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->metasubmetacentric = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->subteloacrocentric = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->chromosomearm = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->chromosomearmcalc = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->chromosomearmtemp = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->chromosomearmref = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->sexmech = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->sexmechref = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->dnasequence = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->dnaseqref = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->dnaanalysis = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->dnaanalref = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->geneticmarker = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->gmarkerref = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->dna = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->dnaref = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->remarksref = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->entered = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->dateentered = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->modified = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->datemodified = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->expert = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->datechecked = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->remark = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->ts = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 44; // 44 = GeneticsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Genetics object", $e);
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
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GeneticsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GeneticsQuery::create()
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
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GeneticsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = GeneticsPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GeneticsPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GeneticsPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`AutoCtr`';
        }
        if ($this->isColumnModified(GeneticsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(GeneticsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(GeneticsPeer::GENETICSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`GeneticsRefNo`';
        }
        if ($this->isColumnModified(GeneticsPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(GeneticsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(GeneticsPeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(GeneticsPeer::TISSUES)) {
            $modifiedColumns[':p' . $index++]  = '`Tissues`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMENO)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeNo`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEREF)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIP)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeDip`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIPTEMP)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeDipTemp`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeDipMax`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIPREF)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeDipRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMETYPEREF)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeTypeRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::METACENTRIC)) {
            $modifiedColumns[':p' . $index++]  = '`Metacentric`';
        }
        if ($this->isColumnModified(GeneticsPeer::SUBMETACENTRIC)) {
            $modifiedColumns[':p' . $index++]  = '`SubMetacentric`';
        }
        if ($this->isColumnModified(GeneticsPeer::SUBTELOCENTRIC)) {
            $modifiedColumns[':p' . $index++]  = '`Subtelocentric`';
        }
        if ($this->isColumnModified(GeneticsPeer::TELOCENTRIC)) {
            $modifiedColumns[':p' . $index++]  = '`Telocentric`';
        }
        if ($this->isColumnModified(GeneticsPeer::METASUBMETACENTRIC)) {
            $modifiedColumns[':p' . $index++]  = '`MetaSubmetacentric`';
        }
        if ($this->isColumnModified(GeneticsPeer::SUBTELOACROCENTRIC)) {
            $modifiedColumns[':p' . $index++]  = '`SubteloAcrocentric`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARM)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeArm`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARMCALC)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeArmCalc`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARMTEMP)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeArmTemp`';
        }
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARMREF)) {
            $modifiedColumns[':p' . $index++]  = '`ChromosomeArmRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::SEXMECH)) {
            $modifiedColumns[':p' . $index++]  = '`SexMech`';
        }
        if ($this->isColumnModified(GeneticsPeer::SEXMECHREF)) {
            $modifiedColumns[':p' . $index++]  = '`SexmechRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::DNASEQUENCE)) {
            $modifiedColumns[':p' . $index++]  = '`DNASequence`';
        }
        if ($this->isColumnModified(GeneticsPeer::DNASEQREF)) {
            $modifiedColumns[':p' . $index++]  = '`DNASeqRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::DNAANALYSIS)) {
            $modifiedColumns[':p' . $index++]  = '`DNAAnalysis`';
        }
        if ($this->isColumnModified(GeneticsPeer::DNAANALREF)) {
            $modifiedColumns[':p' . $index++]  = '`DNAAnalRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::GENETICMARKER)) {
            $modifiedColumns[':p' . $index++]  = '`GeneticMarker`';
        }
        if ($this->isColumnModified(GeneticsPeer::GMARKERREF)) {
            $modifiedColumns[':p' . $index++]  = '`GMarkerRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::DNA)) {
            $modifiedColumns[':p' . $index++]  = '`DNA`';
        }
        if ($this->isColumnModified(GeneticsPeer::DNAREF)) {
            $modifiedColumns[':p' . $index++]  = '`DNARef`';
        }
        if ($this->isColumnModified(GeneticsPeer::REMARKSREF)) {
            $modifiedColumns[':p' . $index++]  = '`RemarksRef`';
        }
        if ($this->isColumnModified(GeneticsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(GeneticsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(GeneticsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(GeneticsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(GeneticsPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(GeneticsPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(GeneticsPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(GeneticsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `genetics` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`GeneticsRefNo`':
                        $stmt->bindValue($identifier, $this->geneticsrefno, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Tissues`':
                        $stmt->bindValue($identifier, $this->tissues, PDO::PARAM_STR);
                        break;
                    case '`ChromosomeNo`':
                        $stmt->bindValue($identifier, $this->chromosomeno, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeRef`':
                        $stmt->bindValue($identifier, $this->chromosomeref, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeDip`':
                        $stmt->bindValue($identifier, $this->chromosomedip, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeDipTemp`':
                        $stmt->bindValue($identifier, $this->chromosomediptemp, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeDipMax`':
                        $stmt->bindValue($identifier, $this->chromosomedipmax, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeDipRef`':
                        $stmt->bindValue($identifier, $this->chromosomedipref, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeTypeRef`':
                        $stmt->bindValue($identifier, $this->chromosometyperef, PDO::PARAM_INT);
                        break;
                    case '`Metacentric`':
                        $stmt->bindValue($identifier, $this->metacentric, PDO::PARAM_INT);
                        break;
                    case '`SubMetacentric`':
                        $stmt->bindValue($identifier, $this->submetacentric, PDO::PARAM_INT);
                        break;
                    case '`Subtelocentric`':
                        $stmt->bindValue($identifier, $this->subtelocentric, PDO::PARAM_INT);
                        break;
                    case '`Telocentric`':
                        $stmt->bindValue($identifier, $this->telocentric, PDO::PARAM_INT);
                        break;
                    case '`MetaSubmetacentric`':
                        $stmt->bindValue($identifier, $this->metasubmetacentric, PDO::PARAM_INT);
                        break;
                    case '`SubteloAcrocentric`':
                        $stmt->bindValue($identifier, $this->subteloacrocentric, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeArm`':
                        $stmt->bindValue($identifier, $this->chromosomearm, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeArmCalc`':
                        $stmt->bindValue($identifier, $this->chromosomearmcalc, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeArmTemp`':
                        $stmt->bindValue($identifier, $this->chromosomearmtemp, PDO::PARAM_INT);
                        break;
                    case '`ChromosomeArmRef`':
                        $stmt->bindValue($identifier, $this->chromosomearmref, PDO::PARAM_INT);
                        break;
                    case '`SexMech`':
                        $stmt->bindValue($identifier, $this->sexmech, PDO::PARAM_STR);
                        break;
                    case '`SexmechRef`':
                        $stmt->bindValue($identifier, $this->sexmechref, PDO::PARAM_INT);
                        break;
                    case '`DNASequence`':
                        $stmt->bindValue($identifier, $this->dnasequence, PDO::PARAM_INT);
                        break;
                    case '`DNASeqRef`':
                        $stmt->bindValue($identifier, $this->dnaseqref, PDO::PARAM_INT);
                        break;
                    case '`DNAAnalysis`':
                        $stmt->bindValue($identifier, $this->dnaanalysis, PDO::PARAM_INT);
                        break;
                    case '`DNAAnalRef`':
                        $stmt->bindValue($identifier, $this->dnaanalref, PDO::PARAM_INT);
                        break;
                    case '`GeneticMarker`':
                        $stmt->bindValue($identifier, $this->geneticmarker, PDO::PARAM_INT);
                        break;
                    case '`GMarkerRef`':
                        $stmt->bindValue($identifier, $this->gmarkerref, PDO::PARAM_INT);
                        break;
                    case '`DNA`':
                        $stmt->bindValue($identifier, $this->dna, PDO::PARAM_STR);
                        break;
                    case '`DNARef`':
                        $stmt->bindValue($identifier, $this->dnaref, PDO::PARAM_INT);
                        break;
                    case '`RemarksRef`':
                        $stmt->bindValue($identifier, $this->remarksref, PDO::PARAM_INT);
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
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
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


            if (($retval = GeneticsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GeneticsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getGeneticsrefno();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getSex();
                break;
            case 7:
                return $this->getTissues();
                break;
            case 8:
                return $this->getChromosomeno();
                break;
            case 9:
                return $this->getChromosomeref();
                break;
            case 10:
                return $this->getChromosomedip();
                break;
            case 11:
                return $this->getChromosomediptemp();
                break;
            case 12:
                return $this->getChromosomedipmax();
                break;
            case 13:
                return $this->getChromosomedipref();
                break;
            case 14:
                return $this->getChromosometyperef();
                break;
            case 15:
                return $this->getMetacentric();
                break;
            case 16:
                return $this->getSubmetacentric();
                break;
            case 17:
                return $this->getSubtelocentric();
                break;
            case 18:
                return $this->getTelocentric();
                break;
            case 19:
                return $this->getMetasubmetacentric();
                break;
            case 20:
                return $this->getSubteloacrocentric();
                break;
            case 21:
                return $this->getChromosomearm();
                break;
            case 22:
                return $this->getChromosomearmcalc();
                break;
            case 23:
                return $this->getChromosomearmtemp();
                break;
            case 24:
                return $this->getChromosomearmref();
                break;
            case 25:
                return $this->getSexmech();
                break;
            case 26:
                return $this->getSexmechref();
                break;
            case 27:
                return $this->getDnasequence();
                break;
            case 28:
                return $this->getDnaseqref();
                break;
            case 29:
                return $this->getDnaanalysis();
                break;
            case 30:
                return $this->getDnaanalref();
                break;
            case 31:
                return $this->getGeneticmarker();
                break;
            case 32:
                return $this->getGmarkerref();
                break;
            case 33:
                return $this->getDna();
                break;
            case 34:
                return $this->getDnaref();
                break;
            case 35:
                return $this->getRemarksref();
                break;
            case 36:
                return $this->getEntered();
                break;
            case 37:
                return $this->getDateentered();
                break;
            case 38:
                return $this->getModified();
                break;
            case 39:
                return $this->getDatemodified();
                break;
            case 40:
                return $this->getExpert();
                break;
            case 41:
                return $this->getDatechecked();
                break;
            case 42:
                return $this->getRemark();
                break;
            case 43:
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
        if (isset($alreadyDumpedObjects['Genetics'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Genetics'][$this->getPrimaryKey()] = true;
        $keys = GeneticsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getGeneticsrefno(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getSex(),
            $keys[7] => $this->getTissues(),
            $keys[8] => $this->getChromosomeno(),
            $keys[9] => $this->getChromosomeref(),
            $keys[10] => $this->getChromosomedip(),
            $keys[11] => $this->getChromosomediptemp(),
            $keys[12] => $this->getChromosomedipmax(),
            $keys[13] => $this->getChromosomedipref(),
            $keys[14] => $this->getChromosometyperef(),
            $keys[15] => $this->getMetacentric(),
            $keys[16] => $this->getSubmetacentric(),
            $keys[17] => $this->getSubtelocentric(),
            $keys[18] => $this->getTelocentric(),
            $keys[19] => $this->getMetasubmetacentric(),
            $keys[20] => $this->getSubteloacrocentric(),
            $keys[21] => $this->getChromosomearm(),
            $keys[22] => $this->getChromosomearmcalc(),
            $keys[23] => $this->getChromosomearmtemp(),
            $keys[24] => $this->getChromosomearmref(),
            $keys[25] => $this->getSexmech(),
            $keys[26] => $this->getSexmechref(),
            $keys[27] => $this->getDnasequence(),
            $keys[28] => $this->getDnaseqref(),
            $keys[29] => $this->getDnaanalysis(),
            $keys[30] => $this->getDnaanalref(),
            $keys[31] => $this->getGeneticmarker(),
            $keys[32] => $this->getGmarkerref(),
            $keys[33] => $this->getDna(),
            $keys[34] => $this->getDnaref(),
            $keys[35] => $this->getRemarksref(),
            $keys[36] => $this->getEntered(),
            $keys[37] => $this->getDateentered(),
            $keys[38] => $this->getModified(),
            $keys[39] => $this->getDatemodified(),
            $keys[40] => $this->getExpert(),
            $keys[41] => $this->getDatechecked(),
            $keys[42] => $this->getRemark(),
            $keys[43] => $this->getTs(),
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
        $pos = GeneticsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setGeneticsrefno($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setSex($value);
                break;
            case 7:
                $this->setTissues($value);
                break;
            case 8:
                $this->setChromosomeno($value);
                break;
            case 9:
                $this->setChromosomeref($value);
                break;
            case 10:
                $this->setChromosomedip($value);
                break;
            case 11:
                $this->setChromosomediptemp($value);
                break;
            case 12:
                $this->setChromosomedipmax($value);
                break;
            case 13:
                $this->setChromosomedipref($value);
                break;
            case 14:
                $this->setChromosometyperef($value);
                break;
            case 15:
                $this->setMetacentric($value);
                break;
            case 16:
                $this->setSubmetacentric($value);
                break;
            case 17:
                $this->setSubtelocentric($value);
                break;
            case 18:
                $this->setTelocentric($value);
                break;
            case 19:
                $this->setMetasubmetacentric($value);
                break;
            case 20:
                $this->setSubteloacrocentric($value);
                break;
            case 21:
                $this->setChromosomearm($value);
                break;
            case 22:
                $this->setChromosomearmcalc($value);
                break;
            case 23:
                $this->setChromosomearmtemp($value);
                break;
            case 24:
                $this->setChromosomearmref($value);
                break;
            case 25:
                $this->setSexmech($value);
                break;
            case 26:
                $this->setSexmechref($value);
                break;
            case 27:
                $this->setDnasequence($value);
                break;
            case 28:
                $this->setDnaseqref($value);
                break;
            case 29:
                $this->setDnaanalysis($value);
                break;
            case 30:
                $this->setDnaanalref($value);
                break;
            case 31:
                $this->setGeneticmarker($value);
                break;
            case 32:
                $this->setGmarkerref($value);
                break;
            case 33:
                $this->setDna($value);
                break;
            case 34:
                $this->setDnaref($value);
                break;
            case 35:
                $this->setRemarksref($value);
                break;
            case 36:
                $this->setEntered($value);
                break;
            case 37:
                $this->setDateentered($value);
                break;
            case 38:
                $this->setModified($value);
                break;
            case 39:
                $this->setDatemodified($value);
                break;
            case 40:
                $this->setExpert($value);
                break;
            case 41:
                $this->setDatechecked($value);
                break;
            case 42:
                $this->setRemark($value);
                break;
            case 43:
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
        $keys = GeneticsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGeneticsrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSex($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTissues($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setChromosomeno($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setChromosomeref($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setChromosomedip($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setChromosomediptemp($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setChromosomedipmax($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setChromosomedipref($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setChromosometyperef($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMetacentric($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSubmetacentric($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSubtelocentric($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTelocentric($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMetasubmetacentric($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSubteloacrocentric($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setChromosomearm($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setChromosomearmcalc($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setChromosomearmtemp($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setChromosomearmref($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSexmech($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSexmechref($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDnasequence($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDnaseqref($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDnaanalysis($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDnaanalref($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setGeneticmarker($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setGmarkerref($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDna($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDnaref($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setRemarksref($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEntered($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateentered($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setModified($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDatemodified($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setExpert($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDatechecked($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setRemark($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTs($arr[$keys[43]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GeneticsPeer::DATABASE_NAME);

        if ($this->isColumnModified(GeneticsPeer::AUTOCTR)) $criteria->add(GeneticsPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(GeneticsPeer::STOCKCODE)) $criteria->add(GeneticsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(GeneticsPeer::SPECCODE)) $criteria->add(GeneticsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(GeneticsPeer::GENETICSREFNO)) $criteria->add(GeneticsPeer::GENETICSREFNO, $this->geneticsrefno);
        if ($this->isColumnModified(GeneticsPeer::LOCALITY)) $criteria->add(GeneticsPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(GeneticsPeer::C_CODE)) $criteria->add(GeneticsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(GeneticsPeer::SEX)) $criteria->add(GeneticsPeer::SEX, $this->sex);
        if ($this->isColumnModified(GeneticsPeer::TISSUES)) $criteria->add(GeneticsPeer::TISSUES, $this->tissues);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMENO)) $criteria->add(GeneticsPeer::CHROMOSOMENO, $this->chromosomeno);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEREF)) $criteria->add(GeneticsPeer::CHROMOSOMEREF, $this->chromosomeref);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIP)) $criteria->add(GeneticsPeer::CHROMOSOMEDIP, $this->chromosomedip);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIPTEMP)) $criteria->add(GeneticsPeer::CHROMOSOMEDIPTEMP, $this->chromosomediptemp);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIPMAX)) $criteria->add(GeneticsPeer::CHROMOSOMEDIPMAX, $this->chromosomedipmax);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEDIPREF)) $criteria->add(GeneticsPeer::CHROMOSOMEDIPREF, $this->chromosomedipref);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMETYPEREF)) $criteria->add(GeneticsPeer::CHROMOSOMETYPEREF, $this->chromosometyperef);
        if ($this->isColumnModified(GeneticsPeer::METACENTRIC)) $criteria->add(GeneticsPeer::METACENTRIC, $this->metacentric);
        if ($this->isColumnModified(GeneticsPeer::SUBMETACENTRIC)) $criteria->add(GeneticsPeer::SUBMETACENTRIC, $this->submetacentric);
        if ($this->isColumnModified(GeneticsPeer::SUBTELOCENTRIC)) $criteria->add(GeneticsPeer::SUBTELOCENTRIC, $this->subtelocentric);
        if ($this->isColumnModified(GeneticsPeer::TELOCENTRIC)) $criteria->add(GeneticsPeer::TELOCENTRIC, $this->telocentric);
        if ($this->isColumnModified(GeneticsPeer::METASUBMETACENTRIC)) $criteria->add(GeneticsPeer::METASUBMETACENTRIC, $this->metasubmetacentric);
        if ($this->isColumnModified(GeneticsPeer::SUBTELOACROCENTRIC)) $criteria->add(GeneticsPeer::SUBTELOACROCENTRIC, $this->subteloacrocentric);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARM)) $criteria->add(GeneticsPeer::CHROMOSOMEARM, $this->chromosomearm);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARMCALC)) $criteria->add(GeneticsPeer::CHROMOSOMEARMCALC, $this->chromosomearmcalc);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARMTEMP)) $criteria->add(GeneticsPeer::CHROMOSOMEARMTEMP, $this->chromosomearmtemp);
        if ($this->isColumnModified(GeneticsPeer::CHROMOSOMEARMREF)) $criteria->add(GeneticsPeer::CHROMOSOMEARMREF, $this->chromosomearmref);
        if ($this->isColumnModified(GeneticsPeer::SEXMECH)) $criteria->add(GeneticsPeer::SEXMECH, $this->sexmech);
        if ($this->isColumnModified(GeneticsPeer::SEXMECHREF)) $criteria->add(GeneticsPeer::SEXMECHREF, $this->sexmechref);
        if ($this->isColumnModified(GeneticsPeer::DNASEQUENCE)) $criteria->add(GeneticsPeer::DNASEQUENCE, $this->dnasequence);
        if ($this->isColumnModified(GeneticsPeer::DNASEQREF)) $criteria->add(GeneticsPeer::DNASEQREF, $this->dnaseqref);
        if ($this->isColumnModified(GeneticsPeer::DNAANALYSIS)) $criteria->add(GeneticsPeer::DNAANALYSIS, $this->dnaanalysis);
        if ($this->isColumnModified(GeneticsPeer::DNAANALREF)) $criteria->add(GeneticsPeer::DNAANALREF, $this->dnaanalref);
        if ($this->isColumnModified(GeneticsPeer::GENETICMARKER)) $criteria->add(GeneticsPeer::GENETICMARKER, $this->geneticmarker);
        if ($this->isColumnModified(GeneticsPeer::GMARKERREF)) $criteria->add(GeneticsPeer::GMARKERREF, $this->gmarkerref);
        if ($this->isColumnModified(GeneticsPeer::DNA)) $criteria->add(GeneticsPeer::DNA, $this->dna);
        if ($this->isColumnModified(GeneticsPeer::DNAREF)) $criteria->add(GeneticsPeer::DNAREF, $this->dnaref);
        if ($this->isColumnModified(GeneticsPeer::REMARKSREF)) $criteria->add(GeneticsPeer::REMARKSREF, $this->remarksref);
        if ($this->isColumnModified(GeneticsPeer::ENTERED)) $criteria->add(GeneticsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(GeneticsPeer::DATEENTERED)) $criteria->add(GeneticsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(GeneticsPeer::MODIFIED)) $criteria->add(GeneticsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(GeneticsPeer::DATEMODIFIED)) $criteria->add(GeneticsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(GeneticsPeer::EXPERT)) $criteria->add(GeneticsPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(GeneticsPeer::DATECHECKED)) $criteria->add(GeneticsPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(GeneticsPeer::REMARK)) $criteria->add(GeneticsPeer::REMARK, $this->remark);
        if ($this->isColumnModified(GeneticsPeer::TS)) $criteria->add(GeneticsPeer::TS, $this->ts);

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
        $criteria = new Criteria(GeneticsPeer::DATABASE_NAME);
        $criteria->add(GeneticsPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Genetics (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setGeneticsrefno($this->getGeneticsrefno());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setSex($this->getSex());
        $copyObj->setTissues($this->getTissues());
        $copyObj->setChromosomeno($this->getChromosomeno());
        $copyObj->setChromosomeref($this->getChromosomeref());
        $copyObj->setChromosomedip($this->getChromosomedip());
        $copyObj->setChromosomediptemp($this->getChromosomediptemp());
        $copyObj->setChromosomedipmax($this->getChromosomedipmax());
        $copyObj->setChromosomedipref($this->getChromosomedipref());
        $copyObj->setChromosometyperef($this->getChromosometyperef());
        $copyObj->setMetacentric($this->getMetacentric());
        $copyObj->setSubmetacentric($this->getSubmetacentric());
        $copyObj->setSubtelocentric($this->getSubtelocentric());
        $copyObj->setTelocentric($this->getTelocentric());
        $copyObj->setMetasubmetacentric($this->getMetasubmetacentric());
        $copyObj->setSubteloacrocentric($this->getSubteloacrocentric());
        $copyObj->setChromosomearm($this->getChromosomearm());
        $copyObj->setChromosomearmcalc($this->getChromosomearmcalc());
        $copyObj->setChromosomearmtemp($this->getChromosomearmtemp());
        $copyObj->setChromosomearmref($this->getChromosomearmref());
        $copyObj->setSexmech($this->getSexmech());
        $copyObj->setSexmechref($this->getSexmechref());
        $copyObj->setDnasequence($this->getDnasequence());
        $copyObj->setDnaseqref($this->getDnaseqref());
        $copyObj->setDnaanalysis($this->getDnaanalysis());
        $copyObj->setDnaanalref($this->getDnaanalref());
        $copyObj->setGeneticmarker($this->getGeneticmarker());
        $copyObj->setGmarkerref($this->getGmarkerref());
        $copyObj->setDna($this->getDna());
        $copyObj->setDnaref($this->getDnaref());
        $copyObj->setRemarksref($this->getRemarksref());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setRemark($this->getRemark());
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
     * @return Genetics Clone of current object.
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
     * @return GeneticsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GeneticsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->geneticsrefno = null;
        $this->locality = null;
        $this->c_code = null;
        $this->sex = null;
        $this->tissues = null;
        $this->chromosomeno = null;
        $this->chromosomeref = null;
        $this->chromosomedip = null;
        $this->chromosomediptemp = null;
        $this->chromosomedipmax = null;
        $this->chromosomedipref = null;
        $this->chromosometyperef = null;
        $this->metacentric = null;
        $this->submetacentric = null;
        $this->subtelocentric = null;
        $this->telocentric = null;
        $this->metasubmetacentric = null;
        $this->subteloacrocentric = null;
        $this->chromosomearm = null;
        $this->chromosomearmcalc = null;
        $this->chromosomearmtemp = null;
        $this->chromosomearmref = null;
        $this->sexmech = null;
        $this->sexmechref = null;
        $this->dnasequence = null;
        $this->dnaseqref = null;
        $this->dnaanalysis = null;
        $this->dnaanalref = null;
        $this->geneticmarker = null;
        $this->gmarkerref = null;
        $this->dna = null;
        $this->dnaref = null;
        $this->remarksref = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->remark = null;
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
        return (string) $this->exportTo(GeneticsPeer::DEFAULT_STRING_FORMAT);
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
