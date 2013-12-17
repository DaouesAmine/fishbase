<?php



/**
 * This class defines the structure of the 'spawning' table.
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
class SpawningTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SpawningTableMap';

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
        $this->setName('spawning');
        $this->setPhpName('Spawning');
        $this->setClassname('Spawning');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('SpawningRefNo', 'Spawningrefno', 'INTEGER', true, null, null);
        $this->addColumn('SourceRef', 'Sourceref', 'INTEGER', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('E_CODE', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('SpawningGround', 'Spawningground', 'VARCHAR', false, 10, null);
        $this->addPrimaryKey('Spawningarea', 'Spawningarea', 'VARCHAR', true, 200, null);
        $this->addColumn('Jan', 'Jan', 'FLOAT', false, null, null);
        $this->addColumn('Feb', 'Feb', 'FLOAT', false, null, null);
        $this->addColumn('Mar', 'Mar', 'FLOAT', false, null, null);
        $this->addColumn('Apr', 'Apr', 'FLOAT', false, null, null);
        $this->addColumn('May', 'May', 'FLOAT', false, null, null);
        $this->addColumn('Jun', 'Jun', 'FLOAT', false, null, null);
        $this->addColumn('Jul', 'Jul', 'FLOAT', false, null, null);
        $this->addColumn('Aug', 'Aug', 'FLOAT', false, null, null);
        $this->addColumn('Sep', 'Sep', 'FLOAT', false, null, null);
        $this->addColumn('Oct', 'Oct', 'FLOAT', false, null, null);
        $this->addColumn('Nov', 'Nov', 'FLOAT', false, null, null);
        $this->addColumn('Dec', 'Dec', 'FLOAT', false, null, null);
        $this->addColumn('GSI', 'Gsi', 'TINYINT', false, null, null);
        $this->addColumn('PercentFemales', 'Percentfemales', 'TINYINT', false, null, null);
        $this->addColumn('TempLow', 'Templow', 'FLOAT', false, null, null);
        $this->addColumn('TempHigh', 'Temphigh', 'FLOAT', false, null, null);
        $this->addColumn('SexRatiomid', 'Sexratiomid', 'FLOAT', false, null, null);
        $this->addColumn('SexRmodRef', 'Sexrmodref', 'INTEGER', false, null, null);
        $this->addColumn('FecundityMin', 'Fecunditymin', 'INTEGER', false, null, null);
        $this->addColumn('WeightMin', 'Weightmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthFecunMin', 'Lengthfecunmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthTypeFecMin', 'Lengthtypefecmin', 'CHAR', false, 2, null);
        $this->addColumn('FecundityRef', 'Fecundityref', 'INTEGER', false, null, null);
        $this->addColumn('FecundityMax', 'Fecunditymax', 'INTEGER', false, null, null);
        $this->addColumn('WeightMax', 'Weightmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthFecunMax', 'Lengthfecunmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthTypeFecMax', 'Lengthtypefecmax', 'CHAR', false, 2, null);
        $this->addColumn('FecComment', 'Feccomment', 'VARCHAR', false, 255, null);
        $this->addColumn('SpawningCycles', 'Spawningcycles', 'FLOAT', false, null, 1);
        $this->addColumn('SpCycleRef', 'Spcycleref', 'INTEGER', false, null, null);
        $this->addColumn('GestationMin', 'Gestationmin', 'SMALLINT', false, null, null);
        $this->addColumn('GestationMinRef', 'Gestationminref', 'INTEGER', false, null, null);
        $this->addColumn('GestationMax', 'Gestationmax', 'SMALLINT', false, null, null);
        $this->addColumn('GestationMaxRef', 'Gestationmaxref', 'INTEGER', false, null, null);
        $this->addColumn('LengthOffspringMin', 'Lengthoffspringmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthOffMinRef', 'Lengthoffminref', 'INTEGER', false, null, null);
        $this->addColumn('LengthOffspringMax', 'Lengthoffspringmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthOffMaxRef', 'Lengthoffmaxref', 'INTEGER', false, null, null);
        $this->addColumn('RelFecundityMin', 'Relfecunditymin', 'INTEGER', false, null, null);
        $this->addColumn('FecunMinRef', 'Fecunminref', 'INTEGER', false, null, null);
        $this->addColumn('RelFecundityMean', 'Relfecunditymean', 'INTEGER', false, null, null);
        $this->addColumn('FecunMeanRef', 'Fecunmeanref', 'INTEGER', false, null, null);
        $this->addColumn('RelFecundityMax', 'Relfecunditymax', 'INTEGER', false, null, null);
        $this->addColumn('FecunMaxRef', 'Fecunmaxref', 'INTEGER', false, null, null);
        $this->addColumn('LengthMin', 'Lengthmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthMax', 'Lengthmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'CHAR', false, 2, null);
        $this->addColumn('Number', 'Number', 'SMALLINT', false, null, null);
        $this->addColumn('a', 'A', 'FLOAT', false, null, null);
        $this->addColumn('b', 'B', 'FLOAT', false, null, null);
        $this->addColumn('CorrCoeff', 'Corrcoeff', 'FLOAT', false, null, null);
        $this->addColumn('Dailyspawnmin', 'Dailyspawnmin', 'FLOAT', false, null, null);
        $this->addColumn('SpawnMinRef', 'Spawnminref', 'INTEGER', false, null, null);
        $this->addColumn('Dailyspawnmean', 'Dailyspawnmean', 'FLOAT', false, null, null);
        $this->addColumn('SpawnMeanRef', 'Spawnmeanref', 'INTEGER', false, null, null);
        $this->addColumn('Dailyspawnmax', 'Dailyspawnmax', 'FLOAT', false, null, null);
        $this->addColumn('SpawnMaxRef', 'Spawnmaxref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
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

} // SpawningTableMap
