<?php



/**
 * This class defines the structure of the 'maturity' table.
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
class MaturityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MaturityTableMap';

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
        $this->setName('maturity');
        $this->setPhpName('Maturity');
        $this->setClassname('Maturity');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('MaturityRefNo', 'Maturityrefno', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Sex', 'Sex', 'VARCHAR', true, 7, null);
        $this->addColumn('AgeMatMin', 'Agematmin', 'FLOAT', false, null, null);
        $this->addColumn('AgeMatMin2', 'Agematmin2', 'FLOAT', false, null, null);
        $this->addColumn('AgeMatRef', 'Agematref', 'INTEGER', false, null, null);
        $this->addColumn('tm', 'Tm', 'FLOAT', false, null, null);
        $this->addColumn('Number', 'Number', 'SMALLINT', false, null, null);
        $this->addColumn('r2', 'R2', 'DOUBLE', false, 15, null);
        $this->addColumn('SE_tm', 'SeTm', 'FLOAT', false, null, null);
        $this->addColumn('SD_tm', 'SdTm', 'FLOAT', false, null, null);
        $this->addColumn('LCL_tm', 'LclTm', 'FLOAT', false, null, null);
        $this->addColumn('UCL_tm', 'UclTm', 'FLOAT', false, null, null);
        $this->addColumn('LengthMatMin', 'Lengthmatmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthMatMin2', 'Lengthmatmin2', 'FLOAT', false, null, null);
        $this->addColumn('Type1', 'Type1', 'CHAR', false, 2, null);
        $this->addColumn('LengthMatRef', 'Lengthmatref', 'INTEGER', false, null, null);
        $this->addColumn('Lm', 'Lm', 'FLOAT', false, null, null);
        $this->addColumn('SE_Lm', 'SeLm', 'FLOAT', false, null, null);
        $this->addColumn('SD_Lm', 'SdLm', 'FLOAT', false, null, null);
        $this->addColumn('LCL_Lm', 'LclLm', 'FLOAT', false, null, null);
        $this->addColumn('UCL_Lm', 'UclLm', 'FLOAT', false, null, null);
        $this->addPrimaryKey('Locality', 'Locality', 'VARCHAR', true, 150, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('E_CODE', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 200, null);
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

} // MaturityTableMap
