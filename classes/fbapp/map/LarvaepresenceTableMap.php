<?php



/**
 * This class defines the structure of the 'larvaepresence' table.
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
class LarvaepresenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LarvaepresenceTableMap';

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
        $this->setName('larvaepresence');
        $this->setPhpName('Larvaepresence');
        $this->setClassname('Larvaepresence');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('Autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('LarvalRefNo', 'Larvalrefno', 'INTEGER', true, null, null);
        $this->addColumn('SourceRef', 'Sourceref', 'INTEGER', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addPrimaryKey('Larvalarea', 'Larvalarea', 'VARCHAR', true, 100, null);
        $this->addColumn('LatitudeDeg', 'Latitudedeg', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeMin', 'Latitudemin', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'CHAR', false, null, null);
        $this->addColumn('LatitudeDegTo', 'Latitudedegto', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeMinTo', 'Latitudeminto', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouthTo', 'Northsouthto', 'CHAR', false, null, null);
        $this->addColumn('LongitudeDeg', 'Longitudedeg', 'SMALLINT', false, null, null);
        $this->addColumn('LongitudeMin', 'Longitudemin', 'FLOAT', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'CHAR', false, null, null);
        $this->addColumn('LongitudeDegTo', 'Longitudedegto', 'SMALLINT', false, null, null);
        $this->addColumn('LongitudeMinTo', 'Longitudeminto', 'FLOAT', false, null, null);
        $this->addColumn('EastWestTo', 'Eastwestto', 'CHAR', false, null, null);
        $this->addColumn('Jan', 'Jan', 'FLOAT', false, null, null);
        $this->addColumn('Feb', 'Feb', 'FLOAT', false, null, null);
        $this->addColumn('Mar', 'Mar', 'FLOAT', false, null, null);
        $this->addColumn('Apr', 'Apr', 'FLOAT', false, null, null);
        $this->addColumn('May', 'May', 'FLOAT', false, null, null);
        $this->addColumn('Jun', 'Jun', 'FLOAT', false, null, null);
        $this->addColumn('Jul', 'Jul', 'FLOAT', false, null, null);
        $this->addColumn('Aug', 'Aug', 'FLOAT', false, null, null);
        $this->addColumn('Sep', 'Sep', 'FLOAT', false, null, null);
        $this->addColumn('Oct', 'Oct', 'FLOAT', false, null, null);
        $this->addColumn('Nov', 'Nov', 'FLOAT', false, null, null);
        $this->addColumn('Dec', 'Dec', 'FLOAT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'DATE', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'DATE', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'DATE', false, null, null);
        $this->addColumn('LarvPresRemarks', 'Larvpresremarks', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LarvaepresenceTableMap
