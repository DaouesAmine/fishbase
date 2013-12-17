<?php



/**
 * This class defines the structure of the 'predatorhierarchy' table.
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
class PredatorhierarchyTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PredatorhierarchyTableMap';

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
        $this->setName('predatorhierarchy');
        $this->setPhpName('Predatorhierarchy');
        $this->setClassname('Predatorhierarchy');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('PREDATORRank', 'Predatorrank', 'INTEGER', false, null, 0);
        $this->addColumn('PREDATORIIRank', 'Predatoriirank', 'INTEGER', false, null, 0);
        $this->addColumn('PREDATORStageRank', 'Predatorstagerank', 'INTEGER', false, null, 0);
        $this->addColumn('PREYStageRank', 'Preystagerank', 'INTEGER', false, null, 0);
        $this->addColumn('PREDATORI', 'Predatori', 'VARCHAR', false, 30, null);
        $this->addColumn('PREDATORII', 'Predatorii', 'VARCHAR', false, 30, null);
        $this->addColumn('PREDATORStage', 'Predatorstage', 'VARCHAR', false, 50, null);
        $this->addColumn('PREYStage', 'Preystage', 'VARCHAR', false, 50, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PredatorhierarchyTableMap
