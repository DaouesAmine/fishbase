<?php


/**
 * Base class that represents a row from the 'fbusers' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFbusers extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FbusersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FbusersPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the username field.
     * @var        string
     */
    protected $username;

    /**
     * The value for the firstname field.
     * @var        string
     */
    protected $firstname;

    /**
     * The value for the surname field.
     * @var        string
     */
    protected $surname;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the institute field.
     * @var        string
     */
    protected $institute;

    /**
     * The value for the position field.
     * @var        string
     */
    protected $position;

    /**
     * The value for the useraddress field.
     * @var        string
     */
    protected $useraddress;

    /**
     * The value for the useraddress2 field.
     * @var        string
     */
    protected $useraddress2;

    /**
     * The value for the usertype field.
     * @var        string
     */
    protected $usertype;

    /**
     * The value for the usertypeorder field.
     * Note: this column has a database default value of: 0
     * @var        double
     */
    protected $usertypeorder;

    /**
     * The value for the library field.
     * @var        int
     */
    protected $library;

    /**
     * The value for the museum field.
     * @var        int
     */
    protected $museum;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the mailcountry field.
     * @var        string
     */
    protected $mailcountry;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the stateprovince field.
     * @var        string
     */
    protected $stateprovince;

    /**
     * The value for the postalcode field.
     * @var        string
     */
    protected $postalcode;

    /**
     * The value for the v1_0 field.
     * @var        int
     */
    protected $v1_0;

    /**
     * The value for the payment1_0 field.
     * @var        string
     */
    protected $payment1_0;

    /**
     * The value for the dateshipped1_0 field.
     * @var        string
     */
    protected $dateshipped1_0;

    /**
     * The value for the v2_0 field.
     * @var        int
     */
    protected $v2_0;

    /**
     * The value for the payment2_0 field.
     * @var        string
     */
    protected $payment2_0;

    /**
     * The value for the dateshipped2_0 field.
     * @var        string
     */
    protected $dateshipped2_0;

    /**
     * The value for the v3_0 field.
     * @var        int
     */
    protected $v3_0;

    /**
     * The value for the payment3_0 field.
     * @var        string
     */
    protected $payment3_0;

    /**
     * The value for the dateshipped3_0 field.
     * @var        string
     */
    protected $dateshipped3_0;

    /**
     * The value for the v4_0 field.
     * @var        int
     */
    protected $v4_0;

    /**
     * The value for the payment4_0 field.
     * @var        string
     */
    protected $payment4_0;

    /**
     * The value for the dateshipped4_0 field.
     * @var        string
     */
    protected $dateshipped4_0;

    /**
     * The value for the v5_0 field.
     * @var        int
     */
    protected $v5_0;

    /**
     * The value for the payment5_0 field.
     * @var        string
     */
    protected $payment5_0;

    /**
     * The value for the dateshipped5_0 field.
     * @var        string
     */
    protected $dateshipped5_0;

    /**
     * The value for the v6_0 field.
     * @var        int
     */
    protected $v6_0;

    /**
     * The value for the payment6_0 field.
     * @var        string
     */
    protected $payment6_0;

    /**
     * The value for the dateshipped6_0 field.
     * @var        string
     */
    protected $dateshipped6_0;

    /**
     * The value for the v7_0 field.
     * @var        int
     */
    protected $v7_0;

    /**
     * The value for the payment7_0 field.
     * @var        string
     */
    protected $payment7_0;

    /**
     * The value for the dateshipped7_0 field.
     * @var        string
     */
    protected $dateshipped7_0;

    /**
     * The value for the v7_1 field.
     * @var        int
     */
    protected $v7_1;

    /**
     * The value for the payment7_1 field.
     * @var        string
     */
    protected $payment7_1;

    /**
     * The value for the dateshipped7_1 field.
     * @var        string
     */
    protected $dateshipped7_1;

    /**
     * The value for the e_mail field.
     * @var        string
     */
    protected $e_mail;

    /**
     * The value for the webpage field.
     * @var        string
     */
    protected $webpage;

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
     * The value for the contactby field.
     * @var        string
     */
    protected $contactby;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the copiesnum field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $copiesnum;

    /**
     * The value for the copies2k field.
     * @var        int
     */
    protected $copies2k;

    /**
     * The value for the subscriber field.
     * @var        int
     */
    protected $subscriber;

    /**
     * The value for the collaborator field.
     * @var        int
     */
    protected $collaborator;

    /**
     * The value for the year field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $year;

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
        $this->usertypeorder = 0;
        $this->copiesnum = 0;
        $this->year = 0;
    }

    /**
     * Initializes internal state of BaseFbusers object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [username] column value.
     *
     * @return string
     */
    public function getUsername()
    {

        return $this->username;
    }

    /**
     * Get the [firstname] column value.
     *
     * @return string
     */
    public function getFirstname()
    {

        return $this->firstname;
    }

    /**
     * Get the [surname] column value.
     *
     * @return string
     */
    public function getSurname()
    {

        return $this->surname;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [institute] column value.
     *
     * @return string
     */
    public function getInstitute()
    {

        return $this->institute;
    }

    /**
     * Get the [position] column value.
     *
     * @return string
     */
    public function getPosition()
    {

        return $this->position;
    }

    /**
     * Get the [useraddress] column value.
     *
     * @return string
     */
    public function getUseraddress()
    {

        return $this->useraddress;
    }

    /**
     * Get the [useraddress2] column value.
     *
     * @return string
     */
    public function getUseraddress2()
    {

        return $this->useraddress2;
    }

    /**
     * Get the [usertype] column value.
     *
     * @return string
     */
    public function getUsertype()
    {

        return $this->usertype;
    }

    /**
     * Get the [usertypeorder] column value.
     *
     * @return double
     */
    public function getUsertypeorder()
    {

        return $this->usertypeorder;
    }

    /**
     * Get the [library] column value.
     *
     * @return int
     */
    public function getLibrary()
    {

        return $this->library;
    }

    /**
     * Get the [museum] column value.
     *
     * @return int
     */
    public function getMuseum()
    {

        return $this->museum;
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
     * Get the [mailcountry] column value.
     *
     * @return string
     */
    public function getMailcountry()
    {

        return $this->mailcountry;
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
     * Get the [stateprovince] column value.
     *
     * @return string
     */
    public function getStateprovince()
    {

        return $this->stateprovince;
    }

    /**
     * Get the [postalcode] column value.
     *
     * @return string
     */
    public function getPostalcode()
    {

        return $this->postalcode;
    }

    /**
     * Get the [v1_0] column value.
     *
     * @return int
     */
    public function getV10()
    {

        return $this->v1_0;
    }

    /**
     * Get the [payment1_0] column value.
     *
     * @return string
     */
    public function getPayment10()
    {

        return $this->payment1_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped1_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped10($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped1_0 === null) {
            return null;
        }

        if ($this->dateshipped1_0 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped1_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped1_0, true), $x);
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
     * Get the [v2_0] column value.
     *
     * @return int
     */
    public function getV20()
    {

        return $this->v2_0;
    }

    /**
     * Get the [payment2_0] column value.
     *
     * @return string
     */
    public function getPayment20()
    {

        return $this->payment2_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped2_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped20($format = '%x')
    {
        if ($this->dateshipped2_0 === null) {
            return null;
        }

        if ($this->dateshipped2_0 === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped2_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped2_0, true), $x);
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
     * Get the [v3_0] column value.
     *
     * @return int
     */
    public function getV30()
    {

        return $this->v3_0;
    }

    /**
     * Get the [payment3_0] column value.
     *
     * @return string
     */
    public function getPayment30()
    {

        return $this->payment3_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped3_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped30($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped3_0 === null) {
            return null;
        }

        if ($this->dateshipped3_0 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped3_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped3_0, true), $x);
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
     * Get the [v4_0] column value.
     *
     * @return int
     */
    public function getV40()
    {

        return $this->v4_0;
    }

    /**
     * Get the [payment4_0] column value.
     *
     * @return string
     */
    public function getPayment40()
    {

        return $this->payment4_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped4_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped40($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped4_0 === null) {
            return null;
        }

        if ($this->dateshipped4_0 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped4_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped4_0, true), $x);
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
     * Get the [v5_0] column value.
     *
     * @return int
     */
    public function getV50()
    {

        return $this->v5_0;
    }

    /**
     * Get the [payment5_0] column value.
     *
     * @return string
     */
    public function getPayment50()
    {

        return $this->payment5_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped5_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped50($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped5_0 === null) {
            return null;
        }

        if ($this->dateshipped5_0 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped5_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped5_0, true), $x);
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
     * Get the [v6_0] column value.
     *
     * @return int
     */
    public function getV60()
    {

        return $this->v6_0;
    }

    /**
     * Get the [payment6_0] column value.
     *
     * @return string
     */
    public function getPayment60()
    {

        return $this->payment6_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped6_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped60($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped6_0 === null) {
            return null;
        }

        if ($this->dateshipped6_0 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped6_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped6_0, true), $x);
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
     * Get the [v7_0] column value.
     *
     * @return int
     */
    public function getV70()
    {

        return $this->v7_0;
    }

    /**
     * Get the [payment7_0] column value.
     *
     * @return string
     */
    public function getPayment70()
    {

        return $this->payment7_0;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped7_0] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped70($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped7_0 === null) {
            return null;
        }

        if ($this->dateshipped7_0 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped7_0);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped7_0, true), $x);
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
     * Get the [v7_1] column value.
     *
     * @return int
     */
    public function getV71()
    {

        return $this->v7_1;
    }

    /**
     * Get the [payment7_1] column value.
     *
     * @return string
     */
    public function getPayment71()
    {

        return $this->payment7_1;
    }

    /**
     * Get the [optionally formatted] temporal [dateshipped7_1] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateshipped71($format = 'Y-m-d H:i:s')
    {
        if ($this->dateshipped7_1 === null) {
            return null;
        }

        if ($this->dateshipped7_1 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateshipped7_1);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateshipped7_1, true), $x);
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
     * Get the [e_mail] column value.
     *
     * @return string
     */
    public function getEMail()
    {

        return $this->e_mail;
    }

    /**
     * Get the [webpage] column value.
     *
     * @return string
     */
    public function getWebpage()
    {

        return $this->webpage;
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
     * Get the [contactby] column value.
     *
     * @return string
     */
    public function getContactby()
    {

        return $this->contactby;
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
     * Get the [copiesnum] column value.
     *
     * @return int
     */
    public function getCopiesnum()
    {

        return $this->copiesnum;
    }

    /**
     * Get the [copies2k] column value.
     *
     * @return int
     */
    public function getCopies2k()
    {

        return $this->copies2k;
    }

    /**
     * Get the [subscriber] column value.
     *
     * @return int
     */
    public function getSubscriber()
    {

        return $this->subscriber;
    }

    /**
     * Get the [collaborator] column value.
     *
     * @return int
     */
    public function getCollaborator()
    {

        return $this->collaborator;
    }

    /**
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
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
     * Set the value of [username] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setUsername($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->username !== $v) {
            $this->username = $v;
            $this->modifiedColumns[] = FbusersPeer::USERNAME;
        }


        return $this;
    } // setUsername()

    /**
     * Set the value of [firstname] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->firstname !== $v) {
            $this->firstname = $v;
            $this->modifiedColumns[] = FbusersPeer::FIRSTNAME;
        }


        return $this;
    } // setFirstname()

    /**
     * Set the value of [surname] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setSurname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surname !== $v) {
            $this->surname = $v;
            $this->modifiedColumns[] = FbusersPeer::SURNAME;
        }


        return $this;
    } // setSurname()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = FbusersPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [institute] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setInstitute($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->institute !== $v) {
            $this->institute = $v;
            $this->modifiedColumns[] = FbusersPeer::INSTITUTE;
        }


        return $this;
    } // setInstitute()

    /**
     * Set the value of [position] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position !== $v) {
            $this->position = $v;
            $this->modifiedColumns[] = FbusersPeer::POSITION;
        }


        return $this;
    } // setPosition()

    /**
     * Set the value of [useraddress] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setUseraddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->useraddress !== $v) {
            $this->useraddress = $v;
            $this->modifiedColumns[] = FbusersPeer::USERADDRESS;
        }


        return $this;
    } // setUseraddress()

    /**
     * Set the value of [useraddress2] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setUseraddress2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->useraddress2 !== $v) {
            $this->useraddress2 = $v;
            $this->modifiedColumns[] = FbusersPeer::USERADDRESS2;
        }


        return $this;
    } // setUseraddress2()

    /**
     * Set the value of [usertype] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setUsertype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->usertype !== $v) {
            $this->usertype = $v;
            $this->modifiedColumns[] = FbusersPeer::USERTYPE;
        }


        return $this;
    } // setUsertype()

    /**
     * Set the value of [usertypeorder] column.
     *
     * @param  double $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setUsertypeorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->usertypeorder !== $v) {
            $this->usertypeorder = $v;
            $this->modifiedColumns[] = FbusersPeer::USERTYPEORDER;
        }


        return $this;
    } // setUsertypeorder()

    /**
     * Set the value of [library] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setLibrary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->library !== $v) {
            $this->library = $v;
            $this->modifiedColumns[] = FbusersPeer::LIBRARY;
        }


        return $this;
    } // setLibrary()

    /**
     * Set the value of [museum] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setMuseum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->museum !== $v) {
            $this->museum = $v;
            $this->modifiedColumns[] = FbusersPeer::MUSEUM;
        }


        return $this;
    } // setMuseum()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = FbusersPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [mailcountry] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setMailcountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mailcountry !== $v) {
            $this->mailcountry = $v;
            $this->modifiedColumns[] = FbusersPeer::MAILCOUNTRY;
        }


        return $this;
    } // setMailcountry()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = FbusersPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [stateprovince] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setStateprovince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stateprovince !== $v) {
            $this->stateprovince = $v;
            $this->modifiedColumns[] = FbusersPeer::STATEPROVINCE;
        }


        return $this;
    } // setStateprovince()

    /**
     * Set the value of [postalcode] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPostalcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->postalcode !== $v) {
            $this->postalcode = $v;
            $this->modifiedColumns[] = FbusersPeer::POSTALCODE;
        }


        return $this;
    } // setPostalcode()

    /**
     * Set the value of [v1_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV10($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v1_0 !== $v) {
            $this->v1_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V1_0;
        }


        return $this;
    } // setV10()

    /**
     * Set the value of [payment1_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment10($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment1_0 !== $v) {
            $this->payment1_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT1_0;
        }


        return $this;
    } // setPayment10()

    /**
     * Sets the value of [dateshipped1_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped10($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped1_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped1_0 !== null && $tmpDt = new DateTime($this->dateshipped1_0)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped1_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED1_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped10()

    /**
     * Set the value of [v2_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV20($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v2_0 !== $v) {
            $this->v2_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V2_0;
        }


        return $this;
    } // setV20()

    /**
     * Set the value of [payment2_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment20($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment2_0 !== $v) {
            $this->payment2_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT2_0;
        }


        return $this;
    } // setPayment20()

    /**
     * Sets the value of [dateshipped2_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped20($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped2_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped2_0 !== null && $tmpDt = new DateTime($this->dateshipped2_0)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped2_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED2_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped20()

    /**
     * Set the value of [v3_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV30($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v3_0 !== $v) {
            $this->v3_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V3_0;
        }


        return $this;
    } // setV30()

    /**
     * Set the value of [payment3_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment30($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment3_0 !== $v) {
            $this->payment3_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT3_0;
        }


        return $this;
    } // setPayment30()

    /**
     * Sets the value of [dateshipped3_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped30($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped3_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped3_0 !== null && $tmpDt = new DateTime($this->dateshipped3_0)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped3_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED3_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped30()

    /**
     * Set the value of [v4_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV40($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v4_0 !== $v) {
            $this->v4_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V4_0;
        }


        return $this;
    } // setV40()

    /**
     * Set the value of [payment4_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment40($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment4_0 !== $v) {
            $this->payment4_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT4_0;
        }


        return $this;
    } // setPayment40()

    /**
     * Sets the value of [dateshipped4_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped40($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped4_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped4_0 !== null && $tmpDt = new DateTime($this->dateshipped4_0)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped4_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED4_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped40()

    /**
     * Set the value of [v5_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV50($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v5_0 !== $v) {
            $this->v5_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V5_0;
        }


        return $this;
    } // setV50()

    /**
     * Set the value of [payment5_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment50($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment5_0 !== $v) {
            $this->payment5_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT5_0;
        }


        return $this;
    } // setPayment50()

    /**
     * Sets the value of [dateshipped5_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped50($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped5_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped5_0 !== null && $tmpDt = new DateTime($this->dateshipped5_0)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped5_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED5_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped50()

    /**
     * Set the value of [v6_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV60($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v6_0 !== $v) {
            $this->v6_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V6_0;
        }


        return $this;
    } // setV60()

    /**
     * Set the value of [payment6_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment60($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment6_0 !== $v) {
            $this->payment6_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT6_0;
        }


        return $this;
    } // setPayment60()

    /**
     * Sets the value of [dateshipped6_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped60($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped6_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped6_0 !== null && $tmpDt = new DateTime($this->dateshipped6_0)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped6_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED6_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped60()

    /**
     * Set the value of [v7_0] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV70($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v7_0 !== $v) {
            $this->v7_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::V7_0;
        }


        return $this;
    } // setV70()

    /**
     * Set the value of [payment7_0] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment70($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment7_0 !== $v) {
            $this->payment7_0 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT7_0;
        }


        return $this;
    } // setPayment70()

    /**
     * Sets the value of [dateshipped7_0] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped70($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped7_0 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped7_0 !== null && $tmpDt = new DateTime($this->dateshipped7_0)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped7_0 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED7_0;
            }
        } // if either are not null


        return $this;
    } // setDateshipped70()

    /**
     * Set the value of [v7_1] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setV71($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->v7_1 !== $v) {
            $this->v7_1 = $v;
            $this->modifiedColumns[] = FbusersPeer::V7_1;
        }


        return $this;
    } // setV71()

    /**
     * Set the value of [payment7_1] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setPayment71($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment7_1 !== $v) {
            $this->payment7_1 = $v;
            $this->modifiedColumns[] = FbusersPeer::PAYMENT7_1;
        }


        return $this;
    } // setPayment71()

    /**
     * Sets the value of [dateshipped7_1] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateshipped71($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateshipped7_1 !== null || $dt !== null) {
            $currentDateAsString = ($this->dateshipped7_1 !== null && $tmpDt = new DateTime($this->dateshipped7_1)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateshipped7_1 = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATESHIPPED7_1;
            }
        } // if either are not null


        return $this;
    } // setDateshipped71()

    /**
     * Set the value of [e_mail] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setEMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->e_mail !== $v) {
            $this->e_mail = $v;
            $this->modifiedColumns[] = FbusersPeer::E_MAIL;
        }


        return $this;
    } // setEMail()

    /**
     * Set the value of [webpage] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setWebpage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->webpage !== $v) {
            $this->webpage = $v;
            $this->modifiedColumns[] = FbusersPeer::WEBPAGE;
        }


        return $this;
    } // setWebpage()

    /**
     * Set the value of [telephone] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = FbusersPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = FbusersPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [contactby] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setContactby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contactby !== $v) {
            $this->contactby = $v;
            $this->modifiedColumns[] = FbusersPeer::CONTACTBY;
        }


        return $this;
    } // setContactby()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = FbusersPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [copiesnum] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setCopiesnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->copiesnum !== $v) {
            $this->copiesnum = $v;
            $this->modifiedColumns[] = FbusersPeer::COPIESNUM;
        }


        return $this;
    } // setCopiesnum()

    /**
     * Set the value of [copies2k] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setCopies2k($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->copies2k !== $v) {
            $this->copies2k = $v;
            $this->modifiedColumns[] = FbusersPeer::COPIES2K;
        }


        return $this;
    } // setCopies2k()

    /**
     * Set the value of [subscriber] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setSubscriber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->subscriber !== $v) {
            $this->subscriber = $v;
            $this->modifiedColumns[] = FbusersPeer::SUBSCRIBER;
        }


        return $this;
    } // setSubscriber()

    /**
     * Set the value of [collaborator] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setCollaborator($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->collaborator !== $v) {
            $this->collaborator = $v;
            $this->modifiedColumns[] = FbusersPeer::COLLABORATOR;
        }


        return $this;
    } // setCollaborator()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = FbusersPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = FbusersPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Fbusers The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = FbusersPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Fbusers The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = FbusersPeer::TS;
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
            if ($this->usertypeorder !== 0) {
                return false;
            }

            if ($this->copiesnum !== 0) {
                return false;
            }

            if ($this->year !== 0) {
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

            $this->username = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->firstname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->surname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->title = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->institute = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->position = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->useraddress = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->useraddress2 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->usertype = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->usertypeorder = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->library = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->museum = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->city = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->mailcountry = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->c_code = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->stateprovince = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->postalcode = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->v1_0 = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->payment1_0 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->dateshipped1_0 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->v2_0 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->payment2_0 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->dateshipped2_0 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->v3_0 = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->payment3_0 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->dateshipped3_0 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->v4_0 = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->payment4_0 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->dateshipped4_0 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->v5_0 = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->payment5_0 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->dateshipped5_0 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->v6_0 = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->payment6_0 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->dateshipped6_0 = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->v7_0 = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->payment7_0 = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->dateshipped7_0 = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->v7_1 = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->payment7_1 = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->dateshipped7_1 = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->e_mail = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->webpage = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->telephone = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->fax = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->contactby = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->comment = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->copiesnum = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->copies2k = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->subscriber = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->collaborator = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->year = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->entered = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->dateentered = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->modified = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->datemodified = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->ts = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 57; // 57 = FbusersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Fbusers object", $e);
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
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FbusersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FbusersQuery::create()
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
            $con = Propel::getConnection(FbusersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FbusersPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(FbusersPeer::USERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`UserName`';
        }
        if ($this->isColumnModified(FbusersPeer::FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`FirstName`';
        }
        if ($this->isColumnModified(FbusersPeer::SURNAME)) {
            $modifiedColumns[':p' . $index++]  = '`Surname`';
        }
        if ($this->isColumnModified(FbusersPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`Title`';
        }
        if ($this->isColumnModified(FbusersPeer::INSTITUTE)) {
            $modifiedColumns[':p' . $index++]  = '`Institute`';
        }
        if ($this->isColumnModified(FbusersPeer::POSITION)) {
            $modifiedColumns[':p' . $index++]  = '`Position`';
        }
        if ($this->isColumnModified(FbusersPeer::USERADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`UserAddress`';
        }
        if ($this->isColumnModified(FbusersPeer::USERADDRESS2)) {
            $modifiedColumns[':p' . $index++]  = '`UserAddress2`';
        }
        if ($this->isColumnModified(FbusersPeer::USERTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`UserType`';
        }
        if ($this->isColumnModified(FbusersPeer::USERTYPEORDER)) {
            $modifiedColumns[':p' . $index++]  = '`UserTypeOrder`';
        }
        if ($this->isColumnModified(FbusersPeer::LIBRARY)) {
            $modifiedColumns[':p' . $index++]  = '`Library`';
        }
        if ($this->isColumnModified(FbusersPeer::MUSEUM)) {
            $modifiedColumns[':p' . $index++]  = '`Museum`';
        }
        if ($this->isColumnModified(FbusersPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`City`';
        }
        if ($this->isColumnModified(FbusersPeer::MAILCOUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`MailCountry`';
        }
        if ($this->isColumnModified(FbusersPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(FbusersPeer::STATEPROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`StateProvince`';
        }
        if ($this->isColumnModified(FbusersPeer::POSTALCODE)) {
            $modifiedColumns[':p' . $index++]  = '`PostalCode`';
        }
        if ($this->isColumnModified(FbusersPeer::V1_0)) {
            $modifiedColumns[':p' . $index++]  = '`V1_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT1_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment1_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED1_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped1_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V2_0)) {
            $modifiedColumns[':p' . $index++]  = '`V2_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT2_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment2_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED2_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped2_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V3_0)) {
            $modifiedColumns[':p' . $index++]  = '`V3_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT3_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment3_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED3_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped3_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V4_0)) {
            $modifiedColumns[':p' . $index++]  = '`V4_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT4_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment4_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED4_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped4_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V5_0)) {
            $modifiedColumns[':p' . $index++]  = '`V5_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT5_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment5_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED5_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped5_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V6_0)) {
            $modifiedColumns[':p' . $index++]  = '`V6_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT6_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment6_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED6_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped6_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V7_0)) {
            $modifiedColumns[':p' . $index++]  = '`V7_0`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT7_0)) {
            $modifiedColumns[':p' . $index++]  = '`Payment7_0`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED7_0)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped7_0`';
        }
        if ($this->isColumnModified(FbusersPeer::V7_1)) {
            $modifiedColumns[':p' . $index++]  = '`V7_1`';
        }
        if ($this->isColumnModified(FbusersPeer::PAYMENT7_1)) {
            $modifiedColumns[':p' . $index++]  = '`Payment7_1`';
        }
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED7_1)) {
            $modifiedColumns[':p' . $index++]  = '`DateShipped7_1`';
        }
        if ($this->isColumnModified(FbusersPeer::E_MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`E_Mail`';
        }
        if ($this->isColumnModified(FbusersPeer::WEBPAGE)) {
            $modifiedColumns[':p' . $index++]  = '`WebPage`';
        }
        if ($this->isColumnModified(FbusersPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`Telephone`';
        }
        if ($this->isColumnModified(FbusersPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`FAX`';
        }
        if ($this->isColumnModified(FbusersPeer::CONTACTBY)) {
            $modifiedColumns[':p' . $index++]  = '`ContactBy`';
        }
        if ($this->isColumnModified(FbusersPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(FbusersPeer::COPIESNUM)) {
            $modifiedColumns[':p' . $index++]  = '`CopiesNum`';
        }
        if ($this->isColumnModified(FbusersPeer::COPIES2K)) {
            $modifiedColumns[':p' . $index++]  = '`Copies2k`';
        }
        if ($this->isColumnModified(FbusersPeer::SUBSCRIBER)) {
            $modifiedColumns[':p' . $index++]  = '`Subscriber`';
        }
        if ($this->isColumnModified(FbusersPeer::COLLABORATOR)) {
            $modifiedColumns[':p' . $index++]  = '`Collaborator`';
        }
        if ($this->isColumnModified(FbusersPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(FbusersPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(FbusersPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(FbusersPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(FbusersPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(FbusersPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `fbusers` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`UserName`':
                        $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
                        break;
                    case '`FirstName`':
                        $stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
                        break;
                    case '`Surname`':
                        $stmt->bindValue($identifier, $this->surname, PDO::PARAM_STR);
                        break;
                    case '`Title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`Institute`':
                        $stmt->bindValue($identifier, $this->institute, PDO::PARAM_STR);
                        break;
                    case '`Position`':
                        $stmt->bindValue($identifier, $this->position, PDO::PARAM_STR);
                        break;
                    case '`UserAddress`':
                        $stmt->bindValue($identifier, $this->useraddress, PDO::PARAM_STR);
                        break;
                    case '`UserAddress2`':
                        $stmt->bindValue($identifier, $this->useraddress2, PDO::PARAM_STR);
                        break;
                    case '`UserType`':
                        $stmt->bindValue($identifier, $this->usertype, PDO::PARAM_STR);
                        break;
                    case '`UserTypeOrder`':
                        $stmt->bindValue($identifier, $this->usertypeorder, PDO::PARAM_STR);
                        break;
                    case '`Library`':
                        $stmt->bindValue($identifier, $this->library, PDO::PARAM_INT);
                        break;
                    case '`Museum`':
                        $stmt->bindValue($identifier, $this->museum, PDO::PARAM_INT);
                        break;
                    case '`City`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`MailCountry`':
                        $stmt->bindValue($identifier, $this->mailcountry, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`StateProvince`':
                        $stmt->bindValue($identifier, $this->stateprovince, PDO::PARAM_STR);
                        break;
                    case '`PostalCode`':
                        $stmt->bindValue($identifier, $this->postalcode, PDO::PARAM_STR);
                        break;
                    case '`V1_0`':
                        $stmt->bindValue($identifier, $this->v1_0, PDO::PARAM_INT);
                        break;
                    case '`Payment1_0`':
                        $stmt->bindValue($identifier, $this->payment1_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped1_0`':
                        $stmt->bindValue($identifier, $this->dateshipped1_0, PDO::PARAM_STR);
                        break;
                    case '`V2_0`':
                        $stmt->bindValue($identifier, $this->v2_0, PDO::PARAM_INT);
                        break;
                    case '`Payment2_0`':
                        $stmt->bindValue($identifier, $this->payment2_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped2_0`':
                        $stmt->bindValue($identifier, $this->dateshipped2_0, PDO::PARAM_STR);
                        break;
                    case '`V3_0`':
                        $stmt->bindValue($identifier, $this->v3_0, PDO::PARAM_INT);
                        break;
                    case '`Payment3_0`':
                        $stmt->bindValue($identifier, $this->payment3_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped3_0`':
                        $stmt->bindValue($identifier, $this->dateshipped3_0, PDO::PARAM_STR);
                        break;
                    case '`V4_0`':
                        $stmt->bindValue($identifier, $this->v4_0, PDO::PARAM_INT);
                        break;
                    case '`Payment4_0`':
                        $stmt->bindValue($identifier, $this->payment4_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped4_0`':
                        $stmt->bindValue($identifier, $this->dateshipped4_0, PDO::PARAM_STR);
                        break;
                    case '`V5_0`':
                        $stmt->bindValue($identifier, $this->v5_0, PDO::PARAM_INT);
                        break;
                    case '`Payment5_0`':
                        $stmt->bindValue($identifier, $this->payment5_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped5_0`':
                        $stmt->bindValue($identifier, $this->dateshipped5_0, PDO::PARAM_STR);
                        break;
                    case '`V6_0`':
                        $stmt->bindValue($identifier, $this->v6_0, PDO::PARAM_INT);
                        break;
                    case '`Payment6_0`':
                        $stmt->bindValue($identifier, $this->payment6_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped6_0`':
                        $stmt->bindValue($identifier, $this->dateshipped6_0, PDO::PARAM_STR);
                        break;
                    case '`V7_0`':
                        $stmt->bindValue($identifier, $this->v7_0, PDO::PARAM_INT);
                        break;
                    case '`Payment7_0`':
                        $stmt->bindValue($identifier, $this->payment7_0, PDO::PARAM_STR);
                        break;
                    case '`DateShipped7_0`':
                        $stmt->bindValue($identifier, $this->dateshipped7_0, PDO::PARAM_STR);
                        break;
                    case '`V7_1`':
                        $stmt->bindValue($identifier, $this->v7_1, PDO::PARAM_INT);
                        break;
                    case '`Payment7_1`':
                        $stmt->bindValue($identifier, $this->payment7_1, PDO::PARAM_STR);
                        break;
                    case '`DateShipped7_1`':
                        $stmt->bindValue($identifier, $this->dateshipped7_1, PDO::PARAM_STR);
                        break;
                    case '`E_Mail`':
                        $stmt->bindValue($identifier, $this->e_mail, PDO::PARAM_STR);
                        break;
                    case '`WebPage`':
                        $stmt->bindValue($identifier, $this->webpage, PDO::PARAM_STR);
                        break;
                    case '`Telephone`':
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`FAX`':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`ContactBy`':
                        $stmt->bindValue($identifier, $this->contactby, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`CopiesNum`':
                        $stmt->bindValue($identifier, $this->copiesnum, PDO::PARAM_INT);
                        break;
                    case '`Copies2k`':
                        $stmt->bindValue($identifier, $this->copies2k, PDO::PARAM_INT);
                        break;
                    case '`Subscriber`':
                        $stmt->bindValue($identifier, $this->subscriber, PDO::PARAM_INT);
                        break;
                    case '`Collaborator`':
                        $stmt->bindValue($identifier, $this->collaborator, PDO::PARAM_INT);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
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


            if (($retval = FbusersPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FbusersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUsername();
                break;
            case 1:
                return $this->getFirstname();
                break;
            case 2:
                return $this->getSurname();
                break;
            case 3:
                return $this->getTitle();
                break;
            case 4:
                return $this->getInstitute();
                break;
            case 5:
                return $this->getPosition();
                break;
            case 6:
                return $this->getUseraddress();
                break;
            case 7:
                return $this->getUseraddress2();
                break;
            case 8:
                return $this->getUsertype();
                break;
            case 9:
                return $this->getUsertypeorder();
                break;
            case 10:
                return $this->getLibrary();
                break;
            case 11:
                return $this->getMuseum();
                break;
            case 12:
                return $this->getCity();
                break;
            case 13:
                return $this->getMailcountry();
                break;
            case 14:
                return $this->getCCode();
                break;
            case 15:
                return $this->getStateprovince();
                break;
            case 16:
                return $this->getPostalcode();
                break;
            case 17:
                return $this->getV10();
                break;
            case 18:
                return $this->getPayment10();
                break;
            case 19:
                return $this->getDateshipped10();
                break;
            case 20:
                return $this->getV20();
                break;
            case 21:
                return $this->getPayment20();
                break;
            case 22:
                return $this->getDateshipped20();
                break;
            case 23:
                return $this->getV30();
                break;
            case 24:
                return $this->getPayment30();
                break;
            case 25:
                return $this->getDateshipped30();
                break;
            case 26:
                return $this->getV40();
                break;
            case 27:
                return $this->getPayment40();
                break;
            case 28:
                return $this->getDateshipped40();
                break;
            case 29:
                return $this->getV50();
                break;
            case 30:
                return $this->getPayment50();
                break;
            case 31:
                return $this->getDateshipped50();
                break;
            case 32:
                return $this->getV60();
                break;
            case 33:
                return $this->getPayment60();
                break;
            case 34:
                return $this->getDateshipped60();
                break;
            case 35:
                return $this->getV70();
                break;
            case 36:
                return $this->getPayment70();
                break;
            case 37:
                return $this->getDateshipped70();
                break;
            case 38:
                return $this->getV71();
                break;
            case 39:
                return $this->getPayment71();
                break;
            case 40:
                return $this->getDateshipped71();
                break;
            case 41:
                return $this->getEMail();
                break;
            case 42:
                return $this->getWebpage();
                break;
            case 43:
                return $this->getTelephone();
                break;
            case 44:
                return $this->getFax();
                break;
            case 45:
                return $this->getContactby();
                break;
            case 46:
                return $this->getComment();
                break;
            case 47:
                return $this->getCopiesnum();
                break;
            case 48:
                return $this->getCopies2k();
                break;
            case 49:
                return $this->getSubscriber();
                break;
            case 50:
                return $this->getCollaborator();
                break;
            case 51:
                return $this->getYear();
                break;
            case 52:
                return $this->getEntered();
                break;
            case 53:
                return $this->getDateentered();
                break;
            case 54:
                return $this->getModified();
                break;
            case 55:
                return $this->getDatemodified();
                break;
            case 56:
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
        if (isset($alreadyDumpedObjects['Fbusers'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Fbusers'][serialize($this->getPrimaryKey())] = true;
        $keys = FbusersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUsername(),
            $keys[1] => $this->getFirstname(),
            $keys[2] => $this->getSurname(),
            $keys[3] => $this->getTitle(),
            $keys[4] => $this->getInstitute(),
            $keys[5] => $this->getPosition(),
            $keys[6] => $this->getUseraddress(),
            $keys[7] => $this->getUseraddress2(),
            $keys[8] => $this->getUsertype(),
            $keys[9] => $this->getUsertypeorder(),
            $keys[10] => $this->getLibrary(),
            $keys[11] => $this->getMuseum(),
            $keys[12] => $this->getCity(),
            $keys[13] => $this->getMailcountry(),
            $keys[14] => $this->getCCode(),
            $keys[15] => $this->getStateprovince(),
            $keys[16] => $this->getPostalcode(),
            $keys[17] => $this->getV10(),
            $keys[18] => $this->getPayment10(),
            $keys[19] => $this->getDateshipped10(),
            $keys[20] => $this->getV20(),
            $keys[21] => $this->getPayment20(),
            $keys[22] => $this->getDateshipped20(),
            $keys[23] => $this->getV30(),
            $keys[24] => $this->getPayment30(),
            $keys[25] => $this->getDateshipped30(),
            $keys[26] => $this->getV40(),
            $keys[27] => $this->getPayment40(),
            $keys[28] => $this->getDateshipped40(),
            $keys[29] => $this->getV50(),
            $keys[30] => $this->getPayment50(),
            $keys[31] => $this->getDateshipped50(),
            $keys[32] => $this->getV60(),
            $keys[33] => $this->getPayment60(),
            $keys[34] => $this->getDateshipped60(),
            $keys[35] => $this->getV70(),
            $keys[36] => $this->getPayment70(),
            $keys[37] => $this->getDateshipped70(),
            $keys[38] => $this->getV71(),
            $keys[39] => $this->getPayment71(),
            $keys[40] => $this->getDateshipped71(),
            $keys[41] => $this->getEMail(),
            $keys[42] => $this->getWebpage(),
            $keys[43] => $this->getTelephone(),
            $keys[44] => $this->getFax(),
            $keys[45] => $this->getContactby(),
            $keys[46] => $this->getComment(),
            $keys[47] => $this->getCopiesnum(),
            $keys[48] => $this->getCopies2k(),
            $keys[49] => $this->getSubscriber(),
            $keys[50] => $this->getCollaborator(),
            $keys[51] => $this->getYear(),
            $keys[52] => $this->getEntered(),
            $keys[53] => $this->getDateentered(),
            $keys[54] => $this->getModified(),
            $keys[55] => $this->getDatemodified(),
            $keys[56] => $this->getTs(),
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
        $pos = FbusersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUsername($value);
                break;
            case 1:
                $this->setFirstname($value);
                break;
            case 2:
                $this->setSurname($value);
                break;
            case 3:
                $this->setTitle($value);
                break;
            case 4:
                $this->setInstitute($value);
                break;
            case 5:
                $this->setPosition($value);
                break;
            case 6:
                $this->setUseraddress($value);
                break;
            case 7:
                $this->setUseraddress2($value);
                break;
            case 8:
                $this->setUsertype($value);
                break;
            case 9:
                $this->setUsertypeorder($value);
                break;
            case 10:
                $this->setLibrary($value);
                break;
            case 11:
                $this->setMuseum($value);
                break;
            case 12:
                $this->setCity($value);
                break;
            case 13:
                $this->setMailcountry($value);
                break;
            case 14:
                $this->setCCode($value);
                break;
            case 15:
                $this->setStateprovince($value);
                break;
            case 16:
                $this->setPostalcode($value);
                break;
            case 17:
                $this->setV10($value);
                break;
            case 18:
                $this->setPayment10($value);
                break;
            case 19:
                $this->setDateshipped10($value);
                break;
            case 20:
                $this->setV20($value);
                break;
            case 21:
                $this->setPayment20($value);
                break;
            case 22:
                $this->setDateshipped20($value);
                break;
            case 23:
                $this->setV30($value);
                break;
            case 24:
                $this->setPayment30($value);
                break;
            case 25:
                $this->setDateshipped30($value);
                break;
            case 26:
                $this->setV40($value);
                break;
            case 27:
                $this->setPayment40($value);
                break;
            case 28:
                $this->setDateshipped40($value);
                break;
            case 29:
                $this->setV50($value);
                break;
            case 30:
                $this->setPayment50($value);
                break;
            case 31:
                $this->setDateshipped50($value);
                break;
            case 32:
                $this->setV60($value);
                break;
            case 33:
                $this->setPayment60($value);
                break;
            case 34:
                $this->setDateshipped60($value);
                break;
            case 35:
                $this->setV70($value);
                break;
            case 36:
                $this->setPayment70($value);
                break;
            case 37:
                $this->setDateshipped70($value);
                break;
            case 38:
                $this->setV71($value);
                break;
            case 39:
                $this->setPayment71($value);
                break;
            case 40:
                $this->setDateshipped71($value);
                break;
            case 41:
                $this->setEMail($value);
                break;
            case 42:
                $this->setWebpage($value);
                break;
            case 43:
                $this->setTelephone($value);
                break;
            case 44:
                $this->setFax($value);
                break;
            case 45:
                $this->setContactby($value);
                break;
            case 46:
                $this->setComment($value);
                break;
            case 47:
                $this->setCopiesnum($value);
                break;
            case 48:
                $this->setCopies2k($value);
                break;
            case 49:
                $this->setSubscriber($value);
                break;
            case 50:
                $this->setCollaborator($value);
                break;
            case 51:
                $this->setYear($value);
                break;
            case 52:
                $this->setEntered($value);
                break;
            case 53:
                $this->setDateentered($value);
                break;
            case 54:
                $this->setModified($value);
                break;
            case 55:
                $this->setDatemodified($value);
                break;
            case 56:
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
        $keys = FbusersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUsername($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFirstname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSurname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInstitute($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPosition($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUseraddress($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUseraddress2($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUsertype($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUsertypeorder($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLibrary($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMuseum($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCity($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMailcountry($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCCode($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setStateprovince($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPostalcode($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setV10($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPayment10($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateshipped10($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setV20($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPayment20($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateshipped20($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setV30($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setPayment30($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateshipped30($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setV40($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPayment40($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateshipped40($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setV50($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setPayment50($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateshipped50($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setV60($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setPayment60($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDateshipped60($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setV70($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPayment70($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateshipped70($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setV71($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setPayment71($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDateshipped71($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setEMail($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setWebpage($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTelephone($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setFax($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setContactby($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setComment($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setCopiesnum($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setCopies2k($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setSubscriber($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setCollaborator($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setYear($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setEntered($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setDateentered($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setModified($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDatemodified($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setTs($arr[$keys[56]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FbusersPeer::DATABASE_NAME);

        if ($this->isColumnModified(FbusersPeer::USERNAME)) $criteria->add(FbusersPeer::USERNAME, $this->username);
        if ($this->isColumnModified(FbusersPeer::FIRSTNAME)) $criteria->add(FbusersPeer::FIRSTNAME, $this->firstname);
        if ($this->isColumnModified(FbusersPeer::SURNAME)) $criteria->add(FbusersPeer::SURNAME, $this->surname);
        if ($this->isColumnModified(FbusersPeer::TITLE)) $criteria->add(FbusersPeer::TITLE, $this->title);
        if ($this->isColumnModified(FbusersPeer::INSTITUTE)) $criteria->add(FbusersPeer::INSTITUTE, $this->institute);
        if ($this->isColumnModified(FbusersPeer::POSITION)) $criteria->add(FbusersPeer::POSITION, $this->position);
        if ($this->isColumnModified(FbusersPeer::USERADDRESS)) $criteria->add(FbusersPeer::USERADDRESS, $this->useraddress);
        if ($this->isColumnModified(FbusersPeer::USERADDRESS2)) $criteria->add(FbusersPeer::USERADDRESS2, $this->useraddress2);
        if ($this->isColumnModified(FbusersPeer::USERTYPE)) $criteria->add(FbusersPeer::USERTYPE, $this->usertype);
        if ($this->isColumnModified(FbusersPeer::USERTYPEORDER)) $criteria->add(FbusersPeer::USERTYPEORDER, $this->usertypeorder);
        if ($this->isColumnModified(FbusersPeer::LIBRARY)) $criteria->add(FbusersPeer::LIBRARY, $this->library);
        if ($this->isColumnModified(FbusersPeer::MUSEUM)) $criteria->add(FbusersPeer::MUSEUM, $this->museum);
        if ($this->isColumnModified(FbusersPeer::CITY)) $criteria->add(FbusersPeer::CITY, $this->city);
        if ($this->isColumnModified(FbusersPeer::MAILCOUNTRY)) $criteria->add(FbusersPeer::MAILCOUNTRY, $this->mailcountry);
        if ($this->isColumnModified(FbusersPeer::C_CODE)) $criteria->add(FbusersPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(FbusersPeer::STATEPROVINCE)) $criteria->add(FbusersPeer::STATEPROVINCE, $this->stateprovince);
        if ($this->isColumnModified(FbusersPeer::POSTALCODE)) $criteria->add(FbusersPeer::POSTALCODE, $this->postalcode);
        if ($this->isColumnModified(FbusersPeer::V1_0)) $criteria->add(FbusersPeer::V1_0, $this->v1_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT1_0)) $criteria->add(FbusersPeer::PAYMENT1_0, $this->payment1_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED1_0)) $criteria->add(FbusersPeer::DATESHIPPED1_0, $this->dateshipped1_0);
        if ($this->isColumnModified(FbusersPeer::V2_0)) $criteria->add(FbusersPeer::V2_0, $this->v2_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT2_0)) $criteria->add(FbusersPeer::PAYMENT2_0, $this->payment2_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED2_0)) $criteria->add(FbusersPeer::DATESHIPPED2_0, $this->dateshipped2_0);
        if ($this->isColumnModified(FbusersPeer::V3_0)) $criteria->add(FbusersPeer::V3_0, $this->v3_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT3_0)) $criteria->add(FbusersPeer::PAYMENT3_0, $this->payment3_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED3_0)) $criteria->add(FbusersPeer::DATESHIPPED3_0, $this->dateshipped3_0);
        if ($this->isColumnModified(FbusersPeer::V4_0)) $criteria->add(FbusersPeer::V4_0, $this->v4_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT4_0)) $criteria->add(FbusersPeer::PAYMENT4_0, $this->payment4_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED4_0)) $criteria->add(FbusersPeer::DATESHIPPED4_0, $this->dateshipped4_0);
        if ($this->isColumnModified(FbusersPeer::V5_0)) $criteria->add(FbusersPeer::V5_0, $this->v5_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT5_0)) $criteria->add(FbusersPeer::PAYMENT5_0, $this->payment5_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED5_0)) $criteria->add(FbusersPeer::DATESHIPPED5_0, $this->dateshipped5_0);
        if ($this->isColumnModified(FbusersPeer::V6_0)) $criteria->add(FbusersPeer::V6_0, $this->v6_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT6_0)) $criteria->add(FbusersPeer::PAYMENT6_0, $this->payment6_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED6_0)) $criteria->add(FbusersPeer::DATESHIPPED6_0, $this->dateshipped6_0);
        if ($this->isColumnModified(FbusersPeer::V7_0)) $criteria->add(FbusersPeer::V7_0, $this->v7_0);
        if ($this->isColumnModified(FbusersPeer::PAYMENT7_0)) $criteria->add(FbusersPeer::PAYMENT7_0, $this->payment7_0);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED7_0)) $criteria->add(FbusersPeer::DATESHIPPED7_0, $this->dateshipped7_0);
        if ($this->isColumnModified(FbusersPeer::V7_1)) $criteria->add(FbusersPeer::V7_1, $this->v7_1);
        if ($this->isColumnModified(FbusersPeer::PAYMENT7_1)) $criteria->add(FbusersPeer::PAYMENT7_1, $this->payment7_1);
        if ($this->isColumnModified(FbusersPeer::DATESHIPPED7_1)) $criteria->add(FbusersPeer::DATESHIPPED7_1, $this->dateshipped7_1);
        if ($this->isColumnModified(FbusersPeer::E_MAIL)) $criteria->add(FbusersPeer::E_MAIL, $this->e_mail);
        if ($this->isColumnModified(FbusersPeer::WEBPAGE)) $criteria->add(FbusersPeer::WEBPAGE, $this->webpage);
        if ($this->isColumnModified(FbusersPeer::TELEPHONE)) $criteria->add(FbusersPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(FbusersPeer::FAX)) $criteria->add(FbusersPeer::FAX, $this->fax);
        if ($this->isColumnModified(FbusersPeer::CONTACTBY)) $criteria->add(FbusersPeer::CONTACTBY, $this->contactby);
        if ($this->isColumnModified(FbusersPeer::COMMENT)) $criteria->add(FbusersPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(FbusersPeer::COPIESNUM)) $criteria->add(FbusersPeer::COPIESNUM, $this->copiesnum);
        if ($this->isColumnModified(FbusersPeer::COPIES2K)) $criteria->add(FbusersPeer::COPIES2K, $this->copies2k);
        if ($this->isColumnModified(FbusersPeer::SUBSCRIBER)) $criteria->add(FbusersPeer::SUBSCRIBER, $this->subscriber);
        if ($this->isColumnModified(FbusersPeer::COLLABORATOR)) $criteria->add(FbusersPeer::COLLABORATOR, $this->collaborator);
        if ($this->isColumnModified(FbusersPeer::YEAR)) $criteria->add(FbusersPeer::YEAR, $this->year);
        if ($this->isColumnModified(FbusersPeer::ENTERED)) $criteria->add(FbusersPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(FbusersPeer::DATEENTERED)) $criteria->add(FbusersPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(FbusersPeer::MODIFIED)) $criteria->add(FbusersPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(FbusersPeer::DATEMODIFIED)) $criteria->add(FbusersPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(FbusersPeer::TS)) $criteria->add(FbusersPeer::TS, $this->ts);

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
        $criteria = new Criteria(FbusersPeer::DATABASE_NAME);
        $criteria->add(FbusersPeer::FIRSTNAME, $this->firstname);
        $criteria->add(FbusersPeer::SURNAME, $this->surname);
        $criteria->add(FbusersPeer::USERADDRESS, $this->useraddress);
        $criteria->add(FbusersPeer::CITY, $this->city);
        $criteria->add(FbusersPeer::MAILCOUNTRY, $this->mailcountry);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getFirstname();
        $pks[1] = $this->getSurname();
        $pks[2] = $this->getUseraddress();
        $pks[3] = $this->getCity();
        $pks[4] = $this->getMailcountry();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setFirstname($keys[0]);
        $this->setSurname($keys[1]);
        $this->setUseraddress($keys[2]);
        $this->setCity($keys[3]);
        $this->setMailcountry($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getFirstname()) && (null === $this->getSurname()) && (null === $this->getUseraddress()) && (null === $this->getCity()) && (null === $this->getMailcountry());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Fbusers (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUsername($this->getUsername());
        $copyObj->setFirstname($this->getFirstname());
        $copyObj->setSurname($this->getSurname());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setInstitute($this->getInstitute());
        $copyObj->setPosition($this->getPosition());
        $copyObj->setUseraddress($this->getUseraddress());
        $copyObj->setUseraddress2($this->getUseraddress2());
        $copyObj->setUsertype($this->getUsertype());
        $copyObj->setUsertypeorder($this->getUsertypeorder());
        $copyObj->setLibrary($this->getLibrary());
        $copyObj->setMuseum($this->getMuseum());
        $copyObj->setCity($this->getCity());
        $copyObj->setMailcountry($this->getMailcountry());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setStateprovince($this->getStateprovince());
        $copyObj->setPostalcode($this->getPostalcode());
        $copyObj->setV10($this->getV10());
        $copyObj->setPayment10($this->getPayment10());
        $copyObj->setDateshipped10($this->getDateshipped10());
        $copyObj->setV20($this->getV20());
        $copyObj->setPayment20($this->getPayment20());
        $copyObj->setDateshipped20($this->getDateshipped20());
        $copyObj->setV30($this->getV30());
        $copyObj->setPayment30($this->getPayment30());
        $copyObj->setDateshipped30($this->getDateshipped30());
        $copyObj->setV40($this->getV40());
        $copyObj->setPayment40($this->getPayment40());
        $copyObj->setDateshipped40($this->getDateshipped40());
        $copyObj->setV50($this->getV50());
        $copyObj->setPayment50($this->getPayment50());
        $copyObj->setDateshipped50($this->getDateshipped50());
        $copyObj->setV60($this->getV60());
        $copyObj->setPayment60($this->getPayment60());
        $copyObj->setDateshipped60($this->getDateshipped60());
        $copyObj->setV70($this->getV70());
        $copyObj->setPayment70($this->getPayment70());
        $copyObj->setDateshipped70($this->getDateshipped70());
        $copyObj->setV71($this->getV71());
        $copyObj->setPayment71($this->getPayment71());
        $copyObj->setDateshipped71($this->getDateshipped71());
        $copyObj->setEMail($this->getEMail());
        $copyObj->setWebpage($this->getWebpage());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setContactby($this->getContactby());
        $copyObj->setComment($this->getComment());
        $copyObj->setCopiesnum($this->getCopiesnum());
        $copyObj->setCopies2k($this->getCopies2k());
        $copyObj->setSubscriber($this->getSubscriber());
        $copyObj->setCollaborator($this->getCollaborator());
        $copyObj->setYear($this->getYear());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return Fbusers Clone of current object.
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
     * @return FbusersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FbusersPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->username = null;
        $this->firstname = null;
        $this->surname = null;
        $this->title = null;
        $this->institute = null;
        $this->position = null;
        $this->useraddress = null;
        $this->useraddress2 = null;
        $this->usertype = null;
        $this->usertypeorder = null;
        $this->library = null;
        $this->museum = null;
        $this->city = null;
        $this->mailcountry = null;
        $this->c_code = null;
        $this->stateprovince = null;
        $this->postalcode = null;
        $this->v1_0 = null;
        $this->payment1_0 = null;
        $this->dateshipped1_0 = null;
        $this->v2_0 = null;
        $this->payment2_0 = null;
        $this->dateshipped2_0 = null;
        $this->v3_0 = null;
        $this->payment3_0 = null;
        $this->dateshipped3_0 = null;
        $this->v4_0 = null;
        $this->payment4_0 = null;
        $this->dateshipped4_0 = null;
        $this->v5_0 = null;
        $this->payment5_0 = null;
        $this->dateshipped5_0 = null;
        $this->v6_0 = null;
        $this->payment6_0 = null;
        $this->dateshipped6_0 = null;
        $this->v7_0 = null;
        $this->payment7_0 = null;
        $this->dateshipped7_0 = null;
        $this->v7_1 = null;
        $this->payment7_1 = null;
        $this->dateshipped7_1 = null;
        $this->e_mail = null;
        $this->webpage = null;
        $this->telephone = null;
        $this->fax = null;
        $this->contactby = null;
        $this->comment = null;
        $this->copiesnum = null;
        $this->copies2k = null;
        $this->subscriber = null;
        $this->collaborator = null;
        $this->year = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
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
        return (string) $this->exportTo(FbusersPeer::DEFAULT_STRING_FORMAT);
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
