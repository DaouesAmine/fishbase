<?php


/**
 * Base class that represents a query for the 'wp9socio_indicators' table.
 *
 *
 *
 * @method Wp9socioIndicatorsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method Wp9socioIndicatorsQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method Wp9socioIndicatorsQuery orderByInstitution($order = Criteria::ASC) Order by the Institution column
 * @method Wp9socioIndicatorsQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method Wp9socioIndicatorsQuery orderByMpaname($order = Criteria::ASC) Order by the MPAName column
 * @method Wp9socioIndicatorsQuery orderByMpacountry($order = Criteria::ASC) Order by the MPACountry column
 * @method Wp9socioIndicatorsQuery orderByMpalocation($order = Criteria::ASC) Order by the MPALocation column
 * @method Wp9socioIndicatorsQuery orderByMpacharacter($order = Criteria::ASC) Order by the MPACharacter column
 * @method Wp9socioIndicatorsQuery orderByScubadiving($order = Criteria::ASC) Order by the ScubaDiving column
 * @method Wp9socioIndicatorsQuery orderBySnorkeling($order = Criteria::ASC) Order by the Snorkeling column
 * @method Wp9socioIndicatorsQuery orderByHiking($order = Criteria::ASC) Order by the Hiking column
 * @method Wp9socioIndicatorsQuery orderByFfwatching($order = Criteria::ASC) Order by the FFWatching column
 * @method Wp9socioIndicatorsQuery orderBySeascapewatching($order = Criteria::ASC) Order by the SeascapeWatching column
 * @method Wp9socioIndicatorsQuery orderByOther1($order = Criteria::ASC) Order by the Other1 column
 * @method Wp9socioIndicatorsQuery orderByOther2($order = Criteria::ASC) Order by the Other2 column
 * @method Wp9socioIndicatorsQuery orderByOther3($order = Criteria::ASC) Order by the Other3 column
 * @method Wp9socioIndicatorsQuery orderByOther4($order = Criteria::ASC) Order by the Other4 column
 * @method Wp9socioIndicatorsQuery orderByComname1($order = Criteria::ASC) Order by the ComName1 column
 * @method Wp9socioIndicatorsQuery orderBySciname1($order = Criteria::ASC) Order by the SciName1 column
 * @method Wp9socioIndicatorsQuery orderByDesceco1($order = Criteria::ASC) Order by the DescEco1 column
 * @method Wp9socioIndicatorsQuery orderByTemppres1($order = Criteria::ASC) Order by the TempPres1 column
 * @method Wp9socioIndicatorsQuery orderByComname2($order = Criteria::ASC) Order by the ComName2 column
 * @method Wp9socioIndicatorsQuery orderBySciname2($order = Criteria::ASC) Order by the SciName2 column
 * @method Wp9socioIndicatorsQuery orderByDesceco2($order = Criteria::ASC) Order by the DescEco2 column
 * @method Wp9socioIndicatorsQuery orderByTemppres2($order = Criteria::ASC) Order by the TempPres2 column
 * @method Wp9socioIndicatorsQuery orderByComname3($order = Criteria::ASC) Order by the ComName3 column
 * @method Wp9socioIndicatorsQuery orderBySciname3($order = Criteria::ASC) Order by the SciName3 column
 * @method Wp9socioIndicatorsQuery orderByDesceco3($order = Criteria::ASC) Order by the DescEco3 column
 * @method Wp9socioIndicatorsQuery orderByTemppres3($order = Criteria::ASC) Order by the TempPres3 column
 * @method Wp9socioIndicatorsQuery orderByComname4($order = Criteria::ASC) Order by the ComName4 column
 * @method Wp9socioIndicatorsQuery orderBySciname4($order = Criteria::ASC) Order by the SciName4 column
 * @method Wp9socioIndicatorsQuery orderByDesceco4($order = Criteria::ASC) Order by the DescEco4 column
 * @method Wp9socioIndicatorsQuery orderByTemppres4($order = Criteria::ASC) Order by the TempPres4 column
 * @method Wp9socioIndicatorsQuery orderByEcocomname1($order = Criteria::ASC) Order by the EcoComName1 column
 * @method Wp9socioIndicatorsQuery orderByEcodesceco1($order = Criteria::ASC) Order by the EcoDescEco1 column
 * @method Wp9socioIndicatorsQuery orderByReldis1($order = Criteria::ASC) Order by the RelDis1 column
 * @method Wp9socioIndicatorsQuery orderByEcocomname2($order = Criteria::ASC) Order by the EcoComName2 column
 * @method Wp9socioIndicatorsQuery orderByEcodesceco2($order = Criteria::ASC) Order by the EcoDescEco2 column
 * @method Wp9socioIndicatorsQuery orderByReldis2($order = Criteria::ASC) Order by the RelDis2 column
 * @method Wp9socioIndicatorsQuery orderByEcocomname3($order = Criteria::ASC) Order by the EcoComName3 column
 * @method Wp9socioIndicatorsQuery orderByEcodesceco3($order = Criteria::ASC) Order by the EcoDescEco3 column
 * @method Wp9socioIndicatorsQuery orderByReldis3($order = Criteria::ASC) Order by the RelDis3 column
 * @method Wp9socioIndicatorsQuery orderByEcocomname4($order = Criteria::ASC) Order by the EcoComName4 column
 * @method Wp9socioIndicatorsQuery orderByEcodesceco4($order = Criteria::ASC) Order by the EcoDescEco4 column
 * @method Wp9socioIndicatorsQuery orderByReldis4($order = Criteria::ASC) Order by the RelDis4 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo4($order = Criteria::ASC) Order by the Socio_HistInfo_4 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo3($order = Criteria::ASC) Order by the Socio_HistInfo_3 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo2($order = Criteria::ASC) Order by the Socio_HistInfo_2 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo1($order = Criteria::ASC) Order by the Socio_HistInfo_1 column
 * @method Wp9socioIndicatorsQuery orderBySocioRefInfo1($order = Criteria::ASC) Order by the Socio_Ref_Info1 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo1($order = Criteria::ASC) Order by the Socio_CurInfo_1 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo2($order = Criteria::ASC) Order by the Socio_CurInfo_2 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo3($order = Criteria::ASC) Order by the Socio_CurInfo_3 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo4($order = Criteria::ASC) Order by the Socio_CurInfo_4 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo24($order = Criteria::ASC) Order by the Socio_HistInfo2_4 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo23($order = Criteria::ASC) Order by the Socio_HistInfo2_3 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo22($order = Criteria::ASC) Order by the Socio_HistInfo2_2 column
 * @method Wp9socioIndicatorsQuery orderBySocioHistinfo21($order = Criteria::ASC) Order by the Socio_HistInfo2_1 column
 * @method Wp9socioIndicatorsQuery orderBySocioRefInfo2($order = Criteria::ASC) Order by the Socio_Ref_Info2 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo21($order = Criteria::ASC) Order by the Socio_CurInfo2_1 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo22($order = Criteria::ASC) Order by the Socio_CurInfo2_2 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo23($order = Criteria::ASC) Order by the Socio_CurInfo2_3 column
 * @method Wp9socioIndicatorsQuery orderBySocioCurinfo24($order = Criteria::ASC) Order by the Socio_CurInfo2_4 column
 * @method Wp9socioIndicatorsQuery orderByNewpassword($order = Criteria::ASC) Order by the newpassword column
 * @method Wp9socioIndicatorsQuery orderByInddate($order = Criteria::ASC) Order by the IndDate column
 *
 * @method Wp9socioIndicatorsQuery groupById() Group by the id column
 * @method Wp9socioIndicatorsQuery groupByName() Group by the Name column
 * @method Wp9socioIndicatorsQuery groupByInstitution() Group by the Institution column
 * @method Wp9socioIndicatorsQuery groupByEmail() Group by the Email column
 * @method Wp9socioIndicatorsQuery groupByMpaname() Group by the MPAName column
 * @method Wp9socioIndicatorsQuery groupByMpacountry() Group by the MPACountry column
 * @method Wp9socioIndicatorsQuery groupByMpalocation() Group by the MPALocation column
 * @method Wp9socioIndicatorsQuery groupByMpacharacter() Group by the MPACharacter column
 * @method Wp9socioIndicatorsQuery groupByScubadiving() Group by the ScubaDiving column
 * @method Wp9socioIndicatorsQuery groupBySnorkeling() Group by the Snorkeling column
 * @method Wp9socioIndicatorsQuery groupByHiking() Group by the Hiking column
 * @method Wp9socioIndicatorsQuery groupByFfwatching() Group by the FFWatching column
 * @method Wp9socioIndicatorsQuery groupBySeascapewatching() Group by the SeascapeWatching column
 * @method Wp9socioIndicatorsQuery groupByOther1() Group by the Other1 column
 * @method Wp9socioIndicatorsQuery groupByOther2() Group by the Other2 column
 * @method Wp9socioIndicatorsQuery groupByOther3() Group by the Other3 column
 * @method Wp9socioIndicatorsQuery groupByOther4() Group by the Other4 column
 * @method Wp9socioIndicatorsQuery groupByComname1() Group by the ComName1 column
 * @method Wp9socioIndicatorsQuery groupBySciname1() Group by the SciName1 column
 * @method Wp9socioIndicatorsQuery groupByDesceco1() Group by the DescEco1 column
 * @method Wp9socioIndicatorsQuery groupByTemppres1() Group by the TempPres1 column
 * @method Wp9socioIndicatorsQuery groupByComname2() Group by the ComName2 column
 * @method Wp9socioIndicatorsQuery groupBySciname2() Group by the SciName2 column
 * @method Wp9socioIndicatorsQuery groupByDesceco2() Group by the DescEco2 column
 * @method Wp9socioIndicatorsQuery groupByTemppres2() Group by the TempPres2 column
 * @method Wp9socioIndicatorsQuery groupByComname3() Group by the ComName3 column
 * @method Wp9socioIndicatorsQuery groupBySciname3() Group by the SciName3 column
 * @method Wp9socioIndicatorsQuery groupByDesceco3() Group by the DescEco3 column
 * @method Wp9socioIndicatorsQuery groupByTemppres3() Group by the TempPres3 column
 * @method Wp9socioIndicatorsQuery groupByComname4() Group by the ComName4 column
 * @method Wp9socioIndicatorsQuery groupBySciname4() Group by the SciName4 column
 * @method Wp9socioIndicatorsQuery groupByDesceco4() Group by the DescEco4 column
 * @method Wp9socioIndicatorsQuery groupByTemppres4() Group by the TempPres4 column
 * @method Wp9socioIndicatorsQuery groupByEcocomname1() Group by the EcoComName1 column
 * @method Wp9socioIndicatorsQuery groupByEcodesceco1() Group by the EcoDescEco1 column
 * @method Wp9socioIndicatorsQuery groupByReldis1() Group by the RelDis1 column
 * @method Wp9socioIndicatorsQuery groupByEcocomname2() Group by the EcoComName2 column
 * @method Wp9socioIndicatorsQuery groupByEcodesceco2() Group by the EcoDescEco2 column
 * @method Wp9socioIndicatorsQuery groupByReldis2() Group by the RelDis2 column
 * @method Wp9socioIndicatorsQuery groupByEcocomname3() Group by the EcoComName3 column
 * @method Wp9socioIndicatorsQuery groupByEcodesceco3() Group by the EcoDescEco3 column
 * @method Wp9socioIndicatorsQuery groupByReldis3() Group by the RelDis3 column
 * @method Wp9socioIndicatorsQuery groupByEcocomname4() Group by the EcoComName4 column
 * @method Wp9socioIndicatorsQuery groupByEcodesceco4() Group by the EcoDescEco4 column
 * @method Wp9socioIndicatorsQuery groupByReldis4() Group by the RelDis4 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo4() Group by the Socio_HistInfo_4 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo3() Group by the Socio_HistInfo_3 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo2() Group by the Socio_HistInfo_2 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo1() Group by the Socio_HistInfo_1 column
 * @method Wp9socioIndicatorsQuery groupBySocioRefInfo1() Group by the Socio_Ref_Info1 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo1() Group by the Socio_CurInfo_1 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo2() Group by the Socio_CurInfo_2 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo3() Group by the Socio_CurInfo_3 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo4() Group by the Socio_CurInfo_4 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo24() Group by the Socio_HistInfo2_4 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo23() Group by the Socio_HistInfo2_3 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo22() Group by the Socio_HistInfo2_2 column
 * @method Wp9socioIndicatorsQuery groupBySocioHistinfo21() Group by the Socio_HistInfo2_1 column
 * @method Wp9socioIndicatorsQuery groupBySocioRefInfo2() Group by the Socio_Ref_Info2 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo21() Group by the Socio_CurInfo2_1 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo22() Group by the Socio_CurInfo2_2 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo23() Group by the Socio_CurInfo2_3 column
 * @method Wp9socioIndicatorsQuery groupBySocioCurinfo24() Group by the Socio_CurInfo2_4 column
 * @method Wp9socioIndicatorsQuery groupByNewpassword() Group by the newpassword column
 * @method Wp9socioIndicatorsQuery groupByInddate() Group by the IndDate column
 *
 * @method Wp9socioIndicatorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Wp9socioIndicatorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Wp9socioIndicatorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Wp9socioIndicators findOne(PropelPDO $con = null) Return the first Wp9socioIndicators matching the query
 * @method Wp9socioIndicators findOneOrCreate(PropelPDO $con = null) Return the first Wp9socioIndicators matching the query, or a new Wp9socioIndicators object populated from the query conditions when no match is found
 *
 * @method Wp9socioIndicators findOneByName(string $Name) Return the first Wp9socioIndicators filtered by the Name column
 * @method Wp9socioIndicators findOneByInstitution(string $Institution) Return the first Wp9socioIndicators filtered by the Institution column
 * @method Wp9socioIndicators findOneByEmail(string $Email) Return the first Wp9socioIndicators filtered by the Email column
 * @method Wp9socioIndicators findOneByMpaname(string $MPAName) Return the first Wp9socioIndicators filtered by the MPAName column
 * @method Wp9socioIndicators findOneByMpacountry(string $MPACountry) Return the first Wp9socioIndicators filtered by the MPACountry column
 * @method Wp9socioIndicators findOneByMpalocation(string $MPALocation) Return the first Wp9socioIndicators filtered by the MPALocation column
 * @method Wp9socioIndicators findOneByMpacharacter(string $MPACharacter) Return the first Wp9socioIndicators filtered by the MPACharacter column
 * @method Wp9socioIndicators findOneByScubadiving(string $ScubaDiving) Return the first Wp9socioIndicators filtered by the ScubaDiving column
 * @method Wp9socioIndicators findOneBySnorkeling(string $Snorkeling) Return the first Wp9socioIndicators filtered by the Snorkeling column
 * @method Wp9socioIndicators findOneByHiking(string $Hiking) Return the first Wp9socioIndicators filtered by the Hiking column
 * @method Wp9socioIndicators findOneByFfwatching(string $FFWatching) Return the first Wp9socioIndicators filtered by the FFWatching column
 * @method Wp9socioIndicators findOneBySeascapewatching(string $SeascapeWatching) Return the first Wp9socioIndicators filtered by the SeascapeWatching column
 * @method Wp9socioIndicators findOneByOther1(string $Other1) Return the first Wp9socioIndicators filtered by the Other1 column
 * @method Wp9socioIndicators findOneByOther2(string $Other2) Return the first Wp9socioIndicators filtered by the Other2 column
 * @method Wp9socioIndicators findOneByOther3(string $Other3) Return the first Wp9socioIndicators filtered by the Other3 column
 * @method Wp9socioIndicators findOneByOther4(string $Other4) Return the first Wp9socioIndicators filtered by the Other4 column
 * @method Wp9socioIndicators findOneByComname1(string $ComName1) Return the first Wp9socioIndicators filtered by the ComName1 column
 * @method Wp9socioIndicators findOneBySciname1(string $SciName1) Return the first Wp9socioIndicators filtered by the SciName1 column
 * @method Wp9socioIndicators findOneByDesceco1(string $DescEco1) Return the first Wp9socioIndicators filtered by the DescEco1 column
 * @method Wp9socioIndicators findOneByTemppres1(string $TempPres1) Return the first Wp9socioIndicators filtered by the TempPres1 column
 * @method Wp9socioIndicators findOneByComname2(string $ComName2) Return the first Wp9socioIndicators filtered by the ComName2 column
 * @method Wp9socioIndicators findOneBySciname2(string $SciName2) Return the first Wp9socioIndicators filtered by the SciName2 column
 * @method Wp9socioIndicators findOneByDesceco2(string $DescEco2) Return the first Wp9socioIndicators filtered by the DescEco2 column
 * @method Wp9socioIndicators findOneByTemppres2(string $TempPres2) Return the first Wp9socioIndicators filtered by the TempPres2 column
 * @method Wp9socioIndicators findOneByComname3(string $ComName3) Return the first Wp9socioIndicators filtered by the ComName3 column
 * @method Wp9socioIndicators findOneBySciname3(string $SciName3) Return the first Wp9socioIndicators filtered by the SciName3 column
 * @method Wp9socioIndicators findOneByDesceco3(string $DescEco3) Return the first Wp9socioIndicators filtered by the DescEco3 column
 * @method Wp9socioIndicators findOneByTemppres3(string $TempPres3) Return the first Wp9socioIndicators filtered by the TempPres3 column
 * @method Wp9socioIndicators findOneByComname4(string $ComName4) Return the first Wp9socioIndicators filtered by the ComName4 column
 * @method Wp9socioIndicators findOneBySciname4(string $SciName4) Return the first Wp9socioIndicators filtered by the SciName4 column
 * @method Wp9socioIndicators findOneByDesceco4(string $DescEco4) Return the first Wp9socioIndicators filtered by the DescEco4 column
 * @method Wp9socioIndicators findOneByTemppres4(string $TempPres4) Return the first Wp9socioIndicators filtered by the TempPres4 column
 * @method Wp9socioIndicators findOneByEcocomname1(string $EcoComName1) Return the first Wp9socioIndicators filtered by the EcoComName1 column
 * @method Wp9socioIndicators findOneByEcodesceco1(string $EcoDescEco1) Return the first Wp9socioIndicators filtered by the EcoDescEco1 column
 * @method Wp9socioIndicators findOneByReldis1(string $RelDis1) Return the first Wp9socioIndicators filtered by the RelDis1 column
 * @method Wp9socioIndicators findOneByEcocomname2(string $EcoComName2) Return the first Wp9socioIndicators filtered by the EcoComName2 column
 * @method Wp9socioIndicators findOneByEcodesceco2(string $EcoDescEco2) Return the first Wp9socioIndicators filtered by the EcoDescEco2 column
 * @method Wp9socioIndicators findOneByReldis2(string $RelDis2) Return the first Wp9socioIndicators filtered by the RelDis2 column
 * @method Wp9socioIndicators findOneByEcocomname3(string $EcoComName3) Return the first Wp9socioIndicators filtered by the EcoComName3 column
 * @method Wp9socioIndicators findOneByEcodesceco3(string $EcoDescEco3) Return the first Wp9socioIndicators filtered by the EcoDescEco3 column
 * @method Wp9socioIndicators findOneByReldis3(string $RelDis3) Return the first Wp9socioIndicators filtered by the RelDis3 column
 * @method Wp9socioIndicators findOneByEcocomname4(string $EcoComName4) Return the first Wp9socioIndicators filtered by the EcoComName4 column
 * @method Wp9socioIndicators findOneByEcodesceco4(string $EcoDescEco4) Return the first Wp9socioIndicators filtered by the EcoDescEco4 column
 * @method Wp9socioIndicators findOneByReldis4(string $RelDis4) Return the first Wp9socioIndicators filtered by the RelDis4 column
 * @method Wp9socioIndicators findOneBySocioHistinfo4(string $Socio_HistInfo_4) Return the first Wp9socioIndicators filtered by the Socio_HistInfo_4 column
 * @method Wp9socioIndicators findOneBySocioHistinfo3(string $Socio_HistInfo_3) Return the first Wp9socioIndicators filtered by the Socio_HistInfo_3 column
 * @method Wp9socioIndicators findOneBySocioHistinfo2(string $Socio_HistInfo_2) Return the first Wp9socioIndicators filtered by the Socio_HistInfo_2 column
 * @method Wp9socioIndicators findOneBySocioHistinfo1(string $Socio_HistInfo_1) Return the first Wp9socioIndicators filtered by the Socio_HistInfo_1 column
 * @method Wp9socioIndicators findOneBySocioRefInfo1(string $Socio_Ref_Info1) Return the first Wp9socioIndicators filtered by the Socio_Ref_Info1 column
 * @method Wp9socioIndicators findOneBySocioCurinfo1(string $Socio_CurInfo_1) Return the first Wp9socioIndicators filtered by the Socio_CurInfo_1 column
 * @method Wp9socioIndicators findOneBySocioCurinfo2(string $Socio_CurInfo_2) Return the first Wp9socioIndicators filtered by the Socio_CurInfo_2 column
 * @method Wp9socioIndicators findOneBySocioCurinfo3(string $Socio_CurInfo_3) Return the first Wp9socioIndicators filtered by the Socio_CurInfo_3 column
 * @method Wp9socioIndicators findOneBySocioCurinfo4(string $Socio_CurInfo_4) Return the first Wp9socioIndicators filtered by the Socio_CurInfo_4 column
 * @method Wp9socioIndicators findOneBySocioHistinfo24(string $Socio_HistInfo2_4) Return the first Wp9socioIndicators filtered by the Socio_HistInfo2_4 column
 * @method Wp9socioIndicators findOneBySocioHistinfo23(string $Socio_HistInfo2_3) Return the first Wp9socioIndicators filtered by the Socio_HistInfo2_3 column
 * @method Wp9socioIndicators findOneBySocioHistinfo22(string $Socio_HistInfo2_2) Return the first Wp9socioIndicators filtered by the Socio_HistInfo2_2 column
 * @method Wp9socioIndicators findOneBySocioHistinfo21(string $Socio_HistInfo2_1) Return the first Wp9socioIndicators filtered by the Socio_HistInfo2_1 column
 * @method Wp9socioIndicators findOneBySocioRefInfo2(string $Socio_Ref_Info2) Return the first Wp9socioIndicators filtered by the Socio_Ref_Info2 column
 * @method Wp9socioIndicators findOneBySocioCurinfo21(string $Socio_CurInfo2_1) Return the first Wp9socioIndicators filtered by the Socio_CurInfo2_1 column
 * @method Wp9socioIndicators findOneBySocioCurinfo22(string $Socio_CurInfo2_2) Return the first Wp9socioIndicators filtered by the Socio_CurInfo2_2 column
 * @method Wp9socioIndicators findOneBySocioCurinfo23(string $Socio_CurInfo2_3) Return the first Wp9socioIndicators filtered by the Socio_CurInfo2_3 column
 * @method Wp9socioIndicators findOneBySocioCurinfo24(string $Socio_CurInfo2_4) Return the first Wp9socioIndicators filtered by the Socio_CurInfo2_4 column
 * @method Wp9socioIndicators findOneByNewpassword(string $newpassword) Return the first Wp9socioIndicators filtered by the newpassword column
 * @method Wp9socioIndicators findOneByInddate(string $IndDate) Return the first Wp9socioIndicators filtered by the IndDate column
 *
 * @method array findById(int $id) Return Wp9socioIndicators objects filtered by the id column
 * @method array findByName(string $Name) Return Wp9socioIndicators objects filtered by the Name column
 * @method array findByInstitution(string $Institution) Return Wp9socioIndicators objects filtered by the Institution column
 * @method array findByEmail(string $Email) Return Wp9socioIndicators objects filtered by the Email column
 * @method array findByMpaname(string $MPAName) Return Wp9socioIndicators objects filtered by the MPAName column
 * @method array findByMpacountry(string $MPACountry) Return Wp9socioIndicators objects filtered by the MPACountry column
 * @method array findByMpalocation(string $MPALocation) Return Wp9socioIndicators objects filtered by the MPALocation column
 * @method array findByMpacharacter(string $MPACharacter) Return Wp9socioIndicators objects filtered by the MPACharacter column
 * @method array findByScubadiving(string $ScubaDiving) Return Wp9socioIndicators objects filtered by the ScubaDiving column
 * @method array findBySnorkeling(string $Snorkeling) Return Wp9socioIndicators objects filtered by the Snorkeling column
 * @method array findByHiking(string $Hiking) Return Wp9socioIndicators objects filtered by the Hiking column
 * @method array findByFfwatching(string $FFWatching) Return Wp9socioIndicators objects filtered by the FFWatching column
 * @method array findBySeascapewatching(string $SeascapeWatching) Return Wp9socioIndicators objects filtered by the SeascapeWatching column
 * @method array findByOther1(string $Other1) Return Wp9socioIndicators objects filtered by the Other1 column
 * @method array findByOther2(string $Other2) Return Wp9socioIndicators objects filtered by the Other2 column
 * @method array findByOther3(string $Other3) Return Wp9socioIndicators objects filtered by the Other3 column
 * @method array findByOther4(string $Other4) Return Wp9socioIndicators objects filtered by the Other4 column
 * @method array findByComname1(string $ComName1) Return Wp9socioIndicators objects filtered by the ComName1 column
 * @method array findBySciname1(string $SciName1) Return Wp9socioIndicators objects filtered by the SciName1 column
 * @method array findByDesceco1(string $DescEco1) Return Wp9socioIndicators objects filtered by the DescEco1 column
 * @method array findByTemppres1(string $TempPres1) Return Wp9socioIndicators objects filtered by the TempPres1 column
 * @method array findByComname2(string $ComName2) Return Wp9socioIndicators objects filtered by the ComName2 column
 * @method array findBySciname2(string $SciName2) Return Wp9socioIndicators objects filtered by the SciName2 column
 * @method array findByDesceco2(string $DescEco2) Return Wp9socioIndicators objects filtered by the DescEco2 column
 * @method array findByTemppres2(string $TempPres2) Return Wp9socioIndicators objects filtered by the TempPres2 column
 * @method array findByComname3(string $ComName3) Return Wp9socioIndicators objects filtered by the ComName3 column
 * @method array findBySciname3(string $SciName3) Return Wp9socioIndicators objects filtered by the SciName3 column
 * @method array findByDesceco3(string $DescEco3) Return Wp9socioIndicators objects filtered by the DescEco3 column
 * @method array findByTemppres3(string $TempPres3) Return Wp9socioIndicators objects filtered by the TempPres3 column
 * @method array findByComname4(string $ComName4) Return Wp9socioIndicators objects filtered by the ComName4 column
 * @method array findBySciname4(string $SciName4) Return Wp9socioIndicators objects filtered by the SciName4 column
 * @method array findByDesceco4(string $DescEco4) Return Wp9socioIndicators objects filtered by the DescEco4 column
 * @method array findByTemppres4(string $TempPres4) Return Wp9socioIndicators objects filtered by the TempPres4 column
 * @method array findByEcocomname1(string $EcoComName1) Return Wp9socioIndicators objects filtered by the EcoComName1 column
 * @method array findByEcodesceco1(string $EcoDescEco1) Return Wp9socioIndicators objects filtered by the EcoDescEco1 column
 * @method array findByReldis1(string $RelDis1) Return Wp9socioIndicators objects filtered by the RelDis1 column
 * @method array findByEcocomname2(string $EcoComName2) Return Wp9socioIndicators objects filtered by the EcoComName2 column
 * @method array findByEcodesceco2(string $EcoDescEco2) Return Wp9socioIndicators objects filtered by the EcoDescEco2 column
 * @method array findByReldis2(string $RelDis2) Return Wp9socioIndicators objects filtered by the RelDis2 column
 * @method array findByEcocomname3(string $EcoComName3) Return Wp9socioIndicators objects filtered by the EcoComName3 column
 * @method array findByEcodesceco3(string $EcoDescEco3) Return Wp9socioIndicators objects filtered by the EcoDescEco3 column
 * @method array findByReldis3(string $RelDis3) Return Wp9socioIndicators objects filtered by the RelDis3 column
 * @method array findByEcocomname4(string $EcoComName4) Return Wp9socioIndicators objects filtered by the EcoComName4 column
 * @method array findByEcodesceco4(string $EcoDescEco4) Return Wp9socioIndicators objects filtered by the EcoDescEco4 column
 * @method array findByReldis4(string $RelDis4) Return Wp9socioIndicators objects filtered by the RelDis4 column
 * @method array findBySocioHistinfo4(string $Socio_HistInfo_4) Return Wp9socioIndicators objects filtered by the Socio_HistInfo_4 column
 * @method array findBySocioHistinfo3(string $Socio_HistInfo_3) Return Wp9socioIndicators objects filtered by the Socio_HistInfo_3 column
 * @method array findBySocioHistinfo2(string $Socio_HistInfo_2) Return Wp9socioIndicators objects filtered by the Socio_HistInfo_2 column
 * @method array findBySocioHistinfo1(string $Socio_HistInfo_1) Return Wp9socioIndicators objects filtered by the Socio_HistInfo_1 column
 * @method array findBySocioRefInfo1(string $Socio_Ref_Info1) Return Wp9socioIndicators objects filtered by the Socio_Ref_Info1 column
 * @method array findBySocioCurinfo1(string $Socio_CurInfo_1) Return Wp9socioIndicators objects filtered by the Socio_CurInfo_1 column
 * @method array findBySocioCurinfo2(string $Socio_CurInfo_2) Return Wp9socioIndicators objects filtered by the Socio_CurInfo_2 column
 * @method array findBySocioCurinfo3(string $Socio_CurInfo_3) Return Wp9socioIndicators objects filtered by the Socio_CurInfo_3 column
 * @method array findBySocioCurinfo4(string $Socio_CurInfo_4) Return Wp9socioIndicators objects filtered by the Socio_CurInfo_4 column
 * @method array findBySocioHistinfo24(string $Socio_HistInfo2_4) Return Wp9socioIndicators objects filtered by the Socio_HistInfo2_4 column
 * @method array findBySocioHistinfo23(string $Socio_HistInfo2_3) Return Wp9socioIndicators objects filtered by the Socio_HistInfo2_3 column
 * @method array findBySocioHistinfo22(string $Socio_HistInfo2_2) Return Wp9socioIndicators objects filtered by the Socio_HistInfo2_2 column
 * @method array findBySocioHistinfo21(string $Socio_HistInfo2_1) Return Wp9socioIndicators objects filtered by the Socio_HistInfo2_1 column
 * @method array findBySocioRefInfo2(string $Socio_Ref_Info2) Return Wp9socioIndicators objects filtered by the Socio_Ref_Info2 column
 * @method array findBySocioCurinfo21(string $Socio_CurInfo2_1) Return Wp9socioIndicators objects filtered by the Socio_CurInfo2_1 column
 * @method array findBySocioCurinfo22(string $Socio_CurInfo2_2) Return Wp9socioIndicators objects filtered by the Socio_CurInfo2_2 column
 * @method array findBySocioCurinfo23(string $Socio_CurInfo2_3) Return Wp9socioIndicators objects filtered by the Socio_CurInfo2_3 column
 * @method array findBySocioCurinfo24(string $Socio_CurInfo2_4) Return Wp9socioIndicators objects filtered by the Socio_CurInfo2_4 column
 * @method array findByNewpassword(string $newpassword) Return Wp9socioIndicators objects filtered by the newpassword column
 * @method array findByInddate(string $IndDate) Return Wp9socioIndicators objects filtered by the IndDate column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWp9socioIndicatorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWp9socioIndicatorsQuery object.
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
            $modelName = 'Wp9socioIndicators';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Wp9socioIndicatorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Wp9socioIndicatorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Wp9socioIndicatorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Wp9socioIndicatorsQuery) {
            return $criteria;
        }
        $query = new Wp9socioIndicatorsQuery(null, null, $modelAlias);

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
     * @return   Wp9socioIndicators|Wp9socioIndicators[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Wp9socioIndicatorsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Wp9socioIndicators A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 Wp9socioIndicators A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `Name`, `Institution`, `Email`, `MPAName`, `MPACountry`, `MPALocation`, `MPACharacter`, `ScubaDiving`, `Snorkeling`, `Hiking`, `FFWatching`, `SeascapeWatching`, `Other1`, `Other2`, `Other3`, `Other4`, `ComName1`, `SciName1`, `DescEco1`, `TempPres1`, `ComName2`, `SciName2`, `DescEco2`, `TempPres2`, `ComName3`, `SciName3`, `DescEco3`, `TempPres3`, `ComName4`, `SciName4`, `DescEco4`, `TempPres4`, `EcoComName1`, `EcoDescEco1`, `RelDis1`, `EcoComName2`, `EcoDescEco2`, `RelDis2`, `EcoComName3`, `EcoDescEco3`, `RelDis3`, `EcoComName4`, `EcoDescEco4`, `RelDis4`, `Socio_HistInfo_4`, `Socio_HistInfo_3`, `Socio_HistInfo_2`, `Socio_HistInfo_1`, `Socio_Ref_Info1`, `Socio_CurInfo_1`, `Socio_CurInfo_2`, `Socio_CurInfo_3`, `Socio_CurInfo_4`, `Socio_HistInfo2_4`, `Socio_HistInfo2_3`, `Socio_HistInfo2_2`, `Socio_HistInfo2_1`, `Socio_Ref_Info2`, `Socio_CurInfo2_1`, `Socio_CurInfo2_2`, `Socio_CurInfo2_3`, `Socio_CurInfo2_4`, `newpassword`, `IndDate` FROM `wp9socio_indicators` WHERE `id` = :p0';
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
            $obj = new Wp9socioIndicators();
            $obj->hydrate($row);
            Wp9socioIndicatorsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Wp9socioIndicators|Wp9socioIndicators[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Wp9socioIndicators[]|mixed the list of results, formatted by the current formatter
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
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(Wp9socioIndicatorsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(Wp9socioIndicatorsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE Name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the Institution column
     *
     * Example usage:
     * <code>
     * $query->filterByInstitution('fooValue');   // WHERE Institution = 'fooValue'
     * $query->filterByInstitution('%fooValue%'); // WHERE Institution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $institution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByInstitution($institution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($institution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $institution)) {
                $institution = str_replace('*', '%', $institution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::INSTITUTION, $institution, $comparison);
    }

    /**
     * Filter the query on the Email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE Email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the MPAName column
     *
     * Example usage:
     * <code>
     * $query->filterByMpaname('fooValue');   // WHERE MPAName = 'fooValue'
     * $query->filterByMpaname('%fooValue%'); // WHERE MPAName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mpaname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByMpaname($mpaname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mpaname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mpaname)) {
                $mpaname = str_replace('*', '%', $mpaname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::MPANAME, $mpaname, $comparison);
    }

    /**
     * Filter the query on the MPACountry column
     *
     * Example usage:
     * <code>
     * $query->filterByMpacountry('fooValue');   // WHERE MPACountry = 'fooValue'
     * $query->filterByMpacountry('%fooValue%'); // WHERE MPACountry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mpacountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByMpacountry($mpacountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mpacountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mpacountry)) {
                $mpacountry = str_replace('*', '%', $mpacountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::MPACOUNTRY, $mpacountry, $comparison);
    }

    /**
     * Filter the query on the MPALocation column
     *
     * Example usage:
     * <code>
     * $query->filterByMpalocation('fooValue');   // WHERE MPALocation = 'fooValue'
     * $query->filterByMpalocation('%fooValue%'); // WHERE MPALocation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mpalocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByMpalocation($mpalocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mpalocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mpalocation)) {
                $mpalocation = str_replace('*', '%', $mpalocation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::MPALOCATION, $mpalocation, $comparison);
    }

    /**
     * Filter the query on the MPACharacter column
     *
     * Example usage:
     * <code>
     * $query->filterByMpacharacter('fooValue');   // WHERE MPACharacter = 'fooValue'
     * $query->filterByMpacharacter('%fooValue%'); // WHERE MPACharacter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mpacharacter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByMpacharacter($mpacharacter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mpacharacter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mpacharacter)) {
                $mpacharacter = str_replace('*', '%', $mpacharacter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::MPACHARACTER, $mpacharacter, $comparison);
    }

    /**
     * Filter the query on the ScubaDiving column
     *
     * Example usage:
     * <code>
     * $query->filterByScubadiving('fooValue');   // WHERE ScubaDiving = 'fooValue'
     * $query->filterByScubadiving('%fooValue%'); // WHERE ScubaDiving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scubadiving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByScubadiving($scubadiving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scubadiving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scubadiving)) {
                $scubadiving = str_replace('*', '%', $scubadiving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SCUBADIVING, $scubadiving, $comparison);
    }

    /**
     * Filter the query on the Snorkeling column
     *
     * Example usage:
     * <code>
     * $query->filterBySnorkeling('fooValue');   // WHERE Snorkeling = 'fooValue'
     * $query->filterBySnorkeling('%fooValue%'); // WHERE Snorkeling LIKE '%fooValue%'
     * </code>
     *
     * @param     string $snorkeling The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySnorkeling($snorkeling = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($snorkeling)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $snorkeling)) {
                $snorkeling = str_replace('*', '%', $snorkeling);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SNORKELING, $snorkeling, $comparison);
    }

    /**
     * Filter the query on the Hiking column
     *
     * Example usage:
     * <code>
     * $query->filterByHiking('fooValue');   // WHERE Hiking = 'fooValue'
     * $query->filterByHiking('%fooValue%'); // WHERE Hiking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hiking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByHiking($hiking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hiking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hiking)) {
                $hiking = str_replace('*', '%', $hiking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::HIKING, $hiking, $comparison);
    }

    /**
     * Filter the query on the FFWatching column
     *
     * Example usage:
     * <code>
     * $query->filterByFfwatching('fooValue');   // WHERE FFWatching = 'fooValue'
     * $query->filterByFfwatching('%fooValue%'); // WHERE FFWatching LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ffwatching The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByFfwatching($ffwatching = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ffwatching)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ffwatching)) {
                $ffwatching = str_replace('*', '%', $ffwatching);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::FFWATCHING, $ffwatching, $comparison);
    }

    /**
     * Filter the query on the SeascapeWatching column
     *
     * Example usage:
     * <code>
     * $query->filterBySeascapewatching('fooValue');   // WHERE SeascapeWatching = 'fooValue'
     * $query->filterBySeascapewatching('%fooValue%'); // WHERE SeascapeWatching LIKE '%fooValue%'
     * </code>
     *
     * @param     string $seascapewatching The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySeascapewatching($seascapewatching = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($seascapewatching)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $seascapewatching)) {
                $seascapewatching = str_replace('*', '%', $seascapewatching);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SEASCAPEWATCHING, $seascapewatching, $comparison);
    }

    /**
     * Filter the query on the Other1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther1('fooValue');   // WHERE Other1 = 'fooValue'
     * $query->filterByOther1('%fooValue%'); // WHERE Other1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByOther1($other1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $other1)) {
                $other1 = str_replace('*', '%', $other1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::OTHER1, $other1, $comparison);
    }

    /**
     * Filter the query on the Other2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther2('fooValue');   // WHERE Other2 = 'fooValue'
     * $query->filterByOther2('%fooValue%'); // WHERE Other2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByOther2($other2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $other2)) {
                $other2 = str_replace('*', '%', $other2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::OTHER2, $other2, $comparison);
    }

    /**
     * Filter the query on the Other3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther3('fooValue');   // WHERE Other3 = 'fooValue'
     * $query->filterByOther3('%fooValue%'); // WHERE Other3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByOther3($other3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $other3)) {
                $other3 = str_replace('*', '%', $other3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::OTHER3, $other3, $comparison);
    }

    /**
     * Filter the query on the Other4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther4('fooValue');   // WHERE Other4 = 'fooValue'
     * $query->filterByOther4('%fooValue%'); // WHERE Other4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByOther4($other4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $other4)) {
                $other4 = str_replace('*', '%', $other4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::OTHER4, $other4, $comparison);
    }

    /**
     * Filter the query on the ComName1 column
     *
     * Example usage:
     * <code>
     * $query->filterByComname1('fooValue');   // WHERE ComName1 = 'fooValue'
     * $query->filterByComname1('%fooValue%'); // WHERE ComName1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comname1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByComname1($comname1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comname1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comname1)) {
                $comname1 = str_replace('*', '%', $comname1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::COMNAME1, $comname1, $comparison);
    }

    /**
     * Filter the query on the SciName1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySciname1('fooValue');   // WHERE SciName1 = 'fooValue'
     * $query->filterBySciname1('%fooValue%'); // WHERE SciName1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sciname1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySciname1($sciname1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sciname1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sciname1)) {
                $sciname1 = str_replace('*', '%', $sciname1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SCINAME1, $sciname1, $comparison);
    }

    /**
     * Filter the query on the DescEco1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDesceco1('fooValue');   // WHERE DescEco1 = 'fooValue'
     * $query->filterByDesceco1('%fooValue%'); // WHERE DescEco1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desceco1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByDesceco1($desceco1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desceco1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desceco1)) {
                $desceco1 = str_replace('*', '%', $desceco1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::DESCECO1, $desceco1, $comparison);
    }

    /**
     * Filter the query on the TempPres1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTemppres1('fooValue');   // WHERE TempPres1 = 'fooValue'
     * $query->filterByTemppres1('%fooValue%'); // WHERE TempPres1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $temppres1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByTemppres1($temppres1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($temppres1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $temppres1)) {
                $temppres1 = str_replace('*', '%', $temppres1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::TEMPPRES1, $temppres1, $comparison);
    }

    /**
     * Filter the query on the ComName2 column
     *
     * Example usage:
     * <code>
     * $query->filterByComname2('fooValue');   // WHERE ComName2 = 'fooValue'
     * $query->filterByComname2('%fooValue%'); // WHERE ComName2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comname2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByComname2($comname2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comname2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comname2)) {
                $comname2 = str_replace('*', '%', $comname2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::COMNAME2, $comname2, $comparison);
    }

    /**
     * Filter the query on the SciName2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySciname2('fooValue');   // WHERE SciName2 = 'fooValue'
     * $query->filterBySciname2('%fooValue%'); // WHERE SciName2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sciname2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySciname2($sciname2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sciname2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sciname2)) {
                $sciname2 = str_replace('*', '%', $sciname2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SCINAME2, $sciname2, $comparison);
    }

    /**
     * Filter the query on the DescEco2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDesceco2('fooValue');   // WHERE DescEco2 = 'fooValue'
     * $query->filterByDesceco2('%fooValue%'); // WHERE DescEco2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desceco2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByDesceco2($desceco2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desceco2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desceco2)) {
                $desceco2 = str_replace('*', '%', $desceco2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::DESCECO2, $desceco2, $comparison);
    }

    /**
     * Filter the query on the TempPres2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTemppres2('fooValue');   // WHERE TempPres2 = 'fooValue'
     * $query->filterByTemppres2('%fooValue%'); // WHERE TempPres2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $temppres2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByTemppres2($temppres2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($temppres2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $temppres2)) {
                $temppres2 = str_replace('*', '%', $temppres2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::TEMPPRES2, $temppres2, $comparison);
    }

    /**
     * Filter the query on the ComName3 column
     *
     * Example usage:
     * <code>
     * $query->filterByComname3('fooValue');   // WHERE ComName3 = 'fooValue'
     * $query->filterByComname3('%fooValue%'); // WHERE ComName3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comname3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByComname3($comname3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comname3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comname3)) {
                $comname3 = str_replace('*', '%', $comname3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::COMNAME3, $comname3, $comparison);
    }

    /**
     * Filter the query on the SciName3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySciname3('fooValue');   // WHERE SciName3 = 'fooValue'
     * $query->filterBySciname3('%fooValue%'); // WHERE SciName3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sciname3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySciname3($sciname3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sciname3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sciname3)) {
                $sciname3 = str_replace('*', '%', $sciname3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SCINAME3, $sciname3, $comparison);
    }

    /**
     * Filter the query on the DescEco3 column
     *
     * Example usage:
     * <code>
     * $query->filterByDesceco3('fooValue');   // WHERE DescEco3 = 'fooValue'
     * $query->filterByDesceco3('%fooValue%'); // WHERE DescEco3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desceco3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByDesceco3($desceco3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desceco3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desceco3)) {
                $desceco3 = str_replace('*', '%', $desceco3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::DESCECO3, $desceco3, $comparison);
    }

    /**
     * Filter the query on the TempPres3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTemppres3('fooValue');   // WHERE TempPres3 = 'fooValue'
     * $query->filterByTemppres3('%fooValue%'); // WHERE TempPres3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $temppres3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByTemppres3($temppres3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($temppres3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $temppres3)) {
                $temppres3 = str_replace('*', '%', $temppres3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::TEMPPRES3, $temppres3, $comparison);
    }

    /**
     * Filter the query on the ComName4 column
     *
     * Example usage:
     * <code>
     * $query->filterByComname4('fooValue');   // WHERE ComName4 = 'fooValue'
     * $query->filterByComname4('%fooValue%'); // WHERE ComName4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comname4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByComname4($comname4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comname4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comname4)) {
                $comname4 = str_replace('*', '%', $comname4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::COMNAME4, $comname4, $comparison);
    }

    /**
     * Filter the query on the SciName4 column
     *
     * Example usage:
     * <code>
     * $query->filterBySciname4('fooValue');   // WHERE SciName4 = 'fooValue'
     * $query->filterBySciname4('%fooValue%'); // WHERE SciName4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sciname4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySciname4($sciname4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sciname4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sciname4)) {
                $sciname4 = str_replace('*', '%', $sciname4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SCINAME4, $sciname4, $comparison);
    }

    /**
     * Filter the query on the DescEco4 column
     *
     * Example usage:
     * <code>
     * $query->filterByDesceco4('fooValue');   // WHERE DescEco4 = 'fooValue'
     * $query->filterByDesceco4('%fooValue%'); // WHERE DescEco4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desceco4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByDesceco4($desceco4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desceco4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desceco4)) {
                $desceco4 = str_replace('*', '%', $desceco4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::DESCECO4, $desceco4, $comparison);
    }

    /**
     * Filter the query on the TempPres4 column
     *
     * Example usage:
     * <code>
     * $query->filterByTemppres4('fooValue');   // WHERE TempPres4 = 'fooValue'
     * $query->filterByTemppres4('%fooValue%'); // WHERE TempPres4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $temppres4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByTemppres4($temppres4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($temppres4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $temppres4)) {
                $temppres4 = str_replace('*', '%', $temppres4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::TEMPPRES4, $temppres4, $comparison);
    }

    /**
     * Filter the query on the EcoComName1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcocomname1('fooValue');   // WHERE EcoComName1 = 'fooValue'
     * $query->filterByEcocomname1('%fooValue%'); // WHERE EcoComName1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecocomname1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcocomname1($ecocomname1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecocomname1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecocomname1)) {
                $ecocomname1 = str_replace('*', '%', $ecocomname1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECOCOMNAME1, $ecocomname1, $comparison);
    }

    /**
     * Filter the query on the EcoDescEco1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcodesceco1('fooValue');   // WHERE EcoDescEco1 = 'fooValue'
     * $query->filterByEcodesceco1('%fooValue%'); // WHERE EcoDescEco1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecodesceco1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcodesceco1($ecodesceco1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecodesceco1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecodesceco1)) {
                $ecodesceco1 = str_replace('*', '%', $ecodesceco1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECODESCECO1, $ecodesceco1, $comparison);
    }

    /**
     * Filter the query on the RelDis1 column
     *
     * Example usage:
     * <code>
     * $query->filterByReldis1('fooValue');   // WHERE RelDis1 = 'fooValue'
     * $query->filterByReldis1('%fooValue%'); // WHERE RelDis1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reldis1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByReldis1($reldis1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reldis1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reldis1)) {
                $reldis1 = str_replace('*', '%', $reldis1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::RELDIS1, $reldis1, $comparison);
    }

    /**
     * Filter the query on the EcoComName2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcocomname2('fooValue');   // WHERE EcoComName2 = 'fooValue'
     * $query->filterByEcocomname2('%fooValue%'); // WHERE EcoComName2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecocomname2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcocomname2($ecocomname2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecocomname2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecocomname2)) {
                $ecocomname2 = str_replace('*', '%', $ecocomname2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECOCOMNAME2, $ecocomname2, $comparison);
    }

    /**
     * Filter the query on the EcoDescEco2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcodesceco2('fooValue');   // WHERE EcoDescEco2 = 'fooValue'
     * $query->filterByEcodesceco2('%fooValue%'); // WHERE EcoDescEco2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecodesceco2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcodesceco2($ecodesceco2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecodesceco2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecodesceco2)) {
                $ecodesceco2 = str_replace('*', '%', $ecodesceco2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECODESCECO2, $ecodesceco2, $comparison);
    }

    /**
     * Filter the query on the RelDis2 column
     *
     * Example usage:
     * <code>
     * $query->filterByReldis2('fooValue');   // WHERE RelDis2 = 'fooValue'
     * $query->filterByReldis2('%fooValue%'); // WHERE RelDis2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reldis2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByReldis2($reldis2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reldis2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reldis2)) {
                $reldis2 = str_replace('*', '%', $reldis2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::RELDIS2, $reldis2, $comparison);
    }

    /**
     * Filter the query on the EcoComName3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcocomname3('fooValue');   // WHERE EcoComName3 = 'fooValue'
     * $query->filterByEcocomname3('%fooValue%'); // WHERE EcoComName3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecocomname3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcocomname3($ecocomname3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecocomname3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecocomname3)) {
                $ecocomname3 = str_replace('*', '%', $ecocomname3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECOCOMNAME3, $ecocomname3, $comparison);
    }

    /**
     * Filter the query on the EcoDescEco3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcodesceco3('fooValue');   // WHERE EcoDescEco3 = 'fooValue'
     * $query->filterByEcodesceco3('%fooValue%'); // WHERE EcoDescEco3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecodesceco3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcodesceco3($ecodesceco3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecodesceco3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecodesceco3)) {
                $ecodesceco3 = str_replace('*', '%', $ecodesceco3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECODESCECO3, $ecodesceco3, $comparison);
    }

    /**
     * Filter the query on the RelDis3 column
     *
     * Example usage:
     * <code>
     * $query->filterByReldis3('fooValue');   // WHERE RelDis3 = 'fooValue'
     * $query->filterByReldis3('%fooValue%'); // WHERE RelDis3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reldis3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByReldis3($reldis3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reldis3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reldis3)) {
                $reldis3 = str_replace('*', '%', $reldis3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::RELDIS3, $reldis3, $comparison);
    }

    /**
     * Filter the query on the EcoComName4 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcocomname4('fooValue');   // WHERE EcoComName4 = 'fooValue'
     * $query->filterByEcocomname4('%fooValue%'); // WHERE EcoComName4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecocomname4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcocomname4($ecocomname4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecocomname4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecocomname4)) {
                $ecocomname4 = str_replace('*', '%', $ecocomname4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECOCOMNAME4, $ecocomname4, $comparison);
    }

    /**
     * Filter the query on the EcoDescEco4 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcodesceco4('fooValue');   // WHERE EcoDescEco4 = 'fooValue'
     * $query->filterByEcodesceco4('%fooValue%'); // WHERE EcoDescEco4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecodesceco4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByEcodesceco4($ecodesceco4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecodesceco4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecodesceco4)) {
                $ecodesceco4 = str_replace('*', '%', $ecodesceco4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::ECODESCECO4, $ecodesceco4, $comparison);
    }

    /**
     * Filter the query on the RelDis4 column
     *
     * Example usage:
     * <code>
     * $query->filterByReldis4('fooValue');   // WHERE RelDis4 = 'fooValue'
     * $query->filterByReldis4('%fooValue%'); // WHERE RelDis4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reldis4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByReldis4($reldis4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reldis4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reldis4)) {
                $reldis4 = str_replace('*', '%', $reldis4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::RELDIS4, $reldis4, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo4('fooValue');   // WHERE Socio_HistInfo_4 = 'fooValue'
     * $query->filterBySocioHistinfo4('%fooValue%'); // WHERE Socio_HistInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo4($socioHistinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo4)) {
                $socioHistinfo4 = str_replace('*', '%', $socioHistinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4, $socioHistinfo4, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo3('fooValue');   // WHERE Socio_HistInfo_3 = 'fooValue'
     * $query->filterBySocioHistinfo3('%fooValue%'); // WHERE Socio_HistInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo3($socioHistinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo3)) {
                $socioHistinfo3 = str_replace('*', '%', $socioHistinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3, $socioHistinfo3, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo2('fooValue');   // WHERE Socio_HistInfo_2 = 'fooValue'
     * $query->filterBySocioHistinfo2('%fooValue%'); // WHERE Socio_HistInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo2($socioHistinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo2)) {
                $socioHistinfo2 = str_replace('*', '%', $socioHistinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2, $socioHistinfo2, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo1('fooValue');   // WHERE Socio_HistInfo_1 = 'fooValue'
     * $query->filterBySocioHistinfo1('%fooValue%'); // WHERE Socio_HistInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo1($socioHistinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo1)) {
                $socioHistinfo1 = str_replace('*', '%', $socioHistinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1, $socioHistinfo1, $comparison);
    }

    /**
     * Filter the query on the Socio_Ref_Info1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioRefInfo1('fooValue');   // WHERE Socio_Ref_Info1 = 'fooValue'
     * $query->filterBySocioRefInfo1('%fooValue%'); // WHERE Socio_Ref_Info1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioRefInfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioRefInfo1($socioRefInfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioRefInfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioRefInfo1)) {
                $socioRefInfo1 = str_replace('*', '%', $socioRefInfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_REF_INFO1, $socioRefInfo1, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo1('fooValue');   // WHERE Socio_CurInfo_1 = 'fooValue'
     * $query->filterBySocioCurinfo1('%fooValue%'); // WHERE Socio_CurInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo1($socioCurinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo1)) {
                $socioCurinfo1 = str_replace('*', '%', $socioCurinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO_1, $socioCurinfo1, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo2('fooValue');   // WHERE Socio_CurInfo_2 = 'fooValue'
     * $query->filterBySocioCurinfo2('%fooValue%'); // WHERE Socio_CurInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo2($socioCurinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo2)) {
                $socioCurinfo2 = str_replace('*', '%', $socioCurinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO_2, $socioCurinfo2, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo3('fooValue');   // WHERE Socio_CurInfo_3 = 'fooValue'
     * $query->filterBySocioCurinfo3('%fooValue%'); // WHERE Socio_CurInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo3($socioCurinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo3)) {
                $socioCurinfo3 = str_replace('*', '%', $socioCurinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO_3, $socioCurinfo3, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo4('fooValue');   // WHERE Socio_CurInfo_4 = 'fooValue'
     * $query->filterBySocioCurinfo4('%fooValue%'); // WHERE Socio_CurInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo4($socioCurinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo4)) {
                $socioCurinfo4 = str_replace('*', '%', $socioCurinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO_4, $socioCurinfo4, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo24('fooValue');   // WHERE Socio_HistInfo2_4 = 'fooValue'
     * $query->filterBySocioHistinfo24('%fooValue%'); // WHERE Socio_HistInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo24($socioHistinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo24)) {
                $socioHistinfo24 = str_replace('*', '%', $socioHistinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4, $socioHistinfo24, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo23('fooValue');   // WHERE Socio_HistInfo2_3 = 'fooValue'
     * $query->filterBySocioHistinfo23('%fooValue%'); // WHERE Socio_HistInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo23($socioHistinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo23)) {
                $socioHistinfo23 = str_replace('*', '%', $socioHistinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3, $socioHistinfo23, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo22('fooValue');   // WHERE Socio_HistInfo2_2 = 'fooValue'
     * $query->filterBySocioHistinfo22('%fooValue%'); // WHERE Socio_HistInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo22($socioHistinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo22)) {
                $socioHistinfo22 = str_replace('*', '%', $socioHistinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2, $socioHistinfo22, $comparison);
    }

    /**
     * Filter the query on the Socio_HistInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioHistinfo21('fooValue');   // WHERE Socio_HistInfo2_1 = 'fooValue'
     * $query->filterBySocioHistinfo21('%fooValue%'); // WHERE Socio_HistInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioHistinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioHistinfo21($socioHistinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioHistinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioHistinfo21)) {
                $socioHistinfo21 = str_replace('*', '%', $socioHistinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1, $socioHistinfo21, $comparison);
    }

    /**
     * Filter the query on the Socio_Ref_Info2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioRefInfo2('fooValue');   // WHERE Socio_Ref_Info2 = 'fooValue'
     * $query->filterBySocioRefInfo2('%fooValue%'); // WHERE Socio_Ref_Info2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioRefInfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioRefInfo2($socioRefInfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioRefInfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioRefInfo2)) {
                $socioRefInfo2 = str_replace('*', '%', $socioRefInfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_REF_INFO2, $socioRefInfo2, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo21('fooValue');   // WHERE Socio_CurInfo2_1 = 'fooValue'
     * $query->filterBySocioCurinfo21('%fooValue%'); // WHERE Socio_CurInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo21($socioCurinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo21)) {
                $socioCurinfo21 = str_replace('*', '%', $socioCurinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1, $socioCurinfo21, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo22('fooValue');   // WHERE Socio_CurInfo2_2 = 'fooValue'
     * $query->filterBySocioCurinfo22('%fooValue%'); // WHERE Socio_CurInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo22($socioCurinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo22)) {
                $socioCurinfo22 = str_replace('*', '%', $socioCurinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2, $socioCurinfo22, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo23('fooValue');   // WHERE Socio_CurInfo2_3 = 'fooValue'
     * $query->filterBySocioCurinfo23('%fooValue%'); // WHERE Socio_CurInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo23($socioCurinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo23)) {
                $socioCurinfo23 = str_replace('*', '%', $socioCurinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3, $socioCurinfo23, $comparison);
    }

    /**
     * Filter the query on the Socio_CurInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioCurinfo24('fooValue');   // WHERE Socio_CurInfo2_4 = 'fooValue'
     * $query->filterBySocioCurinfo24('%fooValue%'); // WHERE Socio_CurInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioCurinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterBySocioCurinfo24($socioCurinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioCurinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioCurinfo24)) {
                $socioCurinfo24 = str_replace('*', '%', $socioCurinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4, $socioCurinfo24, $comparison);
    }

    /**
     * Filter the query on the newpassword column
     *
     * Example usage:
     * <code>
     * $query->filterByNewpassword('fooValue');   // WHERE newpassword = 'fooValue'
     * $query->filterByNewpassword('%fooValue%'); // WHERE newpassword LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newpassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByNewpassword($newpassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newpassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $newpassword)) {
                $newpassword = str_replace('*', '%', $newpassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::NEWPASSWORD, $newpassword, $comparison);
    }

    /**
     * Filter the query on the IndDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInddate('2011-03-14'); // WHERE IndDate = '2011-03-14'
     * $query->filterByInddate('now'); // WHERE IndDate = '2011-03-14'
     * $query->filterByInddate(array('max' => 'yesterday')); // WHERE IndDate < '2011-03-13'
     * </code>
     *
     * @param     mixed $inddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByInddate($inddate = null, $comparison = null)
    {
        if (is_array($inddate)) {
            $useMinMax = false;
            if (isset($inddate['min'])) {
                $this->addUsingAlias(Wp9socioIndicatorsPeer::INDDATE, $inddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inddate['max'])) {
                $this->addUsingAlias(Wp9socioIndicatorsPeer::INDDATE, $inddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9socioIndicatorsPeer::INDDATE, $inddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Wp9socioIndicators $wp9socioIndicators Object to remove from the list of results
     *
     * @return Wp9socioIndicatorsQuery The current query, for fluid interface
     */
    public function prune($wp9socioIndicators = null)
    {
        if ($wp9socioIndicators) {
            $this->addUsingAlias(Wp9socioIndicatorsPeer::ID, $wp9socioIndicators->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
