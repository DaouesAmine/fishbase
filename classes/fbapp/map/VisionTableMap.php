<?php



/**
 * This class defines the structure of the 'vision' table.
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
class VisionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.VisionTableMap';

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
        $this->setName('vision');
        $this->setPhpName('Vision');
        $this->setClassname('Vision');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('VisionRefNo', 'Visionrefno', 'INTEGER', false, null, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 23, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 30, null);
        $this->addColumn('Sensit', 'Sensit', 'DOUBLE', true, null, null);
        $this->addColumn('ConfInt', 'Confint', 'DOUBLE', false, null, null);
        $this->addColumn('DataRefNo', 'Datarefno', 'INTEGER', false, null, null);
        $this->addColumn('OtherPigment', 'Otherpigment', 'TINYINT', false, null, null);
        $this->addColumn('scratch', 'Scratch', 'VARCHAR', false, 110, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
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

} // VisionTableMap
