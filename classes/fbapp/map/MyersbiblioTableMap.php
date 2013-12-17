<?php



/**
 * This class defines the structure of the 'myersbiblio' table.
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
class MyersbiblioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MyersbiblioTableMap';

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
        $this->setName('myersbiblio');
        $this->setPhpName('Myersbiblio');
        $this->setClassname('Myersbiblio');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ID', 'Id', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('RefNo', 'Refno', 'INTEGER', true, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('RefPage', 'Refpage', 'VARCHAR', false, 30, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 255, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MyersbiblioTableMap
