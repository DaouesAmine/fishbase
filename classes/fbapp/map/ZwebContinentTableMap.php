<?php



/**
 * This class defines the structure of the 'zweb_continent' table.
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
class ZwebContinentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebContinentTableMap';

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
        $this->setName('zweb_continent');
        $this->setPhpName('ZwebContinent');
        $this->setClassname('ZwebContinent');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('Continent', 'Continent', 'VARCHAR', false, 50, null);
        $this->addColumn('AreaCode', 'Areacode', 'SMALLINT', false, null, 0);
        $this->addColumn('MapID', 'Mapid', 'VARCHAR', false, 5, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ZwebContinentTableMap
