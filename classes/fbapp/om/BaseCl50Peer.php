<?php


/**
 * Base static class for performing query and update operations on the 'cl50' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCl50Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'cl50';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cl50';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Cl50TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 45;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 45;

    /** the column name for the CL50Code field */
    const CL50CODE = 'cl50.CL50Code';

    /** the column name for the Genus field */
    const GENUS = 'cl50.Genus';

    /** the column name for the Species field */
    const SPECIES = 'cl50.Species';

    /** the column name for the SpecCode field */
    const SPECCODE = 'cl50.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'cl50.StockCode';

    /** the column name for the Family field */
    const FAMILY = 'cl50.Family';

    /** the column name for the famcode field */
    const FAMCODE = 'cl50.famcode';

    /** the column name for the Number2 field */
    const NUMBER2 = 'cl50.Number2';

    /** the column name for the Sex2 field */
    const SEX2 = 'cl50.Sex2';

    /** the column name for the CL50RefNo field */
    const CL50REFNO = 'cl50.CL50RefNo';

    /** the column name for the MinimumWeight field */
    const MINIMUMWEIGHT = 'cl50.MinimumWeight';

    /** the column name for the ModalWeight field */
    const MODALWEIGHT = 'cl50.ModalWeight';

    /** the column name for the MaximumWeight field */
    const MAXIMUMWEIGHT = 'cl50.MaximumWeight';

    /** the column name for the LifeStage field */
    const LIFESTAGE = 'cl50.LifeStage';

    /** the column name for the Length field */
    const LENGTH = 'cl50.Length';

    /** the column name for the AppliedStress field */
    const APPLIEDSTRESS = 'cl50.AppliedStress';

    /** the column name for the DataRef field */
    const DATAREF = 'cl50.DataRef';

    /** the column name for the Temp field */
    const TEMP = 'cl50.Temp';

    /** the column name for the Salinity field */
    const SALINITY = 'cl50.Salinity';

    /** the column name for the Oxygen field */
    const OXYGEN = 'cl50.Oxygen';

    /** the column name for the Oxygenmgl field */
    const OXYGENMGL = 'cl50.Oxygenmgl';

    /** the column name for the pH field */
    const PH = 'cl50.pH';

    /** the column name for the Alkalinity field */
    const ALKALINITY = 'cl50.Alkalinity';

    /** the column name for the ChemicalGroup field */
    const CHEMICALGROUP = 'cl50.ChemicalGroup';

    /** the column name for the ChemicalGroup2 field */
    const CHEMICALGROUP2 = 'cl50.ChemicalGroup2';

    /** the column name for the ChemicalName field */
    const CHEMICALNAME = 'cl50.ChemicalName';

    /** the column name for the Purity field */
    const PURITY = 'cl50.Purity';

    /** the column name for the Vehicle field */
    const VEHICLE = 'cl50.Vehicle';

    /** the column name for the Purity2 field */
    const PURITY2 = 'cl50.Purity2';

    /** the column name for the CommonName field */
    const COMMONNAME = 'cl50.CommonName';

    /** the column name for the ChemicalUse field */
    const CHEMICALUSE = 'cl50.ChemicalUse';

    /** the column name for the CL50 field */
    const CL50 = 'cl50.CL50';

    /** the column name for the Exposition field */
    const EXPOSITION = 'cl50.Exposition';

    /** the column name for the Flow field */
    const FLOW = 'cl50.Flow';

    /** the column name for the FlowRate field */
    const FLOWRATE = 'cl50.FlowRate';

    /** the column name for the Comments field */
    const COMMENTS = 'cl50.Comments';

    /** the column name for the CL50RefNoFB field */
    const CL50REFNOFB = 'cl50.CL50RefNoFB';

    /** the column name for the DataRefFb field */
    const DATAREFFB = 'cl50.DataRefFb';

    /** the column name for the Entered field */
    const ENTERED = 'cl50.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'cl50.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'cl50.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'cl50.DateModified';

    /** the column name for the Checked field */
    const CHECKED = 'cl50.Checked';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'cl50.DateChecked';

    /** the column name for the TS field */
    const TS = 'cl50.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cl50 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cl50[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. Cl50Peer::$fieldNames[Cl50Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Cl50code', 'Genus', 'Species', 'Speccode', 'Stockcode', 'Family', 'Famcode', 'Number2', 'Sex2', 'Cl50refno', 'Minimumweight', 'Modalweight', 'Maximumweight', 'Lifestage', 'Length', 'Appliedstress', 'Dataref', 'Temp', 'Salinity', 'Oxygen', 'Oxygenmgl', 'Ph', 'Alkalinity', 'Chemicalgroup', 'Chemicalgroup2', 'Chemicalname', 'Purity', 'Vehicle', 'Purity2', 'Commonname', 'Chemicaluse', 'Cl50', 'Exposition', 'Flow', 'Flowrate', 'Comments', 'Cl50refnofb', 'Datareffb', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Checked', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('cl50code', 'genus', 'species', 'speccode', 'stockcode', 'family', 'famcode', 'number2', 'sex2', 'cl50refno', 'minimumweight', 'modalweight', 'maximumweight', 'lifestage', 'length', 'appliedstress', 'dataref', 'temp', 'salinity', 'oxygen', 'oxygenmgl', 'ph', 'alkalinity', 'chemicalgroup', 'chemicalgroup2', 'chemicalname', 'purity', 'vehicle', 'purity2', 'commonname', 'chemicaluse', 'cl50', 'exposition', 'flow', 'flowrate', 'comments', 'cl50refnofb', 'datareffb', 'entered', 'dateentered', 'modified', 'datemodified', 'checked', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (Cl50Peer::CL50CODE, Cl50Peer::GENUS, Cl50Peer::SPECIES, Cl50Peer::SPECCODE, Cl50Peer::STOCKCODE, Cl50Peer::FAMILY, Cl50Peer::FAMCODE, Cl50Peer::NUMBER2, Cl50Peer::SEX2, Cl50Peer::CL50REFNO, Cl50Peer::MINIMUMWEIGHT, Cl50Peer::MODALWEIGHT, Cl50Peer::MAXIMUMWEIGHT, Cl50Peer::LIFESTAGE, Cl50Peer::LENGTH, Cl50Peer::APPLIEDSTRESS, Cl50Peer::DATAREF, Cl50Peer::TEMP, Cl50Peer::SALINITY, Cl50Peer::OXYGEN, Cl50Peer::OXYGENMGL, Cl50Peer::PH, Cl50Peer::ALKALINITY, Cl50Peer::CHEMICALGROUP, Cl50Peer::CHEMICALGROUP2, Cl50Peer::CHEMICALNAME, Cl50Peer::PURITY, Cl50Peer::VEHICLE, Cl50Peer::PURITY2, Cl50Peer::COMMONNAME, Cl50Peer::CHEMICALUSE, Cl50Peer::CL50, Cl50Peer::EXPOSITION, Cl50Peer::FLOW, Cl50Peer::FLOWRATE, Cl50Peer::COMMENTS, Cl50Peer::CL50REFNOFB, Cl50Peer::DATAREFFB, Cl50Peer::ENTERED, Cl50Peer::DATEENTERED, Cl50Peer::MODIFIED, Cl50Peer::DATEMODIFIED, Cl50Peer::CHECKED, Cl50Peer::DATECHECKED, Cl50Peer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL50CODE', 'GENUS', 'SPECIES', 'SPECCODE', 'STOCKCODE', 'FAMILY', 'FAMCODE', 'NUMBER2', 'SEX2', 'CL50REFNO', 'MINIMUMWEIGHT', 'MODALWEIGHT', 'MAXIMUMWEIGHT', 'LIFESTAGE', 'LENGTH', 'APPLIEDSTRESS', 'DATAREF', 'TEMP', 'SALINITY', 'OXYGEN', 'OXYGENMGL', 'PH', 'ALKALINITY', 'CHEMICALGROUP', 'CHEMICALGROUP2', 'CHEMICALNAME', 'PURITY', 'VEHICLE', 'PURITY2', 'COMMONNAME', 'CHEMICALUSE', 'CL50', 'EXPOSITION', 'FLOW', 'FLOWRATE', 'COMMENTS', 'CL50REFNOFB', 'DATAREFFB', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'CHECKED', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('CL50Code', 'Genus', 'Species', 'SpecCode', 'StockCode', 'Family', 'famcode', 'Number2', 'Sex2', 'CL50RefNo', 'MinimumWeight', 'ModalWeight', 'MaximumWeight', 'LifeStage', 'Length', 'AppliedStress', 'DataRef', 'Temp', 'Salinity', 'Oxygen', 'Oxygenmgl', 'pH', 'Alkalinity', 'ChemicalGroup', 'ChemicalGroup2', 'ChemicalName', 'Purity', 'Vehicle', 'Purity2', 'CommonName', 'ChemicalUse', 'CL50', 'Exposition', 'Flow', 'FlowRate', 'Comments', 'CL50RefNoFB', 'DataRefFb', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Checked', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. Cl50Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Cl50code' => 0, 'Genus' => 1, 'Species' => 2, 'Speccode' => 3, 'Stockcode' => 4, 'Family' => 5, 'Famcode' => 6, 'Number2' => 7, 'Sex2' => 8, 'Cl50refno' => 9, 'Minimumweight' => 10, 'Modalweight' => 11, 'Maximumweight' => 12, 'Lifestage' => 13, 'Length' => 14, 'Appliedstress' => 15, 'Dataref' => 16, 'Temp' => 17, 'Salinity' => 18, 'Oxygen' => 19, 'Oxygenmgl' => 20, 'Ph' => 21, 'Alkalinity' => 22, 'Chemicalgroup' => 23, 'Chemicalgroup2' => 24, 'Chemicalname' => 25, 'Purity' => 26, 'Vehicle' => 27, 'Purity2' => 28, 'Commonname' => 29, 'Chemicaluse' => 30, 'Cl50' => 31, 'Exposition' => 32, 'Flow' => 33, 'Flowrate' => 34, 'Comments' => 35, 'Cl50refnofb' => 36, 'Datareffb' => 37, 'Entered' => 38, 'Dateentered' => 39, 'Modified' => 40, 'Datemodified' => 41, 'Checked' => 42, 'Datechecked' => 43, 'Ts' => 44, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('cl50code' => 0, 'genus' => 1, 'species' => 2, 'speccode' => 3, 'stockcode' => 4, 'family' => 5, 'famcode' => 6, 'number2' => 7, 'sex2' => 8, 'cl50refno' => 9, 'minimumweight' => 10, 'modalweight' => 11, 'maximumweight' => 12, 'lifestage' => 13, 'length' => 14, 'appliedstress' => 15, 'dataref' => 16, 'temp' => 17, 'salinity' => 18, 'oxygen' => 19, 'oxygenmgl' => 20, 'ph' => 21, 'alkalinity' => 22, 'chemicalgroup' => 23, 'chemicalgroup2' => 24, 'chemicalname' => 25, 'purity' => 26, 'vehicle' => 27, 'purity2' => 28, 'commonname' => 29, 'chemicaluse' => 30, 'cl50' => 31, 'exposition' => 32, 'flow' => 33, 'flowrate' => 34, 'comments' => 35, 'cl50refnofb' => 36, 'datareffb' => 37, 'entered' => 38, 'dateentered' => 39, 'modified' => 40, 'datemodified' => 41, 'checked' => 42, 'datechecked' => 43, 'ts' => 44, ),
        BasePeer::TYPE_COLNAME => array (Cl50Peer::CL50CODE => 0, Cl50Peer::GENUS => 1, Cl50Peer::SPECIES => 2, Cl50Peer::SPECCODE => 3, Cl50Peer::STOCKCODE => 4, Cl50Peer::FAMILY => 5, Cl50Peer::FAMCODE => 6, Cl50Peer::NUMBER2 => 7, Cl50Peer::SEX2 => 8, Cl50Peer::CL50REFNO => 9, Cl50Peer::MINIMUMWEIGHT => 10, Cl50Peer::MODALWEIGHT => 11, Cl50Peer::MAXIMUMWEIGHT => 12, Cl50Peer::LIFESTAGE => 13, Cl50Peer::LENGTH => 14, Cl50Peer::APPLIEDSTRESS => 15, Cl50Peer::DATAREF => 16, Cl50Peer::TEMP => 17, Cl50Peer::SALINITY => 18, Cl50Peer::OXYGEN => 19, Cl50Peer::OXYGENMGL => 20, Cl50Peer::PH => 21, Cl50Peer::ALKALINITY => 22, Cl50Peer::CHEMICALGROUP => 23, Cl50Peer::CHEMICALGROUP2 => 24, Cl50Peer::CHEMICALNAME => 25, Cl50Peer::PURITY => 26, Cl50Peer::VEHICLE => 27, Cl50Peer::PURITY2 => 28, Cl50Peer::COMMONNAME => 29, Cl50Peer::CHEMICALUSE => 30, Cl50Peer::CL50 => 31, Cl50Peer::EXPOSITION => 32, Cl50Peer::FLOW => 33, Cl50Peer::FLOWRATE => 34, Cl50Peer::COMMENTS => 35, Cl50Peer::CL50REFNOFB => 36, Cl50Peer::DATAREFFB => 37, Cl50Peer::ENTERED => 38, Cl50Peer::DATEENTERED => 39, Cl50Peer::MODIFIED => 40, Cl50Peer::DATEMODIFIED => 41, Cl50Peer::CHECKED => 42, Cl50Peer::DATECHECKED => 43, Cl50Peer::TS => 44, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CL50CODE' => 0, 'GENUS' => 1, 'SPECIES' => 2, 'SPECCODE' => 3, 'STOCKCODE' => 4, 'FAMILY' => 5, 'FAMCODE' => 6, 'NUMBER2' => 7, 'SEX2' => 8, 'CL50REFNO' => 9, 'MINIMUMWEIGHT' => 10, 'MODALWEIGHT' => 11, 'MAXIMUMWEIGHT' => 12, 'LIFESTAGE' => 13, 'LENGTH' => 14, 'APPLIEDSTRESS' => 15, 'DATAREF' => 16, 'TEMP' => 17, 'SALINITY' => 18, 'OXYGEN' => 19, 'OXYGENMGL' => 20, 'PH' => 21, 'ALKALINITY' => 22, 'CHEMICALGROUP' => 23, 'CHEMICALGROUP2' => 24, 'CHEMICALNAME' => 25, 'PURITY' => 26, 'VEHICLE' => 27, 'PURITY2' => 28, 'COMMONNAME' => 29, 'CHEMICALUSE' => 30, 'CL50' => 31, 'EXPOSITION' => 32, 'FLOW' => 33, 'FLOWRATE' => 34, 'COMMENTS' => 35, 'CL50REFNOFB' => 36, 'DATAREFFB' => 37, 'ENTERED' => 38, 'DATEENTERED' => 39, 'MODIFIED' => 40, 'DATEMODIFIED' => 41, 'CHECKED' => 42, 'DATECHECKED' => 43, 'TS' => 44, ),
        BasePeer::TYPE_FIELDNAME => array ('CL50Code' => 0, 'Genus' => 1, 'Species' => 2, 'SpecCode' => 3, 'StockCode' => 4, 'Family' => 5, 'famcode' => 6, 'Number2' => 7, 'Sex2' => 8, 'CL50RefNo' => 9, 'MinimumWeight' => 10, 'ModalWeight' => 11, 'MaximumWeight' => 12, 'LifeStage' => 13, 'Length' => 14, 'AppliedStress' => 15, 'DataRef' => 16, 'Temp' => 17, 'Salinity' => 18, 'Oxygen' => 19, 'Oxygenmgl' => 20, 'pH' => 21, 'Alkalinity' => 22, 'ChemicalGroup' => 23, 'ChemicalGroup2' => 24, 'ChemicalName' => 25, 'Purity' => 26, 'Vehicle' => 27, 'Purity2' => 28, 'CommonName' => 29, 'ChemicalUse' => 30, 'CL50' => 31, 'Exposition' => 32, 'Flow' => 33, 'FlowRate' => 34, 'Comments' => 35, 'CL50RefNoFB' => 36, 'DataRefFb' => 37, 'Entered' => 38, 'DateEntered' => 39, 'Modified' => 40, 'DateModified' => 41, 'Checked' => 42, 'DateChecked' => 43, 'TS' => 44, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, )
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
        $toNames = Cl50Peer::getFieldNames($toType);
        $key = isset(Cl50Peer::$fieldKeys[$fromType][$name]) ? Cl50Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(Cl50Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, Cl50Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return Cl50Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. Cl50Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(Cl50Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(Cl50Peer::CL50CODE);
            $criteria->addSelectColumn(Cl50Peer::GENUS);
            $criteria->addSelectColumn(Cl50Peer::SPECIES);
            $criteria->addSelectColumn(Cl50Peer::SPECCODE);
            $criteria->addSelectColumn(Cl50Peer::STOCKCODE);
            $criteria->addSelectColumn(Cl50Peer::FAMILY);
            $criteria->addSelectColumn(Cl50Peer::FAMCODE);
            $criteria->addSelectColumn(Cl50Peer::NUMBER2);
            $criteria->addSelectColumn(Cl50Peer::SEX2);
            $criteria->addSelectColumn(Cl50Peer::CL50REFNO);
            $criteria->addSelectColumn(Cl50Peer::MINIMUMWEIGHT);
            $criteria->addSelectColumn(Cl50Peer::MODALWEIGHT);
            $criteria->addSelectColumn(Cl50Peer::MAXIMUMWEIGHT);
            $criteria->addSelectColumn(Cl50Peer::LIFESTAGE);
            $criteria->addSelectColumn(Cl50Peer::LENGTH);
            $criteria->addSelectColumn(Cl50Peer::APPLIEDSTRESS);
            $criteria->addSelectColumn(Cl50Peer::DATAREF);
            $criteria->addSelectColumn(Cl50Peer::TEMP);
            $criteria->addSelectColumn(Cl50Peer::SALINITY);
            $criteria->addSelectColumn(Cl50Peer::OXYGEN);
            $criteria->addSelectColumn(Cl50Peer::OXYGENMGL);
            $criteria->addSelectColumn(Cl50Peer::PH);
            $criteria->addSelectColumn(Cl50Peer::ALKALINITY);
            $criteria->addSelectColumn(Cl50Peer::CHEMICALGROUP);
            $criteria->addSelectColumn(Cl50Peer::CHEMICALGROUP2);
            $criteria->addSelectColumn(Cl50Peer::CHEMICALNAME);
            $criteria->addSelectColumn(Cl50Peer::PURITY);
            $criteria->addSelectColumn(Cl50Peer::VEHICLE);
            $criteria->addSelectColumn(Cl50Peer::PURITY2);
            $criteria->addSelectColumn(Cl50Peer::COMMONNAME);
            $criteria->addSelectColumn(Cl50Peer::CHEMICALUSE);
            $criteria->addSelectColumn(Cl50Peer::CL50);
            $criteria->addSelectColumn(Cl50Peer::EXPOSITION);
            $criteria->addSelectColumn(Cl50Peer::FLOW);
            $criteria->addSelectColumn(Cl50Peer::FLOWRATE);
            $criteria->addSelectColumn(Cl50Peer::COMMENTS);
            $criteria->addSelectColumn(Cl50Peer::CL50REFNOFB);
            $criteria->addSelectColumn(Cl50Peer::DATAREFFB);
            $criteria->addSelectColumn(Cl50Peer::ENTERED);
            $criteria->addSelectColumn(Cl50Peer::DATEENTERED);
            $criteria->addSelectColumn(Cl50Peer::MODIFIED);
            $criteria->addSelectColumn(Cl50Peer::DATEMODIFIED);
            $criteria->addSelectColumn(Cl50Peer::CHECKED);
            $criteria->addSelectColumn(Cl50Peer::DATECHECKED);
            $criteria->addSelectColumn(Cl50Peer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.CL50Code');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.Family');
            $criteria->addSelectColumn($alias . '.famcode');
            $criteria->addSelectColumn($alias . '.Number2');
            $criteria->addSelectColumn($alias . '.Sex2');
            $criteria->addSelectColumn($alias . '.CL50RefNo');
            $criteria->addSelectColumn($alias . '.MinimumWeight');
            $criteria->addSelectColumn($alias . '.ModalWeight');
            $criteria->addSelectColumn($alias . '.MaximumWeight');
            $criteria->addSelectColumn($alias . '.LifeStage');
            $criteria->addSelectColumn($alias . '.Length');
            $criteria->addSelectColumn($alias . '.AppliedStress');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.Temp');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.Oxygen');
            $criteria->addSelectColumn($alias . '.Oxygenmgl');
            $criteria->addSelectColumn($alias . '.pH');
            $criteria->addSelectColumn($alias . '.Alkalinity');
            $criteria->addSelectColumn($alias . '.ChemicalGroup');
            $criteria->addSelectColumn($alias . '.ChemicalGroup2');
            $criteria->addSelectColumn($alias . '.ChemicalName');
            $criteria->addSelectColumn($alias . '.Purity');
            $criteria->addSelectColumn($alias . '.Vehicle');
            $criteria->addSelectColumn($alias . '.Purity2');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.ChemicalUse');
            $criteria->addSelectColumn($alias . '.CL50');
            $criteria->addSelectColumn($alias . '.Exposition');
            $criteria->addSelectColumn($alias . '.Flow');
            $criteria->addSelectColumn($alias . '.FlowRate');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.CL50RefNoFB');
            $criteria->addSelectColumn($alias . '.DataRefFb');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Checked');
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
        $criteria->setPrimaryTableName(Cl50Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            Cl50Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(Cl50Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cl50
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = Cl50Peer::doSelect($critcopy, $con);
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
        return Cl50Peer::populateObjects(Cl50Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            Cl50Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(Cl50Peer::DATABASE_NAME);

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
     * @param Cl50 $obj A Cl50 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCl50code();
            } // if key === null
            Cl50Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cl50 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cl50) {
                $key = (string) $value->getCl50code();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cl50 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(Cl50Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cl50 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(Cl50Peer::$instances[$key])) {
                return Cl50Peer::$instances[$key];
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
        foreach (Cl50Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        Cl50Peer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cl50
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
        $cls = Cl50Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = Cl50Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = Cl50Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                Cl50Peer::addInstanceToPool($obj, $key);
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
     * @return array (Cl50 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = Cl50Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = Cl50Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + Cl50Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = Cl50Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            Cl50Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(Cl50Peer::DATABASE_NAME)->getTable(Cl50Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCl50Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCl50Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Cl50TableMap());
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
        return Cl50Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cl50 or Criteria object.
     *
     * @param      mixed $values Criteria or Cl50 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cl50 object
        }

        if ($criteria->containsKey(Cl50Peer::CL50CODE) && $criteria->keyContainsValue(Cl50Peer::CL50CODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.Cl50Peer::CL50CODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(Cl50Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cl50 or Criteria object.
     *
     * @param      mixed $values Criteria or Cl50 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(Cl50Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(Cl50Peer::CL50CODE);
            $value = $criteria->remove(Cl50Peer::CL50CODE);
            if ($value) {
                $selectCriteria->add(Cl50Peer::CL50CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(Cl50Peer::TABLE_NAME);
            }

        } else { // $values is Cl50 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(Cl50Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cl50 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(Cl50Peer::TABLE_NAME, $con, Cl50Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Cl50Peer::clearInstancePool();
            Cl50Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cl50 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cl50 object or primary key or array of primary keys
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
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            Cl50Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cl50) { // it's a model object
            // invalidate the cache for this single object
            Cl50Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(Cl50Peer::DATABASE_NAME);
            $criteria->add(Cl50Peer::CL50CODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                Cl50Peer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(Cl50Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            Cl50Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cl50 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cl50 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(Cl50Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(Cl50Peer::TABLE_NAME);

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

        return BasePeer::doValidate(Cl50Peer::DATABASE_NAME, Cl50Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cl50
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = Cl50Peer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(Cl50Peer::DATABASE_NAME);
        $criteria->add(Cl50Peer::CL50CODE, $pk);

        $v = Cl50Peer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cl50[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Cl50Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(Cl50Peer::DATABASE_NAME);
            $criteria->add(Cl50Peer::CL50CODE, $pks, Criteria::IN);
            $objs = Cl50Peer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCl50Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCl50Peer::buildTableMap();

