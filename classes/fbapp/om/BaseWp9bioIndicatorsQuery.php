<?php


/**
 * Base class that represents a query for the 'wp9bio_indicators' table.
 *
 *
 *
 * @method Wp9bioIndicatorsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method Wp9bioIndicatorsQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method Wp9bioIndicatorsQuery orderByInstitution($order = Criteria::ASC) Order by the Institution column
 * @method Wp9bioIndicatorsQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method Wp9bioIndicatorsQuery orderByMpaname($order = Criteria::ASC) Order by the MPAName column
 * @method Wp9bioIndicatorsQuery orderByMpacountry($order = Criteria::ASC) Order by the MPACountry column
 * @method Wp9bioIndicatorsQuery orderByMpalocation($order = Criteria::ASC) Order by the MPALocation column
 * @method Wp9bioIndicatorsQuery orderByMpacharacter($order = Criteria::ASC) Order by the MPACharacter column
 * @method Wp9bioIndicatorsQuery orderByScubadiving($order = Criteria::ASC) Order by the ScubaDiving column
 * @method Wp9bioIndicatorsQuery orderBySnorkeling($order = Criteria::ASC) Order by the Snorkeling column
 * @method Wp9bioIndicatorsQuery orderByHiking($order = Criteria::ASC) Order by the Hiking column
 * @method Wp9bioIndicatorsQuery orderByFfwatching($order = Criteria::ASC) Order by the FFWatching column
 * @method Wp9bioIndicatorsQuery orderBySeascapewatching($order = Criteria::ASC) Order by the SeascapeWatching column
 * @method Wp9bioIndicatorsQuery orderByOther1($order = Criteria::ASC) Order by the Other1 column
 * @method Wp9bioIndicatorsQuery orderByOther2($order = Criteria::ASC) Order by the Other2 column
 * @method Wp9bioIndicatorsQuery orderByOther3($order = Criteria::ASC) Order by the Other3 column
 * @method Wp9bioIndicatorsQuery orderByOther4($order = Criteria::ASC) Order by the Other4 column
 * @method Wp9bioIndicatorsQuery orderByComname1($order = Criteria::ASC) Order by the ComName1 column
 * @method Wp9bioIndicatorsQuery orderBySciname1($order = Criteria::ASC) Order by the SciName1 column
 * @method Wp9bioIndicatorsQuery orderByDesceco1($order = Criteria::ASC) Order by the DescEco1 column
 * @method Wp9bioIndicatorsQuery orderByTemppres1($order = Criteria::ASC) Order by the TempPres1 column
 * @method Wp9bioIndicatorsQuery orderByComname2($order = Criteria::ASC) Order by the ComName2 column
 * @method Wp9bioIndicatorsQuery orderBySciname2($order = Criteria::ASC) Order by the SciName2 column
 * @method Wp9bioIndicatorsQuery orderByDesceco2($order = Criteria::ASC) Order by the DescEco2 column
 * @method Wp9bioIndicatorsQuery orderByTemppres2($order = Criteria::ASC) Order by the TempPres2 column
 * @method Wp9bioIndicatorsQuery orderByComname3($order = Criteria::ASC) Order by the ComName3 column
 * @method Wp9bioIndicatorsQuery orderBySciname3($order = Criteria::ASC) Order by the SciName3 column
 * @method Wp9bioIndicatorsQuery orderByDesceco3($order = Criteria::ASC) Order by the DescEco3 column
 * @method Wp9bioIndicatorsQuery orderByTemppres3($order = Criteria::ASC) Order by the TempPres3 column
 * @method Wp9bioIndicatorsQuery orderByComname4($order = Criteria::ASC) Order by the ComName4 column
 * @method Wp9bioIndicatorsQuery orderBySciname4($order = Criteria::ASC) Order by the SciName4 column
 * @method Wp9bioIndicatorsQuery orderByDesceco4($order = Criteria::ASC) Order by the DescEco4 column
 * @method Wp9bioIndicatorsQuery orderByTemppres4($order = Criteria::ASC) Order by the TempPres4 column
 * @method Wp9bioIndicatorsQuery orderByEcocomname1($order = Criteria::ASC) Order by the EcoComName1 column
 * @method Wp9bioIndicatorsQuery orderByEcodesceco1($order = Criteria::ASC) Order by the EcoDescEco1 column
 * @method Wp9bioIndicatorsQuery orderByReldis1($order = Criteria::ASC) Order by the RelDis1 column
 * @method Wp9bioIndicatorsQuery orderByEcocomname2($order = Criteria::ASC) Order by the EcoComName2 column
 * @method Wp9bioIndicatorsQuery orderByEcodesceco2($order = Criteria::ASC) Order by the EcoDescEco2 column
 * @method Wp9bioIndicatorsQuery orderByReldis2($order = Criteria::ASC) Order by the RelDis2 column
 * @method Wp9bioIndicatorsQuery orderByEcocomname3($order = Criteria::ASC) Order by the EcoComName3 column
 * @method Wp9bioIndicatorsQuery orderByEcodesceco3($order = Criteria::ASC) Order by the EcoDescEco3 column
 * @method Wp9bioIndicatorsQuery orderByReldis3($order = Criteria::ASC) Order by the RelDis3 column
 * @method Wp9bioIndicatorsQuery orderByEcocomname4($order = Criteria::ASC) Order by the EcoComName4 column
 * @method Wp9bioIndicatorsQuery orderByEcodesceco4($order = Criteria::ASC) Order by the EcoDescEco4 column
 * @method Wp9bioIndicatorsQuery orderByReldis4($order = Criteria::ASC) Order by the RelDis4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo4($order = Criteria::ASC) Order by the Bio_HistInfo_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo3($order = Criteria::ASC) Order by the Bio_HistInfo_3 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo2($order = Criteria::ASC) Order by the Bio_HistInfo_2 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo1($order = Criteria::ASC) Order by the Bio_HistInfo_1 column
 * @method Wp9bioIndicatorsQuery orderByBioRefInfo1($order = Criteria::ASC) Order by the Bio_Ref_Info1 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo1($order = Criteria::ASC) Order by the Bio_CurInfo_1 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo2($order = Criteria::ASC) Order by the Bio_CurInfo_2 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo3($order = Criteria::ASC) Order by the Bio_CurInfo_3 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo4($order = Criteria::ASC) Order by the Bio_CurInfo_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo24($order = Criteria::ASC) Order by the Bio_HistInfo2_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo23($order = Criteria::ASC) Order by the Bio_HistInfo2_3 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo22($order = Criteria::ASC) Order by the Bio_HistInfo2_2 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo21($order = Criteria::ASC) Order by the Bio_HistInfo2_1 column
 * @method Wp9bioIndicatorsQuery orderByBioRefInfo2($order = Criteria::ASC) Order by the Bio_Ref_Info2 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo21($order = Criteria::ASC) Order by the Bio_CurInfo2_1 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo22($order = Criteria::ASC) Order by the Bio_CurInfo2_2 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo23($order = Criteria::ASC) Order by the Bio_CurInfo2_3 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo24($order = Criteria::ASC) Order by the Bio_CurInfo2_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo34($order = Criteria::ASC) Order by the Bio_HistInfo3_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo33($order = Criteria::ASC) Order by the Bio_HistInfo3_3 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo32($order = Criteria::ASC) Order by the Bio_HistInfo3_2 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo31($order = Criteria::ASC) Order by the Bio_HistInfo3_1 column
 * @method Wp9bioIndicatorsQuery orderByBioRefInfo3($order = Criteria::ASC) Order by the Bio_Ref_Info3 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo31($order = Criteria::ASC) Order by the Bio_CurInfo3_1 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo32($order = Criteria::ASC) Order by the Bio_CurInfo3_2 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo33($order = Criteria::ASC) Order by the Bio_CurInfo3_3 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo34($order = Criteria::ASC) Order by the Bio_CurInfo3_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo44($order = Criteria::ASC) Order by the Bio_HistInfo4_4 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo43($order = Criteria::ASC) Order by the Bio_HistInfo4_3 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo42($order = Criteria::ASC) Order by the Bio_HistInfo4_2 column
 * @method Wp9bioIndicatorsQuery orderByBioHistinfo41($order = Criteria::ASC) Order by the Bio_HistInfo4_1 column
 * @method Wp9bioIndicatorsQuery orderByBioRefInfo4($order = Criteria::ASC) Order by the Bio_Ref_Info4 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo41($order = Criteria::ASC) Order by the Bio_CurInfo4_1 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo42($order = Criteria::ASC) Order by the Bio_CurInfo4_2 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo43($order = Criteria::ASC) Order by the Bio_CurInfo4_3 column
 * @method Wp9bioIndicatorsQuery orderByBioCurinfo44($order = Criteria::ASC) Order by the Bio_CurInfo4_4 column
 * @method Wp9bioIndicatorsQuery orderByNewpassword($order = Criteria::ASC) Order by the newpassword column
 * @method Wp9bioIndicatorsQuery orderByInddate($order = Criteria::ASC) Order by the IndDate column
 *
 * @method Wp9bioIndicatorsQuery groupById() Group by the id column
 * @method Wp9bioIndicatorsQuery groupByName() Group by the Name column
 * @method Wp9bioIndicatorsQuery groupByInstitution() Group by the Institution column
 * @method Wp9bioIndicatorsQuery groupByEmail() Group by the Email column
 * @method Wp9bioIndicatorsQuery groupByMpaname() Group by the MPAName column
 * @method Wp9bioIndicatorsQuery groupByMpacountry() Group by the MPACountry column
 * @method Wp9bioIndicatorsQuery groupByMpalocation() Group by the MPALocation column
 * @method Wp9bioIndicatorsQuery groupByMpacharacter() Group by the MPACharacter column
 * @method Wp9bioIndicatorsQuery groupByScubadiving() Group by the ScubaDiving column
 * @method Wp9bioIndicatorsQuery groupBySnorkeling() Group by the Snorkeling column
 * @method Wp9bioIndicatorsQuery groupByHiking() Group by the Hiking column
 * @method Wp9bioIndicatorsQuery groupByFfwatching() Group by the FFWatching column
 * @method Wp9bioIndicatorsQuery groupBySeascapewatching() Group by the SeascapeWatching column
 * @method Wp9bioIndicatorsQuery groupByOther1() Group by the Other1 column
 * @method Wp9bioIndicatorsQuery groupByOther2() Group by the Other2 column
 * @method Wp9bioIndicatorsQuery groupByOther3() Group by the Other3 column
 * @method Wp9bioIndicatorsQuery groupByOther4() Group by the Other4 column
 * @method Wp9bioIndicatorsQuery groupByComname1() Group by the ComName1 column
 * @method Wp9bioIndicatorsQuery groupBySciname1() Group by the SciName1 column
 * @method Wp9bioIndicatorsQuery groupByDesceco1() Group by the DescEco1 column
 * @method Wp9bioIndicatorsQuery groupByTemppres1() Group by the TempPres1 column
 * @method Wp9bioIndicatorsQuery groupByComname2() Group by the ComName2 column
 * @method Wp9bioIndicatorsQuery groupBySciname2() Group by the SciName2 column
 * @method Wp9bioIndicatorsQuery groupByDesceco2() Group by the DescEco2 column
 * @method Wp9bioIndicatorsQuery groupByTemppres2() Group by the TempPres2 column
 * @method Wp9bioIndicatorsQuery groupByComname3() Group by the ComName3 column
 * @method Wp9bioIndicatorsQuery groupBySciname3() Group by the SciName3 column
 * @method Wp9bioIndicatorsQuery groupByDesceco3() Group by the DescEco3 column
 * @method Wp9bioIndicatorsQuery groupByTemppres3() Group by the TempPres3 column
 * @method Wp9bioIndicatorsQuery groupByComname4() Group by the ComName4 column
 * @method Wp9bioIndicatorsQuery groupBySciname4() Group by the SciName4 column
 * @method Wp9bioIndicatorsQuery groupByDesceco4() Group by the DescEco4 column
 * @method Wp9bioIndicatorsQuery groupByTemppres4() Group by the TempPres4 column
 * @method Wp9bioIndicatorsQuery groupByEcocomname1() Group by the EcoComName1 column
 * @method Wp9bioIndicatorsQuery groupByEcodesceco1() Group by the EcoDescEco1 column
 * @method Wp9bioIndicatorsQuery groupByReldis1() Group by the RelDis1 column
 * @method Wp9bioIndicatorsQuery groupByEcocomname2() Group by the EcoComName2 column
 * @method Wp9bioIndicatorsQuery groupByEcodesceco2() Group by the EcoDescEco2 column
 * @method Wp9bioIndicatorsQuery groupByReldis2() Group by the RelDis2 column
 * @method Wp9bioIndicatorsQuery groupByEcocomname3() Group by the EcoComName3 column
 * @method Wp9bioIndicatorsQuery groupByEcodesceco3() Group by the EcoDescEco3 column
 * @method Wp9bioIndicatorsQuery groupByReldis3() Group by the RelDis3 column
 * @method Wp9bioIndicatorsQuery groupByEcocomname4() Group by the EcoComName4 column
 * @method Wp9bioIndicatorsQuery groupByEcodesceco4() Group by the EcoDescEco4 column
 * @method Wp9bioIndicatorsQuery groupByReldis4() Group by the RelDis4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo4() Group by the Bio_HistInfo_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo3() Group by the Bio_HistInfo_3 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo2() Group by the Bio_HistInfo_2 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo1() Group by the Bio_HistInfo_1 column
 * @method Wp9bioIndicatorsQuery groupByBioRefInfo1() Group by the Bio_Ref_Info1 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo1() Group by the Bio_CurInfo_1 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo2() Group by the Bio_CurInfo_2 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo3() Group by the Bio_CurInfo_3 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo4() Group by the Bio_CurInfo_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo24() Group by the Bio_HistInfo2_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo23() Group by the Bio_HistInfo2_3 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo22() Group by the Bio_HistInfo2_2 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo21() Group by the Bio_HistInfo2_1 column
 * @method Wp9bioIndicatorsQuery groupByBioRefInfo2() Group by the Bio_Ref_Info2 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo21() Group by the Bio_CurInfo2_1 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo22() Group by the Bio_CurInfo2_2 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo23() Group by the Bio_CurInfo2_3 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo24() Group by the Bio_CurInfo2_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo34() Group by the Bio_HistInfo3_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo33() Group by the Bio_HistInfo3_3 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo32() Group by the Bio_HistInfo3_2 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo31() Group by the Bio_HistInfo3_1 column
 * @method Wp9bioIndicatorsQuery groupByBioRefInfo3() Group by the Bio_Ref_Info3 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo31() Group by the Bio_CurInfo3_1 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo32() Group by the Bio_CurInfo3_2 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo33() Group by the Bio_CurInfo3_3 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo34() Group by the Bio_CurInfo3_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo44() Group by the Bio_HistInfo4_4 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo43() Group by the Bio_HistInfo4_3 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo42() Group by the Bio_HistInfo4_2 column
 * @method Wp9bioIndicatorsQuery groupByBioHistinfo41() Group by the Bio_HistInfo4_1 column
 * @method Wp9bioIndicatorsQuery groupByBioRefInfo4() Group by the Bio_Ref_Info4 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo41() Group by the Bio_CurInfo4_1 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo42() Group by the Bio_CurInfo4_2 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo43() Group by the Bio_CurInfo4_3 column
 * @method Wp9bioIndicatorsQuery groupByBioCurinfo44() Group by the Bio_CurInfo4_4 column
 * @method Wp9bioIndicatorsQuery groupByNewpassword() Group by the newpassword column
 * @method Wp9bioIndicatorsQuery groupByInddate() Group by the IndDate column
 *
 * @method Wp9bioIndicatorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Wp9bioIndicatorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Wp9bioIndicatorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Wp9bioIndicators findOne(PropelPDO $con = null) Return the first Wp9bioIndicators matching the query
 * @method Wp9bioIndicators findOneOrCreate(PropelPDO $con = null) Return the first Wp9bioIndicators matching the query, or a new Wp9bioIndicators object populated from the query conditions when no match is found
 *
 * @method Wp9bioIndicators findOneByName(string $Name) Return the first Wp9bioIndicators filtered by the Name column
 * @method Wp9bioIndicators findOneByInstitution(string $Institution) Return the first Wp9bioIndicators filtered by the Institution column
 * @method Wp9bioIndicators findOneByEmail(string $Email) Return the first Wp9bioIndicators filtered by the Email column
 * @method Wp9bioIndicators findOneByMpaname(string $MPAName) Return the first Wp9bioIndicators filtered by the MPAName column
 * @method Wp9bioIndicators findOneByMpacountry(string $MPACountry) Return the first Wp9bioIndicators filtered by the MPACountry column
 * @method Wp9bioIndicators findOneByMpalocation(string $MPALocation) Return the first Wp9bioIndicators filtered by the MPALocation column
 * @method Wp9bioIndicators findOneByMpacharacter(string $MPACharacter) Return the first Wp9bioIndicators filtered by the MPACharacter column
 * @method Wp9bioIndicators findOneByScubadiving(string $ScubaDiving) Return the first Wp9bioIndicators filtered by the ScubaDiving column
 * @method Wp9bioIndicators findOneBySnorkeling(string $Snorkeling) Return the first Wp9bioIndicators filtered by the Snorkeling column
 * @method Wp9bioIndicators findOneByHiking(string $Hiking) Return the first Wp9bioIndicators filtered by the Hiking column
 * @method Wp9bioIndicators findOneByFfwatching(string $FFWatching) Return the first Wp9bioIndicators filtered by the FFWatching column
 * @method Wp9bioIndicators findOneBySeascapewatching(string $SeascapeWatching) Return the first Wp9bioIndicators filtered by the SeascapeWatching column
 * @method Wp9bioIndicators findOneByOther1(string $Other1) Return the first Wp9bioIndicators filtered by the Other1 column
 * @method Wp9bioIndicators findOneByOther2(string $Other2) Return the first Wp9bioIndicators filtered by the Other2 column
 * @method Wp9bioIndicators findOneByOther3(string $Other3) Return the first Wp9bioIndicators filtered by the Other3 column
 * @method Wp9bioIndicators findOneByOther4(string $Other4) Return the first Wp9bioIndicators filtered by the Other4 column
 * @method Wp9bioIndicators findOneByComname1(string $ComName1) Return the first Wp9bioIndicators filtered by the ComName1 column
 * @method Wp9bioIndicators findOneBySciname1(string $SciName1) Return the first Wp9bioIndicators filtered by the SciName1 column
 * @method Wp9bioIndicators findOneByDesceco1(string $DescEco1) Return the first Wp9bioIndicators filtered by the DescEco1 column
 * @method Wp9bioIndicators findOneByTemppres1(string $TempPres1) Return the first Wp9bioIndicators filtered by the TempPres1 column
 * @method Wp9bioIndicators findOneByComname2(string $ComName2) Return the first Wp9bioIndicators filtered by the ComName2 column
 * @method Wp9bioIndicators findOneBySciname2(string $SciName2) Return the first Wp9bioIndicators filtered by the SciName2 column
 * @method Wp9bioIndicators findOneByDesceco2(string $DescEco2) Return the first Wp9bioIndicators filtered by the DescEco2 column
 * @method Wp9bioIndicators findOneByTemppres2(string $TempPres2) Return the first Wp9bioIndicators filtered by the TempPres2 column
 * @method Wp9bioIndicators findOneByComname3(string $ComName3) Return the first Wp9bioIndicators filtered by the ComName3 column
 * @method Wp9bioIndicators findOneBySciname3(string $SciName3) Return the first Wp9bioIndicators filtered by the SciName3 column
 * @method Wp9bioIndicators findOneByDesceco3(string $DescEco3) Return the first Wp9bioIndicators filtered by the DescEco3 column
 * @method Wp9bioIndicators findOneByTemppres3(string $TempPres3) Return the first Wp9bioIndicators filtered by the TempPres3 column
 * @method Wp9bioIndicators findOneByComname4(string $ComName4) Return the first Wp9bioIndicators filtered by the ComName4 column
 * @method Wp9bioIndicators findOneBySciname4(string $SciName4) Return the first Wp9bioIndicators filtered by the SciName4 column
 * @method Wp9bioIndicators findOneByDesceco4(string $DescEco4) Return the first Wp9bioIndicators filtered by the DescEco4 column
 * @method Wp9bioIndicators findOneByTemppres4(string $TempPres4) Return the first Wp9bioIndicators filtered by the TempPres4 column
 * @method Wp9bioIndicators findOneByEcocomname1(string $EcoComName1) Return the first Wp9bioIndicators filtered by the EcoComName1 column
 * @method Wp9bioIndicators findOneByEcodesceco1(string $EcoDescEco1) Return the first Wp9bioIndicators filtered by the EcoDescEco1 column
 * @method Wp9bioIndicators findOneByReldis1(string $RelDis1) Return the first Wp9bioIndicators filtered by the RelDis1 column
 * @method Wp9bioIndicators findOneByEcocomname2(string $EcoComName2) Return the first Wp9bioIndicators filtered by the EcoComName2 column
 * @method Wp9bioIndicators findOneByEcodesceco2(string $EcoDescEco2) Return the first Wp9bioIndicators filtered by the EcoDescEco2 column
 * @method Wp9bioIndicators findOneByReldis2(string $RelDis2) Return the first Wp9bioIndicators filtered by the RelDis2 column
 * @method Wp9bioIndicators findOneByEcocomname3(string $EcoComName3) Return the first Wp9bioIndicators filtered by the EcoComName3 column
 * @method Wp9bioIndicators findOneByEcodesceco3(string $EcoDescEco3) Return the first Wp9bioIndicators filtered by the EcoDescEco3 column
 * @method Wp9bioIndicators findOneByReldis3(string $RelDis3) Return the first Wp9bioIndicators filtered by the RelDis3 column
 * @method Wp9bioIndicators findOneByEcocomname4(string $EcoComName4) Return the first Wp9bioIndicators filtered by the EcoComName4 column
 * @method Wp9bioIndicators findOneByEcodesceco4(string $EcoDescEco4) Return the first Wp9bioIndicators filtered by the EcoDescEco4 column
 * @method Wp9bioIndicators findOneByReldis4(string $RelDis4) Return the first Wp9bioIndicators filtered by the RelDis4 column
 * @method Wp9bioIndicators findOneByBioHistinfo4(string $Bio_HistInfo_4) Return the first Wp9bioIndicators filtered by the Bio_HistInfo_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo3(string $Bio_HistInfo_3) Return the first Wp9bioIndicators filtered by the Bio_HistInfo_3 column
 * @method Wp9bioIndicators findOneByBioHistinfo2(string $Bio_HistInfo_2) Return the first Wp9bioIndicators filtered by the Bio_HistInfo_2 column
 * @method Wp9bioIndicators findOneByBioHistinfo1(string $Bio_HistInfo_1) Return the first Wp9bioIndicators filtered by the Bio_HistInfo_1 column
 * @method Wp9bioIndicators findOneByBioRefInfo1(string $Bio_Ref_Info1) Return the first Wp9bioIndicators filtered by the Bio_Ref_Info1 column
 * @method Wp9bioIndicators findOneByBioCurinfo1(string $Bio_CurInfo_1) Return the first Wp9bioIndicators filtered by the Bio_CurInfo_1 column
 * @method Wp9bioIndicators findOneByBioCurinfo2(string $Bio_CurInfo_2) Return the first Wp9bioIndicators filtered by the Bio_CurInfo_2 column
 * @method Wp9bioIndicators findOneByBioCurinfo3(string $Bio_CurInfo_3) Return the first Wp9bioIndicators filtered by the Bio_CurInfo_3 column
 * @method Wp9bioIndicators findOneByBioCurinfo4(string $Bio_CurInfo_4) Return the first Wp9bioIndicators filtered by the Bio_CurInfo_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo24(string $Bio_HistInfo2_4) Return the first Wp9bioIndicators filtered by the Bio_HistInfo2_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo23(string $Bio_HistInfo2_3) Return the first Wp9bioIndicators filtered by the Bio_HistInfo2_3 column
 * @method Wp9bioIndicators findOneByBioHistinfo22(string $Bio_HistInfo2_2) Return the first Wp9bioIndicators filtered by the Bio_HistInfo2_2 column
 * @method Wp9bioIndicators findOneByBioHistinfo21(string $Bio_HistInfo2_1) Return the first Wp9bioIndicators filtered by the Bio_HistInfo2_1 column
 * @method Wp9bioIndicators findOneByBioRefInfo2(string $Bio_Ref_Info2) Return the first Wp9bioIndicators filtered by the Bio_Ref_Info2 column
 * @method Wp9bioIndicators findOneByBioCurinfo21(string $Bio_CurInfo2_1) Return the first Wp9bioIndicators filtered by the Bio_CurInfo2_1 column
 * @method Wp9bioIndicators findOneByBioCurinfo22(string $Bio_CurInfo2_2) Return the first Wp9bioIndicators filtered by the Bio_CurInfo2_2 column
 * @method Wp9bioIndicators findOneByBioCurinfo23(string $Bio_CurInfo2_3) Return the first Wp9bioIndicators filtered by the Bio_CurInfo2_3 column
 * @method Wp9bioIndicators findOneByBioCurinfo24(string $Bio_CurInfo2_4) Return the first Wp9bioIndicators filtered by the Bio_CurInfo2_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo34(string $Bio_HistInfo3_4) Return the first Wp9bioIndicators filtered by the Bio_HistInfo3_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo33(string $Bio_HistInfo3_3) Return the first Wp9bioIndicators filtered by the Bio_HistInfo3_3 column
 * @method Wp9bioIndicators findOneByBioHistinfo32(string $Bio_HistInfo3_2) Return the first Wp9bioIndicators filtered by the Bio_HistInfo3_2 column
 * @method Wp9bioIndicators findOneByBioHistinfo31(string $Bio_HistInfo3_1) Return the first Wp9bioIndicators filtered by the Bio_HistInfo3_1 column
 * @method Wp9bioIndicators findOneByBioRefInfo3(string $Bio_Ref_Info3) Return the first Wp9bioIndicators filtered by the Bio_Ref_Info3 column
 * @method Wp9bioIndicators findOneByBioCurinfo31(string $Bio_CurInfo3_1) Return the first Wp9bioIndicators filtered by the Bio_CurInfo3_1 column
 * @method Wp9bioIndicators findOneByBioCurinfo32(string $Bio_CurInfo3_2) Return the first Wp9bioIndicators filtered by the Bio_CurInfo3_2 column
 * @method Wp9bioIndicators findOneByBioCurinfo33(string $Bio_CurInfo3_3) Return the first Wp9bioIndicators filtered by the Bio_CurInfo3_3 column
 * @method Wp9bioIndicators findOneByBioCurinfo34(string $Bio_CurInfo3_4) Return the first Wp9bioIndicators filtered by the Bio_CurInfo3_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo44(string $Bio_HistInfo4_4) Return the first Wp9bioIndicators filtered by the Bio_HistInfo4_4 column
 * @method Wp9bioIndicators findOneByBioHistinfo43(string $Bio_HistInfo4_3) Return the first Wp9bioIndicators filtered by the Bio_HistInfo4_3 column
 * @method Wp9bioIndicators findOneByBioHistinfo42(string $Bio_HistInfo4_2) Return the first Wp9bioIndicators filtered by the Bio_HistInfo4_2 column
 * @method Wp9bioIndicators findOneByBioHistinfo41(string $Bio_HistInfo4_1) Return the first Wp9bioIndicators filtered by the Bio_HistInfo4_1 column
 * @method Wp9bioIndicators findOneByBioRefInfo4(string $Bio_Ref_Info4) Return the first Wp9bioIndicators filtered by the Bio_Ref_Info4 column
 * @method Wp9bioIndicators findOneByBioCurinfo41(string $Bio_CurInfo4_1) Return the first Wp9bioIndicators filtered by the Bio_CurInfo4_1 column
 * @method Wp9bioIndicators findOneByBioCurinfo42(string $Bio_CurInfo4_2) Return the first Wp9bioIndicators filtered by the Bio_CurInfo4_2 column
 * @method Wp9bioIndicators findOneByBioCurinfo43(string $Bio_CurInfo4_3) Return the first Wp9bioIndicators filtered by the Bio_CurInfo4_3 column
 * @method Wp9bioIndicators findOneByBioCurinfo44(string $Bio_CurInfo4_4) Return the first Wp9bioIndicators filtered by the Bio_CurInfo4_4 column
 * @method Wp9bioIndicators findOneByNewpassword(string $newpassword) Return the first Wp9bioIndicators filtered by the newpassword column
 * @method Wp9bioIndicators findOneByInddate(string $IndDate) Return the first Wp9bioIndicators filtered by the IndDate column
 *
 * @method array findById(int $id) Return Wp9bioIndicators objects filtered by the id column
 * @method array findByName(string $Name) Return Wp9bioIndicators objects filtered by the Name column
 * @method array findByInstitution(string $Institution) Return Wp9bioIndicators objects filtered by the Institution column
 * @method array findByEmail(string $Email) Return Wp9bioIndicators objects filtered by the Email column
 * @method array findByMpaname(string $MPAName) Return Wp9bioIndicators objects filtered by the MPAName column
 * @method array findByMpacountry(string $MPACountry) Return Wp9bioIndicators objects filtered by the MPACountry column
 * @method array findByMpalocation(string $MPALocation) Return Wp9bioIndicators objects filtered by the MPALocation column
 * @method array findByMpacharacter(string $MPACharacter) Return Wp9bioIndicators objects filtered by the MPACharacter column
 * @method array findByScubadiving(string $ScubaDiving) Return Wp9bioIndicators objects filtered by the ScubaDiving column
 * @method array findBySnorkeling(string $Snorkeling) Return Wp9bioIndicators objects filtered by the Snorkeling column
 * @method array findByHiking(string $Hiking) Return Wp9bioIndicators objects filtered by the Hiking column
 * @method array findByFfwatching(string $FFWatching) Return Wp9bioIndicators objects filtered by the FFWatching column
 * @method array findBySeascapewatching(string $SeascapeWatching) Return Wp9bioIndicators objects filtered by the SeascapeWatching column
 * @method array findByOther1(string $Other1) Return Wp9bioIndicators objects filtered by the Other1 column
 * @method array findByOther2(string $Other2) Return Wp9bioIndicators objects filtered by the Other2 column
 * @method array findByOther3(string $Other3) Return Wp9bioIndicators objects filtered by the Other3 column
 * @method array findByOther4(string $Other4) Return Wp9bioIndicators objects filtered by the Other4 column
 * @method array findByComname1(string $ComName1) Return Wp9bioIndicators objects filtered by the ComName1 column
 * @method array findBySciname1(string $SciName1) Return Wp9bioIndicators objects filtered by the SciName1 column
 * @method array findByDesceco1(string $DescEco1) Return Wp9bioIndicators objects filtered by the DescEco1 column
 * @method array findByTemppres1(string $TempPres1) Return Wp9bioIndicators objects filtered by the TempPres1 column
 * @method array findByComname2(string $ComName2) Return Wp9bioIndicators objects filtered by the ComName2 column
 * @method array findBySciname2(string $SciName2) Return Wp9bioIndicators objects filtered by the SciName2 column
 * @method array findByDesceco2(string $DescEco2) Return Wp9bioIndicators objects filtered by the DescEco2 column
 * @method array findByTemppres2(string $TempPres2) Return Wp9bioIndicators objects filtered by the TempPres2 column
 * @method array findByComname3(string $ComName3) Return Wp9bioIndicators objects filtered by the ComName3 column
 * @method array findBySciname3(string $SciName3) Return Wp9bioIndicators objects filtered by the SciName3 column
 * @method array findByDesceco3(string $DescEco3) Return Wp9bioIndicators objects filtered by the DescEco3 column
 * @method array findByTemppres3(string $TempPres3) Return Wp9bioIndicators objects filtered by the TempPres3 column
 * @method array findByComname4(string $ComName4) Return Wp9bioIndicators objects filtered by the ComName4 column
 * @method array findBySciname4(string $SciName4) Return Wp9bioIndicators objects filtered by the SciName4 column
 * @method array findByDesceco4(string $DescEco4) Return Wp9bioIndicators objects filtered by the DescEco4 column
 * @method array findByTemppres4(string $TempPres4) Return Wp9bioIndicators objects filtered by the TempPres4 column
 * @method array findByEcocomname1(string $EcoComName1) Return Wp9bioIndicators objects filtered by the EcoComName1 column
 * @method array findByEcodesceco1(string $EcoDescEco1) Return Wp9bioIndicators objects filtered by the EcoDescEco1 column
 * @method array findByReldis1(string $RelDis1) Return Wp9bioIndicators objects filtered by the RelDis1 column
 * @method array findByEcocomname2(string $EcoComName2) Return Wp9bioIndicators objects filtered by the EcoComName2 column
 * @method array findByEcodesceco2(string $EcoDescEco2) Return Wp9bioIndicators objects filtered by the EcoDescEco2 column
 * @method array findByReldis2(string $RelDis2) Return Wp9bioIndicators objects filtered by the RelDis2 column
 * @method array findByEcocomname3(string $EcoComName3) Return Wp9bioIndicators objects filtered by the EcoComName3 column
 * @method array findByEcodesceco3(string $EcoDescEco3) Return Wp9bioIndicators objects filtered by the EcoDescEco3 column
 * @method array findByReldis3(string $RelDis3) Return Wp9bioIndicators objects filtered by the RelDis3 column
 * @method array findByEcocomname4(string $EcoComName4) Return Wp9bioIndicators objects filtered by the EcoComName4 column
 * @method array findByEcodesceco4(string $EcoDescEco4) Return Wp9bioIndicators objects filtered by the EcoDescEco4 column
 * @method array findByReldis4(string $RelDis4) Return Wp9bioIndicators objects filtered by the RelDis4 column
 * @method array findByBioHistinfo4(string $Bio_HistInfo_4) Return Wp9bioIndicators objects filtered by the Bio_HistInfo_4 column
 * @method array findByBioHistinfo3(string $Bio_HistInfo_3) Return Wp9bioIndicators objects filtered by the Bio_HistInfo_3 column
 * @method array findByBioHistinfo2(string $Bio_HistInfo_2) Return Wp9bioIndicators objects filtered by the Bio_HistInfo_2 column
 * @method array findByBioHistinfo1(string $Bio_HistInfo_1) Return Wp9bioIndicators objects filtered by the Bio_HistInfo_1 column
 * @method array findByBioRefInfo1(string $Bio_Ref_Info1) Return Wp9bioIndicators objects filtered by the Bio_Ref_Info1 column
 * @method array findByBioCurinfo1(string $Bio_CurInfo_1) Return Wp9bioIndicators objects filtered by the Bio_CurInfo_1 column
 * @method array findByBioCurinfo2(string $Bio_CurInfo_2) Return Wp9bioIndicators objects filtered by the Bio_CurInfo_2 column
 * @method array findByBioCurinfo3(string $Bio_CurInfo_3) Return Wp9bioIndicators objects filtered by the Bio_CurInfo_3 column
 * @method array findByBioCurinfo4(string $Bio_CurInfo_4) Return Wp9bioIndicators objects filtered by the Bio_CurInfo_4 column
 * @method array findByBioHistinfo24(string $Bio_HistInfo2_4) Return Wp9bioIndicators objects filtered by the Bio_HistInfo2_4 column
 * @method array findByBioHistinfo23(string $Bio_HistInfo2_3) Return Wp9bioIndicators objects filtered by the Bio_HistInfo2_3 column
 * @method array findByBioHistinfo22(string $Bio_HistInfo2_2) Return Wp9bioIndicators objects filtered by the Bio_HistInfo2_2 column
 * @method array findByBioHistinfo21(string $Bio_HistInfo2_1) Return Wp9bioIndicators objects filtered by the Bio_HistInfo2_1 column
 * @method array findByBioRefInfo2(string $Bio_Ref_Info2) Return Wp9bioIndicators objects filtered by the Bio_Ref_Info2 column
 * @method array findByBioCurinfo21(string $Bio_CurInfo2_1) Return Wp9bioIndicators objects filtered by the Bio_CurInfo2_1 column
 * @method array findByBioCurinfo22(string $Bio_CurInfo2_2) Return Wp9bioIndicators objects filtered by the Bio_CurInfo2_2 column
 * @method array findByBioCurinfo23(string $Bio_CurInfo2_3) Return Wp9bioIndicators objects filtered by the Bio_CurInfo2_3 column
 * @method array findByBioCurinfo24(string $Bio_CurInfo2_4) Return Wp9bioIndicators objects filtered by the Bio_CurInfo2_4 column
 * @method array findByBioHistinfo34(string $Bio_HistInfo3_4) Return Wp9bioIndicators objects filtered by the Bio_HistInfo3_4 column
 * @method array findByBioHistinfo33(string $Bio_HistInfo3_3) Return Wp9bioIndicators objects filtered by the Bio_HistInfo3_3 column
 * @method array findByBioHistinfo32(string $Bio_HistInfo3_2) Return Wp9bioIndicators objects filtered by the Bio_HistInfo3_2 column
 * @method array findByBioHistinfo31(string $Bio_HistInfo3_1) Return Wp9bioIndicators objects filtered by the Bio_HistInfo3_1 column
 * @method array findByBioRefInfo3(string $Bio_Ref_Info3) Return Wp9bioIndicators objects filtered by the Bio_Ref_Info3 column
 * @method array findByBioCurinfo31(string $Bio_CurInfo3_1) Return Wp9bioIndicators objects filtered by the Bio_CurInfo3_1 column
 * @method array findByBioCurinfo32(string $Bio_CurInfo3_2) Return Wp9bioIndicators objects filtered by the Bio_CurInfo3_2 column
 * @method array findByBioCurinfo33(string $Bio_CurInfo3_3) Return Wp9bioIndicators objects filtered by the Bio_CurInfo3_3 column
 * @method array findByBioCurinfo34(string $Bio_CurInfo3_4) Return Wp9bioIndicators objects filtered by the Bio_CurInfo3_4 column
 * @method array findByBioHistinfo44(string $Bio_HistInfo4_4) Return Wp9bioIndicators objects filtered by the Bio_HistInfo4_4 column
 * @method array findByBioHistinfo43(string $Bio_HistInfo4_3) Return Wp9bioIndicators objects filtered by the Bio_HistInfo4_3 column
 * @method array findByBioHistinfo42(string $Bio_HistInfo4_2) Return Wp9bioIndicators objects filtered by the Bio_HistInfo4_2 column
 * @method array findByBioHistinfo41(string $Bio_HistInfo4_1) Return Wp9bioIndicators objects filtered by the Bio_HistInfo4_1 column
 * @method array findByBioRefInfo4(string $Bio_Ref_Info4) Return Wp9bioIndicators objects filtered by the Bio_Ref_Info4 column
 * @method array findByBioCurinfo41(string $Bio_CurInfo4_1) Return Wp9bioIndicators objects filtered by the Bio_CurInfo4_1 column
 * @method array findByBioCurinfo42(string $Bio_CurInfo4_2) Return Wp9bioIndicators objects filtered by the Bio_CurInfo4_2 column
 * @method array findByBioCurinfo43(string $Bio_CurInfo4_3) Return Wp9bioIndicators objects filtered by the Bio_CurInfo4_3 column
 * @method array findByBioCurinfo44(string $Bio_CurInfo4_4) Return Wp9bioIndicators objects filtered by the Bio_CurInfo4_4 column
 * @method array findByNewpassword(string $newpassword) Return Wp9bioIndicators objects filtered by the newpassword column
 * @method array findByInddate(string $IndDate) Return Wp9bioIndicators objects filtered by the IndDate column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWp9bioIndicatorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWp9bioIndicatorsQuery object.
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
            $modelName = 'Wp9bioIndicators';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Wp9bioIndicatorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Wp9bioIndicatorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Wp9bioIndicatorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Wp9bioIndicatorsQuery) {
            return $criteria;
        }
        $query = new Wp9bioIndicatorsQuery(null, null, $modelAlias);

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
     * @return   Wp9bioIndicators|Wp9bioIndicators[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Wp9bioIndicatorsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Wp9bioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Wp9bioIndicators A model object, or null if the key is not found
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
     * @return                 Wp9bioIndicators A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `Name`, `Institution`, `Email`, `MPAName`, `MPACountry`, `MPALocation`, `MPACharacter`, `ScubaDiving`, `Snorkeling`, `Hiking`, `FFWatching`, `SeascapeWatching`, `Other1`, `Other2`, `Other3`, `Other4`, `ComName1`, `SciName1`, `DescEco1`, `TempPres1`, `ComName2`, `SciName2`, `DescEco2`, `TempPres2`, `ComName3`, `SciName3`, `DescEco3`, `TempPres3`, `ComName4`, `SciName4`, `DescEco4`, `TempPres4`, `EcoComName1`, `EcoDescEco1`, `RelDis1`, `EcoComName2`, `EcoDescEco2`, `RelDis2`, `EcoComName3`, `EcoDescEco3`, `RelDis3`, `EcoComName4`, `EcoDescEco4`, `RelDis4`, `Bio_HistInfo_4`, `Bio_HistInfo_3`, `Bio_HistInfo_2`, `Bio_HistInfo_1`, `Bio_Ref_Info1`, `Bio_CurInfo_1`, `Bio_CurInfo_2`, `Bio_CurInfo_3`, `Bio_CurInfo_4`, `Bio_HistInfo2_4`, `Bio_HistInfo2_3`, `Bio_HistInfo2_2`, `Bio_HistInfo2_1`, `Bio_Ref_Info2`, `Bio_CurInfo2_1`, `Bio_CurInfo2_2`, `Bio_CurInfo2_3`, `Bio_CurInfo2_4`, `Bio_HistInfo3_4`, `Bio_HistInfo3_3`, `Bio_HistInfo3_2`, `Bio_HistInfo3_1`, `Bio_Ref_Info3`, `Bio_CurInfo3_1`, `Bio_CurInfo3_2`, `Bio_CurInfo3_3`, `Bio_CurInfo3_4`, `Bio_HistInfo4_4`, `Bio_HistInfo4_3`, `Bio_HistInfo4_2`, `Bio_HistInfo4_1`, `Bio_Ref_Info4`, `Bio_CurInfo4_1`, `Bio_CurInfo4_2`, `Bio_CurInfo4_3`, `Bio_CurInfo4_4`, `newpassword`, `IndDate` FROM `wp9bio_indicators` WHERE `id` = :p0';
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
            $obj = new Wp9bioIndicators();
            $obj->hydrate($row);
            Wp9bioIndicatorsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Wp9bioIndicators|Wp9bioIndicators[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Wp9bioIndicators[]|mixed the list of results, formatted by the current formatter
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ID, $keys, Criteria::IN);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(Wp9bioIndicatorsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(Wp9bioIndicatorsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ID, $id, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::NAME, $name, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::INSTITUTION, $institution, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::EMAIL, $email, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::MPANAME, $mpaname, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::MPACOUNTRY, $mpacountry, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::MPALOCATION, $mpalocation, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::MPACHARACTER, $mpacharacter, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SCUBADIVING, $scubadiving, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SNORKELING, $snorkeling, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::HIKING, $hiking, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::FFWATCHING, $ffwatching, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SEASCAPEWATCHING, $seascapewatching, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::OTHER1, $other1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::OTHER2, $other2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::OTHER3, $other3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::OTHER4, $other4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::COMNAME1, $comname1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SCINAME1, $sciname1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::DESCECO1, $desceco1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::TEMPPRES1, $temppres1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::COMNAME2, $comname2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SCINAME2, $sciname2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::DESCECO2, $desceco2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::TEMPPRES2, $temppres2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::COMNAME3, $comname3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SCINAME3, $sciname3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::DESCECO3, $desceco3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::TEMPPRES3, $temppres3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::COMNAME4, $comname4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::SCINAME4, $sciname4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::DESCECO4, $desceco4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::TEMPPRES4, $temppres4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECOCOMNAME1, $ecocomname1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECODESCECO1, $ecodesceco1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::RELDIS1, $reldis1, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECOCOMNAME2, $ecocomname2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECODESCECO2, $ecodesceco2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::RELDIS2, $reldis2, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECOCOMNAME3, $ecocomname3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECODESCECO3, $ecodesceco3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::RELDIS3, $reldis3, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECOCOMNAME4, $ecocomname4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::ECODESCECO4, $ecodesceco4, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::RELDIS4, $reldis4, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo4('fooValue');   // WHERE Bio_HistInfo_4 = 'fooValue'
     * $query->filterByBioHistinfo4('%fooValue%'); // WHERE Bio_HistInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo4($bioHistinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo4)) {
                $bioHistinfo4 = str_replace('*', '%', $bioHistinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO_4, $bioHistinfo4, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo3('fooValue');   // WHERE Bio_HistInfo_3 = 'fooValue'
     * $query->filterByBioHistinfo3('%fooValue%'); // WHERE Bio_HistInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo3($bioHistinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo3)) {
                $bioHistinfo3 = str_replace('*', '%', $bioHistinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO_3, $bioHistinfo3, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo2('fooValue');   // WHERE Bio_HistInfo_2 = 'fooValue'
     * $query->filterByBioHistinfo2('%fooValue%'); // WHERE Bio_HistInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo2($bioHistinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo2)) {
                $bioHistinfo2 = str_replace('*', '%', $bioHistinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO_2, $bioHistinfo2, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo1('fooValue');   // WHERE Bio_HistInfo_1 = 'fooValue'
     * $query->filterByBioHistinfo1('%fooValue%'); // WHERE Bio_HistInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo1($bioHistinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo1)) {
                $bioHistinfo1 = str_replace('*', '%', $bioHistinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO_1, $bioHistinfo1, $comparison);
    }

    /**
     * Filter the query on the Bio_Ref_Info1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioRefInfo1('fooValue');   // WHERE Bio_Ref_Info1 = 'fooValue'
     * $query->filterByBioRefInfo1('%fooValue%'); // WHERE Bio_Ref_Info1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioRefInfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioRefInfo1($bioRefInfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioRefInfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioRefInfo1)) {
                $bioRefInfo1 = str_replace('*', '%', $bioRefInfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_REF_INFO1, $bioRefInfo1, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo1('fooValue');   // WHERE Bio_CurInfo_1 = 'fooValue'
     * $query->filterByBioCurinfo1('%fooValue%'); // WHERE Bio_CurInfo_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo1($bioCurinfo1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo1)) {
                $bioCurinfo1 = str_replace('*', '%', $bioCurinfo1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO_1, $bioCurinfo1, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo2('fooValue');   // WHERE Bio_CurInfo_2 = 'fooValue'
     * $query->filterByBioCurinfo2('%fooValue%'); // WHERE Bio_CurInfo_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo2($bioCurinfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo2)) {
                $bioCurinfo2 = str_replace('*', '%', $bioCurinfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO_2, $bioCurinfo2, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo3('fooValue');   // WHERE Bio_CurInfo_3 = 'fooValue'
     * $query->filterByBioCurinfo3('%fooValue%'); // WHERE Bio_CurInfo_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo3($bioCurinfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo3)) {
                $bioCurinfo3 = str_replace('*', '%', $bioCurinfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO_3, $bioCurinfo3, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo4('fooValue');   // WHERE Bio_CurInfo_4 = 'fooValue'
     * $query->filterByBioCurinfo4('%fooValue%'); // WHERE Bio_CurInfo_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo4($bioCurinfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo4)) {
                $bioCurinfo4 = str_replace('*', '%', $bioCurinfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO_4, $bioCurinfo4, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo24('fooValue');   // WHERE Bio_HistInfo2_4 = 'fooValue'
     * $query->filterByBioHistinfo24('%fooValue%'); // WHERE Bio_HistInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo24($bioHistinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo24)) {
                $bioHistinfo24 = str_replace('*', '%', $bioHistinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO2_4, $bioHistinfo24, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo23('fooValue');   // WHERE Bio_HistInfo2_3 = 'fooValue'
     * $query->filterByBioHistinfo23('%fooValue%'); // WHERE Bio_HistInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo23($bioHistinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo23)) {
                $bioHistinfo23 = str_replace('*', '%', $bioHistinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO2_3, $bioHistinfo23, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo22('fooValue');   // WHERE Bio_HistInfo2_2 = 'fooValue'
     * $query->filterByBioHistinfo22('%fooValue%'); // WHERE Bio_HistInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo22($bioHistinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo22)) {
                $bioHistinfo22 = str_replace('*', '%', $bioHistinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO2_2, $bioHistinfo22, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo21('fooValue');   // WHERE Bio_HistInfo2_1 = 'fooValue'
     * $query->filterByBioHistinfo21('%fooValue%'); // WHERE Bio_HistInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo21($bioHistinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo21)) {
                $bioHistinfo21 = str_replace('*', '%', $bioHistinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO2_1, $bioHistinfo21, $comparison);
    }

    /**
     * Filter the query on the Bio_Ref_Info2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioRefInfo2('fooValue');   // WHERE Bio_Ref_Info2 = 'fooValue'
     * $query->filterByBioRefInfo2('%fooValue%'); // WHERE Bio_Ref_Info2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioRefInfo2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioRefInfo2($bioRefInfo2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioRefInfo2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioRefInfo2)) {
                $bioRefInfo2 = str_replace('*', '%', $bioRefInfo2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_REF_INFO2, $bioRefInfo2, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo2_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo21('fooValue');   // WHERE Bio_CurInfo2_1 = 'fooValue'
     * $query->filterByBioCurinfo21('%fooValue%'); // WHERE Bio_CurInfo2_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo21 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo21($bioCurinfo21 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo21)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo21)) {
                $bioCurinfo21 = str_replace('*', '%', $bioCurinfo21);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO2_1, $bioCurinfo21, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo2_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo22('fooValue');   // WHERE Bio_CurInfo2_2 = 'fooValue'
     * $query->filterByBioCurinfo22('%fooValue%'); // WHERE Bio_CurInfo2_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo22 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo22($bioCurinfo22 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo22)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo22)) {
                $bioCurinfo22 = str_replace('*', '%', $bioCurinfo22);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO2_2, $bioCurinfo22, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo2_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo23('fooValue');   // WHERE Bio_CurInfo2_3 = 'fooValue'
     * $query->filterByBioCurinfo23('%fooValue%'); // WHERE Bio_CurInfo2_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo23 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo23($bioCurinfo23 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo23)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo23)) {
                $bioCurinfo23 = str_replace('*', '%', $bioCurinfo23);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO2_3, $bioCurinfo23, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo2_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo24('fooValue');   // WHERE Bio_CurInfo2_4 = 'fooValue'
     * $query->filterByBioCurinfo24('%fooValue%'); // WHERE Bio_CurInfo2_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo24 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo24($bioCurinfo24 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo24)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo24)) {
                $bioCurinfo24 = str_replace('*', '%', $bioCurinfo24);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO2_4, $bioCurinfo24, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo3_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo34('fooValue');   // WHERE Bio_HistInfo3_4 = 'fooValue'
     * $query->filterByBioHistinfo34('%fooValue%'); // WHERE Bio_HistInfo3_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo34 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo34($bioHistinfo34 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo34)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo34)) {
                $bioHistinfo34 = str_replace('*', '%', $bioHistinfo34);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO3_4, $bioHistinfo34, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo3_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo33('fooValue');   // WHERE Bio_HistInfo3_3 = 'fooValue'
     * $query->filterByBioHistinfo33('%fooValue%'); // WHERE Bio_HistInfo3_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo33 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo33($bioHistinfo33 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo33)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo33)) {
                $bioHistinfo33 = str_replace('*', '%', $bioHistinfo33);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO3_3, $bioHistinfo33, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo3_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo32('fooValue');   // WHERE Bio_HistInfo3_2 = 'fooValue'
     * $query->filterByBioHistinfo32('%fooValue%'); // WHERE Bio_HistInfo3_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo32 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo32($bioHistinfo32 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo32)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo32)) {
                $bioHistinfo32 = str_replace('*', '%', $bioHistinfo32);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO3_2, $bioHistinfo32, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo3_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo31('fooValue');   // WHERE Bio_HistInfo3_1 = 'fooValue'
     * $query->filterByBioHistinfo31('%fooValue%'); // WHERE Bio_HistInfo3_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo31 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo31($bioHistinfo31 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo31)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo31)) {
                $bioHistinfo31 = str_replace('*', '%', $bioHistinfo31);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO3_1, $bioHistinfo31, $comparison);
    }

    /**
     * Filter the query on the Bio_Ref_Info3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioRefInfo3('fooValue');   // WHERE Bio_Ref_Info3 = 'fooValue'
     * $query->filterByBioRefInfo3('%fooValue%'); // WHERE Bio_Ref_Info3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioRefInfo3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioRefInfo3($bioRefInfo3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioRefInfo3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioRefInfo3)) {
                $bioRefInfo3 = str_replace('*', '%', $bioRefInfo3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_REF_INFO3, $bioRefInfo3, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo3_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo31('fooValue');   // WHERE Bio_CurInfo3_1 = 'fooValue'
     * $query->filterByBioCurinfo31('%fooValue%'); // WHERE Bio_CurInfo3_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo31 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo31($bioCurinfo31 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo31)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo31)) {
                $bioCurinfo31 = str_replace('*', '%', $bioCurinfo31);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO3_1, $bioCurinfo31, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo3_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo32('fooValue');   // WHERE Bio_CurInfo3_2 = 'fooValue'
     * $query->filterByBioCurinfo32('%fooValue%'); // WHERE Bio_CurInfo3_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo32 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo32($bioCurinfo32 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo32)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo32)) {
                $bioCurinfo32 = str_replace('*', '%', $bioCurinfo32);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO3_2, $bioCurinfo32, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo3_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo33('fooValue');   // WHERE Bio_CurInfo3_3 = 'fooValue'
     * $query->filterByBioCurinfo33('%fooValue%'); // WHERE Bio_CurInfo3_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo33 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo33($bioCurinfo33 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo33)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo33)) {
                $bioCurinfo33 = str_replace('*', '%', $bioCurinfo33);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO3_3, $bioCurinfo33, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo3_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo34('fooValue');   // WHERE Bio_CurInfo3_4 = 'fooValue'
     * $query->filterByBioCurinfo34('%fooValue%'); // WHERE Bio_CurInfo3_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo34 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo34($bioCurinfo34 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo34)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo34)) {
                $bioCurinfo34 = str_replace('*', '%', $bioCurinfo34);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO3_4, $bioCurinfo34, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo4_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo44('fooValue');   // WHERE Bio_HistInfo4_4 = 'fooValue'
     * $query->filterByBioHistinfo44('%fooValue%'); // WHERE Bio_HistInfo4_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo44 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo44($bioHistinfo44 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo44)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo44)) {
                $bioHistinfo44 = str_replace('*', '%', $bioHistinfo44);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO4_4, $bioHistinfo44, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo4_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo43('fooValue');   // WHERE Bio_HistInfo4_3 = 'fooValue'
     * $query->filterByBioHistinfo43('%fooValue%'); // WHERE Bio_HistInfo4_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo43 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo43($bioHistinfo43 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo43)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo43)) {
                $bioHistinfo43 = str_replace('*', '%', $bioHistinfo43);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO4_3, $bioHistinfo43, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo4_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo42('fooValue');   // WHERE Bio_HistInfo4_2 = 'fooValue'
     * $query->filterByBioHistinfo42('%fooValue%'); // WHERE Bio_HistInfo4_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo42 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo42($bioHistinfo42 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo42)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo42)) {
                $bioHistinfo42 = str_replace('*', '%', $bioHistinfo42);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO4_2, $bioHistinfo42, $comparison);
    }

    /**
     * Filter the query on the Bio_HistInfo4_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioHistinfo41('fooValue');   // WHERE Bio_HistInfo4_1 = 'fooValue'
     * $query->filterByBioHistinfo41('%fooValue%'); // WHERE Bio_HistInfo4_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioHistinfo41 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioHistinfo41($bioHistinfo41 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioHistinfo41)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioHistinfo41)) {
                $bioHistinfo41 = str_replace('*', '%', $bioHistinfo41);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_HISTINFO4_1, $bioHistinfo41, $comparison);
    }

    /**
     * Filter the query on the Bio_Ref_Info4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioRefInfo4('fooValue');   // WHERE Bio_Ref_Info4 = 'fooValue'
     * $query->filterByBioRefInfo4('%fooValue%'); // WHERE Bio_Ref_Info4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioRefInfo4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioRefInfo4($bioRefInfo4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioRefInfo4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioRefInfo4)) {
                $bioRefInfo4 = str_replace('*', '%', $bioRefInfo4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_REF_INFO4, $bioRefInfo4, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo4_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo41('fooValue');   // WHERE Bio_CurInfo4_1 = 'fooValue'
     * $query->filterByBioCurinfo41('%fooValue%'); // WHERE Bio_CurInfo4_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo41 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo41($bioCurinfo41 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo41)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo41)) {
                $bioCurinfo41 = str_replace('*', '%', $bioCurinfo41);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO4_1, $bioCurinfo41, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo4_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo42('fooValue');   // WHERE Bio_CurInfo4_2 = 'fooValue'
     * $query->filterByBioCurinfo42('%fooValue%'); // WHERE Bio_CurInfo4_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo42 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo42($bioCurinfo42 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo42)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo42)) {
                $bioCurinfo42 = str_replace('*', '%', $bioCurinfo42);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO4_2, $bioCurinfo42, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo4_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo43('fooValue');   // WHERE Bio_CurInfo4_3 = 'fooValue'
     * $query->filterByBioCurinfo43('%fooValue%'); // WHERE Bio_CurInfo4_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo43 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo43($bioCurinfo43 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo43)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo43)) {
                $bioCurinfo43 = str_replace('*', '%', $bioCurinfo43);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO4_3, $bioCurinfo43, $comparison);
    }

    /**
     * Filter the query on the Bio_CurInfo4_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBioCurinfo44('fooValue');   // WHERE Bio_CurInfo4_4 = 'fooValue'
     * $query->filterByBioCurinfo44('%fooValue%'); // WHERE Bio_CurInfo4_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bioCurinfo44 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByBioCurinfo44($bioCurinfo44 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bioCurinfo44)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bioCurinfo44)) {
                $bioCurinfo44 = str_replace('*', '%', $bioCurinfo44);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::BIO_CURINFO4_4, $bioCurinfo44, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::NEWPASSWORD, $newpassword, $comparison);
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
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function filterByInddate($inddate = null, $comparison = null)
    {
        if (is_array($inddate)) {
            $useMinMax = false;
            if (isset($inddate['min'])) {
                $this->addUsingAlias(Wp9bioIndicatorsPeer::INDDATE, $inddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inddate['max'])) {
                $this->addUsingAlias(Wp9bioIndicatorsPeer::INDDATE, $inddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Wp9bioIndicatorsPeer::INDDATE, $inddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Wp9bioIndicators $wp9bioIndicators Object to remove from the list of results
     *
     * @return Wp9bioIndicatorsQuery The current query, for fluid interface
     */
    public function prune($wp9bioIndicators = null)
    {
        if ($wp9bioIndicators) {
            $this->addUsingAlias(Wp9bioIndicatorsPeer::ID, $wp9bioIndicators->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
