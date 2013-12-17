<?php


/**
 * Base static class for performing query and update operations on the 'isscaap' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseIsscaapPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'isscaap';

    /** the related Propel class for this table */
    const OM_CLASS = 'Isscaap';

    /** the related TableMap class for this table */
    const TM_CLASS = 'IsscaapTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 50;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 50;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'isscaap.AutoCtr';

    /** the column name for the OrdNum field */
    const ORDNUM = 'isscaap.OrdNum';

    /** the column name for the FamCode field */
    const FAMCODE = 'isscaap.FamCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'isscaap.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'isscaap.StockCode';

    /** the column name for the Syncode field */
    const SYNCODE = 'isscaap.Syncode';

    /** the column name for the Valid field */
    const VALID = 'isscaap.Valid';

    /** the column name for the Genus field */
    const GENUS = 'isscaap.Genus';

    /** the column name for the Species field */
    const SPECIES = 'isscaap.Species';

    /** the column name for the AggLevel field */
    const AGGLEVEL = 'isscaap.AggLevel';

    /** the column name for the ISSCAAP field */
    const ISSCAAP = 'isscaap.ISSCAAP';

    /** the column name for the TaxCode field */
    const TAXCODE = 'isscaap.TaxCode';

    /** the column name for the AlphaCode field */
    const ALPHACODE = 'isscaap.AlphaCode';

    /** the column name for the Scientific field */
    const SCIENTIFIC = 'isscaap.Scientific';

    /** the column name for the English field */
    const ENGLISH = 'isscaap.English';

    /** the column name for the French field */
    const FRENCH = 'isscaap.French';

    /** the column name for the Spanish field */
    const SPANISH = 'isscaap.Spanish';

    /** the column name for the Arabic field */
    const ARABIC = 'isscaap.Arabic';

    /** the column name for the Chinese field */
    const CHINESE = 'isscaap.Chinese';

    /** the column name for the Russian field */
    const RUSSIAN = 'isscaap.Russian';

    /** the column name for the Author field */
    const AUTHOR = 'isscaap.Author';

    /** the column name for the Family field */
    const FAMILY = 'isscaap.Family';

    /** the column name for the Order field */
    const ORDER = 'isscaap.Order';

    /** the column name for the Troph field */
    const TROPH = 'isscaap.Troph';

    /** the column name for the seTroph field */
    const SETROPH = 'isscaap.seTroph';

    /** the column name for the RefNo field */
    const REFNO = 'isscaap.RefNo';

    /** the column name for the RemarkTroph field */
    const REMARKTROPH = 'isscaap.RemarkTroph';

    /** the column name for the SLmax field */
    const SLMAX = 'isscaap.SLmax';

    /** the column name for the RefNoSL field */
    const REFNOSL = 'isscaap.RefNoSL';

    /** the column name for the RemarkSL field */
    const REMARKSL = 'isscaap.RemarkSL';

    /** the column name for the Reef field */
    const REEF = 'isscaap.Reef';

    /** the column name for the Pelagic field */
    const PELAGIC = 'isscaap.Pelagic';

    /** the column name for the Demersal field */
    const DEMERSAL = 'isscaap.Demersal';

    /** the column name for the DeepSea field */
    const DEEPSEA = 'isscaap.DeepSea';

    /** the column name for the Resilience field */
    const RESILIENCE = 'isscaap.Resilience';

    /** the column name for the ResilienceRemark field */
    const RESILIENCEREMARK = 'isscaap.ResilienceRemark';

    /** the column name for the ResilienceVal field */
    const RESILIENCEVAL = 'isscaap.ResilienceVal';

    /** the column name for the Stats_data field */
    const STATS_DATA = 'isscaap.Stats_data';

    /** the column name for the Stats_Catch field */
    const STATS_CATCH = 'isscaap.Stats_Catch';

    /** the column name for the Stats_Aquaculture field */
    const STATS_AQUACULTURE = 'isscaap.Stats_Aquaculture';

    /** the column name for the FS_Aquatic field */
    const FS_AQUATIC = 'isscaap.FS_Aquatic';

    /** the column name for the FS_AquaticSumm field */
    const FS_AQUATICSUMM = 'isscaap.FS_AquaticSumm';

    /** the column name for the FS_Cultured field */
    const FS_CULTURED = 'isscaap.FS_Cultured';

    /** the column name for the FS_CulturedSumm field */
    const FS_CULTUREDSUMM = 'isscaap.FS_CulturedSumm';

    /** the column name for the FIRMS field */
    const FIRMS = 'isscaap.FIRMS';

    /** the column name for the FIRMS_Summ field */
    const FIRMS_SUMM = 'isscaap.FIRMS_Summ';

    /** the column name for the FIGIS_ID field */
    const FIGIS_ID = 'isscaap.FIGIS_ID';

    /** the column name for the CoL_ID field */
    const COL_ID = 'isscaap.CoL_ID';

    /** the column name for the DB field */
    const DB = 'isscaap.DB';

    /** the column name for the TS field */
    const TS = 'isscaap.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Isscaap objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Isscaap[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. IsscaapPeer::$fieldNames[IsscaapPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Ordnum', 'Famcode', 'Speccode', 'Stockcode', 'Syncode', 'Valid', 'Genus', 'Species', 'Agglevel', 'Isscaap', 'Taxcode', 'Alphacode', 'Scientific', 'English', 'French', 'Spanish', 'Arabic', 'Chinese', 'Russian', 'Author', 'Family', 'Order', 'Troph', 'Setroph', 'Refno', 'Remarktroph', 'Slmax', 'Refnosl', 'Remarksl', 'Reef', 'Pelagic', 'Demersal', 'Deepsea', 'Resilience', 'Resilienceremark', 'Resilienceval', 'StatsData', 'StatsCatch', 'StatsAquaculture', 'FsAquatic', 'FsAquaticsumm', 'FsCultured', 'FsCulturedsumm', 'Firms', 'FirmsSumm', 'FigisId', 'ColId', 'Db', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'ordnum', 'famcode', 'speccode', 'stockcode', 'syncode', 'valid', 'genus', 'species', 'agglevel', 'isscaap', 'taxcode', 'alphacode', 'scientific', 'english', 'french', 'spanish', 'arabic', 'chinese', 'russian', 'author', 'family', 'order', 'troph', 'setroph', 'refno', 'remarktroph', 'slmax', 'refnosl', 'remarksl', 'reef', 'pelagic', 'demersal', 'deepsea', 'resilience', 'resilienceremark', 'resilienceval', 'statsData', 'statsCatch', 'statsAquaculture', 'fsAquatic', 'fsAquaticsumm', 'fsCultured', 'fsCulturedsumm', 'firms', 'firmsSumm', 'figisId', 'colId', 'db', 'ts', ),
        BasePeer::TYPE_COLNAME => array (IsscaapPeer::AUTOCTR, IsscaapPeer::ORDNUM, IsscaapPeer::FAMCODE, IsscaapPeer::SPECCODE, IsscaapPeer::STOCKCODE, IsscaapPeer::SYNCODE, IsscaapPeer::VALID, IsscaapPeer::GENUS, IsscaapPeer::SPECIES, IsscaapPeer::AGGLEVEL, IsscaapPeer::ISSCAAP, IsscaapPeer::TAXCODE, IsscaapPeer::ALPHACODE, IsscaapPeer::SCIENTIFIC, IsscaapPeer::ENGLISH, IsscaapPeer::FRENCH, IsscaapPeer::SPANISH, IsscaapPeer::ARABIC, IsscaapPeer::CHINESE, IsscaapPeer::RUSSIAN, IsscaapPeer::AUTHOR, IsscaapPeer::FAMILY, IsscaapPeer::ORDER, IsscaapPeer::TROPH, IsscaapPeer::SETROPH, IsscaapPeer::REFNO, IsscaapPeer::REMARKTROPH, IsscaapPeer::SLMAX, IsscaapPeer::REFNOSL, IsscaapPeer::REMARKSL, IsscaapPeer::REEF, IsscaapPeer::PELAGIC, IsscaapPeer::DEMERSAL, IsscaapPeer::DEEPSEA, IsscaapPeer::RESILIENCE, IsscaapPeer::RESILIENCEREMARK, IsscaapPeer::RESILIENCEVAL, IsscaapPeer::STATS_DATA, IsscaapPeer::STATS_CATCH, IsscaapPeer::STATS_AQUACULTURE, IsscaapPeer::FS_AQUATIC, IsscaapPeer::FS_AQUATICSUMM, IsscaapPeer::FS_CULTURED, IsscaapPeer::FS_CULTUREDSUMM, IsscaapPeer::FIRMS, IsscaapPeer::FIRMS_SUMM, IsscaapPeer::FIGIS_ID, IsscaapPeer::COL_ID, IsscaapPeer::DB, IsscaapPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'ORDNUM', 'FAMCODE', 'SPECCODE', 'STOCKCODE', 'SYNCODE', 'VALID', 'GENUS', 'SPECIES', 'AGGLEVEL', 'ISSCAAP', 'TAXCODE', 'ALPHACODE', 'SCIENTIFIC', 'ENGLISH', 'FRENCH', 'SPANISH', 'ARABIC', 'CHINESE', 'RUSSIAN', 'AUTHOR', 'FAMILY', 'ORDER', 'TROPH', 'SETROPH', 'REFNO', 'REMARKTROPH', 'SLMAX', 'REFNOSL', 'REMARKSL', 'REEF', 'PELAGIC', 'DEMERSAL', 'DEEPSEA', 'RESILIENCE', 'RESILIENCEREMARK', 'RESILIENCEVAL', 'STATS_DATA', 'STATS_CATCH', 'STATS_AQUACULTURE', 'FS_AQUATIC', 'FS_AQUATICSUMM', 'FS_CULTURED', 'FS_CULTUREDSUMM', 'FIRMS', 'FIRMS_SUMM', 'FIGIS_ID', 'COL_ID', 'DB', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'OrdNum', 'FamCode', 'SpecCode', 'StockCode', 'Syncode', 'Valid', 'Genus', 'Species', 'AggLevel', 'ISSCAAP', 'TaxCode', 'AlphaCode', 'Scientific', 'English', 'French', 'Spanish', 'Arabic', 'Chinese', 'Russian', 'Author', 'Family', 'Order', 'Troph', 'seTroph', 'RefNo', 'RemarkTroph', 'SLmax', 'RefNoSL', 'RemarkSL', 'Reef', 'Pelagic', 'Demersal', 'DeepSea', 'Resilience', 'ResilienceRemark', 'ResilienceVal', 'Stats_data', 'Stats_Catch', 'Stats_Aquaculture', 'FS_Aquatic', 'FS_AquaticSumm', 'FS_Cultured', 'FS_CulturedSumm', 'FIRMS', 'FIRMS_Summ', 'FIGIS_ID', 'CoL_ID', 'DB', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. IsscaapPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Ordnum' => 1, 'Famcode' => 2, 'Speccode' => 3, 'Stockcode' => 4, 'Syncode' => 5, 'Valid' => 6, 'Genus' => 7, 'Species' => 8, 'Agglevel' => 9, 'Isscaap' => 10, 'Taxcode' => 11, 'Alphacode' => 12, 'Scientific' => 13, 'English' => 14, 'French' => 15, 'Spanish' => 16, 'Arabic' => 17, 'Chinese' => 18, 'Russian' => 19, 'Author' => 20, 'Family' => 21, 'Order' => 22, 'Troph' => 23, 'Setroph' => 24, 'Refno' => 25, 'Remarktroph' => 26, 'Slmax' => 27, 'Refnosl' => 28, 'Remarksl' => 29, 'Reef' => 30, 'Pelagic' => 31, 'Demersal' => 32, 'Deepsea' => 33, 'Resilience' => 34, 'Resilienceremark' => 35, 'Resilienceval' => 36, 'StatsData' => 37, 'StatsCatch' => 38, 'StatsAquaculture' => 39, 'FsAquatic' => 40, 'FsAquaticsumm' => 41, 'FsCultured' => 42, 'FsCulturedsumm' => 43, 'Firms' => 44, 'FirmsSumm' => 45, 'FigisId' => 46, 'ColId' => 47, 'Db' => 48, 'Ts' => 49, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'ordnum' => 1, 'famcode' => 2, 'speccode' => 3, 'stockcode' => 4, 'syncode' => 5, 'valid' => 6, 'genus' => 7, 'species' => 8, 'agglevel' => 9, 'isscaap' => 10, 'taxcode' => 11, 'alphacode' => 12, 'scientific' => 13, 'english' => 14, 'french' => 15, 'spanish' => 16, 'arabic' => 17, 'chinese' => 18, 'russian' => 19, 'author' => 20, 'family' => 21, 'order' => 22, 'troph' => 23, 'setroph' => 24, 'refno' => 25, 'remarktroph' => 26, 'slmax' => 27, 'refnosl' => 28, 'remarksl' => 29, 'reef' => 30, 'pelagic' => 31, 'demersal' => 32, 'deepsea' => 33, 'resilience' => 34, 'resilienceremark' => 35, 'resilienceval' => 36, 'statsData' => 37, 'statsCatch' => 38, 'statsAquaculture' => 39, 'fsAquatic' => 40, 'fsAquaticsumm' => 41, 'fsCultured' => 42, 'fsCulturedsumm' => 43, 'firms' => 44, 'firmsSumm' => 45, 'figisId' => 46, 'colId' => 47, 'db' => 48, 'ts' => 49, ),
        BasePeer::TYPE_COLNAME => array (IsscaapPeer::AUTOCTR => 0, IsscaapPeer::ORDNUM => 1, IsscaapPeer::FAMCODE => 2, IsscaapPeer::SPECCODE => 3, IsscaapPeer::STOCKCODE => 4, IsscaapPeer::SYNCODE => 5, IsscaapPeer::VALID => 6, IsscaapPeer::GENUS => 7, IsscaapPeer::SPECIES => 8, IsscaapPeer::AGGLEVEL => 9, IsscaapPeer::ISSCAAP => 10, IsscaapPeer::TAXCODE => 11, IsscaapPeer::ALPHACODE => 12, IsscaapPeer::SCIENTIFIC => 13, IsscaapPeer::ENGLISH => 14, IsscaapPeer::FRENCH => 15, IsscaapPeer::SPANISH => 16, IsscaapPeer::ARABIC => 17, IsscaapPeer::CHINESE => 18, IsscaapPeer::RUSSIAN => 19, IsscaapPeer::AUTHOR => 20, IsscaapPeer::FAMILY => 21, IsscaapPeer::ORDER => 22, IsscaapPeer::TROPH => 23, IsscaapPeer::SETROPH => 24, IsscaapPeer::REFNO => 25, IsscaapPeer::REMARKTROPH => 26, IsscaapPeer::SLMAX => 27, IsscaapPeer::REFNOSL => 28, IsscaapPeer::REMARKSL => 29, IsscaapPeer::REEF => 30, IsscaapPeer::PELAGIC => 31, IsscaapPeer::DEMERSAL => 32, IsscaapPeer::DEEPSEA => 33, IsscaapPeer::RESILIENCE => 34, IsscaapPeer::RESILIENCEREMARK => 35, IsscaapPeer::RESILIENCEVAL => 36, IsscaapPeer::STATS_DATA => 37, IsscaapPeer::STATS_CATCH => 38, IsscaapPeer::STATS_AQUACULTURE => 39, IsscaapPeer::FS_AQUATIC => 40, IsscaapPeer::FS_AQUATICSUMM => 41, IsscaapPeer::FS_CULTURED => 42, IsscaapPeer::FS_CULTUREDSUMM => 43, IsscaapPeer::FIRMS => 44, IsscaapPeer::FIRMS_SUMM => 45, IsscaapPeer::FIGIS_ID => 46, IsscaapPeer::COL_ID => 47, IsscaapPeer::DB => 48, IsscaapPeer::TS => 49, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'ORDNUM' => 1, 'FAMCODE' => 2, 'SPECCODE' => 3, 'STOCKCODE' => 4, 'SYNCODE' => 5, 'VALID' => 6, 'GENUS' => 7, 'SPECIES' => 8, 'AGGLEVEL' => 9, 'ISSCAAP' => 10, 'TAXCODE' => 11, 'ALPHACODE' => 12, 'SCIENTIFIC' => 13, 'ENGLISH' => 14, 'FRENCH' => 15, 'SPANISH' => 16, 'ARABIC' => 17, 'CHINESE' => 18, 'RUSSIAN' => 19, 'AUTHOR' => 20, 'FAMILY' => 21, 'ORDER' => 22, 'TROPH' => 23, 'SETROPH' => 24, 'REFNO' => 25, 'REMARKTROPH' => 26, 'SLMAX' => 27, 'REFNOSL' => 28, 'REMARKSL' => 29, 'REEF' => 30, 'PELAGIC' => 31, 'DEMERSAL' => 32, 'DEEPSEA' => 33, 'RESILIENCE' => 34, 'RESILIENCEREMARK' => 35, 'RESILIENCEVAL' => 36, 'STATS_DATA' => 37, 'STATS_CATCH' => 38, 'STATS_AQUACULTURE' => 39, 'FS_AQUATIC' => 40, 'FS_AQUATICSUMM' => 41, 'FS_CULTURED' => 42, 'FS_CULTUREDSUMM' => 43, 'FIRMS' => 44, 'FIRMS_SUMM' => 45, 'FIGIS_ID' => 46, 'COL_ID' => 47, 'DB' => 48, 'TS' => 49, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'OrdNum' => 1, 'FamCode' => 2, 'SpecCode' => 3, 'StockCode' => 4, 'Syncode' => 5, 'Valid' => 6, 'Genus' => 7, 'Species' => 8, 'AggLevel' => 9, 'ISSCAAP' => 10, 'TaxCode' => 11, 'AlphaCode' => 12, 'Scientific' => 13, 'English' => 14, 'French' => 15, 'Spanish' => 16, 'Arabic' => 17, 'Chinese' => 18, 'Russian' => 19, 'Author' => 20, 'Family' => 21, 'Order' => 22, 'Troph' => 23, 'seTroph' => 24, 'RefNo' => 25, 'RemarkTroph' => 26, 'SLmax' => 27, 'RefNoSL' => 28, 'RemarkSL' => 29, 'Reef' => 30, 'Pelagic' => 31, 'Demersal' => 32, 'DeepSea' => 33, 'Resilience' => 34, 'ResilienceRemark' => 35, 'ResilienceVal' => 36, 'Stats_data' => 37, 'Stats_Catch' => 38, 'Stats_Aquaculture' => 39, 'FS_Aquatic' => 40, 'FS_AquaticSumm' => 41, 'FS_Cultured' => 42, 'FS_CulturedSumm' => 43, 'FIRMS' => 44, 'FIRMS_Summ' => 45, 'FIGIS_ID' => 46, 'CoL_ID' => 47, 'DB' => 48, 'TS' => 49, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
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
        $toNames = IsscaapPeer::getFieldNames($toType);
        $key = isset(IsscaapPeer::$fieldKeys[$fromType][$name]) ? IsscaapPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(IsscaapPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, IsscaapPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return IsscaapPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. IsscaapPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(IsscaapPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(IsscaapPeer::AUTOCTR);
            $criteria->addSelectColumn(IsscaapPeer::ORDNUM);
            $criteria->addSelectColumn(IsscaapPeer::FAMCODE);
            $criteria->addSelectColumn(IsscaapPeer::SPECCODE);
            $criteria->addSelectColumn(IsscaapPeer::STOCKCODE);
            $criteria->addSelectColumn(IsscaapPeer::SYNCODE);
            $criteria->addSelectColumn(IsscaapPeer::VALID);
            $criteria->addSelectColumn(IsscaapPeer::GENUS);
            $criteria->addSelectColumn(IsscaapPeer::SPECIES);
            $criteria->addSelectColumn(IsscaapPeer::AGGLEVEL);
            $criteria->addSelectColumn(IsscaapPeer::ISSCAAP);
            $criteria->addSelectColumn(IsscaapPeer::TAXCODE);
            $criteria->addSelectColumn(IsscaapPeer::ALPHACODE);
            $criteria->addSelectColumn(IsscaapPeer::SCIENTIFIC);
            $criteria->addSelectColumn(IsscaapPeer::ENGLISH);
            $criteria->addSelectColumn(IsscaapPeer::FRENCH);
            $criteria->addSelectColumn(IsscaapPeer::SPANISH);
            $criteria->addSelectColumn(IsscaapPeer::ARABIC);
            $criteria->addSelectColumn(IsscaapPeer::CHINESE);
            $criteria->addSelectColumn(IsscaapPeer::RUSSIAN);
            $criteria->addSelectColumn(IsscaapPeer::AUTHOR);
            $criteria->addSelectColumn(IsscaapPeer::FAMILY);
            $criteria->addSelectColumn(IsscaapPeer::ORDER);
            $criteria->addSelectColumn(IsscaapPeer::TROPH);
            $criteria->addSelectColumn(IsscaapPeer::SETROPH);
            $criteria->addSelectColumn(IsscaapPeer::REFNO);
            $criteria->addSelectColumn(IsscaapPeer::REMARKTROPH);
            $criteria->addSelectColumn(IsscaapPeer::SLMAX);
            $criteria->addSelectColumn(IsscaapPeer::REFNOSL);
            $criteria->addSelectColumn(IsscaapPeer::REMARKSL);
            $criteria->addSelectColumn(IsscaapPeer::REEF);
            $criteria->addSelectColumn(IsscaapPeer::PELAGIC);
            $criteria->addSelectColumn(IsscaapPeer::DEMERSAL);
            $criteria->addSelectColumn(IsscaapPeer::DEEPSEA);
            $criteria->addSelectColumn(IsscaapPeer::RESILIENCE);
            $criteria->addSelectColumn(IsscaapPeer::RESILIENCEREMARK);
            $criteria->addSelectColumn(IsscaapPeer::RESILIENCEVAL);
            $criteria->addSelectColumn(IsscaapPeer::STATS_DATA);
            $criteria->addSelectColumn(IsscaapPeer::STATS_CATCH);
            $criteria->addSelectColumn(IsscaapPeer::STATS_AQUACULTURE);
            $criteria->addSelectColumn(IsscaapPeer::FS_AQUATIC);
            $criteria->addSelectColumn(IsscaapPeer::FS_AQUATICSUMM);
            $criteria->addSelectColumn(IsscaapPeer::FS_CULTURED);
            $criteria->addSelectColumn(IsscaapPeer::FS_CULTUREDSUMM);
            $criteria->addSelectColumn(IsscaapPeer::FIRMS);
            $criteria->addSelectColumn(IsscaapPeer::FIRMS_SUMM);
            $criteria->addSelectColumn(IsscaapPeer::FIGIS_ID);
            $criteria->addSelectColumn(IsscaapPeer::COL_ID);
            $criteria->addSelectColumn(IsscaapPeer::DB);
            $criteria->addSelectColumn(IsscaapPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.OrdNum');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.Syncode');
            $criteria->addSelectColumn($alias . '.Valid');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.AggLevel');
            $criteria->addSelectColumn($alias . '.ISSCAAP');
            $criteria->addSelectColumn($alias . '.TaxCode');
            $criteria->addSelectColumn($alias . '.AlphaCode');
            $criteria->addSelectColumn($alias . '.Scientific');
            $criteria->addSelectColumn($alias . '.English');
            $criteria->addSelectColumn($alias . '.French');
            $criteria->addSelectColumn($alias . '.Spanish');
            $criteria->addSelectColumn($alias . '.Arabic');
            $criteria->addSelectColumn($alias . '.Chinese');
            $criteria->addSelectColumn($alias . '.Russian');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.Family');
            $criteria->addSelectColumn($alias . '.Order');
            $criteria->addSelectColumn($alias . '.Troph');
            $criteria->addSelectColumn($alias . '.seTroph');
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.RemarkTroph');
            $criteria->addSelectColumn($alias . '.SLmax');
            $criteria->addSelectColumn($alias . '.RefNoSL');
            $criteria->addSelectColumn($alias . '.RemarkSL');
            $criteria->addSelectColumn($alias . '.Reef');
            $criteria->addSelectColumn($alias . '.Pelagic');
            $criteria->addSelectColumn($alias . '.Demersal');
            $criteria->addSelectColumn($alias . '.DeepSea');
            $criteria->addSelectColumn($alias . '.Resilience');
            $criteria->addSelectColumn($alias . '.ResilienceRemark');
            $criteria->addSelectColumn($alias . '.ResilienceVal');
            $criteria->addSelectColumn($alias . '.Stats_data');
            $criteria->addSelectColumn($alias . '.Stats_Catch');
            $criteria->addSelectColumn($alias . '.Stats_Aquaculture');
            $criteria->addSelectColumn($alias . '.FS_Aquatic');
            $criteria->addSelectColumn($alias . '.FS_AquaticSumm');
            $criteria->addSelectColumn($alias . '.FS_Cultured');
            $criteria->addSelectColumn($alias . '.FS_CulturedSumm');
            $criteria->addSelectColumn($alias . '.FIRMS');
            $criteria->addSelectColumn($alias . '.FIRMS_Summ');
            $criteria->addSelectColumn($alias . '.FIGIS_ID');
            $criteria->addSelectColumn($alias . '.CoL_ID');
            $criteria->addSelectColumn($alias . '.DB');
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
        $criteria->setPrimaryTableName(IsscaapPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IsscaapPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(IsscaapPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Isscaap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = IsscaapPeer::doSelect($critcopy, $con);
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
        return IsscaapPeer::populateObjects(IsscaapPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            IsscaapPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(IsscaapPeer::DATABASE_NAME);

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
     * @param Isscaap $obj A Isscaap object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            IsscaapPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Isscaap object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Isscaap) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Isscaap object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(IsscaapPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Isscaap Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(IsscaapPeer::$instances[$key])) {
                return IsscaapPeer::$instances[$key];
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
        foreach (IsscaapPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        IsscaapPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to isscaap
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
        $cls = IsscaapPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = IsscaapPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = IsscaapPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                IsscaapPeer::addInstanceToPool($obj, $key);
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
     * @return array (Isscaap object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = IsscaapPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = IsscaapPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + IsscaapPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = IsscaapPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            IsscaapPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(IsscaapPeer::DATABASE_NAME)->getTable(IsscaapPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseIsscaapPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseIsscaapPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \IsscaapTableMap());
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
        return IsscaapPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Isscaap or Criteria object.
     *
     * @param      mixed $values Criteria or Isscaap object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Isscaap object
        }

        if ($criteria->containsKey(IsscaapPeer::AUTOCTR) && $criteria->keyContainsValue(IsscaapPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.IsscaapPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(IsscaapPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Isscaap or Criteria object.
     *
     * @param      mixed $values Criteria or Isscaap object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(IsscaapPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(IsscaapPeer::AUTOCTR);
            $value = $criteria->remove(IsscaapPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(IsscaapPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IsscaapPeer::TABLE_NAME);
            }

        } else { // $values is Isscaap object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(IsscaapPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the isscaap table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(IsscaapPeer::TABLE_NAME, $con, IsscaapPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            IsscaapPeer::clearInstancePool();
            IsscaapPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Isscaap or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Isscaap object or primary key or array of primary keys
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
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            IsscaapPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Isscaap) { // it's a model object
            // invalidate the cache for this single object
            IsscaapPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(IsscaapPeer::DATABASE_NAME);
            $criteria->add(IsscaapPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                IsscaapPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(IsscaapPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            IsscaapPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Isscaap object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Isscaap $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(IsscaapPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(IsscaapPeer::TABLE_NAME);

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

        return BasePeer::doValidate(IsscaapPeer::DATABASE_NAME, IsscaapPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Isscaap
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = IsscaapPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(IsscaapPeer::DATABASE_NAME);
        $criteria->add(IsscaapPeer::AUTOCTR, $pk);

        $v = IsscaapPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Isscaap[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IsscaapPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(IsscaapPeer::DATABASE_NAME);
            $criteria->add(IsscaapPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = IsscaapPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseIsscaapPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseIsscaapPeer::buildTableMap();

