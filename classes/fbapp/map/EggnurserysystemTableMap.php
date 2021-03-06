<?php



/**
 * This class defines the structure of the 'eggnurserysystem' table.
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
class EggnurserysystemTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.EggnurserysystemTableMap';

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
        $this->setName('eggnurserysystem');
        $this->setPhpName('Eggnurserysystem');
        $this->setClassname('Eggnurserysystem');
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
        $this->addColumn('NumberofEggs', 'Numberofeggs', 'SMALLINT', false, null, null);
        $this->addColumn('Unit', 'Unit', 'VARCHAR', false, 20, null);
        $this->addColumn('NurserySystemI', 'Nurserysystemi', 'VARCHAR', false, 50, null);
        $this->addColumn('NurserySystemII', 'Nurserysystemii', 'CLOB', false, null, null);
        $this->addColumn('CultureSystem', 'Culturesystem', 'VARCHAR', false, 50, null);
        $this->addColumn('MainWaterSource', 'Mainwatersource', 'VARCHAR', false, 50, null);
        $this->addColumn('SupplWaterSource', 'Supplwatersource', 'VARCHAR', false, 50, null);
        $this->addColumn('TempMin', 'Tempmin', 'FLOAT', false, null, null);
        $this->addColumn('TempMax', 'Tempmax', 'FLOAT', false, null, null);
        $this->addColumn('SalinMin', 'Salinmin', 'FLOAT', false, null, null);
        $this->addColumn('SalinMax', 'Salinmax', 'FLOAT', false, null, null);
        $this->addColumn('pHmin', 'Phmin', 'FLOAT', false, null, null);
        $this->addColumn('pHmax', 'Phmax', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMin', 'Oxygenmin', 'FLOAT', false, null, null);
        $this->addColumn('OxygenMax', 'Oxygenmax', 'FLOAT', false, null, null);
        $this->addColumn('HardnessMin', 'Hardnessmin', 'FLOAT', false, null, null);
        $this->addColumn('HardnessMax', 'Hardnessmax', 'FLOAT', false, null, null);
        $this->addColumn('IlluminationMin', 'Illuminationmin', 'SMALLINT', false, null, null);
        $this->addColumn('IlluminationMax', 'Illuminationmax', 'SMALLINT', false, null, null);
        $this->addColumn('EggMortalityMin', 'Eggmortalitymin', 'FLOAT', false, null, null);
        $this->addColumn('EggMortalityMax', 'Eggmortalitymax', 'INTEGER', false, null, 0);
        $this->addColumn('EyeingMin', 'Eyeingmin', 'SMALLINT', false, null, null);
        $this->addColumn('EyeingMax', 'Eyeingmax', 'SMALLINT', false, null, null);
        $this->addColumn('HatchDegreeMin', 'Hatchdegreemin', 'SMALLINT', false, null, null);
        $this->addColumn('HatchDegreeMax', 'Hatchdegreemax', 'SMALLINT', false, null, null);
        $this->addColumn('HatchHoursMin', 'Hatchhoursmin', 'FLOAT', false, null, null);
        $this->addColumn('HatchHoursMax', 'Hatchhoursmax', 'FLOAT', false, null, null);
        $this->addColumn('ProductionCycle', 'Productioncycle', 'SMALLINT', false, null, null);
        $this->addColumn('ProductionYear', 'Productionyear', 'SMALLINT', false, null, null);
        $this->addColumn('Comment', 'Comment', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'DOUBLE', false, null, null);
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

} // EggnurserysystemTableMap
