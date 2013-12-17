<?php


/**
 * Base static class for performing query and update operations on the 'estimate' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEstimatePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'estimate';

    /** the related Propel class for this table */
    const OM_CLASS = 'Estimate';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EstimateTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the SpecCode field */
    const SPECCODE = 'estimate.SpecCode';

    /** the column name for the MaxLengthTL field */
    const MAXLENGTHTL = 'estimate.MaxLengthTL';

    /** the column name for the TLObserved field */
    const TLOBSERVED = 'estimate.TLObserved';

    /** the column name for the Troph field */
    const TROPH = 'estimate.Troph';

    /** the column name for the seTroph field */
    const SETROPH = 'estimate.seTroph';

    /** the column name for the TrophObserved field */
    const TROPHOBSERVED = 'estimate.TrophObserved';

    /** the column name for the TrophPredicted field */
    const TROPHPREDICTED = 'estimate.TrophPredicted';

    /** the column name for the seTrophPredicted field */
    const SETROPHPREDICTED = 'estimate.seTrophPredicted';

    /** the column name for the a field */
    const A = 'estimate.a';

    /** the column name for the sd_log10a field */
    const SD_LOG10A = 'estimate.sd_log10a';

    /** the column name for the b field */
    const B = 'estimate.b';

    /** the column name for the sd_b field */
    const SD_B = 'estimate.sd_b';

    /** the column name for the Method_ab field */
    const METHOD_AB = 'estimate.Method_ab';

    /** the column name for the K field */
    const K = 'estimate.K';

    /** the column name for the SD_logK field */
    const SD_LOGK = 'estimate.SD_logK';

    /** the column name for the Linf field */
    const LINF = 'estimate.Linf';

    /** the column name for the SD_logLinf field */
    const SD_LOGLINF = 'estimate.SD_logLinf';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'estimate.LengthType';

    /** the column name for the ComDepthMin field */
    const COMDEPTHMIN = 'estimate.ComDepthMin';

    /** the column name for the ComDepthMax field */
    const COMDEPTHMAX = 'estimate.ComDepthMax';

    /** the column name for the ComDepMinObserved field */
    const COMDEPMINOBSERVED = 'estimate.ComDepMinObserved';

    /** the column name for the ComDepMaxObserved field */
    const COMDEPMAXOBSERVED = 'estimate.ComDepMaxObserved';

    /** the column name for the DepthMin field */
    const DEPTHMIN = 'estimate.DepthMin';

    /** the column name for the DepthMax field */
    const DEPTHMAX = 'estimate.DepthMax';

    /** the column name for the DepthMinEstimate field */
    const DEPTHMINESTIMATE = 'estimate.DepthMinEstimate';

    /** the column name for the DepthMaxEstimate field */
    const DEPTHMAXESTIMATE = 'estimate.DepthMaxEstimate';

    /** the column name for the LastModified field */
    const LASTMODIFIED = 'estimate.LastModified';

    /** the column name for the MaxLengthSL field */
    const MAXLENGTHSL = 'estimate.MaxLengthSL';

    /** the column name for the KObserved field */
    const KOBSERVED = 'estimate.KObserved';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Estimate objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Estimate[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EstimatePeer::$fieldNames[EstimatePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Maxlengthtl', 'Tlobserved', 'Troph', 'Setroph', 'Trophobserved', 'Trophpredicted', 'Setrophpredicted', 'A', 'SdLog10a', 'B', 'SdB', 'MethodAb', 'K', 'SdLogk', 'Linf', 'SdLoglinf', 'Lengthtype', 'Comdepthmin', 'Comdepthmax', 'Comdepminobserved', 'Comdepmaxobserved', 'Depthmin', 'Depthmax', 'Depthminestimate', 'Depthmaxestimate', 'Lastmodified', 'Maxlengthsl', 'Kobserved', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'maxlengthtl', 'tlobserved', 'troph', 'setroph', 'trophobserved', 'trophpredicted', 'setrophpredicted', 'a', 'sdLog10a', 'b', 'sdB', 'methodAb', 'k', 'sdLogk', 'linf', 'sdLoglinf', 'lengthtype', 'comdepthmin', 'comdepthmax', 'comdepminobserved', 'comdepmaxobserved', 'depthmin', 'depthmax', 'depthminestimate', 'depthmaxestimate', 'lastmodified', 'maxlengthsl', 'kobserved', ),
        BasePeer::TYPE_COLNAME => array (EstimatePeer::SPECCODE, EstimatePeer::MAXLENGTHTL, EstimatePeer::TLOBSERVED, EstimatePeer::TROPH, EstimatePeer::SETROPH, EstimatePeer::TROPHOBSERVED, EstimatePeer::TROPHPREDICTED, EstimatePeer::SETROPHPREDICTED, EstimatePeer::A, EstimatePeer::SD_LOG10A, EstimatePeer::B, EstimatePeer::SD_B, EstimatePeer::METHOD_AB, EstimatePeer::K, EstimatePeer::SD_LOGK, EstimatePeer::LINF, EstimatePeer::SD_LOGLINF, EstimatePeer::LENGTHTYPE, EstimatePeer::COMDEPTHMIN, EstimatePeer::COMDEPTHMAX, EstimatePeer::COMDEPMINOBSERVED, EstimatePeer::COMDEPMAXOBSERVED, EstimatePeer::DEPTHMIN, EstimatePeer::DEPTHMAX, EstimatePeer::DEPTHMINESTIMATE, EstimatePeer::DEPTHMAXESTIMATE, EstimatePeer::LASTMODIFIED, EstimatePeer::MAXLENGTHSL, EstimatePeer::KOBSERVED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'MAXLENGTHTL', 'TLOBSERVED', 'TROPH', 'SETROPH', 'TROPHOBSERVED', 'TROPHPREDICTED', 'SETROPHPREDICTED', 'A', 'SD_LOG10A', 'B', 'SD_B', 'METHOD_AB', 'K', 'SD_LOGK', 'LINF', 'SD_LOGLINF', 'LENGTHTYPE', 'COMDEPTHMIN', 'COMDEPTHMAX', 'COMDEPMINOBSERVED', 'COMDEPMAXOBSERVED', 'DEPTHMIN', 'DEPTHMAX', 'DEPTHMINESTIMATE', 'DEPTHMAXESTIMATE', 'LASTMODIFIED', 'MAXLENGTHSL', 'KOBSERVED', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'MaxLengthTL', 'TLObserved', 'Troph', 'seTroph', 'TrophObserved', 'TrophPredicted', 'seTrophPredicted', 'a', 'sd_log10a', 'b', 'sd_b', 'Method_ab', 'K', 'SD_logK', 'Linf', 'SD_logLinf', 'LengthType', 'ComDepthMin', 'ComDepthMax', 'ComDepMinObserved', 'ComDepMaxObserved', 'DepthMin', 'DepthMax', 'DepthMinEstimate', 'DepthMaxEstimate', 'LastModified', 'MaxLengthSL', 'KObserved', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EstimatePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Maxlengthtl' => 1, 'Tlobserved' => 2, 'Troph' => 3, 'Setroph' => 4, 'Trophobserved' => 5, 'Trophpredicted' => 6, 'Setrophpredicted' => 7, 'A' => 8, 'SdLog10a' => 9, 'B' => 10, 'SdB' => 11, 'MethodAb' => 12, 'K' => 13, 'SdLogk' => 14, 'Linf' => 15, 'SdLoglinf' => 16, 'Lengthtype' => 17, 'Comdepthmin' => 18, 'Comdepthmax' => 19, 'Comdepminobserved' => 20, 'Comdepmaxobserved' => 21, 'Depthmin' => 22, 'Depthmax' => 23, 'Depthminestimate' => 24, 'Depthmaxestimate' => 25, 'Lastmodified' => 26, 'Maxlengthsl' => 27, 'Kobserved' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'maxlengthtl' => 1, 'tlobserved' => 2, 'troph' => 3, 'setroph' => 4, 'trophobserved' => 5, 'trophpredicted' => 6, 'setrophpredicted' => 7, 'a' => 8, 'sdLog10a' => 9, 'b' => 10, 'sdB' => 11, 'methodAb' => 12, 'k' => 13, 'sdLogk' => 14, 'linf' => 15, 'sdLoglinf' => 16, 'lengthtype' => 17, 'comdepthmin' => 18, 'comdepthmax' => 19, 'comdepminobserved' => 20, 'comdepmaxobserved' => 21, 'depthmin' => 22, 'depthmax' => 23, 'depthminestimate' => 24, 'depthmaxestimate' => 25, 'lastmodified' => 26, 'maxlengthsl' => 27, 'kobserved' => 28, ),
        BasePeer::TYPE_COLNAME => array (EstimatePeer::SPECCODE => 0, EstimatePeer::MAXLENGTHTL => 1, EstimatePeer::TLOBSERVED => 2, EstimatePeer::TROPH => 3, EstimatePeer::SETROPH => 4, EstimatePeer::TROPHOBSERVED => 5, EstimatePeer::TROPHPREDICTED => 6, EstimatePeer::SETROPHPREDICTED => 7, EstimatePeer::A => 8, EstimatePeer::SD_LOG10A => 9, EstimatePeer::B => 10, EstimatePeer::SD_B => 11, EstimatePeer::METHOD_AB => 12, EstimatePeer::K => 13, EstimatePeer::SD_LOGK => 14, EstimatePeer::LINF => 15, EstimatePeer::SD_LOGLINF => 16, EstimatePeer::LENGTHTYPE => 17, EstimatePeer::COMDEPTHMIN => 18, EstimatePeer::COMDEPTHMAX => 19, EstimatePeer::COMDEPMINOBSERVED => 20, EstimatePeer::COMDEPMAXOBSERVED => 21, EstimatePeer::DEPTHMIN => 22, EstimatePeer::DEPTHMAX => 23, EstimatePeer::DEPTHMINESTIMATE => 24, EstimatePeer::DEPTHMAXESTIMATE => 25, EstimatePeer::LASTMODIFIED => 26, EstimatePeer::MAXLENGTHSL => 27, EstimatePeer::KOBSERVED => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'MAXLENGTHTL' => 1, 'TLOBSERVED' => 2, 'TROPH' => 3, 'SETROPH' => 4, 'TROPHOBSERVED' => 5, 'TROPHPREDICTED' => 6, 'SETROPHPREDICTED' => 7, 'A' => 8, 'SD_LOG10A' => 9, 'B' => 10, 'SD_B' => 11, 'METHOD_AB' => 12, 'K' => 13, 'SD_LOGK' => 14, 'LINF' => 15, 'SD_LOGLINF' => 16, 'LENGTHTYPE' => 17, 'COMDEPTHMIN' => 18, 'COMDEPTHMAX' => 19, 'COMDEPMINOBSERVED' => 20, 'COMDEPMAXOBSERVED' => 21, 'DEPTHMIN' => 22, 'DEPTHMAX' => 23, 'DEPTHMINESTIMATE' => 24, 'DEPTHMAXESTIMATE' => 25, 'LASTMODIFIED' => 26, 'MAXLENGTHSL' => 27, 'KOBSERVED' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'MaxLengthTL' => 1, 'TLObserved' => 2, 'Troph' => 3, 'seTroph' => 4, 'TrophObserved' => 5, 'TrophPredicted' => 6, 'seTrophPredicted' => 7, 'a' => 8, 'sd_log10a' => 9, 'b' => 10, 'sd_b' => 11, 'Method_ab' => 12, 'K' => 13, 'SD_logK' => 14, 'Linf' => 15, 'SD_logLinf' => 16, 'LengthType' => 17, 'ComDepthMin' => 18, 'ComDepthMax' => 19, 'ComDepMinObserved' => 20, 'ComDepMaxObserved' => 21, 'DepthMin' => 22, 'DepthMax' => 23, 'DepthMinEstimate' => 24, 'DepthMaxEstimate' => 25, 'LastModified' => 26, 'MaxLengthSL' => 27, 'KObserved' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $toNames = EstimatePeer::getFieldNames($toType);
        $key = isset(EstimatePeer::$fieldKeys[$fromType][$name]) ? EstimatePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EstimatePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EstimatePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EstimatePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EstimatePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EstimatePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EstimatePeer::SPECCODE);
            $criteria->addSelectColumn(EstimatePeer::MAXLENGTHTL);
            $criteria->addSelectColumn(EstimatePeer::TLOBSERVED);
            $criteria->addSelectColumn(EstimatePeer::TROPH);
            $criteria->addSelectColumn(EstimatePeer::SETROPH);
            $criteria->addSelectColumn(EstimatePeer::TROPHOBSERVED);
            $criteria->addSelectColumn(EstimatePeer::TROPHPREDICTED);
            $criteria->addSelectColumn(EstimatePeer::SETROPHPREDICTED);
            $criteria->addSelectColumn(EstimatePeer::A);
            $criteria->addSelectColumn(EstimatePeer::SD_LOG10A);
            $criteria->addSelectColumn(EstimatePeer::B);
            $criteria->addSelectColumn(EstimatePeer::SD_B);
            $criteria->addSelectColumn(EstimatePeer::METHOD_AB);
            $criteria->addSelectColumn(EstimatePeer::K);
            $criteria->addSelectColumn(EstimatePeer::SD_LOGK);
            $criteria->addSelectColumn(EstimatePeer::LINF);
            $criteria->addSelectColumn(EstimatePeer::SD_LOGLINF);
            $criteria->addSelectColumn(EstimatePeer::LENGTHTYPE);
            $criteria->addSelectColumn(EstimatePeer::COMDEPTHMIN);
            $criteria->addSelectColumn(EstimatePeer::COMDEPTHMAX);
            $criteria->addSelectColumn(EstimatePeer::COMDEPMINOBSERVED);
            $criteria->addSelectColumn(EstimatePeer::COMDEPMAXOBSERVED);
            $criteria->addSelectColumn(EstimatePeer::DEPTHMIN);
            $criteria->addSelectColumn(EstimatePeer::DEPTHMAX);
            $criteria->addSelectColumn(EstimatePeer::DEPTHMINESTIMATE);
            $criteria->addSelectColumn(EstimatePeer::DEPTHMAXESTIMATE);
            $criteria->addSelectColumn(EstimatePeer::LASTMODIFIED);
            $criteria->addSelectColumn(EstimatePeer::MAXLENGTHSL);
            $criteria->addSelectColumn(EstimatePeer::KOBSERVED);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.MaxLengthTL');
            $criteria->addSelectColumn($alias . '.TLObserved');
            $criteria->addSelectColumn($alias . '.Troph');
            $criteria->addSelectColumn($alias . '.seTroph');
            $criteria->addSelectColumn($alias . '.TrophObserved');
            $criteria->addSelectColumn($alias . '.TrophPredicted');
            $criteria->addSelectColumn($alias . '.seTrophPredicted');
            $criteria->addSelectColumn($alias . '.a');
            $criteria->addSelectColumn($alias . '.sd_log10a');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.sd_b');
            $criteria->addSelectColumn($alias . '.Method_ab');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.SD_logK');
            $criteria->addSelectColumn($alias . '.Linf');
            $criteria->addSelectColumn($alias . '.SD_logLinf');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.ComDepthMin');
            $criteria->addSelectColumn($alias . '.ComDepthMax');
            $criteria->addSelectColumn($alias . '.ComDepMinObserved');
            $criteria->addSelectColumn($alias . '.ComDepMaxObserved');
            $criteria->addSelectColumn($alias . '.DepthMin');
            $criteria->addSelectColumn($alias . '.DepthMax');
            $criteria->addSelectColumn($alias . '.DepthMinEstimate');
            $criteria->addSelectColumn($alias . '.DepthMaxEstimate');
            $criteria->addSelectColumn($alias . '.LastModified');
            $criteria->addSelectColumn($alias . '.MaxLengthSL');
            $criteria->addSelectColumn($alias . '.KObserved');
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
        $criteria->setPrimaryTableName(EstimatePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EstimatePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EstimatePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Estimate
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EstimatePeer::doSelect($critcopy, $con);
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
        return EstimatePeer::populateObjects(EstimatePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EstimatePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EstimatePeer::DATABASE_NAME);

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
     * @param Estimate $obj A Estimate object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSpeccode();
            } // if key === null
            EstimatePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Estimate object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Estimate) {
                $key = (string) $value->getSpeccode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Estimate object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EstimatePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Estimate Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EstimatePeer::$instances[$key])) {
                return EstimatePeer::$instances[$key];
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
        foreach (EstimatePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EstimatePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to estimate
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
        $cls = EstimatePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EstimatePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EstimatePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EstimatePeer::addInstanceToPool($obj, $key);
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
     * @return array (Estimate object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EstimatePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EstimatePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EstimatePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EstimatePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EstimatePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EstimatePeer::DATABASE_NAME)->getTable(EstimatePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEstimatePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEstimatePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EstimateTableMap());
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
        return EstimatePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Estimate or Criteria object.
     *
     * @param      mixed $values Criteria or Estimate object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Estimate object
        }


        // Set the correct dbName
        $criteria->setDbName(EstimatePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Estimate or Criteria object.
     *
     * @param      mixed $values Criteria or Estimate object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EstimatePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EstimatePeer::SPECCODE);
            $value = $criteria->remove(EstimatePeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(EstimatePeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EstimatePeer::TABLE_NAME);
            }

        } else { // $values is Estimate object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EstimatePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the estimate table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EstimatePeer::TABLE_NAME, $con, EstimatePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EstimatePeer::clearInstancePool();
            EstimatePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Estimate or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Estimate object or primary key or array of primary keys
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
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EstimatePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Estimate) { // it's a model object
            // invalidate the cache for this single object
            EstimatePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EstimatePeer::DATABASE_NAME);
            $criteria->add(EstimatePeer::SPECCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EstimatePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EstimatePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EstimatePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Estimate object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Estimate $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EstimatePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EstimatePeer::TABLE_NAME);

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

        return BasePeer::doValidate(EstimatePeer::DATABASE_NAME, EstimatePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Estimate
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EstimatePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EstimatePeer::DATABASE_NAME);
        $criteria->add(EstimatePeer::SPECCODE, $pk);

        $v = EstimatePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Estimate[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EstimatePeer::DATABASE_NAME);
            $criteria->add(EstimatePeer::SPECCODE, $pks, Criteria::IN);
            $objs = EstimatePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEstimatePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEstimatePeer::buildTableMap();

