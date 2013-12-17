<?php



/**
 * This class defines the structure of the 'fl_losses' table.
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
class FlLossesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlLossesTableMap';

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
        $this->setName('fl_losses');
        $this->setPhpName('FlLosses');
        $this->setClassname('FlLosses');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('LossCode', 'Losscode', 'INTEGER', true, null, null);
        $this->addColumn('FishCode', 'Fishcode', 'INTEGER', false, null, 0);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('DataSourceCode', 'Datasourcecode', 'INTEGER', false, null, 0);
        $this->addColumn('LocationCode', 'Locationcode', 'INTEGER', false, null, 0);
        $this->addColumn('EstimateCode', 'Estimatecode', 'VARCHAR', false, 50, null);
        $this->addColumn('LossStage', 'Lossstage', 'VARCHAR', false, 50, null);
        $this->addColumn('PeriodofStudy', 'Periodofstudy', 'VARCHAR', false, 50, null);
        $this->addColumn('PreviousProcess', 'Previousprocess', 'VARCHAR', false, 50, null);
        $this->addColumn('PreviousTreatment', 'Previoustreatment', 'VARCHAR', false, 50, null);
        $this->addColumn('FishSizeMin', 'Fishsizemin', 'DOUBLE', false, null, null);
        $this->addColumn('FishSizeMax', 'Fishsizemax', 'DOUBLE', false, null, null);
        $this->addColumn('EndUseBestQuality', 'Endusebestquality', 'VARCHAR', false, 50, null);
        $this->addColumn('EndUseLowerQuality', 'Enduselowerquality', 'VARCHAR', false, 50, null);
        $this->addColumn('ReasonForLoss', 'Reasonforloss', 'VARCHAR', false, 50, null);
        $this->addColumn('InsectType', 'Insecttype', 'VARCHAR', false, 50, null);
        $this->addColumn('BatchWeight', 'Batchweight', 'DOUBLE', false, null, null);
        $this->addColumn('WeightOfPhysicalLoss', 'Weightofphysicalloss', 'DOUBLE', false, null, null);
        $this->addColumn('PhysicalLossMin', 'Physicallossmin', 'DOUBLE', false, null, null);
        $this->addColumn('PhysicalLossMax', 'Physicallossmax', 'DOUBLE', false, null, null);
        $this->addColumn('WeightLosingQuality', 'Weightlosingquality', 'DOUBLE', false, null, null);
        $this->addColumn('PWeightLosingQualityMin', 'Pweightlosingqualitymin', 'DOUBLE', false, null, null);
        $this->addColumn('PWeightLosingQualityMax', 'Pweightlosingqualitymax', 'DOUBLE', false, null, null);
        $this->addColumn('PFishAffectedByNumberMin', 'Pfishaffectedbynumbermin', 'DOUBLE', false, null, null);
        $this->addColumn('PFishAffectedByNumberMax', 'Pfishaffectedbynumbermax', 'DOUBLE', false, null, null);
        $this->addColumn('Costs', 'Costs', 'VARCHAR', false, 50, '0');
        $this->addColumn('Others', 'Others', 'VARCHAR', false, 50, '0');
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

} // FlLossesTableMap
