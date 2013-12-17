<?php



/**
 * This class defines the structure of the 'massconversion' table.
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
class MassconversionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.MassconversionTableMap';

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
        $this->setName('massconversion');
        $this->setPhpName('Massconversion');
        $this->setClassname('Massconversion');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('RecordNo', 'Recordno', 'SMALLINT', true, null, 0);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 25, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 40, null);
        $this->addColumn('NameUsed', 'Nameused', 'VARCHAR', false, 150, null);
        $this->addColumn('Speccode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('MassConvMainRef', 'Massconvmainref', 'INTEGER', false, null, null);
        $this->addColumn('MassConvRefNo', 'Massconvrefno', 'INTEGER', false, null, null);
        $this->addColumn('Locality', 'Locality', 'VARCHAR', false, 200, null);
        $this->addColumn('Country', 'Country', 'VARCHAR', false, 50, null);
        $this->addColumn('C_code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', false, 10, null);
        $this->addColumn('LifeStage', 'Lifestage', 'VARCHAR', false, 10, null);
        $this->addColumn('DM_WM', 'DmWm', 'DOUBLE', false, null, null);
        $this->addColumn('DM_WMcalc', 'DmWmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('AFDM_DM', 'AfdmDm', 'DOUBLE', false, null, null);
        $this->addColumn('AFDM_DMcalc', 'AfdmDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('AFDM_WM', 'AfdmWm', 'DOUBLE', false, null, null);
        $this->addColumn('AFDM_WMcalc', 'AfdmWmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('Protein_DM', 'ProteinDm', 'DOUBLE', false, null, null);
        $this->addColumn('Protein_DMcalc', 'ProteinDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('Carbhydr_DM', 'CarbhydrDm', 'DOUBLE', false, null, null);
        $this->addColumn('Carbhydr_DMcalc', 'CarbhydrDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('Lipid_DM', 'LipidDm', 'DOUBLE', false, null, null);
        $this->addColumn('Lipid_DMcalc', 'LipidDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('C_DM', 'CDm', 'DOUBLE', false, null, null);
        $this->addColumn('C_DMcalc', 'CDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('N_DM', 'NDm', 'DOUBLE', false, null, null);
        $this->addColumn('N_DMcalc', 'NDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('P_DM', 'PDm', 'DOUBLE', false, null, null);
        $this->addColumn('P_DMcalc', 'PDmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('C_AFDM', 'CAfdm', 'DOUBLE', false, null, null);
        $this->addColumn('C_AFDMcalc', 'CAfdmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('N_AFDM', 'NAfdm', 'DOUBLE', false, null, null);
        $this->addColumn('N_AFDMcalc', 'NAfdmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('P_AFDM', 'PAfdm', 'DOUBLE', false, null, null);
        $this->addColumn('P_AFDMcalc', 'PAfdmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('J_mgWM', 'JMgwm', 'DOUBLE', false, null, null);
        $this->addColumn('J_mgWMcalc', 'JMgwmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('J_mgDM', 'JMgdm', 'DOUBLE', false, null, null);
        $this->addColumn('J_mgDMcalc', 'JMgdmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('J_mgAFDM', 'JMgafdm', 'DOUBLE', false, null, null);
        $this->addColumn('J_mgAFDMcalc', 'JMgafdmcalc', 'VARCHAR', false, 10, null);
        $this->addColumn('J_mgC', 'JMgc', 'DOUBLE', false, null, null);
        $this->addColumn('J_mgCcalc', 'JMgccalc', 'VARCHAR', false, 10, null);
        $this->addColumn('C_Nmass', 'CNmass', 'DOUBLE', false, null, null);
        $this->addColumn('C_Pmass', 'CPmass', 'DOUBLE', false, null, null);
        $this->addColumn('N_Pmass', 'NPmass', 'DOUBLE', false, null, null);
        $this->addColumn('Comments', 'Comments', 'LONGVARCHAR', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', false, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // MassconversionTableMap
