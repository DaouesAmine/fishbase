<?php


/**
 * Base class that represents a row from the 'proxims' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseProxims extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProximsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProximsPeer
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
     * The value for the speccode field.
     * @var        int
     */
    protected $speccode;

    /**
     * The value for the chemicsrefno field.
     * Note: this column has a database default value of: 4883
     * @var        int
     */
    protected $chemicsrefno;

    /**
     * The value for the c_code field.
     * @var        string
     */
    protected $c_code;

    /**
     * The value for the locality field.
     * @var        string
     */
    protected $locality;

    /**
     * The value for the length field.
     * @var        double
     */
    protected $length;

    /**
     * The value for the lengthupper field.
     * @var        double
     */
    protected $lengthupper;

    /**
     * The value for the lengthtype field.
     * @var        string
     */
    protected $lengthtype;

    /**
     * The value for the weightlower field.
     * @var        double
     */
    protected $weightlower;

    /**
     * The value for the weightupper field.
     * @var        double
     */
    protected $weightupper;

    /**
     * The value for the headlower field.
     * @var        double
     */
    protected $headlower;

    /**
     * The value for the headupper field.
     * @var        double
     */
    protected $headupper;

    /**
     * The value for the visceralower22 field.
     * @var        double
     */
    protected $visceralower22;

    /**
     * The value for the visceraupper22 field.
     * @var        double
     */
    protected $visceraupper22;

    /**
     * The value for the trunklower field.
     * @var        double
     */
    protected $trunklower;

    /**
     * The value for the trunkupper field.
     * @var        double
     */
    protected $trunkupper;

    /**
     * The value for the roelower field.
     * @var        double
     */
    protected $roelower;

    /**
     * The value for the roeupper field.
     * @var        double
     */
    protected $roeupper;

    /**
     * The value for the skinlower field.
     * @var        double
     */
    protected $skinlower;

    /**
     * The value for the skinupper field.
     * @var        double
     */
    protected $skinupper;

    /**
     * The value for the testeslower field.
     * @var        double
     */
    protected $testeslower;

    /**
     * The value for the testesupper field.
     * @var        double
     */
    protected $testesupper;

    /**
     * The value for the finslower field.
     * @var        double
     */
    protected $finslower;

    /**
     * The value for the finsupper field.
     * @var        double
     */
    protected $finsupper;

    /**
     * The value for the liverlower field.
     * @var        double
     */
    protected $liverlower;

    /**
     * The value for the liverupper field.
     * @var        double
     */
    protected $liverupper;

    /**
     * The value for the boneslower field.
     * @var        double
     */
    protected $boneslower;

    /**
     * The value for the bonesupper field.
     * @var        double
     */
    protected $bonesupper;

    /**
     * The value for the meatlower field.
     * @var        double
     */
    protected $meatlower;

    /**
     * The value for the meatupper field.
     * @var        double
     */
    protected $meatupper;

    /**
     * The value for the filletlower field.
     * @var        double
     */
    protected $filletlower;

    /**
     * The value for the filletupper field.
     * @var        double
     */
    protected $filletupper;

    /**
     * The value for the steaklower field.
     * @var        double
     */
    protected $steaklower;

    /**
     * The value for the steakupper field.
     * @var        double
     */
    protected $steakupper;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the meatmoistmin field.
     * @var        double
     */
    protected $meatmoistmin;

    /**
     * The value for the meatmoistmax field.
     * @var        double
     */
    protected $meatmoistmax;

    /**
     * The value for the meatprotmin field.
     * @var        double
     */
    protected $meatprotmin;

    /**
     * The value for the meatprotmax field.
     * @var        double
     */
    protected $meatprotmax;

    /**
     * The value for the meatfatmin field.
     * @var        double
     */
    protected $meatfatmin;

    /**
     * The value for the meatfatmax field.
     * @var        double
     */
    protected $meatfatmax;

    /**
     * The value for the meatashmin field.
     * @var        double
     */
    protected $meatashmin;

    /**
     * The value for the meatashmax field.
     * @var        double
     */
    protected $meatashmax;

    /**
     * The value for the livermoistmin field.
     * @var        double
     */
    protected $livermoistmin;

    /**
     * The value for the livermoistmax field.
     * @var        double
     */
    protected $livermoistmax;

    /**
     * The value for the liverprotmin field.
     * @var        double
     */
    protected $liverprotmin;

    /**
     * The value for the liverprotmax field.
     * @var        double
     */
    protected $liverprotmax;

    /**
     * The value for the liverfatmin field.
     * @var        double
     */
    protected $liverfatmin;

    /**
     * The value for the liverfatmax field.
     * @var        double
     */
    protected $liverfatmax;

    /**
     * The value for the liverashmin field.
     * @var        double
     */
    protected $liverashmin;

    /**
     * The value for the liverashmax field.
     * @var        double
     */
    protected $liverashmax;

    /**
     * The value for the roemoistmin field.
     * @var        double
     */
    protected $roemoistmin;

    /**
     * The value for the roemoistmax field.
     * @var        double
     */
    protected $roemoistmax;

    /**
     * The value for the roeprotmin field.
     * @var        double
     */
    protected $roeprotmin;

    /**
     * The value for the roeprotmax field.
     * @var        double
     */
    protected $roeprotmax;

    /**
     * The value for the roefatmin field.
     * @var        double
     */
    protected $roefatmin;

    /**
     * The value for the roefatmax field.
     * @var        double
     */
    protected $roefatmax;

    /**
     * The value for the roeashmin field.
     * @var        double
     */
    protected $roeashmin;

    /**
     * The value for the roeashmax field.
     * @var        double
     */
    protected $roeashmax;

    /**
     * The value for the visceramoistmin field.
     * @var        double
     */
    protected $visceramoistmin;

    /**
     * The value for the visceramoistmax field.
     * @var        double
     */
    protected $visceramoistmax;

    /**
     * The value for the visceraprotmin field.
     * @var        double
     */
    protected $visceraprotmin;

    /**
     * The value for the visceraprotmax field.
     * @var        double
     */
    protected $visceraprotmax;

    /**
     * The value for the viscerafatmin field.
     * @var        double
     */
    protected $viscerafatmin;

    /**
     * The value for the viscerafatmax field.
     * @var        double
     */
    protected $viscerafatmax;

    /**
     * The value for the visceraashmin field.
     * @var        double
     */
    protected $visceraashmin;

    /**
     * The value for the visceraashmax field.
     * @var        double
     */
    protected $visceraashmax;

    /**
     * The value for the headmoistmin field.
     * @var        double
     */
    protected $headmoistmin;

    /**
     * The value for the headmoistmax field.
     * @var        double
     */
    protected $headmoistmax;

    /**
     * The value for the headprotmin field.
     * @var        double
     */
    protected $headprotmin;

    /**
     * The value for the headprotmax field.
     * @var        double
     */
    protected $headprotmax;

    /**
     * The value for the headfatmin field.
     * @var        double
     */
    protected $headfatmin;

    /**
     * The value for the headfatmax field.
     * @var        double
     */
    protected $headfatmax;

    /**
     * The value for the headashmin field.
     * @var        double
     */
    protected $headashmin;

    /**
     * The value for the headashmax field.
     * @var        double
     */
    protected $headashmax;

    /**
     * The value for the wastemoistmin field.
     * @var        double
     */
    protected $wastemoistmin;

    /**
     * The value for the wastemoistmax field.
     * @var        double
     */
    protected $wastemoistmax;

    /**
     * The value for the wasteprotmin field.
     * @var        double
     */
    protected $wasteprotmin;

    /**
     * The value for the wasteprotmax field.
     * @var        double
     */
    protected $wasteprotmax;

    /**
     * The value for the wastefatmin field.
     * @var        double
     */
    protected $wastefatmin;

    /**
     * The value for the wastefatmax field.
     * @var        double
     */
    protected $wastefatmax;

    /**
     * The value for the wasteashmin field.
     * @var        double
     */
    protected $wasteashmin;

    /**
     * The value for the wasteashmax field.
     * @var        double
     */
    protected $wasteashmax;

    /**
     * The value for the commentchemics field.
     * @var        string
     */
    protected $commentchemics;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->chemicsrefno = 4883;
    }

    /**
     * Initializes internal state of BaseProxims object.
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
     * Get the [speccode] column value.
     *
     * @return int
     */
    public function getSpeccode()
    {

        return $this->speccode;
    }

    /**
     * Get the [chemicsrefno] column value.
     *
     * @return int
     */
    public function getChemicsrefno()
    {

        return $this->chemicsrefno;
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
     * Get the [locality] column value.
     *
     * @return string
     */
    public function getLocality()
    {

        return $this->locality;
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
     * Get the [lengthupper] column value.
     *
     * @return double
     */
    public function getLengthupper()
    {

        return $this->lengthupper;
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
     * Get the [weightlower] column value.
     *
     * @return double
     */
    public function getWeightlower()
    {

        return $this->weightlower;
    }

    /**
     * Get the [weightupper] column value.
     *
     * @return double
     */
    public function getWeightupper()
    {

        return $this->weightupper;
    }

    /**
     * Get the [headlower] column value.
     *
     * @return double
     */
    public function getHeadlower()
    {

        return $this->headlower;
    }

    /**
     * Get the [headupper] column value.
     *
     * @return double
     */
    public function getHeadupper()
    {

        return $this->headupper;
    }

    /**
     * Get the [visceralower22] column value.
     *
     * @return double
     */
    public function getVisceralower22()
    {

        return $this->visceralower22;
    }

    /**
     * Get the [visceraupper22] column value.
     *
     * @return double
     */
    public function getVisceraupper22()
    {

        return $this->visceraupper22;
    }

    /**
     * Get the [trunklower] column value.
     *
     * @return double
     */
    public function getTrunklower()
    {

        return $this->trunklower;
    }

    /**
     * Get the [trunkupper] column value.
     *
     * @return double
     */
    public function getTrunkupper()
    {

        return $this->trunkupper;
    }

    /**
     * Get the [roelower] column value.
     *
     * @return double
     */
    public function getRoelower()
    {

        return $this->roelower;
    }

    /**
     * Get the [roeupper] column value.
     *
     * @return double
     */
    public function getRoeupper()
    {

        return $this->roeupper;
    }

    /**
     * Get the [skinlower] column value.
     *
     * @return double
     */
    public function getSkinlower()
    {

        return $this->skinlower;
    }

    /**
     * Get the [skinupper] column value.
     *
     * @return double
     */
    public function getSkinupper()
    {

        return $this->skinupper;
    }

    /**
     * Get the [testeslower] column value.
     *
     * @return double
     */
    public function getTesteslower()
    {

        return $this->testeslower;
    }

    /**
     * Get the [testesupper] column value.
     *
     * @return double
     */
    public function getTestesupper()
    {

        return $this->testesupper;
    }

    /**
     * Get the [finslower] column value.
     *
     * @return double
     */
    public function getFinslower()
    {

        return $this->finslower;
    }

    /**
     * Get the [finsupper] column value.
     *
     * @return double
     */
    public function getFinsupper()
    {

        return $this->finsupper;
    }

    /**
     * Get the [liverlower] column value.
     *
     * @return double
     */
    public function getLiverlower()
    {

        return $this->liverlower;
    }

    /**
     * Get the [liverupper] column value.
     *
     * @return double
     */
    public function getLiverupper()
    {

        return $this->liverupper;
    }

    /**
     * Get the [boneslower] column value.
     *
     * @return double
     */
    public function getBoneslower()
    {

        return $this->boneslower;
    }

    /**
     * Get the [bonesupper] column value.
     *
     * @return double
     */
    public function getBonesupper()
    {

        return $this->bonesupper;
    }

    /**
     * Get the [meatlower] column value.
     *
     * @return double
     */
    public function getMeatlower()
    {

        return $this->meatlower;
    }

    /**
     * Get the [meatupper] column value.
     *
     * @return double
     */
    public function getMeatupper()
    {

        return $this->meatupper;
    }

    /**
     * Get the [filletlower] column value.
     *
     * @return double
     */
    public function getFilletlower()
    {

        return $this->filletlower;
    }

    /**
     * Get the [filletupper] column value.
     *
     * @return double
     */
    public function getFilletupper()
    {

        return $this->filletupper;
    }

    /**
     * Get the [steaklower] column value.
     *
     * @return double
     */
    public function getSteaklower()
    {

        return $this->steaklower;
    }

    /**
     * Get the [steakupper] column value.
     *
     * @return double
     */
    public function getSteakupper()
    {

        return $this->steakupper;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [meatmoistmin] column value.
     *
     * @return double
     */
    public function getMeatmoistmin()
    {

        return $this->meatmoistmin;
    }

    /**
     * Get the [meatmoistmax] column value.
     *
     * @return double
     */
    public function getMeatmoistmax()
    {

        return $this->meatmoistmax;
    }

    /**
     * Get the [meatprotmin] column value.
     *
     * @return double
     */
    public function getMeatprotmin()
    {

        return $this->meatprotmin;
    }

    /**
     * Get the [meatprotmax] column value.
     *
     * @return double
     */
    public function getMeatprotmax()
    {

        return $this->meatprotmax;
    }

    /**
     * Get the [meatfatmin] column value.
     *
     * @return double
     */
    public function getMeatfatmin()
    {

        return $this->meatfatmin;
    }

    /**
     * Get the [meatfatmax] column value.
     *
     * @return double
     */
    public function getMeatfatmax()
    {

        return $this->meatfatmax;
    }

    /**
     * Get the [meatashmin] column value.
     *
     * @return double
     */
    public function getMeatashmin()
    {

        return $this->meatashmin;
    }

    /**
     * Get the [meatashmax] column value.
     *
     * @return double
     */
    public function getMeatashmax()
    {

        return $this->meatashmax;
    }

    /**
     * Get the [livermoistmin] column value.
     *
     * @return double
     */
    public function getLivermoistmin()
    {

        return $this->livermoistmin;
    }

    /**
     * Get the [livermoistmax] column value.
     *
     * @return double
     */
    public function getLivermoistmax()
    {

        return $this->livermoistmax;
    }

    /**
     * Get the [liverprotmin] column value.
     *
     * @return double
     */
    public function getLiverprotmin()
    {

        return $this->liverprotmin;
    }

    /**
     * Get the [liverprotmax] column value.
     *
     * @return double
     */
    public function getLiverprotmax()
    {

        return $this->liverprotmax;
    }

    /**
     * Get the [liverfatmin] column value.
     *
     * @return double
     */
    public function getLiverfatmin()
    {

        return $this->liverfatmin;
    }

    /**
     * Get the [liverfatmax] column value.
     *
     * @return double
     */
    public function getLiverfatmax()
    {

        return $this->liverfatmax;
    }

    /**
     * Get the [liverashmin] column value.
     *
     * @return double
     */
    public function getLiverashmin()
    {

        return $this->liverashmin;
    }

    /**
     * Get the [liverashmax] column value.
     *
     * @return double
     */
    public function getLiverashmax()
    {

        return $this->liverashmax;
    }

    /**
     * Get the [roemoistmin] column value.
     *
     * @return double
     */
    public function getRoemoistmin()
    {

        return $this->roemoistmin;
    }

    /**
     * Get the [roemoistmax] column value.
     *
     * @return double
     */
    public function getRoemoistmax()
    {

        return $this->roemoistmax;
    }

    /**
     * Get the [roeprotmin] column value.
     *
     * @return double
     */
    public function getRoeprotmin()
    {

        return $this->roeprotmin;
    }

    /**
     * Get the [roeprotmax] column value.
     *
     * @return double
     */
    public function getRoeprotmax()
    {

        return $this->roeprotmax;
    }

    /**
     * Get the [roefatmin] column value.
     *
     * @return double
     */
    public function getRoefatmin()
    {

        return $this->roefatmin;
    }

    /**
     * Get the [roefatmax] column value.
     *
     * @return double
     */
    public function getRoefatmax()
    {

        return $this->roefatmax;
    }

    /**
     * Get the [roeashmin] column value.
     *
     * @return double
     */
    public function getRoeashmin()
    {

        return $this->roeashmin;
    }

    /**
     * Get the [roeashmax] column value.
     *
     * @return double
     */
    public function getRoeashmax()
    {

        return $this->roeashmax;
    }

    /**
     * Get the [visceramoistmin] column value.
     *
     * @return double
     */
    public function getVisceramoistmin()
    {

        return $this->visceramoistmin;
    }

    /**
     * Get the [visceramoistmax] column value.
     *
     * @return double
     */
    public function getVisceramoistmax()
    {

        return $this->visceramoistmax;
    }

    /**
     * Get the [visceraprotmin] column value.
     *
     * @return double
     */
    public function getVisceraprotmin()
    {

        return $this->visceraprotmin;
    }

    /**
     * Get the [visceraprotmax] column value.
     *
     * @return double
     */
    public function getVisceraprotmax()
    {

        return $this->visceraprotmax;
    }

    /**
     * Get the [viscerafatmin] column value.
     *
     * @return double
     */
    public function getViscerafatmin()
    {

        return $this->viscerafatmin;
    }

    /**
     * Get the [viscerafatmax] column value.
     *
     * @return double
     */
    public function getViscerafatmax()
    {

        return $this->viscerafatmax;
    }

    /**
     * Get the [visceraashmin] column value.
     *
     * @return double
     */
    public function getVisceraashmin()
    {

        return $this->visceraashmin;
    }

    /**
     * Get the [visceraashmax] column value.
     *
     * @return double
     */
    public function getVisceraashmax()
    {

        return $this->visceraashmax;
    }

    /**
     * Get the [headmoistmin] column value.
     *
     * @return double
     */
    public function getHeadmoistmin()
    {

        return $this->headmoistmin;
    }

    /**
     * Get the [headmoistmax] column value.
     *
     * @return double
     */
    public function getHeadmoistmax()
    {

        return $this->headmoistmax;
    }

    /**
     * Get the [headprotmin] column value.
     *
     * @return double
     */
    public function getHeadprotmin()
    {

        return $this->headprotmin;
    }

    /**
     * Get the [headprotmax] column value.
     *
     * @return double
     */
    public function getHeadprotmax()
    {

        return $this->headprotmax;
    }

    /**
     * Get the [headfatmin] column value.
     *
     * @return double
     */
    public function getHeadfatmin()
    {

        return $this->headfatmin;
    }

    /**
     * Get the [headfatmax] column value.
     *
     * @return double
     */
    public function getHeadfatmax()
    {

        return $this->headfatmax;
    }

    /**
     * Get the [headashmin] column value.
     *
     * @return double
     */
    public function getHeadashmin()
    {

        return $this->headashmin;
    }

    /**
     * Get the [headashmax] column value.
     *
     * @return double
     */
    public function getHeadashmax()
    {

        return $this->headashmax;
    }

    /**
     * Get the [wastemoistmin] column value.
     *
     * @return double
     */
    public function getWastemoistmin()
    {

        return $this->wastemoistmin;
    }

    /**
     * Get the [wastemoistmax] column value.
     *
     * @return double
     */
    public function getWastemoistmax()
    {

        return $this->wastemoistmax;
    }

    /**
     * Get the [wasteprotmin] column value.
     *
     * @return double
     */
    public function getWasteprotmin()
    {

        return $this->wasteprotmin;
    }

    /**
     * Get the [wasteprotmax] column value.
     *
     * @return double
     */
    public function getWasteprotmax()
    {

        return $this->wasteprotmax;
    }

    /**
     * Get the [wastefatmin] column value.
     *
     * @return double
     */
    public function getWastefatmin()
    {

        return $this->wastefatmin;
    }

    /**
     * Get the [wastefatmax] column value.
     *
     * @return double
     */
    public function getWastefatmax()
    {

        return $this->wastefatmax;
    }

    /**
     * Get the [wasteashmin] column value.
     *
     * @return double
     */
    public function getWasteashmin()
    {

        return $this->wasteashmin;
    }

    /**
     * Get the [wasteashmax] column value.
     *
     * @return double
     */
    public function getWasteashmax()
    {

        return $this->wasteashmax;
    }

    /**
     * Get the [commentchemics] column value.
     *
     * @return string
     */
    public function getCommentchemics()
    {

        return $this->commentchemics;
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
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = ProximsPeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = ProximsPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [chemicsrefno] column.
     *
     * @param  int $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setChemicsrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->chemicsrefno !== $v) {
            $this->chemicsrefno = $v;
            $this->modifiedColumns[] = ProximsPeer::CHEMICSREFNO;
        }


        return $this;
    } // setChemicsrefno()

    /**
     * Set the value of [c_code] column.
     *
     * @param  string $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setCCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->c_code !== $v) {
            $this->c_code = $v;
            $this->modifiedColumns[] = ProximsPeer::C_CODE;
        }


        return $this;
    } // setCCode()

    /**
     * Set the value of [locality] column.
     *
     * @param  string $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLocality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locality !== $v) {
            $this->locality = $v;
            $this->modifiedColumns[] = ProximsPeer::LOCALITY;
        }


        return $this;
    } // setLocality()

    /**
     * Set the value of [length] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLength($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->length !== $v) {
            $this->length = $v;
            $this->modifiedColumns[] = ProximsPeer::LENGTH;
        }


        return $this;
    } // setLength()

    /**
     * Set the value of [lengthupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLengthupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lengthupper !== $v) {
            $this->lengthupper = $v;
            $this->modifiedColumns[] = ProximsPeer::LENGTHUPPER;
        }


        return $this;
    } // setLengthupper()

    /**
     * Set the value of [lengthtype] column.
     *
     * @param  string $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengthtype !== $v) {
            $this->lengthtype = $v;
            $this->modifiedColumns[] = ProximsPeer::LENGTHTYPE;
        }


        return $this;
    } // setLengthtype()

    /**
     * Set the value of [weightlower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWeightlower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightlower !== $v) {
            $this->weightlower = $v;
            $this->modifiedColumns[] = ProximsPeer::WEIGHTLOWER;
        }


        return $this;
    } // setWeightlower()

    /**
     * Set the value of [weightupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWeightupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->weightupper !== $v) {
            $this->weightupper = $v;
            $this->modifiedColumns[] = ProximsPeer::WEIGHTUPPER;
        }


        return $this;
    } // setWeightupper()

    /**
     * Set the value of [headlower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadlower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headlower !== $v) {
            $this->headlower = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADLOWER;
        }


        return $this;
    } // setHeadlower()

    /**
     * Set the value of [headupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headupper !== $v) {
            $this->headupper = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADUPPER;
        }


        return $this;
    } // setHeadupper()

    /**
     * Set the value of [visceralower22] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceralower22($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceralower22 !== $v) {
            $this->visceralower22 = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERALOWER22;
        }


        return $this;
    } // setVisceralower22()

    /**
     * Set the value of [visceraupper22] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceraupper22($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceraupper22 !== $v) {
            $this->visceraupper22 = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAUPPER22;
        }


        return $this;
    } // setVisceraupper22()

    /**
     * Set the value of [trunklower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setTrunklower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trunklower !== $v) {
            $this->trunklower = $v;
            $this->modifiedColumns[] = ProximsPeer::TRUNKLOWER;
        }


        return $this;
    } // setTrunklower()

    /**
     * Set the value of [trunkupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setTrunkupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->trunkupper !== $v) {
            $this->trunkupper = $v;
            $this->modifiedColumns[] = ProximsPeer::TRUNKUPPER;
        }


        return $this;
    } // setTrunkupper()

    /**
     * Set the value of [roelower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoelower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roelower !== $v) {
            $this->roelower = $v;
            $this->modifiedColumns[] = ProximsPeer::ROELOWER;
        }


        return $this;
    } // setRoelower()

    /**
     * Set the value of [roeupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoeupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roeupper !== $v) {
            $this->roeupper = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEUPPER;
        }


        return $this;
    } // setRoeupper()

    /**
     * Set the value of [skinlower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setSkinlower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->skinlower !== $v) {
            $this->skinlower = $v;
            $this->modifiedColumns[] = ProximsPeer::SKINLOWER;
        }


        return $this;
    } // setSkinlower()

    /**
     * Set the value of [skinupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setSkinupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->skinupper !== $v) {
            $this->skinupper = $v;
            $this->modifiedColumns[] = ProximsPeer::SKINUPPER;
        }


        return $this;
    } // setSkinupper()

    /**
     * Set the value of [testeslower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setTesteslower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->testeslower !== $v) {
            $this->testeslower = $v;
            $this->modifiedColumns[] = ProximsPeer::TESTESLOWER;
        }


        return $this;
    } // setTesteslower()

    /**
     * Set the value of [testesupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setTestesupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->testesupper !== $v) {
            $this->testesupper = $v;
            $this->modifiedColumns[] = ProximsPeer::TESTESUPPER;
        }


        return $this;
    } // setTestesupper()

    /**
     * Set the value of [finslower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setFinslower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->finslower !== $v) {
            $this->finslower = $v;
            $this->modifiedColumns[] = ProximsPeer::FINSLOWER;
        }


        return $this;
    } // setFinslower()

    /**
     * Set the value of [finsupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setFinsupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->finsupper !== $v) {
            $this->finsupper = $v;
            $this->modifiedColumns[] = ProximsPeer::FINSUPPER;
        }


        return $this;
    } // setFinsupper()

    /**
     * Set the value of [liverlower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverlower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverlower !== $v) {
            $this->liverlower = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERLOWER;
        }


        return $this;
    } // setLiverlower()

    /**
     * Set the value of [liverupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverupper !== $v) {
            $this->liverupper = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERUPPER;
        }


        return $this;
    } // setLiverupper()

    /**
     * Set the value of [boneslower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setBoneslower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->boneslower !== $v) {
            $this->boneslower = $v;
            $this->modifiedColumns[] = ProximsPeer::BONESLOWER;
        }


        return $this;
    } // setBoneslower()

    /**
     * Set the value of [bonesupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setBonesupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->bonesupper !== $v) {
            $this->bonesupper = $v;
            $this->modifiedColumns[] = ProximsPeer::BONESUPPER;
        }


        return $this;
    } // setBonesupper()

    /**
     * Set the value of [meatlower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatlower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatlower !== $v) {
            $this->meatlower = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATLOWER;
        }


        return $this;
    } // setMeatlower()

    /**
     * Set the value of [meatupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatupper !== $v) {
            $this->meatupper = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATUPPER;
        }


        return $this;
    } // setMeatupper()

    /**
     * Set the value of [filletlower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setFilletlower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->filletlower !== $v) {
            $this->filletlower = $v;
            $this->modifiedColumns[] = ProximsPeer::FILLETLOWER;
        }


        return $this;
    } // setFilletlower()

    /**
     * Set the value of [filletupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setFilletupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->filletupper !== $v) {
            $this->filletupper = $v;
            $this->modifiedColumns[] = ProximsPeer::FILLETUPPER;
        }


        return $this;
    } // setFilletupper()

    /**
     * Set the value of [steaklower] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setSteaklower($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->steaklower !== $v) {
            $this->steaklower = $v;
            $this->modifiedColumns[] = ProximsPeer::STEAKLOWER;
        }


        return $this;
    } // setSteaklower()

    /**
     * Set the value of [steakupper] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setSteakupper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->steakupper !== $v) {
            $this->steakupper = $v;
            $this->modifiedColumns[] = ProximsPeer::STEAKUPPER;
        }


        return $this;
    } // setSteakupper()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = ProximsPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [meatmoistmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatmoistmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatmoistmin !== $v) {
            $this->meatmoistmin = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATMOISTMIN;
        }


        return $this;
    } // setMeatmoistmin()

    /**
     * Set the value of [meatmoistmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatmoistmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatmoistmax !== $v) {
            $this->meatmoistmax = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATMOISTMAX;
        }


        return $this;
    } // setMeatmoistmax()

    /**
     * Set the value of [meatprotmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatprotmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatprotmin !== $v) {
            $this->meatprotmin = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATPROTMIN;
        }


        return $this;
    } // setMeatprotmin()

    /**
     * Set the value of [meatprotmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatprotmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatprotmax !== $v) {
            $this->meatprotmax = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATPROTMAX;
        }


        return $this;
    } // setMeatprotmax()

    /**
     * Set the value of [meatfatmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatfatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatfatmin !== $v) {
            $this->meatfatmin = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATFATMIN;
        }


        return $this;
    } // setMeatfatmin()

    /**
     * Set the value of [meatfatmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatfatmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatfatmax !== $v) {
            $this->meatfatmax = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATFATMAX;
        }


        return $this;
    } // setMeatfatmax()

    /**
     * Set the value of [meatashmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatashmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatashmin !== $v) {
            $this->meatashmin = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATASHMIN;
        }


        return $this;
    } // setMeatashmin()

    /**
     * Set the value of [meatashmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setMeatashmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->meatashmax !== $v) {
            $this->meatashmax = $v;
            $this->modifiedColumns[] = ProximsPeer::MEATASHMAX;
        }


        return $this;
    } // setMeatashmax()

    /**
     * Set the value of [livermoistmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLivermoistmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->livermoistmin !== $v) {
            $this->livermoistmin = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERMOISTMIN;
        }


        return $this;
    } // setLivermoistmin()

    /**
     * Set the value of [livermoistmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLivermoistmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->livermoistmax !== $v) {
            $this->livermoistmax = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERMOISTMAX;
        }


        return $this;
    } // setLivermoistmax()

    /**
     * Set the value of [liverprotmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverprotmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverprotmin !== $v) {
            $this->liverprotmin = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERPROTMIN;
        }


        return $this;
    } // setLiverprotmin()

    /**
     * Set the value of [liverprotmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverprotmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverprotmax !== $v) {
            $this->liverprotmax = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERPROTMAX;
        }


        return $this;
    } // setLiverprotmax()

    /**
     * Set the value of [liverfatmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverfatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverfatmin !== $v) {
            $this->liverfatmin = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERFATMIN;
        }


        return $this;
    } // setLiverfatmin()

    /**
     * Set the value of [liverfatmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverfatmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverfatmax !== $v) {
            $this->liverfatmax = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERFATMAX;
        }


        return $this;
    } // setLiverfatmax()

    /**
     * Set the value of [liverashmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverashmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverashmin !== $v) {
            $this->liverashmin = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERASHMIN;
        }


        return $this;
    } // setLiverashmin()

    /**
     * Set the value of [liverashmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setLiverashmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->liverashmax !== $v) {
            $this->liverashmax = $v;
            $this->modifiedColumns[] = ProximsPeer::LIVERASHMAX;
        }


        return $this;
    } // setLiverashmax()

    /**
     * Set the value of [roemoistmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoemoistmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roemoistmin !== $v) {
            $this->roemoistmin = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEMOISTMIN;
        }


        return $this;
    } // setRoemoistmin()

    /**
     * Set the value of [roemoistmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoemoistmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roemoistmax !== $v) {
            $this->roemoistmax = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEMOISTMAX;
        }


        return $this;
    } // setRoemoistmax()

    /**
     * Set the value of [roeprotmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoeprotmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roeprotmin !== $v) {
            $this->roeprotmin = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEPROTMIN;
        }


        return $this;
    } // setRoeprotmin()

    /**
     * Set the value of [roeprotmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoeprotmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roeprotmax !== $v) {
            $this->roeprotmax = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEPROTMAX;
        }


        return $this;
    } // setRoeprotmax()

    /**
     * Set the value of [roefatmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoefatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roefatmin !== $v) {
            $this->roefatmin = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEFATMIN;
        }


        return $this;
    } // setRoefatmin()

    /**
     * Set the value of [roefatmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoefatmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roefatmax !== $v) {
            $this->roefatmax = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEFATMAX;
        }


        return $this;
    } // setRoefatmax()

    /**
     * Set the value of [roeashmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoeashmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roeashmin !== $v) {
            $this->roeashmin = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEASHMIN;
        }


        return $this;
    } // setRoeashmin()

    /**
     * Set the value of [roeashmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRoeashmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->roeashmax !== $v) {
            $this->roeashmax = $v;
            $this->modifiedColumns[] = ProximsPeer::ROEASHMAX;
        }


        return $this;
    } // setRoeashmax()

    /**
     * Set the value of [visceramoistmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceramoistmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceramoistmin !== $v) {
            $this->visceramoistmin = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAMOISTMIN;
        }


        return $this;
    } // setVisceramoistmin()

    /**
     * Set the value of [visceramoistmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceramoistmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceramoistmax !== $v) {
            $this->visceramoistmax = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAMOISTMAX;
        }


        return $this;
    } // setVisceramoistmax()

    /**
     * Set the value of [visceraprotmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceraprotmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceraprotmin !== $v) {
            $this->visceraprotmin = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAPROTMIN;
        }


        return $this;
    } // setVisceraprotmin()

    /**
     * Set the value of [visceraprotmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceraprotmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceraprotmax !== $v) {
            $this->visceraprotmax = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAPROTMAX;
        }


        return $this;
    } // setVisceraprotmax()

    /**
     * Set the value of [viscerafatmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setViscerafatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->viscerafatmin !== $v) {
            $this->viscerafatmin = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAFATMIN;
        }


        return $this;
    } // setViscerafatmin()

    /**
     * Set the value of [viscerafatmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setViscerafatmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->viscerafatmax !== $v) {
            $this->viscerafatmax = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAFATMAX;
        }


        return $this;
    } // setViscerafatmax()

    /**
     * Set the value of [visceraashmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceraashmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceraashmin !== $v) {
            $this->visceraashmin = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAASHMIN;
        }


        return $this;
    } // setVisceraashmin()

    /**
     * Set the value of [visceraashmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setVisceraashmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->visceraashmax !== $v) {
            $this->visceraashmax = $v;
            $this->modifiedColumns[] = ProximsPeer::VISCERAASHMAX;
        }


        return $this;
    } // setVisceraashmax()

    /**
     * Set the value of [headmoistmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadmoistmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headmoistmin !== $v) {
            $this->headmoistmin = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADMOISTMIN;
        }


        return $this;
    } // setHeadmoistmin()

    /**
     * Set the value of [headmoistmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadmoistmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headmoistmax !== $v) {
            $this->headmoistmax = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADMOISTMAX;
        }


        return $this;
    } // setHeadmoistmax()

    /**
     * Set the value of [headprotmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadprotmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headprotmin !== $v) {
            $this->headprotmin = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADPROTMIN;
        }


        return $this;
    } // setHeadprotmin()

    /**
     * Set the value of [headprotmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadprotmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headprotmax !== $v) {
            $this->headprotmax = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADPROTMAX;
        }


        return $this;
    } // setHeadprotmax()

    /**
     * Set the value of [headfatmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadfatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headfatmin !== $v) {
            $this->headfatmin = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADFATMIN;
        }


        return $this;
    } // setHeadfatmin()

    /**
     * Set the value of [headfatmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadfatmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headfatmax !== $v) {
            $this->headfatmax = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADFATMAX;
        }


        return $this;
    } // setHeadfatmax()

    /**
     * Set the value of [headashmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadashmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headashmin !== $v) {
            $this->headashmin = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADASHMIN;
        }


        return $this;
    } // setHeadashmin()

    /**
     * Set the value of [headashmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setHeadashmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->headashmax !== $v) {
            $this->headashmax = $v;
            $this->modifiedColumns[] = ProximsPeer::HEADASHMAX;
        }


        return $this;
    } // setHeadashmax()

    /**
     * Set the value of [wastemoistmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWastemoistmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wastemoistmin !== $v) {
            $this->wastemoistmin = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEMOISTMIN;
        }


        return $this;
    } // setWastemoistmin()

    /**
     * Set the value of [wastemoistmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWastemoistmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wastemoistmax !== $v) {
            $this->wastemoistmax = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEMOISTMAX;
        }


        return $this;
    } // setWastemoistmax()

    /**
     * Set the value of [wasteprotmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWasteprotmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wasteprotmin !== $v) {
            $this->wasteprotmin = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEPROTMIN;
        }


        return $this;
    } // setWasteprotmin()

    /**
     * Set the value of [wasteprotmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWasteprotmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wasteprotmax !== $v) {
            $this->wasteprotmax = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEPROTMAX;
        }


        return $this;
    } // setWasteprotmax()

    /**
     * Set the value of [wastefatmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWastefatmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wastefatmin !== $v) {
            $this->wastefatmin = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEFATMIN;
        }


        return $this;
    } // setWastefatmin()

    /**
     * Set the value of [wastefatmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWastefatmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wastefatmax !== $v) {
            $this->wastefatmax = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEFATMAX;
        }


        return $this;
    } // setWastefatmax()

    /**
     * Set the value of [wasteashmin] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWasteashmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wasteashmin !== $v) {
            $this->wasteashmin = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEASHMIN;
        }


        return $this;
    } // setWasteashmin()

    /**
     * Set the value of [wasteashmax] column.
     *
     * @param  double $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setWasteashmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->wasteashmax !== $v) {
            $this->wasteashmax = $v;
            $this->modifiedColumns[] = ProximsPeer::WASTEASHMAX;
        }


        return $this;
    } // setWasteashmax()

    /**
     * Set the value of [commentchemics] column.
     *
     * @param  string $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setCommentchemics($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentchemics !== $v) {
            $this->commentchemics = $v;
            $this->modifiedColumns[] = ProximsPeer::COMMENTCHEMICS;
        }


        return $this;
    } // setCommentchemics()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = ProximsPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Proxims The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = ProximsPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = ProximsPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Proxims The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = ProximsPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = ProximsPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Proxims The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = ProximsPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [remark] column.
     *
     * @param  string $v new value
     * @return Proxims The current object (for fluent API support)
     */
    public function setRemark($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remark !== $v) {
            $this->remark = $v;
            $this->modifiedColumns[] = ProximsPeer::REMARK;
        }


        return $this;
    } // setRemark()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Proxims The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = ProximsPeer::TS;
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
            if ($this->chemicsrefno !== 4883) {
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
            $this->speccode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->chemicsrefno = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->c_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->locality = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->length = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->lengthupper = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->lengthtype = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->weightlower = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->weightupper = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->headlower = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->headupper = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->visceralower22 = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->visceraupper22 = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->trunklower = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->trunkupper = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->roelower = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->roeupper = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->skinlower = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->skinupper = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->testeslower = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->testesupper = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->finslower = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->finsupper = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->liverlower = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->liverupper = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->boneslower = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->bonesupper = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->meatlower = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->meatupper = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->filletlower = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->filletupper = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->steaklower = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->steakupper = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
            $this->comment = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->meatmoistmin = ($row[$startcol + 35] !== null) ? (double) $row[$startcol + 35] : null;
            $this->meatmoistmax = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->meatprotmin = ($row[$startcol + 37] !== null) ? (double) $row[$startcol + 37] : null;
            $this->meatprotmax = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->meatfatmin = ($row[$startcol + 39] !== null) ? (double) $row[$startcol + 39] : null;
            $this->meatfatmax = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
            $this->meatashmin = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
            $this->meatashmax = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
            $this->livermoistmin = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->livermoistmax = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->liverprotmin = ($row[$startcol + 45] !== null) ? (double) $row[$startcol + 45] : null;
            $this->liverprotmax = ($row[$startcol + 46] !== null) ? (double) $row[$startcol + 46] : null;
            $this->liverfatmin = ($row[$startcol + 47] !== null) ? (double) $row[$startcol + 47] : null;
            $this->liverfatmax = ($row[$startcol + 48] !== null) ? (double) $row[$startcol + 48] : null;
            $this->liverashmin = ($row[$startcol + 49] !== null) ? (double) $row[$startcol + 49] : null;
            $this->liverashmax = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->roemoistmin = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->roemoistmax = ($row[$startcol + 52] !== null) ? (double) $row[$startcol + 52] : null;
            $this->roeprotmin = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->roeprotmax = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->roefatmin = ($row[$startcol + 55] !== null) ? (double) $row[$startcol + 55] : null;
            $this->roefatmax = ($row[$startcol + 56] !== null) ? (double) $row[$startcol + 56] : null;
            $this->roeashmin = ($row[$startcol + 57] !== null) ? (double) $row[$startcol + 57] : null;
            $this->roeashmax = ($row[$startcol + 58] !== null) ? (double) $row[$startcol + 58] : null;
            $this->visceramoistmin = ($row[$startcol + 59] !== null) ? (double) $row[$startcol + 59] : null;
            $this->visceramoistmax = ($row[$startcol + 60] !== null) ? (double) $row[$startcol + 60] : null;
            $this->visceraprotmin = ($row[$startcol + 61] !== null) ? (double) $row[$startcol + 61] : null;
            $this->visceraprotmax = ($row[$startcol + 62] !== null) ? (double) $row[$startcol + 62] : null;
            $this->viscerafatmin = ($row[$startcol + 63] !== null) ? (double) $row[$startcol + 63] : null;
            $this->viscerafatmax = ($row[$startcol + 64] !== null) ? (double) $row[$startcol + 64] : null;
            $this->visceraashmin = ($row[$startcol + 65] !== null) ? (double) $row[$startcol + 65] : null;
            $this->visceraashmax = ($row[$startcol + 66] !== null) ? (double) $row[$startcol + 66] : null;
            $this->headmoistmin = ($row[$startcol + 67] !== null) ? (double) $row[$startcol + 67] : null;
            $this->headmoistmax = ($row[$startcol + 68] !== null) ? (double) $row[$startcol + 68] : null;
            $this->headprotmin = ($row[$startcol + 69] !== null) ? (double) $row[$startcol + 69] : null;
            $this->headprotmax = ($row[$startcol + 70] !== null) ? (double) $row[$startcol + 70] : null;
            $this->headfatmin = ($row[$startcol + 71] !== null) ? (double) $row[$startcol + 71] : null;
            $this->headfatmax = ($row[$startcol + 72] !== null) ? (double) $row[$startcol + 72] : null;
            $this->headashmin = ($row[$startcol + 73] !== null) ? (double) $row[$startcol + 73] : null;
            $this->headashmax = ($row[$startcol + 74] !== null) ? (double) $row[$startcol + 74] : null;
            $this->wastemoistmin = ($row[$startcol + 75] !== null) ? (double) $row[$startcol + 75] : null;
            $this->wastemoistmax = ($row[$startcol + 76] !== null) ? (double) $row[$startcol + 76] : null;
            $this->wasteprotmin = ($row[$startcol + 77] !== null) ? (double) $row[$startcol + 77] : null;
            $this->wasteprotmax = ($row[$startcol + 78] !== null) ? (double) $row[$startcol + 78] : null;
            $this->wastefatmin = ($row[$startcol + 79] !== null) ? (double) $row[$startcol + 79] : null;
            $this->wastefatmax = ($row[$startcol + 80] !== null) ? (double) $row[$startcol + 80] : null;
            $this->wasteashmin = ($row[$startcol + 81] !== null) ? (double) $row[$startcol + 81] : null;
            $this->wasteashmax = ($row[$startcol + 82] !== null) ? (double) $row[$startcol + 82] : null;
            $this->commentchemics = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->entered = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->dateentered = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->modified = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->datemodified = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->expert = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->datechecked = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->remark = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->ts = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 92; // 92 = ProximsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Proxims object", $e);
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
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProximsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProximsQuery::create()
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
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProximsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(ProximsPeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(ProximsPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(ProximsPeer::CHEMICSREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`ChemicsRefNo`';
        }
        if ($this->isColumnModified(ProximsPeer::C_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`C_Code`';
        }
        if ($this->isColumnModified(ProximsPeer::LOCALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Locality`';
        }
        if ($this->isColumnModified(ProximsPeer::LENGTH)) {
            $modifiedColumns[':p' . $index++]  = '`Length`';
        }
        if ($this->isColumnModified(ProximsPeer::LENGTHUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`LengthUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::LENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`LengthType`';
        }
        if ($this->isColumnModified(ProximsPeer::WEIGHTLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`WeightLower`';
        }
        if ($this->isColumnModified(ProximsPeer::WEIGHTUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`WeightUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`HeadLower`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`HeadUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERALOWER22)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraLower22`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAUPPER22)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraUpper22`';
        }
        if ($this->isColumnModified(ProximsPeer::TRUNKLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`TrunkLower`';
        }
        if ($this->isColumnModified(ProximsPeer::TRUNKUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`TrunkUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::ROELOWER)) {
            $modifiedColumns[':p' . $index++]  = '`RoeLower`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`RoeUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::SKINLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`SkinLower`';
        }
        if ($this->isColumnModified(ProximsPeer::SKINUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`SkinUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::TESTESLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`TestesLower`';
        }
        if ($this->isColumnModified(ProximsPeer::TESTESUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`TestesUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::FINSLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`FinsLower`';
        }
        if ($this->isColumnModified(ProximsPeer::FINSUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`FinsUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`LiverLower`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`LiverUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::BONESLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`BonesLower`';
        }
        if ($this->isColumnModified(ProximsPeer::BONESUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`BonesUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`MeatLower`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`MeatUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::FILLETLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`FilletLower`';
        }
        if ($this->isColumnModified(ProximsPeer::FILLETUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`FilletUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::STEAKLOWER)) {
            $modifiedColumns[':p' . $index++]  = '`SteakLower`';
        }
        if ($this->isColumnModified(ProximsPeer::STEAKUPPER)) {
            $modifiedColumns[':p' . $index++]  = '`SteakUpper`';
        }
        if ($this->isColumnModified(ProximsPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`Comment`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATMOISTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MeatMoistMin`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATMOISTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MeatMoistMax`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATPROTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MeatProtMin`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATPROTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MeatProtMax`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATFATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MeatFatMin`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATFATMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MeatFatMax`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATASHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MeatAshMin`';
        }
        if ($this->isColumnModified(ProximsPeer::MEATASHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MeatAshMax`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERMOISTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LiverMoistMin`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERMOISTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LiverMoistMax`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERPROTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LiverProtMin`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERPROTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LiverProtMax`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERFATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LiverFatMin`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERFATMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LiverFatMax`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERASHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LiverAshMin`';
        }
        if ($this->isColumnModified(ProximsPeer::LIVERASHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LiverAshMax`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEMOISTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RoeMoistMin`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEMOISTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RoeMoistMax`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEPROTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RoeProtMin`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEPROTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RoeProtMax`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEFATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RoeFatMin`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEFATMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RoeFatMax`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEASHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`RoeAshMin`';
        }
        if ($this->isColumnModified(ProximsPeer::ROEASHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`RoeAshMax`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAMOISTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraMoistMin`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAMOISTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraMoistMax`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAPROTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraProtMin`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAPROTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraProtMax`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAFATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraFatMin`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAFATMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraFatMax`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAASHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraAshMin`';
        }
        if ($this->isColumnModified(ProximsPeer::VISCERAASHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraAshMax`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADMOISTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HeadMoistMin`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADMOISTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HeadMoistMax`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADPROTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HeadProtMin`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADPROTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HeadProtMax`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADFATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HeadFatMin`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADFATMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HeadFatMax`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADASHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`HeadAshMin`';
        }
        if ($this->isColumnModified(ProximsPeer::HEADASHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`HeadAshMax`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEMOISTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WasteMoistMin`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEMOISTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WasteMoistMax`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEPROTMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WasteProtMin`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEPROTMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WasteProtMax`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEFATMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WasteFatMin`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEFATMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WasteFatMax`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEASHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WasteAshMin`';
        }
        if ($this->isColumnModified(ProximsPeer::WASTEASHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WasteAshMax`';
        }
        if ($this->isColumnModified(ProximsPeer::COMMENTCHEMICS)) {
            $modifiedColumns[':p' . $index++]  = '`CommentChemics`';
        }
        if ($this->isColumnModified(ProximsPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(ProximsPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(ProximsPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(ProximsPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(ProximsPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(ProximsPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(ProximsPeer::REMARK)) {
            $modifiedColumns[':p' . $index++]  = '`Remark`';
        }
        if ($this->isColumnModified(ProximsPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `proxims` (%s) VALUES (%s)',
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
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`ChemicsRefNo`':
                        $stmt->bindValue($identifier, $this->chemicsrefno, PDO::PARAM_INT);
                        break;
                    case '`C_Code`':
                        $stmt->bindValue($identifier, $this->c_code, PDO::PARAM_STR);
                        break;
                    case '`Locality`':
                        $stmt->bindValue($identifier, $this->locality, PDO::PARAM_STR);
                        break;
                    case '`Length`':
                        $stmt->bindValue($identifier, $this->length, PDO::PARAM_STR);
                        break;
                    case '`LengthUpper`':
                        $stmt->bindValue($identifier, $this->lengthupper, PDO::PARAM_STR);
                        break;
                    case '`LengthType`':
                        $stmt->bindValue($identifier, $this->lengthtype, PDO::PARAM_STR);
                        break;
                    case '`WeightLower`':
                        $stmt->bindValue($identifier, $this->weightlower, PDO::PARAM_STR);
                        break;
                    case '`WeightUpper`':
                        $stmt->bindValue($identifier, $this->weightupper, PDO::PARAM_STR);
                        break;
                    case '`HeadLower`':
                        $stmt->bindValue($identifier, $this->headlower, PDO::PARAM_STR);
                        break;
                    case '`HeadUpper`':
                        $stmt->bindValue($identifier, $this->headupper, PDO::PARAM_STR);
                        break;
                    case '`VisceraLower22`':
                        $stmt->bindValue($identifier, $this->visceralower22, PDO::PARAM_STR);
                        break;
                    case '`VisceraUpper22`':
                        $stmt->bindValue($identifier, $this->visceraupper22, PDO::PARAM_STR);
                        break;
                    case '`TrunkLower`':
                        $stmt->bindValue($identifier, $this->trunklower, PDO::PARAM_STR);
                        break;
                    case '`TrunkUpper`':
                        $stmt->bindValue($identifier, $this->trunkupper, PDO::PARAM_STR);
                        break;
                    case '`RoeLower`':
                        $stmt->bindValue($identifier, $this->roelower, PDO::PARAM_STR);
                        break;
                    case '`RoeUpper`':
                        $stmt->bindValue($identifier, $this->roeupper, PDO::PARAM_STR);
                        break;
                    case '`SkinLower`':
                        $stmt->bindValue($identifier, $this->skinlower, PDO::PARAM_STR);
                        break;
                    case '`SkinUpper`':
                        $stmt->bindValue($identifier, $this->skinupper, PDO::PARAM_STR);
                        break;
                    case '`TestesLower`':
                        $stmt->bindValue($identifier, $this->testeslower, PDO::PARAM_STR);
                        break;
                    case '`TestesUpper`':
                        $stmt->bindValue($identifier, $this->testesupper, PDO::PARAM_STR);
                        break;
                    case '`FinsLower`':
                        $stmt->bindValue($identifier, $this->finslower, PDO::PARAM_STR);
                        break;
                    case '`FinsUpper`':
                        $stmt->bindValue($identifier, $this->finsupper, PDO::PARAM_STR);
                        break;
                    case '`LiverLower`':
                        $stmt->bindValue($identifier, $this->liverlower, PDO::PARAM_STR);
                        break;
                    case '`LiverUpper`':
                        $stmt->bindValue($identifier, $this->liverupper, PDO::PARAM_STR);
                        break;
                    case '`BonesLower`':
                        $stmt->bindValue($identifier, $this->boneslower, PDO::PARAM_STR);
                        break;
                    case '`BonesUpper`':
                        $stmt->bindValue($identifier, $this->bonesupper, PDO::PARAM_STR);
                        break;
                    case '`MeatLower`':
                        $stmt->bindValue($identifier, $this->meatlower, PDO::PARAM_STR);
                        break;
                    case '`MeatUpper`':
                        $stmt->bindValue($identifier, $this->meatupper, PDO::PARAM_STR);
                        break;
                    case '`FilletLower`':
                        $stmt->bindValue($identifier, $this->filletlower, PDO::PARAM_STR);
                        break;
                    case '`FilletUpper`':
                        $stmt->bindValue($identifier, $this->filletupper, PDO::PARAM_STR);
                        break;
                    case '`SteakLower`':
                        $stmt->bindValue($identifier, $this->steaklower, PDO::PARAM_STR);
                        break;
                    case '`SteakUpper`':
                        $stmt->bindValue($identifier, $this->steakupper, PDO::PARAM_STR);
                        break;
                    case '`Comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`MeatMoistMin`':
                        $stmt->bindValue($identifier, $this->meatmoistmin, PDO::PARAM_STR);
                        break;
                    case '`MeatMoistMax`':
                        $stmt->bindValue($identifier, $this->meatmoistmax, PDO::PARAM_STR);
                        break;
                    case '`MeatProtMin`':
                        $stmt->bindValue($identifier, $this->meatprotmin, PDO::PARAM_STR);
                        break;
                    case '`MeatProtMax`':
                        $stmt->bindValue($identifier, $this->meatprotmax, PDO::PARAM_STR);
                        break;
                    case '`MeatFatMin`':
                        $stmt->bindValue($identifier, $this->meatfatmin, PDO::PARAM_STR);
                        break;
                    case '`MeatFatMax`':
                        $stmt->bindValue($identifier, $this->meatfatmax, PDO::PARAM_STR);
                        break;
                    case '`MeatAshMin`':
                        $stmt->bindValue($identifier, $this->meatashmin, PDO::PARAM_STR);
                        break;
                    case '`MeatAshMax`':
                        $stmt->bindValue($identifier, $this->meatashmax, PDO::PARAM_STR);
                        break;
                    case '`LiverMoistMin`':
                        $stmt->bindValue($identifier, $this->livermoistmin, PDO::PARAM_STR);
                        break;
                    case '`LiverMoistMax`':
                        $stmt->bindValue($identifier, $this->livermoistmax, PDO::PARAM_STR);
                        break;
                    case '`LiverProtMin`':
                        $stmt->bindValue($identifier, $this->liverprotmin, PDO::PARAM_STR);
                        break;
                    case '`LiverProtMax`':
                        $stmt->bindValue($identifier, $this->liverprotmax, PDO::PARAM_STR);
                        break;
                    case '`LiverFatMin`':
                        $stmt->bindValue($identifier, $this->liverfatmin, PDO::PARAM_STR);
                        break;
                    case '`LiverFatMax`':
                        $stmt->bindValue($identifier, $this->liverfatmax, PDO::PARAM_STR);
                        break;
                    case '`LiverAshMin`':
                        $stmt->bindValue($identifier, $this->liverashmin, PDO::PARAM_STR);
                        break;
                    case '`LiverAshMax`':
                        $stmt->bindValue($identifier, $this->liverashmax, PDO::PARAM_STR);
                        break;
                    case '`RoeMoistMin`':
                        $stmt->bindValue($identifier, $this->roemoistmin, PDO::PARAM_STR);
                        break;
                    case '`RoeMoistMax`':
                        $stmt->bindValue($identifier, $this->roemoistmax, PDO::PARAM_STR);
                        break;
                    case '`RoeProtMin`':
                        $stmt->bindValue($identifier, $this->roeprotmin, PDO::PARAM_STR);
                        break;
                    case '`RoeProtMax`':
                        $stmt->bindValue($identifier, $this->roeprotmax, PDO::PARAM_STR);
                        break;
                    case '`RoeFatMin`':
                        $stmt->bindValue($identifier, $this->roefatmin, PDO::PARAM_STR);
                        break;
                    case '`RoeFatMax`':
                        $stmt->bindValue($identifier, $this->roefatmax, PDO::PARAM_STR);
                        break;
                    case '`RoeAshMin`':
                        $stmt->bindValue($identifier, $this->roeashmin, PDO::PARAM_STR);
                        break;
                    case '`RoeAshMax`':
                        $stmt->bindValue($identifier, $this->roeashmax, PDO::PARAM_STR);
                        break;
                    case '`VisceraMoistMin`':
                        $stmt->bindValue($identifier, $this->visceramoistmin, PDO::PARAM_STR);
                        break;
                    case '`VisceraMoistMax`':
                        $stmt->bindValue($identifier, $this->visceramoistmax, PDO::PARAM_STR);
                        break;
                    case '`VisceraProtMin`':
                        $stmt->bindValue($identifier, $this->visceraprotmin, PDO::PARAM_STR);
                        break;
                    case '`VisceraProtMax`':
                        $stmt->bindValue($identifier, $this->visceraprotmax, PDO::PARAM_STR);
                        break;
                    case '`VisceraFatMin`':
                        $stmt->bindValue($identifier, $this->viscerafatmin, PDO::PARAM_STR);
                        break;
                    case '`VisceraFatMax`':
                        $stmt->bindValue($identifier, $this->viscerafatmax, PDO::PARAM_STR);
                        break;
                    case '`VisceraAshMin`':
                        $stmt->bindValue($identifier, $this->visceraashmin, PDO::PARAM_STR);
                        break;
                    case '`VisceraAshMax`':
                        $stmt->bindValue($identifier, $this->visceraashmax, PDO::PARAM_STR);
                        break;
                    case '`HeadMoistMin`':
                        $stmt->bindValue($identifier, $this->headmoistmin, PDO::PARAM_STR);
                        break;
                    case '`HeadMoistMax`':
                        $stmt->bindValue($identifier, $this->headmoistmax, PDO::PARAM_STR);
                        break;
                    case '`HeadProtMin`':
                        $stmt->bindValue($identifier, $this->headprotmin, PDO::PARAM_STR);
                        break;
                    case '`HeadProtMax`':
                        $stmt->bindValue($identifier, $this->headprotmax, PDO::PARAM_STR);
                        break;
                    case '`HeadFatMin`':
                        $stmt->bindValue($identifier, $this->headfatmin, PDO::PARAM_STR);
                        break;
                    case '`HeadFatMax`':
                        $stmt->bindValue($identifier, $this->headfatmax, PDO::PARAM_STR);
                        break;
                    case '`HeadAshMin`':
                        $stmt->bindValue($identifier, $this->headashmin, PDO::PARAM_STR);
                        break;
                    case '`HeadAshMax`':
                        $stmt->bindValue($identifier, $this->headashmax, PDO::PARAM_STR);
                        break;
                    case '`WasteMoistMin`':
                        $stmt->bindValue($identifier, $this->wastemoistmin, PDO::PARAM_STR);
                        break;
                    case '`WasteMoistMax`':
                        $stmt->bindValue($identifier, $this->wastemoistmax, PDO::PARAM_STR);
                        break;
                    case '`WasteProtMin`':
                        $stmt->bindValue($identifier, $this->wasteprotmin, PDO::PARAM_STR);
                        break;
                    case '`WasteProtMax`':
                        $stmt->bindValue($identifier, $this->wasteprotmax, PDO::PARAM_STR);
                        break;
                    case '`WasteFatMin`':
                        $stmt->bindValue($identifier, $this->wastefatmin, PDO::PARAM_STR);
                        break;
                    case '`WasteFatMax`':
                        $stmt->bindValue($identifier, $this->wastefatmax, PDO::PARAM_STR);
                        break;
                    case '`WasteAshMin`':
                        $stmt->bindValue($identifier, $this->wasteashmin, PDO::PARAM_STR);
                        break;
                    case '`WasteAshMax`':
                        $stmt->bindValue($identifier, $this->wasteashmax, PDO::PARAM_STR);
                        break;
                    case '`CommentChemics`':
                        $stmt->bindValue($identifier, $this->commentchemics, PDO::PARAM_STR);
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
                    case '`Remark`':
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


            if (($retval = ProximsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ProximsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSpeccode();
                break;
            case 2:
                return $this->getChemicsrefno();
                break;
            case 3:
                return $this->getCCode();
                break;
            case 4:
                return $this->getLocality();
                break;
            case 5:
                return $this->getLength();
                break;
            case 6:
                return $this->getLengthupper();
                break;
            case 7:
                return $this->getLengthtype();
                break;
            case 8:
                return $this->getWeightlower();
                break;
            case 9:
                return $this->getWeightupper();
                break;
            case 10:
                return $this->getHeadlower();
                break;
            case 11:
                return $this->getHeadupper();
                break;
            case 12:
                return $this->getVisceralower22();
                break;
            case 13:
                return $this->getVisceraupper22();
                break;
            case 14:
                return $this->getTrunklower();
                break;
            case 15:
                return $this->getTrunkupper();
                break;
            case 16:
                return $this->getRoelower();
                break;
            case 17:
                return $this->getRoeupper();
                break;
            case 18:
                return $this->getSkinlower();
                break;
            case 19:
                return $this->getSkinupper();
                break;
            case 20:
                return $this->getTesteslower();
                break;
            case 21:
                return $this->getTestesupper();
                break;
            case 22:
                return $this->getFinslower();
                break;
            case 23:
                return $this->getFinsupper();
                break;
            case 24:
                return $this->getLiverlower();
                break;
            case 25:
                return $this->getLiverupper();
                break;
            case 26:
                return $this->getBoneslower();
                break;
            case 27:
                return $this->getBonesupper();
                break;
            case 28:
                return $this->getMeatlower();
                break;
            case 29:
                return $this->getMeatupper();
                break;
            case 30:
                return $this->getFilletlower();
                break;
            case 31:
                return $this->getFilletupper();
                break;
            case 32:
                return $this->getSteaklower();
                break;
            case 33:
                return $this->getSteakupper();
                break;
            case 34:
                return $this->getComment();
                break;
            case 35:
                return $this->getMeatmoistmin();
                break;
            case 36:
                return $this->getMeatmoistmax();
                break;
            case 37:
                return $this->getMeatprotmin();
                break;
            case 38:
                return $this->getMeatprotmax();
                break;
            case 39:
                return $this->getMeatfatmin();
                break;
            case 40:
                return $this->getMeatfatmax();
                break;
            case 41:
                return $this->getMeatashmin();
                break;
            case 42:
                return $this->getMeatashmax();
                break;
            case 43:
                return $this->getLivermoistmin();
                break;
            case 44:
                return $this->getLivermoistmax();
                break;
            case 45:
                return $this->getLiverprotmin();
                break;
            case 46:
                return $this->getLiverprotmax();
                break;
            case 47:
                return $this->getLiverfatmin();
                break;
            case 48:
                return $this->getLiverfatmax();
                break;
            case 49:
                return $this->getLiverashmin();
                break;
            case 50:
                return $this->getLiverashmax();
                break;
            case 51:
                return $this->getRoemoistmin();
                break;
            case 52:
                return $this->getRoemoistmax();
                break;
            case 53:
                return $this->getRoeprotmin();
                break;
            case 54:
                return $this->getRoeprotmax();
                break;
            case 55:
                return $this->getRoefatmin();
                break;
            case 56:
                return $this->getRoefatmax();
                break;
            case 57:
                return $this->getRoeashmin();
                break;
            case 58:
                return $this->getRoeashmax();
                break;
            case 59:
                return $this->getVisceramoistmin();
                break;
            case 60:
                return $this->getVisceramoistmax();
                break;
            case 61:
                return $this->getVisceraprotmin();
                break;
            case 62:
                return $this->getVisceraprotmax();
                break;
            case 63:
                return $this->getViscerafatmin();
                break;
            case 64:
                return $this->getViscerafatmax();
                break;
            case 65:
                return $this->getVisceraashmin();
                break;
            case 66:
                return $this->getVisceraashmax();
                break;
            case 67:
                return $this->getHeadmoistmin();
                break;
            case 68:
                return $this->getHeadmoistmax();
                break;
            case 69:
                return $this->getHeadprotmin();
                break;
            case 70:
                return $this->getHeadprotmax();
                break;
            case 71:
                return $this->getHeadfatmin();
                break;
            case 72:
                return $this->getHeadfatmax();
                break;
            case 73:
                return $this->getHeadashmin();
                break;
            case 74:
                return $this->getHeadashmax();
                break;
            case 75:
                return $this->getWastemoistmin();
                break;
            case 76:
                return $this->getWastemoistmax();
                break;
            case 77:
                return $this->getWasteprotmin();
                break;
            case 78:
                return $this->getWasteprotmax();
                break;
            case 79:
                return $this->getWastefatmin();
                break;
            case 80:
                return $this->getWastefatmax();
                break;
            case 81:
                return $this->getWasteashmin();
                break;
            case 82:
                return $this->getWasteashmax();
                break;
            case 83:
                return $this->getCommentchemics();
                break;
            case 84:
                return $this->getEntered();
                break;
            case 85:
                return $this->getDateentered();
                break;
            case 86:
                return $this->getModified();
                break;
            case 87:
                return $this->getDatemodified();
                break;
            case 88:
                return $this->getExpert();
                break;
            case 89:
                return $this->getDatechecked();
                break;
            case 90:
                return $this->getRemark();
                break;
            case 91:
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
        if (isset($alreadyDumpedObjects['Proxims'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Proxims'][serialize($this->getPrimaryKey())] = true;
        $keys = ProximsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getStockcode(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getChemicsrefno(),
            $keys[3] => $this->getCCode(),
            $keys[4] => $this->getLocality(),
            $keys[5] => $this->getLength(),
            $keys[6] => $this->getLengthupper(),
            $keys[7] => $this->getLengthtype(),
            $keys[8] => $this->getWeightlower(),
            $keys[9] => $this->getWeightupper(),
            $keys[10] => $this->getHeadlower(),
            $keys[11] => $this->getHeadupper(),
            $keys[12] => $this->getVisceralower22(),
            $keys[13] => $this->getVisceraupper22(),
            $keys[14] => $this->getTrunklower(),
            $keys[15] => $this->getTrunkupper(),
            $keys[16] => $this->getRoelower(),
            $keys[17] => $this->getRoeupper(),
            $keys[18] => $this->getSkinlower(),
            $keys[19] => $this->getSkinupper(),
            $keys[20] => $this->getTesteslower(),
            $keys[21] => $this->getTestesupper(),
            $keys[22] => $this->getFinslower(),
            $keys[23] => $this->getFinsupper(),
            $keys[24] => $this->getLiverlower(),
            $keys[25] => $this->getLiverupper(),
            $keys[26] => $this->getBoneslower(),
            $keys[27] => $this->getBonesupper(),
            $keys[28] => $this->getMeatlower(),
            $keys[29] => $this->getMeatupper(),
            $keys[30] => $this->getFilletlower(),
            $keys[31] => $this->getFilletupper(),
            $keys[32] => $this->getSteaklower(),
            $keys[33] => $this->getSteakupper(),
            $keys[34] => $this->getComment(),
            $keys[35] => $this->getMeatmoistmin(),
            $keys[36] => $this->getMeatmoistmax(),
            $keys[37] => $this->getMeatprotmin(),
            $keys[38] => $this->getMeatprotmax(),
            $keys[39] => $this->getMeatfatmin(),
            $keys[40] => $this->getMeatfatmax(),
            $keys[41] => $this->getMeatashmin(),
            $keys[42] => $this->getMeatashmax(),
            $keys[43] => $this->getLivermoistmin(),
            $keys[44] => $this->getLivermoistmax(),
            $keys[45] => $this->getLiverprotmin(),
            $keys[46] => $this->getLiverprotmax(),
            $keys[47] => $this->getLiverfatmin(),
            $keys[48] => $this->getLiverfatmax(),
            $keys[49] => $this->getLiverashmin(),
            $keys[50] => $this->getLiverashmax(),
            $keys[51] => $this->getRoemoistmin(),
            $keys[52] => $this->getRoemoistmax(),
            $keys[53] => $this->getRoeprotmin(),
            $keys[54] => $this->getRoeprotmax(),
            $keys[55] => $this->getRoefatmin(),
            $keys[56] => $this->getRoefatmax(),
            $keys[57] => $this->getRoeashmin(),
            $keys[58] => $this->getRoeashmax(),
            $keys[59] => $this->getVisceramoistmin(),
            $keys[60] => $this->getVisceramoistmax(),
            $keys[61] => $this->getVisceraprotmin(),
            $keys[62] => $this->getVisceraprotmax(),
            $keys[63] => $this->getViscerafatmin(),
            $keys[64] => $this->getViscerafatmax(),
            $keys[65] => $this->getVisceraashmin(),
            $keys[66] => $this->getVisceraashmax(),
            $keys[67] => $this->getHeadmoistmin(),
            $keys[68] => $this->getHeadmoistmax(),
            $keys[69] => $this->getHeadprotmin(),
            $keys[70] => $this->getHeadprotmax(),
            $keys[71] => $this->getHeadfatmin(),
            $keys[72] => $this->getHeadfatmax(),
            $keys[73] => $this->getHeadashmin(),
            $keys[74] => $this->getHeadashmax(),
            $keys[75] => $this->getWastemoistmin(),
            $keys[76] => $this->getWastemoistmax(),
            $keys[77] => $this->getWasteprotmin(),
            $keys[78] => $this->getWasteprotmax(),
            $keys[79] => $this->getWastefatmin(),
            $keys[80] => $this->getWastefatmax(),
            $keys[81] => $this->getWasteashmin(),
            $keys[82] => $this->getWasteashmax(),
            $keys[83] => $this->getCommentchemics(),
            $keys[84] => $this->getEntered(),
            $keys[85] => $this->getDateentered(),
            $keys[86] => $this->getModified(),
            $keys[87] => $this->getDatemodified(),
            $keys[88] => $this->getExpert(),
            $keys[89] => $this->getDatechecked(),
            $keys[90] => $this->getRemark(),
            $keys[91] => $this->getTs(),
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
        $pos = ProximsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSpeccode($value);
                break;
            case 2:
                $this->setChemicsrefno($value);
                break;
            case 3:
                $this->setCCode($value);
                break;
            case 4:
                $this->setLocality($value);
                break;
            case 5:
                $this->setLength($value);
                break;
            case 6:
                $this->setLengthupper($value);
                break;
            case 7:
                $this->setLengthtype($value);
                break;
            case 8:
                $this->setWeightlower($value);
                break;
            case 9:
                $this->setWeightupper($value);
                break;
            case 10:
                $this->setHeadlower($value);
                break;
            case 11:
                $this->setHeadupper($value);
                break;
            case 12:
                $this->setVisceralower22($value);
                break;
            case 13:
                $this->setVisceraupper22($value);
                break;
            case 14:
                $this->setTrunklower($value);
                break;
            case 15:
                $this->setTrunkupper($value);
                break;
            case 16:
                $this->setRoelower($value);
                break;
            case 17:
                $this->setRoeupper($value);
                break;
            case 18:
                $this->setSkinlower($value);
                break;
            case 19:
                $this->setSkinupper($value);
                break;
            case 20:
                $this->setTesteslower($value);
                break;
            case 21:
                $this->setTestesupper($value);
                break;
            case 22:
                $this->setFinslower($value);
                break;
            case 23:
                $this->setFinsupper($value);
                break;
            case 24:
                $this->setLiverlower($value);
                break;
            case 25:
                $this->setLiverupper($value);
                break;
            case 26:
                $this->setBoneslower($value);
                break;
            case 27:
                $this->setBonesupper($value);
                break;
            case 28:
                $this->setMeatlower($value);
                break;
            case 29:
                $this->setMeatupper($value);
                break;
            case 30:
                $this->setFilletlower($value);
                break;
            case 31:
                $this->setFilletupper($value);
                break;
            case 32:
                $this->setSteaklower($value);
                break;
            case 33:
                $this->setSteakupper($value);
                break;
            case 34:
                $this->setComment($value);
                break;
            case 35:
                $this->setMeatmoistmin($value);
                break;
            case 36:
                $this->setMeatmoistmax($value);
                break;
            case 37:
                $this->setMeatprotmin($value);
                break;
            case 38:
                $this->setMeatprotmax($value);
                break;
            case 39:
                $this->setMeatfatmin($value);
                break;
            case 40:
                $this->setMeatfatmax($value);
                break;
            case 41:
                $this->setMeatashmin($value);
                break;
            case 42:
                $this->setMeatashmax($value);
                break;
            case 43:
                $this->setLivermoistmin($value);
                break;
            case 44:
                $this->setLivermoistmax($value);
                break;
            case 45:
                $this->setLiverprotmin($value);
                break;
            case 46:
                $this->setLiverprotmax($value);
                break;
            case 47:
                $this->setLiverfatmin($value);
                break;
            case 48:
                $this->setLiverfatmax($value);
                break;
            case 49:
                $this->setLiverashmin($value);
                break;
            case 50:
                $this->setLiverashmax($value);
                break;
            case 51:
                $this->setRoemoistmin($value);
                break;
            case 52:
                $this->setRoemoistmax($value);
                break;
            case 53:
                $this->setRoeprotmin($value);
                break;
            case 54:
                $this->setRoeprotmax($value);
                break;
            case 55:
                $this->setRoefatmin($value);
                break;
            case 56:
                $this->setRoefatmax($value);
                break;
            case 57:
                $this->setRoeashmin($value);
                break;
            case 58:
                $this->setRoeashmax($value);
                break;
            case 59:
                $this->setVisceramoistmin($value);
                break;
            case 60:
                $this->setVisceramoistmax($value);
                break;
            case 61:
                $this->setVisceraprotmin($value);
                break;
            case 62:
                $this->setVisceraprotmax($value);
                break;
            case 63:
                $this->setViscerafatmin($value);
                break;
            case 64:
                $this->setViscerafatmax($value);
                break;
            case 65:
                $this->setVisceraashmin($value);
                break;
            case 66:
                $this->setVisceraashmax($value);
                break;
            case 67:
                $this->setHeadmoistmin($value);
                break;
            case 68:
                $this->setHeadmoistmax($value);
                break;
            case 69:
                $this->setHeadprotmin($value);
                break;
            case 70:
                $this->setHeadprotmax($value);
                break;
            case 71:
                $this->setHeadfatmin($value);
                break;
            case 72:
                $this->setHeadfatmax($value);
                break;
            case 73:
                $this->setHeadashmin($value);
                break;
            case 74:
                $this->setHeadashmax($value);
                break;
            case 75:
                $this->setWastemoistmin($value);
                break;
            case 76:
                $this->setWastemoistmax($value);
                break;
            case 77:
                $this->setWasteprotmin($value);
                break;
            case 78:
                $this->setWasteprotmax($value);
                break;
            case 79:
                $this->setWastefatmin($value);
                break;
            case 80:
                $this->setWastefatmax($value);
                break;
            case 81:
                $this->setWasteashmin($value);
                break;
            case 82:
                $this->setWasteashmax($value);
                break;
            case 83:
                $this->setCommentchemics($value);
                break;
            case 84:
                $this->setEntered($value);
                break;
            case 85:
                $this->setDateentered($value);
                break;
            case 86:
                $this->setModified($value);
                break;
            case 87:
                $this->setDatemodified($value);
                break;
            case 88:
                $this->setExpert($value);
                break;
            case 89:
                $this->setDatechecked($value);
                break;
            case 90:
                $this->setRemark($value);
                break;
            case 91:
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
        $keys = ProximsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setStockcode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setChemicsrefno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLocality($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLength($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLengthupper($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLengthtype($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setWeightlower($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setWeightupper($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setHeadlower($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setHeadupper($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVisceralower22($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVisceraupper22($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTrunklower($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTrunkupper($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRoelower($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setRoeupper($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSkinlower($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSkinupper($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTesteslower($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTestesupper($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFinslower($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFinsupper($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLiverlower($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setLiverupper($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setBoneslower($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setBonesupper($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setMeatlower($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setMeatupper($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFilletlower($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFilletupper($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setSteaklower($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setSteakupper($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setComment($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setMeatmoistmin($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setMeatmoistmax($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setMeatprotmin($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setMeatprotmax($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setMeatfatmin($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setMeatfatmax($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setMeatashmin($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setMeatashmax($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setLivermoistmin($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setLivermoistmax($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setLiverprotmin($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setLiverprotmax($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setLiverfatmin($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setLiverfatmax($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setLiverashmin($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setLiverashmax($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setRoemoistmin($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setRoemoistmax($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setRoeprotmin($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setRoeprotmax($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setRoefatmin($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setRoefatmax($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setRoeashmin($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setRoeashmax($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setVisceramoistmin($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setVisceramoistmax($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setVisceraprotmin($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setVisceraprotmax($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setViscerafatmin($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setViscerafatmax($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setVisceraashmin($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setVisceraashmax($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setHeadmoistmin($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setHeadmoistmax($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setHeadprotmin($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setHeadprotmax($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setHeadfatmin($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setHeadfatmax($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setHeadashmin($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setHeadashmax($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setWastemoistmin($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setWastemoistmax($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setWasteprotmin($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setWasteprotmax($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setWastefatmin($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setWastefatmax($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setWasteashmin($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setWasteashmax($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setCommentchemics($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setEntered($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setDateentered($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setModified($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setDatemodified($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setExpert($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setDatechecked($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setRemark($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setTs($arr[$keys[91]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProximsPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProximsPeer::STOCKCODE)) $criteria->add(ProximsPeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(ProximsPeer::SPECCODE)) $criteria->add(ProximsPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(ProximsPeer::CHEMICSREFNO)) $criteria->add(ProximsPeer::CHEMICSREFNO, $this->chemicsrefno);
        if ($this->isColumnModified(ProximsPeer::C_CODE)) $criteria->add(ProximsPeer::C_CODE, $this->c_code);
        if ($this->isColumnModified(ProximsPeer::LOCALITY)) $criteria->add(ProximsPeer::LOCALITY, $this->locality);
        if ($this->isColumnModified(ProximsPeer::LENGTH)) $criteria->add(ProximsPeer::LENGTH, $this->length);
        if ($this->isColumnModified(ProximsPeer::LENGTHUPPER)) $criteria->add(ProximsPeer::LENGTHUPPER, $this->lengthupper);
        if ($this->isColumnModified(ProximsPeer::LENGTHTYPE)) $criteria->add(ProximsPeer::LENGTHTYPE, $this->lengthtype);
        if ($this->isColumnModified(ProximsPeer::WEIGHTLOWER)) $criteria->add(ProximsPeer::WEIGHTLOWER, $this->weightlower);
        if ($this->isColumnModified(ProximsPeer::WEIGHTUPPER)) $criteria->add(ProximsPeer::WEIGHTUPPER, $this->weightupper);
        if ($this->isColumnModified(ProximsPeer::HEADLOWER)) $criteria->add(ProximsPeer::HEADLOWER, $this->headlower);
        if ($this->isColumnModified(ProximsPeer::HEADUPPER)) $criteria->add(ProximsPeer::HEADUPPER, $this->headupper);
        if ($this->isColumnModified(ProximsPeer::VISCERALOWER22)) $criteria->add(ProximsPeer::VISCERALOWER22, $this->visceralower22);
        if ($this->isColumnModified(ProximsPeer::VISCERAUPPER22)) $criteria->add(ProximsPeer::VISCERAUPPER22, $this->visceraupper22);
        if ($this->isColumnModified(ProximsPeer::TRUNKLOWER)) $criteria->add(ProximsPeer::TRUNKLOWER, $this->trunklower);
        if ($this->isColumnModified(ProximsPeer::TRUNKUPPER)) $criteria->add(ProximsPeer::TRUNKUPPER, $this->trunkupper);
        if ($this->isColumnModified(ProximsPeer::ROELOWER)) $criteria->add(ProximsPeer::ROELOWER, $this->roelower);
        if ($this->isColumnModified(ProximsPeer::ROEUPPER)) $criteria->add(ProximsPeer::ROEUPPER, $this->roeupper);
        if ($this->isColumnModified(ProximsPeer::SKINLOWER)) $criteria->add(ProximsPeer::SKINLOWER, $this->skinlower);
        if ($this->isColumnModified(ProximsPeer::SKINUPPER)) $criteria->add(ProximsPeer::SKINUPPER, $this->skinupper);
        if ($this->isColumnModified(ProximsPeer::TESTESLOWER)) $criteria->add(ProximsPeer::TESTESLOWER, $this->testeslower);
        if ($this->isColumnModified(ProximsPeer::TESTESUPPER)) $criteria->add(ProximsPeer::TESTESUPPER, $this->testesupper);
        if ($this->isColumnModified(ProximsPeer::FINSLOWER)) $criteria->add(ProximsPeer::FINSLOWER, $this->finslower);
        if ($this->isColumnModified(ProximsPeer::FINSUPPER)) $criteria->add(ProximsPeer::FINSUPPER, $this->finsupper);
        if ($this->isColumnModified(ProximsPeer::LIVERLOWER)) $criteria->add(ProximsPeer::LIVERLOWER, $this->liverlower);
        if ($this->isColumnModified(ProximsPeer::LIVERUPPER)) $criteria->add(ProximsPeer::LIVERUPPER, $this->liverupper);
        if ($this->isColumnModified(ProximsPeer::BONESLOWER)) $criteria->add(ProximsPeer::BONESLOWER, $this->boneslower);
        if ($this->isColumnModified(ProximsPeer::BONESUPPER)) $criteria->add(ProximsPeer::BONESUPPER, $this->bonesupper);
        if ($this->isColumnModified(ProximsPeer::MEATLOWER)) $criteria->add(ProximsPeer::MEATLOWER, $this->meatlower);
        if ($this->isColumnModified(ProximsPeer::MEATUPPER)) $criteria->add(ProximsPeer::MEATUPPER, $this->meatupper);
        if ($this->isColumnModified(ProximsPeer::FILLETLOWER)) $criteria->add(ProximsPeer::FILLETLOWER, $this->filletlower);
        if ($this->isColumnModified(ProximsPeer::FILLETUPPER)) $criteria->add(ProximsPeer::FILLETUPPER, $this->filletupper);
        if ($this->isColumnModified(ProximsPeer::STEAKLOWER)) $criteria->add(ProximsPeer::STEAKLOWER, $this->steaklower);
        if ($this->isColumnModified(ProximsPeer::STEAKUPPER)) $criteria->add(ProximsPeer::STEAKUPPER, $this->steakupper);
        if ($this->isColumnModified(ProximsPeer::COMMENT)) $criteria->add(ProximsPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(ProximsPeer::MEATMOISTMIN)) $criteria->add(ProximsPeer::MEATMOISTMIN, $this->meatmoistmin);
        if ($this->isColumnModified(ProximsPeer::MEATMOISTMAX)) $criteria->add(ProximsPeer::MEATMOISTMAX, $this->meatmoistmax);
        if ($this->isColumnModified(ProximsPeer::MEATPROTMIN)) $criteria->add(ProximsPeer::MEATPROTMIN, $this->meatprotmin);
        if ($this->isColumnModified(ProximsPeer::MEATPROTMAX)) $criteria->add(ProximsPeer::MEATPROTMAX, $this->meatprotmax);
        if ($this->isColumnModified(ProximsPeer::MEATFATMIN)) $criteria->add(ProximsPeer::MEATFATMIN, $this->meatfatmin);
        if ($this->isColumnModified(ProximsPeer::MEATFATMAX)) $criteria->add(ProximsPeer::MEATFATMAX, $this->meatfatmax);
        if ($this->isColumnModified(ProximsPeer::MEATASHMIN)) $criteria->add(ProximsPeer::MEATASHMIN, $this->meatashmin);
        if ($this->isColumnModified(ProximsPeer::MEATASHMAX)) $criteria->add(ProximsPeer::MEATASHMAX, $this->meatashmax);
        if ($this->isColumnModified(ProximsPeer::LIVERMOISTMIN)) $criteria->add(ProximsPeer::LIVERMOISTMIN, $this->livermoistmin);
        if ($this->isColumnModified(ProximsPeer::LIVERMOISTMAX)) $criteria->add(ProximsPeer::LIVERMOISTMAX, $this->livermoistmax);
        if ($this->isColumnModified(ProximsPeer::LIVERPROTMIN)) $criteria->add(ProximsPeer::LIVERPROTMIN, $this->liverprotmin);
        if ($this->isColumnModified(ProximsPeer::LIVERPROTMAX)) $criteria->add(ProximsPeer::LIVERPROTMAX, $this->liverprotmax);
        if ($this->isColumnModified(ProximsPeer::LIVERFATMIN)) $criteria->add(ProximsPeer::LIVERFATMIN, $this->liverfatmin);
        if ($this->isColumnModified(ProximsPeer::LIVERFATMAX)) $criteria->add(ProximsPeer::LIVERFATMAX, $this->liverfatmax);
        if ($this->isColumnModified(ProximsPeer::LIVERASHMIN)) $criteria->add(ProximsPeer::LIVERASHMIN, $this->liverashmin);
        if ($this->isColumnModified(ProximsPeer::LIVERASHMAX)) $criteria->add(ProximsPeer::LIVERASHMAX, $this->liverashmax);
        if ($this->isColumnModified(ProximsPeer::ROEMOISTMIN)) $criteria->add(ProximsPeer::ROEMOISTMIN, $this->roemoistmin);
        if ($this->isColumnModified(ProximsPeer::ROEMOISTMAX)) $criteria->add(ProximsPeer::ROEMOISTMAX, $this->roemoistmax);
        if ($this->isColumnModified(ProximsPeer::ROEPROTMIN)) $criteria->add(ProximsPeer::ROEPROTMIN, $this->roeprotmin);
        if ($this->isColumnModified(ProximsPeer::ROEPROTMAX)) $criteria->add(ProximsPeer::ROEPROTMAX, $this->roeprotmax);
        if ($this->isColumnModified(ProximsPeer::ROEFATMIN)) $criteria->add(ProximsPeer::ROEFATMIN, $this->roefatmin);
        if ($this->isColumnModified(ProximsPeer::ROEFATMAX)) $criteria->add(ProximsPeer::ROEFATMAX, $this->roefatmax);
        if ($this->isColumnModified(ProximsPeer::ROEASHMIN)) $criteria->add(ProximsPeer::ROEASHMIN, $this->roeashmin);
        if ($this->isColumnModified(ProximsPeer::ROEASHMAX)) $criteria->add(ProximsPeer::ROEASHMAX, $this->roeashmax);
        if ($this->isColumnModified(ProximsPeer::VISCERAMOISTMIN)) $criteria->add(ProximsPeer::VISCERAMOISTMIN, $this->visceramoistmin);
        if ($this->isColumnModified(ProximsPeer::VISCERAMOISTMAX)) $criteria->add(ProximsPeer::VISCERAMOISTMAX, $this->visceramoistmax);
        if ($this->isColumnModified(ProximsPeer::VISCERAPROTMIN)) $criteria->add(ProximsPeer::VISCERAPROTMIN, $this->visceraprotmin);
        if ($this->isColumnModified(ProximsPeer::VISCERAPROTMAX)) $criteria->add(ProximsPeer::VISCERAPROTMAX, $this->visceraprotmax);
        if ($this->isColumnModified(ProximsPeer::VISCERAFATMIN)) $criteria->add(ProximsPeer::VISCERAFATMIN, $this->viscerafatmin);
        if ($this->isColumnModified(ProximsPeer::VISCERAFATMAX)) $criteria->add(ProximsPeer::VISCERAFATMAX, $this->viscerafatmax);
        if ($this->isColumnModified(ProximsPeer::VISCERAASHMIN)) $criteria->add(ProximsPeer::VISCERAASHMIN, $this->visceraashmin);
        if ($this->isColumnModified(ProximsPeer::VISCERAASHMAX)) $criteria->add(ProximsPeer::VISCERAASHMAX, $this->visceraashmax);
        if ($this->isColumnModified(ProximsPeer::HEADMOISTMIN)) $criteria->add(ProximsPeer::HEADMOISTMIN, $this->headmoistmin);
        if ($this->isColumnModified(ProximsPeer::HEADMOISTMAX)) $criteria->add(ProximsPeer::HEADMOISTMAX, $this->headmoistmax);
        if ($this->isColumnModified(ProximsPeer::HEADPROTMIN)) $criteria->add(ProximsPeer::HEADPROTMIN, $this->headprotmin);
        if ($this->isColumnModified(ProximsPeer::HEADPROTMAX)) $criteria->add(ProximsPeer::HEADPROTMAX, $this->headprotmax);
        if ($this->isColumnModified(ProximsPeer::HEADFATMIN)) $criteria->add(ProximsPeer::HEADFATMIN, $this->headfatmin);
        if ($this->isColumnModified(ProximsPeer::HEADFATMAX)) $criteria->add(ProximsPeer::HEADFATMAX, $this->headfatmax);
        if ($this->isColumnModified(ProximsPeer::HEADASHMIN)) $criteria->add(ProximsPeer::HEADASHMIN, $this->headashmin);
        if ($this->isColumnModified(ProximsPeer::HEADASHMAX)) $criteria->add(ProximsPeer::HEADASHMAX, $this->headashmax);
        if ($this->isColumnModified(ProximsPeer::WASTEMOISTMIN)) $criteria->add(ProximsPeer::WASTEMOISTMIN, $this->wastemoistmin);
        if ($this->isColumnModified(ProximsPeer::WASTEMOISTMAX)) $criteria->add(ProximsPeer::WASTEMOISTMAX, $this->wastemoistmax);
        if ($this->isColumnModified(ProximsPeer::WASTEPROTMIN)) $criteria->add(ProximsPeer::WASTEPROTMIN, $this->wasteprotmin);
        if ($this->isColumnModified(ProximsPeer::WASTEPROTMAX)) $criteria->add(ProximsPeer::WASTEPROTMAX, $this->wasteprotmax);
        if ($this->isColumnModified(ProximsPeer::WASTEFATMIN)) $criteria->add(ProximsPeer::WASTEFATMIN, $this->wastefatmin);
        if ($this->isColumnModified(ProximsPeer::WASTEFATMAX)) $criteria->add(ProximsPeer::WASTEFATMAX, $this->wastefatmax);
        if ($this->isColumnModified(ProximsPeer::WASTEASHMIN)) $criteria->add(ProximsPeer::WASTEASHMIN, $this->wasteashmin);
        if ($this->isColumnModified(ProximsPeer::WASTEASHMAX)) $criteria->add(ProximsPeer::WASTEASHMAX, $this->wasteashmax);
        if ($this->isColumnModified(ProximsPeer::COMMENTCHEMICS)) $criteria->add(ProximsPeer::COMMENTCHEMICS, $this->commentchemics);
        if ($this->isColumnModified(ProximsPeer::ENTERED)) $criteria->add(ProximsPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(ProximsPeer::DATEENTERED)) $criteria->add(ProximsPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(ProximsPeer::MODIFIED)) $criteria->add(ProximsPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(ProximsPeer::DATEMODIFIED)) $criteria->add(ProximsPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(ProximsPeer::EXPERT)) $criteria->add(ProximsPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(ProximsPeer::DATECHECKED)) $criteria->add(ProximsPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(ProximsPeer::REMARK)) $criteria->add(ProximsPeer::REMARK, $this->remark);
        if ($this->isColumnModified(ProximsPeer::TS)) $criteria->add(ProximsPeer::TS, $this->ts);

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
        $criteria = new Criteria(ProximsPeer::DATABASE_NAME);
        $criteria->add(ProximsPeer::STOCKCODE, $this->stockcode);
        $criteria->add(ProximsPeer::CHEMICSREFNO, $this->chemicsrefno);
        $criteria->add(ProximsPeer::LOCALITY, $this->locality);

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
        $pks[0] = $this->getStockcode();
        $pks[1] = $this->getChemicsrefno();
        $pks[2] = $this->getLocality();

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
        $this->setStockcode($keys[0]);
        $this->setChemicsrefno($keys[1]);
        $this->setLocality($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getChemicsrefno()) && (null === $this->getLocality());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Proxims (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setChemicsrefno($this->getChemicsrefno());
        $copyObj->setCCode($this->getCCode());
        $copyObj->setLocality($this->getLocality());
        $copyObj->setLength($this->getLength());
        $copyObj->setLengthupper($this->getLengthupper());
        $copyObj->setLengthtype($this->getLengthtype());
        $copyObj->setWeightlower($this->getWeightlower());
        $copyObj->setWeightupper($this->getWeightupper());
        $copyObj->setHeadlower($this->getHeadlower());
        $copyObj->setHeadupper($this->getHeadupper());
        $copyObj->setVisceralower22($this->getVisceralower22());
        $copyObj->setVisceraupper22($this->getVisceraupper22());
        $copyObj->setTrunklower($this->getTrunklower());
        $copyObj->setTrunkupper($this->getTrunkupper());
        $copyObj->setRoelower($this->getRoelower());
        $copyObj->setRoeupper($this->getRoeupper());
        $copyObj->setSkinlower($this->getSkinlower());
        $copyObj->setSkinupper($this->getSkinupper());
        $copyObj->setTesteslower($this->getTesteslower());
        $copyObj->setTestesupper($this->getTestesupper());
        $copyObj->setFinslower($this->getFinslower());
        $copyObj->setFinsupper($this->getFinsupper());
        $copyObj->setLiverlower($this->getLiverlower());
        $copyObj->setLiverupper($this->getLiverupper());
        $copyObj->setBoneslower($this->getBoneslower());
        $copyObj->setBonesupper($this->getBonesupper());
        $copyObj->setMeatlower($this->getMeatlower());
        $copyObj->setMeatupper($this->getMeatupper());
        $copyObj->setFilletlower($this->getFilletlower());
        $copyObj->setFilletupper($this->getFilletupper());
        $copyObj->setSteaklower($this->getSteaklower());
        $copyObj->setSteakupper($this->getSteakupper());
        $copyObj->setComment($this->getComment());
        $copyObj->setMeatmoistmin($this->getMeatmoistmin());
        $copyObj->setMeatmoistmax($this->getMeatmoistmax());
        $copyObj->setMeatprotmin($this->getMeatprotmin());
        $copyObj->setMeatprotmax($this->getMeatprotmax());
        $copyObj->setMeatfatmin($this->getMeatfatmin());
        $copyObj->setMeatfatmax($this->getMeatfatmax());
        $copyObj->setMeatashmin($this->getMeatashmin());
        $copyObj->setMeatashmax($this->getMeatashmax());
        $copyObj->setLivermoistmin($this->getLivermoistmin());
        $copyObj->setLivermoistmax($this->getLivermoistmax());
        $copyObj->setLiverprotmin($this->getLiverprotmin());
        $copyObj->setLiverprotmax($this->getLiverprotmax());
        $copyObj->setLiverfatmin($this->getLiverfatmin());
        $copyObj->setLiverfatmax($this->getLiverfatmax());
        $copyObj->setLiverashmin($this->getLiverashmin());
        $copyObj->setLiverashmax($this->getLiverashmax());
        $copyObj->setRoemoistmin($this->getRoemoistmin());
        $copyObj->setRoemoistmax($this->getRoemoistmax());
        $copyObj->setRoeprotmin($this->getRoeprotmin());
        $copyObj->setRoeprotmax($this->getRoeprotmax());
        $copyObj->setRoefatmin($this->getRoefatmin());
        $copyObj->setRoefatmax($this->getRoefatmax());
        $copyObj->setRoeashmin($this->getRoeashmin());
        $copyObj->setRoeashmax($this->getRoeashmax());
        $copyObj->setVisceramoistmin($this->getVisceramoistmin());
        $copyObj->setVisceramoistmax($this->getVisceramoistmax());
        $copyObj->setVisceraprotmin($this->getVisceraprotmin());
        $copyObj->setVisceraprotmax($this->getVisceraprotmax());
        $copyObj->setViscerafatmin($this->getViscerafatmin());
        $copyObj->setViscerafatmax($this->getViscerafatmax());
        $copyObj->setVisceraashmin($this->getVisceraashmin());
        $copyObj->setVisceraashmax($this->getVisceraashmax());
        $copyObj->setHeadmoistmin($this->getHeadmoistmin());
        $copyObj->setHeadmoistmax($this->getHeadmoistmax());
        $copyObj->setHeadprotmin($this->getHeadprotmin());
        $copyObj->setHeadprotmax($this->getHeadprotmax());
        $copyObj->setHeadfatmin($this->getHeadfatmin());
        $copyObj->setHeadfatmax($this->getHeadfatmax());
        $copyObj->setHeadashmin($this->getHeadashmin());
        $copyObj->setHeadashmax($this->getHeadashmax());
        $copyObj->setWastemoistmin($this->getWastemoistmin());
        $copyObj->setWastemoistmax($this->getWastemoistmax());
        $copyObj->setWasteprotmin($this->getWasteprotmin());
        $copyObj->setWasteprotmax($this->getWasteprotmax());
        $copyObj->setWastefatmin($this->getWastefatmin());
        $copyObj->setWastefatmax($this->getWastefatmax());
        $copyObj->setWasteashmin($this->getWasteashmin());
        $copyObj->setWasteashmax($this->getWasteashmax());
        $copyObj->setCommentchemics($this->getCommentchemics());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setRemark($this->getRemark());
        $copyObj->setTs($this->getTs());
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
     * @return Proxims Clone of current object.
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
     * @return ProximsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProximsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->stockcode = null;
        $this->speccode = null;
        $this->chemicsrefno = null;
        $this->c_code = null;
        $this->locality = null;
        $this->length = null;
        $this->lengthupper = null;
        $this->lengthtype = null;
        $this->weightlower = null;
        $this->weightupper = null;
        $this->headlower = null;
        $this->headupper = null;
        $this->visceralower22 = null;
        $this->visceraupper22 = null;
        $this->trunklower = null;
        $this->trunkupper = null;
        $this->roelower = null;
        $this->roeupper = null;
        $this->skinlower = null;
        $this->skinupper = null;
        $this->testeslower = null;
        $this->testesupper = null;
        $this->finslower = null;
        $this->finsupper = null;
        $this->liverlower = null;
        $this->liverupper = null;
        $this->boneslower = null;
        $this->bonesupper = null;
        $this->meatlower = null;
        $this->meatupper = null;
        $this->filletlower = null;
        $this->filletupper = null;
        $this->steaklower = null;
        $this->steakupper = null;
        $this->comment = null;
        $this->meatmoistmin = null;
        $this->meatmoistmax = null;
        $this->meatprotmin = null;
        $this->meatprotmax = null;
        $this->meatfatmin = null;
        $this->meatfatmax = null;
        $this->meatashmin = null;
        $this->meatashmax = null;
        $this->livermoistmin = null;
        $this->livermoistmax = null;
        $this->liverprotmin = null;
        $this->liverprotmax = null;
        $this->liverfatmin = null;
        $this->liverfatmax = null;
        $this->liverashmin = null;
        $this->liverashmax = null;
        $this->roemoistmin = null;
        $this->roemoistmax = null;
        $this->roeprotmin = null;
        $this->roeprotmax = null;
        $this->roefatmin = null;
        $this->roefatmax = null;
        $this->roeashmin = null;
        $this->roeashmax = null;
        $this->visceramoistmin = null;
        $this->visceramoistmax = null;
        $this->visceraprotmin = null;
        $this->visceraprotmax = null;
        $this->viscerafatmin = null;
        $this->viscerafatmax = null;
        $this->visceraashmin = null;
        $this->visceraashmax = null;
        $this->headmoistmin = null;
        $this->headmoistmax = null;
        $this->headprotmin = null;
        $this->headprotmax = null;
        $this->headfatmin = null;
        $this->headfatmax = null;
        $this->headashmin = null;
        $this->headashmax = null;
        $this->wastemoistmin = null;
        $this->wastemoistmax = null;
        $this->wasteprotmin = null;
        $this->wasteprotmax = null;
        $this->wastefatmin = null;
        $this->wastefatmax = null;
        $this->wasteashmin = null;
        $this->wasteashmax = null;
        $this->commentchemics = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->remark = null;
        $this->ts = null;
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
        return (string) $this->exportTo(ProximsPeer::DEFAULT_STRING_FORMAT);
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
