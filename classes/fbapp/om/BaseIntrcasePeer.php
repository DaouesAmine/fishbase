<?php


/**
 * Base static class for performing query and update operations on the 'intrcase' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseIntrcasePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'intrcase';

    /** the related Propel class for this table */
    const OM_CLASS = 'Intrcase';

    /** the related TableMap class for this table */
    const TM_CLASS = 'IntrcaseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 43;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 43;

    /** the column name for the autoctr field */
    const AUTOCTR = 'intrcase.autoctr';

    /** the column name for the IntrCaseRefNo field */
    const INTRCASEREFNO = 'intrcase.IntrCaseRefNo';

    /** the column name for the StockCode field */
    const STOCKCODE = 'intrcase.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'intrcase.SpecCode';

    /** the column name for the Year field */
    const YEAR = 'intrcase.Year';

    /** the column name for the RangeMin field */
    const RANGEMIN = 'intrcase.RangeMin';

    /** the column name for the RangeMax field */
    const RANGEMAX = 'intrcase.RangeMax';

    /** the column name for the Period field */
    const PERIOD = 'intrcase.Period';

    /** the column name for the PeriodOrder field */
    const PERIODORDER = 'intrcase.PeriodOrder';

    /** the column name for the TO field */
    const TO = 'intrcase.TO';

    /** the column name for the C_Code_To field */
    const C_CODE_TO = 'intrcase.C_Code_To';

    /** the column name for the Area_To field */
    const AREA_TO = 'intrcase.Area_To';

    /** the column name for the From field */
    const FROM = 'intrcase.From';

    /** the column name for the C_Code_From field */
    const C_CODE_FROM = 'intrcase.C_Code_From';

    /** the column name for the Area_From field */
    const AREA_FROM = 'intrcase.Area_From';

    /** the column name for the Reason field */
    const REASON = 'intrcase.Reason';

    /** the column name for the OtherReason field */
    const OTHERREASON = 'intrcase.OtherReason';

    /** the column name for the OtherReason2 field */
    const OTHERREASON2 = 'intrcase.OtherReason2';

    /** the column name for the ReasonOrder field */
    const REASONORDER = 'intrcase.ReasonOrder';

    /** the column name for the Introducer field */
    const INTRODUCER = 'intrcase.Introducer';

    /** the column name for the Estabwild field */
    const ESTABWILD = 'intrcase.Estabwild';

    /** the column name for the EstabType field */
    const ESTABTYPE = 'intrcase.EstabType';

    /** the column name for the EstabAqua field */
    const ESTABAQUA = 'intrcase.EstabAqua';

    /** the column name for the ComAqua field */
    const COMAQUA = 'intrcase.ComAqua';

    /** the column name for the ReproMode field */
    const REPROMODE = 'intrcase.ReproMode';

    /** the column name for the EcolEff field */
    const ECOLEFF = 'intrcase.EcolEff';

    /** the column name for the EcolEffType field */
    const ECOLEFFTYPE = 'intrcase.EcolEffType';

    /** the column name for the Impacts field */
    const IMPACTS = 'intrcase.Impacts';

    /** the column name for the SocioEff field */
    const SOCIOEFF = 'intrcase.SocioEff';

    /** the column name for the SocioEffType field */
    const SOCIOEFFTYPE = 'intrcase.SocioEffType';

    /** the column name for the IntrSourceRef field */
    const INTRSOURCEREF = 'intrcase.IntrSourceRef';

    /** the column name for the RecordSource field */
    const RECORDSOURCE = 'intrcase.RecordSource';

    /** the column name for the Invasive field */
    const INVASIVE = 'intrcase.Invasive';

    /** the column name for the InvasiveRef field */
    const INVASIVEREF = 'intrcase.InvasiveRef';

    /** the column name for the Entered field */
    const ENTERED = 'intrcase.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'intrcase.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'intrcase.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'intrcase.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'intrcase.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'intrcase.DateChecked';

    /** the column name for the Comments field */
    const COMMENTS = 'intrcase.Comments';

    /** the column name for the Remarks field */
    const REMARKS = 'intrcase.Remarks';

    /** the column name for the TS field */
    const TS = 'intrcase.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Intrcase objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Intrcase[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. IntrcasePeer::$fieldNames[IntrcasePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Intrcaserefno', 'Stockcode', 'Speccode', 'Year', 'Rangemin', 'Rangemax', 'Period', 'Periodorder', 'To', 'CCodeTo', 'AreaTo', 'From', 'CCodeFrom', 'AreaFrom', 'Reason', 'Otherreason', 'Otherreason2', 'Reasonorder', 'Introducer', 'Estabwild', 'Estabtype', 'Estabaqua', 'Comaqua', 'Repromode', 'Ecoleff', 'Ecolefftype', 'Impacts', 'Socioeff', 'Socioefftype', 'Intrsourceref', 'Recordsource', 'Invasive', 'Invasiveref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Comments', 'Remarks', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'intrcaserefno', 'stockcode', 'speccode', 'year', 'rangemin', 'rangemax', 'period', 'periodorder', 'to', 'cCodeTo', 'areaTo', 'from', 'cCodeFrom', 'areaFrom', 'reason', 'otherreason', 'otherreason2', 'reasonorder', 'introducer', 'estabwild', 'estabtype', 'estabaqua', 'comaqua', 'repromode', 'ecoleff', 'ecolefftype', 'impacts', 'socioeff', 'socioefftype', 'intrsourceref', 'recordsource', 'invasive', 'invasiveref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'comments', 'remarks', 'ts', ),
        BasePeer::TYPE_COLNAME => array (IntrcasePeer::AUTOCTR, IntrcasePeer::INTRCASEREFNO, IntrcasePeer::STOCKCODE, IntrcasePeer::SPECCODE, IntrcasePeer::YEAR, IntrcasePeer::RANGEMIN, IntrcasePeer::RANGEMAX, IntrcasePeer::PERIOD, IntrcasePeer::PERIODORDER, IntrcasePeer::TO, IntrcasePeer::C_CODE_TO, IntrcasePeer::AREA_TO, IntrcasePeer::FROM, IntrcasePeer::C_CODE_FROM, IntrcasePeer::AREA_FROM, IntrcasePeer::REASON, IntrcasePeer::OTHERREASON, IntrcasePeer::OTHERREASON2, IntrcasePeer::REASONORDER, IntrcasePeer::INTRODUCER, IntrcasePeer::ESTABWILD, IntrcasePeer::ESTABTYPE, IntrcasePeer::ESTABAQUA, IntrcasePeer::COMAQUA, IntrcasePeer::REPROMODE, IntrcasePeer::ECOLEFF, IntrcasePeer::ECOLEFFTYPE, IntrcasePeer::IMPACTS, IntrcasePeer::SOCIOEFF, IntrcasePeer::SOCIOEFFTYPE, IntrcasePeer::INTRSOURCEREF, IntrcasePeer::RECORDSOURCE, IntrcasePeer::INVASIVE, IntrcasePeer::INVASIVEREF, IntrcasePeer::ENTERED, IntrcasePeer::DATEENTERED, IntrcasePeer::MODIFIED, IntrcasePeer::DATEMODIFIED, IntrcasePeer::EXPERT, IntrcasePeer::DATECHECKED, IntrcasePeer::COMMENTS, IntrcasePeer::REMARKS, IntrcasePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'INTRCASEREFNO', 'STOCKCODE', 'SPECCODE', 'YEAR', 'RANGEMIN', 'RANGEMAX', 'PERIOD', 'PERIODORDER', 'TO', 'C_CODE_TO', 'AREA_TO', 'FROM', 'C_CODE_FROM', 'AREA_FROM', 'REASON', 'OTHERREASON', 'OTHERREASON2', 'REASONORDER', 'INTRODUCER', 'ESTABWILD', 'ESTABTYPE', 'ESTABAQUA', 'COMAQUA', 'REPROMODE', 'ECOLEFF', 'ECOLEFFTYPE', 'IMPACTS', 'SOCIOEFF', 'SOCIOEFFTYPE', 'INTRSOURCEREF', 'RECORDSOURCE', 'INVASIVE', 'INVASIVEREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'COMMENTS', 'REMARKS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'IntrCaseRefNo', 'StockCode', 'SpecCode', 'Year', 'RangeMin', 'RangeMax', 'Period', 'PeriodOrder', 'TO', 'C_Code_To', 'Area_To', 'From', 'C_Code_From', 'Area_From', 'Reason', 'OtherReason', 'OtherReason2', 'ReasonOrder', 'Introducer', 'Estabwild', 'EstabType', 'EstabAqua', 'ComAqua', 'ReproMode', 'EcolEff', 'EcolEffType', 'Impacts', 'SocioEff', 'SocioEffType', 'IntrSourceRef', 'RecordSource', 'Invasive', 'InvasiveRef', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Comments', 'Remarks', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. IntrcasePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Intrcaserefno' => 1, 'Stockcode' => 2, 'Speccode' => 3, 'Year' => 4, 'Rangemin' => 5, 'Rangemax' => 6, 'Period' => 7, 'Periodorder' => 8, 'To' => 9, 'CCodeTo' => 10, 'AreaTo' => 11, 'From' => 12, 'CCodeFrom' => 13, 'AreaFrom' => 14, 'Reason' => 15, 'Otherreason' => 16, 'Otherreason2' => 17, 'Reasonorder' => 18, 'Introducer' => 19, 'Estabwild' => 20, 'Estabtype' => 21, 'Estabaqua' => 22, 'Comaqua' => 23, 'Repromode' => 24, 'Ecoleff' => 25, 'Ecolefftype' => 26, 'Impacts' => 27, 'Socioeff' => 28, 'Socioefftype' => 29, 'Intrsourceref' => 30, 'Recordsource' => 31, 'Invasive' => 32, 'Invasiveref' => 33, 'Entered' => 34, 'Dateentered' => 35, 'Modified' => 36, 'Datemodified' => 37, 'Expert' => 38, 'Datechecked' => 39, 'Comments' => 40, 'Remarks' => 41, 'Ts' => 42, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'intrcaserefno' => 1, 'stockcode' => 2, 'speccode' => 3, 'year' => 4, 'rangemin' => 5, 'rangemax' => 6, 'period' => 7, 'periodorder' => 8, 'to' => 9, 'cCodeTo' => 10, 'areaTo' => 11, 'from' => 12, 'cCodeFrom' => 13, 'areaFrom' => 14, 'reason' => 15, 'otherreason' => 16, 'otherreason2' => 17, 'reasonorder' => 18, 'introducer' => 19, 'estabwild' => 20, 'estabtype' => 21, 'estabaqua' => 22, 'comaqua' => 23, 'repromode' => 24, 'ecoleff' => 25, 'ecolefftype' => 26, 'impacts' => 27, 'socioeff' => 28, 'socioefftype' => 29, 'intrsourceref' => 30, 'recordsource' => 31, 'invasive' => 32, 'invasiveref' => 33, 'entered' => 34, 'dateentered' => 35, 'modified' => 36, 'datemodified' => 37, 'expert' => 38, 'datechecked' => 39, 'comments' => 40, 'remarks' => 41, 'ts' => 42, ),
        BasePeer::TYPE_COLNAME => array (IntrcasePeer::AUTOCTR => 0, IntrcasePeer::INTRCASEREFNO => 1, IntrcasePeer::STOCKCODE => 2, IntrcasePeer::SPECCODE => 3, IntrcasePeer::YEAR => 4, IntrcasePeer::RANGEMIN => 5, IntrcasePeer::RANGEMAX => 6, IntrcasePeer::PERIOD => 7, IntrcasePeer::PERIODORDER => 8, IntrcasePeer::TO => 9, IntrcasePeer::C_CODE_TO => 10, IntrcasePeer::AREA_TO => 11, IntrcasePeer::FROM => 12, IntrcasePeer::C_CODE_FROM => 13, IntrcasePeer::AREA_FROM => 14, IntrcasePeer::REASON => 15, IntrcasePeer::OTHERREASON => 16, IntrcasePeer::OTHERREASON2 => 17, IntrcasePeer::REASONORDER => 18, IntrcasePeer::INTRODUCER => 19, IntrcasePeer::ESTABWILD => 20, IntrcasePeer::ESTABTYPE => 21, IntrcasePeer::ESTABAQUA => 22, IntrcasePeer::COMAQUA => 23, IntrcasePeer::REPROMODE => 24, IntrcasePeer::ECOLEFF => 25, IntrcasePeer::ECOLEFFTYPE => 26, IntrcasePeer::IMPACTS => 27, IntrcasePeer::SOCIOEFF => 28, IntrcasePeer::SOCIOEFFTYPE => 29, IntrcasePeer::INTRSOURCEREF => 30, IntrcasePeer::RECORDSOURCE => 31, IntrcasePeer::INVASIVE => 32, IntrcasePeer::INVASIVEREF => 33, IntrcasePeer::ENTERED => 34, IntrcasePeer::DATEENTERED => 35, IntrcasePeer::MODIFIED => 36, IntrcasePeer::DATEMODIFIED => 37, IntrcasePeer::EXPERT => 38, IntrcasePeer::DATECHECKED => 39, IntrcasePeer::COMMENTS => 40, IntrcasePeer::REMARKS => 41, IntrcasePeer::TS => 42, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'INTRCASEREFNO' => 1, 'STOCKCODE' => 2, 'SPECCODE' => 3, 'YEAR' => 4, 'RANGEMIN' => 5, 'RANGEMAX' => 6, 'PERIOD' => 7, 'PERIODORDER' => 8, 'TO' => 9, 'C_CODE_TO' => 10, 'AREA_TO' => 11, 'FROM' => 12, 'C_CODE_FROM' => 13, 'AREA_FROM' => 14, 'REASON' => 15, 'OTHERREASON' => 16, 'OTHERREASON2' => 17, 'REASONORDER' => 18, 'INTRODUCER' => 19, 'ESTABWILD' => 20, 'ESTABTYPE' => 21, 'ESTABAQUA' => 22, 'COMAQUA' => 23, 'REPROMODE' => 24, 'ECOLEFF' => 25, 'ECOLEFFTYPE' => 26, 'IMPACTS' => 27, 'SOCIOEFF' => 28, 'SOCIOEFFTYPE' => 29, 'INTRSOURCEREF' => 30, 'RECORDSOURCE' => 31, 'INVASIVE' => 32, 'INVASIVEREF' => 33, 'ENTERED' => 34, 'DATEENTERED' => 35, 'MODIFIED' => 36, 'DATEMODIFIED' => 37, 'EXPERT' => 38, 'DATECHECKED' => 39, 'COMMENTS' => 40, 'REMARKS' => 41, 'TS' => 42, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'IntrCaseRefNo' => 1, 'StockCode' => 2, 'SpecCode' => 3, 'Year' => 4, 'RangeMin' => 5, 'RangeMax' => 6, 'Period' => 7, 'PeriodOrder' => 8, 'TO' => 9, 'C_Code_To' => 10, 'Area_To' => 11, 'From' => 12, 'C_Code_From' => 13, 'Area_From' => 14, 'Reason' => 15, 'OtherReason' => 16, 'OtherReason2' => 17, 'ReasonOrder' => 18, 'Introducer' => 19, 'Estabwild' => 20, 'EstabType' => 21, 'EstabAqua' => 22, 'ComAqua' => 23, 'ReproMode' => 24, 'EcolEff' => 25, 'EcolEffType' => 26, 'Impacts' => 27, 'SocioEff' => 28, 'SocioEffType' => 29, 'IntrSourceRef' => 30, 'RecordSource' => 31, 'Invasive' => 32, 'InvasiveRef' => 33, 'Entered' => 34, 'DateEntered' => 35, 'Modified' => 36, 'DateModified' => 37, 'Expert' => 38, 'DateChecked' => 39, 'Comments' => 40, 'Remarks' => 41, 'TS' => 42, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
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
        $toNames = IntrcasePeer::getFieldNames($toType);
        $key = isset(IntrcasePeer::$fieldKeys[$fromType][$name]) ? IntrcasePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(IntrcasePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, IntrcasePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return IntrcasePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. IntrcasePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(IntrcasePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(IntrcasePeer::AUTOCTR);
            $criteria->addSelectColumn(IntrcasePeer::INTRCASEREFNO);
            $criteria->addSelectColumn(IntrcasePeer::STOCKCODE);
            $criteria->addSelectColumn(IntrcasePeer::SPECCODE);
            $criteria->addSelectColumn(IntrcasePeer::YEAR);
            $criteria->addSelectColumn(IntrcasePeer::RANGEMIN);
            $criteria->addSelectColumn(IntrcasePeer::RANGEMAX);
            $criteria->addSelectColumn(IntrcasePeer::PERIOD);
            $criteria->addSelectColumn(IntrcasePeer::PERIODORDER);
            $criteria->addSelectColumn(IntrcasePeer::TO);
            $criteria->addSelectColumn(IntrcasePeer::C_CODE_TO);
            $criteria->addSelectColumn(IntrcasePeer::AREA_TO);
            $criteria->addSelectColumn(IntrcasePeer::FROM);
            $criteria->addSelectColumn(IntrcasePeer::C_CODE_FROM);
            $criteria->addSelectColumn(IntrcasePeer::AREA_FROM);
            $criteria->addSelectColumn(IntrcasePeer::REASON);
            $criteria->addSelectColumn(IntrcasePeer::OTHERREASON);
            $criteria->addSelectColumn(IntrcasePeer::OTHERREASON2);
            $criteria->addSelectColumn(IntrcasePeer::REASONORDER);
            $criteria->addSelectColumn(IntrcasePeer::INTRODUCER);
            $criteria->addSelectColumn(IntrcasePeer::ESTABWILD);
            $criteria->addSelectColumn(IntrcasePeer::ESTABTYPE);
            $criteria->addSelectColumn(IntrcasePeer::ESTABAQUA);
            $criteria->addSelectColumn(IntrcasePeer::COMAQUA);
            $criteria->addSelectColumn(IntrcasePeer::REPROMODE);
            $criteria->addSelectColumn(IntrcasePeer::ECOLEFF);
            $criteria->addSelectColumn(IntrcasePeer::ECOLEFFTYPE);
            $criteria->addSelectColumn(IntrcasePeer::IMPACTS);
            $criteria->addSelectColumn(IntrcasePeer::SOCIOEFF);
            $criteria->addSelectColumn(IntrcasePeer::SOCIOEFFTYPE);
            $criteria->addSelectColumn(IntrcasePeer::INTRSOURCEREF);
            $criteria->addSelectColumn(IntrcasePeer::RECORDSOURCE);
            $criteria->addSelectColumn(IntrcasePeer::INVASIVE);
            $criteria->addSelectColumn(IntrcasePeer::INVASIVEREF);
            $criteria->addSelectColumn(IntrcasePeer::ENTERED);
            $criteria->addSelectColumn(IntrcasePeer::DATEENTERED);
            $criteria->addSelectColumn(IntrcasePeer::MODIFIED);
            $criteria->addSelectColumn(IntrcasePeer::DATEMODIFIED);
            $criteria->addSelectColumn(IntrcasePeer::EXPERT);
            $criteria->addSelectColumn(IntrcasePeer::DATECHECKED);
            $criteria->addSelectColumn(IntrcasePeer::COMMENTS);
            $criteria->addSelectColumn(IntrcasePeer::REMARKS);
            $criteria->addSelectColumn(IntrcasePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.IntrCaseRefNo');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.RangeMin');
            $criteria->addSelectColumn($alias . '.RangeMax');
            $criteria->addSelectColumn($alias . '.Period');
            $criteria->addSelectColumn($alias . '.PeriodOrder');
            $criteria->addSelectColumn($alias . '.TO');
            $criteria->addSelectColumn($alias . '.C_Code_To');
            $criteria->addSelectColumn($alias . '.Area_To');
            $criteria->addSelectColumn($alias . '.From');
            $criteria->addSelectColumn($alias . '.C_Code_From');
            $criteria->addSelectColumn($alias . '.Area_From');
            $criteria->addSelectColumn($alias . '.Reason');
            $criteria->addSelectColumn($alias . '.OtherReason');
            $criteria->addSelectColumn($alias . '.OtherReason2');
            $criteria->addSelectColumn($alias . '.ReasonOrder');
            $criteria->addSelectColumn($alias . '.Introducer');
            $criteria->addSelectColumn($alias . '.Estabwild');
            $criteria->addSelectColumn($alias . '.EstabType');
            $criteria->addSelectColumn($alias . '.EstabAqua');
            $criteria->addSelectColumn($alias . '.ComAqua');
            $criteria->addSelectColumn($alias . '.ReproMode');
            $criteria->addSelectColumn($alias . '.EcolEff');
            $criteria->addSelectColumn($alias . '.EcolEffType');
            $criteria->addSelectColumn($alias . '.Impacts');
            $criteria->addSelectColumn($alias . '.SocioEff');
            $criteria->addSelectColumn($alias . '.SocioEffType');
            $criteria->addSelectColumn($alias . '.IntrSourceRef');
            $criteria->addSelectColumn($alias . '.RecordSource');
            $criteria->addSelectColumn($alias . '.Invasive');
            $criteria->addSelectColumn($alias . '.InvasiveRef');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Remarks');
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
        $criteria->setPrimaryTableName(IntrcasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IntrcasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(IntrcasePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Intrcase
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = IntrcasePeer::doSelect($critcopy, $con);
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
        return IntrcasePeer::populateObjects(IntrcasePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            IntrcasePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(IntrcasePeer::DATABASE_NAME);

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
     * @param Intrcase $obj A Intrcase object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getPeriod(), (string) $obj->getCCodeTo(), (string) $obj->getFrom()));
            } // if key === null
            IntrcasePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Intrcase object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Intrcase) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getPeriod(), (string) $value->getCCodeTo(), (string) $value->getFrom()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Intrcase object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(IntrcasePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Intrcase Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(IntrcasePeer::$instances[$key])) {
                return IntrcasePeer::$instances[$key];
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
        foreach (IntrcasePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        IntrcasePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to intrcase
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
        if ($row[$startcol + 2] === null && $row[$startcol + 7] === null && $row[$startcol + 10] === null && $row[$startcol + 12] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 7], (string) $row[$startcol + 10], (string) $row[$startcol + 12]));
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

        return array((int) $row[$startcol + 2], (string) $row[$startcol + 7], (string) $row[$startcol + 10], (string) $row[$startcol + 12]);
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
        $cls = IntrcasePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = IntrcasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = IntrcasePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                IntrcasePeer::addInstanceToPool($obj, $key);
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
     * @return array (Intrcase object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = IntrcasePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = IntrcasePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + IntrcasePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = IntrcasePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            IntrcasePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(IntrcasePeer::DATABASE_NAME)->getTable(IntrcasePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseIntrcasePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseIntrcasePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \IntrcaseTableMap());
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
        return IntrcasePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Intrcase or Criteria object.
     *
     * @param      mixed $values Criteria or Intrcase object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Intrcase object
        }


        // Set the correct dbName
        $criteria->setDbName(IntrcasePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Intrcase or Criteria object.
     *
     * @param      mixed $values Criteria or Intrcase object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(IntrcasePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(IntrcasePeer::STOCKCODE);
            $value = $criteria->remove(IntrcasePeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(IntrcasePeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IntrcasePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(IntrcasePeer::PERIOD);
            $value = $criteria->remove(IntrcasePeer::PERIOD);
            if ($value) {
                $selectCriteria->add(IntrcasePeer::PERIOD, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IntrcasePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(IntrcasePeer::C_CODE_TO);
            $value = $criteria->remove(IntrcasePeer::C_CODE_TO);
            if ($value) {
                $selectCriteria->add(IntrcasePeer::C_CODE_TO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IntrcasePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(IntrcasePeer::FROM);
            $value = $criteria->remove(IntrcasePeer::FROM);
            if ($value) {
                $selectCriteria->add(IntrcasePeer::FROM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IntrcasePeer::TABLE_NAME);
            }

        } else { // $values is Intrcase object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(IntrcasePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the intrcase table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(IntrcasePeer::TABLE_NAME, $con, IntrcasePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            IntrcasePeer::clearInstancePool();
            IntrcasePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Intrcase or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Intrcase object or primary key or array of primary keys
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
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            IntrcasePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Intrcase) { // it's a model object
            // invalidate the cache for this single object
            IntrcasePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(IntrcasePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(IntrcasePeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(IntrcasePeer::PERIOD, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(IntrcasePeer::C_CODE_TO, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(IntrcasePeer::FROM, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                IntrcasePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(IntrcasePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            IntrcasePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Intrcase object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Intrcase $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(IntrcasePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(IntrcasePeer::TABLE_NAME);

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

        return BasePeer::doValidate(IntrcasePeer::DATABASE_NAME, IntrcasePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $period
     * @param   string $c_code_to
     * @param   string $from
     * @param      PropelPDO $con
     * @return Intrcase
     */
    public static function retrieveByPK($stockcode, $period, $c_code_to, $from, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $period, (string) $c_code_to, (string) $from));
         if (null !== ($obj = IntrcasePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(IntrcasePeer::DATABASE_NAME);
        $criteria->add(IntrcasePeer::STOCKCODE, $stockcode);
        $criteria->add(IntrcasePeer::PERIOD, $period);
        $criteria->add(IntrcasePeer::C_CODE_TO, $c_code_to);
        $criteria->add(IntrcasePeer::FROM, $from);
        $v = IntrcasePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseIntrcasePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseIntrcasePeer::buildTableMap();

