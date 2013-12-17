<?php



/**
 * This class defines the structure of the 'eggdev' table.
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
class EggdevTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.EggdevTableMap';

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
        $this->setName('eggdev');
        $this->setPhpName('Eggdev');
        $this->setClassname('Eggdev');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('EggDevRefNo', 'Eggdevrefno', 'INTEGER', true, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', true, 40, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Temperature', 'Temperature', 'DOUBLE', false, 15, null);
        $this->addColumn('Salinity', 'Salinity', 'DOUBLE', false, 15, null);
        $this->addColumn('Salinity2', 'Salinity2', 'VARCHAR', false, 10, null);
        $this->addColumn('EggDiameter', 'Eggdiameter', 'DOUBLE', false, 15, null);
        $this->addColumn('EggDevTime', 'Eggdevtime', 'DOUBLE', true, 15, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('DataType', 'Datatype', 'VARCHAR', false, 26, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 65, null);
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

} // EggdevTableMap
