<?php


/**
 * Base class that represents a row from the 'poplfdata' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePoplfdata extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PoplfdataPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PoplfdataPeer
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
     * The value for the lfcode field.
     * @var        int
     */
    protected $lfcode;

    /**
     * The value for the datesampled field.
     * @var        string
     */
    protected $datesampled;

    /**
     * The value for the yearofsampleold field.
     * @var        int
     */
    protected $yearofsampleold;

    /**
     * The value for the yearofsample field.
     * @var        string
     */
    protected $yearofsample;

    /**
     * The value for the individuals field.
     * @var        double
     */
    protected $individuals;

    /**
     * The value for the class1ml field.
     * @var        double
     */
    protected $class1ml;

    /**
     * The value for the class1fr field.
     * @var        double
     */
    protected $class1fr;

    /**
     * The value for the class2ml field.
     * @var        double
     */
    protected $class2ml;

    /**
     * The value for the class2fr field.
     * @var        double
     */
    protected $class2fr;

    /**
     * The value for the class3ml field.
     * @var        double
     */
    protected $class3ml;

    /**
     * The value for the class3fr field.
     * @var        double
     */
    protected $class3fr;

    /**
     * The value for the class4ml field.
     * @var        double
     */
    protected $class4ml;

    /**
     * The value for the class4fr field.
     * @var        double
     */
    protected $class4fr;

    /**
     * The value for the class5ml field.
     * @var        double
     */
    protected $class5ml;

    /**
     * The value for the class5fr field.
     * @var        double
     */
    protected $class5fr;

    /**
     * The value for the class6ml field.
     * @var        double
     */
    protected $class6ml;

    /**
     * The value for the class6fr field.
     * @var        double
     */
    protected $class6fr;

    /**
     * The value for the class7ml field.
     * @var        double
     */
    protected $class7ml;

    /**
     * The value for the class7fr field.
     * @var        double
     */
    protected $class7fr;

    /**
     * The value for the class8ml field.
     * @var        double
     */
    protected $class8ml;

    /**
     * The value for the class8fr field.
     * @var        double
     */
    protected $class8fr;

    /**
     * The value for the class9ml field.
     * @var        double
     */
    protected $class9ml;

    /**
     * The value for the class9fr field.
     * @var        double
     */
    protected $class9fr;

    /**
     * The value for the class10ml field.
     * @var        double
     */
    protected $class10ml;

    /**
     * The value for the class10fr field.
     * @var        double
     */
    protected $class10fr;

    /**
     * The value for the class11ml field.
     * @var        double
     */
    protected $class11ml;

    /**
     * The value for the class11fr field.
     * @var        double
     */
    protected $class11fr;

    /**
     * The value for the class12ml field.
     * @var        double
     */
    protected $class12ml;

    /**
     * The value for the class12fr field.
     * @var        double
     */
    protected $class12fr;

    /**
     * The value for the class13ml field.
     * @var        double
     */
    protected $class13ml;

    /**
     * The value for the class13fr field.
     * @var        double
     */
    protected $class13fr;

    /**
     * The value for the class14ml field.
     * @var        double
     */
    protected $class14ml;

    /**
     * The value for the class14fr field.
     * @var        double
     */
    protected $class14fr;

    /**
     * The value for the class15ml field.
     * @var        double
     */
    protected $class15ml;

    /**
     * The value for the class15fr field.
     * @var        double
     */
    protected $class15fr;

    /**
     * The value for the class16ml field.
     * @var        double
     */
    protected $class16ml;

    /**
     * The value for the class16fr field.
     * @var        double
     */
    protected $class16fr;

    /**
     * The value for the class17ml field.
     * @var        double
     */
    protected $class17ml;

    /**
     * The value for the class17fr field.
     * @var        double
     */
    protected $class17fr;

    /**
     * The value for the class18ml field.
     * @var        double
     */
    protected $class18ml;

    /**
     * The value for the class18fr field.
     * @var        double
     */
    protected $class18fr;

    /**
     * The value for the class19ml field.
     * @var        double
     */
    protected $class19ml;

    /**
     * The value for the class19fr field.
     * @var        double
     */
    protected $class19fr;

    /**
     * The value for the class20ml field.
     * @var        double
     */
    protected $class20ml;

    /**
     * The value for the class20fr field.
     * @var        double
     */
    protected $class20fr;

    /**
     * The value for the class21ml field.
     * @var        double
     */
    protected $class21ml;

    /**
     * The value for the class21fr field.
     * @var        double
     */
    protected $class21fr;

    /**
     * The value for the class22ml field.
     * @var        double
     */
    protected $class22ml;

    /**
     * The value for the class22fr field.
     * @var        double
     */
    protected $class22fr;

    /**
     * The value for the class23ml field.
     * @var        double
     */
    protected $class23ml;

    /**
     * The value for the class23fr field.
     * @var        double
     */
    protected $class23fr;

    /**
     * The value for the class24ml field.
     * @var        double
     */
    protected $class24ml;

    /**
     * The value for the class24fr field.
     * @var        double
     */
    protected $class24fr;

    /**
     * The value for the class25ml field.
     * @var        double
     */
    protected $class25ml;

    /**
     * The value for the class25fr field.
     * @var        double
     */
    protected $class25fr;

    /**
     * The value for the class26ml field.
     * @var        double
     */
    protected $class26ml;

    /**
     * The value for the class26fr field.
     * @var        double
     */
    protected $class26fr;

    /**
     * The value for the class27ml field.
     * @var        double
     */
    protected $class27ml;

    /**
     * The value for the class27fr field.
     * @var        double
     */
    protected $class27fr;

    /**
     * The value for the class28ml field.
     * @var        double
     */
    protected $class28ml;

    /**
     * The value for the class28fr field.
     * @var        double
     */
    protected $class28fr;

    /**
     * The value for the class29ml field.
     * @var        double
     */
    protected $class29ml;

    /**
     * The value for the class29fr field.
     * @var        double
     */
    protected $class29fr;

    /**
     * The value for the class30ml field.
     * @var        double
     */
    protected $class30ml;

    /**
     * The value for the class30fr field.
     * @var        double
     */
    protected $class30fr;

    /**
     * The value for the class31ml field.
     * @var        double
     */
    protected $class31ml;

    /**
     * The value for the class31fr field.
     * @var        double
     */
    protected $class31fr;

    /**
     * The value for the class32ml field.
     * @var        double
     */
    protected $class32ml;

    /**
     * The value for the class32fr field.
     * @var        double
     */
    protected $class32fr;

    /**
     * The value for the class33ml field.
     * @var        double
     */
    protected $class33ml;

    /**
     * The value for the class33fr field.
     * @var        double
     */
    protected $class33fr;

    /**
     * The value for the class34ml field.
     * @var        double
     */
    protected $class34ml;

    /**
     * The value for the class34fr field.
     * @var        double
     */
    protected $class34fr;

    /**
     * The value for the class35ml field.
     * @var        double
     */
    protected $class35ml;

    /**
     * The value for the class35fr field.
     * @var        double
     */
    protected $class35fr;

    /**
     * The value for the class36ml field.
     * @var        double
     */
    protected $class36ml;

    /**
     * The value for the class36fr field.
     * @var        double
     */
    protected $class36fr;

    /**
     * The value for the class37ml field.
     * @var        double
     */
    protected $class37ml;

    /**
     * The value for the class37fr field.
     * @var        double
     */
    protected $class37fr;

    /**
     * The value for the class38ml field.
     * @var        double
     */
    protected $class38ml;

    /**
     * The value for the class38fr field.
     * @var        double
     */
    protected $class38fr;

    /**
     * The value for the class39ml field.
     * @var        double
     */
    protected $class39ml;

    /**
     * The value for the class39fr field.
     * @var        double
     */
    protected $class39fr;

    /**
     * The value for the class40ml field.
     * @var        double
     */
    protected $class40ml;

    /**
     * The value for the class40fr field.
     * @var        double
     */
    protected $class40fr;

    /**
     * The value for the class41ml field.
     * @var        double
     */
    protected $class41ml;

    /**
     * The value for the class41fr field.
     * @var        double
     */
    protected $class41fr;

    /**
     * The value for the class42ml field.
     * @var        double
     */
    protected $class42ml;

    /**
     * The value for the class42fr field.
     * @var        double
     */
    protected $class42fr;

    /**
     * The value for the class43ml field.
     * @var        double
     */
    protected $class43ml;

    /**
     * The value for the class43fr field.
     * @var        double
     */
    protected $class43fr;

    /**
     * The value for the class44ml field.
     * @var        double
     */
    protected $class44ml;

    /**
     * The value for the class44fr field.
     * @var        double
     */
    protected $class44fr;

    /**
     * The value for the class45ml field.
     * @var        double
     */
    protected $class45ml;

    /**
     * The value for the class45fr field.
     * @var        double
     */
    protected $class45fr;

    /**
     * The value for the class46ml field.
     * @var        double
     */
    protected $class46ml;

    /**
     * The value for the class46fr field.
     * @var        double
     */
    protected $class46fr;

    /**
     * The value for the class47ml field.
     * @var        double
     */
    protected $class47ml;

    /**
     * The value for the class47fr field.
     * @var        double
     */
    protected $class47fr;

    /**
     * The value for the class48ml field.
     * @var        double
     */
    protected $class48ml;

    /**
     * The value for the class48fr field.
     * @var        double
     */
    protected $class48fr;

    /**
     * The value for the class49ml field.
     * @var        double
     */
    protected $class49ml;

    /**
     * The value for the class49fr field.
     * @var        double
     */
    protected $class49fr;

    /**
     * The value for the class50ml field.
     * @var        double
     */
    protected $class50ml;

    /**
     * The value for the class50fr field.
     * @var        double
     */
    protected $class50fr;

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
     * Get the [lfcode] column value.
     *
     * @return int
     */
    public function getLfcode()
    {

        return $this->lfcode;
    }

    /**
     * Get the [optionally formatted] temporal [datesampled] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatesampled($format = 'Y-m-d H:i:s')
    {
        if ($this->datesampled === null) {
            return null;
        }

        if ($this->datesampled === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datesampled);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datesampled, true), $x);
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
     * Get the [yearofsampleold] column value.
     *
     * @return int
     */
    public function getYearofsampleold()
    {

        return $this->yearofsampleold;
    }

    /**
     * Get the [yearofsample] column value.
     *
     * @return string
     */
    public function getYearofsample()
    {

        return $this->yearofsample;
    }

    /**
     * Get the [individuals] column value.
     *
     * @return double
     */
    public function getIndividuals()
    {

        return $this->individuals;
    }

    /**
     * Get the [class1ml] column value.
     *
     * @return double
     */
    public function getClass1ml()
    {

        return $this->class1ml;
    }

    /**
     * Get the [class1fr] column value.
     *
     * @return double
     */
    public function getClass1fr()
    {

        return $this->class1fr;
    }

    /**
     * Get the [class2ml] column value.
     *
     * @return double
     */
    public function getClass2ml()
    {

        return $this->class2ml;
    }

    /**
     * Get the [class2fr] column value.
     *
     * @return double
     */
    public function getClass2fr()
    {

        return $this->class2fr;
    }

    /**
     * Get the [class3ml] column value.
     *
     * @return double
     */
    public function getClass3ml()
    {

        return $this->class3ml;
    }

    /**
     * Get the [class3fr] column value.
     *
     * @return double
     */
    public function getClass3fr()
    {

        return $this->class3fr;
    }

    /**
     * Get the [class4ml] column value.
     *
     * @return double
     */
    public function getClass4ml()
    {

        return $this->class4ml;
    }

    /**
     * Get the [class4fr] column value.
     *
     * @return double
     */
    public function getClass4fr()
    {

        return $this->class4fr;
    }

    /**
     * Get the [class5ml] column value.
     *
     * @return double
     */
    public function getClass5ml()
    {

        return $this->class5ml;
    }

    /**
     * Get the [class5fr] column value.
     *
     * @return double
     */
    public function getClass5fr()
    {

        return $this->class5fr;
    }

    /**
     * Get the [class6ml] column value.
     *
     * @return double
     */
    public function getClass6ml()
    {

        return $this->class6ml;
    }

    /**
     * Get the [class6fr] column value.
     *
     * @return double
     */
    public function getClass6fr()
    {

        return $this->class6fr;
    }

    /**
     * Get the [class7ml] column value.
     *
     * @return double
     */
    public function getClass7ml()
    {

        return $this->class7ml;
    }

    /**
     * Get the [class7fr] column value.
     *
     * @return double
     */
    public function getClass7fr()
    {

        return $this->class7fr;
    }

    /**
     * Get the [class8ml] column value.
     *
     * @return double
     */
    public function getClass8ml()
    {

        return $this->class8ml;
    }

    /**
     * Get the [class8fr] column value.
     *
     * @return double
     */
    public function getClass8fr()
    {

        return $this->class8fr;
    }

    /**
     * Get the [class9ml] column value.
     *
     * @return double
     */
    public function getClass9ml()
    {

        return $this->class9ml;
    }

    /**
     * Get the [class9fr] column value.
     *
     * @return double
     */
    public function getClass9fr()
    {

        return $this->class9fr;
    }

    /**
     * Get the [class10ml] column value.
     *
     * @return double
     */
    public function getClass10ml()
    {

        return $this->class10ml;
    }

    /**
     * Get the [class10fr] column value.
     *
     * @return double
     */
    public function getClass10fr()
    {

        return $this->class10fr;
    }

    /**
     * Get the [class11ml] column value.
     *
     * @return double
     */
    public function getClass11ml()
    {

        return $this->class11ml;
    }

    /**
     * Get the [class11fr] column value.
     *
     * @return double
     */
    public function getClass11fr()
    {

        return $this->class11fr;
    }

    /**
     * Get the [class12ml] column value.
     *
     * @return double
     */
    public function getClass12ml()
    {

        return $this->class12ml;
    }

    /**
     * Get the [class12fr] column value.
     *
     * @return double
     */
    public function getClass12fr()
    {

        return $this->class12fr;
    }

    /**
     * Get the [class13ml] column value.
     *
     * @return double
     */
    public function getClass13ml()
    {

        return $this->class13ml;
    }

    /**
     * Get the [class13fr] column value.
     *
     * @return double
     */
    public function getClass13fr()
    {

        return $this->class13fr;
    }

    /**
     * Get the [class14ml] column value.
     *
     * @return double
     */
    public function getClass14ml()
    {

        return $this->class14ml;
    }

    /**
     * Get the [class14fr] column value.
     *
     * @return double
     */
    public function getClass14fr()
    {

        return $this->class14fr;
    }

    /**
     * Get the [class15ml] column value.
     *
     * @return double
     */
    public function getClass15ml()
    {

        return $this->class15ml;
    }

    /**
     * Get the [class15fr] column value.
     *
     * @return double
     */
    public function getClass15fr()
    {

        return $this->class15fr;
    }

    /**
     * Get the [class16ml] column value.
     *
     * @return double
     */
    public function getClass16ml()
    {

        return $this->class16ml;
    }

    /**
     * Get the [class16fr] column value.
     *
     * @return double
     */
    public function getClass16fr()
    {

        return $this->class16fr;
    }

    /**
     * Get the [class17ml] column value.
     *
     * @return double
     */
    public function getClass17ml()
    {

        return $this->class17ml;
    }

    /**
     * Get the [class17fr] column value.
     *
     * @return double
     */
    public function getClass17fr()
    {

        return $this->class17fr;
    }

    /**
     * Get the [class18ml] column value.
     *
     * @return double
     */
    public function getClass18ml()
    {

        return $this->class18ml;
    }

    /**
     * Get the [class18fr] column value.
     *
     * @return double
     */
    public function getClass18fr()
    {

        return $this->class18fr;
    }

    /**
     * Get the [class19ml] column value.
     *
     * @return double
     */
    public function getClass19ml()
    {

        return $this->class19ml;
    }

    /**
     * Get the [class19fr] column value.
     *
     * @return double
     */
    public function getClass19fr()
    {

        return $this->class19fr;
    }

    /**
     * Get the [class20ml] column value.
     *
     * @return double
     */
    public function getClass20ml()
    {

        return $this->class20ml;
    }

    /**
     * Get the [class20fr] column value.
     *
     * @return double
     */
    public function getClass20fr()
    {

        return $this->class20fr;
    }

    /**
     * Get the [class21ml] column value.
     *
     * @return double
     */
    public function getClass21ml()
    {

        return $this->class21ml;
    }

    /**
     * Get the [class21fr] column value.
     *
     * @return double
     */
    public function getClass21fr()
    {

        return $this->class21fr;
    }

    /**
     * Get the [class22ml] column value.
     *
     * @return double
     */
    public function getClass22ml()
    {

        return $this->class22ml;
    }

    /**
     * Get the [class22fr] column value.
     *
     * @return double
     */
    public function getClass22fr()
    {

        return $this->class22fr;
    }

    /**
     * Get the [class23ml] column value.
     *
     * @return double
     */
    public function getClass23ml()
    {

        return $this->class23ml;
    }

    /**
     * Get the [class23fr] column value.
     *
     * @return double
     */
    public function getClass23fr()
    {

        return $this->class23fr;
    }

    /**
     * Get the [class24ml] column value.
     *
     * @return double
     */
    public function getClass24ml()
    {

        return $this->class24ml;
    }

    /**
     * Get the [class24fr] column value.
     *
     * @return double
     */
    public function getClass24fr()
    {

        return $this->class24fr;
    }

    /**
     * Get the [class25ml] column value.
     *
     * @return double
     */
    public function getClass25ml()
    {

        return $this->class25ml;
    }

    /**
     * Get the [class25fr] column value.
     *
     * @return double
     */
    public function getClass25fr()
    {

        return $this->class25fr;
    }

    /**
     * Get the [class26ml] column value.
     *
     * @return double
     */
    public function getClass26ml()
    {

        return $this->class26ml;
    }

    /**
     * Get the [class26fr] column value.
     *
     * @return double
     */
    public function getClass26fr()
    {

        return $this->class26fr;
    }

    /**
     * Get the [class27ml] column value.
     *
     * @return double
     */
    public function getClass27ml()
    {

        return $this->class27ml;
    }

    /**
     * Get the [class27fr] column value.
     *
     * @return double
     */
    public function getClass27fr()
    {

        return $this->class27fr;
    }

    /**
     * Get the [class28ml] column value.
     *
     * @return double
     */
    public function getClass28ml()
    {

        return $this->class28ml;
    }

    /**
     * Get the [class28fr] column value.
     *
     * @return double
     */
    public function getClass28fr()
    {

        return $this->class28fr;
    }

    /**
     * Get the [class29ml] column value.
     *
     * @return double
     */
    public function getClass29ml()
    {

        return $this->class29ml;
    }

    /**
     * Get the [class29fr] column value.
     *
     * @return double
     */
    public function getClass29fr()
    {

        return $this->class29fr;
    }

    /**
     * Get the [class30ml] column value.
     *
     * @return double
     */
    public function getClass30ml()
    {

        return $this->class30ml;
    }

    /**
     * Get the [class30fr] column value.
     *
     * @return double
     */
    public function getClass30fr()
    {

        return $this->class30fr;
    }

    /**
     * Get the [class31ml] column value.
     *
     * @return double
     */
    public function getClass31ml()
    {

        return $this->class31ml;
    }

    /**
     * Get the [class31fr] column value.
     *
     * @return double
     */
    public function getClass31fr()
    {

        return $this->class31fr;
    }

    /**
     * Get the [class32ml] column value.
     *
     * @return double
     */
    public function getClass32ml()
    {

        return $this->class32ml;
    }

    /**
     * Get the [class32fr] column value.
     *
     * @return double
     */
    public function getClass32fr()
    {

        return $this->class32fr;
    }

    /**
     * Get the [class33ml] column value.
     *
     * @return double
     */
    public function getClass33ml()
    {

        return $this->class33ml;
    }

    /**
     * Get the [class33fr] column value.
     *
     * @return double
     */
    public function getClass33fr()
    {

        return $this->class33fr;
    }

    /**
     * Get the [class34ml] column value.
     *
     * @return double
     */
    public function getClass34ml()
    {

        return $this->class34ml;
    }

    /**
     * Get the [class34fr] column value.
     *
     * @return double
     */
    public function getClass34fr()
    {

        return $this->class34fr;
    }

    /**
     * Get the [class35ml] column value.
     *
     * @return double
     */
    public function getClass35ml()
    {

        return $this->class35ml;
    }

    /**
     * Get the [class35fr] column value.
     *
     * @return double
     */
    public function getClass35fr()
    {

        return $this->class35fr;
    }

    /**
     * Get the [class36ml] column value.
     *
     * @return double
     */
    public function getClass36ml()
    {

        return $this->class36ml;
    }

    /**
     * Get the [class36fr] column value.
     *
     * @return double
     */
    public function getClass36fr()
    {

        return $this->class36fr;
    }

    /**
     * Get the [class37ml] column value.
     *
     * @return double
     */
    public function getClass37ml()
    {

        return $this->class37ml;
    }

    /**
     * Get the [class37fr] column value.
     *
     * @return double
     */
    public function getClass37fr()
    {

        return $this->class37fr;
    }

    /**
     * Get the [class38ml] column value.
     *
     * @return double
     */
    public function getClass38ml()
    {

        return $this->class38ml;
    }

    /**
     * Get the [class38fr] column value.
     *
     * @return double
     */
    public function getClass38fr()
    {

        return $this->class38fr;
    }

    /**
     * Get the [class39ml] column value.
     *
     * @return double
     */
    public function getClass39ml()
    {

        return $this->class39ml;
    }

    /**
     * Get the [class39fr] column value.
     *
     * @return double
     */
    public function getClass39fr()
    {

        return $this->class39fr;
    }

    /**
     * Get the [class40ml] column value.
     *
     * @return double
     */
    public function getClass40ml()
    {

        return $this->class40ml;
    }

    /**
     * Get the [class40fr] column value.
     *
     * @return double
     */
    public function getClass40fr()
    {

        return $this->class40fr;
    }

    /**
     * Get the [class41ml] column value.
     *
     * @return double
     */
    public function getClass41ml()
    {

        return $this->class41ml;
    }

    /**
     * Get the [class41fr] column value.
     *
     * @return double
     */
    public function getClass41fr()
    {

        return $this->class41fr;
    }

    /**
     * Get the [class42ml] column value.
     *
     * @return double
     */
    public function getClass42ml()
    {

        return $this->class42ml;
    }

    /**
     * Get the [class42fr] column value.
     *
     * @return double
     */
    public function getClass42fr()
    {

        return $this->class42fr;
    }

    /**
     * Get the [class43ml] column value.
     *
     * @return double
     */
    public function getClass43ml()
    {

        return $this->class43ml;
    }

    /**
     * Get the [class43fr] column value.
     *
     * @return double
     */
    public function getClass43fr()
    {

        return $this->class43fr;
    }

    /**
     * Get the [class44ml] column value.
     *
     * @return double
     */
    public function getClass44ml()
    {

        return $this->class44ml;
    }

    /**
     * Get the [class44fr] column value.
     *
     * @return double
     */
    public function getClass44fr()
    {

        return $this->class44fr;
    }

    /**
     * Get the [class45ml] column value.
     *
     * @return double
     */
    public function getClass45ml()
    {

        return $this->class45ml;
    }

    /**
     * Get the [class45fr] column value.
     *
     * @return double
     */
    public function getClass45fr()
    {

        return $this->class45fr;
    }

    /**
     * Get the [class46ml] column value.
     *
     * @return double
     */
    public function getClass46ml()
    {

        return $this->class46ml;
    }

    /**
     * Get the [class46fr] column value.
     *
     * @return double
     */
    public function getClass46fr()
    {

        return $this->class46fr;
    }

    /**
     * Get the [class47ml] column value.
     *
     * @return double
     */
    public function getClass47ml()
    {

        return $this->class47ml;
    }

    /**
     * Get the [class47fr] column value.
     *
     * @return double
     */
    public function getClass47fr()
    {

        return $this->class47fr;
    }

    /**
     * Get the [class48ml] column value.
     *
     * @return double
     */
    public function getClass48ml()
    {

        return $this->class48ml;
    }

    /**
     * Get the [class48fr] column value.
     *
     * @return double
     */
    public function getClass48fr()
    {

        return $this->class48fr;
    }

    /**
     * Get the [class49ml] column value.
     *
     * @return double
     */
    public function getClass49ml()
    {

        return $this->class49ml;
    }

    /**
     * Get the [class49fr] column value.
     *
     * @return double
     */
    public function getClass49fr()
    {

        return $this->class49fr;
    }

    /**
     * Get the [class50ml] column value.
     *
     * @return double
     */
    public function getClass50ml()
    {

        return $this->class50ml;
    }

    /**
     * Get the [class50fr] column value.
     *
     * @return double
     */
    public function getClass50fr()
    {

        return $this->class50fr;
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
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [lfcode] column.
     *
     * @param  int $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setLfcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lfcode !== $v) {
            $this->lfcode = $v;
            $this->modifiedColumns[] = PoplfdataPeer::LFCODE;
        }


        return $this;
    } // setLfcode()

    /**
     * Sets the value of [datesampled] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setDatesampled($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datesampled !== null || $dt !== null) {
            $currentDateAsString = ($this->datesampled !== null && $tmpDt = new DateTime($this->datesampled)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datesampled = $newDateAsString;
                $this->modifiedColumns[] = PoplfdataPeer::DATESAMPLED;
            }
        } // if either are not null


        return $this;
    } // setDatesampled()

    /**
     * Set the value of [yearofsampleold] column.
     *
     * @param  int $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setYearofsampleold($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yearofsampleold !== $v) {
            $this->yearofsampleold = $v;
            $this->modifiedColumns[] = PoplfdataPeer::YEAROFSAMPLEOLD;
        }


        return $this;
    } // setYearofsampleold()

    /**
     * Set the value of [yearofsample] column.
     *
     * @param  string $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setYearofsample($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->yearofsample !== $v) {
            $this->yearofsample = $v;
            $this->modifiedColumns[] = PoplfdataPeer::YEAROFSAMPLE;
        }


        return $this;
    } // setYearofsample()

    /**
     * Set the value of [individuals] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setIndividuals($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->individuals !== $v) {
            $this->individuals = $v;
            $this->modifiedColumns[] = PoplfdataPeer::INDIVIDUALS;
        }


        return $this;
    } // setIndividuals()

    /**
     * Set the value of [class1ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass1ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class1ml !== $v) {
            $this->class1ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS1ML;
        }


        return $this;
    } // setClass1ml()

    /**
     * Set the value of [class1fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass1fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class1fr !== $v) {
            $this->class1fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS1FR;
        }


        return $this;
    } // setClass1fr()

    /**
     * Set the value of [class2ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass2ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class2ml !== $v) {
            $this->class2ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS2ML;
        }


        return $this;
    } // setClass2ml()

    /**
     * Set the value of [class2fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass2fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class2fr !== $v) {
            $this->class2fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS2FR;
        }


        return $this;
    } // setClass2fr()

    /**
     * Set the value of [class3ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass3ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class3ml !== $v) {
            $this->class3ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS3ML;
        }


        return $this;
    } // setClass3ml()

    /**
     * Set the value of [class3fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass3fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class3fr !== $v) {
            $this->class3fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS3FR;
        }


        return $this;
    } // setClass3fr()

    /**
     * Set the value of [class4ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass4ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class4ml !== $v) {
            $this->class4ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS4ML;
        }


        return $this;
    } // setClass4ml()

    /**
     * Set the value of [class4fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass4fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class4fr !== $v) {
            $this->class4fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS4FR;
        }


        return $this;
    } // setClass4fr()

    /**
     * Set the value of [class5ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass5ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class5ml !== $v) {
            $this->class5ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS5ML;
        }


        return $this;
    } // setClass5ml()

    /**
     * Set the value of [class5fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass5fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class5fr !== $v) {
            $this->class5fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS5FR;
        }


        return $this;
    } // setClass5fr()

    /**
     * Set the value of [class6ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass6ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class6ml !== $v) {
            $this->class6ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS6ML;
        }


        return $this;
    } // setClass6ml()

    /**
     * Set the value of [class6fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass6fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class6fr !== $v) {
            $this->class6fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS6FR;
        }


        return $this;
    } // setClass6fr()

    /**
     * Set the value of [class7ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass7ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class7ml !== $v) {
            $this->class7ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS7ML;
        }


        return $this;
    } // setClass7ml()

    /**
     * Set the value of [class7fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass7fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class7fr !== $v) {
            $this->class7fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS7FR;
        }


        return $this;
    } // setClass7fr()

    /**
     * Set the value of [class8ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass8ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class8ml !== $v) {
            $this->class8ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS8ML;
        }


        return $this;
    } // setClass8ml()

    /**
     * Set the value of [class8fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass8fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class8fr !== $v) {
            $this->class8fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS8FR;
        }


        return $this;
    } // setClass8fr()

    /**
     * Set the value of [class9ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass9ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class9ml !== $v) {
            $this->class9ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS9ML;
        }


        return $this;
    } // setClass9ml()

    /**
     * Set the value of [class9fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass9fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class9fr !== $v) {
            $this->class9fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS9FR;
        }


        return $this;
    } // setClass9fr()

    /**
     * Set the value of [class10ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass10ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class10ml !== $v) {
            $this->class10ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS10ML;
        }


        return $this;
    } // setClass10ml()

    /**
     * Set the value of [class10fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass10fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class10fr !== $v) {
            $this->class10fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS10FR;
        }


        return $this;
    } // setClass10fr()

    /**
     * Set the value of [class11ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass11ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class11ml !== $v) {
            $this->class11ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS11ML;
        }


        return $this;
    } // setClass11ml()

    /**
     * Set the value of [class11fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass11fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class11fr !== $v) {
            $this->class11fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS11FR;
        }


        return $this;
    } // setClass11fr()

    /**
     * Set the value of [class12ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass12ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class12ml !== $v) {
            $this->class12ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS12ML;
        }


        return $this;
    } // setClass12ml()

    /**
     * Set the value of [class12fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass12fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class12fr !== $v) {
            $this->class12fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS12FR;
        }


        return $this;
    } // setClass12fr()

    /**
     * Set the value of [class13ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass13ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class13ml !== $v) {
            $this->class13ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS13ML;
        }


        return $this;
    } // setClass13ml()

    /**
     * Set the value of [class13fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass13fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class13fr !== $v) {
            $this->class13fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS13FR;
        }


        return $this;
    } // setClass13fr()

    /**
     * Set the value of [class14ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass14ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class14ml !== $v) {
            $this->class14ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS14ML;
        }


        return $this;
    } // setClass14ml()

    /**
     * Set the value of [class14fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass14fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class14fr !== $v) {
            $this->class14fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS14FR;
        }


        return $this;
    } // setClass14fr()

    /**
     * Set the value of [class15ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass15ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class15ml !== $v) {
            $this->class15ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS15ML;
        }


        return $this;
    } // setClass15ml()

    /**
     * Set the value of [class15fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass15fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class15fr !== $v) {
            $this->class15fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS15FR;
        }


        return $this;
    } // setClass15fr()

    /**
     * Set the value of [class16ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass16ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class16ml !== $v) {
            $this->class16ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS16ML;
        }


        return $this;
    } // setClass16ml()

    /**
     * Set the value of [class16fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass16fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class16fr !== $v) {
            $this->class16fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS16FR;
        }


        return $this;
    } // setClass16fr()

    /**
     * Set the value of [class17ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass17ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class17ml !== $v) {
            $this->class17ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS17ML;
        }


        return $this;
    } // setClass17ml()

    /**
     * Set the value of [class17fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass17fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class17fr !== $v) {
            $this->class17fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS17FR;
        }


        return $this;
    } // setClass17fr()

    /**
     * Set the value of [class18ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass18ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class18ml !== $v) {
            $this->class18ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS18ML;
        }


        return $this;
    } // setClass18ml()

    /**
     * Set the value of [class18fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass18fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class18fr !== $v) {
            $this->class18fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS18FR;
        }


        return $this;
    } // setClass18fr()

    /**
     * Set the value of [class19ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass19ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class19ml !== $v) {
            $this->class19ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS19ML;
        }


        return $this;
    } // setClass19ml()

    /**
     * Set the value of [class19fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass19fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class19fr !== $v) {
            $this->class19fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS19FR;
        }


        return $this;
    } // setClass19fr()

    /**
     * Set the value of [class20ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass20ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class20ml !== $v) {
            $this->class20ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS20ML;
        }


        return $this;
    } // setClass20ml()

    /**
     * Set the value of [class20fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass20fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class20fr !== $v) {
            $this->class20fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS20FR;
        }


        return $this;
    } // setClass20fr()

    /**
     * Set the value of [class21ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass21ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class21ml !== $v) {
            $this->class21ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS21ML;
        }


        return $this;
    } // setClass21ml()

    /**
     * Set the value of [class21fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass21fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class21fr !== $v) {
            $this->class21fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS21FR;
        }


        return $this;
    } // setClass21fr()

    /**
     * Set the value of [class22ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass22ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class22ml !== $v) {
            $this->class22ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS22ML;
        }


        return $this;
    } // setClass22ml()

    /**
     * Set the value of [class22fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass22fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class22fr !== $v) {
            $this->class22fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS22FR;
        }


        return $this;
    } // setClass22fr()

    /**
     * Set the value of [class23ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass23ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class23ml !== $v) {
            $this->class23ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS23ML;
        }


        return $this;
    } // setClass23ml()

    /**
     * Set the value of [class23fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass23fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class23fr !== $v) {
            $this->class23fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS23FR;
        }


        return $this;
    } // setClass23fr()

    /**
     * Set the value of [class24ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass24ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class24ml !== $v) {
            $this->class24ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS24ML;
        }


        return $this;
    } // setClass24ml()

    /**
     * Set the value of [class24fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass24fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class24fr !== $v) {
            $this->class24fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS24FR;
        }


        return $this;
    } // setClass24fr()

    /**
     * Set the value of [class25ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass25ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class25ml !== $v) {
            $this->class25ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS25ML;
        }


        return $this;
    } // setClass25ml()

    /**
     * Set the value of [class25fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass25fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class25fr !== $v) {
            $this->class25fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS25FR;
        }


        return $this;
    } // setClass25fr()

    /**
     * Set the value of [class26ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass26ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class26ml !== $v) {
            $this->class26ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS26ML;
        }


        return $this;
    } // setClass26ml()

    /**
     * Set the value of [class26fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass26fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class26fr !== $v) {
            $this->class26fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS26FR;
        }


        return $this;
    } // setClass26fr()

    /**
     * Set the value of [class27ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass27ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class27ml !== $v) {
            $this->class27ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS27ML;
        }


        return $this;
    } // setClass27ml()

    /**
     * Set the value of [class27fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass27fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class27fr !== $v) {
            $this->class27fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS27FR;
        }


        return $this;
    } // setClass27fr()

    /**
     * Set the value of [class28ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass28ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class28ml !== $v) {
            $this->class28ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS28ML;
        }


        return $this;
    } // setClass28ml()

    /**
     * Set the value of [class28fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass28fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class28fr !== $v) {
            $this->class28fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS28FR;
        }


        return $this;
    } // setClass28fr()

    /**
     * Set the value of [class29ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass29ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class29ml !== $v) {
            $this->class29ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS29ML;
        }


        return $this;
    } // setClass29ml()

    /**
     * Set the value of [class29fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass29fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class29fr !== $v) {
            $this->class29fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS29FR;
        }


        return $this;
    } // setClass29fr()

    /**
     * Set the value of [class30ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass30ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class30ml !== $v) {
            $this->class30ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS30ML;
        }


        return $this;
    } // setClass30ml()

    /**
     * Set the value of [class30fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass30fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class30fr !== $v) {
            $this->class30fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS30FR;
        }


        return $this;
    } // setClass30fr()

    /**
     * Set the value of [class31ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass31ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class31ml !== $v) {
            $this->class31ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS31ML;
        }


        return $this;
    } // setClass31ml()

    /**
     * Set the value of [class31fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass31fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class31fr !== $v) {
            $this->class31fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS31FR;
        }


        return $this;
    } // setClass31fr()

    /**
     * Set the value of [class32ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass32ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class32ml !== $v) {
            $this->class32ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS32ML;
        }


        return $this;
    } // setClass32ml()

    /**
     * Set the value of [class32fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass32fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class32fr !== $v) {
            $this->class32fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS32FR;
        }


        return $this;
    } // setClass32fr()

    /**
     * Set the value of [class33ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass33ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class33ml !== $v) {
            $this->class33ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS33ML;
        }


        return $this;
    } // setClass33ml()

    /**
     * Set the value of [class33fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass33fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class33fr !== $v) {
            $this->class33fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS33FR;
        }


        return $this;
    } // setClass33fr()

    /**
     * Set the value of [class34ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass34ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class34ml !== $v) {
            $this->class34ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS34ML;
        }


        return $this;
    } // setClass34ml()

    /**
     * Set the value of [class34fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass34fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class34fr !== $v) {
            $this->class34fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS34FR;
        }


        return $this;
    } // setClass34fr()

    /**
     * Set the value of [class35ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass35ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class35ml !== $v) {
            $this->class35ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS35ML;
        }


        return $this;
    } // setClass35ml()

    /**
     * Set the value of [class35fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass35fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class35fr !== $v) {
            $this->class35fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS35FR;
        }


        return $this;
    } // setClass35fr()

    /**
     * Set the value of [class36ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass36ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class36ml !== $v) {
            $this->class36ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS36ML;
        }


        return $this;
    } // setClass36ml()

    /**
     * Set the value of [class36fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass36fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class36fr !== $v) {
            $this->class36fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS36FR;
        }


        return $this;
    } // setClass36fr()

    /**
     * Set the value of [class37ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass37ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class37ml !== $v) {
            $this->class37ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS37ML;
        }


        return $this;
    } // setClass37ml()

    /**
     * Set the value of [class37fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass37fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class37fr !== $v) {
            $this->class37fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS37FR;
        }


        return $this;
    } // setClass37fr()

    /**
     * Set the value of [class38ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass38ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class38ml !== $v) {
            $this->class38ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS38ML;
        }


        return $this;
    } // setClass38ml()

    /**
     * Set the value of [class38fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass38fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class38fr !== $v) {
            $this->class38fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS38FR;
        }


        return $this;
    } // setClass38fr()

    /**
     * Set the value of [class39ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass39ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class39ml !== $v) {
            $this->class39ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS39ML;
        }


        return $this;
    } // setClass39ml()

    /**
     * Set the value of [class39fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass39fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class39fr !== $v) {
            $this->class39fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS39FR;
        }


        return $this;
    } // setClass39fr()

    /**
     * Set the value of [class40ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass40ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class40ml !== $v) {
            $this->class40ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS40ML;
        }


        return $this;
    } // setClass40ml()

    /**
     * Set the value of [class40fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass40fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class40fr !== $v) {
            $this->class40fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS40FR;
        }


        return $this;
    } // setClass40fr()

    /**
     * Set the value of [class41ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass41ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class41ml !== $v) {
            $this->class41ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS41ML;
        }


        return $this;
    } // setClass41ml()

    /**
     * Set the value of [class41fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass41fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class41fr !== $v) {
            $this->class41fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS41FR;
        }


        return $this;
    } // setClass41fr()

    /**
     * Set the value of [class42ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass42ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class42ml !== $v) {
            $this->class42ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS42ML;
        }


        return $this;
    } // setClass42ml()

    /**
     * Set the value of [class42fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass42fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class42fr !== $v) {
            $this->class42fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS42FR;
        }


        return $this;
    } // setClass42fr()

    /**
     * Set the value of [class43ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass43ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class43ml !== $v) {
            $this->class43ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS43ML;
        }


        return $this;
    } // setClass43ml()

    /**
     * Set the value of [class43fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass43fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class43fr !== $v) {
            $this->class43fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS43FR;
        }


        return $this;
    } // setClass43fr()

    /**
     * Set the value of [class44ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass44ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class44ml !== $v) {
            $this->class44ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS44ML;
        }


        return $this;
    } // setClass44ml()

    /**
     * Set the value of [class44fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass44fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class44fr !== $v) {
            $this->class44fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS44FR;
        }


        return $this;
    } // setClass44fr()

    /**
     * Set the value of [class45ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass45ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class45ml !== $v) {
            $this->class45ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS45ML;
        }


        return $this;
    } // setClass45ml()

    /**
     * Set the value of [class45fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass45fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class45fr !== $v) {
            $this->class45fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS45FR;
        }


        return $this;
    } // setClass45fr()

    /**
     * Set the value of [class46ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass46ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class46ml !== $v) {
            $this->class46ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS46ML;
        }


        return $this;
    } // setClass46ml()

    /**
     * Set the value of [class46fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass46fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class46fr !== $v) {
            $this->class46fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS46FR;
        }


        return $this;
    } // setClass46fr()

    /**
     * Set the value of [class47ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass47ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class47ml !== $v) {
            $this->class47ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS47ML;
        }


        return $this;
    } // setClass47ml()

    /**
     * Set the value of [class47fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass47fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class47fr !== $v) {
            $this->class47fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS47FR;
        }


        return $this;
    } // setClass47fr()

    /**
     * Set the value of [class48ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass48ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class48ml !== $v) {
            $this->class48ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS48ML;
        }


        return $this;
    } // setClass48ml()

    /**
     * Set the value of [class48fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass48fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class48fr !== $v) {
            $this->class48fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS48FR;
        }


        return $this;
    } // setClass48fr()

    /**
     * Set the value of [class49ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass49ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class49ml !== $v) {
            $this->class49ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS49ML;
        }


        return $this;
    } // setClass49ml()

    /**
     * Set the value of [class49fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass49fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class49fr !== $v) {
            $this->class49fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS49FR;
        }


        return $this;
    } // setClass49fr()

    /**
     * Set the value of [class50ml] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass50ml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class50ml !== $v) {
            $this->class50ml = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS50ML;
        }


        return $this;
    } // setClass50ml()

    /**
     * Set the value of [class50fr] column.
     *
     * @param  double $v new value
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setClass50fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->class50fr !== $v) {
            $this->class50fr = $v;
            $this->modifiedColumns[] = PoplfdataPeer::CLASS50FR;
        }


        return $this;
    } // setClass50fr()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Poplfdata The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = PoplfdataPeer::TS;
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
            $this->lfcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->datesampled = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->yearofsampleold = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->yearofsample = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->individuals = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->class1ml = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->class1fr = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->class2ml = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->class2fr = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->class3ml = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->class3fr = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->class4ml = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->class4fr = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->class5ml = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->class5fr = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->class6ml = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->class6fr = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->class7ml = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->class7fr = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->class8ml = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->class8fr = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->class9ml = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->class9fr = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->class10ml = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->class10fr = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->class11ml = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->class11fr = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->class12ml = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->class12fr = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->class13ml = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->class13fr = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->class14ml = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->class14fr = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->class15ml = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->class15fr = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->class16ml = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->class16fr = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->class17ml = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->class17fr = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->class18ml = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->class18fr = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->class19ml = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->class19fr = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->class20ml = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->class20fr = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->class21ml = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->class21fr = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->class22ml = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->class22fr = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->class23ml = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->class23fr = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->class24ml = ($row[$startcol + 52] !== null) ? (double) $row[$startcol + 52] : null;
            $this->class24fr = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->class25ml = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->class25fr = ($row[$startcol + 55] !== null) ? (double) $row[$startcol + 55] : null;
            $this->class26ml = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->class26fr = ($row[$startcol + 57] !== null) ? (double) $row[$startcol + 57] : null;
            $this->class27ml = ($row[$startcol + 58] !== null) ? (double) $row[$startcol + 58] : null;
            $this->class27fr = ($row[$startcol + 59] !== null) ? (double) $row[$startcol + 59] : null;
            $this->class28ml = ($row[$startcol + 60] !== null) ? (double) $row[$startcol + 60] : null;
            $this->class28fr = ($row[$startcol + 61] !== null) ? (double) $row[$startcol + 61] : null;
            $this->class29ml = ($row[$startcol + 62] !== null) ? (double) $row[$startcol + 62] : null;
            $this->class29fr = ($row[$startcol + 63] !== null) ? (double) $row[$startcol + 63] : null;
            $this->class30ml = ($row[$startcol + 64] !== null) ? (double) $row[$startcol + 64] : null;
            $this->class30fr = ($row[$startcol + 65] !== null) ? (double) $row[$startcol + 65] : null;
            $this->class31ml = ($row[$startcol + 66] !== null) ? (double) $row[$startcol + 66] : null;
            $this->class31fr = ($row[$startcol + 67] !== null) ? (double) $row[$startcol + 67] : null;
            $this->class32ml = ($row[$startcol + 68] !== null) ? (double) $row[$startcol + 68] : null;
            $this->class32fr = ($row[$startcol + 69] !== null) ? (double) $row[$startcol + 69] : null;
            $this->class33ml = ($row[$startcol + 70] !== null) ? (double) $row[$startcol + 70] : null;
            $this->class33fr = ($row[$startcol + 71] !== null) ? (double) $row[$startcol + 71] : null;
            $this->class34ml = ($row[$startcol + 72] !== null) ? (double) $row[$startcol + 72] : null;
            $this->class34fr = ($row[$startcol + 73] !== null) ? (double) $row[$startcol + 73] : null;
            $this->class35ml = ($row[$startcol + 74] !== null) ? (double) $row[$startcol + 74] : null;
            $this->class35fr = ($row[$startcol + 75] !== null) ? (double) $row[$startcol + 75] : null;
            $this->class36ml = ($row[$startcol + 76] !== null) ? (double) $row[$startcol + 76] : null;
            $this->class36fr = ($row[$startcol + 77] !== null) ? (double) $row[$startcol + 77] : null;
            $this->class37ml = ($row[$startcol + 78] !== null) ? (double) $row[$startcol + 78] : null;
            $this->class37fr = ($row[$startcol + 79] !== null) ? (double) $row[$startcol + 79] : null;
            $this->class38ml = ($row[$startcol + 80] !== null) ? (double) $row[$startcol + 80] : null;
            $this->class38fr = ($row[$startcol + 81] !== null) ? (double) $row[$startcol + 81] : null;
            $this->class39ml = ($row[$startcol + 82] !== null) ? (double) $row[$startcol + 82] : null;
            $this->class39fr = ($row[$startcol + 83] !== null) ? (double) $row[$startcol + 83] : null;
            $this->class40ml = ($row[$startcol + 84] !== null) ? (double) $row[$startcol + 84] : null;
            $this->class40fr = ($row[$startcol + 85] !== null) ? (double) $row[$startcol + 85] : null;
            $this->class41ml = ($row[$startcol + 86] !== null) ? (double) $row[$startcol + 86] : null;
            $this->class41fr = ($row[$startcol + 87] !== null) ? (double) $row[$startcol + 87] : null;
            $this->class42ml = ($row[$startcol + 88] !== null) ? (double) $row[$startcol + 88] : null;
            $this->class42fr = ($row[$startcol + 89] !== null) ? (double) $row[$startcol + 89] : null;
            $this->class43ml = ($row[$startcol + 90] !== null) ? (double) $row[$startcol + 90] : null;
            $this->class43fr = ($row[$startcol + 91] !== null) ? (double) $row[$startcol + 91] : null;
            $this->class44ml = ($row[$startcol + 92] !== null) ? (double) $row[$startcol + 92] : null;
            $this->class44fr = ($row[$startcol + 93] !== null) ? (double) $row[$startcol + 93] : null;
            $this->class45ml = ($row[$startcol + 94] !== null) ? (double) $row[$startcol + 94] : null;
            $this->class45fr = ($row[$startcol + 95] !== null) ? (double) $row[$startcol + 95] : null;
            $this->class46ml = ($row[$startcol + 96] !== null) ? (double) $row[$startcol + 96] : null;
            $this->class46fr = ($row[$startcol + 97] !== null) ? (double) $row[$startcol + 97] : null;
            $this->class47ml = ($row[$startcol + 98] !== null) ? (double) $row[$startcol + 98] : null;
            $this->class47fr = ($row[$startcol + 99] !== null) ? (double) $row[$startcol + 99] : null;
            $this->class48ml = ($row[$startcol + 100] !== null) ? (double) $row[$startcol + 100] : null;
            $this->class48fr = ($row[$startcol + 101] !== null) ? (double) $row[$startcol + 101] : null;
            $this->class49ml = ($row[$startcol + 102] !== null) ? (double) $row[$startcol + 102] : null;
            $this->class49fr = ($row[$startcol + 103] !== null) ? (double) $row[$startcol + 103] : null;
            $this->class50ml = ($row[$startcol + 104] !== null) ? (double) $row[$startcol + 104] : null;
            $this->class50fr = ($row[$startcol + 105] !== null) ? (double) $row[$startcol + 105] : null;
            $this->ts = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 107; // 107 = PoplfdataPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Poplfdata object", $e);
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
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PoplfdataPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PoplfdataQuery::create()
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
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PoplfdataPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PoplfdataPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PoplfdataPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PoplfdataPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(PoplfdataPeer::LFCODE)) {
            $modifiedColumns[':p' . $index++]  = '`LFCode`';
        }
        if ($this->isColumnModified(PoplfdataPeer::DATESAMPLED)) {
            $modifiedColumns[':p' . $index++]  = '`DateSampled`';
        }
        if ($this->isColumnModified(PoplfdataPeer::YEAROFSAMPLEOLD)) {
            $modifiedColumns[':p' . $index++]  = '`YearofSampleOld`';
        }
        if ($this->isColumnModified(PoplfdataPeer::YEAROFSAMPLE)) {
            $modifiedColumns[':p' . $index++]  = '`YearofSample`';
        }
        if ($this->isColumnModified(PoplfdataPeer::INDIVIDUALS)) {
            $modifiedColumns[':p' . $index++]  = '`Individuals`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS1ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class1ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS1FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class1FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS2ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class2ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS2FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class2FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS3ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class3ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS3FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class3FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS4ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class4ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS4FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class4FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS5ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class5ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS5FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class5FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS6ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class6ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS6FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class6FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS7ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class7ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS7FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class7FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS8ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class8ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS8FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class8FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS9ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class9ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS9FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class9FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS10ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class10ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS10FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class10FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS11ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class11ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS11FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class11FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS12ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class12ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS12FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class12FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS13ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class13ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS13FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class13FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS14ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class14ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS14FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class14FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS15ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class15ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS15FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class15FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS16ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class16ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS16FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class16FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS17ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class17ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS17FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class17FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS18ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class18ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS18FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class18FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS19ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class19ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS19FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class19FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS20ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class20ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS20FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class20FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS21ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class21ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS21FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class21FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS22ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class22ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS22FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class22FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS23ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class23ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS23FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class23FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS24ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class24ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS24FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class24FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS25ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class25ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS25FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class25FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS26ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class26ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS26FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class26FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS27ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class27ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS27FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class27FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS28ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class28ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS28FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class28FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS29ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class29ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS29FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class29FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS30ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class30ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS30FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class30FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS31ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class31ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS31FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class31FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS32ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class32ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS32FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class32FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS33ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class33ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS33FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class33FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS34ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class34ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS34FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class34FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS35ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class35ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS35FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class35FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS36ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class36ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS36FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class36FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS37ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class37ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS37FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class37FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS38ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class38ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS38FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class38FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS39ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class39ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS39FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class39FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS40ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class40ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS40FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class40FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS41ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class41ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS41FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class41FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS42ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class42ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS42FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class42FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS43ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class43ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS43FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class43FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS44ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class44ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS44FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class44FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS45ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class45ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS45FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class45FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS46ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class46ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS46FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class46FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS47ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class47ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS47FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class47FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS48ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class48ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS48FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class48FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS49ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class49ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS49FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class49FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS50ML)) {
            $modifiedColumns[':p' . $index++]  = '`Class50ML`';
        }
        if ($this->isColumnModified(PoplfdataPeer::CLASS50FR)) {
            $modifiedColumns[':p' . $index++]  = '`Class50FR`';
        }
        if ($this->isColumnModified(PoplfdataPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `poplfdata` (%s) VALUES (%s)',
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
                    case '`LFCode`':
                        $stmt->bindValue($identifier, $this->lfcode, PDO::PARAM_INT);
                        break;
                    case '`DateSampled`':
                        $stmt->bindValue($identifier, $this->datesampled, PDO::PARAM_STR);
                        break;
                    case '`YearofSampleOld`':
                        $stmt->bindValue($identifier, $this->yearofsampleold, PDO::PARAM_INT);
                        break;
                    case '`YearofSample`':
                        $stmt->bindValue($identifier, $this->yearofsample, PDO::PARAM_STR);
                        break;
                    case '`Individuals`':
                        $stmt->bindValue($identifier, $this->individuals, PDO::PARAM_STR);
                        break;
                    case '`Class1ML`':
                        $stmt->bindValue($identifier, $this->class1ml, PDO::PARAM_STR);
                        break;
                    case '`Class1FR`':
                        $stmt->bindValue($identifier, $this->class1fr, PDO::PARAM_STR);
                        break;
                    case '`Class2ML`':
                        $stmt->bindValue($identifier, $this->class2ml, PDO::PARAM_STR);
                        break;
                    case '`Class2FR`':
                        $stmt->bindValue($identifier, $this->class2fr, PDO::PARAM_STR);
                        break;
                    case '`Class3ML`':
                        $stmt->bindValue($identifier, $this->class3ml, PDO::PARAM_STR);
                        break;
                    case '`Class3FR`':
                        $stmt->bindValue($identifier, $this->class3fr, PDO::PARAM_STR);
                        break;
                    case '`Class4ML`':
                        $stmt->bindValue($identifier, $this->class4ml, PDO::PARAM_STR);
                        break;
                    case '`Class4FR`':
                        $stmt->bindValue($identifier, $this->class4fr, PDO::PARAM_STR);
                        break;
                    case '`Class5ML`':
                        $stmt->bindValue($identifier, $this->class5ml, PDO::PARAM_STR);
                        break;
                    case '`Class5FR`':
                        $stmt->bindValue($identifier, $this->class5fr, PDO::PARAM_STR);
                        break;
                    case '`Class6ML`':
                        $stmt->bindValue($identifier, $this->class6ml, PDO::PARAM_STR);
                        break;
                    case '`Class6FR`':
                        $stmt->bindValue($identifier, $this->class6fr, PDO::PARAM_STR);
                        break;
                    case '`Class7ML`':
                        $stmt->bindValue($identifier, $this->class7ml, PDO::PARAM_STR);
                        break;
                    case '`Class7FR`':
                        $stmt->bindValue($identifier, $this->class7fr, PDO::PARAM_STR);
                        break;
                    case '`Class8ML`':
                        $stmt->bindValue($identifier, $this->class8ml, PDO::PARAM_STR);
                        break;
                    case '`Class8FR`':
                        $stmt->bindValue($identifier, $this->class8fr, PDO::PARAM_STR);
                        break;
                    case '`Class9ML`':
                        $stmt->bindValue($identifier, $this->class9ml, PDO::PARAM_STR);
                        break;
                    case '`Class9FR`':
                        $stmt->bindValue($identifier, $this->class9fr, PDO::PARAM_STR);
                        break;
                    case '`Class10ML`':
                        $stmt->bindValue($identifier, $this->class10ml, PDO::PARAM_STR);
                        break;
                    case '`Class10FR`':
                        $stmt->bindValue($identifier, $this->class10fr, PDO::PARAM_STR);
                        break;
                    case '`Class11ML`':
                        $stmt->bindValue($identifier, $this->class11ml, PDO::PARAM_STR);
                        break;
                    case '`Class11FR`':
                        $stmt->bindValue($identifier, $this->class11fr, PDO::PARAM_STR);
                        break;
                    case '`Class12ML`':
                        $stmt->bindValue($identifier, $this->class12ml, PDO::PARAM_STR);
                        break;
                    case '`Class12FR`':
                        $stmt->bindValue($identifier, $this->class12fr, PDO::PARAM_STR);
                        break;
                    case '`Class13ML`':
                        $stmt->bindValue($identifier, $this->class13ml, PDO::PARAM_STR);
                        break;
                    case '`Class13FR`':
                        $stmt->bindValue($identifier, $this->class13fr, PDO::PARAM_STR);
                        break;
                    case '`Class14ML`':
                        $stmt->bindValue($identifier, $this->class14ml, PDO::PARAM_STR);
                        break;
                    case '`Class14FR`':
                        $stmt->bindValue($identifier, $this->class14fr, PDO::PARAM_STR);
                        break;
                    case '`Class15ML`':
                        $stmt->bindValue($identifier, $this->class15ml, PDO::PARAM_STR);
                        break;
                    case '`Class15FR`':
                        $stmt->bindValue($identifier, $this->class15fr, PDO::PARAM_STR);
                        break;
                    case '`Class16ML`':
                        $stmt->bindValue($identifier, $this->class16ml, PDO::PARAM_STR);
                        break;
                    case '`Class16FR`':
                        $stmt->bindValue($identifier, $this->class16fr, PDO::PARAM_STR);
                        break;
                    case '`Class17ML`':
                        $stmt->bindValue($identifier, $this->class17ml, PDO::PARAM_STR);
                        break;
                    case '`Class17FR`':
                        $stmt->bindValue($identifier, $this->class17fr, PDO::PARAM_STR);
                        break;
                    case '`Class18ML`':
                        $stmt->bindValue($identifier, $this->class18ml, PDO::PARAM_STR);
                        break;
                    case '`Class18FR`':
                        $stmt->bindValue($identifier, $this->class18fr, PDO::PARAM_STR);
                        break;
                    case '`Class19ML`':
                        $stmt->bindValue($identifier, $this->class19ml, PDO::PARAM_STR);
                        break;
                    case '`Class19FR`':
                        $stmt->bindValue($identifier, $this->class19fr, PDO::PARAM_STR);
                        break;
                    case '`Class20ML`':
                        $stmt->bindValue($identifier, $this->class20ml, PDO::PARAM_STR);
                        break;
                    case '`Class20FR`':
                        $stmt->bindValue($identifier, $this->class20fr, PDO::PARAM_STR);
                        break;
                    case '`Class21ML`':
                        $stmt->bindValue($identifier, $this->class21ml, PDO::PARAM_STR);
                        break;
                    case '`Class21FR`':
                        $stmt->bindValue($identifier, $this->class21fr, PDO::PARAM_STR);
                        break;
                    case '`Class22ML`':
                        $stmt->bindValue($identifier, $this->class22ml, PDO::PARAM_STR);
                        break;
                    case '`Class22FR`':
                        $stmt->bindValue($identifier, $this->class22fr, PDO::PARAM_STR);
                        break;
                    case '`Class23ML`':
                        $stmt->bindValue($identifier, $this->class23ml, PDO::PARAM_STR);
                        break;
                    case '`Class23FR`':
                        $stmt->bindValue($identifier, $this->class23fr, PDO::PARAM_STR);
                        break;
                    case '`Class24ML`':
                        $stmt->bindValue($identifier, $this->class24ml, PDO::PARAM_STR);
                        break;
                    case '`Class24FR`':
                        $stmt->bindValue($identifier, $this->class24fr, PDO::PARAM_STR);
                        break;
                    case '`Class25ML`':
                        $stmt->bindValue($identifier, $this->class25ml, PDO::PARAM_STR);
                        break;
                    case '`Class25FR`':
                        $stmt->bindValue($identifier, $this->class25fr, PDO::PARAM_STR);
                        break;
                    case '`Class26ML`':
                        $stmt->bindValue($identifier, $this->class26ml, PDO::PARAM_STR);
                        break;
                    case '`Class26FR`':
                        $stmt->bindValue($identifier, $this->class26fr, PDO::PARAM_STR);
                        break;
                    case '`Class27ML`':
                        $stmt->bindValue($identifier, $this->class27ml, PDO::PARAM_STR);
                        break;
                    case '`Class27FR`':
                        $stmt->bindValue($identifier, $this->class27fr, PDO::PARAM_STR);
                        break;
                    case '`Class28ML`':
                        $stmt->bindValue($identifier, $this->class28ml, PDO::PARAM_STR);
                        break;
                    case '`Class28FR`':
                        $stmt->bindValue($identifier, $this->class28fr, PDO::PARAM_STR);
                        break;
                    case '`Class29ML`':
                        $stmt->bindValue($identifier, $this->class29ml, PDO::PARAM_STR);
                        break;
                    case '`Class29FR`':
                        $stmt->bindValue($identifier, $this->class29fr, PDO::PARAM_STR);
                        break;
                    case '`Class30ML`':
                        $stmt->bindValue($identifier, $this->class30ml, PDO::PARAM_STR);
                        break;
                    case '`Class30FR`':
                        $stmt->bindValue($identifier, $this->class30fr, PDO::PARAM_STR);
                        break;
                    case '`Class31ML`':
                        $stmt->bindValue($identifier, $this->class31ml, PDO::PARAM_STR);
                        break;
                    case '`Class31FR`':
                        $stmt->bindValue($identifier, $this->class31fr, PDO::PARAM_STR);
                        break;
                    case '`Class32ML`':
                        $stmt->bindValue($identifier, $this->class32ml, PDO::PARAM_STR);
                        break;
                    case '`Class32FR`':
                        $stmt->bindValue($identifier, $this->class32fr, PDO::PARAM_STR);
                        break;
                    case '`Class33ML`':
                        $stmt->bindValue($identifier, $this->class33ml, PDO::PARAM_STR);
                        break;
                    case '`Class33FR`':
                        $stmt->bindValue($identifier, $this->class33fr, PDO::PARAM_STR);
                        break;
                    case '`Class34ML`':
                        $stmt->bindValue($identifier, $this->class34ml, PDO::PARAM_STR);
                        break;
                    case '`Class34FR`':
                        $stmt->bindValue($identifier, $this->class34fr, PDO::PARAM_STR);
                        break;
                    case '`Class35ML`':
                        $stmt->bindValue($identifier, $this->class35ml, PDO::PARAM_STR);
                        break;
                    case '`Class35FR`':
                        $stmt->bindValue($identifier, $this->class35fr, PDO::PARAM_STR);
                        break;
                    case '`Class36ML`':
                        $stmt->bindValue($identifier, $this->class36ml, PDO::PARAM_STR);
                        break;
                    case '`Class36FR`':
                        $stmt->bindValue($identifier, $this->class36fr, PDO::PARAM_STR);
                        break;
                    case '`Class37ML`':
                        $stmt->bindValue($identifier, $this->class37ml, PDO::PARAM_STR);
                        break;
                    case '`Class37FR`':
                        $stmt->bindValue($identifier, $this->class37fr, PDO::PARAM_STR);
                        break;
                    case '`Class38ML`':
                        $stmt->bindValue($identifier, $this->class38ml, PDO::PARAM_STR);
                        break;
                    case '`Class38FR`':
                        $stmt->bindValue($identifier, $this->class38fr, PDO::PARAM_STR);
                        break;
                    case '`Class39ML`':
                        $stmt->bindValue($identifier, $this->class39ml, PDO::PARAM_STR);
                        break;
                    case '`Class39FR`':
                        $stmt->bindValue($identifier, $this->class39fr, PDO::PARAM_STR);
                        break;
                    case '`Class40ML`':
                        $stmt->bindValue($identifier, $this->class40ml, PDO::PARAM_STR);
                        break;
                    case '`Class40FR`':
                        $stmt->bindValue($identifier, $this->class40fr, PDO::PARAM_STR);
                        break;
                    case '`Class41ML`':
                        $stmt->bindValue($identifier, $this->class41ml, PDO::PARAM_STR);
                        break;
                    case '`Class41FR`':
                        $stmt->bindValue($identifier, $this->class41fr, PDO::PARAM_STR);
                        break;
                    case '`Class42ML`':
                        $stmt->bindValue($identifier, $this->class42ml, PDO::PARAM_STR);
                        break;
                    case '`Class42FR`':
                        $stmt->bindValue($identifier, $this->class42fr, PDO::PARAM_STR);
                        break;
                    case '`Class43ML`':
                        $stmt->bindValue($identifier, $this->class43ml, PDO::PARAM_STR);
                        break;
                    case '`Class43FR`':
                        $stmt->bindValue($identifier, $this->class43fr, PDO::PARAM_STR);
                        break;
                    case '`Class44ML`':
                        $stmt->bindValue($identifier, $this->class44ml, PDO::PARAM_STR);
                        break;
                    case '`Class44FR`':
                        $stmt->bindValue($identifier, $this->class44fr, PDO::PARAM_STR);
                        break;
                    case '`Class45ML`':
                        $stmt->bindValue($identifier, $this->class45ml, PDO::PARAM_STR);
                        break;
                    case '`Class45FR`':
                        $stmt->bindValue($identifier, $this->class45fr, PDO::PARAM_STR);
                        break;
                    case '`Class46ML`':
                        $stmt->bindValue($identifier, $this->class46ml, PDO::PARAM_STR);
                        break;
                    case '`Class46FR`':
                        $stmt->bindValue($identifier, $this->class46fr, PDO::PARAM_STR);
                        break;
                    case '`Class47ML`':
                        $stmt->bindValue($identifier, $this->class47ml, PDO::PARAM_STR);
                        break;
                    case '`Class47FR`':
                        $stmt->bindValue($identifier, $this->class47fr, PDO::PARAM_STR);
                        break;
                    case '`Class48ML`':
                        $stmt->bindValue($identifier, $this->class48ml, PDO::PARAM_STR);
                        break;
                    case '`Class48FR`':
                        $stmt->bindValue($identifier, $this->class48fr, PDO::PARAM_STR);
                        break;
                    case '`Class49ML`':
                        $stmt->bindValue($identifier, $this->class49ml, PDO::PARAM_STR);
                        break;
                    case '`Class49FR`':
                        $stmt->bindValue($identifier, $this->class49fr, PDO::PARAM_STR);
                        break;
                    case '`Class50ML`':
                        $stmt->bindValue($identifier, $this->class50ml, PDO::PARAM_STR);
                        break;
                    case '`Class50FR`':
                        $stmt->bindValue($identifier, $this->class50fr, PDO::PARAM_STR);
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


            if (($retval = PoplfdataPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PoplfdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLfcode();
                break;
            case 2:
                return $this->getDatesampled();
                break;
            case 3:
                return $this->getYearofsampleold();
                break;
            case 4:
                return $this->getYearofsample();
                break;
            case 5:
                return $this->getIndividuals();
                break;
            case 6:
                return $this->getClass1ml();
                break;
            case 7:
                return $this->getClass1fr();
                break;
            case 8:
                return $this->getClass2ml();
                break;
            case 9:
                return $this->getClass2fr();
                break;
            case 10:
                return $this->getClass3ml();
                break;
            case 11:
                return $this->getClass3fr();
                break;
            case 12:
                return $this->getClass4ml();
                break;
            case 13:
                return $this->getClass4fr();
                break;
            case 14:
                return $this->getClass5ml();
                break;
            case 15:
                return $this->getClass5fr();
                break;
            case 16:
                return $this->getClass6ml();
                break;
            case 17:
                return $this->getClass6fr();
                break;
            case 18:
                return $this->getClass7ml();
                break;
            case 19:
                return $this->getClass7fr();
                break;
            case 20:
                return $this->getClass8ml();
                break;
            case 21:
                return $this->getClass8fr();
                break;
            case 22:
                return $this->getClass9ml();
                break;
            case 23:
                return $this->getClass9fr();
                break;
            case 24:
                return $this->getClass10ml();
                break;
            case 25:
                return $this->getClass10fr();
                break;
            case 26:
                return $this->getClass11ml();
                break;
            case 27:
                return $this->getClass11fr();
                break;
            case 28:
                return $this->getClass12ml();
                break;
            case 29:
                return $this->getClass12fr();
                break;
            case 30:
                return $this->getClass13ml();
                break;
            case 31:
                return $this->getClass13fr();
                break;
            case 32:
                return $this->getClass14ml();
                break;
            case 33:
                return $this->getClass14fr();
                break;
            case 34:
                return $this->getClass15ml();
                break;
            case 35:
                return $this->getClass15fr();
                break;
            case 36:
                return $this->getClass16ml();
                break;
            case 37:
                return $this->getClass16fr();
                break;
            case 38:
                return $this->getClass17ml();
                break;
            case 39:
                return $this->getClass17fr();
                break;
            case 40:
                return $this->getClass18ml();
                break;
            case 41:
                return $this->getClass18fr();
                break;
            case 42:
                return $this->getClass19ml();
                break;
            case 43:
                return $this->getClass19fr();
                break;
            case 44:
                return $this->getClass20ml();
                break;
            case 45:
                return $this->getClass20fr();
                break;
            case 46:
                return $this->getClass21ml();
                break;
            case 47:
                return $this->getClass21fr();
                break;
            case 48:
                return $this->getClass22ml();
                break;
            case 49:
                return $this->getClass22fr();
                break;
            case 50:
                return $this->getClass23ml();
                break;
            case 51:
                return $this->getClass23fr();
                break;
            case 52:
                return $this->getClass24ml();
                break;
            case 53:
                return $this->getClass24fr();
                break;
            case 54:
                return $this->getClass25ml();
                break;
            case 55:
                return $this->getClass25fr();
                break;
            case 56:
                return $this->getClass26ml();
                break;
            case 57:
                return $this->getClass26fr();
                break;
            case 58:
                return $this->getClass27ml();
                break;
            case 59:
                return $this->getClass27fr();
                break;
            case 60:
                return $this->getClass28ml();
                break;
            case 61:
                return $this->getClass28fr();
                break;
            case 62:
                return $this->getClass29ml();
                break;
            case 63:
                return $this->getClass29fr();
                break;
            case 64:
                return $this->getClass30ml();
                break;
            case 65:
                return $this->getClass30fr();
                break;
            case 66:
                return $this->getClass31ml();
                break;
            case 67:
                return $this->getClass31fr();
                break;
            case 68:
                return $this->getClass32ml();
                break;
            case 69:
                return $this->getClass32fr();
                break;
            case 70:
                return $this->getClass33ml();
                break;
            case 71:
                return $this->getClass33fr();
                break;
            case 72:
                return $this->getClass34ml();
                break;
            case 73:
                return $this->getClass34fr();
                break;
            case 74:
                return $this->getClass35ml();
                break;
            case 75:
                return $this->getClass35fr();
                break;
            case 76:
                return $this->getClass36ml();
                break;
            case 77:
                return $this->getClass36fr();
                break;
            case 78:
                return $this->getClass37ml();
                break;
            case 79:
                return $this->getClass37fr();
                break;
            case 80:
                return $this->getClass38ml();
                break;
            case 81:
                return $this->getClass38fr();
                break;
            case 82:
                return $this->getClass39ml();
                break;
            case 83:
                return $this->getClass39fr();
                break;
            case 84:
                return $this->getClass40ml();
                break;
            case 85:
                return $this->getClass40fr();
                break;
            case 86:
                return $this->getClass41ml();
                break;
            case 87:
                return $this->getClass41fr();
                break;
            case 88:
                return $this->getClass42ml();
                break;
            case 89:
                return $this->getClass42fr();
                break;
            case 90:
                return $this->getClass43ml();
                break;
            case 91:
                return $this->getClass43fr();
                break;
            case 92:
                return $this->getClass44ml();
                break;
            case 93:
                return $this->getClass44fr();
                break;
            case 94:
                return $this->getClass45ml();
                break;
            case 95:
                return $this->getClass45fr();
                break;
            case 96:
                return $this->getClass46ml();
                break;
            case 97:
                return $this->getClass46fr();
                break;
            case 98:
                return $this->getClass47ml();
                break;
            case 99:
                return $this->getClass47fr();
                break;
            case 100:
                return $this->getClass48ml();
                break;
            case 101:
                return $this->getClass48fr();
                break;
            case 102:
                return $this->getClass49ml();
                break;
            case 103:
                return $this->getClass49fr();
                break;
            case 104:
                return $this->getClass50ml();
                break;
            case 105:
                return $this->getClass50fr();
                break;
            case 106:
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
        if (isset($alreadyDumpedObjects['Poplfdata'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Poplfdata'][$this->getPrimaryKey()] = true;
        $keys = PoplfdataPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getLfcode(),
            $keys[2] => $this->getDatesampled(),
            $keys[3] => $this->getYearofsampleold(),
            $keys[4] => $this->getYearofsample(),
            $keys[5] => $this->getIndividuals(),
            $keys[6] => $this->getClass1ml(),
            $keys[7] => $this->getClass1fr(),
            $keys[8] => $this->getClass2ml(),
            $keys[9] => $this->getClass2fr(),
            $keys[10] => $this->getClass3ml(),
            $keys[11] => $this->getClass3fr(),
            $keys[12] => $this->getClass4ml(),
            $keys[13] => $this->getClass4fr(),
            $keys[14] => $this->getClass5ml(),
            $keys[15] => $this->getClass5fr(),
            $keys[16] => $this->getClass6ml(),
            $keys[17] => $this->getClass6fr(),
            $keys[18] => $this->getClass7ml(),
            $keys[19] => $this->getClass7fr(),
            $keys[20] => $this->getClass8ml(),
            $keys[21] => $this->getClass8fr(),
            $keys[22] => $this->getClass9ml(),
            $keys[23] => $this->getClass9fr(),
            $keys[24] => $this->getClass10ml(),
            $keys[25] => $this->getClass10fr(),
            $keys[26] => $this->getClass11ml(),
            $keys[27] => $this->getClass11fr(),
            $keys[28] => $this->getClass12ml(),
            $keys[29] => $this->getClass12fr(),
            $keys[30] => $this->getClass13ml(),
            $keys[31] => $this->getClass13fr(),
            $keys[32] => $this->getClass14ml(),
            $keys[33] => $this->getClass14fr(),
            $keys[34] => $this->getClass15ml(),
            $keys[35] => $this->getClass15fr(),
            $keys[36] => $this->getClass16ml(),
            $keys[37] => $this->getClass16fr(),
            $keys[38] => $this->getClass17ml(),
            $keys[39] => $this->getClass17fr(),
            $keys[40] => $this->getClass18ml(),
            $keys[41] => $this->getClass18fr(),
            $keys[42] => $this->getClass19ml(),
            $keys[43] => $this->getClass19fr(),
            $keys[44] => $this->getClass20ml(),
            $keys[45] => $this->getClass20fr(),
            $keys[46] => $this->getClass21ml(),
            $keys[47] => $this->getClass21fr(),
            $keys[48] => $this->getClass22ml(),
            $keys[49] => $this->getClass22fr(),
            $keys[50] => $this->getClass23ml(),
            $keys[51] => $this->getClass23fr(),
            $keys[52] => $this->getClass24ml(),
            $keys[53] => $this->getClass24fr(),
            $keys[54] => $this->getClass25ml(),
            $keys[55] => $this->getClass25fr(),
            $keys[56] => $this->getClass26ml(),
            $keys[57] => $this->getClass26fr(),
            $keys[58] => $this->getClass27ml(),
            $keys[59] => $this->getClass27fr(),
            $keys[60] => $this->getClass28ml(),
            $keys[61] => $this->getClass28fr(),
            $keys[62] => $this->getClass29ml(),
            $keys[63] => $this->getClass29fr(),
            $keys[64] => $this->getClass30ml(),
            $keys[65] => $this->getClass30fr(),
            $keys[66] => $this->getClass31ml(),
            $keys[67] => $this->getClass31fr(),
            $keys[68] => $this->getClass32ml(),
            $keys[69] => $this->getClass32fr(),
            $keys[70] => $this->getClass33ml(),
            $keys[71] => $this->getClass33fr(),
            $keys[72] => $this->getClass34ml(),
            $keys[73] => $this->getClass34fr(),
            $keys[74] => $this->getClass35ml(),
            $keys[75] => $this->getClass35fr(),
            $keys[76] => $this->getClass36ml(),
            $keys[77] => $this->getClass36fr(),
            $keys[78] => $this->getClass37ml(),
            $keys[79] => $this->getClass37fr(),
            $keys[80] => $this->getClass38ml(),
            $keys[81] => $this->getClass38fr(),
            $keys[82] => $this->getClass39ml(),
            $keys[83] => $this->getClass39fr(),
            $keys[84] => $this->getClass40ml(),
            $keys[85] => $this->getClass40fr(),
            $keys[86] => $this->getClass41ml(),
            $keys[87] => $this->getClass41fr(),
            $keys[88] => $this->getClass42ml(),
            $keys[89] => $this->getClass42fr(),
            $keys[90] => $this->getClass43ml(),
            $keys[91] => $this->getClass43fr(),
            $keys[92] => $this->getClass44ml(),
            $keys[93] => $this->getClass44fr(),
            $keys[94] => $this->getClass45ml(),
            $keys[95] => $this->getClass45fr(),
            $keys[96] => $this->getClass46ml(),
            $keys[97] => $this->getClass46fr(),
            $keys[98] => $this->getClass47ml(),
            $keys[99] => $this->getClass47fr(),
            $keys[100] => $this->getClass48ml(),
            $keys[101] => $this->getClass48fr(),
            $keys[102] => $this->getClass49ml(),
            $keys[103] => $this->getClass49fr(),
            $keys[104] => $this->getClass50ml(),
            $keys[105] => $this->getClass50fr(),
            $keys[106] => $this->getTs(),
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
        $pos = PoplfdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLfcode($value);
                break;
            case 2:
                $this->setDatesampled($value);
                break;
            case 3:
                $this->setYearofsampleold($value);
                break;
            case 4:
                $this->setYearofsample($value);
                break;
            case 5:
                $this->setIndividuals($value);
                break;
            case 6:
                $this->setClass1ml($value);
                break;
            case 7:
                $this->setClass1fr($value);
                break;
            case 8:
                $this->setClass2ml($value);
                break;
            case 9:
                $this->setClass2fr($value);
                break;
            case 10:
                $this->setClass3ml($value);
                break;
            case 11:
                $this->setClass3fr($value);
                break;
            case 12:
                $this->setClass4ml($value);
                break;
            case 13:
                $this->setClass4fr($value);
                break;
            case 14:
                $this->setClass5ml($value);
                break;
            case 15:
                $this->setClass5fr($value);
                break;
            case 16:
                $this->setClass6ml($value);
                break;
            case 17:
                $this->setClass6fr($value);
                break;
            case 18:
                $this->setClass7ml($value);
                break;
            case 19:
                $this->setClass7fr($value);
                break;
            case 20:
                $this->setClass8ml($value);
                break;
            case 21:
                $this->setClass8fr($value);
                break;
            case 22:
                $this->setClass9ml($value);
                break;
            case 23:
                $this->setClass9fr($value);
                break;
            case 24:
                $this->setClass10ml($value);
                break;
            case 25:
                $this->setClass10fr($value);
                break;
            case 26:
                $this->setClass11ml($value);
                break;
            case 27:
                $this->setClass11fr($value);
                break;
            case 28:
                $this->setClass12ml($value);
                break;
            case 29:
                $this->setClass12fr($value);
                break;
            case 30:
                $this->setClass13ml($value);
                break;
            case 31:
                $this->setClass13fr($value);
                break;
            case 32:
                $this->setClass14ml($value);
                break;
            case 33:
                $this->setClass14fr($value);
                break;
            case 34:
                $this->setClass15ml($value);
                break;
            case 35:
                $this->setClass15fr($value);
                break;
            case 36:
                $this->setClass16ml($value);
                break;
            case 37:
                $this->setClass16fr($value);
                break;
            case 38:
                $this->setClass17ml($value);
                break;
            case 39:
                $this->setClass17fr($value);
                break;
            case 40:
                $this->setClass18ml($value);
                break;
            case 41:
                $this->setClass18fr($value);
                break;
            case 42:
                $this->setClass19ml($value);
                break;
            case 43:
                $this->setClass19fr($value);
                break;
            case 44:
                $this->setClass20ml($value);
                break;
            case 45:
                $this->setClass20fr($value);
                break;
            case 46:
                $this->setClass21ml($value);
                break;
            case 47:
                $this->setClass21fr($value);
                break;
            case 48:
                $this->setClass22ml($value);
                break;
            case 49:
                $this->setClass22fr($value);
                break;
            case 50:
                $this->setClass23ml($value);
                break;
            case 51:
                $this->setClass23fr($value);
                break;
            case 52:
                $this->setClass24ml($value);
                break;
            case 53:
                $this->setClass24fr($value);
                break;
            case 54:
                $this->setClass25ml($value);
                break;
            case 55:
                $this->setClass25fr($value);
                break;
            case 56:
                $this->setClass26ml($value);
                break;
            case 57:
                $this->setClass26fr($value);
                break;
            case 58:
                $this->setClass27ml($value);
                break;
            case 59:
                $this->setClass27fr($value);
                break;
            case 60:
                $this->setClass28ml($value);
                break;
            case 61:
                $this->setClass28fr($value);
                break;
            case 62:
                $this->setClass29ml($value);
                break;
            case 63:
                $this->setClass29fr($value);
                break;
            case 64:
                $this->setClass30ml($value);
                break;
            case 65:
                $this->setClass30fr($value);
                break;
            case 66:
                $this->setClass31ml($value);
                break;
            case 67:
                $this->setClass31fr($value);
                break;
            case 68:
                $this->setClass32ml($value);
                break;
            case 69:
                $this->setClass32fr($value);
                break;
            case 70:
                $this->setClass33ml($value);
                break;
            case 71:
                $this->setClass33fr($value);
                break;
            case 72:
                $this->setClass34ml($value);
                break;
            case 73:
                $this->setClass34fr($value);
                break;
            case 74:
                $this->setClass35ml($value);
                break;
            case 75:
                $this->setClass35fr($value);
                break;
            case 76:
                $this->setClass36ml($value);
                break;
            case 77:
                $this->setClass36fr($value);
                break;
            case 78:
                $this->setClass37ml($value);
                break;
            case 79:
                $this->setClass37fr($value);
                break;
            case 80:
                $this->setClass38ml($value);
                break;
            case 81:
                $this->setClass38fr($value);
                break;
            case 82:
                $this->setClass39ml($value);
                break;
            case 83:
                $this->setClass39fr($value);
                break;
            case 84:
                $this->setClass40ml($value);
                break;
            case 85:
                $this->setClass40fr($value);
                break;
            case 86:
                $this->setClass41ml($value);
                break;
            case 87:
                $this->setClass41fr($value);
                break;
            case 88:
                $this->setClass42ml($value);
                break;
            case 89:
                $this->setClass42fr($value);
                break;
            case 90:
                $this->setClass43ml($value);
                break;
            case 91:
                $this->setClass43fr($value);
                break;
            case 92:
                $this->setClass44ml($value);
                break;
            case 93:
                $this->setClass44fr($value);
                break;
            case 94:
                $this->setClass45ml($value);
                break;
            case 95:
                $this->setClass45fr($value);
                break;
            case 96:
                $this->setClass46ml($value);
                break;
            case 97:
                $this->setClass46fr($value);
                break;
            case 98:
                $this->setClass47ml($value);
                break;
            case 99:
                $this->setClass47fr($value);
                break;
            case 100:
                $this->setClass48ml($value);
                break;
            case 101:
                $this->setClass48fr($value);
                break;
            case 102:
                $this->setClass49ml($value);
                break;
            case 103:
                $this->setClass49fr($value);
                break;
            case 104:
                $this->setClass50ml($value);
                break;
            case 105:
                $this->setClass50fr($value);
                break;
            case 106:
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
        $keys = PoplfdataPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLfcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDatesampled($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setYearofsampleold($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setYearofsample($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIndividuals($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClass1ml($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setClass1fr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setClass2ml($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setClass2fr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setClass3ml($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setClass3fr($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setClass4ml($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setClass4fr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setClass5ml($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setClass5fr($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setClass6ml($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setClass6fr($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setClass7ml($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setClass7fr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setClass8ml($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setClass8fr($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setClass9ml($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setClass9fr($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setClass10ml($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setClass10fr($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setClass11ml($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setClass11fr($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setClass12ml($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setClass12fr($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setClass13ml($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setClass13fr($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setClass14ml($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setClass14fr($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setClass15ml($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setClass15fr($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setClass16ml($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setClass16fr($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setClass17ml($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setClass17fr($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setClass18ml($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setClass18fr($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setClass19ml($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setClass19fr($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setClass20ml($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setClass20fr($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setClass21ml($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setClass21fr($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setClass22ml($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setClass22fr($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setClass23ml($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setClass23fr($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setClass24ml($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setClass24fr($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setClass25ml($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setClass25fr($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setClass26ml($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setClass26fr($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setClass27ml($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setClass27fr($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setClass28ml($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setClass28fr($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setClass29ml($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setClass29fr($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setClass30ml($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setClass30fr($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setClass31ml($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setClass31fr($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setClass32ml($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setClass32fr($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setClass33ml($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setClass33fr($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setClass34ml($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setClass34fr($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setClass35ml($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setClass35fr($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setClass36ml($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setClass36fr($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setClass37ml($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setClass37fr($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setClass38ml($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setClass38fr($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setClass39ml($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setClass39fr($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setClass40ml($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setClass40fr($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setClass41ml($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setClass41fr($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setClass42ml($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setClass42fr($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setClass43ml($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setClass43fr($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setClass44ml($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setClass44fr($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setClass45ml($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setClass45fr($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setClass46ml($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setClass46fr($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setClass47ml($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setClass47fr($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setClass48ml($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setClass48fr($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setClass49ml($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setClass49fr($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setClass50ml($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setClass50fr($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setTs($arr[$keys[106]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PoplfdataPeer::DATABASE_NAME);

        if ($this->isColumnModified(PoplfdataPeer::AUTOCTR)) $criteria->add(PoplfdataPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(PoplfdataPeer::LFCODE)) $criteria->add(PoplfdataPeer::LFCODE, $this->lfcode);
        if ($this->isColumnModified(PoplfdataPeer::DATESAMPLED)) $criteria->add(PoplfdataPeer::DATESAMPLED, $this->datesampled);
        if ($this->isColumnModified(PoplfdataPeer::YEAROFSAMPLEOLD)) $criteria->add(PoplfdataPeer::YEAROFSAMPLEOLD, $this->yearofsampleold);
        if ($this->isColumnModified(PoplfdataPeer::YEAROFSAMPLE)) $criteria->add(PoplfdataPeer::YEAROFSAMPLE, $this->yearofsample);
        if ($this->isColumnModified(PoplfdataPeer::INDIVIDUALS)) $criteria->add(PoplfdataPeer::INDIVIDUALS, $this->individuals);
        if ($this->isColumnModified(PoplfdataPeer::CLASS1ML)) $criteria->add(PoplfdataPeer::CLASS1ML, $this->class1ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS1FR)) $criteria->add(PoplfdataPeer::CLASS1FR, $this->class1fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS2ML)) $criteria->add(PoplfdataPeer::CLASS2ML, $this->class2ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS2FR)) $criteria->add(PoplfdataPeer::CLASS2FR, $this->class2fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS3ML)) $criteria->add(PoplfdataPeer::CLASS3ML, $this->class3ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS3FR)) $criteria->add(PoplfdataPeer::CLASS3FR, $this->class3fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS4ML)) $criteria->add(PoplfdataPeer::CLASS4ML, $this->class4ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS4FR)) $criteria->add(PoplfdataPeer::CLASS4FR, $this->class4fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS5ML)) $criteria->add(PoplfdataPeer::CLASS5ML, $this->class5ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS5FR)) $criteria->add(PoplfdataPeer::CLASS5FR, $this->class5fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS6ML)) $criteria->add(PoplfdataPeer::CLASS6ML, $this->class6ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS6FR)) $criteria->add(PoplfdataPeer::CLASS6FR, $this->class6fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS7ML)) $criteria->add(PoplfdataPeer::CLASS7ML, $this->class7ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS7FR)) $criteria->add(PoplfdataPeer::CLASS7FR, $this->class7fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS8ML)) $criteria->add(PoplfdataPeer::CLASS8ML, $this->class8ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS8FR)) $criteria->add(PoplfdataPeer::CLASS8FR, $this->class8fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS9ML)) $criteria->add(PoplfdataPeer::CLASS9ML, $this->class9ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS9FR)) $criteria->add(PoplfdataPeer::CLASS9FR, $this->class9fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS10ML)) $criteria->add(PoplfdataPeer::CLASS10ML, $this->class10ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS10FR)) $criteria->add(PoplfdataPeer::CLASS10FR, $this->class10fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS11ML)) $criteria->add(PoplfdataPeer::CLASS11ML, $this->class11ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS11FR)) $criteria->add(PoplfdataPeer::CLASS11FR, $this->class11fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS12ML)) $criteria->add(PoplfdataPeer::CLASS12ML, $this->class12ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS12FR)) $criteria->add(PoplfdataPeer::CLASS12FR, $this->class12fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS13ML)) $criteria->add(PoplfdataPeer::CLASS13ML, $this->class13ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS13FR)) $criteria->add(PoplfdataPeer::CLASS13FR, $this->class13fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS14ML)) $criteria->add(PoplfdataPeer::CLASS14ML, $this->class14ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS14FR)) $criteria->add(PoplfdataPeer::CLASS14FR, $this->class14fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS15ML)) $criteria->add(PoplfdataPeer::CLASS15ML, $this->class15ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS15FR)) $criteria->add(PoplfdataPeer::CLASS15FR, $this->class15fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS16ML)) $criteria->add(PoplfdataPeer::CLASS16ML, $this->class16ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS16FR)) $criteria->add(PoplfdataPeer::CLASS16FR, $this->class16fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS17ML)) $criteria->add(PoplfdataPeer::CLASS17ML, $this->class17ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS17FR)) $criteria->add(PoplfdataPeer::CLASS17FR, $this->class17fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS18ML)) $criteria->add(PoplfdataPeer::CLASS18ML, $this->class18ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS18FR)) $criteria->add(PoplfdataPeer::CLASS18FR, $this->class18fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS19ML)) $criteria->add(PoplfdataPeer::CLASS19ML, $this->class19ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS19FR)) $criteria->add(PoplfdataPeer::CLASS19FR, $this->class19fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS20ML)) $criteria->add(PoplfdataPeer::CLASS20ML, $this->class20ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS20FR)) $criteria->add(PoplfdataPeer::CLASS20FR, $this->class20fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS21ML)) $criteria->add(PoplfdataPeer::CLASS21ML, $this->class21ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS21FR)) $criteria->add(PoplfdataPeer::CLASS21FR, $this->class21fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS22ML)) $criteria->add(PoplfdataPeer::CLASS22ML, $this->class22ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS22FR)) $criteria->add(PoplfdataPeer::CLASS22FR, $this->class22fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS23ML)) $criteria->add(PoplfdataPeer::CLASS23ML, $this->class23ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS23FR)) $criteria->add(PoplfdataPeer::CLASS23FR, $this->class23fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS24ML)) $criteria->add(PoplfdataPeer::CLASS24ML, $this->class24ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS24FR)) $criteria->add(PoplfdataPeer::CLASS24FR, $this->class24fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS25ML)) $criteria->add(PoplfdataPeer::CLASS25ML, $this->class25ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS25FR)) $criteria->add(PoplfdataPeer::CLASS25FR, $this->class25fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS26ML)) $criteria->add(PoplfdataPeer::CLASS26ML, $this->class26ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS26FR)) $criteria->add(PoplfdataPeer::CLASS26FR, $this->class26fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS27ML)) $criteria->add(PoplfdataPeer::CLASS27ML, $this->class27ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS27FR)) $criteria->add(PoplfdataPeer::CLASS27FR, $this->class27fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS28ML)) $criteria->add(PoplfdataPeer::CLASS28ML, $this->class28ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS28FR)) $criteria->add(PoplfdataPeer::CLASS28FR, $this->class28fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS29ML)) $criteria->add(PoplfdataPeer::CLASS29ML, $this->class29ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS29FR)) $criteria->add(PoplfdataPeer::CLASS29FR, $this->class29fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS30ML)) $criteria->add(PoplfdataPeer::CLASS30ML, $this->class30ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS30FR)) $criteria->add(PoplfdataPeer::CLASS30FR, $this->class30fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS31ML)) $criteria->add(PoplfdataPeer::CLASS31ML, $this->class31ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS31FR)) $criteria->add(PoplfdataPeer::CLASS31FR, $this->class31fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS32ML)) $criteria->add(PoplfdataPeer::CLASS32ML, $this->class32ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS32FR)) $criteria->add(PoplfdataPeer::CLASS32FR, $this->class32fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS33ML)) $criteria->add(PoplfdataPeer::CLASS33ML, $this->class33ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS33FR)) $criteria->add(PoplfdataPeer::CLASS33FR, $this->class33fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS34ML)) $criteria->add(PoplfdataPeer::CLASS34ML, $this->class34ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS34FR)) $criteria->add(PoplfdataPeer::CLASS34FR, $this->class34fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS35ML)) $criteria->add(PoplfdataPeer::CLASS35ML, $this->class35ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS35FR)) $criteria->add(PoplfdataPeer::CLASS35FR, $this->class35fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS36ML)) $criteria->add(PoplfdataPeer::CLASS36ML, $this->class36ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS36FR)) $criteria->add(PoplfdataPeer::CLASS36FR, $this->class36fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS37ML)) $criteria->add(PoplfdataPeer::CLASS37ML, $this->class37ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS37FR)) $criteria->add(PoplfdataPeer::CLASS37FR, $this->class37fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS38ML)) $criteria->add(PoplfdataPeer::CLASS38ML, $this->class38ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS38FR)) $criteria->add(PoplfdataPeer::CLASS38FR, $this->class38fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS39ML)) $criteria->add(PoplfdataPeer::CLASS39ML, $this->class39ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS39FR)) $criteria->add(PoplfdataPeer::CLASS39FR, $this->class39fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS40ML)) $criteria->add(PoplfdataPeer::CLASS40ML, $this->class40ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS40FR)) $criteria->add(PoplfdataPeer::CLASS40FR, $this->class40fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS41ML)) $criteria->add(PoplfdataPeer::CLASS41ML, $this->class41ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS41FR)) $criteria->add(PoplfdataPeer::CLASS41FR, $this->class41fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS42ML)) $criteria->add(PoplfdataPeer::CLASS42ML, $this->class42ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS42FR)) $criteria->add(PoplfdataPeer::CLASS42FR, $this->class42fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS43ML)) $criteria->add(PoplfdataPeer::CLASS43ML, $this->class43ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS43FR)) $criteria->add(PoplfdataPeer::CLASS43FR, $this->class43fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS44ML)) $criteria->add(PoplfdataPeer::CLASS44ML, $this->class44ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS44FR)) $criteria->add(PoplfdataPeer::CLASS44FR, $this->class44fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS45ML)) $criteria->add(PoplfdataPeer::CLASS45ML, $this->class45ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS45FR)) $criteria->add(PoplfdataPeer::CLASS45FR, $this->class45fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS46ML)) $criteria->add(PoplfdataPeer::CLASS46ML, $this->class46ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS46FR)) $criteria->add(PoplfdataPeer::CLASS46FR, $this->class46fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS47ML)) $criteria->add(PoplfdataPeer::CLASS47ML, $this->class47ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS47FR)) $criteria->add(PoplfdataPeer::CLASS47FR, $this->class47fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS48ML)) $criteria->add(PoplfdataPeer::CLASS48ML, $this->class48ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS48FR)) $criteria->add(PoplfdataPeer::CLASS48FR, $this->class48fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS49ML)) $criteria->add(PoplfdataPeer::CLASS49ML, $this->class49ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS49FR)) $criteria->add(PoplfdataPeer::CLASS49FR, $this->class49fr);
        if ($this->isColumnModified(PoplfdataPeer::CLASS50ML)) $criteria->add(PoplfdataPeer::CLASS50ML, $this->class50ml);
        if ($this->isColumnModified(PoplfdataPeer::CLASS50FR)) $criteria->add(PoplfdataPeer::CLASS50FR, $this->class50fr);
        if ($this->isColumnModified(PoplfdataPeer::TS)) $criteria->add(PoplfdataPeer::TS, $this->ts);

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
        $criteria = new Criteria(PoplfdataPeer::DATABASE_NAME);
        $criteria->add(PoplfdataPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Poplfdata (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLfcode($this->getLfcode());
        $copyObj->setDatesampled($this->getDatesampled());
        $copyObj->setYearofsampleold($this->getYearofsampleold());
        $copyObj->setYearofsample($this->getYearofsample());
        $copyObj->setIndividuals($this->getIndividuals());
        $copyObj->setClass1ml($this->getClass1ml());
        $copyObj->setClass1fr($this->getClass1fr());
        $copyObj->setClass2ml($this->getClass2ml());
        $copyObj->setClass2fr($this->getClass2fr());
        $copyObj->setClass3ml($this->getClass3ml());
        $copyObj->setClass3fr($this->getClass3fr());
        $copyObj->setClass4ml($this->getClass4ml());
        $copyObj->setClass4fr($this->getClass4fr());
        $copyObj->setClass5ml($this->getClass5ml());
        $copyObj->setClass5fr($this->getClass5fr());
        $copyObj->setClass6ml($this->getClass6ml());
        $copyObj->setClass6fr($this->getClass6fr());
        $copyObj->setClass7ml($this->getClass7ml());
        $copyObj->setClass7fr($this->getClass7fr());
        $copyObj->setClass8ml($this->getClass8ml());
        $copyObj->setClass8fr($this->getClass8fr());
        $copyObj->setClass9ml($this->getClass9ml());
        $copyObj->setClass9fr($this->getClass9fr());
        $copyObj->setClass10ml($this->getClass10ml());
        $copyObj->setClass10fr($this->getClass10fr());
        $copyObj->setClass11ml($this->getClass11ml());
        $copyObj->setClass11fr($this->getClass11fr());
        $copyObj->setClass12ml($this->getClass12ml());
        $copyObj->setClass12fr($this->getClass12fr());
        $copyObj->setClass13ml($this->getClass13ml());
        $copyObj->setClass13fr($this->getClass13fr());
        $copyObj->setClass14ml($this->getClass14ml());
        $copyObj->setClass14fr($this->getClass14fr());
        $copyObj->setClass15ml($this->getClass15ml());
        $copyObj->setClass15fr($this->getClass15fr());
        $copyObj->setClass16ml($this->getClass16ml());
        $copyObj->setClass16fr($this->getClass16fr());
        $copyObj->setClass17ml($this->getClass17ml());
        $copyObj->setClass17fr($this->getClass17fr());
        $copyObj->setClass18ml($this->getClass18ml());
        $copyObj->setClass18fr($this->getClass18fr());
        $copyObj->setClass19ml($this->getClass19ml());
        $copyObj->setClass19fr($this->getClass19fr());
        $copyObj->setClass20ml($this->getClass20ml());
        $copyObj->setClass20fr($this->getClass20fr());
        $copyObj->setClass21ml($this->getClass21ml());
        $copyObj->setClass21fr($this->getClass21fr());
        $copyObj->setClass22ml($this->getClass22ml());
        $copyObj->setClass22fr($this->getClass22fr());
        $copyObj->setClass23ml($this->getClass23ml());
        $copyObj->setClass23fr($this->getClass23fr());
        $copyObj->setClass24ml($this->getClass24ml());
        $copyObj->setClass24fr($this->getClass24fr());
        $copyObj->setClass25ml($this->getClass25ml());
        $copyObj->setClass25fr($this->getClass25fr());
        $copyObj->setClass26ml($this->getClass26ml());
        $copyObj->setClass26fr($this->getClass26fr());
        $copyObj->setClass27ml($this->getClass27ml());
        $copyObj->setClass27fr($this->getClass27fr());
        $copyObj->setClass28ml($this->getClass28ml());
        $copyObj->setClass28fr($this->getClass28fr());
        $copyObj->setClass29ml($this->getClass29ml());
        $copyObj->setClass29fr($this->getClass29fr());
        $copyObj->setClass30ml($this->getClass30ml());
        $copyObj->setClass30fr($this->getClass30fr());
        $copyObj->setClass31ml($this->getClass31ml());
        $copyObj->setClass31fr($this->getClass31fr());
        $copyObj->setClass32ml($this->getClass32ml());
        $copyObj->setClass32fr($this->getClass32fr());
        $copyObj->setClass33ml($this->getClass33ml());
        $copyObj->setClass33fr($this->getClass33fr());
        $copyObj->setClass34ml($this->getClass34ml());
        $copyObj->setClass34fr($this->getClass34fr());
        $copyObj->setClass35ml($this->getClass35ml());
        $copyObj->setClass35fr($this->getClass35fr());
        $copyObj->setClass36ml($this->getClass36ml());
        $copyObj->setClass36fr($this->getClass36fr());
        $copyObj->setClass37ml($this->getClass37ml());
        $copyObj->setClass37fr($this->getClass37fr());
        $copyObj->setClass38ml($this->getClass38ml());
        $copyObj->setClass38fr($this->getClass38fr());
        $copyObj->setClass39ml($this->getClass39ml());
        $copyObj->setClass39fr($this->getClass39fr());
        $copyObj->setClass40ml($this->getClass40ml());
        $copyObj->setClass40fr($this->getClass40fr());
        $copyObj->setClass41ml($this->getClass41ml());
        $copyObj->setClass41fr($this->getClass41fr());
        $copyObj->setClass42ml($this->getClass42ml());
        $copyObj->setClass42fr($this->getClass42fr());
        $copyObj->setClass43ml($this->getClass43ml());
        $copyObj->setClass43fr($this->getClass43fr());
        $copyObj->setClass44ml($this->getClass44ml());
        $copyObj->setClass44fr($this->getClass44fr());
        $copyObj->setClass45ml($this->getClass45ml());
        $copyObj->setClass45fr($this->getClass45fr());
        $copyObj->setClass46ml($this->getClass46ml());
        $copyObj->setClass46fr($this->getClass46fr());
        $copyObj->setClass47ml($this->getClass47ml());
        $copyObj->setClass47fr($this->getClass47fr());
        $copyObj->setClass48ml($this->getClass48ml());
        $copyObj->setClass48fr($this->getClass48fr());
        $copyObj->setClass49ml($this->getClass49ml());
        $copyObj->setClass49fr($this->getClass49fr());
        $copyObj->setClass50ml($this->getClass50ml());
        $copyObj->setClass50fr($this->getClass50fr());
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
     * @return Poplfdata Clone of current object.
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
     * @return PoplfdataPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PoplfdataPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->lfcode = null;
        $this->datesampled = null;
        $this->yearofsampleold = null;
        $this->yearofsample = null;
        $this->individuals = null;
        $this->class1ml = null;
        $this->class1fr = null;
        $this->class2ml = null;
        $this->class2fr = null;
        $this->class3ml = null;
        $this->class3fr = null;
        $this->class4ml = null;
        $this->class4fr = null;
        $this->class5ml = null;
        $this->class5fr = null;
        $this->class6ml = null;
        $this->class6fr = null;
        $this->class7ml = null;
        $this->class7fr = null;
        $this->class8ml = null;
        $this->class8fr = null;
        $this->class9ml = null;
        $this->class9fr = null;
        $this->class10ml = null;
        $this->class10fr = null;
        $this->class11ml = null;
        $this->class11fr = null;
        $this->class12ml = null;
        $this->class12fr = null;
        $this->class13ml = null;
        $this->class13fr = null;
        $this->class14ml = null;
        $this->class14fr = null;
        $this->class15ml = null;
        $this->class15fr = null;
        $this->class16ml = null;
        $this->class16fr = null;
        $this->class17ml = null;
        $this->class17fr = null;
        $this->class18ml = null;
        $this->class18fr = null;
        $this->class19ml = null;
        $this->class19fr = null;
        $this->class20ml = null;
        $this->class20fr = null;
        $this->class21ml = null;
        $this->class21fr = null;
        $this->class22ml = null;
        $this->class22fr = null;
        $this->class23ml = null;
        $this->class23fr = null;
        $this->class24ml = null;
        $this->class24fr = null;
        $this->class25ml = null;
        $this->class25fr = null;
        $this->class26ml = null;
        $this->class26fr = null;
        $this->class27ml = null;
        $this->class27fr = null;
        $this->class28ml = null;
        $this->class28fr = null;
        $this->class29ml = null;
        $this->class29fr = null;
        $this->class30ml = null;
        $this->class30fr = null;
        $this->class31ml = null;
        $this->class31fr = null;
        $this->class32ml = null;
        $this->class32fr = null;
        $this->class33ml = null;
        $this->class33fr = null;
        $this->class34ml = null;
        $this->class34fr = null;
        $this->class35ml = null;
        $this->class35fr = null;
        $this->class36ml = null;
        $this->class36fr = null;
        $this->class37ml = null;
        $this->class37fr = null;
        $this->class38ml = null;
        $this->class38fr = null;
        $this->class39ml = null;
        $this->class39fr = null;
        $this->class40ml = null;
        $this->class40fr = null;
        $this->class41ml = null;
        $this->class41fr = null;
        $this->class42ml = null;
        $this->class42fr = null;
        $this->class43ml = null;
        $this->class43fr = null;
        $this->class44ml = null;
        $this->class44fr = null;
        $this->class45ml = null;
        $this->class45fr = null;
        $this->class46ml = null;
        $this->class46fr = null;
        $this->class47ml = null;
        $this->class47fr = null;
        $this->class48ml = null;
        $this->class48fr = null;
        $this->class49ml = null;
        $this->class49fr = null;
        $this->class50ml = null;
        $this->class50fr = null;
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
        return (string) $this->exportTo(PoplfdataPeer::DEFAULT_STRING_FORMAT);
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
