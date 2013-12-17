<?php



/**
 * This class defines the structure of the 'taxamatch' table.
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
class TaxamatchTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.TaxamatchTableMap';

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
        $this->setName('taxamatch');
        $this->setPhpName('Taxamatch');
        $this->setClassname('Taxamatch');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SynCode', 'Syncode', 'INTEGER', true, null, null);
        $this->addColumn('SynGenus', 'Syngenus', 'VARCHAR', true, 25, null);
        $this->addColumn('SynSpecies', 'Synspecies', 'VARCHAR', true, 45, null);
        $this->addColumn('Status', 'Status', 'VARCHAR', false, 20, null);
        $this->addColumn('LastEpithet', 'Lastepithet', 'VARCHAR', false, 45, null);
        $this->addColumn('NormalizeGenus', 'Normalizegenus', 'VARCHAR', false, 25, null);
        $this->addColumn('NormalizeSpecies', 'Normalizespecies', 'VARCHAR', false, 45, null);
        $this->addColumn('NormalizeLastEpithet', 'Normalizelastepithet', 'VARCHAR', false, 45, null);
        $this->addColumn('SoundexGenus', 'Soundexgenus', 'VARCHAR', false, 25, null);
        $this->addColumn('SoundexSpecies', 'Soundexspecies', 'VARCHAR', false, 45, null);
        $this->addColumn('SoundexLastEpithet', 'Soundexlastepithet', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TaxamatchTableMap
