<?php



/**
 * This class defines the structure of the 'cellabel2d30w' table.
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
class Cellabel2d30wTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Cellabel2d30wTableMap';

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
        $this->setName('cellabel2d30w');
        $this->setPhpName('Cellabel2d30w');
        $this->setClassname('Cellabel2d30w');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CellName', 'Cellname', 'VARCHAR', true, 10, null);
        $this->addColumn('CellLat', 'Celllat', 'INTEGER', false, null, null);
        $this->addColumn('CellLon', 'Celllon', 'DOUBLE', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // Cellabel2d30wTableMap
