<?php



/**
 * This class defines the structure of the 'morphorders' table.
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
class MorphordersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MorphordersTableMap';

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
        $this->setName('morphorders');
        $this->setPhpName('Morphorders');
        $this->setClassname('Morphorders');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Class', 'Class', 'VARCHAR', false, 51, null);
        $this->addColumn('Order', 'Order', 'VARCHAR', false, 70, null);
        $this->addColumn('MinOfSLp', 'Minofslp', 'SMALLINT', false, null, null);
        $this->addColumn('MaxOfSLp', 'Maxofslp', 'SMALLINT', false, null, null);
        $this->addColumn('MinOfFLp', 'Minofflp', 'SMALLINT', false, null, null);
        $this->addColumn('MaxOfFLp', 'Maxofflp', 'SMALLINT', false, null, null);
        $this->addColumn('MinOfHLp', 'Minofhlp', 'SMALLINT', false, null, null);
        $this->addColumn('MaxOfHLp', 'Maxofhlp', 'SMALLINT', false, null, null);
        $this->addColumn('MinOfPALp', 'Minofpalp', 'SMALLINT', false, null, null);
        $this->addColumn('MaxOfPALp', 'Maxofpalp', 'SMALLINT', false, null, null);
        $this->addColumn('MinOfPPLp', 'Minofpplp', 'SMALLINT', false, null, null);
        $this->addColumn('MaxOfPPLp', 'Maxofpplp', 'SMALLINT', false, null, null);
        $this->addColumn('MinOfPPELp', 'Minofppelp', 'SMALLINT', false, null, null);
        $this->addColumn('MaxOfPPELp', 'Maxofppelp', 'SMALLINT', false, null, null);
        $this->addColumn('MinOfEDp', 'Minofedp', 'FLOAT', false, null, null);
        $this->addColumn('MaxOfEDp', 'Maxofedp', 'FLOAT', false, null, null);
        $this->addColumn('MinOfPOLp', 'Minofpolp', 'FLOAT', false, null, null);
        $this->addColumn('MaxOfPOLp', 'Maxofpolp', 'FLOAT', false, null, null);
        $this->addColumn('MinOfBDp', 'Minofbdp', 'FLOAT', false, null, null);
        $this->addColumn('MaxOfBDp', 'Maxofbdp', 'FLOAT', false, null, null);
        $this->addColumn('MinOfCHp', 'Minofchp', 'FLOAT', false, null, null);
        $this->addColumn('MaxOfCHp', 'Maxofchp', 'FLOAT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MorphordersTableMap
