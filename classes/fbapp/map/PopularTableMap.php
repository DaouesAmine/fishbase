<?php



/**
 * This class defines the structure of the 'popular' table.
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
class PopularTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PopularTableMap';

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
        $this->setName('popular');
        $this->setPhpName('Popular');
        $this->setClassname('Popular');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('Speccode', 'Speccode', 'DOUBLE', true, null, null);
        $this->addColumn('SpeciesID', 'Speciesid', 'VARCHAR', false, 50, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 255, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 255, null);
        $this->addColumn('Sciname', 'Sciname', 'VARCHAR', false, 255, null);
        $this->addColumn('Results', 'Results', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PopularTableMap
