<?php



/**
 * This class defines the structure of the 'data2050' table.
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
class Data2050TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Data2050TableMap';

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
        $this->setName('data2050');
        $this->setPhpName('Data2050');
        $this->setClassname('Data2050');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('spc100', 'Spc100', 'INTEGER', false, null, null);
        $this->addColumn('cid', 'Cid', 'INTEGER', false, null, null);
        $this->addColumn('proxcell', 'Proxcell', 'INTEGER', false, null, null);
        $this->addColumn('pid', 'Pid', 'INTEGER', false, null, null);
        $this->addColumn('spc100_1', 'Spc1001', 'INTEGER', false, null, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // Data2050TableMap
