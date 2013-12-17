<?php



/**
 * This class defines the structure of the 'acknowledge' table.
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
class AcknowledgeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AcknowledgeTableMap';

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
        $this->setName('acknowledge');
        $this->setPhpName('Acknowledge');
        $this->setClassname('Acknowledge');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Personnel', 'Personnel', 'INTEGER', true, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AcknowledgeTableMap
