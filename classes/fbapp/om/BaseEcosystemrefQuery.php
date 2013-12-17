<?php


/**
 * Base class that represents a query for the 'ecosystemref' table.
 *
 *
 *
 * @method EcosystemrefQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method EcosystemrefQuery orderByEcosystemname($order = Criteria::ASC) Order by the EcosystemName column
 * @method EcosystemrefQuery orderByEcosystemtype($order = Criteria::ASC) Order by the EcosystemType column
 * @method EcosystemrefQuery orderByECodeLarge($order = Criteria::ASC) Order by the E_CODE_Large column
 * @method EcosystemrefQuery orderByECodeLarger($order = Criteria::ASC) Order by the E_CODE_Larger column
 * @method EcosystemrefQuery orderByReady($order = Criteria::ASC) Order by the Ready column
 * @method EcosystemrefQuery orderByOthernames($order = Criteria::ASC) Order by the OtherNames column
 * @method EcosystemrefQuery orderByLocation($order = Criteria::ASC) Order by the Location column
 * @method EcosystemrefQuery orderByLocationmap($order = Criteria::ASC) Order by the LocationMap column
 * @method EcosystemrefQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method EcosystemrefQuery orderByRiverlength($order = Criteria::ASC) Order by the RiverLength column
 * @method EcosystemrefQuery orderByArea($order = Criteria::ASC) Order by the Area column
 * @method EcosystemrefQuery orderBySizeref($order = Criteria::ASC) Order by the SizeRef column
 * @method EcosystemrefQuery orderByDrainagearea($order = Criteria::ASC) Order by the DrainageArea column
 * @method EcosystemrefQuery orderByNorthernlat($order = Criteria::ASC) Order by the NorthernLat column
 * @method EcosystemrefQuery orderByNrangens($order = Criteria::ASC) Order by the NrangeNS column
 * @method EcosystemrefQuery orderBySouthernlat($order = Criteria::ASC) Order by the SouthernLat column
 * @method EcosystemrefQuery orderBySrangens($order = Criteria::ASC) Order by the SrangeNS column
 * @method EcosystemrefQuery orderByWesternlat($order = Criteria::ASC) Order by the WesternLat column
 * @method EcosystemrefQuery orderByWrangeew($order = Criteria::ASC) Order by the WrangeEW column
 * @method EcosystemrefQuery orderByEasternlat($order = Criteria::ASC) Order by the EasternLat column
 * @method EcosystemrefQuery orderByErangeew($order = Criteria::ASC) Order by the ErangeEW column
 * @method EcosystemrefQuery orderByClimate($order = Criteria::ASC) Order by the Climate column
 * @method EcosystemrefQuery orderByPolar($order = Criteria::ASC) Order by the Polar column
 * @method EcosystemrefQuery orderByBoreal($order = Criteria::ASC) Order by the Boreal column
 * @method EcosystemrefQuery orderByTemperate($order = Criteria::ASC) Order by the Temperate column
 * @method EcosystemrefQuery orderBySubtropical($order = Criteria::ASC) Order by the Subtropical column
 * @method EcosystemrefQuery orderByTropical($order = Criteria::ASC) Order by the Tropical column
 * @method EcosystemrefQuery orderByAveragedepth($order = Criteria::ASC) Order by the AverageDepth column
 * @method EcosystemrefQuery orderByMaxdepth($order = Criteria::ASC) Order by the MaxDepth column
 * @method EcosystemrefQuery orderByDepthref($order = Criteria::ASC) Order by the DepthRef column
 * @method EcosystemrefQuery orderByTempsurface($order = Criteria::ASC) Order by the TempSurface column
 * @method EcosystemrefQuery orderByTempsurfacemap($order = Criteria::ASC) Order by the TempSurfaceMap column
 * @method EcosystemrefQuery orderByTempdepth($order = Criteria::ASC) Order by the TempDepth column
 * @method EcosystemrefQuery orderByTempdepthmap($order = Criteria::ASC) Order by the TempDepthMap column
 * @method EcosystemrefQuery orderByDescription($order = Criteria::ASC) Order by the Description column
 * @method EcosystemrefQuery orderByTotalcount($order = Criteria::ASC) Order by the TotalCount column
 * @method EcosystemrefQuery orderByTotalfamcount($order = Criteria::ASC) Order by the TotalFamCount column
 * @method EcosystemrefQuery orderByTotalcomplete($order = Criteria::ASC) Order by the TotalComplete column
 * @method EcosystemrefQuery orderByTotallit($order = Criteria::ASC) Order by the TotalLit column
 * @method EcosystemrefQuery orderByTotalfamlit($order = Criteria::ASC) Order by the TotalFamLit column
 * @method EcosystemrefQuery orderByTotalref($order = Criteria::ASC) Order by the TotalRef column
 * @method EcosystemrefQuery orderByUseflag($order = Criteria::ASC) Order by the UseFlag column
 * @method EcosystemrefQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method EcosystemrefQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method EcosystemrefQuery orderByLastupdate($order = Criteria::ASC) Order by the LastUpdate column
 * @method EcosystemrefQuery orderByLatdegfill($order = Criteria::ASC) Order by the LatDegFill column
 * @method EcosystemrefQuery orderByLatminfill($order = Criteria::ASC) Order by the LatMinFill column
 * @method EcosystemrefQuery orderByNorthsouthfill($order = Criteria::ASC) Order by the NorthSouthFill column
 * @method EcosystemrefQuery orderByLongdegfill($order = Criteria::ASC) Order by the LongDegFill column
 * @method EcosystemrefQuery orderByLongminfill($order = Criteria::ASC) Order by the LongMinFill column
 * @method EcosystemrefQuery orderByEastwestfill($order = Criteria::ASC) Order by the EastWestFill column
 * @method EcosystemrefQuery orderByEcosystemurl1($order = Criteria::ASC) Order by the EcosystemURL1 column
 * @method EcosystemrefQuery orderByEcosystemurl2($order = Criteria::ASC) Order by the EcosystemURL2 column
 * @method EcosystemrefQuery orderByEcosystemurl3($order = Criteria::ASC) Order by the EcosystemURL3 column
 * @method EcosystemrefQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EcosystemrefQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method EcosystemrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EcosystemrefQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method EcosystemrefQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EcosystemrefQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method EcosystemrefQuery orderByEcosystemnameGerman($order = Criteria::ASC) Order by the EcosystemName_German column
 * @method EcosystemrefQuery orderByEcosystemnameRussianOriginal($order = Criteria::ASC) Order by the EcosystemName_Russian_original column
 * @method EcosystemrefQuery orderByEcosystemnameRussian($order = Criteria::ASC) Order by the EcosystemName_Russian column
 * @method EcosystemrefQuery orderByEcosystemnameFrench($order = Criteria::ASC) Order by the EcosystemName_French column
 * @method EcosystemrefQuery orderByEcosystemnameChinese($order = Criteria::ASC) Order by the EcosystemName_Chinese column
 * @method EcosystemrefQuery orderByEcosystemnameDutch($order = Criteria::ASC) Order by the EcosystemName_Dutch column
 * @method EcosystemrefQuery orderByEcosystemnameItalian($order = Criteria::ASC) Order by the EcosystemName_Italian column
 * @method EcosystemrefQuery orderByEcosystemnameSwedish($order = Criteria::ASC) Order by the EcosystemName_Swedish column
 * @method EcosystemrefQuery orderByEcosystemnameGreekOriginal($order = Criteria::ASC) Order by the EcosystemName_Greek_original column
 * @method EcosystemrefQuery orderByEcosystemnameGreek($order = Criteria::ASC) Order by the EcosystemName_Greek column
 * @method EcosystemrefQuery orderByEcosystemnamePortuguese($order = Criteria::ASC) Order by the EcosystemName_Portuguese column
 * @method EcosystemrefQuery orderByEcosystemnameSpanish($order = Criteria::ASC) Order by the EcosystemName_Spanish column
 * @method EcosystemrefQuery orderByEcosystemnameChineseU($order = Criteria::ASC) Order by the EcosystemName_Chinese_u column
 * @method EcosystemrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EcosystemrefQuery groupByECode() Group by the E_CODE column
 * @method EcosystemrefQuery groupByEcosystemname() Group by the EcosystemName column
 * @method EcosystemrefQuery groupByEcosystemtype() Group by the EcosystemType column
 * @method EcosystemrefQuery groupByECodeLarge() Group by the E_CODE_Large column
 * @method EcosystemrefQuery groupByECodeLarger() Group by the E_CODE_Larger column
 * @method EcosystemrefQuery groupByReady() Group by the Ready column
 * @method EcosystemrefQuery groupByOthernames() Group by the OtherNames column
 * @method EcosystemrefQuery groupByLocation() Group by the Location column
 * @method EcosystemrefQuery groupByLocationmap() Group by the LocationMap column
 * @method EcosystemrefQuery groupBySalinity() Group by the Salinity column
 * @method EcosystemrefQuery groupByRiverlength() Group by the RiverLength column
 * @method EcosystemrefQuery groupByArea() Group by the Area column
 * @method EcosystemrefQuery groupBySizeref() Group by the SizeRef column
 * @method EcosystemrefQuery groupByDrainagearea() Group by the DrainageArea column
 * @method EcosystemrefQuery groupByNorthernlat() Group by the NorthernLat column
 * @method EcosystemrefQuery groupByNrangens() Group by the NrangeNS column
 * @method EcosystemrefQuery groupBySouthernlat() Group by the SouthernLat column
 * @method EcosystemrefQuery groupBySrangens() Group by the SrangeNS column
 * @method EcosystemrefQuery groupByWesternlat() Group by the WesternLat column
 * @method EcosystemrefQuery groupByWrangeew() Group by the WrangeEW column
 * @method EcosystemrefQuery groupByEasternlat() Group by the EasternLat column
 * @method EcosystemrefQuery groupByErangeew() Group by the ErangeEW column
 * @method EcosystemrefQuery groupByClimate() Group by the Climate column
 * @method EcosystemrefQuery groupByPolar() Group by the Polar column
 * @method EcosystemrefQuery groupByBoreal() Group by the Boreal column
 * @method EcosystemrefQuery groupByTemperate() Group by the Temperate column
 * @method EcosystemrefQuery groupBySubtropical() Group by the Subtropical column
 * @method EcosystemrefQuery groupByTropical() Group by the Tropical column
 * @method EcosystemrefQuery groupByAveragedepth() Group by the AverageDepth column
 * @method EcosystemrefQuery groupByMaxdepth() Group by the MaxDepth column
 * @method EcosystemrefQuery groupByDepthref() Group by the DepthRef column
 * @method EcosystemrefQuery groupByTempsurface() Group by the TempSurface column
 * @method EcosystemrefQuery groupByTempsurfacemap() Group by the TempSurfaceMap column
 * @method EcosystemrefQuery groupByTempdepth() Group by the TempDepth column
 * @method EcosystemrefQuery groupByTempdepthmap() Group by the TempDepthMap column
 * @method EcosystemrefQuery groupByDescription() Group by the Description column
 * @method EcosystemrefQuery groupByTotalcount() Group by the TotalCount column
 * @method EcosystemrefQuery groupByTotalfamcount() Group by the TotalFamCount column
 * @method EcosystemrefQuery groupByTotalcomplete() Group by the TotalComplete column
 * @method EcosystemrefQuery groupByTotallit() Group by the TotalLit column
 * @method EcosystemrefQuery groupByTotalfamlit() Group by the TotalFamLit column
 * @method EcosystemrefQuery groupByTotalref() Group by the TotalRef column
 * @method EcosystemrefQuery groupByUseflag() Group by the UseFlag column
 * @method EcosystemrefQuery groupByComments() Group by the Comments column
 * @method EcosystemrefQuery groupByRemarks() Group by the Remarks column
 * @method EcosystemrefQuery groupByLastupdate() Group by the LastUpdate column
 * @method EcosystemrefQuery groupByLatdegfill() Group by the LatDegFill column
 * @method EcosystemrefQuery groupByLatminfill() Group by the LatMinFill column
 * @method EcosystemrefQuery groupByNorthsouthfill() Group by the NorthSouthFill column
 * @method EcosystemrefQuery groupByLongdegfill() Group by the LongDegFill column
 * @method EcosystemrefQuery groupByLongminfill() Group by the LongMinFill column
 * @method EcosystemrefQuery groupByEastwestfill() Group by the EastWestFill column
 * @method EcosystemrefQuery groupByEcosystemurl1() Group by the EcosystemURL1 column
 * @method EcosystemrefQuery groupByEcosystemurl2() Group by the EcosystemURL2 column
 * @method EcosystemrefQuery groupByEcosystemurl3() Group by the EcosystemURL3 column
 * @method EcosystemrefQuery groupByEntered() Group by the Entered column
 * @method EcosystemrefQuery groupByDateentered() Group by the DateEntered column
 * @method EcosystemrefQuery groupByModified() Group by the Modified column
 * @method EcosystemrefQuery groupByDatemodified() Group by the DateModified column
 * @method EcosystemrefQuery groupByExpert() Group by the Expert column
 * @method EcosystemrefQuery groupByDatechecked() Group by the DateChecked column
 * @method EcosystemrefQuery groupByEcosystemnameGerman() Group by the EcosystemName_German column
 * @method EcosystemrefQuery groupByEcosystemnameRussianOriginal() Group by the EcosystemName_Russian_original column
 * @method EcosystemrefQuery groupByEcosystemnameRussian() Group by the EcosystemName_Russian column
 * @method EcosystemrefQuery groupByEcosystemnameFrench() Group by the EcosystemName_French column
 * @method EcosystemrefQuery groupByEcosystemnameChinese() Group by the EcosystemName_Chinese column
 * @method EcosystemrefQuery groupByEcosystemnameDutch() Group by the EcosystemName_Dutch column
 * @method EcosystemrefQuery groupByEcosystemnameItalian() Group by the EcosystemName_Italian column
 * @method EcosystemrefQuery groupByEcosystemnameSwedish() Group by the EcosystemName_Swedish column
 * @method EcosystemrefQuery groupByEcosystemnameGreekOriginal() Group by the EcosystemName_Greek_original column
 * @method EcosystemrefQuery groupByEcosystemnameGreek() Group by the EcosystemName_Greek column
 * @method EcosystemrefQuery groupByEcosystemnamePortuguese() Group by the EcosystemName_Portuguese column
 * @method EcosystemrefQuery groupByEcosystemnameSpanish() Group by the EcosystemName_Spanish column
 * @method EcosystemrefQuery groupByEcosystemnameChineseU() Group by the EcosystemName_Chinese_u column
 * @method EcosystemrefQuery groupByTs() Group by the TS column
 *
 * @method EcosystemrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EcosystemrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EcosystemrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ecosystemref findOne(PropelPDO $con = null) Return the first Ecosystemref matching the query
 * @method Ecosystemref findOneOrCreate(PropelPDO $con = null) Return the first Ecosystemref matching the query, or a new Ecosystemref object populated from the query conditions when no match is found
 *
 * @method Ecosystemref findOneByECode(int $E_CODE) Return the first Ecosystemref filtered by the E_CODE column
 * @method Ecosystemref findOneByEcosystemtype(string $EcosystemType) Return the first Ecosystemref filtered by the EcosystemType column
 * @method Ecosystemref findOneByECodeLarge(int $E_CODE_Large) Return the first Ecosystemref filtered by the E_CODE_Large column
 * @method Ecosystemref findOneByECodeLarger(int $E_CODE_Larger) Return the first Ecosystemref filtered by the E_CODE_Larger column
 * @method Ecosystemref findOneByReady(int $Ready) Return the first Ecosystemref filtered by the Ready column
 * @method Ecosystemref findOneByOthernames(string $OtherNames) Return the first Ecosystemref filtered by the OtherNames column
 * @method Ecosystemref findOneByLocation(string $Location) Return the first Ecosystemref filtered by the Location column
 * @method Ecosystemref findOneByLocationmap(string $LocationMap) Return the first Ecosystemref filtered by the LocationMap column
 * @method Ecosystemref findOneBySalinity(string $Salinity) Return the first Ecosystemref filtered by the Salinity column
 * @method Ecosystemref findOneByRiverlength(int $RiverLength) Return the first Ecosystemref filtered by the RiverLength column
 * @method Ecosystemref findOneByArea(int $Area) Return the first Ecosystemref filtered by the Area column
 * @method Ecosystemref findOneBySizeref(int $SizeRef) Return the first Ecosystemref filtered by the SizeRef column
 * @method Ecosystemref findOneByDrainagearea(int $DrainageArea) Return the first Ecosystemref filtered by the DrainageArea column
 * @method Ecosystemref findOneByNorthernlat(int $NorthernLat) Return the first Ecosystemref filtered by the NorthernLat column
 * @method Ecosystemref findOneByNrangens(string $NrangeNS) Return the first Ecosystemref filtered by the NrangeNS column
 * @method Ecosystemref findOneBySouthernlat(int $SouthernLat) Return the first Ecosystemref filtered by the SouthernLat column
 * @method Ecosystemref findOneBySrangens(string $SrangeNS) Return the first Ecosystemref filtered by the SrangeNS column
 * @method Ecosystemref findOneByWesternlat(int $WesternLat) Return the first Ecosystemref filtered by the WesternLat column
 * @method Ecosystemref findOneByWrangeew(string $WrangeEW) Return the first Ecosystemref filtered by the WrangeEW column
 * @method Ecosystemref findOneByEasternlat(int $EasternLat) Return the first Ecosystemref filtered by the EasternLat column
 * @method Ecosystemref findOneByErangeew(string $ErangeEW) Return the first Ecosystemref filtered by the ErangeEW column
 * @method Ecosystemref findOneByClimate(string $Climate) Return the first Ecosystemref filtered by the Climate column
 * @method Ecosystemref findOneByPolar(int $Polar) Return the first Ecosystemref filtered by the Polar column
 * @method Ecosystemref findOneByBoreal(int $Boreal) Return the first Ecosystemref filtered by the Boreal column
 * @method Ecosystemref findOneByTemperate(int $Temperate) Return the first Ecosystemref filtered by the Temperate column
 * @method Ecosystemref findOneBySubtropical(int $Subtropical) Return the first Ecosystemref filtered by the Subtropical column
 * @method Ecosystemref findOneByTropical(int $Tropical) Return the first Ecosystemref filtered by the Tropical column
 * @method Ecosystemref findOneByAveragedepth(int $AverageDepth) Return the first Ecosystemref filtered by the AverageDepth column
 * @method Ecosystemref findOneByMaxdepth(int $MaxDepth) Return the first Ecosystemref filtered by the MaxDepth column
 * @method Ecosystemref findOneByDepthref(int $DepthRef) Return the first Ecosystemref filtered by the DepthRef column
 * @method Ecosystemref findOneByTempsurface(double $TempSurface) Return the first Ecosystemref filtered by the TempSurface column
 * @method Ecosystemref findOneByTempsurfacemap(string $TempSurfaceMap) Return the first Ecosystemref filtered by the TempSurfaceMap column
 * @method Ecosystemref findOneByTempdepth(double $TempDepth) Return the first Ecosystemref filtered by the TempDepth column
 * @method Ecosystemref findOneByTempdepthmap(string $TempDepthMap) Return the first Ecosystemref filtered by the TempDepthMap column
 * @method Ecosystemref findOneByDescription(string $Description) Return the first Ecosystemref filtered by the Description column
 * @method Ecosystemref findOneByTotalcount(int $TotalCount) Return the first Ecosystemref filtered by the TotalCount column
 * @method Ecosystemref findOneByTotalfamcount(int $TotalFamCount) Return the first Ecosystemref filtered by the TotalFamCount column
 * @method Ecosystemref findOneByTotalcomplete(int $TotalComplete) Return the first Ecosystemref filtered by the TotalComplete column
 * @method Ecosystemref findOneByTotallit(int $TotalLit) Return the first Ecosystemref filtered by the TotalLit column
 * @method Ecosystemref findOneByTotalfamlit(int $TotalFamLit) Return the first Ecosystemref filtered by the TotalFamLit column
 * @method Ecosystemref findOneByTotalref(int $TotalRef) Return the first Ecosystemref filtered by the TotalRef column
 * @method Ecosystemref findOneByUseflag(int $UseFlag) Return the first Ecosystemref filtered by the UseFlag column
 * @method Ecosystemref findOneByComments(string $Comments) Return the first Ecosystemref filtered by the Comments column
 * @method Ecosystemref findOneByRemarks(string $Remarks) Return the first Ecosystemref filtered by the Remarks column
 * @method Ecosystemref findOneByLastupdate(string $LastUpdate) Return the first Ecosystemref filtered by the LastUpdate column
 * @method Ecosystemref findOneByLatdegfill(int $LatDegFill) Return the first Ecosystemref filtered by the LatDegFill column
 * @method Ecosystemref findOneByLatminfill(int $LatMinFill) Return the first Ecosystemref filtered by the LatMinFill column
 * @method Ecosystemref findOneByNorthsouthfill(string $NorthSouthFill) Return the first Ecosystemref filtered by the NorthSouthFill column
 * @method Ecosystemref findOneByLongdegfill(int $LongDegFill) Return the first Ecosystemref filtered by the LongDegFill column
 * @method Ecosystemref findOneByLongminfill(int $LongMinFill) Return the first Ecosystemref filtered by the LongMinFill column
 * @method Ecosystemref findOneByEastwestfill(string $EastWestFill) Return the first Ecosystemref filtered by the EastWestFill column
 * @method Ecosystemref findOneByEcosystemurl1(string $EcosystemURL1) Return the first Ecosystemref filtered by the EcosystemURL1 column
 * @method Ecosystemref findOneByEcosystemurl2(string $EcosystemURL2) Return the first Ecosystemref filtered by the EcosystemURL2 column
 * @method Ecosystemref findOneByEcosystemurl3(string $EcosystemURL3) Return the first Ecosystemref filtered by the EcosystemURL3 column
 * @method Ecosystemref findOneByEntered(int $Entered) Return the first Ecosystemref filtered by the Entered column
 * @method Ecosystemref findOneByDateentered(string $DateEntered) Return the first Ecosystemref filtered by the DateEntered column
 * @method Ecosystemref findOneByModified(int $Modified) Return the first Ecosystemref filtered by the Modified column
 * @method Ecosystemref findOneByDatemodified(string $DateModified) Return the first Ecosystemref filtered by the DateModified column
 * @method Ecosystemref findOneByExpert(int $Expert) Return the first Ecosystemref filtered by the Expert column
 * @method Ecosystemref findOneByDatechecked(string $DateChecked) Return the first Ecosystemref filtered by the DateChecked column
 * @method Ecosystemref findOneByEcosystemnameGerman(string $EcosystemName_German) Return the first Ecosystemref filtered by the EcosystemName_German column
 * @method Ecosystemref findOneByEcosystemnameRussianOriginal(string $EcosystemName_Russian_original) Return the first Ecosystemref filtered by the EcosystemName_Russian_original column
 * @method Ecosystemref findOneByEcosystemnameRussian(string $EcosystemName_Russian) Return the first Ecosystemref filtered by the EcosystemName_Russian column
 * @method Ecosystemref findOneByEcosystemnameFrench(string $EcosystemName_French) Return the first Ecosystemref filtered by the EcosystemName_French column
 * @method Ecosystemref findOneByEcosystemnameChinese(string $EcosystemName_Chinese) Return the first Ecosystemref filtered by the EcosystemName_Chinese column
 * @method Ecosystemref findOneByEcosystemnameDutch(string $EcosystemName_Dutch) Return the first Ecosystemref filtered by the EcosystemName_Dutch column
 * @method Ecosystemref findOneByEcosystemnameItalian(string $EcosystemName_Italian) Return the first Ecosystemref filtered by the EcosystemName_Italian column
 * @method Ecosystemref findOneByEcosystemnameSwedish(string $EcosystemName_Swedish) Return the first Ecosystemref filtered by the EcosystemName_Swedish column
 * @method Ecosystemref findOneByEcosystemnameGreekOriginal(string $EcosystemName_Greek_original) Return the first Ecosystemref filtered by the EcosystemName_Greek_original column
 * @method Ecosystemref findOneByEcosystemnameGreek(string $EcosystemName_Greek) Return the first Ecosystemref filtered by the EcosystemName_Greek column
 * @method Ecosystemref findOneByEcosystemnamePortuguese(string $EcosystemName_Portuguese) Return the first Ecosystemref filtered by the EcosystemName_Portuguese column
 * @method Ecosystemref findOneByEcosystemnameSpanish(string $EcosystemName_Spanish) Return the first Ecosystemref filtered by the EcosystemName_Spanish column
 * @method Ecosystemref findOneByEcosystemnameChineseU(string $EcosystemName_Chinese_u) Return the first Ecosystemref filtered by the EcosystemName_Chinese_u column
 * @method Ecosystemref findOneByTs(string $TS) Return the first Ecosystemref filtered by the TS column
 *
 * @method array findByECode(int $E_CODE) Return Ecosystemref objects filtered by the E_CODE column
 * @method array findByEcosystemname(string $EcosystemName) Return Ecosystemref objects filtered by the EcosystemName column
 * @method array findByEcosystemtype(string $EcosystemType) Return Ecosystemref objects filtered by the EcosystemType column
 * @method array findByECodeLarge(int $E_CODE_Large) Return Ecosystemref objects filtered by the E_CODE_Large column
 * @method array findByECodeLarger(int $E_CODE_Larger) Return Ecosystemref objects filtered by the E_CODE_Larger column
 * @method array findByReady(int $Ready) Return Ecosystemref objects filtered by the Ready column
 * @method array findByOthernames(string $OtherNames) Return Ecosystemref objects filtered by the OtherNames column
 * @method array findByLocation(string $Location) Return Ecosystemref objects filtered by the Location column
 * @method array findByLocationmap(string $LocationMap) Return Ecosystemref objects filtered by the LocationMap column
 * @method array findBySalinity(string $Salinity) Return Ecosystemref objects filtered by the Salinity column
 * @method array findByRiverlength(int $RiverLength) Return Ecosystemref objects filtered by the RiverLength column
 * @method array findByArea(int $Area) Return Ecosystemref objects filtered by the Area column
 * @method array findBySizeref(int $SizeRef) Return Ecosystemref objects filtered by the SizeRef column
 * @method array findByDrainagearea(int $DrainageArea) Return Ecosystemref objects filtered by the DrainageArea column
 * @method array findByNorthernlat(int $NorthernLat) Return Ecosystemref objects filtered by the NorthernLat column
 * @method array findByNrangens(string $NrangeNS) Return Ecosystemref objects filtered by the NrangeNS column
 * @method array findBySouthernlat(int $SouthernLat) Return Ecosystemref objects filtered by the SouthernLat column
 * @method array findBySrangens(string $SrangeNS) Return Ecosystemref objects filtered by the SrangeNS column
 * @method array findByWesternlat(int $WesternLat) Return Ecosystemref objects filtered by the WesternLat column
 * @method array findByWrangeew(string $WrangeEW) Return Ecosystemref objects filtered by the WrangeEW column
 * @method array findByEasternlat(int $EasternLat) Return Ecosystemref objects filtered by the EasternLat column
 * @method array findByErangeew(string $ErangeEW) Return Ecosystemref objects filtered by the ErangeEW column
 * @method array findByClimate(string $Climate) Return Ecosystemref objects filtered by the Climate column
 * @method array findByPolar(int $Polar) Return Ecosystemref objects filtered by the Polar column
 * @method array findByBoreal(int $Boreal) Return Ecosystemref objects filtered by the Boreal column
 * @method array findByTemperate(int $Temperate) Return Ecosystemref objects filtered by the Temperate column
 * @method array findBySubtropical(int $Subtropical) Return Ecosystemref objects filtered by the Subtropical column
 * @method array findByTropical(int $Tropical) Return Ecosystemref objects filtered by the Tropical column
 * @method array findByAveragedepth(int $AverageDepth) Return Ecosystemref objects filtered by the AverageDepth column
 * @method array findByMaxdepth(int $MaxDepth) Return Ecosystemref objects filtered by the MaxDepth column
 * @method array findByDepthref(int $DepthRef) Return Ecosystemref objects filtered by the DepthRef column
 * @method array findByTempsurface(double $TempSurface) Return Ecosystemref objects filtered by the TempSurface column
 * @method array findByTempsurfacemap(string $TempSurfaceMap) Return Ecosystemref objects filtered by the TempSurfaceMap column
 * @method array findByTempdepth(double $TempDepth) Return Ecosystemref objects filtered by the TempDepth column
 * @method array findByTempdepthmap(string $TempDepthMap) Return Ecosystemref objects filtered by the TempDepthMap column
 * @method array findByDescription(string $Description) Return Ecosystemref objects filtered by the Description column
 * @method array findByTotalcount(int $TotalCount) Return Ecosystemref objects filtered by the TotalCount column
 * @method array findByTotalfamcount(int $TotalFamCount) Return Ecosystemref objects filtered by the TotalFamCount column
 * @method array findByTotalcomplete(int $TotalComplete) Return Ecosystemref objects filtered by the TotalComplete column
 * @method array findByTotallit(int $TotalLit) Return Ecosystemref objects filtered by the TotalLit column
 * @method array findByTotalfamlit(int $TotalFamLit) Return Ecosystemref objects filtered by the TotalFamLit column
 * @method array findByTotalref(int $TotalRef) Return Ecosystemref objects filtered by the TotalRef column
 * @method array findByUseflag(int $UseFlag) Return Ecosystemref objects filtered by the UseFlag column
 * @method array findByComments(string $Comments) Return Ecosystemref objects filtered by the Comments column
 * @method array findByRemarks(string $Remarks) Return Ecosystemref objects filtered by the Remarks column
 * @method array findByLastupdate(string $LastUpdate) Return Ecosystemref objects filtered by the LastUpdate column
 * @method array findByLatdegfill(int $LatDegFill) Return Ecosystemref objects filtered by the LatDegFill column
 * @method array findByLatminfill(int $LatMinFill) Return Ecosystemref objects filtered by the LatMinFill column
 * @method array findByNorthsouthfill(string $NorthSouthFill) Return Ecosystemref objects filtered by the NorthSouthFill column
 * @method array findByLongdegfill(int $LongDegFill) Return Ecosystemref objects filtered by the LongDegFill column
 * @method array findByLongminfill(int $LongMinFill) Return Ecosystemref objects filtered by the LongMinFill column
 * @method array findByEastwestfill(string $EastWestFill) Return Ecosystemref objects filtered by the EastWestFill column
 * @method array findByEcosystemurl1(string $EcosystemURL1) Return Ecosystemref objects filtered by the EcosystemURL1 column
 * @method array findByEcosystemurl2(string $EcosystemURL2) Return Ecosystemref objects filtered by the EcosystemURL2 column
 * @method array findByEcosystemurl3(string $EcosystemURL3) Return Ecosystemref objects filtered by the EcosystemURL3 column
 * @method array findByEntered(int $Entered) Return Ecosystemref objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Ecosystemref objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Ecosystemref objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Ecosystemref objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Ecosystemref objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Ecosystemref objects filtered by the DateChecked column
 * @method array findByEcosystemnameGerman(string $EcosystemName_German) Return Ecosystemref objects filtered by the EcosystemName_German column
 * @method array findByEcosystemnameRussianOriginal(string $EcosystemName_Russian_original) Return Ecosystemref objects filtered by the EcosystemName_Russian_original column
 * @method array findByEcosystemnameRussian(string $EcosystemName_Russian) Return Ecosystemref objects filtered by the EcosystemName_Russian column
 * @method array findByEcosystemnameFrench(string $EcosystemName_French) Return Ecosystemref objects filtered by the EcosystemName_French column
 * @method array findByEcosystemnameChinese(string $EcosystemName_Chinese) Return Ecosystemref objects filtered by the EcosystemName_Chinese column
 * @method array findByEcosystemnameDutch(string $EcosystemName_Dutch) Return Ecosystemref objects filtered by the EcosystemName_Dutch column
 * @method array findByEcosystemnameItalian(string $EcosystemName_Italian) Return Ecosystemref objects filtered by the EcosystemName_Italian column
 * @method array findByEcosystemnameSwedish(string $EcosystemName_Swedish) Return Ecosystemref objects filtered by the EcosystemName_Swedish column
 * @method array findByEcosystemnameGreekOriginal(string $EcosystemName_Greek_original) Return Ecosystemref objects filtered by the EcosystemName_Greek_original column
 * @method array findByEcosystemnameGreek(string $EcosystemName_Greek) Return Ecosystemref objects filtered by the EcosystemName_Greek column
 * @method array findByEcosystemnamePortuguese(string $EcosystemName_Portuguese) Return Ecosystemref objects filtered by the EcosystemName_Portuguese column
 * @method array findByEcosystemnameSpanish(string $EcosystemName_Spanish) Return Ecosystemref objects filtered by the EcosystemName_Spanish column
 * @method array findByEcosystemnameChineseU(string $EcosystemName_Chinese_u) Return Ecosystemref objects filtered by the EcosystemName_Chinese_u column
 * @method array findByTs(string $TS) Return Ecosystemref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcosystemrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEcosystemrefQuery object.
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
            $modelName = 'Ecosystemref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EcosystemrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EcosystemrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EcosystemrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EcosystemrefQuery) {
            return $criteria;
        }
        $query = new EcosystemrefQuery(null, null, $modelAlias);

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
     * @return   Ecosystemref|Ecosystemref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EcosystemrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ecosystemref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEcosystemname($key, $con = null)
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
     * @return                 Ecosystemref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `E_CODE`, `EcosystemName`, `EcosystemType`, `E_CODE_Large`, `E_CODE_Larger`, `Ready`, `OtherNames`, `Location`, `LocationMap`, `Salinity`, `RiverLength`, `Area`, `SizeRef`, `DrainageArea`, `NorthernLat`, `NrangeNS`, `SouthernLat`, `SrangeNS`, `WesternLat`, `WrangeEW`, `EasternLat`, `ErangeEW`, `Climate`, `Polar`, `Boreal`, `Temperate`, `Subtropical`, `Tropical`, `AverageDepth`, `MaxDepth`, `DepthRef`, `TempSurface`, `TempSurfaceMap`, `TempDepth`, `TempDepthMap`, `Description`, `TotalCount`, `TotalFamCount`, `TotalComplete`, `TotalLit`, `TotalFamLit`, `TotalRef`, `UseFlag`, `Comments`, `Remarks`, `LastUpdate`, `LatDegFill`, `LatMinFill`, `NorthSouthFill`, `LongDegFill`, `LongMinFill`, `EastWestFill`, `EcosystemURL1`, `EcosystemURL2`, `EcosystemURL3`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `EcosystemName_German`, `EcosystemName_Russian_original`, `EcosystemName_Russian`, `EcosystemName_French`, `EcosystemName_Chinese`, `EcosystemName_Dutch`, `EcosystemName_Italian`, `EcosystemName_Swedish`, `EcosystemName_Greek_original`, `EcosystemName_Greek`, `EcosystemName_Portuguese`, `EcosystemName_Spanish`, `EcosystemName_Chinese_u`, `TS` FROM `ecosystemref` WHERE `EcosystemName` = :p0';
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
            $obj = new Ecosystemref();
            $obj->hydrate($row);
            EcosystemrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ecosystemref|Ecosystemref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ecosystemref[]|mixed the list of results, formatted by the current formatter
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the EcosystemName column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemname('fooValue');   // WHERE EcosystemName = 'fooValue'
     * $query->filterByEcosystemname('%fooValue%'); // WHERE EcosystemName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemname($ecosystemname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemname)) {
                $ecosystemname = str_replace('*', '%', $ecosystemname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME, $ecosystemname, $comparison);
    }

    /**
     * Filter the query on the EcosystemType column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemtype('fooValue');   // WHERE EcosystemType = 'fooValue'
     * $query->filterByEcosystemtype('%fooValue%'); // WHERE EcosystemType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemtype($ecosystemtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemtype)) {
                $ecosystemtype = str_replace('*', '%', $ecosystemtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMTYPE, $ecosystemtype, $comparison);
    }

    /**
     * Filter the query on the E_CODE_Large column
     *
     * Example usage:
     * <code>
     * $query->filterByECodeLarge(1234); // WHERE E_CODE_Large = 1234
     * $query->filterByECodeLarge(array(12, 34)); // WHERE E_CODE_Large IN (12, 34)
     * $query->filterByECodeLarge(array('min' => 12)); // WHERE E_CODE_Large >= 12
     * $query->filterByECodeLarge(array('max' => 12)); // WHERE E_CODE_Large <= 12
     * </code>
     *
     * @param     mixed $eCodeLarge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByECodeLarge($eCodeLarge = null, $comparison = null)
    {
        if (is_array($eCodeLarge)) {
            $useMinMax = false;
            if (isset($eCodeLarge['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::E_CODE_LARGE, $eCodeLarge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCodeLarge['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::E_CODE_LARGE, $eCodeLarge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::E_CODE_LARGE, $eCodeLarge, $comparison);
    }

    /**
     * Filter the query on the E_CODE_Larger column
     *
     * Example usage:
     * <code>
     * $query->filterByECodeLarger(1234); // WHERE E_CODE_Larger = 1234
     * $query->filterByECodeLarger(array(12, 34)); // WHERE E_CODE_Larger IN (12, 34)
     * $query->filterByECodeLarger(array('min' => 12)); // WHERE E_CODE_Larger >= 12
     * $query->filterByECodeLarger(array('max' => 12)); // WHERE E_CODE_Larger <= 12
     * </code>
     *
     * @param     mixed $eCodeLarger The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByECodeLarger($eCodeLarger = null, $comparison = null)
    {
        if (is_array($eCodeLarger)) {
            $useMinMax = false;
            if (isset($eCodeLarger['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::E_CODE_LARGER, $eCodeLarger['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCodeLarger['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::E_CODE_LARGER, $eCodeLarger['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::E_CODE_LARGER, $eCodeLarger, $comparison);
    }

    /**
     * Filter the query on the Ready column
     *
     * Example usage:
     * <code>
     * $query->filterByReady(1234); // WHERE Ready = 1234
     * $query->filterByReady(array(12, 34)); // WHERE Ready IN (12, 34)
     * $query->filterByReady(array('min' => 12)); // WHERE Ready >= 12
     * $query->filterByReady(array('max' => 12)); // WHERE Ready <= 12
     * </code>
     *
     * @param     mixed $ready The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByReady($ready = null, $comparison = null)
    {
        if (is_array($ready)) {
            $useMinMax = false;
            if (isset($ready['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::READY, $ready['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ready['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::READY, $ready['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::READY, $ready, $comparison);
    }

    /**
     * Filter the query on the OtherNames column
     *
     * Example usage:
     * <code>
     * $query->filterByOthernames('fooValue');   // WHERE OtherNames = 'fooValue'
     * $query->filterByOthernames('%fooValue%'); // WHERE OtherNames LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othernames The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByOthernames($othernames = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othernames)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othernames)) {
                $othernames = str_replace('*', '%', $othernames);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::OTHERNAMES, $othernames, $comparison);
    }

    /**
     * Filter the query on the Location column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE Location = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE Location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLocation($location = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($location)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $location)) {
                $location = str_replace('*', '%', $location);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LOCATION, $location, $comparison);
    }

    /**
     * Filter the query on the LocationMap column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationmap('fooValue');   // WHERE LocationMap = 'fooValue'
     * $query->filterByLocationmap('%fooValue%'); // WHERE LocationMap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locationmap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLocationmap($locationmap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locationmap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locationmap)) {
                $locationmap = str_replace('*', '%', $locationmap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LOCATIONMAP, $locationmap, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity('fooValue');   // WHERE Salinity = 'fooValue'
     * $query->filterBySalinity('%fooValue%'); // WHERE Salinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salinity)) {
                $salinity = str_replace('*', '%', $salinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::SALINITY, $salinity, $comparison);
    }

    /**
     * Filter the query on the RiverLength column
     *
     * Example usage:
     * <code>
     * $query->filterByRiverlength(1234); // WHERE RiverLength = 1234
     * $query->filterByRiverlength(array(12, 34)); // WHERE RiverLength IN (12, 34)
     * $query->filterByRiverlength(array('min' => 12)); // WHERE RiverLength >= 12
     * $query->filterByRiverlength(array('max' => 12)); // WHERE RiverLength <= 12
     * </code>
     *
     * @param     mixed $riverlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByRiverlength($riverlength = null, $comparison = null)
    {
        if (is_array($riverlength)) {
            $useMinMax = false;
            if (isset($riverlength['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::RIVERLENGTH, $riverlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($riverlength['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::RIVERLENGTH, $riverlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::RIVERLENGTH, $riverlength, $comparison);
    }

    /**
     * Filter the query on the Area column
     *
     * Example usage:
     * <code>
     * $query->filterByArea(1234); // WHERE Area = 1234
     * $query->filterByArea(array(12, 34)); // WHERE Area IN (12, 34)
     * $query->filterByArea(array('min' => 12)); // WHERE Area >= 12
     * $query->filterByArea(array('max' => 12)); // WHERE Area <= 12
     * </code>
     *
     * @param     mixed $area The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::AREA, $area, $comparison);
    }

    /**
     * Filter the query on the SizeRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySizeref(1234); // WHERE SizeRef = 1234
     * $query->filterBySizeref(array(12, 34)); // WHERE SizeRef IN (12, 34)
     * $query->filterBySizeref(array('min' => 12)); // WHERE SizeRef >= 12
     * $query->filterBySizeref(array('max' => 12)); // WHERE SizeRef <= 12
     * </code>
     *
     * @param     mixed $sizeref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterBySizeref($sizeref = null, $comparison = null)
    {
        if (is_array($sizeref)) {
            $useMinMax = false;
            if (isset($sizeref['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::SIZEREF, $sizeref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sizeref['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::SIZEREF, $sizeref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::SIZEREF, $sizeref, $comparison);
    }

    /**
     * Filter the query on the DrainageArea column
     *
     * Example usage:
     * <code>
     * $query->filterByDrainagearea(1234); // WHERE DrainageArea = 1234
     * $query->filterByDrainagearea(array(12, 34)); // WHERE DrainageArea IN (12, 34)
     * $query->filterByDrainagearea(array('min' => 12)); // WHERE DrainageArea >= 12
     * $query->filterByDrainagearea(array('max' => 12)); // WHERE DrainageArea <= 12
     * </code>
     *
     * @param     mixed $drainagearea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByDrainagearea($drainagearea = null, $comparison = null)
    {
        if (is_array($drainagearea)) {
            $useMinMax = false;
            if (isset($drainagearea['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::DRAINAGEAREA, $drainagearea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($drainagearea['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::DRAINAGEAREA, $drainagearea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::DRAINAGEAREA, $drainagearea, $comparison);
    }

    /**
     * Filter the query on the NorthernLat column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlat(1234); // WHERE NorthernLat = 1234
     * $query->filterByNorthernlat(array(12, 34)); // WHERE NorthernLat IN (12, 34)
     * $query->filterByNorthernlat(array('min' => 12)); // WHERE NorthernLat >= 12
     * $query->filterByNorthernlat(array('max' => 12)); // WHERE NorthernLat <= 12
     * </code>
     *
     * @param     mixed $northernlat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlat($northernlat = null, $comparison = null)
    {
        if (is_array($northernlat)) {
            $useMinMax = false;
            if (isset($northernlat['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::NORTHERNLAT, $northernlat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernlat['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::NORTHERNLAT, $northernlat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::NORTHERNLAT, $northernlat, $comparison);
    }

    /**
     * Filter the query on the NrangeNS column
     *
     * Example usage:
     * <code>
     * $query->filterByNrangens('fooValue');   // WHERE NrangeNS = 'fooValue'
     * $query->filterByNrangens('%fooValue%'); // WHERE NrangeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nrangens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByNrangens($nrangens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nrangens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nrangens)) {
                $nrangens = str_replace('*', '%', $nrangens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::NRANGENS, $nrangens, $comparison);
    }

    /**
     * Filter the query on the SouthernLat column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlat(1234); // WHERE SouthernLat = 1234
     * $query->filterBySouthernlat(array(12, 34)); // WHERE SouthernLat IN (12, 34)
     * $query->filterBySouthernlat(array('min' => 12)); // WHERE SouthernLat >= 12
     * $query->filterBySouthernlat(array('max' => 12)); // WHERE SouthernLat <= 12
     * </code>
     *
     * @param     mixed $southernlat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlat($southernlat = null, $comparison = null)
    {
        if (is_array($southernlat)) {
            $useMinMax = false;
            if (isset($southernlat['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::SOUTHERNLAT, $southernlat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southernlat['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::SOUTHERNLAT, $southernlat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::SOUTHERNLAT, $southernlat, $comparison);
    }

    /**
     * Filter the query on the SrangeNS column
     *
     * Example usage:
     * <code>
     * $query->filterBySrangens('fooValue');   // WHERE SrangeNS = 'fooValue'
     * $query->filterBySrangens('%fooValue%'); // WHERE SrangeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $srangens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterBySrangens($srangens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($srangens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $srangens)) {
                $srangens = str_replace('*', '%', $srangens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::SRANGENS, $srangens, $comparison);
    }

    /**
     * Filter the query on the WesternLat column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlat(1234); // WHERE WesternLat = 1234
     * $query->filterByWesternlat(array(12, 34)); // WHERE WesternLat IN (12, 34)
     * $query->filterByWesternlat(array('min' => 12)); // WHERE WesternLat >= 12
     * $query->filterByWesternlat(array('max' => 12)); // WHERE WesternLat <= 12
     * </code>
     *
     * @param     mixed $westernlat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByWesternlat($westernlat = null, $comparison = null)
    {
        if (is_array($westernlat)) {
            $useMinMax = false;
            if (isset($westernlat['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::WESTERNLAT, $westernlat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernlat['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::WESTERNLAT, $westernlat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::WESTERNLAT, $westernlat, $comparison);
    }

    /**
     * Filter the query on the WrangeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByWrangeew('fooValue');   // WHERE WrangeEW = 'fooValue'
     * $query->filterByWrangeew('%fooValue%'); // WHERE WrangeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wrangeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByWrangeew($wrangeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wrangeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wrangeew)) {
                $wrangeew = str_replace('*', '%', $wrangeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::WRANGEEW, $wrangeew, $comparison);
    }

    /**
     * Filter the query on the EasternLat column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlat(1234); // WHERE EasternLat = 1234
     * $query->filterByEasternlat(array(12, 34)); // WHERE EasternLat IN (12, 34)
     * $query->filterByEasternlat(array('min' => 12)); // WHERE EasternLat >= 12
     * $query->filterByEasternlat(array('max' => 12)); // WHERE EasternLat <= 12
     * </code>
     *
     * @param     mixed $easternlat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEasternlat($easternlat = null, $comparison = null)
    {
        if (is_array($easternlat)) {
            $useMinMax = false;
            if (isset($easternlat['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::EASTERNLAT, $easternlat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternlat['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::EASTERNLAT, $easternlat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::EASTERNLAT, $easternlat, $comparison);
    }

    /**
     * Filter the query on the ErangeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByErangeew('fooValue');   // WHERE ErangeEW = 'fooValue'
     * $query->filterByErangeew('%fooValue%'); // WHERE ErangeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $erangeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByErangeew($erangeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($erangeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $erangeew)) {
                $erangeew = str_replace('*', '%', $erangeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ERANGEEW, $erangeew, $comparison);
    }

    /**
     * Filter the query on the Climate column
     *
     * Example usage:
     * <code>
     * $query->filterByClimate('fooValue');   // WHERE Climate = 'fooValue'
     * $query->filterByClimate('%fooValue%'); // WHERE Climate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $climate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByClimate($climate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($climate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $climate)) {
                $climate = str_replace('*', '%', $climate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::CLIMATE, $climate, $comparison);
    }

    /**
     * Filter the query on the Polar column
     *
     * Example usage:
     * <code>
     * $query->filterByPolar(1234); // WHERE Polar = 1234
     * $query->filterByPolar(array(12, 34)); // WHERE Polar IN (12, 34)
     * $query->filterByPolar(array('min' => 12)); // WHERE Polar >= 12
     * $query->filterByPolar(array('max' => 12)); // WHERE Polar <= 12
     * </code>
     *
     * @param     mixed $polar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByPolar($polar = null, $comparison = null)
    {
        if (is_array($polar)) {
            $useMinMax = false;
            if (isset($polar['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::POLAR, $polar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($polar['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::POLAR, $polar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::POLAR, $polar, $comparison);
    }

    /**
     * Filter the query on the Boreal column
     *
     * Example usage:
     * <code>
     * $query->filterByBoreal(1234); // WHERE Boreal = 1234
     * $query->filterByBoreal(array(12, 34)); // WHERE Boreal IN (12, 34)
     * $query->filterByBoreal(array('min' => 12)); // WHERE Boreal >= 12
     * $query->filterByBoreal(array('max' => 12)); // WHERE Boreal <= 12
     * </code>
     *
     * @param     mixed $boreal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByBoreal($boreal = null, $comparison = null)
    {
        if (is_array($boreal)) {
            $useMinMax = false;
            if (isset($boreal['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::BOREAL, $boreal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boreal['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::BOREAL, $boreal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::BOREAL, $boreal, $comparison);
    }

    /**
     * Filter the query on the Temperate column
     *
     * Example usage:
     * <code>
     * $query->filterByTemperate(1234); // WHERE Temperate = 1234
     * $query->filterByTemperate(array(12, 34)); // WHERE Temperate IN (12, 34)
     * $query->filterByTemperate(array('min' => 12)); // WHERE Temperate >= 12
     * $query->filterByTemperate(array('max' => 12)); // WHERE Temperate <= 12
     * </code>
     *
     * @param     mixed $temperate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTemperate($temperate = null, $comparison = null)
    {
        if (is_array($temperate)) {
            $useMinMax = false;
            if (isset($temperate['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TEMPERATE, $temperate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperate['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TEMPERATE, $temperate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TEMPERATE, $temperate, $comparison);
    }

    /**
     * Filter the query on the Subtropical column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtropical(1234); // WHERE Subtropical = 1234
     * $query->filterBySubtropical(array(12, 34)); // WHERE Subtropical IN (12, 34)
     * $query->filterBySubtropical(array('min' => 12)); // WHERE Subtropical >= 12
     * $query->filterBySubtropical(array('max' => 12)); // WHERE Subtropical <= 12
     * </code>
     *
     * @param     mixed $subtropical The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterBySubtropical($subtropical = null, $comparison = null)
    {
        if (is_array($subtropical)) {
            $useMinMax = false;
            if (isset($subtropical['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::SUBTROPICAL, $subtropical['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtropical['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::SUBTROPICAL, $subtropical['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::SUBTROPICAL, $subtropical, $comparison);
    }

    /**
     * Filter the query on the Tropical column
     *
     * Example usage:
     * <code>
     * $query->filterByTropical(1234); // WHERE Tropical = 1234
     * $query->filterByTropical(array(12, 34)); // WHERE Tropical IN (12, 34)
     * $query->filterByTropical(array('min' => 12)); // WHERE Tropical >= 12
     * $query->filterByTropical(array('max' => 12)); // WHERE Tropical <= 12
     * </code>
     *
     * @param     mixed $tropical The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTropical($tropical = null, $comparison = null)
    {
        if (is_array($tropical)) {
            $useMinMax = false;
            if (isset($tropical['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TROPICAL, $tropical['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tropical['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TROPICAL, $tropical['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TROPICAL, $tropical, $comparison);
    }

    /**
     * Filter the query on the AverageDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByAveragedepth(1234); // WHERE AverageDepth = 1234
     * $query->filterByAveragedepth(array(12, 34)); // WHERE AverageDepth IN (12, 34)
     * $query->filterByAveragedepth(array('min' => 12)); // WHERE AverageDepth >= 12
     * $query->filterByAveragedepth(array('max' => 12)); // WHERE AverageDepth <= 12
     * </code>
     *
     * @param     mixed $averagedepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByAveragedepth($averagedepth = null, $comparison = null)
    {
        if (is_array($averagedepth)) {
            $useMinMax = false;
            if (isset($averagedepth['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::AVERAGEDEPTH, $averagedepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($averagedepth['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::AVERAGEDEPTH, $averagedepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::AVERAGEDEPTH, $averagedepth, $comparison);
    }

    /**
     * Filter the query on the MaxDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxdepth(1234); // WHERE MaxDepth = 1234
     * $query->filterByMaxdepth(array(12, 34)); // WHERE MaxDepth IN (12, 34)
     * $query->filterByMaxdepth(array('min' => 12)); // WHERE MaxDepth >= 12
     * $query->filterByMaxdepth(array('max' => 12)); // WHERE MaxDepth <= 12
     * </code>
     *
     * @param     mixed $maxdepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByMaxdepth($maxdepth = null, $comparison = null)
    {
        if (is_array($maxdepth)) {
            $useMinMax = false;
            if (isset($maxdepth['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::MAXDEPTH, $maxdepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxdepth['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::MAXDEPTH, $maxdepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::MAXDEPTH, $maxdepth, $comparison);
    }

    /**
     * Filter the query on the DepthRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthref(1234); // WHERE DepthRef = 1234
     * $query->filterByDepthref(array(12, 34)); // WHERE DepthRef IN (12, 34)
     * $query->filterByDepthref(array('min' => 12)); // WHERE DepthRef >= 12
     * $query->filterByDepthref(array('max' => 12)); // WHERE DepthRef <= 12
     * </code>
     *
     * @param     mixed $depthref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByDepthref($depthref = null, $comparison = null)
    {
        if (is_array($depthref)) {
            $useMinMax = false;
            if (isset($depthref['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::DEPTHREF, $depthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthref['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::DEPTHREF, $depthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::DEPTHREF, $depthref, $comparison);
    }

    /**
     * Filter the query on the TempSurface column
     *
     * Example usage:
     * <code>
     * $query->filterByTempsurface(1234); // WHERE TempSurface = 1234
     * $query->filterByTempsurface(array(12, 34)); // WHERE TempSurface IN (12, 34)
     * $query->filterByTempsurface(array('min' => 12)); // WHERE TempSurface >= 12
     * $query->filterByTempsurface(array('max' => 12)); // WHERE TempSurface <= 12
     * </code>
     *
     * @param     mixed $tempsurface The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTempsurface($tempsurface = null, $comparison = null)
    {
        if (is_array($tempsurface)) {
            $useMinMax = false;
            if (isset($tempsurface['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TEMPSURFACE, $tempsurface['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempsurface['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TEMPSURFACE, $tempsurface['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TEMPSURFACE, $tempsurface, $comparison);
    }

    /**
     * Filter the query on the TempSurfaceMap column
     *
     * Example usage:
     * <code>
     * $query->filterByTempsurfacemap('fooValue');   // WHERE TempSurfaceMap = 'fooValue'
     * $query->filterByTempsurfacemap('%fooValue%'); // WHERE TempSurfaceMap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tempsurfacemap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTempsurfacemap($tempsurfacemap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tempsurfacemap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tempsurfacemap)) {
                $tempsurfacemap = str_replace('*', '%', $tempsurfacemap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TEMPSURFACEMAP, $tempsurfacemap, $comparison);
    }

    /**
     * Filter the query on the TempDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByTempdepth(1234); // WHERE TempDepth = 1234
     * $query->filterByTempdepth(array(12, 34)); // WHERE TempDepth IN (12, 34)
     * $query->filterByTempdepth(array('min' => 12)); // WHERE TempDepth >= 12
     * $query->filterByTempdepth(array('max' => 12)); // WHERE TempDepth <= 12
     * </code>
     *
     * @param     mixed $tempdepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTempdepth($tempdepth = null, $comparison = null)
    {
        if (is_array($tempdepth)) {
            $useMinMax = false;
            if (isset($tempdepth['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TEMPDEPTH, $tempdepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempdepth['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TEMPDEPTH, $tempdepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TEMPDEPTH, $tempdepth, $comparison);
    }

    /**
     * Filter the query on the TempDepthMap column
     *
     * Example usage:
     * <code>
     * $query->filterByTempdepthmap('fooValue');   // WHERE TempDepthMap = 'fooValue'
     * $query->filterByTempdepthmap('%fooValue%'); // WHERE TempDepthMap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tempdepthmap The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTempdepthmap($tempdepthmap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tempdepthmap)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tempdepthmap)) {
                $tempdepthmap = str_replace('*', '%', $tempdepthmap);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TEMPDEPTHMAP, $tempdepthmap, $comparison);
    }

    /**
     * Filter the query on the Description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE Description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE Description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the TotalCount column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalcount(1234); // WHERE TotalCount = 1234
     * $query->filterByTotalcount(array(12, 34)); // WHERE TotalCount IN (12, 34)
     * $query->filterByTotalcount(array('min' => 12)); // WHERE TotalCount >= 12
     * $query->filterByTotalcount(array('max' => 12)); // WHERE TotalCount <= 12
     * </code>
     *
     * @param     mixed $totalcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTotalcount($totalcount = null, $comparison = null)
    {
        if (is_array($totalcount)) {
            $useMinMax = false;
            if (isset($totalcount['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALCOUNT, $totalcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalcount['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALCOUNT, $totalcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TOTALCOUNT, $totalcount, $comparison);
    }

    /**
     * Filter the query on the TotalFamCount column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalfamcount(1234); // WHERE TotalFamCount = 1234
     * $query->filterByTotalfamcount(array(12, 34)); // WHERE TotalFamCount IN (12, 34)
     * $query->filterByTotalfamcount(array('min' => 12)); // WHERE TotalFamCount >= 12
     * $query->filterByTotalfamcount(array('max' => 12)); // WHERE TotalFamCount <= 12
     * </code>
     *
     * @param     mixed $totalfamcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTotalfamcount($totalfamcount = null, $comparison = null)
    {
        if (is_array($totalfamcount)) {
            $useMinMax = false;
            if (isset($totalfamcount['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALFAMCOUNT, $totalfamcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalfamcount['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALFAMCOUNT, $totalfamcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TOTALFAMCOUNT, $totalfamcount, $comparison);
    }

    /**
     * Filter the query on the TotalComplete column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalcomplete(1234); // WHERE TotalComplete = 1234
     * $query->filterByTotalcomplete(array(12, 34)); // WHERE TotalComplete IN (12, 34)
     * $query->filterByTotalcomplete(array('min' => 12)); // WHERE TotalComplete >= 12
     * $query->filterByTotalcomplete(array('max' => 12)); // WHERE TotalComplete <= 12
     * </code>
     *
     * @param     mixed $totalcomplete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTotalcomplete($totalcomplete = null, $comparison = null)
    {
        if (is_array($totalcomplete)) {
            $useMinMax = false;
            if (isset($totalcomplete['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALCOMPLETE, $totalcomplete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalcomplete['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALCOMPLETE, $totalcomplete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TOTALCOMPLETE, $totalcomplete, $comparison);
    }

    /**
     * Filter the query on the TotalLit column
     *
     * Example usage:
     * <code>
     * $query->filterByTotallit(1234); // WHERE TotalLit = 1234
     * $query->filterByTotallit(array(12, 34)); // WHERE TotalLit IN (12, 34)
     * $query->filterByTotallit(array('min' => 12)); // WHERE TotalLit >= 12
     * $query->filterByTotallit(array('max' => 12)); // WHERE TotalLit <= 12
     * </code>
     *
     * @param     mixed $totallit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTotallit($totallit = null, $comparison = null)
    {
        if (is_array($totallit)) {
            $useMinMax = false;
            if (isset($totallit['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALLIT, $totallit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totallit['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALLIT, $totallit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TOTALLIT, $totallit, $comparison);
    }

    /**
     * Filter the query on the TotalFamLit column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalfamlit(1234); // WHERE TotalFamLit = 1234
     * $query->filterByTotalfamlit(array(12, 34)); // WHERE TotalFamLit IN (12, 34)
     * $query->filterByTotalfamlit(array('min' => 12)); // WHERE TotalFamLit >= 12
     * $query->filterByTotalfamlit(array('max' => 12)); // WHERE TotalFamLit <= 12
     * </code>
     *
     * @param     mixed $totalfamlit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTotalfamlit($totalfamlit = null, $comparison = null)
    {
        if (is_array($totalfamlit)) {
            $useMinMax = false;
            if (isset($totalfamlit['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALFAMLIT, $totalfamlit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalfamlit['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALFAMLIT, $totalfamlit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TOTALFAMLIT, $totalfamlit, $comparison);
    }

    /**
     * Filter the query on the TotalRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalref(1234); // WHERE TotalRef = 1234
     * $query->filterByTotalref(array(12, 34)); // WHERE TotalRef IN (12, 34)
     * $query->filterByTotalref(array('min' => 12)); // WHERE TotalRef >= 12
     * $query->filterByTotalref(array('max' => 12)); // WHERE TotalRef <= 12
     * </code>
     *
     * @param     mixed $totalref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTotalref($totalref = null, $comparison = null)
    {
        if (is_array($totalref)) {
            $useMinMax = false;
            if (isset($totalref['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALREF, $totalref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalref['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TOTALREF, $totalref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TOTALREF, $totalref, $comparison);
    }

    /**
     * Filter the query on the UseFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByUseflag(1234); // WHERE UseFlag = 1234
     * $query->filterByUseflag(array(12, 34)); // WHERE UseFlag IN (12, 34)
     * $query->filterByUseflag(array('min' => 12)); // WHERE UseFlag >= 12
     * $query->filterByUseflag(array('max' => 12)); // WHERE UseFlag <= 12
     * </code>
     *
     * @param     mixed $useflag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByUseflag($useflag = null, $comparison = null)
    {
        if (is_array($useflag)) {
            $useMinMax = false;
            if (isset($useflag['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::USEFLAG, $useflag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($useflag['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::USEFLAG, $useflag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::USEFLAG, $useflag, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EcosystemrefPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the LastUpdate column
     *
     * Example usage:
     * <code>
     * $query->filterByLastupdate('2011-03-14'); // WHERE LastUpdate = '2011-03-14'
     * $query->filterByLastupdate('now'); // WHERE LastUpdate = '2011-03-14'
     * $query->filterByLastupdate(array('max' => 'yesterday')); // WHERE LastUpdate < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastupdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLastupdate($lastupdate = null, $comparison = null)
    {
        if (is_array($lastupdate)) {
            $useMinMax = false;
            if (isset($lastupdate['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::LASTUPDATE, $lastupdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastupdate['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::LASTUPDATE, $lastupdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LASTUPDATE, $lastupdate, $comparison);
    }

    /**
     * Filter the query on the LatDegFill column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdegfill(1234); // WHERE LatDegFill = 1234
     * $query->filterByLatdegfill(array(12, 34)); // WHERE LatDegFill IN (12, 34)
     * $query->filterByLatdegfill(array('min' => 12)); // WHERE LatDegFill >= 12
     * $query->filterByLatdegfill(array('max' => 12)); // WHERE LatDegFill <= 12
     * </code>
     *
     * @param     mixed $latdegfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLatdegfill($latdegfill = null, $comparison = null)
    {
        if (is_array($latdegfill)) {
            $useMinMax = false;
            if (isset($latdegfill['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::LATDEGFILL, $latdegfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdegfill['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::LATDEGFILL, $latdegfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LATDEGFILL, $latdegfill, $comparison);
    }

    /**
     * Filter the query on the LatMinFill column
     *
     * Example usage:
     * <code>
     * $query->filterByLatminfill(1234); // WHERE LatMinFill = 1234
     * $query->filterByLatminfill(array(12, 34)); // WHERE LatMinFill IN (12, 34)
     * $query->filterByLatminfill(array('min' => 12)); // WHERE LatMinFill >= 12
     * $query->filterByLatminfill(array('max' => 12)); // WHERE LatMinFill <= 12
     * </code>
     *
     * @param     mixed $latminfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLatminfill($latminfill = null, $comparison = null)
    {
        if (is_array($latminfill)) {
            $useMinMax = false;
            if (isset($latminfill['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::LATMINFILL, $latminfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latminfill['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::LATMINFILL, $latminfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LATMINFILL, $latminfill, $comparison);
    }

    /**
     * Filter the query on the NorthSouthFill column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthfill('fooValue');   // WHERE NorthSouthFill = 'fooValue'
     * $query->filterByNorthsouthfill('%fooValue%'); // WHERE NorthSouthFill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthfill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByNorthsouthfill($northsouthfill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthfill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthfill)) {
                $northsouthfill = str_replace('*', '%', $northsouthfill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::NORTHSOUTHFILL, $northsouthfill, $comparison);
    }

    /**
     * Filter the query on the LongDegFill column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdegfill(1234); // WHERE LongDegFill = 1234
     * $query->filterByLongdegfill(array(12, 34)); // WHERE LongDegFill IN (12, 34)
     * $query->filterByLongdegfill(array('min' => 12)); // WHERE LongDegFill >= 12
     * $query->filterByLongdegfill(array('max' => 12)); // WHERE LongDegFill <= 12
     * </code>
     *
     * @param     mixed $longdegfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLongdegfill($longdegfill = null, $comparison = null)
    {
        if (is_array($longdegfill)) {
            $useMinMax = false;
            if (isset($longdegfill['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::LONGDEGFILL, $longdegfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdegfill['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::LONGDEGFILL, $longdegfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LONGDEGFILL, $longdegfill, $comparison);
    }

    /**
     * Filter the query on the LongMinFill column
     *
     * Example usage:
     * <code>
     * $query->filterByLongminfill(1234); // WHERE LongMinFill = 1234
     * $query->filterByLongminfill(array(12, 34)); // WHERE LongMinFill IN (12, 34)
     * $query->filterByLongminfill(array('min' => 12)); // WHERE LongMinFill >= 12
     * $query->filterByLongminfill(array('max' => 12)); // WHERE LongMinFill <= 12
     * </code>
     *
     * @param     mixed $longminfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByLongminfill($longminfill = null, $comparison = null)
    {
        if (is_array($longminfill)) {
            $useMinMax = false;
            if (isset($longminfill['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::LONGMINFILL, $longminfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longminfill['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::LONGMINFILL, $longminfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::LONGMINFILL, $longminfill, $comparison);
    }

    /**
     * Filter the query on the EastWestFill column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwestfill('fooValue');   // WHERE EastWestFill = 'fooValue'
     * $query->filterByEastwestfill('%fooValue%'); // WHERE EastWestFill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwestfill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEastwestfill($eastwestfill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwestfill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwestfill)) {
                $eastwestfill = str_replace('*', '%', $eastwestfill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::EASTWESTFILL, $eastwestfill, $comparison);
    }

    /**
     * Filter the query on the EcosystemURL1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemurl1('fooValue');   // WHERE EcosystemURL1 = 'fooValue'
     * $query->filterByEcosystemurl1('%fooValue%'); // WHERE EcosystemURL1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemurl1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemurl1($ecosystemurl1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemurl1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemurl1)) {
                $ecosystemurl1 = str_replace('*', '%', $ecosystemurl1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMURL1, $ecosystemurl1, $comparison);
    }

    /**
     * Filter the query on the EcosystemURL2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemurl2('fooValue');   // WHERE EcosystemURL2 = 'fooValue'
     * $query->filterByEcosystemurl2('%fooValue%'); // WHERE EcosystemURL2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemurl2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemurl2($ecosystemurl2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemurl2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemurl2)) {
                $ecosystemurl2 = str_replace('*', '%', $ecosystemurl2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMURL2, $ecosystemurl2, $comparison);
    }

    /**
     * Filter the query on the EcosystemURL3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemurl3('fooValue');   // WHERE EcosystemURL3 = 'fooValue'
     * $query->filterByEcosystemurl3('%fooValue%'); // WHERE EcosystemURL3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemurl3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemurl3($ecosystemurl3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemurl3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemurl3)) {
                $ecosystemurl3 = str_replace('*', '%', $ecosystemurl3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMURL3, $ecosystemurl3, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ENTERED, $entered, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::MODIFIED, $modified, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::EXPERT, $expert, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_German column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameGerman('fooValue');   // WHERE EcosystemName_German = 'fooValue'
     * $query->filterByEcosystemnameGerman('%fooValue%'); // WHERE EcosystemName_German LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameGerman The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameGerman($ecosystemnameGerman = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameGerman)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameGerman)) {
                $ecosystemnameGerman = str_replace('*', '%', $ecosystemnameGerman);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_GERMAN, $ecosystemnameGerman, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Russian_original column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameRussianOriginal('fooValue');   // WHERE EcosystemName_Russian_original = 'fooValue'
     * $query->filterByEcosystemnameRussianOriginal('%fooValue%'); // WHERE EcosystemName_Russian_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameRussianOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameRussianOriginal($ecosystemnameRussianOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameRussianOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameRussianOriginal)) {
                $ecosystemnameRussianOriginal = str_replace('*', '%', $ecosystemnameRussianOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL, $ecosystemnameRussianOriginal, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Russian column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameRussian('fooValue');   // WHERE EcosystemName_Russian = 'fooValue'
     * $query->filterByEcosystemnameRussian('%fooValue%'); // WHERE EcosystemName_Russian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameRussian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameRussian($ecosystemnameRussian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameRussian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameRussian)) {
                $ecosystemnameRussian = str_replace('*', '%', $ecosystemnameRussian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN, $ecosystemnameRussian, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_French column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameFrench('fooValue');   // WHERE EcosystemName_French = 'fooValue'
     * $query->filterByEcosystemnameFrench('%fooValue%'); // WHERE EcosystemName_French LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameFrench The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameFrench($ecosystemnameFrench = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameFrench)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameFrench)) {
                $ecosystemnameFrench = str_replace('*', '%', $ecosystemnameFrench);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_FRENCH, $ecosystemnameFrench, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Chinese column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameChinese('fooValue');   // WHERE EcosystemName_Chinese = 'fooValue'
     * $query->filterByEcosystemnameChinese('%fooValue%'); // WHERE EcosystemName_Chinese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameChinese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameChinese($ecosystemnameChinese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameChinese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameChinese)) {
                $ecosystemnameChinese = str_replace('*', '%', $ecosystemnameChinese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE, $ecosystemnameChinese, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Dutch column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameDutch('fooValue');   // WHERE EcosystemName_Dutch = 'fooValue'
     * $query->filterByEcosystemnameDutch('%fooValue%'); // WHERE EcosystemName_Dutch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameDutch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameDutch($ecosystemnameDutch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameDutch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameDutch)) {
                $ecosystemnameDutch = str_replace('*', '%', $ecosystemnameDutch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_DUTCH, $ecosystemnameDutch, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Italian column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameItalian('fooValue');   // WHERE EcosystemName_Italian = 'fooValue'
     * $query->filterByEcosystemnameItalian('%fooValue%'); // WHERE EcosystemName_Italian LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameItalian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameItalian($ecosystemnameItalian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameItalian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameItalian)) {
                $ecosystemnameItalian = str_replace('*', '%', $ecosystemnameItalian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN, $ecosystemnameItalian, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Swedish column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameSwedish('fooValue');   // WHERE EcosystemName_Swedish = 'fooValue'
     * $query->filterByEcosystemnameSwedish('%fooValue%'); // WHERE EcosystemName_Swedish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameSwedish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameSwedish($ecosystemnameSwedish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameSwedish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameSwedish)) {
                $ecosystemnameSwedish = str_replace('*', '%', $ecosystemnameSwedish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH, $ecosystemnameSwedish, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Greek_original column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameGreekOriginal('fooValue');   // WHERE EcosystemName_Greek_original = 'fooValue'
     * $query->filterByEcosystemnameGreekOriginal('%fooValue%'); // WHERE EcosystemName_Greek_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameGreekOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameGreekOriginal($ecosystemnameGreekOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameGreekOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameGreekOriginal)) {
                $ecosystemnameGreekOriginal = str_replace('*', '%', $ecosystemnameGreekOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL, $ecosystemnameGreekOriginal, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Greek column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameGreek('fooValue');   // WHERE EcosystemName_Greek = 'fooValue'
     * $query->filterByEcosystemnameGreek('%fooValue%'); // WHERE EcosystemName_Greek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameGreek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameGreek($ecosystemnameGreek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameGreek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameGreek)) {
                $ecosystemnameGreek = str_replace('*', '%', $ecosystemnameGreek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_GREEK, $ecosystemnameGreek, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Portuguese column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnamePortuguese('fooValue');   // WHERE EcosystemName_Portuguese = 'fooValue'
     * $query->filterByEcosystemnamePortuguese('%fooValue%'); // WHERE EcosystemName_Portuguese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnamePortuguese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnamePortuguese($ecosystemnamePortuguese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnamePortuguese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnamePortuguese)) {
                $ecosystemnamePortuguese = str_replace('*', '%', $ecosystemnamePortuguese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE, $ecosystemnamePortuguese, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Spanish column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameSpanish('fooValue');   // WHERE EcosystemName_Spanish = 'fooValue'
     * $query->filterByEcosystemnameSpanish('%fooValue%'); // WHERE EcosystemName_Spanish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameSpanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameSpanish($ecosystemnameSpanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameSpanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameSpanish)) {
                $ecosystemnameSpanish = str_replace('*', '%', $ecosystemnameSpanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_SPANISH, $ecosystemnameSpanish, $comparison);
    }

    /**
     * Filter the query on the EcosystemName_Chinese_u column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemnameChineseU('fooValue');   // WHERE EcosystemName_Chinese_u = 'fooValue'
     * $query->filterByEcosystemnameChineseU('%fooValue%'); // WHERE EcosystemName_Chinese_u LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemnameChineseU The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByEcosystemnameChineseU($ecosystemnameChineseU = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemnameChineseU)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemnameChineseU)) {
                $ecosystemnameChineseU = str_replace('*', '%', $ecosystemnameChineseU);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U, $ecosystemnameChineseU, $comparison);
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
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EcosystemrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EcosystemrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosystemrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ecosystemref $ecosystemref Object to remove from the list of results
     *
     * @return EcosystemrefQuery The current query, for fluid interface
     */
    public function prune($ecosystemref = null)
    {
        if ($ecosystemref) {
            $this->addUsingAlias(EcosystemrefPeer::ECOSYSTEMNAME, $ecosystemref->getEcosystemname(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
