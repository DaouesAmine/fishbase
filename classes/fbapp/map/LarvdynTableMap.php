<?php



/**
 * This class defines the structure of the 'larvdyn' table.
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
class LarvdynTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LarvdynTableMap';

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
        $this->setName('larvdyn');
        $this->setPhpName('Larvdyn');
        $this->setClassname('Larvdyn');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 23, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 30, null);
        $this->addColumn('LarvDynRefNo', 'Larvdynrefno', 'INTEGER', false, null, null);
        $this->addColumn('Ecosystem', 'Ecosystem', 'VARCHAR', false, 11, null);
        $this->addColumn('Temperature', 'Temperature', 'FLOAT', false, null, null);
        $this->addColumn('Duration', 'Duration', 'FLOAT', false, null, null);
        $this->addColumn('WHatch', 'Whatch', 'SMALLINT', false, null, null);
        $this->addColumn('WMeta', 'Wmeta', 'INTEGER', false, null, null);
        $this->addColumn('Growth', 'Growth', 'FLOAT', false, null, null);
        $this->addColumn('Mortality', 'Mortality', 'FLOAT', false, null, null);
        $this->addColumn('OxygenCons', 'Oxygencons', 'FLOAT', false, null, null);
        $this->addColumn('Ingestion', 'Ingestion', 'FLOAT', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 55, null);
        $this->addColumn('Refs', 'Refs', 'VARCHAR', false, 80, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'VARCHAR', false, 19, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LarvdynTableMap
