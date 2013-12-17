<?php



/**
 * This class defines the structure of the 'foodtroph' table.
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
class FoodtrophTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FoodtrophTableMap';

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
        $this->setName('foodtroph');
        $this->setPhpName('Foodtroph');
        $this->setClassname('Foodtroph');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('FoodLevel', 'Foodlevel', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Food', 'Food', 'VARCHAR', true, 50, null);
        $this->addColumn('TL', 'Tl', 'DOUBLE', false, null, null);
        $this->addColumn('SETL', 'Setl', 'DOUBLE', false, null, null);
        $this->addColumn('RefNo', 'Refno', 'DOUBLE', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 150, null);
        $this->addColumn('MaxLength', 'Maxlength', 'DOUBLE', false, null, null);
        $this->addColumn('MinLength', 'Minlength', 'DOUBLE', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FoodtrophTableMap
