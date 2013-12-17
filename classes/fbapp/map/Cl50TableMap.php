<?php



/**
 * This class defines the structure of the 'cl50' table.
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
class Cl50TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.Cl50TableMap';

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
        $this->setName('cl50');
        $this->setPhpName('Cl50');
        $this->setClassname('Cl50');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('CL50Code', 'Cl50code', 'INTEGER', true, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 20, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 30, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 20, null);
        $this->addColumn('famcode', 'Famcode', 'SMALLINT', false, null, null);
        $this->addColumn('Number2', 'Number2', 'SMALLINT', false, null, null);
        $this->addColumn('Sex2', 'Sex2', 'VARCHAR', false, 7, null);
        $this->addColumn('CL50RefNo', 'Cl50refno', 'INTEGER', false, null, null);
        $this->addColumn('MinimumWeight', 'Minimumweight', 'FLOAT', false, null, null);
        $this->addColumn('ModalWeight', 'Modalweight', 'FLOAT', false, null, null);
        $this->addColumn('MaximumWeight', 'Maximumweight', 'FLOAT', false, null, null);
        $this->addColumn('LifeStage', 'Lifestage', 'VARCHAR', false, 9, null);
        $this->addColumn('Length', 'Length', 'FLOAT', false, null, null);
        $this->addColumn('AppliedStress', 'Appliedstress', 'VARCHAR', false, 14, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('Temp', 'Temp', 'FLOAT', false, null, null);
        $this->addColumn('Salinity', 'Salinity', 'SMALLINT', false, null, null);
        $this->addColumn('Oxygen', 'Oxygen', 'SMALLINT', false, null, null);
        $this->addColumn('Oxygenmgl', 'Oxygenmgl', 'FLOAT', false, null, null);
        $this->addColumn('pH', 'Ph', 'FLOAT', false, null, null);
        $this->addColumn('Alkalinity', 'Alkalinity', 'FLOAT', false, null, null);
        $this->addColumn('ChemicalGroup', 'Chemicalgroup', 'VARCHAR', false, 25, null);
        $this->addColumn('ChemicalGroup2', 'Chemicalgroup2', 'VARCHAR', false, 33, null);
        $this->addColumn('ChemicalName', 'Chemicalname', 'VARCHAR', false, 125, null);
        $this->addColumn('Purity', 'Purity', 'FLOAT', false, null, null);
        $this->addColumn('Vehicle', 'Vehicle', 'VARCHAR', false, 15, null);
        $this->addColumn('Purity2', 'Purity2', 'VARCHAR', false, 19, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 30, null);
        $this->addColumn('ChemicalUse', 'Chemicaluse', 'VARCHAR', false, 17, null);
        $this->addColumn('CL50', 'Cl50', 'FLOAT', false, null, null);
        $this->addColumn('Exposition', 'Exposition', 'SMALLINT', false, null, null);
        $this->addColumn('Flow', 'Flow', 'TINYINT', false, null, null);
        $this->addColumn('FlowRate', 'Flowrate', 'FLOAT', false, null, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('CL50RefNoFB', 'Cl50refnofb', 'INTEGER', false, null, null);
        $this->addColumn('DataRefFb', 'Datareffb', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Checked', 'Checked', 'SMALLINT', false, null, null);
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

} // Cl50TableMap
