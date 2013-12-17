<?php



/**
 * This class defines the structure of the 'zweb_factsheetmaint' table.
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
class ZwebFactsheetmaintTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebFactsheetmaintTableMap';

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
        $this->setName('zweb_factsheetmaint');
        $this->setPhpName('ZwebFactsheetmaint');
        $this->setClassname('ZwebFactsheetmaint');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('SiteURL', 'Siteurl', 'VARCHAR', true, 255, null);
        $this->addColumn('SiteName', 'Sitename', 'VARCHAR', false, 100, null);
        $this->addColumn('Comment', 'Comment', 'CLOB', false, null, null);
        $this->addColumn('entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ZwebFactsheetmaintTableMap
