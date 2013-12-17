<?php


/**
 * Base class that represents a row from the 'refrens' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRefrens extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RefrensPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RefrensPeer
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
     * The value for the refno field.
     * @var        int
     */
    protected $refno;

    /**
     * The value for the rmsno field.
     * @var        int
     */
    protected $rmsno;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the sourceunique field.
     * @var        string
     */
    protected $sourceunique;

    /**
     * The value for the firstauthor field.
     * @var        string
     */
    protected $firstauthor;

    /**
     * The value for the language field.
     * @var        string
     */
    protected $language;

    /**
     * The value for the complete field.
     * @var        int
     */
    protected $complete;

    /**
     * The value for the reftype field.
     * @var        string
     */
    protected $reftype;

    /**
     * The value for the keywords field.
     * @var        string
     */
    protected $keywords;

    /**
     * The value for the remarks field.
     * @var        string
     */
    protected $remarks;

    /**
     * The value for the crossref1 field.
     * @var        int
     */
    protected $crossref1;

    /**
     * The value for the crossref2 field.
     * @var        int
     */
    protected $crossref2;

    /**
     * The value for the crossref3 field.
     * @var        int
     */
    protected $crossref3;

    /**
     * The value for the crossref4 field.
     * @var        int
     */
    protected $crossref4;

    /**
     * The value for the crossref5 field.
     * @var        int
     */
    protected $crossref5;

    /**
     * The value for the cas_ref_no field.
     * @var        int
     */
    protected $cas_ref_no;

    /**
     * The value for the ecology field.
     * @var        int
     */
    protected $ecology;

    /**
     * The value for the ecotoxicology field.
     * @var        int
     */
    protected $ecotoxicology;

    /**
     * The value for the popdynamics field.
     * @var        int
     */
    protected $popdynamics;

    /**
     * The value for the aquaculture field.
     * @var        int
     */
    protected $aquaculture;

    /**
     * The value for the brains field.
     * @var        int
     */
    protected $brains;

    /**
     * The value for the reproduction field.
     * @var        int
     */
    protected $reproduction;

    /**
     * The value for the migration field.
     * @var        int
     */
    protected $migration;

    /**
     * The value for the growth field.
     * @var        int
     */
    protected $growth;

    /**
     * The value for the recruitment field.
     * @var        int
     */
    protected $recruitment;

    /**
     * The value for the vision field.
     * @var        int
     */
    protected $vision;

    /**
     * The value for the ciguatera field.
     * @var        int
     */
    protected $ciguatera;

    /**
     * The value for the frynursery field.
     * @var        int
     */
    protected $frynursery;

    /**
     * The value for the maturity field.
     * @var        int
     */
    protected $maturity;

    /**
     * The value for the distribution field.
     * @var        int
     */
    protected $distribution;

    /**
     * The value for the mortality field.
     * @var        int
     */
    protected $mortality;

    /**
     * The value for the farmingsystem field.
     * @var        int
     */
    protected $farmingsystem;

    /**
     * The value for the eggs field.
     * @var        int
     */
    protected $eggs;

    /**
     * The value for the habitats field.
     * @var        int
     */
    protected $habitats;

    /**
     * The value for the lengthweight field.
     * @var        int
     */
    protected $lengthweight;

    /**
     * The value for the lengthfreq field.
     * @var        int
     */
    protected $lengthfreq;

    /**
     * The value for the strains field.
     * @var        int
     */
    protected $strains;

    /**
     * The value for the larvae field.
     * @var        int
     */
    protected $larvae;

    /**
     * The value for the environment field.
     * @var        int
     */
    protected $environment;

    /**
     * The value for the stocks field.
     * @var        int
     */
    protected $stocks;

    /**
     * The value for the genetics field.
     * @var        int
     */
    protected $genetics;

    /**
     * The value for the spawning field.
     * @var        int
     */
    protected $spawning;

    /**
     * The value for the abundance field.
     * @var        int
     */
    protected $abundance;

    /**
     * The value for the catches field.
     * @var        int
     */
    protected $catches;

    /**
     * The value for the electrophoresis field.
     * @var        int
     */
    protected $electrophoresis;

    /**
     * The value for the sexratio field.
     * @var        int
     */
    protected $sexratio;

    /**
     * The value for the activity field.
     * @var        int
     */
    protected $activity;

    /**
     * The value for the effort field.
     * @var        int
     */
    protected $effort;

    /**
     * The value for the diseases field.
     * @var        int
     */
    protected $diseases;

    /**
     * The value for the predators field.
     * @var        int
     */
    protected $predators;

    /**
     * The value for the behavior field.
     * @var        int
     */
    protected $behavior;

    /**
     * The value for the management field.
     * @var        int
     */
    protected $management;

    /**
     * The value for the introduction field.
     * @var        int
     */
    protected $introduction;

    /**
     * The value for the competitors field.
     * @var        int
     */
    protected $competitors;

    /**
     * The value for the food field.
     * @var        int
     */
    protected $food;

    /**
     * The value for the nomenclature field.
     * @var        int
     */
    protected $nomenclature;

    /**
     * The value for the revision field.
     * @var        int
     */
    protected $revision;

    /**
     * The value for the physiology field.
     * @var        int
     */
    protected $physiology;

    /**
     * The value for the morphology field.
     * @var        int
     */
    protected $morphology;

    /**
     * The value for the otolith field.
     * @var        int
     */
    protected $otolith;

    /**
     * The value for the foodconsum field.
     * @var        int
     */
    protected $foodconsum;

    /**
     * The value for the origdescr field.
     * @var        int
     */
    protected $origdescr;

    /**
     * The value for the oxygen field.
     * @var        int
     */
    protected $oxygen;

    /**
     * The value for the maxlength field.
     * @var        int
     */
    protected $maxlength;

    /**
     * The value for the diet field.
     * @var        int
     */
    protected $diet;

    /**
     * The value for the rawdata field.
     * @var        int
     */
    protected $rawdata;

    /**
     * The value for the speeds field.
     * @var        int
     */
    protected $speeds;

    /**
     * The value for the maxweight field.
     * @var        int
     */
    protected $maxweight;

    /**
     * The value for the longevity field.
     * @var        int
     */
    protected $longevity;

    /**
     * The value for the keys field.
     * @var        int
     */
    protected $keys;

    /**
     * The value for the broodstock field.
     * @var        int
     */
    protected $broodstock;

    /**
     * The value for the eggnursery field.
     * @var        int
     */
    protected $eggnursery;

    /**
     * The value for the larvalnursery field.
     * @var        int
     */
    protected $larvalnursery;

    /**
     * The value for the citation field.
     * @var        int
     */
    protected $citation;

    /**
     * The value for the team field.
     * @var        int
     */
    protected $team;

    /**
     * The value for the aquarium field.
     * @var        int
     */
    protected $aquarium;

    /**
     * The value for the processing field.
     * @var        int
     */
    protected $processing;

    /**
     * The value for the comname field.
     * @var        int
     */
    protected $comname;

    /**
     * The value for the pictures field.
     * @var        int
     */
    protected $pictures;

    /**
     * The value for the tagrecapture field.
     * @var        int
     */
    protected $tagrecapture;

    /**
     * The value for the conservation field.
     * @var        int
     */
    protected $conservation;

    /**
     * The value for the checklist field.
     * @var        int
     */
    protected $checklist;

    /**
     * The value for the isbn field.
     * @var        string
     */
    protected $isbn;

    /**
     * The value for the doi field.
     * @var        string
     */
    protected $doi;

    /**
     * The value for the authoremail field.
     * @var        string
     */
    protected $authoremail;

    /**
     * The value for the authoradress field.
     * @var        string
     */
    protected $authoradress;

    /**
     * The value for the paperurl field.
     * @var        string
     */
    protected $paperurl;

    /**
     * The value for the used field.
     * @var        string
     */
    protected $used;

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
     * Get the [refno] column value.
     *
     * @return int
     */
    public function getRefno()
    {

        return $this->refno;
    }

    /**
     * Get the [rmsno] column value.
     *
     * @return int
     */
    public function getRmsno()
    {

        return $this->rmsno;
    }

    /**
     * Get the [author] column value.
     *
     * @return string
     */
    public function getAuthor()
    {

        return $this->author;
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
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [source] column value.
     *
     * @return string
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [sourceunique] column value.
     *
     * @return string
     */
    public function getSourceunique()
    {

        return $this->sourceunique;
    }

    /**
     * Get the [firstauthor] column value.
     *
     * @return string
     */
    public function getFirstauthor()
    {

        return $this->firstauthor;
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
     * Get the [complete] column value.
     *
     * @return int
     */
    public function getComplete()
    {

        return $this->complete;
    }

    /**
     * Get the [reftype] column value.
     *
     * @return string
     */
    public function getReftype()
    {

        return $this->reftype;
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
     * Get the [remarks] column value.
     *
     * @return string
     */
    public function getRemarks()
    {

        return $this->remarks;
    }

    /**
     * Get the [crossref1] column value.
     *
     * @return int
     */
    public function getCrossref1()
    {

        return $this->crossref1;
    }

    /**
     * Get the [crossref2] column value.
     *
     * @return int
     */
    public function getCrossref2()
    {

        return $this->crossref2;
    }

    /**
     * Get the [crossref3] column value.
     *
     * @return int
     */
    public function getCrossref3()
    {

        return $this->crossref3;
    }

    /**
     * Get the [crossref4] column value.
     *
     * @return int
     */
    public function getCrossref4()
    {

        return $this->crossref4;
    }

    /**
     * Get the [crossref5] column value.
     *
     * @return int
     */
    public function getCrossref5()
    {

        return $this->crossref5;
    }

    /**
     * Get the [cas_ref_no] column value.
     *
     * @return int
     */
    public function getCasRefNo()
    {

        return $this->cas_ref_no;
    }

    /**
     * Get the [ecology] column value.
     *
     * @return int
     */
    public function getEcology()
    {

        return $this->ecology;
    }

    /**
     * Get the [ecotoxicology] column value.
     *
     * @return int
     */
    public function getEcotoxicology()
    {

        return $this->ecotoxicology;
    }

    /**
     * Get the [popdynamics] column value.
     *
     * @return int
     */
    public function getPopdynamics()
    {

        return $this->popdynamics;
    }

    /**
     * Get the [aquaculture] column value.
     *
     * @return int
     */
    public function getAquaculture()
    {

        return $this->aquaculture;
    }

    /**
     * Get the [brains] column value.
     *
     * @return int
     */
    public function getBrains()
    {

        return $this->brains;
    }

    /**
     * Get the [reproduction] column value.
     *
     * @return int
     */
    public function getReproduction()
    {

        return $this->reproduction;
    }

    /**
     * Get the [migration] column value.
     *
     * @return int
     */
    public function getMigration()
    {

        return $this->migration;
    }

    /**
     * Get the [growth] column value.
     *
     * @return int
     */
    public function getGrowth()
    {

        return $this->growth;
    }

    /**
     * Get the [recruitment] column value.
     *
     * @return int
     */
    public function getRecruitment()
    {

        return $this->recruitment;
    }

    /**
     * Get the [vision] column value.
     *
     * @return int
     */
    public function getVision()
    {

        return $this->vision;
    }

    /**
     * Get the [ciguatera] column value.
     *
     * @return int
     */
    public function getCiguatera()
    {

        return $this->ciguatera;
    }

    /**
     * Get the [frynursery] column value.
     *
     * @return int
     */
    public function getFrynursery()
    {

        return $this->frynursery;
    }

    /**
     * Get the [maturity] column value.
     *
     * @return int
     */
    public function getMaturity()
    {

        return $this->maturity;
    }

    /**
     * Get the [distribution] column value.
     *
     * @return int
     */
    public function getDistribution()
    {

        return $this->distribution;
    }

    /**
     * Get the [mortality] column value.
     *
     * @return int
     */
    public function getMortality()
    {

        return $this->mortality;
    }

    /**
     * Get the [farmingsystem] column value.
     *
     * @return int
     */
    public function getFarmingsystem()
    {

        return $this->farmingsystem;
    }

    /**
     * Get the [eggs] column value.
     *
     * @return int
     */
    public function getEggs()
    {

        return $this->eggs;
    }

    /**
     * Get the [habitats] column value.
     *
     * @return int
     */
    public function getHabitats()
    {

        return $this->habitats;
    }

    /**
     * Get the [lengthweight] column value.
     *
     * @return int
     */
    public function getLengthweight()
    {

        return $this->lengthweight;
    }

    /**
     * Get the [lengthfreq] column value.
     *
     * @return int
     */
    public function getLengthfreq()
    {

        return $this->lengthfreq;
    }

    /**
     * Get the [strains] column value.
     *
     * @return int
     */
    public function getStrains()
    {

        return $this->strains;
    }

    /**
     * Get the [larvae] column value.
     *
     * @return int
     */
    public function getLarvae()
    {

        return $this->larvae;
    }

    /**
     * Get the [environment] column value.
     *
     * @return int
     */
    public function getEnvironment()
    {

        return $this->environment;
    }

    /**
     * Get the [stocks] column value.
     *
     * @return int
     */
    public function getStocks()
    {

        return $this->stocks;
    }

    /**
     * Get the [genetics] column value.
     *
     * @return int
     */
    public function getGenetics()
    {

        return $this->genetics;
    }

    /**
     * Get the [spawning] column value.
     *
     * @return int
     */
    public function getSpawning()
    {

        return $this->spawning;
    }

    /**
     * Get the [abundance] column value.
     *
     * @return int
     */
    public function getAbundance()
    {

        return $this->abundance;
    }

    /**
     * Get the [catches] column value.
     *
     * @return int
     */
    public function getCatches()
    {

        return $this->catches;
    }

    /**
     * Get the [electrophoresis] column value.
     *
     * @return int
     */
    public function getElectrophoresis()
    {

        return $this->electrophoresis;
    }

    /**
     * Get the [sexratio] column value.
     *
     * @return int
     */
    public function getSexratio()
    {

        return $this->sexratio;
    }

    /**
     * Get the [activity] column value.
     *
     * @return int
     */
    public function getActivity()
    {

        return $this->activity;
    }

    /**
     * Get the [effort] column value.
     *
     * @return int
     */
    public function getEffort()
    {

        return $this->effort;
    }

    /**
     * Get the [diseases] column value.
     *
     * @return int
     */
    public function getDiseases()
    {

        return $this->diseases;
    }

    /**
     * Get the [predators] column value.
     *
     * @return int
     */
    public function getPredators()
    {

        return $this->predators;
    }

    /**
     * Get the [behavior] column value.
     *
     * @return int
     */
    public function getBehavior()
    {

        return $this->behavior;
    }

    /**
     * Get the [management] column value.
     *
     * @return int
     */
    public function getManagement()
    {

        return $this->management;
    }

    /**
     * Get the [introduction] column value.
     *
     * @return int
     */
    public function getIntroduction()
    {

        return $this->introduction;
    }

    /**
     * Get the [competitors] column value.
     *
     * @return int
     */
    public function getCompetitors()
    {

        return $this->competitors;
    }

    /**
     * Get the [food] column value.
     *
     * @return int
     */
    public function getFood()
    {

        return $this->food;
    }

    /**
     * Get the [nomenclature] column value.
     *
     * @return int
     */
    public function getNomenclature()
    {

        return $this->nomenclature;
    }

    /**
     * Get the [revision] column value.
     *
     * @return int
     */
    public function getRevision()
    {

        return $this->revision;
    }

    /**
     * Get the [physiology] column value.
     *
     * @return int
     */
    public function getPhysiology()
    {

        return $this->physiology;
    }

    /**
     * Get the [morphology] column value.
     *
     * @return int
     */
    public function getMorphology()
    {

        return $this->morphology;
    }

    /**
     * Get the [otolith] column value.
     *
     * @return int
     */
    public function getOtolith()
    {

        return $this->otolith;
    }

    /**
     * Get the [foodconsum] column value.
     *
     * @return int
     */
    public function getFoodconsum()
    {

        return $this->foodconsum;
    }

    /**
     * Get the [origdescr] column value.
     *
     * @return int
     */
    public function getOrigdescr()
    {

        return $this->origdescr;
    }

    /**
     * Get the [oxygen] column value.
     *
     * @return int
     */
    public function getOxygen()
    {

        return $this->oxygen;
    }

    /**
     * Get the [maxlength] column value.
     *
     * @return int
     */
    public function getMaxlength()
    {

        return $this->maxlength;
    }

    /**
     * Get the [diet] column value.
     *
     * @return int
     */
    public function getDiet()
    {

        return $this->diet;
    }

    /**
     * Get the [rawdata] column value.
     *
     * @return int
     */
    public function getRawdata()
    {

        return $this->rawdata;
    }

    /**
     * Get the [speeds] column value.
     *
     * @return int
     */
    public function getSpeeds()
    {

        return $this->speeds;
    }

    /**
     * Get the [maxweight] column value.
     *
     * @return int
     */
    public function getMaxweight()
    {

        return $this->maxweight;
    }

    /**
     * Get the [longevity] column value.
     *
     * @return int
     */
    public function getLongevity()
    {

        return $this->longevity;
    }

    /**
     * Get the [keys] column value.
     *
     * @return int
     */
    public function getKeys()
    {

        return $this->keys;
    }

    /**
     * Get the [broodstock] column value.
     *
     * @return int
     */
    public function getBroodstock()
    {

        return $this->broodstock;
    }

    /**
     * Get the [eggnursery] column value.
     *
     * @return int
     */
    public function getEggnursery()
    {

        return $this->eggnursery;
    }

    /**
     * Get the [larvalnursery] column value.
     *
     * @return int
     */
    public function getLarvalnursery()
    {

        return $this->larvalnursery;
    }

    /**
     * Get the [citation] column value.
     *
     * @return int
     */
    public function getCitation()
    {

        return $this->citation;
    }

    /**
     * Get the [team] column value.
     *
     * @return int
     */
    public function getTeam()
    {

        return $this->team;
    }

    /**
     * Get the [aquarium] column value.
     *
     * @return int
     */
    public function getAquarium()
    {

        return $this->aquarium;
    }

    /**
     * Get the [processing] column value.
     *
     * @return int
     */
    public function getProcessing()
    {

        return $this->processing;
    }

    /**
     * Get the [comname] column value.
     *
     * @return int
     */
    public function getComname()
    {

        return $this->comname;
    }

    /**
     * Get the [pictures] column value.
     *
     * @return int
     */
    public function getPictures()
    {

        return $this->pictures;
    }

    /**
     * Get the [tagrecapture] column value.
     *
     * @return int
     */
    public function getTagrecapture()
    {

        return $this->tagrecapture;
    }

    /**
     * Get the [conservation] column value.
     *
     * @return int
     */
    public function getConservation()
    {

        return $this->conservation;
    }

    /**
     * Get the [checklist] column value.
     *
     * @return int
     */
    public function getChecklist()
    {

        return $this->checklist;
    }

    /**
     * Get the [isbn] column value.
     *
     * @return string
     */
    public function getIsbn()
    {

        return $this->isbn;
    }

    /**
     * Get the [doi] column value.
     *
     * @return string
     */
    public function getDoi()
    {

        return $this->doi;
    }

    /**
     * Get the [authoremail] column value.
     *
     * @return string
     */
    public function getAuthoremail()
    {

        return $this->authoremail;
    }

    /**
     * Get the [authoradress] column value.
     *
     * @return string
     */
    public function getAuthoradress()
    {

        return $this->authoradress;
    }

    /**
     * Get the [paperurl] column value.
     *
     * @return string
     */
    public function getPaperurl()
    {

        return $this->paperurl;
    }

    /**
     * Get the [used] column value.
     *
     * @return string
     */
    public function getUsed()
    {

        return $this->used;
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
     * @return Refrens The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = RefrensPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [refno] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setRefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refno !== $v) {
            $this->refno = $v;
            $this->modifiedColumns[] = RefrensPeer::REFNO;
        }


        return $this;
    } // setRefno()

    /**
     * Set the value of [rmsno] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setRmsno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rmsno !== $v) {
            $this->rmsno = $v;
            $this->modifiedColumns[] = RefrensPeer::RMSNO;
        }


        return $this;
    } // setRmsno()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = RefrensPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = RefrensPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = RefrensPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = RefrensPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [sourceunique] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setSourceunique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sourceunique !== $v) {
            $this->sourceunique = $v;
            $this->modifiedColumns[] = RefrensPeer::SOURCEUNIQUE;
        }


        return $this;
    } // setSourceunique()

    /**
     * Set the value of [firstauthor] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setFirstauthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->firstauthor !== $v) {
            $this->firstauthor = $v;
            $this->modifiedColumns[] = RefrensPeer::FIRSTAUTHOR;
        }


        return $this;
    } // setFirstauthor()

    /**
     * Set the value of [language] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setLanguage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->language !== $v) {
            $this->language = $v;
            $this->modifiedColumns[] = RefrensPeer::LANGUAGE;
        }


        return $this;
    } // setLanguage()

    /**
     * Set the value of [complete] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setComplete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->complete !== $v) {
            $this->complete = $v;
            $this->modifiedColumns[] = RefrensPeer::COMPLETE;
        }


        return $this;
    } // setComplete()

    /**
     * Set the value of [reftype] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setReftype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reftype !== $v) {
            $this->reftype = $v;
            $this->modifiedColumns[] = RefrensPeer::REFTYPE;
        }


        return $this;
    } // setReftype()

    /**
     * Set the value of [keywords] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setKeywords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->keywords !== $v) {
            $this->keywords = $v;
            $this->modifiedColumns[] = RefrensPeer::KEYWORDS;
        }


        return $this;
    } // setKeywords()

    /**
     * Set the value of [remarks] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setRemarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks !== $v) {
            $this->remarks = $v;
            $this->modifiedColumns[] = RefrensPeer::REMARKS;
        }


        return $this;
    } // setRemarks()

    /**
     * Set the value of [crossref1] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCrossref1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref1 !== $v) {
            $this->crossref1 = $v;
            $this->modifiedColumns[] = RefrensPeer::CROSSREF1;
        }


        return $this;
    } // setCrossref1()

    /**
     * Set the value of [crossref2] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCrossref2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref2 !== $v) {
            $this->crossref2 = $v;
            $this->modifiedColumns[] = RefrensPeer::CROSSREF2;
        }


        return $this;
    } // setCrossref2()

    /**
     * Set the value of [crossref3] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCrossref3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref3 !== $v) {
            $this->crossref3 = $v;
            $this->modifiedColumns[] = RefrensPeer::CROSSREF3;
        }


        return $this;
    } // setCrossref3()

    /**
     * Set the value of [crossref4] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCrossref4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref4 !== $v) {
            $this->crossref4 = $v;
            $this->modifiedColumns[] = RefrensPeer::CROSSREF4;
        }


        return $this;
    } // setCrossref4()

    /**
     * Set the value of [crossref5] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCrossref5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crossref5 !== $v) {
            $this->crossref5 = $v;
            $this->modifiedColumns[] = RefrensPeer::CROSSREF5;
        }


        return $this;
    } // setCrossref5()

    /**
     * Set the value of [cas_ref_no] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCasRefNo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cas_ref_no !== $v) {
            $this->cas_ref_no = $v;
            $this->modifiedColumns[] = RefrensPeer::CAS_REF_NO;
        }


        return $this;
    } // setCasRefNo()

    /**
     * Set the value of [ecology] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEcology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ecology !== $v) {
            $this->ecology = $v;
            $this->modifiedColumns[] = RefrensPeer::ECOLOGY;
        }


        return $this;
    } // setEcology()

    /**
     * Set the value of [ecotoxicology] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEcotoxicology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ecotoxicology !== $v) {
            $this->ecotoxicology = $v;
            $this->modifiedColumns[] = RefrensPeer::ECOTOXICOLOGY;
        }


        return $this;
    } // setEcotoxicology()

    /**
     * Set the value of [popdynamics] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setPopdynamics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->popdynamics !== $v) {
            $this->popdynamics = $v;
            $this->modifiedColumns[] = RefrensPeer::POPDYNAMICS;
        }


        return $this;
    } // setPopdynamics()

    /**
     * Set the value of [aquaculture] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setAquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aquaculture !== $v) {
            $this->aquaculture = $v;
            $this->modifiedColumns[] = RefrensPeer::AQUACULTURE;
        }


        return $this;
    } // setAquaculture()

    /**
     * Set the value of [brains] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setBrains($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->brains !== $v) {
            $this->brains = $v;
            $this->modifiedColumns[] = RefrensPeer::BRAINS;
        }


        return $this;
    } // setBrains()

    /**
     * Set the value of [reproduction] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setReproduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reproduction !== $v) {
            $this->reproduction = $v;
            $this->modifiedColumns[] = RefrensPeer::REPRODUCTION;
        }


        return $this;
    } // setReproduction()

    /**
     * Set the value of [migration] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setMigration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->migration !== $v) {
            $this->migration = $v;
            $this->modifiedColumns[] = RefrensPeer::MIGRATION;
        }


        return $this;
    } // setMigration()

    /**
     * Set the value of [growth] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setGrowth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growth !== $v) {
            $this->growth = $v;
            $this->modifiedColumns[] = RefrensPeer::GROWTH;
        }


        return $this;
    } // setGrowth()

    /**
     * Set the value of [recruitment] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setRecruitment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->recruitment !== $v) {
            $this->recruitment = $v;
            $this->modifiedColumns[] = RefrensPeer::RECRUITMENT;
        }


        return $this;
    } // setRecruitment()

    /**
     * Set the value of [vision] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setVision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vision !== $v) {
            $this->vision = $v;
            $this->modifiedColumns[] = RefrensPeer::VISION;
        }


        return $this;
    } // setVision()

    /**
     * Set the value of [ciguatera] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCiguatera($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ciguatera !== $v) {
            $this->ciguatera = $v;
            $this->modifiedColumns[] = RefrensPeer::CIGUATERA;
        }


        return $this;
    } // setCiguatera()

    /**
     * Set the value of [frynursery] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setFrynursery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->frynursery !== $v) {
            $this->frynursery = $v;
            $this->modifiedColumns[] = RefrensPeer::FRYNURSERY;
        }


        return $this;
    } // setFrynursery()

    /**
     * Set the value of [maturity] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setMaturity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maturity !== $v) {
            $this->maturity = $v;
            $this->modifiedColumns[] = RefrensPeer::MATURITY;
        }


        return $this;
    } // setMaturity()

    /**
     * Set the value of [distribution] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setDistribution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->distribution !== $v) {
            $this->distribution = $v;
            $this->modifiedColumns[] = RefrensPeer::DISTRIBUTION;
        }


        return $this;
    } // setDistribution()

    /**
     * Set the value of [mortality] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setMortality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mortality !== $v) {
            $this->mortality = $v;
            $this->modifiedColumns[] = RefrensPeer::MORTALITY;
        }


        return $this;
    } // setMortality()

    /**
     * Set the value of [farmingsystem] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setFarmingsystem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->farmingsystem !== $v) {
            $this->farmingsystem = $v;
            $this->modifiedColumns[] = RefrensPeer::FARMINGSYSTEM;
        }


        return $this;
    } // setFarmingsystem()

    /**
     * Set the value of [eggs] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEggs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggs !== $v) {
            $this->eggs = $v;
            $this->modifiedColumns[] = RefrensPeer::EGGS;
        }


        return $this;
    } // setEggs()

    /**
     * Set the value of [habitats] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setHabitats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->habitats !== $v) {
            $this->habitats = $v;
            $this->modifiedColumns[] = RefrensPeer::HABITATS;
        }


        return $this;
    } // setHabitats()

    /**
     * Set the value of [lengthweight] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setLengthweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengthweight !== $v) {
            $this->lengthweight = $v;
            $this->modifiedColumns[] = RefrensPeer::LENGTHWEIGHT;
        }


        return $this;
    } // setLengthweight()

    /**
     * Set the value of [lengthfreq] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setLengthfreq($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengthfreq !== $v) {
            $this->lengthfreq = $v;
            $this->modifiedColumns[] = RefrensPeer::LENGTHFREQ;
        }


        return $this;
    } // setLengthfreq()

    /**
     * Set the value of [strains] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setStrains($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->strains !== $v) {
            $this->strains = $v;
            $this->modifiedColumns[] = RefrensPeer::STRAINS;
        }


        return $this;
    } // setStrains()

    /**
     * Set the value of [larvae] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setLarvae($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvae !== $v) {
            $this->larvae = $v;
            $this->modifiedColumns[] = RefrensPeer::LARVAE;
        }


        return $this;
    } // setLarvae()

    /**
     * Set the value of [environment] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEnvironment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->environment !== $v) {
            $this->environment = $v;
            $this->modifiedColumns[] = RefrensPeer::ENVIRONMENT;
        }


        return $this;
    } // setEnvironment()

    /**
     * Set the value of [stocks] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setStocks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stocks !== $v) {
            $this->stocks = $v;
            $this->modifiedColumns[] = RefrensPeer::STOCKS;
        }


        return $this;
    } // setStocks()

    /**
     * Set the value of [genetics] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setGenetics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->genetics !== $v) {
            $this->genetics = $v;
            $this->modifiedColumns[] = RefrensPeer::GENETICS;
        }


        return $this;
    } // setGenetics()

    /**
     * Set the value of [spawning] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setSpawning($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spawning !== $v) {
            $this->spawning = $v;
            $this->modifiedColumns[] = RefrensPeer::SPAWNING;
        }


        return $this;
    } // setSpawning()

    /**
     * Set the value of [abundance] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setAbundance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abundance !== $v) {
            $this->abundance = $v;
            $this->modifiedColumns[] = RefrensPeer::ABUNDANCE;
        }


        return $this;
    } // setAbundance()

    /**
     * Set the value of [catches] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCatches($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->catches !== $v) {
            $this->catches = $v;
            $this->modifiedColumns[] = RefrensPeer::CATCHES;
        }


        return $this;
    } // setCatches()

    /**
     * Set the value of [electrophoresis] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setElectrophoresis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->electrophoresis !== $v) {
            $this->electrophoresis = $v;
            $this->modifiedColumns[] = RefrensPeer::ELECTROPHORESIS;
        }


        return $this;
    } // setElectrophoresis()

    /**
     * Set the value of [sexratio] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setSexratio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sexratio !== $v) {
            $this->sexratio = $v;
            $this->modifiedColumns[] = RefrensPeer::SEXRATIO;
        }


        return $this;
    } // setSexratio()

    /**
     * Set the value of [activity] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setActivity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->activity !== $v) {
            $this->activity = $v;
            $this->modifiedColumns[] = RefrensPeer::ACTIVITY;
        }


        return $this;
    } // setActivity()

    /**
     * Set the value of [effort] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEffort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effort !== $v) {
            $this->effort = $v;
            $this->modifiedColumns[] = RefrensPeer::EFFORT;
        }


        return $this;
    } // setEffort()

    /**
     * Set the value of [diseases] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setDiseases($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->diseases !== $v) {
            $this->diseases = $v;
            $this->modifiedColumns[] = RefrensPeer::DISEASES;
        }


        return $this;
    } // setDiseases()

    /**
     * Set the value of [predators] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setPredators($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->predators !== $v) {
            $this->predators = $v;
            $this->modifiedColumns[] = RefrensPeer::PREDATORS;
        }


        return $this;
    } // setPredators()

    /**
     * Set the value of [behavior] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setBehavior($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->behavior !== $v) {
            $this->behavior = $v;
            $this->modifiedColumns[] = RefrensPeer::BEHAVIOR;
        }


        return $this;
    } // setBehavior()

    /**
     * Set the value of [management] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setManagement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->management !== $v) {
            $this->management = $v;
            $this->modifiedColumns[] = RefrensPeer::MANAGEMENT;
        }


        return $this;
    } // setManagement()

    /**
     * Set the value of [introduction] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setIntroduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->introduction !== $v) {
            $this->introduction = $v;
            $this->modifiedColumns[] = RefrensPeer::INTRODUCTION;
        }


        return $this;
    } // setIntroduction()

    /**
     * Set the value of [competitors] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCompetitors($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->competitors !== $v) {
            $this->competitors = $v;
            $this->modifiedColumns[] = RefrensPeer::COMPETITORS;
        }


        return $this;
    } // setCompetitors()

    /**
     * Set the value of [food] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setFood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->food !== $v) {
            $this->food = $v;
            $this->modifiedColumns[] = RefrensPeer::FOOD;
        }


        return $this;
    } // setFood()

    /**
     * Set the value of [nomenclature] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setNomenclature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nomenclature !== $v) {
            $this->nomenclature = $v;
            $this->modifiedColumns[] = RefrensPeer::NOMENCLATURE;
        }


        return $this;
    } // setNomenclature()

    /**
     * Set the value of [revision] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->revision !== $v) {
            $this->revision = $v;
            $this->modifiedColumns[] = RefrensPeer::REVISION;
        }


        return $this;
    } // setRevision()

    /**
     * Set the value of [physiology] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setPhysiology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->physiology !== $v) {
            $this->physiology = $v;
            $this->modifiedColumns[] = RefrensPeer::PHYSIOLOGY;
        }


        return $this;
    } // setPhysiology()

    /**
     * Set the value of [morphology] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setMorphology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->morphology !== $v) {
            $this->morphology = $v;
            $this->modifiedColumns[] = RefrensPeer::MORPHOLOGY;
        }


        return $this;
    } // setMorphology()

    /**
     * Set the value of [otolith] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setOtolith($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otolith !== $v) {
            $this->otolith = $v;
            $this->modifiedColumns[] = RefrensPeer::OTOLITH;
        }


        return $this;
    } // setOtolith()

    /**
     * Set the value of [foodconsum] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setFoodconsum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodconsum !== $v) {
            $this->foodconsum = $v;
            $this->modifiedColumns[] = RefrensPeer::FOODCONSUM;
        }


        return $this;
    } // setFoodconsum()

    /**
     * Set the value of [origdescr] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setOrigdescr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->origdescr !== $v) {
            $this->origdescr = $v;
            $this->modifiedColumns[] = RefrensPeer::ORIGDESCR;
        }


        return $this;
    } // setOrigdescr()

    /**
     * Set the value of [oxygen] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setOxygen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oxygen !== $v) {
            $this->oxygen = $v;
            $this->modifiedColumns[] = RefrensPeer::OXYGEN;
        }


        return $this;
    } // setOxygen()

    /**
     * Set the value of [maxlength] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setMaxlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxlength !== $v) {
            $this->maxlength = $v;
            $this->modifiedColumns[] = RefrensPeer::MAXLENGTH;
        }


        return $this;
    } // setMaxlength()

    /**
     * Set the value of [diet] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setDiet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->diet !== $v) {
            $this->diet = $v;
            $this->modifiedColumns[] = RefrensPeer::DIET;
        }


        return $this;
    } // setDiet()

    /**
     * Set the value of [rawdata] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setRawdata($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rawdata !== $v) {
            $this->rawdata = $v;
            $this->modifiedColumns[] = RefrensPeer::RAWDATA;
        }


        return $this;
    } // setRawdata()

    /**
     * Set the value of [speeds] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setSpeeds($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speeds !== $v) {
            $this->speeds = $v;
            $this->modifiedColumns[] = RefrensPeer::SPEEDS;
        }


        return $this;
    } // setSpeeds()

    /**
     * Set the value of [maxweight] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setMaxweight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxweight !== $v) {
            $this->maxweight = $v;
            $this->modifiedColumns[] = RefrensPeer::MAXWEIGHT;
        }


        return $this;
    } // setMaxweight()

    /**
     * Set the value of [longevity] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setLongevity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longevity !== $v) {
            $this->longevity = $v;
            $this->modifiedColumns[] = RefrensPeer::LONGEVITY;
        }


        return $this;
    } // setLongevity()

    /**
     * Set the value of [keys] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setKeys($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->keys !== $v) {
            $this->keys = $v;
            $this->modifiedColumns[] = RefrensPeer::KEYS;
        }


        return $this;
    } // setKeys()

    /**
     * Set the value of [broodstock] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setBroodstock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->broodstock !== $v) {
            $this->broodstock = $v;
            $this->modifiedColumns[] = RefrensPeer::BROODSTOCK;
        }


        return $this;
    } // setBroodstock()

    /**
     * Set the value of [eggnursery] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEggnursery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eggnursery !== $v) {
            $this->eggnursery = $v;
            $this->modifiedColumns[] = RefrensPeer::EGGNURSERY;
        }


        return $this;
    } // setEggnursery()

    /**
     * Set the value of [larvalnursery] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setLarvalnursery($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvalnursery !== $v) {
            $this->larvalnursery = $v;
            $this->modifiedColumns[] = RefrensPeer::LARVALNURSERY;
        }


        return $this;
    } // setLarvalnursery()

    /**
     * Set the value of [citation] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setCitation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->citation !== $v) {
            $this->citation = $v;
            $this->modifiedColumns[] = RefrensPeer::CITATION;
        }


        return $this;
    } // setCitation()

    /**
     * Set the value of [team] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setTeam($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->team !== $v) {
            $this->team = $v;
            $this->modifiedColumns[] = RefrensPeer::TEAM;
        }


        return $this;
    } // setTeam()

    /**
     * Set the value of [aquarium] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setAquarium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aquarium !== $v) {
            $this->aquarium = $v;
            $this->modifiedColumns[] = RefrensPeer::AQUARIUM;
        }


        return $this;
    } // setAquarium()

    /**
     * Set the value of [processing] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setProcessing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->processing !== $v) {
            $this->processing = $v;
            $this->modifiedColumns[] = RefrensPeer::PROCESSING;
        }


        return $this;
    } // setProcessing()

    /**
     * Set the value of [comname] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setComname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comname !== $v) {
            $this->comname = $v;
            $this->modifiedColumns[] = RefrensPeer::COMNAME;
        }


        return $this;
    } // setComname()

    /**
     * Set the value of [pictures] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setPictures($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pictures !== $v) {
            $this->pictures = $v;
            $this->modifiedColumns[] = RefrensPeer::PICTURES;
        }


        return $this;
    } // setPictures()

    /**
     * Set the value of [tagrecapture] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setTagrecapture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tagrecapture !== $v) {
            $this->tagrecapture = $v;
            $this->modifiedColumns[] = RefrensPeer::TAGRECAPTURE;
        }


        return $this;
    } // setTagrecapture()

    /**
     * Set the value of [conservation] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setConservation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->conservation !== $v) {
            $this->conservation = $v;
            $this->modifiedColumns[] = RefrensPeer::CONSERVATION;
        }


        return $this;
    } // setConservation()

    /**
     * Set the value of [checklist] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setChecklist($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checklist !== $v) {
            $this->checklist = $v;
            $this->modifiedColumns[] = RefrensPeer::CHECKLIST;
        }


        return $this;
    } // setChecklist()

    /**
     * Set the value of [isbn] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setIsbn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->isbn !== $v) {
            $this->isbn = $v;
            $this->modifiedColumns[] = RefrensPeer::ISBN;
        }


        return $this;
    } // setIsbn()

    /**
     * Set the value of [doi] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setDoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->doi !== $v) {
            $this->doi = $v;
            $this->modifiedColumns[] = RefrensPeer::DOI;
        }


        return $this;
    } // setDoi()

    /**
     * Set the value of [authoremail] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setAuthoremail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoremail !== $v) {
            $this->authoremail = $v;
            $this->modifiedColumns[] = RefrensPeer::AUTHOREMAIL;
        }


        return $this;
    } // setAuthoremail()

    /**
     * Set the value of [authoradress] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setAuthoradress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authoradress !== $v) {
            $this->authoradress = $v;
            $this->modifiedColumns[] = RefrensPeer::AUTHORADRESS;
        }


        return $this;
    } // setAuthoradress()

    /**
     * Set the value of [paperurl] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setPaperurl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paperurl !== $v) {
            $this->paperurl = $v;
            $this->modifiedColumns[] = RefrensPeer::PAPERURL;
        }


        return $this;
    } // setPaperurl()

    /**
     * Set the value of [used] column.
     *
     * @param  string $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setUsed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->used !== $v) {
            $this->used = $v;
            $this->modifiedColumns[] = RefrensPeer::USED;
        }


        return $this;
    } // setUsed()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = RefrensPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refrens The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = RefrensPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = RefrensPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refrens The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = RefrensPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Refrens The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = RefrensPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refrens The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = RefrensPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Refrens The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = RefrensPeer::TS;
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
            $this->refno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->rmsno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->author = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->year = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->title = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->source = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->sourceunique = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->firstauthor = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->language = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->complete = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->reftype = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->keywords = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->remarks = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->crossref1 = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->crossref2 = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->crossref3 = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->crossref4 = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->crossref5 = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->cas_ref_no = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->ecology = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->ecotoxicology = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->popdynamics = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->aquaculture = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->brains = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->reproduction = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->migration = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->growth = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->recruitment = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->vision = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->ciguatera = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->frynursery = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->maturity = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->distribution = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->mortality = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->farmingsystem = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->eggs = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->habitats = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->lengthweight = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->lengthfreq = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->strains = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->larvae = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->environment = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->stocks = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->genetics = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->spawning = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->abundance = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->catches = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->electrophoresis = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->sexratio = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->activity = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->effort = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->diseases = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->predators = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->behavior = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->management = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->introduction = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->competitors = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->food = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->nomenclature = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->revision = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->physiology = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->morphology = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->otolith = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->foodconsum = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->origdescr = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->oxygen = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->maxlength = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->diet = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->rawdata = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->speeds = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->maxweight = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->longevity = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->keys = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->broodstock = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->eggnursery = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->larvalnursery = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->citation = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->team = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->aquarium = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->processing = ($row[$startcol + 80] !== null) ? (int) $row[$startcol + 80] : null;
            $this->comname = ($row[$startcol + 81] !== null) ? (int) $row[$startcol + 81] : null;
            $this->pictures = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->tagrecapture = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->conservation = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->checklist = ($row[$startcol + 85] !== null) ? (int) $row[$startcol + 85] : null;
            $this->isbn = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->doi = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->authoremail = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->authoradress = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->paperurl = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->used = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->entered = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->dateentered = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->modified = ($row[$startcol + 94] !== null) ? (int) $row[$startcol + 94] : null;
            $this->datemodified = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->expert = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->datechecked = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->ts = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 99; // 99 = RefrensPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Refrens object", $e);
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
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RefrensPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RefrensQuery::create()
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
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RefrensPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = RefrensPeer::AUTOCTR;
        if (null !== $this->autoctr) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RefrensPeer::AUTOCTR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RefrensPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(RefrensPeer::REFNO)) {
            $modifiedColumns[':p' . $index++]  = '`RefNo`';
        }
        if ($this->isColumnModified(RefrensPeer::RMSNO)) {
            $modifiedColumns[':p' . $index++]  = '`RMSNo`';
        }
        if ($this->isColumnModified(RefrensPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(RefrensPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`Year`';
        }
        if ($this->isColumnModified(RefrensPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`Title`';
        }
        if ($this->isColumnModified(RefrensPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(RefrensPeer::SOURCEUNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`SourceUnique`';
        }
        if ($this->isColumnModified(RefrensPeer::FIRSTAUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`FirstAuthor`';
        }
        if ($this->isColumnModified(RefrensPeer::LANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Language`';
        }
        if ($this->isColumnModified(RefrensPeer::COMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`Complete`';
        }
        if ($this->isColumnModified(RefrensPeer::REFTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`RefType`';
        }
        if ($this->isColumnModified(RefrensPeer::KEYWORDS)) {
            $modifiedColumns[':p' . $index++]  = '`Keywords`';
        }
        if ($this->isColumnModified(RefrensPeer::REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks`';
        }
        if ($this->isColumnModified(RefrensPeer::CROSSREF1)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef1`';
        }
        if ($this->isColumnModified(RefrensPeer::CROSSREF2)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef2`';
        }
        if ($this->isColumnModified(RefrensPeer::CROSSREF3)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef3`';
        }
        if ($this->isColumnModified(RefrensPeer::CROSSREF4)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef4`';
        }
        if ($this->isColumnModified(RefrensPeer::CROSSREF5)) {
            $modifiedColumns[':p' . $index++]  = '`CrossRef5`';
        }
        if ($this->isColumnModified(RefrensPeer::CAS_REF_NO)) {
            $modifiedColumns[':p' . $index++]  = '`CAS_REF_NO`';
        }
        if ($this->isColumnModified(RefrensPeer::ECOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Ecology`';
        }
        if ($this->isColumnModified(RefrensPeer::ECOTOXICOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Ecotoxicology`';
        }
        if ($this->isColumnModified(RefrensPeer::POPDYNAMICS)) {
            $modifiedColumns[':p' . $index++]  = '`PopDynamics`';
        }
        if ($this->isColumnModified(RefrensPeer::AQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Aquaculture`';
        }
        if ($this->isColumnModified(RefrensPeer::BRAINS)) {
            $modifiedColumns[':p' . $index++]  = '`Brains`';
        }
        if ($this->isColumnModified(RefrensPeer::REPRODUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`Reproduction`';
        }
        if ($this->isColumnModified(RefrensPeer::MIGRATION)) {
            $modifiedColumns[':p' . $index++]  = '`Migration`';
        }
        if ($this->isColumnModified(RefrensPeer::GROWTH)) {
            $modifiedColumns[':p' . $index++]  = '`Growth`';
        }
        if ($this->isColumnModified(RefrensPeer::RECRUITMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Recruitment`';
        }
        if ($this->isColumnModified(RefrensPeer::VISION)) {
            $modifiedColumns[':p' . $index++]  = '`Vision`';
        }
        if ($this->isColumnModified(RefrensPeer::CIGUATERA)) {
            $modifiedColumns[':p' . $index++]  = '`Ciguatera`';
        }
        if ($this->isColumnModified(RefrensPeer::FRYNURSERY)) {
            $modifiedColumns[':p' . $index++]  = '`FryNursery`';
        }
        if ($this->isColumnModified(RefrensPeer::MATURITY)) {
            $modifiedColumns[':p' . $index++]  = '`Maturity`';
        }
        if ($this->isColumnModified(RefrensPeer::DISTRIBUTION)) {
            $modifiedColumns[':p' . $index++]  = '`Distribution`';
        }
        if ($this->isColumnModified(RefrensPeer::MORTALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Mortality`';
        }
        if ($this->isColumnModified(RefrensPeer::FARMINGSYSTEM)) {
            $modifiedColumns[':p' . $index++]  = '`FarmingSystem`';
        }
        if ($this->isColumnModified(RefrensPeer::EGGS)) {
            $modifiedColumns[':p' . $index++]  = '`Eggs`';
        }
        if ($this->isColumnModified(RefrensPeer::HABITATS)) {
            $modifiedColumns[':p' . $index++]  = '`Habitats`';
        }
        if ($this->isColumnModified(RefrensPeer::LENGTHWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`LengthWeight`';
        }
        if ($this->isColumnModified(RefrensPeer::LENGTHFREQ)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFreq`';
        }
        if ($this->isColumnModified(RefrensPeer::STRAINS)) {
            $modifiedColumns[':p' . $index++]  = '`Strains`';
        }
        if ($this->isColumnModified(RefrensPeer::LARVAE)) {
            $modifiedColumns[':p' . $index++]  = '`Larvae`';
        }
        if ($this->isColumnModified(RefrensPeer::ENVIRONMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Environment`';
        }
        if ($this->isColumnModified(RefrensPeer::STOCKS)) {
            $modifiedColumns[':p' . $index++]  = '`Stocks`';
        }
        if ($this->isColumnModified(RefrensPeer::GENETICS)) {
            $modifiedColumns[':p' . $index++]  = '`Genetics`';
        }
        if ($this->isColumnModified(RefrensPeer::SPAWNING)) {
            $modifiedColumns[':p' . $index++]  = '`Spawning`';
        }
        if ($this->isColumnModified(RefrensPeer::ABUNDANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Abundance`';
        }
        if ($this->isColumnModified(RefrensPeer::CATCHES)) {
            $modifiedColumns[':p' . $index++]  = '`Catches`';
        }
        if ($this->isColumnModified(RefrensPeer::ELECTROPHORESIS)) {
            $modifiedColumns[':p' . $index++]  = '`Electrophoresis`';
        }
        if ($this->isColumnModified(RefrensPeer::SEXRATIO)) {
            $modifiedColumns[':p' . $index++]  = '`SexRatio`';
        }
        if ($this->isColumnModified(RefrensPeer::ACTIVITY)) {
            $modifiedColumns[':p' . $index++]  = '`Activity`';
        }
        if ($this->isColumnModified(RefrensPeer::EFFORT)) {
            $modifiedColumns[':p' . $index++]  = '`Effort`';
        }
        if ($this->isColumnModified(RefrensPeer::DISEASES)) {
            $modifiedColumns[':p' . $index++]  = '`Diseases`';
        }
        if ($this->isColumnModified(RefrensPeer::PREDATORS)) {
            $modifiedColumns[':p' . $index++]  = '`Predators`';
        }
        if ($this->isColumnModified(RefrensPeer::BEHAVIOR)) {
            $modifiedColumns[':p' . $index++]  = '`Behavior`';
        }
        if ($this->isColumnModified(RefrensPeer::MANAGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Management`';
        }
        if ($this->isColumnModified(RefrensPeer::INTRODUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`Introduction`';
        }
        if ($this->isColumnModified(RefrensPeer::COMPETITORS)) {
            $modifiedColumns[':p' . $index++]  = '`Competitors`';
        }
        if ($this->isColumnModified(RefrensPeer::FOOD)) {
            $modifiedColumns[':p' . $index++]  = '`Food`';
        }
        if ($this->isColumnModified(RefrensPeer::NOMENCLATURE)) {
            $modifiedColumns[':p' . $index++]  = '`Nomenclature`';
        }
        if ($this->isColumnModified(RefrensPeer::REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`Revision`';
        }
        if ($this->isColumnModified(RefrensPeer::PHYSIOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Physiology`';
        }
        if ($this->isColumnModified(RefrensPeer::MORPHOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`Morphology`';
        }
        if ($this->isColumnModified(RefrensPeer::OTOLITH)) {
            $modifiedColumns[':p' . $index++]  = '`Otolith`';
        }
        if ($this->isColumnModified(RefrensPeer::FOODCONSUM)) {
            $modifiedColumns[':p' . $index++]  = '`FoodConsum`';
        }
        if ($this->isColumnModified(RefrensPeer::ORIGDESCR)) {
            $modifiedColumns[':p' . $index++]  = '`OrigDescr`';
        }
        if ($this->isColumnModified(RefrensPeer::OXYGEN)) {
            $modifiedColumns[':p' . $index++]  = '`Oxygen`';
        }
        if ($this->isColumnModified(RefrensPeer::MAXLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLength`';
        }
        if ($this->isColumnModified(RefrensPeer::DIET)) {
            $modifiedColumns[':p' . $index++]  = '`Diet`';
        }
        if ($this->isColumnModified(RefrensPeer::RAWDATA)) {
            $modifiedColumns[':p' . $index++]  = '`RawData`';
        }
        if ($this->isColumnModified(RefrensPeer::SPEEDS)) {
            $modifiedColumns[':p' . $index++]  = '`Speeds`';
        }
        if ($this->isColumnModified(RefrensPeer::MAXWEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`MaxWeight`';
        }
        if ($this->isColumnModified(RefrensPeer::LONGEVITY)) {
            $modifiedColumns[':p' . $index++]  = '`Longevity`';
        }
        if ($this->isColumnModified(RefrensPeer::KEYS)) {
            $modifiedColumns[':p' . $index++]  = '`Keys`';
        }
        if ($this->isColumnModified(RefrensPeer::BROODSTOCK)) {
            $modifiedColumns[':p' . $index++]  = '`Broodstock`';
        }
        if ($this->isColumnModified(RefrensPeer::EGGNURSERY)) {
            $modifiedColumns[':p' . $index++]  = '`EggNursery`';
        }
        if ($this->isColumnModified(RefrensPeer::LARVALNURSERY)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalNursery`';
        }
        if ($this->isColumnModified(RefrensPeer::CITATION)) {
            $modifiedColumns[':p' . $index++]  = '`Citation`';
        }
        if ($this->isColumnModified(RefrensPeer::TEAM)) {
            $modifiedColumns[':p' . $index++]  = '`Team`';
        }
        if ($this->isColumnModified(RefrensPeer::AQUARIUM)) {
            $modifiedColumns[':p' . $index++]  = '`Aquarium`';
        }
        if ($this->isColumnModified(RefrensPeer::PROCESSING)) {
            $modifiedColumns[':p' . $index++]  = '`Processing`';
        }
        if ($this->isColumnModified(RefrensPeer::COMNAME)) {
            $modifiedColumns[':p' . $index++]  = '`Comname`';
        }
        if ($this->isColumnModified(RefrensPeer::PICTURES)) {
            $modifiedColumns[':p' . $index++]  = '`Pictures`';
        }
        if ($this->isColumnModified(RefrensPeer::TAGRECAPTURE)) {
            $modifiedColumns[':p' . $index++]  = '`Tagrecapture`';
        }
        if ($this->isColumnModified(RefrensPeer::CONSERVATION)) {
            $modifiedColumns[':p' . $index++]  = '`Conservation`';
        }
        if ($this->isColumnModified(RefrensPeer::CHECKLIST)) {
            $modifiedColumns[':p' . $index++]  = '`Checklist`';
        }
        if ($this->isColumnModified(RefrensPeer::ISBN)) {
            $modifiedColumns[':p' . $index++]  = '`ISBN`';
        }
        if ($this->isColumnModified(RefrensPeer::DOI)) {
            $modifiedColumns[':p' . $index++]  = '`DOI`';
        }
        if ($this->isColumnModified(RefrensPeer::AUTHOREMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorEmail`';
        }
        if ($this->isColumnModified(RefrensPeer::AUTHORADRESS)) {
            $modifiedColumns[':p' . $index++]  = '`AuthorAdress`';
        }
        if ($this->isColumnModified(RefrensPeer::PAPERURL)) {
            $modifiedColumns[':p' . $index++]  = '`PaperURL`';
        }
        if ($this->isColumnModified(RefrensPeer::USED)) {
            $modifiedColumns[':p' . $index++]  = '`Used`';
        }
        if ($this->isColumnModified(RefrensPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(RefrensPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(RefrensPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(RefrensPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(RefrensPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(RefrensPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(RefrensPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `refrens` (%s) VALUES (%s)',
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
                    case '`RefNo`':
                        $stmt->bindValue($identifier, $this->refno, PDO::PARAM_INT);
                        break;
                    case '`RMSNo`':
                        $stmt->bindValue($identifier, $this->rmsno, PDO::PARAM_INT);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`Year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`Title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`SourceUnique`':
                        $stmt->bindValue($identifier, $this->sourceunique, PDO::PARAM_STR);
                        break;
                    case '`FirstAuthor`':
                        $stmt->bindValue($identifier, $this->firstauthor, PDO::PARAM_STR);
                        break;
                    case '`Language`':
                        $stmt->bindValue($identifier, $this->language, PDO::PARAM_STR);
                        break;
                    case '`Complete`':
                        $stmt->bindValue($identifier, $this->complete, PDO::PARAM_INT);
                        break;
                    case '`RefType`':
                        $stmt->bindValue($identifier, $this->reftype, PDO::PARAM_STR);
                        break;
                    case '`Keywords`':
                        $stmt->bindValue($identifier, $this->keywords, PDO::PARAM_STR);
                        break;
                    case '`Remarks`':
                        $stmt->bindValue($identifier, $this->remarks, PDO::PARAM_STR);
                        break;
                    case '`CrossRef1`':
                        $stmt->bindValue($identifier, $this->crossref1, PDO::PARAM_INT);
                        break;
                    case '`CrossRef2`':
                        $stmt->bindValue($identifier, $this->crossref2, PDO::PARAM_INT);
                        break;
                    case '`CrossRef3`':
                        $stmt->bindValue($identifier, $this->crossref3, PDO::PARAM_INT);
                        break;
                    case '`CrossRef4`':
                        $stmt->bindValue($identifier, $this->crossref4, PDO::PARAM_INT);
                        break;
                    case '`CrossRef5`':
                        $stmt->bindValue($identifier, $this->crossref5, PDO::PARAM_INT);
                        break;
                    case '`CAS_REF_NO`':
                        $stmt->bindValue($identifier, $this->cas_ref_no, PDO::PARAM_INT);
                        break;
                    case '`Ecology`':
                        $stmt->bindValue($identifier, $this->ecology, PDO::PARAM_INT);
                        break;
                    case '`Ecotoxicology`':
                        $stmt->bindValue($identifier, $this->ecotoxicology, PDO::PARAM_INT);
                        break;
                    case '`PopDynamics`':
                        $stmt->bindValue($identifier, $this->popdynamics, PDO::PARAM_INT);
                        break;
                    case '`Aquaculture`':
                        $stmt->bindValue($identifier, $this->aquaculture, PDO::PARAM_INT);
                        break;
                    case '`Brains`':
                        $stmt->bindValue($identifier, $this->brains, PDO::PARAM_INT);
                        break;
                    case '`Reproduction`':
                        $stmt->bindValue($identifier, $this->reproduction, PDO::PARAM_INT);
                        break;
                    case '`Migration`':
                        $stmt->bindValue($identifier, $this->migration, PDO::PARAM_INT);
                        break;
                    case '`Growth`':
                        $stmt->bindValue($identifier, $this->growth, PDO::PARAM_INT);
                        break;
                    case '`Recruitment`':
                        $stmt->bindValue($identifier, $this->recruitment, PDO::PARAM_INT);
                        break;
                    case '`Vision`':
                        $stmt->bindValue($identifier, $this->vision, PDO::PARAM_INT);
                        break;
                    case '`Ciguatera`':
                        $stmt->bindValue($identifier, $this->ciguatera, PDO::PARAM_INT);
                        break;
                    case '`FryNursery`':
                        $stmt->bindValue($identifier, $this->frynursery, PDO::PARAM_INT);
                        break;
                    case '`Maturity`':
                        $stmt->bindValue($identifier, $this->maturity, PDO::PARAM_INT);
                        break;
                    case '`Distribution`':
                        $stmt->bindValue($identifier, $this->distribution, PDO::PARAM_INT);
                        break;
                    case '`Mortality`':
                        $stmt->bindValue($identifier, $this->mortality, PDO::PARAM_INT);
                        break;
                    case '`FarmingSystem`':
                        $stmt->bindValue($identifier, $this->farmingsystem, PDO::PARAM_INT);
                        break;
                    case '`Eggs`':
                        $stmt->bindValue($identifier, $this->eggs, PDO::PARAM_INT);
                        break;
                    case '`Habitats`':
                        $stmt->bindValue($identifier, $this->habitats, PDO::PARAM_INT);
                        break;
                    case '`LengthWeight`':
                        $stmt->bindValue($identifier, $this->lengthweight, PDO::PARAM_INT);
                        break;
                    case '`LengthFreq`':
                        $stmt->bindValue($identifier, $this->lengthfreq, PDO::PARAM_INT);
                        break;
                    case '`Strains`':
                        $stmt->bindValue($identifier, $this->strains, PDO::PARAM_INT);
                        break;
                    case '`Larvae`':
                        $stmt->bindValue($identifier, $this->larvae, PDO::PARAM_INT);
                        break;
                    case '`Environment`':
                        $stmt->bindValue($identifier, $this->environment, PDO::PARAM_INT);
                        break;
                    case '`Stocks`':
                        $stmt->bindValue($identifier, $this->stocks, PDO::PARAM_INT);
                        break;
                    case '`Genetics`':
                        $stmt->bindValue($identifier, $this->genetics, PDO::PARAM_INT);
                        break;
                    case '`Spawning`':
                        $stmt->bindValue($identifier, $this->spawning, PDO::PARAM_INT);
                        break;
                    case '`Abundance`':
                        $stmt->bindValue($identifier, $this->abundance, PDO::PARAM_INT);
                        break;
                    case '`Catches`':
                        $stmt->bindValue($identifier, $this->catches, PDO::PARAM_INT);
                        break;
                    case '`Electrophoresis`':
                        $stmt->bindValue($identifier, $this->electrophoresis, PDO::PARAM_INT);
                        break;
                    case '`SexRatio`':
                        $stmt->bindValue($identifier, $this->sexratio, PDO::PARAM_INT);
                        break;
                    case '`Activity`':
                        $stmt->bindValue($identifier, $this->activity, PDO::PARAM_INT);
                        break;
                    case '`Effort`':
                        $stmt->bindValue($identifier, $this->effort, PDO::PARAM_INT);
                        break;
                    case '`Diseases`':
                        $stmt->bindValue($identifier, $this->diseases, PDO::PARAM_INT);
                        break;
                    case '`Predators`':
                        $stmt->bindValue($identifier, $this->predators, PDO::PARAM_INT);
                        break;
                    case '`Behavior`':
                        $stmt->bindValue($identifier, $this->behavior, PDO::PARAM_INT);
                        break;
                    case '`Management`':
                        $stmt->bindValue($identifier, $this->management, PDO::PARAM_INT);
                        break;
                    case '`Introduction`':
                        $stmt->bindValue($identifier, $this->introduction, PDO::PARAM_INT);
                        break;
                    case '`Competitors`':
                        $stmt->bindValue($identifier, $this->competitors, PDO::PARAM_INT);
                        break;
                    case '`Food`':
                        $stmt->bindValue($identifier, $this->food, PDO::PARAM_INT);
                        break;
                    case '`Nomenclature`':
                        $stmt->bindValue($identifier, $this->nomenclature, PDO::PARAM_INT);
                        break;
                    case '`Revision`':
                        $stmt->bindValue($identifier, $this->revision, PDO::PARAM_INT);
                        break;
                    case '`Physiology`':
                        $stmt->bindValue($identifier, $this->physiology, PDO::PARAM_INT);
                        break;
                    case '`Morphology`':
                        $stmt->bindValue($identifier, $this->morphology, PDO::PARAM_INT);
                        break;
                    case '`Otolith`':
                        $stmt->bindValue($identifier, $this->otolith, PDO::PARAM_INT);
                        break;
                    case '`FoodConsum`':
                        $stmt->bindValue($identifier, $this->foodconsum, PDO::PARAM_INT);
                        break;
                    case '`OrigDescr`':
                        $stmt->bindValue($identifier, $this->origdescr, PDO::PARAM_INT);
                        break;
                    case '`Oxygen`':
                        $stmt->bindValue($identifier, $this->oxygen, PDO::PARAM_INT);
                        break;
                    case '`MaxLength`':
                        $stmt->bindValue($identifier, $this->maxlength, PDO::PARAM_INT);
                        break;
                    case '`Diet`':
                        $stmt->bindValue($identifier, $this->diet, PDO::PARAM_INT);
                        break;
                    case '`RawData`':
                        $stmt->bindValue($identifier, $this->rawdata, PDO::PARAM_INT);
                        break;
                    case '`Speeds`':
                        $stmt->bindValue($identifier, $this->speeds, PDO::PARAM_INT);
                        break;
                    case '`MaxWeight`':
                        $stmt->bindValue($identifier, $this->maxweight, PDO::PARAM_INT);
                        break;
                    case '`Longevity`':
                        $stmt->bindValue($identifier, $this->longevity, PDO::PARAM_INT);
                        break;
                    case '`Keys`':
                        $stmt->bindValue($identifier, $this->keys, PDO::PARAM_INT);
                        break;
                    case '`Broodstock`':
                        $stmt->bindValue($identifier, $this->broodstock, PDO::PARAM_INT);
                        break;
                    case '`EggNursery`':
                        $stmt->bindValue($identifier, $this->eggnursery, PDO::PARAM_INT);
                        break;
                    case '`LarvalNursery`':
                        $stmt->bindValue($identifier, $this->larvalnursery, PDO::PARAM_INT);
                        break;
                    case '`Citation`':
                        $stmt->bindValue($identifier, $this->citation, PDO::PARAM_INT);
                        break;
                    case '`Team`':
                        $stmt->bindValue($identifier, $this->team, PDO::PARAM_INT);
                        break;
                    case '`Aquarium`':
                        $stmt->bindValue($identifier, $this->aquarium, PDO::PARAM_INT);
                        break;
                    case '`Processing`':
                        $stmt->bindValue($identifier, $this->processing, PDO::PARAM_INT);
                        break;
                    case '`Comname`':
                        $stmt->bindValue($identifier, $this->comname, PDO::PARAM_INT);
                        break;
                    case '`Pictures`':
                        $stmt->bindValue($identifier, $this->pictures, PDO::PARAM_INT);
                        break;
                    case '`Tagrecapture`':
                        $stmt->bindValue($identifier, $this->tagrecapture, PDO::PARAM_INT);
                        break;
                    case '`Conservation`':
                        $stmt->bindValue($identifier, $this->conservation, PDO::PARAM_INT);
                        break;
                    case '`Checklist`':
                        $stmt->bindValue($identifier, $this->checklist, PDO::PARAM_INT);
                        break;
                    case '`ISBN`':
                        $stmt->bindValue($identifier, $this->isbn, PDO::PARAM_STR);
                        break;
                    case '`DOI`':
                        $stmt->bindValue($identifier, $this->doi, PDO::PARAM_STR);
                        break;
                    case '`AuthorEmail`':
                        $stmt->bindValue($identifier, $this->authoremail, PDO::PARAM_STR);
                        break;
                    case '`AuthorAdress`':
                        $stmt->bindValue($identifier, $this->authoradress, PDO::PARAM_STR);
                        break;
                    case '`PaperURL`':
                        $stmt->bindValue($identifier, $this->paperurl, PDO::PARAM_STR);
                        break;
                    case '`Used`':
                        $stmt->bindValue($identifier, $this->used, PDO::PARAM_STR);
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


            if (($retval = RefrensPeer::doValidate($this, $columns)) !== true) {
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
        $pos = RefrensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefno();
                break;
            case 2:
                return $this->getRmsno();
                break;
            case 3:
                return $this->getAuthor();
                break;
            case 4:
                return $this->getYear();
                break;
            case 5:
                return $this->getTitle();
                break;
            case 6:
                return $this->getSource();
                break;
            case 7:
                return $this->getSourceunique();
                break;
            case 8:
                return $this->getFirstauthor();
                break;
            case 9:
                return $this->getLanguage();
                break;
            case 10:
                return $this->getComplete();
                break;
            case 11:
                return $this->getReftype();
                break;
            case 12:
                return $this->getKeywords();
                break;
            case 13:
                return $this->getRemarks();
                break;
            case 14:
                return $this->getCrossref1();
                break;
            case 15:
                return $this->getCrossref2();
                break;
            case 16:
                return $this->getCrossref3();
                break;
            case 17:
                return $this->getCrossref4();
                break;
            case 18:
                return $this->getCrossref5();
                break;
            case 19:
                return $this->getCasRefNo();
                break;
            case 20:
                return $this->getEcology();
                break;
            case 21:
                return $this->getEcotoxicology();
                break;
            case 22:
                return $this->getPopdynamics();
                break;
            case 23:
                return $this->getAquaculture();
                break;
            case 24:
                return $this->getBrains();
                break;
            case 25:
                return $this->getReproduction();
                break;
            case 26:
                return $this->getMigration();
                break;
            case 27:
                return $this->getGrowth();
                break;
            case 28:
                return $this->getRecruitment();
                break;
            case 29:
                return $this->getVision();
                break;
            case 30:
                return $this->getCiguatera();
                break;
            case 31:
                return $this->getFrynursery();
                break;
            case 32:
                return $this->getMaturity();
                break;
            case 33:
                return $this->getDistribution();
                break;
            case 34:
                return $this->getMortality();
                break;
            case 35:
                return $this->getFarmingsystem();
                break;
            case 36:
                return $this->getEggs();
                break;
            case 37:
                return $this->getHabitats();
                break;
            case 38:
                return $this->getLengthweight();
                break;
            case 39:
                return $this->getLengthfreq();
                break;
            case 40:
                return $this->getStrains();
                break;
            case 41:
                return $this->getLarvae();
                break;
            case 42:
                return $this->getEnvironment();
                break;
            case 43:
                return $this->getStocks();
                break;
            case 44:
                return $this->getGenetics();
                break;
            case 45:
                return $this->getSpawning();
                break;
            case 46:
                return $this->getAbundance();
                break;
            case 47:
                return $this->getCatches();
                break;
            case 48:
                return $this->getElectrophoresis();
                break;
            case 49:
                return $this->getSexratio();
                break;
            case 50:
                return $this->getActivity();
                break;
            case 51:
                return $this->getEffort();
                break;
            case 52:
                return $this->getDiseases();
                break;
            case 53:
                return $this->getPredators();
                break;
            case 54:
                return $this->getBehavior();
                break;
            case 55:
                return $this->getManagement();
                break;
            case 56:
                return $this->getIntroduction();
                break;
            case 57:
                return $this->getCompetitors();
                break;
            case 58:
                return $this->getFood();
                break;
            case 59:
                return $this->getNomenclature();
                break;
            case 60:
                return $this->getRevision();
                break;
            case 61:
                return $this->getPhysiology();
                break;
            case 62:
                return $this->getMorphology();
                break;
            case 63:
                return $this->getOtolith();
                break;
            case 64:
                return $this->getFoodconsum();
                break;
            case 65:
                return $this->getOrigdescr();
                break;
            case 66:
                return $this->getOxygen();
                break;
            case 67:
                return $this->getMaxlength();
                break;
            case 68:
                return $this->getDiet();
                break;
            case 69:
                return $this->getRawdata();
                break;
            case 70:
                return $this->getSpeeds();
                break;
            case 71:
                return $this->getMaxweight();
                break;
            case 72:
                return $this->getLongevity();
                break;
            case 73:
                return $this->getKeys();
                break;
            case 74:
                return $this->getBroodstock();
                break;
            case 75:
                return $this->getEggnursery();
                break;
            case 76:
                return $this->getLarvalnursery();
                break;
            case 77:
                return $this->getCitation();
                break;
            case 78:
                return $this->getTeam();
                break;
            case 79:
                return $this->getAquarium();
                break;
            case 80:
                return $this->getProcessing();
                break;
            case 81:
                return $this->getComname();
                break;
            case 82:
                return $this->getPictures();
                break;
            case 83:
                return $this->getTagrecapture();
                break;
            case 84:
                return $this->getConservation();
                break;
            case 85:
                return $this->getChecklist();
                break;
            case 86:
                return $this->getIsbn();
                break;
            case 87:
                return $this->getDoi();
                break;
            case 88:
                return $this->getAuthoremail();
                break;
            case 89:
                return $this->getAuthoradress();
                break;
            case 90:
                return $this->getPaperurl();
                break;
            case 91:
                return $this->getUsed();
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
        if (isset($alreadyDumpedObjects['Refrens'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Refrens'][$this->getPrimaryKey()] = true;
        $keys = RefrensPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getRefno(),
            $keys[2] => $this->getRmsno(),
            $keys[3] => $this->getAuthor(),
            $keys[4] => $this->getYear(),
            $keys[5] => $this->getTitle(),
            $keys[6] => $this->getSource(),
            $keys[7] => $this->getSourceunique(),
            $keys[8] => $this->getFirstauthor(),
            $keys[9] => $this->getLanguage(),
            $keys[10] => $this->getComplete(),
            $keys[11] => $this->getReftype(),
            $keys[12] => $this->getKeywords(),
            $keys[13] => $this->getRemarks(),
            $keys[14] => $this->getCrossref1(),
            $keys[15] => $this->getCrossref2(),
            $keys[16] => $this->getCrossref3(),
            $keys[17] => $this->getCrossref4(),
            $keys[18] => $this->getCrossref5(),
            $keys[19] => $this->getCasRefNo(),
            $keys[20] => $this->getEcology(),
            $keys[21] => $this->getEcotoxicology(),
            $keys[22] => $this->getPopdynamics(),
            $keys[23] => $this->getAquaculture(),
            $keys[24] => $this->getBrains(),
            $keys[25] => $this->getReproduction(),
            $keys[26] => $this->getMigration(),
            $keys[27] => $this->getGrowth(),
            $keys[28] => $this->getRecruitment(),
            $keys[29] => $this->getVision(),
            $keys[30] => $this->getCiguatera(),
            $keys[31] => $this->getFrynursery(),
            $keys[32] => $this->getMaturity(),
            $keys[33] => $this->getDistribution(),
            $keys[34] => $this->getMortality(),
            $keys[35] => $this->getFarmingsystem(),
            $keys[36] => $this->getEggs(),
            $keys[37] => $this->getHabitats(),
            $keys[38] => $this->getLengthweight(),
            $keys[39] => $this->getLengthfreq(),
            $keys[40] => $this->getStrains(),
            $keys[41] => $this->getLarvae(),
            $keys[42] => $this->getEnvironment(),
            $keys[43] => $this->getStocks(),
            $keys[44] => $this->getGenetics(),
            $keys[45] => $this->getSpawning(),
            $keys[46] => $this->getAbundance(),
            $keys[47] => $this->getCatches(),
            $keys[48] => $this->getElectrophoresis(),
            $keys[49] => $this->getSexratio(),
            $keys[50] => $this->getActivity(),
            $keys[51] => $this->getEffort(),
            $keys[52] => $this->getDiseases(),
            $keys[53] => $this->getPredators(),
            $keys[54] => $this->getBehavior(),
            $keys[55] => $this->getManagement(),
            $keys[56] => $this->getIntroduction(),
            $keys[57] => $this->getCompetitors(),
            $keys[58] => $this->getFood(),
            $keys[59] => $this->getNomenclature(),
            $keys[60] => $this->getRevision(),
            $keys[61] => $this->getPhysiology(),
            $keys[62] => $this->getMorphology(),
            $keys[63] => $this->getOtolith(),
            $keys[64] => $this->getFoodconsum(),
            $keys[65] => $this->getOrigdescr(),
            $keys[66] => $this->getOxygen(),
            $keys[67] => $this->getMaxlength(),
            $keys[68] => $this->getDiet(),
            $keys[69] => $this->getRawdata(),
            $keys[70] => $this->getSpeeds(),
            $keys[71] => $this->getMaxweight(),
            $keys[72] => $this->getLongevity(),
            $keys[73] => $this->getKeys(),
            $keys[74] => $this->getBroodstock(),
            $keys[75] => $this->getEggnursery(),
            $keys[76] => $this->getLarvalnursery(),
            $keys[77] => $this->getCitation(),
            $keys[78] => $this->getTeam(),
            $keys[79] => $this->getAquarium(),
            $keys[80] => $this->getProcessing(),
            $keys[81] => $this->getComname(),
            $keys[82] => $this->getPictures(),
            $keys[83] => $this->getTagrecapture(),
            $keys[84] => $this->getConservation(),
            $keys[85] => $this->getChecklist(),
            $keys[86] => $this->getIsbn(),
            $keys[87] => $this->getDoi(),
            $keys[88] => $this->getAuthoremail(),
            $keys[89] => $this->getAuthoradress(),
            $keys[90] => $this->getPaperurl(),
            $keys[91] => $this->getUsed(),
            $keys[92] => $this->getEntered(),
            $keys[93] => $this->getDateentered(),
            $keys[94] => $this->getModified(),
            $keys[95] => $this->getDatemodified(),
            $keys[96] => $this->getExpert(),
            $keys[97] => $this->getDatechecked(),
            $keys[98] => $this->getTs(),
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
        $pos = RefrensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefno($value);
                break;
            case 2:
                $this->setRmsno($value);
                break;
            case 3:
                $this->setAuthor($value);
                break;
            case 4:
                $this->setYear($value);
                break;
            case 5:
                $this->setTitle($value);
                break;
            case 6:
                $this->setSource($value);
                break;
            case 7:
                $this->setSourceunique($value);
                break;
            case 8:
                $this->setFirstauthor($value);
                break;
            case 9:
                $this->setLanguage($value);
                break;
            case 10:
                $this->setComplete($value);
                break;
            case 11:
                $this->setReftype($value);
                break;
            case 12:
                $this->setKeywords($value);
                break;
            case 13:
                $this->setRemarks($value);
                break;
            case 14:
                $this->setCrossref1($value);
                break;
            case 15:
                $this->setCrossref2($value);
                break;
            case 16:
                $this->setCrossref3($value);
                break;
            case 17:
                $this->setCrossref4($value);
                break;
            case 18:
                $this->setCrossref5($value);
                break;
            case 19:
                $this->setCasRefNo($value);
                break;
            case 20:
                $this->setEcology($value);
                break;
            case 21:
                $this->setEcotoxicology($value);
                break;
            case 22:
                $this->setPopdynamics($value);
                break;
            case 23:
                $this->setAquaculture($value);
                break;
            case 24:
                $this->setBrains($value);
                break;
            case 25:
                $this->setReproduction($value);
                break;
            case 26:
                $this->setMigration($value);
                break;
            case 27:
                $this->setGrowth($value);
                break;
            case 28:
                $this->setRecruitment($value);
                break;
            case 29:
                $this->setVision($value);
                break;
            case 30:
                $this->setCiguatera($value);
                break;
            case 31:
                $this->setFrynursery($value);
                break;
            case 32:
                $this->setMaturity($value);
                break;
            case 33:
                $this->setDistribution($value);
                break;
            case 34:
                $this->setMortality($value);
                break;
            case 35:
                $this->setFarmingsystem($value);
                break;
            case 36:
                $this->setEggs($value);
                break;
            case 37:
                $this->setHabitats($value);
                break;
            case 38:
                $this->setLengthweight($value);
                break;
            case 39:
                $this->setLengthfreq($value);
                break;
            case 40:
                $this->setStrains($value);
                break;
            case 41:
                $this->setLarvae($value);
                break;
            case 42:
                $this->setEnvironment($value);
                break;
            case 43:
                $this->setStocks($value);
                break;
            case 44:
                $this->setGenetics($value);
                break;
            case 45:
                $this->setSpawning($value);
                break;
            case 46:
                $this->setAbundance($value);
                break;
            case 47:
                $this->setCatches($value);
                break;
            case 48:
                $this->setElectrophoresis($value);
                break;
            case 49:
                $this->setSexratio($value);
                break;
            case 50:
                $this->setActivity($value);
                break;
            case 51:
                $this->setEffort($value);
                break;
            case 52:
                $this->setDiseases($value);
                break;
            case 53:
                $this->setPredators($value);
                break;
            case 54:
                $this->setBehavior($value);
                break;
            case 55:
                $this->setManagement($value);
                break;
            case 56:
                $this->setIntroduction($value);
                break;
            case 57:
                $this->setCompetitors($value);
                break;
            case 58:
                $this->setFood($value);
                break;
            case 59:
                $this->setNomenclature($value);
                break;
            case 60:
                $this->setRevision($value);
                break;
            case 61:
                $this->setPhysiology($value);
                break;
            case 62:
                $this->setMorphology($value);
                break;
            case 63:
                $this->setOtolith($value);
                break;
            case 64:
                $this->setFoodconsum($value);
                break;
            case 65:
                $this->setOrigdescr($value);
                break;
            case 66:
                $this->setOxygen($value);
                break;
            case 67:
                $this->setMaxlength($value);
                break;
            case 68:
                $this->setDiet($value);
                break;
            case 69:
                $this->setRawdata($value);
                break;
            case 70:
                $this->setSpeeds($value);
                break;
            case 71:
                $this->setMaxweight($value);
                break;
            case 72:
                $this->setLongevity($value);
                break;
            case 73:
                $this->setKeys($value);
                break;
            case 74:
                $this->setBroodstock($value);
                break;
            case 75:
                $this->setEggnursery($value);
                break;
            case 76:
                $this->setLarvalnursery($value);
                break;
            case 77:
                $this->setCitation($value);
                break;
            case 78:
                $this->setTeam($value);
                break;
            case 79:
                $this->setAquarium($value);
                break;
            case 80:
                $this->setProcessing($value);
                break;
            case 81:
                $this->setComname($value);
                break;
            case 82:
                $this->setPictures($value);
                break;
            case 83:
                $this->setTagrecapture($value);
                break;
            case 84:
                $this->setConservation($value);
                break;
            case 85:
                $this->setChecklist($value);
                break;
            case 86:
                $this->setIsbn($value);
                break;
            case 87:
                $this->setDoi($value);
                break;
            case 88:
                $this->setAuthoremail($value);
                break;
            case 89:
                $this->setAuthoradress($value);
                break;
            case 90:
                $this->setPaperurl($value);
                break;
            case 91:
                $this->setUsed($value);
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
        $keys = RefrensPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRmsno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAuthor($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setYear($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTitle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSource($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSourceunique($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFirstauthor($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLanguage($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setComplete($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setReftype($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setKeywords($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRemarks($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCrossref1($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCrossref2($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCrossref3($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCrossref4($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCrossref5($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setCasRefNo($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEcology($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEcotoxicology($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPopdynamics($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAquaculture($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setBrains($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setReproduction($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMigration($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setGrowth($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setRecruitment($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setVision($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCiguatera($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFrynursery($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setMaturity($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDistribution($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setMortality($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setFarmingsystem($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEggs($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setHabitats($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setLengthweight($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setLengthfreq($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setStrains($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setLarvae($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setEnvironment($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setStocks($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setGenetics($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setSpawning($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setAbundance($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setCatches($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setElectrophoresis($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setSexratio($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setActivity($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setEffort($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setDiseases($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setPredators($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setBehavior($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setManagement($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setIntroduction($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setCompetitors($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setFood($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setNomenclature($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setRevision($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setPhysiology($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setMorphology($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setOtolith($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setFoodconsum($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setOrigdescr($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setOxygen($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setMaxlength($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setDiet($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setRawdata($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setSpeeds($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setMaxweight($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setLongevity($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setKeys($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setBroodstock($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setEggnursery($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setLarvalnursery($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setCitation($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setTeam($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setAquarium($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setProcessing($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setComname($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setPictures($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setTagrecapture($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setConservation($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setChecklist($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setIsbn($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setDoi($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setAuthoremail($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setAuthoradress($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setPaperurl($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setUsed($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setEntered($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setDateentered($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setModified($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setDatemodified($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setExpert($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setDatechecked($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setTs($arr[$keys[98]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RefrensPeer::DATABASE_NAME);

        if ($this->isColumnModified(RefrensPeer::AUTOCTR)) $criteria->add(RefrensPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(RefrensPeer::REFNO)) $criteria->add(RefrensPeer::REFNO, $this->refno);
        if ($this->isColumnModified(RefrensPeer::RMSNO)) $criteria->add(RefrensPeer::RMSNO, $this->rmsno);
        if ($this->isColumnModified(RefrensPeer::AUTHOR)) $criteria->add(RefrensPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(RefrensPeer::YEAR)) $criteria->add(RefrensPeer::YEAR, $this->year);
        if ($this->isColumnModified(RefrensPeer::TITLE)) $criteria->add(RefrensPeer::TITLE, $this->title);
        if ($this->isColumnModified(RefrensPeer::SOURCE)) $criteria->add(RefrensPeer::SOURCE, $this->source);
        if ($this->isColumnModified(RefrensPeer::SOURCEUNIQUE)) $criteria->add(RefrensPeer::SOURCEUNIQUE, $this->sourceunique);
        if ($this->isColumnModified(RefrensPeer::FIRSTAUTHOR)) $criteria->add(RefrensPeer::FIRSTAUTHOR, $this->firstauthor);
        if ($this->isColumnModified(RefrensPeer::LANGUAGE)) $criteria->add(RefrensPeer::LANGUAGE, $this->language);
        if ($this->isColumnModified(RefrensPeer::COMPLETE)) $criteria->add(RefrensPeer::COMPLETE, $this->complete);
        if ($this->isColumnModified(RefrensPeer::REFTYPE)) $criteria->add(RefrensPeer::REFTYPE, $this->reftype);
        if ($this->isColumnModified(RefrensPeer::KEYWORDS)) $criteria->add(RefrensPeer::KEYWORDS, $this->keywords);
        if ($this->isColumnModified(RefrensPeer::REMARKS)) $criteria->add(RefrensPeer::REMARKS, $this->remarks);
        if ($this->isColumnModified(RefrensPeer::CROSSREF1)) $criteria->add(RefrensPeer::CROSSREF1, $this->crossref1);
        if ($this->isColumnModified(RefrensPeer::CROSSREF2)) $criteria->add(RefrensPeer::CROSSREF2, $this->crossref2);
        if ($this->isColumnModified(RefrensPeer::CROSSREF3)) $criteria->add(RefrensPeer::CROSSREF3, $this->crossref3);
        if ($this->isColumnModified(RefrensPeer::CROSSREF4)) $criteria->add(RefrensPeer::CROSSREF4, $this->crossref4);
        if ($this->isColumnModified(RefrensPeer::CROSSREF5)) $criteria->add(RefrensPeer::CROSSREF5, $this->crossref5);
        if ($this->isColumnModified(RefrensPeer::CAS_REF_NO)) $criteria->add(RefrensPeer::CAS_REF_NO, $this->cas_ref_no);
        if ($this->isColumnModified(RefrensPeer::ECOLOGY)) $criteria->add(RefrensPeer::ECOLOGY, $this->ecology);
        if ($this->isColumnModified(RefrensPeer::ECOTOXICOLOGY)) $criteria->add(RefrensPeer::ECOTOXICOLOGY, $this->ecotoxicology);
        if ($this->isColumnModified(RefrensPeer::POPDYNAMICS)) $criteria->add(RefrensPeer::POPDYNAMICS, $this->popdynamics);
        if ($this->isColumnModified(RefrensPeer::AQUACULTURE)) $criteria->add(RefrensPeer::AQUACULTURE, $this->aquaculture);
        if ($this->isColumnModified(RefrensPeer::BRAINS)) $criteria->add(RefrensPeer::BRAINS, $this->brains);
        if ($this->isColumnModified(RefrensPeer::REPRODUCTION)) $criteria->add(RefrensPeer::REPRODUCTION, $this->reproduction);
        if ($this->isColumnModified(RefrensPeer::MIGRATION)) $criteria->add(RefrensPeer::MIGRATION, $this->migration);
        if ($this->isColumnModified(RefrensPeer::GROWTH)) $criteria->add(RefrensPeer::GROWTH, $this->growth);
        if ($this->isColumnModified(RefrensPeer::RECRUITMENT)) $criteria->add(RefrensPeer::RECRUITMENT, $this->recruitment);
        if ($this->isColumnModified(RefrensPeer::VISION)) $criteria->add(RefrensPeer::VISION, $this->vision);
        if ($this->isColumnModified(RefrensPeer::CIGUATERA)) $criteria->add(RefrensPeer::CIGUATERA, $this->ciguatera);
        if ($this->isColumnModified(RefrensPeer::FRYNURSERY)) $criteria->add(RefrensPeer::FRYNURSERY, $this->frynursery);
        if ($this->isColumnModified(RefrensPeer::MATURITY)) $criteria->add(RefrensPeer::MATURITY, $this->maturity);
        if ($this->isColumnModified(RefrensPeer::DISTRIBUTION)) $criteria->add(RefrensPeer::DISTRIBUTION, $this->distribution);
        if ($this->isColumnModified(RefrensPeer::MORTALITY)) $criteria->add(RefrensPeer::MORTALITY, $this->mortality);
        if ($this->isColumnModified(RefrensPeer::FARMINGSYSTEM)) $criteria->add(RefrensPeer::FARMINGSYSTEM, $this->farmingsystem);
        if ($this->isColumnModified(RefrensPeer::EGGS)) $criteria->add(RefrensPeer::EGGS, $this->eggs);
        if ($this->isColumnModified(RefrensPeer::HABITATS)) $criteria->add(RefrensPeer::HABITATS, $this->habitats);
        if ($this->isColumnModified(RefrensPeer::LENGTHWEIGHT)) $criteria->add(RefrensPeer::LENGTHWEIGHT, $this->lengthweight);
        if ($this->isColumnModified(RefrensPeer::LENGTHFREQ)) $criteria->add(RefrensPeer::LENGTHFREQ, $this->lengthfreq);
        if ($this->isColumnModified(RefrensPeer::STRAINS)) $criteria->add(RefrensPeer::STRAINS, $this->strains);
        if ($this->isColumnModified(RefrensPeer::LARVAE)) $criteria->add(RefrensPeer::LARVAE, $this->larvae);
        if ($this->isColumnModified(RefrensPeer::ENVIRONMENT)) $criteria->add(RefrensPeer::ENVIRONMENT, $this->environment);
        if ($this->isColumnModified(RefrensPeer::STOCKS)) $criteria->add(RefrensPeer::STOCKS, $this->stocks);
        if ($this->isColumnModified(RefrensPeer::GENETICS)) $criteria->add(RefrensPeer::GENETICS, $this->genetics);
        if ($this->isColumnModified(RefrensPeer::SPAWNING)) $criteria->add(RefrensPeer::SPAWNING, $this->spawning);
        if ($this->isColumnModified(RefrensPeer::ABUNDANCE)) $criteria->add(RefrensPeer::ABUNDANCE, $this->abundance);
        if ($this->isColumnModified(RefrensPeer::CATCHES)) $criteria->add(RefrensPeer::CATCHES, $this->catches);
        if ($this->isColumnModified(RefrensPeer::ELECTROPHORESIS)) $criteria->add(RefrensPeer::ELECTROPHORESIS, $this->electrophoresis);
        if ($this->isColumnModified(RefrensPeer::SEXRATIO)) $criteria->add(RefrensPeer::SEXRATIO, $this->sexratio);
        if ($this->isColumnModified(RefrensPeer::ACTIVITY)) $criteria->add(RefrensPeer::ACTIVITY, $this->activity);
        if ($this->isColumnModified(RefrensPeer::EFFORT)) $criteria->add(RefrensPeer::EFFORT, $this->effort);
        if ($this->isColumnModified(RefrensPeer::DISEASES)) $criteria->add(RefrensPeer::DISEASES, $this->diseases);
        if ($this->isColumnModified(RefrensPeer::PREDATORS)) $criteria->add(RefrensPeer::PREDATORS, $this->predators);
        if ($this->isColumnModified(RefrensPeer::BEHAVIOR)) $criteria->add(RefrensPeer::BEHAVIOR, $this->behavior);
        if ($this->isColumnModified(RefrensPeer::MANAGEMENT)) $criteria->add(RefrensPeer::MANAGEMENT, $this->management);
        if ($this->isColumnModified(RefrensPeer::INTRODUCTION)) $criteria->add(RefrensPeer::INTRODUCTION, $this->introduction);
        if ($this->isColumnModified(RefrensPeer::COMPETITORS)) $criteria->add(RefrensPeer::COMPETITORS, $this->competitors);
        if ($this->isColumnModified(RefrensPeer::FOOD)) $criteria->add(RefrensPeer::FOOD, $this->food);
        if ($this->isColumnModified(RefrensPeer::NOMENCLATURE)) $criteria->add(RefrensPeer::NOMENCLATURE, $this->nomenclature);
        if ($this->isColumnModified(RefrensPeer::REVISION)) $criteria->add(RefrensPeer::REVISION, $this->revision);
        if ($this->isColumnModified(RefrensPeer::PHYSIOLOGY)) $criteria->add(RefrensPeer::PHYSIOLOGY, $this->physiology);
        if ($this->isColumnModified(RefrensPeer::MORPHOLOGY)) $criteria->add(RefrensPeer::MORPHOLOGY, $this->morphology);
        if ($this->isColumnModified(RefrensPeer::OTOLITH)) $criteria->add(RefrensPeer::OTOLITH, $this->otolith);
        if ($this->isColumnModified(RefrensPeer::FOODCONSUM)) $criteria->add(RefrensPeer::FOODCONSUM, $this->foodconsum);
        if ($this->isColumnModified(RefrensPeer::ORIGDESCR)) $criteria->add(RefrensPeer::ORIGDESCR, $this->origdescr);
        if ($this->isColumnModified(RefrensPeer::OXYGEN)) $criteria->add(RefrensPeer::OXYGEN, $this->oxygen);
        if ($this->isColumnModified(RefrensPeer::MAXLENGTH)) $criteria->add(RefrensPeer::MAXLENGTH, $this->maxlength);
        if ($this->isColumnModified(RefrensPeer::DIET)) $criteria->add(RefrensPeer::DIET, $this->diet);
        if ($this->isColumnModified(RefrensPeer::RAWDATA)) $criteria->add(RefrensPeer::RAWDATA, $this->rawdata);
        if ($this->isColumnModified(RefrensPeer::SPEEDS)) $criteria->add(RefrensPeer::SPEEDS, $this->speeds);
        if ($this->isColumnModified(RefrensPeer::MAXWEIGHT)) $criteria->add(RefrensPeer::MAXWEIGHT, $this->maxweight);
        if ($this->isColumnModified(RefrensPeer::LONGEVITY)) $criteria->add(RefrensPeer::LONGEVITY, $this->longevity);
        if ($this->isColumnModified(RefrensPeer::KEYS)) $criteria->add(RefrensPeer::KEYS, $this->keys);
        if ($this->isColumnModified(RefrensPeer::BROODSTOCK)) $criteria->add(RefrensPeer::BROODSTOCK, $this->broodstock);
        if ($this->isColumnModified(RefrensPeer::EGGNURSERY)) $criteria->add(RefrensPeer::EGGNURSERY, $this->eggnursery);
        if ($this->isColumnModified(RefrensPeer::LARVALNURSERY)) $criteria->add(RefrensPeer::LARVALNURSERY, $this->larvalnursery);
        if ($this->isColumnModified(RefrensPeer::CITATION)) $criteria->add(RefrensPeer::CITATION, $this->citation);
        if ($this->isColumnModified(RefrensPeer::TEAM)) $criteria->add(RefrensPeer::TEAM, $this->team);
        if ($this->isColumnModified(RefrensPeer::AQUARIUM)) $criteria->add(RefrensPeer::AQUARIUM, $this->aquarium);
        if ($this->isColumnModified(RefrensPeer::PROCESSING)) $criteria->add(RefrensPeer::PROCESSING, $this->processing);
        if ($this->isColumnModified(RefrensPeer::COMNAME)) $criteria->add(RefrensPeer::COMNAME, $this->comname);
        if ($this->isColumnModified(RefrensPeer::PICTURES)) $criteria->add(RefrensPeer::PICTURES, $this->pictures);
        if ($this->isColumnModified(RefrensPeer::TAGRECAPTURE)) $criteria->add(RefrensPeer::TAGRECAPTURE, $this->tagrecapture);
        if ($this->isColumnModified(RefrensPeer::CONSERVATION)) $criteria->add(RefrensPeer::CONSERVATION, $this->conservation);
        if ($this->isColumnModified(RefrensPeer::CHECKLIST)) $criteria->add(RefrensPeer::CHECKLIST, $this->checklist);
        if ($this->isColumnModified(RefrensPeer::ISBN)) $criteria->add(RefrensPeer::ISBN, $this->isbn);
        if ($this->isColumnModified(RefrensPeer::DOI)) $criteria->add(RefrensPeer::DOI, $this->doi);
        if ($this->isColumnModified(RefrensPeer::AUTHOREMAIL)) $criteria->add(RefrensPeer::AUTHOREMAIL, $this->authoremail);
        if ($this->isColumnModified(RefrensPeer::AUTHORADRESS)) $criteria->add(RefrensPeer::AUTHORADRESS, $this->authoradress);
        if ($this->isColumnModified(RefrensPeer::PAPERURL)) $criteria->add(RefrensPeer::PAPERURL, $this->paperurl);
        if ($this->isColumnModified(RefrensPeer::USED)) $criteria->add(RefrensPeer::USED, $this->used);
        if ($this->isColumnModified(RefrensPeer::ENTERED)) $criteria->add(RefrensPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(RefrensPeer::DATEENTERED)) $criteria->add(RefrensPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(RefrensPeer::MODIFIED)) $criteria->add(RefrensPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(RefrensPeer::DATEMODIFIED)) $criteria->add(RefrensPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(RefrensPeer::EXPERT)) $criteria->add(RefrensPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(RefrensPeer::DATECHECKED)) $criteria->add(RefrensPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(RefrensPeer::TS)) $criteria->add(RefrensPeer::TS, $this->ts);

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
        $criteria = new Criteria(RefrensPeer::DATABASE_NAME);
        $criteria->add(RefrensPeer::AUTOCTR, $this->autoctr);

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
     * @param object $copyObj An object of Refrens (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRefno($this->getRefno());
        $copyObj->setRmsno($this->getRmsno());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setYear($this->getYear());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setSource($this->getSource());
        $copyObj->setSourceunique($this->getSourceunique());
        $copyObj->setFirstauthor($this->getFirstauthor());
        $copyObj->setLanguage($this->getLanguage());
        $copyObj->setComplete($this->getComplete());
        $copyObj->setReftype($this->getReftype());
        $copyObj->setKeywords($this->getKeywords());
        $copyObj->setRemarks($this->getRemarks());
        $copyObj->setCrossref1($this->getCrossref1());
        $copyObj->setCrossref2($this->getCrossref2());
        $copyObj->setCrossref3($this->getCrossref3());
        $copyObj->setCrossref4($this->getCrossref4());
        $copyObj->setCrossref5($this->getCrossref5());
        $copyObj->setCasRefNo($this->getCasRefNo());
        $copyObj->setEcology($this->getEcology());
        $copyObj->setEcotoxicology($this->getEcotoxicology());
        $copyObj->setPopdynamics($this->getPopdynamics());
        $copyObj->setAquaculture($this->getAquaculture());
        $copyObj->setBrains($this->getBrains());
        $copyObj->setReproduction($this->getReproduction());
        $copyObj->setMigration($this->getMigration());
        $copyObj->setGrowth($this->getGrowth());
        $copyObj->setRecruitment($this->getRecruitment());
        $copyObj->setVision($this->getVision());
        $copyObj->setCiguatera($this->getCiguatera());
        $copyObj->setFrynursery($this->getFrynursery());
        $copyObj->setMaturity($this->getMaturity());
        $copyObj->setDistribution($this->getDistribution());
        $copyObj->setMortality($this->getMortality());
        $copyObj->setFarmingsystem($this->getFarmingsystem());
        $copyObj->setEggs($this->getEggs());
        $copyObj->setHabitats($this->getHabitats());
        $copyObj->setLengthweight($this->getLengthweight());
        $copyObj->setLengthfreq($this->getLengthfreq());
        $copyObj->setStrains($this->getStrains());
        $copyObj->setLarvae($this->getLarvae());
        $copyObj->setEnvironment($this->getEnvironment());
        $copyObj->setStocks($this->getStocks());
        $copyObj->setGenetics($this->getGenetics());
        $copyObj->setSpawning($this->getSpawning());
        $copyObj->setAbundance($this->getAbundance());
        $copyObj->setCatches($this->getCatches());
        $copyObj->setElectrophoresis($this->getElectrophoresis());
        $copyObj->setSexratio($this->getSexratio());
        $copyObj->setActivity($this->getActivity());
        $copyObj->setEffort($this->getEffort());
        $copyObj->setDiseases($this->getDiseases());
        $copyObj->setPredators($this->getPredators());
        $copyObj->setBehavior($this->getBehavior());
        $copyObj->setManagement($this->getManagement());
        $copyObj->setIntroduction($this->getIntroduction());
        $copyObj->setCompetitors($this->getCompetitors());
        $copyObj->setFood($this->getFood());
        $copyObj->setNomenclature($this->getNomenclature());
        $copyObj->setRevision($this->getRevision());
        $copyObj->setPhysiology($this->getPhysiology());
        $copyObj->setMorphology($this->getMorphology());
        $copyObj->setOtolith($this->getOtolith());
        $copyObj->setFoodconsum($this->getFoodconsum());
        $copyObj->setOrigdescr($this->getOrigdescr());
        $copyObj->setOxygen($this->getOxygen());
        $copyObj->setMaxlength($this->getMaxlength());
        $copyObj->setDiet($this->getDiet());
        $copyObj->setRawdata($this->getRawdata());
        $copyObj->setSpeeds($this->getSpeeds());
        $copyObj->setMaxweight($this->getMaxweight());
        $copyObj->setLongevity($this->getLongevity());
        $copyObj->setKeys($this->getKeys());
        $copyObj->setBroodstock($this->getBroodstock());
        $copyObj->setEggnursery($this->getEggnursery());
        $copyObj->setLarvalnursery($this->getLarvalnursery());
        $copyObj->setCitation($this->getCitation());
        $copyObj->setTeam($this->getTeam());
        $copyObj->setAquarium($this->getAquarium());
        $copyObj->setProcessing($this->getProcessing());
        $copyObj->setComname($this->getComname());
        $copyObj->setPictures($this->getPictures());
        $copyObj->setTagrecapture($this->getTagrecapture());
        $copyObj->setConservation($this->getConservation());
        $copyObj->setChecklist($this->getChecklist());
        $copyObj->setIsbn($this->getIsbn());
        $copyObj->setDoi($this->getDoi());
        $copyObj->setAuthoremail($this->getAuthoremail());
        $copyObj->setAuthoradress($this->getAuthoradress());
        $copyObj->setPaperurl($this->getPaperurl());
        $copyObj->setUsed($this->getUsed());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
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
     * @return Refrens Clone of current object.
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
     * @return RefrensPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RefrensPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->refno = null;
        $this->rmsno = null;
        $this->author = null;
        $this->year = null;
        $this->title = null;
        $this->source = null;
        $this->sourceunique = null;
        $this->firstauthor = null;
        $this->language = null;
        $this->complete = null;
        $this->reftype = null;
        $this->keywords = null;
        $this->remarks = null;
        $this->crossref1 = null;
        $this->crossref2 = null;
        $this->crossref3 = null;
        $this->crossref4 = null;
        $this->crossref5 = null;
        $this->cas_ref_no = null;
        $this->ecology = null;
        $this->ecotoxicology = null;
        $this->popdynamics = null;
        $this->aquaculture = null;
        $this->brains = null;
        $this->reproduction = null;
        $this->migration = null;
        $this->growth = null;
        $this->recruitment = null;
        $this->vision = null;
        $this->ciguatera = null;
        $this->frynursery = null;
        $this->maturity = null;
        $this->distribution = null;
        $this->mortality = null;
        $this->farmingsystem = null;
        $this->eggs = null;
        $this->habitats = null;
        $this->lengthweight = null;
        $this->lengthfreq = null;
        $this->strains = null;
        $this->larvae = null;
        $this->environment = null;
        $this->stocks = null;
        $this->genetics = null;
        $this->spawning = null;
        $this->abundance = null;
        $this->catches = null;
        $this->electrophoresis = null;
        $this->sexratio = null;
        $this->activity = null;
        $this->effort = null;
        $this->diseases = null;
        $this->predators = null;
        $this->behavior = null;
        $this->management = null;
        $this->introduction = null;
        $this->competitors = null;
        $this->food = null;
        $this->nomenclature = null;
        $this->revision = null;
        $this->physiology = null;
        $this->morphology = null;
        $this->otolith = null;
        $this->foodconsum = null;
        $this->origdescr = null;
        $this->oxygen = null;
        $this->maxlength = null;
        $this->diet = null;
        $this->rawdata = null;
        $this->speeds = null;
        $this->maxweight = null;
        $this->longevity = null;
        $this->keys = null;
        $this->broodstock = null;
        $this->eggnursery = null;
        $this->larvalnursery = null;
        $this->citation = null;
        $this->team = null;
        $this->aquarium = null;
        $this->processing = null;
        $this->comname = null;
        $this->pictures = null;
        $this->tagrecapture = null;
        $this->conservation = null;
        $this->checklist = null;
        $this->isbn = null;
        $this->doi = null;
        $this->authoremail = null;
        $this->authoradress = null;
        $this->paperurl = null;
        $this->used = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
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
        return (string) $this->exportTo(RefrensPeer::DEFAULT_STRING_FORMAT);
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
