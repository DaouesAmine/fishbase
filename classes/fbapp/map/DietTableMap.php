<?php



/**
 * This class defines the structure of the 'diet' table.
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
class DietTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.DietTableMap';

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
        $this->setName('diet');
        $this->setPhpName('Diet');
        $this->setClassname('Diet');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('DietCode', 'Dietcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('DietRefNo', 'Dietrefno', 'INTEGER', false, null, null);
        $this->addPrimaryKey('SampleStage', 'Samplestage', 'VARCHAR', true, 23, null);
        $this->addColumn('SampleSize', 'Samplesize', 'INTEGER', false, null, null);
        $this->addColumn('YearStart', 'Yearstart', 'INTEGER', false, null, null);
        $this->addColumn('YearEnd', 'Yearend', 'INTEGER', false, null, null);
        $this->addColumn('January', 'January', 'TINYINT', false, null, null);
        $this->addColumn('February', 'February', 'TINYINT', false, null, null);
        $this->addColumn('March', 'March', 'TINYINT', false, null, null);
        $this->addColumn('April', 'April', 'TINYINT', false, null, null);
        $this->addColumn('May', 'May', 'TINYINT', false, null, null);
        $this->addColumn('June', 'June', 'TINYINT', false, null, null);
        $this->addColumn('July', 'July', 'TINYINT', false, null, null);
        $this->addColumn('August', 'August', 'TINYINT', false, null, null);
        $this->addColumn('September', 'September', 'TINYINT', false, null, null);
        $this->addColumn('October', 'October', 'TINYINT', false, null, null);
        $this->addColumn('November', 'November', 'TINYINT', false, null, null);
        $this->addColumn('December', 'December', 'TINYINT', false, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 80, null);
        $this->addColumn('E_Code', 'ECode', 'INTEGER', false, null, null);
        $this->addColumn('Method', 'Method', 'VARCHAR', false, 30, null);
        $this->addColumn('MethodType', 'Methodtype', 'VARCHAR', false, 30, null);
        $this->addColumn('Remark', 'Remark', 'VARCHAR', false, 160, null);
        $this->addColumn('OtherItems', 'Otheritems', 'DOUBLE', false, null, null);
        $this->addColumn('PercentEmpty', 'Percentempty', 'DOUBLE', false, null, null);
        $this->addColumn('Troph', 'Troph', 'DOUBLE', false, null, null);
        $this->addColumn('seTroph', 'Setroph', 'DOUBLE', false, null, null);
        $this->addColumn('SizeMin', 'Sizemin', 'DOUBLE', false, null, null);
        $this->addColumn('SizeMax', 'Sizemax', 'DOUBLE', false, null, null);
        $this->addColumn('SizeType', 'Sizetype', 'VARCHAR', false, 5, null);
        $this->addColumn('FishLength', 'Fishlength', 'DOUBLE', false, null, null);
        $this->addColumn('Entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'INTEGER', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // DietTableMap
