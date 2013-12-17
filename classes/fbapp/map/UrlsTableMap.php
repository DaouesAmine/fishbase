<?php



/**
 * This class defines the structure of the 'urls' table.
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
class UrlsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.UrlsTableMap';

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
        $this->setName('urls');
        $this->setPhpName('Urls');
        $this->setClassname('Urls');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('num', 'Num', 'INTEGER', false, null, null);
        $this->addColumn('speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('url', 'Url', 'LONGVARCHAR', false, null, null);
        $this->addColumn('description', 'Description', 'VARCHAR', false, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('email', 'Email', 'LONGVARCHAR', false, null, null);
        $this->addColumn('dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('novote', 'Novote', 'INTEGER', false, null, null);
        $this->addColumn('yesvote', 'Yesvote', 'INTEGER', false, null, null);
        $this->addColumn('requiredx', 'Requiredx', 'VARCHAR', false, 50, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // UrlsTableMap
