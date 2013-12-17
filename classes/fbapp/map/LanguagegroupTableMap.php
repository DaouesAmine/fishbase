<?php



/**
 * This class defines the structure of the 'languagegroup' table.
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
class LanguagegroupTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LanguagegroupTableMap';

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
        $this->setName('languagegroup');
        $this->setPhpName('Languagegroup');
        $this->setClassname('Languagegroup');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('LangGroupCode', 'Langgroupcode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('LanguageFamily', 'Languagefamily', 'VARCHAR', true, 25, null);
        $this->addPrimaryKey('LanguageBranch', 'Languagebranch', 'VARCHAR', true, 25, null);
        $this->addPrimaryKey('LanguageGroup', 'Languagegroup', 'VARCHAR', true, 25, null);
        $this->addColumn('Extinct', 'Extinct', 'TINYINT', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LanguagegroupTableMap
