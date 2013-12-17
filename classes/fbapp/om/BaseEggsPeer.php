<?php


/**
 * Base static class for performing query and update operations on the 'eggs' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEggsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'eggs';

    /** the related Propel class for this table */
    const OM_CLASS = 'Eggs';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EggsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 64;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 64;

    /** the column name for the Stockcode field */
    const STOCKCODE = 'eggs.Stockcode';

    /** the column name for the Speccode field */
    const SPECCODE = 'eggs.Speccode';

    /** the column name for the EggsRefNo field */
    const EGGSREFNO = 'eggs.EggsRefNo';

    /** the column name for the WaterEggRef field */
    const WATEREGGREF = 'eggs.WaterEggRef';

    /** the column name for the Watertempmax field */
    const WATERTEMPMAX = 'eggs.Watertempmax';

    /** the column name for the Waterdepthmax field */
    const WATERDEPTHMAX = 'eggs.Waterdepthmax';

    /** the column name for the Salinitymax field */
    const SALINITYMAX = 'eggs.Salinitymax';

    /** the column name for the pH field */
    const PH = 'eggs.pH';

    /** the column name for the Oxygenmax field */
    const OXYGENMAX = 'eggs.Oxygenmax';

    /** the column name for the Watertempmin field */
    const WATERTEMPMIN = 'eggs.Watertempmin';

    /** the column name for the Waterdepthmin field */
    const WATERDEPTHMIN = 'eggs.Waterdepthmin';

    /** the column name for the Salinitymin field */
    const SALINITYMIN = 'eggs.Salinitymin';

    /** the column name for the pHmin field */
    const PHMIN = 'eggs.pHmin';

    /** the column name for the Oxygenmin field */
    const OXYGENMIN = 'eggs.Oxygenmin';

    /** the column name for the Watertempmod field */
    const WATERTEMPMOD = 'eggs.Watertempmod';

    /** the column name for the Waterdepthmid field */
    const WATERDEPTHMID = 'eggs.Waterdepthmid';

    /** the column name for the Salinitymod field */
    const SALINITYMOD = 'eggs.Salinitymod';

    /** the column name for the pHmod field */
    const PHMOD = 'eggs.pHmod';

    /** the column name for the Oxygenmod field */
    const OXYGENMOD = 'eggs.Oxygenmod';

    /** the column name for the WatEgg3 field */
    const WATEGG3 = 'eggs.WatEgg3';

    /** the column name for the Placeofdev field */
    const PLACEOFDEV = 'eggs.Placeofdev';

    /** the column name for the Shapeofegg field */
    const SHAPEOFEGG = 'eggs.Shapeofegg';

    /** the column name for the Pic field */
    const PIC = 'eggs.Pic';

    /** the column name for the Attributes field */
    const ATTRIBUTES = 'eggs.Attributes';

    /** the column name for the AttributesII field */
    const ATTRIBUTESII = 'eggs.AttributesII';

    /** the column name for the Colourofegg field */
    const COLOUROFEGG = 'eggs.Colourofegg';

    /** the column name for the Colouroilglobule field */
    const COLOUROILGLOBULE = 'eggs.Colouroilglobule';

    /** the column name for the Oilglobules field */
    const OILGLOBULES = 'eggs.Oilglobules';

    /** the column name for the OilglobmaxRef field */
    const OILGLOBMAXREF = 'eggs.OilglobmaxRef';

    /** the column name for the Oilglobulesmin field */
    const OILGLOBULESMIN = 'eggs.Oilglobulesmin';

    /** the column name for the OilglobminRef field */
    const OILGLOBMINREF = 'eggs.OilglobminRef';

    /** the column name for the Oilglobulesmod field */
    const OILGLOBULESMOD = 'eggs.Oilglobulesmod';

    /** the column name for the OilglobmodRef field */
    const OILGLOBMODREF = 'eggs.OilglobmodRef';

    /** the column name for the Oildiametermax2 field */
    const OILDIAMETERMAX2 = 'eggs.Oildiametermax2';

    /** the column name for the OildiamaxRef field */
    const OILDIAMAXREF = 'eggs.OildiamaxRef';

    /** the column name for the Oildiametermin2 field */
    const OILDIAMETERMIN2 = 'eggs.Oildiametermin2';

    /** the column name for the OildiaminRef field */
    const OILDIAMINREF = 'eggs.OildiaminRef';

    /** the column name for the Oildiametermod field */
    const OILDIAMETERMOD = 'eggs.Oildiametermod';

    /** the column name for the OildiamodRef field */
    const OILDIAMODREF = 'eggs.OildiamodRef';

    /** the column name for the Eggdiammax field */
    const EGGDIAMMAX = 'eggs.Eggdiammax';

    /** the column name for the EggdiammaxRef field */
    const EGGDIAMMAXREF = 'eggs.EggdiammaxRef';

    /** the column name for the Eggdiammin field */
    const EGGDIAMMIN = 'eggs.Eggdiammin';

    /** the column name for the EggdiamminRef field */
    const EGGDIAMMINREF = 'eggs.EggdiamminRef';

    /** the column name for the Eggdiammod field */
    const EGGDIAMMOD = 'eggs.Eggdiammod';

    /** the column name for the EggdiammodRef field */
    const EGGDIAMMODREF = 'eggs.EggdiammodRef';

    /** the column name for the Referencediammax field */
    const REFERENCEDIAMMAX = 'eggs.Referencediammax';

    /** the column name for the Referencediammin field */
    const REFERENCEDIAMMIN = 'eggs.Referencediammin';

    /** the column name for the Referencediammod field */
    const REFERENCEDIAMMOD = 'eggs.Referencediammod';

    /** the column name for the MeasurementsRef field */
    const MEASUREMENTSREF = 'eggs.MeasurementsRef';

    /** the column name for the Perivitwidthmax field */
    const PERIVITWIDTHMAX = 'eggs.Perivitwidthmax';

    /** the column name for the Perivitwidthmin field */
    const PERIVITWIDTHMIN = 'eggs.Perivitwidthmin';

    /** the column name for the Perivitwidthmod field */
    const PERIVITWIDTHMOD = 'eggs.Perivitwidthmod';

    /** the column name for the Chorionthickmax field */
    const CHORIONTHICKMAX = 'eggs.Chorionthickmax';

    /** the column name for the Chorionthickmin field */
    const CHORIONTHICKMIN = 'eggs.Chorionthickmin';

    /** the column name for the Chorionthickmod field */
    const CHORIONTHICKMOD = 'eggs.Chorionthickmod';

    /** the column name for the Entered field */
    const ENTERED = 'eggs.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'eggs.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'eggs.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'eggs.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'eggs.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'eggs.DateChecked';

    /** the column name for the AddChars field */
    const ADDCHARS = 'eggs.AddChars';

    /** the column name for the WatEggs field */
    const WATEGGS = 'eggs.WatEggs';

    /** the column name for the TS field */
    const TS = 'eggs.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Eggs objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Eggs[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EggsPeer::$fieldNames[EggsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Speccode', 'Eggsrefno', 'Watereggref', 'Watertempmax', 'Waterdepthmax', 'Salinitymax', 'Ph', 'Oxygenmax', 'Watertempmin', 'Waterdepthmin', 'Salinitymin', 'Phmin', 'Oxygenmin', 'Watertempmod', 'Waterdepthmid', 'Salinitymod', 'Phmod', 'Oxygenmod', 'Wategg3', 'Placeofdev', 'Shapeofegg', 'Pic', 'Attributes', 'Attributesii', 'Colourofegg', 'Colouroilglobule', 'Oilglobules', 'Oilglobmaxref', 'Oilglobulesmin', 'Oilglobminref', 'Oilglobulesmod', 'Oilglobmodref', 'Oildiametermax2', 'Oildiamaxref', 'Oildiametermin2', 'Oildiaminref', 'Oildiametermod', 'Oildiamodref', 'Eggdiammax', 'Eggdiammaxref', 'Eggdiammin', 'Eggdiamminref', 'Eggdiammod', 'Eggdiammodref', 'Referencediammax', 'Referencediammin', 'Referencediammod', 'Measurementsref', 'Perivitwidthmax', 'Perivitwidthmin', 'Perivitwidthmod', 'Chorionthickmax', 'Chorionthickmin', 'Chorionthickmod', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Addchars', 'Wateggs', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'speccode', 'eggsrefno', 'watereggref', 'watertempmax', 'waterdepthmax', 'salinitymax', 'ph', 'oxygenmax', 'watertempmin', 'waterdepthmin', 'salinitymin', 'phmin', 'oxygenmin', 'watertempmod', 'waterdepthmid', 'salinitymod', 'phmod', 'oxygenmod', 'wategg3', 'placeofdev', 'shapeofegg', 'pic', 'attributes', 'attributesii', 'colourofegg', 'colouroilglobule', 'oilglobules', 'oilglobmaxref', 'oilglobulesmin', 'oilglobminref', 'oilglobulesmod', 'oilglobmodref', 'oildiametermax2', 'oildiamaxref', 'oildiametermin2', 'oildiaminref', 'oildiametermod', 'oildiamodref', 'eggdiammax', 'eggdiammaxref', 'eggdiammin', 'eggdiamminref', 'eggdiammod', 'eggdiammodref', 'referencediammax', 'referencediammin', 'referencediammod', 'measurementsref', 'perivitwidthmax', 'perivitwidthmin', 'perivitwidthmod', 'chorionthickmax', 'chorionthickmin', 'chorionthickmod', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'addchars', 'wateggs', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EggsPeer::STOCKCODE, EggsPeer::SPECCODE, EggsPeer::EGGSREFNO, EggsPeer::WATEREGGREF, EggsPeer::WATERTEMPMAX, EggsPeer::WATERDEPTHMAX, EggsPeer::SALINITYMAX, EggsPeer::PH, EggsPeer::OXYGENMAX, EggsPeer::WATERTEMPMIN, EggsPeer::WATERDEPTHMIN, EggsPeer::SALINITYMIN, EggsPeer::PHMIN, EggsPeer::OXYGENMIN, EggsPeer::WATERTEMPMOD, EggsPeer::WATERDEPTHMID, EggsPeer::SALINITYMOD, EggsPeer::PHMOD, EggsPeer::OXYGENMOD, EggsPeer::WATEGG3, EggsPeer::PLACEOFDEV, EggsPeer::SHAPEOFEGG, EggsPeer::PIC, EggsPeer::ATTRIBUTES, EggsPeer::ATTRIBUTESII, EggsPeer::COLOUROFEGG, EggsPeer::COLOUROILGLOBULE, EggsPeer::OILGLOBULES, EggsPeer::OILGLOBMAXREF, EggsPeer::OILGLOBULESMIN, EggsPeer::OILGLOBMINREF, EggsPeer::OILGLOBULESMOD, EggsPeer::OILGLOBMODREF, EggsPeer::OILDIAMETERMAX2, EggsPeer::OILDIAMAXREF, EggsPeer::OILDIAMETERMIN2, EggsPeer::OILDIAMINREF, EggsPeer::OILDIAMETERMOD, EggsPeer::OILDIAMODREF, EggsPeer::EGGDIAMMAX, EggsPeer::EGGDIAMMAXREF, EggsPeer::EGGDIAMMIN, EggsPeer::EGGDIAMMINREF, EggsPeer::EGGDIAMMOD, EggsPeer::EGGDIAMMODREF, EggsPeer::REFERENCEDIAMMAX, EggsPeer::REFERENCEDIAMMIN, EggsPeer::REFERENCEDIAMMOD, EggsPeer::MEASUREMENTSREF, EggsPeer::PERIVITWIDTHMAX, EggsPeer::PERIVITWIDTHMIN, EggsPeer::PERIVITWIDTHMOD, EggsPeer::CHORIONTHICKMAX, EggsPeer::CHORIONTHICKMIN, EggsPeer::CHORIONTHICKMOD, EggsPeer::ENTERED, EggsPeer::DATEENTERED, EggsPeer::MODIFIED, EggsPeer::DATEMODIFIED, EggsPeer::EXPERT, EggsPeer::DATECHECKED, EggsPeer::ADDCHARS, EggsPeer::WATEGGS, EggsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'SPECCODE', 'EGGSREFNO', 'WATEREGGREF', 'WATERTEMPMAX', 'WATERDEPTHMAX', 'SALINITYMAX', 'PH', 'OXYGENMAX', 'WATERTEMPMIN', 'WATERDEPTHMIN', 'SALINITYMIN', 'PHMIN', 'OXYGENMIN', 'WATERTEMPMOD', 'WATERDEPTHMID', 'SALINITYMOD', 'PHMOD', 'OXYGENMOD', 'WATEGG3', 'PLACEOFDEV', 'SHAPEOFEGG', 'PIC', 'ATTRIBUTES', 'ATTRIBUTESII', 'COLOUROFEGG', 'COLOUROILGLOBULE', 'OILGLOBULES', 'OILGLOBMAXREF', 'OILGLOBULESMIN', 'OILGLOBMINREF', 'OILGLOBULESMOD', 'OILGLOBMODREF', 'OILDIAMETERMAX2', 'OILDIAMAXREF', 'OILDIAMETERMIN2', 'OILDIAMINREF', 'OILDIAMETERMOD', 'OILDIAMODREF', 'EGGDIAMMAX', 'EGGDIAMMAXREF', 'EGGDIAMMIN', 'EGGDIAMMINREF', 'EGGDIAMMOD', 'EGGDIAMMODREF', 'REFERENCEDIAMMAX', 'REFERENCEDIAMMIN', 'REFERENCEDIAMMOD', 'MEASUREMENTSREF', 'PERIVITWIDTHMAX', 'PERIVITWIDTHMIN', 'PERIVITWIDTHMOD', 'CHORIONTHICKMAX', 'CHORIONTHICKMIN', 'CHORIONTHICKMOD', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'ADDCHARS', 'WATEGGS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('Stockcode', 'Speccode', 'EggsRefNo', 'WaterEggRef', 'Watertempmax', 'Waterdepthmax', 'Salinitymax', 'pH', 'Oxygenmax', 'Watertempmin', 'Waterdepthmin', 'Salinitymin', 'pHmin', 'Oxygenmin', 'Watertempmod', 'Waterdepthmid', 'Salinitymod', 'pHmod', 'Oxygenmod', 'WatEgg3', 'Placeofdev', 'Shapeofegg', 'Pic', 'Attributes', 'AttributesII', 'Colourofegg', 'Colouroilglobule', 'Oilglobules', 'OilglobmaxRef', 'Oilglobulesmin', 'OilglobminRef', 'Oilglobulesmod', 'OilglobmodRef', 'Oildiametermax2', 'OildiamaxRef', 'Oildiametermin2', 'OildiaminRef', 'Oildiametermod', 'OildiamodRef', 'Eggdiammax', 'EggdiammaxRef', 'Eggdiammin', 'EggdiamminRef', 'Eggdiammod', 'EggdiammodRef', 'Referencediammax', 'Referencediammin', 'Referencediammod', 'MeasurementsRef', 'Perivitwidthmax', 'Perivitwidthmin', 'Perivitwidthmod', 'Chorionthickmax', 'Chorionthickmin', 'Chorionthickmod', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'AddChars', 'WatEggs', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EggsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Speccode' => 1, 'Eggsrefno' => 2, 'Watereggref' => 3, 'Watertempmax' => 4, 'Waterdepthmax' => 5, 'Salinitymax' => 6, 'Ph' => 7, 'Oxygenmax' => 8, 'Watertempmin' => 9, 'Waterdepthmin' => 10, 'Salinitymin' => 11, 'Phmin' => 12, 'Oxygenmin' => 13, 'Watertempmod' => 14, 'Waterdepthmid' => 15, 'Salinitymod' => 16, 'Phmod' => 17, 'Oxygenmod' => 18, 'Wategg3' => 19, 'Placeofdev' => 20, 'Shapeofegg' => 21, 'Pic' => 22, 'Attributes' => 23, 'Attributesii' => 24, 'Colourofegg' => 25, 'Colouroilglobule' => 26, 'Oilglobules' => 27, 'Oilglobmaxref' => 28, 'Oilglobulesmin' => 29, 'Oilglobminref' => 30, 'Oilglobulesmod' => 31, 'Oilglobmodref' => 32, 'Oildiametermax2' => 33, 'Oildiamaxref' => 34, 'Oildiametermin2' => 35, 'Oildiaminref' => 36, 'Oildiametermod' => 37, 'Oildiamodref' => 38, 'Eggdiammax' => 39, 'Eggdiammaxref' => 40, 'Eggdiammin' => 41, 'Eggdiamminref' => 42, 'Eggdiammod' => 43, 'Eggdiammodref' => 44, 'Referencediammax' => 45, 'Referencediammin' => 46, 'Referencediammod' => 47, 'Measurementsref' => 48, 'Perivitwidthmax' => 49, 'Perivitwidthmin' => 50, 'Perivitwidthmod' => 51, 'Chorionthickmax' => 52, 'Chorionthickmin' => 53, 'Chorionthickmod' => 54, 'Entered' => 55, 'Dateentered' => 56, 'Modified' => 57, 'Datemodified' => 58, 'Expert' => 59, 'Datechecked' => 60, 'Addchars' => 61, 'Wateggs' => 62, 'Ts' => 63, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'speccode' => 1, 'eggsrefno' => 2, 'watereggref' => 3, 'watertempmax' => 4, 'waterdepthmax' => 5, 'salinitymax' => 6, 'ph' => 7, 'oxygenmax' => 8, 'watertempmin' => 9, 'waterdepthmin' => 10, 'salinitymin' => 11, 'phmin' => 12, 'oxygenmin' => 13, 'watertempmod' => 14, 'waterdepthmid' => 15, 'salinitymod' => 16, 'phmod' => 17, 'oxygenmod' => 18, 'wategg3' => 19, 'placeofdev' => 20, 'shapeofegg' => 21, 'pic' => 22, 'attributes' => 23, 'attributesii' => 24, 'colourofegg' => 25, 'colouroilglobule' => 26, 'oilglobules' => 27, 'oilglobmaxref' => 28, 'oilglobulesmin' => 29, 'oilglobminref' => 30, 'oilglobulesmod' => 31, 'oilglobmodref' => 32, 'oildiametermax2' => 33, 'oildiamaxref' => 34, 'oildiametermin2' => 35, 'oildiaminref' => 36, 'oildiametermod' => 37, 'oildiamodref' => 38, 'eggdiammax' => 39, 'eggdiammaxref' => 40, 'eggdiammin' => 41, 'eggdiamminref' => 42, 'eggdiammod' => 43, 'eggdiammodref' => 44, 'referencediammax' => 45, 'referencediammin' => 46, 'referencediammod' => 47, 'measurementsref' => 48, 'perivitwidthmax' => 49, 'perivitwidthmin' => 50, 'perivitwidthmod' => 51, 'chorionthickmax' => 52, 'chorionthickmin' => 53, 'chorionthickmod' => 54, 'entered' => 55, 'dateentered' => 56, 'modified' => 57, 'datemodified' => 58, 'expert' => 59, 'datechecked' => 60, 'addchars' => 61, 'wateggs' => 62, 'ts' => 63, ),
        BasePeer::TYPE_COLNAME => array (EggsPeer::STOCKCODE => 0, EggsPeer::SPECCODE => 1, EggsPeer::EGGSREFNO => 2, EggsPeer::WATEREGGREF => 3, EggsPeer::WATERTEMPMAX => 4, EggsPeer::WATERDEPTHMAX => 5, EggsPeer::SALINITYMAX => 6, EggsPeer::PH => 7, EggsPeer::OXYGENMAX => 8, EggsPeer::WATERTEMPMIN => 9, EggsPeer::WATERDEPTHMIN => 10, EggsPeer::SALINITYMIN => 11, EggsPeer::PHMIN => 12, EggsPeer::OXYGENMIN => 13, EggsPeer::WATERTEMPMOD => 14, EggsPeer::WATERDEPTHMID => 15, EggsPeer::SALINITYMOD => 16, EggsPeer::PHMOD => 17, EggsPeer::OXYGENMOD => 18, EggsPeer::WATEGG3 => 19, EggsPeer::PLACEOFDEV => 20, EggsPeer::SHAPEOFEGG => 21, EggsPeer::PIC => 22, EggsPeer::ATTRIBUTES => 23, EggsPeer::ATTRIBUTESII => 24, EggsPeer::COLOUROFEGG => 25, EggsPeer::COLOUROILGLOBULE => 26, EggsPeer::OILGLOBULES => 27, EggsPeer::OILGLOBMAXREF => 28, EggsPeer::OILGLOBULESMIN => 29, EggsPeer::OILGLOBMINREF => 30, EggsPeer::OILGLOBULESMOD => 31, EggsPeer::OILGLOBMODREF => 32, EggsPeer::OILDIAMETERMAX2 => 33, EggsPeer::OILDIAMAXREF => 34, EggsPeer::OILDIAMETERMIN2 => 35, EggsPeer::OILDIAMINREF => 36, EggsPeer::OILDIAMETERMOD => 37, EggsPeer::OILDIAMODREF => 38, EggsPeer::EGGDIAMMAX => 39, EggsPeer::EGGDIAMMAXREF => 40, EggsPeer::EGGDIAMMIN => 41, EggsPeer::EGGDIAMMINREF => 42, EggsPeer::EGGDIAMMOD => 43, EggsPeer::EGGDIAMMODREF => 44, EggsPeer::REFERENCEDIAMMAX => 45, EggsPeer::REFERENCEDIAMMIN => 46, EggsPeer::REFERENCEDIAMMOD => 47, EggsPeer::MEASUREMENTSREF => 48, EggsPeer::PERIVITWIDTHMAX => 49, EggsPeer::PERIVITWIDTHMIN => 50, EggsPeer::PERIVITWIDTHMOD => 51, EggsPeer::CHORIONTHICKMAX => 52, EggsPeer::CHORIONTHICKMIN => 53, EggsPeer::CHORIONTHICKMOD => 54, EggsPeer::ENTERED => 55, EggsPeer::DATEENTERED => 56, EggsPeer::MODIFIED => 57, EggsPeer::DATEMODIFIED => 58, EggsPeer::EXPERT => 59, EggsPeer::DATECHECKED => 60, EggsPeer::ADDCHARS => 61, EggsPeer::WATEGGS => 62, EggsPeer::TS => 63, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'SPECCODE' => 1, 'EGGSREFNO' => 2, 'WATEREGGREF' => 3, 'WATERTEMPMAX' => 4, 'WATERDEPTHMAX' => 5, 'SALINITYMAX' => 6, 'PH' => 7, 'OXYGENMAX' => 8, 'WATERTEMPMIN' => 9, 'WATERDEPTHMIN' => 10, 'SALINITYMIN' => 11, 'PHMIN' => 12, 'OXYGENMIN' => 13, 'WATERTEMPMOD' => 14, 'WATERDEPTHMID' => 15, 'SALINITYMOD' => 16, 'PHMOD' => 17, 'OXYGENMOD' => 18, 'WATEGG3' => 19, 'PLACEOFDEV' => 20, 'SHAPEOFEGG' => 21, 'PIC' => 22, 'ATTRIBUTES' => 23, 'ATTRIBUTESII' => 24, 'COLOUROFEGG' => 25, 'COLOUROILGLOBULE' => 26, 'OILGLOBULES' => 27, 'OILGLOBMAXREF' => 28, 'OILGLOBULESMIN' => 29, 'OILGLOBMINREF' => 30, 'OILGLOBULESMOD' => 31, 'OILGLOBMODREF' => 32, 'OILDIAMETERMAX2' => 33, 'OILDIAMAXREF' => 34, 'OILDIAMETERMIN2' => 35, 'OILDIAMINREF' => 36, 'OILDIAMETERMOD' => 37, 'OILDIAMODREF' => 38, 'EGGDIAMMAX' => 39, 'EGGDIAMMAXREF' => 40, 'EGGDIAMMIN' => 41, 'EGGDIAMMINREF' => 42, 'EGGDIAMMOD' => 43, 'EGGDIAMMODREF' => 44, 'REFERENCEDIAMMAX' => 45, 'REFERENCEDIAMMIN' => 46, 'REFERENCEDIAMMOD' => 47, 'MEASUREMENTSREF' => 48, 'PERIVITWIDTHMAX' => 49, 'PERIVITWIDTHMIN' => 50, 'PERIVITWIDTHMOD' => 51, 'CHORIONTHICKMAX' => 52, 'CHORIONTHICKMIN' => 53, 'CHORIONTHICKMOD' => 54, 'ENTERED' => 55, 'DATEENTERED' => 56, 'MODIFIED' => 57, 'DATEMODIFIED' => 58, 'EXPERT' => 59, 'DATECHECKED' => 60, 'ADDCHARS' => 61, 'WATEGGS' => 62, 'TS' => 63, ),
        BasePeer::TYPE_FIELDNAME => array ('Stockcode' => 0, 'Speccode' => 1, 'EggsRefNo' => 2, 'WaterEggRef' => 3, 'Watertempmax' => 4, 'Waterdepthmax' => 5, 'Salinitymax' => 6, 'pH' => 7, 'Oxygenmax' => 8, 'Watertempmin' => 9, 'Waterdepthmin' => 10, 'Salinitymin' => 11, 'pHmin' => 12, 'Oxygenmin' => 13, 'Watertempmod' => 14, 'Waterdepthmid' => 15, 'Salinitymod' => 16, 'pHmod' => 17, 'Oxygenmod' => 18, 'WatEgg3' => 19, 'Placeofdev' => 20, 'Shapeofegg' => 21, 'Pic' => 22, 'Attributes' => 23, 'AttributesII' => 24, 'Colourofegg' => 25, 'Colouroilglobule' => 26, 'Oilglobules' => 27, 'OilglobmaxRef' => 28, 'Oilglobulesmin' => 29, 'OilglobminRef' => 30, 'Oilglobulesmod' => 31, 'OilglobmodRef' => 32, 'Oildiametermax2' => 33, 'OildiamaxRef' => 34, 'Oildiametermin2' => 35, 'OildiaminRef' => 36, 'Oildiametermod' => 37, 'OildiamodRef' => 38, 'Eggdiammax' => 39, 'EggdiammaxRef' => 40, 'Eggdiammin' => 41, 'EggdiamminRef' => 42, 'Eggdiammod' => 43, 'EggdiammodRef' => 44, 'Referencediammax' => 45, 'Referencediammin' => 46, 'Referencediammod' => 47, 'MeasurementsRef' => 48, 'Perivitwidthmax' => 49, 'Perivitwidthmin' => 50, 'Perivitwidthmod' => 51, 'Chorionthickmax' => 52, 'Chorionthickmin' => 53, 'Chorionthickmod' => 54, 'Entered' => 55, 'DateEntered' => 56, 'Modified' => 57, 'DateModified' => 58, 'Expert' => 59, 'DateChecked' => 60, 'AddChars' => 61, 'WatEggs' => 62, 'TS' => 63, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, )
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
        $toNames = EggsPeer::getFieldNames($toType);
        $key = isset(EggsPeer::$fieldKeys[$fromType][$name]) ? EggsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EggsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EggsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EggsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EggsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EggsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EggsPeer::STOCKCODE);
            $criteria->addSelectColumn(EggsPeer::SPECCODE);
            $criteria->addSelectColumn(EggsPeer::EGGSREFNO);
            $criteria->addSelectColumn(EggsPeer::WATEREGGREF);
            $criteria->addSelectColumn(EggsPeer::WATERTEMPMAX);
            $criteria->addSelectColumn(EggsPeer::WATERDEPTHMAX);
            $criteria->addSelectColumn(EggsPeer::SALINITYMAX);
            $criteria->addSelectColumn(EggsPeer::PH);
            $criteria->addSelectColumn(EggsPeer::OXYGENMAX);
            $criteria->addSelectColumn(EggsPeer::WATERTEMPMIN);
            $criteria->addSelectColumn(EggsPeer::WATERDEPTHMIN);
            $criteria->addSelectColumn(EggsPeer::SALINITYMIN);
            $criteria->addSelectColumn(EggsPeer::PHMIN);
            $criteria->addSelectColumn(EggsPeer::OXYGENMIN);
            $criteria->addSelectColumn(EggsPeer::WATERTEMPMOD);
            $criteria->addSelectColumn(EggsPeer::WATERDEPTHMID);
            $criteria->addSelectColumn(EggsPeer::SALINITYMOD);
            $criteria->addSelectColumn(EggsPeer::PHMOD);
            $criteria->addSelectColumn(EggsPeer::OXYGENMOD);
            $criteria->addSelectColumn(EggsPeer::WATEGG3);
            $criteria->addSelectColumn(EggsPeer::PLACEOFDEV);
            $criteria->addSelectColumn(EggsPeer::SHAPEOFEGG);
            $criteria->addSelectColumn(EggsPeer::PIC);
            $criteria->addSelectColumn(EggsPeer::ATTRIBUTES);
            $criteria->addSelectColumn(EggsPeer::ATTRIBUTESII);
            $criteria->addSelectColumn(EggsPeer::COLOUROFEGG);
            $criteria->addSelectColumn(EggsPeer::COLOUROILGLOBULE);
            $criteria->addSelectColumn(EggsPeer::OILGLOBULES);
            $criteria->addSelectColumn(EggsPeer::OILGLOBMAXREF);
            $criteria->addSelectColumn(EggsPeer::OILGLOBULESMIN);
            $criteria->addSelectColumn(EggsPeer::OILGLOBMINREF);
            $criteria->addSelectColumn(EggsPeer::OILGLOBULESMOD);
            $criteria->addSelectColumn(EggsPeer::OILGLOBMODREF);
            $criteria->addSelectColumn(EggsPeer::OILDIAMETERMAX2);
            $criteria->addSelectColumn(EggsPeer::OILDIAMAXREF);
            $criteria->addSelectColumn(EggsPeer::OILDIAMETERMIN2);
            $criteria->addSelectColumn(EggsPeer::OILDIAMINREF);
            $criteria->addSelectColumn(EggsPeer::OILDIAMETERMOD);
            $criteria->addSelectColumn(EggsPeer::OILDIAMODREF);
            $criteria->addSelectColumn(EggsPeer::EGGDIAMMAX);
            $criteria->addSelectColumn(EggsPeer::EGGDIAMMAXREF);
            $criteria->addSelectColumn(EggsPeer::EGGDIAMMIN);
            $criteria->addSelectColumn(EggsPeer::EGGDIAMMINREF);
            $criteria->addSelectColumn(EggsPeer::EGGDIAMMOD);
            $criteria->addSelectColumn(EggsPeer::EGGDIAMMODREF);
            $criteria->addSelectColumn(EggsPeer::REFERENCEDIAMMAX);
            $criteria->addSelectColumn(EggsPeer::REFERENCEDIAMMIN);
            $criteria->addSelectColumn(EggsPeer::REFERENCEDIAMMOD);
            $criteria->addSelectColumn(EggsPeer::MEASUREMENTSREF);
            $criteria->addSelectColumn(EggsPeer::PERIVITWIDTHMAX);
            $criteria->addSelectColumn(EggsPeer::PERIVITWIDTHMIN);
            $criteria->addSelectColumn(EggsPeer::PERIVITWIDTHMOD);
            $criteria->addSelectColumn(EggsPeer::CHORIONTHICKMAX);
            $criteria->addSelectColumn(EggsPeer::CHORIONTHICKMIN);
            $criteria->addSelectColumn(EggsPeer::CHORIONTHICKMOD);
            $criteria->addSelectColumn(EggsPeer::ENTERED);
            $criteria->addSelectColumn(EggsPeer::DATEENTERED);
            $criteria->addSelectColumn(EggsPeer::MODIFIED);
            $criteria->addSelectColumn(EggsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EggsPeer::EXPERT);
            $criteria->addSelectColumn(EggsPeer::DATECHECKED);
            $criteria->addSelectColumn(EggsPeer::ADDCHARS);
            $criteria->addSelectColumn(EggsPeer::WATEGGS);
            $criteria->addSelectColumn(EggsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.EggsRefNo');
            $criteria->addSelectColumn($alias . '.WaterEggRef');
            $criteria->addSelectColumn($alias . '.Watertempmax');
            $criteria->addSelectColumn($alias . '.Waterdepthmax');
            $criteria->addSelectColumn($alias . '.Salinitymax');
            $criteria->addSelectColumn($alias . '.pH');
            $criteria->addSelectColumn($alias . '.Oxygenmax');
            $criteria->addSelectColumn($alias . '.Watertempmin');
            $criteria->addSelectColumn($alias . '.Waterdepthmin');
            $criteria->addSelectColumn($alias . '.Salinitymin');
            $criteria->addSelectColumn($alias . '.pHmin');
            $criteria->addSelectColumn($alias . '.Oxygenmin');
            $criteria->addSelectColumn($alias . '.Watertempmod');
            $criteria->addSelectColumn($alias . '.Waterdepthmid');
            $criteria->addSelectColumn($alias . '.Salinitymod');
            $criteria->addSelectColumn($alias . '.pHmod');
            $criteria->addSelectColumn($alias . '.Oxygenmod');
            $criteria->addSelectColumn($alias . '.WatEgg3');
            $criteria->addSelectColumn($alias . '.Placeofdev');
            $criteria->addSelectColumn($alias . '.Shapeofegg');
            $criteria->addSelectColumn($alias . '.Pic');
            $criteria->addSelectColumn($alias . '.Attributes');
            $criteria->addSelectColumn($alias . '.AttributesII');
            $criteria->addSelectColumn($alias . '.Colourofegg');
            $criteria->addSelectColumn($alias . '.Colouroilglobule');
            $criteria->addSelectColumn($alias . '.Oilglobules');
            $criteria->addSelectColumn($alias . '.OilglobmaxRef');
            $criteria->addSelectColumn($alias . '.Oilglobulesmin');
            $criteria->addSelectColumn($alias . '.OilglobminRef');
            $criteria->addSelectColumn($alias . '.Oilglobulesmod');
            $criteria->addSelectColumn($alias . '.OilglobmodRef');
            $criteria->addSelectColumn($alias . '.Oildiametermax2');
            $criteria->addSelectColumn($alias . '.OildiamaxRef');
            $criteria->addSelectColumn($alias . '.Oildiametermin2');
            $criteria->addSelectColumn($alias . '.OildiaminRef');
            $criteria->addSelectColumn($alias . '.Oildiametermod');
            $criteria->addSelectColumn($alias . '.OildiamodRef');
            $criteria->addSelectColumn($alias . '.Eggdiammax');
            $criteria->addSelectColumn($alias . '.EggdiammaxRef');
            $criteria->addSelectColumn($alias . '.Eggdiammin');
            $criteria->addSelectColumn($alias . '.EggdiamminRef');
            $criteria->addSelectColumn($alias . '.Eggdiammod');
            $criteria->addSelectColumn($alias . '.EggdiammodRef');
            $criteria->addSelectColumn($alias . '.Referencediammax');
            $criteria->addSelectColumn($alias . '.Referencediammin');
            $criteria->addSelectColumn($alias . '.Referencediammod');
            $criteria->addSelectColumn($alias . '.MeasurementsRef');
            $criteria->addSelectColumn($alias . '.Perivitwidthmax');
            $criteria->addSelectColumn($alias . '.Perivitwidthmin');
            $criteria->addSelectColumn($alias . '.Perivitwidthmod');
            $criteria->addSelectColumn($alias . '.Chorionthickmax');
            $criteria->addSelectColumn($alias . '.Chorionthickmin');
            $criteria->addSelectColumn($alias . '.Chorionthickmod');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.AddChars');
            $criteria->addSelectColumn($alias . '.WatEggs');
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
        $criteria->setPrimaryTableName(EggsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EggsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EggsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Eggs
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EggsPeer::doSelect($critcopy, $con);
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
        return EggsPeer::populateObjects(EggsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EggsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EggsPeer::DATABASE_NAME);

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
     * @param Eggs $obj A Eggs object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getStockcode();
            } // if key === null
            EggsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Eggs object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Eggs) {
                $key = (string) $value->getStockcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Eggs object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EggsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Eggs Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EggsPeer::$instances[$key])) {
                return EggsPeer::$instances[$key];
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
        foreach (EggsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EggsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to eggs
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
        $cls = EggsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EggsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EggsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EggsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Eggs object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EggsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EggsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EggsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EggsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EggsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EggsPeer::DATABASE_NAME)->getTable(EggsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEggsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEggsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EggsTableMap());
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
        return EggsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Eggs or Criteria object.
     *
     * @param      mixed $values Criteria or Eggs object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Eggs object
        }


        // Set the correct dbName
        $criteria->setDbName(EggsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Eggs or Criteria object.
     *
     * @param      mixed $values Criteria or Eggs object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EggsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EggsPeer::STOCKCODE);
            $value = $criteria->remove(EggsPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(EggsPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EggsPeer::TABLE_NAME);
            }

        } else { // $values is Eggs object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EggsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the eggs table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EggsPeer::TABLE_NAME, $con, EggsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EggsPeer::clearInstancePool();
            EggsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Eggs or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Eggs object or primary key or array of primary keys
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
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EggsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Eggs) { // it's a model object
            // invalidate the cache for this single object
            EggsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EggsPeer::DATABASE_NAME);
            $criteria->add(EggsPeer::STOCKCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EggsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EggsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EggsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Eggs object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Eggs $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EggsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EggsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EggsPeer::DATABASE_NAME, EggsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Eggs
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EggsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EggsPeer::DATABASE_NAME);
        $criteria->add(EggsPeer::STOCKCODE, $pk);

        $v = EggsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Eggs[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EggsPeer::DATABASE_NAME);
            $criteria->add(EggsPeer::STOCKCODE, $pks, Criteria::IN);
            $objs = EggsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEggsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEggsPeer::buildTableMap();

