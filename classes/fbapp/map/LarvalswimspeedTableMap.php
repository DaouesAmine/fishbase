<?php



/**
 * This class defines the structure of the 'larvalswimspeed' table.
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
class LarvalswimspeedTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LarvalswimspeedTableMap';

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
        $this->setName('larvalswimspeed');
        $this->setPhpName('Larvalswimspeed');
        $this->setClassname('Larvalswimspeed');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('SpeedRefNo', 'Speedrefno', 'INTEGER', true, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Larvallocality', 'Larvallocality', 'VARCHAR', false, 200, null);
        $this->addColumn('Length', 'Length', 'DOUBLE', true, 15, null);
        $this->addColumn('LengthType', 'Lengthtype', 'CHAR', false, 3, null);
        $this->addColumn('SpeedLS', 'Speedls', 'DOUBLE', true, 15, null);
        $this->addColumn('LengthTypeSpeed', 'Lengthtypespeed', 'VARCHAR', false, 5, null);
        $this->addColumn('Speedms', 'Speedms', 'DOUBLE', false, 15, null);
        $this->addColumn('Mode', 'Mode', 'VARCHAR', false, 9, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('Reliable', 'Reliable', 'VARCHAR', false, 50, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 64, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('SLa', 'Sla', 'DOUBLE', false, 15, null);
        $this->addColumn('SLb', 'Slb', 'DOUBLE', false, 15, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LarvalswimspeedTableMap
