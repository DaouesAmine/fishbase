<?php


/**
 * Base class that represents a row from the 'larvae' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvae extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LarvaePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LarvaePeer
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
     * The value for the larvaerefno field.
     * @var        int
     */
    protected $larvaerefno;

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
     * The value for the larvalarea field.
     * @var        string
     */
    protected $larvalarea;

    /**
     * The value for the placeofdevelopment field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $placeofdevelopment;

    /**
     * The value for the lhmax field.
     * @var        double
     */
    protected $lhmax;

    /**
     * The value for the lbirthmaxref field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lbirthmaxref;

    /**
     * The value for the lhmin field.
     * @var        double
     */
    protected $lhmin;

    /**
     * The value for the lbirthminref field.
     * @var        int
     */
    protected $lbirthminref;

    /**
     * The value for the lhmid field.
     * @var        double
     */
    protected $lhmid;

    /**
     * The value for the lbirthmodref field.
     * @var        int
     */
    protected $lbirthmodref;

    /**
     * The value for the preanallengthmaxy field.
     * @var        double
     */
    protected $preanallengthmaxy;

    /**
     * The value for the preanmaxref field.
     * @var        int
     */
    protected $preanmaxref;

    /**
     * The value for the preanallengthminy field.
     * @var        double
     */
    protected $preanallengthminy;

    /**
     * The value for the preanminref field.
     * @var        int
     */
    protected $preanminref;

    /**
     * The value for the preanallengthmody field.
     * @var        double
     */
    protected $preanallengthmody;

    /**
     * The value for the preanmodref field.
     * @var        int
     */
    protected $preanmodref;

    /**
     * The value for the flexlengthmin field.
     * @var        double
     */
    protected $flexlengthmin;

    /**
     * The value for the flexlengthmod field.
     * @var        double
     */
    protected $flexlengthmod;

    /**
     * The value for the flexlengthmax field.
     * @var        double
     */
    protected $flexlengthmax;

    /**
     * The value for the flexlengthtype field.
     * @var        string
     */
    protected $flexlengthtype;

    /**
     * The value for the flexlengthminref field.
     * @var        int
     */
    protected $flexlengthminref;

    /**
     * The value for the flexlengthmodref field.
     * @var        int
     */
    protected $flexlengthmodref;

    /**
     * The value for the flexlengthmaxref field.
     * @var        int
     */
    protected $flexlengthmaxref;

    /**
     * The value for the translengthmin field.
     * @var        double
     */
    protected $translengthmin;

    /**
     * The value for the translengthmod field.
     * @var        double
     */
    protected $translengthmod;

    /**
     * The value for the translengthmax field.
     * @var        double
     */
    protected $translengthmax;

    /**
     * The value for the translengthtype field.
     * @var        string
     */
    protected $translengthtype;

    /**
     * The value for the translengthminref field.
     * @var        int
     */
    protected $translengthminref;

    /**
     * The value for the translengthmodref field.
     * @var        int
     */
    protected $translengthmodref;

    /**
     * The value for the translengthmaxref field.
     * @var        int
     */
    protected $translengthmaxref;

    /**
     * The value for the larvaldurationmin field.
     * @var        double
     */
    protected $larvaldurationmin;

    /**
     * The value for the larvaldurationminref field.
     * @var        int
     */
    protected $larvaldurationminref;

    /**
     * The value for the larvaldurationmax field.
     * @var        double
     */
    protected $larvaldurationmax;

    /**
     * The value for the larvaldurationmaxref field.
     * @var        int
     */
    protected $larvaldurationmaxref;

    /**
     * The value for the larvaldurationmod field.
     * @var        double
     */
    protected $larvaldurationmod;

    /**
     * The value for the larvaldurationmodref field.
     * @var        int
     */
    protected $larvaldurationmodref;

    /**
     * The value for the shapeofyolksac field.
     * @var        string
     */
    protected $shapeofyolksac;

    /**
     * The value for the yolksacpigm field.
     * @var        string
     */
    protected $yolksacpigm;

    /**
     * The value for the yolksacsegm field.
     * @var        string
     */
    protected $yolksacsegm;

    /**
     * The value for the yolkref field.
     * @var        int
     */
    protected $yolkref;

    /**
     * The value for the oilglobules field.
     * @var        string
     */
    protected $oilglobules;

    /**
     * The value for the oilglobuleposh field.
     * @var        string
     */
    protected $oilglobuleposh;

    /**
     * The value for the oilglobuleposv field.
     * @var        string
     */
    protected $oilglobuleposv;

    /**
     * The value for the oilglobulepigm field.
     * @var        string
     */
    protected $oilglobulepigm;

    /**
     * The value for the rowsontaily field.
     * @var        string
     */
    protected $rowsontaily;

    /**
     * The value for the othermelontaily field.
     * @var        string
     */
    protected $othermelontaily;

    /**
     * The value for the melonheadtrunky field.
     * @var        string
     */
    protected $melonheadtrunky;

    /**
     * The value for the lyamax field.
     * @var        double
     */
    protected $lyamax;

    /**
     * The value for the l1feedmaxref field.
     * @var        int
     */
    protected $l1feedmaxref;

    /**
     * The value for the lyamin field.
     * @var        double
     */
    protected $lyamin;

    /**
     * The value for the l1feedminref field.
     * @var        int
     */
    protected $l1feedminref;

    /**
     * The value for the lyamod field.
     * @var        double
     */
    protected $lyamod;

    /**
     * The value for the l1feedmodref field.
     * @var        int
     */
    protected $l1feedmodref;

    /**
     * The value for the janlarv field.
     * @var        int
     */
    protected $janlarv;

    /**
     * The value for the feblarv field.
     * @var        int
     */
    protected $feblarv;

    /**
     * The value for the marlarv field.
     * @var        int
     */
    protected $marlarv;

    /**
     * The value for the aprlarv field.
     * @var        int
     */
    protected $aprlarv;

    /**
     * The value for the maylarv field.
     * @var        int
     */
    protected $maylarv;

    /**
     * The value for the junlarv field.
     * @var        int
     */
    protected $junlarv;

    /**
     * The value for the jullarv field.
     * @var        int
     */
    protected $jullarv;

    /**
     * The value for the auglarv field.
     * @var        int
     */
    protected $auglarv;

    /**
     * The value for the seplarv field.
     * @var        int
     */
    protected $seplarv;

    /**
     * The value for the octlarv field.
     * @var        int
     */
    protected $octlarv;

    /**
     * The value for the novlarv field.
     * @var        boolean
     */
    protected $novlarv;

    /**
     * The value for the declarv field.
     * @var        int
     */
    protected $declarv;

    /**
     * The value for the presenceref field.
     * @var        int
     */
    protected $presenceref;

    /**
     * The value for the waterdepthmax field.
     * @var        int
     */
    protected $waterdepthmax;

    /**
     * The value for the watertempmax field.
     * @var        double
     */
    protected $watertempmax;

    /**
     * The value for the salinitymax field.
     * @var        double
     */
    protected $salinitymax;

    /**
     * The value for the ph field.
     * @var        double
     */
    protected $ph;

    /**
     * The value for the oxygenmax field.
     * @var        double
     */
    protected $oxygenmax;

    /**
     * The value for the watermaxref field.
     * @var        int
     */
    protected $watermaxref;

    /**
     * The value for the waterdepthmin field.
     * @var        int
     */
    protected $waterdepthmin;

    /**
     * The value for the watertempmin field.
     * @var        double
     */
    protected $watertempmin;

    /**
     * The value for the salinitymin field.
     * @var        double
     */
    protected $salinitymin;

    /**
     * The value for the phmin field.
     * @var        double
     */
    protected $phmin;

    /**
     * The value for the oxygenmin field.
     * @var        double
     */
    protected $oxygenmin;

    /**
     * The value for the waterminref field.
     * @var        int
     */
    protected $waterminref;

    /**
     * The value for the waterdepthmod field.
     * @var        int
     */
    protected $waterdepthmod;

    /**
     * The value for the watertempmod field.
     * @var        double
     */
    protected $watertempmod;

    /**
     * The value for the salinitymod field.
     * @var        double
     */
    protected $salinitymod;

    /**
     * The value for the phmod field.
     * @var        double
     */
    protected $phmod;

    /**
     * The value for the oxygenmod field.
     * @var        double
     */
    protected $oxygenmod;

    /**
     * The value for the watermodref field.
     * @var        int
     */
    protected $watermodref;

    /**
     * The value for the strikingfeature field.
     * @var        string
     */
    protected $strikingfeature;

    /**
     * The value for the larvapic field.
     * @var        string
     */
    protected $larvapic;

    /**
     * The value for the strikingshapelat field.
     * @var        string
     */
    protected $strikingshapelat;

    /**
     * The value for the strikingshapedors field.
     * @var        string
     */
    protected $strikingshapedors;

    /**
     * The value for the bodyform field.
     * @var        string
     */
    protected $bodyform;

    /**
     * The value for the shapeofgut field.
     * @var        string
     */
    protected $shapeofgut;

    /**
     * The value for the gasbladderearly field.
     * @var        string
     */
    protected $gasbladderearly;

    /**
     * The value for the gasbladderlate field.
     * @var        string
     */
    protected $gasbladderlate;

    /**
     * The value for the spinalarmatureearl field.
     * @var        string
     */
    protected $spinalarmatureearl;

    /**
     * The value for the spinalarmaturelate field.
     * @var        string
     */
    protected $spinalarmaturelate;

    /**
     * The value for the rowsontaile field.
     * @var        string
     */
    protected $rowsontaile;

    /**
     * The value for the othermelontaile field.
     * @var        string
     */
    protected $othermelontaile;

    /**
     * The value for the melonheadtrunke field.
     * @var        string
     */
    protected $melonheadtrunke;

    /**
     * The value for the rowsontaill field.
     * @var        string
     */
    protected $rowsontaill;

    /**
     * The value for the othermelontaill field.
     * @var        string
     */
    protected $othermelontaill;

    /**
     * The value for the melonheadtrunkl field.
     * @var        string
     */
    protected $melonheadtrunkl;

    /**
     * The value for the urostyleregion field.
     * @var        string
     */
    protected $urostyleregion;

    /**
     * The value for the urostyleregionlate field.
     * @var        string
     */
    protected $urostyleregionlate;

    /**
     * The value for the peritoneum field.
     * @var        string
     */
    protected $peritoneum;

    /**
     * The value for the pectoralsi field.
     * @var        string
     */
    protected $pectoralsi;

    /**
     * The value for the pectoralsii field.
     * @var        string
     */
    protected $pectoralsii;

    /**
     * The value for the pelvicsi field.
     * @var        string
     */
    protected $pelvicsi;

    /**
     * The value for the pelvicsii field.
     * @var        string
     */
    protected $pelvicsii;

    /**
     * The value for the myomeresmax field.
     * @var        int
     */
    protected $myomeresmax;

    /**
     * The value for the myomeresmin field.
     * @var        int
     */
    protected $myomeresmin;

    /**
     * The value for the myomeresmod field.
     * @var        int
     */
    protected $myomeresmod;

    /**
     * The value for the myomvert field.
     * @var        string
     */
    protected $myomvert;

    /**
     * The value for the totmyomref field.
     * @var        int
     */
    protected $totmyomref;

    /**
     * The value for the myomeresmaxprean field.
     * @var        int
     */
    protected $myomeresmaxprean;

    /**
     * The value for the myomeresminprean field.
     * @var        int
     */
    protected $myomeresminprean;

    /**
     * The value for the myomeresmodprean field.
     * @var        int
     */
    protected $myomeresmodprean;

    /**
     * The value for the myomvert2 field.
     * @var        string
     */
    protected $myomvert2;

    /**
     * The value for the preanmyoref field.
     * @var        int
     */
    protected $preanmyoref;

    /**
     * The value for the rllatepre field.
     * @var        double
     */
    protected $rllatepre;

    /**
     * The value for the rllateflex field.
     * @var        double
     */
    protected $rllateflex;

    /**
     * The value for the rllatepost field.
     * @var        double
     */
    protected $rllatepost;

    /**
     * The value for the rlearlypre field.
     * @var        double
     */
    protected $rlearlypre;

    /**
     * The value for the rlearlyflex field.
     * @var        double
     */
    protected $rlearlyflex;

    /**
     * The value for the rlearlypost field.
     * @var        double
     */
    protected $rlearlypost;

    /**
     * The value for the rlflexpre field.
     * @var        double
     */
    protected $rlflexpre;

    /**
     * The value for the rlflexflex field.
     * @var        double
     */
    protected $rlflexflex;

    /**
     * The value for the rlflexpost field.
     * @var        double
     */
    protected $rlflexpost;

    /**
     * The value for the measurementspreref field.
     * @var        int
     */
    protected $measurementspreref;

    /**
     * The value for the measurementsflexref field.
     * @var        int
     */
    protected $measurementsflexref;

    /**
     * The value for the measurementspostref field.
     * @var        int
     */
    protected $measurementspostref;

    /**
     * The value for the typepre field.
     * @var        string
     */
    protected $typepre;

    /**
     * The value for the typeflex field.
     * @var        string
     */
    protected $typeflex;

    /**
     * The value for the typepost field.
     * @var        string
     */
    protected $typepost;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the preanallengthmaxpre field.
     * @var        double
     */
    protected $preanallengthmaxpre;

    /**
     * The value for the preanallengthmaxflex field.
     * @var        double
     */
    protected $preanallengthmaxflex;

    /**
     * The value for the preanallengthmaxpost field.
     * @var        double
     */
    protected $preanallengthmaxpost;

    /**
     * The value for the preanallengthminpre field.
     * @var        double
     */
    protected $preanallengthminpre;

    /**
     * The value for the preanallengthminflex field.
     * @var        double
     */
    protected $preanallengthminflex;

    /**
     * The value for the preanallengthminpost field.
     * @var        double
     */
    protected $preanallengthminpost;

    /**
     * The value for the preanallengthlitpre field.
     * @var        double
     */
    protected $preanallengthlitpre;

    /**
     * The value for the preanallengthlitflex field.
     * @var        double
     */
    protected $preanallengthlitflex;

    /**
     * The value for the preanallengthlitpost field.
     * @var        double
     */
    protected $preanallengthlitpost;

    /**
     * The value for the prepeclengthmaxpre field.
     * @var        double
     */
    protected $prepeclengthmaxpre;

    /**
     * The value for the prepeclengthmaxflex field.
     * @var        double
     */
    protected $prepeclengthmaxflex;

    /**
     * The value for the prepeclengthmaxpost field.
     * @var        double
     */
    protected $prepeclengthmaxpost;

    /**
     * The value for the prepeclengthminpre field.
     * @var        double
     */
    protected $prepeclengthminpre;

    /**
     * The value for the prepeclengthminflex field.
     * @var        double
     */
    protected $prepeclengthminflex;

    /**
     * The value for the prepeclengthminpost field.
     * @var        double
     */
    protected $prepeclengthminpost;

    /**
     * The value for the prepeclengthlitpre field.
     * @var        double
     */
    protected $prepeclengthlitpre;

    /**
     * The value for the prepeclengthlitflex field.
     * @var        double
     */
    protected $prepeclengthlitflex;

    /**
     * The value for the prepeclengthlitpost field.
     * @var        double
     */
    protected $prepeclengthlitpost;

    /**
     * The value for the preorbitalmaxpre field.
     * @var        double
     */
    protected $preorbitalmaxpre;

    /**
     * The value for the preorbitalmaxflex field.
     * @var        double
     */
    protected $preorbitalmaxflex;

    /**
     * The value for the preorbitalmaxpost field.
     * @var        double
     */
    protected $preorbitalmaxpost;

    /**
     * The value for the preorbitalminpre field.
     * @var        double
     */
    protected $preorbitalminpre;

    /**
     * The value for the preorbitalminflex field.
     * @var        double
     */
    protected $preorbitalminflex;

    /**
     * The value for the preorbitalminpost field.
     * @var        double
     */
    protected $preorbitalminpost;

    /**
     * The value for the preorbitallitpre field.
     * @var        double
     */
    protected $preorbitallitpre;

    /**
     * The value for the preorbitallitflex field.
     * @var        double
     */
    protected $preorbitallitflex;

    /**
     * The value for the preorbitallitpost field.
     * @var        double
     */
    protected $preorbitallitpost;

    /**
     * The value for the diameterofeyemaxpre field.
     * @var        double
     */
    protected $diameterofeyemaxpre;

    /**
     * The value for the diameterofeyemaxflex field.
     * @var        double
     */
    protected $diameterofeyemaxflex;

    /**
     * The value for the diameterofeyemaxpost field.
     * @var        double
     */
    protected $diameterofeyemaxpost;

    /**
     * The value for the diameterofeyeminpre field.
     * @var        double
     */
    protected $diameterofeyeminpre;

    /**
     * The value for the diameterofeyeminflex field.
     * @var        double
     */
    protected $diameterofeyeminflex;

    /**
     * The value for the diameterofeyeminpost field.
     * @var        double
     */
    protected $diameterofeyeminpost;

    /**
     * The value for the diameterofeyelitpre field.
     * @var        double
     */
    protected $diameterofeyelitpre;

    /**
     * The value for the diameterofeyelitflex field.
     * @var        double
     */
    protected $diameterofeyelitflex;

    /**
     * The value for the diameterofeyelitpost field.
     * @var        double
     */
    protected $diameterofeyelitpost;

    /**
     * The value for the deptheyemaxpre field.
     * @var        double
     */
    protected $deptheyemaxpre;

    /**
     * The value for the deptheyemaxflex field.
     * @var        double
     */
    protected $deptheyemaxflex;

    /**
     * The value for the deptheyemaxpost field.
     * @var        double
     */
    protected $deptheyemaxpost;

    /**
     * The value for the deptheyeminpre field.
     * @var        double
     */
    protected $deptheyeminpre;

    /**
     * The value for the deptheyeminflex field.
     * @var        double
     */
    protected $deptheyeminflex;

    /**
     * The value for the deptheyeminpost field.
     * @var        double
     */
    protected $deptheyeminpost;

    /**
     * The value for the deptheyelitpre field.
     * @var        double
     */
    protected $deptheyelitpre;

    /**
     * The value for the deptheyelitflex field.
     * @var        double
     */
    protected $deptheyelitflex;

    /**
     * The value for the deptheyelitpost field.
     * @var        double
     */
    protected $deptheyelitpost;

    /**
     * The value for the depthpectoralmaxpre field.
     * @var        double
     */
    protected $depthpectoralmaxpre;

    /**
     * The value for the depthpectoralmaxflex field.
     * @var        double
     */
    protected $depthpectoralmaxflex;

    /**
     * The value for the depthpectoralmaxpost field.
     * @var        double
     */
    protected $depthpectoralmaxpost;

    /**
     * The value for the depthpectoralminpre field.
     * @var        double
     */
    protected $depthpectoralminpre;

    /**
     * The value for the depthpectoralminflex field.
     * @var        double
     */
    protected $depthpectoralminflex;

    /**
     * The value for the depthpectoralminpost field.
     * @var        double
     */
    protected $depthpectoralminpost;

    /**
     * The value for the depthpectorallitpre field.
     * @var        double
     */
    protected $depthpectorallitpre;

    /**
     * The value for the depthpectorallitflex field.
     * @var        double
     */
    protected $depthpectorallitflex;

    /**
     * The value for the depthpectorallitpost field.
     * @var        double
     */
    protected $depthpectorallitpost;

    /**
     * The value for the depthanusmaxpre field.
     * @var        double
     */
    protected $depthanusmaxpre;

    /**
     * The value for the depthanusmaxflex field.
     * @var        double
     */
    protected $depthanusmaxflex;

    /**
     * The value for the depthanusmaxpost field.
     * @var        double
     */
    protected $depthanusmaxpost;

    /**
     * The value for the depthanusminpre field.
     * @var        double
     */
    protected $depthanusminpre;

    /**
     * The value for the depthanusminflex field.
     * @var        double
     */
    protected $depthanusminflex;

    /**
     * The value for the depthanusminpost field.
     * @var        double
     */
    protected $depthanusminpost;

    /**
     * The value for the depthanuslitpre field.
     * @var        double
     */
    protected $depthanuslitpre;

    /**
     * The value for the depthanuslitflex field.
     * @var        double
     */
    protected $depthanuslitflex;

    /**
     * The value for the depthanuslitpost field.
     * @var        double
     */
    protected $depthanuslitpost;

    /**
     * The value for the addcharyolks field.
     * @var        string
     */
    protected $addcharyolks;

    /**
     * The value for the addcharposts field.
     * @var        string
     */
    protected $addcharposts;

    /**
     * The value for the easeofid field.
     * @var        string
     */
    protected $easeofid;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->placeofdevelopment = '';
        $this->lbirthmaxref = 0;
    }

    /**
     * Initializes internal state of BaseLarvae object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

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
     * Get the [larvaerefno] column value.
     *
     * @return int
     */
    public function getLarvaerefno()
    {

        return $this->larvaerefno;
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
     * Get the [larvalarea] column value.
     *
     * @return string
     */
    public function getLarvalarea()
    {

        return $this->larvalarea;
    }

    /**
     * Get the [placeofdevelopment] column value.
     *
     * @return string
     */
    public function getPlaceofdevelopment()
    {

        return $this->placeofdevelopment;
    }

    /**
     * Get the [lhmax] column value.
     *
     * @return double
     */
    public function getLhmax()
    {

        return $this->lhmax;
    }

    /**
     * Get the [lbirthmaxref] column value.
     *
     * @return int
     */
    public function getLbirthmaxref()
    {

        return $this->lbirthmaxref;
    }

    /**
     * Get the [lhmin] column value.
     *
     * @return double
     */
    public function getLhmin()
    {

        return $this->lhmin;
    }

    /**
     * Get the [lbirthminref] column value.
     *
     * @return int
     */
    public function getLbirthminref()
    {

        return $this->lbirthminref;
    }

    /**
     * Get the [lhmid] column value.
     *
     * @return double
     */
    public function getLhmid()
    {

        return $this->lhmid;
    }

    /**
     * Get the [lbirthmodref] column value.
     *
     * @return int
     */
    public function getLbirthmodref()
    {

        return $this->lbirthmodref;
    }

    /**
     * Get the [preanallengthmaxy] column value.
     *
     * @return double
     */
    public function getPreanallengthmaxy()
    {

        return $this->preanallengthmaxy;
    }

    /**
     * Get the [preanmaxref] column value.
     *
     * @return int
     */
    public function getPreanmaxref()
    {

        return $this->preanmaxref;
    }

    /**
     * Get the [preanallengthminy] column value.
     *
     * @return double
     */
    public function getPreanallengthminy()
    {

        return $this->preanallengthminy;
    }

    /**
     * Get the [preanminref] column value.
     *
     * @return int
     */
    public function getPreanminref()
    {

        return $this->preanminref;
    }

    /**
     * Get the [preanallengthmody] column value.
     *
     * @return double
     */
    public function getPreanallengthmody()
    {

        return $this->preanallengthmody;
    }

    /**
     * Get the [preanmodref] column value.
     *
     * @return int
     */
    public function getPreanmodref()
    {

        return $this->preanmodref;
    }

    /**
     * Get the [flexlengthmin] column value.
     *
     * @return double
     */
    public function getFlexlengthmin()
    {

        return $this->flexlengthmin;
    }

    /**
     * Get the [flexlengthmod] column value.
     *
     * @return double
     */
    public function getFlexlengthmod()
    {

        return $this->flexlengthmod;
    }

    /**
     * Get the [flexlengthmax] column value.
     *
     * @return double
     */
    public function getFlexlengthmax()
    {

        return $this->flexlengthmax;
    }

    /**
     * Get the [flexlengthtype] column value.
     *
     * @return string
     */
    public function getFlexlengthtype()
    {

        return $this->flexlengthtype;
    }

    /**
     * Get the [flexlengthminref] column value.
     *
     * @return int
     */
    public function getFlexlengthminref()
    {

        return $this->flexlengthminref;
    }

    /**
     * Get the [flexlengthmodref] column value.
     *
     * @return int
     */
    public function getFlexlengthmodref()
    {

        return $this->flexlengthmodref;
    }

    /**
     * Get the [flexlengthmaxref] column value.
     *
     * @return int
     */
    public function getFlexlengthmaxref()
    {

        return $this->flexlengthmaxref;
    }

    /**
     * Get the [translengthmin] column value.
     *
     * @return double
     */
    public function getTranslengthmin()
    {

        return $this->translengthmin;
    }

    /**
     * Get the [translengthmod] column value.
     *
     * @return double
     */
    public function getTranslengthmod()
    {

        return $this->translengthmod;
    }

    /**
     * Get the [translengthmax] column value.
     *
     * @return double
     */
    public function getTranslengthmax()
    {

        return $this->translengthmax;
    }

    /**
     * Get the [translengthtype] column value.
     *
     * @return string
     */
    public function getTranslengthtype()
    {

        return $this->translengthtype;
    }

    /**
     * Get the [translengthminref] column value.
     *
     * @return int
     */
    public function getTranslengthminref()
    {

        return $this->translengthminref;
    }

    /**
     * Get the [translengthmodref] column value.
     *
     * @return int
     */
    public function getTranslengthmodref()
    {

        return $this->translengthmodref;
    }

    /**
     * Get the [translengthmaxref] column value.
     *
     * @return int
     */
    public function getTranslengthmaxref()
    {

        return $this->translengthmaxref;
    }

    /**
     * Get the [larvaldurationmin] column value.
     *
     * @return double
     */
    public function getLarvaldurationmin()
    {

        return $this->larvaldurationmin;
    }

    /**
     * Get the [larvaldurationminref] column value.
     *
     * @return int
     */
    public function getLarvaldurationminref()
    {

        return $this->larvaldurationminref;
    }

    /**
     * Get the [larvaldurationmax] column value.
     *
     * @return double
     */
    public function getLarvaldurationmax()
    {

        return $this->larvaldurationmax;
    }

    /**
     * Get the [larvaldurationmaxref] column value.
     *
     * @return int
     */
    public function getLarvaldurationmaxref()
    {

        return $this->larvaldurationmaxref;
    }

    /**
     * Get the [larvaldurationmod] column value.
     *
     * @return double
     */
    public function getLarvaldurationmod()
    {

        return $this->larvaldurationmod;
    }

    /**
     * Get the [larvaldurationmodref] column value.
     *
     * @return int
     */
    public function getLarvaldurationmodref()
    {

        return $this->larvaldurationmodref;
    }

    /**
     * Get the [shapeofyolksac] column value.
     *
     * @return string
     */
    public function getShapeofyolksac()
    {

        return $this->shapeofyolksac;
    }

    /**
     * Get the [yolksacpigm] column value.
     *
     * @return string
     */
    public function getYolksacpigm()
    {

        return $this->yolksacpigm;
    }

    /**
     * Get the [yolksacsegm] column value.
     *
     * @return string
     */
    public function getYolksacsegm()
    {

        return $this->yolksacsegm;
    }

    /**
     * Get the [yolkref] column value.
     *
     * @return int
     */
    public function getYolkref()
    {

        return $this->yolkref;
    }

    /**
     * Get the [oilglobules] column value.
     *
     * @return string
     */
    public function getOilglobules()
    {

        return $this->oilglobules;
    }

    /**
     * Get the [oilglobuleposh] column value.
     *
     * @return string
     */
    public function getOilglobuleposh()
    {

        return $this->oilglobuleposh;
    }

    /**
     * Get the [oilglobuleposv] column value.
     *
     * @return string
     */
    public function getOilglobuleposv()
    {

        return $this->oilglobuleposv;
    }

    /**
     * Get the [oilglobulepigm] column value.
     *
     * @return string
     */
    public function getOilglobulepigm()
    {

        return $this->oilglobulepigm;
    }

    /**
     * Get the [rowsontaily] column value.
     *
     * @return string
     */
    public function getRowsontaily()
    {

        return $this->rowsontaily;
    }

    /**
     * Get the [othermelontaily] column value.
     *
     * @return string
     */
    public function getOthermelontaily()
    {

        return $this->othermelontaily;
    }

    /**
     * Get the [melonheadtrunky] column value.
     *
     * @return string
     */
    public function getMelonheadtrunky()
    {

        return $this->melonheadtrunky;
    }

    /**
     * Get the [lyamax] column value.
     *
     * @return double
     */
    public function getLyamax()
    {

        return $this->lyamax;
    }

    /**
     * Get the [l1feedmaxref] column value.
     *
     * @return int
     */
    public function getL1feedmaxref()
    {

        return $this->l1feedmaxref;
    }

    /**
     * Get the [lyamin] column value.
     *
     * @return double
     */
    public function getLyamin()
    {

        return $this->lyamin;
    }

    /**
     * Get the [l1feedminref] column value.
     *
     * @return int
     */
    public function getL1feedminref()
    {

        return $this->l1feedminref;
    }

    /**
     * Get the [lyamod] column value.
     *
     * @return double
     */
    public function getLyamod()
    {

        return $this->lyamod;
    }

    /**
     * Get the [l1feedmodref] column value.
     *
     * @return int
     */
    public function getL1feedmodref()
    {

        return $this->l1feedmodref;
    }

    /**
     * Get the [janlarv] column value.
     *
     * @return int
     */
    public function getJanlarv()
    {

        return $this->janlarv;
    }

    /**
     * Get the [feblarv] column value.
     *
     * @return int
     */
    public function getFeblarv()
    {

        return $this->feblarv;
    }

    /**
     * Get the [marlarv] column value.
     *
     * @return int
     */
    public function getMarlarv()
    {

        return $this->marlarv;
    }

    /**
     * Get the [aprlarv] column value.
     *
     * @return int
     */
    public function getAprlarv()
    {

        return $this->aprlarv;
    }

    /**
     * Get the [maylarv] column value.
     *
     * @return int
     */
    public function getMaylarv()
    {

        return $this->maylarv;
    }

    /**
     * Get the [junlarv] column value.
     *
     * @return int
     */
    public function getJunlarv()
    {

        return $this->junlarv;
    }

    /**
     * Get the [jullarv] column value.
     *
     * @return int
     */
    public function getJullarv()
    {

        return $this->jullarv;
    }

    /**
     * Get the [auglarv] column value.
     *
     * @return int
     */
    public function getAuglarv()
    {

        return $this->auglarv;
    }

    /**
     * Get the [seplarv] column value.
     *
     * @return int
     */
    public function getSeplarv()
    {

        return $this->seplarv;
    }

    /**
     * Get the [octlarv] column value.
     *
     * @return int
     */
    public function getOctlarv()
    {

        return $this->octlarv;
    }

    /**
     * Get the [novlarv] column value.
     *
     * @return boolean
     */
    public function getNovlarv()
    {

        return $this->novlarv;
    }

    /**
     * Get the [declarv] column value.
     *
     * @return int
     */
    public function getDeclarv()
    {

        return $this->declarv;
    }

    /**
     * Get the [presenceref] column value.
     *
     * @return int
     */
    public function getPresenceref()
    {

        return $this->presenceref;
    }

    /**
     * Get the [waterdepthmax] column value.
     *
     * @return int
     */
    public function getWaterdepthmax()
    {

        return $this->waterdepthmax;
    }

    /**
     * Get the [watertempmax] column value.
     *
     * @return double
     */
    public function getWatertempmax()
    {

        return $this->watertempmax;
    }

    /**
     * Get the [salinitymax] column value.
     *
     * @return double
     */
    public function getSalinitymax()
    {

        return $this->salinitymax;
    }

    /**
     * Get the [ph] column value.
     *
     * @return double
     */
    public function getPh()
    {

        return $this->ph;
    }

    /**
     * Get the [oxygenmax] column value.
     *
     * @return double
     */
    public function getOxygenmax()
    {

        return $this->oxygenmax;
    }

    /**
     * Get the [watermaxref] column value.
     *
     * @return int
     */
    public function getWatermaxref()
    {

        return $this->watermaxref;
    }

    /**
     * Get the [waterdepthmin] column value.
     *
     * @return int
     */
    public function getWaterdepthmin()
    {

        return $this->waterdepthmin;
    }

    /**
     * Get the [watertempmin] column value.
     *
     * @return double
     */
    public function getWatertempmin()
    {

        return $this->watertempmin;
    }

    /**
     * Get the [salinitymin] column value.
     *
     * @return double
     */
    public function getSalinitymin()
    {

        return $this->salinitymin;
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
     * Get the [oxygenmin] column value.
     *
     * @return double
     */
    public function getOxygenmin()
    {

        return $this->oxygenmin;
    }

    /**
     * Get the [waterminref] column value.
     *
     * @return int
     */
    public function getWaterminref()
    {

        return $this->waterminref;
    }

    /**
     * Get the [waterdepthmod] column value.
     *
     * @return int
     */
    public function getWaterdepthmod()
    {

        return $this->waterdepthmod;
    }

    /**
     * Get the [watertempmod] column value.
     *
     * @return double
     */
    public function getWatertempmod()
    {

        return $this->watertempmod;
    }

    /**
     * Get the [salinitymod] column value.
     *
     * @return double
     */
    public function getSalinitymod()
    {

        return $this->salinitymod;
    }

    /**
     * Get the [phmod] column value.
     *
     * @return double
     */
    public function getPhmod()
    {

        return $this->phmod;
    }

    /**
     * Get the [oxygenmod] column value.
     *
     * @return double
     */
    public function getOxygenmod()
    {

        return $this->oxygenmod;
    }

    /**
     * Get the [watermodref] column value.
     *
     * @return int
     */
    public function getWatermodref()
    {

        return $this->watermodref;
    }

    /**
     * Get the [strikingfeature] column value.
     *
     * @return string
     */
    public function getStrikingfeature()
    {

        return $this->strikingfeature;
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
     * Get the [strikingshapelat] column value.
     *
     * @return string
     */
    public function getStrikingshapelat()
    {

        return $this->strikingshapelat;
    }

    /**
     * Get the [strikingshapedors] column value.
     *
     * @return string
     */
    public function getStrikingshapedors()
    {

        return $this->strikingshapedors;
    }

    /**
     * Get the [bodyform] column value.
     *
     * @return string
     */
    public function getBodyform()
    {

        return $this->bodyform;
    }

    /**
     * Get the [shapeofgut] column value.
     *
     * @return string
     */
    public function getShapeofgut()
    {

        return $this->shapeofgut;
    }

    /**
     * Get the [gasbladderearly] column value.
     *
     * @return string
     */
    public function getGasbladderearly()
    {

        return $this->gasbladderearly;
    }

    /**
     * Get the [gasbladderlate] column value.
     *
     * @return string
     */
    public function getGasbladderlate()
    {

        return $this->gasbladderlate;
    }

    /**
     * Get the [spinalarmatureearl] column value.
     *
     * @return string
     */
    public function getSpinalarmatureearl()
    {

        return $this->spinalarmatureearl;
    }

    /**
     * Get the [spinalarmaturelate] column value.
     *
     * @return string
     */
    public function getSpinalarmaturelate()
    {

        return $this->spinalarmaturelate;
    }

    /**
     * Get the [rowsontaile] column value.
     *
     * @return string
     */
    public function getRowsontaile()
    {

        return $this->rowsontaile;
    }

    /**
     * Get the [othermelontaile] column value.
     *
     * @return string
     */
    public function getOthermelontaile()
    {

        return $this->othermelontaile;
    }

    /**
     * Get the [melonheadtrunke] column value.
     *
     * @return string
     */
    public function getMelonheadtrunke()
    {

        return $this->melonheadtrunke;
    }

    /**
     * Get the [rowsontaill] column value.
     *
     * @return string
     */
    public function getRowsontaill()
    {

        return $this->rowsontaill;
    }

    /**
     * Get the [othermelontaill] column value.
     *
     * @return string
     */
    public function getOthermelontaill()
    {

        return $this->othermelontaill;
    }

    /**
     * Get the [melonheadtrunkl] column value.
     *
     * @return string
     */
    public function getMelonheadtrunkl()
    {

        return $this->melonheadtrunkl;
    }

    /**
     * Get the [urostyleregion] column value.
     *
     * @return string
     */
    public function getUrostyleregion()
    {

        return $this->urostyleregion;
    }

    /**
     * Get the [urostyleregionlate] column value.
     *
     * @return string
     */
    public function getUrostyleregionlate()
    {

        return $this->urostyleregionlate;
    }

    /**
     * Get the [peritoneum] column value.
     *
     * @return string
     */
    public function getPeritoneum()
    {

        return $this->peritoneum;
    }

    /**
     * Get the [pectoralsi] column value.
     *
     * @return string
     */
    public function getPectoralsi()
    {

        return $this->pectoralsi;
    }

    /**
     * Get the [pectoralsii] column value.
     *
     * @return string
     */
    public function getPectoralsii()
    {

        return $this->pectoralsii;
    }

    /**
     * Get the [pelvicsi] column value.
     *
     * @return string
     */
    public function getPelvicsi()
    {

        return $this->pelvicsi;
    }

    /**
     * Get the [pelvicsii] column value.
     *
     * @return string
     */
    public function getPelvicsii()
    {

        return $this->pelvicsii;
    }

    /**
     * Get the [myomeresmax] column value.
     *
     * @return int
     */
    public function getMyomeresmax()
    {

        return $this->myomeresmax;
    }

    /**
     * Get the [myomeresmin] column value.
     *
     * @return int
     */
    public function getMyomeresmin()
    {

        return $this->myomeresmin;
    }

    /**
     * Get the [myomeresmod] column value.
     *
     * @return int
     */
    public function getMyomeresmod()
    {

        return $this->myomeresmod;
    }

    /**
     * Get the [myomvert] column value.
     *
     * @return string
     */
    public function getMyomvert()
    {

        return $this->myomvert;
    }

    /**
     * Get the [totmyomref] column value.
     *
     * @return int
     */
    public function getTotmyomref()
    {

        return $this->totmyomref;
    }

    /**
     * Get the [myomeresmaxprean] column value.
     *
     * @return int
     */
    public function getMyomeresmaxprean()
    {

        return $this->myomeresmaxprean;
    }

    /**
     * Get the [myomeresminprean] column value.
     *
     * @return int
     */
    public function getMyomeresminprean()
    {

        return $this->myomeresminprean;
    }

    /**
     * Get the [myomeresmodprean] column value.
     *
     * @return int
     */
    public function getMyomeresmodprean()
    {

        return $this->myomeresmodprean;
    }

    /**
     * Get the [myomvert2] column value.
     *
     * @return string
     */
    public function getMyomvert2()
    {

        return $this->myomvert2;
    }

    /**
     * Get the [preanmyoref] column value.
     *
     * @return int
     */
    public function getPreanmyoref()
    {

        return $this->preanmyoref;
    }

    /**
     * Get the [rllatepre] column value.
     *
     * @return double
     */
    public function getRllatepre()
    {

        return $this->rllatepre;
    }

    /**
     * Get the [rllateflex] column value.
     *
     * @return double
     */
    public function getRllateflex()
    {

        return $this->rllateflex;
    }

    /**
     * Get the [rllatepost] column value.
     *
     * @return double
     */
    public function getRllatepost()
    {

        return $this->rllatepost;
    }

    /**
     * Get the [rlearlypre] column value.
     *
     * @return double
     */
    public function getRlearlypre()
    {

        return $this->rlearlypre;
    }

    /**
     * Get the [rlearlyflex] column value.
     *
     * @return double
     */
    public function getRlearlyflex()
    {

        return $this->rlearlyflex;
    }

    /**
     * Get the [rlearlypost] column value.
     *
     * @return double
     */
    public function getRlearlypost()
    {

        return $this->rlearlypost;
    }

    /**
     * Get the [rlflexpre] column value.
     *
     * @return double
     */
    public function getRlflexpre()
    {

        return $this->rlflexpre;
    }

    /**
     * Get the [rlflexflex] column value.
     *
     * @return double
     */
    public function getRlflexflex()
    {

        return $this->rlflexflex;
    }

    /**
     * Get the [rlflexpost] column value.
     *
     * @return double
     */
    public function getRlflexpost()
    {

        return $this->rlflexpost;
    }

    /**
     * Get the [measurementspreref] column value.
     *
     * @return int
     */
    public function getMeasurementspreref()
    {

        return $this->measurementspreref;
    }

    /**
     * Get the [measurementsflexref] column value.
     *
     * @return int
     */
    public function getMeasurementsflexref()
    {

        return $this->measurementsflexref;
    }

    /**
     * Get the [measurementspostref] column value.
     *
     * @return int
     */
    public function getMeasurementspostref()
    {

        return $this->measurementspostref;
    }

    /**
     * Get the [typepre] column value.
     *
     * @return string
     */
    public function getTypepre()
    {

        return $this->typepre;
    }

    /**
     * Get the [typeflex] column value.
     *
     * @return string
     */
    public function getTypeflex()
    {

        return $this->typeflex;
    }

    /**
     * Get the [typepost] column value.
     *
     * @return string
     */
    public function getTypepost()
    {

        return $this->typepost;
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
     * Get the [preanallengthmaxpre] column value.
     *
     * @return double
     */
    public function getPreanallengthmaxpre()
    {

        return $this->preanallengthmaxpre;
    }

    /**
     * Get the [preanallengthmaxflex] column value.
     *
     * @return double
     */
    public function getPreanallengthmaxflex()
    {

        return $this->preanallengthmaxflex;
    }

    /**
     * Get the [preanallengthmaxpost] column value.
     *
     * @return double
     */
    public function getPreanallengthmaxpost()
    {

        return $this->preanallengthmaxpost;
    }

    /**
     * Get the [preanallengthminpre] column value.
     *
     * @return double
     */
    public function getPreanallengthminpre()
    {

        return $this->preanallengthminpre;
    }

    /**
     * Get the [preanallengthminflex] column value.
     *
     * @return double
     */
    public function getPreanallengthminflex()
    {

        return $this->preanallengthminflex;
    }

    /**
     * Get the [preanallengthminpost] column value.
     *
     * @return double
     */
    public function getPreanallengthminpost()
    {

        return $this->preanallengthminpost;
    }

    /**
     * Get the [preanallengthlitpre] column value.
     *
     * @return double
     */
    public function getPreanallengthlitpre()
    {

        return $this->preanallengthlitpre;
    }

    /**
     * Get the [preanallengthlitflex] column value.
     *
     * @return double
     */
    public function getPreanallengthlitflex()
    {

        return $this->preanallengthlitflex;
    }

    /**
     * Get the [preanallengthlitpost] column value.
     *
     * @return double
     */
    public function getPreanallengthlitpost()
    {

        return $this->preanallengthlitpost;
    }

    /**
     * Get the [prepeclengthmaxpre] column value.
     *
     * @return double
     */
    public function getPrepeclengthmaxpre()
    {

        return $this->prepeclengthmaxpre;
    }

    /**
     * Get the [prepeclengthmaxflex] column value.
     *
     * @return double
     */
    public function getPrepeclengthmaxflex()
    {

        return $this->prepeclengthmaxflex;
    }

    /**
     * Get the [prepeclengthmaxpost] column value.
     *
     * @return double
     */
    public function getPrepeclengthmaxpost()
    {

        return $this->prepeclengthmaxpost;
    }

    /**
     * Get the [prepeclengthminpre] column value.
     *
     * @return double
     */
    public function getPrepeclengthminpre()
    {

        return $this->prepeclengthminpre;
    }

    /**
     * Get the [prepeclengthminflex] column value.
     *
     * @return double
     */
    public function getPrepeclengthminflex()
    {

        return $this->prepeclengthminflex;
    }

    /**
     * Get the [prepeclengthminpost] column value.
     *
     * @return double
     */
    public function getPrepeclengthminpost()
    {

        return $this->prepeclengthminpost;
    }

    /**
     * Get the [prepeclengthlitpre] column value.
     *
     * @return double
     */
    public function getPrepeclengthlitpre()
    {

        return $this->prepeclengthlitpre;
    }

    /**
     * Get the [prepeclengthlitflex] column value.
     *
     * @return double
     */
    public function getPrepeclengthlitflex()
    {

        return $this->prepeclengthlitflex;
    }

    /**
     * Get the [prepeclengthlitpost] column value.
     *
     * @return double
     */
    public function getPrepeclengthlitpost()
    {

        return $this->prepeclengthlitpost;
    }

    /**
     * Get the [preorbitalmaxpre] column value.
     *
     * @return double
     */
    public function getPreorbitalmaxpre()
    {

        return $this->preorbitalmaxpre;
    }

    /**
     * Get the [preorbitalmaxflex] column value.
     *
     * @return double
     */
    public function getPreorbitalmaxflex()
    {

        return $this->preorbitalmaxflex;
    }

    /**
     * Get the [preorbitalmaxpost] column value.
     *
     * @return double
     */
    public function getPreorbitalmaxpost()
    {

        return $this->preorbitalmaxpost;
    }

    /**
     * Get the [preorbitalminpre] column value.
     *
     * @return double
     */
    public function getPreorbitalminpre()
    {

        return $this->preorbitalminpre;
    }

    /**
     * Get the [preorbitalminflex] column value.
     *
     * @return double
     */
    public function getPreorbitalminflex()
    {

        return $this->preorbitalminflex;
    }

    /**
     * Get the [preorbitalminpost] column value.
     *
     * @return double
     */
    public function getPreorbitalminpost()
    {

        return $this->preorbitalminpost;
    }

    /**
     * Get the [preorbitallitpre] column value.
     *
     * @return double
     */
    public function getPreorbitallitpre()
    {

        return $this->preorbitallitpre;
    }

    /**
     * Get the [preorbitallitflex] column value.
     *
     * @return double
     */
    public function getPreorbitallitflex()
    {

        return $this->preorbitallitflex;
    }

    /**
     * Get the [preorbitallitpost] column value.
     *
     * @return double
     */
    public function getPreorbitallitpost()
    {

        return $this->preorbitallitpost;
    }

    /**
     * Get the [diameterofeyemaxpre] column value.
     *
     * @return double
     */
    public function getDiameterofeyemaxpre()
    {

        return $this->diameterofeyemaxpre;
    }

    /**
     * Get the [diameterofeyemaxflex] column value.
     *
     * @return double
     */
    public function getDiameterofeyemaxflex()
    {

        return $this->diameterofeyemaxflex;
    }

    /**
     * Get the [diameterofeyemaxpost] column value.
     *
     * @return double
     */
    public function getDiameterofeyemaxpost()
    {

        return $this->diameterofeyemaxpost;
    }

    /**
     * Get the [diameterofeyeminpre] column value.
     *
     * @return double
     */
    public function getDiameterofeyeminpre()
    {

        return $this->diameterofeyeminpre;
    }

    /**
     * Get the [diameterofeyeminflex] column value.
     *
     * @return double
     */
    public function getDiameterofeyeminflex()
    {

        return $this->diameterofeyeminflex;
    }

    /**
     * Get the [diameterofeyeminpost] column value.
     *
     * @return double
     */
    public function getDiameterofeyeminpost()
    {

        return $this->diameterofeyeminpost;
    }

    /**
     * Get the [diameterofeyelitpre] column value.
     *
     * @return double
     */
    public function getDiameterofeyelitpre()
    {

        return $this->diameterofeyelitpre;
    }

    /**
     * Get the [diameterofeyelitflex] column value.
     *
     * @return double
     */
    public function getDiameterofeyelitflex()
    {

        return $this->diameterofeyelitflex;
    }

    /**
     * Get the [diameterofeyelitpost] column value.
     *
     * @return double
     */
    public function getDiameterofeyelitpost()
    {

        return $this->diameterofeyelitpost;
    }

    /**
     * Get the [deptheyemaxpre] column value.
     *
     * @return double
     */
    public function getDeptheyemaxpre()
    {

        return $this->deptheyemaxpre;
    }

    /**
     * Get the [deptheyemaxflex] column value.
     *
     * @return double
     */
    public function getDeptheyemaxflex()
    {

        return $this->deptheyemaxflex;
    }

    /**
     * Get the [deptheyemaxpost] column value.
     *
     * @return double
     */
    public function getDeptheyemaxpost()
    {

        return $this->deptheyemaxpost;
    }

    /**
     * Get the [deptheyeminpre] column value.
     *
     * @return double
     */
    public function getDeptheyeminpre()
    {

        return $this->deptheyeminpre;
    }

    /**
     * Get the [deptheyeminflex] column value.
     *
     * @return double
     */
    public function getDeptheyeminflex()
    {

        return $this->deptheyeminflex;
    }

    /**
     * Get the [deptheyeminpost] column value.
     *
     * @return double
     */
    public function getDeptheyeminpost()
    {

        return $this->deptheyeminpost;
    }

    /**
     * Get the [deptheyelitpre] column value.
     *
     * @return double
     */
    public function getDeptheyelitpre()
    {

        return $this->deptheyelitpre;
    }

    /**
     * Get the [deptheyelitflex] column value.
     *
     * @return double
     */
    public function getDeptheyelitflex()
    {

        return $this->deptheyelitflex;
    }

    /**
     * Get the [deptheyelitpost] column value.
     *
     * @return double
     */
    public function getDeptheyelitpost()
    {

        return $this->deptheyelitpost;
    }

    /**
     * Get the [depthpectoralmaxpre] column value.
     *
     * @return double
     */
    public function getDepthpectoralmaxpre()
    {

        return $this->depthpectoralmaxpre;
    }

    /**
     * Get the [depthpectoralmaxflex] column value.
     *
     * @return double
     */
    public function getDepthpectoralmaxflex()
    {

        return $this->depthpectoralmaxflex;
    }

    /**
     * Get the [depthpectoralmaxpost] column value.
     *
     * @return double
     */
    public function getDepthpectoralmaxpost()
    {

        return $this->depthpectoralmaxpost;
    }

    /**
     * Get the [depthpectoralminpre] column value.
     *
     * @return double
     */
    public function getDepthpectoralminpre()
    {

        return $this->depthpectoralminpre;
    }

    /**
     * Get the [depthpectoralminflex] column value.
     *
     * @return double
     */
    public function getDepthpectoralminflex()
    {

        return $this->depthpectoralminflex;
    }

    /**
     * Get the [depthpectoralminpost] column value.
     *
     * @return double
     */
    public function getDepthpectoralminpost()
    {

        return $this->depthpectoralminpost;
    }

    /**
     * Get the [depthpectorallitpre] column value.
     *
     * @return double
     */
    public function getDepthpectorallitpre()
    {

        return $this->depthpectorallitpre;
    }

    /**
     * Get the [depthpectorallitflex] column value.
     *
     * @return double
     */
    public function getDepthpectorallitflex()
    {

        return $this->depthpectorallitflex;
    }

    /**
     * Get the [depthpectorallitpost] column value.
     *
     * @return double
     */
    public function getDepthpectorallitpost()
    {

        return $this->depthpectorallitpost;
    }

    /**
     * Get the [depthanusmaxpre] column value.
     *
     * @return double
     */
    public function getDepthanusmaxpre()
    {

        return $this->depthanusmaxpre;
    }

    /**
     * Get the [depthanusmaxflex] column value.
     *
     * @return double
     */
    public function getDepthanusmaxflex()
    {

        return $this->depthanusmaxflex;
    }

    /**
     * Get the [depthanusmaxpost] column value.
     *
     * @return double
     */
    public function getDepthanusmaxpost()
    {

        return $this->depthanusmaxpost;
    }

    /**
     * Get the [depthanusminpre] column value.
     *
     * @return double
     */
    public function getDepthanusminpre()
    {

        return $this->depthanusminpre;
    }

    /**
     * Get the [depthanusminflex] column value.
     *
     * @return double
     */
    public function getDepthanusminflex()
    {

        return $this->depthanusminflex;
    }

    /**
     * Get the [depthanusminpost] column value.
     *
     * @return double
     */
    public function getDepthanusminpost()
    {

        return $this->depthanusminpost;
    }

    /**
     * Get the [depthanuslitpre] column value.
     *
     * @return double
     */
    public function getDepthanuslitpre()
    {

        return $this->depthanuslitpre;
    }

    /**
     * Get the [depthanuslitflex] column value.
     *
     * @return double
     */
    public function getDepthanuslitflex()
    {

        return $this->depthanuslitflex;
    }

    /**
     * Get the [depthanuslitpost] column value.
     *
     * @return double
     */
    public function getDepthanuslitpost()
    {

        return $this->depthanuslitpost;
    }

    /**
     * Get the [addcharyolks] column value.
     *
     * @return string
     */
    public function getAddcharyolks()
    {

        return $this->addcharyolks;
    }

    /**
     * Get the [addcharposts] column value.
     *
     * @return string
     */
    public function getAddcharposts()
    {

        return $this->addcharposts;
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
     * @return Larvae The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = LarvaePeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [stockcode] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setStockcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stockcode !== $v) {
            $this->stockcode = $v;
            $this->modifiedColumns[] = LarvaePeer::STOCKCODE;
        }


        return $this;
    } // setStockcode()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = LarvaePeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [larvaerefno] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvaerefno !== $v) {
            $this->larvaerefno = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVAEREFNO;
        }


        return $this;
    } // setLarvaerefno()

    /**
     * Set the value of [otherref1] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOtherref1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherref1 !== $v) {
            $this->otherref1 = $v;
            $this->modifiedColumns[] = LarvaePeer::OTHERREF1;
        }


        return $this;
    } // setOtherref1()

    /**
     * Set the value of [otherref2] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOtherref2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->otherref2 !== $v) {
            $this->otherref2 = $v;
            $this->modifiedColumns[] = LarvaePeer::OTHERREF2;
        }


        return $this;
    } // setOtherref2()

    /**
     * Set the value of [larvalarea] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvalarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvalarea !== $v) {
            $this->larvalarea = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALAREA;
        }


        return $this;
    } // setLarvalarea()

    /**
     * Set the value of [placeofdevelopment] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPlaceofdevelopment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->placeofdevelopment !== $v) {
            $this->placeofdevelopment = $v;
            $this->modifiedColumns[] = LarvaePeer::PLACEOFDEVELOPMENT;
        }


        return $this;
    } // setPlaceofdevelopment()

    /**
     * Set the value of [lhmax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLhmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lhmax !== $v) {
            $this->lhmax = $v;
            $this->modifiedColumns[] = LarvaePeer::LHMAX;
        }


        return $this;
    } // setLhmax()

    /**
     * Set the value of [lbirthmaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLbirthmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lbirthmaxref !== $v) {
            $this->lbirthmaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::LBIRTHMAXREF;
        }


        return $this;
    } // setLbirthmaxref()

    /**
     * Set the value of [lhmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lhmin !== $v) {
            $this->lhmin = $v;
            $this->modifiedColumns[] = LarvaePeer::LHMIN;
        }


        return $this;
    } // setLhmin()

    /**
     * Set the value of [lbirthminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLbirthminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lbirthminref !== $v) {
            $this->lbirthminref = $v;
            $this->modifiedColumns[] = LarvaePeer::LBIRTHMINREF;
        }


        return $this;
    } // setLbirthminref()

    /**
     * Set the value of [lhmid] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLhmid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lhmid !== $v) {
            $this->lhmid = $v;
            $this->modifiedColumns[] = LarvaePeer::LHMID;
        }


        return $this;
    } // setLhmid()

    /**
     * Set the value of [lbirthmodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLbirthmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lbirthmodref !== $v) {
            $this->lbirthmodref = $v;
            $this->modifiedColumns[] = LarvaePeer::LBIRTHMODREF;
        }


        return $this;
    } // setLbirthmodref()

    /**
     * Set the value of [preanallengthmaxy] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthmaxy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthmaxy !== $v) {
            $this->preanallengthmaxy = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMAXY;
        }


        return $this;
    } // setPreanallengthmaxy()

    /**
     * Set the value of [preanmaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preanmaxref !== $v) {
            $this->preanmaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANMAXREF;
        }


        return $this;
    } // setPreanmaxref()

    /**
     * Set the value of [preanallengthminy] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthminy($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthminy !== $v) {
            $this->preanallengthminy = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMINY;
        }


        return $this;
    } // setPreanallengthminy()

    /**
     * Set the value of [preanminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preanminref !== $v) {
            $this->preanminref = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANMINREF;
        }


        return $this;
    } // setPreanminref()

    /**
     * Set the value of [preanallengthmody] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthmody($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthmody !== $v) {
            $this->preanallengthmody = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMODY;
        }


        return $this;
    } // setPreanallengthmody()

    /**
     * Set the value of [preanmodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preanmodref !== $v) {
            $this->preanmodref = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANMODREF;
        }


        return $this;
    } // setPreanmodref()

    /**
     * Set the value of [flexlengthmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->flexlengthmin !== $v) {
            $this->flexlengthmin = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHMIN;
        }


        return $this;
    } // setFlexlengthmin()

    /**
     * Set the value of [flexlengthmod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->flexlengthmod !== $v) {
            $this->flexlengthmod = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHMOD;
        }


        return $this;
    } // setFlexlengthmod()

    /**
     * Set the value of [flexlengthmax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->flexlengthmax !== $v) {
            $this->flexlengthmax = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHMAX;
        }


        return $this;
    } // setFlexlengthmax()

    /**
     * Set the value of [flexlengthtype] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->flexlengthtype !== $v) {
            $this->flexlengthtype = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHTYPE;
        }


        return $this;
    } // setFlexlengthtype()

    /**
     * Set the value of [flexlengthminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flexlengthminref !== $v) {
            $this->flexlengthminref = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHMINREF;
        }


        return $this;
    } // setFlexlengthminref()

    /**
     * Set the value of [flexlengthmodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flexlengthmodref !== $v) {
            $this->flexlengthmodref = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHMODREF;
        }


        return $this;
    } // setFlexlengthmodref()

    /**
     * Set the value of [flexlengthmaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFlexlengthmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->flexlengthmaxref !== $v) {
            $this->flexlengthmaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::FLEXLENGTHMAXREF;
        }


        return $this;
    } // setFlexlengthmaxref()

    /**
     * Set the value of [translengthmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->translengthmin !== $v) {
            $this->translengthmin = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHMIN;
        }


        return $this;
    } // setTranslengthmin()

    /**
     * Set the value of [translengthmod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->translengthmod !== $v) {
            $this->translengthmod = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHMOD;
        }


        return $this;
    } // setTranslengthmod()

    /**
     * Set the value of [translengthmax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->translengthmax !== $v) {
            $this->translengthmax = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHMAX;
        }


        return $this;
    } // setTranslengthmax()

    /**
     * Set the value of [translengthtype] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthtype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->translengthtype !== $v) {
            $this->translengthtype = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHTYPE;
        }


        return $this;
    } // setTranslengthtype()

    /**
     * Set the value of [translengthminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->translengthminref !== $v) {
            $this->translengthminref = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHMINREF;
        }


        return $this;
    } // setTranslengthminref()

    /**
     * Set the value of [translengthmodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->translengthmodref !== $v) {
            $this->translengthmodref = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHMODREF;
        }


        return $this;
    } // setTranslengthmodref()

    /**
     * Set the value of [translengthmaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTranslengthmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->translengthmaxref !== $v) {
            $this->translengthmaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::TRANSLENGTHMAXREF;
        }


        return $this;
    } // setTranslengthmaxref()

    /**
     * Set the value of [larvaldurationmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaldurationmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->larvaldurationmin !== $v) {
            $this->larvaldurationmin = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALDURATIONMIN;
        }


        return $this;
    } // setLarvaldurationmin()

    /**
     * Set the value of [larvaldurationminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaldurationminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvaldurationminref !== $v) {
            $this->larvaldurationminref = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALDURATIONMINREF;
        }


        return $this;
    } // setLarvaldurationminref()

    /**
     * Set the value of [larvaldurationmax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaldurationmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->larvaldurationmax !== $v) {
            $this->larvaldurationmax = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALDURATIONMAX;
        }


        return $this;
    } // setLarvaldurationmax()

    /**
     * Set the value of [larvaldurationmaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaldurationmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvaldurationmaxref !== $v) {
            $this->larvaldurationmaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALDURATIONMAXREF;
        }


        return $this;
    } // setLarvaldurationmaxref()

    /**
     * Set the value of [larvaldurationmod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaldurationmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->larvaldurationmod !== $v) {
            $this->larvaldurationmod = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALDURATIONMOD;
        }


        return $this;
    } // setLarvaldurationmod()

    /**
     * Set the value of [larvaldurationmodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvaldurationmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->larvaldurationmodref !== $v) {
            $this->larvaldurationmodref = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVALDURATIONMODREF;
        }


        return $this;
    } // setLarvaldurationmodref()

    /**
     * Set the value of [shapeofyolksac] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setShapeofyolksac($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shapeofyolksac !== $v) {
            $this->shapeofyolksac = $v;
            $this->modifiedColumns[] = LarvaePeer::SHAPEOFYOLKSAC;
        }


        return $this;
    } // setShapeofyolksac()

    /**
     * Set the value of [yolksacpigm] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setYolksacpigm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->yolksacpigm !== $v) {
            $this->yolksacpigm = $v;
            $this->modifiedColumns[] = LarvaePeer::YOLKSACPIGM;
        }


        return $this;
    } // setYolksacpigm()

    /**
     * Set the value of [yolksacsegm] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setYolksacsegm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->yolksacsegm !== $v) {
            $this->yolksacsegm = $v;
            $this->modifiedColumns[] = LarvaePeer::YOLKSACSEGM;
        }


        return $this;
    } // setYolksacsegm()

    /**
     * Set the value of [yolkref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setYolkref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yolkref !== $v) {
            $this->yolkref = $v;
            $this->modifiedColumns[] = LarvaePeer::YOLKREF;
        }


        return $this;
    } // setYolkref()

    /**
     * Set the value of [oilglobules] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOilglobules($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oilglobules !== $v) {
            $this->oilglobules = $v;
            $this->modifiedColumns[] = LarvaePeer::OILGLOBULES;
        }


        return $this;
    } // setOilglobules()

    /**
     * Set the value of [oilglobuleposh] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOilglobuleposh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oilglobuleposh !== $v) {
            $this->oilglobuleposh = $v;
            $this->modifiedColumns[] = LarvaePeer::OILGLOBULEPOSH;
        }


        return $this;
    } // setOilglobuleposh()

    /**
     * Set the value of [oilglobuleposv] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOilglobuleposv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oilglobuleposv !== $v) {
            $this->oilglobuleposv = $v;
            $this->modifiedColumns[] = LarvaePeer::OILGLOBULEPOSV;
        }


        return $this;
    } // setOilglobuleposv()

    /**
     * Set the value of [oilglobulepigm] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOilglobulepigm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oilglobulepigm !== $v) {
            $this->oilglobulepigm = $v;
            $this->modifiedColumns[] = LarvaePeer::OILGLOBULEPIGM;
        }


        return $this;
    } // setOilglobulepigm()

    /**
     * Set the value of [rowsontaily] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRowsontaily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rowsontaily !== $v) {
            $this->rowsontaily = $v;
            $this->modifiedColumns[] = LarvaePeer::ROWSONTAILY;
        }


        return $this;
    } // setRowsontaily()

    /**
     * Set the value of [othermelontaily] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOthermelontaily($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othermelontaily !== $v) {
            $this->othermelontaily = $v;
            $this->modifiedColumns[] = LarvaePeer::OTHERMELONTAILY;
        }


        return $this;
    } // setOthermelontaily()

    /**
     * Set the value of [melonheadtrunky] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMelonheadtrunky($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->melonheadtrunky !== $v) {
            $this->melonheadtrunky = $v;
            $this->modifiedColumns[] = LarvaePeer::MELONHEADTRUNKY;
        }


        return $this;
    } // setMelonheadtrunky()

    /**
     * Set the value of [lyamax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLyamax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lyamax !== $v) {
            $this->lyamax = $v;
            $this->modifiedColumns[] = LarvaePeer::LYAMAX;
        }


        return $this;
    } // setLyamax()

    /**
     * Set the value of [l1feedmaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setL1feedmaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->l1feedmaxref !== $v) {
            $this->l1feedmaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::L1FEEDMAXREF;
        }


        return $this;
    } // setL1feedmaxref()

    /**
     * Set the value of [lyamin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLyamin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lyamin !== $v) {
            $this->lyamin = $v;
            $this->modifiedColumns[] = LarvaePeer::LYAMIN;
        }


        return $this;
    } // setLyamin()

    /**
     * Set the value of [l1feedminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setL1feedminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->l1feedminref !== $v) {
            $this->l1feedminref = $v;
            $this->modifiedColumns[] = LarvaePeer::L1FEEDMINREF;
        }


        return $this;
    } // setL1feedminref()

    /**
     * Set the value of [lyamod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLyamod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->lyamod !== $v) {
            $this->lyamod = $v;
            $this->modifiedColumns[] = LarvaePeer::LYAMOD;
        }


        return $this;
    } // setLyamod()

    /**
     * Set the value of [l1feedmodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setL1feedmodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->l1feedmodref !== $v) {
            $this->l1feedmodref = $v;
            $this->modifiedColumns[] = LarvaePeer::L1FEEDMODREF;
        }


        return $this;
    } // setL1feedmodref()

    /**
     * Set the value of [janlarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setJanlarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->janlarv !== $v) {
            $this->janlarv = $v;
            $this->modifiedColumns[] = LarvaePeer::JANLARV;
        }


        return $this;
    } // setJanlarv()

    /**
     * Set the value of [feblarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setFeblarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->feblarv !== $v) {
            $this->feblarv = $v;
            $this->modifiedColumns[] = LarvaePeer::FEBLARV;
        }


        return $this;
    } // setFeblarv()

    /**
     * Set the value of [marlarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMarlarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->marlarv !== $v) {
            $this->marlarv = $v;
            $this->modifiedColumns[] = LarvaePeer::MARLARV;
        }


        return $this;
    } // setMarlarv()

    /**
     * Set the value of [aprlarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setAprlarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aprlarv !== $v) {
            $this->aprlarv = $v;
            $this->modifiedColumns[] = LarvaePeer::APRLARV;
        }


        return $this;
    } // setAprlarv()

    /**
     * Set the value of [maylarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMaylarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maylarv !== $v) {
            $this->maylarv = $v;
            $this->modifiedColumns[] = LarvaePeer::MAYLARV;
        }


        return $this;
    } // setMaylarv()

    /**
     * Set the value of [junlarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setJunlarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->junlarv !== $v) {
            $this->junlarv = $v;
            $this->modifiedColumns[] = LarvaePeer::JUNLARV;
        }


        return $this;
    } // setJunlarv()

    /**
     * Set the value of [jullarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setJullarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->jullarv !== $v) {
            $this->jullarv = $v;
            $this->modifiedColumns[] = LarvaePeer::JULLARV;
        }


        return $this;
    } // setJullarv()

    /**
     * Set the value of [auglarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setAuglarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->auglarv !== $v) {
            $this->auglarv = $v;
            $this->modifiedColumns[] = LarvaePeer::AUGLARV;
        }


        return $this;
    } // setAuglarv()

    /**
     * Set the value of [seplarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSeplarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->seplarv !== $v) {
            $this->seplarv = $v;
            $this->modifiedColumns[] = LarvaePeer::SEPLARV;
        }


        return $this;
    } // setSeplarv()

    /**
     * Set the value of [octlarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOctlarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->octlarv !== $v) {
            $this->octlarv = $v;
            $this->modifiedColumns[] = LarvaePeer::OCTLARV;
        }


        return $this;
    } // setOctlarv()

    /**
     * Sets the value of the [novlarv] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setNovlarv($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->novlarv !== $v) {
            $this->novlarv = $v;
            $this->modifiedColumns[] = LarvaePeer::NOVLARV;
        }


        return $this;
    } // setNovlarv()

    /**
     * Set the value of [declarv] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeclarv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->declarv !== $v) {
            $this->declarv = $v;
            $this->modifiedColumns[] = LarvaePeer::DECLARV;
        }


        return $this;
    } // setDeclarv()

    /**
     * Set the value of [presenceref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPresenceref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->presenceref !== $v) {
            $this->presenceref = $v;
            $this->modifiedColumns[] = LarvaePeer::PRESENCEREF;
        }


        return $this;
    } // setPresenceref()

    /**
     * Set the value of [waterdepthmax] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWaterdepthmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterdepthmax !== $v) {
            $this->waterdepthmax = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERDEPTHMAX;
        }


        return $this;
    } // setWaterdepthmax()

    /**
     * Set the value of [watertempmax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWatertempmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->watertempmax !== $v) {
            $this->watertempmax = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERTEMPMAX;
        }


        return $this;
    } // setWatertempmax()

    /**
     * Set the value of [salinitymax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSalinitymax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinitymax !== $v) {
            $this->salinitymax = $v;
            $this->modifiedColumns[] = LarvaePeer::SALINITYMAX;
        }


        return $this;
    } // setSalinitymax()

    /**
     * Set the value of [ph] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ph !== $v) {
            $this->ph = $v;
            $this->modifiedColumns[] = LarvaePeer::PH;
        }


        return $this;
    } // setPh()

    /**
     * Set the value of [oxygenmax] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOxygenmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmax !== $v) {
            $this->oxygenmax = $v;
            $this->modifiedColumns[] = LarvaePeer::OXYGENMAX;
        }


        return $this;
    } // setOxygenmax()

    /**
     * Set the value of [watermaxref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWatermaxref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->watermaxref !== $v) {
            $this->watermaxref = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERMAXREF;
        }


        return $this;
    } // setWatermaxref()

    /**
     * Set the value of [waterdepthmin] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWaterdepthmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterdepthmin !== $v) {
            $this->waterdepthmin = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERDEPTHMIN;
        }


        return $this;
    } // setWaterdepthmin()

    /**
     * Set the value of [watertempmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWatertempmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->watertempmin !== $v) {
            $this->watertempmin = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERTEMPMIN;
        }


        return $this;
    } // setWatertempmin()

    /**
     * Set the value of [salinitymin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSalinitymin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinitymin !== $v) {
            $this->salinitymin = $v;
            $this->modifiedColumns[] = LarvaePeer::SALINITYMIN;
        }


        return $this;
    } // setSalinitymin()

    /**
     * Set the value of [phmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPhmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmin !== $v) {
            $this->phmin = $v;
            $this->modifiedColumns[] = LarvaePeer::PHMIN;
        }


        return $this;
    } // setPhmin()

    /**
     * Set the value of [oxygenmin] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOxygenmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmin !== $v) {
            $this->oxygenmin = $v;
            $this->modifiedColumns[] = LarvaePeer::OXYGENMIN;
        }


        return $this;
    } // setOxygenmin()

    /**
     * Set the value of [waterminref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWaterminref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterminref !== $v) {
            $this->waterminref = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERMINREF;
        }


        return $this;
    } // setWaterminref()

    /**
     * Set the value of [waterdepthmod] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWaterdepthmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterdepthmod !== $v) {
            $this->waterdepthmod = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERDEPTHMOD;
        }


        return $this;
    } // setWaterdepthmod()

    /**
     * Set the value of [watertempmod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWatertempmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->watertempmod !== $v) {
            $this->watertempmod = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERTEMPMOD;
        }


        return $this;
    } // setWatertempmod()

    /**
     * Set the value of [salinitymod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSalinitymod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->salinitymod !== $v) {
            $this->salinitymod = $v;
            $this->modifiedColumns[] = LarvaePeer::SALINITYMOD;
        }


        return $this;
    } // setSalinitymod()

    /**
     * Set the value of [phmod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPhmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->phmod !== $v) {
            $this->phmod = $v;
            $this->modifiedColumns[] = LarvaePeer::PHMOD;
        }


        return $this;
    } // setPhmod()

    /**
     * Set the value of [oxygenmod] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOxygenmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->oxygenmod !== $v) {
            $this->oxygenmod = $v;
            $this->modifiedColumns[] = LarvaePeer::OXYGENMOD;
        }


        return $this;
    } // setOxygenmod()

    /**
     * Set the value of [watermodref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setWatermodref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->watermodref !== $v) {
            $this->watermodref = $v;
            $this->modifiedColumns[] = LarvaePeer::WATERMODREF;
        }


        return $this;
    } // setWatermodref()

    /**
     * Set the value of [strikingfeature] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setStrikingfeature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->strikingfeature !== $v) {
            $this->strikingfeature = $v;
            $this->modifiedColumns[] = LarvaePeer::STRIKINGFEATURE;
        }


        return $this;
    } // setStrikingfeature()

    /**
     * Set the value of [larvapic] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setLarvapic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->larvapic !== $v) {
            $this->larvapic = $v;
            $this->modifiedColumns[] = LarvaePeer::LARVAPIC;
        }


        return $this;
    } // setLarvapic()

    /**
     * Set the value of [strikingshapelat] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setStrikingshapelat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->strikingshapelat !== $v) {
            $this->strikingshapelat = $v;
            $this->modifiedColumns[] = LarvaePeer::STRIKINGSHAPELAT;
        }


        return $this;
    } // setStrikingshapelat()

    /**
     * Set the value of [strikingshapedors] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setStrikingshapedors($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->strikingshapedors !== $v) {
            $this->strikingshapedors = $v;
            $this->modifiedColumns[] = LarvaePeer::STRIKINGSHAPEDORS;
        }


        return $this;
    } // setStrikingshapedors()

    /**
     * Set the value of [bodyform] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setBodyform($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bodyform !== $v) {
            $this->bodyform = $v;
            $this->modifiedColumns[] = LarvaePeer::BODYFORM;
        }


        return $this;
    } // setBodyform()

    /**
     * Set the value of [shapeofgut] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setShapeofgut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shapeofgut !== $v) {
            $this->shapeofgut = $v;
            $this->modifiedColumns[] = LarvaePeer::SHAPEOFGUT;
        }


        return $this;
    } // setShapeofgut()

    /**
     * Set the value of [gasbladderearly] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setGasbladderearly($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gasbladderearly !== $v) {
            $this->gasbladderearly = $v;
            $this->modifiedColumns[] = LarvaePeer::GASBLADDEREARLY;
        }


        return $this;
    } // setGasbladderearly()

    /**
     * Set the value of [gasbladderlate] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setGasbladderlate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gasbladderlate !== $v) {
            $this->gasbladderlate = $v;
            $this->modifiedColumns[] = LarvaePeer::GASBLADDERLATE;
        }


        return $this;
    } // setGasbladderlate()

    /**
     * Set the value of [spinalarmatureearl] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSpinalarmatureearl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spinalarmatureearl !== $v) {
            $this->spinalarmatureearl = $v;
            $this->modifiedColumns[] = LarvaePeer::SPINALARMATUREEARL;
        }


        return $this;
    } // setSpinalarmatureearl()

    /**
     * Set the value of [spinalarmaturelate] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSpinalarmaturelate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->spinalarmaturelate !== $v) {
            $this->spinalarmaturelate = $v;
            $this->modifiedColumns[] = LarvaePeer::SPINALARMATURELATE;
        }


        return $this;
    } // setSpinalarmaturelate()

    /**
     * Set the value of [rowsontaile] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRowsontaile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rowsontaile !== $v) {
            $this->rowsontaile = $v;
            $this->modifiedColumns[] = LarvaePeer::ROWSONTAILE;
        }


        return $this;
    } // setRowsontaile()

    /**
     * Set the value of [othermelontaile] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOthermelontaile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othermelontaile !== $v) {
            $this->othermelontaile = $v;
            $this->modifiedColumns[] = LarvaePeer::OTHERMELONTAILE;
        }


        return $this;
    } // setOthermelontaile()

    /**
     * Set the value of [melonheadtrunke] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMelonheadtrunke($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->melonheadtrunke !== $v) {
            $this->melonheadtrunke = $v;
            $this->modifiedColumns[] = LarvaePeer::MELONHEADTRUNKE;
        }


        return $this;
    } // setMelonheadtrunke()

    /**
     * Set the value of [rowsontaill] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRowsontaill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rowsontaill !== $v) {
            $this->rowsontaill = $v;
            $this->modifiedColumns[] = LarvaePeer::ROWSONTAILL;
        }


        return $this;
    } // setRowsontaill()

    /**
     * Set the value of [othermelontaill] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setOthermelontaill($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->othermelontaill !== $v) {
            $this->othermelontaill = $v;
            $this->modifiedColumns[] = LarvaePeer::OTHERMELONTAILL;
        }


        return $this;
    } // setOthermelontaill()

    /**
     * Set the value of [melonheadtrunkl] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMelonheadtrunkl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->melonheadtrunkl !== $v) {
            $this->melonheadtrunkl = $v;
            $this->modifiedColumns[] = LarvaePeer::MELONHEADTRUNKL;
        }


        return $this;
    } // setMelonheadtrunkl()

    /**
     * Set the value of [urostyleregion] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setUrostyleregion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->urostyleregion !== $v) {
            $this->urostyleregion = $v;
            $this->modifiedColumns[] = LarvaePeer::UROSTYLEREGION;
        }


        return $this;
    } // setUrostyleregion()

    /**
     * Set the value of [urostyleregionlate] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setUrostyleregionlate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->urostyleregionlate !== $v) {
            $this->urostyleregionlate = $v;
            $this->modifiedColumns[] = LarvaePeer::UROSTYLEREGIONLATE;
        }


        return $this;
    } // setUrostyleregionlate()

    /**
     * Set the value of [peritoneum] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPeritoneum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->peritoneum !== $v) {
            $this->peritoneum = $v;
            $this->modifiedColumns[] = LarvaePeer::PERITONEUM;
        }


        return $this;
    } // setPeritoneum()

    /**
     * Set the value of [pectoralsi] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPectoralsi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pectoralsi !== $v) {
            $this->pectoralsi = $v;
            $this->modifiedColumns[] = LarvaePeer::PECTORALSI;
        }


        return $this;
    } // setPectoralsi()

    /**
     * Set the value of [pectoralsii] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPectoralsii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pectoralsii !== $v) {
            $this->pectoralsii = $v;
            $this->modifiedColumns[] = LarvaePeer::PECTORALSII;
        }


        return $this;
    } // setPectoralsii()

    /**
     * Set the value of [pelvicsi] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPelvicsi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pelvicsi !== $v) {
            $this->pelvicsi = $v;
            $this->modifiedColumns[] = LarvaePeer::PELVICSI;
        }


        return $this;
    } // setPelvicsi()

    /**
     * Set the value of [pelvicsii] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPelvicsii($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pelvicsii !== $v) {
            $this->pelvicsii = $v;
            $this->modifiedColumns[] = LarvaePeer::PELVICSII;
        }


        return $this;
    } // setPelvicsii()

    /**
     * Set the value of [myomeresmax] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomeresmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->myomeresmax !== $v) {
            $this->myomeresmax = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMERESMAX;
        }


        return $this;
    } // setMyomeresmax()

    /**
     * Set the value of [myomeresmin] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomeresmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->myomeresmin !== $v) {
            $this->myomeresmin = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMERESMIN;
        }


        return $this;
    } // setMyomeresmin()

    /**
     * Set the value of [myomeresmod] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomeresmod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->myomeresmod !== $v) {
            $this->myomeresmod = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMERESMOD;
        }


        return $this;
    } // setMyomeresmod()

    /**
     * Set the value of [myomvert] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomvert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->myomvert !== $v) {
            $this->myomvert = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMVERT;
        }


        return $this;
    } // setMyomvert()

    /**
     * Set the value of [totmyomref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTotmyomref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totmyomref !== $v) {
            $this->totmyomref = $v;
            $this->modifiedColumns[] = LarvaePeer::TOTMYOMREF;
        }


        return $this;
    } // setTotmyomref()

    /**
     * Set the value of [myomeresmaxprean] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomeresmaxprean($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->myomeresmaxprean !== $v) {
            $this->myomeresmaxprean = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMERESMAXPREAN;
        }


        return $this;
    } // setMyomeresmaxprean()

    /**
     * Set the value of [myomeresminprean] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomeresminprean($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->myomeresminprean !== $v) {
            $this->myomeresminprean = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMERESMINPREAN;
        }


        return $this;
    } // setMyomeresminprean()

    /**
     * Set the value of [myomeresmodprean] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomeresmodprean($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->myomeresmodprean !== $v) {
            $this->myomeresmodprean = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMERESMODPREAN;
        }


        return $this;
    } // setMyomeresmodprean()

    /**
     * Set the value of [myomvert2] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMyomvert2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->myomvert2 !== $v) {
            $this->myomvert2 = $v;
            $this->modifiedColumns[] = LarvaePeer::MYOMVERT2;
        }


        return $this;
    } // setMyomvert2()

    /**
     * Set the value of [preanmyoref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanmyoref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preanmyoref !== $v) {
            $this->preanmyoref = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANMYOREF;
        }


        return $this;
    } // setPreanmyoref()

    /**
     * Set the value of [rllatepre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRllatepre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rllatepre !== $v) {
            $this->rllatepre = $v;
            $this->modifiedColumns[] = LarvaePeer::RLLATEPRE;
        }


        return $this;
    } // setRllatepre()

    /**
     * Set the value of [rllateflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRllateflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rllateflex !== $v) {
            $this->rllateflex = $v;
            $this->modifiedColumns[] = LarvaePeer::RLLATEFLEX;
        }


        return $this;
    } // setRllateflex()

    /**
     * Set the value of [rllatepost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRllatepost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rllatepost !== $v) {
            $this->rllatepost = $v;
            $this->modifiedColumns[] = LarvaePeer::RLLATEPOST;
        }


        return $this;
    } // setRllatepost()

    /**
     * Set the value of [rlearlypre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRlearlypre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rlearlypre !== $v) {
            $this->rlearlypre = $v;
            $this->modifiedColumns[] = LarvaePeer::RLEARLYPRE;
        }


        return $this;
    } // setRlearlypre()

    /**
     * Set the value of [rlearlyflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRlearlyflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rlearlyflex !== $v) {
            $this->rlearlyflex = $v;
            $this->modifiedColumns[] = LarvaePeer::RLEARLYFLEX;
        }


        return $this;
    } // setRlearlyflex()

    /**
     * Set the value of [rlearlypost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRlearlypost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rlearlypost !== $v) {
            $this->rlearlypost = $v;
            $this->modifiedColumns[] = LarvaePeer::RLEARLYPOST;
        }


        return $this;
    } // setRlearlypost()

    /**
     * Set the value of [rlflexpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRlflexpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rlflexpre !== $v) {
            $this->rlflexpre = $v;
            $this->modifiedColumns[] = LarvaePeer::RLFLEXPRE;
        }


        return $this;
    } // setRlflexpre()

    /**
     * Set the value of [rlflexflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRlflexflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rlflexflex !== $v) {
            $this->rlflexflex = $v;
            $this->modifiedColumns[] = LarvaePeer::RLFLEXFLEX;
        }


        return $this;
    } // setRlflexflex()

    /**
     * Set the value of [rlflexpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setRlflexpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rlflexpost !== $v) {
            $this->rlflexpost = $v;
            $this->modifiedColumns[] = LarvaePeer::RLFLEXPOST;
        }


        return $this;
    } // setRlflexpost()

    /**
     * Set the value of [measurementspreref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMeasurementspreref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->measurementspreref !== $v) {
            $this->measurementspreref = $v;
            $this->modifiedColumns[] = LarvaePeer::MEASUREMENTSPREREF;
        }


        return $this;
    } // setMeasurementspreref()

    /**
     * Set the value of [measurementsflexref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMeasurementsflexref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->measurementsflexref !== $v) {
            $this->measurementsflexref = $v;
            $this->modifiedColumns[] = LarvaePeer::MEASUREMENTSFLEXREF;
        }


        return $this;
    } // setMeasurementsflexref()

    /**
     * Set the value of [measurementspostref] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setMeasurementspostref($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->measurementspostref !== $v) {
            $this->measurementspostref = $v;
            $this->modifiedColumns[] = LarvaePeer::MEASUREMENTSPOSTREF;
        }


        return $this;
    } // setMeasurementspostref()

    /**
     * Set the value of [typepre] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTypepre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typepre !== $v) {
            $this->typepre = $v;
            $this->modifiedColumns[] = LarvaePeer::TYPEPRE;
        }


        return $this;
    } // setTypepre()

    /**
     * Set the value of [typeflex] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTypeflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typeflex !== $v) {
            $this->typeflex = $v;
            $this->modifiedColumns[] = LarvaePeer::TYPEFLEX;
        }


        return $this;
    } // setTypeflex()

    /**
     * Set the value of [typepost] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setTypepost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typepost !== $v) {
            $this->typepost = $v;
            $this->modifiedColumns[] = LarvaePeer::TYPEPOST;
        }


        return $this;
    } // setTypepost()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = LarvaePeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [preanallengthmaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthmaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthmaxpre !== $v) {
            $this->preanallengthmaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMAXPRE;
        }


        return $this;
    } // setPreanallengthmaxpre()

    /**
     * Set the value of [preanallengthmaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthmaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthmaxflex !== $v) {
            $this->preanallengthmaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMAXFLEX;
        }


        return $this;
    } // setPreanallengthmaxflex()

    /**
     * Set the value of [preanallengthmaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthmaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthmaxpost !== $v) {
            $this->preanallengthmaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMAXPOST;
        }


        return $this;
    } // setPreanallengthmaxpost()

    /**
     * Set the value of [preanallengthminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthminpre !== $v) {
            $this->preanallengthminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMINPRE;
        }


        return $this;
    } // setPreanallengthminpre()

    /**
     * Set the value of [preanallengthminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthminflex !== $v) {
            $this->preanallengthminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMINFLEX;
        }


        return $this;
    } // setPreanallengthminflex()

    /**
     * Set the value of [preanallengthminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthminpost !== $v) {
            $this->preanallengthminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHMINPOST;
        }


        return $this;
    } // setPreanallengthminpost()

    /**
     * Set the value of [preanallengthlitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthlitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthlitpre !== $v) {
            $this->preanallengthlitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHLITPRE;
        }


        return $this;
    } // setPreanallengthlitpre()

    /**
     * Set the value of [preanallengthlitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthlitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthlitflex !== $v) {
            $this->preanallengthlitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHLITFLEX;
        }


        return $this;
    } // setPreanallengthlitflex()

    /**
     * Set the value of [preanallengthlitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreanallengthlitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preanallengthlitpost !== $v) {
            $this->preanallengthlitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREANALLENGTHLITPOST;
        }


        return $this;
    } // setPreanallengthlitpost()

    /**
     * Set the value of [prepeclengthmaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthmaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthmaxpre !== $v) {
            $this->prepeclengthmaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHMAXPRE;
        }


        return $this;
    } // setPrepeclengthmaxpre()

    /**
     * Set the value of [prepeclengthmaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthmaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthmaxflex !== $v) {
            $this->prepeclengthmaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHMAXFLEX;
        }


        return $this;
    } // setPrepeclengthmaxflex()

    /**
     * Set the value of [prepeclengthmaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthmaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthmaxpost !== $v) {
            $this->prepeclengthmaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHMAXPOST;
        }


        return $this;
    } // setPrepeclengthmaxpost()

    /**
     * Set the value of [prepeclengthminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthminpre !== $v) {
            $this->prepeclengthminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHMINPRE;
        }


        return $this;
    } // setPrepeclengthminpre()

    /**
     * Set the value of [prepeclengthminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthminflex !== $v) {
            $this->prepeclengthminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHMINFLEX;
        }


        return $this;
    } // setPrepeclengthminflex()

    /**
     * Set the value of [prepeclengthminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthminpost !== $v) {
            $this->prepeclengthminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHMINPOST;
        }


        return $this;
    } // setPrepeclengthminpost()

    /**
     * Set the value of [prepeclengthlitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthlitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthlitpre !== $v) {
            $this->prepeclengthlitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHLITPRE;
        }


        return $this;
    } // setPrepeclengthlitpre()

    /**
     * Set the value of [prepeclengthlitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthlitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthlitflex !== $v) {
            $this->prepeclengthlitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHLITFLEX;
        }


        return $this;
    } // setPrepeclengthlitflex()

    /**
     * Set the value of [prepeclengthlitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPrepeclengthlitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prepeclengthlitpost !== $v) {
            $this->prepeclengthlitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREPECLENGTHLITPOST;
        }


        return $this;
    } // setPrepeclengthlitpost()

    /**
     * Set the value of [preorbitalmaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitalmaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitalmaxpre !== $v) {
            $this->preorbitalmaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALMAXPRE;
        }


        return $this;
    } // setPreorbitalmaxpre()

    /**
     * Set the value of [preorbitalmaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitalmaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitalmaxflex !== $v) {
            $this->preorbitalmaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALMAXFLEX;
        }


        return $this;
    } // setPreorbitalmaxflex()

    /**
     * Set the value of [preorbitalmaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitalmaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitalmaxpost !== $v) {
            $this->preorbitalmaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALMAXPOST;
        }


        return $this;
    } // setPreorbitalmaxpost()

    /**
     * Set the value of [preorbitalminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitalminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitalminpre !== $v) {
            $this->preorbitalminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALMINPRE;
        }


        return $this;
    } // setPreorbitalminpre()

    /**
     * Set the value of [preorbitalminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitalminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitalminflex !== $v) {
            $this->preorbitalminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALMINFLEX;
        }


        return $this;
    } // setPreorbitalminflex()

    /**
     * Set the value of [preorbitalminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitalminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitalminpost !== $v) {
            $this->preorbitalminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALMINPOST;
        }


        return $this;
    } // setPreorbitalminpost()

    /**
     * Set the value of [preorbitallitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitallitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitallitpre !== $v) {
            $this->preorbitallitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALLITPRE;
        }


        return $this;
    } // setPreorbitallitpre()

    /**
     * Set the value of [preorbitallitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitallitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitallitflex !== $v) {
            $this->preorbitallitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALLITFLEX;
        }


        return $this;
    } // setPreorbitallitflex()

    /**
     * Set the value of [preorbitallitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setPreorbitallitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->preorbitallitpost !== $v) {
            $this->preorbitallitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::PREORBITALLITPOST;
        }


        return $this;
    } // setPreorbitallitpost()

    /**
     * Set the value of [diameterofeyemaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyemaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyemaxpre !== $v) {
            $this->diameterofeyemaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYEMAXPRE;
        }


        return $this;
    } // setDiameterofeyemaxpre()

    /**
     * Set the value of [diameterofeyemaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyemaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyemaxflex !== $v) {
            $this->diameterofeyemaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYEMAXFLEX;
        }


        return $this;
    } // setDiameterofeyemaxflex()

    /**
     * Set the value of [diameterofeyemaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyemaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyemaxpost !== $v) {
            $this->diameterofeyemaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYEMAXPOST;
        }


        return $this;
    } // setDiameterofeyemaxpost()

    /**
     * Set the value of [diameterofeyeminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyeminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyeminpre !== $v) {
            $this->diameterofeyeminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYEMINPRE;
        }


        return $this;
    } // setDiameterofeyeminpre()

    /**
     * Set the value of [diameterofeyeminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyeminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyeminflex !== $v) {
            $this->diameterofeyeminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYEMINFLEX;
        }


        return $this;
    } // setDiameterofeyeminflex()

    /**
     * Set the value of [diameterofeyeminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyeminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyeminpost !== $v) {
            $this->diameterofeyeminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYEMINPOST;
        }


        return $this;
    } // setDiameterofeyeminpost()

    /**
     * Set the value of [diameterofeyelitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyelitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyelitpre !== $v) {
            $this->diameterofeyelitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYELITPRE;
        }


        return $this;
    } // setDiameterofeyelitpre()

    /**
     * Set the value of [diameterofeyelitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyelitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyelitflex !== $v) {
            $this->diameterofeyelitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYELITFLEX;
        }


        return $this;
    } // setDiameterofeyelitflex()

    /**
     * Set the value of [diameterofeyelitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDiameterofeyelitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->diameterofeyelitpost !== $v) {
            $this->diameterofeyelitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DIAMETEROFEYELITPOST;
        }


        return $this;
    } // setDiameterofeyelitpost()

    /**
     * Set the value of [deptheyemaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyemaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyemaxpre !== $v) {
            $this->deptheyemaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYEMAXPRE;
        }


        return $this;
    } // setDeptheyemaxpre()

    /**
     * Set the value of [deptheyemaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyemaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyemaxflex !== $v) {
            $this->deptheyemaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYEMAXFLEX;
        }


        return $this;
    } // setDeptheyemaxflex()

    /**
     * Set the value of [deptheyemaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyemaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyemaxpost !== $v) {
            $this->deptheyemaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYEMAXPOST;
        }


        return $this;
    } // setDeptheyemaxpost()

    /**
     * Set the value of [deptheyeminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyeminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyeminpre !== $v) {
            $this->deptheyeminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYEMINPRE;
        }


        return $this;
    } // setDeptheyeminpre()

    /**
     * Set the value of [deptheyeminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyeminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyeminflex !== $v) {
            $this->deptheyeminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYEMINFLEX;
        }


        return $this;
    } // setDeptheyeminflex()

    /**
     * Set the value of [deptheyeminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyeminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyeminpost !== $v) {
            $this->deptheyeminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYEMINPOST;
        }


        return $this;
    } // setDeptheyeminpost()

    /**
     * Set the value of [deptheyelitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyelitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyelitpre !== $v) {
            $this->deptheyelitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYELITPRE;
        }


        return $this;
    } // setDeptheyelitpre()

    /**
     * Set the value of [deptheyelitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyelitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyelitflex !== $v) {
            $this->deptheyelitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYELITFLEX;
        }


        return $this;
    } // setDeptheyelitflex()

    /**
     * Set the value of [deptheyelitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDeptheyelitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->deptheyelitpost !== $v) {
            $this->deptheyelitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHEYELITPOST;
        }


        return $this;
    } // setDeptheyelitpost()

    /**
     * Set the value of [depthpectoralmaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectoralmaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectoralmaxpre !== $v) {
            $this->depthpectoralmaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALMAXPRE;
        }


        return $this;
    } // setDepthpectoralmaxpre()

    /**
     * Set the value of [depthpectoralmaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectoralmaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectoralmaxflex !== $v) {
            $this->depthpectoralmaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALMAXFLEX;
        }


        return $this;
    } // setDepthpectoralmaxflex()

    /**
     * Set the value of [depthpectoralmaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectoralmaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectoralmaxpost !== $v) {
            $this->depthpectoralmaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALMAXPOST;
        }


        return $this;
    } // setDepthpectoralmaxpost()

    /**
     * Set the value of [depthpectoralminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectoralminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectoralminpre !== $v) {
            $this->depthpectoralminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALMINPRE;
        }


        return $this;
    } // setDepthpectoralminpre()

    /**
     * Set the value of [depthpectoralminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectoralminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectoralminflex !== $v) {
            $this->depthpectoralminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALMINFLEX;
        }


        return $this;
    } // setDepthpectoralminflex()

    /**
     * Set the value of [depthpectoralminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectoralminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectoralminpost !== $v) {
            $this->depthpectoralminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALMINPOST;
        }


        return $this;
    } // setDepthpectoralminpost()

    /**
     * Set the value of [depthpectorallitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectorallitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectorallitpre !== $v) {
            $this->depthpectorallitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALLITPRE;
        }


        return $this;
    } // setDepthpectorallitpre()

    /**
     * Set the value of [depthpectorallitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectorallitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectorallitflex !== $v) {
            $this->depthpectorallitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALLITFLEX;
        }


        return $this;
    } // setDepthpectorallitflex()

    /**
     * Set the value of [depthpectorallitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthpectorallitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthpectorallitpost !== $v) {
            $this->depthpectorallitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHPECTORALLITPOST;
        }


        return $this;
    } // setDepthpectorallitpost()

    /**
     * Set the value of [depthanusmaxpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanusmaxpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanusmaxpre !== $v) {
            $this->depthanusmaxpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSMAXPRE;
        }


        return $this;
    } // setDepthanusmaxpre()

    /**
     * Set the value of [depthanusmaxflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanusmaxflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanusmaxflex !== $v) {
            $this->depthanusmaxflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSMAXFLEX;
        }


        return $this;
    } // setDepthanusmaxflex()

    /**
     * Set the value of [depthanusmaxpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanusmaxpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanusmaxpost !== $v) {
            $this->depthanusmaxpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSMAXPOST;
        }


        return $this;
    } // setDepthanusmaxpost()

    /**
     * Set the value of [depthanusminpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanusminpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanusminpre !== $v) {
            $this->depthanusminpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSMINPRE;
        }


        return $this;
    } // setDepthanusminpre()

    /**
     * Set the value of [depthanusminflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanusminflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanusminflex !== $v) {
            $this->depthanusminflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSMINFLEX;
        }


        return $this;
    } // setDepthanusminflex()

    /**
     * Set the value of [depthanusminpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanusminpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanusminpost !== $v) {
            $this->depthanusminpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSMINPOST;
        }


        return $this;
    } // setDepthanusminpost()

    /**
     * Set the value of [depthanuslitpre] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanuslitpre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanuslitpre !== $v) {
            $this->depthanuslitpre = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSLITPRE;
        }


        return $this;
    } // setDepthanuslitpre()

    /**
     * Set the value of [depthanuslitflex] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanuslitflex($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanuslitflex !== $v) {
            $this->depthanuslitflex = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSLITFLEX;
        }


        return $this;
    } // setDepthanuslitflex()

    /**
     * Set the value of [depthanuslitpost] column.
     *
     * @param  double $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setDepthanuslitpost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depthanuslitpost !== $v) {
            $this->depthanuslitpost = $v;
            $this->modifiedColumns[] = LarvaePeer::DEPTHANUSLITPOST;
        }


        return $this;
    } // setDepthanuslitpost()

    /**
     * Set the value of [addcharyolks] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setAddcharyolks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addcharyolks !== $v) {
            $this->addcharyolks = $v;
            $this->modifiedColumns[] = LarvaePeer::ADDCHARYOLKS;
        }


        return $this;
    } // setAddcharyolks()

    /**
     * Set the value of [addcharposts] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setAddcharposts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->addcharposts !== $v) {
            $this->addcharposts = $v;
            $this->modifiedColumns[] = LarvaePeer::ADDCHARPOSTS;
        }


        return $this;
    } // setAddcharposts()

    /**
     * Set the value of [easeofid] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setEaseofid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->easeofid !== $v) {
            $this->easeofid = $v;
            $this->modifiedColumns[] = LarvaePeer::EASEOFID;
        }


        return $this;
    } // setEaseofid()

    /**
     * Set the value of [similarspecies1] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSimilarspecies1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->similarspecies1 !== $v) {
            $this->similarspecies1 = $v;
            $this->modifiedColumns[] = LarvaePeer::SIMILARSPECIES1;
        }


        return $this;
    } // setSimilarspecies1()

    /**
     * Set the value of [similarspec1remarks] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSimilarspec1remarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->similarspec1remarks !== $v) {
            $this->similarspec1remarks = $v;
            $this->modifiedColumns[] = LarvaePeer::SIMILARSPEC1REMARKS;
        }


        return $this;
    } // setSimilarspec1remarks()

    /**
     * Set the value of [similarspecies2] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSimilarspecies2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->similarspecies2 !== $v) {
            $this->similarspecies2 = $v;
            $this->modifiedColumns[] = LarvaePeer::SIMILARSPECIES2;
        }


        return $this;
    } // setSimilarspecies2()

    /**
     * Set the value of [similarspec2remarks] column.
     *
     * @param  string $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setSimilarspec2remarks($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->similarspec2remarks !== $v) {
            $this->similarspec2remarks = $v;
            $this->modifiedColumns[] = LarvaePeer::SIMILARSPEC2REMARKS;
        }


        return $this;
    } // setSimilarspec2remarks()

    /**
     * Set the value of [entered] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setEntered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entered !== $v) {
            $this->entered = $v;
            $this->modifiedColumns[] = LarvaePeer::ENTERED;
        }


        return $this;
    } // setEntered()

    /**
     * Sets the value of [dateentered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvae The current object (for fluent API support)
     */
    public function setDateentered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateentered !== null || $dt !== null) {
            $currentDateAsString = ($this->dateentered !== null && $tmpDt = new DateTime($this->dateentered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateentered = $newDateAsString;
                $this->modifiedColumns[] = LarvaePeer::DATEENTERED;
            }
        } // if either are not null


        return $this;
    } // setDateentered()

    /**
     * Set the value of [modified] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setModified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->modified !== $v) {
            $this->modified = $v;
            $this->modifiedColumns[] = LarvaePeer::MODIFIED;
        }


        return $this;
    } // setModified()

    /**
     * Sets the value of [datemodified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvae The current object (for fluent API support)
     */
    public function setDatemodified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemodified !== null || $dt !== null) {
            $currentDateAsString = ($this->datemodified !== null && $tmpDt = new DateTime($this->datemodified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemodified = $newDateAsString;
                $this->modifiedColumns[] = LarvaePeer::DATEMODIFIED;
            }
        } // if either are not null


        return $this;
    } // setDatemodified()

    /**
     * Set the value of [expert] column.
     *
     * @param  int $v new value
     * @return Larvae The current object (for fluent API support)
     */
    public function setExpert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->expert !== $v) {
            $this->expert = $v;
            $this->modifiedColumns[] = LarvaePeer::EXPERT;
        }


        return $this;
    } // setExpert()

    /**
     * Sets the value of [datechecked] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvae The current object (for fluent API support)
     */
    public function setDatechecked($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datechecked !== null || $dt !== null) {
            $currentDateAsString = ($this->datechecked !== null && $tmpDt = new DateTime($this->datechecked)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datechecked = $newDateAsString;
                $this->modifiedColumns[] = LarvaePeer::DATECHECKED;
            }
        } // if either are not null


        return $this;
    } // setDatechecked()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Larvae The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = LarvaePeer::TS;
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
            if ($this->placeofdevelopment !== '') {
                return false;
            }

            if ($this->lbirthmaxref !== 0) {
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

            $this->autoctr = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->stockcode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->speccode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->larvaerefno = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->otherref1 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->otherref2 = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->larvalarea = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->placeofdevelopment = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lhmax = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->lbirthmaxref = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->lhmin = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->lbirthminref = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->lhmid = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->lbirthmodref = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->preanallengthmaxy = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->preanmaxref = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->preanallengthminy = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->preanminref = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->preanallengthmody = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->preanmodref = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->flexlengthmin = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->flexlengthmod = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->flexlengthmax = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->flexlengthtype = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->flexlengthminref = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->flexlengthmodref = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->flexlengthmaxref = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->translengthmin = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->translengthmod = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->translengthmax = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->translengthtype = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->translengthminref = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->translengthmodref = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->translengthmaxref = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->larvaldurationmin = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->larvaldurationminref = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->larvaldurationmax = ($row[$startcol + 36] !== null) ? (double) $row[$startcol + 36] : null;
            $this->larvaldurationmaxref = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->larvaldurationmod = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->larvaldurationmodref = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->shapeofyolksac = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->yolksacpigm = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->yolksacsegm = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->yolkref = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->oilglobules = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->oilglobuleposh = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->oilglobuleposv = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->oilglobulepigm = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->rowsontaily = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->othermelontaily = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->melonheadtrunky = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->lyamax = ($row[$startcol + 51] !== null) ? (double) $row[$startcol + 51] : null;
            $this->l1feedmaxref = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->lyamin = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->l1feedminref = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->lyamod = ($row[$startcol + 55] !== null) ? (double) $row[$startcol + 55] : null;
            $this->l1feedmodref = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->janlarv = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->feblarv = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->marlarv = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->aprlarv = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->maylarv = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->junlarv = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->jullarv = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->auglarv = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->seplarv = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->octlarv = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->novlarv = ($row[$startcol + 67] !== null) ? (boolean) $row[$startcol + 67] : null;
            $this->declarv = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->presenceref = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->waterdepthmax = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->watertempmax = ($row[$startcol + 71] !== null) ? (double) $row[$startcol + 71] : null;
            $this->salinitymax = ($row[$startcol + 72] !== null) ? (double) $row[$startcol + 72] : null;
            $this->ph = ($row[$startcol + 73] !== null) ? (double) $row[$startcol + 73] : null;
            $this->oxygenmax = ($row[$startcol + 74] !== null) ? (double) $row[$startcol + 74] : null;
            $this->watermaxref = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->waterdepthmin = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->watertempmin = ($row[$startcol + 77] !== null) ? (double) $row[$startcol + 77] : null;
            $this->salinitymin = ($row[$startcol + 78] !== null) ? (double) $row[$startcol + 78] : null;
            $this->phmin = ($row[$startcol + 79] !== null) ? (double) $row[$startcol + 79] : null;
            $this->oxygenmin = ($row[$startcol + 80] !== null) ? (double) $row[$startcol + 80] : null;
            $this->waterminref = ($row[$startcol + 81] !== null) ? (int) $row[$startcol + 81] : null;
            $this->waterdepthmod = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->watertempmod = ($row[$startcol + 83] !== null) ? (double) $row[$startcol + 83] : null;
            $this->salinitymod = ($row[$startcol + 84] !== null) ? (double) $row[$startcol + 84] : null;
            $this->phmod = ($row[$startcol + 85] !== null) ? (double) $row[$startcol + 85] : null;
            $this->oxygenmod = ($row[$startcol + 86] !== null) ? (double) $row[$startcol + 86] : null;
            $this->watermodref = ($row[$startcol + 87] !== null) ? (int) $row[$startcol + 87] : null;
            $this->strikingfeature = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->larvapic = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->strikingshapelat = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->strikingshapedors = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->bodyform = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->shapeofgut = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->gasbladderearly = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->gasbladderlate = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->spinalarmatureearl = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->spinalarmaturelate = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->rowsontaile = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->othermelontaile = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->melonheadtrunke = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->rowsontaill = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->othermelontaill = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->melonheadtrunkl = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->urostyleregion = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->urostyleregionlate = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
            $this->peritoneum = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->pectoralsi = ($row[$startcol + 107] !== null) ? (string) $row[$startcol + 107] : null;
            $this->pectoralsii = ($row[$startcol + 108] !== null) ? (string) $row[$startcol + 108] : null;
            $this->pelvicsi = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->pelvicsii = ($row[$startcol + 110] !== null) ? (string) $row[$startcol + 110] : null;
            $this->myomeresmax = ($row[$startcol + 111] !== null) ? (int) $row[$startcol + 111] : null;
            $this->myomeresmin = ($row[$startcol + 112] !== null) ? (int) $row[$startcol + 112] : null;
            $this->myomeresmod = ($row[$startcol + 113] !== null) ? (int) $row[$startcol + 113] : null;
            $this->myomvert = ($row[$startcol + 114] !== null) ? (string) $row[$startcol + 114] : null;
            $this->totmyomref = ($row[$startcol + 115] !== null) ? (int) $row[$startcol + 115] : null;
            $this->myomeresmaxprean = ($row[$startcol + 116] !== null) ? (int) $row[$startcol + 116] : null;
            $this->myomeresminprean = ($row[$startcol + 117] !== null) ? (int) $row[$startcol + 117] : null;
            $this->myomeresmodprean = ($row[$startcol + 118] !== null) ? (int) $row[$startcol + 118] : null;
            $this->myomvert2 = ($row[$startcol + 119] !== null) ? (string) $row[$startcol + 119] : null;
            $this->preanmyoref = ($row[$startcol + 120] !== null) ? (int) $row[$startcol + 120] : null;
            $this->rllatepre = ($row[$startcol + 121] !== null) ? (double) $row[$startcol + 121] : null;
            $this->rllateflex = ($row[$startcol + 122] !== null) ? (double) $row[$startcol + 122] : null;
            $this->rllatepost = ($row[$startcol + 123] !== null) ? (double) $row[$startcol + 123] : null;
            $this->rlearlypre = ($row[$startcol + 124] !== null) ? (double) $row[$startcol + 124] : null;
            $this->rlearlyflex = ($row[$startcol + 125] !== null) ? (double) $row[$startcol + 125] : null;
            $this->rlearlypost = ($row[$startcol + 126] !== null) ? (double) $row[$startcol + 126] : null;
            $this->rlflexpre = ($row[$startcol + 127] !== null) ? (double) $row[$startcol + 127] : null;
            $this->rlflexflex = ($row[$startcol + 128] !== null) ? (double) $row[$startcol + 128] : null;
            $this->rlflexpost = ($row[$startcol + 129] !== null) ? (double) $row[$startcol + 129] : null;
            $this->measurementspreref = ($row[$startcol + 130] !== null) ? (int) $row[$startcol + 130] : null;
            $this->measurementsflexref = ($row[$startcol + 131] !== null) ? (int) $row[$startcol + 131] : null;
            $this->measurementspostref = ($row[$startcol + 132] !== null) ? (int) $row[$startcol + 132] : null;
            $this->typepre = ($row[$startcol + 133] !== null) ? (string) $row[$startcol + 133] : null;
            $this->typeflex = ($row[$startcol + 134] !== null) ? (string) $row[$startcol + 134] : null;
            $this->typepost = ($row[$startcol + 135] !== null) ? (string) $row[$startcol + 135] : null;
            $this->comment = ($row[$startcol + 136] !== null) ? (string) $row[$startcol + 136] : null;
            $this->preanallengthmaxpre = ($row[$startcol + 137] !== null) ? (double) $row[$startcol + 137] : null;
            $this->preanallengthmaxflex = ($row[$startcol + 138] !== null) ? (double) $row[$startcol + 138] : null;
            $this->preanallengthmaxpost = ($row[$startcol + 139] !== null) ? (double) $row[$startcol + 139] : null;
            $this->preanallengthminpre = ($row[$startcol + 140] !== null) ? (double) $row[$startcol + 140] : null;
            $this->preanallengthminflex = ($row[$startcol + 141] !== null) ? (double) $row[$startcol + 141] : null;
            $this->preanallengthminpost = ($row[$startcol + 142] !== null) ? (double) $row[$startcol + 142] : null;
            $this->preanallengthlitpre = ($row[$startcol + 143] !== null) ? (double) $row[$startcol + 143] : null;
            $this->preanallengthlitflex = ($row[$startcol + 144] !== null) ? (double) $row[$startcol + 144] : null;
            $this->preanallengthlitpost = ($row[$startcol + 145] !== null) ? (double) $row[$startcol + 145] : null;
            $this->prepeclengthmaxpre = ($row[$startcol + 146] !== null) ? (double) $row[$startcol + 146] : null;
            $this->prepeclengthmaxflex = ($row[$startcol + 147] !== null) ? (double) $row[$startcol + 147] : null;
            $this->prepeclengthmaxpost = ($row[$startcol + 148] !== null) ? (double) $row[$startcol + 148] : null;
            $this->prepeclengthminpre = ($row[$startcol + 149] !== null) ? (double) $row[$startcol + 149] : null;
            $this->prepeclengthminflex = ($row[$startcol + 150] !== null) ? (double) $row[$startcol + 150] : null;
            $this->prepeclengthminpost = ($row[$startcol + 151] !== null) ? (double) $row[$startcol + 151] : null;
            $this->prepeclengthlitpre = ($row[$startcol + 152] !== null) ? (double) $row[$startcol + 152] : null;
            $this->prepeclengthlitflex = ($row[$startcol + 153] !== null) ? (double) $row[$startcol + 153] : null;
            $this->prepeclengthlitpost = ($row[$startcol + 154] !== null) ? (double) $row[$startcol + 154] : null;
            $this->preorbitalmaxpre = ($row[$startcol + 155] !== null) ? (double) $row[$startcol + 155] : null;
            $this->preorbitalmaxflex = ($row[$startcol + 156] !== null) ? (double) $row[$startcol + 156] : null;
            $this->preorbitalmaxpost = ($row[$startcol + 157] !== null) ? (double) $row[$startcol + 157] : null;
            $this->preorbitalminpre = ($row[$startcol + 158] !== null) ? (double) $row[$startcol + 158] : null;
            $this->preorbitalminflex = ($row[$startcol + 159] !== null) ? (double) $row[$startcol + 159] : null;
            $this->preorbitalminpost = ($row[$startcol + 160] !== null) ? (double) $row[$startcol + 160] : null;
            $this->preorbitallitpre = ($row[$startcol + 161] !== null) ? (double) $row[$startcol + 161] : null;
            $this->preorbitallitflex = ($row[$startcol + 162] !== null) ? (double) $row[$startcol + 162] : null;
            $this->preorbitallitpost = ($row[$startcol + 163] !== null) ? (double) $row[$startcol + 163] : null;
            $this->diameterofeyemaxpre = ($row[$startcol + 164] !== null) ? (double) $row[$startcol + 164] : null;
            $this->diameterofeyemaxflex = ($row[$startcol + 165] !== null) ? (double) $row[$startcol + 165] : null;
            $this->diameterofeyemaxpost = ($row[$startcol + 166] !== null) ? (double) $row[$startcol + 166] : null;
            $this->diameterofeyeminpre = ($row[$startcol + 167] !== null) ? (double) $row[$startcol + 167] : null;
            $this->diameterofeyeminflex = ($row[$startcol + 168] !== null) ? (double) $row[$startcol + 168] : null;
            $this->diameterofeyeminpost = ($row[$startcol + 169] !== null) ? (double) $row[$startcol + 169] : null;
            $this->diameterofeyelitpre = ($row[$startcol + 170] !== null) ? (double) $row[$startcol + 170] : null;
            $this->diameterofeyelitflex = ($row[$startcol + 171] !== null) ? (double) $row[$startcol + 171] : null;
            $this->diameterofeyelitpost = ($row[$startcol + 172] !== null) ? (double) $row[$startcol + 172] : null;
            $this->deptheyemaxpre = ($row[$startcol + 173] !== null) ? (double) $row[$startcol + 173] : null;
            $this->deptheyemaxflex = ($row[$startcol + 174] !== null) ? (double) $row[$startcol + 174] : null;
            $this->deptheyemaxpost = ($row[$startcol + 175] !== null) ? (double) $row[$startcol + 175] : null;
            $this->deptheyeminpre = ($row[$startcol + 176] !== null) ? (double) $row[$startcol + 176] : null;
            $this->deptheyeminflex = ($row[$startcol + 177] !== null) ? (double) $row[$startcol + 177] : null;
            $this->deptheyeminpost = ($row[$startcol + 178] !== null) ? (double) $row[$startcol + 178] : null;
            $this->deptheyelitpre = ($row[$startcol + 179] !== null) ? (double) $row[$startcol + 179] : null;
            $this->deptheyelitflex = ($row[$startcol + 180] !== null) ? (double) $row[$startcol + 180] : null;
            $this->deptheyelitpost = ($row[$startcol + 181] !== null) ? (double) $row[$startcol + 181] : null;
            $this->depthpectoralmaxpre = ($row[$startcol + 182] !== null) ? (double) $row[$startcol + 182] : null;
            $this->depthpectoralmaxflex = ($row[$startcol + 183] !== null) ? (double) $row[$startcol + 183] : null;
            $this->depthpectoralmaxpost = ($row[$startcol + 184] !== null) ? (double) $row[$startcol + 184] : null;
            $this->depthpectoralminpre = ($row[$startcol + 185] !== null) ? (double) $row[$startcol + 185] : null;
            $this->depthpectoralminflex = ($row[$startcol + 186] !== null) ? (double) $row[$startcol + 186] : null;
            $this->depthpectoralminpost = ($row[$startcol + 187] !== null) ? (double) $row[$startcol + 187] : null;
            $this->depthpectorallitpre = ($row[$startcol + 188] !== null) ? (double) $row[$startcol + 188] : null;
            $this->depthpectorallitflex = ($row[$startcol + 189] !== null) ? (double) $row[$startcol + 189] : null;
            $this->depthpectorallitpost = ($row[$startcol + 190] !== null) ? (double) $row[$startcol + 190] : null;
            $this->depthanusmaxpre = ($row[$startcol + 191] !== null) ? (double) $row[$startcol + 191] : null;
            $this->depthanusmaxflex = ($row[$startcol + 192] !== null) ? (double) $row[$startcol + 192] : null;
            $this->depthanusmaxpost = ($row[$startcol + 193] !== null) ? (double) $row[$startcol + 193] : null;
            $this->depthanusminpre = ($row[$startcol + 194] !== null) ? (double) $row[$startcol + 194] : null;
            $this->depthanusminflex = ($row[$startcol + 195] !== null) ? (double) $row[$startcol + 195] : null;
            $this->depthanusminpost = ($row[$startcol + 196] !== null) ? (double) $row[$startcol + 196] : null;
            $this->depthanuslitpre = ($row[$startcol + 197] !== null) ? (double) $row[$startcol + 197] : null;
            $this->depthanuslitflex = ($row[$startcol + 198] !== null) ? (double) $row[$startcol + 198] : null;
            $this->depthanuslitpost = ($row[$startcol + 199] !== null) ? (double) $row[$startcol + 199] : null;
            $this->addcharyolks = ($row[$startcol + 200] !== null) ? (string) $row[$startcol + 200] : null;
            $this->addcharposts = ($row[$startcol + 201] !== null) ? (string) $row[$startcol + 201] : null;
            $this->easeofid = ($row[$startcol + 202] !== null) ? (string) $row[$startcol + 202] : null;
            $this->similarspecies1 = ($row[$startcol + 203] !== null) ? (int) $row[$startcol + 203] : null;
            $this->similarspec1remarks = ($row[$startcol + 204] !== null) ? (string) $row[$startcol + 204] : null;
            $this->similarspecies2 = ($row[$startcol + 205] !== null) ? (int) $row[$startcol + 205] : null;
            $this->similarspec2remarks = ($row[$startcol + 206] !== null) ? (string) $row[$startcol + 206] : null;
            $this->entered = ($row[$startcol + 207] !== null) ? (int) $row[$startcol + 207] : null;
            $this->dateentered = ($row[$startcol + 208] !== null) ? (string) $row[$startcol + 208] : null;
            $this->modified = ($row[$startcol + 209] !== null) ? (int) $row[$startcol + 209] : null;
            $this->datemodified = ($row[$startcol + 210] !== null) ? (string) $row[$startcol + 210] : null;
            $this->expert = ($row[$startcol + 211] !== null) ? (int) $row[$startcol + 211] : null;
            $this->datechecked = ($row[$startcol + 212] !== null) ? (string) $row[$startcol + 212] : null;
            $this->ts = ($row[$startcol + 213] !== null) ? (string) $row[$startcol + 213] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 214; // 214 = LarvaePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Larvae object", $e);
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
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LarvaePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LarvaeQuery::create()
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
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LarvaePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(LarvaePeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(LarvaePeer::STOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`StockCode`';
        }
        if ($this->isColumnModified(LarvaePeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`SpecCode`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVAEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`LarvaeRefNo`';
        }
        if ($this->isColumnModified(LarvaePeer::OTHERREF1)) {
            $modifiedColumns[':p' . $index++]  = '`OtherRef1`';
        }
        if ($this->isColumnModified(LarvaePeer::OTHERREF2)) {
            $modifiedColumns[':p' . $index++]  = '`OtherRef2`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALAREA)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalArea`';
        }
        if ($this->isColumnModified(LarvaePeer::PLACEOFDEVELOPMENT)) {
            $modifiedColumns[':p' . $index++]  = '`PlaceofDevelopment`';
        }
        if ($this->isColumnModified(LarvaePeer::LHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LhMax`';
        }
        if ($this->isColumnModified(LarvaePeer::LBIRTHMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`LBirthmaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LhMin`';
        }
        if ($this->isColumnModified(LarvaePeer::LBIRTHMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`LBirthminRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LHMID)) {
            $modifiedColumns[':p' . $index++]  = '`LhMid`';
        }
        if ($this->isColumnModified(LarvaePeer::LBIRTHMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`LBirthmodRef`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXY)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMaxY`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`PreAnmaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINY)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMinY`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`PreAnminRef`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMODY)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthModY`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`PreAnmodRef`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthMin`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthMod`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthMax`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthType`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthMinRef`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthModRef`';
        }
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`FlexLengthMaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthMin`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthMod`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthMax`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthType`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthMinRef`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthModRef`';
        }
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`TransLengthMaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalDurationMin`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalDurationMinRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalDurationMax`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalDurationMaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMOD)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalDurationMod`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`LarvalDurationModRef`';
        }
        if ($this->isColumnModified(LarvaePeer::SHAPEOFYOLKSAC)) {
            $modifiedColumns[':p' . $index++]  = '`Shapeofyolksac`';
        }
        if ($this->isColumnModified(LarvaePeer::YOLKSACPIGM)) {
            $modifiedColumns[':p' . $index++]  = '`YolksacPigm`';
        }
        if ($this->isColumnModified(LarvaePeer::YOLKSACSEGM)) {
            $modifiedColumns[':p' . $index++]  = '`YolksacSegm`';
        }
        if ($this->isColumnModified(LarvaePeer::YOLKREF)) {
            $modifiedColumns[':p' . $index++]  = '`YolkRef`';
        }
        if ($this->isColumnModified(LarvaePeer::OILGLOBULES)) {
            $modifiedColumns[':p' . $index++]  = '`OilGlobules`';
        }
        if ($this->isColumnModified(LarvaePeer::OILGLOBULEPOSH)) {
            $modifiedColumns[':p' . $index++]  = '`OilGlobuleposH`';
        }
        if ($this->isColumnModified(LarvaePeer::OILGLOBULEPOSV)) {
            $modifiedColumns[':p' . $index++]  = '`OilGlobuleposV`';
        }
        if ($this->isColumnModified(LarvaePeer::OILGLOBULEPIGM)) {
            $modifiedColumns[':p' . $index++]  = '`OilGlobulePigm`';
        }
        if ($this->isColumnModified(LarvaePeer::ROWSONTAILY)) {
            $modifiedColumns[':p' . $index++]  = '`RowsonTailY`';
        }
        if ($this->isColumnModified(LarvaePeer::OTHERMELONTAILY)) {
            $modifiedColumns[':p' . $index++]  = '`OtherMelOnTailY`';
        }
        if ($this->isColumnModified(LarvaePeer::MELONHEADTRUNKY)) {
            $modifiedColumns[':p' . $index++]  = '`MelonHeadTrunkY`';
        }
        if ($this->isColumnModified(LarvaePeer::LYAMAX)) {
            $modifiedColumns[':p' . $index++]  = '`LyaMax`';
        }
        if ($this->isColumnModified(LarvaePeer::L1FEEDMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`L1FeedmaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LYAMIN)) {
            $modifiedColumns[':p' . $index++]  = '`LyaMin`';
        }
        if ($this->isColumnModified(LarvaePeer::L1FEEDMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`L1FeedminRef`';
        }
        if ($this->isColumnModified(LarvaePeer::LYAMOD)) {
            $modifiedColumns[':p' . $index++]  = '`LyaMod`';
        }
        if ($this->isColumnModified(LarvaePeer::L1FEEDMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`L1FeedmodRef`';
        }
        if ($this->isColumnModified(LarvaePeer::JANLARV)) {
            $modifiedColumns[':p' . $index++]  = '`JanLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::FEBLARV)) {
            $modifiedColumns[':p' . $index++]  = '`FebLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::MARLARV)) {
            $modifiedColumns[':p' . $index++]  = '`MarLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::APRLARV)) {
            $modifiedColumns[':p' . $index++]  = '`AprLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::MAYLARV)) {
            $modifiedColumns[':p' . $index++]  = '`MayLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::JUNLARV)) {
            $modifiedColumns[':p' . $index++]  = '`JunLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::JULLARV)) {
            $modifiedColumns[':p' . $index++]  = '`JulLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::AUGLARV)) {
            $modifiedColumns[':p' . $index++]  = '`AugLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::SEPLARV)) {
            $modifiedColumns[':p' . $index++]  = '`SepLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::OCTLARV)) {
            $modifiedColumns[':p' . $index++]  = '`OctLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::NOVLARV)) {
            $modifiedColumns[':p' . $index++]  = '`NovLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::DECLARV)) {
            $modifiedColumns[':p' . $index++]  = '`DecLarv`';
        }
        if ($this->isColumnModified(LarvaePeer::PRESENCEREF)) {
            $modifiedColumns[':p' . $index++]  = '`PresenceRef`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERDEPTHMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WaterDepthMax`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERTEMPMAX)) {
            $modifiedColumns[':p' . $index++]  = '`WaterTempMax`';
        }
        if ($this->isColumnModified(LarvaePeer::SALINITYMAX)) {
            $modifiedColumns[':p' . $index++]  = '`SalinityMax`';
        }
        if ($this->isColumnModified(LarvaePeer::PH)) {
            $modifiedColumns[':p' . $index++]  = '`pH`';
        }
        if ($this->isColumnModified(LarvaePeer::OXYGENMAX)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMax`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERMAXREF)) {
            $modifiedColumns[':p' . $index++]  = '`WatermaxRef`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERDEPTHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WaterDepthMin`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERTEMPMIN)) {
            $modifiedColumns[':p' . $index++]  = '`WaterTempMin`';
        }
        if ($this->isColumnModified(LarvaePeer::SALINITYMIN)) {
            $modifiedColumns[':p' . $index++]  = '`SalinityMin`';
        }
        if ($this->isColumnModified(LarvaePeer::PHMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pHMin`';
        }
        if ($this->isColumnModified(LarvaePeer::OXYGENMIN)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMin`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERMINREF)) {
            $modifiedColumns[':p' . $index++]  = '`WaterminRef`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERDEPTHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`WaterDepthMod`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERTEMPMOD)) {
            $modifiedColumns[':p' . $index++]  = '`WaterTempMod`';
        }
        if ($this->isColumnModified(LarvaePeer::SALINITYMOD)) {
            $modifiedColumns[':p' . $index++]  = '`SalinityMod`';
        }
        if ($this->isColumnModified(LarvaePeer::PHMOD)) {
            $modifiedColumns[':p' . $index++]  = '`pHMod`';
        }
        if ($this->isColumnModified(LarvaePeer::OXYGENMOD)) {
            $modifiedColumns[':p' . $index++]  = '`OxygenMod`';
        }
        if ($this->isColumnModified(LarvaePeer::WATERMODREF)) {
            $modifiedColumns[':p' . $index++]  = '`WatermodRef`';
        }
        if ($this->isColumnModified(LarvaePeer::STRIKINGFEATURE)) {
            $modifiedColumns[':p' . $index++]  = '`StrikingFeature`';
        }
        if ($this->isColumnModified(LarvaePeer::LARVAPIC)) {
            $modifiedColumns[':p' . $index++]  = '`LarvaPic`';
        }
        if ($this->isColumnModified(LarvaePeer::STRIKINGSHAPELAT)) {
            $modifiedColumns[':p' . $index++]  = '`StrikingShapeLat`';
        }
        if ($this->isColumnModified(LarvaePeer::STRIKINGSHAPEDORS)) {
            $modifiedColumns[':p' . $index++]  = '`StrikingShapeDors`';
        }
        if ($this->isColumnModified(LarvaePeer::BODYFORM)) {
            $modifiedColumns[':p' . $index++]  = '`BodyForm`';
        }
        if ($this->isColumnModified(LarvaePeer::SHAPEOFGUT)) {
            $modifiedColumns[':p' . $index++]  = '`ShapeofGut`';
        }
        if ($this->isColumnModified(LarvaePeer::GASBLADDEREARLY)) {
            $modifiedColumns[':p' . $index++]  = '`GasBladderEarly`';
        }
        if ($this->isColumnModified(LarvaePeer::GASBLADDERLATE)) {
            $modifiedColumns[':p' . $index++]  = '`GasBladderLate`';
        }
        if ($this->isColumnModified(LarvaePeer::SPINALARMATUREEARL)) {
            $modifiedColumns[':p' . $index++]  = '`SpinalArmatureEarl`';
        }
        if ($this->isColumnModified(LarvaePeer::SPINALARMATURELATE)) {
            $modifiedColumns[':p' . $index++]  = '`SpinalArmatureLate`';
        }
        if ($this->isColumnModified(LarvaePeer::ROWSONTAILE)) {
            $modifiedColumns[':p' . $index++]  = '`RowsonTailE`';
        }
        if ($this->isColumnModified(LarvaePeer::OTHERMELONTAILE)) {
            $modifiedColumns[':p' . $index++]  = '`OtherMelonTailE`';
        }
        if ($this->isColumnModified(LarvaePeer::MELONHEADTRUNKE)) {
            $modifiedColumns[':p' . $index++]  = '`MelonHeadTrunkE`';
        }
        if ($this->isColumnModified(LarvaePeer::ROWSONTAILL)) {
            $modifiedColumns[':p' . $index++]  = '`RowsonTaill`';
        }
        if ($this->isColumnModified(LarvaePeer::OTHERMELONTAILL)) {
            $modifiedColumns[':p' . $index++]  = '`OtherMelonTaill`';
        }
        if ($this->isColumnModified(LarvaePeer::MELONHEADTRUNKL)) {
            $modifiedColumns[':p' . $index++]  = '`MelonHeadTrunkl`';
        }
        if ($this->isColumnModified(LarvaePeer::UROSTYLEREGION)) {
            $modifiedColumns[':p' . $index++]  = '`UrostyleRegion`';
        }
        if ($this->isColumnModified(LarvaePeer::UROSTYLEREGIONLATE)) {
            $modifiedColumns[':p' . $index++]  = '`UrostyleRegionLate`';
        }
        if ($this->isColumnModified(LarvaePeer::PERITONEUM)) {
            $modifiedColumns[':p' . $index++]  = '`Peritoneum`';
        }
        if ($this->isColumnModified(LarvaePeer::PECTORALSI)) {
            $modifiedColumns[':p' . $index++]  = '`PectoralsI`';
        }
        if ($this->isColumnModified(LarvaePeer::PECTORALSII)) {
            $modifiedColumns[':p' . $index++]  = '`PectoralsII`';
        }
        if ($this->isColumnModified(LarvaePeer::PELVICSI)) {
            $modifiedColumns[':p' . $index++]  = '`PelvicsI`';
        }
        if ($this->isColumnModified(LarvaePeer::PELVICSII)) {
            $modifiedColumns[':p' . $index++]  = '`PelvicsII`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMERESMAX)) {
            $modifiedColumns[':p' . $index++]  = '`MyomeresMax`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMERESMIN)) {
            $modifiedColumns[':p' . $index++]  = '`MyomeresMin`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMERESMOD)) {
            $modifiedColumns[':p' . $index++]  = '`MyomeresMod`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMVERT)) {
            $modifiedColumns[':p' . $index++]  = '`MyomVert`';
        }
        if ($this->isColumnModified(LarvaePeer::TOTMYOMREF)) {
            $modifiedColumns[':p' . $index++]  = '`TotMyomRef`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMERESMAXPREAN)) {
            $modifiedColumns[':p' . $index++]  = '`MyomeresMaxPrean`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMERESMINPREAN)) {
            $modifiedColumns[':p' . $index++]  = '`MyomeresMinPrean`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMERESMODPREAN)) {
            $modifiedColumns[':p' . $index++]  = '`MyomeresModPrean`';
        }
        if ($this->isColumnModified(LarvaePeer::MYOMVERT2)) {
            $modifiedColumns[':p' . $index++]  = '`MyomVert2`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANMYOREF)) {
            $modifiedColumns[':p' . $index++]  = '`PreAnMyoRef`';
        }
        if ($this->isColumnModified(LarvaePeer::RLLATEPRE)) {
            $modifiedColumns[':p' . $index++]  = '`RLLatePre`';
        }
        if ($this->isColumnModified(LarvaePeer::RLLATEFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`RLLateFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::RLLATEPOST)) {
            $modifiedColumns[':p' . $index++]  = '`RLLatePost`';
        }
        if ($this->isColumnModified(LarvaePeer::RLEARLYPRE)) {
            $modifiedColumns[':p' . $index++]  = '`RLEarlyPre`';
        }
        if ($this->isColumnModified(LarvaePeer::RLEARLYFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`RLEarlyFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::RLEARLYPOST)) {
            $modifiedColumns[':p' . $index++]  = '`RLEarlyPost`';
        }
        if ($this->isColumnModified(LarvaePeer::RLFLEXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`RLFlexPre`';
        }
        if ($this->isColumnModified(LarvaePeer::RLFLEXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`RLFlexFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::RLFLEXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`RLFlexPost`';
        }
        if ($this->isColumnModified(LarvaePeer::MEASUREMENTSPREREF)) {
            $modifiedColumns[':p' . $index++]  = '`MeasurementsPreRef`';
        }
        if ($this->isColumnModified(LarvaePeer::MEASUREMENTSFLEXREF)) {
            $modifiedColumns[':p' . $index++]  = '`MeasurementsFlexRef`';
        }
        if ($this->isColumnModified(LarvaePeer::MEASUREMENTSPOSTREF)) {
            $modifiedColumns[':p' . $index++]  = '`MeasurementsPostRef`';
        }
        if ($this->isColumnModified(LarvaePeer::TYPEPRE)) {
            $modifiedColumns[':p' . $index++]  = '`TypePre`';
        }
        if ($this->isColumnModified(LarvaePeer::TYPEFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`TypeFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::TYPEPOST)) {
            $modifiedColumns[':p' . $index++]  = '`TypePost`';
        }
        if ($this->isColumnModified(LarvaePeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`comment`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHLITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHLITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHLITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PreanalLengthLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHLITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHLITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHLITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PrepecLengthLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALLITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALLITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::PREORBITALLITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`PreorbitalLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYELITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYELITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYELITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DiameterofEyeLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYELITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYELITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHEYELITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthEyeLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALLITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALLITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALLITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthPectoralLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMAXPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusMaxPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMAXFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusMaxFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMAXPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusMaxPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMINPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusMinPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMINFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusMinFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMINPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusMinPost`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSLITPRE)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusLitPre`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSLITFLEX)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusLitFlex`';
        }
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSLITPOST)) {
            $modifiedColumns[':p' . $index++]  = '`DepthAnusLitPost`';
        }
        if ($this->isColumnModified(LarvaePeer::ADDCHARYOLKS)) {
            $modifiedColumns[':p' . $index++]  = '`AddCharYolks`';
        }
        if ($this->isColumnModified(LarvaePeer::ADDCHARPOSTS)) {
            $modifiedColumns[':p' . $index++]  = '`AddCharPosts`';
        }
        if ($this->isColumnModified(LarvaePeer::EASEOFID)) {
            $modifiedColumns[':p' . $index++]  = '`EaseofID`';
        }
        if ($this->isColumnModified(LarvaePeer::SIMILARSPECIES1)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpecies1`';
        }
        if ($this->isColumnModified(LarvaePeer::SIMILARSPEC1REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpec1Remarks`';
        }
        if ($this->isColumnModified(LarvaePeer::SIMILARSPECIES2)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpecies2`';
        }
        if ($this->isColumnModified(LarvaePeer::SIMILARSPEC2REMARKS)) {
            $modifiedColumns[':p' . $index++]  = '`SimilarSpec2Remarks`';
        }
        if ($this->isColumnModified(LarvaePeer::ENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`Entered`';
        }
        if ($this->isColumnModified(LarvaePeer::DATEENTERED)) {
            $modifiedColumns[':p' . $index++]  = '`DateEntered`';
        }
        if ($this->isColumnModified(LarvaePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`Modified`';
        }
        if ($this->isColumnModified(LarvaePeer::DATEMODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`DateModified`';
        }
        if ($this->isColumnModified(LarvaePeer::EXPERT)) {
            $modifiedColumns[':p' . $index++]  = '`Expert`';
        }
        if ($this->isColumnModified(LarvaePeer::DATECHECKED)) {
            $modifiedColumns[':p' . $index++]  = '`DateChecked`';
        }
        if ($this->isColumnModified(LarvaePeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `larvae` (%s) VALUES (%s)',
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
                    case '`StockCode`':
                        $stmt->bindValue($identifier, $this->stockcode, PDO::PARAM_INT);
                        break;
                    case '`SpecCode`':
                        $stmt->bindValue($identifier, $this->speccode, PDO::PARAM_INT);
                        break;
                    case '`LarvaeRefNo`':
                        $stmt->bindValue($identifier, $this->larvaerefno, PDO::PARAM_INT);
                        break;
                    case '`OtherRef1`':
                        $stmt->bindValue($identifier, $this->otherref1, PDO::PARAM_INT);
                        break;
                    case '`OtherRef2`':
                        $stmt->bindValue($identifier, $this->otherref2, PDO::PARAM_INT);
                        break;
                    case '`LarvalArea`':
                        $stmt->bindValue($identifier, $this->larvalarea, PDO::PARAM_STR);
                        break;
                    case '`PlaceofDevelopment`':
                        $stmt->bindValue($identifier, $this->placeofdevelopment, PDO::PARAM_STR);
                        break;
                    case '`LhMax`':
                        $stmt->bindValue($identifier, $this->lhmax, PDO::PARAM_STR);
                        break;
                    case '`LBirthmaxRef`':
                        $stmt->bindValue($identifier, $this->lbirthmaxref, PDO::PARAM_INT);
                        break;
                    case '`LhMin`':
                        $stmt->bindValue($identifier, $this->lhmin, PDO::PARAM_STR);
                        break;
                    case '`LBirthminRef`':
                        $stmt->bindValue($identifier, $this->lbirthminref, PDO::PARAM_INT);
                        break;
                    case '`LhMid`':
                        $stmt->bindValue($identifier, $this->lhmid, PDO::PARAM_STR);
                        break;
                    case '`LBirthmodRef`':
                        $stmt->bindValue($identifier, $this->lbirthmodref, PDO::PARAM_INT);
                        break;
                    case '`PreanalLengthMaxY`':
                        $stmt->bindValue($identifier, $this->preanallengthmaxy, PDO::PARAM_STR);
                        break;
                    case '`PreAnmaxRef`':
                        $stmt->bindValue($identifier, $this->preanmaxref, PDO::PARAM_INT);
                        break;
                    case '`PreanalLengthMinY`':
                        $stmt->bindValue($identifier, $this->preanallengthminy, PDO::PARAM_STR);
                        break;
                    case '`PreAnminRef`':
                        $stmt->bindValue($identifier, $this->preanminref, PDO::PARAM_INT);
                        break;
                    case '`PreanalLengthModY`':
                        $stmt->bindValue($identifier, $this->preanallengthmody, PDO::PARAM_STR);
                        break;
                    case '`PreAnmodRef`':
                        $stmt->bindValue($identifier, $this->preanmodref, PDO::PARAM_INT);
                        break;
                    case '`FlexLengthMin`':
                        $stmt->bindValue($identifier, $this->flexlengthmin, PDO::PARAM_STR);
                        break;
                    case '`FlexLengthMod`':
                        $stmt->bindValue($identifier, $this->flexlengthmod, PDO::PARAM_STR);
                        break;
                    case '`FlexLengthMax`':
                        $stmt->bindValue($identifier, $this->flexlengthmax, PDO::PARAM_STR);
                        break;
                    case '`FlexLengthType`':
                        $stmt->bindValue($identifier, $this->flexlengthtype, PDO::PARAM_STR);
                        break;
                    case '`FlexLengthMinRef`':
                        $stmt->bindValue($identifier, $this->flexlengthminref, PDO::PARAM_INT);
                        break;
                    case '`FlexLengthModRef`':
                        $stmt->bindValue($identifier, $this->flexlengthmodref, PDO::PARAM_INT);
                        break;
                    case '`FlexLengthMaxRef`':
                        $stmt->bindValue($identifier, $this->flexlengthmaxref, PDO::PARAM_INT);
                        break;
                    case '`TransLengthMin`':
                        $stmt->bindValue($identifier, $this->translengthmin, PDO::PARAM_STR);
                        break;
                    case '`TransLengthMod`':
                        $stmt->bindValue($identifier, $this->translengthmod, PDO::PARAM_STR);
                        break;
                    case '`TransLengthMax`':
                        $stmt->bindValue($identifier, $this->translengthmax, PDO::PARAM_STR);
                        break;
                    case '`TransLengthType`':
                        $stmt->bindValue($identifier, $this->translengthtype, PDO::PARAM_STR);
                        break;
                    case '`TransLengthMinRef`':
                        $stmt->bindValue($identifier, $this->translengthminref, PDO::PARAM_INT);
                        break;
                    case '`TransLengthModRef`':
                        $stmt->bindValue($identifier, $this->translengthmodref, PDO::PARAM_INT);
                        break;
                    case '`TransLengthMaxRef`':
                        $stmt->bindValue($identifier, $this->translengthmaxref, PDO::PARAM_INT);
                        break;
                    case '`LarvalDurationMin`':
                        $stmt->bindValue($identifier, $this->larvaldurationmin, PDO::PARAM_STR);
                        break;
                    case '`LarvalDurationMinRef`':
                        $stmt->bindValue($identifier, $this->larvaldurationminref, PDO::PARAM_INT);
                        break;
                    case '`LarvalDurationMax`':
                        $stmt->bindValue($identifier, $this->larvaldurationmax, PDO::PARAM_STR);
                        break;
                    case '`LarvalDurationMaxRef`':
                        $stmt->bindValue($identifier, $this->larvaldurationmaxref, PDO::PARAM_INT);
                        break;
                    case '`LarvalDurationMod`':
                        $stmt->bindValue($identifier, $this->larvaldurationmod, PDO::PARAM_STR);
                        break;
                    case '`LarvalDurationModRef`':
                        $stmt->bindValue($identifier, $this->larvaldurationmodref, PDO::PARAM_INT);
                        break;
                    case '`Shapeofyolksac`':
                        $stmt->bindValue($identifier, $this->shapeofyolksac, PDO::PARAM_STR);
                        break;
                    case '`YolksacPigm`':
                        $stmt->bindValue($identifier, $this->yolksacpigm, PDO::PARAM_STR);
                        break;
                    case '`YolksacSegm`':
                        $stmt->bindValue($identifier, $this->yolksacsegm, PDO::PARAM_STR);
                        break;
                    case '`YolkRef`':
                        $stmt->bindValue($identifier, $this->yolkref, PDO::PARAM_INT);
                        break;
                    case '`OilGlobules`':
                        $stmt->bindValue($identifier, $this->oilglobules, PDO::PARAM_STR);
                        break;
                    case '`OilGlobuleposH`':
                        $stmt->bindValue($identifier, $this->oilglobuleposh, PDO::PARAM_STR);
                        break;
                    case '`OilGlobuleposV`':
                        $stmt->bindValue($identifier, $this->oilglobuleposv, PDO::PARAM_STR);
                        break;
                    case '`OilGlobulePigm`':
                        $stmt->bindValue($identifier, $this->oilglobulepigm, PDO::PARAM_STR);
                        break;
                    case '`RowsonTailY`':
                        $stmt->bindValue($identifier, $this->rowsontaily, PDO::PARAM_STR);
                        break;
                    case '`OtherMelOnTailY`':
                        $stmt->bindValue($identifier, $this->othermelontaily, PDO::PARAM_STR);
                        break;
                    case '`MelonHeadTrunkY`':
                        $stmt->bindValue($identifier, $this->melonheadtrunky, PDO::PARAM_STR);
                        break;
                    case '`LyaMax`':
                        $stmt->bindValue($identifier, $this->lyamax, PDO::PARAM_STR);
                        break;
                    case '`L1FeedmaxRef`':
                        $stmt->bindValue($identifier, $this->l1feedmaxref, PDO::PARAM_INT);
                        break;
                    case '`LyaMin`':
                        $stmt->bindValue($identifier, $this->lyamin, PDO::PARAM_STR);
                        break;
                    case '`L1FeedminRef`':
                        $stmt->bindValue($identifier, $this->l1feedminref, PDO::PARAM_INT);
                        break;
                    case '`LyaMod`':
                        $stmt->bindValue($identifier, $this->lyamod, PDO::PARAM_STR);
                        break;
                    case '`L1FeedmodRef`':
                        $stmt->bindValue($identifier, $this->l1feedmodref, PDO::PARAM_INT);
                        break;
                    case '`JanLarv`':
                        $stmt->bindValue($identifier, $this->janlarv, PDO::PARAM_INT);
                        break;
                    case '`FebLarv`':
                        $stmt->bindValue($identifier, $this->feblarv, PDO::PARAM_INT);
                        break;
                    case '`MarLarv`':
                        $stmt->bindValue($identifier, $this->marlarv, PDO::PARAM_INT);
                        break;
                    case '`AprLarv`':
                        $stmt->bindValue($identifier, $this->aprlarv, PDO::PARAM_INT);
                        break;
                    case '`MayLarv`':
                        $stmt->bindValue($identifier, $this->maylarv, PDO::PARAM_INT);
                        break;
                    case '`JunLarv`':
                        $stmt->bindValue($identifier, $this->junlarv, PDO::PARAM_INT);
                        break;
                    case '`JulLarv`':
                        $stmt->bindValue($identifier, $this->jullarv, PDO::PARAM_INT);
                        break;
                    case '`AugLarv`':
                        $stmt->bindValue($identifier, $this->auglarv, PDO::PARAM_INT);
                        break;
                    case '`SepLarv`':
                        $stmt->bindValue($identifier, $this->seplarv, PDO::PARAM_INT);
                        break;
                    case '`OctLarv`':
                        $stmt->bindValue($identifier, $this->octlarv, PDO::PARAM_INT);
                        break;
                    case '`NovLarv`':
                        $stmt->bindValue($identifier, (int) $this->novlarv, PDO::PARAM_INT);
                        break;
                    case '`DecLarv`':
                        $stmt->bindValue($identifier, $this->declarv, PDO::PARAM_INT);
                        break;
                    case '`PresenceRef`':
                        $stmt->bindValue($identifier, $this->presenceref, PDO::PARAM_INT);
                        break;
                    case '`WaterDepthMax`':
                        $stmt->bindValue($identifier, $this->waterdepthmax, PDO::PARAM_INT);
                        break;
                    case '`WaterTempMax`':
                        $stmt->bindValue($identifier, $this->watertempmax, PDO::PARAM_STR);
                        break;
                    case '`SalinityMax`':
                        $stmt->bindValue($identifier, $this->salinitymax, PDO::PARAM_STR);
                        break;
                    case '`pH`':
                        $stmt->bindValue($identifier, $this->ph, PDO::PARAM_STR);
                        break;
                    case '`OxygenMax`':
                        $stmt->bindValue($identifier, $this->oxygenmax, PDO::PARAM_STR);
                        break;
                    case '`WatermaxRef`':
                        $stmt->bindValue($identifier, $this->watermaxref, PDO::PARAM_INT);
                        break;
                    case '`WaterDepthMin`':
                        $stmt->bindValue($identifier, $this->waterdepthmin, PDO::PARAM_INT);
                        break;
                    case '`WaterTempMin`':
                        $stmt->bindValue($identifier, $this->watertempmin, PDO::PARAM_STR);
                        break;
                    case '`SalinityMin`':
                        $stmt->bindValue($identifier, $this->salinitymin, PDO::PARAM_STR);
                        break;
                    case '`pHMin`':
                        $stmt->bindValue($identifier, $this->phmin, PDO::PARAM_STR);
                        break;
                    case '`OxygenMin`':
                        $stmt->bindValue($identifier, $this->oxygenmin, PDO::PARAM_STR);
                        break;
                    case '`WaterminRef`':
                        $stmt->bindValue($identifier, $this->waterminref, PDO::PARAM_INT);
                        break;
                    case '`WaterDepthMod`':
                        $stmt->bindValue($identifier, $this->waterdepthmod, PDO::PARAM_INT);
                        break;
                    case '`WaterTempMod`':
                        $stmt->bindValue($identifier, $this->watertempmod, PDO::PARAM_STR);
                        break;
                    case '`SalinityMod`':
                        $stmt->bindValue($identifier, $this->salinitymod, PDO::PARAM_STR);
                        break;
                    case '`pHMod`':
                        $stmt->bindValue($identifier, $this->phmod, PDO::PARAM_STR);
                        break;
                    case '`OxygenMod`':
                        $stmt->bindValue($identifier, $this->oxygenmod, PDO::PARAM_STR);
                        break;
                    case '`WatermodRef`':
                        $stmt->bindValue($identifier, $this->watermodref, PDO::PARAM_INT);
                        break;
                    case '`StrikingFeature`':
                        $stmt->bindValue($identifier, $this->strikingfeature, PDO::PARAM_STR);
                        break;
                    case '`LarvaPic`':
                        $stmt->bindValue($identifier, $this->larvapic, PDO::PARAM_STR);
                        break;
                    case '`StrikingShapeLat`':
                        $stmt->bindValue($identifier, $this->strikingshapelat, PDO::PARAM_STR);
                        break;
                    case '`StrikingShapeDors`':
                        $stmt->bindValue($identifier, $this->strikingshapedors, PDO::PARAM_STR);
                        break;
                    case '`BodyForm`':
                        $stmt->bindValue($identifier, $this->bodyform, PDO::PARAM_STR);
                        break;
                    case '`ShapeofGut`':
                        $stmt->bindValue($identifier, $this->shapeofgut, PDO::PARAM_STR);
                        break;
                    case '`GasBladderEarly`':
                        $stmt->bindValue($identifier, $this->gasbladderearly, PDO::PARAM_STR);
                        break;
                    case '`GasBladderLate`':
                        $stmt->bindValue($identifier, $this->gasbladderlate, PDO::PARAM_STR);
                        break;
                    case '`SpinalArmatureEarl`':
                        $stmt->bindValue($identifier, $this->spinalarmatureearl, PDO::PARAM_STR);
                        break;
                    case '`SpinalArmatureLate`':
                        $stmt->bindValue($identifier, $this->spinalarmaturelate, PDO::PARAM_STR);
                        break;
                    case '`RowsonTailE`':
                        $stmt->bindValue($identifier, $this->rowsontaile, PDO::PARAM_STR);
                        break;
                    case '`OtherMelonTailE`':
                        $stmt->bindValue($identifier, $this->othermelontaile, PDO::PARAM_STR);
                        break;
                    case '`MelonHeadTrunkE`':
                        $stmt->bindValue($identifier, $this->melonheadtrunke, PDO::PARAM_STR);
                        break;
                    case '`RowsonTaill`':
                        $stmt->bindValue($identifier, $this->rowsontaill, PDO::PARAM_STR);
                        break;
                    case '`OtherMelonTaill`':
                        $stmt->bindValue($identifier, $this->othermelontaill, PDO::PARAM_STR);
                        break;
                    case '`MelonHeadTrunkl`':
                        $stmt->bindValue($identifier, $this->melonheadtrunkl, PDO::PARAM_STR);
                        break;
                    case '`UrostyleRegion`':
                        $stmt->bindValue($identifier, $this->urostyleregion, PDO::PARAM_STR);
                        break;
                    case '`UrostyleRegionLate`':
                        $stmt->bindValue($identifier, $this->urostyleregionlate, PDO::PARAM_STR);
                        break;
                    case '`Peritoneum`':
                        $stmt->bindValue($identifier, $this->peritoneum, PDO::PARAM_STR);
                        break;
                    case '`PectoralsI`':
                        $stmt->bindValue($identifier, $this->pectoralsi, PDO::PARAM_STR);
                        break;
                    case '`PectoralsII`':
                        $stmt->bindValue($identifier, $this->pectoralsii, PDO::PARAM_STR);
                        break;
                    case '`PelvicsI`':
                        $stmt->bindValue($identifier, $this->pelvicsi, PDO::PARAM_STR);
                        break;
                    case '`PelvicsII`':
                        $stmt->bindValue($identifier, $this->pelvicsii, PDO::PARAM_STR);
                        break;
                    case '`MyomeresMax`':
                        $stmt->bindValue($identifier, $this->myomeresmax, PDO::PARAM_INT);
                        break;
                    case '`MyomeresMin`':
                        $stmt->bindValue($identifier, $this->myomeresmin, PDO::PARAM_INT);
                        break;
                    case '`MyomeresMod`':
                        $stmt->bindValue($identifier, $this->myomeresmod, PDO::PARAM_INT);
                        break;
                    case '`MyomVert`':
                        $stmt->bindValue($identifier, $this->myomvert, PDO::PARAM_STR);
                        break;
                    case '`TotMyomRef`':
                        $stmt->bindValue($identifier, $this->totmyomref, PDO::PARAM_INT);
                        break;
                    case '`MyomeresMaxPrean`':
                        $stmt->bindValue($identifier, $this->myomeresmaxprean, PDO::PARAM_INT);
                        break;
                    case '`MyomeresMinPrean`':
                        $stmt->bindValue($identifier, $this->myomeresminprean, PDO::PARAM_INT);
                        break;
                    case '`MyomeresModPrean`':
                        $stmt->bindValue($identifier, $this->myomeresmodprean, PDO::PARAM_INT);
                        break;
                    case '`MyomVert2`':
                        $stmt->bindValue($identifier, $this->myomvert2, PDO::PARAM_STR);
                        break;
                    case '`PreAnMyoRef`':
                        $stmt->bindValue($identifier, $this->preanmyoref, PDO::PARAM_INT);
                        break;
                    case '`RLLatePre`':
                        $stmt->bindValue($identifier, $this->rllatepre, PDO::PARAM_STR);
                        break;
                    case '`RLLateFlex`':
                        $stmt->bindValue($identifier, $this->rllateflex, PDO::PARAM_STR);
                        break;
                    case '`RLLatePost`':
                        $stmt->bindValue($identifier, $this->rllatepost, PDO::PARAM_STR);
                        break;
                    case '`RLEarlyPre`':
                        $stmt->bindValue($identifier, $this->rlearlypre, PDO::PARAM_STR);
                        break;
                    case '`RLEarlyFlex`':
                        $stmt->bindValue($identifier, $this->rlearlyflex, PDO::PARAM_STR);
                        break;
                    case '`RLEarlyPost`':
                        $stmt->bindValue($identifier, $this->rlearlypost, PDO::PARAM_STR);
                        break;
                    case '`RLFlexPre`':
                        $stmt->bindValue($identifier, $this->rlflexpre, PDO::PARAM_STR);
                        break;
                    case '`RLFlexFlex`':
                        $stmt->bindValue($identifier, $this->rlflexflex, PDO::PARAM_STR);
                        break;
                    case '`RLFlexPost`':
                        $stmt->bindValue($identifier, $this->rlflexpost, PDO::PARAM_STR);
                        break;
                    case '`MeasurementsPreRef`':
                        $stmt->bindValue($identifier, $this->measurementspreref, PDO::PARAM_INT);
                        break;
                    case '`MeasurementsFlexRef`':
                        $stmt->bindValue($identifier, $this->measurementsflexref, PDO::PARAM_INT);
                        break;
                    case '`MeasurementsPostRef`':
                        $stmt->bindValue($identifier, $this->measurementspostref, PDO::PARAM_INT);
                        break;
                    case '`TypePre`':
                        $stmt->bindValue($identifier, $this->typepre, PDO::PARAM_STR);
                        break;
                    case '`TypeFlex`':
                        $stmt->bindValue($identifier, $this->typeflex, PDO::PARAM_STR);
                        break;
                    case '`TypePost`':
                        $stmt->bindValue($identifier, $this->typepost, PDO::PARAM_STR);
                        break;
                    case '`comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthMaxPre`':
                        $stmt->bindValue($identifier, $this->preanallengthmaxpre, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthMaxFlex`':
                        $stmt->bindValue($identifier, $this->preanallengthmaxflex, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthMaxPost`':
                        $stmt->bindValue($identifier, $this->preanallengthmaxpost, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthMinPre`':
                        $stmt->bindValue($identifier, $this->preanallengthminpre, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthMinFlex`':
                        $stmt->bindValue($identifier, $this->preanallengthminflex, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthMinPost`':
                        $stmt->bindValue($identifier, $this->preanallengthminpost, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthLitPre`':
                        $stmt->bindValue($identifier, $this->preanallengthlitpre, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthLitFlex`':
                        $stmt->bindValue($identifier, $this->preanallengthlitflex, PDO::PARAM_STR);
                        break;
                    case '`PreanalLengthLitPost`':
                        $stmt->bindValue($identifier, $this->preanallengthlitpost, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthMaxPre`':
                        $stmt->bindValue($identifier, $this->prepeclengthmaxpre, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthMaxFlex`':
                        $stmt->bindValue($identifier, $this->prepeclengthmaxflex, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthMaxPost`':
                        $stmt->bindValue($identifier, $this->prepeclengthmaxpost, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthMinPre`':
                        $stmt->bindValue($identifier, $this->prepeclengthminpre, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthMinFlex`':
                        $stmt->bindValue($identifier, $this->prepeclengthminflex, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthMinPost`':
                        $stmt->bindValue($identifier, $this->prepeclengthminpost, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthLitPre`':
                        $stmt->bindValue($identifier, $this->prepeclengthlitpre, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthLitFlex`':
                        $stmt->bindValue($identifier, $this->prepeclengthlitflex, PDO::PARAM_STR);
                        break;
                    case '`PrepecLengthLitPost`':
                        $stmt->bindValue($identifier, $this->prepeclengthlitpost, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalMaxPre`':
                        $stmt->bindValue($identifier, $this->preorbitalmaxpre, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalMaxFlex`':
                        $stmt->bindValue($identifier, $this->preorbitalmaxflex, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalMaxPost`':
                        $stmt->bindValue($identifier, $this->preorbitalmaxpost, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalMinPre`':
                        $stmt->bindValue($identifier, $this->preorbitalminpre, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalMinFlex`':
                        $stmt->bindValue($identifier, $this->preorbitalminflex, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalMinPost`':
                        $stmt->bindValue($identifier, $this->preorbitalminpost, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalLitPre`':
                        $stmt->bindValue($identifier, $this->preorbitallitpre, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalLitFlex`':
                        $stmt->bindValue($identifier, $this->preorbitallitflex, PDO::PARAM_STR);
                        break;
                    case '`PreorbitalLitPost`':
                        $stmt->bindValue($identifier, $this->preorbitallitpost, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeMaxPre`':
                        $stmt->bindValue($identifier, $this->diameterofeyemaxpre, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeMaxFlex`':
                        $stmt->bindValue($identifier, $this->diameterofeyemaxflex, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeMaxPost`':
                        $stmt->bindValue($identifier, $this->diameterofeyemaxpost, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeMinPre`':
                        $stmt->bindValue($identifier, $this->diameterofeyeminpre, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeMinFlex`':
                        $stmt->bindValue($identifier, $this->diameterofeyeminflex, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeMinPost`':
                        $stmt->bindValue($identifier, $this->diameterofeyeminpost, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeLitPre`':
                        $stmt->bindValue($identifier, $this->diameterofeyelitpre, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeLitFlex`':
                        $stmt->bindValue($identifier, $this->diameterofeyelitflex, PDO::PARAM_STR);
                        break;
                    case '`DiameterofEyeLitPost`':
                        $stmt->bindValue($identifier, $this->diameterofeyelitpost, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeMaxPre`':
                        $stmt->bindValue($identifier, $this->deptheyemaxpre, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeMaxFlex`':
                        $stmt->bindValue($identifier, $this->deptheyemaxflex, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeMaxPost`':
                        $stmt->bindValue($identifier, $this->deptheyemaxpost, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeMinPre`':
                        $stmt->bindValue($identifier, $this->deptheyeminpre, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeMinFlex`':
                        $stmt->bindValue($identifier, $this->deptheyeminflex, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeMinPost`':
                        $stmt->bindValue($identifier, $this->deptheyeminpost, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeLitPre`':
                        $stmt->bindValue($identifier, $this->deptheyelitpre, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeLitFlex`':
                        $stmt->bindValue($identifier, $this->deptheyelitflex, PDO::PARAM_STR);
                        break;
                    case '`DepthEyeLitPost`':
                        $stmt->bindValue($identifier, $this->deptheyelitpost, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralMaxPre`':
                        $stmt->bindValue($identifier, $this->depthpectoralmaxpre, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralMaxFlex`':
                        $stmt->bindValue($identifier, $this->depthpectoralmaxflex, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralMaxPost`':
                        $stmt->bindValue($identifier, $this->depthpectoralmaxpost, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralMinPre`':
                        $stmt->bindValue($identifier, $this->depthpectoralminpre, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralMinFlex`':
                        $stmt->bindValue($identifier, $this->depthpectoralminflex, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralMinPost`':
                        $stmt->bindValue($identifier, $this->depthpectoralminpost, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralLitPre`':
                        $stmt->bindValue($identifier, $this->depthpectorallitpre, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralLitFlex`':
                        $stmt->bindValue($identifier, $this->depthpectorallitflex, PDO::PARAM_STR);
                        break;
                    case '`DepthPectoralLitPost`':
                        $stmt->bindValue($identifier, $this->depthpectorallitpost, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusMaxPre`':
                        $stmt->bindValue($identifier, $this->depthanusmaxpre, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusMaxFlex`':
                        $stmt->bindValue($identifier, $this->depthanusmaxflex, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusMaxPost`':
                        $stmt->bindValue($identifier, $this->depthanusmaxpost, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusMinPre`':
                        $stmt->bindValue($identifier, $this->depthanusminpre, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusMinFlex`':
                        $stmt->bindValue($identifier, $this->depthanusminflex, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusMinPost`':
                        $stmt->bindValue($identifier, $this->depthanusminpost, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusLitPre`':
                        $stmt->bindValue($identifier, $this->depthanuslitpre, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusLitFlex`':
                        $stmt->bindValue($identifier, $this->depthanuslitflex, PDO::PARAM_STR);
                        break;
                    case '`DepthAnusLitPost`':
                        $stmt->bindValue($identifier, $this->depthanuslitpost, PDO::PARAM_STR);
                        break;
                    case '`AddCharYolks`':
                        $stmt->bindValue($identifier, $this->addcharyolks, PDO::PARAM_STR);
                        break;
                    case '`AddCharPosts`':
                        $stmt->bindValue($identifier, $this->addcharposts, PDO::PARAM_STR);
                        break;
                    case '`EaseofID`':
                        $stmt->bindValue($identifier, $this->easeofid, PDO::PARAM_STR);
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


            if (($retval = LarvaePeer::doValidate($this, $columns)) !== true) {
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
        $pos = LarvaePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStockcode();
                break;
            case 2:
                return $this->getSpeccode();
                break;
            case 3:
                return $this->getLarvaerefno();
                break;
            case 4:
                return $this->getOtherref1();
                break;
            case 5:
                return $this->getOtherref2();
                break;
            case 6:
                return $this->getLarvalarea();
                break;
            case 7:
                return $this->getPlaceofdevelopment();
                break;
            case 8:
                return $this->getLhmax();
                break;
            case 9:
                return $this->getLbirthmaxref();
                break;
            case 10:
                return $this->getLhmin();
                break;
            case 11:
                return $this->getLbirthminref();
                break;
            case 12:
                return $this->getLhmid();
                break;
            case 13:
                return $this->getLbirthmodref();
                break;
            case 14:
                return $this->getPreanallengthmaxy();
                break;
            case 15:
                return $this->getPreanmaxref();
                break;
            case 16:
                return $this->getPreanallengthminy();
                break;
            case 17:
                return $this->getPreanminref();
                break;
            case 18:
                return $this->getPreanallengthmody();
                break;
            case 19:
                return $this->getPreanmodref();
                break;
            case 20:
                return $this->getFlexlengthmin();
                break;
            case 21:
                return $this->getFlexlengthmod();
                break;
            case 22:
                return $this->getFlexlengthmax();
                break;
            case 23:
                return $this->getFlexlengthtype();
                break;
            case 24:
                return $this->getFlexlengthminref();
                break;
            case 25:
                return $this->getFlexlengthmodref();
                break;
            case 26:
                return $this->getFlexlengthmaxref();
                break;
            case 27:
                return $this->getTranslengthmin();
                break;
            case 28:
                return $this->getTranslengthmod();
                break;
            case 29:
                return $this->getTranslengthmax();
                break;
            case 30:
                return $this->getTranslengthtype();
                break;
            case 31:
                return $this->getTranslengthminref();
                break;
            case 32:
                return $this->getTranslengthmodref();
                break;
            case 33:
                return $this->getTranslengthmaxref();
                break;
            case 34:
                return $this->getLarvaldurationmin();
                break;
            case 35:
                return $this->getLarvaldurationminref();
                break;
            case 36:
                return $this->getLarvaldurationmax();
                break;
            case 37:
                return $this->getLarvaldurationmaxref();
                break;
            case 38:
                return $this->getLarvaldurationmod();
                break;
            case 39:
                return $this->getLarvaldurationmodref();
                break;
            case 40:
                return $this->getShapeofyolksac();
                break;
            case 41:
                return $this->getYolksacpigm();
                break;
            case 42:
                return $this->getYolksacsegm();
                break;
            case 43:
                return $this->getYolkref();
                break;
            case 44:
                return $this->getOilglobules();
                break;
            case 45:
                return $this->getOilglobuleposh();
                break;
            case 46:
                return $this->getOilglobuleposv();
                break;
            case 47:
                return $this->getOilglobulepigm();
                break;
            case 48:
                return $this->getRowsontaily();
                break;
            case 49:
                return $this->getOthermelontaily();
                break;
            case 50:
                return $this->getMelonheadtrunky();
                break;
            case 51:
                return $this->getLyamax();
                break;
            case 52:
                return $this->getL1feedmaxref();
                break;
            case 53:
                return $this->getLyamin();
                break;
            case 54:
                return $this->getL1feedminref();
                break;
            case 55:
                return $this->getLyamod();
                break;
            case 56:
                return $this->getL1feedmodref();
                break;
            case 57:
                return $this->getJanlarv();
                break;
            case 58:
                return $this->getFeblarv();
                break;
            case 59:
                return $this->getMarlarv();
                break;
            case 60:
                return $this->getAprlarv();
                break;
            case 61:
                return $this->getMaylarv();
                break;
            case 62:
                return $this->getJunlarv();
                break;
            case 63:
                return $this->getJullarv();
                break;
            case 64:
                return $this->getAuglarv();
                break;
            case 65:
                return $this->getSeplarv();
                break;
            case 66:
                return $this->getOctlarv();
                break;
            case 67:
                return $this->getNovlarv();
                break;
            case 68:
                return $this->getDeclarv();
                break;
            case 69:
                return $this->getPresenceref();
                break;
            case 70:
                return $this->getWaterdepthmax();
                break;
            case 71:
                return $this->getWatertempmax();
                break;
            case 72:
                return $this->getSalinitymax();
                break;
            case 73:
                return $this->getPh();
                break;
            case 74:
                return $this->getOxygenmax();
                break;
            case 75:
                return $this->getWatermaxref();
                break;
            case 76:
                return $this->getWaterdepthmin();
                break;
            case 77:
                return $this->getWatertempmin();
                break;
            case 78:
                return $this->getSalinitymin();
                break;
            case 79:
                return $this->getPhmin();
                break;
            case 80:
                return $this->getOxygenmin();
                break;
            case 81:
                return $this->getWaterminref();
                break;
            case 82:
                return $this->getWaterdepthmod();
                break;
            case 83:
                return $this->getWatertempmod();
                break;
            case 84:
                return $this->getSalinitymod();
                break;
            case 85:
                return $this->getPhmod();
                break;
            case 86:
                return $this->getOxygenmod();
                break;
            case 87:
                return $this->getWatermodref();
                break;
            case 88:
                return $this->getStrikingfeature();
                break;
            case 89:
                return $this->getLarvapic();
                break;
            case 90:
                return $this->getStrikingshapelat();
                break;
            case 91:
                return $this->getStrikingshapedors();
                break;
            case 92:
                return $this->getBodyform();
                break;
            case 93:
                return $this->getShapeofgut();
                break;
            case 94:
                return $this->getGasbladderearly();
                break;
            case 95:
                return $this->getGasbladderlate();
                break;
            case 96:
                return $this->getSpinalarmatureearl();
                break;
            case 97:
                return $this->getSpinalarmaturelate();
                break;
            case 98:
                return $this->getRowsontaile();
                break;
            case 99:
                return $this->getOthermelontaile();
                break;
            case 100:
                return $this->getMelonheadtrunke();
                break;
            case 101:
                return $this->getRowsontaill();
                break;
            case 102:
                return $this->getOthermelontaill();
                break;
            case 103:
                return $this->getMelonheadtrunkl();
                break;
            case 104:
                return $this->getUrostyleregion();
                break;
            case 105:
                return $this->getUrostyleregionlate();
                break;
            case 106:
                return $this->getPeritoneum();
                break;
            case 107:
                return $this->getPectoralsi();
                break;
            case 108:
                return $this->getPectoralsii();
                break;
            case 109:
                return $this->getPelvicsi();
                break;
            case 110:
                return $this->getPelvicsii();
                break;
            case 111:
                return $this->getMyomeresmax();
                break;
            case 112:
                return $this->getMyomeresmin();
                break;
            case 113:
                return $this->getMyomeresmod();
                break;
            case 114:
                return $this->getMyomvert();
                break;
            case 115:
                return $this->getTotmyomref();
                break;
            case 116:
                return $this->getMyomeresmaxprean();
                break;
            case 117:
                return $this->getMyomeresminprean();
                break;
            case 118:
                return $this->getMyomeresmodprean();
                break;
            case 119:
                return $this->getMyomvert2();
                break;
            case 120:
                return $this->getPreanmyoref();
                break;
            case 121:
                return $this->getRllatepre();
                break;
            case 122:
                return $this->getRllateflex();
                break;
            case 123:
                return $this->getRllatepost();
                break;
            case 124:
                return $this->getRlearlypre();
                break;
            case 125:
                return $this->getRlearlyflex();
                break;
            case 126:
                return $this->getRlearlypost();
                break;
            case 127:
                return $this->getRlflexpre();
                break;
            case 128:
                return $this->getRlflexflex();
                break;
            case 129:
                return $this->getRlflexpost();
                break;
            case 130:
                return $this->getMeasurementspreref();
                break;
            case 131:
                return $this->getMeasurementsflexref();
                break;
            case 132:
                return $this->getMeasurementspostref();
                break;
            case 133:
                return $this->getTypepre();
                break;
            case 134:
                return $this->getTypeflex();
                break;
            case 135:
                return $this->getTypepost();
                break;
            case 136:
                return $this->getComment();
                break;
            case 137:
                return $this->getPreanallengthmaxpre();
                break;
            case 138:
                return $this->getPreanallengthmaxflex();
                break;
            case 139:
                return $this->getPreanallengthmaxpost();
                break;
            case 140:
                return $this->getPreanallengthminpre();
                break;
            case 141:
                return $this->getPreanallengthminflex();
                break;
            case 142:
                return $this->getPreanallengthminpost();
                break;
            case 143:
                return $this->getPreanallengthlitpre();
                break;
            case 144:
                return $this->getPreanallengthlitflex();
                break;
            case 145:
                return $this->getPreanallengthlitpost();
                break;
            case 146:
                return $this->getPrepeclengthmaxpre();
                break;
            case 147:
                return $this->getPrepeclengthmaxflex();
                break;
            case 148:
                return $this->getPrepeclengthmaxpost();
                break;
            case 149:
                return $this->getPrepeclengthminpre();
                break;
            case 150:
                return $this->getPrepeclengthminflex();
                break;
            case 151:
                return $this->getPrepeclengthminpost();
                break;
            case 152:
                return $this->getPrepeclengthlitpre();
                break;
            case 153:
                return $this->getPrepeclengthlitflex();
                break;
            case 154:
                return $this->getPrepeclengthlitpost();
                break;
            case 155:
                return $this->getPreorbitalmaxpre();
                break;
            case 156:
                return $this->getPreorbitalmaxflex();
                break;
            case 157:
                return $this->getPreorbitalmaxpost();
                break;
            case 158:
                return $this->getPreorbitalminpre();
                break;
            case 159:
                return $this->getPreorbitalminflex();
                break;
            case 160:
                return $this->getPreorbitalminpost();
                break;
            case 161:
                return $this->getPreorbitallitpre();
                break;
            case 162:
                return $this->getPreorbitallitflex();
                break;
            case 163:
                return $this->getPreorbitallitpost();
                break;
            case 164:
                return $this->getDiameterofeyemaxpre();
                break;
            case 165:
                return $this->getDiameterofeyemaxflex();
                break;
            case 166:
                return $this->getDiameterofeyemaxpost();
                break;
            case 167:
                return $this->getDiameterofeyeminpre();
                break;
            case 168:
                return $this->getDiameterofeyeminflex();
                break;
            case 169:
                return $this->getDiameterofeyeminpost();
                break;
            case 170:
                return $this->getDiameterofeyelitpre();
                break;
            case 171:
                return $this->getDiameterofeyelitflex();
                break;
            case 172:
                return $this->getDiameterofeyelitpost();
                break;
            case 173:
                return $this->getDeptheyemaxpre();
                break;
            case 174:
                return $this->getDeptheyemaxflex();
                break;
            case 175:
                return $this->getDeptheyemaxpost();
                break;
            case 176:
                return $this->getDeptheyeminpre();
                break;
            case 177:
                return $this->getDeptheyeminflex();
                break;
            case 178:
                return $this->getDeptheyeminpost();
                break;
            case 179:
                return $this->getDeptheyelitpre();
                break;
            case 180:
                return $this->getDeptheyelitflex();
                break;
            case 181:
                return $this->getDeptheyelitpost();
                break;
            case 182:
                return $this->getDepthpectoralmaxpre();
                break;
            case 183:
                return $this->getDepthpectoralmaxflex();
                break;
            case 184:
                return $this->getDepthpectoralmaxpost();
                break;
            case 185:
                return $this->getDepthpectoralminpre();
                break;
            case 186:
                return $this->getDepthpectoralminflex();
                break;
            case 187:
                return $this->getDepthpectoralminpost();
                break;
            case 188:
                return $this->getDepthpectorallitpre();
                break;
            case 189:
                return $this->getDepthpectorallitflex();
                break;
            case 190:
                return $this->getDepthpectorallitpost();
                break;
            case 191:
                return $this->getDepthanusmaxpre();
                break;
            case 192:
                return $this->getDepthanusmaxflex();
                break;
            case 193:
                return $this->getDepthanusmaxpost();
                break;
            case 194:
                return $this->getDepthanusminpre();
                break;
            case 195:
                return $this->getDepthanusminflex();
                break;
            case 196:
                return $this->getDepthanusminpost();
                break;
            case 197:
                return $this->getDepthanuslitpre();
                break;
            case 198:
                return $this->getDepthanuslitflex();
                break;
            case 199:
                return $this->getDepthanuslitpost();
                break;
            case 200:
                return $this->getAddcharyolks();
                break;
            case 201:
                return $this->getAddcharposts();
                break;
            case 202:
                return $this->getEaseofid();
                break;
            case 203:
                return $this->getSimilarspecies1();
                break;
            case 204:
                return $this->getSimilarspec1remarks();
                break;
            case 205:
                return $this->getSimilarspecies2();
                break;
            case 206:
                return $this->getSimilarspec2remarks();
                break;
            case 207:
                return $this->getEntered();
                break;
            case 208:
                return $this->getDateentered();
                break;
            case 209:
                return $this->getModified();
                break;
            case 210:
                return $this->getDatemodified();
                break;
            case 211:
                return $this->getExpert();
                break;
            case 212:
                return $this->getDatechecked();
                break;
            case 213:
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
        if (isset($alreadyDumpedObjects['Larvae'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Larvae'][serialize($this->getPrimaryKey())] = true;
        $keys = LarvaePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getStockcode(),
            $keys[2] => $this->getSpeccode(),
            $keys[3] => $this->getLarvaerefno(),
            $keys[4] => $this->getOtherref1(),
            $keys[5] => $this->getOtherref2(),
            $keys[6] => $this->getLarvalarea(),
            $keys[7] => $this->getPlaceofdevelopment(),
            $keys[8] => $this->getLhmax(),
            $keys[9] => $this->getLbirthmaxref(),
            $keys[10] => $this->getLhmin(),
            $keys[11] => $this->getLbirthminref(),
            $keys[12] => $this->getLhmid(),
            $keys[13] => $this->getLbirthmodref(),
            $keys[14] => $this->getPreanallengthmaxy(),
            $keys[15] => $this->getPreanmaxref(),
            $keys[16] => $this->getPreanallengthminy(),
            $keys[17] => $this->getPreanminref(),
            $keys[18] => $this->getPreanallengthmody(),
            $keys[19] => $this->getPreanmodref(),
            $keys[20] => $this->getFlexlengthmin(),
            $keys[21] => $this->getFlexlengthmod(),
            $keys[22] => $this->getFlexlengthmax(),
            $keys[23] => $this->getFlexlengthtype(),
            $keys[24] => $this->getFlexlengthminref(),
            $keys[25] => $this->getFlexlengthmodref(),
            $keys[26] => $this->getFlexlengthmaxref(),
            $keys[27] => $this->getTranslengthmin(),
            $keys[28] => $this->getTranslengthmod(),
            $keys[29] => $this->getTranslengthmax(),
            $keys[30] => $this->getTranslengthtype(),
            $keys[31] => $this->getTranslengthminref(),
            $keys[32] => $this->getTranslengthmodref(),
            $keys[33] => $this->getTranslengthmaxref(),
            $keys[34] => $this->getLarvaldurationmin(),
            $keys[35] => $this->getLarvaldurationminref(),
            $keys[36] => $this->getLarvaldurationmax(),
            $keys[37] => $this->getLarvaldurationmaxref(),
            $keys[38] => $this->getLarvaldurationmod(),
            $keys[39] => $this->getLarvaldurationmodref(),
            $keys[40] => $this->getShapeofyolksac(),
            $keys[41] => $this->getYolksacpigm(),
            $keys[42] => $this->getYolksacsegm(),
            $keys[43] => $this->getYolkref(),
            $keys[44] => $this->getOilglobules(),
            $keys[45] => $this->getOilglobuleposh(),
            $keys[46] => $this->getOilglobuleposv(),
            $keys[47] => $this->getOilglobulepigm(),
            $keys[48] => $this->getRowsontaily(),
            $keys[49] => $this->getOthermelontaily(),
            $keys[50] => $this->getMelonheadtrunky(),
            $keys[51] => $this->getLyamax(),
            $keys[52] => $this->getL1feedmaxref(),
            $keys[53] => $this->getLyamin(),
            $keys[54] => $this->getL1feedminref(),
            $keys[55] => $this->getLyamod(),
            $keys[56] => $this->getL1feedmodref(),
            $keys[57] => $this->getJanlarv(),
            $keys[58] => $this->getFeblarv(),
            $keys[59] => $this->getMarlarv(),
            $keys[60] => $this->getAprlarv(),
            $keys[61] => $this->getMaylarv(),
            $keys[62] => $this->getJunlarv(),
            $keys[63] => $this->getJullarv(),
            $keys[64] => $this->getAuglarv(),
            $keys[65] => $this->getSeplarv(),
            $keys[66] => $this->getOctlarv(),
            $keys[67] => $this->getNovlarv(),
            $keys[68] => $this->getDeclarv(),
            $keys[69] => $this->getPresenceref(),
            $keys[70] => $this->getWaterdepthmax(),
            $keys[71] => $this->getWatertempmax(),
            $keys[72] => $this->getSalinitymax(),
            $keys[73] => $this->getPh(),
            $keys[74] => $this->getOxygenmax(),
            $keys[75] => $this->getWatermaxref(),
            $keys[76] => $this->getWaterdepthmin(),
            $keys[77] => $this->getWatertempmin(),
            $keys[78] => $this->getSalinitymin(),
            $keys[79] => $this->getPhmin(),
            $keys[80] => $this->getOxygenmin(),
            $keys[81] => $this->getWaterminref(),
            $keys[82] => $this->getWaterdepthmod(),
            $keys[83] => $this->getWatertempmod(),
            $keys[84] => $this->getSalinitymod(),
            $keys[85] => $this->getPhmod(),
            $keys[86] => $this->getOxygenmod(),
            $keys[87] => $this->getWatermodref(),
            $keys[88] => $this->getStrikingfeature(),
            $keys[89] => $this->getLarvapic(),
            $keys[90] => $this->getStrikingshapelat(),
            $keys[91] => $this->getStrikingshapedors(),
            $keys[92] => $this->getBodyform(),
            $keys[93] => $this->getShapeofgut(),
            $keys[94] => $this->getGasbladderearly(),
            $keys[95] => $this->getGasbladderlate(),
            $keys[96] => $this->getSpinalarmatureearl(),
            $keys[97] => $this->getSpinalarmaturelate(),
            $keys[98] => $this->getRowsontaile(),
            $keys[99] => $this->getOthermelontaile(),
            $keys[100] => $this->getMelonheadtrunke(),
            $keys[101] => $this->getRowsontaill(),
            $keys[102] => $this->getOthermelontaill(),
            $keys[103] => $this->getMelonheadtrunkl(),
            $keys[104] => $this->getUrostyleregion(),
            $keys[105] => $this->getUrostyleregionlate(),
            $keys[106] => $this->getPeritoneum(),
            $keys[107] => $this->getPectoralsi(),
            $keys[108] => $this->getPectoralsii(),
            $keys[109] => $this->getPelvicsi(),
            $keys[110] => $this->getPelvicsii(),
            $keys[111] => $this->getMyomeresmax(),
            $keys[112] => $this->getMyomeresmin(),
            $keys[113] => $this->getMyomeresmod(),
            $keys[114] => $this->getMyomvert(),
            $keys[115] => $this->getTotmyomref(),
            $keys[116] => $this->getMyomeresmaxprean(),
            $keys[117] => $this->getMyomeresminprean(),
            $keys[118] => $this->getMyomeresmodprean(),
            $keys[119] => $this->getMyomvert2(),
            $keys[120] => $this->getPreanmyoref(),
            $keys[121] => $this->getRllatepre(),
            $keys[122] => $this->getRllateflex(),
            $keys[123] => $this->getRllatepost(),
            $keys[124] => $this->getRlearlypre(),
            $keys[125] => $this->getRlearlyflex(),
            $keys[126] => $this->getRlearlypost(),
            $keys[127] => $this->getRlflexpre(),
            $keys[128] => $this->getRlflexflex(),
            $keys[129] => $this->getRlflexpost(),
            $keys[130] => $this->getMeasurementspreref(),
            $keys[131] => $this->getMeasurementsflexref(),
            $keys[132] => $this->getMeasurementspostref(),
            $keys[133] => $this->getTypepre(),
            $keys[134] => $this->getTypeflex(),
            $keys[135] => $this->getTypepost(),
            $keys[136] => $this->getComment(),
            $keys[137] => $this->getPreanallengthmaxpre(),
            $keys[138] => $this->getPreanallengthmaxflex(),
            $keys[139] => $this->getPreanallengthmaxpost(),
            $keys[140] => $this->getPreanallengthminpre(),
            $keys[141] => $this->getPreanallengthminflex(),
            $keys[142] => $this->getPreanallengthminpost(),
            $keys[143] => $this->getPreanallengthlitpre(),
            $keys[144] => $this->getPreanallengthlitflex(),
            $keys[145] => $this->getPreanallengthlitpost(),
            $keys[146] => $this->getPrepeclengthmaxpre(),
            $keys[147] => $this->getPrepeclengthmaxflex(),
            $keys[148] => $this->getPrepeclengthmaxpost(),
            $keys[149] => $this->getPrepeclengthminpre(),
            $keys[150] => $this->getPrepeclengthminflex(),
            $keys[151] => $this->getPrepeclengthminpost(),
            $keys[152] => $this->getPrepeclengthlitpre(),
            $keys[153] => $this->getPrepeclengthlitflex(),
            $keys[154] => $this->getPrepeclengthlitpost(),
            $keys[155] => $this->getPreorbitalmaxpre(),
            $keys[156] => $this->getPreorbitalmaxflex(),
            $keys[157] => $this->getPreorbitalmaxpost(),
            $keys[158] => $this->getPreorbitalminpre(),
            $keys[159] => $this->getPreorbitalminflex(),
            $keys[160] => $this->getPreorbitalminpost(),
            $keys[161] => $this->getPreorbitallitpre(),
            $keys[162] => $this->getPreorbitallitflex(),
            $keys[163] => $this->getPreorbitallitpost(),
            $keys[164] => $this->getDiameterofeyemaxpre(),
            $keys[165] => $this->getDiameterofeyemaxflex(),
            $keys[166] => $this->getDiameterofeyemaxpost(),
            $keys[167] => $this->getDiameterofeyeminpre(),
            $keys[168] => $this->getDiameterofeyeminflex(),
            $keys[169] => $this->getDiameterofeyeminpost(),
            $keys[170] => $this->getDiameterofeyelitpre(),
            $keys[171] => $this->getDiameterofeyelitflex(),
            $keys[172] => $this->getDiameterofeyelitpost(),
            $keys[173] => $this->getDeptheyemaxpre(),
            $keys[174] => $this->getDeptheyemaxflex(),
            $keys[175] => $this->getDeptheyemaxpost(),
            $keys[176] => $this->getDeptheyeminpre(),
            $keys[177] => $this->getDeptheyeminflex(),
            $keys[178] => $this->getDeptheyeminpost(),
            $keys[179] => $this->getDeptheyelitpre(),
            $keys[180] => $this->getDeptheyelitflex(),
            $keys[181] => $this->getDeptheyelitpost(),
            $keys[182] => $this->getDepthpectoralmaxpre(),
            $keys[183] => $this->getDepthpectoralmaxflex(),
            $keys[184] => $this->getDepthpectoralmaxpost(),
            $keys[185] => $this->getDepthpectoralminpre(),
            $keys[186] => $this->getDepthpectoralminflex(),
            $keys[187] => $this->getDepthpectoralminpost(),
            $keys[188] => $this->getDepthpectorallitpre(),
            $keys[189] => $this->getDepthpectorallitflex(),
            $keys[190] => $this->getDepthpectorallitpost(),
            $keys[191] => $this->getDepthanusmaxpre(),
            $keys[192] => $this->getDepthanusmaxflex(),
            $keys[193] => $this->getDepthanusmaxpost(),
            $keys[194] => $this->getDepthanusminpre(),
            $keys[195] => $this->getDepthanusminflex(),
            $keys[196] => $this->getDepthanusminpost(),
            $keys[197] => $this->getDepthanuslitpre(),
            $keys[198] => $this->getDepthanuslitflex(),
            $keys[199] => $this->getDepthanuslitpost(),
            $keys[200] => $this->getAddcharyolks(),
            $keys[201] => $this->getAddcharposts(),
            $keys[202] => $this->getEaseofid(),
            $keys[203] => $this->getSimilarspecies1(),
            $keys[204] => $this->getSimilarspec1remarks(),
            $keys[205] => $this->getSimilarspecies2(),
            $keys[206] => $this->getSimilarspec2remarks(),
            $keys[207] => $this->getEntered(),
            $keys[208] => $this->getDateentered(),
            $keys[209] => $this->getModified(),
            $keys[210] => $this->getDatemodified(),
            $keys[211] => $this->getExpert(),
            $keys[212] => $this->getDatechecked(),
            $keys[213] => $this->getTs(),
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
        $pos = LarvaePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStockcode($value);
                break;
            case 2:
                $this->setSpeccode($value);
                break;
            case 3:
                $this->setLarvaerefno($value);
                break;
            case 4:
                $this->setOtherref1($value);
                break;
            case 5:
                $this->setOtherref2($value);
                break;
            case 6:
                $this->setLarvalarea($value);
                break;
            case 7:
                $this->setPlaceofdevelopment($value);
                break;
            case 8:
                $this->setLhmax($value);
                break;
            case 9:
                $this->setLbirthmaxref($value);
                break;
            case 10:
                $this->setLhmin($value);
                break;
            case 11:
                $this->setLbirthminref($value);
                break;
            case 12:
                $this->setLhmid($value);
                break;
            case 13:
                $this->setLbirthmodref($value);
                break;
            case 14:
                $this->setPreanallengthmaxy($value);
                break;
            case 15:
                $this->setPreanmaxref($value);
                break;
            case 16:
                $this->setPreanallengthminy($value);
                break;
            case 17:
                $this->setPreanminref($value);
                break;
            case 18:
                $this->setPreanallengthmody($value);
                break;
            case 19:
                $this->setPreanmodref($value);
                break;
            case 20:
                $this->setFlexlengthmin($value);
                break;
            case 21:
                $this->setFlexlengthmod($value);
                break;
            case 22:
                $this->setFlexlengthmax($value);
                break;
            case 23:
                $this->setFlexlengthtype($value);
                break;
            case 24:
                $this->setFlexlengthminref($value);
                break;
            case 25:
                $this->setFlexlengthmodref($value);
                break;
            case 26:
                $this->setFlexlengthmaxref($value);
                break;
            case 27:
                $this->setTranslengthmin($value);
                break;
            case 28:
                $this->setTranslengthmod($value);
                break;
            case 29:
                $this->setTranslengthmax($value);
                break;
            case 30:
                $this->setTranslengthtype($value);
                break;
            case 31:
                $this->setTranslengthminref($value);
                break;
            case 32:
                $this->setTranslengthmodref($value);
                break;
            case 33:
                $this->setTranslengthmaxref($value);
                break;
            case 34:
                $this->setLarvaldurationmin($value);
                break;
            case 35:
                $this->setLarvaldurationminref($value);
                break;
            case 36:
                $this->setLarvaldurationmax($value);
                break;
            case 37:
                $this->setLarvaldurationmaxref($value);
                break;
            case 38:
                $this->setLarvaldurationmod($value);
                break;
            case 39:
                $this->setLarvaldurationmodref($value);
                break;
            case 40:
                $this->setShapeofyolksac($value);
                break;
            case 41:
                $this->setYolksacpigm($value);
                break;
            case 42:
                $this->setYolksacsegm($value);
                break;
            case 43:
                $this->setYolkref($value);
                break;
            case 44:
                $this->setOilglobules($value);
                break;
            case 45:
                $this->setOilglobuleposh($value);
                break;
            case 46:
                $this->setOilglobuleposv($value);
                break;
            case 47:
                $this->setOilglobulepigm($value);
                break;
            case 48:
                $this->setRowsontaily($value);
                break;
            case 49:
                $this->setOthermelontaily($value);
                break;
            case 50:
                $this->setMelonheadtrunky($value);
                break;
            case 51:
                $this->setLyamax($value);
                break;
            case 52:
                $this->setL1feedmaxref($value);
                break;
            case 53:
                $this->setLyamin($value);
                break;
            case 54:
                $this->setL1feedminref($value);
                break;
            case 55:
                $this->setLyamod($value);
                break;
            case 56:
                $this->setL1feedmodref($value);
                break;
            case 57:
                $this->setJanlarv($value);
                break;
            case 58:
                $this->setFeblarv($value);
                break;
            case 59:
                $this->setMarlarv($value);
                break;
            case 60:
                $this->setAprlarv($value);
                break;
            case 61:
                $this->setMaylarv($value);
                break;
            case 62:
                $this->setJunlarv($value);
                break;
            case 63:
                $this->setJullarv($value);
                break;
            case 64:
                $this->setAuglarv($value);
                break;
            case 65:
                $this->setSeplarv($value);
                break;
            case 66:
                $this->setOctlarv($value);
                break;
            case 67:
                $this->setNovlarv($value);
                break;
            case 68:
                $this->setDeclarv($value);
                break;
            case 69:
                $this->setPresenceref($value);
                break;
            case 70:
                $this->setWaterdepthmax($value);
                break;
            case 71:
                $this->setWatertempmax($value);
                break;
            case 72:
                $this->setSalinitymax($value);
                break;
            case 73:
                $this->setPh($value);
                break;
            case 74:
                $this->setOxygenmax($value);
                break;
            case 75:
                $this->setWatermaxref($value);
                break;
            case 76:
                $this->setWaterdepthmin($value);
                break;
            case 77:
                $this->setWatertempmin($value);
                break;
            case 78:
                $this->setSalinitymin($value);
                break;
            case 79:
                $this->setPhmin($value);
                break;
            case 80:
                $this->setOxygenmin($value);
                break;
            case 81:
                $this->setWaterminref($value);
                break;
            case 82:
                $this->setWaterdepthmod($value);
                break;
            case 83:
                $this->setWatertempmod($value);
                break;
            case 84:
                $this->setSalinitymod($value);
                break;
            case 85:
                $this->setPhmod($value);
                break;
            case 86:
                $this->setOxygenmod($value);
                break;
            case 87:
                $this->setWatermodref($value);
                break;
            case 88:
                $this->setStrikingfeature($value);
                break;
            case 89:
                $this->setLarvapic($value);
                break;
            case 90:
                $this->setStrikingshapelat($value);
                break;
            case 91:
                $this->setStrikingshapedors($value);
                break;
            case 92:
                $this->setBodyform($value);
                break;
            case 93:
                $this->setShapeofgut($value);
                break;
            case 94:
                $this->setGasbladderearly($value);
                break;
            case 95:
                $this->setGasbladderlate($value);
                break;
            case 96:
                $this->setSpinalarmatureearl($value);
                break;
            case 97:
                $this->setSpinalarmaturelate($value);
                break;
            case 98:
                $this->setRowsontaile($value);
                break;
            case 99:
                $this->setOthermelontaile($value);
                break;
            case 100:
                $this->setMelonheadtrunke($value);
                break;
            case 101:
                $this->setRowsontaill($value);
                break;
            case 102:
                $this->setOthermelontaill($value);
                break;
            case 103:
                $this->setMelonheadtrunkl($value);
                break;
            case 104:
                $this->setUrostyleregion($value);
                break;
            case 105:
                $this->setUrostyleregionlate($value);
                break;
            case 106:
                $this->setPeritoneum($value);
                break;
            case 107:
                $this->setPectoralsi($value);
                break;
            case 108:
                $this->setPectoralsii($value);
                break;
            case 109:
                $this->setPelvicsi($value);
                break;
            case 110:
                $this->setPelvicsii($value);
                break;
            case 111:
                $this->setMyomeresmax($value);
                break;
            case 112:
                $this->setMyomeresmin($value);
                break;
            case 113:
                $this->setMyomeresmod($value);
                break;
            case 114:
                $this->setMyomvert($value);
                break;
            case 115:
                $this->setTotmyomref($value);
                break;
            case 116:
                $this->setMyomeresmaxprean($value);
                break;
            case 117:
                $this->setMyomeresminprean($value);
                break;
            case 118:
                $this->setMyomeresmodprean($value);
                break;
            case 119:
                $this->setMyomvert2($value);
                break;
            case 120:
                $this->setPreanmyoref($value);
                break;
            case 121:
                $this->setRllatepre($value);
                break;
            case 122:
                $this->setRllateflex($value);
                break;
            case 123:
                $this->setRllatepost($value);
                break;
            case 124:
                $this->setRlearlypre($value);
                break;
            case 125:
                $this->setRlearlyflex($value);
                break;
            case 126:
                $this->setRlearlypost($value);
                break;
            case 127:
                $this->setRlflexpre($value);
                break;
            case 128:
                $this->setRlflexflex($value);
                break;
            case 129:
                $this->setRlflexpost($value);
                break;
            case 130:
                $this->setMeasurementspreref($value);
                break;
            case 131:
                $this->setMeasurementsflexref($value);
                break;
            case 132:
                $this->setMeasurementspostref($value);
                break;
            case 133:
                $this->setTypepre($value);
                break;
            case 134:
                $this->setTypeflex($value);
                break;
            case 135:
                $this->setTypepost($value);
                break;
            case 136:
                $this->setComment($value);
                break;
            case 137:
                $this->setPreanallengthmaxpre($value);
                break;
            case 138:
                $this->setPreanallengthmaxflex($value);
                break;
            case 139:
                $this->setPreanallengthmaxpost($value);
                break;
            case 140:
                $this->setPreanallengthminpre($value);
                break;
            case 141:
                $this->setPreanallengthminflex($value);
                break;
            case 142:
                $this->setPreanallengthminpost($value);
                break;
            case 143:
                $this->setPreanallengthlitpre($value);
                break;
            case 144:
                $this->setPreanallengthlitflex($value);
                break;
            case 145:
                $this->setPreanallengthlitpost($value);
                break;
            case 146:
                $this->setPrepeclengthmaxpre($value);
                break;
            case 147:
                $this->setPrepeclengthmaxflex($value);
                break;
            case 148:
                $this->setPrepeclengthmaxpost($value);
                break;
            case 149:
                $this->setPrepeclengthminpre($value);
                break;
            case 150:
                $this->setPrepeclengthminflex($value);
                break;
            case 151:
                $this->setPrepeclengthminpost($value);
                break;
            case 152:
                $this->setPrepeclengthlitpre($value);
                break;
            case 153:
                $this->setPrepeclengthlitflex($value);
                break;
            case 154:
                $this->setPrepeclengthlitpost($value);
                break;
            case 155:
                $this->setPreorbitalmaxpre($value);
                break;
            case 156:
                $this->setPreorbitalmaxflex($value);
                break;
            case 157:
                $this->setPreorbitalmaxpost($value);
                break;
            case 158:
                $this->setPreorbitalminpre($value);
                break;
            case 159:
                $this->setPreorbitalminflex($value);
                break;
            case 160:
                $this->setPreorbitalminpost($value);
                break;
            case 161:
                $this->setPreorbitallitpre($value);
                break;
            case 162:
                $this->setPreorbitallitflex($value);
                break;
            case 163:
                $this->setPreorbitallitpost($value);
                break;
            case 164:
                $this->setDiameterofeyemaxpre($value);
                break;
            case 165:
                $this->setDiameterofeyemaxflex($value);
                break;
            case 166:
                $this->setDiameterofeyemaxpost($value);
                break;
            case 167:
                $this->setDiameterofeyeminpre($value);
                break;
            case 168:
                $this->setDiameterofeyeminflex($value);
                break;
            case 169:
                $this->setDiameterofeyeminpost($value);
                break;
            case 170:
                $this->setDiameterofeyelitpre($value);
                break;
            case 171:
                $this->setDiameterofeyelitflex($value);
                break;
            case 172:
                $this->setDiameterofeyelitpost($value);
                break;
            case 173:
                $this->setDeptheyemaxpre($value);
                break;
            case 174:
                $this->setDeptheyemaxflex($value);
                break;
            case 175:
                $this->setDeptheyemaxpost($value);
                break;
            case 176:
                $this->setDeptheyeminpre($value);
                break;
            case 177:
                $this->setDeptheyeminflex($value);
                break;
            case 178:
                $this->setDeptheyeminpost($value);
                break;
            case 179:
                $this->setDeptheyelitpre($value);
                break;
            case 180:
                $this->setDeptheyelitflex($value);
                break;
            case 181:
                $this->setDeptheyelitpost($value);
                break;
            case 182:
                $this->setDepthpectoralmaxpre($value);
                break;
            case 183:
                $this->setDepthpectoralmaxflex($value);
                break;
            case 184:
                $this->setDepthpectoralmaxpost($value);
                break;
            case 185:
                $this->setDepthpectoralminpre($value);
                break;
            case 186:
                $this->setDepthpectoralminflex($value);
                break;
            case 187:
                $this->setDepthpectoralminpost($value);
                break;
            case 188:
                $this->setDepthpectorallitpre($value);
                break;
            case 189:
                $this->setDepthpectorallitflex($value);
                break;
            case 190:
                $this->setDepthpectorallitpost($value);
                break;
            case 191:
                $this->setDepthanusmaxpre($value);
                break;
            case 192:
                $this->setDepthanusmaxflex($value);
                break;
            case 193:
                $this->setDepthanusmaxpost($value);
                break;
            case 194:
                $this->setDepthanusminpre($value);
                break;
            case 195:
                $this->setDepthanusminflex($value);
                break;
            case 196:
                $this->setDepthanusminpost($value);
                break;
            case 197:
                $this->setDepthanuslitpre($value);
                break;
            case 198:
                $this->setDepthanuslitflex($value);
                break;
            case 199:
                $this->setDepthanuslitpost($value);
                break;
            case 200:
                $this->setAddcharyolks($value);
                break;
            case 201:
                $this->setAddcharposts($value);
                break;
            case 202:
                $this->setEaseofid($value);
                break;
            case 203:
                $this->setSimilarspecies1($value);
                break;
            case 204:
                $this->setSimilarspec1remarks($value);
                break;
            case 205:
                $this->setSimilarspecies2($value);
                break;
            case 206:
                $this->setSimilarspec2remarks($value);
                break;
            case 207:
                $this->setEntered($value);
                break;
            case 208:
                $this->setDateentered($value);
                break;
            case 209:
                $this->setModified($value);
                break;
            case 210:
                $this->setDatemodified($value);
                break;
            case 211:
                $this->setExpert($value);
                break;
            case 212:
                $this->setDatechecked($value);
                break;
            case 213:
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
        $keys = LarvaePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setStockcode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSpeccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLarvaerefno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOtherref1($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOtherref2($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLarvalarea($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPlaceofdevelopment($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLhmax($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLbirthmaxref($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLhmin($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLbirthminref($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLhmid($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLbirthmodref($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPreanallengthmaxy($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPreanmaxref($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPreanallengthminy($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPreanminref($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPreanallengthmody($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPreanmodref($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFlexlengthmin($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFlexlengthmod($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFlexlengthmax($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFlexlengthtype($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setFlexlengthminref($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFlexlengthmodref($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFlexlengthmaxref($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTranslengthmin($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTranslengthmod($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTranslengthmax($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTranslengthtype($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTranslengthminref($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTranslengthmodref($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTranslengthmaxref($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setLarvaldurationmin($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLarvaldurationminref($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLarvaldurationmax($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLarvaldurationmaxref($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setLarvaldurationmod($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setLarvaldurationmodref($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setShapeofyolksac($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setYolksacpigm($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setYolksacsegm($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setYolkref($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setOilglobules($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setOilglobuleposh($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setOilglobuleposv($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setOilglobulepigm($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setRowsontaily($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setOthermelontaily($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setMelonheadtrunky($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setLyamax($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setL1feedmaxref($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setLyamin($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setL1feedminref($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setLyamod($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setL1feedmodref($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setJanlarv($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setFeblarv($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setMarlarv($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setAprlarv($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setMaylarv($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setJunlarv($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setJullarv($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setAuglarv($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setSeplarv($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setOctlarv($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setNovlarv($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setDeclarv($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setPresenceref($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setWaterdepthmax($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setWatertempmax($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setSalinitymax($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setPh($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setOxygenmax($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setWatermaxref($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setWaterdepthmin($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setWatertempmin($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setSalinitymin($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setPhmin($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setOxygenmin($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setWaterminref($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setWaterdepthmod($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setWatertempmod($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setSalinitymod($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setPhmod($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setOxygenmod($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setWatermodref($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setStrikingfeature($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setLarvapic($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setStrikingshapelat($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setStrikingshapedors($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setBodyform($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setShapeofgut($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setGasbladderearly($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setGasbladderlate($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setSpinalarmatureearl($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setSpinalarmaturelate($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setRowsontaile($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setOthermelontaile($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setMelonheadtrunke($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setRowsontaill($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setOthermelontaill($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setMelonheadtrunkl($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setUrostyleregion($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setUrostyleregionlate($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setPeritoneum($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setPectoralsi($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setPectoralsii($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setPelvicsi($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setPelvicsii($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setMyomeresmax($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setMyomeresmin($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setMyomeresmod($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setMyomvert($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setTotmyomref($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setMyomeresmaxprean($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setMyomeresminprean($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setMyomeresmodprean($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setMyomvert2($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setPreanmyoref($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setRllatepre($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setRllateflex($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setRllatepost($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setRlearlypre($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setRlearlyflex($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setRlearlypost($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setRlflexpre($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setRlflexflex($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setRlflexpost($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setMeasurementspreref($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setMeasurementsflexref($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setMeasurementspostref($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setTypepre($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setTypeflex($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setTypepost($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setComment($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setPreanallengthmaxpre($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setPreanallengthmaxflex($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setPreanallengthmaxpost($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setPreanallengthminpre($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setPreanallengthminflex($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setPreanallengthminpost($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setPreanallengthlitpre($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setPreanallengthlitflex($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setPreanallengthlitpost($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setPrepeclengthmaxpre($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setPrepeclengthmaxflex($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setPrepeclengthmaxpost($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setPrepeclengthminpre($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setPrepeclengthminflex($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setPrepeclengthminpost($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setPrepeclengthlitpre($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setPrepeclengthlitflex($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setPrepeclengthlitpost($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setPreorbitalmaxpre($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setPreorbitalmaxflex($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setPreorbitalmaxpost($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setPreorbitalminpre($arr[$keys[158]]);
        if (array_key_exists($keys[159], $arr)) $this->setPreorbitalminflex($arr[$keys[159]]);
        if (array_key_exists($keys[160], $arr)) $this->setPreorbitalminpost($arr[$keys[160]]);
        if (array_key_exists($keys[161], $arr)) $this->setPreorbitallitpre($arr[$keys[161]]);
        if (array_key_exists($keys[162], $arr)) $this->setPreorbitallitflex($arr[$keys[162]]);
        if (array_key_exists($keys[163], $arr)) $this->setPreorbitallitpost($arr[$keys[163]]);
        if (array_key_exists($keys[164], $arr)) $this->setDiameterofeyemaxpre($arr[$keys[164]]);
        if (array_key_exists($keys[165], $arr)) $this->setDiameterofeyemaxflex($arr[$keys[165]]);
        if (array_key_exists($keys[166], $arr)) $this->setDiameterofeyemaxpost($arr[$keys[166]]);
        if (array_key_exists($keys[167], $arr)) $this->setDiameterofeyeminpre($arr[$keys[167]]);
        if (array_key_exists($keys[168], $arr)) $this->setDiameterofeyeminflex($arr[$keys[168]]);
        if (array_key_exists($keys[169], $arr)) $this->setDiameterofeyeminpost($arr[$keys[169]]);
        if (array_key_exists($keys[170], $arr)) $this->setDiameterofeyelitpre($arr[$keys[170]]);
        if (array_key_exists($keys[171], $arr)) $this->setDiameterofeyelitflex($arr[$keys[171]]);
        if (array_key_exists($keys[172], $arr)) $this->setDiameterofeyelitpost($arr[$keys[172]]);
        if (array_key_exists($keys[173], $arr)) $this->setDeptheyemaxpre($arr[$keys[173]]);
        if (array_key_exists($keys[174], $arr)) $this->setDeptheyemaxflex($arr[$keys[174]]);
        if (array_key_exists($keys[175], $arr)) $this->setDeptheyemaxpost($arr[$keys[175]]);
        if (array_key_exists($keys[176], $arr)) $this->setDeptheyeminpre($arr[$keys[176]]);
        if (array_key_exists($keys[177], $arr)) $this->setDeptheyeminflex($arr[$keys[177]]);
        if (array_key_exists($keys[178], $arr)) $this->setDeptheyeminpost($arr[$keys[178]]);
        if (array_key_exists($keys[179], $arr)) $this->setDeptheyelitpre($arr[$keys[179]]);
        if (array_key_exists($keys[180], $arr)) $this->setDeptheyelitflex($arr[$keys[180]]);
        if (array_key_exists($keys[181], $arr)) $this->setDeptheyelitpost($arr[$keys[181]]);
        if (array_key_exists($keys[182], $arr)) $this->setDepthpectoralmaxpre($arr[$keys[182]]);
        if (array_key_exists($keys[183], $arr)) $this->setDepthpectoralmaxflex($arr[$keys[183]]);
        if (array_key_exists($keys[184], $arr)) $this->setDepthpectoralmaxpost($arr[$keys[184]]);
        if (array_key_exists($keys[185], $arr)) $this->setDepthpectoralminpre($arr[$keys[185]]);
        if (array_key_exists($keys[186], $arr)) $this->setDepthpectoralminflex($arr[$keys[186]]);
        if (array_key_exists($keys[187], $arr)) $this->setDepthpectoralminpost($arr[$keys[187]]);
        if (array_key_exists($keys[188], $arr)) $this->setDepthpectorallitpre($arr[$keys[188]]);
        if (array_key_exists($keys[189], $arr)) $this->setDepthpectorallitflex($arr[$keys[189]]);
        if (array_key_exists($keys[190], $arr)) $this->setDepthpectorallitpost($arr[$keys[190]]);
        if (array_key_exists($keys[191], $arr)) $this->setDepthanusmaxpre($arr[$keys[191]]);
        if (array_key_exists($keys[192], $arr)) $this->setDepthanusmaxflex($arr[$keys[192]]);
        if (array_key_exists($keys[193], $arr)) $this->setDepthanusmaxpost($arr[$keys[193]]);
        if (array_key_exists($keys[194], $arr)) $this->setDepthanusminpre($arr[$keys[194]]);
        if (array_key_exists($keys[195], $arr)) $this->setDepthanusminflex($arr[$keys[195]]);
        if (array_key_exists($keys[196], $arr)) $this->setDepthanusminpost($arr[$keys[196]]);
        if (array_key_exists($keys[197], $arr)) $this->setDepthanuslitpre($arr[$keys[197]]);
        if (array_key_exists($keys[198], $arr)) $this->setDepthanuslitflex($arr[$keys[198]]);
        if (array_key_exists($keys[199], $arr)) $this->setDepthanuslitpost($arr[$keys[199]]);
        if (array_key_exists($keys[200], $arr)) $this->setAddcharyolks($arr[$keys[200]]);
        if (array_key_exists($keys[201], $arr)) $this->setAddcharposts($arr[$keys[201]]);
        if (array_key_exists($keys[202], $arr)) $this->setEaseofid($arr[$keys[202]]);
        if (array_key_exists($keys[203], $arr)) $this->setSimilarspecies1($arr[$keys[203]]);
        if (array_key_exists($keys[204], $arr)) $this->setSimilarspec1remarks($arr[$keys[204]]);
        if (array_key_exists($keys[205], $arr)) $this->setSimilarspecies2($arr[$keys[205]]);
        if (array_key_exists($keys[206], $arr)) $this->setSimilarspec2remarks($arr[$keys[206]]);
        if (array_key_exists($keys[207], $arr)) $this->setEntered($arr[$keys[207]]);
        if (array_key_exists($keys[208], $arr)) $this->setDateentered($arr[$keys[208]]);
        if (array_key_exists($keys[209], $arr)) $this->setModified($arr[$keys[209]]);
        if (array_key_exists($keys[210], $arr)) $this->setDatemodified($arr[$keys[210]]);
        if (array_key_exists($keys[211], $arr)) $this->setExpert($arr[$keys[211]]);
        if (array_key_exists($keys[212], $arr)) $this->setDatechecked($arr[$keys[212]]);
        if (array_key_exists($keys[213], $arr)) $this->setTs($arr[$keys[213]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LarvaePeer::DATABASE_NAME);

        if ($this->isColumnModified(LarvaePeer::AUTOCTR)) $criteria->add(LarvaePeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(LarvaePeer::STOCKCODE)) $criteria->add(LarvaePeer::STOCKCODE, $this->stockcode);
        if ($this->isColumnModified(LarvaePeer::SPECCODE)) $criteria->add(LarvaePeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(LarvaePeer::LARVAEREFNO)) $criteria->add(LarvaePeer::LARVAEREFNO, $this->larvaerefno);
        if ($this->isColumnModified(LarvaePeer::OTHERREF1)) $criteria->add(LarvaePeer::OTHERREF1, $this->otherref1);
        if ($this->isColumnModified(LarvaePeer::OTHERREF2)) $criteria->add(LarvaePeer::OTHERREF2, $this->otherref2);
        if ($this->isColumnModified(LarvaePeer::LARVALAREA)) $criteria->add(LarvaePeer::LARVALAREA, $this->larvalarea);
        if ($this->isColumnModified(LarvaePeer::PLACEOFDEVELOPMENT)) $criteria->add(LarvaePeer::PLACEOFDEVELOPMENT, $this->placeofdevelopment);
        if ($this->isColumnModified(LarvaePeer::LHMAX)) $criteria->add(LarvaePeer::LHMAX, $this->lhmax);
        if ($this->isColumnModified(LarvaePeer::LBIRTHMAXREF)) $criteria->add(LarvaePeer::LBIRTHMAXREF, $this->lbirthmaxref);
        if ($this->isColumnModified(LarvaePeer::LHMIN)) $criteria->add(LarvaePeer::LHMIN, $this->lhmin);
        if ($this->isColumnModified(LarvaePeer::LBIRTHMINREF)) $criteria->add(LarvaePeer::LBIRTHMINREF, $this->lbirthminref);
        if ($this->isColumnModified(LarvaePeer::LHMID)) $criteria->add(LarvaePeer::LHMID, $this->lhmid);
        if ($this->isColumnModified(LarvaePeer::LBIRTHMODREF)) $criteria->add(LarvaePeer::LBIRTHMODREF, $this->lbirthmodref);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXY)) $criteria->add(LarvaePeer::PREANALLENGTHMAXY, $this->preanallengthmaxy);
        if ($this->isColumnModified(LarvaePeer::PREANMAXREF)) $criteria->add(LarvaePeer::PREANMAXREF, $this->preanmaxref);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINY)) $criteria->add(LarvaePeer::PREANALLENGTHMINY, $this->preanallengthminy);
        if ($this->isColumnModified(LarvaePeer::PREANMINREF)) $criteria->add(LarvaePeer::PREANMINREF, $this->preanminref);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMODY)) $criteria->add(LarvaePeer::PREANALLENGTHMODY, $this->preanallengthmody);
        if ($this->isColumnModified(LarvaePeer::PREANMODREF)) $criteria->add(LarvaePeer::PREANMODREF, $this->preanmodref);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMIN)) $criteria->add(LarvaePeer::FLEXLENGTHMIN, $this->flexlengthmin);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMOD)) $criteria->add(LarvaePeer::FLEXLENGTHMOD, $this->flexlengthmod);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMAX)) $criteria->add(LarvaePeer::FLEXLENGTHMAX, $this->flexlengthmax);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHTYPE)) $criteria->add(LarvaePeer::FLEXLENGTHTYPE, $this->flexlengthtype);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMINREF)) $criteria->add(LarvaePeer::FLEXLENGTHMINREF, $this->flexlengthminref);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMODREF)) $criteria->add(LarvaePeer::FLEXLENGTHMODREF, $this->flexlengthmodref);
        if ($this->isColumnModified(LarvaePeer::FLEXLENGTHMAXREF)) $criteria->add(LarvaePeer::FLEXLENGTHMAXREF, $this->flexlengthmaxref);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMIN)) $criteria->add(LarvaePeer::TRANSLENGTHMIN, $this->translengthmin);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMOD)) $criteria->add(LarvaePeer::TRANSLENGTHMOD, $this->translengthmod);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMAX)) $criteria->add(LarvaePeer::TRANSLENGTHMAX, $this->translengthmax);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHTYPE)) $criteria->add(LarvaePeer::TRANSLENGTHTYPE, $this->translengthtype);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMINREF)) $criteria->add(LarvaePeer::TRANSLENGTHMINREF, $this->translengthminref);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMODREF)) $criteria->add(LarvaePeer::TRANSLENGTHMODREF, $this->translengthmodref);
        if ($this->isColumnModified(LarvaePeer::TRANSLENGTHMAXREF)) $criteria->add(LarvaePeer::TRANSLENGTHMAXREF, $this->translengthmaxref);
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMIN)) $criteria->add(LarvaePeer::LARVALDURATIONMIN, $this->larvaldurationmin);
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMINREF)) $criteria->add(LarvaePeer::LARVALDURATIONMINREF, $this->larvaldurationminref);
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMAX)) $criteria->add(LarvaePeer::LARVALDURATIONMAX, $this->larvaldurationmax);
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMAXREF)) $criteria->add(LarvaePeer::LARVALDURATIONMAXREF, $this->larvaldurationmaxref);
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMOD)) $criteria->add(LarvaePeer::LARVALDURATIONMOD, $this->larvaldurationmod);
        if ($this->isColumnModified(LarvaePeer::LARVALDURATIONMODREF)) $criteria->add(LarvaePeer::LARVALDURATIONMODREF, $this->larvaldurationmodref);
        if ($this->isColumnModified(LarvaePeer::SHAPEOFYOLKSAC)) $criteria->add(LarvaePeer::SHAPEOFYOLKSAC, $this->shapeofyolksac);
        if ($this->isColumnModified(LarvaePeer::YOLKSACPIGM)) $criteria->add(LarvaePeer::YOLKSACPIGM, $this->yolksacpigm);
        if ($this->isColumnModified(LarvaePeer::YOLKSACSEGM)) $criteria->add(LarvaePeer::YOLKSACSEGM, $this->yolksacsegm);
        if ($this->isColumnModified(LarvaePeer::YOLKREF)) $criteria->add(LarvaePeer::YOLKREF, $this->yolkref);
        if ($this->isColumnModified(LarvaePeer::OILGLOBULES)) $criteria->add(LarvaePeer::OILGLOBULES, $this->oilglobules);
        if ($this->isColumnModified(LarvaePeer::OILGLOBULEPOSH)) $criteria->add(LarvaePeer::OILGLOBULEPOSH, $this->oilglobuleposh);
        if ($this->isColumnModified(LarvaePeer::OILGLOBULEPOSV)) $criteria->add(LarvaePeer::OILGLOBULEPOSV, $this->oilglobuleposv);
        if ($this->isColumnModified(LarvaePeer::OILGLOBULEPIGM)) $criteria->add(LarvaePeer::OILGLOBULEPIGM, $this->oilglobulepigm);
        if ($this->isColumnModified(LarvaePeer::ROWSONTAILY)) $criteria->add(LarvaePeer::ROWSONTAILY, $this->rowsontaily);
        if ($this->isColumnModified(LarvaePeer::OTHERMELONTAILY)) $criteria->add(LarvaePeer::OTHERMELONTAILY, $this->othermelontaily);
        if ($this->isColumnModified(LarvaePeer::MELONHEADTRUNKY)) $criteria->add(LarvaePeer::MELONHEADTRUNKY, $this->melonheadtrunky);
        if ($this->isColumnModified(LarvaePeer::LYAMAX)) $criteria->add(LarvaePeer::LYAMAX, $this->lyamax);
        if ($this->isColumnModified(LarvaePeer::L1FEEDMAXREF)) $criteria->add(LarvaePeer::L1FEEDMAXREF, $this->l1feedmaxref);
        if ($this->isColumnModified(LarvaePeer::LYAMIN)) $criteria->add(LarvaePeer::LYAMIN, $this->lyamin);
        if ($this->isColumnModified(LarvaePeer::L1FEEDMINREF)) $criteria->add(LarvaePeer::L1FEEDMINREF, $this->l1feedminref);
        if ($this->isColumnModified(LarvaePeer::LYAMOD)) $criteria->add(LarvaePeer::LYAMOD, $this->lyamod);
        if ($this->isColumnModified(LarvaePeer::L1FEEDMODREF)) $criteria->add(LarvaePeer::L1FEEDMODREF, $this->l1feedmodref);
        if ($this->isColumnModified(LarvaePeer::JANLARV)) $criteria->add(LarvaePeer::JANLARV, $this->janlarv);
        if ($this->isColumnModified(LarvaePeer::FEBLARV)) $criteria->add(LarvaePeer::FEBLARV, $this->feblarv);
        if ($this->isColumnModified(LarvaePeer::MARLARV)) $criteria->add(LarvaePeer::MARLARV, $this->marlarv);
        if ($this->isColumnModified(LarvaePeer::APRLARV)) $criteria->add(LarvaePeer::APRLARV, $this->aprlarv);
        if ($this->isColumnModified(LarvaePeer::MAYLARV)) $criteria->add(LarvaePeer::MAYLARV, $this->maylarv);
        if ($this->isColumnModified(LarvaePeer::JUNLARV)) $criteria->add(LarvaePeer::JUNLARV, $this->junlarv);
        if ($this->isColumnModified(LarvaePeer::JULLARV)) $criteria->add(LarvaePeer::JULLARV, $this->jullarv);
        if ($this->isColumnModified(LarvaePeer::AUGLARV)) $criteria->add(LarvaePeer::AUGLARV, $this->auglarv);
        if ($this->isColumnModified(LarvaePeer::SEPLARV)) $criteria->add(LarvaePeer::SEPLARV, $this->seplarv);
        if ($this->isColumnModified(LarvaePeer::OCTLARV)) $criteria->add(LarvaePeer::OCTLARV, $this->octlarv);
        if ($this->isColumnModified(LarvaePeer::NOVLARV)) $criteria->add(LarvaePeer::NOVLARV, $this->novlarv);
        if ($this->isColumnModified(LarvaePeer::DECLARV)) $criteria->add(LarvaePeer::DECLARV, $this->declarv);
        if ($this->isColumnModified(LarvaePeer::PRESENCEREF)) $criteria->add(LarvaePeer::PRESENCEREF, $this->presenceref);
        if ($this->isColumnModified(LarvaePeer::WATERDEPTHMAX)) $criteria->add(LarvaePeer::WATERDEPTHMAX, $this->waterdepthmax);
        if ($this->isColumnModified(LarvaePeer::WATERTEMPMAX)) $criteria->add(LarvaePeer::WATERTEMPMAX, $this->watertempmax);
        if ($this->isColumnModified(LarvaePeer::SALINITYMAX)) $criteria->add(LarvaePeer::SALINITYMAX, $this->salinitymax);
        if ($this->isColumnModified(LarvaePeer::PH)) $criteria->add(LarvaePeer::PH, $this->ph);
        if ($this->isColumnModified(LarvaePeer::OXYGENMAX)) $criteria->add(LarvaePeer::OXYGENMAX, $this->oxygenmax);
        if ($this->isColumnModified(LarvaePeer::WATERMAXREF)) $criteria->add(LarvaePeer::WATERMAXREF, $this->watermaxref);
        if ($this->isColumnModified(LarvaePeer::WATERDEPTHMIN)) $criteria->add(LarvaePeer::WATERDEPTHMIN, $this->waterdepthmin);
        if ($this->isColumnModified(LarvaePeer::WATERTEMPMIN)) $criteria->add(LarvaePeer::WATERTEMPMIN, $this->watertempmin);
        if ($this->isColumnModified(LarvaePeer::SALINITYMIN)) $criteria->add(LarvaePeer::SALINITYMIN, $this->salinitymin);
        if ($this->isColumnModified(LarvaePeer::PHMIN)) $criteria->add(LarvaePeer::PHMIN, $this->phmin);
        if ($this->isColumnModified(LarvaePeer::OXYGENMIN)) $criteria->add(LarvaePeer::OXYGENMIN, $this->oxygenmin);
        if ($this->isColumnModified(LarvaePeer::WATERMINREF)) $criteria->add(LarvaePeer::WATERMINREF, $this->waterminref);
        if ($this->isColumnModified(LarvaePeer::WATERDEPTHMOD)) $criteria->add(LarvaePeer::WATERDEPTHMOD, $this->waterdepthmod);
        if ($this->isColumnModified(LarvaePeer::WATERTEMPMOD)) $criteria->add(LarvaePeer::WATERTEMPMOD, $this->watertempmod);
        if ($this->isColumnModified(LarvaePeer::SALINITYMOD)) $criteria->add(LarvaePeer::SALINITYMOD, $this->salinitymod);
        if ($this->isColumnModified(LarvaePeer::PHMOD)) $criteria->add(LarvaePeer::PHMOD, $this->phmod);
        if ($this->isColumnModified(LarvaePeer::OXYGENMOD)) $criteria->add(LarvaePeer::OXYGENMOD, $this->oxygenmod);
        if ($this->isColumnModified(LarvaePeer::WATERMODREF)) $criteria->add(LarvaePeer::WATERMODREF, $this->watermodref);
        if ($this->isColumnModified(LarvaePeer::STRIKINGFEATURE)) $criteria->add(LarvaePeer::STRIKINGFEATURE, $this->strikingfeature);
        if ($this->isColumnModified(LarvaePeer::LARVAPIC)) $criteria->add(LarvaePeer::LARVAPIC, $this->larvapic);
        if ($this->isColumnModified(LarvaePeer::STRIKINGSHAPELAT)) $criteria->add(LarvaePeer::STRIKINGSHAPELAT, $this->strikingshapelat);
        if ($this->isColumnModified(LarvaePeer::STRIKINGSHAPEDORS)) $criteria->add(LarvaePeer::STRIKINGSHAPEDORS, $this->strikingshapedors);
        if ($this->isColumnModified(LarvaePeer::BODYFORM)) $criteria->add(LarvaePeer::BODYFORM, $this->bodyform);
        if ($this->isColumnModified(LarvaePeer::SHAPEOFGUT)) $criteria->add(LarvaePeer::SHAPEOFGUT, $this->shapeofgut);
        if ($this->isColumnModified(LarvaePeer::GASBLADDEREARLY)) $criteria->add(LarvaePeer::GASBLADDEREARLY, $this->gasbladderearly);
        if ($this->isColumnModified(LarvaePeer::GASBLADDERLATE)) $criteria->add(LarvaePeer::GASBLADDERLATE, $this->gasbladderlate);
        if ($this->isColumnModified(LarvaePeer::SPINALARMATUREEARL)) $criteria->add(LarvaePeer::SPINALARMATUREEARL, $this->spinalarmatureearl);
        if ($this->isColumnModified(LarvaePeer::SPINALARMATURELATE)) $criteria->add(LarvaePeer::SPINALARMATURELATE, $this->spinalarmaturelate);
        if ($this->isColumnModified(LarvaePeer::ROWSONTAILE)) $criteria->add(LarvaePeer::ROWSONTAILE, $this->rowsontaile);
        if ($this->isColumnModified(LarvaePeer::OTHERMELONTAILE)) $criteria->add(LarvaePeer::OTHERMELONTAILE, $this->othermelontaile);
        if ($this->isColumnModified(LarvaePeer::MELONHEADTRUNKE)) $criteria->add(LarvaePeer::MELONHEADTRUNKE, $this->melonheadtrunke);
        if ($this->isColumnModified(LarvaePeer::ROWSONTAILL)) $criteria->add(LarvaePeer::ROWSONTAILL, $this->rowsontaill);
        if ($this->isColumnModified(LarvaePeer::OTHERMELONTAILL)) $criteria->add(LarvaePeer::OTHERMELONTAILL, $this->othermelontaill);
        if ($this->isColumnModified(LarvaePeer::MELONHEADTRUNKL)) $criteria->add(LarvaePeer::MELONHEADTRUNKL, $this->melonheadtrunkl);
        if ($this->isColumnModified(LarvaePeer::UROSTYLEREGION)) $criteria->add(LarvaePeer::UROSTYLEREGION, $this->urostyleregion);
        if ($this->isColumnModified(LarvaePeer::UROSTYLEREGIONLATE)) $criteria->add(LarvaePeer::UROSTYLEREGIONLATE, $this->urostyleregionlate);
        if ($this->isColumnModified(LarvaePeer::PERITONEUM)) $criteria->add(LarvaePeer::PERITONEUM, $this->peritoneum);
        if ($this->isColumnModified(LarvaePeer::PECTORALSI)) $criteria->add(LarvaePeer::PECTORALSI, $this->pectoralsi);
        if ($this->isColumnModified(LarvaePeer::PECTORALSII)) $criteria->add(LarvaePeer::PECTORALSII, $this->pectoralsii);
        if ($this->isColumnModified(LarvaePeer::PELVICSI)) $criteria->add(LarvaePeer::PELVICSI, $this->pelvicsi);
        if ($this->isColumnModified(LarvaePeer::PELVICSII)) $criteria->add(LarvaePeer::PELVICSII, $this->pelvicsii);
        if ($this->isColumnModified(LarvaePeer::MYOMERESMAX)) $criteria->add(LarvaePeer::MYOMERESMAX, $this->myomeresmax);
        if ($this->isColumnModified(LarvaePeer::MYOMERESMIN)) $criteria->add(LarvaePeer::MYOMERESMIN, $this->myomeresmin);
        if ($this->isColumnModified(LarvaePeer::MYOMERESMOD)) $criteria->add(LarvaePeer::MYOMERESMOD, $this->myomeresmod);
        if ($this->isColumnModified(LarvaePeer::MYOMVERT)) $criteria->add(LarvaePeer::MYOMVERT, $this->myomvert);
        if ($this->isColumnModified(LarvaePeer::TOTMYOMREF)) $criteria->add(LarvaePeer::TOTMYOMREF, $this->totmyomref);
        if ($this->isColumnModified(LarvaePeer::MYOMERESMAXPREAN)) $criteria->add(LarvaePeer::MYOMERESMAXPREAN, $this->myomeresmaxprean);
        if ($this->isColumnModified(LarvaePeer::MYOMERESMINPREAN)) $criteria->add(LarvaePeer::MYOMERESMINPREAN, $this->myomeresminprean);
        if ($this->isColumnModified(LarvaePeer::MYOMERESMODPREAN)) $criteria->add(LarvaePeer::MYOMERESMODPREAN, $this->myomeresmodprean);
        if ($this->isColumnModified(LarvaePeer::MYOMVERT2)) $criteria->add(LarvaePeer::MYOMVERT2, $this->myomvert2);
        if ($this->isColumnModified(LarvaePeer::PREANMYOREF)) $criteria->add(LarvaePeer::PREANMYOREF, $this->preanmyoref);
        if ($this->isColumnModified(LarvaePeer::RLLATEPRE)) $criteria->add(LarvaePeer::RLLATEPRE, $this->rllatepre);
        if ($this->isColumnModified(LarvaePeer::RLLATEFLEX)) $criteria->add(LarvaePeer::RLLATEFLEX, $this->rllateflex);
        if ($this->isColumnModified(LarvaePeer::RLLATEPOST)) $criteria->add(LarvaePeer::RLLATEPOST, $this->rllatepost);
        if ($this->isColumnModified(LarvaePeer::RLEARLYPRE)) $criteria->add(LarvaePeer::RLEARLYPRE, $this->rlearlypre);
        if ($this->isColumnModified(LarvaePeer::RLEARLYFLEX)) $criteria->add(LarvaePeer::RLEARLYFLEX, $this->rlearlyflex);
        if ($this->isColumnModified(LarvaePeer::RLEARLYPOST)) $criteria->add(LarvaePeer::RLEARLYPOST, $this->rlearlypost);
        if ($this->isColumnModified(LarvaePeer::RLFLEXPRE)) $criteria->add(LarvaePeer::RLFLEXPRE, $this->rlflexpre);
        if ($this->isColumnModified(LarvaePeer::RLFLEXFLEX)) $criteria->add(LarvaePeer::RLFLEXFLEX, $this->rlflexflex);
        if ($this->isColumnModified(LarvaePeer::RLFLEXPOST)) $criteria->add(LarvaePeer::RLFLEXPOST, $this->rlflexpost);
        if ($this->isColumnModified(LarvaePeer::MEASUREMENTSPREREF)) $criteria->add(LarvaePeer::MEASUREMENTSPREREF, $this->measurementspreref);
        if ($this->isColumnModified(LarvaePeer::MEASUREMENTSFLEXREF)) $criteria->add(LarvaePeer::MEASUREMENTSFLEXREF, $this->measurementsflexref);
        if ($this->isColumnModified(LarvaePeer::MEASUREMENTSPOSTREF)) $criteria->add(LarvaePeer::MEASUREMENTSPOSTREF, $this->measurementspostref);
        if ($this->isColumnModified(LarvaePeer::TYPEPRE)) $criteria->add(LarvaePeer::TYPEPRE, $this->typepre);
        if ($this->isColumnModified(LarvaePeer::TYPEFLEX)) $criteria->add(LarvaePeer::TYPEFLEX, $this->typeflex);
        if ($this->isColumnModified(LarvaePeer::TYPEPOST)) $criteria->add(LarvaePeer::TYPEPOST, $this->typepost);
        if ($this->isColumnModified(LarvaePeer::COMMENT)) $criteria->add(LarvaePeer::COMMENT, $this->comment);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXPRE)) $criteria->add(LarvaePeer::PREANALLENGTHMAXPRE, $this->preanallengthmaxpre);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXFLEX)) $criteria->add(LarvaePeer::PREANALLENGTHMAXFLEX, $this->preanallengthmaxflex);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMAXPOST)) $criteria->add(LarvaePeer::PREANALLENGTHMAXPOST, $this->preanallengthmaxpost);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINPRE)) $criteria->add(LarvaePeer::PREANALLENGTHMINPRE, $this->preanallengthminpre);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINFLEX)) $criteria->add(LarvaePeer::PREANALLENGTHMINFLEX, $this->preanallengthminflex);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHMINPOST)) $criteria->add(LarvaePeer::PREANALLENGTHMINPOST, $this->preanallengthminpost);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHLITPRE)) $criteria->add(LarvaePeer::PREANALLENGTHLITPRE, $this->preanallengthlitpre);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHLITFLEX)) $criteria->add(LarvaePeer::PREANALLENGTHLITFLEX, $this->preanallengthlitflex);
        if ($this->isColumnModified(LarvaePeer::PREANALLENGTHLITPOST)) $criteria->add(LarvaePeer::PREANALLENGTHLITPOST, $this->preanallengthlitpost);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMAXPRE)) $criteria->add(LarvaePeer::PREPECLENGTHMAXPRE, $this->prepeclengthmaxpre);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMAXFLEX)) $criteria->add(LarvaePeer::PREPECLENGTHMAXFLEX, $this->prepeclengthmaxflex);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMAXPOST)) $criteria->add(LarvaePeer::PREPECLENGTHMAXPOST, $this->prepeclengthmaxpost);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMINPRE)) $criteria->add(LarvaePeer::PREPECLENGTHMINPRE, $this->prepeclengthminpre);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMINFLEX)) $criteria->add(LarvaePeer::PREPECLENGTHMINFLEX, $this->prepeclengthminflex);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHMINPOST)) $criteria->add(LarvaePeer::PREPECLENGTHMINPOST, $this->prepeclengthminpost);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHLITPRE)) $criteria->add(LarvaePeer::PREPECLENGTHLITPRE, $this->prepeclengthlitpre);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHLITFLEX)) $criteria->add(LarvaePeer::PREPECLENGTHLITFLEX, $this->prepeclengthlitflex);
        if ($this->isColumnModified(LarvaePeer::PREPECLENGTHLITPOST)) $criteria->add(LarvaePeer::PREPECLENGTHLITPOST, $this->prepeclengthlitpost);
        if ($this->isColumnModified(LarvaePeer::PREORBITALMAXPRE)) $criteria->add(LarvaePeer::PREORBITALMAXPRE, $this->preorbitalmaxpre);
        if ($this->isColumnModified(LarvaePeer::PREORBITALMAXFLEX)) $criteria->add(LarvaePeer::PREORBITALMAXFLEX, $this->preorbitalmaxflex);
        if ($this->isColumnModified(LarvaePeer::PREORBITALMAXPOST)) $criteria->add(LarvaePeer::PREORBITALMAXPOST, $this->preorbitalmaxpost);
        if ($this->isColumnModified(LarvaePeer::PREORBITALMINPRE)) $criteria->add(LarvaePeer::PREORBITALMINPRE, $this->preorbitalminpre);
        if ($this->isColumnModified(LarvaePeer::PREORBITALMINFLEX)) $criteria->add(LarvaePeer::PREORBITALMINFLEX, $this->preorbitalminflex);
        if ($this->isColumnModified(LarvaePeer::PREORBITALMINPOST)) $criteria->add(LarvaePeer::PREORBITALMINPOST, $this->preorbitalminpost);
        if ($this->isColumnModified(LarvaePeer::PREORBITALLITPRE)) $criteria->add(LarvaePeer::PREORBITALLITPRE, $this->preorbitallitpre);
        if ($this->isColumnModified(LarvaePeer::PREORBITALLITFLEX)) $criteria->add(LarvaePeer::PREORBITALLITFLEX, $this->preorbitallitflex);
        if ($this->isColumnModified(LarvaePeer::PREORBITALLITPOST)) $criteria->add(LarvaePeer::PREORBITALLITPOST, $this->preorbitallitpost);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMAXPRE)) $criteria->add(LarvaePeer::DIAMETEROFEYEMAXPRE, $this->diameterofeyemaxpre);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMAXFLEX)) $criteria->add(LarvaePeer::DIAMETEROFEYEMAXFLEX, $this->diameterofeyemaxflex);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMAXPOST)) $criteria->add(LarvaePeer::DIAMETEROFEYEMAXPOST, $this->diameterofeyemaxpost);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMINPRE)) $criteria->add(LarvaePeer::DIAMETEROFEYEMINPRE, $this->diameterofeyeminpre);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMINFLEX)) $criteria->add(LarvaePeer::DIAMETEROFEYEMINFLEX, $this->diameterofeyeminflex);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYEMINPOST)) $criteria->add(LarvaePeer::DIAMETEROFEYEMINPOST, $this->diameterofeyeminpost);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYELITPRE)) $criteria->add(LarvaePeer::DIAMETEROFEYELITPRE, $this->diameterofeyelitpre);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYELITFLEX)) $criteria->add(LarvaePeer::DIAMETEROFEYELITFLEX, $this->diameterofeyelitflex);
        if ($this->isColumnModified(LarvaePeer::DIAMETEROFEYELITPOST)) $criteria->add(LarvaePeer::DIAMETEROFEYELITPOST, $this->diameterofeyelitpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMAXPRE)) $criteria->add(LarvaePeer::DEPTHEYEMAXPRE, $this->deptheyemaxpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMAXFLEX)) $criteria->add(LarvaePeer::DEPTHEYEMAXFLEX, $this->deptheyemaxflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMAXPOST)) $criteria->add(LarvaePeer::DEPTHEYEMAXPOST, $this->deptheyemaxpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMINPRE)) $criteria->add(LarvaePeer::DEPTHEYEMINPRE, $this->deptheyeminpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMINFLEX)) $criteria->add(LarvaePeer::DEPTHEYEMINFLEX, $this->deptheyeminflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYEMINPOST)) $criteria->add(LarvaePeer::DEPTHEYEMINPOST, $this->deptheyeminpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYELITPRE)) $criteria->add(LarvaePeer::DEPTHEYELITPRE, $this->deptheyelitpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYELITFLEX)) $criteria->add(LarvaePeer::DEPTHEYELITFLEX, $this->deptheyelitflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHEYELITPOST)) $criteria->add(LarvaePeer::DEPTHEYELITPOST, $this->deptheyelitpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMAXPRE)) $criteria->add(LarvaePeer::DEPTHPECTORALMAXPRE, $this->depthpectoralmaxpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMAXFLEX)) $criteria->add(LarvaePeer::DEPTHPECTORALMAXFLEX, $this->depthpectoralmaxflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMAXPOST)) $criteria->add(LarvaePeer::DEPTHPECTORALMAXPOST, $this->depthpectoralmaxpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMINPRE)) $criteria->add(LarvaePeer::DEPTHPECTORALMINPRE, $this->depthpectoralminpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMINFLEX)) $criteria->add(LarvaePeer::DEPTHPECTORALMINFLEX, $this->depthpectoralminflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALMINPOST)) $criteria->add(LarvaePeer::DEPTHPECTORALMINPOST, $this->depthpectoralminpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALLITPRE)) $criteria->add(LarvaePeer::DEPTHPECTORALLITPRE, $this->depthpectorallitpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALLITFLEX)) $criteria->add(LarvaePeer::DEPTHPECTORALLITFLEX, $this->depthpectorallitflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHPECTORALLITPOST)) $criteria->add(LarvaePeer::DEPTHPECTORALLITPOST, $this->depthpectorallitpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMAXPRE)) $criteria->add(LarvaePeer::DEPTHANUSMAXPRE, $this->depthanusmaxpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMAXFLEX)) $criteria->add(LarvaePeer::DEPTHANUSMAXFLEX, $this->depthanusmaxflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMAXPOST)) $criteria->add(LarvaePeer::DEPTHANUSMAXPOST, $this->depthanusmaxpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMINPRE)) $criteria->add(LarvaePeer::DEPTHANUSMINPRE, $this->depthanusminpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMINFLEX)) $criteria->add(LarvaePeer::DEPTHANUSMINFLEX, $this->depthanusminflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSMINPOST)) $criteria->add(LarvaePeer::DEPTHANUSMINPOST, $this->depthanusminpost);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSLITPRE)) $criteria->add(LarvaePeer::DEPTHANUSLITPRE, $this->depthanuslitpre);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSLITFLEX)) $criteria->add(LarvaePeer::DEPTHANUSLITFLEX, $this->depthanuslitflex);
        if ($this->isColumnModified(LarvaePeer::DEPTHANUSLITPOST)) $criteria->add(LarvaePeer::DEPTHANUSLITPOST, $this->depthanuslitpost);
        if ($this->isColumnModified(LarvaePeer::ADDCHARYOLKS)) $criteria->add(LarvaePeer::ADDCHARYOLKS, $this->addcharyolks);
        if ($this->isColumnModified(LarvaePeer::ADDCHARPOSTS)) $criteria->add(LarvaePeer::ADDCHARPOSTS, $this->addcharposts);
        if ($this->isColumnModified(LarvaePeer::EASEOFID)) $criteria->add(LarvaePeer::EASEOFID, $this->easeofid);
        if ($this->isColumnModified(LarvaePeer::SIMILARSPECIES1)) $criteria->add(LarvaePeer::SIMILARSPECIES1, $this->similarspecies1);
        if ($this->isColumnModified(LarvaePeer::SIMILARSPEC1REMARKS)) $criteria->add(LarvaePeer::SIMILARSPEC1REMARKS, $this->similarspec1remarks);
        if ($this->isColumnModified(LarvaePeer::SIMILARSPECIES2)) $criteria->add(LarvaePeer::SIMILARSPECIES2, $this->similarspecies2);
        if ($this->isColumnModified(LarvaePeer::SIMILARSPEC2REMARKS)) $criteria->add(LarvaePeer::SIMILARSPEC2REMARKS, $this->similarspec2remarks);
        if ($this->isColumnModified(LarvaePeer::ENTERED)) $criteria->add(LarvaePeer::ENTERED, $this->entered);
        if ($this->isColumnModified(LarvaePeer::DATEENTERED)) $criteria->add(LarvaePeer::DATEENTERED, $this->dateentered);
        if ($this->isColumnModified(LarvaePeer::MODIFIED)) $criteria->add(LarvaePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(LarvaePeer::DATEMODIFIED)) $criteria->add(LarvaePeer::DATEMODIFIED, $this->datemodified);
        if ($this->isColumnModified(LarvaePeer::EXPERT)) $criteria->add(LarvaePeer::EXPERT, $this->expert);
        if ($this->isColumnModified(LarvaePeer::DATECHECKED)) $criteria->add(LarvaePeer::DATECHECKED, $this->datechecked);
        if ($this->isColumnModified(LarvaePeer::TS)) $criteria->add(LarvaePeer::TS, $this->ts);

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
        $criteria = new Criteria(LarvaePeer::DATABASE_NAME);
        $criteria->add(LarvaePeer::STOCKCODE, $this->stockcode);
        $criteria->add(LarvaePeer::LARVALAREA, $this->larvalarea);

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
        $pks[1] = $this->getLarvalarea();

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
        $this->setLarvalarea($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStockcode()) && (null === $this->getLarvalarea());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Larvae (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setStockcode($this->getStockcode());
        $copyObj->setSpeccode($this->getSpeccode());
        $copyObj->setLarvaerefno($this->getLarvaerefno());
        $copyObj->setOtherref1($this->getOtherref1());
        $copyObj->setOtherref2($this->getOtherref2());
        $copyObj->setLarvalarea($this->getLarvalarea());
        $copyObj->setPlaceofdevelopment($this->getPlaceofdevelopment());
        $copyObj->setLhmax($this->getLhmax());
        $copyObj->setLbirthmaxref($this->getLbirthmaxref());
        $copyObj->setLhmin($this->getLhmin());
        $copyObj->setLbirthminref($this->getLbirthminref());
        $copyObj->setLhmid($this->getLhmid());
        $copyObj->setLbirthmodref($this->getLbirthmodref());
        $copyObj->setPreanallengthmaxy($this->getPreanallengthmaxy());
        $copyObj->setPreanmaxref($this->getPreanmaxref());
        $copyObj->setPreanallengthminy($this->getPreanallengthminy());
        $copyObj->setPreanminref($this->getPreanminref());
        $copyObj->setPreanallengthmody($this->getPreanallengthmody());
        $copyObj->setPreanmodref($this->getPreanmodref());
        $copyObj->setFlexlengthmin($this->getFlexlengthmin());
        $copyObj->setFlexlengthmod($this->getFlexlengthmod());
        $copyObj->setFlexlengthmax($this->getFlexlengthmax());
        $copyObj->setFlexlengthtype($this->getFlexlengthtype());
        $copyObj->setFlexlengthminref($this->getFlexlengthminref());
        $copyObj->setFlexlengthmodref($this->getFlexlengthmodref());
        $copyObj->setFlexlengthmaxref($this->getFlexlengthmaxref());
        $copyObj->setTranslengthmin($this->getTranslengthmin());
        $copyObj->setTranslengthmod($this->getTranslengthmod());
        $copyObj->setTranslengthmax($this->getTranslengthmax());
        $copyObj->setTranslengthtype($this->getTranslengthtype());
        $copyObj->setTranslengthminref($this->getTranslengthminref());
        $copyObj->setTranslengthmodref($this->getTranslengthmodref());
        $copyObj->setTranslengthmaxref($this->getTranslengthmaxref());
        $copyObj->setLarvaldurationmin($this->getLarvaldurationmin());
        $copyObj->setLarvaldurationminref($this->getLarvaldurationminref());
        $copyObj->setLarvaldurationmax($this->getLarvaldurationmax());
        $copyObj->setLarvaldurationmaxref($this->getLarvaldurationmaxref());
        $copyObj->setLarvaldurationmod($this->getLarvaldurationmod());
        $copyObj->setLarvaldurationmodref($this->getLarvaldurationmodref());
        $copyObj->setShapeofyolksac($this->getShapeofyolksac());
        $copyObj->setYolksacpigm($this->getYolksacpigm());
        $copyObj->setYolksacsegm($this->getYolksacsegm());
        $copyObj->setYolkref($this->getYolkref());
        $copyObj->setOilglobules($this->getOilglobules());
        $copyObj->setOilglobuleposh($this->getOilglobuleposh());
        $copyObj->setOilglobuleposv($this->getOilglobuleposv());
        $copyObj->setOilglobulepigm($this->getOilglobulepigm());
        $copyObj->setRowsontaily($this->getRowsontaily());
        $copyObj->setOthermelontaily($this->getOthermelontaily());
        $copyObj->setMelonheadtrunky($this->getMelonheadtrunky());
        $copyObj->setLyamax($this->getLyamax());
        $copyObj->setL1feedmaxref($this->getL1feedmaxref());
        $copyObj->setLyamin($this->getLyamin());
        $copyObj->setL1feedminref($this->getL1feedminref());
        $copyObj->setLyamod($this->getLyamod());
        $copyObj->setL1feedmodref($this->getL1feedmodref());
        $copyObj->setJanlarv($this->getJanlarv());
        $copyObj->setFeblarv($this->getFeblarv());
        $copyObj->setMarlarv($this->getMarlarv());
        $copyObj->setAprlarv($this->getAprlarv());
        $copyObj->setMaylarv($this->getMaylarv());
        $copyObj->setJunlarv($this->getJunlarv());
        $copyObj->setJullarv($this->getJullarv());
        $copyObj->setAuglarv($this->getAuglarv());
        $copyObj->setSeplarv($this->getSeplarv());
        $copyObj->setOctlarv($this->getOctlarv());
        $copyObj->setNovlarv($this->getNovlarv());
        $copyObj->setDeclarv($this->getDeclarv());
        $copyObj->setPresenceref($this->getPresenceref());
        $copyObj->setWaterdepthmax($this->getWaterdepthmax());
        $copyObj->setWatertempmax($this->getWatertempmax());
        $copyObj->setSalinitymax($this->getSalinitymax());
        $copyObj->setPh($this->getPh());
        $copyObj->setOxygenmax($this->getOxygenmax());
        $copyObj->setWatermaxref($this->getWatermaxref());
        $copyObj->setWaterdepthmin($this->getWaterdepthmin());
        $copyObj->setWatertempmin($this->getWatertempmin());
        $copyObj->setSalinitymin($this->getSalinitymin());
        $copyObj->setPhmin($this->getPhmin());
        $copyObj->setOxygenmin($this->getOxygenmin());
        $copyObj->setWaterminref($this->getWaterminref());
        $copyObj->setWaterdepthmod($this->getWaterdepthmod());
        $copyObj->setWatertempmod($this->getWatertempmod());
        $copyObj->setSalinitymod($this->getSalinitymod());
        $copyObj->setPhmod($this->getPhmod());
        $copyObj->setOxygenmod($this->getOxygenmod());
        $copyObj->setWatermodref($this->getWatermodref());
        $copyObj->setStrikingfeature($this->getStrikingfeature());
        $copyObj->setLarvapic($this->getLarvapic());
        $copyObj->setStrikingshapelat($this->getStrikingshapelat());
        $copyObj->setStrikingshapedors($this->getStrikingshapedors());
        $copyObj->setBodyform($this->getBodyform());
        $copyObj->setShapeofgut($this->getShapeofgut());
        $copyObj->setGasbladderearly($this->getGasbladderearly());
        $copyObj->setGasbladderlate($this->getGasbladderlate());
        $copyObj->setSpinalarmatureearl($this->getSpinalarmatureearl());
        $copyObj->setSpinalarmaturelate($this->getSpinalarmaturelate());
        $copyObj->setRowsontaile($this->getRowsontaile());
        $copyObj->setOthermelontaile($this->getOthermelontaile());
        $copyObj->setMelonheadtrunke($this->getMelonheadtrunke());
        $copyObj->setRowsontaill($this->getRowsontaill());
        $copyObj->setOthermelontaill($this->getOthermelontaill());
        $copyObj->setMelonheadtrunkl($this->getMelonheadtrunkl());
        $copyObj->setUrostyleregion($this->getUrostyleregion());
        $copyObj->setUrostyleregionlate($this->getUrostyleregionlate());
        $copyObj->setPeritoneum($this->getPeritoneum());
        $copyObj->setPectoralsi($this->getPectoralsi());
        $copyObj->setPectoralsii($this->getPectoralsii());
        $copyObj->setPelvicsi($this->getPelvicsi());
        $copyObj->setPelvicsii($this->getPelvicsii());
        $copyObj->setMyomeresmax($this->getMyomeresmax());
        $copyObj->setMyomeresmin($this->getMyomeresmin());
        $copyObj->setMyomeresmod($this->getMyomeresmod());
        $copyObj->setMyomvert($this->getMyomvert());
        $copyObj->setTotmyomref($this->getTotmyomref());
        $copyObj->setMyomeresmaxprean($this->getMyomeresmaxprean());
        $copyObj->setMyomeresminprean($this->getMyomeresminprean());
        $copyObj->setMyomeresmodprean($this->getMyomeresmodprean());
        $copyObj->setMyomvert2($this->getMyomvert2());
        $copyObj->setPreanmyoref($this->getPreanmyoref());
        $copyObj->setRllatepre($this->getRllatepre());
        $copyObj->setRllateflex($this->getRllateflex());
        $copyObj->setRllatepost($this->getRllatepost());
        $copyObj->setRlearlypre($this->getRlearlypre());
        $copyObj->setRlearlyflex($this->getRlearlyflex());
        $copyObj->setRlearlypost($this->getRlearlypost());
        $copyObj->setRlflexpre($this->getRlflexpre());
        $copyObj->setRlflexflex($this->getRlflexflex());
        $copyObj->setRlflexpost($this->getRlflexpost());
        $copyObj->setMeasurementspreref($this->getMeasurementspreref());
        $copyObj->setMeasurementsflexref($this->getMeasurementsflexref());
        $copyObj->setMeasurementspostref($this->getMeasurementspostref());
        $copyObj->setTypepre($this->getTypepre());
        $copyObj->setTypeflex($this->getTypeflex());
        $copyObj->setTypepost($this->getTypepost());
        $copyObj->setComment($this->getComment());
        $copyObj->setPreanallengthmaxpre($this->getPreanallengthmaxpre());
        $copyObj->setPreanallengthmaxflex($this->getPreanallengthmaxflex());
        $copyObj->setPreanallengthmaxpost($this->getPreanallengthmaxpost());
        $copyObj->setPreanallengthminpre($this->getPreanallengthminpre());
        $copyObj->setPreanallengthminflex($this->getPreanallengthminflex());
        $copyObj->setPreanallengthminpost($this->getPreanallengthminpost());
        $copyObj->setPreanallengthlitpre($this->getPreanallengthlitpre());
        $copyObj->setPreanallengthlitflex($this->getPreanallengthlitflex());
        $copyObj->setPreanallengthlitpost($this->getPreanallengthlitpost());
        $copyObj->setPrepeclengthmaxpre($this->getPrepeclengthmaxpre());
        $copyObj->setPrepeclengthmaxflex($this->getPrepeclengthmaxflex());
        $copyObj->setPrepeclengthmaxpost($this->getPrepeclengthmaxpost());
        $copyObj->setPrepeclengthminpre($this->getPrepeclengthminpre());
        $copyObj->setPrepeclengthminflex($this->getPrepeclengthminflex());
        $copyObj->setPrepeclengthminpost($this->getPrepeclengthminpost());
        $copyObj->setPrepeclengthlitpre($this->getPrepeclengthlitpre());
        $copyObj->setPrepeclengthlitflex($this->getPrepeclengthlitflex());
        $copyObj->setPrepeclengthlitpost($this->getPrepeclengthlitpost());
        $copyObj->setPreorbitalmaxpre($this->getPreorbitalmaxpre());
        $copyObj->setPreorbitalmaxflex($this->getPreorbitalmaxflex());
        $copyObj->setPreorbitalmaxpost($this->getPreorbitalmaxpost());
        $copyObj->setPreorbitalminpre($this->getPreorbitalminpre());
        $copyObj->setPreorbitalminflex($this->getPreorbitalminflex());
        $copyObj->setPreorbitalminpost($this->getPreorbitalminpost());
        $copyObj->setPreorbitallitpre($this->getPreorbitallitpre());
        $copyObj->setPreorbitallitflex($this->getPreorbitallitflex());
        $copyObj->setPreorbitallitpost($this->getPreorbitallitpost());
        $copyObj->setDiameterofeyemaxpre($this->getDiameterofeyemaxpre());
        $copyObj->setDiameterofeyemaxflex($this->getDiameterofeyemaxflex());
        $copyObj->setDiameterofeyemaxpost($this->getDiameterofeyemaxpost());
        $copyObj->setDiameterofeyeminpre($this->getDiameterofeyeminpre());
        $copyObj->setDiameterofeyeminflex($this->getDiameterofeyeminflex());
        $copyObj->setDiameterofeyeminpost($this->getDiameterofeyeminpost());
        $copyObj->setDiameterofeyelitpre($this->getDiameterofeyelitpre());
        $copyObj->setDiameterofeyelitflex($this->getDiameterofeyelitflex());
        $copyObj->setDiameterofeyelitpost($this->getDiameterofeyelitpost());
        $copyObj->setDeptheyemaxpre($this->getDeptheyemaxpre());
        $copyObj->setDeptheyemaxflex($this->getDeptheyemaxflex());
        $copyObj->setDeptheyemaxpost($this->getDeptheyemaxpost());
        $copyObj->setDeptheyeminpre($this->getDeptheyeminpre());
        $copyObj->setDeptheyeminflex($this->getDeptheyeminflex());
        $copyObj->setDeptheyeminpost($this->getDeptheyeminpost());
        $copyObj->setDeptheyelitpre($this->getDeptheyelitpre());
        $copyObj->setDeptheyelitflex($this->getDeptheyelitflex());
        $copyObj->setDeptheyelitpost($this->getDeptheyelitpost());
        $copyObj->setDepthpectoralmaxpre($this->getDepthpectoralmaxpre());
        $copyObj->setDepthpectoralmaxflex($this->getDepthpectoralmaxflex());
        $copyObj->setDepthpectoralmaxpost($this->getDepthpectoralmaxpost());
        $copyObj->setDepthpectoralminpre($this->getDepthpectoralminpre());
        $copyObj->setDepthpectoralminflex($this->getDepthpectoralminflex());
        $copyObj->setDepthpectoralminpost($this->getDepthpectoralminpost());
        $copyObj->setDepthpectorallitpre($this->getDepthpectorallitpre());
        $copyObj->setDepthpectorallitflex($this->getDepthpectorallitflex());
        $copyObj->setDepthpectorallitpost($this->getDepthpectorallitpost());
        $copyObj->setDepthanusmaxpre($this->getDepthanusmaxpre());
        $copyObj->setDepthanusmaxflex($this->getDepthanusmaxflex());
        $copyObj->setDepthanusmaxpost($this->getDepthanusmaxpost());
        $copyObj->setDepthanusminpre($this->getDepthanusminpre());
        $copyObj->setDepthanusminflex($this->getDepthanusminflex());
        $copyObj->setDepthanusminpost($this->getDepthanusminpost());
        $copyObj->setDepthanuslitpre($this->getDepthanuslitpre());
        $copyObj->setDepthanuslitflex($this->getDepthanuslitflex());
        $copyObj->setDepthanuslitpost($this->getDepthanuslitpost());
        $copyObj->setAddcharyolks($this->getAddcharyolks());
        $copyObj->setAddcharposts($this->getAddcharposts());
        $copyObj->setEaseofid($this->getEaseofid());
        $copyObj->setSimilarspecies1($this->getSimilarspecies1());
        $copyObj->setSimilarspec1remarks($this->getSimilarspec1remarks());
        $copyObj->setSimilarspecies2($this->getSimilarspecies2());
        $copyObj->setSimilarspec2remarks($this->getSimilarspec2remarks());
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
     * @return Larvae Clone of current object.
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
     * @return LarvaePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LarvaePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->autoctr = null;
        $this->stockcode = null;
        $this->speccode = null;
        $this->larvaerefno = null;
        $this->otherref1 = null;
        $this->otherref2 = null;
        $this->larvalarea = null;
        $this->placeofdevelopment = null;
        $this->lhmax = null;
        $this->lbirthmaxref = null;
        $this->lhmin = null;
        $this->lbirthminref = null;
        $this->lhmid = null;
        $this->lbirthmodref = null;
        $this->preanallengthmaxy = null;
        $this->preanmaxref = null;
        $this->preanallengthminy = null;
        $this->preanminref = null;
        $this->preanallengthmody = null;
        $this->preanmodref = null;
        $this->flexlengthmin = null;
        $this->flexlengthmod = null;
        $this->flexlengthmax = null;
        $this->flexlengthtype = null;
        $this->flexlengthminref = null;
        $this->flexlengthmodref = null;
        $this->flexlengthmaxref = null;
        $this->translengthmin = null;
        $this->translengthmod = null;
        $this->translengthmax = null;
        $this->translengthtype = null;
        $this->translengthminref = null;
        $this->translengthmodref = null;
        $this->translengthmaxref = null;
        $this->larvaldurationmin = null;
        $this->larvaldurationminref = null;
        $this->larvaldurationmax = null;
        $this->larvaldurationmaxref = null;
        $this->larvaldurationmod = null;
        $this->larvaldurationmodref = null;
        $this->shapeofyolksac = null;
        $this->yolksacpigm = null;
        $this->yolksacsegm = null;
        $this->yolkref = null;
        $this->oilglobules = null;
        $this->oilglobuleposh = null;
        $this->oilglobuleposv = null;
        $this->oilglobulepigm = null;
        $this->rowsontaily = null;
        $this->othermelontaily = null;
        $this->melonheadtrunky = null;
        $this->lyamax = null;
        $this->l1feedmaxref = null;
        $this->lyamin = null;
        $this->l1feedminref = null;
        $this->lyamod = null;
        $this->l1feedmodref = null;
        $this->janlarv = null;
        $this->feblarv = null;
        $this->marlarv = null;
        $this->aprlarv = null;
        $this->maylarv = null;
        $this->junlarv = null;
        $this->jullarv = null;
        $this->auglarv = null;
        $this->seplarv = null;
        $this->octlarv = null;
        $this->novlarv = null;
        $this->declarv = null;
        $this->presenceref = null;
        $this->waterdepthmax = null;
        $this->watertempmax = null;
        $this->salinitymax = null;
        $this->ph = null;
        $this->oxygenmax = null;
        $this->watermaxref = null;
        $this->waterdepthmin = null;
        $this->watertempmin = null;
        $this->salinitymin = null;
        $this->phmin = null;
        $this->oxygenmin = null;
        $this->waterminref = null;
        $this->waterdepthmod = null;
        $this->watertempmod = null;
        $this->salinitymod = null;
        $this->phmod = null;
        $this->oxygenmod = null;
        $this->watermodref = null;
        $this->strikingfeature = null;
        $this->larvapic = null;
        $this->strikingshapelat = null;
        $this->strikingshapedors = null;
        $this->bodyform = null;
        $this->shapeofgut = null;
        $this->gasbladderearly = null;
        $this->gasbladderlate = null;
        $this->spinalarmatureearl = null;
        $this->spinalarmaturelate = null;
        $this->rowsontaile = null;
        $this->othermelontaile = null;
        $this->melonheadtrunke = null;
        $this->rowsontaill = null;
        $this->othermelontaill = null;
        $this->melonheadtrunkl = null;
        $this->urostyleregion = null;
        $this->urostyleregionlate = null;
        $this->peritoneum = null;
        $this->pectoralsi = null;
        $this->pectoralsii = null;
        $this->pelvicsi = null;
        $this->pelvicsii = null;
        $this->myomeresmax = null;
        $this->myomeresmin = null;
        $this->myomeresmod = null;
        $this->myomvert = null;
        $this->totmyomref = null;
        $this->myomeresmaxprean = null;
        $this->myomeresminprean = null;
        $this->myomeresmodprean = null;
        $this->myomvert2 = null;
        $this->preanmyoref = null;
        $this->rllatepre = null;
        $this->rllateflex = null;
        $this->rllatepost = null;
        $this->rlearlypre = null;
        $this->rlearlyflex = null;
        $this->rlearlypost = null;
        $this->rlflexpre = null;
        $this->rlflexflex = null;
        $this->rlflexpost = null;
        $this->measurementspreref = null;
        $this->measurementsflexref = null;
        $this->measurementspostref = null;
        $this->typepre = null;
        $this->typeflex = null;
        $this->typepost = null;
        $this->comment = null;
        $this->preanallengthmaxpre = null;
        $this->preanallengthmaxflex = null;
        $this->preanallengthmaxpost = null;
        $this->preanallengthminpre = null;
        $this->preanallengthminflex = null;
        $this->preanallengthminpost = null;
        $this->preanallengthlitpre = null;
        $this->preanallengthlitflex = null;
        $this->preanallengthlitpost = null;
        $this->prepeclengthmaxpre = null;
        $this->prepeclengthmaxflex = null;
        $this->prepeclengthmaxpost = null;
        $this->prepeclengthminpre = null;
        $this->prepeclengthminflex = null;
        $this->prepeclengthminpost = null;
        $this->prepeclengthlitpre = null;
        $this->prepeclengthlitflex = null;
        $this->prepeclengthlitpost = null;
        $this->preorbitalmaxpre = null;
        $this->preorbitalmaxflex = null;
        $this->preorbitalmaxpost = null;
        $this->preorbitalminpre = null;
        $this->preorbitalminflex = null;
        $this->preorbitalminpost = null;
        $this->preorbitallitpre = null;
        $this->preorbitallitflex = null;
        $this->preorbitallitpost = null;
        $this->diameterofeyemaxpre = null;
        $this->diameterofeyemaxflex = null;
        $this->diameterofeyemaxpost = null;
        $this->diameterofeyeminpre = null;
        $this->diameterofeyeminflex = null;
        $this->diameterofeyeminpost = null;
        $this->diameterofeyelitpre = null;
        $this->diameterofeyelitflex = null;
        $this->diameterofeyelitpost = null;
        $this->deptheyemaxpre = null;
        $this->deptheyemaxflex = null;
        $this->deptheyemaxpost = null;
        $this->deptheyeminpre = null;
        $this->deptheyeminflex = null;
        $this->deptheyeminpost = null;
        $this->deptheyelitpre = null;
        $this->deptheyelitflex = null;
        $this->deptheyelitpost = null;
        $this->depthpectoralmaxpre = null;
        $this->depthpectoralmaxflex = null;
        $this->depthpectoralmaxpost = null;
        $this->depthpectoralminpre = null;
        $this->depthpectoralminflex = null;
        $this->depthpectoralminpost = null;
        $this->depthpectorallitpre = null;
        $this->depthpectorallitflex = null;
        $this->depthpectorallitpost = null;
        $this->depthanusmaxpre = null;
        $this->depthanusmaxflex = null;
        $this->depthanusmaxpost = null;
        $this->depthanusminpre = null;
        $this->depthanusminflex = null;
        $this->depthanusminpost = null;
        $this->depthanuslitpre = null;
        $this->depthanuslitflex = null;
        $this->depthanuslitpost = null;
        $this->addcharyolks = null;
        $this->addcharposts = null;
        $this->easeofid = null;
        $this->similarspecies1 = null;
        $this->similarspec1remarks = null;
        $this->similarspecies2 = null;
        $this->similarspec2remarks = null;
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
        return (string) $this->exportTo(LarvaePeer::DEFAULT_STRING_FORMAT);
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
