<?php



/**
 * This class defines the structure of the 'occurrence' table.
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
class OccurrenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.OccurrenceTableMap';

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
        $this->setName('occurrence');
        $this->setPhpName('Occurrence');
        $this->setClassname('Occurrence');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('catnum2', 'Catnum2', 'INTEGER', true, 20, null);
        $this->addColumn('OccurrenceRefNo', 'Occurrencerefno', 'INTEGER', false, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Syncode', 'Syncode', 'INTEGER', false, null, null);
        $this->addColumn('Stockcode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('GenusCol', 'Genuscol', 'VARCHAR', false, 20, null);
        $this->addColumn('SpeciesCol', 'Speciescol', 'VARCHAR', false, 30, null);
        $this->addColumn('ColName', 'Colname', 'VARCHAR', false, 255, null);
        $this->addColumn('PicName', 'Picname', 'VARCHAR', false, 12, null);
        $this->addColumn('CatNum', 'Catnum', 'VARCHAR', false, 30, null);
        $this->addColumn('URL', 'Url', 'CLOB', false, null, null);
        $this->addColumn('Station', 'Station', 'VARCHAR', false, 32, null);
        $this->addColumn('Cruise', 'Cruise', 'VARCHAR', false, 32, null);
        $this->addColumn('Gazetteer', 'Gazetteer', 'VARCHAR', false, 50, null);
        $this->addColumn('LocalityType', 'Localitytype', 'VARCHAR', false, 6, null);
        $this->addColumn('WaterDepthMin', 'Waterdepthmin', 'DOUBLE', false, null, null);
        $this->addColumn('WaterDepthMax', 'Waterdepthmax', 'DOUBLE', false, null, null);
        $this->addColumn('AltitudeMin', 'Altitudemin', 'SMALLINT', false, null, null);
        $this->addColumn('AltitudeMax', 'Altitudemax', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeDeg', 'Latitudedeg', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeMin', 'Latitudemin', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'VARCHAR', false, 1, null);
        $this->addColumn('LatitudeDec', 'Latitudedec', 'DOUBLE', false, null, null);
        $this->addColumn('LongitudeDeg', 'Longitudedeg', 'SMALLINT', false, null, null);
        $this->addColumn('LongitudeMIn', 'Longitudemin', 'FLOAT', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'VARCHAR', false, 1, null);
        $this->addColumn('LongitudeDec', 'Longitudedec', 'DOUBLE', false, null, null);
        $this->addColumn('Accuracy', 'Accuracy', 'VARCHAR', false, 9, null);
        $this->addColumn('Salinity', 'Salinity', 'VARCHAR', false, 11, null);
        $this->addColumn('LatitudeTo', 'Latitudeto', 'DOUBLE', false, null, null);
        $this->addColumn('LongitudeTo', 'Longitudeto', 'DOUBLE', false, null, null);
        $this->addColumn('LatitudeDegTo', 'Latitudedegto', 'SMALLINT', false, null, null);
        $this->addColumn('LatitudeMinTo', 'Latitudeminto', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouthTo', 'Northsouthto', 'VARCHAR', false, 1, null);
        $this->addColumn('LongitudeDegTo', 'Longitudedegto', 'SMALLINT', false, null, null);
        $this->addColumn('LongitudeMInTo', 'Longitudeminto', 'FLOAT', false, null, null);
        $this->addColumn('EastWestTo', 'Eastwestto', 'VARCHAR', false, 1, null);
        $this->addColumn('Temp', 'Temp', 'FLOAT', false, null, null);
        $this->addColumn('AreaCode', 'Areacode', 'SMALLINT', false, null, null);
        $this->addColumn('SeaDrainage', 'Seadrainage', 'VARCHAR', false, 25, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Province', 'Province', 'VARCHAR', false, 40, null);
        $this->addColumn('Date', 'Date', 'CHAR', false, 19, null);
        $this->addColumn('DateTo', 'Dateto', 'CHAR', false, 19, null);
        $this->addColumn('Year', 'Year', 'INTEGER', false, null, null);
        $this->addColumn('DateType', 'Datetype', 'VARCHAR', false, 20, null);
        $this->addColumn('DayTimeStart', 'Daytimestart', 'VARCHAR', false, 8, null);
        $this->addColumn('DayTimeStop', 'Daytimestop', 'VARCHAR', false, 8, null);
        $this->addColumn('Length', 'Length', 'FLOAT', false, null, null);
        $this->addColumn('LengthType', 'Lengthtype', 'VARCHAR', false, 2, null);
        $this->addColumn('Length2', 'Length2', 'FLOAT', false, null, null);
        $this->addColumn('LengthType2', 'Lengthtype2', 'VARCHAR', false, 2, null);
        $this->addColumn('Lengthmin', 'Lengthmin', 'FLOAT', false, null, null);
        $this->addColumn('Lengthmax', 'Lengthmax', 'FLOAT', false, null, null);
        $this->addColumn('Weight', 'Weight', 'FLOAT', false, null, null);
        $this->addColumn('Number', 'Number', 'INTEGER', false, null, null);
        $this->addColumn('PercentCatch', 'Percentcatch', 'FLOAT', false, null, null);
        $this->addColumn('Abundance', 'Abundance', 'VARCHAR', false, 38, null);
        $this->addColumn('LiveStage', 'Livestage', 'VARCHAR', false, 20, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', false, 7, null);
        $this->addColumn('Bottom', 'Bottom', 'VARCHAR', false, 255, null);
        $this->addColumn('Gear', 'Gear', 'VARCHAR', false, 255, null);
        $this->addColumn('Remark_FB', 'RemarkFb', 'VARCHAR', false, 150, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 255, null);
        $this->addColumn('Vessel', 'Vessel', 'VARCHAR', false, 25, null);
        $this->addColumn('Expedition', 'Expedition', 'VARCHAR', false, 50, null);
        $this->addColumn('Collector', 'Collector', 'VARCHAR', false, 255, null);
        $this->addColumn('Identifier', 'Identifier', 'VARCHAR', false, 30, null);
        $this->addColumn('IdentifierStandard', 'Identifierstandard', 'VARCHAR', false, 50, null);
        $this->addColumn('IdentifierYR', 'Identifieryr', 'SMALLINT', false, null, null);
        $this->addColumn('QName', 'Qname', 'SMALLINT', false, null, null);
        $this->addColumn('QIdentifier', 'Qidentifier', 'SMALLINT', false, null, null);
        $this->addColumn('QArea', 'Qarea', 'SMALLINT', false, null, null);
        $this->addColumn('QCountry', 'Qcountry', 'SMALLINT', false, null, null);
        $this->addColumn('QCoordinates', 'Qcoordinates', 'SMALLINT', false, null, null);
        $this->addColumn('Type', 'Type', 'VARCHAR', false, 16, null);
        $this->addColumn('MS', 'Ms', 'VARCHAR', false, 2, null);
        $this->addColumn('Storage', 'Storage', 'VARCHAR', false, 70, null);
        $this->addColumn('RecordType', 'Recordtype', 'VARCHAR', false, 14, null);
        $this->addColumn('BasisOfRecord', 'Basisofrecord', 'VARCHAR', false, 25, null);
        $this->addColumn('CheckedCol', 'Checkedcol', 'VARCHAR', false, 1, null);
        $this->addColumn('Validity', 'Validity', 'VARCHAR', false, 46, null);
        $this->addColumn('DateRecapture', 'Daterecapture', 'CHAR', false, 19, null);
        $this->addColumn('LatDegRel', 'Latdegrel', 'SMALLINT', false, null, null);
        $this->addColumn('LatMinRel', 'Latminrel', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouthRel', 'Northsouthrel', 'VARCHAR', false, 1, null);
        $this->addColumn('LongDegRel', 'Longdegrel', 'SMALLINT', false, null, null);
        $this->addColumn('LongMinRel', 'Longminrel', 'FLOAT', false, null, null);
        $this->addColumn('EastWestRel', 'Eastwestrel', 'VARCHAR', false, 1, null);
        $this->addColumn('LengthRel', 'Lengthrel', 'SMALLINT', false, null, null);
        $this->addColumn('LengthTypeRel', 'Lengthtyperel', 'VARCHAR', false, 2, null);
        $this->addColumn('WeightRel', 'Weightrel', 'FLOAT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'CHAR', false, 19, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'DATE', false, null, null);
        $this->addColumn('Locality1', 'Locality1', 'VARCHAR', false, 255, null);
        $this->addColumn('TwoDegree30W', 'Twodegree30w', 'VARCHAR', false, 10, null);
        $this->addColumn('OneDegree30W', 'Onedegree30w', 'VARCHAR', false, 10, null);
        $this->addColumn('TenDegree30W', 'Tendegree30w', 'VARCHAR', false, 10, null);
        $this->addColumn('CSquarecode', 'Csquarecode', 'VARCHAR', false, 10, null);
        $this->addColumn('PublishedDistance', 'Publisheddistance', 'FLOAT', false, null, null);
        $this->addColumn('Info', 'Info', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // OccurrenceTableMap
