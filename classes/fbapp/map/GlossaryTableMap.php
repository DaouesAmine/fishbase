<?php



/**
 * This class defines the structure of the 'glossary' table.
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
class GlossaryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.GlossaryTableMap';

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
        $this->setName('glossary');
        $this->setPhpName('Glossary');
        $this->setClassname('Glossary');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('TermEnglish', 'Termenglish', 'VARCHAR', true, 80, '');
        $this->addColumn('TermEnglishScnd', 'Termenglishscnd', 'VARCHAR', false, 60, null);
        $this->addColumn('TermEngishThird', 'Termengishthird', 'VARCHAR', false, 50, null);
        $this->addColumn('Abbreviation', 'Abbreviation', 'VARCHAR', false, 10, null);
        $this->addColumn('TermFrench', 'Termfrench', 'VARCHAR', false, 80, null);
        $this->addColumn('TermSpanish', 'Termspanish', 'VARCHAR', false, 80, null);
        $this->addColumn('TermPortuguese', 'Termportuguese', 'VARCHAR', false, 80, null);
        $this->addColumn('TermRussian', 'Termrussian', 'VARCHAR', false, 80, null);
        $this->addColumn('TermCyrillic', 'Termcyrillic', 'VARCHAR', false, 90, null);
        $this->addColumn('TermCyrillic_u', 'TermcyrillicU', 'CLOB', false, null, null);
        $this->addColumn('TermChinese', 'Termchinese', 'VARCHAR', false, 90, null);
        $this->addColumn('TermChinese_u', 'TermchineseU', 'CLOB', false, null, null);
        $this->addColumn('See1', 'See1', 'VARCHAR', false, 50, null);
        $this->addColumn('See2', 'See2', 'VARCHAR', false, 50, null);
        $this->addColumn('See3', 'See3', 'VARCHAR', false, 50, null);
        $this->addColumn('Picname', 'Picname', 'VARCHAR', false, 50, null);
        $this->addColumn('Genetics', 'Genetics', 'TINYINT', false, null, null);
        $this->addColumn('Comments', 'Comments', 'VARCHAR', false, 255, null);
        $this->addColumn('Entered', 'Entered', 'SMALLINT', true, null, 0);
        $this->addColumn('Dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('Modified', 'Modified', 'SMALLINT', false, null, null);
        $this->addColumn('Datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('Expert', 'Expert', 'SMALLINT', false, null, null);
        $this->addColumn('Datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('English', 'English', 'CLOB', false, null, null);
        $this->addColumn('Grammar', 'Grammar', 'VARCHAR', false, 15, null);
        $this->addColumn('Gender', 'Gender', 'VARCHAR', false, 10, null);
        $this->addColumn('FrenchDef', 'Frenchdef', 'CLOB', false, null, null);
        $this->addColumn('EnteredFR', 'Enteredfr', 'SMALLINT', false, null, null);
        $this->addColumn('DateEnteredFR', 'Dateenteredfr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ModifiedFR', 'Modifiedfr', 'SMALLINT', false, null, null);
        $this->addColumn('DateModifiedFR', 'Datemodifiedfr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpertFR', 'Expertfr', 'SMALLINT', false, null, null);
        $this->addColumn('DateCheckedFR', 'Datecheckedfr', 'TIMESTAMP', false, null, null);
        $this->addColumn('SpanishDef', 'Spanishdef', 'CLOB', false, null, null);
        $this->addColumn('EnteredSP', 'Enteredsp', 'SMALLINT', false, null, null);
        $this->addColumn('DateEnteredSP', 'Dateenteredsp', 'TIMESTAMP', false, null, null);
        $this->addColumn('ModifiedSP', 'Modifiedsp', 'SMALLINT', false, null, null);
        $this->addColumn('DateModifiedSP', 'Datemodifiedsp', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpertSP', 'Expertsp', 'SMALLINT', false, null, null);
        $this->addColumn('DateCheckedSP', 'Datecheckedsp', 'VARCHAR', false, 19, null);
        $this->addColumn('PortugueseDef', 'Portuguesedef', 'CLOB', false, null, null);
        $this->addColumn('EnteredPR', 'Enteredpr', 'SMALLINT', false, null, null);
        $this->addColumn('DateEnteredPR', 'Dateenteredpr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ModifiedPR', 'Modifiedpr', 'SMALLINT', false, null, null);
        $this->addColumn('DateModifiedPR', 'Datemodifiedpr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpertPR', 'Expertpr', 'SMALLINT', false, null, null);
        $this->addColumn('DateCheckedPR', 'Datecheckedpr', 'TIMESTAMP', false, null, null);
        $this->addColumn('RussianDef', 'Russiandef', 'CLOB', false, null, null);
        $this->addColumn('EnteredRus', 'Enteredrus', 'SMALLINT', false, null, 0);
        $this->addColumn('DateEnteredRus', 'Dateenteredrus', 'VARCHAR', false, 19, null);
        $this->addColumn('ModifiedRus', 'Modifiedrus', 'SMALLINT', false, null, 0);
        $this->addColumn('DateModifiedRus', 'Datemodifiedrus', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpertRus', 'Expertrus', 'SMALLINT', false, null, 0);
        $this->addColumn('DateCheckedRus', 'Datecheckedrus', 'TIMESTAMP', false, null, null);
        $this->addColumn('CyrillicDef', 'Cyrillicdef', 'CLOB', false, null, null);
        $this->addColumn('EnteredCyr', 'Enteredcyr', 'SMALLINT', false, null, 0);
        $this->addColumn('DateEnteredCyr', 'Dateenteredcyr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ModifiedCyr', 'Modifiedcyr', 'SMALLINT', false, null, 0);
        $this->addColumn('DateModifiedCyr', 'Datemodifiedcyr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpertCyr', 'Expertcyr', 'SMALLINT', false, null, 0);
        $this->addColumn('DateCheckedCyr', 'Datecheckedcyr', 'TIMESTAMP', false, null, null);
        $this->addColumn('ChineseDef', 'Chinesedef', 'CLOB', false, null, null);
        $this->addColumn('EnteredChi', 'Enteredchi', 'SMALLINT', false, null, null);
        $this->addColumn('DateEnteredChi', 'Dateenteredchi', 'TIMESTAMP', false, null, null);
        $this->addColumn('ModifiedChi', 'Modifiedchi', 'SMALLINT', false, null, null);
        $this->addColumn('DateModifiedChi', 'Datemodifiedchi', 'TIMESTAMP', false, null, null);
        $this->addColumn('ExpertChi', 'Expertchi', 'SMALLINT', false, null, null);
        $this->addColumn('DateCheckedChi', 'Datecheckedchi', 'TIMESTAMP', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GlossaryTableMap
