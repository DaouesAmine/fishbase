<?php



/**
 * This class defines the structure of the 'label_index' table.
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
class LabelIndexTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'fbapp.map.LabelIndexTableMap';

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
        $this->setName('label_index');
        $this->setPhpName('LabelIndex');
        $this->setClassname('LabelIndex');
        $this->setPackage('fbapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('autoctr', 'Autoctr', 'INTEGER', true, null, null);
        $this->addColumn('eng', 'Eng', 'VARCHAR', false, 255, null);
        $this->addColumn('used_where', 'UsedWhere', 'VARCHAR', false, 50, null);
        $this->addColumn('page', 'Page', 'VARCHAR', false, 255, null);
        $this->addColumn('UpdateStatus', 'Updatestatus', 'TINYINT', false, null, null);
        $this->addColumn('UpdateDescription', 'Updatedescription', 'VARCHAR', false, 255, null);
        $this->addColumn('UpdateImplemented', 'Updateimplemented', 'TIMESTAMP', false, null, null);
        $this->addColumn('UseFB', 'Usefb', 'TINYINT', false, null, null);
        $this->addColumn('UseSLB', 'Useslb', 'TINYINT', false, null, null);
        $this->addColumn('term_bangla_original', 'TermBanglaOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_bangla', 'TermBangla', 'CLOB', false, null, null);
        $this->addColumn('term_english', 'TermEnglish', 'CLOB', false, null, null);
        $this->addColumn('term_thai_original', 'TermThaiOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_thai', 'TermThai', 'CLOB', false, null, null);
        $this->addColumn('term_german', 'TermGerman', 'CLOB', false, null, null);
        $this->addColumn('term_portuguese', 'TermPortuguese', 'CLOB', false, null, null);
        $this->addColumn('term_portuguese_po', 'TermPortuguesePo', 'CLOB', false, null, null);
        $this->addColumn('term_chinese', 'TermChinese', 'CLOB', false, null, null);
        $this->addColumn('term_chinese_u', 'TermChineseU', 'CLOB', false, null, null);
        $this->addColumn('term_scchinese', 'TermScchinese', 'CLOB', false, null, null);
        $this->addColumn('term_scchinese_u', 'TermScchineseU', 'CLOB', false, null, null);
        $this->addColumn('term_farsi_original', 'TermFarsiOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_farsi', 'TermFarsi', 'CLOB', false, null, null);
        $this->addColumn('term_russian_original', 'TermRussianOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_russian', 'TermRussian', 'CLOB', false, null, null);
        $this->addColumn('term_french', 'TermFrench', 'CLOB', false, null, null);
        $this->addColumn('term_dutch', 'TermDutch', 'CLOB', false, null, null);
        $this->addColumn('term_bahasa', 'TermBahasa', 'CLOB', false, null, null);
        $this->addColumn('term_swedish', 'TermSwedish', 'CLOB', false, null, null);
        $this->addColumn('term_greek_original', 'TermGreekOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_greek', 'TermGreek', 'CLOB', false, null, null);
        $this->addColumn('term_spanish', 'TermSpanish', 'CLOB', false, null, null);
        $this->addColumn('term_italian', 'TermItalian', 'CLOB', false, null, null);
        $this->addColumn('term_vietnamese_original', 'TermVietnameseOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_vietnamese', 'TermVietnamese', 'CLOB', false, null, null);
        $this->addColumn('term_laos_original', 'TermLaosOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_laos', 'TermLaos', 'CLOB', false, null, null);
        $this->addColumn('term_hindi_original', 'TermHindiOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_hindi', 'TermHindi', 'CLOB', false, null, null);
        $this->addColumn('EnglishNew', 'Englishnew', 'VARCHAR', false, 255, null);
        $this->addColumn('term_japanese_original', 'TermJapaneseOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_japanese', 'TermJapanese', 'CLOB', false, null, null);
        $this->addColumn('term_arabic_original', 'TermArabicOriginal', 'CLOB', false, null, null);
        $this->addColumn('term_arabic', 'TermArabic', 'CLOB', false, null, null);
        $this->addColumn('glossary_term', 'GlossaryTerm', 'VARCHAR', false, 50, null);
        $this->addColumn('entered', 'Entered', 'INTEGER', false, null, null);
        $this->addColumn('modified', 'Modified', 'INTEGER', false, null, null);
        $this->addColumn('checked', 'Checked', 'INTEGER', false, null, null);
        $this->addColumn('dateentered', 'Dateentered', 'TIMESTAMP', false, null, null);
        $this->addColumn('datemodified', 'Datemodified', 'TIMESTAMP', false, null, null);
        $this->addColumn('datechecked', 'Datechecked', 'TIMESTAMP', false, null, null);
        $this->addColumn('remark', 'Remark', 'CLOB', false, null, null);
        $this->addColumn('TS', 'Ts', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LabelIndexTableMap
