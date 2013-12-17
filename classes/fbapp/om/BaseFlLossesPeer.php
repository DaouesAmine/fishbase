<?php


/**
 * Base static class for performing query and update operations on the 'fl_losses' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFlLossesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'fl_losses';

    /** the related Propel class for this table */
    const OM_CLASS = 'FlLosses';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FlLossesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 30;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 30;

    /** the column name for the LossCode field */
    const LOSSCODE = 'fl_losses.LossCode';

    /** the column name for the FishCode field */
    const FISHCODE = 'fl_losses.FishCode';

    /** the column name for the Speccode field */
    const SPECCODE = 'fl_losses.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'fl_losses.Stockcode';

    /** the column name for the DataSourceCode field */
    const DATASOURCECODE = 'fl_losses.DataSourceCode';

    /** the column name for the LocationCode field */
    const LOCATIONCODE = 'fl_losses.LocationCode';

    /** the column name for the EstimateCode field */
    const ESTIMATECODE = 'fl_losses.EstimateCode';

    /** the column name for the LossStage field */
    const LOSSSTAGE = 'fl_losses.LossStage';

    /** the column name for the PeriodofStudy field */
    const PERIODOFSTUDY = 'fl_losses.PeriodofStudy';

    /** the column name for the PreviousProcess field */
    const PREVIOUSPROCESS = 'fl_losses.PreviousProcess';

    /** the column name for the PreviousTreatment field */
    const PREVIOUSTREATMENT = 'fl_losses.PreviousTreatment';

    /** the column name for the FishSizeMin field */
    const FISHSIZEMIN = 'fl_losses.FishSizeMin';

    /** the column name for the FishSizeMax field */
    const FISHSIZEMAX = 'fl_losses.FishSizeMax';

    /** the column name for the EndUseBestQuality field */
    const ENDUSEBESTQUALITY = 'fl_losses.EndUseBestQuality';

    /** the column name for the EndUseLowerQuality field */
    const ENDUSELOWERQUALITY = 'fl_losses.EndUseLowerQuality';

    /** the column name for the ReasonForLoss field */
    const REASONFORLOSS = 'fl_losses.ReasonForLoss';

    /** the column name for the InsectType field */
    const INSECTTYPE = 'fl_losses.InsectType';

    /** the column name for the BatchWeight field */
    const BATCHWEIGHT = 'fl_losses.BatchWeight';

    /** the column name for the WeightOfPhysicalLoss field */
    const WEIGHTOFPHYSICALLOSS = 'fl_losses.WeightOfPhysicalLoss';

    /** the column name for the PhysicalLossMin field */
    const PHYSICALLOSSMIN = 'fl_losses.PhysicalLossMin';

    /** the column name for the PhysicalLossMax field */
    const PHYSICALLOSSMAX = 'fl_losses.PhysicalLossMax';

    /** the column name for the WeightLosingQuality field */
    const WEIGHTLOSINGQUALITY = 'fl_losses.WeightLosingQuality';

    /** the column name for the PWeightLosingQualityMin field */
    const PWEIGHTLOSINGQUALITYMIN = 'fl_losses.PWeightLosingQualityMin';

    /** the column name for the PWeightLosingQualityMax field */
    const PWEIGHTLOSINGQUALITYMAX = 'fl_losses.PWeightLosingQualityMax';

    /** the column name for the PFishAffectedByNumberMin field */
    const PFISHAFFECTEDBYNUMBERMIN = 'fl_losses.PFishAffectedByNumberMin';

    /** the column name for the PFishAffectedByNumberMax field */
    const PFISHAFFECTEDBYNUMBERMAX = 'fl_losses.PFishAffectedByNumberMax';

    /** the column name for the Costs field */
    const COSTS = 'fl_losses.Costs';

    /** the column name for the Others field */
    const OTHERS = 'fl_losses.Others';

    /** the column name for the Editable field */
    const EDITABLE = 'fl_losses.Editable';

    /** the column name for the TS field */
    const TS = 'fl_losses.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of FlLosses objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array FlLosses[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FlLossesPeer::$fieldNames[FlLossesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Losscode', 'Fishcode', 'Speccode', 'Stockcode', 'Datasourcecode', 'Locationcode', 'Estimatecode', 'Lossstage', 'Periodofstudy', 'Previousprocess', 'Previoustreatment', 'Fishsizemin', 'Fishsizemax', 'Endusebestquality', 'Enduselowerquality', 'Reasonforloss', 'Insecttype', 'Batchweight', 'Weightofphysicalloss', 'Physicallossmin', 'Physicallossmax', 'Weightlosingquality', 'Pweightlosingqualitymin', 'Pweightlosingqualitymax', 'Pfishaffectedbynumbermin', 'Pfishaffectedbynumbermax', 'Costs', 'Others', 'Editable', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('losscode', 'fishcode', 'speccode', 'stockcode', 'datasourcecode', 'locationcode', 'estimatecode', 'lossstage', 'periodofstudy', 'previousprocess', 'previoustreatment', 'fishsizemin', 'fishsizemax', 'endusebestquality', 'enduselowerquality', 'reasonforloss', 'insecttype', 'batchweight', 'weightofphysicalloss', 'physicallossmin', 'physicallossmax', 'weightlosingquality', 'pweightlosingqualitymin', 'pweightlosingqualitymax', 'pfishaffectedbynumbermin', 'pfishaffectedbynumbermax', 'costs', 'others', 'editable', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FlLossesPeer::LOSSCODE, FlLossesPeer::FISHCODE, FlLossesPeer::SPECCODE, FlLossesPeer::STOCKCODE, FlLossesPeer::DATASOURCECODE, FlLossesPeer::LOCATIONCODE, FlLossesPeer::ESTIMATECODE, FlLossesPeer::LOSSSTAGE, FlLossesPeer::PERIODOFSTUDY, FlLossesPeer::PREVIOUSPROCESS, FlLossesPeer::PREVIOUSTREATMENT, FlLossesPeer::FISHSIZEMIN, FlLossesPeer::FISHSIZEMAX, FlLossesPeer::ENDUSEBESTQUALITY, FlLossesPeer::ENDUSELOWERQUALITY, FlLossesPeer::REASONFORLOSS, FlLossesPeer::INSECTTYPE, FlLossesPeer::BATCHWEIGHT, FlLossesPeer::WEIGHTOFPHYSICALLOSS, FlLossesPeer::PHYSICALLOSSMIN, FlLossesPeer::PHYSICALLOSSMAX, FlLossesPeer::WEIGHTLOSINGQUALITY, FlLossesPeer::PWEIGHTLOSINGQUALITYMIN, FlLossesPeer::PWEIGHTLOSINGQUALITYMAX, FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN, FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX, FlLossesPeer::COSTS, FlLossesPeer::OTHERS, FlLossesPeer::EDITABLE, FlLossesPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOSSCODE', 'FISHCODE', 'SPECCODE', 'STOCKCODE', 'DATASOURCECODE', 'LOCATIONCODE', 'ESTIMATECODE', 'LOSSSTAGE', 'PERIODOFSTUDY', 'PREVIOUSPROCESS', 'PREVIOUSTREATMENT', 'FISHSIZEMIN', 'FISHSIZEMAX', 'ENDUSEBESTQUALITY', 'ENDUSELOWERQUALITY', 'REASONFORLOSS', 'INSECTTYPE', 'BATCHWEIGHT', 'WEIGHTOFPHYSICALLOSS', 'PHYSICALLOSSMIN', 'PHYSICALLOSSMAX', 'WEIGHTLOSINGQUALITY', 'PWEIGHTLOSINGQUALITYMIN', 'PWEIGHTLOSINGQUALITYMAX', 'PFISHAFFECTEDBYNUMBERMIN', 'PFISHAFFECTEDBYNUMBERMAX', 'COSTS', 'OTHERS', 'EDITABLE', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('LossCode', 'FishCode', 'Speccode', 'Stockcode', 'DataSourceCode', 'LocationCode', 'EstimateCode', 'LossStage', 'PeriodofStudy', 'PreviousProcess', 'PreviousTreatment', 'FishSizeMin', 'FishSizeMax', 'EndUseBestQuality', 'EndUseLowerQuality', 'ReasonForLoss', 'InsectType', 'BatchWeight', 'WeightOfPhysicalLoss', 'PhysicalLossMin', 'PhysicalLossMax', 'WeightLosingQuality', 'PWeightLosingQualityMin', 'PWeightLosingQualityMax', 'PFishAffectedByNumberMin', 'PFishAffectedByNumberMax', 'Costs', 'Others', 'Editable', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FlLossesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Losscode' => 0, 'Fishcode' => 1, 'Speccode' => 2, 'Stockcode' => 3, 'Datasourcecode' => 4, 'Locationcode' => 5, 'Estimatecode' => 6, 'Lossstage' => 7, 'Periodofstudy' => 8, 'Previousprocess' => 9, 'Previoustreatment' => 10, 'Fishsizemin' => 11, 'Fishsizemax' => 12, 'Endusebestquality' => 13, 'Enduselowerquality' => 14, 'Reasonforloss' => 15, 'Insecttype' => 16, 'Batchweight' => 17, 'Weightofphysicalloss' => 18, 'Physicallossmin' => 19, 'Physicallossmax' => 20, 'Weightlosingquality' => 21, 'Pweightlosingqualitymin' => 22, 'Pweightlosingqualitymax' => 23, 'Pfishaffectedbynumbermin' => 24, 'Pfishaffectedbynumbermax' => 25, 'Costs' => 26, 'Others' => 27, 'Editable' => 28, 'Ts' => 29, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('losscode' => 0, 'fishcode' => 1, 'speccode' => 2, 'stockcode' => 3, 'datasourcecode' => 4, 'locationcode' => 5, 'estimatecode' => 6, 'lossstage' => 7, 'periodofstudy' => 8, 'previousprocess' => 9, 'previoustreatment' => 10, 'fishsizemin' => 11, 'fishsizemax' => 12, 'endusebestquality' => 13, 'enduselowerquality' => 14, 'reasonforloss' => 15, 'insecttype' => 16, 'batchweight' => 17, 'weightofphysicalloss' => 18, 'physicallossmin' => 19, 'physicallossmax' => 20, 'weightlosingquality' => 21, 'pweightlosingqualitymin' => 22, 'pweightlosingqualitymax' => 23, 'pfishaffectedbynumbermin' => 24, 'pfishaffectedbynumbermax' => 25, 'costs' => 26, 'others' => 27, 'editable' => 28, 'ts' => 29, ),
        BasePeer::TYPE_COLNAME => array (FlLossesPeer::LOSSCODE => 0, FlLossesPeer::FISHCODE => 1, FlLossesPeer::SPECCODE => 2, FlLossesPeer::STOCKCODE => 3, FlLossesPeer::DATASOURCECODE => 4, FlLossesPeer::LOCATIONCODE => 5, FlLossesPeer::ESTIMATECODE => 6, FlLossesPeer::LOSSSTAGE => 7, FlLossesPeer::PERIODOFSTUDY => 8, FlLossesPeer::PREVIOUSPROCESS => 9, FlLossesPeer::PREVIOUSTREATMENT => 10, FlLossesPeer::FISHSIZEMIN => 11, FlLossesPeer::FISHSIZEMAX => 12, FlLossesPeer::ENDUSEBESTQUALITY => 13, FlLossesPeer::ENDUSELOWERQUALITY => 14, FlLossesPeer::REASONFORLOSS => 15, FlLossesPeer::INSECTTYPE => 16, FlLossesPeer::BATCHWEIGHT => 17, FlLossesPeer::WEIGHTOFPHYSICALLOSS => 18, FlLossesPeer::PHYSICALLOSSMIN => 19, FlLossesPeer::PHYSICALLOSSMAX => 20, FlLossesPeer::WEIGHTLOSINGQUALITY => 21, FlLossesPeer::PWEIGHTLOSINGQUALITYMIN => 22, FlLossesPeer::PWEIGHTLOSINGQUALITYMAX => 23, FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN => 24, FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX => 25, FlLossesPeer::COSTS => 26, FlLossesPeer::OTHERS => 27, FlLossesPeer::EDITABLE => 28, FlLossesPeer::TS => 29, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOSSCODE' => 0, 'FISHCODE' => 1, 'SPECCODE' => 2, 'STOCKCODE' => 3, 'DATASOURCECODE' => 4, 'LOCATIONCODE' => 5, 'ESTIMATECODE' => 6, 'LOSSSTAGE' => 7, 'PERIODOFSTUDY' => 8, 'PREVIOUSPROCESS' => 9, 'PREVIOUSTREATMENT' => 10, 'FISHSIZEMIN' => 11, 'FISHSIZEMAX' => 12, 'ENDUSEBESTQUALITY' => 13, 'ENDUSELOWERQUALITY' => 14, 'REASONFORLOSS' => 15, 'INSECTTYPE' => 16, 'BATCHWEIGHT' => 17, 'WEIGHTOFPHYSICALLOSS' => 18, 'PHYSICALLOSSMIN' => 19, 'PHYSICALLOSSMAX' => 20, 'WEIGHTLOSINGQUALITY' => 21, 'PWEIGHTLOSINGQUALITYMIN' => 22, 'PWEIGHTLOSINGQUALITYMAX' => 23, 'PFISHAFFECTEDBYNUMBERMIN' => 24, 'PFISHAFFECTEDBYNUMBERMAX' => 25, 'COSTS' => 26, 'OTHERS' => 27, 'EDITABLE' => 28, 'TS' => 29, ),
        BasePeer::TYPE_FIELDNAME => array ('LossCode' => 0, 'FishCode' => 1, 'Speccode' => 2, 'Stockcode' => 3, 'DataSourceCode' => 4, 'LocationCode' => 5, 'EstimateCode' => 6, 'LossStage' => 7, 'PeriodofStudy' => 8, 'PreviousProcess' => 9, 'PreviousTreatment' => 10, 'FishSizeMin' => 11, 'FishSizeMax' => 12, 'EndUseBestQuality' => 13, 'EndUseLowerQuality' => 14, 'ReasonForLoss' => 15, 'InsectType' => 16, 'BatchWeight' => 17, 'WeightOfPhysicalLoss' => 18, 'PhysicalLossMin' => 19, 'PhysicalLossMax' => 20, 'WeightLosingQuality' => 21, 'PWeightLosingQualityMin' => 22, 'PWeightLosingQualityMax' => 23, 'PFishAffectedByNumberMin' => 24, 'PFishAffectedByNumberMax' => 25, 'Costs' => 26, 'Others' => 27, 'Editable' => 28, 'TS' => 29, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
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
        $toNames = FlLossesPeer::getFieldNames($toType);
        $key = isset(FlLossesPeer::$fieldKeys[$fromType][$name]) ? FlLossesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FlLossesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FlLossesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FlLossesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FlLossesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FlLossesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FlLossesPeer::LOSSCODE);
            $criteria->addSelectColumn(FlLossesPeer::FISHCODE);
            $criteria->addSelectColumn(FlLossesPeer::SPECCODE);
            $criteria->addSelectColumn(FlLossesPeer::STOCKCODE);
            $criteria->addSelectColumn(FlLossesPeer::DATASOURCECODE);
            $criteria->addSelectColumn(FlLossesPeer::LOCATIONCODE);
            $criteria->addSelectColumn(FlLossesPeer::ESTIMATECODE);
            $criteria->addSelectColumn(FlLossesPeer::LOSSSTAGE);
            $criteria->addSelectColumn(FlLossesPeer::PERIODOFSTUDY);
            $criteria->addSelectColumn(FlLossesPeer::PREVIOUSPROCESS);
            $criteria->addSelectColumn(FlLossesPeer::PREVIOUSTREATMENT);
            $criteria->addSelectColumn(FlLossesPeer::FISHSIZEMIN);
            $criteria->addSelectColumn(FlLossesPeer::FISHSIZEMAX);
            $criteria->addSelectColumn(FlLossesPeer::ENDUSEBESTQUALITY);
            $criteria->addSelectColumn(FlLossesPeer::ENDUSELOWERQUALITY);
            $criteria->addSelectColumn(FlLossesPeer::REASONFORLOSS);
            $criteria->addSelectColumn(FlLossesPeer::INSECTTYPE);
            $criteria->addSelectColumn(FlLossesPeer::BATCHWEIGHT);
            $criteria->addSelectColumn(FlLossesPeer::WEIGHTOFPHYSICALLOSS);
            $criteria->addSelectColumn(FlLossesPeer::PHYSICALLOSSMIN);
            $criteria->addSelectColumn(FlLossesPeer::PHYSICALLOSSMAX);
            $criteria->addSelectColumn(FlLossesPeer::WEIGHTLOSINGQUALITY);
            $criteria->addSelectColumn(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN);
            $criteria->addSelectColumn(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX);
            $criteria->addSelectColumn(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN);
            $criteria->addSelectColumn(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX);
            $criteria->addSelectColumn(FlLossesPeer::COSTS);
            $criteria->addSelectColumn(FlLossesPeer::OTHERS);
            $criteria->addSelectColumn(FlLossesPeer::EDITABLE);
            $criteria->addSelectColumn(FlLossesPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.LossCode');
            $criteria->addSelectColumn($alias . '.FishCode');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.DataSourceCode');
            $criteria->addSelectColumn($alias . '.LocationCode');
            $criteria->addSelectColumn($alias . '.EstimateCode');
            $criteria->addSelectColumn($alias . '.LossStage');
            $criteria->addSelectColumn($alias . '.PeriodofStudy');
            $criteria->addSelectColumn($alias . '.PreviousProcess');
            $criteria->addSelectColumn($alias . '.PreviousTreatment');
            $criteria->addSelectColumn($alias . '.FishSizeMin');
            $criteria->addSelectColumn($alias . '.FishSizeMax');
            $criteria->addSelectColumn($alias . '.EndUseBestQuality');
            $criteria->addSelectColumn($alias . '.EndUseLowerQuality');
            $criteria->addSelectColumn($alias . '.ReasonForLoss');
            $criteria->addSelectColumn($alias . '.InsectType');
            $criteria->addSelectColumn($alias . '.BatchWeight');
            $criteria->addSelectColumn($alias . '.WeightOfPhysicalLoss');
            $criteria->addSelectColumn($alias . '.PhysicalLossMin');
            $criteria->addSelectColumn($alias . '.PhysicalLossMax');
            $criteria->addSelectColumn($alias . '.WeightLosingQuality');
            $criteria->addSelectColumn($alias . '.PWeightLosingQualityMin');
            $criteria->addSelectColumn($alias . '.PWeightLosingQualityMax');
            $criteria->addSelectColumn($alias . '.PFishAffectedByNumberMin');
            $criteria->addSelectColumn($alias . '.PFishAffectedByNumberMax');
            $criteria->addSelectColumn($alias . '.Costs');
            $criteria->addSelectColumn($alias . '.Others');
            $criteria->addSelectColumn($alias . '.Editable');
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
        $criteria->setPrimaryTableName(FlLossesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlLossesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FlLossesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return FlLosses
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FlLossesPeer::doSelect($critcopy, $con);
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
        return FlLossesPeer::populateObjects(FlLossesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FlLossesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FlLossesPeer::DATABASE_NAME);

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
     * @param FlLosses $obj A FlLosses object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLosscode();
            } // if key === null
            FlLossesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A FlLosses object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof FlLosses) {
                $key = (string) $value->getLosscode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or FlLosses object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FlLossesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return FlLosses Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FlLossesPeer::$instances[$key])) {
                return FlLossesPeer::$instances[$key];
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
        foreach (FlLossesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FlLossesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to fl_losses
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
        $cls = FlLossesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FlLossesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FlLossesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FlLossesPeer::addInstanceToPool($obj, $key);
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
     * @return array (FlLosses object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FlLossesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FlLossesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FlLossesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FlLossesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FlLossesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FlLossesPeer::DATABASE_NAME)->getTable(FlLossesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFlLossesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFlLossesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FlLossesTableMap());
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
        return FlLossesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a FlLosses or Criteria object.
     *
     * @param      mixed $values Criteria or FlLosses object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from FlLosses object
        }

        if ($criteria->containsKey(FlLossesPeer::LOSSCODE) && $criteria->keyContainsValue(FlLossesPeer::LOSSCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FlLossesPeer::LOSSCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FlLossesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a FlLosses or Criteria object.
     *
     * @param      mixed $values Criteria or FlLosses object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FlLossesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FlLossesPeer::LOSSCODE);
            $value = $criteria->remove(FlLossesPeer::LOSSCODE);
            if ($value) {
                $selectCriteria->add(FlLossesPeer::LOSSCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FlLossesPeer::TABLE_NAME);
            }

        } else { // $values is FlLosses object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FlLossesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fl_losses table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FlLossesPeer::TABLE_NAME, $con, FlLossesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FlLossesPeer::clearInstancePool();
            FlLossesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a FlLosses or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or FlLosses object or primary key or array of primary keys
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
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FlLossesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof FlLosses) { // it's a model object
            // invalidate the cache for this single object
            FlLossesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FlLossesPeer::DATABASE_NAME);
            $criteria->add(FlLossesPeer::LOSSCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FlLossesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FlLossesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FlLossesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given FlLosses object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param FlLosses $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FlLossesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FlLossesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FlLossesPeer::DATABASE_NAME, FlLossesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return FlLosses
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FlLossesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FlLossesPeer::DATABASE_NAME);
        $criteria->add(FlLossesPeer::LOSSCODE, $pk);

        $v = FlLossesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return FlLosses[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FlLossesPeer::DATABASE_NAME);
            $criteria->add(FlLossesPeer::LOSSCODE, $pks, Criteria::IN);
            $objs = FlLossesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFlLossesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFlLossesPeer::buildTableMap();

