<?php


/**
 * Base class that represents a query for the 'wp9visex_indicators' table.
 *
 *
 *
 * @method Wp9visexIndicatorsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method Wp9visexIndicatorsQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method Wp9visexIndicatorsQuery orderByInstitution($order = Criteria::ASC) Order by the Institution column
 * @method Wp9visexIndicatorsQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method Wp9visexIndicatorsQuery orderByMpaname($order = Criteria::ASC) Order by the MPAName column
 * @method Wp9visexIndicatorsQuery orderByMpacountry($order = Criteria::ASC) Order by the MPACountry column
 * @method Wp9visexIndicatorsQuery orderByMpalocation($order = Criteria::ASC) Order by the MPALocation column
 * @method Wp9visexIndicatorsQuery orderByMpacharacter($order = Criteria::ASC) Order by the MPACharacter column
 * @method Wp9visexIndicatorsQuery orderByScubadiving($order = Criteria::ASC) Order by the ScubaDiving column
 * @method Wp9visexIndicatorsQuery orderBySnorkeling($order = Criteria::ASC) Order by the Snorkeling column
 * @method Wp9visexIndicatorsQuery orderByHiking($order = Criteria::ASC) Order by the Hiking column
 * @method Wp9visexIndicatorsQuery orderByFfwatching($order = Criteria::ASC) Order by the FFWatching column
 * @method Wp9visexIndicatorsQuery orderBySeascapewatching($order = Criteria::ASC) Order by the SeascapeWatching column
 * @method Wp9visexIndicatorsQuery orderByOther1($order = Criteria::ASC) Order by the Other1 column
 * @method Wp9visexIndicatorsQuery orderByOther2($order = Criteria::ASC) Order by the Other2 column
 * @method Wp9visexIndicatorsQuery orderByOther3($order = Criteria::ASC) Order by the Other3 column
 * @method Wp9visexIndicatorsQuery orderByOther4($order = Criteria::ASC) Order by the Other4 column
 * @method Wp9visexIndicatorsQuery orderByComname1($order = Criteria::ASC) Order by the ComName1 column
 * @method Wp9visexIndicatorsQuery orderBySciname1($order = Criteria::ASC) Order by the SciName1 column
 * @method Wp9visexIndicatorsQuery orderByDesceco1($order = Criteria::ASC) Order by the DescEco1 column
 * @method Wp9visexIndicatorsQuery orderByTemppres1($order = Criteria::ASC) Order by the TempPres1 column
 * @method Wp9visexIndicatorsQuery orderByComname2($order = Criteria::ASC) Order by the ComName2 column
 * @method Wp9visexIndicatorsQuery orderBySciname2($order = Criteria::ASC) Order by the SciName2 column
 * @method Wp9visexIndicatorsQuery orderByDesceco2($order = Criteria::ASC) Order by the DescEco2 column
 * @method Wp9visexIndicatorsQuery orderByTemppres2($order = Criteria::ASC) Order by the TempPres2 column
 * @method Wp9visexIndicatorsQuery orderByComname3($order = Criteria::ASC) Order by the ComName3 column
 * @method Wp9visexIndicatorsQuery orderBySciname3($order = Criteria::ASC) Order by the SciName3 column
 * @method Wp9visexIndicatorsQuery orderByDesceco3($order = Criteria::ASC) Order by the DescEco3 column
 * @method Wp9visexIndicatorsQuery orderByTemppres3($order = Criteria::ASC) Order by the TempPres3 column
 * @method Wp9visexIndicatorsQuery orderByComname4($order = Criteria::ASC) Order by the ComName4 column
 * @method Wp9visexIndicatorsQuery orderBySciname4($order = Criteria::ASC) Order by the SciName4 column
 * @method Wp9visexIndicatorsQuery orderByDesceco4($order = Criteria::ASC) Order by the DescEco4 column
 * @method Wp9visexIndicatorsQuery orderByTemppres4($order = Criteria::ASC) Order by the TempPres4 column
 * @method Wp9visexIndicatorsQuery orderByEcocomname1($order = Criteria::ASC) Order by the EcoComName1 column
 * @method Wp9visexIndicatorsQuery orderByEcodesceco1($order = Criteria::ASC) Order by the EcoDescEco1 column
 * @method Wp9visexIndicatorsQuery orderByReldis1($order = Criteria::ASC) Order by the RelDis1 column
 * @method Wp9visexIndicatorsQuery orderByEcocomname2($order = Criteria::ASC) Order by the EcoComName2 column
 * @method Wp9visexIndicatorsQuery orderByEcodesceco2($order = Criteria::ASC) Order by the EcoDescEco2 column
 * @method Wp9visexIndicatorsQuery orderByReldis2($order = Criteria::ASC) Order by the RelDis2 column
 * @method Wp9visexIndicatorsQuery orderByEcocomname3($order = Criteria::ASC) Order by the EcoComName3 column
 * @method Wp9visexIndicatorsQuery orderByEcodesceco3($order = Criteria::ASC) Order by the EcoDescEco3 column
 * @method Wp9visexIndicatorsQuery orderByReldis3($order = Criteria::ASC) Order by the RelDis3 column
 * @method Wp9visexIndicatorsQuery orderByEcocomname4($order = Criteria::ASC) Order by the EcoComName4 column
 * @method Wp9visexIndicatorsQuery orderByEcodesceco4($order = Criteria::ASC) Order by the EcoDescEco4 column
 * @method Wp9visexIndicatorsQuery orderByReldis4($order = Criteria::ASC) Order by the RelDis4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo4($order = Criteria::ASC) Order by the VisEx_HistInfo_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo3($order = Criteria::ASC) Order by the VisEx_HistInfo_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo2($order = Criteria::ASC) Order by the VisEx_HistInfo_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo1($order = Criteria::ASC) Order by the VisEx_HistInfo_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexRefInfo1($order = Criteria::ASC) Order by the VisEx_Ref_Info1 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo1($order = Criteria::ASC) Order by the VisEx_CurInfo_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo2($order = Criteria::ASC) Order by the VisEx_CurInfo_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo3($order = Criteria::ASC) Order by the VisEx_CurInfo_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo4($order = Criteria::ASC) Order by the VisEx_CurInfo_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo24($order = Criteria::ASC) Order by the VisEx_HistInfo2_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo23($order = Criteria::ASC) Order by the VisEx_HistInfo2_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo22($order = Criteria::ASC) Order by the VisEx_HistInfo2_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo21($order = Criteria::ASC) Order by the VisEx_HistInfo2_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexRefInfo2($order = Criteria::ASC) Order by the VisEx_Ref_Info2 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo21($order = Criteria::ASC) Order by the VisEx_CurInfo2_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo22($order = Criteria::ASC) Order by the VisEx_CurInfo2_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo23($order = Criteria::ASC) Order by the VisEx_CurInfo2_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo24($order = Criteria::ASC) Order by the VisEx_CurInfo2_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo34($order = Criteria::ASC) Order by the VisEx_HistInfo3_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo33($order = Criteria::ASC) Order by the VisEx_HistInfo3_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo32($order = Criteria::ASC) Order by the VisEx_HistInfo3_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo31($order = Criteria::ASC) Order by the VisEx_HistInfo3_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexRefInfo3($order = Criteria::ASC) Order by the VisEx_Ref_Info3 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo31($order = Criteria::ASC) Order by the VisEx_CurInfo3_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo32($order = Criteria::ASC) Order by the VisEx_CurInfo3_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo33($order = Criteria::ASC) Order by the VisEx_CurInfo3_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo34($order = Criteria::ASC) Order by the VisEx_CurInfo3_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo44($order = Criteria::ASC) Order by the VisEx_HistInfo4_4 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo43($order = Criteria::ASC) Order by the VisEx_HistInfo4_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo42($order = Criteria::ASC) Order by the VisEx_HistInfo4_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexHistinfo41($order = Criteria::ASC) Order by the VisEx_HistInfo4_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexRefInfo4($order = Criteria::ASC) Order by the VisEx_Ref_Info4 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo41($order = Criteria::ASC) Order by the VisEx_CurInfo4_1 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo42($order = Criteria::ASC) Order by the VisEx_CurInfo4_2 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo43($order = Criteria::ASC) Order by the VisEx_CurInfo4_3 column
 * @method Wp9visexIndicatorsQuery orderByVisexCurinfo44($order = Criteria::ASC) Order by the VisEx_CurInfo4_4 column
 * @method Wp9visexIndicatorsQuery orderByNewpassword($order = Criteria::ASC) Order by the newpassword column
 * @method Wp9visexIndicatorsQuery orderByInddate($order = Criteria::ASC) Order by the IndDate column
 *
 * @method Wp9visexIndicatorsQuery groupById() Group by the id column
 * @method Wp9visexIndicatorsQuery groupByName() Group by the Name column
 * @method Wp9visexIndicatorsQuery groupByInstitution() Group by the Institution column
 * @method Wp9visexIndicatorsQuery groupByEmail() Group by the Email column
 * @method Wp9visexIndicatorsQuery groupByMpaname() Group by the MPAName column
 * @method Wp9visexIndicatorsQuery groupByMpacountry() Group by the MPACountry column
 * @method Wp9visexIndicatorsQuery groupByMpalocation() Group by the MPALocation column
 * @method Wp9visexIndicatorsQuery groupByMpacharacter() Group by the MPACharacter column
 * @method Wp9visexIndicatorsQuery groupByScubadiving() Group by the ScubaDiving column
 * @method Wp9visexIndicatorsQuery groupBySnorkeling() Group by the Snorkeling column
 * @method Wp9visexIndicatorsQuery groupByHiking() Group by the Hiking column
 * @method Wp9visexIndicatorsQuery groupByFfwatching() Group by the FFWatching column
 * @method Wp9visexIndicatorsQuery groupBySeascapewatching() Group by the SeascapeWatching column
 * @method Wp9visexIndicatorsQuery groupByOther1() Group by the Other1 column
 * @method Wp9visexIndicatorsQuery groupByOther2() Group by the Other2 column
 * @method Wp9visexIndicatorsQuery groupByOther3() Group by the Other3 column
 * @method Wp9visexIndicatorsQuery groupByOther4() Group by the Other4 column
 * @method Wp9visexIndicatorsQuery groupByComname1() Group by the ComName1 column
 * @method Wp9visexIndicatorsQuery groupBySciname1() Group by the SciName1 column
 * @method Wp9visexIndicatorsQuery groupByDesceco1() Group by the DescEco1 column
 * @method Wp9visexIndicatorsQuery groupByTemppres1() Group by the TempPres1 column
 * @method Wp9visexIndicatorsQuery groupByComname2() Group by the ComName2 column
 * @method Wp9visexIndicatorsQuery groupBySciname2() Group by the SciName2 column
 * @method Wp9visexIndicatorsQuery groupByDesceco2() Group by the DescEco2 column
 * @method Wp9visexIndicatorsQuery groupByTemppres2() Group by the TempPres2 column
 * @method Wp9visexIndicatorsQuery groupByComname3() Group by the ComName3 column
 * @method Wp9visexIndicatorsQuery groupBySciname3() Group by the SciName3 column
 * @method Wp9visexIndicatorsQuery groupByDesceco3() Group by the DescEco3 column
 * @method Wp9visexIndicatorsQuery groupByTemppres3() Group by the TempPres3 column
 * @method Wp9visexIndicatorsQuery groupByComname4() Group by the ComName4 column
 * @method Wp9visexIndicatorsQuery groupBySciname4() Group by the SciName4 column
 * @method Wp9visexIndicatorsQuery groupByDesceco4() Group by the DescEco4 column
 * @method Wp9visexIndicatorsQuery groupByTemppres4() Group by the TempPres4 column
 * @method Wp9visexIndicatorsQuery groupByEcocomname1() Group by the EcoComName1 column
 * @method Wp9visexIndicatorsQuery groupByEcodesceco1() Group by the EcoDescEco1 column
 * @method Wp9visexIndicatorsQuery groupByReldis1() Group by the RelDis1 column
 * @method Wp9visexIndicatorsQuery groupByEcocomname2() Group by the EcoComName2 column
 * @method Wp9visexIndicatorsQuery groupByEcodesceco2() Group by the EcoDescEco2 column
 * @method Wp9visexIndicatorsQuery groupByReldis2() Group by the RelDis2 column
 * @method Wp9visexIndicatorsQuery groupByEcocomname3() Group by the EcoComName3 column
 * @method Wp9visexIndicatorsQuery groupByEcodesceco3() Group by the EcoDescEco3 column
 * @method Wp9visexIndicatorsQuery groupByReldis3() Group by the RelDis3 column
 * @method Wp9visexIndicatorsQuery groupByEcocomname4() Group by the EcoComName4 column
 * @method Wp9visexIndicatorsQuery groupByEcodesceco4() Group by the EcoDescEco4 column
 * @method Wp9visexIndicatorsQuery groupByReldis4() Group by the RelDis4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo4() Group by the VisEx_HistInfo_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo3() Group by the VisEx_HistInfo_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo2() Group by the VisEx_HistInfo_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo1() Group by the VisEx_HistInfo_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexRefInfo1() Group by the VisEx_Ref_Info1 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo1() Group by the VisEx_CurInfo_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo2() Group by the VisEx_CurInfo_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo3() Group by the VisEx_CurInfo_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo4() Group by the VisEx_CurInfo_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo24() Group by the VisEx_HistInfo2_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo23() Group by the VisEx_HistInfo2_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo22() Group by the VisEx_HistInfo2_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo21() Group by the VisEx_HistInfo2_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexRefInfo2() Group by the VisEx_Ref_Info2 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo21() Group by the VisEx_CurInfo2_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo22() Group by the VisEx_CurInfo2_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo23() Group by the VisEx_CurInfo2_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo24() Group by the VisEx_CurInfo2_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo34() Group by the VisEx_HistInfo3_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo33() Group by the VisEx_HistInfo3_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo32() Group by the VisEx_HistInfo3_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo31() Group by the VisEx_HistInfo3_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexRefInfo3() Group by the VisEx_Ref_Info3 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo31() Group by the VisEx_CurInfo3_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo32() Group by the VisEx_CurInfo3_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo33() Group by the VisEx_CurInfo3_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo34() Group by the VisEx_CurInfo3_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo44() Group by the VisEx_HistInfo4_4 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo43() Group by the VisEx_HistInfo4_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo42() Group by the VisEx_HistInfo4_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexHistinfo41() Group by the VisEx_HistInfo4_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexRefInfo4() Group by the VisEx_Ref_Info4 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo41() Group by the VisEx_CurInfo4_1 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo42() Group by the VisEx_CurInfo4_2 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo43() Group by the VisEx_CurInfo4_3 column
 * @method Wp9visexIndicatorsQuery groupByVisexCurinfo44() Group by the VisEx_CurInfo4_4 column
 * @method Wp9visexIndicatorsQuery groupByNewpassword() Group by the newpassword column
 * @method Wp9visexIndicatorsQuery groupByInddate() Group by the IndDate column
 *
 * @method Wp9visexIndicatorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Wp9visexIndicatorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Wp9visexIndicatorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Wp9visexIndicators findOne(PropelPDO $con = null) Return the first Wp9visexIndicators matching the query
 * @method Wp9visexIndicators findOneOrCreate(PropelPDO $con = null) Return the first Wp9visexIndicators matching the query, or a new Wp9visexIndicators object populated from the query conditions when no match is found
 *
 * @method Wp9visexIndicators findOneByName(string $Name) Return the first Wp9visexIndicators filtered by the Name column
 * @method Wp9visexIndicators findOneByInstitution(string $Institution) Return the first Wp9visexIndicators filtered by the Institution column
 * @method Wp9visexIndicators findOneByEmail(string $Email) Return the first Wp9visexIndicators filtered by the Email column
 * @method Wp9visexIndicators findOneByMpaname(string $MPAName) Return the first Wp9visexIndicators filtered by the MPAName column
 * @method Wp9visexIndicators findOneByMpacountry(string $MPACountry) Return the first Wp9visexIndicators filtered by the MPACountry column
 * @method Wp9visexIndicators findOneByMpalocation(string $MPALocation) Return the first Wp9visexIndicators filtered by the MPALocation column
 * @method Wp9visexIndicators findOneByMpacharacter(string $MPACharacter) Return the first Wp9visexIndicators filtered by the MPACharacter column
 * @method Wp9visexIndicators findOneByScubadiving(string $ScubaDiving) Return the first Wp9visexIndicators filtered by the ScubaDiving column
 * @method Wp9visexIndicators findOneBySnorkeling(string $Snorkeling) Return the first Wp9visexIndicators filtered by the Snorkeling column
 * @method Wp9visexIndicators findOneByHiking(string $Hiking) Return the first Wp9visexIndicators filtered by the Hiking column
 * @method Wp9visexIndicators findOneByFfwatching(string $FFWatching) Return the first Wp9visexIndicators filtered by the FFWatching column
 * @method Wp9visexIndicators findOneBySeascapewatching(string $SeascapeWatching) Return the first Wp9visexIndicators filtered by the SeascapeWatching column
 * @method Wp9visexIndicators findOneByOther1(string $Other1) Return the first Wp9visexIndicators filtered by the Other1 column
 * @method Wp9visexIndicators findOneByOther2(string $Other2) Return the first Wp9visexIndicators filtered by the Other2 column
 * @method Wp9visexIndicators findOneByOther3(string $Other3) Return the first Wp9visexIndicators filtered by the Other3 column
 * @method Wp9visexIndicators findOneByOther4(string $Other4) Return the first Wp9visexIndicators filtered by the Other4 column
 * @method Wp9visexIndicators findOneByComname1(string $ComName1) Return the first Wp9visexIndicators filtered by the ComName1 column
 * @method Wp9visexIndicators findOneBySciname1(string $SciName1) Return the first Wp9visexIndicators filtered by the SciName1 column
 * @method Wp9visexIndicators findOneByDesceco1(string $DescEco1) Return the first Wp9visexIndicators filtered by the DescEco1 column
 * @method Wp9visexIndicators findOneByTemppres1(string $TempPres1) Return the first Wp9visexIndicators filtered by the TempPres1 column
 * @method Wp9visexIndicators findOneByComname2(string $ComName2) Return the first Wp9visexIndicators filtered by the ComName2 column
 * @method Wp9visexIndicators findOneBySciname2(string $SciName2) Return the first Wp9visexIndicators filtered by the SciName2 column
 * @method Wp9visexIndicators findOneByDesceco2(string $DescEco2) Return the first Wp9visexIndicators filtered by the DescEco2 column
 * @method Wp9visexIndicators findOneByTemppres2(string $TempPres2) Return the first Wp9visexIndicators filtered by the TempPres2 column
 * @method Wp9visexIndicators findOneByComname3(string $ComName3) Return the first Wp9visexIndicators filtered by the ComName3 column
 * @method Wp9visexIndicators findOneBySciname3(string $SciName3) Return the first Wp9visexIndicators filtered by the SciName3 column
 * @method Wp9visexIndicators findOneByDesceco3(string $DescEco3) Return the first Wp9visexIndicators filtered by the DescEco3 column
 * @method Wp9visexIndicators findOneByTemppres3(string $TempPres3) Return the first Wp9visexIndicators filtered by the TempPres3 column
 * @method Wp9visexIndicators findOneByComname4(string $ComName4) Return the first Wp9visexIndicators filtered by the ComName4 column
 * @method Wp9visexIndicators findOneBySciname4(string $SciName4) Return the first Wp9visexIndicators filtered by the SciName4 column
 * @method Wp9visexIndicators findOneByDesceco4(string $DescEco4) Return the first Wp9visexIndicators filtered by the DescEco4 column
 * @method Wp9visexIndicators findOneByTemppres4(string $TempPres4) Return the first Wp9visexIndicators filtered by the TempPres4 column
 * @method Wp9visexIndicators findOneByEcocomname1(string $EcoComName1) Return the first Wp9visexIndicators filtered by the EcoComName1 column
 * @method Wp9visexIndicators findOneByEcodesceco1(string $EcoDescEco1) Return the first Wp9visexIndicators filtered by the EcoDescEco1 column
 * @method Wp9visexIndicators findOneByReldis1(string $RelDis1) Return the first Wp9visexIndicators filtered by the RelDis1 column
 * @method Wp9visexIndicators findOneByEcocomname2(string $EcoComName2) Return the first Wp9visexIndicators filtered by the EcoComName2 column
 * @method Wp9visexIndicators findOneByEcodesceco2(string $EcoDescEco2) Return the first Wp9visexIndicators filtered by the EcoDescEco2 column
 * @method Wp9visexIndicators findOneByReldis2(string $RelDis2) Return the first Wp9visexIndicators filtered by the RelDis2 column
 * @method Wp9visexIndicators findOneByEcocomname3(string $EcoComName3) Return the first Wp9visexIndicators filtered by the EcoComName3 column
 * @method Wp9visexIndicators findOneByEcodesceco3(string $EcoDescEco3) Return the first Wp9visexIndicators filtered by the EcoDescEco3 column
 * @method Wp9visexIndicators findOneByReldis3(string $RelDis3) Return the first Wp9visexIndicators filtered by the RelDis3 column
 * @method Wp9visexIndicators findOneByEcocomname4(string $EcoComName4) Return the first Wp9visexIndicators filtered by the EcoComName4 column
 * @method Wp9visexIndicators findOneByEcodesceco4(string $EcoDescEco4) Return the first Wp9visexIndicators filtered by the EcoDescEco4 column
 * @method Wp9visexIndicators findOneByReldis4(string $RelDis4) Return the first Wp9visexIndicators filtered by the RelDis4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo4(string $VisEx_HistInfo_4) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo3(string $VisEx_HistInfo_3) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo_3 column
 * @method Wp9visexIndicators findOneByVisexHistinfo2(string $VisEx_HistInfo_2) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo_2 column
 * @method Wp9visexIndicators findOneByVisexHistinfo1(string $VisEx_HistInfo_1) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo_1 column
 * @method Wp9visexIndicators findOneByVisexRefInfo1(string $VisEx_Ref_Info1) Return the first Wp9visexIndicators filtered by the VisEx_Ref_Info1 column
 * @method Wp9visexIndicators findOneByVisexCurinfo1(string $VisEx_CurInfo_1) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo_1 column
 * @method Wp9visexIndicators findOneByVisexCurinfo2(string $VisEx_CurInfo_2) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo_2 column
 * @method Wp9visexIndicators findOneByVisexCurinfo3(string $VisEx_CurInfo_3) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo_3 column
 * @method Wp9visexIndicators findOneByVisexCurinfo4(string $VisEx_CurInfo_4) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo24(string $VisEx_HistInfo2_4) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo2_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo23(string $VisEx_HistInfo2_3) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo2_3 column
 * @method Wp9visexIndicators findOneByVisexHistinfo22(string $VisEx_HistInfo2_2) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo2_2 column
 * @method Wp9visexIndicators findOneByVisexHistinfo21(string $VisEx_HistInfo2_1) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo2_1 column
 * @method Wp9visexIndicators findOneByVisexRefInfo2(string $VisEx_Ref_Info2) Return the first Wp9visexIndicators filtered by the VisEx_Ref_Info2 column
 * @method Wp9visexIndicators findOneByVisexCurinfo21(string $VisEx_CurInfo2_1) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo2_1 column
 * @method Wp9visexIndicators findOneByVisexCurinfo22(string $VisEx_CurInfo2_2) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo2_2 column
 * @method Wp9visexIndicators findOneByVisexCurinfo23(string $VisEx_CurInfo2_3) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo2_3 column
 * @method Wp9visexIndicators findOneByVisexCurinfo24(string $VisEx_CurInfo2_4) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo2_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo34(string $VisEx_HistInfo3_4) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo3_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo33(string $VisEx_HistInfo3_3) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo3_3 column
 * @method Wp9visexIndicators findOneByVisexHistinfo32(string $VisEx_HistInfo3_2) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo3_2 column
 * @method Wp9visexIndicators findOneByVisexHistinfo31(string $VisEx_HistInfo3_1) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo3_1 column
 * @method Wp9visexIndicators findOneByVisexRefInfo3(string $VisEx_Ref_Info3) Return the first Wp9visexIndicators filtered by the VisEx_Ref_Info3 column
 * @method Wp9visexIndicators findOneByVisexCurinfo31(string $VisEx_CurInfo3_1) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo3_1 column
 * @method Wp9visexIndicators findOneByVisexCurinfo32(string $VisEx_CurInfo3_2) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo3_2 column
 * @method Wp9visexIndicators findOneByVisexCurinfo33(string $VisEx_CurInfo3_3) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo3_3 column
 * @method Wp9visexIndicators findOneByVisexCurinfo34(string $VisEx_CurInfo3_4) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo3_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo44(string $VisEx_HistInfo4_4) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo4_4 column
 * @method Wp9visexIndicators findOneByVisexHistinfo43(string $VisEx_HistInfo4_3) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo4_3 column
 * @method Wp9visexIndicators findOneByVisexHistinfo42(string $VisEx_HistInfo4_2) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo4_2 column
 * @method Wp9visexIndicators findOneByVisexHistinfo41(string $VisEx_HistInfo4_1) Return the first Wp9visexIndicators filtered by the VisEx_HistInfo4_1 column
 * @method Wp9visexIndicators findOneByVisexRefInfo4(string $VisEx_Ref_Info4) Return the first Wp9visexIndicators filtered by the VisEx_Ref_Info4 column
 * @method Wp9visexIndicators findOneByVisexCurinfo41(string $VisEx_CurInfo4_1) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo4_1 column
 * @method Wp9visexIndicators findOneByVisexCurinfo42(string $VisEx_CurInfo4_2) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo4_2 column
 * @method Wp9visexIndicators findOneByVisexCurinfo43(string $VisEx_CurInfo4_3) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo4_3 column
 * @method Wp9visexIndicators findOneByVisexCurinfo44(string $VisEx_CurInfo4_4) Return the first Wp9visexIndicators filtered by the VisEx_CurInfo4_4 column
 * @method Wp9visexIndicators findOneByNewpassword(string $newpassword) Return the first Wp9visexIndicators filtered by the newpassword column
 * @method Wp9visexIndicators findOneByInddate(string $IndDate) Return the first Wp9visexIndicators filtered by the IndDate column
 *
 * @method array findById(int $id) Return Wp9visexIndicators objects filtered by the id column
 * @method array findByName(string $Name) Return Wp9visexIndicators objects filtered by the Name column
 * @method array findByInstitution(string $Institution) Return Wp9visexIndicators objects filtered by the Institution column
 * @method array findByEmail(string $Email) Return Wp9visexIndicators objects filtered by the Email column
 * @method array findByMpaname(string $MPAName) Return Wp9visexIndicators objects filtered by the MPAName column
 * @method array findByMpacountry(string $MPACountry) Return Wp9visexIndicators objects filtered by the MPACountry column
 * @method array findByMpalocation(string $MPALocation) Return Wp9visexIndicators objects filtered by the MPALocation column
 * @method array findByMpacharacter(string $MPACharacter) Return Wp9visexIndicators objects filtered by the MPACharacter column
 * @method array findByScubadiving(string $ScubaDiving) Return Wp9visexIndicators objects filtered by the ScubaDiving column
 * @method array findBySnorkeling(string $Snorkeling) Return Wp9visexIndicators objects filtered by the Snorkeling column
 * @method array findByHiking(string $Hiking) Return Wp9visexIndicators objects filtered by the Hiking column
 * @method array findByFfwatching(string $FFWatching) Return Wp9visexIndicators objects filtered by the FFWatching column
 * @method array findBySeascapewatching(string $SeascapeWatching) Return Wp9visexIndicators objects filtered by the SeascapeWatching column
 * @method array findByOther1(string $Other1) Return Wp9visexIndicators objects filtered by the Other1 column
 * @method array findByOther2(string $Other2) Return Wp9visexIndicators objects filtered by the Other2 column
 * @method array findByOther3(string $Other3) Return Wp9visexIndicators objects filtered by the Other3 column
 * @method array findByOther4(string $Other4) Return Wp9visexIndicators objects filtered by the Other4 column
 * @method array findByComname1(string $ComName1) Return Wp9visexIndicators objects filtered by the ComName1 column
 * @method array findBySciname1(string $SciName1) Return Wp9visexIndicators objects filtered by the SciName1 column
 * @method array findByDesceco1(string $DescEco1) Return Wp9visexIndicators objects filtered by the DescEco1 column
 * @method array findByTemppres1(string $TempPres1) Return Wp9visexIndicators objects filtered by the TempPres1 column
 * @method array findByComname2(string $ComName2) Return Wp9visexIndicators objects filtered by the ComName2 column
 * @method array findBySciname2(string $SciName2) Return Wp9visexIndicators objects filtered by the SciName2 column
 * @method array findByDesceco2(string $DescEco2) Return Wp9visexIndicators objects filtered by the DescEco2 column
 * @method array findByTemppres2(string $TempPres2) Return Wp9visexIndicators objects filtered by the TempPres2 column
 * @method array findByComname3(string $ComName3) Return Wp9visexIndicators objects filtered by the ComName3 column
 * @method array findBySciname3(string $SciName3) Return Wp9visexIndicators objects filtered by the SciName3 column
 * @method array findByDesceco3(string $DescEco3) Return Wp9visexIndicators objects filtered by the DescEco3 column
 * @method array findByTemppres3(string $TempPres3) Return Wp9visexIndicators objects filtered by the TempPres3 column
 * @method array findByComname4(string $ComName4) Return Wp9visexIndicators objects filtered by the ComName4 column
 * @method array findBySciname4(string $SciName4) Return Wp9visexIndicators objects filtered by the SciName4 column
 * @method array findByDesceco4(string $DescEco4) Return Wp9visexIndicators objects filtered by the DescEco4 column
 * @method array findByTemppres4(string $TempPres4) Return Wp9visexIndicators objects filtered by the TempPres4 column
 * @method array findByEcocomname1(string $EcoComName1) Return Wp9visexIndicators objects filtered by the EcoComName1 column
 * @method array findByEcodesceco1(string $EcoDescEco1) Return Wp9visexIndicators objects filtered by the EcoDescEco1 column
 * @method array findByReldis1(string $RelDis1) Return Wp9visexIndicators objects filtered by the RelDis1 column
 * @method array findByEcocomname2(string $EcoComName2) Return Wp9visexIndicators objects filtered by the EcoComName2 column
 * @method array findByEcodesceco2(string $EcoDescEco2) Return Wp9visexIndicators objects filtered by the EcoDescEco2 column
 * @method array findByReldis2(string $RelDis2) Return Wp9visexIndicators objects filtered by the RelDis2 column
 * @method array findByEcocomname3(string $EcoComName3) Return Wp9visexIndicators objects filtered by the EcoComName3 column
 * @method array findByEcodesceco3(string $EcoDescEco3) Return Wp9visexIndicators objects filtered by the EcoDescEco3 column
 * @method array findByReldis3(string $RelDis3) Return Wp9visexIndicators objects filtered by the RelDis3 column
 * @method array findByEcocomname4(string $EcoComName4) Return Wp9visexIndicators objects filtered by the EcoComName4 column
 * @method array findByEcodesceco4(string $EcoDescEco4) Return Wp9visexIndicators objects filtered by the EcoDescEco4 column
 * @method array findByReldis4(string $RelDis4) Return Wp9visexIndicators objects filtered by the RelDis4 column
 * @method array findByVisexHistinfo4(string $VisEx_HistInfo_4) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo_4 column
 * @method array findByVisexHistinfo3(string $VisEx_HistInfo_3) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo_3 column
 * @method array findByVisexHistinfo2(string $VisEx_HistInfo_2) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo_2 column
 * @method array findByVisexHistinfo1(string $VisEx_HistInfo_1) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo_1 column
 * @method array findByVisexRefInfo1(string $VisEx_Ref_Info1) Return Wp9visexIndicators objects filtered by the VisEx_Ref_Info1 column
 * @method array findByVisexCurinfo1(string $VisEx_CurInfo_1) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo_1 column
 * @method array findByVisexCurinfo2(string $VisEx_CurInfo_2) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo_2 column
 * @method array findByVisexCurinfo3(string $VisEx_CurInfo_3) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo_3 column
 * @method array findByVisexCurinfo4(string $VisEx_CurInfo_4) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo_4 column
 * @method array findByVisexHistinfo24(string $VisEx_HistInfo2_4) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo2_4 column
 * @method array findByVisexHistinfo23(string $VisEx_HistInfo2_3) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo2_3 column
 * @method array findByVisexHistinfo22(string $VisEx_HistInfo2_2) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo2_2 column
 * @method array findByVisexHistinfo21(string $VisEx_HistInfo2_1) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo2_1 column
 * @method array findByVisexRefInfo2(string $VisEx_Ref_Info2) Return Wp9visexIndicators objects filtered by the VisEx_Ref_Info2 column
 * @method array findByVisexCurinfo21(string $VisEx_CurInfo2_1) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo2_1 column
 * @method array findByVisexCurinfo22(string $VisEx_CurInfo2_2) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo2_2 column
 * @method array findByVisexCurinfo23(string $VisEx_CurInfo2_3) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo2_3 column
 * @method array findByVisexCurinfo24(string $VisEx_CurInfo2_4) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo2_4 column
 * @method array findByVisexHistinfo34(string $VisEx_HistInfo3_4) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo3_4 column
 * @method array findByVisexHistinfo33(string $VisEx_HistInfo3_3) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo3_3 column
 * @method array findByVisexHistinfo32(string $VisEx_HistInfo3_2) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo3_2 column
 * @method array findByVisexHistinfo31(string $VisEx_HistInfo3_1) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo3_1 column
 * @method array findByVisexRefInfo3(string $VisEx_Ref_Info3) Return Wp9visexIndicators objects filtered by the VisEx_Ref_Info3 column
 * @method array findByVisexCurinfo31(string $VisEx_CurInfo3_1) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo3_1 column
 * @method array findByVisexCurinfo32(string $VisEx_CurInfo3_2) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo3_2 column
 * @method array findByVisexCurinfo33(string $VisEx_CurInfo3_3) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo3_3 column
 * @method array findByVisexCurinfo34(string $VisEx_CurInfo3_4) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo3_4 column
 * @method array findByVisexHistinfo44(string $VisEx_HistInfo4_4) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo4_4 column
 * @method array findByVisexHistinfo43(string $VisEx_HistInfo4_3) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo4_3 column
 * @method array findByVisexHistinfo42(string $VisEx_HistInfo4_2) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo4_2 column
 * @method array findByVisexHistinfo41(string $VisEx_HistInfo4_1) Return Wp9visexIndicators objects filtered by the VisEx_HistInfo4_1 column
 * @method array findByVisexRefInfo4(string $VisEx_Ref_Info4) Return Wp9visexIndicators objects filtered by the VisEx_Ref_Info4 column
 * @method array findByVisexCurinfo41(string $VisEx_CurInfo4_1) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo4_1 column
 * @method array findByVisexCurinfo42(string $VisEx_CurInfo4_2) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo4_2 column
 * @method array findByVisexCurinfo43(string $VisEx_CurInfo4_3) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo4_3 column
 * @method array findByVisexCurinfo44(string $VisEx_CurInfo4_4) Return Wp9visexIndicators objects filtered by the VisEx_CurInfo4_4 column
 * @method array findByNewpassword(string $newpassword) Return Wp9visexIndicators objects filtered by the newpassword column
 * @method array findByInddate(string $IndDate) Return Wp9visexIndicators objects filtered by the IndDate column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWp9visexIndicatorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWp9visexIndicatorsQuery object.
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
            $modelName = 'Wp9visexIndicators';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Wp9visexIndicatorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Wp9visexIndicatorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Wp9visexIndicatorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Wp9visexIndicatorsQuery) {
            return $criteria;
        }
        $query = new Wp9visexIndicatorsQuery(null, null, $modelAlias);

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
     * @return   Wp9visexIndicators|Wp9visexIndicators[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Wp9visexIndicatorsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Wp9visexIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Wp9visexIndicators A model object, or null if the key is not found
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
     * @return                 Wp9visexIndicators A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `Name`, `Institution`, `Email`, `MPAName`, `MPACountry`, `MPALocation`, `MPACharacter`, `ScubaDiving`, `Snorkeling`, `Hiking`, `FFWatching`, `SeascapeWatching`, `Other1`, `Other2`, `Other3`, `Other4`, `ComName1`, `SciName1`, `DescEco1`, `TempPres1`, `ComName2`, `SciName2`, `DescEco2`, `TempPres2`, `ComName3`, `SciName3`, `DescEco3`, `TempPres3`, `ComName4`, `SciName4`, `DescEco4`, `TempPres4`, `EcoComName1`, `EcoDescEco1`, `RelDis1`, `EcoComName2`, `EcoDescEco2`, `RelDis2`, `EcoComName3`, `EcoDescEco3`, `RelDis3`, `EcoComName4`, `EcoDescEco4`, `RelDis4`, `VisEx_HistInfo_4`, `VisEx_HistInfo_3`, `VisEx_HistInfo_2`, `VisEx_HistInfo_1`, `VisEx_Ref_Info1`, `VisEx_CurInfo_1`, `VisEx_CurInfo_2`, `VisEx_CurInfo_3`, `VisEx_CurInfo_4`, `VisEx_HistInfo2_4`, `VisEx_HistInfo2_3`, `VisEx_HistInfo2_2`, `VisEx_HistInfo2_1`, `VisEx_Ref_Info2`, `VisEx_CurInfo2_1`, `VisEx_CurInfo2_2`, `VisEx_CurInfo2_3`, `VisEx_CurInfo2_4`, `VisEx_HistInfo3_4`, `VisEx_HistInfo3_3`, `VisEx_HistInfo3_2`, `VisEx_HistInfo3_1`, `VisEx_Ref_Info3`, `VisEx_CurInfo3_1`, `VisEx_CurInfo3_2`, `VisEx_CurInfo3_3`, `VisEx_CurInfo3_4`, `VisEx_HistInfo4_4`, `VisEx_HistInfo4_3`, `VisEx_HistInfo4_2`, `VisEx_HistInfo4_1`, `VisEx_Ref_Info4`, `VisEx_CurInfo4_1`, `VisEx_CurInfo4_2`, `VisEx_CurInfo4_3`, `VisEx_CurInfo4_4`, `newpassword`, `IndDate` FROM `wp9visex_indicators` WHERE `id` = :p0';
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
            $obj = new Wp9visexIndicators();
            $obj->hydrate($row);
            Wp9visexIndicatorsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Wp9visexIndicators|Wp9visexIndicators[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Wp9visexIndicators[]|mixed the list of results, formatted by the current formatter
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ID, $keys, Criteria::IN);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(Wp9visexIndicatorsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(Wp9visexIndicatorsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ID, $id, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::NAME, $name, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::INSTITUTION, $institution, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::EMAIL, $email, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::MPANAME, $mpaname, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::MPACOUNTRY, $mpacountry, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::MPALOCATION, $mpalocation, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::MPACHARACTER, $mpacharacter, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SCUBADIVING, $scubadiving, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SNORKELING, $snorkeling, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::HIKING, $hiking, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::FFWATCHING, $ffwatching, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SEASCAPEWATCHING, $seascapewatching, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::OTHER1, $other1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::OTHER2, $other2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::OTHER3, $other3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::OTHER4, $other4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::COMNAME1, $comname1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SCINAME1, $sciname1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::DESCECO1, $desceco1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::TEMPPRES1, $temppres1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::COMNAME2, $comname2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SCINAME2, $sciname2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::DESCECO2, $desceco2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::TEMPPRES2, $temppres2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::COMNAME3, $comname3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SCINAME3, $sciname3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::DESCECO3, $desceco3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::TEMPPRES3, $temppres3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::COMNAME4, $comname4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::SCINAME4, $sciname4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::DESCECO4, $desceco4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::TEMPPRES4, $temppres4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECOCOMNAME1, $ecocomname1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECODESCECO1, $ecodesceco1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::RELDIS1, $reldis1, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECOCOMNAME2, $ecocomname2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECODESCECO2, $ecodesceco2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::RELDIS2, $reldis2, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECOCOMNAME3, $ecocomname3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECODESCECO3, $ecodesceco3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::RELDIS3, $reldis3, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECOCOMNAME4, $ecocomname4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::ECODESCECO4, $ecodesceco4, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::RELDIS4, $reldis4, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo4('fooValue');   // WHERE VisEx_HistInfo_4 = 'fooValue'
     * $query->filterByVisexHistinfo4('%fooValue%'); // WHERE VisEx_HistInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo4($visexHistinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo4)) {
                $visexHistinfo4 = str_replace('*', '%', $visexHistinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO_4, $visexHistinfo4, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo3('fooValue');   // WHERE VisEx_HistInfo_3 = 'fooValue'
     * $query->filterByVisexHistinfo3('%fooValue%'); // WHERE VisEx_HistInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo3($visexHistinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo3)) {
                $visexHistinfo3 = str_replace('*', '%', $visexHistinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO_3, $visexHistinfo3, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo2('fooValue');   // WHERE VisEx_HistInfo_2 = 'fooValue'
     * $query->filterByVisexHistinfo2('%fooValue%'); // WHERE VisEx_HistInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo2($visexHistinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo2)) {
                $visexHistinfo2 = str_replace('*', '%', $visexHistinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO_2, $visexHistinfo2, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo1('fooValue');   // WHERE VisEx_HistInfo_1 = 'fooValue'
     * $query->filterByVisexHistinfo1('%fooValue%'); // WHERE VisEx_HistInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo1($visexHistinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo1)) {
                $visexHistinfo1 = str_replace('*', '%', $visexHistinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO_1, $visexHistinfo1, $comparison);
    }

    /**
     * Filter the query on the VisEx_Ref_Info1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexRefInfo1('fooValue');   // WHERE VisEx_Ref_Info1 = 'fooValue'
     * $query->filterByVisexRefInfo1('%fooValue%'); // WHERE VisEx_Ref_Info1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexRefInfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexRefInfo1($visexRefInfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexRefInfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexRefInfo1)) {
                $visexRefInfo1 = str_replace('*', '%', $visexRefInfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_REF_INFO1, $visexRefInfo1, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo1('fooValue');   // WHERE VisEx_CurInfo_1 = 'fooValue'
     * $query->filterByVisexCurinfo1('%fooValue%'); // WHERE VisEx_CurInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo1($visexCurinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo1)) {
                $visexCurinfo1 = str_replace('*', '%', $visexCurinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO_1, $visexCurinfo1, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo2('fooValue');   // WHERE VisEx_CurInfo_2 = 'fooValue'
     * $query->filterByVisexCurinfo2('%fooValue%'); // WHERE VisEx_CurInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo2($visexCurinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo2)) {
                $visexCurinfo2 = str_replace('*', '%', $visexCurinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO_2, $visexCurinfo2, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo3('fooValue');   // WHERE VisEx_CurInfo_3 = 'fooValue'
     * $query->filterByVisexCurinfo3('%fooValue%'); // WHERE VisEx_CurInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo3($visexCurinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo3)) {
                $visexCurinfo3 = str_replace('*', '%', $visexCurinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO_3, $visexCurinfo3, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo4('fooValue');   // WHERE VisEx_CurInfo_4 = 'fooValue'
     * $query->filterByVisexCurinfo4('%fooValue%'); // WHERE VisEx_CurInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo4($visexCurinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo4)) {
                $visexCurinfo4 = str_replace('*', '%', $visexCurinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO_4, $visexCurinfo4, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo24('fooValue');   // WHERE VisEx_HistInfo2_4 = 'fooValue'
     * $query->filterByVisexHistinfo24('%fooValue%'); // WHERE VisEx_HistInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo24($visexHistinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo24)) {
                $visexHistinfo24 = str_replace('*', '%', $visexHistinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO2_4, $visexHistinfo24, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo23('fooValue');   // WHERE VisEx_HistInfo2_3 = 'fooValue'
     * $query->filterByVisexHistinfo23('%fooValue%'); // WHERE VisEx_HistInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo23($visexHistinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo23)) {
                $visexHistinfo23 = str_replace('*', '%', $visexHistinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO2_3, $visexHistinfo23, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo22('fooValue');   // WHERE VisEx_HistInfo2_2 = 'fooValue'
     * $query->filterByVisexHistinfo22('%fooValue%'); // WHERE VisEx_HistInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo22($visexHistinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo22)) {
                $visexHistinfo22 = str_replace('*', '%', $visexHistinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO2_2, $visexHistinfo22, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo21('fooValue');   // WHERE VisEx_HistInfo2_1 = 'fooValue'
     * $query->filterByVisexHistinfo21('%fooValue%'); // WHERE VisEx_HistInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo21($visexHistinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo21)) {
                $visexHistinfo21 = str_replace('*', '%', $visexHistinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO2_1, $visexHistinfo21, $comparison);
    }

    /**
     * Filter the query on the VisEx_Ref_Info2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexRefInfo2('fooValue');   // WHERE VisEx_Ref_Info2 = 'fooValue'
     * $query->filterByVisexRefInfo2('%fooValue%'); // WHERE VisEx_Ref_Info2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexRefInfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexRefInfo2($visexRefInfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexRefInfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexRefInfo2)) {
                $visexRefInfo2 = str_replace('*', '%', $visexRefInfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_REF_INFO2, $visexRefInfo2, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo21('fooValue');   // WHERE VisEx_CurInfo2_1 = 'fooValue'
     * $query->filterByVisexCurinfo21('%fooValue%'); // WHERE VisEx_CurInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo21($visexCurinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo21)) {
                $visexCurinfo21 = str_replace('*', '%', $visexCurinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO2_1, $visexCurinfo21, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo22('fooValue');   // WHERE VisEx_CurInfo2_2 = 'fooValue'
     * $query->filterByVisexCurinfo22('%fooValue%'); // WHERE VisEx_CurInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo22($visexCurinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo22)) {
                $visexCurinfo22 = str_replace('*', '%', $visexCurinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO2_2, $visexCurinfo22, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo23('fooValue');   // WHERE VisEx_CurInfo2_3 = 'fooValue'
     * $query->filterByVisexCurinfo23('%fooValue%'); // WHERE VisEx_CurInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo23($visexCurinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo23)) {
                $visexCurinfo23 = str_replace('*', '%', $visexCurinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO2_3, $visexCurinfo23, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo24('fooValue');   // WHERE VisEx_CurInfo2_4 = 'fooValue'
     * $query->filterByVisexCurinfo24('%fooValue%'); // WHERE VisEx_CurInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo24($visexCurinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo24)) {
                $visexCurinfo24 = str_replace('*', '%', $visexCurinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO2_4, $visexCurinfo24, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo3_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo34('fooValue');   // WHERE VisEx_HistInfo3_4 = 'fooValue'
     * $query->filterByVisexHistinfo34('%fooValue%'); // WHERE VisEx_HistInfo3_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo34 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo34($visexHistinfo34 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo34)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo34)) {
                $visexHistinfo34 = str_replace('*', '%', $visexHistinfo34);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO3_4, $visexHistinfo34, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo3_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo33('fooValue');   // WHERE VisEx_HistInfo3_3 = 'fooValue'
     * $query->filterByVisexHistinfo33('%fooValue%'); // WHERE VisEx_HistInfo3_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo33 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo33($visexHistinfo33 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo33)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo33)) {
                $visexHistinfo33 = str_replace('*', '%', $visexHistinfo33);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO3_3, $visexHistinfo33, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo3_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo32('fooValue');   // WHERE VisEx_HistInfo3_2 = 'fooValue'
     * $query->filterByVisexHistinfo32('%fooValue%'); // WHERE VisEx_HistInfo3_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo32 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo32($visexHistinfo32 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo32)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo32)) {
                $visexHistinfo32 = str_replace('*', '%', $visexHistinfo32);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO3_2, $visexHistinfo32, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo3_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo31('fooValue');   // WHERE VisEx_HistInfo3_1 = 'fooValue'
     * $query->filterByVisexHistinfo31('%fooValue%'); // WHERE VisEx_HistInfo3_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo31 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo31($visexHistinfo31 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo31)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo31)) {
                $visexHistinfo31 = str_replace('*', '%', $visexHistinfo31);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO3_1, $visexHistinfo31, $comparison);
    }

    /**
     * Filter the query on the VisEx_Ref_Info3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexRefInfo3('fooValue');   // WHERE VisEx_Ref_Info3 = 'fooValue'
     * $query->filterByVisexRefInfo3('%fooValue%'); // WHERE VisEx_Ref_Info3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexRefInfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexRefInfo3($visexRefInfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexRefInfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexRefInfo3)) {
                $visexRefInfo3 = str_replace('*', '%', $visexRefInfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_REF_INFO3, $visexRefInfo3, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo3_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo31('fooValue');   // WHERE VisEx_CurInfo3_1 = 'fooValue'
     * $query->filterByVisexCurinfo31('%fooValue%'); // WHERE VisEx_CurInfo3_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo31 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo31($visexCurinfo31 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo31)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo31)) {
                $visexCurinfo31 = str_replace('*', '%', $visexCurinfo31);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO3_1, $visexCurinfo31, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo3_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo32('fooValue');   // WHERE VisEx_CurInfo3_2 = 'fooValue'
     * $query->filterByVisexCurinfo32('%fooValue%'); // WHERE VisEx_CurInfo3_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo32 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo32($visexCurinfo32 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo32)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo32)) {
                $visexCurinfo32 = str_replace('*', '%', $visexCurinfo32);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO3_2, $visexCurinfo32, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo3_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo33('fooValue');   // WHERE VisEx_CurInfo3_3 = 'fooValue'
     * $query->filterByVisexCurinfo33('%fooValue%'); // WHERE VisEx_CurInfo3_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo33 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo33($visexCurinfo33 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo33)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo33)) {
                $visexCurinfo33 = str_replace('*', '%', $visexCurinfo33);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO3_3, $visexCurinfo33, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo3_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo34('fooValue');   // WHERE VisEx_CurInfo3_4 = 'fooValue'
     * $query->filterByVisexCurinfo34('%fooValue%'); // WHERE VisEx_CurInfo3_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo34 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo34($visexCurinfo34 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo34)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo34)) {
                $visexCurinfo34 = str_replace('*', '%', $visexCurinfo34);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO3_4, $visexCurinfo34, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo4_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo44('fooValue');   // WHERE VisEx_HistInfo4_4 = 'fooValue'
     * $query->filterByVisexHistinfo44('%fooValue%'); // WHERE VisEx_HistInfo4_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo44 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo44($visexHistinfo44 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo44)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo44)) {
                $visexHistinfo44 = str_replace('*', '%', $visexHistinfo44);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO4_4, $visexHistinfo44, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo4_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo43('fooValue');   // WHERE VisEx_HistInfo4_3 = 'fooValue'
     * $query->filterByVisexHistinfo43('%fooValue%'); // WHERE VisEx_HistInfo4_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo43 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo43($visexHistinfo43 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo43)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo43)) {
                $visexHistinfo43 = str_replace('*', '%', $visexHistinfo43);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO4_3, $visexHistinfo43, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo4_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo42('fooValue');   // WHERE VisEx_HistInfo4_2 = 'fooValue'
     * $query->filterByVisexHistinfo42('%fooValue%'); // WHERE VisEx_HistInfo4_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo42 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo42($visexHistinfo42 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo42)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo42)) {
                $visexHistinfo42 = str_replace('*', '%', $visexHistinfo42);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO4_2, $visexHistinfo42, $comparison);
    }

    /**
     * Filter the query on the VisEx_HistInfo4_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexHistinfo41('fooValue');   // WHERE VisEx_HistInfo4_1 = 'fooValue'
     * $query->filterByVisexHistinfo41('%fooValue%'); // WHERE VisEx_HistInfo4_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexHistinfo41 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexHistinfo41($visexHistinfo41 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexHistinfo41)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexHistinfo41)) {
                $visexHistinfo41 = str_replace('*', '%', $visexHistinfo41);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_HISTINFO4_1, $visexHistinfo41, $comparison);
    }

    /**
     * Filter the query on the VisEx_Ref_Info4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexRefInfo4('fooValue');   // WHERE VisEx_Ref_Info4 = 'fooValue'
     * $query->filterByVisexRefInfo4('%fooValue%'); // WHERE VisEx_Ref_Info4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexRefInfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexRefInfo4($visexRefInfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexRefInfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexRefInfo4)) {
                $visexRefInfo4 = str_replace('*', '%', $visexRefInfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_REF_INFO4, $visexRefInfo4, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo4_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo41('fooValue');   // WHERE VisEx_CurInfo4_1 = 'fooValue'
     * $query->filterByVisexCurinfo41('%fooValue%'); // WHERE VisEx_CurInfo4_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo41 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo41($visexCurinfo41 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo41)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo41)) {
                $visexCurinfo41 = str_replace('*', '%', $visexCurinfo41);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO4_1, $visexCurinfo41, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo4_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo42('fooValue');   // WHERE VisEx_CurInfo4_2 = 'fooValue'
     * $query->filterByVisexCurinfo42('%fooValue%'); // WHERE VisEx_CurInfo4_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo42 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo42($visexCurinfo42 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo42)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo42)) {
                $visexCurinfo42 = str_replace('*', '%', $visexCurinfo42);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO4_2, $visexCurinfo42, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo4_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo43('fooValue');   // WHERE VisEx_CurInfo4_3 = 'fooValue'
     * $query->filterByVisexCurinfo43('%fooValue%'); // WHERE VisEx_CurInfo4_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo43 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo43($visexCurinfo43 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo43)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo43)) {
                $visexCurinfo43 = str_replace('*', '%', $visexCurinfo43);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO4_3, $visexCurinfo43, $comparison);
    }

    /**
     * Filter the query on the VisEx_CurInfo4_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisexCurinfo44('fooValue');   // WHERE VisEx_CurInfo4_4 = 'fooValue'
     * $query->filterByVisexCurinfo44('%fooValue%'); // WHERE VisEx_CurInfo4_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visexCurinfo44 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByVisexCurinfo44($visexCurinfo44 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visexCurinfo44)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visexCurinfo44)) {
                $visexCurinfo44 = str_replace('*', '%', $visexCurinfo44);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::VISEX_CURINFO4_4, $visexCurinfo44, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::NEWPASSWORD, $newpassword, $comparison);
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
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function filterByInddate($inddate = null, $comparison = null)
    {
        if (is_array($inddate)) {
            $useMinMax = false;
            if (isset($inddate['min'])) {
                $this->addUsingAlias(Wp9visexIndicatorsPeer::INDDATE, $inddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inddate['max'])) {
                $this->addUsingAlias(Wp9visexIndicatorsPeer::INDDATE, $inddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9visexIndicatorsPeer::INDDATE, $inddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Wp9visexIndicators $wp9visexIndicators Object to remove from the list of results
     *
     * @return Wp9visexIndicatorsQuery The current query, for fluid interface
     */
    public function prune($wp9visexIndicators = null)
    {
        if ($wp9visexIndicators) {
            $this->addUsingAlias(Wp9visexIndicatorsPeer::ID, $wp9visexIndicators->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
