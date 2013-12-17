<?php



/**
 * This class defines the structure of the 'address' table.
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
class AddressTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AddressTableMap';

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
        $this->setName('address');
        $this->setPhpName('Address');
        $this->setClassname('Address');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('Address', 'Address', 'VARCHAR', false, 255, null);
        $this->addColumn('Name', 'Name', 'VARCHAR', false, 200, null);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 50, null);
        $this->addColumn('Telephone', 'Telephone', 'VARCHAR', false, 30, null);
        $this->addColumn('Fax', 'Fax', 'VARCHAR', false, 30, null);
        $this->addColumn('EMail', 'Email', 'CLOB', false, null, null);
        $this->addColumn('Internet', 'Internet', 'CLOB', false, null, null);
        $this->addColumn('Address1', 'Address1', 'VARCHAR', false, 100, null);
        $this->addColumn('Address2', 'Address2', 'VARCHAR', false, 100, null);
        $this->addColumn('City', 'City', 'VARCHAR', false, 50, null);
        $this->addColumn('Province', 'Province', 'VARCHAR', false, 50, null);
        $this->addColumn('Email1', 'Email1', 'VARCHAR', false, 50, null);
        $this->addColumn('Email2', 'Email2', 'VARCHAR', false, 50, null);
        $this->addColumn('Internet1', 'Internet1', 'VARCHAR', false, 100, null);
        $this->addColumn('Internet2', 'Internet2', 'VARCHAR', false, 100, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AddressTableMap
