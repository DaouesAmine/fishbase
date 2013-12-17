<?php



/**
 * This class defines the structure of the 'swimming' table.
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
class SwimmingTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SwimmingTableMap';

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
        $this->setName('swimming');
        $this->setPhpName('Swimming');
        $this->setClassname('Swimming');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addColumn('SwimRefMain', 'Swimrefmain', 'INTEGER', false, null, null);
        $this->addColumn('AdultType', 'Adulttype', 'VARCHAR', false, 40, null);
        $this->addColumn('AdultMode', 'Adultmode', 'VARCHAR', false, 15, null);
        $this->addColumn('AdultRef', 'Adultref', 'INTEGER', false, null, null);
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 150, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('AspectRatio', 'Aspectratio', 'FLOAT', false, null, null);
        $this->addColumn('AspectRef', 'Aspectref', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SwimmingTableMap
