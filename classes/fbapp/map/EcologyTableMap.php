<?php



/**
 * This class defines the structure of the 'ecology' table.
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
class EcologyTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.EcologyTableMap';

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
        $this->setName('ecology');
        $this->setPhpName('Ecology');
        $this->setClassname('Ecology');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('EcologyRefNo', 'Ecologyrefno', 'INTEGER', false, null, null);
        $this->addColumn('HabitatsRef', 'Habitatsref', 'INTEGER', false, null, null);
        $this->addColumn('Neritic', 'Neritic', 'TINYINT', false, null, null);
        $this->addColumn('SupraLittoralZone', 'Supralittoralzone', 'TINYINT', false, null, null);
        $this->addColumn('Saltmarshes', 'Saltmarshes', 'TINYINT', false, null, null);
        $this->addColumn('LittoralZone', 'Littoralzone', 'TINYINT', false, null, null);
        $this->addColumn('TidePools', 'Tidepools', 'TINYINT', false, null, null);
        $this->addColumn('Intertidal', 'Intertidal', 'TINYINT', false, null, null);
        $this->addColumn('SubLittoral', 'Sublittoral', 'TINYINT', false, null, null);
        $this->addColumn('Caves', 'Caves', 'TINYINT', false, null, null);
        $this->addColumn('Oceanic', 'Oceanic', 'TINYINT', false, null, null);
        $this->addColumn('Epipelagic', 'Epipelagic', 'TINYINT', false, null, null);
        $this->addColumn('Mesopelagic', 'Mesopelagic', 'TINYINT', false, null, null);
        $this->addColumn('Bathypelagic', 'Bathypelagic', 'TINYINT', false, null, null);
        $this->addColumn('Abyssopelagic', 'Abyssopelagic', 'TINYINT', false, null, null);
        $this->addColumn('Hadopelagic', 'Hadopelagic', 'TINYINT', false, null, null);
        $this->addColumn('Estuaries', 'Estuaries', 'TINYINT', false, null, null);
        $this->addColumn('Mangroves', 'Mangroves', 'TINYINT', false, null, null);
        $this->addColumn('MarshesSwamps', 'Marshesswamps', 'TIMESTAMP', false, null, null);
        $this->addColumn('CaveAnchialine', 'Caveanchialine', 'TINYINT', false, null, null);
        $this->addColumn('Stream', 'Stream', 'TINYINT', false, null, null);
        $this->addColumn('Lakes', 'Lakes', 'TINYINT', false, null, null);
        $this->addColumn('Cave', 'Cave', 'TINYINT', false, null, null);
        $this->addColumn('Cave2', 'Cave2', 'TINYINT', false, null, null);
        $this->addColumn('Herbivory2', 'Herbivory2', 'VARCHAR', false, 42, null);
        $this->addColumn('HerbivoryRef', 'Herbivoryref', 'INTEGER', false, null, null);
        $this->addColumn('FeedingType', 'Feedingtype', 'VARCHAR', false, 42, null);
        $this->addColumn('FeedingTypeRef', 'Feedingtyperef', 'INTEGER', false, null, null);
        $this->addColumn('DietTroph', 'Diettroph', 'DOUBLE', false, null, null);
        $this->addColumn('DietSeTroph', 'Dietsetroph', 'DOUBLE', false, null, null);
        $this->addColumn('DietTLu', 'Diettlu', 'DOUBLE', false, null, null);
        $this->addColumn('DietseTLu', 'Dietsetlu', 'DOUBLE', false, null, null);
        $this->addColumn('DietRemark', 'Dietremark', 'VARCHAR', false, 115, null);
        $this->addColumn('DietRef', 'Dietref', 'INTEGER', false, null, null);
        $this->addColumn('FoodTroph', 'Foodtroph', 'DOUBLE', false, null, null);
        $this->addColumn('FoodSeTroph', 'Foodsetroph', 'DOUBLE', false, null, null);
        $this->addColumn('FoodRemark', 'Foodremark', 'VARCHAR', false, 115, null);
        $this->addColumn('FoodRef', 'Foodref', 'INTEGER', false, null, null);
        $this->addColumn('AddRems', 'Addrems', 'CLOB', false, null, null);
        $this->addColumn('AssociationRef', 'Associationref', 'INTEGER', false, null, null);
        $this->addColumn('Parasitism', 'Parasitism', 'TINYINT', false, null, null);
        $this->addColumn('Solitary', 'Solitary', 'TINYINT', false, null, null);
        $this->addColumn('Symbiosis', 'Symbiosis', 'TINYINT', false, null, null);
        $this->addColumn('Symphorism', 'Symphorism', 'TINYINT', false, null, null);
        $this->addColumn('Commensalism', 'Commensalism', 'TINYINT', false, null, null);
        $this->addColumn('Mutualism', 'Mutualism', 'TINYINT', false, null, null);
        $this->addColumn('Epiphytic', 'Epiphytic', 'TINYINT', false, null, null);
        $this->addColumn('Schooling', 'Schooling', 'TINYINT', false, null, null);
        $this->addColumn('SchoolingFrequency', 'Schoolingfrequency', 'VARCHAR', false, 9, null);
        $this->addColumn('SchoolingLifestage', 'Schoolinglifestage', 'VARCHAR', false, 20, null);
        $this->addColumn('Shoaling', 'Shoaling', 'TINYINT', false, null, null);
        $this->addColumn('ShoalingFrequency', 'Shoalingfrequency', 'VARCHAR', false, 9, null);
        $this->addColumn('ShoalingLifestage', 'Shoalinglifestage', 'VARCHAR', false, 20, null);
        $this->addColumn('SchoolShoalRef', 'Schoolshoalref', 'INTEGER', false, null, null);
        $this->addColumn('AssociationsWith', 'Associationswith', 'VARCHAR', false, 255, null);
        $this->addColumn('AssociationsRemarks', 'Associationsremarks', 'CLOB', false, null, null);
        $this->addColumn('OutsideHost', 'Outsidehost', 'TINYINT', false, null, null);
        $this->addColumn('OHRemarks', 'Ohremarks', 'VARCHAR', false, 255, null);
        $this->addColumn('InsideHost', 'Insidehost', 'TINYINT', false, null, null);
        $this->addColumn('IHRemarks', 'Ihremarks', 'VARCHAR', false, 255, null);
        $this->addColumn('SubstrateRef', 'Substrateref', 'INTEGER', false, null, null);
        $this->addColumn('Benthic', 'Benthic', 'TINYINT', false, null, null);
        $this->addColumn('Sessile', 'Sessile', 'TINYINT', false, null, null);
        $this->addColumn('Mobile', 'Mobile', 'TINYINT', false, null, null);
        $this->addColumn('Demersal', 'Demersal', 'TINYINT', false, null, null);
        $this->addColumn('Endofauna', 'Endofauna', 'TINYINT', false, null, null);
        $this->addColumn('Pelagic', 'Pelagic', 'TINYINT', false, null, null);
        $this->addColumn('Megabenthos', 'Megabenthos', 'TINYINT', false, null, null);
        $this->addColumn('Macrobenthos', 'Macrobenthos', 'TINYINT', false, null, null);
        $this->addColumn('Meiobenthos', 'Meiobenthos', 'TINYINT', false, null, null);
        $this->addColumn('SoftBottom', 'Softbottom', 'TINYINT', false, null, null);
        $this->addColumn('Sand', 'Sand', 'TINYINT', false, null, null);
        $this->addColumn('Coarse', 'Coarse', 'TINYINT', false, null, null);
        $this->addColumn('Fine', 'Fine', 'TINYINT', false, null, null);
        $this->addColumn('Level', 'Level', 'TINYINT', false, null, null);
        $this->addColumn('Sloping', 'Sloping', 'TINYINT', false, null, null);
        $this->addColumn('Silt', 'Silt', 'TINYINT', false, null, null);
        $this->addColumn('Mud', 'Mud', 'TINYINT', false, null, null);
        $this->addColumn('Ooze', 'Ooze', 'TINYINT', false, null, null);
        $this->addColumn('Detritus', 'Detritus', 'TINYINT', false, null, null);
        $this->addColumn('Organic', 'Organic', 'TINYINT', false, null, null);
        $this->addColumn('HardBottom', 'Hardbottom', 'TINYINT', false, null, null);
        $this->addColumn('Rocky', 'Rocky', 'TINYINT', false, null, null);
        $this->addColumn('Rubble', 'Rubble', 'TINYINT', false, null, null);
        $this->addColumn('SpecialHabitatRef', 'Specialhabitatref', 'INTEGER', false, null, null);
        $this->addColumn('Macrophyte', 'Macrophyte', 'TINYINT', false, null, null);
        $this->addColumn('BedsBivalve', 'Bedsbivalve', 'TINYINT', false, null, null);
        $this->addColumn('BedsRock', 'Bedsrock', 'TINYINT', false, null, null);
        $this->addColumn('SeaGrassBeds', 'Seagrassbeds', 'TINYINT', false, null, null);
        $this->addColumn('BedsOthers', 'Bedsothers', 'TINYINT', false, null, null);
        $this->addColumn('CoralReefs', 'Coralreefs', 'TINYINT', false, null, null);
        $this->addColumn('ReefExclusive', 'Reefexclusive', 'TINYINT', false, null, null);
        $this->addColumn('DropOffs', 'Dropoffs', 'TINYINT', false, null, null);
        $this->addColumn('ReefFlats', 'Reefflats', 'TINYINT', false, null, null);
        $this->addColumn('Lagoons', 'Lagoons', 'TINYINT', false, null, null);
        $this->addColumn('Burrows', 'Burrows', 'TINYINT', false, null, null);
        $this->addColumn('Tunnels', 'Tunnels', 'TINYINT', false, null, null);
        $this->addColumn('Crevices', 'Crevices', 'TINYINT', false, null, null);
        $this->addColumn('Vents', 'Vents', 'TINYINT', false, null, null);
        $this->addColumn('Seamounts', 'Seamounts', 'TINYINT', false, null, null);
        $this->addColumn('DeepWaterCorals', 'Deepwatercorals', 'TINYINT', false, null, null);
        $this->addColumn('Vegetation', 'Vegetation', 'TINYINT', false, null, null);
        $this->addColumn('Leaves', 'Leaves', 'TINYINT', false, null, null);
        $this->addColumn('Stems', 'Stems', 'TINYINT', false, null, null);
        $this->addColumn('Roots', 'Roots', 'TINYINT', false, null, null);
        $this->addColumn('Driftwood', 'Driftwood', 'TINYINT', false, null, null);
        $this->addColumn('OInverterbrates', 'Oinverterbrates', 'TINYINT', false, null, null);
        $this->addColumn('OIRemarks', 'Oiremarks', 'VARCHAR', false, 255, null);
        $this->addColumn('Verterbrates', 'Verterbrates', 'TINYINT', false, null, null);
        $this->addColumn('VRemarks', 'Vremarks', 'VARCHAR', false, 50, null);
        $this->addColumn('Pilings', 'Pilings', 'TINYINT', false, null, null);
        $this->addColumn('BoatHulls', 'Boathulls', 'TINYINT', false, null, null);
        $this->addColumn('Corals', 'Corals', 'TINYINT', false, null, null);
        $this->addColumn('SoftCorals', 'Softcorals', 'TINYINT', false, null, null);
        $this->addColumn('OnPolyp', 'Onpolyp', 'TINYINT', false, null, null);
        $this->addColumn('BetweenPolyps', 'Betweenpolyps', 'TINYINT', false, null, null);
        $this->addColumn('HardCorals', 'Hardcorals', 'TINYINT', false, null, null);
        $this->addColumn('OnExoskeleton', 'Onexoskeleton', 'TINYINT', false, null, null);
        $this->addColumn('InterstitialSpaces', 'Interstitialspaces', 'TINYINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // EcologyTableMap
