<?php



/**
 * This class defines the structure of the 'myersdata' table.
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
class MyersdataTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MyersdataTableMap';

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
        $this->setName('myersdata');
        $this->setPhpName('Myersdata');
        $this->setClassname('Myersdata');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('id', 'Id', 'VARCHAR', true, 60, null);
        $this->addColumn('RecLag', 'Reclag', 'DOUBLE', false, null, null);
        $this->addPrimaryKey('RecYear', 'Recyear', 'DOUBLE', true, null, null);
        $this->addColumn('ssb', 'Ssb', 'DOUBLE', false, null, null);
        $this->addColumn('Rec', 'Rec', 'DOUBLE', false, null, null);
        $this->addColumn('ssbscaled', 'Ssbscaled', 'DOUBLE', false, null, null);
        $this->addColumn('RecScaled', 'Recscaled', 'DOUBLE', false, null, null);
        $this->addColumn('land', 'Land', 'DOUBLE', false, null, null);
        $this->addColumn('frpl', 'Frpl', 'DOUBLE', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MyersdataTableMap
