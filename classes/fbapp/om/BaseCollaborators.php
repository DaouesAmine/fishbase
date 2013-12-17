<?php


/**
 * Base class that represents a row from the 'collaborators' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCollaborators extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CollaboratorsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CollaboratorsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the personnel field.
     * @var        int
     */
    protected $personnel;

    /**
     * The value for the surname field.
     * @var        string
     */
    protected $surname;

    /**
     * The value for the prename field.
     * @var        string
     */
    protected $prename;

    /**
     * The value for the reportgroup field.
     * @var        string
     */
    protected $reportgroup;

    /**
     * The value for the collabtype field.
     * @var        string
     */
    protected $collabtype;

    /**
     * The value for the e-mail field.
     * @var        string
     */
    protected $e-mail;

    /**
     * The value for the e-mailnew field.
     * @var        string
     */
    protected $e-mailnew;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the copyright field.
     * @var        string
     */
    protected $copyright;

    /**
     * The value for the rde_user field.
     * @var        int
     */
    protected $rde_user;

    /**
     * The value for the institute field.
     * @var        string
     */
    protected $institute;

    /**
     * The value for the number field.
     * @var        string
     */
    protected $number;

    /**
     * The value for the street field.
     * @var        string
     */
    protected $street;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the telefon-city field.
     * @var        string
     */
    protected $telefon-city;

    /**
     * The value for the telefon field.
     * @var        string
     */
    protected $telefon;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the telex field.
     * @var        string
     */
    protected $telex;

    /**
     * The value for the webpage field.
     * @var        string
     */
    protected $webpage;

    /**
     * The value for the keywords field.
     * @var        string
     */
    protected $keywords;

    /**
     * The value for the larvalbasecollab field.
     * @var        int
     */
    protected $larvalbasecollab;

    /**
     * The value for the nars field.
     * @var        int
     */
    protected $nars;

    /**
     * The value for the staffphoto field.
     * @var        resource
     */
    protected $staffphoto;

    /**
     * The value for the collabtypeorder field.
     * @var        double
     */
    protected $collabtypeorder;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the yearend field.
     * @var        int
     */
    protected $yearend;

    /**
     * The value for the entered field.
     * @var        int
     */
    protected $entered;

    /**
     * The value for the dataentered field.
     * @var        string
     */
    protected $dataentered;

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
     * The value for the edit_country field.
     * @var        string
     */
    protected $edit_country;

    /**
     * The value for the edit_species field.
     * @var        string
     */
    protected $edit_species;

    /**
     * The value for the edit_comnames field.
     * @var        string
     */
    protected $edit_comnames;

    /**
     * The value for the edit_larvalbase field.
     * @var        string
     */
    protected $edit_larvalbase;

    /**
     * The value for the edit_synonymsx field.
     * @var        string
     */
    protected $edit_synonymsx;

    /**
     * The value for the edit_pictures field.
     * @var        string
     */
    protected $edit_pictures;

    /**
     * The value for the edit_expedition field.
     * @var        string
     */
    protected $edit_expedition;

    /**
     * The value for the edit_occurrence field.
     * @var        string
     */
    protected $edit_occurrence;

    /**
     * The value for the show_email field.
     * @var        int
     */
    protected $show_email;

    /**
     * The value for the show_country field.
     * @var        int
     */
    protected $show_country;

    /**
     * The value for the show_address field.
     * @var        int
     */
    protected $show_address;

    /**
     * The value for the edit_genera field.
     * @var        string
     */
    protected $edit_genera;

    /**
     * The value for the edit_contacts field.
     * @var        string
     */
    protected $edit_contacts;

    /**
     * The value for the edit_popdyn field.
     * @var        string
     */
    protected $edit_popdyn;

    /**
     * The value for the edit_introductions field.
     * @var        string
     */
    protected $edit_introductions;

    /**
     * The value for the edit_aquamaint field.
     * @var        string
     */
    protected $edit_aquamaint;

    /**
     * The value for the edit_factsheet field.
     * @var        string
     */
    protected $edit_factsheet;

    /**
     * The value for the edit_dbase field.
     * @var        string
     */
    protected $edit_dbase;

    /**
     * The value for the edit_factsheet_aquaculture field.
     * @var        string
     */
    protected $edit_factsheet_aquaculture;

    /**
     * The value for the edit_labels field.
     * @var        string
     */
    protected $edit_labels;

    /**
     * The value for the edit_labels_lang field.
     * @var        string
     */
    protected $edit_labels_lang;

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
     * Get the [personnel] column value.
     *
     * @return int
     */
    public function getPersonnel()
    {

        return $this->personnel;
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
     * Get the [prename] column value.
     *
     * @return string
     */
    public function getPrename()
    {

        return $this->prename;
    }

    /**
     * Get the [reportgroup] column value.
     *
     * @return string
     */
    public function getReportgroup()
    {

        return $this->reportgroup;
    }

    /**
     * Get the [collabtype] column value.
     *
     * @return string
     */
    public function getCollabtype()
    {

        return $this->collabtype;
    }

    /**
     * Get the [e-mail] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->e-mail;
    }

    /**
     * Get the [e-mailnew] column value.
     *
     * @return string
     */
    public function getEmailnew()
    {

        return $this->e-mailnew;
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
     * Get the [copyright] column value.
     *
     * @return string
     */
    public function getCopyright()
    {

        return $this->copyright;
    }

    /**
     * Get the [rde_user] column value.
     *
     * @return int
     */
    public function getRdeUser()
    {

        return $this->rde_user;
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
     * Get the [number] column value.
     *
     * @return string
     */
    public function getNumber()
    {

        return $this->number;
    }

    /**
     * Get the [street] column value.
     *
     * @return string
     */
    public function getStreet()
    {

        return $this->street;
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
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
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
     * Get the [telefon-city] column value.
     *
     * @return string
     */
    public function getTelefoncity()
    {

        return $this->telefon-city;
    }

    /**
     * Get the [telefon] column value.
     *
     * @return string
     */
    public function getTelefon()
    {

        return $this->telefon;
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
     * Get the [telex] column value.
     *
     * @return string
     */
    public function getTelex()
    {

        return $this->telex;
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
     * Get the [keywords] column value.
     *
     * @return string
     */
    public function getKeywords()
    {

        return $this->keywords;
    }

    /**
     * Get the [larvalbasecollab] column value.
     *
     * @return int
     */
    public function getLarvalbasecollab()
    {

        return $this->larvalbasecollab;
    }

    /**
     * Get the [nars] column value.
     *
     * @return int
     */
    public function getNars()
    {

        return $this->nars;
    }

    /**
     * Get the [staffphoto] column value.
     *
     * @return resource
     */
    public function getStaffphoto()
    {

        return $this->staffphoto;
    }

    /**
     * Get the [collabtypeorder] column value.
     *
     * @return double
     */
    public function getCollabtypeorder()
    {

        return $this->collabtypeorder;
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
     * Get the [yearend] column value.
     *
     * @return int
     */
    public function getYearend()
    {

        return $this->yearend;
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
     * Get the [optionally formatted] temporal [dataentered] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDataentered($format = 'Y-m-d H:i:s')
    {
        if ($this->dataentered === null) {
            return null;
        }

        if ($this->dataentered === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dataentered);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dataentered, true), $x);
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
     * Get the [edit_country] column value.
     *
     * @return string
     */
    public function getEditCountry()
    {

        return $this->edit_country;
    }

    /**
     * Get the [edit_species] column value.
     *
     * @return string
     */
    public function getEditSpecies()
    {

        return $this->edit_species;
    }

    /**
     * Get the [edit_comnames] column value.
     *
     * @return string
     */
    public function getEditComnames()
    {

        return $this->edit_comnames;
    }

    /**
     * Get the [edit_larvalbase] column value.
     *
     * @return string
     */
    public function getEditLarvalbase()
    {

        return $this->edit_larvalbase;
    }

    /**
     * Get the [edit_synonymsx] column value.
     *
     * @return string
     */
    public function getEditSynonymsx()
    {

        return $this->edit_synonymsx;
    }

    /**
     * Get the [edit_pictures] column value.
     *
     * @return string
     */
    public function getEditPictures()
    {

        return $this->edit_pictures;
    }

    /**
     * Get the [edit_expedition] column value.
     *
     * @return string
     */
    public function getEditExpedition()
    {

        return $this->edit_expedition;
    }

    /**
     * Get the [edit_occurrence] column value.
     *
     * @return string
     */
    public function getEditOccurrence()
    {

        return $this->edit_occurrence;
    }

    /**
     * Get the [show_email] column value.
     *
     * @return int
     */
    public function getShowEmail()
    {

        return $this->show_email;
    }

    /**
     * Get the [show_country] column value.
     *
     * @return int
     */
    public function getShowCountry()
    {

        return $this->show_country;
    }

    /**
     * Get the [show_address] column value.
     *
     * @return int
     */
    public function getShowAddress()
    {

        return $this->show_address;
    }

    /**
     * Get the [edit_genera] column value.
     *
     * @return string
     */
    public function getEditGenera()
    {

        return $this->edit_genera;
    }

    /**
     * Get the [edit_contacts] column value.
     *
     * @return string
     */
    public function getEditContacts()
    {

        return $this->edit_contacts;
    }

    /**
     * Get the [edit_popdyn] column value.
     *
     * @return string
     */
    public function getEditPopdyn()
    {

        return $this->edit_popdyn;
    }

    /**
     * Get the [edit_introductions] column value.
     *
     * @return string
     */
    public function getEditIntroductions()
    {

        return $this->edit_introductions;
    }

    /**
     * Get the [edit_aquamaint] column value.
     *
     * @return string
     */
    public function getEditAquamaint()
    {

        return $this->edit_aquamaint;
    }

    /**
     * Get the [edit_factsheet] column value.
     *
     * @return string
     */
    public function getEditFactsheet()
    {

        return $this->edit_factsheet;
    }

    /**
     * Get the [edit_dbase] column value.
     *
     * @return string
     */
    public function getEditDbase()
    {

        return $this->edit_dbase;
    }

    /**
     * Get the [edit_factsheet_aquaculture] column value.
     *
     * @return string
     */
    public function getEditFactsheetAquaculture()
    {

        return $this->edit_factsheet_aquaculture;
    }

    /**
     * Get the [edit_labels] column value.
     *
     * @return string
     */
    public function getEditLabels()
    {

        return $this->edit_labels;
    }

    /**
     * Get the [edit_labels_lang] column value.
     *
     * @return string
     */
    public function getEditLabelsLang()
    {

        return $this->edit_labels_lang;
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
     * Set the value of [personnel] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setPersonnel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->personnel !== $v) {
            $this->personnel = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::PERSONNEL;
        }


        return $this;
    } // setPersonnel()

    /**
     * Set the value of [surname] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setSurname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surname !== $v) {
            $this->surname = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::SURNAME;
        }


        return $this;
    } // setSurname()

    /**
     * Set the value of [prename] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setPrename($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prename !== $v) {
            $this->prename = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::PRENAME;
        }


        return $this;
    } // setPrename()

    /**
     * Set the value of [reportgroup] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setReportgroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reportgroup !== $v) {
            $this->reportgroup = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::REPORTGROUP;
        }


        return $this;
    } // setReportgroup()

    /**
     * Set the value of [collabtype] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setCollabtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->collabtype !== $v) {
            $this->collabtype = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::COLLABTYPE;
        }


        return $this;
    } // setCollabtype()

    /**
     * Set the value of [e-mail] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->e-mail !== $v) {
            $this->e-mail = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::E-MAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [e-mailnew] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEmailnew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->e-mailnew !== $v) {
            $this->e-mailnew = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::E-MAILNEW;
        }


        return $this;
    } // setEmailnew()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [copyright] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setCopyright($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->copyright !== $v) {
            $this->copyright = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::COPYRIGHT;
        }


        return $this;
    } // setCopyright()

    /**
     * Set the value of [rde_user] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setRdeUser($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rde_user !== $v) {
            $this->rde_user = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::RDE_USER;
        }


        return $this;
    } // setRdeUser()

    /**
     * Set the value of [institute] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setInstitute($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->institute !== $v) {
            $this->institute = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::INSTITUTE;
        }


        return $this;
    } // setInstitute()

    /**
     * Set the value of [number] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [street] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setStreet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->street !== $v) {
            $this->street = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::STREET;
        }


        return $this;
    } // setStreet()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [telefon-city] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setTelefoncity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telefon-city !== $v) {
            $this->telefon-city = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::TELEFON-CITY;
        }


        return $this;
    } // setTelefoncity()

    /**
     * Set the value of [telefon] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setTelefon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telefon !== $v) {
            $this->telefon = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::TELEFON;
        }


        return $this;
    } // setTelefon()

    /**
     * Set the value of [fax] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [telex] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setTelex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telex !== $v) {
            $this->telex = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::TELEX;
        }


        return $this;
    } // setTelex()

    /**
     * Set the value of [webpage] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setWebpage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->webpage !== $v) {
            $this->webpage = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::WEBPAGE;
        }


        return $this;
    } // setWebpage()

    /**
     * Set the value of [keywords] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setKeywords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->keywords !== $v) {
            $this->keywords = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::KEYWORDS;
        }


        return $this;
    } // setKeywords()

    /**
     * Set the value of [larvalbasecollab] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setLarvalbasecollab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvalbasecollab !== $v) {
            $this->larvalbasecollab = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::LARVALBASECOLLAB;
        }


        return $this;
    } // setLarvalbasecollab()

    /**
     * Set the value of [nars] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setNars($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nars !== $v) {
            $this->nars = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::NARS;
        }


        return $this;
    } // setNars()

    /**
     * Set the value of [staffphoto] column.
     *
     * @param  resource $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setStaffphoto($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->staffphoto = fopen('php://memory', 'r+');
            fwrite($this->staffphoto, $v);
            rewind($this->staffphoto);
        } else { // it's already a stream
            $this->staffphoto = $v;
        }
        $this->modifiedColumns[] = CollaboratorsPeer::STAFFPHOTO;


        return $this;
    } // setStaffphoto()

    /**
     * Set the value of [collabtypeorder] column.
     *
     * @param  double $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setCollabtypeorder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->collabtypeorder !== $v) {
            $this->collabtypeorder = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::COLLABTYPEORDER;
        }


        return $this;
    } // setCollabtypeorder()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [yearend] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setYearend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearend !== $v) {
            $this->yearend = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::YEAREND;
        }


        return $this;
    } // setYearend()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dataentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Collaborators The current object (for fluent API support)
     */
    public function setDataentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dataentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dataentered !== null && $tmpDt = new DateTime($this->dataentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dataentered = $newDateAsString;
                $this->modifiedColumns[] = CollaboratorsPeer::DATAENTERED;
            }
        } // if either are not null


        return $this;
    } // setDataentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Collaborators The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = CollaboratorsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [edit_country] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_country !== $v) {
            $this->edit_country = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_COUNTRY;
        }


        return $this;
    } // setEditCountry()

    /**
     * Set the value of [edit_species] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_species !== $v) {
            $this->edit_species = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_SPECIES;
        }


        return $this;
    } // setEditSpecies()

    /**
     * Set the value of [edit_comnames] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditComnames($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_comnames !== $v) {
            $this->edit_comnames = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_COMNAMES;
        }


        return $this;
    } // setEditComnames()

    /**
     * Set the value of [edit_larvalbase] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditLarvalbase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_larvalbase !== $v) {
            $this->edit_larvalbase = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_LARVALBASE;
        }


        return $this;
    } // setEditLarvalbase()

    /**
     * Set the value of [edit_synonymsx] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditSynonymsx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_synonymsx !== $v) {
            $this->edit_synonymsx = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_SYNONYMSX;
        }


        return $this;
    } // setEditSynonymsx()

    /**
     * Set the value of [edit_pictures] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditPictures($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_pictures !== $v) {
            $this->edit_pictures = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_PICTURES;
        }


        return $this;
    } // setEditPictures()

    /**
     * Set the value of [edit_expedition] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditExpedition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_expedition !== $v) {
            $this->edit_expedition = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_EXPEDITION;
        }


        return $this;
    } // setEditExpedition()

    /**
     * Set the value of [edit_occurrence] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditOccurrence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_occurrence !== $v) {
            $this->edit_occurrence = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_OCCURRENCE;
        }


        return $this;
    } // setEditOccurrence()

    /**
     * Set the value of [show_email] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setShowEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->show_email !== $v) {
            $this->show_email = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::SHOW_EMAIL;
        }


        return $this;
    } // setShowEmail()

    /**
     * Set the value of [show_country] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setShowCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->show_country !== $v) {
            $this->show_country = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::SHOW_COUNTRY;
        }


        return $this;
    } // setShowCountry()

    /**
     * Set the value of [show_address] column.
     *
     * @param  int $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setShowAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->show_address !== $v) {
            $this->show_address = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::SHOW_ADDRESS;
        }


        return $this;
    } // setShowAddress()

    /**
     * Set the value of [edit_genera] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditGenera($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_genera !== $v) {
            $this->edit_genera = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_GENERA;
        }


        return $this;
    } // setEditGenera()

    /**
     * Set the value of [edit_contacts] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditContacts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_contacts !== $v) {
            $this->edit_contacts = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_CONTACTS;
        }


        return $this;
    } // setEditContacts()

    /**
     * Set the value of [edit_popdyn] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditPopdyn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_popdyn !== $v) {
            $this->edit_popdyn = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_POPDYN;
        }


        return $this;
    } // setEditPopdyn()

    /**
     * Set the value of [edit_introductions] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditIntroductions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_introductions !== $v) {
            $this->edit_introductions = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_INTRODUCTIONS;
        }


        return $this;
    } // setEditIntroductions()

    /**
     * Set the value of [edit_aquamaint] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditAquamaint($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_aquamaint !== $v) {
            $this->edit_aquamaint = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_AQUAMAINT;
        }


        return $this;
    } // setEditAquamaint()

    /**
     * Set the value of [edit_factsheet] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditFactsheet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_factsheet !== $v) {
            $this->edit_factsheet = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_FACTSHEET;
        }


        return $this;
    } // setEditFactsheet()

    /**
     * Set the value of [edit_dbase] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditDbase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_dbase !== $v) {
            $this->edit_dbase = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_DBASE;
        }


        return $this;
    } // setEditDbase()

    /**
     * Set the value of [edit_factsheet_aquaculture] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditFactsheetAquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_factsheet_aquaculture !== $v) {
            $this->edit_factsheet_aquaculture = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE;
        }


        return $this;
    } // setEditFactsheetAquaculture()

    /**
     * Set the value of [edit_labels] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditLabels($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_labels !== $v) {
            $this->edit_labels = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_LABELS;
        }


        return $this;
    } // setEditLabels()

    /**
     * Set the value of [edit_labels_lang] column.
     *
     * @param  string $v new value
     * @return Collaborators The current object (for fluent API support)
     */
    public function setEditLabelsLang($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->edit_labels_lang !== $v) {
            $this->edit_labels_lang = $v;
            $this->modifiedColumns[] = CollaboratorsPeer::EDIT_LABELS_LANG;
        }


        return $this;
    } // setEditLabelsLang()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Collaborators The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CollaboratorsPeer::TS;
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

            $this->personnel = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->surname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->prename = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->reportgroup = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->collabtype = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->e-mail = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->e-mailnew = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->comments = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->copyright = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->rde_user = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->institute = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->number = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->street = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->city = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->country = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->c_code = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->telefon-city = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->telefon = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->fax = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->telex = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->webpage = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->keywords = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->larvalbasecollab = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->nars = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            if ($row[$startcol + 24] !== null) {
                $this->staffphoto = fopen('php://memory', 'r+');
                fwrite($this->staffphoto, $row[$startcol + 24]);
                rewind($this->staffphoto);
            } else {
                $this->staffphoto = null;
            }
            $this->collabtypeorder = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->year = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->yearend = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->entered = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->dataentered = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->modified = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->datemodified = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->edit_country = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->edit_species = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->edit_comnames = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->edit_larvalbase = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->edit_synonymsx = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->edit_pictures = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->edit_expedition = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->edit_occurrence = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->show_email = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->show_country = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->show_address = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->edit_genera = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->edit_contacts = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->edit_popdyn = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->edit_introductions = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->edit_aquamaint = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->edit_factsheet = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->edit_dbase = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->edit_factsheet_aquaculture = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->edit_labels = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->edit_labels_lang = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->ts = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 54; // 54 = CollaboratorsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Collaborators object", $e);
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
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CollaboratorsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CollaboratorsQuery::create()
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
            $con = Propel::getConnection(CollaboratorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CollaboratorsPeer::addInstanceToPool($this);
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
                // Rewind the staffphoto LOB column, since PDO does not rewind after inserting value.
                if ($this->staffphoto !== null && is_resource($this->staffphoto)) {
                    rewind($this->staffphoto);
                }

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
        if ($this->isColumnModified(CollaboratorsPeer::PERSONNEL)) {
            $modifiedColumns[':p' . $index++]  = '`Personnel`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::SURNAME)) {
            $modifiedColumns[':p' . $index++]  = '`Surname`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::PRENAME)) {
            $modifiedColumns[':p' . $index++]  = '`Prename`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::REPORTGROUP)) {
            $modifiedColumns[':p' . $index++]  = '`ReportGroup`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::COLLABTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`CollabType`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::E-MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`E-mail`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::E-MAILNEW)) {
            $modifiedColumns[':p' . $index++]  = '`E-mailNew`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::COPYRIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`Copyright`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::RDE_USER)) {
            $modifiedColumns[':p' . $index++]  = '`RDE_user`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::INSTITUTE)) {
            $modifiedColumns[':p' . $index++]  = '`Institute`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::STREET)) {
            $modifiedColumns[':p' . $index++]  = '`Street`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`City`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`Country`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::TELEFON-CITY)) {
            $modifiedColumns[':p' . $index++]  = '`Telefon-City`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::TELEFON)) {
            $modifiedColumns[':p' . $index++]  = '`Telefon`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`FAX`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::TELEX)) {
            $modifiedColumns[':p' . $index++]  = '`TELEX`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::WEBPAGE)) {
            $modifiedColumns[':p' . $index++]  = '`WebPage`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`Keywords`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::LARVALBASECOLLAB)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalBaseCollab`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::NARS)) {
            $modifiedColumns[':p' . $index++]  = '`NARS`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::STAFFPHOTO)) {
            $modifiedColumns[':p' . $index++]  = '`StaffPhoto`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::COLLABTYPEORDER)) {
            $modifiedColumns[':p' . $index++]  = '`CollabTypeOrder`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::YEAREND)) {
            $modifiedColumns[':p' . $index++]  = '`YearEnd`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::DATAENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DataEntered`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`edit_country`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`edit_species`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_COMNAMES)) {
            $modifiedColumns[':p' . $index++]  = '`edit_comnames`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_LARVALBASE)) {
            $modifiedColumns[':p' . $index++]  = '`edit_larvalbase`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_SYNONYMSX)) {
            $modifiedColumns[':p' . $index++]  = '`edit_synonymsx`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_PICTURES)) {
            $modifiedColumns[':p' . $index++]  = '`edit_pictures`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_EXPEDITION)) {
            $modifiedColumns[':p' . $index++]  = '`edit_expedition`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_OCCURRENCE)) {
            $modifiedColumns[':p' . $index++]  = '`edit_occurrence`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::SHOW_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`show_email`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::SHOW_COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`show_country`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::SHOW_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`show_address`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_GENERA)) {
            $modifiedColumns[':p' . $index++]  = '`edit_genera`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_CONTACTS)) {
            $modifiedColumns[':p' . $index++]  = '`edit_contacts`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_POPDYN)) {
            $modifiedColumns[':p' . $index++]  = '`edit_popdyn`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_INTRODUCTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`edit_introductions`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_AQUAMAINT)) {
            $modifiedColumns[':p' . $index++]  = '`edit_aquamaint`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_FACTSHEET)) {
            $modifiedColumns[':p' . $index++]  = '`edit_factsheet`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_DBASE)) {
            $modifiedColumns[':p' . $index++]  = '`edit_dbase`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`edit_factsheet_aquaculture`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_LABELS)) {
            $modifiedColumns[':p' . $index++]  = '`edit_labels`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_LABELS_LANG)) {
            $modifiedColumns[':p' . $index++]  = '`edit_labels_lang`';
        }
        if ($this->isColumnModified(CollaboratorsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `collaborators` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Personnel`':
                        $stmt->bindValue($identifier, $this->personnel, PDO::PARAM_INT);
                        break;
                    case '`Surname`':
                        $stmt->bindValue($identifier, $this->surname, PDO::PARAM_STR);
                        break;
                    case '`Prename`':
                        $stmt->bindValue($identifier, $this->prename, PDO::PARAM_STR);
                        break;
                    case '`ReportGroup`':
                        $stmt->bindValue($identifier, $this->reportgroup, PDO::PARAM_STR);
                        break;
                    case '`CollabType`':
                        $stmt->bindValue($identifier, $this->collabtype, PDO::PARAM_STR);
                        break;
                    case '`E-mail`':
                        $stmt->bindValue($identifier, $this->e-mail, PDO::PARAM_STR);
                        break;
                    case '`E-mailNew`':
                        $stmt->bindValue($identifier, $this->e-mailnew, PDO::PARAM_STR);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Copyright`':
                        $stmt->bindValue($identifier, $this->copyright, PDO::PARAM_STR);
                        break;
                    case '`RDE_user`':
                        $stmt->bindValue($identifier, $this->rde_user, PDO::PARAM_INT);
                        break;
                    case '`Institute`':
                        $stmt->bindValue($identifier, $this->institute, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_STR);
                        break;
                    case '`Street`':
                        $stmt->bindValue($identifier, $this->street, PDO::PARAM_STR);
                        break;
                    case '`City`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`Country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Telefon-City`':
                        $stmt->bindValue($identifier, $this->telefon-city, PDO::PARAM_STR);
                        break;
                    case '`Telefon`':
                        $stmt->bindValue($identifier, $this->telefon, PDO::PARAM_STR);
                        break;
                    case '`FAX`':
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`TELEX`':
                        $stmt->bindValue($identifier, $this->telex, PDO::PARAM_STR);
                        break;
                    case '`WebPage`':
                        $stmt->bindValue($identifier, $this->webpage, PDO::PARAM_STR);
                        break;
                    case '`Keywords`':
                        $stmt->bindValue($identifier, $this->keywords, PDO::PARAM_STR);
                        break;
                    case '`LarvalBaseCollab`':
                        $stmt->bindValue($identifier, $this->larvalbasecollab, PDO::PARAM_INT);
                        break;
                    case '`NARS`':
                        $stmt->bindValue($identifier, $this->nars, PDO::PARAM_INT);
                        break;
                    case '`StaffPhoto`':
                        if (is_resource($this->staffphoto)) {
                            rewind($this->staffphoto);
                        }
                        $stmt->bindValue($identifier, $this->staffphoto, PDO::PARAM_LOB);
                        break;
                    case '`CollabTypeOrder`':
                        $stmt->bindValue($identifier, $this->collabtypeorder, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`YearEnd`':
                        $stmt->bindValue($identifier, $this->yearend, PDO::PARAM_INT);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`DataEntered`':
                        $stmt->bindValue($identifier, $this->dataentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`DateModified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`edit_country`':
                        $stmt->bindValue($identifier, $this->edit_country, PDO::PARAM_STR);
                        break;
                    case '`edit_species`':
                        $stmt->bindValue($identifier, $this->edit_species, PDO::PARAM_STR);
                        break;
                    case '`edit_comnames`':
                        $stmt->bindValue($identifier, $this->edit_comnames, PDO::PARAM_STR);
                        break;
                    case '`edit_larvalbase`':
                        $stmt->bindValue($identifier, $this->edit_larvalbase, PDO::PARAM_STR);
                        break;
                    case '`edit_synonymsx`':
                        $stmt->bindValue($identifier, $this->edit_synonymsx, PDO::PARAM_STR);
                        break;
                    case '`edit_pictures`':
                        $stmt->bindValue($identifier, $this->edit_pictures, PDO::PARAM_STR);
                        break;
                    case '`edit_expedition`':
                        $stmt->bindValue($identifier, $this->edit_expedition, PDO::PARAM_STR);
                        break;
                    case '`edit_occurrence`':
                        $stmt->bindValue($identifier, $this->edit_occurrence, PDO::PARAM_STR);
                        break;
                    case '`show_email`':
                        $stmt->bindValue($identifier, $this->show_email, PDO::PARAM_INT);
                        break;
                    case '`show_country`':
                        $stmt->bindValue($identifier, $this->show_country, PDO::PARAM_INT);
                        break;
                    case '`show_address`':
                        $stmt->bindValue($identifier, $this->show_address, PDO::PARAM_INT);
                        break;
                    case '`edit_genera`':
                        $stmt->bindValue($identifier, $this->edit_genera, PDO::PARAM_STR);
                        break;
                    case '`edit_contacts`':
                        $stmt->bindValue($identifier, $this->edit_contacts, PDO::PARAM_STR);
                        break;
                    case '`edit_popdyn`':
                        $stmt->bindValue($identifier, $this->edit_popdyn, PDO::PARAM_STR);
                        break;
                    case '`edit_introductions`':
                        $stmt->bindValue($identifier, $this->edit_introductions, PDO::PARAM_STR);
                        break;
                    case '`edit_aquamaint`':
                        $stmt->bindValue($identifier, $this->edit_aquamaint, PDO::PARAM_STR);
                        break;
                    case '`edit_factsheet`':
                        $stmt->bindValue($identifier, $this->edit_factsheet, PDO::PARAM_STR);
                        break;
                    case '`edit_dbase`':
                        $stmt->bindValue($identifier, $this->edit_dbase, PDO::PARAM_STR);
                        break;
                    case '`edit_factsheet_aquaculture`':
                        $stmt->bindValue($identifier, $this->edit_factsheet_aquaculture, PDO::PARAM_STR);
                        break;
                    case '`edit_labels`':
                        $stmt->bindValue($identifier, $this->edit_labels, PDO::PARAM_STR);
                        break;
                    case '`edit_labels_lang`':
                        $stmt->bindValue($identifier, $this->edit_labels_lang, PDO::PARAM_STR);
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


            if (($retval = CollaboratorsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CollaboratorsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPersonnel();
                break;
            case 1:
                return $this->getSurname();
                break;
            case 2:
                return $this->getPrename();
                break;
            case 3:
                return $this->getReportgroup();
                break;
            case 4:
                return $this->getCollabtype();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getEmailnew();
                break;
            case 7:
                return $this->getComments();
                break;
            case 8:
                return $this->getCopyright();
                break;
            case 9:
                return $this->getRdeUser();
                break;
            case 10:
                return $this->getInstitute();
                break;
            case 11:
                return $this->getNumber();
                break;
            case 12:
                return $this->getStreet();
                break;
            case 13:
                return $this->getCity();
                break;
            case 14:
                return $this->getCountry();
                break;
            case 15:
                return $this->getCCode();
                break;
            case 16:
                return $this->getTelefoncity();
                break;
            case 17:
                return $this->getTelefon();
                break;
            case 18:
                return $this->getFax();
                break;
            case 19:
                return $this->getTelex();
                break;
            case 20:
                return $this->getWebpage();
                break;
            case 21:
                return $this->getKeywords();
                break;
            case 22:
                return $this->getLarvalbasecollab();
                break;
            case 23:
                return $this->getNars();
                break;
            case 24:
                return $this->getStaffphoto();
                break;
            case 25:
                return $this->getCollabtypeorder();
                break;
            case 26:
                return $this->getYear();
                break;
            case 27:
                return $this->getYearend();
                break;
            case 28:
                return $this->getEntered();
                break;
            case 29:
                return $this->getDataentered();
                break;
            case 30:
                return $this->getModified();
                break;
            case 31:
                return $this->getDatemodified();
                break;
            case 32:
                return $this->getEditCountry();
                break;
            case 33:
                return $this->getEditSpecies();
                break;
            case 34:
                return $this->getEditComnames();
                break;
            case 35:
                return $this->getEditLarvalbase();
                break;
            case 36:
                return $this->getEditSynonymsx();
                break;
            case 37:
                return $this->getEditPictures();
                break;
            case 38:
                return $this->getEditExpedition();
                break;
            case 39:
                return $this->getEditOccurrence();
                break;
            case 40:
                return $this->getShowEmail();
                break;
            case 41:
                return $this->getShowCountry();
                break;
            case 42:
                return $this->getShowAddress();
                break;
            case 43:
                return $this->getEditGenera();
                break;
            case 44:
                return $this->getEditContacts();
                break;
            case 45:
                return $this->getEditPopdyn();
                break;
            case 46:
                return $this->getEditIntroductions();
                break;
            case 47:
                return $this->getEditAquamaint();
                break;
            case 48:
                return $this->getEditFactsheet();
                break;
            case 49:
                return $this->getEditDbase();
                break;
            case 50:
                return $this->getEditFactsheetAquaculture();
                break;
            case 51:
                return $this->getEditLabels();
                break;
            case 52:
                return $this->getEditLabelsLang();
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
        if (isset($alreadyDumpedObjects['Collaborators'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Collaborators'][serialize($this->getPrimaryKey())] = true;
        $keys = CollaboratorsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPersonnel(),
            $keys[1] => $this->getSurname(),
            $keys[2] => $this->getPrename(),
            $keys[3] => $this->getReportgroup(),
            $keys[4] => $this->getCollabtype(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getEmailnew(),
            $keys[7] => $this->getComments(),
            $keys[8] => $this->getCopyright(),
            $keys[9] => $this->getRdeUser(),
            $keys[10] => $this->getInstitute(),
            $keys[11] => $this->getNumber(),
            $keys[12] => $this->getStreet(),
            $keys[13] => $this->getCity(),
            $keys[14] => $this->getCountry(),
            $keys[15] => $this->getCCode(),
            $keys[16] => $this->getTelefoncity(),
            $keys[17] => $this->getTelefon(),
            $keys[18] => $this->getFax(),
            $keys[19] => $this->getTelex(),
            $keys[20] => $this->getWebpage(),
            $keys[21] => $this->getKeywords(),
            $keys[22] => $this->getLarvalbasecollab(),
            $keys[23] => $this->getNars(),
            $keys[24] => $this->getStaffphoto(),
            $keys[25] => $this->getCollabtypeorder(),
            $keys[26] => $this->getYear(),
            $keys[27] => $this->getYearend(),
            $keys[28] => $this->getEntered(),
            $keys[29] => $this->getDataentered(),
            $keys[30] => $this->getModified(),
            $keys[31] => $this->getDatemodified(),
            $keys[32] => $this->getEditCountry(),
            $keys[33] => $this->getEditSpecies(),
            $keys[34] => $this->getEditComnames(),
            $keys[35] => $this->getEditLarvalbase(),
            $keys[36] => $this->getEditSynonymsx(),
            $keys[37] => $this->getEditPictures(),
            $keys[38] => $this->getEditExpedition(),
            $keys[39] => $this->getEditOccurrence(),
            $keys[40] => $this->getShowEmail(),
            $keys[41] => $this->getShowCountry(),
            $keys[42] => $this->getShowAddress(),
            $keys[43] => $this->getEditGenera(),
            $keys[44] => $this->getEditContacts(),
            $keys[45] => $this->getEditPopdyn(),
            $keys[46] => $this->getEditIntroductions(),
            $keys[47] => $this->getEditAquamaint(),
            $keys[48] => $this->getEditFactsheet(),
            $keys[49] => $this->getEditDbase(),
            $keys[50] => $this->getEditFactsheetAquaculture(),
            $keys[51] => $this->getEditLabels(),
            $keys[52] => $this->getEditLabelsLang(),
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
        $pos = CollaboratorsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPersonnel($value);
                break;
            case 1:
                $this->setSurname($value);
                break;
            case 2:
                $this->setPrename($value);
                break;
            case 3:
                $this->setReportgroup($value);
                break;
            case 4:
                $this->setCollabtype($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setEmailnew($value);
                break;
            case 7:
                $this->setComments($value);
                break;
            case 8:
                $this->setCopyright($value);
                break;
            case 9:
                $this->setRdeUser($value);
                break;
            case 10:
                $this->setInstitute($value);
                break;
            case 11:
                $this->setNumber($value);
                break;
            case 12:
                $this->setStreet($value);
                break;
            case 13:
                $this->setCity($value);
                break;
            case 14:
                $this->setCountry($value);
                break;
            case 15:
                $this->setCCode($value);
                break;
            case 16:
                $this->setTelefoncity($value);
                break;
            case 17:
                $this->setTelefon($value);
                break;
            case 18:
                $this->setFax($value);
                break;
            case 19:
                $this->setTelex($value);
                break;
            case 20:
                $this->setWebpage($value);
                break;
            case 21:
                $this->setKeywords($value);
                break;
            case 22:
                $this->setLarvalbasecollab($value);
                break;
            case 23:
                $this->setNars($value);
                break;
            case 24:
                $this->setStaffphoto($value);
                break;
            case 25:
                $this->setCollabtypeorder($value);
                break;
            case 26:
                $this->setYear($value);
                break;
            case 27:
                $this->setYearend($value);
                break;
            case 28:
                $this->setEntered($value);
                break;
            case 29:
                $this->setDataentered($value);
                break;
            case 30:
                $this->setModified($value);
                break;
            case 31:
                $this->setDatemodified($value);
                break;
            case 32:
                $this->setEditCountry($value);
                break;
            case 33:
                $this->setEditSpecies($value);
                break;
            case 34:
                $this->setEditComnames($value);
                break;
            case 35:
                $this->setEditLarvalbase($value);
                break;
            case 36:
                $this->setEditSynonymsx($value);
                break;
            case 37:
                $this->setEditPictures($value);
                break;
            case 38:
                $this->setEditExpedition($value);
                break;
            case 39:
                $this->setEditOccurrence($value);
                break;
            case 40:
                $this->setShowEmail($value);
                break;
            case 41:
                $this->setShowCountry($value);
                break;
            case 42:
                $this->setShowAddress($value);
                break;
            case 43:
                $this->setEditGenera($value);
                break;
            case 44:
                $this->setEditContacts($value);
                break;
            case 45:
                $this->setEditPopdyn($value);
                break;
            case 46:
                $this->setEditIntroductions($value);
                break;
            case 47:
                $this->setEditAquamaint($value);
                break;
            case 48:
                $this->setEditFactsheet($value);
                break;
            case 49:
                $this->setEditDbase($value);
                break;
            case 50:
                $this->setEditFactsheetAquaculture($value);
                break;
            case 51:
                $this->setEditLabels($value);
                break;
            case 52:
                $this->setEditLabelsLang($value);
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
        $keys = CollaboratorsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPersonnel($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSurname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPrename($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setReportgroup($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCollabtype($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmailnew($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setComments($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCopyright($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRdeUser($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setInstitute($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNumber($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStreet($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCity($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCountry($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCCode($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTelefoncity($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTelefon($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFax($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTelex($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setWebpage($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setKeywords($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLarvalbasecollab($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setNars($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setStaffphoto($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCollabtypeorder($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setYear($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setYearend($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEntered($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDataentered($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setModified($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDatemodified($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEditCountry($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEditSpecies($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEditComnames($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setEditLarvalbase($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEditSynonymsx($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setEditPictures($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setEditExpedition($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEditOccurrence($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setShowEmail($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setShowCountry($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setShowAddress($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEditGenera($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setEditContacts($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setEditPopdyn($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setEditIntroductions($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setEditAquamaint($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setEditFactsheet($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setEditDbase($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setEditFactsheetAquaculture($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setEditLabels($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setEditLabelsLang($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setTs($arr[$keys[53]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CollaboratorsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CollaboratorsPeer::PERSONNEL)) $criteria->add(CollaboratorsPeer::PERSONNEL, $this->personnel);
        if ($this->isColumnModified(CollaboratorsPeer::SURNAME)) $criteria->add(CollaboratorsPeer::SURNAME, $this->surname);
        if ($this->isColumnModified(CollaboratorsPeer::PRENAME)) $criteria->add(CollaboratorsPeer::PRENAME, $this->prename);
        if ($this->isColumnModified(CollaboratorsPeer::REPORTGROUP)) $criteria->add(CollaboratorsPeer::REPORTGROUP, $this->reportgroup);
        if ($this->isColumnModified(CollaboratorsPeer::COLLABTYPE)) $criteria->add(CollaboratorsPeer::COLLABTYPE, $this->collabtype);
        if ($this->isColumnModified(CollaboratorsPeer::E-MAIL)) $criteria->add(CollaboratorsPeer::E-MAIL, $this->e-mail);
        if ($this->isColumnModified(CollaboratorsPeer::E-MAILNEW)) $criteria->add(CollaboratorsPeer::E-MAILNEW, $this->e-mailnew);
        if ($this->isColumnModified(CollaboratorsPeer::COMMENTS)) $criteria->add(CollaboratorsPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(CollaboratorsPeer::COPYRIGHT)) $criteria->add(CollaboratorsPeer::COPYRIGHT, $this->copyright);
        if ($this->isColumnModified(CollaboratorsPeer::RDE_USER)) $criteria->add(CollaboratorsPeer::RDE_USER, $this->rde_user);
        if ($this->isColumnModified(CollaboratorsPeer::INSTITUTE)) $criteria->add(CollaboratorsPeer::INSTITUTE, $this->institute);
        if ($this->isColumnModified(CollaboratorsPeer::NUMBER)) $criteria->add(CollaboratorsPeer::NUMBER, $this->number);
        if ($this->isColumnModified(CollaboratorsPeer::STREET)) $criteria->add(CollaboratorsPeer::STREET, $this->street);
        if ($this->isColumnModified(CollaboratorsPeer::CITY)) $criteria->add(CollaboratorsPeer::CITY, $this->city);
        if ($this->isColumnModified(CollaboratorsPeer::COUNTRY)) $criteria->add(CollaboratorsPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(CollaboratorsPeer::C_CODE)) $criteria->add(CollaboratorsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CollaboratorsPeer::TELEFON-CITY)) $criteria->add(CollaboratorsPeer::TELEFON-CITY, $this->telefon-city);
        if ($this->isColumnModified(CollaboratorsPeer::TELEFON)) $criteria->add(CollaboratorsPeer::TELEFON, $this->telefon);
        if ($this->isColumnModified(CollaboratorsPeer::FAX)) $criteria->add(CollaboratorsPeer::FAX, $this->fax);
        if ($this->isColumnModified(CollaboratorsPeer::TELEX)) $criteria->add(CollaboratorsPeer::TELEX, $this->telex);
        if ($this->isColumnModified(CollaboratorsPeer::WEBPAGE)) $criteria->add(CollaboratorsPeer::WEBPAGE, $this->webpage);
        if ($this->isColumnModified(CollaboratorsPeer::KEYWORDS)) $criteria->add(CollaboratorsPeer::KEYWORDS, $this->keywords);
        if ($this->isColumnModified(CollaboratorsPeer::LARVALBASECOLLAB)) $criteria->add(CollaboratorsPeer::LARVALBASECOLLAB, $this->larvalbasecollab);
        if ($this->isColumnModified(CollaboratorsPeer::NARS)) $criteria->add(CollaboratorsPeer::NARS, $this->nars);
        if ($this->isColumnModified(CollaboratorsPeer::STAFFPHOTO)) $criteria->add(CollaboratorsPeer::STAFFPHOTO, $this->staffphoto);
        if ($this->isColumnModified(CollaboratorsPeer::COLLABTYPEORDER)) $criteria->add(CollaboratorsPeer::COLLABTYPEORDER, $this->collabtypeorder);
        if ($this->isColumnModified(CollaboratorsPeer::YEAR)) $criteria->add(CollaboratorsPeer::YEAR, $this->year);
        if ($this->isColumnModified(CollaboratorsPeer::YEAREND)) $criteria->add(CollaboratorsPeer::YEAREND, $this->yearend);
        if ($this->isColumnModified(CollaboratorsPeer::ENTERED)) $criteria->add(CollaboratorsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CollaboratorsPeer::DATAENTERED)) $criteria->add(CollaboratorsPeer::DATAENTERED, $this->dataentered);
        if ($this->isColumnModified(CollaboratorsPeer::MODIFIED)) $criteria->add(CollaboratorsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CollaboratorsPeer::DATEMODIFIED)) $criteria->add(CollaboratorsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_COUNTRY)) $criteria->add(CollaboratorsPeer::EDIT_COUNTRY, $this->edit_country);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_SPECIES)) $criteria->add(CollaboratorsPeer::EDIT_SPECIES, $this->edit_species);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_COMNAMES)) $criteria->add(CollaboratorsPeer::EDIT_COMNAMES, $this->edit_comnames);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_LARVALBASE)) $criteria->add(CollaboratorsPeer::EDIT_LARVALBASE, $this->edit_larvalbase);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_SYNONYMSX)) $criteria->add(CollaboratorsPeer::EDIT_SYNONYMSX, $this->edit_synonymsx);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_PICTURES)) $criteria->add(CollaboratorsPeer::EDIT_PICTURES, $this->edit_pictures);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_EXPEDITION)) $criteria->add(CollaboratorsPeer::EDIT_EXPEDITION, $this->edit_expedition);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_OCCURRENCE)) $criteria->add(CollaboratorsPeer::EDIT_OCCURRENCE, $this->edit_occurrence);
        if ($this->isColumnModified(CollaboratorsPeer::SHOW_EMAIL)) $criteria->add(CollaboratorsPeer::SHOW_EMAIL, $this->show_email);
        if ($this->isColumnModified(CollaboratorsPeer::SHOW_COUNTRY)) $criteria->add(CollaboratorsPeer::SHOW_COUNTRY, $this->show_country);
        if ($this->isColumnModified(CollaboratorsPeer::SHOW_ADDRESS)) $criteria->add(CollaboratorsPeer::SHOW_ADDRESS, $this->show_address);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_GENERA)) $criteria->add(CollaboratorsPeer::EDIT_GENERA, $this->edit_genera);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_CONTACTS)) $criteria->add(CollaboratorsPeer::EDIT_CONTACTS, $this->edit_contacts);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_POPDYN)) $criteria->add(CollaboratorsPeer::EDIT_POPDYN, $this->edit_popdyn);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_INTRODUCTIONS)) $criteria->add(CollaboratorsPeer::EDIT_INTRODUCTIONS, $this->edit_introductions);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_AQUAMAINT)) $criteria->add(CollaboratorsPeer::EDIT_AQUAMAINT, $this->edit_aquamaint);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_FACTSHEET)) $criteria->add(CollaboratorsPeer::EDIT_FACTSHEET, $this->edit_factsheet);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_DBASE)) $criteria->add(CollaboratorsPeer::EDIT_DBASE, $this->edit_dbase);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE)) $criteria->add(CollaboratorsPeer::EDIT_FACTSHEET_AQUACULTURE, $this->edit_factsheet_aquaculture);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_LABELS)) $criteria->add(CollaboratorsPeer::EDIT_LABELS, $this->edit_labels);
        if ($this->isColumnModified(CollaboratorsPeer::EDIT_LABELS_LANG)) $criteria->add(CollaboratorsPeer::EDIT_LABELS_LANG, $this->edit_labels_lang);
        if ($this->isColumnModified(CollaboratorsPeer::TS)) $criteria->add(CollaboratorsPeer::TS, $this->ts);

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
        $criteria = new Criteria(CollaboratorsPeer::DATABASE_NAME);
        $criteria->add(CollaboratorsPeer::SURNAME, $this->surname);
        $criteria->add(CollaboratorsPeer::PRENAME, $this->prename);

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
        $pks[0] = $this->getSurname();
        $pks[1] = $this->getPrename();

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
        $this->setSurname($keys[0]);
        $this->setPrename($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSurname()) && (null === $this->getPrename());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Collaborators (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPersonnel($this->getPersonnel());
        $copyObj->setSurname($this->getSurname());
        $copyObj->setPrename($this->getPrename());
        $copyObj->setReportgroup($this->getReportgroup());
        $copyObj->setCollabtype($this->getCollabtype());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEmailnew($this->getEmailnew());
        $copyObj->setComments($this->getComments());
        $copyObj->setCopyright($this->getCopyright());
        $copyObj->setRdeUser($this->getRdeUser());
        $copyObj->setInstitute($this->getInstitute());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setStreet($this->getStreet());
        $copyObj->setCity($this->getCity());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setTelefoncity($this->getTelefoncity());
        $copyObj->setTelefon($this->getTelefon());
        $copyObj->setFax($this->getFax());
        $copyObj->setTelex($this->getTelex());
        $copyObj->setWebpage($this->getWebpage());
        $copyObj->setKeywords($this->getKeywords());
        $copyObj->setLarvalbasecollab($this->getLarvalbasecollab());
        $copyObj->setNars($this->getNars());
        $copyObj->setStaffphoto($this->getStaffphoto());
        $copyObj->setCollabtypeorder($this->getCollabtypeorder());
        $copyObj->setYear($this->getYear());
        $copyObj->setYearend($this->getYearend());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDataentered($this->getDataentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setEditCountry($this->getEditCountry());
        $copyObj->setEditSpecies($this->getEditSpecies());
        $copyObj->setEditComnames($this->getEditComnames());
        $copyObj->setEditLarvalbase($this->getEditLarvalbase());
        $copyObj->setEditSynonymsx($this->getEditSynonymsx());
        $copyObj->setEditPictures($this->getEditPictures());
        $copyObj->setEditExpedition($this->getEditExpedition());
        $copyObj->setEditOccurrence($this->getEditOccurrence());
        $copyObj->setShowEmail($this->getShowEmail());
        $copyObj->setShowCountry($this->getShowCountry());
        $copyObj->setShowAddress($this->getShowAddress());
        $copyObj->setEditGenera($this->getEditGenera());
        $copyObj->setEditContacts($this->getEditContacts());
        $copyObj->setEditPopdyn($this->getEditPopdyn());
        $copyObj->setEditIntroductions($this->getEditIntroductions());
        $copyObj->setEditAquamaint($this->getEditAquamaint());
        $copyObj->setEditFactsheet($this->getEditFactsheet());
        $copyObj->setEditDbase($this->getEditDbase());
        $copyObj->setEditFactsheetAquaculture($this->getEditFactsheetAquaculture());
        $copyObj->setEditLabels($this->getEditLabels());
        $copyObj->setEditLabelsLang($this->getEditLabelsLang());
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
     * @return Collaborators Clone of current object.
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
     * @return CollaboratorsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CollaboratorsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->personnel = null;
        $this->surname = null;
        $this->prename = null;
        $this->reportgroup = null;
        $this->collabtype = null;
        $this->e-mail = null;
        $this->e-mailnew = null;
        $this->comments = null;
        $this->copyright = null;
        $this->rde_user = null;
        $this->institute = null;
        $this->number = null;
        $this->street = null;
        $this->city = null;
        $this->country = null;
        $this->c_code = null;
        $this->telefon-city = null;
        $this->telefon = null;
        $this->fax = null;
        $this->telex = null;
        $this->webpage = null;
        $this->keywords = null;
        $this->larvalbasecollab = null;
        $this->nars = null;
        $this->staffphoto = null;
        $this->collabtypeorder = null;
        $this->year = null;
        $this->yearend = null;
        $this->entered = null;
        $this->dataentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->edit_country = null;
        $this->edit_species = null;
        $this->edit_comnames = null;
        $this->edit_larvalbase = null;
        $this->edit_synonymsx = null;
        $this->edit_pictures = null;
        $this->edit_expedition = null;
        $this->edit_occurrence = null;
        $this->show_email = null;
        $this->show_country = null;
        $this->show_address = null;
        $this->edit_genera = null;
        $this->edit_contacts = null;
        $this->edit_popdyn = null;
        $this->edit_introductions = null;
        $this->edit_aquamaint = null;
        $this->edit_factsheet = null;
        $this->edit_dbase = null;
        $this->edit_factsheet_aquaculture = null;
        $this->edit_labels = null;
        $this->edit_labels_lang = null;
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
        return (string) $this->exportTo(CollaboratorsPeer::DEFAULT_STRING_FORMAT);
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
