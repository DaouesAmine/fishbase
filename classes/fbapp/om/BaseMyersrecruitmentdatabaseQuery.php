<?php


/**
 * Base class that represents a query for the 'myersrecruitmentdatabase' table.
 *
 *
 *
 * @method MyersrecruitmentdatabaseQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method MyersrecruitmentdatabaseQuery orderByReclag($order = Criteria::ASC) Order by the Reclag column
 * @method MyersrecruitmentdatabaseQuery orderBySp($order = Criteria::ASC) Order by the sp column
 * @method MyersrecruitmentdatabaseQuery orderByGenusused($order = Criteria::ASC) Order by the genusUsed column
 * @method MyersrecruitmentdatabaseQuery orderBySpeciesused($order = Criteria::ASC) Order by the speciesUsed column
 * @method MyersrecruitmentdatabaseQuery orderBySpeccode($order = Criteria::ASC) Order by the speccode column
 * @method MyersrecruitmentdatabaseQuery orderByStockcode($order = Criteria::ASC) Order by the stockcode column
 * @method MyersrecruitmentdatabaseQuery orderByFamily($order = Criteria::ASC) Order by the family column
 * @method MyersrecruitmentdatabaseQuery orderByCfamily($order = Criteria::ASC) Order by the cfamily column
 * @method MyersrecruitmentdatabaseQuery orderByOrder($order = Criteria::ASC) Order by the order column
 * @method MyersrecruitmentdatabaseQuery orderByStockorig($order = Criteria::ASC) Order by the stockOrig column
 * @method MyersrecruitmentdatabaseQuery orderByStock($order = Criteria::ASC) Order by the stock column
 * @method MyersrecruitmentdatabaseQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method MyersrecruitmentdatabaseQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method MyersrecruitmentdatabaseQuery orderByArea($order = Criteria::ASC) Order by the Area column
 * @method MyersrecruitmentdatabaseQuery orderByUnit($order = Criteria::ASC) Order by the Unit column
 * @method MyersrecruitmentdatabaseQuery orderByLatitude2($order = Criteria::ASC) Order by the Latitude2 column
 * @method MyersrecruitmentdatabaseQuery orderByNs($order = Criteria::ASC) Order by the ns column
 * @method MyersrecruitmentdatabaseQuery orderByLongitude2($order = Criteria::ASC) Order by the longitude2 column
 * @method MyersrecruitmentdatabaseQuery orderByWe($order = Criteria::ASC) Order by the we column
 * @method MyersrecruitmentdatabaseQuery orderBySource($order = Criteria::ASC) Order by the source column
 * @method MyersrecruitmentdatabaseQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method MyersrecruitmentdatabaseQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method MyersrecruitmentdatabaseQuery orderByCvrec($order = Criteria::ASC) Order by the CVRec column
 * @method MyersrecruitmentdatabaseQuery orderByComments($order = Criteria::ASC) Order by the comments column
 * @method MyersrecruitmentdatabaseQuery orderByComments2($order = Criteria::ASC) Order by the comments2 column
 * @method MyersrecruitmentdatabaseQuery orderByCommentsn($order = Criteria::ASC) Order by the commentsN column
 * @method MyersrecruitmentdatabaseQuery orderByAreatxt($order = Criteria::ASC) Order by the AreaTxt column
 * @method MyersrecruitmentdatabaseQuery orderByFage($order = Criteria::ASC) Order by the fage column
 * @method MyersrecruitmentdatabaseQuery orderByMethod($order = Criteria::ASC) Order by the method column
 * @method MyersrecruitmentdatabaseQuery orderByMethod2($order = Criteria::ASC) Order by the method2 column
 * @method MyersrecruitmentdatabaseQuery orderByUnitssb($order = Criteria::ASC) Order by the unitssb column
 * @method MyersrecruitmentdatabaseQuery orderByUnitrec($order = Criteria::ASC) Order by the unitrec column
 * @method MyersrecruitmentdatabaseQuery orderByUnitland($order = Criteria::ASC) Order by the unitland column
 * @method MyersrecruitmentdatabaseQuery orderByAgerecdat($order = Criteria::ASC) Order by the agerecdat column
 * @method MyersrecruitmentdatabaseQuery orderByEggdiam($order = Criteria::ASC) Order by the eggdiam column
 * @method MyersrecruitmentdatabaseQuery orderByLhatch($order = Criteria::ASC) Order by the lhatch column
 * @method MyersrecruitmentdatabaseQuery orderByLmeta($order = Criteria::ASC) Order by the lmeta column
 * @method MyersrecruitmentdatabaseQuery orderByDeltal($order = Criteria::ASC) Order by the deltal column
 * @method MyersrecruitmentdatabaseQuery orderByDeltan($order = Criteria::ASC) Order by the deltan column
 * @method MyersrecruitmentdatabaseQuery orderByMonthspa($order = Criteria::ASC) Order by the monthspa column
 * @method MyersrecruitmentdatabaseQuery orderBySpawnmnth($order = Criteria::ASC) Order by the spawnmnth column
 * @method MyersrecruitmentdatabaseQuery orderByNatmort($order = Criteria::ASC) Order by the natmort column
 * @method MyersrecruitmentdatabaseQuery orderByF01($order = Criteria::ASC) Order by the f01 column
 * @method MyersrecruitmentdatabaseQuery orderByFmax($order = Criteria::ASC) Order by the fmax column
 * @method MyersrecruitmentdatabaseQuery orderByFmed($order = Criteria::ASC) Order by the fmed column
 * @method MyersrecruitmentdatabaseQuery orderByKgprecf0($order = Criteria::ASC) Order by the kgprecf0 column
 * @method MyersrecruitmentdatabaseQuery orderBySpawnloc($order = Criteria::ASC) Order by the spawnloc column
 * @method MyersrecruitmentdatabaseQuery orderByEggtype($order = Criteria::ASC) Order by the eggtype column
 * @method MyersrecruitmentdatabaseQuery orderByFeedtype($order = Criteria::ASC) Order by the Feedtype column
 * @method MyersrecruitmentdatabaseQuery orderBySourcemat($order = Criteria::ASC) Order by the sourcemat column
 * @method MyersrecruitmentdatabaseQuery orderByLenmat($order = Criteria::ASC) Order by the lenmat column
 * @method MyersrecruitmentdatabaseQuery orderByLenmatm($order = Criteria::ASC) Order by the lenmatm column
 * @method MyersrecruitmentdatabaseQuery orderByLenmatf($order = Criteria::ASC) Order by the lenmatf column
 * @method MyersrecruitmentdatabaseQuery orderByTm($order = Criteria::ASC) Order by the tm column
 * @method MyersrecruitmentdatabaseQuery orderByTmref($order = Criteria::ASC) Order by the tmRef column
 * @method MyersrecruitmentdatabaseQuery orderByAgemat($order = Criteria::ASC) Order by the agemat column
 * @method MyersrecruitmentdatabaseQuery orderByAgematm($order = Criteria::ASC) Order by the agematm column
 * @method MyersrecruitmentdatabaseQuery orderByAgematf($order = Criteria::ASC) Order by the agematf column
 * @method MyersrecruitmentdatabaseQuery orderByLenrec($order = Criteria::ASC) Order by the lenrec column
 * @method MyersrecruitmentdatabaseQuery orderByAgerec($order = Criteria::ASC) Order by the agerec column
 * @method MyersrecruitmentdatabaseQuery orderByAgerecm($order = Criteria::ASC) Order by the agerecm column
 * @method MyersrecruitmentdatabaseQuery orderByAgerecf($order = Criteria::ASC) Order by the agerecf column
 * @method MyersrecruitmentdatabaseQuery orderByLoo($order = Criteria::ASC) Order by the Loo column
 * @method MyersrecruitmentdatabaseQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method MyersrecruitmentdatabaseQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method MyersrecruitmentdatabaseQuery orderByGrowthref($order = Criteria::ASC) Order by the GrowthRef column
 * @method MyersrecruitmentdatabaseQuery orderBySourcegro($order = Criteria::ASC) Order by the sourcegro column
 * @method MyersrecruitmentdatabaseQuery orderByLinfin($order = Criteria::ASC) Order by the linfin column
 * @method MyersrecruitmentdatabaseQuery orderByKram($order = Criteria::ASC) Order by the kram column
 * @method MyersrecruitmentdatabaseQuery orderByTo($order = Criteria::ASC) Order by the to column
 * @method MyersrecruitmentdatabaseQuery orderByLinfinm($order = Criteria::ASC) Order by the linfinm column
 * @method MyersrecruitmentdatabaseQuery orderByKm($order = Criteria::ASC) Order by the kM column
 * @method MyersrecruitmentdatabaseQuery orderByTom($order = Criteria::ASC) Order by the toM column
 * @method MyersrecruitmentdatabaseQuery orderByLinfinf($order = Criteria::ASC) Order by the linfinf column
 * @method MyersrecruitmentdatabaseQuery orderByKf($order = Criteria::ASC) Order by the kF column
 * @method MyersrecruitmentdatabaseQuery orderByTof($order = Criteria::ASC) Order by the toF column
 * @method MyersrecruitmentdatabaseQuery orderBySourceab($order = Criteria::ASC) Order by the sourceab column
 * @method MyersrecruitmentdatabaseQuery orderByAltwtpar($order = Criteria::ASC) Order by the altwtpar column
 * @method MyersrecruitmentdatabaseQuery orderByBltwtpar($order = Criteria::ASC) Order by the bltwtpar column
 * @method MyersrecruitmentdatabaseQuery orderByAltwtparm($order = Criteria::ASC) Order by the altwtparm column
 * @method MyersrecruitmentdatabaseQuery orderByBltwtparm($order = Criteria::ASC) Order by the bltwtparm column
 * @method MyersrecruitmentdatabaseQuery orderByAltwtparf($order = Criteria::ASC) Order by the altwtparf column
 * @method MyersrecruitmentdatabaseQuery orderByBltwtparf($order = Criteria::ASC) Order by the bltwtparf column
 * @method MyersrecruitmentdatabaseQuery orderByEntered($order = Criteria::ASC) Order by the entered column
 * @method MyersrecruitmentdatabaseQuery orderByDateentered($order = Criteria::ASC) Order by the dateentered column
 * @method MyersrecruitmentdatabaseQuery orderByModified($order = Criteria::ASC) Order by the modified column
 * @method MyersrecruitmentdatabaseQuery orderByDatemodified($order = Criteria::ASC) Order by the datemodified column
 * @method MyersrecruitmentdatabaseQuery orderByExpert($order = Criteria::ASC) Order by the expert column
 * @method MyersrecruitmentdatabaseQuery orderByDatechecked($order = Criteria::ASC) Order by the datechecked column
 * @method MyersrecruitmentdatabaseQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MyersrecruitmentdatabaseQuery groupById() Group by the ID column
 * @method MyersrecruitmentdatabaseQuery groupByReclag() Group by the Reclag column
 * @method MyersrecruitmentdatabaseQuery groupBySp() Group by the sp column
 * @method MyersrecruitmentdatabaseQuery groupByGenusused() Group by the genusUsed column
 * @method MyersrecruitmentdatabaseQuery groupBySpeciesused() Group by the speciesUsed column
 * @method MyersrecruitmentdatabaseQuery groupBySpeccode() Group by the speccode column
 * @method MyersrecruitmentdatabaseQuery groupByStockcode() Group by the stockcode column
 * @method MyersrecruitmentdatabaseQuery groupByFamily() Group by the family column
 * @method MyersrecruitmentdatabaseQuery groupByCfamily() Group by the cfamily column
 * @method MyersrecruitmentdatabaseQuery groupByOrder() Group by the order column
 * @method MyersrecruitmentdatabaseQuery groupByStockorig() Group by the stockOrig column
 * @method MyersrecruitmentdatabaseQuery groupByStock() Group by the stock column
 * @method MyersrecruitmentdatabaseQuery groupByCCode() Group by the C_Code column
 * @method MyersrecruitmentdatabaseQuery groupByAreacode() Group by the AreaCode column
 * @method MyersrecruitmentdatabaseQuery groupByArea() Group by the Area column
 * @method MyersrecruitmentdatabaseQuery groupByUnit() Group by the Unit column
 * @method MyersrecruitmentdatabaseQuery groupByLatitude2() Group by the Latitude2 column
 * @method MyersrecruitmentdatabaseQuery groupByNs() Group by the ns column
 * @method MyersrecruitmentdatabaseQuery groupByLongitude2() Group by the longitude2 column
 * @method MyersrecruitmentdatabaseQuery groupByWe() Group by the we column
 * @method MyersrecruitmentdatabaseQuery groupBySource() Group by the source column
 * @method MyersrecruitmentdatabaseQuery groupByMainref() Group by the MainRef column
 * @method MyersrecruitmentdatabaseQuery groupByDataref() Group by the DataRef column
 * @method MyersrecruitmentdatabaseQuery groupByCvrec() Group by the CVRec column
 * @method MyersrecruitmentdatabaseQuery groupByComments() Group by the comments column
 * @method MyersrecruitmentdatabaseQuery groupByComments2() Group by the comments2 column
 * @method MyersrecruitmentdatabaseQuery groupByCommentsn() Group by the commentsN column
 * @method MyersrecruitmentdatabaseQuery groupByAreatxt() Group by the AreaTxt column
 * @method MyersrecruitmentdatabaseQuery groupByFage() Group by the fage column
 * @method MyersrecruitmentdatabaseQuery groupByMethod() Group by the method column
 * @method MyersrecruitmentdatabaseQuery groupByMethod2() Group by the method2 column
 * @method MyersrecruitmentdatabaseQuery groupByUnitssb() Group by the unitssb column
 * @method MyersrecruitmentdatabaseQuery groupByUnitrec() Group by the unitrec column
 * @method MyersrecruitmentdatabaseQuery groupByUnitland() Group by the unitland column
 * @method MyersrecruitmentdatabaseQuery groupByAgerecdat() Group by the agerecdat column
 * @method MyersrecruitmentdatabaseQuery groupByEggdiam() Group by the eggdiam column
 * @method MyersrecruitmentdatabaseQuery groupByLhatch() Group by the lhatch column
 * @method MyersrecruitmentdatabaseQuery groupByLmeta() Group by the lmeta column
 * @method MyersrecruitmentdatabaseQuery groupByDeltal() Group by the deltal column
 * @method MyersrecruitmentdatabaseQuery groupByDeltan() Group by the deltan column
 * @method MyersrecruitmentdatabaseQuery groupByMonthspa() Group by the monthspa column
 * @method MyersrecruitmentdatabaseQuery groupBySpawnmnth() Group by the spawnmnth column
 * @method MyersrecruitmentdatabaseQuery groupByNatmort() Group by the natmort column
 * @method MyersrecruitmentdatabaseQuery groupByF01() Group by the f01 column
 * @method MyersrecruitmentdatabaseQuery groupByFmax() Group by the fmax column
 * @method MyersrecruitmentdatabaseQuery groupByFmed() Group by the fmed column
 * @method MyersrecruitmentdatabaseQuery groupByKgprecf0() Group by the kgprecf0 column
 * @method MyersrecruitmentdatabaseQuery groupBySpawnloc() Group by the spawnloc column
 * @method MyersrecruitmentdatabaseQuery groupByEggtype() Group by the eggtype column
 * @method MyersrecruitmentdatabaseQuery groupByFeedtype() Group by the Feedtype column
 * @method MyersrecruitmentdatabaseQuery groupBySourcemat() Group by the sourcemat column
 * @method MyersrecruitmentdatabaseQuery groupByLenmat() Group by the lenmat column
 * @method MyersrecruitmentdatabaseQuery groupByLenmatm() Group by the lenmatm column
 * @method MyersrecruitmentdatabaseQuery groupByLenmatf() Group by the lenmatf column
 * @method MyersrecruitmentdatabaseQuery groupByTm() Group by the tm column
 * @method MyersrecruitmentdatabaseQuery groupByTmref() Group by the tmRef column
 * @method MyersrecruitmentdatabaseQuery groupByAgemat() Group by the agemat column
 * @method MyersrecruitmentdatabaseQuery groupByAgematm() Group by the agematm column
 * @method MyersrecruitmentdatabaseQuery groupByAgematf() Group by the agematf column
 * @method MyersrecruitmentdatabaseQuery groupByLenrec() Group by the lenrec column
 * @method MyersrecruitmentdatabaseQuery groupByAgerec() Group by the agerec column
 * @method MyersrecruitmentdatabaseQuery groupByAgerecm() Group by the agerecm column
 * @method MyersrecruitmentdatabaseQuery groupByAgerecf() Group by the agerecf column
 * @method MyersrecruitmentdatabaseQuery groupByLoo() Group by the Loo column
 * @method MyersrecruitmentdatabaseQuery groupByK() Group by the K column
 * @method MyersrecruitmentdatabaseQuery groupByLengthtype() Group by the LengthType column
 * @method MyersrecruitmentdatabaseQuery groupByGrowthref() Group by the GrowthRef column
 * @method MyersrecruitmentdatabaseQuery groupBySourcegro() Group by the sourcegro column
 * @method MyersrecruitmentdatabaseQuery groupByLinfin() Group by the linfin column
 * @method MyersrecruitmentdatabaseQuery groupByKram() Group by the kram column
 * @method MyersrecruitmentdatabaseQuery groupByTo() Group by the to column
 * @method MyersrecruitmentdatabaseQuery groupByLinfinm() Group by the linfinm column
 * @method MyersrecruitmentdatabaseQuery groupByKm() Group by the kM column
 * @method MyersrecruitmentdatabaseQuery groupByTom() Group by the toM column
 * @method MyersrecruitmentdatabaseQuery groupByLinfinf() Group by the linfinf column
 * @method MyersrecruitmentdatabaseQuery groupByKf() Group by the kF column
 * @method MyersrecruitmentdatabaseQuery groupByTof() Group by the toF column
 * @method MyersrecruitmentdatabaseQuery groupBySourceab() Group by the sourceab column
 * @method MyersrecruitmentdatabaseQuery groupByAltwtpar() Group by the altwtpar column
 * @method MyersrecruitmentdatabaseQuery groupByBltwtpar() Group by the bltwtpar column
 * @method MyersrecruitmentdatabaseQuery groupByAltwtparm() Group by the altwtparm column
 * @method MyersrecruitmentdatabaseQuery groupByBltwtparm() Group by the bltwtparm column
 * @method MyersrecruitmentdatabaseQuery groupByAltwtparf() Group by the altwtparf column
 * @method MyersrecruitmentdatabaseQuery groupByBltwtparf() Group by the bltwtparf column
 * @method MyersrecruitmentdatabaseQuery groupByEntered() Group by the entered column
 * @method MyersrecruitmentdatabaseQuery groupByDateentered() Group by the dateentered column
 * @method MyersrecruitmentdatabaseQuery groupByModified() Group by the modified column
 * @method MyersrecruitmentdatabaseQuery groupByDatemodified() Group by the datemodified column
 * @method MyersrecruitmentdatabaseQuery groupByExpert() Group by the expert column
 * @method MyersrecruitmentdatabaseQuery groupByDatechecked() Group by the datechecked column
 * @method MyersrecruitmentdatabaseQuery groupByTs() Group by the TS column
 *
 * @method MyersrecruitmentdatabaseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MyersrecruitmentdatabaseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MyersrecruitmentdatabaseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Myersrecruitmentdatabase findOne(PropelPDO $con = null) Return the first Myersrecruitmentdatabase matching the query
 * @method Myersrecruitmentdatabase findOneOrCreate(PropelPDO $con = null) Return the first Myersrecruitmentdatabase matching the query, or a new Myersrecruitmentdatabase object populated from the query conditions when no match is found
 *
 * @method Myersrecruitmentdatabase findOneByReclag(double $Reclag) Return the first Myersrecruitmentdatabase filtered by the Reclag column
 * @method Myersrecruitmentdatabase findOneBySp(string $sp) Return the first Myersrecruitmentdatabase filtered by the sp column
 * @method Myersrecruitmentdatabase findOneByGenusused(string $genusUsed) Return the first Myersrecruitmentdatabase filtered by the genusUsed column
 * @method Myersrecruitmentdatabase findOneBySpeciesused(string $speciesUsed) Return the first Myersrecruitmentdatabase filtered by the speciesUsed column
 * @method Myersrecruitmentdatabase findOneBySpeccode(int $speccode) Return the first Myersrecruitmentdatabase filtered by the speccode column
 * @method Myersrecruitmentdatabase findOneByStockcode(int $stockcode) Return the first Myersrecruitmentdatabase filtered by the stockcode column
 * @method Myersrecruitmentdatabase findOneByFamily(string $family) Return the first Myersrecruitmentdatabase filtered by the family column
 * @method Myersrecruitmentdatabase findOneByCfamily(string $cfamily) Return the first Myersrecruitmentdatabase filtered by the cfamily column
 * @method Myersrecruitmentdatabase findOneByOrder(string $order) Return the first Myersrecruitmentdatabase filtered by the order column
 * @method Myersrecruitmentdatabase findOneByStockorig(string $stockOrig) Return the first Myersrecruitmentdatabase filtered by the stockOrig column
 * @method Myersrecruitmentdatabase findOneByStock(string $stock) Return the first Myersrecruitmentdatabase filtered by the stock column
 * @method Myersrecruitmentdatabase findOneByCCode(string $C_Code) Return the first Myersrecruitmentdatabase filtered by the C_Code column
 * @method Myersrecruitmentdatabase findOneByAreacode(int $AreaCode) Return the first Myersrecruitmentdatabase filtered by the AreaCode column
 * @method Myersrecruitmentdatabase findOneByArea(double $Area) Return the first Myersrecruitmentdatabase filtered by the Area column
 * @method Myersrecruitmentdatabase findOneByUnit(string $Unit) Return the first Myersrecruitmentdatabase filtered by the Unit column
 * @method Myersrecruitmentdatabase findOneByLatitude2(double $Latitude2) Return the first Myersrecruitmentdatabase filtered by the Latitude2 column
 * @method Myersrecruitmentdatabase findOneByNs(string $ns) Return the first Myersrecruitmentdatabase filtered by the ns column
 * @method Myersrecruitmentdatabase findOneByLongitude2(double $longitude2) Return the first Myersrecruitmentdatabase filtered by the longitude2 column
 * @method Myersrecruitmentdatabase findOneByWe(string $we) Return the first Myersrecruitmentdatabase filtered by the we column
 * @method Myersrecruitmentdatabase findOneBySource(string $source) Return the first Myersrecruitmentdatabase filtered by the source column
 * @method Myersrecruitmentdatabase findOneByMainref(int $MainRef) Return the first Myersrecruitmentdatabase filtered by the MainRef column
 * @method Myersrecruitmentdatabase findOneByDataref(int $DataRef) Return the first Myersrecruitmentdatabase filtered by the DataRef column
 * @method Myersrecruitmentdatabase findOneByCvrec(double $CVRec) Return the first Myersrecruitmentdatabase filtered by the CVRec column
 * @method Myersrecruitmentdatabase findOneByComments(string $comments) Return the first Myersrecruitmentdatabase filtered by the comments column
 * @method Myersrecruitmentdatabase findOneByComments2(string $comments2) Return the first Myersrecruitmentdatabase filtered by the comments2 column
 * @method Myersrecruitmentdatabase findOneByCommentsn(string $commentsN) Return the first Myersrecruitmentdatabase filtered by the commentsN column
 * @method Myersrecruitmentdatabase findOneByAreatxt(string $AreaTxt) Return the first Myersrecruitmentdatabase filtered by the AreaTxt column
 * @method Myersrecruitmentdatabase findOneByFage(string $fage) Return the first Myersrecruitmentdatabase filtered by the fage column
 * @method Myersrecruitmentdatabase findOneByMethod(string $method) Return the first Myersrecruitmentdatabase filtered by the method column
 * @method Myersrecruitmentdatabase findOneByMethod2(string $method2) Return the first Myersrecruitmentdatabase filtered by the method2 column
 * @method Myersrecruitmentdatabase findOneByUnitssb(string $unitssb) Return the first Myersrecruitmentdatabase filtered by the unitssb column
 * @method Myersrecruitmentdatabase findOneByUnitrec(string $unitrec) Return the first Myersrecruitmentdatabase filtered by the unitrec column
 * @method Myersrecruitmentdatabase findOneByUnitland(string $unitland) Return the first Myersrecruitmentdatabase filtered by the unitland column
 * @method Myersrecruitmentdatabase findOneByAgerecdat(double $agerecdat) Return the first Myersrecruitmentdatabase filtered by the agerecdat column
 * @method Myersrecruitmentdatabase findOneByEggdiam(string $eggdiam) Return the first Myersrecruitmentdatabase filtered by the eggdiam column
 * @method Myersrecruitmentdatabase findOneByLhatch(string $lhatch) Return the first Myersrecruitmentdatabase filtered by the lhatch column
 * @method Myersrecruitmentdatabase findOneByLmeta(string $lmeta) Return the first Myersrecruitmentdatabase filtered by the lmeta column
 * @method Myersrecruitmentdatabase findOneByDeltal(string $deltal) Return the first Myersrecruitmentdatabase filtered by the deltal column
 * @method Myersrecruitmentdatabase findOneByDeltan(string $deltan) Return the first Myersrecruitmentdatabase filtered by the deltan column
 * @method Myersrecruitmentdatabase findOneByMonthspa(string $monthspa) Return the first Myersrecruitmentdatabase filtered by the monthspa column
 * @method Myersrecruitmentdatabase findOneBySpawnmnth(string $spawnmnth) Return the first Myersrecruitmentdatabase filtered by the spawnmnth column
 * @method Myersrecruitmentdatabase findOneByNatmort(string $natmort) Return the first Myersrecruitmentdatabase filtered by the natmort column
 * @method Myersrecruitmentdatabase findOneByF01(string $f01) Return the first Myersrecruitmentdatabase filtered by the f01 column
 * @method Myersrecruitmentdatabase findOneByFmax(string $fmax) Return the first Myersrecruitmentdatabase filtered by the fmax column
 * @method Myersrecruitmentdatabase findOneByFmed(string $fmed) Return the first Myersrecruitmentdatabase filtered by the fmed column
 * @method Myersrecruitmentdatabase findOneByKgprecf0(string $kgprecf0) Return the first Myersrecruitmentdatabase filtered by the kgprecf0 column
 * @method Myersrecruitmentdatabase findOneBySpawnloc(string $spawnloc) Return the first Myersrecruitmentdatabase filtered by the spawnloc column
 * @method Myersrecruitmentdatabase findOneByEggtype(string $eggtype) Return the first Myersrecruitmentdatabase filtered by the eggtype column
 * @method Myersrecruitmentdatabase findOneByFeedtype(string $Feedtype) Return the first Myersrecruitmentdatabase filtered by the Feedtype column
 * @method Myersrecruitmentdatabase findOneBySourcemat(string $sourcemat) Return the first Myersrecruitmentdatabase filtered by the sourcemat column
 * @method Myersrecruitmentdatabase findOneByLenmat(string $lenmat) Return the first Myersrecruitmentdatabase filtered by the lenmat column
 * @method Myersrecruitmentdatabase findOneByLenmatm(string $lenmatm) Return the first Myersrecruitmentdatabase filtered by the lenmatm column
 * @method Myersrecruitmentdatabase findOneByLenmatf(string $lenmatf) Return the first Myersrecruitmentdatabase filtered by the lenmatf column
 * @method Myersrecruitmentdatabase findOneByTm(double $tm) Return the first Myersrecruitmentdatabase filtered by the tm column
 * @method Myersrecruitmentdatabase findOneByTmref(int $tmRef) Return the first Myersrecruitmentdatabase filtered by the tmRef column
 * @method Myersrecruitmentdatabase findOneByAgemat(string $agemat) Return the first Myersrecruitmentdatabase filtered by the agemat column
 * @method Myersrecruitmentdatabase findOneByAgematm(string $agematm) Return the first Myersrecruitmentdatabase filtered by the agematm column
 * @method Myersrecruitmentdatabase findOneByAgematf(string $agematf) Return the first Myersrecruitmentdatabase filtered by the agematf column
 * @method Myersrecruitmentdatabase findOneByLenrec(string $lenrec) Return the first Myersrecruitmentdatabase filtered by the lenrec column
 * @method Myersrecruitmentdatabase findOneByAgerec(string $agerec) Return the first Myersrecruitmentdatabase filtered by the agerec column
 * @method Myersrecruitmentdatabase findOneByAgerecm(string $agerecm) Return the first Myersrecruitmentdatabase filtered by the agerecm column
 * @method Myersrecruitmentdatabase findOneByAgerecf(string $agerecf) Return the first Myersrecruitmentdatabase filtered by the agerecf column
 * @method Myersrecruitmentdatabase findOneByLoo(double $Loo) Return the first Myersrecruitmentdatabase filtered by the Loo column
 * @method Myersrecruitmentdatabase findOneByK(double $K) Return the first Myersrecruitmentdatabase filtered by the K column
 * @method Myersrecruitmentdatabase findOneByLengthtype(string $LengthType) Return the first Myersrecruitmentdatabase filtered by the LengthType column
 * @method Myersrecruitmentdatabase findOneByGrowthref(int $GrowthRef) Return the first Myersrecruitmentdatabase filtered by the GrowthRef column
 * @method Myersrecruitmentdatabase findOneBySourcegro(string $sourcegro) Return the first Myersrecruitmentdatabase filtered by the sourcegro column
 * @method Myersrecruitmentdatabase findOneByLinfin(string $linfin) Return the first Myersrecruitmentdatabase filtered by the linfin column
 * @method Myersrecruitmentdatabase findOneByKram(string $kram) Return the first Myersrecruitmentdatabase filtered by the kram column
 * @method Myersrecruitmentdatabase findOneByTo(string $to) Return the first Myersrecruitmentdatabase filtered by the to column
 * @method Myersrecruitmentdatabase findOneByLinfinm(string $linfinm) Return the first Myersrecruitmentdatabase filtered by the linfinm column
 * @method Myersrecruitmentdatabase findOneByKm(string $kM) Return the first Myersrecruitmentdatabase filtered by the kM column
 * @method Myersrecruitmentdatabase findOneByTom(string $toM) Return the first Myersrecruitmentdatabase filtered by the toM column
 * @method Myersrecruitmentdatabase findOneByLinfinf(string $linfinf) Return the first Myersrecruitmentdatabase filtered by the linfinf column
 * @method Myersrecruitmentdatabase findOneByKf(string $kF) Return the first Myersrecruitmentdatabase filtered by the kF column
 * @method Myersrecruitmentdatabase findOneByTof(string $toF) Return the first Myersrecruitmentdatabase filtered by the toF column
 * @method Myersrecruitmentdatabase findOneBySourceab(string $sourceab) Return the first Myersrecruitmentdatabase filtered by the sourceab column
 * @method Myersrecruitmentdatabase findOneByAltwtpar(string $altwtpar) Return the first Myersrecruitmentdatabase filtered by the altwtpar column
 * @method Myersrecruitmentdatabase findOneByBltwtpar(string $bltwtpar) Return the first Myersrecruitmentdatabase filtered by the bltwtpar column
 * @method Myersrecruitmentdatabase findOneByAltwtparm(string $altwtparm) Return the first Myersrecruitmentdatabase filtered by the altwtparm column
 * @method Myersrecruitmentdatabase findOneByBltwtparm(string $bltwtparm) Return the first Myersrecruitmentdatabase filtered by the bltwtparm column
 * @method Myersrecruitmentdatabase findOneByAltwtparf(string $altwtparf) Return the first Myersrecruitmentdatabase filtered by the altwtparf column
 * @method Myersrecruitmentdatabase findOneByBltwtparf(string $bltwtparf) Return the first Myersrecruitmentdatabase filtered by the bltwtparf column
 * @method Myersrecruitmentdatabase findOneByEntered(int $entered) Return the first Myersrecruitmentdatabase filtered by the entered column
 * @method Myersrecruitmentdatabase findOneByDateentered(string $dateentered) Return the first Myersrecruitmentdatabase filtered by the dateentered column
 * @method Myersrecruitmentdatabase findOneByModified(int $modified) Return the first Myersrecruitmentdatabase filtered by the modified column
 * @method Myersrecruitmentdatabase findOneByDatemodified(string $datemodified) Return the first Myersrecruitmentdatabase filtered by the datemodified column
 * @method Myersrecruitmentdatabase findOneByExpert(int $expert) Return the first Myersrecruitmentdatabase filtered by the expert column
 * @method Myersrecruitmentdatabase findOneByDatechecked(string $datechecked) Return the first Myersrecruitmentdatabase filtered by the datechecked column
 * @method Myersrecruitmentdatabase findOneByTs(string $TS) Return the first Myersrecruitmentdatabase filtered by the TS column
 *
 * @method array findById(string $ID) Return Myersrecruitmentdatabase objects filtered by the ID column
 * @method array findByReclag(double $Reclag) Return Myersrecruitmentdatabase objects filtered by the Reclag column
 * @method array findBySp(string $sp) Return Myersrecruitmentdatabase objects filtered by the sp column
 * @method array findByGenusused(string $genusUsed) Return Myersrecruitmentdatabase objects filtered by the genusUsed column
 * @method array findBySpeciesused(string $speciesUsed) Return Myersrecruitmentdatabase objects filtered by the speciesUsed column
 * @method array findBySpeccode(int $speccode) Return Myersrecruitmentdatabase objects filtered by the speccode column
 * @method array findByStockcode(int $stockcode) Return Myersrecruitmentdatabase objects filtered by the stockcode column
 * @method array findByFamily(string $family) Return Myersrecruitmentdatabase objects filtered by the family column
 * @method array findByCfamily(string $cfamily) Return Myersrecruitmentdatabase objects filtered by the cfamily column
 * @method array findByOrder(string $order) Return Myersrecruitmentdatabase objects filtered by the order column
 * @method array findByStockorig(string $stockOrig) Return Myersrecruitmentdatabase objects filtered by the stockOrig column
 * @method array findByStock(string $stock) Return Myersrecruitmentdatabase objects filtered by the stock column
 * @method array findByCCode(string $C_Code) Return Myersrecruitmentdatabase objects filtered by the C_Code column
 * @method array findByAreacode(int $AreaCode) Return Myersrecruitmentdatabase objects filtered by the AreaCode column
 * @method array findByArea(double $Area) Return Myersrecruitmentdatabase objects filtered by the Area column
 * @method array findByUnit(string $Unit) Return Myersrecruitmentdatabase objects filtered by the Unit column
 * @method array findByLatitude2(double $Latitude2) Return Myersrecruitmentdatabase objects filtered by the Latitude2 column
 * @method array findByNs(string $ns) Return Myersrecruitmentdatabase objects filtered by the ns column
 * @method array findByLongitude2(double $longitude2) Return Myersrecruitmentdatabase objects filtered by the longitude2 column
 * @method array findByWe(string $we) Return Myersrecruitmentdatabase objects filtered by the we column
 * @method array findBySource(string $source) Return Myersrecruitmentdatabase objects filtered by the source column
 * @method array findByMainref(int $MainRef) Return Myersrecruitmentdatabase objects filtered by the MainRef column
 * @method array findByDataref(int $DataRef) Return Myersrecruitmentdatabase objects filtered by the DataRef column
 * @method array findByCvrec(double $CVRec) Return Myersrecruitmentdatabase objects filtered by the CVRec column
 * @method array findByComments(string $comments) Return Myersrecruitmentdatabase objects filtered by the comments column
 * @method array findByComments2(string $comments2) Return Myersrecruitmentdatabase objects filtered by the comments2 column
 * @method array findByCommentsn(string $commentsN) Return Myersrecruitmentdatabase objects filtered by the commentsN column
 * @method array findByAreatxt(string $AreaTxt) Return Myersrecruitmentdatabase objects filtered by the AreaTxt column
 * @method array findByFage(string $fage) Return Myersrecruitmentdatabase objects filtered by the fage column
 * @method array findByMethod(string $method) Return Myersrecruitmentdatabase objects filtered by the method column
 * @method array findByMethod2(string $method2) Return Myersrecruitmentdatabase objects filtered by the method2 column
 * @method array findByUnitssb(string $unitssb) Return Myersrecruitmentdatabase objects filtered by the unitssb column
 * @method array findByUnitrec(string $unitrec) Return Myersrecruitmentdatabase objects filtered by the unitrec column
 * @method array findByUnitland(string $unitland) Return Myersrecruitmentdatabase objects filtered by the unitland column
 * @method array findByAgerecdat(double $agerecdat) Return Myersrecruitmentdatabase objects filtered by the agerecdat column
 * @method array findByEggdiam(string $eggdiam) Return Myersrecruitmentdatabase objects filtered by the eggdiam column
 * @method array findByLhatch(string $lhatch) Return Myersrecruitmentdatabase objects filtered by the lhatch column
 * @method array findByLmeta(string $lmeta) Return Myersrecruitmentdatabase objects filtered by the lmeta column
 * @method array findByDeltal(string $deltal) Return Myersrecruitmentdatabase objects filtered by the deltal column
 * @method array findByDeltan(string $deltan) Return Myersrecruitmentdatabase objects filtered by the deltan column
 * @method array findByMonthspa(string $monthspa) Return Myersrecruitmentdatabase objects filtered by the monthspa column
 * @method array findBySpawnmnth(string $spawnmnth) Return Myersrecruitmentdatabase objects filtered by the spawnmnth column
 * @method array findByNatmort(string $natmort) Return Myersrecruitmentdatabase objects filtered by the natmort column
 * @method array findByF01(string $f01) Return Myersrecruitmentdatabase objects filtered by the f01 column
 * @method array findByFmax(string $fmax) Return Myersrecruitmentdatabase objects filtered by the fmax column
 * @method array findByFmed(string $fmed) Return Myersrecruitmentdatabase objects filtered by the fmed column
 * @method array findByKgprecf0(string $kgprecf0) Return Myersrecruitmentdatabase objects filtered by the kgprecf0 column
 * @method array findBySpawnloc(string $spawnloc) Return Myersrecruitmentdatabase objects filtered by the spawnloc column
 * @method array findByEggtype(string $eggtype) Return Myersrecruitmentdatabase objects filtered by the eggtype column
 * @method array findByFeedtype(string $Feedtype) Return Myersrecruitmentdatabase objects filtered by the Feedtype column
 * @method array findBySourcemat(string $sourcemat) Return Myersrecruitmentdatabase objects filtered by the sourcemat column
 * @method array findByLenmat(string $lenmat) Return Myersrecruitmentdatabase objects filtered by the lenmat column
 * @method array findByLenmatm(string $lenmatm) Return Myersrecruitmentdatabase objects filtered by the lenmatm column
 * @method array findByLenmatf(string $lenmatf) Return Myersrecruitmentdatabase objects filtered by the lenmatf column
 * @method array findByTm(double $tm) Return Myersrecruitmentdatabase objects filtered by the tm column
 * @method array findByTmref(int $tmRef) Return Myersrecruitmentdatabase objects filtered by the tmRef column
 * @method array findByAgemat(string $agemat) Return Myersrecruitmentdatabase objects filtered by the agemat column
 * @method array findByAgematm(string $agematm) Return Myersrecruitmentdatabase objects filtered by the agematm column
 * @method array findByAgematf(string $agematf) Return Myersrecruitmentdatabase objects filtered by the agematf column
 * @method array findByLenrec(string $lenrec) Return Myersrecruitmentdatabase objects filtered by the lenrec column
 * @method array findByAgerec(string $agerec) Return Myersrecruitmentdatabase objects filtered by the agerec column
 * @method array findByAgerecm(string $agerecm) Return Myersrecruitmentdatabase objects filtered by the agerecm column
 * @method array findByAgerecf(string $agerecf) Return Myersrecruitmentdatabase objects filtered by the agerecf column
 * @method array findByLoo(double $Loo) Return Myersrecruitmentdatabase objects filtered by the Loo column
 * @method array findByK(double $K) Return Myersrecruitmentdatabase objects filtered by the K column
 * @method array findByLengthtype(string $LengthType) Return Myersrecruitmentdatabase objects filtered by the LengthType column
 * @method array findByGrowthref(int $GrowthRef) Return Myersrecruitmentdatabase objects filtered by the GrowthRef column
 * @method array findBySourcegro(string $sourcegro) Return Myersrecruitmentdatabase objects filtered by the sourcegro column
 * @method array findByLinfin(string $linfin) Return Myersrecruitmentdatabase objects filtered by the linfin column
 * @method array findByKram(string $kram) Return Myersrecruitmentdatabase objects filtered by the kram column
 * @method array findByTo(string $to) Return Myersrecruitmentdatabase objects filtered by the to column
 * @method array findByLinfinm(string $linfinm) Return Myersrecruitmentdatabase objects filtered by the linfinm column
 * @method array findByKm(string $kM) Return Myersrecruitmentdatabase objects filtered by the kM column
 * @method array findByTom(string $toM) Return Myersrecruitmentdatabase objects filtered by the toM column
 * @method array findByLinfinf(string $linfinf) Return Myersrecruitmentdatabase objects filtered by the linfinf column
 * @method array findByKf(string $kF) Return Myersrecruitmentdatabase objects filtered by the kF column
 * @method array findByTof(string $toF) Return Myersrecruitmentdatabase objects filtered by the toF column
 * @method array findBySourceab(string $sourceab) Return Myersrecruitmentdatabase objects filtered by the sourceab column
 * @method array findByAltwtpar(string $altwtpar) Return Myersrecruitmentdatabase objects filtered by the altwtpar column
 * @method array findByBltwtpar(string $bltwtpar) Return Myersrecruitmentdatabase objects filtered by the bltwtpar column
 * @method array findByAltwtparm(string $altwtparm) Return Myersrecruitmentdatabase objects filtered by the altwtparm column
 * @method array findByBltwtparm(string $bltwtparm) Return Myersrecruitmentdatabase objects filtered by the bltwtparm column
 * @method array findByAltwtparf(string $altwtparf) Return Myersrecruitmentdatabase objects filtered by the altwtparf column
 * @method array findByBltwtparf(string $bltwtparf) Return Myersrecruitmentdatabase objects filtered by the bltwtparf column
 * @method array findByEntered(int $entered) Return Myersrecruitmentdatabase objects filtered by the entered column
 * @method array findByDateentered(string $dateentered) Return Myersrecruitmentdatabase objects filtered by the dateentered column
 * @method array findByModified(int $modified) Return Myersrecruitmentdatabase objects filtered by the modified column
 * @method array findByDatemodified(string $datemodified) Return Myersrecruitmentdatabase objects filtered by the datemodified column
 * @method array findByExpert(int $expert) Return Myersrecruitmentdatabase objects filtered by the expert column
 * @method array findByDatechecked(string $datechecked) Return Myersrecruitmentdatabase objects filtered by the datechecked column
 * @method array findByTs(string $TS) Return Myersrecruitmentdatabase objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMyersrecruitmentdatabaseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMyersrecruitmentdatabaseQuery object.
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
            $modelName = 'Myersrecruitmentdatabase';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MyersrecruitmentdatabaseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MyersrecruitmentdatabaseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MyersrecruitmentdatabaseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MyersrecruitmentdatabaseQuery) {
            return $criteria;
        }
        $query = new MyersrecruitmentdatabaseQuery(null, null, $modelAlias);

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
     * @return   Myersrecruitmentdatabase|Myersrecruitmentdatabase[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MyersrecruitmentdatabasePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Myersrecruitmentdatabase A model object, or null if the key is not found
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
     * @return                 Myersrecruitmentdatabase A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `Reclag`, `sp`, `genusUsed`, `speciesUsed`, `speccode`, `stockcode`, `family`, `cfamily`, `order`, `stockOrig`, `stock`, `C_Code`, `AreaCode`, `Area`, `Unit`, `Latitude2`, `ns`, `longitude2`, `we`, `source`, `MainRef`, `DataRef`, `CVRec`, `comments`, `comments2`, `commentsN`, `AreaTxt`, `fage`, `method`, `method2`, `unitssb`, `unitrec`, `unitland`, `agerecdat`, `eggdiam`, `lhatch`, `lmeta`, `deltal`, `deltan`, `monthspa`, `spawnmnth`, `natmort`, `f01`, `fmax`, `fmed`, `kgprecf0`, `spawnloc`, `eggtype`, `Feedtype`, `sourcemat`, `lenmat`, `lenmatm`, `lenmatf`, `tm`, `tmRef`, `agemat`, `agematm`, `agematf`, `lenrec`, `agerec`, `agerecm`, `agerecf`, `Loo`, `K`, `LengthType`, `GrowthRef`, `sourcegro`, `linfin`, `kram`, `to`, `linfinm`, `kM`, `toM`, `linfinf`, `kF`, `toF`, `sourceab`, `altwtpar`, `bltwtpar`, `altwtparm`, `bltwtparm`, `altwtparf`, `bltwtparf`, `entered`, `dateentered`, `modified`, `datemodified`, `expert`, `datechecked`, `TS` FROM `myersrecruitmentdatabase` WHERE `ID` = :p0';
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
            $obj = new Myersrecruitmentdatabase();
            $obj->hydrate($row);
            MyersrecruitmentdatabasePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Myersrecruitmentdatabase|Myersrecruitmentdatabase[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Myersrecruitmentdatabase[]|mixed the list of results, formatted by the current formatter
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE ID = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE ID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Reclag column
     *
     * Example usage:
     * <code>
     * $query->filterByReclag(1234); // WHERE Reclag = 1234
     * $query->filterByReclag(array(12, 34)); // WHERE Reclag IN (12, 34)
     * $query->filterByReclag(array('min' => 12)); // WHERE Reclag >= 12
     * $query->filterByReclag(array('max' => 12)); // WHERE Reclag <= 12
     * </code>
     *
     * @param     mixed $reclag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByReclag($reclag = null, $comparison = null)
    {
        if (is_array($reclag)) {
            $useMinMax = false;
            if (isset($reclag['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::RECLAG, $reclag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reclag['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::RECLAG, $reclag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::RECLAG, $reclag, $comparison);
    }

    /**
     * Filter the query on the sp column
     *
     * Example usage:
     * <code>
     * $query->filterBySp('fooValue');   // WHERE sp = 'fooValue'
     * $query->filterBySp('%fooValue%'); // WHERE sp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySp($sp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sp)) {
                $sp = str_replace('*', '%', $sp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SP, $sp, $comparison);
    }

    /**
     * Filter the query on the genusUsed column
     *
     * Example usage:
     * <code>
     * $query->filterByGenusused('fooValue');   // WHERE genusUsed = 'fooValue'
     * $query->filterByGenusused('%fooValue%'); // WHERE genusUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genusused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByGenusused($genusused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genusused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genusused)) {
                $genusused = str_replace('*', '%', $genusused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::GENUSUSED, $genusused, $comparison);
    }

    /**
     * Filter the query on the speciesUsed column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesused('fooValue');   // WHERE speciesUsed = 'fooValue'
     * $query->filterBySpeciesused('%fooValue%'); // WHERE speciesUsed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciesused The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySpeciesused($speciesused = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciesused)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciesused)) {
                $speciesused = str_replace('*', '%', $speciesused);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SPECIESUSED, $speciesused, $comparison);
    }

    /**
     * Filter the query on the speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the cfamily column
     *
     * Example usage:
     * <code>
     * $query->filterByCfamily('fooValue');   // WHERE cfamily = 'fooValue'
     * $query->filterByCfamily('%fooValue%'); // WHERE cfamily LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cfamily The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByCfamily($cfamily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cfamily)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cfamily)) {
                $cfamily = str_replace('*', '%', $cfamily);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::CFAMILY, $cfamily, $comparison);
    }

    /**
     * Filter the query on the order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder('fooValue');   // WHERE order = 'fooValue'
     * $query->filterByOrder('%fooValue%'); // WHERE order LIKE '%fooValue%'
     * </code>
     *
     * @param     string $order The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the stockOrig column
     *
     * Example usage:
     * <code>
     * $query->filterByStockorig('fooValue');   // WHERE stockOrig = 'fooValue'
     * $query->filterByStockorig('%fooValue%'); // WHERE stockOrig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stockorig The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByStockorig($stockorig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stockorig)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stockorig)) {
                $stockorig = str_replace('*', '%', $stockorig);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::STOCKORIG, $stockorig, $comparison);
    }

    /**
     * Filter the query on the stock column
     *
     * Example usage:
     * <code>
     * $query->filterByStock('fooValue');   // WHERE stock = 'fooValue'
     * $query->filterByStock('%fooValue%'); // WHERE stock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stock The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByStock($stock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stock)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stock)) {
                $stock = str_replace('*', '%', $stock);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::STOCK, $stock, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREACODE, $areacode, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREA, $area, $comparison);
    }

    /**
     * Filter the query on the Unit column
     *
     * Example usage:
     * <code>
     * $query->filterByUnit('fooValue');   // WHERE Unit = 'fooValue'
     * $query->filterByUnit('%fooValue%'); // WHERE Unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unit)) {
                $unit = str_replace('*', '%', $unit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the Latitude2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitude2(1234); // WHERE Latitude2 = 1234
     * $query->filterByLatitude2(array(12, 34)); // WHERE Latitude2 IN (12, 34)
     * $query->filterByLatitude2(array('min' => 12)); // WHERE Latitude2 >= 12
     * $query->filterByLatitude2(array('max' => 12)); // WHERE Latitude2 <= 12
     * </code>
     *
     * @param     mixed $latitude2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLatitude2($latitude2 = null, $comparison = null)
    {
        if (is_array($latitude2)) {
            $useMinMax = false;
            if (isset($latitude2['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::LATITUDE2, $latitude2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitude2['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::LATITUDE2, $latitude2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LATITUDE2, $latitude2, $comparison);
    }

    /**
     * Filter the query on the ns column
     *
     * Example usage:
     * <code>
     * $query->filterByNs('fooValue');   // WHERE ns = 'fooValue'
     * $query->filterByNs('%fooValue%'); // WHERE ns LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ns The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByNs($ns = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ns)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ns)) {
                $ns = str_replace('*', '%', $ns);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::NS, $ns, $comparison);
    }

    /**
     * Filter the query on the longitude2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitude2(1234); // WHERE longitude2 = 1234
     * $query->filterByLongitude2(array(12, 34)); // WHERE longitude2 IN (12, 34)
     * $query->filterByLongitude2(array('min' => 12)); // WHERE longitude2 >= 12
     * $query->filterByLongitude2(array('max' => 12)); // WHERE longitude2 <= 12
     * </code>
     *
     * @param     mixed $longitude2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLongitude2($longitude2 = null, $comparison = null)
    {
        if (is_array($longitude2)) {
            $useMinMax = false;
            if (isset($longitude2['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::LONGITUDE2, $longitude2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitude2['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::LONGITUDE2, $longitude2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LONGITUDE2, $longitude2, $comparison);
    }

    /**
     * Filter the query on the we column
     *
     * Example usage:
     * <code>
     * $query->filterByWe('fooValue');   // WHERE we = 'fooValue'
     * $query->filterByWe('%fooValue%'); // WHERE we LIKE '%fooValue%'
     * </code>
     *
     * @param     string $we The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByWe($we = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($we)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $we)) {
                $we = str_replace('*', '%', $we);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::WE, $we, $comparison);
    }

    /**
     * Filter the query on the source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the MainRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMainref(1234); // WHERE MainRef = 1234
     * $query->filterByMainref(array(12, 34)); // WHERE MainRef IN (12, 34)
     * $query->filterByMainref(array('min' => 12)); // WHERE MainRef >= 12
     * $query->filterByMainref(array('max' => 12)); // WHERE MainRef <= 12
     * </code>
     *
     * @param     mixed $mainref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (is_array($mainref)) {
            $useMinMax = false;
            if (isset($mainref['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::MAINREF, $mainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainref['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::MAINREF, $mainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::MAINREF, $mainref, $comparison);
    }

    /**
     * Filter the query on the DataRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref(1234); // WHERE DataRef = 1234
     * $query->filterByDataref(array(12, 34)); // WHERE DataRef IN (12, 34)
     * $query->filterByDataref(array('min' => 12)); // WHERE DataRef >= 12
     * $query->filterByDataref(array('max' => 12)); // WHERE DataRef <= 12
     * </code>
     *
     * @param     mixed $dataref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the CVRec column
     *
     * Example usage:
     * <code>
     * $query->filterByCvrec(1234); // WHERE CVRec = 1234
     * $query->filterByCvrec(array(12, 34)); // WHERE CVRec IN (12, 34)
     * $query->filterByCvrec(array('min' => 12)); // WHERE CVRec >= 12
     * $query->filterByCvrec(array('max' => 12)); // WHERE CVRec <= 12
     * </code>
     *
     * @param     mixed $cvrec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByCvrec($cvrec = null, $comparison = null)
    {
        if (is_array($cvrec)) {
            $useMinMax = false;
            if (isset($cvrec['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::CVREC, $cvrec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cvrec['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::CVREC, $cvrec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::CVREC, $cvrec, $comparison);
    }

    /**
     * Filter the query on the comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the comments2 column
     *
     * Example usage:
     * <code>
     * $query->filterByComments2('fooValue');   // WHERE comments2 = 'fooValue'
     * $query->filterByComments2('%fooValue%'); // WHERE comments2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByComments2($comments2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments2)) {
                $comments2 = str_replace('*', '%', $comments2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::COMMENTS2, $comments2, $comparison);
    }

    /**
     * Filter the query on the commentsN column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentsn('fooValue');   // WHERE commentsN = 'fooValue'
     * $query->filterByCommentsn('%fooValue%'); // WHERE commentsN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentsn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByCommentsn($commentsn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentsn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentsn)) {
                $commentsn = str_replace('*', '%', $commentsn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::COMMENTSN, $commentsn, $comparison);
    }

    /**
     * Filter the query on the AreaTxt column
     *
     * Example usage:
     * <code>
     * $query->filterByAreatxt('fooValue');   // WHERE AreaTxt = 'fooValue'
     * $query->filterByAreatxt('%fooValue%'); // WHERE AreaTxt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $areatxt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAreatxt($areatxt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($areatxt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $areatxt)) {
                $areatxt = str_replace('*', '%', $areatxt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AREATXT, $areatxt, $comparison);
    }

    /**
     * Filter the query on the fage column
     *
     * Example usage:
     * <code>
     * $query->filterByFage('fooValue');   // WHERE fage = 'fooValue'
     * $query->filterByFage('%fooValue%'); // WHERE fage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByFage($fage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fage)) {
                $fage = str_replace('*', '%', $fage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::FAGE, $fage, $comparison);
    }

    /**
     * Filter the query on the method column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod('fooValue');   // WHERE method = 'fooValue'
     * $query->filterByMethod('%fooValue%'); // WHERE method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByMethod($method = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $method)) {
                $method = str_replace('*', '%', $method);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::METHOD, $method, $comparison);
    }

    /**
     * Filter the query on the method2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod2('fooValue');   // WHERE method2 = 'fooValue'
     * $query->filterByMethod2('%fooValue%'); // WHERE method2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByMethod2($method2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $method2)) {
                $method2 = str_replace('*', '%', $method2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::METHOD2, $method2, $comparison);
    }

    /**
     * Filter the query on the unitssb column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitssb('fooValue');   // WHERE unitssb = 'fooValue'
     * $query->filterByUnitssb('%fooValue%'); // WHERE unitssb LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitssb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByUnitssb($unitssb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitssb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unitssb)) {
                $unitssb = str_replace('*', '%', $unitssb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::UNITSSB, $unitssb, $comparison);
    }

    /**
     * Filter the query on the unitrec column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitrec('fooValue');   // WHERE unitrec = 'fooValue'
     * $query->filterByUnitrec('%fooValue%'); // WHERE unitrec LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitrec The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByUnitrec($unitrec = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitrec)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unitrec)) {
                $unitrec = str_replace('*', '%', $unitrec);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::UNITREC, $unitrec, $comparison);
    }

    /**
     * Filter the query on the unitland column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitland('fooValue');   // WHERE unitland = 'fooValue'
     * $query->filterByUnitland('%fooValue%'); // WHERE unitland LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitland The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByUnitland($unitland = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitland)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unitland)) {
                $unitland = str_replace('*', '%', $unitland);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::UNITLAND, $unitland, $comparison);
    }

    /**
     * Filter the query on the agerecdat column
     *
     * Example usage:
     * <code>
     * $query->filterByAgerecdat(1234); // WHERE agerecdat = 1234
     * $query->filterByAgerecdat(array(12, 34)); // WHERE agerecdat IN (12, 34)
     * $query->filterByAgerecdat(array('min' => 12)); // WHERE agerecdat >= 12
     * $query->filterByAgerecdat(array('max' => 12)); // WHERE agerecdat <= 12
     * </code>
     *
     * @param     mixed $agerecdat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgerecdat($agerecdat = null, $comparison = null)
    {
        if (is_array($agerecdat)) {
            $useMinMax = false;
            if (isset($agerecdat['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGERECDAT, $agerecdat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agerecdat['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGERECDAT, $agerecdat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGERECDAT, $agerecdat, $comparison);
    }

    /**
     * Filter the query on the eggdiam column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiam('fooValue');   // WHERE eggdiam = 'fooValue'
     * $query->filterByEggdiam('%fooValue%'); // WHERE eggdiam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eggdiam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByEggdiam($eggdiam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eggdiam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eggdiam)) {
                $eggdiam = str_replace('*', '%', $eggdiam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::EGGDIAM, $eggdiam, $comparison);
    }

    /**
     * Filter the query on the lhatch column
     *
     * Example usage:
     * <code>
     * $query->filterByLhatch('fooValue');   // WHERE lhatch = 'fooValue'
     * $query->filterByLhatch('%fooValue%'); // WHERE lhatch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lhatch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLhatch($lhatch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lhatch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lhatch)) {
                $lhatch = str_replace('*', '%', $lhatch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LHATCH, $lhatch, $comparison);
    }

    /**
     * Filter the query on the lmeta column
     *
     * Example usage:
     * <code>
     * $query->filterByLmeta('fooValue');   // WHERE lmeta = 'fooValue'
     * $query->filterByLmeta('%fooValue%'); // WHERE lmeta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lmeta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLmeta($lmeta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lmeta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lmeta)) {
                $lmeta = str_replace('*', '%', $lmeta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LMETA, $lmeta, $comparison);
    }

    /**
     * Filter the query on the deltal column
     *
     * Example usage:
     * <code>
     * $query->filterByDeltal('fooValue');   // WHERE deltal = 'fooValue'
     * $query->filterByDeltal('%fooValue%'); // WHERE deltal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deltal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByDeltal($deltal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deltal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $deltal)) {
                $deltal = str_replace('*', '%', $deltal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::DELTAL, $deltal, $comparison);
    }

    /**
     * Filter the query on the deltan column
     *
     * Example usage:
     * <code>
     * $query->filterByDeltan('fooValue');   // WHERE deltan = 'fooValue'
     * $query->filterByDeltan('%fooValue%'); // WHERE deltan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deltan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByDeltan($deltan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deltan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $deltan)) {
                $deltan = str_replace('*', '%', $deltan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::DELTAN, $deltan, $comparison);
    }

    /**
     * Filter the query on the monthspa column
     *
     * Example usage:
     * <code>
     * $query->filterByMonthspa('fooValue');   // WHERE monthspa = 'fooValue'
     * $query->filterByMonthspa('%fooValue%'); // WHERE monthspa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $monthspa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByMonthspa($monthspa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($monthspa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $monthspa)) {
                $monthspa = str_replace('*', '%', $monthspa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::MONTHSPA, $monthspa, $comparison);
    }

    /**
     * Filter the query on the spawnmnth column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawnmnth('fooValue');   // WHERE spawnmnth = 'fooValue'
     * $query->filterBySpawnmnth('%fooValue%'); // WHERE spawnmnth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spawnmnth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySpawnmnth($spawnmnth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spawnmnth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spawnmnth)) {
                $spawnmnth = str_replace('*', '%', $spawnmnth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SPAWNMNTH, $spawnmnth, $comparison);
    }

    /**
     * Filter the query on the natmort column
     *
     * Example usage:
     * <code>
     * $query->filterByNatmort('fooValue');   // WHERE natmort = 'fooValue'
     * $query->filterByNatmort('%fooValue%'); // WHERE natmort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $natmort The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByNatmort($natmort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($natmort)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $natmort)) {
                $natmort = str_replace('*', '%', $natmort);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::NATMORT, $natmort, $comparison);
    }

    /**
     * Filter the query on the f01 column
     *
     * Example usage:
     * <code>
     * $query->filterByF01('fooValue');   // WHERE f01 = 'fooValue'
     * $query->filterByF01('%fooValue%'); // WHERE f01 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $f01 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByF01($f01 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($f01)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $f01)) {
                $f01 = str_replace('*', '%', $f01);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::F01, $f01, $comparison);
    }

    /**
     * Filter the query on the fmax column
     *
     * Example usage:
     * <code>
     * $query->filterByFmax('fooValue');   // WHERE fmax = 'fooValue'
     * $query->filterByFmax('%fooValue%'); // WHERE fmax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fmax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByFmax($fmax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fmax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fmax)) {
                $fmax = str_replace('*', '%', $fmax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::FMAX, $fmax, $comparison);
    }

    /**
     * Filter the query on the fmed column
     *
     * Example usage:
     * <code>
     * $query->filterByFmed('fooValue');   // WHERE fmed = 'fooValue'
     * $query->filterByFmed('%fooValue%'); // WHERE fmed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fmed The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByFmed($fmed = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fmed)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fmed)) {
                $fmed = str_replace('*', '%', $fmed);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::FMED, $fmed, $comparison);
    }

    /**
     * Filter the query on the kgprecf0 column
     *
     * Example usage:
     * <code>
     * $query->filterByKgprecf0('fooValue');   // WHERE kgprecf0 = 'fooValue'
     * $query->filterByKgprecf0('%fooValue%'); // WHERE kgprecf0 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kgprecf0 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByKgprecf0($kgprecf0 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kgprecf0)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kgprecf0)) {
                $kgprecf0 = str_replace('*', '%', $kgprecf0);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::KGPRECF0, $kgprecf0, $comparison);
    }

    /**
     * Filter the query on the spawnloc column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawnloc('fooValue');   // WHERE spawnloc = 'fooValue'
     * $query->filterBySpawnloc('%fooValue%'); // WHERE spawnloc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spawnloc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySpawnloc($spawnloc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spawnloc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spawnloc)) {
                $spawnloc = str_replace('*', '%', $spawnloc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SPAWNLOC, $spawnloc, $comparison);
    }

    /**
     * Filter the query on the eggtype column
     *
     * Example usage:
     * <code>
     * $query->filterByEggtype('fooValue');   // WHERE eggtype = 'fooValue'
     * $query->filterByEggtype('%fooValue%'); // WHERE eggtype LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eggtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByEggtype($eggtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eggtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eggtype)) {
                $eggtype = str_replace('*', '%', $eggtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::EGGTYPE, $eggtype, $comparison);
    }

    /**
     * Filter the query on the Feedtype column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedtype('fooValue');   // WHERE Feedtype = 'fooValue'
     * $query->filterByFeedtype('%fooValue%'); // WHERE Feedtype LIKE '%fooValue%'
     * </code>
     *
     * @param     string $feedtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByFeedtype($feedtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($feedtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $feedtype)) {
                $feedtype = str_replace('*', '%', $feedtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::FEEDTYPE, $feedtype, $comparison);
    }

    /**
     * Filter the query on the sourcemat column
     *
     * Example usage:
     * <code>
     * $query->filterBySourcemat('fooValue');   // WHERE sourcemat = 'fooValue'
     * $query->filterBySourcemat('%fooValue%'); // WHERE sourcemat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourcemat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySourcemat($sourcemat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourcemat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourcemat)) {
                $sourcemat = str_replace('*', '%', $sourcemat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SOURCEMAT, $sourcemat, $comparison);
    }

    /**
     * Filter the query on the lenmat column
     *
     * Example usage:
     * <code>
     * $query->filterByLenmat('fooValue');   // WHERE lenmat = 'fooValue'
     * $query->filterByLenmat('%fooValue%'); // WHERE lenmat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lenmat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLenmat($lenmat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lenmat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lenmat)) {
                $lenmat = str_replace('*', '%', $lenmat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LENMAT, $lenmat, $comparison);
    }

    /**
     * Filter the query on the lenmatm column
     *
     * Example usage:
     * <code>
     * $query->filterByLenmatm('fooValue');   // WHERE lenmatm = 'fooValue'
     * $query->filterByLenmatm('%fooValue%'); // WHERE lenmatm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lenmatm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLenmatm($lenmatm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lenmatm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lenmatm)) {
                $lenmatm = str_replace('*', '%', $lenmatm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LENMATM, $lenmatm, $comparison);
    }

    /**
     * Filter the query on the lenmatf column
     *
     * Example usage:
     * <code>
     * $query->filterByLenmatf('fooValue');   // WHERE lenmatf = 'fooValue'
     * $query->filterByLenmatf('%fooValue%'); // WHERE lenmatf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lenmatf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLenmatf($lenmatf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lenmatf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lenmatf)) {
                $lenmatf = str_replace('*', '%', $lenmatf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LENMATF, $lenmatf, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByTm($tm = null, $comparison = null)
    {
        if (is_array($tm)) {
            $useMinMax = false;
            if (isset($tm['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::TM, $tm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::TM, $tm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::TM, $tm, $comparison);
    }

    /**
     * Filter the query on the tmRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTmref(1234); // WHERE tmRef = 1234
     * $query->filterByTmref(array(12, 34)); // WHERE tmRef IN (12, 34)
     * $query->filterByTmref(array('min' => 12)); // WHERE tmRef >= 12
     * $query->filterByTmref(array('max' => 12)); // WHERE tmRef <= 12
     * </code>
     *
     * @param     mixed $tmref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByTmref($tmref = null, $comparison = null)
    {
        if (is_array($tmref)) {
            $useMinMax = false;
            if (isset($tmref['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::TMREF, $tmref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tmref['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::TMREF, $tmref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::TMREF, $tmref, $comparison);
    }

    /**
     * Filter the query on the agemat column
     *
     * Example usage:
     * <code>
     * $query->filterByAgemat('fooValue');   // WHERE agemat = 'fooValue'
     * $query->filterByAgemat('%fooValue%'); // WHERE agemat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agemat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgemat($agemat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agemat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agemat)) {
                $agemat = str_replace('*', '%', $agemat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGEMAT, $agemat, $comparison);
    }

    /**
     * Filter the query on the agematm column
     *
     * Example usage:
     * <code>
     * $query->filterByAgematm('fooValue');   // WHERE agematm = 'fooValue'
     * $query->filterByAgematm('%fooValue%'); // WHERE agematm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agematm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgematm($agematm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agematm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agematm)) {
                $agematm = str_replace('*', '%', $agematm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGEMATM, $agematm, $comparison);
    }

    /**
     * Filter the query on the agematf column
     *
     * Example usage:
     * <code>
     * $query->filterByAgematf('fooValue');   // WHERE agematf = 'fooValue'
     * $query->filterByAgematf('%fooValue%'); // WHERE agematf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agematf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgematf($agematf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agematf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agematf)) {
                $agematf = str_replace('*', '%', $agematf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGEMATF, $agematf, $comparison);
    }

    /**
     * Filter the query on the lenrec column
     *
     * Example usage:
     * <code>
     * $query->filterByLenrec('fooValue');   // WHERE lenrec = 'fooValue'
     * $query->filterByLenrec('%fooValue%'); // WHERE lenrec LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lenrec The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLenrec($lenrec = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lenrec)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lenrec)) {
                $lenrec = str_replace('*', '%', $lenrec);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LENREC, $lenrec, $comparison);
    }

    /**
     * Filter the query on the agerec column
     *
     * Example usage:
     * <code>
     * $query->filterByAgerec('fooValue');   // WHERE agerec = 'fooValue'
     * $query->filterByAgerec('%fooValue%'); // WHERE agerec LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agerec The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgerec($agerec = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agerec)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agerec)) {
                $agerec = str_replace('*', '%', $agerec);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGEREC, $agerec, $comparison);
    }

    /**
     * Filter the query on the agerecm column
     *
     * Example usage:
     * <code>
     * $query->filterByAgerecm('fooValue');   // WHERE agerecm = 'fooValue'
     * $query->filterByAgerecm('%fooValue%'); // WHERE agerecm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agerecm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgerecm($agerecm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agerecm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agerecm)) {
                $agerecm = str_replace('*', '%', $agerecm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGERECM, $agerecm, $comparison);
    }

    /**
     * Filter the query on the agerecf column
     *
     * Example usage:
     * <code>
     * $query->filterByAgerecf('fooValue');   // WHERE agerecf = 'fooValue'
     * $query->filterByAgerecf('%fooValue%'); // WHERE agerecf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agerecf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAgerecf($agerecf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agerecf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agerecf)) {
                $agerecf = str_replace('*', '%', $agerecf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::AGERECF, $agerecf, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLoo($loo = null, $comparison = null)
    {
        if (is_array($loo)) {
            $useMinMax = false;
            if (isset($loo['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::LOO, $loo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loo['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::LOO, $loo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LOO, $loo, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::K, $k, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the GrowthRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthref(1234); // WHERE GrowthRef = 1234
     * $query->filterByGrowthref(array(12, 34)); // WHERE GrowthRef IN (12, 34)
     * $query->filterByGrowthref(array('min' => 12)); // WHERE GrowthRef >= 12
     * $query->filterByGrowthref(array('max' => 12)); // WHERE GrowthRef <= 12
     * </code>
     *
     * @param     mixed $growthref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByGrowthref($growthref = null, $comparison = null)
    {
        if (is_array($growthref)) {
            $useMinMax = false;
            if (isset($growthref['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::GROWTHREF, $growthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthref['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::GROWTHREF, $growthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::GROWTHREF, $growthref, $comparison);
    }

    /**
     * Filter the query on the sourcegro column
     *
     * Example usage:
     * <code>
     * $query->filterBySourcegro('fooValue');   // WHERE sourcegro = 'fooValue'
     * $query->filterBySourcegro('%fooValue%'); // WHERE sourcegro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourcegro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySourcegro($sourcegro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourcegro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourcegro)) {
                $sourcegro = str_replace('*', '%', $sourcegro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SOURCEGRO, $sourcegro, $comparison);
    }

    /**
     * Filter the query on the linfin column
     *
     * Example usage:
     * <code>
     * $query->filterByLinfin('fooValue');   // WHERE linfin = 'fooValue'
     * $query->filterByLinfin('%fooValue%'); // WHERE linfin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linfin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLinfin($linfin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linfin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $linfin)) {
                $linfin = str_replace('*', '%', $linfin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LINFIN, $linfin, $comparison);
    }

    /**
     * Filter the query on the kram column
     *
     * Example usage:
     * <code>
     * $query->filterByKram('fooValue');   // WHERE kram = 'fooValue'
     * $query->filterByKram('%fooValue%'); // WHERE kram LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kram The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByKram($kram = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kram)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kram)) {
                $kram = str_replace('*', '%', $kram);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::KRAM, $kram, $comparison);
    }

    /**
     * Filter the query on the to column
     *
     * Example usage:
     * <code>
     * $query->filterByTo('fooValue');   // WHERE to = 'fooValue'
     * $query->filterByTo('%fooValue%'); // WHERE to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $to The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByTo($to = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($to)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $to)) {
                $to = str_replace('*', '%', $to);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::TO, $to, $comparison);
    }

    /**
     * Filter the query on the linfinm column
     *
     * Example usage:
     * <code>
     * $query->filterByLinfinm('fooValue');   // WHERE linfinm = 'fooValue'
     * $query->filterByLinfinm('%fooValue%'); // WHERE linfinm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linfinm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLinfinm($linfinm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linfinm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $linfinm)) {
                $linfinm = str_replace('*', '%', $linfinm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LINFINM, $linfinm, $comparison);
    }

    /**
     * Filter the query on the kM column
     *
     * Example usage:
     * <code>
     * $query->filterByKm('fooValue');   // WHERE kM = 'fooValue'
     * $query->filterByKm('%fooValue%'); // WHERE kM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $km The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByKm($km = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($km)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $km)) {
                $km = str_replace('*', '%', $km);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::KM, $km, $comparison);
    }

    /**
     * Filter the query on the toM column
     *
     * Example usage:
     * <code>
     * $query->filterByTom('fooValue');   // WHERE toM = 'fooValue'
     * $query->filterByTom('%fooValue%'); // WHERE toM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByTom($tom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tom)) {
                $tom = str_replace('*', '%', $tom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::TOM, $tom, $comparison);
    }

    /**
     * Filter the query on the linfinf column
     *
     * Example usage:
     * <code>
     * $query->filterByLinfinf('fooValue');   // WHERE linfinf = 'fooValue'
     * $query->filterByLinfinf('%fooValue%'); // WHERE linfinf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linfinf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByLinfinf($linfinf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linfinf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $linfinf)) {
                $linfinf = str_replace('*', '%', $linfinf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::LINFINF, $linfinf, $comparison);
    }

    /**
     * Filter the query on the kF column
     *
     * Example usage:
     * <code>
     * $query->filterByKf('fooValue');   // WHERE kF = 'fooValue'
     * $query->filterByKf('%fooValue%'); // WHERE kF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByKf($kf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kf)) {
                $kf = str_replace('*', '%', $kf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::KF, $kf, $comparison);
    }

    /**
     * Filter the query on the toF column
     *
     * Example usage:
     * <code>
     * $query->filterByTof('fooValue');   // WHERE toF = 'fooValue'
     * $query->filterByTof('%fooValue%'); // WHERE toF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tof The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByTof($tof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tof)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tof)) {
                $tof = str_replace('*', '%', $tof);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::TOF, $tof, $comparison);
    }

    /**
     * Filter the query on the sourceab column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceab('fooValue');   // WHERE sourceab = 'fooValue'
     * $query->filterBySourceab('%fooValue%'); // WHERE sourceab LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourceab The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterBySourceab($sourceab = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourceab)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourceab)) {
                $sourceab = str_replace('*', '%', $sourceab);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::SOURCEAB, $sourceab, $comparison);
    }

    /**
     * Filter the query on the altwtpar column
     *
     * Example usage:
     * <code>
     * $query->filterByAltwtpar('fooValue');   // WHERE altwtpar = 'fooValue'
     * $query->filterByAltwtpar('%fooValue%'); // WHERE altwtpar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $altwtpar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAltwtpar($altwtpar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($altwtpar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $altwtpar)) {
                $altwtpar = str_replace('*', '%', $altwtpar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ALTWTPAR, $altwtpar, $comparison);
    }

    /**
     * Filter the query on the bltwtpar column
     *
     * Example usage:
     * <code>
     * $query->filterByBltwtpar('fooValue');   // WHERE bltwtpar = 'fooValue'
     * $query->filterByBltwtpar('%fooValue%'); // WHERE bltwtpar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bltwtpar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByBltwtpar($bltwtpar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bltwtpar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bltwtpar)) {
                $bltwtpar = str_replace('*', '%', $bltwtpar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::BLTWTPAR, $bltwtpar, $comparison);
    }

    /**
     * Filter the query on the altwtparm column
     *
     * Example usage:
     * <code>
     * $query->filterByAltwtparm('fooValue');   // WHERE altwtparm = 'fooValue'
     * $query->filterByAltwtparm('%fooValue%'); // WHERE altwtparm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $altwtparm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAltwtparm($altwtparm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($altwtparm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $altwtparm)) {
                $altwtparm = str_replace('*', '%', $altwtparm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ALTWTPARM, $altwtparm, $comparison);
    }

    /**
     * Filter the query on the bltwtparm column
     *
     * Example usage:
     * <code>
     * $query->filterByBltwtparm('fooValue');   // WHERE bltwtparm = 'fooValue'
     * $query->filterByBltwtparm('%fooValue%'); // WHERE bltwtparm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bltwtparm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByBltwtparm($bltwtparm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bltwtparm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bltwtparm)) {
                $bltwtparm = str_replace('*', '%', $bltwtparm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::BLTWTPARM, $bltwtparm, $comparison);
    }

    /**
     * Filter the query on the altwtparf column
     *
     * Example usage:
     * <code>
     * $query->filterByAltwtparf('fooValue');   // WHERE altwtparf = 'fooValue'
     * $query->filterByAltwtparf('%fooValue%'); // WHERE altwtparf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $altwtparf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByAltwtparf($altwtparf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($altwtparf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $altwtparf)) {
                $altwtparf = str_replace('*', '%', $altwtparf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ALTWTPARF, $altwtparf, $comparison);
    }

    /**
     * Filter the query on the bltwtparf column
     *
     * Example usage:
     * <code>
     * $query->filterByBltwtparf('fooValue');   // WHERE bltwtparf = 'fooValue'
     * $query->filterByBltwtparf('%fooValue%'); // WHERE bltwtparf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bltwtparf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByBltwtparf($bltwtparf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bltwtparf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bltwtparf)) {
                $bltwtparf = str_replace('*', '%', $bltwtparf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::BLTWTPARF, $bltwtparf, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::ENTERED, $entered, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::MODIFIED, $modified, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::EXPERT, $expert, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::DATECHECKED, $datechecked, $comparison);
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
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MyersrecruitmentdatabasePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MyersrecruitmentdatabasePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Myersrecruitmentdatabase $myersrecruitmentdatabase Object to remove from the list of results
     *
     * @return MyersrecruitmentdatabaseQuery The current query, for fluid interface
     */
    public function prune($myersrecruitmentdatabase = null)
    {
        if ($myersrecruitmentdatabase) {
            $this->addUsingAlias(MyersrecruitmentdatabasePeer::ID, $myersrecruitmentdatabase->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
