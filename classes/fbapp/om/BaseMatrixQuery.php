<?php


/**
 * Base class that represents a query for the 'matrix' table.
 *
 *
 *
 * @method MatrixQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method MatrixQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method MatrixQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method MatrixQuery orderByKfType($order = Criteria::ASC) Order by the KF_type column
 * @method MatrixQuery orderByTmForKf($order = Criteria::ASC) Order by the tm_for_KF column
 * @method MatrixQuery orderByLmax($order = Criteria::ASC) Order by the LMax column
 * @method MatrixQuery orderByLmaxType($order = Criteria::ASC) Order by the LMax_type column
 * @method MatrixQuery orderByLinf($order = Criteria::ASC) Order by the Linf column
 * @method MatrixQuery orderByLinfType($order = Criteria::ASC) Order by the Linf_type column
 * @method MatrixQuery orderByLinf1st($order = Criteria::ASC) Order by the Linf_1st column
 * @method MatrixQuery orderByLinf2nd($order = Criteria::ASC) Order by the Linf_2nd column
 * @method MatrixQuery orderByLinfComment($order = Criteria::ASC) Order by the Linf_comment column
 * @method MatrixQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method MatrixQuery orderByKfComment($order = Criteria::ASC) Order by the KF_comment column
 * @method MatrixQuery orderByPhiprime($order = Criteria::ASC) Order by the PhiPrime column
 * @method MatrixQuery orderByTo($order = Criteria::ASC) Order by the to column
 * @method MatrixQuery orderByMeanTemp($order = Criteria::ASC) Order by the mean_temp column
 * @method MatrixQuery orderByM($order = Criteria::ASC) Order by the M column
 * @method MatrixQuery orderByMSe1st($order = Criteria::ASC) Order by the M_se_1st column
 * @method MatrixQuery orderByMSe2nd($order = Criteria::ASC) Order by the M_se_2nd column
 * @method MatrixQuery orderByMComment($order = Criteria::ASC) Order by the M_comment column
 * @method MatrixQuery orderByLifeSpan($order = Criteria::ASC) Order by the Life_span column
 * @method MatrixQuery orderByLifeSpan1st($order = Criteria::ASC) Order by the Life_span_1st column
 * @method MatrixQuery orderByLifeSpan2nd($order = Criteria::ASC) Order by the Life_span_2nd column
 * @method MatrixQuery orderByGenerationTime($order = Criteria::ASC) Order by the Generation_time column
 * @method MatrixQuery orderByGenTime1st($order = Criteria::ASC) Order by the Gen_time_1st column
 * @method MatrixQuery orderByGenTime2nd($order = Criteria::ASC) Order by the Gen_time_2nd column
 * @method MatrixQuery orderByTm($order = Criteria::ASC) Order by the tm column
 * @method MatrixQuery orderByTm1st($order = Criteria::ASC) Order by the tm_1st column
 * @method MatrixQuery orderByTm2nd($order = Criteria::ASC) Order by the tm_2nd column
 * @method MatrixQuery orderByLm($order = Criteria::ASC) Order by the Lm column
 * @method MatrixQuery orderByLmSe1st($order = Criteria::ASC) Order by the Lm_se_1st column
 * @method MatrixQuery orderByLmSe2nd($order = Criteria::ASC) Order by the Lm_se_2nd column
 * @method MatrixQuery orderByLmType($order = Criteria::ASC) Order by the Lm_type column
 * @method MatrixQuery orderByLopt($order = Criteria::ASC) Order by the Lopt column
 * @method MatrixQuery orderByLoptSe1st($order = Criteria::ASC) Order by the Lopt_se_1st column
 * @method MatrixQuery orderByLoptSe2nd($order = Criteria::ASC) Order by the Lopt_se_2nd column
 * @method MatrixQuery orderByLoptType($order = Criteria::ASC) Order by the Lopt_type column
 * @method MatrixQuery orderByLoptText($order = Criteria::ASC) Order by the Lopt_text column
 * @method MatrixQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method MatrixQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method MatrixQuery orderByLwLength($order = Criteria::ASC) Order by the LW_length column
 * @method MatrixQuery orderByLwLengthType($order = Criteria::ASC) Order by the LW_length_type column
 * @method MatrixQuery orderByW($order = Criteria::ASC) Order by the W column
 * @method MatrixQuery orderByWType($order = Criteria::ASC) Order by the W_type column
 * @method MatrixQuery orderByNitrogenproteinWeight($order = Criteria::ASC) Order by the NitrogenProtein_weight column
 * @method MatrixQuery orderByNitrogenproteinWeightType($order = Criteria::ASC) Order by the NitrogenProtein_weight_type column
 * @method MatrixQuery orderByNitrogen($order = Criteria::ASC) Order by the nitrogen column
 * @method MatrixQuery orderByProtein($order = Criteria::ASC) Order by the protein column
 * @method MatrixQuery orderByReproductiveGuild($order = Criteria::ASC) Order by the Reproductive_guild column
 * @method MatrixQuery orderByFecundity($order = Criteria::ASC) Order by the Fecundity column
 * @method MatrixQuery orderByFecundity1st($order = Criteria::ASC) Order by the Fecundity_1st column
 * @method MatrixQuery orderByFecundity2nd($order = Criteria::ASC) Order by the Fecundity_2nd column
 * @method MatrixQuery orderByZzzfecundityText($order = Criteria::ASC) Order by the zzzFecundity_text column
 * @method MatrixQuery orderByEmsy($order = Criteria::ASC) Order by the Emsy column
 * @method MatrixQuery orderByEopt($order = Criteria::ASC) Order by the Eopt column
 * @method MatrixQuery orderByFmsy($order = Criteria::ASC) Order by the Fmsy column
 * @method MatrixQuery orderByFopt($order = Criteria::ASC) Order by the Fopt column
 * @method MatrixQuery orderByLc($order = Criteria::ASC) Order by the Lc column
 * @method MatrixQuery orderByLcType($order = Criteria::ASC) Order by the Lc_type column
 * @method MatrixQuery orderByE($order = Criteria::ASC) Order by the E column
 * @method MatrixQuery orderByYr($order = Criteria::ASC) Order by the YR column
 * @method MatrixQuery orderByResilience($order = Criteria::ASC) Order by the Resilience column
 * @method MatrixQuery orderByRm($order = Criteria::ASC) Order by the rm column
 * @method MatrixQuery orderByLr($order = Criteria::ASC) Order by the Lr column
 * @method MatrixQuery orderByLrType($order = Criteria::ASC) Order by the Lr_type column
 * @method MatrixQuery orderByMainFood($order = Criteria::ASC) Order by the main_food column
 * @method MatrixQuery orderByTrophicLevel($order = Criteria::ASC) Order by the trophic_level column
 * @method MatrixQuery orderByQb($order = Criteria::ASC) Order by the QB column
 * @method MatrixQuery orderByQbText($order = Criteria::ASC) Order by the QB_text column
 * @method MatrixQuery orderByQbWinf($order = Criteria::ASC) Order by the QB_Winf column
 * @method MatrixQuery orderByQbTemp($order = Criteria::ASC) Order by the QB_temp column
 * @method MatrixQuery orderByQbA($order = Criteria::ASC) Order by the QB_A column
 * @method MatrixQuery orderByWithGrowth($order = Criteria::ASC) Order by the with_growth column
 * @method MatrixQuery orderByWithMaxAgeSize($order = Criteria::ASC) Order by the with_max_age_size column
 * @method MatrixQuery orderByWithLw($order = Criteria::ASC) Order by the with_lw column
 * @method MatrixQuery orderByWithReproduction($order = Criteria::ASC) Order by the with_reproduction column
 * @method MatrixQuery orderByWithDiet($order = Criteria::ASC) Order by the with_diet column
 * @method MatrixQuery orderByWithFoodConsumption($order = Criteria::ASC) Order by the with_food_consumption column
 * @method MatrixQuery orderByWithFood($order = Criteria::ASC) Order by the with_food column
 * @method MatrixQuery orderByWithMaturity($order = Criteria::ASC) Order by the with_maturity column
 * @method MatrixQuery orderByWithSpawning($order = Criteria::ASC) Order by the with_spawning column
 * @method MatrixQuery orderByStockcode($order = Criteria::ASC) Order by the stockcode column
 * @method MatrixQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MatrixQuery groupById() Group by the ID column
 * @method MatrixQuery groupBySpeccode() Group by the SpecCode column
 * @method MatrixQuery groupByFamcode() Group by the FamCode column
 * @method MatrixQuery groupByKfType() Group by the KF_type column
 * @method MatrixQuery groupByTmForKf() Group by the tm_for_KF column
 * @method MatrixQuery groupByLmax() Group by the LMax column
 * @method MatrixQuery groupByLmaxType() Group by the LMax_type column
 * @method MatrixQuery groupByLinf() Group by the Linf column
 * @method MatrixQuery groupByLinfType() Group by the Linf_type column
 * @method MatrixQuery groupByLinf1st() Group by the Linf_1st column
 * @method MatrixQuery groupByLinf2nd() Group by the Linf_2nd column
 * @method MatrixQuery groupByLinfComment() Group by the Linf_comment column
 * @method MatrixQuery groupByK() Group by the K column
 * @method MatrixQuery groupByKfComment() Group by the KF_comment column
 * @method MatrixQuery groupByPhiprime() Group by the PhiPrime column
 * @method MatrixQuery groupByTo() Group by the to column
 * @method MatrixQuery groupByMeanTemp() Group by the mean_temp column
 * @method MatrixQuery groupByM() Group by the M column
 * @method MatrixQuery groupByMSe1st() Group by the M_se_1st column
 * @method MatrixQuery groupByMSe2nd() Group by the M_se_2nd column
 * @method MatrixQuery groupByMComment() Group by the M_comment column
 * @method MatrixQuery groupByLifeSpan() Group by the Life_span column
 * @method MatrixQuery groupByLifeSpan1st() Group by the Life_span_1st column
 * @method MatrixQuery groupByLifeSpan2nd() Group by the Life_span_2nd column
 * @method MatrixQuery groupByGenerationTime() Group by the Generation_time column
 * @method MatrixQuery groupByGenTime1st() Group by the Gen_time_1st column
 * @method MatrixQuery groupByGenTime2nd() Group by the Gen_time_2nd column
 * @method MatrixQuery groupByTm() Group by the tm column
 * @method MatrixQuery groupByTm1st() Group by the tm_1st column
 * @method MatrixQuery groupByTm2nd() Group by the tm_2nd column
 * @method MatrixQuery groupByLm() Group by the Lm column
 * @method MatrixQuery groupByLmSe1st() Group by the Lm_se_1st column
 * @method MatrixQuery groupByLmSe2nd() Group by the Lm_se_2nd column
 * @method MatrixQuery groupByLmType() Group by the Lm_type column
 * @method MatrixQuery groupByLopt() Group by the Lopt column
 * @method MatrixQuery groupByLoptSe1st() Group by the Lopt_se_1st column
 * @method MatrixQuery groupByLoptSe2nd() Group by the Lopt_se_2nd column
 * @method MatrixQuery groupByLoptType() Group by the Lopt_type column
 * @method MatrixQuery groupByLoptText() Group by the Lopt_text column
 * @method MatrixQuery groupByA() Group by the a column
 * @method MatrixQuery groupByB() Group by the b column
 * @method MatrixQuery groupByLwLength() Group by the LW_length column
 * @method MatrixQuery groupByLwLengthType() Group by the LW_length_type column
 * @method MatrixQuery groupByW() Group by the W column
 * @method MatrixQuery groupByWType() Group by the W_type column
 * @method MatrixQuery groupByNitrogenproteinWeight() Group by the NitrogenProtein_weight column
 * @method MatrixQuery groupByNitrogenproteinWeightType() Group by the NitrogenProtein_weight_type column
 * @method MatrixQuery groupByNitrogen() Group by the nitrogen column
 * @method MatrixQuery groupByProtein() Group by the protein column
 * @method MatrixQuery groupByReproductiveGuild() Group by the Reproductive_guild column
 * @method MatrixQuery groupByFecundity() Group by the Fecundity column
 * @method MatrixQuery groupByFecundity1st() Group by the Fecundity_1st column
 * @method MatrixQuery groupByFecundity2nd() Group by the Fecundity_2nd column
 * @method MatrixQuery groupByZzzfecundityText() Group by the zzzFecundity_text column
 * @method MatrixQuery groupByEmsy() Group by the Emsy column
 * @method MatrixQuery groupByEopt() Group by the Eopt column
 * @method MatrixQuery groupByFmsy() Group by the Fmsy column
 * @method MatrixQuery groupByFopt() Group by the Fopt column
 * @method MatrixQuery groupByLc() Group by the Lc column
 * @method MatrixQuery groupByLcType() Group by the Lc_type column
 * @method MatrixQuery groupByE() Group by the E column
 * @method MatrixQuery groupByYr() Group by the YR column
 * @method MatrixQuery groupByResilience() Group by the Resilience column
 * @method MatrixQuery groupByRm() Group by the rm column
 * @method MatrixQuery groupByLr() Group by the Lr column
 * @method MatrixQuery groupByLrType() Group by the Lr_type column
 * @method MatrixQuery groupByMainFood() Group by the main_food column
 * @method MatrixQuery groupByTrophicLevel() Group by the trophic_level column
 * @method MatrixQuery groupByQb() Group by the QB column
 * @method MatrixQuery groupByQbText() Group by the QB_text column
 * @method MatrixQuery groupByQbWinf() Group by the QB_Winf column
 * @method MatrixQuery groupByQbTemp() Group by the QB_temp column
 * @method MatrixQuery groupByQbA() Group by the QB_A column
 * @method MatrixQuery groupByWithGrowth() Group by the with_growth column
 * @method MatrixQuery groupByWithMaxAgeSize() Group by the with_max_age_size column
 * @method MatrixQuery groupByWithLw() Group by the with_lw column
 * @method MatrixQuery groupByWithReproduction() Group by the with_reproduction column
 * @method MatrixQuery groupByWithDiet() Group by the with_diet column
 * @method MatrixQuery groupByWithFoodConsumption() Group by the with_food_consumption column
 * @method MatrixQuery groupByWithFood() Group by the with_food column
 * @method MatrixQuery groupByWithMaturity() Group by the with_maturity column
 * @method MatrixQuery groupByWithSpawning() Group by the with_spawning column
 * @method MatrixQuery groupByStockcode() Group by the stockcode column
 * @method MatrixQuery groupByTs() Group by the TS column
 *
 * @method MatrixQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MatrixQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MatrixQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Matrix findOne(PropelPDO $con = null) Return the first Matrix matching the query
 * @method Matrix findOneOrCreate(PropelPDO $con = null) Return the first Matrix matching the query, or a new Matrix object populated from the query conditions when no match is found
 *
 * @method Matrix findOneBySpeccode(int $SpecCode) Return the first Matrix filtered by the SpecCode column
 * @method Matrix findOneByFamcode(int $FamCode) Return the first Matrix filtered by the FamCode column
 * @method Matrix findOneByKfType(int $KF_type) Return the first Matrix filtered by the KF_type column
 * @method Matrix findOneByTmForKf(double $tm_for_KF) Return the first Matrix filtered by the tm_for_KF column
 * @method Matrix findOneByLmax(double $LMax) Return the first Matrix filtered by the LMax column
 * @method Matrix findOneByLmaxType(string $LMax_type) Return the first Matrix filtered by the LMax_type column
 * @method Matrix findOneByLinf(double $Linf) Return the first Matrix filtered by the Linf column
 * @method Matrix findOneByLinfType(string $Linf_type) Return the first Matrix filtered by the Linf_type column
 * @method Matrix findOneByLinf1st(double $Linf_1st) Return the first Matrix filtered by the Linf_1st column
 * @method Matrix findOneByLinf2nd(double $Linf_2nd) Return the first Matrix filtered by the Linf_2nd column
 * @method Matrix findOneByLinfComment(string $Linf_comment) Return the first Matrix filtered by the Linf_comment column
 * @method Matrix findOneByK(double $K) Return the first Matrix filtered by the K column
 * @method Matrix findOneByKfComment(string $KF_comment) Return the first Matrix filtered by the KF_comment column
 * @method Matrix findOneByPhiprime(double $PhiPrime) Return the first Matrix filtered by the PhiPrime column
 * @method Matrix findOneByTo(double $to) Return the first Matrix filtered by the to column
 * @method Matrix findOneByMeanTemp(double $mean_temp) Return the first Matrix filtered by the mean_temp column
 * @method Matrix findOneByM(double $M) Return the first Matrix filtered by the M column
 * @method Matrix findOneByMSe1st(double $M_se_1st) Return the first Matrix filtered by the M_se_1st column
 * @method Matrix findOneByMSe2nd(double $M_se_2nd) Return the first Matrix filtered by the M_se_2nd column
 * @method Matrix findOneByMComment(string $M_comment) Return the first Matrix filtered by the M_comment column
 * @method Matrix findOneByLifeSpan(double $Life_span) Return the first Matrix filtered by the Life_span column
 * @method Matrix findOneByLifeSpan1st(double $Life_span_1st) Return the first Matrix filtered by the Life_span_1st column
 * @method Matrix findOneByLifeSpan2nd(double $Life_span_2nd) Return the first Matrix filtered by the Life_span_2nd column
 * @method Matrix findOneByGenerationTime(double $Generation_time) Return the first Matrix filtered by the Generation_time column
 * @method Matrix findOneByGenTime1st(double $Gen_time_1st) Return the first Matrix filtered by the Gen_time_1st column
 * @method Matrix findOneByGenTime2nd(double $Gen_time_2nd) Return the first Matrix filtered by the Gen_time_2nd column
 * @method Matrix findOneByTm(double $tm) Return the first Matrix filtered by the tm column
 * @method Matrix findOneByTm1st(double $tm_1st) Return the first Matrix filtered by the tm_1st column
 * @method Matrix findOneByTm2nd(double $tm_2nd) Return the first Matrix filtered by the tm_2nd column
 * @method Matrix findOneByLm(double $Lm) Return the first Matrix filtered by the Lm column
 * @method Matrix findOneByLmSe1st(double $Lm_se_1st) Return the first Matrix filtered by the Lm_se_1st column
 * @method Matrix findOneByLmSe2nd(double $Lm_se_2nd) Return the first Matrix filtered by the Lm_se_2nd column
 * @method Matrix findOneByLmType(string $Lm_type) Return the first Matrix filtered by the Lm_type column
 * @method Matrix findOneByLopt(double $Lopt) Return the first Matrix filtered by the Lopt column
 * @method Matrix findOneByLoptSe1st(double $Lopt_se_1st) Return the first Matrix filtered by the Lopt_se_1st column
 * @method Matrix findOneByLoptSe2nd(double $Lopt_se_2nd) Return the first Matrix filtered by the Lopt_se_2nd column
 * @method Matrix findOneByLoptType(string $Lopt_type) Return the first Matrix filtered by the Lopt_type column
 * @method Matrix findOneByLoptText(string $Lopt_text) Return the first Matrix filtered by the Lopt_text column
 * @method Matrix findOneByA(double $a) Return the first Matrix filtered by the a column
 * @method Matrix findOneByB(double $b) Return the first Matrix filtered by the b column
 * @method Matrix findOneByLwLength(double $LW_length) Return the first Matrix filtered by the LW_length column
 * @method Matrix findOneByLwLengthType(string $LW_length_type) Return the first Matrix filtered by the LW_length_type column
 * @method Matrix findOneByW(double $W) Return the first Matrix filtered by the W column
 * @method Matrix findOneByWType(string $W_type) Return the first Matrix filtered by the W_type column
 * @method Matrix findOneByNitrogenproteinWeight(double $NitrogenProtein_weight) Return the first Matrix filtered by the NitrogenProtein_weight column
 * @method Matrix findOneByNitrogenproteinWeightType(string $NitrogenProtein_weight_type) Return the first Matrix filtered by the NitrogenProtein_weight_type column
 * @method Matrix findOneByNitrogen(double $nitrogen) Return the first Matrix filtered by the nitrogen column
 * @method Matrix findOneByProtein(double $protein) Return the first Matrix filtered by the protein column
 * @method Matrix findOneByReproductiveGuild(string $Reproductive_guild) Return the first Matrix filtered by the Reproductive_guild column
 * @method Matrix findOneByFecundity(double $Fecundity) Return the first Matrix filtered by the Fecundity column
 * @method Matrix findOneByFecundity1st(string $Fecundity_1st) Return the first Matrix filtered by the Fecundity_1st column
 * @method Matrix findOneByFecundity2nd(string $Fecundity_2nd) Return the first Matrix filtered by the Fecundity_2nd column
 * @method Matrix findOneByZzzfecundityText(string $zzzFecundity_text) Return the first Matrix filtered by the zzzFecundity_text column
 * @method Matrix findOneByEmsy(double $Emsy) Return the first Matrix filtered by the Emsy column
 * @method Matrix findOneByEopt(double $Eopt) Return the first Matrix filtered by the Eopt column
 * @method Matrix findOneByFmsy(double $Fmsy) Return the first Matrix filtered by the Fmsy column
 * @method Matrix findOneByFopt(double $Fopt) Return the first Matrix filtered by the Fopt column
 * @method Matrix findOneByLc(double $Lc) Return the first Matrix filtered by the Lc column
 * @method Matrix findOneByLcType(string $Lc_type) Return the first Matrix filtered by the Lc_type column
 * @method Matrix findOneByE(double $E) Return the first Matrix filtered by the E column
 * @method Matrix findOneByYr(double $YR) Return the first Matrix filtered by the YR column
 * @method Matrix findOneByResilience(string $Resilience) Return the first Matrix filtered by the Resilience column
 * @method Matrix findOneByRm(double $rm) Return the first Matrix filtered by the rm column
 * @method Matrix findOneByLr(double $Lr) Return the first Matrix filtered by the Lr column
 * @method Matrix findOneByLrType(string $Lr_type) Return the first Matrix filtered by the Lr_type column
 * @method Matrix findOneByMainFood(string $main_food) Return the first Matrix filtered by the main_food column
 * @method Matrix findOneByTrophicLevel(string $trophic_level) Return the first Matrix filtered by the trophic_level column
 * @method Matrix findOneByQb(double $QB) Return the first Matrix filtered by the QB column
 * @method Matrix findOneByQbText(string $QB_text) Return the first Matrix filtered by the QB_text column
 * @method Matrix findOneByQbWinf(double $QB_Winf) Return the first Matrix filtered by the QB_Winf column
 * @method Matrix findOneByQbTemp(double $QB_temp) Return the first Matrix filtered by the QB_temp column
 * @method Matrix findOneByQbA(double $QB_A) Return the first Matrix filtered by the QB_A column
 * @method Matrix findOneByWithGrowth(string $with_growth) Return the first Matrix filtered by the with_growth column
 * @method Matrix findOneByWithMaxAgeSize(string $with_max_age_size) Return the first Matrix filtered by the with_max_age_size column
 * @method Matrix findOneByWithLw(string $with_lw) Return the first Matrix filtered by the with_lw column
 * @method Matrix findOneByWithReproduction(string $with_reproduction) Return the first Matrix filtered by the with_reproduction column
 * @method Matrix findOneByWithDiet(string $with_diet) Return the first Matrix filtered by the with_diet column
 * @method Matrix findOneByWithFoodConsumption(string $with_food_consumption) Return the first Matrix filtered by the with_food_consumption column
 * @method Matrix findOneByWithFood(string $with_food) Return the first Matrix filtered by the with_food column
 * @method Matrix findOneByWithMaturity(string $with_maturity) Return the first Matrix filtered by the with_maturity column
 * @method Matrix findOneByWithSpawning(string $with_spawning) Return the first Matrix filtered by the with_spawning column
 * @method Matrix findOneByStockcode(int $stockcode) Return the first Matrix filtered by the stockcode column
 * @method Matrix findOneByTs(string $TS) Return the first Matrix filtered by the TS column
 *
 * @method array findById(int $ID) Return Matrix objects filtered by the ID column
 * @method array findBySpeccode(int $SpecCode) Return Matrix objects filtered by the SpecCode column
 * @method array findByFamcode(int $FamCode) Return Matrix objects filtered by the FamCode column
 * @method array findByKfType(int $KF_type) Return Matrix objects filtered by the KF_type column
 * @method array findByTmForKf(double $tm_for_KF) Return Matrix objects filtered by the tm_for_KF column
 * @method array findByLmax(double $LMax) Return Matrix objects filtered by the LMax column
 * @method array findByLmaxType(string $LMax_type) Return Matrix objects filtered by the LMax_type column
 * @method array findByLinf(double $Linf) Return Matrix objects filtered by the Linf column
 * @method array findByLinfType(string $Linf_type) Return Matrix objects filtered by the Linf_type column
 * @method array findByLinf1st(double $Linf_1st) Return Matrix objects filtered by the Linf_1st column
 * @method array findByLinf2nd(double $Linf_2nd) Return Matrix objects filtered by the Linf_2nd column
 * @method array findByLinfComment(string $Linf_comment) Return Matrix objects filtered by the Linf_comment column
 * @method array findByK(double $K) Return Matrix objects filtered by the K column
 * @method array findByKfComment(string $KF_comment) Return Matrix objects filtered by the KF_comment column
 * @method array findByPhiprime(double $PhiPrime) Return Matrix objects filtered by the PhiPrime column
 * @method array findByTo(double $to) Return Matrix objects filtered by the to column
 * @method array findByMeanTemp(double $mean_temp) Return Matrix objects filtered by the mean_temp column
 * @method array findByM(double $M) Return Matrix objects filtered by the M column
 * @method array findByMSe1st(double $M_se_1st) Return Matrix objects filtered by the M_se_1st column
 * @method array findByMSe2nd(double $M_se_2nd) Return Matrix objects filtered by the M_se_2nd column
 * @method array findByMComment(string $M_comment) Return Matrix objects filtered by the M_comment column
 * @method array findByLifeSpan(double $Life_span) Return Matrix objects filtered by the Life_span column
 * @method array findByLifeSpan1st(double $Life_span_1st) Return Matrix objects filtered by the Life_span_1st column
 * @method array findByLifeSpan2nd(double $Life_span_2nd) Return Matrix objects filtered by the Life_span_2nd column
 * @method array findByGenerationTime(double $Generation_time) Return Matrix objects filtered by the Generation_time column
 * @method array findByGenTime1st(double $Gen_time_1st) Return Matrix objects filtered by the Gen_time_1st column
 * @method array findByGenTime2nd(double $Gen_time_2nd) Return Matrix objects filtered by the Gen_time_2nd column
 * @method array findByTm(double $tm) Return Matrix objects filtered by the tm column
 * @method array findByTm1st(double $tm_1st) Return Matrix objects filtered by the tm_1st column
 * @method array findByTm2nd(double $tm_2nd) Return Matrix objects filtered by the tm_2nd column
 * @method array findByLm(double $Lm) Return Matrix objects filtered by the Lm column
 * @method array findByLmSe1st(double $Lm_se_1st) Return Matrix objects filtered by the Lm_se_1st column
 * @method array findByLmSe2nd(double $Lm_se_2nd) Return Matrix objects filtered by the Lm_se_2nd column
 * @method array findByLmType(string $Lm_type) Return Matrix objects filtered by the Lm_type column
 * @method array findByLopt(double $Lopt) Return Matrix objects filtered by the Lopt column
 * @method array findByLoptSe1st(double $Lopt_se_1st) Return Matrix objects filtered by the Lopt_se_1st column
 * @method array findByLoptSe2nd(double $Lopt_se_2nd) Return Matrix objects filtered by the Lopt_se_2nd column
 * @method array findByLoptType(string $Lopt_type) Return Matrix objects filtered by the Lopt_type column
 * @method array findByLoptText(string $Lopt_text) Return Matrix objects filtered by the Lopt_text column
 * @method array findByA(double $a) Return Matrix objects filtered by the a column
 * @method array findByB(double $b) Return Matrix objects filtered by the b column
 * @method array findByLwLength(double $LW_length) Return Matrix objects filtered by the LW_length column
 * @method array findByLwLengthType(string $LW_length_type) Return Matrix objects filtered by the LW_length_type column
 * @method array findByW(double $W) Return Matrix objects filtered by the W column
 * @method array findByWType(string $W_type) Return Matrix objects filtered by the W_type column
 * @method array findByNitrogenproteinWeight(double $NitrogenProtein_weight) Return Matrix objects filtered by the NitrogenProtein_weight column
 * @method array findByNitrogenproteinWeightType(string $NitrogenProtein_weight_type) Return Matrix objects filtered by the NitrogenProtein_weight_type column
 * @method array findByNitrogen(double $nitrogen) Return Matrix objects filtered by the nitrogen column
 * @method array findByProtein(double $protein) Return Matrix objects filtered by the protein column
 * @method array findByReproductiveGuild(string $Reproductive_guild) Return Matrix objects filtered by the Reproductive_guild column
 * @method array findByFecundity(double $Fecundity) Return Matrix objects filtered by the Fecundity column
 * @method array findByFecundity1st(string $Fecundity_1st) Return Matrix objects filtered by the Fecundity_1st column
 * @method array findByFecundity2nd(string $Fecundity_2nd) Return Matrix objects filtered by the Fecundity_2nd column
 * @method array findByZzzfecundityText(string $zzzFecundity_text) Return Matrix objects filtered by the zzzFecundity_text column
 * @method array findByEmsy(double $Emsy) Return Matrix objects filtered by the Emsy column
 * @method array findByEopt(double $Eopt) Return Matrix objects filtered by the Eopt column
 * @method array findByFmsy(double $Fmsy) Return Matrix objects filtered by the Fmsy column
 * @method array findByFopt(double $Fopt) Return Matrix objects filtered by the Fopt column
 * @method array findByLc(double $Lc) Return Matrix objects filtered by the Lc column
 * @method array findByLcType(string $Lc_type) Return Matrix objects filtered by the Lc_type column
 * @method array findByE(double $E) Return Matrix objects filtered by the E column
 * @method array findByYr(double $YR) Return Matrix objects filtered by the YR column
 * @method array findByResilience(string $Resilience) Return Matrix objects filtered by the Resilience column
 * @method array findByRm(double $rm) Return Matrix objects filtered by the rm column
 * @method array findByLr(double $Lr) Return Matrix objects filtered by the Lr column
 * @method array findByLrType(string $Lr_type) Return Matrix objects filtered by the Lr_type column
 * @method array findByMainFood(string $main_food) Return Matrix objects filtered by the main_food column
 * @method array findByTrophicLevel(string $trophic_level) Return Matrix objects filtered by the trophic_level column
 * @method array findByQb(double $QB) Return Matrix objects filtered by the QB column
 * @method array findByQbText(string $QB_text) Return Matrix objects filtered by the QB_text column
 * @method array findByQbWinf(double $QB_Winf) Return Matrix objects filtered by the QB_Winf column
 * @method array findByQbTemp(double $QB_temp) Return Matrix objects filtered by the QB_temp column
 * @method array findByQbA(double $QB_A) Return Matrix objects filtered by the QB_A column
 * @method array findByWithGrowth(string $with_growth) Return Matrix objects filtered by the with_growth column
 * @method array findByWithMaxAgeSize(string $with_max_age_size) Return Matrix objects filtered by the with_max_age_size column
 * @method array findByWithLw(string $with_lw) Return Matrix objects filtered by the with_lw column
 * @method array findByWithReproduction(string $with_reproduction) Return Matrix objects filtered by the with_reproduction column
 * @method array findByWithDiet(string $with_diet) Return Matrix objects filtered by the with_diet column
 * @method array findByWithFoodConsumption(string $with_food_consumption) Return Matrix objects filtered by the with_food_consumption column
 * @method array findByWithFood(string $with_food) Return Matrix objects filtered by the with_food column
 * @method array findByWithMaturity(string $with_maturity) Return Matrix objects filtered by the with_maturity column
 * @method array findByWithSpawning(string $with_spawning) Return Matrix objects filtered by the with_spawning column
 * @method array findByStockcode(int $stockcode) Return Matrix objects filtered by the stockcode column
 * @method array findByTs(string $TS) Return Matrix objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMatrixQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMatrixQuery object.
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
            $modelName = 'Matrix';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MatrixQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MatrixQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MatrixQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MatrixQuery) {
            return $criteria;
        }
        $query = new MatrixQuery(null, null, $modelAlias);

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
     * @return   Matrix|Matrix[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MatrixPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MatrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Matrix A model object, or null if the key is not found
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
     * @return                 Matrix A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `SpecCode`, `FamCode`, `KF_type`, `tm_for_KF`, `LMax`, `LMax_type`, `Linf`, `Linf_type`, `Linf_1st`, `Linf_2nd`, `Linf_comment`, `K`, `KF_comment`, `PhiPrime`, `to`, `mean_temp`, `M`, `M_se_1st`, `M_se_2nd`, `M_comment`, `Life_span`, `Life_span_1st`, `Life_span_2nd`, `Generation_time`, `Gen_time_1st`, `Gen_time_2nd`, `tm`, `tm_1st`, `tm_2nd`, `Lm`, `Lm_se_1st`, `Lm_se_2nd`, `Lm_type`, `Lopt`, `Lopt_se_1st`, `Lopt_se_2nd`, `Lopt_type`, `Lopt_text`, `a`, `b`, `LW_length`, `LW_length_type`, `W`, `W_type`, `NitrogenProtein_weight`, `NitrogenProtein_weight_type`, `nitrogen`, `protein`, `Reproductive_guild`, `Fecundity`, `Fecundity_1st`, `Fecundity_2nd`, `zzzFecundity_text`, `Emsy`, `Eopt`, `Fmsy`, `Fopt`, `Lc`, `Lc_type`, `E`, `YR`, `Resilience`, `rm`, `Lr`, `Lr_type`, `main_food`, `trophic_level`, `QB`, `QB_text`, `QB_Winf`, `QB_temp`, `QB_A`, `with_growth`, `with_max_age_size`, `with_lw`, `with_reproduction`, `with_diet`, `with_food_consumption`, `with_food`, `with_maturity`, `with_spawning`, `stockcode`, `TS` FROM `matrix` WHERE `ID` = :p0';
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
            $obj = new Matrix();
            $obj->hydrate($row);
            MatrixPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Matrix|Matrix[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Matrix[]|mixed the list of results, formatted by the current formatter
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MatrixPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MatrixPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(MatrixPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(MatrixPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::ID, $id, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MatrixPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MatrixPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::SPECCODE, $speccode, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(MatrixPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(MatrixPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the KF_type column
     *
     * Example usage:
     * <code>
     * $query->filterByKfType(1234); // WHERE KF_type = 1234
     * $query->filterByKfType(array(12, 34)); // WHERE KF_type IN (12, 34)
     * $query->filterByKfType(array('min' => 12)); // WHERE KF_type >= 12
     * $query->filterByKfType(array('max' => 12)); // WHERE KF_type <= 12
     * </code>
     *
     * @param     mixed $kfType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByKfType($kfType = null, $comparison = null)
    {
        if (is_array($kfType)) {
            $useMinMax = false;
            if (isset($kfType['min'])) {
                $this->addUsingAlias(MatrixPeer::KF_TYPE, $kfType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kfType['max'])) {
                $this->addUsingAlias(MatrixPeer::KF_TYPE, $kfType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::KF_TYPE, $kfType, $comparison);
    }

    /**
     * Filter the query on the tm_for_KF column
     *
     * Example usage:
     * <code>
     * $query->filterByTmForKf(1234); // WHERE tm_for_KF = 1234
     * $query->filterByTmForKf(array(12, 34)); // WHERE tm_for_KF IN (12, 34)
     * $query->filterByTmForKf(array('min' => 12)); // WHERE tm_for_KF >= 12
     * $query->filterByTmForKf(array('max' => 12)); // WHERE tm_for_KF <= 12
     * </code>
     *
     * @param     mixed $tmForKf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTmForKf($tmForKf = null, $comparison = null)
    {
        if (is_array($tmForKf)) {
            $useMinMax = false;
            if (isset($tmForKf['min'])) {
                $this->addUsingAlias(MatrixPeer::TM_FOR_KF, $tmForKf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tmForKf['max'])) {
                $this->addUsingAlias(MatrixPeer::TM_FOR_KF, $tmForKf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TM_FOR_KF, $tmForKf, $comparison);
    }

    /**
     * Filter the query on the LMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLmax(1234); // WHERE LMax = 1234
     * $query->filterByLmax(array(12, 34)); // WHERE LMax IN (12, 34)
     * $query->filterByLmax(array('min' => 12)); // WHERE LMax >= 12
     * $query->filterByLmax(array('max' => 12)); // WHERE LMax <= 12
     * </code>
     *
     * @param     mixed $lmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLmax($lmax = null, $comparison = null)
    {
        if (is_array($lmax)) {
            $useMinMax = false;
            if (isset($lmax['min'])) {
                $this->addUsingAlias(MatrixPeer::LMAX, $lmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmax['max'])) {
                $this->addUsingAlias(MatrixPeer::LMAX, $lmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LMAX, $lmax, $comparison);
    }

    /**
     * Filter the query on the LMax_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLmaxType('fooValue');   // WHERE LMax_type = 'fooValue'
     * $query->filterByLmaxType('%fooValue%'); // WHERE LMax_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lmaxType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLmaxType($lmaxType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lmaxType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lmaxType)) {
                $lmaxType = str_replace('*', '%', $lmaxType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LMAX_TYPE, $lmaxType, $comparison);
    }

    /**
     * Filter the query on the Linf column
     *
     * Example usage:
     * <code>
     * $query->filterByLinf(1234); // WHERE Linf = 1234
     * $query->filterByLinf(array(12, 34)); // WHERE Linf IN (12, 34)
     * $query->filterByLinf(array('min' => 12)); // WHERE Linf >= 12
     * $query->filterByLinf(array('max' => 12)); // WHERE Linf <= 12
     * </code>
     *
     * @param     mixed $linf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLinf($linf = null, $comparison = null)
    {
        if (is_array($linf)) {
            $useMinMax = false;
            if (isset($linf['min'])) {
                $this->addUsingAlias(MatrixPeer::LINF, $linf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($linf['max'])) {
                $this->addUsingAlias(MatrixPeer::LINF, $linf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LINF, $linf, $comparison);
    }

    /**
     * Filter the query on the Linf_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLinfType('fooValue');   // WHERE Linf_type = 'fooValue'
     * $query->filterByLinfType('%fooValue%'); // WHERE Linf_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linfType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLinfType($linfType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linfType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $linfType)) {
                $linfType = str_replace('*', '%', $linfType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LINF_TYPE, $linfType, $comparison);
    }

    /**
     * Filter the query on the Linf_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByLinf1st(1234); // WHERE Linf_1st = 1234
     * $query->filterByLinf1st(array(12, 34)); // WHERE Linf_1st IN (12, 34)
     * $query->filterByLinf1st(array('min' => 12)); // WHERE Linf_1st >= 12
     * $query->filterByLinf1st(array('max' => 12)); // WHERE Linf_1st <= 12
     * </code>
     *
     * @param     mixed $linf1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLinf1st($linf1st = null, $comparison = null)
    {
        if (is_array($linf1st)) {
            $useMinMax = false;
            if (isset($linf1st['min'])) {
                $this->addUsingAlias(MatrixPeer::LINF_1ST, $linf1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($linf1st['max'])) {
                $this->addUsingAlias(MatrixPeer::LINF_1ST, $linf1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LINF_1ST, $linf1st, $comparison);
    }

    /**
     * Filter the query on the Linf_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByLinf2nd(1234); // WHERE Linf_2nd = 1234
     * $query->filterByLinf2nd(array(12, 34)); // WHERE Linf_2nd IN (12, 34)
     * $query->filterByLinf2nd(array('min' => 12)); // WHERE Linf_2nd >= 12
     * $query->filterByLinf2nd(array('max' => 12)); // WHERE Linf_2nd <= 12
     * </code>
     *
     * @param     mixed $linf2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLinf2nd($linf2nd = null, $comparison = null)
    {
        if (is_array($linf2nd)) {
            $useMinMax = false;
            if (isset($linf2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::LINF_2ND, $linf2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($linf2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::LINF_2ND, $linf2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LINF_2ND, $linf2nd, $comparison);
    }

    /**
     * Filter the query on the Linf_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByLinfComment('fooValue');   // WHERE Linf_comment = 'fooValue'
     * $query->filterByLinfComment('%fooValue%'); // WHERE Linf_comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linfComment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLinfComment($linfComment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linfComment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $linfComment)) {
                $linfComment = str_replace('*', '%', $linfComment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LINF_COMMENT, $linfComment, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(MatrixPeer::K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(MatrixPeer::K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::K, $k, $comparison);
    }

    /**
     * Filter the query on the KF_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByKfComment('fooValue');   // WHERE KF_comment = 'fooValue'
     * $query->filterByKfComment('%fooValue%'); // WHERE KF_comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kfComment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByKfComment($kfComment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kfComment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kfComment)) {
                $kfComment = str_replace('*', '%', $kfComment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::KF_COMMENT, $kfComment, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByPhiprime($phiprime = null, $comparison = null)
    {
        if (is_array($phiprime)) {
            $useMinMax = false;
            if (isset($phiprime['min'])) {
                $this->addUsingAlias(MatrixPeer::PHIPRIME, $phiprime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phiprime['max'])) {
                $this->addUsingAlias(MatrixPeer::PHIPRIME, $phiprime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::PHIPRIME, $phiprime, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTo($to = null, $comparison = null)
    {
        if (is_array($to)) {
            $useMinMax = false;
            if (isset($to['min'])) {
                $this->addUsingAlias(MatrixPeer::TO, $to['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($to['max'])) {
                $this->addUsingAlias(MatrixPeer::TO, $to['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TO, $to, $comparison);
    }

    /**
     * Filter the query on the mean_temp column
     *
     * Example usage:
     * <code>
     * $query->filterByMeanTemp(1234); // WHERE mean_temp = 1234
     * $query->filterByMeanTemp(array(12, 34)); // WHERE mean_temp IN (12, 34)
     * $query->filterByMeanTemp(array('min' => 12)); // WHERE mean_temp >= 12
     * $query->filterByMeanTemp(array('max' => 12)); // WHERE mean_temp <= 12
     * </code>
     *
     * @param     mixed $meanTemp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByMeanTemp($meanTemp = null, $comparison = null)
    {
        if (is_array($meanTemp)) {
            $useMinMax = false;
            if (isset($meanTemp['min'])) {
                $this->addUsingAlias(MatrixPeer::MEAN_TEMP, $meanTemp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meanTemp['max'])) {
                $this->addUsingAlias(MatrixPeer::MEAN_TEMP, $meanTemp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::MEAN_TEMP, $meanTemp, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByM($m = null, $comparison = null)
    {
        if (is_array($m)) {
            $useMinMax = false;
            if (isset($m['min'])) {
                $this->addUsingAlias(MatrixPeer::M, $m['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($m['max'])) {
                $this->addUsingAlias(MatrixPeer::M, $m['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::M, $m, $comparison);
    }

    /**
     * Filter the query on the M_se_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByMSe1st(1234); // WHERE M_se_1st = 1234
     * $query->filterByMSe1st(array(12, 34)); // WHERE M_se_1st IN (12, 34)
     * $query->filterByMSe1st(array('min' => 12)); // WHERE M_se_1st >= 12
     * $query->filterByMSe1st(array('max' => 12)); // WHERE M_se_1st <= 12
     * </code>
     *
     * @param     mixed $mSe1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByMSe1st($mSe1st = null, $comparison = null)
    {
        if (is_array($mSe1st)) {
            $useMinMax = false;
            if (isset($mSe1st['min'])) {
                $this->addUsingAlias(MatrixPeer::M_SE_1ST, $mSe1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mSe1st['max'])) {
                $this->addUsingAlias(MatrixPeer::M_SE_1ST, $mSe1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::M_SE_1ST, $mSe1st, $comparison);
    }

    /**
     * Filter the query on the M_se_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByMSe2nd(1234); // WHERE M_se_2nd = 1234
     * $query->filterByMSe2nd(array(12, 34)); // WHERE M_se_2nd IN (12, 34)
     * $query->filterByMSe2nd(array('min' => 12)); // WHERE M_se_2nd >= 12
     * $query->filterByMSe2nd(array('max' => 12)); // WHERE M_se_2nd <= 12
     * </code>
     *
     * @param     mixed $mSe2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByMSe2nd($mSe2nd = null, $comparison = null)
    {
        if (is_array($mSe2nd)) {
            $useMinMax = false;
            if (isset($mSe2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::M_SE_2ND, $mSe2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mSe2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::M_SE_2ND, $mSe2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::M_SE_2ND, $mSe2nd, $comparison);
    }

    /**
     * Filter the query on the M_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByMComment('fooValue');   // WHERE M_comment = 'fooValue'
     * $query->filterByMComment('%fooValue%'); // WHERE M_comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mComment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByMComment($mComment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mComment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mComment)) {
                $mComment = str_replace('*', '%', $mComment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::M_COMMENT, $mComment, $comparison);
    }

    /**
     * Filter the query on the Life_span column
     *
     * Example usage:
     * <code>
     * $query->filterByLifeSpan(1234); // WHERE Life_span = 1234
     * $query->filterByLifeSpan(array(12, 34)); // WHERE Life_span IN (12, 34)
     * $query->filterByLifeSpan(array('min' => 12)); // WHERE Life_span >= 12
     * $query->filterByLifeSpan(array('max' => 12)); // WHERE Life_span <= 12
     * </code>
     *
     * @param     mixed $lifeSpan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLifeSpan($lifeSpan = null, $comparison = null)
    {
        if (is_array($lifeSpan)) {
            $useMinMax = false;
            if (isset($lifeSpan['min'])) {
                $this->addUsingAlias(MatrixPeer::LIFE_SPAN, $lifeSpan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lifeSpan['max'])) {
                $this->addUsingAlias(MatrixPeer::LIFE_SPAN, $lifeSpan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LIFE_SPAN, $lifeSpan, $comparison);
    }

    /**
     * Filter the query on the Life_span_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByLifeSpan1st(1234); // WHERE Life_span_1st = 1234
     * $query->filterByLifeSpan1st(array(12, 34)); // WHERE Life_span_1st IN (12, 34)
     * $query->filterByLifeSpan1st(array('min' => 12)); // WHERE Life_span_1st >= 12
     * $query->filterByLifeSpan1st(array('max' => 12)); // WHERE Life_span_1st <= 12
     * </code>
     *
     * @param     mixed $lifeSpan1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLifeSpan1st($lifeSpan1st = null, $comparison = null)
    {
        if (is_array($lifeSpan1st)) {
            $useMinMax = false;
            if (isset($lifeSpan1st['min'])) {
                $this->addUsingAlias(MatrixPeer::LIFE_SPAN_1ST, $lifeSpan1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lifeSpan1st['max'])) {
                $this->addUsingAlias(MatrixPeer::LIFE_SPAN_1ST, $lifeSpan1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LIFE_SPAN_1ST, $lifeSpan1st, $comparison);
    }

    /**
     * Filter the query on the Life_span_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByLifeSpan2nd(1234); // WHERE Life_span_2nd = 1234
     * $query->filterByLifeSpan2nd(array(12, 34)); // WHERE Life_span_2nd IN (12, 34)
     * $query->filterByLifeSpan2nd(array('min' => 12)); // WHERE Life_span_2nd >= 12
     * $query->filterByLifeSpan2nd(array('max' => 12)); // WHERE Life_span_2nd <= 12
     * </code>
     *
     * @param     mixed $lifeSpan2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLifeSpan2nd($lifeSpan2nd = null, $comparison = null)
    {
        if (is_array($lifeSpan2nd)) {
            $useMinMax = false;
            if (isset($lifeSpan2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::LIFE_SPAN_2ND, $lifeSpan2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lifeSpan2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::LIFE_SPAN_2ND, $lifeSpan2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LIFE_SPAN_2ND, $lifeSpan2nd, $comparison);
    }

    /**
     * Filter the query on the Generation_time column
     *
     * Example usage:
     * <code>
     * $query->filterByGenerationTime(1234); // WHERE Generation_time = 1234
     * $query->filterByGenerationTime(array(12, 34)); // WHERE Generation_time IN (12, 34)
     * $query->filterByGenerationTime(array('min' => 12)); // WHERE Generation_time >= 12
     * $query->filterByGenerationTime(array('max' => 12)); // WHERE Generation_time <= 12
     * </code>
     *
     * @param     mixed $generationTime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByGenerationTime($generationTime = null, $comparison = null)
    {
        if (is_array($generationTime)) {
            $useMinMax = false;
            if (isset($generationTime['min'])) {
                $this->addUsingAlias(MatrixPeer::GENERATION_TIME, $generationTime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generationTime['max'])) {
                $this->addUsingAlias(MatrixPeer::GENERATION_TIME, $generationTime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::GENERATION_TIME, $generationTime, $comparison);
    }

    /**
     * Filter the query on the Gen_time_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByGenTime1st(1234); // WHERE Gen_time_1st = 1234
     * $query->filterByGenTime1st(array(12, 34)); // WHERE Gen_time_1st IN (12, 34)
     * $query->filterByGenTime1st(array('min' => 12)); // WHERE Gen_time_1st >= 12
     * $query->filterByGenTime1st(array('max' => 12)); // WHERE Gen_time_1st <= 12
     * </code>
     *
     * @param     mixed $genTime1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByGenTime1st($genTime1st = null, $comparison = null)
    {
        if (is_array($genTime1st)) {
            $useMinMax = false;
            if (isset($genTime1st['min'])) {
                $this->addUsingAlias(MatrixPeer::GEN_TIME_1ST, $genTime1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genTime1st['max'])) {
                $this->addUsingAlias(MatrixPeer::GEN_TIME_1ST, $genTime1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::GEN_TIME_1ST, $genTime1st, $comparison);
    }

    /**
     * Filter the query on the Gen_time_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByGenTime2nd(1234); // WHERE Gen_time_2nd = 1234
     * $query->filterByGenTime2nd(array(12, 34)); // WHERE Gen_time_2nd IN (12, 34)
     * $query->filterByGenTime2nd(array('min' => 12)); // WHERE Gen_time_2nd >= 12
     * $query->filterByGenTime2nd(array('max' => 12)); // WHERE Gen_time_2nd <= 12
     * </code>
     *
     * @param     mixed $genTime2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByGenTime2nd($genTime2nd = null, $comparison = null)
    {
        if (is_array($genTime2nd)) {
            $useMinMax = false;
            if (isset($genTime2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::GEN_TIME_2ND, $genTime2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genTime2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::GEN_TIME_2ND, $genTime2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::GEN_TIME_2ND, $genTime2nd, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTm($tm = null, $comparison = null)
    {
        if (is_array($tm)) {
            $useMinMax = false;
            if (isset($tm['min'])) {
                $this->addUsingAlias(MatrixPeer::TM, $tm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm['max'])) {
                $this->addUsingAlias(MatrixPeer::TM, $tm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TM, $tm, $comparison);
    }

    /**
     * Filter the query on the tm_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByTm1st(1234); // WHERE tm_1st = 1234
     * $query->filterByTm1st(array(12, 34)); // WHERE tm_1st IN (12, 34)
     * $query->filterByTm1st(array('min' => 12)); // WHERE tm_1st >= 12
     * $query->filterByTm1st(array('max' => 12)); // WHERE tm_1st <= 12
     * </code>
     *
     * @param     mixed $tm1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTm1st($tm1st = null, $comparison = null)
    {
        if (is_array($tm1st)) {
            $useMinMax = false;
            if (isset($tm1st['min'])) {
                $this->addUsingAlias(MatrixPeer::TM_1ST, $tm1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm1st['max'])) {
                $this->addUsingAlias(MatrixPeer::TM_1ST, $tm1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TM_1ST, $tm1st, $comparison);
    }

    /**
     * Filter the query on the tm_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByTm2nd(1234); // WHERE tm_2nd = 1234
     * $query->filterByTm2nd(array(12, 34)); // WHERE tm_2nd IN (12, 34)
     * $query->filterByTm2nd(array('min' => 12)); // WHERE tm_2nd >= 12
     * $query->filterByTm2nd(array('max' => 12)); // WHERE tm_2nd <= 12
     * </code>
     *
     * @param     mixed $tm2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTm2nd($tm2nd = null, $comparison = null)
    {
        if (is_array($tm2nd)) {
            $useMinMax = false;
            if (isset($tm2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::TM_2ND, $tm2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::TM_2ND, $tm2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TM_2ND, $tm2nd, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLm($lm = null, $comparison = null)
    {
        if (is_array($lm)) {
            $useMinMax = false;
            if (isset($lm['min'])) {
                $this->addUsingAlias(MatrixPeer::LM, $lm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lm['max'])) {
                $this->addUsingAlias(MatrixPeer::LM, $lm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LM, $lm, $comparison);
    }

    /**
     * Filter the query on the Lm_se_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByLmSe1st(1234); // WHERE Lm_se_1st = 1234
     * $query->filterByLmSe1st(array(12, 34)); // WHERE Lm_se_1st IN (12, 34)
     * $query->filterByLmSe1st(array('min' => 12)); // WHERE Lm_se_1st >= 12
     * $query->filterByLmSe1st(array('max' => 12)); // WHERE Lm_se_1st <= 12
     * </code>
     *
     * @param     mixed $lmSe1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLmSe1st($lmSe1st = null, $comparison = null)
    {
        if (is_array($lmSe1st)) {
            $useMinMax = false;
            if (isset($lmSe1st['min'])) {
                $this->addUsingAlias(MatrixPeer::LM_SE_1ST, $lmSe1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmSe1st['max'])) {
                $this->addUsingAlias(MatrixPeer::LM_SE_1ST, $lmSe1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LM_SE_1ST, $lmSe1st, $comparison);
    }

    /**
     * Filter the query on the Lm_se_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByLmSe2nd(1234); // WHERE Lm_se_2nd = 1234
     * $query->filterByLmSe2nd(array(12, 34)); // WHERE Lm_se_2nd IN (12, 34)
     * $query->filterByLmSe2nd(array('min' => 12)); // WHERE Lm_se_2nd >= 12
     * $query->filterByLmSe2nd(array('max' => 12)); // WHERE Lm_se_2nd <= 12
     * </code>
     *
     * @param     mixed $lmSe2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLmSe2nd($lmSe2nd = null, $comparison = null)
    {
        if (is_array($lmSe2nd)) {
            $useMinMax = false;
            if (isset($lmSe2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::LM_SE_2ND, $lmSe2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmSe2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::LM_SE_2ND, $lmSe2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LM_SE_2ND, $lmSe2nd, $comparison);
    }

    /**
     * Filter the query on the Lm_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLmType('fooValue');   // WHERE Lm_type = 'fooValue'
     * $query->filterByLmType('%fooValue%'); // WHERE Lm_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lmType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLmType($lmType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lmType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lmType)) {
                $lmType = str_replace('*', '%', $lmType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LM_TYPE, $lmType, $comparison);
    }

    /**
     * Filter the query on the Lopt column
     *
     * Example usage:
     * <code>
     * $query->filterByLopt(1234); // WHERE Lopt = 1234
     * $query->filterByLopt(array(12, 34)); // WHERE Lopt IN (12, 34)
     * $query->filterByLopt(array('min' => 12)); // WHERE Lopt >= 12
     * $query->filterByLopt(array('max' => 12)); // WHERE Lopt <= 12
     * </code>
     *
     * @param     mixed $lopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLopt($lopt = null, $comparison = null)
    {
        if (is_array($lopt)) {
            $useMinMax = false;
            if (isset($lopt['min'])) {
                $this->addUsingAlias(MatrixPeer::LOPT, $lopt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lopt['max'])) {
                $this->addUsingAlias(MatrixPeer::LOPT, $lopt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LOPT, $lopt, $comparison);
    }

    /**
     * Filter the query on the Lopt_se_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByLoptSe1st(1234); // WHERE Lopt_se_1st = 1234
     * $query->filterByLoptSe1st(array(12, 34)); // WHERE Lopt_se_1st IN (12, 34)
     * $query->filterByLoptSe1st(array('min' => 12)); // WHERE Lopt_se_1st >= 12
     * $query->filterByLoptSe1st(array('max' => 12)); // WHERE Lopt_se_1st <= 12
     * </code>
     *
     * @param     mixed $loptSe1st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLoptSe1st($loptSe1st = null, $comparison = null)
    {
        if (is_array($loptSe1st)) {
            $useMinMax = false;
            if (isset($loptSe1st['min'])) {
                $this->addUsingAlias(MatrixPeer::LOPT_SE_1ST, $loptSe1st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loptSe1st['max'])) {
                $this->addUsingAlias(MatrixPeer::LOPT_SE_1ST, $loptSe1st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LOPT_SE_1ST, $loptSe1st, $comparison);
    }

    /**
     * Filter the query on the Lopt_se_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByLoptSe2nd(1234); // WHERE Lopt_se_2nd = 1234
     * $query->filterByLoptSe2nd(array(12, 34)); // WHERE Lopt_se_2nd IN (12, 34)
     * $query->filterByLoptSe2nd(array('min' => 12)); // WHERE Lopt_se_2nd >= 12
     * $query->filterByLoptSe2nd(array('max' => 12)); // WHERE Lopt_se_2nd <= 12
     * </code>
     *
     * @param     mixed $loptSe2nd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLoptSe2nd($loptSe2nd = null, $comparison = null)
    {
        if (is_array($loptSe2nd)) {
            $useMinMax = false;
            if (isset($loptSe2nd['min'])) {
                $this->addUsingAlias(MatrixPeer::LOPT_SE_2ND, $loptSe2nd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loptSe2nd['max'])) {
                $this->addUsingAlias(MatrixPeer::LOPT_SE_2ND, $loptSe2nd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LOPT_SE_2ND, $loptSe2nd, $comparison);
    }

    /**
     * Filter the query on the Lopt_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLoptType('fooValue');   // WHERE Lopt_type = 'fooValue'
     * $query->filterByLoptType('%fooValue%'); // WHERE Lopt_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loptType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLoptType($loptType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loptType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $loptType)) {
                $loptType = str_replace('*', '%', $loptType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LOPT_TYPE, $loptType, $comparison);
    }

    /**
     * Filter the query on the Lopt_text column
     *
     * Example usage:
     * <code>
     * $query->filterByLoptText('fooValue');   // WHERE Lopt_text = 'fooValue'
     * $query->filterByLoptText('%fooValue%'); // WHERE Lopt_text LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loptText The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLoptText($loptText = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loptText)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $loptText)) {
                $loptText = str_replace('*', '%', $loptText);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LOPT_TEXT, $loptText, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(MatrixPeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(MatrixPeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::A, $a, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(MatrixPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(MatrixPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the LW_length column
     *
     * Example usage:
     * <code>
     * $query->filterByLwLength(1234); // WHERE LW_length = 1234
     * $query->filterByLwLength(array(12, 34)); // WHERE LW_length IN (12, 34)
     * $query->filterByLwLength(array('min' => 12)); // WHERE LW_length >= 12
     * $query->filterByLwLength(array('max' => 12)); // WHERE LW_length <= 12
     * </code>
     *
     * @param     mixed $lwLength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLwLength($lwLength = null, $comparison = null)
    {
        if (is_array($lwLength)) {
            $useMinMax = false;
            if (isset($lwLength['min'])) {
                $this->addUsingAlias(MatrixPeer::LW_LENGTH, $lwLength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lwLength['max'])) {
                $this->addUsingAlias(MatrixPeer::LW_LENGTH, $lwLength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LW_LENGTH, $lwLength, $comparison);
    }

    /**
     * Filter the query on the LW_length_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLwLengthType('fooValue');   // WHERE LW_length_type = 'fooValue'
     * $query->filterByLwLengthType('%fooValue%'); // WHERE LW_length_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lwLengthType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLwLengthType($lwLengthType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lwLengthType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lwLengthType)) {
                $lwLengthType = str_replace('*', '%', $lwLengthType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LW_LENGTH_TYPE, $lwLengthType, $comparison);
    }

    /**
     * Filter the query on the W column
     *
     * Example usage:
     * <code>
     * $query->filterByW(1234); // WHERE W = 1234
     * $query->filterByW(array(12, 34)); // WHERE W IN (12, 34)
     * $query->filterByW(array('min' => 12)); // WHERE W >= 12
     * $query->filterByW(array('max' => 12)); // WHERE W <= 12
     * </code>
     *
     * @param     mixed $w The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByW($w = null, $comparison = null)
    {
        if (is_array($w)) {
            $useMinMax = false;
            if (isset($w['min'])) {
                $this->addUsingAlias(MatrixPeer::W, $w['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($w['max'])) {
                $this->addUsingAlias(MatrixPeer::W, $w['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::W, $w, $comparison);
    }

    /**
     * Filter the query on the W_type column
     *
     * Example usage:
     * <code>
     * $query->filterByWType('fooValue');   // WHERE W_type = 'fooValue'
     * $query->filterByWType('%fooValue%'); // WHERE W_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWType($wType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wType)) {
                $wType = str_replace('*', '%', $wType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::W_TYPE, $wType, $comparison);
    }

    /**
     * Filter the query on the NitrogenProtein_weight column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrogenproteinWeight(1234); // WHERE NitrogenProtein_weight = 1234
     * $query->filterByNitrogenproteinWeight(array(12, 34)); // WHERE NitrogenProtein_weight IN (12, 34)
     * $query->filterByNitrogenproteinWeight(array('min' => 12)); // WHERE NitrogenProtein_weight >= 12
     * $query->filterByNitrogenproteinWeight(array('max' => 12)); // WHERE NitrogenProtein_weight <= 12
     * </code>
     *
     * @param     mixed $nitrogenproteinWeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByNitrogenproteinWeight($nitrogenproteinWeight = null, $comparison = null)
    {
        if (is_array($nitrogenproteinWeight)) {
            $useMinMax = false;
            if (isset($nitrogenproteinWeight['min'])) {
                $this->addUsingAlias(MatrixPeer::NITROGENPROTEIN_WEIGHT, $nitrogenproteinWeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nitrogenproteinWeight['max'])) {
                $this->addUsingAlias(MatrixPeer::NITROGENPROTEIN_WEIGHT, $nitrogenproteinWeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::NITROGENPROTEIN_WEIGHT, $nitrogenproteinWeight, $comparison);
    }

    /**
     * Filter the query on the NitrogenProtein_weight_type column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrogenproteinWeightType('fooValue');   // WHERE NitrogenProtein_weight_type = 'fooValue'
     * $query->filterByNitrogenproteinWeightType('%fooValue%'); // WHERE NitrogenProtein_weight_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitrogenproteinWeightType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByNitrogenproteinWeightType($nitrogenproteinWeightType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitrogenproteinWeightType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitrogenproteinWeightType)) {
                $nitrogenproteinWeightType = str_replace('*', '%', $nitrogenproteinWeightType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::NITROGENPROTEIN_WEIGHT_TYPE, $nitrogenproteinWeightType, $comparison);
    }

    /**
     * Filter the query on the nitrogen column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrogen(1234); // WHERE nitrogen = 1234
     * $query->filterByNitrogen(array(12, 34)); // WHERE nitrogen IN (12, 34)
     * $query->filterByNitrogen(array('min' => 12)); // WHERE nitrogen >= 12
     * $query->filterByNitrogen(array('max' => 12)); // WHERE nitrogen <= 12
     * </code>
     *
     * @param     mixed $nitrogen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByNitrogen($nitrogen = null, $comparison = null)
    {
        if (is_array($nitrogen)) {
            $useMinMax = false;
            if (isset($nitrogen['min'])) {
                $this->addUsingAlias(MatrixPeer::NITROGEN, $nitrogen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nitrogen['max'])) {
                $this->addUsingAlias(MatrixPeer::NITROGEN, $nitrogen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::NITROGEN, $nitrogen, $comparison);
    }

    /**
     * Filter the query on the protein column
     *
     * Example usage:
     * <code>
     * $query->filterByProtein(1234); // WHERE protein = 1234
     * $query->filterByProtein(array(12, 34)); // WHERE protein IN (12, 34)
     * $query->filterByProtein(array('min' => 12)); // WHERE protein >= 12
     * $query->filterByProtein(array('max' => 12)); // WHERE protein <= 12
     * </code>
     *
     * @param     mixed $protein The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByProtein($protein = null, $comparison = null)
    {
        if (is_array($protein)) {
            $useMinMax = false;
            if (isset($protein['min'])) {
                $this->addUsingAlias(MatrixPeer::PROTEIN, $protein['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($protein['max'])) {
                $this->addUsingAlias(MatrixPeer::PROTEIN, $protein['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::PROTEIN, $protein, $comparison);
    }

    /**
     * Filter the query on the Reproductive_guild column
     *
     * Example usage:
     * <code>
     * $query->filterByReproductiveGuild('fooValue');   // WHERE Reproductive_guild = 'fooValue'
     * $query->filterByReproductiveGuild('%fooValue%'); // WHERE Reproductive_guild LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reproductiveGuild The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByReproductiveGuild($reproductiveGuild = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reproductiveGuild)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reproductiveGuild)) {
                $reproductiveGuild = str_replace('*', '%', $reproductiveGuild);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::REPRODUCTIVE_GUILD, $reproductiveGuild, $comparison);
    }

    /**
     * Filter the query on the Fecundity column
     *
     * Example usage:
     * <code>
     * $query->filterByFecundity(1234); // WHERE Fecundity = 1234
     * $query->filterByFecundity(array(12, 34)); // WHERE Fecundity IN (12, 34)
     * $query->filterByFecundity(array('min' => 12)); // WHERE Fecundity >= 12
     * $query->filterByFecundity(array('max' => 12)); // WHERE Fecundity <= 12
     * </code>
     *
     * @param     mixed $fecundity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByFecundity($fecundity = null, $comparison = null)
    {
        if (is_array($fecundity)) {
            $useMinMax = false;
            if (isset($fecundity['min'])) {
                $this->addUsingAlias(MatrixPeer::FECUNDITY, $fecundity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecundity['max'])) {
                $this->addUsingAlias(MatrixPeer::FECUNDITY, $fecundity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::FECUNDITY, $fecundity, $comparison);
    }

    /**
     * Filter the query on the Fecundity_1st column
     *
     * Example usage:
     * <code>
     * $query->filterByFecundity1st('fooValue');   // WHERE Fecundity_1st = 'fooValue'
     * $query->filterByFecundity1st('%fooValue%'); // WHERE Fecundity_1st LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fecundity1st The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByFecundity1st($fecundity1st = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fecundity1st)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fecundity1st)) {
                $fecundity1st = str_replace('*', '%', $fecundity1st);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::FECUNDITY_1ST, $fecundity1st, $comparison);
    }

    /**
     * Filter the query on the Fecundity_2nd column
     *
     * Example usage:
     * <code>
     * $query->filterByFecundity2nd('fooValue');   // WHERE Fecundity_2nd = 'fooValue'
     * $query->filterByFecundity2nd('%fooValue%'); // WHERE Fecundity_2nd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fecundity2nd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByFecundity2nd($fecundity2nd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fecundity2nd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fecundity2nd)) {
                $fecundity2nd = str_replace('*', '%', $fecundity2nd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::FECUNDITY_2ND, $fecundity2nd, $comparison);
    }

    /**
     * Filter the query on the zzzFecundity_text column
     *
     * Example usage:
     * <code>
     * $query->filterByZzzfecundityText('fooValue');   // WHERE zzzFecundity_text = 'fooValue'
     * $query->filterByZzzfecundityText('%fooValue%'); // WHERE zzzFecundity_text LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zzzfecundityText The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByZzzfecundityText($zzzfecundityText = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zzzfecundityText)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zzzfecundityText)) {
                $zzzfecundityText = str_replace('*', '%', $zzzfecundityText);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::ZZZFECUNDITY_TEXT, $zzzfecundityText, $comparison);
    }

    /**
     * Filter the query on the Emsy column
     *
     * Example usage:
     * <code>
     * $query->filterByEmsy(1234); // WHERE Emsy = 1234
     * $query->filterByEmsy(array(12, 34)); // WHERE Emsy IN (12, 34)
     * $query->filterByEmsy(array('min' => 12)); // WHERE Emsy >= 12
     * $query->filterByEmsy(array('max' => 12)); // WHERE Emsy <= 12
     * </code>
     *
     * @param     mixed $emsy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByEmsy($emsy = null, $comparison = null)
    {
        if (is_array($emsy)) {
            $useMinMax = false;
            if (isset($emsy['min'])) {
                $this->addUsingAlias(MatrixPeer::EMSY, $emsy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emsy['max'])) {
                $this->addUsingAlias(MatrixPeer::EMSY, $emsy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::EMSY, $emsy, $comparison);
    }

    /**
     * Filter the query on the Eopt column
     *
     * Example usage:
     * <code>
     * $query->filterByEopt(1234); // WHERE Eopt = 1234
     * $query->filterByEopt(array(12, 34)); // WHERE Eopt IN (12, 34)
     * $query->filterByEopt(array('min' => 12)); // WHERE Eopt >= 12
     * $query->filterByEopt(array('max' => 12)); // WHERE Eopt <= 12
     * </code>
     *
     * @param     mixed $eopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByEopt($eopt = null, $comparison = null)
    {
        if (is_array($eopt)) {
            $useMinMax = false;
            if (isset($eopt['min'])) {
                $this->addUsingAlias(MatrixPeer::EOPT, $eopt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eopt['max'])) {
                $this->addUsingAlias(MatrixPeer::EOPT, $eopt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::EOPT, $eopt, $comparison);
    }

    /**
     * Filter the query on the Fmsy column
     *
     * Example usage:
     * <code>
     * $query->filterByFmsy(1234); // WHERE Fmsy = 1234
     * $query->filterByFmsy(array(12, 34)); // WHERE Fmsy IN (12, 34)
     * $query->filterByFmsy(array('min' => 12)); // WHERE Fmsy >= 12
     * $query->filterByFmsy(array('max' => 12)); // WHERE Fmsy <= 12
     * </code>
     *
     * @param     mixed $fmsy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByFmsy($fmsy = null, $comparison = null)
    {
        if (is_array($fmsy)) {
            $useMinMax = false;
            if (isset($fmsy['min'])) {
                $this->addUsingAlias(MatrixPeer::FMSY, $fmsy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fmsy['max'])) {
                $this->addUsingAlias(MatrixPeer::FMSY, $fmsy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::FMSY, $fmsy, $comparison);
    }

    /**
     * Filter the query on the Fopt column
     *
     * Example usage:
     * <code>
     * $query->filterByFopt(1234); // WHERE Fopt = 1234
     * $query->filterByFopt(array(12, 34)); // WHERE Fopt IN (12, 34)
     * $query->filterByFopt(array('min' => 12)); // WHERE Fopt >= 12
     * $query->filterByFopt(array('max' => 12)); // WHERE Fopt <= 12
     * </code>
     *
     * @param     mixed $fopt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByFopt($fopt = null, $comparison = null)
    {
        if (is_array($fopt)) {
            $useMinMax = false;
            if (isset($fopt['min'])) {
                $this->addUsingAlias(MatrixPeer::FOPT, $fopt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fopt['max'])) {
                $this->addUsingAlias(MatrixPeer::FOPT, $fopt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::FOPT, $fopt, $comparison);
    }

    /**
     * Filter the query on the Lc column
     *
     * Example usage:
     * <code>
     * $query->filterByLc(1234); // WHERE Lc = 1234
     * $query->filterByLc(array(12, 34)); // WHERE Lc IN (12, 34)
     * $query->filterByLc(array('min' => 12)); // WHERE Lc >= 12
     * $query->filterByLc(array('max' => 12)); // WHERE Lc <= 12
     * </code>
     *
     * @param     mixed $lc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLc($lc = null, $comparison = null)
    {
        if (is_array($lc)) {
            $useMinMax = false;
            if (isset($lc['min'])) {
                $this->addUsingAlias(MatrixPeer::LC, $lc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lc['max'])) {
                $this->addUsingAlias(MatrixPeer::LC, $lc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LC, $lc, $comparison);
    }

    /**
     * Filter the query on the Lc_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLcType('fooValue');   // WHERE Lc_type = 'fooValue'
     * $query->filterByLcType('%fooValue%'); // WHERE Lc_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lcType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLcType($lcType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lcType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lcType)) {
                $lcType = str_replace('*', '%', $lcType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LC_TYPE, $lcType, $comparison);
    }

    /**
     * Filter the query on the E column
     *
     * Example usage:
     * <code>
     * $query->filterByE(1234); // WHERE E = 1234
     * $query->filterByE(array(12, 34)); // WHERE E IN (12, 34)
     * $query->filterByE(array('min' => 12)); // WHERE E >= 12
     * $query->filterByE(array('max' => 12)); // WHERE E <= 12
     * </code>
     *
     * @param     mixed $e The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByE($e = null, $comparison = null)
    {
        if (is_array($e)) {
            $useMinMax = false;
            if (isset($e['min'])) {
                $this->addUsingAlias(MatrixPeer::E, $e['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($e['max'])) {
                $this->addUsingAlias(MatrixPeer::E, $e['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::E, $e, $comparison);
    }

    /**
     * Filter the query on the YR column
     *
     * Example usage:
     * <code>
     * $query->filterByYr(1234); // WHERE YR = 1234
     * $query->filterByYr(array(12, 34)); // WHERE YR IN (12, 34)
     * $query->filterByYr(array('min' => 12)); // WHERE YR >= 12
     * $query->filterByYr(array('max' => 12)); // WHERE YR <= 12
     * </code>
     *
     * @param     mixed $yr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByYr($yr = null, $comparison = null)
    {
        if (is_array($yr)) {
            $useMinMax = false;
            if (isset($yr['min'])) {
                $this->addUsingAlias(MatrixPeer::YR, $yr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yr['max'])) {
                $this->addUsingAlias(MatrixPeer::YR, $yr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::YR, $yr, $comparison);
    }

    /**
     * Filter the query on the Resilience column
     *
     * Example usage:
     * <code>
     * $query->filterByResilience('fooValue');   // WHERE Resilience = 'fooValue'
     * $query->filterByResilience('%fooValue%'); // WHERE Resilience LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resilience The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByResilience($resilience = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resilience)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resilience)) {
                $resilience = str_replace('*', '%', $resilience);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::RESILIENCE, $resilience, $comparison);
    }

    /**
     * Filter the query on the rm column
     *
     * Example usage:
     * <code>
     * $query->filterByRm(1234); // WHERE rm = 1234
     * $query->filterByRm(array(12, 34)); // WHERE rm IN (12, 34)
     * $query->filterByRm(array('min' => 12)); // WHERE rm >= 12
     * $query->filterByRm(array('max' => 12)); // WHERE rm <= 12
     * </code>
     *
     * @param     mixed $rm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByRm($rm = null, $comparison = null)
    {
        if (is_array($rm)) {
            $useMinMax = false;
            if (isset($rm['min'])) {
                $this->addUsingAlias(MatrixPeer::RM, $rm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rm['max'])) {
                $this->addUsingAlias(MatrixPeer::RM, $rm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::RM, $rm, $comparison);
    }

    /**
     * Filter the query on the Lr column
     *
     * Example usage:
     * <code>
     * $query->filterByLr(1234); // WHERE Lr = 1234
     * $query->filterByLr(array(12, 34)); // WHERE Lr IN (12, 34)
     * $query->filterByLr(array('min' => 12)); // WHERE Lr >= 12
     * $query->filterByLr(array('max' => 12)); // WHERE Lr <= 12
     * </code>
     *
     * @param     mixed $lr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLr($lr = null, $comparison = null)
    {
        if (is_array($lr)) {
            $useMinMax = false;
            if (isset($lr['min'])) {
                $this->addUsingAlias(MatrixPeer::LR, $lr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lr['max'])) {
                $this->addUsingAlias(MatrixPeer::LR, $lr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LR, $lr, $comparison);
    }

    /**
     * Filter the query on the Lr_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLrType('fooValue');   // WHERE Lr_type = 'fooValue'
     * $query->filterByLrType('%fooValue%'); // WHERE Lr_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lrType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByLrType($lrType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lrType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lrType)) {
                $lrType = str_replace('*', '%', $lrType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::LR_TYPE, $lrType, $comparison);
    }

    /**
     * Filter the query on the main_food column
     *
     * Example usage:
     * <code>
     * $query->filterByMainFood('fooValue');   // WHERE main_food = 'fooValue'
     * $query->filterByMainFood('%fooValue%'); // WHERE main_food LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainFood The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByMainFood($mainFood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainFood)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mainFood)) {
                $mainFood = str_replace('*', '%', $mainFood);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::MAIN_FOOD, $mainFood, $comparison);
    }

    /**
     * Filter the query on the trophic_level column
     *
     * Example usage:
     * <code>
     * $query->filterByTrophicLevel('fooValue');   // WHERE trophic_level = 'fooValue'
     * $query->filterByTrophicLevel('%fooValue%'); // WHERE trophic_level LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trophicLevel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTrophicLevel($trophicLevel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trophicLevel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trophicLevel)) {
                $trophicLevel = str_replace('*', '%', $trophicLevel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TROPHIC_LEVEL, $trophicLevel, $comparison);
    }

    /**
     * Filter the query on the QB column
     *
     * Example usage:
     * <code>
     * $query->filterByQb(1234); // WHERE QB = 1234
     * $query->filterByQb(array(12, 34)); // WHERE QB IN (12, 34)
     * $query->filterByQb(array('min' => 12)); // WHERE QB >= 12
     * $query->filterByQb(array('max' => 12)); // WHERE QB <= 12
     * </code>
     *
     * @param     mixed $qb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByQb($qb = null, $comparison = null)
    {
        if (is_array($qb)) {
            $useMinMax = false;
            if (isset($qb['min'])) {
                $this->addUsingAlias(MatrixPeer::QB, $qb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qb['max'])) {
                $this->addUsingAlias(MatrixPeer::QB, $qb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::QB, $qb, $comparison);
    }

    /**
     * Filter the query on the QB_text column
     *
     * Example usage:
     * <code>
     * $query->filterByQbText('fooValue');   // WHERE QB_text = 'fooValue'
     * $query->filterByQbText('%fooValue%'); // WHERE QB_text LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qbText The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByQbText($qbText = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qbText)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qbText)) {
                $qbText = str_replace('*', '%', $qbText);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::QB_TEXT, $qbText, $comparison);
    }

    /**
     * Filter the query on the QB_Winf column
     *
     * Example usage:
     * <code>
     * $query->filterByQbWinf(1234); // WHERE QB_Winf = 1234
     * $query->filterByQbWinf(array(12, 34)); // WHERE QB_Winf IN (12, 34)
     * $query->filterByQbWinf(array('min' => 12)); // WHERE QB_Winf >= 12
     * $query->filterByQbWinf(array('max' => 12)); // WHERE QB_Winf <= 12
     * </code>
     *
     * @param     mixed $qbWinf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByQbWinf($qbWinf = null, $comparison = null)
    {
        if (is_array($qbWinf)) {
            $useMinMax = false;
            if (isset($qbWinf['min'])) {
                $this->addUsingAlias(MatrixPeer::QB_WINF, $qbWinf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qbWinf['max'])) {
                $this->addUsingAlias(MatrixPeer::QB_WINF, $qbWinf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::QB_WINF, $qbWinf, $comparison);
    }

    /**
     * Filter the query on the QB_temp column
     *
     * Example usage:
     * <code>
     * $query->filterByQbTemp(1234); // WHERE QB_temp = 1234
     * $query->filterByQbTemp(array(12, 34)); // WHERE QB_temp IN (12, 34)
     * $query->filterByQbTemp(array('min' => 12)); // WHERE QB_temp >= 12
     * $query->filterByQbTemp(array('max' => 12)); // WHERE QB_temp <= 12
     * </code>
     *
     * @param     mixed $qbTemp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByQbTemp($qbTemp = null, $comparison = null)
    {
        if (is_array($qbTemp)) {
            $useMinMax = false;
            if (isset($qbTemp['min'])) {
                $this->addUsingAlias(MatrixPeer::QB_TEMP, $qbTemp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qbTemp['max'])) {
                $this->addUsingAlias(MatrixPeer::QB_TEMP, $qbTemp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::QB_TEMP, $qbTemp, $comparison);
    }

    /**
     * Filter the query on the QB_A column
     *
     * Example usage:
     * <code>
     * $query->filterByQbA(1234); // WHERE QB_A = 1234
     * $query->filterByQbA(array(12, 34)); // WHERE QB_A IN (12, 34)
     * $query->filterByQbA(array('min' => 12)); // WHERE QB_A >= 12
     * $query->filterByQbA(array('max' => 12)); // WHERE QB_A <= 12
     * </code>
     *
     * @param     mixed $qbA The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByQbA($qbA = null, $comparison = null)
    {
        if (is_array($qbA)) {
            $useMinMax = false;
            if (isset($qbA['min'])) {
                $this->addUsingAlias(MatrixPeer::QB_A, $qbA['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qbA['max'])) {
                $this->addUsingAlias(MatrixPeer::QB_A, $qbA['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::QB_A, $qbA, $comparison);
    }

    /**
     * Filter the query on the with_growth column
     *
     * Example usage:
     * <code>
     * $query->filterByWithGrowth('fooValue');   // WHERE with_growth = 'fooValue'
     * $query->filterByWithGrowth('%fooValue%'); // WHERE with_growth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withGrowth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithGrowth($withGrowth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withGrowth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withGrowth)) {
                $withGrowth = str_replace('*', '%', $withGrowth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_GROWTH, $withGrowth, $comparison);
    }

    /**
     * Filter the query on the with_max_age_size column
     *
     * Example usage:
     * <code>
     * $query->filterByWithMaxAgeSize('fooValue');   // WHERE with_max_age_size = 'fooValue'
     * $query->filterByWithMaxAgeSize('%fooValue%'); // WHERE with_max_age_size LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withMaxAgeSize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithMaxAgeSize($withMaxAgeSize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withMaxAgeSize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withMaxAgeSize)) {
                $withMaxAgeSize = str_replace('*', '%', $withMaxAgeSize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_MAX_AGE_SIZE, $withMaxAgeSize, $comparison);
    }

    /**
     * Filter the query on the with_lw column
     *
     * Example usage:
     * <code>
     * $query->filterByWithLw('fooValue');   // WHERE with_lw = 'fooValue'
     * $query->filterByWithLw('%fooValue%'); // WHERE with_lw LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withLw The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithLw($withLw = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withLw)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withLw)) {
                $withLw = str_replace('*', '%', $withLw);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_LW, $withLw, $comparison);
    }

    /**
     * Filter the query on the with_reproduction column
     *
     * Example usage:
     * <code>
     * $query->filterByWithReproduction('fooValue');   // WHERE with_reproduction = 'fooValue'
     * $query->filterByWithReproduction('%fooValue%'); // WHERE with_reproduction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withReproduction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithReproduction($withReproduction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withReproduction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withReproduction)) {
                $withReproduction = str_replace('*', '%', $withReproduction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_REPRODUCTION, $withReproduction, $comparison);
    }

    /**
     * Filter the query on the with_diet column
     *
     * Example usage:
     * <code>
     * $query->filterByWithDiet('fooValue');   // WHERE with_diet = 'fooValue'
     * $query->filterByWithDiet('%fooValue%'); // WHERE with_diet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withDiet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithDiet($withDiet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withDiet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withDiet)) {
                $withDiet = str_replace('*', '%', $withDiet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_DIET, $withDiet, $comparison);
    }

    /**
     * Filter the query on the with_food_consumption column
     *
     * Example usage:
     * <code>
     * $query->filterByWithFoodConsumption('fooValue');   // WHERE with_food_consumption = 'fooValue'
     * $query->filterByWithFoodConsumption('%fooValue%'); // WHERE with_food_consumption LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withFoodConsumption The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithFoodConsumption($withFoodConsumption = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withFoodConsumption)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withFoodConsumption)) {
                $withFoodConsumption = str_replace('*', '%', $withFoodConsumption);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_FOOD_CONSUMPTION, $withFoodConsumption, $comparison);
    }

    /**
     * Filter the query on the with_food column
     *
     * Example usage:
     * <code>
     * $query->filterByWithFood('fooValue');   // WHERE with_food = 'fooValue'
     * $query->filterByWithFood('%fooValue%'); // WHERE with_food LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withFood The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithFood($withFood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withFood)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withFood)) {
                $withFood = str_replace('*', '%', $withFood);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_FOOD, $withFood, $comparison);
    }

    /**
     * Filter the query on the with_maturity column
     *
     * Example usage:
     * <code>
     * $query->filterByWithMaturity('fooValue');   // WHERE with_maturity = 'fooValue'
     * $query->filterByWithMaturity('%fooValue%'); // WHERE with_maturity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withMaturity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithMaturity($withMaturity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withMaturity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withMaturity)) {
                $withMaturity = str_replace('*', '%', $withMaturity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_MATURITY, $withMaturity, $comparison);
    }

    /**
     * Filter the query on the with_spawning column
     *
     * Example usage:
     * <code>
     * $query->filterByWithSpawning('fooValue');   // WHERE with_spawning = 'fooValue'
     * $query->filterByWithSpawning('%fooValue%'); // WHERE with_spawning LIKE '%fooValue%'
     * </code>
     *
     * @param     string $withSpawning The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByWithSpawning($withSpawning = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($withSpawning)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $withSpawning)) {
                $withSpawning = str_replace('*', '%', $withSpawning);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MatrixPeer::WITH_SPAWNING, $withSpawning, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(MatrixPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(MatrixPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return MatrixQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MatrixPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MatrixPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MatrixPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Matrix $matrix Object to remove from the list of results
     *
     * @return MatrixQuery The current query, for fluid interface
     */
    public function prune($matrix = null)
    {
        if ($matrix) {
            $this->addUsingAlias(MatrixPeer::ID, $matrix->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
