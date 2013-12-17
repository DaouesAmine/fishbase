<?php


/**
 * Base class that represents a row from the 'disref' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDisref extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DisrefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DisrefPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the discode field.
     * @var        int
     */
    protected $discode;

    /**
     * The value for the diseasesrefno field.
     * @var        int
     */
    protected $diseasesrefno;

    /**
     * The value for the diseasei field.
     * @var        string
     */
    protected $diseasei;

    /**
     * The value for the diseaseii field.
     * @var        string
     */
    protected $diseaseii;

    /**
     * The value for the pic field.
     * @var        string
     */
    protected $pic;

    /**
     * The value for the othernames field.
     * @var        string
     */
    protected $othernames;

    /**
     * The value for the germgenus field.
     * @var        string
     */
    protected $germgenus;

    /**
     * The value for the germspecies field.
     * @var        string
     */
    protected $germspecies;

    /**
     * The value for the group field.
     * @var        string
     */
    protected $group;

    /**
     * The value for the skinfinsafflicted field.
     * @var        int
     */
    protected $skinfinsafflicted;

    /**
     * The value for the bellyafflicted field.
     * @var        int
     */
    protected $bellyafflicted;

    /**
     * The value for the aberrantbehavior field.
     * @var        int
     */
    protected $aberrantbehavior;

    /**
     * The value for the gillsafflicted field.
     * @var        int
     */
    protected $gillsafflicted;

    /**
     * The value for the anusafflicted field.
     * @var        int
     */
    protected $anusafflicted;

    /**
     * The value for the otherbehavior field.
     * @var        int
     */
    protected $otherbehavior;

    /**
     * The value for the eyesafflicted field.
     * @var        int
     */
    protected $eyesafflicted;

    /**
     * The value for the visceraafflicted field.
     * @var        int
     */
    protected $visceraafflicted;

    /**
     * The value for the othersymptoms field.
     * @var        int
     */
    protected $othersymptoms;

    /**
     * The value for the aberrantcolor field.
     * @var        int
     */
    protected $aberrantcolor;

    /**
     * The value for the aberrantcoat field.
     * @var        int
     */
    protected $aberrantcoat;

    /**
     * The value for the aberrantmuscusprod field.
     * @var        int
     */
    protected $aberrantmuscusprod;

    /**
     * The value for the spots field.
     * @var        int
     */
    protected $spots;

    /**
     * The value for the spotscolor field.
     * @var        string
     */
    protected $spotscolor;

    /**
     * The value for the spotsonhead field.
     * @var        int
     */
    protected $spotsonhead;

    /**
     * The value for the dorsalspots field.
     * @var        int
     */
    protected $dorsalspots;

    /**
     * The value for the spotsondorsalfin field.
     * @var        int
     */
    protected $spotsondorsalfin;

    /**
     * The value for the spotsoncaudalfin field.
     * @var        int
     */
    protected $spotsoncaudalfin;

    /**
     * The value for the spotsontrunk field.
     * @var        int
     */
    protected $spotsontrunk;

    /**
     * The value for the ventralspots field.
     * @var        int
     */
    protected $ventralspots;

    /**
     * The value for the spotsonanalfin field.
     * @var        int
     */
    protected $spotsonanalfin;

    /**
     * The value for the spotsonunpairedf field.
     * @var        int
     */
    protected $spotsonunpairedf;

    /**
     * The value for the spotsontail field.
     * @var        int
     */
    protected $spotsontail;

    /**
     * The value for the areas field.
     * @var        int
     */
    protected $areas;

    /**
     * The value for the areacolori field.
     * @var        string
     */
    protected $areacolori;

    /**
     * The value for the areasonhead field.
     * @var        int
     */
    protected $areasonhead;

    /**
     * The value for the dorsalareas field.
     * @var        int
     */
    protected $dorsalareas;

    /**
     * The value for the areaondorsalfin field.
     * @var        int
     */
    protected $areaondorsalfin;

    /**
     * The value for the areaoncaudalfin field.
     * @var        int
     */
    protected $areaoncaudalfin;

    /**
     * The value for the areasontrunk field.
     * @var        int
     */
    protected $areasontrunk;

    /**
     * The value for the ventralareas field.
     * @var        int
     */
    protected $ventralareas;

    /**
     * The value for the areaonanalfin field.
     * @var        int
     */
    protected $areaonanalfin;

    /**
     * The value for the areaonunpairedf field.
     * @var        int
     */
    protected $areaonunpairedf;

    /**
     * The value for the areasontail field.
     * @var        int
     */
    protected $areasontail;

    /**
     * The value for the boils field.
     * @var        int
     */
    protected $boils;

    /**
     * The value for the boilscolor field.
     * @var        string
     */
    protected $boilscolor;

    /**
     * The value for the boilsonhead field.
     * @var        int
     */
    protected $boilsonhead;

    /**
     * The value for the dorsalboils field.
     * @var        int
     */
    protected $dorsalboils;

    /**
     * The value for the boilsondorsalfin field.
     * @var        int
     */
    protected $boilsondorsalfin;

    /**
     * The value for the boilsoncaudalfin field.
     * @var        int
     */
    protected $boilsoncaudalfin;

    /**
     * The value for the boilsontrunk field.
     * @var        int
     */
    protected $boilsontrunk;

    /**
     * The value for the ventralboils field.
     * @var        int
     */
    protected $ventralboils;

    /**
     * The value for the boilsonanalfin field.
     * @var        int
     */
    protected $boilsonanalfin;

    /**
     * The value for the boilsonunpairedf field.
     * @var        int
     */
    protected $boilsonunpairedf;

    /**
     * The value for the boilsontail field.
     * @var        int
     */
    protected $boilsontail;

    /**
     * The value for the ulcer field.
     * @var        int
     */
    protected $ulcer;

    /**
     * The value for the ulcercolor field.
     * @var        string
     */
    protected $ulcercolor;

    /**
     * The value for the ulceronhead field.
     * @var        int
     */
    protected $ulceronhead;

    /**
     * The value for the dorsalulcer field.
     * @var        int
     */
    protected $dorsalulcer;

    /**
     * The value for the ulcerondorsalfin field.
     * @var        int
     */
    protected $ulcerondorsalfin;

    /**
     * The value for the ulceroncaudalfin field.
     * @var        int
     */
    protected $ulceroncaudalfin;

    /**
     * The value for the ulcerontrunk field.
     * @var        int
     */
    protected $ulcerontrunk;

    /**
     * The value for the ventralulcer field.
     * @var        int
     */
    protected $ventralulcer;

    /**
     * The value for the ulceronanalfin field.
     * @var        int
     */
    protected $ulceronanalfin;

    /**
     * The value for the ulceronunpairedf field.
     * @var        int
     */
    protected $ulceronunpairedf;

    /**
     * The value for the ulcerontail field.
     * @var        int
     */
    protected $ulcerontail;

    /**
     * The value for the attachmentsskin2 field.
     * @var        string
     */
    protected $attachmentsskin2;

    /**
     * The value for the attachmentonhead field.
     * @var        int
     */
    protected $attachmentonhead;

    /**
     * The value for the dorsalattachments field.
     * @var        int
     */
    protected $dorsalattachments;

    /**
     * The value for the attondorsalfin field.
     * @var        int
     */
    protected $attondorsalfin;

    /**
     * The value for the attoncaudalfin field.
     * @var        int
     */
    protected $attoncaudalfin;

    /**
     * The value for the attachmentontrunk field.
     * @var        int
     */
    protected $attachmentontrunk;

    /**
     * The value for the ventralattachments field.
     * @var        int
     */
    protected $ventralattachments;

    /**
     * The value for the attonanalfin field.
     * @var        int
     */
    protected $attonanalfin;

    /**
     * The value for the attonunpairedf field.
     * @var        int
     */
    protected $attonunpairedf;

    /**
     * The value for the attachmentontail field.
     * @var        int
     */
    protected $attachmentontail;

    /**
     * The value for the fins1 field.
     * @var        string
     */
    protected $fins1;

    /**
     * The value for the dorsalfin field.
     * @var        int
     */
    protected $dorsalfin;

    /**
     * The value for the caudalfin field.
     * @var        int
     */
    protected $caudalfin;

    /**
     * The value for the analfin field.
     * @var        int
     */
    protected $analfin;

    /**
     * The value for the unpairedfins field.
     * @var        int
     */
    protected $unpairedfins;

    /**
     * The value for the aberrantcolorgills field.
     * @var        int
     */
    protected $aberrantcolorgills;

    /**
     * The value for the abercolorgill field.
     * @var        string
     */
    protected $abercolorgill;

    /**
     * The value for the eyecolor field.
     * @var        int
     */
    protected $eyecolor;

    /**
     * The value for the aberrantspotsgill field.
     * @var        int
     */
    protected $aberrantspotsgill;

    /**
     * The value for the aberrantspotscolor field.
     * @var        string
     */
    protected $aberrantspotscolor;

    /**
     * The value for the eyespots field.
     * @var        string
     */
    protected $eyespots;

    /**
     * The value for the knotsongills field.
     * @var        int
     */
    protected $knotsongills;

    /**
     * The value for the knotscolor field.
     * @var        string
     */
    protected $knotscolor;

    /**
     * The value for the eyescondition field.
     * @var        string
     */
    protected $eyescondition;

    /**
     * The value for the areasongills field.
     * @var        int
     */
    protected $areasongills;

    /**
     * The value for the areascolor field.
     * @var        string
     */
    protected $areascolor;

    /**
     * The value for the mucusprodgills field.
     * @var        int
     */
    protected $mucusprodgills;

    /**
     * The value for the conditiongills field.
     * @var        int
     */
    protected $conditiongills;

    /**
     * The value for the objectgills field.
     * @var        int
     */
    protected $objectgills;

    /**
     * The value for the attachmentgills field.
     * @var        string
     */
    protected $attachmentgills;

    /**
     * The value for the bellycondition field.
     * @var        string
     */
    protected $bellycondition;

    /**
     * The value for the anuscondition field.
     * @var        int
     */
    protected $anuscondition;

    /**
     * The value for the bellylumen field.
     * @var        int
     */
    protected $bellylumen;

    /**
     * The value for the anuscolor field.
     * @var        int
     */
    protected $anuscolor;

    /**
     * The value for the bellyworms field.
     * @var        string
     */
    protected $bellyworms;

    /**
     * The value for the anusobject field.
     * @var        int
     */
    protected $anusobject;

    /**
     * The value for the anusattachments field.
     * @var        string
     */
    protected $anusattachments;

    /**
     * The value for the anusexudates field.
     * @var        int
     */
    protected $anusexudates;

    /**
     * The value for the liveraffl field.
     * @var        int
     */
    protected $liveraffl;

    /**
     * The value for the liversize field.
     * @var        string
     */
    protected $liversize;

    /**
     * The value for the liverapp field.
     * @var        string
     */
    protected $liverapp;

    /**
     * The value for the liverblot field.
     * @var        int
     */
    protected $liverblot;

    /**
     * The value for the liverblc field.
     * @var        string
     */
    protected $liverblc;

    /**
     * The value for the liverknots field.
     * @var        int
     */
    protected $liverknots;

    /**
     * The value for the liverknc field.
     * @var        string
     */
    protected $liverknc;

    /**
     * The value for the spleenaffl field.
     * @var        int
     */
    protected $spleenaffl;

    /**
     * The value for the spleensize field.
     * @var        string
     */
    protected $spleensize;

    /**
     * The value for the spleenapp field.
     * @var        string
     */
    protected $spleenapp;

    /**
     * The value for the spleenblot field.
     * @var        int
     */
    protected $spleenblot;

    /**
     * The value for the spleenblc field.
     * @var        string
     */
    protected $spleenblc;

    /**
     * The value for the spleenknots field.
     * @var        int
     */
    protected $spleenknots;

    /**
     * The value for the spleenknc field.
     * @var        string
     */
    protected $spleenknc;

    /**
     * The value for the kidneyaffl field.
     * @var        int
     */
    protected $kidneyaffl;

    /**
     * The value for the kidneysize field.
     * @var        string
     */
    protected $kidneysize;

    /**
     * The value for the kidneyapp field.
     * @var        string
     */
    protected $kidneyapp;

    /**
     * The value for the kidneyblot field.
     * @var        int
     */
    protected $kidneyblot;

    /**
     * The value for the kidneyblc field.
     * @var        string
     */
    protected $kidneyblc;

    /**
     * The value for the kidneyknots field.
     * @var        int
     */
    protected $kidneyknots;

    /**
     * The value for the kidneyknc field.
     * @var        string
     */
    protected $kidneyknc;

    /**
     * The value for the swimbladderaffl field.
     * @var        int
     */
    protected $swimbladderaffl;

    /**
     * The value for the swimbladdersize field.
     * @var        string
     */
    protected $swimbladdersize;

    /**
     * The value for the swimbladderapp field.
     * @var        string
     */
    protected $swimbladderapp;

    /**
     * The value for the swimbladderblot field.
     * @var        int
     */
    protected $swimbladderblot;

    /**
     * The value for the swimbladderblc field.
     * @var        string
     */
    protected $swimbladderblc;

    /**
     * The value for the swimbladderknots field.
     * @var        int
     */
    protected $swimbladderknots;

    /**
     * The value for the swimbladderknc field.
     * @var        string
     */
    protected $swimbladderknc;

    /**
     * The value for the intestineaffl field.
     * @var        int
     */
    protected $intestineaffl;

    /**
     * The value for the intestinesize field.
     * @var        string
     */
    protected $intestinesize;

    /**
     * The value for the intestineapp field.
     * @var        string
     */
    protected $intestineapp;

    /**
     * The value for the intestineblot field.
     * @var        int
     */
    protected $intestineblot;

    /**
     * The value for the intestineblc field.
     * @var        string
     */
    protected $intestineblc;

    /**
     * The value for the intestineknots field.
     * @var        int
     */
    protected $intestineknots;

    /**
     * The value for the intestineknc field.
     * @var        string
     */
    protected $intestineknc;

    /**
     * The value for the otherorgans field.
     * @var        int
     */
    protected $otherorgans;

    /**
     * The value for the otherorganssize field.
     * @var        string
     */
    protected $otherorganssize;

    /**
     * The value for the otherorgansblot field.
     * @var        int
     */
    protected $otherorgansblot;

    /**
     * The value for the otherorgansblc field.
     * @var        string
     */
    protected $otherorgansblc;

    /**
     * The value for the otherorgansknots field.
     * @var        int
     */
    protected $otherorgansknots;

    /**
     * The value for the otherorgansknc field.
     * @var        string
     */
    protected $otherorgansknc;

    /**
     * The value for the allorgans field.
     * @var        int
     */
    protected $allorgans;

    /**
     * The value for the allorgansapp field.
     * @var        string
     */
    protected $allorgansapp;

    /**
     * The value for the bristeling field.
     * @var        int
     */
    protected $bristeling;

    /**
     * The value for the mortality field.
     * @var        string
     */
    protected $mortality;

    /**
     * The value for the loss field.
     * @var        int
     */
    protected $loss;

    /**
     * The value for the skeletondeformation field.
     * @var        int
     */
    protected $skeletondeformation;

    /**
     * The value for the spring field.
     * @var        int
     */
    protected $spring;

    /**
     * The value for the summer field.
     * @var        int
     */
    protected $summer;

    /**
     * The value for the growthrate field.
     * @var        int
     */
    protected $growthrate;

    /**
     * The value for the autumn field.
     * @var        int
     */
    protected $autumn;

    /**
     * The value for the winter field.
     * @var        int
     */
    protected $winter;

    /**
     * The value for the condition field.
     * @var        int
     */
    protected $condition;

    /**
     * The value for the aberrantactivity field.
     * @var        int
     */
    protected $aberrantactivity;

    /**
     * The value for the activity field.
     * @var        string
     */
    protected $activity;

    /**
     * The value for the aberrantbalance field.
     * @var        int
     */
    protected $aberrantbalance;

    /**
     * The value for the aberrantswmotions field.
     * @var        int
     */
    protected $aberrantswmotions;

    /**
     * The value for the swimmingmotions field.
     * @var        string
     */
    protected $swimmingmotions;

    /**
     * The value for the aberrantbodydirec field.
     * @var        int
     */
    protected $aberrantbodydirec;

    /**
     * The value for the scraping field.
     * @var        int
     */
    protected $scraping;

    /**
     * The value for the jumping field.
     * @var        int
     */
    protected $jumping;

    /**
     * The value for the aberrantfins field.
     * @var        int
     */
    protected $aberrantfins;

    /**
     * The value for the fins field.
     * @var        string
     */
    protected $fins;

    /**
     * The value for the aberrantlocation field.
     * @var        int
     */
    protected $aberrantlocation;

    /**
     * The value for the fishnearsurface field.
     * @var        int
     */
    protected $fishnearsurface;

    /**
     * The value for the infloworoutflow field.
     * @var        int
     */
    protected $infloworoutflow;

    /**
     * The value for the aberrantappetite field.
     * @var        int
     */
    protected $aberrantappetite;

    /**
     * The value for the operculum field.
     * @var        int
     */
    protected $operculum;

    /**
     * The value for the aberrantventilation field.
     * @var        int
     */
    protected $aberrantventilation;

    /**
     * The value for the fast field.
     * @var        int
     */
    protected $fast;

    /**
     * The value for the slow field.
     * @var        int
     */
    protected $slow;

    /**
     * The value for the flat field.
     * @var        int
     */
    protected $flat;

    /**
     * The value for the heavy field.
     * @var        int
     */
    protected $heavy;

    /**
     * The value for the gaspingair field.
     * @var        int
     */
    protected $gaspingair;

    /**
     * The value for the fishafflicted field.
     * @var        string
     */
    protected $fishafflicted;

    /**
     * The value for the fishafflicted2 field.
     * @var        string
     */
    protected $fishafflicted2;

    /**
     * The value for the fishafflicted3 field.
     * @var        string
     */
    protected $fishafflicted3;

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
     * The value for the fishafflict field.
     * @var        string
     */
    protected $fishafflict;

    /**
     * The value for the symptom field.
     * @var        string
     */
    protected $symptom;

    /**
     * The value for the treatments field.
     * @var        string
     */
    protected $treatments;

    /**
     * The value for the prophylaxes field.
     * @var        string
     */
    protected $prophylaxes;

    /**
     * The value for the addrems field.
     * @var        string
     */
    protected $addrems;

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
     * Get the [discode] column value.
     *
     * @return int
     */
    public function getDiscode()
    {

        return $this->discode;
    }

    /**
     * Get the [diseasesrefno] column value.
     *
     * @return int
     */
    public function getDiseasesrefno()
    {

        return $this->diseasesrefno;
    }

    /**
     * Get the [diseasei] column value.
     *
     * @return string
     */
    public function getDiseasei()
    {

        return $this->diseasei;
    }

    /**
     * Get the [diseaseii] column value.
     *
     * @return string
     */
    public function getDiseaseii()
    {

        return $this->diseaseii;
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
     * Get the [othernames] column value.
     *
     * @return string
     */
    public function getOthernames()
    {

        return $this->othernames;
    }

    /**
     * Get the [germgenus] column value.
     *
     * @return string
     */
    public function getGermgenus()
    {

        return $this->germgenus;
    }

    /**
     * Get the [germspecies] column value.
     *
     * @return string
     */
    public function getGermspecies()
    {

        return $this->germspecies;
    }

    /**
     * Get the [group] column value.
     *
     * @return string
     */
    public function getGroup()
    {

        return $this->group;
    }

    /**
     * Get the [skinfinsafflicted] column value.
     *
     * @return int
     */
    public function getSkinfinsafflicted()
    {

        return $this->skinfinsafflicted;
    }

    /**
     * Get the [bellyafflicted] column value.
     *
     * @return int
     */
    public function getBellyafflicted()
    {

        return $this->bellyafflicted;
    }

    /**
     * Get the [aberrantbehavior] column value.
     *
     * @return int
     */
    public function getAberrantbehavior()
    {

        return $this->aberrantbehavior;
    }

    /**
     * Get the [gillsafflicted] column value.
     *
     * @return int
     */
    public function getGillsafflicted()
    {

        return $this->gillsafflicted;
    }

    /**
     * Get the [anusafflicted] column value.
     *
     * @return int
     */
    public function getAnusafflicted()
    {

        return $this->anusafflicted;
    }

    /**
     * Get the [otherbehavior] column value.
     *
     * @return int
     */
    public function getOtherbehavior()
    {

        return $this->otherbehavior;
    }

    /**
     * Get the [eyesafflicted] column value.
     *
     * @return int
     */
    public function getEyesafflicted()
    {

        return $this->eyesafflicted;
    }

    /**
     * Get the [visceraafflicted] column value.
     *
     * @return int
     */
    public function getVisceraafflicted()
    {

        return $this->visceraafflicted;
    }

    /**
     * Get the [othersymptoms] column value.
     *
     * @return int
     */
    public function getOthersymptoms()
    {

        return $this->othersymptoms;
    }

    /**
     * Get the [aberrantcolor] column value.
     *
     * @return int
     */
    public function getAberrantcolor()
    {

        return $this->aberrantcolor;
    }

    /**
     * Get the [aberrantcoat] column value.
     *
     * @return int
     */
    public function getAberrantcoat()
    {

        return $this->aberrantcoat;
    }

    /**
     * Get the [aberrantmuscusprod] column value.
     *
     * @return int
     */
    public function getAberrantmuscusprod()
    {

        return $this->aberrantmuscusprod;
    }

    /**
     * Get the [spots] column value.
     *
     * @return int
     */
    public function getSpots()
    {

        return $this->spots;
    }

    /**
     * Get the [spotscolor] column value.
     *
     * @return string
     */
    public function getSpotscolor()
    {

        return $this->spotscolor;
    }

    /**
     * Get the [spotsonhead] column value.
     *
     * @return int
     */
    public function getSpotsonhead()
    {

        return $this->spotsonhead;
    }

    /**
     * Get the [dorsalspots] column value.
     *
     * @return int
     */
    public function getDorsalspots()
    {

        return $this->dorsalspots;
    }

    /**
     * Get the [spotsondorsalfin] column value.
     *
     * @return int
     */
    public function getSpotsondorsalfin()
    {

        return $this->spotsondorsalfin;
    }

    /**
     * Get the [spotsoncaudalfin] column value.
     *
     * @return int
     */
    public function getSpotsoncaudalfin()
    {

        return $this->spotsoncaudalfin;
    }

    /**
     * Get the [spotsontrunk] column value.
     *
     * @return int
     */
    public function getSpotsontrunk()
    {

        return $this->spotsontrunk;
    }

    /**
     * Get the [ventralspots] column value.
     *
     * @return int
     */
    public function getVentralspots()
    {

        return $this->ventralspots;
    }

    /**
     * Get the [spotsonanalfin] column value.
     *
     * @return int
     */
    public function getSpotsonanalfin()
    {

        return $this->spotsonanalfin;
    }

    /**
     * Get the [spotsonunpairedf] column value.
     *
     * @return int
     */
    public function getSpotsonunpairedf()
    {

        return $this->spotsonunpairedf;
    }

    /**
     * Get the [spotsontail] column value.
     *
     * @return int
     */
    public function getSpotsontail()
    {

        return $this->spotsontail;
    }

    /**
     * Get the [areas] column value.
     *
     * @return int
     */
    public function getAreas()
    {

        return $this->areas;
    }

    /**
     * Get the [areacolori] column value.
     *
     * @return string
     */
    public function getAreacolori()
    {

        return $this->areacolori;
    }

    /**
     * Get the [areasonhead] column value.
     *
     * @return int
     */
    public function getAreasonhead()
    {

        return $this->areasonhead;
    }

    /**
     * Get the [dorsalareas] column value.
     *
     * @return int
     */
    public function getDorsalareas()
    {

        return $this->dorsalareas;
    }

    /**
     * Get the [areaondorsalfin] column value.
     *
     * @return int
     */
    public function getAreaondorsalfin()
    {

        return $this->areaondorsalfin;
    }

    /**
     * Get the [areaoncaudalfin] column value.
     *
     * @return int
     */
    public function getAreaoncaudalfin()
    {

        return $this->areaoncaudalfin;
    }

    /**
     * Get the [areasontrunk] column value.
     *
     * @return int
     */
    public function getAreasontrunk()
    {

        return $this->areasontrunk;
    }

    /**
     * Get the [ventralareas] column value.
     *
     * @return int
     */
    public function getVentralareas()
    {

        return $this->ventralareas;
    }

    /**
     * Get the [areaonanalfin] column value.
     *
     * @return int
     */
    public function getAreaonanalfin()
    {

        return $this->areaonanalfin;
    }

    /**
     * Get the [areaonunpairedf] column value.
     *
     * @return int
     */
    public function getAreaonunpairedf()
    {

        return $this->areaonunpairedf;
    }

    /**
     * Get the [areasontail] column value.
     *
     * @return int
     */
    public function getAreasontail()
    {

        return $this->areasontail;
    }

    /**
     * Get the [boils] column value.
     *
     * @return int
     */
    public function getBoils()
    {

        return $this->boils;
    }

    /**
     * Get the [boilscolor] column value.
     *
     * @return string
     */
    public function getBoilscolor()
    {

        return $this->boilscolor;
    }

    /**
     * Get the [boilsonhead] column value.
     *
     * @return int
     */
    public function getBoilsonhead()
    {

        return $this->boilsonhead;
    }

    /**
     * Get the [dorsalboils] column value.
     *
     * @return int
     */
    public function getDorsalboils()
    {

        return $this->dorsalboils;
    }

    /**
     * Get the [boilsondorsalfin] column value.
     *
     * @return int
     */
    public function getBoilsondorsalfin()
    {

        return $this->boilsondorsalfin;
    }

    /**
     * Get the [boilsoncaudalfin] column value.
     *
     * @return int
     */
    public function getBoilsoncaudalfin()
    {

        return $this->boilsoncaudalfin;
    }

    /**
     * Get the [boilsontrunk] column value.
     *
     * @return int
     */
    public function getBoilsontrunk()
    {

        return $this->boilsontrunk;
    }

    /**
     * Get the [ventralboils] column value.
     *
     * @return int
     */
    public function getVentralboils()
    {

        return $this->ventralboils;
    }

    /**
     * Get the [boilsonanalfin] column value.
     *
     * @return int
     */
    public function getBoilsonanalfin()
    {

        return $this->boilsonanalfin;
    }

    /**
     * Get the [boilsonunpairedf] column value.
     *
     * @return int
     */
    public function getBoilsonunpairedf()
    {

        return $this->boilsonunpairedf;
    }

    /**
     * Get the [boilsontail] column value.
     *
     * @return int
     */
    public function getBoilsontail()
    {

        return $this->boilsontail;
    }

    /**
     * Get the [ulcer] column value.
     *
     * @return int
     */
    public function getUlcer()
    {

        return $this->ulcer;
    }

    /**
     * Get the [ulcercolor] column value.
     *
     * @return string
     */
    public function getUlcercolor()
    {

        return $this->ulcercolor;
    }

    /**
     * Get the [ulceronhead] column value.
     *
     * @return int
     */
    public function getUlceronhead()
    {

        return $this->ulceronhead;
    }

    /**
     * Get the [dorsalulcer] column value.
     *
     * @return int
     */
    public function getDorsalulcer()
    {

        return $this->dorsalulcer;
    }

    /**
     * Get the [ulcerondorsalfin] column value.
     *
     * @return int
     */
    public function getUlcerondorsalfin()
    {

        return $this->ulcerondorsalfin;
    }

    /**
     * Get the [ulceroncaudalfin] column value.
     *
     * @return int
     */
    public function getUlceroncaudalfin()
    {

        return $this->ulceroncaudalfin;
    }

    /**
     * Get the [ulcerontrunk] column value.
     *
     * @return int
     */
    public function getUlcerontrunk()
    {

        return $this->ulcerontrunk;
    }

    /**
     * Get the [ventralulcer] column value.
     *
     * @return int
     */
    public function getVentralulcer()
    {

        return $this->ventralulcer;
    }

    /**
     * Get the [ulceronanalfin] column value.
     *
     * @return int
     */
    public function getUlceronanalfin()
    {

        return $this->ulceronanalfin;
    }

    /**
     * Get the [ulceronunpairedf] column value.
     *
     * @return int
     */
    public function getUlceronunpairedf()
    {

        return $this->ulceronunpairedf;
    }

    /**
     * Get the [ulcerontail] column value.
     *
     * @return int
     */
    public function getUlcerontail()
    {

        return $this->ulcerontail;
    }

    /**
     * Get the [attachmentsskin2] column value.
     *
     * @return string
     */
    public function getAttachmentsskin2()
    {

        return $this->attachmentsskin2;
    }

    /**
     * Get the [attachmentonhead] column value.
     *
     * @return int
     */
    public function getAttachmentonhead()
    {

        return $this->attachmentonhead;
    }

    /**
     * Get the [dorsalattachments] column value.
     *
     * @return int
     */
    public function getDorsalattachments()
    {

        return $this->dorsalattachments;
    }

    /**
     * Get the [attondorsalfin] column value.
     *
     * @return int
     */
    public function getAttondorsalfin()
    {

        return $this->attondorsalfin;
    }

    /**
     * Get the [attoncaudalfin] column value.
     *
     * @return int
     */
    public function getAttoncaudalfin()
    {

        return $this->attoncaudalfin;
    }

    /**
     * Get the [attachmentontrunk] column value.
     *
     * @return int
     */
    public function getAttachmentontrunk()
    {

        return $this->attachmentontrunk;
    }

    /**
     * Get the [ventralattachments] column value.
     *
     * @return int
     */
    public function getVentralattachments()
    {

        return $this->ventralattachments;
    }

    /**
     * Get the [attonanalfin] column value.
     *
     * @return int
     */
    public function getAttonanalfin()
    {

        return $this->attonanalfin;
    }

    /**
     * Get the [attonunpairedf] column value.
     *
     * @return int
     */
    public function getAttonunpairedf()
    {

        return $this->attonunpairedf;
    }

    /**
     * Get the [attachmentontail] column value.
     *
     * @return int
     */
    public function getAttachmentontail()
    {

        return $this->attachmentontail;
    }

    /**
     * Get the [fins1] column value.
     *
     * @return string
     */
    public function getFins1()
    {

        return $this->fins1;
    }

    /**
     * Get the [dorsalfin] column value.
     *
     * @return int
     */
    public function getDorsalfin()
    {

        return $this->dorsalfin;
    }

    /**
     * Get the [caudalfin] column value.
     *
     * @return int
     */
    public function getCaudalfin()
    {

        return $this->caudalfin;
    }

    /**
     * Get the [analfin] column value.
     *
     * @return int
     */
    public function getAnalfin()
    {

        return $this->analfin;
    }

    /**
     * Get the [unpairedfins] column value.
     *
     * @return int
     */
    public function getUnpairedfins()
    {

        return $this->unpairedfins;
    }

    /**
     * Get the [aberrantcolorgills] column value.
     *
     * @return int
     */
    public function getAberrantcolorgills()
    {

        return $this->aberrantcolorgills;
    }

    /**
     * Get the [abercolorgill] column value.
     *
     * @return string
     */
    public function getAbercolorgill()
    {

        return $this->abercolorgill;
    }

    /**
     * Get the [eyecolor] column value.
     *
     * @return int
     */
    public function getEyecolor()
    {

        return $this->eyecolor;
    }

    /**
     * Get the [aberrantspotsgill] column value.
     *
     * @return int
     */
    public function getAberrantspotsgill()
    {

        return $this->aberrantspotsgill;
    }

    /**
     * Get the [aberrantspotscolor] column value.
     *
     * @return string
     */
    public function getAberrantspotscolor()
    {

        return $this->aberrantspotscolor;
    }

    /**
     * Get the [eyespots] column value.
     *
     * @return string
     */
    public function getEyespots()
    {

        return $this->eyespots;
    }

    /**
     * Get the [knotsongills] column value.
     *
     * @return int
     */
    public function getKnotsongills()
    {

        return $this->knotsongills;
    }

    /**
     * Get the [knotscolor] column value.
     *
     * @return string
     */
    public function getKnotscolor()
    {

        return $this->knotscolor;
    }

    /**
     * Get the [eyescondition] column value.
     *
     * @return string
     */
    public function getEyescondition()
    {

        return $this->eyescondition;
    }

    /**
     * Get the [areasongills] column value.
     *
     * @return int
     */
    public function getAreasongills()
    {

        return $this->areasongills;
    }

    /**
     * Get the [areascolor] column value.
     *
     * @return string
     */
    public function getAreascolor()
    {

        return $this->areascolor;
    }

    /**
     * Get the [mucusprodgills] column value.
     *
     * @return int
     */
    public function getMucusprodgills()
    {

        return $this->mucusprodgills;
    }

    /**
     * Get the [conditiongills] column value.
     *
     * @return int
     */
    public function getConditiongills()
    {

        return $this->conditiongills;
    }

    /**
     * Get the [objectgills] column value.
     *
     * @return int
     */
    public function getObjectgills()
    {

        return $this->objectgills;
    }

    /**
     * Get the [attachmentgills] column value.
     *
     * @return string
     */
    public function getAttachmentgills()
    {

        return $this->attachmentgills;
    }

    /**
     * Get the [bellycondition] column value.
     *
     * @return string
     */
    public function getBellycondition()
    {

        return $this->bellycondition;
    }

    /**
     * Get the [anuscondition] column value.
     *
     * @return int
     */
    public function getAnuscondition()
    {

        return $this->anuscondition;
    }

    /**
     * Get the [bellylumen] column value.
     *
     * @return int
     */
    public function getBellylumen()
    {

        return $this->bellylumen;
    }

    /**
     * Get the [anuscolor] column value.
     *
     * @return int
     */
    public function getAnuscolor()
    {

        return $this->anuscolor;
    }

    /**
     * Get the [bellyworms] column value.
     *
     * @return string
     */
    public function getBellyworms()
    {

        return $this->bellyworms;
    }

    /**
     * Get the [anusobject] column value.
     *
     * @return int
     */
    public function getAnusobject()
    {

        return $this->anusobject;
    }

    /**
     * Get the [anusattachments] column value.
     *
     * @return string
     */
    public function getAnusattachments()
    {

        return $this->anusattachments;
    }

    /**
     * Get the [anusexudates] column value.
     *
     * @return int
     */
    public function getAnusexudates()
    {

        return $this->anusexudates;
    }

    /**
     * Get the [liveraffl] column value.
     *
     * @return int
     */
    public function getLiveraffl()
    {

        return $this->liveraffl;
    }

    /**
     * Get the [liversize] column value.
     *
     * @return string
     */
    public function getLiversize()
    {

        return $this->liversize;
    }

    /**
     * Get the [liverapp] column value.
     *
     * @return string
     */
    public function getLiverapp()
    {

        return $this->liverapp;
    }

    /**
     * Get the [liverblot] column value.
     *
     * @return int
     */
    public function getLiverblot()
    {

        return $this->liverblot;
    }

    /**
     * Get the [liverblc] column value.
     *
     * @return string
     */
    public function getLiverblc()
    {

        return $this->liverblc;
    }

    /**
     * Get the [liverknots] column value.
     *
     * @return int
     */
    public function getLiverknots()
    {

        return $this->liverknots;
    }

    /**
     * Get the [liverknc] column value.
     *
     * @return string
     */
    public function getLiverknc()
    {

        return $this->liverknc;
    }

    /**
     * Get the [spleenaffl] column value.
     *
     * @return int
     */
    public function getSpleenaffl()
    {

        return $this->spleenaffl;
    }

    /**
     * Get the [spleensize] column value.
     *
     * @return string
     */
    public function getSpleensize()
    {

        return $this->spleensize;
    }

    /**
     * Get the [spleenapp] column value.
     *
     * @return string
     */
    public function getSpleenapp()
    {

        return $this->spleenapp;
    }

    /**
     * Get the [spleenblot] column value.
     *
     * @return int
     */
    public function getSpleenblot()
    {

        return $this->spleenblot;
    }

    /**
     * Get the [spleenblc] column value.
     *
     * @return string
     */
    public function getSpleenblc()
    {

        return $this->spleenblc;
    }

    /**
     * Get the [spleenknots] column value.
     *
     * @return int
     */
    public function getSpleenknots()
    {

        return $this->spleenknots;
    }

    /**
     * Get the [spleenknc] column value.
     *
     * @return string
     */
    public function getSpleenknc()
    {

        return $this->spleenknc;
    }

    /**
     * Get the [kidneyaffl] column value.
     *
     * @return int
     */
    public function getKidneyaffl()
    {

        return $this->kidneyaffl;
    }

    /**
     * Get the [kidneysize] column value.
     *
     * @return string
     */
    public function getKidneysize()
    {

        return $this->kidneysize;
    }

    /**
     * Get the [kidneyapp] column value.
     *
     * @return string
     */
    public function getKidneyapp()
    {

        return $this->kidneyapp;
    }

    /**
     * Get the [kidneyblot] column value.
     *
     * @return int
     */
    public function getKidneyblot()
    {

        return $this->kidneyblot;
    }

    /**
     * Get the [kidneyblc] column value.
     *
     * @return string
     */
    public function getKidneyblc()
    {

        return $this->kidneyblc;
    }

    /**
     * Get the [kidneyknots] column value.
     *
     * @return int
     */
    public function getKidneyknots()
    {

        return $this->kidneyknots;
    }

    /**
     * Get the [kidneyknc] column value.
     *
     * @return string
     */
    public function getKidneyknc()
    {

        return $this->kidneyknc;
    }

    /**
     * Get the [swimbladderaffl] column value.
     *
     * @return int
     */
    public function getSwimbladderaffl()
    {

        return $this->swimbladderaffl;
    }

    /**
     * Get the [swimbladdersize] column value.
     *
     * @return string
     */
    public function getSwimbladdersize()
    {

        return $this->swimbladdersize;
    }

    /**
     * Get the [swimbladderapp] column value.
     *
     * @return string
     */
    public function getSwimbladderapp()
    {

        return $this->swimbladderapp;
    }

    /**
     * Get the [swimbladderblot] column value.
     *
     * @return int
     */
    public function getSwimbladderblot()
    {

        return $this->swimbladderblot;
    }

    /**
     * Get the [swimbladderblc] column value.
     *
     * @return string
     */
    public function getSwimbladderblc()
    {

        return $this->swimbladderblc;
    }

    /**
     * Get the [swimbladderknots] column value.
     *
     * @return int
     */
    public function getSwimbladderknots()
    {

        return $this->swimbladderknots;
    }

    /**
     * Get the [swimbladderknc] column value.
     *
     * @return string
     */
    public function getSwimbladderknc()
    {

        return $this->swimbladderknc;
    }

    /**
     * Get the [intestineaffl] column value.
     *
     * @return int
     */
    public function getIntestineaffl()
    {

        return $this->intestineaffl;
    }

    /**
     * Get the [intestinesize] column value.
     *
     * @return string
     */
    public function getIntestinesize()
    {

        return $this->intestinesize;
    }

    /**
     * Get the [intestineapp] column value.
     *
     * @return string
     */
    public function getIntestineapp()
    {

        return $this->intestineapp;
    }

    /**
     * Get the [intestineblot] column value.
     *
     * @return int
     */
    public function getIntestineblot()
    {

        return $this->intestineblot;
    }

    /**
     * Get the [intestineblc] column value.
     *
     * @return string
     */
    public function getIntestineblc()
    {

        return $this->intestineblc;
    }

    /**
     * Get the [intestineknots] column value.
     *
     * @return int
     */
    public function getIntestineknots()
    {

        return $this->intestineknots;
    }

    /**
     * Get the [intestineknc] column value.
     *
     * @return string
     */
    public function getIntestineknc()
    {

        return $this->intestineknc;
    }

    /**
     * Get the [otherorgans] column value.
     *
     * @return int
     */
    public function getOtherorgans()
    {

        return $this->otherorgans;
    }

    /**
     * Get the [otherorganssize] column value.
     *
     * @return string
     */
    public function getOtherorganssize()
    {

        return $this->otherorganssize;
    }

    /**
     * Get the [otherorgansblot] column value.
     *
     * @return int
     */
    public function getOtherorgansblot()
    {

        return $this->otherorgansblot;
    }

    /**
     * Get the [otherorgansblc] column value.
     *
     * @return string
     */
    public function getOtherorgansblc()
    {

        return $this->otherorgansblc;
    }

    /**
     * Get the [otherorgansknots] column value.
     *
     * @return int
     */
    public function getOtherorgansknots()
    {

        return $this->otherorgansknots;
    }

    /**
     * Get the [otherorgansknc] column value.
     *
     * @return string
     */
    public function getOtherorgansknc()
    {

        return $this->otherorgansknc;
    }

    /**
     * Get the [allorgans] column value.
     *
     * @return int
     */
    public function getAllorgans()
    {

        return $this->allorgans;
    }

    /**
     * Get the [allorgansapp] column value.
     *
     * @return string
     */
    public function getAllorgansapp()
    {

        return $this->allorgansapp;
    }

    /**
     * Get the [bristeling] column value.
     *
     * @return int
     */
    public function getBristeling()
    {

        return $this->bristeling;
    }

    /**
     * Get the [mortality] column value.
     *
     * @return string
     */
    public function getMortality()
    {

        return $this->mortality;
    }

    /**
     * Get the [loss] column value.
     *
     * @return int
     */
    public function getLoss()
    {

        return $this->loss;
    }

    /**
     * Get the [skeletondeformation] column value.
     *
     * @return int
     */
    public function getSkeletondeformation()
    {

        return $this->skeletondeformation;
    }

    /**
     * Get the [spring] column value.
     *
     * @return int
     */
    public function getSpring()
    {

        return $this->spring;
    }

    /**
     * Get the [summer] column value.
     *
     * @return int
     */
    public function getSummer()
    {

        return $this->summer;
    }

    /**
     * Get the [growthrate] column value.
     *
     * @return int
     */
    public function getGrowthrate()
    {

        return $this->growthrate;
    }

    /**
     * Get the [autumn] column value.
     *
     * @return int
     */
    public function getAutumn()
    {

        return $this->autumn;
    }

    /**
     * Get the [winter] column value.
     *
     * @return int
     */
    public function getWinter()
    {

        return $this->winter;
    }

    /**
     * Get the [condition] column value.
     *
     * @return int
     */
    public function getCondition()
    {

        return $this->condition;
    }

    /**
     * Get the [aberrantactivity] column value.
     *
     * @return int
     */
    public function getAberrantactivity()
    {

        return $this->aberrantactivity;
    }

    /**
     * Get the [activity] column value.
     *
     * @return string
     */
    public function getActivity()
    {

        return $this->activity;
    }

    /**
     * Get the [aberrantbalance] column value.
     *
     * @return int
     */
    public function getAberrantbalance()
    {

        return $this->aberrantbalance;
    }

    /**
     * Get the [aberrantswmotions] column value.
     *
     * @return int
     */
    public function getAberrantswmotions()
    {

        return $this->aberrantswmotions;
    }

    /**
     * Get the [swimmingmotions] column value.
     *
     * @return string
     */
    public function getSwimmingmotions()
    {

        return $this->swimmingmotions;
    }

    /**
     * Get the [aberrantbodydirec] column value.
     *
     * @return int
     */
    public function getAberrantbodydirec()
    {

        return $this->aberrantbodydirec;
    }

    /**
     * Get the [scraping] column value.
     *
     * @return int
     */
    public function getScraping()
    {

        return $this->scraping;
    }

    /**
     * Get the [jumping] column value.
     *
     * @return int
     */
    public function getJumping()
    {

        return $this->jumping;
    }

    /**
     * Get the [aberrantfins] column value.
     *
     * @return int
     */
    public function getAberrantfins()
    {

        return $this->aberrantfins;
    }

    /**
     * Get the [fins] column value.
     *
     * @return string
     */
    public function getFins()
    {

        return $this->fins;
    }

    /**
     * Get the [aberrantlocation] column value.
     *
     * @return int
     */
    public function getAberrantlocation()
    {

        return $this->aberrantlocation;
    }

    /**
     * Get the [fishnearsurface] column value.
     *
     * @return int
     */
    public function getFishnearsurface()
    {

        return $this->fishnearsurface;
    }

    /**
     * Get the [infloworoutflow] column value.
     *
     * @return int
     */
    public function getInfloworoutflow()
    {

        return $this->infloworoutflow;
    }

    /**
     * Get the [aberrantappetite] column value.
     *
     * @return int
     */
    public function getAberrantappetite()
    {

        return $this->aberrantappetite;
    }

    /**
     * Get the [operculum] column value.
     *
     * @return int
     */
    public function getOperculum()
    {

        return $this->operculum;
    }

    /**
     * Get the [aberrantventilation] column value.
     *
     * @return int
     */
    public function getAberrantventilation()
    {

        return $this->aberrantventilation;
    }

    /**
     * Get the [fast] column value.
     *
     * @return int
     */
    public function getFast()
    {

        return $this->fast;
    }

    /**
     * Get the [slow] column value.
     *
     * @return int
     */
    public function getSlow()
    {

        return $this->slow;
    }

    /**
     * Get the [flat] column value.
     *
     * @return int
     */
    public function getFlat()
    {

        return $this->flat;
    }

    /**
     * Get the [heavy] column value.
     *
     * @return int
     */
    public function getHeavy()
    {

        return $this->heavy;
    }

    /**
     * Get the [gaspingair] column value.
     *
     * @return int
     */
    public function getGaspingair()
    {

        return $this->gaspingair;
    }

    /**
     * Get the [fishafflicted] column value.
     *
     * @return string
     */
    public function getFishafflicted()
    {

        return $this->fishafflicted;
    }

    /**
     * Get the [fishafflicted2] column value.
     *
     * @return string
     */
    public function getFishafflicted2()
    {

        return $this->fishafflicted2;
    }

    /**
     * Get the [fishafflicted3] column value.
     *
     * @return string
     */
    public function getFishafflicted3()
    {

        return $this->fishafflicted3;
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
     * Get the [fishafflict] column value.
     *
     * @return string
     */
    public function getFishafflict()
    {

        return $this->fishafflict;
    }

    /**
     * Get the [symptom] column value.
     *
     * @return string
     */
    public function getSymptom()
    {

        return $this->symptom;
    }

    /**
     * Get the [treatments] column value.
     *
     * @return string
     */
    public function getTreatments()
    {

        return $this->treatments;
    }

    /**
     * Get the [prophylaxes] column value.
     *
     * @return string
     */
    public function getProphylaxes()
    {

        return $this->prophylaxes;
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
     * Set the value of [discode] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDiscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->discode !== $v) {
            $this->discode = $v;
            $this->modifiedColumns[] = DisrefPeer::DISCODE;
        }


        return $this;
    } // setDiscode()

    /**
     * Set the value of [diseasesrefno] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDiseasesrefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->diseasesrefno !== $v) {
            $this->diseasesrefno = $v;
            $this->modifiedColumns[] = DisrefPeer::DISEASESREFNO;
        }


        return $this;
    } // setDiseasesrefno()

    /**
     * Set the value of [diseasei] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDiseasei($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diseasei !== $v) {
            $this->diseasei = $v;
            $this->modifiedColumns[] = DisrefPeer::DISEASEI;
        }


        return $this;
    } // setDiseasei()

    /**
     * Set the value of [diseaseii] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDiseaseii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diseaseii !== $v) {
            $this->diseaseii = $v;
            $this->modifiedColumns[] = DisrefPeer::DISEASEII;
        }


        return $this;
    } // setDiseaseii()

    /**
     * Set the value of [pic] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setPic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pic !== $v) {
            $this->pic = $v;
            $this->modifiedColumns[] = DisrefPeer::PIC;
        }


        return $this;
    } // setPic()

    /**
     * Set the value of [othernames] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOthernames($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othernames !== $v) {
            $this->othernames = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERNAMES;
        }


        return $this;
    } // setOthernames()

    /**
     * Set the value of [germgenus] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setGermgenus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->germgenus !== $v) {
            $this->germgenus = $v;
            $this->modifiedColumns[] = DisrefPeer::GERMGENUS;
        }


        return $this;
    } // setGermgenus()

    /**
     * Set the value of [germspecies] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setGermspecies($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->germspecies !== $v) {
            $this->germspecies = $v;
            $this->modifiedColumns[] = DisrefPeer::GERMSPECIES;
        }


        return $this;
    } // setGermspecies()

    /**
     * Set the value of [group] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setGroup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->group !== $v) {
            $this->group = $v;
            $this->modifiedColumns[] = DisrefPeer::GROUP;
        }


        return $this;
    } // setGroup()

    /**
     * Set the value of [skinfinsafflicted] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSkinfinsafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->skinfinsafflicted !== $v) {
            $this->skinfinsafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::SKINFINSAFFLICTED;
        }


        return $this;
    } // setSkinfinsafflicted()

    /**
     * Set the value of [bellyafflicted] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBellyafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bellyafflicted !== $v) {
            $this->bellyafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::BELLYAFFLICTED;
        }


        return $this;
    } // setBellyafflicted()

    /**
     * Set the value of [aberrantbehavior] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantbehavior($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantbehavior !== $v) {
            $this->aberrantbehavior = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTBEHAVIOR;
        }


        return $this;
    } // setAberrantbehavior()

    /**
     * Set the value of [gillsafflicted] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setGillsafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gillsafflicted !== $v) {
            $this->gillsafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::GILLSAFFLICTED;
        }


        return $this;
    } // setGillsafflicted()

    /**
     * Set the value of [anusafflicted] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnusafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->anusafflicted !== $v) {
            $this->anusafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::ANUSAFFLICTED;
        }


        return $this;
    } // setAnusafflicted()

    /**
     * Set the value of [otherbehavior] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherbehavior($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherbehavior !== $v) {
            $this->otherbehavior = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERBEHAVIOR;
        }


        return $this;
    } // setOtherbehavior()

    /**
     * Set the value of [eyesafflicted] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setEyesafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyesafflicted !== $v) {
            $this->eyesafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::EYESAFFLICTED;
        }


        return $this;
    } // setEyesafflicted()

    /**
     * Set the value of [visceraafflicted] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setVisceraafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->visceraafflicted !== $v) {
            $this->visceraafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::VISCERAAFFLICTED;
        }


        return $this;
    } // setVisceraafflicted()

    /**
     * Set the value of [othersymptoms] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOthersymptoms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->othersymptoms !== $v) {
            $this->othersymptoms = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERSYMPTOMS;
        }


        return $this;
    } // setOthersymptoms()

    /**
     * Set the value of [aberrantcolor] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantcolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantcolor !== $v) {
            $this->aberrantcolor = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTCOLOR;
        }


        return $this;
    } // setAberrantcolor()

    /**
     * Set the value of [aberrantcoat] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantcoat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantcoat !== $v) {
            $this->aberrantcoat = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTCOAT;
        }


        return $this;
    } // setAberrantcoat()

    /**
     * Set the value of [aberrantmuscusprod] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantmuscusprod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantmuscusprod !== $v) {
            $this->aberrantmuscusprod = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTMUSCUSPROD;
        }


        return $this;
    } // setAberrantmuscusprod()

    /**
     * Set the value of [spots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spots !== $v) {
            $this->spots = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTS;
        }


        return $this;
    } // setSpots()

    /**
     * Set the value of [spotscolor] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotscolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spotscolor !== $v) {
            $this->spotscolor = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSCOLOR;
        }


        return $this;
    } // setSpotscolor()

    /**
     * Set the value of [spotsonhead] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsonhead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsonhead !== $v) {
            $this->spotsonhead = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONHEAD;
        }


        return $this;
    } // setSpotsonhead()

    /**
     * Set the value of [dorsalspots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDorsalspots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalspots !== $v) {
            $this->dorsalspots = $v;
            $this->modifiedColumns[] = DisrefPeer::DORSALSPOTS;
        }


        return $this;
    } // setDorsalspots()

    /**
     * Set the value of [spotsondorsalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsondorsalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsondorsalfin !== $v) {
            $this->spotsondorsalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONDORSALFIN;
        }


        return $this;
    } // setSpotsondorsalfin()

    /**
     * Set the value of [spotsoncaudalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsoncaudalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsoncaudalfin !== $v) {
            $this->spotsoncaudalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONCAUDALFIN;
        }


        return $this;
    } // setSpotsoncaudalfin()

    /**
     * Set the value of [spotsontrunk] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsontrunk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsontrunk !== $v) {
            $this->spotsontrunk = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONTRUNK;
        }


        return $this;
    } // setSpotsontrunk()

    /**
     * Set the value of [ventralspots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setVentralspots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ventralspots !== $v) {
            $this->ventralspots = $v;
            $this->modifiedColumns[] = DisrefPeer::VENTRALSPOTS;
        }


        return $this;
    } // setVentralspots()

    /**
     * Set the value of [spotsonanalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsonanalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsonanalfin !== $v) {
            $this->spotsonanalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONANALFIN;
        }


        return $this;
    } // setSpotsonanalfin()

    /**
     * Set the value of [spotsonunpairedf] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsonunpairedf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsonunpairedf !== $v) {
            $this->spotsonunpairedf = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONUNPAIREDF;
        }


        return $this;
    } // setSpotsonunpairedf()

    /**
     * Set the value of [spotsontail] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpotsontail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spotsontail !== $v) {
            $this->spotsontail = $v;
            $this->modifiedColumns[] = DisrefPeer::SPOTSONTAIL;
        }


        return $this;
    } // setSpotsontail()

    /**
     * Set the value of [areas] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areas !== $v) {
            $this->areas = $v;
            $this->modifiedColumns[] = DisrefPeer::AREAS;
        }


        return $this;
    } // setAreas()

    /**
     * Set the value of [areacolori] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreacolori($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->areacolori !== $v) {
            $this->areacolori = $v;
            $this->modifiedColumns[] = DisrefPeer::AREACOLORI;
        }


        return $this;
    } // setAreacolori()

    /**
     * Set the value of [areasonhead] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreasonhead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areasonhead !== $v) {
            $this->areasonhead = $v;
            $this->modifiedColumns[] = DisrefPeer::AREASONHEAD;
        }


        return $this;
    } // setAreasonhead()

    /**
     * Set the value of [dorsalareas] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDorsalareas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalareas !== $v) {
            $this->dorsalareas = $v;
            $this->modifiedColumns[] = DisrefPeer::DORSALAREAS;
        }


        return $this;
    } // setDorsalareas()

    /**
     * Set the value of [areaondorsalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreaondorsalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areaondorsalfin !== $v) {
            $this->areaondorsalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::AREAONDORSALFIN;
        }


        return $this;
    } // setAreaondorsalfin()

    /**
     * Set the value of [areaoncaudalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreaoncaudalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areaoncaudalfin !== $v) {
            $this->areaoncaudalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::AREAONCAUDALFIN;
        }


        return $this;
    } // setAreaoncaudalfin()

    /**
     * Set the value of [areasontrunk] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreasontrunk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areasontrunk !== $v) {
            $this->areasontrunk = $v;
            $this->modifiedColumns[] = DisrefPeer::AREASONTRUNK;
        }


        return $this;
    } // setAreasontrunk()

    /**
     * Set the value of [ventralareas] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setVentralareas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ventralareas !== $v) {
            $this->ventralareas = $v;
            $this->modifiedColumns[] = DisrefPeer::VENTRALAREAS;
        }


        return $this;
    } // setVentralareas()

    /**
     * Set the value of [areaonanalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreaonanalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areaonanalfin !== $v) {
            $this->areaonanalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::AREAONANALFIN;
        }


        return $this;
    } // setAreaonanalfin()

    /**
     * Set the value of [areaonunpairedf] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreaonunpairedf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areaonunpairedf !== $v) {
            $this->areaonunpairedf = $v;
            $this->modifiedColumns[] = DisrefPeer::AREAONUNPAIREDF;
        }


        return $this;
    } // setAreaonunpairedf()

    /**
     * Set the value of [areasontail] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreasontail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areasontail !== $v) {
            $this->areasontail = $v;
            $this->modifiedColumns[] = DisrefPeer::AREASONTAIL;
        }


        return $this;
    } // setAreasontail()

    /**
     * Set the value of [boils] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoils($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boils !== $v) {
            $this->boils = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILS;
        }


        return $this;
    } // setBoils()

    /**
     * Set the value of [boilscolor] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilscolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->boilscolor !== $v) {
            $this->boilscolor = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSCOLOR;
        }


        return $this;
    } // setBoilscolor()

    /**
     * Set the value of [boilsonhead] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsonhead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsonhead !== $v) {
            $this->boilsonhead = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONHEAD;
        }


        return $this;
    } // setBoilsonhead()

    /**
     * Set the value of [dorsalboils] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDorsalboils($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalboils !== $v) {
            $this->dorsalboils = $v;
            $this->modifiedColumns[] = DisrefPeer::DORSALBOILS;
        }


        return $this;
    } // setDorsalboils()

    /**
     * Set the value of [boilsondorsalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsondorsalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsondorsalfin !== $v) {
            $this->boilsondorsalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONDORSALFIN;
        }


        return $this;
    } // setBoilsondorsalfin()

    /**
     * Set the value of [boilsoncaudalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsoncaudalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsoncaudalfin !== $v) {
            $this->boilsoncaudalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONCAUDALFIN;
        }


        return $this;
    } // setBoilsoncaudalfin()

    /**
     * Set the value of [boilsontrunk] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsontrunk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsontrunk !== $v) {
            $this->boilsontrunk = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONTRUNK;
        }


        return $this;
    } // setBoilsontrunk()

    /**
     * Set the value of [ventralboils] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setVentralboils($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ventralboils !== $v) {
            $this->ventralboils = $v;
            $this->modifiedColumns[] = DisrefPeer::VENTRALBOILS;
        }


        return $this;
    } // setVentralboils()

    /**
     * Set the value of [boilsonanalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsonanalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsonanalfin !== $v) {
            $this->boilsonanalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONANALFIN;
        }


        return $this;
    } // setBoilsonanalfin()

    /**
     * Set the value of [boilsonunpairedf] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsonunpairedf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsonunpairedf !== $v) {
            $this->boilsonunpairedf = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONUNPAIREDF;
        }


        return $this;
    } // setBoilsonunpairedf()

    /**
     * Set the value of [boilsontail] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBoilsontail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boilsontail !== $v) {
            $this->boilsontail = $v;
            $this->modifiedColumns[] = DisrefPeer::BOILSONTAIL;
        }


        return $this;
    } // setBoilsontail()

    /**
     * Set the value of [ulcer] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlcer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulcer !== $v) {
            $this->ulcer = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCER;
        }


        return $this;
    } // setUlcer()

    /**
     * Set the value of [ulcercolor] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlcercolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ulcercolor !== $v) {
            $this->ulcercolor = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERCOLOR;
        }


        return $this;
    } // setUlcercolor()

    /**
     * Set the value of [ulceronhead] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlceronhead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulceronhead !== $v) {
            $this->ulceronhead = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONHEAD;
        }


        return $this;
    } // setUlceronhead()

    /**
     * Set the value of [dorsalulcer] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDorsalulcer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalulcer !== $v) {
            $this->dorsalulcer = $v;
            $this->modifiedColumns[] = DisrefPeer::DORSALULCER;
        }


        return $this;
    } // setDorsalulcer()

    /**
     * Set the value of [ulcerondorsalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlcerondorsalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulcerondorsalfin !== $v) {
            $this->ulcerondorsalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONDORSALFIN;
        }


        return $this;
    } // setUlcerondorsalfin()

    /**
     * Set the value of [ulceroncaudalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlceroncaudalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulceroncaudalfin !== $v) {
            $this->ulceroncaudalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONCAUDALFIN;
        }


        return $this;
    } // setUlceroncaudalfin()

    /**
     * Set the value of [ulcerontrunk] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlcerontrunk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulcerontrunk !== $v) {
            $this->ulcerontrunk = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONTRUNK;
        }


        return $this;
    } // setUlcerontrunk()

    /**
     * Set the value of [ventralulcer] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setVentralulcer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ventralulcer !== $v) {
            $this->ventralulcer = $v;
            $this->modifiedColumns[] = DisrefPeer::VENTRALULCER;
        }


        return $this;
    } // setVentralulcer()

    /**
     * Set the value of [ulceronanalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlceronanalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulceronanalfin !== $v) {
            $this->ulceronanalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONANALFIN;
        }


        return $this;
    } // setUlceronanalfin()

    /**
     * Set the value of [ulceronunpairedf] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlceronunpairedf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulceronunpairedf !== $v) {
            $this->ulceronunpairedf = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONUNPAIREDF;
        }


        return $this;
    } // setUlceronunpairedf()

    /**
     * Set the value of [ulcerontail] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUlcerontail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ulcerontail !== $v) {
            $this->ulcerontail = $v;
            $this->modifiedColumns[] = DisrefPeer::ULCERONTAIL;
        }


        return $this;
    } // setUlcerontail()

    /**
     * Set the value of [attachmentsskin2] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttachmentsskin2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attachmentsskin2 !== $v) {
            $this->attachmentsskin2 = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTACHMENTSSKIN2;
        }


        return $this;
    } // setAttachmentsskin2()

    /**
     * Set the value of [attachmentonhead] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttachmentonhead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attachmentonhead !== $v) {
            $this->attachmentonhead = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTACHMENTONHEAD;
        }


        return $this;
    } // setAttachmentonhead()

    /**
     * Set the value of [dorsalattachments] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDorsalattachments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalattachments !== $v) {
            $this->dorsalattachments = $v;
            $this->modifiedColumns[] = DisrefPeer::DORSALATTACHMENTS;
        }


        return $this;
    } // setDorsalattachments()

    /**
     * Set the value of [attondorsalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttondorsalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attondorsalfin !== $v) {
            $this->attondorsalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTONDORSALFIN;
        }


        return $this;
    } // setAttondorsalfin()

    /**
     * Set the value of [attoncaudalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttoncaudalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attoncaudalfin !== $v) {
            $this->attoncaudalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTONCAUDALFIN;
        }


        return $this;
    } // setAttoncaudalfin()

    /**
     * Set the value of [attachmentontrunk] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttachmentontrunk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attachmentontrunk !== $v) {
            $this->attachmentontrunk = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTACHMENTONTRUNK;
        }


        return $this;
    } // setAttachmentontrunk()

    /**
     * Set the value of [ventralattachments] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setVentralattachments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ventralattachments !== $v) {
            $this->ventralattachments = $v;
            $this->modifiedColumns[] = DisrefPeer::VENTRALATTACHMENTS;
        }


        return $this;
    } // setVentralattachments()

    /**
     * Set the value of [attonanalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttonanalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attonanalfin !== $v) {
            $this->attonanalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTONANALFIN;
        }


        return $this;
    } // setAttonanalfin()

    /**
     * Set the value of [attonunpairedf] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttonunpairedf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attonunpairedf !== $v) {
            $this->attonunpairedf = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTONUNPAIREDF;
        }


        return $this;
    } // setAttonunpairedf()

    /**
     * Set the value of [attachmentontail] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttachmentontail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attachmentontail !== $v) {
            $this->attachmentontail = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTACHMENTONTAIL;
        }


        return $this;
    } // setAttachmentontail()

    /**
     * Set the value of [fins1] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFins1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fins1 !== $v) {
            $this->fins1 = $v;
            $this->modifiedColumns[] = DisrefPeer::FINS1;
        }


        return $this;
    } // setFins1()

    /**
     * Set the value of [dorsalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setDorsalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dorsalfin !== $v) {
            $this->dorsalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::DORSALFIN;
        }


        return $this;
    } // setDorsalfin()

    /**
     * Set the value of [caudalfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setCaudalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->caudalfin !== $v) {
            $this->caudalfin = $v;
            $this->modifiedColumns[] = DisrefPeer::CAUDALFIN;
        }


        return $this;
    } // setCaudalfin()

    /**
     * Set the value of [analfin] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnalfin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->analfin !== $v) {
            $this->analfin = $v;
            $this->modifiedColumns[] = DisrefPeer::ANALFIN;
        }


        return $this;
    } // setAnalfin()

    /**
     * Set the value of [unpairedfins] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setUnpairedfins($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unpairedfins !== $v) {
            $this->unpairedfins = $v;
            $this->modifiedColumns[] = DisrefPeer::UNPAIREDFINS;
        }


        return $this;
    } // setUnpairedfins()

    /**
     * Set the value of [aberrantcolorgills] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantcolorgills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantcolorgills !== $v) {
            $this->aberrantcolorgills = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTCOLORGILLS;
        }


        return $this;
    } // setAberrantcolorgills()

    /**
     * Set the value of [abercolorgill] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAbercolorgill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abercolorgill !== $v) {
            $this->abercolorgill = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERCOLORGILL;
        }


        return $this;
    } // setAbercolorgill()

    /**
     * Set the value of [eyecolor] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setEyecolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eyecolor !== $v) {
            $this->eyecolor = $v;
            $this->modifiedColumns[] = DisrefPeer::EYECOLOR;
        }


        return $this;
    } // setEyecolor()

    /**
     * Set the value of [aberrantspotsgill] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantspotsgill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantspotsgill !== $v) {
            $this->aberrantspotsgill = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTSPOTSGILL;
        }


        return $this;
    } // setAberrantspotsgill()

    /**
     * Set the value of [aberrantspotscolor] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantspotscolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aberrantspotscolor !== $v) {
            $this->aberrantspotscolor = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTSPOTSCOLOR;
        }


        return $this;
    } // setAberrantspotscolor()

    /**
     * Set the value of [eyespots] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setEyespots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eyespots !== $v) {
            $this->eyespots = $v;
            $this->modifiedColumns[] = DisrefPeer::EYESPOTS;
        }


        return $this;
    } // setEyespots()

    /**
     * Set the value of [knotsongills] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKnotsongills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->knotsongills !== $v) {
            $this->knotsongills = $v;
            $this->modifiedColumns[] = DisrefPeer::KNOTSONGILLS;
        }


        return $this;
    } // setKnotsongills()

    /**
     * Set the value of [knotscolor] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKnotscolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->knotscolor !== $v) {
            $this->knotscolor = $v;
            $this->modifiedColumns[] = DisrefPeer::KNOTSCOLOR;
        }


        return $this;
    } // setKnotscolor()

    /**
     * Set the value of [eyescondition] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setEyescondition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->eyescondition !== $v) {
            $this->eyescondition = $v;
            $this->modifiedColumns[] = DisrefPeer::EYESCONDITION;
        }


        return $this;
    } // setEyescondition()

    /**
     * Set the value of [areasongills] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreasongills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->areasongills !== $v) {
            $this->areasongills = $v;
            $this->modifiedColumns[] = DisrefPeer::AREASONGILLS;
        }


        return $this;
    } // setAreasongills()

    /**
     * Set the value of [areascolor] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAreascolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->areascolor !== $v) {
            $this->areascolor = $v;
            $this->modifiedColumns[] = DisrefPeer::AREASCOLOR;
        }


        return $this;
    } // setAreascolor()

    /**
     * Set the value of [mucusprodgills] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setMucusprodgills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mucusprodgills !== $v) {
            $this->mucusprodgills = $v;
            $this->modifiedColumns[] = DisrefPeer::MUCUSPRODGILLS;
        }


        return $this;
    } // setMucusprodgills()

    /**
     * Set the value of [conditiongills] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setConditiongills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->conditiongills !== $v) {
            $this->conditiongills = $v;
            $this->modifiedColumns[] = DisrefPeer::CONDITIONGILLS;
        }


        return $this;
    } // setConditiongills()

    /**
     * Set the value of [objectgills] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setObjectgills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->objectgills !== $v) {
            $this->objectgills = $v;
            $this->modifiedColumns[] = DisrefPeer::OBJECTGILLS;
        }


        return $this;
    } // setObjectgills()

    /**
     * Set the value of [attachmentgills] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAttachmentgills($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attachmentgills !== $v) {
            $this->attachmentgills = $v;
            $this->modifiedColumns[] = DisrefPeer::ATTACHMENTGILLS;
        }


        return $this;
    } // setAttachmentgills()

    /**
     * Set the value of [bellycondition] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBellycondition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bellycondition !== $v) {
            $this->bellycondition = $v;
            $this->modifiedColumns[] = DisrefPeer::BELLYCONDITION;
        }


        return $this;
    } // setBellycondition()

    /**
     * Set the value of [anuscondition] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnuscondition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->anuscondition !== $v) {
            $this->anuscondition = $v;
            $this->modifiedColumns[] = DisrefPeer::ANUSCONDITION;
        }


        return $this;
    } // setAnuscondition()

    /**
     * Set the value of [bellylumen] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBellylumen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bellylumen !== $v) {
            $this->bellylumen = $v;
            $this->modifiedColumns[] = DisrefPeer::BELLYLUMEN;
        }


        return $this;
    } // setBellylumen()

    /**
     * Set the value of [anuscolor] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnuscolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->anuscolor !== $v) {
            $this->anuscolor = $v;
            $this->modifiedColumns[] = DisrefPeer::ANUSCOLOR;
        }


        return $this;
    } // setAnuscolor()

    /**
     * Set the value of [bellyworms] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBellyworms($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bellyworms !== $v) {
            $this->bellyworms = $v;
            $this->modifiedColumns[] = DisrefPeer::BELLYWORMS;
        }


        return $this;
    } // setBellyworms()

    /**
     * Set the value of [anusobject] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnusobject($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->anusobject !== $v) {
            $this->anusobject = $v;
            $this->modifiedColumns[] = DisrefPeer::ANUSOBJECT;
        }


        return $this;
    } // setAnusobject()

    /**
     * Set the value of [anusattachments] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnusattachments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->anusattachments !== $v) {
            $this->anusattachments = $v;
            $this->modifiedColumns[] = DisrefPeer::ANUSATTACHMENTS;
        }


        return $this;
    } // setAnusattachments()

    /**
     * Set the value of [anusexudates] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAnusexudates($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->anusexudates !== $v) {
            $this->anusexudates = $v;
            $this->modifiedColumns[] = DisrefPeer::ANUSEXUDATES;
        }


        return $this;
    } // setAnusexudates()

    /**
     * Set the value of [liveraffl] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiveraffl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->liveraffl !== $v) {
            $this->liveraffl = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERAFFL;
        }


        return $this;
    } // setLiveraffl()

    /**
     * Set the value of [liversize] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiversize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liversize !== $v) {
            $this->liversize = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERSIZE;
        }


        return $this;
    } // setLiversize()

    /**
     * Set the value of [liverapp] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiverapp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liverapp !== $v) {
            $this->liverapp = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERAPP;
        }


        return $this;
    } // setLiverapp()

    /**
     * Set the value of [liverblot] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiverblot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->liverblot !== $v) {
            $this->liverblot = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERBLOT;
        }


        return $this;
    } // setLiverblot()

    /**
     * Set the value of [liverblc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiverblc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liverblc !== $v) {
            $this->liverblc = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERBLC;
        }


        return $this;
    } // setLiverblc()

    /**
     * Set the value of [liverknots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiverknots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->liverknots !== $v) {
            $this->liverknots = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERKNOTS;
        }


        return $this;
    } // setLiverknots()

    /**
     * Set the value of [liverknc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLiverknc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->liverknc !== $v) {
            $this->liverknc = $v;
            $this->modifiedColumns[] = DisrefPeer::LIVERKNC;
        }


        return $this;
    } // setLiverknc()

    /**
     * Set the value of [spleenaffl] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleenaffl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spleenaffl !== $v) {
            $this->spleenaffl = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENAFFL;
        }


        return $this;
    } // setSpleenaffl()

    /**
     * Set the value of [spleensize] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleensize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spleensize !== $v) {
            $this->spleensize = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENSIZE;
        }


        return $this;
    } // setSpleensize()

    /**
     * Set the value of [spleenapp] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleenapp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spleenapp !== $v) {
            $this->spleenapp = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENAPP;
        }


        return $this;
    } // setSpleenapp()

    /**
     * Set the value of [spleenblot] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleenblot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spleenblot !== $v) {
            $this->spleenblot = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENBLOT;
        }


        return $this;
    } // setSpleenblot()

    /**
     * Set the value of [spleenblc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleenblc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spleenblc !== $v) {
            $this->spleenblc = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENBLC;
        }


        return $this;
    } // setSpleenblc()

    /**
     * Set the value of [spleenknots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleenknots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spleenknots !== $v) {
            $this->spleenknots = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENKNOTS;
        }


        return $this;
    } // setSpleenknots()

    /**
     * Set the value of [spleenknc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpleenknc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spleenknc !== $v) {
            $this->spleenknc = $v;
            $this->modifiedColumns[] = DisrefPeer::SPLEENKNC;
        }


        return $this;
    } // setSpleenknc()

    /**
     * Set the value of [kidneyaffl] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneyaffl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kidneyaffl !== $v) {
            $this->kidneyaffl = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYAFFL;
        }


        return $this;
    } // setKidneyaffl()

    /**
     * Set the value of [kidneysize] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneysize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kidneysize !== $v) {
            $this->kidneysize = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYSIZE;
        }


        return $this;
    } // setKidneysize()

    /**
     * Set the value of [kidneyapp] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneyapp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kidneyapp !== $v) {
            $this->kidneyapp = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYAPP;
        }


        return $this;
    } // setKidneyapp()

    /**
     * Set the value of [kidneyblot] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneyblot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kidneyblot !== $v) {
            $this->kidneyblot = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYBLOT;
        }


        return $this;
    } // setKidneyblot()

    /**
     * Set the value of [kidneyblc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneyblc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kidneyblc !== $v) {
            $this->kidneyblc = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYBLC;
        }


        return $this;
    } // setKidneyblc()

    /**
     * Set the value of [kidneyknots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneyknots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kidneyknots !== $v) {
            $this->kidneyknots = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYKNOTS;
        }


        return $this;
    } // setKidneyknots()

    /**
     * Set the value of [kidneyknc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setKidneyknc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kidneyknc !== $v) {
            $this->kidneyknc = $v;
            $this->modifiedColumns[] = DisrefPeer::KIDNEYKNC;
        }


        return $this;
    } // setKidneyknc()

    /**
     * Set the value of [swimbladderaffl] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladderaffl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->swimbladderaffl !== $v) {
            $this->swimbladderaffl = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERAFFL;
        }


        return $this;
    } // setSwimbladderaffl()

    /**
     * Set the value of [swimbladdersize] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladdersize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swimbladdersize !== $v) {
            $this->swimbladdersize = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERSIZE;
        }


        return $this;
    } // setSwimbladdersize()

    /**
     * Set the value of [swimbladderapp] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladderapp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swimbladderapp !== $v) {
            $this->swimbladderapp = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERAPP;
        }


        return $this;
    } // setSwimbladderapp()

    /**
     * Set the value of [swimbladderblot] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladderblot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->swimbladderblot !== $v) {
            $this->swimbladderblot = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERBLOT;
        }


        return $this;
    } // setSwimbladderblot()

    /**
     * Set the value of [swimbladderblc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladderblc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swimbladderblc !== $v) {
            $this->swimbladderblc = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERBLC;
        }


        return $this;
    } // setSwimbladderblc()

    /**
     * Set the value of [swimbladderknots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladderknots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->swimbladderknots !== $v) {
            $this->swimbladderknots = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERKNOTS;
        }


        return $this;
    } // setSwimbladderknots()

    /**
     * Set the value of [swimbladderknc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimbladderknc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swimbladderknc !== $v) {
            $this->swimbladderknc = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMBLADDERKNC;
        }


        return $this;
    } // setSwimbladderknc()

    /**
     * Set the value of [intestineaffl] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestineaffl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intestineaffl !== $v) {
            $this->intestineaffl = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINEAFFL;
        }


        return $this;
    } // setIntestineaffl()

    /**
     * Set the value of [intestinesize] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestinesize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intestinesize !== $v) {
            $this->intestinesize = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINESIZE;
        }


        return $this;
    } // setIntestinesize()

    /**
     * Set the value of [intestineapp] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestineapp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intestineapp !== $v) {
            $this->intestineapp = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINEAPP;
        }


        return $this;
    } // setIntestineapp()

    /**
     * Set the value of [intestineblot] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestineblot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intestineblot !== $v) {
            $this->intestineblot = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINEBLOT;
        }


        return $this;
    } // setIntestineblot()

    /**
     * Set the value of [intestineblc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestineblc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intestineblc !== $v) {
            $this->intestineblc = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINEBLC;
        }


        return $this;
    } // setIntestineblc()

    /**
     * Set the value of [intestineknots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestineknots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intestineknots !== $v) {
            $this->intestineknots = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINEKNOTS;
        }


        return $this;
    } // setIntestineknots()

    /**
     * Set the value of [intestineknc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setIntestineknc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intestineknc !== $v) {
            $this->intestineknc = $v;
            $this->modifiedColumns[] = DisrefPeer::INTESTINEKNC;
        }


        return $this;
    } // setIntestineknc()

    /**
     * Set the value of [otherorgans] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherorgans($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherorgans !== $v) {
            $this->otherorgans = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERORGANS;
        }


        return $this;
    } // setOtherorgans()

    /**
     * Set the value of [otherorganssize] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherorganssize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherorganssize !== $v) {
            $this->otherorganssize = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERORGANSSIZE;
        }


        return $this;
    } // setOtherorganssize()

    /**
     * Set the value of [otherorgansblot] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherorgansblot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherorgansblot !== $v) {
            $this->otherorgansblot = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERORGANSBLOT;
        }


        return $this;
    } // setOtherorgansblot()

    /**
     * Set the value of [otherorgansblc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherorgansblc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherorgansblc !== $v) {
            $this->otherorgansblc = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERORGANSBLC;
        }


        return $this;
    } // setOtherorgansblc()

    /**
     * Set the value of [otherorgansknots] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherorgansknots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherorgansknots !== $v) {
            $this->otherorgansknots = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERORGANSKNOTS;
        }


        return $this;
    } // setOtherorgansknots()

    /**
     * Set the value of [otherorgansknc] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOtherorgansknc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->otherorgansknc !== $v) {
            $this->otherorgansknc = $v;
            $this->modifiedColumns[] = DisrefPeer::OTHERORGANSKNC;
        }


        return $this;
    } // setOtherorgansknc()

    /**
     * Set the value of [allorgans] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAllorgans($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->allorgans !== $v) {
            $this->allorgans = $v;
            $this->modifiedColumns[] = DisrefPeer::ALLORGANS;
        }


        return $this;
    } // setAllorgans()

    /**
     * Set the value of [allorgansapp] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAllorgansapp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->allorgansapp !== $v) {
            $this->allorgansapp = $v;
            $this->modifiedColumns[] = DisrefPeer::ALLORGANSAPP;
        }


        return $this;
    } // setAllorgansapp()

    /**
     * Set the value of [bristeling] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setBristeling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bristeling !== $v) {
            $this->bristeling = $v;
            $this->modifiedColumns[] = DisrefPeer::BRISTELING;
        }


        return $this;
    } // setBristeling()

    /**
     * Set the value of [mortality] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setMortality($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mortality !== $v) {
            $this->mortality = $v;
            $this->modifiedColumns[] = DisrefPeer::MORTALITY;
        }


        return $this;
    } // setMortality()

    /**
     * Set the value of [loss] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setLoss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->loss !== $v) {
            $this->loss = $v;
            $this->modifiedColumns[] = DisrefPeer::LOSS;
        }


        return $this;
    } // setLoss()

    /**
     * Set the value of [skeletondeformation] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSkeletondeformation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->skeletondeformation !== $v) {
            $this->skeletondeformation = $v;
            $this->modifiedColumns[] = DisrefPeer::SKELETONDEFORMATION;
        }


        return $this;
    } // setSkeletondeformation()

    /**
     * Set the value of [spring] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSpring($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spring !== $v) {
            $this->spring = $v;
            $this->modifiedColumns[] = DisrefPeer::SPRING;
        }


        return $this;
    } // setSpring()

    /**
     * Set the value of [summer] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->summer !== $v) {
            $this->summer = $v;
            $this->modifiedColumns[] = DisrefPeer::SUMMER;
        }


        return $this;
    } // setSummer()

    /**
     * Set the value of [growthrate] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setGrowthrate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->growthrate !== $v) {
            $this->growthrate = $v;
            $this->modifiedColumns[] = DisrefPeer::GROWTHRATE;
        }


        return $this;
    } // setGrowthrate()

    /**
     * Set the value of [autumn] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAutumn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autumn !== $v) {
            $this->autumn = $v;
            $this->modifiedColumns[] = DisrefPeer::AUTUMN;
        }


        return $this;
    } // setAutumn()

    /**
     * Set the value of [winter] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setWinter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->winter !== $v) {
            $this->winter = $v;
            $this->modifiedColumns[] = DisrefPeer::WINTER;
        }


        return $this;
    } // setWinter()

    /**
     * Set the value of [condition] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setCondition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->condition !== $v) {
            $this->condition = $v;
            $this->modifiedColumns[] = DisrefPeer::CONDITION;
        }


        return $this;
    } // setCondition()

    /**
     * Set the value of [aberrantactivity] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantactivity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantactivity !== $v) {
            $this->aberrantactivity = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTACTIVITY;
        }


        return $this;
    } // setAberrantactivity()

    /**
     * Set the value of [activity] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setActivity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activity !== $v) {
            $this->activity = $v;
            $this->modifiedColumns[] = DisrefPeer::ACTIVITY;
        }


        return $this;
    } // setActivity()

    /**
     * Set the value of [aberrantbalance] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantbalance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantbalance !== $v) {
            $this->aberrantbalance = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTBALANCE;
        }


        return $this;
    } // setAberrantbalance()

    /**
     * Set the value of [aberrantswmotions] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantswmotions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantswmotions !== $v) {
            $this->aberrantswmotions = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTSWMOTIONS;
        }


        return $this;
    } // setAberrantswmotions()

    /**
     * Set the value of [swimmingmotions] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSwimmingmotions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->swimmingmotions !== $v) {
            $this->swimmingmotions = $v;
            $this->modifiedColumns[] = DisrefPeer::SWIMMINGMOTIONS;
        }


        return $this;
    } // setSwimmingmotions()

    /**
     * Set the value of [aberrantbodydirec] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantbodydirec($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantbodydirec !== $v) {
            $this->aberrantbodydirec = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTBODYDIREC;
        }


        return $this;
    } // setAberrantbodydirec()

    /**
     * Set the value of [scraping] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setScraping($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->scraping !== $v) {
            $this->scraping = $v;
            $this->modifiedColumns[] = DisrefPeer::SCRAPING;
        }


        return $this;
    } // setScraping()

    /**
     * Set the value of [jumping] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setJumping($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->jumping !== $v) {
            $this->jumping = $v;
            $this->modifiedColumns[] = DisrefPeer::JUMPING;
        }


        return $this;
    } // setJumping()

    /**
     * Set the value of [aberrantfins] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantfins($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantfins !== $v) {
            $this->aberrantfins = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTFINS;
        }


        return $this;
    } // setAberrantfins()

    /**
     * Set the value of [fins] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFins($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fins !== $v) {
            $this->fins = $v;
            $this->modifiedColumns[] = DisrefPeer::FINS;
        }


        return $this;
    } // setFins()

    /**
     * Set the value of [aberrantlocation] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantlocation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantlocation !== $v) {
            $this->aberrantlocation = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTLOCATION;
        }


        return $this;
    } // setAberrantlocation()

    /**
     * Set the value of [fishnearsurface] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFishnearsurface($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fishnearsurface !== $v) {
            $this->fishnearsurface = $v;
            $this->modifiedColumns[] = DisrefPeer::FISHNEARSURFACE;
        }


        return $this;
    } // setFishnearsurface()

    /**
     * Set the value of [infloworoutflow] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setInfloworoutflow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->infloworoutflow !== $v) {
            $this->infloworoutflow = $v;
            $this->modifiedColumns[] = DisrefPeer::INFLOWOROUTFLOW;
        }


        return $this;
    } // setInfloworoutflow()

    /**
     * Set the value of [aberrantappetite] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantappetite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantappetite !== $v) {
            $this->aberrantappetite = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTAPPETITE;
        }


        return $this;
    } // setAberrantappetite()

    /**
     * Set the value of [operculum] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setOperculum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->operculum !== $v) {
            $this->operculum = $v;
            $this->modifiedColumns[] = DisrefPeer::OPERCULUM;
        }


        return $this;
    } // setOperculum()

    /**
     * Set the value of [aberrantventilation] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAberrantventilation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aberrantventilation !== $v) {
            $this->aberrantventilation = $v;
            $this->modifiedColumns[] = DisrefPeer::ABERRANTVENTILATION;
        }


        return $this;
    } // setAberrantventilation()

    /**
     * Set the value of [fast] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFast($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fast !== $v) {
            $this->fast = $v;
            $this->modifiedColumns[] = DisrefPeer::FAST;
        }


        return $this;
    } // setFast()

    /**
     * Set the value of [slow] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSlow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->slow !== $v) {
            $this->slow = $v;
            $this->modifiedColumns[] = DisrefPeer::SLOW;
        }


        return $this;
    } // setSlow()

    /**
     * Set the value of [flat] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFlat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flat !== $v) {
            $this->flat = $v;
            $this->modifiedColumns[] = DisrefPeer::FLAT;
        }


        return $this;
    } // setFlat()

    /**
     * Set the value of [heavy] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setHeavy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->heavy !== $v) {
            $this->heavy = $v;
            $this->modifiedColumns[] = DisrefPeer::HEAVY;
        }


        return $this;
    } // setHeavy()

    /**
     * Set the value of [gaspingair] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setGaspingair($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gaspingair !== $v) {
            $this->gaspingair = $v;
            $this->modifiedColumns[] = DisrefPeer::GASPINGAIR;
        }


        return $this;
    } // setGaspingair()

    /**
     * Set the value of [fishafflicted] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFishafflicted($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishafflicted !== $v) {
            $this->fishafflicted = $v;
            $this->modifiedColumns[] = DisrefPeer::FISHAFFLICTED;
        }


        return $this;
    } // setFishafflicted()

    /**
     * Set the value of [fishafflicted2] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFishafflicted2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishafflicted2 !== $v) {
            $this->fishafflicted2 = $v;
            $this->modifiedColumns[] = DisrefPeer::FISHAFFLICTED2;
        }


        return $this;
    } // setFishafflicted2()

    /**
     * Set the value of [fishafflicted3] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFishafflicted3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishafflicted3 !== $v) {
            $this->fishafflicted3 = $v;
            $this->modifiedColumns[] = DisrefPeer::FISHAFFLICTED3;
        }


        return $this;
    } // setFishafflicted3()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = DisrefPeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Disref The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = DisrefPeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = DisrefPeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Disref The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = DisrefPeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = DisrefPeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Disref The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = DisrefPeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Set the value of [fishafflict] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setFishafflict($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fishafflict !== $v) {
            $this->fishafflict = $v;
            $this->modifiedColumns[] = DisrefPeer::FISHAFFLICT;
        }


        return $this;
    } // setFishafflict()

    /**
     * Set the value of [symptom] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setSymptom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->symptom !== $v) {
            $this->symptom = $v;
            $this->modifiedColumns[] = DisrefPeer::SYMPTOM;
        }


        return $this;
    } // setSymptom()

    /**
     * Set the value of [treatments] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setTreatments($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->treatments !== $v) {
            $this->treatments = $v;
            $this->modifiedColumns[] = DisrefPeer::TREATMENTS;
        }


        return $this;
    } // setTreatments()

    /**
     * Set the value of [prophylaxes] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setProphylaxes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prophylaxes !== $v) {
            $this->prophylaxes = $v;
            $this->modifiedColumns[] = DisrefPeer::PROPHYLAXES;
        }


        return $this;
    } // setProphylaxes()

    /**
     * Set the value of [addrems] column.
     *
     * @param  string $v new value
     * @return Disref The current object (for fluent API support)
     */
    public function setAddrems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addrems !== $v) {
            $this->addrems = $v;
            $this->modifiedColumns[] = DisrefPeer::ADDREMS;
        }


        return $this;
    } // setAddrems()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Disref The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = DisrefPeer::TS;
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

            $this->discode = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->diseasesrefno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->diseasei = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->diseaseii = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pic = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->othernames = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->germgenus = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->germspecies = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->group = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->skinfinsafflicted = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->bellyafflicted = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->aberrantbehavior = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->gillsafflicted = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->anusafflicted = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->otherbehavior = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->eyesafflicted = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->visceraafflicted = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->othersymptoms = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->aberrantcolor = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->aberrantcoat = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->aberrantmuscusprod = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->spots = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->spotscolor = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->spotsonhead = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->dorsalspots = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->spotsondorsalfin = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->spotsoncaudalfin = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->spotsontrunk = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->ventralspots = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->spotsonanalfin = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->spotsonunpairedf = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->spotsontail = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->areas = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->areacolori = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->areasonhead = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->dorsalareas = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->areaondorsalfin = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->areaoncaudalfin = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->areasontrunk = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->ventralareas = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->areaonanalfin = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->areaonunpairedf = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->areasontail = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->boils = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->boilscolor = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->boilsonhead = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->dorsalboils = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->boilsondorsalfin = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->boilsoncaudalfin = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->boilsontrunk = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->ventralboils = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->boilsonanalfin = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->boilsonunpairedf = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->boilsontail = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->ulcer = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->ulcercolor = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->ulceronhead = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->dorsalulcer = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->ulcerondorsalfin = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->ulceroncaudalfin = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->ulcerontrunk = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->ventralulcer = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->ulceronanalfin = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->ulceronunpairedf = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->ulcerontail = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->attachmentsskin2 = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->attachmentonhead = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->dorsalattachments = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->attondorsalfin = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->attoncaudalfin = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->attachmentontrunk = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->ventralattachments = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->attonanalfin = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->attonunpairedf = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->attachmentontail = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->fins1 = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->dorsalfin = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->caudalfin = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->analfin = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->unpairedfins = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->aberrantcolorgills = ($row[$startcol + 80] !== null) ? (int) $row[$startcol + 80] : null;
            $this->abercolorgill = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->eyecolor = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->aberrantspotsgill = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->aberrantspotscolor = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->eyespots = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->knotsongills = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->knotscolor = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->eyescondition = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->areasongills = ($row[$startcol + 89] !== null) ? (int) $row[$startcol + 89] : null;
            $this->areascolor = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->mucusprodgills = ($row[$startcol + 91] !== null) ? (int) $row[$startcol + 91] : null;
            $this->conditiongills = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
            $this->objectgills = ($row[$startcol + 93] !== null) ? (int) $row[$startcol + 93] : null;
            $this->attachmentgills = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->bellycondition = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->anuscondition = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->bellylumen = ($row[$startcol + 97] !== null) ? (int) $row[$startcol + 97] : null;
            $this->anuscolor = ($row[$startcol + 98] !== null) ? (int) $row[$startcol + 98] : null;
            $this->bellyworms = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->anusobject = ($row[$startcol + 100] !== null) ? (int) $row[$startcol + 100] : null;
            $this->anusattachments = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->anusexudates = ($row[$startcol + 102] !== null) ? (int) $row[$startcol + 102] : null;
            $this->liveraffl = ($row[$startcol + 103] !== null) ? (int) $row[$startcol + 103] : null;
            $this->liversize = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->liverapp = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
            $this->liverblot = ($row[$startcol + 106] !== null) ? (int) $row[$startcol + 106] : null;
            $this->liverblc = ($row[$startcol + 107] !== null) ? (string) $row[$startcol + 107] : null;
            $this->liverknots = ($row[$startcol + 108] !== null) ? (int) $row[$startcol + 108] : null;
            $this->liverknc = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->spleenaffl = ($row[$startcol + 110] !== null) ? (int) $row[$startcol + 110] : null;
            $this->spleensize = ($row[$startcol + 111] !== null) ? (string) $row[$startcol + 111] : null;
            $this->spleenapp = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->spleenblot = ($row[$startcol + 113] !== null) ? (int) $row[$startcol + 113] : null;
            $this->spleenblc = ($row[$startcol + 114] !== null) ? (string) $row[$startcol + 114] : null;
            $this->spleenknots = ($row[$startcol + 115] !== null) ? (int) $row[$startcol + 115] : null;
            $this->spleenknc = ($row[$startcol + 116] !== null) ? (string) $row[$startcol + 116] : null;
            $this->kidneyaffl = ($row[$startcol + 117] !== null) ? (int) $row[$startcol + 117] : null;
            $this->kidneysize = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->kidneyapp = ($row[$startcol + 119] !== null) ? (string) $row[$startcol + 119] : null;
            $this->kidneyblot = ($row[$startcol + 120] !== null) ? (int) $row[$startcol + 120] : null;
            $this->kidneyblc = ($row[$startcol + 121] !== null) ? (string) $row[$startcol + 121] : null;
            $this->kidneyknots = ($row[$startcol + 122] !== null) ? (int) $row[$startcol + 122] : null;
            $this->kidneyknc = ($row[$startcol + 123] !== null) ? (string) $row[$startcol + 123] : null;
            $this->swimbladderaffl = ($row[$startcol + 124] !== null) ? (int) $row[$startcol + 124] : null;
            $this->swimbladdersize = ($row[$startcol + 125] !== null) ? (string) $row[$startcol + 125] : null;
            $this->swimbladderapp = ($row[$startcol + 126] !== null) ? (string) $row[$startcol + 126] : null;
            $this->swimbladderblot = ($row[$startcol + 127] !== null) ? (int) $row[$startcol + 127] : null;
            $this->swimbladderblc = ($row[$startcol + 128] !== null) ? (string) $row[$startcol + 128] : null;
            $this->swimbladderknots = ($row[$startcol + 129] !== null) ? (int) $row[$startcol + 129] : null;
            $this->swimbladderknc = ($row[$startcol + 130] !== null) ? (string) $row[$startcol + 130] : null;
            $this->intestineaffl = ($row[$startcol + 131] !== null) ? (int) $row[$startcol + 131] : null;
            $this->intestinesize = ($row[$startcol + 132] !== null) ? (string) $row[$startcol + 132] : null;
            $this->intestineapp = ($row[$startcol + 133] !== null) ? (string) $row[$startcol + 133] : null;
            $this->intestineblot = ($row[$startcol + 134] !== null) ? (int) $row[$startcol + 134] : null;
            $this->intestineblc = ($row[$startcol + 135] !== null) ? (string) $row[$startcol + 135] : null;
            $this->intestineknots = ($row[$startcol + 136] !== null) ? (int) $row[$startcol + 136] : null;
            $this->intestineknc = ($row[$startcol + 137] !== null) ? (string) $row[$startcol + 137] : null;
            $this->otherorgans = ($row[$startcol + 138] !== null) ? (int) $row[$startcol + 138] : null;
            $this->otherorganssize = ($row[$startcol + 139] !== null) ? (string) $row[$startcol + 139] : null;
            $this->otherorgansblot = ($row[$startcol + 140] !== null) ? (int) $row[$startcol + 140] : null;
            $this->otherorgansblc = ($row[$startcol + 141] !== null) ? (string) $row[$startcol + 141] : null;
            $this->otherorgansknots = ($row[$startcol + 142] !== null) ? (int) $row[$startcol + 142] : null;
            $this->otherorgansknc = ($row[$startcol + 143] !== null) ? (string) $row[$startcol + 143] : null;
            $this->allorgans = ($row[$startcol + 144] !== null) ? (int) $row[$startcol + 144] : null;
            $this->allorgansapp = ($row[$startcol + 145] !== null) ? (string) $row[$startcol + 145] : null;
            $this->bristeling = ($row[$startcol + 146] !== null) ? (int) $row[$startcol + 146] : null;
            $this->mortality = ($row[$startcol + 147] !== null) ? (string) $row[$startcol + 147] : null;
            $this->loss = ($row[$startcol + 148] !== null) ? (int) $row[$startcol + 148] : null;
            $this->skeletondeformation = ($row[$startcol + 149] !== null) ? (int) $row[$startcol + 149] : null;
            $this->spring = ($row[$startcol + 150] !== null) ? (int) $row[$startcol + 150] : null;
            $this->summer = ($row[$startcol + 151] !== null) ? (int) $row[$startcol + 151] : null;
            $this->growthrate = ($row[$startcol + 152] !== null) ? (int) $row[$startcol + 152] : null;
            $this->autumn = ($row[$startcol + 153] !== null) ? (int) $row[$startcol + 153] : null;
            $this->winter = ($row[$startcol + 154] !== null) ? (int) $row[$startcol + 154] : null;
            $this->condition = ($row[$startcol + 155] !== null) ? (int) $row[$startcol + 155] : null;
            $this->aberrantactivity = ($row[$startcol + 156] !== null) ? (int) $row[$startcol + 156] : null;
            $this->activity = ($row[$startcol + 157] !== null) ? (string) $row[$startcol + 157] : null;
            $this->aberrantbalance = ($row[$startcol + 158] !== null) ? (int) $row[$startcol + 158] : null;
            $this->aberrantswmotions = ($row[$startcol + 159] !== null) ? (int) $row[$startcol + 159] : null;
            $this->swimmingmotions = ($row[$startcol + 160] !== null) ? (string) $row[$startcol + 160] : null;
            $this->aberrantbodydirec = ($row[$startcol + 161] !== null) ? (int) $row[$startcol + 161] : null;
            $this->scraping = ($row[$startcol + 162] !== null) ? (int) $row[$startcol + 162] : null;
            $this->jumping = ($row[$startcol + 163] !== null) ? (int) $row[$startcol + 163] : null;
            $this->aberrantfins = ($row[$startcol + 164] !== null) ? (int) $row[$startcol + 164] : null;
            $this->fins = ($row[$startcol + 165] !== null) ? (string) $row[$startcol + 165] : null;
            $this->aberrantlocation = ($row[$startcol + 166] !== null) ? (int) $row[$startcol + 166] : null;
            $this->fishnearsurface = ($row[$startcol + 167] !== null) ? (int) $row[$startcol + 167] : null;
            $this->infloworoutflow = ($row[$startcol + 168] !== null) ? (int) $row[$startcol + 168] : null;
            $this->aberrantappetite = ($row[$startcol + 169] !== null) ? (int) $row[$startcol + 169] : null;
            $this->operculum = ($row[$startcol + 170] !== null) ? (int) $row[$startcol + 170] : null;
            $this->aberrantventilation = ($row[$startcol + 171] !== null) ? (int) $row[$startcol + 171] : null;
            $this->fast = ($row[$startcol + 172] !== null) ? (int) $row[$startcol + 172] : null;
            $this->slow = ($row[$startcol + 173] !== null) ? (int) $row[$startcol + 173] : null;
            $this->flat = ($row[$startcol + 174] !== null) ? (int) $row[$startcol + 174] : null;
            $this->heavy = ($row[$startcol + 175] !== null) ? (int) $row[$startcol + 175] : null;
            $this->gaspingair = ($row[$startcol + 176] !== null) ? (int) $row[$startcol + 176] : null;
            $this->fishafflicted = ($row[$startcol + 177] !== null) ? (string) $row[$startcol + 177] : null;
            $this->fishafflicted2 = ($row[$startcol + 178] !== null) ? (string) $row[$startcol + 178] : null;
            $this->fishafflicted3 = ($row[$startcol + 179] !== null) ? (string) $row[$startcol + 179] : null;
            $this->entered = ($row[$startcol + 180] !== null) ? (int) $row[$startcol + 180] : null;
            $this->dateentered = ($row[$startcol + 181] !== null) ? (string) $row[$startcol + 181] : null;
            $this->modified = ($row[$startcol + 182] !== null) ? (int) $row[$startcol + 182] : null;
            $this->datemodified = ($row[$startcol + 183] !== null) ? (string) $row[$startcol + 183] : null;
            $this->expert = ($row[$startcol + 184] !== null) ? (int) $row[$startcol + 184] : null;
            $this->datechecked = ($row[$startcol + 185] !== null) ? (string) $row[$startcol + 185] : null;
            $this->fishafflict = ($row[$startcol + 186] !== null) ? (string) $row[$startcol + 186] : null;
            $this->symptom = ($row[$startcol + 187] !== null) ? (string) $row[$startcol + 187] : null;
            $this->treatments = ($row[$startcol + 188] !== null) ? (string) $row[$startcol + 188] : null;
            $this->prophylaxes = ($row[$startcol + 189] !== null) ? (string) $row[$startcol + 189] : null;
            $this->addrems = ($row[$startcol + 190] !== null) ? (string) $row[$startcol + 190] : null;
            $this->ts = ($row[$startcol + 191] !== null) ? (string) $row[$startcol + 191] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 192; // 192 = DisrefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Disref object", $e);
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
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DisrefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DisrefQuery::create()
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
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DisrefPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(DisrefPeer::DISCODE)) {
            $modifiedColumns[':p' . $index++]  = '`DisCode`';
        }
        if ($this->isColumnModified(DisrefPeer::DISEASESREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`DiseasesRefNo`';
        }
        if ($this->isColumnModified(DisrefPeer::DISEASEI)) {
            $modifiedColumns[':p' . $index++]  = '`DiseaseI`';
        }
        if ($this->isColumnModified(DisrefPeer::DISEASEII)) {
            $modifiedColumns[':p' . $index++]  = '`DiseaseII`';
        }
        if ($this->isColumnModified(DisrefPeer::PIC)) {
            $modifiedColumns[':p' . $index++]  = '`Pic`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERNAMES)) {
            $modifiedColumns[':p' . $index++]  = '`Othernames`';
        }
        if ($this->isColumnModified(DisrefPeer::GERMGENUS)) {
            $modifiedColumns[':p' . $index++]  = '`GermGenus`';
        }
        if ($this->isColumnModified(DisrefPeer::GERMSPECIES)) {
            $modifiedColumns[':p' . $index++]  = '`GermSpecies`';
        }
        if ($this->isColumnModified(DisrefPeer::GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`Group`';
        }
        if ($this->isColumnModified(DisrefPeer::SKINFINSAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`SkinFinsAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::BELLYAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`BellyAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTBEHAVIOR)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantBehavior`';
        }
        if ($this->isColumnModified(DisrefPeer::GILLSAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`GillsAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::ANUSAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`AnusAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERBEHAVIOR)) {
            $modifiedColumns[':p' . $index++]  = '`OtherBehavior`';
        }
        if ($this->isColumnModified(DisrefPeer::EYESAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`EyesAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::VISCERAAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`VisceraAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERSYMPTOMS)) {
            $modifiedColumns[':p' . $index++]  = '`OtherSymptoms`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantColor`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTCOAT)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantCoat`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTMUSCUSPROD)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantMuscusProd`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTS)) {
            $modifiedColumns[':p' . $index++]  = '`Spots`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsColor`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONHEAD)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonHead`';
        }
        if ($this->isColumnModified(DisrefPeer::DORSALSPOTS)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalSpots`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONDORSALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonDorsalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONCAUDALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonCaudalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONTRUNK)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonTrunk`';
        }
        if ($this->isColumnModified(DisrefPeer::VENTRALSPOTS)) {
            $modifiedColumns[':p' . $index++]  = '`VentralSpots`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONANALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonAnalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONUNPAIREDF)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonUnpairedF`';
        }
        if ($this->isColumnModified(DisrefPeer::SPOTSONTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`SpotsonTail`';
        }
        if ($this->isColumnModified(DisrefPeer::AREAS)) {
            $modifiedColumns[':p' . $index++]  = '`Areas`';
        }
        if ($this->isColumnModified(DisrefPeer::AREACOLORI)) {
            $modifiedColumns[':p' . $index++]  = '`AreaColorI`';
        }
        if ($this->isColumnModified(DisrefPeer::AREASONHEAD)) {
            $modifiedColumns[':p' . $index++]  = '`AreasonHead`';
        }
        if ($this->isColumnModified(DisrefPeer::DORSALAREAS)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalAreas`';
        }
        if ($this->isColumnModified(DisrefPeer::AREAONDORSALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AreaonDorsalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::AREAONCAUDALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AreaonCaudalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::AREASONTRUNK)) {
            $modifiedColumns[':p' . $index++]  = '`AreasonTrunk`';
        }
        if ($this->isColumnModified(DisrefPeer::VENTRALAREAS)) {
            $modifiedColumns[':p' . $index++]  = '`VentralAreas`';
        }
        if ($this->isColumnModified(DisrefPeer::AREAONANALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AreaonAnalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::AREAONUNPAIREDF)) {
            $modifiedColumns[':p' . $index++]  = '`AreaonUnpairedF`';
        }
        if ($this->isColumnModified(DisrefPeer::AREASONTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`AreasonTail`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILS)) {
            $modifiedColumns[':p' . $index++]  = '`Boils`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsColor`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONHEAD)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonHead`';
        }
        if ($this->isColumnModified(DisrefPeer::DORSALBOILS)) {
            $modifiedColumns[':p' . $index++]  = '`Dorsalboils`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONDORSALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonDorsalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONCAUDALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonCaudalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONTRUNK)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonTrunk`';
        }
        if ($this->isColumnModified(DisrefPeer::VENTRALBOILS)) {
            $modifiedColumns[':p' . $index++]  = '`VentralBoils`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONANALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonAnalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONUNPAIREDF)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonUnpairedF`';
        }
        if ($this->isColumnModified(DisrefPeer::BOILSONTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`BoilsonTail`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCER)) {
            $modifiedColumns[':p' . $index++]  = '`Ulcer`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`UlcerColor`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONHEAD)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronHead`';
        }
        if ($this->isColumnModified(DisrefPeer::DORSALULCER)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalUlcer`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONDORSALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronDorsalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONCAUDALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronCaudalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONTRUNK)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronTrunk`';
        }
        if ($this->isColumnModified(DisrefPeer::VENTRALULCER)) {
            $modifiedColumns[':p' . $index++]  = '`VentralUlcer`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONANALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronAnalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONUNPAIREDF)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronUnpairedF`';
        }
        if ($this->isColumnModified(DisrefPeer::ULCERONTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`UlceronTail`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTSSKIN2)) {
            $modifiedColumns[':p' . $index++]  = '`AttachmentsSkin2`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTONHEAD)) {
            $modifiedColumns[':p' . $index++]  = '`AttachmentonHead`';
        }
        if ($this->isColumnModified(DisrefPeer::DORSALATTACHMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalAttachments`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTONDORSALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AttonDorsalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTONCAUDALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AttonCaudalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTONTRUNK)) {
            $modifiedColumns[':p' . $index++]  = '`AttachmentonTrunk`';
        }
        if ($this->isColumnModified(DisrefPeer::VENTRALATTACHMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`VentralAttachments`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTONANALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AttonAnalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTONUNPAIREDF)) {
            $modifiedColumns[':p' . $index++]  = '`AttonUnpairedF`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTONTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`AttachmentonTail`';
        }
        if ($this->isColumnModified(DisrefPeer::FINS1)) {
            $modifiedColumns[':p' . $index++]  = '`Fins1`';
        }
        if ($this->isColumnModified(DisrefPeer::DORSALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`DorsalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::CAUDALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`CaudalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::ANALFIN)) {
            $modifiedColumns[':p' . $index++]  = '`AnalFin`';
        }
        if ($this->isColumnModified(DisrefPeer::UNPAIREDFINS)) {
            $modifiedColumns[':p' . $index++]  = '`UnpairedFins`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTCOLORGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantColorGills`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERCOLORGILL)) {
            $modifiedColumns[':p' . $index++]  = '`AberColorGill`';
        }
        if ($this->isColumnModified(DisrefPeer::EYECOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`EyeColor`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTSPOTSGILL)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantSpotsGill`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTSPOTSCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantSpotsColor`';
        }
        if ($this->isColumnModified(DisrefPeer::EYESPOTS)) {
            $modifiedColumns[':p' . $index++]  = '`EyeSpots`';
        }
        if ($this->isColumnModified(DisrefPeer::KNOTSONGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`KnotsonGills`';
        }
        if ($this->isColumnModified(DisrefPeer::KNOTSCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`KnotsColor`';
        }
        if ($this->isColumnModified(DisrefPeer::EYESCONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`EyesCondition`';
        }
        if ($this->isColumnModified(DisrefPeer::AREASONGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`AreasonGills`';
        }
        if ($this->isColumnModified(DisrefPeer::AREASCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`AreasColor`';
        }
        if ($this->isColumnModified(DisrefPeer::MUCUSPRODGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`MucusProdGills`';
        }
        if ($this->isColumnModified(DisrefPeer::CONDITIONGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`ConditionGills`';
        }
        if ($this->isColumnModified(DisrefPeer::OBJECTGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`ObjectGills`';
        }
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTGILLS)) {
            $modifiedColumns[':p' . $index++]  = '`AttachmentGills`';
        }
        if ($this->isColumnModified(DisrefPeer::BELLYCONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`BellyCondition`';
        }
        if ($this->isColumnModified(DisrefPeer::ANUSCONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`AnusCondition`';
        }
        if ($this->isColumnModified(DisrefPeer::BELLYLUMEN)) {
            $modifiedColumns[':p' . $index++]  = '`BellyLumen`';
        }
        if ($this->isColumnModified(DisrefPeer::ANUSCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`AnusColor`';
        }
        if ($this->isColumnModified(DisrefPeer::BELLYWORMS)) {
            $modifiedColumns[':p' . $index++]  = '`BellyWorms`';
        }
        if ($this->isColumnModified(DisrefPeer::ANUSOBJECT)) {
            $modifiedColumns[':p' . $index++]  = '`AnusObject`';
        }
        if ($this->isColumnModified(DisrefPeer::ANUSATTACHMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`AnusAttachments`';
        }
        if ($this->isColumnModified(DisrefPeer::ANUSEXUDATES)) {
            $modifiedColumns[':p' . $index++]  = '`AnusExudates`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERAFFL)) {
            $modifiedColumns[':p' . $index++]  = '`LiverAffl`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERSIZE)) {
            $modifiedColumns[':p' . $index++]  = '`LiverSize`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERAPP)) {
            $modifiedColumns[':p' . $index++]  = '`LiverApp`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERBLOT)) {
            $modifiedColumns[':p' . $index++]  = '`LiverBlot`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERBLC)) {
            $modifiedColumns[':p' . $index++]  = '`LiverBlC`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERKNOTS)) {
            $modifiedColumns[':p' . $index++]  = '`LiverKnots`';
        }
        if ($this->isColumnModified(DisrefPeer::LIVERKNC)) {
            $modifiedColumns[':p' . $index++]  = '`LiverKnC`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENAFFL)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenAffl`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENSIZE)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenSize`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENAPP)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenApp`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENBLOT)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenBlot`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENBLC)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenBlC`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENKNOTS)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenKnots`';
        }
        if ($this->isColumnModified(DisrefPeer::SPLEENKNC)) {
            $modifiedColumns[':p' . $index++]  = '`SpleenKnC`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYAFFL)) {
            $modifiedColumns[':p' . $index++]  = '`KidneyAffl`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYSIZE)) {
            $modifiedColumns[':p' . $index++]  = '`KidneySize`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYAPP)) {
            $modifiedColumns[':p' . $index++]  = '`KidneyApp`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYBLOT)) {
            $modifiedColumns[':p' . $index++]  = '`KidneyBlot`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYBLC)) {
            $modifiedColumns[':p' . $index++]  = '`KidneyBlC`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYKNOTS)) {
            $modifiedColumns[':p' . $index++]  = '`KidneyKnots`';
        }
        if ($this->isColumnModified(DisrefPeer::KIDNEYKNC)) {
            $modifiedColumns[':p' . $index++]  = '`KidneyKnC`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERAFFL)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderAffl`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERSIZE)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderSize`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERAPP)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderApp`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERBLOT)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderBlot`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERBLC)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderBlC`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERKNOTS)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderKnots`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERKNC)) {
            $modifiedColumns[':p' . $index++]  = '`SwimBladderKnC`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINEAFFL)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineAffl`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINESIZE)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineSize`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINEAPP)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineApp`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINEBLOT)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineBlot`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINEBLC)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineBlC`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINEKNOTS)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineKnots`';
        }
        if ($this->isColumnModified(DisrefPeer::INTESTINEKNC)) {
            $modifiedColumns[':p' . $index++]  = '`IntestineKnC`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERORGANS)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOrgans`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSSIZE)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOrgansSize`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSBLOT)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOrgansBlot`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSBLC)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOrgansBlC`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSKNOTS)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOrgansKnots`';
        }
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSKNC)) {
            $modifiedColumns[':p' . $index++]  = '`OtherOrgansKnC`';
        }
        if ($this->isColumnModified(DisrefPeer::ALLORGANS)) {
            $modifiedColumns[':p' . $index++]  = '`AllOrgans`';
        }
        if ($this->isColumnModified(DisrefPeer::ALLORGANSAPP)) {
            $modifiedColumns[':p' . $index++]  = '`AllOrgansApp`';
        }
        if ($this->isColumnModified(DisrefPeer::BRISTELING)) {
            $modifiedColumns[':p' . $index++]  = '`Bristeling`';
        }
        if ($this->isColumnModified(DisrefPeer::MORTALITY)) {
            $modifiedColumns[':p' . $index++]  = '`Mortality`';
        }
        if ($this->isColumnModified(DisrefPeer::LOSS)) {
            $modifiedColumns[':p' . $index++]  = '`Loss`';
        }
        if ($this->isColumnModified(DisrefPeer::SKELETONDEFORMATION)) {
            $modifiedColumns[':p' . $index++]  = '`SkeletonDeformation`';
        }
        if ($this->isColumnModified(DisrefPeer::SPRING)) {
            $modifiedColumns[':p' . $index++]  = '`Spring`';
        }
        if ($this->isColumnModified(DisrefPeer::SUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`Summer`';
        }
        if ($this->isColumnModified(DisrefPeer::GROWTHRATE)) {
            $modifiedColumns[':p' . $index++]  = '`GrowthRate`';
        }
        if ($this->isColumnModified(DisrefPeer::AUTUMN)) {
            $modifiedColumns[':p' . $index++]  = '`Autumn`';
        }
        if ($this->isColumnModified(DisrefPeer::WINTER)) {
            $modifiedColumns[':p' . $index++]  = '`Winter`';
        }
        if ($this->isColumnModified(DisrefPeer::CONDITION)) {
            $modifiedColumns[':p' . $index++]  = '`Condition`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTACTIVITY)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantActivity`';
        }
        if ($this->isColumnModified(DisrefPeer::ACTIVITY)) {
            $modifiedColumns[':p' . $index++]  = '`Activity`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTBALANCE)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantBalance`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTSWMOTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantSwMotions`';
        }
        if ($this->isColumnModified(DisrefPeer::SWIMMINGMOTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`SwimmingMotions`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTBODYDIREC)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantBodyDirec`';
        }
        if ($this->isColumnModified(DisrefPeer::SCRAPING)) {
            $modifiedColumns[':p' . $index++]  = '`Scraping`';
        }
        if ($this->isColumnModified(DisrefPeer::JUMPING)) {
            $modifiedColumns[':p' . $index++]  = '`Jumping`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTFINS)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantFins`';
        }
        if ($this->isColumnModified(DisrefPeer::FINS)) {
            $modifiedColumns[':p' . $index++]  = '`Fins`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTLOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantLocation`';
        }
        if ($this->isColumnModified(DisrefPeer::FISHNEARSURFACE)) {
            $modifiedColumns[':p' . $index++]  = '`FishNearSurface`';
        }
        if ($this->isColumnModified(DisrefPeer::INFLOWOROUTFLOW)) {
            $modifiedColumns[':p' . $index++]  = '`InfloworOutflow`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTAPPETITE)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantAppetite`';
        }
        if ($this->isColumnModified(DisrefPeer::OPERCULUM)) {
            $modifiedColumns[':p' . $index++]  = '`Operculum`';
        }
        if ($this->isColumnModified(DisrefPeer::ABERRANTVENTILATION)) {
            $modifiedColumns[':p' . $index++]  = '`AberrantVentilation`';
        }
        if ($this->isColumnModified(DisrefPeer::FAST)) {
            $modifiedColumns[':p' . $index++]  = '`Fast`';
        }
        if ($this->isColumnModified(DisrefPeer::SLOW)) {
            $modifiedColumns[':p' . $index++]  = '`Slow`';
        }
        if ($this->isColumnModified(DisrefPeer::FLAT)) {
            $modifiedColumns[':p' . $index++]  = '`Flat`';
        }
        if ($this->isColumnModified(DisrefPeer::HEAVY)) {
            $modifiedColumns[':p' . $index++]  = '`heavy`';
        }
        if ($this->isColumnModified(DisrefPeer::GASPINGAIR)) {
            $modifiedColumns[':p' . $index++]  = '`GaspingAir`';
        }
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICTED)) {
            $modifiedColumns[':p' . $index++]  = '`FishAfflicted`';
        }
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICTED2)) {
            $modifiedColumns[':p' . $index++]  = '`FishAfflicted2`';
        }
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICTED3)) {
            $modifiedColumns[':p' . $index++]  = '`FishAfflicted3`';
        }
        if ($this->isColumnModified(DisrefPeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(DisrefPeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(DisrefPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(DisrefPeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(DisrefPeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(DisrefPeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICT)) {
            $modifiedColumns[':p' . $index++]  = '`Fishafflict`';
        }
        if ($this->isColumnModified(DisrefPeer::SYMPTOM)) {
            $modifiedColumns[':p' . $index++]  = '`Symptom`';
        }
        if ($this->isColumnModified(DisrefPeer::TREATMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`Treatments`';
        }
        if ($this->isColumnModified(DisrefPeer::PROPHYLAXES)) {
            $modifiedColumns[':p' . $index++]  = '`Prophylaxes`';
        }
        if ($this->isColumnModified(DisrefPeer::ADDREMS)) {
            $modifiedColumns[':p' . $index++]  = '`AddRems`';
        }
        if ($this->isColumnModified(DisrefPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `disref` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`DisCode`':
                        $stmt->bindValue($identifier, $this->discode, PDO::PARAM_INT);
                        break;
                    case '`DiseasesRefNo`':
                        $stmt->bindValue($identifier, $this->diseasesrefno, PDO::PARAM_INT);
                        break;
                    case '`DiseaseI`':
                        $stmt->bindValue($identifier, $this->diseasei, PDO::PARAM_STR);
                        break;
                    case '`DiseaseII`':
                        $stmt->bindValue($identifier, $this->diseaseii, PDO::PARAM_STR);
                        break;
                    case '`Pic`':
                        $stmt->bindValue($identifier, $this->pic, PDO::PARAM_STR);
                        break;
                    case '`Othernames`':
                        $stmt->bindValue($identifier, $this->othernames, PDO::PARAM_STR);
                        break;
                    case '`GermGenus`':
                        $stmt->bindValue($identifier, $this->germgenus, PDO::PARAM_STR);
                        break;
                    case '`GermSpecies`':
                        $stmt->bindValue($identifier, $this->germspecies, PDO::PARAM_STR);
                        break;
                    case '`Group`':
                        $stmt->bindValue($identifier, $this->group, PDO::PARAM_STR);
                        break;
                    case '`SkinFinsAfflicted`':
                        $stmt->bindValue($identifier, $this->skinfinsafflicted, PDO::PARAM_INT);
                        break;
                    case '`BellyAfflicted`':
                        $stmt->bindValue($identifier, $this->bellyafflicted, PDO::PARAM_INT);
                        break;
                    case '`AberrantBehavior`':
                        $stmt->bindValue($identifier, $this->aberrantbehavior, PDO::PARAM_INT);
                        break;
                    case '`GillsAfflicted`':
                        $stmt->bindValue($identifier, $this->gillsafflicted, PDO::PARAM_INT);
                        break;
                    case '`AnusAfflicted`':
                        $stmt->bindValue($identifier, $this->anusafflicted, PDO::PARAM_INT);
                        break;
                    case '`OtherBehavior`':
                        $stmt->bindValue($identifier, $this->otherbehavior, PDO::PARAM_INT);
                        break;
                    case '`EyesAfflicted`':
                        $stmt->bindValue($identifier, $this->eyesafflicted, PDO::PARAM_INT);
                        break;
                    case '`VisceraAfflicted`':
                        $stmt->bindValue($identifier, $this->visceraafflicted, PDO::PARAM_INT);
                        break;
                    case '`OtherSymptoms`':
                        $stmt->bindValue($identifier, $this->othersymptoms, PDO::PARAM_INT);
                        break;
                    case '`AberrantColor`':
                        $stmt->bindValue($identifier, $this->aberrantcolor, PDO::PARAM_INT);
                        break;
                    case '`AberrantCoat`':
                        $stmt->bindValue($identifier, $this->aberrantcoat, PDO::PARAM_INT);
                        break;
                    case '`AberrantMuscusProd`':
                        $stmt->bindValue($identifier, $this->aberrantmuscusprod, PDO::PARAM_INT);
                        break;
                    case '`Spots`':
                        $stmt->bindValue($identifier, $this->spots, PDO::PARAM_INT);
                        break;
                    case '`SpotsColor`':
                        $stmt->bindValue($identifier, $this->spotscolor, PDO::PARAM_STR);
                        break;
                    case '`SpotsonHead`':
                        $stmt->bindValue($identifier, $this->spotsonhead, PDO::PARAM_INT);
                        break;
                    case '`DorsalSpots`':
                        $stmt->bindValue($identifier, $this->dorsalspots, PDO::PARAM_INT);
                        break;
                    case '`SpotsonDorsalFin`':
                        $stmt->bindValue($identifier, $this->spotsondorsalfin, PDO::PARAM_INT);
                        break;
                    case '`SpotsonCaudalFin`':
                        $stmt->bindValue($identifier, $this->spotsoncaudalfin, PDO::PARAM_INT);
                        break;
                    case '`SpotsonTrunk`':
                        $stmt->bindValue($identifier, $this->spotsontrunk, PDO::PARAM_INT);
                        break;
                    case '`VentralSpots`':
                        $stmt->bindValue($identifier, $this->ventralspots, PDO::PARAM_INT);
                        break;
                    case '`SpotsonAnalFin`':
                        $stmt->bindValue($identifier, $this->spotsonanalfin, PDO::PARAM_INT);
                        break;
                    case '`SpotsonUnpairedF`':
                        $stmt->bindValue($identifier, $this->spotsonunpairedf, PDO::PARAM_INT);
                        break;
                    case '`SpotsonTail`':
                        $stmt->bindValue($identifier, $this->spotsontail, PDO::PARAM_INT);
                        break;
                    case '`Areas`':
                        $stmt->bindValue($identifier, $this->areas, PDO::PARAM_INT);
                        break;
                    case '`AreaColorI`':
                        $stmt->bindValue($identifier, $this->areacolori, PDO::PARAM_STR);
                        break;
                    case '`AreasonHead`':
                        $stmt->bindValue($identifier, $this->areasonhead, PDO::PARAM_INT);
                        break;
                    case '`DorsalAreas`':
                        $stmt->bindValue($identifier, $this->dorsalareas, PDO::PARAM_INT);
                        break;
                    case '`AreaonDorsalFin`':
                        $stmt->bindValue($identifier, $this->areaondorsalfin, PDO::PARAM_INT);
                        break;
                    case '`AreaonCaudalFin`':
                        $stmt->bindValue($identifier, $this->areaoncaudalfin, PDO::PARAM_INT);
                        break;
                    case '`AreasonTrunk`':
                        $stmt->bindValue($identifier, $this->areasontrunk, PDO::PARAM_INT);
                        break;
                    case '`VentralAreas`':
                        $stmt->bindValue($identifier, $this->ventralareas, PDO::PARAM_INT);
                        break;
                    case '`AreaonAnalFin`':
                        $stmt->bindValue($identifier, $this->areaonanalfin, PDO::PARAM_INT);
                        break;
                    case '`AreaonUnpairedF`':
                        $stmt->bindValue($identifier, $this->areaonunpairedf, PDO::PARAM_INT);
                        break;
                    case '`AreasonTail`':
                        $stmt->bindValue($identifier, $this->areasontail, PDO::PARAM_INT);
                        break;
                    case '`Boils`':
                        $stmt->bindValue($identifier, $this->boils, PDO::PARAM_INT);
                        break;
                    case '`BoilsColor`':
                        $stmt->bindValue($identifier, $this->boilscolor, PDO::PARAM_STR);
                        break;
                    case '`BoilsonHead`':
                        $stmt->bindValue($identifier, $this->boilsonhead, PDO::PARAM_INT);
                        break;
                    case '`Dorsalboils`':
                        $stmt->bindValue($identifier, $this->dorsalboils, PDO::PARAM_INT);
                        break;
                    case '`BoilsonDorsalFin`':
                        $stmt->bindValue($identifier, $this->boilsondorsalfin, PDO::PARAM_INT);
                        break;
                    case '`BoilsonCaudalFin`':
                        $stmt->bindValue($identifier, $this->boilsoncaudalfin, PDO::PARAM_INT);
                        break;
                    case '`BoilsonTrunk`':
                        $stmt->bindValue($identifier, $this->boilsontrunk, PDO::PARAM_INT);
                        break;
                    case '`VentralBoils`':
                        $stmt->bindValue($identifier, $this->ventralboils, PDO::PARAM_INT);
                        break;
                    case '`BoilsonAnalFin`':
                        $stmt->bindValue($identifier, $this->boilsonanalfin, PDO::PARAM_INT);
                        break;
                    case '`BoilsonUnpairedF`':
                        $stmt->bindValue($identifier, $this->boilsonunpairedf, PDO::PARAM_INT);
                        break;
                    case '`BoilsonTail`':
                        $stmt->bindValue($identifier, $this->boilsontail, PDO::PARAM_INT);
                        break;
                    case '`Ulcer`':
                        $stmt->bindValue($identifier, $this->ulcer, PDO::PARAM_INT);
                        break;
                    case '`UlcerColor`':
                        $stmt->bindValue($identifier, $this->ulcercolor, PDO::PARAM_STR);
                        break;
                    case '`UlceronHead`':
                        $stmt->bindValue($identifier, $this->ulceronhead, PDO::PARAM_INT);
                        break;
                    case '`DorsalUlcer`':
                        $stmt->bindValue($identifier, $this->dorsalulcer, PDO::PARAM_INT);
                        break;
                    case '`UlceronDorsalFin`':
                        $stmt->bindValue($identifier, $this->ulcerondorsalfin, PDO::PARAM_INT);
                        break;
                    case '`UlceronCaudalFin`':
                        $stmt->bindValue($identifier, $this->ulceroncaudalfin, PDO::PARAM_INT);
                        break;
                    case '`UlceronTrunk`':
                        $stmt->bindValue($identifier, $this->ulcerontrunk, PDO::PARAM_INT);
                        break;
                    case '`VentralUlcer`':
                        $stmt->bindValue($identifier, $this->ventralulcer, PDO::PARAM_INT);
                        break;
                    case '`UlceronAnalFin`':
                        $stmt->bindValue($identifier, $this->ulceronanalfin, PDO::PARAM_INT);
                        break;
                    case '`UlceronUnpairedF`':
                        $stmt->bindValue($identifier, $this->ulceronunpairedf, PDO::PARAM_INT);
                        break;
                    case '`UlceronTail`':
                        $stmt->bindValue($identifier, $this->ulcerontail, PDO::PARAM_INT);
                        break;
                    case '`AttachmentsSkin2`':
                        $stmt->bindValue($identifier, $this->attachmentsskin2, PDO::PARAM_STR);
                        break;
                    case '`AttachmentonHead`':
                        $stmt->bindValue($identifier, $this->attachmentonhead, PDO::PARAM_INT);
                        break;
                    case '`DorsalAttachments`':
                        $stmt->bindValue($identifier, $this->dorsalattachments, PDO::PARAM_INT);
                        break;
                    case '`AttonDorsalFin`':
                        $stmt->bindValue($identifier, $this->attondorsalfin, PDO::PARAM_INT);
                        break;
                    case '`AttonCaudalFin`':
                        $stmt->bindValue($identifier, $this->attoncaudalfin, PDO::PARAM_INT);
                        break;
                    case '`AttachmentonTrunk`':
                        $stmt->bindValue($identifier, $this->attachmentontrunk, PDO::PARAM_INT);
                        break;
                    case '`VentralAttachments`':
                        $stmt->bindValue($identifier, $this->ventralattachments, PDO::PARAM_INT);
                        break;
                    case '`AttonAnalFin`':
                        $stmt->bindValue($identifier, $this->attonanalfin, PDO::PARAM_INT);
                        break;
                    case '`AttonUnpairedF`':
                        $stmt->bindValue($identifier, $this->attonunpairedf, PDO::PARAM_INT);
                        break;
                    case '`AttachmentonTail`':
                        $stmt->bindValue($identifier, $this->attachmentontail, PDO::PARAM_INT);
                        break;
                    case '`Fins1`':
                        $stmt->bindValue($identifier, $this->fins1, PDO::PARAM_STR);
                        break;
                    case '`DorsalFin`':
                        $stmt->bindValue($identifier, $this->dorsalfin, PDO::PARAM_INT);
                        break;
                    case '`CaudalFin`':
                        $stmt->bindValue($identifier, $this->caudalfin, PDO::PARAM_INT);
                        break;
                    case '`AnalFin`':
                        $stmt->bindValue($identifier, $this->analfin, PDO::PARAM_INT);
                        break;
                    case '`UnpairedFins`':
                        $stmt->bindValue($identifier, $this->unpairedfins, PDO::PARAM_INT);
                        break;
                    case '`AberrantColorGills`':
                        $stmt->bindValue($identifier, $this->aberrantcolorgills, PDO::PARAM_INT);
                        break;
                    case '`AberColorGill`':
                        $stmt->bindValue($identifier, $this->abercolorgill, PDO::PARAM_STR);
                        break;
                    case '`EyeColor`':
                        $stmt->bindValue($identifier, $this->eyecolor, PDO::PARAM_INT);
                        break;
                    case '`AberrantSpotsGill`':
                        $stmt->bindValue($identifier, $this->aberrantspotsgill, PDO::PARAM_INT);
                        break;
                    case '`AberrantSpotsColor`':
                        $stmt->bindValue($identifier, $this->aberrantspotscolor, PDO::PARAM_STR);
                        break;
                    case '`EyeSpots`':
                        $stmt->bindValue($identifier, $this->eyespots, PDO::PARAM_STR);
                        break;
                    case '`KnotsonGills`':
                        $stmt->bindValue($identifier, $this->knotsongills, PDO::PARAM_INT);
                        break;
                    case '`KnotsColor`':
                        $stmt->bindValue($identifier, $this->knotscolor, PDO::PARAM_STR);
                        break;
                    case '`EyesCondition`':
                        $stmt->bindValue($identifier, $this->eyescondition, PDO::PARAM_STR);
                        break;
                    case '`AreasonGills`':
                        $stmt->bindValue($identifier, $this->areasongills, PDO::PARAM_INT);
                        break;
                    case '`AreasColor`':
                        $stmt->bindValue($identifier, $this->areascolor, PDO::PARAM_STR);
                        break;
                    case '`MucusProdGills`':
                        $stmt->bindValue($identifier, $this->mucusprodgills, PDO::PARAM_INT);
                        break;
                    case '`ConditionGills`':
                        $stmt->bindValue($identifier, $this->conditiongills, PDO::PARAM_INT);
                        break;
                    case '`ObjectGills`':
                        $stmt->bindValue($identifier, $this->objectgills, PDO::PARAM_INT);
                        break;
                    case '`AttachmentGills`':
                        $stmt->bindValue($identifier, $this->attachmentgills, PDO::PARAM_STR);
                        break;
                    case '`BellyCondition`':
                        $stmt->bindValue($identifier, $this->bellycondition, PDO::PARAM_STR);
                        break;
                    case '`AnusCondition`':
                        $stmt->bindValue($identifier, $this->anuscondition, PDO::PARAM_INT);
                        break;
                    case '`BellyLumen`':
                        $stmt->bindValue($identifier, $this->bellylumen, PDO::PARAM_INT);
                        break;
                    case '`AnusColor`':
                        $stmt->bindValue($identifier, $this->anuscolor, PDO::PARAM_INT);
                        break;
                    case '`BellyWorms`':
                        $stmt->bindValue($identifier, $this->bellyworms, PDO::PARAM_STR);
                        break;
                    case '`AnusObject`':
                        $stmt->bindValue($identifier, $this->anusobject, PDO::PARAM_INT);
                        break;
                    case '`AnusAttachments`':
                        $stmt->bindValue($identifier, $this->anusattachments, PDO::PARAM_STR);
                        break;
                    case '`AnusExudates`':
                        $stmt->bindValue($identifier, $this->anusexudates, PDO::PARAM_INT);
                        break;
                    case '`LiverAffl`':
                        $stmt->bindValue($identifier, $this->liveraffl, PDO::PARAM_INT);
                        break;
                    case '`LiverSize`':
                        $stmt->bindValue($identifier, $this->liversize, PDO::PARAM_STR);
                        break;
                    case '`LiverApp`':
                        $stmt->bindValue($identifier, $this->liverapp, PDO::PARAM_STR);
                        break;
                    case '`LiverBlot`':
                        $stmt->bindValue($identifier, $this->liverblot, PDO::PARAM_INT);
                        break;
                    case '`LiverBlC`':
                        $stmt->bindValue($identifier, $this->liverblc, PDO::PARAM_STR);
                        break;
                    case '`LiverKnots`':
                        $stmt->bindValue($identifier, $this->liverknots, PDO::PARAM_INT);
                        break;
                    case '`LiverKnC`':
                        $stmt->bindValue($identifier, $this->liverknc, PDO::PARAM_STR);
                        break;
                    case '`SpleenAffl`':
                        $stmt->bindValue($identifier, $this->spleenaffl, PDO::PARAM_INT);
                        break;
                    case '`SpleenSize`':
                        $stmt->bindValue($identifier, $this->spleensize, PDO::PARAM_STR);
                        break;
                    case '`SpleenApp`':
                        $stmt->bindValue($identifier, $this->spleenapp, PDO::PARAM_STR);
                        break;
                    case '`SpleenBlot`':
                        $stmt->bindValue($identifier, $this->spleenblot, PDO::PARAM_INT);
                        break;
                    case '`SpleenBlC`':
                        $stmt->bindValue($identifier, $this->spleenblc, PDO::PARAM_STR);
                        break;
                    case '`SpleenKnots`':
                        $stmt->bindValue($identifier, $this->spleenknots, PDO::PARAM_INT);
                        break;
                    case '`SpleenKnC`':
                        $stmt->bindValue($identifier, $this->spleenknc, PDO::PARAM_STR);
                        break;
                    case '`KidneyAffl`':
                        $stmt->bindValue($identifier, $this->kidneyaffl, PDO::PARAM_INT);
                        break;
                    case '`KidneySize`':
                        $stmt->bindValue($identifier, $this->kidneysize, PDO::PARAM_STR);
                        break;
                    case '`KidneyApp`':
                        $stmt->bindValue($identifier, $this->kidneyapp, PDO::PARAM_STR);
                        break;
                    case '`KidneyBlot`':
                        $stmt->bindValue($identifier, $this->kidneyblot, PDO::PARAM_INT);
                        break;
                    case '`KidneyBlC`':
                        $stmt->bindValue($identifier, $this->kidneyblc, PDO::PARAM_STR);
                        break;
                    case '`KidneyKnots`':
                        $stmt->bindValue($identifier, $this->kidneyknots, PDO::PARAM_INT);
                        break;
                    case '`KidneyKnC`':
                        $stmt->bindValue($identifier, $this->kidneyknc, PDO::PARAM_STR);
                        break;
                    case '`SwimBladderAffl`':
                        $stmt->bindValue($identifier, $this->swimbladderaffl, PDO::PARAM_INT);
                        break;
                    case '`SwimBladderSize`':
                        $stmt->bindValue($identifier, $this->swimbladdersize, PDO::PARAM_STR);
                        break;
                    case '`SwimBladderApp`':
                        $stmt->bindValue($identifier, $this->swimbladderapp, PDO::PARAM_STR);
                        break;
                    case '`SwimBladderBlot`':
                        $stmt->bindValue($identifier, $this->swimbladderblot, PDO::PARAM_INT);
                        break;
                    case '`SwimBladderBlC`':
                        $stmt->bindValue($identifier, $this->swimbladderblc, PDO::PARAM_STR);
                        break;
                    case '`SwimBladderKnots`':
                        $stmt->bindValue($identifier, $this->swimbladderknots, PDO::PARAM_INT);
                        break;
                    case '`SwimBladderKnC`':
                        $stmt->bindValue($identifier, $this->swimbladderknc, PDO::PARAM_STR);
                        break;
                    case '`IntestineAffl`':
                        $stmt->bindValue($identifier, $this->intestineaffl, PDO::PARAM_INT);
                        break;
                    case '`IntestineSize`':
                        $stmt->bindValue($identifier, $this->intestinesize, PDO::PARAM_STR);
                        break;
                    case '`IntestineApp`':
                        $stmt->bindValue($identifier, $this->intestineapp, PDO::PARAM_STR);
                        break;
                    case '`IntestineBlot`':
                        $stmt->bindValue($identifier, $this->intestineblot, PDO::PARAM_INT);
                        break;
                    case '`IntestineBlC`':
                        $stmt->bindValue($identifier, $this->intestineblc, PDO::PARAM_STR);
                        break;
                    case '`IntestineKnots`':
                        $stmt->bindValue($identifier, $this->intestineknots, PDO::PARAM_INT);
                        break;
                    case '`IntestineKnC`':
                        $stmt->bindValue($identifier, $this->intestineknc, PDO::PARAM_STR);
                        break;
                    case '`OtherOrgans`':
                        $stmt->bindValue($identifier, $this->otherorgans, PDO::PARAM_INT);
                        break;
                    case '`OtherOrgansSize`':
                        $stmt->bindValue($identifier, $this->otherorganssize, PDO::PARAM_STR);
                        break;
                    case '`OtherOrgansBlot`':
                        $stmt->bindValue($identifier, $this->otherorgansblot, PDO::PARAM_INT);
                        break;
                    case '`OtherOrgansBlC`':
                        $stmt->bindValue($identifier, $this->otherorgansblc, PDO::PARAM_STR);
                        break;
                    case '`OtherOrgansKnots`':
                        $stmt->bindValue($identifier, $this->otherorgansknots, PDO::PARAM_INT);
                        break;
                    case '`OtherOrgansKnC`':
                        $stmt->bindValue($identifier, $this->otherorgansknc, PDO::PARAM_STR);
                        break;
                    case '`AllOrgans`':
                        $stmt->bindValue($identifier, $this->allorgans, PDO::PARAM_INT);
                        break;
                    case '`AllOrgansApp`':
                        $stmt->bindValue($identifier, $this->allorgansapp, PDO::PARAM_STR);
                        break;
                    case '`Bristeling`':
                        $stmt->bindValue($identifier, $this->bristeling, PDO::PARAM_INT);
                        break;
                    case '`Mortality`':
                        $stmt->bindValue($identifier, $this->mortality, PDO::PARAM_STR);
                        break;
                    case '`Loss`':
                        $stmt->bindValue($identifier, $this->loss, PDO::PARAM_INT);
                        break;
                    case '`SkeletonDeformation`':
                        $stmt->bindValue($identifier, $this->skeletondeformation, PDO::PARAM_INT);
                        break;
                    case '`Spring`':
                        $stmt->bindValue($identifier, $this->spring, PDO::PARAM_INT);
                        break;
                    case '`Summer`':
                        $stmt->bindValue($identifier, $this->summer, PDO::PARAM_INT);
                        break;
                    case '`GrowthRate`':
                        $stmt->bindValue($identifier, $this->growthrate, PDO::PARAM_INT);
                        break;
                    case '`Autumn`':
                        $stmt->bindValue($identifier, $this->autumn, PDO::PARAM_INT);
                        break;
                    case '`Winter`':
                        $stmt->bindValue($identifier, $this->winter, PDO::PARAM_INT);
                        break;
                    case '`Condition`':
                        $stmt->bindValue($identifier, $this->condition, PDO::PARAM_INT);
                        break;
                    case '`AberrantActivity`':
                        $stmt->bindValue($identifier, $this->aberrantactivity, PDO::PARAM_INT);
                        break;
                    case '`Activity`':
                        $stmt->bindValue($identifier, $this->activity, PDO::PARAM_STR);
                        break;
                    case '`AberrantBalance`':
                        $stmt->bindValue($identifier, $this->aberrantbalance, PDO::PARAM_INT);
                        break;
                    case '`AberrantSwMotions`':
                        $stmt->bindValue($identifier, $this->aberrantswmotions, PDO::PARAM_INT);
                        break;
                    case '`SwimmingMotions`':
                        $stmt->bindValue($identifier, $this->swimmingmotions, PDO::PARAM_STR);
                        break;
                    case '`AberrantBodyDirec`':
                        $stmt->bindValue($identifier, $this->aberrantbodydirec, PDO::PARAM_INT);
                        break;
                    case '`Scraping`':
                        $stmt->bindValue($identifier, $this->scraping, PDO::PARAM_INT);
                        break;
                    case '`Jumping`':
                        $stmt->bindValue($identifier, $this->jumping, PDO::PARAM_INT);
                        break;
                    case '`AberrantFins`':
                        $stmt->bindValue($identifier, $this->aberrantfins, PDO::PARAM_INT);
                        break;
                    case '`Fins`':
                        $stmt->bindValue($identifier, $this->fins, PDO::PARAM_STR);
                        break;
                    case '`AberrantLocation`':
                        $stmt->bindValue($identifier, $this->aberrantlocation, PDO::PARAM_INT);
                        break;
                    case '`FishNearSurface`':
                        $stmt->bindValue($identifier, $this->fishnearsurface, PDO::PARAM_INT);
                        break;
                    case '`InfloworOutflow`':
                        $stmt->bindValue($identifier, $this->infloworoutflow, PDO::PARAM_INT);
                        break;
                    case '`AberrantAppetite`':
                        $stmt->bindValue($identifier, $this->aberrantappetite, PDO::PARAM_INT);
                        break;
                    case '`Operculum`':
                        $stmt->bindValue($identifier, $this->operculum, PDO::PARAM_INT);
                        break;
                    case '`AberrantVentilation`':
                        $stmt->bindValue($identifier, $this->aberrantventilation, PDO::PARAM_INT);
                        break;
                    case '`Fast`':
                        $stmt->bindValue($identifier, $this->fast, PDO::PARAM_INT);
                        break;
                    case '`Slow`':
                        $stmt->bindValue($identifier, $this->slow, PDO::PARAM_INT);
                        break;
                    case '`Flat`':
                        $stmt->bindValue($identifier, $this->flat, PDO::PARAM_INT);
                        break;
                    case '`heavy`':
                        $stmt->bindValue($identifier, $this->heavy, PDO::PARAM_INT);
                        break;
                    case '`GaspingAir`':
                        $stmt->bindValue($identifier, $this->gaspingair, PDO::PARAM_INT);
                        break;
                    case '`FishAfflicted`':
                        $stmt->bindValue($identifier, $this->fishafflicted, PDO::PARAM_STR);
                        break;
                    case '`FishAfflicted2`':
                        $stmt->bindValue($identifier, $this->fishafflicted2, PDO::PARAM_STR);
                        break;
                    case '`FishAfflicted3`':
                        $stmt->bindValue($identifier, $this->fishafflicted3, PDO::PARAM_STR);
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
                    case '`Fishafflict`':
                        $stmt->bindValue($identifier, $this->fishafflict, PDO::PARAM_STR);
                        break;
                    case '`Symptom`':
                        $stmt->bindValue($identifier, $this->symptom, PDO::PARAM_STR);
                        break;
                    case '`Treatments`':
                        $stmt->bindValue($identifier, $this->treatments, PDO::PARAM_STR);
                        break;
                    case '`Prophylaxes`':
                        $stmt->bindValue($identifier, $this->prophylaxes, PDO::PARAM_STR);
                        break;
                    case '`AddRems`':
                        $stmt->bindValue($identifier, $this->addrems, PDO::PARAM_STR);
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
        $this->setDiseasesrefno($pk);

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


            if (($retval = DisrefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DisrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDiscode();
                break;
            case 1:
                return $this->getDiseasesrefno();
                break;
            case 2:
                return $this->getDiseasei();
                break;
            case 3:
                return $this->getDiseaseii();
                break;
            case 4:
                return $this->getPic();
                break;
            case 5:
                return $this->getOthernames();
                break;
            case 6:
                return $this->getGermgenus();
                break;
            case 7:
                return $this->getGermspecies();
                break;
            case 8:
                return $this->getGroup();
                break;
            case 9:
                return $this->getSkinfinsafflicted();
                break;
            case 10:
                return $this->getBellyafflicted();
                break;
            case 11:
                return $this->getAberrantbehavior();
                break;
            case 12:
                return $this->getGillsafflicted();
                break;
            case 13:
                return $this->getAnusafflicted();
                break;
            case 14:
                return $this->getOtherbehavior();
                break;
            case 15:
                return $this->getEyesafflicted();
                break;
            case 16:
                return $this->getVisceraafflicted();
                break;
            case 17:
                return $this->getOthersymptoms();
                break;
            case 18:
                return $this->getAberrantcolor();
                break;
            case 19:
                return $this->getAberrantcoat();
                break;
            case 20:
                return $this->getAberrantmuscusprod();
                break;
            case 21:
                return $this->getSpots();
                break;
            case 22:
                return $this->getSpotscolor();
                break;
            case 23:
                return $this->getSpotsonhead();
                break;
            case 24:
                return $this->getDorsalspots();
                break;
            case 25:
                return $this->getSpotsondorsalfin();
                break;
            case 26:
                return $this->getSpotsoncaudalfin();
                break;
            case 27:
                return $this->getSpotsontrunk();
                break;
            case 28:
                return $this->getVentralspots();
                break;
            case 29:
                return $this->getSpotsonanalfin();
                break;
            case 30:
                return $this->getSpotsonunpairedf();
                break;
            case 31:
                return $this->getSpotsontail();
                break;
            case 32:
                return $this->getAreas();
                break;
            case 33:
                return $this->getAreacolori();
                break;
            case 34:
                return $this->getAreasonhead();
                break;
            case 35:
                return $this->getDorsalareas();
                break;
            case 36:
                return $this->getAreaondorsalfin();
                break;
            case 37:
                return $this->getAreaoncaudalfin();
                break;
            case 38:
                return $this->getAreasontrunk();
                break;
            case 39:
                return $this->getVentralareas();
                break;
            case 40:
                return $this->getAreaonanalfin();
                break;
            case 41:
                return $this->getAreaonunpairedf();
                break;
            case 42:
                return $this->getAreasontail();
                break;
            case 43:
                return $this->getBoils();
                break;
            case 44:
                return $this->getBoilscolor();
                break;
            case 45:
                return $this->getBoilsonhead();
                break;
            case 46:
                return $this->getDorsalboils();
                break;
            case 47:
                return $this->getBoilsondorsalfin();
                break;
            case 48:
                return $this->getBoilsoncaudalfin();
                break;
            case 49:
                return $this->getBoilsontrunk();
                break;
            case 50:
                return $this->getVentralboils();
                break;
            case 51:
                return $this->getBoilsonanalfin();
                break;
            case 52:
                return $this->getBoilsonunpairedf();
                break;
            case 53:
                return $this->getBoilsontail();
                break;
            case 54:
                return $this->getUlcer();
                break;
            case 55:
                return $this->getUlcercolor();
                break;
            case 56:
                return $this->getUlceronhead();
                break;
            case 57:
                return $this->getDorsalulcer();
                break;
            case 58:
                return $this->getUlcerondorsalfin();
                break;
            case 59:
                return $this->getUlceroncaudalfin();
                break;
            case 60:
                return $this->getUlcerontrunk();
                break;
            case 61:
                return $this->getVentralulcer();
                break;
            case 62:
                return $this->getUlceronanalfin();
                break;
            case 63:
                return $this->getUlceronunpairedf();
                break;
            case 64:
                return $this->getUlcerontail();
                break;
            case 65:
                return $this->getAttachmentsskin2();
                break;
            case 66:
                return $this->getAttachmentonhead();
                break;
            case 67:
                return $this->getDorsalattachments();
                break;
            case 68:
                return $this->getAttondorsalfin();
                break;
            case 69:
                return $this->getAttoncaudalfin();
                break;
            case 70:
                return $this->getAttachmentontrunk();
                break;
            case 71:
                return $this->getVentralattachments();
                break;
            case 72:
                return $this->getAttonanalfin();
                break;
            case 73:
                return $this->getAttonunpairedf();
                break;
            case 74:
                return $this->getAttachmentontail();
                break;
            case 75:
                return $this->getFins1();
                break;
            case 76:
                return $this->getDorsalfin();
                break;
            case 77:
                return $this->getCaudalfin();
                break;
            case 78:
                return $this->getAnalfin();
                break;
            case 79:
                return $this->getUnpairedfins();
                break;
            case 80:
                return $this->getAberrantcolorgills();
                break;
            case 81:
                return $this->getAbercolorgill();
                break;
            case 82:
                return $this->getEyecolor();
                break;
            case 83:
                return $this->getAberrantspotsgill();
                break;
            case 84:
                return $this->getAberrantspotscolor();
                break;
            case 85:
                return $this->getEyespots();
                break;
            case 86:
                return $this->getKnotsongills();
                break;
            case 87:
                return $this->getKnotscolor();
                break;
            case 88:
                return $this->getEyescondition();
                break;
            case 89:
                return $this->getAreasongills();
                break;
            case 90:
                return $this->getAreascolor();
                break;
            case 91:
                return $this->getMucusprodgills();
                break;
            case 92:
                return $this->getConditiongills();
                break;
            case 93:
                return $this->getObjectgills();
                break;
            case 94:
                return $this->getAttachmentgills();
                break;
            case 95:
                return $this->getBellycondition();
                break;
            case 96:
                return $this->getAnuscondition();
                break;
            case 97:
                return $this->getBellylumen();
                break;
            case 98:
                return $this->getAnuscolor();
                break;
            case 99:
                return $this->getBellyworms();
                break;
            case 100:
                return $this->getAnusobject();
                break;
            case 101:
                return $this->getAnusattachments();
                break;
            case 102:
                return $this->getAnusexudates();
                break;
            case 103:
                return $this->getLiveraffl();
                break;
            case 104:
                return $this->getLiversize();
                break;
            case 105:
                return $this->getLiverapp();
                break;
            case 106:
                return $this->getLiverblot();
                break;
            case 107:
                return $this->getLiverblc();
                break;
            case 108:
                return $this->getLiverknots();
                break;
            case 109:
                return $this->getLiverknc();
                break;
            case 110:
                return $this->getSpleenaffl();
                break;
            case 111:
                return $this->getSpleensize();
                break;
            case 112:
                return $this->getSpleenapp();
                break;
            case 113:
                return $this->getSpleenblot();
                break;
            case 114:
                return $this->getSpleenblc();
                break;
            case 115:
                return $this->getSpleenknots();
                break;
            case 116:
                return $this->getSpleenknc();
                break;
            case 117:
                return $this->getKidneyaffl();
                break;
            case 118:
                return $this->getKidneysize();
                break;
            case 119:
                return $this->getKidneyapp();
                break;
            case 120:
                return $this->getKidneyblot();
                break;
            case 121:
                return $this->getKidneyblc();
                break;
            case 122:
                return $this->getKidneyknots();
                break;
            case 123:
                return $this->getKidneyknc();
                break;
            case 124:
                return $this->getSwimbladderaffl();
                break;
            case 125:
                return $this->getSwimbladdersize();
                break;
            case 126:
                return $this->getSwimbladderapp();
                break;
            case 127:
                return $this->getSwimbladderblot();
                break;
            case 128:
                return $this->getSwimbladderblc();
                break;
            case 129:
                return $this->getSwimbladderknots();
                break;
            case 130:
                return $this->getSwimbladderknc();
                break;
            case 131:
                return $this->getIntestineaffl();
                break;
            case 132:
                return $this->getIntestinesize();
                break;
            case 133:
                return $this->getIntestineapp();
                break;
            case 134:
                return $this->getIntestineblot();
                break;
            case 135:
                return $this->getIntestineblc();
                break;
            case 136:
                return $this->getIntestineknots();
                break;
            case 137:
                return $this->getIntestineknc();
                break;
            case 138:
                return $this->getOtherorgans();
                break;
            case 139:
                return $this->getOtherorganssize();
                break;
            case 140:
                return $this->getOtherorgansblot();
                break;
            case 141:
                return $this->getOtherorgansblc();
                break;
            case 142:
                return $this->getOtherorgansknots();
                break;
            case 143:
                return $this->getOtherorgansknc();
                break;
            case 144:
                return $this->getAllorgans();
                break;
            case 145:
                return $this->getAllorgansapp();
                break;
            case 146:
                return $this->getBristeling();
                break;
            case 147:
                return $this->getMortality();
                break;
            case 148:
                return $this->getLoss();
                break;
            case 149:
                return $this->getSkeletondeformation();
                break;
            case 150:
                return $this->getSpring();
                break;
            case 151:
                return $this->getSummer();
                break;
            case 152:
                return $this->getGrowthrate();
                break;
            case 153:
                return $this->getAutumn();
                break;
            case 154:
                return $this->getWinter();
                break;
            case 155:
                return $this->getCondition();
                break;
            case 156:
                return $this->getAberrantactivity();
                break;
            case 157:
                return $this->getActivity();
                break;
            case 158:
                return $this->getAberrantbalance();
                break;
            case 159:
                return $this->getAberrantswmotions();
                break;
            case 160:
                return $this->getSwimmingmotions();
                break;
            case 161:
                return $this->getAberrantbodydirec();
                break;
            case 162:
                return $this->getScraping();
                break;
            case 163:
                return $this->getJumping();
                break;
            case 164:
                return $this->getAberrantfins();
                break;
            case 165:
                return $this->getFins();
                break;
            case 166:
                return $this->getAberrantlocation();
                break;
            case 167:
                return $this->getFishnearsurface();
                break;
            case 168:
                return $this->getInfloworoutflow();
                break;
            case 169:
                return $this->getAberrantappetite();
                break;
            case 170:
                return $this->getOperculum();
                break;
            case 171:
                return $this->getAberrantventilation();
                break;
            case 172:
                return $this->getFast();
                break;
            case 173:
                return $this->getSlow();
                break;
            case 174:
                return $this->getFlat();
                break;
            case 175:
                return $this->getHeavy();
                break;
            case 176:
                return $this->getGaspingair();
                break;
            case 177:
                return $this->getFishafflicted();
                break;
            case 178:
                return $this->getFishafflicted2();
                break;
            case 179:
                return $this->getFishafflicted3();
                break;
            case 180:
                return $this->getEntered();
                break;
            case 181:
                return $this->getDateentered();
                break;
            case 182:
                return $this->getModified();
                break;
            case 183:
                return $this->getDatemodified();
                break;
            case 184:
                return $this->getExpert();
                break;
            case 185:
                return $this->getDatechecked();
                break;
            case 186:
                return $this->getFishafflict();
                break;
            case 187:
                return $this->getSymptom();
                break;
            case 188:
                return $this->getTreatments();
                break;
            case 189:
                return $this->getProphylaxes();
                break;
            case 190:
                return $this->getAddrems();
                break;
            case 191:
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
        if (isset($alreadyDumpedObjects['Disref'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Disref'][serialize($this->getPrimaryKey())] = true;
        $keys = DisrefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDiscode(),
            $keys[1] => $this->getDiseasesrefno(),
            $keys[2] => $this->getDiseasei(),
            $keys[3] => $this->getDiseaseii(),
            $keys[4] => $this->getPic(),
            $keys[5] => $this->getOthernames(),
            $keys[6] => $this->getGermgenus(),
            $keys[7] => $this->getGermspecies(),
            $keys[8] => $this->getGroup(),
            $keys[9] => $this->getSkinfinsafflicted(),
            $keys[10] => $this->getBellyafflicted(),
            $keys[11] => $this->getAberrantbehavior(),
            $keys[12] => $this->getGillsafflicted(),
            $keys[13] => $this->getAnusafflicted(),
            $keys[14] => $this->getOtherbehavior(),
            $keys[15] => $this->getEyesafflicted(),
            $keys[16] => $this->getVisceraafflicted(),
            $keys[17] => $this->getOthersymptoms(),
            $keys[18] => $this->getAberrantcolor(),
            $keys[19] => $this->getAberrantcoat(),
            $keys[20] => $this->getAberrantmuscusprod(),
            $keys[21] => $this->getSpots(),
            $keys[22] => $this->getSpotscolor(),
            $keys[23] => $this->getSpotsonhead(),
            $keys[24] => $this->getDorsalspots(),
            $keys[25] => $this->getSpotsondorsalfin(),
            $keys[26] => $this->getSpotsoncaudalfin(),
            $keys[27] => $this->getSpotsontrunk(),
            $keys[28] => $this->getVentralspots(),
            $keys[29] => $this->getSpotsonanalfin(),
            $keys[30] => $this->getSpotsonunpairedf(),
            $keys[31] => $this->getSpotsontail(),
            $keys[32] => $this->getAreas(),
            $keys[33] => $this->getAreacolori(),
            $keys[34] => $this->getAreasonhead(),
            $keys[35] => $this->getDorsalareas(),
            $keys[36] => $this->getAreaondorsalfin(),
            $keys[37] => $this->getAreaoncaudalfin(),
            $keys[38] => $this->getAreasontrunk(),
            $keys[39] => $this->getVentralareas(),
            $keys[40] => $this->getAreaonanalfin(),
            $keys[41] => $this->getAreaonunpairedf(),
            $keys[42] => $this->getAreasontail(),
            $keys[43] => $this->getBoils(),
            $keys[44] => $this->getBoilscolor(),
            $keys[45] => $this->getBoilsonhead(),
            $keys[46] => $this->getDorsalboils(),
            $keys[47] => $this->getBoilsondorsalfin(),
            $keys[48] => $this->getBoilsoncaudalfin(),
            $keys[49] => $this->getBoilsontrunk(),
            $keys[50] => $this->getVentralboils(),
            $keys[51] => $this->getBoilsonanalfin(),
            $keys[52] => $this->getBoilsonunpairedf(),
            $keys[53] => $this->getBoilsontail(),
            $keys[54] => $this->getUlcer(),
            $keys[55] => $this->getUlcercolor(),
            $keys[56] => $this->getUlceronhead(),
            $keys[57] => $this->getDorsalulcer(),
            $keys[58] => $this->getUlcerondorsalfin(),
            $keys[59] => $this->getUlceroncaudalfin(),
            $keys[60] => $this->getUlcerontrunk(),
            $keys[61] => $this->getVentralulcer(),
            $keys[62] => $this->getUlceronanalfin(),
            $keys[63] => $this->getUlceronunpairedf(),
            $keys[64] => $this->getUlcerontail(),
            $keys[65] => $this->getAttachmentsskin2(),
            $keys[66] => $this->getAttachmentonhead(),
            $keys[67] => $this->getDorsalattachments(),
            $keys[68] => $this->getAttondorsalfin(),
            $keys[69] => $this->getAttoncaudalfin(),
            $keys[70] => $this->getAttachmentontrunk(),
            $keys[71] => $this->getVentralattachments(),
            $keys[72] => $this->getAttonanalfin(),
            $keys[73] => $this->getAttonunpairedf(),
            $keys[74] => $this->getAttachmentontail(),
            $keys[75] => $this->getFins1(),
            $keys[76] => $this->getDorsalfin(),
            $keys[77] => $this->getCaudalfin(),
            $keys[78] => $this->getAnalfin(),
            $keys[79] => $this->getUnpairedfins(),
            $keys[80] => $this->getAberrantcolorgills(),
            $keys[81] => $this->getAbercolorgill(),
            $keys[82] => $this->getEyecolor(),
            $keys[83] => $this->getAberrantspotsgill(),
            $keys[84] => $this->getAberrantspotscolor(),
            $keys[85] => $this->getEyespots(),
            $keys[86] => $this->getKnotsongills(),
            $keys[87] => $this->getKnotscolor(),
            $keys[88] => $this->getEyescondition(),
            $keys[89] => $this->getAreasongills(),
            $keys[90] => $this->getAreascolor(),
            $keys[91] => $this->getMucusprodgills(),
            $keys[92] => $this->getConditiongills(),
            $keys[93] => $this->getObjectgills(),
            $keys[94] => $this->getAttachmentgills(),
            $keys[95] => $this->getBellycondition(),
            $keys[96] => $this->getAnuscondition(),
            $keys[97] => $this->getBellylumen(),
            $keys[98] => $this->getAnuscolor(),
            $keys[99] => $this->getBellyworms(),
            $keys[100] => $this->getAnusobject(),
            $keys[101] => $this->getAnusattachments(),
            $keys[102] => $this->getAnusexudates(),
            $keys[103] => $this->getLiveraffl(),
            $keys[104] => $this->getLiversize(),
            $keys[105] => $this->getLiverapp(),
            $keys[106] => $this->getLiverblot(),
            $keys[107] => $this->getLiverblc(),
            $keys[108] => $this->getLiverknots(),
            $keys[109] => $this->getLiverknc(),
            $keys[110] => $this->getSpleenaffl(),
            $keys[111] => $this->getSpleensize(),
            $keys[112] => $this->getSpleenapp(),
            $keys[113] => $this->getSpleenblot(),
            $keys[114] => $this->getSpleenblc(),
            $keys[115] => $this->getSpleenknots(),
            $keys[116] => $this->getSpleenknc(),
            $keys[117] => $this->getKidneyaffl(),
            $keys[118] => $this->getKidneysize(),
            $keys[119] => $this->getKidneyapp(),
            $keys[120] => $this->getKidneyblot(),
            $keys[121] => $this->getKidneyblc(),
            $keys[122] => $this->getKidneyknots(),
            $keys[123] => $this->getKidneyknc(),
            $keys[124] => $this->getSwimbladderaffl(),
            $keys[125] => $this->getSwimbladdersize(),
            $keys[126] => $this->getSwimbladderapp(),
            $keys[127] => $this->getSwimbladderblot(),
            $keys[128] => $this->getSwimbladderblc(),
            $keys[129] => $this->getSwimbladderknots(),
            $keys[130] => $this->getSwimbladderknc(),
            $keys[131] => $this->getIntestineaffl(),
            $keys[132] => $this->getIntestinesize(),
            $keys[133] => $this->getIntestineapp(),
            $keys[134] => $this->getIntestineblot(),
            $keys[135] => $this->getIntestineblc(),
            $keys[136] => $this->getIntestineknots(),
            $keys[137] => $this->getIntestineknc(),
            $keys[138] => $this->getOtherorgans(),
            $keys[139] => $this->getOtherorganssize(),
            $keys[140] => $this->getOtherorgansblot(),
            $keys[141] => $this->getOtherorgansblc(),
            $keys[142] => $this->getOtherorgansknots(),
            $keys[143] => $this->getOtherorgansknc(),
            $keys[144] => $this->getAllorgans(),
            $keys[145] => $this->getAllorgansapp(),
            $keys[146] => $this->getBristeling(),
            $keys[147] => $this->getMortality(),
            $keys[148] => $this->getLoss(),
            $keys[149] => $this->getSkeletondeformation(),
            $keys[150] => $this->getSpring(),
            $keys[151] => $this->getSummer(),
            $keys[152] => $this->getGrowthrate(),
            $keys[153] => $this->getAutumn(),
            $keys[154] => $this->getWinter(),
            $keys[155] => $this->getCondition(),
            $keys[156] => $this->getAberrantactivity(),
            $keys[157] => $this->getActivity(),
            $keys[158] => $this->getAberrantbalance(),
            $keys[159] => $this->getAberrantswmotions(),
            $keys[160] => $this->getSwimmingmotions(),
            $keys[161] => $this->getAberrantbodydirec(),
            $keys[162] => $this->getScraping(),
            $keys[163] => $this->getJumping(),
            $keys[164] => $this->getAberrantfins(),
            $keys[165] => $this->getFins(),
            $keys[166] => $this->getAberrantlocation(),
            $keys[167] => $this->getFishnearsurface(),
            $keys[168] => $this->getInfloworoutflow(),
            $keys[169] => $this->getAberrantappetite(),
            $keys[170] => $this->getOperculum(),
            $keys[171] => $this->getAberrantventilation(),
            $keys[172] => $this->getFast(),
            $keys[173] => $this->getSlow(),
            $keys[174] => $this->getFlat(),
            $keys[175] => $this->getHeavy(),
            $keys[176] => $this->getGaspingair(),
            $keys[177] => $this->getFishafflicted(),
            $keys[178] => $this->getFishafflicted2(),
            $keys[179] => $this->getFishafflicted3(),
            $keys[180] => $this->getEntered(),
            $keys[181] => $this->getDateentered(),
            $keys[182] => $this->getModified(),
            $keys[183] => $this->getDatemodified(),
            $keys[184] => $this->getExpert(),
            $keys[185] => $this->getDatechecked(),
            $keys[186] => $this->getFishafflict(),
            $keys[187] => $this->getSymptom(),
            $keys[188] => $this->getTreatments(),
            $keys[189] => $this->getProphylaxes(),
            $keys[190] => $this->getAddrems(),
            $keys[191] => $this->getTs(),
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
        $pos = DisrefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDiscode($value);
                break;
            case 1:
                $this->setDiseasesrefno($value);
                break;
            case 2:
                $this->setDiseasei($value);
                break;
            case 3:
                $this->setDiseaseii($value);
                break;
            case 4:
                $this->setPic($value);
                break;
            case 5:
                $this->setOthernames($value);
                break;
            case 6:
                $this->setGermgenus($value);
                break;
            case 7:
                $this->setGermspecies($value);
                break;
            case 8:
                $this->setGroup($value);
                break;
            case 9:
                $this->setSkinfinsafflicted($value);
                break;
            case 10:
                $this->setBellyafflicted($value);
                break;
            case 11:
                $this->setAberrantbehavior($value);
                break;
            case 12:
                $this->setGillsafflicted($value);
                break;
            case 13:
                $this->setAnusafflicted($value);
                break;
            case 14:
                $this->setOtherbehavior($value);
                break;
            case 15:
                $this->setEyesafflicted($value);
                break;
            case 16:
                $this->setVisceraafflicted($value);
                break;
            case 17:
                $this->setOthersymptoms($value);
                break;
            case 18:
                $this->setAberrantcolor($value);
                break;
            case 19:
                $this->setAberrantcoat($value);
                break;
            case 20:
                $this->setAberrantmuscusprod($value);
                break;
            case 21:
                $this->setSpots($value);
                break;
            case 22:
                $this->setSpotscolor($value);
                break;
            case 23:
                $this->setSpotsonhead($value);
                break;
            case 24:
                $this->setDorsalspots($value);
                break;
            case 25:
                $this->setSpotsondorsalfin($value);
                break;
            case 26:
                $this->setSpotsoncaudalfin($value);
                break;
            case 27:
                $this->setSpotsontrunk($value);
                break;
            case 28:
                $this->setVentralspots($value);
                break;
            case 29:
                $this->setSpotsonanalfin($value);
                break;
            case 30:
                $this->setSpotsonunpairedf($value);
                break;
            case 31:
                $this->setSpotsontail($value);
                break;
            case 32:
                $this->setAreas($value);
                break;
            case 33:
                $this->setAreacolori($value);
                break;
            case 34:
                $this->setAreasonhead($value);
                break;
            case 35:
                $this->setDorsalareas($value);
                break;
            case 36:
                $this->setAreaondorsalfin($value);
                break;
            case 37:
                $this->setAreaoncaudalfin($value);
                break;
            case 38:
                $this->setAreasontrunk($value);
                break;
            case 39:
                $this->setVentralareas($value);
                break;
            case 40:
                $this->setAreaonanalfin($value);
                break;
            case 41:
                $this->setAreaonunpairedf($value);
                break;
            case 42:
                $this->setAreasontail($value);
                break;
            case 43:
                $this->setBoils($value);
                break;
            case 44:
                $this->setBoilscolor($value);
                break;
            case 45:
                $this->setBoilsonhead($value);
                break;
            case 46:
                $this->setDorsalboils($value);
                break;
            case 47:
                $this->setBoilsondorsalfin($value);
                break;
            case 48:
                $this->setBoilsoncaudalfin($value);
                break;
            case 49:
                $this->setBoilsontrunk($value);
                break;
            case 50:
                $this->setVentralboils($value);
                break;
            case 51:
                $this->setBoilsonanalfin($value);
                break;
            case 52:
                $this->setBoilsonunpairedf($value);
                break;
            case 53:
                $this->setBoilsontail($value);
                break;
            case 54:
                $this->setUlcer($value);
                break;
            case 55:
                $this->setUlcercolor($value);
                break;
            case 56:
                $this->setUlceronhead($value);
                break;
            case 57:
                $this->setDorsalulcer($value);
                break;
            case 58:
                $this->setUlcerondorsalfin($value);
                break;
            case 59:
                $this->setUlceroncaudalfin($value);
                break;
            case 60:
                $this->setUlcerontrunk($value);
                break;
            case 61:
                $this->setVentralulcer($value);
                break;
            case 62:
                $this->setUlceronanalfin($value);
                break;
            case 63:
                $this->setUlceronunpairedf($value);
                break;
            case 64:
                $this->setUlcerontail($value);
                break;
            case 65:
                $this->setAttachmentsskin2($value);
                break;
            case 66:
                $this->setAttachmentonhead($value);
                break;
            case 67:
                $this->setDorsalattachments($value);
                break;
            case 68:
                $this->setAttondorsalfin($value);
                break;
            case 69:
                $this->setAttoncaudalfin($value);
                break;
            case 70:
                $this->setAttachmentontrunk($value);
                break;
            case 71:
                $this->setVentralattachments($value);
                break;
            case 72:
                $this->setAttonanalfin($value);
                break;
            case 73:
                $this->setAttonunpairedf($value);
                break;
            case 74:
                $this->setAttachmentontail($value);
                break;
            case 75:
                $this->setFins1($value);
                break;
            case 76:
                $this->setDorsalfin($value);
                break;
            case 77:
                $this->setCaudalfin($value);
                break;
            case 78:
                $this->setAnalfin($value);
                break;
            case 79:
                $this->setUnpairedfins($value);
                break;
            case 80:
                $this->setAberrantcolorgills($value);
                break;
            case 81:
                $this->setAbercolorgill($value);
                break;
            case 82:
                $this->setEyecolor($value);
                break;
            case 83:
                $this->setAberrantspotsgill($value);
                break;
            case 84:
                $this->setAberrantspotscolor($value);
                break;
            case 85:
                $this->setEyespots($value);
                break;
            case 86:
                $this->setKnotsongills($value);
                break;
            case 87:
                $this->setKnotscolor($value);
                break;
            case 88:
                $this->setEyescondition($value);
                break;
            case 89:
                $this->setAreasongills($value);
                break;
            case 90:
                $this->setAreascolor($value);
                break;
            case 91:
                $this->setMucusprodgills($value);
                break;
            case 92:
                $this->setConditiongills($value);
                break;
            case 93:
                $this->setObjectgills($value);
                break;
            case 94:
                $this->setAttachmentgills($value);
                break;
            case 95:
                $this->setBellycondition($value);
                break;
            case 96:
                $this->setAnuscondition($value);
                break;
            case 97:
                $this->setBellylumen($value);
                break;
            case 98:
                $this->setAnuscolor($value);
                break;
            case 99:
                $this->setBellyworms($value);
                break;
            case 100:
                $this->setAnusobject($value);
                break;
            case 101:
                $this->setAnusattachments($value);
                break;
            case 102:
                $this->setAnusexudates($value);
                break;
            case 103:
                $this->setLiveraffl($value);
                break;
            case 104:
                $this->setLiversize($value);
                break;
            case 105:
                $this->setLiverapp($value);
                break;
            case 106:
                $this->setLiverblot($value);
                break;
            case 107:
                $this->setLiverblc($value);
                break;
            case 108:
                $this->setLiverknots($value);
                break;
            case 109:
                $this->setLiverknc($value);
                break;
            case 110:
                $this->setSpleenaffl($value);
                break;
            case 111:
                $this->setSpleensize($value);
                break;
            case 112:
                $this->setSpleenapp($value);
                break;
            case 113:
                $this->setSpleenblot($value);
                break;
            case 114:
                $this->setSpleenblc($value);
                break;
            case 115:
                $this->setSpleenknots($value);
                break;
            case 116:
                $this->setSpleenknc($value);
                break;
            case 117:
                $this->setKidneyaffl($value);
                break;
            case 118:
                $this->setKidneysize($value);
                break;
            case 119:
                $this->setKidneyapp($value);
                break;
            case 120:
                $this->setKidneyblot($value);
                break;
            case 121:
                $this->setKidneyblc($value);
                break;
            case 122:
                $this->setKidneyknots($value);
                break;
            case 123:
                $this->setKidneyknc($value);
                break;
            case 124:
                $this->setSwimbladderaffl($value);
                break;
            case 125:
                $this->setSwimbladdersize($value);
                break;
            case 126:
                $this->setSwimbladderapp($value);
                break;
            case 127:
                $this->setSwimbladderblot($value);
                break;
            case 128:
                $this->setSwimbladderblc($value);
                break;
            case 129:
                $this->setSwimbladderknots($value);
                break;
            case 130:
                $this->setSwimbladderknc($value);
                break;
            case 131:
                $this->setIntestineaffl($value);
                break;
            case 132:
                $this->setIntestinesize($value);
                break;
            case 133:
                $this->setIntestineapp($value);
                break;
            case 134:
                $this->setIntestineblot($value);
                break;
            case 135:
                $this->setIntestineblc($value);
                break;
            case 136:
                $this->setIntestineknots($value);
                break;
            case 137:
                $this->setIntestineknc($value);
                break;
            case 138:
                $this->setOtherorgans($value);
                break;
            case 139:
                $this->setOtherorganssize($value);
                break;
            case 140:
                $this->setOtherorgansblot($value);
                break;
            case 141:
                $this->setOtherorgansblc($value);
                break;
            case 142:
                $this->setOtherorgansknots($value);
                break;
            case 143:
                $this->setOtherorgansknc($value);
                break;
            case 144:
                $this->setAllorgans($value);
                break;
            case 145:
                $this->setAllorgansapp($value);
                break;
            case 146:
                $this->setBristeling($value);
                break;
            case 147:
                $this->setMortality($value);
                break;
            case 148:
                $this->setLoss($value);
                break;
            case 149:
                $this->setSkeletondeformation($value);
                break;
            case 150:
                $this->setSpring($value);
                break;
            case 151:
                $this->setSummer($value);
                break;
            case 152:
                $this->setGrowthrate($value);
                break;
            case 153:
                $this->setAutumn($value);
                break;
            case 154:
                $this->setWinter($value);
                break;
            case 155:
                $this->setCondition($value);
                break;
            case 156:
                $this->setAberrantactivity($value);
                break;
            case 157:
                $this->setActivity($value);
                break;
            case 158:
                $this->setAberrantbalance($value);
                break;
            case 159:
                $this->setAberrantswmotions($value);
                break;
            case 160:
                $this->setSwimmingmotions($value);
                break;
            case 161:
                $this->setAberrantbodydirec($value);
                break;
            case 162:
                $this->setScraping($value);
                break;
            case 163:
                $this->setJumping($value);
                break;
            case 164:
                $this->setAberrantfins($value);
                break;
            case 165:
                $this->setFins($value);
                break;
            case 166:
                $this->setAberrantlocation($value);
                break;
            case 167:
                $this->setFishnearsurface($value);
                break;
            case 168:
                $this->setInfloworoutflow($value);
                break;
            case 169:
                $this->setAberrantappetite($value);
                break;
            case 170:
                $this->setOperculum($value);
                break;
            case 171:
                $this->setAberrantventilation($value);
                break;
            case 172:
                $this->setFast($value);
                break;
            case 173:
                $this->setSlow($value);
                break;
            case 174:
                $this->setFlat($value);
                break;
            case 175:
                $this->setHeavy($value);
                break;
            case 176:
                $this->setGaspingair($value);
                break;
            case 177:
                $this->setFishafflicted($value);
                break;
            case 178:
                $this->setFishafflicted2($value);
                break;
            case 179:
                $this->setFishafflicted3($value);
                break;
            case 180:
                $this->setEntered($value);
                break;
            case 181:
                $this->setDateentered($value);
                break;
            case 182:
                $this->setModified($value);
                break;
            case 183:
                $this->setDatemodified($value);
                break;
            case 184:
                $this->setExpert($value);
                break;
            case 185:
                $this->setDatechecked($value);
                break;
            case 186:
                $this->setFishafflict($value);
                break;
            case 187:
                $this->setSymptom($value);
                break;
            case 188:
                $this->setTreatments($value);
                break;
            case 189:
                $this->setProphylaxes($value);
                break;
            case 190:
                $this->setAddrems($value);
                break;
            case 191:
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
        $keys = DisrefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setDiscode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDiseasesrefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDiseasei($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDiseaseii($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPic($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOthernames($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGermgenus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGermspecies($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setGroup($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSkinfinsafflicted($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBellyafflicted($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAberrantbehavior($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setGillsafflicted($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAnusafflicted($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOtherbehavior($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEyesafflicted($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setVisceraafflicted($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOthersymptoms($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAberrantcolor($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAberrantcoat($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAberrantmuscusprod($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSpots($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSpotscolor($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setSpotsonhead($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDorsalspots($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSpotsondorsalfin($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSpotsoncaudalfin($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setSpotsontrunk($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setVentralspots($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setSpotsonanalfin($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setSpotsonunpairedf($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setSpotsontail($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setAreas($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setAreacolori($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAreasonhead($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDorsalareas($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setAreaondorsalfin($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setAreaoncaudalfin($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setAreasontrunk($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setVentralareas($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setAreaonanalfin($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setAreaonunpairedf($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAreasontail($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setBoils($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setBoilscolor($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setBoilsonhead($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setDorsalboils($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setBoilsondorsalfin($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setBoilsoncaudalfin($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setBoilsontrunk($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setVentralboils($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setBoilsonanalfin($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setBoilsonunpairedf($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setBoilsontail($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setUlcer($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setUlcercolor($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setUlceronhead($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDorsalulcer($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setUlcerondorsalfin($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setUlceroncaudalfin($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setUlcerontrunk($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setVentralulcer($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setUlceronanalfin($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setUlceronunpairedf($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setUlcerontail($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setAttachmentsskin2($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setAttachmentonhead($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDorsalattachments($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setAttondorsalfin($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setAttoncaudalfin($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setAttachmentontrunk($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setVentralattachments($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setAttonanalfin($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setAttonunpairedf($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setAttachmentontail($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setFins1($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setDorsalfin($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setCaudalfin($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setAnalfin($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setUnpairedfins($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setAberrantcolorgills($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setAbercolorgill($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setEyecolor($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setAberrantspotsgill($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setAberrantspotscolor($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setEyespots($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setKnotsongills($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setKnotscolor($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setEyescondition($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setAreasongills($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setAreascolor($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setMucusprodgills($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setConditiongills($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setObjectgills($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setAttachmentgills($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setBellycondition($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setAnuscondition($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setBellylumen($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setAnuscolor($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setBellyworms($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setAnusobject($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setAnusattachments($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setAnusexudates($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setLiveraffl($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setLiversize($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setLiverapp($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setLiverblot($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setLiverblc($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setLiverknots($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setLiverknc($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setSpleenaffl($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setSpleensize($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setSpleenapp($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setSpleenblot($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setSpleenblc($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setSpleenknots($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setSpleenknc($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setKidneyaffl($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setKidneysize($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setKidneyapp($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setKidneyblot($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setKidneyblc($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setKidneyknots($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setKidneyknc($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setSwimbladderaffl($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setSwimbladdersize($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setSwimbladderapp($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setSwimbladderblot($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setSwimbladderblc($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setSwimbladderknots($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setSwimbladderknc($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setIntestineaffl($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setIntestinesize($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setIntestineapp($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setIntestineblot($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setIntestineblc($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setIntestineknots($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setIntestineknc($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setOtherorgans($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setOtherorganssize($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setOtherorgansblot($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setOtherorgansblc($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setOtherorgansknots($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setOtherorgansknc($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setAllorgans($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setAllorgansapp($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setBristeling($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setMortality($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setLoss($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setSkeletondeformation($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setSpring($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setSummer($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setGrowthrate($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setAutumn($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setWinter($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setCondition($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setAberrantactivity($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setActivity($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setAberrantbalance($arr[$keys[158]]);
        if (array_key_exists($keys[159], $arr)) $this->setAberrantswmotions($arr[$keys[159]]);
        if (array_key_exists($keys[160], $arr)) $this->setSwimmingmotions($arr[$keys[160]]);
        if (array_key_exists($keys[161], $arr)) $this->setAberrantbodydirec($arr[$keys[161]]);
        if (array_key_exists($keys[162], $arr)) $this->setScraping($arr[$keys[162]]);
        if (array_key_exists($keys[163], $arr)) $this->setJumping($arr[$keys[163]]);
        if (array_key_exists($keys[164], $arr)) $this->setAberrantfins($arr[$keys[164]]);
        if (array_key_exists($keys[165], $arr)) $this->setFins($arr[$keys[165]]);
        if (array_key_exists($keys[166], $arr)) $this->setAberrantlocation($arr[$keys[166]]);
        if (array_key_exists($keys[167], $arr)) $this->setFishnearsurface($arr[$keys[167]]);
        if (array_key_exists($keys[168], $arr)) $this->setInfloworoutflow($arr[$keys[168]]);
        if (array_key_exists($keys[169], $arr)) $this->setAberrantappetite($arr[$keys[169]]);
        if (array_key_exists($keys[170], $arr)) $this->setOperculum($arr[$keys[170]]);
        if (array_key_exists($keys[171], $arr)) $this->setAberrantventilation($arr[$keys[171]]);
        if (array_key_exists($keys[172], $arr)) $this->setFast($arr[$keys[172]]);
        if (array_key_exists($keys[173], $arr)) $this->setSlow($arr[$keys[173]]);
        if (array_key_exists($keys[174], $arr)) $this->setFlat($arr[$keys[174]]);
        if (array_key_exists($keys[175], $arr)) $this->setHeavy($arr[$keys[175]]);
        if (array_key_exists($keys[176], $arr)) $this->setGaspingair($arr[$keys[176]]);
        if (array_key_exists($keys[177], $arr)) $this->setFishafflicted($arr[$keys[177]]);
        if (array_key_exists($keys[178], $arr)) $this->setFishafflicted2($arr[$keys[178]]);
        if (array_key_exists($keys[179], $arr)) $this->setFishafflicted3($arr[$keys[179]]);
        if (array_key_exists($keys[180], $arr)) $this->setEntered($arr[$keys[180]]);
        if (array_key_exists($keys[181], $arr)) $this->setDateentered($arr[$keys[181]]);
        if (array_key_exists($keys[182], $arr)) $this->setModified($arr[$keys[182]]);
        if (array_key_exists($keys[183], $arr)) $this->setDatemodified($arr[$keys[183]]);
        if (array_key_exists($keys[184], $arr)) $this->setExpert($arr[$keys[184]]);
        if (array_key_exists($keys[185], $arr)) $this->setDatechecked($arr[$keys[185]]);
        if (array_key_exists($keys[186], $arr)) $this->setFishafflict($arr[$keys[186]]);
        if (array_key_exists($keys[187], $arr)) $this->setSymptom($arr[$keys[187]]);
        if (array_key_exists($keys[188], $arr)) $this->setTreatments($arr[$keys[188]]);
        if (array_key_exists($keys[189], $arr)) $this->setProphylaxes($arr[$keys[189]]);
        if (array_key_exists($keys[190], $arr)) $this->setAddrems($arr[$keys[190]]);
        if (array_key_exists($keys[191], $arr)) $this->setTs($arr[$keys[191]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DisrefPeer::DATABASE_NAME);

        if ($this->isColumnModified(DisrefPeer::DISCODE)) $criteria->add(DisrefPeer::DISCODE, $this->discode);
        if ($this->isColumnModified(DisrefPeer::DISEASESREFNO)) $criteria->add(DisrefPeer::DISEASESREFNO, $this->diseasesrefno);
        if ($this->isColumnModified(DisrefPeer::DISEASEI)) $criteria->add(DisrefPeer::DISEASEI, $this->diseasei);
        if ($this->isColumnModified(DisrefPeer::DISEASEII)) $criteria->add(DisrefPeer::DISEASEII, $this->diseaseii);
        if ($this->isColumnModified(DisrefPeer::PIC)) $criteria->add(DisrefPeer::PIC, $this->pic);
        if ($this->isColumnModified(DisrefPeer::OTHERNAMES)) $criteria->add(DisrefPeer::OTHERNAMES, $this->othernames);
        if ($this->isColumnModified(DisrefPeer::GERMGENUS)) $criteria->add(DisrefPeer::GERMGENUS, $this->germgenus);
        if ($this->isColumnModified(DisrefPeer::GERMSPECIES)) $criteria->add(DisrefPeer::GERMSPECIES, $this->germspecies);
        if ($this->isColumnModified(DisrefPeer::GROUP)) $criteria->add(DisrefPeer::GROUP, $this->group);
        if ($this->isColumnModified(DisrefPeer::SKINFINSAFFLICTED)) $criteria->add(DisrefPeer::SKINFINSAFFLICTED, $this->skinfinsafflicted);
        if ($this->isColumnModified(DisrefPeer::BELLYAFFLICTED)) $criteria->add(DisrefPeer::BELLYAFFLICTED, $this->bellyafflicted);
        if ($this->isColumnModified(DisrefPeer::ABERRANTBEHAVIOR)) $criteria->add(DisrefPeer::ABERRANTBEHAVIOR, $this->aberrantbehavior);
        if ($this->isColumnModified(DisrefPeer::GILLSAFFLICTED)) $criteria->add(DisrefPeer::GILLSAFFLICTED, $this->gillsafflicted);
        if ($this->isColumnModified(DisrefPeer::ANUSAFFLICTED)) $criteria->add(DisrefPeer::ANUSAFFLICTED, $this->anusafflicted);
        if ($this->isColumnModified(DisrefPeer::OTHERBEHAVIOR)) $criteria->add(DisrefPeer::OTHERBEHAVIOR, $this->otherbehavior);
        if ($this->isColumnModified(DisrefPeer::EYESAFFLICTED)) $criteria->add(DisrefPeer::EYESAFFLICTED, $this->eyesafflicted);
        if ($this->isColumnModified(DisrefPeer::VISCERAAFFLICTED)) $criteria->add(DisrefPeer::VISCERAAFFLICTED, $this->visceraafflicted);
        if ($this->isColumnModified(DisrefPeer::OTHERSYMPTOMS)) $criteria->add(DisrefPeer::OTHERSYMPTOMS, $this->othersymptoms);
        if ($this->isColumnModified(DisrefPeer::ABERRANTCOLOR)) $criteria->add(DisrefPeer::ABERRANTCOLOR, $this->aberrantcolor);
        if ($this->isColumnModified(DisrefPeer::ABERRANTCOAT)) $criteria->add(DisrefPeer::ABERRANTCOAT, $this->aberrantcoat);
        if ($this->isColumnModified(DisrefPeer::ABERRANTMUSCUSPROD)) $criteria->add(DisrefPeer::ABERRANTMUSCUSPROD, $this->aberrantmuscusprod);
        if ($this->isColumnModified(DisrefPeer::SPOTS)) $criteria->add(DisrefPeer::SPOTS, $this->spots);
        if ($this->isColumnModified(DisrefPeer::SPOTSCOLOR)) $criteria->add(DisrefPeer::SPOTSCOLOR, $this->spotscolor);
        if ($this->isColumnModified(DisrefPeer::SPOTSONHEAD)) $criteria->add(DisrefPeer::SPOTSONHEAD, $this->spotsonhead);
        if ($this->isColumnModified(DisrefPeer::DORSALSPOTS)) $criteria->add(DisrefPeer::DORSALSPOTS, $this->dorsalspots);
        if ($this->isColumnModified(DisrefPeer::SPOTSONDORSALFIN)) $criteria->add(DisrefPeer::SPOTSONDORSALFIN, $this->spotsondorsalfin);
        if ($this->isColumnModified(DisrefPeer::SPOTSONCAUDALFIN)) $criteria->add(DisrefPeer::SPOTSONCAUDALFIN, $this->spotsoncaudalfin);
        if ($this->isColumnModified(DisrefPeer::SPOTSONTRUNK)) $criteria->add(DisrefPeer::SPOTSONTRUNK, $this->spotsontrunk);
        if ($this->isColumnModified(DisrefPeer::VENTRALSPOTS)) $criteria->add(DisrefPeer::VENTRALSPOTS, $this->ventralspots);
        if ($this->isColumnModified(DisrefPeer::SPOTSONANALFIN)) $criteria->add(DisrefPeer::SPOTSONANALFIN, $this->spotsonanalfin);
        if ($this->isColumnModified(DisrefPeer::SPOTSONUNPAIREDF)) $criteria->add(DisrefPeer::SPOTSONUNPAIREDF, $this->spotsonunpairedf);
        if ($this->isColumnModified(DisrefPeer::SPOTSONTAIL)) $criteria->add(DisrefPeer::SPOTSONTAIL, $this->spotsontail);
        if ($this->isColumnModified(DisrefPeer::AREAS)) $criteria->add(DisrefPeer::AREAS, $this->areas);
        if ($this->isColumnModified(DisrefPeer::AREACOLORI)) $criteria->add(DisrefPeer::AREACOLORI, $this->areacolori);
        if ($this->isColumnModified(DisrefPeer::AREASONHEAD)) $criteria->add(DisrefPeer::AREASONHEAD, $this->areasonhead);
        if ($this->isColumnModified(DisrefPeer::DORSALAREAS)) $criteria->add(DisrefPeer::DORSALAREAS, $this->dorsalareas);
        if ($this->isColumnModified(DisrefPeer::AREAONDORSALFIN)) $criteria->add(DisrefPeer::AREAONDORSALFIN, $this->areaondorsalfin);
        if ($this->isColumnModified(DisrefPeer::AREAONCAUDALFIN)) $criteria->add(DisrefPeer::AREAONCAUDALFIN, $this->areaoncaudalfin);
        if ($this->isColumnModified(DisrefPeer::AREASONTRUNK)) $criteria->add(DisrefPeer::AREASONTRUNK, $this->areasontrunk);
        if ($this->isColumnModified(DisrefPeer::VENTRALAREAS)) $criteria->add(DisrefPeer::VENTRALAREAS, $this->ventralareas);
        if ($this->isColumnModified(DisrefPeer::AREAONANALFIN)) $criteria->add(DisrefPeer::AREAONANALFIN, $this->areaonanalfin);
        if ($this->isColumnModified(DisrefPeer::AREAONUNPAIREDF)) $criteria->add(DisrefPeer::AREAONUNPAIREDF, $this->areaonunpairedf);
        if ($this->isColumnModified(DisrefPeer::AREASONTAIL)) $criteria->add(DisrefPeer::AREASONTAIL, $this->areasontail);
        if ($this->isColumnModified(DisrefPeer::BOILS)) $criteria->add(DisrefPeer::BOILS, $this->boils);
        if ($this->isColumnModified(DisrefPeer::BOILSCOLOR)) $criteria->add(DisrefPeer::BOILSCOLOR, $this->boilscolor);
        if ($this->isColumnModified(DisrefPeer::BOILSONHEAD)) $criteria->add(DisrefPeer::BOILSONHEAD, $this->boilsonhead);
        if ($this->isColumnModified(DisrefPeer::DORSALBOILS)) $criteria->add(DisrefPeer::DORSALBOILS, $this->dorsalboils);
        if ($this->isColumnModified(DisrefPeer::BOILSONDORSALFIN)) $criteria->add(DisrefPeer::BOILSONDORSALFIN, $this->boilsondorsalfin);
        if ($this->isColumnModified(DisrefPeer::BOILSONCAUDALFIN)) $criteria->add(DisrefPeer::BOILSONCAUDALFIN, $this->boilsoncaudalfin);
        if ($this->isColumnModified(DisrefPeer::BOILSONTRUNK)) $criteria->add(DisrefPeer::BOILSONTRUNK, $this->boilsontrunk);
        if ($this->isColumnModified(DisrefPeer::VENTRALBOILS)) $criteria->add(DisrefPeer::VENTRALBOILS, $this->ventralboils);
        if ($this->isColumnModified(DisrefPeer::BOILSONANALFIN)) $criteria->add(DisrefPeer::BOILSONANALFIN, $this->boilsonanalfin);
        if ($this->isColumnModified(DisrefPeer::BOILSONUNPAIREDF)) $criteria->add(DisrefPeer::BOILSONUNPAIREDF, $this->boilsonunpairedf);
        if ($this->isColumnModified(DisrefPeer::BOILSONTAIL)) $criteria->add(DisrefPeer::BOILSONTAIL, $this->boilsontail);
        if ($this->isColumnModified(DisrefPeer::ULCER)) $criteria->add(DisrefPeer::ULCER, $this->ulcer);
        if ($this->isColumnModified(DisrefPeer::ULCERCOLOR)) $criteria->add(DisrefPeer::ULCERCOLOR, $this->ulcercolor);
        if ($this->isColumnModified(DisrefPeer::ULCERONHEAD)) $criteria->add(DisrefPeer::ULCERONHEAD, $this->ulceronhead);
        if ($this->isColumnModified(DisrefPeer::DORSALULCER)) $criteria->add(DisrefPeer::DORSALULCER, $this->dorsalulcer);
        if ($this->isColumnModified(DisrefPeer::ULCERONDORSALFIN)) $criteria->add(DisrefPeer::ULCERONDORSALFIN, $this->ulcerondorsalfin);
        if ($this->isColumnModified(DisrefPeer::ULCERONCAUDALFIN)) $criteria->add(DisrefPeer::ULCERONCAUDALFIN, $this->ulceroncaudalfin);
        if ($this->isColumnModified(DisrefPeer::ULCERONTRUNK)) $criteria->add(DisrefPeer::ULCERONTRUNK, $this->ulcerontrunk);
        if ($this->isColumnModified(DisrefPeer::VENTRALULCER)) $criteria->add(DisrefPeer::VENTRALULCER, $this->ventralulcer);
        if ($this->isColumnModified(DisrefPeer::ULCERONANALFIN)) $criteria->add(DisrefPeer::ULCERONANALFIN, $this->ulceronanalfin);
        if ($this->isColumnModified(DisrefPeer::ULCERONUNPAIREDF)) $criteria->add(DisrefPeer::ULCERONUNPAIREDF, $this->ulceronunpairedf);
        if ($this->isColumnModified(DisrefPeer::ULCERONTAIL)) $criteria->add(DisrefPeer::ULCERONTAIL, $this->ulcerontail);
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTSSKIN2)) $criteria->add(DisrefPeer::ATTACHMENTSSKIN2, $this->attachmentsskin2);
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTONHEAD)) $criteria->add(DisrefPeer::ATTACHMENTONHEAD, $this->attachmentonhead);
        if ($this->isColumnModified(DisrefPeer::DORSALATTACHMENTS)) $criteria->add(DisrefPeer::DORSALATTACHMENTS, $this->dorsalattachments);
        if ($this->isColumnModified(DisrefPeer::ATTONDORSALFIN)) $criteria->add(DisrefPeer::ATTONDORSALFIN, $this->attondorsalfin);
        if ($this->isColumnModified(DisrefPeer::ATTONCAUDALFIN)) $criteria->add(DisrefPeer::ATTONCAUDALFIN, $this->attoncaudalfin);
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTONTRUNK)) $criteria->add(DisrefPeer::ATTACHMENTONTRUNK, $this->attachmentontrunk);
        if ($this->isColumnModified(DisrefPeer::VENTRALATTACHMENTS)) $criteria->add(DisrefPeer::VENTRALATTACHMENTS, $this->ventralattachments);
        if ($this->isColumnModified(DisrefPeer::ATTONANALFIN)) $criteria->add(DisrefPeer::ATTONANALFIN, $this->attonanalfin);
        if ($this->isColumnModified(DisrefPeer::ATTONUNPAIREDF)) $criteria->add(DisrefPeer::ATTONUNPAIREDF, $this->attonunpairedf);
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTONTAIL)) $criteria->add(DisrefPeer::ATTACHMENTONTAIL, $this->attachmentontail);
        if ($this->isColumnModified(DisrefPeer::FINS1)) $criteria->add(DisrefPeer::FINS1, $this->fins1);
        if ($this->isColumnModified(DisrefPeer::DORSALFIN)) $criteria->add(DisrefPeer::DORSALFIN, $this->dorsalfin);
        if ($this->isColumnModified(DisrefPeer::CAUDALFIN)) $criteria->add(DisrefPeer::CAUDALFIN, $this->caudalfin);
        if ($this->isColumnModified(DisrefPeer::ANALFIN)) $criteria->add(DisrefPeer::ANALFIN, $this->analfin);
        if ($this->isColumnModified(DisrefPeer::UNPAIREDFINS)) $criteria->add(DisrefPeer::UNPAIREDFINS, $this->unpairedfins);
        if ($this->isColumnModified(DisrefPeer::ABERRANTCOLORGILLS)) $criteria->add(DisrefPeer::ABERRANTCOLORGILLS, $this->aberrantcolorgills);
        if ($this->isColumnModified(DisrefPeer::ABERCOLORGILL)) $criteria->add(DisrefPeer::ABERCOLORGILL, $this->abercolorgill);
        if ($this->isColumnModified(DisrefPeer::EYECOLOR)) $criteria->add(DisrefPeer::EYECOLOR, $this->eyecolor);
        if ($this->isColumnModified(DisrefPeer::ABERRANTSPOTSGILL)) $criteria->add(DisrefPeer::ABERRANTSPOTSGILL, $this->aberrantspotsgill);
        if ($this->isColumnModified(DisrefPeer::ABERRANTSPOTSCOLOR)) $criteria->add(DisrefPeer::ABERRANTSPOTSCOLOR, $this->aberrantspotscolor);
        if ($this->isColumnModified(DisrefPeer::EYESPOTS)) $criteria->add(DisrefPeer::EYESPOTS, $this->eyespots);
        if ($this->isColumnModified(DisrefPeer::KNOTSONGILLS)) $criteria->add(DisrefPeer::KNOTSONGILLS, $this->knotsongills);
        if ($this->isColumnModified(DisrefPeer::KNOTSCOLOR)) $criteria->add(DisrefPeer::KNOTSCOLOR, $this->knotscolor);
        if ($this->isColumnModified(DisrefPeer::EYESCONDITION)) $criteria->add(DisrefPeer::EYESCONDITION, $this->eyescondition);
        if ($this->isColumnModified(DisrefPeer::AREASONGILLS)) $criteria->add(DisrefPeer::AREASONGILLS, $this->areasongills);
        if ($this->isColumnModified(DisrefPeer::AREASCOLOR)) $criteria->add(DisrefPeer::AREASCOLOR, $this->areascolor);
        if ($this->isColumnModified(DisrefPeer::MUCUSPRODGILLS)) $criteria->add(DisrefPeer::MUCUSPRODGILLS, $this->mucusprodgills);
        if ($this->isColumnModified(DisrefPeer::CONDITIONGILLS)) $criteria->add(DisrefPeer::CONDITIONGILLS, $this->conditiongills);
        if ($this->isColumnModified(DisrefPeer::OBJECTGILLS)) $criteria->add(DisrefPeer::OBJECTGILLS, $this->objectgills);
        if ($this->isColumnModified(DisrefPeer::ATTACHMENTGILLS)) $criteria->add(DisrefPeer::ATTACHMENTGILLS, $this->attachmentgills);
        if ($this->isColumnModified(DisrefPeer::BELLYCONDITION)) $criteria->add(DisrefPeer::BELLYCONDITION, $this->bellycondition);
        if ($this->isColumnModified(DisrefPeer::ANUSCONDITION)) $criteria->add(DisrefPeer::ANUSCONDITION, $this->anuscondition);
        if ($this->isColumnModified(DisrefPeer::BELLYLUMEN)) $criteria->add(DisrefPeer::BELLYLUMEN, $this->bellylumen);
        if ($this->isColumnModified(DisrefPeer::ANUSCOLOR)) $criteria->add(DisrefPeer::ANUSCOLOR, $this->anuscolor);
        if ($this->isColumnModified(DisrefPeer::BELLYWORMS)) $criteria->add(DisrefPeer::BELLYWORMS, $this->bellyworms);
        if ($this->isColumnModified(DisrefPeer::ANUSOBJECT)) $criteria->add(DisrefPeer::ANUSOBJECT, $this->anusobject);
        if ($this->isColumnModified(DisrefPeer::ANUSATTACHMENTS)) $criteria->add(DisrefPeer::ANUSATTACHMENTS, $this->anusattachments);
        if ($this->isColumnModified(DisrefPeer::ANUSEXUDATES)) $criteria->add(DisrefPeer::ANUSEXUDATES, $this->anusexudates);
        if ($this->isColumnModified(DisrefPeer::LIVERAFFL)) $criteria->add(DisrefPeer::LIVERAFFL, $this->liveraffl);
        if ($this->isColumnModified(DisrefPeer::LIVERSIZE)) $criteria->add(DisrefPeer::LIVERSIZE, $this->liversize);
        if ($this->isColumnModified(DisrefPeer::LIVERAPP)) $criteria->add(DisrefPeer::LIVERAPP, $this->liverapp);
        if ($this->isColumnModified(DisrefPeer::LIVERBLOT)) $criteria->add(DisrefPeer::LIVERBLOT, $this->liverblot);
        if ($this->isColumnModified(DisrefPeer::LIVERBLC)) $criteria->add(DisrefPeer::LIVERBLC, $this->liverblc);
        if ($this->isColumnModified(DisrefPeer::LIVERKNOTS)) $criteria->add(DisrefPeer::LIVERKNOTS, $this->liverknots);
        if ($this->isColumnModified(DisrefPeer::LIVERKNC)) $criteria->add(DisrefPeer::LIVERKNC, $this->liverknc);
        if ($this->isColumnModified(DisrefPeer::SPLEENAFFL)) $criteria->add(DisrefPeer::SPLEENAFFL, $this->spleenaffl);
        if ($this->isColumnModified(DisrefPeer::SPLEENSIZE)) $criteria->add(DisrefPeer::SPLEENSIZE, $this->spleensize);
        if ($this->isColumnModified(DisrefPeer::SPLEENAPP)) $criteria->add(DisrefPeer::SPLEENAPP, $this->spleenapp);
        if ($this->isColumnModified(DisrefPeer::SPLEENBLOT)) $criteria->add(DisrefPeer::SPLEENBLOT, $this->spleenblot);
        if ($this->isColumnModified(DisrefPeer::SPLEENBLC)) $criteria->add(DisrefPeer::SPLEENBLC, $this->spleenblc);
        if ($this->isColumnModified(DisrefPeer::SPLEENKNOTS)) $criteria->add(DisrefPeer::SPLEENKNOTS, $this->spleenknots);
        if ($this->isColumnModified(DisrefPeer::SPLEENKNC)) $criteria->add(DisrefPeer::SPLEENKNC, $this->spleenknc);
        if ($this->isColumnModified(DisrefPeer::KIDNEYAFFL)) $criteria->add(DisrefPeer::KIDNEYAFFL, $this->kidneyaffl);
        if ($this->isColumnModified(DisrefPeer::KIDNEYSIZE)) $criteria->add(DisrefPeer::KIDNEYSIZE, $this->kidneysize);
        if ($this->isColumnModified(DisrefPeer::KIDNEYAPP)) $criteria->add(DisrefPeer::KIDNEYAPP, $this->kidneyapp);
        if ($this->isColumnModified(DisrefPeer::KIDNEYBLOT)) $criteria->add(DisrefPeer::KIDNEYBLOT, $this->kidneyblot);
        if ($this->isColumnModified(DisrefPeer::KIDNEYBLC)) $criteria->add(DisrefPeer::KIDNEYBLC, $this->kidneyblc);
        if ($this->isColumnModified(DisrefPeer::KIDNEYKNOTS)) $criteria->add(DisrefPeer::KIDNEYKNOTS, $this->kidneyknots);
        if ($this->isColumnModified(DisrefPeer::KIDNEYKNC)) $criteria->add(DisrefPeer::KIDNEYKNC, $this->kidneyknc);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERAFFL)) $criteria->add(DisrefPeer::SWIMBLADDERAFFL, $this->swimbladderaffl);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERSIZE)) $criteria->add(DisrefPeer::SWIMBLADDERSIZE, $this->swimbladdersize);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERAPP)) $criteria->add(DisrefPeer::SWIMBLADDERAPP, $this->swimbladderapp);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERBLOT)) $criteria->add(DisrefPeer::SWIMBLADDERBLOT, $this->swimbladderblot);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERBLC)) $criteria->add(DisrefPeer::SWIMBLADDERBLC, $this->swimbladderblc);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERKNOTS)) $criteria->add(DisrefPeer::SWIMBLADDERKNOTS, $this->swimbladderknots);
        if ($this->isColumnModified(DisrefPeer::SWIMBLADDERKNC)) $criteria->add(DisrefPeer::SWIMBLADDERKNC, $this->swimbladderknc);
        if ($this->isColumnModified(DisrefPeer::INTESTINEAFFL)) $criteria->add(DisrefPeer::INTESTINEAFFL, $this->intestineaffl);
        if ($this->isColumnModified(DisrefPeer::INTESTINESIZE)) $criteria->add(DisrefPeer::INTESTINESIZE, $this->intestinesize);
        if ($this->isColumnModified(DisrefPeer::INTESTINEAPP)) $criteria->add(DisrefPeer::INTESTINEAPP, $this->intestineapp);
        if ($this->isColumnModified(DisrefPeer::INTESTINEBLOT)) $criteria->add(DisrefPeer::INTESTINEBLOT, $this->intestineblot);
        if ($this->isColumnModified(DisrefPeer::INTESTINEBLC)) $criteria->add(DisrefPeer::INTESTINEBLC, $this->intestineblc);
        if ($this->isColumnModified(DisrefPeer::INTESTINEKNOTS)) $criteria->add(DisrefPeer::INTESTINEKNOTS, $this->intestineknots);
        if ($this->isColumnModified(DisrefPeer::INTESTINEKNC)) $criteria->add(DisrefPeer::INTESTINEKNC, $this->intestineknc);
        if ($this->isColumnModified(DisrefPeer::OTHERORGANS)) $criteria->add(DisrefPeer::OTHERORGANS, $this->otherorgans);
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSSIZE)) $criteria->add(DisrefPeer::OTHERORGANSSIZE, $this->otherorganssize);
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSBLOT)) $criteria->add(DisrefPeer::OTHERORGANSBLOT, $this->otherorgansblot);
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSBLC)) $criteria->add(DisrefPeer::OTHERORGANSBLC, $this->otherorgansblc);
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSKNOTS)) $criteria->add(DisrefPeer::OTHERORGANSKNOTS, $this->otherorgansknots);
        if ($this->isColumnModified(DisrefPeer::OTHERORGANSKNC)) $criteria->add(DisrefPeer::OTHERORGANSKNC, $this->otherorgansknc);
        if ($this->isColumnModified(DisrefPeer::ALLORGANS)) $criteria->add(DisrefPeer::ALLORGANS, $this->allorgans);
        if ($this->isColumnModified(DisrefPeer::ALLORGANSAPP)) $criteria->add(DisrefPeer::ALLORGANSAPP, $this->allorgansapp);
        if ($this->isColumnModified(DisrefPeer::BRISTELING)) $criteria->add(DisrefPeer::BRISTELING, $this->bristeling);
        if ($this->isColumnModified(DisrefPeer::MORTALITY)) $criteria->add(DisrefPeer::MORTALITY, $this->mortality);
        if ($this->isColumnModified(DisrefPeer::LOSS)) $criteria->add(DisrefPeer::LOSS, $this->loss);
        if ($this->isColumnModified(DisrefPeer::SKELETONDEFORMATION)) $criteria->add(DisrefPeer::SKELETONDEFORMATION, $this->skeletondeformation);
        if ($this->isColumnModified(DisrefPeer::SPRING)) $criteria->add(DisrefPeer::SPRING, $this->spring);
        if ($this->isColumnModified(DisrefPeer::SUMMER)) $criteria->add(DisrefPeer::SUMMER, $this->summer);
        if ($this->isColumnModified(DisrefPeer::GROWTHRATE)) $criteria->add(DisrefPeer::GROWTHRATE, $this->growthrate);
        if ($this->isColumnModified(DisrefPeer::AUTUMN)) $criteria->add(DisrefPeer::AUTUMN, $this->autumn);
        if ($this->isColumnModified(DisrefPeer::WINTER)) $criteria->add(DisrefPeer::WINTER, $this->winter);
        if ($this->isColumnModified(DisrefPeer::CONDITION)) $criteria->add(DisrefPeer::CONDITION, $this->condition);
        if ($this->isColumnModified(DisrefPeer::ABERRANTACTIVITY)) $criteria->add(DisrefPeer::ABERRANTACTIVITY, $this->aberrantactivity);
        if ($this->isColumnModified(DisrefPeer::ACTIVITY)) $criteria->add(DisrefPeer::ACTIVITY, $this->activity);
        if ($this->isColumnModified(DisrefPeer::ABERRANTBALANCE)) $criteria->add(DisrefPeer::ABERRANTBALANCE, $this->aberrantbalance);
        if ($this->isColumnModified(DisrefPeer::ABERRANTSWMOTIONS)) $criteria->add(DisrefPeer::ABERRANTSWMOTIONS, $this->aberrantswmotions);
        if ($this->isColumnModified(DisrefPeer::SWIMMINGMOTIONS)) $criteria->add(DisrefPeer::SWIMMINGMOTIONS, $this->swimmingmotions);
        if ($this->isColumnModified(DisrefPeer::ABERRANTBODYDIREC)) $criteria->add(DisrefPeer::ABERRANTBODYDIREC, $this->aberrantbodydirec);
        if ($this->isColumnModified(DisrefPeer::SCRAPING)) $criteria->add(DisrefPeer::SCRAPING, $this->scraping);
        if ($this->isColumnModified(DisrefPeer::JUMPING)) $criteria->add(DisrefPeer::JUMPING, $this->jumping);
        if ($this->isColumnModified(DisrefPeer::ABERRANTFINS)) $criteria->add(DisrefPeer::ABERRANTFINS, $this->aberrantfins);
        if ($this->isColumnModified(DisrefPeer::FINS)) $criteria->add(DisrefPeer::FINS, $this->fins);
        if ($this->isColumnModified(DisrefPeer::ABERRANTLOCATION)) $criteria->add(DisrefPeer::ABERRANTLOCATION, $this->aberrantlocation);
        if ($this->isColumnModified(DisrefPeer::FISHNEARSURFACE)) $criteria->add(DisrefPeer::FISHNEARSURFACE, $this->fishnearsurface);
        if ($this->isColumnModified(DisrefPeer::INFLOWOROUTFLOW)) $criteria->add(DisrefPeer::INFLOWOROUTFLOW, $this->infloworoutflow);
        if ($this->isColumnModified(DisrefPeer::ABERRANTAPPETITE)) $criteria->add(DisrefPeer::ABERRANTAPPETITE, $this->aberrantappetite);
        if ($this->isColumnModified(DisrefPeer::OPERCULUM)) $criteria->add(DisrefPeer::OPERCULUM, $this->operculum);
        if ($this->isColumnModified(DisrefPeer::ABERRANTVENTILATION)) $criteria->add(DisrefPeer::ABERRANTVENTILATION, $this->aberrantventilation);
        if ($this->isColumnModified(DisrefPeer::FAST)) $criteria->add(DisrefPeer::FAST, $this->fast);
        if ($this->isColumnModified(DisrefPeer::SLOW)) $criteria->add(DisrefPeer::SLOW, $this->slow);
        if ($this->isColumnModified(DisrefPeer::FLAT)) $criteria->add(DisrefPeer::FLAT, $this->flat);
        if ($this->isColumnModified(DisrefPeer::HEAVY)) $criteria->add(DisrefPeer::HEAVY, $this->heavy);
        if ($this->isColumnModified(DisrefPeer::GASPINGAIR)) $criteria->add(DisrefPeer::GASPINGAIR, $this->gaspingair);
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICTED)) $criteria->add(DisrefPeer::FISHAFFLICTED, $this->fishafflicted);
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICTED2)) $criteria->add(DisrefPeer::FISHAFFLICTED2, $this->fishafflicted2);
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICTED3)) $criteria->add(DisrefPeer::FISHAFFLICTED3, $this->fishafflicted3);
        if ($this->isColumnModified(DisrefPeer::ENTERED)) $criteria->add(DisrefPeer::ENTERED, $this->entered);
        if ($this->isColumnModified(DisrefPeer::DATEENTERED)) $criteria->add(DisrefPeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(DisrefPeer::MODIFIED)) $criteria->add(DisrefPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(DisrefPeer::DATEMODIFIED)) $criteria->add(DisrefPeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(DisrefPeer::EXPERT)) $criteria->add(DisrefPeer::EXPERT, $this->expert);
        if ($this->isColumnModified(DisrefPeer::DATECHECKED)) $criteria->add(DisrefPeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(DisrefPeer::FISHAFFLICT)) $criteria->add(DisrefPeer::FISHAFFLICT, $this->fishafflict);
        if ($this->isColumnModified(DisrefPeer::SYMPTOM)) $criteria->add(DisrefPeer::SYMPTOM, $this->symptom);
        if ($this->isColumnModified(DisrefPeer::TREATMENTS)) $criteria->add(DisrefPeer::TREATMENTS, $this->treatments);
        if ($this->isColumnModified(DisrefPeer::PROPHYLAXES)) $criteria->add(DisrefPeer::PROPHYLAXES, $this->prophylaxes);
        if ($this->isColumnModified(DisrefPeer::ADDREMS)) $criteria->add(DisrefPeer::ADDREMS, $this->addrems);
        if ($this->isColumnModified(DisrefPeer::TS)) $criteria->add(DisrefPeer::TS, $this->ts);

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
        $criteria = new Criteria(DisrefPeer::DATABASE_NAME);
        $criteria->add(DisrefPeer::DISEASESREFNO, $this->diseasesrefno);
        $criteria->add(DisrefPeer::DISEASEII, $this->diseaseii);
        $criteria->add(DisrefPeer::GERMGENUS, $this->germgenus);

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
        $pks[0] = $this->getDiseasesrefno();
        $pks[1] = $this->getDiseaseii();
        $pks[2] = $this->getGermgenus();

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
        $this->setDiseasesrefno($keys[0]);
        $this->setDiseaseii($keys[1]);
        $this->setGermgenus($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getDiseasesrefno()) && (null === $this->getDiseaseii()) && (null === $this->getGermgenus());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Disref (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDiseasesrefno($this->getDiseasesrefno());
        $copyObj->setDiseasei($this->getDiseasei());
        $copyObj->setDiseaseii($this->getDiseaseii());
        $copyObj->setPic($this->getPic());
        $copyObj->setOthernames($this->getOthernames());
        $copyObj->setGermgenus($this->getGermgenus());
        $copyObj->setGermspecies($this->getGermspecies());
        $copyObj->setGroup($this->getGroup());
        $copyObj->setSkinfinsafflicted($this->getSkinfinsafflicted());
        $copyObj->setBellyafflicted($this->getBellyafflicted());
        $copyObj->setAberrantbehavior($this->getAberrantbehavior());
        $copyObj->setGillsafflicted($this->getGillsafflicted());
        $copyObj->setAnusafflicted($this->getAnusafflicted());
        $copyObj->setOtherbehavior($this->getOtherbehavior());
        $copyObj->setEyesafflicted($this->getEyesafflicted());
        $copyObj->setVisceraafflicted($this->getVisceraafflicted());
        $copyObj->setOthersymptoms($this->getOthersymptoms());
        $copyObj->setAberrantcolor($this->getAberrantcolor());
        $copyObj->setAberrantcoat($this->getAberrantcoat());
        $copyObj->setAberrantmuscusprod($this->getAberrantmuscusprod());
        $copyObj->setSpots($this->getSpots());
        $copyObj->setSpotscolor($this->getSpotscolor());
        $copyObj->setSpotsonhead($this->getSpotsonhead());
        $copyObj->setDorsalspots($this->getDorsalspots());
        $copyObj->setSpotsondorsalfin($this->getSpotsondorsalfin());
        $copyObj->setSpotsoncaudalfin($this->getSpotsoncaudalfin());
        $copyObj->setSpotsontrunk($this->getSpotsontrunk());
        $copyObj->setVentralspots($this->getVentralspots());
        $copyObj->setSpotsonanalfin($this->getSpotsonanalfin());
        $copyObj->setSpotsonunpairedf($this->getSpotsonunpairedf());
        $copyObj->setSpotsontail($this->getSpotsontail());
        $copyObj->setAreas($this->getAreas());
        $copyObj->setAreacolori($this->getAreacolori());
        $copyObj->setAreasonhead($this->getAreasonhead());
        $copyObj->setDorsalareas($this->getDorsalareas());
        $copyObj->setAreaondorsalfin($this->getAreaondorsalfin());
        $copyObj->setAreaoncaudalfin($this->getAreaoncaudalfin());
        $copyObj->setAreasontrunk($this->getAreasontrunk());
        $copyObj->setVentralareas($this->getVentralareas());
        $copyObj->setAreaonanalfin($this->getAreaonanalfin());
        $copyObj->setAreaonunpairedf($this->getAreaonunpairedf());
        $copyObj->setAreasontail($this->getAreasontail());
        $copyObj->setBoils($this->getBoils());
        $copyObj->setBoilscolor($this->getBoilscolor());
        $copyObj->setBoilsonhead($this->getBoilsonhead());
        $copyObj->setDorsalboils($this->getDorsalboils());
        $copyObj->setBoilsondorsalfin($this->getBoilsondorsalfin());
        $copyObj->setBoilsoncaudalfin($this->getBoilsoncaudalfin());
        $copyObj->setBoilsontrunk($this->getBoilsontrunk());
        $copyObj->setVentralboils($this->getVentralboils());
        $copyObj->setBoilsonanalfin($this->getBoilsonanalfin());
        $copyObj->setBoilsonunpairedf($this->getBoilsonunpairedf());
        $copyObj->setBoilsontail($this->getBoilsontail());
        $copyObj->setUlcer($this->getUlcer());
        $copyObj->setUlcercolor($this->getUlcercolor());
        $copyObj->setUlceronhead($this->getUlceronhead());
        $copyObj->setDorsalulcer($this->getDorsalulcer());
        $copyObj->setUlcerondorsalfin($this->getUlcerondorsalfin());
        $copyObj->setUlceroncaudalfin($this->getUlceroncaudalfin());
        $copyObj->setUlcerontrunk($this->getUlcerontrunk());
        $copyObj->setVentralulcer($this->getVentralulcer());
        $copyObj->setUlceronanalfin($this->getUlceronanalfin());
        $copyObj->setUlceronunpairedf($this->getUlceronunpairedf());
        $copyObj->setUlcerontail($this->getUlcerontail());
        $copyObj->setAttachmentsskin2($this->getAttachmentsskin2());
        $copyObj->setAttachmentonhead($this->getAttachmentonhead());
        $copyObj->setDorsalattachments($this->getDorsalattachments());
        $copyObj->setAttondorsalfin($this->getAttondorsalfin());
        $copyObj->setAttoncaudalfin($this->getAttoncaudalfin());
        $copyObj->setAttachmentontrunk($this->getAttachmentontrunk());
        $copyObj->setVentralattachments($this->getVentralattachments());
        $copyObj->setAttonanalfin($this->getAttonanalfin());
        $copyObj->setAttonunpairedf($this->getAttonunpairedf());
        $copyObj->setAttachmentontail($this->getAttachmentontail());
        $copyObj->setFins1($this->getFins1());
        $copyObj->setDorsalfin($this->getDorsalfin());
        $copyObj->setCaudalfin($this->getCaudalfin());
        $copyObj->setAnalfin($this->getAnalfin());
        $copyObj->setUnpairedfins($this->getUnpairedfins());
        $copyObj->setAberrantcolorgills($this->getAberrantcolorgills());
        $copyObj->setAbercolorgill($this->getAbercolorgill());
        $copyObj->setEyecolor($this->getEyecolor());
        $copyObj->setAberrantspotsgill($this->getAberrantspotsgill());
        $copyObj->setAberrantspotscolor($this->getAberrantspotscolor());
        $copyObj->setEyespots($this->getEyespots());
        $copyObj->setKnotsongills($this->getKnotsongills());
        $copyObj->setKnotscolor($this->getKnotscolor());
        $copyObj->setEyescondition($this->getEyescondition());
        $copyObj->setAreasongills($this->getAreasongills());
        $copyObj->setAreascolor($this->getAreascolor());
        $copyObj->setMucusprodgills($this->getMucusprodgills());
        $copyObj->setConditiongills($this->getConditiongills());
        $copyObj->setObjectgills($this->getObjectgills());
        $copyObj->setAttachmentgills($this->getAttachmentgills());
        $copyObj->setBellycondition($this->getBellycondition());
        $copyObj->setAnuscondition($this->getAnuscondition());
        $copyObj->setBellylumen($this->getBellylumen());
        $copyObj->setAnuscolor($this->getAnuscolor());
        $copyObj->setBellyworms($this->getBellyworms());
        $copyObj->setAnusobject($this->getAnusobject());
        $copyObj->setAnusattachments($this->getAnusattachments());
        $copyObj->setAnusexudates($this->getAnusexudates());
        $copyObj->setLiveraffl($this->getLiveraffl());
        $copyObj->setLiversize($this->getLiversize());
        $copyObj->setLiverapp($this->getLiverapp());
        $copyObj->setLiverblot($this->getLiverblot());
        $copyObj->setLiverblc($this->getLiverblc());
        $copyObj->setLiverknots($this->getLiverknots());
        $copyObj->setLiverknc($this->getLiverknc());
        $copyObj->setSpleenaffl($this->getSpleenaffl());
        $copyObj->setSpleensize($this->getSpleensize());
        $copyObj->setSpleenapp($this->getSpleenapp());
        $copyObj->setSpleenblot($this->getSpleenblot());
        $copyObj->setSpleenblc($this->getSpleenblc());
        $copyObj->setSpleenknots($this->getSpleenknots());
        $copyObj->setSpleenknc($this->getSpleenknc());
        $copyObj->setKidneyaffl($this->getKidneyaffl());
        $copyObj->setKidneysize($this->getKidneysize());
        $copyObj->setKidneyapp($this->getKidneyapp());
        $copyObj->setKidneyblot($this->getKidneyblot());
        $copyObj->setKidneyblc($this->getKidneyblc());
        $copyObj->setKidneyknots($this->getKidneyknots());
        $copyObj->setKidneyknc($this->getKidneyknc());
        $copyObj->setSwimbladderaffl($this->getSwimbladderaffl());
        $copyObj->setSwimbladdersize($this->getSwimbladdersize());
        $copyObj->setSwimbladderapp($this->getSwimbladderapp());
        $copyObj->setSwimbladderblot($this->getSwimbladderblot());
        $copyObj->setSwimbladderblc($this->getSwimbladderblc());
        $copyObj->setSwimbladderknots($this->getSwimbladderknots());
        $copyObj->setSwimbladderknc($this->getSwimbladderknc());
        $copyObj->setIntestineaffl($this->getIntestineaffl());
        $copyObj->setIntestinesize($this->getIntestinesize());
        $copyObj->setIntestineapp($this->getIntestineapp());
        $copyObj->setIntestineblot($this->getIntestineblot());
        $copyObj->setIntestineblc($this->getIntestineblc());
        $copyObj->setIntestineknots($this->getIntestineknots());
        $copyObj->setIntestineknc($this->getIntestineknc());
        $copyObj->setOtherorgans($this->getOtherorgans());
        $copyObj->setOtherorganssize($this->getOtherorganssize());
        $copyObj->setOtherorgansblot($this->getOtherorgansblot());
        $copyObj->setOtherorgansblc($this->getOtherorgansblc());
        $copyObj->setOtherorgansknots($this->getOtherorgansknots());
        $copyObj->setOtherorgansknc($this->getOtherorgansknc());
        $copyObj->setAllorgans($this->getAllorgans());
        $copyObj->setAllorgansapp($this->getAllorgansapp());
        $copyObj->setBristeling($this->getBristeling());
        $copyObj->setMortality($this->getMortality());
        $copyObj->setLoss($this->getLoss());
        $copyObj->setSkeletondeformation($this->getSkeletondeformation());
        $copyObj->setSpring($this->getSpring());
        $copyObj->setSummer($this->getSummer());
        $copyObj->setGrowthrate($this->getGrowthrate());
        $copyObj->setAutumn($this->getAutumn());
        $copyObj->setWinter($this->getWinter());
        $copyObj->setCondition($this->getCondition());
        $copyObj->setAberrantactivity($this->getAberrantactivity());
        $copyObj->setActivity($this->getActivity());
        $copyObj->setAberrantbalance($this->getAberrantbalance());
        $copyObj->setAberrantswmotions($this->getAberrantswmotions());
        $copyObj->setSwimmingmotions($this->getSwimmingmotions());
        $copyObj->setAberrantbodydirec($this->getAberrantbodydirec());
        $copyObj->setScraping($this->getScraping());
        $copyObj->setJumping($this->getJumping());
        $copyObj->setAberrantfins($this->getAberrantfins());
        $copyObj->setFins($this->getFins());
        $copyObj->setAberrantlocation($this->getAberrantlocation());
        $copyObj->setFishnearsurface($this->getFishnearsurface());
        $copyObj->setInfloworoutflow($this->getInfloworoutflow());
        $copyObj->setAberrantappetite($this->getAberrantappetite());
        $copyObj->setOperculum($this->getOperculum());
        $copyObj->setAberrantventilation($this->getAberrantventilation());
        $copyObj->setFast($this->getFast());
        $copyObj->setSlow($this->getSlow());
        $copyObj->setFlat($this->getFlat());
        $copyObj->setHeavy($this->getHeavy());
        $copyObj->setGaspingair($this->getGaspingair());
        $copyObj->setFishafflicted($this->getFishafflicted());
        $copyObj->setFishafflicted2($this->getFishafflicted2());
        $copyObj->setFishafflicted3($this->getFishafflicted3());
        $copyObj->setEntered($this->getEntered());
        $copyObj->setDateentered($this->getDateentered());
        $copyObj->setModified($this->getModified());
        $copyObj->setDatemodified($this->getDatemodified());
        $copyObj->setExpert($this->getExpert());
        $copyObj->setDatechecked($this->getDatechecked());
        $copyObj->setFishafflict($this->getFishafflict());
        $copyObj->setSymptom($this->getSymptom());
        $copyObj->setTreatments($this->getTreatments());
        $copyObj->setProphylaxes($this->getProphylaxes());
        $copyObj->setAddrems($this->getAddrems());
        $copyObj->setTs($this->getTs());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setDiscode(NULL); // this is a auto-increment column, so set to default value
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
     * @return Disref Clone of current object.
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
     * @return DisrefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DisrefPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->discode = null;
        $this->diseasesrefno = null;
        $this->diseasei = null;
        $this->diseaseii = null;
        $this->pic = null;
        $this->othernames = null;
        $this->germgenus = null;
        $this->germspecies = null;
        $this->group = null;
        $this->skinfinsafflicted = null;
        $this->bellyafflicted = null;
        $this->aberrantbehavior = null;
        $this->gillsafflicted = null;
        $this->anusafflicted = null;
        $this->otherbehavior = null;
        $this->eyesafflicted = null;
        $this->visceraafflicted = null;
        $this->othersymptoms = null;
        $this->aberrantcolor = null;
        $this->aberrantcoat = null;
        $this->aberrantmuscusprod = null;
        $this->spots = null;
        $this->spotscolor = null;
        $this->spotsonhead = null;
        $this->dorsalspots = null;
        $this->spotsondorsalfin = null;
        $this->spotsoncaudalfin = null;
        $this->spotsontrunk = null;
        $this->ventralspots = null;
        $this->spotsonanalfin = null;
        $this->spotsonunpairedf = null;
        $this->spotsontail = null;
        $this->areas = null;
        $this->areacolori = null;
        $this->areasonhead = null;
        $this->dorsalareas = null;
        $this->areaondorsalfin = null;
        $this->areaoncaudalfin = null;
        $this->areasontrunk = null;
        $this->ventralareas = null;
        $this->areaonanalfin = null;
        $this->areaonunpairedf = null;
        $this->areasontail = null;
        $this->boils = null;
        $this->boilscolor = null;
        $this->boilsonhead = null;
        $this->dorsalboils = null;
        $this->boilsondorsalfin = null;
        $this->boilsoncaudalfin = null;
        $this->boilsontrunk = null;
        $this->ventralboils = null;
        $this->boilsonanalfin = null;
        $this->boilsonunpairedf = null;
        $this->boilsontail = null;
        $this->ulcer = null;
        $this->ulcercolor = null;
        $this->ulceronhead = null;
        $this->dorsalulcer = null;
        $this->ulcerondorsalfin = null;
        $this->ulceroncaudalfin = null;
        $this->ulcerontrunk = null;
        $this->ventralulcer = null;
        $this->ulceronanalfin = null;
        $this->ulceronunpairedf = null;
        $this->ulcerontail = null;
        $this->attachmentsskin2 = null;
        $this->attachmentonhead = null;
        $this->dorsalattachments = null;
        $this->attondorsalfin = null;
        $this->attoncaudalfin = null;
        $this->attachmentontrunk = null;
        $this->ventralattachments = null;
        $this->attonanalfin = null;
        $this->attonunpairedf = null;
        $this->attachmentontail = null;
        $this->fins1 = null;
        $this->dorsalfin = null;
        $this->caudalfin = null;
        $this->analfin = null;
        $this->unpairedfins = null;
        $this->aberrantcolorgills = null;
        $this->abercolorgill = null;
        $this->eyecolor = null;
        $this->aberrantspotsgill = null;
        $this->aberrantspotscolor = null;
        $this->eyespots = null;
        $this->knotsongills = null;
        $this->knotscolor = null;
        $this->eyescondition = null;
        $this->areasongills = null;
        $this->areascolor = null;
        $this->mucusprodgills = null;
        $this->conditiongills = null;
        $this->objectgills = null;
        $this->attachmentgills = null;
        $this->bellycondition = null;
        $this->anuscondition = null;
        $this->bellylumen = null;
        $this->anuscolor = null;
        $this->bellyworms = null;
        $this->anusobject = null;
        $this->anusattachments = null;
        $this->anusexudates = null;
        $this->liveraffl = null;
        $this->liversize = null;
        $this->liverapp = null;
        $this->liverblot = null;
        $this->liverblc = null;
        $this->liverknots = null;
        $this->liverknc = null;
        $this->spleenaffl = null;
        $this->spleensize = null;
        $this->spleenapp = null;
        $this->spleenblot = null;
        $this->spleenblc = null;
        $this->spleenknots = null;
        $this->spleenknc = null;
        $this->kidneyaffl = null;
        $this->kidneysize = null;
        $this->kidneyapp = null;
        $this->kidneyblot = null;
        $this->kidneyblc = null;
        $this->kidneyknots = null;
        $this->kidneyknc = null;
        $this->swimbladderaffl = null;
        $this->swimbladdersize = null;
        $this->swimbladderapp = null;
        $this->swimbladderblot = null;
        $this->swimbladderblc = null;
        $this->swimbladderknots = null;
        $this->swimbladderknc = null;
        $this->intestineaffl = null;
        $this->intestinesize = null;
        $this->intestineapp = null;
        $this->intestineblot = null;
        $this->intestineblc = null;
        $this->intestineknots = null;
        $this->intestineknc = null;
        $this->otherorgans = null;
        $this->otherorganssize = null;
        $this->otherorgansblot = null;
        $this->otherorgansblc = null;
        $this->otherorgansknots = null;
        $this->otherorgansknc = null;
        $this->allorgans = null;
        $this->allorgansapp = null;
        $this->bristeling = null;
        $this->mortality = null;
        $this->loss = null;
        $this->skeletondeformation = null;
        $this->spring = null;
        $this->summer = null;
        $this->growthrate = null;
        $this->autumn = null;
        $this->winter = null;
        $this->condition = null;
        $this->aberrantactivity = null;
        $this->activity = null;
        $this->aberrantbalance = null;
        $this->aberrantswmotions = null;
        $this->swimmingmotions = null;
        $this->aberrantbodydirec = null;
        $this->scraping = null;
        $this->jumping = null;
        $this->aberrantfins = null;
        $this->fins = null;
        $this->aberrantlocation = null;
        $this->fishnearsurface = null;
        $this->infloworoutflow = null;
        $this->aberrantappetite = null;
        $this->operculum = null;
        $this->aberrantventilation = null;
        $this->fast = null;
        $this->slow = null;
        $this->flat = null;
        $this->heavy = null;
        $this->gaspingair = null;
        $this->fishafflicted = null;
        $this->fishafflicted2 = null;
        $this->fishafflicted3 = null;
        $this->entered = null;
        $this->dateentered = null;
        $this->modified = null;
        $this->datemodified = null;
        $this->expert = null;
        $this->datechecked = null;
        $this->fishafflict = null;
        $this->symptom = null;
        $this->treatments = null;
        $this->prophylaxes = null;
        $this->addrems = null;
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
        return (string) $this->exportTo(DisrefPeer::DEFAULT_STRING_FORMAT);
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
