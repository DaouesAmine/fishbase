<?php



/**
 * This class defines the structure of the 'zweb_rdecountrycoordinators' table.
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
class ZwebRdecountrycoordinatorsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebRdecountrycoordinatorsTableMap';

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
        $this->setName('zweb_rdecountrycoordinators');
        $this->setPhpName('ZwebRdecountrycoordinators');
        $this->setClassname('ZwebRdecountrycoordinators');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('Coordinator', 'Coordinator', 'INTEGER', true, null, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('addcountry', 'Addcountry', 'VARCHAR', false, 1, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ZwebRdecountrycoordinatorsTableMap
