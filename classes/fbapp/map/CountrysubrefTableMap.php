<?php



/**
 * This class defines the structure of the 'countrysubref' table.
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
class CountrysubrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CountrysubrefTableMap';

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
        $this->setName('countrysubref');
        $this->setPhpName('Countrysubref');
        $this->setClassname('Countrysubref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('CSub_Code', 'CsubCode', 'VARCHAR', true, 6, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('CountrySub', 'Countrysub', 'VARCHAR', true, 50, null);
        $this->addColumn('OtherName', 'Othername', 'VARCHAR', false, 50, null);
        $this->addColumn('CountrySubType', 'Countrysubtype', 'VARCHAR', false, 50, null);
        $this->addColumn('CountrySubRank', 'Countrysubrank', 'SMALLINT', false, null, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 255, null);
        $this->addColumn('NorthernLatitude', 'Northernlatitude', 'SMALLINT', false, null, null);
        $this->addColumn('NorthernLatitudeNS', 'Northernlatitudens', 'VARCHAR', false, 1, null);
        $this->addColumn('SouthernLatitude', 'Southernlatitude', 'SMALLINT', false, null, null);
        $this->addColumn('SouthernLatitudeNS', 'Southernlatitudens', 'VARCHAR', false, 1, null);
        $this->addColumn('EasternLongitude', 'Easternlongitude', 'SMALLINT', false, null, null);
        $this->addColumn('EasternLongitudeEW', 'Easternlongitudeew', 'VARCHAR', false, 1, null);
        $this->addColumn('WesternLongitude', 'Westernlongitude', 'SMALLINT', false, null, null);
        $this->addColumn('WesternLongitudeEW', 'Westernlongitudeew', 'VARCHAR', false, 1, null);
        $this->addColumn('Capital', 'Capital', 'VARCHAR', false, 35, null);
        $this->addColumn('LatDec', 'Latdec', 'FLOAT', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'VARCHAR', false, 1, null);
        $this->addColumn('LongDec', 'Longdec', 'FLOAT', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'VARCHAR', false, 1, null);
        $this->addColumn('PolarBoreal', 'Polarboreal', 'BOOLEAN', false, 1, null);
        $this->addColumn('Temperate', 'Temperate', 'BOOLEAN', false, 1, null);
        $this->addColumn('Subtropical', 'Subtropical', 'BOOLEAN', false, 1, null);
        $this->addColumn('Tropical', 'Tropical', 'BOOLEAN', false, 1, null);
        $this->addColumn('AreaCodeInland', 'Areacodeinland', 'SMALLINT', false, null, null);
        $this->addColumn('AreaCodeMarineI', 'Areacodemarinei', 'SMALLINT', false, null, null);
        $this->addColumn('AreaCodeMarineII', 'Areacodemarineii', 'SMALLINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'CHAR', false, 19, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'CHAR', false, 19, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'CHAR', false, 19, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CountrysubrefTableMap
