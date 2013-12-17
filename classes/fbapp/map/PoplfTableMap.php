<?php



/**
 * This class defines the structure of the 'poplf' table.
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
class PoplfTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PoplfTableMap';

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
        $this->setName('poplf');
        $this->setPhpName('Poplf');
        $this->setClassname('Poplf');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('LFCode', 'Lfcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('LFRefno', 'Lfrefno', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Sex', 'Sex', 'VARCHAR', true, 13, null);
        $this->addPrimaryKey('Locality', 'Locality', 'VARCHAR', true, 65, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('LatDeg', 'Latdeg', 'SMALLINT', false, null, null);
        $this->addColumn('LatMin', 'Latmin', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'CHAR', false, null, null);
        $this->addColumn('LatDegS', 'Latdegs', 'SMALLINT', false, null, null);
        $this->addColumn('LatMinS', 'Latmins', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouthS', 'Northsouths', 'CHAR', false, null, null);
        $this->addColumn('LongDeg', 'Longdeg', 'SMALLINT', false, null, null);
        $this->addColumn('LongMin', 'Longmin', 'FLOAT', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'CHAR', false, null, null);
        $this->addColumn('LongDegE', 'Longdege', 'SMALLINT', false, null, null);
        $this->addColumn('LongMinE', 'Longmine', 'FLOAT', false, null, null);
        $this->addColumn('EastWestE', 'Eastweste', 'CHAR', false, null, null);
        $this->addColumn('Accuracy', 'Accuracy', 'VARCHAR', false, 9, null);
        $this->addColumn('DepthMin', 'Depthmin', 'SMALLINT', false, null, null);
        $this->addColumn('DepthMax', 'Depthmax', 'SMALLINT', false, null, null);
        $this->addColumn('TempMin', 'Tempmin', 'FLOAT', false, null, null);
        $this->addColumn('TempMax', 'Tempmax', 'FLOAT', false, null, null);
        $this->addColumn('MLMin', 'Mlmin', 'FLOAT', false, null, null);
        $this->addColumn('MLMax', 'Mlmax', 'FLOAT', false, null, null);
        $this->addColumn('MeanLength', 'Meanlength', 'FLOAT', false, null, null);
        $this->addColumn('Lm', 'Lm', 'FLOAT', false, null, null);
        $this->addColumn('Loo', 'Loo', 'FLOAT', false, null, null);
        $this->addColumn('Lopt', 'Lopt', 'FLOAT', false, null, null);
        $this->addColumn('Lc', 'Lc', 'FLOAT', false, null, null);
        $this->addColumn('SourceLinf', 'Sourcelinf', 'VARCHAR', false, 8, null);
        $this->addColumn('a', 'A', 'FLOAT', false, null, null);
        $this->addColumn('b', 'B', 'FLOAT', false, null, null);
        $this->addColumn('LWRef', 'Lwref', 'INTEGER', false, null, null);
        $this->addColumn('LType', 'Ltype', 'CHAR', false, 2, null);
        $this->addColumn('F', 'F', 'FLOAT', false, null, null);
        $this->addColumn('Z', 'Z', 'FLOAT', false, null, null);
        $this->addColumn('E', 'E', 'FLOAT', false, null, null);
        $this->addColumn('M', 'M', 'FLOAT', false, null, null);
        $this->addColumn('Unexploited', 'Unexploited', 'TINYINT', false, null, null);
        $this->addColumn('DataType', 'Datatype', 'VARCHAR', false, 20, null);
        $this->addColumn('GrowthLoo', 'Growthloo', 'FLOAT', false, null, null);
        $this->addColumn('GrowthK', 'Growthk', 'FLOAT', false, null, null);
        $this->addColumn('GrowthRef', 'Growthref', 'INTEGER', false, null, null);
        $this->addColumn('GrowthM', 'Growthm', 'FLOAT', false, null, null);
        $this->addColumn('GrowthMRef', 'Growthmref', 'INTEGER', false, null, null);
        $this->addColumn('tm', 'Tm', 'FLOAT', false, null, null);
        $this->addColumn('FrequencyType', 'Frequencytype', 'VARCHAR', false, 24, null);
        $this->addColumn('ClassInterval', 'Classinterval', 'FLOAT', false, null, null);
        $this->addPrimaryKey('Gear', 'Gear', 'VARCHAR', true, 15, null);
        $this->addColumn('GearII', 'Gearii', 'VARCHAR', false, 33, null);
        $this->addColumn('YearFrom', 'Yearfrom', 'INTEGER', false, null, null);
        $this->addColumn('YearTo', 'Yearto', 'INTEGER', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 255, null);
        $this->addColumn('Provider', 'Provider', 'VARCHAR', false, 255, null);
        $this->addColumn('EMail', 'Email', 'VARCHAR', false, 50, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
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

} // PoplfTableMap
