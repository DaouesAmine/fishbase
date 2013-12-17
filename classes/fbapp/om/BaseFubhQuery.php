<?php


/**
 * Base class that represents a query for the 'fubh' table.
 *
 *
 *
 * @method FubhQuery orderByPrintDateByskit($order = Criteria::ASC) Order by the print_date_bySkit column
 * @method FubhQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method FubhQuery orderByPeriod($order = Criteria::ASC) Order by the Period column
 * @method FubhQuery orderByExtantFinfish1($order = Criteria::ASC) Order by the extant_finfish_1 column
 * @method FubhQuery orderByExtantFinfish2($order = Criteria::ASC) Order by the extant_finfish_2 column
 * @method FubhQuery orderByExtantFinfish3($order = Criteria::ASC) Order by the extant_finfish_3 column
 * @method FubhQuery orderByExtantFinfish4($order = Criteria::ASC) Order by the extant_finfish_4 column
 * @method FubhQuery orderByExtantFinfish5($order = Criteria::ASC) Order by the extant_finfish_5 column
 * @method FubhQuery orderByUsedFisheries1($order = Criteria::ASC) Order by the used_fisheries_1 column
 * @method FubhQuery orderByUsedFisheries2($order = Criteria::ASC) Order by the used_fisheries_2 column
 * @method FubhQuery orderByUsedFisheries3($order = Criteria::ASC) Order by the used_fisheries_3 column
 * @method FubhQuery orderByUsedFisheries4($order = Criteria::ASC) Order by the used_fisheries_4 column
 * @method FubhQuery orderByUsedFisheries5($order = Criteria::ASC) Order by the used_fisheries_5 column
 * @method FubhQuery orderByUsedAquac1($order = Criteria::ASC) Order by the used_aquac_1 column
 * @method FubhQuery orderByUsedAquac2($order = Criteria::ASC) Order by the used_aquac_2 column
 * @method FubhQuery orderByUsedAquac3($order = Criteria::ASC) Order by the used_aquac_3 column
 * @method FubhQuery orderByUsedAquac4($order = Criteria::ASC) Order by the used_aquac_4 column
 * @method FubhQuery orderByUsedAquac5($order = Criteria::ASC) Order by the used_aquac_5 column
 * @method FubhQuery orderByUsedBait1($order = Criteria::ASC) Order by the used_bait_1 column
 * @method FubhQuery orderByUsedBait2($order = Criteria::ASC) Order by the used_bait_2 column
 * @method FubhQuery orderByUsedBait3($order = Criteria::ASC) Order by the used_bait_3 column
 * @method FubhQuery orderByUsedBait4($order = Criteria::ASC) Order by the used_bait_4 column
 * @method FubhQuery orderByUsedBait5($order = Criteria::ASC) Order by the used_bait_5 column
 * @method FubhQuery orderByUsedTrade1($order = Criteria::ASC) Order by the used_trade_1 column
 * @method FubhQuery orderByUsedTrade2($order = Criteria::ASC) Order by the used_trade_2 column
 * @method FubhQuery orderByUsedTrade3($order = Criteria::ASC) Order by the used_trade_3 column
 * @method FubhQuery orderByUsedTrade4($order = Criteria::ASC) Order by the used_trade_4 column
 * @method FubhQuery orderByUsedTrade5($order = Criteria::ASC) Order by the used_trade_5 column
 * @method FubhQuery orderByTradeMarine1($order = Criteria::ASC) Order by the trade_marine_1 column
 * @method FubhQuery orderByTradeMarine2($order = Criteria::ASC) Order by the trade_marine_2 column
 * @method FubhQuery orderByTradeMarine3($order = Criteria::ASC) Order by the trade_marine_3 column
 * @method FubhQuery orderByTradeMarine4($order = Criteria::ASC) Order by the trade_marine_4 column
 * @method FubhQuery orderByTradeMarine5($order = Criteria::ASC) Order by the trade_marine_5 column
 * @method FubhQuery orderByTradeFresh1($order = Criteria::ASC) Order by the trade_fresh_1 column
 * @method FubhQuery orderByTradeFresh2($order = Criteria::ASC) Order by the trade_fresh_2 column
 * @method FubhQuery orderByTradeFresh3($order = Criteria::ASC) Order by the trade_fresh_3 column
 * @method FubhQuery orderByTradeFresh4($order = Criteria::ASC) Order by the trade_fresh_4 column
 * @method FubhQuery orderByTradeFresh5($order = Criteria::ASC) Order by the trade_fresh_5 column
 * @method FubhQuery orderByTradeBred1($order = Criteria::ASC) Order by the trade_bred_1 column
 * @method FubhQuery orderByTradeBred2($order = Criteria::ASC) Order by the trade_bred_2 column
 * @method FubhQuery orderByTradeBred3($order = Criteria::ASC) Order by the trade_bred_3 column
 * @method FubhQuery orderByTradeBred4($order = Criteria::ASC) Order by the trade_bred_4 column
 * @method FubhQuery orderByTradeBred5($order = Criteria::ASC) Order by the trade_bred_5 column
 * @method FubhQuery orderByUsedSport1($order = Criteria::ASC) Order by the used_sport_1 column
 * @method FubhQuery orderByUsedSport2($order = Criteria::ASC) Order by the used_sport_2 column
 * @method FubhQuery orderByUsedSport3($order = Criteria::ASC) Order by the used_sport_3 column
 * @method FubhQuery orderByUsedSport4($order = Criteria::ASC) Order by the used_sport_4 column
 * @method FubhQuery orderByUsedSport5($order = Criteria::ASC) Order by the used_sport_5 column
 * @method FubhQuery orderByTotUsed1($order = Criteria::ASC) Order by the tot_used_1 column
 * @method FubhQuery orderByTotUsed2($order = Criteria::ASC) Order by the tot_used_2 column
 * @method FubhQuery orderByTotUsed3($order = Criteria::ASC) Order by the tot_used_3 column
 * @method FubhQuery orderByTotUsed4($order = Criteria::ASC) Order by the tot_used_4 column
 * @method FubhQuery orderByTotUsed5($order = Criteria::ASC) Order by the tot_used_5 column
 * @method FubhQuery orderByThreat1($order = Criteria::ASC) Order by the threat_1 column
 * @method FubhQuery orderByThreat2($order = Criteria::ASC) Order by the threat_2 column
 * @method FubhQuery orderByThreat3($order = Criteria::ASC) Order by the threat_3 column
 * @method FubhQuery orderByThreat4($order = Criteria::ASC) Order by the threat_4 column
 * @method FubhQuery orderByThreat5($order = Criteria::ASC) Order by the threat_5 column
 * @method FubhQuery orderByIntro1($order = Criteria::ASC) Order by the intro_1 column
 * @method FubhQuery orderByIntro2($order = Criteria::ASC) Order by the intro_2 column
 * @method FubhQuery orderByIntro3($order = Criteria::ASC) Order by the intro_3 column
 * @method FubhQuery orderByIntro4($order = Criteria::ASC) Order by the intro_4 column
 * @method FubhQuery orderByIntro5($order = Criteria::ASC) Order by the intro_5 column
 * @method FubhQuery orderByDanger1($order = Criteria::ASC) Order by the danger_1 column
 * @method FubhQuery orderByDanger2($order = Criteria::ASC) Order by the danger_2 column
 * @method FubhQuery orderByDanger3($order = Criteria::ASC) Order by the danger_3 column
 * @method FubhQuery orderByDanger4($order = Criteria::ASC) Order by the danger_4 column
 * @method FubhQuery orderByDanger5($order = Criteria::ASC) Order by the danger_5 column
 * @method FubhQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method FubhQuery orderByNoSpecies($order = Criteria::ASC) Order by the no_species column
 * @method FubhQuery orderByNoFresh($order = Criteria::ASC) Order by the no_fresh column
 * @method FubhQuery orderByNoMarine($order = Criteria::ASC) Order by the no_marine column
 * @method FubhQuery orderByNoBrackish($order = Criteria::ASC) Order by the no_brackish column
 * @method FubhQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FubhQuery groupByPrintDateByskit() Group by the print_date_bySkit column
 * @method FubhQuery groupByActive() Group by the active column
 * @method FubhQuery groupByPeriod() Group by the Period column
 * @method FubhQuery groupByExtantFinfish1() Group by the extant_finfish_1 column
 * @method FubhQuery groupByExtantFinfish2() Group by the extant_finfish_2 column
 * @method FubhQuery groupByExtantFinfish3() Group by the extant_finfish_3 column
 * @method FubhQuery groupByExtantFinfish4() Group by the extant_finfish_4 column
 * @method FubhQuery groupByExtantFinfish5() Group by the extant_finfish_5 column
 * @method FubhQuery groupByUsedFisheries1() Group by the used_fisheries_1 column
 * @method FubhQuery groupByUsedFisheries2() Group by the used_fisheries_2 column
 * @method FubhQuery groupByUsedFisheries3() Group by the used_fisheries_3 column
 * @method FubhQuery groupByUsedFisheries4() Group by the used_fisheries_4 column
 * @method FubhQuery groupByUsedFisheries5() Group by the used_fisheries_5 column
 * @method FubhQuery groupByUsedAquac1() Group by the used_aquac_1 column
 * @method FubhQuery groupByUsedAquac2() Group by the used_aquac_2 column
 * @method FubhQuery groupByUsedAquac3() Group by the used_aquac_3 column
 * @method FubhQuery groupByUsedAquac4() Group by the used_aquac_4 column
 * @method FubhQuery groupByUsedAquac5() Group by the used_aquac_5 column
 * @method FubhQuery groupByUsedBait1() Group by the used_bait_1 column
 * @method FubhQuery groupByUsedBait2() Group by the used_bait_2 column
 * @method FubhQuery groupByUsedBait3() Group by the used_bait_3 column
 * @method FubhQuery groupByUsedBait4() Group by the used_bait_4 column
 * @method FubhQuery groupByUsedBait5() Group by the used_bait_5 column
 * @method FubhQuery groupByUsedTrade1() Group by the used_trade_1 column
 * @method FubhQuery groupByUsedTrade2() Group by the used_trade_2 column
 * @method FubhQuery groupByUsedTrade3() Group by the used_trade_3 column
 * @method FubhQuery groupByUsedTrade4() Group by the used_trade_4 column
 * @method FubhQuery groupByUsedTrade5() Group by the used_trade_5 column
 * @method FubhQuery groupByTradeMarine1() Group by the trade_marine_1 column
 * @method FubhQuery groupByTradeMarine2() Group by the trade_marine_2 column
 * @method FubhQuery groupByTradeMarine3() Group by the trade_marine_3 column
 * @method FubhQuery groupByTradeMarine4() Group by the trade_marine_4 column
 * @method FubhQuery groupByTradeMarine5() Group by the trade_marine_5 column
 * @method FubhQuery groupByTradeFresh1() Group by the trade_fresh_1 column
 * @method FubhQuery groupByTradeFresh2() Group by the trade_fresh_2 column
 * @method FubhQuery groupByTradeFresh3() Group by the trade_fresh_3 column
 * @method FubhQuery groupByTradeFresh4() Group by the trade_fresh_4 column
 * @method FubhQuery groupByTradeFresh5() Group by the trade_fresh_5 column
 * @method FubhQuery groupByTradeBred1() Group by the trade_bred_1 column
 * @method FubhQuery groupByTradeBred2() Group by the trade_bred_2 column
 * @method FubhQuery groupByTradeBred3() Group by the trade_bred_3 column
 * @method FubhQuery groupByTradeBred4() Group by the trade_bred_4 column
 * @method FubhQuery groupByTradeBred5() Group by the trade_bred_5 column
 * @method FubhQuery groupByUsedSport1() Group by the used_sport_1 column
 * @method FubhQuery groupByUsedSport2() Group by the used_sport_2 column
 * @method FubhQuery groupByUsedSport3() Group by the used_sport_3 column
 * @method FubhQuery groupByUsedSport4() Group by the used_sport_4 column
 * @method FubhQuery groupByUsedSport5() Group by the used_sport_5 column
 * @method FubhQuery groupByTotUsed1() Group by the tot_used_1 column
 * @method FubhQuery groupByTotUsed2() Group by the tot_used_2 column
 * @method FubhQuery groupByTotUsed3() Group by the tot_used_3 column
 * @method FubhQuery groupByTotUsed4() Group by the tot_used_4 column
 * @method FubhQuery groupByTotUsed5() Group by the tot_used_5 column
 * @method FubhQuery groupByThreat1() Group by the threat_1 column
 * @method FubhQuery groupByThreat2() Group by the threat_2 column
 * @method FubhQuery groupByThreat3() Group by the threat_3 column
 * @method FubhQuery groupByThreat4() Group by the threat_4 column
 * @method FubhQuery groupByThreat5() Group by the threat_5 column
 * @method FubhQuery groupByIntro1() Group by the intro_1 column
 * @method FubhQuery groupByIntro2() Group by the intro_2 column
 * @method FubhQuery groupByIntro3() Group by the intro_3 column
 * @method FubhQuery groupByIntro4() Group by the intro_4 column
 * @method FubhQuery groupByIntro5() Group by the intro_5 column
 * @method FubhQuery groupByDanger1() Group by the danger_1 column
 * @method FubhQuery groupByDanger2() Group by the danger_2 column
 * @method FubhQuery groupByDanger3() Group by the danger_3 column
 * @method FubhQuery groupByDanger4() Group by the danger_4 column
 * @method FubhQuery groupByDanger5() Group by the danger_5 column
 * @method FubhQuery groupByNote() Group by the note column
 * @method FubhQuery groupByNoSpecies() Group by the no_species column
 * @method FubhQuery groupByNoFresh() Group by the no_fresh column
 * @method FubhQuery groupByNoMarine() Group by the no_marine column
 * @method FubhQuery groupByNoBrackish() Group by the no_brackish column
 * @method FubhQuery groupByTs() Group by the TS column
 *
 * @method FubhQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FubhQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FubhQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Fubh findOne(PropelPDO $con = null) Return the first Fubh matching the query
 * @method Fubh findOneOrCreate(PropelPDO $con = null) Return the first Fubh matching the query, or a new Fubh object populated from the query conditions when no match is found
 *
 * @method Fubh findOneByPrintDateByskit(string $print_date_bySkit) Return the first Fubh filtered by the print_date_bySkit column
 * @method Fubh findOneByActive(boolean $active) Return the first Fubh filtered by the active column
 * @method Fubh findOneByExtantFinfish1(int $extant_finfish_1) Return the first Fubh filtered by the extant_finfish_1 column
 * @method Fubh findOneByExtantFinfish2(double $extant_finfish_2) Return the first Fubh filtered by the extant_finfish_2 column
 * @method Fubh findOneByExtantFinfish3(int $extant_finfish_3) Return the first Fubh filtered by the extant_finfish_3 column
 * @method Fubh findOneByExtantFinfish4(double $extant_finfish_4) Return the first Fubh filtered by the extant_finfish_4 column
 * @method Fubh findOneByExtantFinfish5(string $extant_finfish_5) Return the first Fubh filtered by the extant_finfish_5 column
 * @method Fubh findOneByUsedFisheries1(int $used_fisheries_1) Return the first Fubh filtered by the used_fisheries_1 column
 * @method Fubh findOneByUsedFisheries2(double $used_fisheries_2) Return the first Fubh filtered by the used_fisheries_2 column
 * @method Fubh findOneByUsedFisheries3(int $used_fisheries_3) Return the first Fubh filtered by the used_fisheries_3 column
 * @method Fubh findOneByUsedFisheries4(double $used_fisheries_4) Return the first Fubh filtered by the used_fisheries_4 column
 * @method Fubh findOneByUsedFisheries5(string $used_fisheries_5) Return the first Fubh filtered by the used_fisheries_5 column
 * @method Fubh findOneByUsedAquac1(int $used_aquac_1) Return the first Fubh filtered by the used_aquac_1 column
 * @method Fubh findOneByUsedAquac2(double $used_aquac_2) Return the first Fubh filtered by the used_aquac_2 column
 * @method Fubh findOneByUsedAquac3(int $used_aquac_3) Return the first Fubh filtered by the used_aquac_3 column
 * @method Fubh findOneByUsedAquac4(double $used_aquac_4) Return the first Fubh filtered by the used_aquac_4 column
 * @method Fubh findOneByUsedAquac5(string $used_aquac_5) Return the first Fubh filtered by the used_aquac_5 column
 * @method Fubh findOneByUsedBait1(int $used_bait_1) Return the first Fubh filtered by the used_bait_1 column
 * @method Fubh findOneByUsedBait2(double $used_bait_2) Return the first Fubh filtered by the used_bait_2 column
 * @method Fubh findOneByUsedBait3(int $used_bait_3) Return the first Fubh filtered by the used_bait_3 column
 * @method Fubh findOneByUsedBait4(double $used_bait_4) Return the first Fubh filtered by the used_bait_4 column
 * @method Fubh findOneByUsedBait5(string $used_bait_5) Return the first Fubh filtered by the used_bait_5 column
 * @method Fubh findOneByUsedTrade1(int $used_trade_1) Return the first Fubh filtered by the used_trade_1 column
 * @method Fubh findOneByUsedTrade2(double $used_trade_2) Return the first Fubh filtered by the used_trade_2 column
 * @method Fubh findOneByUsedTrade3(int $used_trade_3) Return the first Fubh filtered by the used_trade_3 column
 * @method Fubh findOneByUsedTrade4(double $used_trade_4) Return the first Fubh filtered by the used_trade_4 column
 * @method Fubh findOneByUsedTrade5(string $used_trade_5) Return the first Fubh filtered by the used_trade_5 column
 * @method Fubh findOneByTradeMarine1(int $trade_marine_1) Return the first Fubh filtered by the trade_marine_1 column
 * @method Fubh findOneByTradeMarine2(double $trade_marine_2) Return the first Fubh filtered by the trade_marine_2 column
 * @method Fubh findOneByTradeMarine3(int $trade_marine_3) Return the first Fubh filtered by the trade_marine_3 column
 * @method Fubh findOneByTradeMarine4(double $trade_marine_4) Return the first Fubh filtered by the trade_marine_4 column
 * @method Fubh findOneByTradeMarine5(string $trade_marine_5) Return the first Fubh filtered by the trade_marine_5 column
 * @method Fubh findOneByTradeFresh1(int $trade_fresh_1) Return the first Fubh filtered by the trade_fresh_1 column
 * @method Fubh findOneByTradeFresh2(double $trade_fresh_2) Return the first Fubh filtered by the trade_fresh_2 column
 * @method Fubh findOneByTradeFresh3(int $trade_fresh_3) Return the first Fubh filtered by the trade_fresh_3 column
 * @method Fubh findOneByTradeFresh4(double $trade_fresh_4) Return the first Fubh filtered by the trade_fresh_4 column
 * @method Fubh findOneByTradeFresh5(string $trade_fresh_5) Return the first Fubh filtered by the trade_fresh_5 column
 * @method Fubh findOneByTradeBred1(int $trade_bred_1) Return the first Fubh filtered by the trade_bred_1 column
 * @method Fubh findOneByTradeBred2(double $trade_bred_2) Return the first Fubh filtered by the trade_bred_2 column
 * @method Fubh findOneByTradeBred3(int $trade_bred_3) Return the first Fubh filtered by the trade_bred_3 column
 * @method Fubh findOneByTradeBred4(double $trade_bred_4) Return the first Fubh filtered by the trade_bred_4 column
 * @method Fubh findOneByTradeBred5(string $trade_bred_5) Return the first Fubh filtered by the trade_bred_5 column
 * @method Fubh findOneByUsedSport1(int $used_sport_1) Return the first Fubh filtered by the used_sport_1 column
 * @method Fubh findOneByUsedSport2(double $used_sport_2) Return the first Fubh filtered by the used_sport_2 column
 * @method Fubh findOneByUsedSport3(int $used_sport_3) Return the first Fubh filtered by the used_sport_3 column
 * @method Fubh findOneByUsedSport4(double $used_sport_4) Return the first Fubh filtered by the used_sport_4 column
 * @method Fubh findOneByUsedSport5(string $used_sport_5) Return the first Fubh filtered by the used_sport_5 column
 * @method Fubh findOneByTotUsed1(int $tot_used_1) Return the first Fubh filtered by the tot_used_1 column
 * @method Fubh findOneByTotUsed2(double $tot_used_2) Return the first Fubh filtered by the tot_used_2 column
 * @method Fubh findOneByTotUsed3(int $tot_used_3) Return the first Fubh filtered by the tot_used_3 column
 * @method Fubh findOneByTotUsed4(double $tot_used_4) Return the first Fubh filtered by the tot_used_4 column
 * @method Fubh findOneByTotUsed5(string $tot_used_5) Return the first Fubh filtered by the tot_used_5 column
 * @method Fubh findOneByThreat1(int $threat_1) Return the first Fubh filtered by the threat_1 column
 * @method Fubh findOneByThreat2(double $threat_2) Return the first Fubh filtered by the threat_2 column
 * @method Fubh findOneByThreat3(int $threat_3) Return the first Fubh filtered by the threat_3 column
 * @method Fubh findOneByThreat4(double $threat_4) Return the first Fubh filtered by the threat_4 column
 * @method Fubh findOneByThreat5(string $threat_5) Return the first Fubh filtered by the threat_5 column
 * @method Fubh findOneByIntro1(int $intro_1) Return the first Fubh filtered by the intro_1 column
 * @method Fubh findOneByIntro2(double $intro_2) Return the first Fubh filtered by the intro_2 column
 * @method Fubh findOneByIntro3(int $intro_3) Return the first Fubh filtered by the intro_3 column
 * @method Fubh findOneByIntro4(double $intro_4) Return the first Fubh filtered by the intro_4 column
 * @method Fubh findOneByIntro5(string $intro_5) Return the first Fubh filtered by the intro_5 column
 * @method Fubh findOneByDanger1(int $danger_1) Return the first Fubh filtered by the danger_1 column
 * @method Fubh findOneByDanger2(double $danger_2) Return the first Fubh filtered by the danger_2 column
 * @method Fubh findOneByDanger3(int $danger_3) Return the first Fubh filtered by the danger_3 column
 * @method Fubh findOneByDanger4(double $danger_4) Return the first Fubh filtered by the danger_4 column
 * @method Fubh findOneByDanger5(string $danger_5) Return the first Fubh filtered by the danger_5 column
 * @method Fubh findOneByNote(string $note) Return the first Fubh filtered by the note column
 * @method Fubh findOneByNoSpecies(int $no_species) Return the first Fubh filtered by the no_species column
 * @method Fubh findOneByNoFresh(int $no_fresh) Return the first Fubh filtered by the no_fresh column
 * @method Fubh findOneByNoMarine(int $no_marine) Return the first Fubh filtered by the no_marine column
 * @method Fubh findOneByNoBrackish(int $no_brackish) Return the first Fubh filtered by the no_brackish column
 * @method Fubh findOneByTs(string $TS) Return the first Fubh filtered by the TS column
 *
 * @method array findByPrintDateByskit(string $print_date_bySkit) Return Fubh objects filtered by the print_date_bySkit column
 * @method array findByActive(boolean $active) Return Fubh objects filtered by the active column
 * @method array findByPeriod(string $Period) Return Fubh objects filtered by the Period column
 * @method array findByExtantFinfish1(int $extant_finfish_1) Return Fubh objects filtered by the extant_finfish_1 column
 * @method array findByExtantFinfish2(double $extant_finfish_2) Return Fubh objects filtered by the extant_finfish_2 column
 * @method array findByExtantFinfish3(int $extant_finfish_3) Return Fubh objects filtered by the extant_finfish_3 column
 * @method array findByExtantFinfish4(double $extant_finfish_4) Return Fubh objects filtered by the extant_finfish_4 column
 * @method array findByExtantFinfish5(string $extant_finfish_5) Return Fubh objects filtered by the extant_finfish_5 column
 * @method array findByUsedFisheries1(int $used_fisheries_1) Return Fubh objects filtered by the used_fisheries_1 column
 * @method array findByUsedFisheries2(double $used_fisheries_2) Return Fubh objects filtered by the used_fisheries_2 column
 * @method array findByUsedFisheries3(int $used_fisheries_3) Return Fubh objects filtered by the used_fisheries_3 column
 * @method array findByUsedFisheries4(double $used_fisheries_4) Return Fubh objects filtered by the used_fisheries_4 column
 * @method array findByUsedFisheries5(string $used_fisheries_5) Return Fubh objects filtered by the used_fisheries_5 column
 * @method array findByUsedAquac1(int $used_aquac_1) Return Fubh objects filtered by the used_aquac_1 column
 * @method array findByUsedAquac2(double $used_aquac_2) Return Fubh objects filtered by the used_aquac_2 column
 * @method array findByUsedAquac3(int $used_aquac_3) Return Fubh objects filtered by the used_aquac_3 column
 * @method array findByUsedAquac4(double $used_aquac_4) Return Fubh objects filtered by the used_aquac_4 column
 * @method array findByUsedAquac5(string $used_aquac_5) Return Fubh objects filtered by the used_aquac_5 column
 * @method array findByUsedBait1(int $used_bait_1) Return Fubh objects filtered by the used_bait_1 column
 * @method array findByUsedBait2(double $used_bait_2) Return Fubh objects filtered by the used_bait_2 column
 * @method array findByUsedBait3(int $used_bait_3) Return Fubh objects filtered by the used_bait_3 column
 * @method array findByUsedBait4(double $used_bait_4) Return Fubh objects filtered by the used_bait_4 column
 * @method array findByUsedBait5(string $used_bait_5) Return Fubh objects filtered by the used_bait_5 column
 * @method array findByUsedTrade1(int $used_trade_1) Return Fubh objects filtered by the used_trade_1 column
 * @method array findByUsedTrade2(double $used_trade_2) Return Fubh objects filtered by the used_trade_2 column
 * @method array findByUsedTrade3(int $used_trade_3) Return Fubh objects filtered by the used_trade_3 column
 * @method array findByUsedTrade4(double $used_trade_4) Return Fubh objects filtered by the used_trade_4 column
 * @method array findByUsedTrade5(string $used_trade_5) Return Fubh objects filtered by the used_trade_5 column
 * @method array findByTradeMarine1(int $trade_marine_1) Return Fubh objects filtered by the trade_marine_1 column
 * @method array findByTradeMarine2(double $trade_marine_2) Return Fubh objects filtered by the trade_marine_2 column
 * @method array findByTradeMarine3(int $trade_marine_3) Return Fubh objects filtered by the trade_marine_3 column
 * @method array findByTradeMarine4(double $trade_marine_4) Return Fubh objects filtered by the trade_marine_4 column
 * @method array findByTradeMarine5(string $trade_marine_5) Return Fubh objects filtered by the trade_marine_5 column
 * @method array findByTradeFresh1(int $trade_fresh_1) Return Fubh objects filtered by the trade_fresh_1 column
 * @method array findByTradeFresh2(double $trade_fresh_2) Return Fubh objects filtered by the trade_fresh_2 column
 * @method array findByTradeFresh3(int $trade_fresh_3) Return Fubh objects filtered by the trade_fresh_3 column
 * @method array findByTradeFresh4(double $trade_fresh_4) Return Fubh objects filtered by the trade_fresh_4 column
 * @method array findByTradeFresh5(string $trade_fresh_5) Return Fubh objects filtered by the trade_fresh_5 column
 * @method array findByTradeBred1(int $trade_bred_1) Return Fubh objects filtered by the trade_bred_1 column
 * @method array findByTradeBred2(double $trade_bred_2) Return Fubh objects filtered by the trade_bred_2 column
 * @method array findByTradeBred3(int $trade_bred_3) Return Fubh objects filtered by the trade_bred_3 column
 * @method array findByTradeBred4(double $trade_bred_4) Return Fubh objects filtered by the trade_bred_4 column
 * @method array findByTradeBred5(string $trade_bred_5) Return Fubh objects filtered by the trade_bred_5 column
 * @method array findByUsedSport1(int $used_sport_1) Return Fubh objects filtered by the used_sport_1 column
 * @method array findByUsedSport2(double $used_sport_2) Return Fubh objects filtered by the used_sport_2 column
 * @method array findByUsedSport3(int $used_sport_3) Return Fubh objects filtered by the used_sport_3 column
 * @method array findByUsedSport4(double $used_sport_4) Return Fubh objects filtered by the used_sport_4 column
 * @method array findByUsedSport5(string $used_sport_5) Return Fubh objects filtered by the used_sport_5 column
 * @method array findByTotUsed1(int $tot_used_1) Return Fubh objects filtered by the tot_used_1 column
 * @method array findByTotUsed2(double $tot_used_2) Return Fubh objects filtered by the tot_used_2 column
 * @method array findByTotUsed3(int $tot_used_3) Return Fubh objects filtered by the tot_used_3 column
 * @method array findByTotUsed4(double $tot_used_4) Return Fubh objects filtered by the tot_used_4 column
 * @method array findByTotUsed5(string $tot_used_5) Return Fubh objects filtered by the tot_used_5 column
 * @method array findByThreat1(int $threat_1) Return Fubh objects filtered by the threat_1 column
 * @method array findByThreat2(double $threat_2) Return Fubh objects filtered by the threat_2 column
 * @method array findByThreat3(int $threat_3) Return Fubh objects filtered by the threat_3 column
 * @method array findByThreat4(double $threat_4) Return Fubh objects filtered by the threat_4 column
 * @method array findByThreat5(string $threat_5) Return Fubh objects filtered by the threat_5 column
 * @method array findByIntro1(int $intro_1) Return Fubh objects filtered by the intro_1 column
 * @method array findByIntro2(double $intro_2) Return Fubh objects filtered by the intro_2 column
 * @method array findByIntro3(int $intro_3) Return Fubh objects filtered by the intro_3 column
 * @method array findByIntro4(double $intro_4) Return Fubh objects filtered by the intro_4 column
 * @method array findByIntro5(string $intro_5) Return Fubh objects filtered by the intro_5 column
 * @method array findByDanger1(int $danger_1) Return Fubh objects filtered by the danger_1 column
 * @method array findByDanger2(double $danger_2) Return Fubh objects filtered by the danger_2 column
 * @method array findByDanger3(int $danger_3) Return Fubh objects filtered by the danger_3 column
 * @method array findByDanger4(double $danger_4) Return Fubh objects filtered by the danger_4 column
 * @method array findByDanger5(string $danger_5) Return Fubh objects filtered by the danger_5 column
 * @method array findByNote(string $note) Return Fubh objects filtered by the note column
 * @method array findByNoSpecies(int $no_species) Return Fubh objects filtered by the no_species column
 * @method array findByNoFresh(int $no_fresh) Return Fubh objects filtered by the no_fresh column
 * @method array findByNoMarine(int $no_marine) Return Fubh objects filtered by the no_marine column
 * @method array findByNoBrackish(int $no_brackish) Return Fubh objects filtered by the no_brackish column
 * @method array findByTs(string $TS) Return Fubh objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFubhQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFubhQuery object.
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
            $modelName = 'Fubh';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FubhQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FubhQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FubhQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FubhQuery) {
            return $criteria;
        }
        $query = new FubhQuery(null, null, $modelAlias);

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
     * @return   Fubh|Fubh[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FubhPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Fubh A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPeriod($key, $con = null)
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
     * @return                 Fubh A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `print_date_bySkit`, `active`, `Period`, `extant_finfish_1`, `extant_finfish_2`, `extant_finfish_3`, `extant_finfish_4`, `extant_finfish_5`, `used_fisheries_1`, `used_fisheries_2`, `used_fisheries_3`, `used_fisheries_4`, `used_fisheries_5`, `used_aquac_1`, `used_aquac_2`, `used_aquac_3`, `used_aquac_4`, `used_aquac_5`, `used_bait_1`, `used_bait_2`, `used_bait_3`, `used_bait_4`, `used_bait_5`, `used_trade_1`, `used_trade_2`, `used_trade_3`, `used_trade_4`, `used_trade_5`, `trade_marine_1`, `trade_marine_2`, `trade_marine_3`, `trade_marine_4`, `trade_marine_5`, `trade_fresh_1`, `trade_fresh_2`, `trade_fresh_3`, `trade_fresh_4`, `trade_fresh_5`, `trade_bred_1`, `trade_bred_2`, `trade_bred_3`, `trade_bred_4`, `trade_bred_5`, `used_sport_1`, `used_sport_2`, `used_sport_3`, `used_sport_4`, `used_sport_5`, `tot_used_1`, `tot_used_2`, `tot_used_3`, `tot_used_4`, `tot_used_5`, `threat_1`, `threat_2`, `threat_3`, `threat_4`, `threat_5`, `intro_1`, `intro_2`, `intro_3`, `intro_4`, `intro_5`, `danger_1`, `danger_2`, `danger_3`, `danger_4`, `danger_5`, `note`, `no_species`, `no_fresh`, `no_marine`, `no_brackish`, `TS` FROM `fubh` WHERE `Period` = :p0';
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
            $obj = new Fubh();
            $obj->hydrate($row);
            FubhPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Fubh|Fubh[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Fubh[]|mixed the list of results, formatted by the current formatter
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
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FubhPeer::PERIOD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FubhPeer::PERIOD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the print_date_bySkit column
     *
     * Example usage:
     * <code>
     * $query->filterByPrintDateByskit('2011-03-14'); // WHERE print_date_bySkit = '2011-03-14'
     * $query->filterByPrintDateByskit('now'); // WHERE print_date_bySkit = '2011-03-14'
     * $query->filterByPrintDateByskit(array('max' => 'yesterday')); // WHERE print_date_bySkit < '2011-03-13'
     * </code>
     *
     * @param     mixed $printDateByskit The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByPrintDateByskit($printDateByskit = null, $comparison = null)
    {
        if (is_array($printDateByskit)) {
            $useMinMax = false;
            if (isset($printDateByskit['min'])) {
                $this->addUsingAlias(FubhPeer::PRINT_DATE_BYSKIT, $printDateByskit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($printDateByskit['max'])) {
                $this->addUsingAlias(FubhPeer::PRINT_DATE_BYSKIT, $printDateByskit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::PRINT_DATE_BYSKIT, $printDateByskit, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive(true); // WHERE active = true
     * $query->filterByActive('yes'); // WHERE active = true
     * </code>
     *
     * @param     boolean|string $active The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (is_string($active)) {
            $active = in_array(strtolower($active), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FubhPeer::ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the Period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('2011-03-14'); // WHERE Period = '2011-03-14'
     * $query->filterByPeriod('now'); // WHERE Period = '2011-03-14'
     * $query->filterByPeriod(array('max' => 'yesterday')); // WHERE Period < '2011-03-13'
     * </code>
     *
     * @param     mixed $period The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (is_array($period)) {
            $useMinMax = false;
            if (isset($period['min'])) {
                $this->addUsingAlias(FubhPeer::PERIOD, $period['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($period['max'])) {
                $this->addUsingAlias(FubhPeer::PERIOD, $period['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::PERIOD, $period, $comparison);
    }

    /**
     * Filter the query on the extant_finfish_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtantFinfish1(1234); // WHERE extant_finfish_1 = 1234
     * $query->filterByExtantFinfish1(array(12, 34)); // WHERE extant_finfish_1 IN (12, 34)
     * $query->filterByExtantFinfish1(array('min' => 12)); // WHERE extant_finfish_1 >= 12
     * $query->filterByExtantFinfish1(array('max' => 12)); // WHERE extant_finfish_1 <= 12
     * </code>
     *
     * @param     mixed $extantFinfish1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByExtantFinfish1($extantFinfish1 = null, $comparison = null)
    {
        if (is_array($extantFinfish1)) {
            $useMinMax = false;
            if (isset($extantFinfish1['min'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_1, $extantFinfish1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extantFinfish1['max'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_1, $extantFinfish1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_1, $extantFinfish1, $comparison);
    }

    /**
     * Filter the query on the extant_finfish_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtantFinfish2(1234); // WHERE extant_finfish_2 = 1234
     * $query->filterByExtantFinfish2(array(12, 34)); // WHERE extant_finfish_2 IN (12, 34)
     * $query->filterByExtantFinfish2(array('min' => 12)); // WHERE extant_finfish_2 >= 12
     * $query->filterByExtantFinfish2(array('max' => 12)); // WHERE extant_finfish_2 <= 12
     * </code>
     *
     * @param     mixed $extantFinfish2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByExtantFinfish2($extantFinfish2 = null, $comparison = null)
    {
        if (is_array($extantFinfish2)) {
            $useMinMax = false;
            if (isset($extantFinfish2['min'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_2, $extantFinfish2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extantFinfish2['max'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_2, $extantFinfish2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_2, $extantFinfish2, $comparison);
    }

    /**
     * Filter the query on the extant_finfish_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtantFinfish3(1234); // WHERE extant_finfish_3 = 1234
     * $query->filterByExtantFinfish3(array(12, 34)); // WHERE extant_finfish_3 IN (12, 34)
     * $query->filterByExtantFinfish3(array('min' => 12)); // WHERE extant_finfish_3 >= 12
     * $query->filterByExtantFinfish3(array('max' => 12)); // WHERE extant_finfish_3 <= 12
     * </code>
     *
     * @param     mixed $extantFinfish3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByExtantFinfish3($extantFinfish3 = null, $comparison = null)
    {
        if (is_array($extantFinfish3)) {
            $useMinMax = false;
            if (isset($extantFinfish3['min'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_3, $extantFinfish3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extantFinfish3['max'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_3, $extantFinfish3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_3, $extantFinfish3, $comparison);
    }

    /**
     * Filter the query on the extant_finfish_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtantFinfish4(1234); // WHERE extant_finfish_4 = 1234
     * $query->filterByExtantFinfish4(array(12, 34)); // WHERE extant_finfish_4 IN (12, 34)
     * $query->filterByExtantFinfish4(array('min' => 12)); // WHERE extant_finfish_4 >= 12
     * $query->filterByExtantFinfish4(array('max' => 12)); // WHERE extant_finfish_4 <= 12
     * </code>
     *
     * @param     mixed $extantFinfish4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByExtantFinfish4($extantFinfish4 = null, $comparison = null)
    {
        if (is_array($extantFinfish4)) {
            $useMinMax = false;
            if (isset($extantFinfish4['min'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_4, $extantFinfish4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extantFinfish4['max'])) {
                $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_4, $extantFinfish4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_4, $extantFinfish4, $comparison);
    }

    /**
     * Filter the query on the extant_finfish_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByExtantFinfish5('fooValue');   // WHERE extant_finfish_5 = 'fooValue'
     * $query->filterByExtantFinfish5('%fooValue%'); // WHERE extant_finfish_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extantFinfish5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByExtantFinfish5($extantFinfish5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extantFinfish5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extantFinfish5)) {
                $extantFinfish5 = str_replace('*', '%', $extantFinfish5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::EXTANT_FINFISH_5, $extantFinfish5, $comparison);
    }

    /**
     * Filter the query on the used_fisheries_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedFisheries1(1234); // WHERE used_fisheries_1 = 1234
     * $query->filterByUsedFisheries1(array(12, 34)); // WHERE used_fisheries_1 IN (12, 34)
     * $query->filterByUsedFisheries1(array('min' => 12)); // WHERE used_fisheries_1 >= 12
     * $query->filterByUsedFisheries1(array('max' => 12)); // WHERE used_fisheries_1 <= 12
     * </code>
     *
     * @param     mixed $usedFisheries1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedFisheries1($usedFisheries1 = null, $comparison = null)
    {
        if (is_array($usedFisheries1)) {
            $useMinMax = false;
            if (isset($usedFisheries1['min'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_1, $usedFisheries1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedFisheries1['max'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_1, $usedFisheries1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_FISHERIES_1, $usedFisheries1, $comparison);
    }

    /**
     * Filter the query on the used_fisheries_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedFisheries2(1234); // WHERE used_fisheries_2 = 1234
     * $query->filterByUsedFisheries2(array(12, 34)); // WHERE used_fisheries_2 IN (12, 34)
     * $query->filterByUsedFisheries2(array('min' => 12)); // WHERE used_fisheries_2 >= 12
     * $query->filterByUsedFisheries2(array('max' => 12)); // WHERE used_fisheries_2 <= 12
     * </code>
     *
     * @param     mixed $usedFisheries2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedFisheries2($usedFisheries2 = null, $comparison = null)
    {
        if (is_array($usedFisheries2)) {
            $useMinMax = false;
            if (isset($usedFisheries2['min'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_2, $usedFisheries2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedFisheries2['max'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_2, $usedFisheries2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_FISHERIES_2, $usedFisheries2, $comparison);
    }

    /**
     * Filter the query on the used_fisheries_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedFisheries3(1234); // WHERE used_fisheries_3 = 1234
     * $query->filterByUsedFisheries3(array(12, 34)); // WHERE used_fisheries_3 IN (12, 34)
     * $query->filterByUsedFisheries3(array('min' => 12)); // WHERE used_fisheries_3 >= 12
     * $query->filterByUsedFisheries3(array('max' => 12)); // WHERE used_fisheries_3 <= 12
     * </code>
     *
     * @param     mixed $usedFisheries3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedFisheries3($usedFisheries3 = null, $comparison = null)
    {
        if (is_array($usedFisheries3)) {
            $useMinMax = false;
            if (isset($usedFisheries3['min'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_3, $usedFisheries3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedFisheries3['max'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_3, $usedFisheries3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_FISHERIES_3, $usedFisheries3, $comparison);
    }

    /**
     * Filter the query on the used_fisheries_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedFisheries4(1234); // WHERE used_fisheries_4 = 1234
     * $query->filterByUsedFisheries4(array(12, 34)); // WHERE used_fisheries_4 IN (12, 34)
     * $query->filterByUsedFisheries4(array('min' => 12)); // WHERE used_fisheries_4 >= 12
     * $query->filterByUsedFisheries4(array('max' => 12)); // WHERE used_fisheries_4 <= 12
     * </code>
     *
     * @param     mixed $usedFisheries4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedFisheries4($usedFisheries4 = null, $comparison = null)
    {
        if (is_array($usedFisheries4)) {
            $useMinMax = false;
            if (isset($usedFisheries4['min'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_4, $usedFisheries4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedFisheries4['max'])) {
                $this->addUsingAlias(FubhPeer::USED_FISHERIES_4, $usedFisheries4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_FISHERIES_4, $usedFisheries4, $comparison);
    }

    /**
     * Filter the query on the used_fisheries_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedFisheries5('fooValue');   // WHERE used_fisheries_5 = 'fooValue'
     * $query->filterByUsedFisheries5('%fooValue%'); // WHERE used_fisheries_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedFisheries5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedFisheries5($usedFisheries5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedFisheries5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedFisheries5)) {
                $usedFisheries5 = str_replace('*', '%', $usedFisheries5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_FISHERIES_5, $usedFisheries5, $comparison);
    }

    /**
     * Filter the query on the used_aquac_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedAquac1(1234); // WHERE used_aquac_1 = 1234
     * $query->filterByUsedAquac1(array(12, 34)); // WHERE used_aquac_1 IN (12, 34)
     * $query->filterByUsedAquac1(array('min' => 12)); // WHERE used_aquac_1 >= 12
     * $query->filterByUsedAquac1(array('max' => 12)); // WHERE used_aquac_1 <= 12
     * </code>
     *
     * @param     mixed $usedAquac1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedAquac1($usedAquac1 = null, $comparison = null)
    {
        if (is_array($usedAquac1)) {
            $useMinMax = false;
            if (isset($usedAquac1['min'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_1, $usedAquac1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedAquac1['max'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_1, $usedAquac1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_AQUAC_1, $usedAquac1, $comparison);
    }

    /**
     * Filter the query on the used_aquac_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedAquac2(1234); // WHERE used_aquac_2 = 1234
     * $query->filterByUsedAquac2(array(12, 34)); // WHERE used_aquac_2 IN (12, 34)
     * $query->filterByUsedAquac2(array('min' => 12)); // WHERE used_aquac_2 >= 12
     * $query->filterByUsedAquac2(array('max' => 12)); // WHERE used_aquac_2 <= 12
     * </code>
     *
     * @param     mixed $usedAquac2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedAquac2($usedAquac2 = null, $comparison = null)
    {
        if (is_array($usedAquac2)) {
            $useMinMax = false;
            if (isset($usedAquac2['min'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_2, $usedAquac2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedAquac2['max'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_2, $usedAquac2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_AQUAC_2, $usedAquac2, $comparison);
    }

    /**
     * Filter the query on the used_aquac_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedAquac3(1234); // WHERE used_aquac_3 = 1234
     * $query->filterByUsedAquac3(array(12, 34)); // WHERE used_aquac_3 IN (12, 34)
     * $query->filterByUsedAquac3(array('min' => 12)); // WHERE used_aquac_3 >= 12
     * $query->filterByUsedAquac3(array('max' => 12)); // WHERE used_aquac_3 <= 12
     * </code>
     *
     * @param     mixed $usedAquac3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedAquac3($usedAquac3 = null, $comparison = null)
    {
        if (is_array($usedAquac3)) {
            $useMinMax = false;
            if (isset($usedAquac3['min'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_3, $usedAquac3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedAquac3['max'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_3, $usedAquac3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_AQUAC_3, $usedAquac3, $comparison);
    }

    /**
     * Filter the query on the used_aquac_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedAquac4(1234); // WHERE used_aquac_4 = 1234
     * $query->filterByUsedAquac4(array(12, 34)); // WHERE used_aquac_4 IN (12, 34)
     * $query->filterByUsedAquac4(array('min' => 12)); // WHERE used_aquac_4 >= 12
     * $query->filterByUsedAquac4(array('max' => 12)); // WHERE used_aquac_4 <= 12
     * </code>
     *
     * @param     mixed $usedAquac4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedAquac4($usedAquac4 = null, $comparison = null)
    {
        if (is_array($usedAquac4)) {
            $useMinMax = false;
            if (isset($usedAquac4['min'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_4, $usedAquac4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedAquac4['max'])) {
                $this->addUsingAlias(FubhPeer::USED_AQUAC_4, $usedAquac4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_AQUAC_4, $usedAquac4, $comparison);
    }

    /**
     * Filter the query on the used_aquac_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedAquac5('fooValue');   // WHERE used_aquac_5 = 'fooValue'
     * $query->filterByUsedAquac5('%fooValue%'); // WHERE used_aquac_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedAquac5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedAquac5($usedAquac5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedAquac5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedAquac5)) {
                $usedAquac5 = str_replace('*', '%', $usedAquac5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_AQUAC_5, $usedAquac5, $comparison);
    }

    /**
     * Filter the query on the used_bait_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedBait1(1234); // WHERE used_bait_1 = 1234
     * $query->filterByUsedBait1(array(12, 34)); // WHERE used_bait_1 IN (12, 34)
     * $query->filterByUsedBait1(array('min' => 12)); // WHERE used_bait_1 >= 12
     * $query->filterByUsedBait1(array('max' => 12)); // WHERE used_bait_1 <= 12
     * </code>
     *
     * @param     mixed $usedBait1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedBait1($usedBait1 = null, $comparison = null)
    {
        if (is_array($usedBait1)) {
            $useMinMax = false;
            if (isset($usedBait1['min'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_1, $usedBait1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedBait1['max'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_1, $usedBait1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_BAIT_1, $usedBait1, $comparison);
    }

    /**
     * Filter the query on the used_bait_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedBait2(1234); // WHERE used_bait_2 = 1234
     * $query->filterByUsedBait2(array(12, 34)); // WHERE used_bait_2 IN (12, 34)
     * $query->filterByUsedBait2(array('min' => 12)); // WHERE used_bait_2 >= 12
     * $query->filterByUsedBait2(array('max' => 12)); // WHERE used_bait_2 <= 12
     * </code>
     *
     * @param     mixed $usedBait2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedBait2($usedBait2 = null, $comparison = null)
    {
        if (is_array($usedBait2)) {
            $useMinMax = false;
            if (isset($usedBait2['min'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_2, $usedBait2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedBait2['max'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_2, $usedBait2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_BAIT_2, $usedBait2, $comparison);
    }

    /**
     * Filter the query on the used_bait_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedBait3(1234); // WHERE used_bait_3 = 1234
     * $query->filterByUsedBait3(array(12, 34)); // WHERE used_bait_3 IN (12, 34)
     * $query->filterByUsedBait3(array('min' => 12)); // WHERE used_bait_3 >= 12
     * $query->filterByUsedBait3(array('max' => 12)); // WHERE used_bait_3 <= 12
     * </code>
     *
     * @param     mixed $usedBait3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedBait3($usedBait3 = null, $comparison = null)
    {
        if (is_array($usedBait3)) {
            $useMinMax = false;
            if (isset($usedBait3['min'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_3, $usedBait3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedBait3['max'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_3, $usedBait3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_BAIT_3, $usedBait3, $comparison);
    }

    /**
     * Filter the query on the used_bait_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedBait4(1234); // WHERE used_bait_4 = 1234
     * $query->filterByUsedBait4(array(12, 34)); // WHERE used_bait_4 IN (12, 34)
     * $query->filterByUsedBait4(array('min' => 12)); // WHERE used_bait_4 >= 12
     * $query->filterByUsedBait4(array('max' => 12)); // WHERE used_bait_4 <= 12
     * </code>
     *
     * @param     mixed $usedBait4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedBait4($usedBait4 = null, $comparison = null)
    {
        if (is_array($usedBait4)) {
            $useMinMax = false;
            if (isset($usedBait4['min'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_4, $usedBait4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedBait4['max'])) {
                $this->addUsingAlias(FubhPeer::USED_BAIT_4, $usedBait4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_BAIT_4, $usedBait4, $comparison);
    }

    /**
     * Filter the query on the used_bait_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedBait5('fooValue');   // WHERE used_bait_5 = 'fooValue'
     * $query->filterByUsedBait5('%fooValue%'); // WHERE used_bait_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedBait5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedBait5($usedBait5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedBait5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedBait5)) {
                $usedBait5 = str_replace('*', '%', $usedBait5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_BAIT_5, $usedBait5, $comparison);
    }

    /**
     * Filter the query on the used_trade_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedTrade1(1234); // WHERE used_trade_1 = 1234
     * $query->filterByUsedTrade1(array(12, 34)); // WHERE used_trade_1 IN (12, 34)
     * $query->filterByUsedTrade1(array('min' => 12)); // WHERE used_trade_1 >= 12
     * $query->filterByUsedTrade1(array('max' => 12)); // WHERE used_trade_1 <= 12
     * </code>
     *
     * @param     mixed $usedTrade1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedTrade1($usedTrade1 = null, $comparison = null)
    {
        if (is_array($usedTrade1)) {
            $useMinMax = false;
            if (isset($usedTrade1['min'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_1, $usedTrade1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedTrade1['max'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_1, $usedTrade1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_TRADE_1, $usedTrade1, $comparison);
    }

    /**
     * Filter the query on the used_trade_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedTrade2(1234); // WHERE used_trade_2 = 1234
     * $query->filterByUsedTrade2(array(12, 34)); // WHERE used_trade_2 IN (12, 34)
     * $query->filterByUsedTrade2(array('min' => 12)); // WHERE used_trade_2 >= 12
     * $query->filterByUsedTrade2(array('max' => 12)); // WHERE used_trade_2 <= 12
     * </code>
     *
     * @param     mixed $usedTrade2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedTrade2($usedTrade2 = null, $comparison = null)
    {
        if (is_array($usedTrade2)) {
            $useMinMax = false;
            if (isset($usedTrade2['min'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_2, $usedTrade2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedTrade2['max'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_2, $usedTrade2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_TRADE_2, $usedTrade2, $comparison);
    }

    /**
     * Filter the query on the used_trade_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedTrade3(1234); // WHERE used_trade_3 = 1234
     * $query->filterByUsedTrade3(array(12, 34)); // WHERE used_trade_3 IN (12, 34)
     * $query->filterByUsedTrade3(array('min' => 12)); // WHERE used_trade_3 >= 12
     * $query->filterByUsedTrade3(array('max' => 12)); // WHERE used_trade_3 <= 12
     * </code>
     *
     * @param     mixed $usedTrade3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedTrade3($usedTrade3 = null, $comparison = null)
    {
        if (is_array($usedTrade3)) {
            $useMinMax = false;
            if (isset($usedTrade3['min'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_3, $usedTrade3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedTrade3['max'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_3, $usedTrade3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_TRADE_3, $usedTrade3, $comparison);
    }

    /**
     * Filter the query on the used_trade_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedTrade4(1234); // WHERE used_trade_4 = 1234
     * $query->filterByUsedTrade4(array(12, 34)); // WHERE used_trade_4 IN (12, 34)
     * $query->filterByUsedTrade4(array('min' => 12)); // WHERE used_trade_4 >= 12
     * $query->filterByUsedTrade4(array('max' => 12)); // WHERE used_trade_4 <= 12
     * </code>
     *
     * @param     mixed $usedTrade4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedTrade4($usedTrade4 = null, $comparison = null)
    {
        if (is_array($usedTrade4)) {
            $useMinMax = false;
            if (isset($usedTrade4['min'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_4, $usedTrade4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedTrade4['max'])) {
                $this->addUsingAlias(FubhPeer::USED_TRADE_4, $usedTrade4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_TRADE_4, $usedTrade4, $comparison);
    }

    /**
     * Filter the query on the used_trade_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedTrade5('fooValue');   // WHERE used_trade_5 = 'fooValue'
     * $query->filterByUsedTrade5('%fooValue%'); // WHERE used_trade_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedTrade5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedTrade5($usedTrade5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedTrade5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedTrade5)) {
                $usedTrade5 = str_replace('*', '%', $usedTrade5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_TRADE_5, $usedTrade5, $comparison);
    }

    /**
     * Filter the query on the trade_marine_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeMarine1(1234); // WHERE trade_marine_1 = 1234
     * $query->filterByTradeMarine1(array(12, 34)); // WHERE trade_marine_1 IN (12, 34)
     * $query->filterByTradeMarine1(array('min' => 12)); // WHERE trade_marine_1 >= 12
     * $query->filterByTradeMarine1(array('max' => 12)); // WHERE trade_marine_1 <= 12
     * </code>
     *
     * @param     mixed $tradeMarine1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeMarine1($tradeMarine1 = null, $comparison = null)
    {
        if (is_array($tradeMarine1)) {
            $useMinMax = false;
            if (isset($tradeMarine1['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_1, $tradeMarine1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeMarine1['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_1, $tradeMarine1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_MARINE_1, $tradeMarine1, $comparison);
    }

    /**
     * Filter the query on the trade_marine_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeMarine2(1234); // WHERE trade_marine_2 = 1234
     * $query->filterByTradeMarine2(array(12, 34)); // WHERE trade_marine_2 IN (12, 34)
     * $query->filterByTradeMarine2(array('min' => 12)); // WHERE trade_marine_2 >= 12
     * $query->filterByTradeMarine2(array('max' => 12)); // WHERE trade_marine_2 <= 12
     * </code>
     *
     * @param     mixed $tradeMarine2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeMarine2($tradeMarine2 = null, $comparison = null)
    {
        if (is_array($tradeMarine2)) {
            $useMinMax = false;
            if (isset($tradeMarine2['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_2, $tradeMarine2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeMarine2['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_2, $tradeMarine2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_MARINE_2, $tradeMarine2, $comparison);
    }

    /**
     * Filter the query on the trade_marine_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeMarine3(1234); // WHERE trade_marine_3 = 1234
     * $query->filterByTradeMarine3(array(12, 34)); // WHERE trade_marine_3 IN (12, 34)
     * $query->filterByTradeMarine3(array('min' => 12)); // WHERE trade_marine_3 >= 12
     * $query->filterByTradeMarine3(array('max' => 12)); // WHERE trade_marine_3 <= 12
     * </code>
     *
     * @param     mixed $tradeMarine3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeMarine3($tradeMarine3 = null, $comparison = null)
    {
        if (is_array($tradeMarine3)) {
            $useMinMax = false;
            if (isset($tradeMarine3['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_3, $tradeMarine3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeMarine3['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_3, $tradeMarine3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_MARINE_3, $tradeMarine3, $comparison);
    }

    /**
     * Filter the query on the trade_marine_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeMarine4(1234); // WHERE trade_marine_4 = 1234
     * $query->filterByTradeMarine4(array(12, 34)); // WHERE trade_marine_4 IN (12, 34)
     * $query->filterByTradeMarine4(array('min' => 12)); // WHERE trade_marine_4 >= 12
     * $query->filterByTradeMarine4(array('max' => 12)); // WHERE trade_marine_4 <= 12
     * </code>
     *
     * @param     mixed $tradeMarine4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeMarine4($tradeMarine4 = null, $comparison = null)
    {
        if (is_array($tradeMarine4)) {
            $useMinMax = false;
            if (isset($tradeMarine4['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_4, $tradeMarine4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeMarine4['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_MARINE_4, $tradeMarine4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_MARINE_4, $tradeMarine4, $comparison);
    }

    /**
     * Filter the query on the trade_marine_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeMarine5('fooValue');   // WHERE trade_marine_5 = 'fooValue'
     * $query->filterByTradeMarine5('%fooValue%'); // WHERE trade_marine_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tradeMarine5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeMarine5($tradeMarine5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tradeMarine5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tradeMarine5)) {
                $tradeMarine5 = str_replace('*', '%', $tradeMarine5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_MARINE_5, $tradeMarine5, $comparison);
    }

    /**
     * Filter the query on the trade_fresh_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeFresh1(1234); // WHERE trade_fresh_1 = 1234
     * $query->filterByTradeFresh1(array(12, 34)); // WHERE trade_fresh_1 IN (12, 34)
     * $query->filterByTradeFresh1(array('min' => 12)); // WHERE trade_fresh_1 >= 12
     * $query->filterByTradeFresh1(array('max' => 12)); // WHERE trade_fresh_1 <= 12
     * </code>
     *
     * @param     mixed $tradeFresh1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeFresh1($tradeFresh1 = null, $comparison = null)
    {
        if (is_array($tradeFresh1)) {
            $useMinMax = false;
            if (isset($tradeFresh1['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_1, $tradeFresh1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeFresh1['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_1, $tradeFresh1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_FRESH_1, $tradeFresh1, $comparison);
    }

    /**
     * Filter the query on the trade_fresh_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeFresh2(1234); // WHERE trade_fresh_2 = 1234
     * $query->filterByTradeFresh2(array(12, 34)); // WHERE trade_fresh_2 IN (12, 34)
     * $query->filterByTradeFresh2(array('min' => 12)); // WHERE trade_fresh_2 >= 12
     * $query->filterByTradeFresh2(array('max' => 12)); // WHERE trade_fresh_2 <= 12
     * </code>
     *
     * @param     mixed $tradeFresh2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeFresh2($tradeFresh2 = null, $comparison = null)
    {
        if (is_array($tradeFresh2)) {
            $useMinMax = false;
            if (isset($tradeFresh2['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_2, $tradeFresh2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeFresh2['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_2, $tradeFresh2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_FRESH_2, $tradeFresh2, $comparison);
    }

    /**
     * Filter the query on the trade_fresh_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeFresh3(1234); // WHERE trade_fresh_3 = 1234
     * $query->filterByTradeFresh3(array(12, 34)); // WHERE trade_fresh_3 IN (12, 34)
     * $query->filterByTradeFresh3(array('min' => 12)); // WHERE trade_fresh_3 >= 12
     * $query->filterByTradeFresh3(array('max' => 12)); // WHERE trade_fresh_3 <= 12
     * </code>
     *
     * @param     mixed $tradeFresh3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeFresh3($tradeFresh3 = null, $comparison = null)
    {
        if (is_array($tradeFresh3)) {
            $useMinMax = false;
            if (isset($tradeFresh3['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_3, $tradeFresh3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeFresh3['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_3, $tradeFresh3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_FRESH_3, $tradeFresh3, $comparison);
    }

    /**
     * Filter the query on the trade_fresh_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeFresh4(1234); // WHERE trade_fresh_4 = 1234
     * $query->filterByTradeFresh4(array(12, 34)); // WHERE trade_fresh_4 IN (12, 34)
     * $query->filterByTradeFresh4(array('min' => 12)); // WHERE trade_fresh_4 >= 12
     * $query->filterByTradeFresh4(array('max' => 12)); // WHERE trade_fresh_4 <= 12
     * </code>
     *
     * @param     mixed $tradeFresh4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeFresh4($tradeFresh4 = null, $comparison = null)
    {
        if (is_array($tradeFresh4)) {
            $useMinMax = false;
            if (isset($tradeFresh4['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_4, $tradeFresh4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeFresh4['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_FRESH_4, $tradeFresh4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_FRESH_4, $tradeFresh4, $comparison);
    }

    /**
     * Filter the query on the trade_fresh_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeFresh5('fooValue');   // WHERE trade_fresh_5 = 'fooValue'
     * $query->filterByTradeFresh5('%fooValue%'); // WHERE trade_fresh_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tradeFresh5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeFresh5($tradeFresh5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tradeFresh5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tradeFresh5)) {
                $tradeFresh5 = str_replace('*', '%', $tradeFresh5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_FRESH_5, $tradeFresh5, $comparison);
    }

    /**
     * Filter the query on the trade_bred_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeBred1(1234); // WHERE trade_bred_1 = 1234
     * $query->filterByTradeBred1(array(12, 34)); // WHERE trade_bred_1 IN (12, 34)
     * $query->filterByTradeBred1(array('min' => 12)); // WHERE trade_bred_1 >= 12
     * $query->filterByTradeBred1(array('max' => 12)); // WHERE trade_bred_1 <= 12
     * </code>
     *
     * @param     mixed $tradeBred1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeBred1($tradeBred1 = null, $comparison = null)
    {
        if (is_array($tradeBred1)) {
            $useMinMax = false;
            if (isset($tradeBred1['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_1, $tradeBred1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeBred1['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_1, $tradeBred1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_BRED_1, $tradeBred1, $comparison);
    }

    /**
     * Filter the query on the trade_bred_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeBred2(1234); // WHERE trade_bred_2 = 1234
     * $query->filterByTradeBred2(array(12, 34)); // WHERE trade_bred_2 IN (12, 34)
     * $query->filterByTradeBred2(array('min' => 12)); // WHERE trade_bred_2 >= 12
     * $query->filterByTradeBred2(array('max' => 12)); // WHERE trade_bred_2 <= 12
     * </code>
     *
     * @param     mixed $tradeBred2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeBred2($tradeBred2 = null, $comparison = null)
    {
        if (is_array($tradeBred2)) {
            $useMinMax = false;
            if (isset($tradeBred2['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_2, $tradeBred2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeBred2['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_2, $tradeBred2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_BRED_2, $tradeBred2, $comparison);
    }

    /**
     * Filter the query on the trade_bred_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeBred3(1234); // WHERE trade_bred_3 = 1234
     * $query->filterByTradeBred3(array(12, 34)); // WHERE trade_bred_3 IN (12, 34)
     * $query->filterByTradeBred3(array('min' => 12)); // WHERE trade_bred_3 >= 12
     * $query->filterByTradeBred3(array('max' => 12)); // WHERE trade_bred_3 <= 12
     * </code>
     *
     * @param     mixed $tradeBred3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeBred3($tradeBred3 = null, $comparison = null)
    {
        if (is_array($tradeBred3)) {
            $useMinMax = false;
            if (isset($tradeBred3['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_3, $tradeBred3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeBred3['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_3, $tradeBred3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_BRED_3, $tradeBred3, $comparison);
    }

    /**
     * Filter the query on the trade_bred_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeBred4(1234); // WHERE trade_bred_4 = 1234
     * $query->filterByTradeBred4(array(12, 34)); // WHERE trade_bred_4 IN (12, 34)
     * $query->filterByTradeBred4(array('min' => 12)); // WHERE trade_bred_4 >= 12
     * $query->filterByTradeBred4(array('max' => 12)); // WHERE trade_bred_4 <= 12
     * </code>
     *
     * @param     mixed $tradeBred4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeBred4($tradeBred4 = null, $comparison = null)
    {
        if (is_array($tradeBred4)) {
            $useMinMax = false;
            if (isset($tradeBred4['min'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_4, $tradeBred4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradeBred4['max'])) {
                $this->addUsingAlias(FubhPeer::TRADE_BRED_4, $tradeBred4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_BRED_4, $tradeBred4, $comparison);
    }

    /**
     * Filter the query on the trade_bred_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByTradeBred5('fooValue');   // WHERE trade_bred_5 = 'fooValue'
     * $query->filterByTradeBred5('%fooValue%'); // WHERE trade_bred_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tradeBred5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTradeBred5($tradeBred5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tradeBred5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tradeBred5)) {
                $tradeBred5 = str_replace('*', '%', $tradeBred5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::TRADE_BRED_5, $tradeBred5, $comparison);
    }

    /**
     * Filter the query on the used_sport_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedSport1(1234); // WHERE used_sport_1 = 1234
     * $query->filterByUsedSport1(array(12, 34)); // WHERE used_sport_1 IN (12, 34)
     * $query->filterByUsedSport1(array('min' => 12)); // WHERE used_sport_1 >= 12
     * $query->filterByUsedSport1(array('max' => 12)); // WHERE used_sport_1 <= 12
     * </code>
     *
     * @param     mixed $usedSport1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedSport1($usedSport1 = null, $comparison = null)
    {
        if (is_array($usedSport1)) {
            $useMinMax = false;
            if (isset($usedSport1['min'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_1, $usedSport1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedSport1['max'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_1, $usedSport1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_SPORT_1, $usedSport1, $comparison);
    }

    /**
     * Filter the query on the used_sport_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedSport2(1234); // WHERE used_sport_2 = 1234
     * $query->filterByUsedSport2(array(12, 34)); // WHERE used_sport_2 IN (12, 34)
     * $query->filterByUsedSport2(array('min' => 12)); // WHERE used_sport_2 >= 12
     * $query->filterByUsedSport2(array('max' => 12)); // WHERE used_sport_2 <= 12
     * </code>
     *
     * @param     mixed $usedSport2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedSport2($usedSport2 = null, $comparison = null)
    {
        if (is_array($usedSport2)) {
            $useMinMax = false;
            if (isset($usedSport2['min'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_2, $usedSport2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedSport2['max'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_2, $usedSport2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_SPORT_2, $usedSport2, $comparison);
    }

    /**
     * Filter the query on the used_sport_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedSport3(1234); // WHERE used_sport_3 = 1234
     * $query->filterByUsedSport3(array(12, 34)); // WHERE used_sport_3 IN (12, 34)
     * $query->filterByUsedSport3(array('min' => 12)); // WHERE used_sport_3 >= 12
     * $query->filterByUsedSport3(array('max' => 12)); // WHERE used_sport_3 <= 12
     * </code>
     *
     * @param     mixed $usedSport3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedSport3($usedSport3 = null, $comparison = null)
    {
        if (is_array($usedSport3)) {
            $useMinMax = false;
            if (isset($usedSport3['min'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_3, $usedSport3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedSport3['max'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_3, $usedSport3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_SPORT_3, $usedSport3, $comparison);
    }

    /**
     * Filter the query on the used_sport_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedSport4(1234); // WHERE used_sport_4 = 1234
     * $query->filterByUsedSport4(array(12, 34)); // WHERE used_sport_4 IN (12, 34)
     * $query->filterByUsedSport4(array('min' => 12)); // WHERE used_sport_4 >= 12
     * $query->filterByUsedSport4(array('max' => 12)); // WHERE used_sport_4 <= 12
     * </code>
     *
     * @param     mixed $usedSport4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedSport4($usedSport4 = null, $comparison = null)
    {
        if (is_array($usedSport4)) {
            $useMinMax = false;
            if (isset($usedSport4['min'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_4, $usedSport4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usedSport4['max'])) {
                $this->addUsingAlias(FubhPeer::USED_SPORT_4, $usedSport4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_SPORT_4, $usedSport4, $comparison);
    }

    /**
     * Filter the query on the used_sport_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedSport5('fooValue');   // WHERE used_sport_5 = 'fooValue'
     * $query->filterByUsedSport5('%fooValue%'); // WHERE used_sport_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedSport5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByUsedSport5($usedSport5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedSport5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedSport5)) {
                $usedSport5 = str_replace('*', '%', $usedSport5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::USED_SPORT_5, $usedSport5, $comparison);
    }

    /**
     * Filter the query on the tot_used_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotUsed1(1234); // WHERE tot_used_1 = 1234
     * $query->filterByTotUsed1(array(12, 34)); // WHERE tot_used_1 IN (12, 34)
     * $query->filterByTotUsed1(array('min' => 12)); // WHERE tot_used_1 >= 12
     * $query->filterByTotUsed1(array('max' => 12)); // WHERE tot_used_1 <= 12
     * </code>
     *
     * @param     mixed $totUsed1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTotUsed1($totUsed1 = null, $comparison = null)
    {
        if (is_array($totUsed1)) {
            $useMinMax = false;
            if (isset($totUsed1['min'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_1, $totUsed1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totUsed1['max'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_1, $totUsed1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TOT_USED_1, $totUsed1, $comparison);
    }

    /**
     * Filter the query on the tot_used_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotUsed2(1234); // WHERE tot_used_2 = 1234
     * $query->filterByTotUsed2(array(12, 34)); // WHERE tot_used_2 IN (12, 34)
     * $query->filterByTotUsed2(array('min' => 12)); // WHERE tot_used_2 >= 12
     * $query->filterByTotUsed2(array('max' => 12)); // WHERE tot_used_2 <= 12
     * </code>
     *
     * @param     mixed $totUsed2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTotUsed2($totUsed2 = null, $comparison = null)
    {
        if (is_array($totUsed2)) {
            $useMinMax = false;
            if (isset($totUsed2['min'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_2, $totUsed2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totUsed2['max'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_2, $totUsed2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TOT_USED_2, $totUsed2, $comparison);
    }

    /**
     * Filter the query on the tot_used_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotUsed3(1234); // WHERE tot_used_3 = 1234
     * $query->filterByTotUsed3(array(12, 34)); // WHERE tot_used_3 IN (12, 34)
     * $query->filterByTotUsed3(array('min' => 12)); // WHERE tot_used_3 >= 12
     * $query->filterByTotUsed3(array('max' => 12)); // WHERE tot_used_3 <= 12
     * </code>
     *
     * @param     mixed $totUsed3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTotUsed3($totUsed3 = null, $comparison = null)
    {
        if (is_array($totUsed3)) {
            $useMinMax = false;
            if (isset($totUsed3['min'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_3, $totUsed3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totUsed3['max'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_3, $totUsed3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TOT_USED_3, $totUsed3, $comparison);
    }

    /**
     * Filter the query on the tot_used_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotUsed4(1234); // WHERE tot_used_4 = 1234
     * $query->filterByTotUsed4(array(12, 34)); // WHERE tot_used_4 IN (12, 34)
     * $query->filterByTotUsed4(array('min' => 12)); // WHERE tot_used_4 >= 12
     * $query->filterByTotUsed4(array('max' => 12)); // WHERE tot_used_4 <= 12
     * </code>
     *
     * @param     mixed $totUsed4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTotUsed4($totUsed4 = null, $comparison = null)
    {
        if (is_array($totUsed4)) {
            $useMinMax = false;
            if (isset($totUsed4['min'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_4, $totUsed4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totUsed4['max'])) {
                $this->addUsingAlias(FubhPeer::TOT_USED_4, $totUsed4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TOT_USED_4, $totUsed4, $comparison);
    }

    /**
     * Filter the query on the tot_used_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByTotUsed5('fooValue');   // WHERE tot_used_5 = 'fooValue'
     * $query->filterByTotUsed5('%fooValue%'); // WHERE tot_used_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totUsed5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTotUsed5($totUsed5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totUsed5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $totUsed5)) {
                $totUsed5 = str_replace('*', '%', $totUsed5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::TOT_USED_5, $totUsed5, $comparison);
    }

    /**
     * Filter the query on the threat_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByThreat1(1234); // WHERE threat_1 = 1234
     * $query->filterByThreat1(array(12, 34)); // WHERE threat_1 IN (12, 34)
     * $query->filterByThreat1(array('min' => 12)); // WHERE threat_1 >= 12
     * $query->filterByThreat1(array('max' => 12)); // WHERE threat_1 <= 12
     * </code>
     *
     * @param     mixed $threat1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByThreat1($threat1 = null, $comparison = null)
    {
        if (is_array($threat1)) {
            $useMinMax = false;
            if (isset($threat1['min'])) {
                $this->addUsingAlias(FubhPeer::THREAT_1, $threat1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($threat1['max'])) {
                $this->addUsingAlias(FubhPeer::THREAT_1, $threat1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::THREAT_1, $threat1, $comparison);
    }

    /**
     * Filter the query on the threat_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByThreat2(1234); // WHERE threat_2 = 1234
     * $query->filterByThreat2(array(12, 34)); // WHERE threat_2 IN (12, 34)
     * $query->filterByThreat2(array('min' => 12)); // WHERE threat_2 >= 12
     * $query->filterByThreat2(array('max' => 12)); // WHERE threat_2 <= 12
     * </code>
     *
     * @param     mixed $threat2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByThreat2($threat2 = null, $comparison = null)
    {
        if (is_array($threat2)) {
            $useMinMax = false;
            if (isset($threat2['min'])) {
                $this->addUsingAlias(FubhPeer::THREAT_2, $threat2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($threat2['max'])) {
                $this->addUsingAlias(FubhPeer::THREAT_2, $threat2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::THREAT_2, $threat2, $comparison);
    }

    /**
     * Filter the query on the threat_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByThreat3(1234); // WHERE threat_3 = 1234
     * $query->filterByThreat3(array(12, 34)); // WHERE threat_3 IN (12, 34)
     * $query->filterByThreat3(array('min' => 12)); // WHERE threat_3 >= 12
     * $query->filterByThreat3(array('max' => 12)); // WHERE threat_3 <= 12
     * </code>
     *
     * @param     mixed $threat3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByThreat3($threat3 = null, $comparison = null)
    {
        if (is_array($threat3)) {
            $useMinMax = false;
            if (isset($threat3['min'])) {
                $this->addUsingAlias(FubhPeer::THREAT_3, $threat3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($threat3['max'])) {
                $this->addUsingAlias(FubhPeer::THREAT_3, $threat3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::THREAT_3, $threat3, $comparison);
    }

    /**
     * Filter the query on the threat_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByThreat4(1234); // WHERE threat_4 = 1234
     * $query->filterByThreat4(array(12, 34)); // WHERE threat_4 IN (12, 34)
     * $query->filterByThreat4(array('min' => 12)); // WHERE threat_4 >= 12
     * $query->filterByThreat4(array('max' => 12)); // WHERE threat_4 <= 12
     * </code>
     *
     * @param     mixed $threat4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByThreat4($threat4 = null, $comparison = null)
    {
        if (is_array($threat4)) {
            $useMinMax = false;
            if (isset($threat4['min'])) {
                $this->addUsingAlias(FubhPeer::THREAT_4, $threat4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($threat4['max'])) {
                $this->addUsingAlias(FubhPeer::THREAT_4, $threat4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::THREAT_4, $threat4, $comparison);
    }

    /**
     * Filter the query on the threat_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByThreat5('fooValue');   // WHERE threat_5 = 'fooValue'
     * $query->filterByThreat5('%fooValue%'); // WHERE threat_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $threat5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByThreat5($threat5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($threat5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $threat5)) {
                $threat5 = str_replace('*', '%', $threat5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::THREAT_5, $threat5, $comparison);
    }

    /**
     * Filter the query on the intro_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntro1(1234); // WHERE intro_1 = 1234
     * $query->filterByIntro1(array(12, 34)); // WHERE intro_1 IN (12, 34)
     * $query->filterByIntro1(array('min' => 12)); // WHERE intro_1 >= 12
     * $query->filterByIntro1(array('max' => 12)); // WHERE intro_1 <= 12
     * </code>
     *
     * @param     mixed $intro1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByIntro1($intro1 = null, $comparison = null)
    {
        if (is_array($intro1)) {
            $useMinMax = false;
            if (isset($intro1['min'])) {
                $this->addUsingAlias(FubhPeer::INTRO_1, $intro1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intro1['max'])) {
                $this->addUsingAlias(FubhPeer::INTRO_1, $intro1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::INTRO_1, $intro1, $comparison);
    }

    /**
     * Filter the query on the intro_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntro2(1234); // WHERE intro_2 = 1234
     * $query->filterByIntro2(array(12, 34)); // WHERE intro_2 IN (12, 34)
     * $query->filterByIntro2(array('min' => 12)); // WHERE intro_2 >= 12
     * $query->filterByIntro2(array('max' => 12)); // WHERE intro_2 <= 12
     * </code>
     *
     * @param     mixed $intro2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByIntro2($intro2 = null, $comparison = null)
    {
        if (is_array($intro2)) {
            $useMinMax = false;
            if (isset($intro2['min'])) {
                $this->addUsingAlias(FubhPeer::INTRO_2, $intro2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intro2['max'])) {
                $this->addUsingAlias(FubhPeer::INTRO_2, $intro2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::INTRO_2, $intro2, $comparison);
    }

    /**
     * Filter the query on the intro_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntro3(1234); // WHERE intro_3 = 1234
     * $query->filterByIntro3(array(12, 34)); // WHERE intro_3 IN (12, 34)
     * $query->filterByIntro3(array('min' => 12)); // WHERE intro_3 >= 12
     * $query->filterByIntro3(array('max' => 12)); // WHERE intro_3 <= 12
     * </code>
     *
     * @param     mixed $intro3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByIntro3($intro3 = null, $comparison = null)
    {
        if (is_array($intro3)) {
            $useMinMax = false;
            if (isset($intro3['min'])) {
                $this->addUsingAlias(FubhPeer::INTRO_3, $intro3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intro3['max'])) {
                $this->addUsingAlias(FubhPeer::INTRO_3, $intro3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::INTRO_3, $intro3, $comparison);
    }

    /**
     * Filter the query on the intro_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntro4(1234); // WHERE intro_4 = 1234
     * $query->filterByIntro4(array(12, 34)); // WHERE intro_4 IN (12, 34)
     * $query->filterByIntro4(array('min' => 12)); // WHERE intro_4 >= 12
     * $query->filterByIntro4(array('max' => 12)); // WHERE intro_4 <= 12
     * </code>
     *
     * @param     mixed $intro4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByIntro4($intro4 = null, $comparison = null)
    {
        if (is_array($intro4)) {
            $useMinMax = false;
            if (isset($intro4['min'])) {
                $this->addUsingAlias(FubhPeer::INTRO_4, $intro4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intro4['max'])) {
                $this->addUsingAlias(FubhPeer::INTRO_4, $intro4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::INTRO_4, $intro4, $comparison);
    }

    /**
     * Filter the query on the intro_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntro5('fooValue');   // WHERE intro_5 = 'fooValue'
     * $query->filterByIntro5('%fooValue%'); // WHERE intro_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intro5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByIntro5($intro5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intro5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intro5)) {
                $intro5 = str_replace('*', '%', $intro5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::INTRO_5, $intro5, $comparison);
    }

    /**
     * Filter the query on the danger_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDanger1(1234); // WHERE danger_1 = 1234
     * $query->filterByDanger1(array(12, 34)); // WHERE danger_1 IN (12, 34)
     * $query->filterByDanger1(array('min' => 12)); // WHERE danger_1 >= 12
     * $query->filterByDanger1(array('max' => 12)); // WHERE danger_1 <= 12
     * </code>
     *
     * @param     mixed $danger1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByDanger1($danger1 = null, $comparison = null)
    {
        if (is_array($danger1)) {
            $useMinMax = false;
            if (isset($danger1['min'])) {
                $this->addUsingAlias(FubhPeer::DANGER_1, $danger1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($danger1['max'])) {
                $this->addUsingAlias(FubhPeer::DANGER_1, $danger1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::DANGER_1, $danger1, $comparison);
    }

    /**
     * Filter the query on the danger_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDanger2(1234); // WHERE danger_2 = 1234
     * $query->filterByDanger2(array(12, 34)); // WHERE danger_2 IN (12, 34)
     * $query->filterByDanger2(array('min' => 12)); // WHERE danger_2 >= 12
     * $query->filterByDanger2(array('max' => 12)); // WHERE danger_2 <= 12
     * </code>
     *
     * @param     mixed $danger2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByDanger2($danger2 = null, $comparison = null)
    {
        if (is_array($danger2)) {
            $useMinMax = false;
            if (isset($danger2['min'])) {
                $this->addUsingAlias(FubhPeer::DANGER_2, $danger2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($danger2['max'])) {
                $this->addUsingAlias(FubhPeer::DANGER_2, $danger2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::DANGER_2, $danger2, $comparison);
    }

    /**
     * Filter the query on the danger_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByDanger3(1234); // WHERE danger_3 = 1234
     * $query->filterByDanger3(array(12, 34)); // WHERE danger_3 IN (12, 34)
     * $query->filterByDanger3(array('min' => 12)); // WHERE danger_3 >= 12
     * $query->filterByDanger3(array('max' => 12)); // WHERE danger_3 <= 12
     * </code>
     *
     * @param     mixed $danger3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByDanger3($danger3 = null, $comparison = null)
    {
        if (is_array($danger3)) {
            $useMinMax = false;
            if (isset($danger3['min'])) {
                $this->addUsingAlias(FubhPeer::DANGER_3, $danger3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($danger3['max'])) {
                $this->addUsingAlias(FubhPeer::DANGER_3, $danger3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::DANGER_3, $danger3, $comparison);
    }

    /**
     * Filter the query on the danger_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByDanger4(1234); // WHERE danger_4 = 1234
     * $query->filterByDanger4(array(12, 34)); // WHERE danger_4 IN (12, 34)
     * $query->filterByDanger4(array('min' => 12)); // WHERE danger_4 >= 12
     * $query->filterByDanger4(array('max' => 12)); // WHERE danger_4 <= 12
     * </code>
     *
     * @param     mixed $danger4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByDanger4($danger4 = null, $comparison = null)
    {
        if (is_array($danger4)) {
            $useMinMax = false;
            if (isset($danger4['min'])) {
                $this->addUsingAlias(FubhPeer::DANGER_4, $danger4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($danger4['max'])) {
                $this->addUsingAlias(FubhPeer::DANGER_4, $danger4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::DANGER_4, $danger4, $comparison);
    }

    /**
     * Filter the query on the danger_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByDanger5('fooValue');   // WHERE danger_5 = 'fooValue'
     * $query->filterByDanger5('%fooValue%'); // WHERE danger_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $danger5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByDanger5($danger5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($danger5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $danger5)) {
                $danger5 = str_replace('*', '%', $danger5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::DANGER_5, $danger5, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $note)) {
                $note = str_replace('*', '%', $note);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FubhPeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the no_species column
     *
     * Example usage:
     * <code>
     * $query->filterByNoSpecies(1234); // WHERE no_species = 1234
     * $query->filterByNoSpecies(array(12, 34)); // WHERE no_species IN (12, 34)
     * $query->filterByNoSpecies(array('min' => 12)); // WHERE no_species >= 12
     * $query->filterByNoSpecies(array('max' => 12)); // WHERE no_species <= 12
     * </code>
     *
     * @param     mixed $noSpecies The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByNoSpecies($noSpecies = null, $comparison = null)
    {
        if (is_array($noSpecies)) {
            $useMinMax = false;
            if (isset($noSpecies['min'])) {
                $this->addUsingAlias(FubhPeer::NO_SPECIES, $noSpecies['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noSpecies['max'])) {
                $this->addUsingAlias(FubhPeer::NO_SPECIES, $noSpecies['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::NO_SPECIES, $noSpecies, $comparison);
    }

    /**
     * Filter the query on the no_fresh column
     *
     * Example usage:
     * <code>
     * $query->filterByNoFresh(1234); // WHERE no_fresh = 1234
     * $query->filterByNoFresh(array(12, 34)); // WHERE no_fresh IN (12, 34)
     * $query->filterByNoFresh(array('min' => 12)); // WHERE no_fresh >= 12
     * $query->filterByNoFresh(array('max' => 12)); // WHERE no_fresh <= 12
     * </code>
     *
     * @param     mixed $noFresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByNoFresh($noFresh = null, $comparison = null)
    {
        if (is_array($noFresh)) {
            $useMinMax = false;
            if (isset($noFresh['min'])) {
                $this->addUsingAlias(FubhPeer::NO_FRESH, $noFresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noFresh['max'])) {
                $this->addUsingAlias(FubhPeer::NO_FRESH, $noFresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::NO_FRESH, $noFresh, $comparison);
    }

    /**
     * Filter the query on the no_marine column
     *
     * Example usage:
     * <code>
     * $query->filterByNoMarine(1234); // WHERE no_marine = 1234
     * $query->filterByNoMarine(array(12, 34)); // WHERE no_marine IN (12, 34)
     * $query->filterByNoMarine(array('min' => 12)); // WHERE no_marine >= 12
     * $query->filterByNoMarine(array('max' => 12)); // WHERE no_marine <= 12
     * </code>
     *
     * @param     mixed $noMarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByNoMarine($noMarine = null, $comparison = null)
    {
        if (is_array($noMarine)) {
            $useMinMax = false;
            if (isset($noMarine['min'])) {
                $this->addUsingAlias(FubhPeer::NO_MARINE, $noMarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noMarine['max'])) {
                $this->addUsingAlias(FubhPeer::NO_MARINE, $noMarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::NO_MARINE, $noMarine, $comparison);
    }

    /**
     * Filter the query on the no_brackish column
     *
     * Example usage:
     * <code>
     * $query->filterByNoBrackish(1234); // WHERE no_brackish = 1234
     * $query->filterByNoBrackish(array(12, 34)); // WHERE no_brackish IN (12, 34)
     * $query->filterByNoBrackish(array('min' => 12)); // WHERE no_brackish >= 12
     * $query->filterByNoBrackish(array('max' => 12)); // WHERE no_brackish <= 12
     * </code>
     *
     * @param     mixed $noBrackish The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByNoBrackish($noBrackish = null, $comparison = null)
    {
        if (is_array($noBrackish)) {
            $useMinMax = false;
            if (isset($noBrackish['min'])) {
                $this->addUsingAlias(FubhPeer::NO_BRACKISH, $noBrackish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noBrackish['max'])) {
                $this->addUsingAlias(FubhPeer::NO_BRACKISH, $noBrackish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::NO_BRACKISH, $noBrackish, $comparison);
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
     * @return FubhQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FubhPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FubhPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FubhPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Fubh $fubh Object to remove from the list of results
     *
     * @return FubhQuery The current query, for fluid interface
     */
    public function prune($fubh = null)
    {
        if ($fubh) {
            $this->addUsingAlias(FubhPeer::PERIOD, $fubh->getPeriod(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
