<?php



/**
 * This class defines the structure of the 'speciesauthorsnames' table.
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
class SpeciesauthorsnamesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SpeciesauthorsnamesTableMap';

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
        $this->setName('speciesauthorsnames');
        $this->setPhpName('Speciesauthorsnames');
        $this->setClassname('Speciesauthorsnames');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('SynCode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('Valid', 'Valid', 'BOOLEAN', false, 1, null);
        $this->addColumn('c7SpeciesId', 'C7speciesid', 'INTEGER', false, null, null);
        $this->addColumn('SeqNo', 'Seqno', 'INTEGER', false, null, null);
        $this->addColumn('SynGenus', 'Syngenus', 'VARCHAR', false, 25, null);
        $this->addColumn('SynSpecies', 'Synspecies', 'VARCHAR', false, 45, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', false, 95, null);
        $this->addColumn('URL', 'Url', 'CLOB', false, null, null);
        $this->addColumn('AutNameInit', 'Autnameinit', 'VARCHAR', false, 255, null);
        $this->addColumn('AutName', 'Autname', 'VARCHAR', false, 255, null);
        $this->addColumn('c7fAuthorYearOC', 'C7fauthoryearoc', 'VARCHAR', false, 127, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SpeciesauthorsnamesTableMap
