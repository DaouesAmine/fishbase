<?php


/**
 * Base static class for performing query and update operations on the 'diet' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseDietPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'diet';

    /** the related Propel class for this table */
    const OM_CLASS = 'Diet';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DietTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 40;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 40;

    /** the column name for the DietCode field */
    const DIETCODE = 'diet.DietCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'diet.StockCode';

    /** the column name for the Speccode field */
    const SPECCODE = 'diet.Speccode';

    /** the column name for the DietRefNo field */
    const DIETREFNO = 'diet.DietRefNo';

    /** the column name for the SampleStage field */
    const SAMPLESTAGE = 'diet.SampleStage';

    /** the column name for the SampleSize field */
    const SAMPLESIZE = 'diet.SampleSize';

    /** the column name for the YearStart field */
    const YEARSTART = 'diet.YearStart';

    /** the column name for the YearEnd field */
    const YEAREND = 'diet.YearEnd';

    /** the column name for the January field */
    const JANUARY = 'diet.January';

    /** the column name for the February field */
    const FEBRUARY = 'diet.February';

    /** the column name for the March field */
    const MARCH = 'diet.March';

    /** the column name for the April field */
    const APRIL = 'diet.April';

    /** the column name for the May field */
    const MAY = 'diet.May';

    /** the column name for the June field */
    const JUNE = 'diet.June';

    /** the column name for the July field */
    const JULY = 'diet.July';

    /** the column name for the August field */
    const AUGUST = 'diet.August';

    /** the column name for the September field */
    const SEPTEMBER = 'diet.September';

    /** the column name for the October field */
    const OCTOBER = 'diet.October';

    /** the column name for the November field */
    const NOVEMBER = 'diet.November';

    /** the column name for the December field */
    const DECEMBER = 'diet.December';

    /** the column name for the C_Code field */
    const C_CODE = 'diet.C_Code';

    /** the column name for the Locality field */
    const LOCALITY = 'diet.Locality';

    /** the column name for the E_Code field */
    const E_CODE = 'diet.E_Code';

    /** the column name for the Method field */
    const METHOD = 'diet.Method';

    /** the column name for the MethodType field */
    const METHODTYPE = 'diet.MethodType';

    /** the column name for the Remark field */
    const REMARK = 'diet.Remark';

    /** the column name for the OtherItems field */
    const OTHERITEMS = 'diet.OtherItems';

    /** the column name for the PercentEmpty field */
    const PERCENTEMPTY = 'diet.PercentEmpty';

    /** the column name for the Troph field */
    const TROPH = 'diet.Troph';

    /** the column name for the seTroph field */
    const SETROPH = 'diet.seTroph';

    /** the column name for the SizeMin field */
    const SIZEMIN = 'diet.SizeMin';

    /** the column name for the SizeMax field */
    const SIZEMAX = 'diet.SizeMax';

    /** the column name for the SizeType field */
    const SIZETYPE = 'diet.SizeType';

    /** the column name for the FishLength field */
    const FISHLENGTH = 'diet.FishLength';

    /** the column name for the Entered field */
    const ENTERED = 'diet.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'diet.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'diet.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'diet.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'diet.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'diet.DateChecked';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Diet objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Diet[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DietPeer::$fieldNames[DietPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Dietcode', 'Stockcode', 'Speccode', 'Dietrefno', 'Samplestage', 'Samplesize', 'Yearstart', 'Yearend', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'CCode', 'Locality', 'ECode', 'Method', 'Methodtype', 'Remark', 'Otheritems', 'Percentempty', 'Troph', 'Setroph', 'Sizemin', 'Sizemax', 'Sizetype', 'Fishlength', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('dietcode', 'stockcode', 'speccode', 'dietrefno', 'samplestage', 'samplesize', 'yearstart', 'yearend', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', 'cCode', 'locality', 'eCode', 'method', 'methodtype', 'remark', 'otheritems', 'percentempty', 'troph', 'setroph', 'sizemin', 'sizemax', 'sizetype', 'fishlength', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', ),
        BasePeer::TYPE_COLNAME => array (DietPeer::DIETCODE, DietPeer::STOCKCODE, DietPeer::SPECCODE, DietPeer::DIETREFNO, DietPeer::SAMPLESTAGE, DietPeer::SAMPLESIZE, DietPeer::YEARSTART, DietPeer::YEAREND, DietPeer::JANUARY, DietPeer::FEBRUARY, DietPeer::MARCH, DietPeer::APRIL, DietPeer::MAY, DietPeer::JUNE, DietPeer::JULY, DietPeer::AUGUST, DietPeer::SEPTEMBER, DietPeer::OCTOBER, DietPeer::NOVEMBER, DietPeer::DECEMBER, DietPeer::C_CODE, DietPeer::LOCALITY, DietPeer::E_CODE, DietPeer::METHOD, DietPeer::METHODTYPE, DietPeer::REMARK, DietPeer::OTHERITEMS, DietPeer::PERCENTEMPTY, DietPeer::TROPH, DietPeer::SETROPH, DietPeer::SIZEMIN, DietPeer::SIZEMAX, DietPeer::SIZETYPE, DietPeer::FISHLENGTH, DietPeer::ENTERED, DietPeer::DATEENTERED, DietPeer::MODIFIED, DietPeer::DATEMODIFIED, DietPeer::EXPERT, DietPeer::DATECHECKED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('DIETCODE', 'STOCKCODE', 'SPECCODE', 'DIETREFNO', 'SAMPLESTAGE', 'SAMPLESIZE', 'YEARSTART', 'YEAREND', 'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER', 'C_CODE', 'LOCALITY', 'E_CODE', 'METHOD', 'METHODTYPE', 'REMARK', 'OTHERITEMS', 'PERCENTEMPTY', 'TROPH', 'SETROPH', 'SIZEMIN', 'SIZEMAX', 'SIZETYPE', 'FISHLENGTH', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', ),
        BasePeer::TYPE_FIELDNAME => array ('DietCode', 'StockCode', 'Speccode', 'DietRefNo', 'SampleStage', 'SampleSize', 'YearStart', 'YearEnd', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'C_Code', 'Locality', 'E_Code', 'Method', 'MethodType', 'Remark', 'OtherItems', 'PercentEmpty', 'Troph', 'seTroph', 'SizeMin', 'SizeMax', 'SizeType', 'FishLength', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DietPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Dietcode' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Dietrefno' => 3, 'Samplestage' => 4, 'Samplesize' => 5, 'Yearstart' => 6, 'Yearend' => 7, 'January' => 8, 'February' => 9, 'March' => 10, 'April' => 11, 'May' => 12, 'June' => 13, 'July' => 14, 'August' => 15, 'September' => 16, 'October' => 17, 'November' => 18, 'December' => 19, 'CCode' => 20, 'Locality' => 21, 'ECode' => 22, 'Method' => 23, 'Methodtype' => 24, 'Remark' => 25, 'Otheritems' => 26, 'Percentempty' => 27, 'Troph' => 28, 'Setroph' => 29, 'Sizemin' => 30, 'Sizemax' => 31, 'Sizetype' => 32, 'Fishlength' => 33, 'Entered' => 34, 'Dateentered' => 35, 'Modified' => 36, 'Datemodified' => 37, 'Expert' => 38, 'Datechecked' => 39, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('dietcode' => 0, 'stockcode' => 1, 'speccode' => 2, 'dietrefno' => 3, 'samplestage' => 4, 'samplesize' => 5, 'yearstart' => 6, 'yearend' => 7, 'january' => 8, 'february' => 9, 'march' => 10, 'april' => 11, 'may' => 12, 'june' => 13, 'july' => 14, 'august' => 15, 'september' => 16, 'october' => 17, 'november' => 18, 'december' => 19, 'cCode' => 20, 'locality' => 21, 'eCode' => 22, 'method' => 23, 'methodtype' => 24, 'remark' => 25, 'otheritems' => 26, 'percentempty' => 27, 'troph' => 28, 'setroph' => 29, 'sizemin' => 30, 'sizemax' => 31, 'sizetype' => 32, 'fishlength' => 33, 'entered' => 34, 'dateentered' => 35, 'modified' => 36, 'datemodified' => 37, 'expert' => 38, 'datechecked' => 39, ),
        BasePeer::TYPE_COLNAME => array (DietPeer::DIETCODE => 0, DietPeer::STOCKCODE => 1, DietPeer::SPECCODE => 2, DietPeer::DIETREFNO => 3, DietPeer::SAMPLESTAGE => 4, DietPeer::SAMPLESIZE => 5, DietPeer::YEARSTART => 6, DietPeer::YEAREND => 7, DietPeer::JANUARY => 8, DietPeer::FEBRUARY => 9, DietPeer::MARCH => 10, DietPeer::APRIL => 11, DietPeer::MAY => 12, DietPeer::JUNE => 13, DietPeer::JULY => 14, DietPeer::AUGUST => 15, DietPeer::SEPTEMBER => 16, DietPeer::OCTOBER => 17, DietPeer::NOVEMBER => 18, DietPeer::DECEMBER => 19, DietPeer::C_CODE => 20, DietPeer::LOCALITY => 21, DietPeer::E_CODE => 22, DietPeer::METHOD => 23, DietPeer::METHODTYPE => 24, DietPeer::REMARK => 25, DietPeer::OTHERITEMS => 26, DietPeer::PERCENTEMPTY => 27, DietPeer::TROPH => 28, DietPeer::SETROPH => 29, DietPeer::SIZEMIN => 30, DietPeer::SIZEMAX => 31, DietPeer::SIZETYPE => 32, DietPeer::FISHLENGTH => 33, DietPeer::ENTERED => 34, DietPeer::DATEENTERED => 35, DietPeer::MODIFIED => 36, DietPeer::DATEMODIFIED => 37, DietPeer::EXPERT => 38, DietPeer::DATECHECKED => 39, ),
        BasePeer::TYPE_RAW_COLNAME => array ('DIETCODE' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'DIETREFNO' => 3, 'SAMPLESTAGE' => 4, 'SAMPLESIZE' => 5, 'YEARSTART' => 6, 'YEAREND' => 7, 'JANUARY' => 8, 'FEBRUARY' => 9, 'MARCH' => 10, 'APRIL' => 11, 'MAY' => 12, 'JUNE' => 13, 'JULY' => 14, 'AUGUST' => 15, 'SEPTEMBER' => 16, 'OCTOBER' => 17, 'NOVEMBER' => 18, 'DECEMBER' => 19, 'C_CODE' => 20, 'LOCALITY' => 21, 'E_CODE' => 22, 'METHOD' => 23, 'METHODTYPE' => 24, 'REMARK' => 25, 'OTHERITEMS' => 26, 'PERCENTEMPTY' => 27, 'TROPH' => 28, 'SETROPH' => 29, 'SIZEMIN' => 30, 'SIZEMAX' => 31, 'SIZETYPE' => 32, 'FISHLENGTH' => 33, 'ENTERED' => 34, 'DATEENTERED' => 35, 'MODIFIED' => 36, 'DATEMODIFIED' => 37, 'EXPERT' => 38, 'DATECHECKED' => 39, ),
        BasePeer::TYPE_FIELDNAME => array ('DietCode' => 0, 'StockCode' => 1, 'Speccode' => 2, 'DietRefNo' => 3, 'SampleStage' => 4, 'SampleSize' => 5, 'YearStart' => 6, 'YearEnd' => 7, 'January' => 8, 'February' => 9, 'March' => 10, 'April' => 11, 'May' => 12, 'June' => 13, 'July' => 14, 'August' => 15, 'September' => 16, 'October' => 17, 'November' => 18, 'December' => 19, 'C_Code' => 20, 'Locality' => 21, 'E_Code' => 22, 'Method' => 23, 'MethodType' => 24, 'Remark' => 25, 'OtherItems' => 26, 'PercentEmpty' => 27, 'Troph' => 28, 'seTroph' => 29, 'SizeMin' => 30, 'SizeMax' => 31, 'SizeType' => 32, 'FishLength' => 33, 'Entered' => 34, 'DateEntered' => 35, 'Modified' => 36, 'DateModified' => 37, 'Expert' => 38, 'DateChecked' => 39, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, )
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
        $toNames = DietPeer::getFieldNames($toType);
        $key = isset(DietPeer::$fieldKeys[$fromType][$name]) ? DietPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DietPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DietPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DietPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DietPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DietPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DietPeer::DIETCODE);
            $criteria->addSelectColumn(DietPeer::STOCKCODE);
            $criteria->addSelectColumn(DietPeer::SPECCODE);
            $criteria->addSelectColumn(DietPeer::DIETREFNO);
            $criteria->addSelectColumn(DietPeer::SAMPLESTAGE);
            $criteria->addSelectColumn(DietPeer::SAMPLESIZE);
            $criteria->addSelectColumn(DietPeer::YEARSTART);
            $criteria->addSelectColumn(DietPeer::YEAREND);
            $criteria->addSelectColumn(DietPeer::JANUARY);
            $criteria->addSelectColumn(DietPeer::FEBRUARY);
            $criteria->addSelectColumn(DietPeer::MARCH);
            $criteria->addSelectColumn(DietPeer::APRIL);
            $criteria->addSelectColumn(DietPeer::MAY);
            $criteria->addSelectColumn(DietPeer::JUNE);
            $criteria->addSelectColumn(DietPeer::JULY);
            $criteria->addSelectColumn(DietPeer::AUGUST);
            $criteria->addSelectColumn(DietPeer::SEPTEMBER);
            $criteria->addSelectColumn(DietPeer::OCTOBER);
            $criteria->addSelectColumn(DietPeer::NOVEMBER);
            $criteria->addSelectColumn(DietPeer::DECEMBER);
            $criteria->addSelectColumn(DietPeer::C_CODE);
            $criteria->addSelectColumn(DietPeer::LOCALITY);
            $criteria->addSelectColumn(DietPeer::E_CODE);
            $criteria->addSelectColumn(DietPeer::METHOD);
            $criteria->addSelectColumn(DietPeer::METHODTYPE);
            $criteria->addSelectColumn(DietPeer::REMARK);
            $criteria->addSelectColumn(DietPeer::OTHERITEMS);
            $criteria->addSelectColumn(DietPeer::PERCENTEMPTY);
            $criteria->addSelectColumn(DietPeer::TROPH);
            $criteria->addSelectColumn(DietPeer::SETROPH);
            $criteria->addSelectColumn(DietPeer::SIZEMIN);
            $criteria->addSelectColumn(DietPeer::SIZEMAX);
            $criteria->addSelectColumn(DietPeer::SIZETYPE);
            $criteria->addSelectColumn(DietPeer::FISHLENGTH);
            $criteria->addSelectColumn(DietPeer::ENTERED);
            $criteria->addSelectColumn(DietPeer::DATEENTERED);
            $criteria->addSelectColumn(DietPeer::MODIFIED);
            $criteria->addSelectColumn(DietPeer::DATEMODIFIED);
            $criteria->addSelectColumn(DietPeer::EXPERT);
            $criteria->addSelectColumn(DietPeer::DATECHECKED);
        } else {
            $criteria->addSelectColumn($alias . '.DietCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.DietRefNo');
            $criteria->addSelectColumn($alias . '.SampleStage');
            $criteria->addSelectColumn($alias . '.SampleSize');
            $criteria->addSelectColumn($alias . '.YearStart');
            $criteria->addSelectColumn($alias . '.YearEnd');
            $criteria->addSelectColumn($alias . '.January');
            $criteria->addSelectColumn($alias . '.February');
            $criteria->addSelectColumn($alias . '.March');
            $criteria->addSelectColumn($alias . '.April');
            $criteria->addSelectColumn($alias . '.May');
            $criteria->addSelectColumn($alias . '.June');
            $criteria->addSelectColumn($alias . '.July');
            $criteria->addSelectColumn($alias . '.August');
            $criteria->addSelectColumn($alias . '.September');
            $criteria->addSelectColumn($alias . '.October');
            $criteria->addSelectColumn($alias . '.November');
            $criteria->addSelectColumn($alias . '.December');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.E_Code');
            $criteria->addSelectColumn($alias . '.Method');
            $criteria->addSelectColumn($alias . '.MethodType');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.OtherItems');
            $criteria->addSelectColumn($alias . '.PercentEmpty');
            $criteria->addSelectColumn($alias . '.Troph');
            $criteria->addSelectColumn($alias . '.seTroph');
            $criteria->addSelectColumn($alias . '.SizeMin');
            $criteria->addSelectColumn($alias . '.SizeMax');
            $criteria->addSelectColumn($alias . '.SizeType');
            $criteria->addSelectColumn($alias . '.FishLength');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
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
        $criteria->setPrimaryTableName(DietPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DietPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DietPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Diet
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DietPeer::doSelect($critcopy, $con);
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
        return DietPeer::populateObjects(DietPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DietPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DietPeer::DATABASE_NAME);

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
     * @param Diet $obj A Diet object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getDietcode(), (string) $obj->getStockcode(), (string) $obj->getSamplestage()));
            } // if key === null
            DietPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Diet object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Diet) {
                $key = serialize(array((string) $value->getDietcode(), (string) $value->getStockcode(), (string) $value->getSamplestage()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Diet object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DietPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Diet Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DietPeer::$instances[$key])) {
                return DietPeer::$instances[$key];
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
        foreach (DietPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DietPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to diet
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (string) $row[$startcol + 4]);
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
        $cls = DietPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DietPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DietPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DietPeer::addInstanceToPool($obj, $key);
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
     * @return array (Diet object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DietPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DietPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DietPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DietPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DietPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(DietPeer::DATABASE_NAME)->getTable(DietPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDietPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDietPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DietTableMap());
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
        return DietPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Diet or Criteria object.
     *
     * @param      mixed $values Criteria or Diet object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Diet object
        }


        // Set the correct dbName
        $criteria->setDbName(DietPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Diet or Criteria object.
     *
     * @param      mixed $values Criteria or Diet object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DietPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DietPeer::DIETCODE);
            $value = $criteria->remove(DietPeer::DIETCODE);
            if ($value) {
                $selectCriteria->add(DietPeer::DIETCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DietPeer::STOCKCODE);
            $value = $criteria->remove(DietPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(DietPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DietPeer::SAMPLESTAGE);
            $value = $criteria->remove(DietPeer::SAMPLESTAGE);
            if ($value) {
                $selectCriteria->add(DietPeer::SAMPLESTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietPeer::TABLE_NAME);
            }

        } else { // $values is Diet object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DietPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the diet table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DietPeer::TABLE_NAME, $con, DietPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DietPeer::clearInstancePool();
            DietPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Diet or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Diet object or primary key or array of primary keys
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
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DietPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Diet) { // it's a model object
            // invalidate the cache for this single object
            DietPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DietPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DietPeer::DIETCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DietPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(DietPeer::SAMPLESTAGE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                DietPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DietPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DietPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Diet object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Diet $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DietPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DietPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DietPeer::DATABASE_NAME, DietPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $dietcode
     * @param   int $stockcode
     * @param   string $samplestage
     * @param      PropelPDO $con
     * @return Diet
     */
    public static function retrieveByPK($dietcode, $stockcode, $samplestage, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $dietcode, (string) $stockcode, (string) $samplestage));
         if (null !== ($obj = DietPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(DietPeer::DATABASE_NAME);
        $criteria->add(DietPeer::DIETCODE, $dietcode);
        $criteria->add(DietPeer::STOCKCODE, $stockcode);
        $criteria->add(DietPeer::SAMPLESTAGE, $samplestage);
        $v = DietPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseDietPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDietPeer::buildTableMap();

