<?php


/**
 * Base static class for performing query and update operations on the 'orders' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseOrdersPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'orders';

    /** the related Propel class for this table */
    const OM_CLASS = 'Orders';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OrdersTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 54;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 54;

    /** the column name for the Ordnum field */
    const ORDNUM = 'orders.Ordnum';

    /** the column name for the Order field */
    const ORDER = 'orders.Order';

    /** the column name for the OrderRefNo field */
    const ORDERREFNO = 'orders.OrderRefNo';

    /** the column name for the SortNo field */
    const SORTNO = 'orders.SortNo';

    /** the column name for the Synonym field */
    const SYNONYM = 'orders.Synonym';

    /** the column name for the AuthorYear field */
    const AUTHORYEAR = 'orders.AuthorYear';

    /** the column name for the CommonName field */
    const COMMONNAME = 'orders.CommonName';

    /** the column name for the BodyShapeI field */
    const BODYSHAPEI = 'orders.BodyShapeI';

    /** the column name for the Marine field */
    const MARINE = 'orders.Marine';

    /** the column name for the Brackish field */
    const BRACKISH = 'orders.Brackish';

    /** the column name for the Freshwater field */
    const FRESHWATER = 'orders.Freshwater';

    /** the column name for the WaterSalinity field */
    const WATERSALINITY = 'orders.WaterSalinity';

    /** the column name for the FamCount field */
    const FAMCOUNT = 'orders.FamCount';

    /** the column name for the SpeciesCount field */
    const SPECIESCOUNT = 'orders.SpeciesCount';

    /** the column name for the EtymologyOrder field */
    const ETYMOLOGYORDER = 'orders.EtymologyOrder';

    /** the column name for the ClassNum field */
    const CLASSNUM = 'orders.ClassNum';

    /** the column name for the Class field */
    const CLAZZ = 'orders.Class';

    /** the column name for the ClassificationRemark field */
    const CLASSIFICATIONREMARK = 'orders.ClassificationRemark';

    /** the column name for the PhylogenyFamilies field */
    const PHYLOGENYFAMILIES = 'orders.PhylogenyFamilies';

    /** the column name for the PhylFamOrderRefNo field */
    const PHYLFAMORDERREFNO = 'orders.PhylFamOrderRefNo';

    /** the column name for the PhylogenyPostion field */
    const PHYLOGENYPOSTION = 'orders.PhylogenyPostion';

    /** the column name for the PhylPosOrderRefNo field */
    const PHYLPOSORDERREFNO = 'orders.PhylPosOrderRefNo';

    /** the column name for the SisterOrder field */
    const SISTERORDER = 'orders.SisterOrder';

    /** the column name for the ComAncestor field */
    const COMANCESTOR = 'orders.ComAncestor';

    /** the column name for the ComAncRef1 field */
    const COMANCREF1 = 'orders.ComAncRef1';

    /** the column name for the ComAncRef2 field */
    const COMANCREF2 = 'orders.ComAncRef2';

    /** the column name for the PeriodRange field */
    const PERIODRANGE = 'orders.PeriodRange';

    /** the column name for the Period field */
    const PERIOD = 'orders.Period';

    /** the column name for the EpochRange field */
    const EPOCHRANGE = 'orders.EpochRange';

    /** the column name for the Epoch field */
    const EPOCH = 'orders.Epoch';

    /** the column name for the Complete field */
    const COMPLETE = 'orders.Complete';

    /** the column name for the Remark field */
    const REMARK = 'orders.Remark';

    /** the column name for the Entered field */
    const ENTERED = 'orders.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'orders.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'orders.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'orders.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'orders.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'orders.DateChecked';

    /** the column name for the CommonName_German field */
    const COMMONNAME_GERMAN = 'orders.CommonName_German';

    /** the column name for the CommonName_French field */
    const COMMONNAME_FRENCH = 'orders.CommonName_French';

    /** the column name for the CommonName_Italian field */
    const COMMONNAME_ITALIAN = 'orders.CommonName_Italian';

    /** the column name for the CommonName_Spanish field */
    const COMMONNAME_SPANISH = 'orders.CommonName_Spanish';

    /** the column name for the CommonName_Portuguese field */
    const COMMONNAME_PORTUGUESE = 'orders.CommonName_Portuguese';

    /** the column name for the CommonName_Dutch field */
    const COMMONNAME_DUTCH = 'orders.CommonName_Dutch';

    /** the column name for the CommonName_Chinese field */
    const COMMONNAME_CHINESE = 'orders.CommonName_Chinese';

    /** the column name for the CommonName_Chinese_u field */
    const COMMONNAME_CHINESE_U = 'orders.CommonName_Chinese_u';

    /** the column name for the CommonName_Greek field */
    const COMMONNAME_GREEK = 'orders.CommonName_Greek';

    /** the column name for the CommonName_Greek_u field */
    const COMMONNAME_GREEK_U = 'orders.CommonName_Greek_u';

    /** the column name for the CommonName_Russian_u field */
    const COMMONNAME_RUSSIAN_U = 'orders.CommonName_Russian_u';

    /** the column name for the CommonName_Russian field */
    const COMMONNAME_RUSSIAN = 'orders.CommonName_Russian';

    /** the column name for the CommonName_Swedish field */
    const COMMONNAME_SWEDISH = 'orders.CommonName_Swedish';

    /** the column name for the Class_Russian field */
    const CLASS_RUSSIAN = 'orders.Class_Russian';

    /** the column name for the EtymologyClass field */
    const ETYMOLOGYCLASS = 'orders.EtymologyClass';

    /** the column name for the TS field */
    const TS = 'orders.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Orders objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Orders[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OrdersPeer::$fieldNames[OrdersPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Ordnum', 'Order', 'Orderrefno', 'Sortno', 'Synonym', 'Authoryear', 'Commonname', 'Bodyshapei', 'Marine', 'Brackish', 'Freshwater', 'Watersalinity', 'Famcount', 'Speciescount', 'Etymologyorder', 'Classnum', 'Class', 'Classificationremark', 'Phylogenyfamilies', 'Phylfamorderrefno', 'Phylogenypostion', 'Phylposorderrefno', 'Sisterorder', 'Comancestor', 'Comancref1', 'Comancref2', 'Periodrange', 'Period', 'Epochrange', 'Epoch', 'Complete', 'Remark', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'CommonnameGerman', 'CommonnameFrench', 'CommonnameItalian', 'CommonnameSpanish', 'CommonnamePortuguese', 'CommonnameDutch', 'CommonnameChinese', 'CommonnameChineseU', 'CommonnameGreek', 'CommonnameGreekU', 'CommonnameRussianU', 'CommonnameRussian', 'CommonnameSwedish', 'ClassRussian', 'Etymologyclass', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ordnum', 'order', 'orderrefno', 'sortno', 'synonym', 'authoryear', 'commonname', 'bodyshapei', 'marine', 'brackish', 'freshwater', 'watersalinity', 'famcount', 'speciescount', 'etymologyorder', 'classnum', 'class', 'classificationremark', 'phylogenyfamilies', 'phylfamorderrefno', 'phylogenypostion', 'phylposorderrefno', 'sisterorder', 'comancestor', 'comancref1', 'comancref2', 'periodrange', 'period', 'epochrange', 'epoch', 'complete', 'remark', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'commonnameGerman', 'commonnameFrench', 'commonnameItalian', 'commonnameSpanish', 'commonnamePortuguese', 'commonnameDutch', 'commonnameChinese', 'commonnameChineseU', 'commonnameGreek', 'commonnameGreekU', 'commonnameRussianU', 'commonnameRussian', 'commonnameSwedish', 'classRussian', 'etymologyclass', 'ts', ),
        BasePeer::TYPE_COLNAME => array (OrdersPeer::ORDNUM, OrdersPeer::ORDER, OrdersPeer::ORDERREFNO, OrdersPeer::SORTNO, OrdersPeer::SYNONYM, OrdersPeer::AUTHORYEAR, OrdersPeer::COMMONNAME, OrdersPeer::BODYSHAPEI, OrdersPeer::MARINE, OrdersPeer::BRACKISH, OrdersPeer::FRESHWATER, OrdersPeer::WATERSALINITY, OrdersPeer::FAMCOUNT, OrdersPeer::SPECIESCOUNT, OrdersPeer::ETYMOLOGYORDER, OrdersPeer::CLASSNUM, OrdersPeer::CLAZZ, OrdersPeer::CLASSIFICATIONREMARK, OrdersPeer::PHYLOGENYFAMILIES, OrdersPeer::PHYLFAMORDERREFNO, OrdersPeer::PHYLOGENYPOSTION, OrdersPeer::PHYLPOSORDERREFNO, OrdersPeer::SISTERORDER, OrdersPeer::COMANCESTOR, OrdersPeer::COMANCREF1, OrdersPeer::COMANCREF2, OrdersPeer::PERIODRANGE, OrdersPeer::PERIOD, OrdersPeer::EPOCHRANGE, OrdersPeer::EPOCH, OrdersPeer::COMPLETE, OrdersPeer::REMARK, OrdersPeer::ENTERED, OrdersPeer::DATEENTERED, OrdersPeer::MODIFIED, OrdersPeer::DATEMODIFIED, OrdersPeer::EXPERT, OrdersPeer::DATECHECKED, OrdersPeer::COMMONNAME_GERMAN, OrdersPeer::COMMONNAME_FRENCH, OrdersPeer::COMMONNAME_ITALIAN, OrdersPeer::COMMONNAME_SPANISH, OrdersPeer::COMMONNAME_PORTUGUESE, OrdersPeer::COMMONNAME_DUTCH, OrdersPeer::COMMONNAME_CHINESE, OrdersPeer::COMMONNAME_CHINESE_U, OrdersPeer::COMMONNAME_GREEK, OrdersPeer::COMMONNAME_GREEK_U, OrdersPeer::COMMONNAME_RUSSIAN_U, OrdersPeer::COMMONNAME_RUSSIAN, OrdersPeer::COMMONNAME_SWEDISH, OrdersPeer::CLASS_RUSSIAN, OrdersPeer::ETYMOLOGYCLASS, OrdersPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORDNUM', 'ORDER', 'ORDERREFNO', 'SORTNO', 'SYNONYM', 'AUTHORYEAR', 'COMMONNAME', 'BODYSHAPEI', 'MARINE', 'BRACKISH', 'FRESHWATER', 'WATERSALINITY', 'FAMCOUNT', 'SPECIESCOUNT', 'ETYMOLOGYORDER', 'CLASSNUM', 'CLAZZ', 'CLASSIFICATIONREMARK', 'PHYLOGENYFAMILIES', 'PHYLFAMORDERREFNO', 'PHYLOGENYPOSTION', 'PHYLPOSORDERREFNO', 'SISTERORDER', 'COMANCESTOR', 'COMANCREF1', 'COMANCREF2', 'PERIODRANGE', 'PERIOD', 'EPOCHRANGE', 'EPOCH', 'COMPLETE', 'REMARK', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'COMMONNAME_GERMAN', 'COMMONNAME_FRENCH', 'COMMONNAME_ITALIAN', 'COMMONNAME_SPANISH', 'COMMONNAME_PORTUGUESE', 'COMMONNAME_DUTCH', 'COMMONNAME_CHINESE', 'COMMONNAME_CHINESE_U', 'COMMONNAME_GREEK', 'COMMONNAME_GREEK_U', 'COMMONNAME_RUSSIAN_U', 'COMMONNAME_RUSSIAN', 'COMMONNAME_SWEDISH', 'CLASS_RUSSIAN', 'ETYMOLOGYCLASS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('Ordnum', 'Order', 'OrderRefNo', 'SortNo', 'Synonym', 'AuthorYear', 'CommonName', 'BodyShapeI', 'Marine', 'Brackish', 'Freshwater', 'WaterSalinity', 'FamCount', 'SpeciesCount', 'EtymologyOrder', 'ClassNum', 'Class', 'ClassificationRemark', 'PhylogenyFamilies', 'PhylFamOrderRefNo', 'PhylogenyPostion', 'PhylPosOrderRefNo', 'SisterOrder', 'ComAncestor', 'ComAncRef1', 'ComAncRef2', 'PeriodRange', 'Period', 'EpochRange', 'Epoch', 'Complete', 'Remark', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'CommonName_German', 'CommonName_French', 'CommonName_Italian', 'CommonName_Spanish', 'CommonName_Portuguese', 'CommonName_Dutch', 'CommonName_Chinese', 'CommonName_Chinese_u', 'CommonName_Greek', 'CommonName_Greek_u', 'CommonName_Russian_u', 'CommonName_Russian', 'CommonName_Swedish', 'Class_Russian', 'EtymologyClass', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OrdersPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Ordnum' => 0, 'Order' => 1, 'Orderrefno' => 2, 'Sortno' => 3, 'Synonym' => 4, 'Authoryear' => 5, 'Commonname' => 6, 'Bodyshapei' => 7, 'Marine' => 8, 'Brackish' => 9, 'Freshwater' => 10, 'Watersalinity' => 11, 'Famcount' => 12, 'Speciescount' => 13, 'Etymologyorder' => 14, 'Classnum' => 15, 'Class' => 16, 'Classificationremark' => 17, 'Phylogenyfamilies' => 18, 'Phylfamorderrefno' => 19, 'Phylogenypostion' => 20, 'Phylposorderrefno' => 21, 'Sisterorder' => 22, 'Comancestor' => 23, 'Comancref1' => 24, 'Comancref2' => 25, 'Periodrange' => 26, 'Period' => 27, 'Epochrange' => 28, 'Epoch' => 29, 'Complete' => 30, 'Remark' => 31, 'Entered' => 32, 'Dateentered' => 33, 'Modified' => 34, 'Datemodified' => 35, 'Expert' => 36, 'Datechecked' => 37, 'CommonnameGerman' => 38, 'CommonnameFrench' => 39, 'CommonnameItalian' => 40, 'CommonnameSpanish' => 41, 'CommonnamePortuguese' => 42, 'CommonnameDutch' => 43, 'CommonnameChinese' => 44, 'CommonnameChineseU' => 45, 'CommonnameGreek' => 46, 'CommonnameGreekU' => 47, 'CommonnameRussianU' => 48, 'CommonnameRussian' => 49, 'CommonnameSwedish' => 50, 'ClassRussian' => 51, 'Etymologyclass' => 52, 'Ts' => 53, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ordnum' => 0, 'order' => 1, 'orderrefno' => 2, 'sortno' => 3, 'synonym' => 4, 'authoryear' => 5, 'commonname' => 6, 'bodyshapei' => 7, 'marine' => 8, 'brackish' => 9, 'freshwater' => 10, 'watersalinity' => 11, 'famcount' => 12, 'speciescount' => 13, 'etymologyorder' => 14, 'classnum' => 15, 'class' => 16, 'classificationremark' => 17, 'phylogenyfamilies' => 18, 'phylfamorderrefno' => 19, 'phylogenypostion' => 20, 'phylposorderrefno' => 21, 'sisterorder' => 22, 'comancestor' => 23, 'comancref1' => 24, 'comancref2' => 25, 'periodrange' => 26, 'period' => 27, 'epochrange' => 28, 'epoch' => 29, 'complete' => 30, 'remark' => 31, 'entered' => 32, 'dateentered' => 33, 'modified' => 34, 'datemodified' => 35, 'expert' => 36, 'datechecked' => 37, 'commonnameGerman' => 38, 'commonnameFrench' => 39, 'commonnameItalian' => 40, 'commonnameSpanish' => 41, 'commonnamePortuguese' => 42, 'commonnameDutch' => 43, 'commonnameChinese' => 44, 'commonnameChineseU' => 45, 'commonnameGreek' => 46, 'commonnameGreekU' => 47, 'commonnameRussianU' => 48, 'commonnameRussian' => 49, 'commonnameSwedish' => 50, 'classRussian' => 51, 'etymologyclass' => 52, 'ts' => 53, ),
        BasePeer::TYPE_COLNAME => array (OrdersPeer::ORDNUM => 0, OrdersPeer::ORDER => 1, OrdersPeer::ORDERREFNO => 2, OrdersPeer::SORTNO => 3, OrdersPeer::SYNONYM => 4, OrdersPeer::AUTHORYEAR => 5, OrdersPeer::COMMONNAME => 6, OrdersPeer::BODYSHAPEI => 7, OrdersPeer::MARINE => 8, OrdersPeer::BRACKISH => 9, OrdersPeer::FRESHWATER => 10, OrdersPeer::WATERSALINITY => 11, OrdersPeer::FAMCOUNT => 12, OrdersPeer::SPECIESCOUNT => 13, OrdersPeer::ETYMOLOGYORDER => 14, OrdersPeer::CLASSNUM => 15, OrdersPeer::CLAZZ => 16, OrdersPeer::CLASSIFICATIONREMARK => 17, OrdersPeer::PHYLOGENYFAMILIES => 18, OrdersPeer::PHYLFAMORDERREFNO => 19, OrdersPeer::PHYLOGENYPOSTION => 20, OrdersPeer::PHYLPOSORDERREFNO => 21, OrdersPeer::SISTERORDER => 22, OrdersPeer::COMANCESTOR => 23, OrdersPeer::COMANCREF1 => 24, OrdersPeer::COMANCREF2 => 25, OrdersPeer::PERIODRANGE => 26, OrdersPeer::PERIOD => 27, OrdersPeer::EPOCHRANGE => 28, OrdersPeer::EPOCH => 29, OrdersPeer::COMPLETE => 30, OrdersPeer::REMARK => 31, OrdersPeer::ENTERED => 32, OrdersPeer::DATEENTERED => 33, OrdersPeer::MODIFIED => 34, OrdersPeer::DATEMODIFIED => 35, OrdersPeer::EXPERT => 36, OrdersPeer::DATECHECKED => 37, OrdersPeer::COMMONNAME_GERMAN => 38, OrdersPeer::COMMONNAME_FRENCH => 39, OrdersPeer::COMMONNAME_ITALIAN => 40, OrdersPeer::COMMONNAME_SPANISH => 41, OrdersPeer::COMMONNAME_PORTUGUESE => 42, OrdersPeer::COMMONNAME_DUTCH => 43, OrdersPeer::COMMONNAME_CHINESE => 44, OrdersPeer::COMMONNAME_CHINESE_U => 45, OrdersPeer::COMMONNAME_GREEK => 46, OrdersPeer::COMMONNAME_GREEK_U => 47, OrdersPeer::COMMONNAME_RUSSIAN_U => 48, OrdersPeer::COMMONNAME_RUSSIAN => 49, OrdersPeer::COMMONNAME_SWEDISH => 50, OrdersPeer::CLASS_RUSSIAN => 51, OrdersPeer::ETYMOLOGYCLASS => 52, OrdersPeer::TS => 53, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ORDNUM' => 0, 'ORDER' => 1, 'ORDERREFNO' => 2, 'SORTNO' => 3, 'SYNONYM' => 4, 'AUTHORYEAR' => 5, 'COMMONNAME' => 6, 'BODYSHAPEI' => 7, 'MARINE' => 8, 'BRACKISH' => 9, 'FRESHWATER' => 10, 'WATERSALINITY' => 11, 'FAMCOUNT' => 12, 'SPECIESCOUNT' => 13, 'ETYMOLOGYORDER' => 14, 'CLASSNUM' => 15, 'CLAZZ' => 16, 'CLASSIFICATIONREMARK' => 17, 'PHYLOGENYFAMILIES' => 18, 'PHYLFAMORDERREFNO' => 19, 'PHYLOGENYPOSTION' => 20, 'PHYLPOSORDERREFNO' => 21, 'SISTERORDER' => 22, 'COMANCESTOR' => 23, 'COMANCREF1' => 24, 'COMANCREF2' => 25, 'PERIODRANGE' => 26, 'PERIOD' => 27, 'EPOCHRANGE' => 28, 'EPOCH' => 29, 'COMPLETE' => 30, 'REMARK' => 31, 'ENTERED' => 32, 'DATEENTERED' => 33, 'MODIFIED' => 34, 'DATEMODIFIED' => 35, 'EXPERT' => 36, 'DATECHECKED' => 37, 'COMMONNAME_GERMAN' => 38, 'COMMONNAME_FRENCH' => 39, 'COMMONNAME_ITALIAN' => 40, 'COMMONNAME_SPANISH' => 41, 'COMMONNAME_PORTUGUESE' => 42, 'COMMONNAME_DUTCH' => 43, 'COMMONNAME_CHINESE' => 44, 'COMMONNAME_CHINESE_U' => 45, 'COMMONNAME_GREEK' => 46, 'COMMONNAME_GREEK_U' => 47, 'COMMONNAME_RUSSIAN_U' => 48, 'COMMONNAME_RUSSIAN' => 49, 'COMMONNAME_SWEDISH' => 50, 'CLASS_RUSSIAN' => 51, 'ETYMOLOGYCLASS' => 52, 'TS' => 53, ),
        BasePeer::TYPE_FIELDNAME => array ('Ordnum' => 0, 'Order' => 1, 'OrderRefNo' => 2, 'SortNo' => 3, 'Synonym' => 4, 'AuthorYear' => 5, 'CommonName' => 6, 'BodyShapeI' => 7, 'Marine' => 8, 'Brackish' => 9, 'Freshwater' => 10, 'WaterSalinity' => 11, 'FamCount' => 12, 'SpeciesCount' => 13, 'EtymologyOrder' => 14, 'ClassNum' => 15, 'Class' => 16, 'ClassificationRemark' => 17, 'PhylogenyFamilies' => 18, 'PhylFamOrderRefNo' => 19, 'PhylogenyPostion' => 20, 'PhylPosOrderRefNo' => 21, 'SisterOrder' => 22, 'ComAncestor' => 23, 'ComAncRef1' => 24, 'ComAncRef2' => 25, 'PeriodRange' => 26, 'Period' => 27, 'EpochRange' => 28, 'Epoch' => 29, 'Complete' => 30, 'Remark' => 31, 'Entered' => 32, 'DateEntered' => 33, 'Modified' => 34, 'DateModified' => 35, 'Expert' => 36, 'DateChecked' => 37, 'CommonName_German' => 38, 'CommonName_French' => 39, 'CommonName_Italian' => 40, 'CommonName_Spanish' => 41, 'CommonName_Portuguese' => 42, 'CommonName_Dutch' => 43, 'CommonName_Chinese' => 44, 'CommonName_Chinese_u' => 45, 'CommonName_Greek' => 46, 'CommonName_Greek_u' => 47, 'CommonName_Russian_u' => 48, 'CommonName_Russian' => 49, 'CommonName_Swedish' => 50, 'Class_Russian' => 51, 'EtymologyClass' => 52, 'TS' => 53, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, )
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
        $toNames = OrdersPeer::getFieldNames($toType);
        $key = isset(OrdersPeer::$fieldKeys[$fromType][$name]) ? OrdersPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OrdersPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OrdersPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OrdersPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OrdersPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OrdersPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OrdersPeer::ORDNUM);
            $criteria->addSelectColumn(OrdersPeer::ORDER);
            $criteria->addSelectColumn(OrdersPeer::ORDERREFNO);
            $criteria->addSelectColumn(OrdersPeer::SORTNO);
            $criteria->addSelectColumn(OrdersPeer::SYNONYM);
            $criteria->addSelectColumn(OrdersPeer::AUTHORYEAR);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME);
            $criteria->addSelectColumn(OrdersPeer::BODYSHAPEI);
            $criteria->addSelectColumn(OrdersPeer::MARINE);
            $criteria->addSelectColumn(OrdersPeer::BRACKISH);
            $criteria->addSelectColumn(OrdersPeer::FRESHWATER);
            $criteria->addSelectColumn(OrdersPeer::WATERSALINITY);
            $criteria->addSelectColumn(OrdersPeer::FAMCOUNT);
            $criteria->addSelectColumn(OrdersPeer::SPECIESCOUNT);
            $criteria->addSelectColumn(OrdersPeer::ETYMOLOGYORDER);
            $criteria->addSelectColumn(OrdersPeer::CLASSNUM);
            $criteria->addSelectColumn(OrdersPeer::CLAZZ);
            $criteria->addSelectColumn(OrdersPeer::CLASSIFICATIONREMARK);
            $criteria->addSelectColumn(OrdersPeer::PHYLOGENYFAMILIES);
            $criteria->addSelectColumn(OrdersPeer::PHYLFAMORDERREFNO);
            $criteria->addSelectColumn(OrdersPeer::PHYLOGENYPOSTION);
            $criteria->addSelectColumn(OrdersPeer::PHYLPOSORDERREFNO);
            $criteria->addSelectColumn(OrdersPeer::SISTERORDER);
            $criteria->addSelectColumn(OrdersPeer::COMANCESTOR);
            $criteria->addSelectColumn(OrdersPeer::COMANCREF1);
            $criteria->addSelectColumn(OrdersPeer::COMANCREF2);
            $criteria->addSelectColumn(OrdersPeer::PERIODRANGE);
            $criteria->addSelectColumn(OrdersPeer::PERIOD);
            $criteria->addSelectColumn(OrdersPeer::EPOCHRANGE);
            $criteria->addSelectColumn(OrdersPeer::EPOCH);
            $criteria->addSelectColumn(OrdersPeer::COMPLETE);
            $criteria->addSelectColumn(OrdersPeer::REMARK);
            $criteria->addSelectColumn(OrdersPeer::ENTERED);
            $criteria->addSelectColumn(OrdersPeer::DATEENTERED);
            $criteria->addSelectColumn(OrdersPeer::MODIFIED);
            $criteria->addSelectColumn(OrdersPeer::DATEMODIFIED);
            $criteria->addSelectColumn(OrdersPeer::EXPERT);
            $criteria->addSelectColumn(OrdersPeer::DATECHECKED);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_GERMAN);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_FRENCH);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_ITALIAN);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_SPANISH);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_PORTUGUESE);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_DUTCH);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_CHINESE);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_CHINESE_U);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_GREEK);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_GREEK_U);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_RUSSIAN_U);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_RUSSIAN);
            $criteria->addSelectColumn(OrdersPeer::COMMONNAME_SWEDISH);
            $criteria->addSelectColumn(OrdersPeer::CLASS_RUSSIAN);
            $criteria->addSelectColumn(OrdersPeer::ETYMOLOGYCLASS);
            $criteria->addSelectColumn(OrdersPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.Ordnum');
            $criteria->addSelectColumn($alias . '.Order');
            $criteria->addSelectColumn($alias . '.OrderRefNo');
            $criteria->addSelectColumn($alias . '.SortNo');
            $criteria->addSelectColumn($alias . '.Synonym');
            $criteria->addSelectColumn($alias . '.AuthorYear');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.BodyShapeI');
            $criteria->addSelectColumn($alias . '.Marine');
            $criteria->addSelectColumn($alias . '.Brackish');
            $criteria->addSelectColumn($alias . '.Freshwater');
            $criteria->addSelectColumn($alias . '.WaterSalinity');
            $criteria->addSelectColumn($alias . '.FamCount');
            $criteria->addSelectColumn($alias . '.SpeciesCount');
            $criteria->addSelectColumn($alias . '.EtymologyOrder');
            $criteria->addSelectColumn($alias . '.ClassNum');
            $criteria->addSelectColumn($alias . '.Class');
            $criteria->addSelectColumn($alias . '.ClassificationRemark');
            $criteria->addSelectColumn($alias . '.PhylogenyFamilies');
            $criteria->addSelectColumn($alias . '.PhylFamOrderRefNo');
            $criteria->addSelectColumn($alias . '.PhylogenyPostion');
            $criteria->addSelectColumn($alias . '.PhylPosOrderRefNo');
            $criteria->addSelectColumn($alias . '.SisterOrder');
            $criteria->addSelectColumn($alias . '.ComAncestor');
            $criteria->addSelectColumn($alias . '.ComAncRef1');
            $criteria->addSelectColumn($alias . '.ComAncRef2');
            $criteria->addSelectColumn($alias . '.PeriodRange');
            $criteria->addSelectColumn($alias . '.Period');
            $criteria->addSelectColumn($alias . '.EpochRange');
            $criteria->addSelectColumn($alias . '.Epoch');
            $criteria->addSelectColumn($alias . '.Complete');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.CommonName_German');
            $criteria->addSelectColumn($alias . '.CommonName_French');
            $criteria->addSelectColumn($alias . '.CommonName_Italian');
            $criteria->addSelectColumn($alias . '.CommonName_Spanish');
            $criteria->addSelectColumn($alias . '.CommonName_Portuguese');
            $criteria->addSelectColumn($alias . '.CommonName_Dutch');
            $criteria->addSelectColumn($alias . '.CommonName_Chinese');
            $criteria->addSelectColumn($alias . '.CommonName_Chinese_u');
            $criteria->addSelectColumn($alias . '.CommonName_Greek');
            $criteria->addSelectColumn($alias . '.CommonName_Greek_u');
            $criteria->addSelectColumn($alias . '.CommonName_Russian_u');
            $criteria->addSelectColumn($alias . '.CommonName_Russian');
            $criteria->addSelectColumn($alias . '.CommonName_Swedish');
            $criteria->addSelectColumn($alias . '.Class_Russian');
            $criteria->addSelectColumn($alias . '.EtymologyClass');
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
        $criteria->setPrimaryTableName(OrdersPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdersPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OrdersPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Orders
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OrdersPeer::doSelect($critcopy, $con);
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
        return OrdersPeer::populateObjects(OrdersPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OrdersPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OrdersPeer::DATABASE_NAME);

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
     * @param Orders $obj A Orders object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOrder();
            } // if key === null
            OrdersPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Orders object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Orders) {
                $key = (string) $value->getOrder();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Orders object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OrdersPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Orders Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OrdersPeer::$instances[$key])) {
                return OrdersPeer::$instances[$key];
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
        foreach (OrdersPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OrdersPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to orders
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
        if ($row[$startcol + 1] === null) {
            return null;
        }

        return (string) $row[$startcol + 1];
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

        return (string) $row[$startcol + 1];
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
        $cls = OrdersPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OrdersPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OrdersPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OrdersPeer::addInstanceToPool($obj, $key);
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
     * @return array (Orders object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OrdersPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OrdersPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OrdersPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OrdersPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OrdersPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OrdersPeer::DATABASE_NAME)->getTable(OrdersPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOrdersPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOrdersPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OrdersTableMap());
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
        return OrdersPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Orders or Criteria object.
     *
     * @param      mixed $values Criteria or Orders object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Orders object
        }


        // Set the correct dbName
        $criteria->setDbName(OrdersPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Orders or Criteria object.
     *
     * @param      mixed $values Criteria or Orders object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OrdersPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OrdersPeer::ORDER);
            $value = $criteria->remove(OrdersPeer::ORDER);
            if ($value) {
                $selectCriteria->add(OrdersPeer::ORDER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OrdersPeer::TABLE_NAME);
            }

        } else { // $values is Orders object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OrdersPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the orders table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OrdersPeer::TABLE_NAME, $con, OrdersPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OrdersPeer::clearInstancePool();
            OrdersPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Orders or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Orders object or primary key or array of primary keys
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
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OrdersPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Orders) { // it's a model object
            // invalidate the cache for this single object
            OrdersPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OrdersPeer::DATABASE_NAME);
            $criteria->add(OrdersPeer::ORDER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OrdersPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OrdersPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OrdersPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Orders object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Orders $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OrdersPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OrdersPeer::TABLE_NAME);

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

        return BasePeer::doValidate(OrdersPeer::DATABASE_NAME, OrdersPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Orders
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OrdersPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OrdersPeer::DATABASE_NAME);
        $criteria->add(OrdersPeer::ORDER, $pk);

        $v = OrdersPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Orders[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OrdersPeer::DATABASE_NAME);
            $criteria->add(OrdersPeer::ORDER, $pks, Criteria::IN);
            $objs = OrdersPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseOrdersPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOrdersPeer::buildTableMap();

