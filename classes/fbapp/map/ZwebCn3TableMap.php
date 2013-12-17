<?php



/**
 * This class defines the structure of the 'zweb_cn3' table.
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
class ZwebCn3TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ZwebCn3TableMap';

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
        $this->setName('zweb_cn3');
        $this->setPhpName('ZwebCn3');
        $this->setClassname('ZwebCn3');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('ComName', 'Comname', 'VARCHAR', false, 60, null);
        $this->addColumn('NameType', 'Nametype', 'VARCHAR', false, 10, null);
        $this->addColumn('NT', 'Nt', 'INTEGER', false, null, null);
        $this->addColumn('Rank1', 'Rank1', 'INTEGER', false, null, null);
        $this->addColumn('Eng', 'Eng', 'INTEGER', false, null, null);
        $this->addColumn('Fre', 'Fre', 'INTEGER', false, null, null);
        $this->addColumn('Spa', 'Spa', 'INTEGER', false, null, null);
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', false, null, null);
        $this->addColumn('UnicodeText', 'Unicodetext', 'CLOB', false, null, null);
        $this->addColumn('Script', 'Script', 'VARCHAR', false, 20, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ZwebCn3TableMap
