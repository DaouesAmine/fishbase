<?php



/**
 * This class defines the structure of the 'brains' table.
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
class BrainsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.BrainsTableMap';

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
        $this->setName('brains');
        $this->setPhpName('Brains');
        $this->setClassname('Brains');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 255, null);
        $this->addColumn('Number', 'Number', 'SMALLINT', false, null, null);
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('BodyWeight', 'Bodyweight', 'DOUBLE', false, null, null);
        $this->addColumn('BrainWeight', 'Brainweight', 'DOUBLE', false, null, null);
        $this->addColumn('EncCoeff', 'Enccoeff', 'DOUBLE', false, null, null);
        $this->addColumn('EncIndex', 'Encindex', 'SMALLINT', false, null, null);
        $this->addColumn('SL', 'Sl', 'DOUBLE', false, null, null);
        $this->addColumn('TL', 'Tl', 'DOUBLE', false, null, null);
        $this->addColumn('BRAINSRefNo', 'Brainsrefno', 'INTEGER', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // BrainsTableMap
