<?php



/**
 * This class defines the structure of the 'fl_lossesother' table.
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
class FlLossesotherTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.FlLossesotherTableMap';

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
        $this->setName('fl_lossesother');
        $this->setPhpName('FlLossesother');
        $this->setClassname('FlLossesother');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LossCode', 'Losscode', 'INTEGER', true, null, null);
        $this->addColumn('OPreviousProcess', 'Opreviousprocess', 'VARCHAR', false, 50, null);
        $this->addColumn('OPreviousTreatment', 'Oprevioustreatment', 'VARCHAR', false, 50, null);
        $this->addColumn('OEndUseBestQuality', 'Oendusebestquality', 'VARCHAR', false, 50, null);
        $this->addColumn('OEndUseLowerQuality', 'Oenduselowerquality', 'VARCHAR', false, 50, null);
        $this->addColumn('OReasonForLoss', 'Oreasonforloss', 'VARCHAR', false, 50, null);
        $this->addColumn('OInsectType', 'Oinsecttype', 'VARCHAR', false, 50, null);
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

} // FlLossesotherTableMap
