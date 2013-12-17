<?php



/**
 * This class defines the structure of the 'rmcaphotos' table.
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
class RmcaphotosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.RmcaphotosTableMap';

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
        $this->setName('rmcaphotos');
        $this->setPhpName('Rmcaphotos');
        $this->setClassname('Rmcaphotos');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, 0);
        $this->addColumn('speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('picgenus', 'Picgenus', 'VARCHAR', false, 30, null);
        $this->addColumn('picspecies', 'Picspecies', 'VARCHAR', false, 45, null);
        $this->addColumn('picname', 'Picname', 'VARCHAR', false, 20, null);
        $this->addColumn('authname', 'Authname', 'VARCHAR', false, 75, null);
        $this->addColumn('catalognumber', 'Catalognumber', 'VARCHAR', false, 50, null);
        $this->addColumn('credit', 'Credit', 'VARCHAR', false, 100, null);
        $this->addColumn('typestatus', 'Typestatus', 'VARCHAR', false, 20, null);
        $this->addColumn('datecollected', 'Datecollected', 'VARCHAR', false, 25, null);
        $this->addColumn('c_code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('locality', 'Locality', 'VARCHAR', false, 150, null);
        $this->addColumn('collector', 'Collector', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // RmcaphotosTableMap
