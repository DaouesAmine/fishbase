<?php



/**
 * This class defines the structure of the 'gazetteer' table.
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
class GazetteerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GazetteerTableMap';

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
        $this->setName('gazetteer');
        $this->setPhpName('Gazetteer');
        $this->setClassname('Gazetteer');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('GazetCode', 'Gazetcode', 'INTEGER', true, null, null);
        $this->addColumn('Gazetteer', 'Gazetteer', 'VARCHAR', false, 50, null);
        $this->addColumn('OtherNames', 'Othernames', 'VARCHAR', false, 255, null);
        $this->addColumn('LocalityType', 'Localitytype', 'VARCHAR', false, 50, null);
        $this->addColumn('SeaDrainage', 'Seadrainage', 'VARCHAR', false, 50, null);
        $this->addColumn('Province', 'Province', 'VARCHAR', false, 50, null);
        $this->addColumn('C_CODE', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('ABB', 'Abb', 'CHAR', false, 3, null);
        $this->addColumn('AreaCodeInland', 'Areacodeinland', 'SMALLINT', false, null, null);
        $this->addColumn('AreaCodeMarine', 'Areacodemarine', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeDeg', 'Latitudedeg', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeMin', 'Latitudemin', 'SMALLINT', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'CHAR', false, null, null);
        $this->addColumn('LongitudeDeg', 'Longitudedeg', 'SMALLINT', false, null, null);
        $this->addColumn('LongitudeMin', 'Longitudemin', 'SMALLINT', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'CHAR', false, null, null);
        $this->addColumn('Accuracy', 'Accuracy', 'VARCHAR', false, 50, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GazetteerTableMap
