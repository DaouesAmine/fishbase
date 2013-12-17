<?php



/**
 * This class defines the structure of the 'waterquality' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.fbapp.map
 */
class WaterqualityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.WaterqualityTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('waterquality');
        $this->setPhpName('Waterquality');
        $this->setClassname('Waterquality');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Speccode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('DissolvedO2Opt', 'Dissolvedo2opt', 'VARCHAR', false, 50, null);
        $this->addColumn('DissolvedO2Harm', 'Dissolvedo2harm', 'VARCHAR', false, 50, null);
        $this->addColumn('OzoneOpt', 'Ozoneopt', 'VARCHAR', false, 50, null);
        $this->addColumn('OzoneHarm', 'Ozoneharm', 'VARCHAR', false, 50, null);
        $this->addColumn('CarbonDioxideOpt', 'Carbondioxideopt', 'VARCHAR', false, 50, null);
        $this->addColumn('CarbonDioxideHarm', 'Carbondioxideharm', 'VARCHAR', false, 50, null);
        $this->addColumn('pHOpt', 'Phopt', 'VARCHAR', false, 50, null);
        $this->addColumn('pHHarm', 'Phharm', 'VARCHAR', false, 50, null);
        $this->addColumn('AmmoniaOpt', 'Ammoniaopt', 'VARCHAR', false, 50, null);
        $this->addColumn('AmmoniaHarm', 'Ammoniaharm', 'VARCHAR', false, 50, null);
        $this->addColumn('NitriteOpt', 'Nitriteopt', 'VARCHAR', false, 50, null);
        $this->addColumn('NitriteHarm', 'Nitriteharm', 'VARCHAR', false, 50, null);
        $this->addColumn('NitrateOpt', 'Nitrateopt', 'VARCHAR', false, 50, null);
        $this->addColumn('NitrateHarm', 'Nitrateharm', 'VARCHAR', false, 50, null);
        $this->addColumn('NitrousAcidOpt', 'Nitrousacidopt', 'VARCHAR', false, 50, null);
        $this->addColumn('NitrousAcidHarm', 'Nitrousacidharm', 'VARCHAR', false, 50, null);
        $this->addColumn('ChlorineOpt', 'Chlorineopt', 'VARCHAR', false, 50, null);
        $this->addColumn('ChlorineHarm', 'Chlorineharm', 'VARCHAR', false, 50, null);
        $this->addColumn('ChlorideOpt', 'Chlorideopt', 'VARCHAR', false, 50, null);
        $this->addColumn('ChlorideHarm', 'Chlorideharm', 'VARCHAR', false, 50, null);
        $this->addColumn('HSulphateOpt', 'Hsulphateopt', 'VARCHAR', false, 50, null);
        $this->addColumn('HSulphateHarm', 'Hsulphateharm', 'VARCHAR', false, 50, null);
        $this->addColumn('ZincOpt', 'Zincopt', 'VARCHAR', false, 50, null);
        $this->addColumn('ZincHarm', 'Zincharm', 'VARCHAR', false, 50, null);
        $this->addColumn('CopperOpt', 'Copperopt', 'VARCHAR', false, 50, null);
        $this->addColumn('CopperHarm', 'Copperharm', 'VARCHAR', false, 50, null);
        $this->addColumn('IronOpt', 'Ironopt', 'VARCHAR', false, 50, null);
        $this->addColumn('IronHarm', 'Ironharm', 'VARCHAR', false, 50, null);
        $this->addColumn('LeadOpt', 'Leadopt', 'VARCHAR', false, 50, null);
        $this->addColumn('LeadHarm', 'Leadharm', 'VARCHAR', false, 50, null);
        $this->addColumn('MercuryOpt', 'Mercuryopt', 'VARCHAR', false, 50, null);
        $this->addColumn('MercuryHarm', 'Mercuryharm', 'VARCHAR', false, 50, null);
        $this->addColumn('CadmiumOpt', 'Cadmiumopt', 'VARCHAR', false, 50, null);
        $this->addColumn('CadmiumHarm', 'Cadmiumharm', 'VARCHAR', false, 50, null);
        $this->addColumn('NickelOpt', 'Nickelopt', 'VARCHAR', false, 50, null);
        $this->addColumn('NickelHarm', 'Nickelharm', 'VARCHAR', false, 50, null);
        $this->addColumn('ChromiumOpt', 'Chromiumopt', 'VARCHAR', false, 50, null);
        $this->addColumn('ChromiumHarm', 'Chromiumharm', 'VARCHAR', false, 50, null);
        $this->addColumn('ManganeseOpt', 'Manganeseopt', 'VARCHAR', false, 50, null);
        $this->addColumn('ManganeseHarm', 'Manganeseharm', 'VARCHAR', false, 50, null);
        $this->addColumn('ArsenicOpt', 'Arsenicopt', 'VARCHAR', false, 50, null);
        $this->addColumn('ArsenicHarm', 'Arsenicharm', 'VARCHAR', false, 50, null);
        $this->addColumn('AluminumOpt', 'Aluminumopt', 'VARCHAR', false, 50, null);
        $this->addColumn('AluminumHarm', 'Aluminumharm', 'VARCHAR', false, 50, null);
        $this->addColumn('CyanideOpt', 'Cyanideopt', 'VARCHAR', false, 50, null);
        $this->addColumn('CyanideHarm', 'Cyanideharm', 'VARCHAR', false, 50, null);
        $this->addColumn('PCBOpt', 'Pcbopt', 'VARCHAR', false, 50, null);
        $this->addColumn('PCBHarm', 'Pcbharm', 'VARCHAR', false, 50, null);
        $this->addColumn('PesticidesOpt', 'Pesticidesopt', 'VARCHAR', false, 50, null);
        $this->addColumn('PesticidesHarm', 'Pesticidesharm', 'VARCHAR', false, 50, null);
        $this->addColumn('TurbidityOpt', 'Turbidityopt', 'VARCHAR', false, 50, null);
        $this->addColumn('TurbidityHarm', 'Turbidityharm', 'VARCHAR', false, 50, null);
        $this->addColumn('OilsRefinedOpt', 'Oilsrefinedopt', 'VARCHAR', false, 50, null);
        $this->addColumn('OilsRefinedHarm', 'Oilsrefinedharm', 'VARCHAR', false, 50, null);
        $this->addColumn('DyesOpt', 'Dyesopt', 'VARCHAR', false, 50, null);
        $this->addColumn('DyesHarm', 'Dyesharm', 'VARCHAR', false, 50, null);
        $this->addColumn('PhenolsOpt', 'Phenolsopt', 'VARCHAR', false, 50, null);
        $this->addColumn('PhenolsHarm', 'Phenolsharm', 'VARCHAR', false, 50, null);
        $this->addColumn('SurfactantsOpt', 'Surfactantsopt', 'VARCHAR', false, 50, null);
        $this->addColumn('SurfactantsHarm', 'Surfactantsharm', 'VARCHAR', false, 50, null);
        $this->addColumn('PhytoplanktonOpt', 'Phytoplanktonopt', 'VARCHAR', false, 50, null);
        $this->addColumn('PhytoplanktonHarm', 'Phytoplanktonharm', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkO2', 'Remarko2', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkO3', 'Remarko3', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkCO2', 'Remarkco2', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkpH', 'Remarkph', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkNH3', 'Remarknh3', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkNO2', 'Remarkno2', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkNO3', 'Remarkno3', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkHNO2', 'Remarkhno2', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkCL2', 'Remarkcl2', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkCL', 'Remarkcl', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkH2S', 'Remarkh2s', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkZinc', 'Remarkzinc', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkCopper', 'Remarkcopper', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkIron', 'Remarkiron', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkLead', 'Remarklead', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkMercury', 'Remarkmercury', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkCadmium', 'Remarkcadmium', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkNickel', 'Remarknickel', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkChromium', 'Remarkchromium', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkManganese', 'Remarkmanganese', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkArsenic', 'Remarkarsenic', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkAluminum', 'Remarkaluminum', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkCyanide', 'Remarkcyanide', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkPCB', 'Remarkpcb', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkPesticide', 'Remarkpesticide', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkTurbidity', 'Remarkturbidity', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkOilsRefined', 'Remarkoilsrefined', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkDyes', 'Remarkdyes', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkPhenols', 'Remarkphenols', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkSurfactants', 'Remarksurfactants', 'VARCHAR', false, 50, null);
        $this->addColumn('RemarkPhytoplankton', 'Remarkphytoplankton', 'VARCHAR', false, 50, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WaterqualityTableMap
