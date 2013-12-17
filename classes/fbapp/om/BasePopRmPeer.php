<?php


/**
 * Base static class for performing query and update operations on the 'pop_rm' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePopRmPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'pop_rm';

    /** the related Propel class for this table */
    const OM_CLASS = 'PopRm';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PopRmTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 41;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 41;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'pop_rm.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'pop_rm.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'pop_rm.SpecCode';

    /** the column name for the PopRMRef field */
    const POPRMREF = 'pop_rm.PopRMRef';

    /** the column name for the Data field */
    const DATA = 'pop_rm.Data';

    /** the column name for the DataSourceRef field */
    const DATASOURCEREF = 'pop_rm.DataSourceRef';

    /** the column name for the rm field */
    const RM = 'pop_rm.rm';

    /** the column name for the Loo field */
    const LOO = 'pop_rm.Loo';

    /** the column name for the TLinfinity field */
    const TLINFINITY = 'pop_rm.TLinfinity';

    /** the column name for the K field */
    const K = 'pop_rm.K';

    /** the column name for the Type field */
    const TYPE = 'pop_rm.Type';

    /** the column name for the Methodrm field */
    const METHODRM = 'pop_rm.Methodrm';

    /** the column name for the Winfinity field */
    const WINFINITY = 'pop_rm.Winfinity';

    /** the column name for the Wm field */
    const WM = 'pop_rm.Wm';

    /** the column name for the LinfLmax field */
    const LINFLMAX = 'pop_rm.LinfLmax';

    /** the column name for the Reliability field */
    const RELIABILITY = 'pop_rm.Reliability';

    /** the column name for the loga field */
    const LOGA = 'pop_rm.loga';

    /** the column name for the b field */
    const B = 'pop_rm.b';

    /** the column name for the M field */
    const M = 'pop_rm.M';

    /** the column name for the MethodM field */
    const METHODM = 'pop_rm.MethodM';

    /** the column name for the MRef field */
    const MREF = 'pop_rm.MRef';

    /** the column name for the tm field */
    const TM = 'pop_rm.tm';

    /** the column name for the Lm field */
    const LM = 'pop_rm.Lm';

    /** the column name for the TypeLm field */
    const TYPELM = 'pop_rm.TypeLm';

    /** the column name for the tmax field */
    const TMAX = 'pop_rm.tmax';

    /** the column name for the F field */
    const F = 'pop_rm.F';

    /** the column name for the LmLoo field */
    const LMLOO = 'pop_rm.LmLoo';

    /** the column name for the unsexedRef field */
    const UNSEXEDREF = 'pop_rm.unsexedRef';

    /** the column name for the Locality field */
    const LOCALITY = 'pop_rm.Locality';

    /** the column name for the GrowthEnviron field */
    const GROWTHENVIRON = 'pop_rm.GrowthEnviron';

    /** the column name for the Temperature field */
    const TEMPERATURE = 'pop_rm.Temperature';

    /** the column name for the DeltaT field */
    const DELTAT = 'pop_rm.DeltaT';

    /** the column name for the TempRef field */
    const TEMPREF = 'pop_rm.TempRef';

    /** the column name for the Comment field */
    const COMMENT = 'pop_rm.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'pop_rm.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'pop_rm.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'pop_rm.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'pop_rm.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'pop_rm.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'pop_rm.DateChecked';

    /** the column name for the TS field */
    const TS = 'pop_rm.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of PopRm objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PopRm[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PopRmPeer::$fieldNames[PopRmPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Poprmref', 'Data', 'Datasourceref', 'Rm', 'Loo', 'Tlinfinity', 'K', 'Type', 'Methodrm', 'Winfinity', 'Wm', 'Linflmax', 'Reliability', 'Loga', 'B', 'M', 'Methodm', 'Mref', 'Tm', 'Lm', 'Typelm', 'Tmax', 'F', 'Lmloo', 'Unsexedref', 'Locality', 'Growthenviron', 'Temperature', 'Deltat', 'Tempref', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'poprmref', 'data', 'datasourceref', 'rm', 'loo', 'tlinfinity', 'k', 'type', 'methodrm', 'winfinity', 'wm', 'linflmax', 'reliability', 'loga', 'b', 'm', 'methodm', 'mref', 'tm', 'lm', 'typelm', 'tmax', 'f', 'lmloo', 'unsexedref', 'locality', 'growthenviron', 'temperature', 'deltat', 'tempref', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PopRmPeer::AUTOCTR, PopRmPeer::STOCKCODE, PopRmPeer::SPECCODE, PopRmPeer::POPRMREF, PopRmPeer::DATA, PopRmPeer::DATASOURCEREF, PopRmPeer::RM, PopRmPeer::LOO, PopRmPeer::TLINFINITY, PopRmPeer::K, PopRmPeer::TYPE, PopRmPeer::METHODRM, PopRmPeer::WINFINITY, PopRmPeer::WM, PopRmPeer::LINFLMAX, PopRmPeer::RELIABILITY, PopRmPeer::LOGA, PopRmPeer::B, PopRmPeer::M, PopRmPeer::METHODM, PopRmPeer::MREF, PopRmPeer::TM, PopRmPeer::LM, PopRmPeer::TYPELM, PopRmPeer::TMAX, PopRmPeer::F, PopRmPeer::LMLOO, PopRmPeer::UNSEXEDREF, PopRmPeer::LOCALITY, PopRmPeer::GROWTHENVIRON, PopRmPeer::TEMPERATURE, PopRmPeer::DELTAT, PopRmPeer::TEMPREF, PopRmPeer::COMMENT, PopRmPeer::ENTERED, PopRmPeer::DATEENTERED, PopRmPeer::MODIFIED, PopRmPeer::DATEMODIFIED, PopRmPeer::EXPERT, PopRmPeer::DATECHECKED, PopRmPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'POPRMREF', 'DATA', 'DATASOURCEREF', 'RM', 'LOO', 'TLINFINITY', 'K', 'TYPE', 'METHODRM', 'WINFINITY', 'WM', 'LINFLMAX', 'RELIABILITY', 'LOGA', 'B', 'M', 'METHODM', 'MREF', 'TM', 'LM', 'TYPELM', 'TMAX', 'F', 'LMLOO', 'UNSEXEDREF', 'LOCALITY', 'GROWTHENVIRON', 'TEMPERATURE', 'DELTAT', 'TEMPREF', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'PopRMRef', 'Data', 'DataSourceRef', 'rm', 'Loo', 'TLinfinity', 'K', 'Type', 'Methodrm', 'Winfinity', 'Wm', 'LinfLmax', 'Reliability', 'loga', 'b', 'M', 'MethodM', 'MRef', 'tm', 'Lm', 'TypeLm', 'tmax', 'F', 'LmLoo', 'unsexedRef', 'Locality', 'GrowthEnviron', 'Temperature', 'DeltaT', 'TempRef', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PopRmPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Poprmref' => 3, 'Data' => 4, 'Datasourceref' => 5, 'Rm' => 6, 'Loo' => 7, 'Tlinfinity' => 8, 'K' => 9, 'Type' => 10, 'Methodrm' => 11, 'Winfinity' => 12, 'Wm' => 13, 'Linflmax' => 14, 'Reliability' => 15, 'Loga' => 16, 'B' => 17, 'M' => 18, 'Methodm' => 19, 'Mref' => 20, 'Tm' => 21, 'Lm' => 22, 'Typelm' => 23, 'Tmax' => 24, 'F' => 25, 'Lmloo' => 26, 'Unsexedref' => 27, 'Locality' => 28, 'Growthenviron' => 29, 'Temperature' => 30, 'Deltat' => 31, 'Tempref' => 32, 'Comment' => 33, 'Entered' => 34, 'Dateentered' => 35, 'Modified' => 36, 'Datemodified' => 37, 'Expert' => 38, 'Datechecked' => 39, 'Ts' => 40, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'poprmref' => 3, 'data' => 4, 'datasourceref' => 5, 'rm' => 6, 'loo' => 7, 'tlinfinity' => 8, 'k' => 9, 'type' => 10, 'methodrm' => 11, 'winfinity' => 12, 'wm' => 13, 'linflmax' => 14, 'reliability' => 15, 'loga' => 16, 'b' => 17, 'm' => 18, 'methodm' => 19, 'mref' => 20, 'tm' => 21, 'lm' => 22, 'typelm' => 23, 'tmax' => 24, 'f' => 25, 'lmloo' => 26, 'unsexedref' => 27, 'locality' => 28, 'growthenviron' => 29, 'temperature' => 30, 'deltat' => 31, 'tempref' => 32, 'comment' => 33, 'entered' => 34, 'dateentered' => 35, 'modified' => 36, 'datemodified' => 37, 'expert' => 38, 'datechecked' => 39, 'ts' => 40, ),
        BasePeer::TYPE_COLNAME => array (PopRmPeer::AUTOCTR => 0, PopRmPeer::STOCKCODE => 1, PopRmPeer::SPECCODE => 2, PopRmPeer::POPRMREF => 3, PopRmPeer::DATA => 4, PopRmPeer::DATASOURCEREF => 5, PopRmPeer::RM => 6, PopRmPeer::LOO => 7, PopRmPeer::TLINFINITY => 8, PopRmPeer::K => 9, PopRmPeer::TYPE => 10, PopRmPeer::METHODRM => 11, PopRmPeer::WINFINITY => 12, PopRmPeer::WM => 13, PopRmPeer::LINFLMAX => 14, PopRmPeer::RELIABILITY => 15, PopRmPeer::LOGA => 16, PopRmPeer::B => 17, PopRmPeer::M => 18, PopRmPeer::METHODM => 19, PopRmPeer::MREF => 20, PopRmPeer::TM => 21, PopRmPeer::LM => 22, PopRmPeer::TYPELM => 23, PopRmPeer::TMAX => 24, PopRmPeer::F => 25, PopRmPeer::LMLOO => 26, PopRmPeer::UNSEXEDREF => 27, PopRmPeer::LOCALITY => 28, PopRmPeer::GROWTHENVIRON => 29, PopRmPeer::TEMPERATURE => 30, PopRmPeer::DELTAT => 31, PopRmPeer::TEMPREF => 32, PopRmPeer::COMMENT => 33, PopRmPeer::ENTERED => 34, PopRmPeer::DATEENTERED => 35, PopRmPeer::MODIFIED => 36, PopRmPeer::DATEMODIFIED => 37, PopRmPeer::EXPERT => 38, PopRmPeer::DATECHECKED => 39, PopRmPeer::TS => 40, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'POPRMREF' => 3, 'DATA' => 4, 'DATASOURCEREF' => 5, 'RM' => 6, 'LOO' => 7, 'TLINFINITY' => 8, 'K' => 9, 'TYPE' => 10, 'METHODRM' => 11, 'WINFINITY' => 12, 'WM' => 13, 'LINFLMAX' => 14, 'RELIABILITY' => 15, 'LOGA' => 16, 'B' => 17, 'M' => 18, 'METHODM' => 19, 'MREF' => 20, 'TM' => 21, 'LM' => 22, 'TYPELM' => 23, 'TMAX' => 24, 'F' => 25, 'LMLOO' => 26, 'UNSEXEDREF' => 27, 'LOCALITY' => 28, 'GROWTHENVIRON' => 29, 'TEMPERATURE' => 30, 'DELTAT' => 31, 'TEMPREF' => 32, 'COMMENT' => 33, 'ENTERED' => 34, 'DATEENTERED' => 35, 'MODIFIED' => 36, 'DATEMODIFIED' => 37, 'EXPERT' => 38, 'DATECHECKED' => 39, 'TS' => 40, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'PopRMRef' => 3, 'Data' => 4, 'DataSourceRef' => 5, 'rm' => 6, 'Loo' => 7, 'TLinfinity' => 8, 'K' => 9, 'Type' => 10, 'Methodrm' => 11, 'Winfinity' => 12, 'Wm' => 13, 'LinfLmax' => 14, 'Reliability' => 15, 'loga' => 16, 'b' => 17, 'M' => 18, 'MethodM' => 19, 'MRef' => 20, 'tm' => 21, 'Lm' => 22, 'TypeLm' => 23, 'tmax' => 24, 'F' => 25, 'LmLoo' => 26, 'unsexedRef' => 27, 'Locality' => 28, 'GrowthEnviron' => 29, 'Temperature' => 30, 'DeltaT' => 31, 'TempRef' => 32, 'Comment' => 33, 'Entered' => 34, 'DateEntered' => 35, 'Modified' => 36, 'DateModified' => 37, 'Expert' => 38, 'DateChecked' => 39, 'TS' => 40, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
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
        $toNames = PopRmPeer::getFieldNames($toType);
        $key = isset(PopRmPeer::$fieldKeys[$fromType][$name]) ? PopRmPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PopRmPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PopRmPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PopRmPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PopRmPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PopRmPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PopRmPeer::AUTOCTR);
            $criteria->addSelectColumn(PopRmPeer::STOCKCODE);
            $criteria->addSelectColumn(PopRmPeer::SPECCODE);
            $criteria->addSelectColumn(PopRmPeer::POPRMREF);
            $criteria->addSelectColumn(PopRmPeer::DATA);
            $criteria->addSelectColumn(PopRmPeer::DATASOURCEREF);
            $criteria->addSelectColumn(PopRmPeer::RM);
            $criteria->addSelectColumn(PopRmPeer::LOO);
            $criteria->addSelectColumn(PopRmPeer::TLINFINITY);
            $criteria->addSelectColumn(PopRmPeer::K);
            $criteria->addSelectColumn(PopRmPeer::TYPE);
            $criteria->addSelectColumn(PopRmPeer::METHODRM);
            $criteria->addSelectColumn(PopRmPeer::WINFINITY);
            $criteria->addSelectColumn(PopRmPeer::WM);
            $criteria->addSelectColumn(PopRmPeer::LINFLMAX);
            $criteria->addSelectColumn(PopRmPeer::RELIABILITY);
            $criteria->addSelectColumn(PopRmPeer::LOGA);
            $criteria->addSelectColumn(PopRmPeer::B);
            $criteria->addSelectColumn(PopRmPeer::M);
            $criteria->addSelectColumn(PopRmPeer::METHODM);
            $criteria->addSelectColumn(PopRmPeer::MREF);
            $criteria->addSelectColumn(PopRmPeer::TM);
            $criteria->addSelectColumn(PopRmPeer::LM);
            $criteria->addSelectColumn(PopRmPeer::TYPELM);
            $criteria->addSelectColumn(PopRmPeer::TMAX);
            $criteria->addSelectColumn(PopRmPeer::F);
            $criteria->addSelectColumn(PopRmPeer::LMLOO);
            $criteria->addSelectColumn(PopRmPeer::UNSEXEDREF);
            $criteria->addSelectColumn(PopRmPeer::LOCALITY);
            $criteria->addSelectColumn(PopRmPeer::GROWTHENVIRON);
            $criteria->addSelectColumn(PopRmPeer::TEMPERATURE);
            $criteria->addSelectColumn(PopRmPeer::DELTAT);
            $criteria->addSelectColumn(PopRmPeer::TEMPREF);
            $criteria->addSelectColumn(PopRmPeer::COMMENT);
            $criteria->addSelectColumn(PopRmPeer::ENTERED);
            $criteria->addSelectColumn(PopRmPeer::DATEENTERED);
            $criteria->addSelectColumn(PopRmPeer::MODIFIED);
            $criteria->addSelectColumn(PopRmPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PopRmPeer::EXPERT);
            $criteria->addSelectColumn(PopRmPeer::DATECHECKED);
            $criteria->addSelectColumn(PopRmPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.PopRMRef');
            $criteria->addSelectColumn($alias . '.Data');
            $criteria->addSelectColumn($alias . '.DataSourceRef');
            $criteria->addSelectColumn($alias . '.rm');
            $criteria->addSelectColumn($alias . '.Loo');
            $criteria->addSelectColumn($alias . '.TLinfinity');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.Methodrm');
            $criteria->addSelectColumn($alias . '.Winfinity');
            $criteria->addSelectColumn($alias . '.Wm');
            $criteria->addSelectColumn($alias . '.LinfLmax');
            $criteria->addSelectColumn($alias . '.Reliability');
            $criteria->addSelectColumn($alias . '.loga');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.M');
            $criteria->addSelectColumn($alias . '.MethodM');
            $criteria->addSelectColumn($alias . '.MRef');
            $criteria->addSelectColumn($alias . '.tm');
            $criteria->addSelectColumn($alias . '.Lm');
            $criteria->addSelectColumn($alias . '.TypeLm');
            $criteria->addSelectColumn($alias . '.tmax');
            $criteria->addSelectColumn($alias . '.F');
            $criteria->addSelectColumn($alias . '.LmLoo');
            $criteria->addSelectColumn($alias . '.unsexedRef');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.GrowthEnviron');
            $criteria->addSelectColumn($alias . '.Temperature');
            $criteria->addSelectColumn($alias . '.DeltaT');
            $criteria->addSelectColumn($alias . '.TempRef');
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
        $criteria->setPrimaryTableName(PopRmPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PopRmPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PopRmPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return PopRm
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PopRmPeer::doSelect($critcopy, $con);
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
        return PopRmPeer::populateObjects(PopRmPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PopRmPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PopRmPeer::DATABASE_NAME);

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
     * @param PopRm $obj A PopRm object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PopRmPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A PopRm object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PopRm) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PopRm object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PopRmPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return PopRm Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PopRmPeer::$instances[$key])) {
                return PopRmPeer::$instances[$key];
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
        foreach (PopRmPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PopRmPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pop_rm
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
        $cls = PopRmPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PopRmPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PopRmPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PopRmPeer::addInstanceToPool($obj, $key);
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
     * @return array (PopRm object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PopRmPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PopRmPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PopRmPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PopRmPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PopRmPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PopRmPeer::DATABASE_NAME)->getTable(PopRmPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePopRmPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePopRmPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PopRmTableMap());
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
        return PopRmPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PopRm or Criteria object.
     *
     * @param      mixed $values Criteria or PopRm object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PopRm object
        }

        if ($criteria->containsKey(PopRmPeer::AUTOCTR) && $criteria->keyContainsValue(PopRmPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PopRmPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PopRmPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a PopRm or Criteria object.
     *
     * @param      mixed $values Criteria or PopRm object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PopRmPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PopRmPeer::AUTOCTR);
            $value = $criteria->remove(PopRmPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PopRmPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopRmPeer::TABLE_NAME);
            }

        } else { // $values is PopRm object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PopRmPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pop_rm table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PopRmPeer::TABLE_NAME, $con, PopRmPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PopRmPeer::clearInstancePool();
            PopRmPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PopRm or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PopRm object or primary key or array of primary keys
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
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PopRmPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PopRm) { // it's a model object
            // invalidate the cache for this single object
            PopRmPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PopRmPeer::DATABASE_NAME);
            $criteria->add(PopRmPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PopRmPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PopRmPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PopRmPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PopRm object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param PopRm $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PopRmPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PopRmPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PopRmPeer::DATABASE_NAME, PopRmPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PopRm
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PopRmPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PopRmPeer::DATABASE_NAME);
        $criteria->add(PopRmPeer::AUTOCTR, $pk);

        $v = PopRmPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PopRm[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PopRmPeer::DATABASE_NAME);
            $criteria->add(PopRmPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PopRmPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePopRmPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePopRmPeer::buildTableMap();

