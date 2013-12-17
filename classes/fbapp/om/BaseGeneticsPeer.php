<?php


/**
 * Base static class for performing query and update operations on the 'genetics' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGeneticsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'genetics';

    /** the related Propel class for this table */
    const OM_CLASS = 'Genetics';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GeneticsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 44;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 44;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'genetics.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'genetics.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'genetics.SpecCode';

    /** the column name for the GeneticsRefNo field */
    const GENETICSREFNO = 'genetics.GeneticsRefNo';

    /** the column name for the Locality field */
    const LOCALITY = 'genetics.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'genetics.C_Code';

    /** the column name for the Sex field */
    const SEX = 'genetics.Sex';

    /** the column name for the Tissues field */
    const TISSUES = 'genetics.Tissues';

    /** the column name for the ChromosomeNo field */
    const CHROMOSOMENO = 'genetics.ChromosomeNo';

    /** the column name for the ChromosomeRef field */
    const CHROMOSOMEREF = 'genetics.ChromosomeRef';

    /** the column name for the ChromosomeDip field */
    const CHROMOSOMEDIP = 'genetics.ChromosomeDip';

    /** the column name for the ChromosomeDipTemp field */
    const CHROMOSOMEDIPTEMP = 'genetics.ChromosomeDipTemp';

    /** the column name for the ChromosomeDipMax field */
    const CHROMOSOMEDIPMAX = 'genetics.ChromosomeDipMax';

    /** the column name for the ChromosomeDipRef field */
    const CHROMOSOMEDIPREF = 'genetics.ChromosomeDipRef';

    /** the column name for the ChromosomeTypeRef field */
    const CHROMOSOMETYPEREF = 'genetics.ChromosomeTypeRef';

    /** the column name for the Metacentric field */
    const METACENTRIC = 'genetics.Metacentric';

    /** the column name for the SubMetacentric field */
    const SUBMETACENTRIC = 'genetics.SubMetacentric';

    /** the column name for the Subtelocentric field */
    const SUBTELOCENTRIC = 'genetics.Subtelocentric';

    /** the column name for the Telocentric field */
    const TELOCENTRIC = 'genetics.Telocentric';

    /** the column name for the MetaSubmetacentric field */
    const METASUBMETACENTRIC = 'genetics.MetaSubmetacentric';

    /** the column name for the SubteloAcrocentric field */
    const SUBTELOACROCENTRIC = 'genetics.SubteloAcrocentric';

    /** the column name for the ChromosomeArm field */
    const CHROMOSOMEARM = 'genetics.ChromosomeArm';

    /** the column name for the ChromosomeArmCalc field */
    const CHROMOSOMEARMCALC = 'genetics.ChromosomeArmCalc';

    /** the column name for the ChromosomeArmTemp field */
    const CHROMOSOMEARMTEMP = 'genetics.ChromosomeArmTemp';

    /** the column name for the ChromosomeArmRef field */
    const CHROMOSOMEARMREF = 'genetics.ChromosomeArmRef';

    /** the column name for the SexMech field */
    const SEXMECH = 'genetics.SexMech';

    /** the column name for the SexmechRef field */
    const SEXMECHREF = 'genetics.SexmechRef';

    /** the column name for the DNASequence field */
    const DNASEQUENCE = 'genetics.DNASequence';

    /** the column name for the DNASeqRef field */
    const DNASEQREF = 'genetics.DNASeqRef';

    /** the column name for the DNAAnalysis field */
    const DNAANALYSIS = 'genetics.DNAAnalysis';

    /** the column name for the DNAAnalRef field */
    const DNAANALREF = 'genetics.DNAAnalRef';

    /** the column name for the GeneticMarker field */
    const GENETICMARKER = 'genetics.GeneticMarker';

    /** the column name for the GMarkerRef field */
    const GMARKERREF = 'genetics.GMarkerRef';

    /** the column name for the DNA field */
    const DNA = 'genetics.DNA';

    /** the column name for the DNARef field */
    const DNAREF = 'genetics.DNARef';

    /** the column name for the RemarksRef field */
    const REMARKSREF = 'genetics.RemarksRef';

    /** the column name for the Entered field */
    const ENTERED = 'genetics.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'genetics.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'genetics.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'genetics.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'genetics.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'genetics.DateChecked';

    /** the column name for the Remark field */
    const REMARK = 'genetics.Remark';

    /** the column name for the TS field */
    const TS = 'genetics.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Genetics objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Genetics[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GeneticsPeer::$fieldNames[GeneticsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Geneticsrefno', 'Locality', 'CCode', 'Sex', 'Tissues', 'Chromosomeno', 'Chromosomeref', 'Chromosomedip', 'Chromosomediptemp', 'Chromosomedipmax', 'Chromosomedipref', 'Chromosometyperef', 'Metacentric', 'Submetacentric', 'Subtelocentric', 'Telocentric', 'Metasubmetacentric', 'Subteloacrocentric', 'Chromosomearm', 'Chromosomearmcalc', 'Chromosomearmtemp', 'Chromosomearmref', 'Sexmech', 'Sexmechref', 'Dnasequence', 'Dnaseqref', 'Dnaanalysis', 'Dnaanalref', 'Geneticmarker', 'Gmarkerref', 'Dna', 'Dnaref', 'Remarksref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Remark', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'geneticsrefno', 'locality', 'cCode', 'sex', 'tissues', 'chromosomeno', 'chromosomeref', 'chromosomedip', 'chromosomediptemp', 'chromosomedipmax', 'chromosomedipref', 'chromosometyperef', 'metacentric', 'submetacentric', 'subtelocentric', 'telocentric', 'metasubmetacentric', 'subteloacrocentric', 'chromosomearm', 'chromosomearmcalc', 'chromosomearmtemp', 'chromosomearmref', 'sexmech', 'sexmechref', 'dnasequence', 'dnaseqref', 'dnaanalysis', 'dnaanalref', 'geneticmarker', 'gmarkerref', 'dna', 'dnaref', 'remarksref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'remark', 'ts', ),
        BasePeer::TYPE_COLNAME => array (GeneticsPeer::AUTOCTR, GeneticsPeer::STOCKCODE, GeneticsPeer::SPECCODE, GeneticsPeer::GENETICSREFNO, GeneticsPeer::LOCALITY, GeneticsPeer::C_CODE, GeneticsPeer::SEX, GeneticsPeer::TISSUES, GeneticsPeer::CHROMOSOMENO, GeneticsPeer::CHROMOSOMEREF, GeneticsPeer::CHROMOSOMEDIP, GeneticsPeer::CHROMOSOMEDIPTEMP, GeneticsPeer::CHROMOSOMEDIPMAX, GeneticsPeer::CHROMOSOMEDIPREF, GeneticsPeer::CHROMOSOMETYPEREF, GeneticsPeer::METACENTRIC, GeneticsPeer::SUBMETACENTRIC, GeneticsPeer::SUBTELOCENTRIC, GeneticsPeer::TELOCENTRIC, GeneticsPeer::METASUBMETACENTRIC, GeneticsPeer::SUBTELOACROCENTRIC, GeneticsPeer::CHROMOSOMEARM, GeneticsPeer::CHROMOSOMEARMCALC, GeneticsPeer::CHROMOSOMEARMTEMP, GeneticsPeer::CHROMOSOMEARMREF, GeneticsPeer::SEXMECH, GeneticsPeer::SEXMECHREF, GeneticsPeer::DNASEQUENCE, GeneticsPeer::DNASEQREF, GeneticsPeer::DNAANALYSIS, GeneticsPeer::DNAANALREF, GeneticsPeer::GENETICMARKER, GeneticsPeer::GMARKERREF, GeneticsPeer::DNA, GeneticsPeer::DNAREF, GeneticsPeer::REMARKSREF, GeneticsPeer::ENTERED, GeneticsPeer::DATEENTERED, GeneticsPeer::MODIFIED, GeneticsPeer::DATEMODIFIED, GeneticsPeer::EXPERT, GeneticsPeer::DATECHECKED, GeneticsPeer::REMARK, GeneticsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'GENETICSREFNO', 'LOCALITY', 'C_CODE', 'SEX', 'TISSUES', 'CHROMOSOMENO', 'CHROMOSOMEREF', 'CHROMOSOMEDIP', 'CHROMOSOMEDIPTEMP', 'CHROMOSOMEDIPMAX', 'CHROMOSOMEDIPREF', 'CHROMOSOMETYPEREF', 'METACENTRIC', 'SUBMETACENTRIC', 'SUBTELOCENTRIC', 'TELOCENTRIC', 'METASUBMETACENTRIC', 'SUBTELOACROCENTRIC', 'CHROMOSOMEARM', 'CHROMOSOMEARMCALC', 'CHROMOSOMEARMTEMP', 'CHROMOSOMEARMREF', 'SEXMECH', 'SEXMECHREF', 'DNASEQUENCE', 'DNASEQREF', 'DNAANALYSIS', 'DNAANALREF', 'GENETICMARKER', 'GMARKERREF', 'DNA', 'DNAREF', 'REMARKSREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'REMARK', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'GeneticsRefNo', 'Locality', 'C_Code', 'Sex', 'Tissues', 'ChromosomeNo', 'ChromosomeRef', 'ChromosomeDip', 'ChromosomeDipTemp', 'ChromosomeDipMax', 'ChromosomeDipRef', 'ChromosomeTypeRef', 'Metacentric', 'SubMetacentric', 'Subtelocentric', 'Telocentric', 'MetaSubmetacentric', 'SubteloAcrocentric', 'ChromosomeArm', 'ChromosomeArmCalc', 'ChromosomeArmTemp', 'ChromosomeArmRef', 'SexMech', 'SexmechRef', 'DNASequence', 'DNASeqRef', 'DNAAnalysis', 'DNAAnalRef', 'GeneticMarker', 'GMarkerRef', 'DNA', 'DNARef', 'RemarksRef', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Remark', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GeneticsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Geneticsrefno' => 3, 'Locality' => 4, 'CCode' => 5, 'Sex' => 6, 'Tissues' => 7, 'Chromosomeno' => 8, 'Chromosomeref' => 9, 'Chromosomedip' => 10, 'Chromosomediptemp' => 11, 'Chromosomedipmax' => 12, 'Chromosomedipref' => 13, 'Chromosometyperef' => 14, 'Metacentric' => 15, 'Submetacentric' => 16, 'Subtelocentric' => 17, 'Telocentric' => 18, 'Metasubmetacentric' => 19, 'Subteloacrocentric' => 20, 'Chromosomearm' => 21, 'Chromosomearmcalc' => 22, 'Chromosomearmtemp' => 23, 'Chromosomearmref' => 24, 'Sexmech' => 25, 'Sexmechref' => 26, 'Dnasequence' => 27, 'Dnaseqref' => 28, 'Dnaanalysis' => 29, 'Dnaanalref' => 30, 'Geneticmarker' => 31, 'Gmarkerref' => 32, 'Dna' => 33, 'Dnaref' => 34, 'Remarksref' => 35, 'Entered' => 36, 'Dateentered' => 37, 'Modified' => 38, 'Datemodified' => 39, 'Expert' => 40, 'Datechecked' => 41, 'Remark' => 42, 'Ts' => 43, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'geneticsrefno' => 3, 'locality' => 4, 'cCode' => 5, 'sex' => 6, 'tissues' => 7, 'chromosomeno' => 8, 'chromosomeref' => 9, 'chromosomedip' => 10, 'chromosomediptemp' => 11, 'chromosomedipmax' => 12, 'chromosomedipref' => 13, 'chromosometyperef' => 14, 'metacentric' => 15, 'submetacentric' => 16, 'subtelocentric' => 17, 'telocentric' => 18, 'metasubmetacentric' => 19, 'subteloacrocentric' => 20, 'chromosomearm' => 21, 'chromosomearmcalc' => 22, 'chromosomearmtemp' => 23, 'chromosomearmref' => 24, 'sexmech' => 25, 'sexmechref' => 26, 'dnasequence' => 27, 'dnaseqref' => 28, 'dnaanalysis' => 29, 'dnaanalref' => 30, 'geneticmarker' => 31, 'gmarkerref' => 32, 'dna' => 33, 'dnaref' => 34, 'remarksref' => 35, 'entered' => 36, 'dateentered' => 37, 'modified' => 38, 'datemodified' => 39, 'expert' => 40, 'datechecked' => 41, 'remark' => 42, 'ts' => 43, ),
        BasePeer::TYPE_COLNAME => array (GeneticsPeer::AUTOCTR => 0, GeneticsPeer::STOCKCODE => 1, GeneticsPeer::SPECCODE => 2, GeneticsPeer::GENETICSREFNO => 3, GeneticsPeer::LOCALITY => 4, GeneticsPeer::C_CODE => 5, GeneticsPeer::SEX => 6, GeneticsPeer::TISSUES => 7, GeneticsPeer::CHROMOSOMENO => 8, GeneticsPeer::CHROMOSOMEREF => 9, GeneticsPeer::CHROMOSOMEDIP => 10, GeneticsPeer::CHROMOSOMEDIPTEMP => 11, GeneticsPeer::CHROMOSOMEDIPMAX => 12, GeneticsPeer::CHROMOSOMEDIPREF => 13, GeneticsPeer::CHROMOSOMETYPEREF => 14, GeneticsPeer::METACENTRIC => 15, GeneticsPeer::SUBMETACENTRIC => 16, GeneticsPeer::SUBTELOCENTRIC => 17, GeneticsPeer::TELOCENTRIC => 18, GeneticsPeer::METASUBMETACENTRIC => 19, GeneticsPeer::SUBTELOACROCENTRIC => 20, GeneticsPeer::CHROMOSOMEARM => 21, GeneticsPeer::CHROMOSOMEARMCALC => 22, GeneticsPeer::CHROMOSOMEARMTEMP => 23, GeneticsPeer::CHROMOSOMEARMREF => 24, GeneticsPeer::SEXMECH => 25, GeneticsPeer::SEXMECHREF => 26, GeneticsPeer::DNASEQUENCE => 27, GeneticsPeer::DNASEQREF => 28, GeneticsPeer::DNAANALYSIS => 29, GeneticsPeer::DNAANALREF => 30, GeneticsPeer::GENETICMARKER => 31, GeneticsPeer::GMARKERREF => 32, GeneticsPeer::DNA => 33, GeneticsPeer::DNAREF => 34, GeneticsPeer::REMARKSREF => 35, GeneticsPeer::ENTERED => 36, GeneticsPeer::DATEENTERED => 37, GeneticsPeer::MODIFIED => 38, GeneticsPeer::DATEMODIFIED => 39, GeneticsPeer::EXPERT => 40, GeneticsPeer::DATECHECKED => 41, GeneticsPeer::REMARK => 42, GeneticsPeer::TS => 43, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'GENETICSREFNO' => 3, 'LOCALITY' => 4, 'C_CODE' => 5, 'SEX' => 6, 'TISSUES' => 7, 'CHROMOSOMENO' => 8, 'CHROMOSOMEREF' => 9, 'CHROMOSOMEDIP' => 10, 'CHROMOSOMEDIPTEMP' => 11, 'CHROMOSOMEDIPMAX' => 12, 'CHROMOSOMEDIPREF' => 13, 'CHROMOSOMETYPEREF' => 14, 'METACENTRIC' => 15, 'SUBMETACENTRIC' => 16, 'SUBTELOCENTRIC' => 17, 'TELOCENTRIC' => 18, 'METASUBMETACENTRIC' => 19, 'SUBTELOACROCENTRIC' => 20, 'CHROMOSOMEARM' => 21, 'CHROMOSOMEARMCALC' => 22, 'CHROMOSOMEARMTEMP' => 23, 'CHROMOSOMEARMREF' => 24, 'SEXMECH' => 25, 'SEXMECHREF' => 26, 'DNASEQUENCE' => 27, 'DNASEQREF' => 28, 'DNAANALYSIS' => 29, 'DNAANALREF' => 30, 'GENETICMARKER' => 31, 'GMARKERREF' => 32, 'DNA' => 33, 'DNAREF' => 34, 'REMARKSREF' => 35, 'ENTERED' => 36, 'DATEENTERED' => 37, 'MODIFIED' => 38, 'DATEMODIFIED' => 39, 'EXPERT' => 40, 'DATECHECKED' => 41, 'REMARK' => 42, 'TS' => 43, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'GeneticsRefNo' => 3, 'Locality' => 4, 'C_Code' => 5, 'Sex' => 6, 'Tissues' => 7, 'ChromosomeNo' => 8, 'ChromosomeRef' => 9, 'ChromosomeDip' => 10, 'ChromosomeDipTemp' => 11, 'ChromosomeDipMax' => 12, 'ChromosomeDipRef' => 13, 'ChromosomeTypeRef' => 14, 'Metacentric' => 15, 'SubMetacentric' => 16, 'Subtelocentric' => 17, 'Telocentric' => 18, 'MetaSubmetacentric' => 19, 'SubteloAcrocentric' => 20, 'ChromosomeArm' => 21, 'ChromosomeArmCalc' => 22, 'ChromosomeArmTemp' => 23, 'ChromosomeArmRef' => 24, 'SexMech' => 25, 'SexmechRef' => 26, 'DNASequence' => 27, 'DNASeqRef' => 28, 'DNAAnalysis' => 29, 'DNAAnalRef' => 30, 'GeneticMarker' => 31, 'GMarkerRef' => 32, 'DNA' => 33, 'DNARef' => 34, 'RemarksRef' => 35, 'Entered' => 36, 'DateEntered' => 37, 'Modified' => 38, 'DateModified' => 39, 'Expert' => 40, 'DateChecked' => 41, 'Remark' => 42, 'TS' => 43, ),
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
        $toNames = GeneticsPeer::getFieldNames($toType);
        $key = isset(GeneticsPeer::$fieldKeys[$fromType][$name]) ? GeneticsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GeneticsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GeneticsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GeneticsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GeneticsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GeneticsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GeneticsPeer::AUTOCTR);
            $criteria->addSelectColumn(GeneticsPeer::STOCKCODE);
            $criteria->addSelectColumn(GeneticsPeer::SPECCODE);
            $criteria->addSelectColumn(GeneticsPeer::GENETICSREFNO);
            $criteria->addSelectColumn(GeneticsPeer::LOCALITY);
            $criteria->addSelectColumn(GeneticsPeer::C_CODE);
            $criteria->addSelectColumn(GeneticsPeer::SEX);
            $criteria->addSelectColumn(GeneticsPeer::TISSUES);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMENO);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEREF);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEDIP);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEDIPTEMP);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEDIPMAX);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEDIPREF);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMETYPEREF);
            $criteria->addSelectColumn(GeneticsPeer::METACENTRIC);
            $criteria->addSelectColumn(GeneticsPeer::SUBMETACENTRIC);
            $criteria->addSelectColumn(GeneticsPeer::SUBTELOCENTRIC);
            $criteria->addSelectColumn(GeneticsPeer::TELOCENTRIC);
            $criteria->addSelectColumn(GeneticsPeer::METASUBMETACENTRIC);
            $criteria->addSelectColumn(GeneticsPeer::SUBTELOACROCENTRIC);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEARM);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEARMCALC);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEARMTEMP);
            $criteria->addSelectColumn(GeneticsPeer::CHROMOSOMEARMREF);
            $criteria->addSelectColumn(GeneticsPeer::SEXMECH);
            $criteria->addSelectColumn(GeneticsPeer::SEXMECHREF);
            $criteria->addSelectColumn(GeneticsPeer::DNASEQUENCE);
            $criteria->addSelectColumn(GeneticsPeer::DNASEQREF);
            $criteria->addSelectColumn(GeneticsPeer::DNAANALYSIS);
            $criteria->addSelectColumn(GeneticsPeer::DNAANALREF);
            $criteria->addSelectColumn(GeneticsPeer::GENETICMARKER);
            $criteria->addSelectColumn(GeneticsPeer::GMARKERREF);
            $criteria->addSelectColumn(GeneticsPeer::DNA);
            $criteria->addSelectColumn(GeneticsPeer::DNAREF);
            $criteria->addSelectColumn(GeneticsPeer::REMARKSREF);
            $criteria->addSelectColumn(GeneticsPeer::ENTERED);
            $criteria->addSelectColumn(GeneticsPeer::DATEENTERED);
            $criteria->addSelectColumn(GeneticsPeer::MODIFIED);
            $criteria->addSelectColumn(GeneticsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(GeneticsPeer::EXPERT);
            $criteria->addSelectColumn(GeneticsPeer::DATECHECKED);
            $criteria->addSelectColumn(GeneticsPeer::REMARK);
            $criteria->addSelectColumn(GeneticsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.GeneticsRefNo');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Tissues');
            $criteria->addSelectColumn($alias . '.ChromosomeNo');
            $criteria->addSelectColumn($alias . '.ChromosomeRef');
            $criteria->addSelectColumn($alias . '.ChromosomeDip');
            $criteria->addSelectColumn($alias . '.ChromosomeDipTemp');
            $criteria->addSelectColumn($alias . '.ChromosomeDipMax');
            $criteria->addSelectColumn($alias . '.ChromosomeDipRef');
            $criteria->addSelectColumn($alias . '.ChromosomeTypeRef');
            $criteria->addSelectColumn($alias . '.Metacentric');
            $criteria->addSelectColumn($alias . '.SubMetacentric');
            $criteria->addSelectColumn($alias . '.Subtelocentric');
            $criteria->addSelectColumn($alias . '.Telocentric');
            $criteria->addSelectColumn($alias . '.MetaSubmetacentric');
            $criteria->addSelectColumn($alias . '.SubteloAcrocentric');
            $criteria->addSelectColumn($alias . '.ChromosomeArm');
            $criteria->addSelectColumn($alias . '.ChromosomeArmCalc');
            $criteria->addSelectColumn($alias . '.ChromosomeArmTemp');
            $criteria->addSelectColumn($alias . '.ChromosomeArmRef');
            $criteria->addSelectColumn($alias . '.SexMech');
            $criteria->addSelectColumn($alias . '.SexmechRef');
            $criteria->addSelectColumn($alias . '.DNASequence');
            $criteria->addSelectColumn($alias . '.DNASeqRef');
            $criteria->addSelectColumn($alias . '.DNAAnalysis');
            $criteria->addSelectColumn($alias . '.DNAAnalRef');
            $criteria->addSelectColumn($alias . '.GeneticMarker');
            $criteria->addSelectColumn($alias . '.GMarkerRef');
            $criteria->addSelectColumn($alias . '.DNA');
            $criteria->addSelectColumn($alias . '.DNARef');
            $criteria->addSelectColumn($alias . '.RemarksRef');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Remark');
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
        $criteria->setPrimaryTableName(GeneticsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GeneticsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GeneticsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Genetics
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GeneticsPeer::doSelect($critcopy, $con);
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
        return GeneticsPeer::populateObjects(GeneticsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GeneticsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GeneticsPeer::DATABASE_NAME);

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
     * @param Genetics $obj A Genetics object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            GeneticsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Genetics object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Genetics) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Genetics object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GeneticsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Genetics Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GeneticsPeer::$instances[$key])) {
                return GeneticsPeer::$instances[$key];
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
        foreach (GeneticsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GeneticsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to genetics
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
        $cls = GeneticsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GeneticsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GeneticsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GeneticsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Genetics object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GeneticsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GeneticsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GeneticsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GeneticsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GeneticsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GeneticsPeer::DATABASE_NAME)->getTable(GeneticsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGeneticsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGeneticsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GeneticsTableMap());
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
        return GeneticsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Genetics or Criteria object.
     *
     * @param      mixed $values Criteria or Genetics object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Genetics object
        }

        if ($criteria->containsKey(GeneticsPeer::AUTOCTR) && $criteria->keyContainsValue(GeneticsPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GeneticsPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GeneticsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Genetics or Criteria object.
     *
     * @param      mixed $values Criteria or Genetics object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GeneticsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GeneticsPeer::AUTOCTR);
            $value = $criteria->remove(GeneticsPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(GeneticsPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GeneticsPeer::TABLE_NAME);
            }

        } else { // $values is Genetics object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GeneticsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the genetics table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GeneticsPeer::TABLE_NAME, $con, GeneticsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GeneticsPeer::clearInstancePool();
            GeneticsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Genetics or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Genetics object or primary key or array of primary keys
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
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GeneticsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Genetics) { // it's a model object
            // invalidate the cache for this single object
            GeneticsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GeneticsPeer::DATABASE_NAME);
            $criteria->add(GeneticsPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GeneticsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GeneticsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GeneticsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Genetics object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Genetics $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GeneticsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GeneticsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GeneticsPeer::DATABASE_NAME, GeneticsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Genetics
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GeneticsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GeneticsPeer::DATABASE_NAME);
        $criteria->add(GeneticsPeer::AUTOCTR, $pk);

        $v = GeneticsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Genetics[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneticsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GeneticsPeer::DATABASE_NAME);
            $criteria->add(GeneticsPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = GeneticsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGeneticsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGeneticsPeer::buildTableMap();

