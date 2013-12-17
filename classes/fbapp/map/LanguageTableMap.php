<?php



/**
 * This class defines the structure of the 'language' table.
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
class LanguageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LanguageTableMap';

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
        $this->setName('language');
        $this->setPhpName('Language');
        $this->setClassname('Language');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('LangCode', 'Langcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('LanguageName', 'Languagename', 'VARCHAR', true, 40, null);
        $this->addColumn('AlternateName', 'Alternatename', 'VARCHAR', false, 255, null);
        $this->addColumn('FirstLanguageSpeakers', 'Firstlanguagespeakers', 'FLOAT', false, null, null);
        $this->addColumn('LangGroupCode', 'Langgroupcode', 'SMALLINT', false, null, null);
        $this->addColumn('LanguageSubgroup', 'Languagesubgroup', 'VARCHAR', false, 25, null);
        $this->addColumn('C_Code', 'CCode', 'VARCHAR', false, 4, null);
        $this->addColumn('LanguageRef', 'Languageref', 'INTEGER', false, null, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('SecondLanguageSpeakers', 'Secondlanguagespeakers', 'FLOAT', false, null, null);
        $this->addColumn('URL', 'Url', 'VARCHAR', false, 255, null);
        $this->addColumn('Used', 'Used', 'INTEGER', false, null, 0);
        $this->addColumn('NamesCount', 'Namescount', 'INTEGER', false, null, null);
        $this->addColumn('SpeciesCount', 'Speciescount', 'INTEGER', false, null, null);
        $this->addColumn('FamiliesCount', 'Familiescount', 'SMALLINT', false, null, null);
        $this->addColumn('NamesCount_SLB', 'NamescountSlb', 'INTEGER', false, null, null);
        $this->addColumn('SpeciesCount_SLB', 'SpeciescountSlb', 'INTEGER', false, null, null);
        $this->addColumn('FamiliesCount_SLB', 'FamiliescountSlb', 'SMALLINT', false, null, null);
        $this->addColumn('LastUpdate', 'Lastupdate', 'DATE', false, null, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'DATE', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'DATE', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'CHAR', false, 19, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LanguageTableMap
