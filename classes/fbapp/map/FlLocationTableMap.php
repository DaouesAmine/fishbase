<?php



/**
 * This class defines the structure of the 'fl_location' table.
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
class FlLocationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlLocationTableMap';

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
        $this->setName('fl_location');
        $this->setPhpName('FlLocation');
        $this->setClassname('FlLocation');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('LocationCode', 'Locationcode', 'INTEGER', true, null, null);
        $this->addColumn('Continent', 'Continent', 'VARCHAR', false, 50, null);
        $this->addColumn('FisheryType', 'Fisherytype', 'VARCHAR', false, 50, null);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 50, null);
        $this->addColumn('FisheryName', 'Fisheryname', 'VARCHAR', false, 50, null);
        $this->addColumn('Region', 'Region', 'VARCHAR', false, 50, null);
        $this->addColumn('Location', 'Location', 'VARCHAR', false, 50, null);
        $this->addColumn('Coordinates', 'Coordinates', 'VARCHAR', false, 50, null);
        $this->addColumn('Commerce', 'Commerce', 'VARCHAR', false, 50, null);
        $this->addColumn('Category', 'Category', 'VARCHAR', false, 50, null);
        $this->addColumn('Editable', 'Editable', 'CHAR', false, 2, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FlLocationTableMap
