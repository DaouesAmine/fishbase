<?php



/**
 * This class defines the structure of the 'journals' table.
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
class JournalsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.JournalsTableMap';

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
        $this->setName('journals');
        $this->setPhpName('Journals');
        $this->setClassname('Journals');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('J_ID', 'JId', 'INTEGER', true, null, null);
        $this->addColumn('J_Abbreviation', 'JAbbreviation', 'VARCHAR', false, 70, null);
        $this->addColumn('J_Name', 'JName', 'VARCHAR', false, 100, null);
        $this->addColumn('J_URL', 'JUrl', 'VARCHAR', false, 255, null);
        $this->addColumn('eISSN', 'Eissn', 'VARCHAR', false, 50, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // JournalsTableMap
