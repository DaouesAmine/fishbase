<?php


/**
 * Base class that represents a query for the 'popgrowth' table.
 *
 *
 *
 * @method PopgrowthQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method PopgrowthQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method PopgrowthQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PopgrowthQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method PopgrowthQuery orderByPopgrowthref($order = Criteria::ASC) Order by the PopGrowthRef column
 * @method PopgrowthQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method PopgrowthQuery orderByData($order = Criteria::ASC) Order by the Data column
 * @method PopgrowthQuery orderByDatasourceref($order = Criteria::ASC) Order by the DataSourceRef column
 * @method PopgrowthQuery orderByLoo($order = Criteria::ASC) Order by the Loo column
 * @method PopgrowthQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method PopgrowthQuery orderByR2($order = Criteria::ASC) Order by the r2 column
 * @method PopgrowthQuery orderBySeLoo($order = Criteria::ASC) Order by the SE_Loo column
 * @method PopgrowthQuery orderBySdLoo($order = Criteria::ASC) Order by the SD_Loo column
 * @method PopgrowthQuery orderByLclLoo($order = Criteria::ASC) Order by the LCL_Loo column
 * @method PopgrowthQuery orderByUclLoo($order = Criteria::ASC) Order by the UCL_Loo column
 * @method PopgrowthQuery orderByAssumeddistloo($order = Criteria::ASC) Order by the AssumedDistLoo column
 * @method PopgrowthQuery orderByTlinfinity($order = Criteria::ASC) Order by the TLinfinity column
 * @method PopgrowthQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method PopgrowthQuery orderBySeK($order = Criteria::ASC) Order by the SE_K column
 * @method PopgrowthQuery orderBySdK($order = Criteria::ASC) Order by the SD_K column
 * @method PopgrowthQuery orderByLclK($order = Criteria::ASC) Order by the LCL_K column
 * @method PopgrowthQuery orderByUclK($order = Criteria::ASC) Order by the UCL_K column
 * @method PopgrowthQuery orderByAssumeddistk($order = Criteria::ASC) Order by the AssumedDistK column
 * @method PopgrowthQuery orderByTo($order = Criteria::ASC) Order by the to column
 * @method PopgrowthQuery orderBySeTo($order = Criteria::ASC) Order by the SE_to column
 * @method PopgrowthQuery orderBySdTo($order = Criteria::ASC) Order by the SD_to column
 * @method PopgrowthQuery orderByLclTo($order = Criteria::ASC) Order by the LCL_to column
 * @method PopgrowthQuery orderByUclTo($order = Criteria::ASC) Order by the UCL_to column
 * @method PopgrowthQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method PopgrowthQuery orderByMethodgrowth($order = Criteria::ASC) Order by the MethodGrowth column
 * @method PopgrowthQuery orderByWinfinity($order = Criteria::ASC) Order by the Winfinity column
 * @method PopgrowthQuery orderByLinflmax($order = Criteria::ASC) Order by the LinfLmax column
 * @method PopgrowthQuery orderByAuxim($order = Criteria::ASC) Order by the Auxim column
 * @method PopgrowthQuery orderByLogklogloo($order = Criteria::ASC) Order by the LogKLogLoo column
 * @method PopgrowthQuery orderBySourcewinfinity($order = Criteria::ASC) Order by the SourceWinfinity column
 * @method PopgrowthQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method PopgrowthQuery orderByC($order = Criteria::ASC) Order by the C column
 * @method PopgrowthQuery orderByTmax($order = Criteria::ASC) Order by the tmax column
 * @method PopgrowthQuery orderByTmaxref($order = Criteria::ASC) Order by the tmaxRef column
 * @method PopgrowthQuery orderByTm($order = Criteria::ASC) Order by the tm column
 * @method PopgrowthQuery orderByM($order = Criteria::ASC) Order by the M column
 * @method PopgrowthQuery orderByMethodm($order = Criteria::ASC) Order by the MethodM column
 * @method PopgrowthQuery orderByMquality($order = Criteria::ASC) Order by the Mquality column
 * @method PopgrowthQuery orderByMref($order = Criteria::ASC) Order by the MRef column
 * @method PopgrowthQuery orderByNumberM($order = Criteria::ASC) Order by the Number_M column
 * @method PopgrowthQuery orderByR2M($order = Criteria::ASC) Order by the r2_M column
 * @method PopgrowthQuery orderBySeM($order = Criteria::ASC) Order by the SE_M column
 * @method PopgrowthQuery orderBySdM($order = Criteria::ASC) Order by the SD_M column
 * @method PopgrowthQuery orderByLclM($order = Criteria::ASC) Order by the LCL_M column
 * @method PopgrowthQuery orderByUclM($order = Criteria::ASC) Order by the UCL_M column
 * @method PopgrowthQuery orderByAssumeddistm($order = Criteria::ASC) Order by the AssumedDistM column
 * @method PopgrowthQuery orderByLm($order = Criteria::ASC) Order by the Lm column
 * @method PopgrowthQuery orderByLmloo($order = Criteria::ASC) Order by the LmLoo column
 * @method PopgrowthQuery orderByLmsex($order = Criteria::ASC) Order by the LmSex column
 * @method PopgrowthQuery orderByTypelm($order = Criteria::ASC) Order by the TypeLm column
 * @method PopgrowthQuery orderByUnsexedref($order = Criteria::ASC) Order by the unsexedRef column
 * @method PopgrowthQuery orderByLmmale($order = Criteria::ASC) Order by the LmMale column
 * @method PopgrowthQuery orderByLmloomale($order = Criteria::ASC) Order by the LmLooMale column
 * @method PopgrowthQuery orderByLmfemale($order = Criteria::ASC) Order by the LmFemale column
 * @method PopgrowthQuery orderByLmloofemale($order = Criteria::ASC) Order by the LmLooFemale column
 * @method PopgrowthQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PopgrowthQuery orderByYearstart($order = Criteria::ASC) Order by the YearStart column
 * @method PopgrowthQuery orderByYearend($order = Criteria::ASC) Order by the YearEnd column
 * @method PopgrowthQuery orderByYearremark($order = Criteria::ASC) Order by the YearRemark column
 * @method PopgrowthQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PopgrowthQuery orderByGrowthenviron($order = Criteria::ASC) Order by the GrowthEnviron column
 * @method PopgrowthQuery orderByTemperature($order = Criteria::ASC) Order by the Temperature column
 * @method PopgrowthQuery orderByDeltat($order = Criteria::ASC) Order by the DeltaT column
 * @method PopgrowthQuery orderByTempref($order = Criteria::ASC) Order by the TempRef column
 * @method PopgrowthQuery orderByRm($order = Criteria::ASC) Order by the Rm column
 * @method PopgrowthQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method PopgrowthQuery orderByComment2($order = Criteria::ASC) Order by the Comment2 column
 * @method PopgrowthQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PopgrowthQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PopgrowthQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PopgrowthQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PopgrowthQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PopgrowthQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PopgrowthQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PopgrowthQuery groupByAutoctr() Group by the AutoCtr column
 * @method PopgrowthQuery groupByStockcode() Group by the StockCode column
 * @method PopgrowthQuery groupBySpeccode() Group by the SpecCode column
 * @method PopgrowthQuery groupByECode() Group by the E_CODE column
 * @method PopgrowthQuery groupByPopgrowthref() Group by the PopGrowthRef column
 * @method PopgrowthQuery groupBySex() Group by the Sex column
 * @method PopgrowthQuery groupByData() Group by the Data column
 * @method PopgrowthQuery groupByDatasourceref() Group by the DataSourceRef column
 * @method PopgrowthQuery groupByLoo() Group by the Loo column
 * @method PopgrowthQuery groupByNumber() Group by the Number column
 * @method PopgrowthQuery groupByR2() Group by the r2 column
 * @method PopgrowthQuery groupBySeLoo() Group by the SE_Loo column
 * @method PopgrowthQuery groupBySdLoo() Group by the SD_Loo column
 * @method PopgrowthQuery groupByLclLoo() Group by the LCL_Loo column
 * @method PopgrowthQuery groupByUclLoo() Group by the UCL_Loo column
 * @method PopgrowthQuery groupByAssumeddistloo() Group by the AssumedDistLoo column
 * @method PopgrowthQuery groupByTlinfinity() Group by the TLinfinity column
 * @method PopgrowthQuery groupByK() Group by the K column
 * @method PopgrowthQuery groupBySeK() Group by the SE_K column
 * @method PopgrowthQuery groupBySdK() Group by the SD_K column
 * @method PopgrowthQuery groupByLclK() Group by the LCL_K column
 * @method PopgrowthQuery groupByUclK() Group by the UCL_K column
 * @method PopgrowthQuery groupByAssumeddistk() Group by the AssumedDistK column
 * @method PopgrowthQuery groupByTo() Group by the to column
 * @method PopgrowthQuery groupBySeTo() Group by the SE_to column
 * @method PopgrowthQuery groupBySdTo() Group by the SD_to column
 * @method PopgrowthQuery groupByLclTo() Group by the LCL_to column
 * @method PopgrowthQuery groupByUclTo() Group by the UCL_to column
 * @method PopgrowthQuery groupByType() Group by the Type column
 * @method PopgrowthQuery groupByMethodgrowth() Group by the MethodGrowth column
 * @method PopgrowthQuery groupByWinfinity() Group by the Winfinity column
 * @method PopgrowthQuery groupByLinflmax() Group by the LinfLmax column
 * @method PopgrowthQuery groupByAuxim() Group by the Auxim column
 * @method PopgrowthQuery groupByLogklogloo() Group by the LogKLogLoo column
 * @method PopgrowthQuery groupBySourcewinfinity() Group by the SourceWinfinity column
 * @method PopgrowthQuery groupByB() Group by the b column
 * @method PopgrowthQuery groupByC() Group by the C column
 * @method PopgrowthQuery groupByTmax() Group by the tmax column
 * @method PopgrowthQuery groupByTmaxref() Group by the tmaxRef column
 * @method PopgrowthQuery groupByTm() Group by the tm column
 * @method PopgrowthQuery groupByM() Group by the M column
 * @method PopgrowthQuery groupByMethodm() Group by the MethodM column
 * @method PopgrowthQuery groupByMquality() Group by the Mquality column
 * @method PopgrowthQuery groupByMref() Group by the MRef column
 * @method PopgrowthQuery groupByNumberM() Group by the Number_M column
 * @method PopgrowthQuery groupByR2M() Group by the r2_M column
 * @method PopgrowthQuery groupBySeM() Group by the SE_M column
 * @method PopgrowthQuery groupBySdM() Group by the SD_M column
 * @method PopgrowthQuery groupByLclM() Group by the LCL_M column
 * @method PopgrowthQuery groupByUclM() Group by the UCL_M column
 * @method PopgrowthQuery groupByAssumeddistm() Group by the AssumedDistM column
 * @method PopgrowthQuery groupByLm() Group by the Lm column
 * @method PopgrowthQuery groupByLmloo() Group by the LmLoo column
 * @method PopgrowthQuery groupByLmsex() Group by the LmSex column
 * @method PopgrowthQuery groupByTypelm() Group by the TypeLm column
 * @method PopgrowthQuery groupByUnsexedref() Group by the unsexedRef column
 * @method PopgrowthQuery groupByLmmale() Group by the LmMale column
 * @method PopgrowthQuery groupByLmloomale() Group by the LmLooMale column
 * @method PopgrowthQuery groupByLmfemale() Group by the LmFemale column
 * @method PopgrowthQuery groupByLmloofemale() Group by the LmLooFemale column
 * @method PopgrowthQuery groupByLocality() Group by the Locality column
 * @method PopgrowthQuery groupByYearstart() Group by the YearStart column
 * @method PopgrowthQuery groupByYearend() Group by the YearEnd column
 * @method PopgrowthQuery groupByYearremark() Group by the YearRemark column
 * @method PopgrowthQuery groupByCCode() Group by the C_Code column
 * @method PopgrowthQuery groupByGrowthenviron() Group by the GrowthEnviron column
 * @method PopgrowthQuery groupByTemperature() Group by the Temperature column
 * @method PopgrowthQuery groupByDeltat() Group by the DeltaT column
 * @method PopgrowthQuery groupByTempref() Group by the TempRef column
 * @method PopgrowthQuery groupByRm() Group by the Rm column
 * @method PopgrowthQuery groupByComment() Group by the Comment column
 * @method PopgrowthQuery groupByComment2() Group by the Comment2 column
 * @method PopgrowthQuery groupByEntered() Group by the Entered column
 * @method PopgrowthQuery groupByDateentered() Group by the DateEntered column
 * @method PopgrowthQuery groupByModified() Group by the Modified column
 * @method PopgrowthQuery groupByDatemodified() Group by the DateModified column
 * @method PopgrowthQuery groupByExpert() Group by the Expert column
 * @method PopgrowthQuery groupByDatechecked() Group by the DateChecked column
 * @method PopgrowthQuery groupByTs() Group by the TS column
 *
 * @method PopgrowthQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PopgrowthQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PopgrowthQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Popgrowth findOne(PropelPDO $con = null) Return the first Popgrowth matching the query
 * @method Popgrowth findOneOrCreate(PropelPDO $con = null) Return the first Popgrowth matching the query, or a new Popgrowth object populated from the query conditions when no match is found
 *
 * @method Popgrowth findOneByStockcode(int $StockCode) Return the first Popgrowth filtered by the StockCode column
 * @method Popgrowth findOneBySpeccode(int $SpecCode) Return the first Popgrowth filtered by the SpecCode column
 * @method Popgrowth findOneByECode(int $E_CODE) Return the first Popgrowth filtered by the E_CODE column
 * @method Popgrowth findOneByPopgrowthref(int $PopGrowthRef) Return the first Popgrowth filtered by the PopGrowthRef column
 * @method Popgrowth findOneBySex(string $Sex) Return the first Popgrowth filtered by the Sex column
 * @method Popgrowth findOneByData(string $Data) Return the first Popgrowth filtered by the Data column
 * @method Popgrowth findOneByDatasourceref(int $DataSourceRef) Return the first Popgrowth filtered by the DataSourceRef column
 * @method Popgrowth findOneByLoo(double $Loo) Return the first Popgrowth filtered by the Loo column
 * @method Popgrowth findOneByNumber(int $Number) Return the first Popgrowth filtered by the Number column
 * @method Popgrowth findOneByR2(double $r2) Return the first Popgrowth filtered by the r2 column
 * @method Popgrowth findOneBySeLoo(double $SE_Loo) Return the first Popgrowth filtered by the SE_Loo column
 * @method Popgrowth findOneBySdLoo(double $SD_Loo) Return the first Popgrowth filtered by the SD_Loo column
 * @method Popgrowth findOneByLclLoo(double $LCL_Loo) Return the first Popgrowth filtered by the LCL_Loo column
 * @method Popgrowth findOneByUclLoo(double $UCL_Loo) Return the first Popgrowth filtered by the UCL_Loo column
 * @method Popgrowth findOneByAssumeddistloo(string $AssumedDistLoo) Return the first Popgrowth filtered by the AssumedDistLoo column
 * @method Popgrowth findOneByTlinfinity(double $TLinfinity) Return the first Popgrowth filtered by the TLinfinity column
 * @method Popgrowth findOneByK(double $K) Return the first Popgrowth filtered by the K column
 * @method Popgrowth findOneBySeK(double $SE_K) Return the first Popgrowth filtered by the SE_K column
 * @method Popgrowth findOneBySdK(double $SD_K) Return the first Popgrowth filtered by the SD_K column
 * @method Popgrowth findOneByLclK(double $LCL_K) Return the first Popgrowth filtered by the LCL_K column
 * @method Popgrowth findOneByUclK(double $UCL_K) Return the first Popgrowth filtered by the UCL_K column
 * @method Popgrowth findOneByAssumeddistk(string $AssumedDistK) Return the first Popgrowth filtered by the AssumedDistK column
 * @method Popgrowth findOneByTo(double $to) Return the first Popgrowth filtered by the to column
 * @method Popgrowth findOneBySeTo(double $SE_to) Return the first Popgrowth filtered by the SE_to column
 * @method Popgrowth findOneBySdTo(double $SD_to) Return the first Popgrowth filtered by the SD_to column
 * @method Popgrowth findOneByLclTo(double $LCL_to) Return the first Popgrowth filtered by the LCL_to column
 * @method Popgrowth findOneByUclTo(double $UCL_to) Return the first Popgrowth filtered by the UCL_to column
 * @method Popgrowth findOneByType(string $Type) Return the first Popgrowth filtered by the Type column
 * @method Popgrowth findOneByMethodgrowth(string $MethodGrowth) Return the first Popgrowth filtered by the MethodGrowth column
 * @method Popgrowth findOneByWinfinity(double $Winfinity) Return the first Popgrowth filtered by the Winfinity column
 * @method Popgrowth findOneByLinflmax(boolean $LinfLmax) Return the first Popgrowth filtered by the LinfLmax column
 * @method Popgrowth findOneByAuxim(string $Auxim) Return the first Popgrowth filtered by the Auxim column
 * @method Popgrowth findOneByLogklogloo(double $LogKLogLoo) Return the first Popgrowth filtered by the LogKLogLoo column
 * @method Popgrowth findOneBySourcewinfinity(string $SourceWinfinity) Return the first Popgrowth filtered by the SourceWinfinity column
 * @method Popgrowth findOneByB(double $b) Return the first Popgrowth filtered by the b column
 * @method Popgrowth findOneByC(double $C) Return the first Popgrowth filtered by the C column
 * @method Popgrowth findOneByTmax(double $tmax) Return the first Popgrowth filtered by the tmax column
 * @method Popgrowth findOneByTmaxref(int $tmaxRef) Return the first Popgrowth filtered by the tmaxRef column
 * @method Popgrowth findOneByTm(double $tm) Return the first Popgrowth filtered by the tm column
 * @method Popgrowth findOneByM(double $M) Return the first Popgrowth filtered by the M column
 * @method Popgrowth findOneByMethodm(string $MethodM) Return the first Popgrowth filtered by the MethodM column
 * @method Popgrowth findOneByMquality(string $Mquality) Return the first Popgrowth filtered by the Mquality column
 * @method Popgrowth findOneByMref(int $MRef) Return the first Popgrowth filtered by the MRef column
 * @method Popgrowth findOneByNumberM(int $Number_M) Return the first Popgrowth filtered by the Number_M column
 * @method Popgrowth findOneByR2M(double $r2_M) Return the first Popgrowth filtered by the r2_M column
 * @method Popgrowth findOneBySeM(double $SE_M) Return the first Popgrowth filtered by the SE_M column
 * @method Popgrowth findOneBySdM(double $SD_M) Return the first Popgrowth filtered by the SD_M column
 * @method Popgrowth findOneByLclM(double $LCL_M) Return the first Popgrowth filtered by the LCL_M column
 * @method Popgrowth findOneByUclM(double $UCL_M) Return the first Popgrowth filtered by the UCL_M column
 * @method Popgrowth findOneByAssumeddistm(string $AssumedDistM) Return the first Popgrowth filtered by the AssumedDistM column
 * @method Popgrowth findOneByLm(double $Lm) Return the first Popgrowth filtered by the Lm column
 * @method Popgrowth findOneByLmloo(double $LmLoo) Return the first Popgrowth filtered by the LmLoo column
 * @method Popgrowth findOneByLmsex(string $LmSex) Return the first Popgrowth filtered by the LmSex column
 * @method Popgrowth findOneByTypelm(string $TypeLm) Return the first Popgrowth filtered by the TypeLm column
 * @method Popgrowth findOneByUnsexedref(int $unsexedRef) Return the first Popgrowth filtered by the unsexedRef column
 * @method Popgrowth findOneByLmmale(double $LmMale) Return the first Popgrowth filtered by the LmMale column
 * @method Popgrowth findOneByLmloomale(double $LmLooMale) Return the first Popgrowth filtered by the LmLooMale column
 * @method Popgrowth findOneByLmfemale(double $LmFemale) Return the first Popgrowth filtered by the LmFemale column
 * @method Popgrowth findOneByLmloofemale(double $LmLooFemale) Return the first Popgrowth filtered by the LmLooFemale column
 * @method Popgrowth findOneByLocality(string $Locality) Return the first Popgrowth filtered by the Locality column
 * @method Popgrowth findOneByYearstart(int $YearStart) Return the first Popgrowth filtered by the YearStart column
 * @method Popgrowth findOneByYearend(int $YearEnd) Return the first Popgrowth filtered by the YearEnd column
 * @method Popgrowth findOneByYearremark(string $YearRemark) Return the first Popgrowth filtered by the YearRemark column
 * @method Popgrowth findOneByCCode(string $C_Code) Return the first Popgrowth filtered by the C_Code column
 * @method Popgrowth findOneByGrowthenviron(string $GrowthEnviron) Return the first Popgrowth filtered by the GrowthEnviron column
 * @method Popgrowth findOneByTemperature(double $Temperature) Return the first Popgrowth filtered by the Temperature column
 * @method Popgrowth findOneByDeltat(double $DeltaT) Return the first Popgrowth filtered by the DeltaT column
 * @method Popgrowth findOneByTempref(int $TempRef) Return the first Popgrowth filtered by the TempRef column
 * @method Popgrowth findOneByRm(double $Rm) Return the first Popgrowth filtered by the Rm column
 * @method Popgrowth findOneByComment(string $Comment) Return the first Popgrowth filtered by the Comment column
 * @method Popgrowth findOneByComment2(string $Comment2) Return the first Popgrowth filtered by the Comment2 column
 * @method Popgrowth findOneByEntered(int $Entered) Return the first Popgrowth filtered by the Entered column
 * @method Popgrowth findOneByDateentered(string $DateEntered) Return the first Popgrowth filtered by the DateEntered column
 * @method Popgrowth findOneByModified(int $Modified) Return the first Popgrowth filtered by the Modified column
 * @method Popgrowth findOneByDatemodified(string $DateModified) Return the first Popgrowth filtered by the DateModified column
 * @method Popgrowth findOneByExpert(int $Expert) Return the first Popgrowth filtered by the Expert column
 * @method Popgrowth findOneByDatechecked(string $DateChecked) Return the first Popgrowth filtered by the DateChecked column
 * @method Popgrowth findOneByTs(string $TS) Return the first Popgrowth filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Popgrowth objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return Popgrowth objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Popgrowth objects filtered by the SpecCode column
 * @method array findByECode(int $E_CODE) Return Popgrowth objects filtered by the E_CODE column
 * @method array findByPopgrowthref(int $PopGrowthRef) Return Popgrowth objects filtered by the PopGrowthRef column
 * @method array findBySex(string $Sex) Return Popgrowth objects filtered by the Sex column
 * @method array findByData(string $Data) Return Popgrowth objects filtered by the Data column
 * @method array findByDatasourceref(int $DataSourceRef) Return Popgrowth objects filtered by the DataSourceRef column
 * @method array findByLoo(double $Loo) Return Popgrowth objects filtered by the Loo column
 * @method array findByNumber(int $Number) Return Popgrowth objects filtered by the Number column
 * @method array findByR2(double $r2) Return Popgrowth objects filtered by the r2 column
 * @method array findBySeLoo(double $SE_Loo) Return Popgrowth objects filtered by the SE_Loo column
 * @method array findBySdLoo(double $SD_Loo) Return Popgrowth objects filtered by the SD_Loo column
 * @method array findByLclLoo(double $LCL_Loo) Return Popgrowth objects filtered by the LCL_Loo column
 * @method array findByUclLoo(double $UCL_Loo) Return Popgrowth objects filtered by the UCL_Loo column
 * @method array findByAssumeddistloo(string $AssumedDistLoo) Return Popgrowth objects filtered by the AssumedDistLoo column
 * @method array findByTlinfinity(double $TLinfinity) Return Popgrowth objects filtered by the TLinfinity column
 * @method array findByK(double $K) Return Popgrowth objects filtered by the K column
 * @method array findBySeK(double $SE_K) Return Popgrowth objects filtered by the SE_K column
 * @method array findBySdK(double $SD_K) Return Popgrowth objects filtered by the SD_K column
 * @method array findByLclK(double $LCL_K) Return Popgrowth objects filtered by the LCL_K column
 * @method array findByUclK(double $UCL_K) Return Popgrowth objects filtered by the UCL_K column
 * @method array findByAssumeddistk(string $AssumedDistK) Return Popgrowth objects filtered by the AssumedDistK column
 * @method array findByTo(double $to) Return Popgrowth objects filtered by the to column
 * @method array findBySeTo(double $SE_to) Return Popgrowth objects filtered by the SE_to column
 * @method array findBySdTo(double $SD_to) Return Popgrowth objects filtered by the SD_to column
 * @method array findByLclTo(double $LCL_to) Return Popgrowth objects filtered by the LCL_to column
 * @method array findByUclTo(double $UCL_to) Return Popgrowth objects filtered by the UCL_to column
 * @method array findByType(string $Type) Return Popgrowth objects filtered by the Type column
 * @method array findByMethodgrowth(string $MethodGrowth) Return Popgrowth objects filtered by the MethodGrowth column
 * @method array findByWinfinity(double $Winfinity) Return Popgrowth objects filtered by the Winfinity column
 * @method array findByLinflmax(boolean $LinfLmax) Return Popgrowth objects filtered by the LinfLmax column
 * @method array findByAuxim(string $Auxim) Return Popgrowth objects filtered by the Auxim column
 * @method array findByLogklogloo(double $LogKLogLoo) Return Popgrowth objects filtered by the LogKLogLoo column
 * @method array findBySourcewinfinity(string $SourceWinfinity) Return Popgrowth objects filtered by the SourceWinfinity column
 * @method array findByB(double $b) Return Popgrowth objects filtered by the b column
 * @method array findByC(double $C) Return Popgrowth objects filtered by the C column
 * @method array findByTmax(double $tmax) Return Popgrowth objects filtered by the tmax column
 * @method array findByTmaxref(int $tmaxRef) Return Popgrowth objects filtered by the tmaxRef column
 * @method array findByTm(double $tm) Return Popgrowth objects filtered by the tm column
 * @method array findByM(double $M) Return Popgrowth objects filtered by the M column
 * @method array findByMethodm(string $MethodM) Return Popgrowth objects filtered by the MethodM column
 * @method array findByMquality(string $Mquality) Return Popgrowth objects filtered by the Mquality column
 * @method array findByMref(int $MRef) Return Popgrowth objects filtered by the MRef column
 * @method array findByNumberM(int $Number_M) Return Popgrowth objects filtered by the Number_M column
 * @method array findByR2M(double $r2_M) Return Popgrowth objects filtered by the r2_M column
 * @method array findBySeM(double $SE_M) Return Popgrowth objects filtered by the SE_M column
 * @method array findBySdM(double $SD_M) Return Popgrowth objects filtered by the SD_M column
 * @method array findByLclM(double $LCL_M) Return Popgrowth objects filtered by the LCL_M column
 * @method array findByUclM(double $UCL_M) Return Popgrowth objects filtered by the UCL_M column
 * @method array findByAssumeddistm(string $AssumedDistM) Return Popgrowth objects filtered by the AssumedDistM column
 * @method array findByLm(double $Lm) Return Popgrowth objects filtered by the Lm column
 * @method array findByLmloo(double $LmLoo) Return Popgrowth objects filtered by the LmLoo column
 * @method array findByLmsex(string $LmSex) Return Popgrowth objects filtered by the LmSex column
 * @method array findByTypelm(string $TypeLm) Return Popgrowth objects filtered by the TypeLm column
 * @method array findByUnsexedref(int $unsexedRef) Return Popgrowth objects filtered by the unsexedRef column
 * @method array findByLmmale(double $LmMale) Return Popgrowth objects filtered by the LmMale column
 * @method array findByLmloomale(double $LmLooMale) Return Popgrowth objects filtered by the LmLooMale column
 * @method array findByLmfemale(double $LmFemale) Return Popgrowth objects filtered by the LmFemale column
 * @method array findByLmloofemale(double $LmLooFemale) Return Popgrowth objects filtered by the LmLooFemale column
 * @method array findByLocality(string $Locality) Return Popgrowth objects filtered by the Locality column
 * @method array findByYearstart(int $YearStart) Return Popgrowth objects filtered by the YearStart column
 * @method array findByYearend(int $YearEnd) Return Popgrowth objects filtered by the YearEnd column
 * @method array findByYearremark(string $YearRemark) Return Popgrowth objects filtered by the YearRemark column
 * @method array findByCCode(string $C_Code) Return Popgrowth objects filtered by the C_Code column
 * @method array findByGrowthenviron(string $GrowthEnviron) Return Popgrowth objects filtered by the GrowthEnviron column
 * @method array findByTemperature(double $Temperature) Return Popgrowth objects filtered by the Temperature column
 * @method array findByDeltat(double $DeltaT) Return Popgrowth objects filtered by the DeltaT column
 * @method array findByTempref(int $TempRef) Return Popgrowth objects filtered by the TempRef column
 * @method array findByRm(double $Rm) Return Popgrowth objects filtered by the Rm column
 * @method array findByComment(string $Comment) Return Popgrowth objects filtered by the Comment column
 * @method array findByComment2(string $Comment2) Return Popgrowth objects filtered by the Comment2 column
 * @method array findByEntered(int $Entered) Return Popgrowth objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Popgrowth objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Popgrowth objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Popgrowth objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Popgrowth objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Popgrowth objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Popgrowth objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopgrowthQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePopgrowthQuery object.
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
            $modelName = 'Popgrowth';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PopgrowthQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PopgrowthQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PopgrowthQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PopgrowthQuery) {
            return $criteria;
        }
        $query = new PopgrowthQuery(null, null, $modelAlias);

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
     * @return   Popgrowth|Popgrowth[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PopgrowthPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Popgrowth A model object, or null if the key is not found
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
     * @return                 Popgrowth A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `E_CODE`, `PopGrowthRef`, `Sex`, `Data`, `DataSourceRef`, `Loo`, `Number`, `r2`, `SE_Loo`, `SD_Loo`, `LCL_Loo`, `UCL_Loo`, `AssumedDistLoo`, `TLinfinity`, `K`, `SE_K`, `SD_K`, `LCL_K`, `UCL_K`, `AssumedDistK`, `to`, `SE_to`, `SD_to`, `LCL_to`, `UCL_to`, `Type`, `MethodGrowth`, `Winfinity`, `LinfLmax`, `Auxim`, `LogKLogLoo`, `SourceWinfinity`, `b`, `C`, `tmax`, `tmaxRef`, `tm`, `M`, `MethodM`, `Mquality`, `MRef`, `Number_M`, `r2_M`, `SE_M`, `SD_M`, `LCL_M`, `UCL_M`, `AssumedDistM`, `Lm`, `LmLoo`, `LmSex`, `TypeLm`, `unsexedRef`, `LmMale`, `LmLooMale`, `LmFemale`, `LmLooFemale`, `Locality`, `YearStart`, `YearEnd`, `YearRemark`, `C_Code`, `GrowthEnviron`, `Temperature`, `DeltaT`, `TempRef`, `Rm`, `Comment`, `Comment2`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `popgrowth` WHERE `AutoCtr` = :p0';
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
            $obj = new Popgrowth();
            $obj->hydrate($row);
            PopgrowthPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Popgrowth|Popgrowth[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Popgrowth[]|mixed the list of results, formatted by the current formatter
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PopgrowthPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PopgrowthPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PopgrowthPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PopgrowthPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the StockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE StockCode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE StockCode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE StockCode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE StockCode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PopgrowthPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PopgrowthPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SPECCODE, $speccode, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(PopgrowthPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(PopgrowthPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the PopGrowthRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPopgrowthref(1234); // WHERE PopGrowthRef = 1234
     * $query->filterByPopgrowthref(array(12, 34)); // WHERE PopGrowthRef IN (12, 34)
     * $query->filterByPopgrowthref(array('min' => 12)); // WHERE PopGrowthRef >= 12
     * $query->filterByPopgrowthref(array('max' => 12)); // WHERE PopGrowthRef <= 12
     * </code>
     *
     * @param     mixed $popgrowthref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByPopgrowthref($popgrowthref = null, $comparison = null)
    {
        if (is_array($popgrowthref)) {
            $useMinMax = false;
            if (isset($popgrowthref['min'])) {
                $this->addUsingAlias(PopgrowthPeer::POPGROWTHREF, $popgrowthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popgrowthref['max'])) {
                $this->addUsingAlias(PopgrowthPeer::POPGROWTHREF, $popgrowthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::POPGROWTHREF, $popgrowthref, $comparison);
    }

    /**
     * Filter the query on the Sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE Sex = 'fooValue'
     * $query->filterBySex('%fooValue%'); // WHERE Sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex)) {
                $sex = str_replace('*', '%', $sex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE Data = 'fooValue'
     * $query->filterByData('%fooValue%'); // WHERE Data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data)) {
                $data = str_replace('*', '%', $data);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query on the DataSourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDatasourceref(1234); // WHERE DataSourceRef = 1234
     * $query->filterByDatasourceref(array(12, 34)); // WHERE DataSourceRef IN (12, 34)
     * $query->filterByDatasourceref(array('min' => 12)); // WHERE DataSourceRef >= 12
     * $query->filterByDatasourceref(array('max' => 12)); // WHERE DataSourceRef <= 12
     * </code>
     *
     * @param     mixed $datasourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByDatasourceref($datasourceref = null, $comparison = null)
    {
        if (is_array($datasourceref)) {
            $useMinMax = false;
            if (isset($datasourceref['min'])) {
                $this->addUsingAlias(PopgrowthPeer::DATASOURCEREF, $datasourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datasourceref['max'])) {
                $this->addUsingAlias(PopgrowthPeer::DATASOURCEREF, $datasourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::DATASOURCEREF, $datasourceref, $comparison);
    }

    /**
     * Filter the query on the Loo column
     *
     * Example usage:
     * <code>
     * $query->filterByLoo(1234); // WHERE Loo = 1234
     * $query->filterByLoo(array(12, 34)); // WHERE Loo IN (12, 34)
     * $query->filterByLoo(array('min' => 12)); // WHERE Loo >= 12
     * $query->filterByLoo(array('max' => 12)); // WHERE Loo <= 12
     * </code>
     *
     * @param     mixed $loo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLoo($loo = null, $comparison = null)
    {
        if (is_array($loo)) {
            $useMinMax = false;
            if (isset($loo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LOO, $loo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LOO, $loo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LOO, $loo, $comparison);
    }

    /**
     * Filter the query on the Number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber(1234); // WHERE Number = 1234
     * $query->filterByNumber(array(12, 34)); // WHERE Number IN (12, 34)
     * $query->filterByNumber(array('min' => 12)); // WHERE Number >= 12
     * $query->filterByNumber(array('max' => 12)); // WHERE Number <= 12
     * </code>
     *
     * @param     mixed $number The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(PopgrowthPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(PopgrowthPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the r2 column
     *
     * Example usage:
     * <code>
     * $query->filterByR2(1234); // WHERE r2 = 1234
     * $query->filterByR2(array(12, 34)); // WHERE r2 IN (12, 34)
     * $query->filterByR2(array('min' => 12)); // WHERE r2 >= 12
     * $query->filterByR2(array('max' => 12)); // WHERE r2 <= 12
     * </code>
     *
     * @param     mixed $r2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByR2($r2 = null, $comparison = null)
    {
        if (is_array($r2)) {
            $useMinMax = false;
            if (isset($r2['min'])) {
                $this->addUsingAlias(PopgrowthPeer::R2, $r2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r2['max'])) {
                $this->addUsingAlias(PopgrowthPeer::R2, $r2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::R2, $r2, $comparison);
    }

    /**
     * Filter the query on the SE_Loo column
     *
     * Example usage:
     * <code>
     * $query->filterBySeLoo(1234); // WHERE SE_Loo = 1234
     * $query->filterBySeLoo(array(12, 34)); // WHERE SE_Loo IN (12, 34)
     * $query->filterBySeLoo(array('min' => 12)); // WHERE SE_Loo >= 12
     * $query->filterBySeLoo(array('max' => 12)); // WHERE SE_Loo <= 12
     * </code>
     *
     * @param     mixed $seLoo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySeLoo($seLoo = null, $comparison = null)
    {
        if (is_array($seLoo)) {
            $useMinMax = false;
            if (isset($seLoo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_LOO, $seLoo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seLoo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_LOO, $seLoo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SE_LOO, $seLoo, $comparison);
    }

    /**
     * Filter the query on the SD_Loo column
     *
     * Example usage:
     * <code>
     * $query->filterBySdLoo(1234); // WHERE SD_Loo = 1234
     * $query->filterBySdLoo(array(12, 34)); // WHERE SD_Loo IN (12, 34)
     * $query->filterBySdLoo(array('min' => 12)); // WHERE SD_Loo >= 12
     * $query->filterBySdLoo(array('max' => 12)); // WHERE SD_Loo <= 12
     * </code>
     *
     * @param     mixed $sdLoo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySdLoo($sdLoo = null, $comparison = null)
    {
        if (is_array($sdLoo)) {
            $useMinMax = false;
            if (isset($sdLoo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_LOO, $sdLoo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdLoo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_LOO, $sdLoo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SD_LOO, $sdLoo, $comparison);
    }

    /**
     * Filter the query on the LCL_Loo column
     *
     * Example usage:
     * <code>
     * $query->filterByLclLoo(1234); // WHERE LCL_Loo = 1234
     * $query->filterByLclLoo(array(12, 34)); // WHERE LCL_Loo IN (12, 34)
     * $query->filterByLclLoo(array('min' => 12)); // WHERE LCL_Loo >= 12
     * $query->filterByLclLoo(array('max' => 12)); // WHERE LCL_Loo <= 12
     * </code>
     *
     * @param     mixed $lclLoo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLclLoo($lclLoo = null, $comparison = null)
    {
        if (is_array($lclLoo)) {
            $useMinMax = false;
            if (isset($lclLoo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_LOO, $lclLoo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclLoo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_LOO, $lclLoo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LCL_LOO, $lclLoo, $comparison);
    }

    /**
     * Filter the query on the UCL_Loo column
     *
     * Example usage:
     * <code>
     * $query->filterByUclLoo(1234); // WHERE UCL_Loo = 1234
     * $query->filterByUclLoo(array(12, 34)); // WHERE UCL_Loo IN (12, 34)
     * $query->filterByUclLoo(array('min' => 12)); // WHERE UCL_Loo >= 12
     * $query->filterByUclLoo(array('max' => 12)); // WHERE UCL_Loo <= 12
     * </code>
     *
     * @param     mixed $uclLoo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByUclLoo($uclLoo = null, $comparison = null)
    {
        if (is_array($uclLoo)) {
            $useMinMax = false;
            if (isset($uclLoo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_LOO, $uclLoo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclLoo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_LOO, $uclLoo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::UCL_LOO, $uclLoo, $comparison);
    }

    /**
     * Filter the query on the AssumedDistLoo column
     *
     * Example usage:
     * <code>
     * $query->filterByAssumeddistloo('fooValue');   // WHERE AssumedDistLoo = 'fooValue'
     * $query->filterByAssumeddistloo('%fooValue%'); // WHERE AssumedDistLoo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assumeddistloo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByAssumeddistloo($assumeddistloo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assumeddistloo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $assumeddistloo)) {
                $assumeddistloo = str_replace('*', '%', $assumeddistloo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::ASSUMEDDISTLOO, $assumeddistloo, $comparison);
    }

    /**
     * Filter the query on the TLinfinity column
     *
     * Example usage:
     * <code>
     * $query->filterByTlinfinity(1234); // WHERE TLinfinity = 1234
     * $query->filterByTlinfinity(array(12, 34)); // WHERE TLinfinity IN (12, 34)
     * $query->filterByTlinfinity(array('min' => 12)); // WHERE TLinfinity >= 12
     * $query->filterByTlinfinity(array('max' => 12)); // WHERE TLinfinity <= 12
     * </code>
     *
     * @param     mixed $tlinfinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTlinfinity($tlinfinity = null, $comparison = null)
    {
        if (is_array($tlinfinity)) {
            $useMinMax = false;
            if (isset($tlinfinity['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TLINFINITY, $tlinfinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tlinfinity['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TLINFINITY, $tlinfinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TLINFINITY, $tlinfinity, $comparison);
    }

    /**
     * Filter the query on the K column
     *
     * Example usage:
     * <code>
     * $query->filterByK(1234); // WHERE K = 1234
     * $query->filterByK(array(12, 34)); // WHERE K IN (12, 34)
     * $query->filterByK(array('min' => 12)); // WHERE K >= 12
     * $query->filterByK(array('max' => 12)); // WHERE K <= 12
     * </code>
     *
     * @param     mixed $k The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(PopgrowthPeer::K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(PopgrowthPeer::K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::K, $k, $comparison);
    }

    /**
     * Filter the query on the SE_K column
     *
     * Example usage:
     * <code>
     * $query->filterBySeK(1234); // WHERE SE_K = 1234
     * $query->filterBySeK(array(12, 34)); // WHERE SE_K IN (12, 34)
     * $query->filterBySeK(array('min' => 12)); // WHERE SE_K >= 12
     * $query->filterBySeK(array('max' => 12)); // WHERE SE_K <= 12
     * </code>
     *
     * @param     mixed $seK The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySeK($seK = null, $comparison = null)
    {
        if (is_array($seK)) {
            $useMinMax = false;
            if (isset($seK['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_K, $seK['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seK['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_K, $seK['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SE_K, $seK, $comparison);
    }

    /**
     * Filter the query on the SD_K column
     *
     * Example usage:
     * <code>
     * $query->filterBySdK(1234); // WHERE SD_K = 1234
     * $query->filterBySdK(array(12, 34)); // WHERE SD_K IN (12, 34)
     * $query->filterBySdK(array('min' => 12)); // WHERE SD_K >= 12
     * $query->filterBySdK(array('max' => 12)); // WHERE SD_K <= 12
     * </code>
     *
     * @param     mixed $sdK The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySdK($sdK = null, $comparison = null)
    {
        if (is_array($sdK)) {
            $useMinMax = false;
            if (isset($sdK['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_K, $sdK['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdK['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_K, $sdK['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SD_K, $sdK, $comparison);
    }

    /**
     * Filter the query on the LCL_K column
     *
     * Example usage:
     * <code>
     * $query->filterByLclK(1234); // WHERE LCL_K = 1234
     * $query->filterByLclK(array(12, 34)); // WHERE LCL_K IN (12, 34)
     * $query->filterByLclK(array('min' => 12)); // WHERE LCL_K >= 12
     * $query->filterByLclK(array('max' => 12)); // WHERE LCL_K <= 12
     * </code>
     *
     * @param     mixed $lclK The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLclK($lclK = null, $comparison = null)
    {
        if (is_array($lclK)) {
            $useMinMax = false;
            if (isset($lclK['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_K, $lclK['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclK['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_K, $lclK['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LCL_K, $lclK, $comparison);
    }

    /**
     * Filter the query on the UCL_K column
     *
     * Example usage:
     * <code>
     * $query->filterByUclK(1234); // WHERE UCL_K = 1234
     * $query->filterByUclK(array(12, 34)); // WHERE UCL_K IN (12, 34)
     * $query->filterByUclK(array('min' => 12)); // WHERE UCL_K >= 12
     * $query->filterByUclK(array('max' => 12)); // WHERE UCL_K <= 12
     * </code>
     *
     * @param     mixed $uclK The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByUclK($uclK = null, $comparison = null)
    {
        if (is_array($uclK)) {
            $useMinMax = false;
            if (isset($uclK['min'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_K, $uclK['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclK['max'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_K, $uclK['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::UCL_K, $uclK, $comparison);
    }

    /**
     * Filter the query on the AssumedDistK column
     *
     * Example usage:
     * <code>
     * $query->filterByAssumeddistk('fooValue');   // WHERE AssumedDistK = 'fooValue'
     * $query->filterByAssumeddistk('%fooValue%'); // WHERE AssumedDistK LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assumeddistk The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByAssumeddistk($assumeddistk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assumeddistk)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $assumeddistk)) {
                $assumeddistk = str_replace('*', '%', $assumeddistk);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::ASSUMEDDISTK, $assumeddistk, $comparison);
    }

    /**
     * Filter the query on the to column
     *
     * Example usage:
     * <code>
     * $query->filterByTo(1234); // WHERE to = 1234
     * $query->filterByTo(array(12, 34)); // WHERE to IN (12, 34)
     * $query->filterByTo(array('min' => 12)); // WHERE to >= 12
     * $query->filterByTo(array('max' => 12)); // WHERE to <= 12
     * </code>
     *
     * @param     mixed $to The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTo($to = null, $comparison = null)
    {
        if (is_array($to)) {
            $useMinMax = false;
            if (isset($to['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TO, $to['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($to['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TO, $to['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TO, $to, $comparison);
    }

    /**
     * Filter the query on the SE_to column
     *
     * Example usage:
     * <code>
     * $query->filterBySeTo(1234); // WHERE SE_to = 1234
     * $query->filterBySeTo(array(12, 34)); // WHERE SE_to IN (12, 34)
     * $query->filterBySeTo(array('min' => 12)); // WHERE SE_to >= 12
     * $query->filterBySeTo(array('max' => 12)); // WHERE SE_to <= 12
     * </code>
     *
     * @param     mixed $seTo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySeTo($seTo = null, $comparison = null)
    {
        if (is_array($seTo)) {
            $useMinMax = false;
            if (isset($seTo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_TO, $seTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seTo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_TO, $seTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SE_TO, $seTo, $comparison);
    }

    /**
     * Filter the query on the SD_to column
     *
     * Example usage:
     * <code>
     * $query->filterBySdTo(1234); // WHERE SD_to = 1234
     * $query->filterBySdTo(array(12, 34)); // WHERE SD_to IN (12, 34)
     * $query->filterBySdTo(array('min' => 12)); // WHERE SD_to >= 12
     * $query->filterBySdTo(array('max' => 12)); // WHERE SD_to <= 12
     * </code>
     *
     * @param     mixed $sdTo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySdTo($sdTo = null, $comparison = null)
    {
        if (is_array($sdTo)) {
            $useMinMax = false;
            if (isset($sdTo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_TO, $sdTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdTo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_TO, $sdTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SD_TO, $sdTo, $comparison);
    }

    /**
     * Filter the query on the LCL_to column
     *
     * Example usage:
     * <code>
     * $query->filterByLclTo(1234); // WHERE LCL_to = 1234
     * $query->filterByLclTo(array(12, 34)); // WHERE LCL_to IN (12, 34)
     * $query->filterByLclTo(array('min' => 12)); // WHERE LCL_to >= 12
     * $query->filterByLclTo(array('max' => 12)); // WHERE LCL_to <= 12
     * </code>
     *
     * @param     mixed $lclTo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLclTo($lclTo = null, $comparison = null)
    {
        if (is_array($lclTo)) {
            $useMinMax = false;
            if (isset($lclTo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_TO, $lclTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclTo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_TO, $lclTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LCL_TO, $lclTo, $comparison);
    }

    /**
     * Filter the query on the UCL_to column
     *
     * Example usage:
     * <code>
     * $query->filterByUclTo(1234); // WHERE UCL_to = 1234
     * $query->filterByUclTo(array(12, 34)); // WHERE UCL_to IN (12, 34)
     * $query->filterByUclTo(array('min' => 12)); // WHERE UCL_to >= 12
     * $query->filterByUclTo(array('max' => 12)); // WHERE UCL_to <= 12
     * </code>
     *
     * @param     mixed $uclTo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByUclTo($uclTo = null, $comparison = null)
    {
        if (is_array($uclTo)) {
            $useMinMax = false;
            if (isset($uclTo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_TO, $uclTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclTo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_TO, $uclTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::UCL_TO, $uclTo, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the MethodGrowth column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodgrowth('fooValue');   // WHERE MethodGrowth = 'fooValue'
     * $query->filterByMethodgrowth('%fooValue%'); // WHERE MethodGrowth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodgrowth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByMethodgrowth($methodgrowth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodgrowth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodgrowth)) {
                $methodgrowth = str_replace('*', '%', $methodgrowth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::METHODGROWTH, $methodgrowth, $comparison);
    }

    /**
     * Filter the query on the Winfinity column
     *
     * Example usage:
     * <code>
     * $query->filterByWinfinity(1234); // WHERE Winfinity = 1234
     * $query->filterByWinfinity(array(12, 34)); // WHERE Winfinity IN (12, 34)
     * $query->filterByWinfinity(array('min' => 12)); // WHERE Winfinity >= 12
     * $query->filterByWinfinity(array('max' => 12)); // WHERE Winfinity <= 12
     * </code>
     *
     * @param     mixed $winfinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByWinfinity($winfinity = null, $comparison = null)
    {
        if (is_array($winfinity)) {
            $useMinMax = false;
            if (isset($winfinity['min'])) {
                $this->addUsingAlias(PopgrowthPeer::WINFINITY, $winfinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($winfinity['max'])) {
                $this->addUsingAlias(PopgrowthPeer::WINFINITY, $winfinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::WINFINITY, $winfinity, $comparison);
    }

    /**
     * Filter the query on the LinfLmax column
     *
     * Example usage:
     * <code>
     * $query->filterByLinflmax(true); // WHERE LinfLmax = true
     * $query->filterByLinflmax('yes'); // WHERE LinfLmax = true
     * </code>
     *
     * @param     boolean|string $linflmax The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLinflmax($linflmax = null, $comparison = null)
    {
        if (is_string($linflmax)) {
            $linflmax = in_array(strtolower($linflmax), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PopgrowthPeer::LINFLMAX, $linflmax, $comparison);
    }

    /**
     * Filter the query on the Auxim column
     *
     * Example usage:
     * <code>
     * $query->filterByAuxim('fooValue');   // WHERE Auxim = 'fooValue'
     * $query->filterByAuxim('%fooValue%'); // WHERE Auxim LIKE '%fooValue%'
     * </code>
     *
     * @param     string $auxim The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByAuxim($auxim = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($auxim)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $auxim)) {
                $auxim = str_replace('*', '%', $auxim);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::AUXIM, $auxim, $comparison);
    }

    /**
     * Filter the query on the LogKLogLoo column
     *
     * Example usage:
     * <code>
     * $query->filterByLogklogloo(1234); // WHERE LogKLogLoo = 1234
     * $query->filterByLogklogloo(array(12, 34)); // WHERE LogKLogLoo IN (12, 34)
     * $query->filterByLogklogloo(array('min' => 12)); // WHERE LogKLogLoo >= 12
     * $query->filterByLogklogloo(array('max' => 12)); // WHERE LogKLogLoo <= 12
     * </code>
     *
     * @param     mixed $logklogloo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLogklogloo($logklogloo = null, $comparison = null)
    {
        if (is_array($logklogloo)) {
            $useMinMax = false;
            if (isset($logklogloo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LOGKLOGLOO, $logklogloo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($logklogloo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LOGKLOGLOO, $logklogloo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LOGKLOGLOO, $logklogloo, $comparison);
    }

    /**
     * Filter the query on the SourceWinfinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySourcewinfinity('fooValue');   // WHERE SourceWinfinity = 'fooValue'
     * $query->filterBySourcewinfinity('%fooValue%'); // WHERE SourceWinfinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourcewinfinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySourcewinfinity($sourcewinfinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourcewinfinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourcewinfinity)) {
                $sourcewinfinity = str_replace('*', '%', $sourcewinfinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SOURCEWINFINITY, $sourcewinfinity, $comparison);
    }

    /**
     * Filter the query on the b column
     *
     * Example usage:
     * <code>
     * $query->filterByB(1234); // WHERE b = 1234
     * $query->filterByB(array(12, 34)); // WHERE b IN (12, 34)
     * $query->filterByB(array('min' => 12)); // WHERE b >= 12
     * $query->filterByB(array('max' => 12)); // WHERE b <= 12
     * </code>
     *
     * @param     mixed $b The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(PopgrowthPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(PopgrowthPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the C column
     *
     * Example usage:
     * <code>
     * $query->filterByC(1234); // WHERE C = 1234
     * $query->filterByC(array(12, 34)); // WHERE C IN (12, 34)
     * $query->filterByC(array('min' => 12)); // WHERE C >= 12
     * $query->filterByC(array('max' => 12)); // WHERE C <= 12
     * </code>
     *
     * @param     mixed $c The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByC($c = null, $comparison = null)
    {
        if (is_array($c)) {
            $useMinMax = false;
            if (isset($c['min'])) {
                $this->addUsingAlias(PopgrowthPeer::C, $c['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($c['max'])) {
                $this->addUsingAlias(PopgrowthPeer::C, $c['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::C, $c, $comparison);
    }

    /**
     * Filter the query on the tmax column
     *
     * Example usage:
     * <code>
     * $query->filterByTmax(1234); // WHERE tmax = 1234
     * $query->filterByTmax(array(12, 34)); // WHERE tmax IN (12, 34)
     * $query->filterByTmax(array('min' => 12)); // WHERE tmax >= 12
     * $query->filterByTmax(array('max' => 12)); // WHERE tmax <= 12
     * </code>
     *
     * @param     mixed $tmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTmax($tmax = null, $comparison = null)
    {
        if (is_array($tmax)) {
            $useMinMax = false;
            if (isset($tmax['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TMAX, $tmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tmax['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TMAX, $tmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TMAX, $tmax, $comparison);
    }

    /**
     * Filter the query on the tmaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTmaxref(1234); // WHERE tmaxRef = 1234
     * $query->filterByTmaxref(array(12, 34)); // WHERE tmaxRef IN (12, 34)
     * $query->filterByTmaxref(array('min' => 12)); // WHERE tmaxRef >= 12
     * $query->filterByTmaxref(array('max' => 12)); // WHERE tmaxRef <= 12
     * </code>
     *
     * @param     mixed $tmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTmaxref($tmaxref = null, $comparison = null)
    {
        if (is_array($tmaxref)) {
            $useMinMax = false;
            if (isset($tmaxref['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TMAXREF, $tmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tmaxref['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TMAXREF, $tmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TMAXREF, $tmaxref, $comparison);
    }

    /**
     * Filter the query on the tm column
     *
     * Example usage:
     * <code>
     * $query->filterByTm(1234); // WHERE tm = 1234
     * $query->filterByTm(array(12, 34)); // WHERE tm IN (12, 34)
     * $query->filterByTm(array('min' => 12)); // WHERE tm >= 12
     * $query->filterByTm(array('max' => 12)); // WHERE tm <= 12
     * </code>
     *
     * @param     mixed $tm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTm($tm = null, $comparison = null)
    {
        if (is_array($tm)) {
            $useMinMax = false;
            if (isset($tm['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TM, $tm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TM, $tm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TM, $tm, $comparison);
    }

    /**
     * Filter the query on the M column
     *
     * Example usage:
     * <code>
     * $query->filterByM(1234); // WHERE M = 1234
     * $query->filterByM(array(12, 34)); // WHERE M IN (12, 34)
     * $query->filterByM(array('min' => 12)); // WHERE M >= 12
     * $query->filterByM(array('max' => 12)); // WHERE M <= 12
     * </code>
     *
     * @param     mixed $m The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByM($m = null, $comparison = null)
    {
        if (is_array($m)) {
            $useMinMax = false;
            if (isset($m['min'])) {
                $this->addUsingAlias(PopgrowthPeer::M, $m['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($m['max'])) {
                $this->addUsingAlias(PopgrowthPeer::M, $m['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::M, $m, $comparison);
    }

    /**
     * Filter the query on the MethodM column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodm('fooValue');   // WHERE MethodM = 'fooValue'
     * $query->filterByMethodm('%fooValue%'); // WHERE MethodM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByMethodm($methodm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodm)) {
                $methodm = str_replace('*', '%', $methodm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::METHODM, $methodm, $comparison);
    }

    /**
     * Filter the query on the Mquality column
     *
     * Example usage:
     * <code>
     * $query->filterByMquality('fooValue');   // WHERE Mquality = 'fooValue'
     * $query->filterByMquality('%fooValue%'); // WHERE Mquality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mquality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByMquality($mquality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mquality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mquality)) {
                $mquality = str_replace('*', '%', $mquality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::MQUALITY, $mquality, $comparison);
    }

    /**
     * Filter the query on the MRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMref(1234); // WHERE MRef = 1234
     * $query->filterByMref(array(12, 34)); // WHERE MRef IN (12, 34)
     * $query->filterByMref(array('min' => 12)); // WHERE MRef >= 12
     * $query->filterByMref(array('max' => 12)); // WHERE MRef <= 12
     * </code>
     *
     * @param     mixed $mref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByMref($mref = null, $comparison = null)
    {
        if (is_array($mref)) {
            $useMinMax = false;
            if (isset($mref['min'])) {
                $this->addUsingAlias(PopgrowthPeer::MREF, $mref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mref['max'])) {
                $this->addUsingAlias(PopgrowthPeer::MREF, $mref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::MREF, $mref, $comparison);
    }

    /**
     * Filter the query on the Number_M column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberM(1234); // WHERE Number_M = 1234
     * $query->filterByNumberM(array(12, 34)); // WHERE Number_M IN (12, 34)
     * $query->filterByNumberM(array('min' => 12)); // WHERE Number_M >= 12
     * $query->filterByNumberM(array('max' => 12)); // WHERE Number_M <= 12
     * </code>
     *
     * @param     mixed $numberM The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByNumberM($numberM = null, $comparison = null)
    {
        if (is_array($numberM)) {
            $useMinMax = false;
            if (isset($numberM['min'])) {
                $this->addUsingAlias(PopgrowthPeer::NUMBER_M, $numberM['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberM['max'])) {
                $this->addUsingAlias(PopgrowthPeer::NUMBER_M, $numberM['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::NUMBER_M, $numberM, $comparison);
    }

    /**
     * Filter the query on the r2_M column
     *
     * Example usage:
     * <code>
     * $query->filterByR2M(1234); // WHERE r2_M = 1234
     * $query->filterByR2M(array(12, 34)); // WHERE r2_M IN (12, 34)
     * $query->filterByR2M(array('min' => 12)); // WHERE r2_M >= 12
     * $query->filterByR2M(array('max' => 12)); // WHERE r2_M <= 12
     * </code>
     *
     * @param     mixed $r2M The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByR2M($r2M = null, $comparison = null)
    {
        if (is_array($r2M)) {
            $useMinMax = false;
            if (isset($r2M['min'])) {
                $this->addUsingAlias(PopgrowthPeer::R2_M, $r2M['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r2M['max'])) {
                $this->addUsingAlias(PopgrowthPeer::R2_M, $r2M['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::R2_M, $r2M, $comparison);
    }

    /**
     * Filter the query on the SE_M column
     *
     * Example usage:
     * <code>
     * $query->filterBySeM(1234); // WHERE SE_M = 1234
     * $query->filterBySeM(array(12, 34)); // WHERE SE_M IN (12, 34)
     * $query->filterBySeM(array('min' => 12)); // WHERE SE_M >= 12
     * $query->filterBySeM(array('max' => 12)); // WHERE SE_M <= 12
     * </code>
     *
     * @param     mixed $seM The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySeM($seM = null, $comparison = null)
    {
        if (is_array($seM)) {
            $useMinMax = false;
            if (isset($seM['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_M, $seM['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seM['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SE_M, $seM['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SE_M, $seM, $comparison);
    }

    /**
     * Filter the query on the SD_M column
     *
     * Example usage:
     * <code>
     * $query->filterBySdM(1234); // WHERE SD_M = 1234
     * $query->filterBySdM(array(12, 34)); // WHERE SD_M IN (12, 34)
     * $query->filterBySdM(array('min' => 12)); // WHERE SD_M >= 12
     * $query->filterBySdM(array('max' => 12)); // WHERE SD_M <= 12
     * </code>
     *
     * @param     mixed $sdM The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterBySdM($sdM = null, $comparison = null)
    {
        if (is_array($sdM)) {
            $useMinMax = false;
            if (isset($sdM['min'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_M, $sdM['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdM['max'])) {
                $this->addUsingAlias(PopgrowthPeer::SD_M, $sdM['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::SD_M, $sdM, $comparison);
    }

    /**
     * Filter the query on the LCL_M column
     *
     * Example usage:
     * <code>
     * $query->filterByLclM(1234); // WHERE LCL_M = 1234
     * $query->filterByLclM(array(12, 34)); // WHERE LCL_M IN (12, 34)
     * $query->filterByLclM(array('min' => 12)); // WHERE LCL_M >= 12
     * $query->filterByLclM(array('max' => 12)); // WHERE LCL_M <= 12
     * </code>
     *
     * @param     mixed $lclM The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLclM($lclM = null, $comparison = null)
    {
        if (is_array($lclM)) {
            $useMinMax = false;
            if (isset($lclM['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_M, $lclM['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclM['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LCL_M, $lclM['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LCL_M, $lclM, $comparison);
    }

    /**
     * Filter the query on the UCL_M column
     *
     * Example usage:
     * <code>
     * $query->filterByUclM(1234); // WHERE UCL_M = 1234
     * $query->filterByUclM(array(12, 34)); // WHERE UCL_M IN (12, 34)
     * $query->filterByUclM(array('min' => 12)); // WHERE UCL_M >= 12
     * $query->filterByUclM(array('max' => 12)); // WHERE UCL_M <= 12
     * </code>
     *
     * @param     mixed $uclM The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByUclM($uclM = null, $comparison = null)
    {
        if (is_array($uclM)) {
            $useMinMax = false;
            if (isset($uclM['min'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_M, $uclM['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclM['max'])) {
                $this->addUsingAlias(PopgrowthPeer::UCL_M, $uclM['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::UCL_M, $uclM, $comparison);
    }

    /**
     * Filter the query on the AssumedDistM column
     *
     * Example usage:
     * <code>
     * $query->filterByAssumeddistm('fooValue');   // WHERE AssumedDistM = 'fooValue'
     * $query->filterByAssumeddistm('%fooValue%'); // WHERE AssumedDistM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assumeddistm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByAssumeddistm($assumeddistm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assumeddistm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $assumeddistm)) {
                $assumeddistm = str_replace('*', '%', $assumeddistm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::ASSUMEDDISTM, $assumeddistm, $comparison);
    }

    /**
     * Filter the query on the Lm column
     *
     * Example usage:
     * <code>
     * $query->filterByLm(1234); // WHERE Lm = 1234
     * $query->filterByLm(array(12, 34)); // WHERE Lm IN (12, 34)
     * $query->filterByLm(array('min' => 12)); // WHERE Lm >= 12
     * $query->filterByLm(array('max' => 12)); // WHERE Lm <= 12
     * </code>
     *
     * @param     mixed $lm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLm($lm = null, $comparison = null)
    {
        if (is_array($lm)) {
            $useMinMax = false;
            if (isset($lm['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LM, $lm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lm['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LM, $lm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LM, $lm, $comparison);
    }

    /**
     * Filter the query on the LmLoo column
     *
     * Example usage:
     * <code>
     * $query->filterByLmloo(1234); // WHERE LmLoo = 1234
     * $query->filterByLmloo(array(12, 34)); // WHERE LmLoo IN (12, 34)
     * $query->filterByLmloo(array('min' => 12)); // WHERE LmLoo >= 12
     * $query->filterByLmloo(array('max' => 12)); // WHERE LmLoo <= 12
     * </code>
     *
     * @param     mixed $lmloo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLmloo($lmloo = null, $comparison = null)
    {
        if (is_array($lmloo)) {
            $useMinMax = false;
            if (isset($lmloo['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LMLOO, $lmloo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmloo['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LMLOO, $lmloo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LMLOO, $lmloo, $comparison);
    }

    /**
     * Filter the query on the LmSex column
     *
     * Example usage:
     * <code>
     * $query->filterByLmsex('fooValue');   // WHERE LmSex = 'fooValue'
     * $query->filterByLmsex('%fooValue%'); // WHERE LmSex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lmsex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLmsex($lmsex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lmsex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lmsex)) {
                $lmsex = str_replace('*', '%', $lmsex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LMSEX, $lmsex, $comparison);
    }

    /**
     * Filter the query on the TypeLm column
     *
     * Example usage:
     * <code>
     * $query->filterByTypelm('fooValue');   // WHERE TypeLm = 'fooValue'
     * $query->filterByTypelm('%fooValue%'); // WHERE TypeLm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typelm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTypelm($typelm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typelm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typelm)) {
                $typelm = str_replace('*', '%', $typelm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TYPELM, $typelm, $comparison);
    }

    /**
     * Filter the query on the unsexedRef column
     *
     * Example usage:
     * <code>
     * $query->filterByUnsexedref(1234); // WHERE unsexedRef = 1234
     * $query->filterByUnsexedref(array(12, 34)); // WHERE unsexedRef IN (12, 34)
     * $query->filterByUnsexedref(array('min' => 12)); // WHERE unsexedRef >= 12
     * $query->filterByUnsexedref(array('max' => 12)); // WHERE unsexedRef <= 12
     * </code>
     *
     * @param     mixed $unsexedref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByUnsexedref($unsexedref = null, $comparison = null)
    {
        if (is_array($unsexedref)) {
            $useMinMax = false;
            if (isset($unsexedref['min'])) {
                $this->addUsingAlias(PopgrowthPeer::UNSEXEDREF, $unsexedref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unsexedref['max'])) {
                $this->addUsingAlias(PopgrowthPeer::UNSEXEDREF, $unsexedref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::UNSEXEDREF, $unsexedref, $comparison);
    }

    /**
     * Filter the query on the LmMale column
     *
     * Example usage:
     * <code>
     * $query->filterByLmmale(1234); // WHERE LmMale = 1234
     * $query->filterByLmmale(array(12, 34)); // WHERE LmMale IN (12, 34)
     * $query->filterByLmmale(array('min' => 12)); // WHERE LmMale >= 12
     * $query->filterByLmmale(array('max' => 12)); // WHERE LmMale <= 12
     * </code>
     *
     * @param     mixed $lmmale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLmmale($lmmale = null, $comparison = null)
    {
        if (is_array($lmmale)) {
            $useMinMax = false;
            if (isset($lmmale['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LMMALE, $lmmale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmmale['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LMMALE, $lmmale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LMMALE, $lmmale, $comparison);
    }

    /**
     * Filter the query on the LmLooMale column
     *
     * Example usage:
     * <code>
     * $query->filterByLmloomale(1234); // WHERE LmLooMale = 1234
     * $query->filterByLmloomale(array(12, 34)); // WHERE LmLooMale IN (12, 34)
     * $query->filterByLmloomale(array('min' => 12)); // WHERE LmLooMale >= 12
     * $query->filterByLmloomale(array('max' => 12)); // WHERE LmLooMale <= 12
     * </code>
     *
     * @param     mixed $lmloomale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLmloomale($lmloomale = null, $comparison = null)
    {
        if (is_array($lmloomale)) {
            $useMinMax = false;
            if (isset($lmloomale['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LMLOOMALE, $lmloomale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmloomale['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LMLOOMALE, $lmloomale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LMLOOMALE, $lmloomale, $comparison);
    }

    /**
     * Filter the query on the LmFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByLmfemale(1234); // WHERE LmFemale = 1234
     * $query->filterByLmfemale(array(12, 34)); // WHERE LmFemale IN (12, 34)
     * $query->filterByLmfemale(array('min' => 12)); // WHERE LmFemale >= 12
     * $query->filterByLmfemale(array('max' => 12)); // WHERE LmFemale <= 12
     * </code>
     *
     * @param     mixed $lmfemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLmfemale($lmfemale = null, $comparison = null)
    {
        if (is_array($lmfemale)) {
            $useMinMax = false;
            if (isset($lmfemale['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LMFEMALE, $lmfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmfemale['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LMFEMALE, $lmfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LMFEMALE, $lmfemale, $comparison);
    }

    /**
     * Filter the query on the LmLooFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByLmloofemale(1234); // WHERE LmLooFemale = 1234
     * $query->filterByLmloofemale(array(12, 34)); // WHERE LmLooFemale IN (12, 34)
     * $query->filterByLmloofemale(array('min' => 12)); // WHERE LmLooFemale >= 12
     * $query->filterByLmloofemale(array('max' => 12)); // WHERE LmLooFemale <= 12
     * </code>
     *
     * @param     mixed $lmloofemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLmloofemale($lmloofemale = null, $comparison = null)
    {
        if (is_array($lmloofemale)) {
            $useMinMax = false;
            if (isset($lmloofemale['min'])) {
                $this->addUsingAlias(PopgrowthPeer::LMLOOFEMALE, $lmloofemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmloofemale['max'])) {
                $this->addUsingAlias(PopgrowthPeer::LMLOOFEMALE, $lmloofemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LMLOOFEMALE, $lmloofemale, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the YearStart column
     *
     * Example usage:
     * <code>
     * $query->filterByYearstart(1234); // WHERE YearStart = 1234
     * $query->filterByYearstart(array(12, 34)); // WHERE YearStart IN (12, 34)
     * $query->filterByYearstart(array('min' => 12)); // WHERE YearStart >= 12
     * $query->filterByYearstart(array('max' => 12)); // WHERE YearStart <= 12
     * </code>
     *
     * @param     mixed $yearstart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByYearstart($yearstart = null, $comparison = null)
    {
        if (is_array($yearstart)) {
            $useMinMax = false;
            if (isset($yearstart['min'])) {
                $this->addUsingAlias(PopgrowthPeer::YEARSTART, $yearstart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearstart['max'])) {
                $this->addUsingAlias(PopgrowthPeer::YEARSTART, $yearstart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::YEARSTART, $yearstart, $comparison);
    }

    /**
     * Filter the query on the YearEnd column
     *
     * Example usage:
     * <code>
     * $query->filterByYearend(1234); // WHERE YearEnd = 1234
     * $query->filterByYearend(array(12, 34)); // WHERE YearEnd IN (12, 34)
     * $query->filterByYearend(array('min' => 12)); // WHERE YearEnd >= 12
     * $query->filterByYearend(array('max' => 12)); // WHERE YearEnd <= 12
     * </code>
     *
     * @param     mixed $yearend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByYearend($yearend = null, $comparison = null)
    {
        if (is_array($yearend)) {
            $useMinMax = false;
            if (isset($yearend['min'])) {
                $this->addUsingAlias(PopgrowthPeer::YEAREND, $yearend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearend['max'])) {
                $this->addUsingAlias(PopgrowthPeer::YEAREND, $yearend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::YEAREND, $yearend, $comparison);
    }

    /**
     * Filter the query on the YearRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByYearremark('fooValue');   // WHERE YearRemark = 'fooValue'
     * $query->filterByYearremark('%fooValue%'); // WHERE YearRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yearremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByYearremark($yearremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yearremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yearremark)) {
                $yearremark = str_replace('*', '%', $yearremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::YEARREMARK, $yearremark, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the GrowthEnviron column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthenviron('fooValue');   // WHERE GrowthEnviron = 'fooValue'
     * $query->filterByGrowthenviron('%fooValue%'); // WHERE GrowthEnviron LIKE '%fooValue%'
     * </code>
     *
     * @param     string $growthenviron The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByGrowthenviron($growthenviron = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($growthenviron)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $growthenviron)) {
                $growthenviron = str_replace('*', '%', $growthenviron);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::GROWTHENVIRON, $growthenviron, $comparison);
    }

    /**
     * Filter the query on the Temperature column
     *
     * Example usage:
     * <code>
     * $query->filterByTemperature(1234); // WHERE Temperature = 1234
     * $query->filterByTemperature(array(12, 34)); // WHERE Temperature IN (12, 34)
     * $query->filterByTemperature(array('min' => 12)); // WHERE Temperature >= 12
     * $query->filterByTemperature(array('max' => 12)); // WHERE Temperature <= 12
     * </code>
     *
     * @param     mixed $temperature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTemperature($temperature = null, $comparison = null)
    {
        if (is_array($temperature)) {
            $useMinMax = false;
            if (isset($temperature['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TEMPERATURE, $temperature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperature['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TEMPERATURE, $temperature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TEMPERATURE, $temperature, $comparison);
    }

    /**
     * Filter the query on the DeltaT column
     *
     * Example usage:
     * <code>
     * $query->filterByDeltat(1234); // WHERE DeltaT = 1234
     * $query->filterByDeltat(array(12, 34)); // WHERE DeltaT IN (12, 34)
     * $query->filterByDeltat(array('min' => 12)); // WHERE DeltaT >= 12
     * $query->filterByDeltat(array('max' => 12)); // WHERE DeltaT <= 12
     * </code>
     *
     * @param     mixed $deltat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByDeltat($deltat = null, $comparison = null)
    {
        if (is_array($deltat)) {
            $useMinMax = false;
            if (isset($deltat['min'])) {
                $this->addUsingAlias(PopgrowthPeer::DELTAT, $deltat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deltat['max'])) {
                $this->addUsingAlias(PopgrowthPeer::DELTAT, $deltat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::DELTAT, $deltat, $comparison);
    }

    /**
     * Filter the query on the TempRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTempref(1234); // WHERE TempRef = 1234
     * $query->filterByTempref(array(12, 34)); // WHERE TempRef IN (12, 34)
     * $query->filterByTempref(array('min' => 12)); // WHERE TempRef >= 12
     * $query->filterByTempref(array('max' => 12)); // WHERE TempRef <= 12
     * </code>
     *
     * @param     mixed $tempref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTempref($tempref = null, $comparison = null)
    {
        if (is_array($tempref)) {
            $useMinMax = false;
            if (isset($tempref['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TEMPREF, $tempref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempref['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TEMPREF, $tempref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TEMPREF, $tempref, $comparison);
    }

    /**
     * Filter the query on the Rm column
     *
     * Example usage:
     * <code>
     * $query->filterByRm(1234); // WHERE Rm = 1234
     * $query->filterByRm(array(12, 34)); // WHERE Rm IN (12, 34)
     * $query->filterByRm(array('min' => 12)); // WHERE Rm >= 12
     * $query->filterByRm(array('max' => 12)); // WHERE Rm <= 12
     * </code>
     *
     * @param     mixed $rm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByRm($rm = null, $comparison = null)
    {
        if (is_array($rm)) {
            $useMinMax = false;
            if (isset($rm['min'])) {
                $this->addUsingAlias(PopgrowthPeer::RM, $rm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rm['max'])) {
                $this->addUsingAlias(PopgrowthPeer::RM, $rm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::RM, $rm, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the Comment2 column
     *
     * Example usage:
     * <code>
     * $query->filterByComment2('fooValue');   // WHERE Comment2 = 'fooValue'
     * $query->filterByComment2('%fooValue%'); // WHERE Comment2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByComment2($comment2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment2)) {
                $comment2 = str_replace('*', '%', $comment2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::COMMENT2, $comment2, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PopgrowthPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PopgrowthPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::ENTERED, $entered, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PopgrowthPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PopgrowthPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PopgrowthPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PopgrowthPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::MODIFIED, $modified, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PopgrowthPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PopgrowthPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PopgrowthPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PopgrowthPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::EXPERT, $expert, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PopgrowthPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PopgrowthPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PopgrowthPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PopgrowthPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopgrowthPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Popgrowth $popgrowth Object to remove from the list of results
     *
     * @return PopgrowthQuery The current query, for fluid interface
     */
    public function prune($popgrowth = null)
    {
        if ($popgrowth) {
            $this->addUsingAlias(PopgrowthPeer::AUTOCTR, $popgrowth->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
