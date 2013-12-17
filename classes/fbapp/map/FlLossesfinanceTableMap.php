<?php



/**
 * This class defines the structure of the 'fl_lossesfinance' table.
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
class FlLossesfinanceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlLossesfinanceTableMap';

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
        $this->setName('fl_lossesfinance');
        $this->setPhpName('FlLossesfinance');
        $this->setClassname('FlLossesfinance');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LossCode', 'Losscode', 'INTEGER', true, null, null);
        $this->addColumn('currency', 'Currency', 'VARCHAR', false, 50, null);
        $this->addColumn('BestPrice', 'Bestprice', 'DOUBLE', false, null, null);
        $this->addColumn('ValueOfBatch', 'Valueofbatch', 'DOUBLE', false, null, null);
        $this->addColumn('ValueOfPhysicalLoss', 'Valueofphysicalloss', 'DOUBLE', false, null, null);
        $this->addColumn('LowerPrice', 'Lowerprice', 'DOUBLE', false, null, null);
        $this->addColumn('LowerPricePofBestPrice', 'Lowerpricepofbestprice', 'DOUBLE', false, null, null);
        $this->addColumn('ValueOfQualityLoss', 'Valueofqualityloss', 'DOUBLE', false, null, null);
        $this->addColumn('TotalValueofLoss', 'Totalvalueofloss', 'DOUBLE', false, null, null);
        $this->addColumn('TotalLossPByValueMinimum', 'Totallosspbyvalueminimum', 'DOUBLE', false, null, null);
        $this->addColumn('TotalLossPByValueMaximum', 'Totallosspbyvaluemaximum', 'DOUBLE', false, null, null);
        $this->addColumn('Editable', 'Editable', 'VARCHAR', false, 50, '-1');
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FlLossesfinanceTableMap
