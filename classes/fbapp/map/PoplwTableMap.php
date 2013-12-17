<?php



/**
 * This class defines the structure of the 'poplw' table.
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
class PoplwTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PoplwTableMap';

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
        $this->setName('poplw');
        $this->setPhpName('Poplw');
        $this->setClassname('Poplw');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('FamCode', 'Famcode', 'INTEGER', false, null, null);
        $this->addColumn('PopLWRef', 'Poplwref', 'INTEGER', true, null, null);
        $this->addColumn('LengthMin', 'Lengthmin', 'DOUBLE', false, 15, null);
        $this->addColumn('LengthMax', 'Lengthmax', 'DOUBLE', false, 15, null);
        $this->addColumn('Type', 'Type', 'CHAR', false, 2, null);
        $this->addColumn('LmaxCompare', 'Lmaxcompare', 'CHAR', false, 3, null);
        $this->addColumn('EsQ', 'Esq', 'VARCHAR', false, 50, null);
        $this->addColumn('Number', 'Number', 'INTEGER', false, null, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', true, 8, null);
        $this->addColumn('a', 'A', 'DOUBLE', true, 15, null);
        $this->addColumn('aTL', 'Atl', 'DOUBLE', false, 15, null);
        $this->addColumn('b', 'B', 'DOUBLE', true, 15, null);
        $this->addColumn('CoeffDetermination', 'Coeffdetermination', 'DOUBLE', false, 15, null);
        $this->addColumn('SEa', 'Sea', 'FLOAT', false, 10, null);
        $this->addColumn('SEb', 'Seb', 'FLOAT', false, 10, null);
        $this->addColumn('SDa', 'Sda', 'FLOAT', false, 10, null);
        $this->addColumn('SDb', 'Sdb', 'FLOAT', false, 10, null);
        $this->addColumn('LCLa', 'Lcla', 'FLOAT', false, 10, null);
        $this->addColumn('UCLa', 'Ucla', 'FLOAT', false, 10, null);
        $this->addColumn('LCLb', 'Lclb', 'FLOAT', false, 10, null);
        $this->addColumn('UCLb', 'Uclb', 'FLOAT', false, 10, null);
        $this->addColumn('Method', 'Method', 'VARCHAR', false, 50, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 100, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 255, null);
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

} // PoplwTableMap
