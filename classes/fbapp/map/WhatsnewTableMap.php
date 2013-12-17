<?php



/**
 * This class defines the structure of the 'whatsnew' table.
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
class WhatsnewTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.WhatsnewTableMap';

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
        $this->setName('whatsnew');
        $this->setPhpName('Whatsnew');
        $this->setClassname('Whatsnew');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('FeatureCode', 'Featurecode', 'INTEGER', true, null, null);
        $this->addColumn('Month', 'Month', 'CHAR', false, 2, null);
        $this->addColumn('Year', 'Year', 'VARCHAR', false, 4, null);
        $this->addColumn('Feature', 'Feature', 'CLOB', false, null, null);
        $this->addColumn('Example1', 'Example1', 'CLOB', false, null, null);
        $this->addColumn('Example2', 'Example2', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Checked', 'Checked', 'SMALLINT', false, null, null);
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

} // WhatsnewTableMap
