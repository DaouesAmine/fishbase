<?php



/**
 * This class defines the structure of the 'abnormref' table.
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
class AbnormrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AbnormrefTableMap';

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
        $this->setName('abnormref');
        $this->setPhpName('Abnormref');
        $this->setClassname('Abnormref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('RefNo', 'Refno', 'DOUBLE', false, null, null);
        $this->addColumn('References', 'References', 'CLOB', false, null, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', false, 255, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('Title', 'Title', 'VARCHAR', false, 255, null);
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 255, null);
        $this->addColumn('FirstAuthor', 'Firstauthor', 'VARCHAR', false, 50, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AbnormrefTableMap
