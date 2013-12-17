<?php



/**
 * This class defines the structure of the 'materialsexamined' table.
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
class MaterialsexaminedTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MaterialsexaminedTableMap';

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
        $this->setName('materialsexamined');
        $this->setPhpName('Materialsexamined');
        $this->setClassname('Materialsexamined');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('Id', 'Id', 'INTEGER', false, null, null);
        $this->addColumn('Mus', 'Mus', 'VARCHAR', false, 10, null);
        $this->addPrimaryKey('AquisitionNo', 'Aquisitionno', 'VARCHAR', true, 30, '');
        $this->addColumn('ExaminedRefNo', 'Examinedrefno', 'INTEGER', false, null, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 16, null);
        $this->addColumn('GenusCol', 'Genuscol', 'VARCHAR', false, 20, null);
        $this->addColumn('SpeciesCol', 'Speciescol', 'VARCHAR', false, 30, null);
        $this->addColumn('SynCode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 50, null);
        $this->addColumn('Comments', 'Comments', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MaterialsexaminedTableMap
