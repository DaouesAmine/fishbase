<?php



/**
 * This class defines the structure of the 'fl_processdetails' table.
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
class FlProcessdetailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlProcessdetailsTableMap';

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
        $this->setName('fl_processdetails');
        $this->setPhpName('FlProcessdetails');
        $this->setClassname('FlProcessdetails');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LossCode', 'Losscode', 'INTEGER', true, null, null);
        $this->addColumn('Process', 'Process', 'VARCHAR', false, 50, null);
        $this->addColumn('OtherProcess', 'Otherprocess', 'VARCHAR', false, 50, null);
        $this->addColumn('TimeToCompleteProcess', 'Timetocompleteprocess', 'DOUBLE', false, null, null);
        $this->addColumn('SpecialTreatments', 'Specialtreatments', 'VARCHAR', false, 50, null);
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

} // FlProcessdetailsTableMap
