<?php



/**
 * This class defines the structure of the 'fl_fishingdetails' table.
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
class FlFishingdetailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlFishingdetailsTableMap';

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
        $this->setName('fl_fishingdetails');
        $this->setPhpName('FlFishingdetails');
        $this->setClassname('FlFishingdetails');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LossCode', 'Losscode', 'INTEGER', true, null, null);
        $this->addColumn('FishingStageDetail', 'Fishingstagedetail', 'VARCHAR', false, 50, null);
        $this->addColumn('FishingMethod', 'Fishingmethod', 'VARCHAR', false, 50, null);
        $this->addColumn('OtherFishingMethod', 'Otherfishingmethod', 'VARCHAR', false, 50, null);
        $this->addColumn('FishingGearInWater', 'Fishinggearinwater', 'VARCHAR', false, 50, null);
        $this->addColumn('HoursUntilLanding', 'Hoursuntillanding', 'VARCHAR', false, 50, null);
        $this->addColumn('StorageMethodBoat', 'Storagemethodboat', 'VARCHAR', false, 50, null);
        $this->addColumn('Editable', 'Editable', 'VARCHAR', false, 50, '-1');
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FlFishingdetailsTableMap
