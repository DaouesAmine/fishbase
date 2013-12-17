<?php



/**
 * This class defines the structure of the 'classification_tree' table.
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
class ClassificationTreeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ClassificationTreeTableMap';

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
        $this->setName('classification_tree');
        $this->setPhpName('ClassificationTree');
        $this->setClassname('ClassificationTree');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 69, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 105, null);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 60, null);
        $this->addColumn('Class', 'Class', 'VARCHAR', false, 54, null);
        $this->addColumn('Order', 'Order', 'VARCHAR', false, 210, null);
        $this->addPrimaryKey('PKID', 'Pkid', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ClassificationTreeTableMap
