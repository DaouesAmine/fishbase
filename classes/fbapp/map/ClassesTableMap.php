<?php



/**
 * This class defines the structure of the 'classes' table.
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
class ClassesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ClassesTableMap';

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
        $this->setName('classes');
        $this->setPhpName('Classes');
        $this->setClassname('Classes');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('ClassNum', 'Classnum', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Class', 'Class', 'VARCHAR', true, 18, null);
        $this->addColumn('ClassRefNo', 'Classrefno', 'INTEGER', false, null, null);
        $this->addColumn('SortNo', 'Sortno', 'SMALLINT', false, null, null);
        $this->addColumn('Synonym', 'Synonym', 'TINYINT', false, null, null);
        $this->addColumn('AuthorYear', 'Authoryear', 'VARCHAR', false, 100, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 18, null);
        $this->addColumn('BodyShapeI', 'Bodyshapei', 'VARCHAR', false, 20, null);
        $this->addColumn('WaterSalinity', 'Watersalinity', 'VARCHAR', false, 21, null);
        $this->addColumn('SpeciesCount', 'Speciescount', 'SMALLINT', false, null, null);
        $this->addColumn('SuperClass', 'Superclass', 'VARCHAR', false, 18, null);
        $this->addColumn('Subclass', 'Subclass', 'VARCHAR', false, 18, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ClassesTableMap
