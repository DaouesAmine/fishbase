<?php


/**
 * Base class that represents a row from the 'waterquality' table.
 *
 *
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWaterquality extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WaterqualityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WaterqualityPeer
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
     * The value for the dissolvedo2opt field.
     * @var        string
     */
    protected $dissolvedo2opt;

    /**
     * The value for the dissolvedo2harm field.
     * @var        string
     */
    protected $dissolvedo2harm;

    /**
     * The value for the ozoneopt field.
     * @var        string
     */
    protected $ozoneopt;

    /**
     * The value for the ozoneharm field.
     * @var        string
     */
    protected $ozoneharm;

    /**
     * The value for the carbondioxideopt field.
     * @var        string
     */
    protected $carbondioxideopt;

    /**
     * The value for the carbondioxideharm field.
     * @var        string
     */
    protected $carbondioxideharm;

    /**
     * The value for the phopt field.
     * @var        string
     */
    protected $phopt;

    /**
     * The value for the phharm field.
     * @var        string
     */
    protected $phharm;

    /**
     * The value for the ammoniaopt field.
     * @var        string
     */
    protected $ammoniaopt;

    /**
     * The value for the ammoniaharm field.
     * @var        string
     */
    protected $ammoniaharm;

    /**
     * The value for the nitriteopt field.
     * @var        string
     */
    protected $nitriteopt;

    /**
     * The value for the nitriteharm field.
     * @var        string
     */
    protected $nitriteharm;

    /**
     * The value for the nitrateopt field.
     * @var        string
     */
    protected $nitrateopt;

    /**
     * The value for the nitrateharm field.
     * @var        string
     */
    protected $nitrateharm;

    /**
     * The value for the nitrousacidopt field.
     * @var        string
     */
    protected $nitrousacidopt;

    /**
     * The value for the nitrousacidharm field.
     * @var        string
     */
    protected $nitrousacidharm;

    /**
     * The value for the chlorineopt field.
     * @var        string
     */
    protected $chlorineopt;

    /**
     * The value for the chlorineharm field.
     * @var        string
     */
    protected $chlorineharm;

    /**
     * The value for the chlorideopt field.
     * @var        string
     */
    protected $chlorideopt;

    /**
     * The value for the chlorideharm field.
     * @var        string
     */
    protected $chlorideharm;

    /**
     * The value for the hsulphateopt field.
     * @var        string
     */
    protected $hsulphateopt;

    /**
     * The value for the hsulphateharm field.
     * @var        string
     */
    protected $hsulphateharm;

    /**
     * The value for the zincopt field.
     * @var        string
     */
    protected $zincopt;

    /**
     * The value for the zincharm field.
     * @var        string
     */
    protected $zincharm;

    /**
     * The value for the copperopt field.
     * @var        string
     */
    protected $copperopt;

    /**
     * The value for the copperharm field.
     * @var        string
     */
    protected $copperharm;

    /**
     * The value for the ironopt field.
     * @var        string
     */
    protected $ironopt;

    /**
     * The value for the ironharm field.
     * @var        string
     */
    protected $ironharm;

    /**
     * The value for the leadopt field.
     * @var        string
     */
    protected $leadopt;

    /**
     * The value for the leadharm field.
     * @var        string
     */
    protected $leadharm;

    /**
     * The value for the mercuryopt field.
     * @var        string
     */
    protected $mercuryopt;

    /**
     * The value for the mercuryharm field.
     * @var        string
     */
    protected $mercuryharm;

    /**
     * The value for the cadmiumopt field.
     * @var        string
     */
    protected $cadmiumopt;

    /**
     * The value for the cadmiumharm field.
     * @var        string
     */
    protected $cadmiumharm;

    /**
     * The value for the nickelopt field.
     * @var        string
     */
    protected $nickelopt;

    /**
     * The value for the nickelharm field.
     * @var        string
     */
    protected $nickelharm;

    /**
     * The value for the chromiumopt field.
     * @var        string
     */
    protected $chromiumopt;

    /**
     * The value for the chromiumharm field.
     * @var        string
     */
    protected $chromiumharm;

    /**
     * The value for the manganeseopt field.
     * @var        string
     */
    protected $manganeseopt;

    /**
     * The value for the manganeseharm field.
     * @var        string
     */
    protected $manganeseharm;

    /**
     * The value for the arsenicopt field.
     * @var        string
     */
    protected $arsenicopt;

    /**
     * The value for the arsenicharm field.
     * @var        string
     */
    protected $arsenicharm;

    /**
     * The value for the aluminumopt field.
     * @var        string
     */
    protected $aluminumopt;

    /**
     * The value for the aluminumharm field.
     * @var        string
     */
    protected $aluminumharm;

    /**
     * The value for the cyanideopt field.
     * @var        string
     */
    protected $cyanideopt;

    /**
     * The value for the cyanideharm field.
     * @var        string
     */
    protected $cyanideharm;

    /**
     * The value for the pcbopt field.
     * @var        string
     */
    protected $pcbopt;

    /**
     * The value for the pcbharm field.
     * @var        string
     */
    protected $pcbharm;

    /**
     * The value for the pesticidesopt field.
     * @var        string
     */
    protected $pesticidesopt;

    /**
     * The value for the pesticidesharm field.
     * @var        string
     */
    protected $pesticidesharm;

    /**
     * The value for the turbidityopt field.
     * @var        string
     */
    protected $turbidityopt;

    /**
     * The value for the turbidityharm field.
     * @var        string
     */
    protected $turbidityharm;

    /**
     * The value for the oilsrefinedopt field.
     * @var        string
     */
    protected $oilsrefinedopt;

    /**
     * The value for the oilsrefinedharm field.
     * @var        string
     */
    protected $oilsrefinedharm;

    /**
     * The value for the dyesopt field.
     * @var        string
     */
    protected $dyesopt;

    /**
     * The value for the dyesharm field.
     * @var        string
     */
    protected $dyesharm;

    /**
     * The value for the phenolsopt field.
     * @var        string
     */
    protected $phenolsopt;

    /**
     * The value for the phenolsharm field.
     * @var        string
     */
    protected $phenolsharm;

    /**
     * The value for the surfactantsopt field.
     * @var        string
     */
    protected $surfactantsopt;

    /**
     * The value for the surfactantsharm field.
     * @var        string
     */
    protected $surfactantsharm;

    /**
     * The value for the phytoplanktonopt field.
     * @var        string
     */
    protected $phytoplanktonopt;

    /**
     * The value for the phytoplanktonharm field.
     * @var        string
     */
    protected $phytoplanktonharm;

    /**
     * The value for the remarko2 field.
     * @var        string
     */
    protected $remarko2;

    /**
     * The value for the remarko3 field.
     * @var        string
     */
    protected $remarko3;

    /**
     * The value for the remarkco2 field.
     * @var        string
     */
    protected $remarkco2;

    /**
     * The value for the remarkph field.
     * @var        string
     */
    protected $remarkph;

    /**
     * The value for the remarknh3 field.
     * @var        string
     */
    protected $remarknh3;

    /**
     * The value for the remarkno2 field.
     * @var        string
     */
    protected $remarkno2;

    /**
     * The value for the remarkno3 field.
     * @var        string
     */
    protected $remarkno3;

    /**
     * The value for the remarkhno2 field.
     * @var        string
     */
    protected $remarkhno2;

    /**
     * The value for the remarkcl2 field.
     * @var        string
     */
    protected $remarkcl2;

    /**
     * The value for the remarkcl field.
     * @var        string
     */
    protected $remarkcl;

    /**
     * The value for the remarkh2s field.
     * @var        string
     */
    protected $remarkh2s;

    /**
     * The value for the remarkzinc field.
     * @var        string
     */
    protected $remarkzinc;

    /**
     * The value for the remarkcopper field.
     * @var        string
     */
    protected $remarkcopper;

    /**
     * The value for the remarkiron field.
     * @var        string
     */
    protected $remarkiron;

    /**
     * The value for the remarklead field.
     * @var        string
     */
    protected $remarklead;

    /**
     * The value for the remarkmercury field.
     * @var        string
     */
    protected $remarkmercury;

    /**
     * The value for the remarkcadmium field.
     * @var        string
     */
    protected $remarkcadmium;

    /**
     * The value for the remarknickel field.
     * @var        string
     */
    protected $remarknickel;

    /**
     * The value for the remarkchromium field.
     * @var        string
     */
    protected $remarkchromium;

    /**
     * The value for the remarkmanganese field.
     * @var        string
     */
    protected $remarkmanganese;

    /**
     * The value for the remarkarsenic field.
     * @var        string
     */
    protected $remarkarsenic;

    /**
     * The value for the remarkaluminum field.
     * @var        string
     */
    protected $remarkaluminum;

    /**
     * The value for the remarkcyanide field.
     * @var        string
     */
    protected $remarkcyanide;

    /**
     * The value for the remarkpcb field.
     * @var        string
     */
    protected $remarkpcb;

    /**
     * The value for the remarkpesticide field.
     * @var        string
     */
    protected $remarkpesticide;

    /**
     * The value for the remarkturbidity field.
     * @var        string
     */
    protected $remarkturbidity;

    /**
     * The value for the remarkoilsrefined field.
     * @var        string
     */
    protected $remarkoilsrefined;

    /**
     * The value for the remarkdyes field.
     * @var        string
     */
    protected $remarkdyes;

    /**
     * The value for the remarkphenols field.
     * @var        string
     */
    protected $remarkphenols;

    /**
     * The value for the remarksurfactants field.
     * @var        string
     */
    protected $remarksurfactants;

    /**
     * The value for the remarkphytoplankton field.
     * @var        string
     */
    protected $remarkphytoplankton;

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
     * Get the [dissolvedo2opt] column value.
     *
     * @return string
     */
    public function getDissolvedo2opt()
    {

        return $this->dissolvedo2opt;
    }

    /**
     * Get the [dissolvedo2harm] column value.
     *
     * @return string
     */
    public function getDissolvedo2harm()
    {

        return $this->dissolvedo2harm;
    }

    /**
     * Get the [ozoneopt] column value.
     *
     * @return string
     */
    public function getOzoneopt()
    {

        return $this->ozoneopt;
    }

    /**
     * Get the [ozoneharm] column value.
     *
     * @return string
     */
    public function getOzoneharm()
    {

        return $this->ozoneharm;
    }

    /**
     * Get the [carbondioxideopt] column value.
     *
     * @return string
     */
    public function getCarbondioxideopt()
    {

        return $this->carbondioxideopt;
    }

    /**
     * Get the [carbondioxideharm] column value.
     *
     * @return string
     */
    public function getCarbondioxideharm()
    {

        return $this->carbondioxideharm;
    }

    /**
     * Get the [phopt] column value.
     *
     * @return string
     */
    public function getPhopt()
    {

        return $this->phopt;
    }

    /**
     * Get the [phharm] column value.
     *
     * @return string
     */
    public function getPhharm()
    {

        return $this->phharm;
    }

    /**
     * Get the [ammoniaopt] column value.
     *
     * @return string
     */
    public function getAmmoniaopt()
    {

        return $this->ammoniaopt;
    }

    /**
     * Get the [ammoniaharm] column value.
     *
     * @return string
     */
    public function getAmmoniaharm()
    {

        return $this->ammoniaharm;
    }

    /**
     * Get the [nitriteopt] column value.
     *
     * @return string
     */
    public function getNitriteopt()
    {

        return $this->nitriteopt;
    }

    /**
     * Get the [nitriteharm] column value.
     *
     * @return string
     */
    public function getNitriteharm()
    {

        return $this->nitriteharm;
    }

    /**
     * Get the [nitrateopt] column value.
     *
     * @return string
     */
    public function getNitrateopt()
    {

        return $this->nitrateopt;
    }

    /**
     * Get the [nitrateharm] column value.
     *
     * @return string
     */
    public function getNitrateharm()
    {

        return $this->nitrateharm;
    }

    /**
     * Get the [nitrousacidopt] column value.
     *
     * @return string
     */
    public function getNitrousacidopt()
    {

        return $this->nitrousacidopt;
    }

    /**
     * Get the [nitrousacidharm] column value.
     *
     * @return string
     */
    public function getNitrousacidharm()
    {

        return $this->nitrousacidharm;
    }

    /**
     * Get the [chlorineopt] column value.
     *
     * @return string
     */
    public function getChlorineopt()
    {

        return $this->chlorineopt;
    }

    /**
     * Get the [chlorineharm] column value.
     *
     * @return string
     */
    public function getChlorineharm()
    {

        return $this->chlorineharm;
    }

    /**
     * Get the [chlorideopt] column value.
     *
     * @return string
     */
    public function getChlorideopt()
    {

        return $this->chlorideopt;
    }

    /**
     * Get the [chlorideharm] column value.
     *
     * @return string
     */
    public function getChlorideharm()
    {

        return $this->chlorideharm;
    }

    /**
     * Get the [hsulphateopt] column value.
     *
     * @return string
     */
    public function getHsulphateopt()
    {

        return $this->hsulphateopt;
    }

    /**
     * Get the [hsulphateharm] column value.
     *
     * @return string
     */
    public function getHsulphateharm()
    {

        return $this->hsulphateharm;
    }

    /**
     * Get the [zincopt] column value.
     *
     * @return string
     */
    public function getZincopt()
    {

        return $this->zincopt;
    }

    /**
     * Get the [zincharm] column value.
     *
     * @return string
     */
    public function getZincharm()
    {

        return $this->zincharm;
    }

    /**
     * Get the [copperopt] column value.
     *
     * @return string
     */
    public function getCopperopt()
    {

        return $this->copperopt;
    }

    /**
     * Get the [copperharm] column value.
     *
     * @return string
     */
    public function getCopperharm()
    {

        return $this->copperharm;
    }

    /**
     * Get the [ironopt] column value.
     *
     * @return string
     */
    public function getIronopt()
    {

        return $this->ironopt;
    }

    /**
     * Get the [ironharm] column value.
     *
     * @return string
     */
    public function getIronharm()
    {

        return $this->ironharm;
    }

    /**
     * Get the [leadopt] column value.
     *
     * @return string
     */
    public function getLeadopt()
    {

        return $this->leadopt;
    }

    /**
     * Get the [leadharm] column value.
     *
     * @return string
     */
    public function getLeadharm()
    {

        return $this->leadharm;
    }

    /**
     * Get the [mercuryopt] column value.
     *
     * @return string
     */
    public function getMercuryopt()
    {

        return $this->mercuryopt;
    }

    /**
     * Get the [mercuryharm] column value.
     *
     * @return string
     */
    public function getMercuryharm()
    {

        return $this->mercuryharm;
    }

    /**
     * Get the [cadmiumopt] column value.
     *
     * @return string
     */
    public function getCadmiumopt()
    {

        return $this->cadmiumopt;
    }

    /**
     * Get the [cadmiumharm] column value.
     *
     * @return string
     */
    public function getCadmiumharm()
    {

        return $this->cadmiumharm;
    }

    /**
     * Get the [nickelopt] column value.
     *
     * @return string
     */
    public function getNickelopt()
    {

        return $this->nickelopt;
    }

    /**
     * Get the [nickelharm] column value.
     *
     * @return string
     */
    public function getNickelharm()
    {

        return $this->nickelharm;
    }

    /**
     * Get the [chromiumopt] column value.
     *
     * @return string
     */
    public function getChromiumopt()
    {

        return $this->chromiumopt;
    }

    /**
     * Get the [chromiumharm] column value.
     *
     * @return string
     */
    public function getChromiumharm()
    {

        return $this->chromiumharm;
    }

    /**
     * Get the [manganeseopt] column value.
     *
     * @return string
     */
    public function getManganeseopt()
    {

        return $this->manganeseopt;
    }

    /**
     * Get the [manganeseharm] column value.
     *
     * @return string
     */
    public function getManganeseharm()
    {

        return $this->manganeseharm;
    }

    /**
     * Get the [arsenicopt] column value.
     *
     * @return string
     */
    public function getArsenicopt()
    {

        return $this->arsenicopt;
    }

    /**
     * Get the [arsenicharm] column value.
     *
     * @return string
     */
    public function getArsenicharm()
    {

        return $this->arsenicharm;
    }

    /**
     * Get the [aluminumopt] column value.
     *
     * @return string
     */
    public function getAluminumopt()
    {

        return $this->aluminumopt;
    }

    /**
     * Get the [aluminumharm] column value.
     *
     * @return string
     */
    public function getAluminumharm()
    {

        return $this->aluminumharm;
    }

    /**
     * Get the [cyanideopt] column value.
     *
     * @return string
     */
    public function getCyanideopt()
    {

        return $this->cyanideopt;
    }

    /**
     * Get the [cyanideharm] column value.
     *
     * @return string
     */
    public function getCyanideharm()
    {

        return $this->cyanideharm;
    }

    /**
     * Get the [pcbopt] column value.
     *
     * @return string
     */
    public function getPcbopt()
    {

        return $this->pcbopt;
    }

    /**
     * Get the [pcbharm] column value.
     *
     * @return string
     */
    public function getPcbharm()
    {

        return $this->pcbharm;
    }

    /**
     * Get the [pesticidesopt] column value.
     *
     * @return string
     */
    public function getPesticidesopt()
    {

        return $this->pesticidesopt;
    }

    /**
     * Get the [pesticidesharm] column value.
     *
     * @return string
     */
    public function getPesticidesharm()
    {

        return $this->pesticidesharm;
    }

    /**
     * Get the [turbidityopt] column value.
     *
     * @return string
     */
    public function getTurbidityopt()
    {

        return $this->turbidityopt;
    }

    /**
     * Get the [turbidityharm] column value.
     *
     * @return string
     */
    public function getTurbidityharm()
    {

        return $this->turbidityharm;
    }

    /**
     * Get the [oilsrefinedopt] column value.
     *
     * @return string
     */
    public function getOilsrefinedopt()
    {

        return $this->oilsrefinedopt;
    }

    /**
     * Get the [oilsrefinedharm] column value.
     *
     * @return string
     */
    public function getOilsrefinedharm()
    {

        return $this->oilsrefinedharm;
    }

    /**
     * Get the [dyesopt] column value.
     *
     * @return string
     */
    public function getDyesopt()
    {

        return $this->dyesopt;
    }

    /**
     * Get the [dyesharm] column value.
     *
     * @return string
     */
    public function getDyesharm()
    {

        return $this->dyesharm;
    }

    /**
     * Get the [phenolsopt] column value.
     *
     * @return string
     */
    public function getPhenolsopt()
    {

        return $this->phenolsopt;
    }

    /**
     * Get the [phenolsharm] column value.
     *
     * @return string
     */
    public function getPhenolsharm()
    {

        return $this->phenolsharm;
    }

    /**
     * Get the [surfactantsopt] column value.
     *
     * @return string
     */
    public function getSurfactantsopt()
    {

        return $this->surfactantsopt;
    }

    /**
     * Get the [surfactantsharm] column value.
     *
     * @return string
     */
    public function getSurfactantsharm()
    {

        return $this->surfactantsharm;
    }

    /**
     * Get the [phytoplanktonopt] column value.
     *
     * @return string
     */
    public function getPhytoplanktonopt()
    {

        return $this->phytoplanktonopt;
    }

    /**
     * Get the [phytoplanktonharm] column value.
     *
     * @return string
     */
    public function getPhytoplanktonharm()
    {

        return $this->phytoplanktonharm;
    }

    /**
     * Get the [remarko2] column value.
     *
     * @return string
     */
    public function getRemarko2()
    {

        return $this->remarko2;
    }

    /**
     * Get the [remarko3] column value.
     *
     * @return string
     */
    public function getRemarko3()
    {

        return $this->remarko3;
    }

    /**
     * Get the [remarkco2] column value.
     *
     * @return string
     */
    public function getRemarkco2()
    {

        return $this->remarkco2;
    }

    /**
     * Get the [remarkph] column value.
     *
     * @return string
     */
    public function getRemarkph()
    {

        return $this->remarkph;
    }

    /**
     * Get the [remarknh3] column value.
     *
     * @return string
     */
    public function getRemarknh3()
    {

        return $this->remarknh3;
    }

    /**
     * Get the [remarkno2] column value.
     *
     * @return string
     */
    public function getRemarkno2()
    {

        return $this->remarkno2;
    }

    /**
     * Get the [remarkno3] column value.
     *
     * @return string
     */
    public function getRemarkno3()
    {

        return $this->remarkno3;
    }

    /**
     * Get the [remarkhno2] column value.
     *
     * @return string
     */
    public function getRemarkhno2()
    {

        return $this->remarkhno2;
    }

    /**
     * Get the [remarkcl2] column value.
     *
     * @return string
     */
    public function getRemarkcl2()
    {

        return $this->remarkcl2;
    }

    /**
     * Get the [remarkcl] column value.
     *
     * @return string
     */
    public function getRemarkcl()
    {

        return $this->remarkcl;
    }

    /**
     * Get the [remarkh2s] column value.
     *
     * @return string
     */
    public function getRemarkh2s()
    {

        return $this->remarkh2s;
    }

    /**
     * Get the [remarkzinc] column value.
     *
     * @return string
     */
    public function getRemarkzinc()
    {

        return $this->remarkzinc;
    }

    /**
     * Get the [remarkcopper] column value.
     *
     * @return string
     */
    public function getRemarkcopper()
    {

        return $this->remarkcopper;
    }

    /**
     * Get the [remarkiron] column value.
     *
     * @return string
     */
    public function getRemarkiron()
    {

        return $this->remarkiron;
    }

    /**
     * Get the [remarklead] column value.
     *
     * @return string
     */
    public function getRemarklead()
    {

        return $this->remarklead;
    }

    /**
     * Get the [remarkmercury] column value.
     *
     * @return string
     */
    public function getRemarkmercury()
    {

        return $this->remarkmercury;
    }

    /**
     * Get the [remarkcadmium] column value.
     *
     * @return string
     */
    public function getRemarkcadmium()
    {

        return $this->remarkcadmium;
    }

    /**
     * Get the [remarknickel] column value.
     *
     * @return string
     */
    public function getRemarknickel()
    {

        return $this->remarknickel;
    }

    /**
     * Get the [remarkchromium] column value.
     *
     * @return string
     */
    public function getRemarkchromium()
    {

        return $this->remarkchromium;
    }

    /**
     * Get the [remarkmanganese] column value.
     *
     * @return string
     */
    public function getRemarkmanganese()
    {

        return $this->remarkmanganese;
    }

    /**
     * Get the [remarkarsenic] column value.
     *
     * @return string
     */
    public function getRemarkarsenic()
    {

        return $this->remarkarsenic;
    }

    /**
     * Get the [remarkaluminum] column value.
     *
     * @return string
     */
    public function getRemarkaluminum()
    {

        return $this->remarkaluminum;
    }

    /**
     * Get the [remarkcyanide] column value.
     *
     * @return string
     */
    public function getRemarkcyanide()
    {

        return $this->remarkcyanide;
    }

    /**
     * Get the [remarkpcb] column value.
     *
     * @return string
     */
    public function getRemarkpcb()
    {

        return $this->remarkpcb;
    }

    /**
     * Get the [remarkpesticide] column value.
     *
     * @return string
     */
    public function getRemarkpesticide()
    {

        return $this->remarkpesticide;
    }

    /**
     * Get the [remarkturbidity] column value.
     *
     * @return string
     */
    public function getRemarkturbidity()
    {

        return $this->remarkturbidity;
    }

    /**
     * Get the [remarkoilsrefined] column value.
     *
     * @return string
     */
    public function getRemarkoilsrefined()
    {

        return $this->remarkoilsrefined;
    }

    /**
     * Get the [remarkdyes] column value.
     *
     * @return string
     */
    public function getRemarkdyes()
    {

        return $this->remarkdyes;
    }

    /**
     * Get the [remarkphenols] column value.
     *
     * @return string
     */
    public function getRemarkphenols()
    {

        return $this->remarkphenols;
    }

    /**
     * Get the [remarksurfactants] column value.
     *
     * @return string
     */
    public function getRemarksurfactants()
    {

        return $this->remarksurfactants;
    }

    /**
     * Get the [remarkphytoplankton] column value.
     *
     * @return string
     */
    public function getRemarkphytoplankton()
    {

        return $this->remarkphytoplankton;
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
     * @return Waterquality The current object (for fluent API support)
     */
    public function setAutoctr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autoctr !== $v) {
            $this->autoctr = $v;
            $this->modifiedColumns[] = WaterqualityPeer::AUTOCTR;
        }


        return $this;
    } // setAutoctr()

    /**
     * Set the value of [speccode] column.
     *
     * @param  int $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setSpeccode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->speccode !== $v) {
            $this->speccode = $v;
            $this->modifiedColumns[] = WaterqualityPeer::SPECCODE;
        }


        return $this;
    } // setSpeccode()

    /**
     * Set the value of [dissolvedo2opt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setDissolvedo2opt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dissolvedo2opt !== $v) {
            $this->dissolvedo2opt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::DISSOLVEDO2OPT;
        }


        return $this;
    } // setDissolvedo2opt()

    /**
     * Set the value of [dissolvedo2harm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setDissolvedo2harm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dissolvedo2harm !== $v) {
            $this->dissolvedo2harm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::DISSOLVEDO2HARM;
        }


        return $this;
    } // setDissolvedo2harm()

    /**
     * Set the value of [ozoneopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setOzoneopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ozoneopt !== $v) {
            $this->ozoneopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::OZONEOPT;
        }


        return $this;
    } // setOzoneopt()

    /**
     * Set the value of [ozoneharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setOzoneharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ozoneharm !== $v) {
            $this->ozoneharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::OZONEHARM;
        }


        return $this;
    } // setOzoneharm()

    /**
     * Set the value of [carbondioxideopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCarbondioxideopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->carbondioxideopt !== $v) {
            $this->carbondioxideopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CARBONDIOXIDEOPT;
        }


        return $this;
    } // setCarbondioxideopt()

    /**
     * Set the value of [carbondioxideharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCarbondioxideharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->carbondioxideharm !== $v) {
            $this->carbondioxideharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CARBONDIOXIDEHARM;
        }


        return $this;
    } // setCarbondioxideharm()

    /**
     * Set the value of [phopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPhopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phopt !== $v) {
            $this->phopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PHOPT;
        }


        return $this;
    } // setPhopt()

    /**
     * Set the value of [phharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPhharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phharm !== $v) {
            $this->phharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PHHARM;
        }


        return $this;
    } // setPhharm()

    /**
     * Set the value of [ammoniaopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setAmmoniaopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ammoniaopt !== $v) {
            $this->ammoniaopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::AMMONIAOPT;
        }


        return $this;
    } // setAmmoniaopt()

    /**
     * Set the value of [ammoniaharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setAmmoniaharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ammoniaharm !== $v) {
            $this->ammoniaharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::AMMONIAHARM;
        }


        return $this;
    } // setAmmoniaharm()

    /**
     * Set the value of [nitriteopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNitriteopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitriteopt !== $v) {
            $this->nitriteopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NITRITEOPT;
        }


        return $this;
    } // setNitriteopt()

    /**
     * Set the value of [nitriteharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNitriteharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitriteharm !== $v) {
            $this->nitriteharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NITRITEHARM;
        }


        return $this;
    } // setNitriteharm()

    /**
     * Set the value of [nitrateopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNitrateopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitrateopt !== $v) {
            $this->nitrateopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NITRATEOPT;
        }


        return $this;
    } // setNitrateopt()

    /**
     * Set the value of [nitrateharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNitrateharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitrateharm !== $v) {
            $this->nitrateharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NITRATEHARM;
        }


        return $this;
    } // setNitrateharm()

    /**
     * Set the value of [nitrousacidopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNitrousacidopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitrousacidopt !== $v) {
            $this->nitrousacidopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NITROUSACIDOPT;
        }


        return $this;
    } // setNitrousacidopt()

    /**
     * Set the value of [nitrousacidharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNitrousacidharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitrousacidharm !== $v) {
            $this->nitrousacidharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NITROUSACIDHARM;
        }


        return $this;
    } // setNitrousacidharm()

    /**
     * Set the value of [chlorineopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setChlorineopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chlorineopt !== $v) {
            $this->chlorineopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CHLORINEOPT;
        }


        return $this;
    } // setChlorineopt()

    /**
     * Set the value of [chlorineharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setChlorineharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chlorineharm !== $v) {
            $this->chlorineharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CHLORINEHARM;
        }


        return $this;
    } // setChlorineharm()

    /**
     * Set the value of [chlorideopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setChlorideopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chlorideopt !== $v) {
            $this->chlorideopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CHLORIDEOPT;
        }


        return $this;
    } // setChlorideopt()

    /**
     * Set the value of [chlorideharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setChlorideharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chlorideharm !== $v) {
            $this->chlorideharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CHLORIDEHARM;
        }


        return $this;
    } // setChlorideharm()

    /**
     * Set the value of [hsulphateopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setHsulphateopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hsulphateopt !== $v) {
            $this->hsulphateopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::HSULPHATEOPT;
        }


        return $this;
    } // setHsulphateopt()

    /**
     * Set the value of [hsulphateharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setHsulphateharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hsulphateharm !== $v) {
            $this->hsulphateharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::HSULPHATEHARM;
        }


        return $this;
    } // setHsulphateharm()

    /**
     * Set the value of [zincopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setZincopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->zincopt !== $v) {
            $this->zincopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::ZINCOPT;
        }


        return $this;
    } // setZincopt()

    /**
     * Set the value of [zincharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setZincharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->zincharm !== $v) {
            $this->zincharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::ZINCHARM;
        }


        return $this;
    } // setZincharm()

    /**
     * Set the value of [copperopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCopperopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->copperopt !== $v) {
            $this->copperopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::COPPEROPT;
        }


        return $this;
    } // setCopperopt()

    /**
     * Set the value of [copperharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCopperharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->copperharm !== $v) {
            $this->copperharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::COPPERHARM;
        }


        return $this;
    } // setCopperharm()

    /**
     * Set the value of [ironopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setIronopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ironopt !== $v) {
            $this->ironopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::IRONOPT;
        }


        return $this;
    } // setIronopt()

    /**
     * Set the value of [ironharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setIronharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ironharm !== $v) {
            $this->ironharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::IRONHARM;
        }


        return $this;
    } // setIronharm()

    /**
     * Set the value of [leadopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setLeadopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->leadopt !== $v) {
            $this->leadopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::LEADOPT;
        }


        return $this;
    } // setLeadopt()

    /**
     * Set the value of [leadharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setLeadharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->leadharm !== $v) {
            $this->leadharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::LEADHARM;
        }


        return $this;
    } // setLeadharm()

    /**
     * Set the value of [mercuryopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setMercuryopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mercuryopt !== $v) {
            $this->mercuryopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::MERCURYOPT;
        }


        return $this;
    } // setMercuryopt()

    /**
     * Set the value of [mercuryharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setMercuryharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mercuryharm !== $v) {
            $this->mercuryharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::MERCURYHARM;
        }


        return $this;
    } // setMercuryharm()

    /**
     * Set the value of [cadmiumopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCadmiumopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cadmiumopt !== $v) {
            $this->cadmiumopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CADMIUMOPT;
        }


        return $this;
    } // setCadmiumopt()

    /**
     * Set the value of [cadmiumharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCadmiumharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cadmiumharm !== $v) {
            $this->cadmiumharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CADMIUMHARM;
        }


        return $this;
    } // setCadmiumharm()

    /**
     * Set the value of [nickelopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNickelopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nickelopt !== $v) {
            $this->nickelopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NICKELOPT;
        }


        return $this;
    } // setNickelopt()

    /**
     * Set the value of [nickelharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setNickelharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nickelharm !== $v) {
            $this->nickelharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::NICKELHARM;
        }


        return $this;
    } // setNickelharm()

    /**
     * Set the value of [chromiumopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setChromiumopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chromiumopt !== $v) {
            $this->chromiumopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CHROMIUMOPT;
        }


        return $this;
    } // setChromiumopt()

    /**
     * Set the value of [chromiumharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setChromiumharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chromiumharm !== $v) {
            $this->chromiumharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CHROMIUMHARM;
        }


        return $this;
    } // setChromiumharm()

    /**
     * Set the value of [manganeseopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setManganeseopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->manganeseopt !== $v) {
            $this->manganeseopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::MANGANESEOPT;
        }


        return $this;
    } // setManganeseopt()

    /**
     * Set the value of [manganeseharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setManganeseharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->manganeseharm !== $v) {
            $this->manganeseharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::MANGANESEHARM;
        }


        return $this;
    } // setManganeseharm()

    /**
     * Set the value of [arsenicopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setArsenicopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->arsenicopt !== $v) {
            $this->arsenicopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::ARSENICOPT;
        }


        return $this;
    } // setArsenicopt()

    /**
     * Set the value of [arsenicharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setArsenicharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->arsenicharm !== $v) {
            $this->arsenicharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::ARSENICHARM;
        }


        return $this;
    } // setArsenicharm()

    /**
     * Set the value of [aluminumopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setAluminumopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aluminumopt !== $v) {
            $this->aluminumopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::ALUMINUMOPT;
        }


        return $this;
    } // setAluminumopt()

    /**
     * Set the value of [aluminumharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setAluminumharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aluminumharm !== $v) {
            $this->aluminumharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::ALUMINUMHARM;
        }


        return $this;
    } // setAluminumharm()

    /**
     * Set the value of [cyanideopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCyanideopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cyanideopt !== $v) {
            $this->cyanideopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CYANIDEOPT;
        }


        return $this;
    } // setCyanideopt()

    /**
     * Set the value of [cyanideharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setCyanideharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cyanideharm !== $v) {
            $this->cyanideharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::CYANIDEHARM;
        }


        return $this;
    } // setCyanideharm()

    /**
     * Set the value of [pcbopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPcbopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pcbopt !== $v) {
            $this->pcbopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PCBOPT;
        }


        return $this;
    } // setPcbopt()

    /**
     * Set the value of [pcbharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPcbharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pcbharm !== $v) {
            $this->pcbharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PCBHARM;
        }


        return $this;
    } // setPcbharm()

    /**
     * Set the value of [pesticidesopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPesticidesopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pesticidesopt !== $v) {
            $this->pesticidesopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PESTICIDESOPT;
        }


        return $this;
    } // setPesticidesopt()

    /**
     * Set the value of [pesticidesharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPesticidesharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pesticidesharm !== $v) {
            $this->pesticidesharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PESTICIDESHARM;
        }


        return $this;
    } // setPesticidesharm()

    /**
     * Set the value of [turbidityopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setTurbidityopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->turbidityopt !== $v) {
            $this->turbidityopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::TURBIDITYOPT;
        }


        return $this;
    } // setTurbidityopt()

    /**
     * Set the value of [turbidityharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setTurbidityharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->turbidityharm !== $v) {
            $this->turbidityharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::TURBIDITYHARM;
        }


        return $this;
    } // setTurbidityharm()

    /**
     * Set the value of [oilsrefinedopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setOilsrefinedopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oilsrefinedopt !== $v) {
            $this->oilsrefinedopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::OILSREFINEDOPT;
        }


        return $this;
    } // setOilsrefinedopt()

    /**
     * Set the value of [oilsrefinedharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setOilsrefinedharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oilsrefinedharm !== $v) {
            $this->oilsrefinedharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::OILSREFINEDHARM;
        }


        return $this;
    } // setOilsrefinedharm()

    /**
     * Set the value of [dyesopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setDyesopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dyesopt !== $v) {
            $this->dyesopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::DYESOPT;
        }


        return $this;
    } // setDyesopt()

    /**
     * Set the value of [dyesharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setDyesharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dyesharm !== $v) {
            $this->dyesharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::DYESHARM;
        }


        return $this;
    } // setDyesharm()

    /**
     * Set the value of [phenolsopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPhenolsopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phenolsopt !== $v) {
            $this->phenolsopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PHENOLSOPT;
        }


        return $this;
    } // setPhenolsopt()

    /**
     * Set the value of [phenolsharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPhenolsharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phenolsharm !== $v) {
            $this->phenolsharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PHENOLSHARM;
        }


        return $this;
    } // setPhenolsharm()

    /**
     * Set the value of [surfactantsopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setSurfactantsopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surfactantsopt !== $v) {
            $this->surfactantsopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::SURFACTANTSOPT;
        }


        return $this;
    } // setSurfactantsopt()

    /**
     * Set the value of [surfactantsharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setSurfactantsharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surfactantsharm !== $v) {
            $this->surfactantsharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::SURFACTANTSHARM;
        }


        return $this;
    } // setSurfactantsharm()

    /**
     * Set the value of [phytoplanktonopt] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPhytoplanktonopt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phytoplanktonopt !== $v) {
            $this->phytoplanktonopt = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PHYTOPLANKTONOPT;
        }


        return $this;
    } // setPhytoplanktonopt()

    /**
     * Set the value of [phytoplanktonharm] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setPhytoplanktonharm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phytoplanktonharm !== $v) {
            $this->phytoplanktonharm = $v;
            $this->modifiedColumns[] = WaterqualityPeer::PHYTOPLANKTONHARM;
        }


        return $this;
    } // setPhytoplanktonharm()

    /**
     * Set the value of [remarko2] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarko2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarko2 !== $v) {
            $this->remarko2 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKO2;
        }


        return $this;
    } // setRemarko2()

    /**
     * Set the value of [remarko3] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarko3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarko3 !== $v) {
            $this->remarko3 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKO3;
        }


        return $this;
    } // setRemarko3()

    /**
     * Set the value of [remarkco2] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkco2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkco2 !== $v) {
            $this->remarkco2 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCO2;
        }


        return $this;
    } // setRemarkco2()

    /**
     * Set the value of [remarkph] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkph($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkph !== $v) {
            $this->remarkph = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKPH;
        }


        return $this;
    } // setRemarkph()

    /**
     * Set the value of [remarknh3] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarknh3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarknh3 !== $v) {
            $this->remarknh3 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKNH3;
        }


        return $this;
    } // setRemarknh3()

    /**
     * Set the value of [remarkno2] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkno2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkno2 !== $v) {
            $this->remarkno2 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKNO2;
        }


        return $this;
    } // setRemarkno2()

    /**
     * Set the value of [remarkno3] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkno3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkno3 !== $v) {
            $this->remarkno3 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKNO3;
        }


        return $this;
    } // setRemarkno3()

    /**
     * Set the value of [remarkhno2] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkhno2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkhno2 !== $v) {
            $this->remarkhno2 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKHNO2;
        }


        return $this;
    } // setRemarkhno2()

    /**
     * Set the value of [remarkcl2] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkcl2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkcl2 !== $v) {
            $this->remarkcl2 = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCL2;
        }


        return $this;
    } // setRemarkcl2()

    /**
     * Set the value of [remarkcl] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkcl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkcl !== $v) {
            $this->remarkcl = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCL;
        }


        return $this;
    } // setRemarkcl()

    /**
     * Set the value of [remarkh2s] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkh2s($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkh2s !== $v) {
            $this->remarkh2s = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKH2S;
        }


        return $this;
    } // setRemarkh2s()

    /**
     * Set the value of [remarkzinc] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkzinc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkzinc !== $v) {
            $this->remarkzinc = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKZINC;
        }


        return $this;
    } // setRemarkzinc()

    /**
     * Set the value of [remarkcopper] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkcopper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkcopper !== $v) {
            $this->remarkcopper = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCOPPER;
        }


        return $this;
    } // setRemarkcopper()

    /**
     * Set the value of [remarkiron] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkiron($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkiron !== $v) {
            $this->remarkiron = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKIRON;
        }


        return $this;
    } // setRemarkiron()

    /**
     * Set the value of [remarklead] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarklead($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarklead !== $v) {
            $this->remarklead = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKLEAD;
        }


        return $this;
    } // setRemarklead()

    /**
     * Set the value of [remarkmercury] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkmercury($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkmercury !== $v) {
            $this->remarkmercury = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKMERCURY;
        }


        return $this;
    } // setRemarkmercury()

    /**
     * Set the value of [remarkcadmium] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkcadmium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkcadmium !== $v) {
            $this->remarkcadmium = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCADMIUM;
        }


        return $this;
    } // setRemarkcadmium()

    /**
     * Set the value of [remarknickel] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarknickel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarknickel !== $v) {
            $this->remarknickel = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKNICKEL;
        }


        return $this;
    } // setRemarknickel()

    /**
     * Set the value of [remarkchromium] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkchromium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkchromium !== $v) {
            $this->remarkchromium = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCHROMIUM;
        }


        return $this;
    } // setRemarkchromium()

    /**
     * Set the value of [remarkmanganese] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkmanganese($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkmanganese !== $v) {
            $this->remarkmanganese = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKMANGANESE;
        }


        return $this;
    } // setRemarkmanganese()

    /**
     * Set the value of [remarkarsenic] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkarsenic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkarsenic !== $v) {
            $this->remarkarsenic = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKARSENIC;
        }


        return $this;
    } // setRemarkarsenic()

    /**
     * Set the value of [remarkaluminum] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkaluminum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkaluminum !== $v) {
            $this->remarkaluminum = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKALUMINUM;
        }


        return $this;
    } // setRemarkaluminum()

    /**
     * Set the value of [remarkcyanide] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkcyanide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkcyanide !== $v) {
            $this->remarkcyanide = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKCYANIDE;
        }


        return $this;
    } // setRemarkcyanide()

    /**
     * Set the value of [remarkpcb] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkpcb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkpcb !== $v) {
            $this->remarkpcb = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKPCB;
        }


        return $this;
    } // setRemarkpcb()

    /**
     * Set the value of [remarkpesticide] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkpesticide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkpesticide !== $v) {
            $this->remarkpesticide = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKPESTICIDE;
        }


        return $this;
    } // setRemarkpesticide()

    /**
     * Set the value of [remarkturbidity] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkturbidity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkturbidity !== $v) {
            $this->remarkturbidity = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKTURBIDITY;
        }


        return $this;
    } // setRemarkturbidity()

    /**
     * Set the value of [remarkoilsrefined] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkoilsrefined($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkoilsrefined !== $v) {
            $this->remarkoilsrefined = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKOILSREFINED;
        }


        return $this;
    } // setRemarkoilsrefined()

    /**
     * Set the value of [remarkdyes] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkdyes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkdyes !== $v) {
            $this->remarkdyes = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKDYES;
        }


        return $this;
    } // setRemarkdyes()

    /**
     * Set the value of [remarkphenols] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkphenols($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkphenols !== $v) {
            $this->remarkphenols = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKPHENOLS;
        }


        return $this;
    } // setRemarkphenols()

    /**
     * Set the value of [remarksurfactants] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarksurfactants($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarksurfactants !== $v) {
            $this->remarksurfactants = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKSURFACTANTS;
        }


        return $this;
    } // setRemarksurfactants()

    /**
     * Set the value of [remarkphytoplankton] column.
     *
     * @param  string $v new value
     * @return Waterquality The current object (for fluent API support)
     */
    public function setRemarkphytoplankton($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remarkphytoplankton !== $v) {
            $this->remarkphytoplankton = $v;
            $this->modifiedColumns[] = WaterqualityPeer::REMARKPHYTOPLANKTON;
        }


        return $this;
    } // setRemarkphytoplankton()

    /**
     * Sets the value of [ts] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Waterquality The current object (for fluent API support)
     */
    public function setTs($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ts !== null || $dt !== null) {
            $currentDateAsString = ($this->ts !== null && $tmpDt = new DateTime($this->ts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ts = $newDateAsString;
                $this->modifiedColumns[] = WaterqualityPeer::TS;
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
            $this->dissolvedo2opt = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->dissolvedo2harm = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ozoneopt = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ozoneharm = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->carbondioxideopt = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->carbondioxideharm = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->phopt = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->phharm = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->ammoniaopt = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ammoniaharm = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nitriteopt = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->nitriteharm = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->nitrateopt = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->nitrateharm = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->nitrousacidopt = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->nitrousacidharm = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->chlorineopt = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->chlorineharm = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->chlorideopt = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->chlorideharm = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->hsulphateopt = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->hsulphateharm = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->zincopt = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->zincharm = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->copperopt = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->copperharm = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->ironopt = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->ironharm = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->leadopt = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->leadharm = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->mercuryopt = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->mercuryharm = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->cadmiumopt = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->cadmiumharm = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->nickelopt = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->nickelharm = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->chromiumopt = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->chromiumharm = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->manganeseopt = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->manganeseharm = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->arsenicopt = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->arsenicharm = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->aluminumopt = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->aluminumharm = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->cyanideopt = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->cyanideharm = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->pcbopt = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->pcbharm = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->pesticidesopt = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->pesticidesharm = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->turbidityopt = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->turbidityharm = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->oilsrefinedopt = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->oilsrefinedharm = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->dyesopt = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->dyesharm = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->phenolsopt = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->phenolsharm = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->surfactantsopt = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->surfactantsharm = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->phytoplanktonopt = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->phytoplanktonharm = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->remarko2 = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->remarko3 = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->remarkco2 = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->remarkph = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->remarknh3 = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->remarkno2 = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->remarkno3 = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->remarkhno2 = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->remarkcl2 = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->remarkcl = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->remarkh2s = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->remarkzinc = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->remarkcopper = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->remarkiron = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->remarklead = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->remarkmercury = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->remarkcadmium = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->remarknickel = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->remarkchromium = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->remarkmanganese = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->remarkarsenic = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->remarkaluminum = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->remarkcyanide = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->remarkpcb = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->remarkpesticide = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->remarkturbidity = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->remarkoilsrefined = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->remarkdyes = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->remarkphenols = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->remarksurfactants = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->remarkphytoplankton = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->ts = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 96; // 96 = WaterqualityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Waterquality object", $e);
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
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WaterqualityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WaterqualityQuery::create()
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
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                WaterqualityPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(WaterqualityPeer::AUTOCTR)) {
            $modifiedColumns[':p' . $index++]  = '`autoctr`';
        }
        if ($this->isColumnModified(WaterqualityPeer::SPECCODE)) {
            $modifiedColumns[':p' . $index++]  = '`Speccode`';
        }
        if ($this->isColumnModified(WaterqualityPeer::DISSOLVEDO2OPT)) {
            $modifiedColumns[':p' . $index++]  = '`DissolvedO2Opt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::DISSOLVEDO2HARM)) {
            $modifiedColumns[':p' . $index++]  = '`DissolvedO2Harm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::OZONEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`OzoneOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::OZONEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`OzoneHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CARBONDIOXIDEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`CarbonDioxideOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CARBONDIOXIDEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`CarbonDioxideHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PHOPT)) {
            $modifiedColumns[':p' . $index++]  = '`pHOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PHHARM)) {
            $modifiedColumns[':p' . $index++]  = '`pHHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::AMMONIAOPT)) {
            $modifiedColumns[':p' . $index++]  = '`AmmoniaOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::AMMONIAHARM)) {
            $modifiedColumns[':p' . $index++]  = '`AmmoniaHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NITRITEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`NitriteOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NITRITEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`NitriteHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NITRATEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`NitrateOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NITRATEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`NitrateHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NITROUSACIDOPT)) {
            $modifiedColumns[':p' . $index++]  = '`NitrousAcidOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NITROUSACIDHARM)) {
            $modifiedColumns[':p' . $index++]  = '`NitrousAcidHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CHLORINEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`ChlorineOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CHLORINEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`ChlorineHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CHLORIDEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`ChlorideOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CHLORIDEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`ChlorideHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::HSULPHATEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`HSulphateOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::HSULPHATEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`HSulphateHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::ZINCOPT)) {
            $modifiedColumns[':p' . $index++]  = '`ZincOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::ZINCHARM)) {
            $modifiedColumns[':p' . $index++]  = '`ZincHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::COPPEROPT)) {
            $modifiedColumns[':p' . $index++]  = '`CopperOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::COPPERHARM)) {
            $modifiedColumns[':p' . $index++]  = '`CopperHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::IRONOPT)) {
            $modifiedColumns[':p' . $index++]  = '`IronOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::IRONHARM)) {
            $modifiedColumns[':p' . $index++]  = '`IronHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::LEADOPT)) {
            $modifiedColumns[':p' . $index++]  = '`LeadOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::LEADHARM)) {
            $modifiedColumns[':p' . $index++]  = '`LeadHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::MERCURYOPT)) {
            $modifiedColumns[':p' . $index++]  = '`MercuryOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::MERCURYHARM)) {
            $modifiedColumns[':p' . $index++]  = '`MercuryHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CADMIUMOPT)) {
            $modifiedColumns[':p' . $index++]  = '`CadmiumOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CADMIUMHARM)) {
            $modifiedColumns[':p' . $index++]  = '`CadmiumHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NICKELOPT)) {
            $modifiedColumns[':p' . $index++]  = '`NickelOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::NICKELHARM)) {
            $modifiedColumns[':p' . $index++]  = '`NickelHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CHROMIUMOPT)) {
            $modifiedColumns[':p' . $index++]  = '`ChromiumOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CHROMIUMHARM)) {
            $modifiedColumns[':p' . $index++]  = '`ChromiumHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::MANGANESEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`ManganeseOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::MANGANESEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`ManganeseHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::ARSENICOPT)) {
            $modifiedColumns[':p' . $index++]  = '`ArsenicOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::ARSENICHARM)) {
            $modifiedColumns[':p' . $index++]  = '`ArsenicHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::ALUMINUMOPT)) {
            $modifiedColumns[':p' . $index++]  = '`AluminumOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::ALUMINUMHARM)) {
            $modifiedColumns[':p' . $index++]  = '`AluminumHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CYANIDEOPT)) {
            $modifiedColumns[':p' . $index++]  = '`CyanideOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::CYANIDEHARM)) {
            $modifiedColumns[':p' . $index++]  = '`CyanideHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PCBOPT)) {
            $modifiedColumns[':p' . $index++]  = '`PCBOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PCBHARM)) {
            $modifiedColumns[':p' . $index++]  = '`PCBHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PESTICIDESOPT)) {
            $modifiedColumns[':p' . $index++]  = '`PesticidesOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PESTICIDESHARM)) {
            $modifiedColumns[':p' . $index++]  = '`PesticidesHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::TURBIDITYOPT)) {
            $modifiedColumns[':p' . $index++]  = '`TurbidityOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::TURBIDITYHARM)) {
            $modifiedColumns[':p' . $index++]  = '`TurbidityHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::OILSREFINEDOPT)) {
            $modifiedColumns[':p' . $index++]  = '`OilsRefinedOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::OILSREFINEDHARM)) {
            $modifiedColumns[':p' . $index++]  = '`OilsRefinedHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::DYESOPT)) {
            $modifiedColumns[':p' . $index++]  = '`DyesOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::DYESHARM)) {
            $modifiedColumns[':p' . $index++]  = '`DyesHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PHENOLSOPT)) {
            $modifiedColumns[':p' . $index++]  = '`PhenolsOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PHENOLSHARM)) {
            $modifiedColumns[':p' . $index++]  = '`PhenolsHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::SURFACTANTSOPT)) {
            $modifiedColumns[':p' . $index++]  = '`SurfactantsOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::SURFACTANTSHARM)) {
            $modifiedColumns[':p' . $index++]  = '`SurfactantsHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PHYTOPLANKTONOPT)) {
            $modifiedColumns[':p' . $index++]  = '`PhytoplanktonOpt`';
        }
        if ($this->isColumnModified(WaterqualityPeer::PHYTOPLANKTONHARM)) {
            $modifiedColumns[':p' . $index++]  = '`PhytoplanktonHarm`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKO2)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkO2`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKO3)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkO3`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCO2)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkCO2`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKPH)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkpH`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKNH3)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkNH3`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKNO2)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkNO2`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKNO3)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkNO3`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKHNO2)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkHNO2`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCL2)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkCL2`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCL)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkCL`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKH2S)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkH2S`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKZINC)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkZinc`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCOPPER)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkCopper`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKIRON)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkIron`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKLEAD)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkLead`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKMERCURY)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkMercury`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCADMIUM)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkCadmium`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKNICKEL)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkNickel`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCHROMIUM)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkChromium`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKMANGANESE)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkManganese`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKARSENIC)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkArsenic`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKALUMINUM)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkAluminum`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKCYANIDE)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkCyanide`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKPCB)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkPCB`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKPESTICIDE)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkPesticide`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKTURBIDITY)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkTurbidity`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKOILSREFINED)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkOilsRefined`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKDYES)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkDyes`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKPHENOLS)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkPhenols`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKSURFACTANTS)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkSurfactants`';
        }
        if ($this->isColumnModified(WaterqualityPeer::REMARKPHYTOPLANKTON)) {
            $modifiedColumns[':p' . $index++]  = '`RemarkPhytoplankton`';
        }
        if ($this->isColumnModified(WaterqualityPeer::TS)) {
            $modifiedColumns[':p' . $index++]  = '`TS`';
        }

        $sql = sprintf(
            'INSERT INTO `waterquality` (%s) VALUES (%s)',
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
                    case '`DissolvedO2Opt`':
                        $stmt->bindValue($identifier, $this->dissolvedo2opt, PDO::PARAM_STR);
                        break;
                    case '`DissolvedO2Harm`':
                        $stmt->bindValue($identifier, $this->dissolvedo2harm, PDO::PARAM_STR);
                        break;
                    case '`OzoneOpt`':
                        $stmt->bindValue($identifier, $this->ozoneopt, PDO::PARAM_STR);
                        break;
                    case '`OzoneHarm`':
                        $stmt->bindValue($identifier, $this->ozoneharm, PDO::PARAM_STR);
                        break;
                    case '`CarbonDioxideOpt`':
                        $stmt->bindValue($identifier, $this->carbondioxideopt, PDO::PARAM_STR);
                        break;
                    case '`CarbonDioxideHarm`':
                        $stmt->bindValue($identifier, $this->carbondioxideharm, PDO::PARAM_STR);
                        break;
                    case '`pHOpt`':
                        $stmt->bindValue($identifier, $this->phopt, PDO::PARAM_STR);
                        break;
                    case '`pHHarm`':
                        $stmt->bindValue($identifier, $this->phharm, PDO::PARAM_STR);
                        break;
                    case '`AmmoniaOpt`':
                        $stmt->bindValue($identifier, $this->ammoniaopt, PDO::PARAM_STR);
                        break;
                    case '`AmmoniaHarm`':
                        $stmt->bindValue($identifier, $this->ammoniaharm, PDO::PARAM_STR);
                        break;
                    case '`NitriteOpt`':
                        $stmt->bindValue($identifier, $this->nitriteopt, PDO::PARAM_STR);
                        break;
                    case '`NitriteHarm`':
                        $stmt->bindValue($identifier, $this->nitriteharm, PDO::PARAM_STR);
                        break;
                    case '`NitrateOpt`':
                        $stmt->bindValue($identifier, $this->nitrateopt, PDO::PARAM_STR);
                        break;
                    case '`NitrateHarm`':
                        $stmt->bindValue($identifier, $this->nitrateharm, PDO::PARAM_STR);
                        break;
                    case '`NitrousAcidOpt`':
                        $stmt->bindValue($identifier, $this->nitrousacidopt, PDO::PARAM_STR);
                        break;
                    case '`NitrousAcidHarm`':
                        $stmt->bindValue($identifier, $this->nitrousacidharm, PDO::PARAM_STR);
                        break;
                    case '`ChlorineOpt`':
                        $stmt->bindValue($identifier, $this->chlorineopt, PDO::PARAM_STR);
                        break;
                    case '`ChlorineHarm`':
                        $stmt->bindValue($identifier, $this->chlorineharm, PDO::PARAM_STR);
                        break;
                    case '`ChlorideOpt`':
                        $stmt->bindValue($identifier, $this->chlorideopt, PDO::PARAM_STR);
                        break;
                    case '`ChlorideHarm`':
                        $stmt->bindValue($identifier, $this->chlorideharm, PDO::PARAM_STR);
                        break;
                    case '`HSulphateOpt`':
                        $stmt->bindValue($identifier, $this->hsulphateopt, PDO::PARAM_STR);
                        break;
                    case '`HSulphateHarm`':
                        $stmt->bindValue($identifier, $this->hsulphateharm, PDO::PARAM_STR);
                        break;
                    case '`ZincOpt`':
                        $stmt->bindValue($identifier, $this->zincopt, PDO::PARAM_STR);
                        break;
                    case '`ZincHarm`':
                        $stmt->bindValue($identifier, $this->zincharm, PDO::PARAM_STR);
                        break;
                    case '`CopperOpt`':
                        $stmt->bindValue($identifier, $this->copperopt, PDO::PARAM_STR);
                        break;
                    case '`CopperHarm`':
                        $stmt->bindValue($identifier, $this->copperharm, PDO::PARAM_STR);
                        break;
                    case '`IronOpt`':
                        $stmt->bindValue($identifier, $this->ironopt, PDO::PARAM_STR);
                        break;
                    case '`IronHarm`':
                        $stmt->bindValue($identifier, $this->ironharm, PDO::PARAM_STR);
                        break;
                    case '`LeadOpt`':
                        $stmt->bindValue($identifier, $this->leadopt, PDO::PARAM_STR);
                        break;
                    case '`LeadHarm`':
                        $stmt->bindValue($identifier, $this->leadharm, PDO::PARAM_STR);
                        break;
                    case '`MercuryOpt`':
                        $stmt->bindValue($identifier, $this->mercuryopt, PDO::PARAM_STR);
                        break;
                    case '`MercuryHarm`':
                        $stmt->bindValue($identifier, $this->mercuryharm, PDO::PARAM_STR);
                        break;
                    case '`CadmiumOpt`':
                        $stmt->bindValue($identifier, $this->cadmiumopt, PDO::PARAM_STR);
                        break;
                    case '`CadmiumHarm`':
                        $stmt->bindValue($identifier, $this->cadmiumharm, PDO::PARAM_STR);
                        break;
                    case '`NickelOpt`':
                        $stmt->bindValue($identifier, $this->nickelopt, PDO::PARAM_STR);
                        break;
                    case '`NickelHarm`':
                        $stmt->bindValue($identifier, $this->nickelharm, PDO::PARAM_STR);
                        break;
                    case '`ChromiumOpt`':
                        $stmt->bindValue($identifier, $this->chromiumopt, PDO::PARAM_STR);
                        break;
                    case '`ChromiumHarm`':
                        $stmt->bindValue($identifier, $this->chromiumharm, PDO::PARAM_STR);
                        break;
                    case '`ManganeseOpt`':
                        $stmt->bindValue($identifier, $this->manganeseopt, PDO::PARAM_STR);
                        break;
                    case '`ManganeseHarm`':
                        $stmt->bindValue($identifier, $this->manganeseharm, PDO::PARAM_STR);
                        break;
                    case '`ArsenicOpt`':
                        $stmt->bindValue($identifier, $this->arsenicopt, PDO::PARAM_STR);
                        break;
                    case '`ArsenicHarm`':
                        $stmt->bindValue($identifier, $this->arsenicharm, PDO::PARAM_STR);
                        break;
                    case '`AluminumOpt`':
                        $stmt->bindValue($identifier, $this->aluminumopt, PDO::PARAM_STR);
                        break;
                    case '`AluminumHarm`':
                        $stmt->bindValue($identifier, $this->aluminumharm, PDO::PARAM_STR);
                        break;
                    case '`CyanideOpt`':
                        $stmt->bindValue($identifier, $this->cyanideopt, PDO::PARAM_STR);
                        break;
                    case '`CyanideHarm`':
                        $stmt->bindValue($identifier, $this->cyanideharm, PDO::PARAM_STR);
                        break;
                    case '`PCBOpt`':
                        $stmt->bindValue($identifier, $this->pcbopt, PDO::PARAM_STR);
                        break;
                    case '`PCBHarm`':
                        $stmt->bindValue($identifier, $this->pcbharm, PDO::PARAM_STR);
                        break;
                    case '`PesticidesOpt`':
                        $stmt->bindValue($identifier, $this->pesticidesopt, PDO::PARAM_STR);
                        break;
                    case '`PesticidesHarm`':
                        $stmt->bindValue($identifier, $this->pesticidesharm, PDO::PARAM_STR);
                        break;
                    case '`TurbidityOpt`':
                        $stmt->bindValue($identifier, $this->turbidityopt, PDO::PARAM_STR);
                        break;
                    case '`TurbidityHarm`':
                        $stmt->bindValue($identifier, $this->turbidityharm, PDO::PARAM_STR);
                        break;
                    case '`OilsRefinedOpt`':
                        $stmt->bindValue($identifier, $this->oilsrefinedopt, PDO::PARAM_STR);
                        break;
                    case '`OilsRefinedHarm`':
                        $stmt->bindValue($identifier, $this->oilsrefinedharm, PDO::PARAM_STR);
                        break;
                    case '`DyesOpt`':
                        $stmt->bindValue($identifier, $this->dyesopt, PDO::PARAM_STR);
                        break;
                    case '`DyesHarm`':
                        $stmt->bindValue($identifier, $this->dyesharm, PDO::PARAM_STR);
                        break;
                    case '`PhenolsOpt`':
                        $stmt->bindValue($identifier, $this->phenolsopt, PDO::PARAM_STR);
                        break;
                    case '`PhenolsHarm`':
                        $stmt->bindValue($identifier, $this->phenolsharm, PDO::PARAM_STR);
                        break;
                    case '`SurfactantsOpt`':
                        $stmt->bindValue($identifier, $this->surfactantsopt, PDO::PARAM_STR);
                        break;
                    case '`SurfactantsHarm`':
                        $stmt->bindValue($identifier, $this->surfactantsharm, PDO::PARAM_STR);
                        break;
                    case '`PhytoplanktonOpt`':
                        $stmt->bindValue($identifier, $this->phytoplanktonopt, PDO::PARAM_STR);
                        break;
                    case '`PhytoplanktonHarm`':
                        $stmt->bindValue($identifier, $this->phytoplanktonharm, PDO::PARAM_STR);
                        break;
                    case '`RemarkO2`':
                        $stmt->bindValue($identifier, $this->remarko2, PDO::PARAM_STR);
                        break;
                    case '`RemarkO3`':
                        $stmt->bindValue($identifier, $this->remarko3, PDO::PARAM_STR);
                        break;
                    case '`RemarkCO2`':
                        $stmt->bindValue($identifier, $this->remarkco2, PDO::PARAM_STR);
                        break;
                    case '`RemarkpH`':
                        $stmt->bindValue($identifier, $this->remarkph, PDO::PARAM_STR);
                        break;
                    case '`RemarkNH3`':
                        $stmt->bindValue($identifier, $this->remarknh3, PDO::PARAM_STR);
                        break;
                    case '`RemarkNO2`':
                        $stmt->bindValue($identifier, $this->remarkno2, PDO::PARAM_STR);
                        break;
                    case '`RemarkNO3`':
                        $stmt->bindValue($identifier, $this->remarkno3, PDO::PARAM_STR);
                        break;
                    case '`RemarkHNO2`':
                        $stmt->bindValue($identifier, $this->remarkhno2, PDO::PARAM_STR);
                        break;
                    case '`RemarkCL2`':
                        $stmt->bindValue($identifier, $this->remarkcl2, PDO::PARAM_STR);
                        break;
                    case '`RemarkCL`':
                        $stmt->bindValue($identifier, $this->remarkcl, PDO::PARAM_STR);
                        break;
                    case '`RemarkH2S`':
                        $stmt->bindValue($identifier, $this->remarkh2s, PDO::PARAM_STR);
                        break;
                    case '`RemarkZinc`':
                        $stmt->bindValue($identifier, $this->remarkzinc, PDO::PARAM_STR);
                        break;
                    case '`RemarkCopper`':
                        $stmt->bindValue($identifier, $this->remarkcopper, PDO::PARAM_STR);
                        break;
                    case '`RemarkIron`':
                        $stmt->bindValue($identifier, $this->remarkiron, PDO::PARAM_STR);
                        break;
                    case '`RemarkLead`':
                        $stmt->bindValue($identifier, $this->remarklead, PDO::PARAM_STR);
                        break;
                    case '`RemarkMercury`':
                        $stmt->bindValue($identifier, $this->remarkmercury, PDO::PARAM_STR);
                        break;
                    case '`RemarkCadmium`':
                        $stmt->bindValue($identifier, $this->remarkcadmium, PDO::PARAM_STR);
                        break;
                    case '`RemarkNickel`':
                        $stmt->bindValue($identifier, $this->remarknickel, PDO::PARAM_STR);
                        break;
                    case '`RemarkChromium`':
                        $stmt->bindValue($identifier, $this->remarkchromium, PDO::PARAM_STR);
                        break;
                    case '`RemarkManganese`':
                        $stmt->bindValue($identifier, $this->remarkmanganese, PDO::PARAM_STR);
                        break;
                    case '`RemarkArsenic`':
                        $stmt->bindValue($identifier, $this->remarkarsenic, PDO::PARAM_STR);
                        break;
                    case '`RemarkAluminum`':
                        $stmt->bindValue($identifier, $this->remarkaluminum, PDO::PARAM_STR);
                        break;
                    case '`RemarkCyanide`':
                        $stmt->bindValue($identifier, $this->remarkcyanide, PDO::PARAM_STR);
                        break;
                    case '`RemarkPCB`':
                        $stmt->bindValue($identifier, $this->remarkpcb, PDO::PARAM_STR);
                        break;
                    case '`RemarkPesticide`':
                        $stmt->bindValue($identifier, $this->remarkpesticide, PDO::PARAM_STR);
                        break;
                    case '`RemarkTurbidity`':
                        $stmt->bindValue($identifier, $this->remarkturbidity, PDO::PARAM_STR);
                        break;
                    case '`RemarkOilsRefined`':
                        $stmt->bindValue($identifier, $this->remarkoilsrefined, PDO::PARAM_STR);
                        break;
                    case '`RemarkDyes`':
                        $stmt->bindValue($identifier, $this->remarkdyes, PDO::PARAM_STR);
                        break;
                    case '`RemarkPhenols`':
                        $stmt->bindValue($identifier, $this->remarkphenols, PDO::PARAM_STR);
                        break;
                    case '`RemarkSurfactants`':
                        $stmt->bindValue($identifier, $this->remarksurfactants, PDO::PARAM_STR);
                        break;
                    case '`RemarkPhytoplankton`':
                        $stmt->bindValue($identifier, $this->remarkphytoplankton, PDO::PARAM_STR);
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
        $this->setSpeccode($pk);

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


            if (($retval = WaterqualityPeer::doValidate($this, $columns)) !== true) {
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
        $pos = WaterqualityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDissolvedo2opt();
                break;
            case 3:
                return $this->getDissolvedo2harm();
                break;
            case 4:
                return $this->getOzoneopt();
                break;
            case 5:
                return $this->getOzoneharm();
                break;
            case 6:
                return $this->getCarbondioxideopt();
                break;
            case 7:
                return $this->getCarbondioxideharm();
                break;
            case 8:
                return $this->getPhopt();
                break;
            case 9:
                return $this->getPhharm();
                break;
            case 10:
                return $this->getAmmoniaopt();
                break;
            case 11:
                return $this->getAmmoniaharm();
                break;
            case 12:
                return $this->getNitriteopt();
                break;
            case 13:
                return $this->getNitriteharm();
                break;
            case 14:
                return $this->getNitrateopt();
                break;
            case 15:
                return $this->getNitrateharm();
                break;
            case 16:
                return $this->getNitrousacidopt();
                break;
            case 17:
                return $this->getNitrousacidharm();
                break;
            case 18:
                return $this->getChlorineopt();
                break;
            case 19:
                return $this->getChlorineharm();
                break;
            case 20:
                return $this->getChlorideopt();
                break;
            case 21:
                return $this->getChlorideharm();
                break;
            case 22:
                return $this->getHsulphateopt();
                break;
            case 23:
                return $this->getHsulphateharm();
                break;
            case 24:
                return $this->getZincopt();
                break;
            case 25:
                return $this->getZincharm();
                break;
            case 26:
                return $this->getCopperopt();
                break;
            case 27:
                return $this->getCopperharm();
                break;
            case 28:
                return $this->getIronopt();
                break;
            case 29:
                return $this->getIronharm();
                break;
            case 30:
                return $this->getLeadopt();
                break;
            case 31:
                return $this->getLeadharm();
                break;
            case 32:
                return $this->getMercuryopt();
                break;
            case 33:
                return $this->getMercuryharm();
                break;
            case 34:
                return $this->getCadmiumopt();
                break;
            case 35:
                return $this->getCadmiumharm();
                break;
            case 36:
                return $this->getNickelopt();
                break;
            case 37:
                return $this->getNickelharm();
                break;
            case 38:
                return $this->getChromiumopt();
                break;
            case 39:
                return $this->getChromiumharm();
                break;
            case 40:
                return $this->getManganeseopt();
                break;
            case 41:
                return $this->getManganeseharm();
                break;
            case 42:
                return $this->getArsenicopt();
                break;
            case 43:
                return $this->getArsenicharm();
                break;
            case 44:
                return $this->getAluminumopt();
                break;
            case 45:
                return $this->getAluminumharm();
                break;
            case 46:
                return $this->getCyanideopt();
                break;
            case 47:
                return $this->getCyanideharm();
                break;
            case 48:
                return $this->getPcbopt();
                break;
            case 49:
                return $this->getPcbharm();
                break;
            case 50:
                return $this->getPesticidesopt();
                break;
            case 51:
                return $this->getPesticidesharm();
                break;
            case 52:
                return $this->getTurbidityopt();
                break;
            case 53:
                return $this->getTurbidityharm();
                break;
            case 54:
                return $this->getOilsrefinedopt();
                break;
            case 55:
                return $this->getOilsrefinedharm();
                break;
            case 56:
                return $this->getDyesopt();
                break;
            case 57:
                return $this->getDyesharm();
                break;
            case 58:
                return $this->getPhenolsopt();
                break;
            case 59:
                return $this->getPhenolsharm();
                break;
            case 60:
                return $this->getSurfactantsopt();
                break;
            case 61:
                return $this->getSurfactantsharm();
                break;
            case 62:
                return $this->getPhytoplanktonopt();
                break;
            case 63:
                return $this->getPhytoplanktonharm();
                break;
            case 64:
                return $this->getRemarko2();
                break;
            case 65:
                return $this->getRemarko3();
                break;
            case 66:
                return $this->getRemarkco2();
                break;
            case 67:
                return $this->getRemarkph();
                break;
            case 68:
                return $this->getRemarknh3();
                break;
            case 69:
                return $this->getRemarkno2();
                break;
            case 70:
                return $this->getRemarkno3();
                break;
            case 71:
                return $this->getRemarkhno2();
                break;
            case 72:
                return $this->getRemarkcl2();
                break;
            case 73:
                return $this->getRemarkcl();
                break;
            case 74:
                return $this->getRemarkh2s();
                break;
            case 75:
                return $this->getRemarkzinc();
                break;
            case 76:
                return $this->getRemarkcopper();
                break;
            case 77:
                return $this->getRemarkiron();
                break;
            case 78:
                return $this->getRemarklead();
                break;
            case 79:
                return $this->getRemarkmercury();
                break;
            case 80:
                return $this->getRemarkcadmium();
                break;
            case 81:
                return $this->getRemarknickel();
                break;
            case 82:
                return $this->getRemarkchromium();
                break;
            case 83:
                return $this->getRemarkmanganese();
                break;
            case 84:
                return $this->getRemarkarsenic();
                break;
            case 85:
                return $this->getRemarkaluminum();
                break;
            case 86:
                return $this->getRemarkcyanide();
                break;
            case 87:
                return $this->getRemarkpcb();
                break;
            case 88:
                return $this->getRemarkpesticide();
                break;
            case 89:
                return $this->getRemarkturbidity();
                break;
            case 90:
                return $this->getRemarkoilsrefined();
                break;
            case 91:
                return $this->getRemarkdyes();
                break;
            case 92:
                return $this->getRemarkphenols();
                break;
            case 93:
                return $this->getRemarksurfactants();
                break;
            case 94:
                return $this->getRemarkphytoplankton();
                break;
            case 95:
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
        if (isset($alreadyDumpedObjects['Waterquality'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Waterquality'][$this->getPrimaryKey()] = true;
        $keys = WaterqualityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAutoctr(),
            $keys[1] => $this->getSpeccode(),
            $keys[2] => $this->getDissolvedo2opt(),
            $keys[3] => $this->getDissolvedo2harm(),
            $keys[4] => $this->getOzoneopt(),
            $keys[5] => $this->getOzoneharm(),
            $keys[6] => $this->getCarbondioxideopt(),
            $keys[7] => $this->getCarbondioxideharm(),
            $keys[8] => $this->getPhopt(),
            $keys[9] => $this->getPhharm(),
            $keys[10] => $this->getAmmoniaopt(),
            $keys[11] => $this->getAmmoniaharm(),
            $keys[12] => $this->getNitriteopt(),
            $keys[13] => $this->getNitriteharm(),
            $keys[14] => $this->getNitrateopt(),
            $keys[15] => $this->getNitrateharm(),
            $keys[16] => $this->getNitrousacidopt(),
            $keys[17] => $this->getNitrousacidharm(),
            $keys[18] => $this->getChlorineopt(),
            $keys[19] => $this->getChlorineharm(),
            $keys[20] => $this->getChlorideopt(),
            $keys[21] => $this->getChlorideharm(),
            $keys[22] => $this->getHsulphateopt(),
            $keys[23] => $this->getHsulphateharm(),
            $keys[24] => $this->getZincopt(),
            $keys[25] => $this->getZincharm(),
            $keys[26] => $this->getCopperopt(),
            $keys[27] => $this->getCopperharm(),
            $keys[28] => $this->getIronopt(),
            $keys[29] => $this->getIronharm(),
            $keys[30] => $this->getLeadopt(),
            $keys[31] => $this->getLeadharm(),
            $keys[32] => $this->getMercuryopt(),
            $keys[33] => $this->getMercuryharm(),
            $keys[34] => $this->getCadmiumopt(),
            $keys[35] => $this->getCadmiumharm(),
            $keys[36] => $this->getNickelopt(),
            $keys[37] => $this->getNickelharm(),
            $keys[38] => $this->getChromiumopt(),
            $keys[39] => $this->getChromiumharm(),
            $keys[40] => $this->getManganeseopt(),
            $keys[41] => $this->getManganeseharm(),
            $keys[42] => $this->getArsenicopt(),
            $keys[43] => $this->getArsenicharm(),
            $keys[44] => $this->getAluminumopt(),
            $keys[45] => $this->getAluminumharm(),
            $keys[46] => $this->getCyanideopt(),
            $keys[47] => $this->getCyanideharm(),
            $keys[48] => $this->getPcbopt(),
            $keys[49] => $this->getPcbharm(),
            $keys[50] => $this->getPesticidesopt(),
            $keys[51] => $this->getPesticidesharm(),
            $keys[52] => $this->getTurbidityopt(),
            $keys[53] => $this->getTurbidityharm(),
            $keys[54] => $this->getOilsrefinedopt(),
            $keys[55] => $this->getOilsrefinedharm(),
            $keys[56] => $this->getDyesopt(),
            $keys[57] => $this->getDyesharm(),
            $keys[58] => $this->getPhenolsopt(),
            $keys[59] => $this->getPhenolsharm(),
            $keys[60] => $this->getSurfactantsopt(),
            $keys[61] => $this->getSurfactantsharm(),
            $keys[62] => $this->getPhytoplanktonopt(),
            $keys[63] => $this->getPhytoplanktonharm(),
            $keys[64] => $this->getRemarko2(),
            $keys[65] => $this->getRemarko3(),
            $keys[66] => $this->getRemarkco2(),
            $keys[67] => $this->getRemarkph(),
            $keys[68] => $this->getRemarknh3(),
            $keys[69] => $this->getRemarkno2(),
            $keys[70] => $this->getRemarkno3(),
            $keys[71] => $this->getRemarkhno2(),
            $keys[72] => $this->getRemarkcl2(),
            $keys[73] => $this->getRemarkcl(),
            $keys[74] => $this->getRemarkh2s(),
            $keys[75] => $this->getRemarkzinc(),
            $keys[76] => $this->getRemarkcopper(),
            $keys[77] => $this->getRemarkiron(),
            $keys[78] => $this->getRemarklead(),
            $keys[79] => $this->getRemarkmercury(),
            $keys[80] => $this->getRemarkcadmium(),
            $keys[81] => $this->getRemarknickel(),
            $keys[82] => $this->getRemarkchromium(),
            $keys[83] => $this->getRemarkmanganese(),
            $keys[84] => $this->getRemarkarsenic(),
            $keys[85] => $this->getRemarkaluminum(),
            $keys[86] => $this->getRemarkcyanide(),
            $keys[87] => $this->getRemarkpcb(),
            $keys[88] => $this->getRemarkpesticide(),
            $keys[89] => $this->getRemarkturbidity(),
            $keys[90] => $this->getRemarkoilsrefined(),
            $keys[91] => $this->getRemarkdyes(),
            $keys[92] => $this->getRemarkphenols(),
            $keys[93] => $this->getRemarksurfactants(),
            $keys[94] => $this->getRemarkphytoplankton(),
            $keys[95] => $this->getTs(),
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
        $pos = WaterqualityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDissolvedo2opt($value);
                break;
            case 3:
                $this->setDissolvedo2harm($value);
                break;
            case 4:
                $this->setOzoneopt($value);
                break;
            case 5:
                $this->setOzoneharm($value);
                break;
            case 6:
                $this->setCarbondioxideopt($value);
                break;
            case 7:
                $this->setCarbondioxideharm($value);
                break;
            case 8:
                $this->setPhopt($value);
                break;
            case 9:
                $this->setPhharm($value);
                break;
            case 10:
                $this->setAmmoniaopt($value);
                break;
            case 11:
                $this->setAmmoniaharm($value);
                break;
            case 12:
                $this->setNitriteopt($value);
                break;
            case 13:
                $this->setNitriteharm($value);
                break;
            case 14:
                $this->setNitrateopt($value);
                break;
            case 15:
                $this->setNitrateharm($value);
                break;
            case 16:
                $this->setNitrousacidopt($value);
                break;
            case 17:
                $this->setNitrousacidharm($value);
                break;
            case 18:
                $this->setChlorineopt($value);
                break;
            case 19:
                $this->setChlorineharm($value);
                break;
            case 20:
                $this->setChlorideopt($value);
                break;
            case 21:
                $this->setChlorideharm($value);
                break;
            case 22:
                $this->setHsulphateopt($value);
                break;
            case 23:
                $this->setHsulphateharm($value);
                break;
            case 24:
                $this->setZincopt($value);
                break;
            case 25:
                $this->setZincharm($value);
                break;
            case 26:
                $this->setCopperopt($value);
                break;
            case 27:
                $this->setCopperharm($value);
                break;
            case 28:
                $this->setIronopt($value);
                break;
            case 29:
                $this->setIronharm($value);
                break;
            case 30:
                $this->setLeadopt($value);
                break;
            case 31:
                $this->setLeadharm($value);
                break;
            case 32:
                $this->setMercuryopt($value);
                break;
            case 33:
                $this->setMercuryharm($value);
                break;
            case 34:
                $this->setCadmiumopt($value);
                break;
            case 35:
                $this->setCadmiumharm($value);
                break;
            case 36:
                $this->setNickelopt($value);
                break;
            case 37:
                $this->setNickelharm($value);
                break;
            case 38:
                $this->setChromiumopt($value);
                break;
            case 39:
                $this->setChromiumharm($value);
                break;
            case 40:
                $this->setManganeseopt($value);
                break;
            case 41:
                $this->setManganeseharm($value);
                break;
            case 42:
                $this->setArsenicopt($value);
                break;
            case 43:
                $this->setArsenicharm($value);
                break;
            case 44:
                $this->setAluminumopt($value);
                break;
            case 45:
                $this->setAluminumharm($value);
                break;
            case 46:
                $this->setCyanideopt($value);
                break;
            case 47:
                $this->setCyanideharm($value);
                break;
            case 48:
                $this->setPcbopt($value);
                break;
            case 49:
                $this->setPcbharm($value);
                break;
            case 50:
                $this->setPesticidesopt($value);
                break;
            case 51:
                $this->setPesticidesharm($value);
                break;
            case 52:
                $this->setTurbidityopt($value);
                break;
            case 53:
                $this->setTurbidityharm($value);
                break;
            case 54:
                $this->setOilsrefinedopt($value);
                break;
            case 55:
                $this->setOilsrefinedharm($value);
                break;
            case 56:
                $this->setDyesopt($value);
                break;
            case 57:
                $this->setDyesharm($value);
                break;
            case 58:
                $this->setPhenolsopt($value);
                break;
            case 59:
                $this->setPhenolsharm($value);
                break;
            case 60:
                $this->setSurfactantsopt($value);
                break;
            case 61:
                $this->setSurfactantsharm($value);
                break;
            case 62:
                $this->setPhytoplanktonopt($value);
                break;
            case 63:
                $this->setPhytoplanktonharm($value);
                break;
            case 64:
                $this->setRemarko2($value);
                break;
            case 65:
                $this->setRemarko3($value);
                break;
            case 66:
                $this->setRemarkco2($value);
                break;
            case 67:
                $this->setRemarkph($value);
                break;
            case 68:
                $this->setRemarknh3($value);
                break;
            case 69:
                $this->setRemarkno2($value);
                break;
            case 70:
                $this->setRemarkno3($value);
                break;
            case 71:
                $this->setRemarkhno2($value);
                break;
            case 72:
                $this->setRemarkcl2($value);
                break;
            case 73:
                $this->setRemarkcl($value);
                break;
            case 74:
                $this->setRemarkh2s($value);
                break;
            case 75:
                $this->setRemarkzinc($value);
                break;
            case 76:
                $this->setRemarkcopper($value);
                break;
            case 77:
                $this->setRemarkiron($value);
                break;
            case 78:
                $this->setRemarklead($value);
                break;
            case 79:
                $this->setRemarkmercury($value);
                break;
            case 80:
                $this->setRemarkcadmium($value);
                break;
            case 81:
                $this->setRemarknickel($value);
                break;
            case 82:
                $this->setRemarkchromium($value);
                break;
            case 83:
                $this->setRemarkmanganese($value);
                break;
            case 84:
                $this->setRemarkarsenic($value);
                break;
            case 85:
                $this->setRemarkaluminum($value);
                break;
            case 86:
                $this->setRemarkcyanide($value);
                break;
            case 87:
                $this->setRemarkpcb($value);
                break;
            case 88:
                $this->setRemarkpesticide($value);
                break;
            case 89:
                $this->setRemarkturbidity($value);
                break;
            case 90:
                $this->setRemarkoilsrefined($value);
                break;
            case 91:
                $this->setRemarkdyes($value);
                break;
            case 92:
                $this->setRemarkphenols($value);
                break;
            case 93:
                $this->setRemarksurfactants($value);
                break;
            case 94:
                $this->setRemarkphytoplankton($value);
                break;
            case 95:
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
        $keys = WaterqualityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAutoctr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSpeccode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDissolvedo2opt($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDissolvedo2harm($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOzoneopt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOzoneharm($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCarbondioxideopt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCarbondioxideharm($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPhopt($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPhharm($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAmmoniaopt($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAmmoniaharm($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNitriteopt($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNitriteharm($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNitrateopt($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNitrateharm($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNitrousacidopt($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNitrousacidharm($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setChlorineopt($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setChlorineharm($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setChlorideopt($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setChlorideharm($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setHsulphateopt($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setHsulphateharm($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setZincopt($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setZincharm($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCopperopt($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCopperharm($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIronopt($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIronharm($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLeadopt($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLeadharm($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setMercuryopt($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setMercuryharm($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setCadmiumopt($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setCadmiumharm($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setNickelopt($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setNickelharm($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setChromiumopt($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setChromiumharm($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setManganeseopt($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setManganeseharm($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setArsenicopt($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setArsenicharm($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setAluminumopt($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setAluminumharm($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCyanideopt($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setCyanideharm($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setPcbopt($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setPcbharm($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setPesticidesopt($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setPesticidesharm($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTurbidityopt($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setTurbidityharm($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setOilsrefinedopt($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setOilsrefinedharm($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDyesopt($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDyesharm($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setPhenolsopt($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setPhenolsharm($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setSurfactantsopt($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setSurfactantsharm($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setPhytoplanktonopt($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setPhytoplanktonharm($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setRemarko2($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setRemarko3($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setRemarkco2($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setRemarkph($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setRemarknh3($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setRemarkno2($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setRemarkno3($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setRemarkhno2($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setRemarkcl2($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setRemarkcl($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setRemarkh2s($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setRemarkzinc($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setRemarkcopper($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setRemarkiron($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setRemarklead($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setRemarkmercury($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setRemarkcadmium($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setRemarknickel($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setRemarkchromium($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setRemarkmanganese($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setRemarkarsenic($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setRemarkaluminum($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setRemarkcyanide($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setRemarkpcb($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setRemarkpesticide($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setRemarkturbidity($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setRemarkoilsrefined($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setRemarkdyes($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setRemarkphenols($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setRemarksurfactants($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setRemarkphytoplankton($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setTs($arr[$keys[95]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WaterqualityPeer::DATABASE_NAME);

        if ($this->isColumnModified(WaterqualityPeer::AUTOCTR)) $criteria->add(WaterqualityPeer::AUTOCTR, $this->autoctr);
        if ($this->isColumnModified(WaterqualityPeer::SPECCODE)) $criteria->add(WaterqualityPeer::SPECCODE, $this->speccode);
        if ($this->isColumnModified(WaterqualityPeer::DISSOLVEDO2OPT)) $criteria->add(WaterqualityPeer::DISSOLVEDO2OPT, $this->dissolvedo2opt);
        if ($this->isColumnModified(WaterqualityPeer::DISSOLVEDO2HARM)) $criteria->add(WaterqualityPeer::DISSOLVEDO2HARM, $this->dissolvedo2harm);
        if ($this->isColumnModified(WaterqualityPeer::OZONEOPT)) $criteria->add(WaterqualityPeer::OZONEOPT, $this->ozoneopt);
        if ($this->isColumnModified(WaterqualityPeer::OZONEHARM)) $criteria->add(WaterqualityPeer::OZONEHARM, $this->ozoneharm);
        if ($this->isColumnModified(WaterqualityPeer::CARBONDIOXIDEOPT)) $criteria->add(WaterqualityPeer::CARBONDIOXIDEOPT, $this->carbondioxideopt);
        if ($this->isColumnModified(WaterqualityPeer::CARBONDIOXIDEHARM)) $criteria->add(WaterqualityPeer::CARBONDIOXIDEHARM, $this->carbondioxideharm);
        if ($this->isColumnModified(WaterqualityPeer::PHOPT)) $criteria->add(WaterqualityPeer::PHOPT, $this->phopt);
        if ($this->isColumnModified(WaterqualityPeer::PHHARM)) $criteria->add(WaterqualityPeer::PHHARM, $this->phharm);
        if ($this->isColumnModified(WaterqualityPeer::AMMONIAOPT)) $criteria->add(WaterqualityPeer::AMMONIAOPT, $this->ammoniaopt);
        if ($this->isColumnModified(WaterqualityPeer::AMMONIAHARM)) $criteria->add(WaterqualityPeer::AMMONIAHARM, $this->ammoniaharm);
        if ($this->isColumnModified(WaterqualityPeer::NITRITEOPT)) $criteria->add(WaterqualityPeer::NITRITEOPT, $this->nitriteopt);
        if ($this->isColumnModified(WaterqualityPeer::NITRITEHARM)) $criteria->add(WaterqualityPeer::NITRITEHARM, $this->nitriteharm);
        if ($this->isColumnModified(WaterqualityPeer::NITRATEOPT)) $criteria->add(WaterqualityPeer::NITRATEOPT, $this->nitrateopt);
        if ($this->isColumnModified(WaterqualityPeer::NITRATEHARM)) $criteria->add(WaterqualityPeer::NITRATEHARM, $this->nitrateharm);
        if ($this->isColumnModified(WaterqualityPeer::NITROUSACIDOPT)) $criteria->add(WaterqualityPeer::NITROUSACIDOPT, $this->nitrousacidopt);
        if ($this->isColumnModified(WaterqualityPeer::NITROUSACIDHARM)) $criteria->add(WaterqualityPeer::NITROUSACIDHARM, $this->nitrousacidharm);
        if ($this->isColumnModified(WaterqualityPeer::CHLORINEOPT)) $criteria->add(WaterqualityPeer::CHLORINEOPT, $this->chlorineopt);
        if ($this->isColumnModified(WaterqualityPeer::CHLORINEHARM)) $criteria->add(WaterqualityPeer::CHLORINEHARM, $this->chlorineharm);
        if ($this->isColumnModified(WaterqualityPeer::CHLORIDEOPT)) $criteria->add(WaterqualityPeer::CHLORIDEOPT, $this->chlorideopt);
        if ($this->isColumnModified(WaterqualityPeer::CHLORIDEHARM)) $criteria->add(WaterqualityPeer::CHLORIDEHARM, $this->chlorideharm);
        if ($this->isColumnModified(WaterqualityPeer::HSULPHATEOPT)) $criteria->add(WaterqualityPeer::HSULPHATEOPT, $this->hsulphateopt);
        if ($this->isColumnModified(WaterqualityPeer::HSULPHATEHARM)) $criteria->add(WaterqualityPeer::HSULPHATEHARM, $this->hsulphateharm);
        if ($this->isColumnModified(WaterqualityPeer::ZINCOPT)) $criteria->add(WaterqualityPeer::ZINCOPT, $this->zincopt);
        if ($this->isColumnModified(WaterqualityPeer::ZINCHARM)) $criteria->add(WaterqualityPeer::ZINCHARM, $this->zincharm);
        if ($this->isColumnModified(WaterqualityPeer::COPPEROPT)) $criteria->add(WaterqualityPeer::COPPEROPT, $this->copperopt);
        if ($this->isColumnModified(WaterqualityPeer::COPPERHARM)) $criteria->add(WaterqualityPeer::COPPERHARM, $this->copperharm);
        if ($this->isColumnModified(WaterqualityPeer::IRONOPT)) $criteria->add(WaterqualityPeer::IRONOPT, $this->ironopt);
        if ($this->isColumnModified(WaterqualityPeer::IRONHARM)) $criteria->add(WaterqualityPeer::IRONHARM, $this->ironharm);
        if ($this->isColumnModified(WaterqualityPeer::LEADOPT)) $criteria->add(WaterqualityPeer::LEADOPT, $this->leadopt);
        if ($this->isColumnModified(WaterqualityPeer::LEADHARM)) $criteria->add(WaterqualityPeer::LEADHARM, $this->leadharm);
        if ($this->isColumnModified(WaterqualityPeer::MERCURYOPT)) $criteria->add(WaterqualityPeer::MERCURYOPT, $this->mercuryopt);
        if ($this->isColumnModified(WaterqualityPeer::MERCURYHARM)) $criteria->add(WaterqualityPeer::MERCURYHARM, $this->mercuryharm);
        if ($this->isColumnModified(WaterqualityPeer::CADMIUMOPT)) $criteria->add(WaterqualityPeer::CADMIUMOPT, $this->cadmiumopt);
        if ($this->isColumnModified(WaterqualityPeer::CADMIUMHARM)) $criteria->add(WaterqualityPeer::CADMIUMHARM, $this->cadmiumharm);
        if ($this->isColumnModified(WaterqualityPeer::NICKELOPT)) $criteria->add(WaterqualityPeer::NICKELOPT, $this->nickelopt);
        if ($this->isColumnModified(WaterqualityPeer::NICKELHARM)) $criteria->add(WaterqualityPeer::NICKELHARM, $this->nickelharm);
        if ($this->isColumnModified(WaterqualityPeer::CHROMIUMOPT)) $criteria->add(WaterqualityPeer::CHROMIUMOPT, $this->chromiumopt);
        if ($this->isColumnModified(WaterqualityPeer::CHROMIUMHARM)) $criteria->add(WaterqualityPeer::CHROMIUMHARM, $this->chromiumharm);
        if ($this->isColumnModified(WaterqualityPeer::MANGANESEOPT)) $criteria->add(WaterqualityPeer::MANGANESEOPT, $this->manganeseopt);
        if ($this->isColumnModified(WaterqualityPeer::MANGANESEHARM)) $criteria->add(WaterqualityPeer::MANGANESEHARM, $this->manganeseharm);
        if ($this->isColumnModified(WaterqualityPeer::ARSENICOPT)) $criteria->add(WaterqualityPeer::ARSENICOPT, $this->arsenicopt);
        if ($this->isColumnModified(WaterqualityPeer::ARSENICHARM)) $criteria->add(WaterqualityPeer::ARSENICHARM, $this->arsenicharm);
        if ($this->isColumnModified(WaterqualityPeer::ALUMINUMOPT)) $criteria->add(WaterqualityPeer::ALUMINUMOPT, $this->aluminumopt);
        if ($this->isColumnModified(WaterqualityPeer::ALUMINUMHARM)) $criteria->add(WaterqualityPeer::ALUMINUMHARM, $this->aluminumharm);
        if ($this->isColumnModified(WaterqualityPeer::CYANIDEOPT)) $criteria->add(WaterqualityPeer::CYANIDEOPT, $this->cyanideopt);
        if ($this->isColumnModified(WaterqualityPeer::CYANIDEHARM)) $criteria->add(WaterqualityPeer::CYANIDEHARM, $this->cyanideharm);
        if ($this->isColumnModified(WaterqualityPeer::PCBOPT)) $criteria->add(WaterqualityPeer::PCBOPT, $this->pcbopt);
        if ($this->isColumnModified(WaterqualityPeer::PCBHARM)) $criteria->add(WaterqualityPeer::PCBHARM, $this->pcbharm);
        if ($this->isColumnModified(WaterqualityPeer::PESTICIDESOPT)) $criteria->add(WaterqualityPeer::PESTICIDESOPT, $this->pesticidesopt);
        if ($this->isColumnModified(WaterqualityPeer::PESTICIDESHARM)) $criteria->add(WaterqualityPeer::PESTICIDESHARM, $this->pesticidesharm);
        if ($this->isColumnModified(WaterqualityPeer::TURBIDITYOPT)) $criteria->add(WaterqualityPeer::TURBIDITYOPT, $this->turbidityopt);
        if ($this->isColumnModified(WaterqualityPeer::TURBIDITYHARM)) $criteria->add(WaterqualityPeer::TURBIDITYHARM, $this->turbidityharm);
        if ($this->isColumnModified(WaterqualityPeer::OILSREFINEDOPT)) $criteria->add(WaterqualityPeer::OILSREFINEDOPT, $this->oilsrefinedopt);
        if ($this->isColumnModified(WaterqualityPeer::OILSREFINEDHARM)) $criteria->add(WaterqualityPeer::OILSREFINEDHARM, $this->oilsrefinedharm);
        if ($this->isColumnModified(WaterqualityPeer::DYESOPT)) $criteria->add(WaterqualityPeer::DYESOPT, $this->dyesopt);
        if ($this->isColumnModified(WaterqualityPeer::DYESHARM)) $criteria->add(WaterqualityPeer::DYESHARM, $this->dyesharm);
        if ($this->isColumnModified(WaterqualityPeer::PHENOLSOPT)) $criteria->add(WaterqualityPeer::PHENOLSOPT, $this->phenolsopt);
        if ($this->isColumnModified(WaterqualityPeer::PHENOLSHARM)) $criteria->add(WaterqualityPeer::PHENOLSHARM, $this->phenolsharm);
        if ($this->isColumnModified(WaterqualityPeer::SURFACTANTSOPT)) $criteria->add(WaterqualityPeer::SURFACTANTSOPT, $this->surfactantsopt);
        if ($this->isColumnModified(WaterqualityPeer::SURFACTANTSHARM)) $criteria->add(WaterqualityPeer::SURFACTANTSHARM, $this->surfactantsharm);
        if ($this->isColumnModified(WaterqualityPeer::PHYTOPLANKTONOPT)) $criteria->add(WaterqualityPeer::PHYTOPLANKTONOPT, $this->phytoplanktonopt);
        if ($this->isColumnModified(WaterqualityPeer::PHYTOPLANKTONHARM)) $criteria->add(WaterqualityPeer::PHYTOPLANKTONHARM, $this->phytoplanktonharm);
        if ($this->isColumnModified(WaterqualityPeer::REMARKO2)) $criteria->add(WaterqualityPeer::REMARKO2, $this->remarko2);
        if ($this->isColumnModified(WaterqualityPeer::REMARKO3)) $criteria->add(WaterqualityPeer::REMARKO3, $this->remarko3);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCO2)) $criteria->add(WaterqualityPeer::REMARKCO2, $this->remarkco2);
        if ($this->isColumnModified(WaterqualityPeer::REMARKPH)) $criteria->add(WaterqualityPeer::REMARKPH, $this->remarkph);
        if ($this->isColumnModified(WaterqualityPeer::REMARKNH3)) $criteria->add(WaterqualityPeer::REMARKNH3, $this->remarknh3);
        if ($this->isColumnModified(WaterqualityPeer::REMARKNO2)) $criteria->add(WaterqualityPeer::REMARKNO2, $this->remarkno2);
        if ($this->isColumnModified(WaterqualityPeer::REMARKNO3)) $criteria->add(WaterqualityPeer::REMARKNO3, $this->remarkno3);
        if ($this->isColumnModified(WaterqualityPeer::REMARKHNO2)) $criteria->add(WaterqualityPeer::REMARKHNO2, $this->remarkhno2);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCL2)) $criteria->add(WaterqualityPeer::REMARKCL2, $this->remarkcl2);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCL)) $criteria->add(WaterqualityPeer::REMARKCL, $this->remarkcl);
        if ($this->isColumnModified(WaterqualityPeer::REMARKH2S)) $criteria->add(WaterqualityPeer::REMARKH2S, $this->remarkh2s);
        if ($this->isColumnModified(WaterqualityPeer::REMARKZINC)) $criteria->add(WaterqualityPeer::REMARKZINC, $this->remarkzinc);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCOPPER)) $criteria->add(WaterqualityPeer::REMARKCOPPER, $this->remarkcopper);
        if ($this->isColumnModified(WaterqualityPeer::REMARKIRON)) $criteria->add(WaterqualityPeer::REMARKIRON, $this->remarkiron);
        if ($this->isColumnModified(WaterqualityPeer::REMARKLEAD)) $criteria->add(WaterqualityPeer::REMARKLEAD, $this->remarklead);
        if ($this->isColumnModified(WaterqualityPeer::REMARKMERCURY)) $criteria->add(WaterqualityPeer::REMARKMERCURY, $this->remarkmercury);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCADMIUM)) $criteria->add(WaterqualityPeer::REMARKCADMIUM, $this->remarkcadmium);
        if ($this->isColumnModified(WaterqualityPeer::REMARKNICKEL)) $criteria->add(WaterqualityPeer::REMARKNICKEL, $this->remarknickel);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCHROMIUM)) $criteria->add(WaterqualityPeer::REMARKCHROMIUM, $this->remarkchromium);
        if ($this->isColumnModified(WaterqualityPeer::REMARKMANGANESE)) $criteria->add(WaterqualityPeer::REMARKMANGANESE, $this->remarkmanganese);
        if ($this->isColumnModified(WaterqualityPeer::REMARKARSENIC)) $criteria->add(WaterqualityPeer::REMARKARSENIC, $this->remarkarsenic);
        if ($this->isColumnModified(WaterqualityPeer::REMARKALUMINUM)) $criteria->add(WaterqualityPeer::REMARKALUMINUM, $this->remarkaluminum);
        if ($this->isColumnModified(WaterqualityPeer::REMARKCYANIDE)) $criteria->add(WaterqualityPeer::REMARKCYANIDE, $this->remarkcyanide);
        if ($this->isColumnModified(WaterqualityPeer::REMARKPCB)) $criteria->add(WaterqualityPeer::REMARKPCB, $this->remarkpcb);
        if ($this->isColumnModified(WaterqualityPeer::REMARKPESTICIDE)) $criteria->add(WaterqualityPeer::REMARKPESTICIDE, $this->remarkpesticide);
        if ($this->isColumnModified(WaterqualityPeer::REMARKTURBIDITY)) $criteria->add(WaterqualityPeer::REMARKTURBIDITY, $this->remarkturbidity);
        if ($this->isColumnModified(WaterqualityPeer::REMARKOILSREFINED)) $criteria->add(WaterqualityPeer::REMARKOILSREFINED, $this->remarkoilsrefined);
        if ($this->isColumnModified(WaterqualityPeer::REMARKDYES)) $criteria->add(WaterqualityPeer::REMARKDYES, $this->remarkdyes);
        if ($this->isColumnModified(WaterqualityPeer::REMARKPHENOLS)) $criteria->add(WaterqualityPeer::REMARKPHENOLS, $this->remarkphenols);
        if ($this->isColumnModified(WaterqualityPeer::REMARKSURFACTANTS)) $criteria->add(WaterqualityPeer::REMARKSURFACTANTS, $this->remarksurfactants);
        if ($this->isColumnModified(WaterqualityPeer::REMARKPHYTOPLANKTON)) $criteria->add(WaterqualityPeer::REMARKPHYTOPLANKTON, $this->remarkphytoplankton);
        if ($this->isColumnModified(WaterqualityPeer::TS)) $criteria->add(WaterqualityPeer::TS, $this->ts);

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
        $criteria = new Criteria(WaterqualityPeer::DATABASE_NAME);
        $criteria->add(WaterqualityPeer::SPECCODE, $this->speccode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSpeccode();
    }

    /**
     * Generic method to set the primary key (speccode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSpeccode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSpeccode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Waterquality (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAutoctr($this->getAutoctr());
        $copyObj->setDissolvedo2opt($this->getDissolvedo2opt());
        $copyObj->setDissolvedo2harm($this->getDissolvedo2harm());
        $copyObj->setOzoneopt($this->getOzoneopt());
        $copyObj->setOzoneharm($this->getOzoneharm());
        $copyObj->setCarbondioxideopt($this->getCarbondioxideopt());
        $copyObj->setCarbondioxideharm($this->getCarbondioxideharm());
        $copyObj->setPhopt($this->getPhopt());
        $copyObj->setPhharm($this->getPhharm());
        $copyObj->setAmmoniaopt($this->getAmmoniaopt());
        $copyObj->setAmmoniaharm($this->getAmmoniaharm());
        $copyObj->setNitriteopt($this->getNitriteopt());
        $copyObj->setNitriteharm($this->getNitriteharm());
        $copyObj->setNitrateopt($this->getNitrateopt());
        $copyObj->setNitrateharm($this->getNitrateharm());
        $copyObj->setNitrousacidopt($this->getNitrousacidopt());
        $copyObj->setNitrousacidharm($this->getNitrousacidharm());
        $copyObj->setChlorineopt($this->getChlorineopt());
        $copyObj->setChlorineharm($this->getChlorineharm());
        $copyObj->setChlorideopt($this->getChlorideopt());
        $copyObj->setChlorideharm($this->getChlorideharm());
        $copyObj->setHsulphateopt($this->getHsulphateopt());
        $copyObj->setHsulphateharm($this->getHsulphateharm());
        $copyObj->setZincopt($this->getZincopt());
        $copyObj->setZincharm($this->getZincharm());
        $copyObj->setCopperopt($this->getCopperopt());
        $copyObj->setCopperharm($this->getCopperharm());
        $copyObj->setIronopt($this->getIronopt());
        $copyObj->setIronharm($this->getIronharm());
        $copyObj->setLeadopt($this->getLeadopt());
        $copyObj->setLeadharm($this->getLeadharm());
        $copyObj->setMercuryopt($this->getMercuryopt());
        $copyObj->setMercuryharm($this->getMercuryharm());
        $copyObj->setCadmiumopt($this->getCadmiumopt());
        $copyObj->setCadmiumharm($this->getCadmiumharm());
        $copyObj->setNickelopt($this->getNickelopt());
        $copyObj->setNickelharm($this->getNickelharm());
        $copyObj->setChromiumopt($this->getChromiumopt());
        $copyObj->setChromiumharm($this->getChromiumharm());
        $copyObj->setManganeseopt($this->getManganeseopt());
        $copyObj->setManganeseharm($this->getManganeseharm());
        $copyObj->setArsenicopt($this->getArsenicopt());
        $copyObj->setArsenicharm($this->getArsenicharm());
        $copyObj->setAluminumopt($this->getAluminumopt());
        $copyObj->setAluminumharm($this->getAluminumharm());
        $copyObj->setCyanideopt($this->getCyanideopt());
        $copyObj->setCyanideharm($this->getCyanideharm());
        $copyObj->setPcbopt($this->getPcbopt());
        $copyObj->setPcbharm($this->getPcbharm());
        $copyObj->setPesticidesopt($this->getPesticidesopt());
        $copyObj->setPesticidesharm($this->getPesticidesharm());
        $copyObj->setTurbidityopt($this->getTurbidityopt());
        $copyObj->setTurbidityharm($this->getTurbidityharm());
        $copyObj->setOilsrefinedopt($this->getOilsrefinedopt());
        $copyObj->setOilsrefinedharm($this->getOilsrefinedharm());
        $copyObj->setDyesopt($this->getDyesopt());
        $copyObj->setDyesharm($this->getDyesharm());
        $copyObj->setPhenolsopt($this->getPhenolsopt());
        $copyObj->setPhenolsharm($this->getPhenolsharm());
        $copyObj->setSurfactantsopt($this->getSurfactantsopt());
        $copyObj->setSurfactantsharm($this->getSurfactantsharm());
        $copyObj->setPhytoplanktonopt($this->getPhytoplanktonopt());
        $copyObj->setPhytoplanktonharm($this->getPhytoplanktonharm());
        $copyObj->setRemarko2($this->getRemarko2());
        $copyObj->setRemarko3($this->getRemarko3());
        $copyObj->setRemarkco2($this->getRemarkco2());
        $copyObj->setRemarkph($this->getRemarkph());
        $copyObj->setRemarknh3($this->getRemarknh3());
        $copyObj->setRemarkno2($this->getRemarkno2());
        $copyObj->setRemarkno3($this->getRemarkno3());
        $copyObj->setRemarkhno2($this->getRemarkhno2());
        $copyObj->setRemarkcl2($this->getRemarkcl2());
        $copyObj->setRemarkcl($this->getRemarkcl());
        $copyObj->setRemarkh2s($this->getRemarkh2s());
        $copyObj->setRemarkzinc($this->getRemarkzinc());
        $copyObj->setRemarkcopper($this->getRemarkcopper());
        $copyObj->setRemarkiron($this->getRemarkiron());
        $copyObj->setRemarklead($this->getRemarklead());
        $copyObj->setRemarkmercury($this->getRemarkmercury());
        $copyObj->setRemarkcadmium($this->getRemarkcadmium());
        $copyObj->setRemarknickel($this->getRemarknickel());
        $copyObj->setRemarkchromium($this->getRemarkchromium());
        $copyObj->setRemarkmanganese($this->getRemarkmanganese());
        $copyObj->setRemarkarsenic($this->getRemarkarsenic());
        $copyObj->setRemarkaluminum($this->getRemarkaluminum());
        $copyObj->setRemarkcyanide($this->getRemarkcyanide());
        $copyObj->setRemarkpcb($this->getRemarkpcb());
        $copyObj->setRemarkpesticide($this->getRemarkpesticide());
        $copyObj->setRemarkturbidity($this->getRemarkturbidity());
        $copyObj->setRemarkoilsrefined($this->getRemarkoilsrefined());
        $copyObj->setRemarkdyes($this->getRemarkdyes());
        $copyObj->setRemarkphenols($this->getRemarkphenols());
        $copyObj->setRemarksurfactants($this->getRemarksurfactants());
        $copyObj->setRemarkphytoplankton($this->getRemarkphytoplankton());
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
     * @return Waterquality Clone of current object.
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
     * @return WaterqualityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WaterqualityPeer();
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
        $this->dissolvedo2opt = null;
        $this->dissolvedo2harm = null;
        $this->ozoneopt = null;
        $this->ozoneharm = null;
        $this->carbondioxideopt = null;
        $this->carbondioxideharm = null;
        $this->phopt = null;
        $this->phharm = null;
        $this->ammoniaopt = null;
        $this->ammoniaharm = null;
        $this->nitriteopt = null;
        $this->nitriteharm = null;
        $this->nitrateopt = null;
        $this->nitrateharm = null;
        $this->nitrousacidopt = null;
        $this->nitrousacidharm = null;
        $this->chlorineopt = null;
        $this->chlorineharm = null;
        $this->chlorideopt = null;
        $this->chlorideharm = null;
        $this->hsulphateopt = null;
        $this->hsulphateharm = null;
        $this->zincopt = null;
        $this->zincharm = null;
        $this->copperopt = null;
        $this->copperharm = null;
        $this->ironopt = null;
        $this->ironharm = null;
        $this->leadopt = null;
        $this->leadharm = null;
        $this->mercuryopt = null;
        $this->mercuryharm = null;
        $this->cadmiumopt = null;
        $this->cadmiumharm = null;
        $this->nickelopt = null;
        $this->nickelharm = null;
        $this->chromiumopt = null;
        $this->chromiumharm = null;
        $this->manganeseopt = null;
        $this->manganeseharm = null;
        $this->arsenicopt = null;
        $this->arsenicharm = null;
        $this->aluminumopt = null;
        $this->aluminumharm = null;
        $this->cyanideopt = null;
        $this->cyanideharm = null;
        $this->pcbopt = null;
        $this->pcbharm = null;
        $this->pesticidesopt = null;
        $this->pesticidesharm = null;
        $this->turbidityopt = null;
        $this->turbidityharm = null;
        $this->oilsrefinedopt = null;
        $this->oilsrefinedharm = null;
        $this->dyesopt = null;
        $this->dyesharm = null;
        $this->phenolsopt = null;
        $this->phenolsharm = null;
        $this->surfactantsopt = null;
        $this->surfactantsharm = null;
        $this->phytoplanktonopt = null;
        $this->phytoplanktonharm = null;
        $this->remarko2 = null;
        $this->remarko3 = null;
        $this->remarkco2 = null;
        $this->remarkph = null;
        $this->remarknh3 = null;
        $this->remarkno2 = null;
        $this->remarkno3 = null;
        $this->remarkhno2 = null;
        $this->remarkcl2 = null;
        $this->remarkcl = null;
        $this->remarkh2s = null;
        $this->remarkzinc = null;
        $this->remarkcopper = null;
        $this->remarkiron = null;
        $this->remarklead = null;
        $this->remarkmercury = null;
        $this->remarkcadmium = null;
        $this->remarknickel = null;
        $this->remarkchromium = null;
        $this->remarkmanganese = null;
        $this->remarkarsenic = null;
        $this->remarkaluminum = null;
        $this->remarkcyanide = null;
        $this->remarkpcb = null;
        $this->remarkpesticide = null;
        $this->remarkturbidity = null;
        $this->remarkoilsrefined = null;
        $this->remarkdyes = null;
        $this->remarkphenols = null;
        $this->remarksurfactants = null;
        $this->remarkphytoplankton = null;
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
        return (string) $this->exportTo(WaterqualityPeer::DEFAULT_STRING_FORMAT);
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
