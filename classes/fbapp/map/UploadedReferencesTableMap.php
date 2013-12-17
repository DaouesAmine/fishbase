<?php



/**
 * This class defines the structure of the 'uploaded_references' table.
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
class UploadedReferencesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.UploadedReferencesTableMap';

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
        $this->setName('uploaded_references');
        $this->setPhpName('UploadedReferences');
        $this->setClassname('UploadedReferences');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('speccode', 'Speccode', 'INTEGER', false, 10, null);
        $this->addColumn('author', 'Author', 'VARCHAR', false, 255, null);
        $this->addColumn('year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 255, null);
        $this->addColumn('source', 'Source', 'CLOB', false, null, null);
        $this->addColumn('nameused', 'Nameused', 'VARCHAR', false, 255, null);
        $this->addColumn('file', 'File', 'VARCHAR', false, 255, null);
        $this->addColumn('keywords', 'Keywords', 'CLOB', false, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('country', 'Country', 'VARCHAR', false, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // UploadedReferencesTableMap
