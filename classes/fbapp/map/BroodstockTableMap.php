<?php



/**
 * This class defines the structure of the 'broodstock' table.
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
class BroodstockTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.BroodstockTableMap';

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
        $this->setName('broodstock');
        $this->setPhpName('Broodstock');
        $this->setClassname('Broodstock');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 50, null);
        $this->addPrimaryKey('MainRef', 'Mainref', 'INTEGER', true, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 255, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('BreedingI', 'Breedingi', 'VARCHAR', false, 50, null);
        $this->addColumn('Fecundity', 'Fecundity', 'INTEGER', false, null, 0);
        $this->addColumn('CountriesandRegions', 'Countriesandregions', 'VARCHAR', false, 255, null);
        $this->addColumn('BreedingII', 'Breedingii', 'VARCHAR', false, 50, null);
        $this->addColumn('BreedingIII', 'Breedingiii', 'CLOB', false, null, null);
        $this->addColumn('CultureSystem', 'Culturesystem', 'VARCHAR', false, 50, null);
        $this->addColumn('MainwaterSource', 'Mainwatersource', 'VARCHAR', false, 50, null);
        $this->addColumn('SupplWaterSource', 'Supplwatersource', 'VARCHAR', false, 50, null);
        $this->addColumn('TempMin', 'Tempmin', 'FLOAT', false, null, null);
        $this->addColumn('TempMax', 'Tempmax', 'FLOAT', false, null, null);
        $this->addColumn('SpawningTempMin', 'Spawningtempmin', 'FLOAT', false, null, null);
        $this->addColumn('SpawningTempMax', 'Spawningtempmax', 'FLOAT', false, null, null);
        $this->addColumn('SalinMin', 'Salinmin', 'FLOAT', false, null, null);
        $this->addColumn('SalinMax', 'Salinmax', 'FLOAT', false, null, null);
        $this->addColumn('pHMin', 'Phmin', 'FLOAT', false, null, null);
        $this->addColumn('pHMax', 'Phmax', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMin', 'Oxygenmin', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMax', 'Oxygenmax', 'FLOAT', false, null, null);
        $this->addColumn('HardnessMin', 'Hardnessmin', 'FLOAT', false, null, null);
        $this->addColumn('HardnessMax', 'Hardnessmax', 'FLOAT', false, null, null);
        $this->addColumn('BroodstockStockingRate', 'Broodstockstockingrate', 'FLOAT', false, null, null);
        $this->addColumn('Broodstockfemale', 'Broodstockfemale', 'SMALLINT', false, null, null);
        $this->addColumn('Broodstockmale', 'Broodstockmale', 'SMALLINT', false, null, null);
        $this->addColumn('SexRatio', 'Sexratio', 'VARCHAR', false, 50, null);
        $this->addColumn('EggProduction', 'Eggproduction', 'FLOAT', false, null, null);
        $this->addColumn('PostMortality', 'Postmortality', 'VARCHAR', false, 50, null);
        $this->addColumn('FCR', 'Fcr', 'FLOAT', false, null, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
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

} // BroodstockTableMap
