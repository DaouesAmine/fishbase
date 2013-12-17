<?php



/**
 * This class defines the structure of the 'webfish' table.
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
class WebfishTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.WebfishTableMap';

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
        $this->setName('webfish');
        $this->setPhpName('Webfish');
        $this->setClassname('Webfish');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('WebDBName', 'Webdbname', 'VARCHAR', false, 50, null);
        $this->addColumn('HomePage', 'Homepage', 'CLOB', false, null, null);
        $this->addColumn('HP', 'Hp', 'VARCHAR', false, 255, null);
        $this->addColumn('RootURL', 'Rooturl', 'VARCHAR', false, 255, null);
        $this->addColumn('Description', 'Description', 'VARCHAR', false, 255, null);
        $this->addColumn('Environment', 'Environment', 'VARCHAR', false, 10, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
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

} // WebfishTableMap
