<?php



/**
 * This class defines the structure of the 'comnames' table.
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
class ComnamesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.ComnamesTableMap';

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
        $this->setName('comnames');
        $this->setPhpName('Comnames');
        $this->setClassname('Comnames');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ComName', 'Comname', 'VARCHAR', true, 60, null);
        $this->addColumn('Transliteration', 'Transliteration', 'VARCHAR', false, 255, null);
        $this->addPrimaryKey('StockCode', 'Stockcode', 'INTEGER', true, null, null);
        $this->addColumn('SpecCode', 'Speccode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('C_Code', 'CCode', 'VARCHAR', true, 4, null);
        $this->addPrimaryKey('Language', 'Language', 'VARCHAR', true, 21, null);
        $this->addColumn('Script', 'Script', 'VARCHAR', false, 20, null);
        $this->addColumn('UnicodeText', 'Unicodetext', 'CLOB', false, null, null);
        $this->addPrimaryKey('NameType', 'Nametype', 'VARCHAR', true, 10, '');
        $this->addColumn('PreferredName', 'Preferredname', 'TINYINT', false, null, null);
        $this->addColumn('TradeName', 'Tradename', 'INTEGER', false, null, 0);
        $this->addColumn('TradeNameRef', 'Tradenameref', 'INTEGER', false, null, null);
        $this->addColumn('ComNamesRefNo', 'Comnamesrefno', 'INTEGER', false, null, null);
        $this->addColumn('Misspelling', 'Misspelling', 'TINYINT', false, null, null);
        $this->addColumn('Size', 'Size', 'VARCHAR', false, 20, null);
        $this->addColumn('Sex', 'Sex', 'VARCHAR', false, 17, null);
        $this->addColumn('Language2', 'Language2', 'VARCHAR', false, 45, null);
        $this->addColumn('Locality2', 'Locality2', 'VARCHAR', false, 255, null);
        $this->addColumn('Rank', 'Rank', 'SMALLINT', true, null, null);
        $this->addColumn('Remarks', 'Remarks', 'CLOB', false, null, null);
        $this->addColumn('SecondWord', 'Secondword', 'VARCHAR', false, 38, null);
        $this->addColumn('ThirdWord', 'Thirdword', 'VARCHAR', false, 36, null);
        $this->addColumn('FourthWord', 'Fourthword', 'VARCHAR', false, 30, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, null);
        $this->addColumn('DateEntered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('DateModified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('DateChecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('Core', 'Core', 'VARCHAR', false, 17, null);
        $this->addColumn('modifier1', 'Modifier1', 'VARCHAR', false, 18, null);
        $this->addColumn('modifier2', 'Modifier2', 'VARCHAR', false, 18, null);
        $this->addColumn('CLOFFSCA', 'Cloffsca', 'INTEGER', false, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ComnamesTableMap
