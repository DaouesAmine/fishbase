<?php



/**
 * This class defines the structure of the 'frynurserysystem' table.
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
class FrynurserysystemTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FrynurserysystemTableMap';

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
        $this->setName('frynurserysystem');
        $this->setPhpName('Frynurserysystem');
        $this->setClassname('Frynurserysystem');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addPrimaryKey('MainRef', 'Mainref', 'INTEGER', true, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 255, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('NumberofFry', 'Numberoffry', 'SMALLINT', false, null, null);
        $this->addColumn('NurserySystemI', 'Nurserysystemi', 'VARCHAR', false, 50, null);
        $this->addColumn('NurserySystemII', 'Nurserysystemii', 'CLOB', false, null, null);
        $this->addColumn('CultureSystem', 'Culturesystem', 'VARCHAR', false, 50, null);
        $this->addColumn('MainWaterSource', 'Mainwatersource', 'VARCHAR', false, 50, null);
        $this->addColumn('SupplWaterSource', 'Supplwatersource', 'VARCHAR', false, 50, null);
        $this->addColumn('TempMin', 'Tempmin', 'FLOAT', false, null, null);
        $this->addColumn('TempMax', 'Tempmax', 'FLOAT', false, null, null);
        $this->addColumn('SalinMin', 'Salinmin', 'FLOAT', false, null, null);
        $this->addColumn('SalinMax', 'Salinmax', 'FLOAT', false, null, null);
        $this->addColumn('pHMin', 'Phmin', 'FLOAT', false, null, null);
        $this->addColumn('pHMax', 'Phmax', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMin', 'Oxygenmin', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMax', 'Oxygenmax', 'FLOAT', false, null, null);
        $this->addColumn('IlluminationMin', 'Illuminationmin', 'INTEGER', false, null, null);
        $this->addColumn('IlluminationMax', 'Illuminationmax', 'INTEGER', false, null, null);
        $this->addColumn('StockingDensityOrg', 'Stockingdensityorg', 'VARCHAR', false, 50, null);
        $this->addColumn('StockingDensity', 'Stockingdensity', 'INTEGER', false, null, null);
        $this->addColumn('Unit', 'Unit', 'VARCHAR', false, 20, null);
        $this->addColumn('FoodI', 'Foodi', 'VARCHAR', false, 255, null);
        $this->addColumn('FoodII', 'Foodii', 'CLOB', false, null, null);
        $this->addColumn('ProductionPeriode', 'Productionperiode', 'VARCHAR', false, 50, null);
        $this->addColumn('TimetoAlevinsDaysMin', 'Timetoalevinsdaysmin', 'SMALLINT', false, null, null);
        $this->addColumn('TimetoAlevinsDaysMax', 'Timetoalevinsdaysmax', 'SMALLINT', false, null, null);
        $this->addColumn('TimetoAlevinsDaysDegMin', 'Timetoalevinsdaysdegmin', 'SMALLINT', false, null, null);
        $this->addColumn('TimetoAlevinsDaysDegMax', 'Timetoalevinsdaysdegmax', 'SMALLINT', false, null, null);
        $this->addColumn('MortalityrateOrg', 'Mortalityrateorg', 'VARCHAR', false, 50, null);
        $this->addColumn('MortalityRateMin', 'Mortalityratemin', 'FLOAT', false, null, null);
        $this->addColumn('MortalityRateMax', 'Mortalityratemax', 'FLOAT', false, null, null);
        $this->addColumn('GrowthRate', 'Growthrate', 'VARCHAR', false, 255, null);
        $this->addColumn('FCR', 'Fcr', 'FLOAT', false, null, null);
        $this->addColumn('ProductionCycle', 'Productioncycle', 'SMALLINT', false, null, null);
        $this->addColumn('UnitCycle', 'Unitcycle', 'VARCHAR', false, 20, null);
        $this->addColumn('ProductionYearOrg', 'Productionyearorg', 'VARCHAR', false, 50, null);
        $this->addColumn('ProductionYear', 'Productionyear', 'SMALLINT', false, null, null);
        $this->addColumn('UnitYear', 'Unityear', 'VARCHAR', false, 20, null);
        $this->addColumn('Comment', 'Comment', 'CLOB', false, null, null);
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

} // FrynurserysystemTableMap
