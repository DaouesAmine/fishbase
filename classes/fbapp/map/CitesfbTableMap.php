<?php



/**
 * This class defines the structure of the 'citesfb' table.
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
class CitesfbTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CitesfbTableMap';

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
        $this->setName('citesfb');
        $this->setPhpName('Citesfb');
        $this->setClassname('Citesfb');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('RefNo', 'Refno', 'INTEGER', true, null, null);
        $this->addColumn('PageNo', 'Pageno', 'VARCHAR', false, 20, null);
        $this->addColumn('Topic', 'Topic', 'VARCHAR', false, 50, null);
        $this->addColumn('Referred', 'Referred', 'VARCHAR', false, 1, null);
        $this->addColumn('Impact', 'Impact', 'VARCHAR', false, 50, null);
        $this->addColumn('Data', 'Data', 'VARCHAR', false, 50, null);
        $this->addColumn('Subject', 'Subject', 'VARCHAR', false, 50, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'DATE', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'CHAR', false, 19, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CitesfbTableMap
