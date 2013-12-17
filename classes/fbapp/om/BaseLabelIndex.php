<?php


/**
 * Base class that represents a row from the 'label_index' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLabelIndex extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LabelIndexPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LabelIndexPeer
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
     * The value for the eng field.
     * @var        string
     */
    protected $eng;

    /**
     * The value for the used_where field.
     * @var        string
     */
    protected $used_where;

    /**
     * The value for the page field.
     * @var        string
     */
    protected $page;

    /**
     * The value for the updatestatus field.
     * @var        int
     */
    protected $updatestatus;

    /**
     * The value for the updatedescription field.
     * @var        string
     */
    protected $updatedescription;

    /**
     * The value for the updateimplemented field.
     * @var        string
     */
    protected $updateimplemented;

    /**
     * The value for the usefb field.
     * @var        int
     */
    protected $usefb;

    /**
     * The value for the useslb field.
     * @var        int
     */
    protected $useslb;

    /**
     * The value for the term_bangla_original field.
     * @var        string
     */
    protected $term_bangla_original;

    /**
     * The value for the term_bangla field.
     * @var        string
     */
    protected $term_bangla;

    /**
     * The value for the term_english field.
     * @var        string
     */
    protected $term_english;

    /**
     * The value for the term_thai_original field.
     * @var        string
     */
    protected $term_thai_original;

    /**
     * The value for the term_thai field.
     * @var        string
     */
    protected $term_thai;

    /**
     * The value for the term_german field.
     * @var        string
     */
    protected $term_german;

    /**
     * The value for the term_portuguese field.
     * @var        string
     */
    protected $term_portuguese;

    /**
     * The value for the term_portuguese_po field.
     * @var        string
     */
    protected $term_portuguese_po;

    /**
     * The value for the term_chinese field.
     * @var        string
     */
    protected $term_chinese;

    /**
     * The value for the term_chinese_u field.
     * @var        string
     */
    protected $term_chinese_u;

    /**
     * The value for the term_scchinese field.
     * @var        string
     */
    protected $term_scchinese;

    /**
     * The value for the term_scchinese_u field.
     * @var        string
     */
    protected $term_scchinese_u;

    /**
     * The value for the term_farsi_original field.
     * @var        string
     */
    protected $term_farsi_original;

    /**
     * The value for the term_farsi field.
     * @var        string
     */
    protected $term_farsi;

    /**
     * The value for the term_russian_original field.
     * @var        string
     */
    protected $term_russian_original;

    /**
     * The value for the term_russian field.
     * @var        string
     */
    protected $term_russian;

    /**
     * The value for the term_french field.
     * @var        string
     */
    protected $term_french;

    /**
     * The value for the term_dutch field.
     * @var        string
     */
    protected $term_dutch;

    /**
     * The value for the term_bahasa field.
     * @var        string
     */
    protected $term_bahasa;

    /**
     * The value for the term_swedish field.
     * @var        string
     */
    protected $term_swedish;

    /**
     * The value for the term_greek_original field.
     * @var        string
     */
    protected $term_greek_original;

    /**
     * The value for the term_greek field.
     * @var        string
     */
    protected $term_greek;

    /**
     * The value for the term_spanish field.
     * @var        string
     */
    protected $term_spanish;

    /**
     * The value for the term_italian field.
     * @var        string
     */
    protected $term_italian;

    /**
     * The value for the term_vietnamese_original field.
     * @var        string
     */
    protected $term_vietnamese_original;

    /**
     * The value for the term_vietnamese field.
     * @var        string
     */
    protected $term_vietnamese;

    /**
     * The value for the term_laos_original field.
     * @var        string
     */
    protected $term_laos_original;

    /**
     * The value for the term_laos field.
     * @var        string
     */
    protected $term_laos;

    /**
     * The value for the term_hindi_original field.
     * @var        string
     */
    protected $term_hindi_original;

    /**
     * The value for the term_hindi field.
     * @var        string
     */
    protected $term_hindi;

    /**
     * The value for the englishnew field.
     * @var        string
     */
    protected $englishnew;

    /**
     * The value for the term_japanese_original field.
     * @var        string
     */
    protected $term_japanese_original;

    /**
     * The value for the term_japanese field.
     * @var        string
     */
    protected $term_japanese;

    /**
     * The value for the term_arabic_original field.
     * @var        string
     */
    protected $term_arabic_original;

    /**
     * The value for the term_arabic field.
     * @var        string
     */
    protected $term_arabic;

    /**
     * The value for the glossary_term field.
     * @var        string
     */
    protected $glossary_term;

    /**
     * The value for the entered field.
     * @var        int
     */
    protected $entered;

    /**
     * The value for the modified field.
     * @var        int
     */
    protected $modified;

    /**
     * The value for the checked field.
     * @var        int
     */
    protected $checked;

    /**
     * The value for the dateentered field.
     * @var        string
     */
    protected $dateentered;

    /**
     * The value for the datemodified field.
     * @var        string
     */
    protected $datemodified;

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
     * Get the [eng] column value.
     *
     * @return string
     */
    public function getEng()
    {

        return $this->eng;
    }

    /**
     * Get the [used_where] column value.
     *
     * @return string
     */
    public function getUsedWhere()
    {

        return $this->used_where;
    }

    /**
     * Get the [page] column value.
     *
     * @return string
     */
    public function getPage()
    {

        return $this->page;
    }

    /**
     * Get the [updatestatus] column value.
     *
     * @return int
     */
    public function getUpdatestatus()
    {

        return $this->updatestatus;
    }

    /**
     * Get the [updatedescription] column value.
     *
     * @return string
     */
    public function getUpdatedescription()
    {

        return $this->updatedescription;
    }

    /**
     * Get the [optionally formatted] temporal [updateimplemented] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdateimplemented($format = 'Y-m-d H:i:s')
    {
        if ($this->updateimplemented === null) {
            return null;
        }

        if ($this->updateimplemented === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updateimplemented);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updateimplemented, true), $x);
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
     * Get the [usefb] column value.
     *
     * @return int
     */
    public function getUsefb()
    {

        return $this->usefb;
    }

    /**
     * Get the [useslb] column value.
     *
     * @return int
     */
    public function getUseslb()
    {

        return $this->useslb;
    }

    /**
     * Get the [term_bangla_original] column value.
     *
     * @return string
     */
    public function getTermBanglaOriginal()
    {

        return $this->term_bangla_original;
    }

    /**
     * Get the [term_bangla] column value.
     *
     * @return string
     */
    public function getTermBangla()
    {

        return $this->term_bangla;
    }

    /**
     * Get the [term_english] column value.
     *
     * @return string
     */
    public function getTermEnglish()
    {

        return $this->term_english;
    }

    /**
     * Get the [term_thai_original] column value.
     *
     * @return string
     */
    public function getTermThaiOriginal()
    {

        return $this->term_thai_original;
    }

    /**
     * Get the [term_thai] column value.
     *
     * @return string
     */
    public function getTermThai()
    {

        return $this->term_thai;
    }

    /**
     * Get the [term_german] column value.
     *
     * @return string
     */
    public function getTermGerman()
    {

        return $this->term_german;
    }

    /**
     * Get the [term_portuguese] column value.
     *
     * @return string
     */
    public function getTermPortuguese()
    {

        return $this->term_portuguese;
    }

    /**
     * Get the [term_portuguese_po] column value.
     *
     * @return string
     */
    public function getTermPortuguesePo()
    {

        return $this->term_portuguese_po;
    }

    /**
     * Get the [term_chinese] column value.
     *
     * @return string
     */
    public function getTermChinese()
    {

        return $this->term_chinese;
    }

    /**
     * Get the [term_chinese_u] column value.
     *
     * @return string
     */
    public function getTermChineseU()
    {

        return $this->term_chinese_u;
    }

    /**
     * Get the [term_scchinese] column value.
     *
     * @return string
     */
    public function getTermScchinese()
    {

        return $this->term_scchinese;
    }

    /**
     * Get the [term_scchinese_u] column value.
     *
     * @return string
     */
    public function getTermScchineseU()
    {

        return $this->term_scchinese_u;
    }

    /**
     * Get the [term_farsi_original] column value.
     *
     * @return string
     */
    public function getTermFarsiOriginal()
    {

        return $this->term_farsi_original;
    }

    /**
     * Get the [term_farsi] column value.
     *
     * @return string
     */
    public function getTermFarsi()
    {

        return $this->term_farsi;
    }

    /**
     * Get the [term_russian_original] column value.
     *
     * @return string
     */
    public function getTermRussianOriginal()
    {

        return $this->term_russian_original;
    }

    /**
     * Get the [term_russian] column value.
     *
     * @return string
     */
    public function getTermRussian()
    {

        return $this->term_russian;
    }

    /**
     * Get the [term_french] column value.
     *
     * @return string
     */
    public function getTermFrench()
    {

        return $this->term_french;
    }

    /**
     * Get the [term_dutch] column value.
     *
     * @return string
     */
    public function getTermDutch()
    {

        return $this->term_dutch;
    }

    /**
     * Get the [term_bahasa] column value.
     *
     * @return string
     */
    public function getTermBahasa()
    {

        return $this->term_bahasa;
    }

    /**
     * Get the [term_swedish] column value.
     *
     * @return string
     */
    public function getTermSwedish()
    {

        return $this->term_swedish;
    }

    /**
     * Get the [term_greek_original] column value.
     *
     * @return string
     */
    public function getTermGreekOriginal()
    {

        return $this->term_greek_original;
    }

    /**
     * Get the [term_greek] column value.
     *
     * @return string
     */
    public function getTermGreek()
    {

        return $this->term_greek;
    }

    /**
     * Get the [term_spanish] column value.
     *
     * @return string
     */
    public function getTermSpanish()
    {

        return $this->term_spanish;
    }

    /**
     * Get the [term_italian] column value.
     *
     * @return string
     */
    public function getTermItalian()
    {

        return $this->term_italian;
    }

    /**
     * Get the [term_vietnamese_original] column value.
     *
     * @return string
     */
    public function getTermVietnameseOriginal()
    {

        return $this->term_vietnamese_original;
    }

    /**
     * Get the [term_vietnamese] column value.
     *
     * @return string
     */
    public function getTermVietnamese()
    {

        return $this->term_vietnamese;
    }

    /**
     * Get the [term_laos_original] column value.
     *
     * @return string
     */
    public function getTermLaosOriginal()
    {

        return $this->term_laos_original;
    }

    /**
     * Get the [term_laos] column value.
     *
     * @return string
     */
    public function getTermLaos()
    {

        return $this->term_laos;
    }

    /**
     * Get the [term_hindi_original] column value.
     *
     * @return string
     */
    public function getTermHindiOriginal()
    {

        return $this->term_hindi_original;
    }

    /**
     * Get the [term_hindi] column value.
     *
     * @return string
     */
    public function getTermHindi()
    {

        return $this->term_hindi;
    }

    /**
     * Get the [englishnew] column value.
     *
     * @return string
     */
    public function getEnglishnew()
    {

        return $this->englishnew;
    }

    /**
     * Get the [term_japanese_original] column value.
     *
     * @return string
     */
    public function getTermJapaneseOriginal()
    {

        return $this->term_japanese_original;
    }

    /**
     * Get the [term_japanese] column value.
     *
     * @return string
     */
    public function getTermJapanese()
    {

        return $this->term_japanese;
    }

    /**
     * Get the [term_arabic_original] column value.
     *
     * @return string
     */
    public function getTermArabicOriginal()
    {

        return $this->term_arabic_original;
    }

    /**
     * Get the [term_arabic] column value.
     *
     * @return string
     */
    public function getTermArabic()
    {

        return $this->term_arabic;
    }

    /**
     * Get the [glossary_term] column value.
     *
     * @return string
     */
    public function getGlossaryTerm()
    {

        return $this->glossary_term;
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
     * Get the [modified] column value.
     *
     * @return int
     */
    public function getModified()
    {

        return $this->modified;
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
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = LabelIndexPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [eng] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setEng($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eng !== $v) {
            $this->eng = $v;
            $this->modifiedColumns[] = LabelIndexPeer::ENG;
        }


        return $this;
    } // setEng()

    /**
     * Set the value of [used_where] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setUsedWhere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used_where !== $v) {
            $this->used_where = $v;
            $this->modifiedColumns[] = LabelIndexPeer::USED_WHERE;
        }


        return $this;
    } // setUsedWhere()

    /**
     * Set the value of [page] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setPage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->page !== $v) {
            $this->page = $v;
            $this->modifiedColumns[] = LabelIndexPeer::PAGE;
        }


        return $this;
    } // setPage()

    /**
     * Set the value of [updatestatus] column.
     *
     * @param  int $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setUpdatestatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->updatestatus !== $v) {
            $this->updatestatus = $v;
            $this->modifiedColumns[] = LabelIndexPeer::UPDATESTATUS;
        }


        return $this;
    } // setUpdatestatus()

    /**
     * Set the value of [updatedescription] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setUpdatedescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->updatedescription !== $v) {
            $this->updatedescription = $v;
            $this->modifiedColumns[] = LabelIndexPeer::UPDATEDESCRIPTION;
        }


        return $this;
    } // setUpdatedescription()

    /**
     * Sets the value of [updateimplemented] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setUpdateimplemented($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updateimplemented !== null || $dt !== null) {
            $currentDateAsString = ($this->updateimplemented !== null && $tmpDt = new DateTime($this->updateimplemented)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updateimplemented = $newDateAsString;
                $this->modifiedColumns[] = LabelIndexPeer::UPDATEIMPLEMENTED;
            }
        } // if either are not null


        return $this;
    } // setUpdateimplemented()

    /**
     * Set the value of [usefb] column.
     *
     * @param  int $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setUsefb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->usefb !== $v) {
            $this->usefb = $v;
            $this->modifiedColumns[] = LabelIndexPeer::USEFB;
        }


        return $this;
    } // setUsefb()

    /**
     * Set the value of [useslb] column.
     *
     * @param  int $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setUseslb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->useslb !== $v) {
            $this->useslb = $v;
            $this->modifiedColumns[] = LabelIndexPeer::USESLB;
        }


        return $this;
    } // setUseslb()

    /**
     * Set the value of [term_bangla_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermBanglaOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_bangla_original !== $v) {
            $this->term_bangla_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_BANGLA_ORIGINAL;
        }


        return $this;
    } // setTermBanglaOriginal()

    /**
     * Set the value of [term_bangla] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermBangla($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_bangla !== $v) {
            $this->term_bangla = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_BANGLA;
        }


        return $this;
    } // setTermBangla()

    /**
     * Set the value of [term_english] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermEnglish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_english !== $v) {
            $this->term_english = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_ENGLISH;
        }


        return $this;
    } // setTermEnglish()

    /**
     * Set the value of [term_thai_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermThaiOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_thai_original !== $v) {
            $this->term_thai_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_THAI_ORIGINAL;
        }


        return $this;
    } // setTermThaiOriginal()

    /**
     * Set the value of [term_thai] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermThai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_thai !== $v) {
            $this->term_thai = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_THAI;
        }


        return $this;
    } // setTermThai()

    /**
     * Set the value of [term_german] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermGerman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_german !== $v) {
            $this->term_german = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_GERMAN;
        }


        return $this;
    } // setTermGerman()

    /**
     * Set the value of [term_portuguese] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermPortuguese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_portuguese !== $v) {
            $this->term_portuguese = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_PORTUGUESE;
        }


        return $this;
    } // setTermPortuguese()

    /**
     * Set the value of [term_portuguese_po] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermPortuguesePo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_portuguese_po !== $v) {
            $this->term_portuguese_po = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_PORTUGUESE_PO;
        }


        return $this;
    } // setTermPortuguesePo()

    /**
     * Set the value of [term_chinese] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermChinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_chinese !== $v) {
            $this->term_chinese = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_CHINESE;
        }


        return $this;
    } // setTermChinese()

    /**
     * Set the value of [term_chinese_u] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermChineseU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_chinese_u !== $v) {
            $this->term_chinese_u = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_CHINESE_U;
        }


        return $this;
    } // setTermChineseU()

    /**
     * Set the value of [term_scchinese] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermScchinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_scchinese !== $v) {
            $this->term_scchinese = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_SCCHINESE;
        }


        return $this;
    } // setTermScchinese()

    /**
     * Set the value of [term_scchinese_u] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermScchineseU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_scchinese_u !== $v) {
            $this->term_scchinese_u = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_SCCHINESE_U;
        }


        return $this;
    } // setTermScchineseU()

    /**
     * Set the value of [term_farsi_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermFarsiOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_farsi_original !== $v) {
            $this->term_farsi_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_FARSI_ORIGINAL;
        }


        return $this;
    } // setTermFarsiOriginal()

    /**
     * Set the value of [term_farsi] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermFarsi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_farsi !== $v) {
            $this->term_farsi = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_FARSI;
        }


        return $this;
    } // setTermFarsi()

    /**
     * Set the value of [term_russian_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermRussianOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_russian_original !== $v) {
            $this->term_russian_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_RUSSIAN_ORIGINAL;
        }


        return $this;
    } // setTermRussianOriginal()

    /**
     * Set the value of [term_russian] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_russian !== $v) {
            $this->term_russian = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_RUSSIAN;
        }


        return $this;
    } // setTermRussian()

    /**
     * Set the value of [term_french] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermFrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_french !== $v) {
            $this->term_french = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_FRENCH;
        }


        return $this;
    } // setTermFrench()

    /**
     * Set the value of [term_dutch] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermDutch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_dutch !== $v) {
            $this->term_dutch = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_DUTCH;
        }


        return $this;
    } // setTermDutch()

    /**
     * Set the value of [term_bahasa] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermBahasa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_bahasa !== $v) {
            $this->term_bahasa = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_BAHASA;
        }


        return $this;
    } // setTermBahasa()

    /**
     * Set the value of [term_swedish] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermSwedish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_swedish !== $v) {
            $this->term_swedish = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_SWEDISH;
        }


        return $this;
    } // setTermSwedish()

    /**
     * Set the value of [term_greek_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermGreekOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_greek_original !== $v) {
            $this->term_greek_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_GREEK_ORIGINAL;
        }


        return $this;
    } // setTermGreekOriginal()

    /**
     * Set the value of [term_greek] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermGreek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_greek !== $v) {
            $this->term_greek = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_GREEK;
        }


        return $this;
    } // setTermGreek()

    /**
     * Set the value of [term_spanish] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermSpanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_spanish !== $v) {
            $this->term_spanish = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_SPANISH;
        }


        return $this;
    } // setTermSpanish()

    /**
     * Set the value of [term_italian] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermItalian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_italian !== $v) {
            $this->term_italian = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_ITALIAN;
        }


        return $this;
    } // setTermItalian()

    /**
     * Set the value of [term_vietnamese_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermVietnameseOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_vietnamese_original !== $v) {
            $this->term_vietnamese_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL;
        }


        return $this;
    } // setTermVietnameseOriginal()

    /**
     * Set the value of [term_vietnamese] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermVietnamese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_vietnamese !== $v) {
            $this->term_vietnamese = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_VIETNAMESE;
        }


        return $this;
    } // setTermVietnamese()

    /**
     * Set the value of [term_laos_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermLaosOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_laos_original !== $v) {
            $this->term_laos_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_LAOS_ORIGINAL;
        }


        return $this;
    } // setTermLaosOriginal()

    /**
     * Set the value of [term_laos] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermLaos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_laos !== $v) {
            $this->term_laos = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_LAOS;
        }


        return $this;
    } // setTermLaos()

    /**
     * Set the value of [term_hindi_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermHindiOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_hindi_original !== $v) {
            $this->term_hindi_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_HINDI_ORIGINAL;
        }


        return $this;
    } // setTermHindiOriginal()

    /**
     * Set the value of [term_hindi] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermHindi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_hindi !== $v) {
            $this->term_hindi = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_HINDI;
        }


        return $this;
    } // setTermHindi()

    /**
     * Set the value of [englishnew] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setEnglishnew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->englishnew !== $v) {
            $this->englishnew = $v;
            $this->modifiedColumns[] = LabelIndexPeer::ENGLISHNEW;
        }


        return $this;
    } // setEnglishnew()

    /**
     * Set the value of [term_japanese_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermJapaneseOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_japanese_original !== $v) {
            $this->term_japanese_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_JAPANESE_ORIGINAL;
        }


        return $this;
    } // setTermJapaneseOriginal()

    /**
     * Set the value of [term_japanese] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermJapanese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_japanese !== $v) {
            $this->term_japanese = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_JAPANESE;
        }


        return $this;
    } // setTermJapanese()

    /**
     * Set the value of [term_arabic_original] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermArabicOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_arabic_original !== $v) {
            $this->term_arabic_original = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_ARABIC_ORIGINAL;
        }


        return $this;
    } // setTermArabicOriginal()

    /**
     * Set the value of [term_arabic] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTermArabic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->term_arabic !== $v) {
            $this->term_arabic = $v;
            $this->modifiedColumns[] = LabelIndexPeer::TERM_ARABIC;
        }


        return $this;
    } // setTermArabic()

    /**
     * Set the value of [glossary_term] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setGlossaryTerm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->glossary_term !== $v) {
            $this->glossary_term = $v;
            $this->modifiedColumns[] = LabelIndexPeer::GLOSSARY_TERM;
        }


        return $this;
    } // setGlossaryTerm()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = LabelIndexPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = LabelIndexPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Set the value of [checked] column.
     *
     * @param  int $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setChecked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checked !== $v) {
            $this->checked = $v;
            $this->modifiedColumns[] = LabelIndexPeer::CHECKED;
        }


        return $this;
    } // setChecked()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = LabelIndexPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = LabelIndexPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = LabelIndexPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = LabelIndexPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return LabelIndex The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LabelIndexPeer::TS;
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
            $this->eng = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->used_where = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->page = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->updatestatus = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->updatedescription = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->updateimplemented = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->usefb = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->useslb = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->term_bangla_original = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->term_bangla = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->term_english = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->term_thai_original = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->term_thai = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->term_german = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->term_portuguese = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->term_portuguese_po = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->term_chinese = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->term_chinese_u = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->term_scchinese = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->term_scchinese_u = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->term_farsi_original = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->term_farsi = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->term_russian_original = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->term_russian = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->term_french = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->term_dutch = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->term_bahasa = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->term_swedish = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->term_greek_original = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->term_greek = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->term_spanish = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->term_italian = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->term_vietnamese_original = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->term_vietnamese = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->term_laos_original = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->term_laos = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->term_hindi_original = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->term_hindi = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->englishnew = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->term_japanese_original = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->term_japanese = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->term_arabic_original = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->term_arabic = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->glossary_term = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->entered = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->modified = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->checked = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->dateentered = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->datemodified = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->datechecked = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->remark = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ts = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 53; // 53 = LabelIndexPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating LabelIndex object", $e);
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
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LabelIndexPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LabelIndexQuery::create()
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
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LabelIndexPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = LabelIndexPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LabelIndexPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LabelIndexPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(LabelIndexPeer::ENG)) {
            $modifiedColumns[':p' . $index++]  = '`eng`';
        }
        if ($this->isColumnModified(LabelIndexPeer::USED_WHERE)) {
            $modifiedColumns[':p' . $index++]  = '`used_where`';
        }
        if ($this->isColumnModified(LabelIndexPeer::PAGE)) {
            $modifiedColumns[':p' . $index++]  = '`page`';
        }
        if ($this->isColumnModified(LabelIndexPeer::UPDATESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`UpdateStatus`';
        }
        if ($this->isColumnModified(LabelIndexPeer::UPDATEDESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`UpdateDescription`';
        }
        if ($this->isColumnModified(LabelIndexPeer::UPDATEIMPLEMENTED)) {
            $modifiedColumns[':p' . $index++]  = '`UpdateImplemented`';
        }
        if ($this->isColumnModified(LabelIndexPeer::USEFB)) {
            $modifiedColumns[':p' . $index++]  = '`UseFB`';
        }
        if ($this->isColumnModified(LabelIndexPeer::USESLB)) {
            $modifiedColumns[':p' . $index++]  = '`UseSLB`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_BANGLA_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_bangla_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_BANGLA)) {
            $modifiedColumns[':p' . $index++]  = '`term_bangla`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_ENGLISH)) {
            $modifiedColumns[':p' . $index++]  = '`term_english`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_THAI_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_thai_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_THAI)) {
            $modifiedColumns[':p' . $index++]  = '`term_thai`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_GERMAN)) {
            $modifiedColumns[':p' . $index++]  = '`term_german`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_PORTUGUESE)) {
            $modifiedColumns[':p' . $index++]  = '`term_portuguese`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_PORTUGUESE_PO)) {
            $modifiedColumns[':p' . $index++]  = '`term_portuguese_po`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_CHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`term_chinese`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_CHINESE_U)) {
            $modifiedColumns[':p' . $index++]  = '`term_chinese_u`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_SCCHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`term_scchinese`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_SCCHINESE_U)) {
            $modifiedColumns[':p' . $index++]  = '`term_scchinese_u`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_FARSI_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_farsi_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_FARSI)) {
            $modifiedColumns[':p' . $index++]  = '`term_farsi`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_RUSSIAN_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_russian_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`term_russian`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_FRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`term_french`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_DUTCH)) {
            $modifiedColumns[':p' . $index++]  = '`term_dutch`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_BAHASA)) {
            $modifiedColumns[':p' . $index++]  = '`term_bahasa`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_SWEDISH)) {
            $modifiedColumns[':p' . $index++]  = '`term_swedish`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_GREEK_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_greek_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_GREEK)) {
            $modifiedColumns[':p' . $index++]  = '`term_greek`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_SPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`term_spanish`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_ITALIAN)) {
            $modifiedColumns[':p' . $index++]  = '`term_italian`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_vietnamese_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_VIETNAMESE)) {
            $modifiedColumns[':p' . $index++]  = '`term_vietnamese`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_LAOS_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_laos_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_LAOS)) {
            $modifiedColumns[':p' . $index++]  = '`term_laos`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_HINDI_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_hindi_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_HINDI)) {
            $modifiedColumns[':p' . $index++]  = '`term_hindi`';
        }
        if ($this->isColumnModified(LabelIndexPeer::ENGLISHNEW)) {
            $modifiedColumns[':p' . $index++]  = '`EnglishNew`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_JAPANESE_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_japanese_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_JAPANESE)) {
            $modifiedColumns[':p' . $index++]  = '`term_japanese`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_ARABIC_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`term_arabic_original`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TERM_ARABIC)) {
            $modifiedColumns[':p' . $index++]  = '`term_arabic`';
        }
        if ($this->isColumnModified(LabelIndexPeer::GLOSSARY_TERM)) {
            $modifiedColumns[':p' . $index++]  = '`glossary_term`';
        }
        if ($this->isColumnModified(LabelIndexPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`entered`';
        }
        if ($this->isColumnModified(LabelIndexPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`modified`';
        }
        if ($this->isColumnModified(LabelIndexPeer::CHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`checked`';
        }
        if ($this->isColumnModified(LabelIndexPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`dateentered`';
        }
        if ($this->isColumnModified(LabelIndexPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`datemodified`';
        }
        if ($this->isColumnModified(LabelIndexPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`datechecked`';
        }
        if ($this->isColumnModified(LabelIndexPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`remark`';
        }
        if ($this->isColumnModified(LabelIndexPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `label_index` (%s) VALUES (%s)',
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
                    case '`eng`':
                        $stmt->bindValue($identifier, $this->eng, PDO::PARAM_STR);
                        break;
                    case '`used_where`':
                        $stmt->bindValue($identifier, $this->used_where, PDO::PARAM_STR);
                        break;
                    case '`page`':
                        $stmt->bindValue($identifier, $this->page, PDO::PARAM_STR);
                        break;
                    case '`UpdateStatus`':
                        $stmt->bindValue($identifier, $this->updatestatus, PDO::PARAM_INT);
                        break;
                    case '`UpdateDescription`':
                        $stmt->bindValue($identifier, $this->updatedescription, PDO::PARAM_STR);
                        break;
                    case '`UpdateImplemented`':
                        $stmt->bindValue($identifier, $this->updateimplemented, PDO::PARAM_STR);
                        break;
                    case '`UseFB`':
                        $stmt->bindValue($identifier, $this->usefb, PDO::PARAM_INT);
                        break;
                    case '`UseSLB`':
                        $stmt->bindValue($identifier, $this->useslb, PDO::PARAM_INT);
                        break;
                    case '`term_bangla_original`':
                        $stmt->bindValue($identifier, $this->term_bangla_original, PDO::PARAM_STR);
                        break;
                    case '`term_bangla`':
                        $stmt->bindValue($identifier, $this->term_bangla, PDO::PARAM_STR);
                        break;
                    case '`term_english`':
                        $stmt->bindValue($identifier, $this->term_english, PDO::PARAM_STR);
                        break;
                    case '`term_thai_original`':
                        $stmt->bindValue($identifier, $this->term_thai_original, PDO::PARAM_STR);
                        break;
                    case '`term_thai`':
                        $stmt->bindValue($identifier, $this->term_thai, PDO::PARAM_STR);
                        break;
                    case '`term_german`':
                        $stmt->bindValue($identifier, $this->term_german, PDO::PARAM_STR);
                        break;
                    case '`term_portuguese`':
                        $stmt->bindValue($identifier, $this->term_portuguese, PDO::PARAM_STR);
                        break;
                    case '`term_portuguese_po`':
                        $stmt->bindValue($identifier, $this->term_portuguese_po, PDO::PARAM_STR);
                        break;
                    case '`term_chinese`':
                        $stmt->bindValue($identifier, $this->term_chinese, PDO::PARAM_STR);
                        break;
                    case '`term_chinese_u`':
                        $stmt->bindValue($identifier, $this->term_chinese_u, PDO::PARAM_STR);
                        break;
                    case '`term_scchinese`':
                        $stmt->bindValue($identifier, $this->term_scchinese, PDO::PARAM_STR);
                        break;
                    case '`term_scchinese_u`':
                        $stmt->bindValue($identifier, $this->term_scchinese_u, PDO::PARAM_STR);
                        break;
                    case '`term_farsi_original`':
                        $stmt->bindValue($identifier, $this->term_farsi_original, PDO::PARAM_STR);
                        break;
                    case '`term_farsi`':
                        $stmt->bindValue($identifier, $this->term_farsi, PDO::PARAM_STR);
                        break;
                    case '`term_russian_original`':
                        $stmt->bindValue($identifier, $this->term_russian_original, PDO::PARAM_STR);
                        break;
                    case '`term_russian`':
                        $stmt->bindValue($identifier, $this->term_russian, PDO::PARAM_STR);
                        break;
                    case '`term_french`':
                        $stmt->bindValue($identifier, $this->term_french, PDO::PARAM_STR);
                        break;
                    case '`term_dutch`':
                        $stmt->bindValue($identifier, $this->term_dutch, PDO::PARAM_STR);
                        break;
                    case '`term_bahasa`':
                        $stmt->bindValue($identifier, $this->term_bahasa, PDO::PARAM_STR);
                        break;
                    case '`term_swedish`':
                        $stmt->bindValue($identifier, $this->term_swedish, PDO::PARAM_STR);
                        break;
                    case '`term_greek_original`':
                        $stmt->bindValue($identifier, $this->term_greek_original, PDO::PARAM_STR);
                        break;
                    case '`term_greek`':
                        $stmt->bindValue($identifier, $this->term_greek, PDO::PARAM_STR);
                        break;
                    case '`term_spanish`':
                        $stmt->bindValue($identifier, $this->term_spanish, PDO::PARAM_STR);
                        break;
                    case '`term_italian`':
                        $stmt->bindValue($identifier, $this->term_italian, PDO::PARAM_STR);
                        break;
                    case '`term_vietnamese_original`':
                        $stmt->bindValue($identifier, $this->term_vietnamese_original, PDO::PARAM_STR);
                        break;
                    case '`term_vietnamese`':
                        $stmt->bindValue($identifier, $this->term_vietnamese, PDO::PARAM_STR);
                        break;
                    case '`term_laos_original`':
                        $stmt->bindValue($identifier, $this->term_laos_original, PDO::PARAM_STR);
                        break;
                    case '`term_laos`':
                        $stmt->bindValue($identifier, $this->term_laos, PDO::PARAM_STR);
                        break;
                    case '`term_hindi_original`':
                        $stmt->bindValue($identifier, $this->term_hindi_original, PDO::PARAM_STR);
                        break;
                    case '`term_hindi`':
                        $stmt->bindValue($identifier, $this->term_hindi, PDO::PARAM_STR);
                        break;
                    case '`EnglishNew`':
                        $stmt->bindValue($identifier, $this->englishnew, PDO::PARAM_STR);
                        break;
                    case '`term_japanese_original`':
                        $stmt->bindValue($identifier, $this->term_japanese_original, PDO::PARAM_STR);
                        break;
                    case '`term_japanese`':
                        $stmt->bindValue($identifier, $this->term_japanese, PDO::PARAM_STR);
                        break;
                    case '`term_arabic_original`':
                        $stmt->bindValue($identifier, $this->term_arabic_original, PDO::PARAM_STR);
                        break;
                    case '`term_arabic`':
                        $stmt->bindValue($identifier, $this->term_arabic, PDO::PARAM_STR);
                        break;
                    case '`glossary_term`':
                        $stmt->bindValue($identifier, $this->glossary_term, PDO::PARAM_STR);
                        break;
                    case '`entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`checked`':
                        $stmt->bindValue($identifier, $this->checked, PDO::PARAM_INT);
                        break;
                    case '`dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`datechecked`':
                        $stmt->bindValue($identifier, $this->datechecked, PDO::PARAM_STR);
                        break;
                    case '`remark`':
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


            if (($retval = LabelIndexPeer::doValidate($this, $columns)) !== true) {
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
        $pos = LabelIndexPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEng();
                break;
            case 2:
                return $this->getUsedWhere();
                break;
            case 3:
                return $this->getPage();
                break;
            case 4:
                return $this->getUpdatestatus();
                break;
            case 5:
                return $this->getUpdatedescription();
                break;
            case 6:
                return $this->getUpdateimplemented();
                break;
            case 7:
                return $this->getUsefb();
                break;
            case 8:
                return $this->getUseslb();
                break;
            case 9:
                return $this->getTermBanglaOriginal();
                break;
            case 10:
                return $this->getTermBangla();
                break;
            case 11:
                return $this->getTermEnglish();
                break;
            case 12:
                return $this->getTermThaiOriginal();
                break;
            case 13:
                return $this->getTermThai();
                break;
            case 14:
                return $this->getTermGerman();
                break;
            case 15:
                return $this->getTermPortuguese();
                break;
            case 16:
                return $this->getTermPortuguesePo();
                break;
            case 17:
                return $this->getTermChinese();
                break;
            case 18:
                return $this->getTermChineseU();
                break;
            case 19:
                return $this->getTermScchinese();
                break;
            case 20:
                return $this->getTermScchineseU();
                break;
            case 21:
                return $this->getTermFarsiOriginal();
                break;
            case 22:
                return $this->getTermFarsi();
                break;
            case 23:
                return $this->getTermRussianOriginal();
                break;
            case 24:
                return $this->getTermRussian();
                break;
            case 25:
                return $this->getTermFrench();
                break;
            case 26:
                return $this->getTermDutch();
                break;
            case 27:
                return $this->getTermBahasa();
                break;
            case 28:
                return $this->getTermSwedish();
                break;
            case 29:
                return $this->getTermGreekOriginal();
                break;
            case 30:
                return $this->getTermGreek();
                break;
            case 31:
                return $this->getTermSpanish();
                break;
            case 32:
                return $this->getTermItalian();
                break;
            case 33:
                return $this->getTermVietnameseOriginal();
                break;
            case 34:
                return $this->getTermVietnamese();
                break;
            case 35:
                return $this->getTermLaosOriginal();
                break;
            case 36:
                return $this->getTermLaos();
                break;
            case 37:
                return $this->getTermHindiOriginal();
                break;
            case 38:
                return $this->getTermHindi();
                break;
            case 39:
                return $this->getEnglishnew();
                break;
            case 40:
                return $this->getTermJapaneseOriginal();
                break;
            case 41:
                return $this->getTermJapanese();
                break;
            case 42:
                return $this->getTermArabicOriginal();
                break;
            case 43:
                return $this->getTermArabic();
                break;
            case 44:
                return $this->getGlossaryTerm();
                break;
            case 45:
                return $this->getEntered();
                break;
            case 46:
                return $this->getModified();
                break;
            case 47:
                return $this->getChecked();
                break;
            case 48:
                return $this->getDateentered();
                break;
            case 49:
                return $this->getDatemodified();
                break;
            case 50:
                return $this->getDatechecked();
                break;
            case 51:
                return $this->getRemark();
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
        if (isset($alreadyDumpedObjects['LabelIndex'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['LabelIndex'][$this->getPrimaryKey()] = true;
        $keys = LabelIndexPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getEng(),
            $keys[2] => $this->getUsedWhere(),
            $keys[3] => $this->getPage(),
            $keys[4] => $this->getUpdatestatus(),
            $keys[5] => $this->getUpdatedescription(),
            $keys[6] => $this->getUpdateimplemented(),
            $keys[7] => $this->getUsefb(),
            $keys[8] => $this->getUseslb(),
            $keys[9] => $this->getTermBanglaOriginal(),
            $keys[10] => $this->getTermBangla(),
            $keys[11] => $this->getTermEnglish(),
            $keys[12] => $this->getTermThaiOriginal(),
            $keys[13] => $this->getTermThai(),
            $keys[14] => $this->getTermGerman(),
            $keys[15] => $this->getTermPortuguese(),
            $keys[16] => $this->getTermPortuguesePo(),
            $keys[17] => $this->getTermChinese(),
            $keys[18] => $this->getTermChineseU(),
            $keys[19] => $this->getTermScchinese(),
            $keys[20] => $this->getTermScchineseU(),
            $keys[21] => $this->getTermFarsiOriginal(),
            $keys[22] => $this->getTermFarsi(),
            $keys[23] => $this->getTermRussianOriginal(),
            $keys[24] => $this->getTermRussian(),
            $keys[25] => $this->getTermFrench(),
            $keys[26] => $this->getTermDutch(),
            $keys[27] => $this->getTermBahasa(),
            $keys[28] => $this->getTermSwedish(),
            $keys[29] => $this->getTermGreekOriginal(),
            $keys[30] => $this->getTermGreek(),
            $keys[31] => $this->getTermSpanish(),
            $keys[32] => $this->getTermItalian(),
            $keys[33] => $this->getTermVietnameseOriginal(),
            $keys[34] => $this->getTermVietnamese(),
            $keys[35] => $this->getTermLaosOriginal(),
            $keys[36] => $this->getTermLaos(),
            $keys[37] => $this->getTermHindiOriginal(),
            $keys[38] => $this->getTermHindi(),
            $keys[39] => $this->getEnglishnew(),
            $keys[40] => $this->getTermJapaneseOriginal(),
            $keys[41] => $this->getTermJapanese(),
            $keys[42] => $this->getTermArabicOriginal(),
            $keys[43] => $this->getTermArabic(),
            $keys[44] => $this->getGlossaryTerm(),
            $keys[45] => $this->getEntered(),
            $keys[46] => $this->getModified(),
            $keys[47] => $this->getChecked(),
            $keys[48] => $this->getDateentered(),
            $keys[49] => $this->getDatemodified(),
            $keys[50] => $this->getDatechecked(),
            $keys[51] => $this->getRemark(),
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
        $pos = LabelIndexPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEng($value);
                break;
            case 2:
                $this->setUsedWhere($value);
                break;
            case 3:
                $this->setPage($value);
                break;
            case 4:
                $this->setUpdatestatus($value);
                break;
            case 5:
                $this->setUpdatedescription($value);
                break;
            case 6:
                $this->setUpdateimplemented($value);
                break;
            case 7:
                $this->setUsefb($value);
                break;
            case 8:
                $this->setUseslb($value);
                break;
            case 9:
                $this->setTermBanglaOriginal($value);
                break;
            case 10:
                $this->setTermBangla($value);
                break;
            case 11:
                $this->setTermEnglish($value);
                break;
            case 12:
                $this->setTermThaiOriginal($value);
                break;
            case 13:
                $this->setTermThai($value);
                break;
            case 14:
                $this->setTermGerman($value);
                break;
            case 15:
                $this->setTermPortuguese($value);
                break;
            case 16:
                $this->setTermPortuguesePo($value);
                break;
            case 17:
                $this->setTermChinese($value);
                break;
            case 18:
                $this->setTermChineseU($value);
                break;
            case 19:
                $this->setTermScchinese($value);
                break;
            case 20:
                $this->setTermScchineseU($value);
                break;
            case 21:
                $this->setTermFarsiOriginal($value);
                break;
            case 22:
                $this->setTermFarsi($value);
                break;
            case 23:
                $this->setTermRussianOriginal($value);
                break;
            case 24:
                $this->setTermRussian($value);
                break;
            case 25:
                $this->setTermFrench($value);
                break;
            case 26:
                $this->setTermDutch($value);
                break;
            case 27:
                $this->setTermBahasa($value);
                break;
            case 28:
                $this->setTermSwedish($value);
                break;
            case 29:
                $this->setTermGreekOriginal($value);
                break;
            case 30:
                $this->setTermGreek($value);
                break;
            case 31:
                $this->setTermSpanish($value);
                break;
            case 32:
                $this->setTermItalian($value);
                break;
            case 33:
                $this->setTermVietnameseOriginal($value);
                break;
            case 34:
                $this->setTermVietnamese($value);
                break;
            case 35:
                $this->setTermLaosOriginal($value);
                break;
            case 36:
                $this->setTermLaos($value);
                break;
            case 37:
                $this->setTermHindiOriginal($value);
                break;
            case 38:
                $this->setTermHindi($value);
                break;
            case 39:
                $this->setEnglishnew($value);
                break;
            case 40:
                $this->setTermJapaneseOriginal($value);
                break;
            case 41:
                $this->setTermJapanese($value);
                break;
            case 42:
                $this->setTermArabicOriginal($value);
                break;
            case 43:
                $this->setTermArabic($value);
                break;
            case 44:
                $this->setGlossaryTerm($value);
                break;
            case 45:
                $this->setEntered($value);
                break;
            case 46:
                $this->setModified($value);
                break;
            case 47:
                $this->setChecked($value);
                break;
            case 48:
                $this->setDateentered($value);
                break;
            case 49:
                $this->setDatemodified($value);
                break;
            case 50:
                $this->setDatechecked($value);
                break;
            case 51:
                $this->setRemark($value);
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
        $keys = LabelIndexPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEng($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUsedWhere($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPage($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUpdatestatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUpdatedescription($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUpdateimplemented($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUsefb($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUseslb($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTermBanglaOriginal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTermBangla($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTermEnglish($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTermThaiOriginal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTermThai($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTermGerman($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTermPortuguese($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTermPortuguesePo($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTermChinese($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTermChineseU($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTermScchinese($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTermScchineseU($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTermFarsiOriginal($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTermFarsi($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTermRussianOriginal($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTermRussian($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTermFrench($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTermDutch($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTermBahasa($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTermSwedish($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTermGreekOriginal($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTermGreek($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTermSpanish($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTermItalian($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTermVietnameseOriginal($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTermVietnamese($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTermLaosOriginal($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTermLaos($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTermHindiOriginal($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTermHindi($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEnglishnew($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTermJapaneseOriginal($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTermJapanese($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTermArabicOriginal($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTermArabic($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setGlossaryTerm($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setEntered($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setModified($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setChecked($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setDateentered($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setDatemodified($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDatechecked($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setRemark($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTs($arr[$keys[52]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LabelIndexPeer::DATABASE_NAME);

        if ($this->isColumnModified(LabelIndexPeer::AUTOCTR)) $criteria->add(LabelIndexPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(LabelIndexPeer::ENG)) $criteria->add(LabelIndexPeer::ENG, $this->eng);
        if ($this->isColumnModified(LabelIndexPeer::USED_WHERE)) $criteria->add(LabelIndexPeer::USED_WHERE, $this->used_where);
        if ($this->isColumnModified(LabelIndexPeer::PAGE)) $criteria->add(LabelIndexPeer::PAGE, $this->page);
        if ($this->isColumnModified(LabelIndexPeer::UPDATESTATUS)) $criteria->add(LabelIndexPeer::UPDATESTATUS, $this->updatestatus);
        if ($this->isColumnModified(LabelIndexPeer::UPDATEDESCRIPTION)) $criteria->add(LabelIndexPeer::UPDATEDESCRIPTION, $this->updatedescription);
        if ($this->isColumnModified(LabelIndexPeer::UPDATEIMPLEMENTED)) $criteria->add(LabelIndexPeer::UPDATEIMPLEMENTED, $this->updateimplemented);
        if ($this->isColumnModified(LabelIndexPeer::USEFB)) $criteria->add(LabelIndexPeer::USEFB, $this->usefb);
        if ($this->isColumnModified(LabelIndexPeer::USESLB)) $criteria->add(LabelIndexPeer::USESLB, $this->useslb);
        if ($this->isColumnModified(LabelIndexPeer::TERM_BANGLA_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_BANGLA_ORIGINAL, $this->term_bangla_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_BANGLA)) $criteria->add(LabelIndexPeer::TERM_BANGLA, $this->term_bangla);
        if ($this->isColumnModified(LabelIndexPeer::TERM_ENGLISH)) $criteria->add(LabelIndexPeer::TERM_ENGLISH, $this->term_english);
        if ($this->isColumnModified(LabelIndexPeer::TERM_THAI_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_THAI_ORIGINAL, $this->term_thai_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_THAI)) $criteria->add(LabelIndexPeer::TERM_THAI, $this->term_thai);
        if ($this->isColumnModified(LabelIndexPeer::TERM_GERMAN)) $criteria->add(LabelIndexPeer::TERM_GERMAN, $this->term_german);
        if ($this->isColumnModified(LabelIndexPeer::TERM_PORTUGUESE)) $criteria->add(LabelIndexPeer::TERM_PORTUGUESE, $this->term_portuguese);
        if ($this->isColumnModified(LabelIndexPeer::TERM_PORTUGUESE_PO)) $criteria->add(LabelIndexPeer::TERM_PORTUGUESE_PO, $this->term_portuguese_po);
        if ($this->isColumnModified(LabelIndexPeer::TERM_CHINESE)) $criteria->add(LabelIndexPeer::TERM_CHINESE, $this->term_chinese);
        if ($this->isColumnModified(LabelIndexPeer::TERM_CHINESE_U)) $criteria->add(LabelIndexPeer::TERM_CHINESE_U, $this->term_chinese_u);
        if ($this->isColumnModified(LabelIndexPeer::TERM_SCCHINESE)) $criteria->add(LabelIndexPeer::TERM_SCCHINESE, $this->term_scchinese);
        if ($this->isColumnModified(LabelIndexPeer::TERM_SCCHINESE_U)) $criteria->add(LabelIndexPeer::TERM_SCCHINESE_U, $this->term_scchinese_u);
        if ($this->isColumnModified(LabelIndexPeer::TERM_FARSI_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_FARSI_ORIGINAL, $this->term_farsi_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_FARSI)) $criteria->add(LabelIndexPeer::TERM_FARSI, $this->term_farsi);
        if ($this->isColumnModified(LabelIndexPeer::TERM_RUSSIAN_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_RUSSIAN_ORIGINAL, $this->term_russian_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_RUSSIAN)) $criteria->add(LabelIndexPeer::TERM_RUSSIAN, $this->term_russian);
        if ($this->isColumnModified(LabelIndexPeer::TERM_FRENCH)) $criteria->add(LabelIndexPeer::TERM_FRENCH, $this->term_french);
        if ($this->isColumnModified(LabelIndexPeer::TERM_DUTCH)) $criteria->add(LabelIndexPeer::TERM_DUTCH, $this->term_dutch);
        if ($this->isColumnModified(LabelIndexPeer::TERM_BAHASA)) $criteria->add(LabelIndexPeer::TERM_BAHASA, $this->term_bahasa);
        if ($this->isColumnModified(LabelIndexPeer::TERM_SWEDISH)) $criteria->add(LabelIndexPeer::TERM_SWEDISH, $this->term_swedish);
        if ($this->isColumnModified(LabelIndexPeer::TERM_GREEK_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_GREEK_ORIGINAL, $this->term_greek_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_GREEK)) $criteria->add(LabelIndexPeer::TERM_GREEK, $this->term_greek);
        if ($this->isColumnModified(LabelIndexPeer::TERM_SPANISH)) $criteria->add(LabelIndexPeer::TERM_SPANISH, $this->term_spanish);
        if ($this->isColumnModified(LabelIndexPeer::TERM_ITALIAN)) $criteria->add(LabelIndexPeer::TERM_ITALIAN, $this->term_italian);
        if ($this->isColumnModified(LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL, $this->term_vietnamese_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_VIETNAMESE)) $criteria->add(LabelIndexPeer::TERM_VIETNAMESE, $this->term_vietnamese);
        if ($this->isColumnModified(LabelIndexPeer::TERM_LAOS_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_LAOS_ORIGINAL, $this->term_laos_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_LAOS)) $criteria->add(LabelIndexPeer::TERM_LAOS, $this->term_laos);
        if ($this->isColumnModified(LabelIndexPeer::TERM_HINDI_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_HINDI_ORIGINAL, $this->term_hindi_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_HINDI)) $criteria->add(LabelIndexPeer::TERM_HINDI, $this->term_hindi);
        if ($this->isColumnModified(LabelIndexPeer::ENGLISHNEW)) $criteria->add(LabelIndexPeer::ENGLISHNEW, $this->englishnew);
        if ($this->isColumnModified(LabelIndexPeer::TERM_JAPANESE_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_JAPANESE_ORIGINAL, $this->term_japanese_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_JAPANESE)) $criteria->add(LabelIndexPeer::TERM_JAPANESE, $this->term_japanese);
        if ($this->isColumnModified(LabelIndexPeer::TERM_ARABIC_ORIGINAL)) $criteria->add(LabelIndexPeer::TERM_ARABIC_ORIGINAL, $this->term_arabic_original);
        if ($this->isColumnModified(LabelIndexPeer::TERM_ARABIC)) $criteria->add(LabelIndexPeer::TERM_ARABIC, $this->term_arabic);
        if ($this->isColumnModified(LabelIndexPeer::GLOSSARY_TERM)) $criteria->add(LabelIndexPeer::GLOSSARY_TERM, $this->glossary_term);
        if ($this->isColumnModified(LabelIndexPeer::ENTERED)) $criteria->add(LabelIndexPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(LabelIndexPeer::MODIFIED)) $criteria->add(LabelIndexPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(LabelIndexPeer::CHECKED)) $criteria->add(LabelIndexPeer::CHECKED, $this->checked);
        if ($this->isColumnModified(LabelIndexPeer::DATEENTERED)) $criteria->add(LabelIndexPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(LabelIndexPeer::DATEMODIFIED)) $criteria->add(LabelIndexPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(LabelIndexPeer::DATECHECKED)) $criteria->add(LabelIndexPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(LabelIndexPeer::REMARK)) $criteria->add(LabelIndexPeer::REMARK, $this->remark);
        if ($this->isColumnModified(LabelIndexPeer::TS)) $criteria->add(LabelIndexPeer::TS, $this->ts);

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
        $criteria = new Criteria(LabelIndexPeer::DATABASE_NAME);
        $criteria->add(LabelIndexPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of LabelIndex (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEng($this->getEng());
        $copyObj->setUsedWhere($this->getUsedWhere());
        $copyObj->setPage($this->getPage());
        $copyObj->setUpdatestatus($this->getUpdatestatus());
        $copyObj->setUpdatedescription($this->getUpdatedescription());
        $copyObj->setUpdateimplemented($this->getUpdateimplemented());
        $copyObj->setUsefb($this->getUsefb());
        $copyObj->setUseslb($this->getUseslb());
        $copyObj->setTermBanglaOriginal($this->getTermBanglaOriginal());
        $copyObj->setTermBangla($this->getTermBangla());
        $copyObj->setTermEnglish($this->getTermEnglish());
        $copyObj->setTermThaiOriginal($this->getTermThaiOriginal());
        $copyObj->setTermThai($this->getTermThai());
        $copyObj->setTermGerman($this->getTermGerman());
        $copyObj->setTermPortuguese($this->getTermPortuguese());
        $copyObj->setTermPortuguesePo($this->getTermPortuguesePo());
        $copyObj->setTermChinese($this->getTermChinese());
        $copyObj->setTermChineseU($this->getTermChineseU());
        $copyObj->setTermScchinese($this->getTermScchinese());
        $copyObj->setTermScchineseU($this->getTermScchineseU());
        $copyObj->setTermFarsiOriginal($this->getTermFarsiOriginal());
        $copyObj->setTermFarsi($this->getTermFarsi());
        $copyObj->setTermRussianOriginal($this->getTermRussianOriginal());
        $copyObj->setTermRussian($this->getTermRussian());
        $copyObj->setTermFrench($this->getTermFrench());
        $copyObj->setTermDutch($this->getTermDutch());
        $copyObj->setTermBahasa($this->getTermBahasa());
        $copyObj->setTermSwedish($this->getTermSwedish());
        $copyObj->setTermGreekOriginal($this->getTermGreekOriginal());
        $copyObj->setTermGreek($this->getTermGreek());
        $copyObj->setTermSpanish($this->getTermSpanish());
        $copyObj->setTermItalian($this->getTermItalian());
        $copyObj->setTermVietnameseOriginal($this->getTermVietnameseOriginal());
        $copyObj->setTermVietnamese($this->getTermVietnamese());
        $copyObj->setTermLaosOriginal($this->getTermLaosOriginal());
        $copyObj->setTermLaos($this->getTermLaos());
        $copyObj->setTermHindiOriginal($this->getTermHindiOriginal());
        $copyObj->setTermHindi($this->getTermHindi());
        $copyObj->setEnglishnew($this->getEnglishnew());
        $copyObj->setTermJapaneseOriginal($this->getTermJapaneseOriginal());
        $copyObj->setTermJapanese($this->getTermJapanese());
        $copyObj->setTermArabicOriginal($this->getTermArabicOriginal());
        $copyObj->setTermArabic($this->getTermArabic());
        $copyObj->setGlossaryTerm($this->getGlossaryTerm());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setModified($this->getModified());
        $copyObj->setChecked($this->getChecked());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setDatemodified($this->getDatemodified());
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
     * @return LabelIndex Clone of current object.
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
     * @return LabelIndexPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LabelIndexPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->eng = null;
        $this->used_where = null;
        $this->page = null;
        $this->updatestatus = null;
        $this->updatedescription = null;
        $this->updateimplemented = null;
        $this->usefb = null;
        $this->useslb = null;
        $this->term_bangla_original = null;
        $this->term_bangla = null;
        $this->term_english = null;
        $this->term_thai_original = null;
        $this->term_thai = null;
        $this->term_german = null;
        $this->term_portuguese = null;
        $this->term_portuguese_po = null;
        $this->term_chinese = null;
        $this->term_chinese_u = null;
        $this->term_scchinese = null;
        $this->term_scchinese_u = null;
        $this->term_farsi_original = null;
        $this->term_farsi = null;
        $this->term_russian_original = null;
        $this->term_russian = null;
        $this->term_french = null;
        $this->term_dutch = null;
        $this->term_bahasa = null;
        $this->term_swedish = null;
        $this->term_greek_original = null;
        $this->term_greek = null;
        $this->term_spanish = null;
        $this->term_italian = null;
        $this->term_vietnamese_original = null;
        $this->term_vietnamese = null;
        $this->term_laos_original = null;
        $this->term_laos = null;
        $this->term_hindi_original = null;
        $this->term_hindi = null;
        $this->englishnew = null;
        $this->term_japanese_original = null;
        $this->term_japanese = null;
        $this->term_arabic_original = null;
        $this->term_arabic = null;
        $this->glossary_term = null;
        $this->entered = null;
        $this->modified = null;
        $this->checked = null;
        $this->dateentered = null;
        $this->datemodified = null;
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
        return (string) $this->exportTo(LabelIndexPeer::DEFAULT_STRING_FORMAT);
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
