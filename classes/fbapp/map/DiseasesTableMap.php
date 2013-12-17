<?php



/**
 * This class defines the structure of the 'diseases' table.
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
class DiseasesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.DiseasesTableMap';

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
        $this->setName('diseases');
        $this->setPhpName('Diseases');
        $this->setClassname('Diseases');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('DiseasesRefNo', 'Diseasesrefno', 'INTEGER', true, null, null);
        $this->addPrimaryKey('DisCode', 'Discode', 'INTEGER', true, null, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('Year', 'Year', 'VARCHAR', false, 10, null);
        $this->addPrimaryKey('Locality', 'Locality', 'VARCHAR', true, 100, '');
        $this->addColumn('Eggs', 'Eggs', 'TINYINT', false, null, null);
        $this->addColumn('Larvae', 'Larvae', 'TINYINT', false, null, null);
        $this->addColumn('Fry', 'Fry', 'TINYINT', false, null, null);
        $this->addColumn('Juveniles', 'Juveniles', 'TINYINT', false, null, null);
        $this->addColumn('Females', 'Females', 'TINYINT', false, null, null);
        $this->addColumn('Males', 'Males', 'TINYINT', false, null, null);
        $this->addColumn('Wild', 'Wild', 'TINYINT', false, null, null);
        $this->addColumn('Culture', 'Culture', 'TINYINT', false, null, null);
        $this->addColumn('Prevalence', 'Prevalence', 'VARCHAR', false, 11, null);
        $this->addColumn('Intensity', 'Intensity', 'VARCHAR', false, 6, null);
        $this->addColumn('Mortality', 'Mortality', 'VARCHAR', false, 28, null);
        $this->addColumn('TypeofCulture', 'Typeofculture', 'VARCHAR', false, 11, null);
        $this->addColumn('WaterTemp', 'Watertemp', 'SMALLINT', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // DiseasesTableMap
