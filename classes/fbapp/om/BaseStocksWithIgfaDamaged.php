<?php


/**
 * Base class that represents a row from the 'stocks_with_igfa_damaged' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseStocksWithIgfaDamaged extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StocksWithIgfaDamagedPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StocksWithIgfaDamagedPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the stockdefs field.
     * @var        string
     */
    protected $stockdefs;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the level field.
     * @var        string
     */
    protected $level;

    /**
     * The value for the localunique field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $localunique;

    /**
     * The value for the iucn_code field.
     * @var        string
     */
    protected $iucn_code;

    /**
     * The value for the iucn_assessment field.
     * @var        string
     */
    protected $iucn_assessment;

    /**
     * The value for the protected field.
     * @var        string
     */
    protected $protected;

    /**
     * The value for the stocksrefno field.
     * @var        int
     */
    protected $stocksrefno;

    /**
     * The value for the northernmost field.
     * @var        int
     */
    protected $northernmost;

    /**
     * The value for the northsouthn field.
     * @var        string
     */
    protected $northsouthn;

    /**
     * The value for the southermost field.
     * @var        int
     */
    protected $southermost;

    /**
     * The value for the northsouths field.
     * @var        string
     */
    protected $northsouths;

    /**
     * The value for the westernmost field.
     * @var        int
     */
    protected $westernmost;

    /**
     * The value for the westeastw field.
     * @var        string
     */
    protected $westeastw;

    /**
     * The value for the easternmost field.
     * @var        int
     */
    protected $easternmost;

    /**
     * The value for the westeaste field.
     * @var        string
     */
    protected $westeaste;

    /**
     * The value for the boundingref field.
     * @var        int
     */
    protected $boundingref;

    /**
     * The value for the boundingmethod field.
     * @var        string
     */
    protected $boundingmethod;

    /**
     * The value for the tempmin field.
     * @var        double
     */
    protected $tempmin;

    /**
     * The value for the tempmax field.
     * @var        double
     */
    protected $tempmax;

    /**
     * The value for the tempref field.
     * @var        int
     */
    protected $tempref;

    /**
     * The value for the envtemp field.
     * @var        string
     */
    protected $envtemp;

    /**
     * The value for the resilience field.
     * @var        string
     */
    protected $resilience;

    /**
     * The value for the resilienceremark field.
     * @var        string
     */
    protected $resilienceremark;

    /**
     * The value for the phmin field.
     * @var        double
     */
    protected $phmin;

    /**
     * The value for the phmax field.
     * @var        double
     */
    protected $phmax;

    /**
     * The value for the phref field.
     * @var        int
     */
    protected $phref;

    /**
     * The value for the dhmin field.
     * @var        double
     */
    protected $dhmin;

    /**
     * The value for the dhmax field.
     * @var        double
     */
    protected $dhmax;

    /**
     * The value for the dhref field.
     * @var        int
     */
    protected $dhref;

    /**
     * The value for the genbankid field.
     * @var        int
     */
    protected $genbankid;

    /**
     * The value for the rfeid field.
     * @var        string
     */
    protected $rfeid;

    /**
     * The value for the figis_id field.
     * @var        int
     */
    protected $figis_id;

    /**
     * The value for the ecotoxid field.
     * @var        int
     */
    protected $ecotoxid;

    /**
     * The value for the scrfa_data field.
     * @var        string
     */
    protected $scrfa_data;

    /**
     * The value for the gmad_id field.
     * @var        int
     */
    protected $gmad_id;

    /**
     * The value for the saup field.
     * @var        string
     */
    protected $saup;

    /**
     * The value for the saup_id field.
     * @var        int
     */
    protected $saup_id;

    /**
     * The value for the saup_group field.
     * @var        int
     */
    protected $saup_group;

    /**
     * The value for the ausmuseum field.
     * @var        int
     */
    protected $ausmuseum;

    /**
     * The value for the fishtrace field.
     * @var        string
     */
    protected $fishtrace;

    /**
     * The value for the iucn_id field.
     * @var        int
     */
    protected $iucn_id;

    /**
     * The value for the iucn_group field.
     * @var        string
     */
    protected $iucn_group;

    /**
     * The value for the bold_id field.
     * @var        int
     */
    protected $bold_id;

    /**
     * The value for the igfaname field.
     * @var        string
     */
    protected $igfaname;

    /**
     * The value for the essayid field.
     * @var        int
     */
    protected $essayid;

    /**
     * The value for the aquamaps field.
     * @var        string
     */
    protected $aquamaps;

    /**
     * The value for the morphology field.
     * @var        string
     */
    protected $morphology;

    /**
     * The value for the occurrence field.
     * @var        string
     */
    protected $occurrence;

    /**
     * The value for the strains field.
     * @var        string
     */
    protected $strains;

    /**
     * The value for the ecology field.
     * @var        string
     */
    protected $ecology;

    /**
     * The value for the diseases field.
     * @var        string
     */
    protected $diseases;

    /**
     * The value for the abnorm field.
     * @var        string
     */
    protected $abnorm;

    /**
     * The value for the metabolism field.
     * @var        string
     */
    protected $metabolism;

    /**
     * The value for the predators field.
     * @var        string
     */
    protected $predators;

    /**
     * The value for the spawning field.
     * @var        string
     */
    protected $spawning;

    /**
     * The value for the speed field.
     * @var        string
     */
    protected $speed;

    /**
     * The value for the diet field.
     * @var        string
     */
    protected $diet;

    /**
     * The value for the eggs field.
     * @var        string
     */
    protected $eggs;

    /**
     * The value for the eggdevelop field.
     * @var        string
     */
    protected $eggdevelop;

    /**
     * The value for the food field.
     * @var        string
     */
    protected $food;

    /**
     * The value for the larvae field.
     * @var        string
     */
    protected $larvae;

    /**
     * The value for the larvdyn field.
     * @var        string
     */
    protected $larvdyn;

    /**
     * The value for the larvspeed field.
     * @var        string
     */
    protected $larvspeed;

    /**
     * The value for the popdyn field.
     * @var        string
     */
    protected $popdyn;

    /**
     * The value for the lengthweight field.
     * @var        string
     */
    protected $lengthweight;

    /**
     * The value for the gillarea field.
     * @var        string
     */
    protected $gillarea;

    /**
     * The value for the maturity field.
     * @var        string
     */
    protected $maturity;

    /**
     * The value for the matsizes field.
     * @var        string
     */
    protected $matsizes;

    /**
     * The value for the processing field.
     * @var        string
     */
    protected $processing;

    /**
     * The value for the reproduction field.
     * @var        string
     */
    protected $reproduction;

    /**
     * The value for the introductions field.
     * @var        string
     */
    protected $introductions;

    /**
     * The value for the abundance field.
     * @var        string
     */
    protected $abundance;

    /**
     * The value for the vision field.
     * @var        string
     */
    protected $vision;

    /**
     * The value for the genetics field.
     * @var        string
     */
    protected $genetics;

    /**
     * The value for the aquaculture field.
     * @var        string
     */
    protected $aquaculture;

    /**
     * The value for the countrycomp field.
     * @var        string
     */
    protected $countrycomp;

    /**
     * The value for the allele field.
     * @var        string
     */
    protected $allele;

    /**
     * The value for the geneticstudies field.
     * @var        string
     */
    protected $geneticstudies;

    /**
     * The value for the ration field.
     * @var        string
     */
    protected $ration;

    /**
     * The value for the foods field.
     * @var        string
     */
    protected $foods;

    /**
     * The value for the ecotoxicology field.
     * @var        string
     */
    protected $ecotoxicology;

    /**
     * The value for the catches field.
     * @var        string
     */
    protected $catches;

    /**
     * The value for the faoaqua field.
     * @var        string
     */
    protected $faoaqua;

    /**
     * The value for the lengthrelations field.
     * @var        string
     */
    protected $lengthrelations;

    /**
     * The value for the lengthfrequency field.
     * @var        string
     */
    protected $lengthfrequency;

    /**
     * The value for the sounds field.
     * @var        string
     */
    protected $sounds;

    /**
     * The value for the broodstock field.
     * @var        string
     */
    protected $broodstock;

    /**
     * The value for the eggnursery field.
     * @var        string
     */
    protected $eggnursery;

    /**
     * The value for the frynursery field.
     * @var        string
     */
    protected $frynursery;

    /**
     * The value for the larvalnursery field.
     * @var        string
     */
    protected $larvalnursery;

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
        $this->localunique = '';
    }

    /**
     * Initializes internal state of BaseStocksWithIgfaDamaged object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [stockdefs] column value.
     *
     * @return string
     */
    public function getStockdefs()
    {

        return $this->stockdefs;
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
     * Get the [level] column value.
     *
     * @return string
     */
    public function getLevel()
    {

        return $this->level;
    }

    /**
     * Get the [localunique] column value.
     *
     * @return string
     */
    public function getLocalunique()
    {

        return $this->localunique;
    }

    /**
     * Get the [iucn_code] column value.
     *
     * @return string
     */
    public function getIucnCode()
    {

        return $this->iucn_code;
    }

    /**
     * Get the [iucn_assessment] column value.
     *
     * @return string
     */
    public function getIucnAssessment()
    {

        return $this->iucn_assessment;
    }

    /**
     * Get the [protected] column value.
     *
     * @return string
     */
    public function getProtected()
    {

        return $this->protected;
    }

    /**
     * Get the [stocksrefno] column value.
     *
     * @return int
     */
    public function getStocksrefno()
    {

        return $this->stocksrefno;
    }

    /**
     * Get the [northernmost] column value.
     *
     * @return int
     */
    public function getNorthernmost()
    {

        return $this->northernmost;
    }

    /**
     * Get the [northsouthn] column value.
     *
     * @return string
     */
    public function getNorthsouthn()
    {

        return $this->northsouthn;
    }

    /**
     * Get the [southermost] column value.
     *
     * @return int
     */
    public function getSouthermost()
    {

        return $this->southermost;
    }

    /**
     * Get the [northsouths] column value.
     *
     * @return string
     */
    public function getNorthsouths()
    {

        return $this->northsouths;
    }

    /**
     * Get the [westernmost] column value.
     *
     * @return int
     */
    public function getWesternmost()
    {

        return $this->westernmost;
    }

    /**
     * Get the [westeastw] column value.
     *
     * @return string
     */
    public function getWesteastw()
    {

        return $this->westeastw;
    }

    /**
     * Get the [easternmost] column value.
     *
     * @return int
     */
    public function getEasternmost()
    {

        return $this->easternmost;
    }

    /**
     * Get the [westeaste] column value.
     *
     * @return string
     */
    public function getWesteaste()
    {

        return $this->westeaste;
    }

    /**
     * Get the [boundingref] column value.
     *
     * @return int
     */
    public function getBoundingref()
    {

        return $this->boundingref;
    }

    /**
     * Get the [boundingmethod] column value.
     *
     * @return string
     */
    public function getBoundingmethod()
    {

        return $this->boundingmethod;
    }

    /**
     * Get the [tempmin] column value.
     *
     * @return double
     */
    public function getTempmin()
    {

        return $this->tempmin;
    }

    /**
     * Get the [tempmax] column value.
     *
     * @return double
     */
    public function getTempmax()
    {

        return $this->tempmax;
    }

    /**
     * Get the [tempref] column value.
     *
     * @return int
     */
    public function getTempref()
    {

        return $this->tempref;
    }

    /**
     * Get the [envtemp] column value.
     *
     * @return string
     */
    public function getEnvtemp()
    {

        return $this->envtemp;
    }

    /**
     * Get the [resilience] column value.
     *
     * @return string
     */
    public function getResilience()
    {

        return $this->resilience;
    }

    /**
     * Get the [resilienceremark] column value.
     *
     * @return string
     */
    public function getResilienceremark()
    {

        return $this->resilienceremark;
    }

    /**
     * Get the [phmin] column value.
     *
     * @return double
     */
    public function getPhmin()
    {

        return $this->phmin;
    }

    /**
     * Get the [phmax] column value.
     *
     * @return double
     */
    public function getPhmax()
    {

        return $this->phmax;
    }

    /**
     * Get the [phref] column value.
     *
     * @return int
     */
    public function getPhref()
    {

        return $this->phref;
    }

    /**
     * Get the [dhmin] column value.
     *
     * @return double
     */
    public function getDhmin()
    {

        return $this->dhmin;
    }

    /**
     * Get the [dhmax] column value.
     *
     * @return double
     */
    public function getDhmax()
    {

        return $this->dhmax;
    }

    /**
     * Get the [dhref] column value.
     *
     * @return int
     */
    public function getDhref()
    {

        return $this->dhref;
    }

    /**
     * Get the [genbankid] column value.
     *
     * @return int
     */
    public function getGenbankid()
    {

        return $this->genbankid;
    }

    /**
     * Get the [rfeid] column value.
     *
     * @return string
     */
    public function getRfeid()
    {

        return $this->rfeid;
    }

    /**
     * Get the [figis_id] column value.
     *
     * @return int
     */
    public function getFigisId()
    {

        return $this->figis_id;
    }

    /**
     * Get the [ecotoxid] column value.
     *
     * @return int
     */
    public function getEcotoxid()
    {

        return $this->ecotoxid;
    }

    /**
     * Get the [scrfa_data] column value.
     *
     * @return string
     */
    public function getScrfaData()
    {

        return $this->scrfa_data;
    }

    /**
     * Get the [gmad_id] column value.
     *
     * @return int
     */
    public function getGmadId()
    {

        return $this->gmad_id;
    }

    /**
     * Get the [saup] column value.
     *
     * @return string
     */
    public function getSaup()
    {

        return $this->saup;
    }

    /**
     * Get the [saup_id] column value.
     *
     * @return int
     */
    public function getSaupId()
    {

        return $this->saup_id;
    }

    /**
     * Get the [saup_group] column value.
     *
     * @return int
     */
    public function getSaupGroup()
    {

        return $this->saup_group;
    }

    /**
     * Get the [ausmuseum] column value.
     *
     * @return int
     */
    public function getAusmuseum()
    {

        return $this->ausmuseum;
    }

    /**
     * Get the [fishtrace] column value.
     *
     * @return string
     */
    public function getFishtrace()
    {

        return $this->fishtrace;
    }

    /**
     * Get the [iucn_id] column value.
     *
     * @return int
     */
    public function getIucnId()
    {

        return $this->iucn_id;
    }

    /**
     * Get the [iucn_group] column value.
     *
     * @return string
     */
    public function getIucnGroup()
    {

        return $this->iucn_group;
    }

    /**
     * Get the [bold_id] column value.
     *
     * @return int
     */
    public function getBoldId()
    {

        return $this->bold_id;
    }

    /**
     * Get the [igfaname] column value.
     *
     * @return string
     */
    public function getIgfaname()
    {

        return $this->igfaname;
    }

    /**
     * Get the [essayid] column value.
     *
     * @return int
     */
    public function getEssayid()
    {

        return $this->essayid;
    }

    /**
     * Get the [aquamaps] column value.
     *
     * @return string
     */
    public function getAquamaps()
    {

        return $this->aquamaps;
    }

    /**
     * Get the [morphology] column value.
     *
     * @return string
     */
    public function getMorphology()
    {

        return $this->morphology;
    }

    /**
     * Get the [occurrence] column value.
     *
     * @return string
     */
    public function getOccurrence()
    {

        return $this->occurrence;
    }

    /**
     * Get the [strains] column value.
     *
     * @return string
     */
    public function getStrains()
    {

        return $this->strains;
    }

    /**
     * Get the [ecology] column value.
     *
     * @return string
     */
    public function getEcology()
    {

        return $this->ecology;
    }

    /**
     * Get the [diseases] column value.
     *
     * @return string
     */
    public function getDiseases()
    {

        return $this->diseases;
    }

    /**
     * Get the [abnorm] column value.
     *
     * @return string
     */
    public function getAbnorm()
    {

        return $this->abnorm;
    }

    /**
     * Get the [metabolism] column value.
     *
     * @return string
     */
    public function getMetabolism()
    {

        return $this->metabolism;
    }

    /**
     * Get the [predators] column value.
     *
     * @return string
     */
    public function getPredators()
    {

        return $this->predators;
    }

    /**
     * Get the [spawning] column value.
     *
     * @return string
     */
    public function getSpawning()
    {

        return $this->spawning;
    }

    /**
     * Get the [speed] column value.
     *
     * @return string
     */
    public function getSpeed()
    {

        return $this->speed;
    }

    /**
     * Get the [diet] column value.
     *
     * @return string
     */
    public function getDiet()
    {

        return $this->diet;
    }

    /**
     * Get the [eggs] column value.
     *
     * @return string
     */
    public function getEggs()
    {

        return $this->eggs;
    }

    /**
     * Get the [eggdevelop] column value.
     *
     * @return string
     */
    public function getEggdevelop()
    {

        return $this->eggdevelop;
    }

    /**
     * Get the [food] column value.
     *
     * @return string
     */
    public function getFood()
    {

        return $this->food;
    }

    /**
     * Get the [larvae] column value.
     *
     * @return string
     */
    public function getLarvae()
    {

        return $this->larvae;
    }

    /**
     * Get the [larvdyn] column value.
     *
     * @return string
     */
    public function getLarvdyn()
    {

        return $this->larvdyn;
    }

    /**
     * Get the [larvspeed] column value.
     *
     * @return string
     */
    public function getLarvspeed()
    {

        return $this->larvspeed;
    }

    /**
     * Get the [popdyn] column value.
     *
     * @return string
     */
    public function getPopdyn()
    {

        return $this->popdyn;
    }

    /**
     * Get the [lengthweight] column value.
     *
     * @return string
     */
    public function getLengthweight()
    {

        return $this->lengthweight;
    }

    /**
     * Get the [gillarea] column value.
     *
     * @return string
     */
    public function getGillarea()
    {

        return $this->gillarea;
    }

    /**
     * Get the [maturity] column value.
     *
     * @return string
     */
    public function getMaturity()
    {

        return $this->maturity;
    }

    /**
     * Get the [matsizes] column value.
     *
     * @return string
     */
    public function getMatsizes()
    {

        return $this->matsizes;
    }

    /**
     * Get the [processing] column value.
     *
     * @return string
     */
    public function getProcessing()
    {

        return $this->processing;
    }

    /**
     * Get the [reproduction] column value.
     *
     * @return string
     */
    public function getReproduction()
    {

        return $this->reproduction;
    }

    /**
     * Get the [introductions] column value.
     *
     * @return string
     */
    public function getIntroductions()
    {

        return $this->introductions;
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
     * Get the [vision] column value.
     *
     * @return string
     */
    public function getVision()
    {

        return $this->vision;
    }

    /**
     * Get the [genetics] column value.
     *
     * @return string
     */
    public function getGenetics()
    {

        return $this->genetics;
    }

    /**
     * Get the [aquaculture] column value.
     *
     * @return string
     */
    public function getAquaculture()
    {

        return $this->aquaculture;
    }

    /**
     * Get the [countrycomp] column value.
     *
     * @return string
     */
    public function getCountrycomp()
    {

        return $this->countrycomp;
    }

    /**
     * Get the [allele] column value.
     *
     * @return string
     */
    public function getAllele()
    {

        return $this->allele;
    }

    /**
     * Get the [geneticstudies] column value.
     *
     * @return string
     */
    public function getGeneticstudies()
    {

        return $this->geneticstudies;
    }

    /**
     * Get the [ration] column value.
     *
     * @return string
     */
    public function getRation()
    {

        return $this->ration;
    }

    /**
     * Get the [foods] column value.
     *
     * @return string
     */
    public function getFoods()
    {

        return $this->foods;
    }

    /**
     * Get the [ecotoxicology] column value.
     *
     * @return string
     */
    public function getEcotoxicology()
    {

        return $this->ecotoxicology;
    }

    /**
     * Get the [catches] column value.
     *
     * @return string
     */
    public function getCatches()
    {

        return $this->catches;
    }

    /**
     * Get the [faoaqua] column value.
     *
     * @return string
     */
    public function getFaoaqua()
    {

        return $this->faoaqua;
    }

    /**
     * Get the [lengthrelations] column value.
     *
     * @return string
     */
    public function getLengthrelations()
    {

        return $this->lengthrelations;
    }

    /**
     * Get the [lengthfrequency] column value.
     *
     * @return string
     */
    public function getLengthfrequency()
    {

        return $this->lengthfrequency;
    }

    /**
     * Get the [sounds] column value.
     *
     * @return string
     */
    public function getSounds()
    {

        return $this->sounds;
    }

    /**
     * Get the [broodstock] column value.
     *
     * @return string
     */
    public function getBroodstock()
    {

        return $this->broodstock;
    }

    /**
     * Get the [eggnursery] column value.
     *
     * @return string
     */
    public function getEggnursery()
    {

        return $this->eggnursery;
    }

    /**
     * Get the [frynursery] column value.
     *
     * @return string
     */
    public function getFrynursery()
    {

        return $this->frynursery;
    }

    /**
     * Get the [larvalnursery] column value.
     *
     * @return string
     */
    public function getLarvalnursery()
    {

        return $this->larvalnursery;
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
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [stockdefs] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setStockdefs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->stockdefs !== $v) {
            $this->stockdefs = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::STOCKDEFS;
        }


        return $this;
    } // setStockdefs()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [level] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->level !== $v) {
            $this->level = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LEVEL;
        }


        return $this;
    } // setLevel()

    /**
     * Set the value of [localunique] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLocalunique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localunique !== $v) {
            $this->localunique = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LOCALUNIQUE;
        }


        return $this;
    } // setLocalunique()

    /**
     * Set the value of [iucn_code] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setIucnCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iucn_code !== $v) {
            $this->iucn_code = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::IUCN_CODE;
        }


        return $this;
    } // setIucnCode()

    /**
     * Set the value of [iucn_assessment] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setIucnAssessment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iucn_assessment !== $v) {
            $this->iucn_assessment = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT;
        }


        return $this;
    } // setIucnAssessment()

    /**
     * Set the value of [protected] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setProtected($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->protected !== $v) {
            $this->protected = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::PROTECTEDSTOCK;
        }


        return $this;
    } // setProtected()

    /**
     * Set the value of [stocksrefno] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setStocksrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stocksrefno !== $v) {
            $this->stocksrefno = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::STOCKSREFNO;
        }


        return $this;
    } // setStocksrefno()

    /**
     * Set the value of [northernmost] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setNorthernmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->northernmost !== $v) {
            $this->northernmost = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::NORTHERNMOST;
        }


        return $this;
    } // setNorthernmost()

    /**
     * Set the value of [northsouthn] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setNorthsouthn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouthn !== $v) {
            $this->northsouthn = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::NORTHSOUTHN;
        }


        return $this;
    } // setNorthsouthn()

    /**
     * Set the value of [southermost] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSouthermost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southermost !== $v) {
            $this->southermost = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SOUTHERMOST;
        }


        return $this;
    } // setSouthermost()

    /**
     * Set the value of [northsouths] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setNorthsouths($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->northsouths !== $v) {
            $this->northsouths = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::NORTHSOUTHS;
        }


        return $this;
    } // setNorthsouths()

    /**
     * Set the value of [westernmost] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setWesternmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->westernmost !== $v) {
            $this->westernmost = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::WESTERNMOST;
        }


        return $this;
    } // setWesternmost()

    /**
     * Set the value of [westeastw] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setWesteastw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westeastw !== $v) {
            $this->westeastw = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::WESTEASTW;
        }


        return $this;
    } // setWesteastw()

    /**
     * Set the value of [easternmost] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEasternmost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->easternmost !== $v) {
            $this->easternmost = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::EASTERNMOST;
        }


        return $this;
    } // setEasternmost()

    /**
     * Set the value of [westeaste] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setWesteaste($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->westeaste !== $v) {
            $this->westeaste = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::WESTEASTE;
        }


        return $this;
    } // setWesteaste()

    /**
     * Set the value of [boundingref] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setBoundingref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boundingref !== $v) {
            $this->boundingref = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::BOUNDINGREF;
        }


        return $this;
    } // setBoundingref()

    /**
     * Set the value of [boundingmethod] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setBoundingmethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->boundingmethod !== $v) {
            $this->boundingmethod = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::BOUNDINGMETHOD;
        }


        return $this;
    } // setBoundingmethod()

    /**
     * Set the value of [tempmin] column.
     *
     * @param  double $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setTempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmin !== $v) {
            $this->tempmin = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::TEMPMIN;
        }


        return $this;
    } // setTempmin()

    /**
     * Set the value of [tempmax] column.
     *
     * @param  double $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setTempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->tempmax !== $v) {
            $this->tempmax = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::TEMPMAX;
        }


        return $this;
    } // setTempmax()

    /**
     * Set the value of [tempref] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setTempref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tempref !== $v) {
            $this->tempref = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::TEMPREF;
        }


        return $this;
    } // setTempref()

    /**
     * Set the value of [envtemp] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEnvtemp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envtemp !== $v) {
            $this->envtemp = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ENVTEMP;
        }


        return $this;
    } // setEnvtemp()

    /**
     * Set the value of [resilience] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setResilience($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resilience !== $v) {
            $this->resilience = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::RESILIENCE;
        }


        return $this;
    } // setResilience()

    /**
     * Set the value of [resilienceremark] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setResilienceremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->resilienceremark !== $v) {
            $this->resilienceremark = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::RESILIENCEREMARK;
        }


        return $this;
    } // setResilienceremark()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [phmax] column.
     *
     * @param  double $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setPhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmax !== $v) {
            $this->phmax = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::PHMAX;
        }


        return $this;
    } // setPhmax()

    /**
     * Set the value of [phref] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setPhref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->phref !== $v) {
            $this->phref = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::PHREF;
        }


        return $this;
    } // setPhref()

    /**
     * Set the value of [dhmin] column.
     *
     * @param  double $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dhmin !== $v) {
            $this->dhmin = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DHMIN;
        }


        return $this;
    } // setDhmin()

    /**
     * Set the value of [dhmax] column.
     *
     * @param  double $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dhmax !== $v) {
            $this->dhmax = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DHMAX;
        }


        return $this;
    } // setDhmax()

    /**
     * Set the value of [dhref] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDhref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dhref !== $v) {
            $this->dhref = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DHREF;
        }


        return $this;
    } // setDhref()

    /**
     * Set the value of [genbankid] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setGenbankid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genbankid !== $v) {
            $this->genbankid = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::GENBANKID;
        }


        return $this;
    } // setGenbankid()

    /**
     * Set the value of [rfeid] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setRfeid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rfeid !== $v) {
            $this->rfeid = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::RFEID;
        }


        return $this;
    } // setRfeid()

    /**
     * Set the value of [figis_id] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setFigisId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->figis_id !== $v) {
            $this->figis_id = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::FIGIS_ID;
        }


        return $this;
    } // setFigisId()

    /**
     * Set the value of [ecotoxid] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEcotoxid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ecotoxid !== $v) {
            $this->ecotoxid = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ECOTOXID;
        }


        return $this;
    } // setEcotoxid()

    /**
     * Set the value of [scrfa_data] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setScrfaData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->scrfa_data !== $v) {
            $this->scrfa_data = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SCRFA_DATA;
        }


        return $this;
    } // setScrfaData()

    /**
     * Set the value of [gmad_id] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setGmadId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gmad_id !== $v) {
            $this->gmad_id = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::GMAD_ID;
        }


        return $this;
    } // setGmadId()

    /**
     * Set the value of [saup] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSaup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->saup !== $v) {
            $this->saup = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SAUP;
        }


        return $this;
    } // setSaup()

    /**
     * Set the value of [saup_id] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSaupId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->saup_id !== $v) {
            $this->saup_id = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SAUP_ID;
        }


        return $this;
    } // setSaupId()

    /**
     * Set the value of [saup_group] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSaupGroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->saup_group !== $v) {
            $this->saup_group = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SAUP_GROUP;
        }


        return $this;
    } // setSaupGroup()

    /**
     * Set the value of [ausmuseum] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setAusmuseum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ausmuseum !== $v) {
            $this->ausmuseum = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::AUSMUSEUM;
        }


        return $this;
    } // setAusmuseum()

    /**
     * Set the value of [fishtrace] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setFishtrace($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishtrace !== $v) {
            $this->fishtrace = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::FISHTRACE;
        }


        return $this;
    } // setFishtrace()

    /**
     * Set the value of [iucn_id] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setIucnId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iucn_id !== $v) {
            $this->iucn_id = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::IUCN_ID;
        }


        return $this;
    } // setIucnId()

    /**
     * Set the value of [iucn_group] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setIucnGroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->iucn_group !== $v) {
            $this->iucn_group = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::IUCN_GROUP;
        }


        return $this;
    } // setIucnGroup()

    /**
     * Set the value of [bold_id] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setBoldId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bold_id !== $v) {
            $this->bold_id = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::BOLD_ID;
        }


        return $this;
    } // setBoldId()

    /**
     * Set the value of [igfaname] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setIgfaname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->igfaname !== $v) {
            $this->igfaname = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::IGFANAME;
        }


        return $this;
    } // setIgfaname()

    /**
     * Set the value of [essayid] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEssayid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->essayid !== $v) {
            $this->essayid = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ESSAYID;
        }


        return $this;
    } // setEssayid()

    /**
     * Set the value of [aquamaps] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setAquamaps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquamaps !== $v) {
            $this->aquamaps = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::AQUAMAPS;
        }


        return $this;
    } // setAquamaps()

    /**
     * Set the value of [morphology] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setMorphology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->morphology !== $v) {
            $this->morphology = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::MORPHOLOGY;
        }


        return $this;
    } // setMorphology()

    /**
     * Set the value of [occurrence] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setOccurrence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->occurrence !== $v) {
            $this->occurrence = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::OCCURRENCE;
        }


        return $this;
    } // setOccurrence()

    /**
     * Set the value of [strains] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setStrains($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->strains !== $v) {
            $this->strains = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::STRAINS;
        }


        return $this;
    } // setStrains()

    /**
     * Set the value of [ecology] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEcology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecology !== $v) {
            $this->ecology = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ECOLOGY;
        }


        return $this;
    } // setEcology()

    /**
     * Set the value of [diseases] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDiseases($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diseases !== $v) {
            $this->diseases = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DISEASES;
        }


        return $this;
    } // setDiseases()

    /**
     * Set the value of [abnorm] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setAbnorm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abnorm !== $v) {
            $this->abnorm = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ABNORM;
        }


        return $this;
    } // setAbnorm()

    /**
     * Set the value of [metabolism] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setMetabolism($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->metabolism !== $v) {
            $this->metabolism = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::METABOLISM;
        }


        return $this;
    } // setMetabolism()

    /**
     * Set the value of [predators] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setPredators($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->predators !== $v) {
            $this->predators = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::PREDATORS;
        }


        return $this;
    } // setPredators()

    /**
     * Set the value of [spawning] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSpawning($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spawning !== $v) {
            $this->spawning = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SPAWNING;
        }


        return $this;
    } // setSpawning()

    /**
     * Set the value of [speed] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSpeed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->speed !== $v) {
            $this->speed = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SPEED;
        }


        return $this;
    } // setSpeed()

    /**
     * Set the value of [diet] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDiet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diet !== $v) {
            $this->diet = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DIET;
        }


        return $this;
    } // setDiet()

    /**
     * Set the value of [eggs] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEggs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eggs !== $v) {
            $this->eggs = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::EGGS;
        }


        return $this;
    } // setEggs()

    /**
     * Set the value of [eggdevelop] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEggdevelop($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eggdevelop !== $v) {
            $this->eggdevelop = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::EGGDEVELOP;
        }


        return $this;
    } // setEggdevelop()

    /**
     * Set the value of [food] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setFood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->food !== $v) {
            $this->food = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::FOOD;
        }


        return $this;
    } // setFood()

    /**
     * Set the value of [larvae] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLarvae($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvae !== $v) {
            $this->larvae = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LARVAE;
        }


        return $this;
    } // setLarvae()

    /**
     * Set the value of [larvdyn] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLarvdyn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvdyn !== $v) {
            $this->larvdyn = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LARVDYN;
        }


        return $this;
    } // setLarvdyn()

    /**
     * Set the value of [larvspeed] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLarvspeed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvspeed !== $v) {
            $this->larvspeed = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LARVSPEED;
        }


        return $this;
    } // setLarvspeed()

    /**
     * Set the value of [popdyn] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setPopdyn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->popdyn !== $v) {
            $this->popdyn = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::POPDYN;
        }


        return $this;
    } // setPopdyn()

    /**
     * Set the value of [lengthweight] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLengthweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthweight !== $v) {
            $this->lengthweight = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LENGTHWEIGHT;
        }


        return $this;
    } // setLengthweight()

    /**
     * Set the value of [gillarea] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setGillarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gillarea !== $v) {
            $this->gillarea = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::GILLAREA;
        }


        return $this;
    } // setGillarea()

    /**
     * Set the value of [maturity] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setMaturity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maturity !== $v) {
            $this->maturity = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::MATURITY;
        }


        return $this;
    } // setMaturity()

    /**
     * Set the value of [matsizes] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setMatsizes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->matsizes !== $v) {
            $this->matsizes = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::MATSIZES;
        }


        return $this;
    } // setMatsizes()

    /**
     * Set the value of [processing] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setProcessing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->processing !== $v) {
            $this->processing = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::PROCESSING;
        }


        return $this;
    } // setProcessing()

    /**
     * Set the value of [reproduction] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setReproduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reproduction !== $v) {
            $this->reproduction = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::REPRODUCTION;
        }


        return $this;
    } // setReproduction()

    /**
     * Set the value of [introductions] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setIntroductions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->introductions !== $v) {
            $this->introductions = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::INTRODUCTIONS;
        }


        return $this;
    } // setIntroductions()

    /**
     * Set the value of [abundance] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setAbundance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abundance !== $v) {
            $this->abundance = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ABUNDANCE;
        }


        return $this;
    } // setAbundance()

    /**
     * Set the value of [vision] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setVision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vision !== $v) {
            $this->vision = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::VISION;
        }


        return $this;
    } // setVision()

    /**
     * Set the value of [genetics] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setGenetics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genetics !== $v) {
            $this->genetics = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::GENETICS;
        }


        return $this;
    } // setGenetics()

    /**
     * Set the value of [aquaculture] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setAquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquaculture !== $v) {
            $this->aquaculture = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::AQUACULTURE;
        }


        return $this;
    } // setAquaculture()

    /**
     * Set the value of [countrycomp] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setCountrycomp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->countrycomp !== $v) {
            $this->countrycomp = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::COUNTRYCOMP;
        }


        return $this;
    } // setCountrycomp()

    /**
     * Set the value of [allele] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setAllele($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->allele !== $v) {
            $this->allele = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ALLELE;
        }


        return $this;
    } // setAllele()

    /**
     * Set the value of [geneticstudies] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setGeneticstudies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->geneticstudies !== $v) {
            $this->geneticstudies = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::GENETICSTUDIES;
        }


        return $this;
    } // setGeneticstudies()

    /**
     * Set the value of [ration] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setRation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ration !== $v) {
            $this->ration = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::RATION;
        }


        return $this;
    } // setRation()

    /**
     * Set the value of [foods] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setFoods($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foods !== $v) {
            $this->foods = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::FOODS;
        }


        return $this;
    } // setFoods()

    /**
     * Set the value of [ecotoxicology] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEcotoxicology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ecotoxicology !== $v) {
            $this->ecotoxicology = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ECOTOXICOLOGY;
        }


        return $this;
    } // setEcotoxicology()

    /**
     * Set the value of [catches] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setCatches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->catches !== $v) {
            $this->catches = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::CATCHES;
        }


        return $this;
    } // setCatches()

    /**
     * Set the value of [faoaqua] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setFaoaqua($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faoaqua !== $v) {
            $this->faoaqua = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::FAOAQUA;
        }


        return $this;
    } // setFaoaqua()

    /**
     * Set the value of [lengthrelations] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLengthrelations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthrelations !== $v) {
            $this->lengthrelations = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LENGTHRELATIONS;
        }


        return $this;
    } // setLengthrelations()

    /**
     * Set the value of [lengthfrequency] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLengthfrequency($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthfrequency !== $v) {
            $this->lengthfrequency = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LENGTHFREQUENCY;
        }


        return $this;
    } // setLengthfrequency()

    /**
     * Set the value of [sounds] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setSounds($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sounds !== $v) {
            $this->sounds = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::SOUNDS;
        }


        return $this;
    } // setSounds()

    /**
     * Set the value of [broodstock] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setBroodstock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->broodstock !== $v) {
            $this->broodstock = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::BROODSTOCK;
        }


        return $this;
    } // setBroodstock()

    /**
     * Set the value of [eggnursery] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEggnursery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eggnursery !== $v) {
            $this->eggnursery = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::EGGNURSERY;
        }


        return $this;
    } // setEggnursery()

    /**
     * Set the value of [frynursery] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setFrynursery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->frynursery !== $v) {
            $this->frynursery = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::FRYNURSERY;
        }


        return $this;
    } // setFrynursery()

    /**
     * Set the value of [larvalnursery] column.
     *
     * @param  string $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setLarvalnursery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvalnursery !== $v) {
            $this->larvalnursery = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::LARVALNURSERY;
        }


        return $this;
    } // setLarvalnursery()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return StocksWithIgfaDamaged The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = StocksWithIgfaDamagedPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

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
            if ($this->localunique !== '') {
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

            $this->stockcode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockdefs = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->level = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->localunique = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->iucn_code = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->iucn_assessment = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->protected = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->stocksrefno = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->northernmost = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->northsouthn = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->southermost = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->northsouths = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->westernmost = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->westeastw = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->easternmost = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->westeaste = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->boundingref = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->boundingmethod = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->tempmin = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->tempmax = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->tempref = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->envtemp = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resilience = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->resilienceremark = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->phmin = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->phmax = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->phref = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->dhmin = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->dhmax = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->dhref = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->genbankid = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->rfeid = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->figis_id = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->ecotoxid = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->scrfa_data = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->gmad_id = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->saup = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->saup_id = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->saup_group = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->ausmuseum = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->fishtrace = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->iucn_id = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->iucn_group = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->bold_id = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->igfaname = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->essayid = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->aquamaps = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->morphology = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->occurrence = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->strains = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->ecology = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->diseases = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->abnorm = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->metabolism = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->predators = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->spawning = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->speed = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->diet = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->eggs = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->eggdevelop = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->food = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->larvae = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->larvdyn = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->larvspeed = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->popdyn = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->lengthweight = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->gillarea = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->maturity = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->matsizes = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->processing = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->reproduction = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->introductions = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->abundance = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->vision = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->genetics = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->aquaculture = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->countrycomp = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->allele = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->geneticstudies = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->ration = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->foods = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->ecotoxicology = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->catches = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->faoaqua = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->lengthrelations = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->lengthfrequency = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->sounds = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->broodstock = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->eggnursery = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->frynursery = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->larvalnursery = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->entered = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->dateentered = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->modified = ($row[$startcol + 94] !== null) ? (int) $row[$startcol + 94] : null;
            $this->datemodified = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->expert = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->datechecked = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 98; // 98 = StocksWithIgfaDamagedPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating StocksWithIgfaDamaged object", $e);
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
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StocksWithIgfaDamagedPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StocksWithIgfaDamagedQuery::create()
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
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                StocksWithIgfaDamagedPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STOCKDEFS)) {
            $modifiedColumns[':p' . $index++]  = '`StockDefs`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`Level`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LOCALUNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`LocalUnique`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`IUCN_Code`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT)) {
            $modifiedColumns[':p' . $index++]  = '`IUCN_Assessment`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PROTECTEDSTOCK)) {
            $modifiedColumns[':p' . $index++]  = '`Protected`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STOCKSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`StocksRefNo`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::NORTHERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Northernmost`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::NORTHSOUTHN)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthN`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SOUTHERMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Southermost`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::NORTHSOUTHS)) {
            $modifiedColumns[':p' . $index++]  = '`NorthSouthS`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::WESTERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Westernmost`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::WESTEASTW)) {
            $modifiedColumns[':p' . $index++]  = '`WestEastW`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EASTERNMOST)) {
            $modifiedColumns[':p' . $index++]  = '`Easternmost`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::WESTEASTE)) {
            $modifiedColumns[':p' . $index++]  = '`WestEastE`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BOUNDINGREF)) {
            $modifiedColumns[':p' . $index++]  = '`BoundingRef`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BOUNDINGMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`BoundingMethod`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::TEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TempMin`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::TEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TempMax`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::TEMPREF)) {
            $modifiedColumns[':p' . $index++]  = '`TempRef`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ENVTEMP)) {
            $modifiedColumns[':p' . $index++]  = '`EnvTemp`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RESILIENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Resilience`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RESILIENCEREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`ResilienceRemark`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHMin`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pHMax`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PHREF)) {
            $modifiedColumns[':p' . $index++]  = '`pHRef`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`dHMin`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`dHMax`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DHREF)) {
            $modifiedColumns[':p' . $index++]  = '`dHRef`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GENBANKID)) {
            $modifiedColumns[':p' . $index++]  = '`GenBankID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RFEID)) {
            $modifiedColumns[':p' . $index++]  = '`RfeID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FIGIS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`FIGIS_ID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ECOTOXID)) {
            $modifiedColumns[':p' . $index++]  = '`EcotoxID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SCRFA_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`SCRFA_data`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GMAD_ID)) {
            $modifiedColumns[':p' . $index++]  = '`GMAD_ID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SAUP)) {
            $modifiedColumns[':p' . $index++]  = '`SAUP`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SAUP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SAUP_ID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SAUP_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`SAUP_Group`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::AUSMUSEUM)) {
            $modifiedColumns[':p' . $index++]  = '`AusMuseum`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FISHTRACE)) {
            $modifiedColumns[':p' . $index++]  = '`FishTrace`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`IUCN_ID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`IUCN_Group`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BOLD_ID)) {
            $modifiedColumns[':p' . $index++]  = '`BOLD_ID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IGFANAME)) {
            $modifiedColumns[':p' . $index++]  = '`IGFAName`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ESSAYID)) {
            $modifiedColumns[':p' . $index++]  = '`EssayID`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::AQUAMAPS)) {
            $modifiedColumns[':p' . $index++]  = '`Aquamaps`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MORPHOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Morphology`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::OCCURRENCE)) {
            $modifiedColumns[':p' . $index++]  = '`Occurrence`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STRAINS)) {
            $modifiedColumns[':p' . $index++]  = '`Strains`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ECOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Ecology`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DISEASES)) {
            $modifiedColumns[':p' . $index++]  = '`Diseases`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ABNORM)) {
            $modifiedColumns[':p' . $index++]  = '`Abnorm`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::METABOLISM)) {
            $modifiedColumns[':p' . $index++]  = '`Metabolism`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PREDATORS)) {
            $modifiedColumns[':p' . $index++]  = '`Predators`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SPAWNING)) {
            $modifiedColumns[':p' . $index++]  = '`Spawning`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SPEED)) {
            $modifiedColumns[':p' . $index++]  = '`Speed`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DIET)) {
            $modifiedColumns[':p' . $index++]  = '`Diet`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EGGS)) {
            $modifiedColumns[':p' . $index++]  = '`Eggs`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EGGDEVELOP)) {
            $modifiedColumns[':p' . $index++]  = '`EggDevelop`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FOOD)) {
            $modifiedColumns[':p' . $index++]  = '`Food`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVAE)) {
            $modifiedColumns[':p' . $index++]  = '`Larvae`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVDYN)) {
            $modifiedColumns[':p' . $index++]  = '`LarvDyn`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVSPEED)) {
            $modifiedColumns[':p' . $index++]  = '`LarvSpeed`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::POPDYN)) {
            $modifiedColumns[':p' . $index++]  = '`PopDyn`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LENGTHWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`LengthWeight`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GILLAREA)) {
            $modifiedColumns[':p' . $index++]  = '`Gillarea`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MATURITY)) {
            $modifiedColumns[':p' . $index++]  = '`Maturity`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MATSIZES)) {
            $modifiedColumns[':p' . $index++]  = '`MatSizes`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PROCESSING)) {
            $modifiedColumns[':p' . $index++]  = '`Processing`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::REPRODUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`Reproduction`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::INTRODUCTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`Introductions`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ABUNDANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::VISION)) {
            $modifiedColumns[':p' . $index++]  = '`Vision`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GENETICS)) {
            $modifiedColumns[':p' . $index++]  = '`Genetics`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::AQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Aquaculture`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::COUNTRYCOMP)) {
            $modifiedColumns[':p' . $index++]  = '`CountryComp`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ALLELE)) {
            $modifiedColumns[':p' . $index++]  = '`Allele`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GENETICSTUDIES)) {
            $modifiedColumns[':p' . $index++]  = '`GeneticStudies`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RATION)) {
            $modifiedColumns[':p' . $index++]  = '`Ration`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FOODS)) {
            $modifiedColumns[':p' . $index++]  = '`Foods`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ECOTOXICOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Ecotoxicology`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::CATCHES)) {
            $modifiedColumns[':p' . $index++]  = '`Catches`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FAOAQUA)) {
            $modifiedColumns[':p' . $index++]  = '`FAOAqua`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LENGTHRELATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`LengthRelations`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LENGTHFREQUENCY)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFrequency`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SOUNDS)) {
            $modifiedColumns[':p' . $index++]  = '`Sounds`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BROODSTOCK)) {
            $modifiedColumns[':p' . $index++]  = '`Broodstock`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EGGNURSERY)) {
            $modifiedColumns[':p' . $index++]  = '`EggNursery`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FRYNURSERY)) {
            $modifiedColumns[':p' . $index++]  = '`FryNursery`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVALNURSERY)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalNursery`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }

        $sql = sprintf(
            'INSERT INTO `stocks_with_igfa_damaged` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`StockDefs`':
                        $stmt->bindValue($identifier, $this->stockdefs, PDO::PARAM_STR);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Level`':
                        $stmt->bindValue($identifier, $this->level, PDO::PARAM_STR);
                        break;
                    case '`LocalUnique`':
                        $stmt->bindValue($identifier, $this->localunique, PDO::PARAM_STR);
                        break;
                    case '`IUCN_Code`':
                        $stmt->bindValue($identifier, $this->iucn_code, PDO::PARAM_STR);
                        break;
                    case '`IUCN_Assessment`':
                        $stmt->bindValue($identifier, $this->iucn_assessment, PDO::PARAM_STR);
                        break;
                    case '`Protected`':
                        $stmt->bindValue($identifier, $this->protected, PDO::PARAM_STR);
                        break;
                    case '`StocksRefNo`':
                        $stmt->bindValue($identifier, $this->stocksrefno, PDO::PARAM_INT);
                        break;
                    case '`Northernmost`':
                        $stmt->bindValue($identifier, $this->northernmost, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthN`':
                        $stmt->bindValue($identifier, $this->northsouthn, PDO::PARAM_STR);
                        break;
                    case '`Southermost`':
                        $stmt->bindValue($identifier, $this->southermost, PDO::PARAM_INT);
                        break;
                    case '`NorthSouthS`':
                        $stmt->bindValue($identifier, $this->northsouths, PDO::PARAM_STR);
                        break;
                    case '`Westernmost`':
                        $stmt->bindValue($identifier, $this->westernmost, PDO::PARAM_INT);
                        break;
                    case '`WestEastW`':
                        $stmt->bindValue($identifier, $this->westeastw, PDO::PARAM_STR);
                        break;
                    case '`Easternmost`':
                        $stmt->bindValue($identifier, $this->easternmost, PDO::PARAM_INT);
                        break;
                    case '`WestEastE`':
                        $stmt->bindValue($identifier, $this->westeaste, PDO::PARAM_STR);
                        break;
                    case '`BoundingRef`':
                        $stmt->bindValue($identifier, $this->boundingref, PDO::PARAM_INT);
                        break;
                    case '`BoundingMethod`':
                        $stmt->bindValue($identifier, $this->boundingmethod, PDO::PARAM_STR);
                        break;
                    case '`TempMin`':
                        $stmt->bindValue($identifier, $this->tempmin, PDO::PARAM_STR);
                        break;
                    case '`TempMax`':
                        $stmt->bindValue($identifier, $this->tempmax, PDO::PARAM_STR);
                        break;
                    case '`TempRef`':
                        $stmt->bindValue($identifier, $this->tempref, PDO::PARAM_INT);
                        break;
                    case '`EnvTemp`':
                        $stmt->bindValue($identifier, $this->envtemp, PDO::PARAM_STR);
                        break;
                    case '`Resilience`':
                        $stmt->bindValue($identifier, $this->resilience, PDO::PARAM_STR);
                        break;
                    case '`ResilienceRemark`':
                        $stmt->bindValue($identifier, $this->resilienceremark, PDO::PARAM_STR);
                        break;
                    case '`pHMin`':
                        $stmt->bindValue($identifier, $this->phmin, PDO::PARAM_STR);
                        break;
                    case '`pHMax`':
                        $stmt->bindValue($identifier, $this->phmax, PDO::PARAM_STR);
                        break;
                    case '`pHRef`':
                        $stmt->bindValue($identifier, $this->phref, PDO::PARAM_INT);
                        break;
                    case '`dHMin`':
                        $stmt->bindValue($identifier, $this->dhmin, PDO::PARAM_STR);
                        break;
                    case '`dHMax`':
                        $stmt->bindValue($identifier, $this->dhmax, PDO::PARAM_STR);
                        break;
                    case '`dHRef`':
                        $stmt->bindValue($identifier, $this->dhref, PDO::PARAM_INT);
                        break;
                    case '`GenBankID`':
                        $stmt->bindValue($identifier, $this->genbankid, PDO::PARAM_INT);
                        break;
                    case '`RfeID`':
                        $stmt->bindValue($identifier, $this->rfeid, PDO::PARAM_STR);
                        break;
                    case '`FIGIS_ID`':
                        $stmt->bindValue($identifier, $this->figis_id, PDO::PARAM_INT);
                        break;
                    case '`EcotoxID`':
                        $stmt->bindValue($identifier, $this->ecotoxid, PDO::PARAM_INT);
                        break;
                    case '`SCRFA_data`':
                        $stmt->bindValue($identifier, $this->scrfa_data, PDO::PARAM_STR);
                        break;
                    case '`GMAD_ID`':
                        $stmt->bindValue($identifier, $this->gmad_id, PDO::PARAM_INT);
                        break;
                    case '`SAUP`':
                        $stmt->bindValue($identifier, $this->saup, PDO::PARAM_STR);
                        break;
                    case '`SAUP_ID`':
                        $stmt->bindValue($identifier, $this->saup_id, PDO::PARAM_INT);
                        break;
                    case '`SAUP_Group`':
                        $stmt->bindValue($identifier, $this->saup_group, PDO::PARAM_INT);
                        break;
                    case '`AusMuseum`':
                        $stmt->bindValue($identifier, $this->ausmuseum, PDO::PARAM_INT);
                        break;
                    case '`FishTrace`':
                        $stmt->bindValue($identifier, $this->fishtrace, PDO::PARAM_STR);
                        break;
                    case '`IUCN_ID`':
                        $stmt->bindValue($identifier, $this->iucn_id, PDO::PARAM_INT);
                        break;
                    case '`IUCN_Group`':
                        $stmt->bindValue($identifier, $this->iucn_group, PDO::PARAM_STR);
                        break;
                    case '`BOLD_ID`':
                        $stmt->bindValue($identifier, $this->bold_id, PDO::PARAM_INT);
                        break;
                    case '`IGFAName`':
                        $stmt->bindValue($identifier, $this->igfaname, PDO::PARAM_STR);
                        break;
                    case '`EssayID`':
                        $stmt->bindValue($identifier, $this->essayid, PDO::PARAM_INT);
                        break;
                    case '`Aquamaps`':
                        $stmt->bindValue($identifier, $this->aquamaps, PDO::PARAM_STR);
                        break;
                    case '`Morphology`':
                        $stmt->bindValue($identifier, $this->morphology, PDO::PARAM_STR);
                        break;
                    case '`Occurrence`':
                        $stmt->bindValue($identifier, $this->occurrence, PDO::PARAM_STR);
                        break;
                    case '`Strains`':
                        $stmt->bindValue($identifier, $this->strains, PDO::PARAM_STR);
                        break;
                    case '`Ecology`':
                        $stmt->bindValue($identifier, $this->ecology, PDO::PARAM_STR);
                        break;
                    case '`Diseases`':
                        $stmt->bindValue($identifier, $this->diseases, PDO::PARAM_STR);
                        break;
                    case '`Abnorm`':
                        $stmt->bindValue($identifier, $this->abnorm, PDO::PARAM_STR);
                        break;
                    case '`Metabolism`':
                        $stmt->bindValue($identifier, $this->metabolism, PDO::PARAM_STR);
                        break;
                    case '`Predators`':
                        $stmt->bindValue($identifier, $this->predators, PDO::PARAM_STR);
                        break;
                    case '`Spawning`':
                        $stmt->bindValue($identifier, $this->spawning, PDO::PARAM_STR);
                        break;
                    case '`Speed`':
                        $stmt->bindValue($identifier, $this->speed, PDO::PARAM_STR);
                        break;
                    case '`Diet`':
                        $stmt->bindValue($identifier, $this->diet, PDO::PARAM_STR);
                        break;
                    case '`Eggs`':
                        $stmt->bindValue($identifier, $this->eggs, PDO::PARAM_STR);
                        break;
                    case '`EggDevelop`':
                        $stmt->bindValue($identifier, $this->eggdevelop, PDO::PARAM_STR);
                        break;
                    case '`Food`':
                        $stmt->bindValue($identifier, $this->food, PDO::PARAM_STR);
                        break;
                    case '`Larvae`':
                        $stmt->bindValue($identifier, $this->larvae, PDO::PARAM_STR);
                        break;
                    case '`LarvDyn`':
                        $stmt->bindValue($identifier, $this->larvdyn, PDO::PARAM_STR);
                        break;
                    case '`LarvSpeed`':
                        $stmt->bindValue($identifier, $this->larvspeed, PDO::PARAM_STR);
                        break;
                    case '`PopDyn`':
                        $stmt->bindValue($identifier, $this->popdyn, PDO::PARAM_STR);
                        break;
                    case '`LengthWeight`':
                        $stmt->bindValue($identifier, $this->lengthweight, PDO::PARAM_STR);
                        break;
                    case '`Gillarea`':
                        $stmt->bindValue($identifier, $this->gillarea, PDO::PARAM_STR);
                        break;
                    case '`Maturity`':
                        $stmt->bindValue($identifier, $this->maturity, PDO::PARAM_STR);
                        break;
                    case '`MatSizes`':
                        $stmt->bindValue($identifier, $this->matsizes, PDO::PARAM_STR);
                        break;
                    case '`Processing`':
                        $stmt->bindValue($identifier, $this->processing, PDO::PARAM_STR);
                        break;
                    case '`Reproduction`':
                        $stmt->bindValue($identifier, $this->reproduction, PDO::PARAM_STR);
                        break;
                    case '`Introductions`':
                        $stmt->bindValue($identifier, $this->introductions, PDO::PARAM_STR);
                        break;
                    case '`Abundance`':
                        $stmt->bindValue($identifier, $this->abundance, PDO::PARAM_STR);
                        break;
                    case '`Vision`':
                        $stmt->bindValue($identifier, $this->vision, PDO::PARAM_STR);
                        break;
                    case '`Genetics`':
                        $stmt->bindValue($identifier, $this->genetics, PDO::PARAM_STR);
                        break;
                    case '`Aquaculture`':
                        $stmt->bindValue($identifier, $this->aquaculture, PDO::PARAM_STR);
                        break;
                    case '`CountryComp`':
                        $stmt->bindValue($identifier, $this->countrycomp, PDO::PARAM_STR);
                        break;
                    case '`Allele`':
                        $stmt->bindValue($identifier, $this->allele, PDO::PARAM_STR);
                        break;
                    case '`GeneticStudies`':
                        $stmt->bindValue($identifier, $this->geneticstudies, PDO::PARAM_STR);
                        break;
                    case '`Ration`':
                        $stmt->bindValue($identifier, $this->ration, PDO::PARAM_STR);
                        break;
                    case '`Foods`':
                        $stmt->bindValue($identifier, $this->foods, PDO::PARAM_STR);
                        break;
                    case '`Ecotoxicology`':
                        $stmt->bindValue($identifier, $this->ecotoxicology, PDO::PARAM_STR);
                        break;
                    case '`Catches`':
                        $stmt->bindValue($identifier, $this->catches, PDO::PARAM_STR);
                        break;
                    case '`FAOAqua`':
                        $stmt->bindValue($identifier, $this->faoaqua, PDO::PARAM_STR);
                        break;
                    case '`LengthRelations`':
                        $stmt->bindValue($identifier, $this->lengthrelations, PDO::PARAM_STR);
                        break;
                    case '`LengthFrequency`':
                        $stmt->bindValue($identifier, $this->lengthfrequency, PDO::PARAM_STR);
                        break;
                    case '`Sounds`':
                        $stmt->bindValue($identifier, $this->sounds, PDO::PARAM_STR);
                        break;
                    case '`Broodstock`':
                        $stmt->bindValue($identifier, $this->broodstock, PDO::PARAM_STR);
                        break;
                    case '`EggNursery`':
                        $stmt->bindValue($identifier, $this->eggnursery, PDO::PARAM_STR);
                        break;
                    case '`FryNursery`':
                        $stmt->bindValue($identifier, $this->frynursery, PDO::PARAM_STR);
                        break;
                    case '`LarvalNursery`':
                        $stmt->bindValue($identifier, $this->larvalnursery, PDO::PARAM_STR);
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


            if (($retval = StocksWithIgfaDamagedPeer::doValidate($this, $columns)) !== true) {
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
        $pos = StocksWithIgfaDamagedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 1:
                return $this->getStockdefs();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getLevel();
                break;
            case 4:
                return $this->getLocalunique();
                break;
            case 5:
                return $this->getIucnCode();
                break;
            case 6:
                return $this->getIucnAssessment();
                break;
            case 7:
                return $this->getProtected();
                break;
            case 8:
                return $this->getStocksrefno();
                break;
            case 9:
                return $this->getNorthernmost();
                break;
            case 10:
                return $this->getNorthsouthn();
                break;
            case 11:
                return $this->getSouthermost();
                break;
            case 12:
                return $this->getNorthsouths();
                break;
            case 13:
                return $this->getWesternmost();
                break;
            case 14:
                return $this->getWesteastw();
                break;
            case 15:
                return $this->getEasternmost();
                break;
            case 16:
                return $this->getWesteaste();
                break;
            case 17:
                return $this->getBoundingref();
                break;
            case 18:
                return $this->getBoundingmethod();
                break;
            case 19:
                return $this->getTempmin();
                break;
            case 20:
                return $this->getTempmax();
                break;
            case 21:
                return $this->getTempref();
                break;
            case 22:
                return $this->getEnvtemp();
                break;
            case 23:
                return $this->getResilience();
                break;
            case 24:
                return $this->getResilienceremark();
                break;
            case 25:
                return $this->getPhmin();
                break;
            case 26:
                return $this->getPhmax();
                break;
            case 27:
                return $this->getPhref();
                break;
            case 28:
                return $this->getDhmin();
                break;
            case 29:
                return $this->getDhmax();
                break;
            case 30:
                return $this->getDhref();
                break;
            case 31:
                return $this->getGenbankid();
                break;
            case 32:
                return $this->getRfeid();
                break;
            case 33:
                return $this->getFigisId();
                break;
            case 34:
                return $this->getEcotoxid();
                break;
            case 35:
                return $this->getScrfaData();
                break;
            case 36:
                return $this->getGmadId();
                break;
            case 37:
                return $this->getSaup();
                break;
            case 38:
                return $this->getSaupId();
                break;
            case 39:
                return $this->getSaupGroup();
                break;
            case 40:
                return $this->getAusmuseum();
                break;
            case 41:
                return $this->getFishtrace();
                break;
            case 42:
                return $this->getIucnId();
                break;
            case 43:
                return $this->getIucnGroup();
                break;
            case 44:
                return $this->getBoldId();
                break;
            case 45:
                return $this->getIgfaname();
                break;
            case 46:
                return $this->getEssayid();
                break;
            case 47:
                return $this->getAquamaps();
                break;
            case 48:
                return $this->getMorphology();
                break;
            case 49:
                return $this->getOccurrence();
                break;
            case 50:
                return $this->getStrains();
                break;
            case 51:
                return $this->getEcology();
                break;
            case 52:
                return $this->getDiseases();
                break;
            case 53:
                return $this->getAbnorm();
                break;
            case 54:
                return $this->getMetabolism();
                break;
            case 55:
                return $this->getPredators();
                break;
            case 56:
                return $this->getSpawning();
                break;
            case 57:
                return $this->getSpeed();
                break;
            case 58:
                return $this->getDiet();
                break;
            case 59:
                return $this->getEggs();
                break;
            case 60:
                return $this->getEggdevelop();
                break;
            case 61:
                return $this->getFood();
                break;
            case 62:
                return $this->getLarvae();
                break;
            case 63:
                return $this->getLarvdyn();
                break;
            case 64:
                return $this->getLarvspeed();
                break;
            case 65:
                return $this->getPopdyn();
                break;
            case 66:
                return $this->getLengthweight();
                break;
            case 67:
                return $this->getGillarea();
                break;
            case 68:
                return $this->getMaturity();
                break;
            case 69:
                return $this->getMatsizes();
                break;
            case 70:
                return $this->getProcessing();
                break;
            case 71:
                return $this->getReproduction();
                break;
            case 72:
                return $this->getIntroductions();
                break;
            case 73:
                return $this->getAbundance();
                break;
            case 74:
                return $this->getVision();
                break;
            case 75:
                return $this->getGenetics();
                break;
            case 76:
                return $this->getAquaculture();
                break;
            case 77:
                return $this->getCountrycomp();
                break;
            case 78:
                return $this->getAllele();
                break;
            case 79:
                return $this->getGeneticstudies();
                break;
            case 80:
                return $this->getRation();
                break;
            case 81:
                return $this->getFoods();
                break;
            case 82:
                return $this->getEcotoxicology();
                break;
            case 83:
                return $this->getCatches();
                break;
            case 84:
                return $this->getFaoaqua();
                break;
            case 85:
                return $this->getLengthrelations();
                break;
            case 86:
                return $this->getLengthfrequency();
                break;
            case 87:
                return $this->getSounds();
                break;
            case 88:
                return $this->getBroodstock();
                break;
            case 89:
                return $this->getEggnursery();
                break;
            case 90:
                return $this->getFrynursery();
                break;
            case 91:
                return $this->getLarvalnursery();
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
        if (isset($alreadyDumpedObjects['StocksWithIgfaDamaged'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['StocksWithIgfaDamaged'][serialize($this->getPrimaryKey())] = true;
        $keys = StocksWithIgfaDamagedPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStockcode(),
            $keys[1] => $this->getStockdefs(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getLevel(),
            $keys[4] => $this->getLocalunique(),
            $keys[5] => $this->getIucnCode(),
            $keys[6] => $this->getIucnAssessment(),
            $keys[7] => $this->getProtected(),
            $keys[8] => $this->getStocksrefno(),
            $keys[9] => $this->getNorthernmost(),
            $keys[10] => $this->getNorthsouthn(),
            $keys[11] => $this->getSouthermost(),
            $keys[12] => $this->getNorthsouths(),
            $keys[13] => $this->getWesternmost(),
            $keys[14] => $this->getWesteastw(),
            $keys[15] => $this->getEasternmost(),
            $keys[16] => $this->getWesteaste(),
            $keys[17] => $this->getBoundingref(),
            $keys[18] => $this->getBoundingmethod(),
            $keys[19] => $this->getTempmin(),
            $keys[20] => $this->getTempmax(),
            $keys[21] => $this->getTempref(),
            $keys[22] => $this->getEnvtemp(),
            $keys[23] => $this->getResilience(),
            $keys[24] => $this->getResilienceremark(),
            $keys[25] => $this->getPhmin(),
            $keys[26] => $this->getPhmax(),
            $keys[27] => $this->getPhref(),
            $keys[28] => $this->getDhmin(),
            $keys[29] => $this->getDhmax(),
            $keys[30] => $this->getDhref(),
            $keys[31] => $this->getGenbankid(),
            $keys[32] => $this->getRfeid(),
            $keys[33] => $this->getFigisId(),
            $keys[34] => $this->getEcotoxid(),
            $keys[35] => $this->getScrfaData(),
            $keys[36] => $this->getGmadId(),
            $keys[37] => $this->getSaup(),
            $keys[38] => $this->getSaupId(),
            $keys[39] => $this->getSaupGroup(),
            $keys[40] => $this->getAusmuseum(),
            $keys[41] => $this->getFishtrace(),
            $keys[42] => $this->getIucnId(),
            $keys[43] => $this->getIucnGroup(),
            $keys[44] => $this->getBoldId(),
            $keys[45] => $this->getIgfaname(),
            $keys[46] => $this->getEssayid(),
            $keys[47] => $this->getAquamaps(),
            $keys[48] => $this->getMorphology(),
            $keys[49] => $this->getOccurrence(),
            $keys[50] => $this->getStrains(),
            $keys[51] => $this->getEcology(),
            $keys[52] => $this->getDiseases(),
            $keys[53] => $this->getAbnorm(),
            $keys[54] => $this->getMetabolism(),
            $keys[55] => $this->getPredators(),
            $keys[56] => $this->getSpawning(),
            $keys[57] => $this->getSpeed(),
            $keys[58] => $this->getDiet(),
            $keys[59] => $this->getEggs(),
            $keys[60] => $this->getEggdevelop(),
            $keys[61] => $this->getFood(),
            $keys[62] => $this->getLarvae(),
            $keys[63] => $this->getLarvdyn(),
            $keys[64] => $this->getLarvspeed(),
            $keys[65] => $this->getPopdyn(),
            $keys[66] => $this->getLengthweight(),
            $keys[67] => $this->getGillarea(),
            $keys[68] => $this->getMaturity(),
            $keys[69] => $this->getMatsizes(),
            $keys[70] => $this->getProcessing(),
            $keys[71] => $this->getReproduction(),
            $keys[72] => $this->getIntroductions(),
            $keys[73] => $this->getAbundance(),
            $keys[74] => $this->getVision(),
            $keys[75] => $this->getGenetics(),
            $keys[76] => $this->getAquaculture(),
            $keys[77] => $this->getCountrycomp(),
            $keys[78] => $this->getAllele(),
            $keys[79] => $this->getGeneticstudies(),
            $keys[80] => $this->getRation(),
            $keys[81] => $this->getFoods(),
            $keys[82] => $this->getEcotoxicology(),
            $keys[83] => $this->getCatches(),
            $keys[84] => $this->getFaoaqua(),
            $keys[85] => $this->getLengthrelations(),
            $keys[86] => $this->getLengthfrequency(),
            $keys[87] => $this->getSounds(),
            $keys[88] => $this->getBroodstock(),
            $keys[89] => $this->getEggnursery(),
            $keys[90] => $this->getFrynursery(),
            $keys[91] => $this->getLarvalnursery(),
            $keys[92] => $this->getEntered(),
            $keys[93] => $this->getDateentered(),
            $keys[94] => $this->getModified(),
            $keys[95] => $this->getDatemodified(),
            $keys[96] => $this->getExpert(),
            $keys[97] => $this->getDatechecked(),
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
        $pos = StocksWithIgfaDamagedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 1:
                $this->setStockdefs($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setLevel($value);
                break;
            case 4:
                $this->setLocalunique($value);
                break;
            case 5:
                $this->setIucnCode($value);
                break;
            case 6:
                $this->setIucnAssessment($value);
                break;
            case 7:
                $this->setProtected($value);
                break;
            case 8:
                $this->setStocksrefno($value);
                break;
            case 9:
                $this->setNorthernmost($value);
                break;
            case 10:
                $this->setNorthsouthn($value);
                break;
            case 11:
                $this->setSouthermost($value);
                break;
            case 12:
                $this->setNorthsouths($value);
                break;
            case 13:
                $this->setWesternmost($value);
                break;
            case 14:
                $this->setWesteastw($value);
                break;
            case 15:
                $this->setEasternmost($value);
                break;
            case 16:
                $this->setWesteaste($value);
                break;
            case 17:
                $this->setBoundingref($value);
                break;
            case 18:
                $this->setBoundingmethod($value);
                break;
            case 19:
                $this->setTempmin($value);
                break;
            case 20:
                $this->setTempmax($value);
                break;
            case 21:
                $this->setTempref($value);
                break;
            case 22:
                $this->setEnvtemp($value);
                break;
            case 23:
                $this->setResilience($value);
                break;
            case 24:
                $this->setResilienceremark($value);
                break;
            case 25:
                $this->setPhmin($value);
                break;
            case 26:
                $this->setPhmax($value);
                break;
            case 27:
                $this->setPhref($value);
                break;
            case 28:
                $this->setDhmin($value);
                break;
            case 29:
                $this->setDhmax($value);
                break;
            case 30:
                $this->setDhref($value);
                break;
            case 31:
                $this->setGenbankid($value);
                break;
            case 32:
                $this->setRfeid($value);
                break;
            case 33:
                $this->setFigisId($value);
                break;
            case 34:
                $this->setEcotoxid($value);
                break;
            case 35:
                $this->setScrfaData($value);
                break;
            case 36:
                $this->setGmadId($value);
                break;
            case 37:
                $this->setSaup($value);
                break;
            case 38:
                $this->setSaupId($value);
                break;
            case 39:
                $this->setSaupGroup($value);
                break;
            case 40:
                $this->setAusmuseum($value);
                break;
            case 41:
                $this->setFishtrace($value);
                break;
            case 42:
                $this->setIucnId($value);
                break;
            case 43:
                $this->setIucnGroup($value);
                break;
            case 44:
                $this->setBoldId($value);
                break;
            case 45:
                $this->setIgfaname($value);
                break;
            case 46:
                $this->setEssayid($value);
                break;
            case 47:
                $this->setAquamaps($value);
                break;
            case 48:
                $this->setMorphology($value);
                break;
            case 49:
                $this->setOccurrence($value);
                break;
            case 50:
                $this->setStrains($value);
                break;
            case 51:
                $this->setEcology($value);
                break;
            case 52:
                $this->setDiseases($value);
                break;
            case 53:
                $this->setAbnorm($value);
                break;
            case 54:
                $this->setMetabolism($value);
                break;
            case 55:
                $this->setPredators($value);
                break;
            case 56:
                $this->setSpawning($value);
                break;
            case 57:
                $this->setSpeed($value);
                break;
            case 58:
                $this->setDiet($value);
                break;
            case 59:
                $this->setEggs($value);
                break;
            case 60:
                $this->setEggdevelop($value);
                break;
            case 61:
                $this->setFood($value);
                break;
            case 62:
                $this->setLarvae($value);
                break;
            case 63:
                $this->setLarvdyn($value);
                break;
            case 64:
                $this->setLarvspeed($value);
                break;
            case 65:
                $this->setPopdyn($value);
                break;
            case 66:
                $this->setLengthweight($value);
                break;
            case 67:
                $this->setGillarea($value);
                break;
            case 68:
                $this->setMaturity($value);
                break;
            case 69:
                $this->setMatsizes($value);
                break;
            case 70:
                $this->setProcessing($value);
                break;
            case 71:
                $this->setReproduction($value);
                break;
            case 72:
                $this->setIntroductions($value);
                break;
            case 73:
                $this->setAbundance($value);
                break;
            case 74:
                $this->setVision($value);
                break;
            case 75:
                $this->setGenetics($value);
                break;
            case 76:
                $this->setAquaculture($value);
                break;
            case 77:
                $this->setCountrycomp($value);
                break;
            case 78:
                $this->setAllele($value);
                break;
            case 79:
                $this->setGeneticstudies($value);
                break;
            case 80:
                $this->setRation($value);
                break;
            case 81:
                $this->setFoods($value);
                break;
            case 82:
                $this->setEcotoxicology($value);
                break;
            case 83:
                $this->setCatches($value);
                break;
            case 84:
                $this->setFaoaqua($value);
                break;
            case 85:
                $this->setLengthrelations($value);
                break;
            case 86:
                $this->setLengthfrequency($value);
                break;
            case 87:
                $this->setSounds($value);
                break;
            case 88:
                $this->setBroodstock($value);
                break;
            case 89:
                $this->setEggnursery($value);
                break;
            case 90:
                $this->setFrynursery($value);
                break;
            case 91:
                $this->setLarvalnursery($value);
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
        $keys = StocksWithIgfaDamagedPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStockcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockdefs($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLevel($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocalunique($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIucnCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIucnAssessment($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProtected($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStocksrefno($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNorthernmost($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNorthsouthn($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSouthermost($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNorthsouths($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWesternmost($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setWesteastw($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEasternmost($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setWesteaste($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBoundingref($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setBoundingmethod($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTempmin($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTempmax($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTempref($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setEnvtemp($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setResilience($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setResilienceremark($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPhmin($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPhmax($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPhref($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDhmin($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDhmax($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDhref($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setGenbankid($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setRfeid($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setFigisId($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEcotoxid($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setScrfaData($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setGmadId($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setSaup($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setSaupId($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setSaupGroup($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setAusmuseum($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setFishtrace($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIucnId($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setIucnGroup($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setBoldId($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setIgfaname($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setEssayid($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setAquamaps($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setMorphology($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setOccurrence($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setStrains($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setEcology($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setDiseases($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setAbnorm($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setMetabolism($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setPredators($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setSpawning($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setSpeed($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDiet($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setEggs($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setEggdevelop($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setFood($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setLarvae($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setLarvdyn($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setLarvspeed($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setPopdyn($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setLengthweight($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setGillarea($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setMaturity($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setMatsizes($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setProcessing($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setReproduction($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setIntroductions($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setAbundance($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setVision($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setGenetics($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setAquaculture($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setCountrycomp($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setAllele($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setGeneticstudies($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setRation($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setFoods($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setEcotoxicology($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setCatches($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setFaoaqua($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setLengthrelations($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setLengthfrequency($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setSounds($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setBroodstock($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setEggnursery($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setFrynursery($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setLarvalnursery($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setEntered($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setDateentered($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setModified($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setDatemodified($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setExpert($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setDatechecked($arr[$keys[97]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StocksWithIgfaDamagedPeer::DATABASE_NAME);

        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STOCKCODE)) $criteria->add(StocksWithIgfaDamagedPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STOCKDEFS)) $criteria->add(StocksWithIgfaDamagedPeer::STOCKDEFS, $this->stockdefs);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SPECCODE)) $criteria->add(StocksWithIgfaDamagedPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LEVEL)) $criteria->add(StocksWithIgfaDamagedPeer::LEVEL, $this->level);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LOCALUNIQUE)) $criteria->add(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $this->localunique);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_CODE)) $criteria->add(StocksWithIgfaDamagedPeer::IUCN_CODE, $this->iucn_code);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT)) $criteria->add(StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT, $this->iucn_assessment);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PROTECTEDSTOCK)) $criteria->add(StocksWithIgfaDamagedPeer::PROTECTEDSTOCK, $this->protected);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STOCKSREFNO)) $criteria->add(StocksWithIgfaDamagedPeer::STOCKSREFNO, $this->stocksrefno);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::NORTHERNMOST)) $criteria->add(StocksWithIgfaDamagedPeer::NORTHERNMOST, $this->northernmost);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::NORTHSOUTHN)) $criteria->add(StocksWithIgfaDamagedPeer::NORTHSOUTHN, $this->northsouthn);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SOUTHERMOST)) $criteria->add(StocksWithIgfaDamagedPeer::SOUTHERMOST, $this->southermost);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::NORTHSOUTHS)) $criteria->add(StocksWithIgfaDamagedPeer::NORTHSOUTHS, $this->northsouths);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::WESTERNMOST)) $criteria->add(StocksWithIgfaDamagedPeer::WESTERNMOST, $this->westernmost);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::WESTEASTW)) $criteria->add(StocksWithIgfaDamagedPeer::WESTEASTW, $this->westeastw);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EASTERNMOST)) $criteria->add(StocksWithIgfaDamagedPeer::EASTERNMOST, $this->easternmost);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::WESTEASTE)) $criteria->add(StocksWithIgfaDamagedPeer::WESTEASTE, $this->westeaste);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BOUNDINGREF)) $criteria->add(StocksWithIgfaDamagedPeer::BOUNDINGREF, $this->boundingref);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BOUNDINGMETHOD)) $criteria->add(StocksWithIgfaDamagedPeer::BOUNDINGMETHOD, $this->boundingmethod);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::TEMPMIN)) $criteria->add(StocksWithIgfaDamagedPeer::TEMPMIN, $this->tempmin);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::TEMPMAX)) $criteria->add(StocksWithIgfaDamagedPeer::TEMPMAX, $this->tempmax);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::TEMPREF)) $criteria->add(StocksWithIgfaDamagedPeer::TEMPREF, $this->tempref);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ENVTEMP)) $criteria->add(StocksWithIgfaDamagedPeer::ENVTEMP, $this->envtemp);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RESILIENCE)) $criteria->add(StocksWithIgfaDamagedPeer::RESILIENCE, $this->resilience);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RESILIENCEREMARK)) $criteria->add(StocksWithIgfaDamagedPeer::RESILIENCEREMARK, $this->resilienceremark);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PHMIN)) $criteria->add(StocksWithIgfaDamagedPeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PHMAX)) $criteria->add(StocksWithIgfaDamagedPeer::PHMAX, $this->phmax);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PHREF)) $criteria->add(StocksWithIgfaDamagedPeer::PHREF, $this->phref);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DHMIN)) $criteria->add(StocksWithIgfaDamagedPeer::DHMIN, $this->dhmin);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DHMAX)) $criteria->add(StocksWithIgfaDamagedPeer::DHMAX, $this->dhmax);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DHREF)) $criteria->add(StocksWithIgfaDamagedPeer::DHREF, $this->dhref);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GENBANKID)) $criteria->add(StocksWithIgfaDamagedPeer::GENBANKID, $this->genbankid);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RFEID)) $criteria->add(StocksWithIgfaDamagedPeer::RFEID, $this->rfeid);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FIGIS_ID)) $criteria->add(StocksWithIgfaDamagedPeer::FIGIS_ID, $this->figis_id);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ECOTOXID)) $criteria->add(StocksWithIgfaDamagedPeer::ECOTOXID, $this->ecotoxid);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SCRFA_DATA)) $criteria->add(StocksWithIgfaDamagedPeer::SCRFA_DATA, $this->scrfa_data);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GMAD_ID)) $criteria->add(StocksWithIgfaDamagedPeer::GMAD_ID, $this->gmad_id);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SAUP)) $criteria->add(StocksWithIgfaDamagedPeer::SAUP, $this->saup);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SAUP_ID)) $criteria->add(StocksWithIgfaDamagedPeer::SAUP_ID, $this->saup_id);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SAUP_GROUP)) $criteria->add(StocksWithIgfaDamagedPeer::SAUP_GROUP, $this->saup_group);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::AUSMUSEUM)) $criteria->add(StocksWithIgfaDamagedPeer::AUSMUSEUM, $this->ausmuseum);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FISHTRACE)) $criteria->add(StocksWithIgfaDamagedPeer::FISHTRACE, $this->fishtrace);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_ID)) $criteria->add(StocksWithIgfaDamagedPeer::IUCN_ID, $this->iucn_id);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IUCN_GROUP)) $criteria->add(StocksWithIgfaDamagedPeer::IUCN_GROUP, $this->iucn_group);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BOLD_ID)) $criteria->add(StocksWithIgfaDamagedPeer::BOLD_ID, $this->bold_id);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::IGFANAME)) $criteria->add(StocksWithIgfaDamagedPeer::IGFANAME, $this->igfaname);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ESSAYID)) $criteria->add(StocksWithIgfaDamagedPeer::ESSAYID, $this->essayid);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::AQUAMAPS)) $criteria->add(StocksWithIgfaDamagedPeer::AQUAMAPS, $this->aquamaps);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MORPHOLOGY)) $criteria->add(StocksWithIgfaDamagedPeer::MORPHOLOGY, $this->morphology);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::OCCURRENCE)) $criteria->add(StocksWithIgfaDamagedPeer::OCCURRENCE, $this->occurrence);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::STRAINS)) $criteria->add(StocksWithIgfaDamagedPeer::STRAINS, $this->strains);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ECOLOGY)) $criteria->add(StocksWithIgfaDamagedPeer::ECOLOGY, $this->ecology);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DISEASES)) $criteria->add(StocksWithIgfaDamagedPeer::DISEASES, $this->diseases);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ABNORM)) $criteria->add(StocksWithIgfaDamagedPeer::ABNORM, $this->abnorm);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::METABOLISM)) $criteria->add(StocksWithIgfaDamagedPeer::METABOLISM, $this->metabolism);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PREDATORS)) $criteria->add(StocksWithIgfaDamagedPeer::PREDATORS, $this->predators);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SPAWNING)) $criteria->add(StocksWithIgfaDamagedPeer::SPAWNING, $this->spawning);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SPEED)) $criteria->add(StocksWithIgfaDamagedPeer::SPEED, $this->speed);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DIET)) $criteria->add(StocksWithIgfaDamagedPeer::DIET, $this->diet);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EGGS)) $criteria->add(StocksWithIgfaDamagedPeer::EGGS, $this->eggs);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EGGDEVELOP)) $criteria->add(StocksWithIgfaDamagedPeer::EGGDEVELOP, $this->eggdevelop);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FOOD)) $criteria->add(StocksWithIgfaDamagedPeer::FOOD, $this->food);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVAE)) $criteria->add(StocksWithIgfaDamagedPeer::LARVAE, $this->larvae);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVDYN)) $criteria->add(StocksWithIgfaDamagedPeer::LARVDYN, $this->larvdyn);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVSPEED)) $criteria->add(StocksWithIgfaDamagedPeer::LARVSPEED, $this->larvspeed);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::POPDYN)) $criteria->add(StocksWithIgfaDamagedPeer::POPDYN, $this->popdyn);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LENGTHWEIGHT)) $criteria->add(StocksWithIgfaDamagedPeer::LENGTHWEIGHT, $this->lengthweight);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GILLAREA)) $criteria->add(StocksWithIgfaDamagedPeer::GILLAREA, $this->gillarea);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MATURITY)) $criteria->add(StocksWithIgfaDamagedPeer::MATURITY, $this->maturity);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MATSIZES)) $criteria->add(StocksWithIgfaDamagedPeer::MATSIZES, $this->matsizes);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::PROCESSING)) $criteria->add(StocksWithIgfaDamagedPeer::PROCESSING, $this->processing);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::REPRODUCTION)) $criteria->add(StocksWithIgfaDamagedPeer::REPRODUCTION, $this->reproduction);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::INTRODUCTIONS)) $criteria->add(StocksWithIgfaDamagedPeer::INTRODUCTIONS, $this->introductions);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ABUNDANCE)) $criteria->add(StocksWithIgfaDamagedPeer::ABUNDANCE, $this->abundance);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::VISION)) $criteria->add(StocksWithIgfaDamagedPeer::VISION, $this->vision);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GENETICS)) $criteria->add(StocksWithIgfaDamagedPeer::GENETICS, $this->genetics);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::AQUACULTURE)) $criteria->add(StocksWithIgfaDamagedPeer::AQUACULTURE, $this->aquaculture);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::COUNTRYCOMP)) $criteria->add(StocksWithIgfaDamagedPeer::COUNTRYCOMP, $this->countrycomp);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ALLELE)) $criteria->add(StocksWithIgfaDamagedPeer::ALLELE, $this->allele);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::GENETICSTUDIES)) $criteria->add(StocksWithIgfaDamagedPeer::GENETICSTUDIES, $this->geneticstudies);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::RATION)) $criteria->add(StocksWithIgfaDamagedPeer::RATION, $this->ration);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FOODS)) $criteria->add(StocksWithIgfaDamagedPeer::FOODS, $this->foods);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ECOTOXICOLOGY)) $criteria->add(StocksWithIgfaDamagedPeer::ECOTOXICOLOGY, $this->ecotoxicology);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::CATCHES)) $criteria->add(StocksWithIgfaDamagedPeer::CATCHES, $this->catches);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FAOAQUA)) $criteria->add(StocksWithIgfaDamagedPeer::FAOAQUA, $this->faoaqua);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LENGTHRELATIONS)) $criteria->add(StocksWithIgfaDamagedPeer::LENGTHRELATIONS, $this->lengthrelations);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LENGTHFREQUENCY)) $criteria->add(StocksWithIgfaDamagedPeer::LENGTHFREQUENCY, $this->lengthfrequency);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::SOUNDS)) $criteria->add(StocksWithIgfaDamagedPeer::SOUNDS, $this->sounds);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::BROODSTOCK)) $criteria->add(StocksWithIgfaDamagedPeer::BROODSTOCK, $this->broodstock);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EGGNURSERY)) $criteria->add(StocksWithIgfaDamagedPeer::EGGNURSERY, $this->eggnursery);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::FRYNURSERY)) $criteria->add(StocksWithIgfaDamagedPeer::FRYNURSERY, $this->frynursery);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::LARVALNURSERY)) $criteria->add(StocksWithIgfaDamagedPeer::LARVALNURSERY, $this->larvalnursery);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::ENTERED)) $criteria->add(StocksWithIgfaDamagedPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DATEENTERED)) $criteria->add(StocksWithIgfaDamagedPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::MODIFIED)) $criteria->add(StocksWithIgfaDamagedPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DATEMODIFIED)) $criteria->add(StocksWithIgfaDamagedPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::EXPERT)) $criteria->add(StocksWithIgfaDamagedPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(StocksWithIgfaDamagedPeer::DATECHECKED)) $criteria->add(StocksWithIgfaDamagedPeer::DATECHECKED, $this->datechecked);

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
        $criteria = new Criteria(StocksWithIgfaDamagedPeer::DATABASE_NAME);
        $criteria->add(StocksWithIgfaDamagedPeer::SPECCODE, $this->speccode);
        $criteria->add(StocksWithIgfaDamagedPeer::LEVEL, $this->level);
        $criteria->add(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $this->localunique);

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
        $pks[0] = $this->getSpeccode();
        $pks[1] = $this->getLevel();
        $pks[2] = $this->getLocalunique();

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
        $this->setSpeccode($keys[0]);
        $this->setLevel($keys[1]);
        $this->setLocalunique($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSpeccode()) && (null === $this->getLevel()) && (null === $this->getLocalunique());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of StocksWithIgfaDamaged (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setStockdefs($this->getStockdefs());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setLevel($this->getLevel());
        $copyObj->setLocalunique($this->getLocalunique());
        $copyObj->setIucnCode($this->getIucnCode());
        $copyObj->setIucnAssessment($this->getIucnAssessment());
        $copyObj->setProtected($this->getProtected());
        $copyObj->setStocksrefno($this->getStocksrefno());
        $copyObj->setNorthernmost($this->getNorthernmost());
        $copyObj->setNorthsouthn($this->getNorthsouthn());
        $copyObj->setSouthermost($this->getSouthermost());
        $copyObj->setNorthsouths($this->getNorthsouths());
        $copyObj->setWesternmost($this->getWesternmost());
        $copyObj->setWesteastw($this->getWesteastw());
        $copyObj->setEasternmost($this->getEasternmost());
        $copyObj->setWesteaste($this->getWesteaste());
        $copyObj->setBoundingref($this->getBoundingref());
        $copyObj->setBoundingmethod($this->getBoundingmethod());
        $copyObj->setTempmin($this->getTempmin());
        $copyObj->setTempmax($this->getTempmax());
        $copyObj->setTempref($this->getTempref());
        $copyObj->setEnvtemp($this->getEnvtemp());
        $copyObj->setResilience($this->getResilience());
        $copyObj->setResilienceremark($this->getResilienceremark());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setPhmax($this->getPhmax());
        $copyObj->setPhref($this->getPhref());
        $copyObj->setDhmin($this->getDhmin());
        $copyObj->setDhmax($this->getDhmax());
        $copyObj->setDhref($this->getDhref());
        $copyObj->setGenbankid($this->getGenbankid());
        $copyObj->setRfeid($this->getRfeid());
        $copyObj->setFigisId($this->getFigisId());
        $copyObj->setEcotoxid($this->getEcotoxid());
        $copyObj->setScrfaData($this->getScrfaData());
        $copyObj->setGmadId($this->getGmadId());
        $copyObj->setSaup($this->getSaup());
        $copyObj->setSaupId($this->getSaupId());
        $copyObj->setSaupGroup($this->getSaupGroup());
        $copyObj->setAusmuseum($this->getAusmuseum());
        $copyObj->setFishtrace($this->getFishtrace());
        $copyObj->setIucnId($this->getIucnId());
        $copyObj->setIucnGroup($this->getIucnGroup());
        $copyObj->setBoldId($this->getBoldId());
        $copyObj->setIgfaname($this->getIgfaname());
        $copyObj->setEssayid($this->getEssayid());
        $copyObj->setAquamaps($this->getAquamaps());
        $copyObj->setMorphology($this->getMorphology());
        $copyObj->setOccurrence($this->getOccurrence());
        $copyObj->setStrains($this->getStrains());
        $copyObj->setEcology($this->getEcology());
        $copyObj->setDiseases($this->getDiseases());
        $copyObj->setAbnorm($this->getAbnorm());
        $copyObj->setMetabolism($this->getMetabolism());
        $copyObj->setPredators($this->getPredators());
        $copyObj->setSpawning($this->getSpawning());
        $copyObj->setSpeed($this->getSpeed());
        $copyObj->setDiet($this->getDiet());
        $copyObj->setEggs($this->getEggs());
        $copyObj->setEggdevelop($this->getEggdevelop());
        $copyObj->setFood($this->getFood());
        $copyObj->setLarvae($this->getLarvae());
        $copyObj->setLarvdyn($this->getLarvdyn());
        $copyObj->setLarvspeed($this->getLarvspeed());
        $copyObj->setPopdyn($this->getPopdyn());
        $copyObj->setLengthweight($this->getLengthweight());
        $copyObj->setGillarea($this->getGillarea());
        $copyObj->setMaturity($this->getMaturity());
        $copyObj->setMatsizes($this->getMatsizes());
        $copyObj->setProcessing($this->getProcessing());
        $copyObj->setReproduction($this->getReproduction());
        $copyObj->setIntroductions($this->getIntroductions());
        $copyObj->setAbundance($this->getAbundance());
        $copyObj->setVision($this->getVision());
        $copyObj->setGenetics($this->getGenetics());
        $copyObj->setAquaculture($this->getAquaculture());
        $copyObj->setCountrycomp($this->getCountrycomp());
        $copyObj->setAllele($this->getAllele());
        $copyObj->setGeneticstudies($this->getGeneticstudies());
        $copyObj->setRation($this->getRation());
        $copyObj->setFoods($this->getFoods());
        $copyObj->setEcotoxicology($this->getEcotoxicology());
        $copyObj->setCatches($this->getCatches());
        $copyObj->setFaoaqua($this->getFaoaqua());
        $copyObj->setLengthrelations($this->getLengthrelations());
        $copyObj->setLengthfrequency($this->getLengthfrequency());
        $copyObj->setSounds($this->getSounds());
        $copyObj->setBroodstock($this->getBroodstock());
        $copyObj->setEggnursery($this->getEggnursery());
        $copyObj->setFrynursery($this->getFrynursery());
        $copyObj->setLarvalnursery($this->getLarvalnursery());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
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
     * @return StocksWithIgfaDamaged Clone of current object.
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
     * @return StocksWithIgfaDamagedPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StocksWithIgfaDamagedPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->stockcode = null;
        $this->stockdefs = null;
        $this->speccode = null;
        $this->level = null;
        $this->localunique = null;
        $this->iucn_code = null;
        $this->iucn_assessment = null;
        $this->protected = null;
        $this->stocksrefno = null;
        $this->northernmost = null;
        $this->northsouthn = null;
        $this->southermost = null;
        $this->northsouths = null;
        $this->westernmost = null;
        $this->westeastw = null;
        $this->easternmost = null;
        $this->westeaste = null;
        $this->boundingref = null;
        $this->boundingmethod = null;
        $this->tempmin = null;
        $this->tempmax = null;
        $this->tempref = null;
        $this->envtemp = null;
        $this->resilience = null;
        $this->resilienceremark = null;
        $this->phmin = null;
        $this->phmax = null;
        $this->phref = null;
        $this->dhmin = null;
        $this->dhmax = null;
        $this->dhref = null;
        $this->genbankid = null;
        $this->rfeid = null;
        $this->figis_id = null;
        $this->ecotoxid = null;
        $this->scrfa_data = null;
        $this->gmad_id = null;
        $this->saup = null;
        $this->saup_id = null;
        $this->saup_group = null;
        $this->ausmuseum = null;
        $this->fishtrace = null;
        $this->iucn_id = null;
        $this->iucn_group = null;
        $this->bold_id = null;
        $this->igfaname = null;
        $this->essayid = null;
        $this->aquamaps = null;
        $this->morphology = null;
        $this->occurrence = null;
        $this->strains = null;
        $this->ecology = null;
        $this->diseases = null;
        $this->abnorm = null;
        $this->metabolism = null;
        $this->predators = null;
        $this->spawning = null;
        $this->speed = null;
        $this->diet = null;
        $this->eggs = null;
        $this->eggdevelop = null;
        $this->food = null;
        $this->larvae = null;
        $this->larvdyn = null;
        $this->larvspeed = null;
        $this->popdyn = null;
        $this->lengthweight = null;
        $this->gillarea = null;
        $this->maturity = null;
        $this->matsizes = null;
        $this->processing = null;
        $this->reproduction = null;
        $this->introductions = null;
        $this->abundance = null;
        $this->vision = null;
        $this->genetics = null;
        $this->aquaculture = null;
        $this->countrycomp = null;
        $this->allele = null;
        $this->geneticstudies = null;
        $this->ration = null;
        $this->foods = null;
        $this->ecotoxicology = null;
        $this->catches = null;
        $this->faoaqua = null;
        $this->lengthrelations = null;
        $this->lengthfrequency = null;
        $this->sounds = null;
        $this->broodstock = null;
        $this->eggnursery = null;
        $this->frynursery = null;
        $this->larvalnursery = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(StocksWithIgfaDamagedPeer::DEFAULT_STRING_FORMAT);
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
