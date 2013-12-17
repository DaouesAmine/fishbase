<?php


/**
 * Base class that represents a row from the 'genedat' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGenedat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GenedatPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GenedatPeer
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
     * The value for the genedatrefno field.
     * @var        int
     */
    protected $genedatrefno;

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
     * The value for the trait field.
     * @var        string
     */
    protected $trait;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the meantrait field.
     * @var        double
     */
    protected $meantrait;

    /**
     * The value for the unitoftrait field.
     * @var        string
     */
    protected $unitoftrait;

    /**
     * The value for the standarddeviation field.
     * @var        double
     */
    protected $standarddeviation;

    /**
     * The value for the heritability field.
     * @var        double
     */
    protected $heritability;

    /**
     * The value for the standarderror field.
     * @var        double
     */
    protected $standarderror;

    /**
     * The value for the methodheritab field.
     * @var        string
     */
    protected $methodheritab;

    /**
     * The value for the commentheritab field.
     * @var        string
     */
    protected $commentheritab;

    /**
     * The value for the selection field.
     * @var        int
     */
    protected $selection;

    /**
     * The value for the methodselection field.
     * @var        string
     */
    protected $methodselection;

    /**
     * The value for the response field.
     * @var        int
     */
    protected $response;

    /**
     * The value for the commentselection field.
     * @var        string
     */
    protected $commentselection;

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
     * Get the [genedatrefno] column value.
     *
     * @return int
     */
    public function getGenedatrefno()
    {

        return $this->genedatrefno;
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
     * Get the [trait] column value.
     *
     * @return string
     */
    public function getTrait()
    {

        return $this->trait;
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
     * Get the [meantrait] column value.
     *
     * @return double
     */
    public function getMeantrait()
    {

        return $this->meantrait;
    }

    /**
     * Get the [unitoftrait] column value.
     *
     * @return string
     */
    public function getUnitoftrait()
    {

        return $this->unitoftrait;
    }

    /**
     * Get the [standarddeviation] column value.
     *
     * @return double
     */
    public function getStandarddeviation()
    {

        return $this->standarddeviation;
    }

    /**
     * Get the [heritability] column value.
     *
     * @return double
     */
    public function getHeritability()
    {

        return $this->heritability;
    }

    /**
     * Get the [standarderror] column value.
     *
     * @return double
     */
    public function getStandarderror()
    {

        return $this->standarderror;
    }

    /**
     * Get the [methodheritab] column value.
     *
     * @return string
     */
    public function getMethodheritab()
    {

        return $this->methodheritab;
    }

    /**
     * Get the [commentheritab] column value.
     *
     * @return string
     */
    public function getCommentheritab()
    {

        return $this->commentheritab;
    }

    /**
     * Get the [selection] column value.
     *
     * @return int
     */
    public function getSelection()
    {

        return $this->selection;
    }

    /**
     * Get the [methodselection] column value.
     *
     * @return string
     */
    public function getMethodselection()
    {

        return $this->methodselection;
    }

    /**
     * Get the [response] column value.
     *
     * @return int
     */
    public function getResponse()
    {

        return $this->response;
    }

    /**
     * Get the [commentselection] column value.
     *
     * @return string
     */
    public function getCommentselection()
    {

        return $this->commentselection;
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
     * @return Genedat The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = GenedatPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = GenedatPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = GenedatPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [genedatrefno] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setGenedatrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genedatrefno !== $v) {
            $this->genedatrefno = $v;
            $this->modifiedColumns[] = GenedatPeer::GENEDATREFNO;
        }


        return $this;
    } // setGenedatrefno()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = GenedatPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = GenedatPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [trait] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setTrait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trait !== $v) {
            $this->trait = $v;
            $this->modifiedColumns[] = GenedatPeer::TRAIT;
        }


        return $this;
    } // setTrait()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = GenedatPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [meantrait] column.
     *
     * @param  double $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setMeantrait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meantrait !== $v) {
            $this->meantrait = $v;
            $this->modifiedColumns[] = GenedatPeer::MEANTRAIT;
        }


        return $this;
    } // setMeantrait()

    /**
     * Set the value of [unitoftrait] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setUnitoftrait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unitoftrait !== $v) {
            $this->unitoftrait = $v;
            $this->modifiedColumns[] = GenedatPeer::UNITOFTRAIT;
        }


        return $this;
    } // setUnitoftrait()

    /**
     * Set the value of [standarddeviation] column.
     *
     * @param  double $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setStandarddeviation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->standarddeviation !== $v) {
            $this->standarddeviation = $v;
            $this->modifiedColumns[] = GenedatPeer::STANDARDDEVIATION;
        }


        return $this;
    } // setStandarddeviation()

    /**
     * Set the value of [heritability] column.
     *
     * @param  double $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setHeritability($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->heritability !== $v) {
            $this->heritability = $v;
            $this->modifiedColumns[] = GenedatPeer::HERITABILITY;
        }


        return $this;
    } // setHeritability()

    /**
     * Set the value of [standarderror] column.
     *
     * @param  double $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setStandarderror($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->standarderror !== $v) {
            $this->standarderror = $v;
            $this->modifiedColumns[] = GenedatPeer::STANDARDERROR;
        }


        return $this;
    } // setStandarderror()

    /**
     * Set the value of [methodheritab] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setMethodheritab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodheritab !== $v) {
            $this->methodheritab = $v;
            $this->modifiedColumns[] = GenedatPeer::METHODHERITAB;
        }


        return $this;
    } // setMethodheritab()

    /**
     * Set the value of [commentheritab] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setCommentheritab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentheritab !== $v) {
            $this->commentheritab = $v;
            $this->modifiedColumns[] = GenedatPeer::COMMENTHERITAB;
        }


        return $this;
    } // setCommentheritab()

    /**
     * Set the value of [selection] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setSelection($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->selection !== $v) {
            $this->selection = $v;
            $this->modifiedColumns[] = GenedatPeer::SELECTION;
        }


        return $this;
    } // setSelection()

    /**
     * Set the value of [methodselection] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setMethodselection($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->methodselection !== $v) {
            $this->methodselection = $v;
            $this->modifiedColumns[] = GenedatPeer::METHODSELECTION;
        }


        return $this;
    } // setMethodselection()

    /**
     * Set the value of [response] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setResponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->response !== $v) {
            $this->response = $v;
            $this->modifiedColumns[] = GenedatPeer::RESPONSE;
        }


        return $this;
    } // setResponse()

    /**
     * Set the value of [commentselection] column.
     *
     * @param  string $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setCommentselection($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentselection !== $v) {
            $this->commentselection = $v;
            $this->modifiedColumns[] = GenedatPeer::COMMENTSELECTION;
        }


        return $this;
    } // setCommentselection()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = GenedatPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genedat The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = GenedatPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = GenedatPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genedat The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = GenedatPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Genedat The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = GenedatPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genedat The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = GenedatPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Genedat The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = GenedatPeer::TS;
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
            $this->genedatrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->c_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->trait = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->comment = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->meantrait = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->unitoftrait = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->standarddeviation = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->heritability = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->standarderror = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->methodheritab = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->commentheritab = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->selection = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->methodselection = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->response = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->commentselection = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->entered = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->dateentered = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->modified = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->datemodified = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->expert = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->datechecked = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->ts = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 26; // 26 = GenedatPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Genedat object", $e);
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
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GenedatPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GenedatQuery::create()
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
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GenedatPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = GenedatPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GenedatPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GenedatPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(GenedatPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(GenedatPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(GenedatPeer::GENEDATREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`GeneDatRefNo`';
        }
        if ($this->isColumnModified(GenedatPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(GenedatPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(GenedatPeer::TRAIT)) {
            $modifiedColumns[':p' . $index++]  = '`Trait`';
        }
        if ($this->isColumnModified(GenedatPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(GenedatPeer::MEANTRAIT)) {
            $modifiedColumns[':p' . $index++]  = '`MeanTrait`';
        }
        if ($this->isColumnModified(GenedatPeer::UNITOFTRAIT)) {
            $modifiedColumns[':p' . $index++]  = '`UnitofTrait`';
        }
        if ($this->isColumnModified(GenedatPeer::STANDARDDEVIATION)) {
            $modifiedColumns[':p' . $index++]  = '`StandardDeviation`';
        }
        if ($this->isColumnModified(GenedatPeer::HERITABILITY)) {
            $modifiedColumns[':p' . $index++]  = '`Heritability`';
        }
        if ($this->isColumnModified(GenedatPeer::STANDARDERROR)) {
            $modifiedColumns[':p' . $index++]  = '`StandardError`';
        }
        if ($this->isColumnModified(GenedatPeer::METHODHERITAB)) {
            $modifiedColumns[':p' . $index++]  = '`MethodHeritab`';
        }
        if ($this->isColumnModified(GenedatPeer::COMMENTHERITAB)) {
            $modifiedColumns[':p' . $index++]  = '`CommentHeritab`';
        }
        if ($this->isColumnModified(GenedatPeer::SELECTION)) {
            $modifiedColumns[':p' . $index++]  = '`Selection`';
        }
        if ($this->isColumnModified(GenedatPeer::METHODSELECTION)) {
            $modifiedColumns[':p' . $index++]  = '`MethodSelection`';
        }
        if ($this->isColumnModified(GenedatPeer::RESPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`Response`';
        }
        if ($this->isColumnModified(GenedatPeer::COMMENTSELECTION)) {
            $modifiedColumns[':p' . $index++]  = '`CommentSelection`';
        }
        if ($this->isColumnModified(GenedatPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(GenedatPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(GenedatPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(GenedatPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(GenedatPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(GenedatPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(GenedatPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `genedat` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`GeneDatRefNo`':
                        $stmt->bindValue($identifier, $this->genedatrefno, PDO::PARAM_INT);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Trait`':
                        $stmt->bindValue($identifier, $this->trait, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`MeanTrait`':
                        $stmt->bindValue($identifier, $this->meantrait, PDO::PARAM_STR);
                        break;
                    case '`UnitofTrait`':
                        $stmt->bindValue($identifier, $this->unitoftrait, PDO::PARAM_STR);
                        break;
                    case '`StandardDeviation`':
                        $stmt->bindValue($identifier, $this->standarddeviation, PDO::PARAM_STR);
                        break;
                    case '`Heritability`':
                        $stmt->bindValue($identifier, $this->heritability, PDO::PARAM_STR);
                        break;
                    case '`StandardError`':
                        $stmt->bindValue($identifier, $this->standarderror, PDO::PARAM_STR);
                        break;
                    case '`MethodHeritab`':
                        $stmt->bindValue($identifier, $this->methodheritab, PDO::PARAM_STR);
                        break;
                    case '`CommentHeritab`':
                        $stmt->bindValue($identifier, $this->commentheritab, PDO::PARAM_STR);
                        break;
                    case '`Selection`':
                        $stmt->bindValue($identifier, $this->selection, PDO::PARAM_INT);
                        break;
                    case '`MethodSelection`':
                        $stmt->bindValue($identifier, $this->methodselection, PDO::PARAM_STR);
                        break;
                    case '`Response`':
                        $stmt->bindValue($identifier, $this->response, PDO::PARAM_INT);
                        break;
                    case '`CommentSelection`':
                        $stmt->bindValue($identifier, $this->commentselection, PDO::PARAM_STR);
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


            if (($retval = GenedatPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GenedatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGenedatrefno();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getCCode();
                break;
            case 6:
                return $this->getTrait();
                break;
            case 7:
                return $this->getComment();
                break;
            case 8:
                return $this->getMeantrait();
                break;
            case 9:
                return $this->getUnitoftrait();
                break;
            case 10:
                return $this->getStandarddeviation();
                break;
            case 11:
                return $this->getHeritability();
                break;
            case 12:
                return $this->getStandarderror();
                break;
            case 13:
                return $this->getMethodheritab();
                break;
            case 14:
                return $this->getCommentheritab();
                break;
            case 15:
                return $this->getSelection();
                break;
            case 16:
                return $this->getMethodselection();
                break;
            case 17:
                return $this->getResponse();
                break;
            case 18:
                return $this->getCommentselection();
                break;
            case 19:
                return $this->getEntered();
                break;
            case 20:
                return $this->getDateentered();
                break;
            case 21:
                return $this->getModified();
                break;
            case 22:
                return $this->getDatemodified();
                break;
            case 23:
                return $this->getExpert();
                break;
            case 24:
                return $this->getDatechecked();
                break;
            case 25:
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
        if (isset($alreadyDumpedObjects['Genedat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Genedat'][$this->getPrimaryKey()] = true;
        $keys = GenedatPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getGenedatrefno(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getCCode(),
            $keys[6] => $this->getTrait(),
            $keys[7] => $this->getComment(),
            $keys[8] => $this->getMeantrait(),
            $keys[9] => $this->getUnitoftrait(),
            $keys[10] => $this->getStandarddeviation(),
            $keys[11] => $this->getHeritability(),
            $keys[12] => $this->getStandarderror(),
            $keys[13] => $this->getMethodheritab(),
            $keys[14] => $this->getCommentheritab(),
            $keys[15] => $this->getSelection(),
            $keys[16] => $this->getMethodselection(),
            $keys[17] => $this->getResponse(),
            $keys[18] => $this->getCommentselection(),
            $keys[19] => $this->getEntered(),
            $keys[20] => $this->getDateentered(),
            $keys[21] => $this->getModified(),
            $keys[22] => $this->getDatemodified(),
            $keys[23] => $this->getExpert(),
            $keys[24] => $this->getDatechecked(),
            $keys[25] => $this->getTs(),
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
        $pos = GenedatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGenedatrefno($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setCCode($value);
                break;
            case 6:
                $this->setTrait($value);
                break;
            case 7:
                $this->setComment($value);
                break;
            case 8:
                $this->setMeantrait($value);
                break;
            case 9:
                $this->setUnitoftrait($value);
                break;
            case 10:
                $this->setStandarddeviation($value);
                break;
            case 11:
                $this->setHeritability($value);
                break;
            case 12:
                $this->setStandarderror($value);
                break;
            case 13:
                $this->setMethodheritab($value);
                break;
            case 14:
                $this->setCommentheritab($value);
                break;
            case 15:
                $this->setSelection($value);
                break;
            case 16:
                $this->setMethodselection($value);
                break;
            case 17:
                $this->setResponse($value);
                break;
            case 18:
                $this->setCommentselection($value);
                break;
            case 19:
                $this->setEntered($value);
                break;
            case 20:
                $this->setDateentered($value);
                break;
            case 21:
                $this->setModified($value);
                break;
            case 22:
                $this->setDatemodified($value);
                break;
            case 23:
                $this->setExpert($value);
                break;
            case 24:
                $this->setDatechecked($value);
                break;
            case 25:
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
        $keys = GenedatPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGenedatrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTrait($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setComment($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMeantrait($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUnitoftrait($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStandarddeviation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setHeritability($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStandarderror($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMethodheritab($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCommentheritab($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSelection($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMethodselection($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setResponse($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCommentselection($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEntered($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateentered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setModified($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDatemodified($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setExpert($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDatechecked($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTs($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GenedatPeer::DATABASE_NAME);

        if ($this->isColumnModified(GenedatPeer::AUTOCTR)) $criteria->add(GenedatPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(GenedatPeer::STOCKCODE)) $criteria->add(GenedatPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(GenedatPeer::SPECCODE)) $criteria->add(GenedatPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(GenedatPeer::GENEDATREFNO)) $criteria->add(GenedatPeer::GENEDATREFNO, $this->genedatrefno);
        if ($this->isColumnModified(GenedatPeer::LOCALITY)) $criteria->add(GenedatPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(GenedatPeer::C_CODE)) $criteria->add(GenedatPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(GenedatPeer::TRAIT)) $criteria->add(GenedatPeer::TRAIT, $this->trait);
        if ($this->isColumnModified(GenedatPeer::COMMENT)) $criteria->add(GenedatPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(GenedatPeer::MEANTRAIT)) $criteria->add(GenedatPeer::MEANTRAIT, $this->meantrait);
        if ($this->isColumnModified(GenedatPeer::UNITOFTRAIT)) $criteria->add(GenedatPeer::UNITOFTRAIT, $this->unitoftrait);
        if ($this->isColumnModified(GenedatPeer::STANDARDDEVIATION)) $criteria->add(GenedatPeer::STANDARDDEVIATION, $this->standarddeviation);
        if ($this->isColumnModified(GenedatPeer::HERITABILITY)) $criteria->add(GenedatPeer::HERITABILITY, $this->heritability);
        if ($this->isColumnModified(GenedatPeer::STANDARDERROR)) $criteria->add(GenedatPeer::STANDARDERROR, $this->standarderror);
        if ($this->isColumnModified(GenedatPeer::METHODHERITAB)) $criteria->add(GenedatPeer::METHODHERITAB, $this->methodheritab);
        if ($this->isColumnModified(GenedatPeer::COMMENTHERITAB)) $criteria->add(GenedatPeer::COMMENTHERITAB, $this->commentheritab);
        if ($this->isColumnModified(GenedatPeer::SELECTION)) $criteria->add(GenedatPeer::SELECTION, $this->selection);
        if ($this->isColumnModified(GenedatPeer::METHODSELECTION)) $criteria->add(GenedatPeer::METHODSELECTION, $this->methodselection);
        if ($this->isColumnModified(GenedatPeer::RESPONSE)) $criteria->add(GenedatPeer::RESPONSE, $this->response);
        if ($this->isColumnModified(GenedatPeer::COMMENTSELECTION)) $criteria->add(GenedatPeer::COMMENTSELECTION, $this->commentselection);
        if ($this->isColumnModified(GenedatPeer::ENTERED)) $criteria->add(GenedatPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(GenedatPeer::DATEENTERED)) $criteria->add(GenedatPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(GenedatPeer::MODIFIED)) $criteria->add(GenedatPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(GenedatPeer::DATEMODIFIED)) $criteria->add(GenedatPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(GenedatPeer::EXPERT)) $criteria->add(GenedatPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(GenedatPeer::DATECHECKED)) $criteria->add(GenedatPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(GenedatPeer::TS)) $criteria->add(GenedatPeer::TS, $this->ts);

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
        $criteria = new Criteria(GenedatPeer::DATABASE_NAME);
        $criteria->add(GenedatPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Genedat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setGenedatrefno($this->getGenedatrefno());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setTrait($this->getTrait());
        $copyObj->setComment($this->getComment());
        $copyObj->setMeantrait($this->getMeantrait());
        $copyObj->setUnitoftrait($this->getUnitoftrait());
        $copyObj->setStandarddeviation($this->getStandarddeviation());
        $copyObj->setHeritability($this->getHeritability());
        $copyObj->setStandarderror($this->getStandarderror());
        $copyObj->setMethodheritab($this->getMethodheritab());
        $copyObj->setCommentheritab($this->getCommentheritab());
        $copyObj->setSelection($this->getSelection());
        $copyObj->setMethodselection($this->getMethodselection());
        $copyObj->setResponse($this->getResponse());
        $copyObj->setCommentselection($this->getCommentselection());
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
     * @return Genedat Clone of current object.
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
     * @return GenedatPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GenedatPeer();
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
        $this->genedatrefno = null;
        $this->locality = null;
        $this->c_code = null;
        $this->trait = null;
        $this->comment = null;
        $this->meantrait = null;
        $this->unitoftrait = null;
        $this->standarddeviation = null;
        $this->heritability = null;
        $this->standarderror = null;
        $this->methodheritab = null;
        $this->commentheritab = null;
        $this->selection = null;
        $this->methodselection = null;
        $this->response = null;
        $this->commentselection = null;
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
        return (string) $this->exportTo(GenedatPeer::DEFAULT_STRING_FORMAT);
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
