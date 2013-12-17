<?php


/**
 * Base class that represents a row from the 'species' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpecies extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SpeciesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SpeciesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the genus field.
     * @var        string
     */
    protected $genus;

    /**
     * The value for the species field.
     * @var        string
     */
    protected $species;

    /**
     * The value for the speciesrefno field.
     * @var        int
     */
    protected $speciesrefno;

    /**
     * The value for the author field.
     * @var        string
     */
    protected $author;

    /**
     * The value for the fbname field.
     * @var        string
     */
    protected $fbname;

    /**
     * The value for the picpreferredname field.
     * @var        string
     */
    protected $picpreferredname;

    /**
     * The value for the picpreferrednamem field.
     * @var        string
     */
    protected $picpreferrednamem;

    /**
     * The value for the picpreferrednamef field.
     * @var        string
     */
    protected $picpreferrednamef;

    /**
     * The value for the picpreferrednamej field.
     * @var        string
     */
    protected $picpreferrednamej;

    /**
     * The value for the famcode field.
     * @var        int
     */
    protected $famcode;

    /**
     * The value for the subfamily field.
     * @var        string
     */
    protected $subfamily;

    /**
     * The value for the gencode field.
     * @var        int
     */
    protected $gencode;

    /**
     * The value for the subgencode field.
     * @var        int
     */
    protected $subgencode;

    /**
     * The value for the bodyshapei field.
     * @var        string
     */
    protected $bodyshapei;

    /**
     * The value for the source field.
     * @var        string
     */
    protected $source;

    /**
     * The value for the remark field.
     * @var        string
     */
    protected $remark;

    /**
     * The value for the taxissue field.
     * @var        int
     */
    protected $taxissue;

    /**
     * The value for the fresh field.
     * @var        int
     */
    protected $fresh;

    /**
     * The value for the brack field.
     * @var        int
     */
    protected $brack;

    /**
     * The value for the saltwater field.
     * @var        int
     */
    protected $saltwater;

    /**
     * The value for the demerspelag field.
     * @var        string
     */
    protected $demerspelag;

    /**
     * The value for the anacat field.
     * @var        string
     */
    protected $anacat;

    /**
     * The value for the migratref field.
     * @var        int
     */
    protected $migratref;

    /**
     * The value for the depthrangeshallow field.
     * @var        int
     */
    protected $depthrangeshallow;

    /**
     * The value for the depthrangedeep field.
     * @var        int
     */
    protected $depthrangedeep;

    /**
     * The value for the depthrangeref field.
     * @var        int
     */
    protected $depthrangeref;

    /**
     * The value for the depthrangecomshallow field.
     * @var        int
     */
    protected $depthrangecomshallow;

    /**
     * The value for the depthrangecomdeep field.
     * @var        int
     */
    protected $depthrangecomdeep;

    /**
     * The value for the depthcomref field.
     * @var        int
     */
    protected $depthcomref;

    /**
     * The value for the longevitywild field.
     * @var        double
     */
    protected $longevitywild;

    /**
     * The value for the longevitywildref field.
     * @var        int
     */
    protected $longevitywildref;

    /**
     * The value for the longevitycaptive field.
     * @var        double
     */
    protected $longevitycaptive;

    /**
     * The value for the longevitycapref field.
     * @var        int
     */
    protected $longevitycapref;

    /**
     * The value for the vulnerability field.
     * @var        double
     */
    protected $vulnerability;

    /**
     * The value for the length field.
     * @var        double
     */
    protected $length;

    /**
     * The value for the ltypemaxm field.
     * @var        string
     */
    protected $ltypemaxm;

    /**
     * The value for the lengthfemale field.
     * @var        double
     */
    protected $lengthfemale;

    /**
     * The value for the ltypemaxf field.
     * @var        string
     */
    protected $ltypemaxf;

    /**
     * The value for the maxlengthref field.
     * @var        int
     */
    protected $maxlengthref;

    /**
     * The value for the commonlength field.
     * @var        double
     */
    protected $commonlength;

    /**
     * The value for the ltypecomm field.
     * @var        string
     */
    protected $ltypecomm;

    /**
     * The value for the commonlengthf field.
     * @var        double
     */
    protected $commonlengthf;

    /**
     * The value for the ltypecomf field.
     * @var        string
     */
    protected $ltypecomf;

    /**
     * The value for the commonlengthref field.
     * @var        int
     */
    protected $commonlengthref;

    /**
     * The value for the weight field.
     * @var        double
     */
    protected $weight;

    /**
     * The value for the weightfemale field.
     * @var        double
     */
    protected $weightfemale;

    /**
     * The value for the maxweightref field.
     * @var        int
     */
    protected $maxweightref;

    /**
     * The value for the pic field.
     * @var        string
     */
    protected $pic;

    /**
     * The value for the picturefemale field.
     * @var        string
     */
    protected $picturefemale;

    /**
     * The value for the larvapic field.
     * @var        string
     */
    protected $larvapic;

    /**
     * The value for the eggpic field.
     * @var        string
     */
    protected $eggpic;

    /**
     * The value for the importanceref field.
     * @var        int
     */
    protected $importanceref;

    /**
     * The value for the importance field.
     * @var        string
     */
    protected $importance;

    /**
     * The value for the pricecateg field.
     * @var        string
     */
    protected $pricecateg;

    /**
     * The value for the pricereliability field.
     * @var        string
     */
    protected $pricereliability;

    /**
     * The value for the remarks7 field.
     * @var        string
     */
    protected $remarks7;

    /**
     * The value for the landingstatistics field.
     * @var        string
     */
    protected $landingstatistics;

    /**
     * The value for the landings field.
     * @var        string
     */
    protected $landings;

    /**
     * The value for the maincatchingmethod field.
     * @var        string
     */
    protected $maincatchingmethod;

    /**
     * The value for the ii field.
     * @var        string
     */
    protected $ii;

    /**
     * The value for the mseines field.
     * @var        int
     */
    protected $mseines;

    /**
     * The value for the mgillnets field.
     * @var        int
     */
    protected $mgillnets;

    /**
     * The value for the mcastnets field.
     * @var        int
     */
    protected $mcastnets;

    /**
     * The value for the mtraps field.
     * @var        int
     */
    protected $mtraps;

    /**
     * The value for the mspears field.
     * @var        int
     */
    protected $mspears;

    /**
     * The value for the mtrawls field.
     * @var        int
     */
    protected $mtrawls;

    /**
     * The value for the mdredges field.
     * @var        int
     */
    protected $mdredges;

    /**
     * The value for the mliftnets field.
     * @var        int
     */
    protected $mliftnets;

    /**
     * The value for the mhookslines field.
     * @var        int
     */
    protected $mhookslines;

    /**
     * The value for the mother field.
     * @var        int
     */
    protected $mother;

    /**
     * The value for the usedforaquaculture field.
     * @var        string
     */
    protected $usedforaquaculture;

    /**
     * The value for the lifecycle field.
     * @var        string
     */
    protected $lifecycle;

    /**
     * The value for the aquacultureref field.
     * @var        int
     */
    protected $aquacultureref;

    /**
     * The value for the usedasbait field.
     * @var        string
     */
    protected $usedasbait;

    /**
     * The value for the baitref field.
     * @var        int
     */
    protected $baitref;

    /**
     * The value for the aquarium field.
     * @var        string
     */
    protected $aquarium;

    /**
     * The value for the aquariumfishii field.
     * @var        string
     */
    protected $aquariumfishii;

    /**
     * The value for the aquariumref field.
     * @var        int
     */
    protected $aquariumref;

    /**
     * The value for the gamefish field.
     * @var        int
     */
    protected $gamefish;

    /**
     * The value for the gameref field.
     * @var        int
     */
    protected $gameref;

    /**
     * The value for the dangerous field.
     * @var        string
     */
    protected $dangerous;

    /**
     * The value for the dangerousref field.
     * @var        int
     */
    protected $dangerousref;

    /**
     * The value for the electrogenic field.
     * @var        string
     */
    protected $electrogenic;

    /**
     * The value for the electroref field.
     * @var        int
     */
    protected $electroref;

    /**
     * The value for the complete field.
     * @var        string
     */
    protected $complete;

    /**
     * The value for the googleimage field.
     * @var        int
     */
    protected $googleimage;

    /**
     * The value for the comments field.
     * @var        string
     */
    protected $comments;

    /**
     * The value for the profile field.
     * @var        string
     */
    protected $profile;

    /**
     * The value for the pd50 field.
     * @var        double
     */
    protected $pd50;

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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [genus] column value.
     *
     * @return string
     */
    public function getGenus()
    {

        return $this->genus;
    }

    /**
     * Get the [species] column value.
     *
     * @return string
     */
    public function getSpecies()
    {

        return $this->species;
    }

    /**
     * Get the [speciesrefno] column value.
     *
     * @return int
     */
    public function getSpeciesrefno()
    {

        return $this->speciesrefno;
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
     * Get the [fbname] column value.
     *
     * @return string
     */
    public function getFbname()
    {

        return $this->fbname;
    }

    /**
     * Get the [picpreferredname] column value.
     *
     * @return string
     */
    public function getPicpreferredname()
    {

        return $this->picpreferredname;
    }

    /**
     * Get the [picpreferrednamem] column value.
     *
     * @return string
     */
    public function getPicpreferrednamem()
    {

        return $this->picpreferrednamem;
    }

    /**
     * Get the [picpreferrednamef] column value.
     *
     * @return string
     */
    public function getPicpreferrednamef()
    {

        return $this->picpreferrednamef;
    }

    /**
     * Get the [picpreferrednamej] column value.
     *
     * @return string
     */
    public function getPicpreferrednamej()
    {

        return $this->picpreferrednamej;
    }

    /**
     * Get the [famcode] column value.
     *
     * @return int
     */
    public function getFamcode()
    {

        return $this->famcode;
    }

    /**
     * Get the [subfamily] column value.
     *
     * @return string
     */
    public function getSubfamily()
    {

        return $this->subfamily;
    }

    /**
     * Get the [gencode] column value.
     *
     * @return int
     */
    public function getGencode()
    {

        return $this->gencode;
    }

    /**
     * Get the [subgencode] column value.
     *
     * @return int
     */
    public function getSubgencode()
    {

        return $this->subgencode;
    }

    /**
     * Get the [bodyshapei] column value.
     *
     * @return string
     */
    public function getBodyshapei()
    {

        return $this->bodyshapei;
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
     * Get the [remark] column value.
     *
     * @return string
     */
    public function getRemark()
    {

        return $this->remark;
    }

    /**
     * Get the [taxissue] column value.
     *
     * @return int
     */
    public function getTaxissue()
    {

        return $this->taxissue;
    }

    /**
     * Get the [fresh] column value.
     *
     * @return int
     */
    public function getFresh()
    {

        return $this->fresh;
    }

    /**
     * Get the [brack] column value.
     *
     * @return int
     */
    public function getBrack()
    {

        return $this->brack;
    }

    /**
     * Get the [saltwater] column value.
     *
     * @return int
     */
    public function getSaltwater()
    {

        return $this->saltwater;
    }

    /**
     * Get the [demerspelag] column value.
     *
     * @return string
     */
    public function getDemerspelag()
    {

        return $this->demerspelag;
    }

    /**
     * Get the [anacat] column value.
     *
     * @return string
     */
    public function getAnacat()
    {

        return $this->anacat;
    }

    /**
     * Get the [migratref] column value.
     *
     * @return int
     */
    public function getMigratref()
    {

        return $this->migratref;
    }

    /**
     * Get the [depthrangeshallow] column value.
     *
     * @return int
     */
    public function getDepthrangeshallow()
    {

        return $this->depthrangeshallow;
    }

    /**
     * Get the [depthrangedeep] column value.
     *
     * @return int
     */
    public function getDepthrangedeep()
    {

        return $this->depthrangedeep;
    }

    /**
     * Get the [depthrangeref] column value.
     *
     * @return int
     */
    public function getDepthrangeref()
    {

        return $this->depthrangeref;
    }

    /**
     * Get the [depthrangecomshallow] column value.
     *
     * @return int
     */
    public function getDepthrangecomshallow()
    {

        return $this->depthrangecomshallow;
    }

    /**
     * Get the [depthrangecomdeep] column value.
     *
     * @return int
     */
    public function getDepthrangecomdeep()
    {

        return $this->depthrangecomdeep;
    }

    /**
     * Get the [depthcomref] column value.
     *
     * @return int
     */
    public function getDepthcomref()
    {

        return $this->depthcomref;
    }

    /**
     * Get the [longevitywild] column value.
     *
     * @return double
     */
    public function getLongevitywild()
    {

        return $this->longevitywild;
    }

    /**
     * Get the [longevitywildref] column value.
     *
     * @return int
     */
    public function getLongevitywildref()
    {

        return $this->longevitywildref;
    }

    /**
     * Get the [longevitycaptive] column value.
     *
     * @return double
     */
    public function getLongevitycaptive()
    {

        return $this->longevitycaptive;
    }

    /**
     * Get the [longevitycapref] column value.
     *
     * @return int
     */
    public function getLongevitycapref()
    {

        return $this->longevitycapref;
    }

    /**
     * Get the [vulnerability] column value.
     *
     * @return double
     */
    public function getVulnerability()
    {

        return $this->vulnerability;
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
     * Get the [ltypemaxm] column value.
     *
     * @return string
     */
    public function getLtypemaxm()
    {

        return $this->ltypemaxm;
    }

    /**
     * Get the [lengthfemale] column value.
     *
     * @return double
     */
    public function getLengthfemale()
    {

        return $this->lengthfemale;
    }

    /**
     * Get the [ltypemaxf] column value.
     *
     * @return string
     */
    public function getLtypemaxf()
    {

        return $this->ltypemaxf;
    }

    /**
     * Get the [maxlengthref] column value.
     *
     * @return int
     */
    public function getMaxlengthref()
    {

        return $this->maxlengthref;
    }

    /**
     * Get the [commonlength] column value.
     *
     * @return double
     */
    public function getCommonlength()
    {

        return $this->commonlength;
    }

    /**
     * Get the [ltypecomm] column value.
     *
     * @return string
     */
    public function getLtypecomm()
    {

        return $this->ltypecomm;
    }

    /**
     * Get the [commonlengthf] column value.
     *
     * @return double
     */
    public function getCommonlengthf()
    {

        return $this->commonlengthf;
    }

    /**
     * Get the [ltypecomf] column value.
     *
     * @return string
     */
    public function getLtypecomf()
    {

        return $this->ltypecomf;
    }

    /**
     * Get the [commonlengthref] column value.
     *
     * @return int
     */
    public function getCommonlengthref()
    {

        return $this->commonlengthref;
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
     * Get the [weightfemale] column value.
     *
     * @return double
     */
    public function getWeightfemale()
    {

        return $this->weightfemale;
    }

    /**
     * Get the [maxweightref] column value.
     *
     * @return int
     */
    public function getMaxweightref()
    {

        return $this->maxweightref;
    }

    /**
     * Get the [pic] column value.
     *
     * @return string
     */
    public function getPic()
    {

        return $this->pic;
    }

    /**
     * Get the [picturefemale] column value.
     *
     * @return string
     */
    public function getPicturefemale()
    {

        return $this->picturefemale;
    }

    /**
     * Get the [larvapic] column value.
     *
     * @return string
     */
    public function getLarvapic()
    {

        return $this->larvapic;
    }

    /**
     * Get the [eggpic] column value.
     *
     * @return string
     */
    public function getEggpic()
    {

        return $this->eggpic;
    }

    /**
     * Get the [importanceref] column value.
     *
     * @return int
     */
    public function getImportanceref()
    {

        return $this->importanceref;
    }

    /**
     * Get the [importance] column value.
     *
     * @return string
     */
    public function getImportance()
    {

        return $this->importance;
    }

    /**
     * Get the [pricecateg] column value.
     *
     * @return string
     */
    public function getPricecateg()
    {

        return $this->pricecateg;
    }

    /**
     * Get the [pricereliability] column value.
     *
     * @return string
     */
    public function getPricereliability()
    {

        return $this->pricereliability;
    }

    /**
     * Get the [remarks7] column value.
     *
     * @return string
     */
    public function getRemarks7()
    {

        return $this->remarks7;
    }

    /**
     * Get the [landingstatistics] column value.
     *
     * @return string
     */
    public function getLandingstatistics()
    {

        return $this->landingstatistics;
    }

    /**
     * Get the [landings] column value.
     *
     * @return string
     */
    public function getLandings()
    {

        return $this->landings;
    }

    /**
     * Get the [maincatchingmethod] column value.
     *
     * @return string
     */
    public function getMaincatchingmethod()
    {

        return $this->maincatchingmethod;
    }

    /**
     * Get the [ii] column value.
     *
     * @return string
     */
    public function getIi()
    {

        return $this->ii;
    }

    /**
     * Get the [mseines] column value.
     *
     * @return int
     */
    public function getMseines()
    {

        return $this->mseines;
    }

    /**
     * Get the [mgillnets] column value.
     *
     * @return int
     */
    public function getMgillnets()
    {

        return $this->mgillnets;
    }

    /**
     * Get the [mcastnets] column value.
     *
     * @return int
     */
    public function getMcastnets()
    {

        return $this->mcastnets;
    }

    /**
     * Get the [mtraps] column value.
     *
     * @return int
     */
    public function getMtraps()
    {

        return $this->mtraps;
    }

    /**
     * Get the [mspears] column value.
     *
     * @return int
     */
    public function getMspears()
    {

        return $this->mspears;
    }

    /**
     * Get the [mtrawls] column value.
     *
     * @return int
     */
    public function getMtrawls()
    {

        return $this->mtrawls;
    }

    /**
     * Get the [mdredges] column value.
     *
     * @return int
     */
    public function getMdredges()
    {

        return $this->mdredges;
    }

    /**
     * Get the [mliftnets] column value.
     *
     * @return int
     */
    public function getMliftnets()
    {

        return $this->mliftnets;
    }

    /**
     * Get the [mhookslines] column value.
     *
     * @return int
     */
    public function getMhookslines()
    {

        return $this->mhookslines;
    }

    /**
     * Get the [mother] column value.
     *
     * @return int
     */
    public function getMother()
    {

        return $this->mother;
    }

    /**
     * Get the [usedforaquaculture] column value.
     *
     * @return string
     */
    public function getUsedforaquaculture()
    {

        return $this->usedforaquaculture;
    }

    /**
     * Get the [lifecycle] column value.
     *
     * @return string
     */
    public function getLifecycle()
    {

        return $this->lifecycle;
    }

    /**
     * Get the [aquacultureref] column value.
     *
     * @return int
     */
    public function getAquacultureref()
    {

        return $this->aquacultureref;
    }

    /**
     * Get the [usedasbait] column value.
     *
     * @return string
     */
    public function getUsedasbait()
    {

        return $this->usedasbait;
    }

    /**
     * Get the [baitref] column value.
     *
     * @return int
     */
    public function getBaitref()
    {

        return $this->baitref;
    }

    /**
     * Get the [aquarium] column value.
     *
     * @return string
     */
    public function getAquarium()
    {

        return $this->aquarium;
    }

    /**
     * Get the [aquariumfishii] column value.
     *
     * @return string
     */
    public function getAquariumfishii()
    {

        return $this->aquariumfishii;
    }

    /**
     * Get the [aquariumref] column value.
     *
     * @return int
     */
    public function getAquariumref()
    {

        return $this->aquariumref;
    }

    /**
     * Get the [gamefish] column value.
     *
     * @return int
     */
    public function getGamefish()
    {

        return $this->gamefish;
    }

    /**
     * Get the [gameref] column value.
     *
     * @return int
     */
    public function getGameref()
    {

        return $this->gameref;
    }

    /**
     * Get the [dangerous] column value.
     *
     * @return string
     */
    public function getDangerous()
    {

        return $this->dangerous;
    }

    /**
     * Get the [dangerousref] column value.
     *
     * @return int
     */
    public function getDangerousref()
    {

        return $this->dangerousref;
    }

    /**
     * Get the [electrogenic] column value.
     *
     * @return string
     */
    public function getElectrogenic()
    {

        return $this->electrogenic;
    }

    /**
     * Get the [electroref] column value.
     *
     * @return int
     */
    public function getElectroref()
    {

        return $this->electroref;
    }

    /**
     * Get the [complete] column value.
     *
     * @return string
     */
    public function getComplete()
    {

        return $this->complete;
    }

    /**
     * Get the [googleimage] column value.
     *
     * @return int
     */
    public function getGoogleimage()
    {

        return $this->googleimage;
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
     * Get the [profile] column value.
     *
     * @return string
     */
    public function getProfile()
    {

        return $this->profile;
    }

    /**
     * Get the [pd50] column value.
     *
     * @return double
     */
    public function getPd50()
    {

        return $this->pd50;
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
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = SpeciesPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [genus] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setGenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->genus !== $v) {
            $this->genus = $v;
            $this->modifiedColumns[] = SpeciesPeer::GENUS;
        }


        return $this;
    } // setGenus()

    /**
     * Set the value of [species] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSpecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->species !== $v) {
            $this->species = $v;
            $this->modifiedColumns[] = SpeciesPeer::SPECIES;
        }


        return $this;
    } // setSpecies()

    /**
     * Set the value of [speciesrefno] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSpeciesrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speciesrefno !== $v) {
            $this->speciesrefno = $v;
            $this->modifiedColumns[] = SpeciesPeer::SPECIESREFNO;
        }


        return $this;
    } // setSpeciesrefno()

    /**
     * Set the value of [author] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setAuthor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->author !== $v) {
            $this->author = $v;
            $this->modifiedColumns[] = SpeciesPeer::AUTHOR;
        }


        return $this;
    } // setAuthor()

    /**
     * Set the value of [fbname] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setFbname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fbname !== $v) {
            $this->fbname = $v;
            $this->modifiedColumns[] = SpeciesPeer::FBNAME;
        }


        return $this;
    } // setFbname()

    /**
     * Set the value of [picpreferredname] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPicpreferredname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picpreferredname !== $v) {
            $this->picpreferredname = $v;
            $this->modifiedColumns[] = SpeciesPeer::PICPREFERREDNAME;
        }


        return $this;
    } // setPicpreferredname()

    /**
     * Set the value of [picpreferrednamem] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPicpreferrednamem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picpreferrednamem !== $v) {
            $this->picpreferrednamem = $v;
            $this->modifiedColumns[] = SpeciesPeer::PICPREFERREDNAMEM;
        }


        return $this;
    } // setPicpreferrednamem()

    /**
     * Set the value of [picpreferrednamef] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPicpreferrednamef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picpreferrednamef !== $v) {
            $this->picpreferrednamef = $v;
            $this->modifiedColumns[] = SpeciesPeer::PICPREFERREDNAMEF;
        }


        return $this;
    } // setPicpreferrednamef()

    /**
     * Set the value of [picpreferrednamej] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPicpreferrednamej($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picpreferrednamej !== $v) {
            $this->picpreferrednamej = $v;
            $this->modifiedColumns[] = SpeciesPeer::PICPREFERREDNAMEJ;
        }


        return $this;
    } // setPicpreferrednamej()

    /**
     * Set the value of [famcode] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setFamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->famcode !== $v) {
            $this->famcode = $v;
            $this->modifiedColumns[] = SpeciesPeer::FAMCODE;
        }


        return $this;
    } // setFamcode()

    /**
     * Set the value of [subfamily] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSubfamily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subfamily !== $v) {
            $this->subfamily = $v;
            $this->modifiedColumns[] = SpeciesPeer::SUBFAMILY;
        }


        return $this;
    } // setSubfamily()

    /**
     * Set the value of [gencode] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setGencode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gencode !== $v) {
            $this->gencode = $v;
            $this->modifiedColumns[] = SpeciesPeer::GENCODE;
        }


        return $this;
    } // setGencode()

    /**
     * Set the value of [subgencode] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSubgencode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->subgencode !== $v) {
            $this->subgencode = $v;
            $this->modifiedColumns[] = SpeciesPeer::SUBGENCODE;
        }


        return $this;
    } // setSubgencode()

    /**
     * Set the value of [bodyshapei] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setBodyshapei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapei !== $v) {
            $this->bodyshapei = $v;
            $this->modifiedColumns[] = SpeciesPeer::BODYSHAPEI;
        }


        return $this;
    } // setBodyshapei()

    /**
     * Set the value of [source] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = SpeciesPeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = SpeciesPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Set the value of [taxissue] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setTaxissue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taxissue !== $v) {
            $this->taxissue = $v;
            $this->modifiedColumns[] = SpeciesPeer::TAXISSUE;
        }


        return $this;
    } // setTaxissue()

    /**
     * Set the value of [fresh] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setFresh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fresh !== $v) {
            $this->fresh = $v;
            $this->modifiedColumns[] = SpeciesPeer::FRESH;
        }


        return $this;
    } // setFresh()

    /**
     * Set the value of [brack] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setBrack($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->brack !== $v) {
            $this->brack = $v;
            $this->modifiedColumns[] = SpeciesPeer::BRACK;
        }


        return $this;
    } // setBrack()

    /**
     * Set the value of [saltwater] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setSaltwater($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->saltwater !== $v) {
            $this->saltwater = $v;
            $this->modifiedColumns[] = SpeciesPeer::SALTWATER;
        }


        return $this;
    } // setSaltwater()

    /**
     * Set the value of [demerspelag] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDemerspelag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->demerspelag !== $v) {
            $this->demerspelag = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEMERSPELAG;
        }


        return $this;
    } // setDemerspelag()

    /**
     * Set the value of [anacat] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setAnacat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->anacat !== $v) {
            $this->anacat = $v;
            $this->modifiedColumns[] = SpeciesPeer::ANACAT;
        }


        return $this;
    } // setAnacat()

    /**
     * Set the value of [migratref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMigratref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->migratref !== $v) {
            $this->migratref = $v;
            $this->modifiedColumns[] = SpeciesPeer::MIGRATREF;
        }


        return $this;
    } // setMigratref()

    /**
     * Set the value of [depthrangeshallow] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDepthrangeshallow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthrangeshallow !== $v) {
            $this->depthrangeshallow = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEPTHRANGESHALLOW;
        }


        return $this;
    } // setDepthrangeshallow()

    /**
     * Set the value of [depthrangedeep] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDepthrangedeep($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthrangedeep !== $v) {
            $this->depthrangedeep = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEPTHRANGEDEEP;
        }


        return $this;
    } // setDepthrangedeep()

    /**
     * Set the value of [depthrangeref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDepthrangeref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthrangeref !== $v) {
            $this->depthrangeref = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEPTHRANGEREF;
        }


        return $this;
    } // setDepthrangeref()

    /**
     * Set the value of [depthrangecomshallow] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDepthrangecomshallow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthrangecomshallow !== $v) {
            $this->depthrangecomshallow = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEPTHRANGECOMSHALLOW;
        }


        return $this;
    } // setDepthrangecomshallow()

    /**
     * Set the value of [depthrangecomdeep] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDepthrangecomdeep($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthrangecomdeep !== $v) {
            $this->depthrangecomdeep = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEPTHRANGECOMDEEP;
        }


        return $this;
    } // setDepthrangecomdeep()

    /**
     * Set the value of [depthcomref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDepthcomref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->depthcomref !== $v) {
            $this->depthcomref = $v;
            $this->modifiedColumns[] = SpeciesPeer::DEPTHCOMREF;
        }


        return $this;
    } // setDepthcomref()

    /**
     * Set the value of [longevitywild] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLongevitywild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longevitywild !== $v) {
            $this->longevitywild = $v;
            $this->modifiedColumns[] = SpeciesPeer::LONGEVITYWILD;
        }


        return $this;
    } // setLongevitywild()

    /**
     * Set the value of [longevitywildref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLongevitywildref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longevitywildref !== $v) {
            $this->longevitywildref = $v;
            $this->modifiedColumns[] = SpeciesPeer::LONGEVITYWILDREF;
        }


        return $this;
    } // setLongevitywildref()

    /**
     * Set the value of [longevitycaptive] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLongevitycaptive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->longevitycaptive !== $v) {
            $this->longevitycaptive = $v;
            $this->modifiedColumns[] = SpeciesPeer::LONGEVITYCAPTIVE;
        }


        return $this;
    } // setLongevitycaptive()

    /**
     * Set the value of [longevitycapref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLongevitycapref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->longevitycapref !== $v) {
            $this->longevitycapref = $v;
            $this->modifiedColumns[] = SpeciesPeer::LONGEVITYCAPREF;
        }


        return $this;
    } // setLongevitycapref()

    /**
     * Set the value of [vulnerability] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setVulnerability($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->vulnerability !== $v) {
            $this->vulnerability = $v;
            $this->modifiedColumns[] = SpeciesPeer::VULNERABILITY;
        }


        return $this;
    } // setVulnerability()

    /**
     * Set the value of [length] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->length !== $v) {
            $this->length = $v;
            $this->modifiedColumns[] = SpeciesPeer::LENGTH;
        }


        return $this;
    } // setLength()

    /**
     * Set the value of [ltypemaxm] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLtypemaxm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ltypemaxm !== $v) {
            $this->ltypemaxm = $v;
            $this->modifiedColumns[] = SpeciesPeer::LTYPEMAXM;
        }


        return $this;
    } // setLtypemaxm()

    /**
     * Set the value of [lengthfemale] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLengthfemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthfemale !== $v) {
            $this->lengthfemale = $v;
            $this->modifiedColumns[] = SpeciesPeer::LENGTHFEMALE;
        }


        return $this;
    } // setLengthfemale()

    /**
     * Set the value of [ltypemaxf] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLtypemaxf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ltypemaxf !== $v) {
            $this->ltypemaxf = $v;
            $this->modifiedColumns[] = SpeciesPeer::LTYPEMAXF;
        }


        return $this;
    } // setLtypemaxf()

    /**
     * Set the value of [maxlengthref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMaxlengthref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxlengthref !== $v) {
            $this->maxlengthref = $v;
            $this->modifiedColumns[] = SpeciesPeer::MAXLENGTHREF;
        }


        return $this;
    } // setMaxlengthref()

    /**
     * Set the value of [commonlength] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setCommonlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->commonlength !== $v) {
            $this->commonlength = $v;
            $this->modifiedColumns[] = SpeciesPeer::COMMONLENGTH;
        }


        return $this;
    } // setCommonlength()

    /**
     * Set the value of [ltypecomm] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLtypecomm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ltypecomm !== $v) {
            $this->ltypecomm = $v;
            $this->modifiedColumns[] = SpeciesPeer::LTYPECOMM;
        }


        return $this;
    } // setLtypecomm()

    /**
     * Set the value of [commonlengthf] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setCommonlengthf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->commonlengthf !== $v) {
            $this->commonlengthf = $v;
            $this->modifiedColumns[] = SpeciesPeer::COMMONLENGTHF;
        }


        return $this;
    } // setCommonlengthf()

    /**
     * Set the value of [ltypecomf] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLtypecomf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ltypecomf !== $v) {
            $this->ltypecomf = $v;
            $this->modifiedColumns[] = SpeciesPeer::LTYPECOMF;
        }


        return $this;
    } // setLtypecomf()

    /**
     * Set the value of [commonlengthref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setCommonlengthref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->commonlengthref !== $v) {
            $this->commonlengthref = $v;
            $this->modifiedColumns[] = SpeciesPeer::COMMONLENGTHREF;
        }


        return $this;
    } // setCommonlengthref()

    /**
     * Set the value of [weight] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[] = SpeciesPeer::WEIGHT;
        }


        return $this;
    } // setWeight()

    /**
     * Set the value of [weightfemale] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setWeightfemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightfemale !== $v) {
            $this->weightfemale = $v;
            $this->modifiedColumns[] = SpeciesPeer::WEIGHTFEMALE;
        }


        return $this;
    } // setWeightfemale()

    /**
     * Set the value of [maxweightref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMaxweightref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxweightref !== $v) {
            $this->maxweightref = $v;
            $this->modifiedColumns[] = SpeciesPeer::MAXWEIGHTREF;
        }


        return $this;
    } // setMaxweightref()

    /**
     * Set the value of [pic] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic !== $v) {
            $this->pic = $v;
            $this->modifiedColumns[] = SpeciesPeer::PIC;
        }


        return $this;
    } // setPic()

    /**
     * Set the value of [picturefemale] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPicturefemale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->picturefemale !== $v) {
            $this->picturefemale = $v;
            $this->modifiedColumns[] = SpeciesPeer::PICTUREFEMALE;
        }


        return $this;
    } // setPicturefemale()

    /**
     * Set the value of [larvapic] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLarvapic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvapic !== $v) {
            $this->larvapic = $v;
            $this->modifiedColumns[] = SpeciesPeer::LARVAPIC;
        }


        return $this;
    } // setLarvapic()

    /**
     * Set the value of [eggpic] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setEggpic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eggpic !== $v) {
            $this->eggpic = $v;
            $this->modifiedColumns[] = SpeciesPeer::EGGPIC;
        }


        return $this;
    } // setEggpic()

    /**
     * Set the value of [importanceref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setImportanceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->importanceref !== $v) {
            $this->importanceref = $v;
            $this->modifiedColumns[] = SpeciesPeer::IMPORTANCEREF;
        }


        return $this;
    } // setImportanceref()

    /**
     * Set the value of [importance] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setImportance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->importance !== $v) {
            $this->importance = $v;
            $this->modifiedColumns[] = SpeciesPeer::IMPORTANCE;
        }


        return $this;
    } // setImportance()

    /**
     * Set the value of [pricecateg] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPricecateg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pricecateg !== $v) {
            $this->pricecateg = $v;
            $this->modifiedColumns[] = SpeciesPeer::PRICECATEG;
        }


        return $this;
    } // setPricecateg()

    /**
     * Set the value of [pricereliability] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPricereliability($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pricereliability !== $v) {
            $this->pricereliability = $v;
            $this->modifiedColumns[] = SpeciesPeer::PRICERELIABILITY;
        }


        return $this;
    } // setPricereliability()

    /**
     * Set the value of [remarks7] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setRemarks7($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarks7 !== $v) {
            $this->remarks7 = $v;
            $this->modifiedColumns[] = SpeciesPeer::REMARKS7;
        }


        return $this;
    } // setRemarks7()

    /**
     * Set the value of [landingstatistics] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLandingstatistics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->landingstatistics !== $v) {
            $this->landingstatistics = $v;
            $this->modifiedColumns[] = SpeciesPeer::LANDINGSTATISTICS;
        }


        return $this;
    } // setLandingstatistics()

    /**
     * Set the value of [landings] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLandings($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->landings !== $v) {
            $this->landings = $v;
            $this->modifiedColumns[] = SpeciesPeer::LANDINGS;
        }


        return $this;
    } // setLandings()

    /**
     * Set the value of [maincatchingmethod] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMaincatchingmethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maincatchingmethod !== $v) {
            $this->maincatchingmethod = $v;
            $this->modifiedColumns[] = SpeciesPeer::MAINCATCHINGMETHOD;
        }


        return $this;
    } // setMaincatchingmethod()

    /**
     * Set the value of [ii] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setIi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ii !== $v) {
            $this->ii = $v;
            $this->modifiedColumns[] = SpeciesPeer::II;
        }


        return $this;
    } // setIi()

    /**
     * Set the value of [mseines] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMseines($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mseines !== $v) {
            $this->mseines = $v;
            $this->modifiedColumns[] = SpeciesPeer::MSEINES;
        }


        return $this;
    } // setMseines()

    /**
     * Set the value of [mgillnets] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMgillnets($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mgillnets !== $v) {
            $this->mgillnets = $v;
            $this->modifiedColumns[] = SpeciesPeer::MGILLNETS;
        }


        return $this;
    } // setMgillnets()

    /**
     * Set the value of [mcastnets] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMcastnets($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mcastnets !== $v) {
            $this->mcastnets = $v;
            $this->modifiedColumns[] = SpeciesPeer::MCASTNETS;
        }


        return $this;
    } // setMcastnets()

    /**
     * Set the value of [mtraps] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMtraps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mtraps !== $v) {
            $this->mtraps = $v;
            $this->modifiedColumns[] = SpeciesPeer::MTRAPS;
        }


        return $this;
    } // setMtraps()

    /**
     * Set the value of [mspears] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMspears($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mspears !== $v) {
            $this->mspears = $v;
            $this->modifiedColumns[] = SpeciesPeer::MSPEARS;
        }


        return $this;
    } // setMspears()

    /**
     * Set the value of [mtrawls] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMtrawls($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mtrawls !== $v) {
            $this->mtrawls = $v;
            $this->modifiedColumns[] = SpeciesPeer::MTRAWLS;
        }


        return $this;
    } // setMtrawls()

    /**
     * Set the value of [mdredges] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMdredges($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mdredges !== $v) {
            $this->mdredges = $v;
            $this->modifiedColumns[] = SpeciesPeer::MDREDGES;
        }


        return $this;
    } // setMdredges()

    /**
     * Set the value of [mliftnets] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMliftnets($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mliftnets !== $v) {
            $this->mliftnets = $v;
            $this->modifiedColumns[] = SpeciesPeer::MLIFTNETS;
        }


        return $this;
    } // setMliftnets()

    /**
     * Set the value of [mhookslines] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMhookslines($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mhookslines !== $v) {
            $this->mhookslines = $v;
            $this->modifiedColumns[] = SpeciesPeer::MHOOKSLINES;
        }


        return $this;
    } // setMhookslines()

    /**
     * Set the value of [mother] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setMother($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mother !== $v) {
            $this->mother = $v;
            $this->modifiedColumns[] = SpeciesPeer::MOTHER;
        }


        return $this;
    } // setMother()

    /**
     * Set the value of [usedforaquaculture] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setUsedforaquaculture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->usedforaquaculture !== $v) {
            $this->usedforaquaculture = $v;
            $this->modifiedColumns[] = SpeciesPeer::USEDFORAQUACULTURE;
        }


        return $this;
    } // setUsedforaquaculture()

    /**
     * Set the value of [lifecycle] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setLifecycle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lifecycle !== $v) {
            $this->lifecycle = $v;
            $this->modifiedColumns[] = SpeciesPeer::LIFECYCLE;
        }


        return $this;
    } // setLifecycle()

    /**
     * Set the value of [aquacultureref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setAquacultureref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aquacultureref !== $v) {
            $this->aquacultureref = $v;
            $this->modifiedColumns[] = SpeciesPeer::AQUACULTUREREF;
        }


        return $this;
    } // setAquacultureref()

    /**
     * Set the value of [usedasbait] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setUsedasbait($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->usedasbait !== $v) {
            $this->usedasbait = $v;
            $this->modifiedColumns[] = SpeciesPeer::USEDASBAIT;
        }


        return $this;
    } // setUsedasbait()

    /**
     * Set the value of [baitref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setBaitref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->baitref !== $v) {
            $this->baitref = $v;
            $this->modifiedColumns[] = SpeciesPeer::BAITREF;
        }


        return $this;
    } // setBaitref()

    /**
     * Set the value of [aquarium] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setAquarium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquarium !== $v) {
            $this->aquarium = $v;
            $this->modifiedColumns[] = SpeciesPeer::AQUARIUM;
        }


        return $this;
    } // setAquarium()

    /**
     * Set the value of [aquariumfishii] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setAquariumfishii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aquariumfishii !== $v) {
            $this->aquariumfishii = $v;
            $this->modifiedColumns[] = SpeciesPeer::AQUARIUMFISHII;
        }


        return $this;
    } // setAquariumfishii()

    /**
     * Set the value of [aquariumref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setAquariumref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aquariumref !== $v) {
            $this->aquariumref = $v;
            $this->modifiedColumns[] = SpeciesPeer::AQUARIUMREF;
        }


        return $this;
    } // setAquariumref()

    /**
     * Set the value of [gamefish] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setGamefish($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gamefish !== $v) {
            $this->gamefish = $v;
            $this->modifiedColumns[] = SpeciesPeer::GAMEFISH;
        }


        return $this;
    } // setGamefish()

    /**
     * Set the value of [gameref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setGameref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gameref !== $v) {
            $this->gameref = $v;
            $this->modifiedColumns[] = SpeciesPeer::GAMEREF;
        }


        return $this;
    } // setGameref()

    /**
     * Set the value of [dangerous] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDangerous($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dangerous !== $v) {
            $this->dangerous = $v;
            $this->modifiedColumns[] = SpeciesPeer::DANGEROUS;
        }


        return $this;
    } // setDangerous()

    /**
     * Set the value of [dangerousref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setDangerousref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dangerousref !== $v) {
            $this->dangerousref = $v;
            $this->modifiedColumns[] = SpeciesPeer::DANGEROUSREF;
        }


        return $this;
    } // setDangerousref()

    /**
     * Set the value of [electrogenic] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setElectrogenic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->electrogenic !== $v) {
            $this->electrogenic = $v;
            $this->modifiedColumns[] = SpeciesPeer::ELECTROGENIC;
        }


        return $this;
    } // setElectrogenic()

    /**
     * Set the value of [electroref] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setElectroref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->electroref !== $v) {
            $this->electroref = $v;
            $this->modifiedColumns[] = SpeciesPeer::ELECTROREF;
        }


        return $this;
    } // setElectroref()

    /**
     * Set the value of [complete] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setComplete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->complete !== $v) {
            $this->complete = $v;
            $this->modifiedColumns[] = SpeciesPeer::COMPLETE;
        }


        return $this;
    } // setComplete()

    /**
     * Set the value of [googleimage] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setGoogleimage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->googleimage !== $v) {
            $this->googleimage = $v;
            $this->modifiedColumns[] = SpeciesPeer::GOOGLEIMAGE;
        }


        return $this;
    } // setGoogleimage()

    /**
     * Set the value of [comments] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setComments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comments !== $v) {
            $this->comments = $v;
            $this->modifiedColumns[] = SpeciesPeer::COMMENTS;
        }


        return $this;
    } // setComments()

    /**
     * Set the value of [profile] column.
     *
     * @param  string $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setProfile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->profile !== $v) {
            $this->profile = $v;
            $this->modifiedColumns[] = SpeciesPeer::PROFILE;
        }


        return $this;
    } // setProfile()

    /**
     * Set the value of [pd50] column.
     *
     * @param  double $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setPd50($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pd50 !== $v) {
            $this->pd50 = $v;
            $this->modifiedColumns[] = SpeciesPeer::PD50;
        }


        return $this;
    } // setPd50()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = SpeciesPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Species The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = SpeciesPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = SpeciesPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Species The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = SpeciesPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Species The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = SpeciesPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Species The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = SpeciesPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Species The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = SpeciesPeer::TS;
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

            $this->speccode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->genus = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->species = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->speciesrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->author = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fbname = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->picpreferredname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->picpreferrednamem = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->picpreferrednamef = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->picpreferrednamej = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->famcode = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->subfamily = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->gencode = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->subgencode = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->bodyshapei = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->source = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->remark = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->taxissue = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->fresh = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->brack = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->saltwater = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->demerspelag = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->anacat = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->migratref = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->depthrangeshallow = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->depthrangedeep = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->depthrangeref = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->depthrangecomshallow = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->depthrangecomdeep = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->depthcomref = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->longevitywild = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->longevitywildref = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->longevitycaptive = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->longevitycapref = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->vulnerability = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->length = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->ltypemaxm = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->lengthfemale = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->ltypemaxf = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->maxlengthref = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->commonlength = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->ltypecomm = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->commonlengthf = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->ltypecomf = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->commonlengthref = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->weight = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->weightfemale = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->maxweightref = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->pic = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->picturefemale = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->larvapic = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->eggpic = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->importanceref = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->importance = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->pricecateg = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->pricereliability = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->remarks7 = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->landingstatistics = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->landings = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->maincatchingmethod = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->ii = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->mseines = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->mgillnets = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->mcastnets = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->mtraps = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->mspears = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->mtrawls = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->mdredges = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->mliftnets = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->mhookslines = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->mother = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->usedforaquaculture = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->lifecycle = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->aquacultureref = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->usedasbait = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->baitref = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->aquarium = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->aquariumfishii = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->aquariumref = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->gamefish = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->gameref = ($row[$startcol + 80] !== null) ? (int) $row[$startcol + 80] : null;
            $this->dangerous = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->dangerousref = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->electrogenic = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->electroref = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->complete = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->googleimage = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->comments = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->profile = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->pd50 = ($row[$startcol + 89] !== null) ? (double) $row[$startcol + 89] : null;
            $this->entered = ($row[$startcol + 90] !== null) ? (int) $row[$startcol + 90] : null;
            $this->dateentered = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->modified = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->datemodified = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->expert = ($row[$startcol + 94] !== null) ? (int) $row[$startcol + 94] : null;
            $this->datechecked = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->ts = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 97; // 97 = SpeciesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Species object", $e);
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
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SpeciesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SpeciesQuery::create()
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
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SpeciesPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(SpeciesPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(SpeciesPeer::GENUS)) {
            $modifiedColumns[':p' . $index++]  = '`Genus`';
        }
        if ($this->isColumnModified(SpeciesPeer::SPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`Species`';
        }
        if ($this->isColumnModified(SpeciesPeer::SPECIESREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`SpeciesRefNo`';
        }
        if ($this->isColumnModified(SpeciesPeer::AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`Author`';
        }
        if ($this->isColumnModified(SpeciesPeer::FBNAME)) {
            $modifiedColumns[':p' . $index++]  = '`FBname`';
        }
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAME)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredName`';
        }
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAMEM)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredNameM`';
        }
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAMEF)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredNameF`';
        }
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAMEJ)) {
            $modifiedColumns[':p' . $index++]  = '`PicPreferredNameJ`';
        }
        if ($this->isColumnModified(SpeciesPeer::FAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`FamCode`';
        }
        if ($this->isColumnModified(SpeciesPeer::SUBFAMILY)) {
            $modifiedColumns[':p' . $index++]  = '`Subfamily`';
        }
        if ($this->isColumnModified(SpeciesPeer::GENCODE)) {
            $modifiedColumns[':p' . $index++]  = '`GenCode`';
        }
        if ($this->isColumnModified(SpeciesPeer::SUBGENCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SubGenCode`';
        }
        if ($this->isColumnModified(SpeciesPeer::BODYSHAPEI)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeI`';
        }
        if ($this->isColumnModified(SpeciesPeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`Source`';
        }
        if ($this->isColumnModified(SpeciesPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(SpeciesPeer::TAXISSUE)) {
            $modifiedColumns[':p' . $index++]  = '`TaxIssue`';
        }
        if ($this->isColumnModified(SpeciesPeer::FRESH)) {
            $modifiedColumns[':p' . $index++]  = '`Fresh`';
        }
        if ($this->isColumnModified(SpeciesPeer::BRACK)) {
            $modifiedColumns[':p' . $index++]  = '`Brack`';
        }
        if ($this->isColumnModified(SpeciesPeer::SALTWATER)) {
            $modifiedColumns[':p' . $index++]  = '`Saltwater`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEMERSPELAG)) {
            $modifiedColumns[':p' . $index++]  = '`DemersPelag`';
        }
        if ($this->isColumnModified(SpeciesPeer::ANACAT)) {
            $modifiedColumns[':p' . $index++]  = '`AnaCat`';
        }
        if ($this->isColumnModified(SpeciesPeer::MIGRATREF)) {
            $modifiedColumns[':p' . $index++]  = '`MigratRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGESHALLOW)) {
            $modifiedColumns[':p' . $index++]  = '`DepthRangeShallow`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGEDEEP)) {
            $modifiedColumns[':p' . $index++]  = '`DepthRangeDeep`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGEREF)) {
            $modifiedColumns[':p' . $index++]  = '`DepthRangeRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGECOMSHALLOW)) {
            $modifiedColumns[':p' . $index++]  = '`DepthRangeComShallow`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGECOMDEEP)) {
            $modifiedColumns[':p' . $index++]  = '`DepthRangeComDeep`';
        }
        if ($this->isColumnModified(SpeciesPeer::DEPTHCOMREF)) {
            $modifiedColumns[':p' . $index++]  = '`DepthComRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYWILD)) {
            $modifiedColumns[':p' . $index++]  = '`LongevityWild`';
        }
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYWILDREF)) {
            $modifiedColumns[':p' . $index++]  = '`LongevityWildRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYCAPTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`LongevityCaptive`';
        }
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYCAPREF)) {
            $modifiedColumns[':p' . $index++]  = '`LongevityCapRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::VULNERABILITY)) {
            $modifiedColumns[':p' . $index++]  = '`Vulnerability`';
        }
        if ($this->isColumnModified(SpeciesPeer::LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Length`';
        }
        if ($this->isColumnModified(SpeciesPeer::LTYPEMAXM)) {
            $modifiedColumns[':p' . $index++]  = '`LTypeMaxM`';
        }
        if ($this->isColumnModified(SpeciesPeer::LENGTHFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthFemale`';
        }
        if ($this->isColumnModified(SpeciesPeer::LTYPEMAXF)) {
            $modifiedColumns[':p' . $index++]  = '`LTypeMaxF`';
        }
        if ($this->isColumnModified(SpeciesPeer::MAXLENGTHREF)) {
            $modifiedColumns[':p' . $index++]  = '`MaxLengthRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::COMMONLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`CommonLength`';
        }
        if ($this->isColumnModified(SpeciesPeer::LTYPECOMM)) {
            $modifiedColumns[':p' . $index++]  = '`LTypeComM`';
        }
        if ($this->isColumnModified(SpeciesPeer::COMMONLENGTHF)) {
            $modifiedColumns[':p' . $index++]  = '`CommonLengthF`';
        }
        if ($this->isColumnModified(SpeciesPeer::LTYPECOMF)) {
            $modifiedColumns[':p' . $index++]  = '`LTypeComF`';
        }
        if ($this->isColumnModified(SpeciesPeer::COMMONLENGTHREF)) {
            $modifiedColumns[':p' . $index++]  = '`CommonLengthRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`Weight`';
        }
        if ($this->isColumnModified(SpeciesPeer::WEIGHTFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`WeightFemale`';
        }
        if ($this->isColumnModified(SpeciesPeer::MAXWEIGHTREF)) {
            $modifiedColumns[':p' . $index++]  = '`MaxWeightRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::PIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pic`';
        }
        if ($this->isColumnModified(SpeciesPeer::PICTUREFEMALE)) {
            $modifiedColumns[':p' . $index++]  = '`PictureFemale`';
        }
        if ($this->isColumnModified(SpeciesPeer::LARVAPIC)) {
            $modifiedColumns[':p' . $index++]  = '`LarvaPic`';
        }
        if ($this->isColumnModified(SpeciesPeer::EGGPIC)) {
            $modifiedColumns[':p' . $index++]  = '`EggPic`';
        }
        if ($this->isColumnModified(SpeciesPeer::IMPORTANCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`ImportanceRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::IMPORTANCE)) {
            $modifiedColumns[':p' . $index++]  = '`Importance`';
        }
        if ($this->isColumnModified(SpeciesPeer::PRICECATEG)) {
            $modifiedColumns[':p' . $index++]  = '`PriceCateg`';
        }
        if ($this->isColumnModified(SpeciesPeer::PRICERELIABILITY)) {
            $modifiedColumns[':p' . $index++]  = '`PriceReliability`';
        }
        if ($this->isColumnModified(SpeciesPeer::REMARKS7)) {
            $modifiedColumns[':p' . $index++]  = '`Remarks7`';
        }
        if ($this->isColumnModified(SpeciesPeer::LANDINGSTATISTICS)) {
            $modifiedColumns[':p' . $index++]  = '`LandingStatistics`';
        }
        if ($this->isColumnModified(SpeciesPeer::LANDINGS)) {
            $modifiedColumns[':p' . $index++]  = '`Landings`';
        }
        if ($this->isColumnModified(SpeciesPeer::MAINCATCHINGMETHOD)) {
            $modifiedColumns[':p' . $index++]  = '`MainCatchingMethod`';
        }
        if ($this->isColumnModified(SpeciesPeer::II)) {
            $modifiedColumns[':p' . $index++]  = '`II`';
        }
        if ($this->isColumnModified(SpeciesPeer::MSEINES)) {
            $modifiedColumns[':p' . $index++]  = '`MSeines`';
        }
        if ($this->isColumnModified(SpeciesPeer::MGILLNETS)) {
            $modifiedColumns[':p' . $index++]  = '`MGillnets`';
        }
        if ($this->isColumnModified(SpeciesPeer::MCASTNETS)) {
            $modifiedColumns[':p' . $index++]  = '`MCastnets`';
        }
        if ($this->isColumnModified(SpeciesPeer::MTRAPS)) {
            $modifiedColumns[':p' . $index++]  = '`MTraps`';
        }
        if ($this->isColumnModified(SpeciesPeer::MSPEARS)) {
            $modifiedColumns[':p' . $index++]  = '`MSpears`';
        }
        if ($this->isColumnModified(SpeciesPeer::MTRAWLS)) {
            $modifiedColumns[':p' . $index++]  = '`MTrawls`';
        }
        if ($this->isColumnModified(SpeciesPeer::MDREDGES)) {
            $modifiedColumns[':p' . $index++]  = '`MDredges`';
        }
        if ($this->isColumnModified(SpeciesPeer::MLIFTNETS)) {
            $modifiedColumns[':p' . $index++]  = '`MLiftnets`';
        }
        if ($this->isColumnModified(SpeciesPeer::MHOOKSLINES)) {
            $modifiedColumns[':p' . $index++]  = '`MHooksLines`';
        }
        if ($this->isColumnModified(SpeciesPeer::MOTHER)) {
            $modifiedColumns[':p' . $index++]  = '`MOther`';
        }
        if ($this->isColumnModified(SpeciesPeer::USEDFORAQUACULTURE)) {
            $modifiedColumns[':p' . $index++]  = '`UsedforAquaculture`';
        }
        if ($this->isColumnModified(SpeciesPeer::LIFECYCLE)) {
            $modifiedColumns[':p' . $index++]  = '`LifeCycle`';
        }
        if ($this->isColumnModified(SpeciesPeer::AQUACULTUREREF)) {
            $modifiedColumns[':p' . $index++]  = '`AquacultureRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::USEDASBAIT)) {
            $modifiedColumns[':p' . $index++]  = '`UsedasBait`';
        }
        if ($this->isColumnModified(SpeciesPeer::BAITREF)) {
            $modifiedColumns[':p' . $index++]  = '`BaitRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::AQUARIUM)) {
            $modifiedColumns[':p' . $index++]  = '`Aquarium`';
        }
        if ($this->isColumnModified(SpeciesPeer::AQUARIUMFISHII)) {
            $modifiedColumns[':p' . $index++]  = '`AquariumFishII`';
        }
        if ($this->isColumnModified(SpeciesPeer::AQUARIUMREF)) {
            $modifiedColumns[':p' . $index++]  = '`AquariumRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::GAMEFISH)) {
            $modifiedColumns[':p' . $index++]  = '`GameFish`';
        }
        if ($this->isColumnModified(SpeciesPeer::GAMEREF)) {
            $modifiedColumns[':p' . $index++]  = '`GameRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::DANGEROUS)) {
            $modifiedColumns[':p' . $index++]  = '`Dangerous`';
        }
        if ($this->isColumnModified(SpeciesPeer::DANGEROUSREF)) {
            $modifiedColumns[':p' . $index++]  = '`DangerousRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::ELECTROGENIC)) {
            $modifiedColumns[':p' . $index++]  = '`Electrogenic`';
        }
        if ($this->isColumnModified(SpeciesPeer::ELECTROREF)) {
            $modifiedColumns[':p' . $index++]  = '`ElectroRef`';
        }
        if ($this->isColumnModified(SpeciesPeer::COMPLETE)) {
            $modifiedColumns[':p' . $index++]  = '`Complete`';
        }
        if ($this->isColumnModified(SpeciesPeer::GOOGLEIMAGE)) {
            $modifiedColumns[':p' . $index++]  = '`GoogleImage`';
        }
        if ($this->isColumnModified(SpeciesPeer::COMMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Comments`';
        }
        if ($this->isColumnModified(SpeciesPeer::PROFILE)) {
            $modifiedColumns[':p' . $index++]  = '`Profile`';
        }
        if ($this->isColumnModified(SpeciesPeer::PD50)) {
            $modifiedColumns[':p' . $index++]  = '`PD50`';
        }
        if ($this->isColumnModified(SpeciesPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(SpeciesPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(SpeciesPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(SpeciesPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(SpeciesPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(SpeciesPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(SpeciesPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `species` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`Genus`':
                        $stmt->bindValue($identifier, $this->genus, PDO::PARAM_STR);
                        break;
                    case '`Species`':
                        $stmt->bindValue($identifier, $this->species, PDO::PARAM_STR);
                        break;
                    case '`SpeciesRefNo`':
                        $stmt->bindValue($identifier, $this->speciesrefno, PDO::PARAM_INT);
                        break;
                    case '`Author`':
                        $stmt->bindValue($identifier, $this->author, PDO::PARAM_STR);
                        break;
                    case '`FBname`':
                        $stmt->bindValue($identifier, $this->fbname, PDO::PARAM_STR);
                        break;
                    case '`PicPreferredName`':
                        $stmt->bindValue($identifier, $this->picpreferredname, PDO::PARAM_STR);
                        break;
                    case '`PicPreferredNameM`':
                        $stmt->bindValue($identifier, $this->picpreferrednamem, PDO::PARAM_STR);
                        break;
                    case '`PicPreferredNameF`':
                        $stmt->bindValue($identifier, $this->picpreferrednamef, PDO::PARAM_STR);
                        break;
                    case '`PicPreferredNameJ`':
                        $stmt->bindValue($identifier, $this->picpreferrednamej, PDO::PARAM_STR);
                        break;
                    case '`FamCode`':
                        $stmt->bindValue($identifier, $this->famcode, PDO::PARAM_INT);
                        break;
                    case '`Subfamily`':
                        $stmt->bindValue($identifier, $this->subfamily, PDO::PARAM_STR);
                        break;
                    case '`GenCode`':
                        $stmt->bindValue($identifier, $this->gencode, PDO::PARAM_INT);
                        break;
                    case '`SubGenCode`':
                        $stmt->bindValue($identifier, $this->subgencode, PDO::PARAM_INT);
                        break;
                    case '`BodyShapeI`':
                        $stmt->bindValue($identifier, $this->bodyshapei, PDO::PARAM_STR);
                        break;
                    case '`Source`':
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_STR);
                        break;
                    case '`Remark`':
                        $stmt->bindValue($identifier, $this->remark, PDO::PARAM_STR);
                        break;
                    case '`TaxIssue`':
                        $stmt->bindValue($identifier, $this->taxissue, PDO::PARAM_INT);
                        break;
                    case '`Fresh`':
                        $stmt->bindValue($identifier, $this->fresh, PDO::PARAM_INT);
                        break;
                    case '`Brack`':
                        $stmt->bindValue($identifier, $this->brack, PDO::PARAM_INT);
                        break;
                    case '`Saltwater`':
                        $stmt->bindValue($identifier, $this->saltwater, PDO::PARAM_INT);
                        break;
                    case '`DemersPelag`':
                        $stmt->bindValue($identifier, $this->demerspelag, PDO::PARAM_STR);
                        break;
                    case '`AnaCat`':
                        $stmt->bindValue($identifier, $this->anacat, PDO::PARAM_STR);
                        break;
                    case '`MigratRef`':
                        $stmt->bindValue($identifier, $this->migratref, PDO::PARAM_INT);
                        break;
                    case '`DepthRangeShallow`':
                        $stmt->bindValue($identifier, $this->depthrangeshallow, PDO::PARAM_INT);
                        break;
                    case '`DepthRangeDeep`':
                        $stmt->bindValue($identifier, $this->depthrangedeep, PDO::PARAM_INT);
                        break;
                    case '`DepthRangeRef`':
                        $stmt->bindValue($identifier, $this->depthrangeref, PDO::PARAM_INT);
                        break;
                    case '`DepthRangeComShallow`':
                        $stmt->bindValue($identifier, $this->depthrangecomshallow, PDO::PARAM_INT);
                        break;
                    case '`DepthRangeComDeep`':
                        $stmt->bindValue($identifier, $this->depthrangecomdeep, PDO::PARAM_INT);
                        break;
                    case '`DepthComRef`':
                        $stmt->bindValue($identifier, $this->depthcomref, PDO::PARAM_INT);
                        break;
                    case '`LongevityWild`':
                        $stmt->bindValue($identifier, $this->longevitywild, PDO::PARAM_STR);
                        break;
                    case '`LongevityWildRef`':
                        $stmt->bindValue($identifier, $this->longevitywildref, PDO::PARAM_INT);
                        break;
                    case '`LongevityCaptive`':
                        $stmt->bindValue($identifier, $this->longevitycaptive, PDO::PARAM_STR);
                        break;
                    case '`LongevityCapRef`':
                        $stmt->bindValue($identifier, $this->longevitycapref, PDO::PARAM_INT);
                        break;
                    case '`Vulnerability`':
                        $stmt->bindValue($identifier, $this->vulnerability, PDO::PARAM_STR);
                        break;
                    case '`Length`':
                        $stmt->bindValue($identifier, $this->length, PDO::PARAM_STR);
                        break;
                    case '`LTypeMaxM`':
                        $stmt->bindValue($identifier, $this->ltypemaxm, PDO::PARAM_STR);
                        break;
                    case '`LengthFemale`':
                        $stmt->bindValue($identifier, $this->lengthfemale, PDO::PARAM_STR);
                        break;
                    case '`LTypeMaxF`':
                        $stmt->bindValue($identifier, $this->ltypemaxf, PDO::PARAM_STR);
                        break;
                    case '`MaxLengthRef`':
                        $stmt->bindValue($identifier, $this->maxlengthref, PDO::PARAM_INT);
                        break;
                    case '`CommonLength`':
                        $stmt->bindValue($identifier, $this->commonlength, PDO::PARAM_STR);
                        break;
                    case '`LTypeComM`':
                        $stmt->bindValue($identifier, $this->ltypecomm, PDO::PARAM_STR);
                        break;
                    case '`CommonLengthF`':
                        $stmt->bindValue($identifier, $this->commonlengthf, PDO::PARAM_STR);
                        break;
                    case '`LTypeComF`':
                        $stmt->bindValue($identifier, $this->ltypecomf, PDO::PARAM_STR);
                        break;
                    case '`CommonLengthRef`':
                        $stmt->bindValue($identifier, $this->commonlengthref, PDO::PARAM_INT);
                        break;
                    case '`Weight`':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case '`WeightFemale`':
                        $stmt->bindValue($identifier, $this->weightfemale, PDO::PARAM_STR);
                        break;
                    case '`MaxWeightRef`':
                        $stmt->bindValue($identifier, $this->maxweightref, PDO::PARAM_INT);
                        break;
                    case '`Pic`':
                        $stmt->bindValue($identifier, $this->pic, PDO::PARAM_STR);
                        break;
                    case '`PictureFemale`':
                        $stmt->bindValue($identifier, $this->picturefemale, PDO::PARAM_STR);
                        break;
                    case '`LarvaPic`':
                        $stmt->bindValue($identifier, $this->larvapic, PDO::PARAM_STR);
                        break;
                    case '`EggPic`':
                        $stmt->bindValue($identifier, $this->eggpic, PDO::PARAM_STR);
                        break;
                    case '`ImportanceRef`':
                        $stmt->bindValue($identifier, $this->importanceref, PDO::PARAM_INT);
                        break;
                    case '`Importance`':
                        $stmt->bindValue($identifier, $this->importance, PDO::PARAM_STR);
                        break;
                    case '`PriceCateg`':
                        $stmt->bindValue($identifier, $this->pricecateg, PDO::PARAM_STR);
                        break;
                    case '`PriceReliability`':
                        $stmt->bindValue($identifier, $this->pricereliability, PDO::PARAM_STR);
                        break;
                    case '`Remarks7`':
                        $stmt->bindValue($identifier, $this->remarks7, PDO::PARAM_STR);
                        break;
                    case '`LandingStatistics`':
                        $stmt->bindValue($identifier, $this->landingstatistics, PDO::PARAM_STR);
                        break;
                    case '`Landings`':
                        $stmt->bindValue($identifier, $this->landings, PDO::PARAM_STR);
                        break;
                    case '`MainCatchingMethod`':
                        $stmt->bindValue($identifier, $this->maincatchingmethod, PDO::PARAM_STR);
                        break;
                    case '`II`':
                        $stmt->bindValue($identifier, $this->ii, PDO::PARAM_STR);
                        break;
                    case '`MSeines`':
                        $stmt->bindValue($identifier, $this->mseines, PDO::PARAM_INT);
                        break;
                    case '`MGillnets`':
                        $stmt->bindValue($identifier, $this->mgillnets, PDO::PARAM_INT);
                        break;
                    case '`MCastnets`':
                        $stmt->bindValue($identifier, $this->mcastnets, PDO::PARAM_INT);
                        break;
                    case '`MTraps`':
                        $stmt->bindValue($identifier, $this->mtraps, PDO::PARAM_INT);
                        break;
                    case '`MSpears`':
                        $stmt->bindValue($identifier, $this->mspears, PDO::PARAM_INT);
                        break;
                    case '`MTrawls`':
                        $stmt->bindValue($identifier, $this->mtrawls, PDO::PARAM_INT);
                        break;
                    case '`MDredges`':
                        $stmt->bindValue($identifier, $this->mdredges, PDO::PARAM_INT);
                        break;
                    case '`MLiftnets`':
                        $stmt->bindValue($identifier, $this->mliftnets, PDO::PARAM_INT);
                        break;
                    case '`MHooksLines`':
                        $stmt->bindValue($identifier, $this->mhookslines, PDO::PARAM_INT);
                        break;
                    case '`MOther`':
                        $stmt->bindValue($identifier, $this->mother, PDO::PARAM_INT);
                        break;
                    case '`UsedforAquaculture`':
                        $stmt->bindValue($identifier, $this->usedforaquaculture, PDO::PARAM_STR);
                        break;
                    case '`LifeCycle`':
                        $stmt->bindValue($identifier, $this->lifecycle, PDO::PARAM_STR);
                        break;
                    case '`AquacultureRef`':
                        $stmt->bindValue($identifier, $this->aquacultureref, PDO::PARAM_INT);
                        break;
                    case '`UsedasBait`':
                        $stmt->bindValue($identifier, $this->usedasbait, PDO::PARAM_STR);
                        break;
                    case '`BaitRef`':
                        $stmt->bindValue($identifier, $this->baitref, PDO::PARAM_INT);
                        break;
                    case '`Aquarium`':
                        $stmt->bindValue($identifier, $this->aquarium, PDO::PARAM_STR);
                        break;
                    case '`AquariumFishII`':
                        $stmt->bindValue($identifier, $this->aquariumfishii, PDO::PARAM_STR);
                        break;
                    case '`AquariumRef`':
                        $stmt->bindValue($identifier, $this->aquariumref, PDO::PARAM_INT);
                        break;
                    case '`GameFish`':
                        $stmt->bindValue($identifier, $this->gamefish, PDO::PARAM_INT);
                        break;
                    case '`GameRef`':
                        $stmt->bindValue($identifier, $this->gameref, PDO::PARAM_INT);
                        break;
                    case '`Dangerous`':
                        $stmt->bindValue($identifier, $this->dangerous, PDO::PARAM_STR);
                        break;
                    case '`DangerousRef`':
                        $stmt->bindValue($identifier, $this->dangerousref, PDO::PARAM_INT);
                        break;
                    case '`Electrogenic`':
                        $stmt->bindValue($identifier, $this->electrogenic, PDO::PARAM_STR);
                        break;
                    case '`ElectroRef`':
                        $stmt->bindValue($identifier, $this->electroref, PDO::PARAM_INT);
                        break;
                    case '`Complete`':
                        $stmt->bindValue($identifier, $this->complete, PDO::PARAM_STR);
                        break;
                    case '`GoogleImage`':
                        $stmt->bindValue($identifier, $this->googleimage, PDO::PARAM_INT);
                        break;
                    case '`Comments`':
                        $stmt->bindValue($identifier, $this->comments, PDO::PARAM_STR);
                        break;
                    case '`Profile`':
                        $stmt->bindValue($identifier, $this->profile, PDO::PARAM_STR);
                        break;
                    case '`PD50`':
                        $stmt->bindValue($identifier, $this->pd50, PDO::PARAM_STR);
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
        $this->setGenus($pk);

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


            if (($retval = SpeciesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SpeciesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 1:
                return $this->getGenus();
                break;
            case 2:
                return $this->getSpecies();
                break;
            case 3:
                return $this->getSpeciesrefno();
                break;
            case 4:
                return $this->getAuthor();
                break;
            case 5:
                return $this->getFbname();
                break;
            case 6:
                return $this->getPicpreferredname();
                break;
            case 7:
                return $this->getPicpreferrednamem();
                break;
            case 8:
                return $this->getPicpreferrednamef();
                break;
            case 9:
                return $this->getPicpreferrednamej();
                break;
            case 10:
                return $this->getFamcode();
                break;
            case 11:
                return $this->getSubfamily();
                break;
            case 12:
                return $this->getGencode();
                break;
            case 13:
                return $this->getSubgencode();
                break;
            case 14:
                return $this->getBodyshapei();
                break;
            case 15:
                return $this->getSource();
                break;
            case 16:
                return $this->getRemark();
                break;
            case 17:
                return $this->getTaxissue();
                break;
            case 18:
                return $this->getFresh();
                break;
            case 19:
                return $this->getBrack();
                break;
            case 20:
                return $this->getSaltwater();
                break;
            case 21:
                return $this->getDemerspelag();
                break;
            case 22:
                return $this->getAnacat();
                break;
            case 23:
                return $this->getMigratref();
                break;
            case 24:
                return $this->getDepthrangeshallow();
                break;
            case 25:
                return $this->getDepthrangedeep();
                break;
            case 26:
                return $this->getDepthrangeref();
                break;
            case 27:
                return $this->getDepthrangecomshallow();
                break;
            case 28:
                return $this->getDepthrangecomdeep();
                break;
            case 29:
                return $this->getDepthcomref();
                break;
            case 30:
                return $this->getLongevitywild();
                break;
            case 31:
                return $this->getLongevitywildref();
                break;
            case 32:
                return $this->getLongevitycaptive();
                break;
            case 33:
                return $this->getLongevitycapref();
                break;
            case 34:
                return $this->getVulnerability();
                break;
            case 35:
                return $this->getLength();
                break;
            case 36:
                return $this->getLtypemaxm();
                break;
            case 37:
                return $this->getLengthfemale();
                break;
            case 38:
                return $this->getLtypemaxf();
                break;
            case 39:
                return $this->getMaxlengthref();
                break;
            case 40:
                return $this->getCommonlength();
                break;
            case 41:
                return $this->getLtypecomm();
                break;
            case 42:
                return $this->getCommonlengthf();
                break;
            case 43:
                return $this->getLtypecomf();
                break;
            case 44:
                return $this->getCommonlengthref();
                break;
            case 45:
                return $this->getWeight();
                break;
            case 46:
                return $this->getWeightfemale();
                break;
            case 47:
                return $this->getMaxweightref();
                break;
            case 48:
                return $this->getPic();
                break;
            case 49:
                return $this->getPicturefemale();
                break;
            case 50:
                return $this->getLarvapic();
                break;
            case 51:
                return $this->getEggpic();
                break;
            case 52:
                return $this->getImportanceref();
                break;
            case 53:
                return $this->getImportance();
                break;
            case 54:
                return $this->getPricecateg();
                break;
            case 55:
                return $this->getPricereliability();
                break;
            case 56:
                return $this->getRemarks7();
                break;
            case 57:
                return $this->getLandingstatistics();
                break;
            case 58:
                return $this->getLandings();
                break;
            case 59:
                return $this->getMaincatchingmethod();
                break;
            case 60:
                return $this->getIi();
                break;
            case 61:
                return $this->getMseines();
                break;
            case 62:
                return $this->getMgillnets();
                break;
            case 63:
                return $this->getMcastnets();
                break;
            case 64:
                return $this->getMtraps();
                break;
            case 65:
                return $this->getMspears();
                break;
            case 66:
                return $this->getMtrawls();
                break;
            case 67:
                return $this->getMdredges();
                break;
            case 68:
                return $this->getMliftnets();
                break;
            case 69:
                return $this->getMhookslines();
                break;
            case 70:
                return $this->getMother();
                break;
            case 71:
                return $this->getUsedforaquaculture();
                break;
            case 72:
                return $this->getLifecycle();
                break;
            case 73:
                return $this->getAquacultureref();
                break;
            case 74:
                return $this->getUsedasbait();
                break;
            case 75:
                return $this->getBaitref();
                break;
            case 76:
                return $this->getAquarium();
                break;
            case 77:
                return $this->getAquariumfishii();
                break;
            case 78:
                return $this->getAquariumref();
                break;
            case 79:
                return $this->getGamefish();
                break;
            case 80:
                return $this->getGameref();
                break;
            case 81:
                return $this->getDangerous();
                break;
            case 82:
                return $this->getDangerousref();
                break;
            case 83:
                return $this->getElectrogenic();
                break;
            case 84:
                return $this->getElectroref();
                break;
            case 85:
                return $this->getComplete();
                break;
            case 86:
                return $this->getGoogleimage();
                break;
            case 87:
                return $this->getComments();
                break;
            case 88:
                return $this->getProfile();
                break;
            case 89:
                return $this->getPd50();
                break;
            case 90:
                return $this->getEntered();
                break;
            case 91:
                return $this->getDateentered();
                break;
            case 92:
                return $this->getModified();
                break;
            case 93:
                return $this->getDatemodified();
                break;
            case 94:
                return $this->getExpert();
                break;
            case 95:
                return $this->getDatechecked();
                break;
            case 96:
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
        if (isset($alreadyDumpedObjects['Species'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Species'][serialize($this->getPrimaryKey())] = true;
        $keys = SpeciesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSpeccode(),
            $keys[1] => $this->getGenus(),
            $keys[2] => $this->getSpecies(),
            $keys[3] => $this->getSpeciesrefno(),
            $keys[4] => $this->getAuthor(),
            $keys[5] => $this->getFbname(),
            $keys[6] => $this->getPicpreferredname(),
            $keys[7] => $this->getPicpreferrednamem(),
            $keys[8] => $this->getPicpreferrednamef(),
            $keys[9] => $this->getPicpreferrednamej(),
            $keys[10] => $this->getFamcode(),
            $keys[11] => $this->getSubfamily(),
            $keys[12] => $this->getGencode(),
            $keys[13] => $this->getSubgencode(),
            $keys[14] => $this->getBodyshapei(),
            $keys[15] => $this->getSource(),
            $keys[16] => $this->getRemark(),
            $keys[17] => $this->getTaxissue(),
            $keys[18] => $this->getFresh(),
            $keys[19] => $this->getBrack(),
            $keys[20] => $this->getSaltwater(),
            $keys[21] => $this->getDemerspelag(),
            $keys[22] => $this->getAnacat(),
            $keys[23] => $this->getMigratref(),
            $keys[24] => $this->getDepthrangeshallow(),
            $keys[25] => $this->getDepthrangedeep(),
            $keys[26] => $this->getDepthrangeref(),
            $keys[27] => $this->getDepthrangecomshallow(),
            $keys[28] => $this->getDepthrangecomdeep(),
            $keys[29] => $this->getDepthcomref(),
            $keys[30] => $this->getLongevitywild(),
            $keys[31] => $this->getLongevitywildref(),
            $keys[32] => $this->getLongevitycaptive(),
            $keys[33] => $this->getLongevitycapref(),
            $keys[34] => $this->getVulnerability(),
            $keys[35] => $this->getLength(),
            $keys[36] => $this->getLtypemaxm(),
            $keys[37] => $this->getLengthfemale(),
            $keys[38] => $this->getLtypemaxf(),
            $keys[39] => $this->getMaxlengthref(),
            $keys[40] => $this->getCommonlength(),
            $keys[41] => $this->getLtypecomm(),
            $keys[42] => $this->getCommonlengthf(),
            $keys[43] => $this->getLtypecomf(),
            $keys[44] => $this->getCommonlengthref(),
            $keys[45] => $this->getWeight(),
            $keys[46] => $this->getWeightfemale(),
            $keys[47] => $this->getMaxweightref(),
            $keys[48] => $this->getPic(),
            $keys[49] => $this->getPicturefemale(),
            $keys[50] => $this->getLarvapic(),
            $keys[51] => $this->getEggpic(),
            $keys[52] => $this->getImportanceref(),
            $keys[53] => $this->getImportance(),
            $keys[54] => $this->getPricecateg(),
            $keys[55] => $this->getPricereliability(),
            $keys[56] => $this->getRemarks7(),
            $keys[57] => $this->getLandingstatistics(),
            $keys[58] => $this->getLandings(),
            $keys[59] => $this->getMaincatchingmethod(),
            $keys[60] => $this->getIi(),
            $keys[61] => $this->getMseines(),
            $keys[62] => $this->getMgillnets(),
            $keys[63] => $this->getMcastnets(),
            $keys[64] => $this->getMtraps(),
            $keys[65] => $this->getMspears(),
            $keys[66] => $this->getMtrawls(),
            $keys[67] => $this->getMdredges(),
            $keys[68] => $this->getMliftnets(),
            $keys[69] => $this->getMhookslines(),
            $keys[70] => $this->getMother(),
            $keys[71] => $this->getUsedforaquaculture(),
            $keys[72] => $this->getLifecycle(),
            $keys[73] => $this->getAquacultureref(),
            $keys[74] => $this->getUsedasbait(),
            $keys[75] => $this->getBaitref(),
            $keys[76] => $this->getAquarium(),
            $keys[77] => $this->getAquariumfishii(),
            $keys[78] => $this->getAquariumref(),
            $keys[79] => $this->getGamefish(),
            $keys[80] => $this->getGameref(),
            $keys[81] => $this->getDangerous(),
            $keys[82] => $this->getDangerousref(),
            $keys[83] => $this->getElectrogenic(),
            $keys[84] => $this->getElectroref(),
            $keys[85] => $this->getComplete(),
            $keys[86] => $this->getGoogleimage(),
            $keys[87] => $this->getComments(),
            $keys[88] => $this->getProfile(),
            $keys[89] => $this->getPd50(),
            $keys[90] => $this->getEntered(),
            $keys[91] => $this->getDateentered(),
            $keys[92] => $this->getModified(),
            $keys[93] => $this->getDatemodified(),
            $keys[94] => $this->getExpert(),
            $keys[95] => $this->getDatechecked(),
            $keys[96] => $this->getTs(),
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
        $pos = SpeciesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 1:
                $this->setGenus($value);
                break;
            case 2:
                $this->setSpecies($value);
                break;
            case 3:
                $this->setSpeciesrefno($value);
                break;
            case 4:
                $this->setAuthor($value);
                break;
            case 5:
                $this->setFbname($value);
                break;
            case 6:
                $this->setPicpreferredname($value);
                break;
            case 7:
                $this->setPicpreferrednamem($value);
                break;
            case 8:
                $this->setPicpreferrednamef($value);
                break;
            case 9:
                $this->setPicpreferrednamej($value);
                break;
            case 10:
                $this->setFamcode($value);
                break;
            case 11:
                $this->setSubfamily($value);
                break;
            case 12:
                $this->setGencode($value);
                break;
            case 13:
                $this->setSubgencode($value);
                break;
            case 14:
                $this->setBodyshapei($value);
                break;
            case 15:
                $this->setSource($value);
                break;
            case 16:
                $this->setRemark($value);
                break;
            case 17:
                $this->setTaxissue($value);
                break;
            case 18:
                $this->setFresh($value);
                break;
            case 19:
                $this->setBrack($value);
                break;
            case 20:
                $this->setSaltwater($value);
                break;
            case 21:
                $this->setDemerspelag($value);
                break;
            case 22:
                $this->setAnacat($value);
                break;
            case 23:
                $this->setMigratref($value);
                break;
            case 24:
                $this->setDepthrangeshallow($value);
                break;
            case 25:
                $this->setDepthrangedeep($value);
                break;
            case 26:
                $this->setDepthrangeref($value);
                break;
            case 27:
                $this->setDepthrangecomshallow($value);
                break;
            case 28:
                $this->setDepthrangecomdeep($value);
                break;
            case 29:
                $this->setDepthcomref($value);
                break;
            case 30:
                $this->setLongevitywild($value);
                break;
            case 31:
                $this->setLongevitywildref($value);
                break;
            case 32:
                $this->setLongevitycaptive($value);
                break;
            case 33:
                $this->setLongevitycapref($value);
                break;
            case 34:
                $this->setVulnerability($value);
                break;
            case 35:
                $this->setLength($value);
                break;
            case 36:
                $this->setLtypemaxm($value);
                break;
            case 37:
                $this->setLengthfemale($value);
                break;
            case 38:
                $this->setLtypemaxf($value);
                break;
            case 39:
                $this->setMaxlengthref($value);
                break;
            case 40:
                $this->setCommonlength($value);
                break;
            case 41:
                $this->setLtypecomm($value);
                break;
            case 42:
                $this->setCommonlengthf($value);
                break;
            case 43:
                $this->setLtypecomf($value);
                break;
            case 44:
                $this->setCommonlengthref($value);
                break;
            case 45:
                $this->setWeight($value);
                break;
            case 46:
                $this->setWeightfemale($value);
                break;
            case 47:
                $this->setMaxweightref($value);
                break;
            case 48:
                $this->setPic($value);
                break;
            case 49:
                $this->setPicturefemale($value);
                break;
            case 50:
                $this->setLarvapic($value);
                break;
            case 51:
                $this->setEggpic($value);
                break;
            case 52:
                $this->setImportanceref($value);
                break;
            case 53:
                $this->setImportance($value);
                break;
            case 54:
                $this->setPricecateg($value);
                break;
            case 55:
                $this->setPricereliability($value);
                break;
            case 56:
                $this->setRemarks7($value);
                break;
            case 57:
                $this->setLandingstatistics($value);
                break;
            case 58:
                $this->setLandings($value);
                break;
            case 59:
                $this->setMaincatchingmethod($value);
                break;
            case 60:
                $this->setIi($value);
                break;
            case 61:
                $this->setMseines($value);
                break;
            case 62:
                $this->setMgillnets($value);
                break;
            case 63:
                $this->setMcastnets($value);
                break;
            case 64:
                $this->setMtraps($value);
                break;
            case 65:
                $this->setMspears($value);
                break;
            case 66:
                $this->setMtrawls($value);
                break;
            case 67:
                $this->setMdredges($value);
                break;
            case 68:
                $this->setMliftnets($value);
                break;
            case 69:
                $this->setMhookslines($value);
                break;
            case 70:
                $this->setMother($value);
                break;
            case 71:
                $this->setUsedforaquaculture($value);
                break;
            case 72:
                $this->setLifecycle($value);
                break;
            case 73:
                $this->setAquacultureref($value);
                break;
            case 74:
                $this->setUsedasbait($value);
                break;
            case 75:
                $this->setBaitref($value);
                break;
            case 76:
                $this->setAquarium($value);
                break;
            case 77:
                $this->setAquariumfishii($value);
                break;
            case 78:
                $this->setAquariumref($value);
                break;
            case 79:
                $this->setGamefish($value);
                break;
            case 80:
                $this->setGameref($value);
                break;
            case 81:
                $this->setDangerous($value);
                break;
            case 82:
                $this->setDangerousref($value);
                break;
            case 83:
                $this->setElectrogenic($value);
                break;
            case 84:
                $this->setElectroref($value);
                break;
            case 85:
                $this->setComplete($value);
                break;
            case 86:
                $this->setGoogleimage($value);
                break;
            case 87:
                $this->setComments($value);
                break;
            case 88:
                $this->setProfile($value);
                break;
            case 89:
                $this->setPd50($value);
                break;
            case 90:
                $this->setEntered($value);
                break;
            case 91:
                $this->setDateentered($value);
                break;
            case 92:
                $this->setModified($value);
                break;
            case 93:
                $this->setDatemodified($value);
                break;
            case 94:
                $this->setExpert($value);
                break;
            case 95:
                $this->setDatechecked($value);
                break;
            case 96:
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
        $keys = SpeciesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSpeccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGenus($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpecies($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSpeciesrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAuthor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFbname($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPicpreferredname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPicpreferrednamem($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPicpreferrednamef($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPicpreferrednamej($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFamcode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSubfamily($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setGencode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSubgencode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBodyshapei($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSource($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRemark($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTaxissue($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFresh($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setBrack($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSaltwater($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDemerspelag($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAnacat($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMigratref($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDepthrangeshallow($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDepthrangedeep($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDepthrangeref($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDepthrangecomshallow($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDepthrangecomdeep($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDepthcomref($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLongevitywild($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLongevitywildref($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setLongevitycaptive($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLongevitycapref($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setVulnerability($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLength($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLtypemaxm($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLengthfemale($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setLtypemaxf($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setMaxlengthref($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setCommonlength($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setLtypecomm($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCommonlengthf($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setLtypecomf($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setCommonlengthref($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setWeight($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setWeightfemale($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setMaxweightref($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setPic($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setPicturefemale($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setLarvapic($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setEggpic($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setImportanceref($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setImportance($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setPricecateg($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setPricereliability($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setRemarks7($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setLandingstatistics($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setLandings($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setMaincatchingmethod($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setIi($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setMseines($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setMgillnets($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setMcastnets($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setMtraps($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setMspears($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setMtrawls($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setMdredges($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setMliftnets($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setMhookslines($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setMother($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setUsedforaquaculture($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setLifecycle($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setAquacultureref($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setUsedasbait($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setBaitref($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setAquarium($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setAquariumfishii($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setAquariumref($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setGamefish($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setGameref($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setDangerous($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setDangerousref($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setElectrogenic($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setElectroref($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setComplete($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setGoogleimage($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setComments($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setProfile($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setPd50($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setEntered($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setDateentered($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setModified($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setDatemodified($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setExpert($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setDatechecked($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setTs($arr[$keys[96]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SpeciesPeer::DATABASE_NAME);

        if ($this->isColumnModified(SpeciesPeer::SPECCODE)) $criteria->add(SpeciesPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(SpeciesPeer::GENUS)) $criteria->add(SpeciesPeer::GENUS, $this->genus);
        if ($this->isColumnModified(SpeciesPeer::SPECIES)) $criteria->add(SpeciesPeer::SPECIES, $this->species);
        if ($this->isColumnModified(SpeciesPeer::SPECIESREFNO)) $criteria->add(SpeciesPeer::SPECIESREFNO, $this->speciesrefno);
        if ($this->isColumnModified(SpeciesPeer::AUTHOR)) $criteria->add(SpeciesPeer::AUTHOR, $this->author);
        if ($this->isColumnModified(SpeciesPeer::FBNAME)) $criteria->add(SpeciesPeer::FBNAME, $this->fbname);
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAME)) $criteria->add(SpeciesPeer::PICPREFERREDNAME, $this->picpreferredname);
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAMEM)) $criteria->add(SpeciesPeer::PICPREFERREDNAMEM, $this->picpreferrednamem);
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAMEF)) $criteria->add(SpeciesPeer::PICPREFERREDNAMEF, $this->picpreferrednamef);
        if ($this->isColumnModified(SpeciesPeer::PICPREFERREDNAMEJ)) $criteria->add(SpeciesPeer::PICPREFERREDNAMEJ, $this->picpreferrednamej);
        if ($this->isColumnModified(SpeciesPeer::FAMCODE)) $criteria->add(SpeciesPeer::FAMCODE, $this->famcode);
        if ($this->isColumnModified(SpeciesPeer::SUBFAMILY)) $criteria->add(SpeciesPeer::SUBFAMILY, $this->subfamily);
        if ($this->isColumnModified(SpeciesPeer::GENCODE)) $criteria->add(SpeciesPeer::GENCODE, $this->gencode);
        if ($this->isColumnModified(SpeciesPeer::SUBGENCODE)) $criteria->add(SpeciesPeer::SUBGENCODE, $this->subgencode);
        if ($this->isColumnModified(SpeciesPeer::BODYSHAPEI)) $criteria->add(SpeciesPeer::BODYSHAPEI, $this->bodyshapei);
        if ($this->isColumnModified(SpeciesPeer::SOURCE)) $criteria->add(SpeciesPeer::SOURCE, $this->source);
        if ($this->isColumnModified(SpeciesPeer::REMARK)) $criteria->add(SpeciesPeer::REMARK, $this->remark);
        if ($this->isColumnModified(SpeciesPeer::TAXISSUE)) $criteria->add(SpeciesPeer::TAXISSUE, $this->taxissue);
        if ($this->isColumnModified(SpeciesPeer::FRESH)) $criteria->add(SpeciesPeer::FRESH, $this->fresh);
        if ($this->isColumnModified(SpeciesPeer::BRACK)) $criteria->add(SpeciesPeer::BRACK, $this->brack);
        if ($this->isColumnModified(SpeciesPeer::SALTWATER)) $criteria->add(SpeciesPeer::SALTWATER, $this->saltwater);
        if ($this->isColumnModified(SpeciesPeer::DEMERSPELAG)) $criteria->add(SpeciesPeer::DEMERSPELAG, $this->demerspelag);
        if ($this->isColumnModified(SpeciesPeer::ANACAT)) $criteria->add(SpeciesPeer::ANACAT, $this->anacat);
        if ($this->isColumnModified(SpeciesPeer::MIGRATREF)) $criteria->add(SpeciesPeer::MIGRATREF, $this->migratref);
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGESHALLOW)) $criteria->add(SpeciesPeer::DEPTHRANGESHALLOW, $this->depthrangeshallow);
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGEDEEP)) $criteria->add(SpeciesPeer::DEPTHRANGEDEEP, $this->depthrangedeep);
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGEREF)) $criteria->add(SpeciesPeer::DEPTHRANGEREF, $this->depthrangeref);
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGECOMSHALLOW)) $criteria->add(SpeciesPeer::DEPTHRANGECOMSHALLOW, $this->depthrangecomshallow);
        if ($this->isColumnModified(SpeciesPeer::DEPTHRANGECOMDEEP)) $criteria->add(SpeciesPeer::DEPTHRANGECOMDEEP, $this->depthrangecomdeep);
        if ($this->isColumnModified(SpeciesPeer::DEPTHCOMREF)) $criteria->add(SpeciesPeer::DEPTHCOMREF, $this->depthcomref);
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYWILD)) $criteria->add(SpeciesPeer::LONGEVITYWILD, $this->longevitywild);
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYWILDREF)) $criteria->add(SpeciesPeer::LONGEVITYWILDREF, $this->longevitywildref);
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYCAPTIVE)) $criteria->add(SpeciesPeer::LONGEVITYCAPTIVE, $this->longevitycaptive);
        if ($this->isColumnModified(SpeciesPeer::LONGEVITYCAPREF)) $criteria->add(SpeciesPeer::LONGEVITYCAPREF, $this->longevitycapref);
        if ($this->isColumnModified(SpeciesPeer::VULNERABILITY)) $criteria->add(SpeciesPeer::VULNERABILITY, $this->vulnerability);
        if ($this->isColumnModified(SpeciesPeer::LENGTH)) $criteria->add(SpeciesPeer::LENGTH, $this->length);
        if ($this->isColumnModified(SpeciesPeer::LTYPEMAXM)) $criteria->add(SpeciesPeer::LTYPEMAXM, $this->ltypemaxm);
        if ($this->isColumnModified(SpeciesPeer::LENGTHFEMALE)) $criteria->add(SpeciesPeer::LENGTHFEMALE, $this->lengthfemale);
        if ($this->isColumnModified(SpeciesPeer::LTYPEMAXF)) $criteria->add(SpeciesPeer::LTYPEMAXF, $this->ltypemaxf);
        if ($this->isColumnModified(SpeciesPeer::MAXLENGTHREF)) $criteria->add(SpeciesPeer::MAXLENGTHREF, $this->maxlengthref);
        if ($this->isColumnModified(SpeciesPeer::COMMONLENGTH)) $criteria->add(SpeciesPeer::COMMONLENGTH, $this->commonlength);
        if ($this->isColumnModified(SpeciesPeer::LTYPECOMM)) $criteria->add(SpeciesPeer::LTYPECOMM, $this->ltypecomm);
        if ($this->isColumnModified(SpeciesPeer::COMMONLENGTHF)) $criteria->add(SpeciesPeer::COMMONLENGTHF, $this->commonlengthf);
        if ($this->isColumnModified(SpeciesPeer::LTYPECOMF)) $criteria->add(SpeciesPeer::LTYPECOMF, $this->ltypecomf);
        if ($this->isColumnModified(SpeciesPeer::COMMONLENGTHREF)) $criteria->add(SpeciesPeer::COMMONLENGTHREF, $this->commonlengthref);
        if ($this->isColumnModified(SpeciesPeer::WEIGHT)) $criteria->add(SpeciesPeer::WEIGHT, $this->weight);
        if ($this->isColumnModified(SpeciesPeer::WEIGHTFEMALE)) $criteria->add(SpeciesPeer::WEIGHTFEMALE, $this->weightfemale);
        if ($this->isColumnModified(SpeciesPeer::MAXWEIGHTREF)) $criteria->add(SpeciesPeer::MAXWEIGHTREF, $this->maxweightref);
        if ($this->isColumnModified(SpeciesPeer::PIC)) $criteria->add(SpeciesPeer::PIC, $this->pic);
        if ($this->isColumnModified(SpeciesPeer::PICTUREFEMALE)) $criteria->add(SpeciesPeer::PICTUREFEMALE, $this->picturefemale);
        if ($this->isColumnModified(SpeciesPeer::LARVAPIC)) $criteria->add(SpeciesPeer::LARVAPIC, $this->larvapic);
        if ($this->isColumnModified(SpeciesPeer::EGGPIC)) $criteria->add(SpeciesPeer::EGGPIC, $this->eggpic);
        if ($this->isColumnModified(SpeciesPeer::IMPORTANCEREF)) $criteria->add(SpeciesPeer::IMPORTANCEREF, $this->importanceref);
        if ($this->isColumnModified(SpeciesPeer::IMPORTANCE)) $criteria->add(SpeciesPeer::IMPORTANCE, $this->importance);
        if ($this->isColumnModified(SpeciesPeer::PRICECATEG)) $criteria->add(SpeciesPeer::PRICECATEG, $this->pricecateg);
        if ($this->isColumnModified(SpeciesPeer::PRICERELIABILITY)) $criteria->add(SpeciesPeer::PRICERELIABILITY, $this->pricereliability);
        if ($this->isColumnModified(SpeciesPeer::REMARKS7)) $criteria->add(SpeciesPeer::REMARKS7, $this->remarks7);
        if ($this->isColumnModified(SpeciesPeer::LANDINGSTATISTICS)) $criteria->add(SpeciesPeer::LANDINGSTATISTICS, $this->landingstatistics);
        if ($this->isColumnModified(SpeciesPeer::LANDINGS)) $criteria->add(SpeciesPeer::LANDINGS, $this->landings);
        if ($this->isColumnModified(SpeciesPeer::MAINCATCHINGMETHOD)) $criteria->add(SpeciesPeer::MAINCATCHINGMETHOD, $this->maincatchingmethod);
        if ($this->isColumnModified(SpeciesPeer::II)) $criteria->add(SpeciesPeer::II, $this->ii);
        if ($this->isColumnModified(SpeciesPeer::MSEINES)) $criteria->add(SpeciesPeer::MSEINES, $this->mseines);
        if ($this->isColumnModified(SpeciesPeer::MGILLNETS)) $criteria->add(SpeciesPeer::MGILLNETS, $this->mgillnets);
        if ($this->isColumnModified(SpeciesPeer::MCASTNETS)) $criteria->add(SpeciesPeer::MCASTNETS, $this->mcastnets);
        if ($this->isColumnModified(SpeciesPeer::MTRAPS)) $criteria->add(SpeciesPeer::MTRAPS, $this->mtraps);
        if ($this->isColumnModified(SpeciesPeer::MSPEARS)) $criteria->add(SpeciesPeer::MSPEARS, $this->mspears);
        if ($this->isColumnModified(SpeciesPeer::MTRAWLS)) $criteria->add(SpeciesPeer::MTRAWLS, $this->mtrawls);
        if ($this->isColumnModified(SpeciesPeer::MDREDGES)) $criteria->add(SpeciesPeer::MDREDGES, $this->mdredges);
        if ($this->isColumnModified(SpeciesPeer::MLIFTNETS)) $criteria->add(SpeciesPeer::MLIFTNETS, $this->mliftnets);
        if ($this->isColumnModified(SpeciesPeer::MHOOKSLINES)) $criteria->add(SpeciesPeer::MHOOKSLINES, $this->mhookslines);
        if ($this->isColumnModified(SpeciesPeer::MOTHER)) $criteria->add(SpeciesPeer::MOTHER, $this->mother);
        if ($this->isColumnModified(SpeciesPeer::USEDFORAQUACULTURE)) $criteria->add(SpeciesPeer::USEDFORAQUACULTURE, $this->usedforaquaculture);
        if ($this->isColumnModified(SpeciesPeer::LIFECYCLE)) $criteria->add(SpeciesPeer::LIFECYCLE, $this->lifecycle);
        if ($this->isColumnModified(SpeciesPeer::AQUACULTUREREF)) $criteria->add(SpeciesPeer::AQUACULTUREREF, $this->aquacultureref);
        if ($this->isColumnModified(SpeciesPeer::USEDASBAIT)) $criteria->add(SpeciesPeer::USEDASBAIT, $this->usedasbait);
        if ($this->isColumnModified(SpeciesPeer::BAITREF)) $criteria->add(SpeciesPeer::BAITREF, $this->baitref);
        if ($this->isColumnModified(SpeciesPeer::AQUARIUM)) $criteria->add(SpeciesPeer::AQUARIUM, $this->aquarium);
        if ($this->isColumnModified(SpeciesPeer::AQUARIUMFISHII)) $criteria->add(SpeciesPeer::AQUARIUMFISHII, $this->aquariumfishii);
        if ($this->isColumnModified(SpeciesPeer::AQUARIUMREF)) $criteria->add(SpeciesPeer::AQUARIUMREF, $this->aquariumref);
        if ($this->isColumnModified(SpeciesPeer::GAMEFISH)) $criteria->add(SpeciesPeer::GAMEFISH, $this->gamefish);
        if ($this->isColumnModified(SpeciesPeer::GAMEREF)) $criteria->add(SpeciesPeer::GAMEREF, $this->gameref);
        if ($this->isColumnModified(SpeciesPeer::DANGEROUS)) $criteria->add(SpeciesPeer::DANGEROUS, $this->dangerous);
        if ($this->isColumnModified(SpeciesPeer::DANGEROUSREF)) $criteria->add(SpeciesPeer::DANGEROUSREF, $this->dangerousref);
        if ($this->isColumnModified(SpeciesPeer::ELECTROGENIC)) $criteria->add(SpeciesPeer::ELECTROGENIC, $this->electrogenic);
        if ($this->isColumnModified(SpeciesPeer::ELECTROREF)) $criteria->add(SpeciesPeer::ELECTROREF, $this->electroref);
        if ($this->isColumnModified(SpeciesPeer::COMPLETE)) $criteria->add(SpeciesPeer::COMPLETE, $this->complete);
        if ($this->isColumnModified(SpeciesPeer::GOOGLEIMAGE)) $criteria->add(SpeciesPeer::GOOGLEIMAGE, $this->googleimage);
        if ($this->isColumnModified(SpeciesPeer::COMMENTS)) $criteria->add(SpeciesPeer::COMMENTS, $this->comments);
        if ($this->isColumnModified(SpeciesPeer::PROFILE)) $criteria->add(SpeciesPeer::PROFILE, $this->profile);
        if ($this->isColumnModified(SpeciesPeer::PD50)) $criteria->add(SpeciesPeer::PD50, $this->pd50);
        if ($this->isColumnModified(SpeciesPeer::ENTERED)) $criteria->add(SpeciesPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(SpeciesPeer::DATEENTERED)) $criteria->add(SpeciesPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(SpeciesPeer::MODIFIED)) $criteria->add(SpeciesPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(SpeciesPeer::DATEMODIFIED)) $criteria->add(SpeciesPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(SpeciesPeer::EXPERT)) $criteria->add(SpeciesPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(SpeciesPeer::DATECHECKED)) $criteria->add(SpeciesPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(SpeciesPeer::TS)) $criteria->add(SpeciesPeer::TS, $this->ts);

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
        $criteria = new Criteria(SpeciesPeer::DATABASE_NAME);
        $criteria->add(SpeciesPeer::GENUS, $this->genus);
        $criteria->add(SpeciesPeer::SPECIES, $this->species);

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
        $pks[0] = $this->getGenus();
        $pks[1] = $this->getSpecies();

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
        $this->setGenus($keys[0]);
        $this->setSpecies($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getGenus()) && (null === $this->getSpecies());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Species (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGenus($this->getGenus());
        $copyObj->setSpecies($this->getSpecies());
        $copyObj->setSpeciesrefno($this->getSpeciesrefno());
        $copyObj->setAuthor($this->getAuthor());
        $copyObj->setFbname($this->getFbname());
        $copyObj->setPicpreferredname($this->getPicpreferredname());
        $copyObj->setPicpreferrednamem($this->getPicpreferrednamem());
        $copyObj->setPicpreferrednamef($this->getPicpreferrednamef());
        $copyObj->setPicpreferrednamej($this->getPicpreferrednamej());
        $copyObj->setFamcode($this->getFamcode());
        $copyObj->setSubfamily($this->getSubfamily());
        $copyObj->setGencode($this->getGencode());
        $copyObj->setSubgencode($this->getSubgencode());
        $copyObj->setBodyshapei($this->getBodyshapei());
        $copyObj->setSource($this->getSource());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setTaxissue($this->getTaxissue());
        $copyObj->setFresh($this->getFresh());
        $copyObj->setBrack($this->getBrack());
        $copyObj->setSaltwater($this->getSaltwater());
        $copyObj->setDemerspelag($this->getDemerspelag());
        $copyObj->setAnacat($this->getAnacat());
        $copyObj->setMigratref($this->getMigratref());
        $copyObj->setDepthrangeshallow($this->getDepthrangeshallow());
        $copyObj->setDepthrangedeep($this->getDepthrangedeep());
        $copyObj->setDepthrangeref($this->getDepthrangeref());
        $copyObj->setDepthrangecomshallow($this->getDepthrangecomshallow());
        $copyObj->setDepthrangecomdeep($this->getDepthrangecomdeep());
        $copyObj->setDepthcomref($this->getDepthcomref());
        $copyObj->setLongevitywild($this->getLongevitywild());
        $copyObj->setLongevitywildref($this->getLongevitywildref());
        $copyObj->setLongevitycaptive($this->getLongevitycaptive());
        $copyObj->setLongevitycapref($this->getLongevitycapref());
        $copyObj->setVulnerability($this->getVulnerability());
        $copyObj->setLength($this->getLength());
        $copyObj->setLtypemaxm($this->getLtypemaxm());
        $copyObj->setLengthfemale($this->getLengthfemale());
        $copyObj->setLtypemaxf($this->getLtypemaxf());
        $copyObj->setMaxlengthref($this->getMaxlengthref());
        $copyObj->setCommonlength($this->getCommonlength());
        $copyObj->setLtypecomm($this->getLtypecomm());
        $copyObj->setCommonlengthf($this->getCommonlengthf());
        $copyObj->setLtypecomf($this->getLtypecomf());
        $copyObj->setCommonlengthref($this->getCommonlengthref());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setWeightfemale($this->getWeightfemale());
        $copyObj->setMaxweightref($this->getMaxweightref());
        $copyObj->setPic($this->getPic());
        $copyObj->setPicturefemale($this->getPicturefemale());
        $copyObj->setLarvapic($this->getLarvapic());
        $copyObj->setEggpic($this->getEggpic());
        $copyObj->setImportanceref($this->getImportanceref());
        $copyObj->setImportance($this->getImportance());
        $copyObj->setPricecateg($this->getPricecateg());
        $copyObj->setPricereliability($this->getPricereliability());
        $copyObj->setRemarks7($this->getRemarks7());
        $copyObj->setLandingstatistics($this->getLandingstatistics());
        $copyObj->setLandings($this->getLandings());
        $copyObj->setMaincatchingmethod($this->getMaincatchingmethod());
        $copyObj->setIi($this->getIi());
        $copyObj->setMseines($this->getMseines());
        $copyObj->setMgillnets($this->getMgillnets());
        $copyObj->setMcastnets($this->getMcastnets());
        $copyObj->setMtraps($this->getMtraps());
        $copyObj->setMspears($this->getMspears());
        $copyObj->setMtrawls($this->getMtrawls());
        $copyObj->setMdredges($this->getMdredges());
        $copyObj->setMliftnets($this->getMliftnets());
        $copyObj->setMhookslines($this->getMhookslines());
        $copyObj->setMother($this->getMother());
        $copyObj->setUsedforaquaculture($this->getUsedforaquaculture());
        $copyObj->setLifecycle($this->getLifecycle());
        $copyObj->setAquacultureref($this->getAquacultureref());
        $copyObj->setUsedasbait($this->getUsedasbait());
        $copyObj->setBaitref($this->getBaitref());
        $copyObj->setAquarium($this->getAquarium());
        $copyObj->setAquariumfishii($this->getAquariumfishii());
        $copyObj->setAquariumref($this->getAquariumref());
        $copyObj->setGamefish($this->getGamefish());
        $copyObj->setGameref($this->getGameref());
        $copyObj->setDangerous($this->getDangerous());
        $copyObj->setDangerousref($this->getDangerousref());
        $copyObj->setElectrogenic($this->getElectrogenic());
        $copyObj->setElectroref($this->getElectroref());
        $copyObj->setComplete($this->getComplete());
        $copyObj->setGoogleimage($this->getGoogleimage());
        $copyObj->setComments($this->getComments());
        $copyObj->setProfile($this->getProfile());
        $copyObj->setPd50($this->getPd50());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSpeccode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Species Clone of current object.
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
     * @return SpeciesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SpeciesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->speccode = null;
        $this->genus = null;
        $this->species = null;
        $this->speciesrefno = null;
        $this->author = null;
        $this->fbname = null;
        $this->picpreferredname = null;
        $this->picpreferrednamem = null;
        $this->picpreferrednamef = null;
        $this->picpreferrednamej = null;
        $this->famcode = null;
        $this->subfamily = null;
        $this->gencode = null;
        $this->subgencode = null;
        $this->bodyshapei = null;
        $this->source = null;
        $this->remark = null;
        $this->taxissue = null;
        $this->fresh = null;
        $this->brack = null;
        $this->saltwater = null;
        $this->demerspelag = null;
        $this->anacat = null;
        $this->migratref = null;
        $this->depthrangeshallow = null;
        $this->depthrangedeep = null;
        $this->depthrangeref = null;
        $this->depthrangecomshallow = null;
        $this->depthrangecomdeep = null;
        $this->depthcomref = null;
        $this->longevitywild = null;
        $this->longevitywildref = null;
        $this->longevitycaptive = null;
        $this->longevitycapref = null;
        $this->vulnerability = null;
        $this->length = null;
        $this->ltypemaxm = null;
        $this->lengthfemale = null;
        $this->ltypemaxf = null;
        $this->maxlengthref = null;
        $this->commonlength = null;
        $this->ltypecomm = null;
        $this->commonlengthf = null;
        $this->ltypecomf = null;
        $this->commonlengthref = null;
        $this->weight = null;
        $this->weightfemale = null;
        $this->maxweightref = null;
        $this->pic = null;
        $this->picturefemale = null;
        $this->larvapic = null;
        $this->eggpic = null;
        $this->importanceref = null;
        $this->importance = null;
        $this->pricecateg = null;
        $this->pricereliability = null;
        $this->remarks7 = null;
        $this->landingstatistics = null;
        $this->landings = null;
        $this->maincatchingmethod = null;
        $this->ii = null;
        $this->mseines = null;
        $this->mgillnets = null;
        $this->mcastnets = null;
        $this->mtraps = null;
        $this->mspears = null;
        $this->mtrawls = null;
        $this->mdredges = null;
        $this->mliftnets = null;
        $this->mhookslines = null;
        $this->mother = null;
        $this->usedforaquaculture = null;
        $this->lifecycle = null;
        $this->aquacultureref = null;
        $this->usedasbait = null;
        $this->baitref = null;
        $this->aquarium = null;
        $this->aquariumfishii = null;
        $this->aquariumref = null;
        $this->gamefish = null;
        $this->gameref = null;
        $this->dangerous = null;
        $this->dangerousref = null;
        $this->electrogenic = null;
        $this->electroref = null;
        $this->complete = null;
        $this->googleimage = null;
        $this->comments = null;
        $this->profile = null;
        $this->pd50 = null;
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
        return (string) $this->exportTo(SpeciesPeer::DEFAULT_STRING_FORMAT);
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
