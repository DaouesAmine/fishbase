<?php


/**
 * Base static class for performing query and update operations on the 'cultspec' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCultspecPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'cultspec';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cultspec';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CultspecTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 42;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 42;

    /** the column name for the StockCode field */
    const STOCKCODE = 'cultspec.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'cultspec.SpecCode';

    /** the column name for the CultSpecRefNo field */
    const CULTSPECREFNO = 'cultspec.CultSpecRefNo';

    /** the column name for the CultCode field */
    const CULTCODE = 'cultspec.CultCode';

    /** the column name for the StockingRate field */
    const STOCKINGRATE = 'cultspec.StockingRate';

    /** the column name for the UnitStocking field */
    const UNITSTOCKING = 'cultspec.UnitStocking';

    /** the column name for the TotalStocking field */
    const TOTALSTOCKING = 'cultspec.TotalStocking';

    /** the column name for the StockingLength field */
    const STOCKINGLENGTH = 'cultspec.StockingLength';

    /** the column name for the TypeStockLength field */
    const TYPESTOCKLENGTH = 'cultspec.TypeStockLength';

    /** the column name for the CommentStockLength field */
    const COMMENTSTOCKLENGTH = 'cultspec.CommentStockLength';

    /** the column name for the WeightStocking field */
    const WEIGHTSTOCKING = 'cultspec.WeightStocking';

    /** the column name for the StockingAge field */
    const STOCKINGAGE = 'cultspec.StockingAge';

    /** the column name for the LooUnsexed field */
    const LOOUNSEXED = 'cultspec.LooUnsexed';

    /** the column name for the KUnsexed field */
    const KUNSEXED = 'cultspec.KUnsexed';

    /** the column name for the Method field */
    const METHOD = 'cultspec.Method';

    /** the column name for the LooFemale field */
    const LOOFEMALE = 'cultspec.LooFemale';

    /** the column name for the KFemale field */
    const KFEMALE = 'cultspec.KFemale';

    /** the column name for the LooMale field */
    const LOOMALE = 'cultspec.LooMale';

    /** the column name for the KMale field */
    const KMALE = 'cultspec.KMale';

    /** the column name for the RemarksonGrowth field */
    const REMARKSONGROWTH = 'cultspec.RemarksonGrowth';

    /** the column name for the ProductionPeriod field */
    const PRODUCTIONPERIOD = 'cultspec.ProductionPeriod';

    /** the column name for the HarvestingPractice field */
    const HARVESTINGPRACTICE = 'cultspec.HarvestingPractice';

    /** the column name for the HarvestingLength field */
    const HARVESTINGLENGTH = 'cultspec.HarvestingLength';

    /** the column name for the TypeHarvestLength field */
    const TYPEHARVESTLENGTH = 'cultspec.TypeHarvestLength';

    /** the column name for the CommentHarvLength field */
    const COMMENTHARVLENGTH = 'cultspec.CommentHarvLength';

    /** the column name for the HarvestingWeight field */
    const HARVESTINGWEIGHT = 'cultspec.HarvestingWeight';

    /** the column name for the MatureatHarvest field */
    const MATUREATHARVEST = 'cultspec.MatureatHarvest';

    /** the column name for the MPeriod field */
    const MPERIOD = 'cultspec.MPeriod';

    /** the column name for the ProductionCycle field */
    const PRODUCTIONCYCLE = 'cultspec.ProductionCycle';

    /** the column name for the UnitCycle field */
    const UNITCYCLE = 'cultspec.UnitCycle';

    /** the column name for the ProductionYear field */
    const PRODUCTIONYEAR = 'cultspec.ProductionYear';

    /** the column name for the UnitYear field */
    const UNITYEAR = 'cultspec.UnitYear';

    /** the column name for the ProductionYearExt field */
    const PRODUCTIONYEAREXT = 'cultspec.ProductionYearExt';

    /** the column name for the UnitYearExt field */
    const UNITYEAREXT = 'cultspec.UnitYearExt';

    /** the column name for the Comment field */
    const COMMENT = 'cultspec.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'cultspec.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'cultspec.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'cultspec.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'cultspec.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'cultspec.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'cultspec.DateChecked';

    /** the column name for the TS field */
    const TS = 'cultspec.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cultspec objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cultspec[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CultspecPeer::$fieldNames[CultspecPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Speccode', 'Cultspecrefno', 'Cultcode', 'Stockingrate', 'Unitstocking', 'Totalstocking', 'Stockinglength', 'Typestocklength', 'Commentstocklength', 'Weightstocking', 'Stockingage', 'Loounsexed', 'Kunsexed', 'Method', 'Loofemale', 'Kfemale', 'Loomale', 'Kmale', 'Remarksongrowth', 'Productionperiod', 'Harvestingpractice', 'Harvestinglength', 'Typeharvestlength', 'Commentharvlength', 'Harvestingweight', 'Matureatharvest', 'Mperiod', 'Productioncycle', 'Unitcycle', 'Productionyear', 'Unityear', 'Productionyearext', 'Unityearext', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'speccode', 'cultspecrefno', 'cultcode', 'stockingrate', 'unitstocking', 'totalstocking', 'stockinglength', 'typestocklength', 'commentstocklength', 'weightstocking', 'stockingage', 'loounsexed', 'kunsexed', 'method', 'loofemale', 'kfemale', 'loomale', 'kmale', 'remarksongrowth', 'productionperiod', 'harvestingpractice', 'harvestinglength', 'typeharvestlength', 'commentharvlength', 'harvestingweight', 'matureatharvest', 'mperiod', 'productioncycle', 'unitcycle', 'productionyear', 'unityear', 'productionyearext', 'unityearext', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CultspecPeer::STOCKCODE, CultspecPeer::SPECCODE, CultspecPeer::CULTSPECREFNO, CultspecPeer::CULTCODE, CultspecPeer::STOCKINGRATE, CultspecPeer::UNITSTOCKING, CultspecPeer::TOTALSTOCKING, CultspecPeer::STOCKINGLENGTH, CultspecPeer::TYPESTOCKLENGTH, CultspecPeer::COMMENTSTOCKLENGTH, CultspecPeer::WEIGHTSTOCKING, CultspecPeer::STOCKINGAGE, CultspecPeer::LOOUNSEXED, CultspecPeer::KUNSEXED, CultspecPeer::METHOD, CultspecPeer::LOOFEMALE, CultspecPeer::KFEMALE, CultspecPeer::LOOMALE, CultspecPeer::KMALE, CultspecPeer::REMARKSONGROWTH, CultspecPeer::PRODUCTIONPERIOD, CultspecPeer::HARVESTINGPRACTICE, CultspecPeer::HARVESTINGLENGTH, CultspecPeer::TYPEHARVESTLENGTH, CultspecPeer::COMMENTHARVLENGTH, CultspecPeer::HARVESTINGWEIGHT, CultspecPeer::MATUREATHARVEST, CultspecPeer::MPERIOD, CultspecPeer::PRODUCTIONCYCLE, CultspecPeer::UNITCYCLE, CultspecPeer::PRODUCTIONYEAR, CultspecPeer::UNITYEAR, CultspecPeer::PRODUCTIONYEAREXT, CultspecPeer::UNITYEAREXT, CultspecPeer::COMMENT, CultspecPeer::ENTERED, CultspecPeer::DATEENTERED, CultspecPeer::MODIFIED, CultspecPeer::DATEMODIFIED, CultspecPeer::EXPERT, CultspecPeer::DATECHECKED, CultspecPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'SPECCODE', 'CULTSPECREFNO', 'CULTCODE', 'STOCKINGRATE', 'UNITSTOCKING', 'TOTALSTOCKING', 'STOCKINGLENGTH', 'TYPESTOCKLENGTH', 'COMMENTSTOCKLENGTH', 'WEIGHTSTOCKING', 'STOCKINGAGE', 'LOOUNSEXED', 'KUNSEXED', 'METHOD', 'LOOFEMALE', 'KFEMALE', 'LOOMALE', 'KMALE', 'REMARKSONGROWTH', 'PRODUCTIONPERIOD', 'HARVESTINGPRACTICE', 'HARVESTINGLENGTH', 'TYPEHARVESTLENGTH', 'COMMENTHARVLENGTH', 'HARVESTINGWEIGHT', 'MATUREATHARVEST', 'MPERIOD', 'PRODUCTIONCYCLE', 'UNITCYCLE', 'PRODUCTIONYEAR', 'UNITYEAR', 'PRODUCTIONYEAREXT', 'UNITYEAREXT', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'SpecCode', 'CultSpecRefNo', 'CultCode', 'StockingRate', 'UnitStocking', 'TotalStocking', 'StockingLength', 'TypeStockLength', 'CommentStockLength', 'WeightStocking', 'StockingAge', 'LooUnsexed', 'KUnsexed', 'Method', 'LooFemale', 'KFemale', 'LooMale', 'KMale', 'RemarksonGrowth', 'ProductionPeriod', 'HarvestingPractice', 'HarvestingLength', 'TypeHarvestLength', 'CommentHarvLength', 'HarvestingWeight', 'MatureatHarvest', 'MPeriod', 'ProductionCycle', 'UnitCycle', 'ProductionYear', 'UnitYear', 'ProductionYearExt', 'UnitYearExt', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CultspecPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Speccode' => 1, 'Cultspecrefno' => 2, 'Cultcode' => 3, 'Stockingrate' => 4, 'Unitstocking' => 5, 'Totalstocking' => 6, 'Stockinglength' => 7, 'Typestocklength' => 8, 'Commentstocklength' => 9, 'Weightstocking' => 10, 'Stockingage' => 11, 'Loounsexed' => 12, 'Kunsexed' => 13, 'Method' => 14, 'Loofemale' => 15, 'Kfemale' => 16, 'Loomale' => 17, 'Kmale' => 18, 'Remarksongrowth' => 19, 'Productionperiod' => 20, 'Harvestingpractice' => 21, 'Harvestinglength' => 22, 'Typeharvestlength' => 23, 'Commentharvlength' => 24, 'Harvestingweight' => 25, 'Matureatharvest' => 26, 'Mperiod' => 27, 'Productioncycle' => 28, 'Unitcycle' => 29, 'Productionyear' => 30, 'Unityear' => 31, 'Productionyearext' => 32, 'Unityearext' => 33, 'Comment' => 34, 'Entered' => 35, 'Dateentered' => 36, 'Modified' => 37, 'Datemodified' => 38, 'Expert' => 39, 'Datechecked' => 40, 'Ts' => 41, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'speccode' => 1, 'cultspecrefno' => 2, 'cultcode' => 3, 'stockingrate' => 4, 'unitstocking' => 5, 'totalstocking' => 6, 'stockinglength' => 7, 'typestocklength' => 8, 'commentstocklength' => 9, 'weightstocking' => 10, 'stockingage' => 11, 'loounsexed' => 12, 'kunsexed' => 13, 'method' => 14, 'loofemale' => 15, 'kfemale' => 16, 'loomale' => 17, 'kmale' => 18, 'remarksongrowth' => 19, 'productionperiod' => 20, 'harvestingpractice' => 21, 'harvestinglength' => 22, 'typeharvestlength' => 23, 'commentharvlength' => 24, 'harvestingweight' => 25, 'matureatharvest' => 26, 'mperiod' => 27, 'productioncycle' => 28, 'unitcycle' => 29, 'productionyear' => 30, 'unityear' => 31, 'productionyearext' => 32, 'unityearext' => 33, 'comment' => 34, 'entered' => 35, 'dateentered' => 36, 'modified' => 37, 'datemodified' => 38, 'expert' => 39, 'datechecked' => 40, 'ts' => 41, ),
        BasePeer::TYPE_COLNAME => array (CultspecPeer::STOCKCODE => 0, CultspecPeer::SPECCODE => 1, CultspecPeer::CULTSPECREFNO => 2, CultspecPeer::CULTCODE => 3, CultspecPeer::STOCKINGRATE => 4, CultspecPeer::UNITSTOCKING => 5, CultspecPeer::TOTALSTOCKING => 6, CultspecPeer::STOCKINGLENGTH => 7, CultspecPeer::TYPESTOCKLENGTH => 8, CultspecPeer::COMMENTSTOCKLENGTH => 9, CultspecPeer::WEIGHTSTOCKING => 10, CultspecPeer::STOCKINGAGE => 11, CultspecPeer::LOOUNSEXED => 12, CultspecPeer::KUNSEXED => 13, CultspecPeer::METHOD => 14, CultspecPeer::LOOFEMALE => 15, CultspecPeer::KFEMALE => 16, CultspecPeer::LOOMALE => 17, CultspecPeer::KMALE => 18, CultspecPeer::REMARKSONGROWTH => 19, CultspecPeer::PRODUCTIONPERIOD => 20, CultspecPeer::HARVESTINGPRACTICE => 21, CultspecPeer::HARVESTINGLENGTH => 22, CultspecPeer::TYPEHARVESTLENGTH => 23, CultspecPeer::COMMENTHARVLENGTH => 24, CultspecPeer::HARVESTINGWEIGHT => 25, CultspecPeer::MATUREATHARVEST => 26, CultspecPeer::MPERIOD => 27, CultspecPeer::PRODUCTIONCYCLE => 28, CultspecPeer::UNITCYCLE => 29, CultspecPeer::PRODUCTIONYEAR => 30, CultspecPeer::UNITYEAR => 31, CultspecPeer::PRODUCTIONYEAREXT => 32, CultspecPeer::UNITYEAREXT => 33, CultspecPeer::COMMENT => 34, CultspecPeer::ENTERED => 35, CultspecPeer::DATEENTERED => 36, CultspecPeer::MODIFIED => 37, CultspecPeer::DATEMODIFIED => 38, CultspecPeer::EXPERT => 39, CultspecPeer::DATECHECKED => 40, CultspecPeer::TS => 41, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'SPECCODE' => 1, 'CULTSPECREFNO' => 2, 'CULTCODE' => 3, 'STOCKINGRATE' => 4, 'UNITSTOCKING' => 5, 'TOTALSTOCKING' => 6, 'STOCKINGLENGTH' => 7, 'TYPESTOCKLENGTH' => 8, 'COMMENTSTOCKLENGTH' => 9, 'WEIGHTSTOCKING' => 10, 'STOCKINGAGE' => 11, 'LOOUNSEXED' => 12, 'KUNSEXED' => 13, 'METHOD' => 14, 'LOOFEMALE' => 15, 'KFEMALE' => 16, 'LOOMALE' => 17, 'KMALE' => 18, 'REMARKSONGROWTH' => 19, 'PRODUCTIONPERIOD' => 20, 'HARVESTINGPRACTICE' => 21, 'HARVESTINGLENGTH' => 22, 'TYPEHARVESTLENGTH' => 23, 'COMMENTHARVLENGTH' => 24, 'HARVESTINGWEIGHT' => 25, 'MATUREATHARVEST' => 26, 'MPERIOD' => 27, 'PRODUCTIONCYCLE' => 28, 'UNITCYCLE' => 29, 'PRODUCTIONYEAR' => 30, 'UNITYEAR' => 31, 'PRODUCTIONYEAREXT' => 32, 'UNITYEAREXT' => 33, 'COMMENT' => 34, 'ENTERED' => 35, 'DATEENTERED' => 36, 'MODIFIED' => 37, 'DATEMODIFIED' => 38, 'EXPERT' => 39, 'DATECHECKED' => 40, 'TS' => 41, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'SpecCode' => 1, 'CultSpecRefNo' => 2, 'CultCode' => 3, 'StockingRate' => 4, 'UnitStocking' => 5, 'TotalStocking' => 6, 'StockingLength' => 7, 'TypeStockLength' => 8, 'CommentStockLength' => 9, 'WeightStocking' => 10, 'StockingAge' => 11, 'LooUnsexed' => 12, 'KUnsexed' => 13, 'Method' => 14, 'LooFemale' => 15, 'KFemale' => 16, 'LooMale' => 17, 'KMale' => 18, 'RemarksonGrowth' => 19, 'ProductionPeriod' => 20, 'HarvestingPractice' => 21, 'HarvestingLength' => 22, 'TypeHarvestLength' => 23, 'CommentHarvLength' => 24, 'HarvestingWeight' => 25, 'MatureatHarvest' => 26, 'MPeriod' => 27, 'ProductionCycle' => 28, 'UnitCycle' => 29, 'ProductionYear' => 30, 'UnitYear' => 31, 'ProductionYearExt' => 32, 'UnitYearExt' => 33, 'Comment' => 34, 'Entered' => 35, 'DateEntered' => 36, 'Modified' => 37, 'DateModified' => 38, 'Expert' => 39, 'DateChecked' => 40, 'TS' => 41, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
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
        $toNames = CultspecPeer::getFieldNames($toType);
        $key = isset(CultspecPeer::$fieldKeys[$fromType][$name]) ? CultspecPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CultspecPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CultspecPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CultspecPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CultspecPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CultspecPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CultspecPeer::STOCKCODE);
            $criteria->addSelectColumn(CultspecPeer::SPECCODE);
            $criteria->addSelectColumn(CultspecPeer::CULTSPECREFNO);
            $criteria->addSelectColumn(CultspecPeer::CULTCODE);
            $criteria->addSelectColumn(CultspecPeer::STOCKINGRATE);
            $criteria->addSelectColumn(CultspecPeer::UNITSTOCKING);
            $criteria->addSelectColumn(CultspecPeer::TOTALSTOCKING);
            $criteria->addSelectColumn(CultspecPeer::STOCKINGLENGTH);
            $criteria->addSelectColumn(CultspecPeer::TYPESTOCKLENGTH);
            $criteria->addSelectColumn(CultspecPeer::COMMENTSTOCKLENGTH);
            $criteria->addSelectColumn(CultspecPeer::WEIGHTSTOCKING);
            $criteria->addSelectColumn(CultspecPeer::STOCKINGAGE);
            $criteria->addSelectColumn(CultspecPeer::LOOUNSEXED);
            $criteria->addSelectColumn(CultspecPeer::KUNSEXED);
            $criteria->addSelectColumn(CultspecPeer::METHOD);
            $criteria->addSelectColumn(CultspecPeer::LOOFEMALE);
            $criteria->addSelectColumn(CultspecPeer::KFEMALE);
            $criteria->addSelectColumn(CultspecPeer::LOOMALE);
            $criteria->addSelectColumn(CultspecPeer::KMALE);
            $criteria->addSelectColumn(CultspecPeer::REMARKSONGROWTH);
            $criteria->addSelectColumn(CultspecPeer::PRODUCTIONPERIOD);
            $criteria->addSelectColumn(CultspecPeer::HARVESTINGPRACTICE);
            $criteria->addSelectColumn(CultspecPeer::HARVESTINGLENGTH);
            $criteria->addSelectColumn(CultspecPeer::TYPEHARVESTLENGTH);
            $criteria->addSelectColumn(CultspecPeer::COMMENTHARVLENGTH);
            $criteria->addSelectColumn(CultspecPeer::HARVESTINGWEIGHT);
            $criteria->addSelectColumn(CultspecPeer::MATUREATHARVEST);
            $criteria->addSelectColumn(CultspecPeer::MPERIOD);
            $criteria->addSelectColumn(CultspecPeer::PRODUCTIONCYCLE);
            $criteria->addSelectColumn(CultspecPeer::UNITCYCLE);
            $criteria->addSelectColumn(CultspecPeer::PRODUCTIONYEAR);
            $criteria->addSelectColumn(CultspecPeer::UNITYEAR);
            $criteria->addSelectColumn(CultspecPeer::PRODUCTIONYEAREXT);
            $criteria->addSelectColumn(CultspecPeer::UNITYEAREXT);
            $criteria->addSelectColumn(CultspecPeer::COMMENT);
            $criteria->addSelectColumn(CultspecPeer::ENTERED);
            $criteria->addSelectColumn(CultspecPeer::DATEENTERED);
            $criteria->addSelectColumn(CultspecPeer::MODIFIED);
            $criteria->addSelectColumn(CultspecPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CultspecPeer::EXPERT);
            $criteria->addSelectColumn(CultspecPeer::DATECHECKED);
            $criteria->addSelectColumn(CultspecPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.CultSpecRefNo');
            $criteria->addSelectColumn($alias . '.CultCode');
            $criteria->addSelectColumn($alias . '.StockingRate');
            $criteria->addSelectColumn($alias . '.UnitStocking');
            $criteria->addSelectColumn($alias . '.TotalStocking');
            $criteria->addSelectColumn($alias . '.StockingLength');
            $criteria->addSelectColumn($alias . '.TypeStockLength');
            $criteria->addSelectColumn($alias . '.CommentStockLength');
            $criteria->addSelectColumn($alias . '.WeightStocking');
            $criteria->addSelectColumn($alias . '.StockingAge');
            $criteria->addSelectColumn($alias . '.LooUnsexed');
            $criteria->addSelectColumn($alias . '.KUnsexed');
            $criteria->addSelectColumn($alias . '.Method');
            $criteria->addSelectColumn($alias . '.LooFemale');
            $criteria->addSelectColumn($alias . '.KFemale');
            $criteria->addSelectColumn($alias . '.LooMale');
            $criteria->addSelectColumn($alias . '.KMale');
            $criteria->addSelectColumn($alias . '.RemarksonGrowth');
            $criteria->addSelectColumn($alias . '.ProductionPeriod');
            $criteria->addSelectColumn($alias . '.HarvestingPractice');
            $criteria->addSelectColumn($alias . '.HarvestingLength');
            $criteria->addSelectColumn($alias . '.TypeHarvestLength');
            $criteria->addSelectColumn($alias . '.CommentHarvLength');
            $criteria->addSelectColumn($alias . '.HarvestingWeight');
            $criteria->addSelectColumn($alias . '.MatureatHarvest');
            $criteria->addSelectColumn($alias . '.MPeriod');
            $criteria->addSelectColumn($alias . '.ProductionCycle');
            $criteria->addSelectColumn($alias . '.UnitCycle');
            $criteria->addSelectColumn($alias . '.ProductionYear');
            $criteria->addSelectColumn($alias . '.UnitYear');
            $criteria->addSelectColumn($alias . '.ProductionYearExt');
            $criteria->addSelectColumn($alias . '.UnitYearExt');
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
        $criteria->setPrimaryTableName(CultspecPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CultspecPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CultspecPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cultspec
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CultspecPeer::doSelect($critcopy, $con);
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
        return CultspecPeer::populateObjects(CultspecPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CultspecPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CultspecPeer::DATABASE_NAME);

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
     * @param Cultspec $obj A Cultspec object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getCultcode()));
            } // if key === null
            CultspecPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cultspec object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cultspec) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getCultcode()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cultspec object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CultspecPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cultspec Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CultspecPeer::$instances[$key])) {
                return CultspecPeer::$instances[$key];
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
        foreach (CultspecPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CultspecPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cultspec
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
        if ($row[$startcol] === null && $row[$startcol + 3] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 3]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 3]);
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
        $cls = CultspecPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CultspecPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CultspecPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CultspecPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cultspec object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CultspecPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CultspecPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CultspecPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CultspecPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CultspecPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CultspecPeer::DATABASE_NAME)->getTable(CultspecPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCultspecPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCultspecPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CultspecTableMap());
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
        return CultspecPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cultspec or Criteria object.
     *
     * @param      mixed $values Criteria or Cultspec object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cultspec object
        }


        // Set the correct dbName
        $criteria->setDbName(CultspecPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cultspec or Criteria object.
     *
     * @param      mixed $values Criteria or Cultspec object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CultspecPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CultspecPeer::STOCKCODE);
            $value = $criteria->remove(CultspecPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(CultspecPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CultspecPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CultspecPeer::CULTCODE);
            $value = $criteria->remove(CultspecPeer::CULTCODE);
            if ($value) {
                $selectCriteria->add(CultspecPeer::CULTCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CultspecPeer::TABLE_NAME);
            }

        } else { // $values is Cultspec object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CultspecPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cultspec table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CultspecPeer::TABLE_NAME, $con, CultspecPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CultspecPeer::clearInstancePool();
            CultspecPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cultspec or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cultspec object or primary key or array of primary keys
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
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CultspecPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cultspec) { // it's a model object
            // invalidate the cache for this single object
            CultspecPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CultspecPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CultspecPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CultspecPeer::CULTCODE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CultspecPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CultspecPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CultspecPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cultspec object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cultspec $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CultspecPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CultspecPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CultspecPeer::DATABASE_NAME, CultspecPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $cultcode
     * @param      PropelPDO $con
     * @return Cultspec
     */
    public static function retrieveByPK($stockcode, $cultcode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $cultcode));
         if (null !== ($obj = CultspecPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CultspecPeer::DATABASE_NAME);
        $criteria->add(CultspecPeer::STOCKCODE, $stockcode);
        $criteria->add(CultspecPeer::CULTCODE, $cultcode);
        $v = CultspecPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCultspecPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCultspecPeer::buildTableMap();

