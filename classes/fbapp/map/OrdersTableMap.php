<?php



/**
 * This class defines the structure of the 'orders' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.fbapp.map
 */
class OrdersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.OrdersTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('orders');
        $this->setPhpName('Orders');
        $this->setClassname('Orders');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('Ordnum', 'Ordnum', 'INTEGER', false, null, null);
        $this->addPrimaryKey('Order', 'Order', 'VARCHAR', true, 70, null);
        $this->addColumn('OrderRefNo', 'Orderrefno', 'INTEGER', false, null, null);
        $this->addColumn('SortNo', 'Sortno', 'INTEGER', false, null, null);
        $this->addColumn('Synonym', 'Synonym', 'TINYINT', false, null, null);
        $this->addColumn('AuthorYear', 'Authoryear', 'VARCHAR', false, 100, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 50, null);
        $this->addColumn('BodyShapeI', 'Bodyshapei', 'VARCHAR', false, 20, null);
        $this->addColumn('Marine', 'Marine', 'TINYINT', false, null, null);
        $this->addColumn('Brackish', 'Brackish', 'TINYINT', false, null, null);
        $this->addColumn('Freshwater', 'Freshwater', 'TINYINT', false, null, null);
        $this->addColumn('WaterSalinity', 'Watersalinity', 'VARCHAR', false, 21, null);
        $this->addColumn('FamCount', 'Famcount', 'INTEGER', false, null, null);
        $this->addColumn('SpeciesCount', 'Speciescount', 'SMALLINT', false, null, null);
        $this->addColumn('EtymologyOrder', 'Etymologyorder', 'VARCHAR', false, 255, null);
        $this->addColumn('ClassNum', 'Classnum', 'INTEGER', false, null, null);
        $this->addColumn('Class', 'Class', 'VARCHAR', false, 51, null);
        $this->addColumn('ClassificationRemark', 'Classificationremark', 'CLOB', false, null, null);
        $this->addColumn('PhylogenyFamilies', 'Phylogenyfamilies', 'CLOB', false, null, null);
        $this->addColumn('PhylFamOrderRefNo', 'Phylfamorderrefno', 'INTEGER', false, null, null);
        $this->addColumn('PhylogenyPostion', 'Phylogenypostion', 'CLOB', false, null, null);
        $this->addColumn('PhylPosOrderRefNo', 'Phylposorderrefno', 'INTEGER', false, null, null);
        $this->addColumn('SisterOrder', 'Sisterorder', 'VARCHAR', false, 50, null);
        $this->addColumn('ComAncestor', 'Comancestor', 'INTEGER', false, null, null);
        $this->addColumn('ComAncRef1', 'Comancref1', 'INTEGER', false, null, null);
        $this->addColumn('ComAncRef2', 'Comancref2', 'INTEGER', false, null, null);
        $this->addColumn('PeriodRange', 'Periodrange', 'VARCHAR', false, 6, null);
        $this->addColumn('Period', 'Period', 'VARCHAR', false, 11, null);
        $this->addColumn('EpochRange', 'Epochrange', 'VARCHAR', false, 6, null);
        $this->addColumn('Epoch', 'Epoch', 'VARCHAR', false, 11, null);
        $this->addColumn('Complete', 'Complete', 'TINYINT', false, null, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('CommonName_German', 'CommonnameGerman', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_French', 'CommonnameFrench', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Italian', 'CommonnameItalian', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Spanish', 'CommonnameSpanish', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Portuguese', 'CommonnamePortuguese', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Dutch', 'CommonnameDutch', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Chinese', 'CommonnameChinese', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Chinese_u', 'CommonnameChineseU', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Greek', 'CommonnameGreek', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Greek_u', 'CommonnameGreekU', 'CLOB', false, null, null);
        $this->addColumn('CommonName_Russian_u', 'CommonnameRussianU', 'CLOB', false, null, null);
        $this->addColumn('CommonName_Russian', 'CommonnameRussian', 'VARCHAR', false, 50, null);
        $this->addColumn('CommonName_Swedish', 'CommonnameSwedish', 'VARCHAR', false, 50, null);
        $this->addColumn('Class_Russian', 'ClassRussian', 'VARCHAR', false, 255, null);
        $this->addColumn('EtymologyClass', 'Etymologyclass', 'VARCHAR', false, 255, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // OrdersTableMap
