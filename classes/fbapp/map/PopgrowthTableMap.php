<?php



/**
 * This class defines the structure of the 'popgrowth' table.
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
class PopgrowthTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PopgrowthTableMap';

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
        $this->setName('popgrowth');
        $this->setPhpName('Popgrowth');
        $this->setClassname('Popgrowth');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('E_CODE', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('PopGrowthRef', 'Popgrowthref', 'INTEGER', true, null, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', true, 7, null);
        $this->addColumn('Data', 'Data', 'VARCHAR', false, 30, null);
        $this->addColumn('DataSourceRef', 'Datasourceref', 'INTEGER', false, null, null);
        $this->addColumn('Loo', 'Loo', 'DOUBLE', true, 15, null);
        $this->addColumn('Number', 'Number', 'INTEGER', false, null, null);
        $this->addColumn('r2', 'R2', 'DOUBLE', false, 15, null);
        $this->addColumn('SE_Loo', 'SeLoo', 'DOUBLE', false, 15, null);
        $this->addColumn('SD_Loo', 'SdLoo', 'DOUBLE', false, 15, null);
        $this->addColumn('LCL_Loo', 'LclLoo', 'DOUBLE', false, 15, null);
        $this->addColumn('UCL_Loo', 'UclLoo', 'DOUBLE', false, 15, null);
        $this->addColumn('AssumedDistLoo', 'Assumeddistloo', 'VARCHAR', false, 27, null);
        $this->addColumn('TLinfinity', 'Tlinfinity', 'DOUBLE', false, 15, null);
        $this->addColumn('K', 'K', 'DOUBLE', true, 15, null);
        $this->addColumn('SE_K', 'SeK', 'DOUBLE', false, 15, null);
        $this->addColumn('SD_K', 'SdK', 'DOUBLE', false, 15, null);
        $this->addColumn('LCL_K', 'LclK', 'DOUBLE', false, 15, null);
        $this->addColumn('UCL_K', 'UclK', 'DOUBLE', false, 15, null);
        $this->addColumn('AssumedDistK', 'Assumeddistk', 'VARCHAR', false, 27, null);
        $this->addColumn('to', 'To', 'DOUBLE', false, 15, null);
        $this->addColumn('SE_to', 'SeTo', 'DOUBLE', false, 15, null);
        $this->addColumn('SD_to', 'SdTo', 'DOUBLE', false, 15, null);
        $this->addColumn('LCL_to', 'LclTo', 'DOUBLE', false, 15, null);
        $this->addColumn('UCL_to', 'UclTo', 'DOUBLE', false, 15, null);
        $this->addColumn('Type', 'Type', 'CHAR', false, 2, null);
        $this->addColumn('MethodGrowth', 'Methodgrowth', 'VARCHAR', false, 30, null);
        $this->addColumn('Winfinity', 'Winfinity', 'DOUBLE', false, 15, null);
        $this->addColumn('LinfLmax', 'Linflmax', 'BOOLEAN', false, 1, null);
        $this->addColumn('Auxim', 'Auxim', 'VARCHAR', false, 50, 'Not "checked"');
        $this->addColumn('LogKLogLoo', 'Logklogloo', 'DOUBLE', false, 15, null);
        $this->addColumn('SourceWinfinity', 'Sourcewinfinity', 'VARCHAR', false, 70, null);
        $this->addColumn('b', 'B', 'DOUBLE', false, 15, null);
        $this->addColumn('C', 'C', 'DOUBLE', false, 15, null);
        $this->addColumn('tmax', 'Tmax', 'DOUBLE', false, 15, null);
        $this->addColumn('tmaxRef', 'Tmaxref', 'INTEGER', false, null, null);
        $this->addColumn('tm', 'Tm', 'DOUBLE', false, 15, null);
        $this->addColumn('M', 'M', 'DOUBLE', false, 15, null);
        $this->addColumn('MethodM', 'Methodm', 'VARCHAR', false, 60, null);
        $this->addColumn('Mquality', 'Mquality', 'CHAR', false, 3, null);
        $this->addColumn('MRef', 'Mref', 'INTEGER', false, null, null);
        $this->addColumn('Number_M', 'NumberM', 'SMALLINT', false, null, null);
        $this->addColumn('r2_M', 'R2M', 'DOUBLE', false, 15, null);
        $this->addColumn('SE_M', 'SeM', 'DOUBLE', false, 15, null);
        $this->addColumn('SD_M', 'SdM', 'DOUBLE', false, 15, null);
        $this->addColumn('LCL_M', 'LclM', 'DOUBLE', false, 15, null);
        $this->addColumn('UCL_M', 'UclM', 'DOUBLE', false, 15, null);
        $this->addColumn('AssumedDistM', 'Assumeddistm', 'VARCHAR', false, 27, null);
        $this->addColumn('Lm', 'Lm', 'DOUBLE', false, 15, null);
        $this->addColumn('LmLoo', 'Lmloo', 'DOUBLE', false, 15, null);
        $this->addColumn('LmSex', 'Lmsex', 'VARCHAR', false, 50, null);
        $this->addColumn('TypeLm', 'Typelm', 'VARCHAR', false, 4, null);
        $this->addColumn('unsexedRef', 'Unsexedref', 'INTEGER', false, null, null);
        $this->addColumn('LmMale', 'Lmmale', 'DOUBLE', false, 15, null);
        $this->addColumn('LmLooMale', 'Lmloomale', 'DOUBLE', false, 15, null);
        $this->addColumn('LmFemale', 'Lmfemale', 'DOUBLE', false, 15, null);
        $this->addColumn('LmLooFemale', 'Lmloofemale', 'DOUBLE', false, 15, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 100, null);
        $this->addColumn('YearStart', 'Yearstart', 'INTEGER', false, null, null);
        $this->addColumn('YearEnd', 'Yearend', 'INTEGER', false, null, null);
        $this->addColumn('YearRemark', 'Yearremark', 'VARCHAR', false, 50, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('GrowthEnviron', 'Growthenviron', 'VARCHAR', false, 50, null);
        $this->addColumn('Temperature', 'Temperature', 'DOUBLE', false, 15, null);
        $this->addColumn('DeltaT', 'Deltat', 'DOUBLE', false, 15, null);
        $this->addColumn('TempRef', 'Tempref', 'INTEGER', false, null, null);
        $this->addColumn('Rm', 'Rm', 'DOUBLE', false, 15, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 255, null);
        $this->addColumn('Comment2', 'Comment2', 'VARCHAR', false, 255, null);
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

} // PopgrowthTableMap
