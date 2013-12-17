<?php



/**
 * This class defines the structure of the 'seafoodad' table.
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
class SeafoodadTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.SeafoodadTableMap';

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
        $this->setName('seafoodad');
        $this->setPhpName('Seafoodad');
        $this->setClassname('Seafoodad');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, 0);
        $this->addColumn('GuideID', 'Guideid', 'INTEGER', false, null, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 255, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('SLBSpeccode', 'Slbspeccode', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('SeafoodGroup', 'Seafoodgroup', 'CHAR', false, 25, null);
        $this->addColumn('Status', 'Status', 'VARCHAR', false, 12, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 255, null);
        $this->addColumn('c_code_caught', 'CCodeCaught', 'VARCHAR', false, 4, null);
        $this->addColumn('GuideURL', 'Guideurl', 'VARCHAR', false, 255, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('status_order', 'StatusOrder', 'TINYINT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SeafoodadTableMap
