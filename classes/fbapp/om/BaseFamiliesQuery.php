<?php


/**
 * Base class that represents a query for the 'families' table.
 *
 *
 *
 * @method FamiliesQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method FamiliesQuery orderBySortid($order = Criteria::ASC) Order by the SortID column
 * @method FamiliesQuery orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method FamiliesQuery orderByAuthoryear($order = Criteria::ASC) Order by the AuthorYear column
 * @method FamiliesQuery orderByQualification($order = Criteria::ASC) Order by the Qualification column
 * @method FamiliesQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method FamiliesQuery orderByFamiliesrefno($order = Criteria::ASC) Order by the FamiliesRefNo column
 * @method FamiliesQuery orderBySynonym($order = Criteria::ASC) Order by the Synonym column
 * @method FamiliesQuery orderByOrder($order = Criteria::ASC) Order by the Order column
 * @method FamiliesQuery orderByOrdnum($order = Criteria::ASC) Order by the Ordnum column
 * @method FamiliesQuery orderByClass($order = Criteria::ASC) Order by the Class column
 * @method FamiliesQuery orderByClassnum($order = Criteria::ASC) Order by the ClassNum column
 * @method FamiliesQuery orderByGenera($order = Criteria::ASC) Order by the Genera column
 * @method FamiliesQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method FamiliesQuery orderByBodyshapei($order = Criteria::ASC) Order by the BodyShapeI column
 * @method FamiliesQuery orderBySpeciescount($order = Criteria::ASC) Order by the SpeciesCount column
 * @method FamiliesQuery orderByMarine($order = Criteria::ASC) Order by the Marine column
 * @method FamiliesQuery orderByBrackish($order = Criteria::ASC) Order by the Brackish column
 * @method FamiliesQuery orderByFreshwater($order = Criteria::ASC) Order by the Freshwater column
 * @method FamiliesQuery orderByWatersalinity($order = Criteria::ASC) Order by the WaterSalinity column
 * @method FamiliesQuery orderByAquarium($order = Criteria::ASC) Order by the Aquarium column
 * @method FamiliesQuery orderByReprguild($order = Criteria::ASC) Order by the ReprGuild column
 * @method FamiliesQuery orderBySwimmode($order = Criteria::ASC) Order by the SwimMode column
 * @method FamiliesQuery orderByActivity($order = Criteria::ASC) Order by the Activity column
 * @method FamiliesQuery orderByPeriodrange($order = Criteria::ASC) Order by the PeriodRange column
 * @method FamiliesQuery orderByPeriod($order = Criteria::ASC) Order by the Period column
 * @method FamiliesQuery orderByEpochrange($order = Criteria::ASC) Order by the EpochRange column
 * @method FamiliesQuery orderByEpoch($order = Criteria::ASC) Order by the Epoch column
 * @method FamiliesQuery orderByFossilref($order = Criteria::ASC) Order by the FossilRef column
 * @method FamiliesQuery orderByFampic($order = Criteria::ASC) Order by the FamPic column
 * @method FamiliesQuery orderByLarvpic($order = Criteria::ASC) Order by the LarvPic column
 * @method FamiliesQuery orderByValidgenera($order = Criteria::ASC) Order by the ValidGenera column
 * @method FamiliesQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method FamiliesQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method FamiliesQuery orderByAspinesmin($order = Criteria::ASC) Order by the AspinesMin column
 * @method FamiliesQuery orderByAspinesmax($order = Criteria::ASC) Order by the AspinesMax column
 * @method FamiliesQuery orderByAraysmin($order = Criteria::ASC) Order by the AraysMin column
 * @method FamiliesQuery orderByAraysmax($order = Criteria::ASC) Order by the AraysMax column
 * @method FamiliesQuery orderByDspinesmin($order = Criteria::ASC) Order by the DspinesMin column
 * @method FamiliesQuery orderByDspinesmax($order = Criteria::ASC) Order by the DspinesMax column
 * @method FamiliesQuery orderByDraysmin($order = Criteria::ASC) Order by the DraysMin column
 * @method FamiliesQuery orderByDraysmax($order = Criteria::ASC) Order by the DraysMax column
 * @method FamiliesQuery orderByNorthernmost($order = Criteria::ASC) Order by the Northernmost column
 * @method FamiliesQuery orderByNorthsouthn($order = Criteria::ASC) Order by the NorthSouthN column
 * @method FamiliesQuery orderBySouthernmost($order = Criteria::ASC) Order by the Southernmost column
 * @method FamiliesQuery orderByNorthsouths($order = Criteria::ASC) Order by the NorthSouthS column
 * @method FamiliesQuery orderByWesternmost($order = Criteria::ASC) Order by the Westernmost column
 * @method FamiliesQuery orderByWesteastw($order = Criteria::ASC) Order by the WestEastW column
 * @method FamiliesQuery orderByEasternmost($order = Criteria::ASC) Order by the Easternmost column
 * @method FamiliesQuery orderByWesteaste($order = Criteria::ASC) Order by the WestEastE column
 * @method FamiliesQuery orderByPhiprime($order = Criteria::ASC) Order by the PhiPrime column
 * @method FamiliesQuery orderByDivision($order = Criteria::ASC) Order by the Division column
 * @method FamiliesQuery orderByExperts($order = Criteria::ASC) Order by the Experts column
 * @method FamiliesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method FamiliesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method FamiliesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method FamiliesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method FamiliesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method FamiliesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method FamiliesQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method FamiliesQuery orderByEtymology($order = Criteria::ASC) Order by the Etymology column
 * @method FamiliesQuery orderByFamilyexpert($order = Criteria::ASC) Order by the FamilyExpert column
 * @method FamiliesQuery orderByFbcontact($order = Criteria::ASC) Order by the FBContact column
 * @method FamiliesQuery orderByClofexpert($order = Criteria::ASC) Order by the CLOFExpert column
 * @method FamiliesQuery orderByCommonnameGreek($order = Criteria::ASC) Order by the CommonName_Greek column
 * @method FamiliesQuery orderByCommonnameGreekU($order = Criteria::ASC) Order by the CommonName_Greek_u column
 * @method FamiliesQuery orderByCommonnameRussian($order = Criteria::ASC) Order by the CommonName_Russian column
 * @method FamiliesQuery orderByCommonnameRussianOriginal($order = Criteria::ASC) Order by the CommonName_Russian_original column
 * @method FamiliesQuery orderByCommonnameGerman($order = Criteria::ASC) Order by the CommonName_German column
 * @method FamiliesQuery orderByCommonnameFrench($order = Criteria::ASC) Order by the CommonName_French column
 * @method FamiliesQuery orderByCommonnameItalian($order = Criteria::ASC) Order by the CommonName_Italian column
 * @method FamiliesQuery orderByCommonnameDutch($order = Criteria::ASC) Order by the CommonName_Dutch column
 * @method FamiliesQuery orderByCommonnameChinese($order = Criteria::ASC) Order by the CommonName_Chinese column
 * @method FamiliesQuery orderByCommonnameChineseU($order = Criteria::ASC) Order by the CommonName_Chinese_u column
 * @method FamiliesQuery orderByCommonnameSpanish($order = Criteria::ASC) Order by the CommonName_Spanish column
 * @method FamiliesQuery orderByCommonnamePortuguese($order = Criteria::ASC) Order by the CommonName_Portuguese column
 * @method FamiliesQuery orderByCommonnameSwedish($order = Criteria::ASC) Order by the CommonName_Swedish column
 *
 * @method FamiliesQuery groupByFamcode() Group by the FamCode column
 * @method FamiliesQuery groupBySortid() Group by the SortID column
 * @method FamiliesQuery groupByFamily() Group by the Family column
 * @method FamiliesQuery groupByAuthoryear() Group by the AuthorYear column
 * @method FamiliesQuery groupByQualification() Group by the Qualification column
 * @method FamiliesQuery groupByCommonname() Group by the CommonName column
 * @method FamiliesQuery groupByFamiliesrefno() Group by the FamiliesRefNo column
 * @method FamiliesQuery groupBySynonym() Group by the Synonym column
 * @method FamiliesQuery groupByOrder() Group by the Order column
 * @method FamiliesQuery groupByOrdnum() Group by the Ordnum column
 * @method FamiliesQuery groupByClass() Group by the Class column
 * @method FamiliesQuery groupByClassnum() Group by the ClassNum column
 * @method FamiliesQuery groupByGenera() Group by the Genera column
 * @method FamiliesQuery groupBySpecies() Group by the Species column
 * @method FamiliesQuery groupByBodyshapei() Group by the BodyShapeI column
 * @method FamiliesQuery groupBySpeciescount() Group by the SpeciesCount column
 * @method FamiliesQuery groupByMarine() Group by the Marine column
 * @method FamiliesQuery groupByBrackish() Group by the Brackish column
 * @method FamiliesQuery groupByFreshwater() Group by the Freshwater column
 * @method FamiliesQuery groupByWatersalinity() Group by the WaterSalinity column
 * @method FamiliesQuery groupByAquarium() Group by the Aquarium column
 * @method FamiliesQuery groupByReprguild() Group by the ReprGuild column
 * @method FamiliesQuery groupBySwimmode() Group by the SwimMode column
 * @method FamiliesQuery groupByActivity() Group by the Activity column
 * @method FamiliesQuery groupByPeriodrange() Group by the PeriodRange column
 * @method FamiliesQuery groupByPeriod() Group by the Period column
 * @method FamiliesQuery groupByEpochrange() Group by the EpochRange column
 * @method FamiliesQuery groupByEpoch() Group by the Epoch column
 * @method FamiliesQuery groupByFossilref() Group by the FossilRef column
 * @method FamiliesQuery groupByFampic() Group by the FamPic column
 * @method FamiliesQuery groupByLarvpic() Group by the LarvPic column
 * @method FamiliesQuery groupByValidgenera() Group by the ValidGenera column
 * @method FamiliesQuery groupByComplete() Group by the Complete column
 * @method FamiliesQuery groupBySource() Group by the Source column
 * @method FamiliesQuery groupByAspinesmin() Group by the AspinesMin column
 * @method FamiliesQuery groupByAspinesmax() Group by the AspinesMax column
 * @method FamiliesQuery groupByAraysmin() Group by the AraysMin column
 * @method FamiliesQuery groupByAraysmax() Group by the AraysMax column
 * @method FamiliesQuery groupByDspinesmin() Group by the DspinesMin column
 * @method FamiliesQuery groupByDspinesmax() Group by the DspinesMax column
 * @method FamiliesQuery groupByDraysmin() Group by the DraysMin column
 * @method FamiliesQuery groupByDraysmax() Group by the DraysMax column
 * @method FamiliesQuery groupByNorthernmost() Group by the Northernmost column
 * @method FamiliesQuery groupByNorthsouthn() Group by the NorthSouthN column
 * @method FamiliesQuery groupBySouthernmost() Group by the Southernmost column
 * @method FamiliesQuery groupByNorthsouths() Group by the NorthSouthS column
 * @method FamiliesQuery groupByWesternmost() Group by the Westernmost column
 * @method FamiliesQuery groupByWesteastw() Group by the WestEastW column
 * @method FamiliesQuery groupByEasternmost() Group by the Easternmost column
 * @method FamiliesQuery groupByWesteaste() Group by the WestEastE column
 * @method FamiliesQuery groupByPhiprime() Group by the PhiPrime column
 * @method FamiliesQuery groupByDivision() Group by the Division column
 * @method FamiliesQuery groupByExperts() Group by the Experts column
 * @method FamiliesQuery groupByEntered() Group by the Entered column
 * @method FamiliesQuery groupByDateentered() Group by the DateEntered column
 * @method FamiliesQuery groupByModified() Group by the Modified column
 * @method FamiliesQuery groupByDatemodified() Group by the DateModified column
 * @method FamiliesQuery groupByExpert() Group by the Expert column
 * @method FamiliesQuery groupByDatechecked() Group by the DateChecked column
 * @method FamiliesQuery groupByRemark() Group by the Remark column
 * @method FamiliesQuery groupByEtymology() Group by the Etymology column
 * @method FamiliesQuery groupByFamilyexpert() Group by the FamilyExpert column
 * @method FamiliesQuery groupByFbcontact() Group by the FBContact column
 * @method FamiliesQuery groupByClofexpert() Group by the CLOFExpert column
 * @method FamiliesQuery groupByCommonnameGreek() Group by the CommonName_Greek column
 * @method FamiliesQuery groupByCommonnameGreekU() Group by the CommonName_Greek_u column
 * @method FamiliesQuery groupByCommonnameRussian() Group by the CommonName_Russian column
 * @method FamiliesQuery groupByCommonnameRussianOriginal() Group by the CommonName_Russian_original column
 * @method FamiliesQuery groupByCommonnameGerman() Group by the CommonName_German column
 * @method FamiliesQuery groupByCommonnameFrench() Group by the CommonName_French column
 * @method FamiliesQuery groupByCommonnameItalian() Group by the CommonName_Italian column
 * @method FamiliesQuery groupByCommonnameDutch() Group by the CommonName_Dutch column
 * @method FamiliesQuery groupByCommonnameChinese() Group by the CommonName_Chinese column
 * @method FamiliesQuery groupByCommonnameChineseU() Group by the CommonName_Chinese_u column
 * @method FamiliesQuery groupByCommonnameSpanish() Group by the CommonName_Spanish column
 * @method FamiliesQuery groupByCommonnamePortuguese() Group by the CommonName_Portuguese column
 * @method FamiliesQuery groupByCommonnameSwedish() Group by the CommonName_Swedish column
 *
 * @method FamiliesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FamiliesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FamiliesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Families findOne(PropelPDO $con = null) Return the first Families matching the query
 * @method Families findOneOrCreate(PropelPDO $con = null) Return the first Families matching the query, or a new Families object populated from the query conditions when no match is found
 *
 * @method Families findOneByFamcode(int $FamCode) Return the first Families filtered by the FamCode column
 * @method Families findOneBySortid(int $SortID) Return the first Families filtered by the SortID column
 * @method Families findOneByAuthoryear(string $AuthorYear) Return the first Families filtered by the AuthorYear column
 * @method Families findOneByQualification(string $Qualification) Return the first Families filtered by the Qualification column
 * @method Families findOneByCommonname(string $CommonName) Return the first Families filtered by the CommonName column
 * @method Families findOneByFamiliesrefno(int $FamiliesRefNo) Return the first Families filtered by the FamiliesRefNo column
 * @method Families findOneBySynonym(int $Synonym) Return the first Families filtered by the Synonym column
 * @method Families findOneByOrder(string $Order) Return the first Families filtered by the Order column
 * @method Families findOneByOrdnum(int $Ordnum) Return the first Families filtered by the Ordnum column
 * @method Families findOneByClass(string $Class) Return the first Families filtered by the Class column
 * @method Families findOneByClassnum(int $ClassNum) Return the first Families filtered by the ClassNum column
 * @method Families findOneByGenera(int $Genera) Return the first Families filtered by the Genera column
 * @method Families findOneBySpecies(int $Species) Return the first Families filtered by the Species column
 * @method Families findOneByBodyshapei(string $BodyShapeI) Return the first Families filtered by the BodyShapeI column
 * @method Families findOneBySpeciescount(int $SpeciesCount) Return the first Families filtered by the SpeciesCount column
 * @method Families findOneByMarine(boolean $Marine) Return the first Families filtered by the Marine column
 * @method Families findOneByBrackish(boolean $Brackish) Return the first Families filtered by the Brackish column
 * @method Families findOneByFreshwater(boolean $Freshwater) Return the first Families filtered by the Freshwater column
 * @method Families findOneByWatersalinity(string $WaterSalinity) Return the first Families filtered by the WaterSalinity column
 * @method Families findOneByAquarium(string $Aquarium) Return the first Families filtered by the Aquarium column
 * @method Families findOneByReprguild(string $ReprGuild) Return the first Families filtered by the ReprGuild column
 * @method Families findOneBySwimmode(string $SwimMode) Return the first Families filtered by the SwimMode column
 * @method Families findOneByActivity(string $Activity) Return the first Families filtered by the Activity column
 * @method Families findOneByPeriodrange(string $PeriodRange) Return the first Families filtered by the PeriodRange column
 * @method Families findOneByPeriod(string $Period) Return the first Families filtered by the Period column
 * @method Families findOneByEpochrange(string $EpochRange) Return the first Families filtered by the EpochRange column
 * @method Families findOneByEpoch(string $Epoch) Return the first Families filtered by the Epoch column
 * @method Families findOneByFossilref(int $FossilRef) Return the first Families filtered by the FossilRef column
 * @method Families findOneByFampic(string $FamPic) Return the first Families filtered by the FamPic column
 * @method Families findOneByLarvpic(string $LarvPic) Return the first Families filtered by the LarvPic column
 * @method Families findOneByValidgenera(int $ValidGenera) Return the first Families filtered by the ValidGenera column
 * @method Families findOneByComplete(boolean $Complete) Return the first Families filtered by the Complete column
 * @method Families findOneBySource(string $Source) Return the first Families filtered by the Source column
 * @method Families findOneByAspinesmin(int $AspinesMin) Return the first Families filtered by the AspinesMin column
 * @method Families findOneByAspinesmax(int $AspinesMax) Return the first Families filtered by the AspinesMax column
 * @method Families findOneByAraysmin(int $AraysMin) Return the first Families filtered by the AraysMin column
 * @method Families findOneByAraysmax(int $AraysMax) Return the first Families filtered by the AraysMax column
 * @method Families findOneByDspinesmin(int $DspinesMin) Return the first Families filtered by the DspinesMin column
 * @method Families findOneByDspinesmax(int $DspinesMax) Return the first Families filtered by the DspinesMax column
 * @method Families findOneByDraysmin(int $DraysMin) Return the first Families filtered by the DraysMin column
 * @method Families findOneByDraysmax(int $DraysMax) Return the first Families filtered by the DraysMax column
 * @method Families findOneByNorthernmost(int $Northernmost) Return the first Families filtered by the Northernmost column
 * @method Families findOneByNorthsouthn(string $NorthSouthN) Return the first Families filtered by the NorthSouthN column
 * @method Families findOneBySouthernmost(int $Southernmost) Return the first Families filtered by the Southernmost column
 * @method Families findOneByNorthsouths(string $NorthSouthS) Return the first Families filtered by the NorthSouthS column
 * @method Families findOneByWesternmost(int $Westernmost) Return the first Families filtered by the Westernmost column
 * @method Families findOneByWesteastw(string $WestEastW) Return the first Families filtered by the WestEastW column
 * @method Families findOneByEasternmost(int $Easternmost) Return the first Families filtered by the Easternmost column
 * @method Families findOneByWesteaste(string $WestEastE) Return the first Families filtered by the WestEastE column
 * @method Families findOneByPhiprime(double $PhiPrime) Return the first Families filtered by the PhiPrime column
 * @method Families findOneByDivision(string $Division) Return the first Families filtered by the Division column
 * @method Families findOneByExperts(string $Experts) Return the first Families filtered by the Experts column
 * @method Families findOneByEntered(int $Entered) Return the first Families filtered by the Entered column
 * @method Families findOneByDateentered(string $DateEntered) Return the first Families filtered by the DateEntered column
 * @method Families findOneByModified(int $Modified) Return the first Families filtered by the Modified column
 * @method Families findOneByDatemodified(string $DateModified) Return the first Families filtered by the DateModified column
 * @method Families findOneByExpert(int $Expert) Return the first Families filtered by the Expert column
 * @method Families findOneByDatechecked(string $DateChecked) Return the first Families filtered by the DateChecked column
 * @method Families findOneByRemark(string $Remark) Return the first Families filtered by the Remark column
 * @method Families findOneByEtymology(string $Etymology) Return the first Families filtered by the Etymology column
 * @method Families findOneByFamilyexpert(int $FamilyExpert) Return the first Families filtered by the FamilyExpert column
 * @method Families findOneByFbcontact(int $FBContact) Return the first Families filtered by the FBContact column
 * @method Families findOneByClofexpert(string $CLOFExpert) Return the first Families filtered by the CLOFExpert column
 * @method Families findOneByCommonnameGreek(string $CommonName_Greek) Return the first Families filtered by the CommonName_Greek column
 * @method Families findOneByCommonnameGreekU(string $CommonName_Greek_u) Return the first Families filtered by the CommonName_Greek_u column
 * @method Families findOneByCommonnameRussian(string $CommonName_Russian) Return the first Families filtered by the CommonName_Russian column
 * @method Families findOneByCommonnameRussianOriginal(string $CommonName_Russian_original) Return the first Families filtered by the CommonName_Russian_original column
 * @method Families findOneByCommonnameGerman(string $CommonName_German) Return the first Families filtered by the CommonName_German column
 * @method Families findOneByCommonnameFrench(string $CommonName_French) Return the first Families filtered by the CommonName_French column
 * @method Families findOneByCommonnameItalian(string $CommonName_Italian) Return the first Families filtered by the CommonName_Italian column
 * @method Families findOneByCommonnameDutch(string $CommonName_Dutch) Return the first Families filtered by the CommonName_Dutch column
 * @method Families findOneByCommonnameChinese(string $CommonName_Chinese) Return the first Families filtered by the CommonName_Chinese column
 * @method Families findOneByCommonnameChineseU(string $CommonName_Chinese_u) Return the first Families filtered by the CommonName_Chinese_u column
 * @method Families findOneByCommonnameSpanish(string $CommonName_Spanish) Return the first Families filtered by the CommonName_Spanish column
 * @method Families findOneByCommonnamePortuguese(string $CommonName_Portuguese) Return the first Families filtered by the CommonName_Portuguese column
 * @method Families findOneByCommonnameSwedish(string $CommonName_Swedish) Return the first Families filtered by the CommonName_Swedish column
 *
 * @method array findByFamcode(int $FamCode) Return Families objects filtered by the FamCode column
 * @method array findBySortid(int $SortID) Return Families objects filtered by the SortID column
 * @method array findByFamily(string $Family) Return Families objects filtered by the Family column
 * @method array findByAuthoryear(string $AuthorYear) Return Families objects filtered by the AuthorYear column
 * @method array findByQualification(string $Qualification) Return Families objects filtered by the Qualification column
 * @method array findByCommonname(string $CommonName) Return Families objects filtered by the CommonName column
 * @method array findByFamiliesrefno(int $FamiliesRefNo) Return Families objects filtered by the FamiliesRefNo column
 * @method array findBySynonym(int $Synonym) Return Families objects filtered by the Synonym column
 * @method array findByOrder(string $Order) Return Families objects filtered by the Order column
 * @method array findByOrdnum(int $Ordnum) Return Families objects filtered by the Ordnum column
 * @method array findByClass(string $Class) Return Families objects filtered by the Class column
 * @method array findByClassnum(int $ClassNum) Return Families objects filtered by the ClassNum column
 * @method array findByGenera(int $Genera) Return Families objects filtered by the Genera column
 * @method array findBySpecies(int $Species) Return Families objects filtered by the Species column
 * @method array findByBodyshapei(string $BodyShapeI) Return Families objects filtered by the BodyShapeI column
 * @method array findBySpeciescount(int $SpeciesCount) Return Families objects filtered by the SpeciesCount column
 * @method array findByMarine(boolean $Marine) Return Families objects filtered by the Marine column
 * @method array findByBrackish(boolean $Brackish) Return Families objects filtered by the Brackish column
 * @method array findByFreshwater(boolean $Freshwater) Return Families objects filtered by the Freshwater column
 * @method array findByWatersalinity(string $WaterSalinity) Return Families objects filtered by the WaterSalinity column
 * @method array findByAquarium(string $Aquarium) Return Families objects filtered by the Aquarium column
 * @method array findByReprguild(string $ReprGuild) Return Families objects filtered by the ReprGuild column
 * @method array findBySwimmode(string $SwimMode) Return Families objects filtered by the SwimMode column
 * @method array findByActivity(string $Activity) Return Families objects filtered by the Activity column
 * @method array findByPeriodrange(string $PeriodRange) Return Families objects filtered by the PeriodRange column
 * @method array findByPeriod(string $Period) Return Families objects filtered by the Period column
 * @method array findByEpochrange(string $EpochRange) Return Families objects filtered by the EpochRange column
 * @method array findByEpoch(string $Epoch) Return Families objects filtered by the Epoch column
 * @method array findByFossilref(int $FossilRef) Return Families objects filtered by the FossilRef column
 * @method array findByFampic(string $FamPic) Return Families objects filtered by the FamPic column
 * @method array findByLarvpic(string $LarvPic) Return Families objects filtered by the LarvPic column
 * @method array findByValidgenera(int $ValidGenera) Return Families objects filtered by the ValidGenera column
 * @method array findByComplete(boolean $Complete) Return Families objects filtered by the Complete column
 * @method array findBySource(string $Source) Return Families objects filtered by the Source column
 * @method array findByAspinesmin(int $AspinesMin) Return Families objects filtered by the AspinesMin column
 * @method array findByAspinesmax(int $AspinesMax) Return Families objects filtered by the AspinesMax column
 * @method array findByAraysmin(int $AraysMin) Return Families objects filtered by the AraysMin column
 * @method array findByAraysmax(int $AraysMax) Return Families objects filtered by the AraysMax column
 * @method array findByDspinesmin(int $DspinesMin) Return Families objects filtered by the DspinesMin column
 * @method array findByDspinesmax(int $DspinesMax) Return Families objects filtered by the DspinesMax column
 * @method array findByDraysmin(int $DraysMin) Return Families objects filtered by the DraysMin column
 * @method array findByDraysmax(int $DraysMax) Return Families objects filtered by the DraysMax column
 * @method array findByNorthernmost(int $Northernmost) Return Families objects filtered by the Northernmost column
 * @method array findByNorthsouthn(string $NorthSouthN) Return Families objects filtered by the NorthSouthN column
 * @method array findBySouthernmost(int $Southernmost) Return Families objects filtered by the Southernmost column
 * @method array findByNorthsouths(string $NorthSouthS) Return Families objects filtered by the NorthSouthS column
 * @method array findByWesternmost(int $Westernmost) Return Families objects filtered by the Westernmost column
 * @method array findByWesteastw(string $WestEastW) Return Families objects filtered by the WestEastW column
 * @method array findByEasternmost(int $Easternmost) Return Families objects filtered by the Easternmost column
 * @method array findByWesteaste(string $WestEastE) Return Families objects filtered by the WestEastE column
 * @method array findByPhiprime(double $PhiPrime) Return Families objects filtered by the PhiPrime column
 * @method array findByDivision(string $Division) Return Families objects filtered by the Division column
 * @method array findByExperts(string $Experts) Return Families objects filtered by the Experts column
 * @method array findByEntered(int $Entered) Return Families objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Families objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Families objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Families objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Families objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Families objects filtered by the DateChecked column
 * @method array findByRemark(string $Remark) Return Families objects filtered by the Remark column
 * @method array findByEtymology(string $Etymology) Return Families objects filtered by the Etymology column
 * @method array findByFamilyexpert(int $FamilyExpert) Return Families objects filtered by the FamilyExpert column
 * @method array findByFbcontact(int $FBContact) Return Families objects filtered by the FBContact column
 * @method array findByClofexpert(string $CLOFExpert) Return Families objects filtered by the CLOFExpert column
 * @method array findByCommonnameGreek(string $CommonName_Greek) Return Families objects filtered by the CommonName_Greek column
 * @method array findByCommonnameGreekU(string $CommonName_Greek_u) Return Families objects filtered by the CommonName_Greek_u column
 * @method array findByCommonnameRussian(string $CommonName_Russian) Return Families objects filtered by the CommonName_Russian column
 * @method array findByCommonnameRussianOriginal(string $CommonName_Russian_original) Return Families objects filtered by the CommonName_Russian_original column
 * @method array findByCommonnameGerman(string $CommonName_German) Return Families objects filtered by the CommonName_German column
 * @method array findByCommonnameFrench(string $CommonName_French) Return Families objects filtered by the CommonName_French column
 * @method array findByCommonnameItalian(string $CommonName_Italian) Return Families objects filtered by the CommonName_Italian column
 * @method array findByCommonnameDutch(string $CommonName_Dutch) Return Families objects filtered by the CommonName_Dutch column
 * @method array findByCommonnameChinese(string $CommonName_Chinese) Return Families objects filtered by the CommonName_Chinese column
 * @method array findByCommonnameChineseU(string $CommonName_Chinese_u) Return Families objects filtered by the CommonName_Chinese_u column
 * @method array findByCommonnameSpanish(string $CommonName_Spanish) Return Families objects filtered by the CommonName_Spanish column
 * @method array findByCommonnamePortuguese(string $CommonName_Portuguese) Return Families objects filtered by the CommonName_Portuguese column
 * @method array findByCommonnameSwedish(string $CommonName_Swedish) Return Families objects filtered by the CommonName_Swedish column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFamiliesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFamiliesQuery object.
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
            $modelName = 'Families';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FamiliesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FamiliesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FamiliesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FamiliesQuery) {
            return $criteria;
        }
        $query = new FamiliesQuery(null, null, $modelAlias);

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
     * @return   Families|Families[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FamiliesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Families A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFamily($key, $con = null)
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
     * @return                 Families A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FamCode`, `SortID`, `Family`, `AuthorYear`, `Qualification`, `CommonName`, `FamiliesRefNo`, `Synonym`, `Order`, `Ordnum`, `Class`, `ClassNum`, `Genera`, `Species`, `BodyShapeI`, `SpeciesCount`, `Marine`, `Brackish`, `Freshwater`, `WaterSalinity`, `Aquarium`, `ReprGuild`, `SwimMode`, `Activity`, `PeriodRange`, `Period`, `EpochRange`, `Epoch`, `FossilRef`, `FamPic`, `LarvPic`, `ValidGenera`, `Complete`, `Source`, `AspinesMin`, `AspinesMax`, `AraysMin`, `AraysMax`, `DspinesMin`, `DspinesMax`, `DraysMin`, `DraysMax`, `Northernmost`, `NorthSouthN`, `Southernmost`, `NorthSouthS`, `Westernmost`, `WestEastW`, `Easternmost`, `WestEastE`, `PhiPrime`, `Division`, `Experts`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Remark`, `Etymology`, `FamilyExpert`, `FBContact`, `CLOFExpert`, `CommonName_Greek`, `CommonName_Greek_u`, `CommonName_Russian`, `CommonName_Russian_original`, `CommonName_German`, `CommonName_French`, `CommonName_Italian`, `CommonName_Dutch`, `CommonName_Chinese`, `CommonName_Chinese_u`, `CommonName_Spanish`, `CommonName_Portuguese`, `CommonName_Swedish` FROM `families` WHERE `Family` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Families();
            $obj->hydrate($row);
            FamiliesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Families|Families[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Families[]|mixed the list of results, formatted by the current formatter
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FamiliesPeer::FAMILY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FamiliesPeer::FAMILY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(FamiliesPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(FamiliesPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the SortID column
     *
     * Example usage:
     * <code>
     * $query->filterBySortid(1234); // WHERE SortID = 1234
     * $query->filterBySortid(array(12, 34)); // WHERE SortID IN (12, 34)
     * $query->filterBySortid(array('min' => 12)); // WHERE SortID >= 12
     * $query->filterBySortid(array('max' => 12)); // WHERE SortID <= 12
     * </code>
     *
     * @param     mixed $sortid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySortid($sortid = null, $comparison = null)
    {
        if (is_array($sortid)) {
            $useMinMax = false;
            if (isset($sortid['min'])) {
                $this->addUsingAlias(FamiliesPeer::SORTID, $sortid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortid['max'])) {
                $this->addUsingAlias(FamiliesPeer::SORTID, $sortid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SORTID, $sortid, $comparison);
    }

    /**
     * Filter the query on the Family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE Family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE Family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFamily($family = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($family)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $family)) {
                $family = str_replace('*', '%', $family);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the AuthorYear column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoryear('fooValue');   // WHERE AuthorYear = 'fooValue'
     * $query->filterByAuthoryear('%fooValue%'); // WHERE AuthorYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoryear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByAuthoryear($authoryear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoryear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoryear)) {
                $authoryear = str_replace('*', '%', $authoryear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::AUTHORYEAR, $authoryear, $comparison);
    }

    /**
     * Filter the query on the Qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByQualification('fooValue');   // WHERE Qualification = 'fooValue'
     * $query->filterByQualification('%fooValue%'); // WHERE Qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByQualification($qualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualification)) {
                $qualification = str_replace('*', '%', $qualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::QUALIFICATION, $qualification, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the FamiliesRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByFamiliesrefno(1234); // WHERE FamiliesRefNo = 1234
     * $query->filterByFamiliesrefno(array(12, 34)); // WHERE FamiliesRefNo IN (12, 34)
     * $query->filterByFamiliesrefno(array('min' => 12)); // WHERE FamiliesRefNo >= 12
     * $query->filterByFamiliesrefno(array('max' => 12)); // WHERE FamiliesRefNo <= 12
     * </code>
     *
     * @param     mixed $familiesrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFamiliesrefno($familiesrefno = null, $comparison = null)
    {
        if (is_array($familiesrefno)) {
            $useMinMax = false;
            if (isset($familiesrefno['min'])) {
                $this->addUsingAlias(FamiliesPeer::FAMILIESREFNO, $familiesrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familiesrefno['max'])) {
                $this->addUsingAlias(FamiliesPeer::FAMILIESREFNO, $familiesrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FAMILIESREFNO, $familiesrefno, $comparison);
    }

    /**
     * Filter the query on the Synonym column
     *
     * Example usage:
     * <code>
     * $query->filterBySynonym(1234); // WHERE Synonym = 1234
     * $query->filterBySynonym(array(12, 34)); // WHERE Synonym IN (12, 34)
     * $query->filterBySynonym(array('min' => 12)); // WHERE Synonym >= 12
     * $query->filterBySynonym(array('max' => 12)); // WHERE Synonym <= 12
     * </code>
     *
     * @param     mixed $synonym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySynonym($synonym = null, $comparison = null)
    {
        if (is_array($synonym)) {
            $useMinMax = false;
            if (isset($synonym['min'])) {
                $this->addUsingAlias(FamiliesPeer::SYNONYM, $synonym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($synonym['max'])) {
                $this->addUsingAlias(FamiliesPeer::SYNONYM, $synonym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SYNONYM, $synonym, $comparison);
    }

    /**
     * Filter the query on the Order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder('fooValue');   // WHERE Order = 'fooValue'
     * $query->filterByOrder('%fooValue%'); // WHERE Order LIKE '%fooValue%'
     * </code>
     *
     * @param     string $order The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($order)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $order)) {
                $order = str_replace('*', '%', $order);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the Ordnum column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdnum(1234); // WHERE Ordnum = 1234
     * $query->filterByOrdnum(array(12, 34)); // WHERE Ordnum IN (12, 34)
     * $query->filterByOrdnum(array('min' => 12)); // WHERE Ordnum >= 12
     * $query->filterByOrdnum(array('max' => 12)); // WHERE Ordnum <= 12
     * </code>
     *
     * @param     mixed $ordnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByOrdnum($ordnum = null, $comparison = null)
    {
        if (is_array($ordnum)) {
            $useMinMax = false;
            if (isset($ordnum['min'])) {
                $this->addUsingAlias(FamiliesPeer::ORDNUM, $ordnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordnum['max'])) {
                $this->addUsingAlias(FamiliesPeer::ORDNUM, $ordnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ORDNUM, $ordnum, $comparison);
    }

    /**
     * Filter the query on the Class column
     *
     * Example usage:
     * <code>
     * $query->filterByClass('fooValue');   // WHERE Class = 'fooValue'
     * $query->filterByClass('%fooValue%'); // WHERE Class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $class The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByClass($class = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($class)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $class)) {
                $class = str_replace('*', '%', $class);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::CLAZZ, $class, $comparison);
    }

    /**
     * Filter the query on the ClassNum column
     *
     * Example usage:
     * <code>
     * $query->filterByClassnum(1234); // WHERE ClassNum = 1234
     * $query->filterByClassnum(array(12, 34)); // WHERE ClassNum IN (12, 34)
     * $query->filterByClassnum(array('min' => 12)); // WHERE ClassNum >= 12
     * $query->filterByClassnum(array('max' => 12)); // WHERE ClassNum <= 12
     * </code>
     *
     * @param     mixed $classnum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByClassnum($classnum = null, $comparison = null)
    {
        if (is_array($classnum)) {
            $useMinMax = false;
            if (isset($classnum['min'])) {
                $this->addUsingAlias(FamiliesPeer::CLASSNUM, $classnum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classnum['max'])) {
                $this->addUsingAlias(FamiliesPeer::CLASSNUM, $classnum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::CLASSNUM, $classnum, $comparison);
    }

    /**
     * Filter the query on the Genera column
     *
     * Example usage:
     * <code>
     * $query->filterByGenera(1234); // WHERE Genera = 1234
     * $query->filterByGenera(array(12, 34)); // WHERE Genera IN (12, 34)
     * $query->filterByGenera(array('min' => 12)); // WHERE Genera >= 12
     * $query->filterByGenera(array('max' => 12)); // WHERE Genera <= 12
     * </code>
     *
     * @param     mixed $genera The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByGenera($genera = null, $comparison = null)
    {
        if (is_array($genera)) {
            $useMinMax = false;
            if (isset($genera['min'])) {
                $this->addUsingAlias(FamiliesPeer::GENERA, $genera['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genera['max'])) {
                $this->addUsingAlias(FamiliesPeer::GENERA, $genera['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::GENERA, $genera, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies(1234); // WHERE Species = 1234
     * $query->filterBySpecies(array(12, 34)); // WHERE Species IN (12, 34)
     * $query->filterBySpecies(array('min' => 12)); // WHERE Species >= 12
     * $query->filterBySpecies(array('max' => 12)); // WHERE Species <= 12
     * </code>
     *
     * @param     mixed $species The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (is_array($species)) {
            $useMinMax = false;
            if (isset($species['min'])) {
                $this->addUsingAlias(FamiliesPeer::SPECIES, $species['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($species['max'])) {
                $this->addUsingAlias(FamiliesPeer::SPECIES, $species['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the BodyShapeI column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyshapei('fooValue');   // WHERE BodyShapeI = 'fooValue'
     * $query->filterByBodyshapei('%fooValue%'); // WHERE BodyShapeI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bodyshapei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByBodyshapei($bodyshapei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bodyshapei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bodyshapei)) {
                $bodyshapei = str_replace('*', '%', $bodyshapei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::BODYSHAPEI, $bodyshapei, $comparison);
    }

    /**
     * Filter the query on the SpeciesCount column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciescount(1234); // WHERE SpeciesCount = 1234
     * $query->filterBySpeciescount(array(12, 34)); // WHERE SpeciesCount IN (12, 34)
     * $query->filterBySpeciescount(array('min' => 12)); // WHERE SpeciesCount >= 12
     * $query->filterBySpeciescount(array('max' => 12)); // WHERE SpeciesCount <= 12
     * </code>
     *
     * @param     mixed $speciescount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySpeciescount($speciescount = null, $comparison = null)
    {
        if (is_array($speciescount)) {
            $useMinMax = false;
            if (isset($speciescount['min'])) {
                $this->addUsingAlias(FamiliesPeer::SPECIESCOUNT, $speciescount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciescount['max'])) {
                $this->addUsingAlias(FamiliesPeer::SPECIESCOUNT, $speciescount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SPECIESCOUNT, $speciescount, $comparison);
    }

    /**
     * Filter the query on the Marine column
     *
     * Example usage:
     * <code>
     * $query->filterByMarine(true); // WHERE Marine = true
     * $query->filterByMarine('yes'); // WHERE Marine = true
     * </code>
     *
     * @param     boolean|string $marine The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByMarine($marine = null, $comparison = null)
    {
        if (is_string($marine)) {
            $marine = in_array(strtolower($marine), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FamiliesPeer::MARINE, $marine, $comparison);
    }

    /**
     * Filter the query on the Brackish column
     *
     * Example usage:
     * <code>
     * $query->filterByBrackish(true); // WHERE Brackish = true
     * $query->filterByBrackish('yes'); // WHERE Brackish = true
     * </code>
     *
     * @param     boolean|string $brackish The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByBrackish($brackish = null, $comparison = null)
    {
        if (is_string($brackish)) {
            $brackish = in_array(strtolower($brackish), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FamiliesPeer::BRACKISH, $brackish, $comparison);
    }

    /**
     * Filter the query on the Freshwater column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshwater(true); // WHERE Freshwater = true
     * $query->filterByFreshwater('yes'); // WHERE Freshwater = true
     * </code>
     *
     * @param     boolean|string $freshwater The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFreshwater($freshwater = null, $comparison = null)
    {
        if (is_string($freshwater)) {
            $freshwater = in_array(strtolower($freshwater), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FamiliesPeer::FRESHWATER, $freshwater, $comparison);
    }

    /**
     * Filter the query on the WaterSalinity column
     *
     * Example usage:
     * <code>
     * $query->filterByWatersalinity('fooValue');   // WHERE WaterSalinity = 'fooValue'
     * $query->filterByWatersalinity('%fooValue%'); // WHERE WaterSalinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $watersalinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByWatersalinity($watersalinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($watersalinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $watersalinity)) {
                $watersalinity = str_replace('*', '%', $watersalinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::WATERSALINITY, $watersalinity, $comparison);
    }

    /**
     * Filter the query on the Aquarium column
     *
     * Example usage:
     * <code>
     * $query->filterByAquarium('fooValue');   // WHERE Aquarium = 'fooValue'
     * $query->filterByAquarium('%fooValue%'); // WHERE Aquarium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquarium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByAquarium($aquarium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquarium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquarium)) {
                $aquarium = str_replace('*', '%', $aquarium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::AQUARIUM, $aquarium, $comparison);
    }

    /**
     * Filter the query on the ReprGuild column
     *
     * Example usage:
     * <code>
     * $query->filterByReprguild('fooValue');   // WHERE ReprGuild = 'fooValue'
     * $query->filterByReprguild('%fooValue%'); // WHERE ReprGuild LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reprguild The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByReprguild($reprguild = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reprguild)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reprguild)) {
                $reprguild = str_replace('*', '%', $reprguild);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::REPRGUILD, $reprguild, $comparison);
    }

    /**
     * Filter the query on the SwimMode column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimmode('fooValue');   // WHERE SwimMode = 'fooValue'
     * $query->filterBySwimmode('%fooValue%'); // WHERE SwimMode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swimmode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySwimmode($swimmode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swimmode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swimmode)) {
                $swimmode = str_replace('*', '%', $swimmode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SWIMMODE, $swimmode, $comparison);
    }

    /**
     * Filter the query on the Activity column
     *
     * Example usage:
     * <code>
     * $query->filterByActivity('fooValue');   // WHERE Activity = 'fooValue'
     * $query->filterByActivity('%fooValue%'); // WHERE Activity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByActivity($activity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activity)) {
                $activity = str_replace('*', '%', $activity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ACTIVITY, $activity, $comparison);
    }

    /**
     * Filter the query on the PeriodRange column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodrange('fooValue');   // WHERE PeriodRange = 'fooValue'
     * $query->filterByPeriodrange('%fooValue%'); // WHERE PeriodRange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodrange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByPeriodrange($periodrange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodrange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodrange)) {
                $periodrange = str_replace('*', '%', $periodrange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::PERIODRANGE, $periodrange, $comparison);
    }

    /**
     * Filter the query on the Period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('fooValue');   // WHERE Period = 'fooValue'
     * $query->filterByPeriod('%fooValue%'); // WHERE Period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $period The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($period)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $period)) {
                $period = str_replace('*', '%', $period);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::PERIOD, $period, $comparison);
    }

    /**
     * Filter the query on the EpochRange column
     *
     * Example usage:
     * <code>
     * $query->filterByEpochrange('fooValue');   // WHERE EpochRange = 'fooValue'
     * $query->filterByEpochrange('%fooValue%'); // WHERE EpochRange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $epochrange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByEpochrange($epochrange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($epochrange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $epochrange)) {
                $epochrange = str_replace('*', '%', $epochrange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::EPOCHRANGE, $epochrange, $comparison);
    }

    /**
     * Filter the query on the Epoch column
     *
     * Example usage:
     * <code>
     * $query->filterByEpoch('fooValue');   // WHERE Epoch = 'fooValue'
     * $query->filterByEpoch('%fooValue%'); // WHERE Epoch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $epoch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByEpoch($epoch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($epoch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $epoch)) {
                $epoch = str_replace('*', '%', $epoch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::EPOCH, $epoch, $comparison);
    }

    /**
     * Filter the query on the FossilRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFossilref(1234); // WHERE FossilRef = 1234
     * $query->filterByFossilref(array(12, 34)); // WHERE FossilRef IN (12, 34)
     * $query->filterByFossilref(array('min' => 12)); // WHERE FossilRef >= 12
     * $query->filterByFossilref(array('max' => 12)); // WHERE FossilRef <= 12
     * </code>
     *
     * @param     mixed $fossilref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFossilref($fossilref = null, $comparison = null)
    {
        if (is_array($fossilref)) {
            $useMinMax = false;
            if (isset($fossilref['min'])) {
                $this->addUsingAlias(FamiliesPeer::FOSSILREF, $fossilref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fossilref['max'])) {
                $this->addUsingAlias(FamiliesPeer::FOSSILREF, $fossilref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FOSSILREF, $fossilref, $comparison);
    }

    /**
     * Filter the query on the FamPic column
     *
     * Example usage:
     * <code>
     * $query->filterByFampic('fooValue');   // WHERE FamPic = 'fooValue'
     * $query->filterByFampic('%fooValue%'); // WHERE FamPic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fampic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFampic($fampic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fampic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fampic)) {
                $fampic = str_replace('*', '%', $fampic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FAMPIC, $fampic, $comparison);
    }

    /**
     * Filter the query on the LarvPic column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvpic('fooValue');   // WHERE LarvPic = 'fooValue'
     * $query->filterByLarvpic('%fooValue%'); // WHERE LarvPic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvpic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByLarvpic($larvpic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvpic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvpic)) {
                $larvpic = str_replace('*', '%', $larvpic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::LARVPIC, $larvpic, $comparison);
    }

    /**
     * Filter the query on the ValidGenera column
     *
     * Example usage:
     * <code>
     * $query->filterByValidgenera(1234); // WHERE ValidGenera = 1234
     * $query->filterByValidgenera(array(12, 34)); // WHERE ValidGenera IN (12, 34)
     * $query->filterByValidgenera(array('min' => 12)); // WHERE ValidGenera >= 12
     * $query->filterByValidgenera(array('max' => 12)); // WHERE ValidGenera <= 12
     * </code>
     *
     * @param     mixed $validgenera The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByValidgenera($validgenera = null, $comparison = null)
    {
        if (is_array($validgenera)) {
            $useMinMax = false;
            if (isset($validgenera['min'])) {
                $this->addUsingAlias(FamiliesPeer::VALIDGENERA, $validgenera['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validgenera['max'])) {
                $this->addUsingAlias(FamiliesPeer::VALIDGENERA, $validgenera['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::VALIDGENERA, $validgenera, $comparison);
    }

    /**
     * Filter the query on the Complete column
     *
     * Example usage:
     * <code>
     * $query->filterByComplete(true); // WHERE Complete = true
     * $query->filterByComplete('yes'); // WHERE Complete = true
     * </code>
     *
     * @param     boolean|string $complete The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByComplete($complete = null, $comparison = null)
    {
        if (is_string($complete)) {
            $complete = in_array(strtolower($complete), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FamiliesPeer::COMPLETE, $complete, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the AspinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAspinesmin(1234); // WHERE AspinesMin = 1234
     * $query->filterByAspinesmin(array(12, 34)); // WHERE AspinesMin IN (12, 34)
     * $query->filterByAspinesmin(array('min' => 12)); // WHERE AspinesMin >= 12
     * $query->filterByAspinesmin(array('max' => 12)); // WHERE AspinesMin <= 12
     * </code>
     *
     * @param     mixed $aspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByAspinesmin($aspinesmin = null, $comparison = null)
    {
        if (is_array($aspinesmin)) {
            $useMinMax = false;
            if (isset($aspinesmin['min'])) {
                $this->addUsingAlias(FamiliesPeer::ASPINESMIN, $aspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspinesmin['max'])) {
                $this->addUsingAlias(FamiliesPeer::ASPINESMIN, $aspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ASPINESMIN, $aspinesmin, $comparison);
    }

    /**
     * Filter the query on the AspinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAspinesmax(1234); // WHERE AspinesMax = 1234
     * $query->filterByAspinesmax(array(12, 34)); // WHERE AspinesMax IN (12, 34)
     * $query->filterByAspinesmax(array('min' => 12)); // WHERE AspinesMax >= 12
     * $query->filterByAspinesmax(array('max' => 12)); // WHERE AspinesMax <= 12
     * </code>
     *
     * @param     mixed $aspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByAspinesmax($aspinesmax = null, $comparison = null)
    {
        if (is_array($aspinesmax)) {
            $useMinMax = false;
            if (isset($aspinesmax['min'])) {
                $this->addUsingAlias(FamiliesPeer::ASPINESMAX, $aspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aspinesmax['max'])) {
                $this->addUsingAlias(FamiliesPeer::ASPINESMAX, $aspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ASPINESMAX, $aspinesmax, $comparison);
    }

    /**
     * Filter the query on the AraysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAraysmin(1234); // WHERE AraysMin = 1234
     * $query->filterByAraysmin(array(12, 34)); // WHERE AraysMin IN (12, 34)
     * $query->filterByAraysmin(array('min' => 12)); // WHERE AraysMin >= 12
     * $query->filterByAraysmin(array('max' => 12)); // WHERE AraysMin <= 12
     * </code>
     *
     * @param     mixed $araysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByAraysmin($araysmin = null, $comparison = null)
    {
        if (is_array($araysmin)) {
            $useMinMax = false;
            if (isset($araysmin['min'])) {
                $this->addUsingAlias(FamiliesPeer::ARAYSMIN, $araysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($araysmin['max'])) {
                $this->addUsingAlias(FamiliesPeer::ARAYSMIN, $araysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ARAYSMIN, $araysmin, $comparison);
    }

    /**
     * Filter the query on the AraysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAraysmax(1234); // WHERE AraysMax = 1234
     * $query->filterByAraysmax(array(12, 34)); // WHERE AraysMax IN (12, 34)
     * $query->filterByAraysmax(array('min' => 12)); // WHERE AraysMax >= 12
     * $query->filterByAraysmax(array('max' => 12)); // WHERE AraysMax <= 12
     * </code>
     *
     * @param     mixed $araysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByAraysmax($araysmax = null, $comparison = null)
    {
        if (is_array($araysmax)) {
            $useMinMax = false;
            if (isset($araysmax['min'])) {
                $this->addUsingAlias(FamiliesPeer::ARAYSMAX, $araysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($araysmax['max'])) {
                $this->addUsingAlias(FamiliesPeer::ARAYSMAX, $araysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ARAYSMAX, $araysmax, $comparison);
    }

    /**
     * Filter the query on the DspinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDspinesmin(1234); // WHERE DspinesMin = 1234
     * $query->filterByDspinesmin(array(12, 34)); // WHERE DspinesMin IN (12, 34)
     * $query->filterByDspinesmin(array('min' => 12)); // WHERE DspinesMin >= 12
     * $query->filterByDspinesmin(array('max' => 12)); // WHERE DspinesMin <= 12
     * </code>
     *
     * @param     mixed $dspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDspinesmin($dspinesmin = null, $comparison = null)
    {
        if (is_array($dspinesmin)) {
            $useMinMax = false;
            if (isset($dspinesmin['min'])) {
                $this->addUsingAlias(FamiliesPeer::DSPINESMIN, $dspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dspinesmin['max'])) {
                $this->addUsingAlias(FamiliesPeer::DSPINESMIN, $dspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DSPINESMIN, $dspinesmin, $comparison);
    }

    /**
     * Filter the query on the DspinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDspinesmax(1234); // WHERE DspinesMax = 1234
     * $query->filterByDspinesmax(array(12, 34)); // WHERE DspinesMax IN (12, 34)
     * $query->filterByDspinesmax(array('min' => 12)); // WHERE DspinesMax >= 12
     * $query->filterByDspinesmax(array('max' => 12)); // WHERE DspinesMax <= 12
     * </code>
     *
     * @param     mixed $dspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDspinesmax($dspinesmax = null, $comparison = null)
    {
        if (is_array($dspinesmax)) {
            $useMinMax = false;
            if (isset($dspinesmax['min'])) {
                $this->addUsingAlias(FamiliesPeer::DSPINESMAX, $dspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dspinesmax['max'])) {
                $this->addUsingAlias(FamiliesPeer::DSPINESMAX, $dspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DSPINESMAX, $dspinesmax, $comparison);
    }

    /**
     * Filter the query on the DraysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDraysmin(1234); // WHERE DraysMin = 1234
     * $query->filterByDraysmin(array(12, 34)); // WHERE DraysMin IN (12, 34)
     * $query->filterByDraysmin(array('min' => 12)); // WHERE DraysMin >= 12
     * $query->filterByDraysmin(array('max' => 12)); // WHERE DraysMin <= 12
     * </code>
     *
     * @param     mixed $draysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDraysmin($draysmin = null, $comparison = null)
    {
        if (is_array($draysmin)) {
            $useMinMax = false;
            if (isset($draysmin['min'])) {
                $this->addUsingAlias(FamiliesPeer::DRAYSMIN, $draysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($draysmin['max'])) {
                $this->addUsingAlias(FamiliesPeer::DRAYSMIN, $draysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DRAYSMIN, $draysmin, $comparison);
    }

    /**
     * Filter the query on the DraysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDraysmax(1234); // WHERE DraysMax = 1234
     * $query->filterByDraysmax(array(12, 34)); // WHERE DraysMax IN (12, 34)
     * $query->filterByDraysmax(array('min' => 12)); // WHERE DraysMax >= 12
     * $query->filterByDraysmax(array('max' => 12)); // WHERE DraysMax <= 12
     * </code>
     *
     * @param     mixed $draysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDraysmax($draysmax = null, $comparison = null)
    {
        if (is_array($draysmax)) {
            $useMinMax = false;
            if (isset($draysmax['min'])) {
                $this->addUsingAlias(FamiliesPeer::DRAYSMAX, $draysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($draysmax['max'])) {
                $this->addUsingAlias(FamiliesPeer::DRAYSMAX, $draysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DRAYSMAX, $draysmax, $comparison);
    }

    /**
     * Filter the query on the Northernmost column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernmost(1234); // WHERE Northernmost = 1234
     * $query->filterByNorthernmost(array(12, 34)); // WHERE Northernmost IN (12, 34)
     * $query->filterByNorthernmost(array('min' => 12)); // WHERE Northernmost >= 12
     * $query->filterByNorthernmost(array('max' => 12)); // WHERE Northernmost <= 12
     * </code>
     *
     * @param     mixed $northernmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByNorthernmost($northernmost = null, $comparison = null)
    {
        if (is_array($northernmost)) {
            $useMinMax = false;
            if (isset($northernmost['min'])) {
                $this->addUsingAlias(FamiliesPeer::NORTHERNMOST, $northernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernmost['max'])) {
                $this->addUsingAlias(FamiliesPeer::NORTHERNMOST, $northernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::NORTHERNMOST, $northernmost, $comparison);
    }

    /**
     * Filter the query on the NorthSouthN column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthn('fooValue');   // WHERE NorthSouthN = 'fooValue'
     * $query->filterByNorthsouthn('%fooValue%'); // WHERE NorthSouthN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByNorthsouthn($northsouthn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthn)) {
                $northsouthn = str_replace('*', '%', $northsouthn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::NORTHSOUTHN, $northsouthn, $comparison);
    }

    /**
     * Filter the query on the Southernmost column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernmost(1234); // WHERE Southernmost = 1234
     * $query->filterBySouthernmost(array(12, 34)); // WHERE Southernmost IN (12, 34)
     * $query->filterBySouthernmost(array('min' => 12)); // WHERE Southernmost >= 12
     * $query->filterBySouthernmost(array('max' => 12)); // WHERE Southernmost <= 12
     * </code>
     *
     * @param     mixed $southernmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterBySouthernmost($southernmost = null, $comparison = null)
    {
        if (is_array($southernmost)) {
            $useMinMax = false;
            if (isset($southernmost['min'])) {
                $this->addUsingAlias(FamiliesPeer::SOUTHERNMOST, $southernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southernmost['max'])) {
                $this->addUsingAlias(FamiliesPeer::SOUTHERNMOST, $southernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::SOUTHERNMOST, $southernmost, $comparison);
    }

    /**
     * Filter the query on the NorthSouthS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouths('fooValue');   // WHERE NorthSouthS = 'fooValue'
     * $query->filterByNorthsouths('%fooValue%'); // WHERE NorthSouthS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouths The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByNorthsouths($northsouths = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouths)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouths)) {
                $northsouths = str_replace('*', '%', $northsouths);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::NORTHSOUTHS, $northsouths, $comparison);
    }

    /**
     * Filter the query on the Westernmost column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternmost(1234); // WHERE Westernmost = 1234
     * $query->filterByWesternmost(array(12, 34)); // WHERE Westernmost IN (12, 34)
     * $query->filterByWesternmost(array('min' => 12)); // WHERE Westernmost >= 12
     * $query->filterByWesternmost(array('max' => 12)); // WHERE Westernmost <= 12
     * </code>
     *
     * @param     mixed $westernmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByWesternmost($westernmost = null, $comparison = null)
    {
        if (is_array($westernmost)) {
            $useMinMax = false;
            if (isset($westernmost['min'])) {
                $this->addUsingAlias(FamiliesPeer::WESTERNMOST, $westernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernmost['max'])) {
                $this->addUsingAlias(FamiliesPeer::WESTERNMOST, $westernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::WESTERNMOST, $westernmost, $comparison);
    }

    /**
     * Filter the query on the WestEastW column
     *
     * Example usage:
     * <code>
     * $query->filterByWesteastw('fooValue');   // WHERE WestEastW = 'fooValue'
     * $query->filterByWesteastw('%fooValue%'); // WHERE WestEastW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westeastw The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByWesteastw($westeastw = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westeastw)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westeastw)) {
                $westeastw = str_replace('*', '%', $westeastw);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::WESTEASTW, $westeastw, $comparison);
    }

    /**
     * Filter the query on the Easternmost column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternmost(1234); // WHERE Easternmost = 1234
     * $query->filterByEasternmost(array(12, 34)); // WHERE Easternmost IN (12, 34)
     * $query->filterByEasternmost(array('min' => 12)); // WHERE Easternmost >= 12
     * $query->filterByEasternmost(array('max' => 12)); // WHERE Easternmost <= 12
     * </code>
     *
     * @param     mixed $easternmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByEasternmost($easternmost = null, $comparison = null)
    {
        if (is_array($easternmost)) {
            $useMinMax = false;
            if (isset($easternmost['min'])) {
                $this->addUsingAlias(FamiliesPeer::EASTERNMOST, $easternmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternmost['max'])) {
                $this->addUsingAlias(FamiliesPeer::EASTERNMOST, $easternmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::EASTERNMOST, $easternmost, $comparison);
    }

    /**
     * Filter the query on the WestEastE column
     *
     * Example usage:
     * <code>
     * $query->filterByWesteaste('fooValue');   // WHERE WestEastE = 'fooValue'
     * $query->filterByWesteaste('%fooValue%'); // WHERE WestEastE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westeaste The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByWesteaste($westeaste = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westeaste)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westeaste)) {
                $westeaste = str_replace('*', '%', $westeaste);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::WESTEASTE, $westeaste, $comparison);
    }

    /**
     * Filter the query on the PhiPrime column
     *
     * Example usage:
     * <code>
     * $query->filterByPhiprime(1234); // WHERE PhiPrime = 1234
     * $query->filterByPhiprime(array(12, 34)); // WHERE PhiPrime IN (12, 34)
     * $query->filterByPhiprime(array('min' => 12)); // WHERE PhiPrime >= 12
     * $query->filterByPhiprime(array('max' => 12)); // WHERE PhiPrime <= 12
     * </code>
     *
     * @param     mixed $phiprime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByPhiprime($phiprime = null, $comparison = null)
    {
        if (is_array($phiprime)) {
            $useMinMax = false;
            if (isset($phiprime['min'])) {
                $this->addUsingAlias(FamiliesPeer::PHIPRIME, $phiprime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phiprime['max'])) {
                $this->addUsingAlias(FamiliesPeer::PHIPRIME, $phiprime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::PHIPRIME, $phiprime, $comparison);
    }

    /**
     * Filter the query on the Division column
     *
     * Example usage:
     * <code>
     * $query->filterByDivision('fooValue');   // WHERE Division = 'fooValue'
     * $query->filterByDivision('%fooValue%'); // WHERE Division LIKE '%fooValue%'
     * </code>
     *
     * @param     string $division The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDivision($division = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($division)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $division)) {
                $division = str_replace('*', '%', $division);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DIVISION, $division, $comparison);
    }

    /**
     * Filter the query on the Experts column
     *
     * Example usage:
     * <code>
     * $query->filterByExperts('fooValue');   // WHERE Experts = 'fooValue'
     * $query->filterByExperts('%fooValue%'); // WHERE Experts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $experts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByExperts($experts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($experts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $experts)) {
                $experts = str_replace('*', '%', $experts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::EXPERTS, $experts, $comparison);
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(FamiliesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(FamiliesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(FamiliesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(FamiliesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(FamiliesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(FamiliesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(FamiliesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(FamiliesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(FamiliesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(FamiliesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
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
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(FamiliesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(FamiliesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FamiliesPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Etymology column
     *
     * Example usage:
     * <code>
     * $query->filterByEtymology('fooValue');   // WHERE Etymology = 'fooValue'
     * $query->filterByEtymology('%fooValue%'); // WHERE Etymology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etymology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByEtymology($etymology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etymology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etymology)) {
                $etymology = str_replace('*', '%', $etymology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::ETYMOLOGY, $etymology, $comparison);
    }

    /**
     * Filter the query on the FamilyExpert column
     *
     * Example usage:
     * <code>
     * $query->filterByFamilyexpert(1234); // WHERE FamilyExpert = 1234
     * $query->filterByFamilyexpert(array(12, 34)); // WHERE FamilyExpert IN (12, 34)
     * $query->filterByFamilyexpert(array('min' => 12)); // WHERE FamilyExpert >= 12
     * $query->filterByFamilyexpert(array('max' => 12)); // WHERE FamilyExpert <= 12
     * </code>
     *
     * @param     mixed $familyexpert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFamilyexpert($familyexpert = null, $comparison = null)
    {
        if (is_array($familyexpert)) {
            $useMinMax = false;
            if (isset($familyexpert['min'])) {
                $this->addUsingAlias(FamiliesPeer::FAMILYEXPERT, $familyexpert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($familyexpert['max'])) {
                $this->addUsingAlias(FamiliesPeer::FAMILYEXPERT, $familyexpert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FAMILYEXPERT, $familyexpert, $comparison);
    }

    /**
     * Filter the query on the FBContact column
     *
     * Example usage:
     * <code>
     * $query->filterByFbcontact(1234); // WHERE FBContact = 1234
     * $query->filterByFbcontact(array(12, 34)); // WHERE FBContact IN (12, 34)
     * $query->filterByFbcontact(array('min' => 12)); // WHERE FBContact >= 12
     * $query->filterByFbcontact(array('max' => 12)); // WHERE FBContact <= 12
     * </code>
     *
     * @param     mixed $fbcontact The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByFbcontact($fbcontact = null, $comparison = null)
    {
        if (is_array($fbcontact)) {
            $useMinMax = false;
            if (isset($fbcontact['min'])) {
                $this->addUsingAlias(FamiliesPeer::FBCONTACT, $fbcontact['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fbcontact['max'])) {
                $this->addUsingAlias(FamiliesPeer::FBCONTACT, $fbcontact['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::FBCONTACT, $fbcontact, $comparison);
    }

    /**
     * Filter the query on the CLOFExpert column
     *
     * Example usage:
     * <code>
     * $query->filterByClofexpert('fooValue');   // WHERE CLOFExpert = 'fooValue'
     * $query->filterByClofexpert('%fooValue%'); // WHERE CLOFExpert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clofexpert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByClofexpert($clofexpert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clofexpert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clofexpert)) {
                $clofexpert = str_replace('*', '%', $clofexpert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::CLOFEXPERT, $clofexpert, $comparison);
    }

    /**
     * Filter the query on the CommonName_Greek column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameGreek('fooValue');   // WHERE CommonName_Greek = 'fooValue'
     * $query->filterByCommonnameGreek('%fooValue%'); // WHERE CommonName_Greek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameGreek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameGreek($commonnameGreek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameGreek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameGreek)) {
                $commonnameGreek = str_replace('*', '%', $commonnameGreek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_GREEK, $commonnameGreek, $comparison);
    }

    /**
     * Filter the query on the CommonName_Greek_u column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameGreekU('fooValue');   // WHERE CommonName_Greek_u = 'fooValue'
     * $query->filterByCommonnameGreekU('%fooValue%'); // WHERE CommonName_Greek_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameGreekU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameGreekU($commonnameGreekU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameGreekU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameGreekU)) {
                $commonnameGreekU = str_replace('*', '%', $commonnameGreekU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_GREEK_U, $commonnameGreekU, $comparison);
    }

    /**
     * Filter the query on the CommonName_Russian column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameRussian('fooValue');   // WHERE CommonName_Russian = 'fooValue'
     * $query->filterByCommonnameRussian('%fooValue%'); // WHERE CommonName_Russian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameRussian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameRussian($commonnameRussian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameRussian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameRussian)) {
                $commonnameRussian = str_replace('*', '%', $commonnameRussian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_RUSSIAN, $commonnameRussian, $comparison);
    }

    /**
     * Filter the query on the CommonName_Russian_original column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameRussianOriginal('fooValue');   // WHERE CommonName_Russian_original = 'fooValue'
     * $query->filterByCommonnameRussianOriginal('%fooValue%'); // WHERE CommonName_Russian_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameRussianOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameRussianOriginal($commonnameRussianOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameRussianOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameRussianOriginal)) {
                $commonnameRussianOriginal = str_replace('*', '%', $commonnameRussianOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL, $commonnameRussianOriginal, $comparison);
    }

    /**
     * Filter the query on the CommonName_German column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameGerman('fooValue');   // WHERE CommonName_German = 'fooValue'
     * $query->filterByCommonnameGerman('%fooValue%'); // WHERE CommonName_German LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameGerman The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameGerman($commonnameGerman = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameGerman)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameGerman)) {
                $commonnameGerman = str_replace('*', '%', $commonnameGerman);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_GERMAN, $commonnameGerman, $comparison);
    }

    /**
     * Filter the query on the CommonName_French column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameFrench('fooValue');   // WHERE CommonName_French = 'fooValue'
     * $query->filterByCommonnameFrench('%fooValue%'); // WHERE CommonName_French LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameFrench The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameFrench($commonnameFrench = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameFrench)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameFrench)) {
                $commonnameFrench = str_replace('*', '%', $commonnameFrench);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_FRENCH, $commonnameFrench, $comparison);
    }

    /**
     * Filter the query on the CommonName_Italian column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameItalian('fooValue');   // WHERE CommonName_Italian = 'fooValue'
     * $query->filterByCommonnameItalian('%fooValue%'); // WHERE CommonName_Italian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameItalian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameItalian($commonnameItalian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameItalian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameItalian)) {
                $commonnameItalian = str_replace('*', '%', $commonnameItalian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_ITALIAN, $commonnameItalian, $comparison);
    }

    /**
     * Filter the query on the CommonName_Dutch column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameDutch('fooValue');   // WHERE CommonName_Dutch = 'fooValue'
     * $query->filterByCommonnameDutch('%fooValue%'); // WHERE CommonName_Dutch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameDutch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameDutch($commonnameDutch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameDutch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameDutch)) {
                $commonnameDutch = str_replace('*', '%', $commonnameDutch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_DUTCH, $commonnameDutch, $comparison);
    }

    /**
     * Filter the query on the CommonName_Chinese column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameChinese('fooValue');   // WHERE CommonName_Chinese = 'fooValue'
     * $query->filterByCommonnameChinese('%fooValue%'); // WHERE CommonName_Chinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameChinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameChinese($commonnameChinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameChinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameChinese)) {
                $commonnameChinese = str_replace('*', '%', $commonnameChinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_CHINESE, $commonnameChinese, $comparison);
    }

    /**
     * Filter the query on the CommonName_Chinese_u column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameChineseU('fooValue');   // WHERE CommonName_Chinese_u = 'fooValue'
     * $query->filterByCommonnameChineseU('%fooValue%'); // WHERE CommonName_Chinese_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameChineseU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameChineseU($commonnameChineseU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameChineseU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameChineseU)) {
                $commonnameChineseU = str_replace('*', '%', $commonnameChineseU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_CHINESE_U, $commonnameChineseU, $comparison);
    }

    /**
     * Filter the query on the CommonName_Spanish column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameSpanish('fooValue');   // WHERE CommonName_Spanish = 'fooValue'
     * $query->filterByCommonnameSpanish('%fooValue%'); // WHERE CommonName_Spanish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameSpanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameSpanish($commonnameSpanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameSpanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameSpanish)) {
                $commonnameSpanish = str_replace('*', '%', $commonnameSpanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_SPANISH, $commonnameSpanish, $comparison);
    }

    /**
     * Filter the query on the CommonName_Portuguese column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnamePortuguese('fooValue');   // WHERE CommonName_Portuguese = 'fooValue'
     * $query->filterByCommonnamePortuguese('%fooValue%'); // WHERE CommonName_Portuguese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnamePortuguese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnamePortuguese($commonnamePortuguese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnamePortuguese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnamePortuguese)) {
                $commonnamePortuguese = str_replace('*', '%', $commonnamePortuguese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_PORTUGUESE, $commonnamePortuguese, $comparison);
    }

    /**
     * Filter the query on the CommonName_Swedish column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonnameSwedish('fooValue');   // WHERE CommonName_Swedish = 'fooValue'
     * $query->filterByCommonnameSwedish('%fooValue%'); // WHERE CommonName_Swedish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonnameSwedish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function filterByCommonnameSwedish($commonnameSwedish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonnameSwedish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonnameSwedish)) {
                $commonnameSwedish = str_replace('*', '%', $commonnameSwedish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FamiliesPeer::COMMONNAME_SWEDISH, $commonnameSwedish, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Families $families Object to remove from the list of results
     *
     * @return FamiliesQuery The current query, for fluid interface
     */
    public function prune($families = null)
    {
        if ($families) {
            $this->addUsingAlias(FamiliesPeer::FAMILY, $families->getFamily(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
