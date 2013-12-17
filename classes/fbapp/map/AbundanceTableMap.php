<?php



/**
 * This class defines the structure of the 'abundance' table.
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
class AbundanceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AbundanceTableMap';

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
        $this->setName('abundance');
        $this->setPhpName('Abundance');
        $this->setClassname('Abundance');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('AbundanceCode', 'Abundancecode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, 0);
        $this->addColumn('MainRef', 'Mainref', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Locality', 'Locality', 'VARCHAR', true, 50, '');
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, '');
        $this->addColumn('E_CODE', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('Introduced', 'Introduced', 'BOOLEAN', false, 1, null);
        $this->addColumn('Year_intro', 'YearIntro', 'SMALLINT', false, null, null);
        $this->addPrimaryKey('LifeStage1', 'Lifestage1', 'VARCHAR', true, 17, '');
        $this->addColumn('Sex', 'Sex', 'VARCHAR', false, 7, null);
        $this->addColumn('Lifestage2', 'Lifestage2', 'VARCHAR', false, 18, null);
        $this->addColumn('Sexual', 'Sexual', 'BOOLEAN', false, 1, null);
        $this->addColumn('Asexual', 'Asexual', 'BOOLEAN', false, 1, null);
        $this->addColumn('Abundance_Quan', 'AbundanceQuan', 'DOUBLE', false, null, null);
        $this->addColumn('Abundance_QuanUnit', 'AbundanceQuanunit', 'VARCHAR', false, 16, null);
        $this->addColumn('Abundance_SemiQuan', 'AbundanceSemiquan', 'VARCHAR', false, 13, null);
        $this->addColumn('Abundance_SemiQuanUnit', 'AbundanceSemiquanunit', 'VARCHAR', false, 16, null);
        $this->addColumn('Abundance_Qual', 'AbundanceQual', 'VARCHAR', false, 18, null);
        $this->addColumn('Depth', 'Depth', 'DOUBLE', false, null, null);
        $this->addColumn('DepthUnit', 'Depthunit', 'VARCHAR', false, 2, null);
        $this->addColumn('Year_Occur1', 'YearOccur1', 'SMALLINT', false, null, null);
        $this->addColumn('Year_Occur2', 'YearOccur2', 'SMALLINT', false, null, null);
        $this->addPrimaryKey('Date_Occur1', 'DateOccur1', 'CHAR', true, 19, '');
        $this->addPrimaryKey('Date_Occur2', 'DateOccur2', 'CHAR', true, 19, '');
        $this->addColumn('Seasonal', 'Seasonal', 'VARCHAR', false, 13, null);
        $this->addColumn('Period', 'Period', 'VARCHAR', false, 12, null);
        $this->addColumn('RecordType', 'Recordtype', 'VARCHAR', false, 12, null);
        $this->addColumn('Method', 'Method', 'VARCHAR', false, 21, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('InvasiveReport', 'Invasivereport', 'VARCHAR', false, 13, null);
        $this->addColumn('InvasivenessDegree', 'Invasivenessdegree', 'VARCHAR', false, 13, null);
        $this->addColumn('ReportType', 'Reporttype', 'VARCHAR', false, 12, null);
        $this->addColumn('InvasiveRef', 'Invasiveref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'CHAR', false, 19, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'CHAR', false, 19, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'CHAR', false, 19, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AbundanceTableMap
