<?php



/**
 * This class defines the structure of the 'cultspec' table.
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
class CultspecTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CultspecTableMap';

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
        $this->setName('cultspec');
        $this->setPhpName('Cultspec');
        $this->setClassname('Cultspec');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('CultSpecRefNo', 'Cultspecrefno', 'INTEGER', false, null, null);
        $this->addPrimaryKey('CultCode', 'Cultcode', 'INTEGER', true, null, null);
        $this->addColumn('StockingRate', 'Stockingrate', 'FLOAT', false, null, null);
        $this->addColumn('UnitStocking', 'Unitstocking', 'VARCHAR', false, 10, null);
        $this->addColumn('TotalStocking', 'Totalstocking', 'FLOAT', false, null, null);
        $this->addColumn('StockingLength', 'Stockinglength', 'FLOAT', false, null, null);
        $this->addColumn('TypeStockLength', 'Typestocklength', 'CHAR', false, 2, null);
        $this->addColumn('CommentStockLength', 'Commentstocklength', 'VARCHAR', false, 20, null);
        $this->addColumn('WeightStocking', 'Weightstocking', 'FLOAT', true, null, null);
        $this->addColumn('StockingAge', 'Stockingage', 'SMALLINT', false, null, null);
        $this->addColumn('LooUnsexed', 'Loounsexed', 'FLOAT', false, null, null);
        $this->addColumn('KUnsexed', 'Kunsexed', 'FLOAT', false, null, null);
        $this->addColumn('Method', 'Method', 'VARCHAR', false, 50, null);
        $this->addColumn('LooFemale', 'Loofemale', 'FLOAT', false, null, null);
        $this->addColumn('KFemale', 'Kfemale', 'FLOAT', false, null, null);
        $this->addColumn('LooMale', 'Loomale', 'FLOAT', false, null, null);
        $this->addColumn('KMale', 'Kmale', 'FLOAT', false, null, null);
        $this->addColumn('RemarksonGrowth', 'Remarksongrowth', 'VARCHAR', false, 60, null);
        $this->addColumn('ProductionPeriod', 'Productionperiod', 'SMALLINT', false, null, null);
        $this->addColumn('HarvestingPractice', 'Harvestingpractice', 'VARCHAR', false, 45, null);
        $this->addColumn('HarvestingLength', 'Harvestinglength', 'FLOAT', false, null, null);
        $this->addColumn('TypeHarvestLength', 'Typeharvestlength', 'VARCHAR', false, 20, null);
        $this->addColumn('CommentHarvLength', 'Commentharvlength', 'VARCHAR', false, 20, null);
        $this->addColumn('HarvestingWeight', 'Harvestingweight', 'FLOAT', false, null, null);
        $this->addColumn('MatureatHarvest', 'Matureatharvest', 'VARCHAR', false, 4, null);
        $this->addColumn('MPeriod', 'Mperiod', 'FLOAT', false, null, null);
        $this->addColumn('ProductionCycle', 'Productioncycle', 'FLOAT', false, null, null);
        $this->addColumn('UnitCycle', 'Unitcycle', 'VARCHAR', false, 10, null);
        $this->addColumn('ProductionYear', 'Productionyear', 'FLOAT', false, null, null);
        $this->addColumn('UnitYear', 'Unityear', 'VARCHAR', false, 10, null);
        $this->addColumn('ProductionYearExt', 'Productionyearext', 'FLOAT', false, null, null);
        $this->addColumn('UnitYearExt', 'Unityearext', 'VARCHAR', false, 10, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 150, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CultspecTableMap
