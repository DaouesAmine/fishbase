<?php


/**
 * Base class that represents a row from the 'ecology' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcology extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EcologyPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EcologyPeer
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
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the stockcode field.
     * @var        int
     */
    protected $stockcode;

    /**
     * The value for the ecologyrefno field.
     * @var        int
     */
    protected $ecologyrefno;

    /**
     * The value for the habitatsref field.
     * @var        int
     */
    protected $habitatsref;

    /**
     * The value for the neritic field.
     * @var        int
     */
    protected $neritic;

    /**
     * The value for the supralittoralzone field.
     * @var        int
     */
    protected $supralittoralzone;

    /**
     * The value for the saltmarshes field.
     * @var        int
     */
    protected $saltmarshes;

    /**
     * The value for the littoralzone field.
     * @var        int
     */
    protected $littoralzone;

    /**
     * The value for the tidepools field.
     * @var        int
     */
    protected $tidepools;

    /**
     * The value for the intertidal field.
     * @var        int
     */
    protected $intertidal;

    /**
     * The value for the sublittoral field.
     * @var        int
     */
    protected $sublittoral;

    /**
     * The value for the caves field.
     * @var        int
     */
    protected $caves;

    /**
     * The value for the oceanic field.
     * @var        int
     */
    protected $oceanic;

    /**
     * The value for the epipelagic field.
     * @var        int
     */
    protected $epipelagic;

    /**
     * The value for the mesopelagic field.
     * @var        int
     */
    protected $mesopelagic;

    /**
     * The value for the bathypelagic field.
     * @var        int
     */
    protected $bathypelagic;

    /**
     * The value for the abyssopelagic field.
     * @var        int
     */
    protected $abyssopelagic;

    /**
     * The value for the hadopelagic field.
     * @var        int
     */
    protected $hadopelagic;

    /**
     * The value for the estuaries field.
     * @var        int
     */
    protected $estuaries;

    /**
     * The value for the mangroves field.
     * @var        int
     */
    protected $mangroves;

    /**
     * The value for the marshesswamps field.
     * @var        string
     */
    protected $marshesswamps;

    /**
     * The value for the caveanchialine field.
     * @var        int
     */
    protected $caveanchialine;

    /**
     * The value for the stream field.
     * @var        int
     */
    protected $stream;

    /**
     * The value for the lakes field.
     * @var        int
     */
    protected $lakes;

    /**
     * The value for the cave field.
     * @var        int
     */
    protected $cave;

    /**
     * The value for the cave2 field.
     * @var        int
     */
    protected $cave2;

    /**
     * The value for the herbivory2 field.
     * @var        string
     */
    protected $herbivory2;

    /**
     * The value for the herbivoryref field.
     * @var        int
     */
    protected $herbivoryref;

    /**
     * The value for the feedingtype field.
     * @var        string
     */
    protected $feedingtype;

    /**
     * The value for the feedingtyperef field.
     * @var        int
     */
    protected $feedingtyperef;

    /**
     * The value for the diettroph field.
     * @var        double
     */
    protected $diettroph;

    /**
     * The value for the dietsetroph field.
     * @var        double
     */
    protected $dietsetroph;

    /**
     * The value for the diettlu field.
     * @var        double
     */
    protected $diettlu;

    /**
     * The value for the dietsetlu field.
     * @var        double
     */
    protected $dietsetlu;

    /**
     * The value for the dietremark field.
     * @var        string
     */
    protected $dietremark;

    /**
     * The value for the dietref field.
     * @var        int
     */
    protected $dietref;

    /**
     * The value for the foodtroph field.
     * @var        double
     */
    protected $foodtroph;

    /**
     * The value for the foodsetroph field.
     * @var        double
     */
    protected $foodsetroph;

    /**
     * The value for the foodremark field.
     * @var        string
     */
    protected $foodremark;

    /**
     * The value for the foodref field.
     * @var        int
     */
    protected $foodref;

    /**
     * The value for the addrems field.
     * @var        string
     */
    protected $addrems;

    /**
     * The value for the associationref field.
     * @var        int
     */
    protected $associationref;

    /**
     * The value for the parasitism field.
     * @var        int
     */
    protected $parasitism;

    /**
     * The value for the solitary field.
     * @var        int
     */
    protected $solitary;

    /**
     * The value for the symbiosis field.
     * @var        int
     */
    protected $symbiosis;

    /**
     * The value for the symphorism field.
     * @var        int
     */
    protected $symphorism;

    /**
     * The value for the commensalism field.
     * @var        int
     */
    protected $commensalism;

    /**
     * The value for the mutualism field.
     * @var        int
     */
    protected $mutualism;

    /**
     * The value for the epiphytic field.
     * @var        int
     */
    protected $epiphytic;

    /**
     * The value for the schooling field.
     * @var        int
     */
    protected $schooling;

    /**
     * The value for the schoolingfrequency field.
     * @var        string
     */
    protected $schoolingfrequency;

    /**
     * The value for the schoolinglifestage field.
     * @var        string
     */
    protected $schoolinglifestage;

    /**
     * The value for the shoaling field.
     * @var        int
     */
    protected $shoaling;

    /**
     * The value for the shoalingfrequency field.
     * @var        string
     */
    protected $shoalingfrequency;

    /**
     * The value for the shoalinglifestage field.
     * @var        string
     */
    protected $shoalinglifestage;

    /**
     * The value for the schoolshoalref field.
     * @var        int
     */
    protected $schoolshoalref;

    /**
     * The value for the associationswith field.
     * @var        string
     */
    protected $associationswith;

    /**
     * The value for the associationsremarks field.
     * @var        string
     */
    protected $associationsremarks;

    /**
     * The value for the outsidehost field.
     * @var        int
     */
    protected $outsidehost;

    /**
     * The value for the ohremarks field.
     * @var        string
     */
    protected $ohremarks;

    /**
     * The value for the insidehost field.
     * @var        int
     */
    protected $insidehost;

    /**
     * The value for the ihremarks field.
     * @var        string
     */
    protected $ihremarks;

    /**
     * The value for the substrateref field.
     * @var        int
     */
    protected $substrateref;

    /**
     * The value for the benthic field.
     * @var        int
     */
    protected $benthic;

    /**
     * The value for the sessile field.
     * @var        int
     */
    protected $sessile;

    /**
     * The value for the mobile field.
     * @var        int
     */
    protected $mobile;

    /**
     * The value for the demersal field.
     * @var        int
     */
    protected $demersal;

    /**
     * The value for the endofauna field.
     * @var        int
     */
    protected $endofauna;

    /**
     * The value for the pelagic field.
     * @var        int
     */
    protected $pelagic;

    /**
     * The value for the megabenthos field.
     * @var        int
     */
    protected $megabenthos;

    /**
     * The value for the macrobenthos field.
     * @var        int
     */
    protected $macrobenthos;

    /**
     * The value for the meiobenthos field.
     * @var        int
     */
    protected $meiobenthos;

    /**
     * The value for the softbottom field.
     * @var        int
     */
    protected $softbottom;

    /**
     * The value for the sand field.
     * @var        int
     */
    protected $sand;

    /**
     * The value for the coarse field.
     * @var        int
     */
    protected $coarse;

    /**
     * The value for the fine field.
     * @var        int
     */
    protected $fine;

    /**
     * The value for the level field.
     * @var        int
     */
    protected $level;

    /**
     * The value for the sloping field.
     * @var        int
     */
    protected $sloping;

    /**
     * The value for the silt field.
     * @var        int
     */
    protected $silt;

    /**
     * The value for the mud field.
     * @var        int
     */
    protected $mud;

    /**
     * The value for the ooze field.
     * @var        int
     */
    protected $ooze;

    /**
     * The value for the detritus field.
     * @var        int
     */
    protected $detritus;

    /**
     * The value for the organic field.
     * @var        int
     */
    protected $organic;

    /**
     * The value for the hardbottom field.
     * @var        int
     */
    protected $hardbottom;

    /**
     * The value for the rocky field.
     * @var        int
     */
    protected $rocky;

    /**
     * The value for the rubble field.
     * @var        int
     */
    protected $rubble;

    /**
     * The value for the specialhabitatref field.
     * @var        int
     */
    protected $specialhabitatref;

    /**
     * The value for the macrophyte field.
     * @var        int
     */
    protected $macrophyte;

    /**
     * The value for the bedsbivalve field.
     * @var        int
     */
    protected $bedsbivalve;

    /**
     * The value for the bedsrock field.
     * @var        int
     */
    protected $bedsrock;

    /**
     * The value for the seagrassbeds field.
     * @var        int
     */
    protected $seagrassbeds;

    /**
     * The value for the bedsothers field.
     * @var        int
     */
    protected $bedsothers;

    /**
     * The value for the coralreefs field.
     * @var        int
     */
    protected $coralreefs;

    /**
     * The value for the reefexclusive field.
     * @var        int
     */
    protected $reefexclusive;

    /**
     * The value for the dropoffs field.
     * @var        int
     */
    protected $dropoffs;

    /**
     * The value for the reefflats field.
     * @var        int
     */
    protected $reefflats;

    /**
     * The value for the lagoons field.
     * @var        int
     */
    protected $lagoons;

    /**
     * The value for the burrows field.
     * @var        int
     */
    protected $burrows;

    /**
     * The value for the tunnels field.
     * @var        int
     */
    protected $tunnels;

    /**
     * The value for the crevices field.
     * @var        int
     */
    protected $crevices;

    /**
     * The value for the vents field.
     * @var        int
     */
    protected $vents;

    /**
     * The value for the seamounts field.
     * @var        int
     */
    protected $seamounts;

    /**
     * The value for the deepwatercorals field.
     * @var        int
     */
    protected $deepwatercorals;

    /**
     * The value for the vegetation field.
     * @var        int
     */
    protected $vegetation;

    /**
     * The value for the leaves field.
     * @var        int
     */
    protected $leaves;

    /**
     * The value for the stems field.
     * @var        int
     */
    protected $stems;

    /**
     * The value for the roots field.
     * @var        int
     */
    protected $roots;

    /**
     * The value for the driftwood field.
     * @var        int
     */
    protected $driftwood;

    /**
     * The value for the oinverterbrates field.
     * @var        int
     */
    protected $oinverterbrates;

    /**
     * The value for the oiremarks field.
     * @var        string
     */
    protected $oiremarks;

    /**
     * The value for the verterbrates field.
     * @var        int
     */
    protected $verterbrates;

    /**
     * The value for the vremarks field.
     * @var        string
     */
    protected $vremarks;

    /**
     * The value for the pilings field.
     * @var        int
     */
    protected $pilings;

    /**
     * The value for the boathulls field.
     * @var        int
     */
    protected $boathulls;

    /**
     * The value for the corals field.
     * @var        int
     */
    protected $corals;

    /**
     * The value for the softcorals field.
     * @var        int
     */
    protected $softcorals;

    /**
     * The value for the onpolyp field.
     * @var        int
     */
    protected $onpolyp;

    /**
     * The value for the betweenpolyps field.
     * @var        int
     */
    protected $betweenpolyps;

    /**
     * The value for the hardcorals field.
     * @var        int
     */
    protected $hardcorals;

    /**
     * The value for the onexoskeleton field.
     * @var        int
     */
    protected $onexoskeleton;

    /**
     * The value for the interstitialspaces field.
     * @var        int
     */
    protected $interstitialspaces;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
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
     * Get the [ecologyrefno] column value.
     *
     * @return int
     */
    public function getEcologyrefno()
    {

        return $this->ecologyrefno;
    }

    /**
     * Get the [habitatsref] column value.
     *
     * @return int
     */
    public function getHabitatsref()
    {

        return $this->habitatsref;
    }

    /**
     * Get the [neritic] column value.
     *
     * @return int
     */
    public function getNeritic()
    {

        return $this->neritic;
    }

    /**
     * Get the [supralittoralzone] column value.
     *
     * @return int
     */
    public function getSupralittoralzone()
    {

        return $this->supralittoralzone;
    }

    /**
     * Get the [saltmarshes] column value.
     *
     * @return int
     */
    public function getSaltmarshes()
    {

        return $this->saltmarshes;
    }

    /**
     * Get the [littoralzone] column value.
     *
     * @return int
     */
    public function getLittoralzone()
    {

        return $this->littoralzone;
    }

    /**
     * Get the [tidepools] column value.
     *
     * @return int
     */
    public function getTidepools()
    {

        return $this->tidepools;
    }

    /**
     * Get the [intertidal] column value.
     *
     * @return int
     */
    public function getIntertidal()
    {

        return $this->intertidal;
    }

    /**
     * Get the [sublittoral] column value.
     *
     * @return int
     */
    public function getSublittoral()
    {

        return $this->sublittoral;
    }

    /**
     * Get the [caves] column value.
     *
     * @return int
     */
    public function getCaves()
    {

        return $this->caves;
    }

    /**
     * Get the [oceanic] column value.
     *
     * @return int
     */
    public function getOceanic()
    {

        return $this->oceanic;
    }

    /**
     * Get the [epipelagic] column value.
     *
     * @return int
     */
    public function getEpipelagic()
    {

        return $this->epipelagic;
    }

    /**
     * Get the [mesopelagic] column value.
     *
     * @return int
     */
    public function getMesopelagic()
    {

        return $this->mesopelagic;
    }

    /**
     * Get the [bathypelagic] column value.
     *
     * @return int
     */
    public function getBathypelagic()
    {

        return $this->bathypelagic;
    }

    /**
     * Get the [abyssopelagic] column value.
     *
     * @return int
     */
    public function getAbyssopelagic()
    {

        return $this->abyssopelagic;
    }

    /**
     * Get the [hadopelagic] column value.
     *
     * @return int
     */
    public function getHadopelagic()
    {

        return $this->hadopelagic;
    }

    /**
     * Get the [estuaries] column value.
     *
     * @return int
     */
    public function getEstuaries()
    {

        return $this->estuaries;
    }

    /**
     * Get the [mangroves] column value.
     *
     * @return int
     */
    public function getMangroves()
    {

        return $this->mangroves;
    }

    /**
     * Get the [optionally formatted] temporal [marshesswamps] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getMarshesswamps($format = 'Y-m-d H:i:s')
    {
        if ($this->marshesswamps === null) {
            return null;
        }

        if ($this->marshesswamps === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->marshesswamps);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->marshesswamps, true), $x);
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
     * Get the [caveanchialine] column value.
     *
     * @return int
     */
    public function getCaveanchialine()
    {

        return $this->caveanchialine;
    }

    /**
     * Get the [stream] column value.
     *
     * @return int
     */
    public function getStream()
    {

        return $this->stream;
    }

    /**
     * Get the [lakes] column value.
     *
     * @return int
     */
    public function getLakes()
    {

        return $this->lakes;
    }

    /**
     * Get the [cave] column value.
     *
     * @return int
     */
    public function getCave()
    {

        return $this->cave;
    }

    /**
     * Get the [cave2] column value.
     *
     * @return int
     */
    public function getCave2()
    {

        return $this->cave2;
    }

    /**
     * Get the [herbivory2] column value.
     *
     * @return string
     */
    public function getHerbivory2()
    {

        return $this->herbivory2;
    }

    /**
     * Get the [herbivoryref] column value.
     *
     * @return int
     */
    public function getHerbivoryref()
    {

        return $this->herbivoryref;
    }

    /**
     * Get the [feedingtype] column value.
     *
     * @return string
     */
    public function getFeedingtype()
    {

        return $this->feedingtype;
    }

    /**
     * Get the [feedingtyperef] column value.
     *
     * @return int
     */
    public function getFeedingtyperef()
    {

        return $this->feedingtyperef;
    }

    /**
     * Get the [diettroph] column value.
     *
     * @return double
     */
    public function getDiettroph()
    {

        return $this->diettroph;
    }

    /**
     * Get the [dietsetroph] column value.
     *
     * @return double
     */
    public function getDietsetroph()
    {

        return $this->dietsetroph;
    }

    /**
     * Get the [diettlu] column value.
     *
     * @return double
     */
    public function getDiettlu()
    {

        return $this->diettlu;
    }

    /**
     * Get the [dietsetlu] column value.
     *
     * @return double
     */
    public function getDietsetlu()
    {

        return $this->dietsetlu;
    }

    /**
     * Get the [dietremark] column value.
     *
     * @return string
     */
    public function getDietremark()
    {

        return $this->dietremark;
    }

    /**
     * Get the [dietref] column value.
     *
     * @return int
     */
    public function getDietref()
    {

        return $this->dietref;
    }

    /**
     * Get the [foodtroph] column value.
     *
     * @return double
     */
    public function getFoodtroph()
    {

        return $this->foodtroph;
    }

    /**
     * Get the [foodsetroph] column value.
     *
     * @return double
     */
    public function getFoodsetroph()
    {

        return $this->foodsetroph;
    }

    /**
     * Get the [foodremark] column value.
     *
     * @return string
     */
    public function getFoodremark()
    {

        return $this->foodremark;
    }

    /**
     * Get the [foodref] column value.
     *
     * @return int
     */
    public function getFoodref()
    {

        return $this->foodref;
    }

    /**
     * Get the [addrems] column value.
     *
     * @return string
     */
    public function getAddrems()
    {

        return $this->addrems;
    }

    /**
     * Get the [associationref] column value.
     *
     * @return int
     */
    public function getAssociationref()
    {

        return $this->associationref;
    }

    /**
     * Get the [parasitism] column value.
     *
     * @return int
     */
    public function getParasitism()
    {

        return $this->parasitism;
    }

    /**
     * Get the [solitary] column value.
     *
     * @return int
     */
    public function getSolitary()
    {

        return $this->solitary;
    }

    /**
     * Get the [symbiosis] column value.
     *
     * @return int
     */
    public function getSymbiosis()
    {

        return $this->symbiosis;
    }

    /**
     * Get the [symphorism] column value.
     *
     * @return int
     */
    public function getSymphorism()
    {

        return $this->symphorism;
    }

    /**
     * Get the [commensalism] column value.
     *
     * @return int
     */
    public function getCommensalism()
    {

        return $this->commensalism;
    }

    /**
     * Get the [mutualism] column value.
     *
     * @return int
     */
    public function getMutualism()
    {

        return $this->mutualism;
    }

    /**
     * Get the [epiphytic] column value.
     *
     * @return int
     */
    public function getEpiphytic()
    {

        return $this->epiphytic;
    }

    /**
     * Get the [schooling] column value.
     *
     * @return int
     */
    public function getSchooling()
    {

        return $this->schooling;
    }

    /**
     * Get the [schoolingfrequency] column value.
     *
     * @return string
     */
    public function getSchoolingfrequency()
    {

        return $this->schoolingfrequency;
    }

    /**
     * Get the [schoolinglifestage] column value.
     *
     * @return string
     */
    public function getSchoolinglifestage()
    {

        return $this->schoolinglifestage;
    }

    /**
     * Get the [shoaling] column value.
     *
     * @return int
     */
    public function getShoaling()
    {

        return $this->shoaling;
    }

    /**
     * Get the [shoalingfrequency] column value.
     *
     * @return string
     */
    public function getShoalingfrequency()
    {

        return $this->shoalingfrequency;
    }

    /**
     * Get the [shoalinglifestage] column value.
     *
     * @return string
     */
    public function getShoalinglifestage()
    {

        return $this->shoalinglifestage;
    }

    /**
     * Get the [schoolshoalref] column value.
     *
     * @return int
     */
    public function getSchoolshoalref()
    {

        return $this->schoolshoalref;
    }

    /**
     * Get the [associationswith] column value.
     *
     * @return string
     */
    public function getAssociationswith()
    {

        return $this->associationswith;
    }

    /**
     * Get the [associationsremarks] column value.
     *
     * @return string
     */
    public function getAssociationsremarks()
    {

        return $this->associationsremarks;
    }

    /**
     * Get the [outsidehost] column value.
     *
     * @return int
     */
    public function getOutsidehost()
    {

        return $this->outsidehost;
    }

    /**
     * Get the [ohremarks] column value.
     *
     * @return string
     */
    public function getOhremarks()
    {

        return $this->ohremarks;
    }

    /**
     * Get the [insidehost] column value.
     *
     * @return int
     */
    public function getInsidehost()
    {

        return $this->insidehost;
    }

    /**
     * Get the [ihremarks] column value.
     *
     * @return string
     */
    public function getIhremarks()
    {

        return $this->ihremarks;
    }

    /**
     * Get the [substrateref] column value.
     *
     * @return int
     */
    public function getSubstrateref()
    {

        return $this->substrateref;
    }

    /**
     * Get the [benthic] column value.
     *
     * @return int
     */
    public function getBenthic()
    {

        return $this->benthic;
    }

    /**
     * Get the [sessile] column value.
     *
     * @return int
     */
    public function getSessile()
    {

        return $this->sessile;
    }

    /**
     * Get the [mobile] column value.
     *
     * @return int
     */
    public function getMobile()
    {

        return $this->mobile;
    }

    /**
     * Get the [demersal] column value.
     *
     * @return int
     */
    public function getDemersal()
    {

        return $this->demersal;
    }

    /**
     * Get the [endofauna] column value.
     *
     * @return int
     */
    public function getEndofauna()
    {

        return $this->endofauna;
    }

    /**
     * Get the [pelagic] column value.
     *
     * @return int
     */
    public function getPelagic()
    {

        return $this->pelagic;
    }

    /**
     * Get the [megabenthos] column value.
     *
     * @return int
     */
    public function getMegabenthos()
    {

        return $this->megabenthos;
    }

    /**
     * Get the [macrobenthos] column value.
     *
     * @return int
     */
    public function getMacrobenthos()
    {

        return $this->macrobenthos;
    }

    /**
     * Get the [meiobenthos] column value.
     *
     * @return int
     */
    public function getMeiobenthos()
    {

        return $this->meiobenthos;
    }

    /**
     * Get the [softbottom] column value.
     *
     * @return int
     */
    public function getSoftbottom()
    {

        return $this->softbottom;
    }

    /**
     * Get the [sand] column value.
     *
     * @return int
     */
    public function getSand()
    {

        return $this->sand;
    }

    /**
     * Get the [coarse] column value.
     *
     * @return int
     */
    public function getCoarse()
    {

        return $this->coarse;
    }

    /**
     * Get the [fine] column value.
     *
     * @return int
     */
    public function getFine()
    {

        return $this->fine;
    }

    /**
     * Get the [level] column value.
     *
     * @return int
     */
    public function getLevel()
    {

        return $this->level;
    }

    /**
     * Get the [sloping] column value.
     *
     * @return int
     */
    public function getSloping()
    {

        return $this->sloping;
    }

    /**
     * Get the [silt] column value.
     *
     * @return int
     */
    public function getSilt()
    {

        return $this->silt;
    }

    /**
     * Get the [mud] column value.
     *
     * @return int
     */
    public function getMud()
    {

        return $this->mud;
    }

    /**
     * Get the [ooze] column value.
     *
     * @return int
     */
    public function getOoze()
    {

        return $this->ooze;
    }

    /**
     * Get the [detritus] column value.
     *
     * @return int
     */
    public function getDetritus()
    {

        return $this->detritus;
    }

    /**
     * Get the [organic] column value.
     *
     * @return int
     */
    public function getOrganic()
    {

        return $this->organic;
    }

    /**
     * Get the [hardbottom] column value.
     *
     * @return int
     */
    public function getHardbottom()
    {

        return $this->hardbottom;
    }

    /**
     * Get the [rocky] column value.
     *
     * @return int
     */
    public function getRocky()
    {

        return $this->rocky;
    }

    /**
     * Get the [rubble] column value.
     *
     * @return int
     */
    public function getRubble()
    {

        return $this->rubble;
    }

    /**
     * Get the [specialhabitatref] column value.
     *
     * @return int
     */
    public function getSpecialhabitatref()
    {

        return $this->specialhabitatref;
    }

    /**
     * Get the [macrophyte] column value.
     *
     * @return int
     */
    public function getMacrophyte()
    {

        return $this->macrophyte;
    }

    /**
     * Get the [bedsbivalve] column value.
     *
     * @return int
     */
    public function getBedsbivalve()
    {

        return $this->bedsbivalve;
    }

    /**
     * Get the [bedsrock] column value.
     *
     * @return int
     */
    public function getBedsrock()
    {

        return $this->bedsrock;
    }

    /**
     * Get the [seagrassbeds] column value.
     *
     * @return int
     */
    public function getSeagrassbeds()
    {

        return $this->seagrassbeds;
    }

    /**
     * Get the [bedsothers] column value.
     *
     * @return int
     */
    public function getBedsothers()
    {

        return $this->bedsothers;
    }

    /**
     * Get the [coralreefs] column value.
     *
     * @return int
     */
    public function getCoralreefs()
    {

        return $this->coralreefs;
    }

    /**
     * Get the [reefexclusive] column value.
     *
     * @return int
     */
    public function getReefexclusive()
    {

        return $this->reefexclusive;
    }

    /**
     * Get the [dropoffs] column value.
     *
     * @return int
     */
    public function getDropoffs()
    {

        return $this->dropoffs;
    }

    /**
     * Get the [reefflats] column value.
     *
     * @return int
     */
    public function getReefflats()
    {

        return $this->reefflats;
    }

    /**
     * Get the [lagoons] column value.
     *
     * @return int
     */
    public function getLagoons()
    {

        return $this->lagoons;
    }

    /**
     * Get the [burrows] column value.
     *
     * @return int
     */
    public function getBurrows()
    {

        return $this->burrows;
    }

    /**
     * Get the [tunnels] column value.
     *
     * @return int
     */
    public function getTunnels()
    {

        return $this->tunnels;
    }

    /**
     * Get the [crevices] column value.
     *
     * @return int
     */
    public function getCrevices()
    {

        return $this->crevices;
    }

    /**
     * Get the [vents] column value.
     *
     * @return int
     */
    public function getVents()
    {

        return $this->vents;
    }

    /**
     * Get the [seamounts] column value.
     *
     * @return int
     */
    public function getSeamounts()
    {

        return $this->seamounts;
    }

    /**
     * Get the [deepwatercorals] column value.
     *
     * @return int
     */
    public function getDeepwatercorals()
    {

        return $this->deepwatercorals;
    }

    /**
     * Get the [vegetation] column value.
     *
     * @return int
     */
    public function getVegetation()
    {

        return $this->vegetation;
    }

    /**
     * Get the [leaves] column value.
     *
     * @return int
     */
    public function getLeaves()
    {

        return $this->leaves;
    }

    /**
     * Get the [stems] column value.
     *
     * @return int
     */
    public function getStems()
    {

        return $this->stems;
    }

    /**
     * Get the [roots] column value.
     *
     * @return int
     */
    public function getRoots()
    {

        return $this->roots;
    }

    /**
     * Get the [driftwood] column value.
     *
     * @return int
     */
    public function getDriftwood()
    {

        return $this->driftwood;
    }

    /**
     * Get the [oinverterbrates] column value.
     *
     * @return int
     */
    public function getOinverterbrates()
    {

        return $this->oinverterbrates;
    }

    /**
     * Get the [oiremarks] column value.
     *
     * @return string
     */
    public function getOiremarks()
    {

        return $this->oiremarks;
    }

    /**
     * Get the [verterbrates] column value.
     *
     * @return int
     */
    public function getVerterbrates()
    {

        return $this->verterbrates;
    }

    /**
     * Get the [vremarks] column value.
     *
     * @return string
     */
    public function getVremarks()
    {

        return $this->vremarks;
    }

    /**
     * Get the [pilings] column value.
     *
     * @return int
     */
    public function getPilings()
    {

        return $this->pilings;
    }

    /**
     * Get the [boathulls] column value.
     *
     * @return int
     */
    public function getBoathulls()
    {

        return $this->boathulls;
    }

    /**
     * Get the [corals] column value.
     *
     * @return int
     */
    public function getCorals()
    {

        return $this->corals;
    }

    /**
     * Get the [softcorals] column value.
     *
     * @return int
     */
    public function getSoftcorals()
    {

        return $this->softcorals;
    }

    /**
     * Get the [onpolyp] column value.
     *
     * @return int
     */
    public function getOnpolyp()
    {

        return $this->onpolyp;
    }

    /**
     * Get the [betweenpolyps] column value.
     *
     * @return int
     */
    public function getBetweenpolyps()
    {

        return $this->betweenpolyps;
    }

    /**
     * Get the [hardcorals] column value.
     *
     * @return int
     */
    public function getHardcorals()
    {

        return $this->hardcorals;
    }

    /**
     * Get the [onexoskeleton] column value.
     *
     * @return int
     */
    public function getOnexoskeleton()
    {

        return $this->onexoskeleton;
    }

    /**
     * Get the [interstitialspaces] column value.
     *
     * @return int
     */
    public function getInterstitialspaces()
    {

        return $this->interstitialspaces;
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
     * @return Ecology The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = EcologyPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = EcologyPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = EcologyPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [ecologyrefno] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setEcologyrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ecologyrefno !== $v) {
            $this->ecologyrefno = $v;
            $this->modifiedColumns[] = EcologyPeer::ECOLOGYREFNO;
        }


        return $this;
    } // setEcologyrefno()

    /**
     * Set the value of [habitatsref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setHabitatsref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->habitatsref !== $v) {
            $this->habitatsref = $v;
            $this->modifiedColumns[] = EcologyPeer::HABITATSREF;
        }


        return $this;
    } // setHabitatsref()

    /**
     * Set the value of [neritic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setNeritic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->neritic !== $v) {
            $this->neritic = $v;
            $this->modifiedColumns[] = EcologyPeer::NERITIC;
        }


        return $this;
    } // setNeritic()

    /**
     * Set the value of [supralittoralzone] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSupralittoralzone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->supralittoralzone !== $v) {
            $this->supralittoralzone = $v;
            $this->modifiedColumns[] = EcologyPeer::SUPRALITTORALZONE;
        }


        return $this;
    } // setSupralittoralzone()

    /**
     * Set the value of [saltmarshes] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSaltmarshes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->saltmarshes !== $v) {
            $this->saltmarshes = $v;
            $this->modifiedColumns[] = EcologyPeer::SALTMARSHES;
        }


        return $this;
    } // setSaltmarshes()

    /**
     * Set the value of [littoralzone] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setLittoralzone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->littoralzone !== $v) {
            $this->littoralzone = $v;
            $this->modifiedColumns[] = EcologyPeer::LITTORALZONE;
        }


        return $this;
    } // setLittoralzone()

    /**
     * Set the value of [tidepools] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setTidepools($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tidepools !== $v) {
            $this->tidepools = $v;
            $this->modifiedColumns[] = EcologyPeer::TIDEPOOLS;
        }


        return $this;
    } // setTidepools()

    /**
     * Set the value of [intertidal] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setIntertidal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intertidal !== $v) {
            $this->intertidal = $v;
            $this->modifiedColumns[] = EcologyPeer::INTERTIDAL;
        }


        return $this;
    } // setIntertidal()

    /**
     * Set the value of [sublittoral] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSublittoral($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sublittoral !== $v) {
            $this->sublittoral = $v;
            $this->modifiedColumns[] = EcologyPeer::SUBLITTORAL;
        }


        return $this;
    } // setSublittoral()

    /**
     * Set the value of [caves] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCaves($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caves !== $v) {
            $this->caves = $v;
            $this->modifiedColumns[] = EcologyPeer::CAVES;
        }


        return $this;
    } // setCaves()

    /**
     * Set the value of [oceanic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOceanic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oceanic !== $v) {
            $this->oceanic = $v;
            $this->modifiedColumns[] = EcologyPeer::OCEANIC;
        }


        return $this;
    } // setOceanic()

    /**
     * Set the value of [epipelagic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setEpipelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->epipelagic !== $v) {
            $this->epipelagic = $v;
            $this->modifiedColumns[] = EcologyPeer::EPIPELAGIC;
        }


        return $this;
    } // setEpipelagic()

    /**
     * Set the value of [mesopelagic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMesopelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mesopelagic !== $v) {
            $this->mesopelagic = $v;
            $this->modifiedColumns[] = EcologyPeer::MESOPELAGIC;
        }


        return $this;
    } // setMesopelagic()

    /**
     * Set the value of [bathypelagic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBathypelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bathypelagic !== $v) {
            $this->bathypelagic = $v;
            $this->modifiedColumns[] = EcologyPeer::BATHYPELAGIC;
        }


        return $this;
    } // setBathypelagic()

    /**
     * Set the value of [abyssopelagic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setAbyssopelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->abyssopelagic !== $v) {
            $this->abyssopelagic = $v;
            $this->modifiedColumns[] = EcologyPeer::ABYSSOPELAGIC;
        }


        return $this;
    } // setAbyssopelagic()

    /**
     * Set the value of [hadopelagic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setHadopelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hadopelagic !== $v) {
            $this->hadopelagic = $v;
            $this->modifiedColumns[] = EcologyPeer::HADOPELAGIC;
        }


        return $this;
    } // setHadopelagic()

    /**
     * Set the value of [estuaries] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setEstuaries($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->estuaries !== $v) {
            $this->estuaries = $v;
            $this->modifiedColumns[] = EcologyPeer::ESTUARIES;
        }


        return $this;
    } // setEstuaries()

    /**
     * Set the value of [mangroves] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMangroves($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mangroves !== $v) {
            $this->mangroves = $v;
            $this->modifiedColumns[] = EcologyPeer::MANGROVES;
        }


        return $this;
    } // setMangroves()

    /**
     * Sets the value of [marshesswamps] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecology The current object (for fluent API support)
     */
    public function setMarshesswamps($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->marshesswamps !== null || $dt !== null) {
            $currentDateAsString = ($this->marshesswamps !== null && $tmpDt = new DateTime($this->marshesswamps)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->marshesswamps = $newDateAsString;
                $this->modifiedColumns[] = EcologyPeer::MARSHESSWAMPS;
            }
        } // if either are not null


        return $this;
    } // setMarshesswamps()

    /**
     * Set the value of [caveanchialine] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCaveanchialine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caveanchialine !== $v) {
            $this->caveanchialine = $v;
            $this->modifiedColumns[] = EcologyPeer::CAVEANCHIALINE;
        }


        return $this;
    } // setCaveanchialine()

    /**
     * Set the value of [stream] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setStream($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stream !== $v) {
            $this->stream = $v;
            $this->modifiedColumns[] = EcologyPeer::STREAM;
        }


        return $this;
    } // setStream()

    /**
     * Set the value of [lakes] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setLakes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lakes !== $v) {
            $this->lakes = $v;
            $this->modifiedColumns[] = EcologyPeer::LAKES;
        }


        return $this;
    } // setLakes()

    /**
     * Set the value of [cave] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCave($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cave !== $v) {
            $this->cave = $v;
            $this->modifiedColumns[] = EcologyPeer::CAVE;
        }


        return $this;
    } // setCave()

    /**
     * Set the value of [cave2] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCave2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cave2 !== $v) {
            $this->cave2 = $v;
            $this->modifiedColumns[] = EcologyPeer::CAVE2;
        }


        return $this;
    } // setCave2()

    /**
     * Set the value of [herbivory2] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setHerbivory2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->herbivory2 !== $v) {
            $this->herbivory2 = $v;
            $this->modifiedColumns[] = EcologyPeer::HERBIVORY2;
        }


        return $this;
    } // setHerbivory2()

    /**
     * Set the value of [herbivoryref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setHerbivoryref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->herbivoryref !== $v) {
            $this->herbivoryref = $v;
            $this->modifiedColumns[] = EcologyPeer::HERBIVORYREF;
        }


        return $this;
    } // setHerbivoryref()

    /**
     * Set the value of [feedingtype] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFeedingtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->feedingtype !== $v) {
            $this->feedingtype = $v;
            $this->modifiedColumns[] = EcologyPeer::FEEDINGTYPE;
        }


        return $this;
    } // setFeedingtype()

    /**
     * Set the value of [feedingtyperef] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFeedingtyperef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->feedingtyperef !== $v) {
            $this->feedingtyperef = $v;
            $this->modifiedColumns[] = EcologyPeer::FEEDINGTYPEREF;
        }


        return $this;
    } // setFeedingtyperef()

    /**
     * Set the value of [diettroph] column.
     *
     * @param  double $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDiettroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diettroph !== $v) {
            $this->diettroph = $v;
            $this->modifiedColumns[] = EcologyPeer::DIETTROPH;
        }


        return $this;
    } // setDiettroph()

    /**
     * Set the value of [dietsetroph] column.
     *
     * @param  double $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDietsetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dietsetroph !== $v) {
            $this->dietsetroph = $v;
            $this->modifiedColumns[] = EcologyPeer::DIETSETROPH;
        }


        return $this;
    } // setDietsetroph()

    /**
     * Set the value of [diettlu] column.
     *
     * @param  double $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDiettlu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diettlu !== $v) {
            $this->diettlu = $v;
            $this->modifiedColumns[] = EcologyPeer::DIETTLU;
        }


        return $this;
    } // setDiettlu()

    /**
     * Set the value of [dietsetlu] column.
     *
     * @param  double $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDietsetlu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->dietsetlu !== $v) {
            $this->dietsetlu = $v;
            $this->modifiedColumns[] = EcologyPeer::DIETSETLU;
        }


        return $this;
    } // setDietsetlu()

    /**
     * Set the value of [dietremark] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDietremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dietremark !== $v) {
            $this->dietremark = $v;
            $this->modifiedColumns[] = EcologyPeer::DIETREMARK;
        }


        return $this;
    } // setDietremark()

    /**
     * Set the value of [dietref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDietref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dietref !== $v) {
            $this->dietref = $v;
            $this->modifiedColumns[] = EcologyPeer::DIETREF;
        }


        return $this;
    } // setDietref()

    /**
     * Set the value of [foodtroph] column.
     *
     * @param  double $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFoodtroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->foodtroph !== $v) {
            $this->foodtroph = $v;
            $this->modifiedColumns[] = EcologyPeer::FOODTROPH;
        }


        return $this;
    } // setFoodtroph()

    /**
     * Set the value of [foodsetroph] column.
     *
     * @param  double $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFoodsetroph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->foodsetroph !== $v) {
            $this->foodsetroph = $v;
            $this->modifiedColumns[] = EcologyPeer::FOODSETROPH;
        }


        return $this;
    } // setFoodsetroph()

    /**
     * Set the value of [foodremark] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFoodremark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->foodremark !== $v) {
            $this->foodremark = $v;
            $this->modifiedColumns[] = EcologyPeer::FOODREMARK;
        }


        return $this;
    } // setFoodremark()

    /**
     * Set the value of [foodref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFoodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->foodref !== $v) {
            $this->foodref = $v;
            $this->modifiedColumns[] = EcologyPeer::FOODREF;
        }


        return $this;
    } // setFoodref()

    /**
     * Set the value of [addrems] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setAddrems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addrems !== $v) {
            $this->addrems = $v;
            $this->modifiedColumns[] = EcologyPeer::ADDREMS;
        }


        return $this;
    } // setAddrems()

    /**
     * Set the value of [associationref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setAssociationref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->associationref !== $v) {
            $this->associationref = $v;
            $this->modifiedColumns[] = EcologyPeer::ASSOCIATIONREF;
        }


        return $this;
    } // setAssociationref()

    /**
     * Set the value of [parasitism] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setParasitism($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->parasitism !== $v) {
            $this->parasitism = $v;
            $this->modifiedColumns[] = EcologyPeer::PARASITISM;
        }


        return $this;
    } // setParasitism()

    /**
     * Set the value of [solitary] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSolitary($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->solitary !== $v) {
            $this->solitary = $v;
            $this->modifiedColumns[] = EcologyPeer::SOLITARY;
        }


        return $this;
    } // setSolitary()

    /**
     * Set the value of [symbiosis] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSymbiosis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->symbiosis !== $v) {
            $this->symbiosis = $v;
            $this->modifiedColumns[] = EcologyPeer::SYMBIOSIS;
        }


        return $this;
    } // setSymbiosis()

    /**
     * Set the value of [symphorism] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSymphorism($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->symphorism !== $v) {
            $this->symphorism = $v;
            $this->modifiedColumns[] = EcologyPeer::SYMPHORISM;
        }


        return $this;
    } // setSymphorism()

    /**
     * Set the value of [commensalism] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCommensalism($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->commensalism !== $v) {
            $this->commensalism = $v;
            $this->modifiedColumns[] = EcologyPeer::COMMENSALISM;
        }


        return $this;
    } // setCommensalism()

    /**
     * Set the value of [mutualism] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMutualism($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutualism !== $v) {
            $this->mutualism = $v;
            $this->modifiedColumns[] = EcologyPeer::MUTUALISM;
        }


        return $this;
    } // setMutualism()

    /**
     * Set the value of [epiphytic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setEpiphytic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->epiphytic !== $v) {
            $this->epiphytic = $v;
            $this->modifiedColumns[] = EcologyPeer::EPIPHYTIC;
        }


        return $this;
    } // setEpiphytic()

    /**
     * Set the value of [schooling] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSchooling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->schooling !== $v) {
            $this->schooling = $v;
            $this->modifiedColumns[] = EcologyPeer::SCHOOLING;
        }


        return $this;
    } // setSchooling()

    /**
     * Set the value of [schoolingfrequency] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSchoolingfrequency($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->schoolingfrequency !== $v) {
            $this->schoolingfrequency = $v;
            $this->modifiedColumns[] = EcologyPeer::SCHOOLINGFREQUENCY;
        }


        return $this;
    } // setSchoolingfrequency()

    /**
     * Set the value of [schoolinglifestage] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSchoolinglifestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->schoolinglifestage !== $v) {
            $this->schoolinglifestage = $v;
            $this->modifiedColumns[] = EcologyPeer::SCHOOLINGLIFESTAGE;
        }


        return $this;
    } // setSchoolinglifestage()

    /**
     * Set the value of [shoaling] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setShoaling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->shoaling !== $v) {
            $this->shoaling = $v;
            $this->modifiedColumns[] = EcologyPeer::SHOALING;
        }


        return $this;
    } // setShoaling()

    /**
     * Set the value of [shoalingfrequency] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setShoalingfrequency($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shoalingfrequency !== $v) {
            $this->shoalingfrequency = $v;
            $this->modifiedColumns[] = EcologyPeer::SHOALINGFREQUENCY;
        }


        return $this;
    } // setShoalingfrequency()

    /**
     * Set the value of [shoalinglifestage] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setShoalinglifestage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shoalinglifestage !== $v) {
            $this->shoalinglifestage = $v;
            $this->modifiedColumns[] = EcologyPeer::SHOALINGLIFESTAGE;
        }


        return $this;
    } // setShoalinglifestage()

    /**
     * Set the value of [schoolshoalref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSchoolshoalref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->schoolshoalref !== $v) {
            $this->schoolshoalref = $v;
            $this->modifiedColumns[] = EcologyPeer::SCHOOLSHOALREF;
        }


        return $this;
    } // setSchoolshoalref()

    /**
     * Set the value of [associationswith] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setAssociationswith($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->associationswith !== $v) {
            $this->associationswith = $v;
            $this->modifiedColumns[] = EcologyPeer::ASSOCIATIONSWITH;
        }


        return $this;
    } // setAssociationswith()

    /**
     * Set the value of [associationsremarks] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setAssociationsremarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->associationsremarks !== $v) {
            $this->associationsremarks = $v;
            $this->modifiedColumns[] = EcologyPeer::ASSOCIATIONSREMARKS;
        }


        return $this;
    } // setAssociationsremarks()

    /**
     * Set the value of [outsidehost] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOutsidehost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->outsidehost !== $v) {
            $this->outsidehost = $v;
            $this->modifiedColumns[] = EcologyPeer::OUTSIDEHOST;
        }


        return $this;
    } // setOutsidehost()

    /**
     * Set the value of [ohremarks] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOhremarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ohremarks !== $v) {
            $this->ohremarks = $v;
            $this->modifiedColumns[] = EcologyPeer::OHREMARKS;
        }


        return $this;
    } // setOhremarks()

    /**
     * Set the value of [insidehost] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setInsidehost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->insidehost !== $v) {
            $this->insidehost = $v;
            $this->modifiedColumns[] = EcologyPeer::INSIDEHOST;
        }


        return $this;
    } // setInsidehost()

    /**
     * Set the value of [ihremarks] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setIhremarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ihremarks !== $v) {
            $this->ihremarks = $v;
            $this->modifiedColumns[] = EcologyPeer::IHREMARKS;
        }


        return $this;
    } // setIhremarks()

    /**
     * Set the value of [substrateref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSubstrateref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->substrateref !== $v) {
            $this->substrateref = $v;
            $this->modifiedColumns[] = EcologyPeer::SUBSTRATEREF;
        }


        return $this;
    } // setSubstrateref()

    /**
     * Set the value of [benthic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBenthic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->benthic !== $v) {
            $this->benthic = $v;
            $this->modifiedColumns[] = EcologyPeer::BENTHIC;
        }


        return $this;
    } // setBenthic()

    /**
     * Set the value of [sessile] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSessile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sessile !== $v) {
            $this->sessile = $v;
            $this->modifiedColumns[] = EcologyPeer::SESSILE;
        }


        return $this;
    } // setSessile()

    /**
     * Set the value of [mobile] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMobile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mobile !== $v) {
            $this->mobile = $v;
            $this->modifiedColumns[] = EcologyPeer::MOBILE;
        }


        return $this;
    } // setMobile()

    /**
     * Set the value of [demersal] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDemersal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demersal !== $v) {
            $this->demersal = $v;
            $this->modifiedColumns[] = EcologyPeer::DEMERSAL;
        }


        return $this;
    } // setDemersal()

    /**
     * Set the value of [endofauna] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setEndofauna($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->endofauna !== $v) {
            $this->endofauna = $v;
            $this->modifiedColumns[] = EcologyPeer::ENDOFAUNA;
        }


        return $this;
    } // setEndofauna()

    /**
     * Set the value of [pelagic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setPelagic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pelagic !== $v) {
            $this->pelagic = $v;
            $this->modifiedColumns[] = EcologyPeer::PELAGIC;
        }


        return $this;
    } // setPelagic()

    /**
     * Set the value of [megabenthos] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMegabenthos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->megabenthos !== $v) {
            $this->megabenthos = $v;
            $this->modifiedColumns[] = EcologyPeer::MEGABENTHOS;
        }


        return $this;
    } // setMegabenthos()

    /**
     * Set the value of [macrobenthos] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMacrobenthos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->macrobenthos !== $v) {
            $this->macrobenthos = $v;
            $this->modifiedColumns[] = EcologyPeer::MACROBENTHOS;
        }


        return $this;
    } // setMacrobenthos()

    /**
     * Set the value of [meiobenthos] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMeiobenthos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->meiobenthos !== $v) {
            $this->meiobenthos = $v;
            $this->modifiedColumns[] = EcologyPeer::MEIOBENTHOS;
        }


        return $this;
    } // setMeiobenthos()

    /**
     * Set the value of [softbottom] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSoftbottom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->softbottom !== $v) {
            $this->softbottom = $v;
            $this->modifiedColumns[] = EcologyPeer::SOFTBOTTOM;
        }


        return $this;
    } // setSoftbottom()

    /**
     * Set the value of [sand] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSand($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sand !== $v) {
            $this->sand = $v;
            $this->modifiedColumns[] = EcologyPeer::SAND;
        }


        return $this;
    } // setSand()

    /**
     * Set the value of [coarse] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCoarse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coarse !== $v) {
            $this->coarse = $v;
            $this->modifiedColumns[] = EcologyPeer::COARSE;
        }


        return $this;
    } // setCoarse()

    /**
     * Set the value of [fine] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setFine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fine !== $v) {
            $this->fine = $v;
            $this->modifiedColumns[] = EcologyPeer::FINE;
        }


        return $this;
    } // setFine()

    /**
     * Set the value of [level] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setLevel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->level !== $v) {
            $this->level = $v;
            $this->modifiedColumns[] = EcologyPeer::LEVEL;
        }


        return $this;
    } // setLevel()

    /**
     * Set the value of [sloping] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSloping($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sloping !== $v) {
            $this->sloping = $v;
            $this->modifiedColumns[] = EcologyPeer::SLOPING;
        }


        return $this;
    } // setSloping()

    /**
     * Set the value of [silt] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSilt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->silt !== $v) {
            $this->silt = $v;
            $this->modifiedColumns[] = EcologyPeer::SILT;
        }


        return $this;
    } // setSilt()

    /**
     * Set the value of [mud] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMud($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mud !== $v) {
            $this->mud = $v;
            $this->modifiedColumns[] = EcologyPeer::MUD;
        }


        return $this;
    } // setMud()

    /**
     * Set the value of [ooze] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOoze($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ooze !== $v) {
            $this->ooze = $v;
            $this->modifiedColumns[] = EcologyPeer::OOZE;
        }


        return $this;
    } // setOoze()

    /**
     * Set the value of [detritus] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDetritus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->detritus !== $v) {
            $this->detritus = $v;
            $this->modifiedColumns[] = EcologyPeer::DETRITUS;
        }


        return $this;
    } // setDetritus()

    /**
     * Set the value of [organic] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOrganic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->organic !== $v) {
            $this->organic = $v;
            $this->modifiedColumns[] = EcologyPeer::ORGANIC;
        }


        return $this;
    } // setOrganic()

    /**
     * Set the value of [hardbottom] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setHardbottom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hardbottom !== $v) {
            $this->hardbottom = $v;
            $this->modifiedColumns[] = EcologyPeer::HARDBOTTOM;
        }


        return $this;
    } // setHardbottom()

    /**
     * Set the value of [rocky] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setRocky($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rocky !== $v) {
            $this->rocky = $v;
            $this->modifiedColumns[] = EcologyPeer::ROCKY;
        }


        return $this;
    } // setRocky()

    /**
     * Set the value of [rubble] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setRubble($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rubble !== $v) {
            $this->rubble = $v;
            $this->modifiedColumns[] = EcologyPeer::RUBBLE;
        }


        return $this;
    } // setRubble()

    /**
     * Set the value of [specialhabitatref] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSpecialhabitatref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->specialhabitatref !== $v) {
            $this->specialhabitatref = $v;
            $this->modifiedColumns[] = EcologyPeer::SPECIALHABITATREF;
        }


        return $this;
    } // setSpecialhabitatref()

    /**
     * Set the value of [macrophyte] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setMacrophyte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->macrophyte !== $v) {
            $this->macrophyte = $v;
            $this->modifiedColumns[] = EcologyPeer::MACROPHYTE;
        }


        return $this;
    } // setMacrophyte()

    /**
     * Set the value of [bedsbivalve] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBedsbivalve($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bedsbivalve !== $v) {
            $this->bedsbivalve = $v;
            $this->modifiedColumns[] = EcologyPeer::BEDSBIVALVE;
        }


        return $this;
    } // setBedsbivalve()

    /**
     * Set the value of [bedsrock] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBedsrock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bedsrock !== $v) {
            $this->bedsrock = $v;
            $this->modifiedColumns[] = EcologyPeer::BEDSROCK;
        }


        return $this;
    } // setBedsrock()

    /**
     * Set the value of [seagrassbeds] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSeagrassbeds($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->seagrassbeds !== $v) {
            $this->seagrassbeds = $v;
            $this->modifiedColumns[] = EcologyPeer::SEAGRASSBEDS;
        }


        return $this;
    } // setSeagrassbeds()

    /**
     * Set the value of [bedsothers] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBedsothers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bedsothers !== $v) {
            $this->bedsothers = $v;
            $this->modifiedColumns[] = EcologyPeer::BEDSOTHERS;
        }


        return $this;
    } // setBedsothers()

    /**
     * Set the value of [coralreefs] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCoralreefs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coralreefs !== $v) {
            $this->coralreefs = $v;
            $this->modifiedColumns[] = EcologyPeer::CORALREEFS;
        }


        return $this;
    } // setCoralreefs()

    /**
     * Set the value of [reefexclusive] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setReefexclusive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reefexclusive !== $v) {
            $this->reefexclusive = $v;
            $this->modifiedColumns[] = EcologyPeer::REEFEXCLUSIVE;
        }


        return $this;
    } // setReefexclusive()

    /**
     * Set the value of [dropoffs] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDropoffs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dropoffs !== $v) {
            $this->dropoffs = $v;
            $this->modifiedColumns[] = EcologyPeer::DROPOFFS;
        }


        return $this;
    } // setDropoffs()

    /**
     * Set the value of [reefflats] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setReefflats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reefflats !== $v) {
            $this->reefflats = $v;
            $this->modifiedColumns[] = EcologyPeer::REEFFLATS;
        }


        return $this;
    } // setReefflats()

    /**
     * Set the value of [lagoons] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setLagoons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lagoons !== $v) {
            $this->lagoons = $v;
            $this->modifiedColumns[] = EcologyPeer::LAGOONS;
        }


        return $this;
    } // setLagoons()

    /**
     * Set the value of [burrows] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBurrows($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->burrows !== $v) {
            $this->burrows = $v;
            $this->modifiedColumns[] = EcologyPeer::BURROWS;
        }


        return $this;
    } // setBurrows()

    /**
     * Set the value of [tunnels] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setTunnels($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tunnels !== $v) {
            $this->tunnels = $v;
            $this->modifiedColumns[] = EcologyPeer::TUNNELS;
        }


        return $this;
    } // setTunnels()

    /**
     * Set the value of [crevices] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCrevices($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crevices !== $v) {
            $this->crevices = $v;
            $this->modifiedColumns[] = EcologyPeer::CREVICES;
        }


        return $this;
    } // setCrevices()

    /**
     * Set the value of [vents] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setVents($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vents !== $v) {
            $this->vents = $v;
            $this->modifiedColumns[] = EcologyPeer::VENTS;
        }


        return $this;
    } // setVents()

    /**
     * Set the value of [seamounts] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSeamounts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->seamounts !== $v) {
            $this->seamounts = $v;
            $this->modifiedColumns[] = EcologyPeer::SEAMOUNTS;
        }


        return $this;
    } // setSeamounts()

    /**
     * Set the value of [deepwatercorals] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDeepwatercorals($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deepwatercorals !== $v) {
            $this->deepwatercorals = $v;
            $this->modifiedColumns[] = EcologyPeer::DEEPWATERCORALS;
        }


        return $this;
    } // setDeepwatercorals()

    /**
     * Set the value of [vegetation] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setVegetation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vegetation !== $v) {
            $this->vegetation = $v;
            $this->modifiedColumns[] = EcologyPeer::VEGETATION;
        }


        return $this;
    } // setVegetation()

    /**
     * Set the value of [leaves] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setLeaves($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->leaves !== $v) {
            $this->leaves = $v;
            $this->modifiedColumns[] = EcologyPeer::LEAVES;
        }


        return $this;
    } // setLeaves()

    /**
     * Set the value of [stems] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setStems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stems !== $v) {
            $this->stems = $v;
            $this->modifiedColumns[] = EcologyPeer::STEMS;
        }


        return $this;
    } // setStems()

    /**
     * Set the value of [roots] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setRoots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->roots !== $v) {
            $this->roots = $v;
            $this->modifiedColumns[] = EcologyPeer::ROOTS;
        }


        return $this;
    } // setRoots()

    /**
     * Set the value of [driftwood] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setDriftwood($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->driftwood !== $v) {
            $this->driftwood = $v;
            $this->modifiedColumns[] = EcologyPeer::DRIFTWOOD;
        }


        return $this;
    } // setDriftwood()

    /**
     * Set the value of [oinverterbrates] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOinverterbrates($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oinverterbrates !== $v) {
            $this->oinverterbrates = $v;
            $this->modifiedColumns[] = EcologyPeer::OINVERTERBRATES;
        }


        return $this;
    } // setOinverterbrates()

    /**
     * Set the value of [oiremarks] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOiremarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oiremarks !== $v) {
            $this->oiremarks = $v;
            $this->modifiedColumns[] = EcologyPeer::OIREMARKS;
        }


        return $this;
    } // setOiremarks()

    /**
     * Set the value of [verterbrates] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setVerterbrates($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verterbrates !== $v) {
            $this->verterbrates = $v;
            $this->modifiedColumns[] = EcologyPeer::VERTERBRATES;
        }


        return $this;
    } // setVerterbrates()

    /**
     * Set the value of [vremarks] column.
     *
     * @param  string $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setVremarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vremarks !== $v) {
            $this->vremarks = $v;
            $this->modifiedColumns[] = EcologyPeer::VREMARKS;
        }


        return $this;
    } // setVremarks()

    /**
     * Set the value of [pilings] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setPilings($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pilings !== $v) {
            $this->pilings = $v;
            $this->modifiedColumns[] = EcologyPeer::PILINGS;
        }


        return $this;
    } // setPilings()

    /**
     * Set the value of [boathulls] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBoathulls($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boathulls !== $v) {
            $this->boathulls = $v;
            $this->modifiedColumns[] = EcologyPeer::BOATHULLS;
        }


        return $this;
    } // setBoathulls()

    /**
     * Set the value of [corals] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setCorals($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->corals !== $v) {
            $this->corals = $v;
            $this->modifiedColumns[] = EcologyPeer::CORALS;
        }


        return $this;
    } // setCorals()

    /**
     * Set the value of [softcorals] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setSoftcorals($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->softcorals !== $v) {
            $this->softcorals = $v;
            $this->modifiedColumns[] = EcologyPeer::SOFTCORALS;
        }


        return $this;
    } // setSoftcorals()

    /**
     * Set the value of [onpolyp] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOnpolyp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->onpolyp !== $v) {
            $this->onpolyp = $v;
            $this->modifiedColumns[] = EcologyPeer::ONPOLYP;
        }


        return $this;
    } // setOnpolyp()

    /**
     * Set the value of [betweenpolyps] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setBetweenpolyps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->betweenpolyps !== $v) {
            $this->betweenpolyps = $v;
            $this->modifiedColumns[] = EcologyPeer::BETWEENPOLYPS;
        }


        return $this;
    } // setBetweenpolyps()

    /**
     * Set the value of [hardcorals] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setHardcorals($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hardcorals !== $v) {
            $this->hardcorals = $v;
            $this->modifiedColumns[] = EcologyPeer::HARDCORALS;
        }


        return $this;
    } // setHardcorals()

    /**
     * Set the value of [onexoskeleton] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setOnexoskeleton($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->onexoskeleton !== $v) {
            $this->onexoskeleton = $v;
            $this->modifiedColumns[] = EcologyPeer::ONEXOSKELETON;
        }


        return $this;
    } // setOnexoskeleton()

    /**
     * Set the value of [interstitialspaces] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setInterstitialspaces($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->interstitialspaces !== $v) {
            $this->interstitialspaces = $v;
            $this->modifiedColumns[] = EcologyPeer::INTERSTITIALSPACES;
        }


        return $this;
    } // setInterstitialspaces()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = EcologyPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecology The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = EcologyPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = EcologyPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecology The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = EcologyPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Ecology The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = EcologyPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecology The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = EcologyPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ecology The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = EcologyPeer::TS;
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
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->stockcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ecologyrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->habitatsref = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->neritic = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->supralittoralzone = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->saltmarshes = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->littoralzone = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tidepools = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->intertidal = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->sublittoral = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->caves = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->oceanic = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->epipelagic = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->mesopelagic = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->bathypelagic = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->abyssopelagic = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->hadopelagic = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->estuaries = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->mangroves = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->marshesswamps = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->caveanchialine = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->stream = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->lakes = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->cave = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->cave2 = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->herbivory2 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->herbivoryref = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->feedingtype = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->feedingtyperef = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->diettroph = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->dietsetroph = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->diettlu = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->dietsetlu = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->dietremark = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->dietref = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->foodtroph = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->foodsetroph = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->foodremark = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->foodref = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->addrems = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->associationref = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->parasitism = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->solitary = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->symbiosis = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->symphorism = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->commensalism = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->mutualism = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->epiphytic = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->schooling = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->schoolingfrequency = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->schoolinglifestage = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->shoaling = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->shoalingfrequency = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->shoalinglifestage = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->schoolshoalref = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->associationswith = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->associationsremarks = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->outsidehost = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->ohremarks = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->insidehost = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->ihremarks = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->substrateref = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->benthic = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->sessile = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->mobile = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->demersal = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->endofauna = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->pelagic = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->megabenthos = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->macrobenthos = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->meiobenthos = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->softbottom = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->sand = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->coarse = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->fine = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->level = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->sloping = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->silt = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->mud = ($row[$startcol + 80] !== null) ? (int) $row[$startcol + 80] : null;
            $this->ooze = ($row[$startcol + 81] !== null) ? (int) $row[$startcol + 81] : null;
            $this->detritus = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->organic = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->hardbottom = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->rocky = ($row[$startcol + 85] !== null) ? (int) $row[$startcol + 85] : null;
            $this->rubble = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->specialhabitatref = ($row[$startcol + 87] !== null) ? (int) $row[$startcol + 87] : null;
            $this->macrophyte = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->bedsbivalve = ($row[$startcol + 89] !== null) ? (int) $row[$startcol + 89] : null;
            $this->bedsrock = ($row[$startcol + 90] !== null) ? (int) $row[$startcol + 90] : null;
            $this->seagrassbeds = ($row[$startcol + 91] !== null) ? (int) $row[$startcol + 91] : null;
            $this->bedsothers = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->coralreefs = ($row[$startcol + 93] !== null) ? (int) $row[$startcol + 93] : null;
            $this->reefexclusive = ($row[$startcol + 94] !== null) ? (int) $row[$startcol + 94] : null;
            $this->dropoffs = ($row[$startcol + 95] !== null) ? (int) $row[$startcol + 95] : null;
            $this->reefflats = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->lagoons = ($row[$startcol + 97] !== null) ? (int) $row[$startcol + 97] : null;
            $this->burrows = ($row[$startcol + 98] !== null) ? (int) $row[$startcol + 98] : null;
            $this->tunnels = ($row[$startcol + 99] !== null) ? (int) $row[$startcol + 99] : null;
            $this->crevices = ($row[$startcol + 100] !== null) ? (int) $row[$startcol + 100] : null;
            $this->vents = ($row[$startcol + 101] !== null) ? (int) $row[$startcol + 101] : null;
            $this->seamounts = ($row[$startcol + 102] !== null) ? (int) $row[$startcol + 102] : null;
            $this->deepwatercorals = ($row[$startcol + 103] !== null) ? (int) $row[$startcol + 103] : null;
            $this->vegetation = ($row[$startcol + 104] !== null) ? (int) $row[$startcol + 104] : null;
            $this->leaves = ($row[$startcol + 105] !== null) ? (int) $row[$startcol + 105] : null;
            $this->stems = ($row[$startcol + 106] !== null) ? (int) $row[$startcol + 106] : null;
            $this->roots = ($row[$startcol + 107] !== null) ? (int) $row[$startcol + 107] : null;
            $this->driftwood = ($row[$startcol + 108] !== null) ? (int) $row[$startcol + 108] : null;
            $this->oinverterbrates = ($row[$startcol + 109] !== null) ? (int) $row[$startcol + 109] : null;
            $this->oiremarks = ($row[$startcol + 110] !== null) ? (string) $row[$startcol + 110] : null;
            $this->verterbrates = ($row[$startcol + 111] !== null) ? (int) $row[$startcol + 111] : null;
            $this->vremarks = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->pilings = ($row[$startcol + 113] !== null) ? (int) $row[$startcol + 113] : null;
            $this->boathulls = ($row[$startcol + 114] !== null) ? (int) $row[$startcol + 114] : null;
            $this->corals = ($row[$startcol + 115] !== null) ? (int) $row[$startcol + 115] : null;
            $this->softcorals = ($row[$startcol + 116] !== null) ? (int) $row[$startcol + 116] : null;
            $this->onpolyp = ($row[$startcol + 117] !== null) ? (int) $row[$startcol + 117] : null;
            $this->betweenpolyps = ($row[$startcol + 118] !== null) ? (int) $row[$startcol + 118] : null;
            $this->hardcorals = ($row[$startcol + 119] !== null) ? (int) $row[$startcol + 119] : null;
            $this->onexoskeleton = ($row[$startcol + 120] !== null) ? (int) $row[$startcol + 120] : null;
            $this->interstitialspaces = ($row[$startcol + 121] !== null) ? (int) $row[$startcol + 121] : null;
            $this->entered = ($row[$startcol + 122] !== null) ? (int) $row[$startcol + 122] : null;
            $this->dateentered = ($row[$startcol + 123] !== null) ? (string) $row[$startcol + 123] : null;
            $this->modified = ($row[$startcol + 124] !== null) ? (int) $row[$startcol + 124] : null;
            $this->datemodified = ($row[$startcol + 125] !== null) ? (string) $row[$startcol + 125] : null;
            $this->expert = ($row[$startcol + 126] !== null) ? (int) $row[$startcol + 126] : null;
            $this->datechecked = ($row[$startcol + 127] !== null) ? (string) $row[$startcol + 127] : null;
            $this->ts = ($row[$startcol + 128] !== null) ? (string) $row[$startcol + 128] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 129; // 129 = EcologyPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ecology object", $e);
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
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EcologyPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EcologyQuery::create()
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
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EcologyPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(EcologyPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(EcologyPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(EcologyPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(EcologyPeer::ECOLOGYREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`EcologyRefNo`';
        }
        if ($this->isColumnModified(EcologyPeer::HABITATSREF)) {
            $modifiedColumns[':p' . $index++]  = '`HabitatsRef`';
        }
        if ($this->isColumnModified(EcologyPeer::NERITIC)) {
            $modifiedColumns[':p' . $index++]  = '`Neritic`';
        }
        if ($this->isColumnModified(EcologyPeer::SUPRALITTORALZONE)) {
            $modifiedColumns[':p' . $index++]  = '`SupraLittoralZone`';
        }
        if ($this->isColumnModified(EcologyPeer::SALTMARSHES)) {
            $modifiedColumns[':p' . $index++]  = '`Saltmarshes`';
        }
        if ($this->isColumnModified(EcologyPeer::LITTORALZONE)) {
            $modifiedColumns[':p' . $index++]  = '`LittoralZone`';
        }
        if ($this->isColumnModified(EcologyPeer::TIDEPOOLS)) {
            $modifiedColumns[':p' . $index++]  = '`TidePools`';
        }
        if ($this->isColumnModified(EcologyPeer::INTERTIDAL)) {
            $modifiedColumns[':p' . $index++]  = '`Intertidal`';
        }
        if ($this->isColumnModified(EcologyPeer::SUBLITTORAL)) {
            $modifiedColumns[':p' . $index++]  = '`SubLittoral`';
        }
        if ($this->isColumnModified(EcologyPeer::CAVES)) {
            $modifiedColumns[':p' . $index++]  = '`Caves`';
        }
        if ($this->isColumnModified(EcologyPeer::OCEANIC)) {
            $modifiedColumns[':p' . $index++]  = '`Oceanic`';
        }
        if ($this->isColumnModified(EcologyPeer::EPIPELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Epipelagic`';
        }
        if ($this->isColumnModified(EcologyPeer::MESOPELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Mesopelagic`';
        }
        if ($this->isColumnModified(EcologyPeer::BATHYPELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Bathypelagic`';
        }
        if ($this->isColumnModified(EcologyPeer::ABYSSOPELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Abyssopelagic`';
        }
        if ($this->isColumnModified(EcologyPeer::HADOPELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Hadopelagic`';
        }
        if ($this->isColumnModified(EcologyPeer::ESTUARIES)) {
            $modifiedColumns[':p' . $index++]  = '`Estuaries`';
        }
        if ($this->isColumnModified(EcologyPeer::MANGROVES)) {
            $modifiedColumns[':p' . $index++]  = '`Mangroves`';
        }
        if ($this->isColumnModified(EcologyPeer::MARSHESSWAMPS)) {
            $modifiedColumns[':p' . $index++]  = '`MarshesSwamps`';
        }
        if ($this->isColumnModified(EcologyPeer::CAVEANCHIALINE)) {
            $modifiedColumns[':p' . $index++]  = '`CaveAnchialine`';
        }
        if ($this->isColumnModified(EcologyPeer::STREAM)) {
            $modifiedColumns[':p' . $index++]  = '`Stream`';
        }
        if ($this->isColumnModified(EcologyPeer::LAKES)) {
            $modifiedColumns[':p' . $index++]  = '`Lakes`';
        }
        if ($this->isColumnModified(EcologyPeer::CAVE)) {
            $modifiedColumns[':p' . $index++]  = '`Cave`';
        }
        if ($this->isColumnModified(EcologyPeer::CAVE2)) {
            $modifiedColumns[':p' . $index++]  = '`Cave2`';
        }
        if ($this->isColumnModified(EcologyPeer::HERBIVORY2)) {
            $modifiedColumns[':p' . $index++]  = '`Herbivory2`';
        }
        if ($this->isColumnModified(EcologyPeer::HERBIVORYREF)) {
            $modifiedColumns[':p' . $index++]  = '`HerbivoryRef`';
        }
        if ($this->isColumnModified(EcologyPeer::FEEDINGTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`FeedingType`';
        }
        if ($this->isColumnModified(EcologyPeer::FEEDINGTYPEREF)) {
            $modifiedColumns[':p' . $index++]  = '`FeedingTypeRef`';
        }
        if ($this->isColumnModified(EcologyPeer::DIETTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`DietTroph`';
        }
        if ($this->isColumnModified(EcologyPeer::DIETSETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`DietSeTroph`';
        }
        if ($this->isColumnModified(EcologyPeer::DIETTLU)) {
            $modifiedColumns[':p' . $index++]  = '`DietTLu`';
        }
        if ($this->isColumnModified(EcologyPeer::DIETSETLU)) {
            $modifiedColumns[':p' . $index++]  = '`DietseTLu`';
        }
        if ($this->isColumnModified(EcologyPeer::DIETREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`DietRemark`';
        }
        if ($this->isColumnModified(EcologyPeer::DIETREF)) {
            $modifiedColumns[':p' . $index++]  = '`DietRef`';
        }
        if ($this->isColumnModified(EcologyPeer::FOODTROPH)) {
            $modifiedColumns[':p' . $index++]  = '`FoodTroph`';
        }
        if ($this->isColumnModified(EcologyPeer::FOODSETROPH)) {
            $modifiedColumns[':p' . $index++]  = '`FoodSeTroph`';
        }
        if ($this->isColumnModified(EcologyPeer::FOODREMARK)) {
            $modifiedColumns[':p' . $index++]  = '`FoodRemark`';
        }
        if ($this->isColumnModified(EcologyPeer::FOODREF)) {
            $modifiedColumns[':p' . $index++]  = '`FoodRef`';
        }
        if ($this->isColumnModified(EcologyPeer::ADDREMS)) {
            $modifiedColumns[':p' . $index++]  = '`AddRems`';
        }
        if ($this->isColumnModified(EcologyPeer::ASSOCIATIONREF)) {
            $modifiedColumns[':p' . $index++]  = '`AssociationRef`';
        }
        if ($this->isColumnModified(EcologyPeer::PARASITISM)) {
            $modifiedColumns[':p' . $index++]  = '`Parasitism`';
        }
        if ($this->isColumnModified(EcologyPeer::SOLITARY)) {
            $modifiedColumns[':p' . $index++]  = '`Solitary`';
        }
        if ($this->isColumnModified(EcologyPeer::SYMBIOSIS)) {
            $modifiedColumns[':p' . $index++]  = '`Symbiosis`';
        }
        if ($this->isColumnModified(EcologyPeer::SYMPHORISM)) {
            $modifiedColumns[':p' . $index++]  = '`Symphorism`';
        }
        if ($this->isColumnModified(EcologyPeer::COMMENSALISM)) {
            $modifiedColumns[':p' . $index++]  = '`Commensalism`';
        }
        if ($this->isColumnModified(EcologyPeer::MUTUALISM)) {
            $modifiedColumns[':p' . $index++]  = '`Mutualism`';
        }
        if ($this->isColumnModified(EcologyPeer::EPIPHYTIC)) {
            $modifiedColumns[':p' . $index++]  = '`Epiphytic`';
        }
        if ($this->isColumnModified(EcologyPeer::SCHOOLING)) {
            $modifiedColumns[':p' . $index++]  = '`Schooling`';
        }
        if ($this->isColumnModified(EcologyPeer::SCHOOLINGFREQUENCY)) {
            $modifiedColumns[':p' . $index++]  = '`SchoolingFrequency`';
        }
        if ($this->isColumnModified(EcologyPeer::SCHOOLINGLIFESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`SchoolingLifestage`';
        }
        if ($this->isColumnModified(EcologyPeer::SHOALING)) {
            $modifiedColumns[':p' . $index++]  = '`Shoaling`';
        }
        if ($this->isColumnModified(EcologyPeer::SHOALINGFREQUENCY)) {
            $modifiedColumns[':p' . $index++]  = '`ShoalingFrequency`';
        }
        if ($this->isColumnModified(EcologyPeer::SHOALINGLIFESTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ShoalingLifestage`';
        }
        if ($this->isColumnModified(EcologyPeer::SCHOOLSHOALREF)) {
            $modifiedColumns[':p' . $index++]  = '`SchoolShoalRef`';
        }
        if ($this->isColumnModified(EcologyPeer::ASSOCIATIONSWITH)) {
            $modifiedColumns[':p' . $index++]  = '`AssociationsWith`';
        }
        if ($this->isColumnModified(EcologyPeer::ASSOCIATIONSREMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`AssociationsRemarks`';
        }
        if ($this->isColumnModified(EcologyPeer::OUTSIDEHOST)) {
            $modifiedColumns[':p' . $index++]  = '`OutsideHost`';
        }
        if ($this->isColumnModified(EcologyPeer::OHREMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`OHRemarks`';
        }
        if ($this->isColumnModified(EcologyPeer::INSIDEHOST)) {
            $modifiedColumns[':p' . $index++]  = '`InsideHost`';
        }
        if ($this->isColumnModified(EcologyPeer::IHREMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`IHRemarks`';
        }
        if ($this->isColumnModified(EcologyPeer::SUBSTRATEREF)) {
            $modifiedColumns[':p' . $index++]  = '`SubstrateRef`';
        }
        if ($this->isColumnModified(EcologyPeer::BENTHIC)) {
            $modifiedColumns[':p' . $index++]  = '`Benthic`';
        }
        if ($this->isColumnModified(EcologyPeer::SESSILE)) {
            $modifiedColumns[':p' . $index++]  = '`Sessile`';
        }
        if ($this->isColumnModified(EcologyPeer::MOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`Mobile`';
        }
        if ($this->isColumnModified(EcologyPeer::DEMERSAL)) {
            $modifiedColumns[':p' . $index++]  = '`Demersal`';
        }
        if ($this->isColumnModified(EcologyPeer::ENDOFAUNA)) {
            $modifiedColumns[':p' . $index++]  = '`Endofauna`';
        }
        if ($this->isColumnModified(EcologyPeer::PELAGIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pelagic`';
        }
        if ($this->isColumnModified(EcologyPeer::MEGABENTHOS)) {
            $modifiedColumns[':p' . $index++]  = '`Megabenthos`';
        }
        if ($this->isColumnModified(EcologyPeer::MACROBENTHOS)) {
            $modifiedColumns[':p' . $index++]  = '`Macrobenthos`';
        }
        if ($this->isColumnModified(EcologyPeer::MEIOBENTHOS)) {
            $modifiedColumns[':p' . $index++]  = '`Meiobenthos`';
        }
        if ($this->isColumnModified(EcologyPeer::SOFTBOTTOM)) {
            $modifiedColumns[':p' . $index++]  = '`SoftBottom`';
        }
        if ($this->isColumnModified(EcologyPeer::SAND)) {
            $modifiedColumns[':p' . $index++]  = '`Sand`';
        }
        if ($this->isColumnModified(EcologyPeer::COARSE)) {
            $modifiedColumns[':p' . $index++]  = '`Coarse`';
        }
        if ($this->isColumnModified(EcologyPeer::FINE)) {
            $modifiedColumns[':p' . $index++]  = '`Fine`';
        }
        if ($this->isColumnModified(EcologyPeer::LEVEL)) {
            $modifiedColumns[':p' . $index++]  = '`Level`';
        }
        if ($this->isColumnModified(EcologyPeer::SLOPING)) {
            $modifiedColumns[':p' . $index++]  = '`Sloping`';
        }
        if ($this->isColumnModified(EcologyPeer::SILT)) {
            $modifiedColumns[':p' . $index++]  = '`Silt`';
        }
        if ($this->isColumnModified(EcologyPeer::MUD)) {
            $modifiedColumns[':p' . $index++]  = '`Mud`';
        }
        if ($this->isColumnModified(EcologyPeer::OOZE)) {
            $modifiedColumns[':p' . $index++]  = '`Ooze`';
        }
        if ($this->isColumnModified(EcologyPeer::DETRITUS)) {
            $modifiedColumns[':p' . $index++]  = '`Detritus`';
        }
        if ($this->isColumnModified(EcologyPeer::ORGANIC)) {
            $modifiedColumns[':p' . $index++]  = '`Organic`';
        }
        if ($this->isColumnModified(EcologyPeer::HARDBOTTOM)) {
            $modifiedColumns[':p' . $index++]  = '`HardBottom`';
        }
        if ($this->isColumnModified(EcologyPeer::ROCKY)) {
            $modifiedColumns[':p' . $index++]  = '`Rocky`';
        }
        if ($this->isColumnModified(EcologyPeer::RUBBLE)) {
            $modifiedColumns[':p' . $index++]  = '`Rubble`';
        }
        if ($this->isColumnModified(EcologyPeer::SPECIALHABITATREF)) {
            $modifiedColumns[':p' . $index++]  = '`SpecialHabitatRef`';
        }
        if ($this->isColumnModified(EcologyPeer::MACROPHYTE)) {
            $modifiedColumns[':p' . $index++]  = '`Macrophyte`';
        }
        if ($this->isColumnModified(EcologyPeer::BEDSBIVALVE)) {
            $modifiedColumns[':p' . $index++]  = '`BedsBivalve`';
        }
        if ($this->isColumnModified(EcologyPeer::BEDSROCK)) {
            $modifiedColumns[':p' . $index++]  = '`BedsRock`';
        }
        if ($this->isColumnModified(EcologyPeer::SEAGRASSBEDS)) {
            $modifiedColumns[':p' . $index++]  = '`SeaGrassBeds`';
        }
        if ($this->isColumnModified(EcologyPeer::BEDSOTHERS)) {
            $modifiedColumns[':p' . $index++]  = '`BedsOthers`';
        }
        if ($this->isColumnModified(EcologyPeer::CORALREEFS)) {
            $modifiedColumns[':p' . $index++]  = '`CoralReefs`';
        }
        if ($this->isColumnModified(EcologyPeer::REEFEXCLUSIVE)) {
            $modifiedColumns[':p' . $index++]  = '`ReefExclusive`';
        }
        if ($this->isColumnModified(EcologyPeer::DROPOFFS)) {
            $modifiedColumns[':p' . $index++]  = '`DropOffs`';
        }
        if ($this->isColumnModified(EcologyPeer::REEFFLATS)) {
            $modifiedColumns[':p' . $index++]  = '`ReefFlats`';
        }
        if ($this->isColumnModified(EcologyPeer::LAGOONS)) {
            $modifiedColumns[':p' . $index++]  = '`Lagoons`';
        }
        if ($this->isColumnModified(EcologyPeer::BURROWS)) {
            $modifiedColumns[':p' . $index++]  = '`Burrows`';
        }
        if ($this->isColumnModified(EcologyPeer::TUNNELS)) {
            $modifiedColumns[':p' . $index++]  = '`Tunnels`';
        }
        if ($this->isColumnModified(EcologyPeer::CREVICES)) {
            $modifiedColumns[':p' . $index++]  = '`Crevices`';
        }
        if ($this->isColumnModified(EcologyPeer::VENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Vents`';
        }
        if ($this->isColumnModified(EcologyPeer::SEAMOUNTS)) {
            $modifiedColumns[':p' . $index++]  = '`Seamounts`';
        }
        if ($this->isColumnModified(EcologyPeer::DEEPWATERCORALS)) {
            $modifiedColumns[':p' . $index++]  = '`DeepWaterCorals`';
        }
        if ($this->isColumnModified(EcologyPeer::VEGETATION)) {
            $modifiedColumns[':p' . $index++]  = '`Vegetation`';
        }
        if ($this->isColumnModified(EcologyPeer::LEAVES)) {
            $modifiedColumns[':p' . $index++]  = '`Leaves`';
        }
        if ($this->isColumnModified(EcologyPeer::STEMS)) {
            $modifiedColumns[':p' . $index++]  = '`Stems`';
        }
        if ($this->isColumnModified(EcologyPeer::ROOTS)) {
            $modifiedColumns[':p' . $index++]  = '`Roots`';
        }
        if ($this->isColumnModified(EcologyPeer::DRIFTWOOD)) {
            $modifiedColumns[':p' . $index++]  = '`Driftwood`';
        }
        if ($this->isColumnModified(EcologyPeer::OINVERTERBRATES)) {
            $modifiedColumns[':p' . $index++]  = '`OInverterbrates`';
        }
        if ($this->isColumnModified(EcologyPeer::OIREMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`OIRemarks`';
        }
        if ($this->isColumnModified(EcologyPeer::VERTERBRATES)) {
            $modifiedColumns[':p' . $index++]  = '`Verterbrates`';
        }
        if ($this->isColumnModified(EcologyPeer::VREMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`VRemarks`';
        }
        if ($this->isColumnModified(EcologyPeer::PILINGS)) {
            $modifiedColumns[':p' . $index++]  = '`Pilings`';
        }
        if ($this->isColumnModified(EcologyPeer::BOATHULLS)) {
            $modifiedColumns[':p' . $index++]  = '`BoatHulls`';
        }
        if ($this->isColumnModified(EcologyPeer::CORALS)) {
            $modifiedColumns[':p' . $index++]  = '`Corals`';
        }
        if ($this->isColumnModified(EcologyPeer::SOFTCORALS)) {
            $modifiedColumns[':p' . $index++]  = '`SoftCorals`';
        }
        if ($this->isColumnModified(EcologyPeer::ONPOLYP)) {
            $modifiedColumns[':p' . $index++]  = '`OnPolyp`';
        }
        if ($this->isColumnModified(EcologyPeer::BETWEENPOLYPS)) {
            $modifiedColumns[':p' . $index++]  = '`BetweenPolyps`';
        }
        if ($this->isColumnModified(EcologyPeer::HARDCORALS)) {
            $modifiedColumns[':p' . $index++]  = '`HardCorals`';
        }
        if ($this->isColumnModified(EcologyPeer::ONEXOSKELETON)) {
            $modifiedColumns[':p' . $index++]  = '`OnExoskeleton`';
        }
        if ($this->isColumnModified(EcologyPeer::INTERSTITIALSPACES)) {
            $modifiedColumns[':p' . $index++]  = '`InterstitialSpaces`';
        }
        if ($this->isColumnModified(EcologyPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(EcologyPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Dateentered`';
        }
        if ($this->isColumnModified(EcologyPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(EcologyPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Datemodified`';
        }
        if ($this->isColumnModified(EcologyPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(EcologyPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`Datechecked`';
        }
        if ($this->isColumnModified(EcologyPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `ecology` (%s) VALUES (%s)',
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
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`EcologyRefNo`':
                        $stmt->bindValue($identifier, $this->ecologyrefno, PDO::PARAM_INT);
                        break;
                    case '`HabitatsRef`':
                        $stmt->bindValue($identifier, $this->habitatsref, PDO::PARAM_INT);
                        break;
                    case '`Neritic`':
                        $stmt->bindValue($identifier, $this->neritic, PDO::PARAM_INT);
                        break;
                    case '`SupraLittoralZone`':
                        $stmt->bindValue($identifier, $this->supralittoralzone, PDO::PARAM_INT);
                        break;
                    case '`Saltmarshes`':
                        $stmt->bindValue($identifier, $this->saltmarshes, PDO::PARAM_INT);
                        break;
                    case '`LittoralZone`':
                        $stmt->bindValue($identifier, $this->littoralzone, PDO::PARAM_INT);
                        break;
                    case '`TidePools`':
                        $stmt->bindValue($identifier, $this->tidepools, PDO::PARAM_INT);
                        break;
                    case '`Intertidal`':
                        $stmt->bindValue($identifier, $this->intertidal, PDO::PARAM_INT);
                        break;
                    case '`SubLittoral`':
                        $stmt->bindValue($identifier, $this->sublittoral, PDO::PARAM_INT);
                        break;
                    case '`Caves`':
                        $stmt->bindValue($identifier, $this->caves, PDO::PARAM_INT);
                        break;
                    case '`Oceanic`':
                        $stmt->bindValue($identifier, $this->oceanic, PDO::PARAM_INT);
                        break;
                    case '`Epipelagic`':
                        $stmt->bindValue($identifier, $this->epipelagic, PDO::PARAM_INT);
                        break;
                    case '`Mesopelagic`':
                        $stmt->bindValue($identifier, $this->mesopelagic, PDO::PARAM_INT);
                        break;
                    case '`Bathypelagic`':
                        $stmt->bindValue($identifier, $this->bathypelagic, PDO::PARAM_INT);
                        break;
                    case '`Abyssopelagic`':
                        $stmt->bindValue($identifier, $this->abyssopelagic, PDO::PARAM_INT);
                        break;
                    case '`Hadopelagic`':
                        $stmt->bindValue($identifier, $this->hadopelagic, PDO::PARAM_INT);
                        break;
                    case '`Estuaries`':
                        $stmt->bindValue($identifier, $this->estuaries, PDO::PARAM_INT);
                        break;
                    case '`Mangroves`':
                        $stmt->bindValue($identifier, $this->mangroves, PDO::PARAM_INT);
                        break;
                    case '`MarshesSwamps`':
                        $stmt->bindValue($identifier, $this->marshesswamps, PDO::PARAM_STR);
                        break;
                    case '`CaveAnchialine`':
                        $stmt->bindValue($identifier, $this->caveanchialine, PDO::PARAM_INT);
                        break;
                    case '`Stream`':
                        $stmt->bindValue($identifier, $this->stream, PDO::PARAM_INT);
                        break;
                    case '`Lakes`':
                        $stmt->bindValue($identifier, $this->lakes, PDO::PARAM_INT);
                        break;
                    case '`Cave`':
                        $stmt->bindValue($identifier, $this->cave, PDO::PARAM_INT);
                        break;
                    case '`Cave2`':
                        $stmt->bindValue($identifier, $this->cave2, PDO::PARAM_INT);
                        break;
                    case '`Herbivory2`':
                        $stmt->bindValue($identifier, $this->herbivory2, PDO::PARAM_STR);
                        break;
                    case '`HerbivoryRef`':
                        $stmt->bindValue($identifier, $this->herbivoryref, PDO::PARAM_INT);
                        break;
                    case '`FeedingType`':
                        $stmt->bindValue($identifier, $this->feedingtype, PDO::PARAM_STR);
                        break;
                    case '`FeedingTypeRef`':
                        $stmt->bindValue($identifier, $this->feedingtyperef, PDO::PARAM_INT);
                        break;
                    case '`DietTroph`':
                        $stmt->bindValue($identifier, $this->diettroph, PDO::PARAM_STR);
                        break;
                    case '`DietSeTroph`':
                        $stmt->bindValue($identifier, $this->dietsetroph, PDO::PARAM_STR);
                        break;
                    case '`DietTLu`':
                        $stmt->bindValue($identifier, $this->diettlu, PDO::PARAM_STR);
                        break;
                    case '`DietseTLu`':
                        $stmt->bindValue($identifier, $this->dietsetlu, PDO::PARAM_STR);
                        break;
                    case '`DietRemark`':
                        $stmt->bindValue($identifier, $this->dietremark, PDO::PARAM_STR);
                        break;
                    case '`DietRef`':
                        $stmt->bindValue($identifier, $this->dietref, PDO::PARAM_INT);
                        break;
                    case '`FoodTroph`':
                        $stmt->bindValue($identifier, $this->foodtroph, PDO::PARAM_STR);
                        break;
                    case '`FoodSeTroph`':
                        $stmt->bindValue($identifier, $this->foodsetroph, PDO::PARAM_STR);
                        break;
                    case '`FoodRemark`':
                        $stmt->bindValue($identifier, $this->foodremark, PDO::PARAM_STR);
                        break;
                    case '`FoodRef`':
                        $stmt->bindValue($identifier, $this->foodref, PDO::PARAM_INT);
                        break;
                    case '`AddRems`':
                        $stmt->bindValue($identifier, $this->addrems, PDO::PARAM_STR);
                        break;
                    case '`AssociationRef`':
                        $stmt->bindValue($identifier, $this->associationref, PDO::PARAM_INT);
                        break;
                    case '`Parasitism`':
                        $stmt->bindValue($identifier, $this->parasitism, PDO::PARAM_INT);
                        break;
                    case '`Solitary`':
                        $stmt->bindValue($identifier, $this->solitary, PDO::PARAM_INT);
                        break;
                    case '`Symbiosis`':
                        $stmt->bindValue($identifier, $this->symbiosis, PDO::PARAM_INT);
                        break;
                    case '`Symphorism`':
                        $stmt->bindValue($identifier, $this->symphorism, PDO::PARAM_INT);
                        break;
                    case '`Commensalism`':
                        $stmt->bindValue($identifier, $this->commensalism, PDO::PARAM_INT);
                        break;
                    case '`Mutualism`':
                        $stmt->bindValue($identifier, $this->mutualism, PDO::PARAM_INT);
                        break;
                    case '`Epiphytic`':
                        $stmt->bindValue($identifier, $this->epiphytic, PDO::PARAM_INT);
                        break;
                    case '`Schooling`':
                        $stmt->bindValue($identifier, $this->schooling, PDO::PARAM_INT);
                        break;
                    case '`SchoolingFrequency`':
                        $stmt->bindValue($identifier, $this->schoolingfrequency, PDO::PARAM_STR);
                        break;
                    case '`SchoolingLifestage`':
                        $stmt->bindValue($identifier, $this->schoolinglifestage, PDO::PARAM_STR);
                        break;
                    case '`Shoaling`':
                        $stmt->bindValue($identifier, $this->shoaling, PDO::PARAM_INT);
                        break;
                    case '`ShoalingFrequency`':
                        $stmt->bindValue($identifier, $this->shoalingfrequency, PDO::PARAM_STR);
                        break;
                    case '`ShoalingLifestage`':
                        $stmt->bindValue($identifier, $this->shoalinglifestage, PDO::PARAM_STR);
                        break;
                    case '`SchoolShoalRef`':
                        $stmt->bindValue($identifier, $this->schoolshoalref, PDO::PARAM_INT);
                        break;
                    case '`AssociationsWith`':
                        $stmt->bindValue($identifier, $this->associationswith, PDO::PARAM_STR);
                        break;
                    case '`AssociationsRemarks`':
                        $stmt->bindValue($identifier, $this->associationsremarks, PDO::PARAM_STR);
                        break;
                    case '`OutsideHost`':
                        $stmt->bindValue($identifier, $this->outsidehost, PDO::PARAM_INT);
                        break;
                    case '`OHRemarks`':
                        $stmt->bindValue($identifier, $this->ohremarks, PDO::PARAM_STR);
                        break;
                    case '`InsideHost`':
                        $stmt->bindValue($identifier, $this->insidehost, PDO::PARAM_INT);
                        break;
                    case '`IHRemarks`':
                        $stmt->bindValue($identifier, $this->ihremarks, PDO::PARAM_STR);
                        break;
                    case '`SubstrateRef`':
                        $stmt->bindValue($identifier, $this->substrateref, PDO::PARAM_INT);
                        break;
                    case '`Benthic`':
                        $stmt->bindValue($identifier, $this->benthic, PDO::PARAM_INT);
                        break;
                    case '`Sessile`':
                        $stmt->bindValue($identifier, $this->sessile, PDO::PARAM_INT);
                        break;
                    case '`Mobile`':
                        $stmt->bindValue($identifier, $this->mobile, PDO::PARAM_INT);
                        break;
                    case '`Demersal`':
                        $stmt->bindValue($identifier, $this->demersal, PDO::PARAM_INT);
                        break;
                    case '`Endofauna`':
                        $stmt->bindValue($identifier, $this->endofauna, PDO::PARAM_INT);
                        break;
                    case '`Pelagic`':
                        $stmt->bindValue($identifier, $this->pelagic, PDO::PARAM_INT);
                        break;
                    case '`Megabenthos`':
                        $stmt->bindValue($identifier, $this->megabenthos, PDO::PARAM_INT);
                        break;
                    case '`Macrobenthos`':
                        $stmt->bindValue($identifier, $this->macrobenthos, PDO::PARAM_INT);
                        break;
                    case '`Meiobenthos`':
                        $stmt->bindValue($identifier, $this->meiobenthos, PDO::PARAM_INT);
                        break;
                    case '`SoftBottom`':
                        $stmt->bindValue($identifier, $this->softbottom, PDO::PARAM_INT);
                        break;
                    case '`Sand`':
                        $stmt->bindValue($identifier, $this->sand, PDO::PARAM_INT);
                        break;
                    case '`Coarse`':
                        $stmt->bindValue($identifier, $this->coarse, PDO::PARAM_INT);
                        break;
                    case '`Fine`':
                        $stmt->bindValue($identifier, $this->fine, PDO::PARAM_INT);
                        break;
                    case '`Level`':
                        $stmt->bindValue($identifier, $this->level, PDO::PARAM_INT);
                        break;
                    case '`Sloping`':
                        $stmt->bindValue($identifier, $this->sloping, PDO::PARAM_INT);
                        break;
                    case '`Silt`':
                        $stmt->bindValue($identifier, $this->silt, PDO::PARAM_INT);
                        break;
                    case '`Mud`':
                        $stmt->bindValue($identifier, $this->mud, PDO::PARAM_INT);
                        break;
                    case '`Ooze`':
                        $stmt->bindValue($identifier, $this->ooze, PDO::PARAM_INT);
                        break;
                    case '`Detritus`':
                        $stmt->bindValue($identifier, $this->detritus, PDO::PARAM_INT);
                        break;
                    case '`Organic`':
                        $stmt->bindValue($identifier, $this->organic, PDO::PARAM_INT);
                        break;
                    case '`HardBottom`':
                        $stmt->bindValue($identifier, $this->hardbottom, PDO::PARAM_INT);
                        break;
                    case '`Rocky`':
                        $stmt->bindValue($identifier, $this->rocky, PDO::PARAM_INT);
                        break;
                    case '`Rubble`':
                        $stmt->bindValue($identifier, $this->rubble, PDO::PARAM_INT);
                        break;
                    case '`SpecialHabitatRef`':
                        $stmt->bindValue($identifier, $this->specialhabitatref, PDO::PARAM_INT);
                        break;
                    case '`Macrophyte`':
                        $stmt->bindValue($identifier, $this->macrophyte, PDO::PARAM_INT);
                        break;
                    case '`BedsBivalve`':
                        $stmt->bindValue($identifier, $this->bedsbivalve, PDO::PARAM_INT);
                        break;
                    case '`BedsRock`':
                        $stmt->bindValue($identifier, $this->bedsrock, PDO::PARAM_INT);
                        break;
                    case '`SeaGrassBeds`':
                        $stmt->bindValue($identifier, $this->seagrassbeds, PDO::PARAM_INT);
                        break;
                    case '`BedsOthers`':
                        $stmt->bindValue($identifier, $this->bedsothers, PDO::PARAM_INT);
                        break;
                    case '`CoralReefs`':
                        $stmt->bindValue($identifier, $this->coralreefs, PDO::PARAM_INT);
                        break;
                    case '`ReefExclusive`':
                        $stmt->bindValue($identifier, $this->reefexclusive, PDO::PARAM_INT);
                        break;
                    case '`DropOffs`':
                        $stmt->bindValue($identifier, $this->dropoffs, PDO::PARAM_INT);
                        break;
                    case '`ReefFlats`':
                        $stmt->bindValue($identifier, $this->reefflats, PDO::PARAM_INT);
                        break;
                    case '`Lagoons`':
                        $stmt->bindValue($identifier, $this->lagoons, PDO::PARAM_INT);
                        break;
                    case '`Burrows`':
                        $stmt->bindValue($identifier, $this->burrows, PDO::PARAM_INT);
                        break;
                    case '`Tunnels`':
                        $stmt->bindValue($identifier, $this->tunnels, PDO::PARAM_INT);
                        break;
                    case '`Crevices`':
                        $stmt->bindValue($identifier, $this->crevices, PDO::PARAM_INT);
                        break;
                    case '`Vents`':
                        $stmt->bindValue($identifier, $this->vents, PDO::PARAM_INT);
                        break;
                    case '`Seamounts`':
                        $stmt->bindValue($identifier, $this->seamounts, PDO::PARAM_INT);
                        break;
                    case '`DeepWaterCorals`':
                        $stmt->bindValue($identifier, $this->deepwatercorals, PDO::PARAM_INT);
                        break;
                    case '`Vegetation`':
                        $stmt->bindValue($identifier, $this->vegetation, PDO::PARAM_INT);
                        break;
                    case '`Leaves`':
                        $stmt->bindValue($identifier, $this->leaves, PDO::PARAM_INT);
                        break;
                    case '`Stems`':
                        $stmt->bindValue($identifier, $this->stems, PDO::PARAM_INT);
                        break;
                    case '`Roots`':
                        $stmt->bindValue($identifier, $this->roots, PDO::PARAM_INT);
                        break;
                    case '`Driftwood`':
                        $stmt->bindValue($identifier, $this->driftwood, PDO::PARAM_INT);
                        break;
                    case '`OInverterbrates`':
                        $stmt->bindValue($identifier, $this->oinverterbrates, PDO::PARAM_INT);
                        break;
                    case '`OIRemarks`':
                        $stmt->bindValue($identifier, $this->oiremarks, PDO::PARAM_STR);
                        break;
                    case '`Verterbrates`':
                        $stmt->bindValue($identifier, $this->verterbrates, PDO::PARAM_INT);
                        break;
                    case '`VRemarks`':
                        $stmt->bindValue($identifier, $this->vremarks, PDO::PARAM_STR);
                        break;
                    case '`Pilings`':
                        $stmt->bindValue($identifier, $this->pilings, PDO::PARAM_INT);
                        break;
                    case '`BoatHulls`':
                        $stmt->bindValue($identifier, $this->boathulls, PDO::PARAM_INT);
                        break;
                    case '`Corals`':
                        $stmt->bindValue($identifier, $this->corals, PDO::PARAM_INT);
                        break;
                    case '`SoftCorals`':
                        $stmt->bindValue($identifier, $this->softcorals, PDO::PARAM_INT);
                        break;
                    case '`OnPolyp`':
                        $stmt->bindValue($identifier, $this->onpolyp, PDO::PARAM_INT);
                        break;
                    case '`BetweenPolyps`':
                        $stmt->bindValue($identifier, $this->betweenpolyps, PDO::PARAM_INT);
                        break;
                    case '`HardCorals`':
                        $stmt->bindValue($identifier, $this->hardcorals, PDO::PARAM_INT);
                        break;
                    case '`OnExoskeleton`':
                        $stmt->bindValue($identifier, $this->onexoskeleton, PDO::PARAM_INT);
                        break;
                    case '`InterstitialSpaces`':
                        $stmt->bindValue($identifier, $this->interstitialspaces, PDO::PARAM_INT);
                        break;
                    case '`Entered`':
                        $stmt->bindValue($identifier, $this->entered, PDO::PARAM_INT);
                        break;
                    case '`Dateentered`':
                        $stmt->bindValue($identifier, $this->dateentered, PDO::PARAM_STR);
                        break;
                    case '`Modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_INT);
                        break;
                    case '`Datemodified`':
                        $stmt->bindValue($identifier, $this->datemodified, PDO::PARAM_STR);
                        break;
                    case '`Expert`':
                        $stmt->bindValue($identifier, $this->expert, PDO::PARAM_INT);
                        break;
                    case '`Datechecked`':
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


            if (($retval = EcologyPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EcologyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getStockcode();
                break;
            case 3:
                return $this->getEcologyrefno();
                break;
            case 4:
                return $this->getHabitatsref();
                break;
            case 5:
                return $this->getNeritic();
                break;
            case 6:
                return $this->getSupralittoralzone();
                break;
            case 7:
                return $this->getSaltmarshes();
                break;
            case 8:
                return $this->getLittoralzone();
                break;
            case 9:
                return $this->getTidepools();
                break;
            case 10:
                return $this->getIntertidal();
                break;
            case 11:
                return $this->getSublittoral();
                break;
            case 12:
                return $this->getCaves();
                break;
            case 13:
                return $this->getOceanic();
                break;
            case 14:
                return $this->getEpipelagic();
                break;
            case 15:
                return $this->getMesopelagic();
                break;
            case 16:
                return $this->getBathypelagic();
                break;
            case 17:
                return $this->getAbyssopelagic();
                break;
            case 18:
                return $this->getHadopelagic();
                break;
            case 19:
                return $this->getEstuaries();
                break;
            case 20:
                return $this->getMangroves();
                break;
            case 21:
                return $this->getMarshesswamps();
                break;
            case 22:
                return $this->getCaveanchialine();
                break;
            case 23:
                return $this->getStream();
                break;
            case 24:
                return $this->getLakes();
                break;
            case 25:
                return $this->getCave();
                break;
            case 26:
                return $this->getCave2();
                break;
            case 27:
                return $this->getHerbivory2();
                break;
            case 28:
                return $this->getHerbivoryref();
                break;
            case 29:
                return $this->getFeedingtype();
                break;
            case 30:
                return $this->getFeedingtyperef();
                break;
            case 31:
                return $this->getDiettroph();
                break;
            case 32:
                return $this->getDietsetroph();
                break;
            case 33:
                return $this->getDiettlu();
                break;
            case 34:
                return $this->getDietsetlu();
                break;
            case 35:
                return $this->getDietremark();
                break;
            case 36:
                return $this->getDietref();
                break;
            case 37:
                return $this->getFoodtroph();
                break;
            case 38:
                return $this->getFoodsetroph();
                break;
            case 39:
                return $this->getFoodremark();
                break;
            case 40:
                return $this->getFoodref();
                break;
            case 41:
                return $this->getAddrems();
                break;
            case 42:
                return $this->getAssociationref();
                break;
            case 43:
                return $this->getParasitism();
                break;
            case 44:
                return $this->getSolitary();
                break;
            case 45:
                return $this->getSymbiosis();
                break;
            case 46:
                return $this->getSymphorism();
                break;
            case 47:
                return $this->getCommensalism();
                break;
            case 48:
                return $this->getMutualism();
                break;
            case 49:
                return $this->getEpiphytic();
                break;
            case 50:
                return $this->getSchooling();
                break;
            case 51:
                return $this->getSchoolingfrequency();
                break;
            case 52:
                return $this->getSchoolinglifestage();
                break;
            case 53:
                return $this->getShoaling();
                break;
            case 54:
                return $this->getShoalingfrequency();
                break;
            case 55:
                return $this->getShoalinglifestage();
                break;
            case 56:
                return $this->getSchoolshoalref();
                break;
            case 57:
                return $this->getAssociationswith();
                break;
            case 58:
                return $this->getAssociationsremarks();
                break;
            case 59:
                return $this->getOutsidehost();
                break;
            case 60:
                return $this->getOhremarks();
                break;
            case 61:
                return $this->getInsidehost();
                break;
            case 62:
                return $this->getIhremarks();
                break;
            case 63:
                return $this->getSubstrateref();
                break;
            case 64:
                return $this->getBenthic();
                break;
            case 65:
                return $this->getSessile();
                break;
            case 66:
                return $this->getMobile();
                break;
            case 67:
                return $this->getDemersal();
                break;
            case 68:
                return $this->getEndofauna();
                break;
            case 69:
                return $this->getPelagic();
                break;
            case 70:
                return $this->getMegabenthos();
                break;
            case 71:
                return $this->getMacrobenthos();
                break;
            case 72:
                return $this->getMeiobenthos();
                break;
            case 73:
                return $this->getSoftbottom();
                break;
            case 74:
                return $this->getSand();
                break;
            case 75:
                return $this->getCoarse();
                break;
            case 76:
                return $this->getFine();
                break;
            case 77:
                return $this->getLevel();
                break;
            case 78:
                return $this->getSloping();
                break;
            case 79:
                return $this->getSilt();
                break;
            case 80:
                return $this->getMud();
                break;
            case 81:
                return $this->getOoze();
                break;
            case 82:
                return $this->getDetritus();
                break;
            case 83:
                return $this->getOrganic();
                break;
            case 84:
                return $this->getHardbottom();
                break;
            case 85:
                return $this->getRocky();
                break;
            case 86:
                return $this->getRubble();
                break;
            case 87:
                return $this->getSpecialhabitatref();
                break;
            case 88:
                return $this->getMacrophyte();
                break;
            case 89:
                return $this->getBedsbivalve();
                break;
            case 90:
                return $this->getBedsrock();
                break;
            case 91:
                return $this->getSeagrassbeds();
                break;
            case 92:
                return $this->getBedsothers();
                break;
            case 93:
                return $this->getCoralreefs();
                break;
            case 94:
                return $this->getReefexclusive();
                break;
            case 95:
                return $this->getDropoffs();
                break;
            case 96:
                return $this->getReefflats();
                break;
            case 97:
                return $this->getLagoons();
                break;
            case 98:
                return $this->getBurrows();
                break;
            case 99:
                return $this->getTunnels();
                break;
            case 100:
                return $this->getCrevices();
                break;
            case 101:
                return $this->getVents();
                break;
            case 102:
                return $this->getSeamounts();
                break;
            case 103:
                return $this->getDeepwatercorals();
                break;
            case 104:
                return $this->getVegetation();
                break;
            case 105:
                return $this->getLeaves();
                break;
            case 106:
                return $this->getStems();
                break;
            case 107:
                return $this->getRoots();
                break;
            case 108:
                return $this->getDriftwood();
                break;
            case 109:
                return $this->getOinverterbrates();
                break;
            case 110:
                return $this->getOiremarks();
                break;
            case 111:
                return $this->getVerterbrates();
                break;
            case 112:
                return $this->getVremarks();
                break;
            case 113:
                return $this->getPilings();
                break;
            case 114:
                return $this->getBoathulls();
                break;
            case 115:
                return $this->getCorals();
                break;
            case 116:
                return $this->getSoftcorals();
                break;
            case 117:
                return $this->getOnpolyp();
                break;
            case 118:
                return $this->getBetweenpolyps();
                break;
            case 119:
                return $this->getHardcorals();
                break;
            case 120:
                return $this->getOnexoskeleton();
                break;
            case 121:
                return $this->getInterstitialspaces();
                break;
            case 122:
                return $this->getEntered();
                break;
            case 123:
                return $this->getDateentered();
                break;
            case 124:
                return $this->getModified();
                break;
            case 125:
                return $this->getDatemodified();
                break;
            case 126:
                return $this->getExpert();
                break;
            case 127:
                return $this->getDatechecked();
                break;
            case 128:
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
        if (isset($alreadyDumpedObjects['Ecology'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ecology'][$this->getPrimaryKey()] = true;
        $keys = EcologyPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getEcologyrefno(),
            $keys[4] => $this->getHabitatsref(),
            $keys[5] => $this->getNeritic(),
            $keys[6] => $this->getSupralittoralzone(),
            $keys[7] => $this->getSaltmarshes(),
            $keys[8] => $this->getLittoralzone(),
            $keys[9] => $this->getTidepools(),
            $keys[10] => $this->getIntertidal(),
            $keys[11] => $this->getSublittoral(),
            $keys[12] => $this->getCaves(),
            $keys[13] => $this->getOceanic(),
            $keys[14] => $this->getEpipelagic(),
            $keys[15] => $this->getMesopelagic(),
            $keys[16] => $this->getBathypelagic(),
            $keys[17] => $this->getAbyssopelagic(),
            $keys[18] => $this->getHadopelagic(),
            $keys[19] => $this->getEstuaries(),
            $keys[20] => $this->getMangroves(),
            $keys[21] => $this->getMarshesswamps(),
            $keys[22] => $this->getCaveanchialine(),
            $keys[23] => $this->getStream(),
            $keys[24] => $this->getLakes(),
            $keys[25] => $this->getCave(),
            $keys[26] => $this->getCave2(),
            $keys[27] => $this->getHerbivory2(),
            $keys[28] => $this->getHerbivoryref(),
            $keys[29] => $this->getFeedingtype(),
            $keys[30] => $this->getFeedingtyperef(),
            $keys[31] => $this->getDiettroph(),
            $keys[32] => $this->getDietsetroph(),
            $keys[33] => $this->getDiettlu(),
            $keys[34] => $this->getDietsetlu(),
            $keys[35] => $this->getDietremark(),
            $keys[36] => $this->getDietref(),
            $keys[37] => $this->getFoodtroph(),
            $keys[38] => $this->getFoodsetroph(),
            $keys[39] => $this->getFoodremark(),
            $keys[40] => $this->getFoodref(),
            $keys[41] => $this->getAddrems(),
            $keys[42] => $this->getAssociationref(),
            $keys[43] => $this->getParasitism(),
            $keys[44] => $this->getSolitary(),
            $keys[45] => $this->getSymbiosis(),
            $keys[46] => $this->getSymphorism(),
            $keys[47] => $this->getCommensalism(),
            $keys[48] => $this->getMutualism(),
            $keys[49] => $this->getEpiphytic(),
            $keys[50] => $this->getSchooling(),
            $keys[51] => $this->getSchoolingfrequency(),
            $keys[52] => $this->getSchoolinglifestage(),
            $keys[53] => $this->getShoaling(),
            $keys[54] => $this->getShoalingfrequency(),
            $keys[55] => $this->getShoalinglifestage(),
            $keys[56] => $this->getSchoolshoalref(),
            $keys[57] => $this->getAssociationswith(),
            $keys[58] => $this->getAssociationsremarks(),
            $keys[59] => $this->getOutsidehost(),
            $keys[60] => $this->getOhremarks(),
            $keys[61] => $this->getInsidehost(),
            $keys[62] => $this->getIhremarks(),
            $keys[63] => $this->getSubstrateref(),
            $keys[64] => $this->getBenthic(),
            $keys[65] => $this->getSessile(),
            $keys[66] => $this->getMobile(),
            $keys[67] => $this->getDemersal(),
            $keys[68] => $this->getEndofauna(),
            $keys[69] => $this->getPelagic(),
            $keys[70] => $this->getMegabenthos(),
            $keys[71] => $this->getMacrobenthos(),
            $keys[72] => $this->getMeiobenthos(),
            $keys[73] => $this->getSoftbottom(),
            $keys[74] => $this->getSand(),
            $keys[75] => $this->getCoarse(),
            $keys[76] => $this->getFine(),
            $keys[77] => $this->getLevel(),
            $keys[78] => $this->getSloping(),
            $keys[79] => $this->getSilt(),
            $keys[80] => $this->getMud(),
            $keys[81] => $this->getOoze(),
            $keys[82] => $this->getDetritus(),
            $keys[83] => $this->getOrganic(),
            $keys[84] => $this->getHardbottom(),
            $keys[85] => $this->getRocky(),
            $keys[86] => $this->getRubble(),
            $keys[87] => $this->getSpecialhabitatref(),
            $keys[88] => $this->getMacrophyte(),
            $keys[89] => $this->getBedsbivalve(),
            $keys[90] => $this->getBedsrock(),
            $keys[91] => $this->getSeagrassbeds(),
            $keys[92] => $this->getBedsothers(),
            $keys[93] => $this->getCoralreefs(),
            $keys[94] => $this->getReefexclusive(),
            $keys[95] => $this->getDropoffs(),
            $keys[96] => $this->getReefflats(),
            $keys[97] => $this->getLagoons(),
            $keys[98] => $this->getBurrows(),
            $keys[99] => $this->getTunnels(),
            $keys[100] => $this->getCrevices(),
            $keys[101] => $this->getVents(),
            $keys[102] => $this->getSeamounts(),
            $keys[103] => $this->getDeepwatercorals(),
            $keys[104] => $this->getVegetation(),
            $keys[105] => $this->getLeaves(),
            $keys[106] => $this->getStems(),
            $keys[107] => $this->getRoots(),
            $keys[108] => $this->getDriftwood(),
            $keys[109] => $this->getOinverterbrates(),
            $keys[110] => $this->getOiremarks(),
            $keys[111] => $this->getVerterbrates(),
            $keys[112] => $this->getVremarks(),
            $keys[113] => $this->getPilings(),
            $keys[114] => $this->getBoathulls(),
            $keys[115] => $this->getCorals(),
            $keys[116] => $this->getSoftcorals(),
            $keys[117] => $this->getOnpolyp(),
            $keys[118] => $this->getBetweenpolyps(),
            $keys[119] => $this->getHardcorals(),
            $keys[120] => $this->getOnexoskeleton(),
            $keys[121] => $this->getInterstitialspaces(),
            $keys[122] => $this->getEntered(),
            $keys[123] => $this->getDateentered(),
            $keys[124] => $this->getModified(),
            $keys[125] => $this->getDatemodified(),
            $keys[126] => $this->getExpert(),
            $keys[127] => $this->getDatechecked(),
            $keys[128] => $this->getTs(),
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
        $pos = EcologyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setStockcode($value);
                break;
            case 3:
                $this->setEcologyrefno($value);
                break;
            case 4:
                $this->setHabitatsref($value);
                break;
            case 5:
                $this->setNeritic($value);
                break;
            case 6:
                $this->setSupralittoralzone($value);
                break;
            case 7:
                $this->setSaltmarshes($value);
                break;
            case 8:
                $this->setLittoralzone($value);
                break;
            case 9:
                $this->setTidepools($value);
                break;
            case 10:
                $this->setIntertidal($value);
                break;
            case 11:
                $this->setSublittoral($value);
                break;
            case 12:
                $this->setCaves($value);
                break;
            case 13:
                $this->setOceanic($value);
                break;
            case 14:
                $this->setEpipelagic($value);
                break;
            case 15:
                $this->setMesopelagic($value);
                break;
            case 16:
                $this->setBathypelagic($value);
                break;
            case 17:
                $this->setAbyssopelagic($value);
                break;
            case 18:
                $this->setHadopelagic($value);
                break;
            case 19:
                $this->setEstuaries($value);
                break;
            case 20:
                $this->setMangroves($value);
                break;
            case 21:
                $this->setMarshesswamps($value);
                break;
            case 22:
                $this->setCaveanchialine($value);
                break;
            case 23:
                $this->setStream($value);
                break;
            case 24:
                $this->setLakes($value);
                break;
            case 25:
                $this->setCave($value);
                break;
            case 26:
                $this->setCave2($value);
                break;
            case 27:
                $this->setHerbivory2($value);
                break;
            case 28:
                $this->setHerbivoryref($value);
                break;
            case 29:
                $this->setFeedingtype($value);
                break;
            case 30:
                $this->setFeedingtyperef($value);
                break;
            case 31:
                $this->setDiettroph($value);
                break;
            case 32:
                $this->setDietsetroph($value);
                break;
            case 33:
                $this->setDiettlu($value);
                break;
            case 34:
                $this->setDietsetlu($value);
                break;
            case 35:
                $this->setDietremark($value);
                break;
            case 36:
                $this->setDietref($value);
                break;
            case 37:
                $this->setFoodtroph($value);
                break;
            case 38:
                $this->setFoodsetroph($value);
                break;
            case 39:
                $this->setFoodremark($value);
                break;
            case 40:
                $this->setFoodref($value);
                break;
            case 41:
                $this->setAddrems($value);
                break;
            case 42:
                $this->setAssociationref($value);
                break;
            case 43:
                $this->setParasitism($value);
                break;
            case 44:
                $this->setSolitary($value);
                break;
            case 45:
                $this->setSymbiosis($value);
                break;
            case 46:
                $this->setSymphorism($value);
                break;
            case 47:
                $this->setCommensalism($value);
                break;
            case 48:
                $this->setMutualism($value);
                break;
            case 49:
                $this->setEpiphytic($value);
                break;
            case 50:
                $this->setSchooling($value);
                break;
            case 51:
                $this->setSchoolingfrequency($value);
                break;
            case 52:
                $this->setSchoolinglifestage($value);
                break;
            case 53:
                $this->setShoaling($value);
                break;
            case 54:
                $this->setShoalingfrequency($value);
                break;
            case 55:
                $this->setShoalinglifestage($value);
                break;
            case 56:
                $this->setSchoolshoalref($value);
                break;
            case 57:
                $this->setAssociationswith($value);
                break;
            case 58:
                $this->setAssociationsremarks($value);
                break;
            case 59:
                $this->setOutsidehost($value);
                break;
            case 60:
                $this->setOhremarks($value);
                break;
            case 61:
                $this->setInsidehost($value);
                break;
            case 62:
                $this->setIhremarks($value);
                break;
            case 63:
                $this->setSubstrateref($value);
                break;
            case 64:
                $this->setBenthic($value);
                break;
            case 65:
                $this->setSessile($value);
                break;
            case 66:
                $this->setMobile($value);
                break;
            case 67:
                $this->setDemersal($value);
                break;
            case 68:
                $this->setEndofauna($value);
                break;
            case 69:
                $this->setPelagic($value);
                break;
            case 70:
                $this->setMegabenthos($value);
                break;
            case 71:
                $this->setMacrobenthos($value);
                break;
            case 72:
                $this->setMeiobenthos($value);
                break;
            case 73:
                $this->setSoftbottom($value);
                break;
            case 74:
                $this->setSand($value);
                break;
            case 75:
                $this->setCoarse($value);
                break;
            case 76:
                $this->setFine($value);
                break;
            case 77:
                $this->setLevel($value);
                break;
            case 78:
                $this->setSloping($value);
                break;
            case 79:
                $this->setSilt($value);
                break;
            case 80:
                $this->setMud($value);
                break;
            case 81:
                $this->setOoze($value);
                break;
            case 82:
                $this->setDetritus($value);
                break;
            case 83:
                $this->setOrganic($value);
                break;
            case 84:
                $this->setHardbottom($value);
                break;
            case 85:
                $this->setRocky($value);
                break;
            case 86:
                $this->setRubble($value);
                break;
            case 87:
                $this->setSpecialhabitatref($value);
                break;
            case 88:
                $this->setMacrophyte($value);
                break;
            case 89:
                $this->setBedsbivalve($value);
                break;
            case 90:
                $this->setBedsrock($value);
                break;
            case 91:
                $this->setSeagrassbeds($value);
                break;
            case 92:
                $this->setBedsothers($value);
                break;
            case 93:
                $this->setCoralreefs($value);
                break;
            case 94:
                $this->setReefexclusive($value);
                break;
            case 95:
                $this->setDropoffs($value);
                break;
            case 96:
                $this->setReefflats($value);
                break;
            case 97:
                $this->setLagoons($value);
                break;
            case 98:
                $this->setBurrows($value);
                break;
            case 99:
                $this->setTunnels($value);
                break;
            case 100:
                $this->setCrevices($value);
                break;
            case 101:
                $this->setVents($value);
                break;
            case 102:
                $this->setSeamounts($value);
                break;
            case 103:
                $this->setDeepwatercorals($value);
                break;
            case 104:
                $this->setVegetation($value);
                break;
            case 105:
                $this->setLeaves($value);
                break;
            case 106:
                $this->setStems($value);
                break;
            case 107:
                $this->setRoots($value);
                break;
            case 108:
                $this->setDriftwood($value);
                break;
            case 109:
                $this->setOinverterbrates($value);
                break;
            case 110:
                $this->setOiremarks($value);
                break;
            case 111:
                $this->setVerterbrates($value);
                break;
            case 112:
                $this->setVremarks($value);
                break;
            case 113:
                $this->setPilings($value);
                break;
            case 114:
                $this->setBoathulls($value);
                break;
            case 115:
                $this->setCorals($value);
                break;
            case 116:
                $this->setSoftcorals($value);
                break;
            case 117:
                $this->setOnpolyp($value);
                break;
            case 118:
                $this->setBetweenpolyps($value);
                break;
            case 119:
                $this->setHardcorals($value);
                break;
            case 120:
                $this->setOnexoskeleton($value);
                break;
            case 121:
                $this->setInterstitialspaces($value);
                break;
            case 122:
                $this->setEntered($value);
                break;
            case 123:
                $this->setDateentered($value);
                break;
            case 124:
                $this->setModified($value);
                break;
            case 125:
                $this->setDatemodified($value);
                break;
            case 126:
                $this->setExpert($value);
                break;
            case 127:
                $this->setDatechecked($value);
                break;
            case 128:
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
        $keys = EcologyPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEcologyrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setHabitatsref($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNeritic($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSupralittoralzone($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSaltmarshes($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLittoralzone($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTidepools($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIntertidal($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSublittoral($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCaves($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOceanic($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEpipelagic($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMesopelagic($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBathypelagic($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAbyssopelagic($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setHadopelagic($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEstuaries($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMangroves($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMarshesswamps($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCaveanchialine($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setStream($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLakes($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCave($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCave2($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setHerbivory2($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setHerbivoryref($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFeedingtype($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFeedingtyperef($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDiettroph($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDietsetroph($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDiettlu($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDietsetlu($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDietremark($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDietref($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setFoodtroph($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setFoodsetroph($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setFoodremark($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setFoodref($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setAddrems($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAssociationref($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setParasitism($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setSolitary($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setSymbiosis($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setSymphorism($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setCommensalism($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setMutualism($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setEpiphytic($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setSchooling($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setSchoolingfrequency($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setSchoolinglifestage($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setShoaling($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setShoalingfrequency($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setShoalinglifestage($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setSchoolshoalref($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setAssociationswith($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setAssociationsremarks($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setOutsidehost($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setOhremarks($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setInsidehost($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setIhremarks($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setSubstrateref($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setBenthic($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setSessile($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setMobile($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDemersal($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setEndofauna($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setPelagic($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setMegabenthos($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setMacrobenthos($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setMeiobenthos($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setSoftbottom($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setSand($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setCoarse($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setFine($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setLevel($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setSloping($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setSilt($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setMud($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setOoze($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setDetritus($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setOrganic($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setHardbottom($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setRocky($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setRubble($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setSpecialhabitatref($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setMacrophyte($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setBedsbivalve($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setBedsrock($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setSeagrassbeds($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setBedsothers($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setCoralreefs($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setReefexclusive($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setDropoffs($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setReefflats($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setLagoons($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setBurrows($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setTunnels($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setCrevices($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setVents($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setSeamounts($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setDeepwatercorals($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setVegetation($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setLeaves($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setStems($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setRoots($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setDriftwood($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setOinverterbrates($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setOiremarks($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setVerterbrates($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setVremarks($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setPilings($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setBoathulls($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setCorals($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setSoftcorals($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setOnpolyp($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setBetweenpolyps($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setHardcorals($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setOnexoskeleton($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setInterstitialspaces($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setEntered($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setDateentered($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setModified($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setDatemodified($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setExpert($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setDatechecked($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setTs($arr[$keys[128]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EcologyPeer::DATABASE_NAME);

        if ($this->isColumnModified(EcologyPeer::AUTOCTR)) $criteria->add(EcologyPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(EcologyPeer::SPECCODE)) $criteria->add(EcologyPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(EcologyPeer::STOCKCODE)) $criteria->add(EcologyPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(EcologyPeer::ECOLOGYREFNO)) $criteria->add(EcologyPeer::ECOLOGYREFNO, $this->ecologyrefno);
        if ($this->isColumnModified(EcologyPeer::HABITATSREF)) $criteria->add(EcologyPeer::HABITATSREF, $this->habitatsref);
        if ($this->isColumnModified(EcologyPeer::NERITIC)) $criteria->add(EcologyPeer::NERITIC, $this->neritic);
        if ($this->isColumnModified(EcologyPeer::SUPRALITTORALZONE)) $criteria->add(EcologyPeer::SUPRALITTORALZONE, $this->supralittoralzone);
        if ($this->isColumnModified(EcologyPeer::SALTMARSHES)) $criteria->add(EcologyPeer::SALTMARSHES, $this->saltmarshes);
        if ($this->isColumnModified(EcologyPeer::LITTORALZONE)) $criteria->add(EcologyPeer::LITTORALZONE, $this->littoralzone);
        if ($this->isColumnModified(EcologyPeer::TIDEPOOLS)) $criteria->add(EcologyPeer::TIDEPOOLS, $this->tidepools);
        if ($this->isColumnModified(EcologyPeer::INTERTIDAL)) $criteria->add(EcologyPeer::INTERTIDAL, $this->intertidal);
        if ($this->isColumnModified(EcologyPeer::SUBLITTORAL)) $criteria->add(EcologyPeer::SUBLITTORAL, $this->sublittoral);
        if ($this->isColumnModified(EcologyPeer::CAVES)) $criteria->add(EcologyPeer::CAVES, $this->caves);
        if ($this->isColumnModified(EcologyPeer::OCEANIC)) $criteria->add(EcologyPeer::OCEANIC, $this->oceanic);
        if ($this->isColumnModified(EcologyPeer::EPIPELAGIC)) $criteria->add(EcologyPeer::EPIPELAGIC, $this->epipelagic);
        if ($this->isColumnModified(EcologyPeer::MESOPELAGIC)) $criteria->add(EcologyPeer::MESOPELAGIC, $this->mesopelagic);
        if ($this->isColumnModified(EcologyPeer::BATHYPELAGIC)) $criteria->add(EcologyPeer::BATHYPELAGIC, $this->bathypelagic);
        if ($this->isColumnModified(EcologyPeer::ABYSSOPELAGIC)) $criteria->add(EcologyPeer::ABYSSOPELAGIC, $this->abyssopelagic);
        if ($this->isColumnModified(EcologyPeer::HADOPELAGIC)) $criteria->add(EcologyPeer::HADOPELAGIC, $this->hadopelagic);
        if ($this->isColumnModified(EcologyPeer::ESTUARIES)) $criteria->add(EcologyPeer::ESTUARIES, $this->estuaries);
        if ($this->isColumnModified(EcologyPeer::MANGROVES)) $criteria->add(EcologyPeer::MANGROVES, $this->mangroves);
        if ($this->isColumnModified(EcologyPeer::MARSHESSWAMPS)) $criteria->add(EcologyPeer::MARSHESSWAMPS, $this->marshesswamps);
        if ($this->isColumnModified(EcologyPeer::CAVEANCHIALINE)) $criteria->add(EcologyPeer::CAVEANCHIALINE, $this->caveanchialine);
        if ($this->isColumnModified(EcologyPeer::STREAM)) $criteria->add(EcologyPeer::STREAM, $this->stream);
        if ($this->isColumnModified(EcologyPeer::LAKES)) $criteria->add(EcologyPeer::LAKES, $this->lakes);
        if ($this->isColumnModified(EcologyPeer::CAVE)) $criteria->add(EcologyPeer::CAVE, $this->cave);
        if ($this->isColumnModified(EcologyPeer::CAVE2)) $criteria->add(EcologyPeer::CAVE2, $this->cave2);
        if ($this->isColumnModified(EcologyPeer::HERBIVORY2)) $criteria->add(EcologyPeer::HERBIVORY2, $this->herbivory2);
        if ($this->isColumnModified(EcologyPeer::HERBIVORYREF)) $criteria->add(EcologyPeer::HERBIVORYREF, $this->herbivoryref);
        if ($this->isColumnModified(EcologyPeer::FEEDINGTYPE)) $criteria->add(EcologyPeer::FEEDINGTYPE, $this->feedingtype);
        if ($this->isColumnModified(EcologyPeer::FEEDINGTYPEREF)) $criteria->add(EcologyPeer::FEEDINGTYPEREF, $this->feedingtyperef);
        if ($this->isColumnModified(EcologyPeer::DIETTROPH)) $criteria->add(EcologyPeer::DIETTROPH, $this->diettroph);
        if ($this->isColumnModified(EcologyPeer::DIETSETROPH)) $criteria->add(EcologyPeer::DIETSETROPH, $this->dietsetroph);
        if ($this->isColumnModified(EcologyPeer::DIETTLU)) $criteria->add(EcologyPeer::DIETTLU, $this->diettlu);
        if ($this->isColumnModified(EcologyPeer::DIETSETLU)) $criteria->add(EcologyPeer::DIETSETLU, $this->dietsetlu);
        if ($this->isColumnModified(EcologyPeer::DIETREMARK)) $criteria->add(EcologyPeer::DIETREMARK, $this->dietremark);
        if ($this->isColumnModified(EcologyPeer::DIETREF)) $criteria->add(EcologyPeer::DIETREF, $this->dietref);
        if ($this->isColumnModified(EcologyPeer::FOODTROPH)) $criteria->add(EcologyPeer::FOODTROPH, $this->foodtroph);
        if ($this->isColumnModified(EcologyPeer::FOODSETROPH)) $criteria->add(EcologyPeer::FOODSETROPH, $this->foodsetroph);
        if ($this->isColumnModified(EcologyPeer::FOODREMARK)) $criteria->add(EcologyPeer::FOODREMARK, $this->foodremark);
        if ($this->isColumnModified(EcologyPeer::FOODREF)) $criteria->add(EcologyPeer::FOODREF, $this->foodref);
        if ($this->isColumnModified(EcologyPeer::ADDREMS)) $criteria->add(EcologyPeer::ADDREMS, $this->addrems);
        if ($this->isColumnModified(EcologyPeer::ASSOCIATIONREF)) $criteria->add(EcologyPeer::ASSOCIATIONREF, $this->associationref);
        if ($this->isColumnModified(EcologyPeer::PARASITISM)) $criteria->add(EcologyPeer::PARASITISM, $this->parasitism);
        if ($this->isColumnModified(EcologyPeer::SOLITARY)) $criteria->add(EcologyPeer::SOLITARY, $this->solitary);
        if ($this->isColumnModified(EcologyPeer::SYMBIOSIS)) $criteria->add(EcologyPeer::SYMBIOSIS, $this->symbiosis);
        if ($this->isColumnModified(EcologyPeer::SYMPHORISM)) $criteria->add(EcologyPeer::SYMPHORISM, $this->symphorism);
        if ($this->isColumnModified(EcologyPeer::COMMENSALISM)) $criteria->add(EcologyPeer::COMMENSALISM, $this->commensalism);
        if ($this->isColumnModified(EcologyPeer::MUTUALISM)) $criteria->add(EcologyPeer::MUTUALISM, $this->mutualism);
        if ($this->isColumnModified(EcologyPeer::EPIPHYTIC)) $criteria->add(EcologyPeer::EPIPHYTIC, $this->epiphytic);
        if ($this->isColumnModified(EcologyPeer::SCHOOLING)) $criteria->add(EcologyPeer::SCHOOLING, $this->schooling);
        if ($this->isColumnModified(EcologyPeer::SCHOOLINGFREQUENCY)) $criteria->add(EcologyPeer::SCHOOLINGFREQUENCY, $this->schoolingfrequency);
        if ($this->isColumnModified(EcologyPeer::SCHOOLINGLIFESTAGE)) $criteria->add(EcologyPeer::SCHOOLINGLIFESTAGE, $this->schoolinglifestage);
        if ($this->isColumnModified(EcologyPeer::SHOALING)) $criteria->add(EcologyPeer::SHOALING, $this->shoaling);
        if ($this->isColumnModified(EcologyPeer::SHOALINGFREQUENCY)) $criteria->add(EcologyPeer::SHOALINGFREQUENCY, $this->shoalingfrequency);
        if ($this->isColumnModified(EcologyPeer::SHOALINGLIFESTAGE)) $criteria->add(EcologyPeer::SHOALINGLIFESTAGE, $this->shoalinglifestage);
        if ($this->isColumnModified(EcologyPeer::SCHOOLSHOALREF)) $criteria->add(EcologyPeer::SCHOOLSHOALREF, $this->schoolshoalref);
        if ($this->isColumnModified(EcologyPeer::ASSOCIATIONSWITH)) $criteria->add(EcologyPeer::ASSOCIATIONSWITH, $this->associationswith);
        if ($this->isColumnModified(EcologyPeer::ASSOCIATIONSREMARKS)) $criteria->add(EcologyPeer::ASSOCIATIONSREMARKS, $this->associationsremarks);
        if ($this->isColumnModified(EcologyPeer::OUTSIDEHOST)) $criteria->add(EcologyPeer::OUTSIDEHOST, $this->outsidehost);
        if ($this->isColumnModified(EcologyPeer::OHREMARKS)) $criteria->add(EcologyPeer::OHREMARKS, $this->ohremarks);
        if ($this->isColumnModified(EcologyPeer::INSIDEHOST)) $criteria->add(EcologyPeer::INSIDEHOST, $this->insidehost);
        if ($this->isColumnModified(EcologyPeer::IHREMARKS)) $criteria->add(EcologyPeer::IHREMARKS, $this->ihremarks);
        if ($this->isColumnModified(EcologyPeer::SUBSTRATEREF)) $criteria->add(EcologyPeer::SUBSTRATEREF, $this->substrateref);
        if ($this->isColumnModified(EcologyPeer::BENTHIC)) $criteria->add(EcologyPeer::BENTHIC, $this->benthic);
        if ($this->isColumnModified(EcologyPeer::SESSILE)) $criteria->add(EcologyPeer::SESSILE, $this->sessile);
        if ($this->isColumnModified(EcologyPeer::MOBILE)) $criteria->add(EcologyPeer::MOBILE, $this->mobile);
        if ($this->isColumnModified(EcologyPeer::DEMERSAL)) $criteria->add(EcologyPeer::DEMERSAL, $this->demersal);
        if ($this->isColumnModified(EcologyPeer::ENDOFAUNA)) $criteria->add(EcologyPeer::ENDOFAUNA, $this->endofauna);
        if ($this->isColumnModified(EcologyPeer::PELAGIC)) $criteria->add(EcologyPeer::PELAGIC, $this->pelagic);
        if ($this->isColumnModified(EcologyPeer::MEGABENTHOS)) $criteria->add(EcologyPeer::MEGABENTHOS, $this->megabenthos);
        if ($this->isColumnModified(EcologyPeer::MACROBENTHOS)) $criteria->add(EcologyPeer::MACROBENTHOS, $this->macrobenthos);
        if ($this->isColumnModified(EcologyPeer::MEIOBENTHOS)) $criteria->add(EcologyPeer::MEIOBENTHOS, $this->meiobenthos);
        if ($this->isColumnModified(EcologyPeer::SOFTBOTTOM)) $criteria->add(EcologyPeer::SOFTBOTTOM, $this->softbottom);
        if ($this->isColumnModified(EcologyPeer::SAND)) $criteria->add(EcologyPeer::SAND, $this->sand);
        if ($this->isColumnModified(EcologyPeer::COARSE)) $criteria->add(EcologyPeer::COARSE, $this->coarse);
        if ($this->isColumnModified(EcologyPeer::FINE)) $criteria->add(EcologyPeer::FINE, $this->fine);
        if ($this->isColumnModified(EcologyPeer::LEVEL)) $criteria->add(EcologyPeer::LEVEL, $this->level);
        if ($this->isColumnModified(EcologyPeer::SLOPING)) $criteria->add(EcologyPeer::SLOPING, $this->sloping);
        if ($this->isColumnModified(EcologyPeer::SILT)) $criteria->add(EcologyPeer::SILT, $this->silt);
        if ($this->isColumnModified(EcologyPeer::MUD)) $criteria->add(EcologyPeer::MUD, $this->mud);
        if ($this->isColumnModified(EcologyPeer::OOZE)) $criteria->add(EcologyPeer::OOZE, $this->ooze);
        if ($this->isColumnModified(EcologyPeer::DETRITUS)) $criteria->add(EcologyPeer::DETRITUS, $this->detritus);
        if ($this->isColumnModified(EcologyPeer::ORGANIC)) $criteria->add(EcologyPeer::ORGANIC, $this->organic);
        if ($this->isColumnModified(EcologyPeer::HARDBOTTOM)) $criteria->add(EcologyPeer::HARDBOTTOM, $this->hardbottom);
        if ($this->isColumnModified(EcologyPeer::ROCKY)) $criteria->add(EcologyPeer::ROCKY, $this->rocky);
        if ($this->isColumnModified(EcologyPeer::RUBBLE)) $criteria->add(EcologyPeer::RUBBLE, $this->rubble);
        if ($this->isColumnModified(EcologyPeer::SPECIALHABITATREF)) $criteria->add(EcologyPeer::SPECIALHABITATREF, $this->specialhabitatref);
        if ($this->isColumnModified(EcologyPeer::MACROPHYTE)) $criteria->add(EcologyPeer::MACROPHYTE, $this->macrophyte);
        if ($this->isColumnModified(EcologyPeer::BEDSBIVALVE)) $criteria->add(EcologyPeer::BEDSBIVALVE, $this->bedsbivalve);
        if ($this->isColumnModified(EcologyPeer::BEDSROCK)) $criteria->add(EcologyPeer::BEDSROCK, $this->bedsrock);
        if ($this->isColumnModified(EcologyPeer::SEAGRASSBEDS)) $criteria->add(EcologyPeer::SEAGRASSBEDS, $this->seagrassbeds);
        if ($this->isColumnModified(EcologyPeer::BEDSOTHERS)) $criteria->add(EcologyPeer::BEDSOTHERS, $this->bedsothers);
        if ($this->isColumnModified(EcologyPeer::CORALREEFS)) $criteria->add(EcologyPeer::CORALREEFS, $this->coralreefs);
        if ($this->isColumnModified(EcologyPeer::REEFEXCLUSIVE)) $criteria->add(EcologyPeer::REEFEXCLUSIVE, $this->reefexclusive);
        if ($this->isColumnModified(EcologyPeer::DROPOFFS)) $criteria->add(EcologyPeer::DROPOFFS, $this->dropoffs);
        if ($this->isColumnModified(EcologyPeer::REEFFLATS)) $criteria->add(EcologyPeer::REEFFLATS, $this->reefflats);
        if ($this->isColumnModified(EcologyPeer::LAGOONS)) $criteria->add(EcologyPeer::LAGOONS, $this->lagoons);
        if ($this->isColumnModified(EcologyPeer::BURROWS)) $criteria->add(EcologyPeer::BURROWS, $this->burrows);
        if ($this->isColumnModified(EcologyPeer::TUNNELS)) $criteria->add(EcologyPeer::TUNNELS, $this->tunnels);
        if ($this->isColumnModified(EcologyPeer::CREVICES)) $criteria->add(EcologyPeer::CREVICES, $this->crevices);
        if ($this->isColumnModified(EcologyPeer::VENTS)) $criteria->add(EcologyPeer::VENTS, $this->vents);
        if ($this->isColumnModified(EcologyPeer::SEAMOUNTS)) $criteria->add(EcologyPeer::SEAMOUNTS, $this->seamounts);
        if ($this->isColumnModified(EcologyPeer::DEEPWATERCORALS)) $criteria->add(EcologyPeer::DEEPWATERCORALS, $this->deepwatercorals);
        if ($this->isColumnModified(EcologyPeer::VEGETATION)) $criteria->add(EcologyPeer::VEGETATION, $this->vegetation);
        if ($this->isColumnModified(EcologyPeer::LEAVES)) $criteria->add(EcologyPeer::LEAVES, $this->leaves);
        if ($this->isColumnModified(EcologyPeer::STEMS)) $criteria->add(EcologyPeer::STEMS, $this->stems);
        if ($this->isColumnModified(EcologyPeer::ROOTS)) $criteria->add(EcologyPeer::ROOTS, $this->roots);
        if ($this->isColumnModified(EcologyPeer::DRIFTWOOD)) $criteria->add(EcologyPeer::DRIFTWOOD, $this->driftwood);
        if ($this->isColumnModified(EcologyPeer::OINVERTERBRATES)) $criteria->add(EcologyPeer::OINVERTERBRATES, $this->oinverterbrates);
        if ($this->isColumnModified(EcologyPeer::OIREMARKS)) $criteria->add(EcologyPeer::OIREMARKS, $this->oiremarks);
        if ($this->isColumnModified(EcologyPeer::VERTERBRATES)) $criteria->add(EcologyPeer::VERTERBRATES, $this->verterbrates);
        if ($this->isColumnModified(EcologyPeer::VREMARKS)) $criteria->add(EcologyPeer::VREMARKS, $this->vremarks);
        if ($this->isColumnModified(EcologyPeer::PILINGS)) $criteria->add(EcologyPeer::PILINGS, $this->pilings);
        if ($this->isColumnModified(EcologyPeer::BOATHULLS)) $criteria->add(EcologyPeer::BOATHULLS, $this->boathulls);
        if ($this->isColumnModified(EcologyPeer::CORALS)) $criteria->add(EcologyPeer::CORALS, $this->corals);
        if ($this->isColumnModified(EcologyPeer::SOFTCORALS)) $criteria->add(EcologyPeer::SOFTCORALS, $this->softcorals);
        if ($this->isColumnModified(EcologyPeer::ONPOLYP)) $criteria->add(EcologyPeer::ONPOLYP, $this->onpolyp);
        if ($this->isColumnModified(EcologyPeer::BETWEENPOLYPS)) $criteria->add(EcologyPeer::BETWEENPOLYPS, $this->betweenpolyps);
        if ($this->isColumnModified(EcologyPeer::HARDCORALS)) $criteria->add(EcologyPeer::HARDCORALS, $this->hardcorals);
        if ($this->isColumnModified(EcologyPeer::ONEXOSKELETON)) $criteria->add(EcologyPeer::ONEXOSKELETON, $this->onexoskeleton);
        if ($this->isColumnModified(EcologyPeer::INTERSTITIALSPACES)) $criteria->add(EcologyPeer::INTERSTITIALSPACES, $this->interstitialspaces);
        if ($this->isColumnModified(EcologyPeer::ENTERED)) $criteria->add(EcologyPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(EcologyPeer::DATEENTERED)) $criteria->add(EcologyPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(EcologyPeer::MODIFIED)) $criteria->add(EcologyPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(EcologyPeer::DATEMODIFIED)) $criteria->add(EcologyPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(EcologyPeer::EXPERT)) $criteria->add(EcologyPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(EcologyPeer::DATECHECKED)) $criteria->add(EcologyPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(EcologyPeer::TS)) $criteria->add(EcologyPeer::TS, $this->ts);

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
        $criteria = new Criteria(EcologyPeer::DATABASE_NAME);
        $criteria->add(EcologyPeer::STOCKCODE, $this->stockcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getStockcode();
    }

    /**
     * Generic method to set the primary key (stockcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setStockcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getStockcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ecology (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setEcologyrefno($this->getEcologyrefno());
        $copyObj->setHabitatsref($this->getHabitatsref());
        $copyObj->setNeritic($this->getNeritic());
        $copyObj->setSupralittoralzone($this->getSupralittoralzone());
        $copyObj->setSaltmarshes($this->getSaltmarshes());
        $copyObj->setLittoralzone($this->getLittoralzone());
        $copyObj->setTidepools($this->getTidepools());
        $copyObj->setIntertidal($this->getIntertidal());
        $copyObj->setSublittoral($this->getSublittoral());
        $copyObj->setCaves($this->getCaves());
        $copyObj->setOceanic($this->getOceanic());
        $copyObj->setEpipelagic($this->getEpipelagic());
        $copyObj->setMesopelagic($this->getMesopelagic());
        $copyObj->setBathypelagic($this->getBathypelagic());
        $copyObj->setAbyssopelagic($this->getAbyssopelagic());
        $copyObj->setHadopelagic($this->getHadopelagic());
        $copyObj->setEstuaries($this->getEstuaries());
        $copyObj->setMangroves($this->getMangroves());
        $copyObj->setMarshesswamps($this->getMarshesswamps());
        $copyObj->setCaveanchialine($this->getCaveanchialine());
        $copyObj->setStream($this->getStream());
        $copyObj->setLakes($this->getLakes());
        $copyObj->setCave($this->getCave());
        $copyObj->setCave2($this->getCave2());
        $copyObj->setHerbivory2($this->getHerbivory2());
        $copyObj->setHerbivoryref($this->getHerbivoryref());
        $copyObj->setFeedingtype($this->getFeedingtype());
        $copyObj->setFeedingtyperef($this->getFeedingtyperef());
        $copyObj->setDiettroph($this->getDiettroph());
        $copyObj->setDietsetroph($this->getDietsetroph());
        $copyObj->setDiettlu($this->getDiettlu());
        $copyObj->setDietsetlu($this->getDietsetlu());
        $copyObj->setDietremark($this->getDietremark());
        $copyObj->setDietref($this->getDietref());
        $copyObj->setFoodtroph($this->getFoodtroph());
        $copyObj->setFoodsetroph($this->getFoodsetroph());
        $copyObj->setFoodremark($this->getFoodremark());
        $copyObj->setFoodref($this->getFoodref());
        $copyObj->setAddrems($this->getAddrems());
        $copyObj->setAssociationref($this->getAssociationref());
        $copyObj->setParasitism($this->getParasitism());
        $copyObj->setSolitary($this->getSolitary());
        $copyObj->setSymbiosis($this->getSymbiosis());
        $copyObj->setSymphorism($this->getSymphorism());
        $copyObj->setCommensalism($this->getCommensalism());
        $copyObj->setMutualism($this->getMutualism());
        $copyObj->setEpiphytic($this->getEpiphytic());
        $copyObj->setSchooling($this->getSchooling());
        $copyObj->setSchoolingfrequency($this->getSchoolingfrequency());
        $copyObj->setSchoolinglifestage($this->getSchoolinglifestage());
        $copyObj->setShoaling($this->getShoaling());
        $copyObj->setShoalingfrequency($this->getShoalingfrequency());
        $copyObj->setShoalinglifestage($this->getShoalinglifestage());
        $copyObj->setSchoolshoalref($this->getSchoolshoalref());
        $copyObj->setAssociationswith($this->getAssociationswith());
        $copyObj->setAssociationsremarks($this->getAssociationsremarks());
        $copyObj->setOutsidehost($this->getOutsidehost());
        $copyObj->setOhremarks($this->getOhremarks());
        $copyObj->setInsidehost($this->getInsidehost());
        $copyObj->setIhremarks($this->getIhremarks());
        $copyObj->setSubstrateref($this->getSubstrateref());
        $copyObj->setBenthic($this->getBenthic());
        $copyObj->setSessile($this->getSessile());
        $copyObj->setMobile($this->getMobile());
        $copyObj->setDemersal($this->getDemersal());
        $copyObj->setEndofauna($this->getEndofauna());
        $copyObj->setPelagic($this->getPelagic());
        $copyObj->setMegabenthos($this->getMegabenthos());
        $copyObj->setMacrobenthos($this->getMacrobenthos());
        $copyObj->setMeiobenthos($this->getMeiobenthos());
        $copyObj->setSoftbottom($this->getSoftbottom());
        $copyObj->setSand($this->getSand());
        $copyObj->setCoarse($this->getCoarse());
        $copyObj->setFine($this->getFine());
        $copyObj->setLevel($this->getLevel());
        $copyObj->setSloping($this->getSloping());
        $copyObj->setSilt($this->getSilt());
        $copyObj->setMud($this->getMud());
        $copyObj->setOoze($this->getOoze());
        $copyObj->setDetritus($this->getDetritus());
        $copyObj->setOrganic($this->getOrganic());
        $copyObj->setHardbottom($this->getHardbottom());
        $copyObj->setRocky($this->getRocky());
        $copyObj->setRubble($this->getRubble());
        $copyObj->setSpecialhabitatref($this->getSpecialhabitatref());
        $copyObj->setMacrophyte($this->getMacrophyte());
        $copyObj->setBedsbivalve($this->getBedsbivalve());
        $copyObj->setBedsrock($this->getBedsrock());
        $copyObj->setSeagrassbeds($this->getSeagrassbeds());
        $copyObj->setBedsothers($this->getBedsothers());
        $copyObj->setCoralreefs($this->getCoralreefs());
        $copyObj->setReefexclusive($this->getReefexclusive());
        $copyObj->setDropoffs($this->getDropoffs());
        $copyObj->setReefflats($this->getReefflats());
        $copyObj->setLagoons($this->getLagoons());
        $copyObj->setBurrows($this->getBurrows());
        $copyObj->setTunnels($this->getTunnels());
        $copyObj->setCrevices($this->getCrevices());
        $copyObj->setVents($this->getVents());
        $copyObj->setSeamounts($this->getSeamounts());
        $copyObj->setDeepwatercorals($this->getDeepwatercorals());
        $copyObj->setVegetation($this->getVegetation());
        $copyObj->setLeaves($this->getLeaves());
        $copyObj->setStems($this->getStems());
        $copyObj->setRoots($this->getRoots());
        $copyObj->setDriftwood($this->getDriftwood());
        $copyObj->setOinverterbrates($this->getOinverterbrates());
        $copyObj->setOiremarks($this->getOiremarks());
        $copyObj->setVerterbrates($this->getVerterbrates());
        $copyObj->setVremarks($this->getVremarks());
        $copyObj->setPilings($this->getPilings());
        $copyObj->setBoathulls($this->getBoathulls());
        $copyObj->setCorals($this->getCorals());
        $copyObj->setSoftcorals($this->getSoftcorals());
        $copyObj->setOnpolyp($this->getOnpolyp());
        $copyObj->setBetweenpolyps($this->getBetweenpolyps());
        $copyObj->setHardcorals($this->getHardcorals());
        $copyObj->setOnexoskeleton($this->getOnexoskeleton());
        $copyObj->setInterstitialspaces($this->getInterstitialspaces());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setStockcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ecology Clone of current object.
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
     * @return EcologyPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EcologyPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->speccode = null;
        $this->stockcode = null;
        $this->ecologyrefno = null;
        $this->habitatsref = null;
        $this->neritic = null;
        $this->supralittoralzone = null;
        $this->saltmarshes = null;
        $this->littoralzone = null;
        $this->tidepools = null;
        $this->intertidal = null;
        $this->sublittoral = null;
        $this->caves = null;
        $this->oceanic = null;
        $this->epipelagic = null;
        $this->mesopelagic = null;
        $this->bathypelagic = null;
        $this->abyssopelagic = null;
        $this->hadopelagic = null;
        $this->estuaries = null;
        $this->mangroves = null;
        $this->marshesswamps = null;
        $this->caveanchialine = null;
        $this->stream = null;
        $this->lakes = null;
        $this->cave = null;
        $this->cave2 = null;
        $this->herbivory2 = null;
        $this->herbivoryref = null;
        $this->feedingtype = null;
        $this->feedingtyperef = null;
        $this->diettroph = null;
        $this->dietsetroph = null;
        $this->diettlu = null;
        $this->dietsetlu = null;
        $this->dietremark = null;
        $this->dietref = null;
        $this->foodtroph = null;
        $this->foodsetroph = null;
        $this->foodremark = null;
        $this->foodref = null;
        $this->addrems = null;
        $this->associationref = null;
        $this->parasitism = null;
        $this->solitary = null;
        $this->symbiosis = null;
        $this->symphorism = null;
        $this->commensalism = null;
        $this->mutualism = null;
        $this->epiphytic = null;
        $this->schooling = null;
        $this->schoolingfrequency = null;
        $this->schoolinglifestage = null;
        $this->shoaling = null;
        $this->shoalingfrequency = null;
        $this->shoalinglifestage = null;
        $this->schoolshoalref = null;
        $this->associationswith = null;
        $this->associationsremarks = null;
        $this->outsidehost = null;
        $this->ohremarks = null;
        $this->insidehost = null;
        $this->ihremarks = null;
        $this->substrateref = null;
        $this->benthic = null;
        $this->sessile = null;
        $this->mobile = null;
        $this->demersal = null;
        $this->endofauna = null;
        $this->pelagic = null;
        $this->megabenthos = null;
        $this->macrobenthos = null;
        $this->meiobenthos = null;
        $this->softbottom = null;
        $this->sand = null;
        $this->coarse = null;
        $this->fine = null;
        $this->level = null;
        $this->sloping = null;
        $this->silt = null;
        $this->mud = null;
        $this->ooze = null;
        $this->detritus = null;
        $this->organic = null;
        $this->hardbottom = null;
        $this->rocky = null;
        $this->rubble = null;
        $this->specialhabitatref = null;
        $this->macrophyte = null;
        $this->bedsbivalve = null;
        $this->bedsrock = null;
        $this->seagrassbeds = null;
        $this->bedsothers = null;
        $this->coralreefs = null;
        $this->reefexclusive = null;
        $this->dropoffs = null;
        $this->reefflats = null;
        $this->lagoons = null;
        $this->burrows = null;
        $this->tunnels = null;
        $this->crevices = null;
        $this->vents = null;
        $this->seamounts = null;
        $this->deepwatercorals = null;
        $this->vegetation = null;
        $this->leaves = null;
        $this->stems = null;
        $this->roots = null;
        $this->driftwood = null;
        $this->oinverterbrates = null;
        $this->oiremarks = null;
        $this->verterbrates = null;
        $this->vremarks = null;
        $this->pilings = null;
        $this->boathulls = null;
        $this->corals = null;
        $this->softcorals = null;
        $this->onpolyp = null;
        $this->betweenpolyps = null;
        $this->hardcorals = null;
        $this->onexoskeleton = null;
        $this->interstitialspaces = null;
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
        return (string) $this->exportTo(EcologyPeer::DEFAULT_STRING_FORMAT);
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
