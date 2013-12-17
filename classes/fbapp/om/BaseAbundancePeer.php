<?php


/**
 * Base static class for performing query and update operations on the 'abundance' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseAbundancePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'abundance';

    /** the related Propel class for this table */
    const OM_CLASS = 'Abundance';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AbundanceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 41;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 41;

    /** the column name for the AbundanceCode field */
    const ABUNDANCECODE = 'abundance.AbundanceCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'abundance.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'abundance.SpecCode';

    /** the column name for the MainRef field */
    const MAINREF = 'abundance.MainRef';

    /** the column name for the Locality field */
    const LOCALITY = 'abundance.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'abundance.C_Code';

    /** the column name for the E_CODE field */
    const E_CODE = 'abundance.E_CODE';

    /** the column name for the Introduced field */
    const INTRODUCED = 'abundance.Introduced';

    /** the column name for the Year_intro field */
    const YEAR_INTRO = 'abundance.Year_intro';

    /** the column name for the LifeStage1 field */
    const LIFESTAGE1 = 'abundance.LifeStage1';

    /** the column name for the Sex field */
    const SEX = 'abundance.Sex';

    /** the column name for the Lifestage2 field */
    const LIFESTAGE2 = 'abundance.Lifestage2';

    /** the column name for the Sexual field */
    const SEXUAL = 'abundance.Sexual';

    /** the column name for the Asexual field */
    const ASEXUAL = 'abundance.Asexual';

    /** the column name for the Abundance_Quan field */
    const ABUNDANCE_QUAN = 'abundance.Abundance_Quan';

    /** the column name for the Abundance_QuanUnit field */
    const ABUNDANCE_QUANUNIT = 'abundance.Abundance_QuanUnit';

    /** the column name for the Abundance_SemiQuan field */
    const ABUNDANCE_SEMIQUAN = 'abundance.Abundance_SemiQuan';

    /** the column name for the Abundance_SemiQuanUnit field */
    const ABUNDANCE_SEMIQUANUNIT = 'abundance.Abundance_SemiQuanUnit';

    /** the column name for the Abundance_Qual field */
    const ABUNDANCE_QUAL = 'abundance.Abundance_Qual';

    /** the column name for the Depth field */
    const DEPTH = 'abundance.Depth';

    /** the column name for the DepthUnit field */
    const DEPTHUNIT = 'abundance.DepthUnit';

    /** the column name for the Year_Occur1 field */
    const YEAR_OCCUR1 = 'abundance.Year_Occur1';

    /** the column name for the Year_Occur2 field */
    const YEAR_OCCUR2 = 'abundance.Year_Occur2';

    /** the column name for the Date_Occur1 field */
    const DATE_OCCUR1 = 'abundance.Date_Occur1';

    /** the column name for the Date_Occur2 field */
    const DATE_OCCUR2 = 'abundance.Date_Occur2';

    /** the column name for the Seasonal field */
    const SEASONAL = 'abundance.Seasonal';

    /** the column name for the Period field */
    const PERIOD = 'abundance.Period';

    /** the column name for the RecordType field */
    const RECORDTYPE = 'abundance.RecordType';

    /** the column name for the Method field */
    const METHOD = 'abundance.Method';

    /** the column name for the Remarks field */
    const REMARKS = 'abundance.Remarks';

    /** the column name for the InvasiveReport field */
    const INVASIVEREPORT = 'abundance.InvasiveReport';

    /** the column name for the InvasivenessDegree field */
    const INVASIVENESSDEGREE = 'abundance.InvasivenessDegree';

    /** the column name for the ReportType field */
    const REPORTTYPE = 'abundance.ReportType';

    /** the column name for the InvasiveRef field */
    const INVASIVEREF = 'abundance.InvasiveRef';

    /** the column name for the Entered field */
    const ENTERED = 'abundance.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'abundance.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'abundance.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'abundance.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'abundance.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'abundance.DateChecked';

    /** the column name for the TS field */
    const TS = 'abundance.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Abundance objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Abundance[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AbundancePeer::$fieldNames[AbundancePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Abundancecode', 'Stockcode', 'Speccode', 'Mainref', 'Locality', 'CCode', 'ECode', 'Introduced', 'YearIntro', 'Lifestage1', 'Sex', 'Lifestage2', 'Sexual', 'Asexual', 'AbundanceQuan', 'AbundanceQuanunit', 'AbundanceSemiquan', 'AbundanceSemiquanunit', 'AbundanceQual', 'Depth', 'Depthunit', 'YearOccur1', 'YearOccur2', 'DateOccur1', 'DateOccur2', 'Seasonal', 'Period', 'Recordtype', 'Method', 'Remarks', 'Invasivereport', 'Invasivenessdegree', 'Reporttype', 'Invasiveref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('abundancecode', 'stockcode', 'speccode', 'mainref', 'locality', 'cCode', 'eCode', 'introduced', 'yearIntro', 'lifestage1', 'sex', 'lifestage2', 'sexual', 'asexual', 'abundanceQuan', 'abundanceQuanunit', 'abundanceSemiquan', 'abundanceSemiquanunit', 'abundanceQual', 'depth', 'depthunit', 'yearOccur1', 'yearOccur2', 'dateOccur1', 'dateOccur2', 'seasonal', 'period', 'recordtype', 'method', 'remarks', 'invasivereport', 'invasivenessdegree', 'reporttype', 'invasiveref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (AbundancePeer::ABUNDANCECODE, AbundancePeer::STOCKCODE, AbundancePeer::SPECCODE, AbundancePeer::MAINREF, AbundancePeer::LOCALITY, AbundancePeer::C_CODE, AbundancePeer::E_CODE, AbundancePeer::INTRODUCED, AbundancePeer::YEAR_INTRO, AbundancePeer::LIFESTAGE1, AbundancePeer::SEX, AbundancePeer::LIFESTAGE2, AbundancePeer::SEXUAL, AbundancePeer::ASEXUAL, AbundancePeer::ABUNDANCE_QUAN, AbundancePeer::ABUNDANCE_QUANUNIT, AbundancePeer::ABUNDANCE_SEMIQUAN, AbundancePeer::ABUNDANCE_SEMIQUANUNIT, AbundancePeer::ABUNDANCE_QUAL, AbundancePeer::DEPTH, AbundancePeer::DEPTHUNIT, AbundancePeer::YEAR_OCCUR1, AbundancePeer::YEAR_OCCUR2, AbundancePeer::DATE_OCCUR1, AbundancePeer::DATE_OCCUR2, AbundancePeer::SEASONAL, AbundancePeer::PERIOD, AbundancePeer::RECORDTYPE, AbundancePeer::METHOD, AbundancePeer::REMARKS, AbundancePeer::INVASIVEREPORT, AbundancePeer::INVASIVENESSDEGREE, AbundancePeer::REPORTTYPE, AbundancePeer::INVASIVEREF, AbundancePeer::ENTERED, AbundancePeer::DATEENTERED, AbundancePeer::MODIFIED, AbundancePeer::DATEMODIFIED, AbundancePeer::EXPERT, AbundancePeer::DATECHECKED, AbundancePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ABUNDANCECODE', 'STOCKCODE', 'SPECCODE', 'MAINREF', 'LOCALITY', 'C_CODE', 'E_CODE', 'INTRODUCED', 'YEAR_INTRO', 'LIFESTAGE1', 'SEX', 'LIFESTAGE2', 'SEXUAL', 'ASEXUAL', 'ABUNDANCE_QUAN', 'ABUNDANCE_QUANUNIT', 'ABUNDANCE_SEMIQUAN', 'ABUNDANCE_SEMIQUANUNIT', 'ABUNDANCE_QUAL', 'DEPTH', 'DEPTHUNIT', 'YEAR_OCCUR1', 'YEAR_OCCUR2', 'DATE_OCCUR1', 'DATE_OCCUR2', 'SEASONAL', 'PERIOD', 'RECORDTYPE', 'METHOD', 'REMARKS', 'INVASIVEREPORT', 'INVASIVENESSDEGREE', 'REPORTTYPE', 'INVASIVEREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AbundanceCode', 'StockCode', 'SpecCode', 'MainRef', 'Locality', 'C_Code', 'E_CODE', 'Introduced', 'Year_intro', 'LifeStage1', 'Sex', 'Lifestage2', 'Sexual', 'Asexual', 'Abundance_Quan', 'Abundance_QuanUnit', 'Abundance_SemiQuan', 'Abundance_SemiQuanUnit', 'Abundance_Qual', 'Depth', 'DepthUnit', 'Year_Occur1', 'Year_Occur2', 'Date_Occur1', 'Date_Occur2', 'Seasonal', 'Period', 'RecordType', 'Method', 'Remarks', 'InvasiveReport', 'InvasivenessDegree', 'ReportType', 'InvasiveRef', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AbundancePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Abundancecode' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Mainref' => 3, 'Locality' => 4, 'CCode' => 5, 'ECode' => 6, 'Introduced' => 7, 'YearIntro' => 8, 'Lifestage1' => 9, 'Sex' => 10, 'Lifestage2' => 11, 'Sexual' => 12, 'Asexual' => 13, 'AbundanceQuan' => 14, 'AbundanceQuanunit' => 15, 'AbundanceSemiquan' => 16, 'AbundanceSemiquanunit' => 17, 'AbundanceQual' => 18, 'Depth' => 19, 'Depthunit' => 20, 'YearOccur1' => 21, 'YearOccur2' => 22, 'DateOccur1' => 23, 'DateOccur2' => 24, 'Seasonal' => 25, 'Period' => 26, 'Recordtype' => 27, 'Method' => 28, 'Remarks' => 29, 'Invasivereport' => 30, 'Invasivenessdegree' => 31, 'Reporttype' => 32, 'Invasiveref' => 33, 'Entered' => 34, 'Dateentered' => 35, 'Modified' => 36, 'Datemodified' => 37, 'Expert' => 38, 'Datechecked' => 39, 'Ts' => 40, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('abundancecode' => 0, 'stockcode' => 1, 'speccode' => 2, 'mainref' => 3, 'locality' => 4, 'cCode' => 5, 'eCode' => 6, 'introduced' => 7, 'yearIntro' => 8, 'lifestage1' => 9, 'sex' => 10, 'lifestage2' => 11, 'sexual' => 12, 'asexual' => 13, 'abundanceQuan' => 14, 'abundanceQuanunit' => 15, 'abundanceSemiquan' => 16, 'abundanceSemiquanunit' => 17, 'abundanceQual' => 18, 'depth' => 19, 'depthunit' => 20, 'yearOccur1' => 21, 'yearOccur2' => 22, 'dateOccur1' => 23, 'dateOccur2' => 24, 'seasonal' => 25, 'period' => 26, 'recordtype' => 27, 'method' => 28, 'remarks' => 29, 'invasivereport' => 30, 'invasivenessdegree' => 31, 'reporttype' => 32, 'invasiveref' => 33, 'entered' => 34, 'dateentered' => 35, 'modified' => 36, 'datemodified' => 37, 'expert' => 38, 'datechecked' => 39, 'ts' => 40, ),
        BasePeer::TYPE_COLNAME => array (AbundancePeer::ABUNDANCECODE => 0, AbundancePeer::STOCKCODE => 1, AbundancePeer::SPECCODE => 2, AbundancePeer::MAINREF => 3, AbundancePeer::LOCALITY => 4, AbundancePeer::C_CODE => 5, AbundancePeer::E_CODE => 6, AbundancePeer::INTRODUCED => 7, AbundancePeer::YEAR_INTRO => 8, AbundancePeer::LIFESTAGE1 => 9, AbundancePeer::SEX => 10, AbundancePeer::LIFESTAGE2 => 11, AbundancePeer::SEXUAL => 12, AbundancePeer::ASEXUAL => 13, AbundancePeer::ABUNDANCE_QUAN => 14, AbundancePeer::ABUNDANCE_QUANUNIT => 15, AbundancePeer::ABUNDANCE_SEMIQUAN => 16, AbundancePeer::ABUNDANCE_SEMIQUANUNIT => 17, AbundancePeer::ABUNDANCE_QUAL => 18, AbundancePeer::DEPTH => 19, AbundancePeer::DEPTHUNIT => 20, AbundancePeer::YEAR_OCCUR1 => 21, AbundancePeer::YEAR_OCCUR2 => 22, AbundancePeer::DATE_OCCUR1 => 23, AbundancePeer::DATE_OCCUR2 => 24, AbundancePeer::SEASONAL => 25, AbundancePeer::PERIOD => 26, AbundancePeer::RECORDTYPE => 27, AbundancePeer::METHOD => 28, AbundancePeer::REMARKS => 29, AbundancePeer::INVASIVEREPORT => 30, AbundancePeer::INVASIVENESSDEGREE => 31, AbundancePeer::REPORTTYPE => 32, AbundancePeer::INVASIVEREF => 33, AbundancePeer::ENTERED => 34, AbundancePeer::DATEENTERED => 35, AbundancePeer::MODIFIED => 36, AbundancePeer::DATEMODIFIED => 37, AbundancePeer::EXPERT => 38, AbundancePeer::DATECHECKED => 39, AbundancePeer::TS => 40, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ABUNDANCECODE' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'MAINREF' => 3, 'LOCALITY' => 4, 'C_CODE' => 5, 'E_CODE' => 6, 'INTRODUCED' => 7, 'YEAR_INTRO' => 8, 'LIFESTAGE1' => 9, 'SEX' => 10, 'LIFESTAGE2' => 11, 'SEXUAL' => 12, 'ASEXUAL' => 13, 'ABUNDANCE_QUAN' => 14, 'ABUNDANCE_QUANUNIT' => 15, 'ABUNDANCE_SEMIQUAN' => 16, 'ABUNDANCE_SEMIQUANUNIT' => 17, 'ABUNDANCE_QUAL' => 18, 'DEPTH' => 19, 'DEPTHUNIT' => 20, 'YEAR_OCCUR1' => 21, 'YEAR_OCCUR2' => 22, 'DATE_OCCUR1' => 23, 'DATE_OCCUR2' => 24, 'SEASONAL' => 25, 'PERIOD' => 26, 'RECORDTYPE' => 27, 'METHOD' => 28, 'REMARKS' => 29, 'INVASIVEREPORT' => 30, 'INVASIVENESSDEGREE' => 31, 'REPORTTYPE' => 32, 'INVASIVEREF' => 33, 'ENTERED' => 34, 'DATEENTERED' => 35, 'MODIFIED' => 36, 'DATEMODIFIED' => 37, 'EXPERT' => 38, 'DATECHECKED' => 39, 'TS' => 40, ),
        BasePeer::TYPE_FIELDNAME => array ('AbundanceCode' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'MainRef' => 3, 'Locality' => 4, 'C_Code' => 5, 'E_CODE' => 6, 'Introduced' => 7, 'Year_intro' => 8, 'LifeStage1' => 9, 'Sex' => 10, 'Lifestage2' => 11, 'Sexual' => 12, 'Asexual' => 13, 'Abundance_Quan' => 14, 'Abundance_QuanUnit' => 15, 'Abundance_SemiQuan' => 16, 'Abundance_SemiQuanUnit' => 17, 'Abundance_Qual' => 18, 'Depth' => 19, 'DepthUnit' => 20, 'Year_Occur1' => 21, 'Year_Occur2' => 22, 'Date_Occur1' => 23, 'Date_Occur2' => 24, 'Seasonal' => 25, 'Period' => 26, 'RecordType' => 27, 'Method' => 28, 'Remarks' => 29, 'InvasiveReport' => 30, 'InvasivenessDegree' => 31, 'ReportType' => 32, 'InvasiveRef' => 33, 'Entered' => 34, 'DateEntered' => 35, 'Modified' => 36, 'DateModified' => 37, 'Expert' => 38, 'DateChecked' => 39, 'TS' => 40, ),
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
        $toNames = AbundancePeer::getFieldNames($toType);
        $key = isset(AbundancePeer::$fieldKeys[$fromType][$name]) ? AbundancePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AbundancePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AbundancePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AbundancePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AbundancePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AbundancePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AbundancePeer::ABUNDANCECODE);
            $criteria->addSelectColumn(AbundancePeer::STOCKCODE);
            $criteria->addSelectColumn(AbundancePeer::SPECCODE);
            $criteria->addSelectColumn(AbundancePeer::MAINREF);
            $criteria->addSelectColumn(AbundancePeer::LOCALITY);
            $criteria->addSelectColumn(AbundancePeer::C_CODE);
            $criteria->addSelectColumn(AbundancePeer::E_CODE);
            $criteria->addSelectColumn(AbundancePeer::INTRODUCED);
            $criteria->addSelectColumn(AbundancePeer::YEAR_INTRO);
            $criteria->addSelectColumn(AbundancePeer::LIFESTAGE1);
            $criteria->addSelectColumn(AbundancePeer::SEX);
            $criteria->addSelectColumn(AbundancePeer::LIFESTAGE2);
            $criteria->addSelectColumn(AbundancePeer::SEXUAL);
            $criteria->addSelectColumn(AbundancePeer::ASEXUAL);
            $criteria->addSelectColumn(AbundancePeer::ABUNDANCE_QUAN);
            $criteria->addSelectColumn(AbundancePeer::ABUNDANCE_QUANUNIT);
            $criteria->addSelectColumn(AbundancePeer::ABUNDANCE_SEMIQUAN);
            $criteria->addSelectColumn(AbundancePeer::ABUNDANCE_SEMIQUANUNIT);
            $criteria->addSelectColumn(AbundancePeer::ABUNDANCE_QUAL);
            $criteria->addSelectColumn(AbundancePeer::DEPTH);
            $criteria->addSelectColumn(AbundancePeer::DEPTHUNIT);
            $criteria->addSelectColumn(AbundancePeer::YEAR_OCCUR1);
            $criteria->addSelectColumn(AbundancePeer::YEAR_OCCUR2);
            $criteria->addSelectColumn(AbundancePeer::DATE_OCCUR1);
            $criteria->addSelectColumn(AbundancePeer::DATE_OCCUR2);
            $criteria->addSelectColumn(AbundancePeer::SEASONAL);
            $criteria->addSelectColumn(AbundancePeer::PERIOD);
            $criteria->addSelectColumn(AbundancePeer::RECORDTYPE);
            $criteria->addSelectColumn(AbundancePeer::METHOD);
            $criteria->addSelectColumn(AbundancePeer::REMARKS);
            $criteria->addSelectColumn(AbundancePeer::INVASIVEREPORT);
            $criteria->addSelectColumn(AbundancePeer::INVASIVENESSDEGREE);
            $criteria->addSelectColumn(AbundancePeer::REPORTTYPE);
            $criteria->addSelectColumn(AbundancePeer::INVASIVEREF);
            $criteria->addSelectColumn(AbundancePeer::ENTERED);
            $criteria->addSelectColumn(AbundancePeer::DATEENTERED);
            $criteria->addSelectColumn(AbundancePeer::MODIFIED);
            $criteria->addSelectColumn(AbundancePeer::DATEMODIFIED);
            $criteria->addSelectColumn(AbundancePeer::EXPERT);
            $criteria->addSelectColumn(AbundancePeer::DATECHECKED);
            $criteria->addSelectColumn(AbundancePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AbundanceCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.Introduced');
            $criteria->addSelectColumn($alias . '.Year_intro');
            $criteria->addSelectColumn($alias . '.LifeStage1');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Lifestage2');
            $criteria->addSelectColumn($alias . '.Sexual');
            $criteria->addSelectColumn($alias . '.Asexual');
            $criteria->addSelectColumn($alias . '.Abundance_Quan');
            $criteria->addSelectColumn($alias . '.Abundance_QuanUnit');
            $criteria->addSelectColumn($alias . '.Abundance_SemiQuan');
            $criteria->addSelectColumn($alias . '.Abundance_SemiQuanUnit');
            $criteria->addSelectColumn($alias . '.Abundance_Qual');
            $criteria->addSelectColumn($alias . '.Depth');
            $criteria->addSelectColumn($alias . '.DepthUnit');
            $criteria->addSelectColumn($alias . '.Year_Occur1');
            $criteria->addSelectColumn($alias . '.Year_Occur2');
            $criteria->addSelectColumn($alias . '.Date_Occur1');
            $criteria->addSelectColumn($alias . '.Date_Occur2');
            $criteria->addSelectColumn($alias . '.Seasonal');
            $criteria->addSelectColumn($alias . '.Period');
            $criteria->addSelectColumn($alias . '.RecordType');
            $criteria->addSelectColumn($alias . '.Method');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.InvasiveReport');
            $criteria->addSelectColumn($alias . '.InvasivenessDegree');
            $criteria->addSelectColumn($alias . '.ReportType');
            $criteria->addSelectColumn($alias . '.InvasiveRef');
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
        $criteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbundancePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AbundancePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Abundance
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AbundancePeer::doSelect($critcopy, $con);
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
        return AbundancePeer::populateObjects(AbundancePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AbundancePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AbundancePeer::DATABASE_NAME);

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
     * @param Abundance $obj A Abundance object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getSpeccode(), (string) $obj->getLocality(), (string) $obj->getCCode(), (string) $obj->getLifestage1(), (string) $obj->getDateOccur1(), (string) $obj->getDateOccur2()));
            } // if key === null
            AbundancePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Abundance object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Abundance) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getSpeccode(), (string) $value->getLocality(), (string) $value->getCCode(), (string) $value->getLifestage1(), (string) $value->getDateOccur1(), (string) $value->getDateOccur2()));
            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Abundance object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AbundancePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Abundance Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AbundancePeer::$instances[$key])) {
                return AbundancePeer::$instances[$key];
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
        foreach (AbundancePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AbundancePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to abundance
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null && $row[$startcol + 9] === null && $row[$startcol + 23] === null && $row[$startcol + 24] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 9], (string) $row[$startcol + 23], (string) $row[$startcol + 24]));
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 2], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 9], (string) $row[$startcol + 23], (string) $row[$startcol + 24]);
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
        $cls = AbundancePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AbundancePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AbundancePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AbundancePeer::addInstanceToPool($obj, $key);
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
     * @return array (Abundance object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AbundancePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AbundancePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AbundancePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AbundancePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AbundancePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AbundancePeer::DATABASE_NAME)->getTable(AbundancePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAbundancePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAbundancePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AbundanceTableMap());
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
        return AbundancePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Abundance or Criteria object.
     *
     * @param      mixed $values Criteria or Abundance object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Abundance object
        }


        // Set the correct dbName
        $criteria->setDbName(AbundancePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Abundance or Criteria object.
     *
     * @param      mixed $values Criteria or Abundance object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AbundancePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AbundancePeer::STOCKCODE);
            $value = $criteria->remove(AbundancePeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(AbundancePeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AbundancePeer::SPECCODE);
            $value = $criteria->remove(AbundancePeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(AbundancePeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AbundancePeer::LOCALITY);
            $value = $criteria->remove(AbundancePeer::LOCALITY);
            if ($value) {
                $selectCriteria->add(AbundancePeer::LOCALITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AbundancePeer::C_CODE);
            $value = $criteria->remove(AbundancePeer::C_CODE);
            if ($value) {
                $selectCriteria->add(AbundancePeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AbundancePeer::LIFESTAGE1);
            $value = $criteria->remove(AbundancePeer::LIFESTAGE1);
            if ($value) {
                $selectCriteria->add(AbundancePeer::LIFESTAGE1, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AbundancePeer::DATE_OCCUR1);
            $value = $criteria->remove(AbundancePeer::DATE_OCCUR1);
            if ($value) {
                $selectCriteria->add(AbundancePeer::DATE_OCCUR1, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AbundancePeer::DATE_OCCUR2);
            $value = $criteria->remove(AbundancePeer::DATE_OCCUR2);
            if ($value) {
                $selectCriteria->add(AbundancePeer::DATE_OCCUR2, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbundancePeer::TABLE_NAME);
            }

        } else { // $values is Abundance object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AbundancePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the abundance table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AbundancePeer::TABLE_NAME, $con, AbundancePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AbundancePeer::clearInstancePool();
            AbundancePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Abundance or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Abundance object or primary key or array of primary keys
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
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AbundancePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Abundance) { // it's a model object
            // invalidate the cache for this single object
            AbundancePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AbundancePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(AbundancePeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(AbundancePeer::SPECCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(AbundancePeer::LOCALITY, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(AbundancePeer::C_CODE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(AbundancePeer::LIFESTAGE1, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(AbundancePeer::DATE_OCCUR1, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(AbundancePeer::DATE_OCCUR2, $value[6]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                AbundancePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AbundancePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AbundancePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Abundance object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Abundance $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AbundancePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AbundancePeer::TABLE_NAME);

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

        return BasePeer::doValidate(AbundancePeer::DATABASE_NAME, AbundancePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $speccode
     * @param   string $locality
     * @param   string $c_code
     * @param   string $lifestage1
     * @param   string $date_occur1
     * @param   string $date_occur2
     * @param      PropelPDO $con
     * @return Abundance
     */
    public static function retrieveByPK($stockcode, $speccode, $locality, $c_code, $lifestage1, $date_occur1, $date_occur2, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $speccode, (string) $locality, (string) $c_code, (string) $lifestage1, (string) $date_occur1, (string) $date_occur2));
         if (null !== ($obj = AbundancePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AbundancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(AbundancePeer::DATABASE_NAME);
        $criteria->add(AbundancePeer::STOCKCODE, $stockcode);
        $criteria->add(AbundancePeer::SPECCODE, $speccode);
        $criteria->add(AbundancePeer::LOCALITY, $locality);
        $criteria->add(AbundancePeer::C_CODE, $c_code);
        $criteria->add(AbundancePeer::LIFESTAGE1, $lifestage1);
        $criteria->add(AbundancePeer::DATE_OCCUR1, $date_occur1);
        $criteria->add(AbundancePeer::DATE_OCCUR2, $date_occur2);
        $v = AbundancePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseAbundancePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAbundancePeer::buildTableMap();

