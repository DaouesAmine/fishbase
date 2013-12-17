<?php


/**
 * Base static class for performing query and update operations on the 'glossary' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGlossaryPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'glossary';

    /** the related Propel class for this table */
    const OM_CLASS = 'Glossary';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GlossaryTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 71;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 71;

    /** the column name for the autoctr field */
    const AUTOCTR = 'glossary.autoctr';

    /** the column name for the TermEnglish field */
    const TERMENGLISH = 'glossary.TermEnglish';

    /** the column name for the TermEnglishScnd field */
    const TERMENGLISHSCND = 'glossary.TermEnglishScnd';

    /** the column name for the TermEngishThird field */
    const TERMENGISHTHIRD = 'glossary.TermEngishThird';

    /** the column name for the Abbreviation field */
    const ABBREVIATION = 'glossary.Abbreviation';

    /** the column name for the TermFrench field */
    const TERMFRENCH = 'glossary.TermFrench';

    /** the column name for the TermSpanish field */
    const TERMSPANISH = 'glossary.TermSpanish';

    /** the column name for the TermPortuguese field */
    const TERMPORTUGUESE = 'glossary.TermPortuguese';

    /** the column name for the TermRussian field */
    const TERMRUSSIAN = 'glossary.TermRussian';

    /** the column name for the TermCyrillic field */
    const TERMCYRILLIC = 'glossary.TermCyrillic';

    /** the column name for the TermCyrillic_u field */
    const TERMCYRILLIC_U = 'glossary.TermCyrillic_u';

    /** the column name for the TermChinese field */
    const TERMCHINESE = 'glossary.TermChinese';

    /** the column name for the TermChinese_u field */
    const TERMCHINESE_U = 'glossary.TermChinese_u';

    /** the column name for the See1 field */
    const SEE1 = 'glossary.See1';

    /** the column name for the See2 field */
    const SEE2 = 'glossary.See2';

    /** the column name for the See3 field */
    const SEE3 = 'glossary.See3';

    /** the column name for the Picname field */
    const PICNAME = 'glossary.Picname';

    /** the column name for the Genetics field */
    const GENETICS = 'glossary.Genetics';

    /** the column name for the Comments field */
    const COMMENTS = 'glossary.Comments';

    /** the column name for the Entered field */
    const ENTERED = 'glossary.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'glossary.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'glossary.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'glossary.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'glossary.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'glossary.Datechecked';

    /** the column name for the English field */
    const ENGLISH = 'glossary.English';

    /** the column name for the Grammar field */
    const GRAMMAR = 'glossary.Grammar';

    /** the column name for the Gender field */
    const GENDER = 'glossary.Gender';

    /** the column name for the FrenchDef field */
    const FRENCHDEF = 'glossary.FrenchDef';

    /** the column name for the EnteredFR field */
    const ENTEREDFR = 'glossary.EnteredFR';

    /** the column name for the DateEnteredFR field */
    const DATEENTEREDFR = 'glossary.DateEnteredFR';

    /** the column name for the ModifiedFR field */
    const MODIFIEDFR = 'glossary.ModifiedFR';

    /** the column name for the DateModifiedFR field */
    const DATEMODIFIEDFR = 'glossary.DateModifiedFR';

    /** the column name for the ExpertFR field */
    const EXPERTFR = 'glossary.ExpertFR';

    /** the column name for the DateCheckedFR field */
    const DATECHECKEDFR = 'glossary.DateCheckedFR';

    /** the column name for the SpanishDef field */
    const SPANISHDEF = 'glossary.SpanishDef';

    /** the column name for the EnteredSP field */
    const ENTEREDSP = 'glossary.EnteredSP';

    /** the column name for the DateEnteredSP field */
    const DATEENTEREDSP = 'glossary.DateEnteredSP';

    /** the column name for the ModifiedSP field */
    const MODIFIEDSP = 'glossary.ModifiedSP';

    /** the column name for the DateModifiedSP field */
    const DATEMODIFIEDSP = 'glossary.DateModifiedSP';

    /** the column name for the ExpertSP field */
    const EXPERTSP = 'glossary.ExpertSP';

    /** the column name for the DateCheckedSP field */
    const DATECHECKEDSP = 'glossary.DateCheckedSP';

    /** the column name for the PortugueseDef field */
    const PORTUGUESEDEF = 'glossary.PortugueseDef';

    /** the column name for the EnteredPR field */
    const ENTEREDPR = 'glossary.EnteredPR';

    /** the column name for the DateEnteredPR field */
    const DATEENTEREDPR = 'glossary.DateEnteredPR';

    /** the column name for the ModifiedPR field */
    const MODIFIEDPR = 'glossary.ModifiedPR';

    /** the column name for the DateModifiedPR field */
    const DATEMODIFIEDPR = 'glossary.DateModifiedPR';

    /** the column name for the ExpertPR field */
    const EXPERTPR = 'glossary.ExpertPR';

    /** the column name for the DateCheckedPR field */
    const DATECHECKEDPR = 'glossary.DateCheckedPR';

    /** the column name for the RussianDef field */
    const RUSSIANDEF = 'glossary.RussianDef';

    /** the column name for the EnteredRus field */
    const ENTEREDRUS = 'glossary.EnteredRus';

    /** the column name for the DateEnteredRus field */
    const DATEENTEREDRUS = 'glossary.DateEnteredRus';

    /** the column name for the ModifiedRus field */
    const MODIFIEDRUS = 'glossary.ModifiedRus';

    /** the column name for the DateModifiedRus field */
    const DATEMODIFIEDRUS = 'glossary.DateModifiedRus';

    /** the column name for the ExpertRus field */
    const EXPERTRUS = 'glossary.ExpertRus';

    /** the column name for the DateCheckedRus field */
    const DATECHECKEDRUS = 'glossary.DateCheckedRus';

    /** the column name for the CyrillicDef field */
    const CYRILLICDEF = 'glossary.CyrillicDef';

    /** the column name for the EnteredCyr field */
    const ENTEREDCYR = 'glossary.EnteredCyr';

    /** the column name for the DateEnteredCyr field */
    const DATEENTEREDCYR = 'glossary.DateEnteredCyr';

    /** the column name for the ModifiedCyr field */
    const MODIFIEDCYR = 'glossary.ModifiedCyr';

    /** the column name for the DateModifiedCyr field */
    const DATEMODIFIEDCYR = 'glossary.DateModifiedCyr';

    /** the column name for the ExpertCyr field */
    const EXPERTCYR = 'glossary.ExpertCyr';

    /** the column name for the DateCheckedCyr field */
    const DATECHECKEDCYR = 'glossary.DateCheckedCyr';

    /** the column name for the ChineseDef field */
    const CHINESEDEF = 'glossary.ChineseDef';

    /** the column name for the EnteredChi field */
    const ENTEREDCHI = 'glossary.EnteredChi';

    /** the column name for the DateEnteredChi field */
    const DATEENTEREDCHI = 'glossary.DateEnteredChi';

    /** the column name for the ModifiedChi field */
    const MODIFIEDCHI = 'glossary.ModifiedChi';

    /** the column name for the DateModifiedChi field */
    const DATEMODIFIEDCHI = 'glossary.DateModifiedChi';

    /** the column name for the ExpertChi field */
    const EXPERTCHI = 'glossary.ExpertChi';

    /** the column name for the DateCheckedChi field */
    const DATECHECKEDCHI = 'glossary.DateCheckedChi';

    /** the column name for the TS field */
    const TS = 'glossary.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Glossary objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Glossary[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GlossaryPeer::$fieldNames[GlossaryPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Termenglish', 'Termenglishscnd', 'Termengishthird', 'Abbreviation', 'Termfrench', 'Termspanish', 'Termportuguese', 'Termrussian', 'Termcyrillic', 'TermcyrillicU', 'Termchinese', 'TermchineseU', 'See1', 'See2', 'See3', 'Picname', 'Genetics', 'Comments', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'English', 'Grammar', 'Gender', 'Frenchdef', 'Enteredfr', 'Dateenteredfr', 'Modifiedfr', 'Datemodifiedfr', 'Expertfr', 'Datecheckedfr', 'Spanishdef', 'Enteredsp', 'Dateenteredsp', 'Modifiedsp', 'Datemodifiedsp', 'Expertsp', 'Datecheckedsp', 'Portuguesedef', 'Enteredpr', 'Dateenteredpr', 'Modifiedpr', 'Datemodifiedpr', 'Expertpr', 'Datecheckedpr', 'Russiandef', 'Enteredrus', 'Dateenteredrus', 'Modifiedrus', 'Datemodifiedrus', 'Expertrus', 'Datecheckedrus', 'Cyrillicdef', 'Enteredcyr', 'Dateenteredcyr', 'Modifiedcyr', 'Datemodifiedcyr', 'Expertcyr', 'Datecheckedcyr', 'Chinesedef', 'Enteredchi', 'Dateenteredchi', 'Modifiedchi', 'Datemodifiedchi', 'Expertchi', 'Datecheckedchi', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'termenglish', 'termenglishscnd', 'termengishthird', 'abbreviation', 'termfrench', 'termspanish', 'termportuguese', 'termrussian', 'termcyrillic', 'termcyrillicU', 'termchinese', 'termchineseU', 'see1', 'see2', 'see3', 'picname', 'genetics', 'comments', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'english', 'grammar', 'gender', 'frenchdef', 'enteredfr', 'dateenteredfr', 'modifiedfr', 'datemodifiedfr', 'expertfr', 'datecheckedfr', 'spanishdef', 'enteredsp', 'dateenteredsp', 'modifiedsp', 'datemodifiedsp', 'expertsp', 'datecheckedsp', 'portuguesedef', 'enteredpr', 'dateenteredpr', 'modifiedpr', 'datemodifiedpr', 'expertpr', 'datecheckedpr', 'russiandef', 'enteredrus', 'dateenteredrus', 'modifiedrus', 'datemodifiedrus', 'expertrus', 'datecheckedrus', 'cyrillicdef', 'enteredcyr', 'dateenteredcyr', 'modifiedcyr', 'datemodifiedcyr', 'expertcyr', 'datecheckedcyr', 'chinesedef', 'enteredchi', 'dateenteredchi', 'modifiedchi', 'datemodifiedchi', 'expertchi', 'datecheckedchi', 'ts', ),
        BasePeer::TYPE_COLNAME => array (GlossaryPeer::AUTOCTR, GlossaryPeer::TERMENGLISH, GlossaryPeer::TERMENGLISHSCND, GlossaryPeer::TERMENGISHTHIRD, GlossaryPeer::ABBREVIATION, GlossaryPeer::TERMFRENCH, GlossaryPeer::TERMSPANISH, GlossaryPeer::TERMPORTUGUESE, GlossaryPeer::TERMRUSSIAN, GlossaryPeer::TERMCYRILLIC, GlossaryPeer::TERMCYRILLIC_U, GlossaryPeer::TERMCHINESE, GlossaryPeer::TERMCHINESE_U, GlossaryPeer::SEE1, GlossaryPeer::SEE2, GlossaryPeer::SEE3, GlossaryPeer::PICNAME, GlossaryPeer::GENETICS, GlossaryPeer::COMMENTS, GlossaryPeer::ENTERED, GlossaryPeer::DATEENTERED, GlossaryPeer::MODIFIED, GlossaryPeer::DATEMODIFIED, GlossaryPeer::EXPERT, GlossaryPeer::DATECHECKED, GlossaryPeer::ENGLISH, GlossaryPeer::GRAMMAR, GlossaryPeer::GENDER, GlossaryPeer::FRENCHDEF, GlossaryPeer::ENTEREDFR, GlossaryPeer::DATEENTEREDFR, GlossaryPeer::MODIFIEDFR, GlossaryPeer::DATEMODIFIEDFR, GlossaryPeer::EXPERTFR, GlossaryPeer::DATECHECKEDFR, GlossaryPeer::SPANISHDEF, GlossaryPeer::ENTEREDSP, GlossaryPeer::DATEENTEREDSP, GlossaryPeer::MODIFIEDSP, GlossaryPeer::DATEMODIFIEDSP, GlossaryPeer::EXPERTSP, GlossaryPeer::DATECHECKEDSP, GlossaryPeer::PORTUGUESEDEF, GlossaryPeer::ENTEREDPR, GlossaryPeer::DATEENTEREDPR, GlossaryPeer::MODIFIEDPR, GlossaryPeer::DATEMODIFIEDPR, GlossaryPeer::EXPERTPR, GlossaryPeer::DATECHECKEDPR, GlossaryPeer::RUSSIANDEF, GlossaryPeer::ENTEREDRUS, GlossaryPeer::DATEENTEREDRUS, GlossaryPeer::MODIFIEDRUS, GlossaryPeer::DATEMODIFIEDRUS, GlossaryPeer::EXPERTRUS, GlossaryPeer::DATECHECKEDRUS, GlossaryPeer::CYRILLICDEF, GlossaryPeer::ENTEREDCYR, GlossaryPeer::DATEENTEREDCYR, GlossaryPeer::MODIFIEDCYR, GlossaryPeer::DATEMODIFIEDCYR, GlossaryPeer::EXPERTCYR, GlossaryPeer::DATECHECKEDCYR, GlossaryPeer::CHINESEDEF, GlossaryPeer::ENTEREDCHI, GlossaryPeer::DATEENTEREDCHI, GlossaryPeer::MODIFIEDCHI, GlossaryPeer::DATEMODIFIEDCHI, GlossaryPeer::EXPERTCHI, GlossaryPeer::DATECHECKEDCHI, GlossaryPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'TERMENGLISH', 'TERMENGLISHSCND', 'TERMENGISHTHIRD', 'ABBREVIATION', 'TERMFRENCH', 'TERMSPANISH', 'TERMPORTUGUESE', 'TERMRUSSIAN', 'TERMCYRILLIC', 'TERMCYRILLIC_U', 'TERMCHINESE', 'TERMCHINESE_U', 'SEE1', 'SEE2', 'SEE3', 'PICNAME', 'GENETICS', 'COMMENTS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'ENGLISH', 'GRAMMAR', 'GENDER', 'FRENCHDEF', 'ENTEREDFR', 'DATEENTEREDFR', 'MODIFIEDFR', 'DATEMODIFIEDFR', 'EXPERTFR', 'DATECHECKEDFR', 'SPANISHDEF', 'ENTEREDSP', 'DATEENTEREDSP', 'MODIFIEDSP', 'DATEMODIFIEDSP', 'EXPERTSP', 'DATECHECKEDSP', 'PORTUGUESEDEF', 'ENTEREDPR', 'DATEENTEREDPR', 'MODIFIEDPR', 'DATEMODIFIEDPR', 'EXPERTPR', 'DATECHECKEDPR', 'RUSSIANDEF', 'ENTEREDRUS', 'DATEENTEREDRUS', 'MODIFIEDRUS', 'DATEMODIFIEDRUS', 'EXPERTRUS', 'DATECHECKEDRUS', 'CYRILLICDEF', 'ENTEREDCYR', 'DATEENTEREDCYR', 'MODIFIEDCYR', 'DATEMODIFIEDCYR', 'EXPERTCYR', 'DATECHECKEDCYR', 'CHINESEDEF', 'ENTEREDCHI', 'DATEENTEREDCHI', 'MODIFIEDCHI', 'DATEMODIFIEDCHI', 'EXPERTCHI', 'DATECHECKEDCHI', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'TermEnglish', 'TermEnglishScnd', 'TermEngishThird', 'Abbreviation', 'TermFrench', 'TermSpanish', 'TermPortuguese', 'TermRussian', 'TermCyrillic', 'TermCyrillic_u', 'TermChinese', 'TermChinese_u', 'See1', 'See2', 'See3', 'Picname', 'Genetics', 'Comments', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'English', 'Grammar', 'Gender', 'FrenchDef', 'EnteredFR', 'DateEnteredFR', 'ModifiedFR', 'DateModifiedFR', 'ExpertFR', 'DateCheckedFR', 'SpanishDef', 'EnteredSP', 'DateEnteredSP', 'ModifiedSP', 'DateModifiedSP', 'ExpertSP', 'DateCheckedSP', 'PortugueseDef', 'EnteredPR', 'DateEnteredPR', 'ModifiedPR', 'DateModifiedPR', 'ExpertPR', 'DateCheckedPR', 'RussianDef', 'EnteredRus', 'DateEnteredRus', 'ModifiedRus', 'DateModifiedRus', 'ExpertRus', 'DateCheckedRus', 'CyrillicDef', 'EnteredCyr', 'DateEnteredCyr', 'ModifiedCyr', 'DateModifiedCyr', 'ExpertCyr', 'DateCheckedCyr', 'ChineseDef', 'EnteredChi', 'DateEnteredChi', 'ModifiedChi', 'DateModifiedChi', 'ExpertChi', 'DateCheckedChi', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GlossaryPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Termenglish' => 1, 'Termenglishscnd' => 2, 'Termengishthird' => 3, 'Abbreviation' => 4, 'Termfrench' => 5, 'Termspanish' => 6, 'Termportuguese' => 7, 'Termrussian' => 8, 'Termcyrillic' => 9, 'TermcyrillicU' => 10, 'Termchinese' => 11, 'TermchineseU' => 12, 'See1' => 13, 'See2' => 14, 'See3' => 15, 'Picname' => 16, 'Genetics' => 17, 'Comments' => 18, 'Entered' => 19, 'Dateentered' => 20, 'Modified' => 21, 'Datemodified' => 22, 'Expert' => 23, 'Datechecked' => 24, 'English' => 25, 'Grammar' => 26, 'Gender' => 27, 'Frenchdef' => 28, 'Enteredfr' => 29, 'Dateenteredfr' => 30, 'Modifiedfr' => 31, 'Datemodifiedfr' => 32, 'Expertfr' => 33, 'Datecheckedfr' => 34, 'Spanishdef' => 35, 'Enteredsp' => 36, 'Dateenteredsp' => 37, 'Modifiedsp' => 38, 'Datemodifiedsp' => 39, 'Expertsp' => 40, 'Datecheckedsp' => 41, 'Portuguesedef' => 42, 'Enteredpr' => 43, 'Dateenteredpr' => 44, 'Modifiedpr' => 45, 'Datemodifiedpr' => 46, 'Expertpr' => 47, 'Datecheckedpr' => 48, 'Russiandef' => 49, 'Enteredrus' => 50, 'Dateenteredrus' => 51, 'Modifiedrus' => 52, 'Datemodifiedrus' => 53, 'Expertrus' => 54, 'Datecheckedrus' => 55, 'Cyrillicdef' => 56, 'Enteredcyr' => 57, 'Dateenteredcyr' => 58, 'Modifiedcyr' => 59, 'Datemodifiedcyr' => 60, 'Expertcyr' => 61, 'Datecheckedcyr' => 62, 'Chinesedef' => 63, 'Enteredchi' => 64, 'Dateenteredchi' => 65, 'Modifiedchi' => 66, 'Datemodifiedchi' => 67, 'Expertchi' => 68, 'Datecheckedchi' => 69, 'Ts' => 70, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'termenglish' => 1, 'termenglishscnd' => 2, 'termengishthird' => 3, 'abbreviation' => 4, 'termfrench' => 5, 'termspanish' => 6, 'termportuguese' => 7, 'termrussian' => 8, 'termcyrillic' => 9, 'termcyrillicU' => 10, 'termchinese' => 11, 'termchineseU' => 12, 'see1' => 13, 'see2' => 14, 'see3' => 15, 'picname' => 16, 'genetics' => 17, 'comments' => 18, 'entered' => 19, 'dateentered' => 20, 'modified' => 21, 'datemodified' => 22, 'expert' => 23, 'datechecked' => 24, 'english' => 25, 'grammar' => 26, 'gender' => 27, 'frenchdef' => 28, 'enteredfr' => 29, 'dateenteredfr' => 30, 'modifiedfr' => 31, 'datemodifiedfr' => 32, 'expertfr' => 33, 'datecheckedfr' => 34, 'spanishdef' => 35, 'enteredsp' => 36, 'dateenteredsp' => 37, 'modifiedsp' => 38, 'datemodifiedsp' => 39, 'expertsp' => 40, 'datecheckedsp' => 41, 'portuguesedef' => 42, 'enteredpr' => 43, 'dateenteredpr' => 44, 'modifiedpr' => 45, 'datemodifiedpr' => 46, 'expertpr' => 47, 'datecheckedpr' => 48, 'russiandef' => 49, 'enteredrus' => 50, 'dateenteredrus' => 51, 'modifiedrus' => 52, 'datemodifiedrus' => 53, 'expertrus' => 54, 'datecheckedrus' => 55, 'cyrillicdef' => 56, 'enteredcyr' => 57, 'dateenteredcyr' => 58, 'modifiedcyr' => 59, 'datemodifiedcyr' => 60, 'expertcyr' => 61, 'datecheckedcyr' => 62, 'chinesedef' => 63, 'enteredchi' => 64, 'dateenteredchi' => 65, 'modifiedchi' => 66, 'datemodifiedchi' => 67, 'expertchi' => 68, 'datecheckedchi' => 69, 'ts' => 70, ),
        BasePeer::TYPE_COLNAME => array (GlossaryPeer::AUTOCTR => 0, GlossaryPeer::TERMENGLISH => 1, GlossaryPeer::TERMENGLISHSCND => 2, GlossaryPeer::TERMENGISHTHIRD => 3, GlossaryPeer::ABBREVIATION => 4, GlossaryPeer::TERMFRENCH => 5, GlossaryPeer::TERMSPANISH => 6, GlossaryPeer::TERMPORTUGUESE => 7, GlossaryPeer::TERMRUSSIAN => 8, GlossaryPeer::TERMCYRILLIC => 9, GlossaryPeer::TERMCYRILLIC_U => 10, GlossaryPeer::TERMCHINESE => 11, GlossaryPeer::TERMCHINESE_U => 12, GlossaryPeer::SEE1 => 13, GlossaryPeer::SEE2 => 14, GlossaryPeer::SEE3 => 15, GlossaryPeer::PICNAME => 16, GlossaryPeer::GENETICS => 17, GlossaryPeer::COMMENTS => 18, GlossaryPeer::ENTERED => 19, GlossaryPeer::DATEENTERED => 20, GlossaryPeer::MODIFIED => 21, GlossaryPeer::DATEMODIFIED => 22, GlossaryPeer::EXPERT => 23, GlossaryPeer::DATECHECKED => 24, GlossaryPeer::ENGLISH => 25, GlossaryPeer::GRAMMAR => 26, GlossaryPeer::GENDER => 27, GlossaryPeer::FRENCHDEF => 28, GlossaryPeer::ENTEREDFR => 29, GlossaryPeer::DATEENTEREDFR => 30, GlossaryPeer::MODIFIEDFR => 31, GlossaryPeer::DATEMODIFIEDFR => 32, GlossaryPeer::EXPERTFR => 33, GlossaryPeer::DATECHECKEDFR => 34, GlossaryPeer::SPANISHDEF => 35, GlossaryPeer::ENTEREDSP => 36, GlossaryPeer::DATEENTEREDSP => 37, GlossaryPeer::MODIFIEDSP => 38, GlossaryPeer::DATEMODIFIEDSP => 39, GlossaryPeer::EXPERTSP => 40, GlossaryPeer::DATECHECKEDSP => 41, GlossaryPeer::PORTUGUESEDEF => 42, GlossaryPeer::ENTEREDPR => 43, GlossaryPeer::DATEENTEREDPR => 44, GlossaryPeer::MODIFIEDPR => 45, GlossaryPeer::DATEMODIFIEDPR => 46, GlossaryPeer::EXPERTPR => 47, GlossaryPeer::DATECHECKEDPR => 48, GlossaryPeer::RUSSIANDEF => 49, GlossaryPeer::ENTEREDRUS => 50, GlossaryPeer::DATEENTEREDRUS => 51, GlossaryPeer::MODIFIEDRUS => 52, GlossaryPeer::DATEMODIFIEDRUS => 53, GlossaryPeer::EXPERTRUS => 54, GlossaryPeer::DATECHECKEDRUS => 55, GlossaryPeer::CYRILLICDEF => 56, GlossaryPeer::ENTEREDCYR => 57, GlossaryPeer::DATEENTEREDCYR => 58, GlossaryPeer::MODIFIEDCYR => 59, GlossaryPeer::DATEMODIFIEDCYR => 60, GlossaryPeer::EXPERTCYR => 61, GlossaryPeer::DATECHECKEDCYR => 62, GlossaryPeer::CHINESEDEF => 63, GlossaryPeer::ENTEREDCHI => 64, GlossaryPeer::DATEENTEREDCHI => 65, GlossaryPeer::MODIFIEDCHI => 66, GlossaryPeer::DATEMODIFIEDCHI => 67, GlossaryPeer::EXPERTCHI => 68, GlossaryPeer::DATECHECKEDCHI => 69, GlossaryPeer::TS => 70, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'TERMENGLISH' => 1, 'TERMENGLISHSCND' => 2, 'TERMENGISHTHIRD' => 3, 'ABBREVIATION' => 4, 'TERMFRENCH' => 5, 'TERMSPANISH' => 6, 'TERMPORTUGUESE' => 7, 'TERMRUSSIAN' => 8, 'TERMCYRILLIC' => 9, 'TERMCYRILLIC_U' => 10, 'TERMCHINESE' => 11, 'TERMCHINESE_U' => 12, 'SEE1' => 13, 'SEE2' => 14, 'SEE3' => 15, 'PICNAME' => 16, 'GENETICS' => 17, 'COMMENTS' => 18, 'ENTERED' => 19, 'DATEENTERED' => 20, 'MODIFIED' => 21, 'DATEMODIFIED' => 22, 'EXPERT' => 23, 'DATECHECKED' => 24, 'ENGLISH' => 25, 'GRAMMAR' => 26, 'GENDER' => 27, 'FRENCHDEF' => 28, 'ENTEREDFR' => 29, 'DATEENTEREDFR' => 30, 'MODIFIEDFR' => 31, 'DATEMODIFIEDFR' => 32, 'EXPERTFR' => 33, 'DATECHECKEDFR' => 34, 'SPANISHDEF' => 35, 'ENTEREDSP' => 36, 'DATEENTEREDSP' => 37, 'MODIFIEDSP' => 38, 'DATEMODIFIEDSP' => 39, 'EXPERTSP' => 40, 'DATECHECKEDSP' => 41, 'PORTUGUESEDEF' => 42, 'ENTEREDPR' => 43, 'DATEENTEREDPR' => 44, 'MODIFIEDPR' => 45, 'DATEMODIFIEDPR' => 46, 'EXPERTPR' => 47, 'DATECHECKEDPR' => 48, 'RUSSIANDEF' => 49, 'ENTEREDRUS' => 50, 'DATEENTEREDRUS' => 51, 'MODIFIEDRUS' => 52, 'DATEMODIFIEDRUS' => 53, 'EXPERTRUS' => 54, 'DATECHECKEDRUS' => 55, 'CYRILLICDEF' => 56, 'ENTEREDCYR' => 57, 'DATEENTEREDCYR' => 58, 'MODIFIEDCYR' => 59, 'DATEMODIFIEDCYR' => 60, 'EXPERTCYR' => 61, 'DATECHECKEDCYR' => 62, 'CHINESEDEF' => 63, 'ENTEREDCHI' => 64, 'DATEENTEREDCHI' => 65, 'MODIFIEDCHI' => 66, 'DATEMODIFIEDCHI' => 67, 'EXPERTCHI' => 68, 'DATECHECKEDCHI' => 69, 'TS' => 70, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'TermEnglish' => 1, 'TermEnglishScnd' => 2, 'TermEngishThird' => 3, 'Abbreviation' => 4, 'TermFrench' => 5, 'TermSpanish' => 6, 'TermPortuguese' => 7, 'TermRussian' => 8, 'TermCyrillic' => 9, 'TermCyrillic_u' => 10, 'TermChinese' => 11, 'TermChinese_u' => 12, 'See1' => 13, 'See2' => 14, 'See3' => 15, 'Picname' => 16, 'Genetics' => 17, 'Comments' => 18, 'Entered' => 19, 'Dateentered' => 20, 'Modified' => 21, 'Datemodified' => 22, 'Expert' => 23, 'Datechecked' => 24, 'English' => 25, 'Grammar' => 26, 'Gender' => 27, 'FrenchDef' => 28, 'EnteredFR' => 29, 'DateEnteredFR' => 30, 'ModifiedFR' => 31, 'DateModifiedFR' => 32, 'ExpertFR' => 33, 'DateCheckedFR' => 34, 'SpanishDef' => 35, 'EnteredSP' => 36, 'DateEnteredSP' => 37, 'ModifiedSP' => 38, 'DateModifiedSP' => 39, 'ExpertSP' => 40, 'DateCheckedSP' => 41, 'PortugueseDef' => 42, 'EnteredPR' => 43, 'DateEnteredPR' => 44, 'ModifiedPR' => 45, 'DateModifiedPR' => 46, 'ExpertPR' => 47, 'DateCheckedPR' => 48, 'RussianDef' => 49, 'EnteredRus' => 50, 'DateEnteredRus' => 51, 'ModifiedRus' => 52, 'DateModifiedRus' => 53, 'ExpertRus' => 54, 'DateCheckedRus' => 55, 'CyrillicDef' => 56, 'EnteredCyr' => 57, 'DateEnteredCyr' => 58, 'ModifiedCyr' => 59, 'DateModifiedCyr' => 60, 'ExpertCyr' => 61, 'DateCheckedCyr' => 62, 'ChineseDef' => 63, 'EnteredChi' => 64, 'DateEnteredChi' => 65, 'ModifiedChi' => 66, 'DateModifiedChi' => 67, 'ExpertChi' => 68, 'DateCheckedChi' => 69, 'TS' => 70, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, )
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
        $toNames = GlossaryPeer::getFieldNames($toType);
        $key = isset(GlossaryPeer::$fieldKeys[$fromType][$name]) ? GlossaryPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GlossaryPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GlossaryPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GlossaryPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GlossaryPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GlossaryPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GlossaryPeer::AUTOCTR);
            $criteria->addSelectColumn(GlossaryPeer::TERMENGLISH);
            $criteria->addSelectColumn(GlossaryPeer::TERMENGLISHSCND);
            $criteria->addSelectColumn(GlossaryPeer::TERMENGISHTHIRD);
            $criteria->addSelectColumn(GlossaryPeer::ABBREVIATION);
            $criteria->addSelectColumn(GlossaryPeer::TERMFRENCH);
            $criteria->addSelectColumn(GlossaryPeer::TERMSPANISH);
            $criteria->addSelectColumn(GlossaryPeer::TERMPORTUGUESE);
            $criteria->addSelectColumn(GlossaryPeer::TERMRUSSIAN);
            $criteria->addSelectColumn(GlossaryPeer::TERMCYRILLIC);
            $criteria->addSelectColumn(GlossaryPeer::TERMCYRILLIC_U);
            $criteria->addSelectColumn(GlossaryPeer::TERMCHINESE);
            $criteria->addSelectColumn(GlossaryPeer::TERMCHINESE_U);
            $criteria->addSelectColumn(GlossaryPeer::SEE1);
            $criteria->addSelectColumn(GlossaryPeer::SEE2);
            $criteria->addSelectColumn(GlossaryPeer::SEE3);
            $criteria->addSelectColumn(GlossaryPeer::PICNAME);
            $criteria->addSelectColumn(GlossaryPeer::GENETICS);
            $criteria->addSelectColumn(GlossaryPeer::COMMENTS);
            $criteria->addSelectColumn(GlossaryPeer::ENTERED);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTERED);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIED);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIED);
            $criteria->addSelectColumn(GlossaryPeer::EXPERT);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKED);
            $criteria->addSelectColumn(GlossaryPeer::ENGLISH);
            $criteria->addSelectColumn(GlossaryPeer::GRAMMAR);
            $criteria->addSelectColumn(GlossaryPeer::GENDER);
            $criteria->addSelectColumn(GlossaryPeer::FRENCHDEF);
            $criteria->addSelectColumn(GlossaryPeer::ENTEREDFR);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTEREDFR);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIEDFR);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIEDFR);
            $criteria->addSelectColumn(GlossaryPeer::EXPERTFR);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKEDFR);
            $criteria->addSelectColumn(GlossaryPeer::SPANISHDEF);
            $criteria->addSelectColumn(GlossaryPeer::ENTEREDSP);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTEREDSP);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIEDSP);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIEDSP);
            $criteria->addSelectColumn(GlossaryPeer::EXPERTSP);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKEDSP);
            $criteria->addSelectColumn(GlossaryPeer::PORTUGUESEDEF);
            $criteria->addSelectColumn(GlossaryPeer::ENTEREDPR);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTEREDPR);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIEDPR);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIEDPR);
            $criteria->addSelectColumn(GlossaryPeer::EXPERTPR);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKEDPR);
            $criteria->addSelectColumn(GlossaryPeer::RUSSIANDEF);
            $criteria->addSelectColumn(GlossaryPeer::ENTEREDRUS);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTEREDRUS);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIEDRUS);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIEDRUS);
            $criteria->addSelectColumn(GlossaryPeer::EXPERTRUS);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKEDRUS);
            $criteria->addSelectColumn(GlossaryPeer::CYRILLICDEF);
            $criteria->addSelectColumn(GlossaryPeer::ENTEREDCYR);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTEREDCYR);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIEDCYR);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIEDCYR);
            $criteria->addSelectColumn(GlossaryPeer::EXPERTCYR);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKEDCYR);
            $criteria->addSelectColumn(GlossaryPeer::CHINESEDEF);
            $criteria->addSelectColumn(GlossaryPeer::ENTEREDCHI);
            $criteria->addSelectColumn(GlossaryPeer::DATEENTEREDCHI);
            $criteria->addSelectColumn(GlossaryPeer::MODIFIEDCHI);
            $criteria->addSelectColumn(GlossaryPeer::DATEMODIFIEDCHI);
            $criteria->addSelectColumn(GlossaryPeer::EXPERTCHI);
            $criteria->addSelectColumn(GlossaryPeer::DATECHECKEDCHI);
            $criteria->addSelectColumn(GlossaryPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.TermEnglish');
            $criteria->addSelectColumn($alias . '.TermEnglishScnd');
            $criteria->addSelectColumn($alias . '.TermEngishThird');
            $criteria->addSelectColumn($alias . '.Abbreviation');
            $criteria->addSelectColumn($alias . '.TermFrench');
            $criteria->addSelectColumn($alias . '.TermSpanish');
            $criteria->addSelectColumn($alias . '.TermPortuguese');
            $criteria->addSelectColumn($alias . '.TermRussian');
            $criteria->addSelectColumn($alias . '.TermCyrillic');
            $criteria->addSelectColumn($alias . '.TermCyrillic_u');
            $criteria->addSelectColumn($alias . '.TermChinese');
            $criteria->addSelectColumn($alias . '.TermChinese_u');
            $criteria->addSelectColumn($alias . '.See1');
            $criteria->addSelectColumn($alias . '.See2');
            $criteria->addSelectColumn($alias . '.See3');
            $criteria->addSelectColumn($alias . '.Picname');
            $criteria->addSelectColumn($alias . '.Genetics');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
            $criteria->addSelectColumn($alias . '.English');
            $criteria->addSelectColumn($alias . '.Grammar');
            $criteria->addSelectColumn($alias . '.Gender');
            $criteria->addSelectColumn($alias . '.FrenchDef');
            $criteria->addSelectColumn($alias . '.EnteredFR');
            $criteria->addSelectColumn($alias . '.DateEnteredFR');
            $criteria->addSelectColumn($alias . '.ModifiedFR');
            $criteria->addSelectColumn($alias . '.DateModifiedFR');
            $criteria->addSelectColumn($alias . '.ExpertFR');
            $criteria->addSelectColumn($alias . '.DateCheckedFR');
            $criteria->addSelectColumn($alias . '.SpanishDef');
            $criteria->addSelectColumn($alias . '.EnteredSP');
            $criteria->addSelectColumn($alias . '.DateEnteredSP');
            $criteria->addSelectColumn($alias . '.ModifiedSP');
            $criteria->addSelectColumn($alias . '.DateModifiedSP');
            $criteria->addSelectColumn($alias . '.ExpertSP');
            $criteria->addSelectColumn($alias . '.DateCheckedSP');
            $criteria->addSelectColumn($alias . '.PortugueseDef');
            $criteria->addSelectColumn($alias . '.EnteredPR');
            $criteria->addSelectColumn($alias . '.DateEnteredPR');
            $criteria->addSelectColumn($alias . '.ModifiedPR');
            $criteria->addSelectColumn($alias . '.DateModifiedPR');
            $criteria->addSelectColumn($alias . '.ExpertPR');
            $criteria->addSelectColumn($alias . '.DateCheckedPR');
            $criteria->addSelectColumn($alias . '.RussianDef');
            $criteria->addSelectColumn($alias . '.EnteredRus');
            $criteria->addSelectColumn($alias . '.DateEnteredRus');
            $criteria->addSelectColumn($alias . '.ModifiedRus');
            $criteria->addSelectColumn($alias . '.DateModifiedRus');
            $criteria->addSelectColumn($alias . '.ExpertRus');
            $criteria->addSelectColumn($alias . '.DateCheckedRus');
            $criteria->addSelectColumn($alias . '.CyrillicDef');
            $criteria->addSelectColumn($alias . '.EnteredCyr');
            $criteria->addSelectColumn($alias . '.DateEnteredCyr');
            $criteria->addSelectColumn($alias . '.ModifiedCyr');
            $criteria->addSelectColumn($alias . '.DateModifiedCyr');
            $criteria->addSelectColumn($alias . '.ExpertCyr');
            $criteria->addSelectColumn($alias . '.DateCheckedCyr');
            $criteria->addSelectColumn($alias . '.ChineseDef');
            $criteria->addSelectColumn($alias . '.EnteredChi');
            $criteria->addSelectColumn($alias . '.DateEnteredChi');
            $criteria->addSelectColumn($alias . '.ModifiedChi');
            $criteria->addSelectColumn($alias . '.DateModifiedChi');
            $criteria->addSelectColumn($alias . '.ExpertChi');
            $criteria->addSelectColumn($alias . '.DateCheckedChi');
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
        $criteria->setPrimaryTableName(GlossaryPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GlossaryPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GlossaryPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Glossary
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GlossaryPeer::doSelect($critcopy, $con);
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
        return GlossaryPeer::populateObjects(GlossaryPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GlossaryPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GlossaryPeer::DATABASE_NAME);

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
     * @param Glossary $obj A Glossary object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            GlossaryPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Glossary object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Glossary) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Glossary object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GlossaryPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Glossary Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GlossaryPeer::$instances[$key])) {
                return GlossaryPeer::$instances[$key];
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
        foreach (GlossaryPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GlossaryPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to glossary
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
        $cls = GlossaryPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GlossaryPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GlossaryPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GlossaryPeer::addInstanceToPool($obj, $key);
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
     * @return array (Glossary object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GlossaryPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GlossaryPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GlossaryPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GlossaryPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GlossaryPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GlossaryPeer::DATABASE_NAME)->getTable(GlossaryPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGlossaryPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGlossaryPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GlossaryTableMap());
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
        return GlossaryPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Glossary or Criteria object.
     *
     * @param      mixed $values Criteria or Glossary object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Glossary object
        }

        if ($criteria->containsKey(GlossaryPeer::AUTOCTR) && $criteria->keyContainsValue(GlossaryPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GlossaryPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GlossaryPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Glossary or Criteria object.
     *
     * @param      mixed $values Criteria or Glossary object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GlossaryPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GlossaryPeer::AUTOCTR);
            $value = $criteria->remove(GlossaryPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(GlossaryPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GlossaryPeer::TABLE_NAME);
            }

        } else { // $values is Glossary object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GlossaryPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the glossary table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GlossaryPeer::TABLE_NAME, $con, GlossaryPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GlossaryPeer::clearInstancePool();
            GlossaryPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Glossary or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Glossary object or primary key or array of primary keys
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
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GlossaryPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Glossary) { // it's a model object
            // invalidate the cache for this single object
            GlossaryPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GlossaryPeer::DATABASE_NAME);
            $criteria->add(GlossaryPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GlossaryPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GlossaryPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GlossaryPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Glossary object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Glossary $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GlossaryPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GlossaryPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GlossaryPeer::DATABASE_NAME, GlossaryPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Glossary
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GlossaryPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GlossaryPeer::DATABASE_NAME);
        $criteria->add(GlossaryPeer::AUTOCTR, $pk);

        $v = GlossaryPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Glossary[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GlossaryPeer::DATABASE_NAME);
            $criteria->add(GlossaryPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = GlossaryPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGlossaryPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGlossaryPeer::buildTableMap();

