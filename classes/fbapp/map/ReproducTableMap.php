<?php



/**
 * This class defines the structure of the 'reproduc' table.
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
class ReproducTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ReproducTableMap';

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
        $this->setName('reproduc');
        $this->setPhpName('Reproduc');
        $this->setClassname('Reproduc');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('ReproducRefNo', 'Reproducrefno', 'INTEGER', false, null, null);
        $this->addColumn('ReproMode', 'Repromode', 'VARCHAR', false, 20, null);
        $this->addColumn('Fertilization', 'Fertilization', 'VARCHAR', false, 35, null);
        $this->addColumn('MatingSystem', 'Matingsystem', 'VARCHAR', false, 11, null);
        $this->addColumn('MatingRefNo', 'Matingrefno', 'INTEGER', false, null, null);
        $this->addColumn('MatingQuality', 'Matingquality', 'VARCHAR', false, 56, null);
        $this->addColumn('Spawning', 'Spawning', 'VARCHAR', false, 37, null);
        $this->addColumn('BatchSpawner', 'Batchspawner', 'TINYINT', false, null, null);
        $this->addColumn('SpawnModRef', 'Spawnmodref', 'INTEGER', false, null, null);
        $this->addColumn('RepGuild1', 'Repguild1', 'VARCHAR', false, 11, null);
        $this->addColumn('RepGuild2', 'Repguild2', 'VARCHAR', false, 36, null);
        $this->addColumn('ParentalCare', 'Parentalcare', 'CHAR', false, 10, null);
        $this->addColumn('ParentalCareQ', 'Parentalcareq', 'CHAR', false, null, null);
        $this->addColumn('ParentalCareRef', 'Parentalcareref', 'INTEGER', false, null, null);
        $this->addColumn('RepAquarium', 'Repaquarium', 'VARCHAR', false, 12, null);
        $this->addColumn('RepAquaRef', 'Repaquaref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('AddInfos', 'Addinfos', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ReproducTableMap
