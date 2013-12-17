<?php



/**
 * This class defines the structure of the 'zweb_tour' table.
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
class ZwebTourTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebTourTableMap';

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
        $this->setName('zweb_tour');
        $this->setPhpName('ZwebTour');
        $this->setClassname('ZwebTour');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('tourno', 'Tourno', 'INTEGER', true, null, 0);
        $this->addColumn('sentence', 'Sentence', 'CLOB', false, null, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('Url', 'Url', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ZwebTourTableMap
