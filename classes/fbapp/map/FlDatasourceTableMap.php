<?php



/**
 * This class defines the structure of the 'fl_datasource' table.
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
class FlDatasourceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlDatasourceTableMap';

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
        $this->setName('fl_datasource');
        $this->setPhpName('FlDatasource');
        $this->setClassname('FlDatasource');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('DataSourceCode', 'Datasourcecode', 'INTEGER', true, null, null);
        $this->addColumn('Author', 'Author', 'VARCHAR', true, 255, '');
        $this->addColumn('Year', 'Year', 'SMALLINT', false, null, null);
        $this->addColumn('Title', 'Title', 'VARCHAR', true, 255, '');
        $this->addColumn('Source', 'Source', 'VARCHAR', false, 255, null);
        $this->addColumn('Publisher', 'Publisher', 'VARCHAR', false, 255, null);
        $this->addColumn('Volume', 'Volume', 'VARCHAR', false, 50, null);
        $this->addColumn('Pagination', 'Pagination', 'VARCHAR', false, 50, null);
        $this->addColumn('OriginalSourceUsed', 'Originalsourceused', 'VARCHAR', false, 50, null);
        $this->addColumn('Description', 'Description', 'CLOB', false, null, null);
        $this->addColumn('Editable', 'Editable', 'VARCHAR', false, 50, '-1');
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FlDatasourceTableMap
