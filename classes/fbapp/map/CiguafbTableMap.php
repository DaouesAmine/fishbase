<?php



/**
 * This class defines the structure of the 'ciguafb' table.
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
class CiguafbTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.CiguafbTableMap';

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
        $this->setName('ciguafb');
        $this->setPhpName('Ciguafb');
        $this->setClassname('Ciguafb');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, 0);
        $this->addColumn('ValidGenus', 'Validgenus', 'VARCHAR', false, 50, null);
        $this->addColumn('ValidSpecies', 'Validspecies', 'VARCHAR', false, 50, null);
        $this->addColumn('CountryCT', 'Countryct', 'VARCHAR', false, 50, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('FrequencyCT', 'Frequencyct', 'VARCHAR', false, 50, null);
        $this->addColumn('DistributionCT', 'Distributionct', 'VARCHAR', false, 50, null);
        $this->addColumn('NoteCT', 'Notect', 'CLOB', false, null, null);
        $this->addColumn('RefCountryCT', 'Refcountryct', 'INTEGER', false, null, null);
        $this->addColumn('DalzelCode', 'Dalzelcode', 'SMALLINT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CiguafbTableMap
