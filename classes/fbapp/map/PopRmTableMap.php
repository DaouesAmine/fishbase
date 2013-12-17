<?php



/**
 * This class defines the structure of the 'pop_rm' table.
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
class PopRmTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PopRmTableMap';

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
        $this->setName('pop_rm');
        $this->setPhpName('PopRm');
        $this->setClassname('PopRm');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('PopRMRef', 'Poprmref', 'INTEGER', false, null, null);
        $this->addColumn('Data', 'Data', 'VARCHAR', false, 19, null);
        $this->addColumn('DataSourceRef', 'Datasourceref', 'INTEGER', false, null, null);
        $this->addColumn('rm', 'Rm', 'FLOAT', true, null, null);
        $this->addColumn('Loo', 'Loo', 'FLOAT', false, null, null);
        $this->addColumn('TLinfinity', 'Tlinfinity', 'FLOAT', false, null, null);
        $this->addColumn('K', 'K', 'FLOAT', false, null, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 2, null);
        $this->addColumn('Methodrm', 'Methodrm', 'VARCHAR', false, 27, null);
        $this->addColumn('Winfinity', 'Winfinity', 'FLOAT', false, null, null);
        $this->addColumn('Wm', 'Wm', 'FLOAT', false, null, null);
        $this->addColumn('LinfLmax', 'Linflmax', 'VARCHAR', false, 1, null);
        $this->addColumn('Reliability', 'Reliability', 'VARCHAR', false, 50, 'Not "checked"');
        $this->addColumn('loga', 'Loga', 'FLOAT', false, null, null);
        $this->addColumn('b', 'B', 'FLOAT', false, null, null);
        $this->addColumn('M', 'M', 'FLOAT', false, null, null);
        $this->addColumn('MethodM', 'Methodm', 'VARCHAR', false, 40, null);
        $this->addColumn('MRef', 'Mref', 'INTEGER', false, null, null);
        $this->addColumn('tm', 'Tm', 'FLOAT', false, null, null);
        $this->addColumn('Lm', 'Lm', 'FLOAT', false, null, null);
        $this->addColumn('TypeLm', 'Typelm', 'VARCHAR', false, 4, null);
        $this->addColumn('tmax', 'Tmax', 'FLOAT', false, null, null);
        $this->addColumn('F', 'F', 'FLOAT', false, null, null);
        $this->addColumn('LmLoo', 'Lmloo', 'FLOAT', false, null, null);
        $this->addColumn('unsexedRef', 'Unsexedref', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 55, null);
        $this->addColumn('GrowthEnviron', 'Growthenviron', 'VARCHAR', false, 50, null);
        $this->addColumn('Temperature', 'Temperature', 'FLOAT', false, null, null);
        $this->addColumn('DeltaT', 'Deltat', 'FLOAT', false, null, null);
        $this->addColumn('TempRef', 'Tempref', 'INTEGER', false, null, null);
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

} // PopRmTableMap
