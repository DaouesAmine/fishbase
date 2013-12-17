<?php


/**
 * Base class that represents a row from the 'countref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CountrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CountrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the paese field.
     * @var        string
     */
    protected $paese;

    /**
     * The value for the note field.
     * @var        string
     */
    protected $note;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the abb field.
     * @var        string
     */
    protected $abb;

    /**
     * The value for the iso_code field.
     * @var        string
     */
    protected $iso_code;

    /**
     * The value for the iso3alpha field.
     * @var        string
     */
    protected $iso3alpha;

    /**
     * The value for the iso2alpha field.
     * @var        string
     */
    protected $iso2alpha;

    /**
     * The value for the saup_code field.
     * @var        int
     */
    protected $saup_code;

    /**
     * The value for the used field.
     * @var        int
     */
    protected $used;

    /**
     * The value for the capital field.
     * @var        string
     */
    protected $capital;

    /**
     * The value for the latdeg field.
     * @var        int
     */
    protected $latdeg;

    /**
     * The value for the latmin field.
     * @var        double
     */
    protected $latmin;

    /**
     * The value for the northsouth field.
     * @var        string
     */
    protected $northsouth;

    /**
     * The value for the longdeg field.
     * @var        int
     */
    protected $longdeg;

    /**
     * The value for the longmin field.
     * @var        double
     */
    protected $longmin;

    /**
     * The value for the eastwest field.
     * @var        string
     */
    protected $eastwest;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the polarboreal field.
     * @var        int
     */
    protected $polarboreal;

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
     * The value for the landlocked field.
     * @var        int
     */
    protected $landlocked;

    /**
     * The value for the geographicarea field.
     * @var        string
     */
    protected $geographicarea;

    /**
     * The value for the region field.
     * @var        string
     */
    protected $region;

    /**
     * The value for the continent field.
     * @var        string
     */
    protected $continent;

    /**
     * The value for the areacodeinland field.
     * @var        int
     */
    protected $areacodeinland;

    /**
     * The value for the faoareainland field.
     * @var        string
     */
    protected $faoareainland;

    /**
     * The value for the areacodemarinei field.
     * @var        int
     */
    protected $areacodemarinei;

    /**
     * The value for the faoareamarinei field.
     * @var        string
     */
    protected $faoareamarinei;

    /**
     * The value for the areacodemarineii field.
     * @var        int
     */
    protected $areacodemarineii;

    /**
     * The value for the faoareamarineii field.
     * @var        string
     */
    protected $faoareamarineii;

    /**
     * The value for the areacodemarineiii field.
     * @var        int
     */
    protected $areacodemarineiii;

    /**
     * The value for the faoareamarineiii field.
     * @var        string
     */
    protected $faoareamarineiii;

    /**
     * The value for the areacodemarineiv field.
     * @var        int
     */
    protected $areacodemarineiv;

    /**
     * The value for the faoareamarineiv field.
     * @var        string
     */
    protected $faoareamarineiv;

    /**
     * The value for the areacodemarinev field.
     * @var        int
     */
    protected $areacodemarinev;

    /**
     * The value for the faoareamarinev field.
     * @var        string
     */
    protected $faoareamarinev;

    /**
     * The value for the population field.
     * @var        int
     */
    protected $population;

    /**
     * The value for the populationyear field.
     * @var        int
     */
    protected $populationyear;

    /**
     * The value for the populationrate field.
     * @var        double
     */
    protected $populationrate;

    /**
     * The value for the populationref field.
     * @var        int
     */
    protected $populationref;

    /**
     * The value for the coastalpopulation field.
     * @var        int
     */
    protected $coastalpopulation;

    /**
     * The value for the coastpopref field.
     * @var        int
     */
    protected $coastpopref;

    /**
     * The value for the area field.
     * @var        int
     */
    protected $area;

    /**
     * The value for the coastline field.
     * @var        int
     */
    protected $coastline;

    /**
     * The value for the coastlineref field.
     * @var        int
     */
    protected $coastlineref;

    /**
     * The value for the shelfarea field.
     * @var        double
     */
    protected $shelfarea;

    /**
     * The value for the shelfref field.
     * @var        int
     */
    protected $shelfref;

    /**
     * The value for the eecarea field.
     * @var        double
     */
    protected $eecarea;

    /**
     * The value for the eezref field.
     * @var        int
     */
    protected $eezref;

    /**
     * The value for the language field.
     * @var        string
     */
    protected $language;

    /**
     * The value for the currency field.
     * @var        string
     */
    protected $currency;

    /**
     * The value for the marinecount field.
     * @var        int
     */
    protected $marinecount;

    /**
     * The value for the marinefamcount field.
     * @var        int
     */
    protected $marinefamcount;

    /**
     * The value for the completemarine field.
     * @var        int
     */
    protected $completemarine;

    /**
     * The value for the marinelit field.
     * @var        int
     */
    protected $marinelit;

    /**
     * The value for the marinefamlit field.
     * @var        int
     */
    protected $marinefamlit;

    /**
     * The value for the checkmarineref field.
     * @var        int
     */
    protected $checkmarineref;

    /**
     * The value for the marineflag field.
     * @var        int
     */
    protected $marineflag;

    /**
     * The value for the freshwatercount field.
     * @var        int
     */
    protected $freshwatercount;

    /**
     * The value for the freshfamcount field.
     * @var        int
     */
    protected $freshfamcount;

    /**
     * The value for the completefresh field.
     * @var        int
     */
    protected $completefresh;

    /**
     * The value for the freshwaterlit field.
     * @var        int
     */
    protected $freshwaterlit;

    /**
     * The value for the freshfamlit field.
     * @var        int
     */
    protected $freshfamlit;

    /**
     * The value for the checkfreshref field.
     * @var        int
     */
    protected $checkfreshref;

    /**
     * The value for the freshflag field.
     * @var        int
     */
    protected $freshflag;

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
     * The value for the lastupdate field.
     * @var        string
     */
    protected $lastupdate;

    /**
     * The value for the morphcountfresh field.
     * @var        int
     */
    protected $morphcountfresh;

    /**
     * The value for the occurcountfresh field.
     * @var        int
     */
    protected $occurcountfresh;

    /**
     * The value for the piccountfresh field.
     * @var        int
     */
    protected $piccountfresh;

    /**
     * The value for the growthcountfresh field.
     * @var        int
     */
    protected $growthcountfresh;

    /**
     * The value for the foodcountfresh field.
     * @var        int
     */
    protected $foodcountfresh;

    /**
     * The value for the dietcountfresh field.
     * @var        int
     */
    protected $dietcountfresh;

    /**
     * The value for the reproductioncountfresh field.
     * @var        int
     */
    protected $reproductioncountfresh;

    /**
     * The value for the spawningcountfresh field.
     * @var        int
     */
    protected $spawningcountfresh;

    /**
     * The value for the morphcountmarine field.
     * @var        int
     */
    protected $morphcountmarine;

    /**
     * The value for the occurcountmarine field.
     * @var        int
     */
    protected $occurcountmarine;

    /**
     * The value for the piccountmarine field.
     * @var        int
     */
    protected $piccountmarine;

    /**
     * The value for the growthcountmarine field.
     * @var        int
     */
    protected $growthcountmarine;

    /**
     * The value for the foodcountmarine field.
     * @var        int
     */
    protected $foodcountmarine;

    /**
     * The value for the dietcountmarine field.
     * @var        int
     */
    protected $dietcountmarine;

    /**
     * The value for the reproductioncountmarine field.
     * @var        int
     */
    protected $reproductioncountmarine;

    /**
     * The value for the spawningcountmarine field.
     * @var        int
     */
    protected $spawningcountmarine;

    /**
     * The value for the latdegfill field.
     * @var        int
     */
    protected $latdegfill;

    /**
     * The value for the latminfill field.
     * @var        double
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
     * @var        double
     */
    protected $longminfill;

    /**
     * The value for the eastwestfill field.
     * @var        string
     */
    protected $eastwestfill;

    /**
     * The value for the mlatdegfill field.
     * @var        int
     */
    protected $mlatdegfill;

    /**
     * The value for the mlatminfill field.
     * @var        double
     */
    protected $mlatminfill;

    /**
     * The value for the mnorthsouthfill field.
     * @var        string
     */
    protected $mnorthsouthfill;

    /**
     * The value for the mlongdegfill field.
     * @var        int
     */
    protected $mlongdegfill;

    /**
     * The value for the mlongminfill field.
     * @var        double
     */
    protected $mlongminfill;

    /**
     * The value for the meastwestfill field.
     * @var        string
     */
    protected $meastwestfill;

    /**
     * The value for the mlatdegfill2 field.
     * @var        int
     */
    protected $mlatdegfill2;

    /**
     * The value for the mlatminfill2 field.
     * @var        double
     */
    protected $mlatminfill2;

    /**
     * The value for the mnorthsouthfill2 field.
     * @var        string
     */
    protected $mnorthsouthfill2;

    /**
     * The value for the mlongdegfill2 field.
     * @var        int
     */
    protected $mlongdegfill2;

    /**
     * The value for the mlongminfill2 field.
     * @var        double
     */
    protected $mlongminfill2;

    /**
     * The value for the meastwestfill2 field.
     * @var        string
     */
    protected $meastwestfill2;

    /**
     * The value for the mlatdegfill3 field.
     * @var        int
     */
    protected $mlatdegfill3;

    /**
     * The value for the mlatminfill3 field.
     * @var        double
     */
    protected $mlatminfill3;

    /**
     * The value for the mnorthsouthfill3 field.
     * @var        string
     */
    protected $mnorthsouthfill3;

    /**
     * The value for the mlongdegfill3 field.
     * @var        int
     */
    protected $mlongdegfill3;

    /**
     * The value for the mlongminfill3 field.
     * @var        double
     */
    protected $mlongminfill3;

    /**
     * The value for the meastwestfill3 field.
     * @var        string
     */
    protected $meastwestfill3;

    /**
     * The value for the mlatdegfill4 field.
     * @var        int
     */
    protected $mlatdegfill4;

    /**
     * The value for the mlatminfill4 field.
     * @var        double
     */
    protected $mlatminfill4;

    /**
     * The value for the mnorthsouthfill4 field.
     * @var        string
     */
    protected $mnorthsouthfill4;

    /**
     * The value for the mlongdegfill4 field.
     * @var        int
     */
    protected $mlongdegfill4;

    /**
     * The value for the mlongminfill4 field.
     * @var        double
     */
    protected $mlongminfill4;

    /**
     * The value for the meastwestfill4 field.
     * @var        string
     */
    protected $meastwestfill4;

    /**
     * The value for the mlatdegfill5 field.
     * @var        int
     */
    protected $mlatdegfill5;

    /**
     * The value for the mlatminfill5 field.
     * @var        double
     */
    protected $mlatminfill5;

    /**
     * The value for the mnorthsouthfill5 field.
     * @var        string
     */
    protected $mnorthsouthfill5;

    /**
     * The value for the mlongdegfill5 field.
     * @var        int
     */
    protected $mlongdegfill5;

    /**
     * The value for the mlongminfill5 field.
     * @var        double
     */
    protected $mlongminfill5;

    /**
     * The value for the meastwestfill5 field.
     * @var        string
     */
    protected $meastwestfill5;

    /**
     * The value for the northernlatitude field.
     * @var        int
     */
    protected $northernlatitude;

    /**
     * The value for the northernlatitudens field.
     * @var        string
     */
    protected $northernlatitudens;

    /**
     * The value for the southernlatitude field.
     * @var        int
     */
    protected $southernlatitude;

    /**
     * The value for the southernlatitudens field.
     * @var        string
     */
    protected $southernlatitudens;

    /**
     * The value for the westernlongitude field.
     * @var        int
     */
    protected $westernlongitude;

    /**
     * The value for the westernlongitudeew field.
     * @var        string
     */
    protected $westernlongitudeew;

    /**
     * The value for the easternlongitude field.
     * @var        int
     */
    protected $easternlongitude;

    /**
     * The value for the easternlongitudeew field.
     * @var        string
     */
    protected $easternlongitudeew;

    /**
     * The value for the centerlat field.
     * @var        double
     */
    protected $centerlat;

    /**
     * The value for the centerlong field.
     * @var        double
     */
    protected $centerlong;

    /**
     * The value for the otherlanguage field.
     * @var        string
     */
    protected $otherlanguage;

    /**
     * The value for the geography field.
     * @var        string
     */
    protected $geography;

    /**
     * The value for the geographyref field.
     * @var        int
     */
    protected $geographyref;

    /**
     * The value for the hydrography field.
     * @var        string
     */
    protected $hydrography;

    /**
     * The value for the hydrographyref field.
     * @var        int
     */
    protected $hydrographyref;

    /**
     * The value for the commentfresh field.
     * @var        string
     */
    protected $commentfresh;

    /**
     * The value for the reffresh1 field.
     * @var        int
     */
    protected $reffresh1;

    /**
     * The value for the reffresh2 field.
     * @var        int
     */
    protected $reffresh2;

    /**
     * The value for the reffresh3 field.
     * @var        int
     */
    protected $reffresh3;

    /**
     * The value for the freshprimary field.
     * @var        int
     */
    protected $freshprimary;

    /**
     * The value for the freshsecondary field.
     * @var        int
     */
    protected $freshsecondary;

    /**
     * The value for the freshinto field.
     * @var        int
     */
    protected $freshinto;

    /**
     * The value for the infisheriesreported field.
     * @var        int
     */
    protected $infisheriesreported;

    /**
     * The value for the infisheriespotential field.
     * @var        int
     */
    protected $infisheriespotential;

    /**
     * The value for the inaquareported field.
     * @var        int
     */
    protected $inaquareported;

    /**
     * The value for the inaquapotential field.
     * @var        int
     */
    protected $inaquapotential;

    /**
     * The value for the exportreported field.
     * @var        int
     */
    protected $exportreported;

    /**
     * The value for the exportpotential field.
     * @var        int
     */
    protected $exportpotential;

    /**
     * The value for the sportreported field.
     * @var        int
     */
    protected $sportreported;

    /**
     * The value for the sportpotential field.
     * @var        int
     */
    protected $sportpotential;

    /**
     * The value for the endemicreported field.
     * @var        int
     */
    protected $endemicreported;

    /**
     * The value for the endemicpotential field.
     * @var        int
     */
    protected $endemicpotential;

    /**
     * The value for the threatened field.
     * @var        int
     */
    protected $threatened;

    /**
     * The value for the protectedreported field.
     * @var        double
     */
    protected $protectedreported;

    /**
     * The value for the protectedpotential field.
     * @var        int
     */
    protected $protectedpotential;

    /**
     * The value for the acp field.
     * @var        int
     */
    protected $acp;

    /**
     * The value for the developed field.
     * @var        int
     */
    protected $developed;

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
     * The value for the marineinto field.
     * @var        int
     */
    protected $marineinto;

    /**
     * The value for the marineinfisheriesreported field.
     * @var        int
     */
    protected $marineinfisheriesreported;

    /**
     * The value for the marineinfisheriespotential field.
     * @var        int
     */
    protected $marineinfisheriespotential;

    /**
     * The value for the marineinaquareported field.
     * @var        int
     */
    protected $marineinaquareported;

    /**
     * The value for the marineinaquapotential field.
     * @var        int
     */
    protected $marineinaquapotential;

    /**
     * The value for the marineexportreported field.
     * @var        int
     */
    protected $marineexportreported;

    /**
     * The value for the marineexportpotential field.
     * @var        int
     */
    protected $marineexportpotential;

    /**
     * The value for the marinesportreported field.
     * @var        int
     */
    protected $marinesportreported;

    /**
     * The value for the marinesportpotential field.
     * @var        int
     */
    protected $marinesportpotential;

    /**
     * The value for the marineendemicreported field.
     * @var        int
     */
    protected $marineendemicreported;

    /**
     * The value for the marineendemicpotential field.
     * @var        int
     */
    protected $marineendemicpotential;

    /**
     * The value for the marinethreatened field.
     * @var        int
     */
    protected $marinethreatened;

    /**
     * The value for the marineprotectedreported field.
     * @var        double
     */
    protected $marineprotectedreported;

    /**
     * The value for the marineprotectedpotential field.
     * @var        int
     */
    protected $marineprotectedpotential;

    /**
     * The value for the natfishdb field.
     * @var        string
     */
    protected $natfishdb;

    /**
     * The value for the natfishdb2 field.
     * @var        string
     */
    protected $natfishdb2;

    /**
     * The value for the factbook field.
     * @var        string
     */
    protected $factbook;

    /**
     * The value for the natfishaut field.
     * @var        string
     */
    protected $natfishaut;

    /**
     * The value for the tradenames field.
     * @var        string
     */
    protected $tradenames;

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
     * The value for the greek_original field.
     * @var        string
     */
    protected $greek_original;

    /**
     * The value for the greek field.
     * @var        string
     */
    protected $greek;

    /**
     * The value for the russian_original field.
     * @var        string
     */
    protected $russian_original;

    /**
     * The value for the russian field.
     * @var        string
     */
    protected $russian;

    /**
     * The value for the french field.
     * @var        string
     */
    protected $french;

    /**
     * The value for the spanish field.
     * @var        string
     */
    protected $spanish;

    /**
     * The value for the german field.
     * @var        string
     */
    protected $german;

    /**
     * The value for the dutch field.
     * @var        string
     */
    protected $dutch;

    /**
     * The value for the portuguese field.
     * @var        string
     */
    protected $portuguese;

    /**
     * The value for the italian field.
     * @var        string
     */
    protected $italian;

    /**
     * The value for the swedish field.
     * @var        string
     */
    protected $swedish;

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
     * Get the [paese] column value.
     *
     * @return string
     */
    public function getPaese()
    {

        return $this->paese;
    }

    /**
     * Get the [note] column value.
     *
     * @return string
     */
    public function getNote()
    {

        return $this->note;
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
     * Get the [abb] column value.
     *
     * @return string
     */
    public function getAbb()
    {

        return $this->abb;
    }

    /**
     * Get the [iso_code] column value.
     *
     * @return string
     */
    public function getIsoCode()
    {

        return $this->iso_code;
    }

    /**
     * Get the [iso3alpha] column value.
     *
     * @return string
     */
    public function getIso3alpha()
    {

        return $this->iso3alpha;
    }

    /**
     * Get the [iso2alpha] column value.
     *
     * @return string
     */
    public function getIso2alpha()
    {

        return $this->iso2alpha;
    }

    /**
     * Get the [saup_code] column value.
     *
     * @return int
     */
    public function getSaupCode()
    {

        return $this->saup_code;
    }

    /**
     * Get the [used] column value.
     *
     * @return int
     */
    public function getUsed()
    {

        return $this->used;
    }

    /**
     * Get the [capital] column value.
     *
     * @return string
     */
    public function getCapital()
    {

        return $this->capital;
    }

    /**
     * Get the [latdeg] column value.
     *
     * @return int
     */
    public function getLatdeg()
    {

        return $this->latdeg;
    }

    /**
     * Get the [latmin] column value.
     *
     * @return double
     */
    public function getLatmin()
    {

        return $this->latmin;
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
     * Get the [longdeg] column value.
     *
     * @return int
     */
    public function getLongdeg()
    {

        return $this->longdeg;
    }

    /**
     * Get the [longmin] column value.
     *
     * @return double
     */
    public function getLongmin()
    {

        return $this->longmin;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
    }

    /**
     * Get the [polarboreal] column value.
     *
     * @return int
     */
    public function getPolarboreal()
    {

        return $this->polarboreal;
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
     * Get the [landlocked] column value.
     *
     * @return int
     */
    public function getLandlocked()
    {

        return $this->landlocked;
    }

    /**
     * Get the [geographicarea] column value.
     *
     * @return string
     */
    public function getGeographicarea()
    {

        return $this->geographicarea;
    }

    /**
     * Get the [region] column value.
     *
     * @return string
     */
    public function getRegion()
    {

        return $this->region;
    }

    /**
     * Get the [continent] column value.
     *
     * @return string
     */
    public function getContinent()
    {

        return $this->continent;
    }

    /**
     * Get the [areacodeinland] column value.
     *
     * @return int
     */
    public function getAreacodeinland()
    {

        return $this->areacodeinland;
    }

    /**
     * Get the [faoareainland] column value.
     *
     * @return string
     */
    public function getFaoareainland()
    {

        return $this->faoareainland;
    }

    /**
     * Get the [areacodemarinei] column value.
     *
     * @return int
     */
    public function getAreacodemarinei()
    {

        return $this->areacodemarinei;
    }

    /**
     * Get the [faoareamarinei] column value.
     *
     * @return string
     */
    public function getFaoareamarinei()
    {

        return $this->faoareamarinei;
    }

    /**
     * Get the [areacodemarineii] column value.
     *
     * @return int
     */
    public function getAreacodemarineii()
    {

        return $this->areacodemarineii;
    }

    /**
     * Get the [faoareamarineii] column value.
     *
     * @return string
     */
    public function getFaoareamarineii()
    {

        return $this->faoareamarineii;
    }

    /**
     * Get the [areacodemarineiii] column value.
     *
     * @return int
     */
    public function getAreacodemarineiii()
    {

        return $this->areacodemarineiii;
    }

    /**
     * Get the [faoareamarineiii] column value.
     *
     * @return string
     */
    public function getFaoareamarineiii()
    {

        return $this->faoareamarineiii;
    }

    /**
     * Get the [areacodemarineiv] column value.
     *
     * @return int
     */
    public function getAreacodemarineiv()
    {

        return $this->areacodemarineiv;
    }

    /**
     * Get the [faoareamarineiv] column value.
     *
     * @return string
     */
    public function getFaoareamarineiv()
    {

        return $this->faoareamarineiv;
    }

    /**
     * Get the [areacodemarinev] column value.
     *
     * @return int
     */
    public function getAreacodemarinev()
    {

        return $this->areacodemarinev;
    }

    /**
     * Get the [faoareamarinev] column value.
     *
     * @return string
     */
    public function getFaoareamarinev()
    {

        return $this->faoareamarinev;
    }

    /**
     * Get the [population] column value.
     *
     * @return int
     */
    public function getPopulation()
    {

        return $this->population;
    }

    /**
     * Get the [populationyear] column value.
     *
     * @return int
     */
    public function getPopulationyear()
    {

        return $this->populationyear;
    }

    /**
     * Get the [populationrate] column value.
     *
     * @return double
     */
    public function getPopulationrate()
    {

        return $this->populationrate;
    }

    /**
     * Get the [populationref] column value.
     *
     * @return int
     */
    public function getPopulationref()
    {

        return $this->populationref;
    }

    /**
     * Get the [coastalpopulation] column value.
     *
     * @return int
     */
    public function getCoastalpopulation()
    {

        return $this->coastalpopulation;
    }

    /**
     * Get the [coastpopref] column value.
     *
     * @return int
     */
    public function getCoastpopref()
    {

        return $this->coastpopref;
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
     * Get the [coastline] column value.
     *
     * @return int
     */
    public function getCoastline()
    {

        return $this->coastline;
    }

    /**
     * Get the [coastlineref] column value.
     *
     * @return int
     */
    public function getCoastlineref()
    {

        return $this->coastlineref;
    }

    /**
     * Get the [shelfarea] column value.
     *
     * @return double
     */
    public function getShelfarea()
    {

        return $this->shelfarea;
    }

    /**
     * Get the [shelfref] column value.
     *
     * @return int
     */
    public function getShelfref()
    {

        return $this->shelfref;
    }

    /**
     * Get the [eecarea] column value.
     *
     * @return double
     */
    public function getEecarea()
    {

        return $this->eecarea;
    }

    /**
     * Get the [eezref] column value.
     *
     * @return int
     */
    public function getEezref()
    {

        return $this->eezref;
    }

    /**
     * Get the [language] column value.
     *
     * @return string
     */
    public function getLanguage()
    {

        return $this->language;
    }

    /**
     * Get the [currency] column value.
     *
     * @return string
     */
    public function getCurrency()
    {

        return $this->currency;
    }

    /**
     * Get the [marinecount] column value.
     *
     * @return int
     */
    public function getMarinecount()
    {

        return $this->marinecount;
    }

    /**
     * Get the [marinefamcount] column value.
     *
     * @return int
     */
    public function getMarinefamcount()
    {

        return $this->marinefamcount;
    }

    /**
     * Get the [completemarine] column value.
     *
     * @return int
     */
    public function getCompletemarine()
    {

        return $this->completemarine;
    }

    /**
     * Get the [marinelit] column value.
     *
     * @return int
     */
    public function getMarinelit()
    {

        return $this->marinelit;
    }

    /**
     * Get the [marinefamlit] column value.
     *
     * @return int
     */
    public function getMarinefamlit()
    {

        return $this->marinefamlit;
    }

    /**
     * Get the [checkmarineref] column value.
     *
     * @return int
     */
    public function getCheckmarineref()
    {

        return $this->checkmarineref;
    }

    /**
     * Get the [marineflag] column value.
     *
     * @return int
     */
    public function getMarineflag()
    {

        return $this->marineflag;
    }

    /**
     * Get the [freshwatercount] column value.
     *
     * @return int
     */
    public function getFreshwatercount()
    {

        return $this->freshwatercount;
    }

    /**
     * Get the [freshfamcount] column value.
     *
     * @return int
     */
    public function getFreshfamcount()
    {

        return $this->freshfamcount;
    }

    /**
     * Get the [completefresh] column value.
     *
     * @return int
     */
    public function getCompletefresh()
    {

        return $this->completefresh;
    }

    /**
     * Get the [freshwaterlit] column value.
     *
     * @return int
     */
    public function getFreshwaterlit()
    {

        return $this->freshwaterlit;
    }

    /**
     * Get the [freshfamlit] column value.
     *
     * @return int
     */
    public function getFreshfamlit()
    {

        return $this->freshfamlit;
    }

    /**
     * Get the [checkfreshref] column value.
     *
     * @return int
     */
    public function getCheckfreshref()
    {

        return $this->checkfreshref;
    }

    /**
     * Get the [freshflag] column value.
     *
     * @return int
     */
    public function getFreshflag()
    {

        return $this->freshflag;
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
     * Get the [morphcountfresh] column value.
     *
     * @return int
     */
    public function getMorphcountfresh()
    {

        return $this->morphcountfresh;
    }

    /**
     * Get the [occurcountfresh] column value.
     *
     * @return int
     */
    public function getOccurcountfresh()
    {

        return $this->occurcountfresh;
    }

    /**
     * Get the [piccountfresh] column value.
     *
     * @return int
     */
    public function getPiccountfresh()
    {

        return $this->piccountfresh;
    }

    /**
     * Get the [growthcountfresh] column value.
     *
     * @return int
     */
    public function getGrowthcountfresh()
    {

        return $this->growthcountfresh;
    }

    /**
     * Get the [foodcountfresh] column value.
     *
     * @return int
     */
    public function getFoodcountfresh()
    {

        return $this->foodcountfresh;
    }

    /**
     * Get the [dietcountfresh] column value.
     *
     * @return int
     */
    public function getDietcountfresh()
    {

        return $this->dietcountfresh;
    }

    /**
     * Get the [reproductioncountfresh] column value.
     *
     * @return int
     */
    public function getReproductioncountfresh()
    {

        return $this->reproductioncountfresh;
    }

    /**
     * Get the [spawningcountfresh] column value.
     *
     * @return int
     */
    public function getSpawningcountfresh()
    {

        return $this->spawningcountfresh;
    }

    /**
     * Get the [morphcountmarine] column value.
     *
     * @return int
     */
    public function getMorphcountmarine()
    {

        return $this->morphcountmarine;
    }

    /**
     * Get the [occurcountmarine] column value.
     *
     * @return int
     */
    public function getOccurcountmarine()
    {

        return $this->occurcountmarine;
    }

    /**
     * Get the [piccountmarine] column value.
     *
     * @return int
     */
    public function getPiccountmarine()
    {

        return $this->piccountmarine;
    }

    /**
     * Get the [growthcountmarine] column value.
     *
     * @return int
     */
    public function getGrowthcountmarine()
    {

        return $this->growthcountmarine;
    }

    /**
     * Get the [foodcountmarine] column value.
     *
     * @return int
     */
    public function getFoodcountmarine()
    {

        return $this->foodcountmarine;
    }

    /**
     * Get the [dietcountmarine] column value.
     *
     * @return int
     */
    public function getDietcountmarine()
    {

        return $this->dietcountmarine;
    }

    /**
     * Get the [reproductioncountmarine] column value.
     *
     * @return int
     */
    public function getReproductioncountmarine()
    {

        return $this->reproductioncountmarine;
    }

    /**
     * Get the [spawningcountmarine] column value.
     *
     * @return int
     */
    public function getSpawningcountmarine()
    {

        return $this->spawningcountmarine;
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
     * @return double
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
     * @return double
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
     * Get the [mlatdegfill] column value.
     *
     * @return int
     */
    public function getMlatdegfill()
    {

        return $this->mlatdegfill;
    }

    /**
     * Get the [mlatminfill] column value.
     *
     * @return double
     */
    public function getMlatminfill()
    {

        return $this->mlatminfill;
    }

    /**
     * Get the [mnorthsouthfill] column value.
     *
     * @return string
     */
    public function getMnorthsouthfill()
    {

        return $this->mnorthsouthfill;
    }

    /**
     * Get the [mlongdegfill] column value.
     *
     * @return int
     */
    public function getMlongdegfill()
    {

        return $this->mlongdegfill;
    }

    /**
     * Get the [mlongminfill] column value.
     *
     * @return double
     */
    public function getMlongminfill()
    {

        return $this->mlongminfill;
    }

    /**
     * Get the [meastwestfill] column value.
     *
     * @return string
     */
    public function getMeastwestfill()
    {

        return $this->meastwestfill;
    }

    /**
     * Get the [mlatdegfill2] column value.
     *
     * @return int
     */
    public function getMlatdegfill2()
    {

        return $this->mlatdegfill2;
    }

    /**
     * Get the [mlatminfill2] column value.
     *
     * @return double
     */
    public function getMlatminfill2()
    {

        return $this->mlatminfill2;
    }

    /**
     * Get the [mnorthsouthfill2] column value.
     *
     * @return string
     */
    public function getMnorthsouthfill2()
    {

        return $this->mnorthsouthfill2;
    }

    /**
     * Get the [mlongdegfill2] column value.
     *
     * @return int
     */
    public function getMlongdegfill2()
    {

        return $this->mlongdegfill2;
    }

    /**
     * Get the [mlongminfill2] column value.
     *
     * @return double
     */
    public function getMlongminfill2()
    {

        return $this->mlongminfill2;
    }

    /**
     * Get the [meastwestfill2] column value.
     *
     * @return string
     */
    public function getMeastwestfill2()
    {

        return $this->meastwestfill2;
    }

    /**
     * Get the [mlatdegfill3] column value.
     *
     * @return int
     */
    public function getMlatdegfill3()
    {

        return $this->mlatdegfill3;
    }

    /**
     * Get the [mlatminfill3] column value.
     *
     * @return double
     */
    public function getMlatminfill3()
    {

        return $this->mlatminfill3;
    }

    /**
     * Get the [mnorthsouthfill3] column value.
     *
     * @return string
     */
    public function getMnorthsouthfill3()
    {

        return $this->mnorthsouthfill3;
    }

    /**
     * Get the [mlongdegfill3] column value.
     *
     * @return int
     */
    public function getMlongdegfill3()
    {

        return $this->mlongdegfill3;
    }

    /**
     * Get the [mlongminfill3] column value.
     *
     * @return double
     */
    public function getMlongminfill3()
    {

        return $this->mlongminfill3;
    }

    /**
     * Get the [meastwestfill3] column value.
     *
     * @return string
     */
    public function getMeastwestfill3()
    {

        return $this->meastwestfill3;
    }

    /**
     * Get the [mlatdegfill4] column value.
     *
     * @return int
     */
    public function getMlatdegfill4()
    {

        return $this->mlatdegfill4;
    }

    /**
     * Get the [mlatminfill4] column value.
     *
     * @return double
     */
    public function getMlatminfill4()
    {

        return $this->mlatminfill4;
    }

    /**
     * Get the [mnorthsouthfill4] column value.
     *
     * @return string
     */
    public function getMnorthsouthfill4()
    {

        return $this->mnorthsouthfill4;
    }

    /**
     * Get the [mlongdegfill4] column value.
     *
     * @return int
     */
    public function getMlongdegfill4()
    {

        return $this->mlongdegfill4;
    }

    /**
     * Get the [mlongminfill4] column value.
     *
     * @return double
     */
    public function getMlongminfill4()
    {

        return $this->mlongminfill4;
    }

    /**
     * Get the [meastwestfill4] column value.
     *
     * @return string
     */
    public function getMeastwestfill4()
    {

        return $this->meastwestfill4;
    }

    /**
     * Get the [mlatdegfill5] column value.
     *
     * @return int
     */
    public function getMlatdegfill5()
    {

        return $this->mlatdegfill5;
    }

    /**
     * Get the [mlatminfill5] column value.
     *
     * @return double
     */
    public function getMlatminfill5()
    {

        return $this->mlatminfill5;
    }

    /**
     * Get the [mnorthsouthfill5] column value.
     *
     * @return string
     */
    public function getMnorthsouthfill5()
    {

        return $this->mnorthsouthfill5;
    }

    /**
     * Get the [mlongdegfill5] column value.
     *
     * @return int
     */
    public function getMlongdegfill5()
    {

        return $this->mlongdegfill5;
    }

    /**
     * Get the [mlongminfill5] column value.
     *
     * @return double
     */
    public function getMlongminfill5()
    {

        return $this->mlongminfill5;
    }

    /**
     * Get the [meastwestfill5] column value.
     *
     * @return string
     */
    public function getMeastwestfill5()
    {

        return $this->meastwestfill5;
    }

    /**
     * Get the [northernlatitude] column value.
     *
     * @return int
     */
    public function getNorthernlatitude()
    {

        return $this->northernlatitude;
    }

    /**
     * Get the [northernlatitudens] column value.
     *
     * @return string
     */
    public function getNorthernlatitudens()
    {

        return $this->northernlatitudens;
    }

    /**
     * Get the [southernlatitude] column value.
     *
     * @return int
     */
    public function getSouthernlatitude()
    {

        return $this->southernlatitude;
    }

    /**
     * Get the [southernlatitudens] column value.
     *
     * @return string
     */
    public function getSouthernlatitudens()
    {

        return $this->southernlatitudens;
    }

    /**
     * Get the [westernlongitude] column value.
     *
     * @return int
     */
    public function getWesternlongitude()
    {

        return $this->westernlongitude;
    }

    /**
     * Get the [westernlongitudeew] column value.
     *
     * @return string
     */
    public function getWesternlongitudeew()
    {

        return $this->westernlongitudeew;
    }

    /**
     * Get the [easternlongitude] column value.
     *
     * @return int
     */
    public function getEasternlongitude()
    {

        return $this->easternlongitude;
    }

    /**
     * Get the [easternlongitudeew] column value.
     *
     * @return string
     */
    public function getEasternlongitudeew()
    {

        return $this->easternlongitudeew;
    }

    /**
     * Get the [centerlat] column value.
     *
     * @return double
     */
    public function getCenterlat()
    {

        return $this->centerlat;
    }

    /**
     * Get the [centerlong] column value.
     *
     * @return double
     */
    public function getCenterlong()
    {

        return $this->centerlong;
    }

    /**
     * Get the [otherlanguage] column value.
     *
     * @return string
     */
    public function getOtherlanguage()
    {

        return $this->otherlanguage;
    }

    /**
     * Get the [geography] column value.
     *
     * @return string
     */
    public function getGeography()
    {

        return $this->geography;
    }

    /**
     * Get the [geographyref] column value.
     *
     * @return int
     */
    public function getGeographyref()
    {

        return $this->geographyref;
    }

    /**
     * Get the [hydrography] column value.
     *
     * @return string
     */
    public function getHydrography()
    {

        return $this->hydrography;
    }

    /**
     * Get the [hydrographyref] column value.
     *
     * @return int
     */
    public function getHydrographyref()
    {

        return $this->hydrographyref;
    }

    /**
     * Get the [commentfresh] column value.
     *
     * @return string
     */
    public function getCommentfresh()
    {

        return $this->commentfresh;
    }

    /**
     * Get the [reffresh1] column value.
     *
     * @return int
     */
    public function getReffresh1()
    {

        return $this->reffresh1;
    }

    /**
     * Get the [reffresh2] column value.
     *
     * @return int
     */
    public function getReffresh2()
    {

        return $this->reffresh2;
    }

    /**
     * Get the [reffresh3] column value.
     *
     * @return int
     */
    public function getReffresh3()
    {

        return $this->reffresh3;
    }

    /**
     * Get the [freshprimary] column value.
     *
     * @return int
     */
    public function getFreshprimary()
    {

        return $this->freshprimary;
    }

    /**
     * Get the [freshsecondary] column value.
     *
     * @return int
     */
    public function getFreshsecondary()
    {

        return $this->freshsecondary;
    }

    /**
     * Get the [freshinto] column value.
     *
     * @return int
     */
    public function getFreshinto()
    {

        return $this->freshinto;
    }

    /**
     * Get the [infisheriesreported] column value.
     *
     * @return int
     */
    public function getInfisheriesreported()
    {

        return $this->infisheriesreported;
    }

    /**
     * Get the [infisheriespotential] column value.
     *
     * @return int
     */
    public function getInfisheriespotential()
    {

        return $this->infisheriespotential;
    }

    /**
     * Get the [inaquareported] column value.
     *
     * @return int
     */
    public function getInaquareported()
    {

        return $this->inaquareported;
    }

    /**
     * Get the [inaquapotential] column value.
     *
     * @return int
     */
    public function getInaquapotential()
    {

        return $this->inaquapotential;
    }

    /**
     * Get the [exportreported] column value.
     *
     * @return int
     */
    public function getExportreported()
    {

        return $this->exportreported;
    }

    /**
     * Get the [exportpotential] column value.
     *
     * @return int
     */
    public function getExportpotential()
    {

        return $this->exportpotential;
    }

    /**
     * Get the [sportreported] column value.
     *
     * @return int
     */
    public function getSportreported()
    {

        return $this->sportreported;
    }

    /**
     * Get the [sportpotential] column value.
     *
     * @return int
     */
    public function getSportpotential()
    {

        return $this->sportpotential;
    }

    /**
     * Get the [endemicreported] column value.
     *
     * @return int
     */
    public function getEndemicreported()
    {

        return $this->endemicreported;
    }

    /**
     * Get the [endemicpotential] column value.
     *
     * @return int
     */
    public function getEndemicpotential()
    {

        return $this->endemicpotential;
    }

    /**
     * Get the [threatened] column value.
     *
     * @return int
     */
    public function getThreatened()
    {

        return $this->threatened;
    }

    /**
     * Get the [protectedreported] column value.
     *
     * @return double
     */
    public function getProtectedreported()
    {

        return $this->protectedreported;
    }

    /**
     * Get the [protectedpotential] column value.
     *
     * @return int
     */
    public function getProtectedpotential()
    {

        return $this->protectedpotential;
    }

    /**
     * Get the [acp] column value.
     *
     * @return int
     */
    public function getAcp()
    {

        return $this->acp;
    }

    /**
     * Get the [developed] column value.
     *
     * @return int
     */
    public function getDeveloped()
    {

        return $this->developed;
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
     * Get the [marineinto] column value.
     *
     * @return int
     */
    public function getMarineinto()
    {

        return $this->marineinto;
    }

    /**
     * Get the [marineinfisheriesreported] column value.
     *
     * @return int
     */
    public function getMarineinfisheriesreported()
    {

        return $this->marineinfisheriesreported;
    }

    /**
     * Get the [marineinfisheriespotential] column value.
     *
     * @return int
     */
    public function getMarineinfisheriespotential()
    {

        return $this->marineinfisheriespotential;
    }

    /**
     * Get the [marineinaquareported] column value.
     *
     * @return int
     */
    public function getMarineinaquareported()
    {

        return $this->marineinaquareported;
    }

    /**
     * Get the [marineinaquapotential] column value.
     *
     * @return int
     */
    public function getMarineinaquapotential()
    {

        return $this->marineinaquapotential;
    }

    /**
     * Get the [marineexportreported] column value.
     *
     * @return int
     */
    public function getMarineexportreported()
    {

        return $this->marineexportreported;
    }

    /**
     * Get the [marineexportpotential] column value.
     *
     * @return int
     */
    public function getMarineexportpotential()
    {

        return $this->marineexportpotential;
    }

    /**
     * Get the [marinesportreported] column value.
     *
     * @return int
     */
    public function getMarinesportreported()
    {

        return $this->marinesportreported;
    }

    /**
     * Get the [marinesportpotential] column value.
     *
     * @return int
     */
    public function getMarinesportpotential()
    {

        return $this->marinesportpotential;
    }

    /**
     * Get the [marineendemicreported] column value.
     *
     * @return int
     */
    public function getMarineendemicreported()
    {

        return $this->marineendemicreported;
    }

    /**
     * Get the [marineendemicpotential] column value.
     *
     * @return int
     */
    public function getMarineendemicpotential()
    {

        return $this->marineendemicpotential;
    }

    /**
     * Get the [marinethreatened] column value.
     *
     * @return int
     */
    public function getMarinethreatened()
    {

        return $this->marinethreatened;
    }

    /**
     * Get the [marineprotectedreported] column value.
     *
     * @return double
     */
    public function getMarineprotectedreported()
    {

        return $this->marineprotectedreported;
    }

    /**
     * Get the [marineprotectedpotential] column value.
     *
     * @return int
     */
    public function getMarineprotectedpotential()
    {

        return $this->marineprotectedpotential;
    }

    /**
     * Get the [natfishdb] column value.
     *
     * @return string
     */
    public function getNatfishdb()
    {

        return $this->natfishdb;
    }

    /**
     * Get the [natfishdb2] column value.
     *
     * @return string
     */
    public function getNatfishdb2()
    {

        return $this->natfishdb2;
    }

    /**
     * Get the [factbook] column value.
     *
     * @return string
     */
    public function getFactbook()
    {

        return $this->factbook;
    }

    /**
     * Get the [natfishaut] column value.
     *
     * @return string
     */
    public function getNatfishaut()
    {

        return $this->natfishaut;
    }

    /**
     * Get the [tradenames] column value.
     *
     * @return string
     */
    public function getTradenames()
    {

        return $this->tradenames;
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
     * Get the [greek_original] column value.
     *
     * @return string
     */
    public function getGreekOriginal()
    {

        return $this->greek_original;
    }

    /**
     * Get the [greek] column value.
     *
     * @return string
     */
    public function getGreek()
    {

        return $this->greek;
    }

    /**
     * Get the [russian_original] column value.
     *
     * @return string
     */
    public function getRussianOriginal()
    {

        return $this->russian_original;
    }

    /**
     * Get the [russian] column value.
     *
     * @return string
     */
    public function getRussian()
    {

        return $this->russian;
    }

    /**
     * Get the [french] column value.
     *
     * @return string
     */
    public function getFrench()
    {

        return $this->french;
    }

    /**
     * Get the [spanish] column value.
     *
     * @return string
     */
    public function getSpanish()
    {

        return $this->spanish;
    }

    /**
     * Get the [german] column value.
     *
     * @return string
     */
    public function getGerman()
    {

        return $this->german;
    }

    /**
     * Get the [dutch] column value.
     *
     * @return string
     */
    public function getDutch()
    {

        return $this->dutch;
    }

    /**
     * Get the [portuguese] column value.
     *
     * @return string
     */
    public function getPortuguese()
    {

        return $this->portuguese;
    }

    /**
     * Get the [italian] column value.
     *
     * @return string
     */
    public function getItalian()
    {

        return $this->italian;
    }

    /**
     * Get the [swedish] column value.
     *
     * @return string
     */
    public function getSwedish()
    {

        return $this->swedish;
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
     * Set the value of [paese] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPaese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paese !== $v) {
            $this->paese = $v;
            $this->modifiedColumns[] = CountrefPeer::PAESE;
        }


        return $this;
    } // setPaese()

    /**
     * Set the value of [note] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = CountrefPeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = CountrefPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [abb] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAbb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abb !== $v) {
            $this->abb = $v;
            $this->modifiedColumns[] = CountrefPeer::ABB;
        }


        return $this;
    } // setAbb()

    /**
     * Set the value of [iso_code] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setIsoCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iso_code !== $v) {
            $this->iso_code = $v;
            $this->modifiedColumns[] = CountrefPeer::ISO_CODE;
        }


        return $this;
    } // setIsoCode()

    /**
     * Set the value of [iso3alpha] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setIso3alpha($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iso3alpha !== $v) {
            $this->iso3alpha = $v;
            $this->modifiedColumns[] = CountrefPeer::ISO3ALPHA;
        }


        return $this;
    } // setIso3alpha()

    /**
     * Set the value of [iso2alpha] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setIso2alpha($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iso2alpha !== $v) {
            $this->iso2alpha = $v;
            $this->modifiedColumns[] = CountrefPeer::ISO2ALPHA;
        }


        return $this;
    } // setIso2alpha()

    /**
     * Set the value of [saup_code] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSaupCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->saup_code !== $v) {
            $this->saup_code = $v;
            $this->modifiedColumns[] = CountrefPeer::SAUP_CODE;
        }


        return $this;
    } // setSaupCode()

    /**
     * Set the value of [used] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setUsed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->used !== $v) {
            $this->used = $v;
            $this->modifiedColumns[] = CountrefPeer::USED;
        }


        return $this;
    } // setUsed()

    /**
     * Set the value of [capital] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCapital($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->capital !== $v) {
            $this->capital = $v;
            $this->modifiedColumns[] = CountrefPeer::CAPITAL;
        }


        return $this;
    } // setCapital()

    /**
     * Set the value of [latdeg] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLatdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdeg !== $v) {
            $this->latdeg = $v;
            $this->modifiedColumns[] = CountrefPeer::LATDEG;
        }


        return $this;
    } // setLatdeg()

    /**
     * Set the value of [latmin] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latmin !== $v) {
            $this->latmin = $v;
            $this->modifiedColumns[] = CountrefPeer::LATMIN;
        }


        return $this;
    } // setLatmin()

    /**
     * Set the value of [northsouth] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNorthsouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouth !== $v) {
            $this->northsouth = $v;
            $this->modifiedColumns[] = CountrefPeer::NORTHSOUTH;
        }


        return $this;
    } // setNorthsouth()

    /**
     * Set the value of [longdeg] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLongdeg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdeg !== $v) {
            $this->longdeg = $v;
            $this->modifiedColumns[] = CountrefPeer::LONGDEG;
        }


        return $this;
    } // setLongdeg()

    /**
     * Set the value of [longmin] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLongmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longmin !== $v) {
            $this->longmin = $v;
            $this->modifiedColumns[] = CountrefPeer::LONGMIN;
        }


        return $this;
    } // setLongmin()

    /**
     * Set the value of [eastwest] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEastwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwest !== $v) {
            $this->eastwest = $v;
            $this->modifiedColumns[] = CountrefPeer::EASTWEST;
        }


        return $this;
    } // setEastwest()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = CountrefPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [polarboreal] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPolarboreal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->polarboreal !== $v) {
            $this->polarboreal = $v;
            $this->modifiedColumns[] = CountrefPeer::POLARBOREAL;
        }


        return $this;
    } // setPolarboreal()

    /**
     * Set the value of [temperate] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTemperate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->temperate !== $v) {
            $this->temperate = $v;
            $this->modifiedColumns[] = CountrefPeer::TEMPERATE;
        }


        return $this;
    } // setTemperate()

    /**
     * Set the value of [subtropical] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSubtropical($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->subtropical !== $v) {
            $this->subtropical = $v;
            $this->modifiedColumns[] = CountrefPeer::SUBTROPICAL;
        }


        return $this;
    } // setSubtropical()

    /**
     * Set the value of [tropical] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTropical($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tropical !== $v) {
            $this->tropical = $v;
            $this->modifiedColumns[] = CountrefPeer::TROPICAL;
        }


        return $this;
    } // setTropical()

    /**
     * Set the value of [landlocked] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLandlocked($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->landlocked !== $v) {
            $this->landlocked = $v;
            $this->modifiedColumns[] = CountrefPeer::LANDLOCKED;
        }


        return $this;
    } // setLandlocked()

    /**
     * Set the value of [geographicarea] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGeographicarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->geographicarea !== $v) {
            $this->geographicarea = $v;
            $this->modifiedColumns[] = CountrefPeer::GEOGRAPHICAREA;
        }


        return $this;
    } // setGeographicarea()

    /**
     * Set the value of [region] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->region !== $v) {
            $this->region = $v;
            $this->modifiedColumns[] = CountrefPeer::REGION;
        }


        return $this;
    } // setRegion()

    /**
     * Set the value of [continent] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setContinent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->continent !== $v) {
            $this->continent = $v;
            $this->modifiedColumns[] = CountrefPeer::CONTINENT;
        }


        return $this;
    } // setContinent()

    /**
     * Set the value of [areacodeinland] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAreacodeinland($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodeinland !== $v) {
            $this->areacodeinland = $v;
            $this->modifiedColumns[] = CountrefPeer::AREACODEINLAND;
        }


        return $this;
    } // setAreacodeinland()

    /**
     * Set the value of [faoareainland] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFaoareainland($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoareainland !== $v) {
            $this->faoareainland = $v;
            $this->modifiedColumns[] = CountrefPeer::FAOAREAINLAND;
        }


        return $this;
    } // setFaoareainland()

    /**
     * Set the value of [areacodemarinei] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAreacodemarinei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarinei !== $v) {
            $this->areacodemarinei = $v;
            $this->modifiedColumns[] = CountrefPeer::AREACODEMARINEI;
        }


        return $this;
    } // setAreacodemarinei()

    /**
     * Set the value of [faoareamarinei] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFaoareamarinei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoareamarinei !== $v) {
            $this->faoareamarinei = $v;
            $this->modifiedColumns[] = CountrefPeer::FAOAREAMARINEI;
        }


        return $this;
    } // setFaoareamarinei()

    /**
     * Set the value of [areacodemarineii] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAreacodemarineii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarineii !== $v) {
            $this->areacodemarineii = $v;
            $this->modifiedColumns[] = CountrefPeer::AREACODEMARINEII;
        }


        return $this;
    } // setAreacodemarineii()

    /**
     * Set the value of [faoareamarineii] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFaoareamarineii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoareamarineii !== $v) {
            $this->faoareamarineii = $v;
            $this->modifiedColumns[] = CountrefPeer::FAOAREAMARINEII;
        }


        return $this;
    } // setFaoareamarineii()

    /**
     * Set the value of [areacodemarineiii] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAreacodemarineiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarineiii !== $v) {
            $this->areacodemarineiii = $v;
            $this->modifiedColumns[] = CountrefPeer::AREACODEMARINEIII;
        }


        return $this;
    } // setAreacodemarineiii()

    /**
     * Set the value of [faoareamarineiii] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFaoareamarineiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoareamarineiii !== $v) {
            $this->faoareamarineiii = $v;
            $this->modifiedColumns[] = CountrefPeer::FAOAREAMARINEIII;
        }


        return $this;
    } // setFaoareamarineiii()

    /**
     * Set the value of [areacodemarineiv] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAreacodemarineiv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarineiv !== $v) {
            $this->areacodemarineiv = $v;
            $this->modifiedColumns[] = CountrefPeer::AREACODEMARINEIV;
        }


        return $this;
    } // setAreacodemarineiv()

    /**
     * Set the value of [faoareamarineiv] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFaoareamarineiv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoareamarineiv !== $v) {
            $this->faoareamarineiv = $v;
            $this->modifiedColumns[] = CountrefPeer::FAOAREAMARINEIV;
        }


        return $this;
    } // setFaoareamarineiv()

    /**
     * Set the value of [areacodemarinev] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAreacodemarinev($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areacodemarinev !== $v) {
            $this->areacodemarinev = $v;
            $this->modifiedColumns[] = CountrefPeer::AREACODEMARINEV;
        }


        return $this;
    } // setAreacodemarinev()

    /**
     * Set the value of [faoareamarinev] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFaoareamarinev($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoareamarinev !== $v) {
            $this->faoareamarinev = $v;
            $this->modifiedColumns[] = CountrefPeer::FAOAREAMARINEV;
        }


        return $this;
    } // setFaoareamarinev()

    /**
     * Set the value of [population] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPopulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->population !== $v) {
            $this->population = $v;
            $this->modifiedColumns[] = CountrefPeer::POPULATION;
        }


        return $this;
    } // setPopulation()

    /**
     * Set the value of [populationyear] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPopulationyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->populationyear !== $v) {
            $this->populationyear = $v;
            $this->modifiedColumns[] = CountrefPeer::POPULATIONYEAR;
        }


        return $this;
    } // setPopulationyear()

    /**
     * Set the value of [populationrate] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPopulationrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->populationrate !== $v) {
            $this->populationrate = $v;
            $this->modifiedColumns[] = CountrefPeer::POPULATIONRATE;
        }


        return $this;
    } // setPopulationrate()

    /**
     * Set the value of [populationref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPopulationref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->populationref !== $v) {
            $this->populationref = $v;
            $this->modifiedColumns[] = CountrefPeer::POPULATIONREF;
        }


        return $this;
    } // setPopulationref()

    /**
     * Set the value of [coastalpopulation] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCoastalpopulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coastalpopulation !== $v) {
            $this->coastalpopulation = $v;
            $this->modifiedColumns[] = CountrefPeer::COASTALPOPULATION;
        }


        return $this;
    } // setCoastalpopulation()

    /**
     * Set the value of [coastpopref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCoastpopref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coastpopref !== $v) {
            $this->coastpopref = $v;
            $this->modifiedColumns[] = CountrefPeer::COASTPOPREF;
        }


        return $this;
    } // setCoastpopref()

    /**
     * Set the value of [area] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setArea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->area !== $v) {
            $this->area = $v;
            $this->modifiedColumns[] = CountrefPeer::AREA;
        }


        return $this;
    } // setArea()

    /**
     * Set the value of [coastline] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCoastline($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coastline !== $v) {
            $this->coastline = $v;
            $this->modifiedColumns[] = CountrefPeer::COASTLINE;
        }


        return $this;
    } // setCoastline()

    /**
     * Set the value of [coastlineref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCoastlineref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coastlineref !== $v) {
            $this->coastlineref = $v;
            $this->modifiedColumns[] = CountrefPeer::COASTLINEREF;
        }


        return $this;
    } // setCoastlineref()

    /**
     * Set the value of [shelfarea] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setShelfarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->shelfarea !== $v) {
            $this->shelfarea = $v;
            $this->modifiedColumns[] = CountrefPeer::SHELFAREA;
        }


        return $this;
    } // setShelfarea()

    /**
     * Set the value of [shelfref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setShelfref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->shelfref !== $v) {
            $this->shelfref = $v;
            $this->modifiedColumns[] = CountrefPeer::SHELFREF;
        }


        return $this;
    } // setShelfref()

    /**
     * Set the value of [eecarea] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEecarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eecarea !== $v) {
            $this->eecarea = $v;
            $this->modifiedColumns[] = CountrefPeer::EECAREA;
        }


        return $this;
    } // setEecarea()

    /**
     * Set the value of [eezref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEezref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eezref !== $v) {
            $this->eezref = $v;
            $this->modifiedColumns[] = CountrefPeer::EEZREF;
        }


        return $this;
    } // setEezref()

    /**
     * Set the value of [language] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLanguage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->language !== $v) {
            $this->language = $v;
            $this->modifiedColumns[] = CountrefPeer::LANGUAGE;
        }


        return $this;
    } // setLanguage()

    /**
     * Set the value of [currency] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCurrency($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->currency !== $v) {
            $this->currency = $v;
            $this->modifiedColumns[] = CountrefPeer::CURRENCY;
        }


        return $this;
    } // setCurrency()

    /**
     * Set the value of [marinecount] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinecount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinecount !== $v) {
            $this->marinecount = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINECOUNT;
        }


        return $this;
    } // setMarinecount()

    /**
     * Set the value of [marinefamcount] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinefamcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinefamcount !== $v) {
            $this->marinefamcount = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEFAMCOUNT;
        }


        return $this;
    } // setMarinefamcount()

    /**
     * Set the value of [completemarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCompletemarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->completemarine !== $v) {
            $this->completemarine = $v;
            $this->modifiedColumns[] = CountrefPeer::COMPLETEMARINE;
        }


        return $this;
    } // setCompletemarine()

    /**
     * Set the value of [marinelit] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinelit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinelit !== $v) {
            $this->marinelit = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINELIT;
        }


        return $this;
    } // setMarinelit()

    /**
     * Set the value of [marinefamlit] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinefamlit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinefamlit !== $v) {
            $this->marinefamlit = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEFAMLIT;
        }


        return $this;
    } // setMarinefamlit()

    /**
     * Set the value of [checkmarineref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCheckmarineref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checkmarineref !== $v) {
            $this->checkmarineref = $v;
            $this->modifiedColumns[] = CountrefPeer::CHECKMARINEREF;
        }


        return $this;
    } // setCheckmarineref()

    /**
     * Set the value of [marineflag] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineflag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineflag !== $v) {
            $this->marineflag = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEFLAG;
        }


        return $this;
    } // setMarineflag()

    /**
     * Set the value of [freshwatercount] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshwatercount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshwatercount !== $v) {
            $this->freshwatercount = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHWATERCOUNT;
        }


        return $this;
    } // setFreshwatercount()

    /**
     * Set the value of [freshfamcount] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshfamcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshfamcount !== $v) {
            $this->freshfamcount = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHFAMCOUNT;
        }


        return $this;
    } // setFreshfamcount()

    /**
     * Set the value of [completefresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCompletefresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->completefresh !== $v) {
            $this->completefresh = $v;
            $this->modifiedColumns[] = CountrefPeer::COMPLETEFRESH;
        }


        return $this;
    } // setCompletefresh()

    /**
     * Set the value of [freshwaterlit] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshwaterlit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshwaterlit !== $v) {
            $this->freshwaterlit = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHWATERLIT;
        }


        return $this;
    } // setFreshwaterlit()

    /**
     * Set the value of [freshfamlit] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshfamlit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshfamlit !== $v) {
            $this->freshfamlit = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHFAMLIT;
        }


        return $this;
    } // setFreshfamlit()

    /**
     * Set the value of [checkfreshref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCheckfreshref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checkfreshref !== $v) {
            $this->checkfreshref = $v;
            $this->modifiedColumns[] = CountrefPeer::CHECKFRESHREF;
        }


        return $this;
    } // setCheckfreshref()

    /**
     * Set the value of [freshflag] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshflag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshflag !== $v) {
            $this->freshflag = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHFLAG;
        }


        return $this;
    } // setFreshflag()

    /**
     * Set the value of [totalcount] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTotalcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalcount !== $v) {
            $this->totalcount = $v;
            $this->modifiedColumns[] = CountrefPeer::TOTALCOUNT;
        }


        return $this;
    } // setTotalcount()

    /**
     * Set the value of [totalfamcount] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTotalfamcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalfamcount !== $v) {
            $this->totalfamcount = $v;
            $this->modifiedColumns[] = CountrefPeer::TOTALFAMCOUNT;
        }


        return $this;
    } // setTotalfamcount()

    /**
     * Set the value of [totalcomplete] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTotalcomplete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalcomplete !== $v) {
            $this->totalcomplete = $v;
            $this->modifiedColumns[] = CountrefPeer::TOTALCOMPLETE;
        }


        return $this;
    } // setTotalcomplete()

    /**
     * Set the value of [totallit] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTotallit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totallit !== $v) {
            $this->totallit = $v;
            $this->modifiedColumns[] = CountrefPeer::TOTALLIT;
        }


        return $this;
    } // setTotallit()

    /**
     * Set the value of [totalfamlit] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTotalfamlit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalfamlit !== $v) {
            $this->totalfamlit = $v;
            $this->modifiedColumns[] = CountrefPeer::TOTALFAMLIT;
        }


        return $this;
    } // setTotalfamlit()

    /**
     * Set the value of [totalref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTotalref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totalref !== $v) {
            $this->totalref = $v;
            $this->modifiedColumns[] = CountrefPeer::TOTALREF;
        }


        return $this;
    } // setTotalref()

    /**
     * Sets the value of [lastupdate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Countref The current object (for fluent API support)
     */
    public function setLastupdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastupdate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastupdate !== null && $tmpDt = new DateTime($this->lastupdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastupdate = $newDateAsString;
                $this->modifiedColumns[] = CountrefPeer::LASTUPDATE;
            }
        } // if either are not null


        return $this;
    } // setLastupdate()

    /**
     * Set the value of [morphcountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMorphcountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->morphcountfresh !== $v) {
            $this->morphcountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::MORPHCOUNTFRESH;
        }


        return $this;
    } // setMorphcountfresh()

    /**
     * Set the value of [occurcountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setOccurcountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->occurcountfresh !== $v) {
            $this->occurcountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::OCCURCOUNTFRESH;
        }


        return $this;
    } // setOccurcountfresh()

    /**
     * Set the value of [piccountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPiccountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->piccountfresh !== $v) {
            $this->piccountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::PICCOUNTFRESH;
        }


        return $this;
    } // setPiccountfresh()

    /**
     * Set the value of [growthcountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGrowthcountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growthcountfresh !== $v) {
            $this->growthcountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::GROWTHCOUNTFRESH;
        }


        return $this;
    } // setGrowthcountfresh()

    /**
     * Set the value of [foodcountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFoodcountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodcountfresh !== $v) {
            $this->foodcountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::FOODCOUNTFRESH;
        }


        return $this;
    } // setFoodcountfresh()

    /**
     * Set the value of [dietcountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setDietcountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietcountfresh !== $v) {
            $this->dietcountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::DIETCOUNTFRESH;
        }


        return $this;
    } // setDietcountfresh()

    /**
     * Set the value of [reproductioncountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setReproductioncountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reproductioncountfresh !== $v) {
            $this->reproductioncountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::REPRODUCTIONCOUNTFRESH;
        }


        return $this;
    } // setReproductioncountfresh()

    /**
     * Set the value of [spawningcountfresh] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSpawningcountfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawningcountfresh !== $v) {
            $this->spawningcountfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::SPAWNINGCOUNTFRESH;
        }


        return $this;
    } // setSpawningcountfresh()

    /**
     * Set the value of [morphcountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMorphcountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->morphcountmarine !== $v) {
            $this->morphcountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::MORPHCOUNTMARINE;
        }


        return $this;
    } // setMorphcountmarine()

    /**
     * Set the value of [occurcountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setOccurcountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->occurcountmarine !== $v) {
            $this->occurcountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::OCCURCOUNTMARINE;
        }


        return $this;
    } // setOccurcountmarine()

    /**
     * Set the value of [piccountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPiccountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->piccountmarine !== $v) {
            $this->piccountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::PICCOUNTMARINE;
        }


        return $this;
    } // setPiccountmarine()

    /**
     * Set the value of [growthcountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGrowthcountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growthcountmarine !== $v) {
            $this->growthcountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::GROWTHCOUNTMARINE;
        }


        return $this;
    } // setGrowthcountmarine()

    /**
     * Set the value of [foodcountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFoodcountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodcountmarine !== $v) {
            $this->foodcountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::FOODCOUNTMARINE;
        }


        return $this;
    } // setFoodcountmarine()

    /**
     * Set the value of [dietcountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setDietcountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietcountmarine !== $v) {
            $this->dietcountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::DIETCOUNTMARINE;
        }


        return $this;
    } // setDietcountmarine()

    /**
     * Set the value of [reproductioncountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setReproductioncountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reproductioncountmarine !== $v) {
            $this->reproductioncountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::REPRODUCTIONCOUNTMARINE;
        }


        return $this;
    } // setReproductioncountmarine()

    /**
     * Set the value of [spawningcountmarine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSpawningcountmarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawningcountmarine !== $v) {
            $this->spawningcountmarine = $v;
            $this->modifiedColumns[] = CountrefPeer::SPAWNINGCOUNTMARINE;
        }


        return $this;
    } // setSpawningcountmarine()

    /**
     * Set the value of [latdegfill] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLatdegfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latdegfill !== $v) {
            $this->latdegfill = $v;
            $this->modifiedColumns[] = CountrefPeer::LATDEGFILL;
        }


        return $this;
    } // setLatdegfill()

    /**
     * Set the value of [latminfill] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLatminfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->latminfill !== $v) {
            $this->latminfill = $v;
            $this->modifiedColumns[] = CountrefPeer::LATMINFILL;
        }


        return $this;
    } // setLatminfill()

    /**
     * Set the value of [northsouthfill] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNorthsouthfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthfill !== $v) {
            $this->northsouthfill = $v;
            $this->modifiedColumns[] = CountrefPeer::NORTHSOUTHFILL;
        }


        return $this;
    } // setNorthsouthfill()

    /**
     * Set the value of [longdegfill] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLongdegfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longdegfill !== $v) {
            $this->longdegfill = $v;
            $this->modifiedColumns[] = CountrefPeer::LONGDEGFILL;
        }


        return $this;
    } // setLongdegfill()

    /**
     * Set the value of [longminfill] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setLongminfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longminfill !== $v) {
            $this->longminfill = $v;
            $this->modifiedColumns[] = CountrefPeer::LONGMINFILL;
        }


        return $this;
    } // setLongminfill()

    /**
     * Set the value of [eastwestfill] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEastwestfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eastwestfill !== $v) {
            $this->eastwestfill = $v;
            $this->modifiedColumns[] = CountrefPeer::EASTWESTFILL;
        }


        return $this;
    } // setEastwestfill()

    /**
     * Set the value of [mlatdegfill] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatdegfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlatdegfill !== $v) {
            $this->mlatdegfill = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATDEGFILL;
        }


        return $this;
    } // setMlatdegfill()

    /**
     * Set the value of [mlatminfill] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatminfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlatminfill !== $v) {
            $this->mlatminfill = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATMINFILL;
        }


        return $this;
    } // setMlatminfill()

    /**
     * Set the value of [mnorthsouthfill] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMnorthsouthfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mnorthsouthfill !== $v) {
            $this->mnorthsouthfill = $v;
            $this->modifiedColumns[] = CountrefPeer::MNORTHSOUTHFILL;
        }


        return $this;
    } // setMnorthsouthfill()

    /**
     * Set the value of [mlongdegfill] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongdegfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlongdegfill !== $v) {
            $this->mlongdegfill = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGDEGFILL;
        }


        return $this;
    } // setMlongdegfill()

    /**
     * Set the value of [mlongminfill] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongminfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlongminfill !== $v) {
            $this->mlongminfill = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGMINFILL;
        }


        return $this;
    } // setMlongminfill()

    /**
     * Set the value of [meastwestfill] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMeastwestfill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meastwestfill !== $v) {
            $this->meastwestfill = $v;
            $this->modifiedColumns[] = CountrefPeer::MEASTWESTFILL;
        }


        return $this;
    } // setMeastwestfill()

    /**
     * Set the value of [mlatdegfill2] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatdegfill2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlatdegfill2 !== $v) {
            $this->mlatdegfill2 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATDEGFILL2;
        }


        return $this;
    } // setMlatdegfill2()

    /**
     * Set the value of [mlatminfill2] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatminfill2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlatminfill2 !== $v) {
            $this->mlatminfill2 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATMINFILL2;
        }


        return $this;
    } // setMlatminfill2()

    /**
     * Set the value of [mnorthsouthfill2] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMnorthsouthfill2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mnorthsouthfill2 !== $v) {
            $this->mnorthsouthfill2 = $v;
            $this->modifiedColumns[] = CountrefPeer::MNORTHSOUTHFILL2;
        }


        return $this;
    } // setMnorthsouthfill2()

    /**
     * Set the value of [mlongdegfill2] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongdegfill2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlongdegfill2 !== $v) {
            $this->mlongdegfill2 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGDEGFILL2;
        }


        return $this;
    } // setMlongdegfill2()

    /**
     * Set the value of [mlongminfill2] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongminfill2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlongminfill2 !== $v) {
            $this->mlongminfill2 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGMINFILL2;
        }


        return $this;
    } // setMlongminfill2()

    /**
     * Set the value of [meastwestfill2] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMeastwestfill2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meastwestfill2 !== $v) {
            $this->meastwestfill2 = $v;
            $this->modifiedColumns[] = CountrefPeer::MEASTWESTFILL2;
        }


        return $this;
    } // setMeastwestfill2()

    /**
     * Set the value of [mlatdegfill3] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatdegfill3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlatdegfill3 !== $v) {
            $this->mlatdegfill3 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATDEGFILL3;
        }


        return $this;
    } // setMlatdegfill3()

    /**
     * Set the value of [mlatminfill3] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatminfill3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlatminfill3 !== $v) {
            $this->mlatminfill3 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATMINFILL3;
        }


        return $this;
    } // setMlatminfill3()

    /**
     * Set the value of [mnorthsouthfill3] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMnorthsouthfill3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mnorthsouthfill3 !== $v) {
            $this->mnorthsouthfill3 = $v;
            $this->modifiedColumns[] = CountrefPeer::MNORTHSOUTHFILL3;
        }


        return $this;
    } // setMnorthsouthfill3()

    /**
     * Set the value of [mlongdegfill3] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongdegfill3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlongdegfill3 !== $v) {
            $this->mlongdegfill3 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGDEGFILL3;
        }


        return $this;
    } // setMlongdegfill3()

    /**
     * Set the value of [mlongminfill3] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongminfill3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlongminfill3 !== $v) {
            $this->mlongminfill3 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGMINFILL3;
        }


        return $this;
    } // setMlongminfill3()

    /**
     * Set the value of [meastwestfill3] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMeastwestfill3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meastwestfill3 !== $v) {
            $this->meastwestfill3 = $v;
            $this->modifiedColumns[] = CountrefPeer::MEASTWESTFILL3;
        }


        return $this;
    } // setMeastwestfill3()

    /**
     * Set the value of [mlatdegfill4] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatdegfill4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlatdegfill4 !== $v) {
            $this->mlatdegfill4 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATDEGFILL4;
        }


        return $this;
    } // setMlatdegfill4()

    /**
     * Set the value of [mlatminfill4] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatminfill4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlatminfill4 !== $v) {
            $this->mlatminfill4 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATMINFILL4;
        }


        return $this;
    } // setMlatminfill4()

    /**
     * Set the value of [mnorthsouthfill4] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMnorthsouthfill4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mnorthsouthfill4 !== $v) {
            $this->mnorthsouthfill4 = $v;
            $this->modifiedColumns[] = CountrefPeer::MNORTHSOUTHFILL4;
        }


        return $this;
    } // setMnorthsouthfill4()

    /**
     * Set the value of [mlongdegfill4] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongdegfill4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlongdegfill4 !== $v) {
            $this->mlongdegfill4 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGDEGFILL4;
        }


        return $this;
    } // setMlongdegfill4()

    /**
     * Set the value of [mlongminfill4] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongminfill4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlongminfill4 !== $v) {
            $this->mlongminfill4 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGMINFILL4;
        }


        return $this;
    } // setMlongminfill4()

    /**
     * Set the value of [meastwestfill4] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMeastwestfill4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meastwestfill4 !== $v) {
            $this->meastwestfill4 = $v;
            $this->modifiedColumns[] = CountrefPeer::MEASTWESTFILL4;
        }


        return $this;
    } // setMeastwestfill4()

    /**
     * Set the value of [mlatdegfill5] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatdegfill5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlatdegfill5 !== $v) {
            $this->mlatdegfill5 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATDEGFILL5;
        }


        return $this;
    } // setMlatdegfill5()

    /**
     * Set the value of [mlatminfill5] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlatminfill5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlatminfill5 !== $v) {
            $this->mlatminfill5 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLATMINFILL5;
        }


        return $this;
    } // setMlatminfill5()

    /**
     * Set the value of [mnorthsouthfill5] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMnorthsouthfill5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mnorthsouthfill5 !== $v) {
            $this->mnorthsouthfill5 = $v;
            $this->modifiedColumns[] = CountrefPeer::MNORTHSOUTHFILL5;
        }


        return $this;
    } // setMnorthsouthfill5()

    /**
     * Set the value of [mlongdegfill5] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongdegfill5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mlongdegfill5 !== $v) {
            $this->mlongdegfill5 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGDEGFILL5;
        }


        return $this;
    } // setMlongdegfill5()

    /**
     * Set the value of [mlongminfill5] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMlongminfill5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->mlongminfill5 !== $v) {
            $this->mlongminfill5 = $v;
            $this->modifiedColumns[] = CountrefPeer::MLONGMINFILL5;
        }


        return $this;
    } // setMlongminfill5()

    /**
     * Set the value of [meastwestfill5] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMeastwestfill5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meastwestfill5 !== $v) {
            $this->meastwestfill5 = $v;
            $this->modifiedColumns[] = CountrefPeer::MEASTWESTFILL5;
        }


        return $this;
    } // setMeastwestfill5()

    /**
     * Set the value of [northernlatitude] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNorthernlatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernlatitude !== $v) {
            $this->northernlatitude = $v;
            $this->modifiedColumns[] = CountrefPeer::NORTHERNLATITUDE;
        }


        return $this;
    } // setNorthernlatitude()

    /**
     * Set the value of [northernlatitudens] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNorthernlatitudens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northernlatitudens !== $v) {
            $this->northernlatitudens = $v;
            $this->modifiedColumns[] = CountrefPeer::NORTHERNLATITUDENS;
        }


        return $this;
    } // setNorthernlatitudens()

    /**
     * Set the value of [southernlatitude] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSouthernlatitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southernlatitude !== $v) {
            $this->southernlatitude = $v;
            $this->modifiedColumns[] = CountrefPeer::SOUTHERNLATITUDE;
        }


        return $this;
    } // setSouthernlatitude()

    /**
     * Set the value of [southernlatitudens] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSouthernlatitudens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->southernlatitudens !== $v) {
            $this->southernlatitudens = $v;
            $this->modifiedColumns[] = CountrefPeer::SOUTHERNLATITUDENS;
        }


        return $this;
    } // setSouthernlatitudens()

    /**
     * Set the value of [westernlongitude] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setWesternlongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->westernlongitude !== $v) {
            $this->westernlongitude = $v;
            $this->modifiedColumns[] = CountrefPeer::WESTERNLONGITUDE;
        }


        return $this;
    } // setWesternlongitude()

    /**
     * Set the value of [westernlongitudeew] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setWesternlongitudeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westernlongitudeew !== $v) {
            $this->westernlongitudeew = $v;
            $this->modifiedColumns[] = CountrefPeer::WESTERNLONGITUDEEW;
        }


        return $this;
    } // setWesternlongitudeew()

    /**
     * Set the value of [easternlongitude] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEasternlongitude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->easternlongitude !== $v) {
            $this->easternlongitude = $v;
            $this->modifiedColumns[] = CountrefPeer::EASTERNLONGITUDE;
        }


        return $this;
    } // setEasternlongitude()

    /**
     * Set the value of [easternlongitudeew] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEasternlongitudeew($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->easternlongitudeew !== $v) {
            $this->easternlongitudeew = $v;
            $this->modifiedColumns[] = CountrefPeer::EASTERNLONGITUDEEW;
        }


        return $this;
    } // setEasternlongitudeew()

    /**
     * Set the value of [centerlat] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCenterlat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->centerlat !== $v) {
            $this->centerlat = $v;
            $this->modifiedColumns[] = CountrefPeer::CENTERLAT;
        }


        return $this;
    } // setCenterlat()

    /**
     * Set the value of [centerlong] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCenterlong($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->centerlong !== $v) {
            $this->centerlong = $v;
            $this->modifiedColumns[] = CountrefPeer::CENTERLONG;
        }


        return $this;
    } // setCenterlong()

    /**
     * Set the value of [otherlanguage] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setOtherlanguage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherlanguage !== $v) {
            $this->otherlanguage = $v;
            $this->modifiedColumns[] = CountrefPeer::OTHERLANGUAGE;
        }


        return $this;
    } // setOtherlanguage()

    /**
     * Set the value of [geography] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGeography($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->geography !== $v) {
            $this->geography = $v;
            $this->modifiedColumns[] = CountrefPeer::GEOGRAPHY;
        }


        return $this;
    } // setGeography()

    /**
     * Set the value of [geographyref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGeographyref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->geographyref !== $v) {
            $this->geographyref = $v;
            $this->modifiedColumns[] = CountrefPeer::GEOGRAPHYREF;
        }


        return $this;
    } // setGeographyref()

    /**
     * Set the value of [hydrography] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setHydrography($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hydrography !== $v) {
            $this->hydrography = $v;
            $this->modifiedColumns[] = CountrefPeer::HYDROGRAPHY;
        }


        return $this;
    } // setHydrography()

    /**
     * Set the value of [hydrographyref] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setHydrographyref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hydrographyref !== $v) {
            $this->hydrographyref = $v;
            $this->modifiedColumns[] = CountrefPeer::HYDROGRAPHYREF;
        }


        return $this;
    } // setHydrographyref()

    /**
     * Set the value of [commentfresh] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setCommentfresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentfresh !== $v) {
            $this->commentfresh = $v;
            $this->modifiedColumns[] = CountrefPeer::COMMENTFRESH;
        }


        return $this;
    } // setCommentfresh()

    /**
     * Set the value of [reffresh1] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setReffresh1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reffresh1 !== $v) {
            $this->reffresh1 = $v;
            $this->modifiedColumns[] = CountrefPeer::REFFRESH1;
        }


        return $this;
    } // setReffresh1()

    /**
     * Set the value of [reffresh2] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setReffresh2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reffresh2 !== $v) {
            $this->reffresh2 = $v;
            $this->modifiedColumns[] = CountrefPeer::REFFRESH2;
        }


        return $this;
    } // setReffresh2()

    /**
     * Set the value of [reffresh3] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setReffresh3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reffresh3 !== $v) {
            $this->reffresh3 = $v;
            $this->modifiedColumns[] = CountrefPeer::REFFRESH3;
        }


        return $this;
    } // setReffresh3()

    /**
     * Set the value of [freshprimary] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshprimary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshprimary !== $v) {
            $this->freshprimary = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHPRIMARY;
        }


        return $this;
    } // setFreshprimary()

    /**
     * Set the value of [freshsecondary] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshsecondary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshsecondary !== $v) {
            $this->freshsecondary = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHSECONDARY;
        }


        return $this;
    } // setFreshsecondary()

    /**
     * Set the value of [freshinto] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFreshinto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->freshinto !== $v) {
            $this->freshinto = $v;
            $this->modifiedColumns[] = CountrefPeer::FRESHINTO;
        }


        return $this;
    } // setFreshinto()

    /**
     * Set the value of [infisheriesreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setInfisheriesreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infisheriesreported !== $v) {
            $this->infisheriesreported = $v;
            $this->modifiedColumns[] = CountrefPeer::INFISHERIESREPORTED;
        }


        return $this;
    } // setInfisheriesreported()

    /**
     * Set the value of [infisheriespotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setInfisheriespotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infisheriespotential !== $v) {
            $this->infisheriespotential = $v;
            $this->modifiedColumns[] = CountrefPeer::INFISHERIESPOTENTIAL;
        }


        return $this;
    } // setInfisheriespotential()

    /**
     * Set the value of [inaquareported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setInaquareported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->inaquareported !== $v) {
            $this->inaquareported = $v;
            $this->modifiedColumns[] = CountrefPeer::INAQUAREPORTED;
        }


        return $this;
    } // setInaquareported()

    /**
     * Set the value of [inaquapotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setInaquapotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->inaquapotential !== $v) {
            $this->inaquapotential = $v;
            $this->modifiedColumns[] = CountrefPeer::INAQUAPOTENTIAL;
        }


        return $this;
    } // setInaquapotential()

    /**
     * Set the value of [exportreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setExportreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->exportreported !== $v) {
            $this->exportreported = $v;
            $this->modifiedColumns[] = CountrefPeer::EXPORTREPORTED;
        }


        return $this;
    } // setExportreported()

    /**
     * Set the value of [exportpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setExportpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->exportpotential !== $v) {
            $this->exportpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::EXPORTPOTENTIAL;
        }


        return $this;
    } // setExportpotential()

    /**
     * Set the value of [sportreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSportreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sportreported !== $v) {
            $this->sportreported = $v;
            $this->modifiedColumns[] = CountrefPeer::SPORTREPORTED;
        }


        return $this;
    } // setSportreported()

    /**
     * Set the value of [sportpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSportpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sportpotential !== $v) {
            $this->sportpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::SPORTPOTENTIAL;
        }


        return $this;
    } // setSportpotential()

    /**
     * Set the value of [endemicreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEndemicreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->endemicreported !== $v) {
            $this->endemicreported = $v;
            $this->modifiedColumns[] = CountrefPeer::ENDEMICREPORTED;
        }


        return $this;
    } // setEndemicreported()

    /**
     * Set the value of [endemicpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEndemicpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->endemicpotential !== $v) {
            $this->endemicpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::ENDEMICPOTENTIAL;
        }


        return $this;
    } // setEndemicpotential()

    /**
     * Set the value of [threatened] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setThreatened($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->threatened !== $v) {
            $this->threatened = $v;
            $this->modifiedColumns[] = CountrefPeer::THREATENED;
        }


        return $this;
    } // setThreatened()

    /**
     * Set the value of [protectedreported] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setProtectedreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->protectedreported !== $v) {
            $this->protectedreported = $v;
            $this->modifiedColumns[] = CountrefPeer::PROTECTEDREPORTED;
        }


        return $this;
    } // setProtectedreported()

    /**
     * Set the value of [protectedpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setProtectedpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->protectedpotential !== $v) {
            $this->protectedpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::PROTECTEDPOTENTIAL;
        }


        return $this;
    } // setProtectedpotential()

    /**
     * Set the value of [acp] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setAcp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->acp !== $v) {
            $this->acp = $v;
            $this->modifiedColumns[] = CountrefPeer::ACP;
        }


        return $this;
    } // setAcp()

    /**
     * Set the value of [developed] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setDeveloped($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->developed !== $v) {
            $this->developed = $v;
            $this->modifiedColumns[] = CountrefPeer::DEVELOPED;
        }


        return $this;
    } // setDeveloped()

    /**
     * Set the value of [marine] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marine !== $v) {
            $this->marine = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINE;
        }


        return $this;
    } // setMarine()

    /**
     * Set the value of [brackish] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setBrackish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->brackish !== $v) {
            $this->brackish = $v;
            $this->modifiedColumns[] = CountrefPeer::BRACKISH;
        }


        return $this;
    } // setBrackish()

    /**
     * Set the value of [marineinto] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineinto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineinto !== $v) {
            $this->marineinto = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEINTO;
        }


        return $this;
    } // setMarineinto()

    /**
     * Set the value of [marineinfisheriesreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineinfisheriesreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineinfisheriesreported !== $v) {
            $this->marineinfisheriesreported = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEINFISHERIESREPORTED;
        }


        return $this;
    } // setMarineinfisheriesreported()

    /**
     * Set the value of [marineinfisheriespotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineinfisheriespotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineinfisheriespotential !== $v) {
            $this->marineinfisheriespotential = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEINFISHERIESPOTENTIAL;
        }


        return $this;
    } // setMarineinfisheriespotential()

    /**
     * Set the value of [marineinaquareported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineinaquareported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineinaquareported !== $v) {
            $this->marineinaquareported = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEINAQUAREPORTED;
        }


        return $this;
    } // setMarineinaquareported()

    /**
     * Set the value of [marineinaquapotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineinaquapotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineinaquapotential !== $v) {
            $this->marineinaquapotential = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEINAQUAPOTENTIAL;
        }


        return $this;
    } // setMarineinaquapotential()

    /**
     * Set the value of [marineexportreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineexportreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineexportreported !== $v) {
            $this->marineexportreported = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEEXPORTREPORTED;
        }


        return $this;
    } // setMarineexportreported()

    /**
     * Set the value of [marineexportpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineexportpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineexportpotential !== $v) {
            $this->marineexportpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEEXPORTPOTENTIAL;
        }


        return $this;
    } // setMarineexportpotential()

    /**
     * Set the value of [marinesportreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinesportreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinesportreported !== $v) {
            $this->marinesportreported = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINESPORTREPORTED;
        }


        return $this;
    } // setMarinesportreported()

    /**
     * Set the value of [marinesportpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinesportpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinesportpotential !== $v) {
            $this->marinesportpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINESPORTPOTENTIAL;
        }


        return $this;
    } // setMarinesportpotential()

    /**
     * Set the value of [marineendemicreported] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineendemicreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineendemicreported !== $v) {
            $this->marineendemicreported = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEENDEMICREPORTED;
        }


        return $this;
    } // setMarineendemicreported()

    /**
     * Set the value of [marineendemicpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineendemicpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineendemicpotential !== $v) {
            $this->marineendemicpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEENDEMICPOTENTIAL;
        }


        return $this;
    } // setMarineendemicpotential()

    /**
     * Set the value of [marinethreatened] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarinethreatened($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marinethreatened !== $v) {
            $this->marinethreatened = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINETHREATENED;
        }


        return $this;
    } // setMarinethreatened()

    /**
     * Set the value of [marineprotectedreported] column.
     *
     * @param  double $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineprotectedreported($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->marineprotectedreported !== $v) {
            $this->marineprotectedreported = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEPROTECTEDREPORTED;
        }


        return $this;
    } // setMarineprotectedreported()

    /**
     * Set the value of [marineprotectedpotential] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setMarineprotectedpotential($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marineprotectedpotential !== $v) {
            $this->marineprotectedpotential = $v;
            $this->modifiedColumns[] = CountrefPeer::MARINEPROTECTEDPOTENTIAL;
        }


        return $this;
    } // setMarineprotectedpotential()

    /**
     * Set the value of [natfishdb] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNatfishdb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->natfishdb !== $v) {
            $this->natfishdb = $v;
            $this->modifiedColumns[] = CountrefPeer::NATFISHDB;
        }


        return $this;
    } // setNatfishdb()

    /**
     * Set the value of [natfishdb2] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNatfishdb2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->natfishdb2 !== $v) {
            $this->natfishdb2 = $v;
            $this->modifiedColumns[] = CountrefPeer::NATFISHDB2;
        }


        return $this;
    } // setNatfishdb2()

    /**
     * Set the value of [factbook] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFactbook($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->factbook !== $v) {
            $this->factbook = $v;
            $this->modifiedColumns[] = CountrefPeer::FACTBOOK;
        }


        return $this;
    } // setFactbook()

    /**
     * Set the value of [natfishaut] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setNatfishaut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->natfishaut !== $v) {
            $this->natfishaut = $v;
            $this->modifiedColumns[] = CountrefPeer::NATFISHAUT;
        }


        return $this;
    } // setNatfishaut()

    /**
     * Set the value of [tradenames] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setTradenames($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tradenames !== $v) {
            $this->tradenames = $v;
            $this->modifiedColumns[] = CountrefPeer::TRADENAMES;
        }


        return $this;
    } // setTradenames()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = CountrefPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Countref The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = CountrefPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = CountrefPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Countref The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = CountrefPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = CountrefPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Countref The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = CountrefPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [greek_original] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGreekOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->greek_original !== $v) {
            $this->greek_original = $v;
            $this->modifiedColumns[] = CountrefPeer::GREEK_ORIGINAL;
        }


        return $this;
    } // setGreekOriginal()

    /**
     * Set the value of [greek] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGreek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->greek !== $v) {
            $this->greek = $v;
            $this->modifiedColumns[] = CountrefPeer::GREEK;
        }


        return $this;
    } // setGreek()

    /**
     * Set the value of [russian_original] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setRussianOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->russian_original !== $v) {
            $this->russian_original = $v;
            $this->modifiedColumns[] = CountrefPeer::RUSSIAN_ORIGINAL;
        }


        return $this;
    } // setRussianOriginal()

    /**
     * Set the value of [russian] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setRussian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->russian !== $v) {
            $this->russian = $v;
            $this->modifiedColumns[] = CountrefPeer::RUSSIAN;
        }


        return $this;
    } // setRussian()

    /**
     * Set the value of [french] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setFrench($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->french !== $v) {
            $this->french = $v;
            $this->modifiedColumns[] = CountrefPeer::FRENCH;
        }


        return $this;
    } // setFrench()

    /**
     * Set the value of [spanish] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSpanish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spanish !== $v) {
            $this->spanish = $v;
            $this->modifiedColumns[] = CountrefPeer::SPANISH;
        }


        return $this;
    } // setSpanish()

    /**
     * Set the value of [german] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setGerman($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->german !== $v) {
            $this->german = $v;
            $this->modifiedColumns[] = CountrefPeer::GERMAN;
        }


        return $this;
    } // setGerman()

    /**
     * Set the value of [dutch] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setDutch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dutch !== $v) {
            $this->dutch = $v;
            $this->modifiedColumns[] = CountrefPeer::DUTCH;
        }


        return $this;
    } // setDutch()

    /**
     * Set the value of [portuguese] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setPortuguese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->portuguese !== $v) {
            $this->portuguese = $v;
            $this->modifiedColumns[] = CountrefPeer::PORTUGUESE;
        }


        return $this;
    } // setPortuguese()

    /**
     * Set the value of [italian] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setItalian($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->italian !== $v) {
            $this->italian = $v;
            $this->modifiedColumns[] = CountrefPeer::ITALIAN;
        }


        return $this;
    } // setItalian()

    /**
     * Set the value of [swedish] column.
     *
     * @param  string $v new value
     * @return Countref The current object (for fluent API support)
     */
    public function setSwedish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swedish !== $v) {
            $this->swedish = $v;
            $this->modifiedColumns[] = CountrefPeer::SWEDISH;
        }


        return $this;
    } // setSwedish()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Countref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = CountrefPeer::TS;
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

            $this->paese = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->note = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->c_code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->abb = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->iso_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->iso3alpha = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->iso2alpha = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->saup_code = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->used = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->capital = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->latdeg = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->latmin = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->northsouth = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->longdeg = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->longmin = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->eastwest = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->remark = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->polarboreal = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->temperate = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->subtropical = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->tropical = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->landlocked = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->geographicarea = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->region = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->continent = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->areacodeinland = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->faoareainland = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->areacodemarinei = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->faoareamarinei = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->areacodemarineii = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->faoareamarineii = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->areacodemarineiii = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->faoareamarineiii = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->areacodemarineiv = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->faoareamarineiv = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->areacodemarinev = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->faoareamarinev = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->population = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->populationyear = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->populationrate = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->populationref = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->coastalpopulation = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->coastpopref = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->area = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->coastline = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->coastlineref = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->shelfarea = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->shelfref = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->eecarea = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->eezref = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->language = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->currency = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->marinecount = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->marinefamcount = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->completemarine = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->marinelit = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->marinefamlit = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->checkmarineref = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->marineflag = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->freshwatercount = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->freshfamcount = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->completefresh = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->freshwaterlit = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->freshfamlit = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->checkfreshref = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->freshflag = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->totalcount = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->totalfamcount = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->totalcomplete = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->totallit = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->totalfamlit = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->totalref = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->lastupdate = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->morphcountfresh = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->occurcountfresh = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->piccountfresh = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->growthcountfresh = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->foodcountfresh = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->dietcountfresh = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->reproductioncountfresh = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->spawningcountfresh = ($row[$startcol + 80] !== null) ? (int) $row[$startcol + 80] : null;
            $this->morphcountmarine = ($row[$startcol + 81] !== null) ? (int) $row[$startcol + 81] : null;
            $this->occurcountmarine = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->piccountmarine = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->growthcountmarine = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->foodcountmarine = ($row[$startcol + 85] !== null) ? (int) $row[$startcol + 85] : null;
            $this->dietcountmarine = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->reproductioncountmarine = ($row[$startcol + 87] !== null) ? (int) $row[$startcol + 87] : null;
            $this->spawningcountmarine = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->latdegfill = ($row[$startcol + 89] !== null) ? (int) $row[$startcol + 89] : null;
            $this->latminfill = ($row[$startcol + 90] !== null) ? (double) $row[$startcol + 90] : null;
            $this->northsouthfill = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->longdegfill = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->longminfill = ($row[$startcol + 93] !== null) ? (double) $row[$startcol + 93] : null;
            $this->eastwestfill = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->mlatdegfill = ($row[$startcol + 95] !== null) ? (int) $row[$startcol + 95] : null;
            $this->mlatminfill = ($row[$startcol + 96] !== null) ? (double) $row[$startcol + 96] : null;
            $this->mnorthsouthfill = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->mlongdegfill = ($row[$startcol + 98] !== null) ? (int) $row[$startcol + 98] : null;
            $this->mlongminfill = ($row[$startcol + 99] !== null) ? (double) $row[$startcol + 99] : null;
            $this->meastwestfill = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->mlatdegfill2 = ($row[$startcol + 101] !== null) ? (int) $row[$startcol + 101] : null;
            $this->mlatminfill2 = ($row[$startcol + 102] !== null) ? (double) $row[$startcol + 102] : null;
            $this->mnorthsouthfill2 = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->mlongdegfill2 = ($row[$startcol + 104] !== null) ? (int) $row[$startcol + 104] : null;
            $this->mlongminfill2 = ($row[$startcol + 105] !== null) ? (double) $row[$startcol + 105] : null;
            $this->meastwestfill2 = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->mlatdegfill3 = ($row[$startcol + 107] !== null) ? (int) $row[$startcol + 107] : null;
            $this->mlatminfill3 = ($row[$startcol + 108] !== null) ? (double) $row[$startcol + 108] : null;
            $this->mnorthsouthfill3 = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->mlongdegfill3 = ($row[$startcol + 110] !== null) ? (int) $row[$startcol + 110] : null;
            $this->mlongminfill3 = ($row[$startcol + 111] !== null) ? (double) $row[$startcol + 111] : null;
            $this->meastwestfill3 = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->mlatdegfill4 = ($row[$startcol + 113] !== null) ? (int) $row[$startcol + 113] : null;
            $this->mlatminfill4 = ($row[$startcol + 114] !== null) ? (double) $row[$startcol + 114] : null;
            $this->mnorthsouthfill4 = ($row[$startcol + 115] !== null) ? (string) $row[$startcol + 115] : null;
            $this->mlongdegfill4 = ($row[$startcol + 116] !== null) ? (int) $row[$startcol + 116] : null;
            $this->mlongminfill4 = ($row[$startcol + 117] !== null) ? (double) $row[$startcol + 117] : null;
            $this->meastwestfill4 = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->mlatdegfill5 = ($row[$startcol + 119] !== null) ? (int) $row[$startcol + 119] : null;
            $this->mlatminfill5 = ($row[$startcol + 120] !== null) ? (double) $row[$startcol + 120] : null;
            $this->mnorthsouthfill5 = ($row[$startcol + 121] !== null) ? (string) $row[$startcol + 121] : null;
            $this->mlongdegfill5 = ($row[$startcol + 122] !== null) ? (int) $row[$startcol + 122] : null;
            $this->mlongminfill5 = ($row[$startcol + 123] !== null) ? (double) $row[$startcol + 123] : null;
            $this->meastwestfill5 = ($row[$startcol + 124] !== null) ? (string) $row[$startcol + 124] : null;
            $this->northernlatitude = ($row[$startcol + 125] !== null) ? (int) $row[$startcol + 125] : null;
            $this->northernlatitudens = ($row[$startcol + 126] !== null) ? (string) $row[$startcol + 126] : null;
            $this->southernlatitude = ($row[$startcol + 127] !== null) ? (int) $row[$startcol + 127] : null;
            $this->southernlatitudens = ($row[$startcol + 128] !== null) ? (string) $row[$startcol + 128] : null;
            $this->westernlongitude = ($row[$startcol + 129] !== null) ? (int) $row[$startcol + 129] : null;
            $this->westernlongitudeew = ($row[$startcol + 130] !== null) ? (string) $row[$startcol + 130] : null;
            $this->easternlongitude = ($row[$startcol + 131] !== null) ? (int) $row[$startcol + 131] : null;
            $this->easternlongitudeew = ($row[$startcol + 132] !== null) ? (string) $row[$startcol + 132] : null;
            $this->centerlat = ($row[$startcol + 133] !== null) ? (double) $row[$startcol + 133] : null;
            $this->centerlong = ($row[$startcol + 134] !== null) ? (double) $row[$startcol + 134] : null;
            $this->otherlanguage = ($row[$startcol + 135] !== null) ? (string) $row[$startcol + 135] : null;
            $this->geography = ($row[$startcol + 136] !== null) ? (string) $row[$startcol + 136] : null;
            $this->geographyref = ($row[$startcol + 137] !== null) ? (int) $row[$startcol + 137] : null;
            $this->hydrography = ($row[$startcol + 138] !== null) ? (string) $row[$startcol + 138] : null;
            $this->hydrographyref = ($row[$startcol + 139] !== null) ? (int) $row[$startcol + 139] : null;
            $this->commentfresh = ($row[$startcol + 140] !== null) ? (string) $row[$startcol + 140] : null;
            $this->reffresh1 = ($row[$startcol + 141] !== null) ? (int) $row[$startcol + 141] : null;
            $this->reffresh2 = ($row[$startcol + 142] !== null) ? (int) $row[$startcol + 142] : null;
            $this->reffresh3 = ($row[$startcol + 143] !== null) ? (int) $row[$startcol + 143] : null;
            $this->freshprimary = ($row[$startcol + 144] !== null) ? (int) $row[$startcol + 144] : null;
            $this->freshsecondary = ($row[$startcol + 145] !== null) ? (int) $row[$startcol + 145] : null;
            $this->freshinto = ($row[$startcol + 146] !== null) ? (int) $row[$startcol + 146] : null;
            $this->infisheriesreported = ($row[$startcol + 147] !== null) ? (int) $row[$startcol + 147] : null;
            $this->infisheriespotential = ($row[$startcol + 148] !== null) ? (int) $row[$startcol + 148] : null;
            $this->inaquareported = ($row[$startcol + 149] !== null) ? (int) $row[$startcol + 149] : null;
            $this->inaquapotential = ($row[$startcol + 150] !== null) ? (int) $row[$startcol + 150] : null;
            $this->exportreported = ($row[$startcol + 151] !== null) ? (int) $row[$startcol + 151] : null;
            $this->exportpotential = ($row[$startcol + 152] !== null) ? (int) $row[$startcol + 152] : null;
            $this->sportreported = ($row[$startcol + 153] !== null) ? (int) $row[$startcol + 153] : null;
            $this->sportpotential = ($row[$startcol + 154] !== null) ? (int) $row[$startcol + 154] : null;
            $this->endemicreported = ($row[$startcol + 155] !== null) ? (int) $row[$startcol + 155] : null;
            $this->endemicpotential = ($row[$startcol + 156] !== null) ? (int) $row[$startcol + 156] : null;
            $this->threatened = ($row[$startcol + 157] !== null) ? (int) $row[$startcol + 157] : null;
            $this->protectedreported = ($row[$startcol + 158] !== null) ? (double) $row[$startcol + 158] : null;
            $this->protectedpotential = ($row[$startcol + 159] !== null) ? (int) $row[$startcol + 159] : null;
            $this->acp = ($row[$startcol + 160] !== null) ? (int) $row[$startcol + 160] : null;
            $this->developed = ($row[$startcol + 161] !== null) ? (int) $row[$startcol + 161] : null;
            $this->marine = ($row[$startcol + 162] !== null) ? (int) $row[$startcol + 162] : null;
            $this->brackish = ($row[$startcol + 163] !== null) ? (int) $row[$startcol + 163] : null;
            $this->marineinto = ($row[$startcol + 164] !== null) ? (int) $row[$startcol + 164] : null;
            $this->marineinfisheriesreported = ($row[$startcol + 165] !== null) ? (int) $row[$startcol + 165] : null;
            $this->marineinfisheriespotential = ($row[$startcol + 166] !== null) ? (int) $row[$startcol + 166] : null;
            $this->marineinaquareported = ($row[$startcol + 167] !== null) ? (int) $row[$startcol + 167] : null;
            $this->marineinaquapotential = ($row[$startcol + 168] !== null) ? (int) $row[$startcol + 168] : null;
            $this->marineexportreported = ($row[$startcol + 169] !== null) ? (int) $row[$startcol + 169] : null;
            $this->marineexportpotential = ($row[$startcol + 170] !== null) ? (int) $row[$startcol + 170] : null;
            $this->marinesportreported = ($row[$startcol + 171] !== null) ? (int) $row[$startcol + 171] : null;
            $this->marinesportpotential = ($row[$startcol + 172] !== null) ? (int) $row[$startcol + 172] : null;
            $this->marineendemicreported = ($row[$startcol + 173] !== null) ? (int) $row[$startcol + 173] : null;
            $this->marineendemicpotential = ($row[$startcol + 174] !== null) ? (int) $row[$startcol + 174] : null;
            $this->marinethreatened = ($row[$startcol + 175] !== null) ? (int) $row[$startcol + 175] : null;
            $this->marineprotectedreported = ($row[$startcol + 176] !== null) ? (double) $row[$startcol + 176] : null;
            $this->marineprotectedpotential = ($row[$startcol + 177] !== null) ? (int) $row[$startcol + 177] : null;
            $this->natfishdb = ($row[$startcol + 178] !== null) ? (string) $row[$startcol + 178] : null;
            $this->natfishdb2 = ($row[$startcol + 179] !== null) ? (string) $row[$startcol + 179] : null;
            $this->factbook = ($row[$startcol + 180] !== null) ? (string) $row[$startcol + 180] : null;
            $this->natfishaut = ($row[$startcol + 181] !== null) ? (string) $row[$startcol + 181] : null;
            $this->tradenames = ($row[$startcol + 182] !== null) ? (string) $row[$startcol + 182] : null;
            $this->entered = ($row[$startcol + 183] !== null) ? (int) $row[$startcol + 183] : null;
            $this->dateentered = ($row[$startcol + 184] !== null) ? (string) $row[$startcol + 184] : null;
            $this->modified = ($row[$startcol + 185] !== null) ? (int) $row[$startcol + 185] : null;
            $this->datemodified = ($row[$startcol + 186] !== null) ? (string) $row[$startcol + 186] : null;
            $this->expert = ($row[$startcol + 187] !== null) ? (int) $row[$startcol + 187] : null;
            $this->datechecked = ($row[$startcol + 188] !== null) ? (string) $row[$startcol + 188] : null;
            $this->greek_original = ($row[$startcol + 189] !== null) ? (string) $row[$startcol + 189] : null;
            $this->greek = ($row[$startcol + 190] !== null) ? (string) $row[$startcol + 190] : null;
            $this->russian_original = ($row[$startcol + 191] !== null) ? (string) $row[$startcol + 191] : null;
            $this->russian = ($row[$startcol + 192] !== null) ? (string) $row[$startcol + 192] : null;
            $this->french = ($row[$startcol + 193] !== null) ? (string) $row[$startcol + 193] : null;
            $this->spanish = ($row[$startcol + 194] !== null) ? (string) $row[$startcol + 194] : null;
            $this->german = ($row[$startcol + 195] !== null) ? (string) $row[$startcol + 195] : null;
            $this->dutch = ($row[$startcol + 196] !== null) ? (string) $row[$startcol + 196] : null;
            $this->portuguese = ($row[$startcol + 197] !== null) ? (string) $row[$startcol + 197] : null;
            $this->italian = ($row[$startcol + 198] !== null) ? (string) $row[$startcol + 198] : null;
            $this->swedish = ($row[$startcol + 199] !== null) ? (string) $row[$startcol + 199] : null;
            $this->ts = ($row[$startcol + 200] !== null) ? (string) $row[$startcol + 200] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 201; // 201 = CountrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Countref object", $e);
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
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CountrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CountrefQuery::create()
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
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CountrefPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CountrefPeer::PAESE)) {
            $modifiedColumns[':p' . $index++]  = '`PAESE`';
        }
        if ($this->isColumnModified(CountrefPeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`Note`';
        }
        if ($this->isColumnModified(CountrefPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(CountrefPeer::ABB)) {
            $modifiedColumns[':p' . $index++]  = '`ABB`';
        }
        if ($this->isColumnModified(CountrefPeer::ISO_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`ISO_Code`';
        }
        if ($this->isColumnModified(CountrefPeer::ISO3ALPHA)) {
            $modifiedColumns[':p' . $index++]  = '`ISO3Alpha`';
        }
        if ($this->isColumnModified(CountrefPeer::ISO2ALPHA)) {
            $modifiedColumns[':p' . $index++]  = '`ISO2Alpha`';
        }
        if ($this->isColumnModified(CountrefPeer::SAUP_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`SAUP_Code`';
        }
        if ($this->isColumnModified(CountrefPeer::USED)) {
            $modifiedColumns[':p' . $index++]  = '`Used`';
        }
        if ($this->isColumnModified(CountrefPeer::CAPITAL)) {
            $modifiedColumns[':p' . $index++]  = '`Capital`';
        }
        if ($this->isColumnModified(CountrefPeer::LATDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LatDeg`';
        }
        if ($this->isColumnModified(CountrefPeer::LATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatMin`';
        }
        if ($this->isColumnModified(CountrefPeer::NORTHSOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouth`';
        }
        if ($this->isColumnModified(CountrefPeer::LONGDEG)) {
            $modifiedColumns[':p' . $index++]  = '`LongDeg`';
        }
        if ($this->isColumnModified(CountrefPeer::LONGMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LongMin`';
        }
        if ($this->isColumnModified(CountrefPeer::EASTWEST)) {
            $modifiedColumns[':p' . $index++]  = '`EastWest`';
        }
        if ($this->isColumnModified(CountrefPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(CountrefPeer::POLARBOREAL)) {
            $modifiedColumns[':p' . $index++]  = '`PolarBoreal`';
        }
        if ($this->isColumnModified(CountrefPeer::TEMPERATE)) {
            $modifiedColumns[':p' . $index++]  = '`Temperate`';
        }
        if ($this->isColumnModified(CountrefPeer::SUBTROPICAL)) {
            $modifiedColumns[':p' . $index++]  = '`Subtropical`';
        }
        if ($this->isColumnModified(CountrefPeer::TROPICAL)) {
            $modifiedColumns[':p' . $index++]  = '`Tropical`';
        }
        if ($this->isColumnModified(CountrefPeer::LANDLOCKED)) {
            $modifiedColumns[':p' . $index++]  = '`Landlocked`';
        }
        if ($this->isColumnModified(CountrefPeer::GEOGRAPHICAREA)) {
            $modifiedColumns[':p' . $index++]  = '`GeographicArea`';
        }
        if ($this->isColumnModified(CountrefPeer::REGION)) {
            $modifiedColumns[':p' . $index++]  = '`Region`';
        }
        if ($this->isColumnModified(CountrefPeer::CONTINENT)) {
            $modifiedColumns[':p' . $index++]  = '`Continent`';
        }
        if ($this->isColumnModified(CountrefPeer::AREACODEINLAND)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeInland`';
        }
        if ($this->isColumnModified(CountrefPeer::FAOAREAINLAND)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAreaInland`';
        }
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEI)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineI`';
        }
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEI)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAreaMarineI`';
        }
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEII)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineII`';
        }
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEII)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAreaMarineII`';
        }
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEIII)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineIII`';
        }
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEIII)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAreaMarineIII`';
        }
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEIV)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineIV`';
        }
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEIV)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAreaMarineIV`';
        }
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEV)) {
            $modifiedColumns[':p' . $index++]  = '`AreaCodeMarineV`';
        }
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEV)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAreaMarineV`';
        }
        if ($this->isColumnModified(CountrefPeer::POPULATION)) {
            $modifiedColumns[':p' . $index++]  = '`Population`';
        }
        if ($this->isColumnModified(CountrefPeer::POPULATIONYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`PopulationYear`';
        }
        if ($this->isColumnModified(CountrefPeer::POPULATIONRATE)) {
            $modifiedColumns[':p' . $index++]  = '`PopulationRate`';
        }
        if ($this->isColumnModified(CountrefPeer::POPULATIONREF)) {
            $modifiedColumns[':p' . $index++]  = '`PopulationRef`';
        }
        if ($this->isColumnModified(CountrefPeer::COASTALPOPULATION)) {
            $modifiedColumns[':p' . $index++]  = '`CoastalPopulation`';
        }
        if ($this->isColumnModified(CountrefPeer::COASTPOPREF)) {
            $modifiedColumns[':p' . $index++]  = '`CoastPopRef`';
        }
        if ($this->isColumnModified(CountrefPeer::AREA)) {
            $modifiedColumns[':p' . $index++]  = '`Area`';
        }
        if ($this->isColumnModified(CountrefPeer::COASTLINE)) {
            $modifiedColumns[':p' . $index++]  = '`Coastline`';
        }
        if ($this->isColumnModified(CountrefPeer::COASTLINEREF)) {
            $modifiedColumns[':p' . $index++]  = '`CoastlineRef`';
        }
        if ($this->isColumnModified(CountrefPeer::SHELFAREA)) {
            $modifiedColumns[':p' . $index++]  = '`ShelfArea`';
        }
        if ($this->isColumnModified(CountrefPeer::SHELFREF)) {
            $modifiedColumns[':p' . $index++]  = '`ShelfRef`';
        }
        if ($this->isColumnModified(CountrefPeer::EECAREA)) {
            $modifiedColumns[':p' . $index++]  = '`EECarea`';
        }
        if ($this->isColumnModified(CountrefPeer::EEZREF)) {
            $modifiedColumns[':p' . $index++]  = '`EEZRef`';
        }
        if ($this->isColumnModified(CountrefPeer::LANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Language`';
        }
        if ($this->isColumnModified(CountrefPeer::CURRENCY)) {
            $modifiedColumns[':p' . $index++]  = '`Currency`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINECOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`MarineCount`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEFAMCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`MarineFamCount`';
        }
        if ($this->isColumnModified(CountrefPeer::COMPLETEMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`CompleteMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINELIT)) {
            $modifiedColumns[':p' . $index++]  = '`MarineLit`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEFAMLIT)) {
            $modifiedColumns[':p' . $index++]  = '`MarineFamLit`';
        }
        if ($this->isColumnModified(CountrefPeer::CHECKMARINEREF)) {
            $modifiedColumns[':p' . $index++]  = '`CheckMarineRef`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEFLAG)) {
            $modifiedColumns[':p' . $index++]  = '`MarineFlag`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHWATERCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`FreshwaterCount`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHFAMCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`FreshFamCount`';
        }
        if ($this->isColumnModified(CountrefPeer::COMPLETEFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`CompleteFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHWATERLIT)) {
            $modifiedColumns[':p' . $index++]  = '`FreshwaterLit`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHFAMLIT)) {
            $modifiedColumns[':p' . $index++]  = '`FreshFamLit`';
        }
        if ($this->isColumnModified(CountrefPeer::CHECKFRESHREF)) {
            $modifiedColumns[':p' . $index++]  = '`CheckFreshRef`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHFLAG)) {
            $modifiedColumns[':p' . $index++]  = '`FreshFlag`';
        }
        if ($this->isColumnModified(CountrefPeer::TOTALCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalCount`';
        }
        if ($this->isColumnModified(CountrefPeer::TOTALFAMCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalFamCount`';
        }
        if ($this->isColumnModified(CountrefPeer::TOTALCOMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`TotalComplete`';
        }
        if ($this->isColumnModified(CountrefPeer::TOTALLIT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalLit`';
        }
        if ($this->isColumnModified(CountrefPeer::TOTALFAMLIT)) {
            $modifiedColumns[':p' . $index++]  = '`TotalFamLit`';
        }
        if ($this->isColumnModified(CountrefPeer::TOTALREF)) {
            $modifiedColumns[':p' . $index++]  = '`TotalRef`';
        }
        if ($this->isColumnModified(CountrefPeer::LASTUPDATE)) {
            $modifiedColumns[':p' . $index++]  = '`LastUpdate`';
        }
        if ($this->isColumnModified(CountrefPeer::MORPHCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`MorphCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::OCCURCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`OccurCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::PICCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`PicCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::GROWTHCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::FOODCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`FoodCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::DIETCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`DietCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::REPRODUCTIONCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`ReproductionCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::SPAWNINGCOUNTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningCountFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::MORPHCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`MorphCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::OCCURCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`OccurCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::PICCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`PicCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::GROWTHCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::FOODCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`FoodCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::DIETCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`DietCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::REPRODUCTIONCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`ReproductionCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::SPAWNINGCOUNTMARINE)) {
            $modifiedColumns[':p' . $index++]  = '`SpawningCountMarine`';
        }
        if ($this->isColumnModified(CountrefPeer::LATDEGFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LatDegFill`';
        }
        if ($this->isColumnModified(CountrefPeer::LATMINFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LatMinFill`';
        }
        if ($this->isColumnModified(CountrefPeer::NORTHSOUTHFILL)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthFill`';
        }
        if ($this->isColumnModified(CountrefPeer::LONGDEGFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LongDegFill`';
        }
        if ($this->isColumnModified(CountrefPeer::LONGMINFILL)) {
            $modifiedColumns[':p' . $index++]  = '`LongMinFill`';
        }
        if ($this->isColumnModified(CountrefPeer::EASTWESTFILL)) {
            $modifiedColumns[':p' . $index++]  = '`EastWestFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL)) {
            $modifiedColumns[':p' . $index++]  = '`MLatDegFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL)) {
            $modifiedColumns[':p' . $index++]  = '`MLatMinFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL)) {
            $modifiedColumns[':p' . $index++]  = '`MNorthSouthFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL)) {
            $modifiedColumns[':p' . $index++]  = '`MLongDegFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL)) {
            $modifiedColumns[':p' . $index++]  = '`MLongMinFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL)) {
            $modifiedColumns[':p' . $index++]  = '`MEastWestFill`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL2)) {
            $modifiedColumns[':p' . $index++]  = '`MLatDegFill2`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL2)) {
            $modifiedColumns[':p' . $index++]  = '`MLatMinFill2`';
        }
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL2)) {
            $modifiedColumns[':p' . $index++]  = '`MNorthSouthFill2`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL2)) {
            $modifiedColumns[':p' . $index++]  = '`MLongDegFill2`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL2)) {
            $modifiedColumns[':p' . $index++]  = '`MLongMinFill2`';
        }
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL2)) {
            $modifiedColumns[':p' . $index++]  = '`MEastWestFill2`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL3)) {
            $modifiedColumns[':p' . $index++]  = '`MLatDegFill3`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL3)) {
            $modifiedColumns[':p' . $index++]  = '`MLatMinFill3`';
        }
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL3)) {
            $modifiedColumns[':p' . $index++]  = '`MNorthSouthFill3`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL3)) {
            $modifiedColumns[':p' . $index++]  = '`MLongDegFill3`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL3)) {
            $modifiedColumns[':p' . $index++]  = '`MLongMinFill3`';
        }
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL3)) {
            $modifiedColumns[':p' . $index++]  = '`MEastWestFill3`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL4)) {
            $modifiedColumns[':p' . $index++]  = '`MLatDegFill4`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL4)) {
            $modifiedColumns[':p' . $index++]  = '`MLatMinFill4`';
        }
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL4)) {
            $modifiedColumns[':p' . $index++]  = '`MNorthSouthFill4`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL4)) {
            $modifiedColumns[':p' . $index++]  = '`MLongDegFill4`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL4)) {
            $modifiedColumns[':p' . $index++]  = '`MLongMinFill4`';
        }
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL4)) {
            $modifiedColumns[':p' . $index++]  = '`MEastWestFill4`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL5)) {
            $modifiedColumns[':p' . $index++]  = '`MLatDegFill5`';
        }
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL5)) {
            $modifiedColumns[':p' . $index++]  = '`MLatMinFill5`';
        }
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL5)) {
            $modifiedColumns[':p' . $index++]  = '`MNorthSouthFill5`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL5)) {
            $modifiedColumns[':p' . $index++]  = '`MLongDegFill5`';
        }
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL5)) {
            $modifiedColumns[':p' . $index++]  = '`MLongMinFill5`';
        }
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL5)) {
            $modifiedColumns[':p' . $index++]  = '`MEastWestFill5`';
        }
        if ($this->isColumnModified(CountrefPeer::NORTHERNLATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLatitude`';
        }
        if ($this->isColumnModified(CountrefPeer::NORTHERNLATITUDENS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthernLatitudeNS`';
        }
        if ($this->isColumnModified(CountrefPeer::SOUTHERNLATITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLatitude`';
        }
        if ($this->isColumnModified(CountrefPeer::SOUTHERNLATITUDENS)) {
            $modifiedColumns[':p' . $index++]  = '`SouthernLatitudeNS`';
        }
        if ($this->isColumnModified(CountrefPeer::WESTERNLONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLongitude`';
        }
        if ($this->isColumnModified(CountrefPeer::WESTERNLONGITUDEEW)) {
            $modifiedColumns[':p' . $index++]  = '`WesternLongitudeEW`';
        }
        if ($this->isColumnModified(CountrefPeer::EASTERNLONGITUDE)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLongitude`';
        }
        if ($this->isColumnModified(CountrefPeer::EASTERNLONGITUDEEW)) {
            $modifiedColumns[':p' . $index++]  = '`EasternLongitudeEW`';
        }
        if ($this->isColumnModified(CountrefPeer::CENTERLAT)) {
            $modifiedColumns[':p' . $index++]  = '`CenterLat`';
        }
        if ($this->isColumnModified(CountrefPeer::CENTERLONG)) {
            $modifiedColumns[':p' . $index++]  = '`CenterLong`';
        }
        if ($this->isColumnModified(CountrefPeer::OTHERLANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`OtherLanguage`';
        }
        if ($this->isColumnModified(CountrefPeer::GEOGRAPHY)) {
            $modifiedColumns[':p' . $index++]  = '`Geography`';
        }
        if ($this->isColumnModified(CountrefPeer::GEOGRAPHYREF)) {
            $modifiedColumns[':p' . $index++]  = '`GeographyRef`';
        }
        if ($this->isColumnModified(CountrefPeer::HYDROGRAPHY)) {
            $modifiedColumns[':p' . $index++]  = '`Hydrography`';
        }
        if ($this->isColumnModified(CountrefPeer::HYDROGRAPHYREF)) {
            $modifiedColumns[':p' . $index++]  = '`HydrographyRef`';
        }
        if ($this->isColumnModified(CountrefPeer::COMMENTFRESH)) {
            $modifiedColumns[':p' . $index++]  = '`CommentFresh`';
        }
        if ($this->isColumnModified(CountrefPeer::REFFRESH1)) {
            $modifiedColumns[':p' . $index++]  = '`RefFresh1`';
        }
        if ($this->isColumnModified(CountrefPeer::REFFRESH2)) {
            $modifiedColumns[':p' . $index++]  = '`RefFresh2`';
        }
        if ($this->isColumnModified(CountrefPeer::REFFRESH3)) {
            $modifiedColumns[':p' . $index++]  = '`RefFresh3`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHPRIMARY)) {
            $modifiedColumns[':p' . $index++]  = '`FreshPrimary`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHSECONDARY)) {
            $modifiedColumns[':p' . $index++]  = '`FreshSecondary`';
        }
        if ($this->isColumnModified(CountrefPeer::FRESHINTO)) {
            $modifiedColumns[':p' . $index++]  = '`FreshInto`';
        }
        if ($this->isColumnModified(CountrefPeer::INFISHERIESREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`InFisheriesReported`';
        }
        if ($this->isColumnModified(CountrefPeer::INFISHERIESPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`InFisheriesPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::INAQUAREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`InAquaReported`';
        }
        if ($this->isColumnModified(CountrefPeer::INAQUAPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`InAquaPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::EXPORTREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`ExportReported`';
        }
        if ($this->isColumnModified(CountrefPeer::EXPORTPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`ExportPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::SPORTREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`SportReported`';
        }
        if ($this->isColumnModified(CountrefPeer::SPORTPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`SportPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::ENDEMICREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`EndemicReported`';
        }
        if ($this->isColumnModified(CountrefPeer::ENDEMICPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`EndemicPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::THREATENED)) {
            $modifiedColumns[':p' . $index++]  = '`Threatened`';
        }
        if ($this->isColumnModified(CountrefPeer::PROTECTEDREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`ProtectedReported`';
        }
        if ($this->isColumnModified(CountrefPeer::PROTECTEDPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`ProtectedPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::ACP)) {
            $modifiedColumns[':p' . $index++]  = '`ACP`';
        }
        if ($this->isColumnModified(CountrefPeer::DEVELOPED)) {
            $modifiedColumns[':p' . $index++]  = '`Developed`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINE)) {
            $modifiedColumns[':p' . $index++]  = '`Marine`';
        }
        if ($this->isColumnModified(CountrefPeer::BRACKISH)) {
            $modifiedColumns[':p' . $index++]  = '`Brackish`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEINTO)) {
            $modifiedColumns[':p' . $index++]  = '`MarineInto`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEINFISHERIESREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineInFisheriesReported`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEINFISHERIESPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MarineInFisheriesPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEINAQUAREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineInAquaReported`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEINAQUAPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MarineInAquaPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEEXPORTREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineExportReported`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEEXPORTPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MarineExportPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINESPORTREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineSportReported`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINESPORTPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MarineSportPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEENDEMICREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineEndemicReported`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEENDEMICPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MarineEndemicPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINETHREATENED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineThreatened`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEPROTECTEDREPORTED)) {
            $modifiedColumns[':p' . $index++]  = '`MarineProtectedReported`';
        }
        if ($this->isColumnModified(CountrefPeer::MARINEPROTECTEDPOTENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`MarineProtectedPotential`';
        }
        if ($this->isColumnModified(CountrefPeer::NATFISHDB)) {
            $modifiedColumns[':p' . $index++]  = '`NatFishDB`';
        }
        if ($this->isColumnModified(CountrefPeer::NATFISHDB2)) {
            $modifiedColumns[':p' . $index++]  = '`NatFishDB2`';
        }
        if ($this->isColumnModified(CountrefPeer::FACTBOOK)) {
            $modifiedColumns[':p' . $index++]  = '`Factbook`';
        }
        if ($this->isColumnModified(CountrefPeer::NATFISHAUT)) {
            $modifiedColumns[':p' . $index++]  = '`NatFishAut`';
        }
        if ($this->isColumnModified(CountrefPeer::TRADENAMES)) {
            $modifiedColumns[':p' . $index++]  = '`TradeNames`';
        }
        if ($this->isColumnModified(CountrefPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(CountrefPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(CountrefPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(CountrefPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(CountrefPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(CountrefPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(CountrefPeer::GREEK_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`Greek_original`';
        }
        if ($this->isColumnModified(CountrefPeer::GREEK)) {
            $modifiedColumns[':p' . $index++]  = '`Greek`';
        }
        if ($this->isColumnModified(CountrefPeer::RUSSIAN_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`RUSSIAN_original`';
        }
        if ($this->isColumnModified(CountrefPeer::RUSSIAN)) {
            $modifiedColumns[':p' . $index++]  = '`RUSSIAN`';
        }
        if ($this->isColumnModified(CountrefPeer::FRENCH)) {
            $modifiedColumns[':p' . $index++]  = '`FRENCH`';
        }
        if ($this->isColumnModified(CountrefPeer::SPANISH)) {
            $modifiedColumns[':p' . $index++]  = '`SPANISH`';
        }
        if ($this->isColumnModified(CountrefPeer::GERMAN)) {
            $modifiedColumns[':p' . $index++]  = '`GERMAN`';
        }
        if ($this->isColumnModified(CountrefPeer::DUTCH)) {
            $modifiedColumns[':p' . $index++]  = '`DUTCH`';
        }
        if ($this->isColumnModified(CountrefPeer::PORTUGUESE)) {
            $modifiedColumns[':p' . $index++]  = '`PORTUGUESE`';
        }
        if ($this->isColumnModified(CountrefPeer::ITALIAN)) {
            $modifiedColumns[':p' . $index++]  = '`ITALIAN`';
        }
        if ($this->isColumnModified(CountrefPeer::SWEDISH)) {
            $modifiedColumns[':p' . $index++]  = '`SWEDISH`';
        }
        if ($this->isColumnModified(CountrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `countref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`PAESE`':
                        $stmt->bindValue($identifier, $this->paese, PDO::PARAM_STR);
                        break;
                    case '`Note`':
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`ABB`':
                        $stmt->bindValue($identifier, $this->abb, PDO::PARAM_STR);
                        break;
                    case '`ISO_Code`':
                        $stmt->bindValue($identifier, $this->iso_code, PDO::PARAM_STR);
                        break;
                    case '`ISO3Alpha`':
                        $stmt->bindValue($identifier, $this->iso3alpha, PDO::PARAM_STR);
                        break;
                    case '`ISO2Alpha`':
                        $stmt->bindValue($identifier, $this->iso2alpha, PDO::PARAM_STR);
                        break;
                    case '`SAUP_Code`':
                        $stmt->bindValue($identifier, $this->saup_code, PDO::PARAM_INT);
                        break;
                    case '`Used`':
                        $stmt->bindValue($identifier, $this->used, PDO::PARAM_INT);
                        break;
                    case '`Capital`':
                        $stmt->bindValue($identifier, $this->capital, PDO::PARAM_STR);
                        break;
                    case '`LatDeg`':
                        $stmt->bindValue($identifier, $this->latdeg, PDO::PARAM_INT);
                        break;
                    case '`LatMin`':
                        $stmt->bindValue($identifier, $this->latmin, PDO::PARAM_STR);
                        break;
                    case '`NorthSouth`':
                        $stmt->bindValue($identifier, $this->northsouth, PDO::PARAM_STR);
                        break;
                    case '`LongDeg`':
                        $stmt->bindValue($identifier, $this->longdeg, PDO::PARAM_INT);
                        break;
                    case '`LongMin`':
                        $stmt->bindValue($identifier, $this->longmin, PDO::PARAM_STR);
                        break;
                    case '`EastWest`':
                        $stmt->bindValue($identifier, $this->eastwest, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`PolarBoreal`':
                        $stmt->bindValue($identifier, $this->polarboreal, PDO::PARAM_INT);
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
                    case '`Landlocked`':
                        $stmt->bindValue($identifier, $this->landlocked, PDO::PARAM_INT);
                        break;
                    case '`GeographicArea`':
                        $stmt->bindValue($identifier, $this->geographicarea, PDO::PARAM_STR);
                        break;
                    case '`Region`':
                        $stmt->bindValue($identifier, $this->region, PDO::PARAM_STR);
                        break;
                    case '`Continent`':
                        $stmt->bindValue($identifier, $this->continent, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeInland`':
                        $stmt->bindValue($identifier, $this->areacodeinland, PDO::PARAM_INT);
                        break;
                    case '`FAOAreaInland`':
                        $stmt->bindValue($identifier, $this->faoareainland, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeMarineI`':
                        $stmt->bindValue($identifier, $this->areacodemarinei, PDO::PARAM_INT);
                        break;
                    case '`FAOAreaMarineI`':
                        $stmt->bindValue($identifier, $this->faoareamarinei, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeMarineII`':
                        $stmt->bindValue($identifier, $this->areacodemarineii, PDO::PARAM_INT);
                        break;
                    case '`FAOAreaMarineII`':
                        $stmt->bindValue($identifier, $this->faoareamarineii, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeMarineIII`':
                        $stmt->bindValue($identifier, $this->areacodemarineiii, PDO::PARAM_INT);
                        break;
                    case '`FAOAreaMarineIII`':
                        $stmt->bindValue($identifier, $this->faoareamarineiii, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeMarineIV`':
                        $stmt->bindValue($identifier, $this->areacodemarineiv, PDO::PARAM_INT);
                        break;
                    case '`FAOAreaMarineIV`':
                        $stmt->bindValue($identifier, $this->faoareamarineiv, PDO::PARAM_STR);
                        break;
                    case '`AreaCodeMarineV`':
                        $stmt->bindValue($identifier, $this->areacodemarinev, PDO::PARAM_INT);
                        break;
                    case '`FAOAreaMarineV`':
                        $stmt->bindValue($identifier, $this->faoareamarinev, PDO::PARAM_STR);
                        break;
                    case '`Population`':
                        $stmt->bindValue($identifier, $this->population, PDO::PARAM_INT);
                        break;
                    case '`PopulationYear`':
                        $stmt->bindValue($identifier, $this->populationyear, PDO::PARAM_INT);
                        break;
                    case '`PopulationRate`':
                        $stmt->bindValue($identifier, $this->populationrate, PDO::PARAM_STR);
                        break;
                    case '`PopulationRef`':
                        $stmt->bindValue($identifier, $this->populationref, PDO::PARAM_INT);
                        break;
                    case '`CoastalPopulation`':
                        $stmt->bindValue($identifier, $this->coastalpopulation, PDO::PARAM_INT);
                        break;
                    case '`CoastPopRef`':
                        $stmt->bindValue($identifier, $this->coastpopref, PDO::PARAM_INT);
                        break;
                    case '`Area`':
                        $stmt->bindValue($identifier, $this->area, PDO::PARAM_INT);
                        break;
                    case '`Coastline`':
                        $stmt->bindValue($identifier, $this->coastline, PDO::PARAM_INT);
                        break;
                    case '`CoastlineRef`':
                        $stmt->bindValue($identifier, $this->coastlineref, PDO::PARAM_INT);
                        break;
                    case '`ShelfArea`':
                        $stmt->bindValue($identifier, $this->shelfarea, PDO::PARAM_STR);
                        break;
                    case '`ShelfRef`':
                        $stmt->bindValue($identifier, $this->shelfref, PDO::PARAM_INT);
                        break;
                    case '`EECarea`':
                        $stmt->bindValue($identifier, $this->eecarea, PDO::PARAM_STR);
                        break;
                    case '`EEZRef`':
                        $stmt->bindValue($identifier, $this->eezref, PDO::PARAM_INT);
                        break;
                    case '`Language`':
                        $stmt->bindValue($identifier, $this->language, PDO::PARAM_STR);
                        break;
                    case '`Currency`':
                        $stmt->bindValue($identifier, $this->currency, PDO::PARAM_STR);
                        break;
                    case '`MarineCount`':
                        $stmt->bindValue($identifier, $this->marinecount, PDO::PARAM_INT);
                        break;
                    case '`MarineFamCount`':
                        $stmt->bindValue($identifier, $this->marinefamcount, PDO::PARAM_INT);
                        break;
                    case '`CompleteMarine`':
                        $stmt->bindValue($identifier, $this->completemarine, PDO::PARAM_INT);
                        break;
                    case '`MarineLit`':
                        $stmt->bindValue($identifier, $this->marinelit, PDO::PARAM_INT);
                        break;
                    case '`MarineFamLit`':
                        $stmt->bindValue($identifier, $this->marinefamlit, PDO::PARAM_INT);
                        break;
                    case '`CheckMarineRef`':
                        $stmt->bindValue($identifier, $this->checkmarineref, PDO::PARAM_INT);
                        break;
                    case '`MarineFlag`':
                        $stmt->bindValue($identifier, $this->marineflag, PDO::PARAM_INT);
                        break;
                    case '`FreshwaterCount`':
                        $stmt->bindValue($identifier, $this->freshwatercount, PDO::PARAM_INT);
                        break;
                    case '`FreshFamCount`':
                        $stmt->bindValue($identifier, $this->freshfamcount, PDO::PARAM_INT);
                        break;
                    case '`CompleteFresh`':
                        $stmt->bindValue($identifier, $this->completefresh, PDO::PARAM_INT);
                        break;
                    case '`FreshwaterLit`':
                        $stmt->bindValue($identifier, $this->freshwaterlit, PDO::PARAM_INT);
                        break;
                    case '`FreshFamLit`':
                        $stmt->bindValue($identifier, $this->freshfamlit, PDO::PARAM_INT);
                        break;
                    case '`CheckFreshRef`':
                        $stmt->bindValue($identifier, $this->checkfreshref, PDO::PARAM_INT);
                        break;
                    case '`FreshFlag`':
                        $stmt->bindValue($identifier, $this->freshflag, PDO::PARAM_INT);
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
                    case '`LastUpdate`':
                        $stmt->bindValue($identifier, $this->lastupdate, PDO::PARAM_STR);
                        break;
                    case '`MorphCountFresh`':
                        $stmt->bindValue($identifier, $this->morphcountfresh, PDO::PARAM_INT);
                        break;
                    case '`OccurCountFresh`':
                        $stmt->bindValue($identifier, $this->occurcountfresh, PDO::PARAM_INT);
                        break;
                    case '`PicCountFresh`':
                        $stmt->bindValue($identifier, $this->piccountfresh, PDO::PARAM_INT);
                        break;
                    case '`GrowthCountFresh`':
                        $stmt->bindValue($identifier, $this->growthcountfresh, PDO::PARAM_INT);
                        break;
                    case '`FoodCountFresh`':
                        $stmt->bindValue($identifier, $this->foodcountfresh, PDO::PARAM_INT);
                        break;
                    case '`DietCountFresh`':
                        $stmt->bindValue($identifier, $this->dietcountfresh, PDO::PARAM_INT);
                        break;
                    case '`ReproductionCountFresh`':
                        $stmt->bindValue($identifier, $this->reproductioncountfresh, PDO::PARAM_INT);
                        break;
                    case '`SpawningCountFresh`':
                        $stmt->bindValue($identifier, $this->spawningcountfresh, PDO::PARAM_INT);
                        break;
                    case '`MorphCountMarine`':
                        $stmt->bindValue($identifier, $this->morphcountmarine, PDO::PARAM_INT);
                        break;
                    case '`OccurCountMarine`':
                        $stmt->bindValue($identifier, $this->occurcountmarine, PDO::PARAM_INT);
                        break;
                    case '`PicCountMarine`':
                        $stmt->bindValue($identifier, $this->piccountmarine, PDO::PARAM_INT);
                        break;
                    case '`GrowthCountMarine`':
                        $stmt->bindValue($identifier, $this->growthcountmarine, PDO::PARAM_INT);
                        break;
                    case '`FoodCountMarine`':
                        $stmt->bindValue($identifier, $this->foodcountmarine, PDO::PARAM_INT);
                        break;
                    case '`DietCountMarine`':
                        $stmt->bindValue($identifier, $this->dietcountmarine, PDO::PARAM_INT);
                        break;
                    case '`ReproductionCountMarine`':
                        $stmt->bindValue($identifier, $this->reproductioncountmarine, PDO::PARAM_INT);
                        break;
                    case '`SpawningCountMarine`':
                        $stmt->bindValue($identifier, $this->spawningcountmarine, PDO::PARAM_INT);
                        break;
                    case '`LatDegFill`':
                        $stmt->bindValue($identifier, $this->latdegfill, PDO::PARAM_INT);
                        break;
                    case '`LatMinFill`':
                        $stmt->bindValue($identifier, $this->latminfill, PDO::PARAM_STR);
                        break;
                    case '`NorthSouthFill`':
                        $stmt->bindValue($identifier, $this->northsouthfill, PDO::PARAM_STR);
                        break;
                    case '`LongDegFill`':
                        $stmt->bindValue($identifier, $this->longdegfill, PDO::PARAM_INT);
                        break;
                    case '`LongMinFill`':
                        $stmt->bindValue($identifier, $this->longminfill, PDO::PARAM_STR);
                        break;
                    case '`EastWestFill`':
                        $stmt->bindValue($identifier, $this->eastwestfill, PDO::PARAM_STR);
                        break;
                    case '`MLatDegFill`':
                        $stmt->bindValue($identifier, $this->mlatdegfill, PDO::PARAM_INT);
                        break;
                    case '`MLatMinFill`':
                        $stmt->bindValue($identifier, $this->mlatminfill, PDO::PARAM_STR);
                        break;
                    case '`MNorthSouthFill`':
                        $stmt->bindValue($identifier, $this->mnorthsouthfill, PDO::PARAM_STR);
                        break;
                    case '`MLongDegFill`':
                        $stmt->bindValue($identifier, $this->mlongdegfill, PDO::PARAM_INT);
                        break;
                    case '`MLongMinFill`':
                        $stmt->bindValue($identifier, $this->mlongminfill, PDO::PARAM_STR);
                        break;
                    case '`MEastWestFill`':
                        $stmt->bindValue($identifier, $this->meastwestfill, PDO::PARAM_STR);
                        break;
                    case '`MLatDegFill2`':
                        $stmt->bindValue($identifier, $this->mlatdegfill2, PDO::PARAM_INT);
                        break;
                    case '`MLatMinFill2`':
                        $stmt->bindValue($identifier, $this->mlatminfill2, PDO::PARAM_STR);
                        break;
                    case '`MNorthSouthFill2`':
                        $stmt->bindValue($identifier, $this->mnorthsouthfill2, PDO::PARAM_STR);
                        break;
                    case '`MLongDegFill2`':
                        $stmt->bindValue($identifier, $this->mlongdegfill2, PDO::PARAM_INT);
                        break;
                    case '`MLongMinFill2`':
                        $stmt->bindValue($identifier, $this->mlongminfill2, PDO::PARAM_STR);
                        break;
                    case '`MEastWestFill2`':
                        $stmt->bindValue($identifier, $this->meastwestfill2, PDO::PARAM_STR);
                        break;
                    case '`MLatDegFill3`':
                        $stmt->bindValue($identifier, $this->mlatdegfill3, PDO::PARAM_INT);
                        break;
                    case '`MLatMinFill3`':
                        $stmt->bindValue($identifier, $this->mlatminfill3, PDO::PARAM_STR);
                        break;
                    case '`MNorthSouthFill3`':
                        $stmt->bindValue($identifier, $this->mnorthsouthfill3, PDO::PARAM_STR);
                        break;
                    case '`MLongDegFill3`':
                        $stmt->bindValue($identifier, $this->mlongdegfill3, PDO::PARAM_INT);
                        break;
                    case '`MLongMinFill3`':
                        $stmt->bindValue($identifier, $this->mlongminfill3, PDO::PARAM_STR);
                        break;
                    case '`MEastWestFill3`':
                        $stmt->bindValue($identifier, $this->meastwestfill3, PDO::PARAM_STR);
                        break;
                    case '`MLatDegFill4`':
                        $stmt->bindValue($identifier, $this->mlatdegfill4, PDO::PARAM_INT);
                        break;
                    case '`MLatMinFill4`':
                        $stmt->bindValue($identifier, $this->mlatminfill4, PDO::PARAM_STR);
                        break;
                    case '`MNorthSouthFill4`':
                        $stmt->bindValue($identifier, $this->mnorthsouthfill4, PDO::PARAM_STR);
                        break;
                    case '`MLongDegFill4`':
                        $stmt->bindValue($identifier, $this->mlongdegfill4, PDO::PARAM_INT);
                        break;
                    case '`MLongMinFill4`':
                        $stmt->bindValue($identifier, $this->mlongminfill4, PDO::PARAM_STR);
                        break;
                    case '`MEastWestFill4`':
                        $stmt->bindValue($identifier, $this->meastwestfill4, PDO::PARAM_STR);
                        break;
                    case '`MLatDegFill5`':
                        $stmt->bindValue($identifier, $this->mlatdegfill5, PDO::PARAM_INT);
                        break;
                    case '`MLatMinFill5`':
                        $stmt->bindValue($identifier, $this->mlatminfill5, PDO::PARAM_STR);
                        break;
                    case '`MNorthSouthFill5`':
                        $stmt->bindValue($identifier, $this->mnorthsouthfill5, PDO::PARAM_STR);
                        break;
                    case '`MLongDegFill5`':
                        $stmt->bindValue($identifier, $this->mlongdegfill5, PDO::PARAM_INT);
                        break;
                    case '`MLongMinFill5`':
                        $stmt->bindValue($identifier, $this->mlongminfill5, PDO::PARAM_STR);
                        break;
                    case '`MEastWestFill5`':
                        $stmt->bindValue($identifier, $this->meastwestfill5, PDO::PARAM_STR);
                        break;
                    case '`NorthernLatitude`':
                        $stmt->bindValue($identifier, $this->northernlatitude, PDO::PARAM_INT);
                        break;
                    case '`NorthernLatitudeNS`':
                        $stmt->bindValue($identifier, $this->northernlatitudens, PDO::PARAM_STR);
                        break;
                    case '`SouthernLatitude`':
                        $stmt->bindValue($identifier, $this->southernlatitude, PDO::PARAM_INT);
                        break;
                    case '`SouthernLatitudeNS`':
                        $stmt->bindValue($identifier, $this->southernlatitudens, PDO::PARAM_STR);
                        break;
                    case '`WesternLongitude`':
                        $stmt->bindValue($identifier, $this->westernlongitude, PDO::PARAM_INT);
                        break;
                    case '`WesternLongitudeEW`':
                        $stmt->bindValue($identifier, $this->westernlongitudeew, PDO::PARAM_STR);
                        break;
                    case '`EasternLongitude`':
                        $stmt->bindValue($identifier, $this->easternlongitude, PDO::PARAM_INT);
                        break;
                    case '`EasternLongitudeEW`':
                        $stmt->bindValue($identifier, $this->easternlongitudeew, PDO::PARAM_STR);
                        break;
                    case '`CenterLat`':
                        $stmt->bindValue($identifier, $this->centerlat, PDO::PARAM_STR);
                        break;
                    case '`CenterLong`':
                        $stmt->bindValue($identifier, $this->centerlong, PDO::PARAM_STR);
                        break;
                    case '`OtherLanguage`':
                        $stmt->bindValue($identifier, $this->otherlanguage, PDO::PARAM_STR);
                        break;
                    case '`Geography`':
                        $stmt->bindValue($identifier, $this->geography, PDO::PARAM_STR);
                        break;
                    case '`GeographyRef`':
                        $stmt->bindValue($identifier, $this->geographyref, PDO::PARAM_INT);
                        break;
                    case '`Hydrography`':
                        $stmt->bindValue($identifier, $this->hydrography, PDO::PARAM_STR);
                        break;
                    case '`HydrographyRef`':
                        $stmt->bindValue($identifier, $this->hydrographyref, PDO::PARAM_INT);
                        break;
                    case '`CommentFresh`':
                        $stmt->bindValue($identifier, $this->commentfresh, PDO::PARAM_STR);
                        break;
                    case '`RefFresh1`':
                        $stmt->bindValue($identifier, $this->reffresh1, PDO::PARAM_INT);
                        break;
                    case '`RefFresh2`':
                        $stmt->bindValue($identifier, $this->reffresh2, PDO::PARAM_INT);
                        break;
                    case '`RefFresh3`':
                        $stmt->bindValue($identifier, $this->reffresh3, PDO::PARAM_INT);
                        break;
                    case '`FreshPrimary`':
                        $stmt->bindValue($identifier, $this->freshprimary, PDO::PARAM_INT);
                        break;
                    case '`FreshSecondary`':
                        $stmt->bindValue($identifier, $this->freshsecondary, PDO::PARAM_INT);
                        break;
                    case '`FreshInto`':
                        $stmt->bindValue($identifier, $this->freshinto, PDO::PARAM_INT);
                        break;
                    case '`InFisheriesReported`':
                        $stmt->bindValue($identifier, $this->infisheriesreported, PDO::PARAM_INT);
                        break;
                    case '`InFisheriesPotential`':
                        $stmt->bindValue($identifier, $this->infisheriespotential, PDO::PARAM_INT);
                        break;
                    case '`InAquaReported`':
                        $stmt->bindValue($identifier, $this->inaquareported, PDO::PARAM_INT);
                        break;
                    case '`InAquaPotential`':
                        $stmt->bindValue($identifier, $this->inaquapotential, PDO::PARAM_INT);
                        break;
                    case '`ExportReported`':
                        $stmt->bindValue($identifier, $this->exportreported, PDO::PARAM_INT);
                        break;
                    case '`ExportPotential`':
                        $stmt->bindValue($identifier, $this->exportpotential, PDO::PARAM_INT);
                        break;
                    case '`SportReported`':
                        $stmt->bindValue($identifier, $this->sportreported, PDO::PARAM_INT);
                        break;
                    case '`SportPotential`':
                        $stmt->bindValue($identifier, $this->sportpotential, PDO::PARAM_INT);
                        break;
                    case '`EndemicReported`':
                        $stmt->bindValue($identifier, $this->endemicreported, PDO::PARAM_INT);
                        break;
                    case '`EndemicPotential`':
                        $stmt->bindValue($identifier, $this->endemicpotential, PDO::PARAM_INT);
                        break;
                    case '`Threatened`':
                        $stmt->bindValue($identifier, $this->threatened, PDO::PARAM_INT);
                        break;
                    case '`ProtectedReported`':
                        $stmt->bindValue($identifier, $this->protectedreported, PDO::PARAM_STR);
                        break;
                    case '`ProtectedPotential`':
                        $stmt->bindValue($identifier, $this->protectedpotential, PDO::PARAM_INT);
                        break;
                    case '`ACP`':
                        $stmt->bindValue($identifier, $this->acp, PDO::PARAM_INT);
                        break;
                    case '`Developed`':
                        $stmt->bindValue($identifier, $this->developed, PDO::PARAM_INT);
                        break;
                    case '`Marine`':
                        $stmt->bindValue($identifier, $this->marine, PDO::PARAM_INT);
                        break;
                    case '`Brackish`':
                        $stmt->bindValue($identifier, $this->brackish, PDO::PARAM_INT);
                        break;
                    case '`MarineInto`':
                        $stmt->bindValue($identifier, $this->marineinto, PDO::PARAM_INT);
                        break;
                    case '`MarineInFisheriesReported`':
                        $stmt->bindValue($identifier, $this->marineinfisheriesreported, PDO::PARAM_INT);
                        break;
                    case '`MarineInFisheriesPotential`':
                        $stmt->bindValue($identifier, $this->marineinfisheriespotential, PDO::PARAM_INT);
                        break;
                    case '`MarineInAquaReported`':
                        $stmt->bindValue($identifier, $this->marineinaquareported, PDO::PARAM_INT);
                        break;
                    case '`MarineInAquaPotential`':
                        $stmt->bindValue($identifier, $this->marineinaquapotential, PDO::PARAM_INT);
                        break;
                    case '`MarineExportReported`':
                        $stmt->bindValue($identifier, $this->marineexportreported, PDO::PARAM_INT);
                        break;
                    case '`MarineExportPotential`':
                        $stmt->bindValue($identifier, $this->marineexportpotential, PDO::PARAM_INT);
                        break;
                    case '`MarineSportReported`':
                        $stmt->bindValue($identifier, $this->marinesportreported, PDO::PARAM_INT);
                        break;
                    case '`MarineSportPotential`':
                        $stmt->bindValue($identifier, $this->marinesportpotential, PDO::PARAM_INT);
                        break;
                    case '`MarineEndemicReported`':
                        $stmt->bindValue($identifier, $this->marineendemicreported, PDO::PARAM_INT);
                        break;
                    case '`MarineEndemicPotential`':
                        $stmt->bindValue($identifier, $this->marineendemicpotential, PDO::PARAM_INT);
                        break;
                    case '`MarineThreatened`':
                        $stmt->bindValue($identifier, $this->marinethreatened, PDO::PARAM_INT);
                        break;
                    case '`MarineProtectedReported`':
                        $stmt->bindValue($identifier, $this->marineprotectedreported, PDO::PARAM_STR);
                        break;
                    case '`MarineProtectedPotential`':
                        $stmt->bindValue($identifier, $this->marineprotectedpotential, PDO::PARAM_INT);
                        break;
                    case '`NatFishDB`':
                        $stmt->bindValue($identifier, $this->natfishdb, PDO::PARAM_STR);
                        break;
                    case '`NatFishDB2`':
                        $stmt->bindValue($identifier, $this->natfishdb2, PDO::PARAM_STR);
                        break;
                    case '`Factbook`':
                        $stmt->bindValue($identifier, $this->factbook, PDO::PARAM_STR);
                        break;
                    case '`NatFishAut`':
                        $stmt->bindValue($identifier, $this->natfishaut, PDO::PARAM_STR);
                        break;
                    case '`TradeNames`':
                        $stmt->bindValue($identifier, $this->tradenames, PDO::PARAM_STR);
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
                    case '`Greek_original`':
                        $stmt->bindValue($identifier, $this->greek_original, PDO::PARAM_STR);
                        break;
                    case '`Greek`':
                        $stmt->bindValue($identifier, $this->greek, PDO::PARAM_STR);
                        break;
                    case '`RUSSIAN_original`':
                        $stmt->bindValue($identifier, $this->russian_original, PDO::PARAM_STR);
                        break;
                    case '`RUSSIAN`':
                        $stmt->bindValue($identifier, $this->russian, PDO::PARAM_STR);
                        break;
                    case '`FRENCH`':
                        $stmt->bindValue($identifier, $this->french, PDO::PARAM_STR);
                        break;
                    case '`SPANISH`':
                        $stmt->bindValue($identifier, $this->spanish, PDO::PARAM_STR);
                        break;
                    case '`GERMAN`':
                        $stmt->bindValue($identifier, $this->german, PDO::PARAM_STR);
                        break;
                    case '`DUTCH`':
                        $stmt->bindValue($identifier, $this->dutch, PDO::PARAM_STR);
                        break;
                    case '`PORTUGUESE`':
                        $stmt->bindValue($identifier, $this->portuguese, PDO::PARAM_STR);
                        break;
                    case '`ITALIAN`':
                        $stmt->bindValue($identifier, $this->italian, PDO::PARAM_STR);
                        break;
                    case '`SWEDISH`':
                        $stmt->bindValue($identifier, $this->swedish, PDO::PARAM_STR);
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


            if (($retval = CountrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CountrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPaese();
                break;
            case 1:
                return $this->getNote();
                break;
            case 2:
                return $this->getCCode();
                break;
            case 3:
                return $this->getAbb();
                break;
            case 4:
                return $this->getIsoCode();
                break;
            case 5:
                return $this->getIso3alpha();
                break;
            case 6:
                return $this->getIso2alpha();
                break;
            case 7:
                return $this->getSaupCode();
                break;
            case 8:
                return $this->getUsed();
                break;
            case 9:
                return $this->getCapital();
                break;
            case 10:
                return $this->getLatdeg();
                break;
            case 11:
                return $this->getLatmin();
                break;
            case 12:
                return $this->getNorthsouth();
                break;
            case 13:
                return $this->getLongdeg();
                break;
            case 14:
                return $this->getLongmin();
                break;
            case 15:
                return $this->getEastwest();
                break;
            case 16:
                return $this->getRemark();
                break;
            case 17:
                return $this->getPolarboreal();
                break;
            case 18:
                return $this->getTemperate();
                break;
            case 19:
                return $this->getSubtropical();
                break;
            case 20:
                return $this->getTropical();
                break;
            case 21:
                return $this->getLandlocked();
                break;
            case 22:
                return $this->getGeographicarea();
                break;
            case 23:
                return $this->getRegion();
                break;
            case 24:
                return $this->getContinent();
                break;
            case 25:
                return $this->getAreacodeinland();
                break;
            case 26:
                return $this->getFaoareainland();
                break;
            case 27:
                return $this->getAreacodemarinei();
                break;
            case 28:
                return $this->getFaoareamarinei();
                break;
            case 29:
                return $this->getAreacodemarineii();
                break;
            case 30:
                return $this->getFaoareamarineii();
                break;
            case 31:
                return $this->getAreacodemarineiii();
                break;
            case 32:
                return $this->getFaoareamarineiii();
                break;
            case 33:
                return $this->getAreacodemarineiv();
                break;
            case 34:
                return $this->getFaoareamarineiv();
                break;
            case 35:
                return $this->getAreacodemarinev();
                break;
            case 36:
                return $this->getFaoareamarinev();
                break;
            case 37:
                return $this->getPopulation();
                break;
            case 38:
                return $this->getPopulationyear();
                break;
            case 39:
                return $this->getPopulationrate();
                break;
            case 40:
                return $this->getPopulationref();
                break;
            case 41:
                return $this->getCoastalpopulation();
                break;
            case 42:
                return $this->getCoastpopref();
                break;
            case 43:
                return $this->getArea();
                break;
            case 44:
                return $this->getCoastline();
                break;
            case 45:
                return $this->getCoastlineref();
                break;
            case 46:
                return $this->getShelfarea();
                break;
            case 47:
                return $this->getShelfref();
                break;
            case 48:
                return $this->getEecarea();
                break;
            case 49:
                return $this->getEezref();
                break;
            case 50:
                return $this->getLanguage();
                break;
            case 51:
                return $this->getCurrency();
                break;
            case 52:
                return $this->getMarinecount();
                break;
            case 53:
                return $this->getMarinefamcount();
                break;
            case 54:
                return $this->getCompletemarine();
                break;
            case 55:
                return $this->getMarinelit();
                break;
            case 56:
                return $this->getMarinefamlit();
                break;
            case 57:
                return $this->getCheckmarineref();
                break;
            case 58:
                return $this->getMarineflag();
                break;
            case 59:
                return $this->getFreshwatercount();
                break;
            case 60:
                return $this->getFreshfamcount();
                break;
            case 61:
                return $this->getCompletefresh();
                break;
            case 62:
                return $this->getFreshwaterlit();
                break;
            case 63:
                return $this->getFreshfamlit();
                break;
            case 64:
                return $this->getCheckfreshref();
                break;
            case 65:
                return $this->getFreshflag();
                break;
            case 66:
                return $this->getTotalcount();
                break;
            case 67:
                return $this->getTotalfamcount();
                break;
            case 68:
                return $this->getTotalcomplete();
                break;
            case 69:
                return $this->getTotallit();
                break;
            case 70:
                return $this->getTotalfamlit();
                break;
            case 71:
                return $this->getTotalref();
                break;
            case 72:
                return $this->getLastupdate();
                break;
            case 73:
                return $this->getMorphcountfresh();
                break;
            case 74:
                return $this->getOccurcountfresh();
                break;
            case 75:
                return $this->getPiccountfresh();
                break;
            case 76:
                return $this->getGrowthcountfresh();
                break;
            case 77:
                return $this->getFoodcountfresh();
                break;
            case 78:
                return $this->getDietcountfresh();
                break;
            case 79:
                return $this->getReproductioncountfresh();
                break;
            case 80:
                return $this->getSpawningcountfresh();
                break;
            case 81:
                return $this->getMorphcountmarine();
                break;
            case 82:
                return $this->getOccurcountmarine();
                break;
            case 83:
                return $this->getPiccountmarine();
                break;
            case 84:
                return $this->getGrowthcountmarine();
                break;
            case 85:
                return $this->getFoodcountmarine();
                break;
            case 86:
                return $this->getDietcountmarine();
                break;
            case 87:
                return $this->getReproductioncountmarine();
                break;
            case 88:
                return $this->getSpawningcountmarine();
                break;
            case 89:
                return $this->getLatdegfill();
                break;
            case 90:
                return $this->getLatminfill();
                break;
            case 91:
                return $this->getNorthsouthfill();
                break;
            case 92:
                return $this->getLongdegfill();
                break;
            case 93:
                return $this->getLongminfill();
                break;
            case 94:
                return $this->getEastwestfill();
                break;
            case 95:
                return $this->getMlatdegfill();
                break;
            case 96:
                return $this->getMlatminfill();
                break;
            case 97:
                return $this->getMnorthsouthfill();
                break;
            case 98:
                return $this->getMlongdegfill();
                break;
            case 99:
                return $this->getMlongminfill();
                break;
            case 100:
                return $this->getMeastwestfill();
                break;
            case 101:
                return $this->getMlatdegfill2();
                break;
            case 102:
                return $this->getMlatminfill2();
                break;
            case 103:
                return $this->getMnorthsouthfill2();
                break;
            case 104:
                return $this->getMlongdegfill2();
                break;
            case 105:
                return $this->getMlongminfill2();
                break;
            case 106:
                return $this->getMeastwestfill2();
                break;
            case 107:
                return $this->getMlatdegfill3();
                break;
            case 108:
                return $this->getMlatminfill3();
                break;
            case 109:
                return $this->getMnorthsouthfill3();
                break;
            case 110:
                return $this->getMlongdegfill3();
                break;
            case 111:
                return $this->getMlongminfill3();
                break;
            case 112:
                return $this->getMeastwestfill3();
                break;
            case 113:
                return $this->getMlatdegfill4();
                break;
            case 114:
                return $this->getMlatminfill4();
                break;
            case 115:
                return $this->getMnorthsouthfill4();
                break;
            case 116:
                return $this->getMlongdegfill4();
                break;
            case 117:
                return $this->getMlongminfill4();
                break;
            case 118:
                return $this->getMeastwestfill4();
                break;
            case 119:
                return $this->getMlatdegfill5();
                break;
            case 120:
                return $this->getMlatminfill5();
                break;
            case 121:
                return $this->getMnorthsouthfill5();
                break;
            case 122:
                return $this->getMlongdegfill5();
                break;
            case 123:
                return $this->getMlongminfill5();
                break;
            case 124:
                return $this->getMeastwestfill5();
                break;
            case 125:
                return $this->getNorthernlatitude();
                break;
            case 126:
                return $this->getNorthernlatitudens();
                break;
            case 127:
                return $this->getSouthernlatitude();
                break;
            case 128:
                return $this->getSouthernlatitudens();
                break;
            case 129:
                return $this->getWesternlongitude();
                break;
            case 130:
                return $this->getWesternlongitudeew();
                break;
            case 131:
                return $this->getEasternlongitude();
                break;
            case 132:
                return $this->getEasternlongitudeew();
                break;
            case 133:
                return $this->getCenterlat();
                break;
            case 134:
                return $this->getCenterlong();
                break;
            case 135:
                return $this->getOtherlanguage();
                break;
            case 136:
                return $this->getGeography();
                break;
            case 137:
                return $this->getGeographyref();
                break;
            case 138:
                return $this->getHydrography();
                break;
            case 139:
                return $this->getHydrographyref();
                break;
            case 140:
                return $this->getCommentfresh();
                break;
            case 141:
                return $this->getReffresh1();
                break;
            case 142:
                return $this->getReffresh2();
                break;
            case 143:
                return $this->getReffresh3();
                break;
            case 144:
                return $this->getFreshprimary();
                break;
            case 145:
                return $this->getFreshsecondary();
                break;
            case 146:
                return $this->getFreshinto();
                break;
            case 147:
                return $this->getInfisheriesreported();
                break;
            case 148:
                return $this->getInfisheriespotential();
                break;
            case 149:
                return $this->getInaquareported();
                break;
            case 150:
                return $this->getInaquapotential();
                break;
            case 151:
                return $this->getExportreported();
                break;
            case 152:
                return $this->getExportpotential();
                break;
            case 153:
                return $this->getSportreported();
                break;
            case 154:
                return $this->getSportpotential();
                break;
            case 155:
                return $this->getEndemicreported();
                break;
            case 156:
                return $this->getEndemicpotential();
                break;
            case 157:
                return $this->getThreatened();
                break;
            case 158:
                return $this->getProtectedreported();
                break;
            case 159:
                return $this->getProtectedpotential();
                break;
            case 160:
                return $this->getAcp();
                break;
            case 161:
                return $this->getDeveloped();
                break;
            case 162:
                return $this->getMarine();
                break;
            case 163:
                return $this->getBrackish();
                break;
            case 164:
                return $this->getMarineinto();
                break;
            case 165:
                return $this->getMarineinfisheriesreported();
                break;
            case 166:
                return $this->getMarineinfisheriespotential();
                break;
            case 167:
                return $this->getMarineinaquareported();
                break;
            case 168:
                return $this->getMarineinaquapotential();
                break;
            case 169:
                return $this->getMarineexportreported();
                break;
            case 170:
                return $this->getMarineexportpotential();
                break;
            case 171:
                return $this->getMarinesportreported();
                break;
            case 172:
                return $this->getMarinesportpotential();
                break;
            case 173:
                return $this->getMarineendemicreported();
                break;
            case 174:
                return $this->getMarineendemicpotential();
                break;
            case 175:
                return $this->getMarinethreatened();
                break;
            case 176:
                return $this->getMarineprotectedreported();
                break;
            case 177:
                return $this->getMarineprotectedpotential();
                break;
            case 178:
                return $this->getNatfishdb();
                break;
            case 179:
                return $this->getNatfishdb2();
                break;
            case 180:
                return $this->getFactbook();
                break;
            case 181:
                return $this->getNatfishaut();
                break;
            case 182:
                return $this->getTradenames();
                break;
            case 183:
                return $this->getEntered();
                break;
            case 184:
                return $this->getDateentered();
                break;
            case 185:
                return $this->getModified();
                break;
            case 186:
                return $this->getDatemodified();
                break;
            case 187:
                return $this->getExpert();
                break;
            case 188:
                return $this->getDatechecked();
                break;
            case 189:
                return $this->getGreekOriginal();
                break;
            case 190:
                return $this->getGreek();
                break;
            case 191:
                return $this->getRussianOriginal();
                break;
            case 192:
                return $this->getRussian();
                break;
            case 193:
                return $this->getFrench();
                break;
            case 194:
                return $this->getSpanish();
                break;
            case 195:
                return $this->getGerman();
                break;
            case 196:
                return $this->getDutch();
                break;
            case 197:
                return $this->getPortuguese();
                break;
            case 198:
                return $this->getItalian();
                break;
            case 199:
                return $this->getSwedish();
                break;
            case 200:
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
        if (isset($alreadyDumpedObjects['Countref'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Countref'][$this->getPrimaryKey()] = true;
        $keys = CountrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPaese(),
            $keys[1] => $this->getNote(),
            $keys[2] => $this->getCCode(),
            $keys[3] => $this->getAbb(),
            $keys[4] => $this->getIsoCode(),
            $keys[5] => $this->getIso3alpha(),
            $keys[6] => $this->getIso2alpha(),
            $keys[7] => $this->getSaupCode(),
            $keys[8] => $this->getUsed(),
            $keys[9] => $this->getCapital(),
            $keys[10] => $this->getLatdeg(),
            $keys[11] => $this->getLatmin(),
            $keys[12] => $this->getNorthsouth(),
            $keys[13] => $this->getLongdeg(),
            $keys[14] => $this->getLongmin(),
            $keys[15] => $this->getEastwest(),
            $keys[16] => $this->getRemark(),
            $keys[17] => $this->getPolarboreal(),
            $keys[18] => $this->getTemperate(),
            $keys[19] => $this->getSubtropical(),
            $keys[20] => $this->getTropical(),
            $keys[21] => $this->getLandlocked(),
            $keys[22] => $this->getGeographicarea(),
            $keys[23] => $this->getRegion(),
            $keys[24] => $this->getContinent(),
            $keys[25] => $this->getAreacodeinland(),
            $keys[26] => $this->getFaoareainland(),
            $keys[27] => $this->getAreacodemarinei(),
            $keys[28] => $this->getFaoareamarinei(),
            $keys[29] => $this->getAreacodemarineii(),
            $keys[30] => $this->getFaoareamarineii(),
            $keys[31] => $this->getAreacodemarineiii(),
            $keys[32] => $this->getFaoareamarineiii(),
            $keys[33] => $this->getAreacodemarineiv(),
            $keys[34] => $this->getFaoareamarineiv(),
            $keys[35] => $this->getAreacodemarinev(),
            $keys[36] => $this->getFaoareamarinev(),
            $keys[37] => $this->getPopulation(),
            $keys[38] => $this->getPopulationyear(),
            $keys[39] => $this->getPopulationrate(),
            $keys[40] => $this->getPopulationref(),
            $keys[41] => $this->getCoastalpopulation(),
            $keys[42] => $this->getCoastpopref(),
            $keys[43] => $this->getArea(),
            $keys[44] => $this->getCoastline(),
            $keys[45] => $this->getCoastlineref(),
            $keys[46] => $this->getShelfarea(),
            $keys[47] => $this->getShelfref(),
            $keys[48] => $this->getEecarea(),
            $keys[49] => $this->getEezref(),
            $keys[50] => $this->getLanguage(),
            $keys[51] => $this->getCurrency(),
            $keys[52] => $this->getMarinecount(),
            $keys[53] => $this->getMarinefamcount(),
            $keys[54] => $this->getCompletemarine(),
            $keys[55] => $this->getMarinelit(),
            $keys[56] => $this->getMarinefamlit(),
            $keys[57] => $this->getCheckmarineref(),
            $keys[58] => $this->getMarineflag(),
            $keys[59] => $this->getFreshwatercount(),
            $keys[60] => $this->getFreshfamcount(),
            $keys[61] => $this->getCompletefresh(),
            $keys[62] => $this->getFreshwaterlit(),
            $keys[63] => $this->getFreshfamlit(),
            $keys[64] => $this->getCheckfreshref(),
            $keys[65] => $this->getFreshflag(),
            $keys[66] => $this->getTotalcount(),
            $keys[67] => $this->getTotalfamcount(),
            $keys[68] => $this->getTotalcomplete(),
            $keys[69] => $this->getTotallit(),
            $keys[70] => $this->getTotalfamlit(),
            $keys[71] => $this->getTotalref(),
            $keys[72] => $this->getLastupdate(),
            $keys[73] => $this->getMorphcountfresh(),
            $keys[74] => $this->getOccurcountfresh(),
            $keys[75] => $this->getPiccountfresh(),
            $keys[76] => $this->getGrowthcountfresh(),
            $keys[77] => $this->getFoodcountfresh(),
            $keys[78] => $this->getDietcountfresh(),
            $keys[79] => $this->getReproductioncountfresh(),
            $keys[80] => $this->getSpawningcountfresh(),
            $keys[81] => $this->getMorphcountmarine(),
            $keys[82] => $this->getOccurcountmarine(),
            $keys[83] => $this->getPiccountmarine(),
            $keys[84] => $this->getGrowthcountmarine(),
            $keys[85] => $this->getFoodcountmarine(),
            $keys[86] => $this->getDietcountmarine(),
            $keys[87] => $this->getReproductioncountmarine(),
            $keys[88] => $this->getSpawningcountmarine(),
            $keys[89] => $this->getLatdegfill(),
            $keys[90] => $this->getLatminfill(),
            $keys[91] => $this->getNorthsouthfill(),
            $keys[92] => $this->getLongdegfill(),
            $keys[93] => $this->getLongminfill(),
            $keys[94] => $this->getEastwestfill(),
            $keys[95] => $this->getMlatdegfill(),
            $keys[96] => $this->getMlatminfill(),
            $keys[97] => $this->getMnorthsouthfill(),
            $keys[98] => $this->getMlongdegfill(),
            $keys[99] => $this->getMlongminfill(),
            $keys[100] => $this->getMeastwestfill(),
            $keys[101] => $this->getMlatdegfill2(),
            $keys[102] => $this->getMlatminfill2(),
            $keys[103] => $this->getMnorthsouthfill2(),
            $keys[104] => $this->getMlongdegfill2(),
            $keys[105] => $this->getMlongminfill2(),
            $keys[106] => $this->getMeastwestfill2(),
            $keys[107] => $this->getMlatdegfill3(),
            $keys[108] => $this->getMlatminfill3(),
            $keys[109] => $this->getMnorthsouthfill3(),
            $keys[110] => $this->getMlongdegfill3(),
            $keys[111] => $this->getMlongminfill3(),
            $keys[112] => $this->getMeastwestfill3(),
            $keys[113] => $this->getMlatdegfill4(),
            $keys[114] => $this->getMlatminfill4(),
            $keys[115] => $this->getMnorthsouthfill4(),
            $keys[116] => $this->getMlongdegfill4(),
            $keys[117] => $this->getMlongminfill4(),
            $keys[118] => $this->getMeastwestfill4(),
            $keys[119] => $this->getMlatdegfill5(),
            $keys[120] => $this->getMlatminfill5(),
            $keys[121] => $this->getMnorthsouthfill5(),
            $keys[122] => $this->getMlongdegfill5(),
            $keys[123] => $this->getMlongminfill5(),
            $keys[124] => $this->getMeastwestfill5(),
            $keys[125] => $this->getNorthernlatitude(),
            $keys[126] => $this->getNorthernlatitudens(),
            $keys[127] => $this->getSouthernlatitude(),
            $keys[128] => $this->getSouthernlatitudens(),
            $keys[129] => $this->getWesternlongitude(),
            $keys[130] => $this->getWesternlongitudeew(),
            $keys[131] => $this->getEasternlongitude(),
            $keys[132] => $this->getEasternlongitudeew(),
            $keys[133] => $this->getCenterlat(),
            $keys[134] => $this->getCenterlong(),
            $keys[135] => $this->getOtherlanguage(),
            $keys[136] => $this->getGeography(),
            $keys[137] => $this->getGeographyref(),
            $keys[138] => $this->getHydrography(),
            $keys[139] => $this->getHydrographyref(),
            $keys[140] => $this->getCommentfresh(),
            $keys[141] => $this->getReffresh1(),
            $keys[142] => $this->getReffresh2(),
            $keys[143] => $this->getReffresh3(),
            $keys[144] => $this->getFreshprimary(),
            $keys[145] => $this->getFreshsecondary(),
            $keys[146] => $this->getFreshinto(),
            $keys[147] => $this->getInfisheriesreported(),
            $keys[148] => $this->getInfisheriespotential(),
            $keys[149] => $this->getInaquareported(),
            $keys[150] => $this->getInaquapotential(),
            $keys[151] => $this->getExportreported(),
            $keys[152] => $this->getExportpotential(),
            $keys[153] => $this->getSportreported(),
            $keys[154] => $this->getSportpotential(),
            $keys[155] => $this->getEndemicreported(),
            $keys[156] => $this->getEndemicpotential(),
            $keys[157] => $this->getThreatened(),
            $keys[158] => $this->getProtectedreported(),
            $keys[159] => $this->getProtectedpotential(),
            $keys[160] => $this->getAcp(),
            $keys[161] => $this->getDeveloped(),
            $keys[162] => $this->getMarine(),
            $keys[163] => $this->getBrackish(),
            $keys[164] => $this->getMarineinto(),
            $keys[165] => $this->getMarineinfisheriesreported(),
            $keys[166] => $this->getMarineinfisheriespotential(),
            $keys[167] => $this->getMarineinaquareported(),
            $keys[168] => $this->getMarineinaquapotential(),
            $keys[169] => $this->getMarineexportreported(),
            $keys[170] => $this->getMarineexportpotential(),
            $keys[171] => $this->getMarinesportreported(),
            $keys[172] => $this->getMarinesportpotential(),
            $keys[173] => $this->getMarineendemicreported(),
            $keys[174] => $this->getMarineendemicpotential(),
            $keys[175] => $this->getMarinethreatened(),
            $keys[176] => $this->getMarineprotectedreported(),
            $keys[177] => $this->getMarineprotectedpotential(),
            $keys[178] => $this->getNatfishdb(),
            $keys[179] => $this->getNatfishdb2(),
            $keys[180] => $this->getFactbook(),
            $keys[181] => $this->getNatfishaut(),
            $keys[182] => $this->getTradenames(),
            $keys[183] => $this->getEntered(),
            $keys[184] => $this->getDateentered(),
            $keys[185] => $this->getModified(),
            $keys[186] => $this->getDatemodified(),
            $keys[187] => $this->getExpert(),
            $keys[188] => $this->getDatechecked(),
            $keys[189] => $this->getGreekOriginal(),
            $keys[190] => $this->getGreek(),
            $keys[191] => $this->getRussianOriginal(),
            $keys[192] => $this->getRussian(),
            $keys[193] => $this->getFrench(),
            $keys[194] => $this->getSpanish(),
            $keys[195] => $this->getGerman(),
            $keys[196] => $this->getDutch(),
            $keys[197] => $this->getPortuguese(),
            $keys[198] => $this->getItalian(),
            $keys[199] => $this->getSwedish(),
            $keys[200] => $this->getTs(),
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
        $pos = CountrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPaese($value);
                break;
            case 1:
                $this->setNote($value);
                break;
            case 2:
                $this->setCCode($value);
                break;
            case 3:
                $this->setAbb($value);
                break;
            case 4:
                $this->setIsoCode($value);
                break;
            case 5:
                $this->setIso3alpha($value);
                break;
            case 6:
                $this->setIso2alpha($value);
                break;
            case 7:
                $this->setSaupCode($value);
                break;
            case 8:
                $this->setUsed($value);
                break;
            case 9:
                $this->setCapital($value);
                break;
            case 10:
                $this->setLatdeg($value);
                break;
            case 11:
                $this->setLatmin($value);
                break;
            case 12:
                $this->setNorthsouth($value);
                break;
            case 13:
                $this->setLongdeg($value);
                break;
            case 14:
                $this->setLongmin($value);
                break;
            case 15:
                $this->setEastwest($value);
                break;
            case 16:
                $this->setRemark($value);
                break;
            case 17:
                $this->setPolarboreal($value);
                break;
            case 18:
                $this->setTemperate($value);
                break;
            case 19:
                $this->setSubtropical($value);
                break;
            case 20:
                $this->setTropical($value);
                break;
            case 21:
                $this->setLandlocked($value);
                break;
            case 22:
                $this->setGeographicarea($value);
                break;
            case 23:
                $this->setRegion($value);
                break;
            case 24:
                $this->setContinent($value);
                break;
            case 25:
                $this->setAreacodeinland($value);
                break;
            case 26:
                $this->setFaoareainland($value);
                break;
            case 27:
                $this->setAreacodemarinei($value);
                break;
            case 28:
                $this->setFaoareamarinei($value);
                break;
            case 29:
                $this->setAreacodemarineii($value);
                break;
            case 30:
                $this->setFaoareamarineii($value);
                break;
            case 31:
                $this->setAreacodemarineiii($value);
                break;
            case 32:
                $this->setFaoareamarineiii($value);
                break;
            case 33:
                $this->setAreacodemarineiv($value);
                break;
            case 34:
                $this->setFaoareamarineiv($value);
                break;
            case 35:
                $this->setAreacodemarinev($value);
                break;
            case 36:
                $this->setFaoareamarinev($value);
                break;
            case 37:
                $this->setPopulation($value);
                break;
            case 38:
                $this->setPopulationyear($value);
                break;
            case 39:
                $this->setPopulationrate($value);
                break;
            case 40:
                $this->setPopulationref($value);
                break;
            case 41:
                $this->setCoastalpopulation($value);
                break;
            case 42:
                $this->setCoastpopref($value);
                break;
            case 43:
                $this->setArea($value);
                break;
            case 44:
                $this->setCoastline($value);
                break;
            case 45:
                $this->setCoastlineref($value);
                break;
            case 46:
                $this->setShelfarea($value);
                break;
            case 47:
                $this->setShelfref($value);
                break;
            case 48:
                $this->setEecarea($value);
                break;
            case 49:
                $this->setEezref($value);
                break;
            case 50:
                $this->setLanguage($value);
                break;
            case 51:
                $this->setCurrency($value);
                break;
            case 52:
                $this->setMarinecount($value);
                break;
            case 53:
                $this->setMarinefamcount($value);
                break;
            case 54:
                $this->setCompletemarine($value);
                break;
            case 55:
                $this->setMarinelit($value);
                break;
            case 56:
                $this->setMarinefamlit($value);
                break;
            case 57:
                $this->setCheckmarineref($value);
                break;
            case 58:
                $this->setMarineflag($value);
                break;
            case 59:
                $this->setFreshwatercount($value);
                break;
            case 60:
                $this->setFreshfamcount($value);
                break;
            case 61:
                $this->setCompletefresh($value);
                break;
            case 62:
                $this->setFreshwaterlit($value);
                break;
            case 63:
                $this->setFreshfamlit($value);
                break;
            case 64:
                $this->setCheckfreshref($value);
                break;
            case 65:
                $this->setFreshflag($value);
                break;
            case 66:
                $this->setTotalcount($value);
                break;
            case 67:
                $this->setTotalfamcount($value);
                break;
            case 68:
                $this->setTotalcomplete($value);
                break;
            case 69:
                $this->setTotallit($value);
                break;
            case 70:
                $this->setTotalfamlit($value);
                break;
            case 71:
                $this->setTotalref($value);
                break;
            case 72:
                $this->setLastupdate($value);
                break;
            case 73:
                $this->setMorphcountfresh($value);
                break;
            case 74:
                $this->setOccurcountfresh($value);
                break;
            case 75:
                $this->setPiccountfresh($value);
                break;
            case 76:
                $this->setGrowthcountfresh($value);
                break;
            case 77:
                $this->setFoodcountfresh($value);
                break;
            case 78:
                $this->setDietcountfresh($value);
                break;
            case 79:
                $this->setReproductioncountfresh($value);
                break;
            case 80:
                $this->setSpawningcountfresh($value);
                break;
            case 81:
                $this->setMorphcountmarine($value);
                break;
            case 82:
                $this->setOccurcountmarine($value);
                break;
            case 83:
                $this->setPiccountmarine($value);
                break;
            case 84:
                $this->setGrowthcountmarine($value);
                break;
            case 85:
                $this->setFoodcountmarine($value);
                break;
            case 86:
                $this->setDietcountmarine($value);
                break;
            case 87:
                $this->setReproductioncountmarine($value);
                break;
            case 88:
                $this->setSpawningcountmarine($value);
                break;
            case 89:
                $this->setLatdegfill($value);
                break;
            case 90:
                $this->setLatminfill($value);
                break;
            case 91:
                $this->setNorthsouthfill($value);
                break;
            case 92:
                $this->setLongdegfill($value);
                break;
            case 93:
                $this->setLongminfill($value);
                break;
            case 94:
                $this->setEastwestfill($value);
                break;
            case 95:
                $this->setMlatdegfill($value);
                break;
            case 96:
                $this->setMlatminfill($value);
                break;
            case 97:
                $this->setMnorthsouthfill($value);
                break;
            case 98:
                $this->setMlongdegfill($value);
                break;
            case 99:
                $this->setMlongminfill($value);
                break;
            case 100:
                $this->setMeastwestfill($value);
                break;
            case 101:
                $this->setMlatdegfill2($value);
                break;
            case 102:
                $this->setMlatminfill2($value);
                break;
            case 103:
                $this->setMnorthsouthfill2($value);
                break;
            case 104:
                $this->setMlongdegfill2($value);
                break;
            case 105:
                $this->setMlongminfill2($value);
                break;
            case 106:
                $this->setMeastwestfill2($value);
                break;
            case 107:
                $this->setMlatdegfill3($value);
                break;
            case 108:
                $this->setMlatminfill3($value);
                break;
            case 109:
                $this->setMnorthsouthfill3($value);
                break;
            case 110:
                $this->setMlongdegfill3($value);
                break;
            case 111:
                $this->setMlongminfill3($value);
                break;
            case 112:
                $this->setMeastwestfill3($value);
                break;
            case 113:
                $this->setMlatdegfill4($value);
                break;
            case 114:
                $this->setMlatminfill4($value);
                break;
            case 115:
                $this->setMnorthsouthfill4($value);
                break;
            case 116:
                $this->setMlongdegfill4($value);
                break;
            case 117:
                $this->setMlongminfill4($value);
                break;
            case 118:
                $this->setMeastwestfill4($value);
                break;
            case 119:
                $this->setMlatdegfill5($value);
                break;
            case 120:
                $this->setMlatminfill5($value);
                break;
            case 121:
                $this->setMnorthsouthfill5($value);
                break;
            case 122:
                $this->setMlongdegfill5($value);
                break;
            case 123:
                $this->setMlongminfill5($value);
                break;
            case 124:
                $this->setMeastwestfill5($value);
                break;
            case 125:
                $this->setNorthernlatitude($value);
                break;
            case 126:
                $this->setNorthernlatitudens($value);
                break;
            case 127:
                $this->setSouthernlatitude($value);
                break;
            case 128:
                $this->setSouthernlatitudens($value);
                break;
            case 129:
                $this->setWesternlongitude($value);
                break;
            case 130:
                $this->setWesternlongitudeew($value);
                break;
            case 131:
                $this->setEasternlongitude($value);
                break;
            case 132:
                $this->setEasternlongitudeew($value);
                break;
            case 133:
                $this->setCenterlat($value);
                break;
            case 134:
                $this->setCenterlong($value);
                break;
            case 135:
                $this->setOtherlanguage($value);
                break;
            case 136:
                $this->setGeography($value);
                break;
            case 137:
                $this->setGeographyref($value);
                break;
            case 138:
                $this->setHydrography($value);
                break;
            case 139:
                $this->setHydrographyref($value);
                break;
            case 140:
                $this->setCommentfresh($value);
                break;
            case 141:
                $this->setReffresh1($value);
                break;
            case 142:
                $this->setReffresh2($value);
                break;
            case 143:
                $this->setReffresh3($value);
                break;
            case 144:
                $this->setFreshprimary($value);
                break;
            case 145:
                $this->setFreshsecondary($value);
                break;
            case 146:
                $this->setFreshinto($value);
                break;
            case 147:
                $this->setInfisheriesreported($value);
                break;
            case 148:
                $this->setInfisheriespotential($value);
                break;
            case 149:
                $this->setInaquareported($value);
                break;
            case 150:
                $this->setInaquapotential($value);
                break;
            case 151:
                $this->setExportreported($value);
                break;
            case 152:
                $this->setExportpotential($value);
                break;
            case 153:
                $this->setSportreported($value);
                break;
            case 154:
                $this->setSportpotential($value);
                break;
            case 155:
                $this->setEndemicreported($value);
                break;
            case 156:
                $this->setEndemicpotential($value);
                break;
            case 157:
                $this->setThreatened($value);
                break;
            case 158:
                $this->setProtectedreported($value);
                break;
            case 159:
                $this->setProtectedpotential($value);
                break;
            case 160:
                $this->setAcp($value);
                break;
            case 161:
                $this->setDeveloped($value);
                break;
            case 162:
                $this->setMarine($value);
                break;
            case 163:
                $this->setBrackish($value);
                break;
            case 164:
                $this->setMarineinto($value);
                break;
            case 165:
                $this->setMarineinfisheriesreported($value);
                break;
            case 166:
                $this->setMarineinfisheriespotential($value);
                break;
            case 167:
                $this->setMarineinaquareported($value);
                break;
            case 168:
                $this->setMarineinaquapotential($value);
                break;
            case 169:
                $this->setMarineexportreported($value);
                break;
            case 170:
                $this->setMarineexportpotential($value);
                break;
            case 171:
                $this->setMarinesportreported($value);
                break;
            case 172:
                $this->setMarinesportpotential($value);
                break;
            case 173:
                $this->setMarineendemicreported($value);
                break;
            case 174:
                $this->setMarineendemicpotential($value);
                break;
            case 175:
                $this->setMarinethreatened($value);
                break;
            case 176:
                $this->setMarineprotectedreported($value);
                break;
            case 177:
                $this->setMarineprotectedpotential($value);
                break;
            case 178:
                $this->setNatfishdb($value);
                break;
            case 179:
                $this->setNatfishdb2($value);
                break;
            case 180:
                $this->setFactbook($value);
                break;
            case 181:
                $this->setNatfishaut($value);
                break;
            case 182:
                $this->setTradenames($value);
                break;
            case 183:
                $this->setEntered($value);
                break;
            case 184:
                $this->setDateentered($value);
                break;
            case 185:
                $this->setModified($value);
                break;
            case 186:
                $this->setDatemodified($value);
                break;
            case 187:
                $this->setExpert($value);
                break;
            case 188:
                $this->setDatechecked($value);
                break;
            case 189:
                $this->setGreekOriginal($value);
                break;
            case 190:
                $this->setGreek($value);
                break;
            case 191:
                $this->setRussianOriginal($value);
                break;
            case 192:
                $this->setRussian($value);
                break;
            case 193:
                $this->setFrench($value);
                break;
            case 194:
                $this->setSpanish($value);
                break;
            case 195:
                $this->setGerman($value);
                break;
            case 196:
                $this->setDutch($value);
                break;
            case 197:
                $this->setPortuguese($value);
                break;
            case 198:
                $this->setItalian($value);
                break;
            case 199:
                $this->setSwedish($value);
                break;
            case 200:
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
        $keys = CountrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPaese($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNote($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAbb($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIsoCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIso3alpha($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIso2alpha($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSaupCode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUsed($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCapital($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLatdeg($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLatmin($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNorthsouth($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLongdeg($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLongmin($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEastwest($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRemark($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPolarboreal($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTemperate($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSubtropical($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTropical($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLandlocked($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setGeographicarea($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setRegion($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setContinent($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAreacodeinland($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFaoareainland($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAreacodemarinei($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFaoareamarinei($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAreacodemarineii($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFaoareamarineii($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAreacodemarineiii($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFaoareamarineiii($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setAreacodemarineiv($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setFaoareamarineiv($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAreacodemarinev($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setFaoareamarinev($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPopulation($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setPopulationyear($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setPopulationrate($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setPopulationref($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setCoastalpopulation($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCoastpopref($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setArea($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setCoastline($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setCoastlineref($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setShelfarea($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setShelfref($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setEecarea($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setEezref($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setLanguage($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setCurrency($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setMarinecount($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setMarinefamcount($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setCompletemarine($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setMarinelit($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setMarinefamlit($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setCheckmarineref($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setMarineflag($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setFreshwatercount($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setFreshfamcount($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setCompletefresh($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setFreshwaterlit($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setFreshfamlit($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setCheckfreshref($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setFreshflag($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setTotalcount($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setTotalfamcount($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setTotalcomplete($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setTotallit($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setTotalfamlit($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setTotalref($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setLastupdate($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setMorphcountfresh($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setOccurcountfresh($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setPiccountfresh($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setGrowthcountfresh($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setFoodcountfresh($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setDietcountfresh($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setReproductioncountfresh($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setSpawningcountfresh($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setMorphcountmarine($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setOccurcountmarine($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setPiccountmarine($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setGrowthcountmarine($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setFoodcountmarine($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setDietcountmarine($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setReproductioncountmarine($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setSpawningcountmarine($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setLatdegfill($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setLatminfill($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setNorthsouthfill($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setLongdegfill($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setLongminfill($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setEastwestfill($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setMlatdegfill($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setMlatminfill($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setMnorthsouthfill($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setMlongdegfill($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setMlongminfill($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setMeastwestfill($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setMlatdegfill2($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setMlatminfill2($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setMnorthsouthfill2($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setMlongdegfill2($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setMlongminfill2($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setMeastwestfill2($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setMlatdegfill3($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setMlatminfill3($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setMnorthsouthfill3($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setMlongdegfill3($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setMlongminfill3($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setMeastwestfill3($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setMlatdegfill4($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setMlatminfill4($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setMnorthsouthfill4($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setMlongdegfill4($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setMlongminfill4($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setMeastwestfill4($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setMlatdegfill5($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setMlatminfill5($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setMnorthsouthfill5($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setMlongdegfill5($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setMlongminfill5($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setMeastwestfill5($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setNorthernlatitude($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setNorthernlatitudens($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setSouthernlatitude($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setSouthernlatitudens($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setWesternlongitude($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setWesternlongitudeew($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setEasternlongitude($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setEasternlongitudeew($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setCenterlat($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setCenterlong($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setOtherlanguage($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setGeography($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setGeographyref($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setHydrography($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setHydrographyref($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setCommentfresh($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setReffresh1($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setReffresh2($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setReffresh3($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setFreshprimary($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setFreshsecondary($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setFreshinto($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setInfisheriesreported($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setInfisheriespotential($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setInaquareported($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setInaquapotential($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setExportreported($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setExportpotential($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setSportreported($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setSportpotential($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setEndemicreported($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setEndemicpotential($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setThreatened($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setProtectedreported($arr[$keys[158]]);
        if (array_key_exists($keys[159], $arr)) $this->setProtectedpotential($arr[$keys[159]]);
        if (array_key_exists($keys[160], $arr)) $this->setAcp($arr[$keys[160]]);
        if (array_key_exists($keys[161], $arr)) $this->setDeveloped($arr[$keys[161]]);
        if (array_key_exists($keys[162], $arr)) $this->setMarine($arr[$keys[162]]);
        if (array_key_exists($keys[163], $arr)) $this->setBrackish($arr[$keys[163]]);
        if (array_key_exists($keys[164], $arr)) $this->setMarineinto($arr[$keys[164]]);
        if (array_key_exists($keys[165], $arr)) $this->setMarineinfisheriesreported($arr[$keys[165]]);
        if (array_key_exists($keys[166], $arr)) $this->setMarineinfisheriespotential($arr[$keys[166]]);
        if (array_key_exists($keys[167], $arr)) $this->setMarineinaquareported($arr[$keys[167]]);
        if (array_key_exists($keys[168], $arr)) $this->setMarineinaquapotential($arr[$keys[168]]);
        if (array_key_exists($keys[169], $arr)) $this->setMarineexportreported($arr[$keys[169]]);
        if (array_key_exists($keys[170], $arr)) $this->setMarineexportpotential($arr[$keys[170]]);
        if (array_key_exists($keys[171], $arr)) $this->setMarinesportreported($arr[$keys[171]]);
        if (array_key_exists($keys[172], $arr)) $this->setMarinesportpotential($arr[$keys[172]]);
        if (array_key_exists($keys[173], $arr)) $this->setMarineendemicreported($arr[$keys[173]]);
        if (array_key_exists($keys[174], $arr)) $this->setMarineendemicpotential($arr[$keys[174]]);
        if (array_key_exists($keys[175], $arr)) $this->setMarinethreatened($arr[$keys[175]]);
        if (array_key_exists($keys[176], $arr)) $this->setMarineprotectedreported($arr[$keys[176]]);
        if (array_key_exists($keys[177], $arr)) $this->setMarineprotectedpotential($arr[$keys[177]]);
        if (array_key_exists($keys[178], $arr)) $this->setNatfishdb($arr[$keys[178]]);
        if (array_key_exists($keys[179], $arr)) $this->setNatfishdb2($arr[$keys[179]]);
        if (array_key_exists($keys[180], $arr)) $this->setFactbook($arr[$keys[180]]);
        if (array_key_exists($keys[181], $arr)) $this->setNatfishaut($arr[$keys[181]]);
        if (array_key_exists($keys[182], $arr)) $this->setTradenames($arr[$keys[182]]);
        if (array_key_exists($keys[183], $arr)) $this->setEntered($arr[$keys[183]]);
        if (array_key_exists($keys[184], $arr)) $this->setDateentered($arr[$keys[184]]);
        if (array_key_exists($keys[185], $arr)) $this->setModified($arr[$keys[185]]);
        if (array_key_exists($keys[186], $arr)) $this->setDatemodified($arr[$keys[186]]);
        if (array_key_exists($keys[187], $arr)) $this->setExpert($arr[$keys[187]]);
        if (array_key_exists($keys[188], $arr)) $this->setDatechecked($arr[$keys[188]]);
        if (array_key_exists($keys[189], $arr)) $this->setGreekOriginal($arr[$keys[189]]);
        if (array_key_exists($keys[190], $arr)) $this->setGreek($arr[$keys[190]]);
        if (array_key_exists($keys[191], $arr)) $this->setRussianOriginal($arr[$keys[191]]);
        if (array_key_exists($keys[192], $arr)) $this->setRussian($arr[$keys[192]]);
        if (array_key_exists($keys[193], $arr)) $this->setFrench($arr[$keys[193]]);
        if (array_key_exists($keys[194], $arr)) $this->setSpanish($arr[$keys[194]]);
        if (array_key_exists($keys[195], $arr)) $this->setGerman($arr[$keys[195]]);
        if (array_key_exists($keys[196], $arr)) $this->setDutch($arr[$keys[196]]);
        if (array_key_exists($keys[197], $arr)) $this->setPortuguese($arr[$keys[197]]);
        if (array_key_exists($keys[198], $arr)) $this->setItalian($arr[$keys[198]]);
        if (array_key_exists($keys[199], $arr)) $this->setSwedish($arr[$keys[199]]);
        if (array_key_exists($keys[200], $arr)) $this->setTs($arr[$keys[200]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CountrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(CountrefPeer::PAESE)) $criteria->add(CountrefPeer::PAESE, $this->paese);
        if ($this->isColumnModified(CountrefPeer::NOTE)) $criteria->add(CountrefPeer::NOTE, $this->note);
        if ($this->isColumnModified(CountrefPeer::C_CODE)) $criteria->add(CountrefPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(CountrefPeer::ABB)) $criteria->add(CountrefPeer::ABB, $this->abb);
        if ($this->isColumnModified(CountrefPeer::ISO_CODE)) $criteria->add(CountrefPeer::ISO_CODE, $this->iso_code);
        if ($this->isColumnModified(CountrefPeer::ISO3ALPHA)) $criteria->add(CountrefPeer::ISO3ALPHA, $this->iso3alpha);
        if ($this->isColumnModified(CountrefPeer::ISO2ALPHA)) $criteria->add(CountrefPeer::ISO2ALPHA, $this->iso2alpha);
        if ($this->isColumnModified(CountrefPeer::SAUP_CODE)) $criteria->add(CountrefPeer::SAUP_CODE, $this->saup_code);
        if ($this->isColumnModified(CountrefPeer::USED)) $criteria->add(CountrefPeer::USED, $this->used);
        if ($this->isColumnModified(CountrefPeer::CAPITAL)) $criteria->add(CountrefPeer::CAPITAL, $this->capital);
        if ($this->isColumnModified(CountrefPeer::LATDEG)) $criteria->add(CountrefPeer::LATDEG, $this->latdeg);
        if ($this->isColumnModified(CountrefPeer::LATMIN)) $criteria->add(CountrefPeer::LATMIN, $this->latmin);
        if ($this->isColumnModified(CountrefPeer::NORTHSOUTH)) $criteria->add(CountrefPeer::NORTHSOUTH, $this->northsouth);
        if ($this->isColumnModified(CountrefPeer::LONGDEG)) $criteria->add(CountrefPeer::LONGDEG, $this->longdeg);
        if ($this->isColumnModified(CountrefPeer::LONGMIN)) $criteria->add(CountrefPeer::LONGMIN, $this->longmin);
        if ($this->isColumnModified(CountrefPeer::EASTWEST)) $criteria->add(CountrefPeer::EASTWEST, $this->eastwest);
        if ($this->isColumnModified(CountrefPeer::REMARK)) $criteria->add(CountrefPeer::REMARK, $this->remark);
        if ($this->isColumnModified(CountrefPeer::POLARBOREAL)) $criteria->add(CountrefPeer::POLARBOREAL, $this->polarboreal);
        if ($this->isColumnModified(CountrefPeer::TEMPERATE)) $criteria->add(CountrefPeer::TEMPERATE, $this->temperate);
        if ($this->isColumnModified(CountrefPeer::SUBTROPICAL)) $criteria->add(CountrefPeer::SUBTROPICAL, $this->subtropical);
        if ($this->isColumnModified(CountrefPeer::TROPICAL)) $criteria->add(CountrefPeer::TROPICAL, $this->tropical);
        if ($this->isColumnModified(CountrefPeer::LANDLOCKED)) $criteria->add(CountrefPeer::LANDLOCKED, $this->landlocked);
        if ($this->isColumnModified(CountrefPeer::GEOGRAPHICAREA)) $criteria->add(CountrefPeer::GEOGRAPHICAREA, $this->geographicarea);
        if ($this->isColumnModified(CountrefPeer::REGION)) $criteria->add(CountrefPeer::REGION, $this->region);
        if ($this->isColumnModified(CountrefPeer::CONTINENT)) $criteria->add(CountrefPeer::CONTINENT, $this->continent);
        if ($this->isColumnModified(CountrefPeer::AREACODEINLAND)) $criteria->add(CountrefPeer::AREACODEINLAND, $this->areacodeinland);
        if ($this->isColumnModified(CountrefPeer::FAOAREAINLAND)) $criteria->add(CountrefPeer::FAOAREAINLAND, $this->faoareainland);
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEI)) $criteria->add(CountrefPeer::AREACODEMARINEI, $this->areacodemarinei);
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEI)) $criteria->add(CountrefPeer::FAOAREAMARINEI, $this->faoareamarinei);
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEII)) $criteria->add(CountrefPeer::AREACODEMARINEII, $this->areacodemarineii);
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEII)) $criteria->add(CountrefPeer::FAOAREAMARINEII, $this->faoareamarineii);
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEIII)) $criteria->add(CountrefPeer::AREACODEMARINEIII, $this->areacodemarineiii);
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEIII)) $criteria->add(CountrefPeer::FAOAREAMARINEIII, $this->faoareamarineiii);
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEIV)) $criteria->add(CountrefPeer::AREACODEMARINEIV, $this->areacodemarineiv);
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEIV)) $criteria->add(CountrefPeer::FAOAREAMARINEIV, $this->faoareamarineiv);
        if ($this->isColumnModified(CountrefPeer::AREACODEMARINEV)) $criteria->add(CountrefPeer::AREACODEMARINEV, $this->areacodemarinev);
        if ($this->isColumnModified(CountrefPeer::FAOAREAMARINEV)) $criteria->add(CountrefPeer::FAOAREAMARINEV, $this->faoareamarinev);
        if ($this->isColumnModified(CountrefPeer::POPULATION)) $criteria->add(CountrefPeer::POPULATION, $this->population);
        if ($this->isColumnModified(CountrefPeer::POPULATIONYEAR)) $criteria->add(CountrefPeer::POPULATIONYEAR, $this->populationyear);
        if ($this->isColumnModified(CountrefPeer::POPULATIONRATE)) $criteria->add(CountrefPeer::POPULATIONRATE, $this->populationrate);
        if ($this->isColumnModified(CountrefPeer::POPULATIONREF)) $criteria->add(CountrefPeer::POPULATIONREF, $this->populationref);
        if ($this->isColumnModified(CountrefPeer::COASTALPOPULATION)) $criteria->add(CountrefPeer::COASTALPOPULATION, $this->coastalpopulation);
        if ($this->isColumnModified(CountrefPeer::COASTPOPREF)) $criteria->add(CountrefPeer::COASTPOPREF, $this->coastpopref);
        if ($this->isColumnModified(CountrefPeer::AREA)) $criteria->add(CountrefPeer::AREA, $this->area);
        if ($this->isColumnModified(CountrefPeer::COASTLINE)) $criteria->add(CountrefPeer::COASTLINE, $this->coastline);
        if ($this->isColumnModified(CountrefPeer::COASTLINEREF)) $criteria->add(CountrefPeer::COASTLINEREF, $this->coastlineref);
        if ($this->isColumnModified(CountrefPeer::SHELFAREA)) $criteria->add(CountrefPeer::SHELFAREA, $this->shelfarea);
        if ($this->isColumnModified(CountrefPeer::SHELFREF)) $criteria->add(CountrefPeer::SHELFREF, $this->shelfref);
        if ($this->isColumnModified(CountrefPeer::EECAREA)) $criteria->add(CountrefPeer::EECAREA, $this->eecarea);
        if ($this->isColumnModified(CountrefPeer::EEZREF)) $criteria->add(CountrefPeer::EEZREF, $this->eezref);
        if ($this->isColumnModified(CountrefPeer::LANGUAGE)) $criteria->add(CountrefPeer::LANGUAGE, $this->language);
        if ($this->isColumnModified(CountrefPeer::CURRENCY)) $criteria->add(CountrefPeer::CURRENCY, $this->currency);
        if ($this->isColumnModified(CountrefPeer::MARINECOUNT)) $criteria->add(CountrefPeer::MARINECOUNT, $this->marinecount);
        if ($this->isColumnModified(CountrefPeer::MARINEFAMCOUNT)) $criteria->add(CountrefPeer::MARINEFAMCOUNT, $this->marinefamcount);
        if ($this->isColumnModified(CountrefPeer::COMPLETEMARINE)) $criteria->add(CountrefPeer::COMPLETEMARINE, $this->completemarine);
        if ($this->isColumnModified(CountrefPeer::MARINELIT)) $criteria->add(CountrefPeer::MARINELIT, $this->marinelit);
        if ($this->isColumnModified(CountrefPeer::MARINEFAMLIT)) $criteria->add(CountrefPeer::MARINEFAMLIT, $this->marinefamlit);
        if ($this->isColumnModified(CountrefPeer::CHECKMARINEREF)) $criteria->add(CountrefPeer::CHECKMARINEREF, $this->checkmarineref);
        if ($this->isColumnModified(CountrefPeer::MARINEFLAG)) $criteria->add(CountrefPeer::MARINEFLAG, $this->marineflag);
        if ($this->isColumnModified(CountrefPeer::FRESHWATERCOUNT)) $criteria->add(CountrefPeer::FRESHWATERCOUNT, $this->freshwatercount);
        if ($this->isColumnModified(CountrefPeer::FRESHFAMCOUNT)) $criteria->add(CountrefPeer::FRESHFAMCOUNT, $this->freshfamcount);
        if ($this->isColumnModified(CountrefPeer::COMPLETEFRESH)) $criteria->add(CountrefPeer::COMPLETEFRESH, $this->completefresh);
        if ($this->isColumnModified(CountrefPeer::FRESHWATERLIT)) $criteria->add(CountrefPeer::FRESHWATERLIT, $this->freshwaterlit);
        if ($this->isColumnModified(CountrefPeer::FRESHFAMLIT)) $criteria->add(CountrefPeer::FRESHFAMLIT, $this->freshfamlit);
        if ($this->isColumnModified(CountrefPeer::CHECKFRESHREF)) $criteria->add(CountrefPeer::CHECKFRESHREF, $this->checkfreshref);
        if ($this->isColumnModified(CountrefPeer::FRESHFLAG)) $criteria->add(CountrefPeer::FRESHFLAG, $this->freshflag);
        if ($this->isColumnModified(CountrefPeer::TOTALCOUNT)) $criteria->add(CountrefPeer::TOTALCOUNT, $this->totalcount);
        if ($this->isColumnModified(CountrefPeer::TOTALFAMCOUNT)) $criteria->add(CountrefPeer::TOTALFAMCOUNT, $this->totalfamcount);
        if ($this->isColumnModified(CountrefPeer::TOTALCOMPLETE)) $criteria->add(CountrefPeer::TOTALCOMPLETE, $this->totalcomplete);
        if ($this->isColumnModified(CountrefPeer::TOTALLIT)) $criteria->add(CountrefPeer::TOTALLIT, $this->totallit);
        if ($this->isColumnModified(CountrefPeer::TOTALFAMLIT)) $criteria->add(CountrefPeer::TOTALFAMLIT, $this->totalfamlit);
        if ($this->isColumnModified(CountrefPeer::TOTALREF)) $criteria->add(CountrefPeer::TOTALREF, $this->totalref);
        if ($this->isColumnModified(CountrefPeer::LASTUPDATE)) $criteria->add(CountrefPeer::LASTUPDATE, $this->lastupdate);
        if ($this->isColumnModified(CountrefPeer::MORPHCOUNTFRESH)) $criteria->add(CountrefPeer::MORPHCOUNTFRESH, $this->morphcountfresh);
        if ($this->isColumnModified(CountrefPeer::OCCURCOUNTFRESH)) $criteria->add(CountrefPeer::OCCURCOUNTFRESH, $this->occurcountfresh);
        if ($this->isColumnModified(CountrefPeer::PICCOUNTFRESH)) $criteria->add(CountrefPeer::PICCOUNTFRESH, $this->piccountfresh);
        if ($this->isColumnModified(CountrefPeer::GROWTHCOUNTFRESH)) $criteria->add(CountrefPeer::GROWTHCOUNTFRESH, $this->growthcountfresh);
        if ($this->isColumnModified(CountrefPeer::FOODCOUNTFRESH)) $criteria->add(CountrefPeer::FOODCOUNTFRESH, $this->foodcountfresh);
        if ($this->isColumnModified(CountrefPeer::DIETCOUNTFRESH)) $criteria->add(CountrefPeer::DIETCOUNTFRESH, $this->dietcountfresh);
        if ($this->isColumnModified(CountrefPeer::REPRODUCTIONCOUNTFRESH)) $criteria->add(CountrefPeer::REPRODUCTIONCOUNTFRESH, $this->reproductioncountfresh);
        if ($this->isColumnModified(CountrefPeer::SPAWNINGCOUNTFRESH)) $criteria->add(CountrefPeer::SPAWNINGCOUNTFRESH, $this->spawningcountfresh);
        if ($this->isColumnModified(CountrefPeer::MORPHCOUNTMARINE)) $criteria->add(CountrefPeer::MORPHCOUNTMARINE, $this->morphcountmarine);
        if ($this->isColumnModified(CountrefPeer::OCCURCOUNTMARINE)) $criteria->add(CountrefPeer::OCCURCOUNTMARINE, $this->occurcountmarine);
        if ($this->isColumnModified(CountrefPeer::PICCOUNTMARINE)) $criteria->add(CountrefPeer::PICCOUNTMARINE, $this->piccountmarine);
        if ($this->isColumnModified(CountrefPeer::GROWTHCOUNTMARINE)) $criteria->add(CountrefPeer::GROWTHCOUNTMARINE, $this->growthcountmarine);
        if ($this->isColumnModified(CountrefPeer::FOODCOUNTMARINE)) $criteria->add(CountrefPeer::FOODCOUNTMARINE, $this->foodcountmarine);
        if ($this->isColumnModified(CountrefPeer::DIETCOUNTMARINE)) $criteria->add(CountrefPeer::DIETCOUNTMARINE, $this->dietcountmarine);
        if ($this->isColumnModified(CountrefPeer::REPRODUCTIONCOUNTMARINE)) $criteria->add(CountrefPeer::REPRODUCTIONCOUNTMARINE, $this->reproductioncountmarine);
        if ($this->isColumnModified(CountrefPeer::SPAWNINGCOUNTMARINE)) $criteria->add(CountrefPeer::SPAWNINGCOUNTMARINE, $this->spawningcountmarine);
        if ($this->isColumnModified(CountrefPeer::LATDEGFILL)) $criteria->add(CountrefPeer::LATDEGFILL, $this->latdegfill);
        if ($this->isColumnModified(CountrefPeer::LATMINFILL)) $criteria->add(CountrefPeer::LATMINFILL, $this->latminfill);
        if ($this->isColumnModified(CountrefPeer::NORTHSOUTHFILL)) $criteria->add(CountrefPeer::NORTHSOUTHFILL, $this->northsouthfill);
        if ($this->isColumnModified(CountrefPeer::LONGDEGFILL)) $criteria->add(CountrefPeer::LONGDEGFILL, $this->longdegfill);
        if ($this->isColumnModified(CountrefPeer::LONGMINFILL)) $criteria->add(CountrefPeer::LONGMINFILL, $this->longminfill);
        if ($this->isColumnModified(CountrefPeer::EASTWESTFILL)) $criteria->add(CountrefPeer::EASTWESTFILL, $this->eastwestfill);
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL)) $criteria->add(CountrefPeer::MLATDEGFILL, $this->mlatdegfill);
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL)) $criteria->add(CountrefPeer::MLATMINFILL, $this->mlatminfill);
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL)) $criteria->add(CountrefPeer::MNORTHSOUTHFILL, $this->mnorthsouthfill);
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL)) $criteria->add(CountrefPeer::MLONGDEGFILL, $this->mlongdegfill);
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL)) $criteria->add(CountrefPeer::MLONGMINFILL, $this->mlongminfill);
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL)) $criteria->add(CountrefPeer::MEASTWESTFILL, $this->meastwestfill);
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL2)) $criteria->add(CountrefPeer::MLATDEGFILL2, $this->mlatdegfill2);
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL2)) $criteria->add(CountrefPeer::MLATMINFILL2, $this->mlatminfill2);
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL2)) $criteria->add(CountrefPeer::MNORTHSOUTHFILL2, $this->mnorthsouthfill2);
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL2)) $criteria->add(CountrefPeer::MLONGDEGFILL2, $this->mlongdegfill2);
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL2)) $criteria->add(CountrefPeer::MLONGMINFILL2, $this->mlongminfill2);
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL2)) $criteria->add(CountrefPeer::MEASTWESTFILL2, $this->meastwestfill2);
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL3)) $criteria->add(CountrefPeer::MLATDEGFILL3, $this->mlatdegfill3);
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL3)) $criteria->add(CountrefPeer::MLATMINFILL3, $this->mlatminfill3);
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL3)) $criteria->add(CountrefPeer::MNORTHSOUTHFILL3, $this->mnorthsouthfill3);
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL3)) $criteria->add(CountrefPeer::MLONGDEGFILL3, $this->mlongdegfill3);
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL3)) $criteria->add(CountrefPeer::MLONGMINFILL3, $this->mlongminfill3);
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL3)) $criteria->add(CountrefPeer::MEASTWESTFILL3, $this->meastwestfill3);
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL4)) $criteria->add(CountrefPeer::MLATDEGFILL4, $this->mlatdegfill4);
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL4)) $criteria->add(CountrefPeer::MLATMINFILL4, $this->mlatminfill4);
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL4)) $criteria->add(CountrefPeer::MNORTHSOUTHFILL4, $this->mnorthsouthfill4);
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL4)) $criteria->add(CountrefPeer::MLONGDEGFILL4, $this->mlongdegfill4);
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL4)) $criteria->add(CountrefPeer::MLONGMINFILL4, $this->mlongminfill4);
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL4)) $criteria->add(CountrefPeer::MEASTWESTFILL4, $this->meastwestfill4);
        if ($this->isColumnModified(CountrefPeer::MLATDEGFILL5)) $criteria->add(CountrefPeer::MLATDEGFILL5, $this->mlatdegfill5);
        if ($this->isColumnModified(CountrefPeer::MLATMINFILL5)) $criteria->add(CountrefPeer::MLATMINFILL5, $this->mlatminfill5);
        if ($this->isColumnModified(CountrefPeer::MNORTHSOUTHFILL5)) $criteria->add(CountrefPeer::MNORTHSOUTHFILL5, $this->mnorthsouthfill5);
        if ($this->isColumnModified(CountrefPeer::MLONGDEGFILL5)) $criteria->add(CountrefPeer::MLONGDEGFILL5, $this->mlongdegfill5);
        if ($this->isColumnModified(CountrefPeer::MLONGMINFILL5)) $criteria->add(CountrefPeer::MLONGMINFILL5, $this->mlongminfill5);
        if ($this->isColumnModified(CountrefPeer::MEASTWESTFILL5)) $criteria->add(CountrefPeer::MEASTWESTFILL5, $this->meastwestfill5);
        if ($this->isColumnModified(CountrefPeer::NORTHERNLATITUDE)) $criteria->add(CountrefPeer::NORTHERNLATITUDE, $this->northernlatitude);
        if ($this->isColumnModified(CountrefPeer::NORTHERNLATITUDENS)) $criteria->add(CountrefPeer::NORTHERNLATITUDENS, $this->northernlatitudens);
        if ($this->isColumnModified(CountrefPeer::SOUTHERNLATITUDE)) $criteria->add(CountrefPeer::SOUTHERNLATITUDE, $this->southernlatitude);
        if ($this->isColumnModified(CountrefPeer::SOUTHERNLATITUDENS)) $criteria->add(CountrefPeer::SOUTHERNLATITUDENS, $this->southernlatitudens);
        if ($this->isColumnModified(CountrefPeer::WESTERNLONGITUDE)) $criteria->add(CountrefPeer::WESTERNLONGITUDE, $this->westernlongitude);
        if ($this->isColumnModified(CountrefPeer::WESTERNLONGITUDEEW)) $criteria->add(CountrefPeer::WESTERNLONGITUDEEW, $this->westernlongitudeew);
        if ($this->isColumnModified(CountrefPeer::EASTERNLONGITUDE)) $criteria->add(CountrefPeer::EASTERNLONGITUDE, $this->easternlongitude);
        if ($this->isColumnModified(CountrefPeer::EASTERNLONGITUDEEW)) $criteria->add(CountrefPeer::EASTERNLONGITUDEEW, $this->easternlongitudeew);
        if ($this->isColumnModified(CountrefPeer::CENTERLAT)) $criteria->add(CountrefPeer::CENTERLAT, $this->centerlat);
        if ($this->isColumnModified(CountrefPeer::CENTERLONG)) $criteria->add(CountrefPeer::CENTERLONG, $this->centerlong);
        if ($this->isColumnModified(CountrefPeer::OTHERLANGUAGE)) $criteria->add(CountrefPeer::OTHERLANGUAGE, $this->otherlanguage);
        if ($this->isColumnModified(CountrefPeer::GEOGRAPHY)) $criteria->add(CountrefPeer::GEOGRAPHY, $this->geography);
        if ($this->isColumnModified(CountrefPeer::GEOGRAPHYREF)) $criteria->add(CountrefPeer::GEOGRAPHYREF, $this->geographyref);
        if ($this->isColumnModified(CountrefPeer::HYDROGRAPHY)) $criteria->add(CountrefPeer::HYDROGRAPHY, $this->hydrography);
        if ($this->isColumnModified(CountrefPeer::HYDROGRAPHYREF)) $criteria->add(CountrefPeer::HYDROGRAPHYREF, $this->hydrographyref);
        if ($this->isColumnModified(CountrefPeer::COMMENTFRESH)) $criteria->add(CountrefPeer::COMMENTFRESH, $this->commentfresh);
        if ($this->isColumnModified(CountrefPeer::REFFRESH1)) $criteria->add(CountrefPeer::REFFRESH1, $this->reffresh1);
        if ($this->isColumnModified(CountrefPeer::REFFRESH2)) $criteria->add(CountrefPeer::REFFRESH2, $this->reffresh2);
        if ($this->isColumnModified(CountrefPeer::REFFRESH3)) $criteria->add(CountrefPeer::REFFRESH3, $this->reffresh3);
        if ($this->isColumnModified(CountrefPeer::FRESHPRIMARY)) $criteria->add(CountrefPeer::FRESHPRIMARY, $this->freshprimary);
        if ($this->isColumnModified(CountrefPeer::FRESHSECONDARY)) $criteria->add(CountrefPeer::FRESHSECONDARY, $this->freshsecondary);
        if ($this->isColumnModified(CountrefPeer::FRESHINTO)) $criteria->add(CountrefPeer::FRESHINTO, $this->freshinto);
        if ($this->isColumnModified(CountrefPeer::INFISHERIESREPORTED)) $criteria->add(CountrefPeer::INFISHERIESREPORTED, $this->infisheriesreported);
        if ($this->isColumnModified(CountrefPeer::INFISHERIESPOTENTIAL)) $criteria->add(CountrefPeer::INFISHERIESPOTENTIAL, $this->infisheriespotential);
        if ($this->isColumnModified(CountrefPeer::INAQUAREPORTED)) $criteria->add(CountrefPeer::INAQUAREPORTED, $this->inaquareported);
        if ($this->isColumnModified(CountrefPeer::INAQUAPOTENTIAL)) $criteria->add(CountrefPeer::INAQUAPOTENTIAL, $this->inaquapotential);
        if ($this->isColumnModified(CountrefPeer::EXPORTREPORTED)) $criteria->add(CountrefPeer::EXPORTREPORTED, $this->exportreported);
        if ($this->isColumnModified(CountrefPeer::EXPORTPOTENTIAL)) $criteria->add(CountrefPeer::EXPORTPOTENTIAL, $this->exportpotential);
        if ($this->isColumnModified(CountrefPeer::SPORTREPORTED)) $criteria->add(CountrefPeer::SPORTREPORTED, $this->sportreported);
        if ($this->isColumnModified(CountrefPeer::SPORTPOTENTIAL)) $criteria->add(CountrefPeer::SPORTPOTENTIAL, $this->sportpotential);
        if ($this->isColumnModified(CountrefPeer::ENDEMICREPORTED)) $criteria->add(CountrefPeer::ENDEMICREPORTED, $this->endemicreported);
        if ($this->isColumnModified(CountrefPeer::ENDEMICPOTENTIAL)) $criteria->add(CountrefPeer::ENDEMICPOTENTIAL, $this->endemicpotential);
        if ($this->isColumnModified(CountrefPeer::THREATENED)) $criteria->add(CountrefPeer::THREATENED, $this->threatened);
        if ($this->isColumnModified(CountrefPeer::PROTECTEDREPORTED)) $criteria->add(CountrefPeer::PROTECTEDREPORTED, $this->protectedreported);
        if ($this->isColumnModified(CountrefPeer::PROTECTEDPOTENTIAL)) $criteria->add(CountrefPeer::PROTECTEDPOTENTIAL, $this->protectedpotential);
        if ($this->isColumnModified(CountrefPeer::ACP)) $criteria->add(CountrefPeer::ACP, $this->acp);
        if ($this->isColumnModified(CountrefPeer::DEVELOPED)) $criteria->add(CountrefPeer::DEVELOPED, $this->developed);
        if ($this->isColumnModified(CountrefPeer::MARINE)) $criteria->add(CountrefPeer::MARINE, $this->marine);
        if ($this->isColumnModified(CountrefPeer::BRACKISH)) $criteria->add(CountrefPeer::BRACKISH, $this->brackish);
        if ($this->isColumnModified(CountrefPeer::MARINEINTO)) $criteria->add(CountrefPeer::MARINEINTO, $this->marineinto);
        if ($this->isColumnModified(CountrefPeer::MARINEINFISHERIESREPORTED)) $criteria->add(CountrefPeer::MARINEINFISHERIESREPORTED, $this->marineinfisheriesreported);
        if ($this->isColumnModified(CountrefPeer::MARINEINFISHERIESPOTENTIAL)) $criteria->add(CountrefPeer::MARINEINFISHERIESPOTENTIAL, $this->marineinfisheriespotential);
        if ($this->isColumnModified(CountrefPeer::MARINEINAQUAREPORTED)) $criteria->add(CountrefPeer::MARINEINAQUAREPORTED, $this->marineinaquareported);
        if ($this->isColumnModified(CountrefPeer::MARINEINAQUAPOTENTIAL)) $criteria->add(CountrefPeer::MARINEINAQUAPOTENTIAL, $this->marineinaquapotential);
        if ($this->isColumnModified(CountrefPeer::MARINEEXPORTREPORTED)) $criteria->add(CountrefPeer::MARINEEXPORTREPORTED, $this->marineexportreported);
        if ($this->isColumnModified(CountrefPeer::MARINEEXPORTPOTENTIAL)) $criteria->add(CountrefPeer::MARINEEXPORTPOTENTIAL, $this->marineexportpotential);
        if ($this->isColumnModified(CountrefPeer::MARINESPORTREPORTED)) $criteria->add(CountrefPeer::MARINESPORTREPORTED, $this->marinesportreported);
        if ($this->isColumnModified(CountrefPeer::MARINESPORTPOTENTIAL)) $criteria->add(CountrefPeer::MARINESPORTPOTENTIAL, $this->marinesportpotential);
        if ($this->isColumnModified(CountrefPeer::MARINEENDEMICREPORTED)) $criteria->add(CountrefPeer::MARINEENDEMICREPORTED, $this->marineendemicreported);
        if ($this->isColumnModified(CountrefPeer::MARINEENDEMICPOTENTIAL)) $criteria->add(CountrefPeer::MARINEENDEMICPOTENTIAL, $this->marineendemicpotential);
        if ($this->isColumnModified(CountrefPeer::MARINETHREATENED)) $criteria->add(CountrefPeer::MARINETHREATENED, $this->marinethreatened);
        if ($this->isColumnModified(CountrefPeer::MARINEPROTECTEDREPORTED)) $criteria->add(CountrefPeer::MARINEPROTECTEDREPORTED, $this->marineprotectedreported);
        if ($this->isColumnModified(CountrefPeer::MARINEPROTECTEDPOTENTIAL)) $criteria->add(CountrefPeer::MARINEPROTECTEDPOTENTIAL, $this->marineprotectedpotential);
        if ($this->isColumnModified(CountrefPeer::NATFISHDB)) $criteria->add(CountrefPeer::NATFISHDB, $this->natfishdb);
        if ($this->isColumnModified(CountrefPeer::NATFISHDB2)) $criteria->add(CountrefPeer::NATFISHDB2, $this->natfishdb2);
        if ($this->isColumnModified(CountrefPeer::FACTBOOK)) $criteria->add(CountrefPeer::FACTBOOK, $this->factbook);
        if ($this->isColumnModified(CountrefPeer::NATFISHAUT)) $criteria->add(CountrefPeer::NATFISHAUT, $this->natfishaut);
        if ($this->isColumnModified(CountrefPeer::TRADENAMES)) $criteria->add(CountrefPeer::TRADENAMES, $this->tradenames);
        if ($this->isColumnModified(CountrefPeer::ENTERED)) $criteria->add(CountrefPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(CountrefPeer::DATEENTERED)) $criteria->add(CountrefPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(CountrefPeer::MODIFIED)) $criteria->add(CountrefPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(CountrefPeer::DATEMODIFIED)) $criteria->add(CountrefPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(CountrefPeer::EXPERT)) $criteria->add(CountrefPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(CountrefPeer::DATECHECKED)) $criteria->add(CountrefPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(CountrefPeer::GREEK_ORIGINAL)) $criteria->add(CountrefPeer::GREEK_ORIGINAL, $this->greek_original);
        if ($this->isColumnModified(CountrefPeer::GREEK)) $criteria->add(CountrefPeer::GREEK, $this->greek);
        if ($this->isColumnModified(CountrefPeer::RUSSIAN_ORIGINAL)) $criteria->add(CountrefPeer::RUSSIAN_ORIGINAL, $this->russian_original);
        if ($this->isColumnModified(CountrefPeer::RUSSIAN)) $criteria->add(CountrefPeer::RUSSIAN, $this->russian);
        if ($this->isColumnModified(CountrefPeer::FRENCH)) $criteria->add(CountrefPeer::FRENCH, $this->french);
        if ($this->isColumnModified(CountrefPeer::SPANISH)) $criteria->add(CountrefPeer::SPANISH, $this->spanish);
        if ($this->isColumnModified(CountrefPeer::GERMAN)) $criteria->add(CountrefPeer::GERMAN, $this->german);
        if ($this->isColumnModified(CountrefPeer::DUTCH)) $criteria->add(CountrefPeer::DUTCH, $this->dutch);
        if ($this->isColumnModified(CountrefPeer::PORTUGUESE)) $criteria->add(CountrefPeer::PORTUGUESE, $this->portuguese);
        if ($this->isColumnModified(CountrefPeer::ITALIAN)) $criteria->add(CountrefPeer::ITALIAN, $this->italian);
        if ($this->isColumnModified(CountrefPeer::SWEDISH)) $criteria->add(CountrefPeer::SWEDISH, $this->swedish);
        if ($this->isColumnModified(CountrefPeer::TS)) $criteria->add(CountrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(CountrefPeer::DATABASE_NAME);
        $criteria->add(CountrefPeer::C_CODE, $this->c_code);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getCCode();
    }

    /**
     * Generic method to set the primary key (c_code column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCCode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCCode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Countref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPaese($this->getPaese());
        $copyObj->setNote($this->getNote());
        $copyObj->setAbb($this->getAbb());
        $copyObj->setIsoCode($this->getIsoCode());
        $copyObj->setIso3alpha($this->getIso3alpha());
        $copyObj->setIso2alpha($this->getIso2alpha());
        $copyObj->setSaupCode($this->getSaupCode());
        $copyObj->setUsed($this->getUsed());
        $copyObj->setCapital($this->getCapital());
        $copyObj->setLatdeg($this->getLatdeg());
        $copyObj->setLatmin($this->getLatmin());
        $copyObj->setNorthsouth($this->getNorthsouth());
        $copyObj->setLongdeg($this->getLongdeg());
        $copyObj->setLongmin($this->getLongmin());
        $copyObj->setEastwest($this->getEastwest());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setPolarboreal($this->getPolarboreal());
        $copyObj->setTemperate($this->getTemperate());
        $copyObj->setSubtropical($this->getSubtropical());
        $copyObj->setTropical($this->getTropical());
        $copyObj->setLandlocked($this->getLandlocked());
        $copyObj->setGeographicarea($this->getGeographicarea());
        $copyObj->setRegion($this->getRegion());
        $copyObj->setContinent($this->getContinent());
        $copyObj->setAreacodeinland($this->getAreacodeinland());
        $copyObj->setFaoareainland($this->getFaoareainland());
        $copyObj->setAreacodemarinei($this->getAreacodemarinei());
        $copyObj->setFaoareamarinei($this->getFaoareamarinei());
        $copyObj->setAreacodemarineii($this->getAreacodemarineii());
        $copyObj->setFaoareamarineii($this->getFaoareamarineii());
        $copyObj->setAreacodemarineiii($this->getAreacodemarineiii());
        $copyObj->setFaoareamarineiii($this->getFaoareamarineiii());
        $copyObj->setAreacodemarineiv($this->getAreacodemarineiv());
        $copyObj->setFaoareamarineiv($this->getFaoareamarineiv());
        $copyObj->setAreacodemarinev($this->getAreacodemarinev());
        $copyObj->setFaoareamarinev($this->getFaoareamarinev());
        $copyObj->setPopulation($this->getPopulation());
        $copyObj->setPopulationyear($this->getPopulationyear());
        $copyObj->setPopulationrate($this->getPopulationrate());
        $copyObj->setPopulationref($this->getPopulationref());
        $copyObj->setCoastalpopulation($this->getCoastalpopulation());
        $copyObj->setCoastpopref($this->getCoastpopref());
        $copyObj->setArea($this->getArea());
        $copyObj->setCoastline($this->getCoastline());
        $copyObj->setCoastlineref($this->getCoastlineref());
        $copyObj->setShelfarea($this->getShelfarea());
        $copyObj->setShelfref($this->getShelfref());
        $copyObj->setEecarea($this->getEecarea());
        $copyObj->setEezref($this->getEezref());
        $copyObj->setLanguage($this->getLanguage());
        $copyObj->setCurrency($this->getCurrency());
        $copyObj->setMarinecount($this->getMarinecount());
        $copyObj->setMarinefamcount($this->getMarinefamcount());
        $copyObj->setCompletemarine($this->getCompletemarine());
        $copyObj->setMarinelit($this->getMarinelit());
        $copyObj->setMarinefamlit($this->getMarinefamlit());
        $copyObj->setCheckmarineref($this->getCheckmarineref());
        $copyObj->setMarineflag($this->getMarineflag());
        $copyObj->setFreshwatercount($this->getFreshwatercount());
        $copyObj->setFreshfamcount($this->getFreshfamcount());
        $copyObj->setCompletefresh($this->getCompletefresh());
        $copyObj->setFreshwaterlit($this->getFreshwaterlit());
        $copyObj->setFreshfamlit($this->getFreshfamlit());
        $copyObj->setCheckfreshref($this->getCheckfreshref());
        $copyObj->setFreshflag($this->getFreshflag());
        $copyObj->setTotalcount($this->getTotalcount());
        $copyObj->setTotalfamcount($this->getTotalfamcount());
        $copyObj->setTotalcomplete($this->getTotalcomplete());
        $copyObj->setTotallit($this->getTotallit());
        $copyObj->setTotalfamlit($this->getTotalfamlit());
        $copyObj->setTotalref($this->getTotalref());
        $copyObj->setLastupdate($this->getLastupdate());
        $copyObj->setMorphcountfresh($this->getMorphcountfresh());
        $copyObj->setOccurcountfresh($this->getOccurcountfresh());
        $copyObj->setPiccountfresh($this->getPiccountfresh());
        $copyObj->setGrowthcountfresh($this->getGrowthcountfresh());
        $copyObj->setFoodcountfresh($this->getFoodcountfresh());
        $copyObj->setDietcountfresh($this->getDietcountfresh());
        $copyObj->setReproductioncountfresh($this->getReproductioncountfresh());
        $copyObj->setSpawningcountfresh($this->getSpawningcountfresh());
        $copyObj->setMorphcountmarine($this->getMorphcountmarine());
        $copyObj->setOccurcountmarine($this->getOccurcountmarine());
        $copyObj->setPiccountmarine($this->getPiccountmarine());
        $copyObj->setGrowthcountmarine($this->getGrowthcountmarine());
        $copyObj->setFoodcountmarine($this->getFoodcountmarine());
        $copyObj->setDietcountmarine($this->getDietcountmarine());
        $copyObj->setReproductioncountmarine($this->getReproductioncountmarine());
        $copyObj->setSpawningcountmarine($this->getSpawningcountmarine());
        $copyObj->setLatdegfill($this->getLatdegfill());
        $copyObj->setLatminfill($this->getLatminfill());
        $copyObj->setNorthsouthfill($this->getNorthsouthfill());
        $copyObj->setLongdegfill($this->getLongdegfill());
        $copyObj->setLongminfill($this->getLongminfill());
        $copyObj->setEastwestfill($this->getEastwestfill());
        $copyObj->setMlatdegfill($this->getMlatdegfill());
        $copyObj->setMlatminfill($this->getMlatminfill());
        $copyObj->setMnorthsouthfill($this->getMnorthsouthfill());
        $copyObj->setMlongdegfill($this->getMlongdegfill());
        $copyObj->setMlongminfill($this->getMlongminfill());
        $copyObj->setMeastwestfill($this->getMeastwestfill());
        $copyObj->setMlatdegfill2($this->getMlatdegfill2());
        $copyObj->setMlatminfill2($this->getMlatminfill2());
        $copyObj->setMnorthsouthfill2($this->getMnorthsouthfill2());
        $copyObj->setMlongdegfill2($this->getMlongdegfill2());
        $copyObj->setMlongminfill2($this->getMlongminfill2());
        $copyObj->setMeastwestfill2($this->getMeastwestfill2());
        $copyObj->setMlatdegfill3($this->getMlatdegfill3());
        $copyObj->setMlatminfill3($this->getMlatminfill3());
        $copyObj->setMnorthsouthfill3($this->getMnorthsouthfill3());
        $copyObj->setMlongdegfill3($this->getMlongdegfill3());
        $copyObj->setMlongminfill3($this->getMlongminfill3());
        $copyObj->setMeastwestfill3($this->getMeastwestfill3());
        $copyObj->setMlatdegfill4($this->getMlatdegfill4());
        $copyObj->setMlatminfill4($this->getMlatminfill4());
        $copyObj->setMnorthsouthfill4($this->getMnorthsouthfill4());
        $copyObj->setMlongdegfill4($this->getMlongdegfill4());
        $copyObj->setMlongminfill4($this->getMlongminfill4());
        $copyObj->setMeastwestfill4($this->getMeastwestfill4());
        $copyObj->setMlatdegfill5($this->getMlatdegfill5());
        $copyObj->setMlatminfill5($this->getMlatminfill5());
        $copyObj->setMnorthsouthfill5($this->getMnorthsouthfill5());
        $copyObj->setMlongdegfill5($this->getMlongdegfill5());
        $copyObj->setMlongminfill5($this->getMlongminfill5());
        $copyObj->setMeastwestfill5($this->getMeastwestfill5());
        $copyObj->setNorthernlatitude($this->getNorthernlatitude());
        $copyObj->setNorthernlatitudens($this->getNorthernlatitudens());
        $copyObj->setSouthernlatitude($this->getSouthernlatitude());
        $copyObj->setSouthernlatitudens($this->getSouthernlatitudens());
        $copyObj->setWesternlongitude($this->getWesternlongitude());
        $copyObj->setWesternlongitudeew($this->getWesternlongitudeew());
        $copyObj->setEasternlongitude($this->getEasternlongitude());
        $copyObj->setEasternlongitudeew($this->getEasternlongitudeew());
        $copyObj->setCenterlat($this->getCenterlat());
        $copyObj->setCenterlong($this->getCenterlong());
        $copyObj->setOtherlanguage($this->getOtherlanguage());
        $copyObj->setGeography($this->getGeography());
        $copyObj->setGeographyref($this->getGeographyref());
        $copyObj->setHydrography($this->getHydrography());
        $copyObj->setHydrographyref($this->getHydrographyref());
        $copyObj->setCommentfresh($this->getCommentfresh());
        $copyObj->setReffresh1($this->getReffresh1());
        $copyObj->setReffresh2($this->getReffresh2());
        $copyObj->setReffresh3($this->getReffresh3());
        $copyObj->setFreshprimary($this->getFreshprimary());
        $copyObj->setFreshsecondary($this->getFreshsecondary());
        $copyObj->setFreshinto($this->getFreshinto());
        $copyObj->setInfisheriesreported($this->getInfisheriesreported());
        $copyObj->setInfisheriespotential($this->getInfisheriespotential());
        $copyObj->setInaquareported($this->getInaquareported());
        $copyObj->setInaquapotential($this->getInaquapotential());
        $copyObj->setExportreported($this->getExportreported());
        $copyObj->setExportpotential($this->getExportpotential());
        $copyObj->setSportreported($this->getSportreported());
        $copyObj->setSportpotential($this->getSportpotential());
        $copyObj->setEndemicreported($this->getEndemicreported());
        $copyObj->setEndemicpotential($this->getEndemicpotential());
        $copyObj->setThreatened($this->getThreatened());
        $copyObj->setProtectedreported($this->getProtectedreported());
        $copyObj->setProtectedpotential($this->getProtectedpotential());
        $copyObj->setAcp($this->getAcp());
        $copyObj->setDeveloped($this->getDeveloped());
        $copyObj->setMarine($this->getMarine());
        $copyObj->setBrackish($this->getBrackish());
        $copyObj->setMarineinto($this->getMarineinto());
        $copyObj->setMarineinfisheriesreported($this->getMarineinfisheriesreported());
        $copyObj->setMarineinfisheriespotential($this->getMarineinfisheriespotential());
        $copyObj->setMarineinaquareported($this->getMarineinaquareported());
        $copyObj->setMarineinaquapotential($this->getMarineinaquapotential());
        $copyObj->setMarineexportreported($this->getMarineexportreported());
        $copyObj->setMarineexportpotential($this->getMarineexportpotential());
        $copyObj->setMarinesportreported($this->getMarinesportreported());
        $copyObj->setMarinesportpotential($this->getMarinesportpotential());
        $copyObj->setMarineendemicreported($this->getMarineendemicreported());
        $copyObj->setMarineendemicpotential($this->getMarineendemicpotential());
        $copyObj->setMarinethreatened($this->getMarinethreatened());
        $copyObj->setMarineprotectedreported($this->getMarineprotectedreported());
        $copyObj->setMarineprotectedpotential($this->getMarineprotectedpotential());
        $copyObj->setNatfishdb($this->getNatfishdb());
        $copyObj->setNatfishdb2($this->getNatfishdb2());
        $copyObj->setFactbook($this->getFactbook());
        $copyObj->setNatfishaut($this->getNatfishaut());
        $copyObj->setTradenames($this->getTradenames());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setGreekOriginal($this->getGreekOriginal());
        $copyObj->setGreek($this->getGreek());
        $copyObj->setRussianOriginal($this->getRussianOriginal());
        $copyObj->setRussian($this->getRussian());
        $copyObj->setFrench($this->getFrench());
        $copyObj->setSpanish($this->getSpanish());
        $copyObj->setGerman($this->getGerman());
        $copyObj->setDutch($this->getDutch());
        $copyObj->setPortuguese($this->getPortuguese());
        $copyObj->setItalian($this->getItalian());
        $copyObj->setSwedish($this->getSwedish());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCCode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Countref Clone of current object.
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
     * @return CountrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CountrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->paese = null;
        $this->note = null;
        $this->c_code = null;
        $this->abb = null;
        $this->iso_code = null;
        $this->iso3alpha = null;
        $this->iso2alpha = null;
        $this->saup_code = null;
        $this->used = null;
        $this->capital = null;
        $this->latdeg = null;
        $this->latmin = null;
        $this->northsouth = null;
        $this->longdeg = null;
        $this->longmin = null;
        $this->eastwest = null;
        $this->remark = null;
        $this->polarboreal = null;
        $this->temperate = null;
        $this->subtropical = null;
        $this->tropical = null;
        $this->landlocked = null;
        $this->geographicarea = null;
        $this->region = null;
        $this->continent = null;
        $this->areacodeinland = null;
        $this->faoareainland = null;
        $this->areacodemarinei = null;
        $this->faoareamarinei = null;
        $this->areacodemarineii = null;
        $this->faoareamarineii = null;
        $this->areacodemarineiii = null;
        $this->faoareamarineiii = null;
        $this->areacodemarineiv = null;
        $this->faoareamarineiv = null;
        $this->areacodemarinev = null;
        $this->faoareamarinev = null;
        $this->population = null;
        $this->populationyear = null;
        $this->populationrate = null;
        $this->populationref = null;
        $this->coastalpopulation = null;
        $this->coastpopref = null;
        $this->area = null;
        $this->coastline = null;
        $this->coastlineref = null;
        $this->shelfarea = null;
        $this->shelfref = null;
        $this->eecarea = null;
        $this->eezref = null;
        $this->language = null;
        $this->currency = null;
        $this->marinecount = null;
        $this->marinefamcount = null;
        $this->completemarine = null;
        $this->marinelit = null;
        $this->marinefamlit = null;
        $this->checkmarineref = null;
        $this->marineflag = null;
        $this->freshwatercount = null;
        $this->freshfamcount = null;
        $this->completefresh = null;
        $this->freshwaterlit = null;
        $this->freshfamlit = null;
        $this->checkfreshref = null;
        $this->freshflag = null;
        $this->totalcount = null;
        $this->totalfamcount = null;
        $this->totalcomplete = null;
        $this->totallit = null;
        $this->totalfamlit = null;
        $this->totalref = null;
        $this->lastupdate = null;
        $this->morphcountfresh = null;
        $this->occurcountfresh = null;
        $this->piccountfresh = null;
        $this->growthcountfresh = null;
        $this->foodcountfresh = null;
        $this->dietcountfresh = null;
        $this->reproductioncountfresh = null;
        $this->spawningcountfresh = null;
        $this->morphcountmarine = null;
        $this->occurcountmarine = null;
        $this->piccountmarine = null;
        $this->growthcountmarine = null;
        $this->foodcountmarine = null;
        $this->dietcountmarine = null;
        $this->reproductioncountmarine = null;
        $this->spawningcountmarine = null;
        $this->latdegfill = null;
        $this->latminfill = null;
        $this->northsouthfill = null;
        $this->longdegfill = null;
        $this->longminfill = null;
        $this->eastwestfill = null;
        $this->mlatdegfill = null;
        $this->mlatminfill = null;
        $this->mnorthsouthfill = null;
        $this->mlongdegfill = null;
        $this->mlongminfill = null;
        $this->meastwestfill = null;
        $this->mlatdegfill2 = null;
        $this->mlatminfill2 = null;
        $this->mnorthsouthfill2 = null;
        $this->mlongdegfill2 = null;
        $this->mlongminfill2 = null;
        $this->meastwestfill2 = null;
        $this->mlatdegfill3 = null;
        $this->mlatminfill3 = null;
        $this->mnorthsouthfill3 = null;
        $this->mlongdegfill3 = null;
        $this->mlongminfill3 = null;
        $this->meastwestfill3 = null;
        $this->mlatdegfill4 = null;
        $this->mlatminfill4 = null;
        $this->mnorthsouthfill4 = null;
        $this->mlongdegfill4 = null;
        $this->mlongminfill4 = null;
        $this->meastwestfill4 = null;
        $this->mlatdegfill5 = null;
        $this->mlatminfill5 = null;
        $this->mnorthsouthfill5 = null;
        $this->mlongdegfill5 = null;
        $this->mlongminfill5 = null;
        $this->meastwestfill5 = null;
        $this->northernlatitude = null;
        $this->northernlatitudens = null;
        $this->southernlatitude = null;
        $this->southernlatitudens = null;
        $this->westernlongitude = null;
        $this->westernlongitudeew = null;
        $this->easternlongitude = null;
        $this->easternlongitudeew = null;
        $this->centerlat = null;
        $this->centerlong = null;
        $this->otherlanguage = null;
        $this->geography = null;
        $this->geographyref = null;
        $this->hydrography = null;
        $this->hydrographyref = null;
        $this->commentfresh = null;
        $this->reffresh1 = null;
        $this->reffresh2 = null;
        $this->reffresh3 = null;
        $this->freshprimary = null;
        $this->freshsecondary = null;
        $this->freshinto = null;
        $this->infisheriesreported = null;
        $this->infisheriespotential = null;
        $this->inaquareported = null;
        $this->inaquapotential = null;
        $this->exportreported = null;
        $this->exportpotential = null;
        $this->sportreported = null;
        $this->sportpotential = null;
        $this->endemicreported = null;
        $this->endemicpotential = null;
        $this->threatened = null;
        $this->protectedreported = null;
        $this->protectedpotential = null;
        $this->acp = null;
        $this->developed = null;
        $this->marine = null;
        $this->brackish = null;
        $this->marineinto = null;
        $this->marineinfisheriesreported = null;
        $this->marineinfisheriespotential = null;
        $this->marineinaquareported = null;
        $this->marineinaquapotential = null;
        $this->marineexportreported = null;
        $this->marineexportpotential = null;
        $this->marinesportreported = null;
        $this->marinesportpotential = null;
        $this->marineendemicreported = null;
        $this->marineendemicpotential = null;
        $this->marinethreatened = null;
        $this->marineprotectedreported = null;
        $this->marineprotectedpotential = null;
        $this->natfishdb = null;
        $this->natfishdb2 = null;
        $this->factbook = null;
        $this->natfishaut = null;
        $this->tradenames = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->greek_original = null;
        $this->greek = null;
        $this->russian_original = null;
        $this->russian = null;
        $this->french = null;
        $this->spanish = null;
        $this->german = null;
        $this->dutch = null;
        $this->portuguese = null;
        $this->italian = null;
        $this->swedish = null;
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
        return (string) $this->exportTo(CountrefPeer::DEFAULT_STRING_FORMAT);
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
