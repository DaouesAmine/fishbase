<?php



/**
 * This class defines the structure of the 'predatorecosystemtype' table.
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
class PredatorecosystemtypeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PredatorecosystemtypeTableMap';

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
        $this->setName('predatorecosystemtype');
        $this->setPhpName('Predatorecosystemtype');
        $this->setClassname('Predatorecosystemtype');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Predatorlevel', 'Predatorlevel', 'SMALLINT', false, null, null);
        $this->addColumn('Predator', 'Predator', 'VARCHAR', false, 50, null);
        $this->addColumn('EcosystemType', 'Ecosystemtype', 'VARCHAR', false, 20, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PredatorecosystemtypeTableMap
