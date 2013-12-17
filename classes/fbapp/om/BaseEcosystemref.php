<?php


/**
 * Base class that represents a row from the 'ecosystemref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcosystemref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EcosystemrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EcosystemrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the e_code field.
     * @var        int
     */
    protected $e_code;

    /**
     * The value for the ecosystemname field.
     * @var        string
     */
    protected $ecosystemname;

    /**
     * The value for the ecosystemtype field.
     * @var        string
     */
    protected $ecosystemtype;

    /**
     * The value for the e_code_large field.
     * @var        int
     */
    protected $e_code_large;

    /**
     * The value for the e_code_larger field.
     * @var        int
     */
    protected $e_code_larger;

    /**
     * The value for the ready field.
     * @var        int
     */
    protected $ready;

    /**
     * The value for the othernames field.
     * @var        string
     */
    protected $othernames;

    /**
     * The value for the location field.
     * @var        string
     */
    protected $location;

    /**
     * The value for the locationmap field.
     * @var        string
     */
    protected $locationmap;

    /**
     * The value for the salinity field.
     * @var        string
     */
    protected $salinity;

    /**
     * The value for the riverlength field.
     * @var        int
     */
    protected $riverlength;

    /**
     * The value for the area field.
     * @var        int
     */
    protected $area;

    /**
     * The value for the sizeref field.
     * @var        int
     */
    protected $sizeref;

    /**
     * The value for the drainagearea field.
     * @var        int
     */
    protected $drainagearea;

    /**
     * The value for the northernlat field.
     * @var        int
     */
    protected $northernlat;

    /**
     * The value for the nrangens field.
     * @var        string
     */
    protected $nrangens;

    /**
     * The value for the southernlat field.
     * @var        int
     */
    protected $southernlat;

    /**
     * The value for the srangens field.
     * @var        string
     */
    protected $srangens;

    /**
     * The value for the westernlat field.
     * @var        int
     */
    protected $westernlat;

    /**
     * The value for the wrangeew field.
     * @var        string
     */
    protected $wrangeew;

    /**
     * The value for the easternlat field.
     * @var        int
     */
    protected $easternlat;

    /**
     * The value for the erangeew field.
     * @var        string
     */
    protected $erangeew;

    /**
     * The value for the climate field.
     * @var        string
     */
    protected $climate;

    /**
     * The value for the polar field.
     * @var        int
     */
    protected $polar;

    /**
     * The value for the boreal field.
     * @var        int
     */
    protected $boreal;

    /**
     * The value for the temperate field.
     * @var        int
     */
    protected $temperate;

    /**
     * The value for the subtropical field.
     * @var        int
     */
    protected $subtropical;

    /**
     * The value for the tropical field.
     * @var        int
     */
    protected $tropical;

    /**
     * The value for the averagedepth field.
     * @var        int
     */
    protected $averagedepth;

    /**
     * The value for the maxdepth field.
     * @var        int
     */
    protected $maxdepth;

    /**
     * The value for the depthref field.
     * @var        int
     */
    protected $depthref;

    /**
     * The value for the tempsurface field.
     * @var        double
     */
    protected $tempsurface;

    /**
     * The value for the tempsurfacemap field.
     * @var        string
     */
    protected $tempsurfacemap;

    /**
     * The value for the tempdepth field.
     * @var        double
     */
    protected $tempdepth;

    /**
     * The value for the tempdepthmap field.
     * @var        string
     */
    protected $tempdepthmap;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the totalcount field.
     * @var        int
     */
    protected $totalcount;

    /**
     * The value for the totalfamcount field.
     * @var        int
     */
    protected $totalfamcount;

    /**
     * The value for the totalcomplete field.
     * @var        int
     */
    protected $totalcomplete;

    /**
     * The value for the totallit field.
     * @var        int
     */
    protected $totallit;

    /**
     * The value for the totalfamlit field.
     * @var        int
     */
    protected $totalfamlit;

    /**
     * The value for the totalref field.
     * @var        int
     */
    protected $totalref;

    /**
     * The value for the useflag field.
     * @var        int
     */
    protected $useflag;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the lastupdate field.
     * @var        string
     */
    protected $lastupdate;

    /**
     * The value for the latdegfill field.
     * @var        int
     */
    protected $latdegfill;

    /**
     * The value for the latminfill field.
     * @var        int
     */
    protected $latminfill;

    /**
     * The value for the northsouthfill field.
     * @var        string
     */
    protected $northsouthfill;

    /**
     * The value for the longdegfill field.
     * @var        int
     */
    protected $longdegfill;

    /**
     * The value for the longminfill field.
     * @var        int
     */
    protected $longminfill;

    /**
     * The value for the eastwestfill field.
     * @var        string
     */
    protected $eastwestfill;

    /**
     * The value for the ecosystemurl1 field.
     * @var        string
     */
    protected $ecosystemurl1;

    /**
     * The value for the ecosystemurl2 field.
     * @var        string
     */
    protected $ecosystemurl2;

    /**
     * The value for the ecosystemurl3 field.
     * @var        string
     */
    protected $ecosystemurl3;

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
     * The value for the ecosystemname_german field.
     * @var        string
     */
    protected $ecosystemname_german;

    /**
     * The value for the ecosystemname_russian_original field.
     * @var        string
     */
    protected $ecosystemname_russian_original;

    /**
     * The value for the ecosystemname_russian field.
     * @var        string
     */
    protected $ecosystemname_russian;

    /**
     * The value for the ecosystemname_french field.
     * @var        string
     */
    protected $ecosystemname_french;

    /**
     * The value for the ecosystemname_chinese field.
     * @var        string
     */
    protected $ecosystemname_chinese;

    /**
     * The value for the ecosystemname_dutch field.
     * @var        string
     */
    protected $ecosystemname_dutch;

    /**
     * The value for the ecosystemname_italian field.
     * @var        string
     */
    protected $ecosystemname_italian;

    /**
     * The value for the ecosystemname_swedish field.
     * @var        string
     */
    protected $ecosystemname_swedish;

    /**
     * The value for the ecosystemname_greek_original field.
     * @var        string
     */
    protected $ecosystemname_greek_original;

    /**
     * The value for the ecosystemname_greek field.
     * @var        string
     */
    protected $ecosystemname_greek;

    /**
     * The value for the ecosystemname_portuguese field.
     * @var        string
     */
    protected $ecosystemname_portuguese;

    /**
     * The value for the ecosystemname_spanish field.
     * @var        string
     */
    protected $ecosystemname_spanish;

    /**
     * The value for the ecosystemname_chinese_u field.
     * @var        string
     */
    protected $ecosystemname_chinese_u;

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
     * Get the [e_code] column value.
     *
     * @return int
     */
    public function getECode()
    {

        return $this->e_code;
    }

    /**
     * Get the [ecosystemname] column value.
     *
     * @return string
     */
    public function getEcosystemname()
    {

        return $this->ecosystemname;
    }

    /**
     * Get the [ecosystemtype] column value.
     *
     * @return string
     */
    public function getEcosystemtype()
    {

        return $this->ecosystemtype;
    }

    /**
     * Get the [e_code_large] column value.
     *
     * @return int
     */
    public function getECodeLarge()
    {

        return $this->e_code_large;
    }

    /**
     * Get the [e_code_larger] column value.
     *
     * @return int
     */
    public function getECodeLarger()
    {

        return $this->e_code_larger;
    }

    /**
     * Get the [ready] column value.
     *
     * @return int
     */
    public function getReady()
    {

        return $this->ready;
    }

    /**
     * Get the [othernames] column value.
     *
     * @return string
     */
    public function getOthernames()
    {

        return $this->othernames;
    }

    /**
     * Get the [location] column value.
     *
     * @return string
     */
    public function getLocation()
    {

        return $this->location;
    }

    /**
     * Get the [locationmap] column value.
     *
     * @return string
     */
    public function getLocationmap()
    {

        return $this->locationmap;
    }

    /**
     * Get the [salinity] column value.
     *
     * @return string
     */
    public function getSalinity()
    {

        return $this->salinity;
    }

    /**
     * Get the [riverlength] column value.
     *
     * @return int
     */
    public function getRiverlength()
    {

        return $this->riverlength;
    }

    /**
     * Get the [area] column value.
     *
     * @return int
     */
    public function getArea()
    {

        return $this->area;
    }

    /**
     * Get the [sizeref] column value.
     *
     * @return int
     */
    public function getSizeref()
    {

        return $this->sizeref;
    }

    /**
     * Get the [drainagearea] column value.
     *
     * @return int
     */
    public function getDrainagearea()
    {

        return $this->drainagearea;
    }

    /**
     * Get the [northernlat] column value.
     *
     * @return int
     */
    public function getNorthernlat()
    {

        return $this->northernlat;
    }

    /**
     * Get the [nrangens] column value.
     *
     * @return string
     */
    public function getNrangens()
    {

        return $this->nrangens;
    }

    /**
     * Get the [southernlat] column value.
     *
     * @return int
     */
    public function getSouthernlat()
    {

        return $this->southernlat;
    }

    /**
     * Get the [srangens] column value.
     *
     * @return string
     */
    public function getSrangens()
    {

        return $this->srangens;
    }

    /**
     * Get the [westernlat] column value.
     *
     * @return int
     */
    public function getWesternlat()
    {

        return $this->westernlat;
    }

    /**
     * Get the [wrangeew] column value.
     *
     * @return string
     */
    public function getWrangeew()
    {

        return $this->wrangeew;
    }

    /**
     * Get the [easternlat] column value.
     *
     * @return int
     */
    public function getEasternlat()
    {

        return $this->easternlat;
    }

    /**
     * Get the [erangeew] column value.
     *
     * @return string
     */
    public function getErangeew()
    {

        return $this->erangeew;
    }

    /**
     * Get the [climate] column value.
     *
     * @return string
     */
    public function getClimate()
    {

        return $this->climate;
    }

    /**
     * Get the [polar] column value.
     *
     * @return int
     */
    public function getPolar()
    {

        return $this->polar;
    }

    /**
     * Get the [boreal] column value.
     *
     * @return int
     */
    public function getBoreal()
    {

        return $this->boreal;
    }

    /**
     * Get the [temperate] column value.
     *
     * @return int
     */
    public function getTemperate()
    {

        return $this->temperate;
    }

    /**
     * Get the [subtropical] column value.
     *
     * @return int
     */
    public function getSubtropical()
    {

        return $this->subtropical;
    }

    /**
     * Get the [tropical] column value.
     *
     * @return int
     */
    public function getTropical()
    {

        return $this->tropical;
    }

    /**
     * Get the [averagedepth] column value.
     *
     * @return int
     */
    public function getAveragedepth()
    {

        return $this->averagedepth;
    }

    /**
     * Get the [maxdepth] column value.
     *
     * @return int
     */
    public function getMaxdepth()
    {

        return $this->maxdepth;
    }

    /**
     * Get the [depthref] column value.
     *
     * @return int
     */
    public function getDepthref()
    {

        return $this->depthref;
    }

    /**
     * Get the [tempsurface] column value.
     *
     * @return double
     */
    public function getTempsurface()
    {

        return $this->tempsurface;
    }

    /**
     * Get the [tempsurfacemap] column value.
     *
     * @return string
     */
    public function getTempsurfacemap()
    {

        return $this->tempsurfacemap;
    }

    /**
     * Get the [tempdepth] column value.
     *
     * @return double
     */
    public function getTempdepth()
    {

        return $this->tempdepth;
    }

    /**
     * Get the [tempdepthmap] column value.
     *
     * @return string
     */
    public function getTempdepthmap()
    {

        return $this->tempdepthmap;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [totalcount] column value.
     *
     * @return int
     */
    public function getTotalcount()
    {

        return $this->totalcount;
    }

    /**
     * Get the [totalfamcount] column value.
     *
     * @return int
     */
    public function getTotalfamcount()
    {

        return $this->totalfamcount;
    }

    /**
     * Get the [totalcomplete] column value.
     *
     * @return int
     */
    public function getTotalcomplete()
    {

        return $this->totalcomplete;
    }

    /**
     * Get the [totallit] column value.
     *
     * @return int
     */
    public function getTotallit()
    {

        return $this->totallit;
    }

    /**
     * Get the [totalfamlit] column value.
     *
     * @return int
     */
    public function getTotalfamlit()
    {

        return $this->totalfamlit;
    }

    /**
     * Get the [totalref] column value.
     *
     * @return int
     */
    public function getTotalref()
    {

        return $this->totalref;
    }

    /**
     * Get the [useflag] column value.
     *
     * @return int
     */
    public function getUseflag()
    {

        return $this->useflag;
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
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
    }

    /**
     * Get the [optionally formatted] temporal [lastupdate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastupdate($format = 'Y-m-d H:i:s')
    {
        if ($this->lastupdate === null) {
            return null;
        }

        if ($this->lastupdate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lastupdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastupdate, true), $x);
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
     * Get the [latdegfill] column value.
     *
     * @return int
     */
    public function getLatdegfill()
    {

        return $this->latdegfill;
    }

    /**
     * Get the [latminfill] column value.
     *
     * @return int
     */
    public function getLatminfill()
    {

        return $this->latminfill;
    }

    /**
     * Get the [northsouthfill] column value.
     *
     * @return string
     */
    public function getNorthsouthfill()
    {

        return $this->northsouthfill;
    }

    /**
     * Get the [longdegfill] column value.
     *
     * @return int
     */
    public function getLongdegfill()
    {

        return $this->longdegfill;
    }

    /**
     * Get the [longminfill] column value.
     *
     * @return int
     */
    public function getLongminfill()
    {

        return $this->longminfill;
    }

    /**
     * Get the [eastwestfill] column value.
     *
     * @return string
     */
    public function getEastwestfill()
    {

        return $this->eastwestfill;
    }

    /**
     * Get the [ecosystemurl1] column value.
     *
     * @return string
     */
    public function getEcosystemurl1()
    {

        return $this->ecosystemurl1;
    }

    /**
     * Get the [ecosystemurl2] column value.
     *
     * @return string
     */
    public function getEcosystemurl2()
    {

        return $this->ecosystemurl2;
    }

    /**
     * Get the [ecosystemurl3] column value.
     *
     * @return string
     */
    public function getEcosystemurl3()
    {

        return $this->ecosystemurl3;
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
     * Get the [ecosystemname_german] column value.
     *
     * @return string
     */
    public function getEcosystemnameGerman()
    {

        return $this->ecosystemname_german;
    }

    /**
     * Get the [ecosystemname_russian_original] column value.
     *
     * @return string
     */
    public function getEcosystemnameRussianOriginal()
    {

        return $this->ecosystemname_russian_original;
    }

    /**
     * Get the [ecosystemname_russian] column value.
     *
     * @return string
     */
    public function getEcosystemnameRussian()
    {

        return $this->ecosystemname_russian;
    }

    /**
     * Get the [ecosystemname_french] column value.
     *
     * @return string
     */
    public function getEcosystemnameFrench()
    {

        return $this->ecosystemname_french;
    }

    /**
     * Get the [ecosystemname_chinese] column value.
     *
     * @return string
     */
    public function getEcosystemnameChinese()
    {

        return $this->ecosystemname_chinese;
    }

    /**
     * Get the [ecosystemname_dutch] column value.
     *
     * @return string
     */
    public function getEcosystemnameDutch()
    {

        return $this->ecosystemname_dutch;
    }

    /**
     * Get the [ecosystemname_italian] column value.
     *
     * @return string
     */
    public function getEcosystemnameItalian()
    {

        return $this->ecosystemname_italian;
    }

    /**
     * Get the [ecosystemname_swedish] column value.
     *
     * @return string
     */
    public function getEcosystemnameSwedish()
    {

        return $this->ecosystemname_swedish;
    }

    /**
     * Get the [ecosystemname_greek_original] column value.
     *
     * @return string
     */
    public function getEcosystemnameGreekOriginal()
    {

        return $this->ecosystemname_greek_original;
    }

    /**
     * Get the [ecosystemname_greek] column value.
     *
     * @return string
     */
    public function getEcosystemnameGreek()
    {

        return $this->ecosystemname_greek;
    }

    /**
     * Get the [ecosystemname_portuguese] column value.
     *
     * @return string
     */
    public function getEcosystemnamePortuguese()
    {

        return $this->ecosystemname_portuguese;
    }

    /**
     * Get the [ecosystemname_spanish] column value.
     *
     * @return string
     */
    public function getEcosystemnameSpanish()
    {

        return $this->ecosystemname_spanish;
    }

    /**
     * Get the [ecosystemname_chinese_u] column value.
     *
     * @return string
     */
    public function getEcosystemnameChineseU()
    {

        return $this->ecosystemname_chinese_u;
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
     * Set the value of [e_code] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setECode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code !== $v) {
            $this->e_code = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::E_CODE;
        }


        return $this;
    } // setECode()

    /**
     * Set the value of [ecosystemname] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname !== $v) {
            $this->ecosystemname = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME;
        }


        return $this;
    } // setEcosystemname()

    /**
     * Set the value of [ecosystemtype] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemtype !== $v) {
            $this->ecosystemtype = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMTYPE;
        }


        return $this;
    } // setEcosystemtype()

    /**
     * Set the value of [e_code_large] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setECodeLarge($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code_large !== $v) {
            $this->e_code_large = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::E_CODE_LARGE;
        }


        return $this;
    } // setECodeLarge()

    /**
     * Set the value of [e_code_larger] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setECodeLarger($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->e_code_larger !== $v) {
            $this->e_code_larger = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::E_CODE_LARGER;
        }


        return $this;
    } // setECodeLarger()

    /**
     * Set the value of [ready] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setReady($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ready !== $v) {
            $this->ready = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::READY;
        }


        return $this;
    } // setReady()

    /**
     * Set the value of [othernames] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setOthernames($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othernames !== $v) {
            $this->othernames = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::OTHERNAMES;
        }


        return $this;
    } // setOthernames()

    /**
     * Set the value of [location] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLocation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->location !== $v) {
            $this->location = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::LOCATION;
        }


        return $this;
    } // setLocation()

    /**
     * Set the value of [locationmap] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLocationmap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locationmap !== $v) {
            $this->locationmap = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::LOCATIONMAP;
        }


        return $this;
    } // setLocationmap()

    /**
     * Set the value of [salinity] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Set the value of [riverlength] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setRiverlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->riverlength !== $v) {
            $this->riverlength = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::RIVERLENGTH;
        }


        return $this;
    } // setRiverlength()

    /**
     * Set the value of [area] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->area !== $v) {
            $this->area = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::AREA;
        }


        return $this;
    } // setArea()

    /**
     * Set the value of [sizeref] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setSizeref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sizeref !== $v) {
            $this->sizeref = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::SIZEREF;
        }


        return $this;
    } // setSizeref()

    /**
     * Set the value of [drainagearea] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setDrainagearea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->drainagearea !== $v) {
            $this->drainagearea = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::DRAINAGEAREA;
        }


        return $this;
    } // setDrainagearea()

    /**
     * Set the value of [northernlat] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setNorthernlat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernlat !== $v) {
            $this->northernlat = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::NORTHERNLAT;
        }


        return $this;
    } // setNorthernlat()

    /**
     * Set the value of [nrangens] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setNrangens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nrangens !== $v) {
            $this->nrangens = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::NRANGENS;
        }


        return $this;
    } // setNrangens()

    /**
     * Set the value of [southernlat] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setSouthernlat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southernlat !== $v) {
            $this->southernlat = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::SOUTHERNLAT;
        }


        return $this;
    } // setSouthernlat()

    /**
     * Set the value of [srangens] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setSrangens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->srangens !== $v) {
            $this->srangens = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::SRANGENS;
        }


        return $this;
    } // setSrangens()

    /**
     * Set the value of [westernlat] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setWesternlat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->westernlat !== $v) {
            $this->westernlat = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::WESTERNLAT;
        }


        return $this;
    } // setWesternlat()

    /**
     * Set the value of [wrangeew] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setWrangeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->wrangeew !== $v) {
            $this->wrangeew = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::WRANGEEW;
        }


        return $this;
    } // setWrangeew()

    /**
     * Set the value of [easternlat] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEasternlat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->easternlat !== $v) {
            $this->easternlat = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::EASTERNLAT;
        }


        return $this;
    } // setEasternlat()

    /**
     * Set the value of [erangeew] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setErangeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->erangeew !== $v) {
            $this->erangeew = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ERANGEEW;
        }


        return $this;
    } // setErangeew()

    /**
     * Set the value of [climate] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setClimate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->climate !== $v) {
            $this->climate = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::CLIMATE;
        }


        return $this;
    } // setClimate()

    /**
     * Set the value of [polar] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setPolar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->polar !== $v) {
            $this->polar = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::POLAR;
        }


        return $this;
    } // setPolar()

    /**
     * Set the value of [boreal] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setBoreal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boreal !== $v) {
            $this->boreal = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::BOREAL;
        }


        return $this;
    } // setBoreal()

    /**
     * Set the value of [temperate] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTemperate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->temperate !== $v) {
            $this->temperate = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TEMPERATE;
        }


        return $this;
    } // setTemperate()

    /**
     * Set the value of [subtropical] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setSubtropical($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->subtropical !== $v) {
            $this->subtropical = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::SUBTROPICAL;
        }


        return $this;
    } // setSubtropical()

    /**
     * Set the value of [tropical] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTropical($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tropical !== $v) {
            $this->tropical = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TROPICAL;
        }


        return $this;
    } // setTropical()

    /**
     * Set the value of [averagedepth] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setAveragedepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->averagedepth !== $v) {
            $this->averagedepth = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::AVERAGEDEPTH;
        }


        return $this;
    } // setAveragedepth()

    /**
     * Set the value of [maxdepth] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setMaxdepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxdepth !== $v) {
            $this->maxdepth = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::MAXDEPTH;
        }


        return $this;
    } // setMaxdepth()

    /**
     * Set the value of [depthref] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setDepthref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthref !== $v) {
            $this->depthref = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::DEPTHREF;
        }


        return $this;
    } // setDepthref()

    /**
     * Set the value of [tempsurface] column.
     *
     * @param  double $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTempsurface($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempsurface !== $v) {
            $this->tempsurface = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TEMPSURFACE;
        }


        return $this;
    } // setTempsurface()

    /**
     * Set the value of [tempsurfacemap] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTempsurfacemap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tempsurfacemap !== $v) {
            $this->tempsurfacemap = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TEMPSURFACEMAP;
        }


        return $this;
    } // setTempsurfacemap()

    /**
     * Set the value of [tempdepth] column.
     *
     * @param  double $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTempdepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempdepth !== $v) {
            $this->tempdepth = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TEMPDEPTH;
        }


        return $this;
    } // setTempdepth()

    /**
     * Set the value of [tempdepthmap] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTempdepthmap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tempdepthmap !== $v) {
            $this->tempdepthmap = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TEMPDEPTHMAP;
        }


        return $this;
    } // setTempdepthmap()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [totalcount] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTotalcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalcount !== $v) {
            $this->totalcount = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TOTALCOUNT;
        }


        return $this;
    } // setTotalcount()

    /**
     * Set the value of [totalfamcount] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTotalfamcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalfamcount !== $v) {
            $this->totalfamcount = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TOTALFAMCOUNT;
        }


        return $this;
    } // setTotalfamcount()

    /**
     * Set the value of [totalcomplete] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTotalcomplete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalcomplete !== $v) {
            $this->totalcomplete = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TOTALCOMPLETE;
        }


        return $this;
    } // setTotalcomplete()

    /**
     * Set the value of [totallit] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTotallit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totallit !== $v) {
            $this->totallit = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TOTALLIT;
        }


        return $this;
    } // setTotallit()

    /**
     * Set the value of [totalfamlit] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTotalfamlit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalfamlit !== $v) {
            $this->totalfamlit = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TOTALFAMLIT;
        }


        return $this;
    } // setTotalfamlit()

    /**
     * Set the value of [totalref] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTotalref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalref !== $v) {
            $this->totalref = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::TOTALREF;
        }


        return $this;
    } // setTotalref()

    /**
     * Set the value of [useflag] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setUseflag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->useflag !== $v) {
            $this->useflag = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::USEFLAG;
        }


        return $this;
    } // setUseflag()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Sets the value of [lastupdate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLastupdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastupdate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastupdate !== null && $tmpDt = new DateTime($this->lastupdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastupdate = $newDateAsString;
                $this->modifiedColumns[] = EcosystemrefPeer::LASTUPDATE;
            }
        } // if either are not null


        return $this;
    } // setLastupdate()

    /**
     * Set the value of [latdegfill] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLatdegfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdegfill !== $v) {
            $this->latdegfill = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::LATDEGFILL;
        }


        return $this;
    } // setLatdegfill()

    /**
     * Set the value of [latminfill] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLatminfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latminfill !== $v) {
            $this->latminfill = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::LATMINFILL;
        }


        return $this;
    } // setLatminfill()

    /**
     * Set the value of [northsouthfill] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setNorthsouthfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthfill !== $v) {
            $this->northsouthfill = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::NORTHSOUTHFILL;
        }


        return $this;
    } // setNorthsouthfill()

    /**
     * Set the value of [longdegfill] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLongdegfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdegfill !== $v) {
            $this->longdegfill = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::LONGDEGFILL;
        }


        return $this;
    } // setLongdegfill()

    /**
     * Set the value of [longminfill] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setLongminfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longminfill !== $v) {
            $this->longminfill = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::LONGMINFILL;
        }


        return $this;
    } // setLongminfill()

    /**
     * Set the value of [eastwestfill] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEastwestfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwestfill !== $v) {
            $this->eastwestfill = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::EASTWESTFILL;
        }


        return $this;
    } // setEastwestfill()

    /**
     * Set the value of [ecosystemurl1] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemurl1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemurl1 !== $v) {
            $this->ecosystemurl1 = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMURL1;
        }


        return $this;
    } // setEcosystemurl1()

    /**
     * Set the value of [ecosystemurl2] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemurl2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemurl2 !== $v) {
            $this->ecosystemurl2 = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMURL2;
        }


        return $this;
    } // setEcosystemurl2()

    /**
     * Set the value of [ecosystemurl3] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemurl3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemurl3 !== $v) {
            $this->ecosystemurl3 = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMURL3;
        }


        return $this;
    } // setEcosystemurl3()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = EcosystemrefPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = EcosystemrefPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = EcosystemrefPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [ecosystemname_german] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameGerman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_german !== $v) {
            $this->ecosystemname_german = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_GERMAN;
        }


        return $this;
    } // setEcosystemnameGerman()

    /**
     * Set the value of [ecosystemname_russian_original] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameRussianOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_russian_original !== $v) {
            $this->ecosystemname_russian_original = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL;
        }


        return $this;
    } // setEcosystemnameRussianOriginal()

    /**
     * Set the value of [ecosystemname_russian] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_russian !== $v) {
            $this->ecosystemname_russian = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN;
        }


        return $this;
    } // setEcosystemnameRussian()

    /**
     * Set the value of [ecosystemname_french] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameFrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_french !== $v) {
            $this->ecosystemname_french = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_FRENCH;
        }


        return $this;
    } // setEcosystemnameFrench()

    /**
     * Set the value of [ecosystemname_chinese] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameChinese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_chinese !== $v) {
            $this->ecosystemname_chinese = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_CHINESE;
        }


        return $this;
    } // setEcosystemnameChinese()

    /**
     * Set the value of [ecosystemname_dutch] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameDutch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_dutch !== $v) {
            $this->ecosystemname_dutch = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_DUTCH;
        }


        return $this;
    } // setEcosystemnameDutch()

    /**
     * Set the value of [ecosystemname_italian] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameItalian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_italian !== $v) {
            $this->ecosystemname_italian = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN;
        }


        return $this;
    } // setEcosystemnameItalian()

    /**
     * Set the value of [ecosystemname_swedish] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameSwedish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_swedish !== $v) {
            $this->ecosystemname_swedish = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH;
        }


        return $this;
    } // setEcosystemnameSwedish()

    /**
     * Set the value of [ecosystemname_greek_original] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameGreekOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_greek_original !== $v) {
            $this->ecosystemname_greek_original = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL;
        }


        return $this;
    } // setEcosystemnameGreekOriginal()

    /**
     * Set the value of [ecosystemname_greek] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameGreek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_greek !== $v) {
            $this->ecosystemname_greek = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_GREEK;
        }


        return $this;
    } // setEcosystemnameGreek()

    /**
     * Set the value of [ecosystemname_portuguese] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnamePortuguese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_portuguese !== $v) {
            $this->ecosystemname_portuguese = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE;
        }


        return $this;
    } // setEcosystemnamePortuguese()

    /**
     * Set the value of [ecosystemname_spanish] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameSpanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_spanish !== $v) {
            $this->ecosystemname_spanish = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_SPANISH;
        }


        return $this;
    } // setEcosystemnameSpanish()

    /**
     * Set the value of [ecosystemname_chinese_u] column.
     *
     * @param  string $v new value
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setEcosystemnameChineseU($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecosystemname_chinese_u !== $v) {
            $this->ecosystemname_chinese_u = $v;
            $this->modifiedColumns[] = EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U;
        }


        return $this;
    } // setEcosystemnameChineseU()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecosystemref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = EcosystemrefPeer::TS;
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

            $this->e_code = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ecosystemname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->ecosystemtype = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->e_code_large = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->e_code_larger = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->ready = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->othernames = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->location = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->locationmap = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->salinity = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->riverlength = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->area = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->sizeref = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->drainagearea = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->northernlat = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->nrangens = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->southernlat = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->srangens = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->westernlat = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->wrangeew = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->easternlat = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->erangeew = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->climate = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->polar = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->boreal = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->temperate = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->subtropical = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->tropical = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->averagedepth = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->maxdepth = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->depthref = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->tempsurface = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->tempsurfacemap = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->tempdepth = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->tempdepthmap = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->description = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->totalcount = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->totalfamcount = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->totalcomplete = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->totallit = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->totalfamlit = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->totalref = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->useflag = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->comments = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->remarks = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->lastupdate = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->latdegfill = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->latminfill = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->northsouthfill = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->longdegfill = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->longminfill = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->eastwestfill = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ecosystemurl1 = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->ecosystemurl2 = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->ecosystemurl3 = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->entered = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->dateentered = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->modified = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->datemodified = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->expert = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->datechecked = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->ecosystemname_german = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->ecosystemname_russian_original = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->ecosystemname_russian = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->ecosystemname_french = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->ecosystemname_chinese = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->ecosystemname_dutch = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->ecosystemname_italian = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->ecosystemname_swedish = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->ecosystemname_greek_original = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->ecosystemname_greek = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->ecosystemname_portuguese = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->ecosystemname_spanish = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->ecosystemname_chinese_u = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->ts = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 75; // 75 = EcosystemrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ecosystemref object", $e);
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
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EcosystemrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EcosystemrefQuery::create()
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
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EcosystemrefPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(EcosystemrefPeer::E_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemType`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::E_CODE_LARGE)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE_Large`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::E_CODE_LARGER)) {
            $modifiedColumns[':p' . $index++]  = '`E_CODE_Larger`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::READY)) {
            $modifiedColumns[':p' . $index++]  = '`Ready`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::OTHERNAMES)) {
            $modifiedColumns[':p' . $index++]  = '`OtherNames`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`Location`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LOCATIONMAP)) {
            $modifiedColumns[':p' . $index++]  = '`LocationMap`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::RIVERLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`RiverLength`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::AREA)) {
            $modifiedColumns[':p' . $index++]  = '`Area`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::SIZEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SizeRef`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::DRAINAGEAREA)) {
            $modifiedColumns[':p' . $index++]  = '`DrainageArea`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::NORTHERNLAT)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLat`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::NRANGENS)) {
            $modifiedColumns[':p' . $index++]  = '`NrangeNS`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::SOUTHERNLAT)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLat`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::SRANGENS)) {
            $modifiedColumns[':p' . $index++]  = '`SrangeNS`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::WESTERNLAT)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLat`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::WRANGEEW)) {
            $modifiedColumns[':p' . $index++]  = '`WrangeEW`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::EASTERNLAT)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLat`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ERANGEEW)) {
            $modifiedColumns[':p' . $index++]  = '`ErangeEW`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::CLIMATE)) {
            $modifiedColumns[':p' . $index++]  = '`Climate`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::POLAR)) {
            $modifiedColumns[':p' . $index++]  = '`Polar`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::BOREAL)) {
            $modifiedColumns[':p' . $index++]  = '`Boreal`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TEMPERATE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperate`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::SUBTROPICAL)) {
            $modifiedColumns[':p' . $index++]  = '`Subtropical`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TROPICAL)) {
            $modifiedColumns[':p' . $index++]  = '`Tropical`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::AVERAGEDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`AverageDepth`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::MAXDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`MaxDepth`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::DEPTHREF)) {
            $modifiedColumns[':p' . $index++]  = '`DepthRef`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TEMPSURFACE)) {
            $modifiedColumns[':p' . $index++]  = '`TempSurface`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TEMPSURFACEMAP)) {
            $modifiedColumns[':p' . $index++]  = '`TempSurfaceMap`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TEMPDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`TempDepth`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TEMPDEPTHMAP)) {
            $modifiedColumns[':p' . $index++]  = '`TempDepthMap`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`Description`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TOTALCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalCount`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TOTALFAMCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalFamCount`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TOTALCOMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`TotalComplete`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TOTALLIT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalLit`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TOTALFAMLIT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalFamLit`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TOTALREF)) {
            $modifiedColumns[':p' . $index++]  = '`TotalRef`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::USEFLAG)) {
            $modifiedColumns[':p' . $index++]  = '`UseFlag`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LASTUPDATE)) {
            $modifiedColumns[':p' . $index++]  = '`LastUpdate`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LATDEGFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LatDegFill`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LATMINFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LatMinFill`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::NORTHSOUTHFILL)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthFill`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LONGDEGFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LongDegFill`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::LONGMINFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LongMinFill`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::EASTWESTFILL)) {
            $modifiedColumns[':p' . $index++]  = '`EastWestFill`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMURL1)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemURL1`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMURL2)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemURL2`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMURL3)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemURL3`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_GERMAN)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_German`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Russian_original`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Russian`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_FRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_French`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Chinese`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_DUTCH)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Dutch`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Italian`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Swedish`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Greek_original`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_GREEK)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Greek`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Portuguese`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_SPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Spanish`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U)) {
            $modifiedColumns[':p' . $index++]  = '`EcosystemName_Chinese_u`';
        }
        if ($this->isColumnModified(EcosystemrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `ecosystemref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`E_CODE`':
                        $stmt->bindValue($identifier, $this->e_code, PDO::PARAM_INT);
                        break;
                    case '`EcosystemName`':
                        $stmt->bindValue($identifier, $this->ecosystemname, PDO::PARAM_STR);
                        break;
                    case '`EcosystemType`':
                        $stmt->bindValue($identifier, $this->ecosystemtype, PDO::PARAM_STR);
                        break;
                    case '`E_CODE_Large`':
                        $stmt->bindValue($identifier, $this->e_code_large, PDO::PARAM_INT);
                        break;
                    case '`E_CODE_Larger`':
                        $stmt->bindValue($identifier, $this->e_code_larger, PDO::PARAM_INT);
                        break;
                    case '`Ready`':
                        $stmt->bindValue($identifier, $this->ready, PDO::PARAM_INT);
                        break;
                    case '`OtherNames`':
                        $stmt->bindValue($identifier, $this->othernames, PDO::PARAM_STR);
                        break;
                    case '`Location`':
                        $stmt->bindValue($identifier, $this->location, PDO::PARAM_STR);
                        break;
                    case '`LocationMap`':
                        $stmt->bindValue($identifier, $this->locationmap, PDO::PARAM_STR);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_STR);
                        break;
                    case '`RiverLength`':
                        $stmt->bindValue($identifier, $this->riverlength, PDO::PARAM_INT);
                        break;
                    case '`Area`':
                        $stmt->bindValue($identifier, $this->area, PDO::PARAM_INT);
                        break;
                    case '`SizeRef`':
                        $stmt->bindValue($identifier, $this->sizeref, PDO::PARAM_INT);
                        break;
                    case '`DrainageArea`':
                        $stmt->bindValue($identifier, $this->drainagearea, PDO::PARAM_INT);
                        break;
                    case '`NorthernLat`':
                        $stmt->bindValue($identifier, $this->northernlat, PDO::PARAM_INT);
                        break;
                    case '`NrangeNS`':
                        $stmt->bindValue($identifier, $this->nrangens, PDO::PARAM_STR);
                        break;
                    case '`SouthernLat`':
                        $stmt->bindValue($identifier, $this->southernlat, PDO::PARAM_INT);
                        break;
                    case '`SrangeNS`':
                        $stmt->bindValue($identifier, $this->srangens, PDO::PARAM_STR);
                        break;
                    case '`WesternLat`':
                        $stmt->bindValue($identifier, $this->westernlat, PDO::PARAM_INT);
                        break;
                    case '`WrangeEW`':
                        $stmt->bindValue($identifier, $this->wrangeew, PDO::PARAM_STR);
                        break;
                    case '`EasternLat`':
                        $stmt->bindValue($identifier, $this->easternlat, PDO::PARAM_INT);
                        break;
                    case '`ErangeEW`':
                        $stmt->bindValue($identifier, $this->erangeew, PDO::PARAM_STR);
                        break;
                    case '`Climate`':
                        $stmt->bindValue($identifier, $this->climate, PDO::PARAM_STR);
                        break;
                    case '`Polar`':
                        $stmt->bindValue($identifier, $this->polar, PDO::PARAM_INT);
                        break;
                    case '`Boreal`':
                        $stmt->bindValue($identifier, $this->boreal, PDO::PARAM_INT);
                        break;
                    case '`Temperate`':
                        $stmt->bindValue($identifier, $this->temperate, PDO::PARAM_INT);
                        break;
                    case '`Subtropical`':
                        $stmt->bindValue($identifier, $this->subtropical, PDO::PARAM_INT);
                        break;
                    case '`Tropical`':
                        $stmt->bindValue($identifier, $this->tropical, PDO::PARAM_INT);
                        break;
                    case '`AverageDepth`':
                        $stmt->bindValue($identifier, $this->averagedepth, PDO::PARAM_INT);
                        break;
                    case '`MaxDepth`':
                        $stmt->bindValue($identifier, $this->maxdepth, PDO::PARAM_INT);
                        break;
                    case '`DepthRef`':
                        $stmt->bindValue($identifier, $this->depthref, PDO::PARAM_INT);
                        break;
                    case '`TempSurface`':
                        $stmt->bindValue($identifier, $this->tempsurface, PDO::PARAM_STR);
                        break;
                    case '`TempSurfaceMap`':
                        $stmt->bindValue($identifier, $this->tempsurfacemap, PDO::PARAM_STR);
                        break;
                    case '`TempDepth`':
                        $stmt->bindValue($identifier, $this->tempdepth, PDO::PARAM_STR);
                        break;
                    case '`TempDepthMap`':
                        $stmt->bindValue($identifier, $this->tempdepthmap, PDO::PARAM_STR);
                        break;
                    case '`Description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`TotalCount`':
                        $stmt->bindValue($identifier, $this->totalcount, PDO::PARAM_INT);
                        break;
                    case '`TotalFamCount`':
                        $stmt->bindValue($identifier, $this->totalfamcount, PDO::PARAM_INT);
                        break;
                    case '`TotalComplete`':
                        $stmt->bindValue($identifier, $this->totalcomplete, PDO::PARAM_INT);
                        break;
                    case '`TotalLit`':
                        $stmt->bindValue($identifier, $this->totallit, PDO::PARAM_INT);
                        break;
                    case '`TotalFamLit`':
                        $stmt->bindValue($identifier, $this->totalfamlit, PDO::PARAM_INT);
                        break;
                    case '`TotalRef`':
                        $stmt->bindValue($identifier, $this->totalref, PDO::PARAM_INT);
                        break;
                    case '`UseFlag`':
                        $stmt->bindValue($identifier, $this->useflag, PDO::PARAM_INT);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`LastUpdate`':
                        $stmt->bindValue($identifier, $this->lastupdate, PDO::PARAM_STR);
                        break;
                    case '`LatDegFill`':
                        $stmt->bindValue($identifier, $this->latdegfill, PDO::PARAM_INT);
                        break;
                    case '`LatMinFill`':
                        $stmt->bindValue($identifier, $this->latminfill, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthFill`':
                        $stmt->bindValue($identifier, $this->northsouthfill, PDO::PARAM_STR);
                        break;
                    case '`LongDegFill`':
                        $stmt->bindValue($identifier, $this->longdegfill, PDO::PARAM_INT);
                        break;
                    case '`LongMinFill`':
                        $stmt->bindValue($identifier, $this->longminfill, PDO::PARAM_INT);
                        break;
                    case '`EastWestFill`':
                        $stmt->bindValue($identifier, $this->eastwestfill, PDO::PARAM_STR);
                        break;
                    case '`EcosystemURL1`':
                        $stmt->bindValue($identifier, $this->ecosystemurl1, PDO::PARAM_STR);
                        break;
                    case '`EcosystemURL2`':
                        $stmt->bindValue($identifier, $this->ecosystemurl2, PDO::PARAM_STR);
                        break;
                    case '`EcosystemURL3`':
                        $stmt->bindValue($identifier, $this->ecosystemurl3, PDO::PARAM_STR);
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
                    case '`EcosystemName_German`':
                        $stmt->bindValue($identifier, $this->ecosystemname_german, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Russian_original`':
                        $stmt->bindValue($identifier, $this->ecosystemname_russian_original, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Russian`':
                        $stmt->bindValue($identifier, $this->ecosystemname_russian, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_French`':
                        $stmt->bindValue($identifier, $this->ecosystemname_french, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Chinese`':
                        $stmt->bindValue($identifier, $this->ecosystemname_chinese, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Dutch`':
                        $stmt->bindValue($identifier, $this->ecosystemname_dutch, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Italian`':
                        $stmt->bindValue($identifier, $this->ecosystemname_italian, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Swedish`':
                        $stmt->bindValue($identifier, $this->ecosystemname_swedish, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Greek_original`':
                        $stmt->bindValue($identifier, $this->ecosystemname_greek_original, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Greek`':
                        $stmt->bindValue($identifier, $this->ecosystemname_greek, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Portuguese`':
                        $stmt->bindValue($identifier, $this->ecosystemname_portuguese, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Spanish`':
                        $stmt->bindValue($identifier, $this->ecosystemname_spanish, PDO::PARAM_STR);
                        break;
                    case '`EcosystemName_Chinese_u`':
                        $stmt->bindValue($identifier, $this->ecosystemname_chinese_u, PDO::PARAM_STR);
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


            if (($retval = EcosystemrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EcosystemrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getECode();
                break;
            case 1:
                return $this->getEcosystemname();
                break;
            case 2:
                return $this->getEcosystemtype();
                break;
            case 3:
                return $this->getECodeLarge();
                break;
            case 4:
                return $this->getECodeLarger();
                break;
            case 5:
                return $this->getReady();
                break;
            case 6:
                return $this->getOthernames();
                break;
            case 7:
                return $this->getLocation();
                break;
            case 8:
                return $this->getLocationmap();
                break;
            case 9:
                return $this->getSalinity();
                break;
            case 10:
                return $this->getRiverlength();
                break;
            case 11:
                return $this->getArea();
                break;
            case 12:
                return $this->getSizeref();
                break;
            case 13:
                return $this->getDrainagearea();
                break;
            case 14:
                return $this->getNorthernlat();
                break;
            case 15:
                return $this->getNrangens();
                break;
            case 16:
                return $this->getSouthernlat();
                break;
            case 17:
                return $this->getSrangens();
                break;
            case 18:
                return $this->getWesternlat();
                break;
            case 19:
                return $this->getWrangeew();
                break;
            case 20:
                return $this->getEasternlat();
                break;
            case 21:
                return $this->getErangeew();
                break;
            case 22:
                return $this->getClimate();
                break;
            case 23:
                return $this->getPolar();
                break;
            case 24:
                return $this->getBoreal();
                break;
            case 25:
                return $this->getTemperate();
                break;
            case 26:
                return $this->getSubtropical();
                break;
            case 27:
                return $this->getTropical();
                break;
            case 28:
                return $this->getAveragedepth();
                break;
            case 29:
                return $this->getMaxdepth();
                break;
            case 30:
                return $this->getDepthref();
                break;
            case 31:
                return $this->getTempsurface();
                break;
            case 32:
                return $this->getTempsurfacemap();
                break;
            case 33:
                return $this->getTempdepth();
                break;
            case 34:
                return $this->getTempdepthmap();
                break;
            case 35:
                return $this->getDescription();
                break;
            case 36:
                return $this->getTotalcount();
                break;
            case 37:
                return $this->getTotalfamcount();
                break;
            case 38:
                return $this->getTotalcomplete();
                break;
            case 39:
                return $this->getTotallit();
                break;
            case 40:
                return $this->getTotalfamlit();
                break;
            case 41:
                return $this->getTotalref();
                break;
            case 42:
                return $this->getUseflag();
                break;
            case 43:
                return $this->getComments();
                break;
            case 44:
                return $this->getRemarks();
                break;
            case 45:
                return $this->getLastupdate();
                break;
            case 46:
                return $this->getLatdegfill();
                break;
            case 47:
                return $this->getLatminfill();
                break;
            case 48:
                return $this->getNorthsouthfill();
                break;
            case 49:
                return $this->getLongdegfill();
                break;
            case 50:
                return $this->getLongminfill();
                break;
            case 51:
                return $this->getEastwestfill();
                break;
            case 52:
                return $this->getEcosystemurl1();
                break;
            case 53:
                return $this->getEcosystemurl2();
                break;
            case 54:
                return $this->getEcosystemurl3();
                break;
            case 55:
                return $this->getEntered();
                break;
            case 56:
                return $this->getDateentered();
                break;
            case 57:
                return $this->getModified();
                break;
            case 58:
                return $this->getDatemodified();
                break;
            case 59:
                return $this->getExpert();
                break;
            case 60:
                return $this->getDatechecked();
                break;
            case 61:
                return $this->getEcosystemnameGerman();
                break;
            case 62:
                return $this->getEcosystemnameRussianOriginal();
                break;
            case 63:
                return $this->getEcosystemnameRussian();
                break;
            case 64:
                return $this->getEcosystemnameFrench();
                break;
            case 65:
                return $this->getEcosystemnameChinese();
                break;
            case 66:
                return $this->getEcosystemnameDutch();
                break;
            case 67:
                return $this->getEcosystemnameItalian();
                break;
            case 68:
                return $this->getEcosystemnameSwedish();
                break;
            case 69:
                return $this->getEcosystemnameGreekOriginal();
                break;
            case 70:
                return $this->getEcosystemnameGreek();
                break;
            case 71:
                return $this->getEcosystemnamePortuguese();
                break;
            case 72:
                return $this->getEcosystemnameSpanish();
                break;
            case 73:
                return $this->getEcosystemnameChineseU();
                break;
            case 74:
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
        if (isset($alreadyDumpedObjects['Ecosystemref'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ecosystemref'][$this->getPrimaryKey()] = true;
        $keys = EcosystemrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getECode(),
            $keys[1] => $this->getEcosystemname(),
            $keys[2] => $this->getEcosystemtype(),
            $keys[3] => $this->getECodeLarge(),
            $keys[4] => $this->getECodeLarger(),
            $keys[5] => $this->getReady(),
            $keys[6] => $this->getOthernames(),
            $keys[7] => $this->getLocation(),
            $keys[8] => $this->getLocationmap(),
            $keys[9] => $this->getSalinity(),
            $keys[10] => $this->getRiverlength(),
            $keys[11] => $this->getArea(),
            $keys[12] => $this->getSizeref(),
            $keys[13] => $this->getDrainagearea(),
            $keys[14] => $this->getNorthernlat(),
            $keys[15] => $this->getNrangens(),
            $keys[16] => $this->getSouthernlat(),
            $keys[17] => $this->getSrangens(),
            $keys[18] => $this->getWesternlat(),
            $keys[19] => $this->getWrangeew(),
            $keys[20] => $this->getEasternlat(),
            $keys[21] => $this->getErangeew(),
            $keys[22] => $this->getClimate(),
            $keys[23] => $this->getPolar(),
            $keys[24] => $this->getBoreal(),
            $keys[25] => $this->getTemperate(),
            $keys[26] => $this->getSubtropical(),
            $keys[27] => $this->getTropical(),
            $keys[28] => $this->getAveragedepth(),
            $keys[29] => $this->getMaxdepth(),
            $keys[30] => $this->getDepthref(),
            $keys[31] => $this->getTempsurface(),
            $keys[32] => $this->getTempsurfacemap(),
            $keys[33] => $this->getTempdepth(),
            $keys[34] => $this->getTempdepthmap(),
            $keys[35] => $this->getDescription(),
            $keys[36] => $this->getTotalcount(),
            $keys[37] => $this->getTotalfamcount(),
            $keys[38] => $this->getTotalcomplete(),
            $keys[39] => $this->getTotallit(),
            $keys[40] => $this->getTotalfamlit(),
            $keys[41] => $this->getTotalref(),
            $keys[42] => $this->getUseflag(),
            $keys[43] => $this->getComments(),
            $keys[44] => $this->getRemarks(),
            $keys[45] => $this->getLastupdate(),
            $keys[46] => $this->getLatdegfill(),
            $keys[47] => $this->getLatminfill(),
            $keys[48] => $this->getNorthsouthfill(),
            $keys[49] => $this->getLongdegfill(),
            $keys[50] => $this->getLongminfill(),
            $keys[51] => $this->getEastwestfill(),
            $keys[52] => $this->getEcosystemurl1(),
            $keys[53] => $this->getEcosystemurl2(),
            $keys[54] => $this->getEcosystemurl3(),
            $keys[55] => $this->getEntered(),
            $keys[56] => $this->getDateentered(),
            $keys[57] => $this->getModified(),
            $keys[58] => $this->getDatemodified(),
            $keys[59] => $this->getExpert(),
            $keys[60] => $this->getDatechecked(),
            $keys[61] => $this->getEcosystemnameGerman(),
            $keys[62] => $this->getEcosystemnameRussianOriginal(),
            $keys[63] => $this->getEcosystemnameRussian(),
            $keys[64] => $this->getEcosystemnameFrench(),
            $keys[65] => $this->getEcosystemnameChinese(),
            $keys[66] => $this->getEcosystemnameDutch(),
            $keys[67] => $this->getEcosystemnameItalian(),
            $keys[68] => $this->getEcosystemnameSwedish(),
            $keys[69] => $this->getEcosystemnameGreekOriginal(),
            $keys[70] => $this->getEcosystemnameGreek(),
            $keys[71] => $this->getEcosystemnamePortuguese(),
            $keys[72] => $this->getEcosystemnameSpanish(),
            $keys[73] => $this->getEcosystemnameChineseU(),
            $keys[74] => $this->getTs(),
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
        $pos = EcosystemrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setECode($value);
                break;
            case 1:
                $this->setEcosystemname($value);
                break;
            case 2:
                $this->setEcosystemtype($value);
                break;
            case 3:
                $this->setECodeLarge($value);
                break;
            case 4:
                $this->setECodeLarger($value);
                break;
            case 5:
                $this->setReady($value);
                break;
            case 6:
                $this->setOthernames($value);
                break;
            case 7:
                $this->setLocation($value);
                break;
            case 8:
                $this->setLocationmap($value);
                break;
            case 9:
                $this->setSalinity($value);
                break;
            case 10:
                $this->setRiverlength($value);
                break;
            case 11:
                $this->setArea($value);
                break;
            case 12:
                $this->setSizeref($value);
                break;
            case 13:
                $this->setDrainagearea($value);
                break;
            case 14:
                $this->setNorthernlat($value);
                break;
            case 15:
                $this->setNrangens($value);
                break;
            case 16:
                $this->setSouthernlat($value);
                break;
            case 17:
                $this->setSrangens($value);
                break;
            case 18:
                $this->setWesternlat($value);
                break;
            case 19:
                $this->setWrangeew($value);
                break;
            case 20:
                $this->setEasternlat($value);
                break;
            case 21:
                $this->setErangeew($value);
                break;
            case 22:
                $this->setClimate($value);
                break;
            case 23:
                $this->setPolar($value);
                break;
            case 24:
                $this->setBoreal($value);
                break;
            case 25:
                $this->setTemperate($value);
                break;
            case 26:
                $this->setSubtropical($value);
                break;
            case 27:
                $this->setTropical($value);
                break;
            case 28:
                $this->setAveragedepth($value);
                break;
            case 29:
                $this->setMaxdepth($value);
                break;
            case 30:
                $this->setDepthref($value);
                break;
            case 31:
                $this->setTempsurface($value);
                break;
            case 32:
                $this->setTempsurfacemap($value);
                break;
            case 33:
                $this->setTempdepth($value);
                break;
            case 34:
                $this->setTempdepthmap($value);
                break;
            case 35:
                $this->setDescription($value);
                break;
            case 36:
                $this->setTotalcount($value);
                break;
            case 37:
                $this->setTotalfamcount($value);
                break;
            case 38:
                $this->setTotalcomplete($value);
                break;
            case 39:
                $this->setTotallit($value);
                break;
            case 40:
                $this->setTotalfamlit($value);
                break;
            case 41:
                $this->setTotalref($value);
                break;
            case 42:
                $this->setUseflag($value);
                break;
            case 43:
                $this->setComments($value);
                break;
            case 44:
                $this->setRemarks($value);
                break;
            case 45:
                $this->setLastupdate($value);
                break;
            case 46:
                $this->setLatdegfill($value);
                break;
            case 47:
                $this->setLatminfill($value);
                break;
            case 48:
                $this->setNorthsouthfill($value);
                break;
            case 49:
                $this->setLongdegfill($value);
                break;
            case 50:
                $this->setLongminfill($value);
                break;
            case 51:
                $this->setEastwestfill($value);
                break;
            case 52:
                $this->setEcosystemurl1($value);
                break;
            case 53:
                $this->setEcosystemurl2($value);
                break;
            case 54:
                $this->setEcosystemurl3($value);
                break;
            case 55:
                $this->setEntered($value);
                break;
            case 56:
                $this->setDateentered($value);
                break;
            case 57:
                $this->setModified($value);
                break;
            case 58:
                $this->setDatemodified($value);
                break;
            case 59:
                $this->setExpert($value);
                break;
            case 60:
                $this->setDatechecked($value);
                break;
            case 61:
                $this->setEcosystemnameGerman($value);
                break;
            case 62:
                $this->setEcosystemnameRussianOriginal($value);
                break;
            case 63:
                $this->setEcosystemnameRussian($value);
                break;
            case 64:
                $this->setEcosystemnameFrench($value);
                break;
            case 65:
                $this->setEcosystemnameChinese($value);
                break;
            case 66:
                $this->setEcosystemnameDutch($value);
                break;
            case 67:
                $this->setEcosystemnameItalian($value);
                break;
            case 68:
                $this->setEcosystemnameSwedish($value);
                break;
            case 69:
                $this->setEcosystemnameGreekOriginal($value);
                break;
            case 70:
                $this->setEcosystemnameGreek($value);
                break;
            case 71:
                $this->setEcosystemnamePortuguese($value);
                break;
            case 72:
                $this->setEcosystemnameSpanish($value);
                break;
            case 73:
                $this->setEcosystemnameChineseU($value);
                break;
            case 74:
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
        $keys = EcosystemrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setECode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEcosystemname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEcosystemtype($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setECodeLarge($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setECodeLarger($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setReady($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOthernames($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLocation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLocationmap($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSalinity($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRiverlength($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setArea($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSizeref($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDrainagearea($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNorthernlat($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNrangens($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSouthernlat($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSrangens($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setWesternlat($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setWrangeew($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEasternlat($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setErangeew($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setClimate($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPolar($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setBoreal($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTemperate($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSubtropical($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTropical($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAveragedepth($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setMaxdepth($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDepthref($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTempsurface($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTempsurfacemap($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTempdepth($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTempdepthmap($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDescription($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTotalcount($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTotalfamcount($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTotalcomplete($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTotallit($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTotalfamlit($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTotalref($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setUseflag($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setComments($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setRemarks($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setLastupdate($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setLatdegfill($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setLatminfill($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setNorthsouthfill($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setLongdegfill($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setLongminfill($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setEastwestfill($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setEcosystemurl1($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setEcosystemurl2($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setEcosystemurl3($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setEntered($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDateentered($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setModified($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDatemodified($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setExpert($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setDatechecked($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setEcosystemnameGerman($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setEcosystemnameRussianOriginal($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setEcosystemnameRussian($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setEcosystemnameFrench($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setEcosystemnameChinese($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setEcosystemnameDutch($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setEcosystemnameItalian($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setEcosystemnameSwedish($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setEcosystemnameGreekOriginal($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setEcosystemnameGreek($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setEcosystemnamePortuguese($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setEcosystemnameSpanish($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setEcosystemnameChineseU($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setTs($arr[$keys[74]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EcosystemrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(EcosystemrefPeer::E_CODE)) $criteria->add(EcosystemrefPeer::E_CODE, $this->e_code);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME, $this->ecosystemname);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMTYPE)) $criteria->add(EcosystemrefPeer::ECOSYSTEMTYPE, $this->ecosystemtype);
        if ($this->isColumnModified(EcosystemrefPeer::E_CODE_LARGE)) $criteria->add(EcosystemrefPeer::E_CODE_LARGE, $this->e_code_large);
        if ($this->isColumnModified(EcosystemrefPeer::E_CODE_LARGER)) $criteria->add(EcosystemrefPeer::E_CODE_LARGER, $this->e_code_larger);
        if ($this->isColumnModified(EcosystemrefPeer::READY)) $criteria->add(EcosystemrefPeer::READY, $this->ready);
        if ($this->isColumnModified(EcosystemrefPeer::OTHERNAMES)) $criteria->add(EcosystemrefPeer::OTHERNAMES, $this->othernames);
        if ($this->isColumnModified(EcosystemrefPeer::LOCATION)) $criteria->add(EcosystemrefPeer::LOCATION, $this->location);
        if ($this->isColumnModified(EcosystemrefPeer::LOCATIONMAP)) $criteria->add(EcosystemrefPeer::LOCATIONMAP, $this->locationmap);
        if ($this->isColumnModified(EcosystemrefPeer::SALINITY)) $criteria->add(EcosystemrefPeer::SALINITY, $this->salinity);
        if ($this->isColumnModified(EcosystemrefPeer::RIVERLENGTH)) $criteria->add(EcosystemrefPeer::RIVERLENGTH, $this->riverlength);
        if ($this->isColumnModified(EcosystemrefPeer::AREA)) $criteria->add(EcosystemrefPeer::AREA, $this->area);
        if ($this->isColumnModified(EcosystemrefPeer::SIZEREF)) $criteria->add(EcosystemrefPeer::SIZEREF, $this->sizeref);
        if ($this->isColumnModified(EcosystemrefPeer::DRAINAGEAREA)) $criteria->add(EcosystemrefPeer::DRAINAGEAREA, $this->drainagearea);
        if ($this->isColumnModified(EcosystemrefPeer::NORTHERNLAT)) $criteria->add(EcosystemrefPeer::NORTHERNLAT, $this->northernlat);
        if ($this->isColumnModified(EcosystemrefPeer::NRANGENS)) $criteria->add(EcosystemrefPeer::NRANGENS, $this->nrangens);
        if ($this->isColumnModified(EcosystemrefPeer::SOUTHERNLAT)) $criteria->add(EcosystemrefPeer::SOUTHERNLAT, $this->southernlat);
        if ($this->isColumnModified(EcosystemrefPeer::SRANGENS)) $criteria->add(EcosystemrefPeer::SRANGENS, $this->srangens);
        if ($this->isColumnModified(EcosystemrefPeer::WESTERNLAT)) $criteria->add(EcosystemrefPeer::WESTERNLAT, $this->westernlat);
        if ($this->isColumnModified(EcosystemrefPeer::WRANGEEW)) $criteria->add(EcosystemrefPeer::WRANGEEW, $this->wrangeew);
        if ($this->isColumnModified(EcosystemrefPeer::EASTERNLAT)) $criteria->add(EcosystemrefPeer::EASTERNLAT, $this->easternlat);
        if ($this->isColumnModified(EcosystemrefPeer::ERANGEEW)) $criteria->add(EcosystemrefPeer::ERANGEEW, $this->erangeew);
        if ($this->isColumnModified(EcosystemrefPeer::CLIMATE)) $criteria->add(EcosystemrefPeer::CLIMATE, $this->climate);
        if ($this->isColumnModified(EcosystemrefPeer::POLAR)) $criteria->add(EcosystemrefPeer::POLAR, $this->polar);
        if ($this->isColumnModified(EcosystemrefPeer::BOREAL)) $criteria->add(EcosystemrefPeer::BOREAL, $this->boreal);
        if ($this->isColumnModified(EcosystemrefPeer::TEMPERATE)) $criteria->add(EcosystemrefPeer::TEMPERATE, $this->temperate);
        if ($this->isColumnModified(EcosystemrefPeer::SUBTROPICAL)) $criteria->add(EcosystemrefPeer::SUBTROPICAL, $this->subtropical);
        if ($this->isColumnModified(EcosystemrefPeer::TROPICAL)) $criteria->add(EcosystemrefPeer::TROPICAL, $this->tropical);
        if ($this->isColumnModified(EcosystemrefPeer::AVERAGEDEPTH)) $criteria->add(EcosystemrefPeer::AVERAGEDEPTH, $this->averagedepth);
        if ($this->isColumnModified(EcosystemrefPeer::MAXDEPTH)) $criteria->add(EcosystemrefPeer::MAXDEPTH, $this->maxdepth);
        if ($this->isColumnModified(EcosystemrefPeer::DEPTHREF)) $criteria->add(EcosystemrefPeer::DEPTHREF, $this->depthref);
        if ($this->isColumnModified(EcosystemrefPeer::TEMPSURFACE)) $criteria->add(EcosystemrefPeer::TEMPSURFACE, $this->tempsurface);
        if ($this->isColumnModified(EcosystemrefPeer::TEMPSURFACEMAP)) $criteria->add(EcosystemrefPeer::TEMPSURFACEMAP, $this->tempsurfacemap);
        if ($this->isColumnModified(EcosystemrefPeer::TEMPDEPTH)) $criteria->add(EcosystemrefPeer::TEMPDEPTH, $this->tempdepth);
        if ($this->isColumnModified(EcosystemrefPeer::TEMPDEPTHMAP)) $criteria->add(EcosystemrefPeer::TEMPDEPTHMAP, $this->tempdepthmap);
        if ($this->isColumnModified(EcosystemrefPeer::DESCRIPTION)) $criteria->add(EcosystemrefPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(EcosystemrefPeer::TOTALCOUNT)) $criteria->add(EcosystemrefPeer::TOTALCOUNT, $this->totalcount);
        if ($this->isColumnModified(EcosystemrefPeer::TOTALFAMCOUNT)) $criteria->add(EcosystemrefPeer::TOTALFAMCOUNT, $this->totalfamcount);
        if ($this->isColumnModified(EcosystemrefPeer::TOTALCOMPLETE)) $criteria->add(EcosystemrefPeer::TOTALCOMPLETE, $this->totalcomplete);
        if ($this->isColumnModified(EcosystemrefPeer::TOTALLIT)) $criteria->add(EcosystemrefPeer::TOTALLIT, $this->totallit);
        if ($this->isColumnModified(EcosystemrefPeer::TOTALFAMLIT)) $criteria->add(EcosystemrefPeer::TOTALFAMLIT, $this->totalfamlit);
        if ($this->isColumnModified(EcosystemrefPeer::TOTALREF)) $criteria->add(EcosystemrefPeer::TOTALREF, $this->totalref);
        if ($this->isColumnModified(EcosystemrefPeer::USEFLAG)) $criteria->add(EcosystemrefPeer::USEFLAG, $this->useflag);
        if ($this->isColumnModified(EcosystemrefPeer::COMMENTS)) $criteria->add(EcosystemrefPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(EcosystemrefPeer::REMARKS)) $criteria->add(EcosystemrefPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(EcosystemrefPeer::LASTUPDATE)) $criteria->add(EcosystemrefPeer::LASTUPDATE, $this->lastupdate);
        if ($this->isColumnModified(EcosystemrefPeer::LATDEGFILL)) $criteria->add(EcosystemrefPeer::LATDEGFILL, $this->latdegfill);
        if ($this->isColumnModified(EcosystemrefPeer::LATMINFILL)) $criteria->add(EcosystemrefPeer::LATMINFILL, $this->latminfill);
        if ($this->isColumnModified(EcosystemrefPeer::NORTHSOUTHFILL)) $criteria->add(EcosystemrefPeer::NORTHSOUTHFILL, $this->northsouthfill);
        if ($this->isColumnModified(EcosystemrefPeer::LONGDEGFILL)) $criteria->add(EcosystemrefPeer::LONGDEGFILL, $this->longdegfill);
        if ($this->isColumnModified(EcosystemrefPeer::LONGMINFILL)) $criteria->add(EcosystemrefPeer::LONGMINFILL, $this->longminfill);
        if ($this->isColumnModified(EcosystemrefPeer::EASTWESTFILL)) $criteria->add(EcosystemrefPeer::EASTWESTFILL, $this->eastwestfill);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMURL1)) $criteria->add(EcosystemrefPeer::ECOSYSTEMURL1, $this->ecosystemurl1);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMURL2)) $criteria->add(EcosystemrefPeer::ECOSYSTEMURL2, $this->ecosystemurl2);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMURL3)) $criteria->add(EcosystemrefPeer::ECOSYSTEMURL3, $this->ecosystemurl3);
        if ($this->isColumnModified(EcosystemrefPeer::ENTERED)) $criteria->add(EcosystemrefPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(EcosystemrefPeer::DATEENTERED)) $criteria->add(EcosystemrefPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(EcosystemrefPeer::MODIFIED)) $criteria->add(EcosystemrefPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(EcosystemrefPeer::DATEMODIFIED)) $criteria->add(EcosystemrefPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(EcosystemrefPeer::EXPERT)) $criteria->add(EcosystemrefPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(EcosystemrefPeer::DATECHECKED)) $criteria->add(EcosystemrefPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_GERMAN)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_GERMAN, $this->ecosystemname_german);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL, $this->ecosystemname_russian_original);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN, $this->ecosystemname_russian);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_FRENCH)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_FRENCH, $this->ecosystemname_french);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE, $this->ecosystemname_chinese);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_DUTCH)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_DUTCH, $this->ecosystemname_dutch);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN, $this->ecosystemname_italian);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH, $this->ecosystemname_swedish);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL, $this->ecosystemname_greek_original);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_GREEK)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_GREEK, $this->ecosystemname_greek);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE, $this->ecosystemname_portuguese);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_SPANISH)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_SPANISH, $this->ecosystemname_spanish);
        if ($this->isColumnModified(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U)) $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U, $this->ecosystemname_chinese_u);
        if ($this->isColumnModified(EcosystemrefPeer::TS)) $criteria->add(EcosystemrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(EcosystemrefPeer::DATABASE_NAME);
        $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME, $this->ecosystemname);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getEcosystemname();
    }

    /**
     * Generic method to set the primary key (ecosystemname column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEcosystemname($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getEcosystemname();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ecosystemref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setECode($this->getECode());
        $copyObj->setEcosystemtype($this->getEcosystemtype());
        $copyObj->setECodeLarge($this->getECodeLarge());
        $copyObj->setECodeLarger($this->getECodeLarger());
        $copyObj->setReady($this->getReady());
        $copyObj->setOthernames($this->getOthernames());
        $copyObj->setLocation($this->getLocation());
        $copyObj->setLocationmap($this->getLocationmap());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setRiverlength($this->getRiverlength());
        $copyObj->setArea($this->getArea());
        $copyObj->setSizeref($this->getSizeref());
        $copyObj->setDrainagearea($this->getDrainagearea());
        $copyObj->setNorthernlat($this->getNorthernlat());
        $copyObj->setNrangens($this->getNrangens());
        $copyObj->setSouthernlat($this->getSouthernlat());
        $copyObj->setSrangens($this->getSrangens());
        $copyObj->setWesternlat($this->getWesternlat());
        $copyObj->setWrangeew($this->getWrangeew());
        $copyObj->setEasternlat($this->getEasternlat());
        $copyObj->setErangeew($this->getErangeew());
        $copyObj->setClimate($this->getClimate());
        $copyObj->setPolar($this->getPolar());
        $copyObj->setBoreal($this->getBoreal());
        $copyObj->setTemperate($this->getTemperate());
        $copyObj->setSubtropical($this->getSubtropical());
        $copyObj->setTropical($this->getTropical());
        $copyObj->setAveragedepth($this->getAveragedepth());
        $copyObj->setMaxdepth($this->getMaxdepth());
        $copyObj->setDepthref($this->getDepthref());
        $copyObj->setTempsurface($this->getTempsurface());
        $copyObj->setTempsurfacemap($this->getTempsurfacemap());
        $copyObj->setTempdepth($this->getTempdepth());
        $copyObj->setTempdepthmap($this->getTempdepthmap());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setTotalcount($this->getTotalcount());
        $copyObj->setTotalfamcount($this->getTotalfamcount());
        $copyObj->setTotalcomplete($this->getTotalcomplete());
        $copyObj->setTotallit($this->getTotallit());
        $copyObj->setTotalfamlit($this->getTotalfamlit());
        $copyObj->setTotalref($this->getTotalref());
        $copyObj->setUseflag($this->getUseflag());
        $copyObj->setComments($this->getComments());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setLastupdate($this->getLastupdate());
        $copyObj->setLatdegfill($this->getLatdegfill());
        $copyObj->setLatminfill($this->getLatminfill());
        $copyObj->setNorthsouthfill($this->getNorthsouthfill());
        $copyObj->setLongdegfill($this->getLongdegfill());
        $copyObj->setLongminfill($this->getLongminfill());
        $copyObj->setEastwestfill($this->getEastwestfill());
        $copyObj->setEcosystemurl1($this->getEcosystemurl1());
        $copyObj->setEcosystemurl2($this->getEcosystemurl2());
        $copyObj->setEcosystemurl3($this->getEcosystemurl3());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setEcosystemnameGerman($this->getEcosystemnameGerman());
        $copyObj->setEcosystemnameRussianOriginal($this->getEcosystemnameRussianOriginal());
        $copyObj->setEcosystemnameRussian($this->getEcosystemnameRussian());
        $copyObj->setEcosystemnameFrench($this->getEcosystemnameFrench());
        $copyObj->setEcosystemnameChinese($this->getEcosystemnameChinese());
        $copyObj->setEcosystemnameDutch($this->getEcosystemnameDutch());
        $copyObj->setEcosystemnameItalian($this->getEcosystemnameItalian());
        $copyObj->setEcosystemnameSwedish($this->getEcosystemnameSwedish());
        $copyObj->setEcosystemnameGreekOriginal($this->getEcosystemnameGreekOriginal());
        $copyObj->setEcosystemnameGreek($this->getEcosystemnameGreek());
        $copyObj->setEcosystemnamePortuguese($this->getEcosystemnamePortuguese());
        $copyObj->setEcosystemnameSpanish($this->getEcosystemnameSpanish());
        $copyObj->setEcosystemnameChineseU($this->getEcosystemnameChineseU());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setEcosystemname(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ecosystemref Clone of current object.
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
     * @return EcosystemrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EcosystemrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->e_code = null;
        $this->ecosystemname = null;
        $this->ecosystemtype = null;
        $this->e_code_large = null;
        $this->e_code_larger = null;
        $this->ready = null;
        $this->othernames = null;
        $this->location = null;
        $this->locationmap = null;
        $this->salinity = null;
        $this->riverlength = null;
        $this->area = null;
        $this->sizeref = null;
        $this->drainagearea = null;
        $this->northernlat = null;
        $this->nrangens = null;
        $this->southernlat = null;
        $this->srangens = null;
        $this->westernlat = null;
        $this->wrangeew = null;
        $this->easternlat = null;
        $this->erangeew = null;
        $this->climate = null;
        $this->polar = null;
        $this->boreal = null;
        $this->temperate = null;
        $this->subtropical = null;
        $this->tropical = null;
        $this->averagedepth = null;
        $this->maxdepth = null;
        $this->depthref = null;
        $this->tempsurface = null;
        $this->tempsurfacemap = null;
        $this->tempdepth = null;
        $this->tempdepthmap = null;
        $this->description = null;
        $this->totalcount = null;
        $this->totalfamcount = null;
        $this->totalcomplete = null;
        $this->totallit = null;
        $this->totalfamlit = null;
        $this->totalref = null;
        $this->useflag = null;
        $this->comments = null;
        $this->remarks = null;
        $this->lastupdate = null;
        $this->latdegfill = null;
        $this->latminfill = null;
        $this->northsouthfill = null;
        $this->longdegfill = null;
        $this->longminfill = null;
        $this->eastwestfill = null;
        $this->ecosystemurl1 = null;
        $this->ecosystemurl2 = null;
        $this->ecosystemurl3 = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->ecosystemname_german = null;
        $this->ecosystemname_russian_original = null;
        $this->ecosystemname_russian = null;
        $this->ecosystemname_french = null;
        $this->ecosystemname_chinese = null;
        $this->ecosystemname_dutch = null;
        $this->ecosystemname_italian = null;
        $this->ecosystemname_swedish = null;
        $this->ecosystemname_greek_original = null;
        $this->ecosystemname_greek = null;
        $this->ecosystemname_portuguese = null;
        $this->ecosystemname_spanish = null;
        $this->ecosystemname_chinese_u = null;
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
        return (string) $this->exportTo(EcosystemrefPeer::DEFAULT_STRING_FORMAT);
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
