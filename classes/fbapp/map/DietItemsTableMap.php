<?php



/**
 * This class defines the structure of the 'diet_items' table.
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
class DietItemsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.DietItemsTableMap';

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
        $this->setName('diet_items');
        $this->setPhpName('DietItems');
        $this->setClassname('DietItems');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', false, null, null);
        $this->addPrimaryKey('DietCode', 'Dietcode', 'INTEGER', true, null, null);
        $this->addColumn('FoodI', 'Foodi', 'VARCHAR', false, 19, null);
        $this->addColumn('FoodII', 'Foodii', 'VARCHAR', false, 28, null);
        $this->addPrimaryKey('FoodIII', 'Foodiii', 'VARCHAR', true, 35, null);
        $this->addPrimaryKey('Stage', 'Stage', 'VARCHAR', true, 13, null);
        $this->addPrimaryKey('DietPercent', 'Dietpercent', 'DOUBLE', true, null, null);
        $this->addPrimaryKey('ItemName', 'Itemname', 'VARCHAR', true, 50, null);
        $this->addColumn('Comment', 'Comment', 'CLOB', false, null, null);
        $this->addColumn('DietSpeccode', 'Dietspeccode', 'INTEGER', false, null, null);
        $this->addColumn('DietSpeccodeSLB', 'Dietspeccodeslb', 'INTEGER', false, null, null);
        $this->addColumn('AlphaCode', 'Alphacode', 'VARCHAR', false, 3, null);
        $this->addColumn('PreyTroph', 'Preytroph', 'DOUBLE', false, null, null);
        $this->addColumn('PreySeTroph', 'Preysetroph', 'DOUBLE', false, null, null);
        $this->addColumn('PreyRemark', 'Preyremark', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // DietItemsTableMap
