<?php



/**
 * This class defines the structure of the 'cultsys' table.
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
class CultsysTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CultsysTableMap';

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
        $this->setName('cultsys');
        $this->setPhpName('Cultsys');
        $this->setClassname('Cultsys');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('CultCode', 'Cultcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('CultSysRefNo', 'Cultsysrefno', 'INTEGER', true, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('NameofFarm', 'Nameoffarm', 'VARCHAR', false, 75, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('Latitude', 'Latitude', 'FLOAT', false, null, null);
        $this->addColumn('NS', 'Ns', 'CHAR', false, null, null);
        $this->addColumn('Longitude', 'Longitude', 'FLOAT', false, null, null);
        $this->addColumn('EW', 'Ew', 'CHAR', false, null, null);
        $this->addColumn('Altitude', 'Altitude', 'SMALLINT', false, null, null);
        $this->addPrimaryKey('Environment', 'Environment', 'VARCHAR', true, 75, null);
        $this->addColumn('TypeofCulture', 'Typeofculture', 'VARCHAR', false, 11, null);
        $this->addColumn('SexofFish', 'Sexoffish', 'VARCHAR', false, 14, null);
        $this->addColumn('CultureI', 'Culturei', 'VARCHAR', false, 14, null);
        $this->addColumn('CultureII', 'Cultureii', 'VARCHAR', false, 40, null);
        $this->addColumn('UnitCycle', 'Unitcycle', 'VARCHAR', false, 10, null);
        $this->addColumn('ProductionUnits', 'Productionunits', 'SMALLINT', false, null, null);
        $this->addColumn('Area', 'Area', 'FLOAT', false, null, null);
        $this->addColumn('AverageDepth', 'Averagedepth', 'FLOAT', false, null, null);
        $this->addColumn('Volume', 'Volume', 'FLOAT', false, null, null);
        $this->addColumn('MainWaterSource', 'Mainwatersource', 'VARCHAR', false, 13, null);
        $this->addColumn('SuppWaterSource', 'Suppwatersource', 'VARCHAR', false, 13, null);
        $this->addColumn('TempMax', 'Tempmax', 'FLOAT', false, null, null);
        $this->addColumn('SalinMax', 'Salinmax', 'FLOAT', false, null, null);
        $this->addColumn('pHMax', 'Phmax', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMax', 'Oxygenmax', 'FLOAT', false, null, null);
        $this->addColumn('SaturationMax', 'Saturationmax', 'FLOAT', false, null, null);
        $this->addColumn('AlcalinityMax', 'Alcalinitymax', 'FLOAT', false, null, null);
        $this->addColumn('TempMin', 'Tempmin', 'FLOAT', false, null, null);
        $this->addColumn('SalinMin', 'Salinmin', 'FLOAT', false, null, null);
        $this->addColumn('pHMin', 'Phmin', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMin', 'Oxygenmin', 'FLOAT', false, null, null);
        $this->addColumn('SaturationMin', 'Saturationmin', 'FLOAT', false, null, null);
        $this->addColumn('AlcalinityMin', 'Alcalinitymin', 'FLOAT', false, null, null);
        $this->addColumn('TempMod', 'Tempmod', 'FLOAT', false, null, null);
        $this->addColumn('SalinMod', 'Salinmod', 'FLOAT', false, null, null);
        $this->addColumn('pHMod', 'Phmod', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMod', 'Oxygenmod', 'FLOAT', false, null, null);
        $this->addColumn('SaturationMod', 'Saturationmod', 'FLOAT', false, null, null);
        $this->addColumn('AlcalinityMod', 'Alcalinitymod', 'FLOAT', false, null, null);
        $this->addColumn('FoodI', 'Foodi', 'VARCHAR', false, 31, null);
        $this->addColumn('FeedQuality', 'Feedquality', 'FLOAT', false, null, null);
        $this->addColumn('FeedTotal', 'Feedtotal', 'FLOAT', false, null, null);
        $this->addColumn('FeedType', 'Feedtype', 'VARCHAR', false, 10, null);
        $this->addColumn('FeedQuanity', 'Feedquanity', 'FLOAT', false, null, null);
        $this->addColumn('N', 'N', 'FLOAT', false, null, null);
        $this->addColumn('NUnit', 'Nunit', 'VARCHAR', false, 7, null);
        $this->addColumn('P', 'P', 'FLOAT', false, null, null);
        $this->addColumn('PUnit', 'Punit', 'VARCHAR', false, 7, null);
        $this->addColumn('ProductionPeriod', 'Productionperiod', 'SMALLINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('DescribeCult', 'Describecult', 'CLOB', false, null, null);
        $this->addColumn('DescribeFood', 'Describefood', 'CLOB', false, null, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CultsysTableMap
