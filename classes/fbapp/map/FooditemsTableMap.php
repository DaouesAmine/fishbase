<?php



/**
 * This class defines the structure of the 'fooditems' table.
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
class FooditemsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FooditemsTableMap';

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
        $this->setName('fooditems');
        $this->setPhpName('Fooditems');
        $this->setClassname('Fooditems');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'CHAR', false, 255, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('FoodsRefNo', 'Foodsrefno', 'INTEGER', false, null, 0);
        $this->addPrimaryKey('FoodI', 'Foodi', 'VARCHAR', true, 25, null);
        $this->addPrimaryKey('PreyStage', 'Preystage', 'VARCHAR', true, 15, null);
        $this->addPrimaryKey('FoodII', 'Foodii', 'VARCHAR', true, 50, null);
        $this->addPrimaryKey('FoodIII', 'Foodiii', 'VARCHAR', true, 50, null);
        $this->addColumn('Commoness', 'Commoness', 'FLOAT', false, null, null);
        $this->addColumn('CommonessII', 'Commonessii', 'VARCHAR', false, 20, null);
        $this->addPrimaryKey('Foodgroup', 'Foodgroup', 'VARCHAR', true, 25, null);
        $this->addPrimaryKey('Foodname', 'Foodname', 'VARCHAR', true, 40, null);
        $this->addColumn('PreySpecCode', 'Preyspeccode', 'INTEGER', false, null, null);
        $this->addColumn('PreySpecCodeSLB', 'Preyspeccodeslb', 'INTEGER', false, null, null);
        $this->addColumn('AlphaCode', 'Alphacode', 'CHAR', false, 3, null);
        $this->addColumn('PreyTroph', 'Preytroph', 'DOUBLE', false, null, null);
        $this->addColumn('PreySeTroph', 'Preysetroph', 'DOUBLE', false, null, null);
        $this->addColumn('TrophRefNo', 'Trophrefno', 'INTEGER', false, null, null);
        $this->addPrimaryKey('PredatorStage', 'Predatorstage', 'VARCHAR', true, 15, null);
        $this->addColumn('Locality2', 'Locality2', 'CLOB', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FooditemsTableMap
