<?php



/**
 * This class defines the structure of the 'food' table.
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
class FoodTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FoodTableMap';

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
        $this->setName('food');
        $this->setPhpName('Food');
        $this->setClassname('Food');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('FOODI', 'Foodi', 'VARCHAR', false, 30, null);
        $this->addColumn('FOODII', 'Foodii', 'VARCHAR', false, 30, null);
        $this->addColumn('FOODIII', 'Foodiii', 'VARCHAR', false, 50, null);
        $this->addColumn('GenFood', 'Genfood', 'VARCHAR', false, 50, null);
        $this->addColumn('SpecFood', 'Specfood', 'VARCHAR', false, 50, null);
        $this->addColumn('ComName', 'Comname', 'VARCHAR', false, 70, null);
        $this->addColumn('Stage', 'Stage', 'VARCHAR', false, 50, null);
        $this->addColumn('Rank', 'Rank', 'FLOAT', false, null, null);
        $this->addColumn('FoodIRank', 'Foodirank', 'FLOAT', false, null, null);
        $this->addColumn('FoodIIRank', 'Foodiirank', 'FLOAT', false, null, null);
        $this->addColumn('FoodIIIRank', 'Foodiiirank', 'FLOAT', false, null, null);
        $this->addColumn('Troph', 'Troph', 'DOUBLE', false, null, null);
        $this->addColumn('TrophSe', 'Trophse', 'DOUBLE', false, null, null);
        $this->addColumn('Refno', 'Refno', 'INTEGER', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 150, null);
        $this->addColumn('MaxLength', 'Maxlength', 'FLOAT', false, null, null);
        $this->addColumn('MinLength', 'Minlength', 'FLOAT', false, null, null);
        $this->addColumn('FoodFlag', 'Foodflag', 'TINYINT', false, null, null);
        $this->addColumn('PredFlag', 'Predflag', 'TINYINT', false, null, null);
        $this->addColumn('NewTroph', 'Newtroph', 'TINYINT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FoodTableMap
