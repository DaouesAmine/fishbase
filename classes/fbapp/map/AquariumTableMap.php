<?php



/**
 * This class defines the structure of the 'aquarium' table.
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
class AquariumTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AquariumTableMap';

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
        $this->setName('aquarium');
        $this->setPhpName('Aquarium');
        $this->setClassname('Aquarium');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('AqCode', 'Aqcode', 'INTEGER', false, null, 0);
        $this->addColumn('GenusUsed', 'Genusused', 'VARCHAR', false, 50, null);
        $this->addColumn('SpeciesUsed', 'Speciesused', 'VARCHAR', false, 50, null);
        $this->addColumn('Form', 'Form', 'VARCHAR', false, 20, null);
        $this->addColumn('Males', 'Males', 'INTEGER', false, null, null);
        $this->addColumn('Females', 'Females', 'INTEGER', false, null, null);
        $this->addColumn('Unknown', 'Unknown', 'INTEGER', false, null, null);
        $this->addColumn('Supplier', 'Supplier', 'VARCHAR', false, 15, null);
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 8, null);
        $this->addColumn('Provenance', 'Provenance', 'VARCHAR', false, 30, null);
        $this->addColumn('Breeding', 'Breeding', 'VARCHAR', false, 25, null);
        $this->addColumn('Husbandry', 'Husbandry', 'VARCHAR', false, 20, null);
        $this->addColumn('Research', 'Research', 'VARCHAR', false, 15, null);
        $this->addColumn('Month', 'Month', 'SMALLINT', false, null, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('Queries', 'Queries', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AquariumTableMap
