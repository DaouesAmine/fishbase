<?php


/**
 * Base static class for performing query and update operations on the 'eggnurserysystem' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEggnurserysystemPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'eggnurserysystem';

    /** the related Propel class for this table */
    const OM_CLASS = 'Eggnurserysystem';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EggnurserysystemTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 46;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 46;

    /** the column name for the autoctr field */
    const AUTOCTR = 'eggnurserysystem.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'eggnurserysystem.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'eggnurserysystem.Stockcode';

    /** the column name for the CommonName field */
    const COMMONNAME = 'eggnurserysystem.CommonName';

    /** the column name for the Species field */
    const SPECIES = 'eggnurserysystem.Species';

    /** the column name for the MainRef field */
    const MAINREF = 'eggnurserysystem.MainRef';

    /** the column name for the C_Code field */
    const C_CODE = 'eggnurserysystem.C_Code';

    /** the column name for the Locality field */
    const LOCALITY = 'eggnurserysystem.Locality';

    /** the column name for the DataRef field */
    const DATAREF = 'eggnurserysystem.DataRef';

    /** the column name for the NumberofEggs field */
    const NUMBEROFEGGS = 'eggnurserysystem.NumberofEggs';

    /** the column name for the Unit field */
    const UNIT = 'eggnurserysystem.Unit';

    /** the column name for the NurserySystemI field */
    const NURSERYSYSTEMI = 'eggnurserysystem.NurserySystemI';

    /** the column name for the NurserySystemII field */
    const NURSERYSYSTEMII = 'eggnurserysystem.NurserySystemII';

    /** the column name for the CultureSystem field */
    const CULTURESYSTEM = 'eggnurserysystem.CultureSystem';

    /** the column name for the MainWaterSource field */
    const MAINWATERSOURCE = 'eggnurserysystem.MainWaterSource';

    /** the column name for the SupplWaterSource field */
    const SUPPLWATERSOURCE = 'eggnurserysystem.SupplWaterSource';

    /** the column name for the TempMin field */
    const TEMPMIN = 'eggnurserysystem.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'eggnurserysystem.TempMax';

    /** the column name for the SalinMin field */
    const SALINMIN = 'eggnurserysystem.SalinMin';

    /** the column name for the SalinMax field */
    const SALINMAX = 'eggnurserysystem.SalinMax';

    /** the column name for the pHmin field */
    const PHMIN = 'eggnurserysystem.pHmin';

    /** the column name for the pHmax field */
    const PHMAX = 'eggnurserysystem.pHmax';

    /** the column name for the OxygenMin field */
    const OXYGENMIN = 'eggnurserysystem.OxygenMin';

    /** the column name for the OxygenMax field */
    const OXYGENMAX = 'eggnurserysystem.OxygenMax';

    /** the column name for the HardnessMin field */
    const HARDNESSMIN = 'eggnurserysystem.HardnessMin';

    /** the column name for the HardnessMax field */
    const HARDNESSMAX = 'eggnurserysystem.HardnessMax';

    /** the column name for the IlluminationMin field */
    const ILLUMINATIONMIN = 'eggnurserysystem.IlluminationMin';

    /** the column name for the IlluminationMax field */
    const ILLUMINATIONMAX = 'eggnurserysystem.IlluminationMax';

    /** the column name for the EggMortalityMin field */
    const EGGMORTALITYMIN = 'eggnurserysystem.EggMortalityMin';

    /** the column name for the EggMortalityMax field */
    const EGGMORTALITYMAX = 'eggnurserysystem.EggMortalityMax';

    /** the column name for the EyeingMin field */
    const EYEINGMIN = 'eggnurserysystem.EyeingMin';

    /** the column name for the EyeingMax field */
    const EYEINGMAX = 'eggnurserysystem.EyeingMax';

    /** the column name for the HatchDegreeMin field */
    const HATCHDEGREEMIN = 'eggnurserysystem.HatchDegreeMin';

    /** the column name for the HatchDegreeMax field */
    const HATCHDEGREEMAX = 'eggnurserysystem.HatchDegreeMax';

    /** the column name for the HatchHoursMin field */
    const HATCHHOURSMIN = 'eggnurserysystem.HatchHoursMin';

    /** the column name for the HatchHoursMax field */
    const HATCHHOURSMAX = 'eggnurserysystem.HatchHoursMax';

    /** the column name for the ProductionCycle field */
    const PRODUCTIONCYCLE = 'eggnurserysystem.ProductionCycle';

    /** the column name for the ProductionYear field */
    const PRODUCTIONYEAR = 'eggnurserysystem.ProductionYear';

    /** the column name for the Comment field */
    const COMMENT = 'eggnurserysystem.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'eggnurserysystem.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'eggnurserysystem.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'eggnurserysystem.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'eggnurserysystem.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'eggnurserysystem.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'eggnurserysystem.DateChecked';

    /** the column name for the TS field */
    const TS = 'eggnurserysystem.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Eggnurserysystem objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Eggnurserysystem[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EggnurserysystemPeer::$fieldNames[EggnurserysystemPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Commonname', 'Species', 'Mainref', 'CCode', 'Locality', 'Dataref', 'Numberofeggs', 'Unit', 'Nurserysystemi', 'Nurserysystemii', 'Culturesystem', 'Mainwatersource', 'Supplwatersource', 'Tempmin', 'Tempmax', 'Salinmin', 'Salinmax', 'Phmin', 'Phmax', 'Oxygenmin', 'Oxygenmax', 'Hardnessmin', 'Hardnessmax', 'Illuminationmin', 'Illuminationmax', 'Eggmortalitymin', 'Eggmortalitymax', 'Eyeingmin', 'Eyeingmax', 'Hatchdegreemin', 'Hatchdegreemax', 'Hatchhoursmin', 'Hatchhoursmax', 'Productioncycle', 'Productionyear', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'commonname', 'species', 'mainref', 'cCode', 'locality', 'dataref', 'numberofeggs', 'unit', 'nurserysystemi', 'nurserysystemii', 'culturesystem', 'mainwatersource', 'supplwatersource', 'tempmin', 'tempmax', 'salinmin', 'salinmax', 'phmin', 'phmax', 'oxygenmin', 'oxygenmax', 'hardnessmin', 'hardnessmax', 'illuminationmin', 'illuminationmax', 'eggmortalitymin', 'eggmortalitymax', 'eyeingmin', 'eyeingmax', 'hatchdegreemin', 'hatchdegreemax', 'hatchhoursmin', 'hatchhoursmax', 'productioncycle', 'productionyear', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EggnurserysystemPeer::AUTOCTR, EggnurserysystemPeer::SPECCODE, EggnurserysystemPeer::STOCKCODE, EggnurserysystemPeer::COMMONNAME, EggnurserysystemPeer::SPECIES, EggnurserysystemPeer::MAINREF, EggnurserysystemPeer::C_CODE, EggnurserysystemPeer::LOCALITY, EggnurserysystemPeer::DATAREF, EggnurserysystemPeer::NUMBEROFEGGS, EggnurserysystemPeer::UNIT, EggnurserysystemPeer::NURSERYSYSTEMI, EggnurserysystemPeer::NURSERYSYSTEMII, EggnurserysystemPeer::CULTURESYSTEM, EggnurserysystemPeer::MAINWATERSOURCE, EggnurserysystemPeer::SUPPLWATERSOURCE, EggnurserysystemPeer::TEMPMIN, EggnurserysystemPeer::TEMPMAX, EggnurserysystemPeer::SALINMIN, EggnurserysystemPeer::SALINMAX, EggnurserysystemPeer::PHMIN, EggnurserysystemPeer::PHMAX, EggnurserysystemPeer::OXYGENMIN, EggnurserysystemPeer::OXYGENMAX, EggnurserysystemPeer::HARDNESSMIN, EggnurserysystemPeer::HARDNESSMAX, EggnurserysystemPeer::ILLUMINATIONMIN, EggnurserysystemPeer::ILLUMINATIONMAX, EggnurserysystemPeer::EGGMORTALITYMIN, EggnurserysystemPeer::EGGMORTALITYMAX, EggnurserysystemPeer::EYEINGMIN, EggnurserysystemPeer::EYEINGMAX, EggnurserysystemPeer::HATCHDEGREEMIN, EggnurserysystemPeer::HATCHDEGREEMAX, EggnurserysystemPeer::HATCHHOURSMIN, EggnurserysystemPeer::HATCHHOURSMAX, EggnurserysystemPeer::PRODUCTIONCYCLE, EggnurserysystemPeer::PRODUCTIONYEAR, EggnurserysystemPeer::COMMENT, EggnurserysystemPeer::ENTERED, EggnurserysystemPeer::DATEENTERED, EggnurserysystemPeer::MODIFIED, EggnurserysystemPeer::DATEMODIFIED, EggnurserysystemPeer::EXPERT, EggnurserysystemPeer::DATECHECKED, EggnurserysystemPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'COMMONNAME', 'SPECIES', 'MAINREF', 'C_CODE', 'LOCALITY', 'DATAREF', 'NUMBEROFEGGS', 'UNIT', 'NURSERYSYSTEMI', 'NURSERYSYSTEMII', 'CULTURESYSTEM', 'MAINWATERSOURCE', 'SUPPLWATERSOURCE', 'TEMPMIN', 'TEMPMAX', 'SALINMIN', 'SALINMAX', 'PHMIN', 'PHMAX', 'OXYGENMIN', 'OXYGENMAX', 'HARDNESSMIN', 'HARDNESSMAX', 'ILLUMINATIONMIN', 'ILLUMINATIONMAX', 'EGGMORTALITYMIN', 'EGGMORTALITYMAX', 'EYEINGMIN', 'EYEINGMAX', 'HATCHDEGREEMIN', 'HATCHDEGREEMAX', 'HATCHHOURSMIN', 'HATCHHOURSMAX', 'PRODUCTIONCYCLE', 'PRODUCTIONYEAR', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'Stockcode', 'CommonName', 'Species', 'MainRef', 'C_Code', 'Locality', 'DataRef', 'NumberofEggs', 'Unit', 'NurserySystemI', 'NurserySystemII', 'CultureSystem', 'MainWaterSource', 'SupplWaterSource', 'TempMin', 'TempMax', 'SalinMin', 'SalinMax', 'pHmin', 'pHmax', 'OxygenMin', 'OxygenMax', 'HardnessMin', 'HardnessMax', 'IlluminationMin', 'IlluminationMax', 'EggMortalityMin', 'EggMortalityMax', 'EyeingMin', 'EyeingMax', 'HatchDegreeMin', 'HatchDegreeMax', 'HatchHoursMin', 'HatchHoursMax', 'ProductionCycle', 'ProductionYear', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EggnurserysystemPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Commonname' => 3, 'Species' => 4, 'Mainref' => 5, 'CCode' => 6, 'Locality' => 7, 'Dataref' => 8, 'Numberofeggs' => 9, 'Unit' => 10, 'Nurserysystemi' => 11, 'Nurserysystemii' => 12, 'Culturesystem' => 13, 'Mainwatersource' => 14, 'Supplwatersource' => 15, 'Tempmin' => 16, 'Tempmax' => 17, 'Salinmin' => 18, 'Salinmax' => 19, 'Phmin' => 20, 'Phmax' => 21, 'Oxygenmin' => 22, 'Oxygenmax' => 23, 'Hardnessmin' => 24, 'Hardnessmax' => 25, 'Illuminationmin' => 26, 'Illuminationmax' => 27, 'Eggmortalitymin' => 28, 'Eggmortalitymax' => 29, 'Eyeingmin' => 30, 'Eyeingmax' => 31, 'Hatchdegreemin' => 32, 'Hatchdegreemax' => 33, 'Hatchhoursmin' => 34, 'Hatchhoursmax' => 35, 'Productioncycle' => 36, 'Productionyear' => 37, 'Comment' => 38, 'Entered' => 39, 'Dateentered' => 40, 'Modified' => 41, 'Datemodified' => 42, 'Expert' => 43, 'Datechecked' => 44, 'Ts' => 45, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'commonname' => 3, 'species' => 4, 'mainref' => 5, 'cCode' => 6, 'locality' => 7, 'dataref' => 8, 'numberofeggs' => 9, 'unit' => 10, 'nurserysystemi' => 11, 'nurserysystemii' => 12, 'culturesystem' => 13, 'mainwatersource' => 14, 'supplwatersource' => 15, 'tempmin' => 16, 'tempmax' => 17, 'salinmin' => 18, 'salinmax' => 19, 'phmin' => 20, 'phmax' => 21, 'oxygenmin' => 22, 'oxygenmax' => 23, 'hardnessmin' => 24, 'hardnessmax' => 25, 'illuminationmin' => 26, 'illuminationmax' => 27, 'eggmortalitymin' => 28, 'eggmortalitymax' => 29, 'eyeingmin' => 30, 'eyeingmax' => 31, 'hatchdegreemin' => 32, 'hatchdegreemax' => 33, 'hatchhoursmin' => 34, 'hatchhoursmax' => 35, 'productioncycle' => 36, 'productionyear' => 37, 'comment' => 38, 'entered' => 39, 'dateentered' => 40, 'modified' => 41, 'datemodified' => 42, 'expert' => 43, 'datechecked' => 44, 'ts' => 45, ),
        BasePeer::TYPE_COLNAME => array (EggnurserysystemPeer::AUTOCTR => 0, EggnurserysystemPeer::SPECCODE => 1, EggnurserysystemPeer::STOCKCODE => 2, EggnurserysystemPeer::COMMONNAME => 3, EggnurserysystemPeer::SPECIES => 4, EggnurserysystemPeer::MAINREF => 5, EggnurserysystemPeer::C_CODE => 6, EggnurserysystemPeer::LOCALITY => 7, EggnurserysystemPeer::DATAREF => 8, EggnurserysystemPeer::NUMBEROFEGGS => 9, EggnurserysystemPeer::UNIT => 10, EggnurserysystemPeer::NURSERYSYSTEMI => 11, EggnurserysystemPeer::NURSERYSYSTEMII => 12, EggnurserysystemPeer::CULTURESYSTEM => 13, EggnurserysystemPeer::MAINWATERSOURCE => 14, EggnurserysystemPeer::SUPPLWATERSOURCE => 15, EggnurserysystemPeer::TEMPMIN => 16, EggnurserysystemPeer::TEMPMAX => 17, EggnurserysystemPeer::SALINMIN => 18, EggnurserysystemPeer::SALINMAX => 19, EggnurserysystemPeer::PHMIN => 20, EggnurserysystemPeer::PHMAX => 21, EggnurserysystemPeer::OXYGENMIN => 22, EggnurserysystemPeer::OXYGENMAX => 23, EggnurserysystemPeer::HARDNESSMIN => 24, EggnurserysystemPeer::HARDNESSMAX => 25, EggnurserysystemPeer::ILLUMINATIONMIN => 26, EggnurserysystemPeer::ILLUMINATIONMAX => 27, EggnurserysystemPeer::EGGMORTALITYMIN => 28, EggnurserysystemPeer::EGGMORTALITYMAX => 29, EggnurserysystemPeer::EYEINGMIN => 30, EggnurserysystemPeer::EYEINGMAX => 31, EggnurserysystemPeer::HATCHDEGREEMIN => 32, EggnurserysystemPeer::HATCHDEGREEMAX => 33, EggnurserysystemPeer::HATCHHOURSMIN => 34, EggnurserysystemPeer::HATCHHOURSMAX => 35, EggnurserysystemPeer::PRODUCTIONCYCLE => 36, EggnurserysystemPeer::PRODUCTIONYEAR => 37, EggnurserysystemPeer::COMMENT => 38, EggnurserysystemPeer::ENTERED => 39, EggnurserysystemPeer::DATEENTERED => 40, EggnurserysystemPeer::MODIFIED => 41, EggnurserysystemPeer::DATEMODIFIED => 42, EggnurserysystemPeer::EXPERT => 43, EggnurserysystemPeer::DATECHECKED => 44, EggnurserysystemPeer::TS => 45, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'COMMONNAME' => 3, 'SPECIES' => 4, 'MAINREF' => 5, 'C_CODE' => 6, 'LOCALITY' => 7, 'DATAREF' => 8, 'NUMBEROFEGGS' => 9, 'UNIT' => 10, 'NURSERYSYSTEMI' => 11, 'NURSERYSYSTEMII' => 12, 'CULTURESYSTEM' => 13, 'MAINWATERSOURCE' => 14, 'SUPPLWATERSOURCE' => 15, 'TEMPMIN' => 16, 'TEMPMAX' => 17, 'SALINMIN' => 18, 'SALINMAX' => 19, 'PHMIN' => 20, 'PHMAX' => 21, 'OXYGENMIN' => 22, 'OXYGENMAX' => 23, 'HARDNESSMIN' => 24, 'HARDNESSMAX' => 25, 'ILLUMINATIONMIN' => 26, 'ILLUMINATIONMAX' => 27, 'EGGMORTALITYMIN' => 28, 'EGGMORTALITYMAX' => 29, 'EYEINGMIN' => 30, 'EYEINGMAX' => 31, 'HATCHDEGREEMIN' => 32, 'HATCHDEGREEMAX' => 33, 'HATCHHOURSMIN' => 34, 'HATCHHOURSMAX' => 35, 'PRODUCTIONCYCLE' => 36, 'PRODUCTIONYEAR' => 37, 'COMMENT' => 38, 'ENTERED' => 39, 'DATEENTERED' => 40, 'MODIFIED' => 41, 'DATEMODIFIED' => 42, 'EXPERT' => 43, 'DATECHECKED' => 44, 'TS' => 45, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'CommonName' => 3, 'Species' => 4, 'MainRef' => 5, 'C_Code' => 6, 'Locality' => 7, 'DataRef' => 8, 'NumberofEggs' => 9, 'Unit' => 10, 'NurserySystemI' => 11, 'NurserySystemII' => 12, 'CultureSystem' => 13, 'MainWaterSource' => 14, 'SupplWaterSource' => 15, 'TempMin' => 16, 'TempMax' => 17, 'SalinMin' => 18, 'SalinMax' => 19, 'pHmin' => 20, 'pHmax' => 21, 'OxygenMin' => 22, 'OxygenMax' => 23, 'HardnessMin' => 24, 'HardnessMax' => 25, 'IlluminationMin' => 26, 'IlluminationMax' => 27, 'EggMortalityMin' => 28, 'EggMortalityMax' => 29, 'EyeingMin' => 30, 'EyeingMax' => 31, 'HatchDegreeMin' => 32, 'HatchDegreeMax' => 33, 'HatchHoursMin' => 34, 'HatchHoursMax' => 35, 'ProductionCycle' => 36, 'ProductionYear' => 37, 'Comment' => 38, 'Entered' => 39, 'DateEntered' => 40, 'Modified' => 41, 'DateModified' => 42, 'Expert' => 43, 'DateChecked' => 44, 'TS' => 45, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
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
        $toNames = EggnurserysystemPeer::getFieldNames($toType);
        $key = isset(EggnurserysystemPeer::$fieldKeys[$fromType][$name]) ? EggnurserysystemPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EggnurserysystemPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EggnurserysystemPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EggnurserysystemPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EggnurserysystemPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EggnurserysystemPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EggnurserysystemPeer::AUTOCTR);
            $criteria->addSelectColumn(EggnurserysystemPeer::SPECCODE);
            $criteria->addSelectColumn(EggnurserysystemPeer::STOCKCODE);
            $criteria->addSelectColumn(EggnurserysystemPeer::COMMONNAME);
            $criteria->addSelectColumn(EggnurserysystemPeer::SPECIES);
            $criteria->addSelectColumn(EggnurserysystemPeer::MAINREF);
            $criteria->addSelectColumn(EggnurserysystemPeer::C_CODE);
            $criteria->addSelectColumn(EggnurserysystemPeer::LOCALITY);
            $criteria->addSelectColumn(EggnurserysystemPeer::DATAREF);
            $criteria->addSelectColumn(EggnurserysystemPeer::NUMBEROFEGGS);
            $criteria->addSelectColumn(EggnurserysystemPeer::UNIT);
            $criteria->addSelectColumn(EggnurserysystemPeer::NURSERYSYSTEMI);
            $criteria->addSelectColumn(EggnurserysystemPeer::NURSERYSYSTEMII);
            $criteria->addSelectColumn(EggnurserysystemPeer::CULTURESYSTEM);
            $criteria->addSelectColumn(EggnurserysystemPeer::MAINWATERSOURCE);
            $criteria->addSelectColumn(EggnurserysystemPeer::SUPPLWATERSOURCE);
            $criteria->addSelectColumn(EggnurserysystemPeer::TEMPMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::TEMPMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::SALINMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::SALINMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::PHMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::PHMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::OXYGENMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::OXYGENMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::HARDNESSMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::HARDNESSMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::ILLUMINATIONMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::ILLUMINATIONMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::EGGMORTALITYMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::EGGMORTALITYMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::EYEINGMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::EYEINGMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::HATCHDEGREEMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::HATCHDEGREEMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::HATCHHOURSMIN);
            $criteria->addSelectColumn(EggnurserysystemPeer::HATCHHOURSMAX);
            $criteria->addSelectColumn(EggnurserysystemPeer::PRODUCTIONCYCLE);
            $criteria->addSelectColumn(EggnurserysystemPeer::PRODUCTIONYEAR);
            $criteria->addSelectColumn(EggnurserysystemPeer::COMMENT);
            $criteria->addSelectColumn(EggnurserysystemPeer::ENTERED);
            $criteria->addSelectColumn(EggnurserysystemPeer::DATEENTERED);
            $criteria->addSelectColumn(EggnurserysystemPeer::MODIFIED);
            $criteria->addSelectColumn(EggnurserysystemPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EggnurserysystemPeer::EXPERT);
            $criteria->addSelectColumn(EggnurserysystemPeer::DATECHECKED);
            $criteria->addSelectColumn(EggnurserysystemPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.NumberofEggs');
            $criteria->addSelectColumn($alias . '.Unit');
            $criteria->addSelectColumn($alias . '.NurserySystemI');
            $criteria->addSelectColumn($alias . '.NurserySystemII');
            $criteria->addSelectColumn($alias . '.CultureSystem');
            $criteria->addSelectColumn($alias . '.MainWaterSource');
            $criteria->addSelectColumn($alias . '.SupplWaterSource');
            $criteria->addSelectColumn($alias . '.TempMin');
            $criteria->addSelectColumn($alias . '.TempMax');
            $criteria->addSelectColumn($alias . '.SalinMin');
            $criteria->addSelectColumn($alias . '.SalinMax');
            $criteria->addSelectColumn($alias . '.pHmin');
            $criteria->addSelectColumn($alias . '.pHmax');
            $criteria->addSelectColumn($alias . '.OxygenMin');
            $criteria->addSelectColumn($alias . '.OxygenMax');
            $criteria->addSelectColumn($alias . '.HardnessMin');
            $criteria->addSelectColumn($alias . '.HardnessMax');
            $criteria->addSelectColumn($alias . '.IlluminationMin');
            $criteria->addSelectColumn($alias . '.IlluminationMax');
            $criteria->addSelectColumn($alias . '.EggMortalityMin');
            $criteria->addSelectColumn($alias . '.EggMortalityMax');
            $criteria->addSelectColumn($alias . '.EyeingMin');
            $criteria->addSelectColumn($alias . '.EyeingMax');
            $criteria->addSelectColumn($alias . '.HatchDegreeMin');
            $criteria->addSelectColumn($alias . '.HatchDegreeMax');
            $criteria->addSelectColumn($alias . '.HatchHoursMin');
            $criteria->addSelectColumn($alias . '.HatchHoursMax');
            $criteria->addSelectColumn($alias . '.ProductionCycle');
            $criteria->addSelectColumn($alias . '.ProductionYear');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
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
        $criteria->setPrimaryTableName(EggnurserysystemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EggnurserysystemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EggnurserysystemPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Eggnurserysystem
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EggnurserysystemPeer::doSelect($critcopy, $con);
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
        return EggnurserysystemPeer::populateObjects(EggnurserysystemPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EggnurserysystemPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EggnurserysystemPeer::DATABASE_NAME);

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
     * @param Eggnurserysystem $obj A Eggnurserysystem object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAutoctr(), (string) $obj->getStockcode(), (string) $obj->getMainref()));
            } // if key === null
            EggnurserysystemPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Eggnurserysystem object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Eggnurserysystem) {
                $key = serialize(array((string) $value->getAutoctr(), (string) $value->getStockcode(), (string) $value->getMainref()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Eggnurserysystem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EggnurserysystemPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Eggnurserysystem Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EggnurserysystemPeer::$instances[$key])) {
                return EggnurserysystemPeer::$instances[$key];
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
        foreach (EggnurserysystemPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EggnurserysystemPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to eggnurserysystem
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
        if ($row[$startcol] === null && $row[$startcol + 2] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 2], (int) $row[$startcol + 5]);
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
        $cls = EggnurserysystemPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EggnurserysystemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EggnurserysystemPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EggnurserysystemPeer::addInstanceToPool($obj, $key);
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
     * @return array (Eggnurserysystem object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EggnurserysystemPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EggnurserysystemPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EggnurserysystemPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EggnurserysystemPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EggnurserysystemPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EggnurserysystemPeer::DATABASE_NAME)->getTable(EggnurserysystemPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEggnurserysystemPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEggnurserysystemPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EggnurserysystemTableMap());
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
        return EggnurserysystemPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Eggnurserysystem or Criteria object.
     *
     * @param      mixed $values Criteria or Eggnurserysystem object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Eggnurserysystem object
        }

        if ($criteria->containsKey(EggnurserysystemPeer::AUTOCTR) && $criteria->keyContainsValue(EggnurserysystemPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EggnurserysystemPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EggnurserysystemPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Eggnurserysystem or Criteria object.
     *
     * @param      mixed $values Criteria or Eggnurserysystem object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EggnurserysystemPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EggnurserysystemPeer::AUTOCTR);
            $value = $criteria->remove(EggnurserysystemPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(EggnurserysystemPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EggnurserysystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(EggnurserysystemPeer::STOCKCODE);
            $value = $criteria->remove(EggnurserysystemPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(EggnurserysystemPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EggnurserysystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(EggnurserysystemPeer::MAINREF);
            $value = $criteria->remove(EggnurserysystemPeer::MAINREF);
            if ($value) {
                $selectCriteria->add(EggnurserysystemPeer::MAINREF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EggnurserysystemPeer::TABLE_NAME);
            }

        } else { // $values is Eggnurserysystem object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EggnurserysystemPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the eggnurserysystem table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EggnurserysystemPeer::TABLE_NAME, $con, EggnurserysystemPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EggnurserysystemPeer::clearInstancePool();
            EggnurserysystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Eggnurserysystem or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Eggnurserysystem object or primary key or array of primary keys
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
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EggnurserysystemPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Eggnurserysystem) { // it's a model object
            // invalidate the cache for this single object
            EggnurserysystemPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EggnurserysystemPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(EggnurserysystemPeer::AUTOCTR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(EggnurserysystemPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(EggnurserysystemPeer::MAINREF, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                EggnurserysystemPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EggnurserysystemPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EggnurserysystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Eggnurserysystem object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Eggnurserysystem $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EggnurserysystemPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EggnurserysystemPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EggnurserysystemPeer::DATABASE_NAME, EggnurserysystemPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $autoctr
     * @param   int $stockcode
     * @param   int $mainref
     * @param      PropelPDO $con
     * @return Eggnurserysystem
     */
    public static function retrieveByPK($autoctr, $stockcode, $mainref, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $autoctr, (string) $stockcode, (string) $mainref));
         if (null !== ($obj = EggnurserysystemPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(EggnurserysystemPeer::DATABASE_NAME);
        $criteria->add(EggnurserysystemPeer::AUTOCTR, $autoctr);
        $criteria->add(EggnurserysystemPeer::STOCKCODE, $stockcode);
        $criteria->add(EggnurserysystemPeer::MAINREF, $mainref);
        $v = EggnurserysystemPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseEggnurserysystemPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEggnurserysystemPeer::buildTableMap();

