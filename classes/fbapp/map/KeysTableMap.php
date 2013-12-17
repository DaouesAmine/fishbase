<?php



/**
 * This class defines the structure of the 'keys' table.
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
class KeysTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.KeysTableMap';

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
        $this->setName('keys');
        $this->setPhpName('Keys');
        $this->setClassname('Keys');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('KeyCode', 'Keycode', 'INTEGER', true, null, null);
        $this->addColumn('Description', 'Description', 'VARCHAR', false, 255, null);
        $this->addColumn('RefNo', 'Refno', 'INTEGER', false, null, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('OrdNum', 'Ordnum', 'INTEGER', false, null, null);
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 23, null);
        $this->addColumn('AreaCode', 'Areacode', 'INTEGER', false, null, null);
        $this->addColumn('C_code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('E_code', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('Pic1', 'Pic1', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic2', 'Pic2', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic3', 'Pic3', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic4', 'Pic4', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic5', 'Pic5', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic6', 'Pic6', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic7', 'Pic7', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic8', 'Pic8', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic9', 'Pic9', 'VARCHAR', false, 50, null);
        $this->addColumn('Pic10', 'Pic10', 'VARCHAR', false, 50, null);
        $this->addColumn('LarvalBase', 'Larvalbase', 'TINYINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Lucid', 'Lucid', 'TINYINT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // KeysTableMap
