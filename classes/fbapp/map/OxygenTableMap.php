<?php



/**
 * This class defines the structure of the 'oxygen' table.
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
class OxygenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.OxygenTableMap';

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
        $this->setName('oxygen');
        $this->setPhpName('Oxygen');
        $this->setClassname('Oxygen');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('OxygenRefNo', 'Oxygenrefno', 'INTEGER', false, null, null);
        $this->addColumn('TestCode', 'Testcode', 'VARCHAR', false, 7, null);
        $this->addColumn('FamilyOxRef', 'Familyoxref', 'VARCHAR', false, 30, null);
        $this->addColumn('SpeciesOxRef', 'Speciesoxref', 'VARCHAR', false, 50, null);
        $this->addColumn('Weight', 'Weight', 'DOUBLE', true, 15, null);
        $this->addColumn('Number', 'Number', 'SMALLINT', false, null, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', false, 10, null);
        $this->addColumn('Temp', 'Temp', 'DOUBLE', true, 15, null);
        $this->addColumn('Salinity', 'Salinity', 'SMALLINT', false, null, null);
        $this->addColumn('Oxygen', 'Oxygen', 'SMALLINT', false, null, null);
        $this->addColumn('Oxygenmgl', 'Oxygenmgl', 'DOUBLE', false, 15, null);
        $this->addColumn('OxygenCons', 'Oxygencons', 'DOUBLE', true, 15, null);
        $this->addColumn('MetabolicLevel', 'Metaboliclevel', 'VARCHAR', false, 8, null);
        $this->addColumn('AppliedStress', 'Appliedstress', 'VARCHAR', false, 14, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', true, null, null);
        $this->addColumn('SwimmingSpeed', 'Swimmingspeed', 'DOUBLE', false, 15, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 60, null);
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

} // OxygenTableMap
