<?php


/**
 * Base class that represents a row from the 'morphmettlratios' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphmettlratios extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MorphmettlratiosPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MorphmettlratiosPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the picname field.
     * @var        string
     */
    protected $picname;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the family field.
     * @var        string
     */
    protected $family;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the classnum field.
     * @var        int
     */
    protected $classnum;

    /**
     * The value for the class field.
     * @var        string
     */
    protected $class;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the perc field.
     * @var        double
     */
    protected $perc;

    /**
     * The value for the maxlengthtl field.
     * @var        double
     */
    protected $maxlengthtl;

    /**
     * The value for the sltl field.
     * @var        double
     */
    protected $sltl;

    /**
     * The value for the sltl_lower field.
     * @var        double
     */
    protected $sltl_lower;

    /**
     * The value for the sltl_upper field.
     * @var        double
     */
    protected $sltl_upper;

    /**
     * The value for the fltl field.
     * @var        double
     */
    protected $fltl;

    /**
     * The value for the fltl_lower field.
     * @var        double
     */
    protected $fltl_lower;

    /**
     * The value for the fltl_upper field.
     * @var        double
     */
    protected $fltl_upper;

    /**
     * The value for the hltl field.
     * @var        double
     */
    protected $hltl;

    /**
     * The value for the hltl_lower field.
     * @var        double
     */
    protected $hltl_lower;

    /**
     * The value for the hltl_upper field.
     * @var        double
     */
    protected $hltl_upper;

    /**
     * The value for the paltl field.
     * @var        double
     */
    protected $paltl;

    /**
     * The value for the paltl_lower field.
     * @var        double
     */
    protected $paltl_lower;

    /**
     * The value for the paltl_upper field.
     * @var        double
     */
    protected $paltl_upper;

    /**
     * The value for the pdltl field.
     * @var        double
     */
    protected $pdltl;

    /**
     * The value for the pdltl_lower field.
     * @var        double
     */
    protected $pdltl_lower;

    /**
     * The value for the pdltl_upper field.
     * @var        double
     */
    protected $pdltl_upper;

    /**
     * The value for the ppltl field.
     * @var        double
     */
    protected $ppltl;

    /**
     * The value for the ppltl_lower field.
     * @var        double
     */
    protected $ppltl_lower;

    /**
     * The value for the ppltl_upper field.
     * @var        double
     */
    protected $ppltl_upper;

    /**
     * The value for the ppeltl field.
     * @var        double
     */
    protected $ppeltl;

    /**
     * The value for the ppeltl_lower field.
     * @var        double
     */
    protected $ppeltl_lower;

    /**
     * The value for the ppeltl_upper field.
     * @var        double
     */
    protected $ppeltl_upper;

    /**
     * The value for the edtl field.
     * @var        double
     */
    protected $edtl;

    /**
     * The value for the edtl_lower field.
     * @var        double
     */
    protected $edtl_lower;

    /**
     * The value for the edtl_upper field.
     * @var        double
     */
    protected $edtl_upper;

    /**
     * The value for the poltl field.
     * @var        double
     */
    protected $poltl;

    /**
     * The value for the poltl_lower field.
     * @var        double
     */
    protected $poltl_lower;

    /**
     * The value for the poltl_upper field.
     * @var        double
     */
    protected $poltl_upper;

    /**
     * The value for the bdtl field.
     * @var        double
     */
    protected $bdtl;

    /**
     * The value for the bdtl_lower field.
     * @var        double
     */
    protected $bdtl_lower;

    /**
     * The value for the bdtl_upper field.
     * @var        double
     */
    protected $bdtl_upper;

    /**
     * The value for the chtl field.
     * @var        double
     */
    protected $chtl;

    /**
     * The value for the chtl_lower field.
     * @var        double
     */
    protected $chtl_lower;

    /**
     * The value for the chtl_upper field.
     * @var        double
     */
    protected $chtl_upper;

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
     * Get the [picname] column value.
     *
     * @return string
     */
    public function getPicname()
    {

        return $this->picname;
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
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
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
     * Get the [commonname] column value.
     *
     * @return string
     */
    public function getCommonname()
    {

        return $this->commonname;
    }

    /**
     * Get the [classnum] column value.
     *
     * @return int
     */
    public function getClassnum()
    {

        return $this->classnum;
    }

    /**
     * Get the [class] column value.
     *
     * @return string
     */
    public function getClass()
    {

        return $this->class;
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
     * Get the [perc] column value.
     *
     * @return double
     */
    public function getPerc()
    {

        return $this->perc;
    }

    /**
     * Get the [maxlengthtl] column value.
     *
     * @return double
     */
    public function getMaxlengthtl()
    {

        return $this->maxlengthtl;
    }

    /**
     * Get the [sltl] column value.
     *
     * @return double
     */
    public function getSltl()
    {

        return $this->sltl;
    }

    /**
     * Get the [sltl_lower] column value.
     *
     * @return double
     */
    public function getSltlLower()
    {

        return $this->sltl_lower;
    }

    /**
     * Get the [sltl_upper] column value.
     *
     * @return double
     */
    public function getSltlUpper()
    {

        return $this->sltl_upper;
    }

    /**
     * Get the [fltl] column value.
     *
     * @return double
     */
    public function getFltl()
    {

        return $this->fltl;
    }

    /**
     * Get the [fltl_lower] column value.
     *
     * @return double
     */
    public function getFltlLower()
    {

        return $this->fltl_lower;
    }

    /**
     * Get the [fltl_upper] column value.
     *
     * @return double
     */
    public function getFltlUpper()
    {

        return $this->fltl_upper;
    }

    /**
     * Get the [hltl] column value.
     *
     * @return double
     */
    public function getHltl()
    {

        return $this->hltl;
    }

    /**
     * Get the [hltl_lower] column value.
     *
     * @return double
     */
    public function getHltlLower()
    {

        return $this->hltl_lower;
    }

    /**
     * Get the [hltl_upper] column value.
     *
     * @return double
     */
    public function getHltlUpper()
    {

        return $this->hltl_upper;
    }

    /**
     * Get the [paltl] column value.
     *
     * @return double
     */
    public function getPaltl()
    {

        return $this->paltl;
    }

    /**
     * Get the [paltl_lower] column value.
     *
     * @return double
     */
    public function getPaltlLower()
    {

        return $this->paltl_lower;
    }

    /**
     * Get the [paltl_upper] column value.
     *
     * @return double
     */
    public function getPaltlUpper()
    {

        return $this->paltl_upper;
    }

    /**
     * Get the [pdltl] column value.
     *
     * @return double
     */
    public function getPdltl()
    {

        return $this->pdltl;
    }

    /**
     * Get the [pdltl_lower] column value.
     *
     * @return double
     */
    public function getPdltlLower()
    {

        return $this->pdltl_lower;
    }

    /**
     * Get the [pdltl_upper] column value.
     *
     * @return double
     */
    public function getPdltlUpper()
    {

        return $this->pdltl_upper;
    }

    /**
     * Get the [ppltl] column value.
     *
     * @return double
     */
    public function getPpltl()
    {

        return $this->ppltl;
    }

    /**
     * Get the [ppltl_lower] column value.
     *
     * @return double
     */
    public function getPpltlLower()
    {

        return $this->ppltl_lower;
    }

    /**
     * Get the [ppltl_upper] column value.
     *
     * @return double
     */
    public function getPpltlUpper()
    {

        return $this->ppltl_upper;
    }

    /**
     * Get the [ppeltl] column value.
     *
     * @return double
     */
    public function getPpeltl()
    {

        return $this->ppeltl;
    }

    /**
     * Get the [ppeltl_lower] column value.
     *
     * @return double
     */
    public function getPpeltlLower()
    {

        return $this->ppeltl_lower;
    }

    /**
     * Get the [ppeltl_upper] column value.
     *
     * @return double
     */
    public function getPpeltlUpper()
    {

        return $this->ppeltl_upper;
    }

    /**
     * Get the [edtl] column value.
     *
     * @return double
     */
    public function getEdtl()
    {

        return $this->edtl;
    }

    /**
     * Get the [edtl_lower] column value.
     *
     * @return double
     */
    public function getEdtlLower()
    {

        return $this->edtl_lower;
    }

    /**
     * Get the [edtl_upper] column value.
     *
     * @return double
     */
    public function getEdtlUpper()
    {

        return $this->edtl_upper;
    }

    /**
     * Get the [poltl] column value.
     *
     * @return double
     */
    public function getPoltl()
    {

        return $this->poltl;
    }

    /**
     * Get the [poltl_lower] column value.
     *
     * @return double
     */
    public function getPoltlLower()
    {

        return $this->poltl_lower;
    }

    /**
     * Get the [poltl_upper] column value.
     *
     * @return double
     */
    public function getPoltlUpper()
    {

        return $this->poltl_upper;
    }

    /**
     * Get the [bdtl] column value.
     *
     * @return double
     */
    public function getBdtl()
    {

        return $this->bdtl;
    }

    /**
     * Get the [bdtl_lower] column value.
     *
     * @return double
     */
    public function getBdtlLower()
    {

        return $this->bdtl_lower;
    }

    /**
     * Get the [bdtl_upper] column value.
     *
     * @return double
     */
    public function getBdtlUpper()
    {

        return $this->bdtl_upper;
    }

    /**
     * Get the [chtl] column value.
     *
     * @return double
     */
    public function getChtl()
    {

        return $this->chtl;
    }

    /**
     * Get the [chtl_lower] column value.
     *
     * @return double
     */
    public function getChtlLower()
    {

        return $this->chtl_lower;
    }

    /**
     * Get the [chtl_upper] column value.
     *
     * @return double
     */
    public function getChtlUpper()
    {

        return $this->chtl_upper;
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
     * Set the value of [picname] column.
     *
     * @param  string $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPicname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picname !== $v) {
            $this->picname = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PICNAME;
        }


        return $this;
    } // setPicname()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [family] column.
     *
     * @param  string $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setFamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->family !== $v) {
            $this->family = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::FAMILY;
        }


        return $this;
    } // setFamily()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [classnum] column.
     *
     * @param  int $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setClassnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->classnum !== $v) {
            $this->classnum = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::CLASSNUM;
        }


        return $this;
    } // setClassnum()

    /**
     * Set the value of [class] column.
     *
     * @param  string $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setClass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->class !== $v) {
            $this->class = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::CLAZZ;
        }


        return $this;
    } // setClass()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [perc] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPerc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->perc !== $v) {
            $this->perc = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PERC;
        }


        return $this;
    } // setPerc()

    /**
     * Set the value of [maxlengthtl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setMaxlengthtl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maxlengthtl !== $v) {
            $this->maxlengthtl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::MAXLENGTHTL;
        }


        return $this;
    } // setMaxlengthtl()

    /**
     * Set the value of [sltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setSltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sltl !== $v) {
            $this->sltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::SLTL;
        }


        return $this;
    } // setSltl()

    /**
     * Set the value of [sltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setSltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sltl_lower !== $v) {
            $this->sltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::SLTL_LOWER;
        }


        return $this;
    } // setSltlLower()

    /**
     * Set the value of [sltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setSltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sltl_upper !== $v) {
            $this->sltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::SLTL_UPPER;
        }


        return $this;
    } // setSltlUpper()

    /**
     * Set the value of [fltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setFltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fltl !== $v) {
            $this->fltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::FLTL;
        }


        return $this;
    } // setFltl()

    /**
     * Set the value of [fltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setFltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fltl_lower !== $v) {
            $this->fltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::FLTL_LOWER;
        }


        return $this;
    } // setFltlLower()

    /**
     * Set the value of [fltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setFltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->fltl_upper !== $v) {
            $this->fltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::FLTL_UPPER;
        }


        return $this;
    } // setFltlUpper()

    /**
     * Set the value of [hltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setHltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hltl !== $v) {
            $this->hltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::HLTL;
        }


        return $this;
    } // setHltl()

    /**
     * Set the value of [hltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setHltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hltl_lower !== $v) {
            $this->hltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::HLTL_LOWER;
        }


        return $this;
    } // setHltlLower()

    /**
     * Set the value of [hltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setHltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->hltl_upper !== $v) {
            $this->hltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::HLTL_UPPER;
        }


        return $this;
    } // setHltlUpper()

    /**
     * Set the value of [paltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPaltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->paltl !== $v) {
            $this->paltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PALTL;
        }


        return $this;
    } // setPaltl()

    /**
     * Set the value of [paltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPaltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->paltl_lower !== $v) {
            $this->paltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PALTL_LOWER;
        }


        return $this;
    } // setPaltlLower()

    /**
     * Set the value of [paltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPaltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->paltl_upper !== $v) {
            $this->paltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PALTL_UPPER;
        }


        return $this;
    } // setPaltlUpper()

    /**
     * Set the value of [pdltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPdltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pdltl !== $v) {
            $this->pdltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PDLTL;
        }


        return $this;
    } // setPdltl()

    /**
     * Set the value of [pdltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPdltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pdltl_lower !== $v) {
            $this->pdltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PDLTL_LOWER;
        }


        return $this;
    } // setPdltlLower()

    /**
     * Set the value of [pdltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPdltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pdltl_upper !== $v) {
            $this->pdltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PDLTL_UPPER;
        }


        return $this;
    } // setPdltlUpper()

    /**
     * Set the value of [ppltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPpltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ppltl !== $v) {
            $this->ppltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PPLTL;
        }


        return $this;
    } // setPpltl()

    /**
     * Set the value of [ppltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPpltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ppltl_lower !== $v) {
            $this->ppltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PPLTL_LOWER;
        }


        return $this;
    } // setPpltlLower()

    /**
     * Set the value of [ppltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPpltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ppltl_upper !== $v) {
            $this->ppltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PPLTL_UPPER;
        }


        return $this;
    } // setPpltlUpper()

    /**
     * Set the value of [ppeltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPpeltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ppeltl !== $v) {
            $this->ppeltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PPELTL;
        }


        return $this;
    } // setPpeltl()

    /**
     * Set the value of [ppeltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPpeltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ppeltl_lower !== $v) {
            $this->ppeltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PPELTL_LOWER;
        }


        return $this;
    } // setPpeltlLower()

    /**
     * Set the value of [ppeltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPpeltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ppeltl_upper !== $v) {
            $this->ppeltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PPELTL_UPPER;
        }


        return $this;
    } // setPpeltlUpper()

    /**
     * Set the value of [edtl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setEdtl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->edtl !== $v) {
            $this->edtl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::EDTL;
        }


        return $this;
    } // setEdtl()

    /**
     * Set the value of [edtl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setEdtlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->edtl_lower !== $v) {
            $this->edtl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::EDTL_LOWER;
        }


        return $this;
    } // setEdtlLower()

    /**
     * Set the value of [edtl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setEdtlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->edtl_upper !== $v) {
            $this->edtl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::EDTL_UPPER;
        }


        return $this;
    } // setEdtlUpper()

    /**
     * Set the value of [poltl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPoltl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->poltl !== $v) {
            $this->poltl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::POLTL;
        }


        return $this;
    } // setPoltl()

    /**
     * Set the value of [poltl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPoltlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->poltl_lower !== $v) {
            $this->poltl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::POLTL_LOWER;
        }


        return $this;
    } // setPoltlLower()

    /**
     * Set the value of [poltl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPoltlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->poltl_upper !== $v) {
            $this->poltl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::POLTL_UPPER;
        }


        return $this;
    } // setPoltlUpper()

    /**
     * Set the value of [bdtl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setBdtl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bdtl !== $v) {
            $this->bdtl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::BDTL;
        }


        return $this;
    } // setBdtl()

    /**
     * Set the value of [bdtl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setBdtlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bdtl_lower !== $v) {
            $this->bdtl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::BDTL_LOWER;
        }


        return $this;
    } // setBdtlLower()

    /**
     * Set the value of [bdtl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setBdtlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bdtl_upper !== $v) {
            $this->bdtl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::BDTL_UPPER;
        }


        return $this;
    } // setBdtlUpper()

    /**
     * Set the value of [chtl] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setChtl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chtl !== $v) {
            $this->chtl = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::CHTL;
        }


        return $this;
    } // setChtl()

    /**
     * Set the value of [chtl_lower] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setChtlLower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chtl_lower !== $v) {
            $this->chtl_lower = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::CHTL_LOWER;
        }


        return $this;
    } // setChtlLower()

    /**
     * Set the value of [chtl_upper] column.
     *
     * @param  double $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setChtlUpper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->chtl_upper !== $v) {
            $this->chtl_upper = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::CHTL_UPPER;
        }


        return $this;
    } // setChtlUpper()

    /**
     * Set the value of [pkid] column.
     *
     * @param  string $v new value
     * @return Morphmettlratios The current object (for fluent API support)
     */
    public function setPkid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pkid !== $v) {
            $this->pkid = $v;
            $this->modifiedColumns[] = MorphmettlratiosPeer::PKID;
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

            $this->picname = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->famcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->family = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->commonname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->classnum = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->class = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->remarks = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->perc = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->maxlengthtl = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->sltl = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->sltl_lower = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->sltl_upper = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->fltl = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->fltl_lower = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->fltl_upper = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->hltl = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->hltl_lower = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->hltl_upper = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->paltl = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->paltl_lower = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->paltl_upper = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->pdltl = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->pdltl_lower = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->pdltl_upper = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->ppltl = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->ppltl_lower = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->ppltl_upper = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->ppeltl = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->ppeltl_lower = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->ppeltl_upper = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->edtl = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->edtl_lower = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->edtl_upper = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->poltl = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->poltl_lower = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->poltl_upper = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->bdtl = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->bdtl_lower = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->bdtl_upper = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->chtl = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->chtl_lower = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->chtl_upper = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->pkid = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 44; // 44 = MorphmettlratiosPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Morphmettlratios object", $e);
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
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MorphmettlratiosPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MorphmettlratiosQuery::create()
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
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MorphmettlratiosPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = MorphmettlratiosPeer::PKID;
        if (null !== $this->pkid) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MorphmettlratiosPeer::PKID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MorphmettlratiosPeer::PICNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PicName`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::FAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Family`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::CLASSNUM)) {
            $modifiedColumns[':p' . $index++]  = '`ClassNum`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::CLAZZ)) {
            $modifiedColumns[':p' . $index++]  = '`Class`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PERC)) {
            $modifiedColumns[':p' . $index++]  = '`Perc`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::MAXLENGTHTL)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLengthTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::SLTL)) {
            $modifiedColumns[':p' . $index++]  = '`SLTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::SLTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`SLTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::SLTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`SLTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::FLTL)) {
            $modifiedColumns[':p' . $index++]  = '`FLTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::FLTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`FLTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::FLTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`FLTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::HLTL)) {
            $modifiedColumns[':p' . $index++]  = '`HLTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::HLTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`HLTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::HLTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`HLTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PALTL)) {
            $modifiedColumns[':p' . $index++]  = '`PALTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PALTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`PALTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PALTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`PALTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PDLTL)) {
            $modifiedColumns[':p' . $index++]  = '`PDLTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PDLTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`PDLTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PDLTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`PDLTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PPLTL)) {
            $modifiedColumns[':p' . $index++]  = '`PPLTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PPLTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`PPLTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PPLTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`PPLTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PPELTL)) {
            $modifiedColumns[':p' . $index++]  = '`PPELTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PPELTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`PPELTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PPELTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`PPELTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::EDTL)) {
            $modifiedColumns[':p' . $index++]  = '`EDTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::EDTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`EDTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::EDTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`EDTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::POLTL)) {
            $modifiedColumns[':p' . $index++]  = '`POLTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::POLTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`POLTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::POLTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`POLTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::BDTL)) {
            $modifiedColumns[':p' . $index++]  = '`BDTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::BDTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`BDTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::BDTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`BDTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::CHTL)) {
            $modifiedColumns[':p' . $index++]  = '`CHTL`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::CHTL_LOWER)) {
            $modifiedColumns[':p' . $index++]  = '`CHTL_LOWER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::CHTL_UPPER)) {
            $modifiedColumns[':p' . $index++]  = '`CHTL_UPPER`';
        }
        if ($this->isColumnModified(MorphmettlratiosPeer::PKID)) {
            $modifiedColumns[':p' . $index++]  = '`PKID`';
        }

        $sql = sprintf(
            'INSERT INTO `morphmettlratios` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`PicName`':
                        $stmt->bindValue($identifier, $this->picname, PDO::PARAM_STR);
                        break;
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Family`':
                        $stmt->bindValue($identifier, $this->family, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`ClassNum`':
                        $stmt->bindValue($identifier, $this->classnum, PDO::PARAM_INT);
                        break;
                    case '`Class`':
                        $stmt->bindValue($identifier, $this->class, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`Perc`':
                        $stmt->bindValue($identifier, $this->perc, PDO::PARAM_STR);
                        break;
                    case '`MaxLengthTL`':
                        $stmt->bindValue($identifier, $this->maxlengthtl, PDO::PARAM_STR);
                        break;
                    case '`SLTL`':
                        $stmt->bindValue($identifier, $this->sltl, PDO::PARAM_STR);
                        break;
                    case '`SLTL_LOWER`':
                        $stmt->bindValue($identifier, $this->sltl_lower, PDO::PARAM_STR);
                        break;
                    case '`SLTL_UPPER`':
                        $stmt->bindValue($identifier, $this->sltl_upper, PDO::PARAM_STR);
                        break;
                    case '`FLTL`':
                        $stmt->bindValue($identifier, $this->fltl, PDO::PARAM_STR);
                        break;
                    case '`FLTL_LOWER`':
                        $stmt->bindValue($identifier, $this->fltl_lower, PDO::PARAM_STR);
                        break;
                    case '`FLTL_UPPER`':
                        $stmt->bindValue($identifier, $this->fltl_upper, PDO::PARAM_STR);
                        break;
                    case '`HLTL`':
                        $stmt->bindValue($identifier, $this->hltl, PDO::PARAM_STR);
                        break;
                    case '`HLTL_LOWER`':
                        $stmt->bindValue($identifier, $this->hltl_lower, PDO::PARAM_STR);
                        break;
                    case '`HLTL_UPPER`':
                        $stmt->bindValue($identifier, $this->hltl_upper, PDO::PARAM_STR);
                        break;
                    case '`PALTL`':
                        $stmt->bindValue($identifier, $this->paltl, PDO::PARAM_STR);
                        break;
                    case '`PALTL_LOWER`':
                        $stmt->bindValue($identifier, $this->paltl_lower, PDO::PARAM_STR);
                        break;
                    case '`PALTL_UPPER`':
                        $stmt->bindValue($identifier, $this->paltl_upper, PDO::PARAM_STR);
                        break;
                    case '`PDLTL`':
                        $stmt->bindValue($identifier, $this->pdltl, PDO::PARAM_STR);
                        break;
                    case '`PDLTL_LOWER`':
                        $stmt->bindValue($identifier, $this->pdltl_lower, PDO::PARAM_STR);
                        break;
                    case '`PDLTL_UPPER`':
                        $stmt->bindValue($identifier, $this->pdltl_upper, PDO::PARAM_STR);
                        break;
                    case '`PPLTL`':
                        $stmt->bindValue($identifier, $this->ppltl, PDO::PARAM_STR);
                        break;
                    case '`PPLTL_LOWER`':
                        $stmt->bindValue($identifier, $this->ppltl_lower, PDO::PARAM_STR);
                        break;
                    case '`PPLTL_UPPER`':
                        $stmt->bindValue($identifier, $this->ppltl_upper, PDO::PARAM_STR);
                        break;
                    case '`PPELTL`':
                        $stmt->bindValue($identifier, $this->ppeltl, PDO::PARAM_STR);
                        break;
                    case '`PPELTL_LOWER`':
                        $stmt->bindValue($identifier, $this->ppeltl_lower, PDO::PARAM_STR);
                        break;
                    case '`PPELTL_UPPER`':
                        $stmt->bindValue($identifier, $this->ppeltl_upper, PDO::PARAM_STR);
                        break;
                    case '`EDTL`':
                        $stmt->bindValue($identifier, $this->edtl, PDO::PARAM_STR);
                        break;
                    case '`EDTL_LOWER`':
                        $stmt->bindValue($identifier, $this->edtl_lower, PDO::PARAM_STR);
                        break;
                    case '`EDTL_UPPER`':
                        $stmt->bindValue($identifier, $this->edtl_upper, PDO::PARAM_STR);
                        break;
                    case '`POLTL`':
                        $stmt->bindValue($identifier, $this->poltl, PDO::PARAM_STR);
                        break;
                    case '`POLTL_LOWER`':
                        $stmt->bindValue($identifier, $this->poltl_lower, PDO::PARAM_STR);
                        break;
                    case '`POLTL_UPPER`':
                        $stmt->bindValue($identifier, $this->poltl_upper, PDO::PARAM_STR);
                        break;
                    case '`BDTL`':
                        $stmt->bindValue($identifier, $this->bdtl, PDO::PARAM_STR);
                        break;
                    case '`BDTL_LOWER`':
                        $stmt->bindValue($identifier, $this->bdtl_lower, PDO::PARAM_STR);
                        break;
                    case '`BDTL_UPPER`':
                        $stmt->bindValue($identifier, $this->bdtl_upper, PDO::PARAM_STR);
                        break;
                    case '`CHTL`':
                        $stmt->bindValue($identifier, $this->chtl, PDO::PARAM_STR);
                        break;
                    case '`CHTL_LOWER`':
                        $stmt->bindValue($identifier, $this->chtl_lower, PDO::PARAM_STR);
                        break;
                    case '`CHTL_UPPER`':
                        $stmt->bindValue($identifier, $this->chtl_upper, PDO::PARAM_STR);
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


            if (($retval = MorphmettlratiosPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MorphmettlratiosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPicname();
                break;
            case 1:
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getFamcode();
                break;
            case 3:
                return $this->getFamily();
                break;
            case 4:
                return $this->getCommonname();
                break;
            case 5:
                return $this->getClassnum();
                break;
            case 6:
                return $this->getClass();
                break;
            case 7:
                return $this->getRemarks();
                break;
            case 8:
                return $this->getPerc();
                break;
            case 9:
                return $this->getMaxlengthtl();
                break;
            case 10:
                return $this->getSltl();
                break;
            case 11:
                return $this->getSltlLower();
                break;
            case 12:
                return $this->getSltlUpper();
                break;
            case 13:
                return $this->getFltl();
                break;
            case 14:
                return $this->getFltlLower();
                break;
            case 15:
                return $this->getFltlUpper();
                break;
            case 16:
                return $this->getHltl();
                break;
            case 17:
                return $this->getHltlLower();
                break;
            case 18:
                return $this->getHltlUpper();
                break;
            case 19:
                return $this->getPaltl();
                break;
            case 20:
                return $this->getPaltlLower();
                break;
            case 21:
                return $this->getPaltlUpper();
                break;
            case 22:
                return $this->getPdltl();
                break;
            case 23:
                return $this->getPdltlLower();
                break;
            case 24:
                return $this->getPdltlUpper();
                break;
            case 25:
                return $this->getPpltl();
                break;
            case 26:
                return $this->getPpltlLower();
                break;
            case 27:
                return $this->getPpltlUpper();
                break;
            case 28:
                return $this->getPpeltl();
                break;
            case 29:
                return $this->getPpeltlLower();
                break;
            case 30:
                return $this->getPpeltlUpper();
                break;
            case 31:
                return $this->getEdtl();
                break;
            case 32:
                return $this->getEdtlLower();
                break;
            case 33:
                return $this->getEdtlUpper();
                break;
            case 34:
                return $this->getPoltl();
                break;
            case 35:
                return $this->getPoltlLower();
                break;
            case 36:
                return $this->getPoltlUpper();
                break;
            case 37:
                return $this->getBdtl();
                break;
            case 38:
                return $this->getBdtlLower();
                break;
            case 39:
                return $this->getBdtlUpper();
                break;
            case 40:
                return $this->getChtl();
                break;
            case 41:
                return $this->getChtlLower();
                break;
            case 42:
                return $this->getChtlUpper();
                break;
            case 43:
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
        if (isset($alreadyDumpedObjects['Morphmettlratios'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Morphmettlratios'][$this->getPrimaryKey()] = true;
        $keys = MorphmettlratiosPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPicname(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getFamcode(),
            $keys[3] => $this->getFamily(),
            $keys[4] => $this->getCommonname(),
            $keys[5] => $this->getClassnum(),
            $keys[6] => $this->getClass(),
            $keys[7] => $this->getRemarks(),
            $keys[8] => $this->getPerc(),
            $keys[9] => $this->getMaxlengthtl(),
            $keys[10] => $this->getSltl(),
            $keys[11] => $this->getSltlLower(),
            $keys[12] => $this->getSltlUpper(),
            $keys[13] => $this->getFltl(),
            $keys[14] => $this->getFltlLower(),
            $keys[15] => $this->getFltlUpper(),
            $keys[16] => $this->getHltl(),
            $keys[17] => $this->getHltlLower(),
            $keys[18] => $this->getHltlUpper(),
            $keys[19] => $this->getPaltl(),
            $keys[20] => $this->getPaltlLower(),
            $keys[21] => $this->getPaltlUpper(),
            $keys[22] => $this->getPdltl(),
            $keys[23] => $this->getPdltlLower(),
            $keys[24] => $this->getPdltlUpper(),
            $keys[25] => $this->getPpltl(),
            $keys[26] => $this->getPpltlLower(),
            $keys[27] => $this->getPpltlUpper(),
            $keys[28] => $this->getPpeltl(),
            $keys[29] => $this->getPpeltlLower(),
            $keys[30] => $this->getPpeltlUpper(),
            $keys[31] => $this->getEdtl(),
            $keys[32] => $this->getEdtlLower(),
            $keys[33] => $this->getEdtlUpper(),
            $keys[34] => $this->getPoltl(),
            $keys[35] => $this->getPoltlLower(),
            $keys[36] => $this->getPoltlUpper(),
            $keys[37] => $this->getBdtl(),
            $keys[38] => $this->getBdtlLower(),
            $keys[39] => $this->getBdtlUpper(),
            $keys[40] => $this->getChtl(),
            $keys[41] => $this->getChtlLower(),
            $keys[42] => $this->getChtlUpper(),
            $keys[43] => $this->getPkid(),
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
        $pos = MorphmettlratiosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPicname($value);
                break;
            case 1:
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setFamcode($value);
                break;
            case 3:
                $this->setFamily($value);
                break;
            case 4:
                $this->setCommonname($value);
                break;
            case 5:
                $this->setClassnum($value);
                break;
            case 6:
                $this->setClass($value);
                break;
            case 7:
                $this->setRemarks($value);
                break;
            case 8:
                $this->setPerc($value);
                break;
            case 9:
                $this->setMaxlengthtl($value);
                break;
            case 10:
                $this->setSltl($value);
                break;
            case 11:
                $this->setSltlLower($value);
                break;
            case 12:
                $this->setSltlUpper($value);
                break;
            case 13:
                $this->setFltl($value);
                break;
            case 14:
                $this->setFltlLower($value);
                break;
            case 15:
                $this->setFltlUpper($value);
                break;
            case 16:
                $this->setHltl($value);
                break;
            case 17:
                $this->setHltlLower($value);
                break;
            case 18:
                $this->setHltlUpper($value);
                break;
            case 19:
                $this->setPaltl($value);
                break;
            case 20:
                $this->setPaltlLower($value);
                break;
            case 21:
                $this->setPaltlUpper($value);
                break;
            case 22:
                $this->setPdltl($value);
                break;
            case 23:
                $this->setPdltlLower($value);
                break;
            case 24:
                $this->setPdltlUpper($value);
                break;
            case 25:
                $this->setPpltl($value);
                break;
            case 26:
                $this->setPpltlLower($value);
                break;
            case 27:
                $this->setPpltlUpper($value);
                break;
            case 28:
                $this->setPpeltl($value);
                break;
            case 29:
                $this->setPpeltlLower($value);
                break;
            case 30:
                $this->setPpeltlUpper($value);
                break;
            case 31:
                $this->setEdtl($value);
                break;
            case 32:
                $this->setEdtlLower($value);
                break;
            case 33:
                $this->setEdtlUpper($value);
                break;
            case 34:
                $this->setPoltl($value);
                break;
            case 35:
                $this->setPoltlLower($value);
                break;
            case 36:
                $this->setPoltlUpper($value);
                break;
            case 37:
                $this->setBdtl($value);
                break;
            case 38:
                $this->setBdtlLower($value);
                break;
            case 39:
                $this->setBdtlUpper($value);
                break;
            case 40:
                $this->setChtl($value);
                break;
            case 41:
                $this->setChtlLower($value);
                break;
            case 42:
                $this->setChtlUpper($value);
                break;
            case 43:
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
        $keys = MorphmettlratiosPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPicname($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFamcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFamily($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCommonname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setClassnum($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClass($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRemarks($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPerc($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMaxlengthtl($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSltl($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSltlLower($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSltlUpper($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFltl($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFltlLower($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFltlUpper($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setHltl($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setHltlLower($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setHltlUpper($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPaltl($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPaltlLower($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPaltlUpper($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPdltl($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPdltlLower($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPdltlUpper($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPpltl($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPpltlLower($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPpltlUpper($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setPpeltl($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setPpeltlLower($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setPpeltlUpper($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setEdtl($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEdtlLower($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEdtlUpper($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setPoltl($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPoltlLower($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPoltlUpper($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setBdtl($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setBdtlLower($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setBdtlUpper($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setChtl($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setChtlLower($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setChtlUpper($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setPkid($arr[$keys[43]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MorphmettlratiosPeer::DATABASE_NAME);

        if ($this->isColumnModified(MorphmettlratiosPeer::PICNAME)) $criteria->add(MorphmettlratiosPeer::PICNAME, $this->picname);
        if ($this->isColumnModified(MorphmettlratiosPeer::SPECCODE)) $criteria->add(MorphmettlratiosPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MorphmettlratiosPeer::FAMCODE)) $criteria->add(MorphmettlratiosPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(MorphmettlratiosPeer::FAMILY)) $criteria->add(MorphmettlratiosPeer::FAMILY, $this->family);
        if ($this->isColumnModified(MorphmettlratiosPeer::COMMONNAME)) $criteria->add(MorphmettlratiosPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(MorphmettlratiosPeer::CLASSNUM)) $criteria->add(MorphmettlratiosPeer::CLASSNUM, $this->classnum);
        if ($this->isColumnModified(MorphmettlratiosPeer::CLAZZ)) $criteria->add(MorphmettlratiosPeer::CLAZZ, $this->class);
        if ($this->isColumnModified(MorphmettlratiosPeer::REMARKS)) $criteria->add(MorphmettlratiosPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(MorphmettlratiosPeer::PERC)) $criteria->add(MorphmettlratiosPeer::PERC, $this->perc);
        if ($this->isColumnModified(MorphmettlratiosPeer::MAXLENGTHTL)) $criteria->add(MorphmettlratiosPeer::MAXLENGTHTL, $this->maxlengthtl);
        if ($this->isColumnModified(MorphmettlratiosPeer::SLTL)) $criteria->add(MorphmettlratiosPeer::SLTL, $this->sltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::SLTL_LOWER)) $criteria->add(MorphmettlratiosPeer::SLTL_LOWER, $this->sltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::SLTL_UPPER)) $criteria->add(MorphmettlratiosPeer::SLTL_UPPER, $this->sltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::FLTL)) $criteria->add(MorphmettlratiosPeer::FLTL, $this->fltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::FLTL_LOWER)) $criteria->add(MorphmettlratiosPeer::FLTL_LOWER, $this->fltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::FLTL_UPPER)) $criteria->add(MorphmettlratiosPeer::FLTL_UPPER, $this->fltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::HLTL)) $criteria->add(MorphmettlratiosPeer::HLTL, $this->hltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::HLTL_LOWER)) $criteria->add(MorphmettlratiosPeer::HLTL_LOWER, $this->hltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::HLTL_UPPER)) $criteria->add(MorphmettlratiosPeer::HLTL_UPPER, $this->hltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::PALTL)) $criteria->add(MorphmettlratiosPeer::PALTL, $this->paltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::PALTL_LOWER)) $criteria->add(MorphmettlratiosPeer::PALTL_LOWER, $this->paltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::PALTL_UPPER)) $criteria->add(MorphmettlratiosPeer::PALTL_UPPER, $this->paltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::PDLTL)) $criteria->add(MorphmettlratiosPeer::PDLTL, $this->pdltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::PDLTL_LOWER)) $criteria->add(MorphmettlratiosPeer::PDLTL_LOWER, $this->pdltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::PDLTL_UPPER)) $criteria->add(MorphmettlratiosPeer::PDLTL_UPPER, $this->pdltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::PPLTL)) $criteria->add(MorphmettlratiosPeer::PPLTL, $this->ppltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::PPLTL_LOWER)) $criteria->add(MorphmettlratiosPeer::PPLTL_LOWER, $this->ppltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::PPLTL_UPPER)) $criteria->add(MorphmettlratiosPeer::PPLTL_UPPER, $this->ppltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::PPELTL)) $criteria->add(MorphmettlratiosPeer::PPELTL, $this->ppeltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::PPELTL_LOWER)) $criteria->add(MorphmettlratiosPeer::PPELTL_LOWER, $this->ppeltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::PPELTL_UPPER)) $criteria->add(MorphmettlratiosPeer::PPELTL_UPPER, $this->ppeltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::EDTL)) $criteria->add(MorphmettlratiosPeer::EDTL, $this->edtl);
        if ($this->isColumnModified(MorphmettlratiosPeer::EDTL_LOWER)) $criteria->add(MorphmettlratiosPeer::EDTL_LOWER, $this->edtl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::EDTL_UPPER)) $criteria->add(MorphmettlratiosPeer::EDTL_UPPER, $this->edtl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::POLTL)) $criteria->add(MorphmettlratiosPeer::POLTL, $this->poltl);
        if ($this->isColumnModified(MorphmettlratiosPeer::POLTL_LOWER)) $criteria->add(MorphmettlratiosPeer::POLTL_LOWER, $this->poltl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::POLTL_UPPER)) $criteria->add(MorphmettlratiosPeer::POLTL_UPPER, $this->poltl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::BDTL)) $criteria->add(MorphmettlratiosPeer::BDTL, $this->bdtl);
        if ($this->isColumnModified(MorphmettlratiosPeer::BDTL_LOWER)) $criteria->add(MorphmettlratiosPeer::BDTL_LOWER, $this->bdtl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::BDTL_UPPER)) $criteria->add(MorphmettlratiosPeer::BDTL_UPPER, $this->bdtl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::CHTL)) $criteria->add(MorphmettlratiosPeer::CHTL, $this->chtl);
        if ($this->isColumnModified(MorphmettlratiosPeer::CHTL_LOWER)) $criteria->add(MorphmettlratiosPeer::CHTL_LOWER, $this->chtl_lower);
        if ($this->isColumnModified(MorphmettlratiosPeer::CHTL_UPPER)) $criteria->add(MorphmettlratiosPeer::CHTL_UPPER, $this->chtl_upper);
        if ($this->isColumnModified(MorphmettlratiosPeer::PKID)) $criteria->add(MorphmettlratiosPeer::PKID, $this->pkid);

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
        $criteria = new Criteria(MorphmettlratiosPeer::DATABASE_NAME);
        $criteria->add(MorphmettlratiosPeer::PKID, $this->pkid);

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
     * @param object $copyObj An object of Morphmettlratios (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPicname($this->getPicname());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setFamily($this->getFamily());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setClassnum($this->getClassnum());
        $copyObj->setClass($this->getClass());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setPerc($this->getPerc());
        $copyObj->setMaxlengthtl($this->getMaxlengthtl());
        $copyObj->setSltl($this->getSltl());
        $copyObj->setSltlLower($this->getSltlLower());
        $copyObj->setSltlUpper($this->getSltlUpper());
        $copyObj->setFltl($this->getFltl());
        $copyObj->setFltlLower($this->getFltlLower());
        $copyObj->setFltlUpper($this->getFltlUpper());
        $copyObj->setHltl($this->getHltl());
        $copyObj->setHltlLower($this->getHltlLower());
        $copyObj->setHltlUpper($this->getHltlUpper());
        $copyObj->setPaltl($this->getPaltl());
        $copyObj->setPaltlLower($this->getPaltlLower());
        $copyObj->setPaltlUpper($this->getPaltlUpper());
        $copyObj->setPdltl($this->getPdltl());
        $copyObj->setPdltlLower($this->getPdltlLower());
        $copyObj->setPdltlUpper($this->getPdltlUpper());
        $copyObj->setPpltl($this->getPpltl());
        $copyObj->setPpltlLower($this->getPpltlLower());
        $copyObj->setPpltlUpper($this->getPpltlUpper());
        $copyObj->setPpeltl($this->getPpeltl());
        $copyObj->setPpeltlLower($this->getPpeltlLower());
        $copyObj->setPpeltlUpper($this->getPpeltlUpper());
        $copyObj->setEdtl($this->getEdtl());
        $copyObj->setEdtlLower($this->getEdtlLower());
        $copyObj->setEdtlUpper($this->getEdtlUpper());
        $copyObj->setPoltl($this->getPoltl());
        $copyObj->setPoltlLower($this->getPoltlLower());
        $copyObj->setPoltlUpper($this->getPoltlUpper());
        $copyObj->setBdtl($this->getBdtl());
        $copyObj->setBdtlLower($this->getBdtlLower());
        $copyObj->setBdtlUpper($this->getBdtlUpper());
        $copyObj->setChtl($this->getChtl());
        $copyObj->setChtlLower($this->getChtlLower());
        $copyObj->setChtlUpper($this->getChtlUpper());
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
     * @return Morphmettlratios Clone of current object.
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
     * @return MorphmettlratiosPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MorphmettlratiosPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->picname = null;
        $this->speccode = null;
        $this->famcode = null;
        $this->family = null;
        $this->commonname = null;
        $this->classnum = null;
        $this->class = null;
        $this->remarks = null;
        $this->perc = null;
        $this->maxlengthtl = null;
        $this->sltl = null;
        $this->sltl_lower = null;
        $this->sltl_upper = null;
        $this->fltl = null;
        $this->fltl_lower = null;
        $this->fltl_upper = null;
        $this->hltl = null;
        $this->hltl_lower = null;
        $this->hltl_upper = null;
        $this->paltl = null;
        $this->paltl_lower = null;
        $this->paltl_upper = null;
        $this->pdltl = null;
        $this->pdltl_lower = null;
        $this->pdltl_upper = null;
        $this->ppltl = null;
        $this->ppltl_lower = null;
        $this->ppltl_upper = null;
        $this->ppeltl = null;
        $this->ppeltl_lower = null;
        $this->ppeltl_upper = null;
        $this->edtl = null;
        $this->edtl_lower = null;
        $this->edtl_upper = null;
        $this->poltl = null;
        $this->poltl_lower = null;
        $this->poltl_upper = null;
        $this->bdtl = null;
        $this->bdtl_lower = null;
        $this->bdtl_upper = null;
        $this->chtl = null;
        $this->chtl_lower = null;
        $this->chtl_upper = null;
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
        return (string) $this->exportTo(MorphmettlratiosPeer::DEFAULT_STRING_FORMAT);
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
