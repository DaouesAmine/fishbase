<?php



/**
 * This class defines the structure of the 'elecdat' table.
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
class ElecdatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ElecdatTableMap';

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
        $this->setName('elecdat');
        $this->setPhpName('Elecdat');
        $this->setClassname('Elecdat');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('EleCode', 'Elecode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StudCode', 'Studcode', 'SMALLINT', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('MethodUsed', 'Methodused', 'VARCHAR', false, 38, null);
        $this->addPrimaryKey('BufferSystem', 'Buffersystem', 'VARCHAR', true, 42, null);
        $this->addColumn('pH', 'Ph', 'FLOAT', false, null, null);
        $this->addPrimaryKey('Tissue', 'Tissue', 'VARCHAR', true, 18, null);
        $this->addPrimaryKey('Samples', 'Samples', 'SMALLINT', true, null, null);
        $this->addPrimaryKey('Enzyme', 'Enzyme', 'VARCHAR', true, 60, null);
        $this->addPrimaryKey('Locus', 'Locus', 'VARCHAR', true, 20, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 240, null);
        $this->addColumn('ExpHeterozygosity', 'Expheterozygosity', 'FLOAT', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ElecdatTableMap
