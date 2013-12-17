<?php


/**
 * Base static class for performing query and update operations on the 'maturity' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMaturityPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'maturity';

    /** the related Propel class for this table */
    const OM_CLASS = 'Maturity';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MaturityTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 35;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 35;

    /** the column name for the autoctr field */
    const AUTOCTR = 'maturity.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'maturity.Speccode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'maturity.StockCode';

    /** the column name for the MaturityRefNo field */
    const MATURITYREFNO = 'maturity.MaturityRefNo';

    /** the column name for the Sex field */
    const SEX = 'maturity.Sex';

    /** the column name for the AgeMatMin field */
    const AGEMATMIN = 'maturity.AgeMatMin';

    /** the column name for the AgeMatMin2 field */
    const AGEMATMIN2 = 'maturity.AgeMatMin2';

    /** the column name for the AgeMatRef field */
    const AGEMATREF = 'maturity.AgeMatRef';

    /** the column name for the tm field */
    const TM = 'maturity.tm';

    /** the column name for the Number field */
    const NUMBER = 'maturity.Number';

    /** the column name for the r2 field */
    const R2 = 'maturity.r2';

    /** the column name for the SE_tm field */
    const SE_TM = 'maturity.SE_tm';

    /** the column name for the SD_tm field */
    const SD_TM = 'maturity.SD_tm';

    /** the column name for the LCL_tm field */
    const LCL_TM = 'maturity.LCL_tm';

    /** the column name for the UCL_tm field */
    const UCL_TM = 'maturity.UCL_tm';

    /** the column name for the LengthMatMin field */
    const LENGTHMATMIN = 'maturity.LengthMatMin';

    /** the column name for the LengthMatMin2 field */
    const LENGTHMATMIN2 = 'maturity.LengthMatMin2';

    /** the column name for the Type1 field */
    const TYPE1 = 'maturity.Type1';

    /** the column name for the LengthMatRef field */
    const LENGTHMATREF = 'maturity.LengthMatRef';

    /** the column name for the Lm field */
    const LM = 'maturity.Lm';

    /** the column name for the SE_Lm field */
    const SE_LM = 'maturity.SE_Lm';

    /** the column name for the SD_Lm field */
    const SD_LM = 'maturity.SD_Lm';

    /** the column name for the LCL_Lm field */
    const LCL_LM = 'maturity.LCL_Lm';

    /** the column name for the UCL_Lm field */
    const UCL_LM = 'maturity.UCL_Lm';

    /** the column name for the Locality field */
    const LOCALITY = 'maturity.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'maturity.C_Code';

    /** the column name for the E_CODE field */
    const E_CODE = 'maturity.E_CODE';

    /** the column name for the Comment field */
    const COMMENT = 'maturity.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'maturity.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'maturity.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'maturity.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'maturity.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'maturity.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'maturity.DateChecked';

    /** the column name for the TS field */
    const TS = 'maturity.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Maturity objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Maturity[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MaturityPeer::$fieldNames[MaturityPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Maturityrefno', 'Sex', 'Agematmin', 'Agematmin2', 'Agematref', 'Tm', 'Number', 'R2', 'SeTm', 'SdTm', 'LclTm', 'UclTm', 'Lengthmatmin', 'Lengthmatmin2', 'Type1', 'Lengthmatref', 'Lm', 'SeLm', 'SdLm', 'LclLm', 'UclLm', 'Locality', 'CCode', 'ECode', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'maturityrefno', 'sex', 'agematmin', 'agematmin2', 'agematref', 'tm', 'number', 'r2', 'seTm', 'sdTm', 'lclTm', 'uclTm', 'lengthmatmin', 'lengthmatmin2', 'type1', 'lengthmatref', 'lm', 'seLm', 'sdLm', 'lclLm', 'uclLm', 'locality', 'cCode', 'eCode', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MaturityPeer::AUTOCTR, MaturityPeer::SPECCODE, MaturityPeer::STOCKCODE, MaturityPeer::MATURITYREFNO, MaturityPeer::SEX, MaturityPeer::AGEMATMIN, MaturityPeer::AGEMATMIN2, MaturityPeer::AGEMATREF, MaturityPeer::TM, MaturityPeer::NUMBER, MaturityPeer::R2, MaturityPeer::SE_TM, MaturityPeer::SD_TM, MaturityPeer::LCL_TM, MaturityPeer::UCL_TM, MaturityPeer::LENGTHMATMIN, MaturityPeer::LENGTHMATMIN2, MaturityPeer::TYPE1, MaturityPeer::LENGTHMATREF, MaturityPeer::LM, MaturityPeer::SE_LM, MaturityPeer::SD_LM, MaturityPeer::LCL_LM, MaturityPeer::UCL_LM, MaturityPeer::LOCALITY, MaturityPeer::C_CODE, MaturityPeer::E_CODE, MaturityPeer::COMMENT, MaturityPeer::ENTERED, MaturityPeer::DATEENTERED, MaturityPeer::MODIFIED, MaturityPeer::DATEMODIFIED, MaturityPeer::EXPERT, MaturityPeer::DATECHECKED, MaturityPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'MATURITYREFNO', 'SEX', 'AGEMATMIN', 'AGEMATMIN2', 'AGEMATREF', 'TM', 'NUMBER', 'R2', 'SE_TM', 'SD_TM', 'LCL_TM', 'UCL_TM', 'LENGTHMATMIN', 'LENGTHMATMIN2', 'TYPE1', 'LENGTHMATREF', 'LM', 'SE_LM', 'SD_LM', 'LCL_LM', 'UCL_LM', 'LOCALITY', 'C_CODE', 'E_CODE', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'StockCode', 'MaturityRefNo', 'Sex', 'AgeMatMin', 'AgeMatMin2', 'AgeMatRef', 'tm', 'Number', 'r2', 'SE_tm', 'SD_tm', 'LCL_tm', 'UCL_tm', 'LengthMatMin', 'LengthMatMin2', 'Type1', 'LengthMatRef', 'Lm', 'SE_Lm', 'SD_Lm', 'LCL_Lm', 'UCL_Lm', 'Locality', 'C_Code', 'E_CODE', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MaturityPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Maturityrefno' => 3, 'Sex' => 4, 'Agematmin' => 5, 'Agematmin2' => 6, 'Agematref' => 7, 'Tm' => 8, 'Number' => 9, 'R2' => 10, 'SeTm' => 11, 'SdTm' => 12, 'LclTm' => 13, 'UclTm' => 14, 'Lengthmatmin' => 15, 'Lengthmatmin2' => 16, 'Type1' => 17, 'Lengthmatref' => 18, 'Lm' => 19, 'SeLm' => 20, 'SdLm' => 21, 'LclLm' => 22, 'UclLm' => 23, 'Locality' => 24, 'CCode' => 25, 'ECode' => 26, 'Comment' => 27, 'Entered' => 28, 'Dateentered' => 29, 'Modified' => 30, 'Datemodified' => 31, 'Expert' => 32, 'Datechecked' => 33, 'Ts' => 34, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'maturityrefno' => 3, 'sex' => 4, 'agematmin' => 5, 'agematmin2' => 6, 'agematref' => 7, 'tm' => 8, 'number' => 9, 'r2' => 10, 'seTm' => 11, 'sdTm' => 12, 'lclTm' => 13, 'uclTm' => 14, 'lengthmatmin' => 15, 'lengthmatmin2' => 16, 'type1' => 17, 'lengthmatref' => 18, 'lm' => 19, 'seLm' => 20, 'sdLm' => 21, 'lclLm' => 22, 'uclLm' => 23, 'locality' => 24, 'cCode' => 25, 'eCode' => 26, 'comment' => 27, 'entered' => 28, 'dateentered' => 29, 'modified' => 30, 'datemodified' => 31, 'expert' => 32, 'datechecked' => 33, 'ts' => 34, ),
        BasePeer::TYPE_COLNAME => array (MaturityPeer::AUTOCTR => 0, MaturityPeer::SPECCODE => 1, MaturityPeer::STOCKCODE => 2, MaturityPeer::MATURITYREFNO => 3, MaturityPeer::SEX => 4, MaturityPeer::AGEMATMIN => 5, MaturityPeer::AGEMATMIN2 => 6, MaturityPeer::AGEMATREF => 7, MaturityPeer::TM => 8, MaturityPeer::NUMBER => 9, MaturityPeer::R2 => 10, MaturityPeer::SE_TM => 11, MaturityPeer::SD_TM => 12, MaturityPeer::LCL_TM => 13, MaturityPeer::UCL_TM => 14, MaturityPeer::LENGTHMATMIN => 15, MaturityPeer::LENGTHMATMIN2 => 16, MaturityPeer::TYPE1 => 17, MaturityPeer::LENGTHMATREF => 18, MaturityPeer::LM => 19, MaturityPeer::SE_LM => 20, MaturityPeer::SD_LM => 21, MaturityPeer::LCL_LM => 22, MaturityPeer::UCL_LM => 23, MaturityPeer::LOCALITY => 24, MaturityPeer::C_CODE => 25, MaturityPeer::E_CODE => 26, MaturityPeer::COMMENT => 27, MaturityPeer::ENTERED => 28, MaturityPeer::DATEENTERED => 29, MaturityPeer::MODIFIED => 30, MaturityPeer::DATEMODIFIED => 31, MaturityPeer::EXPERT => 32, MaturityPeer::DATECHECKED => 33, MaturityPeer::TS => 34, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'MATURITYREFNO' => 3, 'SEX' => 4, 'AGEMATMIN' => 5, 'AGEMATMIN2' => 6, 'AGEMATREF' => 7, 'TM' => 8, 'NUMBER' => 9, 'R2' => 10, 'SE_TM' => 11, 'SD_TM' => 12, 'LCL_TM' => 13, 'UCL_TM' => 14, 'LENGTHMATMIN' => 15, 'LENGTHMATMIN2' => 16, 'TYPE1' => 17, 'LENGTHMATREF' => 18, 'LM' => 19, 'SE_LM' => 20, 'SD_LM' => 21, 'LCL_LM' => 22, 'UCL_LM' => 23, 'LOCALITY' => 24, 'C_CODE' => 25, 'E_CODE' => 26, 'COMMENT' => 27, 'ENTERED' => 28, 'DATEENTERED' => 29, 'MODIFIED' => 30, 'DATEMODIFIED' => 31, 'EXPERT' => 32, 'DATECHECKED' => 33, 'TS' => 34, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'StockCode' => 2, 'MaturityRefNo' => 3, 'Sex' => 4, 'AgeMatMin' => 5, 'AgeMatMin2' => 6, 'AgeMatRef' => 7, 'tm' => 8, 'Number' => 9, 'r2' => 10, 'SE_tm' => 11, 'SD_tm' => 12, 'LCL_tm' => 13, 'UCL_tm' => 14, 'LengthMatMin' => 15, 'LengthMatMin2' => 16, 'Type1' => 17, 'LengthMatRef' => 18, 'Lm' => 19, 'SE_Lm' => 20, 'SD_Lm' => 21, 'LCL_Lm' => 22, 'UCL_Lm' => 23, 'Locality' => 24, 'C_Code' => 25, 'E_CODE' => 26, 'Comment' => 27, 'Entered' => 28, 'DateEntered' => 29, 'Modified' => 30, 'DateModified' => 31, 'Expert' => 32, 'DateChecked' => 33, 'TS' => 34, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
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
        $toNames = MaturityPeer::getFieldNames($toType);
        $key = isset(MaturityPeer::$fieldKeys[$fromType][$name]) ? MaturityPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MaturityPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MaturityPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MaturityPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MaturityPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MaturityPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MaturityPeer::AUTOCTR);
            $criteria->addSelectColumn(MaturityPeer::SPECCODE);
            $criteria->addSelectColumn(MaturityPeer::STOCKCODE);
            $criteria->addSelectColumn(MaturityPeer::MATURITYREFNO);
            $criteria->addSelectColumn(MaturityPeer::SEX);
            $criteria->addSelectColumn(MaturityPeer::AGEMATMIN);
            $criteria->addSelectColumn(MaturityPeer::AGEMATMIN2);
            $criteria->addSelectColumn(MaturityPeer::AGEMATREF);
            $criteria->addSelectColumn(MaturityPeer::TM);
            $criteria->addSelectColumn(MaturityPeer::NUMBER);
            $criteria->addSelectColumn(MaturityPeer::R2);
            $criteria->addSelectColumn(MaturityPeer::SE_TM);
            $criteria->addSelectColumn(MaturityPeer::SD_TM);
            $criteria->addSelectColumn(MaturityPeer::LCL_TM);
            $criteria->addSelectColumn(MaturityPeer::UCL_TM);
            $criteria->addSelectColumn(MaturityPeer::LENGTHMATMIN);
            $criteria->addSelectColumn(MaturityPeer::LENGTHMATMIN2);
            $criteria->addSelectColumn(MaturityPeer::TYPE1);
            $criteria->addSelectColumn(MaturityPeer::LENGTHMATREF);
            $criteria->addSelectColumn(MaturityPeer::LM);
            $criteria->addSelectColumn(MaturityPeer::SE_LM);
            $criteria->addSelectColumn(MaturityPeer::SD_LM);
            $criteria->addSelectColumn(MaturityPeer::LCL_LM);
            $criteria->addSelectColumn(MaturityPeer::UCL_LM);
            $criteria->addSelectColumn(MaturityPeer::LOCALITY);
            $criteria->addSelectColumn(MaturityPeer::C_CODE);
            $criteria->addSelectColumn(MaturityPeer::E_CODE);
            $criteria->addSelectColumn(MaturityPeer::COMMENT);
            $criteria->addSelectColumn(MaturityPeer::ENTERED);
            $criteria->addSelectColumn(MaturityPeer::DATEENTERED);
            $criteria->addSelectColumn(MaturityPeer::MODIFIED);
            $criteria->addSelectColumn(MaturityPeer::DATEMODIFIED);
            $criteria->addSelectColumn(MaturityPeer::EXPERT);
            $criteria->addSelectColumn(MaturityPeer::DATECHECKED);
            $criteria->addSelectColumn(MaturityPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.MaturityRefNo');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.AgeMatMin');
            $criteria->addSelectColumn($alias . '.AgeMatMin2');
            $criteria->addSelectColumn($alias . '.AgeMatRef');
            $criteria->addSelectColumn($alias . '.tm');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.r2');
            $criteria->addSelectColumn($alias . '.SE_tm');
            $criteria->addSelectColumn($alias . '.SD_tm');
            $criteria->addSelectColumn($alias . '.LCL_tm');
            $criteria->addSelectColumn($alias . '.UCL_tm');
            $criteria->addSelectColumn($alias . '.LengthMatMin');
            $criteria->addSelectColumn($alias . '.LengthMatMin2');
            $criteria->addSelectColumn($alias . '.Type1');
            $criteria->addSelectColumn($alias . '.LengthMatRef');
            $criteria->addSelectColumn($alias . '.Lm');
            $criteria->addSelectColumn($alias . '.SE_Lm');
            $criteria->addSelectColumn($alias . '.SD_Lm');
            $criteria->addSelectColumn($alias . '.LCL_Lm');
            $criteria->addSelectColumn($alias . '.UCL_Lm');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.E_CODE');
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
        $criteria->setPrimaryTableName(MaturityPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MaturityPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MaturityPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Maturity
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MaturityPeer::doSelect($critcopy, $con);
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
        return MaturityPeer::populateObjects(MaturityPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MaturityPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MaturityPeer::DATABASE_NAME);

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
     * @param Maturity $obj A Maturity object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getMaturityrefno(), (string) $obj->getSex(), (string) $obj->getLocality()));
            } // if key === null
            MaturityPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Maturity object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Maturity) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getMaturityrefno(), (string) $value->getSex(), (string) $value->getLocality()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Maturity object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MaturityPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Maturity Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MaturityPeer::$instances[$key])) {
                return MaturityPeer::$instances[$key];
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
        foreach (MaturityPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MaturityPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to maturity
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 24] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 24]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 24]);
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
        $cls = MaturityPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MaturityPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MaturityPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MaturityPeer::addInstanceToPool($obj, $key);
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
     * @return array (Maturity object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MaturityPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MaturityPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MaturityPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MaturityPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MaturityPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MaturityPeer::DATABASE_NAME)->getTable(MaturityPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMaturityPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMaturityPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MaturityTableMap());
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
        return MaturityPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Maturity or Criteria object.
     *
     * @param      mixed $values Criteria or Maturity object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Maturity object
        }


        // Set the correct dbName
        $criteria->setDbName(MaturityPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Maturity or Criteria object.
     *
     * @param      mixed $values Criteria or Maturity object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MaturityPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MaturityPeer::STOCKCODE);
            $value = $criteria->remove(MaturityPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(MaturityPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MaturityPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(MaturityPeer::MATURITYREFNO);
            $value = $criteria->remove(MaturityPeer::MATURITYREFNO);
            if ($value) {
                $selectCriteria->add(MaturityPeer::MATURITYREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MaturityPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(MaturityPeer::SEX);
            $value = $criteria->remove(MaturityPeer::SEX);
            if ($value) {
                $selectCriteria->add(MaturityPeer::SEX, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MaturityPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(MaturityPeer::LOCALITY);
            $value = $criteria->remove(MaturityPeer::LOCALITY);
            if ($value) {
                $selectCriteria->add(MaturityPeer::LOCALITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MaturityPeer::TABLE_NAME);
            }

        } else { // $values is Maturity object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MaturityPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the maturity table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MaturityPeer::TABLE_NAME, $con, MaturityPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MaturityPeer::clearInstancePool();
            MaturityPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Maturity or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Maturity object or primary key or array of primary keys
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
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MaturityPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Maturity) { // it's a model object
            // invalidate the cache for this single object
            MaturityPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MaturityPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(MaturityPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(MaturityPeer::MATURITYREFNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(MaturityPeer::SEX, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(MaturityPeer::LOCALITY, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                MaturityPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MaturityPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MaturityPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Maturity object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Maturity $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MaturityPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MaturityPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MaturityPeer::DATABASE_NAME, MaturityPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $maturityrefno
     * @param   string $sex
     * @param   string $locality
     * @param      PropelPDO $con
     * @return Maturity
     */
    public static function retrieveByPK($stockcode, $maturityrefno, $sex, $locality, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $maturityrefno, (string) $sex, (string) $locality));
         if (null !== ($obj = MaturityPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(MaturityPeer::DATABASE_NAME);
        $criteria->add(MaturityPeer::STOCKCODE, $stockcode);
        $criteria->add(MaturityPeer::MATURITYREFNO, $maturityrefno);
        $criteria->add(MaturityPeer::SEX, $sex);
        $criteria->add(MaturityPeer::LOCALITY, $locality);
        $v = MaturityPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseMaturityPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMaturityPeer::buildTableMap();

