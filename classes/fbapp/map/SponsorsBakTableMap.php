<?php



/**
 * This class defines the structure of the 'sponsors_bak' table.
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
class SponsorsBakTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SponsorsBakTableMap';

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
        $this->setName('sponsors_bak');
        $this->setPhpName('SponsorsBak');
        $this->setClassname('SponsorsBak');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('SponsorshipID', 'Sponsorshipid', 'INTEGER', true, null, null);
        $this->addColumn('SponsorFor', 'Sponsorfor', 'VARCHAR', false, 50, null);
        $this->addPrimaryKey('Sponsor', 'Sponsor', 'VARCHAR', true, 100, null);
        $this->addColumn('SponsorText', 'Sponsortext', 'VARCHAR', false, 255, null);
        $this->addColumn('PartnerType', 'Partnertype', 'VARCHAR', false, 20, null);
        $this->addColumn('ContactPerson', 'Contactperson', 'VARCHAR', false, 100, null);
        $this->addColumn('Address', 'Address', 'VARCHAR', false, 200, null);
        $this->addColumn('Email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('URL', 'Url', 'CLOB', false, null, null);
        $this->addColumn('Logo', 'Logo', 'VARCHAR', false, 20, null);
        $this->addColumn('StartRent', 'Startrent', 'TIMESTAMP', false, null, null);
        $this->addColumn('EndRent', 'Endrent', 'TIMESTAMP', false, null, null);
        $this->addColumn('Cost', 'Cost', 'DOUBLE', false, null, null);
        $this->addColumn('Received', 'Received', 'CHAR', false, 19, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'DATE', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'DATE', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'CHAR', false, 19, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SponsorsBakTableMap
