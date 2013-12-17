<?php



/**
 * This class defines the structure of the 'latgraphs' table.
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
class LatgraphsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LatgraphsTableMap';

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
        $this->setName('latgraphs');
        $this->setPhpName('Latgraphs');
        $this->setClassname('Latgraphs');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('Northernmost', 'Northernmost', 'INTEGER', false, null, null);
        $this->addColumn('NorthSouthS', 'Northsouths', 'VARCHAR', false, 1, null);
        $this->addColumn('Southermost', 'Southermost', 'INTEGER', false, null, null);
        $this->addColumn('NorthSouthN', 'Northsouthn', 'VARCHAR', false, 1, null);
        $this->addColumn('LatBeg', 'Latbeg', 'INTEGER', false, null, null);
        $this->addColumn('LatEnd', 'Latend', 'INTEGER', false, null, null);
        $this->addColumn('LoClass', 'Loclass', 'INTEGER', false, null, null);
        $this->addColumn('HiClass', 'Hiclass', 'INTEGER', false, null, null);
        $this->addColumn('TotClass', 'Totclass', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LatgraphsTableMap
