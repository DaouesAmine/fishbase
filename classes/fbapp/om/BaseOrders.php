<?php


/**
 * Base class that represents a row from the 'orders' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOrders extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrdersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrdersPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ordnum field.
     * @var        int
     */
    protected $ordnum;

    /**
     * The value for the order field.
     * @var        string
     */
    protected $order;

    /**
     * The value for the orderrefno field.
     * @var        int
     */
    protected $orderrefno;

    /**
     * The value for the sortno field.
     * @var        int
     */
    protected $sortno;

    /**
     * The value for the synonym field.
     * @var        int
     */
    protected $synonym;

    /**
     * The value for the authoryear field.
     * @var        string
     */
    protected $authoryear;

    /**
     * The value for the commonname field.
     * @var        string
     */
    protected $commonname;

    /**
     * The value for the bodyshapei field.
     * @var        string
     */
    protected $bodyshapei;

    /**
     * The value for the marine field.
     * @var        int
     */
    protected $marine;

    /**
     * The value for the brackish field.
     * @var        int
     */
    protected $brackish;

    /**
     * The value for the freshwater field.
     * @var        int
     */
    protected $freshwater;

    /**
     * The value for the watersalinity field.
     * @var        string
     */
    protected $watersalinity;

    /**
     * The value for the famcount field.
     * @var        int
     */
    protected $famcount;

    /**
     * The value for the speciescount field.
     * @var        int
     */
    protected $speciescount;

    /**
     * The value for the etymologyorder field.
     * @var        string
     */
    protected $etymologyorder;

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
     * The value for the classificationremark field.
     * @var        string
     */
    protected $classificationremark;

    /**
     * The value for the phylogenyfamilies field.
     * @var        string
     */
    protected $phylogenyfamilies;

    /**
     * The value for the phylfamorderrefno field.
     * @var        int
     */
    protected $phylfamorderrefno;

    /**
     * The value for the phylogenypostion field.
     * @var        string
     */
    protected $phylogenypostion;

    /**
     * The value for the phylposorderrefno field.
     * @var        int
     */
    protected $phylposorderrefno;

    /**
     * The value for the sisterorder field.
     * @var        string
     */
    protected $sisterorder;

    /**
     * The value for the comancestor field.
     * @var        int
     */
    protected $comancestor;

    /**
     * The value for the comancref1 field.
     * @var        int
     */
    protected $comancref1;

    /**
     * The value for the comancref2 field.
     * @var        int
     */
    protected $comancref2;

    /**
     * The value for the periodrange field.
     * @var        string
     */
    protected $periodrange;

    /**
     * The value for the period field.
     * @var        string
     */
    protected $period;

    /**
     * The value for the epochrange field.
     * @var        string
     */
    protected $epochrange;

    /**
     * The value for the epoch field.
     * @var        string
     */
    protected $epoch;

    /**
     * The value for the complete field.
     * @var        int
     */
    protected $complete;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

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
     * The value for the commonname_german field.
     * @var        string
     */
    protected $commonname_german;

    /**
     * The value for the commonname_french field.
     * @var        string
     */
    protected $commonname_french;

    /**
     * The value for the commonname_italian field.
     * @var        string
     */
    protected $commonname_italian;

    /**
     * The value for the commonname_spanish field.
     * @var        string
     */
    protected $commonname_spanish;

    /**
     * The value for the commonname_portuguese field.
     * @var        string
     */
    protected $commonname_portuguese;

    /**
     * The value for the commonname_dutch field.
     * @var        string
     */
    protected $commonname_dutch;

    /**
     * The value for the commonname_chinese field.
     * @var        string
     */
    protected $commonname_chinese;

    /**
     * The value for the commonname_chinese_u field.
     * @var        string
     */
    protected $commonname_chinese_u;

    /**
     * The value for the commonname_greek field.
     * @var        string
     */
    protected $commonname_greek;

    /**
     * The value for the commonname_greek_u field.
     * @var        string
     */
    protected $commonname_greek_u;

    /**
     * The value for the commonname_russian_u field.
     * @var        string
     */
    protected $commonname_russian_u;

    /**
     * The value for the commonname_russian field.
     * @var        string
     */
    protected $commonname_russian;

    /**
     * The value for the commonname_swedish field.
     * @var        string
     */
    protected $commonname_swedish;

    /**
     * The value for the class_russian field.
     * @var        string
     */
    protected $class_russian;

    /**
     * The value for the etymologyclass field.
     * @var        string
     */
    protected $etymologyclass;

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
     * Get the [ordnum] column value.
     *
     * @return int
     */
    public function getOrdnum()
    {

        return $this->ordnum;
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
     * Get the [orderrefno] column value.
     *
     * @return int
     */
    public function getOrderrefno()
    {

        return $this->orderrefno;
    }

    /**
     * Get the [sortno] column value.
     *
     * @return int
     */
    public function getSortno()
    {

        return $this->sortno;
    }

    /**
     * Get the [synonym] column value.
     *
     * @return int
     */
    public function getSynonym()
    {

        return $this->synonym;
    }

    /**
     * Get the [authoryear] column value.
     *
     * @return string
     */
    public function getAuthoryear()
    {

        return $this->authoryear;
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
     * Get the [bodyshapei] column value.
     *
     * @return string
     */
    public function getBodyshapei()
    {

        return $this->bodyshapei;
    }

    /**
     * Get the [marine] column value.
     *
     * @return int
     */
    public function getMarine()
    {

        return $this->marine;
    }

    /**
     * Get the [brackish] column value.
     *
     * @return int
     */
    public function getBrackish()
    {

        return $this->brackish;
    }

    /**
     * Get the [freshwater] column value.
     *
     * @return int
     */
    public function getFreshwater()
    {

        return $this->freshwater;
    }

    /**
     * Get the [watersalinity] column value.
     *
     * @return string
     */
    public function getWatersalinity()
    {

        return $this->watersalinity;
    }

    /**
     * Get the [famcount] column value.
     *
     * @return int
     */
    public function getFamcount()
    {

        return $this->famcount;
    }

    /**
     * Get the [speciescount] column value.
     *
     * @return int
     */
    public function getSpeciescount()
    {

        return $this->speciescount;
    }

    /**
     * Get the [etymologyorder] column value.
     *
     * @return string
     */
    public function getEtymologyorder()
    {

        return $this->etymologyorder;
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
     * Get the [classificationremark] column value.
     *
     * @return string
     */
    public function getClassificationremark()
    {

        return $this->classificationremark;
    }

    /**
     * Get the [phylogenyfamilies] column value.
     *
     * @return string
     */
    public function getPhylogenyfamilies()
    {

        return $this->phylogenyfamilies;
    }

    /**
     * Get the [phylfamorderrefno] column value.
     *
     * @return int
     */
    public function getPhylfamorderrefno()
    {

        return $this->phylfamorderrefno;
    }

    /**
     * Get the [phylogenypostion] column value.
     *
     * @return string
     */
    public function getPhylogenypostion()
    {

        return $this->phylogenypostion;
    }

    /**
     * Get the [phylposorderrefno] column value.
     *
     * @return int
     */
    public function getPhylposorderrefno()
    {

        return $this->phylposorderrefno;
    }

    /**
     * Get the [sisterorder] column value.
     *
     * @return string
     */
    public function getSisterorder()
    {

        return $this->sisterorder;
    }

    /**
     * Get the [comancestor] column value.
     *
     * @return int
     */
    public function getComancestor()
    {

        return $this->comancestor;
    }

    /**
     * Get the [comancref1] column value.
     *
     * @return int
     */
    public function getComancref1()
    {

        return $this->comancref1;
    }

    /**
     * Get the [comancref2] column value.
     *
     * @return int
     */
    public function getComancref2()
    {

        return $this->comancref2;
    }

    /**
     * Get the [periodrange] column value.
     *
     * @return string
     */
    public function getPeriodrange()
    {

        return $this->periodrange;
    }

    /**
     * Get the [period] column value.
     *
     * @return string
     */
    public function getPeriod()
    {

        return $this->period;
    }

    /**
     * Get the [epochrange] column value.
     *
     * @return string
     */
    public function getEpochrange()
    {

        return $this->epochrange;
    }

    /**
     * Get the [epoch] column value.
     *
     * @return string
     */
    public function getEpoch()
    {

        return $this->epoch;
    }

    /**
     * Get the [complete] column value.
     *
     * @return int
     */
    public function getComplete()
    {

        return $this->complete;
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
     * Get the [commonname_german] column value.
     *
     * @return string
     */
    public function getCommonnameGerman()
    {

        return $this->commonname_german;
    }

    /**
     * Get the [commonname_french] column value.
     *
     * @return string
     */
    public function getCommonnameFrench()
    {

        return $this->commonname_french;
    }

    /**
     * Get the [commonname_italian] column value.
     *
     * @return string
     */
    public function getCommonnameItalian()
    {

        return $this->commonname_italian;
    }

    /**
     * Get the [commonname_spanish] column value.
     *
     * @return string
     */
    public function getCommonnameSpanish()
    {

        return $this->commonname_spanish;
    }

    /**
     * Get the [commonname_portuguese] column value.
     *
     * @return string
     */
    public function getCommonnamePortuguese()
    {

        return $this->commonname_portuguese;
    }

    /**
     * Get the [commonname_dutch] column value.
     *
     * @return string
     */
    public function getCommonnameDutch()
    {

        return $this->commonname_dutch;
    }

    /**
     * Get the [commonname_chinese] column value.
     *
     * @return string
     */
    public function getCommonnameChinese()
    {

        return $this->commonname_chinese;
    }

    /**
     * Get the [commonname_chinese_u] column value.
     *
     * @return string
     */
    public function getCommonnameChineseU()
    {

        return $this->commonname_chinese_u;
    }

    /**
     * Get the [commonname_greek] column value.
     *
     * @return string
     */
    public function getCommonnameGreek()
    {

        return $this->commonname_greek;
    }

    /**
     * Get the [commonname_greek_u] column value.
     *
     * @return string
     */
    public function getCommonnameGreekU()
    {

        return $this->commonname_greek_u;
    }

    /**
     * Get the [commonname_russian_u] column value.
     *
     * @return string
     */
    public function getCommonnameRussianU()
    {

        return $this->commonname_russian_u;
    }

    /**
     * Get the [commonname_russian] column value.
     *
     * @return string
     */
    public function getCommonnameRussian()
    {

        return $this->commonname_russian;
    }

    /**
     * Get the [commonname_swedish] column value.
     *
     * @return string
     */
    public function getCommonnameSwedish()
    {

        return $this->commonname_swedish;
    }

    /**
     * Get the [class_russian] column value.
     *
     * @return string
     */
    public function getClassRussian()
    {

        return $this->class_russian;
    }

    /**
     * Get the [etymologyclass] column value.
     *
     * @return string
     */
    public function getEtymologyclass()
    {

        return $this->etymologyclass;
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
     * Set the value of [ordnum] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setOrdnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordnum !== $v) {
            $this->ordnum = $v;
            $this->modifiedColumns[] = OrdersPeer::ORDNUM;
        }


        return $this;
    } // setOrdnum()

    /**
     * Set the value of [order] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setOrder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order !== $v) {
            $this->order = $v;
            $this->modifiedColumns[] = OrdersPeer::ORDER;
        }


        return $this;
    } // setOrder()

    /**
     * Set the value of [orderrefno] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setOrderrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->orderrefno !== $v) {
            $this->orderrefno = $v;
            $this->modifiedColumns[] = OrdersPeer::ORDERREFNO;
        }


        return $this;
    } // setOrderrefno()

    /**
     * Set the value of [sortno] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setSortno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sortno !== $v) {
            $this->sortno = $v;
            $this->modifiedColumns[] = OrdersPeer::SORTNO;
        }


        return $this;
    } // setSortno()

    /**
     * Set the value of [synonym] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setSynonym($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->synonym !== $v) {
            $this->synonym = $v;
            $this->modifiedColumns[] = OrdersPeer::SYNONYM;
        }


        return $this;
    } // setSynonym()

    /**
     * Set the value of [authoryear] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setAuthoryear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoryear !== $v) {
            $this->authoryear = $v;
            $this->modifiedColumns[] = OrdersPeer::AUTHORYEAR;
        }


        return $this;
    } // setAuthoryear()

    /**
     * Set the value of [commonname] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname !== $v) {
            $this->commonname = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME;
        }


        return $this;
    } // setCommonname()

    /**
     * Set the value of [bodyshapei] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setBodyshapei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapei !== $v) {
            $this->bodyshapei = $v;
            $this->modifiedColumns[] = OrdersPeer::BODYSHAPEI;
        }


        return $this;
    } // setBodyshapei()

    /**
     * Set the value of [marine] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setMarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marine !== $v) {
            $this->marine = $v;
            $this->modifiedColumns[] = OrdersPeer::MARINE;
        }


        return $this;
    } // setMarine()

    /**
     * Set the value of [brackish] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setBrackish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->brackish !== $v) {
            $this->brackish = $v;
            $this->modifiedColumns[] = OrdersPeer::BRACKISH;
        }


        return $this;
    } // setBrackish()

    /**
     * Set the value of [freshwater] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setFreshwater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshwater !== $v) {
            $this->freshwater = $v;
            $this->modifiedColumns[] = OrdersPeer::FRESHWATER;
        }


        return $this;
    } // setFreshwater()

    /**
     * Set the value of [watersalinity] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setWatersalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->watersalinity !== $v) {
            $this->watersalinity = $v;
            $this->modifiedColumns[] = OrdersPeer::WATERSALINITY;
        }


        return $this;
    } // setWatersalinity()

    /**
     * Set the value of [famcount] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setFamcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcount !== $v) {
            $this->famcount = $v;
            $this->modifiedColumns[] = OrdersPeer::FAMCOUNT;
        }


        return $this;
    } // setFamcount()

    /**
     * Set the value of [speciescount] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setSpeciescount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciescount !== $v) {
            $this->speciescount = $v;
            $this->modifiedColumns[] = OrdersPeer::SPECIESCOUNT;
        }


        return $this;
    } // setSpeciescount()

    /**
     * Set the value of [etymologyorder] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setEtymologyorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etymologyorder !== $v) {
            $this->etymologyorder = $v;
            $this->modifiedColumns[] = OrdersPeer::ETYMOLOGYORDER;
        }


        return $this;
    } // setEtymologyorder()

    /**
     * Set the value of [classnum] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setClassnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->classnum !== $v) {
            $this->classnum = $v;
            $this->modifiedColumns[] = OrdersPeer::CLASSNUM;
        }


        return $this;
    } // setClassnum()

    /**
     * Set the value of [class] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setClass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->class !== $v) {
            $this->class = $v;
            $this->modifiedColumns[] = OrdersPeer::CLAZZ;
        }


        return $this;
    } // setClass()

    /**
     * Set the value of [classificationremark] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setClassificationremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->classificationremark !== $v) {
            $this->classificationremark = $v;
            $this->modifiedColumns[] = OrdersPeer::CLASSIFICATIONREMARK;
        }


        return $this;
    } // setClassificationremark()

    /**
     * Set the value of [phylogenyfamilies] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setPhylogenyfamilies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phylogenyfamilies !== $v) {
            $this->phylogenyfamilies = $v;
            $this->modifiedColumns[] = OrdersPeer::PHYLOGENYFAMILIES;
        }


        return $this;
    } // setPhylogenyfamilies()

    /**
     * Set the value of [phylfamorderrefno] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setPhylfamorderrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->phylfamorderrefno !== $v) {
            $this->phylfamorderrefno = $v;
            $this->modifiedColumns[] = OrdersPeer::PHYLFAMORDERREFNO;
        }


        return $this;
    } // setPhylfamorderrefno()

    /**
     * Set the value of [phylogenypostion] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setPhylogenypostion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phylogenypostion !== $v) {
            $this->phylogenypostion = $v;
            $this->modifiedColumns[] = OrdersPeer::PHYLOGENYPOSTION;
        }


        return $this;
    } // setPhylogenypostion()

    /**
     * Set the value of [phylposorderrefno] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setPhylposorderrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->phylposorderrefno !== $v) {
            $this->phylposorderrefno = $v;
            $this->modifiedColumns[] = OrdersPeer::PHYLPOSORDERREFNO;
        }


        return $this;
    } // setPhylposorderrefno()

    /**
     * Set the value of [sisterorder] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setSisterorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sisterorder !== $v) {
            $this->sisterorder = $v;
            $this->modifiedColumns[] = OrdersPeer::SISTERORDER;
        }


        return $this;
    } // setSisterorder()

    /**
     * Set the value of [comancestor] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setComancestor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comancestor !== $v) {
            $this->comancestor = $v;
            $this->modifiedColumns[] = OrdersPeer::COMANCESTOR;
        }


        return $this;
    } // setComancestor()

    /**
     * Set the value of [comancref1] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setComancref1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comancref1 !== $v) {
            $this->comancref1 = $v;
            $this->modifiedColumns[] = OrdersPeer::COMANCREF1;
        }


        return $this;
    } // setComancref1()

    /**
     * Set the value of [comancref2] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setComancref2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comancref2 !== $v) {
            $this->comancref2 = $v;
            $this->modifiedColumns[] = OrdersPeer::COMANCREF2;
        }


        return $this;
    } // setComancref2()

    /**
     * Set the value of [periodrange] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setPeriodrange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->periodrange !== $v) {
            $this->periodrange = $v;
            $this->modifiedColumns[] = OrdersPeer::PERIODRANGE;
        }


        return $this;
    } // setPeriodrange()

    /**
     * Set the value of [period] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setPeriod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->period !== $v) {
            $this->period = $v;
            $this->modifiedColumns[] = OrdersPeer::PERIOD;
        }


        return $this;
    } // setPeriod()

    /**
     * Set the value of [epochrange] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setEpochrange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->epochrange !== $v) {
            $this->epochrange = $v;
            $this->modifiedColumns[] = OrdersPeer::EPOCHRANGE;
        }


        return $this;
    } // setEpochrange()

    /**
     * Set the value of [epoch] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setEpoch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->epoch !== $v) {
            $this->epoch = $v;
            $this->modifiedColumns[] = OrdersPeer::EPOCH;
        }


        return $this;
    } // setEpoch()

    /**
     * Set the value of [complete] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setComplete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->complete !== $v) {
            $this->complete = $v;
            $this->modifiedColumns[] = OrdersPeer::COMPLETE;
        }


        return $this;
    } // setComplete()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = OrdersPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = OrdersPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Orders The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = OrdersPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = OrdersPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Orders The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = OrdersPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = OrdersPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Orders The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = OrdersPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [commonname_german] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameGerman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_german !== $v) {
            $this->commonname_german = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_GERMAN;
        }


        return $this;
    } // setCommonnameGerman()

    /**
     * Set the value of [commonname_french] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameFrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_french !== $v) {
            $this->commonname_french = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_FRENCH;
        }


        return $this;
    } // setCommonnameFrench()

    /**
     * Set the value of [commonname_italian] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameItalian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_italian !== $v) {
            $this->commonname_italian = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_ITALIAN;
        }


        return $this;
    } // setCommonnameItalian()

    /**
     * Set the value of [commonname_spanish] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameSpanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_spanish !== $v) {
            $this->commonname_spanish = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_SPANISH;
        }


        return $this;
    } // setCommonnameSpanish()

    /**
     * Set the value of [commonname_portuguese] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnamePortuguese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_portuguese !== $v) {
            $this->commonname_portuguese = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_PORTUGUESE;
        }


        return $this;
    } // setCommonnamePortuguese()

    /**
     * Set the value of [commonname_dutch] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameDutch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_dutch !== $v) {
            $this->commonname_dutch = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_DUTCH;
        }


        return $this;
    } // setCommonnameDutch()

    /**
     * Set the value of [commonname_chinese] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameChinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_chinese !== $v) {
            $this->commonname_chinese = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_CHINESE;
        }


        return $this;
    } // setCommonnameChinese()

    /**
     * Set the value of [commonname_chinese_u] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameChineseU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_chinese_u !== $v) {
            $this->commonname_chinese_u = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_CHINESE_U;
        }


        return $this;
    } // setCommonnameChineseU()

    /**
     * Set the value of [commonname_greek] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameGreek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_greek !== $v) {
            $this->commonname_greek = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_GREEK;
        }


        return $this;
    } // setCommonnameGreek()

    /**
     * Set the value of [commonname_greek_u] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameGreekU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_greek_u !== $v) {
            $this->commonname_greek_u = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_GREEK_U;
        }


        return $this;
    } // setCommonnameGreekU()

    /**
     * Set the value of [commonname_russian_u] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameRussianU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_russian_u !== $v) {
            $this->commonname_russian_u = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_RUSSIAN_U;
        }


        return $this;
    } // setCommonnameRussianU()

    /**
     * Set the value of [commonname_russian] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_russian !== $v) {
            $this->commonname_russian = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_RUSSIAN;
        }


        return $this;
    } // setCommonnameRussian()

    /**
     * Set the value of [commonname_swedish] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setCommonnameSwedish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commonname_swedish !== $v) {
            $this->commonname_swedish = $v;
            $this->modifiedColumns[] = OrdersPeer::COMMONNAME_SWEDISH;
        }


        return $this;
    } // setCommonnameSwedish()

    /**
     * Set the value of [class_russian] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setClassRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->class_russian !== $v) {
            $this->class_russian = $v;
            $this->modifiedColumns[] = OrdersPeer::CLASS_RUSSIAN;
        }


        return $this;
    } // setClassRussian()

    /**
     * Set the value of [etymologyclass] column.
     *
     * @param  string $v new value
     * @return Orders The current object (for fluent API support)
     */
    public function setEtymologyclass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etymologyclass !== $v) {
            $this->etymologyclass = $v;
            $this->modifiedColumns[] = OrdersPeer::ETYMOLOGYCLASS;
        }


        return $this;
    } // setEtymologyclass()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Orders The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = OrdersPeer::TS;
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

            $this->ordnum = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->order = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->orderrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->sortno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->synonym = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->authoryear = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->commonname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->bodyshapei = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->marine = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->brackish = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->freshwater = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->watersalinity = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->famcount = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->speciescount = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->etymologyorder = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->classnum = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->class = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->classificationremark = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->phylogenyfamilies = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->phylfamorderrefno = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->phylogenypostion = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->phylposorderrefno = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->sisterorder = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->comancestor = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->comancref1 = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->comancref2 = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->periodrange = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->period = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->epochrange = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->epoch = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->complete = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->remark = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->entered = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->dateentered = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->modified = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->datemodified = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->expert = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->datechecked = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->commonname_german = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->commonname_french = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->commonname_italian = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->commonname_spanish = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->commonname_portuguese = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->commonname_dutch = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->commonname_chinese = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->commonname_chinese_u = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->commonname_greek = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->commonname_greek_u = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->commonname_russian_u = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->commonname_russian = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->commonname_swedish = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->class_russian = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->etymologyclass = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->ts = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 54; // 54 = OrdersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Orders object", $e);
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
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrdersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrdersQuery::create()
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
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrdersPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(OrdersPeer::ORDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`Ordnum`';
        }
        if ($this->isColumnModified(OrdersPeer::ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`Order`';
        }
        if ($this->isColumnModified(OrdersPeer::ORDERREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`OrderRefNo`';
        }
        if ($this->isColumnModified(OrdersPeer::SORTNO)) {
            $modifiedColumns[':p' . $index++]  = '`SortNo`';
        }
        if ($this->isColumnModified(OrdersPeer::SYNONYM)) {
            $modifiedColumns[':p' . $index++]  = '`Synonym`';
        }
        if ($this->isColumnModified(OrdersPeer::AUTHORYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorYear`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName`';
        }
        if ($this->isColumnModified(OrdersPeer::BODYSHAPEI)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeI`';
        }
        if ($this->isColumnModified(OrdersPeer::MARINE)) {
            $modifiedColumns[':p' . $index++]  = '`Marine`';
        }
        if ($this->isColumnModified(OrdersPeer::BRACKISH)) {
            $modifiedColumns[':p' . $index++]  = '`Brackish`';
        }
        if ($this->isColumnModified(OrdersPeer::FRESHWATER)) {
            $modifiedColumns[':p' . $index++]  = '`Freshwater`';
        }
        if ($this->isColumnModified(OrdersPeer::WATERSALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`WaterSalinity`';
        }
        if ($this->isColumnModified(OrdersPeer::FAMCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`FamCount`';
        }
        if ($this->isColumnModified(OrdersPeer::SPECIESCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCount`';
        }
        if ($this->isColumnModified(OrdersPeer::ETYMOLOGYORDER)) {
            $modifiedColumns[':p' . $index++]  = '`EtymologyOrder`';
        }
        if ($this->isColumnModified(OrdersPeer::CLASSNUM)) {
            $modifiedColumns[':p' . $index++]  = '`ClassNum`';
        }
        if ($this->isColumnModified(OrdersPeer::CLAZZ)) {
            $modifiedColumns[':p' . $index++]  = '`Class`';
        }
        if ($this->isColumnModified(OrdersPeer::CLASSIFICATIONREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`ClassificationRemark`';
        }
        if ($this->isColumnModified(OrdersPeer::PHYLOGENYFAMILIES)) {
            $modifiedColumns[':p' . $index++]  = '`PhylogenyFamilies`';
        }
        if ($this->isColumnModified(OrdersPeer::PHYLFAMORDERREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`PhylFamOrderRefNo`';
        }
        if ($this->isColumnModified(OrdersPeer::PHYLOGENYPOSTION)) {
            $modifiedColumns[':p' . $index++]  = '`PhylogenyPostion`';
        }
        if ($this->isColumnModified(OrdersPeer::PHYLPOSORDERREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`PhylPosOrderRefNo`';
        }
        if ($this->isColumnModified(OrdersPeer::SISTERORDER)) {
            $modifiedColumns[':p' . $index++]  = '`SisterOrder`';
        }
        if ($this->isColumnModified(OrdersPeer::COMANCESTOR)) {
            $modifiedColumns[':p' . $index++]  = '`ComAncestor`';
        }
        if ($this->isColumnModified(OrdersPeer::COMANCREF1)) {
            $modifiedColumns[':p' . $index++]  = '`ComAncRef1`';
        }
        if ($this->isColumnModified(OrdersPeer::COMANCREF2)) {
            $modifiedColumns[':p' . $index++]  = '`ComAncRef2`';
        }
        if ($this->isColumnModified(OrdersPeer::PERIODRANGE)) {
            $modifiedColumns[':p' . $index++]  = '`PeriodRange`';
        }
        if ($this->isColumnModified(OrdersPeer::PERIOD)) {
            $modifiedColumns[':p' . $index++]  = '`Period`';
        }
        if ($this->isColumnModified(OrdersPeer::EPOCHRANGE)) {
            $modifiedColumns[':p' . $index++]  = '`EpochRange`';
        }
        if ($this->isColumnModified(OrdersPeer::EPOCH)) {
            $modifiedColumns[':p' . $index++]  = '`Epoch`';
        }
        if ($this->isColumnModified(OrdersPeer::COMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`Complete`';
        }
        if ($this->isColumnModified(OrdersPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(OrdersPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(OrdersPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(OrdersPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(OrdersPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(OrdersPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(OrdersPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_GERMAN)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_German`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_FRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_French`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_ITALIAN)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Italian`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_SPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Spanish`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_PORTUGUESE)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Portuguese`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_DUTCH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Dutch`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_CHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Chinese`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_CHINESE_U)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Chinese_u`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_GREEK)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Greek`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_GREEK_U)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Greek_u`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_RUSSIAN_U)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Russian_u`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Russian`';
        }
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_SWEDISH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonName_Swedish`';
        }
        if ($this->isColumnModified(OrdersPeer::CLASS_RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`Class_Russian`';
        }
        if ($this->isColumnModified(OrdersPeer::ETYMOLOGYCLASS)) {
            $modifiedColumns[':p' . $index++]  = '`EtymologyClass`';
        }
        if ($this->isColumnModified(OrdersPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `orders` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Ordnum`':
                        $stmt->bindValue($identifier, $this->ordnum, PDO::PARAM_INT);
                        break;
                    case '`Order`':
                        $stmt->bindValue($identifier, $this->order, PDO::PARAM_STR);
                        break;
                    case '`OrderRefNo`':
                        $stmt->bindValue($identifier, $this->orderrefno, PDO::PARAM_INT);
                        break;
                    case '`SortNo`':
                        $stmt->bindValue($identifier, $this->sortno, PDO::PARAM_INT);
                        break;
                    case '`Synonym`':
                        $stmt->bindValue($identifier, $this->synonym, PDO::PARAM_INT);
                        break;
                    case '`AuthorYear`':
                        $stmt->bindValue($identifier, $this->authoryear, PDO::PARAM_STR);
                        break;
                    case '`CommonName`':
                        $stmt->bindValue($identifier, $this->commonname, PDO::PARAM_STR);
                        break;
                    case '`BodyShapeI`':
                        $stmt->bindValue($identifier, $this->bodyshapei, PDO::PARAM_STR);
                        break;
                    case '`Marine`':
                        $stmt->bindValue($identifier, $this->marine, PDO::PARAM_INT);
                        break;
                    case '`Brackish`':
                        $stmt->bindValue($identifier, $this->brackish, PDO::PARAM_INT);
                        break;
                    case '`Freshwater`':
                        $stmt->bindValue($identifier, $this->freshwater, PDO::PARAM_INT);
                        break;
                    case '`WaterSalinity`':
                        $stmt->bindValue($identifier, $this->watersalinity, PDO::PARAM_STR);
                        break;
                    case '`FamCount`':
                        $stmt->bindValue($identifier, $this->famcount, PDO::PARAM_INT);
                        break;
                    case '`SpeciesCount`':
                        $stmt->bindValue($identifier, $this->speciescount, PDO::PARAM_INT);
                        break;
                    case '`EtymologyOrder`':
                        $stmt->bindValue($identifier, $this->etymologyorder, PDO::PARAM_STR);
                        break;
                    case '`ClassNum`':
                        $stmt->bindValue($identifier, $this->classnum, PDO::PARAM_INT);
                        break;
                    case '`Class`':
                        $stmt->bindValue($identifier, $this->class, PDO::PARAM_STR);
                        break;
                    case '`ClassificationRemark`':
                        $stmt->bindValue($identifier, $this->classificationremark, PDO::PARAM_STR);
                        break;
                    case '`PhylogenyFamilies`':
                        $stmt->bindValue($identifier, $this->phylogenyfamilies, PDO::PARAM_STR);
                        break;
                    case '`PhylFamOrderRefNo`':
                        $stmt->bindValue($identifier, $this->phylfamorderrefno, PDO::PARAM_INT);
                        break;
                    case '`PhylogenyPostion`':
                        $stmt->bindValue($identifier, $this->phylogenypostion, PDO::PARAM_STR);
                        break;
                    case '`PhylPosOrderRefNo`':
                        $stmt->bindValue($identifier, $this->phylposorderrefno, PDO::PARAM_INT);
                        break;
                    case '`SisterOrder`':
                        $stmt->bindValue($identifier, $this->sisterorder, PDO::PARAM_STR);
                        break;
                    case '`ComAncestor`':
                        $stmt->bindValue($identifier, $this->comancestor, PDO::PARAM_INT);
                        break;
                    case '`ComAncRef1`':
                        $stmt->bindValue($identifier, $this->comancref1, PDO::PARAM_INT);
                        break;
                    case '`ComAncRef2`':
                        $stmt->bindValue($identifier, $this->comancref2, PDO::PARAM_INT);
                        break;
                    case '`PeriodRange`':
                        $stmt->bindValue($identifier, $this->periodrange, PDO::PARAM_STR);
                        break;
                    case '`Period`':
                        $stmt->bindValue($identifier, $this->period, PDO::PARAM_STR);
                        break;
                    case '`EpochRange`':
                        $stmt->bindValue($identifier, $this->epochrange, PDO::PARAM_STR);
                        break;
                    case '`Epoch`':
                        $stmt->bindValue($identifier, $this->epoch, PDO::PARAM_STR);
                        break;
                    case '`Complete`':
                        $stmt->bindValue($identifier, $this->complete, PDO::PARAM_INT);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
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
                    case '`CommonName_German`':
                        $stmt->bindValue($identifier, $this->commonname_german, PDO::PARAM_STR);
                        break;
                    case '`CommonName_French`':
                        $stmt->bindValue($identifier, $this->commonname_french, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Italian`':
                        $stmt->bindValue($identifier, $this->commonname_italian, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Spanish`':
                        $stmt->bindValue($identifier, $this->commonname_spanish, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Portuguese`':
                        $stmt->bindValue($identifier, $this->commonname_portuguese, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Dutch`':
                        $stmt->bindValue($identifier, $this->commonname_dutch, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Chinese`':
                        $stmt->bindValue($identifier, $this->commonname_chinese, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Chinese_u`':
                        $stmt->bindValue($identifier, $this->commonname_chinese_u, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Greek`':
                        $stmt->bindValue($identifier, $this->commonname_greek, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Greek_u`':
                        $stmt->bindValue($identifier, $this->commonname_greek_u, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Russian_u`':
                        $stmt->bindValue($identifier, $this->commonname_russian_u, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Russian`':
                        $stmt->bindValue($identifier, $this->commonname_russian, PDO::PARAM_STR);
                        break;
                    case '`CommonName_Swedish`':
                        $stmt->bindValue($identifier, $this->commonname_swedish, PDO::PARAM_STR);
                        break;
                    case '`Class_Russian`':
                        $stmt->bindValue($identifier, $this->class_russian, PDO::PARAM_STR);
                        break;
                    case '`EtymologyClass`':
                        $stmt->bindValue($identifier, $this->etymologyclass, PDO::PARAM_STR);
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


            if (($retval = OrdersPeer::doValidate($this, $columns)) !== true) {
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
        $pos = OrdersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrdnum();
                break;
            case 1:
                return $this->getOrder();
                break;
            case 2:
                return $this->getOrderrefno();
                break;
            case 3:
                return $this->getSortno();
                break;
            case 4:
                return $this->getSynonym();
                break;
            case 5:
                return $this->getAuthoryear();
                break;
            case 6:
                return $this->getCommonname();
                break;
            case 7:
                return $this->getBodyshapei();
                break;
            case 8:
                return $this->getMarine();
                break;
            case 9:
                return $this->getBrackish();
                break;
            case 10:
                return $this->getFreshwater();
                break;
            case 11:
                return $this->getWatersalinity();
                break;
            case 12:
                return $this->getFamcount();
                break;
            case 13:
                return $this->getSpeciescount();
                break;
            case 14:
                return $this->getEtymologyorder();
                break;
            case 15:
                return $this->getClassnum();
                break;
            case 16:
                return $this->getClass();
                break;
            case 17:
                return $this->getClassificationremark();
                break;
            case 18:
                return $this->getPhylogenyfamilies();
                break;
            case 19:
                return $this->getPhylfamorderrefno();
                break;
            case 20:
                return $this->getPhylogenypostion();
                break;
            case 21:
                return $this->getPhylposorderrefno();
                break;
            case 22:
                return $this->getSisterorder();
                break;
            case 23:
                return $this->getComancestor();
                break;
            case 24:
                return $this->getComancref1();
                break;
            case 25:
                return $this->getComancref2();
                break;
            case 26:
                return $this->getPeriodrange();
                break;
            case 27:
                return $this->getPeriod();
                break;
            case 28:
                return $this->getEpochrange();
                break;
            case 29:
                return $this->getEpoch();
                break;
            case 30:
                return $this->getComplete();
                break;
            case 31:
                return $this->getRemark();
                break;
            case 32:
                return $this->getEntered();
                break;
            case 33:
                return $this->getDateentered();
                break;
            case 34:
                return $this->getModified();
                break;
            case 35:
                return $this->getDatemodified();
                break;
            case 36:
                return $this->getExpert();
                break;
            case 37:
                return $this->getDatechecked();
                break;
            case 38:
                return $this->getCommonnameGerman();
                break;
            case 39:
                return $this->getCommonnameFrench();
                break;
            case 40:
                return $this->getCommonnameItalian();
                break;
            case 41:
                return $this->getCommonnameSpanish();
                break;
            case 42:
                return $this->getCommonnamePortuguese();
                break;
            case 43:
                return $this->getCommonnameDutch();
                break;
            case 44:
                return $this->getCommonnameChinese();
                break;
            case 45:
                return $this->getCommonnameChineseU();
                break;
            case 46:
                return $this->getCommonnameGreek();
                break;
            case 47:
                return $this->getCommonnameGreekU();
                break;
            case 48:
                return $this->getCommonnameRussianU();
                break;
            case 49:
                return $this->getCommonnameRussian();
                break;
            case 50:
                return $this->getCommonnameSwedish();
                break;
            case 51:
                return $this->getClassRussian();
                break;
            case 52:
                return $this->getEtymologyclass();
                break;
            case 53:
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
        if (isset($alreadyDumpedObjects['Orders'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Orders'][$this->getPrimaryKey()] = true;
        $keys = OrdersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOrdnum(),
            $keys[1] => $this->getOrder(),
            $keys[2] => $this->getOrderrefno(),
            $keys[3] => $this->getSortno(),
            $keys[4] => $this->getSynonym(),
            $keys[5] => $this->getAuthoryear(),
            $keys[6] => $this->getCommonname(),
            $keys[7] => $this->getBodyshapei(),
            $keys[8] => $this->getMarine(),
            $keys[9] => $this->getBrackish(),
            $keys[10] => $this->getFreshwater(),
            $keys[11] => $this->getWatersalinity(),
            $keys[12] => $this->getFamcount(),
            $keys[13] => $this->getSpeciescount(),
            $keys[14] => $this->getEtymologyorder(),
            $keys[15] => $this->getClassnum(),
            $keys[16] => $this->getClass(),
            $keys[17] => $this->getClassificationremark(),
            $keys[18] => $this->getPhylogenyfamilies(),
            $keys[19] => $this->getPhylfamorderrefno(),
            $keys[20] => $this->getPhylogenypostion(),
            $keys[21] => $this->getPhylposorderrefno(),
            $keys[22] => $this->getSisterorder(),
            $keys[23] => $this->getComancestor(),
            $keys[24] => $this->getComancref1(),
            $keys[25] => $this->getComancref2(),
            $keys[26] => $this->getPeriodrange(),
            $keys[27] => $this->getPeriod(),
            $keys[28] => $this->getEpochrange(),
            $keys[29] => $this->getEpoch(),
            $keys[30] => $this->getComplete(),
            $keys[31] => $this->getRemark(),
            $keys[32] => $this->getEntered(),
            $keys[33] => $this->getDateentered(),
            $keys[34] => $this->getModified(),
            $keys[35] => $this->getDatemodified(),
            $keys[36] => $this->getExpert(),
            $keys[37] => $this->getDatechecked(),
            $keys[38] => $this->getCommonnameGerman(),
            $keys[39] => $this->getCommonnameFrench(),
            $keys[40] => $this->getCommonnameItalian(),
            $keys[41] => $this->getCommonnameSpanish(),
            $keys[42] => $this->getCommonnamePortuguese(),
            $keys[43] => $this->getCommonnameDutch(),
            $keys[44] => $this->getCommonnameChinese(),
            $keys[45] => $this->getCommonnameChineseU(),
            $keys[46] => $this->getCommonnameGreek(),
            $keys[47] => $this->getCommonnameGreekU(),
            $keys[48] => $this->getCommonnameRussianU(),
            $keys[49] => $this->getCommonnameRussian(),
            $keys[50] => $this->getCommonnameSwedish(),
            $keys[51] => $this->getClassRussian(),
            $keys[52] => $this->getEtymologyclass(),
            $keys[53] => $this->getTs(),
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
        $pos = OrdersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrdnum($value);
                break;
            case 1:
                $this->setOrder($value);
                break;
            case 2:
                $this->setOrderrefno($value);
                break;
            case 3:
                $this->setSortno($value);
                break;
            case 4:
                $this->setSynonym($value);
                break;
            case 5:
                $this->setAuthoryear($value);
                break;
            case 6:
                $this->setCommonname($value);
                break;
            case 7:
                $this->setBodyshapei($value);
                break;
            case 8:
                $this->setMarine($value);
                break;
            case 9:
                $this->setBrackish($value);
                break;
            case 10:
                $this->setFreshwater($value);
                break;
            case 11:
                $this->setWatersalinity($value);
                break;
            case 12:
                $this->setFamcount($value);
                break;
            case 13:
                $this->setSpeciescount($value);
                break;
            case 14:
                $this->setEtymologyorder($value);
                break;
            case 15:
                $this->setClassnum($value);
                break;
            case 16:
                $this->setClass($value);
                break;
            case 17:
                $this->setClassificationremark($value);
                break;
            case 18:
                $this->setPhylogenyfamilies($value);
                break;
            case 19:
                $this->setPhylfamorderrefno($value);
                break;
            case 20:
                $this->setPhylogenypostion($value);
                break;
            case 21:
                $this->setPhylposorderrefno($value);
                break;
            case 22:
                $this->setSisterorder($value);
                break;
            case 23:
                $this->setComancestor($value);
                break;
            case 24:
                $this->setComancref1($value);
                break;
            case 25:
                $this->setComancref2($value);
                break;
            case 26:
                $this->setPeriodrange($value);
                break;
            case 27:
                $this->setPeriod($value);
                break;
            case 28:
                $this->setEpochrange($value);
                break;
            case 29:
                $this->setEpoch($value);
                break;
            case 30:
                $this->setComplete($value);
                break;
            case 31:
                $this->setRemark($value);
                break;
            case 32:
                $this->setEntered($value);
                break;
            case 33:
                $this->setDateentered($value);
                break;
            case 34:
                $this->setModified($value);
                break;
            case 35:
                $this->setDatemodified($value);
                break;
            case 36:
                $this->setExpert($value);
                break;
            case 37:
                $this->setDatechecked($value);
                break;
            case 38:
                $this->setCommonnameGerman($value);
                break;
            case 39:
                $this->setCommonnameFrench($value);
                break;
            case 40:
                $this->setCommonnameItalian($value);
                break;
            case 41:
                $this->setCommonnameSpanish($value);
                break;
            case 42:
                $this->setCommonnamePortuguese($value);
                break;
            case 43:
                $this->setCommonnameDutch($value);
                break;
            case 44:
                $this->setCommonnameChinese($value);
                break;
            case 45:
                $this->setCommonnameChineseU($value);
                break;
            case 46:
                $this->setCommonnameGreek($value);
                break;
            case 47:
                $this->setCommonnameGreekU($value);
                break;
            case 48:
                $this->setCommonnameRussianU($value);
                break;
            case 49:
                $this->setCommonnameRussian($value);
                break;
            case 50:
                $this->setCommonnameSwedish($value);
                break;
            case 51:
                $this->setClassRussian($value);
                break;
            case 52:
                $this->setEtymologyclass($value);
                break;
            case 53:
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
        $keys = OrdersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOrdnum($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrder($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrderrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSortno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSynonym($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAuthoryear($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCommonname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBodyshapei($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMarine($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setBrackish($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFreshwater($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setWatersalinity($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFamcount($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSpeciescount($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEtymologyorder($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setClassnum($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setClass($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setClassificationremark($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPhylogenyfamilies($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPhylfamorderrefno($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPhylogenypostion($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPhylposorderrefno($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSisterorder($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setComancestor($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setComancref1($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setComancref2($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPeriodrange($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPeriod($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEpochrange($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setEpoch($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setComplete($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setRemark($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEntered($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDateentered($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setModified($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDatemodified($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setExpert($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDatechecked($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setCommonnameGerman($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setCommonnameFrench($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setCommonnameItalian($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setCommonnameSpanish($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCommonnamePortuguese($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setCommonnameDutch($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setCommonnameChinese($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setCommonnameChineseU($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCommonnameGreek($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setCommonnameGreekU($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setCommonnameRussianU($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setCommonnameRussian($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setCommonnameSwedish($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setClassRussian($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setEtymologyclass($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setTs($arr[$keys[53]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdersPeer::DATABASE_NAME);

        if ($this->isColumnModified(OrdersPeer::ORDNUM)) $criteria->add(OrdersPeer::ORDNUM, $this->ordnum);
        if ($this->isColumnModified(OrdersPeer::ORDER)) $criteria->add(OrdersPeer::ORDER, $this->order);
        if ($this->isColumnModified(OrdersPeer::ORDERREFNO)) $criteria->add(OrdersPeer::ORDERREFNO, $this->orderrefno);
        if ($this->isColumnModified(OrdersPeer::SORTNO)) $criteria->add(OrdersPeer::SORTNO, $this->sortno);
        if ($this->isColumnModified(OrdersPeer::SYNONYM)) $criteria->add(OrdersPeer::SYNONYM, $this->synonym);
        if ($this->isColumnModified(OrdersPeer::AUTHORYEAR)) $criteria->add(OrdersPeer::AUTHORYEAR, $this->authoryear);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME)) $criteria->add(OrdersPeer::COMMONNAME, $this->commonname);
        if ($this->isColumnModified(OrdersPeer::BODYSHAPEI)) $criteria->add(OrdersPeer::BODYSHAPEI, $this->bodyshapei);
        if ($this->isColumnModified(OrdersPeer::MARINE)) $criteria->add(OrdersPeer::MARINE, $this->marine);
        if ($this->isColumnModified(OrdersPeer::BRACKISH)) $criteria->add(OrdersPeer::BRACKISH, $this->brackish);
        if ($this->isColumnModified(OrdersPeer::FRESHWATER)) $criteria->add(OrdersPeer::FRESHWATER, $this->freshwater);
        if ($this->isColumnModified(OrdersPeer::WATERSALINITY)) $criteria->add(OrdersPeer::WATERSALINITY, $this->watersalinity);
        if ($this->isColumnModified(OrdersPeer::FAMCOUNT)) $criteria->add(OrdersPeer::FAMCOUNT, $this->famcount);
        if ($this->isColumnModified(OrdersPeer::SPECIESCOUNT)) $criteria->add(OrdersPeer::SPECIESCOUNT, $this->speciescount);
        if ($this->isColumnModified(OrdersPeer::ETYMOLOGYORDER)) $criteria->add(OrdersPeer::ETYMOLOGYORDER, $this->etymologyorder);
        if ($this->isColumnModified(OrdersPeer::CLASSNUM)) $criteria->add(OrdersPeer::CLASSNUM, $this->classnum);
        if ($this->isColumnModified(OrdersPeer::CLAZZ)) $criteria->add(OrdersPeer::CLAZZ, $this->class);
        if ($this->isColumnModified(OrdersPeer::CLASSIFICATIONREMARK)) $criteria->add(OrdersPeer::CLASSIFICATIONREMARK, $this->classificationremark);
        if ($this->isColumnModified(OrdersPeer::PHYLOGENYFAMILIES)) $criteria->add(OrdersPeer::PHYLOGENYFAMILIES, $this->phylogenyfamilies);
        if ($this->isColumnModified(OrdersPeer::PHYLFAMORDERREFNO)) $criteria->add(OrdersPeer::PHYLFAMORDERREFNO, $this->phylfamorderrefno);
        if ($this->isColumnModified(OrdersPeer::PHYLOGENYPOSTION)) $criteria->add(OrdersPeer::PHYLOGENYPOSTION, $this->phylogenypostion);
        if ($this->isColumnModified(OrdersPeer::PHYLPOSORDERREFNO)) $criteria->add(OrdersPeer::PHYLPOSORDERREFNO, $this->phylposorderrefno);
        if ($this->isColumnModified(OrdersPeer::SISTERORDER)) $criteria->add(OrdersPeer::SISTERORDER, $this->sisterorder);
        if ($this->isColumnModified(OrdersPeer::COMANCESTOR)) $criteria->add(OrdersPeer::COMANCESTOR, $this->comancestor);
        if ($this->isColumnModified(OrdersPeer::COMANCREF1)) $criteria->add(OrdersPeer::COMANCREF1, $this->comancref1);
        if ($this->isColumnModified(OrdersPeer::COMANCREF2)) $criteria->add(OrdersPeer::COMANCREF2, $this->comancref2);
        if ($this->isColumnModified(OrdersPeer::PERIODRANGE)) $criteria->add(OrdersPeer::PERIODRANGE, $this->periodrange);
        if ($this->isColumnModified(OrdersPeer::PERIOD)) $criteria->add(OrdersPeer::PERIOD, $this->period);
        if ($this->isColumnModified(OrdersPeer::EPOCHRANGE)) $criteria->add(OrdersPeer::EPOCHRANGE, $this->epochrange);
        if ($this->isColumnModified(OrdersPeer::EPOCH)) $criteria->add(OrdersPeer::EPOCH, $this->epoch);
        if ($this->isColumnModified(OrdersPeer::COMPLETE)) $criteria->add(OrdersPeer::COMPLETE, $this->complete);
        if ($this->isColumnModified(OrdersPeer::REMARK)) $criteria->add(OrdersPeer::REMARK, $this->remark);
        if ($this->isColumnModified(OrdersPeer::ENTERED)) $criteria->add(OrdersPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(OrdersPeer::DATEENTERED)) $criteria->add(OrdersPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(OrdersPeer::MODIFIED)) $criteria->add(OrdersPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(OrdersPeer::DATEMODIFIED)) $criteria->add(OrdersPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(OrdersPeer::EXPERT)) $criteria->add(OrdersPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(OrdersPeer::DATECHECKED)) $criteria->add(OrdersPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_GERMAN)) $criteria->add(OrdersPeer::COMMONNAME_GERMAN, $this->commonname_german);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_FRENCH)) $criteria->add(OrdersPeer::COMMONNAME_FRENCH, $this->commonname_french);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_ITALIAN)) $criteria->add(OrdersPeer::COMMONNAME_ITALIAN, $this->commonname_italian);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_SPANISH)) $criteria->add(OrdersPeer::COMMONNAME_SPANISH, $this->commonname_spanish);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_PORTUGUESE)) $criteria->add(OrdersPeer::COMMONNAME_PORTUGUESE, $this->commonname_portuguese);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_DUTCH)) $criteria->add(OrdersPeer::COMMONNAME_DUTCH, $this->commonname_dutch);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_CHINESE)) $criteria->add(OrdersPeer::COMMONNAME_CHINESE, $this->commonname_chinese);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_CHINESE_U)) $criteria->add(OrdersPeer::COMMONNAME_CHINESE_U, $this->commonname_chinese_u);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_GREEK)) $criteria->add(OrdersPeer::COMMONNAME_GREEK, $this->commonname_greek);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_GREEK_U)) $criteria->add(OrdersPeer::COMMONNAME_GREEK_U, $this->commonname_greek_u);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_RUSSIAN_U)) $criteria->add(OrdersPeer::COMMONNAME_RUSSIAN_U, $this->commonname_russian_u);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_RUSSIAN)) $criteria->add(OrdersPeer::COMMONNAME_RUSSIAN, $this->commonname_russian);
        if ($this->isColumnModified(OrdersPeer::COMMONNAME_SWEDISH)) $criteria->add(OrdersPeer::COMMONNAME_SWEDISH, $this->commonname_swedish);
        if ($this->isColumnModified(OrdersPeer::CLASS_RUSSIAN)) $criteria->add(OrdersPeer::CLASS_RUSSIAN, $this->class_russian);
        if ($this->isColumnModified(OrdersPeer::ETYMOLOGYCLASS)) $criteria->add(OrdersPeer::ETYMOLOGYCLASS, $this->etymologyclass);
        if ($this->isColumnModified(OrdersPeer::TS)) $criteria->add(OrdersPeer::TS, $this->ts);

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
        $criteria = new Criteria(OrdersPeer::DATABASE_NAME);
        $criteria->add(OrdersPeer::ORDER, $this->order);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getOrder();
    }

    /**
     * Generic method to set the primary key (order column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOrder($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getOrder();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Orders (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrdnum($this->getOrdnum());
        $copyObj->setOrderrefno($this->getOrderrefno());
        $copyObj->setSortno($this->getSortno());
        $copyObj->setSynonym($this->getSynonym());
        $copyObj->setAuthoryear($this->getAuthoryear());
        $copyObj->setCommonname($this->getCommonname());
        $copyObj->setBodyshapei($this->getBodyshapei());
        $copyObj->setMarine($this->getMarine());
        $copyObj->setBrackish($this->getBrackish());
        $copyObj->setFreshwater($this->getFreshwater());
        $copyObj->setWatersalinity($this->getWatersalinity());
        $copyObj->setFamcount($this->getFamcount());
        $copyObj->setSpeciescount($this->getSpeciescount());
        $copyObj->setEtymologyorder($this->getEtymologyorder());
        $copyObj->setClassnum($this->getClassnum());
        $copyObj->setClass($this->getClass());
        $copyObj->setClassificationremark($this->getClassificationremark());
        $copyObj->setPhylogenyfamilies($this->getPhylogenyfamilies());
        $copyObj->setPhylfamorderrefno($this->getPhylfamorderrefno());
        $copyObj->setPhylogenypostion($this->getPhylogenypostion());
        $copyObj->setPhylposorderrefno($this->getPhylposorderrefno());
        $copyObj->setSisterorder($this->getSisterorder());
        $copyObj->setComancestor($this->getComancestor());
        $copyObj->setComancref1($this->getComancref1());
        $copyObj->setComancref2($this->getComancref2());
        $copyObj->setPeriodrange($this->getPeriodrange());
        $copyObj->setPeriod($this->getPeriod());
        $copyObj->setEpochrange($this->getEpochrange());
        $copyObj->setEpoch($this->getEpoch());
        $copyObj->setComplete($this->getComplete());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setCommonnameGerman($this->getCommonnameGerman());
        $copyObj->setCommonnameFrench($this->getCommonnameFrench());
        $copyObj->setCommonnameItalian($this->getCommonnameItalian());
        $copyObj->setCommonnameSpanish($this->getCommonnameSpanish());
        $copyObj->setCommonnamePortuguese($this->getCommonnamePortuguese());
        $copyObj->setCommonnameDutch($this->getCommonnameDutch());
        $copyObj->setCommonnameChinese($this->getCommonnameChinese());
        $copyObj->setCommonnameChineseU($this->getCommonnameChineseU());
        $copyObj->setCommonnameGreek($this->getCommonnameGreek());
        $copyObj->setCommonnameGreekU($this->getCommonnameGreekU());
        $copyObj->setCommonnameRussianU($this->getCommonnameRussianU());
        $copyObj->setCommonnameRussian($this->getCommonnameRussian());
        $copyObj->setCommonnameSwedish($this->getCommonnameSwedish());
        $copyObj->setClassRussian($this->getClassRussian());
        $copyObj->setEtymologyclass($this->getEtymologyclass());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setOrder(NULL); // this is a auto-increment column, so set to default value
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
     * @return Orders Clone of current object.
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
     * @return OrdersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrdersPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ordnum = null;
        $this->order = null;
        $this->orderrefno = null;
        $this->sortno = null;
        $this->synonym = null;
        $this->authoryear = null;
        $this->commonname = null;
        $this->bodyshapei = null;
        $this->marine = null;
        $this->brackish = null;
        $this->freshwater = null;
        $this->watersalinity = null;
        $this->famcount = null;
        $this->speciescount = null;
        $this->etymologyorder = null;
        $this->classnum = null;
        $this->class = null;
        $this->classificationremark = null;
        $this->phylogenyfamilies = null;
        $this->phylfamorderrefno = null;
        $this->phylogenypostion = null;
        $this->phylposorderrefno = null;
        $this->sisterorder = null;
        $this->comancestor = null;
        $this->comancref1 = null;
        $this->comancref2 = null;
        $this->periodrange = null;
        $this->period = null;
        $this->epochrange = null;
        $this->epoch = null;
        $this->complete = null;
        $this->remark = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->commonname_german = null;
        $this->commonname_french = null;
        $this->commonname_italian = null;
        $this->commonname_spanish = null;
        $this->commonname_portuguese = null;
        $this->commonname_dutch = null;
        $this->commonname_chinese = null;
        $this->commonname_chinese_u = null;
        $this->commonname_greek = null;
        $this->commonname_greek_u = null;
        $this->commonname_russian_u = null;
        $this->commonname_russian = null;
        $this->commonname_swedish = null;
        $this->class_russian = null;
        $this->etymologyclass = null;
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
        return (string) $this->exportTo(OrdersPeer::DEFAULT_STRING_FORMAT);
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
