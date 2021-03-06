<?php


/**
 * Base class that represents a row from the 'wp9socio_indicators' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWp9socioIndicators extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'Wp9socioIndicatorsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        Wp9socioIndicatorsPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the institution field.
     * @var        string
     */
    protected $institution;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the mpaname field.
     * @var        string
     */
    protected $mpaname;

    /**
     * The value for the mpacountry field.
     * @var        string
     */
    protected $mpacountry;

    /**
     * The value for the mpalocation field.
     * @var        string
     */
    protected $mpalocation;

    /**
     * The value for the mpacharacter field.
     * @var        string
     */
    protected $mpacharacter;

    /**
     * The value for the scubadiving field.
     * @var        string
     */
    protected $scubadiving;

    /**
     * The value for the snorkeling field.
     * @var        string
     */
    protected $snorkeling;

    /**
     * The value for the hiking field.
     * @var        string
     */
    protected $hiking;

    /**
     * The value for the ffwatching field.
     * @var        string
     */
    protected $ffwatching;

    /**
     * The value for the seascapewatching field.
     * @var        string
     */
    protected $seascapewatching;

    /**
     * The value for the other1 field.
     * @var        string
     */
    protected $other1;

    /**
     * The value for the other2 field.
     * @var        string
     */
    protected $other2;

    /**
     * The value for the other3 field.
     * @var        string
     */
    protected $other3;

    /**
     * The value for the other4 field.
     * @var        string
     */
    protected $other4;

    /**
     * The value for the comname1 field.
     * @var        string
     */
    protected $comname1;

    /**
     * The value for the sciname1 field.
     * @var        string
     */
    protected $sciname1;

    /**
     * The value for the desceco1 field.
     * @var        string
     */
    protected $desceco1;

    /**
     * The value for the temppres1 field.
     * @var        string
     */
    protected $temppres1;

    /**
     * The value for the comname2 field.
     * @var        string
     */
    protected $comname2;

    /**
     * The value for the sciname2 field.
     * @var        string
     */
    protected $sciname2;

    /**
     * The value for the desceco2 field.
     * @var        string
     */
    protected $desceco2;

    /**
     * The value for the temppres2 field.
     * @var        string
     */
    protected $temppres2;

    /**
     * The value for the comname3 field.
     * @var        string
     */
    protected $comname3;

    /**
     * The value for the sciname3 field.
     * @var        string
     */
    protected $sciname3;

    /**
     * The value for the desceco3 field.
     * @var        string
     */
    protected $desceco3;

    /**
     * The value for the temppres3 field.
     * @var        string
     */
    protected $temppres3;

    /**
     * The value for the comname4 field.
     * @var        string
     */
    protected $comname4;

    /**
     * The value for the sciname4 field.
     * @var        string
     */
    protected $sciname4;

    /**
     * The value for the desceco4 field.
     * @var        string
     */
    protected $desceco4;

    /**
     * The value for the temppres4 field.
     * @var        string
     */
    protected $temppres4;

    /**
     * The value for the ecocomname1 field.
     * @var        string
     */
    protected $ecocomname1;

    /**
     * The value for the ecodesceco1 field.
     * @var        string
     */
    protected $ecodesceco1;

    /**
     * The value for the reldis1 field.
     * @var        string
     */
    protected $reldis1;

    /**
     * The value for the ecocomname2 field.
     * @var        string
     */
    protected $ecocomname2;

    /**
     * The value for the ecodesceco2 field.
     * @var        string
     */
    protected $ecodesceco2;

    /**
     * The value for the reldis2 field.
     * @var        string
     */
    protected $reldis2;

    /**
     * The value for the ecocomname3 field.
     * @var        string
     */
    protected $ecocomname3;

    /**
     * The value for the ecodesceco3 field.
     * @var        string
     */
    protected $ecodesceco3;

    /**
     * The value for the reldis3 field.
     * @var        string
     */
    protected $reldis3;

    /**
     * The value for the ecocomname4 field.
     * @var        string
     */
    protected $ecocomname4;

    /**
     * The value for the ecodesceco4 field.
     * @var        string
     */
    protected $ecodesceco4;

    /**
     * The value for the reldis4 field.
     * @var        string
     */
    protected $reldis4;

    /**
     * The value for the socio_histinfo_4 field.
     * @var        string
     */
    protected $socio_histinfo_4;

    /**
     * The value for the socio_histinfo_3 field.
     * @var        string
     */
    protected $socio_histinfo_3;

    /**
     * The value for the socio_histinfo_2 field.
     * @var        string
     */
    protected $socio_histinfo_2;

    /**
     * The value for the socio_histinfo_1 field.
     * @var        string
     */
    protected $socio_histinfo_1;

    /**
     * The value for the socio_ref_info1 field.
     * @var        string
     */
    protected $socio_ref_info1;

    /**
     * The value for the socio_curinfo_1 field.
     * @var        string
     */
    protected $socio_curinfo_1;

    /**
     * The value for the socio_curinfo_2 field.
     * @var        string
     */
    protected $socio_curinfo_2;

    /**
     * The value for the socio_curinfo_3 field.
     * @var        string
     */
    protected $socio_curinfo_3;

    /**
     * The value for the socio_curinfo_4 field.
     * @var        string
     */
    protected $socio_curinfo_4;

    /**
     * The value for the socio_histinfo2_4 field.
     * @var        string
     */
    protected $socio_histinfo2_4;

    /**
     * The value for the socio_histinfo2_3 field.
     * @var        string
     */
    protected $socio_histinfo2_3;

    /**
     * The value for the socio_histinfo2_2 field.
     * @var        string
     */
    protected $socio_histinfo2_2;

    /**
     * The value for the socio_histinfo2_1 field.
     * @var        string
     */
    protected $socio_histinfo2_1;

    /**
     * The value for the socio_ref_info2 field.
     * @var        string
     */
    protected $socio_ref_info2;

    /**
     * The value for the socio_curinfo2_1 field.
     * @var        string
     */
    protected $socio_curinfo2_1;

    /**
     * The value for the socio_curinfo2_2 field.
     * @var        string
     */
    protected $socio_curinfo2_2;

    /**
     * The value for the socio_curinfo2_3 field.
     * @var        string
     */
    protected $socio_curinfo2_3;

    /**
     * The value for the socio_curinfo2_4 field.
     * @var        string
     */
    protected $socio_curinfo2_4;

    /**
     * The value for the newpassword field.
     * @var        string
     */
    protected $newpassword;

    /**
     * The value for the inddate field.
     * @var        string
     */
    protected $inddate;

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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [institution] column value.
     *
     * @return string
     */
    public function getInstitution()
    {

        return $this->institution;
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
     * Get the [mpaname] column value.
     *
     * @return string
     */
    public function getMpaname()
    {

        return $this->mpaname;
    }

    /**
     * Get the [mpacountry] column value.
     *
     * @return string
     */
    public function getMpacountry()
    {

        return $this->mpacountry;
    }

    /**
     * Get the [mpalocation] column value.
     *
     * @return string
     */
    public function getMpalocation()
    {

        return $this->mpalocation;
    }

    /**
     * Get the [mpacharacter] column value.
     *
     * @return string
     */
    public function getMpacharacter()
    {

        return $this->mpacharacter;
    }

    /**
     * Get the [scubadiving] column value.
     *
     * @return string
     */
    public function getScubadiving()
    {

        return $this->scubadiving;
    }

    /**
     * Get the [snorkeling] column value.
     *
     * @return string
     */
    public function getSnorkeling()
    {

        return $this->snorkeling;
    }

    /**
     * Get the [hiking] column value.
     *
     * @return string
     */
    public function getHiking()
    {

        return $this->hiking;
    }

    /**
     * Get the [ffwatching] column value.
     *
     * @return string
     */
    public function getFfwatching()
    {

        return $this->ffwatching;
    }

    /**
     * Get the [seascapewatching] column value.
     *
     * @return string
     */
    public function getSeascapewatching()
    {

        return $this->seascapewatching;
    }

    /**
     * Get the [other1] column value.
     *
     * @return string
     */
    public function getOther1()
    {

        return $this->other1;
    }

    /**
     * Get the [other2] column value.
     *
     * @return string
     */
    public function getOther2()
    {

        return $this->other2;
    }

    /**
     * Get the [other3] column value.
     *
     * @return string
     */
    public function getOther3()
    {

        return $this->other3;
    }

    /**
     * Get the [other4] column value.
     *
     * @return string
     */
    public function getOther4()
    {

        return $this->other4;
    }

    /**
     * Get the [comname1] column value.
     *
     * @return string
     */
    public function getComname1()
    {

        return $this->comname1;
    }

    /**
     * Get the [sciname1] column value.
     *
     * @return string
     */
    public function getSciname1()
    {

        return $this->sciname1;
    }

    /**
     * Get the [desceco1] column value.
     *
     * @return string
     */
    public function getDesceco1()
    {

        return $this->desceco1;
    }

    /**
     * Get the [temppres1] column value.
     *
     * @return string
     */
    public function getTemppres1()
    {

        return $this->temppres1;
    }

    /**
     * Get the [comname2] column value.
     *
     * @return string
     */
    public function getComname2()
    {

        return $this->comname2;
    }

    /**
     * Get the [sciname2] column value.
     *
     * @return string
     */
    public function getSciname2()
    {

        return $this->sciname2;
    }

    /**
     * Get the [desceco2] column value.
     *
     * @return string
     */
    public function getDesceco2()
    {

        return $this->desceco2;
    }

    /**
     * Get the [temppres2] column value.
     *
     * @return string
     */
    public function getTemppres2()
    {

        return $this->temppres2;
    }

    /**
     * Get the [comname3] column value.
     *
     * @return string
     */
    public function getComname3()
    {

        return $this->comname3;
    }

    /**
     * Get the [sciname3] column value.
     *
     * @return string
     */
    public function getSciname3()
    {

        return $this->sciname3;
    }

    /**
     * Get the [desceco3] column value.
     *
     * @return string
     */
    public function getDesceco3()
    {

        return $this->desceco3;
    }

    /**
     * Get the [temppres3] column value.
     *
     * @return string
     */
    public function getTemppres3()
    {

        return $this->temppres3;
    }

    /**
     * Get the [comname4] column value.
     *
     * @return string
     */
    public function getComname4()
    {

        return $this->comname4;
    }

    /**
     * Get the [sciname4] column value.
     *
     * @return string
     */
    public function getSciname4()
    {

        return $this->sciname4;
    }

    /**
     * Get the [desceco4] column value.
     *
     * @return string
     */
    public function getDesceco4()
    {

        return $this->desceco4;
    }

    /**
     * Get the [temppres4] column value.
     *
     * @return string
     */
    public function getTemppres4()
    {

        return $this->temppres4;
    }

    /**
     * Get the [ecocomname1] column value.
     *
     * @return string
     */
    public function getEcocomname1()
    {

        return $this->ecocomname1;
    }

    /**
     * Get the [ecodesceco1] column value.
     *
     * @return string
     */
    public function getEcodesceco1()
    {

        return $this->ecodesceco1;
    }

    /**
     * Get the [reldis1] column value.
     *
     * @return string
     */
    public function getReldis1()
    {

        return $this->reldis1;
    }

    /**
     * Get the [ecocomname2] column value.
     *
     * @return string
     */
    public function getEcocomname2()
    {

        return $this->ecocomname2;
    }

    /**
     * Get the [ecodesceco2] column value.
     *
     * @return string
     */
    public function getEcodesceco2()
    {

        return $this->ecodesceco2;
    }

    /**
     * Get the [reldis2] column value.
     *
     * @return string
     */
    public function getReldis2()
    {

        return $this->reldis2;
    }

    /**
     * Get the [ecocomname3] column value.
     *
     * @return string
     */
    public function getEcocomname3()
    {

        return $this->ecocomname3;
    }

    /**
     * Get the [ecodesceco3] column value.
     *
     * @return string
     */
    public function getEcodesceco3()
    {

        return $this->ecodesceco3;
    }

    /**
     * Get the [reldis3] column value.
     *
     * @return string
     */
    public function getReldis3()
    {

        return $this->reldis3;
    }

    /**
     * Get the [ecocomname4] column value.
     *
     * @return string
     */
    public function getEcocomname4()
    {

        return $this->ecocomname4;
    }

    /**
     * Get the [ecodesceco4] column value.
     *
     * @return string
     */
    public function getEcodesceco4()
    {

        return $this->ecodesceco4;
    }

    /**
     * Get the [reldis4] column value.
     *
     * @return string
     */
    public function getReldis4()
    {

        return $this->reldis4;
    }

    /**
     * Get the [socio_histinfo_4] column value.
     *
     * @return string
     */
    public function getSocioHistinfo4()
    {

        return $this->socio_histinfo_4;
    }

    /**
     * Get the [socio_histinfo_3] column value.
     *
     * @return string
     */
    public function getSocioHistinfo3()
    {

        return $this->socio_histinfo_3;
    }

    /**
     * Get the [socio_histinfo_2] column value.
     *
     * @return string
     */
    public function getSocioHistinfo2()
    {

        return $this->socio_histinfo_2;
    }

    /**
     * Get the [socio_histinfo_1] column value.
     *
     * @return string
     */
    public function getSocioHistinfo1()
    {

        return $this->socio_histinfo_1;
    }

    /**
     * Get the [socio_ref_info1] column value.
     *
     * @return string
     */
    public function getSocioRefInfo1()
    {

        return $this->socio_ref_info1;
    }

    /**
     * Get the [socio_curinfo_1] column value.
     *
     * @return string
     */
    public function getSocioCurinfo1()
    {

        return $this->socio_curinfo_1;
    }

    /**
     * Get the [socio_curinfo_2] column value.
     *
     * @return string
     */
    public function getSocioCurinfo2()
    {

        return $this->socio_curinfo_2;
    }

    /**
     * Get the [socio_curinfo_3] column value.
     *
     * @return string
     */
    public function getSocioCurinfo3()
    {

        return $this->socio_curinfo_3;
    }

    /**
     * Get the [socio_curinfo_4] column value.
     *
     * @return string
     */
    public function getSocioCurinfo4()
    {

        return $this->socio_curinfo_4;
    }

    /**
     * Get the [socio_histinfo2_4] column value.
     *
     * @return string
     */
    public function getSocioHistinfo24()
    {

        return $this->socio_histinfo2_4;
    }

    /**
     * Get the [socio_histinfo2_3] column value.
     *
     * @return string
     */
    public function getSocioHistinfo23()
    {

        return $this->socio_histinfo2_3;
    }

    /**
     * Get the [socio_histinfo2_2] column value.
     *
     * @return string
     */
    public function getSocioHistinfo22()
    {

        return $this->socio_histinfo2_2;
    }

    /**
     * Get the [socio_histinfo2_1] column value.
     *
     * @return string
     */
    public function getSocioHistinfo21()
    {

        return $this->socio_histinfo2_1;
    }

    /**
     * Get the [socio_ref_info2] column value.
     *
     * @return string
     */
    public function getSocioRefInfo2()
    {

        return $this->socio_ref_info2;
    }

    /**
     * Get the [socio_curinfo2_1] column value.
     *
     * @return string
     */
    public function getSocioCurinfo21()
    {

        return $this->socio_curinfo2_1;
    }

    /**
     * Get the [socio_curinfo2_2] column value.
     *
     * @return string
     */
    public function getSocioCurinfo22()
    {

        return $this->socio_curinfo2_2;
    }

    /**
     * Get the [socio_curinfo2_3] column value.
     *
     * @return string
     */
    public function getSocioCurinfo23()
    {

        return $this->socio_curinfo2_3;
    }

    /**
     * Get the [socio_curinfo2_4] column value.
     *
     * @return string
     */
    public function getSocioCurinfo24()
    {

        return $this->socio_curinfo2_4;
    }

    /**
     * Get the [newpassword] column value.
     *
     * @return string
     */
    public function getNewpassword()
    {

        return $this->newpassword;
    }

    /**
     * Get the [optionally formatted] temporal [inddate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getInddate($format = 'Y-m-d H:i:s')
    {
        if ($this->inddate === null) {
            return null;
        }

        if ($this->inddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->inddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->inddate, true), $x);
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
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [institution] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setInstitution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->institution !== $v) {
            $this->institution = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::INSTITUTION;
        }


        return $this;
    } // setInstitution()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [mpaname] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setMpaname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mpaname !== $v) {
            $this->mpaname = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::MPANAME;
        }


        return $this;
    } // setMpaname()

    /**
     * Set the value of [mpacountry] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setMpacountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mpacountry !== $v) {
            $this->mpacountry = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::MPACOUNTRY;
        }


        return $this;
    } // setMpacountry()

    /**
     * Set the value of [mpalocation] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setMpalocation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mpalocation !== $v) {
            $this->mpalocation = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::MPALOCATION;
        }


        return $this;
    } // setMpalocation()

    /**
     * Set the value of [mpacharacter] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setMpacharacter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mpacharacter !== $v) {
            $this->mpacharacter = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::MPACHARACTER;
        }


        return $this;
    } // setMpacharacter()

    /**
     * Set the value of [scubadiving] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setScubadiving($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->scubadiving !== $v) {
            $this->scubadiving = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SCUBADIVING;
        }


        return $this;
    } // setScubadiving()

    /**
     * Set the value of [snorkeling] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSnorkeling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->snorkeling !== $v) {
            $this->snorkeling = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SNORKELING;
        }


        return $this;
    } // setSnorkeling()

    /**
     * Set the value of [hiking] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setHiking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hiking !== $v) {
            $this->hiking = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::HIKING;
        }


        return $this;
    } // setHiking()

    /**
     * Set the value of [ffwatching] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setFfwatching($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ffwatching !== $v) {
            $this->ffwatching = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::FFWATCHING;
        }


        return $this;
    } // setFfwatching()

    /**
     * Set the value of [seascapewatching] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSeascapewatching($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->seascapewatching !== $v) {
            $this->seascapewatching = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SEASCAPEWATCHING;
        }


        return $this;
    } // setSeascapewatching()

    /**
     * Set the value of [other1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setOther1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->other1 !== $v) {
            $this->other1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::OTHER1;
        }


        return $this;
    } // setOther1()

    /**
     * Set the value of [other2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setOther2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->other2 !== $v) {
            $this->other2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::OTHER2;
        }


        return $this;
    } // setOther2()

    /**
     * Set the value of [other3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setOther3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->other3 !== $v) {
            $this->other3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::OTHER3;
        }


        return $this;
    } // setOther3()

    /**
     * Set the value of [other4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setOther4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->other4 !== $v) {
            $this->other4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::OTHER4;
        }


        return $this;
    } // setOther4()

    /**
     * Set the value of [comname1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setComname1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname1 !== $v) {
            $this->comname1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::COMNAME1;
        }


        return $this;
    } // setComname1()

    /**
     * Set the value of [sciname1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSciname1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sciname1 !== $v) {
            $this->sciname1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SCINAME1;
        }


        return $this;
    } // setSciname1()

    /**
     * Set the value of [desceco1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setDesceco1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desceco1 !== $v) {
            $this->desceco1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::DESCECO1;
        }


        return $this;
    } // setDesceco1()

    /**
     * Set the value of [temppres1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setTemppres1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->temppres1 !== $v) {
            $this->temppres1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::TEMPPRES1;
        }


        return $this;
    } // setTemppres1()

    /**
     * Set the value of [comname2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setComname2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname2 !== $v) {
            $this->comname2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::COMNAME2;
        }


        return $this;
    } // setComname2()

    /**
     * Set the value of [sciname2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSciname2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sciname2 !== $v) {
            $this->sciname2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SCINAME2;
        }


        return $this;
    } // setSciname2()

    /**
     * Set the value of [desceco2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setDesceco2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desceco2 !== $v) {
            $this->desceco2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::DESCECO2;
        }


        return $this;
    } // setDesceco2()

    /**
     * Set the value of [temppres2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setTemppres2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->temppres2 !== $v) {
            $this->temppres2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::TEMPPRES2;
        }


        return $this;
    } // setTemppres2()

    /**
     * Set the value of [comname3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setComname3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname3 !== $v) {
            $this->comname3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::COMNAME3;
        }


        return $this;
    } // setComname3()

    /**
     * Set the value of [sciname3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSciname3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sciname3 !== $v) {
            $this->sciname3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SCINAME3;
        }


        return $this;
    } // setSciname3()

    /**
     * Set the value of [desceco3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setDesceco3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desceco3 !== $v) {
            $this->desceco3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::DESCECO3;
        }


        return $this;
    } // setDesceco3()

    /**
     * Set the value of [temppres3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setTemppres3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->temppres3 !== $v) {
            $this->temppres3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::TEMPPRES3;
        }


        return $this;
    } // setTemppres3()

    /**
     * Set the value of [comname4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setComname4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comname4 !== $v) {
            $this->comname4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::COMNAME4;
        }


        return $this;
    } // setComname4()

    /**
     * Set the value of [sciname4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSciname4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sciname4 !== $v) {
            $this->sciname4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SCINAME4;
        }


        return $this;
    } // setSciname4()

    /**
     * Set the value of [desceco4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setDesceco4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desceco4 !== $v) {
            $this->desceco4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::DESCECO4;
        }


        return $this;
    } // setDesceco4()

    /**
     * Set the value of [temppres4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setTemppres4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->temppres4 !== $v) {
            $this->temppres4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::TEMPPRES4;
        }


        return $this;
    } // setTemppres4()

    /**
     * Set the value of [ecocomname1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcocomname1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecocomname1 !== $v) {
            $this->ecocomname1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECOCOMNAME1;
        }


        return $this;
    } // setEcocomname1()

    /**
     * Set the value of [ecodesceco1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcodesceco1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecodesceco1 !== $v) {
            $this->ecodesceco1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECODESCECO1;
        }


        return $this;
    } // setEcodesceco1()

    /**
     * Set the value of [reldis1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setReldis1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reldis1 !== $v) {
            $this->reldis1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::RELDIS1;
        }


        return $this;
    } // setReldis1()

    /**
     * Set the value of [ecocomname2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcocomname2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecocomname2 !== $v) {
            $this->ecocomname2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECOCOMNAME2;
        }


        return $this;
    } // setEcocomname2()

    /**
     * Set the value of [ecodesceco2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcodesceco2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecodesceco2 !== $v) {
            $this->ecodesceco2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECODESCECO2;
        }


        return $this;
    } // setEcodesceco2()

    /**
     * Set the value of [reldis2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setReldis2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reldis2 !== $v) {
            $this->reldis2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::RELDIS2;
        }


        return $this;
    } // setReldis2()

    /**
     * Set the value of [ecocomname3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcocomname3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecocomname3 !== $v) {
            $this->ecocomname3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECOCOMNAME3;
        }


        return $this;
    } // setEcocomname3()

    /**
     * Set the value of [ecodesceco3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcodesceco3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecodesceco3 !== $v) {
            $this->ecodesceco3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECODESCECO3;
        }


        return $this;
    } // setEcodesceco3()

    /**
     * Set the value of [reldis3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setReldis3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reldis3 !== $v) {
            $this->reldis3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::RELDIS3;
        }


        return $this;
    } // setReldis3()

    /**
     * Set the value of [ecocomname4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcocomname4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecocomname4 !== $v) {
            $this->ecocomname4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECOCOMNAME4;
        }


        return $this;
    } // setEcocomname4()

    /**
     * Set the value of [ecodesceco4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setEcodesceco4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecodesceco4 !== $v) {
            $this->ecodesceco4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ECODESCECO4;
        }


        return $this;
    } // setEcodesceco4()

    /**
     * Set the value of [reldis4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setReldis4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reldis4 !== $v) {
            $this->reldis4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::RELDIS4;
        }


        return $this;
    } // setReldis4()

    /**
     * Set the value of [socio_histinfo_4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo_4 !== $v) {
            $this->socio_histinfo_4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4;
        }


        return $this;
    } // setSocioHistinfo4()

    /**
     * Set the value of [socio_histinfo_3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo_3 !== $v) {
            $this->socio_histinfo_3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3;
        }


        return $this;
    } // setSocioHistinfo3()

    /**
     * Set the value of [socio_histinfo_2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo_2 !== $v) {
            $this->socio_histinfo_2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2;
        }


        return $this;
    } // setSocioHistinfo2()

    /**
     * Set the value of [socio_histinfo_1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo_1 !== $v) {
            $this->socio_histinfo_1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1;
        }


        return $this;
    } // setSocioHistinfo1()

    /**
     * Set the value of [socio_ref_info1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioRefInfo1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_ref_info1 !== $v) {
            $this->socio_ref_info1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_REF_INFO1;
        }


        return $this;
    } // setSocioRefInfo1()

    /**
     * Set the value of [socio_curinfo_1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo_1 !== $v) {
            $this->socio_curinfo_1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO_1;
        }


        return $this;
    } // setSocioCurinfo1()

    /**
     * Set the value of [socio_curinfo_2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo_2 !== $v) {
            $this->socio_curinfo_2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO_2;
        }


        return $this;
    } // setSocioCurinfo2()

    /**
     * Set the value of [socio_curinfo_3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo_3 !== $v) {
            $this->socio_curinfo_3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO_3;
        }


        return $this;
    } // setSocioCurinfo3()

    /**
     * Set the value of [socio_curinfo_4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo_4 !== $v) {
            $this->socio_curinfo_4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO_4;
        }


        return $this;
    } // setSocioCurinfo4()

    /**
     * Set the value of [socio_histinfo2_4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo24($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo2_4 !== $v) {
            $this->socio_histinfo2_4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4;
        }


        return $this;
    } // setSocioHistinfo24()

    /**
     * Set the value of [socio_histinfo2_3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo23($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo2_3 !== $v) {
            $this->socio_histinfo2_3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3;
        }


        return $this;
    } // setSocioHistinfo23()

    /**
     * Set the value of [socio_histinfo2_2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo22($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo2_2 !== $v) {
            $this->socio_histinfo2_2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2;
        }


        return $this;
    } // setSocioHistinfo22()

    /**
     * Set the value of [socio_histinfo2_1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioHistinfo21($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_histinfo2_1 !== $v) {
            $this->socio_histinfo2_1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1;
        }


        return $this;
    } // setSocioHistinfo21()

    /**
     * Set the value of [socio_ref_info2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioRefInfo2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_ref_info2 !== $v) {
            $this->socio_ref_info2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_REF_INFO2;
        }


        return $this;
    } // setSocioRefInfo2()

    /**
     * Set the value of [socio_curinfo2_1] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo21($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo2_1 !== $v) {
            $this->socio_curinfo2_1 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1;
        }


        return $this;
    } // setSocioCurinfo21()

    /**
     * Set the value of [socio_curinfo2_2] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo22($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo2_2 !== $v) {
            $this->socio_curinfo2_2 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2;
        }


        return $this;
    } // setSocioCurinfo22()

    /**
     * Set the value of [socio_curinfo2_3] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo23($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo2_3 !== $v) {
            $this->socio_curinfo2_3 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3;
        }


        return $this;
    } // setSocioCurinfo23()

    /**
     * Set the value of [socio_curinfo2_4] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setSocioCurinfo24($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->socio_curinfo2_4 !== $v) {
            $this->socio_curinfo2_4 = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4;
        }


        return $this;
    } // setSocioCurinfo24()

    /**
     * Set the value of [newpassword] column.
     *
     * @param  string $v new value
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setNewpassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->newpassword !== $v) {
            $this->newpassword = $v;
            $this->modifiedColumns[] = Wp9socioIndicatorsPeer::NEWPASSWORD;
        }


        return $this;
    } // setNewpassword()

    /**
     * Sets the value of [inddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Wp9socioIndicators The current object (for fluent API support)
     */
    public function setInddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->inddate !== null || $dt !== null) {
            $currentDateAsString = ($this->inddate !== null && $tmpDt = new DateTime($this->inddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->inddate = $newDateAsString;
                $this->modifiedColumns[] = Wp9socioIndicatorsPeer::INDDATE;
            }
        } // if either are not null


        return $this;
    } // setInddate()

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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->institution = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->mpaname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mpacountry = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->mpalocation = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->mpacharacter = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->scubadiving = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->snorkeling = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->hiking = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ffwatching = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->seascapewatching = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->other1 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->other2 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->other3 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->other4 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->comname1 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->sciname1 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->desceco1 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->temppres1 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->comname2 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->sciname2 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->desceco2 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->temppres2 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->comname3 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->sciname3 = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->desceco3 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->temppres3 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->comname4 = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->sciname4 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->desceco4 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->temppres4 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->ecocomname1 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->ecodesceco1 = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->reldis1 = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->ecocomname2 = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->ecodesceco2 = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->reldis2 = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->ecocomname3 = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->ecodesceco3 = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->reldis3 = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->ecocomname4 = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->ecodesceco4 = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->reldis4 = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->socio_histinfo_4 = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->socio_histinfo_3 = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->socio_histinfo_2 = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->socio_histinfo_1 = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->socio_ref_info1 = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->socio_curinfo_1 = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->socio_curinfo_2 = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->socio_curinfo_3 = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->socio_curinfo_4 = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->socio_histinfo2_4 = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->socio_histinfo2_3 = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->socio_histinfo2_2 = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->socio_histinfo2_1 = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->socio_ref_info2 = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->socio_curinfo2_1 = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->socio_curinfo2_2 = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->socio_curinfo2_3 = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->socio_curinfo2_4 = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->newpassword = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->inddate = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 65; // 65 = Wp9socioIndicatorsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Wp9socioIndicators object", $e);
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
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = Wp9socioIndicatorsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = Wp9socioIndicatorsQuery::create()
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
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                Wp9socioIndicatorsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = Wp9socioIndicatorsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . Wp9socioIndicatorsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`Name`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::INSTITUTION)) {
            $modifiedColumns[':p' . $index++]  = '`Institution`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`Email`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPANAME)) {
            $modifiedColumns[':p' . $index++]  = '`MPAName`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPACOUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`MPACountry`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPALOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`MPALocation`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPACHARACTER)) {
            $modifiedColumns[':p' . $index++]  = '`MPACharacter`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCUBADIVING)) {
            $modifiedColumns[':p' . $index++]  = '`ScubaDiving`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SNORKELING)) {
            $modifiedColumns[':p' . $index++]  = '`Snorkeling`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::HIKING)) {
            $modifiedColumns[':p' . $index++]  = '`Hiking`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::FFWATCHING)) {
            $modifiedColumns[':p' . $index++]  = '`FFWatching`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SEASCAPEWATCHING)) {
            $modifiedColumns[':p' . $index++]  = '`SeascapeWatching`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER1)) {
            $modifiedColumns[':p' . $index++]  = '`Other1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER2)) {
            $modifiedColumns[':p' . $index++]  = '`Other2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER3)) {
            $modifiedColumns[':p' . $index++]  = '`Other3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER4)) {
            $modifiedColumns[':p' . $index++]  = '`Other4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME1)) {
            $modifiedColumns[':p' . $index++]  = '`ComName1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME1)) {
            $modifiedColumns[':p' . $index++]  = '`SciName1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO1)) {
            $modifiedColumns[':p' . $index++]  = '`DescEco1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES1)) {
            $modifiedColumns[':p' . $index++]  = '`TempPres1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME2)) {
            $modifiedColumns[':p' . $index++]  = '`ComName2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME2)) {
            $modifiedColumns[':p' . $index++]  = '`SciName2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO2)) {
            $modifiedColumns[':p' . $index++]  = '`DescEco2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES2)) {
            $modifiedColumns[':p' . $index++]  = '`TempPres2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME3)) {
            $modifiedColumns[':p' . $index++]  = '`ComName3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME3)) {
            $modifiedColumns[':p' . $index++]  = '`SciName3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO3)) {
            $modifiedColumns[':p' . $index++]  = '`DescEco3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES3)) {
            $modifiedColumns[':p' . $index++]  = '`TempPres3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME4)) {
            $modifiedColumns[':p' . $index++]  = '`ComName4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME4)) {
            $modifiedColumns[':p' . $index++]  = '`SciName4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO4)) {
            $modifiedColumns[':p' . $index++]  = '`DescEco4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES4)) {
            $modifiedColumns[':p' . $index++]  = '`TempPres4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME1)) {
            $modifiedColumns[':p' . $index++]  = '`EcoComName1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO1)) {
            $modifiedColumns[':p' . $index++]  = '`EcoDescEco1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS1)) {
            $modifiedColumns[':p' . $index++]  = '`RelDis1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME2)) {
            $modifiedColumns[':p' . $index++]  = '`EcoComName2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO2)) {
            $modifiedColumns[':p' . $index++]  = '`EcoDescEco2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS2)) {
            $modifiedColumns[':p' . $index++]  = '`RelDis2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME3)) {
            $modifiedColumns[':p' . $index++]  = '`EcoComName3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO3)) {
            $modifiedColumns[':p' . $index++]  = '`EcoDescEco3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS3)) {
            $modifiedColumns[':p' . $index++]  = '`RelDis3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME4)) {
            $modifiedColumns[':p' . $index++]  = '`EcoComName4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO4)) {
            $modifiedColumns[':p' . $index++]  = '`EcoDescEco4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS4)) {
            $modifiedColumns[':p' . $index++]  = '`RelDis4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo_4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo_3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo_2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo_1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_REF_INFO1)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_Ref_Info1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_1)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo_1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_2)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo_2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_3)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo_3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_4)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo_4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo2_4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo2_3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo2_2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_HistInfo2_1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_REF_INFO2)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_Ref_Info2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo2_1`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo2_2`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo2_3`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4)) {
            $modifiedColumns[':p' . $index++]  = '`Socio_CurInfo2_4`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::NEWPASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`newpassword`';
        }
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::INDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`IndDate`';
        }

        $sql = sprintf(
            'INSERT INTO `wp9socio_indicators` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`Name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`Institution`':
                        $stmt->bindValue($identifier, $this->institution, PDO::PARAM_STR);
                        break;
                    case '`Email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`MPAName`':
                        $stmt->bindValue($identifier, $this->mpaname, PDO::PARAM_STR);
                        break;
                    case '`MPACountry`':
                        $stmt->bindValue($identifier, $this->mpacountry, PDO::PARAM_STR);
                        break;
                    case '`MPALocation`':
                        $stmt->bindValue($identifier, $this->mpalocation, PDO::PARAM_STR);
                        break;
                    case '`MPACharacter`':
                        $stmt->bindValue($identifier, $this->mpacharacter, PDO::PARAM_STR);
                        break;
                    case '`ScubaDiving`':
                        $stmt->bindValue($identifier, $this->scubadiving, PDO::PARAM_STR);
                        break;
                    case '`Snorkeling`':
                        $stmt->bindValue($identifier, $this->snorkeling, PDO::PARAM_STR);
                        break;
                    case '`Hiking`':
                        $stmt->bindValue($identifier, $this->hiking, PDO::PARAM_STR);
                        break;
                    case '`FFWatching`':
                        $stmt->bindValue($identifier, $this->ffwatching, PDO::PARAM_STR);
                        break;
                    case '`SeascapeWatching`':
                        $stmt->bindValue($identifier, $this->seascapewatching, PDO::PARAM_STR);
                        break;
                    case '`Other1`':
                        $stmt->bindValue($identifier, $this->other1, PDO::PARAM_STR);
                        break;
                    case '`Other2`':
                        $stmt->bindValue($identifier, $this->other2, PDO::PARAM_STR);
                        break;
                    case '`Other3`':
                        $stmt->bindValue($identifier, $this->other3, PDO::PARAM_STR);
                        break;
                    case '`Other4`':
                        $stmt->bindValue($identifier, $this->other4, PDO::PARAM_STR);
                        break;
                    case '`ComName1`':
                        $stmt->bindValue($identifier, $this->comname1, PDO::PARAM_STR);
                        break;
                    case '`SciName1`':
                        $stmt->bindValue($identifier, $this->sciname1, PDO::PARAM_STR);
                        break;
                    case '`DescEco1`':
                        $stmt->bindValue($identifier, $this->desceco1, PDO::PARAM_STR);
                        break;
                    case '`TempPres1`':
                        $stmt->bindValue($identifier, $this->temppres1, PDO::PARAM_STR);
                        break;
                    case '`ComName2`':
                        $stmt->bindValue($identifier, $this->comname2, PDO::PARAM_STR);
                        break;
                    case '`SciName2`':
                        $stmt->bindValue($identifier, $this->sciname2, PDO::PARAM_STR);
                        break;
                    case '`DescEco2`':
                        $stmt->bindValue($identifier, $this->desceco2, PDO::PARAM_STR);
                        break;
                    case '`TempPres2`':
                        $stmt->bindValue($identifier, $this->temppres2, PDO::PARAM_STR);
                        break;
                    case '`ComName3`':
                        $stmt->bindValue($identifier, $this->comname3, PDO::PARAM_STR);
                        break;
                    case '`SciName3`':
                        $stmt->bindValue($identifier, $this->sciname3, PDO::PARAM_STR);
                        break;
                    case '`DescEco3`':
                        $stmt->bindValue($identifier, $this->desceco3, PDO::PARAM_STR);
                        break;
                    case '`TempPres3`':
                        $stmt->bindValue($identifier, $this->temppres3, PDO::PARAM_STR);
                        break;
                    case '`ComName4`':
                        $stmt->bindValue($identifier, $this->comname4, PDO::PARAM_STR);
                        break;
                    case '`SciName4`':
                        $stmt->bindValue($identifier, $this->sciname4, PDO::PARAM_STR);
                        break;
                    case '`DescEco4`':
                        $stmt->bindValue($identifier, $this->desceco4, PDO::PARAM_STR);
                        break;
                    case '`TempPres4`':
                        $stmt->bindValue($identifier, $this->temppres4, PDO::PARAM_STR);
                        break;
                    case '`EcoComName1`':
                        $stmt->bindValue($identifier, $this->ecocomname1, PDO::PARAM_STR);
                        break;
                    case '`EcoDescEco1`':
                        $stmt->bindValue($identifier, $this->ecodesceco1, PDO::PARAM_STR);
                        break;
                    case '`RelDis1`':
                        $stmt->bindValue($identifier, $this->reldis1, PDO::PARAM_STR);
                        break;
                    case '`EcoComName2`':
                        $stmt->bindValue($identifier, $this->ecocomname2, PDO::PARAM_STR);
                        break;
                    case '`EcoDescEco2`':
                        $stmt->bindValue($identifier, $this->ecodesceco2, PDO::PARAM_STR);
                        break;
                    case '`RelDis2`':
                        $stmt->bindValue($identifier, $this->reldis2, PDO::PARAM_STR);
                        break;
                    case '`EcoComName3`':
                        $stmt->bindValue($identifier, $this->ecocomname3, PDO::PARAM_STR);
                        break;
                    case '`EcoDescEco3`':
                        $stmt->bindValue($identifier, $this->ecodesceco3, PDO::PARAM_STR);
                        break;
                    case '`RelDis3`':
                        $stmt->bindValue($identifier, $this->reldis3, PDO::PARAM_STR);
                        break;
                    case '`EcoComName4`':
                        $stmt->bindValue($identifier, $this->ecocomname4, PDO::PARAM_STR);
                        break;
                    case '`EcoDescEco4`':
                        $stmt->bindValue($identifier, $this->ecodesceco4, PDO::PARAM_STR);
                        break;
                    case '`RelDis4`':
                        $stmt->bindValue($identifier, $this->reldis4, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo_4`':
                        $stmt->bindValue($identifier, $this->socio_histinfo_4, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo_3`':
                        $stmt->bindValue($identifier, $this->socio_histinfo_3, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo_2`':
                        $stmt->bindValue($identifier, $this->socio_histinfo_2, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo_1`':
                        $stmt->bindValue($identifier, $this->socio_histinfo_1, PDO::PARAM_STR);
                        break;
                    case '`Socio_Ref_Info1`':
                        $stmt->bindValue($identifier, $this->socio_ref_info1, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo_1`':
                        $stmt->bindValue($identifier, $this->socio_curinfo_1, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo_2`':
                        $stmt->bindValue($identifier, $this->socio_curinfo_2, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo_3`':
                        $stmt->bindValue($identifier, $this->socio_curinfo_3, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo_4`':
                        $stmt->bindValue($identifier, $this->socio_curinfo_4, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo2_4`':
                        $stmt->bindValue($identifier, $this->socio_histinfo2_4, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo2_3`':
                        $stmt->bindValue($identifier, $this->socio_histinfo2_3, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo2_2`':
                        $stmt->bindValue($identifier, $this->socio_histinfo2_2, PDO::PARAM_STR);
                        break;
                    case '`Socio_HistInfo2_1`':
                        $stmt->bindValue($identifier, $this->socio_histinfo2_1, PDO::PARAM_STR);
                        break;
                    case '`Socio_Ref_Info2`':
                        $stmt->bindValue($identifier, $this->socio_ref_info2, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo2_1`':
                        $stmt->bindValue($identifier, $this->socio_curinfo2_1, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo2_2`':
                        $stmt->bindValue($identifier, $this->socio_curinfo2_2, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo2_3`':
                        $stmt->bindValue($identifier, $this->socio_curinfo2_3, PDO::PARAM_STR);
                        break;
                    case '`Socio_CurInfo2_4`':
                        $stmt->bindValue($identifier, $this->socio_curinfo2_4, PDO::PARAM_STR);
                        break;
                    case '`newpassword`':
                        $stmt->bindValue($identifier, $this->newpassword, PDO::PARAM_STR);
                        break;
                    case '`IndDate`':
                        $stmt->bindValue($identifier, $this->inddate, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            if (($retval = Wp9socioIndicatorsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = Wp9socioIndicatorsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getInstitution();
                break;
            case 3:
                return $this->getEmail();
                break;
            case 4:
                return $this->getMpaname();
                break;
            case 5:
                return $this->getMpacountry();
                break;
            case 6:
                return $this->getMpalocation();
                break;
            case 7:
                return $this->getMpacharacter();
                break;
            case 8:
                return $this->getScubadiving();
                break;
            case 9:
                return $this->getSnorkeling();
                break;
            case 10:
                return $this->getHiking();
                break;
            case 11:
                return $this->getFfwatching();
                break;
            case 12:
                return $this->getSeascapewatching();
                break;
            case 13:
                return $this->getOther1();
                break;
            case 14:
                return $this->getOther2();
                break;
            case 15:
                return $this->getOther3();
                break;
            case 16:
                return $this->getOther4();
                break;
            case 17:
                return $this->getComname1();
                break;
            case 18:
                return $this->getSciname1();
                break;
            case 19:
                return $this->getDesceco1();
                break;
            case 20:
                return $this->getTemppres1();
                break;
            case 21:
                return $this->getComname2();
                break;
            case 22:
                return $this->getSciname2();
                break;
            case 23:
                return $this->getDesceco2();
                break;
            case 24:
                return $this->getTemppres2();
                break;
            case 25:
                return $this->getComname3();
                break;
            case 26:
                return $this->getSciname3();
                break;
            case 27:
                return $this->getDesceco3();
                break;
            case 28:
                return $this->getTemppres3();
                break;
            case 29:
                return $this->getComname4();
                break;
            case 30:
                return $this->getSciname4();
                break;
            case 31:
                return $this->getDesceco4();
                break;
            case 32:
                return $this->getTemppres4();
                break;
            case 33:
                return $this->getEcocomname1();
                break;
            case 34:
                return $this->getEcodesceco1();
                break;
            case 35:
                return $this->getReldis1();
                break;
            case 36:
                return $this->getEcocomname2();
                break;
            case 37:
                return $this->getEcodesceco2();
                break;
            case 38:
                return $this->getReldis2();
                break;
            case 39:
                return $this->getEcocomname3();
                break;
            case 40:
                return $this->getEcodesceco3();
                break;
            case 41:
                return $this->getReldis3();
                break;
            case 42:
                return $this->getEcocomname4();
                break;
            case 43:
                return $this->getEcodesceco4();
                break;
            case 44:
                return $this->getReldis4();
                break;
            case 45:
                return $this->getSocioHistinfo4();
                break;
            case 46:
                return $this->getSocioHistinfo3();
                break;
            case 47:
                return $this->getSocioHistinfo2();
                break;
            case 48:
                return $this->getSocioHistinfo1();
                break;
            case 49:
                return $this->getSocioRefInfo1();
                break;
            case 50:
                return $this->getSocioCurinfo1();
                break;
            case 51:
                return $this->getSocioCurinfo2();
                break;
            case 52:
                return $this->getSocioCurinfo3();
                break;
            case 53:
                return $this->getSocioCurinfo4();
                break;
            case 54:
                return $this->getSocioHistinfo24();
                break;
            case 55:
                return $this->getSocioHistinfo23();
                break;
            case 56:
                return $this->getSocioHistinfo22();
                break;
            case 57:
                return $this->getSocioHistinfo21();
                break;
            case 58:
                return $this->getSocioRefInfo2();
                break;
            case 59:
                return $this->getSocioCurinfo21();
                break;
            case 60:
                return $this->getSocioCurinfo22();
                break;
            case 61:
                return $this->getSocioCurinfo23();
                break;
            case 62:
                return $this->getSocioCurinfo24();
                break;
            case 63:
                return $this->getNewpassword();
                break;
            case 64:
                return $this->getInddate();
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
        if (isset($alreadyDumpedObjects['Wp9socioIndicators'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Wp9socioIndicators'][$this->getPrimaryKey()] = true;
        $keys = Wp9socioIndicatorsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getInstitution(),
            $keys[3] => $this->getEmail(),
            $keys[4] => $this->getMpaname(),
            $keys[5] => $this->getMpacountry(),
            $keys[6] => $this->getMpalocation(),
            $keys[7] => $this->getMpacharacter(),
            $keys[8] => $this->getScubadiving(),
            $keys[9] => $this->getSnorkeling(),
            $keys[10] => $this->getHiking(),
            $keys[11] => $this->getFfwatching(),
            $keys[12] => $this->getSeascapewatching(),
            $keys[13] => $this->getOther1(),
            $keys[14] => $this->getOther2(),
            $keys[15] => $this->getOther3(),
            $keys[16] => $this->getOther4(),
            $keys[17] => $this->getComname1(),
            $keys[18] => $this->getSciname1(),
            $keys[19] => $this->getDesceco1(),
            $keys[20] => $this->getTemppres1(),
            $keys[21] => $this->getComname2(),
            $keys[22] => $this->getSciname2(),
            $keys[23] => $this->getDesceco2(),
            $keys[24] => $this->getTemppres2(),
            $keys[25] => $this->getComname3(),
            $keys[26] => $this->getSciname3(),
            $keys[27] => $this->getDesceco3(),
            $keys[28] => $this->getTemppres3(),
            $keys[29] => $this->getComname4(),
            $keys[30] => $this->getSciname4(),
            $keys[31] => $this->getDesceco4(),
            $keys[32] => $this->getTemppres4(),
            $keys[33] => $this->getEcocomname1(),
            $keys[34] => $this->getEcodesceco1(),
            $keys[35] => $this->getReldis1(),
            $keys[36] => $this->getEcocomname2(),
            $keys[37] => $this->getEcodesceco2(),
            $keys[38] => $this->getReldis2(),
            $keys[39] => $this->getEcocomname3(),
            $keys[40] => $this->getEcodesceco3(),
            $keys[41] => $this->getReldis3(),
            $keys[42] => $this->getEcocomname4(),
            $keys[43] => $this->getEcodesceco4(),
            $keys[44] => $this->getReldis4(),
            $keys[45] => $this->getSocioHistinfo4(),
            $keys[46] => $this->getSocioHistinfo3(),
            $keys[47] => $this->getSocioHistinfo2(),
            $keys[48] => $this->getSocioHistinfo1(),
            $keys[49] => $this->getSocioRefInfo1(),
            $keys[50] => $this->getSocioCurinfo1(),
            $keys[51] => $this->getSocioCurinfo2(),
            $keys[52] => $this->getSocioCurinfo3(),
            $keys[53] => $this->getSocioCurinfo4(),
            $keys[54] => $this->getSocioHistinfo24(),
            $keys[55] => $this->getSocioHistinfo23(),
            $keys[56] => $this->getSocioHistinfo22(),
            $keys[57] => $this->getSocioHistinfo21(),
            $keys[58] => $this->getSocioRefInfo2(),
            $keys[59] => $this->getSocioCurinfo21(),
            $keys[60] => $this->getSocioCurinfo22(),
            $keys[61] => $this->getSocioCurinfo23(),
            $keys[62] => $this->getSocioCurinfo24(),
            $keys[63] => $this->getNewpassword(),
            $keys[64] => $this->getInddate(),
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
        $pos = Wp9socioIndicatorsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setInstitution($value);
                break;
            case 3:
                $this->setEmail($value);
                break;
            case 4:
                $this->setMpaname($value);
                break;
            case 5:
                $this->setMpacountry($value);
                break;
            case 6:
                $this->setMpalocation($value);
                break;
            case 7:
                $this->setMpacharacter($value);
                break;
            case 8:
                $this->setScubadiving($value);
                break;
            case 9:
                $this->setSnorkeling($value);
                break;
            case 10:
                $this->setHiking($value);
                break;
            case 11:
                $this->setFfwatching($value);
                break;
            case 12:
                $this->setSeascapewatching($value);
                break;
            case 13:
                $this->setOther1($value);
                break;
            case 14:
                $this->setOther2($value);
                break;
            case 15:
                $this->setOther3($value);
                break;
            case 16:
                $this->setOther4($value);
                break;
            case 17:
                $this->setComname1($value);
                break;
            case 18:
                $this->setSciname1($value);
                break;
            case 19:
                $this->setDesceco1($value);
                break;
            case 20:
                $this->setTemppres1($value);
                break;
            case 21:
                $this->setComname2($value);
                break;
            case 22:
                $this->setSciname2($value);
                break;
            case 23:
                $this->setDesceco2($value);
                break;
            case 24:
                $this->setTemppres2($value);
                break;
            case 25:
                $this->setComname3($value);
                break;
            case 26:
                $this->setSciname3($value);
                break;
            case 27:
                $this->setDesceco3($value);
                break;
            case 28:
                $this->setTemppres3($value);
                break;
            case 29:
                $this->setComname4($value);
                break;
            case 30:
                $this->setSciname4($value);
                break;
            case 31:
                $this->setDesceco4($value);
                break;
            case 32:
                $this->setTemppres4($value);
                break;
            case 33:
                $this->setEcocomname1($value);
                break;
            case 34:
                $this->setEcodesceco1($value);
                break;
            case 35:
                $this->setReldis1($value);
                break;
            case 36:
                $this->setEcocomname2($value);
                break;
            case 37:
                $this->setEcodesceco2($value);
                break;
            case 38:
                $this->setReldis2($value);
                break;
            case 39:
                $this->setEcocomname3($value);
                break;
            case 40:
                $this->setEcodesceco3($value);
                break;
            case 41:
                $this->setReldis3($value);
                break;
            case 42:
                $this->setEcocomname4($value);
                break;
            case 43:
                $this->setEcodesceco4($value);
                break;
            case 44:
                $this->setReldis4($value);
                break;
            case 45:
                $this->setSocioHistinfo4($value);
                break;
            case 46:
                $this->setSocioHistinfo3($value);
                break;
            case 47:
                $this->setSocioHistinfo2($value);
                break;
            case 48:
                $this->setSocioHistinfo1($value);
                break;
            case 49:
                $this->setSocioRefInfo1($value);
                break;
            case 50:
                $this->setSocioCurinfo1($value);
                break;
            case 51:
                $this->setSocioCurinfo2($value);
                break;
            case 52:
                $this->setSocioCurinfo3($value);
                break;
            case 53:
                $this->setSocioCurinfo4($value);
                break;
            case 54:
                $this->setSocioHistinfo24($value);
                break;
            case 55:
                $this->setSocioHistinfo23($value);
                break;
            case 56:
                $this->setSocioHistinfo22($value);
                break;
            case 57:
                $this->setSocioHistinfo21($value);
                break;
            case 58:
                $this->setSocioRefInfo2($value);
                break;
            case 59:
                $this->setSocioCurinfo21($value);
                break;
            case 60:
                $this->setSocioCurinfo22($value);
                break;
            case 61:
                $this->setSocioCurinfo23($value);
                break;
            case 62:
                $this->setSocioCurinfo24($value);
                break;
            case 63:
                $this->setNewpassword($value);
                break;
            case 64:
                $this->setInddate($value);
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
        $keys = Wp9socioIndicatorsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setInstitution($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMpaname($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMpacountry($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMpalocation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMpacharacter($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setScubadiving($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSnorkeling($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setHiking($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFfwatching($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSeascapewatching($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOther1($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOther2($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOther3($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOther4($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setComname1($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSciname1($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDesceco1($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTemppres1($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setComname2($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSciname2($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDesceco2($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTemppres2($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setComname3($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSciname3($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDesceco3($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTemppres3($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setComname4($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setSciname4($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDesceco4($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTemppres4($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEcocomname1($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEcodesceco1($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setReldis1($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEcocomname2($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setEcodesceco2($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setReldis2($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEcocomname3($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setEcodesceco3($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setReldis3($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setEcocomname4($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEcodesceco4($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setReldis4($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setSocioHistinfo4($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setSocioHistinfo3($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setSocioHistinfo2($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setSocioHistinfo1($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setSocioRefInfo1($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setSocioCurinfo1($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setSocioCurinfo2($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setSocioCurinfo3($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setSocioCurinfo4($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setSocioHistinfo24($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setSocioHistinfo23($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setSocioHistinfo22($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setSocioHistinfo21($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setSocioRefInfo2($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setSocioCurinfo21($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setSocioCurinfo22($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setSocioCurinfo23($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setSocioCurinfo24($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setNewpassword($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setInddate($arr[$keys[64]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(Wp9socioIndicatorsPeer::DATABASE_NAME);

        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ID)) $criteria->add(Wp9socioIndicatorsPeer::ID, $this->id);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::NAME)) $criteria->add(Wp9socioIndicatorsPeer::NAME, $this->name);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::INSTITUTION)) $criteria->add(Wp9socioIndicatorsPeer::INSTITUTION, $this->institution);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::EMAIL)) $criteria->add(Wp9socioIndicatorsPeer::EMAIL, $this->email);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPANAME)) $criteria->add(Wp9socioIndicatorsPeer::MPANAME, $this->mpaname);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPACOUNTRY)) $criteria->add(Wp9socioIndicatorsPeer::MPACOUNTRY, $this->mpacountry);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPALOCATION)) $criteria->add(Wp9socioIndicatorsPeer::MPALOCATION, $this->mpalocation);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::MPACHARACTER)) $criteria->add(Wp9socioIndicatorsPeer::MPACHARACTER, $this->mpacharacter);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCUBADIVING)) $criteria->add(Wp9socioIndicatorsPeer::SCUBADIVING, $this->scubadiving);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SNORKELING)) $criteria->add(Wp9socioIndicatorsPeer::SNORKELING, $this->snorkeling);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::HIKING)) $criteria->add(Wp9socioIndicatorsPeer::HIKING, $this->hiking);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::FFWATCHING)) $criteria->add(Wp9socioIndicatorsPeer::FFWATCHING, $this->ffwatching);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SEASCAPEWATCHING)) $criteria->add(Wp9socioIndicatorsPeer::SEASCAPEWATCHING, $this->seascapewatching);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER1)) $criteria->add(Wp9socioIndicatorsPeer::OTHER1, $this->other1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER2)) $criteria->add(Wp9socioIndicatorsPeer::OTHER2, $this->other2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER3)) $criteria->add(Wp9socioIndicatorsPeer::OTHER3, $this->other3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::OTHER4)) $criteria->add(Wp9socioIndicatorsPeer::OTHER4, $this->other4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME1)) $criteria->add(Wp9socioIndicatorsPeer::COMNAME1, $this->comname1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME1)) $criteria->add(Wp9socioIndicatorsPeer::SCINAME1, $this->sciname1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO1)) $criteria->add(Wp9socioIndicatorsPeer::DESCECO1, $this->desceco1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES1)) $criteria->add(Wp9socioIndicatorsPeer::TEMPPRES1, $this->temppres1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME2)) $criteria->add(Wp9socioIndicatorsPeer::COMNAME2, $this->comname2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME2)) $criteria->add(Wp9socioIndicatorsPeer::SCINAME2, $this->sciname2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO2)) $criteria->add(Wp9socioIndicatorsPeer::DESCECO2, $this->desceco2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES2)) $criteria->add(Wp9socioIndicatorsPeer::TEMPPRES2, $this->temppres2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME3)) $criteria->add(Wp9socioIndicatorsPeer::COMNAME3, $this->comname3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME3)) $criteria->add(Wp9socioIndicatorsPeer::SCINAME3, $this->sciname3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO3)) $criteria->add(Wp9socioIndicatorsPeer::DESCECO3, $this->desceco3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES3)) $criteria->add(Wp9socioIndicatorsPeer::TEMPPRES3, $this->temppres3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::COMNAME4)) $criteria->add(Wp9socioIndicatorsPeer::COMNAME4, $this->comname4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SCINAME4)) $criteria->add(Wp9socioIndicatorsPeer::SCINAME4, $this->sciname4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::DESCECO4)) $criteria->add(Wp9socioIndicatorsPeer::DESCECO4, $this->desceco4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::TEMPPRES4)) $criteria->add(Wp9socioIndicatorsPeer::TEMPPRES4, $this->temppres4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME1)) $criteria->add(Wp9socioIndicatorsPeer::ECOCOMNAME1, $this->ecocomname1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO1)) $criteria->add(Wp9socioIndicatorsPeer::ECODESCECO1, $this->ecodesceco1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS1)) $criteria->add(Wp9socioIndicatorsPeer::RELDIS1, $this->reldis1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME2)) $criteria->add(Wp9socioIndicatorsPeer::ECOCOMNAME2, $this->ecocomname2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO2)) $criteria->add(Wp9socioIndicatorsPeer::ECODESCECO2, $this->ecodesceco2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS2)) $criteria->add(Wp9socioIndicatorsPeer::RELDIS2, $this->reldis2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME3)) $criteria->add(Wp9socioIndicatorsPeer::ECOCOMNAME3, $this->ecocomname3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO3)) $criteria->add(Wp9socioIndicatorsPeer::ECODESCECO3, $this->ecodesceco3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS3)) $criteria->add(Wp9socioIndicatorsPeer::RELDIS3, $this->reldis3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECOCOMNAME4)) $criteria->add(Wp9socioIndicatorsPeer::ECOCOMNAME4, $this->ecocomname4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::ECODESCECO4)) $criteria->add(Wp9socioIndicatorsPeer::ECODESCECO4, $this->ecodesceco4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::RELDIS4)) $criteria->add(Wp9socioIndicatorsPeer::RELDIS4, $this->reldis4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4, $this->socio_histinfo_4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3, $this->socio_histinfo_3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2, $this->socio_histinfo_2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1, $this->socio_histinfo_1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_REF_INFO1)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_REF_INFO1, $this->socio_ref_info1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_1)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO_1, $this->socio_curinfo_1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_2)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO_2, $this->socio_curinfo_2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_3)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO_3, $this->socio_curinfo_3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO_4)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO_4, $this->socio_curinfo_4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4, $this->socio_histinfo2_4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3, $this->socio_histinfo2_3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2, $this->socio_histinfo2_2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1, $this->socio_histinfo2_1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_REF_INFO2)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_REF_INFO2, $this->socio_ref_info2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1, $this->socio_curinfo2_1);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2, $this->socio_curinfo2_2);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3, $this->socio_curinfo2_3);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4)) $criteria->add(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4, $this->socio_curinfo2_4);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::NEWPASSWORD)) $criteria->add(Wp9socioIndicatorsPeer::NEWPASSWORD, $this->newpassword);
        if ($this->isColumnModified(Wp9socioIndicatorsPeer::INDDATE)) $criteria->add(Wp9socioIndicatorsPeer::INDDATE, $this->inddate);

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
        $criteria = new Criteria(Wp9socioIndicatorsPeer::DATABASE_NAME);
        $criteria->add(Wp9socioIndicatorsPeer::ID, $this->id);

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
     * @param object $copyObj An object of Wp9socioIndicators (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setInstitution($this->getInstitution());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setMpaname($this->getMpaname());
        $copyObj->setMpacountry($this->getMpacountry());
        $copyObj->setMpalocation($this->getMpalocation());
        $copyObj->setMpacharacter($this->getMpacharacter());
        $copyObj->setScubadiving($this->getScubadiving());
        $copyObj->setSnorkeling($this->getSnorkeling());
        $copyObj->setHiking($this->getHiking());
        $copyObj->setFfwatching($this->getFfwatching());
        $copyObj->setSeascapewatching($this->getSeascapewatching());
        $copyObj->setOther1($this->getOther1());
        $copyObj->setOther2($this->getOther2());
        $copyObj->setOther3($this->getOther3());
        $copyObj->setOther4($this->getOther4());
        $copyObj->setComname1($this->getComname1());
        $copyObj->setSciname1($this->getSciname1());
        $copyObj->setDesceco1($this->getDesceco1());
        $copyObj->setTemppres1($this->getTemppres1());
        $copyObj->setComname2($this->getComname2());
        $copyObj->setSciname2($this->getSciname2());
        $copyObj->setDesceco2($this->getDesceco2());
        $copyObj->setTemppres2($this->getTemppres2());
        $copyObj->setComname3($this->getComname3());
        $copyObj->setSciname3($this->getSciname3());
        $copyObj->setDesceco3($this->getDesceco3());
        $copyObj->setTemppres3($this->getTemppres3());
        $copyObj->setComname4($this->getComname4());
        $copyObj->setSciname4($this->getSciname4());
        $copyObj->setDesceco4($this->getDesceco4());
        $copyObj->setTemppres4($this->getTemppres4());
        $copyObj->setEcocomname1($this->getEcocomname1());
        $copyObj->setEcodesceco1($this->getEcodesceco1());
        $copyObj->setReldis1($this->getReldis1());
        $copyObj->setEcocomname2($this->getEcocomname2());
        $copyObj->setEcodesceco2($this->getEcodesceco2());
        $copyObj->setReldis2($this->getReldis2());
        $copyObj->setEcocomname3($this->getEcocomname3());
        $copyObj->setEcodesceco3($this->getEcodesceco3());
        $copyObj->setReldis3($this->getReldis3());
        $copyObj->setEcocomname4($this->getEcocomname4());
        $copyObj->setEcodesceco4($this->getEcodesceco4());
        $copyObj->setReldis4($this->getReldis4());
        $copyObj->setSocioHistinfo4($this->getSocioHistinfo4());
        $copyObj->setSocioHistinfo3($this->getSocioHistinfo3());
        $copyObj->setSocioHistinfo2($this->getSocioHistinfo2());
        $copyObj->setSocioHistinfo1($this->getSocioHistinfo1());
        $copyObj->setSocioRefInfo1($this->getSocioRefInfo1());
        $copyObj->setSocioCurinfo1($this->getSocioCurinfo1());
        $copyObj->setSocioCurinfo2($this->getSocioCurinfo2());
        $copyObj->setSocioCurinfo3($this->getSocioCurinfo3());
        $copyObj->setSocioCurinfo4($this->getSocioCurinfo4());
        $copyObj->setSocioHistinfo24($this->getSocioHistinfo24());
        $copyObj->setSocioHistinfo23($this->getSocioHistinfo23());
        $copyObj->setSocioHistinfo22($this->getSocioHistinfo22());
        $copyObj->setSocioHistinfo21($this->getSocioHistinfo21());
        $copyObj->setSocioRefInfo2($this->getSocioRefInfo2());
        $copyObj->setSocioCurinfo21($this->getSocioCurinfo21());
        $copyObj->setSocioCurinfo22($this->getSocioCurinfo22());
        $copyObj->setSocioCurinfo23($this->getSocioCurinfo23());
        $copyObj->setSocioCurinfo24($this->getSocioCurinfo24());
        $copyObj->setNewpassword($this->getNewpassword());
        $copyObj->setInddate($this->getInddate());
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
     * @return Wp9socioIndicators Clone of current object.
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
     * @return Wp9socioIndicatorsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new Wp9socioIndicatorsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->institution = null;
        $this->email = null;
        $this->mpaname = null;
        $this->mpacountry = null;
        $this->mpalocation = null;
        $this->mpacharacter = null;
        $this->scubadiving = null;
        $this->snorkeling = null;
        $this->hiking = null;
        $this->ffwatching = null;
        $this->seascapewatching = null;
        $this->other1 = null;
        $this->other2 = null;
        $this->other3 = null;
        $this->other4 = null;
        $this->comname1 = null;
        $this->sciname1 = null;
        $this->desceco1 = null;
        $this->temppres1 = null;
        $this->comname2 = null;
        $this->sciname2 = null;
        $this->desceco2 = null;
        $this->temppres2 = null;
        $this->comname3 = null;
        $this->sciname3 = null;
        $this->desceco3 = null;
        $this->temppres3 = null;
        $this->comname4 = null;
        $this->sciname4 = null;
        $this->desceco4 = null;
        $this->temppres4 = null;
        $this->ecocomname1 = null;
        $this->ecodesceco1 = null;
        $this->reldis1 = null;
        $this->ecocomname2 = null;
        $this->ecodesceco2 = null;
        $this->reldis2 = null;
        $this->ecocomname3 = null;
        $this->ecodesceco3 = null;
        $this->reldis3 = null;
        $this->ecocomname4 = null;
        $this->ecodesceco4 = null;
        $this->reldis4 = null;
        $this->socio_histinfo_4 = null;
        $this->socio_histinfo_3 = null;
        $this->socio_histinfo_2 = null;
        $this->socio_histinfo_1 = null;
        $this->socio_ref_info1 = null;
        $this->socio_curinfo_1 = null;
        $this->socio_curinfo_2 = null;
        $this->socio_curinfo_3 = null;
        $this->socio_curinfo_4 = null;
        $this->socio_histinfo2_4 = null;
        $this->socio_histinfo2_3 = null;
        $this->socio_histinfo2_2 = null;
        $this->socio_histinfo2_1 = null;
        $this->socio_ref_info2 = null;
        $this->socio_curinfo2_1 = null;
        $this->socio_curinfo2_2 = null;
        $this->socio_curinfo2_3 = null;
        $this->socio_curinfo2_4 = null;
        $this->newpassword = null;
        $this->inddate = null;
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
        return (string) $this->exportTo(Wp9socioIndicatorsPeer::DEFAULT_STRING_FORMAT);
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
