<?php



/**
 * This class defines the structure of the 'fubh' table.
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
class FubhTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FubhTableMap';

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
        $this->setName('fubh');
        $this->setPhpName('Fubh');
        $this->setClassname('Fubh');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('print_date_bySkit', 'PrintDateByskit', 'TIMESTAMP', false, null, null);
        $this->addColumn('active', 'Active', 'BOOLEAN', false, 1, null);
        $this->addPrimaryKey('Period', 'Period', 'TIMESTAMP', true, null, null);
        $this->addColumn('extant_finfish_1', 'ExtantFinfish1', 'INTEGER', false, null, 0);
        $this->addColumn('extant_finfish_2', 'ExtantFinfish2', 'DOUBLE', false, null, 0);
        $this->addColumn('extant_finfish_3', 'ExtantFinfish3', 'INTEGER', false, null, 0);
        $this->addColumn('extant_finfish_4', 'ExtantFinfish4', 'DOUBLE', false, null, 0);
        $this->addColumn('extant_finfish_5', 'ExtantFinfish5', 'CLOB', false, null, null);
        $this->addColumn('used_fisheries_1', 'UsedFisheries1', 'INTEGER', false, null, 0);
        $this->addColumn('used_fisheries_2', 'UsedFisheries2', 'DOUBLE', false, null, 0);
        $this->addColumn('used_fisheries_3', 'UsedFisheries3', 'INTEGER', false, null, 0);
        $this->addColumn('used_fisheries_4', 'UsedFisheries4', 'DOUBLE', false, null, 0);
        $this->addColumn('used_fisheries_5', 'UsedFisheries5', 'CLOB', false, null, null);
        $this->addColumn('used_aquac_1', 'UsedAquac1', 'INTEGER', false, null, 0);
        $this->addColumn('used_aquac_2', 'UsedAquac2', 'DOUBLE', false, null, 0);
        $this->addColumn('used_aquac_3', 'UsedAquac3', 'INTEGER', false, null, 0);
        $this->addColumn('used_aquac_4', 'UsedAquac4', 'DOUBLE', false, null, 0);
        $this->addColumn('used_aquac_5', 'UsedAquac5', 'CLOB', false, null, null);
        $this->addColumn('used_bait_1', 'UsedBait1', 'INTEGER', false, null, 0);
        $this->addColumn('used_bait_2', 'UsedBait2', 'DOUBLE', false, null, 0);
        $this->addColumn('used_bait_3', 'UsedBait3', 'INTEGER', false, null, 0);
        $this->addColumn('used_bait_4', 'UsedBait4', 'DOUBLE', false, null, 0);
        $this->addColumn('used_bait_5', 'UsedBait5', 'CLOB', false, null, null);
        $this->addColumn('used_trade_1', 'UsedTrade1', 'INTEGER', false, null, 0);
        $this->addColumn('used_trade_2', 'UsedTrade2', 'DOUBLE', false, null, 0);
        $this->addColumn('used_trade_3', 'UsedTrade3', 'INTEGER', false, null, 0);
        $this->addColumn('used_trade_4', 'UsedTrade4', 'DOUBLE', false, null, 0);
        $this->addColumn('used_trade_5', 'UsedTrade5', 'CLOB', false, null, null);
        $this->addColumn('trade_marine_1', 'TradeMarine1', 'INTEGER', false, null, 0);
        $this->addColumn('trade_marine_2', 'TradeMarine2', 'DOUBLE', false, null, 0);
        $this->addColumn('trade_marine_3', 'TradeMarine3', 'INTEGER', false, null, 0);
        $this->addColumn('trade_marine_4', 'TradeMarine4', 'DOUBLE', false, null, 0);
        $this->addColumn('trade_marine_5', 'TradeMarine5', 'CLOB', false, null, null);
        $this->addColumn('trade_fresh_1', 'TradeFresh1', 'INTEGER', false, null, 0);
        $this->addColumn('trade_fresh_2', 'TradeFresh2', 'DOUBLE', false, null, 0);
        $this->addColumn('trade_fresh_3', 'TradeFresh3', 'INTEGER', false, null, 0);
        $this->addColumn('trade_fresh_4', 'TradeFresh4', 'DOUBLE', false, null, 0);
        $this->addColumn('trade_fresh_5', 'TradeFresh5', 'CLOB', false, null, null);
        $this->addColumn('trade_bred_1', 'TradeBred1', 'INTEGER', false, null, 0);
        $this->addColumn('trade_bred_2', 'TradeBred2', 'DOUBLE', false, null, 0);
        $this->addColumn('trade_bred_3', 'TradeBred3', 'INTEGER', false, null, 0);
        $this->addColumn('trade_bred_4', 'TradeBred4', 'DOUBLE', false, null, 0);
        $this->addColumn('trade_bred_5', 'TradeBred5', 'CLOB', false, null, null);
        $this->addColumn('used_sport_1', 'UsedSport1', 'INTEGER', false, null, 0);
        $this->addColumn('used_sport_2', 'UsedSport2', 'DOUBLE', false, null, 0);
        $this->addColumn('used_sport_3', 'UsedSport3', 'INTEGER', false, null, 0);
        $this->addColumn('used_sport_4', 'UsedSport4', 'DOUBLE', false, null, 0);
        $this->addColumn('used_sport_5', 'UsedSport5', 'CLOB', false, null, null);
        $this->addColumn('tot_used_1', 'TotUsed1', 'INTEGER', false, null, 0);
        $this->addColumn('tot_used_2', 'TotUsed2', 'DOUBLE', false, null, 0);
        $this->addColumn('tot_used_3', 'TotUsed3', 'INTEGER', false, null, 0);
        $this->addColumn('tot_used_4', 'TotUsed4', 'DOUBLE', false, null, 0);
        $this->addColumn('tot_used_5', 'TotUsed5', 'CLOB', false, null, null);
        $this->addColumn('threat_1', 'Threat1', 'INTEGER', false, null, 0);
        $this->addColumn('threat_2', 'Threat2', 'DOUBLE', false, null, 0);
        $this->addColumn('threat_3', 'Threat3', 'INTEGER', false, null, 0);
        $this->addColumn('threat_4', 'Threat4', 'DOUBLE', false, null, 0);
        $this->addColumn('threat_5', 'Threat5', 'CLOB', false, null, null);
        $this->addColumn('intro_1', 'Intro1', 'INTEGER', false, null, 0);
        $this->addColumn('intro_2', 'Intro2', 'DOUBLE', false, null, 0);
        $this->addColumn('intro_3', 'Intro3', 'INTEGER', false, null, 0);
        $this->addColumn('intro_4', 'Intro4', 'DOUBLE', false, null, 0);
        $this->addColumn('intro_5', 'Intro5', 'CLOB', false, null, null);
        $this->addColumn('danger_1', 'Danger1', 'INTEGER', false, null, 0);
        $this->addColumn('danger_2', 'Danger2', 'DOUBLE', false, null, 0);
        $this->addColumn('danger_3', 'Danger3', 'INTEGER', false, null, 0);
        $this->addColumn('danger_4', 'Danger4', 'DOUBLE', false, null, 0);
        $this->addColumn('danger_5', 'Danger5', 'CLOB', false, null, null);
        $this->addColumn('note', 'Note', 'CLOB', false, null, null);
        $this->addColumn('no_species', 'NoSpecies', 'INTEGER', false, null, 0);
        $this->addColumn('no_fresh', 'NoFresh', 'INTEGER', false, null, 0);
        $this->addColumn('no_marine', 'NoMarine', 'INTEGER', false, null, 0);
        $this->addColumn('no_brackish', 'NoBrackish', 'INTEGER', false, null, 0);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FubhTableMap
