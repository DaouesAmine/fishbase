<?php



/**
 * This class defines the structure of the 'languagescriptcountry' table.
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
class LanguagescriptcountryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LanguagescriptcountryTableMap';

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
        $this->setName('languagescriptcountry');
        $this->setPhpName('Languagescriptcountry');
        $this->setClassname('Languagescriptcountry');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ScriptName', 'Scriptname', 'VARCHAR', true, 30, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addColumn('Remarks', 'Remarks', 'VARCHAR', false, 255, null);
        $this->addColumn('RefNo', 'Refno', 'INTEGER', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LanguagescriptcountryTableMap
