<?php



/**
 * This class defines the structure of the 'taxamatch_epithet' table.
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
class TaxamatchEpithetTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.TaxamatchEpithetTableMap';

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
        $this->setName('taxamatch_epithet');
        $this->setPhpName('TaxamatchEpithet');
        $this->setClassname('TaxamatchEpithet');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('SynCode', 'Syncode', 'INTEGER', true, null, null);
        $this->addColumn('EpithetPos', 'Epithetpos', 'INTEGER', true, null, null);
        $this->addColumn('Epithet', 'Epithet', 'VARCHAR', true, 100, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TaxamatchEpithetTableMap
