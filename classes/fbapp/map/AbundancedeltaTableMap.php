<?php



/**
 * This class defines the structure of the 'abundancedelta' table.
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
class AbundancedeltaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AbundancedeltaTableMap';

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
        $this->setName('abundancedelta');
        $this->setPhpName('Abundancedelta');
        $this->setClassname('Abundancedelta');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('A_DeltaCode', 'ADeltacode', 'INTEGER', true, null, null);
        $this->addColumn('AbundanceCode', 'Abundancecode', 'INTEGER', false, null, null);
        $this->addColumn('EcoChange1', 'Ecochange1', 'BOOLEAN', false, 1, null);
        $this->addColumn('EcoChange2', 'Ecochange2', 'VARCHAR', false, 9, null);
        $this->addColumn('EcoChange3', 'Ecochange3', 'VARCHAR', false, 48, null);
        $this->addColumn('EcoChange4', 'Ecochange4', 'VARCHAR', false, 12, null);
        $this->addColumn('EcoChange_Ref', 'EcochangeRef', 'INTEGER', false, null, null);
        $this->addColumn('AbioChange1', 'Abiochange1', 'BOOLEAN', false, 1, null);
        $this->addColumn('AbioChange2', 'Abiochange2', 'VARCHAR', false, 9, null);
        $this->addColumn('AbioChange3', 'Abiochange3', 'VARCHAR', false, 33, null);
        $this->addColumn('AbioChange4', 'Abiochange4', 'VARCHAR', false, 12, null);
        $this->addColumn('AbioChange_Ref', 'AbiochangeRef', 'INTEGER', false, null, null);
        $this->addColumn('EcoHealth1', 'Ecohealth1', 'VARCHAR', false, 21, null);
        $this->addColumn('EcoHealth2', 'Ecohealth2', 'VARCHAR', false, 12, null);
        $this->addColumn('EcoHealth_Ref', 'EcohealthRef', 'INTEGER', false, null, null);
        $this->addColumn('HumanInterest1', 'Humaninterest1', 'VARCHAR', false, 29, null);
        $this->addColumn('HumanInterest2', 'Humaninterest2', 'VARCHAR', false, 12, null);
        $this->addColumn('HumanInterest_Ref', 'HumaninterestRef', 'INTEGER', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('AffectedType', 'Affectedtype', 'VARCHAR', false, 3, null);
        $this->addColumn('AffectedGenus', 'Affectedgenus', 'VARCHAR', false, 30, null);
        $this->addColumn('AffectedSpecies', 'Affectedspecies', 'VARCHAR', false, 50, null);
        $this->addColumn('AffectedSpecCode', 'Affectedspeccode', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AbundancedeltaTableMap
