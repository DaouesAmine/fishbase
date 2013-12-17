<?php


/**
 * Base static class for performing query and update operations on the 'broodstock' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseBroodstockPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'broodstock';

    /** the related Propel class for this table */
    const OM_CLASS = 'Broodstock';

    /** the related TableMap class for this table */
    const TM_CLASS = 'BroodstockTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 44;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 44;

    /** the column name for the autoctr field */
    const AUTOCTR = 'broodstock.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'broodstock.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'broodstock.Stockcode';

    /** the column name for the Species field */
    const SPECIES = 'broodstock.Species';

    /** the column name for the CommonName field */
    const COMMONNAME = 'broodstock.CommonName';

    /** the column name for the MainRef field */
    const MAINREF = 'broodstock.MainRef';

    /** the column name for the C_Code field */
    const C_CODE = 'broodstock.C_Code';

    /** the column name for the Locality field */
    const LOCALITY = 'broodstock.Locality';

    /** the column name for the DataRef field */
    const DATAREF = 'broodstock.DataRef';

    /** the column name for the BreedingI field */
    const BREEDINGI = 'broodstock.BreedingI';

    /** the column name for the Fecundity field */
    const FECUNDITY = 'broodstock.Fecundity';

    /** the column name for the CountriesandRegions field */
    const COUNTRIESANDREGIONS = 'broodstock.CountriesandRegions';

    /** the column name for the BreedingII field */
    const BREEDINGII = 'broodstock.BreedingII';

    /** the column name for the BreedingIII field */
    const BREEDINGIII = 'broodstock.BreedingIII';

    /** the column name for the CultureSystem field */
    const CULTURESYSTEM = 'broodstock.CultureSystem';

    /** the column name for the MainwaterSource field */
    const MAINWATERSOURCE = 'broodstock.MainwaterSource';

    /** the column name for the SupplWaterSource field */
    const SUPPLWATERSOURCE = 'broodstock.SupplWaterSource';

    /** the column name for the TempMin field */
    const TEMPMIN = 'broodstock.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'broodstock.TempMax';

    /** the column name for the SpawningTempMin field */
    const SPAWNINGTEMPMIN = 'broodstock.SpawningTempMin';

    /** the column name for the SpawningTempMax field */
    const SPAWNINGTEMPMAX = 'broodstock.SpawningTempMax';

    /** the column name for the SalinMin field */
    const SALINMIN = 'broodstock.SalinMin';

    /** the column name for the SalinMax field */
    const SALINMAX = 'broodstock.SalinMax';

    /** the column name for the pHMin field */
    const PHMIN = 'broodstock.pHMin';

    /** the column name for the pHMax field */
    const PHMAX = 'broodstock.pHMax';

    /** the column name for the OxygenMin field */
    const OXYGENMIN = 'broodstock.OxygenMin';

    /** the column name for the OxygenMax field */
    const OXYGENMAX = 'broodstock.OxygenMax';

    /** the column name for the HardnessMin field */
    const HARDNESSMIN = 'broodstock.HardnessMin';

    /** the column name for the HardnessMax field */
    const HARDNESSMAX = 'broodstock.HardnessMax';

    /** the column name for the BroodstockStockingRate field */
    const BROODSTOCKSTOCKINGRATE = 'broodstock.BroodstockStockingRate';

    /** the column name for the Broodstockfemale field */
    const BROODSTOCKFEMALE = 'broodstock.Broodstockfemale';

    /** the column name for the Broodstockmale field */
    const BROODSTOCKMALE = 'broodstock.Broodstockmale';

    /** the column name for the SexRatio field */
    const SEXRATIO = 'broodstock.SexRatio';

    /** the column name for the EggProduction field */
    const EGGPRODUCTION = 'broodstock.EggProduction';

    /** the column name for the PostMortality field */
    const POSTMORTALITY = 'broodstock.PostMortality';

    /** the column name for the FCR field */
    const FCR = 'broodstock.FCR';

    /** the column name for the Comments field */
    const COMMENTS = 'broodstock.Comments';

    /** the column name for the Entered field */
    const ENTERED = 'broodstock.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'broodstock.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'broodstock.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'broodstock.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'broodstock.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'broodstock.DateChecked';

    /** the column name for the TS field */
    const TS = 'broodstock.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Broodstock objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Broodstock[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. BroodstockPeer::$fieldNames[BroodstockPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Species', 'Commonname', 'Mainref', 'CCode', 'Locality', 'Dataref', 'Breedingi', 'Fecundity', 'Countriesandregions', 'Breedingii', 'Breedingiii', 'Culturesystem', 'Mainwatersource', 'Supplwatersource', 'Tempmin', 'Tempmax', 'Spawningtempmin', 'Spawningtempmax', 'Salinmin', 'Salinmax', 'Phmin', 'Phmax', 'Oxygenmin', 'Oxygenmax', 'Hardnessmin', 'Hardnessmax', 'Broodstockstockingrate', 'Broodstockfemale', 'Broodstockmale', 'Sexratio', 'Eggproduction', 'Postmortality', 'Fcr', 'Comments', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'species', 'commonname', 'mainref', 'cCode', 'locality', 'dataref', 'breedingi', 'fecundity', 'countriesandregions', 'breedingii', 'breedingiii', 'culturesystem', 'mainwatersource', 'supplwatersource', 'tempmin', 'tempmax', 'spawningtempmin', 'spawningtempmax', 'salinmin', 'salinmax', 'phmin', 'phmax', 'oxygenmin', 'oxygenmax', 'hardnessmin', 'hardnessmax', 'broodstockstockingrate', 'broodstockfemale', 'broodstockmale', 'sexratio', 'eggproduction', 'postmortality', 'fcr', 'comments', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (BroodstockPeer::AUTOCTR, BroodstockPeer::SPECCODE, BroodstockPeer::STOCKCODE, BroodstockPeer::SPECIES, BroodstockPeer::COMMONNAME, BroodstockPeer::MAINREF, BroodstockPeer::C_CODE, BroodstockPeer::LOCALITY, BroodstockPeer::DATAREF, BroodstockPeer::BREEDINGI, BroodstockPeer::FECUNDITY, BroodstockPeer::COUNTRIESANDREGIONS, BroodstockPeer::BREEDINGII, BroodstockPeer::BREEDINGIII, BroodstockPeer::CULTURESYSTEM, BroodstockPeer::MAINWATERSOURCE, BroodstockPeer::SUPPLWATERSOURCE, BroodstockPeer::TEMPMIN, BroodstockPeer::TEMPMAX, BroodstockPeer::SPAWNINGTEMPMIN, BroodstockPeer::SPAWNINGTEMPMAX, BroodstockPeer::SALINMIN, BroodstockPeer::SALINMAX, BroodstockPeer::PHMIN, BroodstockPeer::PHMAX, BroodstockPeer::OXYGENMIN, BroodstockPeer::OXYGENMAX, BroodstockPeer::HARDNESSMIN, BroodstockPeer::HARDNESSMAX, BroodstockPeer::BROODSTOCKSTOCKINGRATE, BroodstockPeer::BROODSTOCKFEMALE, BroodstockPeer::BROODSTOCKMALE, BroodstockPeer::SEXRATIO, BroodstockPeer::EGGPRODUCTION, BroodstockPeer::POSTMORTALITY, BroodstockPeer::FCR, BroodstockPeer::COMMENTS, BroodstockPeer::ENTERED, BroodstockPeer::DATEENTERED, BroodstockPeer::MODIFIED, BroodstockPeer::DATEMODIFIED, BroodstockPeer::EXPERT, BroodstockPeer::DATECHECKED, BroodstockPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'SPECIES', 'COMMONNAME', 'MAINREF', 'C_CODE', 'LOCALITY', 'DATAREF', 'BREEDINGI', 'FECUNDITY', 'COUNTRIESANDREGIONS', 'BREEDINGII', 'BREEDINGIII', 'CULTURESYSTEM', 'MAINWATERSOURCE', 'SUPPLWATERSOURCE', 'TEMPMIN', 'TEMPMAX', 'SPAWNINGTEMPMIN', 'SPAWNINGTEMPMAX', 'SALINMIN', 'SALINMAX', 'PHMIN', 'PHMAX', 'OXYGENMIN', 'OXYGENMAX', 'HARDNESSMIN', 'HARDNESSMAX', 'BROODSTOCKSTOCKINGRATE', 'BROODSTOCKFEMALE', 'BROODSTOCKMALE', 'SEXRATIO', 'EGGPRODUCTION', 'POSTMORTALITY', 'FCR', 'COMMENTS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'Stockcode', 'Species', 'CommonName', 'MainRef', 'C_Code', 'Locality', 'DataRef', 'BreedingI', 'Fecundity', 'CountriesandRegions', 'BreedingII', 'BreedingIII', 'CultureSystem', 'MainwaterSource', 'SupplWaterSource', 'TempMin', 'TempMax', 'SpawningTempMin', 'SpawningTempMax', 'SalinMin', 'SalinMax', 'pHMin', 'pHMax', 'OxygenMin', 'OxygenMax', 'HardnessMin', 'HardnessMax', 'BroodstockStockingRate', 'Broodstockfemale', 'Broodstockmale', 'SexRatio', 'EggProduction', 'PostMortality', 'FCR', 'Comments', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. BroodstockPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Species' => 3, 'Commonname' => 4, 'Mainref' => 5, 'CCode' => 6, 'Locality' => 7, 'Dataref' => 8, 'Breedingi' => 9, 'Fecundity' => 10, 'Countriesandregions' => 11, 'Breedingii' => 12, 'Breedingiii' => 13, 'Culturesystem' => 14, 'Mainwatersource' => 15, 'Supplwatersource' => 16, 'Tempmin' => 17, 'Tempmax' => 18, 'Spawningtempmin' => 19, 'Spawningtempmax' => 20, 'Salinmin' => 21, 'Salinmax' => 22, 'Phmin' => 23, 'Phmax' => 24, 'Oxygenmin' => 25, 'Oxygenmax' => 26, 'Hardnessmin' => 27, 'Hardnessmax' => 28, 'Broodstockstockingrate' => 29, 'Broodstockfemale' => 30, 'Broodstockmale' => 31, 'Sexratio' => 32, 'Eggproduction' => 33, 'Postmortality' => 34, 'Fcr' => 35, 'Comments' => 36, 'Entered' => 37, 'Dateentered' => 38, 'Modified' => 39, 'Datemodified' => 40, 'Expert' => 41, 'Datechecked' => 42, 'Ts' => 43, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'species' => 3, 'commonname' => 4, 'mainref' => 5, 'cCode' => 6, 'locality' => 7, 'dataref' => 8, 'breedingi' => 9, 'fecundity' => 10, 'countriesandregions' => 11, 'breedingii' => 12, 'breedingiii' => 13, 'culturesystem' => 14, 'mainwatersource' => 15, 'supplwatersource' => 16, 'tempmin' => 17, 'tempmax' => 18, 'spawningtempmin' => 19, 'spawningtempmax' => 20, 'salinmin' => 21, 'salinmax' => 22, 'phmin' => 23, 'phmax' => 24, 'oxygenmin' => 25, 'oxygenmax' => 26, 'hardnessmin' => 27, 'hardnessmax' => 28, 'broodstockstockingrate' => 29, 'broodstockfemale' => 30, 'broodstockmale' => 31, 'sexratio' => 32, 'eggproduction' => 33, 'postmortality' => 34, 'fcr' => 35, 'comments' => 36, 'entered' => 37, 'dateentered' => 38, 'modified' => 39, 'datemodified' => 40, 'expert' => 41, 'datechecked' => 42, 'ts' => 43, ),
        BasePeer::TYPE_COLNAME => array (BroodstockPeer::AUTOCTR => 0, BroodstockPeer::SPECCODE => 1, BroodstockPeer::STOCKCODE => 2, BroodstockPeer::SPECIES => 3, BroodstockPeer::COMMONNAME => 4, BroodstockPeer::MAINREF => 5, BroodstockPeer::C_CODE => 6, BroodstockPeer::LOCALITY => 7, BroodstockPeer::DATAREF => 8, BroodstockPeer::BREEDINGI => 9, BroodstockPeer::FECUNDITY => 10, BroodstockPeer::COUNTRIESANDREGIONS => 11, BroodstockPeer::BREEDINGII => 12, BroodstockPeer::BREEDINGIII => 13, BroodstockPeer::CULTURESYSTEM => 14, BroodstockPeer::MAINWATERSOURCE => 15, BroodstockPeer::SUPPLWATERSOURCE => 16, BroodstockPeer::TEMPMIN => 17, BroodstockPeer::TEMPMAX => 18, BroodstockPeer::SPAWNINGTEMPMIN => 19, BroodstockPeer::SPAWNINGTEMPMAX => 20, BroodstockPeer::SALINMIN => 21, BroodstockPeer::SALINMAX => 22, BroodstockPeer::PHMIN => 23, BroodstockPeer::PHMAX => 24, BroodstockPeer::OXYGENMIN => 25, BroodstockPeer::OXYGENMAX => 26, BroodstockPeer::HARDNESSMIN => 27, BroodstockPeer::HARDNESSMAX => 28, BroodstockPeer::BROODSTOCKSTOCKINGRATE => 29, BroodstockPeer::BROODSTOCKFEMALE => 30, BroodstockPeer::BROODSTOCKMALE => 31, BroodstockPeer::SEXRATIO => 32, BroodstockPeer::EGGPRODUCTION => 33, BroodstockPeer::POSTMORTALITY => 34, BroodstockPeer::FCR => 35, BroodstockPeer::COMMENTS => 36, BroodstockPeer::ENTERED => 37, BroodstockPeer::DATEENTERED => 38, BroodstockPeer::MODIFIED => 39, BroodstockPeer::DATEMODIFIED => 40, BroodstockPeer::EXPERT => 41, BroodstockPeer::DATECHECKED => 42, BroodstockPeer::TS => 43, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'SPECIES' => 3, 'COMMONNAME' => 4, 'MAINREF' => 5, 'C_CODE' => 6, 'LOCALITY' => 7, 'DATAREF' => 8, 'BREEDINGI' => 9, 'FECUNDITY' => 10, 'COUNTRIESANDREGIONS' => 11, 'BREEDINGII' => 12, 'BREEDINGIII' => 13, 'CULTURESYSTEM' => 14, 'MAINWATERSOURCE' => 15, 'SUPPLWATERSOURCE' => 16, 'TEMPMIN' => 17, 'TEMPMAX' => 18, 'SPAWNINGTEMPMIN' => 19, 'SPAWNINGTEMPMAX' => 20, 'SALINMIN' => 21, 'SALINMAX' => 22, 'PHMIN' => 23, 'PHMAX' => 24, 'OXYGENMIN' => 25, 'OXYGENMAX' => 26, 'HARDNESSMIN' => 27, 'HARDNESSMAX' => 28, 'BROODSTOCKSTOCKINGRATE' => 29, 'BROODSTOCKFEMALE' => 30, 'BROODSTOCKMALE' => 31, 'SEXRATIO' => 32, 'EGGPRODUCTION' => 33, 'POSTMORTALITY' => 34, 'FCR' => 35, 'COMMENTS' => 36, 'ENTERED' => 37, 'DATEENTERED' => 38, 'MODIFIED' => 39, 'DATEMODIFIED' => 40, 'EXPERT' => 41, 'DATECHECKED' => 42, 'TS' => 43, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Species' => 3, 'CommonName' => 4, 'MainRef' => 5, 'C_Code' => 6, 'Locality' => 7, 'DataRef' => 8, 'BreedingI' => 9, 'Fecundity' => 10, 'CountriesandRegions' => 11, 'BreedingII' => 12, 'BreedingIII' => 13, 'CultureSystem' => 14, 'MainwaterSource' => 15, 'SupplWaterSource' => 16, 'TempMin' => 17, 'TempMax' => 18, 'SpawningTempMin' => 19, 'SpawningTempMax' => 20, 'SalinMin' => 21, 'SalinMax' => 22, 'pHMin' => 23, 'pHMax' => 24, 'OxygenMin' => 25, 'OxygenMax' => 26, 'HardnessMin' => 27, 'HardnessMax' => 28, 'BroodstockStockingRate' => 29, 'Broodstockfemale' => 30, 'Broodstockmale' => 31, 'SexRatio' => 32, 'EggProduction' => 33, 'PostMortality' => 34, 'FCR' => 35, 'Comments' => 36, 'Entered' => 37, 'DateEntered' => 38, 'Modified' => 39, 'DateModified' => 40, 'Expert' => 41, 'DateChecked' => 42, 'TS' => 43, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
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
        $toNames = BroodstockPeer::getFieldNames($toType);
        $key = isset(BroodstockPeer::$fieldKeys[$fromType][$name]) ? BroodstockPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(BroodstockPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, BroodstockPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return BroodstockPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. BroodstockPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(BroodstockPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(BroodstockPeer::AUTOCTR);
            $criteria->addSelectColumn(BroodstockPeer::SPECCODE);
            $criteria->addSelectColumn(BroodstockPeer::STOCKCODE);
            $criteria->addSelectColumn(BroodstockPeer::SPECIES);
            $criteria->addSelectColumn(BroodstockPeer::COMMONNAME);
            $criteria->addSelectColumn(BroodstockPeer::MAINREF);
            $criteria->addSelectColumn(BroodstockPeer::C_CODE);
            $criteria->addSelectColumn(BroodstockPeer::LOCALITY);
            $criteria->addSelectColumn(BroodstockPeer::DATAREF);
            $criteria->addSelectColumn(BroodstockPeer::BREEDINGI);
            $criteria->addSelectColumn(BroodstockPeer::FECUNDITY);
            $criteria->addSelectColumn(BroodstockPeer::COUNTRIESANDREGIONS);
            $criteria->addSelectColumn(BroodstockPeer::BREEDINGII);
            $criteria->addSelectColumn(BroodstockPeer::BREEDINGIII);
            $criteria->addSelectColumn(BroodstockPeer::CULTURESYSTEM);
            $criteria->addSelectColumn(BroodstockPeer::MAINWATERSOURCE);
            $criteria->addSelectColumn(BroodstockPeer::SUPPLWATERSOURCE);
            $criteria->addSelectColumn(BroodstockPeer::TEMPMIN);
            $criteria->addSelectColumn(BroodstockPeer::TEMPMAX);
            $criteria->addSelectColumn(BroodstockPeer::SPAWNINGTEMPMIN);
            $criteria->addSelectColumn(BroodstockPeer::SPAWNINGTEMPMAX);
            $criteria->addSelectColumn(BroodstockPeer::SALINMIN);
            $criteria->addSelectColumn(BroodstockPeer::SALINMAX);
            $criteria->addSelectColumn(BroodstockPeer::PHMIN);
            $criteria->addSelectColumn(BroodstockPeer::PHMAX);
            $criteria->addSelectColumn(BroodstockPeer::OXYGENMIN);
            $criteria->addSelectColumn(BroodstockPeer::OXYGENMAX);
            $criteria->addSelectColumn(BroodstockPeer::HARDNESSMIN);
            $criteria->addSelectColumn(BroodstockPeer::HARDNESSMAX);
            $criteria->addSelectColumn(BroodstockPeer::BROODSTOCKSTOCKINGRATE);
            $criteria->addSelectColumn(BroodstockPeer::BROODSTOCKFEMALE);
            $criteria->addSelectColumn(BroodstockPeer::BROODSTOCKMALE);
            $criteria->addSelectColumn(BroodstockPeer::SEXRATIO);
            $criteria->addSelectColumn(BroodstockPeer::EGGPRODUCTION);
            $criteria->addSelectColumn(BroodstockPeer::POSTMORTALITY);
            $criteria->addSelectColumn(BroodstockPeer::FCR);
            $criteria->addSelectColumn(BroodstockPeer::COMMENTS);
            $criteria->addSelectColumn(BroodstockPeer::ENTERED);
            $criteria->addSelectColumn(BroodstockPeer::DATEENTERED);
            $criteria->addSelectColumn(BroodstockPeer::MODIFIED);
            $criteria->addSelectColumn(BroodstockPeer::DATEMODIFIED);
            $criteria->addSelectColumn(BroodstockPeer::EXPERT);
            $criteria->addSelectColumn(BroodstockPeer::DATECHECKED);
            $criteria->addSelectColumn(BroodstockPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.BreedingI');
            $criteria->addSelectColumn($alias . '.Fecundity');
            $criteria->addSelectColumn($alias . '.CountriesandRegions');
            $criteria->addSelectColumn($alias . '.BreedingII');
            $criteria->addSelectColumn($alias . '.BreedingIII');
            $criteria->addSelectColumn($alias . '.CultureSystem');
            $criteria->addSelectColumn($alias . '.MainwaterSource');
            $criteria->addSelectColumn($alias . '.SupplWaterSource');
            $criteria->addSelectColumn($alias . '.TempMin');
            $criteria->addSelectColumn($alias . '.TempMax');
            $criteria->addSelectColumn($alias . '.SpawningTempMin');
            $criteria->addSelectColumn($alias . '.SpawningTempMax');
            $criteria->addSelectColumn($alias . '.SalinMin');
            $criteria->addSelectColumn($alias . '.SalinMax');
            $criteria->addSelectColumn($alias . '.pHMin');
            $criteria->addSelectColumn($alias . '.pHMax');
            $criteria->addSelectColumn($alias . '.OxygenMin');
            $criteria->addSelectColumn($alias . '.OxygenMax');
            $criteria->addSelectColumn($alias . '.HardnessMin');
            $criteria->addSelectColumn($alias . '.HardnessMax');
            $criteria->addSelectColumn($alias . '.BroodstockStockingRate');
            $criteria->addSelectColumn($alias . '.Broodstockfemale');
            $criteria->addSelectColumn($alias . '.Broodstockmale');
            $criteria->addSelectColumn($alias . '.SexRatio');
            $criteria->addSelectColumn($alias . '.EggProduction');
            $criteria->addSelectColumn($alias . '.PostMortality');
            $criteria->addSelectColumn($alias . '.FCR');
            $criteria->addSelectColumn($alias . '.Comments');
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
        $criteria->setPrimaryTableName(BroodstockPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            BroodstockPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(BroodstockPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Broodstock
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = BroodstockPeer::doSelect($critcopy, $con);
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
        return BroodstockPeer::populateObjects(BroodstockPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            BroodstockPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(BroodstockPeer::DATABASE_NAME);

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
     * @param Broodstock $obj A Broodstock object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAutoctr(), (string) $obj->getStockcode(), (string) $obj->getMainref()));
            } // if key === null
            BroodstockPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Broodstock object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Broodstock) {
                $key = serialize(array((string) $value->getAutoctr(), (string) $value->getStockcode(), (string) $value->getMainref()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Broodstock object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(BroodstockPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Broodstock Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(BroodstockPeer::$instances[$key])) {
                return BroodstockPeer::$instances[$key];
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
        foreach (BroodstockPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        BroodstockPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to broodstock
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
        $cls = BroodstockPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = BroodstockPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = BroodstockPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BroodstockPeer::addInstanceToPool($obj, $key);
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
     * @return array (Broodstock object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = BroodstockPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = BroodstockPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + BroodstockPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BroodstockPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            BroodstockPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(BroodstockPeer::DATABASE_NAME)->getTable(BroodstockPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseBroodstockPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseBroodstockPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \BroodstockTableMap());
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
        return BroodstockPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Broodstock or Criteria object.
     *
     * @param      mixed $values Criteria or Broodstock object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Broodstock object
        }

        if ($criteria->containsKey(BroodstockPeer::AUTOCTR) && $criteria->keyContainsValue(BroodstockPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BroodstockPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(BroodstockPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Broodstock or Criteria object.
     *
     * @param      mixed $values Criteria or Broodstock object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(BroodstockPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(BroodstockPeer::AUTOCTR);
            $value = $criteria->remove(BroodstockPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(BroodstockPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BroodstockPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(BroodstockPeer::STOCKCODE);
            $value = $criteria->remove(BroodstockPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(BroodstockPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BroodstockPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(BroodstockPeer::MAINREF);
            $value = $criteria->remove(BroodstockPeer::MAINREF);
            if ($value) {
                $selectCriteria->add(BroodstockPeer::MAINREF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BroodstockPeer::TABLE_NAME);
            }

        } else { // $values is Broodstock object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(BroodstockPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the broodstock table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(BroodstockPeer::TABLE_NAME, $con, BroodstockPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BroodstockPeer::clearInstancePool();
            BroodstockPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Broodstock or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Broodstock object or primary key or array of primary keys
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
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            BroodstockPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Broodstock) { // it's a model object
            // invalidate the cache for this single object
            BroodstockPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BroodstockPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(BroodstockPeer::AUTOCTR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(BroodstockPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(BroodstockPeer::MAINREF, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                BroodstockPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(BroodstockPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            BroodstockPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Broodstock object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Broodstock $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(BroodstockPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(BroodstockPeer::TABLE_NAME);

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

        return BasePeer::doValidate(BroodstockPeer::DATABASE_NAME, BroodstockPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $autoctr
     * @param   int $stockcode
     * @param   int $mainref
     * @param      PropelPDO $con
     * @return Broodstock
     */
    public static function retrieveByPK($autoctr, $stockcode, $mainref, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $autoctr, (string) $stockcode, (string) $mainref));
         if (null !== ($obj = BroodstockPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(BroodstockPeer::DATABASE_NAME);
        $criteria->add(BroodstockPeer::AUTOCTR, $autoctr);
        $criteria->add(BroodstockPeer::STOCKCODE, $stockcode);
        $criteria->add(BroodstockPeer::MAINREF, $mainref);
        $v = BroodstockPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseBroodstockPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBroodstockPeer::buildTableMap();

