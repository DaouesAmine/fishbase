<?php



/**
 * This class defines the structure of the 'aquariumref' table.
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
class AquariumrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AquariumrefTableMap';

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
        $this->setName('aquariumref');
        $this->setPhpName('Aquariumref');
        $this->setClassname('Aquariumref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AqCode', 'Aqcode', 'INTEGER', true, null, null);
        $this->addColumn('Acronym', 'Acronym', 'VARCHAR', false, 6, null);
        $this->addColumn('AquariumName', 'Aquariumname', 'VARCHAR', false, 50, null);
        $this->addColumn('Address', 'Address', 'VARCHAR', false, 100, null);
        $this->addColumn('C_code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('URL', 'Url', 'CLOB', false, null, null);
        $this->addColumn('ContactName', 'Contactname', 'VARCHAR', false, 50, null);
        $this->addColumn('ContactEmail', 'Contactemail', 'VARCHAR', false, 50, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 100, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AquariumrefTableMap
