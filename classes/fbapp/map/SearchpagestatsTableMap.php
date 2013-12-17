<?php



/**
 * This class defines the structure of the 'searchpagestats' table.
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
class SearchpagestatsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SearchpagestatsTableMap';

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
        $this->setName('searchpagestats');
        $this->setPhpName('Searchpagestats');
        $this->setClassname('Searchpagestats');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('TableName', 'Tablename', 'VARCHAR', true, 25, null);
        $this->addColumn('ActualCount', 'Actualcount', 'INTEGER', false, null, null);
        $this->addColumn('DisplayCount', 'Displaycount', 'INTEGER', false, null, null);
        $this->addColumn('DateCovered', 'Datecovered', 'TIMESTAMP', false, null, null);
        $this->addColumn('HitsMonthInMillions', 'Hitsmonthinmillions', 'INTEGER', false, null, 0);
        $this->addColumn('Sessions', 'Sessions', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SearchpagestatsTableMap
