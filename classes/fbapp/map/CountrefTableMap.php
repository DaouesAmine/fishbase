<?php



/**
 * This class defines the structure of the 'countref' table.
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
class CountrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CountrefTableMap';

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
        $this->setName('countref');
        $this->setPhpName('Countref');
        $this->setClassname('Countref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('PAESE', 'Paese', 'VARCHAR', false, 30, null);
        $this->addColumn('Note', 'Note', 'VARCHAR', false, 60, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('ABB', 'Abb', 'VARCHAR', false, 3, null);
        $this->addColumn('ISO_Code', 'IsoCode', 'VARCHAR', false, 50, null);
        $this->addColumn('ISO3Alpha', 'Iso3alpha', 'VARCHAR', false, 3, null);
        $this->addColumn('ISO2Alpha', 'Iso2alpha', 'VARCHAR', false, 2, null);
        $this->addColumn('SAUP_Code', 'SaupCode', 'INTEGER', false, null, null);
        $this->addColumn('Used', 'Used', 'TINYINT', false, null, null);
        $this->addColumn('Capital', 'Capital', 'VARCHAR', false, 30, null);
        $this->addColumn('LatDeg', 'Latdeg', 'INTEGER', false, null, null);
        $this->addColumn('LatMin', 'Latmin', 'DOUBLE', false, null, null);
        $this->addColumn('NorthSouth', 'Northsouth', 'VARCHAR', false, 1, null);
        $this->addColumn('LongDeg', 'Longdeg', 'INTEGER', false, null, null);
        $this->addColumn('LongMin', 'Longmin', 'DOUBLE', false, null, null);
        $this->addColumn('EastWest', 'Eastwest', 'VARCHAR', false, 1, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 255, null);
        $this->addColumn('PolarBoreal', 'Polarboreal', 'TINYINT', false, null, null);
        $this->addColumn('Temperate', 'Temperate', 'TINYINT', false, null, null);
        $this->addColumn('Subtropical', 'Subtropical', 'TINYINT', false, null, null);
        $this->addColumn('Tropical', 'Tropical', 'TINYINT', false, null, null);
        $this->addColumn('Landlocked', 'Landlocked', 'TINYINT', false, null, null);
        $this->addColumn('GeographicArea', 'Geographicarea', 'VARCHAR', false, 255, null);
        $this->addColumn('Region', 'Region', 'VARCHAR', false, 255, null);
        $this->addColumn('Continent', 'Continent', 'VARCHAR', false, 50, null);
        $this->addColumn('AreaCodeInland', 'Areacodeinland', 'INTEGER', false, null, null);
        $this->addColumn('FAOAreaInland', 'Faoareainland', 'VARCHAR', false, 30, null);
        $this->addColumn('AreaCodeMarineI', 'Areacodemarinei', 'INTEGER', false, null, null);
        $this->addColumn('FAOAreaMarineI', 'Faoareamarinei', 'VARCHAR', false, 30, null);
        $this->addColumn('AreaCodeMarineII', 'Areacodemarineii', 'INTEGER', false, null, null);
        $this->addColumn('FAOAreaMarineII', 'Faoareamarineii', 'VARCHAR', false, 30, null);
        $this->addColumn('AreaCodeMarineIII', 'Areacodemarineiii', 'INTEGER', false, null, null);
        $this->addColumn('FAOAreaMarineIII', 'Faoareamarineiii', 'VARCHAR', false, 30, null);
        $this->addColumn('AreaCodeMarineIV', 'Areacodemarineiv', 'INTEGER', false, null, null);
        $this->addColumn('FAOAreaMarineIV', 'Faoareamarineiv', 'VARCHAR', false, 30, null);
        $this->addColumn('AreaCodeMarineV', 'Areacodemarinev', 'INTEGER', false, null, null);
        $this->addColumn('FAOAreaMarineV', 'Faoareamarinev', 'VARCHAR', false, 30, null);
        $this->addColumn('Population', 'Population', 'INTEGER', false, null, null);
        $this->addColumn('PopulationYear', 'Populationyear', 'INTEGER', false, null, null);
        $this->addColumn('PopulationRate', 'Populationrate', 'DOUBLE', false, null, null);
        $this->addColumn('PopulationRef', 'Populationref', 'INTEGER', false, null, null);
        $this->addColumn('CoastalPopulation', 'Coastalpopulation', 'INTEGER', false, null, null);
        $this->addColumn('CoastPopRef', 'Coastpopref', 'INTEGER', false, null, null);
        $this->addColumn('Area', 'Area', 'INTEGER', false, null, null);
        $this->addColumn('Coastline', 'Coastline', 'INTEGER', false, null, null);
        $this->addColumn('CoastlineRef', 'Coastlineref', 'INTEGER', false, null, null);
        $this->addColumn('ShelfArea', 'Shelfarea', 'DOUBLE', false, null, null);
        $this->addColumn('ShelfRef', 'Shelfref', 'INTEGER', false, null, null);
        $this->addColumn('EECarea', 'Eecarea', 'DOUBLE', false, null, null);
        $this->addColumn('EEZRef', 'Eezref', 'INTEGER', false, null, null);
        $this->addColumn('Language', 'Language', 'VARCHAR', false, 21, null);
        $this->addColumn('Currency', 'Currency', 'VARCHAR', false, 50, null);
        $this->addColumn('MarineCount', 'Marinecount', 'INTEGER', false, null, null);
        $this->addColumn('MarineFamCount', 'Marinefamcount', 'INTEGER', false, null, null);
        $this->addColumn('CompleteMarine', 'Completemarine', 'TINYINT', false, null, null);
        $this->addColumn('MarineLit', 'Marinelit', 'INTEGER', false, null, null);
        $this->addColumn('MarineFamLit', 'Marinefamlit', 'INTEGER', false, null, null);
        $this->addColumn('CheckMarineRef', 'Checkmarineref', 'INTEGER', false, null, null);
        $this->addColumn('MarineFlag', 'Marineflag', 'TINYINT', false, null, null);
        $this->addColumn('FreshwaterCount', 'Freshwatercount', 'INTEGER', false, null, null);
        $this->addColumn('FreshFamCount', 'Freshfamcount', 'INTEGER', false, null, null);
        $this->addColumn('CompleteFresh', 'Completefresh', 'TINYINT', false, null, null);
        $this->addColumn('FreshwaterLit', 'Freshwaterlit', 'INTEGER', false, null, null);
        $this->addColumn('FreshFamLit', 'Freshfamlit', 'INTEGER', false, null, null);
        $this->addColumn('CheckFreshRef', 'Checkfreshref', 'INTEGER', false, null, null);
        $this->addColumn('FreshFlag', 'Freshflag', 'TINYINT', false, null, null);
        $this->addColumn('TotalCount', 'Totalcount', 'INTEGER', false, null, null);
        $this->addColumn('TotalFamCount', 'Totalfamcount', 'INTEGER', false, null, null);
        $this->addColumn('TotalComplete', 'Totalcomplete', 'TINYINT', false, null, null);
        $this->addColumn('TotalLit', 'Totallit', 'INTEGER', false, null, null);
        $this->addColumn('TotalFamLit', 'Totalfamlit', 'INTEGER', false, null, null);
        $this->addColumn('TotalRef', 'Totalref', 'INTEGER', false, null, null);
        $this->addColumn('LastUpdate', 'Lastupdate', 'TIMESTAMP', false, null, null);
        $this->addColumn('MorphCountFresh', 'Morphcountfresh', 'INTEGER', false, null, null);
        $this->addColumn('OccurCountFresh', 'Occurcountfresh', 'INTEGER', false, null, null);
        $this->addColumn('PicCountFresh', 'Piccountfresh', 'INTEGER', false, null, null);
        $this->addColumn('GrowthCountFresh', 'Growthcountfresh', 'INTEGER', false, null, null);
        $this->addColumn('FoodCountFresh', 'Foodcountfresh', 'INTEGER', false, null, null);
        $this->addColumn('DietCountFresh', 'Dietcountfresh', 'INTEGER', false, null, null);
        $this->addColumn('ReproductionCountFresh', 'Reproductioncountfresh', 'INTEGER', false, null, null);
        $this->addColumn('SpawningCountFresh', 'Spawningcountfresh', 'INTEGER', false, null, null);
        $this->addColumn('MorphCountMarine', 'Morphcountmarine', 'INTEGER', false, null, null);
        $this->addColumn('OccurCountMarine', 'Occurcountmarine', 'INTEGER', false, null, null);
        $this->addColumn('PicCountMarine', 'Piccountmarine', 'INTEGER', false, null, null);
        $this->addColumn('GrowthCountMarine', 'Growthcountmarine', 'INTEGER', false, null, null);
        $this->addColumn('FoodCountMarine', 'Foodcountmarine', 'INTEGER', false, null, null);
        $this->addColumn('DietCountMarine', 'Dietcountmarine', 'INTEGER', false, null, null);
        $this->addColumn('ReproductionCountMarine', 'Reproductioncountmarine', 'INTEGER', false, null, null);
        $this->addColumn('SpawningCountMarine', 'Spawningcountmarine', 'INTEGER', false, null, null);
        $this->addColumn('LatDegFill', 'Latdegfill', 'INTEGER', false, null, null);
        $this->addColumn('LatMinFill', 'Latminfill', 'DOUBLE', false, null, null);
        $this->addColumn('NorthSouthFill', 'Northsouthfill', 'VARCHAR', false, 1, null);
        $this->addColumn('LongDegFill', 'Longdegfill', 'INTEGER', false, null, null);
        $this->addColumn('LongMinFill', 'Longminfill', 'DOUBLE', false, null, null);
        $this->addColumn('EastWestFill', 'Eastwestfill', 'VARCHAR', false, 1, null);
        $this->addColumn('MLatDegFill', 'Mlatdegfill', 'INTEGER', false, null, null);
        $this->addColumn('MLatMinFill', 'Mlatminfill', 'DOUBLE', false, null, null);
        $this->addColumn('MNorthSouthFill', 'Mnorthsouthfill', 'VARCHAR', false, 1, null);
        $this->addColumn('MLongDegFill', 'Mlongdegfill', 'INTEGER', false, null, null);
        $this->addColumn('MLongMinFill', 'Mlongminfill', 'DOUBLE', false, null, null);
        $this->addColumn('MEastWestFill', 'Meastwestfill', 'VARCHAR', false, 1, null);
        $this->addColumn('MLatDegFill2', 'Mlatdegfill2', 'INTEGER', false, null, null);
        $this->addColumn('MLatMinFill2', 'Mlatminfill2', 'DOUBLE', false, null, null);
        $this->addColumn('MNorthSouthFill2', 'Mnorthsouthfill2', 'VARCHAR', false, 1, null);
        $this->addColumn('MLongDegFill2', 'Mlongdegfill2', 'INTEGER', false, null, null);
        $this->addColumn('MLongMinFill2', 'Mlongminfill2', 'DOUBLE', false, null, null);
        $this->addColumn('MEastWestFill2', 'Meastwestfill2', 'VARCHAR', false, 1, null);
        $this->addColumn('MLatDegFill3', 'Mlatdegfill3', 'INTEGER', false, null, null);
        $this->addColumn('MLatMinFill3', 'Mlatminfill3', 'DOUBLE', false, null, null);
        $this->addColumn('MNorthSouthFill3', 'Mnorthsouthfill3', 'VARCHAR', false, 1, null);
        $this->addColumn('MLongDegFill3', 'Mlongdegfill3', 'INTEGER', false, null, null);
        $this->addColumn('MLongMinFill3', 'Mlongminfill3', 'DOUBLE', false, null, null);
        $this->addColumn('MEastWestFill3', 'Meastwestfill3', 'VARCHAR', false, 1, null);
        $this->addColumn('MLatDegFill4', 'Mlatdegfill4', 'INTEGER', false, null, null);
        $this->addColumn('MLatMinFill4', 'Mlatminfill4', 'DOUBLE', false, null, null);
        $this->addColumn('MNorthSouthFill4', 'Mnorthsouthfill4', 'VARCHAR', false, 1, null);
        $this->addColumn('MLongDegFill4', 'Mlongdegfill4', 'INTEGER', false, null, null);
        $this->addColumn('MLongMinFill4', 'Mlongminfill4', 'DOUBLE', false, null, null);
        $this->addColumn('MEastWestFill4', 'Meastwestfill4', 'VARCHAR', false, 1, null);
        $this->addColumn('MLatDegFill5', 'Mlatdegfill5', 'INTEGER', false, null, null);
        $this->addColumn('MLatMinFill5', 'Mlatminfill5', 'DOUBLE', false, null, null);
        $this->addColumn('MNorthSouthFill5', 'Mnorthsouthfill5', 'VARCHAR', false, 1, null);
        $this->addColumn('MLongDegFill5', 'Mlongdegfill5', 'INTEGER', false, null, null);
        $this->addColumn('MLongMinFill5', 'Mlongminfill5', 'DOUBLE', false, null, null);
        $this->addColumn('MEastWestFill5', 'Meastwestfill5', 'VARCHAR', false, 1, null);
        $this->addColumn('NorthernLatitude', 'Northernlatitude', 'INTEGER', false, null, null);
        $this->addColumn('NorthernLatitudeNS', 'Northernlatitudens', 'VARCHAR', false, 1, null);
        $this->addColumn('SouthernLatitude', 'Southernlatitude', 'INTEGER', false, null, null);
        $this->addColumn('SouthernLatitudeNS', 'Southernlatitudens', 'VARCHAR', false, 1, null);
        $this->addColumn('WesternLongitude', 'Westernlongitude', 'INTEGER', false, null, null);
        $this->addColumn('WesternLongitudeEW', 'Westernlongitudeew', 'VARCHAR', false, 1, null);
        $this->addColumn('EasternLongitude', 'Easternlongitude', 'INTEGER', false, null, null);
        $this->addColumn('EasternLongitudeEW', 'Easternlongitudeew', 'VARCHAR', false, 1, null);
        $this->addColumn('CenterLat', 'Centerlat', 'DOUBLE', false, null, null);
        $this->addColumn('CenterLong', 'Centerlong', 'DOUBLE', false, null, null);
        $this->addColumn('OtherLanguage', 'Otherlanguage', 'CLOB', false, null, null);
        $this->addColumn('Geography', 'Geography', 'CLOB', false, null, null);
        $this->addColumn('GeographyRef', 'Geographyref', 'INTEGER', false, null, null);
        $this->addColumn('Hydrography', 'Hydrography', 'CLOB', false, null, null);
        $this->addColumn('HydrographyRef', 'Hydrographyref', 'INTEGER', false, null, null);
        $this->addColumn('CommentFresh', 'Commentfresh', 'CLOB', false, null, null);
        $this->addColumn('RefFresh1', 'Reffresh1', 'INTEGER', false, null, null);
        $this->addColumn('RefFresh2', 'Reffresh2', 'INTEGER', false, null, null);
        $this->addColumn('RefFresh3', 'Reffresh3', 'INTEGER', false, null, null);
        $this->addColumn('FreshPrimary', 'Freshprimary', 'INTEGER', false, null, null);
        $this->addColumn('FreshSecondary', 'Freshsecondary', 'INTEGER', false, null, null);
        $this->addColumn('FreshInto', 'Freshinto', 'INTEGER', false, null, null);
        $this->addColumn('InFisheriesReported', 'Infisheriesreported', 'INTEGER', false, null, null);
        $this->addColumn('InFisheriesPotential', 'Infisheriespotential', 'INTEGER', false, null, null);
        $this->addColumn('InAquaReported', 'Inaquareported', 'INTEGER', false, null, null);
        $this->addColumn('InAquaPotential', 'Inaquapotential', 'INTEGER', false, null, null);
        $this->addColumn('ExportReported', 'Exportreported', 'INTEGER', false, null, null);
        $this->addColumn('ExportPotential', 'Exportpotential', 'INTEGER', false, null, null);
        $this->addColumn('SportReported', 'Sportreported', 'INTEGER', false, null, null);
        $this->addColumn('SportPotential', 'Sportpotential', 'INTEGER', false, null, null);
        $this->addColumn('EndemicReported', 'Endemicreported', 'INTEGER', false, null, null);
        $this->addColumn('EndemicPotential', 'Endemicpotential', 'INTEGER', false, null, null);
        $this->addColumn('Threatened', 'Threatened', 'INTEGER', false, null, null);
        $this->addColumn('ProtectedReported', 'Protectedreported', 'DOUBLE', false, null, null);
        $this->addColumn('ProtectedPotential', 'Protectedpotential', 'INTEGER', false, null, null);
        $this->addColumn('ACP', 'Acp', 'TINYINT', false, null, null);
        $this->addColumn('Developed', 'Developed', 'TINYINT', false, null, null);
        $this->addColumn('Marine', 'Marine', 'INTEGER', false, null, null);
        $this->addColumn('Brackish', 'Brackish', 'INTEGER', false, null, null);
        $this->addColumn('MarineInto', 'Marineinto', 'INTEGER', false, null, null);
        $this->addColumn('MarineInFisheriesReported', 'Marineinfisheriesreported', 'INTEGER', false, null, null);
        $this->addColumn('MarineInFisheriesPotential', 'Marineinfisheriespotential', 'INTEGER', false, null, null);
        $this->addColumn('MarineInAquaReported', 'Marineinaquareported', 'INTEGER', false, null, null);
        $this->addColumn('MarineInAquaPotential', 'Marineinaquapotential', 'INTEGER', false, null, null);
        $this->addColumn('MarineExportReported', 'Marineexportreported', 'INTEGER', false, null, null);
        $this->addColumn('MarineExportPotential', 'Marineexportpotential', 'INTEGER', false, null, null);
        $this->addColumn('MarineSportReported', 'Marinesportreported', 'INTEGER', false, null, null);
        $this->addColumn('MarineSportPotential', 'Marinesportpotential', 'INTEGER', false, null, null);
        $this->addColumn('MarineEndemicReported', 'Marineendemicreported', 'INTEGER', false, null, null);
        $this->addColumn('MarineEndemicPotential', 'Marineendemicpotential', 'INTEGER', false, null, null);
        $this->addColumn('MarineThreatened', 'Marinethreatened', 'INTEGER', false, null, null);
        $this->addColumn('MarineProtectedReported', 'Marineprotectedreported', 'DOUBLE', false, null, null);
        $this->addColumn('MarineProtectedPotential', 'Marineprotectedpotential', 'INTEGER', false, null, null);
        $this->addColumn('NatFishDB', 'Natfishdb', 'VARCHAR', false, 250, null);
        $this->addColumn('NatFishDB2', 'Natfishdb2', 'VARCHAR', false, 50, null);
        $this->addColumn('Factbook', 'Factbook', 'CLOB', false, null, null);
        $this->addColumn('NatFishAut', 'Natfishaut', 'CLOB', false, null, null);
        $this->addColumn('TradeNames', 'Tradenames', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Greek_original', 'GreekOriginal', 'VARCHAR', false, 50, null);
        $this->addColumn('Greek', 'Greek', 'VARCHAR', false, 255, null);
        $this->addColumn('RUSSIAN_original', 'RussianOriginal', 'VARCHAR', false, 100, null);
        $this->addColumn('RUSSIAN', 'Russian', 'CLOB', false, null, null);
        $this->addColumn('FRENCH', 'French', 'VARCHAR', false, 60, null);
        $this->addColumn('SPANISH', 'Spanish', 'VARCHAR', false, 60, null);
        $this->addColumn('GERMAN', 'German', 'VARCHAR', false, 50, null);
        $this->addColumn('DUTCH', 'Dutch', 'VARCHAR', false, 50, null);
        $this->addColumn('PORTUGUESE', 'Portuguese', 'VARCHAR', false, 50, null);
        $this->addColumn('ITALIAN', 'Italian', 'VARCHAR', false, 50, null);
        $this->addColumn('SWEDISH', 'Swedish', 'VARCHAR', false, 50, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CountrefTableMap
