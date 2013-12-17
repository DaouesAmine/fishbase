<?php



/**
 * This class defines the structure of the 'popll' table.
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
class PopllTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.PopllTableMap';

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
        $this->setName('popll');
        $this->setPhpName('Popll');
        $this->setClassname('Popll');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Length1', 'Length1', 'VARCHAR', true, 5, null);
        $this->addColumn('Length2', 'Length2', 'VARCHAR', true, 5, null);
        $this->addColumn('a', 'A', 'FLOAT', false, null, 0);
        $this->addColumn('b', 'B', 'FLOAT', true, null, null);
        $this->addColumn('LengthMin', 'Lengthmin', 'FLOAT', false, null, null);
        $this->addColumn('LengthMax', 'Lengthmax', 'FLOAT', false, null, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 5, null);
        $this->addColumn('Number', 'Number', 'INTEGER', false, null, null);
        $this->addColumn('r', 'R', 'FLOAT', false, null, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', true, 8, '');
        $this->addColumn('Comment', 'Comment', 'VARCHAR', false, 250, null);
        $this->addColumn('DataRef', 'Dataref', 'INTEGER', false, null, null);
        $this->addColumn('Entered', 'Entered', 'FLOAT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'FLOAT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'FLOAT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PopllTableMap
