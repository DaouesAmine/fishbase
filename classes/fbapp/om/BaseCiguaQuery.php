<?php


/**
 * Base class that represents a query for the 'cigua' table.
 *
 *
 *
 * @method CiguaQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method CiguaQuery orderByRecordNo($order = Criteria::ASC) Order by the RECORD_NO column
 * @method CiguaQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CiguaQuery orderByCountry($order = Criteria::ASC) Order by the COUNTRY column
 * @method CiguaQuery orderByLocation($order = Criteria::ASC) Order by the LOCATION column
 * @method CiguaQuery orderByLatitudedeg($order = Criteria::ASC) Order by the LatitudeDeg column
 * @method CiguaQuery orderByLatitudemin($order = Criteria::ASC) Order by the LatitudeMin column
 * @method CiguaQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method CiguaQuery orderByLongitudedeg($order = Criteria::ASC) Order by the LongitudeDeg column
 * @method CiguaQuery orderByLongitudemin($order = Criteria::ASC) Order by the LongitudeMin column
 * @method CiguaQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method CiguaQuery orderByDaterec($order = Criteria::ASC) Order by the DATEREC column
 * @method CiguaQuery orderByFishYN($order = Criteria::ASC) Order by the FISH_Y_N column
 * @method CiguaQuery orderByCrab($order = Criteria::ASC) Order by the CRAB column
 * @method CiguaQuery orderByLobst($order = Criteria::ASC) Order by the LOBST column
 * @method CiguaQuery orderByOthcrust($order = Criteria::ASC) Order by the OTHCRUST column
 * @method CiguaQuery orderByGastr($order = Criteria::ASC) Order by the GASTR column
 * @method CiguaQuery orderByBivalve($order = Criteria::ASC) Order by the BIVALVE column
 * @method CiguaQuery orderByOtherMoll($order = Criteria::ASC) Order by the OTHER_MOLL column
 * @method CiguaQuery orderByBeach($order = Criteria::ASC) Order by the BEACH column
 * @method CiguaQuery orderByReefPatch($order = Criteria::ASC) Order by the REEF_PATCH column
 * @method CiguaQuery orderByLagoon($order = Criteria::ASC) Order by the LAGOON column
 * @method CiguaQuery orderByRiver($order = Criteria::ASC) Order by the RIVER column
 * @method CiguaQuery orderByMangrove($order = Criteria::ASC) Order by the MANGROVE column
 * @method CiguaQuery orderByOuterReef($order = Criteria::ASC) Order by the OUTER_REEF column
 * @method CiguaQuery orderByOpenSea($order = Criteria::ASC) Order by the OPEN_SEA column
 * @method CiguaQuery orderByFreshnoice($order = Criteria::ASC) Order by the FRESHNOICE column
 * @method CiguaQuery orderByFreshCe($order = Criteria::ASC) Order by the FRESH_CE column
 * @method CiguaQuery orderByFrozen($order = Criteria::ASC) Order by the FROZEN column
 * @method CiguaQuery orderBySalted($order = Criteria::ASC) Order by the SALTED column
 * @method CiguaQuery orderByDried($order = Criteria::ASC) Order by the DRIED column
 * @method CiguaQuery orderBySmoked($order = Criteria::ASC) Order by the SMOKED column
 * @method CiguaQuery orderByPickled($order = Criteria::ASC) Order by the PICKLED column
 * @method CiguaQuery orderByHead($order = Criteria::ASC) Order by the HEAD column
 * @method CiguaQuery orderByFlesh($order = Criteria::ASC) Order by the FLESH column
 * @method CiguaQuery orderBySkin($order = Criteria::ASC) Order by the SKIN column
 * @method CiguaQuery orderByLiver($order = Criteria::ASC) Order by the LIVER column
 * @method CiguaQuery orderByRoe($order = Criteria::ASC) Order by the ROE column
 * @method CiguaQuery orderByOtherOrga($order = Criteria::ASC) Order by the OTHER_ORGA column
 * @method CiguaQuery orderByUnprepared($order = Criteria::ASC) Order by the UNPREPARED column
 * @method CiguaQuery orderByMarinated($order = Criteria::ASC) Order by the MARINATED column
 * @method CiguaQuery orderByCooked($order = Criteria::ASC) Order by the COOKED column
 * @method CiguaQuery orderByAteThisM($order = Criteria::ASC) Order by the ATE_THIS_M column
 * @method CiguaQuery orderByFeltSick($order = Criteria::ASC) Order by the FELT_SICK column
 * @method CiguaQuery orderByWereAdmit($order = Criteria::ASC) Order by the WERE_ADMIT column
 * @method CiguaQuery orderByLocalName($order = Criteria::ASC) Order by the LOCAL_NAME column
 * @method CiguaQuery orderByEnglishNa($order = Criteria::ASC) Order by the ENGLISH_NA column
 * @method CiguaQuery orderByScientific($order = Criteria::ASC) Order by the SCIENTIFIC column
 * @method CiguaQuery orderByVendor($order = Criteria::ASC) Order by the VENDOR column
 * @method CiguaQuery orderByAreacaught($order = Criteria::ASC) Order by the AREACAUGHT column
 * @method CiguaQuery orderByDateEaten($order = Criteria::ASC) Order by the DATE_EATEN column
 * @method CiguaQuery orderByTimeEaten($order = Criteria::ASC) Order by the TIME_EATEN column
 * @method CiguaQuery orderByDateSick($order = Criteria::ASC) Order by the DATE_SICK column
 * @method CiguaQuery orderByTimeSick($order = Criteria::ASC) Order by the TIME_SICK column
 * @method CiguaQuery orderByBurningPa($order = Criteria::ASC) Order by the BURNING_PA column
 * @method CiguaQuery orderByTinglingN($order = Criteria::ASC) Order by the TINGLING_N column
 * @method CiguaQuery orderByUrinateDi($order = Criteria::ASC) Order by the URINATE_DI column
 * @method CiguaQuery orderByDifficultw($order = Criteria::ASC) Order by the DIFFICULTW column
 * @method CiguaQuery orderByDifficultt($order = Criteria::ASC) Order by the DIFFICULTT column
 * @method CiguaQuery orderByDifficulty($order = Criteria::ASC) Order by the DIFFICULTY column
 * @method CiguaQuery orderByEyeIrrita($order = Criteria::ASC) Order by the EYE_IRRITA column
 * @method CiguaQuery orderByPinPricki($order = Criteria::ASC) Order by the PIN_PRICKI column
 * @method CiguaQuery orderByStrangeTa($order = Criteria::ASC) Order by the STRANGE_TA column
 * @method CiguaQuery orderBySkinItchi($order = Criteria::ASC) Order by the SKIN_ITCHI column
 * @method CiguaQuery orderByExcessSal($order = Criteria::ASC) Order by the EXCESS_SAL column
 * @method CiguaQuery orderByExcessSwt($order = Criteria::ASC) Order by the EXCESS_SWT column
 * @method CiguaQuery orderByDiarrhoea($order = Criteria::ASC) Order by the DIARRHOEA column
 * @method CiguaQuery orderByVomiting($order = Criteria::ASC) Order by the VOMITING column
 * @method CiguaQuery orderByFeverChil($order = Criteria::ASC) Order by the FEVER_CHIL column
 * @method CiguaQuery orderByHeadache($order = Criteria::ASC) Order by the HEADACHE column
 * @method CiguaQuery orderByJointAche($order = Criteria::ASC) Order by the JOINT_ACHE column
 * @method CiguaQuery orderByMuscleCra($order = Criteria::ASC) Order by the MUSCLE_CRA column
 * @method CiguaQuery orderByPulse($order = Criteria::ASC) Order by the PULSE column
 * @method CiguaQuery orderBySystolic($order = Criteria::ASC) Order by the SYSTOLIC column
 * @method CiguaQuery orderByDiastolic($order = Criteria::ASC) Order by the DIASTOLIC column
 * @method CiguaQuery orderByPupils($order = Criteria::ASC) Order by the PUPILS column
 * @method CiguaQuery orderByDeath($order = Criteria::ASC) Order by the DEATH column
 * @method CiguaQuery orderByComments($order = Criteria::ASC) Order by the COMMENTS column
 * @method CiguaQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method CiguaQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CiguaQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method CiguaQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method CiguaQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CiguaQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CiguaQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CiguaQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CiguaQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CiguaQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CiguaQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CiguaQuery groupByAutoctr() Group by the AutoCtr column
 * @method CiguaQuery groupByRecordNo() Group by the RECORD_NO column
 * @method CiguaQuery groupByCCode() Group by the C_Code column
 * @method CiguaQuery groupByCountry() Group by the COUNTRY column
 * @method CiguaQuery groupByLocation() Group by the LOCATION column
 * @method CiguaQuery groupByLatitudedeg() Group by the LatitudeDeg column
 * @method CiguaQuery groupByLatitudemin() Group by the LatitudeMin column
 * @method CiguaQuery groupByNorthsouth() Group by the NorthSouth column
 * @method CiguaQuery groupByLongitudedeg() Group by the LongitudeDeg column
 * @method CiguaQuery groupByLongitudemin() Group by the LongitudeMin column
 * @method CiguaQuery groupByEastwest() Group by the EastWest column
 * @method CiguaQuery groupByDaterec() Group by the DATEREC column
 * @method CiguaQuery groupByFishYN() Group by the FISH_Y_N column
 * @method CiguaQuery groupByCrab() Group by the CRAB column
 * @method CiguaQuery groupByLobst() Group by the LOBST column
 * @method CiguaQuery groupByOthcrust() Group by the OTHCRUST column
 * @method CiguaQuery groupByGastr() Group by the GASTR column
 * @method CiguaQuery groupByBivalve() Group by the BIVALVE column
 * @method CiguaQuery groupByOtherMoll() Group by the OTHER_MOLL column
 * @method CiguaQuery groupByBeach() Group by the BEACH column
 * @method CiguaQuery groupByReefPatch() Group by the REEF_PATCH column
 * @method CiguaQuery groupByLagoon() Group by the LAGOON column
 * @method CiguaQuery groupByRiver() Group by the RIVER column
 * @method CiguaQuery groupByMangrove() Group by the MANGROVE column
 * @method CiguaQuery groupByOuterReef() Group by the OUTER_REEF column
 * @method CiguaQuery groupByOpenSea() Group by the OPEN_SEA column
 * @method CiguaQuery groupByFreshnoice() Group by the FRESHNOICE column
 * @method CiguaQuery groupByFreshCe() Group by the FRESH_CE column
 * @method CiguaQuery groupByFrozen() Group by the FROZEN column
 * @method CiguaQuery groupBySalted() Group by the SALTED column
 * @method CiguaQuery groupByDried() Group by the DRIED column
 * @method CiguaQuery groupBySmoked() Group by the SMOKED column
 * @method CiguaQuery groupByPickled() Group by the PICKLED column
 * @method CiguaQuery groupByHead() Group by the HEAD column
 * @method CiguaQuery groupByFlesh() Group by the FLESH column
 * @method CiguaQuery groupBySkin() Group by the SKIN column
 * @method CiguaQuery groupByLiver() Group by the LIVER column
 * @method CiguaQuery groupByRoe() Group by the ROE column
 * @method CiguaQuery groupByOtherOrga() Group by the OTHER_ORGA column
 * @method CiguaQuery groupByUnprepared() Group by the UNPREPARED column
 * @method CiguaQuery groupByMarinated() Group by the MARINATED column
 * @method CiguaQuery groupByCooked() Group by the COOKED column
 * @method CiguaQuery groupByAteThisM() Group by the ATE_THIS_M column
 * @method CiguaQuery groupByFeltSick() Group by the FELT_SICK column
 * @method CiguaQuery groupByWereAdmit() Group by the WERE_ADMIT column
 * @method CiguaQuery groupByLocalName() Group by the LOCAL_NAME column
 * @method CiguaQuery groupByEnglishNa() Group by the ENGLISH_NA column
 * @method CiguaQuery groupByScientific() Group by the SCIENTIFIC column
 * @method CiguaQuery groupByVendor() Group by the VENDOR column
 * @method CiguaQuery groupByAreacaught() Group by the AREACAUGHT column
 * @method CiguaQuery groupByDateEaten() Group by the DATE_EATEN column
 * @method CiguaQuery groupByTimeEaten() Group by the TIME_EATEN column
 * @method CiguaQuery groupByDateSick() Group by the DATE_SICK column
 * @method CiguaQuery groupByTimeSick() Group by the TIME_SICK column
 * @method CiguaQuery groupByBurningPa() Group by the BURNING_PA column
 * @method CiguaQuery groupByTinglingN() Group by the TINGLING_N column
 * @method CiguaQuery groupByUrinateDi() Group by the URINATE_DI column
 * @method CiguaQuery groupByDifficultw() Group by the DIFFICULTW column
 * @method CiguaQuery groupByDifficultt() Group by the DIFFICULTT column
 * @method CiguaQuery groupByDifficulty() Group by the DIFFICULTY column
 * @method CiguaQuery groupByEyeIrrita() Group by the EYE_IRRITA column
 * @method CiguaQuery groupByPinPricki() Group by the PIN_PRICKI column
 * @method CiguaQuery groupByStrangeTa() Group by the STRANGE_TA column
 * @method CiguaQuery groupBySkinItchi() Group by the SKIN_ITCHI column
 * @method CiguaQuery groupByExcessSal() Group by the EXCESS_SAL column
 * @method CiguaQuery groupByExcessSwt() Group by the EXCESS_SWT column
 * @method CiguaQuery groupByDiarrhoea() Group by the DIARRHOEA column
 * @method CiguaQuery groupByVomiting() Group by the VOMITING column
 * @method CiguaQuery groupByFeverChil() Group by the FEVER_CHIL column
 * @method CiguaQuery groupByHeadache() Group by the HEADACHE column
 * @method CiguaQuery groupByJointAche() Group by the JOINT_ACHE column
 * @method CiguaQuery groupByMuscleCra() Group by the MUSCLE_CRA column
 * @method CiguaQuery groupByPulse() Group by the PULSE column
 * @method CiguaQuery groupBySystolic() Group by the SYSTOLIC column
 * @method CiguaQuery groupByDiastolic() Group by the DIASTOLIC column
 * @method CiguaQuery groupByPupils() Group by the PUPILS column
 * @method CiguaQuery groupByDeath() Group by the DEATH column
 * @method CiguaQuery groupByComments() Group by the COMMENTS column
 * @method CiguaQuery groupByFamcode() Group by the FamCode column
 * @method CiguaQuery groupBySpeccode() Group by the SpecCode column
 * @method CiguaQuery groupByGenus() Group by the Genus column
 * @method CiguaQuery groupBySpecies() Group by the Species column
 * @method CiguaQuery groupByEntered() Group by the Entered column
 * @method CiguaQuery groupByDateentered() Group by the DateEntered column
 * @method CiguaQuery groupByModified() Group by the Modified column
 * @method CiguaQuery groupByDatemodified() Group by the DateModified column
 * @method CiguaQuery groupByExpert() Group by the Expert column
 * @method CiguaQuery groupByDatechecked() Group by the DateChecked column
 * @method CiguaQuery groupByTs() Group by the TS column
 *
 * @method CiguaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CiguaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CiguaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cigua findOne(PropelPDO $con = null) Return the first Cigua matching the query
 * @method Cigua findOneOrCreate(PropelPDO $con = null) Return the first Cigua matching the query, or a new Cigua object populated from the query conditions when no match is found
 *
 * @method Cigua findOneByRecordNo(double $RECORD_NO) Return the first Cigua filtered by the RECORD_NO column
 * @method Cigua findOneByCCode(string $C_Code) Return the first Cigua filtered by the C_Code column
 * @method Cigua findOneByCountry(string $COUNTRY) Return the first Cigua filtered by the COUNTRY column
 * @method Cigua findOneByLocation(string $LOCATION) Return the first Cigua filtered by the LOCATION column
 * @method Cigua findOneByLatitudedeg(int $LatitudeDeg) Return the first Cigua filtered by the LatitudeDeg column
 * @method Cigua findOneByLatitudemin(int $LatitudeMin) Return the first Cigua filtered by the LatitudeMin column
 * @method Cigua findOneByNorthsouth(string $NorthSouth) Return the first Cigua filtered by the NorthSouth column
 * @method Cigua findOneByLongitudedeg(int $LongitudeDeg) Return the first Cigua filtered by the LongitudeDeg column
 * @method Cigua findOneByLongitudemin(int $LongitudeMin) Return the first Cigua filtered by the LongitudeMin column
 * @method Cigua findOneByEastwest(string $EastWest) Return the first Cigua filtered by the EastWest column
 * @method Cigua findOneByDaterec(string $DATEREC) Return the first Cigua filtered by the DATEREC column
 * @method Cigua findOneByFishYN(int $FISH_Y_N) Return the first Cigua filtered by the FISH_Y_N column
 * @method Cigua findOneByCrab(int $CRAB) Return the first Cigua filtered by the CRAB column
 * @method Cigua findOneByLobst(int $LOBST) Return the first Cigua filtered by the LOBST column
 * @method Cigua findOneByOthcrust(int $OTHCRUST) Return the first Cigua filtered by the OTHCRUST column
 * @method Cigua findOneByGastr(int $GASTR) Return the first Cigua filtered by the GASTR column
 * @method Cigua findOneByBivalve(int $BIVALVE) Return the first Cigua filtered by the BIVALVE column
 * @method Cigua findOneByOtherMoll(int $OTHER_MOLL) Return the first Cigua filtered by the OTHER_MOLL column
 * @method Cigua findOneByBeach(int $BEACH) Return the first Cigua filtered by the BEACH column
 * @method Cigua findOneByReefPatch(int $REEF_PATCH) Return the first Cigua filtered by the REEF_PATCH column
 * @method Cigua findOneByLagoon(int $LAGOON) Return the first Cigua filtered by the LAGOON column
 * @method Cigua findOneByRiver(int $RIVER) Return the first Cigua filtered by the RIVER column
 * @method Cigua findOneByMangrove(int $MANGROVE) Return the first Cigua filtered by the MANGROVE column
 * @method Cigua findOneByOuterReef(int $OUTER_REEF) Return the first Cigua filtered by the OUTER_REEF column
 * @method Cigua findOneByOpenSea(int $OPEN_SEA) Return the first Cigua filtered by the OPEN_SEA column
 * @method Cigua findOneByFreshnoice(int $FRESHNOICE) Return the first Cigua filtered by the FRESHNOICE column
 * @method Cigua findOneByFreshCe(int $FRESH_CE) Return the first Cigua filtered by the FRESH_CE column
 * @method Cigua findOneByFrozen(int $FROZEN) Return the first Cigua filtered by the FROZEN column
 * @method Cigua findOneBySalted(int $SALTED) Return the first Cigua filtered by the SALTED column
 * @method Cigua findOneByDried(int $DRIED) Return the first Cigua filtered by the DRIED column
 * @method Cigua findOneBySmoked(int $SMOKED) Return the first Cigua filtered by the SMOKED column
 * @method Cigua findOneByPickled(int $PICKLED) Return the first Cigua filtered by the PICKLED column
 * @method Cigua findOneByHead(int $HEAD) Return the first Cigua filtered by the HEAD column
 * @method Cigua findOneByFlesh(int $FLESH) Return the first Cigua filtered by the FLESH column
 * @method Cigua findOneBySkin(int $SKIN) Return the first Cigua filtered by the SKIN column
 * @method Cigua findOneByLiver(int $LIVER) Return the first Cigua filtered by the LIVER column
 * @method Cigua findOneByRoe(int $ROE) Return the first Cigua filtered by the ROE column
 * @method Cigua findOneByOtherOrga(int $OTHER_ORGA) Return the first Cigua filtered by the OTHER_ORGA column
 * @method Cigua findOneByUnprepared(int $UNPREPARED) Return the first Cigua filtered by the UNPREPARED column
 * @method Cigua findOneByMarinated(int $MARINATED) Return the first Cigua filtered by the MARINATED column
 * @method Cigua findOneByCooked(int $COOKED) Return the first Cigua filtered by the COOKED column
 * @method Cigua findOneByAteThisM(double $ATE_THIS_M) Return the first Cigua filtered by the ATE_THIS_M column
 * @method Cigua findOneByFeltSick(double $FELT_SICK) Return the first Cigua filtered by the FELT_SICK column
 * @method Cigua findOneByWereAdmit(double $WERE_ADMIT) Return the first Cigua filtered by the WERE_ADMIT column
 * @method Cigua findOneByLocalName(string $LOCAL_NAME) Return the first Cigua filtered by the LOCAL_NAME column
 * @method Cigua findOneByEnglishNa(string $ENGLISH_NA) Return the first Cigua filtered by the ENGLISH_NA column
 * @method Cigua findOneByScientific(string $SCIENTIFIC) Return the first Cigua filtered by the SCIENTIFIC column
 * @method Cigua findOneByVendor(string $VENDOR) Return the first Cigua filtered by the VENDOR column
 * @method Cigua findOneByAreacaught(string $AREACAUGHT) Return the first Cigua filtered by the AREACAUGHT column
 * @method Cigua findOneByDateEaten(string $DATE_EATEN) Return the first Cigua filtered by the DATE_EATEN column
 * @method Cigua findOneByTimeEaten(string $TIME_EATEN) Return the first Cigua filtered by the TIME_EATEN column
 * @method Cigua findOneByDateSick(string $DATE_SICK) Return the first Cigua filtered by the DATE_SICK column
 * @method Cigua findOneByTimeSick(string $TIME_SICK) Return the first Cigua filtered by the TIME_SICK column
 * @method Cigua findOneByBurningPa(int $BURNING_PA) Return the first Cigua filtered by the BURNING_PA column
 * @method Cigua findOneByTinglingN(int $TINGLING_N) Return the first Cigua filtered by the TINGLING_N column
 * @method Cigua findOneByUrinateDi(int $URINATE_DI) Return the first Cigua filtered by the URINATE_DI column
 * @method Cigua findOneByDifficultw(int $DIFFICULTW) Return the first Cigua filtered by the DIFFICULTW column
 * @method Cigua findOneByDifficultt(int $DIFFICULTT) Return the first Cigua filtered by the DIFFICULTT column
 * @method Cigua findOneByDifficulty(int $DIFFICULTY) Return the first Cigua filtered by the DIFFICULTY column
 * @method Cigua findOneByEyeIrrita(int $EYE_IRRITA) Return the first Cigua filtered by the EYE_IRRITA column
 * @method Cigua findOneByPinPricki(int $PIN_PRICKI) Return the first Cigua filtered by the PIN_PRICKI column
 * @method Cigua findOneByStrangeTa(int $STRANGE_TA) Return the first Cigua filtered by the STRANGE_TA column
 * @method Cigua findOneBySkinItchi(int $SKIN_ITCHI) Return the first Cigua filtered by the SKIN_ITCHI column
 * @method Cigua findOneByExcessSal(int $EXCESS_SAL) Return the first Cigua filtered by the EXCESS_SAL column
 * @method Cigua findOneByExcessSwt(int $EXCESS_SWT) Return the first Cigua filtered by the EXCESS_SWT column
 * @method Cigua findOneByDiarrhoea(int $DIARRHOEA) Return the first Cigua filtered by the DIARRHOEA column
 * @method Cigua findOneByVomiting(int $VOMITING) Return the first Cigua filtered by the VOMITING column
 * @method Cigua findOneByFeverChil(int $FEVER_CHIL) Return the first Cigua filtered by the FEVER_CHIL column
 * @method Cigua findOneByHeadache(int $HEADACHE) Return the first Cigua filtered by the HEADACHE column
 * @method Cigua findOneByJointAche(int $JOINT_ACHE) Return the first Cigua filtered by the JOINT_ACHE column
 * @method Cigua findOneByMuscleCra(int $MUSCLE_CRA) Return the first Cigua filtered by the MUSCLE_CRA column
 * @method Cigua findOneByPulse(int $PULSE) Return the first Cigua filtered by the PULSE column
 * @method Cigua findOneBySystolic(int $SYSTOLIC) Return the first Cigua filtered by the SYSTOLIC column
 * @method Cigua findOneByDiastolic(double $DIASTOLIC) Return the first Cigua filtered by the DIASTOLIC column
 * @method Cigua findOneByPupils(double $PUPILS) Return the first Cigua filtered by the PUPILS column
 * @method Cigua findOneByDeath(double $DEATH) Return the first Cigua filtered by the DEATH column
 * @method Cigua findOneByComments(string $COMMENTS) Return the first Cigua filtered by the COMMENTS column
 * @method Cigua findOneByFamcode(int $FamCode) Return the first Cigua filtered by the FamCode column
 * @method Cigua findOneBySpeccode(int $SpecCode) Return the first Cigua filtered by the SpecCode column
 * @method Cigua findOneByGenus(string $Genus) Return the first Cigua filtered by the Genus column
 * @method Cigua findOneBySpecies(string $Species) Return the first Cigua filtered by the Species column
 * @method Cigua findOneByEntered(int $Entered) Return the first Cigua filtered by the Entered column
 * @method Cigua findOneByDateentered(string $DateEntered) Return the first Cigua filtered by the DateEntered column
 * @method Cigua findOneByModified(int $Modified) Return the first Cigua filtered by the Modified column
 * @method Cigua findOneByDatemodified(string $DateModified) Return the first Cigua filtered by the DateModified column
 * @method Cigua findOneByExpert(int $Expert) Return the first Cigua filtered by the Expert column
 * @method Cigua findOneByDatechecked(string $DateChecked) Return the first Cigua filtered by the DateChecked column
 * @method Cigua findOneByTs(string $TS) Return the first Cigua filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Cigua objects filtered by the AutoCtr column
 * @method array findByRecordNo(double $RECORD_NO) Return Cigua objects filtered by the RECORD_NO column
 * @method array findByCCode(string $C_Code) Return Cigua objects filtered by the C_Code column
 * @method array findByCountry(string $COUNTRY) Return Cigua objects filtered by the COUNTRY column
 * @method array findByLocation(string $LOCATION) Return Cigua objects filtered by the LOCATION column
 * @method array findByLatitudedeg(int $LatitudeDeg) Return Cigua objects filtered by the LatitudeDeg column
 * @method array findByLatitudemin(int $LatitudeMin) Return Cigua objects filtered by the LatitudeMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Cigua objects filtered by the NorthSouth column
 * @method array findByLongitudedeg(int $LongitudeDeg) Return Cigua objects filtered by the LongitudeDeg column
 * @method array findByLongitudemin(int $LongitudeMin) Return Cigua objects filtered by the LongitudeMin column
 * @method array findByEastwest(string $EastWest) Return Cigua objects filtered by the EastWest column
 * @method array findByDaterec(string $DATEREC) Return Cigua objects filtered by the DATEREC column
 * @method array findByFishYN(int $FISH_Y_N) Return Cigua objects filtered by the FISH_Y_N column
 * @method array findByCrab(int $CRAB) Return Cigua objects filtered by the CRAB column
 * @method array findByLobst(int $LOBST) Return Cigua objects filtered by the LOBST column
 * @method array findByOthcrust(int $OTHCRUST) Return Cigua objects filtered by the OTHCRUST column
 * @method array findByGastr(int $GASTR) Return Cigua objects filtered by the GASTR column
 * @method array findByBivalve(int $BIVALVE) Return Cigua objects filtered by the BIVALVE column
 * @method array findByOtherMoll(int $OTHER_MOLL) Return Cigua objects filtered by the OTHER_MOLL column
 * @method array findByBeach(int $BEACH) Return Cigua objects filtered by the BEACH column
 * @method array findByReefPatch(int $REEF_PATCH) Return Cigua objects filtered by the REEF_PATCH column
 * @method array findByLagoon(int $LAGOON) Return Cigua objects filtered by the LAGOON column
 * @method array findByRiver(int $RIVER) Return Cigua objects filtered by the RIVER column
 * @method array findByMangrove(int $MANGROVE) Return Cigua objects filtered by the MANGROVE column
 * @method array findByOuterReef(int $OUTER_REEF) Return Cigua objects filtered by the OUTER_REEF column
 * @method array findByOpenSea(int $OPEN_SEA) Return Cigua objects filtered by the OPEN_SEA column
 * @method array findByFreshnoice(int $FRESHNOICE) Return Cigua objects filtered by the FRESHNOICE column
 * @method array findByFreshCe(int $FRESH_CE) Return Cigua objects filtered by the FRESH_CE column
 * @method array findByFrozen(int $FROZEN) Return Cigua objects filtered by the FROZEN column
 * @method array findBySalted(int $SALTED) Return Cigua objects filtered by the SALTED column
 * @method array findByDried(int $DRIED) Return Cigua objects filtered by the DRIED column
 * @method array findBySmoked(int $SMOKED) Return Cigua objects filtered by the SMOKED column
 * @method array findByPickled(int $PICKLED) Return Cigua objects filtered by the PICKLED column
 * @method array findByHead(int $HEAD) Return Cigua objects filtered by the HEAD column
 * @method array findByFlesh(int $FLESH) Return Cigua objects filtered by the FLESH column
 * @method array findBySkin(int $SKIN) Return Cigua objects filtered by the SKIN column
 * @method array findByLiver(int $LIVER) Return Cigua objects filtered by the LIVER column
 * @method array findByRoe(int $ROE) Return Cigua objects filtered by the ROE column
 * @method array findByOtherOrga(int $OTHER_ORGA) Return Cigua objects filtered by the OTHER_ORGA column
 * @method array findByUnprepared(int $UNPREPARED) Return Cigua objects filtered by the UNPREPARED column
 * @method array findByMarinated(int $MARINATED) Return Cigua objects filtered by the MARINATED column
 * @method array findByCooked(int $COOKED) Return Cigua objects filtered by the COOKED column
 * @method array findByAteThisM(double $ATE_THIS_M) Return Cigua objects filtered by the ATE_THIS_M column
 * @method array findByFeltSick(double $FELT_SICK) Return Cigua objects filtered by the FELT_SICK column
 * @method array findByWereAdmit(double $WERE_ADMIT) Return Cigua objects filtered by the WERE_ADMIT column
 * @method array findByLocalName(string $LOCAL_NAME) Return Cigua objects filtered by the LOCAL_NAME column
 * @method array findByEnglishNa(string $ENGLISH_NA) Return Cigua objects filtered by the ENGLISH_NA column
 * @method array findByScientific(string $SCIENTIFIC) Return Cigua objects filtered by the SCIENTIFIC column
 * @method array findByVendor(string $VENDOR) Return Cigua objects filtered by the VENDOR column
 * @method array findByAreacaught(string $AREACAUGHT) Return Cigua objects filtered by the AREACAUGHT column
 * @method array findByDateEaten(string $DATE_EATEN) Return Cigua objects filtered by the DATE_EATEN column
 * @method array findByTimeEaten(string $TIME_EATEN) Return Cigua objects filtered by the TIME_EATEN column
 * @method array findByDateSick(string $DATE_SICK) Return Cigua objects filtered by the DATE_SICK column
 * @method array findByTimeSick(string $TIME_SICK) Return Cigua objects filtered by the TIME_SICK column
 * @method array findByBurningPa(int $BURNING_PA) Return Cigua objects filtered by the BURNING_PA column
 * @method array findByTinglingN(int $TINGLING_N) Return Cigua objects filtered by the TINGLING_N column
 * @method array findByUrinateDi(int $URINATE_DI) Return Cigua objects filtered by the URINATE_DI column
 * @method array findByDifficultw(int $DIFFICULTW) Return Cigua objects filtered by the DIFFICULTW column
 * @method array findByDifficultt(int $DIFFICULTT) Return Cigua objects filtered by the DIFFICULTT column
 * @method array findByDifficulty(int $DIFFICULTY) Return Cigua objects filtered by the DIFFICULTY column
 * @method array findByEyeIrrita(int $EYE_IRRITA) Return Cigua objects filtered by the EYE_IRRITA column
 * @method array findByPinPricki(int $PIN_PRICKI) Return Cigua objects filtered by the PIN_PRICKI column
 * @method array findByStrangeTa(int $STRANGE_TA) Return Cigua objects filtered by the STRANGE_TA column
 * @method array findBySkinItchi(int $SKIN_ITCHI) Return Cigua objects filtered by the SKIN_ITCHI column
 * @method array findByExcessSal(int $EXCESS_SAL) Return Cigua objects filtered by the EXCESS_SAL column
 * @method array findByExcessSwt(int $EXCESS_SWT) Return Cigua objects filtered by the EXCESS_SWT column
 * @method array findByDiarrhoea(int $DIARRHOEA) Return Cigua objects filtered by the DIARRHOEA column
 * @method array findByVomiting(int $VOMITING) Return Cigua objects filtered by the VOMITING column
 * @method array findByFeverChil(int $FEVER_CHIL) Return Cigua objects filtered by the FEVER_CHIL column
 * @method array findByHeadache(int $HEADACHE) Return Cigua objects filtered by the HEADACHE column
 * @method array findByJointAche(int $JOINT_ACHE) Return Cigua objects filtered by the JOINT_ACHE column
 * @method array findByMuscleCra(int $MUSCLE_CRA) Return Cigua objects filtered by the MUSCLE_CRA column
 * @method array findByPulse(int $PULSE) Return Cigua objects filtered by the PULSE column
 * @method array findBySystolic(int $SYSTOLIC) Return Cigua objects filtered by the SYSTOLIC column
 * @method array findByDiastolic(double $DIASTOLIC) Return Cigua objects filtered by the DIASTOLIC column
 * @method array findByPupils(double $PUPILS) Return Cigua objects filtered by the PUPILS column
 * @method array findByDeath(double $DEATH) Return Cigua objects filtered by the DEATH column
 * @method array findByComments(string $COMMENTS) Return Cigua objects filtered by the COMMENTS column
 * @method array findByFamcode(int $FamCode) Return Cigua objects filtered by the FamCode column
 * @method array findBySpeccode(int $SpecCode) Return Cigua objects filtered by the SpecCode column
 * @method array findByGenus(string $Genus) Return Cigua objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Cigua objects filtered by the Species column
 * @method array findByEntered(int $Entered) Return Cigua objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Cigua objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Cigua objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Cigua objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Cigua objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Cigua objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Cigua objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCiguaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCiguaQuery object.
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
            $modelName = 'Cigua';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CiguaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CiguaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CiguaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CiguaQuery) {
            return $criteria;
        }
        $query = new CiguaQuery(null, null, $modelAlias);

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
     * @return   Cigua|Cigua[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CiguaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cigua A model object, or null if the key is not found
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
     * @return                 Cigua A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `RECORD_NO`, `C_Code`, `COUNTRY`, `LOCATION`, `LatitudeDeg`, `LatitudeMin`, `NorthSouth`, `LongitudeDeg`, `LongitudeMin`, `EastWest`, `DATEREC`, `FISH_Y_N`, `CRAB`, `LOBST`, `OTHCRUST`, `GASTR`, `BIVALVE`, `OTHER_MOLL`, `BEACH`, `REEF_PATCH`, `LAGOON`, `RIVER`, `MANGROVE`, `OUTER_REEF`, `OPEN_SEA`, `FRESHNOICE`, `FRESH_CE`, `FROZEN`, `SALTED`, `DRIED`, `SMOKED`, `PICKLED`, `HEAD`, `FLESH`, `SKIN`, `LIVER`, `ROE`, `OTHER_ORGA`, `UNPREPARED`, `MARINATED`, `COOKED`, `ATE_THIS_M`, `FELT_SICK`, `WERE_ADMIT`, `LOCAL_NAME`, `ENGLISH_NA`, `SCIENTIFIC`, `VENDOR`, `AREACAUGHT`, `DATE_EATEN`, `TIME_EATEN`, `DATE_SICK`, `TIME_SICK`, `BURNING_PA`, `TINGLING_N`, `URINATE_DI`, `DIFFICULTW`, `DIFFICULTT`, `DIFFICULTY`, `EYE_IRRITA`, `PIN_PRICKI`, `STRANGE_TA`, `SKIN_ITCHI`, `EXCESS_SAL`, `EXCESS_SWT`, `DIARRHOEA`, `VOMITING`, `FEVER_CHIL`, `HEADACHE`, `JOINT_ACHE`, `MUSCLE_CRA`, `PULSE`, `SYSTOLIC`, `DIASTOLIC`, `PUPILS`, `DEATH`, `COMMENTS`, `FamCode`, `SpecCode`, `Genus`, `Species`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `cigua` WHERE `AutoCtr` = :p0';
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
            $obj = new Cigua();
            $obj->hydrate($row);
            CiguaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cigua|Cigua[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cigua[]|mixed the list of results, formatted by the current formatter
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CiguaPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CiguaPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(CiguaPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(CiguaPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the RECORD_NO column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordNo(1234); // WHERE RECORD_NO = 1234
     * $query->filterByRecordNo(array(12, 34)); // WHERE RECORD_NO IN (12, 34)
     * $query->filterByRecordNo(array('min' => 12)); // WHERE RECORD_NO >= 12
     * $query->filterByRecordNo(array('max' => 12)); // WHERE RECORD_NO <= 12
     * </code>
     *
     * @param     mixed $recordNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByRecordNo($recordNo = null, $comparison = null)
    {
        if (is_array($recordNo)) {
            $useMinMax = false;
            if (isset($recordNo['min'])) {
                $this->addUsingAlias(CiguaPeer::RECORD_NO, $recordNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recordNo['max'])) {
                $this->addUsingAlias(CiguaPeer::RECORD_NO, $recordNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::RECORD_NO, $recordNo, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CiguaPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the COUNTRY column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE COUNTRY = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE COUNTRY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the LOCATION column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE LOCATION = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE LOCATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CiguaPeer::LOCATION, $location, $comparison);
    }

    /**
     * Filter the query on the LatitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudedeg(1234); // WHERE LatitudeDeg = 1234
     * $query->filterByLatitudedeg(array(12, 34)); // WHERE LatitudeDeg IN (12, 34)
     * $query->filterByLatitudedeg(array('min' => 12)); // WHERE LatitudeDeg >= 12
     * $query->filterByLatitudedeg(array('max' => 12)); // WHERE LatitudeDeg <= 12
     * </code>
     *
     * @param     mixed $latitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLatitudedeg($latitudedeg = null, $comparison = null)
    {
        if (is_array($latitudedeg)) {
            $useMinMax = false;
            if (isset($latitudedeg['min'])) {
                $this->addUsingAlias(CiguaPeer::LATITUDEDEG, $latitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudedeg['max'])) {
                $this->addUsingAlias(CiguaPeer::LATITUDEDEG, $latitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LATITUDEDEG, $latitudedeg, $comparison);
    }

    /**
     * Filter the query on the LatitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudemin(1234); // WHERE LatitudeMin = 1234
     * $query->filterByLatitudemin(array(12, 34)); // WHERE LatitudeMin IN (12, 34)
     * $query->filterByLatitudemin(array('min' => 12)); // WHERE LatitudeMin >= 12
     * $query->filterByLatitudemin(array('max' => 12)); // WHERE LatitudeMin <= 12
     * </code>
     *
     * @param     mixed $latitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLatitudemin($latitudemin = null, $comparison = null)
    {
        if (is_array($latitudemin)) {
            $useMinMax = false;
            if (isset($latitudemin['min'])) {
                $this->addUsingAlias(CiguaPeer::LATITUDEMIN, $latitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitudemin['max'])) {
                $this->addUsingAlias(CiguaPeer::LATITUDEMIN, $latitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LATITUDEMIN, $latitudemin, $comparison);
    }

    /**
     * Filter the query on the NorthSouth column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouth('fooValue');   // WHERE NorthSouth = 'fooValue'
     * $query->filterByNorthsouth('%fooValue%'); // WHERE NorthSouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByNorthsouth($northsouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouth)) {
                $northsouth = str_replace('*', '%', $northsouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LongitudeDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudedeg(1234); // WHERE LongitudeDeg = 1234
     * $query->filterByLongitudedeg(array(12, 34)); // WHERE LongitudeDeg IN (12, 34)
     * $query->filterByLongitudedeg(array('min' => 12)); // WHERE LongitudeDeg >= 12
     * $query->filterByLongitudedeg(array('max' => 12)); // WHERE LongitudeDeg <= 12
     * </code>
     *
     * @param     mixed $longitudedeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLongitudedeg($longitudedeg = null, $comparison = null)
    {
        if (is_array($longitudedeg)) {
            $useMinMax = false;
            if (isset($longitudedeg['min'])) {
                $this->addUsingAlias(CiguaPeer::LONGITUDEDEG, $longitudedeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudedeg['max'])) {
                $this->addUsingAlias(CiguaPeer::LONGITUDEDEG, $longitudedeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LONGITUDEDEG, $longitudedeg, $comparison);
    }

    /**
     * Filter the query on the LongitudeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitudemin(1234); // WHERE LongitudeMin = 1234
     * $query->filterByLongitudemin(array(12, 34)); // WHERE LongitudeMin IN (12, 34)
     * $query->filterByLongitudemin(array('min' => 12)); // WHERE LongitudeMin >= 12
     * $query->filterByLongitudemin(array('max' => 12)); // WHERE LongitudeMin <= 12
     * </code>
     *
     * @param     mixed $longitudemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLongitudemin($longitudemin = null, $comparison = null)
    {
        if (is_array($longitudemin)) {
            $useMinMax = false;
            if (isset($longitudemin['min'])) {
                $this->addUsingAlias(CiguaPeer::LONGITUDEMIN, $longitudemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitudemin['max'])) {
                $this->addUsingAlias(CiguaPeer::LONGITUDEMIN, $longitudemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LONGITUDEMIN, $longitudemin, $comparison);
    }

    /**
     * Filter the query on the EastWest column
     *
     * Example usage:
     * <code>
     * $query->filterByEastwest('fooValue');   // WHERE EastWest = 'fooValue'
     * $query->filterByEastwest('%fooValue%'); // WHERE EastWest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eastwest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByEastwest($eastwest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eastwest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eastwest)) {
                $eastwest = str_replace('*', '%', $eastwest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the DATEREC column
     *
     * Example usage:
     * <code>
     * $query->filterByDaterec('2011-03-14'); // WHERE DATEREC = '2011-03-14'
     * $query->filterByDaterec('now'); // WHERE DATEREC = '2011-03-14'
     * $query->filterByDaterec(array('max' => 'yesterday')); // WHERE DATEREC < '2011-03-13'
     * </code>
     *
     * @param     mixed $daterec The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDaterec($daterec = null, $comparison = null)
    {
        if (is_array($daterec)) {
            $useMinMax = false;
            if (isset($daterec['min'])) {
                $this->addUsingAlias(CiguaPeer::DATEREC, $daterec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($daterec['max'])) {
                $this->addUsingAlias(CiguaPeer::DATEREC, $daterec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DATEREC, $daterec, $comparison);
    }

    /**
     * Filter the query on the FISH_Y_N column
     *
     * Example usage:
     * <code>
     * $query->filterByFishYN(1234); // WHERE FISH_Y_N = 1234
     * $query->filterByFishYN(array(12, 34)); // WHERE FISH_Y_N IN (12, 34)
     * $query->filterByFishYN(array('min' => 12)); // WHERE FISH_Y_N >= 12
     * $query->filterByFishYN(array('max' => 12)); // WHERE FISH_Y_N <= 12
     * </code>
     *
     * @param     mixed $fishYN The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFishYN($fishYN = null, $comparison = null)
    {
        if (is_array($fishYN)) {
            $useMinMax = false;
            if (isset($fishYN['min'])) {
                $this->addUsingAlias(CiguaPeer::FISH_Y_N, $fishYN['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishYN['max'])) {
                $this->addUsingAlias(CiguaPeer::FISH_Y_N, $fishYN['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FISH_Y_N, $fishYN, $comparison);
    }

    /**
     * Filter the query on the CRAB column
     *
     * Example usage:
     * <code>
     * $query->filterByCrab(1234); // WHERE CRAB = 1234
     * $query->filterByCrab(array(12, 34)); // WHERE CRAB IN (12, 34)
     * $query->filterByCrab(array('min' => 12)); // WHERE CRAB >= 12
     * $query->filterByCrab(array('max' => 12)); // WHERE CRAB <= 12
     * </code>
     *
     * @param     mixed $crab The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByCrab($crab = null, $comparison = null)
    {
        if (is_array($crab)) {
            $useMinMax = false;
            if (isset($crab['min'])) {
                $this->addUsingAlias(CiguaPeer::CRAB, $crab['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crab['max'])) {
                $this->addUsingAlias(CiguaPeer::CRAB, $crab['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::CRAB, $crab, $comparison);
    }

    /**
     * Filter the query on the LOBST column
     *
     * Example usage:
     * <code>
     * $query->filterByLobst(1234); // WHERE LOBST = 1234
     * $query->filterByLobst(array(12, 34)); // WHERE LOBST IN (12, 34)
     * $query->filterByLobst(array('min' => 12)); // WHERE LOBST >= 12
     * $query->filterByLobst(array('max' => 12)); // WHERE LOBST <= 12
     * </code>
     *
     * @param     mixed $lobst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLobst($lobst = null, $comparison = null)
    {
        if (is_array($lobst)) {
            $useMinMax = false;
            if (isset($lobst['min'])) {
                $this->addUsingAlias(CiguaPeer::LOBST, $lobst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lobst['max'])) {
                $this->addUsingAlias(CiguaPeer::LOBST, $lobst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LOBST, $lobst, $comparison);
    }

    /**
     * Filter the query on the OTHCRUST column
     *
     * Example usage:
     * <code>
     * $query->filterByOthcrust(1234); // WHERE OTHCRUST = 1234
     * $query->filterByOthcrust(array(12, 34)); // WHERE OTHCRUST IN (12, 34)
     * $query->filterByOthcrust(array('min' => 12)); // WHERE OTHCRUST >= 12
     * $query->filterByOthcrust(array('max' => 12)); // WHERE OTHCRUST <= 12
     * </code>
     *
     * @param     mixed $othcrust The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByOthcrust($othcrust = null, $comparison = null)
    {
        if (is_array($othcrust)) {
            $useMinMax = false;
            if (isset($othcrust['min'])) {
                $this->addUsingAlias(CiguaPeer::OTHCRUST, $othcrust['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($othcrust['max'])) {
                $this->addUsingAlias(CiguaPeer::OTHCRUST, $othcrust['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::OTHCRUST, $othcrust, $comparison);
    }

    /**
     * Filter the query on the GASTR column
     *
     * Example usage:
     * <code>
     * $query->filterByGastr(1234); // WHERE GASTR = 1234
     * $query->filterByGastr(array(12, 34)); // WHERE GASTR IN (12, 34)
     * $query->filterByGastr(array('min' => 12)); // WHERE GASTR >= 12
     * $query->filterByGastr(array('max' => 12)); // WHERE GASTR <= 12
     * </code>
     *
     * @param     mixed $gastr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByGastr($gastr = null, $comparison = null)
    {
        if (is_array($gastr)) {
            $useMinMax = false;
            if (isset($gastr['min'])) {
                $this->addUsingAlias(CiguaPeer::GASTR, $gastr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gastr['max'])) {
                $this->addUsingAlias(CiguaPeer::GASTR, $gastr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::GASTR, $gastr, $comparison);
    }

    /**
     * Filter the query on the BIVALVE column
     *
     * Example usage:
     * <code>
     * $query->filterByBivalve(1234); // WHERE BIVALVE = 1234
     * $query->filterByBivalve(array(12, 34)); // WHERE BIVALVE IN (12, 34)
     * $query->filterByBivalve(array('min' => 12)); // WHERE BIVALVE >= 12
     * $query->filterByBivalve(array('max' => 12)); // WHERE BIVALVE <= 12
     * </code>
     *
     * @param     mixed $bivalve The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByBivalve($bivalve = null, $comparison = null)
    {
        if (is_array($bivalve)) {
            $useMinMax = false;
            if (isset($bivalve['min'])) {
                $this->addUsingAlias(CiguaPeer::BIVALVE, $bivalve['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bivalve['max'])) {
                $this->addUsingAlias(CiguaPeer::BIVALVE, $bivalve['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::BIVALVE, $bivalve, $comparison);
    }

    /**
     * Filter the query on the OTHER_MOLL column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherMoll(1234); // WHERE OTHER_MOLL = 1234
     * $query->filterByOtherMoll(array(12, 34)); // WHERE OTHER_MOLL IN (12, 34)
     * $query->filterByOtherMoll(array('min' => 12)); // WHERE OTHER_MOLL >= 12
     * $query->filterByOtherMoll(array('max' => 12)); // WHERE OTHER_MOLL <= 12
     * </code>
     *
     * @param     mixed $otherMoll The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByOtherMoll($otherMoll = null, $comparison = null)
    {
        if (is_array($otherMoll)) {
            $useMinMax = false;
            if (isset($otherMoll['min'])) {
                $this->addUsingAlias(CiguaPeer::OTHER_MOLL, $otherMoll['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherMoll['max'])) {
                $this->addUsingAlias(CiguaPeer::OTHER_MOLL, $otherMoll['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::OTHER_MOLL, $otherMoll, $comparison);
    }

    /**
     * Filter the query on the BEACH column
     *
     * Example usage:
     * <code>
     * $query->filterByBeach(1234); // WHERE BEACH = 1234
     * $query->filterByBeach(array(12, 34)); // WHERE BEACH IN (12, 34)
     * $query->filterByBeach(array('min' => 12)); // WHERE BEACH >= 12
     * $query->filterByBeach(array('max' => 12)); // WHERE BEACH <= 12
     * </code>
     *
     * @param     mixed $beach The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByBeach($beach = null, $comparison = null)
    {
        if (is_array($beach)) {
            $useMinMax = false;
            if (isset($beach['min'])) {
                $this->addUsingAlias(CiguaPeer::BEACH, $beach['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($beach['max'])) {
                $this->addUsingAlias(CiguaPeer::BEACH, $beach['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::BEACH, $beach, $comparison);
    }

    /**
     * Filter the query on the REEF_PATCH column
     *
     * Example usage:
     * <code>
     * $query->filterByReefPatch(1234); // WHERE REEF_PATCH = 1234
     * $query->filterByReefPatch(array(12, 34)); // WHERE REEF_PATCH IN (12, 34)
     * $query->filterByReefPatch(array('min' => 12)); // WHERE REEF_PATCH >= 12
     * $query->filterByReefPatch(array('max' => 12)); // WHERE REEF_PATCH <= 12
     * </code>
     *
     * @param     mixed $reefPatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByReefPatch($reefPatch = null, $comparison = null)
    {
        if (is_array($reefPatch)) {
            $useMinMax = false;
            if (isset($reefPatch['min'])) {
                $this->addUsingAlias(CiguaPeer::REEF_PATCH, $reefPatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reefPatch['max'])) {
                $this->addUsingAlias(CiguaPeer::REEF_PATCH, $reefPatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::REEF_PATCH, $reefPatch, $comparison);
    }

    /**
     * Filter the query on the LAGOON column
     *
     * Example usage:
     * <code>
     * $query->filterByLagoon(1234); // WHERE LAGOON = 1234
     * $query->filterByLagoon(array(12, 34)); // WHERE LAGOON IN (12, 34)
     * $query->filterByLagoon(array('min' => 12)); // WHERE LAGOON >= 12
     * $query->filterByLagoon(array('max' => 12)); // WHERE LAGOON <= 12
     * </code>
     *
     * @param     mixed $lagoon The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLagoon($lagoon = null, $comparison = null)
    {
        if (is_array($lagoon)) {
            $useMinMax = false;
            if (isset($lagoon['min'])) {
                $this->addUsingAlias(CiguaPeer::LAGOON, $lagoon['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lagoon['max'])) {
                $this->addUsingAlias(CiguaPeer::LAGOON, $lagoon['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LAGOON, $lagoon, $comparison);
    }

    /**
     * Filter the query on the RIVER column
     *
     * Example usage:
     * <code>
     * $query->filterByRiver(1234); // WHERE RIVER = 1234
     * $query->filterByRiver(array(12, 34)); // WHERE RIVER IN (12, 34)
     * $query->filterByRiver(array('min' => 12)); // WHERE RIVER >= 12
     * $query->filterByRiver(array('max' => 12)); // WHERE RIVER <= 12
     * </code>
     *
     * @param     mixed $river The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByRiver($river = null, $comparison = null)
    {
        if (is_array($river)) {
            $useMinMax = false;
            if (isset($river['min'])) {
                $this->addUsingAlias(CiguaPeer::RIVER, $river['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($river['max'])) {
                $this->addUsingAlias(CiguaPeer::RIVER, $river['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::RIVER, $river, $comparison);
    }

    /**
     * Filter the query on the MANGROVE column
     *
     * Example usage:
     * <code>
     * $query->filterByMangrove(1234); // WHERE MANGROVE = 1234
     * $query->filterByMangrove(array(12, 34)); // WHERE MANGROVE IN (12, 34)
     * $query->filterByMangrove(array('min' => 12)); // WHERE MANGROVE >= 12
     * $query->filterByMangrove(array('max' => 12)); // WHERE MANGROVE <= 12
     * </code>
     *
     * @param     mixed $mangrove The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByMangrove($mangrove = null, $comparison = null)
    {
        if (is_array($mangrove)) {
            $useMinMax = false;
            if (isset($mangrove['min'])) {
                $this->addUsingAlias(CiguaPeer::MANGROVE, $mangrove['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mangrove['max'])) {
                $this->addUsingAlias(CiguaPeer::MANGROVE, $mangrove['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::MANGROVE, $mangrove, $comparison);
    }

    /**
     * Filter the query on the OUTER_REEF column
     *
     * Example usage:
     * <code>
     * $query->filterByOuterReef(1234); // WHERE OUTER_REEF = 1234
     * $query->filterByOuterReef(array(12, 34)); // WHERE OUTER_REEF IN (12, 34)
     * $query->filterByOuterReef(array('min' => 12)); // WHERE OUTER_REEF >= 12
     * $query->filterByOuterReef(array('max' => 12)); // WHERE OUTER_REEF <= 12
     * </code>
     *
     * @param     mixed $outerReef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByOuterReef($outerReef = null, $comparison = null)
    {
        if (is_array($outerReef)) {
            $useMinMax = false;
            if (isset($outerReef['min'])) {
                $this->addUsingAlias(CiguaPeer::OUTER_REEF, $outerReef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outerReef['max'])) {
                $this->addUsingAlias(CiguaPeer::OUTER_REEF, $outerReef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::OUTER_REEF, $outerReef, $comparison);
    }

    /**
     * Filter the query on the OPEN_SEA column
     *
     * Example usage:
     * <code>
     * $query->filterByOpenSea(1234); // WHERE OPEN_SEA = 1234
     * $query->filterByOpenSea(array(12, 34)); // WHERE OPEN_SEA IN (12, 34)
     * $query->filterByOpenSea(array('min' => 12)); // WHERE OPEN_SEA >= 12
     * $query->filterByOpenSea(array('max' => 12)); // WHERE OPEN_SEA <= 12
     * </code>
     *
     * @param     mixed $openSea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByOpenSea($openSea = null, $comparison = null)
    {
        if (is_array($openSea)) {
            $useMinMax = false;
            if (isset($openSea['min'])) {
                $this->addUsingAlias(CiguaPeer::OPEN_SEA, $openSea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($openSea['max'])) {
                $this->addUsingAlias(CiguaPeer::OPEN_SEA, $openSea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::OPEN_SEA, $openSea, $comparison);
    }

    /**
     * Filter the query on the FRESHNOICE column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshnoice(1234); // WHERE FRESHNOICE = 1234
     * $query->filterByFreshnoice(array(12, 34)); // WHERE FRESHNOICE IN (12, 34)
     * $query->filterByFreshnoice(array('min' => 12)); // WHERE FRESHNOICE >= 12
     * $query->filterByFreshnoice(array('max' => 12)); // WHERE FRESHNOICE <= 12
     * </code>
     *
     * @param     mixed $freshnoice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFreshnoice($freshnoice = null, $comparison = null)
    {
        if (is_array($freshnoice)) {
            $useMinMax = false;
            if (isset($freshnoice['min'])) {
                $this->addUsingAlias(CiguaPeer::FRESHNOICE, $freshnoice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshnoice['max'])) {
                $this->addUsingAlias(CiguaPeer::FRESHNOICE, $freshnoice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FRESHNOICE, $freshnoice, $comparison);
    }

    /**
     * Filter the query on the FRESH_CE column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshCe(1234); // WHERE FRESH_CE = 1234
     * $query->filterByFreshCe(array(12, 34)); // WHERE FRESH_CE IN (12, 34)
     * $query->filterByFreshCe(array('min' => 12)); // WHERE FRESH_CE >= 12
     * $query->filterByFreshCe(array('max' => 12)); // WHERE FRESH_CE <= 12
     * </code>
     *
     * @param     mixed $freshCe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFreshCe($freshCe = null, $comparison = null)
    {
        if (is_array($freshCe)) {
            $useMinMax = false;
            if (isset($freshCe['min'])) {
                $this->addUsingAlias(CiguaPeer::FRESH_CE, $freshCe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshCe['max'])) {
                $this->addUsingAlias(CiguaPeer::FRESH_CE, $freshCe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FRESH_CE, $freshCe, $comparison);
    }

    /**
     * Filter the query on the FROZEN column
     *
     * Example usage:
     * <code>
     * $query->filterByFrozen(1234); // WHERE FROZEN = 1234
     * $query->filterByFrozen(array(12, 34)); // WHERE FROZEN IN (12, 34)
     * $query->filterByFrozen(array('min' => 12)); // WHERE FROZEN >= 12
     * $query->filterByFrozen(array('max' => 12)); // WHERE FROZEN <= 12
     * </code>
     *
     * @param     mixed $frozen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFrozen($frozen = null, $comparison = null)
    {
        if (is_array($frozen)) {
            $useMinMax = false;
            if (isset($frozen['min'])) {
                $this->addUsingAlias(CiguaPeer::FROZEN, $frozen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frozen['max'])) {
                $this->addUsingAlias(CiguaPeer::FROZEN, $frozen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FROZEN, $frozen, $comparison);
    }

    /**
     * Filter the query on the SALTED column
     *
     * Example usage:
     * <code>
     * $query->filterBySalted(1234); // WHERE SALTED = 1234
     * $query->filterBySalted(array(12, 34)); // WHERE SALTED IN (12, 34)
     * $query->filterBySalted(array('min' => 12)); // WHERE SALTED >= 12
     * $query->filterBySalted(array('max' => 12)); // WHERE SALTED <= 12
     * </code>
     *
     * @param     mixed $salted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySalted($salted = null, $comparison = null)
    {
        if (is_array($salted)) {
            $useMinMax = false;
            if (isset($salted['min'])) {
                $this->addUsingAlias(CiguaPeer::SALTED, $salted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salted['max'])) {
                $this->addUsingAlias(CiguaPeer::SALTED, $salted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SALTED, $salted, $comparison);
    }

    /**
     * Filter the query on the DRIED column
     *
     * Example usage:
     * <code>
     * $query->filterByDried(1234); // WHERE DRIED = 1234
     * $query->filterByDried(array(12, 34)); // WHERE DRIED IN (12, 34)
     * $query->filterByDried(array('min' => 12)); // WHERE DRIED >= 12
     * $query->filterByDried(array('max' => 12)); // WHERE DRIED <= 12
     * </code>
     *
     * @param     mixed $dried The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDried($dried = null, $comparison = null)
    {
        if (is_array($dried)) {
            $useMinMax = false;
            if (isset($dried['min'])) {
                $this->addUsingAlias(CiguaPeer::DRIED, $dried['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dried['max'])) {
                $this->addUsingAlias(CiguaPeer::DRIED, $dried['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DRIED, $dried, $comparison);
    }

    /**
     * Filter the query on the SMOKED column
     *
     * Example usage:
     * <code>
     * $query->filterBySmoked(1234); // WHERE SMOKED = 1234
     * $query->filterBySmoked(array(12, 34)); // WHERE SMOKED IN (12, 34)
     * $query->filterBySmoked(array('min' => 12)); // WHERE SMOKED >= 12
     * $query->filterBySmoked(array('max' => 12)); // WHERE SMOKED <= 12
     * </code>
     *
     * @param     mixed $smoked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySmoked($smoked = null, $comparison = null)
    {
        if (is_array($smoked)) {
            $useMinMax = false;
            if (isset($smoked['min'])) {
                $this->addUsingAlias(CiguaPeer::SMOKED, $smoked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($smoked['max'])) {
                $this->addUsingAlias(CiguaPeer::SMOKED, $smoked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SMOKED, $smoked, $comparison);
    }

    /**
     * Filter the query on the PICKLED column
     *
     * Example usage:
     * <code>
     * $query->filterByPickled(1234); // WHERE PICKLED = 1234
     * $query->filterByPickled(array(12, 34)); // WHERE PICKLED IN (12, 34)
     * $query->filterByPickled(array('min' => 12)); // WHERE PICKLED >= 12
     * $query->filterByPickled(array('max' => 12)); // WHERE PICKLED <= 12
     * </code>
     *
     * @param     mixed $pickled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByPickled($pickled = null, $comparison = null)
    {
        if (is_array($pickled)) {
            $useMinMax = false;
            if (isset($pickled['min'])) {
                $this->addUsingAlias(CiguaPeer::PICKLED, $pickled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pickled['max'])) {
                $this->addUsingAlias(CiguaPeer::PICKLED, $pickled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::PICKLED, $pickled, $comparison);
    }

    /**
     * Filter the query on the HEAD column
     *
     * Example usage:
     * <code>
     * $query->filterByHead(1234); // WHERE HEAD = 1234
     * $query->filterByHead(array(12, 34)); // WHERE HEAD IN (12, 34)
     * $query->filterByHead(array('min' => 12)); // WHERE HEAD >= 12
     * $query->filterByHead(array('max' => 12)); // WHERE HEAD <= 12
     * </code>
     *
     * @param     mixed $head The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByHead($head = null, $comparison = null)
    {
        if (is_array($head)) {
            $useMinMax = false;
            if (isset($head['min'])) {
                $this->addUsingAlias(CiguaPeer::HEAD, $head['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($head['max'])) {
                $this->addUsingAlias(CiguaPeer::HEAD, $head['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::HEAD, $head, $comparison);
    }

    /**
     * Filter the query on the FLESH column
     *
     * Example usage:
     * <code>
     * $query->filterByFlesh(1234); // WHERE FLESH = 1234
     * $query->filterByFlesh(array(12, 34)); // WHERE FLESH IN (12, 34)
     * $query->filterByFlesh(array('min' => 12)); // WHERE FLESH >= 12
     * $query->filterByFlesh(array('max' => 12)); // WHERE FLESH <= 12
     * </code>
     *
     * @param     mixed $flesh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFlesh($flesh = null, $comparison = null)
    {
        if (is_array($flesh)) {
            $useMinMax = false;
            if (isset($flesh['min'])) {
                $this->addUsingAlias(CiguaPeer::FLESH, $flesh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flesh['max'])) {
                $this->addUsingAlias(CiguaPeer::FLESH, $flesh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FLESH, $flesh, $comparison);
    }

    /**
     * Filter the query on the SKIN column
     *
     * Example usage:
     * <code>
     * $query->filterBySkin(1234); // WHERE SKIN = 1234
     * $query->filterBySkin(array(12, 34)); // WHERE SKIN IN (12, 34)
     * $query->filterBySkin(array('min' => 12)); // WHERE SKIN >= 12
     * $query->filterBySkin(array('max' => 12)); // WHERE SKIN <= 12
     * </code>
     *
     * @param     mixed $skin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySkin($skin = null, $comparison = null)
    {
        if (is_array($skin)) {
            $useMinMax = false;
            if (isset($skin['min'])) {
                $this->addUsingAlias(CiguaPeer::SKIN, $skin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($skin['max'])) {
                $this->addUsingAlias(CiguaPeer::SKIN, $skin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SKIN, $skin, $comparison);
    }

    /**
     * Filter the query on the LIVER column
     *
     * Example usage:
     * <code>
     * $query->filterByLiver(1234); // WHERE LIVER = 1234
     * $query->filterByLiver(array(12, 34)); // WHERE LIVER IN (12, 34)
     * $query->filterByLiver(array('min' => 12)); // WHERE LIVER >= 12
     * $query->filterByLiver(array('max' => 12)); // WHERE LIVER <= 12
     * </code>
     *
     * @param     mixed $liver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLiver($liver = null, $comparison = null)
    {
        if (is_array($liver)) {
            $useMinMax = false;
            if (isset($liver['min'])) {
                $this->addUsingAlias(CiguaPeer::LIVER, $liver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liver['max'])) {
                $this->addUsingAlias(CiguaPeer::LIVER, $liver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LIVER, $liver, $comparison);
    }

    /**
     * Filter the query on the ROE column
     *
     * Example usage:
     * <code>
     * $query->filterByRoe(1234); // WHERE ROE = 1234
     * $query->filterByRoe(array(12, 34)); // WHERE ROE IN (12, 34)
     * $query->filterByRoe(array('min' => 12)); // WHERE ROE >= 12
     * $query->filterByRoe(array('max' => 12)); // WHERE ROE <= 12
     * </code>
     *
     * @param     mixed $roe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByRoe($roe = null, $comparison = null)
    {
        if (is_array($roe)) {
            $useMinMax = false;
            if (isset($roe['min'])) {
                $this->addUsingAlias(CiguaPeer::ROE, $roe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roe['max'])) {
                $this->addUsingAlias(CiguaPeer::ROE, $roe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::ROE, $roe, $comparison);
    }

    /**
     * Filter the query on the OTHER_ORGA column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherOrga(1234); // WHERE OTHER_ORGA = 1234
     * $query->filterByOtherOrga(array(12, 34)); // WHERE OTHER_ORGA IN (12, 34)
     * $query->filterByOtherOrga(array('min' => 12)); // WHERE OTHER_ORGA >= 12
     * $query->filterByOtherOrga(array('max' => 12)); // WHERE OTHER_ORGA <= 12
     * </code>
     *
     * @param     mixed $otherOrga The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByOtherOrga($otherOrga = null, $comparison = null)
    {
        if (is_array($otherOrga)) {
            $useMinMax = false;
            if (isset($otherOrga['min'])) {
                $this->addUsingAlias(CiguaPeer::OTHER_ORGA, $otherOrga['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherOrga['max'])) {
                $this->addUsingAlias(CiguaPeer::OTHER_ORGA, $otherOrga['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::OTHER_ORGA, $otherOrga, $comparison);
    }

    /**
     * Filter the query on the UNPREPARED column
     *
     * Example usage:
     * <code>
     * $query->filterByUnprepared(1234); // WHERE UNPREPARED = 1234
     * $query->filterByUnprepared(array(12, 34)); // WHERE UNPREPARED IN (12, 34)
     * $query->filterByUnprepared(array('min' => 12)); // WHERE UNPREPARED >= 12
     * $query->filterByUnprepared(array('max' => 12)); // WHERE UNPREPARED <= 12
     * </code>
     *
     * @param     mixed $unprepared The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByUnprepared($unprepared = null, $comparison = null)
    {
        if (is_array($unprepared)) {
            $useMinMax = false;
            if (isset($unprepared['min'])) {
                $this->addUsingAlias(CiguaPeer::UNPREPARED, $unprepared['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unprepared['max'])) {
                $this->addUsingAlias(CiguaPeer::UNPREPARED, $unprepared['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::UNPREPARED, $unprepared, $comparison);
    }

    /**
     * Filter the query on the MARINATED column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinated(1234); // WHERE MARINATED = 1234
     * $query->filterByMarinated(array(12, 34)); // WHERE MARINATED IN (12, 34)
     * $query->filterByMarinated(array('min' => 12)); // WHERE MARINATED >= 12
     * $query->filterByMarinated(array('max' => 12)); // WHERE MARINATED <= 12
     * </code>
     *
     * @param     mixed $marinated The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByMarinated($marinated = null, $comparison = null)
    {
        if (is_array($marinated)) {
            $useMinMax = false;
            if (isset($marinated['min'])) {
                $this->addUsingAlias(CiguaPeer::MARINATED, $marinated['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinated['max'])) {
                $this->addUsingAlias(CiguaPeer::MARINATED, $marinated['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::MARINATED, $marinated, $comparison);
    }

    /**
     * Filter the query on the COOKED column
     *
     * Example usage:
     * <code>
     * $query->filterByCooked(1234); // WHERE COOKED = 1234
     * $query->filterByCooked(array(12, 34)); // WHERE COOKED IN (12, 34)
     * $query->filterByCooked(array('min' => 12)); // WHERE COOKED >= 12
     * $query->filterByCooked(array('max' => 12)); // WHERE COOKED <= 12
     * </code>
     *
     * @param     mixed $cooked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByCooked($cooked = null, $comparison = null)
    {
        if (is_array($cooked)) {
            $useMinMax = false;
            if (isset($cooked['min'])) {
                $this->addUsingAlias(CiguaPeer::COOKED, $cooked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cooked['max'])) {
                $this->addUsingAlias(CiguaPeer::COOKED, $cooked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::COOKED, $cooked, $comparison);
    }

    /**
     * Filter the query on the ATE_THIS_M column
     *
     * Example usage:
     * <code>
     * $query->filterByAteThisM(1234); // WHERE ATE_THIS_M = 1234
     * $query->filterByAteThisM(array(12, 34)); // WHERE ATE_THIS_M IN (12, 34)
     * $query->filterByAteThisM(array('min' => 12)); // WHERE ATE_THIS_M >= 12
     * $query->filterByAteThisM(array('max' => 12)); // WHERE ATE_THIS_M <= 12
     * </code>
     *
     * @param     mixed $ateThisM The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByAteThisM($ateThisM = null, $comparison = null)
    {
        if (is_array($ateThisM)) {
            $useMinMax = false;
            if (isset($ateThisM['min'])) {
                $this->addUsingAlias(CiguaPeer::ATE_THIS_M, $ateThisM['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ateThisM['max'])) {
                $this->addUsingAlias(CiguaPeer::ATE_THIS_M, $ateThisM['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::ATE_THIS_M, $ateThisM, $comparison);
    }

    /**
     * Filter the query on the FELT_SICK column
     *
     * Example usage:
     * <code>
     * $query->filterByFeltSick(1234); // WHERE FELT_SICK = 1234
     * $query->filterByFeltSick(array(12, 34)); // WHERE FELT_SICK IN (12, 34)
     * $query->filterByFeltSick(array('min' => 12)); // WHERE FELT_SICK >= 12
     * $query->filterByFeltSick(array('max' => 12)); // WHERE FELT_SICK <= 12
     * </code>
     *
     * @param     mixed $feltSick The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFeltSick($feltSick = null, $comparison = null)
    {
        if (is_array($feltSick)) {
            $useMinMax = false;
            if (isset($feltSick['min'])) {
                $this->addUsingAlias(CiguaPeer::FELT_SICK, $feltSick['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feltSick['max'])) {
                $this->addUsingAlias(CiguaPeer::FELT_SICK, $feltSick['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FELT_SICK, $feltSick, $comparison);
    }

    /**
     * Filter the query on the WERE_ADMIT column
     *
     * Example usage:
     * <code>
     * $query->filterByWereAdmit(1234); // WHERE WERE_ADMIT = 1234
     * $query->filterByWereAdmit(array(12, 34)); // WHERE WERE_ADMIT IN (12, 34)
     * $query->filterByWereAdmit(array('min' => 12)); // WHERE WERE_ADMIT >= 12
     * $query->filterByWereAdmit(array('max' => 12)); // WHERE WERE_ADMIT <= 12
     * </code>
     *
     * @param     mixed $wereAdmit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByWereAdmit($wereAdmit = null, $comparison = null)
    {
        if (is_array($wereAdmit)) {
            $useMinMax = false;
            if (isset($wereAdmit['min'])) {
                $this->addUsingAlias(CiguaPeer::WERE_ADMIT, $wereAdmit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wereAdmit['max'])) {
                $this->addUsingAlias(CiguaPeer::WERE_ADMIT, $wereAdmit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::WERE_ADMIT, $wereAdmit, $comparison);
    }

    /**
     * Filter the query on the LOCAL_NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalName('fooValue');   // WHERE LOCAL_NAME = 'fooValue'
     * $query->filterByLocalName('%fooValue%'); // WHERE LOCAL_NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByLocalName($localName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localName)) {
                $localName = str_replace('*', '%', $localName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::LOCAL_NAME, $localName, $comparison);
    }

    /**
     * Filter the query on the ENGLISH_NA column
     *
     * Example usage:
     * <code>
     * $query->filterByEnglishNa('fooValue');   // WHERE ENGLISH_NA = 'fooValue'
     * $query->filterByEnglishNa('%fooValue%'); // WHERE ENGLISH_NA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $englishNa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByEnglishNa($englishNa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($englishNa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $englishNa)) {
                $englishNa = str_replace('*', '%', $englishNa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::ENGLISH_NA, $englishNa, $comparison);
    }

    /**
     * Filter the query on the SCIENTIFIC column
     *
     * Example usage:
     * <code>
     * $query->filterByScientific('fooValue');   // WHERE SCIENTIFIC = 'fooValue'
     * $query->filterByScientific('%fooValue%'); // WHERE SCIENTIFIC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scientific The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByScientific($scientific = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scientific)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scientific)) {
                $scientific = str_replace('*', '%', $scientific);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SCIENTIFIC, $scientific, $comparison);
    }

    /**
     * Filter the query on the VENDOR column
     *
     * Example usage:
     * <code>
     * $query->filterByVendor('fooValue');   // WHERE VENDOR = 'fooValue'
     * $query->filterByVendor('%fooValue%'); // WHERE VENDOR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByVendor($vendor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vendor)) {
                $vendor = str_replace('*', '%', $vendor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::VENDOR, $vendor, $comparison);
    }

    /**
     * Filter the query on the AREACAUGHT column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacaught('fooValue');   // WHERE AREACAUGHT = 'fooValue'
     * $query->filterByAreacaught('%fooValue%'); // WHERE AREACAUGHT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $areacaught The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByAreacaught($areacaught = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($areacaught)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $areacaught)) {
                $areacaught = str_replace('*', '%', $areacaught);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::AREACAUGHT, $areacaught, $comparison);
    }

    /**
     * Filter the query on the DATE_EATEN column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEaten('2011-03-14'); // WHERE DATE_EATEN = '2011-03-14'
     * $query->filterByDateEaten('now'); // WHERE DATE_EATEN = '2011-03-14'
     * $query->filterByDateEaten(array('max' => 'yesterday')); // WHERE DATE_EATEN < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEaten The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDateEaten($dateEaten = null, $comparison = null)
    {
        if (is_array($dateEaten)) {
            $useMinMax = false;
            if (isset($dateEaten['min'])) {
                $this->addUsingAlias(CiguaPeer::DATE_EATEN, $dateEaten['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEaten['max'])) {
                $this->addUsingAlias(CiguaPeer::DATE_EATEN, $dateEaten['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DATE_EATEN, $dateEaten, $comparison);
    }

    /**
     * Filter the query on the TIME_EATEN column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeEaten('fooValue');   // WHERE TIME_EATEN = 'fooValue'
     * $query->filterByTimeEaten('%fooValue%'); // WHERE TIME_EATEN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeEaten The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByTimeEaten($timeEaten = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeEaten)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timeEaten)) {
                $timeEaten = str_replace('*', '%', $timeEaten);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::TIME_EATEN, $timeEaten, $comparison);
    }

    /**
     * Filter the query on the DATE_SICK column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSick('2011-03-14'); // WHERE DATE_SICK = '2011-03-14'
     * $query->filterByDateSick('now'); // WHERE DATE_SICK = '2011-03-14'
     * $query->filterByDateSick(array('max' => 'yesterday')); // WHERE DATE_SICK < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSick The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDateSick($dateSick = null, $comparison = null)
    {
        if (is_array($dateSick)) {
            $useMinMax = false;
            if (isset($dateSick['min'])) {
                $this->addUsingAlias(CiguaPeer::DATE_SICK, $dateSick['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSick['max'])) {
                $this->addUsingAlias(CiguaPeer::DATE_SICK, $dateSick['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DATE_SICK, $dateSick, $comparison);
    }

    /**
     * Filter the query on the TIME_SICK column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeSick('fooValue');   // WHERE TIME_SICK = 'fooValue'
     * $query->filterByTimeSick('%fooValue%'); // WHERE TIME_SICK LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeSick The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByTimeSick($timeSick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeSick)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timeSick)) {
                $timeSick = str_replace('*', '%', $timeSick);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::TIME_SICK, $timeSick, $comparison);
    }

    /**
     * Filter the query on the BURNING_PA column
     *
     * Example usage:
     * <code>
     * $query->filterByBurningPa(1234); // WHERE BURNING_PA = 1234
     * $query->filterByBurningPa(array(12, 34)); // WHERE BURNING_PA IN (12, 34)
     * $query->filterByBurningPa(array('min' => 12)); // WHERE BURNING_PA >= 12
     * $query->filterByBurningPa(array('max' => 12)); // WHERE BURNING_PA <= 12
     * </code>
     *
     * @param     mixed $burningPa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByBurningPa($burningPa = null, $comparison = null)
    {
        if (is_array($burningPa)) {
            $useMinMax = false;
            if (isset($burningPa['min'])) {
                $this->addUsingAlias(CiguaPeer::BURNING_PA, $burningPa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($burningPa['max'])) {
                $this->addUsingAlias(CiguaPeer::BURNING_PA, $burningPa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::BURNING_PA, $burningPa, $comparison);
    }

    /**
     * Filter the query on the TINGLING_N column
     *
     * Example usage:
     * <code>
     * $query->filterByTinglingN(1234); // WHERE TINGLING_N = 1234
     * $query->filterByTinglingN(array(12, 34)); // WHERE TINGLING_N IN (12, 34)
     * $query->filterByTinglingN(array('min' => 12)); // WHERE TINGLING_N >= 12
     * $query->filterByTinglingN(array('max' => 12)); // WHERE TINGLING_N <= 12
     * </code>
     *
     * @param     mixed $tinglingN The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByTinglingN($tinglingN = null, $comparison = null)
    {
        if (is_array($tinglingN)) {
            $useMinMax = false;
            if (isset($tinglingN['min'])) {
                $this->addUsingAlias(CiguaPeer::TINGLING_N, $tinglingN['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tinglingN['max'])) {
                $this->addUsingAlias(CiguaPeer::TINGLING_N, $tinglingN['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::TINGLING_N, $tinglingN, $comparison);
    }

    /**
     * Filter the query on the URINATE_DI column
     *
     * Example usage:
     * <code>
     * $query->filterByUrinateDi(1234); // WHERE URINATE_DI = 1234
     * $query->filterByUrinateDi(array(12, 34)); // WHERE URINATE_DI IN (12, 34)
     * $query->filterByUrinateDi(array('min' => 12)); // WHERE URINATE_DI >= 12
     * $query->filterByUrinateDi(array('max' => 12)); // WHERE URINATE_DI <= 12
     * </code>
     *
     * @param     mixed $urinateDi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByUrinateDi($urinateDi = null, $comparison = null)
    {
        if (is_array($urinateDi)) {
            $useMinMax = false;
            if (isset($urinateDi['min'])) {
                $this->addUsingAlias(CiguaPeer::URINATE_DI, $urinateDi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($urinateDi['max'])) {
                $this->addUsingAlias(CiguaPeer::URINATE_DI, $urinateDi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::URINATE_DI, $urinateDi, $comparison);
    }

    /**
     * Filter the query on the DIFFICULTW column
     *
     * Example usage:
     * <code>
     * $query->filterByDifficultw(1234); // WHERE DIFFICULTW = 1234
     * $query->filterByDifficultw(array(12, 34)); // WHERE DIFFICULTW IN (12, 34)
     * $query->filterByDifficultw(array('min' => 12)); // WHERE DIFFICULTW >= 12
     * $query->filterByDifficultw(array('max' => 12)); // WHERE DIFFICULTW <= 12
     * </code>
     *
     * @param     mixed $difficultw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDifficultw($difficultw = null, $comparison = null)
    {
        if (is_array($difficultw)) {
            $useMinMax = false;
            if (isset($difficultw['min'])) {
                $this->addUsingAlias(CiguaPeer::DIFFICULTW, $difficultw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($difficultw['max'])) {
                $this->addUsingAlias(CiguaPeer::DIFFICULTW, $difficultw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DIFFICULTW, $difficultw, $comparison);
    }

    /**
     * Filter the query on the DIFFICULTT column
     *
     * Example usage:
     * <code>
     * $query->filterByDifficultt(1234); // WHERE DIFFICULTT = 1234
     * $query->filterByDifficultt(array(12, 34)); // WHERE DIFFICULTT IN (12, 34)
     * $query->filterByDifficultt(array('min' => 12)); // WHERE DIFFICULTT >= 12
     * $query->filterByDifficultt(array('max' => 12)); // WHERE DIFFICULTT <= 12
     * </code>
     *
     * @param     mixed $difficultt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDifficultt($difficultt = null, $comparison = null)
    {
        if (is_array($difficultt)) {
            $useMinMax = false;
            if (isset($difficultt['min'])) {
                $this->addUsingAlias(CiguaPeer::DIFFICULTT, $difficultt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($difficultt['max'])) {
                $this->addUsingAlias(CiguaPeer::DIFFICULTT, $difficultt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DIFFICULTT, $difficultt, $comparison);
    }

    /**
     * Filter the query on the DIFFICULTY column
     *
     * Example usage:
     * <code>
     * $query->filterByDifficulty(1234); // WHERE DIFFICULTY = 1234
     * $query->filterByDifficulty(array(12, 34)); // WHERE DIFFICULTY IN (12, 34)
     * $query->filterByDifficulty(array('min' => 12)); // WHERE DIFFICULTY >= 12
     * $query->filterByDifficulty(array('max' => 12)); // WHERE DIFFICULTY <= 12
     * </code>
     *
     * @param     mixed $difficulty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDifficulty($difficulty = null, $comparison = null)
    {
        if (is_array($difficulty)) {
            $useMinMax = false;
            if (isset($difficulty['min'])) {
                $this->addUsingAlias(CiguaPeer::DIFFICULTY, $difficulty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($difficulty['max'])) {
                $this->addUsingAlias(CiguaPeer::DIFFICULTY, $difficulty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DIFFICULTY, $difficulty, $comparison);
    }

    /**
     * Filter the query on the EYE_IRRITA column
     *
     * Example usage:
     * <code>
     * $query->filterByEyeIrrita(1234); // WHERE EYE_IRRITA = 1234
     * $query->filterByEyeIrrita(array(12, 34)); // WHERE EYE_IRRITA IN (12, 34)
     * $query->filterByEyeIrrita(array('min' => 12)); // WHERE EYE_IRRITA >= 12
     * $query->filterByEyeIrrita(array('max' => 12)); // WHERE EYE_IRRITA <= 12
     * </code>
     *
     * @param     mixed $eyeIrrita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByEyeIrrita($eyeIrrita = null, $comparison = null)
    {
        if (is_array($eyeIrrita)) {
            $useMinMax = false;
            if (isset($eyeIrrita['min'])) {
                $this->addUsingAlias(CiguaPeer::EYE_IRRITA, $eyeIrrita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyeIrrita['max'])) {
                $this->addUsingAlias(CiguaPeer::EYE_IRRITA, $eyeIrrita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::EYE_IRRITA, $eyeIrrita, $comparison);
    }

    /**
     * Filter the query on the PIN_PRICKI column
     *
     * Example usage:
     * <code>
     * $query->filterByPinPricki(1234); // WHERE PIN_PRICKI = 1234
     * $query->filterByPinPricki(array(12, 34)); // WHERE PIN_PRICKI IN (12, 34)
     * $query->filterByPinPricki(array('min' => 12)); // WHERE PIN_PRICKI >= 12
     * $query->filterByPinPricki(array('max' => 12)); // WHERE PIN_PRICKI <= 12
     * </code>
     *
     * @param     mixed $pinPricki The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByPinPricki($pinPricki = null, $comparison = null)
    {
        if (is_array($pinPricki)) {
            $useMinMax = false;
            if (isset($pinPricki['min'])) {
                $this->addUsingAlias(CiguaPeer::PIN_PRICKI, $pinPricki['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pinPricki['max'])) {
                $this->addUsingAlias(CiguaPeer::PIN_PRICKI, $pinPricki['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::PIN_PRICKI, $pinPricki, $comparison);
    }

    /**
     * Filter the query on the STRANGE_TA column
     *
     * Example usage:
     * <code>
     * $query->filterByStrangeTa(1234); // WHERE STRANGE_TA = 1234
     * $query->filterByStrangeTa(array(12, 34)); // WHERE STRANGE_TA IN (12, 34)
     * $query->filterByStrangeTa(array('min' => 12)); // WHERE STRANGE_TA >= 12
     * $query->filterByStrangeTa(array('max' => 12)); // WHERE STRANGE_TA <= 12
     * </code>
     *
     * @param     mixed $strangeTa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByStrangeTa($strangeTa = null, $comparison = null)
    {
        if (is_array($strangeTa)) {
            $useMinMax = false;
            if (isset($strangeTa['min'])) {
                $this->addUsingAlias(CiguaPeer::STRANGE_TA, $strangeTa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($strangeTa['max'])) {
                $this->addUsingAlias(CiguaPeer::STRANGE_TA, $strangeTa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::STRANGE_TA, $strangeTa, $comparison);
    }

    /**
     * Filter the query on the SKIN_ITCHI column
     *
     * Example usage:
     * <code>
     * $query->filterBySkinItchi(1234); // WHERE SKIN_ITCHI = 1234
     * $query->filterBySkinItchi(array(12, 34)); // WHERE SKIN_ITCHI IN (12, 34)
     * $query->filterBySkinItchi(array('min' => 12)); // WHERE SKIN_ITCHI >= 12
     * $query->filterBySkinItchi(array('max' => 12)); // WHERE SKIN_ITCHI <= 12
     * </code>
     *
     * @param     mixed $skinItchi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySkinItchi($skinItchi = null, $comparison = null)
    {
        if (is_array($skinItchi)) {
            $useMinMax = false;
            if (isset($skinItchi['min'])) {
                $this->addUsingAlias(CiguaPeer::SKIN_ITCHI, $skinItchi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($skinItchi['max'])) {
                $this->addUsingAlias(CiguaPeer::SKIN_ITCHI, $skinItchi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SKIN_ITCHI, $skinItchi, $comparison);
    }

    /**
     * Filter the query on the EXCESS_SAL column
     *
     * Example usage:
     * <code>
     * $query->filterByExcessSal(1234); // WHERE EXCESS_SAL = 1234
     * $query->filterByExcessSal(array(12, 34)); // WHERE EXCESS_SAL IN (12, 34)
     * $query->filterByExcessSal(array('min' => 12)); // WHERE EXCESS_SAL >= 12
     * $query->filterByExcessSal(array('max' => 12)); // WHERE EXCESS_SAL <= 12
     * </code>
     *
     * @param     mixed $excessSal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByExcessSal($excessSal = null, $comparison = null)
    {
        if (is_array($excessSal)) {
            $useMinMax = false;
            if (isset($excessSal['min'])) {
                $this->addUsingAlias(CiguaPeer::EXCESS_SAL, $excessSal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($excessSal['max'])) {
                $this->addUsingAlias(CiguaPeer::EXCESS_SAL, $excessSal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::EXCESS_SAL, $excessSal, $comparison);
    }

    /**
     * Filter the query on the EXCESS_SWT column
     *
     * Example usage:
     * <code>
     * $query->filterByExcessSwt(1234); // WHERE EXCESS_SWT = 1234
     * $query->filterByExcessSwt(array(12, 34)); // WHERE EXCESS_SWT IN (12, 34)
     * $query->filterByExcessSwt(array('min' => 12)); // WHERE EXCESS_SWT >= 12
     * $query->filterByExcessSwt(array('max' => 12)); // WHERE EXCESS_SWT <= 12
     * </code>
     *
     * @param     mixed $excessSwt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByExcessSwt($excessSwt = null, $comparison = null)
    {
        if (is_array($excessSwt)) {
            $useMinMax = false;
            if (isset($excessSwt['min'])) {
                $this->addUsingAlias(CiguaPeer::EXCESS_SWT, $excessSwt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($excessSwt['max'])) {
                $this->addUsingAlias(CiguaPeer::EXCESS_SWT, $excessSwt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::EXCESS_SWT, $excessSwt, $comparison);
    }

    /**
     * Filter the query on the DIARRHOEA column
     *
     * Example usage:
     * <code>
     * $query->filterByDiarrhoea(1234); // WHERE DIARRHOEA = 1234
     * $query->filterByDiarrhoea(array(12, 34)); // WHERE DIARRHOEA IN (12, 34)
     * $query->filterByDiarrhoea(array('min' => 12)); // WHERE DIARRHOEA >= 12
     * $query->filterByDiarrhoea(array('max' => 12)); // WHERE DIARRHOEA <= 12
     * </code>
     *
     * @param     mixed $diarrhoea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDiarrhoea($diarrhoea = null, $comparison = null)
    {
        if (is_array($diarrhoea)) {
            $useMinMax = false;
            if (isset($diarrhoea['min'])) {
                $this->addUsingAlias(CiguaPeer::DIARRHOEA, $diarrhoea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diarrhoea['max'])) {
                $this->addUsingAlias(CiguaPeer::DIARRHOEA, $diarrhoea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DIARRHOEA, $diarrhoea, $comparison);
    }

    /**
     * Filter the query on the VOMITING column
     *
     * Example usage:
     * <code>
     * $query->filterByVomiting(1234); // WHERE VOMITING = 1234
     * $query->filterByVomiting(array(12, 34)); // WHERE VOMITING IN (12, 34)
     * $query->filterByVomiting(array('min' => 12)); // WHERE VOMITING >= 12
     * $query->filterByVomiting(array('max' => 12)); // WHERE VOMITING <= 12
     * </code>
     *
     * @param     mixed $vomiting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByVomiting($vomiting = null, $comparison = null)
    {
        if (is_array($vomiting)) {
            $useMinMax = false;
            if (isset($vomiting['min'])) {
                $this->addUsingAlias(CiguaPeer::VOMITING, $vomiting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vomiting['max'])) {
                $this->addUsingAlias(CiguaPeer::VOMITING, $vomiting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::VOMITING, $vomiting, $comparison);
    }

    /**
     * Filter the query on the FEVER_CHIL column
     *
     * Example usage:
     * <code>
     * $query->filterByFeverChil(1234); // WHERE FEVER_CHIL = 1234
     * $query->filterByFeverChil(array(12, 34)); // WHERE FEVER_CHIL IN (12, 34)
     * $query->filterByFeverChil(array('min' => 12)); // WHERE FEVER_CHIL >= 12
     * $query->filterByFeverChil(array('max' => 12)); // WHERE FEVER_CHIL <= 12
     * </code>
     *
     * @param     mixed $feverChil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFeverChil($feverChil = null, $comparison = null)
    {
        if (is_array($feverChil)) {
            $useMinMax = false;
            if (isset($feverChil['min'])) {
                $this->addUsingAlias(CiguaPeer::FEVER_CHIL, $feverChil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feverChil['max'])) {
                $this->addUsingAlias(CiguaPeer::FEVER_CHIL, $feverChil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FEVER_CHIL, $feverChil, $comparison);
    }

    /**
     * Filter the query on the HEADACHE column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadache(1234); // WHERE HEADACHE = 1234
     * $query->filterByHeadache(array(12, 34)); // WHERE HEADACHE IN (12, 34)
     * $query->filterByHeadache(array('min' => 12)); // WHERE HEADACHE >= 12
     * $query->filterByHeadache(array('max' => 12)); // WHERE HEADACHE <= 12
     * </code>
     *
     * @param     mixed $headache The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByHeadache($headache = null, $comparison = null)
    {
        if (is_array($headache)) {
            $useMinMax = false;
            if (isset($headache['min'])) {
                $this->addUsingAlias(CiguaPeer::HEADACHE, $headache['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headache['max'])) {
                $this->addUsingAlias(CiguaPeer::HEADACHE, $headache['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::HEADACHE, $headache, $comparison);
    }

    /**
     * Filter the query on the JOINT_ACHE column
     *
     * Example usage:
     * <code>
     * $query->filterByJointAche(1234); // WHERE JOINT_ACHE = 1234
     * $query->filterByJointAche(array(12, 34)); // WHERE JOINT_ACHE IN (12, 34)
     * $query->filterByJointAche(array('min' => 12)); // WHERE JOINT_ACHE >= 12
     * $query->filterByJointAche(array('max' => 12)); // WHERE JOINT_ACHE <= 12
     * </code>
     *
     * @param     mixed $jointAche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByJointAche($jointAche = null, $comparison = null)
    {
        if (is_array($jointAche)) {
            $useMinMax = false;
            if (isset($jointAche['min'])) {
                $this->addUsingAlias(CiguaPeer::JOINT_ACHE, $jointAche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jointAche['max'])) {
                $this->addUsingAlias(CiguaPeer::JOINT_ACHE, $jointAche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::JOINT_ACHE, $jointAche, $comparison);
    }

    /**
     * Filter the query on the MUSCLE_CRA column
     *
     * Example usage:
     * <code>
     * $query->filterByMuscleCra(1234); // WHERE MUSCLE_CRA = 1234
     * $query->filterByMuscleCra(array(12, 34)); // WHERE MUSCLE_CRA IN (12, 34)
     * $query->filterByMuscleCra(array('min' => 12)); // WHERE MUSCLE_CRA >= 12
     * $query->filterByMuscleCra(array('max' => 12)); // WHERE MUSCLE_CRA <= 12
     * </code>
     *
     * @param     mixed $muscleCra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByMuscleCra($muscleCra = null, $comparison = null)
    {
        if (is_array($muscleCra)) {
            $useMinMax = false;
            if (isset($muscleCra['min'])) {
                $this->addUsingAlias(CiguaPeer::MUSCLE_CRA, $muscleCra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($muscleCra['max'])) {
                $this->addUsingAlias(CiguaPeer::MUSCLE_CRA, $muscleCra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::MUSCLE_CRA, $muscleCra, $comparison);
    }

    /**
     * Filter the query on the PULSE column
     *
     * Example usage:
     * <code>
     * $query->filterByPulse(1234); // WHERE PULSE = 1234
     * $query->filterByPulse(array(12, 34)); // WHERE PULSE IN (12, 34)
     * $query->filterByPulse(array('min' => 12)); // WHERE PULSE >= 12
     * $query->filterByPulse(array('max' => 12)); // WHERE PULSE <= 12
     * </code>
     *
     * @param     mixed $pulse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByPulse($pulse = null, $comparison = null)
    {
        if (is_array($pulse)) {
            $useMinMax = false;
            if (isset($pulse['min'])) {
                $this->addUsingAlias(CiguaPeer::PULSE, $pulse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pulse['max'])) {
                $this->addUsingAlias(CiguaPeer::PULSE, $pulse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::PULSE, $pulse, $comparison);
    }

    /**
     * Filter the query on the SYSTOLIC column
     *
     * Example usage:
     * <code>
     * $query->filterBySystolic(1234); // WHERE SYSTOLIC = 1234
     * $query->filterBySystolic(array(12, 34)); // WHERE SYSTOLIC IN (12, 34)
     * $query->filterBySystolic(array('min' => 12)); // WHERE SYSTOLIC >= 12
     * $query->filterBySystolic(array('max' => 12)); // WHERE SYSTOLIC <= 12
     * </code>
     *
     * @param     mixed $systolic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySystolic($systolic = null, $comparison = null)
    {
        if (is_array($systolic)) {
            $useMinMax = false;
            if (isset($systolic['min'])) {
                $this->addUsingAlias(CiguaPeer::SYSTOLIC, $systolic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($systolic['max'])) {
                $this->addUsingAlias(CiguaPeer::SYSTOLIC, $systolic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SYSTOLIC, $systolic, $comparison);
    }

    /**
     * Filter the query on the DIASTOLIC column
     *
     * Example usage:
     * <code>
     * $query->filterByDiastolic(1234); // WHERE DIASTOLIC = 1234
     * $query->filterByDiastolic(array(12, 34)); // WHERE DIASTOLIC IN (12, 34)
     * $query->filterByDiastolic(array('min' => 12)); // WHERE DIASTOLIC >= 12
     * $query->filterByDiastolic(array('max' => 12)); // WHERE DIASTOLIC <= 12
     * </code>
     *
     * @param     mixed $diastolic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDiastolic($diastolic = null, $comparison = null)
    {
        if (is_array($diastolic)) {
            $useMinMax = false;
            if (isset($diastolic['min'])) {
                $this->addUsingAlias(CiguaPeer::DIASTOLIC, $diastolic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diastolic['max'])) {
                $this->addUsingAlias(CiguaPeer::DIASTOLIC, $diastolic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DIASTOLIC, $diastolic, $comparison);
    }

    /**
     * Filter the query on the PUPILS column
     *
     * Example usage:
     * <code>
     * $query->filterByPupils(1234); // WHERE PUPILS = 1234
     * $query->filterByPupils(array(12, 34)); // WHERE PUPILS IN (12, 34)
     * $query->filterByPupils(array('min' => 12)); // WHERE PUPILS >= 12
     * $query->filterByPupils(array('max' => 12)); // WHERE PUPILS <= 12
     * </code>
     *
     * @param     mixed $pupils The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByPupils($pupils = null, $comparison = null)
    {
        if (is_array($pupils)) {
            $useMinMax = false;
            if (isset($pupils['min'])) {
                $this->addUsingAlias(CiguaPeer::PUPILS, $pupils['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pupils['max'])) {
                $this->addUsingAlias(CiguaPeer::PUPILS, $pupils['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::PUPILS, $pupils, $comparison);
    }

    /**
     * Filter the query on the DEATH column
     *
     * Example usage:
     * <code>
     * $query->filterByDeath(1234); // WHERE DEATH = 1234
     * $query->filterByDeath(array(12, 34)); // WHERE DEATH IN (12, 34)
     * $query->filterByDeath(array('min' => 12)); // WHERE DEATH >= 12
     * $query->filterByDeath(array('max' => 12)); // WHERE DEATH <= 12
     * </code>
     *
     * @param     mixed $death The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDeath($death = null, $comparison = null)
    {
        if (is_array($death)) {
            $useMinMax = false;
            if (isset($death['min'])) {
                $this->addUsingAlias(CiguaPeer::DEATH, $death['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($death['max'])) {
                $this->addUsingAlias(CiguaPeer::DEATH, $death['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DEATH, $death, $comparison);
    }

    /**
     * Filter the query on the COMMENTS column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE COMMENTS = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE COMMENTS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CiguaPeer::COMMENTS, $comments, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(CiguaPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(CiguaPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::FAMCODE, $famcode, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CiguaPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CiguaPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguaPeer::SPECIES, $species, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CiguaPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CiguaPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::ENTERED, $entered, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CiguaPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CiguaPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CiguaPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CiguaPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::MODIFIED, $modified, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CiguaPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CiguaPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CiguaPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CiguaPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::EXPERT, $expert, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(CiguaPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(CiguaPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return CiguaQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CiguaPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CiguaPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguaPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cigua $cigua Object to remove from the list of results
     *
     * @return CiguaQuery The current query, for fluid interface
     */
    public function prune($cigua = null)
    {
        if ($cigua) {
            $this->addUsingAlias(CiguaPeer::AUTOCTR, $cigua->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
