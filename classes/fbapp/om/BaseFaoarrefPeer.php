<?php


/**
 * Base static class for performing query and update operations on the 'faoarref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFaoarrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'faoarref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Faoarref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FaoarrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 53;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 53;

    /** the column name for the AreaCode field */
    const AREACODE = 'faoarref.AreaCode';

    /** the column name for the FAO field */
    const FAO = 'faoarref.FAO';

    /** the column name for the Note field */
    const NOTE = 'faoarref.Note';

    /** the column name for the Coastline field */
    const COASTLINE = 'faoarref.Coastline';

    /** the column name for the Shelf field */
    const SHELF = 'faoarref.Shelf';

    /** the column name for the EEZarea field */
    const EEZAREA = 'faoarref.EEZarea';

    /** the column name for the LatDeg field */
    const LATDEG = 'faoarref.LatDeg';

    /** the column name for the LatMin field */
    const LATMIN = 'faoarref.LatMin';

    /** the column name for the N_S field */
    const N_S = 'faoarref.N_S';

    /** the column name for the LongDeg field */
    const LONGDEG = 'faoarref.LongDeg';

    /** the column name for the LongMin field */
    const LONGMIN = 'faoarref.LongMin';

    /** the column name for the E_W field */
    const E_W = 'faoarref.E_W';

    /** the column name for the NeighborN field */
    const NEIGHBORN = 'faoarref.NeighborN';

    /** the column name for the NeighborS field */
    const NEIGHBORS = 'faoarref.NeighborS';

    /** the column name for the NeighborW field */
    const NEIGHBORW = 'faoarref.NeighborW';

    /** the column name for the NeighborE field */
    const NEIGHBORE = 'faoarref.NeighborE';

    /** the column name for the NorthernLatitude field */
    const NORTHERNLATITUDE = 'faoarref.NorthernLatitude';

    /** the column name for the NorthernLatitudeNS field */
    const NORTHERNLATITUDENS = 'faoarref.NorthernLatitudeNS';

    /** the column name for the SouthernLatitude field */
    const SOUTHERNLATITUDE = 'faoarref.SouthernLatitude';

    /** the column name for the SouthernLatitudeNS field */
    const SOUTHERNLATITUDENS = 'faoarref.SouthernLatitudeNS';

    /** the column name for the WesternLongitude field */
    const WESTERNLONGITUDE = 'faoarref.WesternLongitude';

    /** the column name for the WesternLongitudeEW field */
    const WESTERNLONGITUDEEW = 'faoarref.WesternLongitudeEW';

    /** the column name for the EasternLongitude field */
    const EASTERNLONGITUDE = 'faoarref.EasternLongitude';

    /** the column name for the EasternLongitudeEW field */
    const EASTERNLONGITUDEEW = 'faoarref.EasternLongitudeEW';

    /** the column name for the FamiliesCount field */
    const FAMILIESCOUNT = 'faoarref.FamiliesCount';

    /** the column name for the FamiliesNo field */
    const FAMILIESNO = 'faoarref.FamiliesNo';

    /** the column name for the FamiliesRef field */
    const FAMILIESREF = 'faoarref.FamiliesRef';

    /** the column name for the SpeciesCount field */
    const SPECIESCOUNT = 'faoarref.SpeciesCount';

    /** the column name for the SpeciesNo field */
    const SPECIESNO = 'faoarref.SpeciesNo';

    /** the column name for the SpeciesRef field */
    const SPECIESREF = 'faoarref.SpeciesRef';

    /** the column name for the FamFisheries field */
    const FAMFISHERIES = 'faoarref.FamFisheries';

    /** the column name for the SpecFisheries field */
    const SPECFISHERIES = 'faoarref.SpecFisheries';

    /** the column name for the FamAqua field */
    const FAMAQUA = 'faoarref.FamAqua';

    /** the column name for the SpecAqua field */
    const SPECAQUA = 'faoarref.SpecAqua';

    /** the column name for the FamBait field */
    const FAMBAIT = 'faoarref.FamBait';

    /** the column name for the SpecBait field */
    const SPECBAIT = 'faoarref.SpecBait';

    /** the column name for the FamOrnament field */
    const FAMORNAMENT = 'faoarref.FamOrnament';

    /** the column name for the SpecOrnament field */
    const SPECORNAMENT = 'faoarref.SpecOrnament';

    /** the column name for the FamSport field */
    const FAMSPORT = 'faoarref.FamSport';

    /** the column name for the SpecSport field */
    const SPECSPORT = 'faoarref.SpecSport';

    /** the column name for the FamHuman field */
    const FAMHUMAN = 'faoarref.FamHuman';

    /** the column name for the SpecHuman field */
    const SPECHUMAN = 'faoarref.SpecHuman';

    /** the column name for the FamThreat field */
    const FAMTHREAT = 'faoarref.FamThreat';

    /** the column name for the SpecThreat field */
    const SPECTHREAT = 'faoarref.SpecThreat';

    /** the column name for the FamIntro field */
    const FAMINTRO = 'faoarref.FamIntro';

    /** the column name for the SpecIntro field */
    const SPECINTRO = 'faoarref.SpecIntro';

    /** the column name for the FamDanger field */
    const FAMDANGER = 'faoarref.FamDanger';

    /** the column name for the SpecDanger field */
    const SPECDANGER = 'faoarref.SpecDanger';

    /** the column name for the Complete field */
    const COMPLETE = 'faoarref.Complete';

    /** the column name for the CompleteRef field */
    const COMPLETEREF = 'faoarref.CompleteRef';

    /** the column name for the ContinentGrp field */
    const CONTINENTGRP = 'faoarref.ContinentGrp';

    /** the column name for the Modified field */
    const MODIFIED = 'faoarref.Modified';

    /** the column name for the TS field */
    const TS = 'faoarref.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Faoarref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Faoarref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FaoarrefPeer::$fieldNames[FaoarrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Areacode', 'Fao', 'Note', 'Coastline', 'Shelf', 'Eezarea', 'Latdeg', 'Latmin', 'NS', 'Longdeg', 'Longmin', 'EW', 'Neighborn', 'Neighbors', 'Neighborw', 'Neighbore', 'Northernlatitude', 'Northernlatitudens', 'Southernlatitude', 'Southernlatitudens', 'Westernlongitude', 'Westernlongitudeew', 'Easternlongitude', 'Easternlongitudeew', 'Familiescount', 'Familiesno', 'Familiesref', 'Speciescount', 'Speciesno', 'Speciesref', 'Famfisheries', 'Specfisheries', 'Famaqua', 'Specaqua', 'Fambait', 'Specbait', 'Famornament', 'Specornament', 'Famsport', 'Specsport', 'Famhuman', 'Spechuman', 'Famthreat', 'Specthreat', 'Famintro', 'Specintro', 'Famdanger', 'Specdanger', 'Complete', 'Completeref', 'Continentgrp', 'Modified', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('areacode', 'fao', 'note', 'coastline', 'shelf', 'eezarea', 'latdeg', 'latmin', 'nS', 'longdeg', 'longmin', 'eW', 'neighborn', 'neighbors', 'neighborw', 'neighbore', 'northernlatitude', 'northernlatitudens', 'southernlatitude', 'southernlatitudens', 'westernlongitude', 'westernlongitudeew', 'easternlongitude', 'easternlongitudeew', 'familiescount', 'familiesno', 'familiesref', 'speciescount', 'speciesno', 'speciesref', 'famfisheries', 'specfisheries', 'famaqua', 'specaqua', 'fambait', 'specbait', 'famornament', 'specornament', 'famsport', 'specsport', 'famhuman', 'spechuman', 'famthreat', 'specthreat', 'famintro', 'specintro', 'famdanger', 'specdanger', 'complete', 'completeref', 'continentgrp', 'modified', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FaoarrefPeer::AREACODE, FaoarrefPeer::FAO, FaoarrefPeer::NOTE, FaoarrefPeer::COASTLINE, FaoarrefPeer::SHELF, FaoarrefPeer::EEZAREA, FaoarrefPeer::LATDEG, FaoarrefPeer::LATMIN, FaoarrefPeer::N_S, FaoarrefPeer::LONGDEG, FaoarrefPeer::LONGMIN, FaoarrefPeer::E_W, FaoarrefPeer::NEIGHBORN, FaoarrefPeer::NEIGHBORS, FaoarrefPeer::NEIGHBORW, FaoarrefPeer::NEIGHBORE, FaoarrefPeer::NORTHERNLATITUDE, FaoarrefPeer::NORTHERNLATITUDENS, FaoarrefPeer::SOUTHERNLATITUDE, FaoarrefPeer::SOUTHERNLATITUDENS, FaoarrefPeer::WESTERNLONGITUDE, FaoarrefPeer::WESTERNLONGITUDEEW, FaoarrefPeer::EASTERNLONGITUDE, FaoarrefPeer::EASTERNLONGITUDEEW, FaoarrefPeer::FAMILIESCOUNT, FaoarrefPeer::FAMILIESNO, FaoarrefPeer::FAMILIESREF, FaoarrefPeer::SPECIESCOUNT, FaoarrefPeer::SPECIESNO, FaoarrefPeer::SPECIESREF, FaoarrefPeer::FAMFISHERIES, FaoarrefPeer::SPECFISHERIES, FaoarrefPeer::FAMAQUA, FaoarrefPeer::SPECAQUA, FaoarrefPeer::FAMBAIT, FaoarrefPeer::SPECBAIT, FaoarrefPeer::FAMORNAMENT, FaoarrefPeer::SPECORNAMENT, FaoarrefPeer::FAMSPORT, FaoarrefPeer::SPECSPORT, FaoarrefPeer::FAMHUMAN, FaoarrefPeer::SPECHUMAN, FaoarrefPeer::FAMTHREAT, FaoarrefPeer::SPECTHREAT, FaoarrefPeer::FAMINTRO, FaoarrefPeer::SPECINTRO, FaoarrefPeer::FAMDANGER, FaoarrefPeer::SPECDANGER, FaoarrefPeer::COMPLETE, FaoarrefPeer::COMPLETEREF, FaoarrefPeer::CONTINENTGRP, FaoarrefPeer::MODIFIED, FaoarrefPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AREACODE', 'FAO', 'NOTE', 'COASTLINE', 'SHELF', 'EEZAREA', 'LATDEG', 'LATMIN', 'N_S', 'LONGDEG', 'LONGMIN', 'E_W', 'NEIGHBORN', 'NEIGHBORS', 'NEIGHBORW', 'NEIGHBORE', 'NORTHERNLATITUDE', 'NORTHERNLATITUDENS', 'SOUTHERNLATITUDE', 'SOUTHERNLATITUDENS', 'WESTERNLONGITUDE', 'WESTERNLONGITUDEEW', 'EASTERNLONGITUDE', 'EASTERNLONGITUDEEW', 'FAMILIESCOUNT', 'FAMILIESNO', 'FAMILIESREF', 'SPECIESCOUNT', 'SPECIESNO', 'SPECIESREF', 'FAMFISHERIES', 'SPECFISHERIES', 'FAMAQUA', 'SPECAQUA', 'FAMBAIT', 'SPECBAIT', 'FAMORNAMENT', 'SPECORNAMENT', 'FAMSPORT', 'SPECSPORT', 'FAMHUMAN', 'SPECHUMAN', 'FAMTHREAT', 'SPECTHREAT', 'FAMINTRO', 'SPECINTRO', 'FAMDANGER', 'SPECDANGER', 'COMPLETE', 'COMPLETEREF', 'CONTINENTGRP', 'MODIFIED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AreaCode', 'FAO', 'Note', 'Coastline', 'Shelf', 'EEZarea', 'LatDeg', 'LatMin', 'N_S', 'LongDeg', 'LongMin', 'E_W', 'NeighborN', 'NeighborS', 'NeighborW', 'NeighborE', 'NorthernLatitude', 'NorthernLatitudeNS', 'SouthernLatitude', 'SouthernLatitudeNS', 'WesternLongitude', 'WesternLongitudeEW', 'EasternLongitude', 'EasternLongitudeEW', 'FamiliesCount', 'FamiliesNo', 'FamiliesRef', 'SpeciesCount', 'SpeciesNo', 'SpeciesRef', 'FamFisheries', 'SpecFisheries', 'FamAqua', 'SpecAqua', 'FamBait', 'SpecBait', 'FamOrnament', 'SpecOrnament', 'FamSport', 'SpecSport', 'FamHuman', 'SpecHuman', 'FamThreat', 'SpecThreat', 'FamIntro', 'SpecIntro', 'FamDanger', 'SpecDanger', 'Complete', 'CompleteRef', 'ContinentGrp', 'Modified', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FaoarrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Areacode' => 0, 'Fao' => 1, 'Note' => 2, 'Coastline' => 3, 'Shelf' => 4, 'Eezarea' => 5, 'Latdeg' => 6, 'Latmin' => 7, 'NS' => 8, 'Longdeg' => 9, 'Longmin' => 10, 'EW' => 11, 'Neighborn' => 12, 'Neighbors' => 13, 'Neighborw' => 14, 'Neighbore' => 15, 'Northernlatitude' => 16, 'Northernlatitudens' => 17, 'Southernlatitude' => 18, 'Southernlatitudens' => 19, 'Westernlongitude' => 20, 'Westernlongitudeew' => 21, 'Easternlongitude' => 22, 'Easternlongitudeew' => 23, 'Familiescount' => 24, 'Familiesno' => 25, 'Familiesref' => 26, 'Speciescount' => 27, 'Speciesno' => 28, 'Speciesref' => 29, 'Famfisheries' => 30, 'Specfisheries' => 31, 'Famaqua' => 32, 'Specaqua' => 33, 'Fambait' => 34, 'Specbait' => 35, 'Famornament' => 36, 'Specornament' => 37, 'Famsport' => 38, 'Specsport' => 39, 'Famhuman' => 40, 'Spechuman' => 41, 'Famthreat' => 42, 'Specthreat' => 43, 'Famintro' => 44, 'Specintro' => 45, 'Famdanger' => 46, 'Specdanger' => 47, 'Complete' => 48, 'Completeref' => 49, 'Continentgrp' => 50, 'Modified' => 51, 'Ts' => 52, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('areacode' => 0, 'fao' => 1, 'note' => 2, 'coastline' => 3, 'shelf' => 4, 'eezarea' => 5, 'latdeg' => 6, 'latmin' => 7, 'nS' => 8, 'longdeg' => 9, 'longmin' => 10, 'eW' => 11, 'neighborn' => 12, 'neighbors' => 13, 'neighborw' => 14, 'neighbore' => 15, 'northernlatitude' => 16, 'northernlatitudens' => 17, 'southernlatitude' => 18, 'southernlatitudens' => 19, 'westernlongitude' => 20, 'westernlongitudeew' => 21, 'easternlongitude' => 22, 'easternlongitudeew' => 23, 'familiescount' => 24, 'familiesno' => 25, 'familiesref' => 26, 'speciescount' => 27, 'speciesno' => 28, 'speciesref' => 29, 'famfisheries' => 30, 'specfisheries' => 31, 'famaqua' => 32, 'specaqua' => 33, 'fambait' => 34, 'specbait' => 35, 'famornament' => 36, 'specornament' => 37, 'famsport' => 38, 'specsport' => 39, 'famhuman' => 40, 'spechuman' => 41, 'famthreat' => 42, 'specthreat' => 43, 'famintro' => 44, 'specintro' => 45, 'famdanger' => 46, 'specdanger' => 47, 'complete' => 48, 'completeref' => 49, 'continentgrp' => 50, 'modified' => 51, 'ts' => 52, ),
        BasePeer::TYPE_COLNAME => array (FaoarrefPeer::AREACODE => 0, FaoarrefPeer::FAO => 1, FaoarrefPeer::NOTE => 2, FaoarrefPeer::COASTLINE => 3, FaoarrefPeer::SHELF => 4, FaoarrefPeer::EEZAREA => 5, FaoarrefPeer::LATDEG => 6, FaoarrefPeer::LATMIN => 7, FaoarrefPeer::N_S => 8, FaoarrefPeer::LONGDEG => 9, FaoarrefPeer::LONGMIN => 10, FaoarrefPeer::E_W => 11, FaoarrefPeer::NEIGHBORN => 12, FaoarrefPeer::NEIGHBORS => 13, FaoarrefPeer::NEIGHBORW => 14, FaoarrefPeer::NEIGHBORE => 15, FaoarrefPeer::NORTHERNLATITUDE => 16, FaoarrefPeer::NORTHERNLATITUDENS => 17, FaoarrefPeer::SOUTHERNLATITUDE => 18, FaoarrefPeer::SOUTHERNLATITUDENS => 19, FaoarrefPeer::WESTERNLONGITUDE => 20, FaoarrefPeer::WESTERNLONGITUDEEW => 21, FaoarrefPeer::EASTERNLONGITUDE => 22, FaoarrefPeer::EASTERNLONGITUDEEW => 23, FaoarrefPeer::FAMILIESCOUNT => 24, FaoarrefPeer::FAMILIESNO => 25, FaoarrefPeer::FAMILIESREF => 26, FaoarrefPeer::SPECIESCOUNT => 27, FaoarrefPeer::SPECIESNO => 28, FaoarrefPeer::SPECIESREF => 29, FaoarrefPeer::FAMFISHERIES => 30, FaoarrefPeer::SPECFISHERIES => 31, FaoarrefPeer::FAMAQUA => 32, FaoarrefPeer::SPECAQUA => 33, FaoarrefPeer::FAMBAIT => 34, FaoarrefPeer::SPECBAIT => 35, FaoarrefPeer::FAMORNAMENT => 36, FaoarrefPeer::SPECORNAMENT => 37, FaoarrefPeer::FAMSPORT => 38, FaoarrefPeer::SPECSPORT => 39, FaoarrefPeer::FAMHUMAN => 40, FaoarrefPeer::SPECHUMAN => 41, FaoarrefPeer::FAMTHREAT => 42, FaoarrefPeer::SPECTHREAT => 43, FaoarrefPeer::FAMINTRO => 44, FaoarrefPeer::SPECINTRO => 45, FaoarrefPeer::FAMDANGER => 46, FaoarrefPeer::SPECDANGER => 47, FaoarrefPeer::COMPLETE => 48, FaoarrefPeer::COMPLETEREF => 49, FaoarrefPeer::CONTINENTGRP => 50, FaoarrefPeer::MODIFIED => 51, FaoarrefPeer::TS => 52, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AREACODE' => 0, 'FAO' => 1, 'NOTE' => 2, 'COASTLINE' => 3, 'SHELF' => 4, 'EEZAREA' => 5, 'LATDEG' => 6, 'LATMIN' => 7, 'N_S' => 8, 'LONGDEG' => 9, 'LONGMIN' => 10, 'E_W' => 11, 'NEIGHBORN' => 12, 'NEIGHBORS' => 13, 'NEIGHBORW' => 14, 'NEIGHBORE' => 15, 'NORTHERNLATITUDE' => 16, 'NORTHERNLATITUDENS' => 17, 'SOUTHERNLATITUDE' => 18, 'SOUTHERNLATITUDENS' => 19, 'WESTERNLONGITUDE' => 20, 'WESTERNLONGITUDEEW' => 21, 'EASTERNLONGITUDE' => 22, 'EASTERNLONGITUDEEW' => 23, 'FAMILIESCOUNT' => 24, 'FAMILIESNO' => 25, 'FAMILIESREF' => 26, 'SPECIESCOUNT' => 27, 'SPECIESNO' => 28, 'SPECIESREF' => 29, 'FAMFISHERIES' => 30, 'SPECFISHERIES' => 31, 'FAMAQUA' => 32, 'SPECAQUA' => 33, 'FAMBAIT' => 34, 'SPECBAIT' => 35, 'FAMORNAMENT' => 36, 'SPECORNAMENT' => 37, 'FAMSPORT' => 38, 'SPECSPORT' => 39, 'FAMHUMAN' => 40, 'SPECHUMAN' => 41, 'FAMTHREAT' => 42, 'SPECTHREAT' => 43, 'FAMINTRO' => 44, 'SPECINTRO' => 45, 'FAMDANGER' => 46, 'SPECDANGER' => 47, 'COMPLETE' => 48, 'COMPLETEREF' => 49, 'CONTINENTGRP' => 50, 'MODIFIED' => 51, 'TS' => 52, ),
        BasePeer::TYPE_FIELDNAME => array ('AreaCode' => 0, 'FAO' => 1, 'Note' => 2, 'Coastline' => 3, 'Shelf' => 4, 'EEZarea' => 5, 'LatDeg' => 6, 'LatMin' => 7, 'N_S' => 8, 'LongDeg' => 9, 'LongMin' => 10, 'E_W' => 11, 'NeighborN' => 12, 'NeighborS' => 13, 'NeighborW' => 14, 'NeighborE' => 15, 'NorthernLatitude' => 16, 'NorthernLatitudeNS' => 17, 'SouthernLatitude' => 18, 'SouthernLatitudeNS' => 19, 'WesternLongitude' => 20, 'WesternLongitudeEW' => 21, 'EasternLongitude' => 22, 'EasternLongitudeEW' => 23, 'FamiliesCount' => 24, 'FamiliesNo' => 25, 'FamiliesRef' => 26, 'SpeciesCount' => 27, 'SpeciesNo' => 28, 'SpeciesRef' => 29, 'FamFisheries' => 30, 'SpecFisheries' => 31, 'FamAqua' => 32, 'SpecAqua' => 33, 'FamBait' => 34, 'SpecBait' => 35, 'FamOrnament' => 36, 'SpecOrnament' => 37, 'FamSport' => 38, 'SpecSport' => 39, 'FamHuman' => 40, 'SpecHuman' => 41, 'FamThreat' => 42, 'SpecThreat' => 43, 'FamIntro' => 44, 'SpecIntro' => 45, 'FamDanger' => 46, 'SpecDanger' => 47, 'Complete' => 48, 'CompleteRef' => 49, 'ContinentGrp' => 50, 'Modified' => 51, 'TS' => 52, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = FaoarrefPeer::getFieldNames($toType);
        $key = isset(FaoarrefPeer::$fieldKeys[$fromType][$name]) ? FaoarrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FaoarrefPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, FaoarrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FaoarrefPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. FaoarrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FaoarrefPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(FaoarrefPeer::AREACODE);
            $criteria->addSelectColumn(FaoarrefPeer::FAO);
            $criteria->addSelectColumn(FaoarrefPeer::NOTE);
            $criteria->addSelectColumn(FaoarrefPeer::COASTLINE);
            $criteria->addSelectColumn(FaoarrefPeer::SHELF);
            $criteria->addSelectColumn(FaoarrefPeer::EEZAREA);
            $criteria->addSelectColumn(FaoarrefPeer::LATDEG);
            $criteria->addSelectColumn(FaoarrefPeer::LATMIN);
            $criteria->addSelectColumn(FaoarrefPeer::N_S);
            $criteria->addSelectColumn(FaoarrefPeer::LONGDEG);
            $criteria->addSelectColumn(FaoarrefPeer::LONGMIN);
            $criteria->addSelectColumn(FaoarrefPeer::E_W);
            $criteria->addSelectColumn(FaoarrefPeer::NEIGHBORN);
            $criteria->addSelectColumn(FaoarrefPeer::NEIGHBORS);
            $criteria->addSelectColumn(FaoarrefPeer::NEIGHBORW);
            $criteria->addSelectColumn(FaoarrefPeer::NEIGHBORE);
            $criteria->addSelectColumn(FaoarrefPeer::NORTHERNLATITUDE);
            $criteria->addSelectColumn(FaoarrefPeer::NORTHERNLATITUDENS);
            $criteria->addSelectColumn(FaoarrefPeer::SOUTHERNLATITUDE);
            $criteria->addSelectColumn(FaoarrefPeer::SOUTHERNLATITUDENS);
            $criteria->addSelectColumn(FaoarrefPeer::WESTERNLONGITUDE);
            $criteria->addSelectColumn(FaoarrefPeer::WESTERNLONGITUDEEW);
            $criteria->addSelectColumn(FaoarrefPeer::EASTERNLONGITUDE);
            $criteria->addSelectColumn(FaoarrefPeer::EASTERNLONGITUDEEW);
            $criteria->addSelectColumn(FaoarrefPeer::FAMILIESCOUNT);
            $criteria->addSelectColumn(FaoarrefPeer::FAMILIESNO);
            $criteria->addSelectColumn(FaoarrefPeer::FAMILIESREF);
            $criteria->addSelectColumn(FaoarrefPeer::SPECIESCOUNT);
            $criteria->addSelectColumn(FaoarrefPeer::SPECIESNO);
            $criteria->addSelectColumn(FaoarrefPeer::SPECIESREF);
            $criteria->addSelectColumn(FaoarrefPeer::FAMFISHERIES);
            $criteria->addSelectColumn(FaoarrefPeer::SPECFISHERIES);
            $criteria->addSelectColumn(FaoarrefPeer::FAMAQUA);
            $criteria->addSelectColumn(FaoarrefPeer::SPECAQUA);
            $criteria->addSelectColumn(FaoarrefPeer::FAMBAIT);
            $criteria->addSelectColumn(FaoarrefPeer::SPECBAIT);
            $criteria->addSelectColumn(FaoarrefPeer::FAMORNAMENT);
            $criteria->addSelectColumn(FaoarrefPeer::SPECORNAMENT);
            $criteria->addSelectColumn(FaoarrefPeer::FAMSPORT);
            $criteria->addSelectColumn(FaoarrefPeer::SPECSPORT);
            $criteria->addSelectColumn(FaoarrefPeer::FAMHUMAN);
            $criteria->addSelectColumn(FaoarrefPeer::SPECHUMAN);
            $criteria->addSelectColumn(FaoarrefPeer::FAMTHREAT);
            $criteria->addSelectColumn(FaoarrefPeer::SPECTHREAT);
            $criteria->addSelectColumn(FaoarrefPeer::FAMINTRO);
            $criteria->addSelectColumn(FaoarrefPeer::SPECINTRO);
            $criteria->addSelectColumn(FaoarrefPeer::FAMDANGER);
            $criteria->addSelectColumn(FaoarrefPeer::SPECDANGER);
            $criteria->addSelectColumn(FaoarrefPeer::COMPLETE);
            $criteria->addSelectColumn(FaoarrefPeer::COMPLETEREF);
            $criteria->addSelectColumn(FaoarrefPeer::CONTINENTGRP);
            $criteria->addSelectColumn(FaoarrefPeer::MODIFIED);
            $criteria->addSelectColumn(FaoarrefPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AreaCode');
            $criteria->addSelectColumn($alias . '.FAO');
            $criteria->addSelectColumn($alias . '.Note');
            $criteria->addSelectColumn($alias . '.Coastline');
            $criteria->addSelectColumn($alias . '.Shelf');
            $criteria->addSelectColumn($alias . '.EEZarea');
            $criteria->addSelectColumn($alias . '.LatDeg');
            $criteria->addSelectColumn($alias . '.LatMin');
            $criteria->addSelectColumn($alias . '.N_S');
            $criteria->addSelectColumn($alias . '.LongDeg');
            $criteria->addSelectColumn($alias . '.LongMin');
            $criteria->addSelectColumn($alias . '.E_W');
            $criteria->addSelectColumn($alias . '.NeighborN');
            $criteria->addSelectColumn($alias . '.NeighborS');
            $criteria->addSelectColumn($alias . '.NeighborW');
            $criteria->addSelectColumn($alias . '.NeighborE');
            $criteria->addSelectColumn($alias . '.NorthernLatitude');
            $criteria->addSelectColumn($alias . '.NorthernLatitudeNS');
            $criteria->addSelectColumn($alias . '.SouthernLatitude');
            $criteria->addSelectColumn($alias . '.SouthernLatitudeNS');
            $criteria->addSelectColumn($alias . '.WesternLongitude');
            $criteria->addSelectColumn($alias . '.WesternLongitudeEW');
            $criteria->addSelectColumn($alias . '.EasternLongitude');
            $criteria->addSelectColumn($alias . '.EasternLongitudeEW');
            $criteria->addSelectColumn($alias . '.FamiliesCount');
            $criteria->addSelectColumn($alias . '.FamiliesNo');
            $criteria->addSelectColumn($alias . '.FamiliesRef');
            $criteria->addSelectColumn($alias . '.SpeciesCount');
            $criteria->addSelectColumn($alias . '.SpeciesNo');
            $criteria->addSelectColumn($alias . '.SpeciesRef');
            $criteria->addSelectColumn($alias . '.FamFisheries');
            $criteria->addSelectColumn($alias . '.SpecFisheries');
            $criteria->addSelectColumn($alias . '.FamAqua');
            $criteria->addSelectColumn($alias . '.SpecAqua');
            $criteria->addSelectColumn($alias . '.FamBait');
            $criteria->addSelectColumn($alias . '.SpecBait');
            $criteria->addSelectColumn($alias . '.FamOrnament');
            $criteria->addSelectColumn($alias . '.SpecOrnament');
            $criteria->addSelectColumn($alias . '.FamSport');
            $criteria->addSelectColumn($alias . '.SpecSport');
            $criteria->addSelectColumn($alias . '.FamHuman');
            $criteria->addSelectColumn($alias . '.SpecHuman');
            $criteria->addSelectColumn($alias . '.FamThreat');
            $criteria->addSelectColumn($alias . '.SpecThreat');
            $criteria->addSelectColumn($alias . '.FamIntro');
            $criteria->addSelectColumn($alias . '.SpecIntro');
            $criteria->addSelectColumn($alias . '.FamDanger');
            $criteria->addSelectColumn($alias . '.SpecDanger');
            $criteria->addSelectColumn($alias . '.Complete');
            $criteria->addSelectColumn($alias . '.CompleteRef');
            $criteria->addSelectColumn($alias . '.ContinentGrp');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.TS');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FaoarrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FaoarrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FaoarrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Faoarref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FaoarrefPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return FaoarrefPeer::populateObjects(FaoarrefPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FaoarrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FaoarrefPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Faoarref $obj A Faoarref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAreacode();
            } // if key === null
            FaoarrefPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Faoarref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Faoarref) {
                $key = (string) $value->getAreacode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Faoarref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FaoarrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Faoarref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FaoarrefPeer::$instances[$key])) {
                return FaoarrefPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (FaoarrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FaoarrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to faoarref
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = FaoarrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FaoarrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FaoarrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FaoarrefPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Faoarref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FaoarrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FaoarrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FaoarrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FaoarrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FaoarrefPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(FaoarrefPeer::DATABASE_NAME)->getTable(FaoarrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFaoarrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFaoarrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FaoarrefTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return FaoarrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Faoarref or Criteria object.
     *
     * @param      mixed $values Criteria or Faoarref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Faoarref object
        }


        // Set the correct dbName
        $criteria->setDbName(FaoarrefPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Faoarref or Criteria object.
     *
     * @param      mixed $values Criteria or Faoarref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FaoarrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FaoarrefPeer::AREACODE);
            $value = $criteria->remove(FaoarrefPeer::AREACODE);
            if ($value) {
                $selectCriteria->add(FaoarrefPeer::AREACODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FaoarrefPeer::TABLE_NAME);
            }

        } else { // $values is Faoarref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FaoarrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the faoarref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FaoarrefPeer::TABLE_NAME, $con, FaoarrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FaoarrefPeer::clearInstancePool();
            FaoarrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Faoarref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Faoarref object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FaoarrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Faoarref) { // it's a model object
            // invalidate the cache for this single object
            FaoarrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FaoarrefPeer::DATABASE_NAME);
            $criteria->add(FaoarrefPeer::AREACODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FaoarrefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FaoarrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FaoarrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Faoarref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Faoarref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FaoarrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FaoarrefPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(FaoarrefPeer::DATABASE_NAME, FaoarrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Faoarref
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FaoarrefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FaoarrefPeer::DATABASE_NAME);
        $criteria->add(FaoarrefPeer::AREACODE, $pk);

        $v = FaoarrefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Faoarref[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FaoarrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FaoarrefPeer::DATABASE_NAME);
            $criteria->add(FaoarrefPeer::AREACODE, $pks, Criteria::IN);
            $objs = FaoarrefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFaoarrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFaoarrefPeer::buildTableMap();

