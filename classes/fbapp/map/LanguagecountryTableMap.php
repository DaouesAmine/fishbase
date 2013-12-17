<?php



/**
 * This class defines the structure of the 'languagecountry' table.
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
class LanguagecountryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LanguagecountryTableMap';

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
        $this->setName('languagecountry');
        $this->setPhpName('Languagecountry');
        $this->setClassname('Languagecountry');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('LangCode', 'Langcode', 'SMALLINT', true, null, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('NumberofSpeakers', 'Numberofspeakers', 'FLOAT', false, null, 0);
        $this->addColumn('RefNo', 'Refno', 'INTEGER', false, null, 0);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 100, null);
        $this->addColumn('LangCountryRank', 'Langcountryrank', 'SMALLINT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LanguagecountryTableMap
