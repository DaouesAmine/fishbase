<?php


/**
 * Base class that represents a query for the 'wp9man_indicators' table.
 *
 *
 *
 * @method Wp9manIndicatorsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method Wp9manIndicatorsQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method Wp9manIndicatorsQuery orderByInstitution($order = Criteria::ASC) Order by the Institution column
 * @method Wp9manIndicatorsQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method Wp9manIndicatorsQuery orderByMpaname($order = Criteria::ASC) Order by the MPAName column
 * @method Wp9manIndicatorsQuery orderByMpacountry($order = Criteria::ASC) Order by the MPACountry column
 * @method Wp9manIndicatorsQuery orderByMpalocation($order = Criteria::ASC) Order by the MPALocation column
 * @method Wp9manIndicatorsQuery orderByMpacharacter($order = Criteria::ASC) Order by the MPACharacter column
 * @method Wp9manIndicatorsQuery orderByScubadiving($order = Criteria::ASC) Order by the ScubaDiving column
 * @method Wp9manIndicatorsQuery orderBySnorkeling($order = Criteria::ASC) Order by the Snorkeling column
 * @method Wp9manIndicatorsQuery orderByHiking($order = Criteria::ASC) Order by the Hiking column
 * @method Wp9manIndicatorsQuery orderByFfwatching($order = Criteria::ASC) Order by the FFWatching column
 * @method Wp9manIndicatorsQuery orderBySeascapewatching($order = Criteria::ASC) Order by the SeascapeWatching column
 * @method Wp9manIndicatorsQuery orderByOther1($order = Criteria::ASC) Order by the Other1 column
 * @method Wp9manIndicatorsQuery orderByOther2($order = Criteria::ASC) Order by the Other2 column
 * @method Wp9manIndicatorsQuery orderByOther3($order = Criteria::ASC) Order by the Other3 column
 * @method Wp9manIndicatorsQuery orderByOther4($order = Criteria::ASC) Order by the Other4 column
 * @method Wp9manIndicatorsQuery orderByComname1($order = Criteria::ASC) Order by the ComName1 column
 * @method Wp9manIndicatorsQuery orderBySciname1($order = Criteria::ASC) Order by the SciName1 column
 * @method Wp9manIndicatorsQuery orderByDesceco1($order = Criteria::ASC) Order by the DescEco1 column
 * @method Wp9manIndicatorsQuery orderByTemppres1($order = Criteria::ASC) Order by the TempPres1 column
 * @method Wp9manIndicatorsQuery orderByComname2($order = Criteria::ASC) Order by the ComName2 column
 * @method Wp9manIndicatorsQuery orderBySciname2($order = Criteria::ASC) Order by the SciName2 column
 * @method Wp9manIndicatorsQuery orderByDesceco2($order = Criteria::ASC) Order by the DescEco2 column
 * @method Wp9manIndicatorsQuery orderByTemppres2($order = Criteria::ASC) Order by the TempPres2 column
 * @method Wp9manIndicatorsQuery orderByComname3($order = Criteria::ASC) Order by the ComName3 column
 * @method Wp9manIndicatorsQuery orderBySciname3($order = Criteria::ASC) Order by the SciName3 column
 * @method Wp9manIndicatorsQuery orderByDesceco3($order = Criteria::ASC) Order by the DescEco3 column
 * @method Wp9manIndicatorsQuery orderByTemppres3($order = Criteria::ASC) Order by the TempPres3 column
 * @method Wp9manIndicatorsQuery orderByComname4($order = Criteria::ASC) Order by the ComName4 column
 * @method Wp9manIndicatorsQuery orderBySciname4($order = Criteria::ASC) Order by the SciName4 column
 * @method Wp9manIndicatorsQuery orderByDesceco4($order = Criteria::ASC) Order by the DescEco4 column
 * @method Wp9manIndicatorsQuery orderByTemppres4($order = Criteria::ASC) Order by the TempPres4 column
 * @method Wp9manIndicatorsQuery orderByEcocomname1($order = Criteria::ASC) Order by the EcoComName1 column
 * @method Wp9manIndicatorsQuery orderByEcodesceco1($order = Criteria::ASC) Order by the EcoDescEco1 column
 * @method Wp9manIndicatorsQuery orderByReldis1($order = Criteria::ASC) Order by the RelDis1 column
 * @method Wp9manIndicatorsQuery orderByEcocomname2($order = Criteria::ASC) Order by the EcoComName2 column
 * @method Wp9manIndicatorsQuery orderByEcodesceco2($order = Criteria::ASC) Order by the EcoDescEco2 column
 * @method Wp9manIndicatorsQuery orderByReldis2($order = Criteria::ASC) Order by the RelDis2 column
 * @method Wp9manIndicatorsQuery orderByEcocomname3($order = Criteria::ASC) Order by the EcoComName3 column
 * @method Wp9manIndicatorsQuery orderByEcodesceco3($order = Criteria::ASC) Order by the EcoDescEco3 column
 * @method Wp9manIndicatorsQuery orderByReldis3($order = Criteria::ASC) Order by the RelDis3 column
 * @method Wp9manIndicatorsQuery orderByEcocomname4($order = Criteria::ASC) Order by the EcoComName4 column
 * @method Wp9manIndicatorsQuery orderByEcodesceco4($order = Criteria::ASC) Order by the EcoDescEco4 column
 * @method Wp9manIndicatorsQuery orderByReldis4($order = Criteria::ASC) Order by the RelDis4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo4($order = Criteria::ASC) Order by the Man_HistInfo_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo3($order = Criteria::ASC) Order by the Man_HistInfo_3 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo2($order = Criteria::ASC) Order by the Man_HistInfo_2 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo1($order = Criteria::ASC) Order by the Man_HistInfo_1 column
 * @method Wp9manIndicatorsQuery orderByManRefInfo1($order = Criteria::ASC) Order by the Man_Ref_Info1 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo1($order = Criteria::ASC) Order by the Man_CurInfo_1 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo2($order = Criteria::ASC) Order by the Man_CurInfo_2 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo3($order = Criteria::ASC) Order by the Man_CurInfo_3 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo4($order = Criteria::ASC) Order by the Man_CurInfo_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo24($order = Criteria::ASC) Order by the Man_HistInfo2_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo23($order = Criteria::ASC) Order by the Man_HistInfo2_3 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo22($order = Criteria::ASC) Order by the Man_HistInfo2_2 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo21($order = Criteria::ASC) Order by the Man_HistInfo2_1 column
 * @method Wp9manIndicatorsQuery orderByManRefInfo2($order = Criteria::ASC) Order by the Man_Ref_Info2 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo21($order = Criteria::ASC) Order by the Man_CurInfo2_1 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo22($order = Criteria::ASC) Order by the Man_CurInfo2_2 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo23($order = Criteria::ASC) Order by the Man_CurInfo2_3 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo24($order = Criteria::ASC) Order by the Man_CurInfo2_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo34($order = Criteria::ASC) Order by the Man_HistInfo3_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo33($order = Criteria::ASC) Order by the Man_HistInfo3_3 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo32($order = Criteria::ASC) Order by the Man_HistInfo3_2 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo31($order = Criteria::ASC) Order by the Man_HistInfo3_1 column
 * @method Wp9manIndicatorsQuery orderByManRefInfo3($order = Criteria::ASC) Order by the Man_Ref_Info3 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo31($order = Criteria::ASC) Order by the Man_CurInfo3_1 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo32($order = Criteria::ASC) Order by the Man_CurInfo3_2 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo33($order = Criteria::ASC) Order by the Man_CurInfo3_3 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo34($order = Criteria::ASC) Order by the Man_CurInfo3_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo44($order = Criteria::ASC) Order by the Man_HistInfo4_4 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo43($order = Criteria::ASC) Order by the Man_HistInfo4_3 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo42($order = Criteria::ASC) Order by the Man_HistInfo4_2 column
 * @method Wp9manIndicatorsQuery orderByManHistinfo41($order = Criteria::ASC) Order by the Man_HistInfo4_1 column
 * @method Wp9manIndicatorsQuery orderByManRefInfo4($order = Criteria::ASC) Order by the Man_Ref_Info4 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo41($order = Criteria::ASC) Order by the Man_CurInfo4_1 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo42($order = Criteria::ASC) Order by the Man_CurInfo4_2 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo43($order = Criteria::ASC) Order by the Man_CurInfo4_3 column
 * @method Wp9manIndicatorsQuery orderByManCurinfo44($order = Criteria::ASC) Order by the Man_CurInfo4_4 column
 * @method Wp9manIndicatorsQuery orderByNewpassword($order = Criteria::ASC) Order by the newpassword column
 * @method Wp9manIndicatorsQuery orderByInddate($order = Criteria::ASC) Order by the IndDate column
 *
 * @method Wp9manIndicatorsQuery groupById() Group by the id column
 * @method Wp9manIndicatorsQuery groupByName() Group by the Name column
 * @method Wp9manIndicatorsQuery groupByInstitution() Group by the Institution column
 * @method Wp9manIndicatorsQuery groupByEmail() Group by the Email column
 * @method Wp9manIndicatorsQuery groupByMpaname() Group by the MPAName column
 * @method Wp9manIndicatorsQuery groupByMpacountry() Group by the MPACountry column
 * @method Wp9manIndicatorsQuery groupByMpalocation() Group by the MPALocation column
 * @method Wp9manIndicatorsQuery groupByMpacharacter() Group by the MPACharacter column
 * @method Wp9manIndicatorsQuery groupByScubadiving() Group by the ScubaDiving column
 * @method Wp9manIndicatorsQuery groupBySnorkeling() Group by the Snorkeling column
 * @method Wp9manIndicatorsQuery groupByHiking() Group by the Hiking column
 * @method Wp9manIndicatorsQuery groupByFfwatching() Group by the FFWatching column
 * @method Wp9manIndicatorsQuery groupBySeascapewatching() Group by the SeascapeWatching column
 * @method Wp9manIndicatorsQuery groupByOther1() Group by the Other1 column
 * @method Wp9manIndicatorsQuery groupByOther2() Group by the Other2 column
 * @method Wp9manIndicatorsQuery groupByOther3() Group by the Other3 column
 * @method Wp9manIndicatorsQuery groupByOther4() Group by the Other4 column
 * @method Wp9manIndicatorsQuery groupByComname1() Group by the ComName1 column
 * @method Wp9manIndicatorsQuery groupBySciname1() Group by the SciName1 column
 * @method Wp9manIndicatorsQuery groupByDesceco1() Group by the DescEco1 column
 * @method Wp9manIndicatorsQuery groupByTemppres1() Group by the TempPres1 column
 * @method Wp9manIndicatorsQuery groupByComname2() Group by the ComName2 column
 * @method Wp9manIndicatorsQuery groupBySciname2() Group by the SciName2 column
 * @method Wp9manIndicatorsQuery groupByDesceco2() Group by the DescEco2 column
 * @method Wp9manIndicatorsQuery groupByTemppres2() Group by the TempPres2 column
 * @method Wp9manIndicatorsQuery groupByComname3() Group by the ComName3 column
 * @method Wp9manIndicatorsQuery groupBySciname3() Group by the SciName3 column
 * @method Wp9manIndicatorsQuery groupByDesceco3() Group by the DescEco3 column
 * @method Wp9manIndicatorsQuery groupByTemppres3() Group by the TempPres3 column
 * @method Wp9manIndicatorsQuery groupByComname4() Group by the ComName4 column
 * @method Wp9manIndicatorsQuery groupBySciname4() Group by the SciName4 column
 * @method Wp9manIndicatorsQuery groupByDesceco4() Group by the DescEco4 column
 * @method Wp9manIndicatorsQuery groupByTemppres4() Group by the TempPres4 column
 * @method Wp9manIndicatorsQuery groupByEcocomname1() Group by the EcoComName1 column
 * @method Wp9manIndicatorsQuery groupByEcodesceco1() Group by the EcoDescEco1 column
 * @method Wp9manIndicatorsQuery groupByReldis1() Group by the RelDis1 column
 * @method Wp9manIndicatorsQuery groupByEcocomname2() Group by the EcoComName2 column
 * @method Wp9manIndicatorsQuery groupByEcodesceco2() Group by the EcoDescEco2 column
 * @method Wp9manIndicatorsQuery groupByReldis2() Group by the RelDis2 column
 * @method Wp9manIndicatorsQuery groupByEcocomname3() Group by the EcoComName3 column
 * @method Wp9manIndicatorsQuery groupByEcodesceco3() Group by the EcoDescEco3 column
 * @method Wp9manIndicatorsQuery groupByReldis3() Group by the RelDis3 column
 * @method Wp9manIndicatorsQuery groupByEcocomname4() Group by the EcoComName4 column
 * @method Wp9manIndicatorsQuery groupByEcodesceco4() Group by the EcoDescEco4 column
 * @method Wp9manIndicatorsQuery groupByReldis4() Group by the RelDis4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo4() Group by the Man_HistInfo_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo3() Group by the Man_HistInfo_3 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo2() Group by the Man_HistInfo_2 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo1() Group by the Man_HistInfo_1 column
 * @method Wp9manIndicatorsQuery groupByManRefInfo1() Group by the Man_Ref_Info1 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo1() Group by the Man_CurInfo_1 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo2() Group by the Man_CurInfo_2 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo3() Group by the Man_CurInfo_3 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo4() Group by the Man_CurInfo_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo24() Group by the Man_HistInfo2_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo23() Group by the Man_HistInfo2_3 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo22() Group by the Man_HistInfo2_2 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo21() Group by the Man_HistInfo2_1 column
 * @method Wp9manIndicatorsQuery groupByManRefInfo2() Group by the Man_Ref_Info2 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo21() Group by the Man_CurInfo2_1 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo22() Group by the Man_CurInfo2_2 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo23() Group by the Man_CurInfo2_3 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo24() Group by the Man_CurInfo2_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo34() Group by the Man_HistInfo3_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo33() Group by the Man_HistInfo3_3 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo32() Group by the Man_HistInfo3_2 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo31() Group by the Man_HistInfo3_1 column
 * @method Wp9manIndicatorsQuery groupByManRefInfo3() Group by the Man_Ref_Info3 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo31() Group by the Man_CurInfo3_1 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo32() Group by the Man_CurInfo3_2 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo33() Group by the Man_CurInfo3_3 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo34() Group by the Man_CurInfo3_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo44() Group by the Man_HistInfo4_4 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo43() Group by the Man_HistInfo4_3 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo42() Group by the Man_HistInfo4_2 column
 * @method Wp9manIndicatorsQuery groupByManHistinfo41() Group by the Man_HistInfo4_1 column
 * @method Wp9manIndicatorsQuery groupByManRefInfo4() Group by the Man_Ref_Info4 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo41() Group by the Man_CurInfo4_1 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo42() Group by the Man_CurInfo4_2 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo43() Group by the Man_CurInfo4_3 column
 * @method Wp9manIndicatorsQuery groupByManCurinfo44() Group by the Man_CurInfo4_4 column
 * @method Wp9manIndicatorsQuery groupByNewpassword() Group by the newpassword column
 * @method Wp9manIndicatorsQuery groupByInddate() Group by the IndDate column
 *
 * @method Wp9manIndicatorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Wp9manIndicatorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Wp9manIndicatorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Wp9manIndicators findOne(PropelPDO $con = null) Return the first Wp9manIndicators matching the query
 * @method Wp9manIndicators findOneOrCreate(PropelPDO $con = null) Return the first Wp9manIndicators matching the query, or a new Wp9manIndicators object populated from the query conditions when no match is found
 *
 * @method Wp9manIndicators findOneByName(string $Name) Return the first Wp9manIndicators filtered by the Name column
 * @method Wp9manIndicators findOneByInstitution(string $Institution) Return the first Wp9manIndicators filtered by the Institution column
 * @method Wp9manIndicators findOneByEmail(string $Email) Return the first Wp9manIndicators filtered by the Email column
 * @method Wp9manIndicators findOneByMpaname(string $MPAName) Return the first Wp9manIndicators filtered by the MPAName column
 * @method Wp9manIndicators findOneByMpacountry(string $MPACountry) Return the first Wp9manIndicators filtered by the MPACountry column
 * @method Wp9manIndicators findOneByMpalocation(string $MPALocation) Return the first Wp9manIndicators filtered by the MPALocation column
 * @method Wp9manIndicators findOneByMpacharacter(string $MPACharacter) Return the first Wp9manIndicators filtered by the MPACharacter column
 * @method Wp9manIndicators findOneByScubadiving(string $ScubaDiving) Return the first Wp9manIndicators filtered by the ScubaDiving column
 * @method Wp9manIndicators findOneBySnorkeling(string $Snorkeling) Return the first Wp9manIndicators filtered by the Snorkeling column
 * @method Wp9manIndicators findOneByHiking(string $Hiking) Return the first Wp9manIndicators filtered by the Hiking column
 * @method Wp9manIndicators findOneByFfwatching(string $FFWatching) Return the first Wp9manIndicators filtered by the FFWatching column
 * @method Wp9manIndicators findOneBySeascapewatching(string $SeascapeWatching) Return the first Wp9manIndicators filtered by the SeascapeWatching column
 * @method Wp9manIndicators findOneByOther1(string $Other1) Return the first Wp9manIndicators filtered by the Other1 column
 * @method Wp9manIndicators findOneByOther2(string $Other2) Return the first Wp9manIndicators filtered by the Other2 column
 * @method Wp9manIndicators findOneByOther3(string $Other3) Return the first Wp9manIndicators filtered by the Other3 column
 * @method Wp9manIndicators findOneByOther4(string $Other4) Return the first Wp9manIndicators filtered by the Other4 column
 * @method Wp9manIndicators findOneByComname1(string $ComName1) Return the first Wp9manIndicators filtered by the ComName1 column
 * @method Wp9manIndicators findOneBySciname1(string $SciName1) Return the first Wp9manIndicators filtered by the SciName1 column
 * @method Wp9manIndicators findOneByDesceco1(string $DescEco1) Return the first Wp9manIndicators filtered by the DescEco1 column
 * @method Wp9manIndicators findOneByTemppres1(string $TempPres1) Return the first Wp9manIndicators filtered by the TempPres1 column
 * @method Wp9manIndicators findOneByComname2(string $ComName2) Return the first Wp9manIndicators filtered by the ComName2 column
 * @method Wp9manIndicators findOneBySciname2(string $SciName2) Return the first Wp9manIndicators filtered by the SciName2 column
 * @method Wp9manIndicators findOneByDesceco2(string $DescEco2) Return the first Wp9manIndicators filtered by the DescEco2 column
 * @method Wp9manIndicators findOneByTemppres2(string $TempPres2) Return the first Wp9manIndicators filtered by the TempPres2 column
 * @method Wp9manIndicators findOneByComname3(string $ComName3) Return the first Wp9manIndicators filtered by the ComName3 column
 * @method Wp9manIndicators findOneBySciname3(string $SciName3) Return the first Wp9manIndicators filtered by the SciName3 column
 * @method Wp9manIndicators findOneByDesceco3(string $DescEco3) Return the first Wp9manIndicators filtered by the DescEco3 column
 * @method Wp9manIndicators findOneByTemppres3(string $TempPres3) Return the first Wp9manIndicators filtered by the TempPres3 column
 * @method Wp9manIndicators findOneByComname4(string $ComName4) Return the first Wp9manIndicators filtered by the ComName4 column
 * @method Wp9manIndicators findOneBySciname4(string $SciName4) Return the first Wp9manIndicators filtered by the SciName4 column
 * @method Wp9manIndicators findOneByDesceco4(string $DescEco4) Return the first Wp9manIndicators filtered by the DescEco4 column
 * @method Wp9manIndicators findOneByTemppres4(string $TempPres4) Return the first Wp9manIndicators filtered by the TempPres4 column
 * @method Wp9manIndicators findOneByEcocomname1(string $EcoComName1) Return the first Wp9manIndicators filtered by the EcoComName1 column
 * @method Wp9manIndicators findOneByEcodesceco1(string $EcoDescEco1) Return the first Wp9manIndicators filtered by the EcoDescEco1 column
 * @method Wp9manIndicators findOneByReldis1(string $RelDis1) Return the first Wp9manIndicators filtered by the RelDis1 column
 * @method Wp9manIndicators findOneByEcocomname2(string $EcoComName2) Return the first Wp9manIndicators filtered by the EcoComName2 column
 * @method Wp9manIndicators findOneByEcodesceco2(string $EcoDescEco2) Return the first Wp9manIndicators filtered by the EcoDescEco2 column
 * @method Wp9manIndicators findOneByReldis2(string $RelDis2) Return the first Wp9manIndicators filtered by the RelDis2 column
 * @method Wp9manIndicators findOneByEcocomname3(string $EcoComName3) Return the first Wp9manIndicators filtered by the EcoComName3 column
 * @method Wp9manIndicators findOneByEcodesceco3(string $EcoDescEco3) Return the first Wp9manIndicators filtered by the EcoDescEco3 column
 * @method Wp9manIndicators findOneByReldis3(string $RelDis3) Return the first Wp9manIndicators filtered by the RelDis3 column
 * @method Wp9manIndicators findOneByEcocomname4(string $EcoComName4) Return the first Wp9manIndicators filtered by the EcoComName4 column
 * @method Wp9manIndicators findOneByEcodesceco4(string $EcoDescEco4) Return the first Wp9manIndicators filtered by the EcoDescEco4 column
 * @method Wp9manIndicators findOneByReldis4(string $RelDis4) Return the first Wp9manIndicators filtered by the RelDis4 column
 * @method Wp9manIndicators findOneByManHistinfo4(string $Man_HistInfo_4) Return the first Wp9manIndicators filtered by the Man_HistInfo_4 column
 * @method Wp9manIndicators findOneByManHistinfo3(string $Man_HistInfo_3) Return the first Wp9manIndicators filtered by the Man_HistInfo_3 column
 * @method Wp9manIndicators findOneByManHistinfo2(string $Man_HistInfo_2) Return the first Wp9manIndicators filtered by the Man_HistInfo_2 column
 * @method Wp9manIndicators findOneByManHistinfo1(string $Man_HistInfo_1) Return the first Wp9manIndicators filtered by the Man_HistInfo_1 column
 * @method Wp9manIndicators findOneByManRefInfo1(string $Man_Ref_Info1) Return the first Wp9manIndicators filtered by the Man_Ref_Info1 column
 * @method Wp9manIndicators findOneByManCurinfo1(string $Man_CurInfo_1) Return the first Wp9manIndicators filtered by the Man_CurInfo_1 column
 * @method Wp9manIndicators findOneByManCurinfo2(string $Man_CurInfo_2) Return the first Wp9manIndicators filtered by the Man_CurInfo_2 column
 * @method Wp9manIndicators findOneByManCurinfo3(string $Man_CurInfo_3) Return the first Wp9manIndicators filtered by the Man_CurInfo_3 column
 * @method Wp9manIndicators findOneByManCurinfo4(string $Man_CurInfo_4) Return the first Wp9manIndicators filtered by the Man_CurInfo_4 column
 * @method Wp9manIndicators findOneByManHistinfo24(string $Man_HistInfo2_4) Return the first Wp9manIndicators filtered by the Man_HistInfo2_4 column
 * @method Wp9manIndicators findOneByManHistinfo23(string $Man_HistInfo2_3) Return the first Wp9manIndicators filtered by the Man_HistInfo2_3 column
 * @method Wp9manIndicators findOneByManHistinfo22(string $Man_HistInfo2_2) Return the first Wp9manIndicators filtered by the Man_HistInfo2_2 column
 * @method Wp9manIndicators findOneByManHistinfo21(string $Man_HistInfo2_1) Return the first Wp9manIndicators filtered by the Man_HistInfo2_1 column
 * @method Wp9manIndicators findOneByManRefInfo2(string $Man_Ref_Info2) Return the first Wp9manIndicators filtered by the Man_Ref_Info2 column
 * @method Wp9manIndicators findOneByManCurinfo21(string $Man_CurInfo2_1) Return the first Wp9manIndicators filtered by the Man_CurInfo2_1 column
 * @method Wp9manIndicators findOneByManCurinfo22(string $Man_CurInfo2_2) Return the first Wp9manIndicators filtered by the Man_CurInfo2_2 column
 * @method Wp9manIndicators findOneByManCurinfo23(string $Man_CurInfo2_3) Return the first Wp9manIndicators filtered by the Man_CurInfo2_3 column
 * @method Wp9manIndicators findOneByManCurinfo24(string $Man_CurInfo2_4) Return the first Wp9manIndicators filtered by the Man_CurInfo2_4 column
 * @method Wp9manIndicators findOneByManHistinfo34(string $Man_HistInfo3_4) Return the first Wp9manIndicators filtered by the Man_HistInfo3_4 column
 * @method Wp9manIndicators findOneByManHistinfo33(string $Man_HistInfo3_3) Return the first Wp9manIndicators filtered by the Man_HistInfo3_3 column
 * @method Wp9manIndicators findOneByManHistinfo32(string $Man_HistInfo3_2) Return the first Wp9manIndicators filtered by the Man_HistInfo3_2 column
 * @method Wp9manIndicators findOneByManHistinfo31(string $Man_HistInfo3_1) Return the first Wp9manIndicators filtered by the Man_HistInfo3_1 column
 * @method Wp9manIndicators findOneByManRefInfo3(string $Man_Ref_Info3) Return the first Wp9manIndicators filtered by the Man_Ref_Info3 column
 * @method Wp9manIndicators findOneByManCurinfo31(string $Man_CurInfo3_1) Return the first Wp9manIndicators filtered by the Man_CurInfo3_1 column
 * @method Wp9manIndicators findOneByManCurinfo32(string $Man_CurInfo3_2) Return the first Wp9manIndicators filtered by the Man_CurInfo3_2 column
 * @method Wp9manIndicators findOneByManCurinfo33(string $Man_CurInfo3_3) Return the first Wp9manIndicators filtered by the Man_CurInfo3_3 column
 * @method Wp9manIndicators findOneByManCurinfo34(string $Man_CurInfo3_4) Return the first Wp9manIndicators filtered by the Man_CurInfo3_4 column
 * @method Wp9manIndicators findOneByManHistinfo44(string $Man_HistInfo4_4) Return the first Wp9manIndicators filtered by the Man_HistInfo4_4 column
 * @method Wp9manIndicators findOneByManHistinfo43(string $Man_HistInfo4_3) Return the first Wp9manIndicators filtered by the Man_HistInfo4_3 column
 * @method Wp9manIndicators findOneByManHistinfo42(string $Man_HistInfo4_2) Return the first Wp9manIndicators filtered by the Man_HistInfo4_2 column
 * @method Wp9manIndicators findOneByManHistinfo41(string $Man_HistInfo4_1) Return the first Wp9manIndicators filtered by the Man_HistInfo4_1 column
 * @method Wp9manIndicators findOneByManRefInfo4(string $Man_Ref_Info4) Return the first Wp9manIndicators filtered by the Man_Ref_Info4 column
 * @method Wp9manIndicators findOneByManCurinfo41(string $Man_CurInfo4_1) Return the first Wp9manIndicators filtered by the Man_CurInfo4_1 column
 * @method Wp9manIndicators findOneByManCurinfo42(string $Man_CurInfo4_2) Return the first Wp9manIndicators filtered by the Man_CurInfo4_2 column
 * @method Wp9manIndicators findOneByManCurinfo43(string $Man_CurInfo4_3) Return the first Wp9manIndicators filtered by the Man_CurInfo4_3 column
 * @method Wp9manIndicators findOneByManCurinfo44(string $Man_CurInfo4_4) Return the first Wp9manIndicators filtered by the Man_CurInfo4_4 column
 * @method Wp9manIndicators findOneByNewpassword(string $newpassword) Return the first Wp9manIndicators filtered by the newpassword column
 * @method Wp9manIndicators findOneByInddate(string $IndDate) Return the first Wp9manIndicators filtered by the IndDate column
 *
 * @method array findById(int $id) Return Wp9manIndicators objects filtered by the id column
 * @method array findByName(string $Name) Return Wp9manIndicators objects filtered by the Name column
 * @method array findByInstitution(string $Institution) Return Wp9manIndicators objects filtered by the Institution column
 * @method array findByEmail(string $Email) Return Wp9manIndicators objects filtered by the Email column
 * @method array findByMpaname(string $MPAName) Return Wp9manIndicators objects filtered by the MPAName column
 * @method array findByMpacountry(string $MPACountry) Return Wp9manIndicators objects filtered by the MPACountry column
 * @method array findByMpalocation(string $MPALocation) Return Wp9manIndicators objects filtered by the MPALocation column
 * @method array findByMpacharacter(string $MPACharacter) Return Wp9manIndicators objects filtered by the MPACharacter column
 * @method array findByScubadiving(string $ScubaDiving) Return Wp9manIndicators objects filtered by the ScubaDiving column
 * @method array findBySnorkeling(string $Snorkeling) Return Wp9manIndicators objects filtered by the Snorkeling column
 * @method array findByHiking(string $Hiking) Return Wp9manIndicators objects filtered by the Hiking column
 * @method array findByFfwatching(string $FFWatching) Return Wp9manIndicators objects filtered by the FFWatching column
 * @method array findBySeascapewatching(string $SeascapeWatching) Return Wp9manIndicators objects filtered by the SeascapeWatching column
 * @method array findByOther1(string $Other1) Return Wp9manIndicators objects filtered by the Other1 column
 * @method array findByOther2(string $Other2) Return Wp9manIndicators objects filtered by the Other2 column
 * @method array findByOther3(string $Other3) Return Wp9manIndicators objects filtered by the Other3 column
 * @method array findByOther4(string $Other4) Return Wp9manIndicators objects filtered by the Other4 column
 * @method array findByComname1(string $ComName1) Return Wp9manIndicators objects filtered by the ComName1 column
 * @method array findBySciname1(string $SciName1) Return Wp9manIndicators objects filtered by the SciName1 column
 * @method array findByDesceco1(string $DescEco1) Return Wp9manIndicators objects filtered by the DescEco1 column
 * @method array findByTemppres1(string $TempPres1) Return Wp9manIndicators objects filtered by the TempPres1 column
 * @method array findByComname2(string $ComName2) Return Wp9manIndicators objects filtered by the ComName2 column
 * @method array findBySciname2(string $SciName2) Return Wp9manIndicators objects filtered by the SciName2 column
 * @method array findByDesceco2(string $DescEco2) Return Wp9manIndicators objects filtered by the DescEco2 column
 * @method array findByTemppres2(string $TempPres2) Return Wp9manIndicators objects filtered by the TempPres2 column
 * @method array findByComname3(string $ComName3) Return Wp9manIndicators objects filtered by the ComName3 column
 * @method array findBySciname3(string $SciName3) Return Wp9manIndicators objects filtered by the SciName3 column
 * @method array findByDesceco3(string $DescEco3) Return Wp9manIndicators objects filtered by the DescEco3 column
 * @method array findByTemppres3(string $TempPres3) Return Wp9manIndicators objects filtered by the TempPres3 column
 * @method array findByComname4(string $ComName4) Return Wp9manIndicators objects filtered by the ComName4 column
 * @method array findBySciname4(string $SciName4) Return Wp9manIndicators objects filtered by the SciName4 column
 * @method array findByDesceco4(string $DescEco4) Return Wp9manIndicators objects filtered by the DescEco4 column
 * @method array findByTemppres4(string $TempPres4) Return Wp9manIndicators objects filtered by the TempPres4 column
 * @method array findByEcocomname1(string $EcoComName1) Return Wp9manIndicators objects filtered by the EcoComName1 column
 * @method array findByEcodesceco1(string $EcoDescEco1) Return Wp9manIndicators objects filtered by the EcoDescEco1 column
 * @method array findByReldis1(string $RelDis1) Return Wp9manIndicators objects filtered by the RelDis1 column
 * @method array findByEcocomname2(string $EcoComName2) Return Wp9manIndicators objects filtered by the EcoComName2 column
 * @method array findByEcodesceco2(string $EcoDescEco2) Return Wp9manIndicators objects filtered by the EcoDescEco2 column
 * @method array findByReldis2(string $RelDis2) Return Wp9manIndicators objects filtered by the RelDis2 column
 * @method array findByEcocomname3(string $EcoComName3) Return Wp9manIndicators objects filtered by the EcoComName3 column
 * @method array findByEcodesceco3(string $EcoDescEco3) Return Wp9manIndicators objects filtered by the EcoDescEco3 column
 * @method array findByReldis3(string $RelDis3) Return Wp9manIndicators objects filtered by the RelDis3 column
 * @method array findByEcocomname4(string $EcoComName4) Return Wp9manIndicators objects filtered by the EcoComName4 column
 * @method array findByEcodesceco4(string $EcoDescEco4) Return Wp9manIndicators objects filtered by the EcoDescEco4 column
 * @method array findByReldis4(string $RelDis4) Return Wp9manIndicators objects filtered by the RelDis4 column
 * @method array findByManHistinfo4(string $Man_HistInfo_4) Return Wp9manIndicators objects filtered by the Man_HistInfo_4 column
 * @method array findByManHistinfo3(string $Man_HistInfo_3) Return Wp9manIndicators objects filtered by the Man_HistInfo_3 column
 * @method array findByManHistinfo2(string $Man_HistInfo_2) Return Wp9manIndicators objects filtered by the Man_HistInfo_2 column
 * @method array findByManHistinfo1(string $Man_HistInfo_1) Return Wp9manIndicators objects filtered by the Man_HistInfo_1 column
 * @method array findByManRefInfo1(string $Man_Ref_Info1) Return Wp9manIndicators objects filtered by the Man_Ref_Info1 column
 * @method array findByManCurinfo1(string $Man_CurInfo_1) Return Wp9manIndicators objects filtered by the Man_CurInfo_1 column
 * @method array findByManCurinfo2(string $Man_CurInfo_2) Return Wp9manIndicators objects filtered by the Man_CurInfo_2 column
 * @method array findByManCurinfo3(string $Man_CurInfo_3) Return Wp9manIndicators objects filtered by the Man_CurInfo_3 column
 * @method array findByManCurinfo4(string $Man_CurInfo_4) Return Wp9manIndicators objects filtered by the Man_CurInfo_4 column
 * @method array findByManHistinfo24(string $Man_HistInfo2_4) Return Wp9manIndicators objects filtered by the Man_HistInfo2_4 column
 * @method array findByManHistinfo23(string $Man_HistInfo2_3) Return Wp9manIndicators objects filtered by the Man_HistInfo2_3 column
 * @method array findByManHistinfo22(string $Man_HistInfo2_2) Return Wp9manIndicators objects filtered by the Man_HistInfo2_2 column
 * @method array findByManHistinfo21(string $Man_HistInfo2_1) Return Wp9manIndicators objects filtered by the Man_HistInfo2_1 column
 * @method array findByManRefInfo2(string $Man_Ref_Info2) Return Wp9manIndicators objects filtered by the Man_Ref_Info2 column
 * @method array findByManCurinfo21(string $Man_CurInfo2_1) Return Wp9manIndicators objects filtered by the Man_CurInfo2_1 column
 * @method array findByManCurinfo22(string $Man_CurInfo2_2) Return Wp9manIndicators objects filtered by the Man_CurInfo2_2 column
 * @method array findByManCurinfo23(string $Man_CurInfo2_3) Return Wp9manIndicators objects filtered by the Man_CurInfo2_3 column
 * @method array findByManCurinfo24(string $Man_CurInfo2_4) Return Wp9manIndicators objects filtered by the Man_CurInfo2_4 column
 * @method array findByManHistinfo34(string $Man_HistInfo3_4) Return Wp9manIndicators objects filtered by the Man_HistInfo3_4 column
 * @method array findByManHistinfo33(string $Man_HistInfo3_3) Return Wp9manIndicators objects filtered by the Man_HistInfo3_3 column
 * @method array findByManHistinfo32(string $Man_HistInfo3_2) Return Wp9manIndicators objects filtered by the Man_HistInfo3_2 column
 * @method array findByManHistinfo31(string $Man_HistInfo3_1) Return Wp9manIndicators objects filtered by the Man_HistInfo3_1 column
 * @method array findByManRefInfo3(string $Man_Ref_Info3) Return Wp9manIndicators objects filtered by the Man_Ref_Info3 column
 * @method array findByManCurinfo31(string $Man_CurInfo3_1) Return Wp9manIndicators objects filtered by the Man_CurInfo3_1 column
 * @method array findByManCurinfo32(string $Man_CurInfo3_2) Return Wp9manIndicators objects filtered by the Man_CurInfo3_2 column
 * @method array findByManCurinfo33(string $Man_CurInfo3_3) Return Wp9manIndicators objects filtered by the Man_CurInfo3_3 column
 * @method array findByManCurinfo34(string $Man_CurInfo3_4) Return Wp9manIndicators objects filtered by the Man_CurInfo3_4 column
 * @method array findByManHistinfo44(string $Man_HistInfo4_4) Return Wp9manIndicators objects filtered by the Man_HistInfo4_4 column
 * @method array findByManHistinfo43(string $Man_HistInfo4_3) Return Wp9manIndicators objects filtered by the Man_HistInfo4_3 column
 * @method array findByManHistinfo42(string $Man_HistInfo4_2) Return Wp9manIndicators objects filtered by the Man_HistInfo4_2 column
 * @method array findByManHistinfo41(string $Man_HistInfo4_1) Return Wp9manIndicators objects filtered by the Man_HistInfo4_1 column
 * @method array findByManRefInfo4(string $Man_Ref_Info4) Return Wp9manIndicators objects filtered by the Man_Ref_Info4 column
 * @method array findByManCurinfo41(string $Man_CurInfo4_1) Return Wp9manIndicators objects filtered by the Man_CurInfo4_1 column
 * @method array findByManCurinfo42(string $Man_CurInfo4_2) Return Wp9manIndicators objects filtered by the Man_CurInfo4_2 column
 * @method array findByManCurinfo43(string $Man_CurInfo4_3) Return Wp9manIndicators objects filtered by the Man_CurInfo4_3 column
 * @method array findByManCurinfo44(string $Man_CurInfo4_4) Return Wp9manIndicators objects filtered by the Man_CurInfo4_4 column
 * @method array findByNewpassword(string $newpassword) Return Wp9manIndicators objects filtered by the newpassword column
 * @method array findByInddate(string $IndDate) Return Wp9manIndicators objects filtered by the IndDate column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWp9manIndicatorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWp9manIndicatorsQuery object.
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
            $modelName = 'Wp9manIndicators';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Wp9manIndicatorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Wp9manIndicatorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Wp9manIndicatorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Wp9manIndicatorsQuery) {
            return $criteria;
        }
        $query = new Wp9manIndicatorsQuery(null, null, $modelAlias);

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
     * @return   Wp9manIndicators|Wp9manIndicators[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Wp9manIndicatorsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Wp9manIndicators A model object, or null if the key is not found
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
     * @return                 Wp9manIndicators A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `Name`, `Institution`, `Email`, `MPAName`, `MPACountry`, `MPALocation`, `MPACharacter`, `ScubaDiving`, `Snorkeling`, `Hiking`, `FFWatching`, `SeascapeWatching`, `Other1`, `Other2`, `Other3`, `Other4`, `ComName1`, `SciName1`, `DescEco1`, `TempPres1`, `ComName2`, `SciName2`, `DescEco2`, `TempPres2`, `ComName3`, `SciName3`, `DescEco3`, `TempPres3`, `ComName4`, `SciName4`, `DescEco4`, `TempPres4`, `EcoComName1`, `EcoDescEco1`, `RelDis1`, `EcoComName2`, `EcoDescEco2`, `RelDis2`, `EcoComName3`, `EcoDescEco3`, `RelDis3`, `EcoComName4`, `EcoDescEco4`, `RelDis4`, `Man_HistInfo_4`, `Man_HistInfo_3`, `Man_HistInfo_2`, `Man_HistInfo_1`, `Man_Ref_Info1`, `Man_CurInfo_1`, `Man_CurInfo_2`, `Man_CurInfo_3`, `Man_CurInfo_4`, `Man_HistInfo2_4`, `Man_HistInfo2_3`, `Man_HistInfo2_2`, `Man_HistInfo2_1`, `Man_Ref_Info2`, `Man_CurInfo2_1`, `Man_CurInfo2_2`, `Man_CurInfo2_3`, `Man_CurInfo2_4`, `Man_HistInfo3_4`, `Man_HistInfo3_3`, `Man_HistInfo3_2`, `Man_HistInfo3_1`, `Man_Ref_Info3`, `Man_CurInfo3_1`, `Man_CurInfo3_2`, `Man_CurInfo3_3`, `Man_CurInfo3_4`, `Man_HistInfo4_4`, `Man_HistInfo4_3`, `Man_HistInfo4_2`, `Man_HistInfo4_1`, `Man_Ref_Info4`, `Man_CurInfo4_1`, `Man_CurInfo4_2`, `Man_CurInfo4_3`, `Man_CurInfo4_4`, `newpassword`, `IndDate` FROM `wp9man_indicators` WHERE `id` = :p0';
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
            $obj = new Wp9manIndicators();
            $obj->hydrate($row);
            Wp9manIndicatorsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Wp9manIndicators|Wp9manIndicators[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Wp9manIndicators[]|mixed the list of results, formatted by the current formatter
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ID, $keys, Criteria::IN);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(Wp9manIndicatorsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(Wp9manIndicatorsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ID, $id, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::NAME, $name, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::INSTITUTION, $institution, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::EMAIL, $email, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MPANAME, $mpaname, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MPACOUNTRY, $mpacountry, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MPALOCATION, $mpalocation, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MPACHARACTER, $mpacharacter, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SCUBADIVING, $scubadiving, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SNORKELING, $snorkeling, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::HIKING, $hiking, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::FFWATCHING, $ffwatching, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SEASCAPEWATCHING, $seascapewatching, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::OTHER1, $other1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::OTHER2, $other2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::OTHER3, $other3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::OTHER4, $other4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::COMNAME1, $comname1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SCINAME1, $sciname1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::DESCECO1, $desceco1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::TEMPPRES1, $temppres1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::COMNAME2, $comname2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SCINAME2, $sciname2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::DESCECO2, $desceco2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::TEMPPRES2, $temppres2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::COMNAME3, $comname3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SCINAME3, $sciname3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::DESCECO3, $desceco3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::TEMPPRES3, $temppres3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::COMNAME4, $comname4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::SCINAME4, $sciname4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::DESCECO4, $desceco4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::TEMPPRES4, $temppres4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECOCOMNAME1, $ecocomname1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECODESCECO1, $ecodesceco1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::RELDIS1, $reldis1, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECOCOMNAME2, $ecocomname2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECODESCECO2, $ecodesceco2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::RELDIS2, $reldis2, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECOCOMNAME3, $ecocomname3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECODESCECO3, $ecodesceco3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::RELDIS3, $reldis3, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECOCOMNAME4, $ecocomname4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::ECODESCECO4, $ecodesceco4, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::RELDIS4, $reldis4, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo4('fooValue');   // WHERE Man_HistInfo_4 = 'fooValue'
     * $query->filterByManHistinfo4('%fooValue%'); // WHERE Man_HistInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo4($manHistinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo4)) {
                $manHistinfo4 = str_replace('*', '%', $manHistinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO_4, $manHistinfo4, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo3('fooValue');   // WHERE Man_HistInfo_3 = 'fooValue'
     * $query->filterByManHistinfo3('%fooValue%'); // WHERE Man_HistInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo3($manHistinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo3)) {
                $manHistinfo3 = str_replace('*', '%', $manHistinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO_3, $manHistinfo3, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo2('fooValue');   // WHERE Man_HistInfo_2 = 'fooValue'
     * $query->filterByManHistinfo2('%fooValue%'); // WHERE Man_HistInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo2($manHistinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo2)) {
                $manHistinfo2 = str_replace('*', '%', $manHistinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO_2, $manHistinfo2, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo1('fooValue');   // WHERE Man_HistInfo_1 = 'fooValue'
     * $query->filterByManHistinfo1('%fooValue%'); // WHERE Man_HistInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo1($manHistinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo1)) {
                $manHistinfo1 = str_replace('*', '%', $manHistinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO_1, $manHistinfo1, $comparison);
    }

    /**
     * Filter the query on the Man_Ref_Info1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManRefInfo1('fooValue');   // WHERE Man_Ref_Info1 = 'fooValue'
     * $query->filterByManRefInfo1('%fooValue%'); // WHERE Man_Ref_Info1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manRefInfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManRefInfo1($manRefInfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manRefInfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manRefInfo1)) {
                $manRefInfo1 = str_replace('*', '%', $manRefInfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_REF_INFO1, $manRefInfo1, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo1('fooValue');   // WHERE Man_CurInfo_1 = 'fooValue'
     * $query->filterByManCurinfo1('%fooValue%'); // WHERE Man_CurInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo1($manCurinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo1)) {
                $manCurinfo1 = str_replace('*', '%', $manCurinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO_1, $manCurinfo1, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo2('fooValue');   // WHERE Man_CurInfo_2 = 'fooValue'
     * $query->filterByManCurinfo2('%fooValue%'); // WHERE Man_CurInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo2($manCurinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo2)) {
                $manCurinfo2 = str_replace('*', '%', $manCurinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO_2, $manCurinfo2, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo3('fooValue');   // WHERE Man_CurInfo_3 = 'fooValue'
     * $query->filterByManCurinfo3('%fooValue%'); // WHERE Man_CurInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo3($manCurinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo3)) {
                $manCurinfo3 = str_replace('*', '%', $manCurinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO_3, $manCurinfo3, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo4('fooValue');   // WHERE Man_CurInfo_4 = 'fooValue'
     * $query->filterByManCurinfo4('%fooValue%'); // WHERE Man_CurInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo4($manCurinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo4)) {
                $manCurinfo4 = str_replace('*', '%', $manCurinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO_4, $manCurinfo4, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo24('fooValue');   // WHERE Man_HistInfo2_4 = 'fooValue'
     * $query->filterByManHistinfo24('%fooValue%'); // WHERE Man_HistInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo24($manHistinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo24)) {
                $manHistinfo24 = str_replace('*', '%', $manHistinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO2_4, $manHistinfo24, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo23('fooValue');   // WHERE Man_HistInfo2_3 = 'fooValue'
     * $query->filterByManHistinfo23('%fooValue%'); // WHERE Man_HistInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo23($manHistinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo23)) {
                $manHistinfo23 = str_replace('*', '%', $manHistinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO2_3, $manHistinfo23, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo22('fooValue');   // WHERE Man_HistInfo2_2 = 'fooValue'
     * $query->filterByManHistinfo22('%fooValue%'); // WHERE Man_HistInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo22($manHistinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo22)) {
                $manHistinfo22 = str_replace('*', '%', $manHistinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO2_2, $manHistinfo22, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo21('fooValue');   // WHERE Man_HistInfo2_1 = 'fooValue'
     * $query->filterByManHistinfo21('%fooValue%'); // WHERE Man_HistInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo21($manHistinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo21)) {
                $manHistinfo21 = str_replace('*', '%', $manHistinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO2_1, $manHistinfo21, $comparison);
    }

    /**
     * Filter the query on the Man_Ref_Info2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManRefInfo2('fooValue');   // WHERE Man_Ref_Info2 = 'fooValue'
     * $query->filterByManRefInfo2('%fooValue%'); // WHERE Man_Ref_Info2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manRefInfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManRefInfo2($manRefInfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manRefInfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manRefInfo2)) {
                $manRefInfo2 = str_replace('*', '%', $manRefInfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_REF_INFO2, $manRefInfo2, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo21('fooValue');   // WHERE Man_CurInfo2_1 = 'fooValue'
     * $query->filterByManCurinfo21('%fooValue%'); // WHERE Man_CurInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo21($manCurinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo21)) {
                $manCurinfo21 = str_replace('*', '%', $manCurinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO2_1, $manCurinfo21, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo22('fooValue');   // WHERE Man_CurInfo2_2 = 'fooValue'
     * $query->filterByManCurinfo22('%fooValue%'); // WHERE Man_CurInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo22($manCurinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo22)) {
                $manCurinfo22 = str_replace('*', '%', $manCurinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO2_2, $manCurinfo22, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo23('fooValue');   // WHERE Man_CurInfo2_3 = 'fooValue'
     * $query->filterByManCurinfo23('%fooValue%'); // WHERE Man_CurInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo23($manCurinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo23)) {
                $manCurinfo23 = str_replace('*', '%', $manCurinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO2_3, $manCurinfo23, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo24('fooValue');   // WHERE Man_CurInfo2_4 = 'fooValue'
     * $query->filterByManCurinfo24('%fooValue%'); // WHERE Man_CurInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo24($manCurinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo24)) {
                $manCurinfo24 = str_replace('*', '%', $manCurinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO2_4, $manCurinfo24, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo3_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo34('fooValue');   // WHERE Man_HistInfo3_4 = 'fooValue'
     * $query->filterByManHistinfo34('%fooValue%'); // WHERE Man_HistInfo3_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo34 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo34($manHistinfo34 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo34)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo34)) {
                $manHistinfo34 = str_replace('*', '%', $manHistinfo34);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO3_4, $manHistinfo34, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo3_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo33('fooValue');   // WHERE Man_HistInfo3_3 = 'fooValue'
     * $query->filterByManHistinfo33('%fooValue%'); // WHERE Man_HistInfo3_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo33 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo33($manHistinfo33 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo33)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo33)) {
                $manHistinfo33 = str_replace('*', '%', $manHistinfo33);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO3_3, $manHistinfo33, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo3_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo32('fooValue');   // WHERE Man_HistInfo3_2 = 'fooValue'
     * $query->filterByManHistinfo32('%fooValue%'); // WHERE Man_HistInfo3_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo32 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo32($manHistinfo32 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo32)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo32)) {
                $manHistinfo32 = str_replace('*', '%', $manHistinfo32);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO3_2, $manHistinfo32, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo3_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo31('fooValue');   // WHERE Man_HistInfo3_1 = 'fooValue'
     * $query->filterByManHistinfo31('%fooValue%'); // WHERE Man_HistInfo3_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo31 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo31($manHistinfo31 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo31)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo31)) {
                $manHistinfo31 = str_replace('*', '%', $manHistinfo31);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO3_1, $manHistinfo31, $comparison);
    }

    /**
     * Filter the query on the Man_Ref_Info3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManRefInfo3('fooValue');   // WHERE Man_Ref_Info3 = 'fooValue'
     * $query->filterByManRefInfo3('%fooValue%'); // WHERE Man_Ref_Info3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manRefInfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManRefInfo3($manRefInfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manRefInfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manRefInfo3)) {
                $manRefInfo3 = str_replace('*', '%', $manRefInfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_REF_INFO3, $manRefInfo3, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo3_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo31('fooValue');   // WHERE Man_CurInfo3_1 = 'fooValue'
     * $query->filterByManCurinfo31('%fooValue%'); // WHERE Man_CurInfo3_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo31 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo31($manCurinfo31 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo31)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo31)) {
                $manCurinfo31 = str_replace('*', '%', $manCurinfo31);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO3_1, $manCurinfo31, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo3_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo32('fooValue');   // WHERE Man_CurInfo3_2 = 'fooValue'
     * $query->filterByManCurinfo32('%fooValue%'); // WHERE Man_CurInfo3_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo32 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo32($manCurinfo32 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo32)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo32)) {
                $manCurinfo32 = str_replace('*', '%', $manCurinfo32);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO3_2, $manCurinfo32, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo3_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo33('fooValue');   // WHERE Man_CurInfo3_3 = 'fooValue'
     * $query->filterByManCurinfo33('%fooValue%'); // WHERE Man_CurInfo3_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo33 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo33($manCurinfo33 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo33)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo33)) {
                $manCurinfo33 = str_replace('*', '%', $manCurinfo33);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO3_3, $manCurinfo33, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo3_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo34('fooValue');   // WHERE Man_CurInfo3_4 = 'fooValue'
     * $query->filterByManCurinfo34('%fooValue%'); // WHERE Man_CurInfo3_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo34 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo34($manCurinfo34 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo34)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo34)) {
                $manCurinfo34 = str_replace('*', '%', $manCurinfo34);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO3_4, $manCurinfo34, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo4_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo44('fooValue');   // WHERE Man_HistInfo4_4 = 'fooValue'
     * $query->filterByManHistinfo44('%fooValue%'); // WHERE Man_HistInfo4_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo44 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo44($manHistinfo44 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo44)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo44)) {
                $manHistinfo44 = str_replace('*', '%', $manHistinfo44);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO4_4, $manHistinfo44, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo4_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo43('fooValue');   // WHERE Man_HistInfo4_3 = 'fooValue'
     * $query->filterByManHistinfo43('%fooValue%'); // WHERE Man_HistInfo4_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo43 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo43($manHistinfo43 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo43)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo43)) {
                $manHistinfo43 = str_replace('*', '%', $manHistinfo43);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO4_3, $manHistinfo43, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo4_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo42('fooValue');   // WHERE Man_HistInfo4_2 = 'fooValue'
     * $query->filterByManHistinfo42('%fooValue%'); // WHERE Man_HistInfo4_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo42 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo42($manHistinfo42 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo42)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo42)) {
                $manHistinfo42 = str_replace('*', '%', $manHistinfo42);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO4_2, $manHistinfo42, $comparison);
    }

    /**
     * Filter the query on the Man_HistInfo4_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManHistinfo41('fooValue');   // WHERE Man_HistInfo4_1 = 'fooValue'
     * $query->filterByManHistinfo41('%fooValue%'); // WHERE Man_HistInfo4_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manHistinfo41 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManHistinfo41($manHistinfo41 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manHistinfo41)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manHistinfo41)) {
                $manHistinfo41 = str_replace('*', '%', $manHistinfo41);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_HISTINFO4_1, $manHistinfo41, $comparison);
    }

    /**
     * Filter the query on the Man_Ref_Info4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManRefInfo4('fooValue');   // WHERE Man_Ref_Info4 = 'fooValue'
     * $query->filterByManRefInfo4('%fooValue%'); // WHERE Man_Ref_Info4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manRefInfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManRefInfo4($manRefInfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manRefInfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manRefInfo4)) {
                $manRefInfo4 = str_replace('*', '%', $manRefInfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_REF_INFO4, $manRefInfo4, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo4_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo41('fooValue');   // WHERE Man_CurInfo4_1 = 'fooValue'
     * $query->filterByManCurinfo41('%fooValue%'); // WHERE Man_CurInfo4_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo41 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo41($manCurinfo41 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo41)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo41)) {
                $manCurinfo41 = str_replace('*', '%', $manCurinfo41);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO4_1, $manCurinfo41, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo4_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo42('fooValue');   // WHERE Man_CurInfo4_2 = 'fooValue'
     * $query->filterByManCurinfo42('%fooValue%'); // WHERE Man_CurInfo4_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo42 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo42($manCurinfo42 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo42)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo42)) {
                $manCurinfo42 = str_replace('*', '%', $manCurinfo42);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO4_2, $manCurinfo42, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo4_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo43('fooValue');   // WHERE Man_CurInfo4_3 = 'fooValue'
     * $query->filterByManCurinfo43('%fooValue%'); // WHERE Man_CurInfo4_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo43 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo43($manCurinfo43 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo43)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo43)) {
                $manCurinfo43 = str_replace('*', '%', $manCurinfo43);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO4_3, $manCurinfo43, $comparison);
    }

    /**
     * Filter the query on the Man_CurInfo4_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByManCurinfo44('fooValue');   // WHERE Man_CurInfo4_4 = 'fooValue'
     * $query->filterByManCurinfo44('%fooValue%'); // WHERE Man_CurInfo4_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manCurinfo44 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByManCurinfo44($manCurinfo44 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manCurinfo44)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manCurinfo44)) {
                $manCurinfo44 = str_replace('*', '%', $manCurinfo44);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::MAN_CURINFO4_4, $manCurinfo44, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9manIndicatorsPeer::NEWPASSWORD, $newpassword, $comparison);
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
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function filterByInddate($inddate = null, $comparison = null)
    {
        if (is_array($inddate)) {
            $useMinMax = false;
            if (isset($inddate['min'])) {
                $this->addUsingAlias(Wp9manIndicatorsPeer::INDDATE, $inddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inddate['max'])) {
                $this->addUsingAlias(Wp9manIndicatorsPeer::INDDATE, $inddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9manIndicatorsPeer::INDDATE, $inddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Wp9manIndicators $wp9manIndicators Object to remove from the list of results
     *
     * @return Wp9manIndicatorsQuery The current query, for fluid interface
     */
    public function prune($wp9manIndicators = null)
    {
        if ($wp9manIndicators) {
            $this->addUsingAlias(Wp9manIndicatorsPeer::ID, $wp9manIndicators->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
