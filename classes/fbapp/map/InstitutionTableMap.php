<?php



/**
 * This class defines the structure of the 'institution' table.
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
class InstitutionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.InstitutionTableMap';

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
        $this->setName('institution');
        $this->setPhpName('Institution');
        $this->setClassname('Institution');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('MainRef', 'Mainref', 'VARCHAR', false, 50, null);
        $this->addColumn('Acronym', 'Acronym', 'VARCHAR', false, 50, null);
        $this->addColumn('FullName', 'Fullname', 'VARCHAR', false, 250, null);
        $this->addColumn('SubjectArea', 'Subjectarea', 'VARCHAR', false, 100, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 15, null);
        $this->addColumn('Outreach', 'Outreach', 'VARCHAR', false, 15, null);
        $this->addColumn('Established', 'Established', 'VARCHAR', false, 50, null);
        $this->addColumn('EstablishingDate', 'Establishingdate', 'TIMESTAMP', false, null, null);
        $this->addColumn('EntryIntoForceDate', 'Entryintoforcedate', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpiryDate', 'Expirydate', 'TIMESTAMP', false, null, null);
        $this->addColumn('LocalityCity', 'Localitycity', 'VARCHAR', false, 100, null);
        $this->addColumn('LocalityCountry', 'Localitycountry', 'VARCHAR', false, 50, null);
        $this->addColumn('Description', 'Description', 'CLOB', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('FullText', 'Fulltext', 'CLOB', false, null, null);
        $this->addColumn('Address', 'Address', 'VARCHAR', false, 255, null);
        $this->addColumn('Telephone', 'Telephone', 'VARCHAR', false, 40, null);
        $this->addColumn('Fax', 'Fax', 'VARCHAR', false, 30, null);
        $this->addColumn('EMail', 'Email', 'CLOB', false, null, null);
        $this->addColumn('Internet', 'Internet', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // InstitutionTableMap
