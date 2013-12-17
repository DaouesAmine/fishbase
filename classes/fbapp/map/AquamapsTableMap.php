<?php



/**
 * This class defines the structure of the 'aquamaps' table.
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
class AquamapsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AquamapsTableMap';

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
        $this->setName('aquamaps');
        $this->setPhpName('Aquamaps');
        $this->setClassname('Aquamaps');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('genus', 'Genus', 'VARCHAR', false, 23, null);
        $this->addColumn('species', 'Species', 'VARCHAR', false, 35, null);
        $this->addColumn('speciesid', 'Speciesid', 'VARCHAR', true, 15, '');
        $this->addColumn('speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('database_id', 'DatabaseId', 'INTEGER', false, null, null);
        $this->addColumn('expert_id', 'ExpertId', 'INTEGER', false, null, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AquamapsTableMap
