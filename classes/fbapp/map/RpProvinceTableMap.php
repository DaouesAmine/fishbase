<?php



/**
 * This class defines the structure of the 'rp_province' table.
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
class RpProvinceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.RpProvinceTableMap';

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
        $this->setName('rp_province');
        $this->setPhpName('RpProvince');
        $this->setClassname('RpProvince');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Region', 'Region', 'VARCHAR', false, 255, null);
        $this->addColumn('RegionName', 'Regionname', 'VARCHAR', false, 255, null);
        $this->addColumn('Province', 'Province', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // RpProvinceTableMap
