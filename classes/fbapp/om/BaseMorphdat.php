<?php


/**
 * Base class that represents a row from the 'morphdat' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphdat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MorphdatPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MorphdatPeer
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
     * The value for the morphdatrefno field.
     * @var        int
     */
    protected $morphdatrefno;

    /**
     * The value for the females field.
     * @var        int
     */
    protected $females;

    /**
     * The value for the males field.
     * @var        int
     */
    protected $males;

    /**
     * The value for the appearancepic field.
     * @var        string
     */
    protected $appearancepic;

    /**
     * The value for the sexualattributes field.
     * @var        string
     */
    protected $sexualattributes;

    /**
     * The value for the sexmorphology field.
     * @var        string
     */
    protected $sexmorphology;

    /**
     * The value for the sexcolors field.
     * @var        string
     */
    protected $sexcolors;

    /**
     * The value for the strikingfeatures field.
     * @var        string
     */
    protected $strikingfeatures;

    /**
     * The value for the bodyshapei field.
     * @var        string
     */
    protected $bodyshapei;

    /**
     * The value for the bodyshapeii field.
     * @var        string
     */
    protected $bodyshapeii;

    /**
     * The value for the forehead field.
     * @var        string
     */
    protected $forehead;

    /**
     * The value for the operculumpresent field.
     * @var        int
     */
    protected $operculumpresent;

    /**
     * The value for the typeofeyes field.
     * @var        string
     */
    protected $typeofeyes;

    /**
     * The value for the typeofmouth field.
     * @var        string
     */
    protected $typeofmouth;

    /**
     * The value for the posofmouth field.
     * @var        string
     */
    protected $posofmouth;

    /**
     * The value for the mandibleteeth field.
     * @var        string
     */
    protected $mandibleteeth;

    /**
     * The value for the mandibleteetht1 field.
     * @var        string
     */
    protected $mandibleteetht1;

    /**
     * The value for the mandibleteetht2 field.
     * @var        string
     */
    protected $mandibleteetht2;

    /**
     * The value for the mandiblerowsmin field.
     * @var        int
     */
    protected $mandiblerowsmin;

    /**
     * The value for the mandiblerowsmax field.
     * @var        int
     */
    protected $mandiblerowsmax;

    /**
     * The value for the maxillateeth field.
     * @var        string
     */
    protected $maxillateeth;

    /**
     * The value for the maxillateetht1 field.
     * @var        string
     */
    protected $maxillateetht1;

    /**
     * The value for the maxillateetht2 field.
     * @var        string
     */
    protected $maxillateetht2;

    /**
     * The value for the maxillarowsmin field.
     * @var        int
     */
    protected $maxillarowsmin;

    /**
     * The value for the maxillarowsmax field.
     * @var        int
     */
    protected $maxillarowsmax;

    /**
     * The value for the vomerineteeth field.
     * @var        string
     */
    protected $vomerineteeth;

    /**
     * The value for the vomerineteetht1 field.
     * @var        string
     */
    protected $vomerineteetht1;

    /**
     * The value for the vomerineteetht2 field.
     * @var        string
     */
    protected $vomerineteetht2;

    /**
     * The value for the vomerinerowsmin field.
     * @var        int
     */
    protected $vomerinerowsmin;

    /**
     * The value for the vomerinerowsmax field.
     * @var        int
     */
    protected $vomerinerowsmax;

    /**
     * The value for the palatine field.
     * @var        string
     */
    protected $palatine;

    /**
     * The value for the palatineteetht1 field.
     * @var        string
     */
    protected $palatineteetht1;

    /**
     * The value for the palatineteetht2 field.
     * @var        string
     */
    protected $palatineteetht2;

    /**
     * The value for the palatinerowsmin field.
     * @var        int
     */
    protected $palatinerowsmin;

    /**
     * The value for the palatinerowsmax field.
     * @var        int
     */
    protected $palatinerowsmax;

    /**
     * The value for the pharyngealteeth field.
     * @var        string
     */
    protected $pharyngealteeth;

    /**
     * The value for the pharyngealteetht1 field.
     * @var        string
     */
    protected $pharyngealteetht1;

    /**
     * The value for the pharyngealteetht2 field.
     * @var        string
     */
    protected $pharyngealteetht2;

    /**
     * The value for the pharyngealrowsmin field.
     * @var        int
     */
    protected $pharyngealrowsmin;

    /**
     * The value for the pharyngealrowsmax field.
     * @var        int
     */
    protected $pharyngealrowsmax;

    /**
     * The value for the teethontongue field.
     * @var        string
     */
    protected $teethontongue;

    /**
     * The value for the lipsteeth field.
     * @var        string
     */
    protected $lipsteeth;

    /**
     * The value for the dermalteeth field.
     * @var        string
     */
    protected $dermalteeth;

    /**
     * The value for the commentonteeth field.
     * @var        string
     */
    protected $commentonteeth;

    /**
     * The value for the typeofscales field.
     * @var        string
     */
    protected $typeofscales;

    /**
     * The value for the scutes field.
     * @var        string
     */
    protected $scutes;

    /**
     * The value for the keels field.
     * @var        int
     */
    protected $keels;

    /**
     * The value for the horstripestti field.
     * @var        string
     */
    protected $horstripestti;

    /**
     * The value for the horstripesttii field.
     * @var        string
     */
    protected $horstripesttii;

    /**
     * The value for the verstripestti field.
     * @var        string
     */
    protected $verstripestti;

    /**
     * The value for the verstripesttii field.
     * @var        string
     */
    protected $verstripesttii;

    /**
     * The value for the verstripesttiii field.
     * @var        string
     */
    protected $verstripesttiii;

    /**
     * The value for the diastripestti field.
     * @var        string
     */
    protected $diastripestti;

    /**
     * The value for the diastripesttii field.
     * @var        string
     */
    protected $diastripesttii;

    /**
     * The value for the diastripesttiii field.
     * @var        string
     */
    protected $diastripesttiii;

    /**
     * The value for the curstripestti field.
     * @var        string
     */
    protected $curstripestti;

    /**
     * The value for the curstripesttii field.
     * @var        string
     */
    protected $curstripesttii;

    /**
     * The value for the curstripesttiii field.
     * @var        string
     */
    protected $curstripesttiii;

    /**
     * The value for the spotstti field.
     * @var        string
     */
    protected $spotstti;

    /**
     * The value for the spotsttii field.
     * @var        string
     */
    protected $spotsttii;

    /**
     * The value for the spotsttiii field.
     * @var        string
     */
    protected $spotsttiii;

    /**
     * The value for the dorsalfini field.
     * @var        string
     */
    protected $dorsalfini;

    /**
     * The value for the dorsalfinii field.
     * @var        string
     */
    protected $dorsalfinii;

    /**
     * The value for the caudalfini field.
     * @var        string
     */
    protected $caudalfini;

    /**
     * The value for the caudalfinii field.
     * @var        string
     */
    protected $caudalfinii;

    /**
     * The value for the analfini field.
     * @var        string
     */
    protected $analfini;

    /**
     * The value for the analfinii field.
     * @var        string
     */
    protected $analfinii;

    /**
     * The value for the laterallinesno field.
     * @var        int
     */
    protected $laterallinesno;

    /**
     * The value for the llinterrupted field.
     * @var        boolean
     */
    protected $llinterrupted;

    /**
     * The value for the scaleslateralmin field.
     * @var        int
     */
    protected $scaleslateralmin;

    /**
     * The value for the scaleslateralmax field.
     * @var        int
     */
    protected $scaleslateralmax;

    /**
     * The value for the poredscalesmin field.
     * @var        int
     */
    protected $poredscalesmin;

    /**
     * The value for the poredscalesmax field.
     * @var        int
     */
    protected $poredscalesmax;

    /**
     * The value for the latseriesmin field.
     * @var        int
     */
    protected $latseriesmin;

    /**
     * The value for the latseriesmax field.
     * @var        int
     */
    protected $latseriesmax;

    /**
     * The value for the scalerowsabovemin field.
     * @var        double
     */
    protected $scalerowsabovemin;

    /**
     * The value for the scalerowsabovemax field.
     * @var        double
     */
    protected $scalerowsabovemax;

    /**
     * The value for the scalerowsbelowmin field.
     * @var        double
     */
    protected $scalerowsbelowmin;

    /**
     * The value for the scalerowsbelowmax field.
     * @var        double
     */
    protected $scalerowsbelowmax;

    /**
     * The value for the scalespeduncmin field.
     * @var        int
     */
    protected $scalespeduncmin;

    /**
     * The value for the scalespeduncmax field.
     * @var        int
     */
    protected $scalespeduncmax;

    /**
     * The value for the barbelsno field.
     * @var        int
     */
    protected $barbelsno;

    /**
     * The value for the barbelstype field.
     * @var        string
     */
    protected $barbelstype;

    /**
     * The value for the gillcleftsno field.
     * @var        int
     */
    protected $gillcleftsno;

    /**
     * The value for the spiracle field.
     * @var        string
     */
    protected $spiracle;

    /**
     * The value for the gillrakerslowmin field.
     * @var        int
     */
    protected $gillrakerslowmin;

    /**
     * The value for the gillrakerslowmax field.
     * @var        int
     */
    protected $gillrakerslowmax;

    /**
     * The value for the gillrakersupmin field.
     * @var        int
     */
    protected $gillrakersupmin;

    /**
     * The value for the gillrakersupmax field.
     * @var        int
     */
    protected $gillrakersupmax;

    /**
     * The value for the gillrakerstotalmin field.
     * @var        int
     */
    protected $gillrakerstotalmin;

    /**
     * The value for the gillrakerstotalmax field.
     * @var        int
     */
    protected $gillrakerstotalmax;

    /**
     * The value for the vertebrae field.
     * @var        string
     */
    protected $vertebrae;

    /**
     * The value for the vertebraepreanmin field.
     * @var        int
     */
    protected $vertebraepreanmin;

    /**
     * The value for the vertebraepreanmax field.
     * @var        int
     */
    protected $vertebraepreanmax;

    /**
     * The value for the vertebraetotalmin field.
     * @var        int
     */
    protected $vertebraetotalmin;

    /**
     * The value for the vertebraetotalmax field.
     * @var        int
     */
    protected $vertebraetotalmax;

    /**
     * The value for the dorsalattributes field.
     * @var        string
     */
    protected $dorsalattributes;

    /**
     * The value for the dfinno field.
     * @var        int
     */
    protected $dfinno;

    /**
     * The value for the dorsalspinesmin field.
     * @var        int
     */
    protected $dorsalspinesmin;

    /**
     * The value for the dorsalspinesmax field.
     * @var        int
     */
    protected $dorsalspinesmax;

    /**
     * The value for the notched field.
     * @var        int
     */
    protected $notched;

    /**
     * The value for the dorsalsoftraysmin field.
     * @var        int
     */
    protected $dorsalsoftraysmin;

    /**
     * The value for the dorsalsoftraysmax field.
     * @var        int
     */
    protected $dorsalsoftraysmax;

    /**
     * The value for the adifin field.
     * @var        string
     */
    protected $adifin;

    /**
     * The value for the dfinletsmin field.
     * @var        int
     */
    protected $dfinletsmin;

    /**
     * The value for the dfinletsmax field.
     * @var        int
     */
    protected $dfinletsmax;

    /**
     * The value for the vfinletsmin field.
     * @var        int
     */
    protected $vfinletsmin;

    /**
     * The value for the vfinletsmax field.
     * @var        int
     */
    protected $vfinletsmax;

    /**
     * The value for the cshape field.
     * @var        string
     */
    protected $cshape;

    /**
     * The value for the attributes field.
     * @var        string
     */
    protected $attributes;

    /**
     * The value for the afinno field.
     * @var        int
     */
    protected $afinno;

    /**
     * The value for the analfinspinesmin field.
     * @var        int
     */
    protected $analfinspinesmin;

    /**
     * The value for the analfinspinesmax field.
     * @var        int
     */
    protected $analfinspinesmax;

    /**
     * The value for the araymin field.
     * @var        int
     */
    protected $araymin;

    /**
     * The value for the araymax field.
     * @var        int
     */
    protected $araymax;

    /**
     * The value for the pectoralattributes field.
     * @var        string
     */
    protected $pectoralattributes;

    /**
     * The value for the pspines2 field.
     * @var        int
     */
    protected $pspines2;

    /**
     * The value for the praymin field.
     * @var        int
     */
    protected $praymin;

    /**
     * The value for the praymax field.
     * @var        int
     */
    protected $praymax;

    /**
     * The value for the pelvicsattributes field.
     * @var        string
     */
    protected $pelvicsattributes;

    /**
     * The value for the vposition field.
     * @var        string
     */
    protected $vposition;

    /**
     * The value for the vposition2 field.
     * @var        string
     */
    protected $vposition2;

    /**
     * The value for the vspines field.
     * @var        int
     */
    protected $vspines;

    /**
     * The value for the vraymin field.
     * @var        int
     */
    protected $vraymin;

    /**
     * The value for the vraymax field.
     * @var        int
     */
    protected $vraymax;

    /**
     * The value for the standardlengthcm field.
     * @var        double
     */
    protected $standardlengthcm;

    /**
     * The value for the forklength field.
     * @var        double
     */
    protected $forklength;

    /**
     * The value for the totallength field.
     * @var        double
     */
    protected $totallength;

    /**
     * The value for the headlength field.
     * @var        double
     */
    protected $headlength;

    /**
     * The value for the predorsallength field.
     * @var        double
     */
    protected $predorsallength;

    /**
     * The value for the prepelvicslength field.
     * @var        double
     */
    protected $prepelvicslength;

    /**
     * The value for the preanallength field.
     * @var        double
     */
    protected $preanallength;

    /**
     * The value for the postheaddepth field.
     * @var        double
     */
    protected $postheaddepth;

    /**
     * The value for the posttrunkdepth field.
     * @var        double
     */
    protected $posttrunkdepth;

    /**
     * The value for the maximumdepth field.
     * @var        double
     */
    protected $maximumdepth;

    /**
     * The value for the peduncledepth field.
     * @var        double
     */
    protected $peduncledepth;

    /**
     * The value for the pedunclelength field.
     * @var        double
     */
    protected $pedunclelength;

    /**
     * The value for the caudalheight field.
     * @var        double
     */
    protected $caudalheight;

    /**
     * The value for the preorbitallength field.
     * @var        double
     */
    protected $preorbitallength;

    /**
     * The value for the eyelength field.
     * @var        double
     */
    protected $eyelength;

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
     * The value for the remarksex field.
     * @var        string
     */
    protected $remarksex;

    /**
     * The value for the addchars field.
     * @var        string
     */
    protected $addchars;

    /**
     * The value for the similarspecies1 field.
     * @var        int
     */
    protected $similarspecies1;

    /**
     * The value for the similarspec1remarks field.
     * @var        string
     */
    protected $similarspec1remarks;

    /**
     * The value for the similarspecies2 field.
     * @var        int
     */
    protected $similarspecies2;

    /**
     * The value for the similarspec2remarks field.
     * @var        string
     */
    protected $similarspec2remarks;

    /**
     * The value for the easeofid field.
     * @var        string
     */
    protected $easeofid;

    /**
     * The value for the otherref1 field.
     * @var        int
     */
    protected $otherref1;

    /**
     * The value for the otherref2 field.
     * @var        int
     */
    protected $otherref2;

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
     * Get the [morphdatrefno] column value.
     *
     * @return int
     */
    public function getMorphdatrefno()
    {

        return $this->morphdatrefno;
    }

    /**
     * Get the [females] column value.
     *
     * @return int
     */
    public function getFemales()
    {

        return $this->females;
    }

    /**
     * Get the [males] column value.
     *
     * @return int
     */
    public function getMales()
    {

        return $this->males;
    }

    /**
     * Get the [appearancepic] column value.
     *
     * @return string
     */
    public function getAppearancepic()
    {

        return $this->appearancepic;
    }

    /**
     * Get the [sexualattributes] column value.
     *
     * @return string
     */
    public function getSexualattributes()
    {

        return $this->sexualattributes;
    }

    /**
     * Get the [sexmorphology] column value.
     *
     * @return string
     */
    public function getSexmorphology()
    {

        return $this->sexmorphology;
    }

    /**
     * Get the [sexcolors] column value.
     *
     * @return string
     */
    public function getSexcolors()
    {

        return $this->sexcolors;
    }

    /**
     * Get the [strikingfeatures] column value.
     *
     * @return string
     */
    public function getStrikingfeatures()
    {

        return $this->strikingfeatures;
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
     * Get the [bodyshapeii] column value.
     *
     * @return string
     */
    public function getBodyshapeii()
    {

        return $this->bodyshapeii;
    }

    /**
     * Get the [forehead] column value.
     *
     * @return string
     */
    public function getForehead()
    {

        return $this->forehead;
    }

    /**
     * Get the [operculumpresent] column value.
     *
     * @return int
     */
    public function getOperculumpresent()
    {

        return $this->operculumpresent;
    }

    /**
     * Get the [typeofeyes] column value.
     *
     * @return string
     */
    public function getTypeofeyes()
    {

        return $this->typeofeyes;
    }

    /**
     * Get the [typeofmouth] column value.
     *
     * @return string
     */
    public function getTypeofmouth()
    {

        return $this->typeofmouth;
    }

    /**
     * Get the [posofmouth] column value.
     *
     * @return string
     */
    public function getPosofmouth()
    {

        return $this->posofmouth;
    }

    /**
     * Get the [mandibleteeth] column value.
     *
     * @return string
     */
    public function getMandibleteeth()
    {

        return $this->mandibleteeth;
    }

    /**
     * Get the [mandibleteetht1] column value.
     *
     * @return string
     */
    public function getMandibleteetht1()
    {

        return $this->mandibleteetht1;
    }

    /**
     * Get the [mandibleteetht2] column value.
     *
     * @return string
     */
    public function getMandibleteetht2()
    {

        return $this->mandibleteetht2;
    }

    /**
     * Get the [mandiblerowsmin] column value.
     *
     * @return int
     */
    public function getMandiblerowsmin()
    {

        return $this->mandiblerowsmin;
    }

    /**
     * Get the [mandiblerowsmax] column value.
     *
     * @return int
     */
    public function getMandiblerowsmax()
    {

        return $this->mandiblerowsmax;
    }

    /**
     * Get the [maxillateeth] column value.
     *
     * @return string
     */
    public function getMaxillateeth()
    {

        return $this->maxillateeth;
    }

    /**
     * Get the [maxillateetht1] column value.
     *
     * @return string
     */
    public function getMaxillateetht1()
    {

        return $this->maxillateetht1;
    }

    /**
     * Get the [maxillateetht2] column value.
     *
     * @return string
     */
    public function getMaxillateetht2()
    {

        return $this->maxillateetht2;
    }

    /**
     * Get the [maxillarowsmin] column value.
     *
     * @return int
     */
    public function getMaxillarowsmin()
    {

        return $this->maxillarowsmin;
    }

    /**
     * Get the [maxillarowsmax] column value.
     *
     * @return int
     */
    public function getMaxillarowsmax()
    {

        return $this->maxillarowsmax;
    }

    /**
     * Get the [vomerineteeth] column value.
     *
     * @return string
     */
    public function getVomerineteeth()
    {

        return $this->vomerineteeth;
    }

    /**
     * Get the [vomerineteetht1] column value.
     *
     * @return string
     */
    public function getVomerineteetht1()
    {

        return $this->vomerineteetht1;
    }

    /**
     * Get the [vomerineteetht2] column value.
     *
     * @return string
     */
    public function getVomerineteetht2()
    {

        return $this->vomerineteetht2;
    }

    /**
     * Get the [vomerinerowsmin] column value.
     *
     * @return int
     */
    public function getVomerinerowsmin()
    {

        return $this->vomerinerowsmin;
    }

    /**
     * Get the [vomerinerowsmax] column value.
     *
     * @return int
     */
    public function getVomerinerowsmax()
    {

        return $this->vomerinerowsmax;
    }

    /**
     * Get the [palatine] column value.
     *
     * @return string
     */
    public function getPalatine()
    {

        return $this->palatine;
    }

    /**
     * Get the [palatineteetht1] column value.
     *
     * @return string
     */
    public function getPalatineteetht1()
    {

        return $this->palatineteetht1;
    }

    /**
     * Get the [palatineteetht2] column value.
     *
     * @return string
     */
    public function getPalatineteetht2()
    {

        return $this->palatineteetht2;
    }

    /**
     * Get the [palatinerowsmin] column value.
     *
     * @return int
     */
    public function getPalatinerowsmin()
    {

        return $this->palatinerowsmin;
    }

    /**
     * Get the [palatinerowsmax] column value.
     *
     * @return int
     */
    public function getPalatinerowsmax()
    {

        return $this->palatinerowsmax;
    }

    /**
     * Get the [pharyngealteeth] column value.
     *
     * @return string
     */
    public function getPharyngealteeth()
    {

        return $this->pharyngealteeth;
    }

    /**
     * Get the [pharyngealteetht1] column value.
     *
     * @return string
     */
    public function getPharyngealteetht1()
    {

        return $this->pharyngealteetht1;
    }

    /**
     * Get the [pharyngealteetht2] column value.
     *
     * @return string
     */
    public function getPharyngealteetht2()
    {

        return $this->pharyngealteetht2;
    }

    /**
     * Get the [pharyngealrowsmin] column value.
     *
     * @return int
     */
    public function getPharyngealrowsmin()
    {

        return $this->pharyngealrowsmin;
    }

    /**
     * Get the [pharyngealrowsmax] column value.
     *
     * @return int
     */
    public function getPharyngealrowsmax()
    {

        return $this->pharyngealrowsmax;
    }

    /**
     * Get the [teethontongue] column value.
     *
     * @return string
     */
    public function getTeethontongue()
    {

        return $this->teethontongue;
    }

    /**
     * Get the [lipsteeth] column value.
     *
     * @return string
     */
    public function getLipsteeth()
    {

        return $this->lipsteeth;
    }

    /**
     * Get the [dermalteeth] column value.
     *
     * @return string
     */
    public function getDermalteeth()
    {

        return $this->dermalteeth;
    }

    /**
     * Get the [commentonteeth] column value.
     *
     * @return string
     */
    public function getCommentonteeth()
    {

        return $this->commentonteeth;
    }

    /**
     * Get the [typeofscales] column value.
     *
     * @return string
     */
    public function getTypeofscales()
    {

        return $this->typeofscales;
    }

    /**
     * Get the [scutes] column value.
     *
     * @return string
     */
    public function getScutes()
    {

        return $this->scutes;
    }

    /**
     * Get the [keels] column value.
     *
     * @return int
     */
    public function getKeels()
    {

        return $this->keels;
    }

    /**
     * Get the [horstripestti] column value.
     *
     * @return string
     */
    public function getHorstripestti()
    {

        return $this->horstripestti;
    }

    /**
     * Get the [horstripesttii] column value.
     *
     * @return string
     */
    public function getHorstripesttii()
    {

        return $this->horstripesttii;
    }

    /**
     * Get the [verstripestti] column value.
     *
     * @return string
     */
    public function getVerstripestti()
    {

        return $this->verstripestti;
    }

    /**
     * Get the [verstripesttii] column value.
     *
     * @return string
     */
    public function getVerstripesttii()
    {

        return $this->verstripesttii;
    }

    /**
     * Get the [verstripesttiii] column value.
     *
     * @return string
     */
    public function getVerstripesttiii()
    {

        return $this->verstripesttiii;
    }

    /**
     * Get the [diastripestti] column value.
     *
     * @return string
     */
    public function getDiastripestti()
    {

        return $this->diastripestti;
    }

    /**
     * Get the [diastripesttii] column value.
     *
     * @return string
     */
    public function getDiastripesttii()
    {

        return $this->diastripesttii;
    }

    /**
     * Get the [diastripesttiii] column value.
     *
     * @return string
     */
    public function getDiastripesttiii()
    {

        return $this->diastripesttiii;
    }

    /**
     * Get the [curstripestti] column value.
     *
     * @return string
     */
    public function getCurstripestti()
    {

        return $this->curstripestti;
    }

    /**
     * Get the [curstripesttii] column value.
     *
     * @return string
     */
    public function getCurstripesttii()
    {

        return $this->curstripesttii;
    }

    /**
     * Get the [curstripesttiii] column value.
     *
     * @return string
     */
    public function getCurstripesttiii()
    {

        return $this->curstripesttiii;
    }

    /**
     * Get the [spotstti] column value.
     *
     * @return string
     */
    public function getSpotstti()
    {

        return $this->spotstti;
    }

    /**
     * Get the [spotsttii] column value.
     *
     * @return string
     */
    public function getSpotsttii()
    {

        return $this->spotsttii;
    }

    /**
     * Get the [spotsttiii] column value.
     *
     * @return string
     */
    public function getSpotsttiii()
    {

        return $this->spotsttiii;
    }

    /**
     * Get the [dorsalfini] column value.
     *
     * @return string
     */
    public function getDorsalfini()
    {

        return $this->dorsalfini;
    }

    /**
     * Get the [dorsalfinii] column value.
     *
     * @return string
     */
    public function getDorsalfinii()
    {

        return $this->dorsalfinii;
    }

    /**
     * Get the [caudalfini] column value.
     *
     * @return string
     */
    public function getCaudalfini()
    {

        return $this->caudalfini;
    }

    /**
     * Get the [caudalfinii] column value.
     *
     * @return string
     */
    public function getCaudalfinii()
    {

        return $this->caudalfinii;
    }

    /**
     * Get the [analfini] column value.
     *
     * @return string
     */
    public function getAnalfini()
    {

        return $this->analfini;
    }

    /**
     * Get the [analfinii] column value.
     *
     * @return string
     */
    public function getAnalfinii()
    {

        return $this->analfinii;
    }

    /**
     * Get the [laterallinesno] column value.
     *
     * @return int
     */
    public function getLaterallinesno()
    {

        return $this->laterallinesno;
    }

    /**
     * Get the [llinterrupted] column value.
     *
     * @return boolean
     */
    public function getLlinterrupted()
    {

        return $this->llinterrupted;
    }

    /**
     * Get the [scaleslateralmin] column value.
     *
     * @return int
     */
    public function getScaleslateralmin()
    {

        return $this->scaleslateralmin;
    }

    /**
     * Get the [scaleslateralmax] column value.
     *
     * @return int
     */
    public function getScaleslateralmax()
    {

        return $this->scaleslateralmax;
    }

    /**
     * Get the [poredscalesmin] column value.
     *
     * @return int
     */
    public function getPoredscalesmin()
    {

        return $this->poredscalesmin;
    }

    /**
     * Get the [poredscalesmax] column value.
     *
     * @return int
     */
    public function getPoredscalesmax()
    {

        return $this->poredscalesmax;
    }

    /**
     * Get the [latseriesmin] column value.
     *
     * @return int
     */
    public function getLatseriesmin()
    {

        return $this->latseriesmin;
    }

    /**
     * Get the [latseriesmax] column value.
     *
     * @return int
     */
    public function getLatseriesmax()
    {

        return $this->latseriesmax;
    }

    /**
     * Get the [scalerowsabovemin] column value.
     *
     * @return double
     */
    public function getScalerowsabovemin()
    {

        return $this->scalerowsabovemin;
    }

    /**
     * Get the [scalerowsabovemax] column value.
     *
     * @return double
     */
    public function getScalerowsabovemax()
    {

        return $this->scalerowsabovemax;
    }

    /**
     * Get the [scalerowsbelowmin] column value.
     *
     * @return double
     */
    public function getScalerowsbelowmin()
    {

        return $this->scalerowsbelowmin;
    }

    /**
     * Get the [scalerowsbelowmax] column value.
     *
     * @return double
     */
    public function getScalerowsbelowmax()
    {

        return $this->scalerowsbelowmax;
    }

    /**
     * Get the [scalespeduncmin] column value.
     *
     * @return int
     */
    public function getScalespeduncmin()
    {

        return $this->scalespeduncmin;
    }

    /**
     * Get the [scalespeduncmax] column value.
     *
     * @return int
     */
    public function getScalespeduncmax()
    {

        return $this->scalespeduncmax;
    }

    /**
     * Get the [barbelsno] column value.
     *
     * @return int
     */
    public function getBarbelsno()
    {

        return $this->barbelsno;
    }

    /**
     * Get the [barbelstype] column value.
     *
     * @return string
     */
    public function getBarbelstype()
    {

        return $this->barbelstype;
    }

    /**
     * Get the [gillcleftsno] column value.
     *
     * @return int
     */
    public function getGillcleftsno()
    {

        return $this->gillcleftsno;
    }

    /**
     * Get the [spiracle] column value.
     *
     * @return string
     */
    public function getSpiracle()
    {

        return $this->spiracle;
    }

    /**
     * Get the [gillrakerslowmin] column value.
     *
     * @return int
     */
    public function getGillrakerslowmin()
    {

        return $this->gillrakerslowmin;
    }

    /**
     * Get the [gillrakerslowmax] column value.
     *
     * @return int
     */
    public function getGillrakerslowmax()
    {

        return $this->gillrakerslowmax;
    }

    /**
     * Get the [gillrakersupmin] column value.
     *
     * @return int
     */
    public function getGillrakersupmin()
    {

        return $this->gillrakersupmin;
    }

    /**
     * Get the [gillrakersupmax] column value.
     *
     * @return int
     */
    public function getGillrakersupmax()
    {

        return $this->gillrakersupmax;
    }

    /**
     * Get the [gillrakerstotalmin] column value.
     *
     * @return int
     */
    public function getGillrakerstotalmin()
    {

        return $this->gillrakerstotalmin;
    }

    /**
     * Get the [gillrakerstotalmax] column value.
     *
     * @return int
     */
    public function getGillrakerstotalmax()
    {

        return $this->gillrakerstotalmax;
    }

    /**
     * Get the [vertebrae] column value.
     *
     * @return string
     */
    public function getVertebrae()
    {

        return $this->vertebrae;
    }

    /**
     * Get the [vertebraepreanmin] column value.
     *
     * @return int
     */
    public function getVertebraepreanmin()
    {

        return $this->vertebraepreanmin;
    }

    /**
     * Get the [vertebraepreanmax] column value.
     *
     * @return int
     */
    public function getVertebraepreanmax()
    {

        return $this->vertebraepreanmax;
    }

    /**
     * Get the [vertebraetotalmin] column value.
     *
     * @return int
     */
    public function getVertebraetotalmin()
    {

        return $this->vertebraetotalmin;
    }

    /**
     * Get the [vertebraetotalmax] column value.
     *
     * @return int
     */
    public function getVertebraetotalmax()
    {

        return $this->vertebraetotalmax;
    }

    /**
     * Get the [dorsalattributes] column value.
     *
     * @return string
     */
    public function getDorsalattributes()
    {

        return $this->dorsalattributes;
    }

    /**
     * Get the [dfinno] column value.
     *
     * @return int
     */
    public function getDfinno()
    {

        return $this->dfinno;
    }

    /**
     * Get the [dorsalspinesmin] column value.
     *
     * @return int
     */
    public function getDorsalspinesmin()
    {

        return $this->dorsalspinesmin;
    }

    /**
     * Get the [dorsalspinesmax] column value.
     *
     * @return int
     */
    public function getDorsalspinesmax()
    {

        return $this->dorsalspinesmax;
    }

    /**
     * Get the [notched] column value.
     *
     * @return int
     */
    public function getNotched()
    {

        return $this->notched;
    }

    /**
     * Get the [dorsalsoftraysmin] column value.
     *
     * @return int
     */
    public function getDorsalsoftraysmin()
    {

        return $this->dorsalsoftraysmin;
    }

    /**
     * Get the [dorsalsoftraysmax] column value.
     *
     * @return int
     */
    public function getDorsalsoftraysmax()
    {

        return $this->dorsalsoftraysmax;
    }

    /**
     * Get the [adifin] column value.
     *
     * @return string
     */
    public function getAdifin()
    {

        return $this->adifin;
    }

    /**
     * Get the [dfinletsmin] column value.
     *
     * @return int
     */
    public function getDfinletsmin()
    {

        return $this->dfinletsmin;
    }

    /**
     * Get the [dfinletsmax] column value.
     *
     * @return int
     */
    public function getDfinletsmax()
    {

        return $this->dfinletsmax;
    }

    /**
     * Get the [vfinletsmin] column value.
     *
     * @return int
     */
    public function getVfinletsmin()
    {

        return $this->vfinletsmin;
    }

    /**
     * Get the [vfinletsmax] column value.
     *
     * @return int
     */
    public function getVfinletsmax()
    {

        return $this->vfinletsmax;
    }

    /**
     * Get the [cshape] column value.
     *
     * @return string
     */
    public function getCshape()
    {

        return $this->cshape;
    }

    /**
     * Get the [attributes] column value.
     *
     * @return string
     */
    public function getAttributes()
    {

        return $this->attributes;
    }

    /**
     * Get the [afinno] column value.
     *
     * @return int
     */
    public function getAfinno()
    {

        return $this->afinno;
    }

    /**
     * Get the [analfinspinesmin] column value.
     *
     * @return int
     */
    public function getAnalfinspinesmin()
    {

        return $this->analfinspinesmin;
    }

    /**
     * Get the [analfinspinesmax] column value.
     *
     * @return int
     */
    public function getAnalfinspinesmax()
    {

        return $this->analfinspinesmax;
    }

    /**
     * Get the [araymin] column value.
     *
     * @return int
     */
    public function getAraymin()
    {

        return $this->araymin;
    }

    /**
     * Get the [araymax] column value.
     *
     * @return int
     */
    public function getAraymax()
    {

        return $this->araymax;
    }

    /**
     * Get the [pectoralattributes] column value.
     *
     * @return string
     */
    public function getPectoralattributes()
    {

        return $this->pectoralattributes;
    }

    /**
     * Get the [pspines2] column value.
     *
     * @return int
     */
    public function getPspines2()
    {

        return $this->pspines2;
    }

    /**
     * Get the [praymin] column value.
     *
     * @return int
     */
    public function getPraymin()
    {

        return $this->praymin;
    }

    /**
     * Get the [praymax] column value.
     *
     * @return int
     */
    public function getPraymax()
    {

        return $this->praymax;
    }

    /**
     * Get the [pelvicsattributes] column value.
     *
     * @return string
     */
    public function getPelvicsattributes()
    {

        return $this->pelvicsattributes;
    }

    /**
     * Get the [vposition] column value.
     *
     * @return string
     */
    public function getVposition()
    {

        return $this->vposition;
    }

    /**
     * Get the [vposition2] column value.
     *
     * @return string
     */
    public function getVposition2()
    {

        return $this->vposition2;
    }

    /**
     * Get the [vspines] column value.
     *
     * @return int
     */
    public function getVspines()
    {

        return $this->vspines;
    }

    /**
     * Get the [vraymin] column value.
     *
     * @return int
     */
    public function getVraymin()
    {

        return $this->vraymin;
    }

    /**
     * Get the [vraymax] column value.
     *
     * @return int
     */
    public function getVraymax()
    {

        return $this->vraymax;
    }

    /**
     * Get the [standardlengthcm] column value.
     *
     * @return double
     */
    public function getStandardlengthcm()
    {

        return $this->standardlengthcm;
    }

    /**
     * Get the [forklength] column value.
     *
     * @return double
     */
    public function getForklength()
    {

        return $this->forklength;
    }

    /**
     * Get the [totallength] column value.
     *
     * @return double
     */
    public function getTotallength()
    {

        return $this->totallength;
    }

    /**
     * Get the [headlength] column value.
     *
     * @return double
     */
    public function getHeadlength()
    {

        return $this->headlength;
    }

    /**
     * Get the [predorsallength] column value.
     *
     * @return double
     */
    public function getPredorsallength()
    {

        return $this->predorsallength;
    }

    /**
     * Get the [prepelvicslength] column value.
     *
     * @return double
     */
    public function getPrepelvicslength()
    {

        return $this->prepelvicslength;
    }

    /**
     * Get the [preanallength] column value.
     *
     * @return double
     */
    public function getPreanallength()
    {

        return $this->preanallength;
    }

    /**
     * Get the [postheaddepth] column value.
     *
     * @return double
     */
    public function getPostheaddepth()
    {

        return $this->postheaddepth;
    }

    /**
     * Get the [posttrunkdepth] column value.
     *
     * @return double
     */
    public function getPosttrunkdepth()
    {

        return $this->posttrunkdepth;
    }

    /**
     * Get the [maximumdepth] column value.
     *
     * @return double
     */
    public function getMaximumdepth()
    {

        return $this->maximumdepth;
    }

    /**
     * Get the [peduncledepth] column value.
     *
     * @return double
     */
    public function getPeduncledepth()
    {

        return $this->peduncledepth;
    }

    /**
     * Get the [pedunclelength] column value.
     *
     * @return double
     */
    public function getPedunclelength()
    {

        return $this->pedunclelength;
    }

    /**
     * Get the [caudalheight] column value.
     *
     * @return double
     */
    public function getCaudalheight()
    {

        return $this->caudalheight;
    }

    /**
     * Get the [preorbitallength] column value.
     *
     * @return double
     */
    public function getPreorbitallength()
    {

        return $this->preorbitallength;
    }

    /**
     * Get the [eyelength] column value.
     *
     * @return double
     */
    public function getEyelength()
    {

        return $this->eyelength;
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
     * Get the [remarksex] column value.
     *
     * @return string
     */
    public function getRemarksex()
    {

        return $this->remarksex;
    }

    /**
     * Get the [addchars] column value.
     *
     * @return string
     */
    public function getAddchars()
    {

        return $this->addchars;
    }

    /**
     * Get the [similarspecies1] column value.
     *
     * @return int
     */
    public function getSimilarspecies1()
    {

        return $this->similarspecies1;
    }

    /**
     * Get the [similarspec1remarks] column value.
     *
     * @return string
     */
    public function getSimilarspec1remarks()
    {

        return $this->similarspec1remarks;
    }

    /**
     * Get the [similarspecies2] column value.
     *
     * @return int
     */
    public function getSimilarspecies2()
    {

        return $this->similarspecies2;
    }

    /**
     * Get the [similarspec2remarks] column value.
     *
     * @return string
     */
    public function getSimilarspec2remarks()
    {

        return $this->similarspec2remarks;
    }

    /**
     * Get the [easeofid] column value.
     *
     * @return string
     */
    public function getEaseofid()
    {

        return $this->easeofid;
    }

    /**
     * Get the [otherref1] column value.
     *
     * @return int
     */
    public function getOtherref1()
    {

        return $this->otherref1;
    }

    /**
     * Get the [otherref2] column value.
     *
     * @return int
     */
    public function getOtherref2()
    {

        return $this->otherref2;
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
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = MorphdatPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = MorphdatPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = MorphdatPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [morphdatrefno] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMorphdatrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->morphdatrefno !== $v) {
            $this->morphdatrefno = $v;
            $this->modifiedColumns[] = MorphdatPeer::MORPHDATREFNO;
        }


        return $this;
    } // setMorphdatrefno()

    /**
     * Set the value of [females] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setFemales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->females !== $v) {
            $this->females = $v;
            $this->modifiedColumns[] = MorphdatPeer::FEMALES;
        }


        return $this;
    } // setFemales()

    /**
     * Set the value of [males] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->males !== $v) {
            $this->males = $v;
            $this->modifiedColumns[] = MorphdatPeer::MALES;
        }


        return $this;
    } // setMales()

    /**
     * Set the value of [appearancepic] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAppearancepic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->appearancepic !== $v) {
            $this->appearancepic = $v;
            $this->modifiedColumns[] = MorphdatPeer::APPEARANCEPIC;
        }


        return $this;
    } // setAppearancepic()

    /**
     * Set the value of [sexualattributes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSexualattributes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sexualattributes !== $v) {
            $this->sexualattributes = $v;
            $this->modifiedColumns[] = MorphdatPeer::SEXUALATTRIBUTES;
        }


        return $this;
    } // setSexualattributes()

    /**
     * Set the value of [sexmorphology] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSexmorphology($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sexmorphology !== $v) {
            $this->sexmorphology = $v;
            $this->modifiedColumns[] = MorphdatPeer::SEXMORPHOLOGY;
        }


        return $this;
    } // setSexmorphology()

    /**
     * Set the value of [sexcolors] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSexcolors($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sexcolors !== $v) {
            $this->sexcolors = $v;
            $this->modifiedColumns[] = MorphdatPeer::SEXCOLORS;
        }


        return $this;
    } // setSexcolors()

    /**
     * Set the value of [strikingfeatures] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setStrikingfeatures($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->strikingfeatures !== $v) {
            $this->strikingfeatures = $v;
            $this->modifiedColumns[] = MorphdatPeer::STRIKINGFEATURES;
        }


        return $this;
    } // setStrikingfeatures()

    /**
     * Set the value of [bodyshapei] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setBodyshapei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapei !== $v) {
            $this->bodyshapei = $v;
            $this->modifiedColumns[] = MorphdatPeer::BODYSHAPEI;
        }


        return $this;
    } // setBodyshapei()

    /**
     * Set the value of [bodyshapeii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setBodyshapeii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyshapeii !== $v) {
            $this->bodyshapeii = $v;
            $this->modifiedColumns[] = MorphdatPeer::BODYSHAPEII;
        }


        return $this;
    } // setBodyshapeii()

    /**
     * Set the value of [forehead] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setForehead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->forehead !== $v) {
            $this->forehead = $v;
            $this->modifiedColumns[] = MorphdatPeer::FOREHEAD;
        }


        return $this;
    } // setForehead()

    /**
     * Set the value of [operculumpresent] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setOperculumpresent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->operculumpresent !== $v) {
            $this->operculumpresent = $v;
            $this->modifiedColumns[] = MorphdatPeer::OPERCULUMPRESENT;
        }


        return $this;
    } // setOperculumpresent()

    /**
     * Set the value of [typeofeyes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setTypeofeyes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeofeyes !== $v) {
            $this->typeofeyes = $v;
            $this->modifiedColumns[] = MorphdatPeer::TYPEOFEYES;
        }


        return $this;
    } // setTypeofeyes()

    /**
     * Set the value of [typeofmouth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setTypeofmouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeofmouth !== $v) {
            $this->typeofmouth = $v;
            $this->modifiedColumns[] = MorphdatPeer::TYPEOFMOUTH;
        }


        return $this;
    } // setTypeofmouth()

    /**
     * Set the value of [posofmouth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPosofmouth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->posofmouth !== $v) {
            $this->posofmouth = $v;
            $this->modifiedColumns[] = MorphdatPeer::POSOFMOUTH;
        }


        return $this;
    } // setPosofmouth()

    /**
     * Set the value of [mandibleteeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMandibleteeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mandibleteeth !== $v) {
            $this->mandibleteeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::MANDIBLETEETH;
        }


        return $this;
    } // setMandibleteeth()

    /**
     * Set the value of [mandibleteetht1] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMandibleteetht1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mandibleteetht1 !== $v) {
            $this->mandibleteetht1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::MANDIBLETEETHT1;
        }


        return $this;
    } // setMandibleteetht1()

    /**
     * Set the value of [mandibleteetht2] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMandibleteetht2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mandibleteetht2 !== $v) {
            $this->mandibleteetht2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::MANDIBLETEETHT2;
        }


        return $this;
    } // setMandibleteetht2()

    /**
     * Set the value of [mandiblerowsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMandiblerowsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mandiblerowsmin !== $v) {
            $this->mandiblerowsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::MANDIBLEROWSMIN;
        }


        return $this;
    } // setMandiblerowsmin()

    /**
     * Set the value of [mandiblerowsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMandiblerowsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mandiblerowsmax !== $v) {
            $this->mandiblerowsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::MANDIBLEROWSMAX;
        }


        return $this;
    } // setMandiblerowsmax()

    /**
     * Set the value of [maxillateeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMaxillateeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maxillateeth !== $v) {
            $this->maxillateeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::MAXILLATEETH;
        }


        return $this;
    } // setMaxillateeth()

    /**
     * Set the value of [maxillateetht1] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMaxillateetht1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maxillateetht1 !== $v) {
            $this->maxillateetht1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::MAXILLATEETHT1;
        }


        return $this;
    } // setMaxillateetht1()

    /**
     * Set the value of [maxillateetht2] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMaxillateetht2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maxillateetht2 !== $v) {
            $this->maxillateetht2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::MAXILLATEETHT2;
        }


        return $this;
    } // setMaxillateetht2()

    /**
     * Set the value of [maxillarowsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMaxillarowsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxillarowsmin !== $v) {
            $this->maxillarowsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::MAXILLAROWSMIN;
        }


        return $this;
    } // setMaxillarowsmin()

    /**
     * Set the value of [maxillarowsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMaxillarowsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maxillarowsmax !== $v) {
            $this->maxillarowsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::MAXILLAROWSMAX;
        }


        return $this;
    } // setMaxillarowsmax()

    /**
     * Set the value of [vomerineteeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVomerineteeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vomerineteeth !== $v) {
            $this->vomerineteeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::VOMERINETEETH;
        }


        return $this;
    } // setVomerineteeth()

    /**
     * Set the value of [vomerineteetht1] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVomerineteetht1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vomerineteetht1 !== $v) {
            $this->vomerineteetht1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::VOMERINETEETHT1;
        }


        return $this;
    } // setVomerineteetht1()

    /**
     * Set the value of [vomerineteetht2] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVomerineteetht2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vomerineteetht2 !== $v) {
            $this->vomerineteetht2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::VOMERINETEETHT2;
        }


        return $this;
    } // setVomerineteetht2()

    /**
     * Set the value of [vomerinerowsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVomerinerowsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vomerinerowsmin !== $v) {
            $this->vomerinerowsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::VOMERINEROWSMIN;
        }


        return $this;
    } // setVomerinerowsmin()

    /**
     * Set the value of [vomerinerowsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVomerinerowsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vomerinerowsmax !== $v) {
            $this->vomerinerowsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::VOMERINEROWSMAX;
        }


        return $this;
    } // setVomerinerowsmax()

    /**
     * Set the value of [palatine] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPalatine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->palatine !== $v) {
            $this->palatine = $v;
            $this->modifiedColumns[] = MorphdatPeer::PALATINE;
        }


        return $this;
    } // setPalatine()

    /**
     * Set the value of [palatineteetht1] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPalatineteetht1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->palatineteetht1 !== $v) {
            $this->palatineteetht1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::PALATINETEETHT1;
        }


        return $this;
    } // setPalatineteetht1()

    /**
     * Set the value of [palatineteetht2] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPalatineteetht2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->palatineteetht2 !== $v) {
            $this->palatineteetht2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::PALATINETEETHT2;
        }


        return $this;
    } // setPalatineteetht2()

    /**
     * Set the value of [palatinerowsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPalatinerowsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->palatinerowsmin !== $v) {
            $this->palatinerowsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::PALATINEROWSMIN;
        }


        return $this;
    } // setPalatinerowsmin()

    /**
     * Set the value of [palatinerowsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPalatinerowsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->palatinerowsmax !== $v) {
            $this->palatinerowsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::PALATINEROWSMAX;
        }


        return $this;
    } // setPalatinerowsmax()

    /**
     * Set the value of [pharyngealteeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPharyngealteeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pharyngealteeth !== $v) {
            $this->pharyngealteeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::PHARYNGEALTEETH;
        }


        return $this;
    } // setPharyngealteeth()

    /**
     * Set the value of [pharyngealteetht1] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPharyngealteetht1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pharyngealteetht1 !== $v) {
            $this->pharyngealteetht1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::PHARYNGEALTEETHT1;
        }


        return $this;
    } // setPharyngealteetht1()

    /**
     * Set the value of [pharyngealteetht2] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPharyngealteetht2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pharyngealteetht2 !== $v) {
            $this->pharyngealteetht2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::PHARYNGEALTEETHT2;
        }


        return $this;
    } // setPharyngealteetht2()

    /**
     * Set the value of [pharyngealrowsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPharyngealrowsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pharyngealrowsmin !== $v) {
            $this->pharyngealrowsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::PHARYNGEALROWSMIN;
        }


        return $this;
    } // setPharyngealrowsmin()

    /**
     * Set the value of [pharyngealrowsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPharyngealrowsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pharyngealrowsmax !== $v) {
            $this->pharyngealrowsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::PHARYNGEALROWSMAX;
        }


        return $this;
    } // setPharyngealrowsmax()

    /**
     * Set the value of [teethontongue] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setTeethontongue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->teethontongue !== $v) {
            $this->teethontongue = $v;
            $this->modifiedColumns[] = MorphdatPeer::TEETHONTONGUE;
        }


        return $this;
    } // setTeethontongue()

    /**
     * Set the value of [lipsteeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setLipsteeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lipsteeth !== $v) {
            $this->lipsteeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::LIPSTEETH;
        }


        return $this;
    } // setLipsteeth()

    /**
     * Set the value of [dermalteeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDermalteeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dermalteeth !== $v) {
            $this->dermalteeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::DERMALTEETH;
        }


        return $this;
    } // setDermalteeth()

    /**
     * Set the value of [commentonteeth] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCommentonteeth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentonteeth !== $v) {
            $this->commentonteeth = $v;
            $this->modifiedColumns[] = MorphdatPeer::COMMENTONTEETH;
        }


        return $this;
    } // setCommentonteeth()

    /**
     * Set the value of [typeofscales] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setTypeofscales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeofscales !== $v) {
            $this->typeofscales = $v;
            $this->modifiedColumns[] = MorphdatPeer::TYPEOFSCALES;
        }


        return $this;
    } // setTypeofscales()

    /**
     * Set the value of [scutes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScutes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->scutes !== $v) {
            $this->scutes = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCUTES;
        }


        return $this;
    } // setScutes()

    /**
     * Set the value of [keels] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setKeels($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->keels !== $v) {
            $this->keels = $v;
            $this->modifiedColumns[] = MorphdatPeer::KEELS;
        }


        return $this;
    } // setKeels()

    /**
     * Set the value of [horstripestti] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setHorstripestti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horstripestti !== $v) {
            $this->horstripestti = $v;
            $this->modifiedColumns[] = MorphdatPeer::HORSTRIPESTTI;
        }


        return $this;
    } // setHorstripestti()

    /**
     * Set the value of [horstripesttii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setHorstripesttii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horstripesttii !== $v) {
            $this->horstripesttii = $v;
            $this->modifiedColumns[] = MorphdatPeer::HORSTRIPESTTII;
        }


        return $this;
    } // setHorstripesttii()

    /**
     * Set the value of [verstripestti] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVerstripestti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verstripestti !== $v) {
            $this->verstripestti = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERSTRIPESTTI;
        }


        return $this;
    } // setVerstripestti()

    /**
     * Set the value of [verstripesttii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVerstripesttii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verstripesttii !== $v) {
            $this->verstripesttii = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERSTRIPESTTII;
        }


        return $this;
    } // setVerstripesttii()

    /**
     * Set the value of [verstripesttiii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVerstripesttiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verstripesttiii !== $v) {
            $this->verstripesttiii = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERSTRIPESTTIII;
        }


        return $this;
    } // setVerstripesttiii()

    /**
     * Set the value of [diastripestti] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDiastripestti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diastripestti !== $v) {
            $this->diastripestti = $v;
            $this->modifiedColumns[] = MorphdatPeer::DIASTRIPESTTI;
        }


        return $this;
    } // setDiastripestti()

    /**
     * Set the value of [diastripesttii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDiastripesttii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diastripesttii !== $v) {
            $this->diastripesttii = $v;
            $this->modifiedColumns[] = MorphdatPeer::DIASTRIPESTTII;
        }


        return $this;
    } // setDiastripesttii()

    /**
     * Set the value of [diastripesttiii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDiastripesttiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diastripesttiii !== $v) {
            $this->diastripesttiii = $v;
            $this->modifiedColumns[] = MorphdatPeer::DIASTRIPESTTIII;
        }


        return $this;
    } // setDiastripesttiii()

    /**
     * Set the value of [curstripestti] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCurstripestti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->curstripestti !== $v) {
            $this->curstripestti = $v;
            $this->modifiedColumns[] = MorphdatPeer::CURSTRIPESTTI;
        }


        return $this;
    } // setCurstripestti()

    /**
     * Set the value of [curstripesttii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCurstripesttii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->curstripesttii !== $v) {
            $this->curstripesttii = $v;
            $this->modifiedColumns[] = MorphdatPeer::CURSTRIPESTTII;
        }


        return $this;
    } // setCurstripesttii()

    /**
     * Set the value of [curstripesttiii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCurstripesttiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->curstripesttiii !== $v) {
            $this->curstripesttiii = $v;
            $this->modifiedColumns[] = MorphdatPeer::CURSTRIPESTTIII;
        }


        return $this;
    } // setCurstripesttiii()

    /**
     * Set the value of [spotstti] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSpotstti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spotstti !== $v) {
            $this->spotstti = $v;
            $this->modifiedColumns[] = MorphdatPeer::SPOTSTTI;
        }


        return $this;
    } // setSpotstti()

    /**
     * Set the value of [spotsttii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSpotsttii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spotsttii !== $v) {
            $this->spotsttii = $v;
            $this->modifiedColumns[] = MorphdatPeer::SPOTSTTII;
        }


        return $this;
    } // setSpotsttii()

    /**
     * Set the value of [spotsttiii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSpotsttiii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spotsttiii !== $v) {
            $this->spotsttiii = $v;
            $this->modifiedColumns[] = MorphdatPeer::SPOTSTTIII;
        }


        return $this;
    } // setSpotsttiii()

    /**
     * Set the value of [dorsalfini] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalfini($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dorsalfini !== $v) {
            $this->dorsalfini = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALFINI;
        }


        return $this;
    } // setDorsalfini()

    /**
     * Set the value of [dorsalfinii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalfinii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dorsalfinii !== $v) {
            $this->dorsalfinii = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALFINII;
        }


        return $this;
    } // setDorsalfinii()

    /**
     * Set the value of [caudalfini] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCaudalfini($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->caudalfini !== $v) {
            $this->caudalfini = $v;
            $this->modifiedColumns[] = MorphdatPeer::CAUDALFINI;
        }


        return $this;
    } // setCaudalfini()

    /**
     * Set the value of [caudalfinii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCaudalfinii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->caudalfinii !== $v) {
            $this->caudalfinii = $v;
            $this->modifiedColumns[] = MorphdatPeer::CAUDALFINII;
        }


        return $this;
    } // setCaudalfinii()

    /**
     * Set the value of [analfini] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAnalfini($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->analfini !== $v) {
            $this->analfini = $v;
            $this->modifiedColumns[] = MorphdatPeer::ANALFINI;
        }


        return $this;
    } // setAnalfini()

    /**
     * Set the value of [analfinii] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAnalfinii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->analfinii !== $v) {
            $this->analfinii = $v;
            $this->modifiedColumns[] = MorphdatPeer::ANALFINII;
        }


        return $this;
    } // setAnalfinii()

    /**
     * Set the value of [laterallinesno] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setLaterallinesno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->laterallinesno !== $v) {
            $this->laterallinesno = $v;
            $this->modifiedColumns[] = MorphdatPeer::LATERALLINESNO;
        }


        return $this;
    } // setLaterallinesno()

    /**
     * Sets the value of the [llinterrupted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setLlinterrupted($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->llinterrupted !== $v) {
            $this->llinterrupted = $v;
            $this->modifiedColumns[] = MorphdatPeer::LLINTERRUPTED;
        }


        return $this;
    } // setLlinterrupted()

    /**
     * Set the value of [scaleslateralmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScaleslateralmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->scaleslateralmin !== $v) {
            $this->scaleslateralmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALESLATERALMIN;
        }


        return $this;
    } // setScaleslateralmin()

    /**
     * Set the value of [scaleslateralmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScaleslateralmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->scaleslateralmax !== $v) {
            $this->scaleslateralmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALESLATERALMAX;
        }


        return $this;
    } // setScaleslateralmax()

    /**
     * Set the value of [poredscalesmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPoredscalesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->poredscalesmin !== $v) {
            $this->poredscalesmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::POREDSCALESMIN;
        }


        return $this;
    } // setPoredscalesmin()

    /**
     * Set the value of [poredscalesmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPoredscalesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->poredscalesmax !== $v) {
            $this->poredscalesmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::POREDSCALESMAX;
        }


        return $this;
    } // setPoredscalesmax()

    /**
     * Set the value of [latseriesmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setLatseriesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latseriesmin !== $v) {
            $this->latseriesmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::LATSERIESMIN;
        }


        return $this;
    } // setLatseriesmin()

    /**
     * Set the value of [latseriesmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setLatseriesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->latseriesmax !== $v) {
            $this->latseriesmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::LATSERIESMAX;
        }


        return $this;
    } // setLatseriesmax()

    /**
     * Set the value of [scalerowsabovemin] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScalerowsabovemin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->scalerowsabovemin !== $v) {
            $this->scalerowsabovemin = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALEROWSABOVEMIN;
        }


        return $this;
    } // setScalerowsabovemin()

    /**
     * Set the value of [scalerowsabovemax] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScalerowsabovemax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->scalerowsabovemax !== $v) {
            $this->scalerowsabovemax = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALEROWSABOVEMAX;
        }


        return $this;
    } // setScalerowsabovemax()

    /**
     * Set the value of [scalerowsbelowmin] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScalerowsbelowmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->scalerowsbelowmin !== $v) {
            $this->scalerowsbelowmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALEROWSBELOWMIN;
        }


        return $this;
    } // setScalerowsbelowmin()

    /**
     * Set the value of [scalerowsbelowmax] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScalerowsbelowmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->scalerowsbelowmax !== $v) {
            $this->scalerowsbelowmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALEROWSBELOWMAX;
        }


        return $this;
    } // setScalerowsbelowmax()

    /**
     * Set the value of [scalespeduncmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScalespeduncmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->scalespeduncmin !== $v) {
            $this->scalespeduncmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALESPEDUNCMIN;
        }


        return $this;
    } // setScalespeduncmin()

    /**
     * Set the value of [scalespeduncmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setScalespeduncmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->scalespeduncmax !== $v) {
            $this->scalespeduncmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::SCALESPEDUNCMAX;
        }


        return $this;
    } // setScalespeduncmax()

    /**
     * Set the value of [barbelsno] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setBarbelsno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->barbelsno !== $v) {
            $this->barbelsno = $v;
            $this->modifiedColumns[] = MorphdatPeer::BARBELSNO;
        }


        return $this;
    } // setBarbelsno()

    /**
     * Set the value of [barbelstype] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setBarbelstype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->barbelstype !== $v) {
            $this->barbelstype = $v;
            $this->modifiedColumns[] = MorphdatPeer::BARBELSTYPE;
        }


        return $this;
    } // setBarbelstype()

    /**
     * Set the value of [gillcleftsno] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillcleftsno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillcleftsno !== $v) {
            $this->gillcleftsno = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLCLEFTSNO;
        }


        return $this;
    } // setGillcleftsno()

    /**
     * Set the value of [spiracle] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSpiracle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spiracle !== $v) {
            $this->spiracle = $v;
            $this->modifiedColumns[] = MorphdatPeer::SPIRACLE;
        }


        return $this;
    } // setSpiracle()

    /**
     * Set the value of [gillrakerslowmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillrakerslowmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillrakerslowmin !== $v) {
            $this->gillrakerslowmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLRAKERSLOWMIN;
        }


        return $this;
    } // setGillrakerslowmin()

    /**
     * Set the value of [gillrakerslowmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillrakerslowmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillrakerslowmax !== $v) {
            $this->gillrakerslowmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLRAKERSLOWMAX;
        }


        return $this;
    } // setGillrakerslowmax()

    /**
     * Set the value of [gillrakersupmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillrakersupmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillrakersupmin !== $v) {
            $this->gillrakersupmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLRAKERSUPMIN;
        }


        return $this;
    } // setGillrakersupmin()

    /**
     * Set the value of [gillrakersupmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillrakersupmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillrakersupmax !== $v) {
            $this->gillrakersupmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLRAKERSUPMAX;
        }


        return $this;
    } // setGillrakersupmax()

    /**
     * Set the value of [gillrakerstotalmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillrakerstotalmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillrakerstotalmin !== $v) {
            $this->gillrakerstotalmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLRAKERSTOTALMIN;
        }


        return $this;
    } // setGillrakerstotalmin()

    /**
     * Set the value of [gillrakerstotalmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setGillrakerstotalmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillrakerstotalmax !== $v) {
            $this->gillrakerstotalmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::GILLRAKERSTOTALMAX;
        }


        return $this;
    } // setGillrakerstotalmax()

    /**
     * Set the value of [vertebrae] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVertebrae($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vertebrae !== $v) {
            $this->vertebrae = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERTEBRAE;
        }


        return $this;
    } // setVertebrae()

    /**
     * Set the value of [vertebraepreanmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVertebraepreanmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vertebraepreanmin !== $v) {
            $this->vertebraepreanmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERTEBRAEPREANMIN;
        }


        return $this;
    } // setVertebraepreanmin()

    /**
     * Set the value of [vertebraepreanmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVertebraepreanmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vertebraepreanmax !== $v) {
            $this->vertebraepreanmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERTEBRAEPREANMAX;
        }


        return $this;
    } // setVertebraepreanmax()

    /**
     * Set the value of [vertebraetotalmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVertebraetotalmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vertebraetotalmin !== $v) {
            $this->vertebraetotalmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERTEBRAETOTALMIN;
        }


        return $this;
    } // setVertebraetotalmin()

    /**
     * Set the value of [vertebraetotalmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVertebraetotalmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vertebraetotalmax !== $v) {
            $this->vertebraetotalmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::VERTEBRAETOTALMAX;
        }


        return $this;
    } // setVertebraetotalmax()

    /**
     * Set the value of [dorsalattributes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalattributes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dorsalattributes !== $v) {
            $this->dorsalattributes = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALATTRIBUTES;
        }


        return $this;
    } // setDorsalattributes()

    /**
     * Set the value of [dfinno] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDfinno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dfinno !== $v) {
            $this->dfinno = $v;
            $this->modifiedColumns[] = MorphdatPeer::DFINNO;
        }


        return $this;
    } // setDfinno()

    /**
     * Set the value of [dorsalspinesmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalspinesmin !== $v) {
            $this->dorsalspinesmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALSPINESMIN;
        }


        return $this;
    } // setDorsalspinesmin()

    /**
     * Set the value of [dorsalspinesmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalspinesmax !== $v) {
            $this->dorsalspinesmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALSPINESMAX;
        }


        return $this;
    } // setDorsalspinesmax()

    /**
     * Set the value of [notched] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setNotched($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->notched !== $v) {
            $this->notched = $v;
            $this->modifiedColumns[] = MorphdatPeer::NOTCHED;
        }


        return $this;
    } // setNotched()

    /**
     * Set the value of [dorsalsoftraysmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalsoftraysmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalsoftraysmin !== $v) {
            $this->dorsalsoftraysmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALSOFTRAYSMIN;
        }


        return $this;
    } // setDorsalsoftraysmin()

    /**
     * Set the value of [dorsalsoftraysmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDorsalsoftraysmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalsoftraysmax !== $v) {
            $this->dorsalsoftraysmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::DORSALSOFTRAYSMAX;
        }


        return $this;
    } // setDorsalsoftraysmax()

    /**
     * Set the value of [adifin] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAdifin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adifin !== $v) {
            $this->adifin = $v;
            $this->modifiedColumns[] = MorphdatPeer::ADIFIN;
        }


        return $this;
    } // setAdifin()

    /**
     * Set the value of [dfinletsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDfinletsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dfinletsmin !== $v) {
            $this->dfinletsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::DFINLETSMIN;
        }


        return $this;
    } // setDfinletsmin()

    /**
     * Set the value of [dfinletsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDfinletsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dfinletsmax !== $v) {
            $this->dfinletsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::DFINLETSMAX;
        }


        return $this;
    } // setDfinletsmax()

    /**
     * Set the value of [vfinletsmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVfinletsmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vfinletsmin !== $v) {
            $this->vfinletsmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::VFINLETSMIN;
        }


        return $this;
    } // setVfinletsmin()

    /**
     * Set the value of [vfinletsmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVfinletsmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vfinletsmax !== $v) {
            $this->vfinletsmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::VFINLETSMAX;
        }


        return $this;
    } // setVfinletsmax()

    /**
     * Set the value of [cshape] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCshape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cshape !== $v) {
            $this->cshape = $v;
            $this->modifiedColumns[] = MorphdatPeer::CSHAPE;
        }


        return $this;
    } // setCshape()

    /**
     * Set the value of [attributes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAttributes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attributes !== $v) {
            $this->attributes = $v;
            $this->modifiedColumns[] = MorphdatPeer::ATTRIBUTES;
        }


        return $this;
    } // setAttributes()

    /**
     * Set the value of [afinno] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAfinno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->afinno !== $v) {
            $this->afinno = $v;
            $this->modifiedColumns[] = MorphdatPeer::AFINNO;
        }


        return $this;
    } // setAfinno()

    /**
     * Set the value of [analfinspinesmin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAnalfinspinesmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->analfinspinesmin !== $v) {
            $this->analfinspinesmin = $v;
            $this->modifiedColumns[] = MorphdatPeer::ANALFINSPINESMIN;
        }


        return $this;
    } // setAnalfinspinesmin()

    /**
     * Set the value of [analfinspinesmax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAnalfinspinesmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->analfinspinesmax !== $v) {
            $this->analfinspinesmax = $v;
            $this->modifiedColumns[] = MorphdatPeer::ANALFINSPINESMAX;
        }


        return $this;
    } // setAnalfinspinesmax()

    /**
     * Set the value of [araymin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAraymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->araymin !== $v) {
            $this->araymin = $v;
            $this->modifiedColumns[] = MorphdatPeer::ARAYMIN;
        }


        return $this;
    } // setAraymin()

    /**
     * Set the value of [araymax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAraymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->araymax !== $v) {
            $this->araymax = $v;
            $this->modifiedColumns[] = MorphdatPeer::ARAYMAX;
        }


        return $this;
    } // setAraymax()

    /**
     * Set the value of [pectoralattributes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPectoralattributes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pectoralattributes !== $v) {
            $this->pectoralattributes = $v;
            $this->modifiedColumns[] = MorphdatPeer::PECTORALATTRIBUTES;
        }


        return $this;
    } // setPectoralattributes()

    /**
     * Set the value of [pspines2] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPspines2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pspines2 !== $v) {
            $this->pspines2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::PSPINES2;
        }


        return $this;
    } // setPspines2()

    /**
     * Set the value of [praymin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPraymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->praymin !== $v) {
            $this->praymin = $v;
            $this->modifiedColumns[] = MorphdatPeer::PRAYMIN;
        }


        return $this;
    } // setPraymin()

    /**
     * Set the value of [praymax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPraymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->praymax !== $v) {
            $this->praymax = $v;
            $this->modifiedColumns[] = MorphdatPeer::PRAYMAX;
        }


        return $this;
    } // setPraymax()

    /**
     * Set the value of [pelvicsattributes] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPelvicsattributes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pelvicsattributes !== $v) {
            $this->pelvicsattributes = $v;
            $this->modifiedColumns[] = MorphdatPeer::PELVICSATTRIBUTES;
        }


        return $this;
    } // setPelvicsattributes()

    /**
     * Set the value of [vposition] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vposition !== $v) {
            $this->vposition = $v;
            $this->modifiedColumns[] = MorphdatPeer::VPOSITION;
        }


        return $this;
    } // setVposition()

    /**
     * Set the value of [vposition2] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVposition2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vposition2 !== $v) {
            $this->vposition2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::VPOSITION2;
        }


        return $this;
    } // setVposition2()

    /**
     * Set the value of [vspines] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVspines($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vspines !== $v) {
            $this->vspines = $v;
            $this->modifiedColumns[] = MorphdatPeer::VSPINES;
        }


        return $this;
    } // setVspines()

    /**
     * Set the value of [vraymin] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVraymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vraymin !== $v) {
            $this->vraymin = $v;
            $this->modifiedColumns[] = MorphdatPeer::VRAYMIN;
        }


        return $this;
    } // setVraymin()

    /**
     * Set the value of [vraymax] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setVraymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vraymax !== $v) {
            $this->vraymax = $v;
            $this->modifiedColumns[] = MorphdatPeer::VRAYMAX;
        }


        return $this;
    } // setVraymax()

    /**
     * Set the value of [standardlengthcm] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setStandardlengthcm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->standardlengthcm !== $v) {
            $this->standardlengthcm = $v;
            $this->modifiedColumns[] = MorphdatPeer::STANDARDLENGTHCM;
        }


        return $this;
    } // setStandardlengthcm()

    /**
     * Set the value of [forklength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setForklength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->forklength !== $v) {
            $this->forklength = $v;
            $this->modifiedColumns[] = MorphdatPeer::FORKLENGTH;
        }


        return $this;
    } // setForklength()

    /**
     * Set the value of [totallength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setTotallength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->totallength !== $v) {
            $this->totallength = $v;
            $this->modifiedColumns[] = MorphdatPeer::TOTALLENGTH;
        }


        return $this;
    } // setTotallength()

    /**
     * Set the value of [headlength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setHeadlength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headlength !== $v) {
            $this->headlength = $v;
            $this->modifiedColumns[] = MorphdatPeer::HEADLENGTH;
        }


        return $this;
    } // setHeadlength()

    /**
     * Set the value of [predorsallength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPredorsallength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->predorsallength !== $v) {
            $this->predorsallength = $v;
            $this->modifiedColumns[] = MorphdatPeer::PREDORSALLENGTH;
        }


        return $this;
    } // setPredorsallength()

    /**
     * Set the value of [prepelvicslength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPrepelvicslength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepelvicslength !== $v) {
            $this->prepelvicslength = $v;
            $this->modifiedColumns[] = MorphdatPeer::PREPELVICSLENGTH;
        }


        return $this;
    } // setPrepelvicslength()

    /**
     * Set the value of [preanallength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPreanallength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallength !== $v) {
            $this->preanallength = $v;
            $this->modifiedColumns[] = MorphdatPeer::PREANALLENGTH;
        }


        return $this;
    } // setPreanallength()

    /**
     * Set the value of [postheaddepth] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPostheaddepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->postheaddepth !== $v) {
            $this->postheaddepth = $v;
            $this->modifiedColumns[] = MorphdatPeer::POSTHEADDEPTH;
        }


        return $this;
    } // setPostheaddepth()

    /**
     * Set the value of [posttrunkdepth] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPosttrunkdepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->posttrunkdepth !== $v) {
            $this->posttrunkdepth = $v;
            $this->modifiedColumns[] = MorphdatPeer::POSTTRUNKDEPTH;
        }


        return $this;
    } // setPosttrunkdepth()

    /**
     * Set the value of [maximumdepth] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setMaximumdepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->maximumdepth !== $v) {
            $this->maximumdepth = $v;
            $this->modifiedColumns[] = MorphdatPeer::MAXIMUMDEPTH;
        }


        return $this;
    } // setMaximumdepth()

    /**
     * Set the value of [peduncledepth] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPeduncledepth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->peduncledepth !== $v) {
            $this->peduncledepth = $v;
            $this->modifiedColumns[] = MorphdatPeer::PEDUNCLEDEPTH;
        }


        return $this;
    } // setPeduncledepth()

    /**
     * Set the value of [pedunclelength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPedunclelength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pedunclelength !== $v) {
            $this->pedunclelength = $v;
            $this->modifiedColumns[] = MorphdatPeer::PEDUNCLELENGTH;
        }


        return $this;
    } // setPedunclelength()

    /**
     * Set the value of [caudalheight] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setCaudalheight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->caudalheight !== $v) {
            $this->caudalheight = $v;
            $this->modifiedColumns[] = MorphdatPeer::CAUDALHEIGHT;
        }


        return $this;
    } // setCaudalheight()

    /**
     * Set the value of [preorbitallength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setPreorbitallength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitallength !== $v) {
            $this->preorbitallength = $v;
            $this->modifiedColumns[] = MorphdatPeer::PREORBITALLENGTH;
        }


        return $this;
    } // setPreorbitallength()

    /**
     * Set the value of [eyelength] column.
     *
     * @param  double $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setEyelength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->eyelength !== $v) {
            $this->eyelength = $v;
            $this->modifiedColumns[] = MorphdatPeer::EYELENGTH;
        }


        return $this;
    } // setEyelength()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = MorphdatPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = MorphdatPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = MorphdatPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = MorphdatPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = MorphdatPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphdat The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = MorphdatPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remarksex] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setRemarksex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarksex !== $v) {
            $this->remarksex = $v;
            $this->modifiedColumns[] = MorphdatPeer::REMARKSEX;
        }


        return $this;
    } // setRemarksex()

    /**
     * Set the value of [addchars] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setAddchars($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addchars !== $v) {
            $this->addchars = $v;
            $this->modifiedColumns[] = MorphdatPeer::ADDCHARS;
        }


        return $this;
    } // setAddchars()

    /**
     * Set the value of [similarspecies1] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSimilarspecies1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->similarspecies1 !== $v) {
            $this->similarspecies1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::SIMILARSPECIES1;
        }


        return $this;
    } // setSimilarspecies1()

    /**
     * Set the value of [similarspec1remarks] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSimilarspec1remarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->similarspec1remarks !== $v) {
            $this->similarspec1remarks = $v;
            $this->modifiedColumns[] = MorphdatPeer::SIMILARSPEC1REMARKS;
        }


        return $this;
    } // setSimilarspec1remarks()

    /**
     * Set the value of [similarspecies2] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSimilarspecies2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->similarspecies2 !== $v) {
            $this->similarspecies2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::SIMILARSPECIES2;
        }


        return $this;
    } // setSimilarspecies2()

    /**
     * Set the value of [similarspec2remarks] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setSimilarspec2remarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->similarspec2remarks !== $v) {
            $this->similarspec2remarks = $v;
            $this->modifiedColumns[] = MorphdatPeer::SIMILARSPEC2REMARKS;
        }


        return $this;
    } // setSimilarspec2remarks()

    /**
     * Set the value of [easeofid] column.
     *
     * @param  string $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setEaseofid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->easeofid !== $v) {
            $this->easeofid = $v;
            $this->modifiedColumns[] = MorphdatPeer::EASEOFID;
        }


        return $this;
    } // setEaseofid()

    /**
     * Set the value of [otherref1] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setOtherref1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherref1 !== $v) {
            $this->otherref1 = $v;
            $this->modifiedColumns[] = MorphdatPeer::OTHERREF1;
        }


        return $this;
    } // setOtherref1()

    /**
     * Set the value of [otherref2] column.
     *
     * @param  int $v new value
     * @return Morphdat The current object (for fluent API support)
     */
    public function setOtherref2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherref2 !== $v) {
            $this->otherref2 = $v;
            $this->modifiedColumns[] = MorphdatPeer::OTHERREF2;
        }


        return $this;
    } // setOtherref2()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Morphdat The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = MorphdatPeer::TS;
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
            $this->morphdatrefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->females = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->males = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->appearancepic = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->sexualattributes = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->sexmorphology = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->sexcolors = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->strikingfeatures = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->bodyshapei = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->bodyshapeii = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->forehead = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->operculumpresent = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->typeofeyes = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->typeofmouth = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->posofmouth = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->mandibleteeth = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->mandibleteetht1 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->mandibleteetht2 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->mandiblerowsmin = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->mandiblerowsmax = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->maxillateeth = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->maxillateetht1 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->maxillateetht2 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->maxillarowsmin = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->maxillarowsmax = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->vomerineteeth = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->vomerineteetht1 = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->vomerineteetht2 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->vomerinerowsmin = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->vomerinerowsmax = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->palatine = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->palatineteetht1 = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->palatineteetht2 = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->palatinerowsmin = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->palatinerowsmax = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->pharyngealteeth = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->pharyngealteetht1 = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->pharyngealteetht2 = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->pharyngealrowsmin = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->pharyngealrowsmax = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->teethontongue = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->lipsteeth = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->dermalteeth = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->commentonteeth = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->typeofscales = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->scutes = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->keels = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->horstripestti = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->horstripesttii = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->verstripestti = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->verstripesttii = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->verstripesttiii = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->diastripestti = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->diastripesttii = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->diastripesttiii = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->curstripestti = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->curstripesttii = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->curstripesttiii = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->spotstti = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->spotsttii = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->spotsttiii = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->dorsalfini = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->dorsalfinii = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->caudalfini = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->caudalfinii = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->analfini = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->analfinii = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->laterallinesno = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->llinterrupted = ($row[$startcol + 71] !== null) ? (boolean) $row[$startcol + 71] : null;
            $this->scaleslateralmin = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->scaleslateralmax = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->poredscalesmin = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->poredscalesmax = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->latseriesmin = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->latseriesmax = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->scalerowsabovemin = ($row[$startcol + 78] !== null) ? (double) $row[$startcol + 78] : null;
            $this->scalerowsabovemax = ($row[$startcol + 79] !== null) ? (double) $row[$startcol + 79] : null;
            $this->scalerowsbelowmin = ($row[$startcol + 80] !== null) ? (double) $row[$startcol + 80] : null;
            $this->scalerowsbelowmax = ($row[$startcol + 81] !== null) ? (double) $row[$startcol + 81] : null;
            $this->scalespeduncmin = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->scalespeduncmax = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->barbelsno = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->barbelstype = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->gillcleftsno = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->spiracle = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->gillrakerslowmin = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->gillrakerslowmax = ($row[$startcol + 89] !== null) ? (int) $row[$startcol + 89] : null;
            $this->gillrakersupmin = ($row[$startcol + 90] !== null) ? (int) $row[$startcol + 90] : null;
            $this->gillrakersupmax = ($row[$startcol + 91] !== null) ? (int) $row[$startcol + 91] : null;
            $this->gillrakerstotalmin = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->gillrakerstotalmax = ($row[$startcol + 93] !== null) ? (int) $row[$startcol + 93] : null;
            $this->vertebrae = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->vertebraepreanmin = ($row[$startcol + 95] !== null) ? (int) $row[$startcol + 95] : null;
            $this->vertebraepreanmax = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->vertebraetotalmin = ($row[$startcol + 97] !== null) ? (int) $row[$startcol + 97] : null;
            $this->vertebraetotalmax = ($row[$startcol + 98] !== null) ? (int) $row[$startcol + 98] : null;
            $this->dorsalattributes = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->dfinno = ($row[$startcol + 100] !== null) ? (int) $row[$startcol + 100] : null;
            $this->dorsalspinesmin = ($row[$startcol + 101] !== null) ? (int) $row[$startcol + 101] : null;
            $this->dorsalspinesmax = ($row[$startcol + 102] !== null) ? (int) $row[$startcol + 102] : null;
            $this->notched = ($row[$startcol + 103] !== null) ? (int) $row[$startcol + 103] : null;
            $this->dorsalsoftraysmin = ($row[$startcol + 104] !== null) ? (int) $row[$startcol + 104] : null;
            $this->dorsalsoftraysmax = ($row[$startcol + 105] !== null) ? (int) $row[$startcol + 105] : null;
            $this->adifin = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->dfinletsmin = ($row[$startcol + 107] !== null) ? (int) $row[$startcol + 107] : null;
            $this->dfinletsmax = ($row[$startcol + 108] !== null) ? (int) $row[$startcol + 108] : null;
            $this->vfinletsmin = ($row[$startcol + 109] !== null) ? (int) $row[$startcol + 109] : null;
            $this->vfinletsmax = ($row[$startcol + 110] !== null) ? (int) $row[$startcol + 110] : null;
            $this->cshape = ($row[$startcol + 111] !== null) ? (string) $row[$startcol + 111] : null;
            $this->attributes = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->afinno = ($row[$startcol + 113] !== null) ? (int) $row[$startcol + 113] : null;
            $this->analfinspinesmin = ($row[$startcol + 114] !== null) ? (int) $row[$startcol + 114] : null;
            $this->analfinspinesmax = ($row[$startcol + 115] !== null) ? (int) $row[$startcol + 115] : null;
            $this->araymin = ($row[$startcol + 116] !== null) ? (int) $row[$startcol + 116] : null;
            $this->araymax = ($row[$startcol + 117] !== null) ? (int) $row[$startcol + 117] : null;
            $this->pectoralattributes = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->pspines2 = ($row[$startcol + 119] !== null) ? (int) $row[$startcol + 119] : null;
            $this->praymin = ($row[$startcol + 120] !== null) ? (int) $row[$startcol + 120] : null;
            $this->praymax = ($row[$startcol + 121] !== null) ? (int) $row[$startcol + 121] : null;
            $this->pelvicsattributes = ($row[$startcol + 122] !== null) ? (string) $row[$startcol + 122] : null;
            $this->vposition = ($row[$startcol + 123] !== null) ? (string) $row[$startcol + 123] : null;
            $this->vposition2 = ($row[$startcol + 124] !== null) ? (string) $row[$startcol + 124] : null;
            $this->vspines = ($row[$startcol + 125] !== null) ? (int) $row[$startcol + 125] : null;
            $this->vraymin = ($row[$startcol + 126] !== null) ? (int) $row[$startcol + 126] : null;
            $this->vraymax = ($row[$startcol + 127] !== null) ? (int) $row[$startcol + 127] : null;
            $this->standardlengthcm = ($row[$startcol + 128] !== null) ? (double) $row[$startcol + 128] : null;
            $this->forklength = ($row[$startcol + 129] !== null) ? (double) $row[$startcol + 129] : null;
            $this->totallength = ($row[$startcol + 130] !== null) ? (double) $row[$startcol + 130] : null;
            $this->headlength = ($row[$startcol + 131] !== null) ? (double) $row[$startcol + 131] : null;
            $this->predorsallength = ($row[$startcol + 132] !== null) ? (double) $row[$startcol + 132] : null;
            $this->prepelvicslength = ($row[$startcol + 133] !== null) ? (double) $row[$startcol + 133] : null;
            $this->preanallength = ($row[$startcol + 134] !== null) ? (double) $row[$startcol + 134] : null;
            $this->postheaddepth = ($row[$startcol + 135] !== null) ? (double) $row[$startcol + 135] : null;
            $this->posttrunkdepth = ($row[$startcol + 136] !== null) ? (double) $row[$startcol + 136] : null;
            $this->maximumdepth = ($row[$startcol + 137] !== null) ? (double) $row[$startcol + 137] : null;
            $this->peduncledepth = ($row[$startcol + 138] !== null) ? (double) $row[$startcol + 138] : null;
            $this->pedunclelength = ($row[$startcol + 139] !== null) ? (double) $row[$startcol + 139] : null;
            $this->caudalheight = ($row[$startcol + 140] !== null) ? (double) $row[$startcol + 140] : null;
            $this->preorbitallength = ($row[$startcol + 141] !== null) ? (double) $row[$startcol + 141] : null;
            $this->eyelength = ($row[$startcol + 142] !== null) ? (double) $row[$startcol + 142] : null;
            $this->entered = ($row[$startcol + 143] !== null) ? (int) $row[$startcol + 143] : null;
            $this->dateentered = ($row[$startcol + 144] !== null) ? (string) $row[$startcol + 144] : null;
            $this->modified = ($row[$startcol + 145] !== null) ? (int) $row[$startcol + 145] : null;
            $this->datemodified = ($row[$startcol + 146] !== null) ? (string) $row[$startcol + 146] : null;
            $this->expert = ($row[$startcol + 147] !== null) ? (int) $row[$startcol + 147] : null;
            $this->datechecked = ($row[$startcol + 148] !== null) ? (string) $row[$startcol + 148] : null;
            $this->remarksex = ($row[$startcol + 149] !== null) ? (string) $row[$startcol + 149] : null;
            $this->addchars = ($row[$startcol + 150] !== null) ? (string) $row[$startcol + 150] : null;
            $this->similarspecies1 = ($row[$startcol + 151] !== null) ? (int) $row[$startcol + 151] : null;
            $this->similarspec1remarks = ($row[$startcol + 152] !== null) ? (string) $row[$startcol + 152] : null;
            $this->similarspecies2 = ($row[$startcol + 153] !== null) ? (int) $row[$startcol + 153] : null;
            $this->similarspec2remarks = ($row[$startcol + 154] !== null) ? (string) $row[$startcol + 154] : null;
            $this->easeofid = ($row[$startcol + 155] !== null) ? (string) $row[$startcol + 155] : null;
            $this->otherref1 = ($row[$startcol + 156] !== null) ? (int) $row[$startcol + 156] : null;
            $this->otherref2 = ($row[$startcol + 157] !== null) ? (int) $row[$startcol + 157] : null;
            $this->ts = ($row[$startcol + 158] !== null) ? (string) $row[$startcol + 158] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 159; // 159 = MorphdatPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Morphdat object", $e);
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
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MorphdatPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MorphdatQuery::create()
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
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MorphdatPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(MorphdatPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(MorphdatPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(MorphdatPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(MorphdatPeer::MORPHDATREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`MorphDatRefNo`';
        }
        if ($this->isColumnModified(MorphdatPeer::FEMALES)) {
            $modifiedColumns[':p' . $index++]  = '`Females`';
        }
        if ($this->isColumnModified(MorphdatPeer::MALES)) {
            $modifiedColumns[':p' . $index++]  = '`Males`';
        }
        if ($this->isColumnModified(MorphdatPeer::APPEARANCEPIC)) {
            $modifiedColumns[':p' . $index++]  = '`AppearancePic`';
        }
        if ($this->isColumnModified(MorphdatPeer::SEXUALATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`SexualAttributes`';
        }
        if ($this->isColumnModified(MorphdatPeer::SEXMORPHOLOGY)) {
            $modifiedColumns[':p' . $index++]  = '`SexMorphology`';
        }
        if ($this->isColumnModified(MorphdatPeer::SEXCOLORS)) {
            $modifiedColumns[':p' . $index++]  = '`SexColors`';
        }
        if ($this->isColumnModified(MorphdatPeer::STRIKINGFEATURES)) {
            $modifiedColumns[':p' . $index++]  = '`StrikingFeatures`';
        }
        if ($this->isColumnModified(MorphdatPeer::BODYSHAPEI)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeI`';
        }
        if ($this->isColumnModified(MorphdatPeer::BODYSHAPEII)) {
            $modifiedColumns[':p' . $index++]  = '`BodyShapeII`';
        }
        if ($this->isColumnModified(MorphdatPeer::FOREHEAD)) {
            $modifiedColumns[':p' . $index++]  = '`Forehead`';
        }
        if ($this->isColumnModified(MorphdatPeer::OPERCULUMPRESENT)) {
            $modifiedColumns[':p' . $index++]  = '`OperculumPresent`';
        }
        if ($this->isColumnModified(MorphdatPeer::TYPEOFEYES)) {
            $modifiedColumns[':p' . $index++]  = '`TypeofEyes`';
        }
        if ($this->isColumnModified(MorphdatPeer::TYPEOFMOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`TypeofMouth`';
        }
        if ($this->isColumnModified(MorphdatPeer::POSOFMOUTH)) {
            $modifiedColumns[':p' . $index++]  = '`PosofMouth`';
        }
        if ($this->isColumnModified(MorphdatPeer::MANDIBLETEETH)) {
            $modifiedColumns[':p' . $index++]  = '`MandibleTeeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::MANDIBLETEETHT1)) {
            $modifiedColumns[':p' . $index++]  = '`MandibleTeethT1`';
        }
        if ($this->isColumnModified(MorphdatPeer::MANDIBLETEETHT2)) {
            $modifiedColumns[':p' . $index++]  = '`MandibleTeethT2`';
        }
        if ($this->isColumnModified(MorphdatPeer::MANDIBLEROWSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MandibleRowsMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::MANDIBLEROWSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MandibleRowsMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::MAXILLATEETH)) {
            $modifiedColumns[':p' . $index++]  = '`MaxillaTeeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::MAXILLATEETHT1)) {
            $modifiedColumns[':p' . $index++]  = '`MaxillaTeethT1`';
        }
        if ($this->isColumnModified(MorphdatPeer::MAXILLATEETHT2)) {
            $modifiedColumns[':p' . $index++]  = '`MaxillaTeethT2`';
        }
        if ($this->isColumnModified(MorphdatPeer::MAXILLAROWSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MaxillaRowsMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::MAXILLAROWSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MaxillaRowsMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::VOMERINETEETH)) {
            $modifiedColumns[':p' . $index++]  = '`VomerineTeeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::VOMERINETEETHT1)) {
            $modifiedColumns[':p' . $index++]  = '`VomerineTeethT1`';
        }
        if ($this->isColumnModified(MorphdatPeer::VOMERINETEETHT2)) {
            $modifiedColumns[':p' . $index++]  = '`VomerineTeethT2`';
        }
        if ($this->isColumnModified(MorphdatPeer::VOMERINEROWSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VomerineRowsMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::VOMERINEROWSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VomerineRowsMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::PALATINE)) {
            $modifiedColumns[':p' . $index++]  = '`Palatine`';
        }
        if ($this->isColumnModified(MorphdatPeer::PALATINETEETHT1)) {
            $modifiedColumns[':p' . $index++]  = '`PalatineTeethT1`';
        }
        if ($this->isColumnModified(MorphdatPeer::PALATINETEETHT2)) {
            $modifiedColumns[':p' . $index++]  = '`PalatineTeethT2`';
        }
        if ($this->isColumnModified(MorphdatPeer::PALATINEROWSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PalatineRowsMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::PALATINEROWSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`PalatineRowsMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALTEETH)) {
            $modifiedColumns[':p' . $index++]  = '`PharyngealTeeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALTEETHT1)) {
            $modifiedColumns[':p' . $index++]  = '`PharyngealTeethT1`';
        }
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALTEETHT2)) {
            $modifiedColumns[':p' . $index++]  = '`PharyngealTeethT2`';
        }
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALROWSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PharyngealRowsMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALROWSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`PharyngealRowsMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::TEETHONTONGUE)) {
            $modifiedColumns[':p' . $index++]  = '`TeethonTongue`';
        }
        if ($this->isColumnModified(MorphdatPeer::LIPSTEETH)) {
            $modifiedColumns[':p' . $index++]  = '`Lipsteeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::DERMALTEETH)) {
            $modifiedColumns[':p' . $index++]  = '`DermalTeeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::COMMENTONTEETH)) {
            $modifiedColumns[':p' . $index++]  = '`CommentonTeeth`';
        }
        if ($this->isColumnModified(MorphdatPeer::TYPEOFSCALES)) {
            $modifiedColumns[':p' . $index++]  = '`TypeofScales`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCUTES)) {
            $modifiedColumns[':p' . $index++]  = '`Scutes`';
        }
        if ($this->isColumnModified(MorphdatPeer::KEELS)) {
            $modifiedColumns[':p' . $index++]  = '`Keels`';
        }
        if ($this->isColumnModified(MorphdatPeer::HORSTRIPESTTI)) {
            $modifiedColumns[':p' . $index++]  = '`HorStripesTTI`';
        }
        if ($this->isColumnModified(MorphdatPeer::HORSTRIPESTTII)) {
            $modifiedColumns[':p' . $index++]  = '`HorStripesTTII`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERSTRIPESTTI)) {
            $modifiedColumns[':p' . $index++]  = '`VerStripesTTI`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERSTRIPESTTII)) {
            $modifiedColumns[':p' . $index++]  = '`VerStripesTTII`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERSTRIPESTTIII)) {
            $modifiedColumns[':p' . $index++]  = '`VerStripesTTIII`';
        }
        if ($this->isColumnModified(MorphdatPeer::DIASTRIPESTTI)) {
            $modifiedColumns[':p' . $index++]  = '`DiaStripesTTI`';
        }
        if ($this->isColumnModified(MorphdatPeer::DIASTRIPESTTII)) {
            $modifiedColumns[':p' . $index++]  = '`DiaStripesTTII`';
        }
        if ($this->isColumnModified(MorphdatPeer::DIASTRIPESTTIII)) {
            $modifiedColumns[':p' . $index++]  = '`DiaStripesTTIII`';
        }
        if ($this->isColumnModified(MorphdatPeer::CURSTRIPESTTI)) {
            $modifiedColumns[':p' . $index++]  = '`CurStripesTTI`';
        }
        if ($this->isColumnModified(MorphdatPeer::CURSTRIPESTTII)) {
            $modifiedColumns[':p' . $index++]  = '`CurStripesTTII`';
        }
        if ($this->isColumnModified(MorphdatPeer::CURSTRIPESTTIII)) {
            $modifiedColumns[':p' . $index++]  = '`CurStripesTTIII`';
        }
        if ($this->isColumnModified(MorphdatPeer::SPOTSTTI)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsTTI`';
        }
        if ($this->isColumnModified(MorphdatPeer::SPOTSTTII)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsTTII`';
        }
        if ($this->isColumnModified(MorphdatPeer::SPOTSTTIII)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsTTIII`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALFINI)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalFinI`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALFINII)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalFinII`';
        }
        if ($this->isColumnModified(MorphdatPeer::CAUDALFINI)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalFinI`';
        }
        if ($this->isColumnModified(MorphdatPeer::CAUDALFINII)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalFinII`';
        }
        if ($this->isColumnModified(MorphdatPeer::ANALFINI)) {
            $modifiedColumns[':p' . $index++]  = '`AnalFinI`';
        }
        if ($this->isColumnModified(MorphdatPeer::ANALFINII)) {
            $modifiedColumns[':p' . $index++]  = '`AnalFinII`';
        }
        if ($this->isColumnModified(MorphdatPeer::LATERALLINESNO)) {
            $modifiedColumns[':p' . $index++]  = '`LateralLinesNo`';
        }
        if ($this->isColumnModified(MorphdatPeer::LLINTERRUPTED)) {
            $modifiedColumns[':p' . $index++]  = '`LLinterrupted`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALESLATERALMIN)) {
            $modifiedColumns[':p' . $index++]  = '`ScalesLateralmin`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALESLATERALMAX)) {
            $modifiedColumns[':p' . $index++]  = '`ScalesLateralmax`';
        }
        if ($this->isColumnModified(MorphdatPeer::POREDSCALESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`PoredScalesMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::POREDSCALESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`PoredScalesMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::LATSERIESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LatSeriesMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::LATSERIESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LatSeriesMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSABOVEMIN)) {
            $modifiedColumns[':p' . $index++]  = '`ScaleRowsAboveMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSABOVEMAX)) {
            $modifiedColumns[':p' . $index++]  = '`ScaleRowsAboveMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSBELOWMIN)) {
            $modifiedColumns[':p' . $index++]  = '`ScaleRowsBelowMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSBELOWMAX)) {
            $modifiedColumns[':p' . $index++]  = '`ScaleRowsBelowMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALESPEDUNCMIN)) {
            $modifiedColumns[':p' . $index++]  = '`ScalesPeduncMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::SCALESPEDUNCMAX)) {
            $modifiedColumns[':p' . $index++]  = '`ScalesPeduncMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::BARBELSNO)) {
            $modifiedColumns[':p' . $index++]  = '`BarbelsNo`';
        }
        if ($this->isColumnModified(MorphdatPeer::BARBELSTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`BarbelsType`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLCLEFTSNO)) {
            $modifiedColumns[':p' . $index++]  = '`GillCleftsNo`';
        }
        if ($this->isColumnModified(MorphdatPeer::SPIRACLE)) {
            $modifiedColumns[':p' . $index++]  = '`Spiracle`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSLOWMIN)) {
            $modifiedColumns[':p' . $index++]  = '`GillRakersLowMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSLOWMAX)) {
            $modifiedColumns[':p' . $index++]  = '`GillRakersLowMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSUPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`GillRakersUpMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSUPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`GillRakersUpMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSTOTALMIN)) {
            $modifiedColumns[':p' . $index++]  = '`GillRakersTotalMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSTOTALMAX)) {
            $modifiedColumns[':p' . $index++]  = '`GillRakersTotalMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAE)) {
            $modifiedColumns[':p' . $index++]  = '`Vertebrae`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAEPREANMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VertebraePreanMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAEPREANMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VertebraePreanMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAETOTALMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VertebraeTotalMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAETOTALMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VertebraeTotalMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalAttributes`';
        }
        if ($this->isColumnModified(MorphdatPeer::DFINNO)) {
            $modifiedColumns[':p' . $index++]  = '`Dfinno`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALSPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalSpinesMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALSPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalSpinesMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::NOTCHED)) {
            $modifiedColumns[':p' . $index++]  = '`Notched`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALSOFTRAYSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalSoftRaysMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::DORSALSOFTRAYSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalSoftRaysMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::ADIFIN)) {
            $modifiedColumns[':p' . $index++]  = '`Adifin`';
        }
        if ($this->isColumnModified(MorphdatPeer::DFINLETSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`DFinletsmin`';
        }
        if ($this->isColumnModified(MorphdatPeer::DFINLETSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`DFinletsmax`';
        }
        if ($this->isColumnModified(MorphdatPeer::VFINLETSMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VFinletsmin`';
        }
        if ($this->isColumnModified(MorphdatPeer::VFINLETSMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VFinletsmax`';
        }
        if ($this->isColumnModified(MorphdatPeer::CSHAPE)) {
            $modifiedColumns[':p' . $index++]  = '`CShape`';
        }
        if ($this->isColumnModified(MorphdatPeer::ATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`Attributes`';
        }
        if ($this->isColumnModified(MorphdatPeer::AFINNO)) {
            $modifiedColumns[':p' . $index++]  = '`Afinno`';
        }
        if ($this->isColumnModified(MorphdatPeer::ANALFINSPINESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`AnalFinSpinesMin`';
        }
        if ($this->isColumnModified(MorphdatPeer::ANALFINSPINESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`AnalFinSpinesMax`';
        }
        if ($this->isColumnModified(MorphdatPeer::ARAYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Araymin`';
        }
        if ($this->isColumnModified(MorphdatPeer::ARAYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Araymax`';
        }
        if ($this->isColumnModified(MorphdatPeer::PECTORALATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`PectoralAttributes`';
        }
        if ($this->isColumnModified(MorphdatPeer::PSPINES2)) {
            $modifiedColumns[':p' . $index++]  = '`Pspines2`';
        }
        if ($this->isColumnModified(MorphdatPeer::PRAYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Praymin`';
        }
        if ($this->isColumnModified(MorphdatPeer::PRAYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Praymax`';
        }
        if ($this->isColumnModified(MorphdatPeer::PELVICSATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`PelvicsAttributes`';
        }
        if ($this->isColumnModified(MorphdatPeer::VPOSITION)) {
            $modifiedColumns[':p' . $index++]  = '`VPosition`';
        }
        if ($this->isColumnModified(MorphdatPeer::VPOSITION2)) {
            $modifiedColumns[':p' . $index++]  = '`VPosition2`';
        }
        if ($this->isColumnModified(MorphdatPeer::VSPINES)) {
            $modifiedColumns[':p' . $index++]  = '`Vspines`';
        }
        if ($this->isColumnModified(MorphdatPeer::VRAYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`Vraymin`';
        }
        if ($this->isColumnModified(MorphdatPeer::VRAYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`Vraymax`';
        }
        if ($this->isColumnModified(MorphdatPeer::STANDARDLENGTHCM)) {
            $modifiedColumns[':p' . $index++]  = '`StandardLengthCm`';
        }
        if ($this->isColumnModified(MorphdatPeer::FORKLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Forklength`';
        }
        if ($this->isColumnModified(MorphdatPeer::TOTALLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Totallength`';
        }
        if ($this->isColumnModified(MorphdatPeer::HEADLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`HeadLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::PREDORSALLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`PreDorsalLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::PREPELVICSLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`PrePelvicsLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::PREANALLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`PreAnalLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::POSTHEADDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`PostHeadDepth`';
        }
        if ($this->isColumnModified(MorphdatPeer::POSTTRUNKDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`PostTrunkDepth`';
        }
        if ($this->isColumnModified(MorphdatPeer::MAXIMUMDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`MaximumDepth`';
        }
        if ($this->isColumnModified(MorphdatPeer::PEDUNCLEDEPTH)) {
            $modifiedColumns[':p' . $index++]  = '`PeduncleDepth`';
        }
        if ($this->isColumnModified(MorphdatPeer::PEDUNCLELENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`PeduncleLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::CAUDALHEIGHT)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalHeight`';
        }
        if ($this->isColumnModified(MorphdatPeer::PREORBITALLENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::EYELENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`EyeLength`';
        }
        if ($this->isColumnModified(MorphdatPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(MorphdatPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(MorphdatPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(MorphdatPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(MorphdatPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(MorphdatPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(MorphdatPeer::REMARKSEX)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkSex`';
        }
        if ($this->isColumnModified(MorphdatPeer::ADDCHARS)) {
            $modifiedColumns[':p' . $index++]  = '`AddChars`';
        }
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPECIES1)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpecies1`';
        }
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPEC1REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpec1Remarks`';
        }
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPECIES2)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpecies2`';
        }
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPEC2REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpec2Remarks`';
        }
        if ($this->isColumnModified(MorphdatPeer::EASEOFID)) {
            $modifiedColumns[':p' . $index++]  = '`EaseofID`';
        }
        if ($this->isColumnModified(MorphdatPeer::OTHERREF1)) {
            $modifiedColumns[':p' . $index++]  = '`OtherRef1`';
        }
        if ($this->isColumnModified(MorphdatPeer::OTHERREF2)) {
            $modifiedColumns[':p' . $index++]  = '`OtherRef2`';
        }
        if ($this->isColumnModified(MorphdatPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `morphdat` (%s) VALUES (%s)',
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
                    case '`Speccode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`MorphDatRefNo`':
                        $stmt->bindValue($identifier, $this->morphdatrefno, PDO::PARAM_INT);
                        break;
                    case '`Females`':
                        $stmt->bindValue($identifier, $this->females, PDO::PARAM_INT);
                        break;
                    case '`Males`':
                        $stmt->bindValue($identifier, $this->males, PDO::PARAM_INT);
                        break;
                    case '`AppearancePic`':
                        $stmt->bindValue($identifier, $this->appearancepic, PDO::PARAM_STR);
                        break;
                    case '`SexualAttributes`':
                        $stmt->bindValue($identifier, $this->sexualattributes, PDO::PARAM_STR);
                        break;
                    case '`SexMorphology`':
                        $stmt->bindValue($identifier, $this->sexmorphology, PDO::PARAM_STR);
                        break;
                    case '`SexColors`':
                        $stmt->bindValue($identifier, $this->sexcolors, PDO::PARAM_STR);
                        break;
                    case '`StrikingFeatures`':
                        $stmt->bindValue($identifier, $this->strikingfeatures, PDO::PARAM_STR);
                        break;
                    case '`BodyShapeI`':
                        $stmt->bindValue($identifier, $this->bodyshapei, PDO::PARAM_STR);
                        break;
                    case '`BodyShapeII`':
                        $stmt->bindValue($identifier, $this->bodyshapeii, PDO::PARAM_STR);
                        break;
                    case '`Forehead`':
                        $stmt->bindValue($identifier, $this->forehead, PDO::PARAM_STR);
                        break;
                    case '`OperculumPresent`':
                        $stmt->bindValue($identifier, $this->operculumpresent, PDO::PARAM_INT);
                        break;
                    case '`TypeofEyes`':
                        $stmt->bindValue($identifier, $this->typeofeyes, PDO::PARAM_STR);
                        break;
                    case '`TypeofMouth`':
                        $stmt->bindValue($identifier, $this->typeofmouth, PDO::PARAM_STR);
                        break;
                    case '`PosofMouth`':
                        $stmt->bindValue($identifier, $this->posofmouth, PDO::PARAM_STR);
                        break;
                    case '`MandibleTeeth`':
                        $stmt->bindValue($identifier, $this->mandibleteeth, PDO::PARAM_STR);
                        break;
                    case '`MandibleTeethT1`':
                        $stmt->bindValue($identifier, $this->mandibleteetht1, PDO::PARAM_STR);
                        break;
                    case '`MandibleTeethT2`':
                        $stmt->bindValue($identifier, $this->mandibleteetht2, PDO::PARAM_STR);
                        break;
                    case '`MandibleRowsMin`':
                        $stmt->bindValue($identifier, $this->mandiblerowsmin, PDO::PARAM_INT);
                        break;
                    case '`MandibleRowsMax`':
                        $stmt->bindValue($identifier, $this->mandiblerowsmax, PDO::PARAM_INT);
                        break;
                    case '`MaxillaTeeth`':
                        $stmt->bindValue($identifier, $this->maxillateeth, PDO::PARAM_STR);
                        break;
                    case '`MaxillaTeethT1`':
                        $stmt->bindValue($identifier, $this->maxillateetht1, PDO::PARAM_STR);
                        break;
                    case '`MaxillaTeethT2`':
                        $stmt->bindValue($identifier, $this->maxillateetht2, PDO::PARAM_STR);
                        break;
                    case '`MaxillaRowsMin`':
                        $stmt->bindValue($identifier, $this->maxillarowsmin, PDO::PARAM_INT);
                        break;
                    case '`MaxillaRowsMax`':
                        $stmt->bindValue($identifier, $this->maxillarowsmax, PDO::PARAM_INT);
                        break;
                    case '`VomerineTeeth`':
                        $stmt->bindValue($identifier, $this->vomerineteeth, PDO::PARAM_STR);
                        break;
                    case '`VomerineTeethT1`':
                        $stmt->bindValue($identifier, $this->vomerineteetht1, PDO::PARAM_STR);
                        break;
                    case '`VomerineTeethT2`':
                        $stmt->bindValue($identifier, $this->vomerineteetht2, PDO::PARAM_STR);
                        break;
                    case '`VomerineRowsMin`':
                        $stmt->bindValue($identifier, $this->vomerinerowsmin, PDO::PARAM_INT);
                        break;
                    case '`VomerineRowsMax`':
                        $stmt->bindValue($identifier, $this->vomerinerowsmax, PDO::PARAM_INT);
                        break;
                    case '`Palatine`':
                        $stmt->bindValue($identifier, $this->palatine, PDO::PARAM_STR);
                        break;
                    case '`PalatineTeethT1`':
                        $stmt->bindValue($identifier, $this->palatineteetht1, PDO::PARAM_STR);
                        break;
                    case '`PalatineTeethT2`':
                        $stmt->bindValue($identifier, $this->palatineteetht2, PDO::PARAM_STR);
                        break;
                    case '`PalatineRowsMin`':
                        $stmt->bindValue($identifier, $this->palatinerowsmin, PDO::PARAM_INT);
                        break;
                    case '`PalatineRowsMax`':
                        $stmt->bindValue($identifier, $this->palatinerowsmax, PDO::PARAM_INT);
                        break;
                    case '`PharyngealTeeth`':
                        $stmt->bindValue($identifier, $this->pharyngealteeth, PDO::PARAM_STR);
                        break;
                    case '`PharyngealTeethT1`':
                        $stmt->bindValue($identifier, $this->pharyngealteetht1, PDO::PARAM_STR);
                        break;
                    case '`PharyngealTeethT2`':
                        $stmt->bindValue($identifier, $this->pharyngealteetht2, PDO::PARAM_STR);
                        break;
                    case '`PharyngealRowsMin`':
                        $stmt->bindValue($identifier, $this->pharyngealrowsmin, PDO::PARAM_INT);
                        break;
                    case '`PharyngealRowsMax`':
                        $stmt->bindValue($identifier, $this->pharyngealrowsmax, PDO::PARAM_INT);
                        break;
                    case '`TeethonTongue`':
                        $stmt->bindValue($identifier, $this->teethontongue, PDO::PARAM_STR);
                        break;
                    case '`Lipsteeth`':
                        $stmt->bindValue($identifier, $this->lipsteeth, PDO::PARAM_STR);
                        break;
                    case '`DermalTeeth`':
                        $stmt->bindValue($identifier, $this->dermalteeth, PDO::PARAM_STR);
                        break;
                    case '`CommentonTeeth`':
                        $stmt->bindValue($identifier, $this->commentonteeth, PDO::PARAM_STR);
                        break;
                    case '`TypeofScales`':
                        $stmt->bindValue($identifier, $this->typeofscales, PDO::PARAM_STR);
                        break;
                    case '`Scutes`':
                        $stmt->bindValue($identifier, $this->scutes, PDO::PARAM_STR);
                        break;
                    case '`Keels`':
                        $stmt->bindValue($identifier, $this->keels, PDO::PARAM_INT);
                        break;
                    case '`HorStripesTTI`':
                        $stmt->bindValue($identifier, $this->horstripestti, PDO::PARAM_STR);
                        break;
                    case '`HorStripesTTII`':
                        $stmt->bindValue($identifier, $this->horstripesttii, PDO::PARAM_STR);
                        break;
                    case '`VerStripesTTI`':
                        $stmt->bindValue($identifier, $this->verstripestti, PDO::PARAM_STR);
                        break;
                    case '`VerStripesTTII`':
                        $stmt->bindValue($identifier, $this->verstripesttii, PDO::PARAM_STR);
                        break;
                    case '`VerStripesTTIII`':
                        $stmt->bindValue($identifier, $this->verstripesttiii, PDO::PARAM_STR);
                        break;
                    case '`DiaStripesTTI`':
                        $stmt->bindValue($identifier, $this->diastripestti, PDO::PARAM_STR);
                        break;
                    case '`DiaStripesTTII`':
                        $stmt->bindValue($identifier, $this->diastripesttii, PDO::PARAM_STR);
                        break;
                    case '`DiaStripesTTIII`':
                        $stmt->bindValue($identifier, $this->diastripesttiii, PDO::PARAM_STR);
                        break;
                    case '`CurStripesTTI`':
                        $stmt->bindValue($identifier, $this->curstripestti, PDO::PARAM_STR);
                        break;
                    case '`CurStripesTTII`':
                        $stmt->bindValue($identifier, $this->curstripesttii, PDO::PARAM_STR);
                        break;
                    case '`CurStripesTTIII`':
                        $stmt->bindValue($identifier, $this->curstripesttiii, PDO::PARAM_STR);
                        break;
                    case '`SpotsTTI`':
                        $stmt->bindValue($identifier, $this->spotstti, PDO::PARAM_STR);
                        break;
                    case '`SpotsTTII`':
                        $stmt->bindValue($identifier, $this->spotsttii, PDO::PARAM_STR);
                        break;
                    case '`SpotsTTIII`':
                        $stmt->bindValue($identifier, $this->spotsttiii, PDO::PARAM_STR);
                        break;
                    case '`DorsalFinI`':
                        $stmt->bindValue($identifier, $this->dorsalfini, PDO::PARAM_STR);
                        break;
                    case '`DorsalFinII`':
                        $stmt->bindValue($identifier, $this->dorsalfinii, PDO::PARAM_STR);
                        break;
                    case '`CaudalFinI`':
                        $stmt->bindValue($identifier, $this->caudalfini, PDO::PARAM_STR);
                        break;
                    case '`CaudalFinII`':
                        $stmt->bindValue($identifier, $this->caudalfinii, PDO::PARAM_STR);
                        break;
                    case '`AnalFinI`':
                        $stmt->bindValue($identifier, $this->analfini, PDO::PARAM_STR);
                        break;
                    case '`AnalFinII`':
                        $stmt->bindValue($identifier, $this->analfinii, PDO::PARAM_STR);
                        break;
                    case '`LateralLinesNo`':
                        $stmt->bindValue($identifier, $this->laterallinesno, PDO::PARAM_INT);
                        break;
                    case '`LLinterrupted`':
                        $stmt->bindValue($identifier, (int) $this->llinterrupted, PDO::PARAM_INT);
                        break;
                    case '`ScalesLateralmin`':
                        $stmt->bindValue($identifier, $this->scaleslateralmin, PDO::PARAM_INT);
                        break;
                    case '`ScalesLateralmax`':
                        $stmt->bindValue($identifier, $this->scaleslateralmax, PDO::PARAM_INT);
                        break;
                    case '`PoredScalesMin`':
                        $stmt->bindValue($identifier, $this->poredscalesmin, PDO::PARAM_INT);
                        break;
                    case '`PoredScalesMax`':
                        $stmt->bindValue($identifier, $this->poredscalesmax, PDO::PARAM_INT);
                        break;
                    case '`LatSeriesMin`':
                        $stmt->bindValue($identifier, $this->latseriesmin, PDO::PARAM_INT);
                        break;
                    case '`LatSeriesMax`':
                        $stmt->bindValue($identifier, $this->latseriesmax, PDO::PARAM_INT);
                        break;
                    case '`ScaleRowsAboveMin`':
                        $stmt->bindValue($identifier, $this->scalerowsabovemin, PDO::PARAM_STR);
                        break;
                    case '`ScaleRowsAboveMax`':
                        $stmt->bindValue($identifier, $this->scalerowsabovemax, PDO::PARAM_STR);
                        break;
                    case '`ScaleRowsBelowMin`':
                        $stmt->bindValue($identifier, $this->scalerowsbelowmin, PDO::PARAM_STR);
                        break;
                    case '`ScaleRowsBelowMax`':
                        $stmt->bindValue($identifier, $this->scalerowsbelowmax, PDO::PARAM_STR);
                        break;
                    case '`ScalesPeduncMin`':
                        $stmt->bindValue($identifier, $this->scalespeduncmin, PDO::PARAM_INT);
                        break;
                    case '`ScalesPeduncMax`':
                        $stmt->bindValue($identifier, $this->scalespeduncmax, PDO::PARAM_INT);
                        break;
                    case '`BarbelsNo`':
                        $stmt->bindValue($identifier, $this->barbelsno, PDO::PARAM_INT);
                        break;
                    case '`BarbelsType`':
                        $stmt->bindValue($identifier, $this->barbelstype, PDO::PARAM_STR);
                        break;
                    case '`GillCleftsNo`':
                        $stmt->bindValue($identifier, $this->gillcleftsno, PDO::PARAM_INT);
                        break;
                    case '`Spiracle`':
                        $stmt->bindValue($identifier, $this->spiracle, PDO::PARAM_STR);
                        break;
                    case '`GillRakersLowMin`':
                        $stmt->bindValue($identifier, $this->gillrakerslowmin, PDO::PARAM_INT);
                        break;
                    case '`GillRakersLowMax`':
                        $stmt->bindValue($identifier, $this->gillrakerslowmax, PDO::PARAM_INT);
                        break;
                    case '`GillRakersUpMin`':
                        $stmt->bindValue($identifier, $this->gillrakersupmin, PDO::PARAM_INT);
                        break;
                    case '`GillRakersUpMax`':
                        $stmt->bindValue($identifier, $this->gillrakersupmax, PDO::PARAM_INT);
                        break;
                    case '`GillRakersTotalMin`':
                        $stmt->bindValue($identifier, $this->gillrakerstotalmin, PDO::PARAM_INT);
                        break;
                    case '`GillRakersTotalMax`':
                        $stmt->bindValue($identifier, $this->gillrakerstotalmax, PDO::PARAM_INT);
                        break;
                    case '`Vertebrae`':
                        $stmt->bindValue($identifier, $this->vertebrae, PDO::PARAM_STR);
                        break;
                    case '`VertebraePreanMin`':
                        $stmt->bindValue($identifier, $this->vertebraepreanmin, PDO::PARAM_INT);
                        break;
                    case '`VertebraePreanMax`':
                        $stmt->bindValue($identifier, $this->vertebraepreanmax, PDO::PARAM_INT);
                        break;
                    case '`VertebraeTotalMin`':
                        $stmt->bindValue($identifier, $this->vertebraetotalmin, PDO::PARAM_INT);
                        break;
                    case '`VertebraeTotalMax`':
                        $stmt->bindValue($identifier, $this->vertebraetotalmax, PDO::PARAM_INT);
                        break;
                    case '`DorsalAttributes`':
                        $stmt->bindValue($identifier, $this->dorsalattributes, PDO::PARAM_STR);
                        break;
                    case '`Dfinno`':
                        $stmt->bindValue($identifier, $this->dfinno, PDO::PARAM_INT);
                        break;
                    case '`DorsalSpinesMin`':
                        $stmt->bindValue($identifier, $this->dorsalspinesmin, PDO::PARAM_INT);
                        break;
                    case '`DorsalSpinesMax`':
                        $stmt->bindValue($identifier, $this->dorsalspinesmax, PDO::PARAM_INT);
                        break;
                    case '`Notched`':
                        $stmt->bindValue($identifier, $this->notched, PDO::PARAM_INT);
                        break;
                    case '`DorsalSoftRaysMin`':
                        $stmt->bindValue($identifier, $this->dorsalsoftraysmin, PDO::PARAM_INT);
                        break;
                    case '`DorsalSoftRaysMax`':
                        $stmt->bindValue($identifier, $this->dorsalsoftraysmax, PDO::PARAM_INT);
                        break;
                    case '`Adifin`':
                        $stmt->bindValue($identifier, $this->adifin, PDO::PARAM_STR);
                        break;
                    case '`DFinletsmin`':
                        $stmt->bindValue($identifier, $this->dfinletsmin, PDO::PARAM_INT);
                        break;
                    case '`DFinletsmax`':
                        $stmt->bindValue($identifier, $this->dfinletsmax, PDO::PARAM_INT);
                        break;
                    case '`VFinletsmin`':
                        $stmt->bindValue($identifier, $this->vfinletsmin, PDO::PARAM_INT);
                        break;
                    case '`VFinletsmax`':
                        $stmt->bindValue($identifier, $this->vfinletsmax, PDO::PARAM_INT);
                        break;
                    case '`CShape`':
                        $stmt->bindValue($identifier, $this->cshape, PDO::PARAM_STR);
                        break;
                    case '`Attributes`':
                        $stmt->bindValue($identifier, $this->attributes, PDO::PARAM_STR);
                        break;
                    case '`Afinno`':
                        $stmt->bindValue($identifier, $this->afinno, PDO::PARAM_INT);
                        break;
                    case '`AnalFinSpinesMin`':
                        $stmt->bindValue($identifier, $this->analfinspinesmin, PDO::PARAM_INT);
                        break;
                    case '`AnalFinSpinesMax`':
                        $stmt->bindValue($identifier, $this->analfinspinesmax, PDO::PARAM_INT);
                        break;
                    case '`Araymin`':
                        $stmt->bindValue($identifier, $this->araymin, PDO::PARAM_INT);
                        break;
                    case '`Araymax`':
                        $stmt->bindValue($identifier, $this->araymax, PDO::PARAM_INT);
                        break;
                    case '`PectoralAttributes`':
                        $stmt->bindValue($identifier, $this->pectoralattributes, PDO::PARAM_STR);
                        break;
                    case '`Pspines2`':
                        $stmt->bindValue($identifier, $this->pspines2, PDO::PARAM_INT);
                        break;
                    case '`Praymin`':
                        $stmt->bindValue($identifier, $this->praymin, PDO::PARAM_INT);
                        break;
                    case '`Praymax`':
                        $stmt->bindValue($identifier, $this->praymax, PDO::PARAM_INT);
                        break;
                    case '`PelvicsAttributes`':
                        $stmt->bindValue($identifier, $this->pelvicsattributes, PDO::PARAM_STR);
                        break;
                    case '`VPosition`':
                        $stmt->bindValue($identifier, $this->vposition, PDO::PARAM_STR);
                        break;
                    case '`VPosition2`':
                        $stmt->bindValue($identifier, $this->vposition2, PDO::PARAM_STR);
                        break;
                    case '`Vspines`':
                        $stmt->bindValue($identifier, $this->vspines, PDO::PARAM_INT);
                        break;
                    case '`Vraymin`':
                        $stmt->bindValue($identifier, $this->vraymin, PDO::PARAM_INT);
                        break;
                    case '`Vraymax`':
                        $stmt->bindValue($identifier, $this->vraymax, PDO::PARAM_INT);
                        break;
                    case '`StandardLengthCm`':
                        $stmt->bindValue($identifier, $this->standardlengthcm, PDO::PARAM_STR);
                        break;
                    case '`Forklength`':
                        $stmt->bindValue($identifier, $this->forklength, PDO::PARAM_STR);
                        break;
                    case '`Totallength`':
                        $stmt->bindValue($identifier, $this->totallength, PDO::PARAM_STR);
                        break;
                    case '`HeadLength`':
                        $stmt->bindValue($identifier, $this->headlength, PDO::PARAM_STR);
                        break;
                    case '`PreDorsalLength`':
                        $stmt->bindValue($identifier, $this->predorsallength, PDO::PARAM_STR);
                        break;
                    case '`PrePelvicsLength`':
                        $stmt->bindValue($identifier, $this->prepelvicslength, PDO::PARAM_STR);
                        break;
                    case '`PreAnalLength`':
                        $stmt->bindValue($identifier, $this->preanallength, PDO::PARAM_STR);
                        break;
                    case '`PostHeadDepth`':
                        $stmt->bindValue($identifier, $this->postheaddepth, PDO::PARAM_STR);
                        break;
                    case '`PostTrunkDepth`':
                        $stmt->bindValue($identifier, $this->posttrunkdepth, PDO::PARAM_STR);
                        break;
                    case '`MaximumDepth`':
                        $stmt->bindValue($identifier, $this->maximumdepth, PDO::PARAM_STR);
                        break;
                    case '`PeduncleDepth`':
                        $stmt->bindValue($identifier, $this->peduncledepth, PDO::PARAM_STR);
                        break;
                    case '`PeduncleLength`':
                        $stmt->bindValue($identifier, $this->pedunclelength, PDO::PARAM_STR);
                        break;
                    case '`CaudalHeight`':
                        $stmt->bindValue($identifier, $this->caudalheight, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalLength`':
                        $stmt->bindValue($identifier, $this->preorbitallength, PDO::PARAM_STR);
                        break;
                    case '`EyeLength`':
                        $stmt->bindValue($identifier, $this->eyelength, PDO::PARAM_STR);
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
                    case '`RemarkSex`':
                        $stmt->bindValue($identifier, $this->remarksex, PDO::PARAM_STR);
                        break;
                    case '`AddChars`':
                        $stmt->bindValue($identifier, $this->addchars, PDO::PARAM_STR);
                        break;
                    case '`SimilarSpecies1`':
                        $stmt->bindValue($identifier, $this->similarspecies1, PDO::PARAM_INT);
                        break;
                    case '`SimilarSpec1Remarks`':
                        $stmt->bindValue($identifier, $this->similarspec1remarks, PDO::PARAM_STR);
                        break;
                    case '`SimilarSpecies2`':
                        $stmt->bindValue($identifier, $this->similarspecies2, PDO::PARAM_INT);
                        break;
                    case '`SimilarSpec2Remarks`':
                        $stmt->bindValue($identifier, $this->similarspec2remarks, PDO::PARAM_STR);
                        break;
                    case '`EaseofID`':
                        $stmt->bindValue($identifier, $this->easeofid, PDO::PARAM_STR);
                        break;
                    case '`OtherRef1`':
                        $stmt->bindValue($identifier, $this->otherref1, PDO::PARAM_INT);
                        break;
                    case '`OtherRef2`':
                        $stmt->bindValue($identifier, $this->otherref2, PDO::PARAM_INT);
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
        $this->setStockcode($pk);

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


            if (($retval = MorphdatPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MorphdatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMorphdatrefno();
                break;
            case 4:
                return $this->getFemales();
                break;
            case 5:
                return $this->getMales();
                break;
            case 6:
                return $this->getAppearancepic();
                break;
            case 7:
                return $this->getSexualattributes();
                break;
            case 8:
                return $this->getSexmorphology();
                break;
            case 9:
                return $this->getSexcolors();
                break;
            case 10:
                return $this->getStrikingfeatures();
                break;
            case 11:
                return $this->getBodyshapei();
                break;
            case 12:
                return $this->getBodyshapeii();
                break;
            case 13:
                return $this->getForehead();
                break;
            case 14:
                return $this->getOperculumpresent();
                break;
            case 15:
                return $this->getTypeofeyes();
                break;
            case 16:
                return $this->getTypeofmouth();
                break;
            case 17:
                return $this->getPosofmouth();
                break;
            case 18:
                return $this->getMandibleteeth();
                break;
            case 19:
                return $this->getMandibleteetht1();
                break;
            case 20:
                return $this->getMandibleteetht2();
                break;
            case 21:
                return $this->getMandiblerowsmin();
                break;
            case 22:
                return $this->getMandiblerowsmax();
                break;
            case 23:
                return $this->getMaxillateeth();
                break;
            case 24:
                return $this->getMaxillateetht1();
                break;
            case 25:
                return $this->getMaxillateetht2();
                break;
            case 26:
                return $this->getMaxillarowsmin();
                break;
            case 27:
                return $this->getMaxillarowsmax();
                break;
            case 28:
                return $this->getVomerineteeth();
                break;
            case 29:
                return $this->getVomerineteetht1();
                break;
            case 30:
                return $this->getVomerineteetht2();
                break;
            case 31:
                return $this->getVomerinerowsmin();
                break;
            case 32:
                return $this->getVomerinerowsmax();
                break;
            case 33:
                return $this->getPalatine();
                break;
            case 34:
                return $this->getPalatineteetht1();
                break;
            case 35:
                return $this->getPalatineteetht2();
                break;
            case 36:
                return $this->getPalatinerowsmin();
                break;
            case 37:
                return $this->getPalatinerowsmax();
                break;
            case 38:
                return $this->getPharyngealteeth();
                break;
            case 39:
                return $this->getPharyngealteetht1();
                break;
            case 40:
                return $this->getPharyngealteetht2();
                break;
            case 41:
                return $this->getPharyngealrowsmin();
                break;
            case 42:
                return $this->getPharyngealrowsmax();
                break;
            case 43:
                return $this->getTeethontongue();
                break;
            case 44:
                return $this->getLipsteeth();
                break;
            case 45:
                return $this->getDermalteeth();
                break;
            case 46:
                return $this->getCommentonteeth();
                break;
            case 47:
                return $this->getTypeofscales();
                break;
            case 48:
                return $this->getScutes();
                break;
            case 49:
                return $this->getKeels();
                break;
            case 50:
                return $this->getHorstripestti();
                break;
            case 51:
                return $this->getHorstripesttii();
                break;
            case 52:
                return $this->getVerstripestti();
                break;
            case 53:
                return $this->getVerstripesttii();
                break;
            case 54:
                return $this->getVerstripesttiii();
                break;
            case 55:
                return $this->getDiastripestti();
                break;
            case 56:
                return $this->getDiastripesttii();
                break;
            case 57:
                return $this->getDiastripesttiii();
                break;
            case 58:
                return $this->getCurstripestti();
                break;
            case 59:
                return $this->getCurstripesttii();
                break;
            case 60:
                return $this->getCurstripesttiii();
                break;
            case 61:
                return $this->getSpotstti();
                break;
            case 62:
                return $this->getSpotsttii();
                break;
            case 63:
                return $this->getSpotsttiii();
                break;
            case 64:
                return $this->getDorsalfini();
                break;
            case 65:
                return $this->getDorsalfinii();
                break;
            case 66:
                return $this->getCaudalfini();
                break;
            case 67:
                return $this->getCaudalfinii();
                break;
            case 68:
                return $this->getAnalfini();
                break;
            case 69:
                return $this->getAnalfinii();
                break;
            case 70:
                return $this->getLaterallinesno();
                break;
            case 71:
                return $this->getLlinterrupted();
                break;
            case 72:
                return $this->getScaleslateralmin();
                break;
            case 73:
                return $this->getScaleslateralmax();
                break;
            case 74:
                return $this->getPoredscalesmin();
                break;
            case 75:
                return $this->getPoredscalesmax();
                break;
            case 76:
                return $this->getLatseriesmin();
                break;
            case 77:
                return $this->getLatseriesmax();
                break;
            case 78:
                return $this->getScalerowsabovemin();
                break;
            case 79:
                return $this->getScalerowsabovemax();
                break;
            case 80:
                return $this->getScalerowsbelowmin();
                break;
            case 81:
                return $this->getScalerowsbelowmax();
                break;
            case 82:
                return $this->getScalespeduncmin();
                break;
            case 83:
                return $this->getScalespeduncmax();
                break;
            case 84:
                return $this->getBarbelsno();
                break;
            case 85:
                return $this->getBarbelstype();
                break;
            case 86:
                return $this->getGillcleftsno();
                break;
            case 87:
                return $this->getSpiracle();
                break;
            case 88:
                return $this->getGillrakerslowmin();
                break;
            case 89:
                return $this->getGillrakerslowmax();
                break;
            case 90:
                return $this->getGillrakersupmin();
                break;
            case 91:
                return $this->getGillrakersupmax();
                break;
            case 92:
                return $this->getGillrakerstotalmin();
                break;
            case 93:
                return $this->getGillrakerstotalmax();
                break;
            case 94:
                return $this->getVertebrae();
                break;
            case 95:
                return $this->getVertebraepreanmin();
                break;
            case 96:
                return $this->getVertebraepreanmax();
                break;
            case 97:
                return $this->getVertebraetotalmin();
                break;
            case 98:
                return $this->getVertebraetotalmax();
                break;
            case 99:
                return $this->getDorsalattributes();
                break;
            case 100:
                return $this->getDfinno();
                break;
            case 101:
                return $this->getDorsalspinesmin();
                break;
            case 102:
                return $this->getDorsalspinesmax();
                break;
            case 103:
                return $this->getNotched();
                break;
            case 104:
                return $this->getDorsalsoftraysmin();
                break;
            case 105:
                return $this->getDorsalsoftraysmax();
                break;
            case 106:
                return $this->getAdifin();
                break;
            case 107:
                return $this->getDfinletsmin();
                break;
            case 108:
                return $this->getDfinletsmax();
                break;
            case 109:
                return $this->getVfinletsmin();
                break;
            case 110:
                return $this->getVfinletsmax();
                break;
            case 111:
                return $this->getCshape();
                break;
            case 112:
                return $this->getAttributes();
                break;
            case 113:
                return $this->getAfinno();
                break;
            case 114:
                return $this->getAnalfinspinesmin();
                break;
            case 115:
                return $this->getAnalfinspinesmax();
                break;
            case 116:
                return $this->getAraymin();
                break;
            case 117:
                return $this->getAraymax();
                break;
            case 118:
                return $this->getPectoralattributes();
                break;
            case 119:
                return $this->getPspines2();
                break;
            case 120:
                return $this->getPraymin();
                break;
            case 121:
                return $this->getPraymax();
                break;
            case 122:
                return $this->getPelvicsattributes();
                break;
            case 123:
                return $this->getVposition();
                break;
            case 124:
                return $this->getVposition2();
                break;
            case 125:
                return $this->getVspines();
                break;
            case 126:
                return $this->getVraymin();
                break;
            case 127:
                return $this->getVraymax();
                break;
            case 128:
                return $this->getStandardlengthcm();
                break;
            case 129:
                return $this->getForklength();
                break;
            case 130:
                return $this->getTotallength();
                break;
            case 131:
                return $this->getHeadlength();
                break;
            case 132:
                return $this->getPredorsallength();
                break;
            case 133:
                return $this->getPrepelvicslength();
                break;
            case 134:
                return $this->getPreanallength();
                break;
            case 135:
                return $this->getPostheaddepth();
                break;
            case 136:
                return $this->getPosttrunkdepth();
                break;
            case 137:
                return $this->getMaximumdepth();
                break;
            case 138:
                return $this->getPeduncledepth();
                break;
            case 139:
                return $this->getPedunclelength();
                break;
            case 140:
                return $this->getCaudalheight();
                break;
            case 141:
                return $this->getPreorbitallength();
                break;
            case 142:
                return $this->getEyelength();
                break;
            case 143:
                return $this->getEntered();
                break;
            case 144:
                return $this->getDateentered();
                break;
            case 145:
                return $this->getModified();
                break;
            case 146:
                return $this->getDatemodified();
                break;
            case 147:
                return $this->getExpert();
                break;
            case 148:
                return $this->getDatechecked();
                break;
            case 149:
                return $this->getRemarksex();
                break;
            case 150:
                return $this->getAddchars();
                break;
            case 151:
                return $this->getSimilarspecies1();
                break;
            case 152:
                return $this->getSimilarspec1remarks();
                break;
            case 153:
                return $this->getSimilarspecies2();
                break;
            case 154:
                return $this->getSimilarspec2remarks();
                break;
            case 155:
                return $this->getEaseofid();
                break;
            case 156:
                return $this->getOtherref1();
                break;
            case 157:
                return $this->getOtherref2();
                break;
            case 158:
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
        if (isset($alreadyDumpedObjects['Morphdat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Morphdat'][$this->getPrimaryKey()] = true;
        $keys = MorphdatPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getStockcode(),
            $keys[3] => $this->getMorphdatrefno(),
            $keys[4] => $this->getFemales(),
            $keys[5] => $this->getMales(),
            $keys[6] => $this->getAppearancepic(),
            $keys[7] => $this->getSexualattributes(),
            $keys[8] => $this->getSexmorphology(),
            $keys[9] => $this->getSexcolors(),
            $keys[10] => $this->getStrikingfeatures(),
            $keys[11] => $this->getBodyshapei(),
            $keys[12] => $this->getBodyshapeii(),
            $keys[13] => $this->getForehead(),
            $keys[14] => $this->getOperculumpresent(),
            $keys[15] => $this->getTypeofeyes(),
            $keys[16] => $this->getTypeofmouth(),
            $keys[17] => $this->getPosofmouth(),
            $keys[18] => $this->getMandibleteeth(),
            $keys[19] => $this->getMandibleteetht1(),
            $keys[20] => $this->getMandibleteetht2(),
            $keys[21] => $this->getMandiblerowsmin(),
            $keys[22] => $this->getMandiblerowsmax(),
            $keys[23] => $this->getMaxillateeth(),
            $keys[24] => $this->getMaxillateetht1(),
            $keys[25] => $this->getMaxillateetht2(),
            $keys[26] => $this->getMaxillarowsmin(),
            $keys[27] => $this->getMaxillarowsmax(),
            $keys[28] => $this->getVomerineteeth(),
            $keys[29] => $this->getVomerineteetht1(),
            $keys[30] => $this->getVomerineteetht2(),
            $keys[31] => $this->getVomerinerowsmin(),
            $keys[32] => $this->getVomerinerowsmax(),
            $keys[33] => $this->getPalatine(),
            $keys[34] => $this->getPalatineteetht1(),
            $keys[35] => $this->getPalatineteetht2(),
            $keys[36] => $this->getPalatinerowsmin(),
            $keys[37] => $this->getPalatinerowsmax(),
            $keys[38] => $this->getPharyngealteeth(),
            $keys[39] => $this->getPharyngealteetht1(),
            $keys[40] => $this->getPharyngealteetht2(),
            $keys[41] => $this->getPharyngealrowsmin(),
            $keys[42] => $this->getPharyngealrowsmax(),
            $keys[43] => $this->getTeethontongue(),
            $keys[44] => $this->getLipsteeth(),
            $keys[45] => $this->getDermalteeth(),
            $keys[46] => $this->getCommentonteeth(),
            $keys[47] => $this->getTypeofscales(),
            $keys[48] => $this->getScutes(),
            $keys[49] => $this->getKeels(),
            $keys[50] => $this->getHorstripestti(),
            $keys[51] => $this->getHorstripesttii(),
            $keys[52] => $this->getVerstripestti(),
            $keys[53] => $this->getVerstripesttii(),
            $keys[54] => $this->getVerstripesttiii(),
            $keys[55] => $this->getDiastripestti(),
            $keys[56] => $this->getDiastripesttii(),
            $keys[57] => $this->getDiastripesttiii(),
            $keys[58] => $this->getCurstripestti(),
            $keys[59] => $this->getCurstripesttii(),
            $keys[60] => $this->getCurstripesttiii(),
            $keys[61] => $this->getSpotstti(),
            $keys[62] => $this->getSpotsttii(),
            $keys[63] => $this->getSpotsttiii(),
            $keys[64] => $this->getDorsalfini(),
            $keys[65] => $this->getDorsalfinii(),
            $keys[66] => $this->getCaudalfini(),
            $keys[67] => $this->getCaudalfinii(),
            $keys[68] => $this->getAnalfini(),
            $keys[69] => $this->getAnalfinii(),
            $keys[70] => $this->getLaterallinesno(),
            $keys[71] => $this->getLlinterrupted(),
            $keys[72] => $this->getScaleslateralmin(),
            $keys[73] => $this->getScaleslateralmax(),
            $keys[74] => $this->getPoredscalesmin(),
            $keys[75] => $this->getPoredscalesmax(),
            $keys[76] => $this->getLatseriesmin(),
            $keys[77] => $this->getLatseriesmax(),
            $keys[78] => $this->getScalerowsabovemin(),
            $keys[79] => $this->getScalerowsabovemax(),
            $keys[80] => $this->getScalerowsbelowmin(),
            $keys[81] => $this->getScalerowsbelowmax(),
            $keys[82] => $this->getScalespeduncmin(),
            $keys[83] => $this->getScalespeduncmax(),
            $keys[84] => $this->getBarbelsno(),
            $keys[85] => $this->getBarbelstype(),
            $keys[86] => $this->getGillcleftsno(),
            $keys[87] => $this->getSpiracle(),
            $keys[88] => $this->getGillrakerslowmin(),
            $keys[89] => $this->getGillrakerslowmax(),
            $keys[90] => $this->getGillrakersupmin(),
            $keys[91] => $this->getGillrakersupmax(),
            $keys[92] => $this->getGillrakerstotalmin(),
            $keys[93] => $this->getGillrakerstotalmax(),
            $keys[94] => $this->getVertebrae(),
            $keys[95] => $this->getVertebraepreanmin(),
            $keys[96] => $this->getVertebraepreanmax(),
            $keys[97] => $this->getVertebraetotalmin(),
            $keys[98] => $this->getVertebraetotalmax(),
            $keys[99] => $this->getDorsalattributes(),
            $keys[100] => $this->getDfinno(),
            $keys[101] => $this->getDorsalspinesmin(),
            $keys[102] => $this->getDorsalspinesmax(),
            $keys[103] => $this->getNotched(),
            $keys[104] => $this->getDorsalsoftraysmin(),
            $keys[105] => $this->getDorsalsoftraysmax(),
            $keys[106] => $this->getAdifin(),
            $keys[107] => $this->getDfinletsmin(),
            $keys[108] => $this->getDfinletsmax(),
            $keys[109] => $this->getVfinletsmin(),
            $keys[110] => $this->getVfinletsmax(),
            $keys[111] => $this->getCshape(),
            $keys[112] => $this->getAttributes(),
            $keys[113] => $this->getAfinno(),
            $keys[114] => $this->getAnalfinspinesmin(),
            $keys[115] => $this->getAnalfinspinesmax(),
            $keys[116] => $this->getAraymin(),
            $keys[117] => $this->getAraymax(),
            $keys[118] => $this->getPectoralattributes(),
            $keys[119] => $this->getPspines2(),
            $keys[120] => $this->getPraymin(),
            $keys[121] => $this->getPraymax(),
            $keys[122] => $this->getPelvicsattributes(),
            $keys[123] => $this->getVposition(),
            $keys[124] => $this->getVposition2(),
            $keys[125] => $this->getVspines(),
            $keys[126] => $this->getVraymin(),
            $keys[127] => $this->getVraymax(),
            $keys[128] => $this->getStandardlengthcm(),
            $keys[129] => $this->getForklength(),
            $keys[130] => $this->getTotallength(),
            $keys[131] => $this->getHeadlength(),
            $keys[132] => $this->getPredorsallength(),
            $keys[133] => $this->getPrepelvicslength(),
            $keys[134] => $this->getPreanallength(),
            $keys[135] => $this->getPostheaddepth(),
            $keys[136] => $this->getPosttrunkdepth(),
            $keys[137] => $this->getMaximumdepth(),
            $keys[138] => $this->getPeduncledepth(),
            $keys[139] => $this->getPedunclelength(),
            $keys[140] => $this->getCaudalheight(),
            $keys[141] => $this->getPreorbitallength(),
            $keys[142] => $this->getEyelength(),
            $keys[143] => $this->getEntered(),
            $keys[144] => $this->getDateentered(),
            $keys[145] => $this->getModified(),
            $keys[146] => $this->getDatemodified(),
            $keys[147] => $this->getExpert(),
            $keys[148] => $this->getDatechecked(),
            $keys[149] => $this->getRemarksex(),
            $keys[150] => $this->getAddchars(),
            $keys[151] => $this->getSimilarspecies1(),
            $keys[152] => $this->getSimilarspec1remarks(),
            $keys[153] => $this->getSimilarspecies2(),
            $keys[154] => $this->getSimilarspec2remarks(),
            $keys[155] => $this->getEaseofid(),
            $keys[156] => $this->getOtherref1(),
            $keys[157] => $this->getOtherref2(),
            $keys[158] => $this->getTs(),
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
        $pos = MorphdatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMorphdatrefno($value);
                break;
            case 4:
                $this->setFemales($value);
                break;
            case 5:
                $this->setMales($value);
                break;
            case 6:
                $this->setAppearancepic($value);
                break;
            case 7:
                $this->setSexualattributes($value);
                break;
            case 8:
                $this->setSexmorphology($value);
                break;
            case 9:
                $this->setSexcolors($value);
                break;
            case 10:
                $this->setStrikingfeatures($value);
                break;
            case 11:
                $this->setBodyshapei($value);
                break;
            case 12:
                $this->setBodyshapeii($value);
                break;
            case 13:
                $this->setForehead($value);
                break;
            case 14:
                $this->setOperculumpresent($value);
                break;
            case 15:
                $this->setTypeofeyes($value);
                break;
            case 16:
                $this->setTypeofmouth($value);
                break;
            case 17:
                $this->setPosofmouth($value);
                break;
            case 18:
                $this->setMandibleteeth($value);
                break;
            case 19:
                $this->setMandibleteetht1($value);
                break;
            case 20:
                $this->setMandibleteetht2($value);
                break;
            case 21:
                $this->setMandiblerowsmin($value);
                break;
            case 22:
                $this->setMandiblerowsmax($value);
                break;
            case 23:
                $this->setMaxillateeth($value);
                break;
            case 24:
                $this->setMaxillateetht1($value);
                break;
            case 25:
                $this->setMaxillateetht2($value);
                break;
            case 26:
                $this->setMaxillarowsmin($value);
                break;
            case 27:
                $this->setMaxillarowsmax($value);
                break;
            case 28:
                $this->setVomerineteeth($value);
                break;
            case 29:
                $this->setVomerineteetht1($value);
                break;
            case 30:
                $this->setVomerineteetht2($value);
                break;
            case 31:
                $this->setVomerinerowsmin($value);
                break;
            case 32:
                $this->setVomerinerowsmax($value);
                break;
            case 33:
                $this->setPalatine($value);
                break;
            case 34:
                $this->setPalatineteetht1($value);
                break;
            case 35:
                $this->setPalatineteetht2($value);
                break;
            case 36:
                $this->setPalatinerowsmin($value);
                break;
            case 37:
                $this->setPalatinerowsmax($value);
                break;
            case 38:
                $this->setPharyngealteeth($value);
                break;
            case 39:
                $this->setPharyngealteetht1($value);
                break;
            case 40:
                $this->setPharyngealteetht2($value);
                break;
            case 41:
                $this->setPharyngealrowsmin($value);
                break;
            case 42:
                $this->setPharyngealrowsmax($value);
                break;
            case 43:
                $this->setTeethontongue($value);
                break;
            case 44:
                $this->setLipsteeth($value);
                break;
            case 45:
                $this->setDermalteeth($value);
                break;
            case 46:
                $this->setCommentonteeth($value);
                break;
            case 47:
                $this->setTypeofscales($value);
                break;
            case 48:
                $this->setScutes($value);
                break;
            case 49:
                $this->setKeels($value);
                break;
            case 50:
                $this->setHorstripestti($value);
                break;
            case 51:
                $this->setHorstripesttii($value);
                break;
            case 52:
                $this->setVerstripestti($value);
                break;
            case 53:
                $this->setVerstripesttii($value);
                break;
            case 54:
                $this->setVerstripesttiii($value);
                break;
            case 55:
                $this->setDiastripestti($value);
                break;
            case 56:
                $this->setDiastripesttii($value);
                break;
            case 57:
                $this->setDiastripesttiii($value);
                break;
            case 58:
                $this->setCurstripestti($value);
                break;
            case 59:
                $this->setCurstripesttii($value);
                break;
            case 60:
                $this->setCurstripesttiii($value);
                break;
            case 61:
                $this->setSpotstti($value);
                break;
            case 62:
                $this->setSpotsttii($value);
                break;
            case 63:
                $this->setSpotsttiii($value);
                break;
            case 64:
                $this->setDorsalfini($value);
                break;
            case 65:
                $this->setDorsalfinii($value);
                break;
            case 66:
                $this->setCaudalfini($value);
                break;
            case 67:
                $this->setCaudalfinii($value);
                break;
            case 68:
                $this->setAnalfini($value);
                break;
            case 69:
                $this->setAnalfinii($value);
                break;
            case 70:
                $this->setLaterallinesno($value);
                break;
            case 71:
                $this->setLlinterrupted($value);
                break;
            case 72:
                $this->setScaleslateralmin($value);
                break;
            case 73:
                $this->setScaleslateralmax($value);
                break;
            case 74:
                $this->setPoredscalesmin($value);
                break;
            case 75:
                $this->setPoredscalesmax($value);
                break;
            case 76:
                $this->setLatseriesmin($value);
                break;
            case 77:
                $this->setLatseriesmax($value);
                break;
            case 78:
                $this->setScalerowsabovemin($value);
                break;
            case 79:
                $this->setScalerowsabovemax($value);
                break;
            case 80:
                $this->setScalerowsbelowmin($value);
                break;
            case 81:
                $this->setScalerowsbelowmax($value);
                break;
            case 82:
                $this->setScalespeduncmin($value);
                break;
            case 83:
                $this->setScalespeduncmax($value);
                break;
            case 84:
                $this->setBarbelsno($value);
                break;
            case 85:
                $this->setBarbelstype($value);
                break;
            case 86:
                $this->setGillcleftsno($value);
                break;
            case 87:
                $this->setSpiracle($value);
                break;
            case 88:
                $this->setGillrakerslowmin($value);
                break;
            case 89:
                $this->setGillrakerslowmax($value);
                break;
            case 90:
                $this->setGillrakersupmin($value);
                break;
            case 91:
                $this->setGillrakersupmax($value);
                break;
            case 92:
                $this->setGillrakerstotalmin($value);
                break;
            case 93:
                $this->setGillrakerstotalmax($value);
                break;
            case 94:
                $this->setVertebrae($value);
                break;
            case 95:
                $this->setVertebraepreanmin($value);
                break;
            case 96:
                $this->setVertebraepreanmax($value);
                break;
            case 97:
                $this->setVertebraetotalmin($value);
                break;
            case 98:
                $this->setVertebraetotalmax($value);
                break;
            case 99:
                $this->setDorsalattributes($value);
                break;
            case 100:
                $this->setDfinno($value);
                break;
            case 101:
                $this->setDorsalspinesmin($value);
                break;
            case 102:
                $this->setDorsalspinesmax($value);
                break;
            case 103:
                $this->setNotched($value);
                break;
            case 104:
                $this->setDorsalsoftraysmin($value);
                break;
            case 105:
                $this->setDorsalsoftraysmax($value);
                break;
            case 106:
                $this->setAdifin($value);
                break;
            case 107:
                $this->setDfinletsmin($value);
                break;
            case 108:
                $this->setDfinletsmax($value);
                break;
            case 109:
                $this->setVfinletsmin($value);
                break;
            case 110:
                $this->setVfinletsmax($value);
                break;
            case 111:
                $this->setCshape($value);
                break;
            case 112:
                $this->setAttributes($value);
                break;
            case 113:
                $this->setAfinno($value);
                break;
            case 114:
                $this->setAnalfinspinesmin($value);
                break;
            case 115:
                $this->setAnalfinspinesmax($value);
                break;
            case 116:
                $this->setAraymin($value);
                break;
            case 117:
                $this->setAraymax($value);
                break;
            case 118:
                $this->setPectoralattributes($value);
                break;
            case 119:
                $this->setPspines2($value);
                break;
            case 120:
                $this->setPraymin($value);
                break;
            case 121:
                $this->setPraymax($value);
                break;
            case 122:
                $this->setPelvicsattributes($value);
                break;
            case 123:
                $this->setVposition($value);
                break;
            case 124:
                $this->setVposition2($value);
                break;
            case 125:
                $this->setVspines($value);
                break;
            case 126:
                $this->setVraymin($value);
                break;
            case 127:
                $this->setVraymax($value);
                break;
            case 128:
                $this->setStandardlengthcm($value);
                break;
            case 129:
                $this->setForklength($value);
                break;
            case 130:
                $this->setTotallength($value);
                break;
            case 131:
                $this->setHeadlength($value);
                break;
            case 132:
                $this->setPredorsallength($value);
                break;
            case 133:
                $this->setPrepelvicslength($value);
                break;
            case 134:
                $this->setPreanallength($value);
                break;
            case 135:
                $this->setPostheaddepth($value);
                break;
            case 136:
                $this->setPosttrunkdepth($value);
                break;
            case 137:
                $this->setMaximumdepth($value);
                break;
            case 138:
                $this->setPeduncledepth($value);
                break;
            case 139:
                $this->setPedunclelength($value);
                break;
            case 140:
                $this->setCaudalheight($value);
                break;
            case 141:
                $this->setPreorbitallength($value);
                break;
            case 142:
                $this->setEyelength($value);
                break;
            case 143:
                $this->setEntered($value);
                break;
            case 144:
                $this->setDateentered($value);
                break;
            case 145:
                $this->setModified($value);
                break;
            case 146:
                $this->setDatemodified($value);
                break;
            case 147:
                $this->setExpert($value);
                break;
            case 148:
                $this->setDatechecked($value);
                break;
            case 149:
                $this->setRemarksex($value);
                break;
            case 150:
                $this->setAddchars($value);
                break;
            case 151:
                $this->setSimilarspecies1($value);
                break;
            case 152:
                $this->setSimilarspec1remarks($value);
                break;
            case 153:
                $this->setSimilarspecies2($value);
                break;
            case 154:
                $this->setSimilarspec2remarks($value);
                break;
            case 155:
                $this->setEaseofid($value);
                break;
            case 156:
                $this->setOtherref1($value);
                break;
            case 157:
                $this->setOtherref2($value);
                break;
            case 158:
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
        $keys = MorphdatPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStockcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMorphdatrefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFemales($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMales($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAppearancepic($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSexualattributes($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSexmorphology($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSexcolors($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStrikingfeatures($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setBodyshapei($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBodyshapeii($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setForehead($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOperculumpresent($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTypeofeyes($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTypeofmouth($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPosofmouth($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMandibleteeth($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMandibleteetht1($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMandibleteetht2($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMandiblerowsmin($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setMandiblerowsmax($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMaxillateeth($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMaxillateetht1($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setMaxillateetht2($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMaxillarowsmin($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setMaxillarowsmax($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setVomerineteeth($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setVomerineteetht1($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setVomerineteetht2($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setVomerinerowsmin($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setVomerinerowsmax($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setPalatine($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setPalatineteetht1($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPalatineteetht2($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPalatinerowsmin($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPalatinerowsmax($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setPharyngealteeth($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setPharyngealteetht1($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setPharyngealteetht2($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setPharyngealrowsmin($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setPharyngealrowsmax($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTeethontongue($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setLipsteeth($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setDermalteeth($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCommentonteeth($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTypeofscales($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setScutes($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setKeels($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setHorstripestti($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setHorstripesttii($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setVerstripestti($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setVerstripesttii($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setVerstripesttiii($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDiastripestti($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDiastripesttii($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDiastripesttiii($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setCurstripestti($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setCurstripesttii($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setCurstripesttiii($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setSpotstti($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setSpotsttii($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setSpotsttiii($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setDorsalfini($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setDorsalfinii($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setCaudalfini($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setCaudalfinii($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setAnalfini($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setAnalfinii($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setLaterallinesno($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setLlinterrupted($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setScaleslateralmin($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setScaleslateralmax($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setPoredscalesmin($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setPoredscalesmax($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setLatseriesmin($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setLatseriesmax($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setScalerowsabovemin($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setScalerowsabovemax($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setScalerowsbelowmin($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setScalerowsbelowmax($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setScalespeduncmin($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setScalespeduncmax($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setBarbelsno($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setBarbelstype($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setGillcleftsno($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setSpiracle($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setGillrakerslowmin($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setGillrakerslowmax($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setGillrakersupmin($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setGillrakersupmax($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setGillrakerstotalmin($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setGillrakerstotalmax($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setVertebrae($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setVertebraepreanmin($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setVertebraepreanmax($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setVertebraetotalmin($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setVertebraetotalmax($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setDorsalattributes($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setDfinno($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setDorsalspinesmin($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setDorsalspinesmax($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setNotched($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setDorsalsoftraysmin($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setDorsalsoftraysmax($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setAdifin($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setDfinletsmin($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setDfinletsmax($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setVfinletsmin($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setVfinletsmax($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setCshape($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setAttributes($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setAfinno($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setAnalfinspinesmin($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setAnalfinspinesmax($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setAraymin($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setAraymax($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setPectoralattributes($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setPspines2($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setPraymin($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setPraymax($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setPelvicsattributes($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setVposition($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setVposition2($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setVspines($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setVraymin($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setVraymax($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setStandardlengthcm($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setForklength($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setTotallength($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setHeadlength($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setPredorsallength($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setPrepelvicslength($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setPreanallength($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setPostheaddepth($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setPosttrunkdepth($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setMaximumdepth($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setPeduncledepth($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setPedunclelength($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setCaudalheight($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setPreorbitallength($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setEyelength($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setEntered($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setDateentered($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setModified($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setDatemodified($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setExpert($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setDatechecked($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setRemarksex($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setAddchars($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setSimilarspecies1($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setSimilarspec1remarks($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setSimilarspecies2($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setSimilarspec2remarks($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setEaseofid($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setOtherref1($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setOtherref2($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setTs($arr[$keys[158]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MorphdatPeer::DATABASE_NAME);

        if ($this->isColumnModified(MorphdatPeer::AUTOCTR)) $criteria->add(MorphdatPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(MorphdatPeer::SPECCODE)) $criteria->add(MorphdatPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(MorphdatPeer::STOCKCODE)) $criteria->add(MorphdatPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(MorphdatPeer::MORPHDATREFNO)) $criteria->add(MorphdatPeer::MORPHDATREFNO, $this->morphdatrefno);
        if ($this->isColumnModified(MorphdatPeer::FEMALES)) $criteria->add(MorphdatPeer::FEMALES, $this->females);
        if ($this->isColumnModified(MorphdatPeer::MALES)) $criteria->add(MorphdatPeer::MALES, $this->males);
        if ($this->isColumnModified(MorphdatPeer::APPEARANCEPIC)) $criteria->add(MorphdatPeer::APPEARANCEPIC, $this->appearancepic);
        if ($this->isColumnModified(MorphdatPeer::SEXUALATTRIBUTES)) $criteria->add(MorphdatPeer::SEXUALATTRIBUTES, $this->sexualattributes);
        if ($this->isColumnModified(MorphdatPeer::SEXMORPHOLOGY)) $criteria->add(MorphdatPeer::SEXMORPHOLOGY, $this->sexmorphology);
        if ($this->isColumnModified(MorphdatPeer::SEXCOLORS)) $criteria->add(MorphdatPeer::SEXCOLORS, $this->sexcolors);
        if ($this->isColumnModified(MorphdatPeer::STRIKINGFEATURES)) $criteria->add(MorphdatPeer::STRIKINGFEATURES, $this->strikingfeatures);
        if ($this->isColumnModified(MorphdatPeer::BODYSHAPEI)) $criteria->add(MorphdatPeer::BODYSHAPEI, $this->bodyshapei);
        if ($this->isColumnModified(MorphdatPeer::BODYSHAPEII)) $criteria->add(MorphdatPeer::BODYSHAPEII, $this->bodyshapeii);
        if ($this->isColumnModified(MorphdatPeer::FOREHEAD)) $criteria->add(MorphdatPeer::FOREHEAD, $this->forehead);
        if ($this->isColumnModified(MorphdatPeer::OPERCULUMPRESENT)) $criteria->add(MorphdatPeer::OPERCULUMPRESENT, $this->operculumpresent);
        if ($this->isColumnModified(MorphdatPeer::TYPEOFEYES)) $criteria->add(MorphdatPeer::TYPEOFEYES, $this->typeofeyes);
        if ($this->isColumnModified(MorphdatPeer::TYPEOFMOUTH)) $criteria->add(MorphdatPeer::TYPEOFMOUTH, $this->typeofmouth);
        if ($this->isColumnModified(MorphdatPeer::POSOFMOUTH)) $criteria->add(MorphdatPeer::POSOFMOUTH, $this->posofmouth);
        if ($this->isColumnModified(MorphdatPeer::MANDIBLETEETH)) $criteria->add(MorphdatPeer::MANDIBLETEETH, $this->mandibleteeth);
        if ($this->isColumnModified(MorphdatPeer::MANDIBLETEETHT1)) $criteria->add(MorphdatPeer::MANDIBLETEETHT1, $this->mandibleteetht1);
        if ($this->isColumnModified(MorphdatPeer::MANDIBLETEETHT2)) $criteria->add(MorphdatPeer::MANDIBLETEETHT2, $this->mandibleteetht2);
        if ($this->isColumnModified(MorphdatPeer::MANDIBLEROWSMIN)) $criteria->add(MorphdatPeer::MANDIBLEROWSMIN, $this->mandiblerowsmin);
        if ($this->isColumnModified(MorphdatPeer::MANDIBLEROWSMAX)) $criteria->add(MorphdatPeer::MANDIBLEROWSMAX, $this->mandiblerowsmax);
        if ($this->isColumnModified(MorphdatPeer::MAXILLATEETH)) $criteria->add(MorphdatPeer::MAXILLATEETH, $this->maxillateeth);
        if ($this->isColumnModified(MorphdatPeer::MAXILLATEETHT1)) $criteria->add(MorphdatPeer::MAXILLATEETHT1, $this->maxillateetht1);
        if ($this->isColumnModified(MorphdatPeer::MAXILLATEETHT2)) $criteria->add(MorphdatPeer::MAXILLATEETHT2, $this->maxillateetht2);
        if ($this->isColumnModified(MorphdatPeer::MAXILLAROWSMIN)) $criteria->add(MorphdatPeer::MAXILLAROWSMIN, $this->maxillarowsmin);
        if ($this->isColumnModified(MorphdatPeer::MAXILLAROWSMAX)) $criteria->add(MorphdatPeer::MAXILLAROWSMAX, $this->maxillarowsmax);
        if ($this->isColumnModified(MorphdatPeer::VOMERINETEETH)) $criteria->add(MorphdatPeer::VOMERINETEETH, $this->vomerineteeth);
        if ($this->isColumnModified(MorphdatPeer::VOMERINETEETHT1)) $criteria->add(MorphdatPeer::VOMERINETEETHT1, $this->vomerineteetht1);
        if ($this->isColumnModified(MorphdatPeer::VOMERINETEETHT2)) $criteria->add(MorphdatPeer::VOMERINETEETHT2, $this->vomerineteetht2);
        if ($this->isColumnModified(MorphdatPeer::VOMERINEROWSMIN)) $criteria->add(MorphdatPeer::VOMERINEROWSMIN, $this->vomerinerowsmin);
        if ($this->isColumnModified(MorphdatPeer::VOMERINEROWSMAX)) $criteria->add(MorphdatPeer::VOMERINEROWSMAX, $this->vomerinerowsmax);
        if ($this->isColumnModified(MorphdatPeer::PALATINE)) $criteria->add(MorphdatPeer::PALATINE, $this->palatine);
        if ($this->isColumnModified(MorphdatPeer::PALATINETEETHT1)) $criteria->add(MorphdatPeer::PALATINETEETHT1, $this->palatineteetht1);
        if ($this->isColumnModified(MorphdatPeer::PALATINETEETHT2)) $criteria->add(MorphdatPeer::PALATINETEETHT2, $this->palatineteetht2);
        if ($this->isColumnModified(MorphdatPeer::PALATINEROWSMIN)) $criteria->add(MorphdatPeer::PALATINEROWSMIN, $this->palatinerowsmin);
        if ($this->isColumnModified(MorphdatPeer::PALATINEROWSMAX)) $criteria->add(MorphdatPeer::PALATINEROWSMAX, $this->palatinerowsmax);
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALTEETH)) $criteria->add(MorphdatPeer::PHARYNGEALTEETH, $this->pharyngealteeth);
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALTEETHT1)) $criteria->add(MorphdatPeer::PHARYNGEALTEETHT1, $this->pharyngealteetht1);
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALTEETHT2)) $criteria->add(MorphdatPeer::PHARYNGEALTEETHT2, $this->pharyngealteetht2);
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALROWSMIN)) $criteria->add(MorphdatPeer::PHARYNGEALROWSMIN, $this->pharyngealrowsmin);
        if ($this->isColumnModified(MorphdatPeer::PHARYNGEALROWSMAX)) $criteria->add(MorphdatPeer::PHARYNGEALROWSMAX, $this->pharyngealrowsmax);
        if ($this->isColumnModified(MorphdatPeer::TEETHONTONGUE)) $criteria->add(MorphdatPeer::TEETHONTONGUE, $this->teethontongue);
        if ($this->isColumnModified(MorphdatPeer::LIPSTEETH)) $criteria->add(MorphdatPeer::LIPSTEETH, $this->lipsteeth);
        if ($this->isColumnModified(MorphdatPeer::DERMALTEETH)) $criteria->add(MorphdatPeer::DERMALTEETH, $this->dermalteeth);
        if ($this->isColumnModified(MorphdatPeer::COMMENTONTEETH)) $criteria->add(MorphdatPeer::COMMENTONTEETH, $this->commentonteeth);
        if ($this->isColumnModified(MorphdatPeer::TYPEOFSCALES)) $criteria->add(MorphdatPeer::TYPEOFSCALES, $this->typeofscales);
        if ($this->isColumnModified(MorphdatPeer::SCUTES)) $criteria->add(MorphdatPeer::SCUTES, $this->scutes);
        if ($this->isColumnModified(MorphdatPeer::KEELS)) $criteria->add(MorphdatPeer::KEELS, $this->keels);
        if ($this->isColumnModified(MorphdatPeer::HORSTRIPESTTI)) $criteria->add(MorphdatPeer::HORSTRIPESTTI, $this->horstripestti);
        if ($this->isColumnModified(MorphdatPeer::HORSTRIPESTTII)) $criteria->add(MorphdatPeer::HORSTRIPESTTII, $this->horstripesttii);
        if ($this->isColumnModified(MorphdatPeer::VERSTRIPESTTI)) $criteria->add(MorphdatPeer::VERSTRIPESTTI, $this->verstripestti);
        if ($this->isColumnModified(MorphdatPeer::VERSTRIPESTTII)) $criteria->add(MorphdatPeer::VERSTRIPESTTII, $this->verstripesttii);
        if ($this->isColumnModified(MorphdatPeer::VERSTRIPESTTIII)) $criteria->add(MorphdatPeer::VERSTRIPESTTIII, $this->verstripesttiii);
        if ($this->isColumnModified(MorphdatPeer::DIASTRIPESTTI)) $criteria->add(MorphdatPeer::DIASTRIPESTTI, $this->diastripestti);
        if ($this->isColumnModified(MorphdatPeer::DIASTRIPESTTII)) $criteria->add(MorphdatPeer::DIASTRIPESTTII, $this->diastripesttii);
        if ($this->isColumnModified(MorphdatPeer::DIASTRIPESTTIII)) $criteria->add(MorphdatPeer::DIASTRIPESTTIII, $this->diastripesttiii);
        if ($this->isColumnModified(MorphdatPeer::CURSTRIPESTTI)) $criteria->add(MorphdatPeer::CURSTRIPESTTI, $this->curstripestti);
        if ($this->isColumnModified(MorphdatPeer::CURSTRIPESTTII)) $criteria->add(MorphdatPeer::CURSTRIPESTTII, $this->curstripesttii);
        if ($this->isColumnModified(MorphdatPeer::CURSTRIPESTTIII)) $criteria->add(MorphdatPeer::CURSTRIPESTTIII, $this->curstripesttiii);
        if ($this->isColumnModified(MorphdatPeer::SPOTSTTI)) $criteria->add(MorphdatPeer::SPOTSTTI, $this->spotstti);
        if ($this->isColumnModified(MorphdatPeer::SPOTSTTII)) $criteria->add(MorphdatPeer::SPOTSTTII, $this->spotsttii);
        if ($this->isColumnModified(MorphdatPeer::SPOTSTTIII)) $criteria->add(MorphdatPeer::SPOTSTTIII, $this->spotsttiii);
        if ($this->isColumnModified(MorphdatPeer::DORSALFINI)) $criteria->add(MorphdatPeer::DORSALFINI, $this->dorsalfini);
        if ($this->isColumnModified(MorphdatPeer::DORSALFINII)) $criteria->add(MorphdatPeer::DORSALFINII, $this->dorsalfinii);
        if ($this->isColumnModified(MorphdatPeer::CAUDALFINI)) $criteria->add(MorphdatPeer::CAUDALFINI, $this->caudalfini);
        if ($this->isColumnModified(MorphdatPeer::CAUDALFINII)) $criteria->add(MorphdatPeer::CAUDALFINII, $this->caudalfinii);
        if ($this->isColumnModified(MorphdatPeer::ANALFINI)) $criteria->add(MorphdatPeer::ANALFINI, $this->analfini);
        if ($this->isColumnModified(MorphdatPeer::ANALFINII)) $criteria->add(MorphdatPeer::ANALFINII, $this->analfinii);
        if ($this->isColumnModified(MorphdatPeer::LATERALLINESNO)) $criteria->add(MorphdatPeer::LATERALLINESNO, $this->laterallinesno);
        if ($this->isColumnModified(MorphdatPeer::LLINTERRUPTED)) $criteria->add(MorphdatPeer::LLINTERRUPTED, $this->llinterrupted);
        if ($this->isColumnModified(MorphdatPeer::SCALESLATERALMIN)) $criteria->add(MorphdatPeer::SCALESLATERALMIN, $this->scaleslateralmin);
        if ($this->isColumnModified(MorphdatPeer::SCALESLATERALMAX)) $criteria->add(MorphdatPeer::SCALESLATERALMAX, $this->scaleslateralmax);
        if ($this->isColumnModified(MorphdatPeer::POREDSCALESMIN)) $criteria->add(MorphdatPeer::POREDSCALESMIN, $this->poredscalesmin);
        if ($this->isColumnModified(MorphdatPeer::POREDSCALESMAX)) $criteria->add(MorphdatPeer::POREDSCALESMAX, $this->poredscalesmax);
        if ($this->isColumnModified(MorphdatPeer::LATSERIESMIN)) $criteria->add(MorphdatPeer::LATSERIESMIN, $this->latseriesmin);
        if ($this->isColumnModified(MorphdatPeer::LATSERIESMAX)) $criteria->add(MorphdatPeer::LATSERIESMAX, $this->latseriesmax);
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSABOVEMIN)) $criteria->add(MorphdatPeer::SCALEROWSABOVEMIN, $this->scalerowsabovemin);
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSABOVEMAX)) $criteria->add(MorphdatPeer::SCALEROWSABOVEMAX, $this->scalerowsabovemax);
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSBELOWMIN)) $criteria->add(MorphdatPeer::SCALEROWSBELOWMIN, $this->scalerowsbelowmin);
        if ($this->isColumnModified(MorphdatPeer::SCALEROWSBELOWMAX)) $criteria->add(MorphdatPeer::SCALEROWSBELOWMAX, $this->scalerowsbelowmax);
        if ($this->isColumnModified(MorphdatPeer::SCALESPEDUNCMIN)) $criteria->add(MorphdatPeer::SCALESPEDUNCMIN, $this->scalespeduncmin);
        if ($this->isColumnModified(MorphdatPeer::SCALESPEDUNCMAX)) $criteria->add(MorphdatPeer::SCALESPEDUNCMAX, $this->scalespeduncmax);
        if ($this->isColumnModified(MorphdatPeer::BARBELSNO)) $criteria->add(MorphdatPeer::BARBELSNO, $this->barbelsno);
        if ($this->isColumnModified(MorphdatPeer::BARBELSTYPE)) $criteria->add(MorphdatPeer::BARBELSTYPE, $this->barbelstype);
        if ($this->isColumnModified(MorphdatPeer::GILLCLEFTSNO)) $criteria->add(MorphdatPeer::GILLCLEFTSNO, $this->gillcleftsno);
        if ($this->isColumnModified(MorphdatPeer::SPIRACLE)) $criteria->add(MorphdatPeer::SPIRACLE, $this->spiracle);
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSLOWMIN)) $criteria->add(MorphdatPeer::GILLRAKERSLOWMIN, $this->gillrakerslowmin);
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSLOWMAX)) $criteria->add(MorphdatPeer::GILLRAKERSLOWMAX, $this->gillrakerslowmax);
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSUPMIN)) $criteria->add(MorphdatPeer::GILLRAKERSUPMIN, $this->gillrakersupmin);
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSUPMAX)) $criteria->add(MorphdatPeer::GILLRAKERSUPMAX, $this->gillrakersupmax);
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSTOTALMIN)) $criteria->add(MorphdatPeer::GILLRAKERSTOTALMIN, $this->gillrakerstotalmin);
        if ($this->isColumnModified(MorphdatPeer::GILLRAKERSTOTALMAX)) $criteria->add(MorphdatPeer::GILLRAKERSTOTALMAX, $this->gillrakerstotalmax);
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAE)) $criteria->add(MorphdatPeer::VERTEBRAE, $this->vertebrae);
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAEPREANMIN)) $criteria->add(MorphdatPeer::VERTEBRAEPREANMIN, $this->vertebraepreanmin);
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAEPREANMAX)) $criteria->add(MorphdatPeer::VERTEBRAEPREANMAX, $this->vertebraepreanmax);
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAETOTALMIN)) $criteria->add(MorphdatPeer::VERTEBRAETOTALMIN, $this->vertebraetotalmin);
        if ($this->isColumnModified(MorphdatPeer::VERTEBRAETOTALMAX)) $criteria->add(MorphdatPeer::VERTEBRAETOTALMAX, $this->vertebraetotalmax);
        if ($this->isColumnModified(MorphdatPeer::DORSALATTRIBUTES)) $criteria->add(MorphdatPeer::DORSALATTRIBUTES, $this->dorsalattributes);
        if ($this->isColumnModified(MorphdatPeer::DFINNO)) $criteria->add(MorphdatPeer::DFINNO, $this->dfinno);
        if ($this->isColumnModified(MorphdatPeer::DORSALSPINESMIN)) $criteria->add(MorphdatPeer::DORSALSPINESMIN, $this->dorsalspinesmin);
        if ($this->isColumnModified(MorphdatPeer::DORSALSPINESMAX)) $criteria->add(MorphdatPeer::DORSALSPINESMAX, $this->dorsalspinesmax);
        if ($this->isColumnModified(MorphdatPeer::NOTCHED)) $criteria->add(MorphdatPeer::NOTCHED, $this->notched);
        if ($this->isColumnModified(MorphdatPeer::DORSALSOFTRAYSMIN)) $criteria->add(MorphdatPeer::DORSALSOFTRAYSMIN, $this->dorsalsoftraysmin);
        if ($this->isColumnModified(MorphdatPeer::DORSALSOFTRAYSMAX)) $criteria->add(MorphdatPeer::DORSALSOFTRAYSMAX, $this->dorsalsoftraysmax);
        if ($this->isColumnModified(MorphdatPeer::ADIFIN)) $criteria->add(MorphdatPeer::ADIFIN, $this->adifin);
        if ($this->isColumnModified(MorphdatPeer::DFINLETSMIN)) $criteria->add(MorphdatPeer::DFINLETSMIN, $this->dfinletsmin);
        if ($this->isColumnModified(MorphdatPeer::DFINLETSMAX)) $criteria->add(MorphdatPeer::DFINLETSMAX, $this->dfinletsmax);
        if ($this->isColumnModified(MorphdatPeer::VFINLETSMIN)) $criteria->add(MorphdatPeer::VFINLETSMIN, $this->vfinletsmin);
        if ($this->isColumnModified(MorphdatPeer::VFINLETSMAX)) $criteria->add(MorphdatPeer::VFINLETSMAX, $this->vfinletsmax);
        if ($this->isColumnModified(MorphdatPeer::CSHAPE)) $criteria->add(MorphdatPeer::CSHAPE, $this->cshape);
        if ($this->isColumnModified(MorphdatPeer::ATTRIBUTES)) $criteria->add(MorphdatPeer::ATTRIBUTES, $this->attributes);
        if ($this->isColumnModified(MorphdatPeer::AFINNO)) $criteria->add(MorphdatPeer::AFINNO, $this->afinno);
        if ($this->isColumnModified(MorphdatPeer::ANALFINSPINESMIN)) $criteria->add(MorphdatPeer::ANALFINSPINESMIN, $this->analfinspinesmin);
        if ($this->isColumnModified(MorphdatPeer::ANALFINSPINESMAX)) $criteria->add(MorphdatPeer::ANALFINSPINESMAX, $this->analfinspinesmax);
        if ($this->isColumnModified(MorphdatPeer::ARAYMIN)) $criteria->add(MorphdatPeer::ARAYMIN, $this->araymin);
        if ($this->isColumnModified(MorphdatPeer::ARAYMAX)) $criteria->add(MorphdatPeer::ARAYMAX, $this->araymax);
        if ($this->isColumnModified(MorphdatPeer::PECTORALATTRIBUTES)) $criteria->add(MorphdatPeer::PECTORALATTRIBUTES, $this->pectoralattributes);
        if ($this->isColumnModified(MorphdatPeer::PSPINES2)) $criteria->add(MorphdatPeer::PSPINES2, $this->pspines2);
        if ($this->isColumnModified(MorphdatPeer::PRAYMIN)) $criteria->add(MorphdatPeer::PRAYMIN, $this->praymin);
        if ($this->isColumnModified(MorphdatPeer::PRAYMAX)) $criteria->add(MorphdatPeer::PRAYMAX, $this->praymax);
        if ($this->isColumnModified(MorphdatPeer::PELVICSATTRIBUTES)) $criteria->add(MorphdatPeer::PELVICSATTRIBUTES, $this->pelvicsattributes);
        if ($this->isColumnModified(MorphdatPeer::VPOSITION)) $criteria->add(MorphdatPeer::VPOSITION, $this->vposition);
        if ($this->isColumnModified(MorphdatPeer::VPOSITION2)) $criteria->add(MorphdatPeer::VPOSITION2, $this->vposition2);
        if ($this->isColumnModified(MorphdatPeer::VSPINES)) $criteria->add(MorphdatPeer::VSPINES, $this->vspines);
        if ($this->isColumnModified(MorphdatPeer::VRAYMIN)) $criteria->add(MorphdatPeer::VRAYMIN, $this->vraymin);
        if ($this->isColumnModified(MorphdatPeer::VRAYMAX)) $criteria->add(MorphdatPeer::VRAYMAX, $this->vraymax);
        if ($this->isColumnModified(MorphdatPeer::STANDARDLENGTHCM)) $criteria->add(MorphdatPeer::STANDARDLENGTHCM, $this->standardlengthcm);
        if ($this->isColumnModified(MorphdatPeer::FORKLENGTH)) $criteria->add(MorphdatPeer::FORKLENGTH, $this->forklength);
        if ($this->isColumnModified(MorphdatPeer::TOTALLENGTH)) $criteria->add(MorphdatPeer::TOTALLENGTH, $this->totallength);
        if ($this->isColumnModified(MorphdatPeer::HEADLENGTH)) $criteria->add(MorphdatPeer::HEADLENGTH, $this->headlength);
        if ($this->isColumnModified(MorphdatPeer::PREDORSALLENGTH)) $criteria->add(MorphdatPeer::PREDORSALLENGTH, $this->predorsallength);
        if ($this->isColumnModified(MorphdatPeer::PREPELVICSLENGTH)) $criteria->add(MorphdatPeer::PREPELVICSLENGTH, $this->prepelvicslength);
        if ($this->isColumnModified(MorphdatPeer::PREANALLENGTH)) $criteria->add(MorphdatPeer::PREANALLENGTH, $this->preanallength);
        if ($this->isColumnModified(MorphdatPeer::POSTHEADDEPTH)) $criteria->add(MorphdatPeer::POSTHEADDEPTH, $this->postheaddepth);
        if ($this->isColumnModified(MorphdatPeer::POSTTRUNKDEPTH)) $criteria->add(MorphdatPeer::POSTTRUNKDEPTH, $this->posttrunkdepth);
        if ($this->isColumnModified(MorphdatPeer::MAXIMUMDEPTH)) $criteria->add(MorphdatPeer::MAXIMUMDEPTH, $this->maximumdepth);
        if ($this->isColumnModified(MorphdatPeer::PEDUNCLEDEPTH)) $criteria->add(MorphdatPeer::PEDUNCLEDEPTH, $this->peduncledepth);
        if ($this->isColumnModified(MorphdatPeer::PEDUNCLELENGTH)) $criteria->add(MorphdatPeer::PEDUNCLELENGTH, $this->pedunclelength);
        if ($this->isColumnModified(MorphdatPeer::CAUDALHEIGHT)) $criteria->add(MorphdatPeer::CAUDALHEIGHT, $this->caudalheight);
        if ($this->isColumnModified(MorphdatPeer::PREORBITALLENGTH)) $criteria->add(MorphdatPeer::PREORBITALLENGTH, $this->preorbitallength);
        if ($this->isColumnModified(MorphdatPeer::EYELENGTH)) $criteria->add(MorphdatPeer::EYELENGTH, $this->eyelength);
        if ($this->isColumnModified(MorphdatPeer::ENTERED)) $criteria->add(MorphdatPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(MorphdatPeer::DATEENTERED)) $criteria->add(MorphdatPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(MorphdatPeer::MODIFIED)) $criteria->add(MorphdatPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(MorphdatPeer::DATEMODIFIED)) $criteria->add(MorphdatPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(MorphdatPeer::EXPERT)) $criteria->add(MorphdatPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(MorphdatPeer::DATECHECKED)) $criteria->add(MorphdatPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(MorphdatPeer::REMARKSEX)) $criteria->add(MorphdatPeer::REMARKSEX, $this->remarksex);
        if ($this->isColumnModified(MorphdatPeer::ADDCHARS)) $criteria->add(MorphdatPeer::ADDCHARS, $this->addchars);
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPECIES1)) $criteria->add(MorphdatPeer::SIMILARSPECIES1, $this->similarspecies1);
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPEC1REMARKS)) $criteria->add(MorphdatPeer::SIMILARSPEC1REMARKS, $this->similarspec1remarks);
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPECIES2)) $criteria->add(MorphdatPeer::SIMILARSPECIES2, $this->similarspecies2);
        if ($this->isColumnModified(MorphdatPeer::SIMILARSPEC2REMARKS)) $criteria->add(MorphdatPeer::SIMILARSPEC2REMARKS, $this->similarspec2remarks);
        if ($this->isColumnModified(MorphdatPeer::EASEOFID)) $criteria->add(MorphdatPeer::EASEOFID, $this->easeofid);
        if ($this->isColumnModified(MorphdatPeer::OTHERREF1)) $criteria->add(MorphdatPeer::OTHERREF1, $this->otherref1);
        if ($this->isColumnModified(MorphdatPeer::OTHERREF2)) $criteria->add(MorphdatPeer::OTHERREF2, $this->otherref2);
        if ($this->isColumnModified(MorphdatPeer::TS)) $criteria->add(MorphdatPeer::TS, $this->ts);

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
        $criteria = new Criteria(MorphdatPeer::DATABASE_NAME);
        $criteria->add(MorphdatPeer::STOCKCODE, $this->stockcode);

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
     * @param object $copyObj An object of Morphdat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setMorphdatrefno($this->getMorphdatrefno());
        $copyObj->setFemales($this->getFemales());
        $copyObj->setMales($this->getMales());
        $copyObj->setAppearancepic($this->getAppearancepic());
        $copyObj->setSexualattributes($this->getSexualattributes());
        $copyObj->setSexmorphology($this->getSexmorphology());
        $copyObj->setSexcolors($this->getSexcolors());
        $copyObj->setStrikingfeatures($this->getStrikingfeatures());
        $copyObj->setBodyshapei($this->getBodyshapei());
        $copyObj->setBodyshapeii($this->getBodyshapeii());
        $copyObj->setForehead($this->getForehead());
        $copyObj->setOperculumpresent($this->getOperculumpresent());
        $copyObj->setTypeofeyes($this->getTypeofeyes());
        $copyObj->setTypeofmouth($this->getTypeofmouth());
        $copyObj->setPosofmouth($this->getPosofmouth());
        $copyObj->setMandibleteeth($this->getMandibleteeth());
        $copyObj->setMandibleteetht1($this->getMandibleteetht1());
        $copyObj->setMandibleteetht2($this->getMandibleteetht2());
        $copyObj->setMandiblerowsmin($this->getMandiblerowsmin());
        $copyObj->setMandiblerowsmax($this->getMandiblerowsmax());
        $copyObj->setMaxillateeth($this->getMaxillateeth());
        $copyObj->setMaxillateetht1($this->getMaxillateetht1());
        $copyObj->setMaxillateetht2($this->getMaxillateetht2());
        $copyObj->setMaxillarowsmin($this->getMaxillarowsmin());
        $copyObj->setMaxillarowsmax($this->getMaxillarowsmax());
        $copyObj->setVomerineteeth($this->getVomerineteeth());
        $copyObj->setVomerineteetht1($this->getVomerineteetht1());
        $copyObj->setVomerineteetht2($this->getVomerineteetht2());
        $copyObj->setVomerinerowsmin($this->getVomerinerowsmin());
        $copyObj->setVomerinerowsmax($this->getVomerinerowsmax());
        $copyObj->setPalatine($this->getPalatine());
        $copyObj->setPalatineteetht1($this->getPalatineteetht1());
        $copyObj->setPalatineteetht2($this->getPalatineteetht2());
        $copyObj->setPalatinerowsmin($this->getPalatinerowsmin());
        $copyObj->setPalatinerowsmax($this->getPalatinerowsmax());
        $copyObj->setPharyngealteeth($this->getPharyngealteeth());
        $copyObj->setPharyngealteetht1($this->getPharyngealteetht1());
        $copyObj->setPharyngealteetht2($this->getPharyngealteetht2());
        $copyObj->setPharyngealrowsmin($this->getPharyngealrowsmin());
        $copyObj->setPharyngealrowsmax($this->getPharyngealrowsmax());
        $copyObj->setTeethontongue($this->getTeethontongue());
        $copyObj->setLipsteeth($this->getLipsteeth());
        $copyObj->setDermalteeth($this->getDermalteeth());
        $copyObj->setCommentonteeth($this->getCommentonteeth());
        $copyObj->setTypeofscales($this->getTypeofscales());
        $copyObj->setScutes($this->getScutes());
        $copyObj->setKeels($this->getKeels());
        $copyObj->setHorstripestti($this->getHorstripestti());
        $copyObj->setHorstripesttii($this->getHorstripesttii());
        $copyObj->setVerstripestti($this->getVerstripestti());
        $copyObj->setVerstripesttii($this->getVerstripesttii());
        $copyObj->setVerstripesttiii($this->getVerstripesttiii());
        $copyObj->setDiastripestti($this->getDiastripestti());
        $copyObj->setDiastripesttii($this->getDiastripesttii());
        $copyObj->setDiastripesttiii($this->getDiastripesttiii());
        $copyObj->setCurstripestti($this->getCurstripestti());
        $copyObj->setCurstripesttii($this->getCurstripesttii());
        $copyObj->setCurstripesttiii($this->getCurstripesttiii());
        $copyObj->setSpotstti($this->getSpotstti());
        $copyObj->setSpotsttii($this->getSpotsttii());
        $copyObj->setSpotsttiii($this->getSpotsttiii());
        $copyObj->setDorsalfini($this->getDorsalfini());
        $copyObj->setDorsalfinii($this->getDorsalfinii());
        $copyObj->setCaudalfini($this->getCaudalfini());
        $copyObj->setCaudalfinii($this->getCaudalfinii());
        $copyObj->setAnalfini($this->getAnalfini());
        $copyObj->setAnalfinii($this->getAnalfinii());
        $copyObj->setLaterallinesno($this->getLaterallinesno());
        $copyObj->setLlinterrupted($this->getLlinterrupted());
        $copyObj->setScaleslateralmin($this->getScaleslateralmin());
        $copyObj->setScaleslateralmax($this->getScaleslateralmax());
        $copyObj->setPoredscalesmin($this->getPoredscalesmin());
        $copyObj->setPoredscalesmax($this->getPoredscalesmax());
        $copyObj->setLatseriesmin($this->getLatseriesmin());
        $copyObj->setLatseriesmax($this->getLatseriesmax());
        $copyObj->setScalerowsabovemin($this->getScalerowsabovemin());
        $copyObj->setScalerowsabovemax($this->getScalerowsabovemax());
        $copyObj->setScalerowsbelowmin($this->getScalerowsbelowmin());
        $copyObj->setScalerowsbelowmax($this->getScalerowsbelowmax());
        $copyObj->setScalespeduncmin($this->getScalespeduncmin());
        $copyObj->setScalespeduncmax($this->getScalespeduncmax());
        $copyObj->setBarbelsno($this->getBarbelsno());
        $copyObj->setBarbelstype($this->getBarbelstype());
        $copyObj->setGillcleftsno($this->getGillcleftsno());
        $copyObj->setSpiracle($this->getSpiracle());
        $copyObj->setGillrakerslowmin($this->getGillrakerslowmin());
        $copyObj->setGillrakerslowmax($this->getGillrakerslowmax());
        $copyObj->setGillrakersupmin($this->getGillrakersupmin());
        $copyObj->setGillrakersupmax($this->getGillrakersupmax());
        $copyObj->setGillrakerstotalmin($this->getGillrakerstotalmin());
        $copyObj->setGillrakerstotalmax($this->getGillrakerstotalmax());
        $copyObj->setVertebrae($this->getVertebrae());
        $copyObj->setVertebraepreanmin($this->getVertebraepreanmin());
        $copyObj->setVertebraepreanmax($this->getVertebraepreanmax());
        $copyObj->setVertebraetotalmin($this->getVertebraetotalmin());
        $copyObj->setVertebraetotalmax($this->getVertebraetotalmax());
        $copyObj->setDorsalattributes($this->getDorsalattributes());
        $copyObj->setDfinno($this->getDfinno());
        $copyObj->setDorsalspinesmin($this->getDorsalspinesmin());
        $copyObj->setDorsalspinesmax($this->getDorsalspinesmax());
        $copyObj->setNotched($this->getNotched());
        $copyObj->setDorsalsoftraysmin($this->getDorsalsoftraysmin());
        $copyObj->setDorsalsoftraysmax($this->getDorsalsoftraysmax());
        $copyObj->setAdifin($this->getAdifin());
        $copyObj->setDfinletsmin($this->getDfinletsmin());
        $copyObj->setDfinletsmax($this->getDfinletsmax());
        $copyObj->setVfinletsmin($this->getVfinletsmin());
        $copyObj->setVfinletsmax($this->getVfinletsmax());
        $copyObj->setCshape($this->getCshape());
        $copyObj->setAttributes($this->getAttributes());
        $copyObj->setAfinno($this->getAfinno());
        $copyObj->setAnalfinspinesmin($this->getAnalfinspinesmin());
        $copyObj->setAnalfinspinesmax($this->getAnalfinspinesmax());
        $copyObj->setAraymin($this->getAraymin());
        $copyObj->setAraymax($this->getAraymax());
        $copyObj->setPectoralattributes($this->getPectoralattributes());
        $copyObj->setPspines2($this->getPspines2());
        $copyObj->setPraymin($this->getPraymin());
        $copyObj->setPraymax($this->getPraymax());
        $copyObj->setPelvicsattributes($this->getPelvicsattributes());
        $copyObj->setVposition($this->getVposition());
        $copyObj->setVposition2($this->getVposition2());
        $copyObj->setVspines($this->getVspines());
        $copyObj->setVraymin($this->getVraymin());
        $copyObj->setVraymax($this->getVraymax());
        $copyObj->setStandardlengthcm($this->getStandardlengthcm());
        $copyObj->setForklength($this->getForklength());
        $copyObj->setTotallength($this->getTotallength());
        $copyObj->setHeadlength($this->getHeadlength());
        $copyObj->setPredorsallength($this->getPredorsallength());
        $copyObj->setPrepelvicslength($this->getPrepelvicslength());
        $copyObj->setPreanallength($this->getPreanallength());
        $copyObj->setPostheaddepth($this->getPostheaddepth());
        $copyObj->setPosttrunkdepth($this->getPosttrunkdepth());
        $copyObj->setMaximumdepth($this->getMaximumdepth());
        $copyObj->setPeduncledepth($this->getPeduncledepth());
        $copyObj->setPedunclelength($this->getPedunclelength());
        $copyObj->setCaudalheight($this->getCaudalheight());
        $copyObj->setPreorbitallength($this->getPreorbitallength());
        $copyObj->setEyelength($this->getEyelength());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setRemarksex($this->getRemarksex());
        $copyObj->setAddchars($this->getAddchars());
        $copyObj->setSimilarspecies1($this->getSimilarspecies1());
        $copyObj->setSimilarspec1remarks($this->getSimilarspec1remarks());
        $copyObj->setSimilarspecies2($this->getSimilarspecies2());
        $copyObj->setSimilarspec2remarks($this->getSimilarspec2remarks());
        $copyObj->setEaseofid($this->getEaseofid());
        $copyObj->setOtherref1($this->getOtherref1());
        $copyObj->setOtherref2($this->getOtherref2());
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
     * @return Morphdat Clone of current object.
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
     * @return MorphdatPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MorphdatPeer();
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
        $this->morphdatrefno = null;
        $this->females = null;
        $this->males = null;
        $this->appearancepic = null;
        $this->sexualattributes = null;
        $this->sexmorphology = null;
        $this->sexcolors = null;
        $this->strikingfeatures = null;
        $this->bodyshapei = null;
        $this->bodyshapeii = null;
        $this->forehead = null;
        $this->operculumpresent = null;
        $this->typeofeyes = null;
        $this->typeofmouth = null;
        $this->posofmouth = null;
        $this->mandibleteeth = null;
        $this->mandibleteetht1 = null;
        $this->mandibleteetht2 = null;
        $this->mandiblerowsmin = null;
        $this->mandiblerowsmax = null;
        $this->maxillateeth = null;
        $this->maxillateetht1 = null;
        $this->maxillateetht2 = null;
        $this->maxillarowsmin = null;
        $this->maxillarowsmax = null;
        $this->vomerineteeth = null;
        $this->vomerineteetht1 = null;
        $this->vomerineteetht2 = null;
        $this->vomerinerowsmin = null;
        $this->vomerinerowsmax = null;
        $this->palatine = null;
        $this->palatineteetht1 = null;
        $this->palatineteetht2 = null;
        $this->palatinerowsmin = null;
        $this->palatinerowsmax = null;
        $this->pharyngealteeth = null;
        $this->pharyngealteetht1 = null;
        $this->pharyngealteetht2 = null;
        $this->pharyngealrowsmin = null;
        $this->pharyngealrowsmax = null;
        $this->teethontongue = null;
        $this->lipsteeth = null;
        $this->dermalteeth = null;
        $this->commentonteeth = null;
        $this->typeofscales = null;
        $this->scutes = null;
        $this->keels = null;
        $this->horstripestti = null;
        $this->horstripesttii = null;
        $this->verstripestti = null;
        $this->verstripesttii = null;
        $this->verstripesttiii = null;
        $this->diastripestti = null;
        $this->diastripesttii = null;
        $this->diastripesttiii = null;
        $this->curstripestti = null;
        $this->curstripesttii = null;
        $this->curstripesttiii = null;
        $this->spotstti = null;
        $this->spotsttii = null;
        $this->spotsttiii = null;
        $this->dorsalfini = null;
        $this->dorsalfinii = null;
        $this->caudalfini = null;
        $this->caudalfinii = null;
        $this->analfini = null;
        $this->analfinii = null;
        $this->laterallinesno = null;
        $this->llinterrupted = null;
        $this->scaleslateralmin = null;
        $this->scaleslateralmax = null;
        $this->poredscalesmin = null;
        $this->poredscalesmax = null;
        $this->latseriesmin = null;
        $this->latseriesmax = null;
        $this->scalerowsabovemin = null;
        $this->scalerowsabovemax = null;
        $this->scalerowsbelowmin = null;
        $this->scalerowsbelowmax = null;
        $this->scalespeduncmin = null;
        $this->scalespeduncmax = null;
        $this->barbelsno = null;
        $this->barbelstype = null;
        $this->gillcleftsno = null;
        $this->spiracle = null;
        $this->gillrakerslowmin = null;
        $this->gillrakerslowmax = null;
        $this->gillrakersupmin = null;
        $this->gillrakersupmax = null;
        $this->gillrakerstotalmin = null;
        $this->gillrakerstotalmax = null;
        $this->vertebrae = null;
        $this->vertebraepreanmin = null;
        $this->vertebraepreanmax = null;
        $this->vertebraetotalmin = null;
        $this->vertebraetotalmax = null;
        $this->dorsalattributes = null;
        $this->dfinno = null;
        $this->dorsalspinesmin = null;
        $this->dorsalspinesmax = null;
        $this->notched = null;
        $this->dorsalsoftraysmin = null;
        $this->dorsalsoftraysmax = null;
        $this->adifin = null;
        $this->dfinletsmin = null;
        $this->dfinletsmax = null;
        $this->vfinletsmin = null;
        $this->vfinletsmax = null;
        $this->cshape = null;
        $this->attributes = null;
        $this->afinno = null;
        $this->analfinspinesmin = null;
        $this->analfinspinesmax = null;
        $this->araymin = null;
        $this->araymax = null;
        $this->pectoralattributes = null;
        $this->pspines2 = null;
        $this->praymin = null;
        $this->praymax = null;
        $this->pelvicsattributes = null;
        $this->vposition = null;
        $this->vposition2 = null;
        $this->vspines = null;
        $this->vraymin = null;
        $this->vraymax = null;
        $this->standardlengthcm = null;
        $this->forklength = null;
        $this->totallength = null;
        $this->headlength = null;
        $this->predorsallength = null;
        $this->prepelvicslength = null;
        $this->preanallength = null;
        $this->postheaddepth = null;
        $this->posttrunkdepth = null;
        $this->maximumdepth = null;
        $this->peduncledepth = null;
        $this->pedunclelength = null;
        $this->caudalheight = null;
        $this->preorbitallength = null;
        $this->eyelength = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->remarksex = null;
        $this->addchars = null;
        $this->similarspecies1 = null;
        $this->similarspec1remarks = null;
        $this->similarspecies2 = null;
        $this->similarspec2remarks = null;
        $this->easeofid = null;
        $this->otherref1 = null;
        $this->otherref2 = null;
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
        return (string) $this->exportTo(MorphdatPeer::DEFAULT_STRING_FORMAT);
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
