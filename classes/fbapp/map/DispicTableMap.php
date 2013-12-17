<?php



/**
 * This class defines the structure of the 'dispic' table.
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
class DispicTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.DispicTableMap';

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
        $this->setName('dispic');
        $this->setPhpName('Dispic');
        $this->setClassname('Dispic');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('PicNum', 'Picnum', 'VARCHAR', false, 20, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 50, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 50, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('DisCode', 'Discode', 'INTEGER', false, null, null);
        $this->addColumn('RefNo', 'Refno', 'INTEGER', false, null, null);
        $this->addColumn('Photographer', 'Photographer', 'VARCHAR', false, 50, null);
        $this->addColumn('Year', 'Year', 'VARCHAR', false, 10, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 100, null);
        $this->addPrimaryKey('PicFile', 'Picfile', 'VARCHAR', true, 12, '');
        $this->addColumn('Copyright', 'Copyright', 'VARCHAR', false, 19, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Scanned', 'Scanned', 'BOOLEAN', false, 1, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // DispicTableMap
