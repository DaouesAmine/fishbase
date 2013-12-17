<?php



/**
 * This class defines the structure of the 'popqb' table.
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
class PopqbTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PopqbTableMap';

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
        $this->setName('popqb');
        $this->setPhpName('Popqb');
        $this->setClassname('Popqb');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('PopQBRefNo', 'Popqbrefno', 'INTEGER', false, null, null);
        $this->addColumn('PopQB', 'Popqb', 'DOUBLE', true, null, null);
        $this->addColumn('MaintQB', 'Maintqb', 'DOUBLE', false, null, null);
        $this->addColumn('Winf', 'Winf', 'DOUBLE', false, null, null);
        $this->addColumn('FoodType', 'Foodtype', 'VARCHAR', false, 23, null);
        $this->addColumn('K', 'K', 'DOUBLE', false, null, null);
        $this->addColumn('Salinity', 'Salinity', 'VARCHAR', false, 10, null);
        $this->addColumn('t0', 'T0', 'DOUBLE', false, null, null);
        $this->addColumn('Temperature', 'Temperature', 'DOUBLE', false, null, null);
        $this->addColumn('Mortality', 'Mortality', 'DOUBLE', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 30, null);
        $this->addColumn('b', 'B', 'DOUBLE', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('QBRemarks', 'Qbremarks', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
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

} // PopqbTableMap
