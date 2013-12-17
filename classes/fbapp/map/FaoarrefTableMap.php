<?php



/**
 * This class defines the structure of the 'faoarref' table.
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
class FaoarrefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FaoarrefTableMap';

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
        $this->setName('faoarref');
        $this->setPhpName('Faoarref');
        $this->setClassname('Faoarref');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('AreaCode', 'Areacode', 'SMALLINT', true, null, null);
        $this->addColumn('FAO', 'Fao', 'VARCHAR', false, 30, null);
        $this->addColumn('Note', 'Note', 'VARCHAR', false, 30, null);
        $this->addColumn('Coastline', 'Coastline', 'INTEGER', false, null, null);
        $this->addColumn('Shelf', 'Shelf', 'FLOAT', false, null, null);
        $this->addColumn('EEZarea', 'Eezarea', 'FLOAT', false, null, null);
        $this->addColumn('LatDeg', 'Latdeg', 'SMALLINT', false, null, null);
        $this->addColumn('LatMin', 'Latmin', 'FLOAT', false, null, null);
        $this->addColumn('N_S', 'NS', 'CHAR', false, null, null);
        $this->addColumn('LongDeg', 'Longdeg', 'SMALLINT', false, null, null);
        $this->addColumn('LongMin', 'Longmin', 'FLOAT', false, null, null);
        $this->addColumn('E_W', 'EW', 'CHAR', false, null, null);
        $this->addColumn('NeighborN', 'Neighborn', 'SMALLINT', false, null, null);
        $this->addColumn('NeighborS', 'Neighbors', 'SMALLINT', false, null, null);
        $this->addColumn('NeighborW', 'Neighborw', 'SMALLINT', false, null, null);
        $this->addColumn('NeighborE', 'Neighbore', 'SMALLINT', false, null, null);
        $this->addColumn('NorthernLatitude', 'Northernlatitude', 'INTEGER', false, null, 0);
        $this->addColumn('NorthernLatitudeNS', 'Northernlatitudens', 'VARCHAR', false, 50, null);
        $this->addColumn('SouthernLatitude', 'Southernlatitude', 'INTEGER', false, null, 0);
        $this->addColumn('SouthernLatitudeNS', 'Southernlatitudens', 'VARCHAR', false, 50, null);
        $this->addColumn('WesternLongitude', 'Westernlongitude', 'INTEGER', false, null, 0);
        $this->addColumn('WesternLongitudeEW', 'Westernlongitudeew', 'VARCHAR', false, 50, null);
        $this->addColumn('EasternLongitude', 'Easternlongitude', 'INTEGER', false, null, 0);
        $this->addColumn('EasternLongitudeEW', 'Easternlongitudeew', 'VARCHAR', false, 50, null);
        $this->addColumn('FamiliesCount', 'Familiescount', 'SMALLINT', false, null, null);
        $this->addColumn('FamiliesNo', 'Familiesno', 'SMALLINT', false, null, null);
        $this->addColumn('FamiliesRef', 'Familiesref', 'INTEGER', false, null, null);
        $this->addColumn('SpeciesCount', 'Speciescount', 'SMALLINT', false, null, null);
        $this->addColumn('SpeciesNo', 'Speciesno', 'SMALLINT', false, null, null);
        $this->addColumn('SpeciesRef', 'Speciesref', 'INTEGER', false, null, null);
        $this->addColumn('FamFisheries', 'Famfisheries', 'SMALLINT', false, null, null);
        $this->addColumn('SpecFisheries', 'Specfisheries', 'SMALLINT', false, null, null);
        $this->addColumn('FamAqua', 'Famaqua', 'SMALLINT', false, null, null);
        $this->addColumn('SpecAqua', 'Specaqua', 'SMALLINT', false, null, null);
        $this->addColumn('FamBait', 'Fambait', 'SMALLINT', false, null, null);
        $this->addColumn('SpecBait', 'Specbait', 'SMALLINT', false, null, null);
        $this->addColumn('FamOrnament', 'Famornament', 'SMALLINT', false, null, null);
        $this->addColumn('SpecOrnament', 'Specornament', 'SMALLINT', false, null, null);
        $this->addColumn('FamSport', 'Famsport', 'SMALLINT', false, null, null);
        $this->addColumn('SpecSport', 'Specsport', 'SMALLINT', false, null, null);
        $this->addColumn('FamHuman', 'Famhuman', 'SMALLINT', false, null, null);
        $this->addColumn('SpecHuman', 'Spechuman', 'SMALLINT', false, null, null);
        $this->addColumn('FamThreat', 'Famthreat', 'SMALLINT', false, null, null);
        $this->addColumn('SpecThreat', 'Specthreat', 'SMALLINT', false, null, null);
        $this->addColumn('FamIntro', 'Famintro', 'SMALLINT', false, null, null);
        $this->addColumn('SpecIntro', 'Specintro', 'SMALLINT', false, null, null);
        $this->addColumn('FamDanger', 'Famdanger', 'SMALLINT', false, null, null);
        $this->addColumn('SpecDanger', 'Specdanger', 'SMALLINT', false, null, null);
        $this->addColumn('Complete', 'Complete', 'BOOLEAN', false, 1, false);
        $this->addColumn('CompleteRef', 'Completeref', 'INTEGER', false, null, null);
        $this->addColumn('ContinentGrp', 'Continentgrp', 'VARCHAR', false, 30, null);
        $this->addColumn('Modified', 'Modified', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FaoarrefTableMap
