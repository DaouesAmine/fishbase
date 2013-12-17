<?php



/**
 * This class defines the structure of the 'countrysub' table.
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
class CountrysubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CountrysubTableMap';

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
        $this->setName('countrysub');
        $this->setPhpName('Countrysub');
        $this->setClassname('Countrysub');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('Stockcode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addPrimaryKey('CSub_Code', 'CsubCode', 'VARCHAR', true, 6, '');
        $this->addColumn('CSubRefNo', 'Csubrefno', 'INTEGER', false, null, null);
        $this->addColumn('Status', 'Status', 'VARCHAR', false, 20, 'native');
        $this->addColumn('Abundance', 'Abundance', 'VARCHAR', false, 38, null);
        $this->addColumn('RefAbundance', 'Refabundance', 'INTEGER', false, null, null);
        $this->addColumn('Comments', 'Comments', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'CHAR', false, 19, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'CHAR', false, 19, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'CHAR', false, 19, null);
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CountrysubTableMap
