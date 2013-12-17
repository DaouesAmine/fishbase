<?php


/**
 * Base static class for performing query and update operations on the 'label_index' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLabelIndexPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'label_index';

    /** the related Propel class for this table */
    const OM_CLASS = 'LabelIndex';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LabelIndexTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 53;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 53;

    /** the column name for the autoctr field */
    const AUTOCTR = 'label_index.autoctr';

    /** the column name for the eng field */
    const ENG = 'label_index.eng';

    /** the column name for the used_where field */
    const USED_WHERE = 'label_index.used_where';

    /** the column name for the page field */
    const PAGE = 'label_index.page';

    /** the column name for the UpdateStatus field */
    const UPDATESTATUS = 'label_index.UpdateStatus';

    /** the column name for the UpdateDescription field */
    const UPDATEDESCRIPTION = 'label_index.UpdateDescription';

    /** the column name for the UpdateImplemented field */
    const UPDATEIMPLEMENTED = 'label_index.UpdateImplemented';

    /** the column name for the UseFB field */
    const USEFB = 'label_index.UseFB';

    /** the column name for the UseSLB field */
    const USESLB = 'label_index.UseSLB';

    /** the column name for the term_bangla_original field */
    const TERM_BANGLA_ORIGINAL = 'label_index.term_bangla_original';

    /** the column name for the term_bangla field */
    const TERM_BANGLA = 'label_index.term_bangla';

    /** the column name for the term_english field */
    const TERM_ENGLISH = 'label_index.term_english';

    /** the column name for the term_thai_original field */
    const TERM_THAI_ORIGINAL = 'label_index.term_thai_original';

    /** the column name for the term_thai field */
    const TERM_THAI = 'label_index.term_thai';

    /** the column name for the term_german field */
    const TERM_GERMAN = 'label_index.term_german';

    /** the column name for the term_portuguese field */
    const TERM_PORTUGUESE = 'label_index.term_portuguese';

    /** the column name for the term_portuguese_po field */
    const TERM_PORTUGUESE_PO = 'label_index.term_portuguese_po';

    /** the column name for the term_chinese field */
    const TERM_CHINESE = 'label_index.term_chinese';

    /** the column name for the term_chinese_u field */
    const TERM_CHINESE_U = 'label_index.term_chinese_u';

    /** the column name for the term_scchinese field */
    const TERM_SCCHINESE = 'label_index.term_scchinese';

    /** the column name for the term_scchinese_u field */
    const TERM_SCCHINESE_U = 'label_index.term_scchinese_u';

    /** the column name for the term_farsi_original field */
    const TERM_FARSI_ORIGINAL = 'label_index.term_farsi_original';

    /** the column name for the term_farsi field */
    const TERM_FARSI = 'label_index.term_farsi';

    /** the column name for the term_russian_original field */
    const TERM_RUSSIAN_ORIGINAL = 'label_index.term_russian_original';

    /** the column name for the term_russian field */
    const TERM_RUSSIAN = 'label_index.term_russian';

    /** the column name for the term_french field */
    const TERM_FRENCH = 'label_index.term_french';

    /** the column name for the term_dutch field */
    const TERM_DUTCH = 'label_index.term_dutch';

    /** the column name for the term_bahasa field */
    const TERM_BAHASA = 'label_index.term_bahasa';

    /** the column name for the term_swedish field */
    const TERM_SWEDISH = 'label_index.term_swedish';

    /** the column name for the term_greek_original field */
    const TERM_GREEK_ORIGINAL = 'label_index.term_greek_original';

    /** the column name for the term_greek field */
    const TERM_GREEK = 'label_index.term_greek';

    /** the column name for the term_spanish field */
    const TERM_SPANISH = 'label_index.term_spanish';

    /** the column name for the term_italian field */
    const TERM_ITALIAN = 'label_index.term_italian';

    /** the column name for the term_vietnamese_original field */
    const TERM_VIETNAMESE_ORIGINAL = 'label_index.term_vietnamese_original';

    /** the column name for the term_vietnamese field */
    const TERM_VIETNAMESE = 'label_index.term_vietnamese';

    /** the column name for the term_laos_original field */
    const TERM_LAOS_ORIGINAL = 'label_index.term_laos_original';

    /** the column name for the term_laos field */
    const TERM_LAOS = 'label_index.term_laos';

    /** the column name for the term_hindi_original field */
    const TERM_HINDI_ORIGINAL = 'label_index.term_hindi_original';

    /** the column name for the term_hindi field */
    const TERM_HINDI = 'label_index.term_hindi';

    /** the column name for the EnglishNew field */
    const ENGLISHNEW = 'label_index.EnglishNew';

    /** the column name for the term_japanese_original field */
    const TERM_JAPANESE_ORIGINAL = 'label_index.term_japanese_original';

    /** the column name for the term_japanese field */
    const TERM_JAPANESE = 'label_index.term_japanese';

    /** the column name for the term_arabic_original field */
    const TERM_ARABIC_ORIGINAL = 'label_index.term_arabic_original';

    /** the column name for the term_arabic field */
    const TERM_ARABIC = 'label_index.term_arabic';

    /** the column name for the glossary_term field */
    const GLOSSARY_TERM = 'label_index.glossary_term';

    /** the column name for the entered field */
    const ENTERED = 'label_index.entered';

    /** the column name for the modified field */
    const MODIFIED = 'label_index.modified';

    /** the column name for the checked field */
    const CHECKED = 'label_index.checked';

    /** the column name for the dateentered field */
    const DATEENTERED = 'label_index.dateentered';

    /** the column name for the datemodified field */
    const DATEMODIFIED = 'label_index.datemodified';

    /** the column name for the datechecked field */
    const DATECHECKED = 'label_index.datechecked';

    /** the column name for the remark field */
    const REMARK = 'label_index.remark';

    /** the column name for the TS field */
    const TS = 'label_index.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of LabelIndex objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array LabelIndex[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LabelIndexPeer::$fieldNames[LabelIndexPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Eng', 'UsedWhere', 'Page', 'Updatestatus', 'Updatedescription', 'Updateimplemented', 'Usefb', 'Useslb', 'TermBanglaOriginal', 'TermBangla', 'TermEnglish', 'TermThaiOriginal', 'TermThai', 'TermGerman', 'TermPortuguese', 'TermPortuguesePo', 'TermChinese', 'TermChineseU', 'TermScchinese', 'TermScchineseU', 'TermFarsiOriginal', 'TermFarsi', 'TermRussianOriginal', 'TermRussian', 'TermFrench', 'TermDutch', 'TermBahasa', 'TermSwedish', 'TermGreekOriginal', 'TermGreek', 'TermSpanish', 'TermItalian', 'TermVietnameseOriginal', 'TermVietnamese', 'TermLaosOriginal', 'TermLaos', 'TermHindiOriginal', 'TermHindi', 'Englishnew', 'TermJapaneseOriginal', 'TermJapanese', 'TermArabicOriginal', 'TermArabic', 'GlossaryTerm', 'Entered', 'Modified', 'Checked', 'Dateentered', 'Datemodified', 'Datechecked', 'Remark', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'eng', 'usedWhere', 'page', 'updatestatus', 'updatedescription', 'updateimplemented', 'usefb', 'useslb', 'termBanglaOriginal', 'termBangla', 'termEnglish', 'termThaiOriginal', 'termThai', 'termGerman', 'termPortuguese', 'termPortuguesePo', 'termChinese', 'termChineseU', 'termScchinese', 'termScchineseU', 'termFarsiOriginal', 'termFarsi', 'termRussianOriginal', 'termRussian', 'termFrench', 'termDutch', 'termBahasa', 'termSwedish', 'termGreekOriginal', 'termGreek', 'termSpanish', 'termItalian', 'termVietnameseOriginal', 'termVietnamese', 'termLaosOriginal', 'termLaos', 'termHindiOriginal', 'termHindi', 'englishnew', 'termJapaneseOriginal', 'termJapanese', 'termArabicOriginal', 'termArabic', 'glossaryTerm', 'entered', 'modified', 'checked', 'dateentered', 'datemodified', 'datechecked', 'remark', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LabelIndexPeer::AUTOCTR, LabelIndexPeer::ENG, LabelIndexPeer::USED_WHERE, LabelIndexPeer::PAGE, LabelIndexPeer::UPDATESTATUS, LabelIndexPeer::UPDATEDESCRIPTION, LabelIndexPeer::UPDATEIMPLEMENTED, LabelIndexPeer::USEFB, LabelIndexPeer::USESLB, LabelIndexPeer::TERM_BANGLA_ORIGINAL, LabelIndexPeer::TERM_BANGLA, LabelIndexPeer::TERM_ENGLISH, LabelIndexPeer::TERM_THAI_ORIGINAL, LabelIndexPeer::TERM_THAI, LabelIndexPeer::TERM_GERMAN, LabelIndexPeer::TERM_PORTUGUESE, LabelIndexPeer::TERM_PORTUGUESE_PO, LabelIndexPeer::TERM_CHINESE, LabelIndexPeer::TERM_CHINESE_U, LabelIndexPeer::TERM_SCCHINESE, LabelIndexPeer::TERM_SCCHINESE_U, LabelIndexPeer::TERM_FARSI_ORIGINAL, LabelIndexPeer::TERM_FARSI, LabelIndexPeer::TERM_RUSSIAN_ORIGINAL, LabelIndexPeer::TERM_RUSSIAN, LabelIndexPeer::TERM_FRENCH, LabelIndexPeer::TERM_DUTCH, LabelIndexPeer::TERM_BAHASA, LabelIndexPeer::TERM_SWEDISH, LabelIndexPeer::TERM_GREEK_ORIGINAL, LabelIndexPeer::TERM_GREEK, LabelIndexPeer::TERM_SPANISH, LabelIndexPeer::TERM_ITALIAN, LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL, LabelIndexPeer::TERM_VIETNAMESE, LabelIndexPeer::TERM_LAOS_ORIGINAL, LabelIndexPeer::TERM_LAOS, LabelIndexPeer::TERM_HINDI_ORIGINAL, LabelIndexPeer::TERM_HINDI, LabelIndexPeer::ENGLISHNEW, LabelIndexPeer::TERM_JAPANESE_ORIGINAL, LabelIndexPeer::TERM_JAPANESE, LabelIndexPeer::TERM_ARABIC_ORIGINAL, LabelIndexPeer::TERM_ARABIC, LabelIndexPeer::GLOSSARY_TERM, LabelIndexPeer::ENTERED, LabelIndexPeer::MODIFIED, LabelIndexPeer::CHECKED, LabelIndexPeer::DATEENTERED, LabelIndexPeer::DATEMODIFIED, LabelIndexPeer::DATECHECKED, LabelIndexPeer::REMARK, LabelIndexPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'ENG', 'USED_WHERE', 'PAGE', 'UPDATESTATUS', 'UPDATEDESCRIPTION', 'UPDATEIMPLEMENTED', 'USEFB', 'USESLB', 'TERM_BANGLA_ORIGINAL', 'TERM_BANGLA', 'TERM_ENGLISH', 'TERM_THAI_ORIGINAL', 'TERM_THAI', 'TERM_GERMAN', 'TERM_PORTUGUESE', 'TERM_PORTUGUESE_PO', 'TERM_CHINESE', 'TERM_CHINESE_U', 'TERM_SCCHINESE', 'TERM_SCCHINESE_U', 'TERM_FARSI_ORIGINAL', 'TERM_FARSI', 'TERM_RUSSIAN_ORIGINAL', 'TERM_RUSSIAN', 'TERM_FRENCH', 'TERM_DUTCH', 'TERM_BAHASA', 'TERM_SWEDISH', 'TERM_GREEK_ORIGINAL', 'TERM_GREEK', 'TERM_SPANISH', 'TERM_ITALIAN', 'TERM_VIETNAMESE_ORIGINAL', 'TERM_VIETNAMESE', 'TERM_LAOS_ORIGINAL', 'TERM_LAOS', 'TERM_HINDI_ORIGINAL', 'TERM_HINDI', 'ENGLISHNEW', 'TERM_JAPANESE_ORIGINAL', 'TERM_JAPANESE', 'TERM_ARABIC_ORIGINAL', 'TERM_ARABIC', 'GLOSSARY_TERM', 'ENTERED', 'MODIFIED', 'CHECKED', 'DATEENTERED', 'DATEMODIFIED', 'DATECHECKED', 'REMARK', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'eng', 'used_where', 'page', 'UpdateStatus', 'UpdateDescription', 'UpdateImplemented', 'UseFB', 'UseSLB', 'term_bangla_original', 'term_bangla', 'term_english', 'term_thai_original', 'term_thai', 'term_german', 'term_portuguese', 'term_portuguese_po', 'term_chinese', 'term_chinese_u', 'term_scchinese', 'term_scchinese_u', 'term_farsi_original', 'term_farsi', 'term_russian_original', 'term_russian', 'term_french', 'term_dutch', 'term_bahasa', 'term_swedish', 'term_greek_original', 'term_greek', 'term_spanish', 'term_italian', 'term_vietnamese_original', 'term_vietnamese', 'term_laos_original', 'term_laos', 'term_hindi_original', 'term_hindi', 'EnglishNew', 'term_japanese_original', 'term_japanese', 'term_arabic_original', 'term_arabic', 'glossary_term', 'entered', 'modified', 'checked', 'dateentered', 'datemodified', 'datechecked', 'remark', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LabelIndexPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Eng' => 1, 'UsedWhere' => 2, 'Page' => 3, 'Updatestatus' => 4, 'Updatedescription' => 5, 'Updateimplemented' => 6, 'Usefb' => 7, 'Useslb' => 8, 'TermBanglaOriginal' => 9, 'TermBangla' => 10, 'TermEnglish' => 11, 'TermThaiOriginal' => 12, 'TermThai' => 13, 'TermGerman' => 14, 'TermPortuguese' => 15, 'TermPortuguesePo' => 16, 'TermChinese' => 17, 'TermChineseU' => 18, 'TermScchinese' => 19, 'TermScchineseU' => 20, 'TermFarsiOriginal' => 21, 'TermFarsi' => 22, 'TermRussianOriginal' => 23, 'TermRussian' => 24, 'TermFrench' => 25, 'TermDutch' => 26, 'TermBahasa' => 27, 'TermSwedish' => 28, 'TermGreekOriginal' => 29, 'TermGreek' => 30, 'TermSpanish' => 31, 'TermItalian' => 32, 'TermVietnameseOriginal' => 33, 'TermVietnamese' => 34, 'TermLaosOriginal' => 35, 'TermLaos' => 36, 'TermHindiOriginal' => 37, 'TermHindi' => 38, 'Englishnew' => 39, 'TermJapaneseOriginal' => 40, 'TermJapanese' => 41, 'TermArabicOriginal' => 42, 'TermArabic' => 43, 'GlossaryTerm' => 44, 'Entered' => 45, 'Modified' => 46, 'Checked' => 47, 'Dateentered' => 48, 'Datemodified' => 49, 'Datechecked' => 50, 'Remark' => 51, 'Ts' => 52, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'eng' => 1, 'usedWhere' => 2, 'page' => 3, 'updatestatus' => 4, 'updatedescription' => 5, 'updateimplemented' => 6, 'usefb' => 7, 'useslb' => 8, 'termBanglaOriginal' => 9, 'termBangla' => 10, 'termEnglish' => 11, 'termThaiOriginal' => 12, 'termThai' => 13, 'termGerman' => 14, 'termPortuguese' => 15, 'termPortuguesePo' => 16, 'termChinese' => 17, 'termChineseU' => 18, 'termScchinese' => 19, 'termScchineseU' => 20, 'termFarsiOriginal' => 21, 'termFarsi' => 22, 'termRussianOriginal' => 23, 'termRussian' => 24, 'termFrench' => 25, 'termDutch' => 26, 'termBahasa' => 27, 'termSwedish' => 28, 'termGreekOriginal' => 29, 'termGreek' => 30, 'termSpanish' => 31, 'termItalian' => 32, 'termVietnameseOriginal' => 33, 'termVietnamese' => 34, 'termLaosOriginal' => 35, 'termLaos' => 36, 'termHindiOriginal' => 37, 'termHindi' => 38, 'englishnew' => 39, 'termJapaneseOriginal' => 40, 'termJapanese' => 41, 'termArabicOriginal' => 42, 'termArabic' => 43, 'glossaryTerm' => 44, 'entered' => 45, 'modified' => 46, 'checked' => 47, 'dateentered' => 48, 'datemodified' => 49, 'datechecked' => 50, 'remark' => 51, 'ts' => 52, ),
        BasePeer::TYPE_COLNAME => array (LabelIndexPeer::AUTOCTR => 0, LabelIndexPeer::ENG => 1, LabelIndexPeer::USED_WHERE => 2, LabelIndexPeer::PAGE => 3, LabelIndexPeer::UPDATESTATUS => 4, LabelIndexPeer::UPDATEDESCRIPTION => 5, LabelIndexPeer::UPDATEIMPLEMENTED => 6, LabelIndexPeer::USEFB => 7, LabelIndexPeer::USESLB => 8, LabelIndexPeer::TERM_BANGLA_ORIGINAL => 9, LabelIndexPeer::TERM_BANGLA => 10, LabelIndexPeer::TERM_ENGLISH => 11, LabelIndexPeer::TERM_THAI_ORIGINAL => 12, LabelIndexPeer::TERM_THAI => 13, LabelIndexPeer::TERM_GERMAN => 14, LabelIndexPeer::TERM_PORTUGUESE => 15, LabelIndexPeer::TERM_PORTUGUESE_PO => 16, LabelIndexPeer::TERM_CHINESE => 17, LabelIndexPeer::TERM_CHINESE_U => 18, LabelIndexPeer::TERM_SCCHINESE => 19, LabelIndexPeer::TERM_SCCHINESE_U => 20, LabelIndexPeer::TERM_FARSI_ORIGINAL => 21, LabelIndexPeer::TERM_FARSI => 22, LabelIndexPeer::TERM_RUSSIAN_ORIGINAL => 23, LabelIndexPeer::TERM_RUSSIAN => 24, LabelIndexPeer::TERM_FRENCH => 25, LabelIndexPeer::TERM_DUTCH => 26, LabelIndexPeer::TERM_BAHASA => 27, LabelIndexPeer::TERM_SWEDISH => 28, LabelIndexPeer::TERM_GREEK_ORIGINAL => 29, LabelIndexPeer::TERM_GREEK => 30, LabelIndexPeer::TERM_SPANISH => 31, LabelIndexPeer::TERM_ITALIAN => 32, LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL => 33, LabelIndexPeer::TERM_VIETNAMESE => 34, LabelIndexPeer::TERM_LAOS_ORIGINAL => 35, LabelIndexPeer::TERM_LAOS => 36, LabelIndexPeer::TERM_HINDI_ORIGINAL => 37, LabelIndexPeer::TERM_HINDI => 38, LabelIndexPeer::ENGLISHNEW => 39, LabelIndexPeer::TERM_JAPANESE_ORIGINAL => 40, LabelIndexPeer::TERM_JAPANESE => 41, LabelIndexPeer::TERM_ARABIC_ORIGINAL => 42, LabelIndexPeer::TERM_ARABIC => 43, LabelIndexPeer::GLOSSARY_TERM => 44, LabelIndexPeer::ENTERED => 45, LabelIndexPeer::MODIFIED => 46, LabelIndexPeer::CHECKED => 47, LabelIndexPeer::DATEENTERED => 48, LabelIndexPeer::DATEMODIFIED => 49, LabelIndexPeer::DATECHECKED => 50, LabelIndexPeer::REMARK => 51, LabelIndexPeer::TS => 52, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'ENG' => 1, 'USED_WHERE' => 2, 'PAGE' => 3, 'UPDATESTATUS' => 4, 'UPDATEDESCRIPTION' => 5, 'UPDATEIMPLEMENTED' => 6, 'USEFB' => 7, 'USESLB' => 8, 'TERM_BANGLA_ORIGINAL' => 9, 'TERM_BANGLA' => 10, 'TERM_ENGLISH' => 11, 'TERM_THAI_ORIGINAL' => 12, 'TERM_THAI' => 13, 'TERM_GERMAN' => 14, 'TERM_PORTUGUESE' => 15, 'TERM_PORTUGUESE_PO' => 16, 'TERM_CHINESE' => 17, 'TERM_CHINESE_U' => 18, 'TERM_SCCHINESE' => 19, 'TERM_SCCHINESE_U' => 20, 'TERM_FARSI_ORIGINAL' => 21, 'TERM_FARSI' => 22, 'TERM_RUSSIAN_ORIGINAL' => 23, 'TERM_RUSSIAN' => 24, 'TERM_FRENCH' => 25, 'TERM_DUTCH' => 26, 'TERM_BAHASA' => 27, 'TERM_SWEDISH' => 28, 'TERM_GREEK_ORIGINAL' => 29, 'TERM_GREEK' => 30, 'TERM_SPANISH' => 31, 'TERM_ITALIAN' => 32, 'TERM_VIETNAMESE_ORIGINAL' => 33, 'TERM_VIETNAMESE' => 34, 'TERM_LAOS_ORIGINAL' => 35, 'TERM_LAOS' => 36, 'TERM_HINDI_ORIGINAL' => 37, 'TERM_HINDI' => 38, 'ENGLISHNEW' => 39, 'TERM_JAPANESE_ORIGINAL' => 40, 'TERM_JAPANESE' => 41, 'TERM_ARABIC_ORIGINAL' => 42, 'TERM_ARABIC' => 43, 'GLOSSARY_TERM' => 44, 'ENTERED' => 45, 'MODIFIED' => 46, 'CHECKED' => 47, 'DATEENTERED' => 48, 'DATEMODIFIED' => 49, 'DATECHECKED' => 50, 'REMARK' => 51, 'TS' => 52, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'eng' => 1, 'used_where' => 2, 'page' => 3, 'UpdateStatus' => 4, 'UpdateDescription' => 5, 'UpdateImplemented' => 6, 'UseFB' => 7, 'UseSLB' => 8, 'term_bangla_original' => 9, 'term_bangla' => 10, 'term_english' => 11, 'term_thai_original' => 12, 'term_thai' => 13, 'term_german' => 14, 'term_portuguese' => 15, 'term_portuguese_po' => 16, 'term_chinese' => 17, 'term_chinese_u' => 18, 'term_scchinese' => 19, 'term_scchinese_u' => 20, 'term_farsi_original' => 21, 'term_farsi' => 22, 'term_russian_original' => 23, 'term_russian' => 24, 'term_french' => 25, 'term_dutch' => 26, 'term_bahasa' => 27, 'term_swedish' => 28, 'term_greek_original' => 29, 'term_greek' => 30, 'term_spanish' => 31, 'term_italian' => 32, 'term_vietnamese_original' => 33, 'term_vietnamese' => 34, 'term_laos_original' => 35, 'term_laos' => 36, 'term_hindi_original' => 37, 'term_hindi' => 38, 'EnglishNew' => 39, 'term_japanese_original' => 40, 'term_japanese' => 41, 'term_arabic_original' => 42, 'term_arabic' => 43, 'glossary_term' => 44, 'entered' => 45, 'modified' => 46, 'checked' => 47, 'dateentered' => 48, 'datemodified' => 49, 'datechecked' => 50, 'remark' => 51, 'TS' => 52, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = LabelIndexPeer::getFieldNames($toType);
        $key = isset(LabelIndexPeer::$fieldKeys[$fromType][$name]) ? LabelIndexPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LabelIndexPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, LabelIndexPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LabelIndexPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. LabelIndexPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LabelIndexPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(LabelIndexPeer::AUTOCTR);
            $criteria->addSelectColumn(LabelIndexPeer::ENG);
            $criteria->addSelectColumn(LabelIndexPeer::USED_WHERE);
            $criteria->addSelectColumn(LabelIndexPeer::PAGE);
            $criteria->addSelectColumn(LabelIndexPeer::UPDATESTATUS);
            $criteria->addSelectColumn(LabelIndexPeer::UPDATEDESCRIPTION);
            $criteria->addSelectColumn(LabelIndexPeer::UPDATEIMPLEMENTED);
            $criteria->addSelectColumn(LabelIndexPeer::USEFB);
            $criteria->addSelectColumn(LabelIndexPeer::USESLB);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_BANGLA_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_BANGLA);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_ENGLISH);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_THAI_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_THAI);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_GERMAN);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_PORTUGUESE);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_PORTUGUESE_PO);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_CHINESE);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_CHINESE_U);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_SCCHINESE);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_SCCHINESE_U);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_FARSI_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_FARSI);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_RUSSIAN_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_RUSSIAN);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_FRENCH);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_DUTCH);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_BAHASA);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_SWEDISH);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_GREEK_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_GREEK);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_SPANISH);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_ITALIAN);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_VIETNAMESE);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_LAOS_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_LAOS);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_HINDI_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_HINDI);
            $criteria->addSelectColumn(LabelIndexPeer::ENGLISHNEW);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_JAPANESE_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_JAPANESE);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_ARABIC_ORIGINAL);
            $criteria->addSelectColumn(LabelIndexPeer::TERM_ARABIC);
            $criteria->addSelectColumn(LabelIndexPeer::GLOSSARY_TERM);
            $criteria->addSelectColumn(LabelIndexPeer::ENTERED);
            $criteria->addSelectColumn(LabelIndexPeer::MODIFIED);
            $criteria->addSelectColumn(LabelIndexPeer::CHECKED);
            $criteria->addSelectColumn(LabelIndexPeer::DATEENTERED);
            $criteria->addSelectColumn(LabelIndexPeer::DATEMODIFIED);
            $criteria->addSelectColumn(LabelIndexPeer::DATECHECKED);
            $criteria->addSelectColumn(LabelIndexPeer::REMARK);
            $criteria->addSelectColumn(LabelIndexPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.eng');
            $criteria->addSelectColumn($alias . '.used_where');
            $criteria->addSelectColumn($alias . '.page');
            $criteria->addSelectColumn($alias . '.UpdateStatus');
            $criteria->addSelectColumn($alias . '.UpdateDescription');
            $criteria->addSelectColumn($alias . '.UpdateImplemented');
            $criteria->addSelectColumn($alias . '.UseFB');
            $criteria->addSelectColumn($alias . '.UseSLB');
            $criteria->addSelectColumn($alias . '.term_bangla_original');
            $criteria->addSelectColumn($alias . '.term_bangla');
            $criteria->addSelectColumn($alias . '.term_english');
            $criteria->addSelectColumn($alias . '.term_thai_original');
            $criteria->addSelectColumn($alias . '.term_thai');
            $criteria->addSelectColumn($alias . '.term_german');
            $criteria->addSelectColumn($alias . '.term_portuguese');
            $criteria->addSelectColumn($alias . '.term_portuguese_po');
            $criteria->addSelectColumn($alias . '.term_chinese');
            $criteria->addSelectColumn($alias . '.term_chinese_u');
            $criteria->addSelectColumn($alias . '.term_scchinese');
            $criteria->addSelectColumn($alias . '.term_scchinese_u');
            $criteria->addSelectColumn($alias . '.term_farsi_original');
            $criteria->addSelectColumn($alias . '.term_farsi');
            $criteria->addSelectColumn($alias . '.term_russian_original');
            $criteria->addSelectColumn($alias . '.term_russian');
            $criteria->addSelectColumn($alias . '.term_french');
            $criteria->addSelectColumn($alias . '.term_dutch');
            $criteria->addSelectColumn($alias . '.term_bahasa');
            $criteria->addSelectColumn($alias . '.term_swedish');
            $criteria->addSelectColumn($alias . '.term_greek_original');
            $criteria->addSelectColumn($alias . '.term_greek');
            $criteria->addSelectColumn($alias . '.term_spanish');
            $criteria->addSelectColumn($alias . '.term_italian');
            $criteria->addSelectColumn($alias . '.term_vietnamese_original');
            $criteria->addSelectColumn($alias . '.term_vietnamese');
            $criteria->addSelectColumn($alias . '.term_laos_original');
            $criteria->addSelectColumn($alias . '.term_laos');
            $criteria->addSelectColumn($alias . '.term_hindi_original');
            $criteria->addSelectColumn($alias . '.term_hindi');
            $criteria->addSelectColumn($alias . '.EnglishNew');
            $criteria->addSelectColumn($alias . '.term_japanese_original');
            $criteria->addSelectColumn($alias . '.term_japanese');
            $criteria->addSelectColumn($alias . '.term_arabic_original');
            $criteria->addSelectColumn($alias . '.term_arabic');
            $criteria->addSelectColumn($alias . '.glossary_term');
            $criteria->addSelectColumn($alias . '.entered');
            $criteria->addSelectColumn($alias . '.modified');
            $criteria->addSelectColumn($alias . '.checked');
            $criteria->addSelectColumn($alias . '.dateentered');
            $criteria->addSelectColumn($alias . '.datemodified');
            $criteria->addSelectColumn($alias . '.datechecked');
            $criteria->addSelectColumn($alias . '.remark');
            $criteria->addSelectColumn($alias . '.TS');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LabelIndexPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LabelIndexPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LabelIndexPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return LabelIndex
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LabelIndexPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return LabelIndexPeer::populateObjects(LabelIndexPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LabelIndexPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LabelIndexPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param LabelIndex $obj A LabelIndex object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            LabelIndexPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A LabelIndex object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof LabelIndex) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or LabelIndex object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LabelIndexPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return LabelIndex Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LabelIndexPeer::$instances[$key])) {
                return LabelIndexPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (LabelIndexPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LabelIndexPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to label_index
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = LabelIndexPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LabelIndexPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LabelIndexPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LabelIndexPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (LabelIndex object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LabelIndexPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LabelIndexPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LabelIndexPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LabelIndexPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LabelIndexPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(LabelIndexPeer::DATABASE_NAME)->getTable(LabelIndexPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLabelIndexPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLabelIndexPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LabelIndexTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return LabelIndexPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a LabelIndex or Criteria object.
     *
     * @param      mixed $values Criteria or LabelIndex object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from LabelIndex object
        }

        if ($criteria->containsKey(LabelIndexPeer::AUTOCTR) && $criteria->keyContainsValue(LabelIndexPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LabelIndexPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LabelIndexPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a LabelIndex or Criteria object.
     *
     * @param      mixed $values Criteria or LabelIndex object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LabelIndexPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LabelIndexPeer::AUTOCTR);
            $value = $criteria->remove(LabelIndexPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(LabelIndexPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LabelIndexPeer::TABLE_NAME);
            }

        } else { // $values is LabelIndex object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LabelIndexPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the label_index table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LabelIndexPeer::TABLE_NAME, $con, LabelIndexPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LabelIndexPeer::clearInstancePool();
            LabelIndexPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a LabelIndex or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or LabelIndex object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LabelIndexPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof LabelIndex) { // it's a model object
            // invalidate the cache for this single object
            LabelIndexPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LabelIndexPeer::DATABASE_NAME);
            $criteria->add(LabelIndexPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LabelIndexPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LabelIndexPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LabelIndexPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given LabelIndex object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param LabelIndex $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LabelIndexPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LabelIndexPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(LabelIndexPeer::DATABASE_NAME, LabelIndexPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return LabelIndex
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LabelIndexPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LabelIndexPeer::DATABASE_NAME);
        $criteria->add(LabelIndexPeer::AUTOCTR, $pk);

        $v = LabelIndexPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return LabelIndex[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LabelIndexPeer::DATABASE_NAME);
            $criteria->add(LabelIndexPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = LabelIndexPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLabelIndexPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLabelIndexPeer::buildTableMap();

