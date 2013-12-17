<?php



/**
 * This class defines the structure of the 'collectionsref' table.
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
class CollectionsrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CollectionsrefTableMap';

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
        $this->setName('collectionsref');
        $this->setPhpName('Collectionsref');
        $this->setClassname('Collectionsref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OccurrenceRefNo', 'Occurrencerefno', 'INTEGER', true, null, null);
        $this->addColumn('Museum', 'Museum', 'VARCHAR', false, 150, null);
        $this->addColumn('Acronym', 'Acronym', 'VARCHAR', false, 10, null);
        $this->addColumn('C_code', 'CCode', 'VARCHAR', false, 50, null);
        $this->addColumn('logoname', 'Logoname', 'VARCHAR', false, 50, null);
        $this->addColumn('URL', 'Url', 'VARCHAR', false, 255, null);
        $this->addColumn('Logo', 'Logo', 'BLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CollectionsrefTableMap
