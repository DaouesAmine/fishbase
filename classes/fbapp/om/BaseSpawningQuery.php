<?php


/**
 * Base class that represents a query for the 'spawning' table.
 *
 *
 *
 * @method SpawningQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method SpawningQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method SpawningQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SpawningQuery orderBySpawningrefno($order = Criteria::ASC) Order by the SpawningRefNo column
 * @method SpawningQuery orderBySourceref($order = Criteria::ASC) Order by the SourceRef column
 * @method SpawningQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method SpawningQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method SpawningQuery orderBySpawningground($order = Criteria::ASC) Order by the SpawningGround column
 * @method SpawningQuery orderBySpawningarea($order = Criteria::ASC) Order by the Spawningarea column
 * @method SpawningQuery orderByJan($order = Criteria::ASC) Order by the Jan column
 * @method SpawningQuery orderByFeb($order = Criteria::ASC) Order by the Feb column
 * @method SpawningQuery orderByMar($order = Criteria::ASC) Order by the Mar column
 * @method SpawningQuery orderByApr($order = Criteria::ASC) Order by the Apr column
 * @method SpawningQuery orderByMay($order = Criteria::ASC) Order by the May column
 * @method SpawningQuery orderByJun($order = Criteria::ASC) Order by the Jun column
 * @method SpawningQuery orderByJul($order = Criteria::ASC) Order by the Jul column
 * @method SpawningQuery orderByAug($order = Criteria::ASC) Order by the Aug column
 * @method SpawningQuery orderBySep($order = Criteria::ASC) Order by the Sep column
 * @method SpawningQuery orderByOct($order = Criteria::ASC) Order by the Oct column
 * @method SpawningQuery orderByNov($order = Criteria::ASC) Order by the Nov column
 * @method SpawningQuery orderByDec($order = Criteria::ASC) Order by the Dec column
 * @method SpawningQuery orderByGsi($order = Criteria::ASC) Order by the GSI column
 * @method SpawningQuery orderByPercentfemales($order = Criteria::ASC) Order by the PercentFemales column
 * @method SpawningQuery orderByTemplow($order = Criteria::ASC) Order by the TempLow column
 * @method SpawningQuery orderByTemphigh($order = Criteria::ASC) Order by the TempHigh column
 * @method SpawningQuery orderBySexratiomid($order = Criteria::ASC) Order by the SexRatiomid column
 * @method SpawningQuery orderBySexrmodref($order = Criteria::ASC) Order by the SexRmodRef column
 * @method SpawningQuery orderByFecunditymin($order = Criteria::ASC) Order by the FecundityMin column
 * @method SpawningQuery orderByWeightmin($order = Criteria::ASC) Order by the WeightMin column
 * @method SpawningQuery orderByLengthfecunmin($order = Criteria::ASC) Order by the LengthFecunMin column
 * @method SpawningQuery orderByLengthtypefecmin($order = Criteria::ASC) Order by the LengthTypeFecMin column
 * @method SpawningQuery orderByFecundityref($order = Criteria::ASC) Order by the FecundityRef column
 * @method SpawningQuery orderByFecunditymax($order = Criteria::ASC) Order by the FecundityMax column
 * @method SpawningQuery orderByWeightmax($order = Criteria::ASC) Order by the WeightMax column
 * @method SpawningQuery orderByLengthfecunmax($order = Criteria::ASC) Order by the LengthFecunMax column
 * @method SpawningQuery orderByLengthtypefecmax($order = Criteria::ASC) Order by the LengthTypeFecMax column
 * @method SpawningQuery orderByFeccomment($order = Criteria::ASC) Order by the FecComment column
 * @method SpawningQuery orderBySpawningcycles($order = Criteria::ASC) Order by the SpawningCycles column
 * @method SpawningQuery orderBySpcycleref($order = Criteria::ASC) Order by the SpCycleRef column
 * @method SpawningQuery orderByGestationmin($order = Criteria::ASC) Order by the GestationMin column
 * @method SpawningQuery orderByGestationminref($order = Criteria::ASC) Order by the GestationMinRef column
 * @method SpawningQuery orderByGestationmax($order = Criteria::ASC) Order by the GestationMax column
 * @method SpawningQuery orderByGestationmaxref($order = Criteria::ASC) Order by the GestationMaxRef column
 * @method SpawningQuery orderByLengthoffspringmin($order = Criteria::ASC) Order by the LengthOffspringMin column
 * @method SpawningQuery orderByLengthoffminref($order = Criteria::ASC) Order by the LengthOffMinRef column
 * @method SpawningQuery orderByLengthoffspringmax($order = Criteria::ASC) Order by the LengthOffspringMax column
 * @method SpawningQuery orderByLengthoffmaxref($order = Criteria::ASC) Order by the LengthOffMaxRef column
 * @method SpawningQuery orderByRelfecunditymin($order = Criteria::ASC) Order by the RelFecundityMin column
 * @method SpawningQuery orderByFecunminref($order = Criteria::ASC) Order by the FecunMinRef column
 * @method SpawningQuery orderByRelfecunditymean($order = Criteria::ASC) Order by the RelFecundityMean column
 * @method SpawningQuery orderByFecunmeanref($order = Criteria::ASC) Order by the FecunMeanRef column
 * @method SpawningQuery orderByRelfecunditymax($order = Criteria::ASC) Order by the RelFecundityMax column
 * @method SpawningQuery orderByFecunmaxref($order = Criteria::ASC) Order by the FecunMaxRef column
 * @method SpawningQuery orderByLengthmin($order = Criteria::ASC) Order by the LengthMin column
 * @method SpawningQuery orderByLengthmax($order = Criteria::ASC) Order by the LengthMax column
 * @method SpawningQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method SpawningQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method SpawningQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method SpawningQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method SpawningQuery orderByCorrcoeff($order = Criteria::ASC) Order by the CorrCoeff column
 * @method SpawningQuery orderByDailyspawnmin($order = Criteria::ASC) Order by the Dailyspawnmin column
 * @method SpawningQuery orderBySpawnminref($order = Criteria::ASC) Order by the SpawnMinRef column
 * @method SpawningQuery orderByDailyspawnmean($order = Criteria::ASC) Order by the Dailyspawnmean column
 * @method SpawningQuery orderBySpawnmeanref($order = Criteria::ASC) Order by the SpawnMeanRef column
 * @method SpawningQuery orderByDailyspawnmax($order = Criteria::ASC) Order by the Dailyspawnmax column
 * @method SpawningQuery orderBySpawnmaxref($order = Criteria::ASC) Order by the SpawnMaxRef column
 * @method SpawningQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SpawningQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method SpawningQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SpawningQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method SpawningQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SpawningQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method SpawningQuery orderByAddinfos($order = Criteria::ASC) Order by the AddInfos column
 * @method SpawningQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SpawningQuery groupByAutoctr() Group by the autoctr column
 * @method SpawningQuery groupByStockcode() Group by the StockCode column
 * @method SpawningQuery groupBySpeccode() Group by the SpecCode column
 * @method SpawningQuery groupBySpawningrefno() Group by the SpawningRefNo column
 * @method SpawningQuery groupBySourceref() Group by the SourceRef column
 * @method SpawningQuery groupByCCode() Group by the C_Code column
 * @method SpawningQuery groupByECode() Group by the E_CODE column
 * @method SpawningQuery groupBySpawningground() Group by the SpawningGround column
 * @method SpawningQuery groupBySpawningarea() Group by the Spawningarea column
 * @method SpawningQuery groupByJan() Group by the Jan column
 * @method SpawningQuery groupByFeb() Group by the Feb column
 * @method SpawningQuery groupByMar() Group by the Mar column
 * @method SpawningQuery groupByApr() Group by the Apr column
 * @method SpawningQuery groupByMay() Group by the May column
 * @method SpawningQuery groupByJun() Group by the Jun column
 * @method SpawningQuery groupByJul() Group by the Jul column
 * @method SpawningQuery groupByAug() Group by the Aug column
 * @method SpawningQuery groupBySep() Group by the Sep column
 * @method SpawningQuery groupByOct() Group by the Oct column
 * @method SpawningQuery groupByNov() Group by the Nov column
 * @method SpawningQuery groupByDec() Group by the Dec column
 * @method SpawningQuery groupByGsi() Group by the GSI column
 * @method SpawningQuery groupByPercentfemales() Group by the PercentFemales column
 * @method SpawningQuery groupByTemplow() Group by the TempLow column
 * @method SpawningQuery groupByTemphigh() Group by the TempHigh column
 * @method SpawningQuery groupBySexratiomid() Group by the SexRatiomid column
 * @method SpawningQuery groupBySexrmodref() Group by the SexRmodRef column
 * @method SpawningQuery groupByFecunditymin() Group by the FecundityMin column
 * @method SpawningQuery groupByWeightmin() Group by the WeightMin column
 * @method SpawningQuery groupByLengthfecunmin() Group by the LengthFecunMin column
 * @method SpawningQuery groupByLengthtypefecmin() Group by the LengthTypeFecMin column
 * @method SpawningQuery groupByFecundityref() Group by the FecundityRef column
 * @method SpawningQuery groupByFecunditymax() Group by the FecundityMax column
 * @method SpawningQuery groupByWeightmax() Group by the WeightMax column
 * @method SpawningQuery groupByLengthfecunmax() Group by the LengthFecunMax column
 * @method SpawningQuery groupByLengthtypefecmax() Group by the LengthTypeFecMax column
 * @method SpawningQuery groupByFeccomment() Group by the FecComment column
 * @method SpawningQuery groupBySpawningcycles() Group by the SpawningCycles column
 * @method SpawningQuery groupBySpcycleref() Group by the SpCycleRef column
 * @method SpawningQuery groupByGestationmin() Group by the GestationMin column
 * @method SpawningQuery groupByGestationminref() Group by the GestationMinRef column
 * @method SpawningQuery groupByGestationmax() Group by the GestationMax column
 * @method SpawningQuery groupByGestationmaxref() Group by the GestationMaxRef column
 * @method SpawningQuery groupByLengthoffspringmin() Group by the LengthOffspringMin column
 * @method SpawningQuery groupByLengthoffminref() Group by the LengthOffMinRef column
 * @method SpawningQuery groupByLengthoffspringmax() Group by the LengthOffspringMax column
 * @method SpawningQuery groupByLengthoffmaxref() Group by the LengthOffMaxRef column
 * @method SpawningQuery groupByRelfecunditymin() Group by the RelFecundityMin column
 * @method SpawningQuery groupByFecunminref() Group by the FecunMinRef column
 * @method SpawningQuery groupByRelfecunditymean() Group by the RelFecundityMean column
 * @method SpawningQuery groupByFecunmeanref() Group by the FecunMeanRef column
 * @method SpawningQuery groupByRelfecunditymax() Group by the RelFecundityMax column
 * @method SpawningQuery groupByFecunmaxref() Group by the FecunMaxRef column
 * @method SpawningQuery groupByLengthmin() Group by the LengthMin column
 * @method SpawningQuery groupByLengthmax() Group by the LengthMax column
 * @method SpawningQuery groupByLengthtype() Group by the LengthType column
 * @method SpawningQuery groupByNumber() Group by the Number column
 * @method SpawningQuery groupByA() Group by the a column
 * @method SpawningQuery groupByB() Group by the b column
 * @method SpawningQuery groupByCorrcoeff() Group by the CorrCoeff column
 * @method SpawningQuery groupByDailyspawnmin() Group by the Dailyspawnmin column
 * @method SpawningQuery groupBySpawnminref() Group by the SpawnMinRef column
 * @method SpawningQuery groupByDailyspawnmean() Group by the Dailyspawnmean column
 * @method SpawningQuery groupBySpawnmeanref() Group by the SpawnMeanRef column
 * @method SpawningQuery groupByDailyspawnmax() Group by the Dailyspawnmax column
 * @method SpawningQuery groupBySpawnmaxref() Group by the SpawnMaxRef column
 * @method SpawningQuery groupByEntered() Group by the Entered column
 * @method SpawningQuery groupByDateentered() Group by the Dateentered column
 * @method SpawningQuery groupByModified() Group by the Modified column
 * @method SpawningQuery groupByDatemodified() Group by the Datemodified column
 * @method SpawningQuery groupByExpert() Group by the Expert column
 * @method SpawningQuery groupByDatechecked() Group by the Datechecked column
 * @method SpawningQuery groupByAddinfos() Group by the AddInfos column
 * @method SpawningQuery groupByTs() Group by the TS column
 *
 * @method SpawningQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SpawningQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SpawningQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Spawning findOne(PropelPDO $con = null) Return the first Spawning matching the query
 * @method Spawning findOneOrCreate(PropelPDO $con = null) Return the first Spawning matching the query, or a new Spawning object populated from the query conditions when no match is found
 *
 * @method Spawning findOneByAutoctr(int $autoctr) Return the first Spawning filtered by the autoctr column
 * @method Spawning findOneByStockcode(int $StockCode) Return the first Spawning filtered by the StockCode column
 * @method Spawning findOneBySpeccode(int $SpecCode) Return the first Spawning filtered by the SpecCode column
 * @method Spawning findOneBySpawningrefno(int $SpawningRefNo) Return the first Spawning filtered by the SpawningRefNo column
 * @method Spawning findOneBySourceref(int $SourceRef) Return the first Spawning filtered by the SourceRef column
 * @method Spawning findOneByCCode(string $C_Code) Return the first Spawning filtered by the C_Code column
 * @method Spawning findOneByECode(int $E_CODE) Return the first Spawning filtered by the E_CODE column
 * @method Spawning findOneBySpawningground(string $SpawningGround) Return the first Spawning filtered by the SpawningGround column
 * @method Spawning findOneBySpawningarea(string $Spawningarea) Return the first Spawning filtered by the Spawningarea column
 * @method Spawning findOneByJan(double $Jan) Return the first Spawning filtered by the Jan column
 * @method Spawning findOneByFeb(double $Feb) Return the first Spawning filtered by the Feb column
 * @method Spawning findOneByMar(double $Mar) Return the first Spawning filtered by the Mar column
 * @method Spawning findOneByApr(double $Apr) Return the first Spawning filtered by the Apr column
 * @method Spawning findOneByMay(double $May) Return the first Spawning filtered by the May column
 * @method Spawning findOneByJun(double $Jun) Return the first Spawning filtered by the Jun column
 * @method Spawning findOneByJul(double $Jul) Return the first Spawning filtered by the Jul column
 * @method Spawning findOneByAug(double $Aug) Return the first Spawning filtered by the Aug column
 * @method Spawning findOneBySep(double $Sep) Return the first Spawning filtered by the Sep column
 * @method Spawning findOneByOct(double $Oct) Return the first Spawning filtered by the Oct column
 * @method Spawning findOneByNov(double $Nov) Return the first Spawning filtered by the Nov column
 * @method Spawning findOneByDec(double $Dec) Return the first Spawning filtered by the Dec column
 * @method Spawning findOneByGsi(int $GSI) Return the first Spawning filtered by the GSI column
 * @method Spawning findOneByPercentfemales(int $PercentFemales) Return the first Spawning filtered by the PercentFemales column
 * @method Spawning findOneByTemplow(double $TempLow) Return the first Spawning filtered by the TempLow column
 * @method Spawning findOneByTemphigh(double $TempHigh) Return the first Spawning filtered by the TempHigh column
 * @method Spawning findOneBySexratiomid(double $SexRatiomid) Return the first Spawning filtered by the SexRatiomid column
 * @method Spawning findOneBySexrmodref(int $SexRmodRef) Return the first Spawning filtered by the SexRmodRef column
 * @method Spawning findOneByFecunditymin(int $FecundityMin) Return the first Spawning filtered by the FecundityMin column
 * @method Spawning findOneByWeightmin(double $WeightMin) Return the first Spawning filtered by the WeightMin column
 * @method Spawning findOneByLengthfecunmin(double $LengthFecunMin) Return the first Spawning filtered by the LengthFecunMin column
 * @method Spawning findOneByLengthtypefecmin(string $LengthTypeFecMin) Return the first Spawning filtered by the LengthTypeFecMin column
 * @method Spawning findOneByFecundityref(int $FecundityRef) Return the first Spawning filtered by the FecundityRef column
 * @method Spawning findOneByFecunditymax(int $FecundityMax) Return the first Spawning filtered by the FecundityMax column
 * @method Spawning findOneByWeightmax(double $WeightMax) Return the first Spawning filtered by the WeightMax column
 * @method Spawning findOneByLengthfecunmax(double $LengthFecunMax) Return the first Spawning filtered by the LengthFecunMax column
 * @method Spawning findOneByLengthtypefecmax(string $LengthTypeFecMax) Return the first Spawning filtered by the LengthTypeFecMax column
 * @method Spawning findOneByFeccomment(string $FecComment) Return the first Spawning filtered by the FecComment column
 * @method Spawning findOneBySpawningcycles(double $SpawningCycles) Return the first Spawning filtered by the SpawningCycles column
 * @method Spawning findOneBySpcycleref(int $SpCycleRef) Return the first Spawning filtered by the SpCycleRef column
 * @method Spawning findOneByGestationmin(int $GestationMin) Return the first Spawning filtered by the GestationMin column
 * @method Spawning findOneByGestationminref(int $GestationMinRef) Return the first Spawning filtered by the GestationMinRef column
 * @method Spawning findOneByGestationmax(int $GestationMax) Return the first Spawning filtered by the GestationMax column
 * @method Spawning findOneByGestationmaxref(int $GestationMaxRef) Return the first Spawning filtered by the GestationMaxRef column
 * @method Spawning findOneByLengthoffspringmin(double $LengthOffspringMin) Return the first Spawning filtered by the LengthOffspringMin column
 * @method Spawning findOneByLengthoffminref(int $LengthOffMinRef) Return the first Spawning filtered by the LengthOffMinRef column
 * @method Spawning findOneByLengthoffspringmax(double $LengthOffspringMax) Return the first Spawning filtered by the LengthOffspringMax column
 * @method Spawning findOneByLengthoffmaxref(int $LengthOffMaxRef) Return the first Spawning filtered by the LengthOffMaxRef column
 * @method Spawning findOneByRelfecunditymin(int $RelFecundityMin) Return the first Spawning filtered by the RelFecundityMin column
 * @method Spawning findOneByFecunminref(int $FecunMinRef) Return the first Spawning filtered by the FecunMinRef column
 * @method Spawning findOneByRelfecunditymean(int $RelFecundityMean) Return the first Spawning filtered by the RelFecundityMean column
 * @method Spawning findOneByFecunmeanref(int $FecunMeanRef) Return the first Spawning filtered by the FecunMeanRef column
 * @method Spawning findOneByRelfecunditymax(int $RelFecundityMax) Return the first Spawning filtered by the RelFecundityMax column
 * @method Spawning findOneByFecunmaxref(int $FecunMaxRef) Return the first Spawning filtered by the FecunMaxRef column
 * @method Spawning findOneByLengthmin(double $LengthMin) Return the first Spawning filtered by the LengthMin column
 * @method Spawning findOneByLengthmax(double $LengthMax) Return the first Spawning filtered by the LengthMax column
 * @method Spawning findOneByLengthtype(string $LengthType) Return the first Spawning filtered by the LengthType column
 * @method Spawning findOneByNumber(int $Number) Return the first Spawning filtered by the Number column
 * @method Spawning findOneByA(double $a) Return the first Spawning filtered by the a column
 * @method Spawning findOneByB(double $b) Return the first Spawning filtered by the b column
 * @method Spawning findOneByCorrcoeff(double $CorrCoeff) Return the first Spawning filtered by the CorrCoeff column
 * @method Spawning findOneByDailyspawnmin(double $Dailyspawnmin) Return the first Spawning filtered by the Dailyspawnmin column
 * @method Spawning findOneBySpawnminref(int $SpawnMinRef) Return the first Spawning filtered by the SpawnMinRef column
 * @method Spawning findOneByDailyspawnmean(double $Dailyspawnmean) Return the first Spawning filtered by the Dailyspawnmean column
 * @method Spawning findOneBySpawnmeanref(int $SpawnMeanRef) Return the first Spawning filtered by the SpawnMeanRef column
 * @method Spawning findOneByDailyspawnmax(double $Dailyspawnmax) Return the first Spawning filtered by the Dailyspawnmax column
 * @method Spawning findOneBySpawnmaxref(int $SpawnMaxRef) Return the first Spawning filtered by the SpawnMaxRef column
 * @method Spawning findOneByEntered(int $Entered) Return the first Spawning filtered by the Entered column
 * @method Spawning findOneByDateentered(string $Dateentered) Return the first Spawning filtered by the Dateentered column
 * @method Spawning findOneByModified(int $Modified) Return the first Spawning filtered by the Modified column
 * @method Spawning findOneByDatemodified(string $Datemodified) Return the first Spawning filtered by the Datemodified column
 * @method Spawning findOneByExpert(int $Expert) Return the first Spawning filtered by the Expert column
 * @method Spawning findOneByDatechecked(string $Datechecked) Return the first Spawning filtered by the Datechecked column
 * @method Spawning findOneByAddinfos(string $AddInfos) Return the first Spawning filtered by the AddInfos column
 * @method Spawning findOneByTs(string $TS) Return the first Spawning filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Spawning objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Spawning objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Spawning objects filtered by the SpecCode column
 * @method array findBySpawningrefno(int $SpawningRefNo) Return Spawning objects filtered by the SpawningRefNo column
 * @method array findBySourceref(int $SourceRef) Return Spawning objects filtered by the SourceRef column
 * @method array findByCCode(string $C_Code) Return Spawning objects filtered by the C_Code column
 * @method array findByECode(int $E_CODE) Return Spawning objects filtered by the E_CODE column
 * @method array findBySpawningground(string $SpawningGround) Return Spawning objects filtered by the SpawningGround column
 * @method array findBySpawningarea(string $Spawningarea) Return Spawning objects filtered by the Spawningarea column
 * @method array findByJan(double $Jan) Return Spawning objects filtered by the Jan column
 * @method array findByFeb(double $Feb) Return Spawning objects filtered by the Feb column
 * @method array findByMar(double $Mar) Return Spawning objects filtered by the Mar column
 * @method array findByApr(double $Apr) Return Spawning objects filtered by the Apr column
 * @method array findByMay(double $May) Return Spawning objects filtered by the May column
 * @method array findByJun(double $Jun) Return Spawning objects filtered by the Jun column
 * @method array findByJul(double $Jul) Return Spawning objects filtered by the Jul column
 * @method array findByAug(double $Aug) Return Spawning objects filtered by the Aug column
 * @method array findBySep(double $Sep) Return Spawning objects filtered by the Sep column
 * @method array findByOct(double $Oct) Return Spawning objects filtered by the Oct column
 * @method array findByNov(double $Nov) Return Spawning objects filtered by the Nov column
 * @method array findByDec(double $Dec) Return Spawning objects filtered by the Dec column
 * @method array findByGsi(int $GSI) Return Spawning objects filtered by the GSI column
 * @method array findByPercentfemales(int $PercentFemales) Return Spawning objects filtered by the PercentFemales column
 * @method array findByTemplow(double $TempLow) Return Spawning objects filtered by the TempLow column
 * @method array findByTemphigh(double $TempHigh) Return Spawning objects filtered by the TempHigh column
 * @method array findBySexratiomid(double $SexRatiomid) Return Spawning objects filtered by the SexRatiomid column
 * @method array findBySexrmodref(int $SexRmodRef) Return Spawning objects filtered by the SexRmodRef column
 * @method array findByFecunditymin(int $FecundityMin) Return Spawning objects filtered by the FecundityMin column
 * @method array findByWeightmin(double $WeightMin) Return Spawning objects filtered by the WeightMin column
 * @method array findByLengthfecunmin(double $LengthFecunMin) Return Spawning objects filtered by the LengthFecunMin column
 * @method array findByLengthtypefecmin(string $LengthTypeFecMin) Return Spawning objects filtered by the LengthTypeFecMin column
 * @method array findByFecundityref(int $FecundityRef) Return Spawning objects filtered by the FecundityRef column
 * @method array findByFecunditymax(int $FecundityMax) Return Spawning objects filtered by the FecundityMax column
 * @method array findByWeightmax(double $WeightMax) Return Spawning objects filtered by the WeightMax column
 * @method array findByLengthfecunmax(double $LengthFecunMax) Return Spawning objects filtered by the LengthFecunMax column
 * @method array findByLengthtypefecmax(string $LengthTypeFecMax) Return Spawning objects filtered by the LengthTypeFecMax column
 * @method array findByFeccomment(string $FecComment) Return Spawning objects filtered by the FecComment column
 * @method array findBySpawningcycles(double $SpawningCycles) Return Spawning objects filtered by the SpawningCycles column
 * @method array findBySpcycleref(int $SpCycleRef) Return Spawning objects filtered by the SpCycleRef column
 * @method array findByGestationmin(int $GestationMin) Return Spawning objects filtered by the GestationMin column
 * @method array findByGestationminref(int $GestationMinRef) Return Spawning objects filtered by the GestationMinRef column
 * @method array findByGestationmax(int $GestationMax) Return Spawning objects filtered by the GestationMax column
 * @method array findByGestationmaxref(int $GestationMaxRef) Return Spawning objects filtered by the GestationMaxRef column
 * @method array findByLengthoffspringmin(double $LengthOffspringMin) Return Spawning objects filtered by the LengthOffspringMin column
 * @method array findByLengthoffminref(int $LengthOffMinRef) Return Spawning objects filtered by the LengthOffMinRef column
 * @method array findByLengthoffspringmax(double $LengthOffspringMax) Return Spawning objects filtered by the LengthOffspringMax column
 * @method array findByLengthoffmaxref(int $LengthOffMaxRef) Return Spawning objects filtered by the LengthOffMaxRef column
 * @method array findByRelfecunditymin(int $RelFecundityMin) Return Spawning objects filtered by the RelFecundityMin column
 * @method array findByFecunminref(int $FecunMinRef) Return Spawning objects filtered by the FecunMinRef column
 * @method array findByRelfecunditymean(int $RelFecundityMean) Return Spawning objects filtered by the RelFecundityMean column
 * @method array findByFecunmeanref(int $FecunMeanRef) Return Spawning objects filtered by the FecunMeanRef column
 * @method array findByRelfecunditymax(int $RelFecundityMax) Return Spawning objects filtered by the RelFecundityMax column
 * @method array findByFecunmaxref(int $FecunMaxRef) Return Spawning objects filtered by the FecunMaxRef column
 * @method array findByLengthmin(double $LengthMin) Return Spawning objects filtered by the LengthMin column
 * @method array findByLengthmax(double $LengthMax) Return Spawning objects filtered by the LengthMax column
 * @method array findByLengthtype(string $LengthType) Return Spawning objects filtered by the LengthType column
 * @method array findByNumber(int $Number) Return Spawning objects filtered by the Number column
 * @method array findByA(double $a) Return Spawning objects filtered by the a column
 * @method array findByB(double $b) Return Spawning objects filtered by the b column
 * @method array findByCorrcoeff(double $CorrCoeff) Return Spawning objects filtered by the CorrCoeff column
 * @method array findByDailyspawnmin(double $Dailyspawnmin) Return Spawning objects filtered by the Dailyspawnmin column
 * @method array findBySpawnminref(int $SpawnMinRef) Return Spawning objects filtered by the SpawnMinRef column
 * @method array findByDailyspawnmean(double $Dailyspawnmean) Return Spawning objects filtered by the Dailyspawnmean column
 * @method array findBySpawnmeanref(int $SpawnMeanRef) Return Spawning objects filtered by the SpawnMeanRef column
 * @method array findByDailyspawnmax(double $Dailyspawnmax) Return Spawning objects filtered by the Dailyspawnmax column
 * @method array findBySpawnmaxref(int $SpawnMaxRef) Return Spawning objects filtered by the SpawnMaxRef column
 * @method array findByEntered(int $Entered) Return Spawning objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Spawning objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Spawning objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Spawning objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Spawning objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Spawning objects filtered by the Datechecked column
 * @method array findByAddinfos(string $AddInfos) Return Spawning objects filtered by the AddInfos column
 * @method array findByTs(string $TS) Return Spawning objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpawningQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSpawningQuery object.
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
            $modelName = 'Spawning';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SpawningQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SpawningQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SpawningQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SpawningQuery) {
            return $criteria;
        }
        $query = new SpawningQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $SpawningRefNo, $Spawningarea]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Spawning|Spawning[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SpawningPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Spawning A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `SpawningRefNo`, `SourceRef`, `C_Code`, `E_CODE`, `SpawningGround`, `Spawningarea`, `Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`, `GSI`, `PercentFemales`, `TempLow`, `TempHigh`, `SexRatiomid`, `SexRmodRef`, `FecundityMin`, `WeightMin`, `LengthFecunMin`, `LengthTypeFecMin`, `FecundityRef`, `FecundityMax`, `WeightMax`, `LengthFecunMax`, `LengthTypeFecMax`, `FecComment`, `SpawningCycles`, `SpCycleRef`, `GestationMin`, `GestationMinRef`, `GestationMax`, `GestationMaxRef`, `LengthOffspringMin`, `LengthOffMinRef`, `LengthOffspringMax`, `LengthOffMaxRef`, `RelFecundityMin`, `FecunMinRef`, `RelFecundityMean`, `FecunMeanRef`, `RelFecundityMax`, `FecunMaxRef`, `LengthMin`, `LengthMax`, `LengthType`, `Number`, `a`, `b`, `CorrCoeff`, `Dailyspawnmin`, `SpawnMinRef`, `Dailyspawnmean`, `SpawnMeanRef`, `Dailyspawnmax`, `SpawnMaxRef`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `AddInfos`, `TS` FROM `spawning` WHERE `StockCode` = :p0 AND `SpawningRefNo` = :p1 AND `Spawningarea` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Spawning();
            $obj->hydrate($row);
            SpawningPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Spawning|Spawning[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Spawning[]|mixed the list of results, formatted by the current formatter
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SpawningPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpawningPeer::SPAWNINGREFNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(SpawningPeer::SPAWNINGAREA, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SpawningPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpawningPeer::SPAWNINGREFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(SpawningPeer::SPAWNINGAREA, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(SpawningPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(SpawningPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(SpawningPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(SpawningPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SpawningPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SpawningPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SpawningRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningrefno(1234); // WHERE SpawningRefNo = 1234
     * $query->filterBySpawningrefno(array(12, 34)); // WHERE SpawningRefNo IN (12, 34)
     * $query->filterBySpawningrefno(array('min' => 12)); // WHERE SpawningRefNo >= 12
     * $query->filterBySpawningrefno(array('max' => 12)); // WHERE SpawningRefNo <= 12
     * </code>
     *
     * @param     mixed $spawningrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawningrefno($spawningrefno = null, $comparison = null)
    {
        if (is_array($spawningrefno)) {
            $useMinMax = false;
            if (isset($spawningrefno['min'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNINGREFNO, $spawningrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningrefno['max'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNINGREFNO, $spawningrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNINGREFNO, $spawningrefno, $comparison);
    }

    /**
     * Filter the query on the SourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceref(1234); // WHERE SourceRef = 1234
     * $query->filterBySourceref(array(12, 34)); // WHERE SourceRef IN (12, 34)
     * $query->filterBySourceref(array('min' => 12)); // WHERE SourceRef >= 12
     * $query->filterBySourceref(array('max' => 12)); // WHERE SourceRef <= 12
     * </code>
     *
     * @param     mixed $sourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySourceref($sourceref = null, $comparison = null)
    {
        if (is_array($sourceref)) {
            $useMinMax = false;
            if (isset($sourceref['min'])) {
                $this->addUsingAlias(SpawningPeer::SOURCEREF, $sourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sourceref['max'])) {
                $this->addUsingAlias(SpawningPeer::SOURCEREF, $sourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SOURCEREF, $sourceref, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpawningPeer::C_CODE, $cCode, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(SpawningPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(SpawningPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the SpawningGround column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningground('fooValue');   // WHERE SpawningGround = 'fooValue'
     * $query->filterBySpawningground('%fooValue%'); // WHERE SpawningGround LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spawningground The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawningground($spawningground = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spawningground)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spawningground)) {
                $spawningground = str_replace('*', '%', $spawningground);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNINGGROUND, $spawningground, $comparison);
    }

    /**
     * Filter the query on the Spawningarea column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningarea('fooValue');   // WHERE Spawningarea = 'fooValue'
     * $query->filterBySpawningarea('%fooValue%'); // WHERE Spawningarea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spawningarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawningarea($spawningarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spawningarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spawningarea)) {
                $spawningarea = str_replace('*', '%', $spawningarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNINGAREA, $spawningarea, $comparison);
    }

    /**
     * Filter the query on the Jan column
     *
     * Example usage:
     * <code>
     * $query->filterByJan(1234); // WHERE Jan = 1234
     * $query->filterByJan(array(12, 34)); // WHERE Jan IN (12, 34)
     * $query->filterByJan(array('min' => 12)); // WHERE Jan >= 12
     * $query->filterByJan(array('max' => 12)); // WHERE Jan <= 12
     * </code>
     *
     * @param     mixed $jan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByJan($jan = null, $comparison = null)
    {
        if (is_array($jan)) {
            $useMinMax = false;
            if (isset($jan['min'])) {
                $this->addUsingAlias(SpawningPeer::JAN, $jan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jan['max'])) {
                $this->addUsingAlias(SpawningPeer::JAN, $jan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::JAN, $jan, $comparison);
    }

    /**
     * Filter the query on the Feb column
     *
     * Example usage:
     * <code>
     * $query->filterByFeb(1234); // WHERE Feb = 1234
     * $query->filterByFeb(array(12, 34)); // WHERE Feb IN (12, 34)
     * $query->filterByFeb(array('min' => 12)); // WHERE Feb >= 12
     * $query->filterByFeb(array('max' => 12)); // WHERE Feb <= 12
     * </code>
     *
     * @param     mixed $feb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFeb($feb = null, $comparison = null)
    {
        if (is_array($feb)) {
            $useMinMax = false;
            if (isset($feb['min'])) {
                $this->addUsingAlias(SpawningPeer::FEB, $feb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feb['max'])) {
                $this->addUsingAlias(SpawningPeer::FEB, $feb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FEB, $feb, $comparison);
    }

    /**
     * Filter the query on the Mar column
     *
     * Example usage:
     * <code>
     * $query->filterByMar(1234); // WHERE Mar = 1234
     * $query->filterByMar(array(12, 34)); // WHERE Mar IN (12, 34)
     * $query->filterByMar(array('min' => 12)); // WHERE Mar >= 12
     * $query->filterByMar(array('max' => 12)); // WHERE Mar <= 12
     * </code>
     *
     * @param     mixed $mar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByMar($mar = null, $comparison = null)
    {
        if (is_array($mar)) {
            $useMinMax = false;
            if (isset($mar['min'])) {
                $this->addUsingAlias(SpawningPeer::MAR, $mar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mar['max'])) {
                $this->addUsingAlias(SpawningPeer::MAR, $mar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::MAR, $mar, $comparison);
    }

    /**
     * Filter the query on the Apr column
     *
     * Example usage:
     * <code>
     * $query->filterByApr(1234); // WHERE Apr = 1234
     * $query->filterByApr(array(12, 34)); // WHERE Apr IN (12, 34)
     * $query->filterByApr(array('min' => 12)); // WHERE Apr >= 12
     * $query->filterByApr(array('max' => 12)); // WHERE Apr <= 12
     * </code>
     *
     * @param     mixed $apr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByApr($apr = null, $comparison = null)
    {
        if (is_array($apr)) {
            $useMinMax = false;
            if (isset($apr['min'])) {
                $this->addUsingAlias(SpawningPeer::APR, $apr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($apr['max'])) {
                $this->addUsingAlias(SpawningPeer::APR, $apr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::APR, $apr, $comparison);
    }

    /**
     * Filter the query on the May column
     *
     * Example usage:
     * <code>
     * $query->filterByMay(1234); // WHERE May = 1234
     * $query->filterByMay(array(12, 34)); // WHERE May IN (12, 34)
     * $query->filterByMay(array('min' => 12)); // WHERE May >= 12
     * $query->filterByMay(array('max' => 12)); // WHERE May <= 12
     * </code>
     *
     * @param     mixed $may The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByMay($may = null, $comparison = null)
    {
        if (is_array($may)) {
            $useMinMax = false;
            if (isset($may['min'])) {
                $this->addUsingAlias(SpawningPeer::MAY, $may['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($may['max'])) {
                $this->addUsingAlias(SpawningPeer::MAY, $may['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::MAY, $may, $comparison);
    }

    /**
     * Filter the query on the Jun column
     *
     * Example usage:
     * <code>
     * $query->filterByJun(1234); // WHERE Jun = 1234
     * $query->filterByJun(array(12, 34)); // WHERE Jun IN (12, 34)
     * $query->filterByJun(array('min' => 12)); // WHERE Jun >= 12
     * $query->filterByJun(array('max' => 12)); // WHERE Jun <= 12
     * </code>
     *
     * @param     mixed $jun The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByJun($jun = null, $comparison = null)
    {
        if (is_array($jun)) {
            $useMinMax = false;
            if (isset($jun['min'])) {
                $this->addUsingAlias(SpawningPeer::JUN, $jun['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jun['max'])) {
                $this->addUsingAlias(SpawningPeer::JUN, $jun['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::JUN, $jun, $comparison);
    }

    /**
     * Filter the query on the Jul column
     *
     * Example usage:
     * <code>
     * $query->filterByJul(1234); // WHERE Jul = 1234
     * $query->filterByJul(array(12, 34)); // WHERE Jul IN (12, 34)
     * $query->filterByJul(array('min' => 12)); // WHERE Jul >= 12
     * $query->filterByJul(array('max' => 12)); // WHERE Jul <= 12
     * </code>
     *
     * @param     mixed $jul The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByJul($jul = null, $comparison = null)
    {
        if (is_array($jul)) {
            $useMinMax = false;
            if (isset($jul['min'])) {
                $this->addUsingAlias(SpawningPeer::JUL, $jul['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jul['max'])) {
                $this->addUsingAlias(SpawningPeer::JUL, $jul['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::JUL, $jul, $comparison);
    }

    /**
     * Filter the query on the Aug column
     *
     * Example usage:
     * <code>
     * $query->filterByAug(1234); // WHERE Aug = 1234
     * $query->filterByAug(array(12, 34)); // WHERE Aug IN (12, 34)
     * $query->filterByAug(array('min' => 12)); // WHERE Aug >= 12
     * $query->filterByAug(array('max' => 12)); // WHERE Aug <= 12
     * </code>
     *
     * @param     mixed $aug The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByAug($aug = null, $comparison = null)
    {
        if (is_array($aug)) {
            $useMinMax = false;
            if (isset($aug['min'])) {
                $this->addUsingAlias(SpawningPeer::AUG, $aug['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aug['max'])) {
                $this->addUsingAlias(SpawningPeer::AUG, $aug['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::AUG, $aug, $comparison);
    }

    /**
     * Filter the query on the Sep column
     *
     * Example usage:
     * <code>
     * $query->filterBySep(1234); // WHERE Sep = 1234
     * $query->filterBySep(array(12, 34)); // WHERE Sep IN (12, 34)
     * $query->filterBySep(array('min' => 12)); // WHERE Sep >= 12
     * $query->filterBySep(array('max' => 12)); // WHERE Sep <= 12
     * </code>
     *
     * @param     mixed $sep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySep($sep = null, $comparison = null)
    {
        if (is_array($sep)) {
            $useMinMax = false;
            if (isset($sep['min'])) {
                $this->addUsingAlias(SpawningPeer::SEP, $sep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sep['max'])) {
                $this->addUsingAlias(SpawningPeer::SEP, $sep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SEP, $sep, $comparison);
    }

    /**
     * Filter the query on the Oct column
     *
     * Example usage:
     * <code>
     * $query->filterByOct(1234); // WHERE Oct = 1234
     * $query->filterByOct(array(12, 34)); // WHERE Oct IN (12, 34)
     * $query->filterByOct(array('min' => 12)); // WHERE Oct >= 12
     * $query->filterByOct(array('max' => 12)); // WHERE Oct <= 12
     * </code>
     *
     * @param     mixed $oct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByOct($oct = null, $comparison = null)
    {
        if (is_array($oct)) {
            $useMinMax = false;
            if (isset($oct['min'])) {
                $this->addUsingAlias(SpawningPeer::OCT, $oct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oct['max'])) {
                $this->addUsingAlias(SpawningPeer::OCT, $oct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::OCT, $oct, $comparison);
    }

    /**
     * Filter the query on the Nov column
     *
     * Example usage:
     * <code>
     * $query->filterByNov(1234); // WHERE Nov = 1234
     * $query->filterByNov(array(12, 34)); // WHERE Nov IN (12, 34)
     * $query->filterByNov(array('min' => 12)); // WHERE Nov >= 12
     * $query->filterByNov(array('max' => 12)); // WHERE Nov <= 12
     * </code>
     *
     * @param     mixed $nov The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByNov($nov = null, $comparison = null)
    {
        if (is_array($nov)) {
            $useMinMax = false;
            if (isset($nov['min'])) {
                $this->addUsingAlias(SpawningPeer::NOV, $nov['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nov['max'])) {
                $this->addUsingAlias(SpawningPeer::NOV, $nov['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::NOV, $nov, $comparison);
    }

    /**
     * Filter the query on the Dec column
     *
     * Example usage:
     * <code>
     * $query->filterByDec(1234); // WHERE Dec = 1234
     * $query->filterByDec(array(12, 34)); // WHERE Dec IN (12, 34)
     * $query->filterByDec(array('min' => 12)); // WHERE Dec >= 12
     * $query->filterByDec(array('max' => 12)); // WHERE Dec <= 12
     * </code>
     *
     * @param     mixed $dec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDec($dec = null, $comparison = null)
    {
        if (is_array($dec)) {
            $useMinMax = false;
            if (isset($dec['min'])) {
                $this->addUsingAlias(SpawningPeer::DEC, $dec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dec['max'])) {
                $this->addUsingAlias(SpawningPeer::DEC, $dec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DEC, $dec, $comparison);
    }

    /**
     * Filter the query on the GSI column
     *
     * Example usage:
     * <code>
     * $query->filterByGsi(1234); // WHERE GSI = 1234
     * $query->filterByGsi(array(12, 34)); // WHERE GSI IN (12, 34)
     * $query->filterByGsi(array('min' => 12)); // WHERE GSI >= 12
     * $query->filterByGsi(array('max' => 12)); // WHERE GSI <= 12
     * </code>
     *
     * @param     mixed $gsi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByGsi($gsi = null, $comparison = null)
    {
        if (is_array($gsi)) {
            $useMinMax = false;
            if (isset($gsi['min'])) {
                $this->addUsingAlias(SpawningPeer::GSI, $gsi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gsi['max'])) {
                $this->addUsingAlias(SpawningPeer::GSI, $gsi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::GSI, $gsi, $comparison);
    }

    /**
     * Filter the query on the PercentFemales column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentfemales(1234); // WHERE PercentFemales = 1234
     * $query->filterByPercentfemales(array(12, 34)); // WHERE PercentFemales IN (12, 34)
     * $query->filterByPercentfemales(array('min' => 12)); // WHERE PercentFemales >= 12
     * $query->filterByPercentfemales(array('max' => 12)); // WHERE PercentFemales <= 12
     * </code>
     *
     * @param     mixed $percentfemales The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByPercentfemales($percentfemales = null, $comparison = null)
    {
        if (is_array($percentfemales)) {
            $useMinMax = false;
            if (isset($percentfemales['min'])) {
                $this->addUsingAlias(SpawningPeer::PERCENTFEMALES, $percentfemales['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentfemales['max'])) {
                $this->addUsingAlias(SpawningPeer::PERCENTFEMALES, $percentfemales['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::PERCENTFEMALES, $percentfemales, $comparison);
    }

    /**
     * Filter the query on the TempLow column
     *
     * Example usage:
     * <code>
     * $query->filterByTemplow(1234); // WHERE TempLow = 1234
     * $query->filterByTemplow(array(12, 34)); // WHERE TempLow IN (12, 34)
     * $query->filterByTemplow(array('min' => 12)); // WHERE TempLow >= 12
     * $query->filterByTemplow(array('max' => 12)); // WHERE TempLow <= 12
     * </code>
     *
     * @param     mixed $templow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByTemplow($templow = null, $comparison = null)
    {
        if (is_array($templow)) {
            $useMinMax = false;
            if (isset($templow['min'])) {
                $this->addUsingAlias(SpawningPeer::TEMPLOW, $templow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($templow['max'])) {
                $this->addUsingAlias(SpawningPeer::TEMPLOW, $templow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::TEMPLOW, $templow, $comparison);
    }

    /**
     * Filter the query on the TempHigh column
     *
     * Example usage:
     * <code>
     * $query->filterByTemphigh(1234); // WHERE TempHigh = 1234
     * $query->filterByTemphigh(array(12, 34)); // WHERE TempHigh IN (12, 34)
     * $query->filterByTemphigh(array('min' => 12)); // WHERE TempHigh >= 12
     * $query->filterByTemphigh(array('max' => 12)); // WHERE TempHigh <= 12
     * </code>
     *
     * @param     mixed $temphigh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByTemphigh($temphigh = null, $comparison = null)
    {
        if (is_array($temphigh)) {
            $useMinMax = false;
            if (isset($temphigh['min'])) {
                $this->addUsingAlias(SpawningPeer::TEMPHIGH, $temphigh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temphigh['max'])) {
                $this->addUsingAlias(SpawningPeer::TEMPHIGH, $temphigh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::TEMPHIGH, $temphigh, $comparison);
    }

    /**
     * Filter the query on the SexRatiomid column
     *
     * Example usage:
     * <code>
     * $query->filterBySexratiomid(1234); // WHERE SexRatiomid = 1234
     * $query->filterBySexratiomid(array(12, 34)); // WHERE SexRatiomid IN (12, 34)
     * $query->filterBySexratiomid(array('min' => 12)); // WHERE SexRatiomid >= 12
     * $query->filterBySexratiomid(array('max' => 12)); // WHERE SexRatiomid <= 12
     * </code>
     *
     * @param     mixed $sexratiomid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySexratiomid($sexratiomid = null, $comparison = null)
    {
        if (is_array($sexratiomid)) {
            $useMinMax = false;
            if (isset($sexratiomid['min'])) {
                $this->addUsingAlias(SpawningPeer::SEXRATIOMID, $sexratiomid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sexratiomid['max'])) {
                $this->addUsingAlias(SpawningPeer::SEXRATIOMID, $sexratiomid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SEXRATIOMID, $sexratiomid, $comparison);
    }

    /**
     * Filter the query on the SexRmodRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySexrmodref(1234); // WHERE SexRmodRef = 1234
     * $query->filterBySexrmodref(array(12, 34)); // WHERE SexRmodRef IN (12, 34)
     * $query->filterBySexrmodref(array('min' => 12)); // WHERE SexRmodRef >= 12
     * $query->filterBySexrmodref(array('max' => 12)); // WHERE SexRmodRef <= 12
     * </code>
     *
     * @param     mixed $sexrmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySexrmodref($sexrmodref = null, $comparison = null)
    {
        if (is_array($sexrmodref)) {
            $useMinMax = false;
            if (isset($sexrmodref['min'])) {
                $this->addUsingAlias(SpawningPeer::SEXRMODREF, $sexrmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sexrmodref['max'])) {
                $this->addUsingAlias(SpawningPeer::SEXRMODREF, $sexrmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SEXRMODREF, $sexrmodref, $comparison);
    }

    /**
     * Filter the query on the FecundityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunditymin(1234); // WHERE FecundityMin = 1234
     * $query->filterByFecunditymin(array(12, 34)); // WHERE FecundityMin IN (12, 34)
     * $query->filterByFecunditymin(array('min' => 12)); // WHERE FecundityMin >= 12
     * $query->filterByFecunditymin(array('max' => 12)); // WHERE FecundityMin <= 12
     * </code>
     *
     * @param     mixed $fecunditymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFecunditymin($fecunditymin = null, $comparison = null)
    {
        if (is_array($fecunditymin)) {
            $useMinMax = false;
            if (isset($fecunditymin['min'])) {
                $this->addUsingAlias(SpawningPeer::FECUNDITYMIN, $fecunditymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunditymin['max'])) {
                $this->addUsingAlias(SpawningPeer::FECUNDITYMIN, $fecunditymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECUNDITYMIN, $fecunditymin, $comparison);
    }

    /**
     * Filter the query on the WeightMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightmin(1234); // WHERE WeightMin = 1234
     * $query->filterByWeightmin(array(12, 34)); // WHERE WeightMin IN (12, 34)
     * $query->filterByWeightmin(array('min' => 12)); // WHERE WeightMin >= 12
     * $query->filterByWeightmin(array('max' => 12)); // WHERE WeightMin <= 12
     * </code>
     *
     * @param     mixed $weightmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByWeightmin($weightmin = null, $comparison = null)
    {
        if (is_array($weightmin)) {
            $useMinMax = false;
            if (isset($weightmin['min'])) {
                $this->addUsingAlias(SpawningPeer::WEIGHTMIN, $weightmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightmin['max'])) {
                $this->addUsingAlias(SpawningPeer::WEIGHTMIN, $weightmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::WEIGHTMIN, $weightmin, $comparison);
    }

    /**
     * Filter the query on the LengthFecunMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfecunmin(1234); // WHERE LengthFecunMin = 1234
     * $query->filterByLengthfecunmin(array(12, 34)); // WHERE LengthFecunMin IN (12, 34)
     * $query->filterByLengthfecunmin(array('min' => 12)); // WHERE LengthFecunMin >= 12
     * $query->filterByLengthfecunmin(array('max' => 12)); // WHERE LengthFecunMin <= 12
     * </code>
     *
     * @param     mixed $lengthfecunmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthfecunmin($lengthfecunmin = null, $comparison = null)
    {
        if (is_array($lengthfecunmin)) {
            $useMinMax = false;
            if (isset($lengthfecunmin['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHFECUNMIN, $lengthfecunmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfecunmin['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHFECUNMIN, $lengthfecunmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHFECUNMIN, $lengthfecunmin, $comparison);
    }

    /**
     * Filter the query on the LengthTypeFecMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtypefecmin('fooValue');   // WHERE LengthTypeFecMin = 'fooValue'
     * $query->filterByLengthtypefecmin('%fooValue%'); // WHERE LengthTypeFecMin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtypefecmin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthtypefecmin($lengthtypefecmin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtypefecmin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtypefecmin)) {
                $lengthtypefecmin = str_replace('*', '%', $lengthtypefecmin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHTYPEFECMIN, $lengthtypefecmin, $comparison);
    }

    /**
     * Filter the query on the FecundityRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecundityref(1234); // WHERE FecundityRef = 1234
     * $query->filterByFecundityref(array(12, 34)); // WHERE FecundityRef IN (12, 34)
     * $query->filterByFecundityref(array('min' => 12)); // WHERE FecundityRef >= 12
     * $query->filterByFecundityref(array('max' => 12)); // WHERE FecundityRef <= 12
     * </code>
     *
     * @param     mixed $fecundityref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFecundityref($fecundityref = null, $comparison = null)
    {
        if (is_array($fecundityref)) {
            $useMinMax = false;
            if (isset($fecundityref['min'])) {
                $this->addUsingAlias(SpawningPeer::FECUNDITYREF, $fecundityref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecundityref['max'])) {
                $this->addUsingAlias(SpawningPeer::FECUNDITYREF, $fecundityref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECUNDITYREF, $fecundityref, $comparison);
    }

    /**
     * Filter the query on the FecundityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunditymax(1234); // WHERE FecundityMax = 1234
     * $query->filterByFecunditymax(array(12, 34)); // WHERE FecundityMax IN (12, 34)
     * $query->filterByFecunditymax(array('min' => 12)); // WHERE FecundityMax >= 12
     * $query->filterByFecunditymax(array('max' => 12)); // WHERE FecundityMax <= 12
     * </code>
     *
     * @param     mixed $fecunditymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFecunditymax($fecunditymax = null, $comparison = null)
    {
        if (is_array($fecunditymax)) {
            $useMinMax = false;
            if (isset($fecunditymax['min'])) {
                $this->addUsingAlias(SpawningPeer::FECUNDITYMAX, $fecunditymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunditymax['max'])) {
                $this->addUsingAlias(SpawningPeer::FECUNDITYMAX, $fecunditymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECUNDITYMAX, $fecunditymax, $comparison);
    }

    /**
     * Filter the query on the WeightMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightmax(1234); // WHERE WeightMax = 1234
     * $query->filterByWeightmax(array(12, 34)); // WHERE WeightMax IN (12, 34)
     * $query->filterByWeightmax(array('min' => 12)); // WHERE WeightMax >= 12
     * $query->filterByWeightmax(array('max' => 12)); // WHERE WeightMax <= 12
     * </code>
     *
     * @param     mixed $weightmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByWeightmax($weightmax = null, $comparison = null)
    {
        if (is_array($weightmax)) {
            $useMinMax = false;
            if (isset($weightmax['min'])) {
                $this->addUsingAlias(SpawningPeer::WEIGHTMAX, $weightmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightmax['max'])) {
                $this->addUsingAlias(SpawningPeer::WEIGHTMAX, $weightmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::WEIGHTMAX, $weightmax, $comparison);
    }

    /**
     * Filter the query on the LengthFecunMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfecunmax(1234); // WHERE LengthFecunMax = 1234
     * $query->filterByLengthfecunmax(array(12, 34)); // WHERE LengthFecunMax IN (12, 34)
     * $query->filterByLengthfecunmax(array('min' => 12)); // WHERE LengthFecunMax >= 12
     * $query->filterByLengthfecunmax(array('max' => 12)); // WHERE LengthFecunMax <= 12
     * </code>
     *
     * @param     mixed $lengthfecunmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthfecunmax($lengthfecunmax = null, $comparison = null)
    {
        if (is_array($lengthfecunmax)) {
            $useMinMax = false;
            if (isset($lengthfecunmax['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHFECUNMAX, $lengthfecunmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfecunmax['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHFECUNMAX, $lengthfecunmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHFECUNMAX, $lengthfecunmax, $comparison);
    }

    /**
     * Filter the query on the LengthTypeFecMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtypefecmax('fooValue');   // WHERE LengthTypeFecMax = 'fooValue'
     * $query->filterByLengthtypefecmax('%fooValue%'); // WHERE LengthTypeFecMax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtypefecmax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthtypefecmax($lengthtypefecmax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtypefecmax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtypefecmax)) {
                $lengthtypefecmax = str_replace('*', '%', $lengthtypefecmax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHTYPEFECMAX, $lengthtypefecmax, $comparison);
    }

    /**
     * Filter the query on the FecComment column
     *
     * Example usage:
     * <code>
     * $query->filterByFeccomment('fooValue');   // WHERE FecComment = 'fooValue'
     * $query->filterByFeccomment('%fooValue%'); // WHERE FecComment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $feccomment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFeccomment($feccomment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($feccomment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $feccomment)) {
                $feccomment = str_replace('*', '%', $feccomment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECCOMMENT, $feccomment, $comparison);
    }

    /**
     * Filter the query on the SpawningCycles column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningcycles(1234); // WHERE SpawningCycles = 1234
     * $query->filterBySpawningcycles(array(12, 34)); // WHERE SpawningCycles IN (12, 34)
     * $query->filterBySpawningcycles(array('min' => 12)); // WHERE SpawningCycles >= 12
     * $query->filterBySpawningcycles(array('max' => 12)); // WHERE SpawningCycles <= 12
     * </code>
     *
     * @param     mixed $spawningcycles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawningcycles($spawningcycles = null, $comparison = null)
    {
        if (is_array($spawningcycles)) {
            $useMinMax = false;
            if (isset($spawningcycles['min'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNINGCYCLES, $spawningcycles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningcycles['max'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNINGCYCLES, $spawningcycles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNINGCYCLES, $spawningcycles, $comparison);
    }

    /**
     * Filter the query on the SpCycleRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpcycleref(1234); // WHERE SpCycleRef = 1234
     * $query->filterBySpcycleref(array(12, 34)); // WHERE SpCycleRef IN (12, 34)
     * $query->filterBySpcycleref(array('min' => 12)); // WHERE SpCycleRef >= 12
     * $query->filterBySpcycleref(array('max' => 12)); // WHERE SpCycleRef <= 12
     * </code>
     *
     * @param     mixed $spcycleref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpcycleref($spcycleref = null, $comparison = null)
    {
        if (is_array($spcycleref)) {
            $useMinMax = false;
            if (isset($spcycleref['min'])) {
                $this->addUsingAlias(SpawningPeer::SPCYCLEREF, $spcycleref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spcycleref['max'])) {
                $this->addUsingAlias(SpawningPeer::SPCYCLEREF, $spcycleref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPCYCLEREF, $spcycleref, $comparison);
    }

    /**
     * Filter the query on the GestationMin column
     *
     * Example usage:
     * <code>
     * $query->filterByGestationmin(1234); // WHERE GestationMin = 1234
     * $query->filterByGestationmin(array(12, 34)); // WHERE GestationMin IN (12, 34)
     * $query->filterByGestationmin(array('min' => 12)); // WHERE GestationMin >= 12
     * $query->filterByGestationmin(array('max' => 12)); // WHERE GestationMin <= 12
     * </code>
     *
     * @param     mixed $gestationmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByGestationmin($gestationmin = null, $comparison = null)
    {
        if (is_array($gestationmin)) {
            $useMinMax = false;
            if (isset($gestationmin['min'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMIN, $gestationmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gestationmin['max'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMIN, $gestationmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::GESTATIONMIN, $gestationmin, $comparison);
    }

    /**
     * Filter the query on the GestationMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGestationminref(1234); // WHERE GestationMinRef = 1234
     * $query->filterByGestationminref(array(12, 34)); // WHERE GestationMinRef IN (12, 34)
     * $query->filterByGestationminref(array('min' => 12)); // WHERE GestationMinRef >= 12
     * $query->filterByGestationminref(array('max' => 12)); // WHERE GestationMinRef <= 12
     * </code>
     *
     * @param     mixed $gestationminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByGestationminref($gestationminref = null, $comparison = null)
    {
        if (is_array($gestationminref)) {
            $useMinMax = false;
            if (isset($gestationminref['min'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMINREF, $gestationminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gestationminref['max'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMINREF, $gestationminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::GESTATIONMINREF, $gestationminref, $comparison);
    }

    /**
     * Filter the query on the GestationMax column
     *
     * Example usage:
     * <code>
     * $query->filterByGestationmax(1234); // WHERE GestationMax = 1234
     * $query->filterByGestationmax(array(12, 34)); // WHERE GestationMax IN (12, 34)
     * $query->filterByGestationmax(array('min' => 12)); // WHERE GestationMax >= 12
     * $query->filterByGestationmax(array('max' => 12)); // WHERE GestationMax <= 12
     * </code>
     *
     * @param     mixed $gestationmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByGestationmax($gestationmax = null, $comparison = null)
    {
        if (is_array($gestationmax)) {
            $useMinMax = false;
            if (isset($gestationmax['min'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMAX, $gestationmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gestationmax['max'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMAX, $gestationmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::GESTATIONMAX, $gestationmax, $comparison);
    }

    /**
     * Filter the query on the GestationMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGestationmaxref(1234); // WHERE GestationMaxRef = 1234
     * $query->filterByGestationmaxref(array(12, 34)); // WHERE GestationMaxRef IN (12, 34)
     * $query->filterByGestationmaxref(array('min' => 12)); // WHERE GestationMaxRef >= 12
     * $query->filterByGestationmaxref(array('max' => 12)); // WHERE GestationMaxRef <= 12
     * </code>
     *
     * @param     mixed $gestationmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByGestationmaxref($gestationmaxref = null, $comparison = null)
    {
        if (is_array($gestationmaxref)) {
            $useMinMax = false;
            if (isset($gestationmaxref['min'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMAXREF, $gestationmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gestationmaxref['max'])) {
                $this->addUsingAlias(SpawningPeer::GESTATIONMAXREF, $gestationmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::GESTATIONMAXREF, $gestationmaxref, $comparison);
    }

    /**
     * Filter the query on the LengthOffspringMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthoffspringmin(1234); // WHERE LengthOffspringMin = 1234
     * $query->filterByLengthoffspringmin(array(12, 34)); // WHERE LengthOffspringMin IN (12, 34)
     * $query->filterByLengthoffspringmin(array('min' => 12)); // WHERE LengthOffspringMin >= 12
     * $query->filterByLengthoffspringmin(array('max' => 12)); // WHERE LengthOffspringMin <= 12
     * </code>
     *
     * @param     mixed $lengthoffspringmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthoffspringmin($lengthoffspringmin = null, $comparison = null)
    {
        if (is_array($lengthoffspringmin)) {
            $useMinMax = false;
            if (isset($lengthoffspringmin['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFSPRINGMIN, $lengthoffspringmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthoffspringmin['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFSPRINGMIN, $lengthoffspringmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHOFFSPRINGMIN, $lengthoffspringmin, $comparison);
    }

    /**
     * Filter the query on the LengthOffMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthoffminref(1234); // WHERE LengthOffMinRef = 1234
     * $query->filterByLengthoffminref(array(12, 34)); // WHERE LengthOffMinRef IN (12, 34)
     * $query->filterByLengthoffminref(array('min' => 12)); // WHERE LengthOffMinRef >= 12
     * $query->filterByLengthoffminref(array('max' => 12)); // WHERE LengthOffMinRef <= 12
     * </code>
     *
     * @param     mixed $lengthoffminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthoffminref($lengthoffminref = null, $comparison = null)
    {
        if (is_array($lengthoffminref)) {
            $useMinMax = false;
            if (isset($lengthoffminref['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFMINREF, $lengthoffminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthoffminref['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFMINREF, $lengthoffminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHOFFMINREF, $lengthoffminref, $comparison);
    }

    /**
     * Filter the query on the LengthOffspringMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthoffspringmax(1234); // WHERE LengthOffspringMax = 1234
     * $query->filterByLengthoffspringmax(array(12, 34)); // WHERE LengthOffspringMax IN (12, 34)
     * $query->filterByLengthoffspringmax(array('min' => 12)); // WHERE LengthOffspringMax >= 12
     * $query->filterByLengthoffspringmax(array('max' => 12)); // WHERE LengthOffspringMax <= 12
     * </code>
     *
     * @param     mixed $lengthoffspringmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthoffspringmax($lengthoffspringmax = null, $comparison = null)
    {
        if (is_array($lengthoffspringmax)) {
            $useMinMax = false;
            if (isset($lengthoffspringmax['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFSPRINGMAX, $lengthoffspringmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthoffspringmax['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFSPRINGMAX, $lengthoffspringmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHOFFSPRINGMAX, $lengthoffspringmax, $comparison);
    }

    /**
     * Filter the query on the LengthOffMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthoffmaxref(1234); // WHERE LengthOffMaxRef = 1234
     * $query->filterByLengthoffmaxref(array(12, 34)); // WHERE LengthOffMaxRef IN (12, 34)
     * $query->filterByLengthoffmaxref(array('min' => 12)); // WHERE LengthOffMaxRef >= 12
     * $query->filterByLengthoffmaxref(array('max' => 12)); // WHERE LengthOffMaxRef <= 12
     * </code>
     *
     * @param     mixed $lengthoffmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthoffmaxref($lengthoffmaxref = null, $comparison = null)
    {
        if (is_array($lengthoffmaxref)) {
            $useMinMax = false;
            if (isset($lengthoffmaxref['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFMAXREF, $lengthoffmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthoffmaxref['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHOFFMAXREF, $lengthoffmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHOFFMAXREF, $lengthoffmaxref, $comparison);
    }

    /**
     * Filter the query on the RelFecundityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRelfecunditymin(1234); // WHERE RelFecundityMin = 1234
     * $query->filterByRelfecunditymin(array(12, 34)); // WHERE RelFecundityMin IN (12, 34)
     * $query->filterByRelfecunditymin(array('min' => 12)); // WHERE RelFecundityMin >= 12
     * $query->filterByRelfecunditymin(array('max' => 12)); // WHERE RelFecundityMin <= 12
     * </code>
     *
     * @param     mixed $relfecunditymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByRelfecunditymin($relfecunditymin = null, $comparison = null)
    {
        if (is_array($relfecunditymin)) {
            $useMinMax = false;
            if (isset($relfecunditymin['min'])) {
                $this->addUsingAlias(SpawningPeer::RELFECUNDITYMIN, $relfecunditymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relfecunditymin['max'])) {
                $this->addUsingAlias(SpawningPeer::RELFECUNDITYMIN, $relfecunditymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::RELFECUNDITYMIN, $relfecunditymin, $comparison);
    }

    /**
     * Filter the query on the FecunMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunminref(1234); // WHERE FecunMinRef = 1234
     * $query->filterByFecunminref(array(12, 34)); // WHERE FecunMinRef IN (12, 34)
     * $query->filterByFecunminref(array('min' => 12)); // WHERE FecunMinRef >= 12
     * $query->filterByFecunminref(array('max' => 12)); // WHERE FecunMinRef <= 12
     * </code>
     *
     * @param     mixed $fecunminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFecunminref($fecunminref = null, $comparison = null)
    {
        if (is_array($fecunminref)) {
            $useMinMax = false;
            if (isset($fecunminref['min'])) {
                $this->addUsingAlias(SpawningPeer::FECUNMINREF, $fecunminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunminref['max'])) {
                $this->addUsingAlias(SpawningPeer::FECUNMINREF, $fecunminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECUNMINREF, $fecunminref, $comparison);
    }

    /**
     * Filter the query on the RelFecundityMean column
     *
     * Example usage:
     * <code>
     * $query->filterByRelfecunditymean(1234); // WHERE RelFecundityMean = 1234
     * $query->filterByRelfecunditymean(array(12, 34)); // WHERE RelFecundityMean IN (12, 34)
     * $query->filterByRelfecunditymean(array('min' => 12)); // WHERE RelFecundityMean >= 12
     * $query->filterByRelfecunditymean(array('max' => 12)); // WHERE RelFecundityMean <= 12
     * </code>
     *
     * @param     mixed $relfecunditymean The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByRelfecunditymean($relfecunditymean = null, $comparison = null)
    {
        if (is_array($relfecunditymean)) {
            $useMinMax = false;
            if (isset($relfecunditymean['min'])) {
                $this->addUsingAlias(SpawningPeer::RELFECUNDITYMEAN, $relfecunditymean['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relfecunditymean['max'])) {
                $this->addUsingAlias(SpawningPeer::RELFECUNDITYMEAN, $relfecunditymean['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::RELFECUNDITYMEAN, $relfecunditymean, $comparison);
    }

    /**
     * Filter the query on the FecunMeanRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunmeanref(1234); // WHERE FecunMeanRef = 1234
     * $query->filterByFecunmeanref(array(12, 34)); // WHERE FecunMeanRef IN (12, 34)
     * $query->filterByFecunmeanref(array('min' => 12)); // WHERE FecunMeanRef >= 12
     * $query->filterByFecunmeanref(array('max' => 12)); // WHERE FecunMeanRef <= 12
     * </code>
     *
     * @param     mixed $fecunmeanref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFecunmeanref($fecunmeanref = null, $comparison = null)
    {
        if (is_array($fecunmeanref)) {
            $useMinMax = false;
            if (isset($fecunmeanref['min'])) {
                $this->addUsingAlias(SpawningPeer::FECUNMEANREF, $fecunmeanref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunmeanref['max'])) {
                $this->addUsingAlias(SpawningPeer::FECUNMEANREF, $fecunmeanref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECUNMEANREF, $fecunmeanref, $comparison);
    }

    /**
     * Filter the query on the RelFecundityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRelfecunditymax(1234); // WHERE RelFecundityMax = 1234
     * $query->filterByRelfecunditymax(array(12, 34)); // WHERE RelFecundityMax IN (12, 34)
     * $query->filterByRelfecunditymax(array('min' => 12)); // WHERE RelFecundityMax >= 12
     * $query->filterByRelfecunditymax(array('max' => 12)); // WHERE RelFecundityMax <= 12
     * </code>
     *
     * @param     mixed $relfecunditymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByRelfecunditymax($relfecunditymax = null, $comparison = null)
    {
        if (is_array($relfecunditymax)) {
            $useMinMax = false;
            if (isset($relfecunditymax['min'])) {
                $this->addUsingAlias(SpawningPeer::RELFECUNDITYMAX, $relfecunditymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relfecunditymax['max'])) {
                $this->addUsingAlias(SpawningPeer::RELFECUNDITYMAX, $relfecunditymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::RELFECUNDITYMAX, $relfecunditymax, $comparison);
    }

    /**
     * Filter the query on the FecunMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFecunmaxref(1234); // WHERE FecunMaxRef = 1234
     * $query->filterByFecunmaxref(array(12, 34)); // WHERE FecunMaxRef IN (12, 34)
     * $query->filterByFecunmaxref(array('min' => 12)); // WHERE FecunMaxRef >= 12
     * $query->filterByFecunmaxref(array('max' => 12)); // WHERE FecunMaxRef <= 12
     * </code>
     *
     * @param     mixed $fecunmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByFecunmaxref($fecunmaxref = null, $comparison = null)
    {
        if (is_array($fecunmaxref)) {
            $useMinMax = false;
            if (isset($fecunmaxref['min'])) {
                $this->addUsingAlias(SpawningPeer::FECUNMAXREF, $fecunmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecunmaxref['max'])) {
                $this->addUsingAlias(SpawningPeer::FECUNMAXREF, $fecunmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::FECUNMAXREF, $fecunmaxref, $comparison);
    }

    /**
     * Filter the query on the LengthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmin(1234); // WHERE LengthMin = 1234
     * $query->filterByLengthmin(array(12, 34)); // WHERE LengthMin IN (12, 34)
     * $query->filterByLengthmin(array('min' => 12)); // WHERE LengthMin >= 12
     * $query->filterByLengthmin(array('max' => 12)); // WHERE LengthMin <= 12
     * </code>
     *
     * @param     mixed $lengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthmin($lengthmin = null, $comparison = null)
    {
        if (is_array($lengthmin)) {
            $useMinMax = false;
            if (isset($lengthmin['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHMIN, $lengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmin['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHMIN, $lengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHMIN, $lengthmin, $comparison);
    }

    /**
     * Filter the query on the LengthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmax(1234); // WHERE LengthMax = 1234
     * $query->filterByLengthmax(array(12, 34)); // WHERE LengthMax IN (12, 34)
     * $query->filterByLengthmax(array('min' => 12)); // WHERE LengthMax >= 12
     * $query->filterByLengthmax(array('max' => 12)); // WHERE LengthMax <= 12
     * </code>
     *
     * @param     mixed $lengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthmax($lengthmax = null, $comparison = null)
    {
        if (is_array($lengthmax)) {
            $useMinMax = false;
            if (isset($lengthmax['min'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHMAX, $lengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmax['max'])) {
                $this->addUsingAlias(SpawningPeer::LENGTHMAX, $lengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHMAX, $lengthmax, $comparison);
    }

    /**
     * Filter the query on the LengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype('fooValue');   // WHERE LengthType = 'fooValue'
     * $query->filterByLengthtype('%fooValue%'); // WHERE LengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByLengthtype($lengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype)) {
                $lengthtype = str_replace('*', '%', $lengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::LENGTHTYPE, $lengthtype, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(SpawningPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(SpawningPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the a column
     *
     * Example usage:
     * <code>
     * $query->filterByA(1234); // WHERE a = 1234
     * $query->filterByA(array(12, 34)); // WHERE a IN (12, 34)
     * $query->filterByA(array('min' => 12)); // WHERE a >= 12
     * $query->filterByA(array('max' => 12)); // WHERE a <= 12
     * </code>
     *
     * @param     mixed $a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(SpawningPeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(SpawningPeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::A, $a, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(SpawningPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(SpawningPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the CorrCoeff column
     *
     * Example usage:
     * <code>
     * $query->filterByCorrcoeff(1234); // WHERE CorrCoeff = 1234
     * $query->filterByCorrcoeff(array(12, 34)); // WHERE CorrCoeff IN (12, 34)
     * $query->filterByCorrcoeff(array('min' => 12)); // WHERE CorrCoeff >= 12
     * $query->filterByCorrcoeff(array('max' => 12)); // WHERE CorrCoeff <= 12
     * </code>
     *
     * @param     mixed $corrcoeff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByCorrcoeff($corrcoeff = null, $comparison = null)
    {
        if (is_array($corrcoeff)) {
            $useMinMax = false;
            if (isset($corrcoeff['min'])) {
                $this->addUsingAlias(SpawningPeer::CORRCOEFF, $corrcoeff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($corrcoeff['max'])) {
                $this->addUsingAlias(SpawningPeer::CORRCOEFF, $corrcoeff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::CORRCOEFF, $corrcoeff, $comparison);
    }

    /**
     * Filter the query on the Dailyspawnmin column
     *
     * Example usage:
     * <code>
     * $query->filterByDailyspawnmin(1234); // WHERE Dailyspawnmin = 1234
     * $query->filterByDailyspawnmin(array(12, 34)); // WHERE Dailyspawnmin IN (12, 34)
     * $query->filterByDailyspawnmin(array('min' => 12)); // WHERE Dailyspawnmin >= 12
     * $query->filterByDailyspawnmin(array('max' => 12)); // WHERE Dailyspawnmin <= 12
     * </code>
     *
     * @param     mixed $dailyspawnmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDailyspawnmin($dailyspawnmin = null, $comparison = null)
    {
        if (is_array($dailyspawnmin)) {
            $useMinMax = false;
            if (isset($dailyspawnmin['min'])) {
                $this->addUsingAlias(SpawningPeer::DAILYSPAWNMIN, $dailyspawnmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dailyspawnmin['max'])) {
                $this->addUsingAlias(SpawningPeer::DAILYSPAWNMIN, $dailyspawnmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DAILYSPAWNMIN, $dailyspawnmin, $comparison);
    }

    /**
     * Filter the query on the SpawnMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawnminref(1234); // WHERE SpawnMinRef = 1234
     * $query->filterBySpawnminref(array(12, 34)); // WHERE SpawnMinRef IN (12, 34)
     * $query->filterBySpawnminref(array('min' => 12)); // WHERE SpawnMinRef >= 12
     * $query->filterBySpawnminref(array('max' => 12)); // WHERE SpawnMinRef <= 12
     * </code>
     *
     * @param     mixed $spawnminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawnminref($spawnminref = null, $comparison = null)
    {
        if (is_array($spawnminref)) {
            $useMinMax = false;
            if (isset($spawnminref['min'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNMINREF, $spawnminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawnminref['max'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNMINREF, $spawnminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNMINREF, $spawnminref, $comparison);
    }

    /**
     * Filter the query on the Dailyspawnmean column
     *
     * Example usage:
     * <code>
     * $query->filterByDailyspawnmean(1234); // WHERE Dailyspawnmean = 1234
     * $query->filterByDailyspawnmean(array(12, 34)); // WHERE Dailyspawnmean IN (12, 34)
     * $query->filterByDailyspawnmean(array('min' => 12)); // WHERE Dailyspawnmean >= 12
     * $query->filterByDailyspawnmean(array('max' => 12)); // WHERE Dailyspawnmean <= 12
     * </code>
     *
     * @param     mixed $dailyspawnmean The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDailyspawnmean($dailyspawnmean = null, $comparison = null)
    {
        if (is_array($dailyspawnmean)) {
            $useMinMax = false;
            if (isset($dailyspawnmean['min'])) {
                $this->addUsingAlias(SpawningPeer::DAILYSPAWNMEAN, $dailyspawnmean['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dailyspawnmean['max'])) {
                $this->addUsingAlias(SpawningPeer::DAILYSPAWNMEAN, $dailyspawnmean['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DAILYSPAWNMEAN, $dailyspawnmean, $comparison);
    }

    /**
     * Filter the query on the SpawnMeanRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawnmeanref(1234); // WHERE SpawnMeanRef = 1234
     * $query->filterBySpawnmeanref(array(12, 34)); // WHERE SpawnMeanRef IN (12, 34)
     * $query->filterBySpawnmeanref(array('min' => 12)); // WHERE SpawnMeanRef >= 12
     * $query->filterBySpawnmeanref(array('max' => 12)); // WHERE SpawnMeanRef <= 12
     * </code>
     *
     * @param     mixed $spawnmeanref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawnmeanref($spawnmeanref = null, $comparison = null)
    {
        if (is_array($spawnmeanref)) {
            $useMinMax = false;
            if (isset($spawnmeanref['min'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNMEANREF, $spawnmeanref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawnmeanref['max'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNMEANREF, $spawnmeanref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNMEANREF, $spawnmeanref, $comparison);
    }

    /**
     * Filter the query on the Dailyspawnmax column
     *
     * Example usage:
     * <code>
     * $query->filterByDailyspawnmax(1234); // WHERE Dailyspawnmax = 1234
     * $query->filterByDailyspawnmax(array(12, 34)); // WHERE Dailyspawnmax IN (12, 34)
     * $query->filterByDailyspawnmax(array('min' => 12)); // WHERE Dailyspawnmax >= 12
     * $query->filterByDailyspawnmax(array('max' => 12)); // WHERE Dailyspawnmax <= 12
     * </code>
     *
     * @param     mixed $dailyspawnmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDailyspawnmax($dailyspawnmax = null, $comparison = null)
    {
        if (is_array($dailyspawnmax)) {
            $useMinMax = false;
            if (isset($dailyspawnmax['min'])) {
                $this->addUsingAlias(SpawningPeer::DAILYSPAWNMAX, $dailyspawnmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dailyspawnmax['max'])) {
                $this->addUsingAlias(SpawningPeer::DAILYSPAWNMAX, $dailyspawnmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DAILYSPAWNMAX, $dailyspawnmax, $comparison);
    }

    /**
     * Filter the query on the SpawnMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawnmaxref(1234); // WHERE SpawnMaxRef = 1234
     * $query->filterBySpawnmaxref(array(12, 34)); // WHERE SpawnMaxRef IN (12, 34)
     * $query->filterBySpawnmaxref(array('min' => 12)); // WHERE SpawnMaxRef >= 12
     * $query->filterBySpawnmaxref(array('max' => 12)); // WHERE SpawnMaxRef <= 12
     * </code>
     *
     * @param     mixed $spawnmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterBySpawnmaxref($spawnmaxref = null, $comparison = null)
    {
        if (is_array($spawnmaxref)) {
            $useMinMax = false;
            if (isset($spawnmaxref['min'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNMAXREF, $spawnmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawnmaxref['max'])) {
                $this->addUsingAlias(SpawningPeer::SPAWNMAXREF, $spawnmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::SPAWNMAXREF, $spawnmaxref, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SpawningPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SpawningPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::ENTERED, $entered, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SpawningPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SpawningPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SpawningPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SpawningPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::MODIFIED, $modified, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SpawningPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SpawningPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SpawningPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SpawningPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::EXPERT, $expert, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SpawningPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SpawningPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the AddInfos column
     *
     * Example usage:
     * <code>
     * $query->filterByAddinfos('fooValue');   // WHERE AddInfos = 'fooValue'
     * $query->filterByAddinfos('%fooValue%'); // WHERE AddInfos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addinfos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByAddinfos($addinfos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addinfos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addinfos)) {
                $addinfos = str_replace('*', '%', $addinfos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpawningPeer::ADDINFOS, $addinfos, $comparison);
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
     * @return SpawningQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SpawningPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SpawningPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpawningPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Spawning $spawning Object to remove from the list of results
     *
     * @return SpawningQuery The current query, for fluid interface
     */
    public function prune($spawning = null)
    {
        if ($spawning) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpawningPeer::STOCKCODE), $spawning->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpawningPeer::SPAWNINGREFNO), $spawning->getSpawningrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(SpawningPeer::SPAWNINGAREA), $spawning->getSpawningarea(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
