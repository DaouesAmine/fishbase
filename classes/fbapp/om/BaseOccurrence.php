<?php


/**
 * Base class that represents a row from the 'occurrence' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOccurrence extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OccurrencePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OccurrencePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the catnum2 field.
     * @var        int
     */
    protected $catnum2;

    /**
     * The value for the occurrencerefno field.
     * @var        int
     */
    protected $occurrencerefno;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the syncode field.
     * @var        int
     */
    protected $syncode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the genuscol field.
     * @var        string
     */
    protected $genuscol;

    /**
     * The value for the speciescol field.
     * @var        string
     */
    protected $speciescol;

    /**
     * The value for the colname field.
     * @var        string
     */
    protected $colname;

    /**
     * The value for the picname field.
     * @var        string
     */
    protected $picname;

    /**
     * The value for the catnum field.
     * @var        string
     */
    protected $catnum;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the station field.
     * @var        string
     */
    protected $station;

    /**
     * The value for the cruise field.
     * @var        string
     */
    protected $cruise;

    /**
     * The value for the gazetteer field.
     * @var        string
     */
    protected $gazetteer;

    /**
     * The value for the localitytype field.
     * @var        string
     */
    protected $localitytype;

    /**
     * The value for the waterdepthmin field.
     * @var        double
     */
    protected $waterdepthmin;

    /**
     * The value for the waterdepthmax field.
     * @var        double
     */
    protected $waterdepthmax;

    /**
     * The value for the altitudemin field.
     * @var        int
     */
    protected $altitudemin;

    /**
     * The value for the altitudemax field.
     * @var        int
     */
    protected $altitudemax;

    /**
     * The value for the latitudedeg field.
     * @var        int
     */
    protected $latitudedeg;

    /**
     * The value for the latitudemin field.
     * @var        double
     */
    protected $latitudemin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the latitudedec field.
     * @var        double
     */
    protected $latitudedec;

    /**
     * The value for the longitudedeg field.
     * @var        int
     */
    protected $longitudedeg;

    /**
     * The value for the longitudemin field.
     * @var        double
     */
    protected $longitudemin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the longitudedec field.
     * @var        double
     */
    protected $longitudedec;

    /**
     * The value for the accuracy field.
     * @var        string
     */
    protected $accuracy;

    /**
     * The value for the salinity field.
     * @var        string
     */
    protected $salinity;

    /**
     * The value for the latitudeto field.
     * @var        double
     */
    protected $latitudeto;

    /**
     * The value for the longitudeto field.
     * @var        double
     */
    protected $longitudeto;

    /**
     * The value for the latitudedegto field.
     * @var        int
     */
    protected $latitudedegto;

    /**
     * The value for the latitudeminto field.
     * @var        double
     */
    protected $latitudeminto;

    /**
     * The value for the northsouthto field.
     * @var        string
     */
    protected $northsouthto;

    /**
     * The value for the longitudedegto field.
     * @var        int
     */
    protected $longitudedegto;

    /**
     * The value for the longitudeminto field.
     * @var        double
     */
    protected $longitudeminto;

    /**
     * The value for the eastwestto field.
     * @var        string
     */
    protected $eastwestto;

    /**
     * The value for the temp field.
     * @var        double
     */
    protected $temp;

    /**
     * The value for the areacode field.
     * @var        int
     */
    protected $areacode;

    /**
     * The value for the seadrainage field.
     * @var        string
     */
    protected $seadrainage;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the province field.
     * @var        string
     */
    protected $province;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the dateto field.
     * @var        string
     */
    protected $dateto;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the datetype field.
     * @var        string
     */
    protected $datetype;

    /**
     * The value for the daytimestart field.
     * @var        string
     */
    protected $daytimestart;

    /**
     * The value for the daytimestop field.
     * @var        string
     */
    protected $daytimestop;

    /**
     * The value for the length field.
     * @var        double
     */
    protected $length;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the length2 field.
     * @var        double
     */
    protected $length2;

    /**
     * The value for the lengthtype2 field.
     * @var        string
     */
    protected $lengthtype2;

    /**
     * The value for the lengthmin field.
     * @var        double
     */
    protected $lengthmin;

    /**
     * The value for the lengthmax field.
     * @var        double
     */
    protected $lengthmax;

    /**
     * The value for the weight field.
     * @var        double
     */
    protected $weight;

    /**
     * The value for the number field.
     * @var        int
     */
    protected $number;

    /**
     * The value for the percentcatch field.
     * @var        double
     */
    protected $percentcatch;

    /**
     * The value for the abundance field.
     * @var        string
     */
    protected $abundance;

    /**
     * The value for the livestage field.
     * @var        string
     */
    protected $livestage;

    /**
     * The value for the sex field.
     * @var        string
     */
    protected $sex;

    /**
     * The value for the bottom field.
     * @var        string
     */
    protected $bottom;

    /**
     * The value for the gear field.
     * @var        string
     */
    protected $gear;

    /**
     * The value for the remark_fb field.
     * @var        string
     */
    protected $remark_fb;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the vessel field.
     * @var        string
     */
    protected $vessel;

    /**
     * The value for the expedition field.
     * @var        string
     */
    protected $expedition;

    /**
     * The value for the collector field.
     * @var        string
     */
    protected $collector;

    /**
     * The value for the identifier field.
     * @var        string
     */
    protected $identifier;

    /**
     * The value for the identifierstandard field.
     * @var        string
     */
    protected $identifierstandard;

    /**
     * The value for the identifieryr field.
     * @var        int
     */
    protected $identifieryr;

    /**
     * The value for the qname field.
     * @var        int
     */
    protected $qname;

    /**
     * The value for the qidentifier field.
     * @var        int
     */
    protected $qidentifier;

    /**
     * The value for the qarea field.
     * @var        int
     */
    protected $qarea;

    /**
     * The value for the qcountry field.
     * @var        int
     */
    protected $qcountry;

    /**
     * The value for the qcoordinates field.
     * @var        int
     */
    protected $qcoordinates;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the ms field.
     * @var        string
     */
    protected $ms;

    /**
     * The value for the storage field.
     * @var        string
     */
    protected $storage;

    /**
     * The value for the recordtype field.
     * @var        string
     */
    protected $recordtype;

    /**
     * The value for the basisofrecord field.
     * @var        string
     */
    protected $basisofrecord;

    /**
     * The value for the checkedcol field.
     * @var        string
     */
    protected $checkedcol;

    /**
     * The value for the validity field.
     * @var        string
     */
    protected $validity;

    /**
     * The value for the daterecapture field.
     * @var        string
     */
    protected $daterecapture;

    /**
     * The value for the latdegrel field.
     * @var        int
     */
    protected $latdegrel;

    /**
     * The value for the latminrel field.
     * @var        double
     */
    protected $latminrel;

    /**
     * The value for the northsouthrel field.
     * @var        string
     */
    protected $northsouthrel;

    /**
     * The value for the longdegrel field.
     * @var        int
     */
    protected $longdegrel;

    /**
     * The value for the longminrel field.
     * @var        double
     */
    protected $longminrel;

    /**
     * The value for the eastwestrel field.
     * @var        string
     */
    protected $eastwestrel;

    /**
     * The value for the lengthrel field.
     * @var        int
     */
    protected $lengthrel;

    /**
     * The value for the lengthtyperel field.
     * @var        string
     */
    protected $lengthtyperel;

    /**
     * The value for the weightrel field.
     * @var        double
     */
    protected $weightrel;

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
     * The value for the locality1 field.
     * @var        string
     */
    protected $locality1;

    /**
     * The value for the twodegree30w field.
     * @var        string
     */
    protected $twodegree30w;

    /**
     * The value for the onedegree30w field.
     * @var        string
     */
    protected $onedegree30w;

    /**
     * The value for the tendegree30w field.
     * @var        string
     */
    protected $tendegree30w;

    /**
     * The value for the csquarecode field.
     * @var        string
     */
    protected $csquarecode;

    /**
     * The value for the publisheddistance field.
     * @var        double
     */
    protected $publisheddistance;

    /**
     * The value for the info field.
     * @var        string
     */
    protected $info;

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
     * Get the [catnum2] column value.
     *
     * @return int
     */
    public function getCatnum2()
    {

        return $this->catnum2;
    }

    /**
     * Get the [occurrencerefno] column value.
     *
     * @return int
     */
    public function getOccurrencerefno()
    {

        return $this->occurrencerefno;
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
     * Get the [syncode] column value.
     *
     * @return int
     */
    public function getSyncode()
    {

        return $this->syncode;
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
     * Get the [genuscol] column value.
     *
     * @return string
     */
    public function getGenuscol()
    {

        return $this->genuscol;
    }

    /**
     * Get the [speciescol] column value.
     *
     * @return string
     */
    public function getSpeciescol()
    {

        return $this->speciescol;
    }

    /**
     * Get the [colname] column value.
     *
     * @return string
     */
    public function getColname()
    {

        return $this->colname;
    }

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
     * Get the [catnum] column value.
     *
     * @return string
     */
    public function getCatnum()
    {

        return $this->catnum;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Get the [station] column value.
     *
     * @return string
     */
    public function getStation()
    {

        return $this->station;
    }

    /**
     * Get the [cruise] column value.
     *
     * @return string
     */
    public function getCruise()
    {

        return $this->cruise;
    }

    /**
     * Get the [gazetteer] column value.
     *
     * @return string
     */
    public function getGazetteer()
    {

        return $this->gazetteer;
    }

    /**
     * Get the [localitytype] column value.
     *
     * @return string
     */
    public function getLocalitytype()
    {

        return $this->localitytype;
    }

    /**
     * Get the [waterdepthmin] column value.
     *
     * @return double
     */
    public function getWaterdepthmin()
    {

        return $this->waterdepthmin;
    }

    /**
     * Get the [waterdepthmax] column value.
     *
     * @return double
     */
    public function getWaterdepthmax()
    {

        return $this->waterdepthmax;
    }

    /**
     * Get the [altitudemin] column value.
     *
     * @return int
     */
    public function getAltitudemin()
    {

        return $this->altitudemin;
    }

    /**
     * Get the [altitudemax] column value.
     *
     * @return int
     */
    public function getAltitudemax()
    {

        return $this->altitudemax;
    }

    /**
     * Get the [latitudedeg] column value.
     *
     * @return int
     */
    public function getLatitudedeg()
    {

        return $this->latitudedeg;
    }

    /**
     * Get the [latitudemin] column value.
     *
     * @return double
     */
    public function getLatitudemin()
    {

        return $this->latitudemin;
    }

    /**
     * Get the [northsouth] column value.
     *
     * @return string
     */
    public function getNorthsouth()
    {

        return $this->northsouth;
    }

    /**
     * Get the [latitudedec] column value.
     *
     * @return double
     */
    public function getLatitudedec()
    {

        return $this->latitudedec;
    }

    /**
     * Get the [longitudedeg] column value.
     *
     * @return int
     */
    public function getLongitudedeg()
    {

        return $this->longitudedeg;
    }

    /**
     * Get the [longitudemin] column value.
     *
     * @return double
     */
    public function getLongitudemin()
    {

        return $this->longitudemin;
    }

    /**
     * Get the [eastwest] column value.
     *
     * @return string
     */
    public function getEastwest()
    {

        return $this->eastwest;
    }

    /**
     * Get the [longitudedec] column value.
     *
     * @return double
     */
    public function getLongitudedec()
    {

        return $this->longitudedec;
    }

    /**
     * Get the [accuracy] column value.
     *
     * @return string
     */
    public function getAccuracy()
    {

        return $this->accuracy;
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
     * Get the [latitudeto] column value.
     *
     * @return double
     */
    public function getLatitudeto()
    {

        return $this->latitudeto;
    }

    /**
     * Get the [longitudeto] column value.
     *
     * @return double
     */
    public function getLongitudeto()
    {

        return $this->longitudeto;
    }

    /**
     * Get the [latitudedegto] column value.
     *
     * @return int
     */
    public function getLatitudedegto()
    {

        return $this->latitudedegto;
    }

    /**
     * Get the [latitudeminto] column value.
     *
     * @return double
     */
    public function getLatitudeminto()
    {

        return $this->latitudeminto;
    }

    /**
     * Get the [northsouthto] column value.
     *
     * @return string
     */
    public function getNorthsouthto()
    {

        return $this->northsouthto;
    }

    /**
     * Get the [longitudedegto] column value.
     *
     * @return int
     */
    public function getLongitudedegto()
    {

        return $this->longitudedegto;
    }

    /**
     * Get the [longitudeminto] column value.
     *
     * @return double
     */
    public function getLongitudeminto()
    {

        return $this->longitudeminto;
    }

    /**
     * Get the [eastwestto] column value.
     *
     * @return string
     */
    public function getEastwestto()
    {

        return $this->eastwestto;
    }

    /**
     * Get the [temp] column value.
     *
     * @return double
     */
    public function getTemp()
    {

        return $this->temp;
    }

    /**
     * Get the [areacode] column value.
     *
     * @return int
     */
    public function getAreacode()
    {

        return $this->areacode;
    }

    /**
     * Get the [seadrainage] column value.
     *
     * @return string
     */
    public function getSeadrainage()
    {

        return $this->seadrainage;
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
     * Get the [province] column value.
     *
     * @return string
     */
    public function getProvince()
    {

        return $this->province;
    }

    /**
     * Get the [date] column value.
     *
     * @return string
     */
    public function getDate()
    {

        return $this->date;
    }

    /**
     * Get the [dateto] column value.
     *
     * @return string
     */
    public function getDateto()
    {

        return $this->dateto;
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
     * Get the [datetype] column value.
     *
     * @return string
     */
    public function getDatetype()
    {

        return $this->datetype;
    }

    /**
     * Get the [daytimestart] column value.
     *
     * @return string
     */
    public function getDaytimestart()
    {

        return $this->daytimestart;
    }

    /**
     * Get the [daytimestop] column value.
     *
     * @return string
     */
    public function getDaytimestop()
    {

        return $this->daytimestop;
    }

    /**
     * Get the [length] column value.
     *
     * @return double
     */
    public function getLength()
    {

        return $this->length;
    }

    /**
     * Get the [lengthtype] column value.
     *
     * @return string
     */
    public function getLengthtype()
    {

        return $this->lengthtype;
    }

    /**
     * Get the [length2] column value.
     *
     * @return double
     */
    public function getLength2()
    {

        return $this->length2;
    }

    /**
     * Get the [lengthtype2] column value.
     *
     * @return string
     */
    public function getLengthtype2()
    {

        return $this->lengthtype2;
    }

    /**
     * Get the [lengthmin] column value.
     *
     * @return double
     */
    public function getLengthmin()
    {

        return $this->lengthmin;
    }

    /**
     * Get the [lengthmax] column value.
     *
     * @return double
     */
    public function getLengthmax()
    {

        return $this->lengthmax;
    }

    /**
     * Get the [weight] column value.
     *
     * @return double
     */
    public function getWeight()
    {

        return $this->weight;
    }

    /**
     * Get the [number] column value.
     *
     * @return int
     */
    public function getNumber()
    {

        return $this->number;
    }

    /**
     * Get the [percentcatch] column value.
     *
     * @return double
     */
    public function getPercentcatch()
    {

        return $this->percentcatch;
    }

    /**
     * Get the [abundance] column value.
     *
     * @return string
     */
    public function getAbundance()
    {

        return $this->abundance;
    }

    /**
     * Get the [livestage] column value.
     *
     * @return string
     */
    public function getLivestage()
    {

        return $this->livestage;
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
     * Get the [bottom] column value.
     *
     * @return string
     */
    public function getBottom()
    {

        return $this->bottom;
    }

    /**
     * Get the [gear] column value.
     *
     * @return string
     */
    public function getGear()
    {

        return $this->gear;
    }

    /**
     * Get the [remark_fb] column value.
     *
     * @return string
     */
    public function getRemarkFb()
    {

        return $this->remark_fb;
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
     * Get the [vessel] column value.
     *
     * @return string
     */
    public function getVessel()
    {

        return $this->vessel;
    }

    /**
     * Get the [expedition] column value.
     *
     * @return string
     */
    public function getExpedition()
    {

        return $this->expedition;
    }

    /**
     * Get the [collector] column value.
     *
     * @return string
     */
    public function getCollector()
    {

        return $this->collector;
    }

    /**
     * Get the [identifier] column value.
     *
     * @return string
     */
    public function getIdentifier()
    {

        return $this->identifier;
    }

    /**
     * Get the [identifierstandard] column value.
     *
     * @return string
     */
    public function getIdentifierstandard()
    {

        return $this->identifierstandard;
    }

    /**
     * Get the [identifieryr] column value.
     *
     * @return int
     */
    public function getIdentifieryr()
    {

        return $this->identifieryr;
    }

    /**
     * Get the [qname] column value.
     *
     * @return int
     */
    public function getQname()
    {

        return $this->qname;
    }

    /**
     * Get the [qidentifier] column value.
     *
     * @return int
     */
    public function getQidentifier()
    {

        return $this->qidentifier;
    }

    /**
     * Get the [qarea] column value.
     *
     * @return int
     */
    public function getQarea()
    {

        return $this->qarea;
    }

    /**
     * Get the [qcountry] column value.
     *
     * @return int
     */
    public function getQcountry()
    {

        return $this->qcountry;
    }

    /**
     * Get the [qcoordinates] column value.
     *
     * @return int
     */
    public function getQcoordinates()
    {

        return $this->qcoordinates;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [ms] column value.
     *
     * @return string
     */
    public function getMs()
    {

        return $this->ms;
    }

    /**
     * Get the [storage] column value.
     *
     * @return string
     */
    public function getStorage()
    {

        return $this->storage;
    }

    /**
     * Get the [recordtype] column value.
     *
     * @return string
     */
    public function getRecordtype()
    {

        return $this->recordtype;
    }

    /**
     * Get the [basisofrecord] column value.
     *
     * @return string
     */
    public function getBasisofrecord()
    {

        return $this->basisofrecord;
    }

    /**
     * Get the [checkedcol] column value.
     *
     * @return string
     */
    public function getCheckedcol()
    {

        return $this->checkedcol;
    }

    /**
     * Get the [validity] column value.
     *
     * @return string
     */
    public function getValidity()
    {

        return $this->validity;
    }

    /**
     * Get the [daterecapture] column value.
     *
     * @return string
     */
    public function getDaterecapture()
    {

        return $this->daterecapture;
    }

    /**
     * Get the [latdegrel] column value.
     *
     * @return int
     */
    public function getLatdegrel()
    {

        return $this->latdegrel;
    }

    /**
     * Get the [latminrel] column value.
     *
     * @return double
     */
    public function getLatminrel()
    {

        return $this->latminrel;
    }

    /**
     * Get the [northsouthrel] column value.
     *
     * @return string
     */
    public function getNorthsouthrel()
    {

        return $this->northsouthrel;
    }

    /**
     * Get the [longdegrel] column value.
     *
     * @return int
     */
    public function getLongdegrel()
    {

        return $this->longdegrel;
    }

    /**
     * Get the [longminrel] column value.
     *
     * @return double
     */
    public function getLongminrel()
    {

        return $this->longminrel;
    }

    /**
     * Get the [eastwestrel] column value.
     *
     * @return string
     */
    public function getEastwestrel()
    {

        return $this->eastwestrel;
    }

    /**
     * Get the [lengthrel] column value.
     *
     * @return int
     */
    public function getLengthrel()
    {

        return $this->lengthrel;
    }

    /**
     * Get the [lengthtyperel] column value.
     *
     * @return string
     */
    public function getLengthtyperel()
    {

        return $this->lengthtyperel;
    }

    /**
     * Get the [weightrel] column value.
     *
     * @return double
     */
    public function getWeightrel()
    {

        return $this->weightrel;
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
     * Get the [dateentered] column value.
     *
     * @return string
     */
    public function getDateentered()
    {

        return $this->dateentered;
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
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatechecked($format = '%x')
    {
        if ($this->datechecked === null) {
            return null;
        }

        if ($this->datechecked === '0000-00-00') {
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
     * Get the [locality1] column value.
     *
     * @return string
     */
    public function getLocality1()
    {

        return $this->locality1;
    }

    /**
     * Get the [twodegree30w] column value.
     *
     * @return string
     */
    public function getTwodegree30w()
    {

        return $this->twodegree30w;
    }

    /**
     * Get the [onedegree30w] column value.
     *
     * @return string
     */
    public function getOnedegree30w()
    {

        return $this->onedegree30w;
    }

    /**
     * Get the [tendegree30w] column value.
     *
     * @return string
     */
    public function getTendegree30w()
    {

        return $this->tendegree30w;
    }

    /**
     * Get the [csquarecode] column value.
     *
     * @return string
     */
    public function getCsquarecode()
    {

        return $this->csquarecode;
    }

    /**
     * Get the [publisheddistance] column value.
     *
     * @return double
     */
    public function getPublisheddistance()
    {

        return $this->publisheddistance;
    }

    /**
     * Get the [info] column value.
     *
     * @return string
     */
    public function getInfo()
    {

        return $this->info;
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
     * Set the value of [catnum2] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCatnum2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->catnum2 !== $v) {
            $this->catnum2 = $v;
            $this->modifiedColumns[] = OccurrencePeer::CATNUM2;
        }


        return $this;
    } // setCatnum2()

    /**
     * Set the value of [occurrencerefno] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setOccurrencerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->occurrencerefno !== $v) {
            $this->occurrencerefno = $v;
            $this->modifiedColumns[] = OccurrencePeer::OCCURRENCEREFNO;
        }


        return $this;
    } // setOccurrencerefno()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = OccurrencePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [syncode] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setSyncode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->syncode !== $v) {
            $this->syncode = $v;
            $this->modifiedColumns[] = OccurrencePeer::SYNCODE;
        }


        return $this;
    } // setSyncode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = OccurrencePeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [genuscol] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setGenuscol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genuscol !== $v) {
            $this->genuscol = $v;
            $this->modifiedColumns[] = OccurrencePeer::GENUSCOL;
        }


        return $this;
    } // setGenuscol()

    /**
     * Set the value of [speciescol] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setSpeciescol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->speciescol !== $v) {
            $this->speciescol = $v;
            $this->modifiedColumns[] = OccurrencePeer::SPECIESCOL;
        }


        return $this;
    } // setSpeciescol()

    /**
     * Set the value of [colname] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setColname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->colname !== $v) {
            $this->colname = $v;
            $this->modifiedColumns[] = OccurrencePeer::COLNAME;
        }


        return $this;
    } // setColname()

    /**
     * Set the value of [picname] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setPicname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picname !== $v) {
            $this->picname = $v;
            $this->modifiedColumns[] = OccurrencePeer::PICNAME;
        }


        return $this;
    } // setPicname()

    /**
     * Set the value of [catnum] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCatnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->catnum !== $v) {
            $this->catnum = $v;
            $this->modifiedColumns[] = OccurrencePeer::CATNUM;
        }


        return $this;
    } // setCatnum()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = OccurrencePeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [station] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setStation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->station !== $v) {
            $this->station = $v;
            $this->modifiedColumns[] = OccurrencePeer::STATION;
        }


        return $this;
    } // setStation()

    /**
     * Set the value of [cruise] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCruise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cruise !== $v) {
            $this->cruise = $v;
            $this->modifiedColumns[] = OccurrencePeer::CRUISE;
        }


        return $this;
    } // setCruise()

    /**
     * Set the value of [gazetteer] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setGazetteer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gazetteer !== $v) {
            $this->gazetteer = $v;
            $this->modifiedColumns[] = OccurrencePeer::GAZETTEER;
        }


        return $this;
    } // setGazetteer()

    /**
     * Set the value of [localitytype] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLocalitytype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localitytype !== $v) {
            $this->localitytype = $v;
            $this->modifiedColumns[] = OccurrencePeer::LOCALITYTYPE;
        }


        return $this;
    } // setLocalitytype()

    /**
     * Set the value of [waterdepthmin] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setWaterdepthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->waterdepthmin !== $v) {
            $this->waterdepthmin = $v;
            $this->modifiedColumns[] = OccurrencePeer::WATERDEPTHMIN;
        }


        return $this;
    } // setWaterdepthmin()

    /**
     * Set the value of [waterdepthmax] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setWaterdepthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->waterdepthmax !== $v) {
            $this->waterdepthmax = $v;
            $this->modifiedColumns[] = OccurrencePeer::WATERDEPTHMAX;
        }


        return $this;
    } // setWaterdepthmax()

    /**
     * Set the value of [altitudemin] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setAltitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->altitudemin !== $v) {
            $this->altitudemin = $v;
            $this->modifiedColumns[] = OccurrencePeer::ALTITUDEMIN;
        }


        return $this;
    } // setAltitudemin()

    /**
     * Set the value of [altitudemax] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setAltitudemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->altitudemax !== $v) {
            $this->altitudemax = $v;
            $this->modifiedColumns[] = OccurrencePeer::ALTITUDEMAX;
        }


        return $this;
    } // setAltitudemax()

    /**
     * Set the value of [latitudedeg] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudedeg !== $v) {
            $this->latitudedeg = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATITUDEDEG;
        }


        return $this;
    } // setLatitudedeg()

    /**
     * Set the value of [latitudemin] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitudemin !== $v) {
            $this->latitudemin = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATITUDEMIN;
        }


        return $this;
    } // setLatitudemin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = OccurrencePeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [latitudedec] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatitudedec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitudedec !== $v) {
            $this->latitudedec = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATITUDEDEC;
        }


        return $this;
    } // setLatitudedec()

    /**
     * Set the value of [longitudedeg] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongitudedeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudedeg !== $v) {
            $this->longitudedeg = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGITUDEDEG;
        }


        return $this;
    } // setLongitudedeg()

    /**
     * Set the value of [longitudemin] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongitudemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitudemin !== $v) {
            $this->longitudemin = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGITUDEMIN;
        }


        return $this;
    } // setLongitudemin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = OccurrencePeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Set the value of [longitudedec] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongitudedec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitudedec !== $v) {
            $this->longitudedec = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGITUDEDEC;
        }


        return $this;
    } // setLongitudedec()

    /**
     * Set the value of [accuracy] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setAccuracy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accuracy !== $v) {
            $this->accuracy = $v;
            $this->modifiedColumns[] = OccurrencePeer::ACCURACY;
        }


        return $this;
    } // setAccuracy()

    /**
     * Set the value of [salinity] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setSalinity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salinity !== $v) {
            $this->salinity = $v;
            $this->modifiedColumns[] = OccurrencePeer::SALINITY;
        }


        return $this;
    } // setSalinity()

    /**
     * Set the value of [latitudeto] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatitudeto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitudeto !== $v) {
            $this->latitudeto = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATITUDETO;
        }


        return $this;
    } // setLatitudeto()

    /**
     * Set the value of [longitudeto] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongitudeto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitudeto !== $v) {
            $this->longitudeto = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGITUDETO;
        }


        return $this;
    } // setLongitudeto()

    /**
     * Set the value of [latitudedegto] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatitudedegto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latitudedegto !== $v) {
            $this->latitudedegto = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATITUDEDEGTO;
        }


        return $this;
    } // setLatitudedegto()

    /**
     * Set the value of [latitudeminto] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatitudeminto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latitudeminto !== $v) {
            $this->latitudeminto = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATITUDEMINTO;
        }


        return $this;
    } // setLatitudeminto()

    /**
     * Set the value of [northsouthto] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setNorthsouthto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthto !== $v) {
            $this->northsouthto = $v;
            $this->modifiedColumns[] = OccurrencePeer::NORTHSOUTHTO;
        }


        return $this;
    } // setNorthsouthto()

    /**
     * Set the value of [longitudedegto] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongitudedegto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longitudedegto !== $v) {
            $this->longitudedegto = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGITUDEDEGTO;
        }


        return $this;
    } // setLongitudedegto()

    /**
     * Set the value of [longitudeminto] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongitudeminto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longitudeminto !== $v) {
            $this->longitudeminto = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGITUDEMINTO;
        }


        return $this;
    } // setLongitudeminto()

    /**
     * Set the value of [eastwestto] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setEastwestto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwestto !== $v) {
            $this->eastwestto = $v;
            $this->modifiedColumns[] = OccurrencePeer::EASTWESTTO;
        }


        return $this;
    } // setEastwestto()

    /**
     * Set the value of [temp] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setTemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->temp !== $v) {
            $this->temp = $v;
            $this->modifiedColumns[] = OccurrencePeer::TEMP;
        }


        return $this;
    } // setTemp()

    /**
     * Set the value of [areacode] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setAreacode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacode !== $v) {
            $this->areacode = $v;
            $this->modifiedColumns[] = OccurrencePeer::AREACODE;
        }


        return $this;
    } // setAreacode()

    /**
     * Set the value of [seadrainage] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setSeadrainage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->seadrainage !== $v) {
            $this->seadrainage = $v;
            $this->modifiedColumns[] = OccurrencePeer::SEADRAINAGE;
        }


        return $this;
    } // setSeadrainage()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = OccurrencePeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [province] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->province !== $v) {
            $this->province = $v;
            $this->modifiedColumns[] = OccurrencePeer::PROVINCE;
        }


        return $this;
    } // setProvince()

    /**
     * Set the value of [date] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date !== $v) {
            $this->date = $v;
            $this->modifiedColumns[] = OccurrencePeer::DATE;
        }


        return $this;
    } // setDate()

    /**
     * Set the value of [dateto] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDateto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateto !== $v) {
            $this->dateto = $v;
            $this->modifiedColumns[] = OccurrencePeer::DATETO;
        }


        return $this;
    } // setDateto()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = OccurrencePeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [datetype] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDatetype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datetype !== $v) {
            $this->datetype = $v;
            $this->modifiedColumns[] = OccurrencePeer::DATETYPE;
        }


        return $this;
    } // setDatetype()

    /**
     * Set the value of [daytimestart] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDaytimestart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->daytimestart !== $v) {
            $this->daytimestart = $v;
            $this->modifiedColumns[] = OccurrencePeer::DAYTIMESTART;
        }


        return $this;
    } // setDaytimestart()

    /**
     * Set the value of [daytimestop] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDaytimestop($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->daytimestop !== $v) {
            $this->daytimestop = $v;
            $this->modifiedColumns[] = OccurrencePeer::DAYTIMESTOP;
        }


        return $this;
    } // setDaytimestop()

    /**
     * Set the value of [length] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->length !== $v) {
            $this->length = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTH;
        }


        return $this;
    } // setLength()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [length2] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLength2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->length2 !== $v) {
            $this->length2 = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTH2;
        }


        return $this;
    } // setLength2()

    /**
     * Set the value of [lengthtype2] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLengthtype2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype2 !== $v) {
            $this->lengthtype2 = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTHTYPE2;
        }


        return $this;
    } // setLengthtype2()

    /**
     * Set the value of [lengthmin] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLengthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmin !== $v) {
            $this->lengthmin = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTHMIN;
        }


        return $this;
    } // setLengthmin()

    /**
     * Set the value of [lengthmax] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLengthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthmax !== $v) {
            $this->lengthmax = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTHMAX;
        }


        return $this;
    } // setLengthmax()

    /**
     * Set the value of [weight] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[] = OccurrencePeer::WEIGHT;
        }


        return $this;
    } // setWeight()

    /**
     * Set the value of [number] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->number !== $v) {
            $this->number = $v;
            $this->modifiedColumns[] = OccurrencePeer::NUMBER;
        }


        return $this;
    } // setNumber()

    /**
     * Set the value of [percentcatch] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setPercentcatch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->percentcatch !== $v) {
            $this->percentcatch = $v;
            $this->modifiedColumns[] = OccurrencePeer::PERCENTCATCH;
        }


        return $this;
    } // setPercentcatch()

    /**
     * Set the value of [abundance] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setAbundance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance !== $v) {
            $this->abundance = $v;
            $this->modifiedColumns[] = OccurrencePeer::ABUNDANCE;
        }


        return $this;
    } // setAbundance()

    /**
     * Set the value of [livestage] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLivestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->livestage !== $v) {
            $this->livestage = $v;
            $this->modifiedColumns[] = OccurrencePeer::LIVESTAGE;
        }


        return $this;
    } // setLivestage()

    /**
     * Set the value of [sex] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setSex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sex !== $v) {
            $this->sex = $v;
            $this->modifiedColumns[] = OccurrencePeer::SEX;
        }


        return $this;
    } // setSex()

    /**
     * Set the value of [bottom] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setBottom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bottom !== $v) {
            $this->bottom = $v;
            $this->modifiedColumns[] = OccurrencePeer::BOTTOM;
        }


        return $this;
    } // setBottom()

    /**
     * Set the value of [gear] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setGear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gear !== $v) {
            $this->gear = $v;
            $this->modifiedColumns[] = OccurrencePeer::GEAR;
        }


        return $this;
    } // setGear()

    /**
     * Set the value of [remark_fb] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setRemarkFb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark_fb !== $v) {
            $this->remark_fb = $v;
            $this->modifiedColumns[] = OccurrencePeer::REMARK_FB;
        }


        return $this;
    } // setRemarkFb()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = OccurrencePeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [vessel] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setVessel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vessel !== $v) {
            $this->vessel = $v;
            $this->modifiedColumns[] = OccurrencePeer::VESSEL;
        }


        return $this;
    } // setVessel()

    /**
     * Set the value of [expedition] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setExpedition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expedition !== $v) {
            $this->expedition = $v;
            $this->modifiedColumns[] = OccurrencePeer::EXPEDITION;
        }


        return $this;
    } // setExpedition()

    /**
     * Set the value of [collector] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCollector($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->collector !== $v) {
            $this->collector = $v;
            $this->modifiedColumns[] = OccurrencePeer::COLLECTOR;
        }


        return $this;
    } // setCollector()

    /**
     * Set the value of [identifier] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setIdentifier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifier !== $v) {
            $this->identifier = $v;
            $this->modifiedColumns[] = OccurrencePeer::IDENTIFIER;
        }


        return $this;
    } // setIdentifier()

    /**
     * Set the value of [identifierstandard] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setIdentifierstandard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifierstandard !== $v) {
            $this->identifierstandard = $v;
            $this->modifiedColumns[] = OccurrencePeer::IDENTIFIERSTANDARD;
        }


        return $this;
    } // setIdentifierstandard()

    /**
     * Set the value of [identifieryr] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setIdentifieryr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identifieryr !== $v) {
            $this->identifieryr = $v;
            $this->modifiedColumns[] = OccurrencePeer::IDENTIFIERYR;
        }


        return $this;
    } // setIdentifieryr()

    /**
     * Set the value of [qname] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setQname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qname !== $v) {
            $this->qname = $v;
            $this->modifiedColumns[] = OccurrencePeer::QNAME;
        }


        return $this;
    } // setQname()

    /**
     * Set the value of [qidentifier] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setQidentifier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qidentifier !== $v) {
            $this->qidentifier = $v;
            $this->modifiedColumns[] = OccurrencePeer::QIDENTIFIER;
        }


        return $this;
    } // setQidentifier()

    /**
     * Set the value of [qarea] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setQarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qarea !== $v) {
            $this->qarea = $v;
            $this->modifiedColumns[] = OccurrencePeer::QAREA;
        }


        return $this;
    } // setQarea()

    /**
     * Set the value of [qcountry] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setQcountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qcountry !== $v) {
            $this->qcountry = $v;
            $this->modifiedColumns[] = OccurrencePeer::QCOUNTRY;
        }


        return $this;
    } // setQcountry()

    /**
     * Set the value of [qcoordinates] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setQcoordinates($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qcoordinates !== $v) {
            $this->qcoordinates = $v;
            $this->modifiedColumns[] = OccurrencePeer::QCOORDINATES;
        }


        return $this;
    } // setQcoordinates()

    /**
     * Set the value of [type] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = OccurrencePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [ms] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setMs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ms !== $v) {
            $this->ms = $v;
            $this->modifiedColumns[] = OccurrencePeer::MS;
        }


        return $this;
    } // setMs()

    /**
     * Set the value of [storage] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setStorage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->storage !== $v) {
            $this->storage = $v;
            $this->modifiedColumns[] = OccurrencePeer::STORAGE;
        }


        return $this;
    } // setStorage()

    /**
     * Set the value of [recordtype] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setRecordtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recordtype !== $v) {
            $this->recordtype = $v;
            $this->modifiedColumns[] = OccurrencePeer::RECORDTYPE;
        }


        return $this;
    } // setRecordtype()

    /**
     * Set the value of [basisofrecord] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setBasisofrecord($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->basisofrecord !== $v) {
            $this->basisofrecord = $v;
            $this->modifiedColumns[] = OccurrencePeer::BASISOFRECORD;
        }


        return $this;
    } // setBasisofrecord()

    /**
     * Set the value of [checkedcol] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCheckedcol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->checkedcol !== $v) {
            $this->checkedcol = $v;
            $this->modifiedColumns[] = OccurrencePeer::CHECKEDCOL;
        }


        return $this;
    } // setCheckedcol()

    /**
     * Set the value of [validity] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setValidity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->validity !== $v) {
            $this->validity = $v;
            $this->modifiedColumns[] = OccurrencePeer::VALIDITY;
        }


        return $this;
    } // setValidity()

    /**
     * Set the value of [daterecapture] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDaterecapture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->daterecapture !== $v) {
            $this->daterecapture = $v;
            $this->modifiedColumns[] = OccurrencePeer::DATERECAPTURE;
        }


        return $this;
    } // setDaterecapture()

    /**
     * Set the value of [latdegrel] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatdegrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdegrel !== $v) {
            $this->latdegrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATDEGREL;
        }


        return $this;
    } // setLatdegrel()

    /**
     * Set the value of [latminrel] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLatminrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latminrel !== $v) {
            $this->latminrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::LATMINREL;
        }


        return $this;
    } // setLatminrel()

    /**
     * Set the value of [northsouthrel] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setNorthsouthrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthrel !== $v) {
            $this->northsouthrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::NORTHSOUTHREL;
        }


        return $this;
    } // setNorthsouthrel()

    /**
     * Set the value of [longdegrel] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongdegrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdegrel !== $v) {
            $this->longdegrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGDEGREL;
        }


        return $this;
    } // setLongdegrel()

    /**
     * Set the value of [longminrel] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLongminrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longminrel !== $v) {
            $this->longminrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::LONGMINREL;
        }


        return $this;
    } // setLongminrel()

    /**
     * Set the value of [eastwestrel] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setEastwestrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwestrel !== $v) {
            $this->eastwestrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::EASTWESTREL;
        }


        return $this;
    } // setEastwestrel()

    /**
     * Set the value of [lengthrel] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLengthrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengthrel !== $v) {
            $this->lengthrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTHREL;
        }


        return $this;
    } // setLengthrel()

    /**
     * Set the value of [lengthtyperel] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLengthtyperel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtyperel !== $v) {
            $this->lengthtyperel = $v;
            $this->modifiedColumns[] = OccurrencePeer::LENGTHTYPEREL;
        }


        return $this;
    } // setLengthtyperel()

    /**
     * Set the value of [weightrel] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setWeightrel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightrel !== $v) {
            $this->weightrel = $v;
            $this->modifiedColumns[] = OccurrencePeer::WEIGHTREL;
        }


        return $this;
    } // setWeightrel()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = OccurrencePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Set the value of [dateentered] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateentered !== $v) {
            $this->dateentered = $v;
            $this->modifiedColumns[] = OccurrencePeer::DATEENTERED;
        }


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = OccurrencePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = OccurrencePeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = OccurrencePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Occurrence The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = OccurrencePeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [locality1] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setLocality1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality1 !== $v) {
            $this->locality1 = $v;
            $this->modifiedColumns[] = OccurrencePeer::LOCALITY1;
        }


        return $this;
    } // setLocality1()

    /**
     * Set the value of [twodegree30w] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setTwodegree30w($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->twodegree30w !== $v) {
            $this->twodegree30w = $v;
            $this->modifiedColumns[] = OccurrencePeer::TWODEGREE30W;
        }


        return $this;
    } // setTwodegree30w()

    /**
     * Set the value of [onedegree30w] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setOnedegree30w($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->onedegree30w !== $v) {
            $this->onedegree30w = $v;
            $this->modifiedColumns[] = OccurrencePeer::ONEDEGREE30W;
        }


        return $this;
    } // setOnedegree30w()

    /**
     * Set the value of [tendegree30w] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setTendegree30w($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tendegree30w !== $v) {
            $this->tendegree30w = $v;
            $this->modifiedColumns[] = OccurrencePeer::TENDEGREE30W;
        }


        return $this;
    } // setTendegree30w()

    /**
     * Set the value of [csquarecode] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setCsquarecode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->csquarecode !== $v) {
            $this->csquarecode = $v;
            $this->modifiedColumns[] = OccurrencePeer::CSQUARECODE;
        }


        return $this;
    } // setCsquarecode()

    /**
     * Set the value of [publisheddistance] column.
     *
     * @param  double $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setPublisheddistance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->publisheddistance !== $v) {
            $this->publisheddistance = $v;
            $this->modifiedColumns[] = OccurrencePeer::PUBLISHEDDISTANCE;
        }


        return $this;
    } // setPublisheddistance()

    /**
     * Set the value of [info] column.
     *
     * @param  string $v new value
     * @return Occurrence The current object (for fluent API support)
     */
    public function setInfo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->info !== $v) {
            $this->info = $v;
            $this->modifiedColumns[] = OccurrencePeer::INFO;
        }


        return $this;
    } // setInfo()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Occurrence The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = OccurrencePeer::TS;
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

            $this->catnum2 = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->occurrencerefno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->syncode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->stockcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->genuscol = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->speciescol = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->colname = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->picname = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->catnum = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->url = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->station = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->cruise = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->gazetteer = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->localitytype = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->waterdepthmin = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->waterdepthmax = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->altitudemin = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->altitudemax = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->latitudedeg = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->latitudemin = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->northsouth = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->latitudedec = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->longitudedeg = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->longitudemin = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->eastwest = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->longitudedec = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->accuracy = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->salinity = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->latitudeto = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->longitudeto = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->latitudedegto = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->latitudeminto = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->northsouthto = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->longitudedegto = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->longitudeminto = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->eastwestto = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->temp = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->areacode = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->seadrainage = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->c_code = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->province = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->date = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->dateto = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->year = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->datetype = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->daytimestart = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->daytimestop = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->length = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->lengthtype = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->length2 = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->lengthtype2 = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->lengthmin = ($row[$startcol + 52] !== null) ? (double) $row[$startcol + 52] : null;
            $this->lengthmax = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->weight = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->number = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->percentcatch = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->abundance = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->livestage = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->sex = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->bottom = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->gear = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->remark_fb = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->remark = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->vessel = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->expedition = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->collector = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->identifier = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->identifierstandard = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->identifieryr = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->qname = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->qidentifier = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->qarea = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->qcountry = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->qcoordinates = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->type = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->ms = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->storage = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->recordtype = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->basisofrecord = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->checkedcol = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->validity = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->daterecapture = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->latdegrel = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->latminrel = ($row[$startcol + 84] !== null) ? (double) $row[$startcol + 84] : null;
            $this->northsouthrel = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->longdegrel = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->longminrel = ($row[$startcol + 87] !== null) ? (double) $row[$startcol + 87] : null;
            $this->eastwestrel = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->lengthrel = ($row[$startcol + 89] !== null) ? (int) $row[$startcol + 89] : null;
            $this->lengthtyperel = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->weightrel = ($row[$startcol + 91] !== null) ? (double) $row[$startcol + 91] : null;
            $this->entered = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->dateentered = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->modified = ($row[$startcol + 94] !== null) ? (int) $row[$startcol + 94] : null;
            $this->datemodified = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->expert = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->datechecked = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->locality1 = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->twodegree30w = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->onedegree30w = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->tendegree30w = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->csquarecode = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->publisheddistance = ($row[$startcol + 103] !== null) ? (double) $row[$startcol + 103] : null;
            $this->info = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->ts = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 106; // 106 = OccurrencePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Occurrence object", $e);
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
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OccurrencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OccurrenceQuery::create()
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
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OccurrencePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = OccurrencePeer::CATNUM2;
        if (null !== $this->catnum2) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OccurrencePeer::CATNUM2 . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OccurrencePeer::CATNUM2)) {
            $modifiedColumns[':p' . $index++]  = '`catnum2`';
        }
        if ($this->isColumnModified(OccurrencePeer::OCCURRENCEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`OccurrenceRefNo`';
        }
        if ($this->isColumnModified(OccurrencePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(OccurrencePeer::SYNCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Syncode`';
        }
        if ($this->isColumnModified(OccurrencePeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Stockcode`';
        }
        if ($this->isColumnModified(OccurrencePeer::GENUSCOL)) {
            $modifiedColumns[':p' . $index++]  = '`GenusCol`';
        }
        if ($this->isColumnModified(OccurrencePeer::SPECIESCOL)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesCol`';
        }
        if ($this->isColumnModified(OccurrencePeer::COLNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ColName`';
        }
        if ($this->isColumnModified(OccurrencePeer::PICNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PicName`';
        }
        if ($this->isColumnModified(OccurrencePeer::CATNUM)) {
            $modifiedColumns[':p' . $index++]  = '`CatNum`';
        }
        if ($this->isColumnModified(OccurrencePeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`URL`';
        }
        if ($this->isColumnModified(OccurrencePeer::STATION)) {
            $modifiedColumns[':p' . $index++]  = '`Station`';
        }
        if ($this->isColumnModified(OccurrencePeer::CRUISE)) {
            $modifiedColumns[':p' . $index++]  = '`Cruise`';
        }
        if ($this->isColumnModified(OccurrencePeer::GAZETTEER)) {
            $modifiedColumns[':p' . $index++]  = '`Gazetteer`';
        }
        if ($this->isColumnModified(OccurrencePeer::LOCALITYTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LocalityType`';
        }
        if ($this->isColumnModified(OccurrencePeer::WATERDEPTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WaterDepthMin`';
        }
        if ($this->isColumnModified(OccurrencePeer::WATERDEPTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WaterDepthMax`';
        }
        if ($this->isColumnModified(OccurrencePeer::ALTITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AltitudeMin`';
        }
        if ($this->isColumnModified(OccurrencePeer::ALTITUDEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AltitudeMax`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDeg`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeMin`';
        }
        if ($this->isColumnModified(OccurrencePeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATITUDEDEC)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDec`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDeg`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeMIn`';
        }
        if ($this->isColumnModified(OccurrencePeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEDEC)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDec`';
        }
        if ($this->isColumnModified(OccurrencePeer::ACCURACY)) {
            $modifiedColumns[':p' . $index++]  = '`Accuracy`';
        }
        if ($this->isColumnModified(OccurrencePeer::SALINITY)) {
            $modifiedColumns[':p' . $index++]  = '`Salinity`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATITUDETO)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGITUDETO)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATITUDEDEGTO)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeDegTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATITUDEMINTO)) {
            $modifiedColumns[':p' . $index++]  = '`LatitudeMinTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::NORTHSOUTHTO)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEDEGTO)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeDegTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEMINTO)) {
            $modifiedColumns[':p' . $index++]  = '`LongitudeMInTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::EASTWESTTO)) {
            $modifiedColumns[':p' . $index++]  = '`EastWestTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::TEMP)) {
            $modifiedColumns[':p' . $index++]  = '`Temp`';
        }
        if ($this->isColumnModified(OccurrencePeer::AREACODE)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCode`';
        }
        if ($this->isColumnModified(OccurrencePeer::SEADRAINAGE)) {
            $modifiedColumns[':p' . $index++]  = '`SeaDrainage`';
        }
        if ($this->isColumnModified(OccurrencePeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(OccurrencePeer::PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`Province`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`Date`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATETO)) {
            $modifiedColumns[':p' . $index++]  = '`DateTo`';
        }
        if ($this->isColumnModified(OccurrencePeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`DateType`';
        }
        if ($this->isColumnModified(OccurrencePeer::DAYTIMESTART)) {
            $modifiedColumns[':p' . $index++]  = '`DayTimeStart`';
        }
        if ($this->isColumnModified(OccurrencePeer::DAYTIMESTOP)) {
            $modifiedColumns[':p' . $index++]  = '`DayTimeStop`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Length`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTH2)) {
            $modifiedColumns[':p' . $index++]  = '`Length2`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTHTYPE2)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType2`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Lengthmin`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Lengthmax`';
        }
        if ($this->isColumnModified(OccurrencePeer::WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`Weight`';
        }
        if ($this->isColumnModified(OccurrencePeer::NUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`Number`';
        }
        if ($this->isColumnModified(OccurrencePeer::PERCENTCATCH)) {
            $modifiedColumns[':p' . $index++]  = '`PercentCatch`';
        }
        if ($this->isColumnModified(OccurrencePeer::ABUNDANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance`';
        }
        if ($this->isColumnModified(OccurrencePeer::LIVESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`LiveStage`';
        }
        if ($this->isColumnModified(OccurrencePeer::SEX)) {
            $modifiedColumns[':p' . $index++]  = '`Sex`';
        }
        if ($this->isColumnModified(OccurrencePeer::BOTTOM)) {
            $modifiedColumns[':p' . $index++]  = '`Bottom`';
        }
        if ($this->isColumnModified(OccurrencePeer::GEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Gear`';
        }
        if ($this->isColumnModified(OccurrencePeer::REMARK_FB)) {
            $modifiedColumns[':p' . $index++]  = '`Remark_FB`';
        }
        if ($this->isColumnModified(OccurrencePeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(OccurrencePeer::VESSEL)) {
            $modifiedColumns[':p' . $index++]  = '`Vessel`';
        }
        if ($this->isColumnModified(OccurrencePeer::EXPEDITION)) {
            $modifiedColumns[':p' . $index++]  = '`Expedition`';
        }
        if ($this->isColumnModified(OccurrencePeer::COLLECTOR)) {
            $modifiedColumns[':p' . $index++]  = '`Collector`';
        }
        if ($this->isColumnModified(OccurrencePeer::IDENTIFIER)) {
            $modifiedColumns[':p' . $index++]  = '`Identifier`';
        }
        if ($this->isColumnModified(OccurrencePeer::IDENTIFIERSTANDARD)) {
            $modifiedColumns[':p' . $index++]  = '`IdentifierStandard`';
        }
        if ($this->isColumnModified(OccurrencePeer::IDENTIFIERYR)) {
            $modifiedColumns[':p' . $index++]  = '`IdentifierYR`';
        }
        if ($this->isColumnModified(OccurrencePeer::QNAME)) {
            $modifiedColumns[':p' . $index++]  = '`QName`';
        }
        if ($this->isColumnModified(OccurrencePeer::QIDENTIFIER)) {
            $modifiedColumns[':p' . $index++]  = '`QIdentifier`';
        }
        if ($this->isColumnModified(OccurrencePeer::QAREA)) {
            $modifiedColumns[':p' . $index++]  = '`QArea`';
        }
        if ($this->isColumnModified(OccurrencePeer::QCOUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`QCountry`';
        }
        if ($this->isColumnModified(OccurrencePeer::QCOORDINATES)) {
            $modifiedColumns[':p' . $index++]  = '`QCoordinates`';
        }
        if ($this->isColumnModified(OccurrencePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(OccurrencePeer::MS)) {
            $modifiedColumns[':p' . $index++]  = '`MS`';
        }
        if ($this->isColumnModified(OccurrencePeer::STORAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Storage`';
        }
        if ($this->isColumnModified(OccurrencePeer::RECORDTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`RecordType`';
        }
        if ($this->isColumnModified(OccurrencePeer::BASISOFRECORD)) {
            $modifiedColumns[':p' . $index++]  = '`BasisOfRecord`';
        }
        if ($this->isColumnModified(OccurrencePeer::CHECKEDCOL)) {
            $modifiedColumns[':p' . $index++]  = '`CheckedCol`';
        }
        if ($this->isColumnModified(OccurrencePeer::VALIDITY)) {
            $modifiedColumns[':p' . $index++]  = '`Validity`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATERECAPTURE)) {
            $modifiedColumns[':p' . $index++]  = '`DateRecapture`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATDEGREL)) {
            $modifiedColumns[':p' . $index++]  = '`LatDegRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::LATMINREL)) {
            $modifiedColumns[':p' . $index++]  = '`LatMinRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::NORTHSOUTHREL)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGDEGREL)) {
            $modifiedColumns[':p' . $index++]  = '`LongDegRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::LONGMINREL)) {
            $modifiedColumns[':p' . $index++]  = '`LongMinRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::EASTWESTREL)) {
            $modifiedColumns[':p' . $index++]  = '`EastWestRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTHREL)) {
            $modifiedColumns[':p' . $index++]  = '`LengthRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::LENGTHTYPEREL)) {
            $modifiedColumns[':p' . $index++]  = '`LengthTypeRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::WEIGHTREL)) {
            $modifiedColumns[':p' . $index++]  = '`WeightRel`';
        }
        if ($this->isColumnModified(OccurrencePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(OccurrencePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(OccurrencePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(OccurrencePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(OccurrencePeer::LOCALITY1)) {
            $modifiedColumns[':p' . $index++]  = '`Locality1`';
        }
        if ($this->isColumnModified(OccurrencePeer::TWODEGREE30W)) {
            $modifiedColumns[':p' . $index++]  = '`TwoDegree30W`';
        }
        if ($this->isColumnModified(OccurrencePeer::ONEDEGREE30W)) {
            $modifiedColumns[':p' . $index++]  = '`OneDegree30W`';
        }
        if ($this->isColumnModified(OccurrencePeer::TENDEGREE30W)) {
            $modifiedColumns[':p' . $index++]  = '`TenDegree30W`';
        }
        if ($this->isColumnModified(OccurrencePeer::CSQUARECODE)) {
            $modifiedColumns[':p' . $index++]  = '`CSquarecode`';
        }
        if ($this->isColumnModified(OccurrencePeer::PUBLISHEDDISTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`PublishedDistance`';
        }
        if ($this->isColumnModified(OccurrencePeer::INFO)) {
            $modifiedColumns[':p' . $index++]  = '`Info`';
        }
        if ($this->isColumnModified(OccurrencePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `occurrence` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`catnum2`':
                        $stmt->bindValue($identifier, $this->catnum2, PDO::PARAM_INT);
                        break;
                    case '`OccurrenceRefNo`':
                        $stmt->bindValue($identifier, $this->occurrencerefno, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Syncode`':
                        $stmt->bindValue($identifier, $this->syncode, PDO::PARAM_INT);
                        break;
                    case '`Stockcode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`GenusCol`':
                        $stmt->bindValue($identifier, $this->genuscol, PDO::PARAM_STR);
                        break;
                    case '`SpeciesCol`':
                        $stmt->bindValue($identifier, $this->speciescol, PDO::PARAM_STR);
                        break;
                    case '`ColName`':
                        $stmt->bindValue($identifier, $this->colname, PDO::PARAM_STR);
                        break;
                    case '`PicName`':
                        $stmt->bindValue($identifier, $this->picname, PDO::PARAM_STR);
                        break;
                    case '`CatNum`':
                        $stmt->bindValue($identifier, $this->catnum, PDO::PARAM_STR);
                        break;
                    case '`URL`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`Station`':
                        $stmt->bindValue($identifier, $this->station, PDO::PARAM_STR);
                        break;
                    case '`Cruise`':
                        $stmt->bindValue($identifier, $this->cruise, PDO::PARAM_STR);
                        break;
                    case '`Gazetteer`':
                        $stmt->bindValue($identifier, $this->gazetteer, PDO::PARAM_STR);
                        break;
                    case '`LocalityType`':
                        $stmt->bindValue($identifier, $this->localitytype, PDO::PARAM_STR);
                        break;
                    case '`WaterDepthMin`':
                        $stmt->bindValue($identifier, $this->waterdepthmin, PDO::PARAM_STR);
                        break;
                    case '`WaterDepthMax`':
                        $stmt->bindValue($identifier, $this->waterdepthmax, PDO::PARAM_STR);
                        break;
                    case '`AltitudeMin`':
                        $stmt->bindValue($identifier, $this->altitudemin, PDO::PARAM_INT);
                        break;
                    case '`AltitudeMax`':
                        $stmt->bindValue($identifier, $this->altitudemax, PDO::PARAM_INT);
                        break;
                    case '`LatitudeDeg`':
                        $stmt->bindValue($identifier, $this->latitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LatitudeMin`':
                        $stmt->bindValue($identifier, $this->latitudemin, PDO::PARAM_STR);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LatitudeDec`':
                        $stmt->bindValue($identifier, $this->latitudedec, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDeg`':
                        $stmt->bindValue($identifier, $this->longitudedeg, PDO::PARAM_INT);
                        break;
                    case '`LongitudeMIn`':
                        $stmt->bindValue($identifier, $this->longitudemin, PDO::PARAM_STR);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDec`':
                        $stmt->bindValue($identifier, $this->longitudedec, PDO::PARAM_STR);
                        break;
                    case '`Accuracy`':
                        $stmt->bindValue($identifier, $this->accuracy, PDO::PARAM_STR);
                        break;
                    case '`Salinity`':
                        $stmt->bindValue($identifier, $this->salinity, PDO::PARAM_STR);
                        break;
                    case '`LatitudeTo`':
                        $stmt->bindValue($identifier, $this->latitudeto, PDO::PARAM_STR);
                        break;
                    case '`LongitudeTo`':
                        $stmt->bindValue($identifier, $this->longitudeto, PDO::PARAM_STR);
                        break;
                    case '`LatitudeDegTo`':
                        $stmt->bindValue($identifier, $this->latitudedegto, PDO::PARAM_INT);
                        break;
                    case '`LatitudeMinTo`':
                        $stmt->bindValue($identifier, $this->latitudeminto, PDO::PARAM_STR);
                        break;
                    case '`NorthSouthTo`':
                        $stmt->bindValue($identifier, $this->northsouthto, PDO::PARAM_STR);
                        break;
                    case '`LongitudeDegTo`':
                        $stmt->bindValue($identifier, $this->longitudedegto, PDO::PARAM_INT);
                        break;
                    case '`LongitudeMInTo`':
                        $stmt->bindValue($identifier, $this->longitudeminto, PDO::PARAM_STR);
                        break;
                    case '`EastWestTo`':
                        $stmt->bindValue($identifier, $this->eastwestto, PDO::PARAM_STR);
                        break;
                    case '`Temp`':
                        $stmt->bindValue($identifier, $this->temp, PDO::PARAM_STR);
                        break;
                    case '`AreaCode`':
                        $stmt->bindValue($identifier, $this->areacode, PDO::PARAM_INT);
                        break;
                    case '`SeaDrainage`':
                        $stmt->bindValue($identifier, $this->seadrainage, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Province`':
                        $stmt->bindValue($identifier, $this->province, PDO::PARAM_STR);
                        break;
                    case '`Date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`DateTo`':
                        $stmt->bindValue($identifier, $this->dateto, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`DateType`':
                        $stmt->bindValue($identifier, $this->datetype, PDO::PARAM_STR);
                        break;
                    case '`DayTimeStart`':
                        $stmt->bindValue($identifier, $this->daytimestart, PDO::PARAM_STR);
                        break;
                    case '`DayTimeStop`':
                        $stmt->bindValue($identifier, $this->daytimestop, PDO::PARAM_STR);
                        break;
                    case '`Length`':
                        $stmt->bindValue($identifier, $this->length, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`Length2`':
                        $stmt->bindValue($identifier, $this->length2, PDO::PARAM_STR);
                        break;
                    case '`LengthType2`':
                        $stmt->bindValue($identifier, $this->lengthtype2, PDO::PARAM_STR);
                        break;
                    case '`Lengthmin`':
                        $stmt->bindValue($identifier, $this->lengthmin, PDO::PARAM_STR);
                        break;
                    case '`Lengthmax`':
                        $stmt->bindValue($identifier, $this->lengthmax, PDO::PARAM_STR);
                        break;
                    case '`Weight`':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case '`Number`':
                        $stmt->bindValue($identifier, $this->number, PDO::PARAM_INT);
                        break;
                    case '`PercentCatch`':
                        $stmt->bindValue($identifier, $this->percentcatch, PDO::PARAM_STR);
                        break;
                    case '`Abundance`':
                        $stmt->bindValue($identifier, $this->abundance, PDO::PARAM_STR);
                        break;
                    case '`LiveStage`':
                        $stmt->bindValue($identifier, $this->livestage, PDO::PARAM_STR);
                        break;
                    case '`Sex`':
                        $stmt->bindValue($identifier, $this->sex, PDO::PARAM_STR);
                        break;
                    case '`Bottom`':
                        $stmt->bindValue($identifier, $this->bottom, PDO::PARAM_STR);
                        break;
                    case '`Gear`':
                        $stmt->bindValue($identifier, $this->gear, PDO::PARAM_STR);
                        break;
                    case '`Remark_FB`':
                        $stmt->bindValue($identifier, $this->remark_fb, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`Vessel`':
                        $stmt->bindValue($identifier, $this->vessel, PDO::PARAM_STR);
                        break;
                    case '`Expedition`':
                        $stmt->bindValue($identifier, $this->expedition, PDO::PARAM_STR);
                        break;
                    case '`Collector`':
                        $stmt->bindValue($identifier, $this->collector, PDO::PARAM_STR);
                        break;
                    case '`Identifier`':
                        $stmt->bindValue($identifier, $this->identifier, PDO::PARAM_STR);
                        break;
                    case '`IdentifierStandard`':
                        $stmt->bindValue($identifier, $this->identifierstandard, PDO::PARAM_STR);
                        break;
                    case '`IdentifierYR`':
                        $stmt->bindValue($identifier, $this->identifieryr, PDO::PARAM_INT);
                        break;
                    case '`QName`':
                        $stmt->bindValue($identifier, $this->qname, PDO::PARAM_INT);
                        break;
                    case '`QIdentifier`':
                        $stmt->bindValue($identifier, $this->qidentifier, PDO::PARAM_INT);
                        break;
                    case '`QArea`':
                        $stmt->bindValue($identifier, $this->qarea, PDO::PARAM_INT);
                        break;
                    case '`QCountry`':
                        $stmt->bindValue($identifier, $this->qcountry, PDO::PARAM_INT);
                        break;
                    case '`QCoordinates`':
                        $stmt->bindValue($identifier, $this->qcoordinates, PDO::PARAM_INT);
                        break;
                    case '`Type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`MS`':
                        $stmt->bindValue($identifier, $this->ms, PDO::PARAM_STR);
                        break;
                    case '`Storage`':
                        $stmt->bindValue($identifier, $this->storage, PDO::PARAM_STR);
                        break;
                    case '`RecordType`':
                        $stmt->bindValue($identifier, $this->recordtype, PDO::PARAM_STR);
                        break;
                    case '`BasisOfRecord`':
                        $stmt->bindValue($identifier, $this->basisofrecord, PDO::PARAM_STR);
                        break;
                    case '`CheckedCol`':
                        $stmt->bindValue($identifier, $this->checkedcol, PDO::PARAM_STR);
                        break;
                    case '`Validity`':
                        $stmt->bindValue($identifier, $this->validity, PDO::PARAM_STR);
                        break;
                    case '`DateRecapture`':
                        $stmt->bindValue($identifier, $this->daterecapture, PDO::PARAM_STR);
                        break;
                    case '`LatDegRel`':
                        $stmt->bindValue($identifier, $this->latdegrel, PDO::PARAM_INT);
                        break;
                    case '`LatMinRel`':
                        $stmt->bindValue($identifier, $this->latminrel, PDO::PARAM_STR);
                        break;
                    case '`NorthSouthRel`':
                        $stmt->bindValue($identifier, $this->northsouthrel, PDO::PARAM_STR);
                        break;
                    case '`LongDegRel`':
                        $stmt->bindValue($identifier, $this->longdegrel, PDO::PARAM_INT);
                        break;
                    case '`LongMinRel`':
                        $stmt->bindValue($identifier, $this->longminrel, PDO::PARAM_STR);
                        break;
                    case '`EastWestRel`':
                        $stmt->bindValue($identifier, $this->eastwestrel, PDO::PARAM_STR);
                        break;
                    case '`LengthRel`':
                        $stmt->bindValue($identifier, $this->lengthrel, PDO::PARAM_INT);
                        break;
                    case '`LengthTypeRel`':
                        $stmt->bindValue($identifier, $this->lengthtyperel, PDO::PARAM_STR);
                        break;
                    case '`WeightRel`':
                        $stmt->bindValue($identifier, $this->weightrel, PDO::PARAM_STR);
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
                    case '`Locality1`':
                        $stmt->bindValue($identifier, $this->locality1, PDO::PARAM_STR);
                        break;
                    case '`TwoDegree30W`':
                        $stmt->bindValue($identifier, $this->twodegree30w, PDO::PARAM_STR);
                        break;
                    case '`OneDegree30W`':
                        $stmt->bindValue($identifier, $this->onedegree30w, PDO::PARAM_STR);
                        break;
                    case '`TenDegree30W`':
                        $stmt->bindValue($identifier, $this->tendegree30w, PDO::PARAM_STR);
                        break;
                    case '`CSquarecode`':
                        $stmt->bindValue($identifier, $this->csquarecode, PDO::PARAM_STR);
                        break;
                    case '`PublishedDistance`':
                        $stmt->bindValue($identifier, $this->publisheddistance, PDO::PARAM_STR);
                        break;
                    case '`Info`':
                        $stmt->bindValue($identifier, $this->info, PDO::PARAM_STR);
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
        $this->setCatnum2($pk);

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


            if (($retval = OccurrencePeer::doValidate($this, $columns)) !== true) {
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
        $pos = OccurrencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCatnum2();
                break;
            case 1:
                return $this->getOccurrencerefno();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getSyncode();
                break;
            case 4:
                return $this->getStockcode();
                break;
            case 5:
                return $this->getGenuscol();
                break;
            case 6:
                return $this->getSpeciescol();
                break;
            case 7:
                return $this->getColname();
                break;
            case 8:
                return $this->getPicname();
                break;
            case 9:
                return $this->getCatnum();
                break;
            case 10:
                return $this->getUrl();
                break;
            case 11:
                return $this->getStation();
                break;
            case 12:
                return $this->getCruise();
                break;
            case 13:
                return $this->getGazetteer();
                break;
            case 14:
                return $this->getLocalitytype();
                break;
            case 15:
                return $this->getWaterdepthmin();
                break;
            case 16:
                return $this->getWaterdepthmax();
                break;
            case 17:
                return $this->getAltitudemin();
                break;
            case 18:
                return $this->getAltitudemax();
                break;
            case 19:
                return $this->getLatitudedeg();
                break;
            case 20:
                return $this->getLatitudemin();
                break;
            case 21:
                return $this->getNorthsouth();
                break;
            case 22:
                return $this->getLatitudedec();
                break;
            case 23:
                return $this->getLongitudedeg();
                break;
            case 24:
                return $this->getLongitudemin();
                break;
            case 25:
                return $this->getEastwest();
                break;
            case 26:
                return $this->getLongitudedec();
                break;
            case 27:
                return $this->getAccuracy();
                break;
            case 28:
                return $this->getSalinity();
                break;
            case 29:
                return $this->getLatitudeto();
                break;
            case 30:
                return $this->getLongitudeto();
                break;
            case 31:
                return $this->getLatitudedegto();
                break;
            case 32:
                return $this->getLatitudeminto();
                break;
            case 33:
                return $this->getNorthsouthto();
                break;
            case 34:
                return $this->getLongitudedegto();
                break;
            case 35:
                return $this->getLongitudeminto();
                break;
            case 36:
                return $this->getEastwestto();
                break;
            case 37:
                return $this->getTemp();
                break;
            case 38:
                return $this->getAreacode();
                break;
            case 39:
                return $this->getSeadrainage();
                break;
            case 40:
                return $this->getCCode();
                break;
            case 41:
                return $this->getProvince();
                break;
            case 42:
                return $this->getDate();
                break;
            case 43:
                return $this->getDateto();
                break;
            case 44:
                return $this->getYear();
                break;
            case 45:
                return $this->getDatetype();
                break;
            case 46:
                return $this->getDaytimestart();
                break;
            case 47:
                return $this->getDaytimestop();
                break;
            case 48:
                return $this->getLength();
                break;
            case 49:
                return $this->getLengthtype();
                break;
            case 50:
                return $this->getLength2();
                break;
            case 51:
                return $this->getLengthtype2();
                break;
            case 52:
                return $this->getLengthmin();
                break;
            case 53:
                return $this->getLengthmax();
                break;
            case 54:
                return $this->getWeight();
                break;
            case 55:
                return $this->getNumber();
                break;
            case 56:
                return $this->getPercentcatch();
                break;
            case 57:
                return $this->getAbundance();
                break;
            case 58:
                return $this->getLivestage();
                break;
            case 59:
                return $this->getSex();
                break;
            case 60:
                return $this->getBottom();
                break;
            case 61:
                return $this->getGear();
                break;
            case 62:
                return $this->getRemarkFb();
                break;
            case 63:
                return $this->getRemark();
                break;
            case 64:
                return $this->getVessel();
                break;
            case 65:
                return $this->getExpedition();
                break;
            case 66:
                return $this->getCollector();
                break;
            case 67:
                return $this->getIdentifier();
                break;
            case 68:
                return $this->getIdentifierstandard();
                break;
            case 69:
                return $this->getIdentifieryr();
                break;
            case 70:
                return $this->getQname();
                break;
            case 71:
                return $this->getQidentifier();
                break;
            case 72:
                return $this->getQarea();
                break;
            case 73:
                return $this->getQcountry();
                break;
            case 74:
                return $this->getQcoordinates();
                break;
            case 75:
                return $this->getType();
                break;
            case 76:
                return $this->getMs();
                break;
            case 77:
                return $this->getStorage();
                break;
            case 78:
                return $this->getRecordtype();
                break;
            case 79:
                return $this->getBasisofrecord();
                break;
            case 80:
                return $this->getCheckedcol();
                break;
            case 81:
                return $this->getValidity();
                break;
            case 82:
                return $this->getDaterecapture();
                break;
            case 83:
                return $this->getLatdegrel();
                break;
            case 84:
                return $this->getLatminrel();
                break;
            case 85:
                return $this->getNorthsouthrel();
                break;
            case 86:
                return $this->getLongdegrel();
                break;
            case 87:
                return $this->getLongminrel();
                break;
            case 88:
                return $this->getEastwestrel();
                break;
            case 89:
                return $this->getLengthrel();
                break;
            case 90:
                return $this->getLengthtyperel();
                break;
            case 91:
                return $this->getWeightrel();
                break;
            case 92:
                return $this->getEntered();
                break;
            case 93:
                return $this->getDateentered();
                break;
            case 94:
                return $this->getModified();
                break;
            case 95:
                return $this->getDatemodified();
                break;
            case 96:
                return $this->getExpert();
                break;
            case 97:
                return $this->getDatechecked();
                break;
            case 98:
                return $this->getLocality1();
                break;
            case 99:
                return $this->getTwodegree30w();
                break;
            case 100:
                return $this->getOnedegree30w();
                break;
            case 101:
                return $this->getTendegree30w();
                break;
            case 102:
                return $this->getCsquarecode();
                break;
            case 103:
                return $this->getPublisheddistance();
                break;
            case 104:
                return $this->getInfo();
                break;
            case 105:
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
        if (isset($alreadyDumpedObjects['Occurrence'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Occurrence'][$this->getPrimaryKey()] = true;
        $keys = OccurrencePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCatnum2(),
            $keys[1] => $this->getOccurrencerefno(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getSyncode(),
            $keys[4] => $this->getStockcode(),
            $keys[5] => $this->getGenuscol(),
            $keys[6] => $this->getSpeciescol(),
            $keys[7] => $this->getColname(),
            $keys[8] => $this->getPicname(),
            $keys[9] => $this->getCatnum(),
            $keys[10] => $this->getUrl(),
            $keys[11] => $this->getStation(),
            $keys[12] => $this->getCruise(),
            $keys[13] => $this->getGazetteer(),
            $keys[14] => $this->getLocalitytype(),
            $keys[15] => $this->getWaterdepthmin(),
            $keys[16] => $this->getWaterdepthmax(),
            $keys[17] => $this->getAltitudemin(),
            $keys[18] => $this->getAltitudemax(),
            $keys[19] => $this->getLatitudedeg(),
            $keys[20] => $this->getLatitudemin(),
            $keys[21] => $this->getNorthsouth(),
            $keys[22] => $this->getLatitudedec(),
            $keys[23] => $this->getLongitudedeg(),
            $keys[24] => $this->getLongitudemin(),
            $keys[25] => $this->getEastwest(),
            $keys[26] => $this->getLongitudedec(),
            $keys[27] => $this->getAccuracy(),
            $keys[28] => $this->getSalinity(),
            $keys[29] => $this->getLatitudeto(),
            $keys[30] => $this->getLongitudeto(),
            $keys[31] => $this->getLatitudedegto(),
            $keys[32] => $this->getLatitudeminto(),
            $keys[33] => $this->getNorthsouthto(),
            $keys[34] => $this->getLongitudedegto(),
            $keys[35] => $this->getLongitudeminto(),
            $keys[36] => $this->getEastwestto(),
            $keys[37] => $this->getTemp(),
            $keys[38] => $this->getAreacode(),
            $keys[39] => $this->getSeadrainage(),
            $keys[40] => $this->getCCode(),
            $keys[41] => $this->getProvince(),
            $keys[42] => $this->getDate(),
            $keys[43] => $this->getDateto(),
            $keys[44] => $this->getYear(),
            $keys[45] => $this->getDatetype(),
            $keys[46] => $this->getDaytimestart(),
            $keys[47] => $this->getDaytimestop(),
            $keys[48] => $this->getLength(),
            $keys[49] => $this->getLengthtype(),
            $keys[50] => $this->getLength2(),
            $keys[51] => $this->getLengthtype2(),
            $keys[52] => $this->getLengthmin(),
            $keys[53] => $this->getLengthmax(),
            $keys[54] => $this->getWeight(),
            $keys[55] => $this->getNumber(),
            $keys[56] => $this->getPercentcatch(),
            $keys[57] => $this->getAbundance(),
            $keys[58] => $this->getLivestage(),
            $keys[59] => $this->getSex(),
            $keys[60] => $this->getBottom(),
            $keys[61] => $this->getGear(),
            $keys[62] => $this->getRemarkFb(),
            $keys[63] => $this->getRemark(),
            $keys[64] => $this->getVessel(),
            $keys[65] => $this->getExpedition(),
            $keys[66] => $this->getCollector(),
            $keys[67] => $this->getIdentifier(),
            $keys[68] => $this->getIdentifierstandard(),
            $keys[69] => $this->getIdentifieryr(),
            $keys[70] => $this->getQname(),
            $keys[71] => $this->getQidentifier(),
            $keys[72] => $this->getQarea(),
            $keys[73] => $this->getQcountry(),
            $keys[74] => $this->getQcoordinates(),
            $keys[75] => $this->getType(),
            $keys[76] => $this->getMs(),
            $keys[77] => $this->getStorage(),
            $keys[78] => $this->getRecordtype(),
            $keys[79] => $this->getBasisofrecord(),
            $keys[80] => $this->getCheckedcol(),
            $keys[81] => $this->getValidity(),
            $keys[82] => $this->getDaterecapture(),
            $keys[83] => $this->getLatdegrel(),
            $keys[84] => $this->getLatminrel(),
            $keys[85] => $this->getNorthsouthrel(),
            $keys[86] => $this->getLongdegrel(),
            $keys[87] => $this->getLongminrel(),
            $keys[88] => $this->getEastwestrel(),
            $keys[89] => $this->getLengthrel(),
            $keys[90] => $this->getLengthtyperel(),
            $keys[91] => $this->getWeightrel(),
            $keys[92] => $this->getEntered(),
            $keys[93] => $this->getDateentered(),
            $keys[94] => $this->getModified(),
            $keys[95] => $this->getDatemodified(),
            $keys[96] => $this->getExpert(),
            $keys[97] => $this->getDatechecked(),
            $keys[98] => $this->getLocality1(),
            $keys[99] => $this->getTwodegree30w(),
            $keys[100] => $this->getOnedegree30w(),
            $keys[101] => $this->getTendegree30w(),
            $keys[102] => $this->getCsquarecode(),
            $keys[103] => $this->getPublisheddistance(),
            $keys[104] => $this->getInfo(),
            $keys[105] => $this->getTs(),
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
        $pos = OccurrencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCatnum2($value);
                break;
            case 1:
                $this->setOccurrencerefno($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setSyncode($value);
                break;
            case 4:
                $this->setStockcode($value);
                break;
            case 5:
                $this->setGenuscol($value);
                break;
            case 6:
                $this->setSpeciescol($value);
                break;
            case 7:
                $this->setColname($value);
                break;
            case 8:
                $this->setPicname($value);
                break;
            case 9:
                $this->setCatnum($value);
                break;
            case 10:
                $this->setUrl($value);
                break;
            case 11:
                $this->setStation($value);
                break;
            case 12:
                $this->setCruise($value);
                break;
            case 13:
                $this->setGazetteer($value);
                break;
            case 14:
                $this->setLocalitytype($value);
                break;
            case 15:
                $this->setWaterdepthmin($value);
                break;
            case 16:
                $this->setWaterdepthmax($value);
                break;
            case 17:
                $this->setAltitudemin($value);
                break;
            case 18:
                $this->setAltitudemax($value);
                break;
            case 19:
                $this->setLatitudedeg($value);
                break;
            case 20:
                $this->setLatitudemin($value);
                break;
            case 21:
                $this->setNorthsouth($value);
                break;
            case 22:
                $this->setLatitudedec($value);
                break;
            case 23:
                $this->setLongitudedeg($value);
                break;
            case 24:
                $this->setLongitudemin($value);
                break;
            case 25:
                $this->setEastwest($value);
                break;
            case 26:
                $this->setLongitudedec($value);
                break;
            case 27:
                $this->setAccuracy($value);
                break;
            case 28:
                $this->setSalinity($value);
                break;
            case 29:
                $this->setLatitudeto($value);
                break;
            case 30:
                $this->setLongitudeto($value);
                break;
            case 31:
                $this->setLatitudedegto($value);
                break;
            case 32:
                $this->setLatitudeminto($value);
                break;
            case 33:
                $this->setNorthsouthto($value);
                break;
            case 34:
                $this->setLongitudedegto($value);
                break;
            case 35:
                $this->setLongitudeminto($value);
                break;
            case 36:
                $this->setEastwestto($value);
                break;
            case 37:
                $this->setTemp($value);
                break;
            case 38:
                $this->setAreacode($value);
                break;
            case 39:
                $this->setSeadrainage($value);
                break;
            case 40:
                $this->setCCode($value);
                break;
            case 41:
                $this->setProvince($value);
                break;
            case 42:
                $this->setDate($value);
                break;
            case 43:
                $this->setDateto($value);
                break;
            case 44:
                $this->setYear($value);
                break;
            case 45:
                $this->setDatetype($value);
                break;
            case 46:
                $this->setDaytimestart($value);
                break;
            case 47:
                $this->setDaytimestop($value);
                break;
            case 48:
                $this->setLength($value);
                break;
            case 49:
                $this->setLengthtype($value);
                break;
            case 50:
                $this->setLength2($value);
                break;
            case 51:
                $this->setLengthtype2($value);
                break;
            case 52:
                $this->setLengthmin($value);
                break;
            case 53:
                $this->setLengthmax($value);
                break;
            case 54:
                $this->setWeight($value);
                break;
            case 55:
                $this->setNumber($value);
                break;
            case 56:
                $this->setPercentcatch($value);
                break;
            case 57:
                $this->setAbundance($value);
                break;
            case 58:
                $this->setLivestage($value);
                break;
            case 59:
                $this->setSex($value);
                break;
            case 60:
                $this->setBottom($value);
                break;
            case 61:
                $this->setGear($value);
                break;
            case 62:
                $this->setRemarkFb($value);
                break;
            case 63:
                $this->setRemark($value);
                break;
            case 64:
                $this->setVessel($value);
                break;
            case 65:
                $this->setExpedition($value);
                break;
            case 66:
                $this->setCollector($value);
                break;
            case 67:
                $this->setIdentifier($value);
                break;
            case 68:
                $this->setIdentifierstandard($value);
                break;
            case 69:
                $this->setIdentifieryr($value);
                break;
            case 70:
                $this->setQname($value);
                break;
            case 71:
                $this->setQidentifier($value);
                break;
            case 72:
                $this->setQarea($value);
                break;
            case 73:
                $this->setQcountry($value);
                break;
            case 74:
                $this->setQcoordinates($value);
                break;
            case 75:
                $this->setType($value);
                break;
            case 76:
                $this->setMs($value);
                break;
            case 77:
                $this->setStorage($value);
                break;
            case 78:
                $this->setRecordtype($value);
                break;
            case 79:
                $this->setBasisofrecord($value);
                break;
            case 80:
                $this->setCheckedcol($value);
                break;
            case 81:
                $this->setValidity($value);
                break;
            case 82:
                $this->setDaterecapture($value);
                break;
            case 83:
                $this->setLatdegrel($value);
                break;
            case 84:
                $this->setLatminrel($value);
                break;
            case 85:
                $this->setNorthsouthrel($value);
                break;
            case 86:
                $this->setLongdegrel($value);
                break;
            case 87:
                $this->setLongminrel($value);
                break;
            case 88:
                $this->setEastwestrel($value);
                break;
            case 89:
                $this->setLengthrel($value);
                break;
            case 90:
                $this->setLengthtyperel($value);
                break;
            case 91:
                $this->setWeightrel($value);
                break;
            case 92:
                $this->setEntered($value);
                break;
            case 93:
                $this->setDateentered($value);
                break;
            case 94:
                $this->setModified($value);
                break;
            case 95:
                $this->setDatemodified($value);
                break;
            case 96:
                $this->setExpert($value);
                break;
            case 97:
                $this->setDatechecked($value);
                break;
            case 98:
                $this->setLocality1($value);
                break;
            case 99:
                $this->setTwodegree30w($value);
                break;
            case 100:
                $this->setOnedegree30w($value);
                break;
            case 101:
                $this->setTendegree30w($value);
                break;
            case 102:
                $this->setCsquarecode($value);
                break;
            case 103:
                $this->setPublisheddistance($value);
                break;
            case 104:
                $this->setInfo($value);
                break;
            case 105:
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
        $keys = OccurrencePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCatnum2($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOccurrencerefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSyncode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStockcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setGenuscol($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSpeciescol($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setColname($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPicname($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCatnum($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUrl($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCruise($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setGazetteer($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLocalitytype($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setWaterdepthmin($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setWaterdepthmax($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAltitudemin($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAltitudemax($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setLatitudedeg($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLatitudemin($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setNorthsouth($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLatitudedec($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setLongitudedeg($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLongitudemin($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setEastwest($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLongitudedec($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAccuracy($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSalinity($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLatitudeto($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLongitudeto($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLatitudedegto($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setLatitudeminto($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setNorthsouthto($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setLongitudedegto($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLongitudeminto($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEastwestto($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTemp($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setAreacode($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setSeadrainage($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setCCode($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setProvince($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setDate($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDateto($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setYear($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setDatetype($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setDaytimestart($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setDaytimestop($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setLength($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setLengthtype($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setLength2($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setLengthtype2($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setLengthmin($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setLengthmax($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setWeight($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setNumber($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setPercentcatch($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setAbundance($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setLivestage($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setSex($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setBottom($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setGear($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setRemarkFb($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setRemark($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setVessel($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setExpedition($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setCollector($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setIdentifier($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setIdentifierstandard($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setIdentifieryr($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setQname($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setQidentifier($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setQarea($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setQcountry($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setQcoordinates($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setType($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setMs($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setStorage($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setRecordtype($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setBasisofrecord($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setCheckedcol($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setValidity($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setDaterecapture($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setLatdegrel($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setLatminrel($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setNorthsouthrel($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setLongdegrel($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setLongminrel($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setEastwestrel($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setLengthrel($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setLengthtyperel($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setWeightrel($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setEntered($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setDateentered($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setModified($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setDatemodified($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setExpert($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setDatechecked($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setLocality1($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setTwodegree30w($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setOnedegree30w($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setTendegree30w($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setCsquarecode($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setPublisheddistance($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setInfo($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setTs($arr[$keys[105]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OccurrencePeer::DATABASE_NAME);

        if ($this->isColumnModified(OccurrencePeer::CATNUM2)) $criteria->add(OccurrencePeer::CATNUM2, $this->catnum2);
        if ($this->isColumnModified(OccurrencePeer::OCCURRENCEREFNO)) $criteria->add(OccurrencePeer::OCCURRENCEREFNO, $this->occurrencerefno);
        if ($this->isColumnModified(OccurrencePeer::SPECCODE)) $criteria->add(OccurrencePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(OccurrencePeer::SYNCODE)) $criteria->add(OccurrencePeer::SYNCODE, $this->syncode);
        if ($this->isColumnModified(OccurrencePeer::STOCKCODE)) $criteria->add(OccurrencePeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(OccurrencePeer::GENUSCOL)) $criteria->add(OccurrencePeer::GENUSCOL, $this->genuscol);
        if ($this->isColumnModified(OccurrencePeer::SPECIESCOL)) $criteria->add(OccurrencePeer::SPECIESCOL, $this->speciescol);
        if ($this->isColumnModified(OccurrencePeer::COLNAME)) $criteria->add(OccurrencePeer::COLNAME, $this->colname);
        if ($this->isColumnModified(OccurrencePeer::PICNAME)) $criteria->add(OccurrencePeer::PICNAME, $this->picname);
        if ($this->isColumnModified(OccurrencePeer::CATNUM)) $criteria->add(OccurrencePeer::CATNUM, $this->catnum);
        if ($this->isColumnModified(OccurrencePeer::URL)) $criteria->add(OccurrencePeer::URL, $this->url);
        if ($this->isColumnModified(OccurrencePeer::STATION)) $criteria->add(OccurrencePeer::STATION, $this->station);
        if ($this->isColumnModified(OccurrencePeer::CRUISE)) $criteria->add(OccurrencePeer::CRUISE, $this->cruise);
        if ($this->isColumnModified(OccurrencePeer::GAZETTEER)) $criteria->add(OccurrencePeer::GAZETTEER, $this->gazetteer);
        if ($this->isColumnModified(OccurrencePeer::LOCALITYTYPE)) $criteria->add(OccurrencePeer::LOCALITYTYPE, $this->localitytype);
        if ($this->isColumnModified(OccurrencePeer::WATERDEPTHMIN)) $criteria->add(OccurrencePeer::WATERDEPTHMIN, $this->waterdepthmin);
        if ($this->isColumnModified(OccurrencePeer::WATERDEPTHMAX)) $criteria->add(OccurrencePeer::WATERDEPTHMAX, $this->waterdepthmax);
        if ($this->isColumnModified(OccurrencePeer::ALTITUDEMIN)) $criteria->add(OccurrencePeer::ALTITUDEMIN, $this->altitudemin);
        if ($this->isColumnModified(OccurrencePeer::ALTITUDEMAX)) $criteria->add(OccurrencePeer::ALTITUDEMAX, $this->altitudemax);
        if ($this->isColumnModified(OccurrencePeer::LATITUDEDEG)) $criteria->add(OccurrencePeer::LATITUDEDEG, $this->latitudedeg);
        if ($this->isColumnModified(OccurrencePeer::LATITUDEMIN)) $criteria->add(OccurrencePeer::LATITUDEMIN, $this->latitudemin);
        if ($this->isColumnModified(OccurrencePeer::NORTHSOUTH)) $criteria->add(OccurrencePeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(OccurrencePeer::LATITUDEDEC)) $criteria->add(OccurrencePeer::LATITUDEDEC, $this->latitudedec);
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEDEG)) $criteria->add(OccurrencePeer::LONGITUDEDEG, $this->longitudedeg);
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEMIN)) $criteria->add(OccurrencePeer::LONGITUDEMIN, $this->longitudemin);
        if ($this->isColumnModified(OccurrencePeer::EASTWEST)) $criteria->add(OccurrencePeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEDEC)) $criteria->add(OccurrencePeer::LONGITUDEDEC, $this->longitudedec);
        if ($this->isColumnModified(OccurrencePeer::ACCURACY)) $criteria->add(OccurrencePeer::ACCURACY, $this->accuracy);
        if ($this->isColumnModified(OccurrencePeer::SALINITY)) $criteria->add(OccurrencePeer::SALINITY, $this->salinity);
        if ($this->isColumnModified(OccurrencePeer::LATITUDETO)) $criteria->add(OccurrencePeer::LATITUDETO, $this->latitudeto);
        if ($this->isColumnModified(OccurrencePeer::LONGITUDETO)) $criteria->add(OccurrencePeer::LONGITUDETO, $this->longitudeto);
        if ($this->isColumnModified(OccurrencePeer::LATITUDEDEGTO)) $criteria->add(OccurrencePeer::LATITUDEDEGTO, $this->latitudedegto);
        if ($this->isColumnModified(OccurrencePeer::LATITUDEMINTO)) $criteria->add(OccurrencePeer::LATITUDEMINTO, $this->latitudeminto);
        if ($this->isColumnModified(OccurrencePeer::NORTHSOUTHTO)) $criteria->add(OccurrencePeer::NORTHSOUTHTO, $this->northsouthto);
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEDEGTO)) $criteria->add(OccurrencePeer::LONGITUDEDEGTO, $this->longitudedegto);
        if ($this->isColumnModified(OccurrencePeer::LONGITUDEMINTO)) $criteria->add(OccurrencePeer::LONGITUDEMINTO, $this->longitudeminto);
        if ($this->isColumnModified(OccurrencePeer::EASTWESTTO)) $criteria->add(OccurrencePeer::EASTWESTTO, $this->eastwestto);
        if ($this->isColumnModified(OccurrencePeer::TEMP)) $criteria->add(OccurrencePeer::TEMP, $this->temp);
        if ($this->isColumnModified(OccurrencePeer::AREACODE)) $criteria->add(OccurrencePeer::AREACODE, $this->areacode);
        if ($this->isColumnModified(OccurrencePeer::SEADRAINAGE)) $criteria->add(OccurrencePeer::SEADRAINAGE, $this->seadrainage);
        if ($this->isColumnModified(OccurrencePeer::C_CODE)) $criteria->add(OccurrencePeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(OccurrencePeer::PROVINCE)) $criteria->add(OccurrencePeer::PROVINCE, $this->province);
        if ($this->isColumnModified(OccurrencePeer::DATE)) $criteria->add(OccurrencePeer::DATE, $this->date);
        if ($this->isColumnModified(OccurrencePeer::DATETO)) $criteria->add(OccurrencePeer::DATETO, $this->dateto);
        if ($this->isColumnModified(OccurrencePeer::YEAR)) $criteria->add(OccurrencePeer::YEAR, $this->year);
        if ($this->isColumnModified(OccurrencePeer::DATETYPE)) $criteria->add(OccurrencePeer::DATETYPE, $this->datetype);
        if ($this->isColumnModified(OccurrencePeer::DAYTIMESTART)) $criteria->add(OccurrencePeer::DAYTIMESTART, $this->daytimestart);
        if ($this->isColumnModified(OccurrencePeer::DAYTIMESTOP)) $criteria->add(OccurrencePeer::DAYTIMESTOP, $this->daytimestop);
        if ($this->isColumnModified(OccurrencePeer::LENGTH)) $criteria->add(OccurrencePeer::LENGTH, $this->length);
        if ($this->isColumnModified(OccurrencePeer::LENGTHTYPE)) $criteria->add(OccurrencePeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(OccurrencePeer::LENGTH2)) $criteria->add(OccurrencePeer::LENGTH2, $this->length2);
        if ($this->isColumnModified(OccurrencePeer::LENGTHTYPE2)) $criteria->add(OccurrencePeer::LENGTHTYPE2, $this->lengthtype2);
        if ($this->isColumnModified(OccurrencePeer::LENGTHMIN)) $criteria->add(OccurrencePeer::LENGTHMIN, $this->lengthmin);
        if ($this->isColumnModified(OccurrencePeer::LENGTHMAX)) $criteria->add(OccurrencePeer::LENGTHMAX, $this->lengthmax);
        if ($this->isColumnModified(OccurrencePeer::WEIGHT)) $criteria->add(OccurrencePeer::WEIGHT, $this->weight);
        if ($this->isColumnModified(OccurrencePeer::NUMBER)) $criteria->add(OccurrencePeer::NUMBER, $this->number);
        if ($this->isColumnModified(OccurrencePeer::PERCENTCATCH)) $criteria->add(OccurrencePeer::PERCENTCATCH, $this->percentcatch);
        if ($this->isColumnModified(OccurrencePeer::ABUNDANCE)) $criteria->add(OccurrencePeer::ABUNDANCE, $this->abundance);
        if ($this->isColumnModified(OccurrencePeer::LIVESTAGE)) $criteria->add(OccurrencePeer::LIVESTAGE, $this->livestage);
        if ($this->isColumnModified(OccurrencePeer::SEX)) $criteria->add(OccurrencePeer::SEX, $this->sex);
        if ($this->isColumnModified(OccurrencePeer::BOTTOM)) $criteria->add(OccurrencePeer::BOTTOM, $this->bottom);
        if ($this->isColumnModified(OccurrencePeer::GEAR)) $criteria->add(OccurrencePeer::GEAR, $this->gear);
        if ($this->isColumnModified(OccurrencePeer::REMARK_FB)) $criteria->add(OccurrencePeer::REMARK_FB, $this->remark_fb);
        if ($this->isColumnModified(OccurrencePeer::REMARK)) $criteria->add(OccurrencePeer::REMARK, $this->remark);
        if ($this->isColumnModified(OccurrencePeer::VESSEL)) $criteria->add(OccurrencePeer::VESSEL, $this->vessel);
        if ($this->isColumnModified(OccurrencePeer::EXPEDITION)) $criteria->add(OccurrencePeer::EXPEDITION, $this->expedition);
        if ($this->isColumnModified(OccurrencePeer::COLLECTOR)) $criteria->add(OccurrencePeer::COLLECTOR, $this->collector);
        if ($this->isColumnModified(OccurrencePeer::IDENTIFIER)) $criteria->add(OccurrencePeer::IDENTIFIER, $this->identifier);
        if ($this->isColumnModified(OccurrencePeer::IDENTIFIERSTANDARD)) $criteria->add(OccurrencePeer::IDENTIFIERSTANDARD, $this->identifierstandard);
        if ($this->isColumnModified(OccurrencePeer::IDENTIFIERYR)) $criteria->add(OccurrencePeer::IDENTIFIERYR, $this->identifieryr);
        if ($this->isColumnModified(OccurrencePeer::QNAME)) $criteria->add(OccurrencePeer::QNAME, $this->qname);
        if ($this->isColumnModified(OccurrencePeer::QIDENTIFIER)) $criteria->add(OccurrencePeer::QIDENTIFIER, $this->qidentifier);
        if ($this->isColumnModified(OccurrencePeer::QAREA)) $criteria->add(OccurrencePeer::QAREA, $this->qarea);
        if ($this->isColumnModified(OccurrencePeer::QCOUNTRY)) $criteria->add(OccurrencePeer::QCOUNTRY, $this->qcountry);
        if ($this->isColumnModified(OccurrencePeer::QCOORDINATES)) $criteria->add(OccurrencePeer::QCOORDINATES, $this->qcoordinates);
        if ($this->isColumnModified(OccurrencePeer::TYPE)) $criteria->add(OccurrencePeer::TYPE, $this->type);
        if ($this->isColumnModified(OccurrencePeer::MS)) $criteria->add(OccurrencePeer::MS, $this->ms);
        if ($this->isColumnModified(OccurrencePeer::STORAGE)) $criteria->add(OccurrencePeer::STORAGE, $this->storage);
        if ($this->isColumnModified(OccurrencePeer::RECORDTYPE)) $criteria->add(OccurrencePeer::RECORDTYPE, $this->recordtype);
        if ($this->isColumnModified(OccurrencePeer::BASISOFRECORD)) $criteria->add(OccurrencePeer::BASISOFRECORD, $this->basisofrecord);
        if ($this->isColumnModified(OccurrencePeer::CHECKEDCOL)) $criteria->add(OccurrencePeer::CHECKEDCOL, $this->checkedcol);
        if ($this->isColumnModified(OccurrencePeer::VALIDITY)) $criteria->add(OccurrencePeer::VALIDITY, $this->validity);
        if ($this->isColumnModified(OccurrencePeer::DATERECAPTURE)) $criteria->add(OccurrencePeer::DATERECAPTURE, $this->daterecapture);
        if ($this->isColumnModified(OccurrencePeer::LATDEGREL)) $criteria->add(OccurrencePeer::LATDEGREL, $this->latdegrel);
        if ($this->isColumnModified(OccurrencePeer::LATMINREL)) $criteria->add(OccurrencePeer::LATMINREL, $this->latminrel);
        if ($this->isColumnModified(OccurrencePeer::NORTHSOUTHREL)) $criteria->add(OccurrencePeer::NORTHSOUTHREL, $this->northsouthrel);
        if ($this->isColumnModified(OccurrencePeer::LONGDEGREL)) $criteria->add(OccurrencePeer::LONGDEGREL, $this->longdegrel);
        if ($this->isColumnModified(OccurrencePeer::LONGMINREL)) $criteria->add(OccurrencePeer::LONGMINREL, $this->longminrel);
        if ($this->isColumnModified(OccurrencePeer::EASTWESTREL)) $criteria->add(OccurrencePeer::EASTWESTREL, $this->eastwestrel);
        if ($this->isColumnModified(OccurrencePeer::LENGTHREL)) $criteria->add(OccurrencePeer::LENGTHREL, $this->lengthrel);
        if ($this->isColumnModified(OccurrencePeer::LENGTHTYPEREL)) $criteria->add(OccurrencePeer::LENGTHTYPEREL, $this->lengthtyperel);
        if ($this->isColumnModified(OccurrencePeer::WEIGHTREL)) $criteria->add(OccurrencePeer::WEIGHTREL, $this->weightrel);
        if ($this->isColumnModified(OccurrencePeer::ENTERED)) $criteria->add(OccurrencePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(OccurrencePeer::DATEENTERED)) $criteria->add(OccurrencePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(OccurrencePeer::MODIFIED)) $criteria->add(OccurrencePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(OccurrencePeer::DATEMODIFIED)) $criteria->add(OccurrencePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(OccurrencePeer::EXPERT)) $criteria->add(OccurrencePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(OccurrencePeer::DATECHECKED)) $criteria->add(OccurrencePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(OccurrencePeer::LOCALITY1)) $criteria->add(OccurrencePeer::LOCALITY1, $this->locality1);
        if ($this->isColumnModified(OccurrencePeer::TWODEGREE30W)) $criteria->add(OccurrencePeer::TWODEGREE30W, $this->twodegree30w);
        if ($this->isColumnModified(OccurrencePeer::ONEDEGREE30W)) $criteria->add(OccurrencePeer::ONEDEGREE30W, $this->onedegree30w);
        if ($this->isColumnModified(OccurrencePeer::TENDEGREE30W)) $criteria->add(OccurrencePeer::TENDEGREE30W, $this->tendegree30w);
        if ($this->isColumnModified(OccurrencePeer::CSQUARECODE)) $criteria->add(OccurrencePeer::CSQUARECODE, $this->csquarecode);
        if ($this->isColumnModified(OccurrencePeer::PUBLISHEDDISTANCE)) $criteria->add(OccurrencePeer::PUBLISHEDDISTANCE, $this->publisheddistance);
        if ($this->isColumnModified(OccurrencePeer::INFO)) $criteria->add(OccurrencePeer::INFO, $this->info);
        if ($this->isColumnModified(OccurrencePeer::TS)) $criteria->add(OccurrencePeer::TS, $this->ts);

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
        $criteria = new Criteria(OccurrencePeer::DATABASE_NAME);
        $criteria->add(OccurrencePeer::CATNUM2, $this->catnum2);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCatnum2();
    }

    /**
     * Generic method to set the primary key (catnum2 column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCatnum2($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCatnum2();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Occurrence (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOccurrencerefno($this->getOccurrencerefno());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setSyncode($this->getSyncode());
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setGenuscol($this->getGenuscol());
        $copyObj->setSpeciescol($this->getSpeciescol());
        $copyObj->setColname($this->getColname());
        $copyObj->setPicname($this->getPicname());
        $copyObj->setCatnum($this->getCatnum());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setStation($this->getStation());
        $copyObj->setCruise($this->getCruise());
        $copyObj->setGazetteer($this->getGazetteer());
        $copyObj->setLocalitytype($this->getLocalitytype());
        $copyObj->setWaterdepthmin($this->getWaterdepthmin());
        $copyObj->setWaterdepthmax($this->getWaterdepthmax());
        $copyObj->setAltitudemin($this->getAltitudemin());
        $copyObj->setAltitudemax($this->getAltitudemax());
        $copyObj->setLatitudedeg($this->getLatitudedeg());
        $copyObj->setLatitudemin($this->getLatitudemin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLatitudedec($this->getLatitudedec());
        $copyObj->setLongitudedeg($this->getLongitudedeg());
        $copyObj->setLongitudemin($this->getLongitudemin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setLongitudedec($this->getLongitudedec());
        $copyObj->setAccuracy($this->getAccuracy());
        $copyObj->setSalinity($this->getSalinity());
        $copyObj->setLatitudeto($this->getLatitudeto());
        $copyObj->setLongitudeto($this->getLongitudeto());
        $copyObj->setLatitudedegto($this->getLatitudedegto());
        $copyObj->setLatitudeminto($this->getLatitudeminto());
        $copyObj->setNorthsouthto($this->getNorthsouthto());
        $copyObj->setLongitudedegto($this->getLongitudedegto());
        $copyObj->setLongitudeminto($this->getLongitudeminto());
        $copyObj->setEastwestto($this->getEastwestto());
        $copyObj->setTemp($this->getTemp());
        $copyObj->setAreacode($this->getAreacode());
        $copyObj->setSeadrainage($this->getSeadrainage());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setProvince($this->getProvince());
        $copyObj->setDate($this->getDate());
        $copyObj->setDateto($this->getDateto());
        $copyObj->setYear($this->getYear());
        $copyObj->setDatetype($this->getDatetype());
        $copyObj->setDaytimestart($this->getDaytimestart());
        $copyObj->setDaytimestop($this->getDaytimestop());
        $copyObj->setLength($this->getLength());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setLength2($this->getLength2());
        $copyObj->setLengthtype2($this->getLengthtype2());
        $copyObj->setLengthmin($this->getLengthmin());
        $copyObj->setLengthmax($this->getLengthmax());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setNumber($this->getNumber());
        $copyObj->setPercentcatch($this->getPercentcatch());
        $copyObj->setAbundance($this->getAbundance());
        $copyObj->setLivestage($this->getLivestage());
        $copyObj->setSex($this->getSex());
        $copyObj->setBottom($this->getBottom());
        $copyObj->setGear($this->getGear());
        $copyObj->setRemarkFb($this->getRemarkFb());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setVessel($this->getVessel());
        $copyObj->setExpedition($this->getExpedition());
        $copyObj->setCollector($this->getCollector());
        $copyObj->setIdentifier($this->getIdentifier());
        $copyObj->setIdentifierstandard($this->getIdentifierstandard());
        $copyObj->setIdentifieryr($this->getIdentifieryr());
        $copyObj->setQname($this->getQname());
        $copyObj->setQidentifier($this->getQidentifier());
        $copyObj->setQarea($this->getQarea());
        $copyObj->setQcountry($this->getQcountry());
        $copyObj->setQcoordinates($this->getQcoordinates());
        $copyObj->setType($this->getType());
        $copyObj->setMs($this->getMs());
        $copyObj->setStorage($this->getStorage());
        $copyObj->setRecordtype($this->getRecordtype());
        $copyObj->setBasisofrecord($this->getBasisofrecord());
        $copyObj->setCheckedcol($this->getCheckedcol());
        $copyObj->setValidity($this->getValidity());
        $copyObj->setDaterecapture($this->getDaterecapture());
        $copyObj->setLatdegrel($this->getLatdegrel());
        $copyObj->setLatminrel($this->getLatminrel());
        $copyObj->setNorthsouthrel($this->getNorthsouthrel());
        $copyObj->setLongdegrel($this->getLongdegrel());
        $copyObj->setLongminrel($this->getLongminrel());
        $copyObj->setEastwestrel($this->getEastwestrel());
        $copyObj->setLengthrel($this->getLengthrel());
        $copyObj->setLengthtyperel($this->getLengthtyperel());
        $copyObj->setWeightrel($this->getWeightrel());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setLocality1($this->getLocality1());
        $copyObj->setTwodegree30w($this->getTwodegree30w());
        $copyObj->setOnedegree30w($this->getOnedegree30w());
        $copyObj->setTendegree30w($this->getTendegree30w());
        $copyObj->setCsquarecode($this->getCsquarecode());
        $copyObj->setPublisheddistance($this->getPublisheddistance());
        $copyObj->setInfo($this->getInfo());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCatnum2(NULL); // this is a auto-increment column, so set to default value
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
     * @return Occurrence Clone of current object.
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
     * @return OccurrencePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OccurrencePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->catnum2 = null;
        $this->occurrencerefno = null;
        $this->speccode = null;
        $this->syncode = null;
        $this->stockcode = null;
        $this->genuscol = null;
        $this->speciescol = null;
        $this->colname = null;
        $this->picname = null;
        $this->catnum = null;
        $this->url = null;
        $this->station = null;
        $this->cruise = null;
        $this->gazetteer = null;
        $this->localitytype = null;
        $this->waterdepthmin = null;
        $this->waterdepthmax = null;
        $this->altitudemin = null;
        $this->altitudemax = null;
        $this->latitudedeg = null;
        $this->latitudemin = null;
        $this->northsouth = null;
        $this->latitudedec = null;
        $this->longitudedeg = null;
        $this->longitudemin = null;
        $this->eastwest = null;
        $this->longitudedec = null;
        $this->accuracy = null;
        $this->salinity = null;
        $this->latitudeto = null;
        $this->longitudeto = null;
        $this->latitudedegto = null;
        $this->latitudeminto = null;
        $this->northsouthto = null;
        $this->longitudedegto = null;
        $this->longitudeminto = null;
        $this->eastwestto = null;
        $this->temp = null;
        $this->areacode = null;
        $this->seadrainage = null;
        $this->c_code = null;
        $this->province = null;
        $this->date = null;
        $this->dateto = null;
        $this->year = null;
        $this->datetype = null;
        $this->daytimestart = null;
        $this->daytimestop = null;
        $this->length = null;
        $this->lengthtype = null;
        $this->length2 = null;
        $this->lengthtype2 = null;
        $this->lengthmin = null;
        $this->lengthmax = null;
        $this->weight = null;
        $this->number = null;
        $this->percentcatch = null;
        $this->abundance = null;
        $this->livestage = null;
        $this->sex = null;
        $this->bottom = null;
        $this->gear = null;
        $this->remark_fb = null;
        $this->remark = null;
        $this->vessel = null;
        $this->expedition = null;
        $this->collector = null;
        $this->identifier = null;
        $this->identifierstandard = null;
        $this->identifieryr = null;
        $this->qname = null;
        $this->qidentifier = null;
        $this->qarea = null;
        $this->qcountry = null;
        $this->qcoordinates = null;
        $this->type = null;
        $this->ms = null;
        $this->storage = null;
        $this->recordtype = null;
        $this->basisofrecord = null;
        $this->checkedcol = null;
        $this->validity = null;
        $this->daterecapture = null;
        $this->latdegrel = null;
        $this->latminrel = null;
        $this->northsouthrel = null;
        $this->longdegrel = null;
        $this->longminrel = null;
        $this->eastwestrel = null;
        $this->lengthrel = null;
        $this->lengthtyperel = null;
        $this->weightrel = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->locality1 = null;
        $this->twodegree30w = null;
        $this->onedegree30w = null;
        $this->tendegree30w = null;
        $this->csquarecode = null;
        $this->publisheddistance = null;
        $this->info = null;
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
        return (string) $this->exportTo(OccurrencePeer::DEFAULT_STRING_FORMAT);
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
