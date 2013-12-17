<?php


/**
 * Base class that represents a query for the 'glossary' table.
 *
 *
 *
 * @method GlossaryQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method GlossaryQuery orderByTermenglish($order = Criteria::ASC) Order by the TermEnglish column
 * @method GlossaryQuery orderByTermenglishscnd($order = Criteria::ASC) Order by the TermEnglishScnd column
 * @method GlossaryQuery orderByTermengishthird($order = Criteria::ASC) Order by the TermEngishThird column
 * @method GlossaryQuery orderByAbbreviation($order = Criteria::ASC) Order by the Abbreviation column
 * @method GlossaryQuery orderByTermfrench($order = Criteria::ASC) Order by the TermFrench column
 * @method GlossaryQuery orderByTermspanish($order = Criteria::ASC) Order by the TermSpanish column
 * @method GlossaryQuery orderByTermportuguese($order = Criteria::ASC) Order by the TermPortuguese column
 * @method GlossaryQuery orderByTermrussian($order = Criteria::ASC) Order by the TermRussian column
 * @method GlossaryQuery orderByTermcyrillic($order = Criteria::ASC) Order by the TermCyrillic column
 * @method GlossaryQuery orderByTermcyrillicU($order = Criteria::ASC) Order by the TermCyrillic_u column
 * @method GlossaryQuery orderByTermchinese($order = Criteria::ASC) Order by the TermChinese column
 * @method GlossaryQuery orderByTermchineseU($order = Criteria::ASC) Order by the TermChinese_u column
 * @method GlossaryQuery orderBySee1($order = Criteria::ASC) Order by the See1 column
 * @method GlossaryQuery orderBySee2($order = Criteria::ASC) Order by the See2 column
 * @method GlossaryQuery orderBySee3($order = Criteria::ASC) Order by the See3 column
 * @method GlossaryQuery orderByPicname($order = Criteria::ASC) Order by the Picname column
 * @method GlossaryQuery orderByGenetics($order = Criteria::ASC) Order by the Genetics column
 * @method GlossaryQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method GlossaryQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method GlossaryQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method GlossaryQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method GlossaryQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method GlossaryQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method GlossaryQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method GlossaryQuery orderByEnglish($order = Criteria::ASC) Order by the English column
 * @method GlossaryQuery orderByGrammar($order = Criteria::ASC) Order by the Grammar column
 * @method GlossaryQuery orderByGender($order = Criteria::ASC) Order by the Gender column
 * @method GlossaryQuery orderByFrenchdef($order = Criteria::ASC) Order by the FrenchDef column
 * @method GlossaryQuery orderByEnteredfr($order = Criteria::ASC) Order by the EnteredFR column
 * @method GlossaryQuery orderByDateenteredfr($order = Criteria::ASC) Order by the DateEnteredFR column
 * @method GlossaryQuery orderByModifiedfr($order = Criteria::ASC) Order by the ModifiedFR column
 * @method GlossaryQuery orderByDatemodifiedfr($order = Criteria::ASC) Order by the DateModifiedFR column
 * @method GlossaryQuery orderByExpertfr($order = Criteria::ASC) Order by the ExpertFR column
 * @method GlossaryQuery orderByDatecheckedfr($order = Criteria::ASC) Order by the DateCheckedFR column
 * @method GlossaryQuery orderBySpanishdef($order = Criteria::ASC) Order by the SpanishDef column
 * @method GlossaryQuery orderByEnteredsp($order = Criteria::ASC) Order by the EnteredSP column
 * @method GlossaryQuery orderByDateenteredsp($order = Criteria::ASC) Order by the DateEnteredSP column
 * @method GlossaryQuery orderByModifiedsp($order = Criteria::ASC) Order by the ModifiedSP column
 * @method GlossaryQuery orderByDatemodifiedsp($order = Criteria::ASC) Order by the DateModifiedSP column
 * @method GlossaryQuery orderByExpertsp($order = Criteria::ASC) Order by the ExpertSP column
 * @method GlossaryQuery orderByDatecheckedsp($order = Criteria::ASC) Order by the DateCheckedSP column
 * @method GlossaryQuery orderByPortuguesedef($order = Criteria::ASC) Order by the PortugueseDef column
 * @method GlossaryQuery orderByEnteredpr($order = Criteria::ASC) Order by the EnteredPR column
 * @method GlossaryQuery orderByDateenteredpr($order = Criteria::ASC) Order by the DateEnteredPR column
 * @method GlossaryQuery orderByModifiedpr($order = Criteria::ASC) Order by the ModifiedPR column
 * @method GlossaryQuery orderByDatemodifiedpr($order = Criteria::ASC) Order by the DateModifiedPR column
 * @method GlossaryQuery orderByExpertpr($order = Criteria::ASC) Order by the ExpertPR column
 * @method GlossaryQuery orderByDatecheckedpr($order = Criteria::ASC) Order by the DateCheckedPR column
 * @method GlossaryQuery orderByRussiandef($order = Criteria::ASC) Order by the RussianDef column
 * @method GlossaryQuery orderByEnteredrus($order = Criteria::ASC) Order by the EnteredRus column
 * @method GlossaryQuery orderByDateenteredrus($order = Criteria::ASC) Order by the DateEnteredRus column
 * @method GlossaryQuery orderByModifiedrus($order = Criteria::ASC) Order by the ModifiedRus column
 * @method GlossaryQuery orderByDatemodifiedrus($order = Criteria::ASC) Order by the DateModifiedRus column
 * @method GlossaryQuery orderByExpertrus($order = Criteria::ASC) Order by the ExpertRus column
 * @method GlossaryQuery orderByDatecheckedrus($order = Criteria::ASC) Order by the DateCheckedRus column
 * @method GlossaryQuery orderByCyrillicdef($order = Criteria::ASC) Order by the CyrillicDef column
 * @method GlossaryQuery orderByEnteredcyr($order = Criteria::ASC) Order by the EnteredCyr column
 * @method GlossaryQuery orderByDateenteredcyr($order = Criteria::ASC) Order by the DateEnteredCyr column
 * @method GlossaryQuery orderByModifiedcyr($order = Criteria::ASC) Order by the ModifiedCyr column
 * @method GlossaryQuery orderByDatemodifiedcyr($order = Criteria::ASC) Order by the DateModifiedCyr column
 * @method GlossaryQuery orderByExpertcyr($order = Criteria::ASC) Order by the ExpertCyr column
 * @method GlossaryQuery orderByDatecheckedcyr($order = Criteria::ASC) Order by the DateCheckedCyr column
 * @method GlossaryQuery orderByChinesedef($order = Criteria::ASC) Order by the ChineseDef column
 * @method GlossaryQuery orderByEnteredchi($order = Criteria::ASC) Order by the EnteredChi column
 * @method GlossaryQuery orderByDateenteredchi($order = Criteria::ASC) Order by the DateEnteredChi column
 * @method GlossaryQuery orderByModifiedchi($order = Criteria::ASC) Order by the ModifiedChi column
 * @method GlossaryQuery orderByDatemodifiedchi($order = Criteria::ASC) Order by the DateModifiedChi column
 * @method GlossaryQuery orderByExpertchi($order = Criteria::ASC) Order by the ExpertChi column
 * @method GlossaryQuery orderByDatecheckedchi($order = Criteria::ASC) Order by the DateCheckedChi column
 * @method GlossaryQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method GlossaryQuery groupByAutoctr() Group by the autoctr column
 * @method GlossaryQuery groupByTermenglish() Group by the TermEnglish column
 * @method GlossaryQuery groupByTermenglishscnd() Group by the TermEnglishScnd column
 * @method GlossaryQuery groupByTermengishthird() Group by the TermEngishThird column
 * @method GlossaryQuery groupByAbbreviation() Group by the Abbreviation column
 * @method GlossaryQuery groupByTermfrench() Group by the TermFrench column
 * @method GlossaryQuery groupByTermspanish() Group by the TermSpanish column
 * @method GlossaryQuery groupByTermportuguese() Group by the TermPortuguese column
 * @method GlossaryQuery groupByTermrussian() Group by the TermRussian column
 * @method GlossaryQuery groupByTermcyrillic() Group by the TermCyrillic column
 * @method GlossaryQuery groupByTermcyrillicU() Group by the TermCyrillic_u column
 * @method GlossaryQuery groupByTermchinese() Group by the TermChinese column
 * @method GlossaryQuery groupByTermchineseU() Group by the TermChinese_u column
 * @method GlossaryQuery groupBySee1() Group by the See1 column
 * @method GlossaryQuery groupBySee2() Group by the See2 column
 * @method GlossaryQuery groupBySee3() Group by the See3 column
 * @method GlossaryQuery groupByPicname() Group by the Picname column
 * @method GlossaryQuery groupByGenetics() Group by the Genetics column
 * @method GlossaryQuery groupByComments() Group by the Comments column
 * @method GlossaryQuery groupByEntered() Group by the Entered column
 * @method GlossaryQuery groupByDateentered() Group by the Dateentered column
 * @method GlossaryQuery groupByModified() Group by the Modified column
 * @method GlossaryQuery groupByDatemodified() Group by the Datemodified column
 * @method GlossaryQuery groupByExpert() Group by the Expert column
 * @method GlossaryQuery groupByDatechecked() Group by the Datechecked column
 * @method GlossaryQuery groupByEnglish() Group by the English column
 * @method GlossaryQuery groupByGrammar() Group by the Grammar column
 * @method GlossaryQuery groupByGender() Group by the Gender column
 * @method GlossaryQuery groupByFrenchdef() Group by the FrenchDef column
 * @method GlossaryQuery groupByEnteredfr() Group by the EnteredFR column
 * @method GlossaryQuery groupByDateenteredfr() Group by the DateEnteredFR column
 * @method GlossaryQuery groupByModifiedfr() Group by the ModifiedFR column
 * @method GlossaryQuery groupByDatemodifiedfr() Group by the DateModifiedFR column
 * @method GlossaryQuery groupByExpertfr() Group by the ExpertFR column
 * @method GlossaryQuery groupByDatecheckedfr() Group by the DateCheckedFR column
 * @method GlossaryQuery groupBySpanishdef() Group by the SpanishDef column
 * @method GlossaryQuery groupByEnteredsp() Group by the EnteredSP column
 * @method GlossaryQuery groupByDateenteredsp() Group by the DateEnteredSP column
 * @method GlossaryQuery groupByModifiedsp() Group by the ModifiedSP column
 * @method GlossaryQuery groupByDatemodifiedsp() Group by the DateModifiedSP column
 * @method GlossaryQuery groupByExpertsp() Group by the ExpertSP column
 * @method GlossaryQuery groupByDatecheckedsp() Group by the DateCheckedSP column
 * @method GlossaryQuery groupByPortuguesedef() Group by the PortugueseDef column
 * @method GlossaryQuery groupByEnteredpr() Group by the EnteredPR column
 * @method GlossaryQuery groupByDateenteredpr() Group by the DateEnteredPR column
 * @method GlossaryQuery groupByModifiedpr() Group by the ModifiedPR column
 * @method GlossaryQuery groupByDatemodifiedpr() Group by the DateModifiedPR column
 * @method GlossaryQuery groupByExpertpr() Group by the ExpertPR column
 * @method GlossaryQuery groupByDatecheckedpr() Group by the DateCheckedPR column
 * @method GlossaryQuery groupByRussiandef() Group by the RussianDef column
 * @method GlossaryQuery groupByEnteredrus() Group by the EnteredRus column
 * @method GlossaryQuery groupByDateenteredrus() Group by the DateEnteredRus column
 * @method GlossaryQuery groupByModifiedrus() Group by the ModifiedRus column
 * @method GlossaryQuery groupByDatemodifiedrus() Group by the DateModifiedRus column
 * @method GlossaryQuery groupByExpertrus() Group by the ExpertRus column
 * @method GlossaryQuery groupByDatecheckedrus() Group by the DateCheckedRus column
 * @method GlossaryQuery groupByCyrillicdef() Group by the CyrillicDef column
 * @method GlossaryQuery groupByEnteredcyr() Group by the EnteredCyr column
 * @method GlossaryQuery groupByDateenteredcyr() Group by the DateEnteredCyr column
 * @method GlossaryQuery groupByModifiedcyr() Group by the ModifiedCyr column
 * @method GlossaryQuery groupByDatemodifiedcyr() Group by the DateModifiedCyr column
 * @method GlossaryQuery groupByExpertcyr() Group by the ExpertCyr column
 * @method GlossaryQuery groupByDatecheckedcyr() Group by the DateCheckedCyr column
 * @method GlossaryQuery groupByChinesedef() Group by the ChineseDef column
 * @method GlossaryQuery groupByEnteredchi() Group by the EnteredChi column
 * @method GlossaryQuery groupByDateenteredchi() Group by the DateEnteredChi column
 * @method GlossaryQuery groupByModifiedchi() Group by the ModifiedChi column
 * @method GlossaryQuery groupByDatemodifiedchi() Group by the DateModifiedChi column
 * @method GlossaryQuery groupByExpertchi() Group by the ExpertChi column
 * @method GlossaryQuery groupByDatecheckedchi() Group by the DateCheckedChi column
 * @method GlossaryQuery groupByTs() Group by the TS column
 *
 * @method GlossaryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GlossaryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GlossaryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Glossary findOne(PropelPDO $con = null) Return the first Glossary matching the query
 * @method Glossary findOneOrCreate(PropelPDO $con = null) Return the first Glossary matching the query, or a new Glossary object populated from the query conditions when no match is found
 *
 * @method Glossary findOneByTermenglish(string $TermEnglish) Return the first Glossary filtered by the TermEnglish column
 * @method Glossary findOneByTermenglishscnd(string $TermEnglishScnd) Return the first Glossary filtered by the TermEnglishScnd column
 * @method Glossary findOneByTermengishthird(string $TermEngishThird) Return the first Glossary filtered by the TermEngishThird column
 * @method Glossary findOneByAbbreviation(string $Abbreviation) Return the first Glossary filtered by the Abbreviation column
 * @method Glossary findOneByTermfrench(string $TermFrench) Return the first Glossary filtered by the TermFrench column
 * @method Glossary findOneByTermspanish(string $TermSpanish) Return the first Glossary filtered by the TermSpanish column
 * @method Glossary findOneByTermportuguese(string $TermPortuguese) Return the first Glossary filtered by the TermPortuguese column
 * @method Glossary findOneByTermrussian(string $TermRussian) Return the first Glossary filtered by the TermRussian column
 * @method Glossary findOneByTermcyrillic(string $TermCyrillic) Return the first Glossary filtered by the TermCyrillic column
 * @method Glossary findOneByTermcyrillicU(string $TermCyrillic_u) Return the first Glossary filtered by the TermCyrillic_u column
 * @method Glossary findOneByTermchinese(string $TermChinese) Return the first Glossary filtered by the TermChinese column
 * @method Glossary findOneByTermchineseU(string $TermChinese_u) Return the first Glossary filtered by the TermChinese_u column
 * @method Glossary findOneBySee1(string $See1) Return the first Glossary filtered by the See1 column
 * @method Glossary findOneBySee2(string $See2) Return the first Glossary filtered by the See2 column
 * @method Glossary findOneBySee3(string $See3) Return the first Glossary filtered by the See3 column
 * @method Glossary findOneByPicname(string $Picname) Return the first Glossary filtered by the Picname column
 * @method Glossary findOneByGenetics(int $Genetics) Return the first Glossary filtered by the Genetics column
 * @method Glossary findOneByComments(string $Comments) Return the first Glossary filtered by the Comments column
 * @method Glossary findOneByEntered(int $Entered) Return the first Glossary filtered by the Entered column
 * @method Glossary findOneByDateentered(string $Dateentered) Return the first Glossary filtered by the Dateentered column
 * @method Glossary findOneByModified(int $Modified) Return the first Glossary filtered by the Modified column
 * @method Glossary findOneByDatemodified(string $Datemodified) Return the first Glossary filtered by the Datemodified column
 * @method Glossary findOneByExpert(int $Expert) Return the first Glossary filtered by the Expert column
 * @method Glossary findOneByDatechecked(string $Datechecked) Return the first Glossary filtered by the Datechecked column
 * @method Glossary findOneByEnglish(string $English) Return the first Glossary filtered by the English column
 * @method Glossary findOneByGrammar(string $Grammar) Return the first Glossary filtered by the Grammar column
 * @method Glossary findOneByGender(string $Gender) Return the first Glossary filtered by the Gender column
 * @method Glossary findOneByFrenchdef(string $FrenchDef) Return the first Glossary filtered by the FrenchDef column
 * @method Glossary findOneByEnteredfr(int $EnteredFR) Return the first Glossary filtered by the EnteredFR column
 * @method Glossary findOneByDateenteredfr(string $DateEnteredFR) Return the first Glossary filtered by the DateEnteredFR column
 * @method Glossary findOneByModifiedfr(int $ModifiedFR) Return the first Glossary filtered by the ModifiedFR column
 * @method Glossary findOneByDatemodifiedfr(string $DateModifiedFR) Return the first Glossary filtered by the DateModifiedFR column
 * @method Glossary findOneByExpertfr(int $ExpertFR) Return the first Glossary filtered by the ExpertFR column
 * @method Glossary findOneByDatecheckedfr(string $DateCheckedFR) Return the first Glossary filtered by the DateCheckedFR column
 * @method Glossary findOneBySpanishdef(string $SpanishDef) Return the first Glossary filtered by the SpanishDef column
 * @method Glossary findOneByEnteredsp(int $EnteredSP) Return the first Glossary filtered by the EnteredSP column
 * @method Glossary findOneByDateenteredsp(string $DateEnteredSP) Return the first Glossary filtered by the DateEnteredSP column
 * @method Glossary findOneByModifiedsp(int $ModifiedSP) Return the first Glossary filtered by the ModifiedSP column
 * @method Glossary findOneByDatemodifiedsp(string $DateModifiedSP) Return the first Glossary filtered by the DateModifiedSP column
 * @method Glossary findOneByExpertsp(int $ExpertSP) Return the first Glossary filtered by the ExpertSP column
 * @method Glossary findOneByDatecheckedsp(string $DateCheckedSP) Return the first Glossary filtered by the DateCheckedSP column
 * @method Glossary findOneByPortuguesedef(string $PortugueseDef) Return the first Glossary filtered by the PortugueseDef column
 * @method Glossary findOneByEnteredpr(int $EnteredPR) Return the first Glossary filtered by the EnteredPR column
 * @method Glossary findOneByDateenteredpr(string $DateEnteredPR) Return the first Glossary filtered by the DateEnteredPR column
 * @method Glossary findOneByModifiedpr(int $ModifiedPR) Return the first Glossary filtered by the ModifiedPR column
 * @method Glossary findOneByDatemodifiedpr(string $DateModifiedPR) Return the first Glossary filtered by the DateModifiedPR column
 * @method Glossary findOneByExpertpr(int $ExpertPR) Return the first Glossary filtered by the ExpertPR column
 * @method Glossary findOneByDatecheckedpr(string $DateCheckedPR) Return the first Glossary filtered by the DateCheckedPR column
 * @method Glossary findOneByRussiandef(string $RussianDef) Return the first Glossary filtered by the RussianDef column
 * @method Glossary findOneByEnteredrus(int $EnteredRus) Return the first Glossary filtered by the EnteredRus column
 * @method Glossary findOneByDateenteredrus(string $DateEnteredRus) Return the first Glossary filtered by the DateEnteredRus column
 * @method Glossary findOneByModifiedrus(int $ModifiedRus) Return the first Glossary filtered by the ModifiedRus column
 * @method Glossary findOneByDatemodifiedrus(string $DateModifiedRus) Return the first Glossary filtered by the DateModifiedRus column
 * @method Glossary findOneByExpertrus(int $ExpertRus) Return the first Glossary filtered by the ExpertRus column
 * @method Glossary findOneByDatecheckedrus(string $DateCheckedRus) Return the first Glossary filtered by the DateCheckedRus column
 * @method Glossary findOneByCyrillicdef(string $CyrillicDef) Return the first Glossary filtered by the CyrillicDef column
 * @method Glossary findOneByEnteredcyr(int $EnteredCyr) Return the first Glossary filtered by the EnteredCyr column
 * @method Glossary findOneByDateenteredcyr(string $DateEnteredCyr) Return the first Glossary filtered by the DateEnteredCyr column
 * @method Glossary findOneByModifiedcyr(int $ModifiedCyr) Return the first Glossary filtered by the ModifiedCyr column
 * @method Glossary findOneByDatemodifiedcyr(string $DateModifiedCyr) Return the first Glossary filtered by the DateModifiedCyr column
 * @method Glossary findOneByExpertcyr(int $ExpertCyr) Return the first Glossary filtered by the ExpertCyr column
 * @method Glossary findOneByDatecheckedcyr(string $DateCheckedCyr) Return the first Glossary filtered by the DateCheckedCyr column
 * @method Glossary findOneByChinesedef(string $ChineseDef) Return the first Glossary filtered by the ChineseDef column
 * @method Glossary findOneByEnteredchi(int $EnteredChi) Return the first Glossary filtered by the EnteredChi column
 * @method Glossary findOneByDateenteredchi(string $DateEnteredChi) Return the first Glossary filtered by the DateEnteredChi column
 * @method Glossary findOneByModifiedchi(int $ModifiedChi) Return the first Glossary filtered by the ModifiedChi column
 * @method Glossary findOneByDatemodifiedchi(string $DateModifiedChi) Return the first Glossary filtered by the DateModifiedChi column
 * @method Glossary findOneByExpertchi(int $ExpertChi) Return the first Glossary filtered by the ExpertChi column
 * @method Glossary findOneByDatecheckedchi(string $DateCheckedChi) Return the first Glossary filtered by the DateCheckedChi column
 * @method Glossary findOneByTs(string $TS) Return the first Glossary filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Glossary objects filtered by the autoctr column
 * @method array findByTermenglish(string $TermEnglish) Return Glossary objects filtered by the TermEnglish column
 * @method array findByTermenglishscnd(string $TermEnglishScnd) Return Glossary objects filtered by the TermEnglishScnd column
 * @method array findByTermengishthird(string $TermEngishThird) Return Glossary objects filtered by the TermEngishThird column
 * @method array findByAbbreviation(string $Abbreviation) Return Glossary objects filtered by the Abbreviation column
 * @method array findByTermfrench(string $TermFrench) Return Glossary objects filtered by the TermFrench column
 * @method array findByTermspanish(string $TermSpanish) Return Glossary objects filtered by the TermSpanish column
 * @method array findByTermportuguese(string $TermPortuguese) Return Glossary objects filtered by the TermPortuguese column
 * @method array findByTermrussian(string $TermRussian) Return Glossary objects filtered by the TermRussian column
 * @method array findByTermcyrillic(string $TermCyrillic) Return Glossary objects filtered by the TermCyrillic column
 * @method array findByTermcyrillicU(string $TermCyrillic_u) Return Glossary objects filtered by the TermCyrillic_u column
 * @method array findByTermchinese(string $TermChinese) Return Glossary objects filtered by the TermChinese column
 * @method array findByTermchineseU(string $TermChinese_u) Return Glossary objects filtered by the TermChinese_u column
 * @method array findBySee1(string $See1) Return Glossary objects filtered by the See1 column
 * @method array findBySee2(string $See2) Return Glossary objects filtered by the See2 column
 * @method array findBySee3(string $See3) Return Glossary objects filtered by the See3 column
 * @method array findByPicname(string $Picname) Return Glossary objects filtered by the Picname column
 * @method array findByGenetics(int $Genetics) Return Glossary objects filtered by the Genetics column
 * @method array findByComments(string $Comments) Return Glossary objects filtered by the Comments column
 * @method array findByEntered(int $Entered) Return Glossary objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Glossary objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Glossary objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Glossary objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Glossary objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Glossary objects filtered by the Datechecked column
 * @method array findByEnglish(string $English) Return Glossary objects filtered by the English column
 * @method array findByGrammar(string $Grammar) Return Glossary objects filtered by the Grammar column
 * @method array findByGender(string $Gender) Return Glossary objects filtered by the Gender column
 * @method array findByFrenchdef(string $FrenchDef) Return Glossary objects filtered by the FrenchDef column
 * @method array findByEnteredfr(int $EnteredFR) Return Glossary objects filtered by the EnteredFR column
 * @method array findByDateenteredfr(string $DateEnteredFR) Return Glossary objects filtered by the DateEnteredFR column
 * @method array findByModifiedfr(int $ModifiedFR) Return Glossary objects filtered by the ModifiedFR column
 * @method array findByDatemodifiedfr(string $DateModifiedFR) Return Glossary objects filtered by the DateModifiedFR column
 * @method array findByExpertfr(int $ExpertFR) Return Glossary objects filtered by the ExpertFR column
 * @method array findByDatecheckedfr(string $DateCheckedFR) Return Glossary objects filtered by the DateCheckedFR column
 * @method array findBySpanishdef(string $SpanishDef) Return Glossary objects filtered by the SpanishDef column
 * @method array findByEnteredsp(int $EnteredSP) Return Glossary objects filtered by the EnteredSP column
 * @method array findByDateenteredsp(string $DateEnteredSP) Return Glossary objects filtered by the DateEnteredSP column
 * @method array findByModifiedsp(int $ModifiedSP) Return Glossary objects filtered by the ModifiedSP column
 * @method array findByDatemodifiedsp(string $DateModifiedSP) Return Glossary objects filtered by the DateModifiedSP column
 * @method array findByExpertsp(int $ExpertSP) Return Glossary objects filtered by the ExpertSP column
 * @method array findByDatecheckedsp(string $DateCheckedSP) Return Glossary objects filtered by the DateCheckedSP column
 * @method array findByPortuguesedef(string $PortugueseDef) Return Glossary objects filtered by the PortugueseDef column
 * @method array findByEnteredpr(int $EnteredPR) Return Glossary objects filtered by the EnteredPR column
 * @method array findByDateenteredpr(string $DateEnteredPR) Return Glossary objects filtered by the DateEnteredPR column
 * @method array findByModifiedpr(int $ModifiedPR) Return Glossary objects filtered by the ModifiedPR column
 * @method array findByDatemodifiedpr(string $DateModifiedPR) Return Glossary objects filtered by the DateModifiedPR column
 * @method array findByExpertpr(int $ExpertPR) Return Glossary objects filtered by the ExpertPR column
 * @method array findByDatecheckedpr(string $DateCheckedPR) Return Glossary objects filtered by the DateCheckedPR column
 * @method array findByRussiandef(string $RussianDef) Return Glossary objects filtered by the RussianDef column
 * @method array findByEnteredrus(int $EnteredRus) Return Glossary objects filtered by the EnteredRus column
 * @method array findByDateenteredrus(string $DateEnteredRus) Return Glossary objects filtered by the DateEnteredRus column
 * @method array findByModifiedrus(int $ModifiedRus) Return Glossary objects filtered by the ModifiedRus column
 * @method array findByDatemodifiedrus(string $DateModifiedRus) Return Glossary objects filtered by the DateModifiedRus column
 * @method array findByExpertrus(int $ExpertRus) Return Glossary objects filtered by the ExpertRus column
 * @method array findByDatecheckedrus(string $DateCheckedRus) Return Glossary objects filtered by the DateCheckedRus column
 * @method array findByCyrillicdef(string $CyrillicDef) Return Glossary objects filtered by the CyrillicDef column
 * @method array findByEnteredcyr(int $EnteredCyr) Return Glossary objects filtered by the EnteredCyr column
 * @method array findByDateenteredcyr(string $DateEnteredCyr) Return Glossary objects filtered by the DateEnteredCyr column
 * @method array findByModifiedcyr(int $ModifiedCyr) Return Glossary objects filtered by the ModifiedCyr column
 * @method array findByDatemodifiedcyr(string $DateModifiedCyr) Return Glossary objects filtered by the DateModifiedCyr column
 * @method array findByExpertcyr(int $ExpertCyr) Return Glossary objects filtered by the ExpertCyr column
 * @method array findByDatecheckedcyr(string $DateCheckedCyr) Return Glossary objects filtered by the DateCheckedCyr column
 * @method array findByChinesedef(string $ChineseDef) Return Glossary objects filtered by the ChineseDef column
 * @method array findByEnteredchi(int $EnteredChi) Return Glossary objects filtered by the EnteredChi column
 * @method array findByDateenteredchi(string $DateEnteredChi) Return Glossary objects filtered by the DateEnteredChi column
 * @method array findByModifiedchi(int $ModifiedChi) Return Glossary objects filtered by the ModifiedChi column
 * @method array findByDatemodifiedchi(string $DateModifiedChi) Return Glossary objects filtered by the DateModifiedChi column
 * @method array findByExpertchi(int $ExpertChi) Return Glossary objects filtered by the ExpertChi column
 * @method array findByDatecheckedchi(string $DateCheckedChi) Return Glossary objects filtered by the DateCheckedChi column
 * @method array findByTs(string $TS) Return Glossary objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGlossaryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGlossaryQuery object.
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
            $modelName = 'Glossary';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GlossaryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GlossaryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GlossaryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GlossaryQuery) {
            return $criteria;
        }
        $query = new GlossaryQuery(null, null, $modelAlias);

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
     * @return   Glossary|Glossary[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GlossaryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GlossaryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Glossary A model object, or null if the key is not found
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
     * @return                 Glossary A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `TermEnglish`, `TermEnglishScnd`, `TermEngishThird`, `Abbreviation`, `TermFrench`, `TermSpanish`, `TermPortuguese`, `TermRussian`, `TermCyrillic`, `TermCyrillic_u`, `TermChinese`, `TermChinese_u`, `See1`, `See2`, `See3`, `Picname`, `Genetics`, `Comments`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `English`, `Grammar`, `Gender`, `FrenchDef`, `EnteredFR`, `DateEnteredFR`, `ModifiedFR`, `DateModifiedFR`, `ExpertFR`, `DateCheckedFR`, `SpanishDef`, `EnteredSP`, `DateEnteredSP`, `ModifiedSP`, `DateModifiedSP`, `ExpertSP`, `DateCheckedSP`, `PortugueseDef`, `EnteredPR`, `DateEnteredPR`, `ModifiedPR`, `DateModifiedPR`, `ExpertPR`, `DateCheckedPR`, `RussianDef`, `EnteredRus`, `DateEnteredRus`, `ModifiedRus`, `DateModifiedRus`, `ExpertRus`, `DateCheckedRus`, `CyrillicDef`, `EnteredCyr`, `DateEnteredCyr`, `ModifiedCyr`, `DateModifiedCyr`, `ExpertCyr`, `DateCheckedCyr`, `ChineseDef`, `EnteredChi`, `DateEnteredChi`, `ModifiedChi`, `DateModifiedChi`, `ExpertChi`, `DateCheckedChi`, `TS` FROM `glossary` WHERE `autoctr` = :p0';
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
            $obj = new Glossary();
            $obj->hydrate($row);
            GlossaryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Glossary|Glossary[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Glossary[]|mixed the list of results, formatted by the current formatter
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
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GlossaryPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GlossaryPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(GlossaryPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(GlossaryPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the TermEnglish column
     *
     * Example usage:
     * <code>
     * $query->filterByTermenglish('fooValue');   // WHERE TermEnglish = 'fooValue'
     * $query->filterByTermenglish('%fooValue%'); // WHERE TermEnglish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termenglish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermenglish($termenglish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termenglish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termenglish)) {
                $termenglish = str_replace('*', '%', $termenglish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMENGLISH, $termenglish, $comparison);
    }

    /**
     * Filter the query on the TermEnglishScnd column
     *
     * Example usage:
     * <code>
     * $query->filterByTermenglishscnd('fooValue');   // WHERE TermEnglishScnd = 'fooValue'
     * $query->filterByTermenglishscnd('%fooValue%'); // WHERE TermEnglishScnd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termenglishscnd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermenglishscnd($termenglishscnd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termenglishscnd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termenglishscnd)) {
                $termenglishscnd = str_replace('*', '%', $termenglishscnd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMENGLISHSCND, $termenglishscnd, $comparison);
    }

    /**
     * Filter the query on the TermEngishThird column
     *
     * Example usage:
     * <code>
     * $query->filterByTermengishthird('fooValue');   // WHERE TermEngishThird = 'fooValue'
     * $query->filterByTermengishthird('%fooValue%'); // WHERE TermEngishThird LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termengishthird The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermengishthird($termengishthird = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termengishthird)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termengishthird)) {
                $termengishthird = str_replace('*', '%', $termengishthird);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMENGISHTHIRD, $termengishthird, $comparison);
    }

    /**
     * Filter the query on the Abbreviation column
     *
     * Example usage:
     * <code>
     * $query->filterByAbbreviation('fooValue');   // WHERE Abbreviation = 'fooValue'
     * $query->filterByAbbreviation('%fooValue%'); // WHERE Abbreviation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abbreviation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByAbbreviation($abbreviation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abbreviation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abbreviation)) {
                $abbreviation = str_replace('*', '%', $abbreviation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ABBREVIATION, $abbreviation, $comparison);
    }

    /**
     * Filter the query on the TermFrench column
     *
     * Example usage:
     * <code>
     * $query->filterByTermfrench('fooValue');   // WHERE TermFrench = 'fooValue'
     * $query->filterByTermfrench('%fooValue%'); // WHERE TermFrench LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termfrench The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermfrench($termfrench = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termfrench)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termfrench)) {
                $termfrench = str_replace('*', '%', $termfrench);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMFRENCH, $termfrench, $comparison);
    }

    /**
     * Filter the query on the TermSpanish column
     *
     * Example usage:
     * <code>
     * $query->filterByTermspanish('fooValue');   // WHERE TermSpanish = 'fooValue'
     * $query->filterByTermspanish('%fooValue%'); // WHERE TermSpanish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termspanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermspanish($termspanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termspanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termspanish)) {
                $termspanish = str_replace('*', '%', $termspanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMSPANISH, $termspanish, $comparison);
    }

    /**
     * Filter the query on the TermPortuguese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermportuguese('fooValue');   // WHERE TermPortuguese = 'fooValue'
     * $query->filterByTermportuguese('%fooValue%'); // WHERE TermPortuguese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termportuguese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermportuguese($termportuguese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termportuguese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termportuguese)) {
                $termportuguese = str_replace('*', '%', $termportuguese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMPORTUGUESE, $termportuguese, $comparison);
    }

    /**
     * Filter the query on the TermRussian column
     *
     * Example usage:
     * <code>
     * $query->filterByTermrussian('fooValue');   // WHERE TermRussian = 'fooValue'
     * $query->filterByTermrussian('%fooValue%'); // WHERE TermRussian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termrussian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermrussian($termrussian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termrussian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termrussian)) {
                $termrussian = str_replace('*', '%', $termrussian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMRUSSIAN, $termrussian, $comparison);
    }

    /**
     * Filter the query on the TermCyrillic column
     *
     * Example usage:
     * <code>
     * $query->filterByTermcyrillic('fooValue');   // WHERE TermCyrillic = 'fooValue'
     * $query->filterByTermcyrillic('%fooValue%'); // WHERE TermCyrillic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termcyrillic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermcyrillic($termcyrillic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcyrillic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termcyrillic)) {
                $termcyrillic = str_replace('*', '%', $termcyrillic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMCYRILLIC, $termcyrillic, $comparison);
    }

    /**
     * Filter the query on the TermCyrillic_u column
     *
     * Example usage:
     * <code>
     * $query->filterByTermcyrillicU('fooValue');   // WHERE TermCyrillic_u = 'fooValue'
     * $query->filterByTermcyrillicU('%fooValue%'); // WHERE TermCyrillic_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termcyrillicU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermcyrillicU($termcyrillicU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termcyrillicU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termcyrillicU)) {
                $termcyrillicU = str_replace('*', '%', $termcyrillicU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMCYRILLIC_U, $termcyrillicU, $comparison);
    }

    /**
     * Filter the query on the TermChinese column
     *
     * Example usage:
     * <code>
     * $query->filterByTermchinese('fooValue');   // WHERE TermChinese = 'fooValue'
     * $query->filterByTermchinese('%fooValue%'); // WHERE TermChinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termchinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermchinese($termchinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termchinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termchinese)) {
                $termchinese = str_replace('*', '%', $termchinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMCHINESE, $termchinese, $comparison);
    }

    /**
     * Filter the query on the TermChinese_u column
     *
     * Example usage:
     * <code>
     * $query->filterByTermchineseU('fooValue');   // WHERE TermChinese_u = 'fooValue'
     * $query->filterByTermchineseU('%fooValue%'); // WHERE TermChinese_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $termchineseU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTermchineseU($termchineseU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($termchineseU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $termchineseU)) {
                $termchineseU = str_replace('*', '%', $termchineseU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TERMCHINESE_U, $termchineseU, $comparison);
    }

    /**
     * Filter the query on the See1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySee1('fooValue');   // WHERE See1 = 'fooValue'
     * $query->filterBySee1('%fooValue%'); // WHERE See1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $see1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterBySee1($see1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($see1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $see1)) {
                $see1 = str_replace('*', '%', $see1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::SEE1, $see1, $comparison);
    }

    /**
     * Filter the query on the See2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySee2('fooValue');   // WHERE See2 = 'fooValue'
     * $query->filterBySee2('%fooValue%'); // WHERE See2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $see2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterBySee2($see2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($see2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $see2)) {
                $see2 = str_replace('*', '%', $see2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::SEE2, $see2, $comparison);
    }

    /**
     * Filter the query on the See3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySee3('fooValue');   // WHERE See3 = 'fooValue'
     * $query->filterBySee3('%fooValue%'); // WHERE See3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $see3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterBySee3($see3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($see3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $see3)) {
                $see3 = str_replace('*', '%', $see3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::SEE3, $see3, $comparison);
    }

    /**
     * Filter the query on the Picname column
     *
     * Example usage:
     * <code>
     * $query->filterByPicname('fooValue');   // WHERE Picname = 'fooValue'
     * $query->filterByPicname('%fooValue%'); // WHERE Picname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByPicname($picname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picname)) {
                $picname = str_replace('*', '%', $picname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::PICNAME, $picname, $comparison);
    }

    /**
     * Filter the query on the Genetics column
     *
     * Example usage:
     * <code>
     * $query->filterByGenetics(1234); // WHERE Genetics = 1234
     * $query->filterByGenetics(array(12, 34)); // WHERE Genetics IN (12, 34)
     * $query->filterByGenetics(array('min' => 12)); // WHERE Genetics >= 12
     * $query->filterByGenetics(array('max' => 12)); // WHERE Genetics <= 12
     * </code>
     *
     * @param     mixed $genetics The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByGenetics($genetics = null, $comparison = null)
    {
        if (is_array($genetics)) {
            $useMinMax = false;
            if (isset($genetics['min'])) {
                $this->addUsingAlias(GlossaryPeer::GENETICS, $genetics['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genetics['max'])) {
                $this->addUsingAlias(GlossaryPeer::GENETICS, $genetics['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::GENETICS, $genetics, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the Dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE Dateentered < '2011-03-13'
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
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the Datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE Datemodified < '2011-03-13'
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
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE Datechecked < '2011-03-13'
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
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the English column
     *
     * Example usage:
     * <code>
     * $query->filterByEnglish('fooValue');   // WHERE English = 'fooValue'
     * $query->filterByEnglish('%fooValue%'); // WHERE English LIKE '%fooValue%'
     * </code>
     *
     * @param     string $english The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnglish($english = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($english)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $english)) {
                $english = str_replace('*', '%', $english);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENGLISH, $english, $comparison);
    }

    /**
     * Filter the query on the Grammar column
     *
     * Example usage:
     * <code>
     * $query->filterByGrammar('fooValue');   // WHERE Grammar = 'fooValue'
     * $query->filterByGrammar('%fooValue%'); // WHERE Grammar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $grammar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByGrammar($grammar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($grammar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $grammar)) {
                $grammar = str_replace('*', '%', $grammar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::GRAMMAR, $grammar, $comparison);
    }

    /**
     * Filter the query on the Gender column
     *
     * Example usage:
     * <code>
     * $query->filterByGender('fooValue');   // WHERE Gender = 'fooValue'
     * $query->filterByGender('%fooValue%'); // WHERE Gender LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gender The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByGender($gender = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gender)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gender)) {
                $gender = str_replace('*', '%', $gender);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::GENDER, $gender, $comparison);
    }

    /**
     * Filter the query on the FrenchDef column
     *
     * Example usage:
     * <code>
     * $query->filterByFrenchdef('fooValue');   // WHERE FrenchDef = 'fooValue'
     * $query->filterByFrenchdef('%fooValue%'); // WHERE FrenchDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $frenchdef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByFrenchdef($frenchdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($frenchdef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $frenchdef)) {
                $frenchdef = str_replace('*', '%', $frenchdef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::FRENCHDEF, $frenchdef, $comparison);
    }

    /**
     * Filter the query on the EnteredFR column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteredfr(1234); // WHERE EnteredFR = 1234
     * $query->filterByEnteredfr(array(12, 34)); // WHERE EnteredFR IN (12, 34)
     * $query->filterByEnteredfr(array('min' => 12)); // WHERE EnteredFR >= 12
     * $query->filterByEnteredfr(array('max' => 12)); // WHERE EnteredFR <= 12
     * </code>
     *
     * @param     mixed $enteredfr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnteredfr($enteredfr = null, $comparison = null)
    {
        if (is_array($enteredfr)) {
            $useMinMax = false;
            if (isset($enteredfr['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDFR, $enteredfr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteredfr['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDFR, $enteredfr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTEREDFR, $enteredfr, $comparison);
    }

    /**
     * Filter the query on the DateEnteredFR column
     *
     * Example usage:
     * <code>
     * $query->filterByDateenteredfr('2011-03-14'); // WHERE DateEnteredFR = '2011-03-14'
     * $query->filterByDateenteredfr('now'); // WHERE DateEnteredFR = '2011-03-14'
     * $query->filterByDateenteredfr(array('max' => 'yesterday')); // WHERE DateEnteredFR < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateenteredfr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateenteredfr($dateenteredfr = null, $comparison = null)
    {
        if (is_array($dateenteredfr)) {
            $useMinMax = false;
            if (isset($dateenteredfr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDFR, $dateenteredfr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateenteredfr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDFR, $dateenteredfr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTEREDFR, $dateenteredfr, $comparison);
    }

    /**
     * Filter the query on the ModifiedFR column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedfr(1234); // WHERE ModifiedFR = 1234
     * $query->filterByModifiedfr(array(12, 34)); // WHERE ModifiedFR IN (12, 34)
     * $query->filterByModifiedfr(array('min' => 12)); // WHERE ModifiedFR >= 12
     * $query->filterByModifiedfr(array('max' => 12)); // WHERE ModifiedFR <= 12
     * </code>
     *
     * @param     mixed $modifiedfr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModifiedfr($modifiedfr = null, $comparison = null)
    {
        if (is_array($modifiedfr)) {
            $useMinMax = false;
            if (isset($modifiedfr['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDFR, $modifiedfr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedfr['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDFR, $modifiedfr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIEDFR, $modifiedfr, $comparison);
    }

    /**
     * Filter the query on the DateModifiedFR column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodifiedfr('2011-03-14'); // WHERE DateModifiedFR = '2011-03-14'
     * $query->filterByDatemodifiedfr('now'); // WHERE DateModifiedFR = '2011-03-14'
     * $query->filterByDatemodifiedfr(array('max' => 'yesterday')); // WHERE DateModifiedFR < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodifiedfr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodifiedfr($datemodifiedfr = null, $comparison = null)
    {
        if (is_array($datemodifiedfr)) {
            $useMinMax = false;
            if (isset($datemodifiedfr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDFR, $datemodifiedfr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodifiedfr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDFR, $datemodifiedfr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDFR, $datemodifiedfr, $comparison);
    }

    /**
     * Filter the query on the ExpertFR column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertfr(1234); // WHERE ExpertFR = 1234
     * $query->filterByExpertfr(array(12, 34)); // WHERE ExpertFR IN (12, 34)
     * $query->filterByExpertfr(array('min' => 12)); // WHERE ExpertFR >= 12
     * $query->filterByExpertfr(array('max' => 12)); // WHERE ExpertFR <= 12
     * </code>
     *
     * @param     mixed $expertfr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpertfr($expertfr = null, $comparison = null)
    {
        if (is_array($expertfr)) {
            $useMinMax = false;
            if (isset($expertfr['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTFR, $expertfr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertfr['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTFR, $expertfr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERTFR, $expertfr, $comparison);
    }

    /**
     * Filter the query on the DateCheckedFR column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecheckedfr('2011-03-14'); // WHERE DateCheckedFR = '2011-03-14'
     * $query->filterByDatecheckedfr('now'); // WHERE DateCheckedFR = '2011-03-14'
     * $query->filterByDatecheckedfr(array('max' => 'yesterday')); // WHERE DateCheckedFR < '2011-03-13'
     * </code>
     *
     * @param     mixed $datecheckedfr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatecheckedfr($datecheckedfr = null, $comparison = null)
    {
        if (is_array($datecheckedfr)) {
            $useMinMax = false;
            if (isset($datecheckedfr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDFR, $datecheckedfr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecheckedfr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDFR, $datecheckedfr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKEDFR, $datecheckedfr, $comparison);
    }

    /**
     * Filter the query on the SpanishDef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpanishdef('fooValue');   // WHERE SpanishDef = 'fooValue'
     * $query->filterBySpanishdef('%fooValue%'); // WHERE SpanishDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spanishdef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterBySpanishdef($spanishdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spanishdef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spanishdef)) {
                $spanishdef = str_replace('*', '%', $spanishdef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::SPANISHDEF, $spanishdef, $comparison);
    }

    /**
     * Filter the query on the EnteredSP column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteredsp(1234); // WHERE EnteredSP = 1234
     * $query->filterByEnteredsp(array(12, 34)); // WHERE EnteredSP IN (12, 34)
     * $query->filterByEnteredsp(array('min' => 12)); // WHERE EnteredSP >= 12
     * $query->filterByEnteredsp(array('max' => 12)); // WHERE EnteredSP <= 12
     * </code>
     *
     * @param     mixed $enteredsp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnteredsp($enteredsp = null, $comparison = null)
    {
        if (is_array($enteredsp)) {
            $useMinMax = false;
            if (isset($enteredsp['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDSP, $enteredsp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteredsp['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDSP, $enteredsp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTEREDSP, $enteredsp, $comparison);
    }

    /**
     * Filter the query on the DateEnteredSP column
     *
     * Example usage:
     * <code>
     * $query->filterByDateenteredsp('2011-03-14'); // WHERE DateEnteredSP = '2011-03-14'
     * $query->filterByDateenteredsp('now'); // WHERE DateEnteredSP = '2011-03-14'
     * $query->filterByDateenteredsp(array('max' => 'yesterday')); // WHERE DateEnteredSP < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateenteredsp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateenteredsp($dateenteredsp = null, $comparison = null)
    {
        if (is_array($dateenteredsp)) {
            $useMinMax = false;
            if (isset($dateenteredsp['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDSP, $dateenteredsp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateenteredsp['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDSP, $dateenteredsp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTEREDSP, $dateenteredsp, $comparison);
    }

    /**
     * Filter the query on the ModifiedSP column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedsp(1234); // WHERE ModifiedSP = 1234
     * $query->filterByModifiedsp(array(12, 34)); // WHERE ModifiedSP IN (12, 34)
     * $query->filterByModifiedsp(array('min' => 12)); // WHERE ModifiedSP >= 12
     * $query->filterByModifiedsp(array('max' => 12)); // WHERE ModifiedSP <= 12
     * </code>
     *
     * @param     mixed $modifiedsp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModifiedsp($modifiedsp = null, $comparison = null)
    {
        if (is_array($modifiedsp)) {
            $useMinMax = false;
            if (isset($modifiedsp['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDSP, $modifiedsp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedsp['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDSP, $modifiedsp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIEDSP, $modifiedsp, $comparison);
    }

    /**
     * Filter the query on the DateModifiedSP column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodifiedsp('2011-03-14'); // WHERE DateModifiedSP = '2011-03-14'
     * $query->filterByDatemodifiedsp('now'); // WHERE DateModifiedSP = '2011-03-14'
     * $query->filterByDatemodifiedsp(array('max' => 'yesterday')); // WHERE DateModifiedSP < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodifiedsp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodifiedsp($datemodifiedsp = null, $comparison = null)
    {
        if (is_array($datemodifiedsp)) {
            $useMinMax = false;
            if (isset($datemodifiedsp['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDSP, $datemodifiedsp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodifiedsp['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDSP, $datemodifiedsp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDSP, $datemodifiedsp, $comparison);
    }

    /**
     * Filter the query on the ExpertSP column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertsp(1234); // WHERE ExpertSP = 1234
     * $query->filterByExpertsp(array(12, 34)); // WHERE ExpertSP IN (12, 34)
     * $query->filterByExpertsp(array('min' => 12)); // WHERE ExpertSP >= 12
     * $query->filterByExpertsp(array('max' => 12)); // WHERE ExpertSP <= 12
     * </code>
     *
     * @param     mixed $expertsp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpertsp($expertsp = null, $comparison = null)
    {
        if (is_array($expertsp)) {
            $useMinMax = false;
            if (isset($expertsp['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTSP, $expertsp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertsp['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTSP, $expertsp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERTSP, $expertsp, $comparison);
    }

    /**
     * Filter the query on the DateCheckedSP column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecheckedsp('fooValue');   // WHERE DateCheckedSP = 'fooValue'
     * $query->filterByDatecheckedsp('%fooValue%'); // WHERE DateCheckedSP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datecheckedsp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatecheckedsp($datecheckedsp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datecheckedsp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datecheckedsp)) {
                $datecheckedsp = str_replace('*', '%', $datecheckedsp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKEDSP, $datecheckedsp, $comparison);
    }

    /**
     * Filter the query on the PortugueseDef column
     *
     * Example usage:
     * <code>
     * $query->filterByPortuguesedef('fooValue');   // WHERE PortugueseDef = 'fooValue'
     * $query->filterByPortuguesedef('%fooValue%'); // WHERE PortugueseDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $portuguesedef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByPortuguesedef($portuguesedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($portuguesedef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $portuguesedef)) {
                $portuguesedef = str_replace('*', '%', $portuguesedef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::PORTUGUESEDEF, $portuguesedef, $comparison);
    }

    /**
     * Filter the query on the EnteredPR column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteredpr(1234); // WHERE EnteredPR = 1234
     * $query->filterByEnteredpr(array(12, 34)); // WHERE EnteredPR IN (12, 34)
     * $query->filterByEnteredpr(array('min' => 12)); // WHERE EnteredPR >= 12
     * $query->filterByEnteredpr(array('max' => 12)); // WHERE EnteredPR <= 12
     * </code>
     *
     * @param     mixed $enteredpr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnteredpr($enteredpr = null, $comparison = null)
    {
        if (is_array($enteredpr)) {
            $useMinMax = false;
            if (isset($enteredpr['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDPR, $enteredpr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteredpr['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDPR, $enteredpr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTEREDPR, $enteredpr, $comparison);
    }

    /**
     * Filter the query on the DateEnteredPR column
     *
     * Example usage:
     * <code>
     * $query->filterByDateenteredpr('2011-03-14'); // WHERE DateEnteredPR = '2011-03-14'
     * $query->filterByDateenteredpr('now'); // WHERE DateEnteredPR = '2011-03-14'
     * $query->filterByDateenteredpr(array('max' => 'yesterday')); // WHERE DateEnteredPR < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateenteredpr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateenteredpr($dateenteredpr = null, $comparison = null)
    {
        if (is_array($dateenteredpr)) {
            $useMinMax = false;
            if (isset($dateenteredpr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDPR, $dateenteredpr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateenteredpr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDPR, $dateenteredpr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTEREDPR, $dateenteredpr, $comparison);
    }

    /**
     * Filter the query on the ModifiedPR column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedpr(1234); // WHERE ModifiedPR = 1234
     * $query->filterByModifiedpr(array(12, 34)); // WHERE ModifiedPR IN (12, 34)
     * $query->filterByModifiedpr(array('min' => 12)); // WHERE ModifiedPR >= 12
     * $query->filterByModifiedpr(array('max' => 12)); // WHERE ModifiedPR <= 12
     * </code>
     *
     * @param     mixed $modifiedpr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModifiedpr($modifiedpr = null, $comparison = null)
    {
        if (is_array($modifiedpr)) {
            $useMinMax = false;
            if (isset($modifiedpr['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDPR, $modifiedpr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedpr['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDPR, $modifiedpr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIEDPR, $modifiedpr, $comparison);
    }

    /**
     * Filter the query on the DateModifiedPR column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodifiedpr('2011-03-14'); // WHERE DateModifiedPR = '2011-03-14'
     * $query->filterByDatemodifiedpr('now'); // WHERE DateModifiedPR = '2011-03-14'
     * $query->filterByDatemodifiedpr(array('max' => 'yesterday')); // WHERE DateModifiedPR < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodifiedpr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodifiedpr($datemodifiedpr = null, $comparison = null)
    {
        if (is_array($datemodifiedpr)) {
            $useMinMax = false;
            if (isset($datemodifiedpr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDPR, $datemodifiedpr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodifiedpr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDPR, $datemodifiedpr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDPR, $datemodifiedpr, $comparison);
    }

    /**
     * Filter the query on the ExpertPR column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertpr(1234); // WHERE ExpertPR = 1234
     * $query->filterByExpertpr(array(12, 34)); // WHERE ExpertPR IN (12, 34)
     * $query->filterByExpertpr(array('min' => 12)); // WHERE ExpertPR >= 12
     * $query->filterByExpertpr(array('max' => 12)); // WHERE ExpertPR <= 12
     * </code>
     *
     * @param     mixed $expertpr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpertpr($expertpr = null, $comparison = null)
    {
        if (is_array($expertpr)) {
            $useMinMax = false;
            if (isset($expertpr['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTPR, $expertpr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertpr['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTPR, $expertpr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERTPR, $expertpr, $comparison);
    }

    /**
     * Filter the query on the DateCheckedPR column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecheckedpr('2011-03-14'); // WHERE DateCheckedPR = '2011-03-14'
     * $query->filterByDatecheckedpr('now'); // WHERE DateCheckedPR = '2011-03-14'
     * $query->filterByDatecheckedpr(array('max' => 'yesterday')); // WHERE DateCheckedPR < '2011-03-13'
     * </code>
     *
     * @param     mixed $datecheckedpr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatecheckedpr($datecheckedpr = null, $comparison = null)
    {
        if (is_array($datecheckedpr)) {
            $useMinMax = false;
            if (isset($datecheckedpr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDPR, $datecheckedpr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecheckedpr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDPR, $datecheckedpr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKEDPR, $datecheckedpr, $comparison);
    }

    /**
     * Filter the query on the RussianDef column
     *
     * Example usage:
     * <code>
     * $query->filterByRussiandef('fooValue');   // WHERE RussianDef = 'fooValue'
     * $query->filterByRussiandef('%fooValue%'); // WHERE RussianDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $russiandef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByRussiandef($russiandef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($russiandef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $russiandef)) {
                $russiandef = str_replace('*', '%', $russiandef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::RUSSIANDEF, $russiandef, $comparison);
    }

    /**
     * Filter the query on the EnteredRus column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteredrus(1234); // WHERE EnteredRus = 1234
     * $query->filterByEnteredrus(array(12, 34)); // WHERE EnteredRus IN (12, 34)
     * $query->filterByEnteredrus(array('min' => 12)); // WHERE EnteredRus >= 12
     * $query->filterByEnteredrus(array('max' => 12)); // WHERE EnteredRus <= 12
     * </code>
     *
     * @param     mixed $enteredrus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnteredrus($enteredrus = null, $comparison = null)
    {
        if (is_array($enteredrus)) {
            $useMinMax = false;
            if (isset($enteredrus['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDRUS, $enteredrus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteredrus['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDRUS, $enteredrus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTEREDRUS, $enteredrus, $comparison);
    }

    /**
     * Filter the query on the DateEnteredRus column
     *
     * Example usage:
     * <code>
     * $query->filterByDateenteredrus('fooValue');   // WHERE DateEnteredRus = 'fooValue'
     * $query->filterByDateenteredrus('%fooValue%'); // WHERE DateEnteredRus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateenteredrus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateenteredrus($dateenteredrus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateenteredrus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateenteredrus)) {
                $dateenteredrus = str_replace('*', '%', $dateenteredrus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTEREDRUS, $dateenteredrus, $comparison);
    }

    /**
     * Filter the query on the ModifiedRus column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedrus(1234); // WHERE ModifiedRus = 1234
     * $query->filterByModifiedrus(array(12, 34)); // WHERE ModifiedRus IN (12, 34)
     * $query->filterByModifiedrus(array('min' => 12)); // WHERE ModifiedRus >= 12
     * $query->filterByModifiedrus(array('max' => 12)); // WHERE ModifiedRus <= 12
     * </code>
     *
     * @param     mixed $modifiedrus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModifiedrus($modifiedrus = null, $comparison = null)
    {
        if (is_array($modifiedrus)) {
            $useMinMax = false;
            if (isset($modifiedrus['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDRUS, $modifiedrus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedrus['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDRUS, $modifiedrus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIEDRUS, $modifiedrus, $comparison);
    }

    /**
     * Filter the query on the DateModifiedRus column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodifiedrus('2011-03-14'); // WHERE DateModifiedRus = '2011-03-14'
     * $query->filterByDatemodifiedrus('now'); // WHERE DateModifiedRus = '2011-03-14'
     * $query->filterByDatemodifiedrus(array('max' => 'yesterday')); // WHERE DateModifiedRus < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodifiedrus The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodifiedrus($datemodifiedrus = null, $comparison = null)
    {
        if (is_array($datemodifiedrus)) {
            $useMinMax = false;
            if (isset($datemodifiedrus['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDRUS, $datemodifiedrus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodifiedrus['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDRUS, $datemodifiedrus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDRUS, $datemodifiedrus, $comparison);
    }

    /**
     * Filter the query on the ExpertRus column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertrus(1234); // WHERE ExpertRus = 1234
     * $query->filterByExpertrus(array(12, 34)); // WHERE ExpertRus IN (12, 34)
     * $query->filterByExpertrus(array('min' => 12)); // WHERE ExpertRus >= 12
     * $query->filterByExpertrus(array('max' => 12)); // WHERE ExpertRus <= 12
     * </code>
     *
     * @param     mixed $expertrus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpertrus($expertrus = null, $comparison = null)
    {
        if (is_array($expertrus)) {
            $useMinMax = false;
            if (isset($expertrus['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTRUS, $expertrus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertrus['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTRUS, $expertrus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERTRUS, $expertrus, $comparison);
    }

    /**
     * Filter the query on the DateCheckedRus column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecheckedrus('2011-03-14'); // WHERE DateCheckedRus = '2011-03-14'
     * $query->filterByDatecheckedrus('now'); // WHERE DateCheckedRus = '2011-03-14'
     * $query->filterByDatecheckedrus(array('max' => 'yesterday')); // WHERE DateCheckedRus < '2011-03-13'
     * </code>
     *
     * @param     mixed $datecheckedrus The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatecheckedrus($datecheckedrus = null, $comparison = null)
    {
        if (is_array($datecheckedrus)) {
            $useMinMax = false;
            if (isset($datecheckedrus['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDRUS, $datecheckedrus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecheckedrus['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDRUS, $datecheckedrus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKEDRUS, $datecheckedrus, $comparison);
    }

    /**
     * Filter the query on the CyrillicDef column
     *
     * Example usage:
     * <code>
     * $query->filterByCyrillicdef('fooValue');   // WHERE CyrillicDef = 'fooValue'
     * $query->filterByCyrillicdef('%fooValue%'); // WHERE CyrillicDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cyrillicdef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByCyrillicdef($cyrillicdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cyrillicdef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cyrillicdef)) {
                $cyrillicdef = str_replace('*', '%', $cyrillicdef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::CYRILLICDEF, $cyrillicdef, $comparison);
    }

    /**
     * Filter the query on the EnteredCyr column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteredcyr(1234); // WHERE EnteredCyr = 1234
     * $query->filterByEnteredcyr(array(12, 34)); // WHERE EnteredCyr IN (12, 34)
     * $query->filterByEnteredcyr(array('min' => 12)); // WHERE EnteredCyr >= 12
     * $query->filterByEnteredcyr(array('max' => 12)); // WHERE EnteredCyr <= 12
     * </code>
     *
     * @param     mixed $enteredcyr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnteredcyr($enteredcyr = null, $comparison = null)
    {
        if (is_array($enteredcyr)) {
            $useMinMax = false;
            if (isset($enteredcyr['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDCYR, $enteredcyr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteredcyr['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDCYR, $enteredcyr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTEREDCYR, $enteredcyr, $comparison);
    }

    /**
     * Filter the query on the DateEnteredCyr column
     *
     * Example usage:
     * <code>
     * $query->filterByDateenteredcyr('2011-03-14'); // WHERE DateEnteredCyr = '2011-03-14'
     * $query->filterByDateenteredcyr('now'); // WHERE DateEnteredCyr = '2011-03-14'
     * $query->filterByDateenteredcyr(array('max' => 'yesterday')); // WHERE DateEnteredCyr < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateenteredcyr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateenteredcyr($dateenteredcyr = null, $comparison = null)
    {
        if (is_array($dateenteredcyr)) {
            $useMinMax = false;
            if (isset($dateenteredcyr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDCYR, $dateenteredcyr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateenteredcyr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDCYR, $dateenteredcyr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTEREDCYR, $dateenteredcyr, $comparison);
    }

    /**
     * Filter the query on the ModifiedCyr column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedcyr(1234); // WHERE ModifiedCyr = 1234
     * $query->filterByModifiedcyr(array(12, 34)); // WHERE ModifiedCyr IN (12, 34)
     * $query->filterByModifiedcyr(array('min' => 12)); // WHERE ModifiedCyr >= 12
     * $query->filterByModifiedcyr(array('max' => 12)); // WHERE ModifiedCyr <= 12
     * </code>
     *
     * @param     mixed $modifiedcyr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModifiedcyr($modifiedcyr = null, $comparison = null)
    {
        if (is_array($modifiedcyr)) {
            $useMinMax = false;
            if (isset($modifiedcyr['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDCYR, $modifiedcyr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedcyr['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDCYR, $modifiedcyr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIEDCYR, $modifiedcyr, $comparison);
    }

    /**
     * Filter the query on the DateModifiedCyr column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodifiedcyr('2011-03-14'); // WHERE DateModifiedCyr = '2011-03-14'
     * $query->filterByDatemodifiedcyr('now'); // WHERE DateModifiedCyr = '2011-03-14'
     * $query->filterByDatemodifiedcyr(array('max' => 'yesterday')); // WHERE DateModifiedCyr < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodifiedcyr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodifiedcyr($datemodifiedcyr = null, $comparison = null)
    {
        if (is_array($datemodifiedcyr)) {
            $useMinMax = false;
            if (isset($datemodifiedcyr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDCYR, $datemodifiedcyr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodifiedcyr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDCYR, $datemodifiedcyr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDCYR, $datemodifiedcyr, $comparison);
    }

    /**
     * Filter the query on the ExpertCyr column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertcyr(1234); // WHERE ExpertCyr = 1234
     * $query->filterByExpertcyr(array(12, 34)); // WHERE ExpertCyr IN (12, 34)
     * $query->filterByExpertcyr(array('min' => 12)); // WHERE ExpertCyr >= 12
     * $query->filterByExpertcyr(array('max' => 12)); // WHERE ExpertCyr <= 12
     * </code>
     *
     * @param     mixed $expertcyr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpertcyr($expertcyr = null, $comparison = null)
    {
        if (is_array($expertcyr)) {
            $useMinMax = false;
            if (isset($expertcyr['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTCYR, $expertcyr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertcyr['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTCYR, $expertcyr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERTCYR, $expertcyr, $comparison);
    }

    /**
     * Filter the query on the DateCheckedCyr column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecheckedcyr('2011-03-14'); // WHERE DateCheckedCyr = '2011-03-14'
     * $query->filterByDatecheckedcyr('now'); // WHERE DateCheckedCyr = '2011-03-14'
     * $query->filterByDatecheckedcyr(array('max' => 'yesterday')); // WHERE DateCheckedCyr < '2011-03-13'
     * </code>
     *
     * @param     mixed $datecheckedcyr The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatecheckedcyr($datecheckedcyr = null, $comparison = null)
    {
        if (is_array($datecheckedcyr)) {
            $useMinMax = false;
            if (isset($datecheckedcyr['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDCYR, $datecheckedcyr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecheckedcyr['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDCYR, $datecheckedcyr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKEDCYR, $datecheckedcyr, $comparison);
    }

    /**
     * Filter the query on the ChineseDef column
     *
     * Example usage:
     * <code>
     * $query->filterByChinesedef('fooValue');   // WHERE ChineseDef = 'fooValue'
     * $query->filterByChinesedef('%fooValue%'); // WHERE ChineseDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chinesedef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByChinesedef($chinesedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chinesedef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chinesedef)) {
                $chinesedef = str_replace('*', '%', $chinesedef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::CHINESEDEF, $chinesedef, $comparison);
    }

    /**
     * Filter the query on the EnteredChi column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteredchi(1234); // WHERE EnteredChi = 1234
     * $query->filterByEnteredchi(array(12, 34)); // WHERE EnteredChi IN (12, 34)
     * $query->filterByEnteredchi(array('min' => 12)); // WHERE EnteredChi >= 12
     * $query->filterByEnteredchi(array('max' => 12)); // WHERE EnteredChi <= 12
     * </code>
     *
     * @param     mixed $enteredchi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByEnteredchi($enteredchi = null, $comparison = null)
    {
        if (is_array($enteredchi)) {
            $useMinMax = false;
            if (isset($enteredchi['min'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDCHI, $enteredchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteredchi['max'])) {
                $this->addUsingAlias(GlossaryPeer::ENTEREDCHI, $enteredchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::ENTEREDCHI, $enteredchi, $comparison);
    }

    /**
     * Filter the query on the DateEnteredChi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateenteredchi('2011-03-14'); // WHERE DateEnteredChi = '2011-03-14'
     * $query->filterByDateenteredchi('now'); // WHERE DateEnteredChi = '2011-03-14'
     * $query->filterByDateenteredchi(array('max' => 'yesterday')); // WHERE DateEnteredChi < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateenteredchi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDateenteredchi($dateenteredchi = null, $comparison = null)
    {
        if (is_array($dateenteredchi)) {
            $useMinMax = false;
            if (isset($dateenteredchi['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDCHI, $dateenteredchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateenteredchi['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEENTEREDCHI, $dateenteredchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEENTEREDCHI, $dateenteredchi, $comparison);
    }

    /**
     * Filter the query on the ModifiedChi column
     *
     * Example usage:
     * <code>
     * $query->filterByModifiedchi(1234); // WHERE ModifiedChi = 1234
     * $query->filterByModifiedchi(array(12, 34)); // WHERE ModifiedChi IN (12, 34)
     * $query->filterByModifiedchi(array('min' => 12)); // WHERE ModifiedChi >= 12
     * $query->filterByModifiedchi(array('max' => 12)); // WHERE ModifiedChi <= 12
     * </code>
     *
     * @param     mixed $modifiedchi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByModifiedchi($modifiedchi = null, $comparison = null)
    {
        if (is_array($modifiedchi)) {
            $useMinMax = false;
            if (isset($modifiedchi['min'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDCHI, $modifiedchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modifiedchi['max'])) {
                $this->addUsingAlias(GlossaryPeer::MODIFIEDCHI, $modifiedchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::MODIFIEDCHI, $modifiedchi, $comparison);
    }

    /**
     * Filter the query on the DateModifiedChi column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodifiedchi('2011-03-14'); // WHERE DateModifiedChi = '2011-03-14'
     * $query->filterByDatemodifiedchi('now'); // WHERE DateModifiedChi = '2011-03-14'
     * $query->filterByDatemodifiedchi(array('max' => 'yesterday')); // WHERE DateModifiedChi < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodifiedchi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatemodifiedchi($datemodifiedchi = null, $comparison = null)
    {
        if (is_array($datemodifiedchi)) {
            $useMinMax = false;
            if (isset($datemodifiedchi['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDCHI, $datemodifiedchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodifiedchi['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDCHI, $datemodifiedchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATEMODIFIEDCHI, $datemodifiedchi, $comparison);
    }

    /**
     * Filter the query on the ExpertChi column
     *
     * Example usage:
     * <code>
     * $query->filterByExpertchi(1234); // WHERE ExpertChi = 1234
     * $query->filterByExpertchi(array(12, 34)); // WHERE ExpertChi IN (12, 34)
     * $query->filterByExpertchi(array('min' => 12)); // WHERE ExpertChi >= 12
     * $query->filterByExpertchi(array('max' => 12)); // WHERE ExpertChi <= 12
     * </code>
     *
     * @param     mixed $expertchi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByExpertchi($expertchi = null, $comparison = null)
    {
        if (is_array($expertchi)) {
            $useMinMax = false;
            if (isset($expertchi['min'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTCHI, $expertchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expertchi['max'])) {
                $this->addUsingAlias(GlossaryPeer::EXPERTCHI, $expertchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::EXPERTCHI, $expertchi, $comparison);
    }

    /**
     * Filter the query on the DateCheckedChi column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecheckedchi('2011-03-14'); // WHERE DateCheckedChi = '2011-03-14'
     * $query->filterByDatecheckedchi('now'); // WHERE DateCheckedChi = '2011-03-14'
     * $query->filterByDatecheckedchi(array('max' => 'yesterday')); // WHERE DateCheckedChi < '2011-03-13'
     * </code>
     *
     * @param     mixed $datecheckedchi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByDatecheckedchi($datecheckedchi = null, $comparison = null)
    {
        if (is_array($datecheckedchi)) {
            $useMinMax = false;
            if (isset($datecheckedchi['min'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDCHI, $datecheckedchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecheckedchi['max'])) {
                $this->addUsingAlias(GlossaryPeer::DATECHECKEDCHI, $datecheckedchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::DATECHECKEDCHI, $datecheckedchi, $comparison);
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
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(GlossaryPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(GlossaryPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GlossaryPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Glossary $glossary Object to remove from the list of results
     *
     * @return GlossaryQuery The current query, for fluid interface
     */
    public function prune($glossary = null)
    {
        if ($glossary) {
            $this->addUsingAlias(GlossaryPeer::AUTOCTR, $glossary->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
