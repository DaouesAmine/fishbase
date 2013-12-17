<?php


/**
 * Base class that represents a query for the 'label_index' table.
 *
 *
 *
 * @method LabelIndexQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method LabelIndexQuery orderByEng($order = Criteria::ASC) Order by the eng column
 * @method LabelIndexQuery orderByUsedWhere($order = Criteria::ASC) Order by the used_where column
 * @method LabelIndexQuery orderByPage($order = Criteria::ASC) Order by the page column
 * @method LabelIndexQuery orderByUpdatestatus($order = Criteria::ASC) Order by the UpdateStatus column
 * @method LabelIndexQuery orderByUpdatedescription($order = Criteria::ASC) Order by the UpdateDescription column
 * @method LabelIndexQuery orderByUpdateimplemented($order = Criteria::ASC) Order by the UpdateImplemented column
 * @method LabelIndexQuery orderByUsefb($order = Criteria::ASC) Order by the UseFB column
 * @method LabelIndexQuery orderByUseslb($order = Criteria::ASC) Order by the UseSLB column
 * @method LabelIndexQuery orderByTermBanglaOriginal($order = Criteria::ASC) Order by the term_bangla_original column
 * @method LabelIndexQuery orderByTermBangla($order = Criteria::ASC) Order by the term_bangla column
 * @method LabelIndexQuery orderByTermEnglish($order = Criteria::ASC) Order by the term_english column
 * @method LabelIndexQuery orderByTermThaiOriginal($order = Criteria::ASC) Order by the term_thai_original column
 * @method LabelIndexQuery orderByTermThai($order = Criteria::ASC) Order by the term_thai column
 * @method LabelIndexQuery orderByTermGerman($order = Criteria::ASC) Order by the term_german column
 * @method LabelIndexQuery orderByTermPortuguese($order = Criteria::ASC) Order by the term_portuguese column
 * @method LabelIndexQuery orderByTermPortuguesePo($order = Criteria::ASC) Order by the term_portuguese_po column
 * @method LabelIndexQuery orderByTermChinese($order = Criteria::ASC) Order by the term_chinese column
 * @method LabelIndexQuery orderByTermChineseU($order = Criteria::ASC) Order by the term_chinese_u column
 * @method LabelIndexQuery orderByTermScchinese($order = Criteria::ASC) Order by the term_scchinese column
 * @method LabelIndexQuery orderByTermScchineseU($order = Criteria::ASC) Order by the term_scchinese_u column
 * @method LabelIndexQuery orderByTermFarsiOriginal($order = Criteria::ASC) Order by the term_farsi_original column
 * @method LabelIndexQuery orderByTermFarsi($order = Criteria::ASC) Order by the term_farsi column
 * @method LabelIndexQuery orderByTermRussianOriginal($order = Criteria::ASC) Order by the term_russian_original column
 * @method LabelIndexQuery orderByTermRussian($order = Criteria::ASC) Order by the term_russian column
 * @method LabelIndexQuery orderByTermFrench($order = Criteria::ASC) Order by the term_french column
 * @method LabelIndexQuery orderByTermDutch($order = Criteria::ASC) Order by the term_dutch column
 * @method LabelIndexQuery orderByTermBahasa($order = Criteria::ASC) Order by the term_bahasa column
 * @method LabelIndexQuery orderByTermSwedish($order = Criteria::ASC) Order by the term_swedish column
 * @method LabelIndexQuery orderByTermGreekOriginal($order = Criteria::ASC) Order by the term_greek_original column
 * @method LabelIndexQuery orderByTermGreek($order = Criteria::ASC) Order by the term_greek column
 * @method LabelIndexQuery orderByTermSpanish($order = Criteria::ASC) Order by the term_spanish column
 * @method LabelIndexQuery orderByTermItalian($order = Criteria::ASC) Order by the term_italian column
 * @method LabelIndexQuery orderByTermVietnameseOriginal($order = Criteria::ASC) Order by the term_vietnamese_original column
 * @method LabelIndexQuery orderByTermVietnamese($order = Criteria::ASC) Order by the term_vietnamese column
 * @method LabelIndexQuery orderByTermLaosOriginal($order = Criteria::ASC) Order by the term_laos_original column
 * @method LabelIndexQuery orderByTermLaos($order = Criteria::ASC) Order by the term_laos column
 * @method LabelIndexQuery orderByTermHindiOriginal($order = Criteria::ASC) Order by the term_hindi_original column
 * @method LabelIndexQuery orderByTermHindi($order = Criteria::ASC) Order by the term_hindi column
 * @method LabelIndexQuery orderByEnglishnew($order = Criteria::ASC) Order by the EnglishNew column
 * @method LabelIndexQuery orderByTermJapaneseOriginal($order = Criteria::ASC) Order by the term_japanese_original column
 * @method LabelIndexQuery orderByTermJapanese($order = Criteria::ASC) Order by the term_japanese column
 * @method LabelIndexQuery orderByTermArabicOriginal($order = Criteria::ASC) Order by the term_arabic_original column
 * @method LabelIndexQuery orderByTermArabic($order = Criteria::ASC) Order by the term_arabic column
 * @method LabelIndexQuery orderByGlossaryTerm($order = Criteria::ASC) Order by the glossary_term column
 * @method LabelIndexQuery orderByEntered($order = Criteria::ASC) Order by the entered column
 * @method LabelIndexQuery orderByModified($order = Criteria::ASC) Order by the modified column
 * @method LabelIndexQuery orderByChecked($order = Criteria::ASC) Order by the checked column
 * @method LabelIndexQuery orderByDateentered($order = Criteria::ASC) Order by the dateentered column
 * @method LabelIndexQuery orderByDatemodified($order = Criteria::ASC) Order by the datemodified column
 * @method LabelIndexQuery orderByDatechecked($order = Criteria::ASC) Order by the datechecked column
 * @method LabelIndexQuery orderByRemark($order = Criteria::ASC) Order by the remark column
 * @method LabelIndexQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LabelIndexQuery groupByAutoctr() Group by the autoctr column
 * @method LabelIndexQuery groupByEng() Group by the eng column
 * @method LabelIndexQuery groupByUsedWhere() Group by the used_where column
 * @method LabelIndexQuery groupByPage() Group by the page column
 * @method LabelIndexQuery groupByUpdatestatus() Group by the UpdateStatus column
 * @method LabelIndexQuery groupByUpdatedescription() Group by the UpdateDescription column
 * @method LabelIndexQuery groupByUpdateimplemented() Group by the UpdateImplemented column
 * @method LabelIndexQuery groupByUsefb() Group by the UseFB column
 * @method LabelIndexQuery groupByUseslb() Group by the UseSLB column
 * @method LabelIndexQuery groupByTermBanglaOriginal() Group by the term_bangla_original column
 * @method LabelIndexQuery groupByTermBangla() Group by the term_bangla column
 * @method LabelIndexQuery groupByTermEnglish() Group by the term_english column
 * @method LabelIndexQuery groupByTermThaiOriginal() Group by the term_thai_original column
 * @method LabelIndexQuery groupByTermThai() Group by the term_thai column
 * @method LabelIndexQuery groupByTermGerman() Group by the term_german column
 * @method LabelIndexQuery groupByTermPortuguese() Group by the term_portuguese column
 * @method LabelIndexQuery groupByTermPortuguesePo() Group by the term_portuguese_po column
 * @method LabelIndexQuery groupByTermChinese() Group by the term_chinese column
 * @method LabelIndexQuery groupByTermChineseU() Group by the term_chinese_u column
 * @method LabelIndexQuery groupByTermScchinese() Group by the term_scchinese column
 * @method LabelIndexQuery groupByTermScchineseU() Group by the term_scchinese_u column
 * @method LabelIndexQuery groupByTermFarsiOriginal() Group by the term_farsi_original column
 * @method LabelIndexQuery groupByTermFarsi() Group by the term_farsi column
 * @method LabelIndexQuery groupByTermRussianOriginal() Group by the term_russian_original column
 * @method LabelIndexQuery groupByTermRussian() Group by the term_russian column
 * @method LabelIndexQuery groupByTermFrench() Group by the term_french column
 * @method LabelIndexQuery groupByTermDutch() Group by the term_dutch column
 * @method LabelIndexQuery groupByTermBahasa() Group by the term_bahasa column
 * @method LabelIndexQuery groupByTermSwedish() Group by the term_swedish column
 * @method LabelIndexQuery groupByTermGreekOriginal() Group by the term_greek_original column
 * @method LabelIndexQuery groupByTermGreek() Group by the term_greek column
 * @method LabelIndexQuery groupByTermSpanish() Group by the term_spanish column
 * @method LabelIndexQuery groupByTermItalian() Group by the term_italian column
 * @method LabelIndexQuery groupByTermVietnameseOriginal() Group by the term_vietnamese_original column
 * @method LabelIndexQuery groupByTermVietnamese() Group by the term_vietnamese column
 * @method LabelIndexQuery groupByTermLaosOriginal() Group by the term_laos_original column
 * @method LabelIndexQuery groupByTermLaos() Group by the term_laos column
 * @method LabelIndexQuery groupByTermHindiOriginal() Group by the term_hindi_original column
 * @method LabelIndexQuery groupByTermHindi() Group by the term_hindi column
 * @method LabelIndexQuery groupByEnglishnew() Group by the EnglishNew column
 * @method LabelIndexQuery groupByTermJapaneseOriginal() Group by the term_japanese_original column
 * @method LabelIndexQuery groupByTermJapanese() Group by the term_japanese column
 * @method LabelIndexQuery groupByTermArabicOriginal() Group by the term_arabic_original column
 * @method LabelIndexQuery groupByTermArabic() Group by the term_arabic column
 * @method LabelIndexQuery groupByGlossaryTerm() Group by the glossary_term column
 * @method LabelIndexQuery groupByEntered() Group by the entered column
 * @method LabelIndexQuery groupByModified() Group by the modified column
 * @method LabelIndexQuery groupByChecked() Group by the checked column
 * @method LabelIndexQuery groupByDateentered() Group by the dateentered column
 * @method LabelIndexQuery groupByDatemodified() Group by the datemodified column
 * @method LabelIndexQuery groupByDatechecked() Group by the datechecked column
 * @method LabelIndexQuery groupByRemark() Group by the remark column
 * @method LabelIndexQuery groupByTs() Group by the TS column
 *
 * @method LabelIndexQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LabelIndexQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LabelIndexQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LabelIndex findOne(PropelPDO $con = null) Return the first LabelIndex matching the query
 * @method LabelIndex findOneOrCreate(PropelPDO $con = null) Return the first LabelIndex matching the query, or a new LabelIndex object populated from the query conditions when no match is found
 *
 * @method LabelIndex findOneByEng(string $eng) Return the first LabelIndex filtered by the eng column
 * @method LabelIndex findOneByUsedWhere(string $used_where) Return the first LabelIndex filtered by the used_where column
 * @method LabelIndex findOneByPage(string $page) Return the first LabelIndex filtered by the page column
 * @method LabelIndex findOneByUpdatestatus(int $UpdateStatus) Return the first LabelIndex filtered by the UpdateStatus column
 * @method LabelIndex findOneByUpdatedescription(string $UpdateDescription) Return the first LabelIndex filtered by the UpdateDescription column
 * @method LabelIndex findOneByUpdateimplemented(string $UpdateImplemented) Return the first LabelIndex filtered by the UpdateImplemented column
 * @method LabelIndex findOneByUsefb(int $UseFB) Return the first LabelIndex filtered by the UseFB column
 * @method LabelIndex findOneByUseslb(int $UseSLB) Return the first LabelIndex filtered by the UseSLB column
 * @method LabelIndex findOneByTermBanglaOriginal(string $term_bangla_original) Return the first LabelIndex filtered by the term_bangla_original column
 * @method LabelIndex findOneByTermBangla(string $term_bangla) Return the first LabelIndex filtered by the term_bangla column
 * @method LabelIndex findOneByTermEnglish(string $term_english) Return the first LabelIndex filtered by the term_english column
 * @method LabelIndex findOneByTermThaiOriginal(string $term_thai_original) Return the first LabelIndex filtered by the term_thai_original column
 * @method LabelIndex findOneByTermThai(string $term_thai) Return the first LabelIndex filtered by the term_thai column
 * @method LabelIndex findOneByTermGerman(string $term_german) Return the first LabelIndex filtered by the term_german column
 * @method LabelIndex findOneByTermPortuguese(string $term_portuguese) Return the first LabelIndex filtered by the term_portuguese column
 * @method LabelIndex findOneByTermPortuguesePo(string $term_portuguese_po) Return the first LabelIndex filtered by the term_portuguese_po column
 * @method LabelIndex findOneByTermChinese(string $term_chinese) Return the first LabelIndex filtered by the term_chinese column
 * @method LabelIndex findOneByTermChineseU(string $term_chinese_u) Return the first LabelIndex filtered by the term_chinese_u column
 * @method LabelIndex findOneByTermScchinese(string $term_scchinese) Return the first LabelIndex filtered by the term_scchinese column
 * @method LabelIndex findOneByTermScchineseU(string $term_scchinese_u) Return the first LabelIndex filtered by the term_scchinese_u column
 * @method LabelIndex findOneByTermFarsiOriginal(string $term_farsi_original) Return the first LabelIndex filtered by the term_farsi_original column
 * @method LabelIndex findOneByTermFarsi(string $term_farsi) Return the first LabelIndex filtered by the term_farsi column
 * @method LabelIndex findOneByTermRussianOriginal(string $term_russian_original) Return the first LabelIndex filtered by the term_russian_original column
 * @method LabelIndex findOneByTermRussian(string $term_russian) Return the first LabelIndex filtered by the term_russian column
 * @method LabelIndex findOneByTermFrench(string $term_french) Return the first LabelIndex filtered by the term_french column
 * @method LabelIndex findOneByTermDutch(string $term_dutch) Return the first LabelIndex filtered by the term_dutch column
 * @method LabelIndex findOneByTermBahasa(string $term_bahasa) Return the first LabelIndex filtered by the term_bahasa column
 * @method LabelIndex findOneByTermSwedish(string $term_swedish) Return the first LabelIndex filtered by the term_swedish column
 * @method LabelIndex findOneByTermGreekOriginal(string $term_greek_original) Return the first LabelIndex filtered by the term_greek_original column
 * @method LabelIndex findOneByTermGreek(string $term_greek) Return the first LabelIndex filtered by the term_greek column
 * @method LabelIndex findOneByTermSpanish(string $term_spanish) Return the first LabelIndex filtered by the term_spanish column
 * @method LabelIndex findOneByTermItalian(string $term_italian) Return the first LabelIndex filtered by the term_italian column
 * @method LabelIndex findOneByTermVietnameseOriginal(string $term_vietnamese_original) Return the first LabelIndex filtered by the term_vietnamese_original column
 * @method LabelIndex findOneByTermVietnamese(string $term_vietnamese) Return the first LabelIndex filtered by the term_vietnamese column
 * @method LabelIndex findOneByTermLaosOriginal(string $term_laos_original) Return the first LabelIndex filtered by the term_laos_original column
 * @method LabelIndex findOneByTermLaos(string $term_laos) Return the first LabelIndex filtered by the term_laos column
 * @method LabelIndex findOneByTermHindiOriginal(string $term_hindi_original) Return the first LabelIndex filtered by the term_hindi_original column
 * @method LabelIndex findOneByTermHindi(string $term_hindi) Return the first LabelIndex filtered by the term_hindi column
 * @method LabelIndex findOneByEnglishnew(string $EnglishNew) Return the first LabelIndex filtered by the EnglishNew column
 * @method LabelIndex findOneByTermJapaneseOriginal(string $term_japanese_original) Return the first LabelIndex filtered by the term_japanese_original column
 * @method LabelIndex findOneByTermJapanese(string $term_japanese) Return the first LabelIndex filtered by the term_japanese column
 * @method LabelIndex findOneByTermArabicOriginal(string $term_arabic_original) Return the first LabelIndex filtered by the term_arabic_original column
 * @method LabelIndex findOneByTermArabic(string $term_arabic) Return the first LabelIndex filtered by the term_arabic column
 * @method LabelIndex findOneByGlossaryTerm(string $glossary_term) Return the first LabelIndex filtered by the glossary_term column
 * @method LabelIndex findOneByEntered(int $entered) Return the first LabelIndex filtered by the entered column
 * @method LabelIndex findOneByModified(int $modified) Return the first LabelIndex filtered by the modified column
 * @method LabelIndex findOneByChecked(int $checked) Return the first LabelIndex filtered by the checked column
 * @method LabelIndex findOneByDateentered(string $dateentered) Return the first LabelIndex filtered by the dateentered column
 * @method LabelIndex findOneByDatemodified(string $datemodified) Return the first LabelIndex filtered by the datemodified column
 * @method LabelIndex findOneByDatechecked(string $datechecked) Return the first LabelIndex filtered by the datechecked column
 * @method LabelIndex findOneByRemark(string $remark) Return the first LabelIndex filtered by the remark column
 * @method LabelIndex findOneByTs(string $TS) Return the first LabelIndex filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return LabelIndex objects filtered by the autoctr column
 * @method array findByEng(string $eng) Return LabelIndex objects filtered by the eng column
 * @method array findByUsedWhere(string $used_where) Return LabelIndex objects filtered by the used_where column
 * @method array findByPage(string $page) Return LabelIndex objects filtered by the page column
 * @method array findByUpdatestatus(int $UpdateStatus) Return LabelIndex objects filtered by the UpdateStatus column
 * @method array findByUpdatedescription(string $UpdateDescription) Return LabelIndex objects filtered by the UpdateDescription column
 * @method array findByUpdateimplemented(string $UpdateImplemented) Return LabelIndex objects filtered by the UpdateImplemented column
 * @method array findByUsefb(int $UseFB) Return LabelIndex objects filtered by the UseFB column
 * @method array findByUseslb(int $UseSLB) Return LabelIndex objects filtered by the UseSLB column
 * @method array findByTermBanglaOriginal(string $term_bangla_original) Return LabelIndex objects filtered by the term_bangla_original column
 * @method array findByTermBangla(string $term_bangla) Return LabelIndex objects filtered by the term_bangla column
 * @method array findByTermEnglish(string $term_english) Return LabelIndex objects filtered by the term_english column
 * @method array findByTermThaiOriginal(string $term_thai_original) Return LabelIndex objects filtered by the term_thai_original column
 * @method array findByTermThai(string $term_thai) Return LabelIndex objects filtered by the term_thai column
 * @method array findByTermGerman(string $term_german) Return LabelIndex objects filtered by the term_german column
 * @method array findByTermPortuguese(string $term_portuguese) Return LabelIndex objects filtered by the term_portuguese column
 * @method array findByTermPortuguesePo(string $term_portuguese_po) Return LabelIndex objects filtered by the term_portuguese_po column
 * @method array findByTermChinese(string $term_chinese) Return LabelIndex objects filtered by the term_chinese column
 * @method array findByTermChineseU(string $term_chinese_u) Return LabelIndex objects filtered by the term_chinese_u column
 * @method array findByTermScchinese(string $term_scchinese) Return LabelIndex objects filtered by the term_scchinese column
 * @method array findByTermScchineseU(string $term_scchinese_u) Return LabelIndex objects filtered by the term_scchinese_u column
 * @method array findByTermFarsiOriginal(string $term_farsi_original) Return LabelIndex objects filtered by the term_farsi_original column
 * @method array findByTermFarsi(string $term_farsi) Return LabelIndex objects filtered by the term_farsi column
 * @method array findByTermRussianOriginal(string $term_russian_original) Return LabelIndex objects filtered by the term_russian_original column
 * @method array findByTermRussian(string $term_russian) Return LabelIndex objects filtered by the term_russian column
 * @method array findByTermFrench(string $term_french) Return LabelIndex objects filtered by the term_french column
 * @method array findByTermDutch(string $term_dutch) Return LabelIndex objects filtered by the term_dutch column
 * @method array findByTermBahasa(string $term_bahasa) Return LabelIndex objects filtered by the term_bahasa column
 * @method array findByTermSwedish(string $term_swedish) Return LabelIndex objects filtered by the term_swedish column
 * @method array findByTermGreekOriginal(string $term_greek_original) Return LabelIndex objects filtered by the term_greek_original column
 * @method array findByTermGreek(string $term_greek) Return LabelIndex objects filtered by the term_greek column
 * @method array findByTermSpanish(string $term_spanish) Return LabelIndex objects filtered by the term_spanish column
 * @method array findByTermItalian(string $term_italian) Return LabelIndex objects filtered by the term_italian column
 * @method array findByTermVietnameseOriginal(string $term_vietnamese_original) Return LabelIndex objects filtered by the term_vietnamese_original column
 * @method array findByTermVietnamese(string $term_vietnamese) Return LabelIndex objects filtered by the term_vietnamese column
 * @method array findByTermLaosOriginal(string $term_laos_original) Return LabelIndex objects filtered by the term_laos_original column
 * @method array findByTermLaos(string $term_laos) Return LabelIndex objects filtered by the term_laos column
 * @method array findByTermHindiOriginal(string $term_hindi_original) Return LabelIndex objects filtered by the term_hindi_original column
 * @method array findByTermHindi(string $term_hindi) Return LabelIndex objects filtered by the term_hindi column
 * @method array findByEnglishnew(string $EnglishNew) Return LabelIndex objects filtered by the EnglishNew column
 * @method array findByTermJapaneseOriginal(string $term_japanese_original) Return LabelIndex objects filtered by the term_japanese_original column
 * @method array findByTermJapanese(string $term_japanese) Return LabelIndex objects filtered by the term_japanese column
 * @method array findByTermArabicOriginal(string $term_arabic_original) Return LabelIndex objects filtered by the term_arabic_original column
 * @method array findByTermArabic(string $term_arabic) Return LabelIndex objects filtered by the term_arabic column
 * @method array findByGlossaryTerm(string $glossary_term) Return LabelIndex objects filtered by the glossary_term column
 * @method array findByEntered(int $entered) Return LabelIndex objects filtered by the entered column
 * @method array findByModified(int $modified) Return LabelIndex objects filtered by the modified column
 * @method array findByChecked(int $checked) Return LabelIndex objects filtered by the checked column
 * @method array findByDateentered(string $dateentered) Return LabelIndex objects filtered by the dateentered column
 * @method array findByDatemodified(string $datemodified) Return LabelIndex objects filtered by the datemodified column
 * @method array findByDatechecked(string $datechecked) Return LabelIndex objects filtered by the datechecked column
 * @method array findByRemark(string $remark) Return LabelIndex objects filtered by the remark column
 * @method array findByTs(string $TS) Return LabelIndex objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLabelIndexQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLabelIndexQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'fbapp';
        }
        if (null === $modelName) {
            $modelName = 'LabelIndex';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LabelIndexQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LabelIndexQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LabelIndexQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LabelIndexQuery) {
            return $criteria;
        }
        $query = new LabelIndexQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   LabelIndex|LabelIndex[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LabelIndexPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LabelIndexPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 LabelIndex A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 LabelIndex A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `eng`, `used_where`, `page`, `UpdateStatus`, `UpdateDescription`, `UpdateImplemented`, `UseFB`, `UseSLB`, `term_bangla_original`, `term_bangla`, `term_english`, `term_thai_original`, `term_thai`, `term_german`, `term_portuguese`, `term_portuguese_po`, `term_chinese`, `term_chinese_u`, `term_scchinese`, `term_scchinese_u`, `term_farsi_original`, `term_farsi`, `term_russian_original`, `term_russian`, `term_french`, `term_dutch`, `term_bahasa`, `term_swedish`, `term_greek_original`, `term_greek`, `term_spanish`, `term_italian`, `term_vietnamese_original`, `term_vietnamese`, `term_laos_original`, `term_laos`, `term_hindi_original`, `term_hindi`, `EnglishNew`, `term_japanese_original`, `term_japanese`, `term_arabic_original`, `term_arabic`, `glossary_term`, `entered`, `modified`, `checked`, `dateentered`, `datemodified`, `datechecked`, `remark`, `TS` FROM `label_index` WHERE `autoctr` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new LabelIndex();
            $obj->hydrate($row);
            LabelIndexPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return LabelIndex|LabelIndex[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|LabelIndex[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LabelIndexPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LabelIndexPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(LabelIndexPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(LabelIndexPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the eng column
     *
     * Example usage:
     * <code>
     * $query->filterByEng('fooValue');   // WHERE eng = 'fooValue'
     * $query->filterByEng('%fooValue%'); // WHERE eng LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eng The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByEng($eng = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eng)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eng)) {
                $eng = str_replace('*', '%', $eng);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::ENG, $eng, $comparison);
    }

    /**
     * Filter the query on the used_where column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedWhere('fooValue');   // WHERE used_where = 'fooValue'
     * $query->filterByUsedWhere('%fooValue%'); // WHERE used_where LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedWhere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByUsedWhere($usedWhere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedWhere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedWhere)) {
                $usedWhere = str_replace('*', '%', $usedWhere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::USED_WHERE, $usedWhere, $comparison);
    }

    /**
     * Filter the query on the page column
     *
     * Example usage:
     * <code>
     * $query->filterByPage('fooValue');   // WHERE page = 'fooValue'
     * $query->filterByPage('%fooValue%'); // WHERE page LIKE '%fooValue%'
     * </code>
     *
     * @param     string $page The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByPage($page = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($page)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $page)) {
                $page = str_replace('*', '%', $page);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::PAGE, $page, $comparison);
    }

    /**
     * Filter the query on the UpdateStatus column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatestatus(1234); // WHERE UpdateStatus = 1234
     * $query->filterByUpdatestatus(array(12, 34)); // WHERE UpdateStatus IN (12, 34)
     * $query->filterByUpdatestatus(array('min' => 12)); // WHERE UpdateStatus >= 12
     * $query->filterByUpdatestatus(array('max' => 12)); // WHERE UpdateStatus <= 12
     * </code>
     *
     * @param     mixed $updatestatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByUpdatestatus($updatestatus = null, $comparison = null)
    {
        if (is_array($updatestatus)) {
            $useMinMax = false;
            if (isset($updatestatus['min'])) {
                $this->addUsingAlias(LabelIndexPeer::UPDATESTATUS, $updatestatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatestatus['max'])) {
                $this->addUsingAlias(LabelIndexPeer::UPDATESTATUS, $updatestatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::UPDATESTATUS, $updatestatus, $comparison);
    }

    /**
     * Filter the query on the UpdateDescription column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedescription('fooValue');   // WHERE UpdateDescription = 'fooValue'
     * $query->filterByUpdatedescription('%fooValue%'); // WHERE UpdateDescription LIKE '%fooValue%'
     * </code>
     *
     * @param     string $updatedescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByUpdatedescription($updatedescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($updatedescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $updatedescription)) {
                $updatedescription = str_replace('*', '%', $updatedescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::UPDATEDESCRIPTION, $updatedescription, $comparison);
    }

    /**
     * Filter the query on the UpdateImplemented column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdateimplemented('2011-03-14'); // WHERE UpdateImplemented = '2011-03-14'
     * $query->filterByUpdateimplemented('now'); // WHERE UpdateImplemented = '2011-03-14'
     * $query->filterByUpdateimplemented(array('max' => 'yesterday')); // WHERE UpdateImplemented < '2011-03-13'
     * </code>
     *
     * @param     mixed $updateimplemented The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByUpdateimplemented($updateimplemented = null, $comparison = null)
    {
        if (is_array($updateimplemented)) {
            $useMinMax = false;
            if (isset($updateimplemented['min'])) {
                $this->addUsingAlias(LabelIndexPeer::UPDATEIMPLEMENTED, $updateimplemented['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updateimplemented['max'])) {
                $this->addUsingAlias(LabelIndexPeer::UPDATEIMPLEMENTED, $updateimplemented['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::UPDATEIMPLEMENTED, $updateimplemented, $comparison);
    }

    /**
     * Filter the query on the UseFB column
     *
     * Example usage:
     * <code>
     * $query->filterByUsefb(1234); // WHERE UseFB = 1234
     * $query->filterByUsefb(array(12, 34)); // WHERE UseFB IN (12, 34)
     * $query->filterByUsefb(array('min' => 12)); // WHERE UseFB >= 12
     * $query->filterByUsefb(array('max' => 12)); // WHERE UseFB <= 12
     * </code>
     *
     * @param     mixed $usefb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByUsefb($usefb = null, $comparison = null)
    {
        if (is_array($usefb)) {
            $useMinMax = false;
            if (isset($usefb['min'])) {
                $this->addUsingAlias(LabelIndexPeer::USEFB, $usefb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usefb['max'])) {
                $this->addUsingAlias(LabelIndexPeer::USEFB, $usefb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::USEFB, $usefb, $comparison);
    }

    /**
     * Filter the query on the UseSLB column
     *
     * Example usage:
     * <code>
     * $query->filterByUseslb(1234); // WHERE UseSLB = 1234
     * $query->filterByUseslb(array(12, 34)); // WHERE UseSLB IN (12, 34)
     * $query->filterByUseslb(array('min' => 12)); // WHERE UseSLB >= 12
     * $query->filterByUseslb(array('max' => 12)); // WHERE UseSLB <= 12
     * </code>
     *
     * @param     mixed $useslb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByUseslb($useslb = null, $comparison = null)
    {
        if (is_array($useslb)) {
            $useMinMax = false;
            if (isset($useslb['min'])) {
                $this->addUsingAlias(LabelIndexPeer::USESLB, $useslb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($useslb['max'])) {
                $this->addUsingAlias(LabelIndexPeer::USESLB, $useslb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::USESLB, $useslb, $comparison);
    }

    /**
     * Filter the query on the term_bangla_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermBanglaOriginal('fooValue');   // WHERE term_bangla_original = 'fooValue'
     * $query->filterByTermBanglaOriginal('%fooValue%'); // WHERE term_bangla_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termBanglaOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermBanglaOriginal($termBanglaOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termBanglaOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termBanglaOriginal)) {
                $termBanglaOriginal = str_replace('*', '%', $termBanglaOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_BANGLA_ORIGINAL, $termBanglaOriginal, $comparison);
    }

    /**
     * Filter the query on the term_bangla column
     *
     * Example usage:
     * <code>
     * $query->filterByTermBangla('fooValue');   // WHERE term_bangla = 'fooValue'
     * $query->filterByTermBangla('%fooValue%'); // WHERE term_bangla LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termBangla The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermBangla($termBangla = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termBangla)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termBangla)) {
                $termBangla = str_replace('*', '%', $termBangla);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_BANGLA, $termBangla, $comparison);
    }

    /**
     * Filter the query on the term_english column
     *
     * Example usage:
     * <code>
     * $query->filterByTermEnglish('fooValue');   // WHERE term_english = 'fooValue'
     * $query->filterByTermEnglish('%fooValue%'); // WHERE term_english LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termEnglish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermEnglish($termEnglish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termEnglish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termEnglish)) {
                $termEnglish = str_replace('*', '%', $termEnglish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_ENGLISH, $termEnglish, $comparison);
    }

    /**
     * Filter the query on the term_thai_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermThaiOriginal('fooValue');   // WHERE term_thai_original = 'fooValue'
     * $query->filterByTermThaiOriginal('%fooValue%'); // WHERE term_thai_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termThaiOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermThaiOriginal($termThaiOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termThaiOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termThaiOriginal)) {
                $termThaiOriginal = str_replace('*', '%', $termThaiOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_THAI_ORIGINAL, $termThaiOriginal, $comparison);
    }

    /**
     * Filter the query on the term_thai column
     *
     * Example usage:
     * <code>
     * $query->filterByTermThai('fooValue');   // WHERE term_thai = 'fooValue'
     * $query->filterByTermThai('%fooValue%'); // WHERE term_thai LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termThai The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermThai($termThai = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termThai)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termThai)) {
                $termThai = str_replace('*', '%', $termThai);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_THAI, $termThai, $comparison);
    }

    /**
     * Filter the query on the term_german column
     *
     * Example usage:
     * <code>
     * $query->filterByTermGerman('fooValue');   // WHERE term_german = 'fooValue'
     * $query->filterByTermGerman('%fooValue%'); // WHERE term_german LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termGerman The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermGerman($termGerman = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termGerman)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termGerman)) {
                $termGerman = str_replace('*', '%', $termGerman);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_GERMAN, $termGerman, $comparison);
    }

    /**
     * Filter the query on the term_portuguese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermPortuguese('fooValue');   // WHERE term_portuguese = 'fooValue'
     * $query->filterByTermPortuguese('%fooValue%'); // WHERE term_portuguese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termPortuguese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermPortuguese($termPortuguese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termPortuguese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termPortuguese)) {
                $termPortuguese = str_replace('*', '%', $termPortuguese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_PORTUGUESE, $termPortuguese, $comparison);
    }

    /**
     * Filter the query on the term_portuguese_po column
     *
     * Example usage:
     * <code>
     * $query->filterByTermPortuguesePo('fooValue');   // WHERE term_portuguese_po = 'fooValue'
     * $query->filterByTermPortuguesePo('%fooValue%'); // WHERE term_portuguese_po LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termPortuguesePo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermPortuguesePo($termPortuguesePo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termPortuguesePo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termPortuguesePo)) {
                $termPortuguesePo = str_replace('*', '%', $termPortuguesePo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_PORTUGUESE_PO, $termPortuguesePo, $comparison);
    }

    /**
     * Filter the query on the term_chinese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermChinese('fooValue');   // WHERE term_chinese = 'fooValue'
     * $query->filterByTermChinese('%fooValue%'); // WHERE term_chinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termChinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermChinese($termChinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termChinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termChinese)) {
                $termChinese = str_replace('*', '%', $termChinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_CHINESE, $termChinese, $comparison);
    }

    /**
     * Filter the query on the term_chinese_u column
     *
     * Example usage:
     * <code>
     * $query->filterByTermChineseU('fooValue');   // WHERE term_chinese_u = 'fooValue'
     * $query->filterByTermChineseU('%fooValue%'); // WHERE term_chinese_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termChineseU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermChineseU($termChineseU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termChineseU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termChineseU)) {
                $termChineseU = str_replace('*', '%', $termChineseU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_CHINESE_U, $termChineseU, $comparison);
    }

    /**
     * Filter the query on the term_scchinese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermScchinese('fooValue');   // WHERE term_scchinese = 'fooValue'
     * $query->filterByTermScchinese('%fooValue%'); // WHERE term_scchinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termScchinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermScchinese($termScchinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termScchinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termScchinese)) {
                $termScchinese = str_replace('*', '%', $termScchinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_SCCHINESE, $termScchinese, $comparison);
    }

    /**
     * Filter the query on the term_scchinese_u column
     *
     * Example usage:
     * <code>
     * $query->filterByTermScchineseU('fooValue');   // WHERE term_scchinese_u = 'fooValue'
     * $query->filterByTermScchineseU('%fooValue%'); // WHERE term_scchinese_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termScchineseU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermScchineseU($termScchineseU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termScchineseU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termScchineseU)) {
                $termScchineseU = str_replace('*', '%', $termScchineseU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_SCCHINESE_U, $termScchineseU, $comparison);
    }

    /**
     * Filter the query on the term_farsi_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermFarsiOriginal('fooValue');   // WHERE term_farsi_original = 'fooValue'
     * $query->filterByTermFarsiOriginal('%fooValue%'); // WHERE term_farsi_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termFarsiOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermFarsiOriginal($termFarsiOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termFarsiOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termFarsiOriginal)) {
                $termFarsiOriginal = str_replace('*', '%', $termFarsiOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_FARSI_ORIGINAL, $termFarsiOriginal, $comparison);
    }

    /**
     * Filter the query on the term_farsi column
     *
     * Example usage:
     * <code>
     * $query->filterByTermFarsi('fooValue');   // WHERE term_farsi = 'fooValue'
     * $query->filterByTermFarsi('%fooValue%'); // WHERE term_farsi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termFarsi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermFarsi($termFarsi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termFarsi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termFarsi)) {
                $termFarsi = str_replace('*', '%', $termFarsi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_FARSI, $termFarsi, $comparison);
    }

    /**
     * Filter the query on the term_russian_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermRussianOriginal('fooValue');   // WHERE term_russian_original = 'fooValue'
     * $query->filterByTermRussianOriginal('%fooValue%'); // WHERE term_russian_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termRussianOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermRussianOriginal($termRussianOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termRussianOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termRussianOriginal)) {
                $termRussianOriginal = str_replace('*', '%', $termRussianOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_RUSSIAN_ORIGINAL, $termRussianOriginal, $comparison);
    }

    /**
     * Filter the query on the term_russian column
     *
     * Example usage:
     * <code>
     * $query->filterByTermRussian('fooValue');   // WHERE term_russian = 'fooValue'
     * $query->filterByTermRussian('%fooValue%'); // WHERE term_russian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termRussian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermRussian($termRussian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termRussian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termRussian)) {
                $termRussian = str_replace('*', '%', $termRussian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_RUSSIAN, $termRussian, $comparison);
    }

    /**
     * Filter the query on the term_french column
     *
     * Example usage:
     * <code>
     * $query->filterByTermFrench('fooValue');   // WHERE term_french = 'fooValue'
     * $query->filterByTermFrench('%fooValue%'); // WHERE term_french LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termFrench The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermFrench($termFrench = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termFrench)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termFrench)) {
                $termFrench = str_replace('*', '%', $termFrench);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_FRENCH, $termFrench, $comparison);
    }

    /**
     * Filter the query on the term_dutch column
     *
     * Example usage:
     * <code>
     * $query->filterByTermDutch('fooValue');   // WHERE term_dutch = 'fooValue'
     * $query->filterByTermDutch('%fooValue%'); // WHERE term_dutch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termDutch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermDutch($termDutch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termDutch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termDutch)) {
                $termDutch = str_replace('*', '%', $termDutch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_DUTCH, $termDutch, $comparison);
    }

    /**
     * Filter the query on the term_bahasa column
     *
     * Example usage:
     * <code>
     * $query->filterByTermBahasa('fooValue');   // WHERE term_bahasa = 'fooValue'
     * $query->filterByTermBahasa('%fooValue%'); // WHERE term_bahasa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termBahasa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermBahasa($termBahasa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termBahasa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termBahasa)) {
                $termBahasa = str_replace('*', '%', $termBahasa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_BAHASA, $termBahasa, $comparison);
    }

    /**
     * Filter the query on the term_swedish column
     *
     * Example usage:
     * <code>
     * $query->filterByTermSwedish('fooValue');   // WHERE term_swedish = 'fooValue'
     * $query->filterByTermSwedish('%fooValue%'); // WHERE term_swedish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termSwedish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermSwedish($termSwedish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termSwedish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termSwedish)) {
                $termSwedish = str_replace('*', '%', $termSwedish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_SWEDISH, $termSwedish, $comparison);
    }

    /**
     * Filter the query on the term_greek_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermGreekOriginal('fooValue');   // WHERE term_greek_original = 'fooValue'
     * $query->filterByTermGreekOriginal('%fooValue%'); // WHERE term_greek_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termGreekOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermGreekOriginal($termGreekOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termGreekOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termGreekOriginal)) {
                $termGreekOriginal = str_replace('*', '%', $termGreekOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_GREEK_ORIGINAL, $termGreekOriginal, $comparison);
    }

    /**
     * Filter the query on the term_greek column
     *
     * Example usage:
     * <code>
     * $query->filterByTermGreek('fooValue');   // WHERE term_greek = 'fooValue'
     * $query->filterByTermGreek('%fooValue%'); // WHERE term_greek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termGreek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermGreek($termGreek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termGreek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termGreek)) {
                $termGreek = str_replace('*', '%', $termGreek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_GREEK, $termGreek, $comparison);
    }

    /**
     * Filter the query on the term_spanish column
     *
     * Example usage:
     * <code>
     * $query->filterByTermSpanish('fooValue');   // WHERE term_spanish = 'fooValue'
     * $query->filterByTermSpanish('%fooValue%'); // WHERE term_spanish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termSpanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermSpanish($termSpanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termSpanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termSpanish)) {
                $termSpanish = str_replace('*', '%', $termSpanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_SPANISH, $termSpanish, $comparison);
    }

    /**
     * Filter the query on the term_italian column
     *
     * Example usage:
     * <code>
     * $query->filterByTermItalian('fooValue');   // WHERE term_italian = 'fooValue'
     * $query->filterByTermItalian('%fooValue%'); // WHERE term_italian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termItalian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermItalian($termItalian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termItalian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termItalian)) {
                $termItalian = str_replace('*', '%', $termItalian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_ITALIAN, $termItalian, $comparison);
    }

    /**
     * Filter the query on the term_vietnamese_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermVietnameseOriginal('fooValue');   // WHERE term_vietnamese_original = 'fooValue'
     * $query->filterByTermVietnameseOriginal('%fooValue%'); // WHERE term_vietnamese_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termVietnameseOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermVietnameseOriginal($termVietnameseOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termVietnameseOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termVietnameseOriginal)) {
                $termVietnameseOriginal = str_replace('*', '%', $termVietnameseOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_VIETNAMESE_ORIGINAL, $termVietnameseOriginal, $comparison);
    }

    /**
     * Filter the query on the term_vietnamese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermVietnamese('fooValue');   // WHERE term_vietnamese = 'fooValue'
     * $query->filterByTermVietnamese('%fooValue%'); // WHERE term_vietnamese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termVietnamese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermVietnamese($termVietnamese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termVietnamese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termVietnamese)) {
                $termVietnamese = str_replace('*', '%', $termVietnamese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_VIETNAMESE, $termVietnamese, $comparison);
    }

    /**
     * Filter the query on the term_laos_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermLaosOriginal('fooValue');   // WHERE term_laos_original = 'fooValue'
     * $query->filterByTermLaosOriginal('%fooValue%'); // WHERE term_laos_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termLaosOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermLaosOriginal($termLaosOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termLaosOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termLaosOriginal)) {
                $termLaosOriginal = str_replace('*', '%', $termLaosOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_LAOS_ORIGINAL, $termLaosOriginal, $comparison);
    }

    /**
     * Filter the query on the term_laos column
     *
     * Example usage:
     * <code>
     * $query->filterByTermLaos('fooValue');   // WHERE term_laos = 'fooValue'
     * $query->filterByTermLaos('%fooValue%'); // WHERE term_laos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termLaos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermLaos($termLaos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termLaos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termLaos)) {
                $termLaos = str_replace('*', '%', $termLaos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_LAOS, $termLaos, $comparison);
    }

    /**
     * Filter the query on the term_hindi_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermHindiOriginal('fooValue');   // WHERE term_hindi_original = 'fooValue'
     * $query->filterByTermHindiOriginal('%fooValue%'); // WHERE term_hindi_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termHindiOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermHindiOriginal($termHindiOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termHindiOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termHindiOriginal)) {
                $termHindiOriginal = str_replace('*', '%', $termHindiOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_HINDI_ORIGINAL, $termHindiOriginal, $comparison);
    }

    /**
     * Filter the query on the term_hindi column
     *
     * Example usage:
     * <code>
     * $query->filterByTermHindi('fooValue');   // WHERE term_hindi = 'fooValue'
     * $query->filterByTermHindi('%fooValue%'); // WHERE term_hindi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termHindi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermHindi($termHindi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termHindi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termHindi)) {
                $termHindi = str_replace('*', '%', $termHindi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_HINDI, $termHindi, $comparison);
    }

    /**
     * Filter the query on the EnglishNew column
     *
     * Example usage:
     * <code>
     * $query->filterByEnglishnew('fooValue');   // WHERE EnglishNew = 'fooValue'
     * $query->filterByEnglishnew('%fooValue%'); // WHERE EnglishNew LIKE '%fooValue%'
     * </code>
     *
     * @param     string $englishnew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByEnglishnew($englishnew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($englishnew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $englishnew)) {
                $englishnew = str_replace('*', '%', $englishnew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::ENGLISHNEW, $englishnew, $comparison);
    }

    /**
     * Filter the query on the term_japanese_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermJapaneseOriginal('fooValue');   // WHERE term_japanese_original = 'fooValue'
     * $query->filterByTermJapaneseOriginal('%fooValue%'); // WHERE term_japanese_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termJapaneseOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermJapaneseOriginal($termJapaneseOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termJapaneseOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termJapaneseOriginal)) {
                $termJapaneseOriginal = str_replace('*', '%', $termJapaneseOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_JAPANESE_ORIGINAL, $termJapaneseOriginal, $comparison);
    }

    /**
     * Filter the query on the term_japanese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermJapanese('fooValue');   // WHERE term_japanese = 'fooValue'
     * $query->filterByTermJapanese('%fooValue%'); // WHERE term_japanese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termJapanese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermJapanese($termJapanese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termJapanese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termJapanese)) {
                $termJapanese = str_replace('*', '%', $termJapanese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_JAPANESE, $termJapanese, $comparison);
    }

    /**
     * Filter the query on the term_arabic_original column
     *
     * Example usage:
     * <code>
     * $query->filterByTermArabicOriginal('fooValue');   // WHERE term_arabic_original = 'fooValue'
     * $query->filterByTermArabicOriginal('%fooValue%'); // WHERE term_arabic_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termArabicOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermArabicOriginal($termArabicOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termArabicOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termArabicOriginal)) {
                $termArabicOriginal = str_replace('*', '%', $termArabicOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_ARABIC_ORIGINAL, $termArabicOriginal, $comparison);
    }

    /**
     * Filter the query on the term_arabic column
     *
     * Example usage:
     * <code>
     * $query->filterByTermArabic('fooValue');   // WHERE term_arabic = 'fooValue'
     * $query->filterByTermArabic('%fooValue%'); // WHERE term_arabic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termArabic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTermArabic($termArabic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termArabic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termArabic)) {
                $termArabic = str_replace('*', '%', $termArabic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TERM_ARABIC, $termArabic, $comparison);
    }

    /**
     * Filter the query on the glossary_term column
     *
     * Example usage:
     * <code>
     * $query->filterByGlossaryTerm('fooValue');   // WHERE glossary_term = 'fooValue'
     * $query->filterByGlossaryTerm('%fooValue%'); // WHERE glossary_term LIKE '%fooValue%'
     * </code>
     *
     * @param     string $glossaryTerm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByGlossaryTerm($glossaryTerm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($glossaryTerm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $glossaryTerm)) {
                $glossaryTerm = str_replace('*', '%', $glossaryTerm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::GLOSSARY_TERM, $glossaryTerm, $comparison);
    }

    /**
     * Filter the query on the entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LabelIndexPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LabelIndexPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LabelIndexPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LabelIndexPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the checked column
     *
     * Example usage:
     * <code>
     * $query->filterByChecked(1234); // WHERE checked = 1234
     * $query->filterByChecked(array(12, 34)); // WHERE checked IN (12, 34)
     * $query->filterByChecked(array('min' => 12)); // WHERE checked >= 12
     * $query->filterByChecked(array('max' => 12)); // WHERE checked <= 12
     * </code>
     *
     * @param     mixed $checked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByChecked($checked = null, $comparison = null)
    {
        if (is_array($checked)) {
            $useMinMax = false;
            if (isset($checked['min'])) {
                $this->addUsingAlias(LabelIndexPeer::CHECKED, $checked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checked['max'])) {
                $this->addUsingAlias(LabelIndexPeer::CHECKED, $checked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::CHECKED, $checked, $comparison);
    }

    /**
     * Filter the query on the dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE dateentered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LabelIndexPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LabelIndexPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE datemodified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LabelIndexPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LabelIndexPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE datechecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(LabelIndexPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(LabelIndexPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the TS column
     *
     * Example usage:
     * <code>
     * $query->filterByTs('2011-03-14'); // WHERE TS = '2011-03-14'
     * $query->filterByTs('now'); // WHERE TS = '2011-03-14'
     * $query->filterByTs(array('max' => 'yesterday')); // WHERE TS < '2011-03-13'
     * </code>
     *
     * @param     mixed $ts The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LabelIndexPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LabelIndexPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LabelIndexPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   LabelIndex $labelIndex Object to remove from the list of results
     *
     * @return LabelIndexQuery The current query, for fluid interface
     */
    public function prune($labelIndex = null)
    {
        if ($labelIndex) {
            $this->addUsingAlias(LabelIndexPeer::AUTOCTR, $labelIndex->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
