<?php



/**
 * This class defines the structure of the 'genetics' table.
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
class GeneticsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GeneticsTableMap';

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
        $this->setName('genetics');
        $this->setPhpName('Genetics');
        $this->setClassname('Genetics');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('GeneticsRefNo', 'Geneticsrefno', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 55, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', false, 7, null);
        $this->addColumn('Tissues', 'Tissues', 'VARCHAR', false, 255, null);
        $this->addColumn('ChromosomeNo', 'Chromosomeno', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeRef', 'Chromosomeref', 'INTEGER', false, null, null);
        $this->addColumn('ChromosomeDip', 'Chromosomedip', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeDipTemp', 'Chromosomediptemp', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeDipMax', 'Chromosomedipmax', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeDipRef', 'Chromosomedipref', 'INTEGER', false, null, null);
        $this->addColumn('ChromosomeTypeRef', 'Chromosometyperef', 'INTEGER', false, null, null);
        $this->addColumn('Metacentric', 'Metacentric', 'SMALLINT', false, null, null);
        $this->addColumn('SubMetacentric', 'Submetacentric', 'SMALLINT', false, null, null);
        $this->addColumn('Subtelocentric', 'Subtelocentric', 'SMALLINT', false, null, null);
        $this->addColumn('Telocentric', 'Telocentric', 'SMALLINT', false, null, null);
        $this->addColumn('MetaSubmetacentric', 'Metasubmetacentric', 'SMALLINT', false, null, null);
        $this->addColumn('SubteloAcrocentric', 'Subteloacrocentric', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeArm', 'Chromosomearm', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeArmCalc', 'Chromosomearmcalc', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeArmTemp', 'Chromosomearmtemp', 'SMALLINT', false, null, null);
        $this->addColumn('ChromosomeArmRef', 'Chromosomearmref', 'INTEGER', false, null, null);
        $this->addColumn('SexMech', 'Sexmech', 'VARCHAR', false, 50, null);
        $this->addColumn('SexmechRef', 'Sexmechref', 'INTEGER', false, null, null);
        $this->addColumn('DNASequence', 'Dnasequence', 'TINYINT', false, null, null);
        $this->addColumn('DNASeqRef', 'Dnaseqref', 'INTEGER', false, null, null);
        $this->addColumn('DNAAnalysis', 'Dnaanalysis', 'TINYINT', false, null, null);
        $this->addColumn('DNAAnalRef', 'Dnaanalref', 'INTEGER', false, null, null);
        $this->addColumn('GeneticMarker', 'Geneticmarker', 'TINYINT', false, null, null);
        $this->addColumn('GMarkerRef', 'Gmarkerref', 'INTEGER', false, null, null);
        $this->addColumn('DNA', 'Dna', 'FLOAT', false, null, null);
        $this->addColumn('DNARef', 'Dnaref', 'INTEGER', false, null, null);
        $this->addColumn('RemarksRef', 'Remarksref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GeneticsTableMap
