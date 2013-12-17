<?php



/**
 * This class defines the structure of the 'abnorm' table.
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
class AbnormTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.AbnormTableMap';

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
        $this->setName('abnorm');
        $this->setPhpName('Abnorm');
        $this->setClassname('Abnorm');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('AutoCtr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('Family', 'Family', 'VARCHAR', false, 255, null);
        $this->addColumn('Genus', 'Genus', 'VARCHAR', false, 255, null);
        $this->addColumn('Species', 'Species', 'VARCHAR', false, 255, null);
        $this->addColumn('CommonName', 'Commonname', 'VARCHAR', false, 255, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addColumn('StockCode', 'Stockcode', 'INTEGER', false, null, null);
        $this->addColumn('LifeStage', 'Lifestage', 'VARCHAR', false, 255, null);
        $this->addColumn('Location', 'Location', 'VARCHAR', false, 255, null);
        $this->addColumn('Season', 'Season', 'VARCHAR', false, 255, null);
        $this->addColumn('AbnormalityDisease', 'Abnormalitydisease', 'VARCHAR', false, 255, null);
        $this->addColumn('Prevalence', 'Prevalence', 'VARCHAR', false, 255, null);
        $this->addColumn('Stressor', 'Stressor', 'VARCHAR', false, 255, null);
        $this->addColumn('LabField', 'Labfield', 'VARCHAR', false, 255, null);
        $this->addColumn('Concentration', 'Concentration', 'VARCHAR', false, 255, null);
        $this->addColumn('ABNORMRefNo', 'Abnormrefno', 'INTEGER', false, null, null);
        $this->addColumn('SecondRefNo', 'Secondrefno', 'INTEGER', false, null, null);
        $this->addColumn('Notes', 'Notes', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AbnormTableMap
