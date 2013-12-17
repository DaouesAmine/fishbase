<?php


/**
 * Base static class for performing query and update operations on the 'waterquality' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseWaterqualityPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'waterquality';

    /** the related Propel class for this table */
    const OM_CLASS = 'Waterquality';

    /** the related TableMap class for this table */
    const TM_CLASS = 'WaterqualityTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 96;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 96;

    /** the column name for the autoctr field */
    const AUTOCTR = 'waterquality.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'waterquality.Speccode';

    /** the column name for the DissolvedO2Opt field */
    const DISSOLVEDO2OPT = 'waterquality.DissolvedO2Opt';

    /** the column name for the DissolvedO2Harm field */
    const DISSOLVEDO2HARM = 'waterquality.DissolvedO2Harm';

    /** the column name for the OzoneOpt field */
    const OZONEOPT = 'waterquality.OzoneOpt';

    /** the column name for the OzoneHarm field */
    const OZONEHARM = 'waterquality.OzoneHarm';

    /** the column name for the CarbonDioxideOpt field */
    const CARBONDIOXIDEOPT = 'waterquality.CarbonDioxideOpt';

    /** the column name for the CarbonDioxideHarm field */
    const CARBONDIOXIDEHARM = 'waterquality.CarbonDioxideHarm';

    /** the column name for the pHOpt field */
    const PHOPT = 'waterquality.pHOpt';

    /** the column name for the pHHarm field */
    const PHHARM = 'waterquality.pHHarm';

    /** the column name for the AmmoniaOpt field */
    const AMMONIAOPT = 'waterquality.AmmoniaOpt';

    /** the column name for the AmmoniaHarm field */
    const AMMONIAHARM = 'waterquality.AmmoniaHarm';

    /** the column name for the NitriteOpt field */
    const NITRITEOPT = 'waterquality.NitriteOpt';

    /** the column name for the NitriteHarm field */
    const NITRITEHARM = 'waterquality.NitriteHarm';

    /** the column name for the NitrateOpt field */
    const NITRATEOPT = 'waterquality.NitrateOpt';

    /** the column name for the NitrateHarm field */
    const NITRATEHARM = 'waterquality.NitrateHarm';

    /** the column name for the NitrousAcidOpt field */
    const NITROUSACIDOPT = 'waterquality.NitrousAcidOpt';

    /** the column name for the NitrousAcidHarm field */
    const NITROUSACIDHARM = 'waterquality.NitrousAcidHarm';

    /** the column name for the ChlorineOpt field */
    const CHLORINEOPT = 'waterquality.ChlorineOpt';

    /** the column name for the ChlorineHarm field */
    const CHLORINEHARM = 'waterquality.ChlorineHarm';

    /** the column name for the ChlorideOpt field */
    const CHLORIDEOPT = 'waterquality.ChlorideOpt';

    /** the column name for the ChlorideHarm field */
    const CHLORIDEHARM = 'waterquality.ChlorideHarm';

    /** the column name for the HSulphateOpt field */
    const HSULPHATEOPT = 'waterquality.HSulphateOpt';

    /** the column name for the HSulphateHarm field */
    const HSULPHATEHARM = 'waterquality.HSulphateHarm';

    /** the column name for the ZincOpt field */
    const ZINCOPT = 'waterquality.ZincOpt';

    /** the column name for the ZincHarm field */
    const ZINCHARM = 'waterquality.ZincHarm';

    /** the column name for the CopperOpt field */
    const COPPEROPT = 'waterquality.CopperOpt';

    /** the column name for the CopperHarm field */
    const COPPERHARM = 'waterquality.CopperHarm';

    /** the column name for the IronOpt field */
    const IRONOPT = 'waterquality.IronOpt';

    /** the column name for the IronHarm field */
    const IRONHARM = 'waterquality.IronHarm';

    /** the column name for the LeadOpt field */
    const LEADOPT = 'waterquality.LeadOpt';

    /** the column name for the LeadHarm field */
    const LEADHARM = 'waterquality.LeadHarm';

    /** the column name for the MercuryOpt field */
    const MERCURYOPT = 'waterquality.MercuryOpt';

    /** the column name for the MercuryHarm field */
    const MERCURYHARM = 'waterquality.MercuryHarm';

    /** the column name for the CadmiumOpt field */
    const CADMIUMOPT = 'waterquality.CadmiumOpt';

    /** the column name for the CadmiumHarm field */
    const CADMIUMHARM = 'waterquality.CadmiumHarm';

    /** the column name for the NickelOpt field */
    const NICKELOPT = 'waterquality.NickelOpt';

    /** the column name for the NickelHarm field */
    const NICKELHARM = 'waterquality.NickelHarm';

    /** the column name for the ChromiumOpt field */
    const CHROMIUMOPT = 'waterquality.ChromiumOpt';

    /** the column name for the ChromiumHarm field */
    const CHROMIUMHARM = 'waterquality.ChromiumHarm';

    /** the column name for the ManganeseOpt field */
    const MANGANESEOPT = 'waterquality.ManganeseOpt';

    /** the column name for the ManganeseHarm field */
    const MANGANESEHARM = 'waterquality.ManganeseHarm';

    /** the column name for the ArsenicOpt field */
    const ARSENICOPT = 'waterquality.ArsenicOpt';

    /** the column name for the ArsenicHarm field */
    const ARSENICHARM = 'waterquality.ArsenicHarm';

    /** the column name for the AluminumOpt field */
    const ALUMINUMOPT = 'waterquality.AluminumOpt';

    /** the column name for the AluminumHarm field */
    const ALUMINUMHARM = 'waterquality.AluminumHarm';

    /** the column name for the CyanideOpt field */
    const CYANIDEOPT = 'waterquality.CyanideOpt';

    /** the column name for the CyanideHarm field */
    const CYANIDEHARM = 'waterquality.CyanideHarm';

    /** the column name for the PCBOpt field */
    const PCBOPT = 'waterquality.PCBOpt';

    /** the column name for the PCBHarm field */
    const PCBHARM = 'waterquality.PCBHarm';

    /** the column name for the PesticidesOpt field */
    const PESTICIDESOPT = 'waterquality.PesticidesOpt';

    /** the column name for the PesticidesHarm field */
    const PESTICIDESHARM = 'waterquality.PesticidesHarm';

    /** the column name for the TurbidityOpt field */
    const TURBIDITYOPT = 'waterquality.TurbidityOpt';

    /** the column name for the TurbidityHarm field */
    const TURBIDITYHARM = 'waterquality.TurbidityHarm';

    /** the column name for the OilsRefinedOpt field */
    const OILSREFINEDOPT = 'waterquality.OilsRefinedOpt';

    /** the column name for the OilsRefinedHarm field */
    const OILSREFINEDHARM = 'waterquality.OilsRefinedHarm';

    /** the column name for the DyesOpt field */
    const DYESOPT = 'waterquality.DyesOpt';

    /** the column name for the DyesHarm field */
    const DYESHARM = 'waterquality.DyesHarm';

    /** the column name for the PhenolsOpt field */
    const PHENOLSOPT = 'waterquality.PhenolsOpt';

    /** the column name for the PhenolsHarm field */
    const PHENOLSHARM = 'waterquality.PhenolsHarm';

    /** the column name for the SurfactantsOpt field */
    const SURFACTANTSOPT = 'waterquality.SurfactantsOpt';

    /** the column name for the SurfactantsHarm field */
    const SURFACTANTSHARM = 'waterquality.SurfactantsHarm';

    /** the column name for the PhytoplanktonOpt field */
    const PHYTOPLANKTONOPT = 'waterquality.PhytoplanktonOpt';

    /** the column name for the PhytoplanktonHarm field */
    const PHYTOPLANKTONHARM = 'waterquality.PhytoplanktonHarm';

    /** the column name for the RemarkO2 field */
    const REMARKO2 = 'waterquality.RemarkO2';

    /** the column name for the RemarkO3 field */
    const REMARKO3 = 'waterquality.RemarkO3';

    /** the column name for the RemarkCO2 field */
    const REMARKCO2 = 'waterquality.RemarkCO2';

    /** the column name for the RemarkpH field */
    const REMARKPH = 'waterquality.RemarkpH';

    /** the column name for the RemarkNH3 field */
    const REMARKNH3 = 'waterquality.RemarkNH3';

    /** the column name for the RemarkNO2 field */
    const REMARKNO2 = 'waterquality.RemarkNO2';

    /** the column name for the RemarkNO3 field */
    const REMARKNO3 = 'waterquality.RemarkNO3';

    /** the column name for the RemarkHNO2 field */
    const REMARKHNO2 = 'waterquality.RemarkHNO2';

    /** the column name for the RemarkCL2 field */
    const REMARKCL2 = 'waterquality.RemarkCL2';

    /** the column name for the RemarkCL field */
    const REMARKCL = 'waterquality.RemarkCL';

    /** the column name for the RemarkH2S field */
    const REMARKH2S = 'waterquality.RemarkH2S';

    /** the column name for the RemarkZinc field */
    const REMARKZINC = 'waterquality.RemarkZinc';

    /** the column name for the RemarkCopper field */
    const REMARKCOPPER = 'waterquality.RemarkCopper';

    /** the column name for the RemarkIron field */
    const REMARKIRON = 'waterquality.RemarkIron';

    /** the column name for the RemarkLead field */
    const REMARKLEAD = 'waterquality.RemarkLead';

    /** the column name for the RemarkMercury field */
    const REMARKMERCURY = 'waterquality.RemarkMercury';

    /** the column name for the RemarkCadmium field */
    const REMARKCADMIUM = 'waterquality.RemarkCadmium';

    /** the column name for the RemarkNickel field */
    const REMARKNICKEL = 'waterquality.RemarkNickel';

    /** the column name for the RemarkChromium field */
    const REMARKCHROMIUM = 'waterquality.RemarkChromium';

    /** the column name for the RemarkManganese field */
    const REMARKMANGANESE = 'waterquality.RemarkManganese';

    /** the column name for the RemarkArsenic field */
    const REMARKARSENIC = 'waterquality.RemarkArsenic';

    /** the column name for the RemarkAluminum field */
    const REMARKALUMINUM = 'waterquality.RemarkAluminum';

    /** the column name for the RemarkCyanide field */
    const REMARKCYANIDE = 'waterquality.RemarkCyanide';

    /** the column name for the RemarkPCB field */
    const REMARKPCB = 'waterquality.RemarkPCB';

    /** the column name for the RemarkPesticide field */
    const REMARKPESTICIDE = 'waterquality.RemarkPesticide';

    /** the column name for the RemarkTurbidity field */
    const REMARKTURBIDITY = 'waterquality.RemarkTurbidity';

    /** the column name for the RemarkOilsRefined field */
    const REMARKOILSREFINED = 'waterquality.RemarkOilsRefined';

    /** the column name for the RemarkDyes field */
    const REMARKDYES = 'waterquality.RemarkDyes';

    /** the column name for the RemarkPhenols field */
    const REMARKPHENOLS = 'waterquality.RemarkPhenols';

    /** the column name for the RemarkSurfactants field */
    const REMARKSURFACTANTS = 'waterquality.RemarkSurfactants';

    /** the column name for the RemarkPhytoplankton field */
    const REMARKPHYTOPLANKTON = 'waterquality.RemarkPhytoplankton';

    /** the column name for the TS field */
    const TS = 'waterquality.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Waterquality objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Waterquality[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. WaterqualityPeer::$fieldNames[WaterqualityPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Dissolvedo2opt', 'Dissolvedo2harm', 'Ozoneopt', 'Ozoneharm', 'Carbondioxideopt', 'Carbondioxideharm', 'Phopt', 'Phharm', 'Ammoniaopt', 'Ammoniaharm', 'Nitriteopt', 'Nitriteharm', 'Nitrateopt', 'Nitrateharm', 'Nitrousacidopt', 'Nitrousacidharm', 'Chlorineopt', 'Chlorineharm', 'Chlorideopt', 'Chlorideharm', 'Hsulphateopt', 'Hsulphateharm', 'Zincopt', 'Zincharm', 'Copperopt', 'Copperharm', 'Ironopt', 'Ironharm', 'Leadopt', 'Leadharm', 'Mercuryopt', 'Mercuryharm', 'Cadmiumopt', 'Cadmiumharm', 'Nickelopt', 'Nickelharm', 'Chromiumopt', 'Chromiumharm', 'Manganeseopt', 'Manganeseharm', 'Arsenicopt', 'Arsenicharm', 'Aluminumopt', 'Aluminumharm', 'Cyanideopt', 'Cyanideharm', 'Pcbopt', 'Pcbharm', 'Pesticidesopt', 'Pesticidesharm', 'Turbidityopt', 'Turbidityharm', 'Oilsrefinedopt', 'Oilsrefinedharm', 'Dyesopt', 'Dyesharm', 'Phenolsopt', 'Phenolsharm', 'Surfactantsopt', 'Surfactantsharm', 'Phytoplanktonopt', 'Phytoplanktonharm', 'Remarko2', 'Remarko3', 'Remarkco2', 'Remarkph', 'Remarknh3', 'Remarkno2', 'Remarkno3', 'Remarkhno2', 'Remarkcl2', 'Remarkcl', 'Remarkh2s', 'Remarkzinc', 'Remarkcopper', 'Remarkiron', 'Remarklead', 'Remarkmercury', 'Remarkcadmium', 'Remarknickel', 'Remarkchromium', 'Remarkmanganese', 'Remarkarsenic', 'Remarkaluminum', 'Remarkcyanide', 'Remarkpcb', 'Remarkpesticide', 'Remarkturbidity', 'Remarkoilsrefined', 'Remarkdyes', 'Remarkphenols', 'Remarksurfactants', 'Remarkphytoplankton', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'dissolvedo2opt', 'dissolvedo2harm', 'ozoneopt', 'ozoneharm', 'carbondioxideopt', 'carbondioxideharm', 'phopt', 'phharm', 'ammoniaopt', 'ammoniaharm', 'nitriteopt', 'nitriteharm', 'nitrateopt', 'nitrateharm', 'nitrousacidopt', 'nitrousacidharm', 'chlorineopt', 'chlorineharm', 'chlorideopt', 'chlorideharm', 'hsulphateopt', 'hsulphateharm', 'zincopt', 'zincharm', 'copperopt', 'copperharm', 'ironopt', 'ironharm', 'leadopt', 'leadharm', 'mercuryopt', 'mercuryharm', 'cadmiumopt', 'cadmiumharm', 'nickelopt', 'nickelharm', 'chromiumopt', 'chromiumharm', 'manganeseopt', 'manganeseharm', 'arsenicopt', 'arsenicharm', 'aluminumopt', 'aluminumharm', 'cyanideopt', 'cyanideharm', 'pcbopt', 'pcbharm', 'pesticidesopt', 'pesticidesharm', 'turbidityopt', 'turbidityharm', 'oilsrefinedopt', 'oilsrefinedharm', 'dyesopt', 'dyesharm', 'phenolsopt', 'phenolsharm', 'surfactantsopt', 'surfactantsharm', 'phytoplanktonopt', 'phytoplanktonharm', 'remarko2', 'remarko3', 'remarkco2', 'remarkph', 'remarknh3', 'remarkno2', 'remarkno3', 'remarkhno2', 'remarkcl2', 'remarkcl', 'remarkh2s', 'remarkzinc', 'remarkcopper', 'remarkiron', 'remarklead', 'remarkmercury', 'remarkcadmium', 'remarknickel', 'remarkchromium', 'remarkmanganese', 'remarkarsenic', 'remarkaluminum', 'remarkcyanide', 'remarkpcb', 'remarkpesticide', 'remarkturbidity', 'remarkoilsrefined', 'remarkdyes', 'remarkphenols', 'remarksurfactants', 'remarkphytoplankton', 'ts', ),
        BasePeer::TYPE_COLNAME => array (WaterqualityPeer::AUTOCTR, WaterqualityPeer::SPECCODE, WaterqualityPeer::DISSOLVEDO2OPT, WaterqualityPeer::DISSOLVEDO2HARM, WaterqualityPeer::OZONEOPT, WaterqualityPeer::OZONEHARM, WaterqualityPeer::CARBONDIOXIDEOPT, WaterqualityPeer::CARBONDIOXIDEHARM, WaterqualityPeer::PHOPT, WaterqualityPeer::PHHARM, WaterqualityPeer::AMMONIAOPT, WaterqualityPeer::AMMONIAHARM, WaterqualityPeer::NITRITEOPT, WaterqualityPeer::NITRITEHARM, WaterqualityPeer::NITRATEOPT, WaterqualityPeer::NITRATEHARM, WaterqualityPeer::NITROUSACIDOPT, WaterqualityPeer::NITROUSACIDHARM, WaterqualityPeer::CHLORINEOPT, WaterqualityPeer::CHLORINEHARM, WaterqualityPeer::CHLORIDEOPT, WaterqualityPeer::CHLORIDEHARM, WaterqualityPeer::HSULPHATEOPT, WaterqualityPeer::HSULPHATEHARM, WaterqualityPeer::ZINCOPT, WaterqualityPeer::ZINCHARM, WaterqualityPeer::COPPEROPT, WaterqualityPeer::COPPERHARM, WaterqualityPeer::IRONOPT, WaterqualityPeer::IRONHARM, WaterqualityPeer::LEADOPT, WaterqualityPeer::LEADHARM, WaterqualityPeer::MERCURYOPT, WaterqualityPeer::MERCURYHARM, WaterqualityPeer::CADMIUMOPT, WaterqualityPeer::CADMIUMHARM, WaterqualityPeer::NICKELOPT, WaterqualityPeer::NICKELHARM, WaterqualityPeer::CHROMIUMOPT, WaterqualityPeer::CHROMIUMHARM, WaterqualityPeer::MANGANESEOPT, WaterqualityPeer::MANGANESEHARM, WaterqualityPeer::ARSENICOPT, WaterqualityPeer::ARSENICHARM, WaterqualityPeer::ALUMINUMOPT, WaterqualityPeer::ALUMINUMHARM, WaterqualityPeer::CYANIDEOPT, WaterqualityPeer::CYANIDEHARM, WaterqualityPeer::PCBOPT, WaterqualityPeer::PCBHARM, WaterqualityPeer::PESTICIDESOPT, WaterqualityPeer::PESTICIDESHARM, WaterqualityPeer::TURBIDITYOPT, WaterqualityPeer::TURBIDITYHARM, WaterqualityPeer::OILSREFINEDOPT, WaterqualityPeer::OILSREFINEDHARM, WaterqualityPeer::DYESOPT, WaterqualityPeer::DYESHARM, WaterqualityPeer::PHENOLSOPT, WaterqualityPeer::PHENOLSHARM, WaterqualityPeer::SURFACTANTSOPT, WaterqualityPeer::SURFACTANTSHARM, WaterqualityPeer::PHYTOPLANKTONOPT, WaterqualityPeer::PHYTOPLANKTONHARM, WaterqualityPeer::REMARKO2, WaterqualityPeer::REMARKO3, WaterqualityPeer::REMARKCO2, WaterqualityPeer::REMARKPH, WaterqualityPeer::REMARKNH3, WaterqualityPeer::REMARKNO2, WaterqualityPeer::REMARKNO3, WaterqualityPeer::REMARKHNO2, WaterqualityPeer::REMARKCL2, WaterqualityPeer::REMARKCL, WaterqualityPeer::REMARKH2S, WaterqualityPeer::REMARKZINC, WaterqualityPeer::REMARKCOPPER, WaterqualityPeer::REMARKIRON, WaterqualityPeer::REMARKLEAD, WaterqualityPeer::REMARKMERCURY, WaterqualityPeer::REMARKCADMIUM, WaterqualityPeer::REMARKNICKEL, WaterqualityPeer::REMARKCHROMIUM, WaterqualityPeer::REMARKMANGANESE, WaterqualityPeer::REMARKARSENIC, WaterqualityPeer::REMARKALUMINUM, WaterqualityPeer::REMARKCYANIDE, WaterqualityPeer::REMARKPCB, WaterqualityPeer::REMARKPESTICIDE, WaterqualityPeer::REMARKTURBIDITY, WaterqualityPeer::REMARKOILSREFINED, WaterqualityPeer::REMARKDYES, WaterqualityPeer::REMARKPHENOLS, WaterqualityPeer::REMARKSURFACTANTS, WaterqualityPeer::REMARKPHYTOPLANKTON, WaterqualityPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'DISSOLVEDO2OPT', 'DISSOLVEDO2HARM', 'OZONEOPT', 'OZONEHARM', 'CARBONDIOXIDEOPT', 'CARBONDIOXIDEHARM', 'PHOPT', 'PHHARM', 'AMMONIAOPT', 'AMMONIAHARM', 'NITRITEOPT', 'NITRITEHARM', 'NITRATEOPT', 'NITRATEHARM', 'NITROUSACIDOPT', 'NITROUSACIDHARM', 'CHLORINEOPT', 'CHLORINEHARM', 'CHLORIDEOPT', 'CHLORIDEHARM', 'HSULPHATEOPT', 'HSULPHATEHARM', 'ZINCOPT', 'ZINCHARM', 'COPPEROPT', 'COPPERHARM', 'IRONOPT', 'IRONHARM', 'LEADOPT', 'LEADHARM', 'MERCURYOPT', 'MERCURYHARM', 'CADMIUMOPT', 'CADMIUMHARM', 'NICKELOPT', 'NICKELHARM', 'CHROMIUMOPT', 'CHROMIUMHARM', 'MANGANESEOPT', 'MANGANESEHARM', 'ARSENICOPT', 'ARSENICHARM', 'ALUMINUMOPT', 'ALUMINUMHARM', 'CYANIDEOPT', 'CYANIDEHARM', 'PCBOPT', 'PCBHARM', 'PESTICIDESOPT', 'PESTICIDESHARM', 'TURBIDITYOPT', 'TURBIDITYHARM', 'OILSREFINEDOPT', 'OILSREFINEDHARM', 'DYESOPT', 'DYESHARM', 'PHENOLSOPT', 'PHENOLSHARM', 'SURFACTANTSOPT', 'SURFACTANTSHARM', 'PHYTOPLANKTONOPT', 'PHYTOPLANKTONHARM', 'REMARKO2', 'REMARKO3', 'REMARKCO2', 'REMARKPH', 'REMARKNH3', 'REMARKNO2', 'REMARKNO3', 'REMARKHNO2', 'REMARKCL2', 'REMARKCL', 'REMARKH2S', 'REMARKZINC', 'REMARKCOPPER', 'REMARKIRON', 'REMARKLEAD', 'REMARKMERCURY', 'REMARKCADMIUM', 'REMARKNICKEL', 'REMARKCHROMIUM', 'REMARKMANGANESE', 'REMARKARSENIC', 'REMARKALUMINUM', 'REMARKCYANIDE', 'REMARKPCB', 'REMARKPESTICIDE', 'REMARKTURBIDITY', 'REMARKOILSREFINED', 'REMARKDYES', 'REMARKPHENOLS', 'REMARKSURFACTANTS', 'REMARKPHYTOPLANKTON', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'DissolvedO2Opt', 'DissolvedO2Harm', 'OzoneOpt', 'OzoneHarm', 'CarbonDioxideOpt', 'CarbonDioxideHarm', 'pHOpt', 'pHHarm', 'AmmoniaOpt', 'AmmoniaHarm', 'NitriteOpt', 'NitriteHarm', 'NitrateOpt', 'NitrateHarm', 'NitrousAcidOpt', 'NitrousAcidHarm', 'ChlorineOpt', 'ChlorineHarm', 'ChlorideOpt', 'ChlorideHarm', 'HSulphateOpt', 'HSulphateHarm', 'ZincOpt', 'ZincHarm', 'CopperOpt', 'CopperHarm', 'IronOpt', 'IronHarm', 'LeadOpt', 'LeadHarm', 'MercuryOpt', 'MercuryHarm', 'CadmiumOpt', 'CadmiumHarm', 'NickelOpt', 'NickelHarm', 'ChromiumOpt', 'ChromiumHarm', 'ManganeseOpt', 'ManganeseHarm', 'ArsenicOpt', 'ArsenicHarm', 'AluminumOpt', 'AluminumHarm', 'CyanideOpt', 'CyanideHarm', 'PCBOpt', 'PCBHarm', 'PesticidesOpt', 'PesticidesHarm', 'TurbidityOpt', 'TurbidityHarm', 'OilsRefinedOpt', 'OilsRefinedHarm', 'DyesOpt', 'DyesHarm', 'PhenolsOpt', 'PhenolsHarm', 'SurfactantsOpt', 'SurfactantsHarm', 'PhytoplanktonOpt', 'PhytoplanktonHarm', 'RemarkO2', 'RemarkO3', 'RemarkCO2', 'RemarkpH', 'RemarkNH3', 'RemarkNO2', 'RemarkNO3', 'RemarkHNO2', 'RemarkCL2', 'RemarkCL', 'RemarkH2S', 'RemarkZinc', 'RemarkCopper', 'RemarkIron', 'RemarkLead', 'RemarkMercury', 'RemarkCadmium', 'RemarkNickel', 'RemarkChromium', 'RemarkManganese', 'RemarkArsenic', 'RemarkAluminum', 'RemarkCyanide', 'RemarkPCB', 'RemarkPesticide', 'RemarkTurbidity', 'RemarkOilsRefined', 'RemarkDyes', 'RemarkPhenols', 'RemarkSurfactants', 'RemarkPhytoplankton', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. WaterqualityPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Dissolvedo2opt' => 2, 'Dissolvedo2harm' => 3, 'Ozoneopt' => 4, 'Ozoneharm' => 5, 'Carbondioxideopt' => 6, 'Carbondioxideharm' => 7, 'Phopt' => 8, 'Phharm' => 9, 'Ammoniaopt' => 10, 'Ammoniaharm' => 11, 'Nitriteopt' => 12, 'Nitriteharm' => 13, 'Nitrateopt' => 14, 'Nitrateharm' => 15, 'Nitrousacidopt' => 16, 'Nitrousacidharm' => 17, 'Chlorineopt' => 18, 'Chlorineharm' => 19, 'Chlorideopt' => 20, 'Chlorideharm' => 21, 'Hsulphateopt' => 22, 'Hsulphateharm' => 23, 'Zincopt' => 24, 'Zincharm' => 25, 'Copperopt' => 26, 'Copperharm' => 27, 'Ironopt' => 28, 'Ironharm' => 29, 'Leadopt' => 30, 'Leadharm' => 31, 'Mercuryopt' => 32, 'Mercuryharm' => 33, 'Cadmiumopt' => 34, 'Cadmiumharm' => 35, 'Nickelopt' => 36, 'Nickelharm' => 37, 'Chromiumopt' => 38, 'Chromiumharm' => 39, 'Manganeseopt' => 40, 'Manganeseharm' => 41, 'Arsenicopt' => 42, 'Arsenicharm' => 43, 'Aluminumopt' => 44, 'Aluminumharm' => 45, 'Cyanideopt' => 46, 'Cyanideharm' => 47, 'Pcbopt' => 48, 'Pcbharm' => 49, 'Pesticidesopt' => 50, 'Pesticidesharm' => 51, 'Turbidityopt' => 52, 'Turbidityharm' => 53, 'Oilsrefinedopt' => 54, 'Oilsrefinedharm' => 55, 'Dyesopt' => 56, 'Dyesharm' => 57, 'Phenolsopt' => 58, 'Phenolsharm' => 59, 'Surfactantsopt' => 60, 'Surfactantsharm' => 61, 'Phytoplanktonopt' => 62, 'Phytoplanktonharm' => 63, 'Remarko2' => 64, 'Remarko3' => 65, 'Remarkco2' => 66, 'Remarkph' => 67, 'Remarknh3' => 68, 'Remarkno2' => 69, 'Remarkno3' => 70, 'Remarkhno2' => 71, 'Remarkcl2' => 72, 'Remarkcl' => 73, 'Remarkh2s' => 74, 'Remarkzinc' => 75, 'Remarkcopper' => 76, 'Remarkiron' => 77, 'Remarklead' => 78, 'Remarkmercury' => 79, 'Remarkcadmium' => 80, 'Remarknickel' => 81, 'Remarkchromium' => 82, 'Remarkmanganese' => 83, 'Remarkarsenic' => 84, 'Remarkaluminum' => 85, 'Remarkcyanide' => 86, 'Remarkpcb' => 87, 'Remarkpesticide' => 88, 'Remarkturbidity' => 89, 'Remarkoilsrefined' => 90, 'Remarkdyes' => 91, 'Remarkphenols' => 92, 'Remarksurfactants' => 93, 'Remarkphytoplankton' => 94, 'Ts' => 95, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'dissolvedo2opt' => 2, 'dissolvedo2harm' => 3, 'ozoneopt' => 4, 'ozoneharm' => 5, 'carbondioxideopt' => 6, 'carbondioxideharm' => 7, 'phopt' => 8, 'phharm' => 9, 'ammoniaopt' => 10, 'ammoniaharm' => 11, 'nitriteopt' => 12, 'nitriteharm' => 13, 'nitrateopt' => 14, 'nitrateharm' => 15, 'nitrousacidopt' => 16, 'nitrousacidharm' => 17, 'chlorineopt' => 18, 'chlorineharm' => 19, 'chlorideopt' => 20, 'chlorideharm' => 21, 'hsulphateopt' => 22, 'hsulphateharm' => 23, 'zincopt' => 24, 'zincharm' => 25, 'copperopt' => 26, 'copperharm' => 27, 'ironopt' => 28, 'ironharm' => 29, 'leadopt' => 30, 'leadharm' => 31, 'mercuryopt' => 32, 'mercuryharm' => 33, 'cadmiumopt' => 34, 'cadmiumharm' => 35, 'nickelopt' => 36, 'nickelharm' => 37, 'chromiumopt' => 38, 'chromiumharm' => 39, 'manganeseopt' => 40, 'manganeseharm' => 41, 'arsenicopt' => 42, 'arsenicharm' => 43, 'aluminumopt' => 44, 'aluminumharm' => 45, 'cyanideopt' => 46, 'cyanideharm' => 47, 'pcbopt' => 48, 'pcbharm' => 49, 'pesticidesopt' => 50, 'pesticidesharm' => 51, 'turbidityopt' => 52, 'turbidityharm' => 53, 'oilsrefinedopt' => 54, 'oilsrefinedharm' => 55, 'dyesopt' => 56, 'dyesharm' => 57, 'phenolsopt' => 58, 'phenolsharm' => 59, 'surfactantsopt' => 60, 'surfactantsharm' => 61, 'phytoplanktonopt' => 62, 'phytoplanktonharm' => 63, 'remarko2' => 64, 'remarko3' => 65, 'remarkco2' => 66, 'remarkph' => 67, 'remarknh3' => 68, 'remarkno2' => 69, 'remarkno3' => 70, 'remarkhno2' => 71, 'remarkcl2' => 72, 'remarkcl' => 73, 'remarkh2s' => 74, 'remarkzinc' => 75, 'remarkcopper' => 76, 'remarkiron' => 77, 'remarklead' => 78, 'remarkmercury' => 79, 'remarkcadmium' => 80, 'remarknickel' => 81, 'remarkchromium' => 82, 'remarkmanganese' => 83, 'remarkarsenic' => 84, 'remarkaluminum' => 85, 'remarkcyanide' => 86, 'remarkpcb' => 87, 'remarkpesticide' => 88, 'remarkturbidity' => 89, 'remarkoilsrefined' => 90, 'remarkdyes' => 91, 'remarkphenols' => 92, 'remarksurfactants' => 93, 'remarkphytoplankton' => 94, 'ts' => 95, ),
        BasePeer::TYPE_COLNAME => array (WaterqualityPeer::AUTOCTR => 0, WaterqualityPeer::SPECCODE => 1, WaterqualityPeer::DISSOLVEDO2OPT => 2, WaterqualityPeer::DISSOLVEDO2HARM => 3, WaterqualityPeer::OZONEOPT => 4, WaterqualityPeer::OZONEHARM => 5, WaterqualityPeer::CARBONDIOXIDEOPT => 6, WaterqualityPeer::CARBONDIOXIDEHARM => 7, WaterqualityPeer::PHOPT => 8, WaterqualityPeer::PHHARM => 9, WaterqualityPeer::AMMONIAOPT => 10, WaterqualityPeer::AMMONIAHARM => 11, WaterqualityPeer::NITRITEOPT => 12, WaterqualityPeer::NITRITEHARM => 13, WaterqualityPeer::NITRATEOPT => 14, WaterqualityPeer::NITRATEHARM => 15, WaterqualityPeer::NITROUSACIDOPT => 16, WaterqualityPeer::NITROUSACIDHARM => 17, WaterqualityPeer::CHLORINEOPT => 18, WaterqualityPeer::CHLORINEHARM => 19, WaterqualityPeer::CHLORIDEOPT => 20, WaterqualityPeer::CHLORIDEHARM => 21, WaterqualityPeer::HSULPHATEOPT => 22, WaterqualityPeer::HSULPHATEHARM => 23, WaterqualityPeer::ZINCOPT => 24, WaterqualityPeer::ZINCHARM => 25, WaterqualityPeer::COPPEROPT => 26, WaterqualityPeer::COPPERHARM => 27, WaterqualityPeer::IRONOPT => 28, WaterqualityPeer::IRONHARM => 29, WaterqualityPeer::LEADOPT => 30, WaterqualityPeer::LEADHARM => 31, WaterqualityPeer::MERCURYOPT => 32, WaterqualityPeer::MERCURYHARM => 33, WaterqualityPeer::CADMIUMOPT => 34, WaterqualityPeer::CADMIUMHARM => 35, WaterqualityPeer::NICKELOPT => 36, WaterqualityPeer::NICKELHARM => 37, WaterqualityPeer::CHROMIUMOPT => 38, WaterqualityPeer::CHROMIUMHARM => 39, WaterqualityPeer::MANGANESEOPT => 40, WaterqualityPeer::MANGANESEHARM => 41, WaterqualityPeer::ARSENICOPT => 42, WaterqualityPeer::ARSENICHARM => 43, WaterqualityPeer::ALUMINUMOPT => 44, WaterqualityPeer::ALUMINUMHARM => 45, WaterqualityPeer::CYANIDEOPT => 46, WaterqualityPeer::CYANIDEHARM => 47, WaterqualityPeer::PCBOPT => 48, WaterqualityPeer::PCBHARM => 49, WaterqualityPeer::PESTICIDESOPT => 50, WaterqualityPeer::PESTICIDESHARM => 51, WaterqualityPeer::TURBIDITYOPT => 52, WaterqualityPeer::TURBIDITYHARM => 53, WaterqualityPeer::OILSREFINEDOPT => 54, WaterqualityPeer::OILSREFINEDHARM => 55, WaterqualityPeer::DYESOPT => 56, WaterqualityPeer::DYESHARM => 57, WaterqualityPeer::PHENOLSOPT => 58, WaterqualityPeer::PHENOLSHARM => 59, WaterqualityPeer::SURFACTANTSOPT => 60, WaterqualityPeer::SURFACTANTSHARM => 61, WaterqualityPeer::PHYTOPLANKTONOPT => 62, WaterqualityPeer::PHYTOPLANKTONHARM => 63, WaterqualityPeer::REMARKO2 => 64, WaterqualityPeer::REMARKO3 => 65, WaterqualityPeer::REMARKCO2 => 66, WaterqualityPeer::REMARKPH => 67, WaterqualityPeer::REMARKNH3 => 68, WaterqualityPeer::REMARKNO2 => 69, WaterqualityPeer::REMARKNO3 => 70, WaterqualityPeer::REMARKHNO2 => 71, WaterqualityPeer::REMARKCL2 => 72, WaterqualityPeer::REMARKCL => 73, WaterqualityPeer::REMARKH2S => 74, WaterqualityPeer::REMARKZINC => 75, WaterqualityPeer::REMARKCOPPER => 76, WaterqualityPeer::REMARKIRON => 77, WaterqualityPeer::REMARKLEAD => 78, WaterqualityPeer::REMARKMERCURY => 79, WaterqualityPeer::REMARKCADMIUM => 80, WaterqualityPeer::REMARKNICKEL => 81, WaterqualityPeer::REMARKCHROMIUM => 82, WaterqualityPeer::REMARKMANGANESE => 83, WaterqualityPeer::REMARKARSENIC => 84, WaterqualityPeer::REMARKALUMINUM => 85, WaterqualityPeer::REMARKCYANIDE => 86, WaterqualityPeer::REMARKPCB => 87, WaterqualityPeer::REMARKPESTICIDE => 88, WaterqualityPeer::REMARKTURBIDITY => 89, WaterqualityPeer::REMARKOILSREFINED => 90, WaterqualityPeer::REMARKDYES => 91, WaterqualityPeer::REMARKPHENOLS => 92, WaterqualityPeer::REMARKSURFACTANTS => 93, WaterqualityPeer::REMARKPHYTOPLANKTON => 94, WaterqualityPeer::TS => 95, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'DISSOLVEDO2OPT' => 2, 'DISSOLVEDO2HARM' => 3, 'OZONEOPT' => 4, 'OZONEHARM' => 5, 'CARBONDIOXIDEOPT' => 6, 'CARBONDIOXIDEHARM' => 7, 'PHOPT' => 8, 'PHHARM' => 9, 'AMMONIAOPT' => 10, 'AMMONIAHARM' => 11, 'NITRITEOPT' => 12, 'NITRITEHARM' => 13, 'NITRATEOPT' => 14, 'NITRATEHARM' => 15, 'NITROUSACIDOPT' => 16, 'NITROUSACIDHARM' => 17, 'CHLORINEOPT' => 18, 'CHLORINEHARM' => 19, 'CHLORIDEOPT' => 20, 'CHLORIDEHARM' => 21, 'HSULPHATEOPT' => 22, 'HSULPHATEHARM' => 23, 'ZINCOPT' => 24, 'ZINCHARM' => 25, 'COPPEROPT' => 26, 'COPPERHARM' => 27, 'IRONOPT' => 28, 'IRONHARM' => 29, 'LEADOPT' => 30, 'LEADHARM' => 31, 'MERCURYOPT' => 32, 'MERCURYHARM' => 33, 'CADMIUMOPT' => 34, 'CADMIUMHARM' => 35, 'NICKELOPT' => 36, 'NICKELHARM' => 37, 'CHROMIUMOPT' => 38, 'CHROMIUMHARM' => 39, 'MANGANESEOPT' => 40, 'MANGANESEHARM' => 41, 'ARSENICOPT' => 42, 'ARSENICHARM' => 43, 'ALUMINUMOPT' => 44, 'ALUMINUMHARM' => 45, 'CYANIDEOPT' => 46, 'CYANIDEHARM' => 47, 'PCBOPT' => 48, 'PCBHARM' => 49, 'PESTICIDESOPT' => 50, 'PESTICIDESHARM' => 51, 'TURBIDITYOPT' => 52, 'TURBIDITYHARM' => 53, 'OILSREFINEDOPT' => 54, 'OILSREFINEDHARM' => 55, 'DYESOPT' => 56, 'DYESHARM' => 57, 'PHENOLSOPT' => 58, 'PHENOLSHARM' => 59, 'SURFACTANTSOPT' => 60, 'SURFACTANTSHARM' => 61, 'PHYTOPLANKTONOPT' => 62, 'PHYTOPLANKTONHARM' => 63, 'REMARKO2' => 64, 'REMARKO3' => 65, 'REMARKCO2' => 66, 'REMARKPH' => 67, 'REMARKNH3' => 68, 'REMARKNO2' => 69, 'REMARKNO3' => 70, 'REMARKHNO2' => 71, 'REMARKCL2' => 72, 'REMARKCL' => 73, 'REMARKH2S' => 74, 'REMARKZINC' => 75, 'REMARKCOPPER' => 76, 'REMARKIRON' => 77, 'REMARKLEAD' => 78, 'REMARKMERCURY' => 79, 'REMARKCADMIUM' => 80, 'REMARKNICKEL' => 81, 'REMARKCHROMIUM' => 82, 'REMARKMANGANESE' => 83, 'REMARKARSENIC' => 84, 'REMARKALUMINUM' => 85, 'REMARKCYANIDE' => 86, 'REMARKPCB' => 87, 'REMARKPESTICIDE' => 88, 'REMARKTURBIDITY' => 89, 'REMARKOILSREFINED' => 90, 'REMARKDYES' => 91, 'REMARKPHENOLS' => 92, 'REMARKSURFACTANTS' => 93, 'REMARKPHYTOPLANKTON' => 94, 'TS' => 95, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'DissolvedO2Opt' => 2, 'DissolvedO2Harm' => 3, 'OzoneOpt' => 4, 'OzoneHarm' => 5, 'CarbonDioxideOpt' => 6, 'CarbonDioxideHarm' => 7, 'pHOpt' => 8, 'pHHarm' => 9, 'AmmoniaOpt' => 10, 'AmmoniaHarm' => 11, 'NitriteOpt' => 12, 'NitriteHarm' => 13, 'NitrateOpt' => 14, 'NitrateHarm' => 15, 'NitrousAcidOpt' => 16, 'NitrousAcidHarm' => 17, 'ChlorineOpt' => 18, 'ChlorineHarm' => 19, 'ChlorideOpt' => 20, 'ChlorideHarm' => 21, 'HSulphateOpt' => 22, 'HSulphateHarm' => 23, 'ZincOpt' => 24, 'ZincHarm' => 25, 'CopperOpt' => 26, 'CopperHarm' => 27, 'IronOpt' => 28, 'IronHarm' => 29, 'LeadOpt' => 30, 'LeadHarm' => 31, 'MercuryOpt' => 32, 'MercuryHarm' => 33, 'CadmiumOpt' => 34, 'CadmiumHarm' => 35, 'NickelOpt' => 36, 'NickelHarm' => 37, 'ChromiumOpt' => 38, 'ChromiumHarm' => 39, 'ManganeseOpt' => 40, 'ManganeseHarm' => 41, 'ArsenicOpt' => 42, 'ArsenicHarm' => 43, 'AluminumOpt' => 44, 'AluminumHarm' => 45, 'CyanideOpt' => 46, 'CyanideHarm' => 47, 'PCBOpt' => 48, 'PCBHarm' => 49, 'PesticidesOpt' => 50, 'PesticidesHarm' => 51, 'TurbidityOpt' => 52, 'TurbidityHarm' => 53, 'OilsRefinedOpt' => 54, 'OilsRefinedHarm' => 55, 'DyesOpt' => 56, 'DyesHarm' => 57, 'PhenolsOpt' => 58, 'PhenolsHarm' => 59, 'SurfactantsOpt' => 60, 'SurfactantsHarm' => 61, 'PhytoplanktonOpt' => 62, 'PhytoplanktonHarm' => 63, 'RemarkO2' => 64, 'RemarkO3' => 65, 'RemarkCO2' => 66, 'RemarkpH' => 67, 'RemarkNH3' => 68, 'RemarkNO2' => 69, 'RemarkNO3' => 70, 'RemarkHNO2' => 71, 'RemarkCL2' => 72, 'RemarkCL' => 73, 'RemarkH2S' => 74, 'RemarkZinc' => 75, 'RemarkCopper' => 76, 'RemarkIron' => 77, 'RemarkLead' => 78, 'RemarkMercury' => 79, 'RemarkCadmium' => 80, 'RemarkNickel' => 81, 'RemarkChromium' => 82, 'RemarkManganese' => 83, 'RemarkArsenic' => 84, 'RemarkAluminum' => 85, 'RemarkCyanide' => 86, 'RemarkPCB' => 87, 'RemarkPesticide' => 88, 'RemarkTurbidity' => 89, 'RemarkOilsRefined' => 90, 'RemarkDyes' => 91, 'RemarkPhenols' => 92, 'RemarkSurfactants' => 93, 'RemarkPhytoplankton' => 94, 'TS' => 95, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = WaterqualityPeer::getFieldNames($toType);
        $key = isset(WaterqualityPeer::$fieldKeys[$fromType][$name]) ? WaterqualityPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(WaterqualityPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, WaterqualityPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return WaterqualityPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. WaterqualityPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(WaterqualityPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(WaterqualityPeer::AUTOCTR);
            $criteria->addSelectColumn(WaterqualityPeer::SPECCODE);
            $criteria->addSelectColumn(WaterqualityPeer::DISSOLVEDO2OPT);
            $criteria->addSelectColumn(WaterqualityPeer::DISSOLVEDO2HARM);
            $criteria->addSelectColumn(WaterqualityPeer::OZONEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::OZONEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::CARBONDIOXIDEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::CARBONDIOXIDEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::PHOPT);
            $criteria->addSelectColumn(WaterqualityPeer::PHHARM);
            $criteria->addSelectColumn(WaterqualityPeer::AMMONIAOPT);
            $criteria->addSelectColumn(WaterqualityPeer::AMMONIAHARM);
            $criteria->addSelectColumn(WaterqualityPeer::NITRITEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::NITRITEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::NITRATEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::NITRATEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::NITROUSACIDOPT);
            $criteria->addSelectColumn(WaterqualityPeer::NITROUSACIDHARM);
            $criteria->addSelectColumn(WaterqualityPeer::CHLORINEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::CHLORINEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::CHLORIDEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::CHLORIDEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::HSULPHATEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::HSULPHATEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::ZINCOPT);
            $criteria->addSelectColumn(WaterqualityPeer::ZINCHARM);
            $criteria->addSelectColumn(WaterqualityPeer::COPPEROPT);
            $criteria->addSelectColumn(WaterqualityPeer::COPPERHARM);
            $criteria->addSelectColumn(WaterqualityPeer::IRONOPT);
            $criteria->addSelectColumn(WaterqualityPeer::IRONHARM);
            $criteria->addSelectColumn(WaterqualityPeer::LEADOPT);
            $criteria->addSelectColumn(WaterqualityPeer::LEADHARM);
            $criteria->addSelectColumn(WaterqualityPeer::MERCURYOPT);
            $criteria->addSelectColumn(WaterqualityPeer::MERCURYHARM);
            $criteria->addSelectColumn(WaterqualityPeer::CADMIUMOPT);
            $criteria->addSelectColumn(WaterqualityPeer::CADMIUMHARM);
            $criteria->addSelectColumn(WaterqualityPeer::NICKELOPT);
            $criteria->addSelectColumn(WaterqualityPeer::NICKELHARM);
            $criteria->addSelectColumn(WaterqualityPeer::CHROMIUMOPT);
            $criteria->addSelectColumn(WaterqualityPeer::CHROMIUMHARM);
            $criteria->addSelectColumn(WaterqualityPeer::MANGANESEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::MANGANESEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::ARSENICOPT);
            $criteria->addSelectColumn(WaterqualityPeer::ARSENICHARM);
            $criteria->addSelectColumn(WaterqualityPeer::ALUMINUMOPT);
            $criteria->addSelectColumn(WaterqualityPeer::ALUMINUMHARM);
            $criteria->addSelectColumn(WaterqualityPeer::CYANIDEOPT);
            $criteria->addSelectColumn(WaterqualityPeer::CYANIDEHARM);
            $criteria->addSelectColumn(WaterqualityPeer::PCBOPT);
            $criteria->addSelectColumn(WaterqualityPeer::PCBHARM);
            $criteria->addSelectColumn(WaterqualityPeer::PESTICIDESOPT);
            $criteria->addSelectColumn(WaterqualityPeer::PESTICIDESHARM);
            $criteria->addSelectColumn(WaterqualityPeer::TURBIDITYOPT);
            $criteria->addSelectColumn(WaterqualityPeer::TURBIDITYHARM);
            $criteria->addSelectColumn(WaterqualityPeer::OILSREFINEDOPT);
            $criteria->addSelectColumn(WaterqualityPeer::OILSREFINEDHARM);
            $criteria->addSelectColumn(WaterqualityPeer::DYESOPT);
            $criteria->addSelectColumn(WaterqualityPeer::DYESHARM);
            $criteria->addSelectColumn(WaterqualityPeer::PHENOLSOPT);
            $criteria->addSelectColumn(WaterqualityPeer::PHENOLSHARM);
            $criteria->addSelectColumn(WaterqualityPeer::SURFACTANTSOPT);
            $criteria->addSelectColumn(WaterqualityPeer::SURFACTANTSHARM);
            $criteria->addSelectColumn(WaterqualityPeer::PHYTOPLANKTONOPT);
            $criteria->addSelectColumn(WaterqualityPeer::PHYTOPLANKTONHARM);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKO2);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKO3);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCO2);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKPH);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKNH3);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKNO2);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKNO3);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKHNO2);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCL2);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCL);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKH2S);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKZINC);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCOPPER);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKIRON);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKLEAD);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKMERCURY);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCADMIUM);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKNICKEL);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCHROMIUM);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKMANGANESE);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKARSENIC);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKALUMINUM);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKCYANIDE);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKPCB);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKPESTICIDE);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKTURBIDITY);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKOILSREFINED);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKDYES);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKPHENOLS);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKSURFACTANTS);
            $criteria->addSelectColumn(WaterqualityPeer::REMARKPHYTOPLANKTON);
            $criteria->addSelectColumn(WaterqualityPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.DissolvedO2Opt');
            $criteria->addSelectColumn($alias . '.DissolvedO2Harm');
            $criteria->addSelectColumn($alias . '.OzoneOpt');
            $criteria->addSelectColumn($alias . '.OzoneHarm');
            $criteria->addSelectColumn($alias . '.CarbonDioxideOpt');
            $criteria->addSelectColumn($alias . '.CarbonDioxideHarm');
            $criteria->addSelectColumn($alias . '.pHOpt');
            $criteria->addSelectColumn($alias . '.pHHarm');
            $criteria->addSelectColumn($alias . '.AmmoniaOpt');
            $criteria->addSelectColumn($alias . '.AmmoniaHarm');
            $criteria->addSelectColumn($alias . '.NitriteOpt');
            $criteria->addSelectColumn($alias . '.NitriteHarm');
            $criteria->addSelectColumn($alias . '.NitrateOpt');
            $criteria->addSelectColumn($alias . '.NitrateHarm');
            $criteria->addSelectColumn($alias . '.NitrousAcidOpt');
            $criteria->addSelectColumn($alias . '.NitrousAcidHarm');
            $criteria->addSelectColumn($alias . '.ChlorineOpt');
            $criteria->addSelectColumn($alias . '.ChlorineHarm');
            $criteria->addSelectColumn($alias . '.ChlorideOpt');
            $criteria->addSelectColumn($alias . '.ChlorideHarm');
            $criteria->addSelectColumn($alias . '.HSulphateOpt');
            $criteria->addSelectColumn($alias . '.HSulphateHarm');
            $criteria->addSelectColumn($alias . '.ZincOpt');
            $criteria->addSelectColumn($alias . '.ZincHarm');
            $criteria->addSelectColumn($alias . '.CopperOpt');
            $criteria->addSelectColumn($alias . '.CopperHarm');
            $criteria->addSelectColumn($alias . '.IronOpt');
            $criteria->addSelectColumn($alias . '.IronHarm');
            $criteria->addSelectColumn($alias . '.LeadOpt');
            $criteria->addSelectColumn($alias . '.LeadHarm');
            $criteria->addSelectColumn($alias . '.MercuryOpt');
            $criteria->addSelectColumn($alias . '.MercuryHarm');
            $criteria->addSelectColumn($alias . '.CadmiumOpt');
            $criteria->addSelectColumn($alias . '.CadmiumHarm');
            $criteria->addSelectColumn($alias . '.NickelOpt');
            $criteria->addSelectColumn($alias . '.NickelHarm');
            $criteria->addSelectColumn($alias . '.ChromiumOpt');
            $criteria->addSelectColumn($alias . '.ChromiumHarm');
            $criteria->addSelectColumn($alias . '.ManganeseOpt');
            $criteria->addSelectColumn($alias . '.ManganeseHarm');
            $criteria->addSelectColumn($alias . '.ArsenicOpt');
            $criteria->addSelectColumn($alias . '.ArsenicHarm');
            $criteria->addSelectColumn($alias . '.AluminumOpt');
            $criteria->addSelectColumn($alias . '.AluminumHarm');
            $criteria->addSelectColumn($alias . '.CyanideOpt');
            $criteria->addSelectColumn($alias . '.CyanideHarm');
            $criteria->addSelectColumn($alias . '.PCBOpt');
            $criteria->addSelectColumn($alias . '.PCBHarm');
            $criteria->addSelectColumn($alias . '.PesticidesOpt');
            $criteria->addSelectColumn($alias . '.PesticidesHarm');
            $criteria->addSelectColumn($alias . '.TurbidityOpt');
            $criteria->addSelectColumn($alias . '.TurbidityHarm');
            $criteria->addSelectColumn($alias . '.OilsRefinedOpt');
            $criteria->addSelectColumn($alias . '.OilsRefinedHarm');
            $criteria->addSelectColumn($alias . '.DyesOpt');
            $criteria->addSelectColumn($alias . '.DyesHarm');
            $criteria->addSelectColumn($alias . '.PhenolsOpt');
            $criteria->addSelectColumn($alias . '.PhenolsHarm');
            $criteria->addSelectColumn($alias . '.SurfactantsOpt');
            $criteria->addSelectColumn($alias . '.SurfactantsHarm');
            $criteria->addSelectColumn($alias . '.PhytoplanktonOpt');
            $criteria->addSelectColumn($alias . '.PhytoplanktonHarm');
            $criteria->addSelectColumn($alias . '.RemarkO2');
            $criteria->addSelectColumn($alias . '.RemarkO3');
            $criteria->addSelectColumn($alias . '.RemarkCO2');
            $criteria->addSelectColumn($alias . '.RemarkpH');
            $criteria->addSelectColumn($alias . '.RemarkNH3');
            $criteria->addSelectColumn($alias . '.RemarkNO2');
            $criteria->addSelectColumn($alias . '.RemarkNO3');
            $criteria->addSelectColumn($alias . '.RemarkHNO2');
            $criteria->addSelectColumn($alias . '.RemarkCL2');
            $criteria->addSelectColumn($alias . '.RemarkCL');
            $criteria->addSelectColumn($alias . '.RemarkH2S');
            $criteria->addSelectColumn($alias . '.RemarkZinc');
            $criteria->addSelectColumn($alias . '.RemarkCopper');
            $criteria->addSelectColumn($alias . '.RemarkIron');
            $criteria->addSelectColumn($alias . '.RemarkLead');
            $criteria->addSelectColumn($alias . '.RemarkMercury');
            $criteria->addSelectColumn($alias . '.RemarkCadmium');
            $criteria->addSelectColumn($alias . '.RemarkNickel');
            $criteria->addSelectColumn($alias . '.RemarkChromium');
            $criteria->addSelectColumn($alias . '.RemarkManganese');
            $criteria->addSelectColumn($alias . '.RemarkArsenic');
            $criteria->addSelectColumn($alias . '.RemarkAluminum');
            $criteria->addSelectColumn($alias . '.RemarkCyanide');
            $criteria->addSelectColumn($alias . '.RemarkPCB');
            $criteria->addSelectColumn($alias . '.RemarkPesticide');
            $criteria->addSelectColumn($alias . '.RemarkTurbidity');
            $criteria->addSelectColumn($alias . '.RemarkOilsRefined');
            $criteria->addSelectColumn($alias . '.RemarkDyes');
            $criteria->addSelectColumn($alias . '.RemarkPhenols');
            $criteria->addSelectColumn($alias . '.RemarkSurfactants');
            $criteria->addSelectColumn($alias . '.RemarkPhytoplankton');
            $criteria->addSelectColumn($alias . '.TS');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(WaterqualityPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            WaterqualityPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(WaterqualityPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Waterquality
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = WaterqualityPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return WaterqualityPeer::populateObjects(WaterqualityPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            WaterqualityPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(WaterqualityPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Waterquality $obj A Waterquality object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSpeccode();
            } // if key === null
            WaterqualityPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Waterquality object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Waterquality) {
                $key = (string) $value->getSpeccode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Waterquality object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(WaterqualityPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Waterquality Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(WaterqualityPeer::$instances[$key])) {
                return WaterqualityPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (WaterqualityPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        WaterqualityPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to waterquality
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol + 1] === null) {
            return null;
        }

        return (string) $row[$startcol + 1];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol + 1];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = WaterqualityPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = WaterqualityPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = WaterqualityPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WaterqualityPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Waterquality object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = WaterqualityPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = WaterqualityPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + WaterqualityPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WaterqualityPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            WaterqualityPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(WaterqualityPeer::DATABASE_NAME)->getTable(WaterqualityPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWaterqualityPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWaterqualityPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \WaterqualityTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return WaterqualityPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Waterquality or Criteria object.
     *
     * @param      mixed $values Criteria or Waterquality object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Waterquality object
        }


        // Set the correct dbName
        $criteria->setDbName(WaterqualityPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Waterquality or Criteria object.
     *
     * @param      mixed $values Criteria or Waterquality object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(WaterqualityPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(WaterqualityPeer::SPECCODE);
            $value = $criteria->remove(WaterqualityPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(WaterqualityPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(WaterqualityPeer::TABLE_NAME);
            }

        } else { // $values is Waterquality object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(WaterqualityPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the waterquality table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(WaterqualityPeer::TABLE_NAME, $con, WaterqualityPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WaterqualityPeer::clearInstancePool();
            WaterqualityPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Waterquality or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Waterquality object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            WaterqualityPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Waterquality) { // it's a model object
            // invalidate the cache for this single object
            WaterqualityPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WaterqualityPeer::DATABASE_NAME);
            $criteria->add(WaterqualityPeer::SPECCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                WaterqualityPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(WaterqualityPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            WaterqualityPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Waterquality object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Waterquality $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(WaterqualityPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(WaterqualityPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(WaterqualityPeer::DATABASE_NAME, WaterqualityPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Waterquality
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = WaterqualityPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(WaterqualityPeer::DATABASE_NAME);
        $criteria->add(WaterqualityPeer::SPECCODE, $pk);

        $v = WaterqualityPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Waterquality[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(WaterqualityPeer::DATABASE_NAME);
            $criteria->add(WaterqualityPeer::SPECCODE, $pks, Criteria::IN);
            $objs = WaterqualityPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWaterqualityPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWaterqualityPeer::buildTableMap();

