<?php



/**
 * This class defines the structure of the 'algalspecies' table.
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
class AlgalspeciesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AlgalspeciesTableMap';

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
        $this->setName('algalspecies');
        $this->setPhpName('Algalspecies');
        $this->setClassname('Algalspecies');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 255, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 255, null);
        $this->addColumn('ScientificName', 'Scientificname', 'VARCHAR', false, 255, null);
        $this->addColumn('GenusID', 'Genusid', 'DOUBLE', false, null, null);
        $this->addColumn('SpeciesID', 'Speciesid', 'DOUBLE', false, null, null);
        $this->addColumn('GenusDetailLink', 'Genusdetaillink', 'VARCHAR', false, 255, null);
        $this->addColumn('SpeciesDetailLink', 'Speciesdetaillink', 'VARCHAR', false, 255, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AlgalspeciesTableMap
