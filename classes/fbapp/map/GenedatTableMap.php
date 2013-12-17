<?php



/**
 * This class defines the structure of the 'genedat' table.
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
class GenedatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GenedatTableMap';

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
        $this->setName('genedat');
        $this->setPhpName('Genedat');
        $this->setClassname('Genedat');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('GeneDatRefNo', 'Genedatrefno', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 40, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Trait', 'Trait', 'VARCHAR', false, 35, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', true, 65, null);
        $this->addColumn('MeanTrait', 'Meantrait', 'DOUBLE', false, 15, null);
        $this->addColumn('UnitofTrait', 'Unitoftrait', 'VARCHAR', false, 55, null);
        $this->addColumn('StandardDeviation', 'Standarddeviation', 'DOUBLE', false, 15, null);
        $this->addColumn('Heritability', 'Heritability', 'DOUBLE', true, 15, null);
        $this->addColumn('StandardError', 'Standarderror', 'DOUBLE', false, 15, null);
        $this->addColumn('MethodHeritab', 'Methodheritab', 'VARCHAR', false, 27, null);
        $this->addColumn('CommentHeritab', 'Commentheritab', 'VARCHAR', false, 65, null);
        $this->addColumn('Selection', 'Selection', 'TINYINT', false, null, null);
        $this->addColumn('MethodSelection', 'Methodselection', 'VARCHAR', false, 34, null);
        $this->addColumn('Response', 'Response', 'SMALLINT', false, null, null);
        $this->addColumn('CommentSelection', 'Commentselection', 'VARCHAR', false, 60, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GenedatTableMap
