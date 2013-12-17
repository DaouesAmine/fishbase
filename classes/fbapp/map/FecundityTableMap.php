<?php



/**
 * This class defines the structure of the 'fecundity' table.
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
class FecundityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FecundityTableMap';

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
        $this->setName('fecundity');
        $this->setPhpName('Fecundity');
        $this->setClassname('Fecundity');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('MainRefNo', 'Mainrefno', 'INTEGER', false, null, null);
        $this->addColumn('SourceRef', 'Sourceref', 'INTEGER', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('E_CODE', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 250, null);
        $this->addColumn('FecundityMin', 'Fecunditymin', 'INTEGER', false, null, null);
        $this->addColumn('WeightMin', 'Weightmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthFecunMin', 'Lengthfecunmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthTypeFecMin', 'Lengthtypefecmin', 'VARCHAR', false, 2, null);
        $this->addColumn('FecundityMax', 'Fecunditymax', 'INTEGER', false, null, null);
        $this->addColumn('WeightMax', 'Weightmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthFecunMax', 'Lengthfecunmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthTypeFecMax', 'Lengthtypefecmax', 'VARCHAR', false, 2, null);
        $this->addColumn('FecComment', 'Feccomment', 'VARCHAR', false, 255, null);
        $this->addColumn('FecundityRef', 'Fecundityref', 'INTEGER', false, null, null);
        $this->addColumn('RelFecundityMin', 'Relfecunditymin', 'INTEGER', false, null, null);
        $this->addColumn('FecunMinRef', 'Fecunminref', 'INTEGER', false, null, null);
        $this->addColumn('RelFecundityMean', 'Relfecunditymean', 'INTEGER', false, null, null);
        $this->addColumn('FecunMeanRef', 'Fecunmeanref', 'INTEGER', false, null, null);
        $this->addColumn('RelFecundityMax', 'Relfecunditymax', 'INTEGER', false, null, null);
        $this->addColumn('FecunMaxRef', 'Fecunmaxref', 'INTEGER', false, null, null);
        $this->addColumn('LengthMin', 'Lengthmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthMax', 'Lengthmax', 'FLOAT', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'VARCHAR', false, 2, null);
        $this->addColumn('Number', 'Number', 'SMALLINT', false, null, null);
        $this->addColumn('a', 'A', 'FLOAT', false, null, null);
        $this->addColumn('b', 'B', 'FLOAT', false, null, null);
        $this->addColumn('r2', 'R2', 'FLOAT', false, null, null);
        $this->addColumn('SEa', 'Sea', 'FLOAT', false, null, null);
        $this->addColumn('SEb', 'Seb', 'FLOAT', false, null, null);
        $this->addColumn('SDa', 'Sda', 'FLOAT', false, null, null);
        $this->addColumn('SDb', 'Sdb', 'FLOAT', false, null, null);
        $this->addColumn('LCLa', 'Lcla', 'FLOAT', false, null, null);
        $this->addColumn('UCLa', 'Ucla', 'FLOAT', false, null, null);
        $this->addColumn('LCLb', 'Lclb', 'FLOAT', false, null, null);
        $this->addColumn('UCLb', 'Uclb', 'FLOAT', false, null, null);
        $this->addColumn('SpawningCycles', 'Spawningcycles', 'FLOAT', false, null, null);
        $this->addColumn('SpCycleRef', 'Spcycleref', 'INTEGER', false, null, null);
        $this->addColumn('AddInfos', 'Addinfos', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('autoctr_spawn', 'AutoctrSpawn', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FecundityTableMap
