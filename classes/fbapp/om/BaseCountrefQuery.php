<?php


/**
 * Base class that represents a query for the 'countref' table.
 *
 *
 *
 * @method CountrefQuery orderByPaese($order = Criteria::ASC) Order by the PAESE column
 * @method CountrefQuery orderByNote($order = Criteria::ASC) Order by the Note column
 * @method CountrefQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CountrefQuery orderByAbb($order = Criteria::ASC) Order by the ABB column
 * @method CountrefQuery orderByIsoCode($order = Criteria::ASC) Order by the ISO_Code column
 * @method CountrefQuery orderByIso3alpha($order = Criteria::ASC) Order by the ISO3Alpha column
 * @method CountrefQuery orderByIso2alpha($order = Criteria::ASC) Order by the ISO2Alpha column
 * @method CountrefQuery orderBySaupCode($order = Criteria::ASC) Order by the SAUP_Code column
 * @method CountrefQuery orderByUsed($order = Criteria::ASC) Order by the Used column
 * @method CountrefQuery orderByCapital($order = Criteria::ASC) Order by the Capital column
 * @method CountrefQuery orderByLatdeg($order = Criteria::ASC) Order by the LatDeg column
 * @method CountrefQuery orderByLatmin($order = Criteria::ASC) Order by the LatMin column
 * @method CountrefQuery orderByNorthsouth($order = Criteria::ASC) Order by the NorthSouth column
 * @method CountrefQuery orderByLongdeg($order = Criteria::ASC) Order by the LongDeg column
 * @method CountrefQuery orderByLongmin($order = Criteria::ASC) Order by the LongMin column
 * @method CountrefQuery orderByEastwest($order = Criteria::ASC) Order by the EastWest column
 * @method CountrefQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method CountrefQuery orderByPolarboreal($order = Criteria::ASC) Order by the PolarBoreal column
 * @method CountrefQuery orderByTemperate($order = Criteria::ASC) Order by the Temperate column
 * @method CountrefQuery orderBySubtropical($order = Criteria::ASC) Order by the Subtropical column
 * @method CountrefQuery orderByTropical($order = Criteria::ASC) Order by the Tropical column
 * @method CountrefQuery orderByLandlocked($order = Criteria::ASC) Order by the Landlocked column
 * @method CountrefQuery orderByGeographicarea($order = Criteria::ASC) Order by the GeographicArea column
 * @method CountrefQuery orderByRegion($order = Criteria::ASC) Order by the Region column
 * @method CountrefQuery orderByContinent($order = Criteria::ASC) Order by the Continent column
 * @method CountrefQuery orderByAreacodeinland($order = Criteria::ASC) Order by the AreaCodeInland column
 * @method CountrefQuery orderByFaoareainland($order = Criteria::ASC) Order by the FAOAreaInland column
 * @method CountrefQuery orderByAreacodemarinei($order = Criteria::ASC) Order by the AreaCodeMarineI column
 * @method CountrefQuery orderByFaoareamarinei($order = Criteria::ASC) Order by the FAOAreaMarineI column
 * @method CountrefQuery orderByAreacodemarineii($order = Criteria::ASC) Order by the AreaCodeMarineII column
 * @method CountrefQuery orderByFaoareamarineii($order = Criteria::ASC) Order by the FAOAreaMarineII column
 * @method CountrefQuery orderByAreacodemarineiii($order = Criteria::ASC) Order by the AreaCodeMarineIII column
 * @method CountrefQuery orderByFaoareamarineiii($order = Criteria::ASC) Order by the FAOAreaMarineIII column
 * @method CountrefQuery orderByAreacodemarineiv($order = Criteria::ASC) Order by the AreaCodeMarineIV column
 * @method CountrefQuery orderByFaoareamarineiv($order = Criteria::ASC) Order by the FAOAreaMarineIV column
 * @method CountrefQuery orderByAreacodemarinev($order = Criteria::ASC) Order by the AreaCodeMarineV column
 * @method CountrefQuery orderByFaoareamarinev($order = Criteria::ASC) Order by the FAOAreaMarineV column
 * @method CountrefQuery orderByPopulation($order = Criteria::ASC) Order by the Population column
 * @method CountrefQuery orderByPopulationyear($order = Criteria::ASC) Order by the PopulationYear column
 * @method CountrefQuery orderByPopulationrate($order = Criteria::ASC) Order by the PopulationRate column
 * @method CountrefQuery orderByPopulationref($order = Criteria::ASC) Order by the PopulationRef column
 * @method CountrefQuery orderByCoastalpopulation($order = Criteria::ASC) Order by the CoastalPopulation column
 * @method CountrefQuery orderByCoastpopref($order = Criteria::ASC) Order by the CoastPopRef column
 * @method CountrefQuery orderByArea($order = Criteria::ASC) Order by the Area column
 * @method CountrefQuery orderByCoastline($order = Criteria::ASC) Order by the Coastline column
 * @method CountrefQuery orderByCoastlineref($order = Criteria::ASC) Order by the CoastlineRef column
 * @method CountrefQuery orderByShelfarea($order = Criteria::ASC) Order by the ShelfArea column
 * @method CountrefQuery orderByShelfref($order = Criteria::ASC) Order by the ShelfRef column
 * @method CountrefQuery orderByEecarea($order = Criteria::ASC) Order by the EECarea column
 * @method CountrefQuery orderByEezref($order = Criteria::ASC) Order by the EEZRef column
 * @method CountrefQuery orderByLanguage($order = Criteria::ASC) Order by the Language column
 * @method CountrefQuery orderByCurrency($order = Criteria::ASC) Order by the Currency column
 * @method CountrefQuery orderByMarinecount($order = Criteria::ASC) Order by the MarineCount column
 * @method CountrefQuery orderByMarinefamcount($order = Criteria::ASC) Order by the MarineFamCount column
 * @method CountrefQuery orderByCompletemarine($order = Criteria::ASC) Order by the CompleteMarine column
 * @method CountrefQuery orderByMarinelit($order = Criteria::ASC) Order by the MarineLit column
 * @method CountrefQuery orderByMarinefamlit($order = Criteria::ASC) Order by the MarineFamLit column
 * @method CountrefQuery orderByCheckmarineref($order = Criteria::ASC) Order by the CheckMarineRef column
 * @method CountrefQuery orderByMarineflag($order = Criteria::ASC) Order by the MarineFlag column
 * @method CountrefQuery orderByFreshwatercount($order = Criteria::ASC) Order by the FreshwaterCount column
 * @method CountrefQuery orderByFreshfamcount($order = Criteria::ASC) Order by the FreshFamCount column
 * @method CountrefQuery orderByCompletefresh($order = Criteria::ASC) Order by the CompleteFresh column
 * @method CountrefQuery orderByFreshwaterlit($order = Criteria::ASC) Order by the FreshwaterLit column
 * @method CountrefQuery orderByFreshfamlit($order = Criteria::ASC) Order by the FreshFamLit column
 * @method CountrefQuery orderByCheckfreshref($order = Criteria::ASC) Order by the CheckFreshRef column
 * @method CountrefQuery orderByFreshflag($order = Criteria::ASC) Order by the FreshFlag column
 * @method CountrefQuery orderByTotalcount($order = Criteria::ASC) Order by the TotalCount column
 * @method CountrefQuery orderByTotalfamcount($order = Criteria::ASC) Order by the TotalFamCount column
 * @method CountrefQuery orderByTotalcomplete($order = Criteria::ASC) Order by the TotalComplete column
 * @method CountrefQuery orderByTotallit($order = Criteria::ASC) Order by the TotalLit column
 * @method CountrefQuery orderByTotalfamlit($order = Criteria::ASC) Order by the TotalFamLit column
 * @method CountrefQuery orderByTotalref($order = Criteria::ASC) Order by the TotalRef column
 * @method CountrefQuery orderByLastupdate($order = Criteria::ASC) Order by the LastUpdate column
 * @method CountrefQuery orderByMorphcountfresh($order = Criteria::ASC) Order by the MorphCountFresh column
 * @method CountrefQuery orderByOccurcountfresh($order = Criteria::ASC) Order by the OccurCountFresh column
 * @method CountrefQuery orderByPiccountfresh($order = Criteria::ASC) Order by the PicCountFresh column
 * @method CountrefQuery orderByGrowthcountfresh($order = Criteria::ASC) Order by the GrowthCountFresh column
 * @method CountrefQuery orderByFoodcountfresh($order = Criteria::ASC) Order by the FoodCountFresh column
 * @method CountrefQuery orderByDietcountfresh($order = Criteria::ASC) Order by the DietCountFresh column
 * @method CountrefQuery orderByReproductioncountfresh($order = Criteria::ASC) Order by the ReproductionCountFresh column
 * @method CountrefQuery orderBySpawningcountfresh($order = Criteria::ASC) Order by the SpawningCountFresh column
 * @method CountrefQuery orderByMorphcountmarine($order = Criteria::ASC) Order by the MorphCountMarine column
 * @method CountrefQuery orderByOccurcountmarine($order = Criteria::ASC) Order by the OccurCountMarine column
 * @method CountrefQuery orderByPiccountmarine($order = Criteria::ASC) Order by the PicCountMarine column
 * @method CountrefQuery orderByGrowthcountmarine($order = Criteria::ASC) Order by the GrowthCountMarine column
 * @method CountrefQuery orderByFoodcountmarine($order = Criteria::ASC) Order by the FoodCountMarine column
 * @method CountrefQuery orderByDietcountmarine($order = Criteria::ASC) Order by the DietCountMarine column
 * @method CountrefQuery orderByReproductioncountmarine($order = Criteria::ASC) Order by the ReproductionCountMarine column
 * @method CountrefQuery orderBySpawningcountmarine($order = Criteria::ASC) Order by the SpawningCountMarine column
 * @method CountrefQuery orderByLatdegfill($order = Criteria::ASC) Order by the LatDegFill column
 * @method CountrefQuery orderByLatminfill($order = Criteria::ASC) Order by the LatMinFill column
 * @method CountrefQuery orderByNorthsouthfill($order = Criteria::ASC) Order by the NorthSouthFill column
 * @method CountrefQuery orderByLongdegfill($order = Criteria::ASC) Order by the LongDegFill column
 * @method CountrefQuery orderByLongminfill($order = Criteria::ASC) Order by the LongMinFill column
 * @method CountrefQuery orderByEastwestfill($order = Criteria::ASC) Order by the EastWestFill column
 * @method CountrefQuery orderByMlatdegfill($order = Criteria::ASC) Order by the MLatDegFill column
 * @method CountrefQuery orderByMlatminfill($order = Criteria::ASC) Order by the MLatMinFill column
 * @method CountrefQuery orderByMnorthsouthfill($order = Criteria::ASC) Order by the MNorthSouthFill column
 * @method CountrefQuery orderByMlongdegfill($order = Criteria::ASC) Order by the MLongDegFill column
 * @method CountrefQuery orderByMlongminfill($order = Criteria::ASC) Order by the MLongMinFill column
 * @method CountrefQuery orderByMeastwestfill($order = Criteria::ASC) Order by the MEastWestFill column
 * @method CountrefQuery orderByMlatdegfill2($order = Criteria::ASC) Order by the MLatDegFill2 column
 * @method CountrefQuery orderByMlatminfill2($order = Criteria::ASC) Order by the MLatMinFill2 column
 * @method CountrefQuery orderByMnorthsouthfill2($order = Criteria::ASC) Order by the MNorthSouthFill2 column
 * @method CountrefQuery orderByMlongdegfill2($order = Criteria::ASC) Order by the MLongDegFill2 column
 * @method CountrefQuery orderByMlongminfill2($order = Criteria::ASC) Order by the MLongMinFill2 column
 * @method CountrefQuery orderByMeastwestfill2($order = Criteria::ASC) Order by the MEastWestFill2 column
 * @method CountrefQuery orderByMlatdegfill3($order = Criteria::ASC) Order by the MLatDegFill3 column
 * @method CountrefQuery orderByMlatminfill3($order = Criteria::ASC) Order by the MLatMinFill3 column
 * @method CountrefQuery orderByMnorthsouthfill3($order = Criteria::ASC) Order by the MNorthSouthFill3 column
 * @method CountrefQuery orderByMlongdegfill3($order = Criteria::ASC) Order by the MLongDegFill3 column
 * @method CountrefQuery orderByMlongminfill3($order = Criteria::ASC) Order by the MLongMinFill3 column
 * @method CountrefQuery orderByMeastwestfill3($order = Criteria::ASC) Order by the MEastWestFill3 column
 * @method CountrefQuery orderByMlatdegfill4($order = Criteria::ASC) Order by the MLatDegFill4 column
 * @method CountrefQuery orderByMlatminfill4($order = Criteria::ASC) Order by the MLatMinFill4 column
 * @method CountrefQuery orderByMnorthsouthfill4($order = Criteria::ASC) Order by the MNorthSouthFill4 column
 * @method CountrefQuery orderByMlongdegfill4($order = Criteria::ASC) Order by the MLongDegFill4 column
 * @method CountrefQuery orderByMlongminfill4($order = Criteria::ASC) Order by the MLongMinFill4 column
 * @method CountrefQuery orderByMeastwestfill4($order = Criteria::ASC) Order by the MEastWestFill4 column
 * @method CountrefQuery orderByMlatdegfill5($order = Criteria::ASC) Order by the MLatDegFill5 column
 * @method CountrefQuery orderByMlatminfill5($order = Criteria::ASC) Order by the MLatMinFill5 column
 * @method CountrefQuery orderByMnorthsouthfill5($order = Criteria::ASC) Order by the MNorthSouthFill5 column
 * @method CountrefQuery orderByMlongdegfill5($order = Criteria::ASC) Order by the MLongDegFill5 column
 * @method CountrefQuery orderByMlongminfill5($order = Criteria::ASC) Order by the MLongMinFill5 column
 * @method CountrefQuery orderByMeastwestfill5($order = Criteria::ASC) Order by the MEastWestFill5 column
 * @method CountrefQuery orderByNorthernlatitude($order = Criteria::ASC) Order by the NorthernLatitude column
 * @method CountrefQuery orderByNorthernlatitudens($order = Criteria::ASC) Order by the NorthernLatitudeNS column
 * @method CountrefQuery orderBySouthernlatitude($order = Criteria::ASC) Order by the SouthernLatitude column
 * @method CountrefQuery orderBySouthernlatitudens($order = Criteria::ASC) Order by the SouthernLatitudeNS column
 * @method CountrefQuery orderByWesternlongitude($order = Criteria::ASC) Order by the WesternLongitude column
 * @method CountrefQuery orderByWesternlongitudeew($order = Criteria::ASC) Order by the WesternLongitudeEW column
 * @method CountrefQuery orderByEasternlongitude($order = Criteria::ASC) Order by the EasternLongitude column
 * @method CountrefQuery orderByEasternlongitudeew($order = Criteria::ASC) Order by the EasternLongitudeEW column
 * @method CountrefQuery orderByCenterlat($order = Criteria::ASC) Order by the CenterLat column
 * @method CountrefQuery orderByCenterlong($order = Criteria::ASC) Order by the CenterLong column
 * @method CountrefQuery orderByOtherlanguage($order = Criteria::ASC) Order by the OtherLanguage column
 * @method CountrefQuery orderByGeography($order = Criteria::ASC) Order by the Geography column
 * @method CountrefQuery orderByGeographyref($order = Criteria::ASC) Order by the GeographyRef column
 * @method CountrefQuery orderByHydrography($order = Criteria::ASC) Order by the Hydrography column
 * @method CountrefQuery orderByHydrographyref($order = Criteria::ASC) Order by the HydrographyRef column
 * @method CountrefQuery orderByCommentfresh($order = Criteria::ASC) Order by the CommentFresh column
 * @method CountrefQuery orderByReffresh1($order = Criteria::ASC) Order by the RefFresh1 column
 * @method CountrefQuery orderByReffresh2($order = Criteria::ASC) Order by the RefFresh2 column
 * @method CountrefQuery orderByReffresh3($order = Criteria::ASC) Order by the RefFresh3 column
 * @method CountrefQuery orderByFreshprimary($order = Criteria::ASC) Order by the FreshPrimary column
 * @method CountrefQuery orderByFreshsecondary($order = Criteria::ASC) Order by the FreshSecondary column
 * @method CountrefQuery orderByFreshinto($order = Criteria::ASC) Order by the FreshInto column
 * @method CountrefQuery orderByInfisheriesreported($order = Criteria::ASC) Order by the InFisheriesReported column
 * @method CountrefQuery orderByInfisheriespotential($order = Criteria::ASC) Order by the InFisheriesPotential column
 * @method CountrefQuery orderByInaquareported($order = Criteria::ASC) Order by the InAquaReported column
 * @method CountrefQuery orderByInaquapotential($order = Criteria::ASC) Order by the InAquaPotential column
 * @method CountrefQuery orderByExportreported($order = Criteria::ASC) Order by the ExportReported column
 * @method CountrefQuery orderByExportpotential($order = Criteria::ASC) Order by the ExportPotential column
 * @method CountrefQuery orderBySportreported($order = Criteria::ASC) Order by the SportReported column
 * @method CountrefQuery orderBySportpotential($order = Criteria::ASC) Order by the SportPotential column
 * @method CountrefQuery orderByEndemicreported($order = Criteria::ASC) Order by the EndemicReported column
 * @method CountrefQuery orderByEndemicpotential($order = Criteria::ASC) Order by the EndemicPotential column
 * @method CountrefQuery orderByThreatened($order = Criteria::ASC) Order by the Threatened column
 * @method CountrefQuery orderByProtectedreported($order = Criteria::ASC) Order by the ProtectedReported column
 * @method CountrefQuery orderByProtectedpotential($order = Criteria::ASC) Order by the ProtectedPotential column
 * @method CountrefQuery orderByAcp($order = Criteria::ASC) Order by the ACP column
 * @method CountrefQuery orderByDeveloped($order = Criteria::ASC) Order by the Developed column
 * @method CountrefQuery orderByMarine($order = Criteria::ASC) Order by the Marine column
 * @method CountrefQuery orderByBrackish($order = Criteria::ASC) Order by the Brackish column
 * @method CountrefQuery orderByMarineinto($order = Criteria::ASC) Order by the MarineInto column
 * @method CountrefQuery orderByMarineinfisheriesreported($order = Criteria::ASC) Order by the MarineInFisheriesReported column
 * @method CountrefQuery orderByMarineinfisheriespotential($order = Criteria::ASC) Order by the MarineInFisheriesPotential column
 * @method CountrefQuery orderByMarineinaquareported($order = Criteria::ASC) Order by the MarineInAquaReported column
 * @method CountrefQuery orderByMarineinaquapotential($order = Criteria::ASC) Order by the MarineInAquaPotential column
 * @method CountrefQuery orderByMarineexportreported($order = Criteria::ASC) Order by the MarineExportReported column
 * @method CountrefQuery orderByMarineexportpotential($order = Criteria::ASC) Order by the MarineExportPotential column
 * @method CountrefQuery orderByMarinesportreported($order = Criteria::ASC) Order by the MarineSportReported column
 * @method CountrefQuery orderByMarinesportpotential($order = Criteria::ASC) Order by the MarineSportPotential column
 * @method CountrefQuery orderByMarineendemicreported($order = Criteria::ASC) Order by the MarineEndemicReported column
 * @method CountrefQuery orderByMarineendemicpotential($order = Criteria::ASC) Order by the MarineEndemicPotential column
 * @method CountrefQuery orderByMarinethreatened($order = Criteria::ASC) Order by the MarineThreatened column
 * @method CountrefQuery orderByMarineprotectedreported($order = Criteria::ASC) Order by the MarineProtectedReported column
 * @method CountrefQuery orderByMarineprotectedpotential($order = Criteria::ASC) Order by the MarineProtectedPotential column
 * @method CountrefQuery orderByNatfishdb($order = Criteria::ASC) Order by the NatFishDB column
 * @method CountrefQuery orderByNatfishdb2($order = Criteria::ASC) Order by the NatFishDB2 column
 * @method CountrefQuery orderByFactbook($order = Criteria::ASC) Order by the Factbook column
 * @method CountrefQuery orderByNatfishaut($order = Criteria::ASC) Order by the NatFishAut column
 * @method CountrefQuery orderByTradenames($order = Criteria::ASC) Order by the TradeNames column
 * @method CountrefQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CountrefQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CountrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CountrefQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CountrefQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CountrefQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CountrefQuery orderByGreekOriginal($order = Criteria::ASC) Order by the Greek_original column
 * @method CountrefQuery orderByGreek($order = Criteria::ASC) Order by the Greek column
 * @method CountrefQuery orderByRussianOriginal($order = Criteria::ASC) Order by the RUSSIAN_original column
 * @method CountrefQuery orderByRussian($order = Criteria::ASC) Order by the RUSSIAN column
 * @method CountrefQuery orderByFrench($order = Criteria::ASC) Order by the FRENCH column
 * @method CountrefQuery orderBySpanish($order = Criteria::ASC) Order by the SPANISH column
 * @method CountrefQuery orderByGerman($order = Criteria::ASC) Order by the GERMAN column
 * @method CountrefQuery orderByDutch($order = Criteria::ASC) Order by the DUTCH column
 * @method CountrefQuery orderByPortuguese($order = Criteria::ASC) Order by the PORTUGUESE column
 * @method CountrefQuery orderByItalian($order = Criteria::ASC) Order by the ITALIAN column
 * @method CountrefQuery orderBySwedish($order = Criteria::ASC) Order by the SWEDISH column
 * @method CountrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CountrefQuery groupByPaese() Group by the PAESE column
 * @method CountrefQuery groupByNote() Group by the Note column
 * @method CountrefQuery groupByCCode() Group by the C_Code column
 * @method CountrefQuery groupByAbb() Group by the ABB column
 * @method CountrefQuery groupByIsoCode() Group by the ISO_Code column
 * @method CountrefQuery groupByIso3alpha() Group by the ISO3Alpha column
 * @method CountrefQuery groupByIso2alpha() Group by the ISO2Alpha column
 * @method CountrefQuery groupBySaupCode() Group by the SAUP_Code column
 * @method CountrefQuery groupByUsed() Group by the Used column
 * @method CountrefQuery groupByCapital() Group by the Capital column
 * @method CountrefQuery groupByLatdeg() Group by the LatDeg column
 * @method CountrefQuery groupByLatmin() Group by the LatMin column
 * @method CountrefQuery groupByNorthsouth() Group by the NorthSouth column
 * @method CountrefQuery groupByLongdeg() Group by the LongDeg column
 * @method CountrefQuery groupByLongmin() Group by the LongMin column
 * @method CountrefQuery groupByEastwest() Group by the EastWest column
 * @method CountrefQuery groupByRemark() Group by the Remark column
 * @method CountrefQuery groupByPolarboreal() Group by the PolarBoreal column
 * @method CountrefQuery groupByTemperate() Group by the Temperate column
 * @method CountrefQuery groupBySubtropical() Group by the Subtropical column
 * @method CountrefQuery groupByTropical() Group by the Tropical column
 * @method CountrefQuery groupByLandlocked() Group by the Landlocked column
 * @method CountrefQuery groupByGeographicarea() Group by the GeographicArea column
 * @method CountrefQuery groupByRegion() Group by the Region column
 * @method CountrefQuery groupByContinent() Group by the Continent column
 * @method CountrefQuery groupByAreacodeinland() Group by the AreaCodeInland column
 * @method CountrefQuery groupByFaoareainland() Group by the FAOAreaInland column
 * @method CountrefQuery groupByAreacodemarinei() Group by the AreaCodeMarineI column
 * @method CountrefQuery groupByFaoareamarinei() Group by the FAOAreaMarineI column
 * @method CountrefQuery groupByAreacodemarineii() Group by the AreaCodeMarineII column
 * @method CountrefQuery groupByFaoareamarineii() Group by the FAOAreaMarineII column
 * @method CountrefQuery groupByAreacodemarineiii() Group by the AreaCodeMarineIII column
 * @method CountrefQuery groupByFaoareamarineiii() Group by the FAOAreaMarineIII column
 * @method CountrefQuery groupByAreacodemarineiv() Group by the AreaCodeMarineIV column
 * @method CountrefQuery groupByFaoareamarineiv() Group by the FAOAreaMarineIV column
 * @method CountrefQuery groupByAreacodemarinev() Group by the AreaCodeMarineV column
 * @method CountrefQuery groupByFaoareamarinev() Group by the FAOAreaMarineV column
 * @method CountrefQuery groupByPopulation() Group by the Population column
 * @method CountrefQuery groupByPopulationyear() Group by the PopulationYear column
 * @method CountrefQuery groupByPopulationrate() Group by the PopulationRate column
 * @method CountrefQuery groupByPopulationref() Group by the PopulationRef column
 * @method CountrefQuery groupByCoastalpopulation() Group by the CoastalPopulation column
 * @method CountrefQuery groupByCoastpopref() Group by the CoastPopRef column
 * @method CountrefQuery groupByArea() Group by the Area column
 * @method CountrefQuery groupByCoastline() Group by the Coastline column
 * @method CountrefQuery groupByCoastlineref() Group by the CoastlineRef column
 * @method CountrefQuery groupByShelfarea() Group by the ShelfArea column
 * @method CountrefQuery groupByShelfref() Group by the ShelfRef column
 * @method CountrefQuery groupByEecarea() Group by the EECarea column
 * @method CountrefQuery groupByEezref() Group by the EEZRef column
 * @method CountrefQuery groupByLanguage() Group by the Language column
 * @method CountrefQuery groupByCurrency() Group by the Currency column
 * @method CountrefQuery groupByMarinecount() Group by the MarineCount column
 * @method CountrefQuery groupByMarinefamcount() Group by the MarineFamCount column
 * @method CountrefQuery groupByCompletemarine() Group by the CompleteMarine column
 * @method CountrefQuery groupByMarinelit() Group by the MarineLit column
 * @method CountrefQuery groupByMarinefamlit() Group by the MarineFamLit column
 * @method CountrefQuery groupByCheckmarineref() Group by the CheckMarineRef column
 * @method CountrefQuery groupByMarineflag() Group by the MarineFlag column
 * @method CountrefQuery groupByFreshwatercount() Group by the FreshwaterCount column
 * @method CountrefQuery groupByFreshfamcount() Group by the FreshFamCount column
 * @method CountrefQuery groupByCompletefresh() Group by the CompleteFresh column
 * @method CountrefQuery groupByFreshwaterlit() Group by the FreshwaterLit column
 * @method CountrefQuery groupByFreshfamlit() Group by the FreshFamLit column
 * @method CountrefQuery groupByCheckfreshref() Group by the CheckFreshRef column
 * @method CountrefQuery groupByFreshflag() Group by the FreshFlag column
 * @method CountrefQuery groupByTotalcount() Group by the TotalCount column
 * @method CountrefQuery groupByTotalfamcount() Group by the TotalFamCount column
 * @method CountrefQuery groupByTotalcomplete() Group by the TotalComplete column
 * @method CountrefQuery groupByTotallit() Group by the TotalLit column
 * @method CountrefQuery groupByTotalfamlit() Group by the TotalFamLit column
 * @method CountrefQuery groupByTotalref() Group by the TotalRef column
 * @method CountrefQuery groupByLastupdate() Group by the LastUpdate column
 * @method CountrefQuery groupByMorphcountfresh() Group by the MorphCountFresh column
 * @method CountrefQuery groupByOccurcountfresh() Group by the OccurCountFresh column
 * @method CountrefQuery groupByPiccountfresh() Group by the PicCountFresh column
 * @method CountrefQuery groupByGrowthcountfresh() Group by the GrowthCountFresh column
 * @method CountrefQuery groupByFoodcountfresh() Group by the FoodCountFresh column
 * @method CountrefQuery groupByDietcountfresh() Group by the DietCountFresh column
 * @method CountrefQuery groupByReproductioncountfresh() Group by the ReproductionCountFresh column
 * @method CountrefQuery groupBySpawningcountfresh() Group by the SpawningCountFresh column
 * @method CountrefQuery groupByMorphcountmarine() Group by the MorphCountMarine column
 * @method CountrefQuery groupByOccurcountmarine() Group by the OccurCountMarine column
 * @method CountrefQuery groupByPiccountmarine() Group by the PicCountMarine column
 * @method CountrefQuery groupByGrowthcountmarine() Group by the GrowthCountMarine column
 * @method CountrefQuery groupByFoodcountmarine() Group by the FoodCountMarine column
 * @method CountrefQuery groupByDietcountmarine() Group by the DietCountMarine column
 * @method CountrefQuery groupByReproductioncountmarine() Group by the ReproductionCountMarine column
 * @method CountrefQuery groupBySpawningcountmarine() Group by the SpawningCountMarine column
 * @method CountrefQuery groupByLatdegfill() Group by the LatDegFill column
 * @method CountrefQuery groupByLatminfill() Group by the LatMinFill column
 * @method CountrefQuery groupByNorthsouthfill() Group by the NorthSouthFill column
 * @method CountrefQuery groupByLongdegfill() Group by the LongDegFill column
 * @method CountrefQuery groupByLongminfill() Group by the LongMinFill column
 * @method CountrefQuery groupByEastwestfill() Group by the EastWestFill column
 * @method CountrefQuery groupByMlatdegfill() Group by the MLatDegFill column
 * @method CountrefQuery groupByMlatminfill() Group by the MLatMinFill column
 * @method CountrefQuery groupByMnorthsouthfill() Group by the MNorthSouthFill column
 * @method CountrefQuery groupByMlongdegfill() Group by the MLongDegFill column
 * @method CountrefQuery groupByMlongminfill() Group by the MLongMinFill column
 * @method CountrefQuery groupByMeastwestfill() Group by the MEastWestFill column
 * @method CountrefQuery groupByMlatdegfill2() Group by the MLatDegFill2 column
 * @method CountrefQuery groupByMlatminfill2() Group by the MLatMinFill2 column
 * @method CountrefQuery groupByMnorthsouthfill2() Group by the MNorthSouthFill2 column
 * @method CountrefQuery groupByMlongdegfill2() Group by the MLongDegFill2 column
 * @method CountrefQuery groupByMlongminfill2() Group by the MLongMinFill2 column
 * @method CountrefQuery groupByMeastwestfill2() Group by the MEastWestFill2 column
 * @method CountrefQuery groupByMlatdegfill3() Group by the MLatDegFill3 column
 * @method CountrefQuery groupByMlatminfill3() Group by the MLatMinFill3 column
 * @method CountrefQuery groupByMnorthsouthfill3() Group by the MNorthSouthFill3 column
 * @method CountrefQuery groupByMlongdegfill3() Group by the MLongDegFill3 column
 * @method CountrefQuery groupByMlongminfill3() Group by the MLongMinFill3 column
 * @method CountrefQuery groupByMeastwestfill3() Group by the MEastWestFill3 column
 * @method CountrefQuery groupByMlatdegfill4() Group by the MLatDegFill4 column
 * @method CountrefQuery groupByMlatminfill4() Group by the MLatMinFill4 column
 * @method CountrefQuery groupByMnorthsouthfill4() Group by the MNorthSouthFill4 column
 * @method CountrefQuery groupByMlongdegfill4() Group by the MLongDegFill4 column
 * @method CountrefQuery groupByMlongminfill4() Group by the MLongMinFill4 column
 * @method CountrefQuery groupByMeastwestfill4() Group by the MEastWestFill4 column
 * @method CountrefQuery groupByMlatdegfill5() Group by the MLatDegFill5 column
 * @method CountrefQuery groupByMlatminfill5() Group by the MLatMinFill5 column
 * @method CountrefQuery groupByMnorthsouthfill5() Group by the MNorthSouthFill5 column
 * @method CountrefQuery groupByMlongdegfill5() Group by the MLongDegFill5 column
 * @method CountrefQuery groupByMlongminfill5() Group by the MLongMinFill5 column
 * @method CountrefQuery groupByMeastwestfill5() Group by the MEastWestFill5 column
 * @method CountrefQuery groupByNorthernlatitude() Group by the NorthernLatitude column
 * @method CountrefQuery groupByNorthernlatitudens() Group by the NorthernLatitudeNS column
 * @method CountrefQuery groupBySouthernlatitude() Group by the SouthernLatitude column
 * @method CountrefQuery groupBySouthernlatitudens() Group by the SouthernLatitudeNS column
 * @method CountrefQuery groupByWesternlongitude() Group by the WesternLongitude column
 * @method CountrefQuery groupByWesternlongitudeew() Group by the WesternLongitudeEW column
 * @method CountrefQuery groupByEasternlongitude() Group by the EasternLongitude column
 * @method CountrefQuery groupByEasternlongitudeew() Group by the EasternLongitudeEW column
 * @method CountrefQuery groupByCenterlat() Group by the CenterLat column
 * @method CountrefQuery groupByCenterlong() Group by the CenterLong column
 * @method CountrefQuery groupByOtherlanguage() Group by the OtherLanguage column
 * @method CountrefQuery groupByGeography() Group by the Geography column
 * @method CountrefQuery groupByGeographyref() Group by the GeographyRef column
 * @method CountrefQuery groupByHydrography() Group by the Hydrography column
 * @method CountrefQuery groupByHydrographyref() Group by the HydrographyRef column
 * @method CountrefQuery groupByCommentfresh() Group by the CommentFresh column
 * @method CountrefQuery groupByReffresh1() Group by the RefFresh1 column
 * @method CountrefQuery groupByReffresh2() Group by the RefFresh2 column
 * @method CountrefQuery groupByReffresh3() Group by the RefFresh3 column
 * @method CountrefQuery groupByFreshprimary() Group by the FreshPrimary column
 * @method CountrefQuery groupByFreshsecondary() Group by the FreshSecondary column
 * @method CountrefQuery groupByFreshinto() Group by the FreshInto column
 * @method CountrefQuery groupByInfisheriesreported() Group by the InFisheriesReported column
 * @method CountrefQuery groupByInfisheriespotential() Group by the InFisheriesPotential column
 * @method CountrefQuery groupByInaquareported() Group by the InAquaReported column
 * @method CountrefQuery groupByInaquapotential() Group by the InAquaPotential column
 * @method CountrefQuery groupByExportreported() Group by the ExportReported column
 * @method CountrefQuery groupByExportpotential() Group by the ExportPotential column
 * @method CountrefQuery groupBySportreported() Group by the SportReported column
 * @method CountrefQuery groupBySportpotential() Group by the SportPotential column
 * @method CountrefQuery groupByEndemicreported() Group by the EndemicReported column
 * @method CountrefQuery groupByEndemicpotential() Group by the EndemicPotential column
 * @method CountrefQuery groupByThreatened() Group by the Threatened column
 * @method CountrefQuery groupByProtectedreported() Group by the ProtectedReported column
 * @method CountrefQuery groupByProtectedpotential() Group by the ProtectedPotential column
 * @method CountrefQuery groupByAcp() Group by the ACP column
 * @method CountrefQuery groupByDeveloped() Group by the Developed column
 * @method CountrefQuery groupByMarine() Group by the Marine column
 * @method CountrefQuery groupByBrackish() Group by the Brackish column
 * @method CountrefQuery groupByMarineinto() Group by the MarineInto column
 * @method CountrefQuery groupByMarineinfisheriesreported() Group by the MarineInFisheriesReported column
 * @method CountrefQuery groupByMarineinfisheriespotential() Group by the MarineInFisheriesPotential column
 * @method CountrefQuery groupByMarineinaquareported() Group by the MarineInAquaReported column
 * @method CountrefQuery groupByMarineinaquapotential() Group by the MarineInAquaPotential column
 * @method CountrefQuery groupByMarineexportreported() Group by the MarineExportReported column
 * @method CountrefQuery groupByMarineexportpotential() Group by the MarineExportPotential column
 * @method CountrefQuery groupByMarinesportreported() Group by the MarineSportReported column
 * @method CountrefQuery groupByMarinesportpotential() Group by the MarineSportPotential column
 * @method CountrefQuery groupByMarineendemicreported() Group by the MarineEndemicReported column
 * @method CountrefQuery groupByMarineendemicpotential() Group by the MarineEndemicPotential column
 * @method CountrefQuery groupByMarinethreatened() Group by the MarineThreatened column
 * @method CountrefQuery groupByMarineprotectedreported() Group by the MarineProtectedReported column
 * @method CountrefQuery groupByMarineprotectedpotential() Group by the MarineProtectedPotential column
 * @method CountrefQuery groupByNatfishdb() Group by the NatFishDB column
 * @method CountrefQuery groupByNatfishdb2() Group by the NatFishDB2 column
 * @method CountrefQuery groupByFactbook() Group by the Factbook column
 * @method CountrefQuery groupByNatfishaut() Group by the NatFishAut column
 * @method CountrefQuery groupByTradenames() Group by the TradeNames column
 * @method CountrefQuery groupByEntered() Group by the Entered column
 * @method CountrefQuery groupByDateentered() Group by the DateEntered column
 * @method CountrefQuery groupByModified() Group by the Modified column
 * @method CountrefQuery groupByDatemodified() Group by the DateModified column
 * @method CountrefQuery groupByExpert() Group by the Expert column
 * @method CountrefQuery groupByDatechecked() Group by the DateChecked column
 * @method CountrefQuery groupByGreekOriginal() Group by the Greek_original column
 * @method CountrefQuery groupByGreek() Group by the Greek column
 * @method CountrefQuery groupByRussianOriginal() Group by the RUSSIAN_original column
 * @method CountrefQuery groupByRussian() Group by the RUSSIAN column
 * @method CountrefQuery groupByFrench() Group by the FRENCH column
 * @method CountrefQuery groupBySpanish() Group by the SPANISH column
 * @method CountrefQuery groupByGerman() Group by the GERMAN column
 * @method CountrefQuery groupByDutch() Group by the DUTCH column
 * @method CountrefQuery groupByPortuguese() Group by the PORTUGUESE column
 * @method CountrefQuery groupByItalian() Group by the ITALIAN column
 * @method CountrefQuery groupBySwedish() Group by the SWEDISH column
 * @method CountrefQuery groupByTs() Group by the TS column
 *
 * @method CountrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CountrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CountrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Countref findOne(PropelPDO $con = null) Return the first Countref matching the query
 * @method Countref findOneOrCreate(PropelPDO $con = null) Return the first Countref matching the query, or a new Countref object populated from the query conditions when no match is found
 *
 * @method Countref findOneByPaese(string $PAESE) Return the first Countref filtered by the PAESE column
 * @method Countref findOneByNote(string $Note) Return the first Countref filtered by the Note column
 * @method Countref findOneByAbb(string $ABB) Return the first Countref filtered by the ABB column
 * @method Countref findOneByIsoCode(string $ISO_Code) Return the first Countref filtered by the ISO_Code column
 * @method Countref findOneByIso3alpha(string $ISO3Alpha) Return the first Countref filtered by the ISO3Alpha column
 * @method Countref findOneByIso2alpha(string $ISO2Alpha) Return the first Countref filtered by the ISO2Alpha column
 * @method Countref findOneBySaupCode(int $SAUP_Code) Return the first Countref filtered by the SAUP_Code column
 * @method Countref findOneByUsed(int $Used) Return the first Countref filtered by the Used column
 * @method Countref findOneByCapital(string $Capital) Return the first Countref filtered by the Capital column
 * @method Countref findOneByLatdeg(int $LatDeg) Return the first Countref filtered by the LatDeg column
 * @method Countref findOneByLatmin(double $LatMin) Return the first Countref filtered by the LatMin column
 * @method Countref findOneByNorthsouth(string $NorthSouth) Return the first Countref filtered by the NorthSouth column
 * @method Countref findOneByLongdeg(int $LongDeg) Return the first Countref filtered by the LongDeg column
 * @method Countref findOneByLongmin(double $LongMin) Return the first Countref filtered by the LongMin column
 * @method Countref findOneByEastwest(string $EastWest) Return the first Countref filtered by the EastWest column
 * @method Countref findOneByRemark(string $Remark) Return the first Countref filtered by the Remark column
 * @method Countref findOneByPolarboreal(int $PolarBoreal) Return the first Countref filtered by the PolarBoreal column
 * @method Countref findOneByTemperate(int $Temperate) Return the first Countref filtered by the Temperate column
 * @method Countref findOneBySubtropical(int $Subtropical) Return the first Countref filtered by the Subtropical column
 * @method Countref findOneByTropical(int $Tropical) Return the first Countref filtered by the Tropical column
 * @method Countref findOneByLandlocked(int $Landlocked) Return the first Countref filtered by the Landlocked column
 * @method Countref findOneByGeographicarea(string $GeographicArea) Return the first Countref filtered by the GeographicArea column
 * @method Countref findOneByRegion(string $Region) Return the first Countref filtered by the Region column
 * @method Countref findOneByContinent(string $Continent) Return the first Countref filtered by the Continent column
 * @method Countref findOneByAreacodeinland(int $AreaCodeInland) Return the first Countref filtered by the AreaCodeInland column
 * @method Countref findOneByFaoareainland(string $FAOAreaInland) Return the first Countref filtered by the FAOAreaInland column
 * @method Countref findOneByAreacodemarinei(int $AreaCodeMarineI) Return the first Countref filtered by the AreaCodeMarineI column
 * @method Countref findOneByFaoareamarinei(string $FAOAreaMarineI) Return the first Countref filtered by the FAOAreaMarineI column
 * @method Countref findOneByAreacodemarineii(int $AreaCodeMarineII) Return the first Countref filtered by the AreaCodeMarineII column
 * @method Countref findOneByFaoareamarineii(string $FAOAreaMarineII) Return the first Countref filtered by the FAOAreaMarineII column
 * @method Countref findOneByAreacodemarineiii(int $AreaCodeMarineIII) Return the first Countref filtered by the AreaCodeMarineIII column
 * @method Countref findOneByFaoareamarineiii(string $FAOAreaMarineIII) Return the first Countref filtered by the FAOAreaMarineIII column
 * @method Countref findOneByAreacodemarineiv(int $AreaCodeMarineIV) Return the first Countref filtered by the AreaCodeMarineIV column
 * @method Countref findOneByFaoareamarineiv(string $FAOAreaMarineIV) Return the first Countref filtered by the FAOAreaMarineIV column
 * @method Countref findOneByAreacodemarinev(int $AreaCodeMarineV) Return the first Countref filtered by the AreaCodeMarineV column
 * @method Countref findOneByFaoareamarinev(string $FAOAreaMarineV) Return the first Countref filtered by the FAOAreaMarineV column
 * @method Countref findOneByPopulation(int $Population) Return the first Countref filtered by the Population column
 * @method Countref findOneByPopulationyear(int $PopulationYear) Return the first Countref filtered by the PopulationYear column
 * @method Countref findOneByPopulationrate(double $PopulationRate) Return the first Countref filtered by the PopulationRate column
 * @method Countref findOneByPopulationref(int $PopulationRef) Return the first Countref filtered by the PopulationRef column
 * @method Countref findOneByCoastalpopulation(int $CoastalPopulation) Return the first Countref filtered by the CoastalPopulation column
 * @method Countref findOneByCoastpopref(int $CoastPopRef) Return the first Countref filtered by the CoastPopRef column
 * @method Countref findOneByArea(int $Area) Return the first Countref filtered by the Area column
 * @method Countref findOneByCoastline(int $Coastline) Return the first Countref filtered by the Coastline column
 * @method Countref findOneByCoastlineref(int $CoastlineRef) Return the first Countref filtered by the CoastlineRef column
 * @method Countref findOneByShelfarea(double $ShelfArea) Return the first Countref filtered by the ShelfArea column
 * @method Countref findOneByShelfref(int $ShelfRef) Return the first Countref filtered by the ShelfRef column
 * @method Countref findOneByEecarea(double $EECarea) Return the first Countref filtered by the EECarea column
 * @method Countref findOneByEezref(int $EEZRef) Return the first Countref filtered by the EEZRef column
 * @method Countref findOneByLanguage(string $Language) Return the first Countref filtered by the Language column
 * @method Countref findOneByCurrency(string $Currency) Return the first Countref filtered by the Currency column
 * @method Countref findOneByMarinecount(int $MarineCount) Return the first Countref filtered by the MarineCount column
 * @method Countref findOneByMarinefamcount(int $MarineFamCount) Return the first Countref filtered by the MarineFamCount column
 * @method Countref findOneByCompletemarine(int $CompleteMarine) Return the first Countref filtered by the CompleteMarine column
 * @method Countref findOneByMarinelit(int $MarineLit) Return the first Countref filtered by the MarineLit column
 * @method Countref findOneByMarinefamlit(int $MarineFamLit) Return the first Countref filtered by the MarineFamLit column
 * @method Countref findOneByCheckmarineref(int $CheckMarineRef) Return the first Countref filtered by the CheckMarineRef column
 * @method Countref findOneByMarineflag(int $MarineFlag) Return the first Countref filtered by the MarineFlag column
 * @method Countref findOneByFreshwatercount(int $FreshwaterCount) Return the first Countref filtered by the FreshwaterCount column
 * @method Countref findOneByFreshfamcount(int $FreshFamCount) Return the first Countref filtered by the FreshFamCount column
 * @method Countref findOneByCompletefresh(int $CompleteFresh) Return the first Countref filtered by the CompleteFresh column
 * @method Countref findOneByFreshwaterlit(int $FreshwaterLit) Return the first Countref filtered by the FreshwaterLit column
 * @method Countref findOneByFreshfamlit(int $FreshFamLit) Return the first Countref filtered by the FreshFamLit column
 * @method Countref findOneByCheckfreshref(int $CheckFreshRef) Return the first Countref filtered by the CheckFreshRef column
 * @method Countref findOneByFreshflag(int $FreshFlag) Return the first Countref filtered by the FreshFlag column
 * @method Countref findOneByTotalcount(int $TotalCount) Return the first Countref filtered by the TotalCount column
 * @method Countref findOneByTotalfamcount(int $TotalFamCount) Return the first Countref filtered by the TotalFamCount column
 * @method Countref findOneByTotalcomplete(int $TotalComplete) Return the first Countref filtered by the TotalComplete column
 * @method Countref findOneByTotallit(int $TotalLit) Return the first Countref filtered by the TotalLit column
 * @method Countref findOneByTotalfamlit(int $TotalFamLit) Return the first Countref filtered by the TotalFamLit column
 * @method Countref findOneByTotalref(int $TotalRef) Return the first Countref filtered by the TotalRef column
 * @method Countref findOneByLastupdate(string $LastUpdate) Return the first Countref filtered by the LastUpdate column
 * @method Countref findOneByMorphcountfresh(int $MorphCountFresh) Return the first Countref filtered by the MorphCountFresh column
 * @method Countref findOneByOccurcountfresh(int $OccurCountFresh) Return the first Countref filtered by the OccurCountFresh column
 * @method Countref findOneByPiccountfresh(int $PicCountFresh) Return the first Countref filtered by the PicCountFresh column
 * @method Countref findOneByGrowthcountfresh(int $GrowthCountFresh) Return the first Countref filtered by the GrowthCountFresh column
 * @method Countref findOneByFoodcountfresh(int $FoodCountFresh) Return the first Countref filtered by the FoodCountFresh column
 * @method Countref findOneByDietcountfresh(int $DietCountFresh) Return the first Countref filtered by the DietCountFresh column
 * @method Countref findOneByReproductioncountfresh(int $ReproductionCountFresh) Return the first Countref filtered by the ReproductionCountFresh column
 * @method Countref findOneBySpawningcountfresh(int $SpawningCountFresh) Return the first Countref filtered by the SpawningCountFresh column
 * @method Countref findOneByMorphcountmarine(int $MorphCountMarine) Return the first Countref filtered by the MorphCountMarine column
 * @method Countref findOneByOccurcountmarine(int $OccurCountMarine) Return the first Countref filtered by the OccurCountMarine column
 * @method Countref findOneByPiccountmarine(int $PicCountMarine) Return the first Countref filtered by the PicCountMarine column
 * @method Countref findOneByGrowthcountmarine(int $GrowthCountMarine) Return the first Countref filtered by the GrowthCountMarine column
 * @method Countref findOneByFoodcountmarine(int $FoodCountMarine) Return the first Countref filtered by the FoodCountMarine column
 * @method Countref findOneByDietcountmarine(int $DietCountMarine) Return the first Countref filtered by the DietCountMarine column
 * @method Countref findOneByReproductioncountmarine(int $ReproductionCountMarine) Return the first Countref filtered by the ReproductionCountMarine column
 * @method Countref findOneBySpawningcountmarine(int $SpawningCountMarine) Return the first Countref filtered by the SpawningCountMarine column
 * @method Countref findOneByLatdegfill(int $LatDegFill) Return the first Countref filtered by the LatDegFill column
 * @method Countref findOneByLatminfill(double $LatMinFill) Return the first Countref filtered by the LatMinFill column
 * @method Countref findOneByNorthsouthfill(string $NorthSouthFill) Return the first Countref filtered by the NorthSouthFill column
 * @method Countref findOneByLongdegfill(int $LongDegFill) Return the first Countref filtered by the LongDegFill column
 * @method Countref findOneByLongminfill(double $LongMinFill) Return the first Countref filtered by the LongMinFill column
 * @method Countref findOneByEastwestfill(string $EastWestFill) Return the first Countref filtered by the EastWestFill column
 * @method Countref findOneByMlatdegfill(int $MLatDegFill) Return the first Countref filtered by the MLatDegFill column
 * @method Countref findOneByMlatminfill(double $MLatMinFill) Return the first Countref filtered by the MLatMinFill column
 * @method Countref findOneByMnorthsouthfill(string $MNorthSouthFill) Return the first Countref filtered by the MNorthSouthFill column
 * @method Countref findOneByMlongdegfill(int $MLongDegFill) Return the first Countref filtered by the MLongDegFill column
 * @method Countref findOneByMlongminfill(double $MLongMinFill) Return the first Countref filtered by the MLongMinFill column
 * @method Countref findOneByMeastwestfill(string $MEastWestFill) Return the first Countref filtered by the MEastWestFill column
 * @method Countref findOneByMlatdegfill2(int $MLatDegFill2) Return the first Countref filtered by the MLatDegFill2 column
 * @method Countref findOneByMlatminfill2(double $MLatMinFill2) Return the first Countref filtered by the MLatMinFill2 column
 * @method Countref findOneByMnorthsouthfill2(string $MNorthSouthFill2) Return the first Countref filtered by the MNorthSouthFill2 column
 * @method Countref findOneByMlongdegfill2(int $MLongDegFill2) Return the first Countref filtered by the MLongDegFill2 column
 * @method Countref findOneByMlongminfill2(double $MLongMinFill2) Return the first Countref filtered by the MLongMinFill2 column
 * @method Countref findOneByMeastwestfill2(string $MEastWestFill2) Return the first Countref filtered by the MEastWestFill2 column
 * @method Countref findOneByMlatdegfill3(int $MLatDegFill3) Return the first Countref filtered by the MLatDegFill3 column
 * @method Countref findOneByMlatminfill3(double $MLatMinFill3) Return the first Countref filtered by the MLatMinFill3 column
 * @method Countref findOneByMnorthsouthfill3(string $MNorthSouthFill3) Return the first Countref filtered by the MNorthSouthFill3 column
 * @method Countref findOneByMlongdegfill3(int $MLongDegFill3) Return the first Countref filtered by the MLongDegFill3 column
 * @method Countref findOneByMlongminfill3(double $MLongMinFill3) Return the first Countref filtered by the MLongMinFill3 column
 * @method Countref findOneByMeastwestfill3(string $MEastWestFill3) Return the first Countref filtered by the MEastWestFill3 column
 * @method Countref findOneByMlatdegfill4(int $MLatDegFill4) Return the first Countref filtered by the MLatDegFill4 column
 * @method Countref findOneByMlatminfill4(double $MLatMinFill4) Return the first Countref filtered by the MLatMinFill4 column
 * @method Countref findOneByMnorthsouthfill4(string $MNorthSouthFill4) Return the first Countref filtered by the MNorthSouthFill4 column
 * @method Countref findOneByMlongdegfill4(int $MLongDegFill4) Return the first Countref filtered by the MLongDegFill4 column
 * @method Countref findOneByMlongminfill4(double $MLongMinFill4) Return the first Countref filtered by the MLongMinFill4 column
 * @method Countref findOneByMeastwestfill4(string $MEastWestFill4) Return the first Countref filtered by the MEastWestFill4 column
 * @method Countref findOneByMlatdegfill5(int $MLatDegFill5) Return the first Countref filtered by the MLatDegFill5 column
 * @method Countref findOneByMlatminfill5(double $MLatMinFill5) Return the first Countref filtered by the MLatMinFill5 column
 * @method Countref findOneByMnorthsouthfill5(string $MNorthSouthFill5) Return the first Countref filtered by the MNorthSouthFill5 column
 * @method Countref findOneByMlongdegfill5(int $MLongDegFill5) Return the first Countref filtered by the MLongDegFill5 column
 * @method Countref findOneByMlongminfill5(double $MLongMinFill5) Return the first Countref filtered by the MLongMinFill5 column
 * @method Countref findOneByMeastwestfill5(string $MEastWestFill5) Return the first Countref filtered by the MEastWestFill5 column
 * @method Countref findOneByNorthernlatitude(int $NorthernLatitude) Return the first Countref filtered by the NorthernLatitude column
 * @method Countref findOneByNorthernlatitudens(string $NorthernLatitudeNS) Return the first Countref filtered by the NorthernLatitudeNS column
 * @method Countref findOneBySouthernlatitude(int $SouthernLatitude) Return the first Countref filtered by the SouthernLatitude column
 * @method Countref findOneBySouthernlatitudens(string $SouthernLatitudeNS) Return the first Countref filtered by the SouthernLatitudeNS column
 * @method Countref findOneByWesternlongitude(int $WesternLongitude) Return the first Countref filtered by the WesternLongitude column
 * @method Countref findOneByWesternlongitudeew(string $WesternLongitudeEW) Return the first Countref filtered by the WesternLongitudeEW column
 * @method Countref findOneByEasternlongitude(int $EasternLongitude) Return the first Countref filtered by the EasternLongitude column
 * @method Countref findOneByEasternlongitudeew(string $EasternLongitudeEW) Return the first Countref filtered by the EasternLongitudeEW column
 * @method Countref findOneByCenterlat(double $CenterLat) Return the first Countref filtered by the CenterLat column
 * @method Countref findOneByCenterlong(double $CenterLong) Return the first Countref filtered by the CenterLong column
 * @method Countref findOneByOtherlanguage(string $OtherLanguage) Return the first Countref filtered by the OtherLanguage column
 * @method Countref findOneByGeography(string $Geography) Return the first Countref filtered by the Geography column
 * @method Countref findOneByGeographyref(int $GeographyRef) Return the first Countref filtered by the GeographyRef column
 * @method Countref findOneByHydrography(string $Hydrography) Return the first Countref filtered by the Hydrography column
 * @method Countref findOneByHydrographyref(int $HydrographyRef) Return the first Countref filtered by the HydrographyRef column
 * @method Countref findOneByCommentfresh(string $CommentFresh) Return the first Countref filtered by the CommentFresh column
 * @method Countref findOneByReffresh1(int $RefFresh1) Return the first Countref filtered by the RefFresh1 column
 * @method Countref findOneByReffresh2(int $RefFresh2) Return the first Countref filtered by the RefFresh2 column
 * @method Countref findOneByReffresh3(int $RefFresh3) Return the first Countref filtered by the RefFresh3 column
 * @method Countref findOneByFreshprimary(int $FreshPrimary) Return the first Countref filtered by the FreshPrimary column
 * @method Countref findOneByFreshsecondary(int $FreshSecondary) Return the first Countref filtered by the FreshSecondary column
 * @method Countref findOneByFreshinto(int $FreshInto) Return the first Countref filtered by the FreshInto column
 * @method Countref findOneByInfisheriesreported(int $InFisheriesReported) Return the first Countref filtered by the InFisheriesReported column
 * @method Countref findOneByInfisheriespotential(int $InFisheriesPotential) Return the first Countref filtered by the InFisheriesPotential column
 * @method Countref findOneByInaquareported(int $InAquaReported) Return the first Countref filtered by the InAquaReported column
 * @method Countref findOneByInaquapotential(int $InAquaPotential) Return the first Countref filtered by the InAquaPotential column
 * @method Countref findOneByExportreported(int $ExportReported) Return the first Countref filtered by the ExportReported column
 * @method Countref findOneByExportpotential(int $ExportPotential) Return the first Countref filtered by the ExportPotential column
 * @method Countref findOneBySportreported(int $SportReported) Return the first Countref filtered by the SportReported column
 * @method Countref findOneBySportpotential(int $SportPotential) Return the first Countref filtered by the SportPotential column
 * @method Countref findOneByEndemicreported(int $EndemicReported) Return the first Countref filtered by the EndemicReported column
 * @method Countref findOneByEndemicpotential(int $EndemicPotential) Return the first Countref filtered by the EndemicPotential column
 * @method Countref findOneByThreatened(int $Threatened) Return the first Countref filtered by the Threatened column
 * @method Countref findOneByProtectedreported(double $ProtectedReported) Return the first Countref filtered by the ProtectedReported column
 * @method Countref findOneByProtectedpotential(int $ProtectedPotential) Return the first Countref filtered by the ProtectedPotential column
 * @method Countref findOneByAcp(int $ACP) Return the first Countref filtered by the ACP column
 * @method Countref findOneByDeveloped(int $Developed) Return the first Countref filtered by the Developed column
 * @method Countref findOneByMarine(int $Marine) Return the first Countref filtered by the Marine column
 * @method Countref findOneByBrackish(int $Brackish) Return the first Countref filtered by the Brackish column
 * @method Countref findOneByMarineinto(int $MarineInto) Return the first Countref filtered by the MarineInto column
 * @method Countref findOneByMarineinfisheriesreported(int $MarineInFisheriesReported) Return the first Countref filtered by the MarineInFisheriesReported column
 * @method Countref findOneByMarineinfisheriespotential(int $MarineInFisheriesPotential) Return the first Countref filtered by the MarineInFisheriesPotential column
 * @method Countref findOneByMarineinaquareported(int $MarineInAquaReported) Return the first Countref filtered by the MarineInAquaReported column
 * @method Countref findOneByMarineinaquapotential(int $MarineInAquaPotential) Return the first Countref filtered by the MarineInAquaPotential column
 * @method Countref findOneByMarineexportreported(int $MarineExportReported) Return the first Countref filtered by the MarineExportReported column
 * @method Countref findOneByMarineexportpotential(int $MarineExportPotential) Return the first Countref filtered by the MarineExportPotential column
 * @method Countref findOneByMarinesportreported(int $MarineSportReported) Return the first Countref filtered by the MarineSportReported column
 * @method Countref findOneByMarinesportpotential(int $MarineSportPotential) Return the first Countref filtered by the MarineSportPotential column
 * @method Countref findOneByMarineendemicreported(int $MarineEndemicReported) Return the first Countref filtered by the MarineEndemicReported column
 * @method Countref findOneByMarineendemicpotential(int $MarineEndemicPotential) Return the first Countref filtered by the MarineEndemicPotential column
 * @method Countref findOneByMarinethreatened(int $MarineThreatened) Return the first Countref filtered by the MarineThreatened column
 * @method Countref findOneByMarineprotectedreported(double $MarineProtectedReported) Return the first Countref filtered by the MarineProtectedReported column
 * @method Countref findOneByMarineprotectedpotential(int $MarineProtectedPotential) Return the first Countref filtered by the MarineProtectedPotential column
 * @method Countref findOneByNatfishdb(string $NatFishDB) Return the first Countref filtered by the NatFishDB column
 * @method Countref findOneByNatfishdb2(string $NatFishDB2) Return the first Countref filtered by the NatFishDB2 column
 * @method Countref findOneByFactbook(string $Factbook) Return the first Countref filtered by the Factbook column
 * @method Countref findOneByNatfishaut(string $NatFishAut) Return the first Countref filtered by the NatFishAut column
 * @method Countref findOneByTradenames(string $TradeNames) Return the first Countref filtered by the TradeNames column
 * @method Countref findOneByEntered(int $Entered) Return the first Countref filtered by the Entered column
 * @method Countref findOneByDateentered(string $DateEntered) Return the first Countref filtered by the DateEntered column
 * @method Countref findOneByModified(int $Modified) Return the first Countref filtered by the Modified column
 * @method Countref findOneByDatemodified(string $DateModified) Return the first Countref filtered by the DateModified column
 * @method Countref findOneByExpert(int $Expert) Return the first Countref filtered by the Expert column
 * @method Countref findOneByDatechecked(string $DateChecked) Return the first Countref filtered by the DateChecked column
 * @method Countref findOneByGreekOriginal(string $Greek_original) Return the first Countref filtered by the Greek_original column
 * @method Countref findOneByGreek(string $Greek) Return the first Countref filtered by the Greek column
 * @method Countref findOneByRussianOriginal(string $RUSSIAN_original) Return the first Countref filtered by the RUSSIAN_original column
 * @method Countref findOneByRussian(string $RUSSIAN) Return the first Countref filtered by the RUSSIAN column
 * @method Countref findOneByFrench(string $FRENCH) Return the first Countref filtered by the FRENCH column
 * @method Countref findOneBySpanish(string $SPANISH) Return the first Countref filtered by the SPANISH column
 * @method Countref findOneByGerman(string $GERMAN) Return the first Countref filtered by the GERMAN column
 * @method Countref findOneByDutch(string $DUTCH) Return the first Countref filtered by the DUTCH column
 * @method Countref findOneByPortuguese(string $PORTUGUESE) Return the first Countref filtered by the PORTUGUESE column
 * @method Countref findOneByItalian(string $ITALIAN) Return the first Countref filtered by the ITALIAN column
 * @method Countref findOneBySwedish(string $SWEDISH) Return the first Countref filtered by the SWEDISH column
 * @method Countref findOneByTs(string $TS) Return the first Countref filtered by the TS column
 *
 * @method array findByPaese(string $PAESE) Return Countref objects filtered by the PAESE column
 * @method array findByNote(string $Note) Return Countref objects filtered by the Note column
 * @method array findByCCode(string $C_Code) Return Countref objects filtered by the C_Code column
 * @method array findByAbb(string $ABB) Return Countref objects filtered by the ABB column
 * @method array findByIsoCode(string $ISO_Code) Return Countref objects filtered by the ISO_Code column
 * @method array findByIso3alpha(string $ISO3Alpha) Return Countref objects filtered by the ISO3Alpha column
 * @method array findByIso2alpha(string $ISO2Alpha) Return Countref objects filtered by the ISO2Alpha column
 * @method array findBySaupCode(int $SAUP_Code) Return Countref objects filtered by the SAUP_Code column
 * @method array findByUsed(int $Used) Return Countref objects filtered by the Used column
 * @method array findByCapital(string $Capital) Return Countref objects filtered by the Capital column
 * @method array findByLatdeg(int $LatDeg) Return Countref objects filtered by the LatDeg column
 * @method array findByLatmin(double $LatMin) Return Countref objects filtered by the LatMin column
 * @method array findByNorthsouth(string $NorthSouth) Return Countref objects filtered by the NorthSouth column
 * @method array findByLongdeg(int $LongDeg) Return Countref objects filtered by the LongDeg column
 * @method array findByLongmin(double $LongMin) Return Countref objects filtered by the LongMin column
 * @method array findByEastwest(string $EastWest) Return Countref objects filtered by the EastWest column
 * @method array findByRemark(string $Remark) Return Countref objects filtered by the Remark column
 * @method array findByPolarboreal(int $PolarBoreal) Return Countref objects filtered by the PolarBoreal column
 * @method array findByTemperate(int $Temperate) Return Countref objects filtered by the Temperate column
 * @method array findBySubtropical(int $Subtropical) Return Countref objects filtered by the Subtropical column
 * @method array findByTropical(int $Tropical) Return Countref objects filtered by the Tropical column
 * @method array findByLandlocked(int $Landlocked) Return Countref objects filtered by the Landlocked column
 * @method array findByGeographicarea(string $GeographicArea) Return Countref objects filtered by the GeographicArea column
 * @method array findByRegion(string $Region) Return Countref objects filtered by the Region column
 * @method array findByContinent(string $Continent) Return Countref objects filtered by the Continent column
 * @method array findByAreacodeinland(int $AreaCodeInland) Return Countref objects filtered by the AreaCodeInland column
 * @method array findByFaoareainland(string $FAOAreaInland) Return Countref objects filtered by the FAOAreaInland column
 * @method array findByAreacodemarinei(int $AreaCodeMarineI) Return Countref objects filtered by the AreaCodeMarineI column
 * @method array findByFaoareamarinei(string $FAOAreaMarineI) Return Countref objects filtered by the FAOAreaMarineI column
 * @method array findByAreacodemarineii(int $AreaCodeMarineII) Return Countref objects filtered by the AreaCodeMarineII column
 * @method array findByFaoareamarineii(string $FAOAreaMarineII) Return Countref objects filtered by the FAOAreaMarineII column
 * @method array findByAreacodemarineiii(int $AreaCodeMarineIII) Return Countref objects filtered by the AreaCodeMarineIII column
 * @method array findByFaoareamarineiii(string $FAOAreaMarineIII) Return Countref objects filtered by the FAOAreaMarineIII column
 * @method array findByAreacodemarineiv(int $AreaCodeMarineIV) Return Countref objects filtered by the AreaCodeMarineIV column
 * @method array findByFaoareamarineiv(string $FAOAreaMarineIV) Return Countref objects filtered by the FAOAreaMarineIV column
 * @method array findByAreacodemarinev(int $AreaCodeMarineV) Return Countref objects filtered by the AreaCodeMarineV column
 * @method array findByFaoareamarinev(string $FAOAreaMarineV) Return Countref objects filtered by the FAOAreaMarineV column
 * @method array findByPopulation(int $Population) Return Countref objects filtered by the Population column
 * @method array findByPopulationyear(int $PopulationYear) Return Countref objects filtered by the PopulationYear column
 * @method array findByPopulationrate(double $PopulationRate) Return Countref objects filtered by the PopulationRate column
 * @method array findByPopulationref(int $PopulationRef) Return Countref objects filtered by the PopulationRef column
 * @method array findByCoastalpopulation(int $CoastalPopulation) Return Countref objects filtered by the CoastalPopulation column
 * @method array findByCoastpopref(int $CoastPopRef) Return Countref objects filtered by the CoastPopRef column
 * @method array findByArea(int $Area) Return Countref objects filtered by the Area column
 * @method array findByCoastline(int $Coastline) Return Countref objects filtered by the Coastline column
 * @method array findByCoastlineref(int $CoastlineRef) Return Countref objects filtered by the CoastlineRef column
 * @method array findByShelfarea(double $ShelfArea) Return Countref objects filtered by the ShelfArea column
 * @method array findByShelfref(int $ShelfRef) Return Countref objects filtered by the ShelfRef column
 * @method array findByEecarea(double $EECarea) Return Countref objects filtered by the EECarea column
 * @method array findByEezref(int $EEZRef) Return Countref objects filtered by the EEZRef column
 * @method array findByLanguage(string $Language) Return Countref objects filtered by the Language column
 * @method array findByCurrency(string $Currency) Return Countref objects filtered by the Currency column
 * @method array findByMarinecount(int $MarineCount) Return Countref objects filtered by the MarineCount column
 * @method array findByMarinefamcount(int $MarineFamCount) Return Countref objects filtered by the MarineFamCount column
 * @method array findByCompletemarine(int $CompleteMarine) Return Countref objects filtered by the CompleteMarine column
 * @method array findByMarinelit(int $MarineLit) Return Countref objects filtered by the MarineLit column
 * @method array findByMarinefamlit(int $MarineFamLit) Return Countref objects filtered by the MarineFamLit column
 * @method array findByCheckmarineref(int $CheckMarineRef) Return Countref objects filtered by the CheckMarineRef column
 * @method array findByMarineflag(int $MarineFlag) Return Countref objects filtered by the MarineFlag column
 * @method array findByFreshwatercount(int $FreshwaterCount) Return Countref objects filtered by the FreshwaterCount column
 * @method array findByFreshfamcount(int $FreshFamCount) Return Countref objects filtered by the FreshFamCount column
 * @method array findByCompletefresh(int $CompleteFresh) Return Countref objects filtered by the CompleteFresh column
 * @method array findByFreshwaterlit(int $FreshwaterLit) Return Countref objects filtered by the FreshwaterLit column
 * @method array findByFreshfamlit(int $FreshFamLit) Return Countref objects filtered by the FreshFamLit column
 * @method array findByCheckfreshref(int $CheckFreshRef) Return Countref objects filtered by the CheckFreshRef column
 * @method array findByFreshflag(int $FreshFlag) Return Countref objects filtered by the FreshFlag column
 * @method array findByTotalcount(int $TotalCount) Return Countref objects filtered by the TotalCount column
 * @method array findByTotalfamcount(int $TotalFamCount) Return Countref objects filtered by the TotalFamCount column
 * @method array findByTotalcomplete(int $TotalComplete) Return Countref objects filtered by the TotalComplete column
 * @method array findByTotallit(int $TotalLit) Return Countref objects filtered by the TotalLit column
 * @method array findByTotalfamlit(int $TotalFamLit) Return Countref objects filtered by the TotalFamLit column
 * @method array findByTotalref(int $TotalRef) Return Countref objects filtered by the TotalRef column
 * @method array findByLastupdate(string $LastUpdate) Return Countref objects filtered by the LastUpdate column
 * @method array findByMorphcountfresh(int $MorphCountFresh) Return Countref objects filtered by the MorphCountFresh column
 * @method array findByOccurcountfresh(int $OccurCountFresh) Return Countref objects filtered by the OccurCountFresh column
 * @method array findByPiccountfresh(int $PicCountFresh) Return Countref objects filtered by the PicCountFresh column
 * @method array findByGrowthcountfresh(int $GrowthCountFresh) Return Countref objects filtered by the GrowthCountFresh column
 * @method array findByFoodcountfresh(int $FoodCountFresh) Return Countref objects filtered by the FoodCountFresh column
 * @method array findByDietcountfresh(int $DietCountFresh) Return Countref objects filtered by the DietCountFresh column
 * @method array findByReproductioncountfresh(int $ReproductionCountFresh) Return Countref objects filtered by the ReproductionCountFresh column
 * @method array findBySpawningcountfresh(int $SpawningCountFresh) Return Countref objects filtered by the SpawningCountFresh column
 * @method array findByMorphcountmarine(int $MorphCountMarine) Return Countref objects filtered by the MorphCountMarine column
 * @method array findByOccurcountmarine(int $OccurCountMarine) Return Countref objects filtered by the OccurCountMarine column
 * @method array findByPiccountmarine(int $PicCountMarine) Return Countref objects filtered by the PicCountMarine column
 * @method array findByGrowthcountmarine(int $GrowthCountMarine) Return Countref objects filtered by the GrowthCountMarine column
 * @method array findByFoodcountmarine(int $FoodCountMarine) Return Countref objects filtered by the FoodCountMarine column
 * @method array findByDietcountmarine(int $DietCountMarine) Return Countref objects filtered by the DietCountMarine column
 * @method array findByReproductioncountmarine(int $ReproductionCountMarine) Return Countref objects filtered by the ReproductionCountMarine column
 * @method array findBySpawningcountmarine(int $SpawningCountMarine) Return Countref objects filtered by the SpawningCountMarine column
 * @method array findByLatdegfill(int $LatDegFill) Return Countref objects filtered by the LatDegFill column
 * @method array findByLatminfill(double $LatMinFill) Return Countref objects filtered by the LatMinFill column
 * @method array findByNorthsouthfill(string $NorthSouthFill) Return Countref objects filtered by the NorthSouthFill column
 * @method array findByLongdegfill(int $LongDegFill) Return Countref objects filtered by the LongDegFill column
 * @method array findByLongminfill(double $LongMinFill) Return Countref objects filtered by the LongMinFill column
 * @method array findByEastwestfill(string $EastWestFill) Return Countref objects filtered by the EastWestFill column
 * @method array findByMlatdegfill(int $MLatDegFill) Return Countref objects filtered by the MLatDegFill column
 * @method array findByMlatminfill(double $MLatMinFill) Return Countref objects filtered by the MLatMinFill column
 * @method array findByMnorthsouthfill(string $MNorthSouthFill) Return Countref objects filtered by the MNorthSouthFill column
 * @method array findByMlongdegfill(int $MLongDegFill) Return Countref objects filtered by the MLongDegFill column
 * @method array findByMlongminfill(double $MLongMinFill) Return Countref objects filtered by the MLongMinFill column
 * @method array findByMeastwestfill(string $MEastWestFill) Return Countref objects filtered by the MEastWestFill column
 * @method array findByMlatdegfill2(int $MLatDegFill2) Return Countref objects filtered by the MLatDegFill2 column
 * @method array findByMlatminfill2(double $MLatMinFill2) Return Countref objects filtered by the MLatMinFill2 column
 * @method array findByMnorthsouthfill2(string $MNorthSouthFill2) Return Countref objects filtered by the MNorthSouthFill2 column
 * @method array findByMlongdegfill2(int $MLongDegFill2) Return Countref objects filtered by the MLongDegFill2 column
 * @method array findByMlongminfill2(double $MLongMinFill2) Return Countref objects filtered by the MLongMinFill2 column
 * @method array findByMeastwestfill2(string $MEastWestFill2) Return Countref objects filtered by the MEastWestFill2 column
 * @method array findByMlatdegfill3(int $MLatDegFill3) Return Countref objects filtered by the MLatDegFill3 column
 * @method array findByMlatminfill3(double $MLatMinFill3) Return Countref objects filtered by the MLatMinFill3 column
 * @method array findByMnorthsouthfill3(string $MNorthSouthFill3) Return Countref objects filtered by the MNorthSouthFill3 column
 * @method array findByMlongdegfill3(int $MLongDegFill3) Return Countref objects filtered by the MLongDegFill3 column
 * @method array findByMlongminfill3(double $MLongMinFill3) Return Countref objects filtered by the MLongMinFill3 column
 * @method array findByMeastwestfill3(string $MEastWestFill3) Return Countref objects filtered by the MEastWestFill3 column
 * @method array findByMlatdegfill4(int $MLatDegFill4) Return Countref objects filtered by the MLatDegFill4 column
 * @method array findByMlatminfill4(double $MLatMinFill4) Return Countref objects filtered by the MLatMinFill4 column
 * @method array findByMnorthsouthfill4(string $MNorthSouthFill4) Return Countref objects filtered by the MNorthSouthFill4 column
 * @method array findByMlongdegfill4(int $MLongDegFill4) Return Countref objects filtered by the MLongDegFill4 column
 * @method array findByMlongminfill4(double $MLongMinFill4) Return Countref objects filtered by the MLongMinFill4 column
 * @method array findByMeastwestfill4(string $MEastWestFill4) Return Countref objects filtered by the MEastWestFill4 column
 * @method array findByMlatdegfill5(int $MLatDegFill5) Return Countref objects filtered by the MLatDegFill5 column
 * @method array findByMlatminfill5(double $MLatMinFill5) Return Countref objects filtered by the MLatMinFill5 column
 * @method array findByMnorthsouthfill5(string $MNorthSouthFill5) Return Countref objects filtered by the MNorthSouthFill5 column
 * @method array findByMlongdegfill5(int $MLongDegFill5) Return Countref objects filtered by the MLongDegFill5 column
 * @method array findByMlongminfill5(double $MLongMinFill5) Return Countref objects filtered by the MLongMinFill5 column
 * @method array findByMeastwestfill5(string $MEastWestFill5) Return Countref objects filtered by the MEastWestFill5 column
 * @method array findByNorthernlatitude(int $NorthernLatitude) Return Countref objects filtered by the NorthernLatitude column
 * @method array findByNorthernlatitudens(string $NorthernLatitudeNS) Return Countref objects filtered by the NorthernLatitudeNS column
 * @method array findBySouthernlatitude(int $SouthernLatitude) Return Countref objects filtered by the SouthernLatitude column
 * @method array findBySouthernlatitudens(string $SouthernLatitudeNS) Return Countref objects filtered by the SouthernLatitudeNS column
 * @method array findByWesternlongitude(int $WesternLongitude) Return Countref objects filtered by the WesternLongitude column
 * @method array findByWesternlongitudeew(string $WesternLongitudeEW) Return Countref objects filtered by the WesternLongitudeEW column
 * @method array findByEasternlongitude(int $EasternLongitude) Return Countref objects filtered by the EasternLongitude column
 * @method array findByEasternlongitudeew(string $EasternLongitudeEW) Return Countref objects filtered by the EasternLongitudeEW column
 * @method array findByCenterlat(double $CenterLat) Return Countref objects filtered by the CenterLat column
 * @method array findByCenterlong(double $CenterLong) Return Countref objects filtered by the CenterLong column
 * @method array findByOtherlanguage(string $OtherLanguage) Return Countref objects filtered by the OtherLanguage column
 * @method array findByGeography(string $Geography) Return Countref objects filtered by the Geography column
 * @method array findByGeographyref(int $GeographyRef) Return Countref objects filtered by the GeographyRef column
 * @method array findByHydrography(string $Hydrography) Return Countref objects filtered by the Hydrography column
 * @method array findByHydrographyref(int $HydrographyRef) Return Countref objects filtered by the HydrographyRef column
 * @method array findByCommentfresh(string $CommentFresh) Return Countref objects filtered by the CommentFresh column
 * @method array findByReffresh1(int $RefFresh1) Return Countref objects filtered by the RefFresh1 column
 * @method array findByReffresh2(int $RefFresh2) Return Countref objects filtered by the RefFresh2 column
 * @method array findByReffresh3(int $RefFresh3) Return Countref objects filtered by the RefFresh3 column
 * @method array findByFreshprimary(int $FreshPrimary) Return Countref objects filtered by the FreshPrimary column
 * @method array findByFreshsecondary(int $FreshSecondary) Return Countref objects filtered by the FreshSecondary column
 * @method array findByFreshinto(int $FreshInto) Return Countref objects filtered by the FreshInto column
 * @method array findByInfisheriesreported(int $InFisheriesReported) Return Countref objects filtered by the InFisheriesReported column
 * @method array findByInfisheriespotential(int $InFisheriesPotential) Return Countref objects filtered by the InFisheriesPotential column
 * @method array findByInaquareported(int $InAquaReported) Return Countref objects filtered by the InAquaReported column
 * @method array findByInaquapotential(int $InAquaPotential) Return Countref objects filtered by the InAquaPotential column
 * @method array findByExportreported(int $ExportReported) Return Countref objects filtered by the ExportReported column
 * @method array findByExportpotential(int $ExportPotential) Return Countref objects filtered by the ExportPotential column
 * @method array findBySportreported(int $SportReported) Return Countref objects filtered by the SportReported column
 * @method array findBySportpotential(int $SportPotential) Return Countref objects filtered by the SportPotential column
 * @method array findByEndemicreported(int $EndemicReported) Return Countref objects filtered by the EndemicReported column
 * @method array findByEndemicpotential(int $EndemicPotential) Return Countref objects filtered by the EndemicPotential column
 * @method array findByThreatened(int $Threatened) Return Countref objects filtered by the Threatened column
 * @method array findByProtectedreported(double $ProtectedReported) Return Countref objects filtered by the ProtectedReported column
 * @method array findByProtectedpotential(int $ProtectedPotential) Return Countref objects filtered by the ProtectedPotential column
 * @method array findByAcp(int $ACP) Return Countref objects filtered by the ACP column
 * @method array findByDeveloped(int $Developed) Return Countref objects filtered by the Developed column
 * @method array findByMarine(int $Marine) Return Countref objects filtered by the Marine column
 * @method array findByBrackish(int $Brackish) Return Countref objects filtered by the Brackish column
 * @method array findByMarineinto(int $MarineInto) Return Countref objects filtered by the MarineInto column
 * @method array findByMarineinfisheriesreported(int $MarineInFisheriesReported) Return Countref objects filtered by the MarineInFisheriesReported column
 * @method array findByMarineinfisheriespotential(int $MarineInFisheriesPotential) Return Countref objects filtered by the MarineInFisheriesPotential column
 * @method array findByMarineinaquareported(int $MarineInAquaReported) Return Countref objects filtered by the MarineInAquaReported column
 * @method array findByMarineinaquapotential(int $MarineInAquaPotential) Return Countref objects filtered by the MarineInAquaPotential column
 * @method array findByMarineexportreported(int $MarineExportReported) Return Countref objects filtered by the MarineExportReported column
 * @method array findByMarineexportpotential(int $MarineExportPotential) Return Countref objects filtered by the MarineExportPotential column
 * @method array findByMarinesportreported(int $MarineSportReported) Return Countref objects filtered by the MarineSportReported column
 * @method array findByMarinesportpotential(int $MarineSportPotential) Return Countref objects filtered by the MarineSportPotential column
 * @method array findByMarineendemicreported(int $MarineEndemicReported) Return Countref objects filtered by the MarineEndemicReported column
 * @method array findByMarineendemicpotential(int $MarineEndemicPotential) Return Countref objects filtered by the MarineEndemicPotential column
 * @method array findByMarinethreatened(int $MarineThreatened) Return Countref objects filtered by the MarineThreatened column
 * @method array findByMarineprotectedreported(double $MarineProtectedReported) Return Countref objects filtered by the MarineProtectedReported column
 * @method array findByMarineprotectedpotential(int $MarineProtectedPotential) Return Countref objects filtered by the MarineProtectedPotential column
 * @method array findByNatfishdb(string $NatFishDB) Return Countref objects filtered by the NatFishDB column
 * @method array findByNatfishdb2(string $NatFishDB2) Return Countref objects filtered by the NatFishDB2 column
 * @method array findByFactbook(string $Factbook) Return Countref objects filtered by the Factbook column
 * @method array findByNatfishaut(string $NatFishAut) Return Countref objects filtered by the NatFishAut column
 * @method array findByTradenames(string $TradeNames) Return Countref objects filtered by the TradeNames column
 * @method array findByEntered(int $Entered) Return Countref objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Countref objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Countref objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Countref objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Countref objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Countref objects filtered by the DateChecked column
 * @method array findByGreekOriginal(string $Greek_original) Return Countref objects filtered by the Greek_original column
 * @method array findByGreek(string $Greek) Return Countref objects filtered by the Greek column
 * @method array findByRussianOriginal(string $RUSSIAN_original) Return Countref objects filtered by the RUSSIAN_original column
 * @method array findByRussian(string $RUSSIAN) Return Countref objects filtered by the RUSSIAN column
 * @method array findByFrench(string $FRENCH) Return Countref objects filtered by the FRENCH column
 * @method array findBySpanish(string $SPANISH) Return Countref objects filtered by the SPANISH column
 * @method array findByGerman(string $GERMAN) Return Countref objects filtered by the GERMAN column
 * @method array findByDutch(string $DUTCH) Return Countref objects filtered by the DUTCH column
 * @method array findByPortuguese(string $PORTUGUESE) Return Countref objects filtered by the PORTUGUESE column
 * @method array findByItalian(string $ITALIAN) Return Countref objects filtered by the ITALIAN column
 * @method array findBySwedish(string $SWEDISH) Return Countref objects filtered by the SWEDISH column
 * @method array findByTs(string $TS) Return Countref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCountrefQuery object.
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
            $modelName = 'Countref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CountrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CountrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CountrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CountrefQuery) {
            return $criteria;
        }
        $query = new CountrefQuery(null, null, $modelAlias);

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
     * @return   Countref|Countref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CountrefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Countref A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCCode($key, $con = null)
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
     * @return                 Countref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `PAESE`, `Note`, `C_Code`, `ABB`, `ISO_Code`, `ISO3Alpha`, `ISO2Alpha`, `SAUP_Code`, `Used`, `Capital`, `LatDeg`, `LatMin`, `NorthSouth`, `LongDeg`, `LongMin`, `EastWest`, `Remark`, `PolarBoreal`, `Temperate`, `Subtropical`, `Tropical`, `Landlocked`, `GeographicArea`, `Region`, `Continent`, `AreaCodeInland`, `FAOAreaInland`, `AreaCodeMarineI`, `FAOAreaMarineI`, `AreaCodeMarineII`, `FAOAreaMarineII`, `AreaCodeMarineIII`, `FAOAreaMarineIII`, `AreaCodeMarineIV`, `FAOAreaMarineIV`, `AreaCodeMarineV`, `FAOAreaMarineV`, `Population`, `PopulationYear`, `PopulationRate`, `PopulationRef`, `CoastalPopulation`, `CoastPopRef`, `Area`, `Coastline`, `CoastlineRef`, `ShelfArea`, `ShelfRef`, `EECarea`, `EEZRef`, `Language`, `Currency`, `MarineCount`, `MarineFamCount`, `CompleteMarine`, `MarineLit`, `MarineFamLit`, `CheckMarineRef`, `MarineFlag`, `FreshwaterCount`, `FreshFamCount`, `CompleteFresh`, `FreshwaterLit`, `FreshFamLit`, `CheckFreshRef`, `FreshFlag`, `TotalCount`, `TotalFamCount`, `TotalComplete`, `TotalLit`, `TotalFamLit`, `TotalRef`, `LastUpdate`, `MorphCountFresh`, `OccurCountFresh`, `PicCountFresh`, `GrowthCountFresh`, `FoodCountFresh`, `DietCountFresh`, `ReproductionCountFresh`, `SpawningCountFresh`, `MorphCountMarine`, `OccurCountMarine`, `PicCountMarine`, `GrowthCountMarine`, `FoodCountMarine`, `DietCountMarine`, `ReproductionCountMarine`, `SpawningCountMarine`, `LatDegFill`, `LatMinFill`, `NorthSouthFill`, `LongDegFill`, `LongMinFill`, `EastWestFill`, `MLatDegFill`, `MLatMinFill`, `MNorthSouthFill`, `MLongDegFill`, `MLongMinFill`, `MEastWestFill`, `MLatDegFill2`, `MLatMinFill2`, `MNorthSouthFill2`, `MLongDegFill2`, `MLongMinFill2`, `MEastWestFill2`, `MLatDegFill3`, `MLatMinFill3`, `MNorthSouthFill3`, `MLongDegFill3`, `MLongMinFill3`, `MEastWestFill3`, `MLatDegFill4`, `MLatMinFill4`, `MNorthSouthFill4`, `MLongDegFill4`, `MLongMinFill4`, `MEastWestFill4`, `MLatDegFill5`, `MLatMinFill5`, `MNorthSouthFill5`, `MLongDegFill5`, `MLongMinFill5`, `MEastWestFill5`, `NorthernLatitude`, `NorthernLatitudeNS`, `SouthernLatitude`, `SouthernLatitudeNS`, `WesternLongitude`, `WesternLongitudeEW`, `EasternLongitude`, `EasternLongitudeEW`, `CenterLat`, `CenterLong`, `OtherLanguage`, `Geography`, `GeographyRef`, `Hydrography`, `HydrographyRef`, `CommentFresh`, `RefFresh1`, `RefFresh2`, `RefFresh3`, `FreshPrimary`, `FreshSecondary`, `FreshInto`, `InFisheriesReported`, `InFisheriesPotential`, `InAquaReported`, `InAquaPotential`, `ExportReported`, `ExportPotential`, `SportReported`, `SportPotential`, `EndemicReported`, `EndemicPotential`, `Threatened`, `ProtectedReported`, `ProtectedPotential`, `ACP`, `Developed`, `Marine`, `Brackish`, `MarineInto`, `MarineInFisheriesReported`, `MarineInFisheriesPotential`, `MarineInAquaReported`, `MarineInAquaPotential`, `MarineExportReported`, `MarineExportPotential`, `MarineSportReported`, `MarineSportPotential`, `MarineEndemicReported`, `MarineEndemicPotential`, `MarineThreatened`, `MarineProtectedReported`, `MarineProtectedPotential`, `NatFishDB`, `NatFishDB2`, `Factbook`, `NatFishAut`, `TradeNames`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Greek_original`, `Greek`, `RUSSIAN_original`, `RUSSIAN`, `FRENCH`, `SPANISH`, `GERMAN`, `DUTCH`, `PORTUGUESE`, `ITALIAN`, `SWEDISH`, `TS` FROM `countref` WHERE `C_Code` = :p0';
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
            $obj = new Countref();
            $obj->hydrate($row);
            CountrefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Countref|Countref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Countref[]|mixed the list of results, formatted by the current formatter
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CountrefPeer::C_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CountrefPeer::C_CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PAESE column
     *
     * Example usage:
     * <code>
     * $query->filterByPaese('fooValue');   // WHERE PAESE = 'fooValue'
     * $query->filterByPaese('%fooValue%'); // WHERE PAESE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPaese($paese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paese)) {
                $paese = str_replace('*', '%', $paese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::PAESE, $paese, $comparison);
    }

    /**
     * Filter the query on the Note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE Note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE Note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrefPeer::NOTE, $note, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrefPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the ABB column
     *
     * Example usage:
     * <code>
     * $query->filterByAbb('fooValue');   // WHERE ABB = 'fooValue'
     * $query->filterByAbb('%fooValue%'); // WHERE ABB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAbb($abb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abb)) {
                $abb = str_replace('*', '%', $abb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ABB, $abb, $comparison);
    }

    /**
     * Filter the query on the ISO_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByIsoCode('fooValue');   // WHERE ISO_Code = 'fooValue'
     * $query->filterByIsoCode('%fooValue%'); // WHERE ISO_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isoCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByIsoCode($isoCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isoCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isoCode)) {
                $isoCode = str_replace('*', '%', $isoCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ISO_CODE, $isoCode, $comparison);
    }

    /**
     * Filter the query on the ISO3Alpha column
     *
     * Example usage:
     * <code>
     * $query->filterByIso3alpha('fooValue');   // WHERE ISO3Alpha = 'fooValue'
     * $query->filterByIso3alpha('%fooValue%'); // WHERE ISO3Alpha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iso3alpha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByIso3alpha($iso3alpha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iso3alpha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $iso3alpha)) {
                $iso3alpha = str_replace('*', '%', $iso3alpha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ISO3ALPHA, $iso3alpha, $comparison);
    }

    /**
     * Filter the query on the ISO2Alpha column
     *
     * Example usage:
     * <code>
     * $query->filterByIso2alpha('fooValue');   // WHERE ISO2Alpha = 'fooValue'
     * $query->filterByIso2alpha('%fooValue%'); // WHERE ISO2Alpha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iso2alpha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByIso2alpha($iso2alpha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iso2alpha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $iso2alpha)) {
                $iso2alpha = str_replace('*', '%', $iso2alpha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ISO2ALPHA, $iso2alpha, $comparison);
    }

    /**
     * Filter the query on the SAUP_Code column
     *
     * Example usage:
     * <code>
     * $query->filterBySaupCode(1234); // WHERE SAUP_Code = 1234
     * $query->filterBySaupCode(array(12, 34)); // WHERE SAUP_Code IN (12, 34)
     * $query->filterBySaupCode(array('min' => 12)); // WHERE SAUP_Code >= 12
     * $query->filterBySaupCode(array('max' => 12)); // WHERE SAUP_Code <= 12
     * </code>
     *
     * @param     mixed $saupCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySaupCode($saupCode = null, $comparison = null)
    {
        if (is_array($saupCode)) {
            $useMinMax = false;
            if (isset($saupCode['min'])) {
                $this->addUsingAlias(CountrefPeer::SAUP_CODE, $saupCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupCode['max'])) {
                $this->addUsingAlias(CountrefPeer::SAUP_CODE, $saupCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SAUP_CODE, $saupCode, $comparison);
    }

    /**
     * Filter the query on the Used column
     *
     * Example usage:
     * <code>
     * $query->filterByUsed(1234); // WHERE Used = 1234
     * $query->filterByUsed(array(12, 34)); // WHERE Used IN (12, 34)
     * $query->filterByUsed(array('min' => 12)); // WHERE Used >= 12
     * $query->filterByUsed(array('max' => 12)); // WHERE Used <= 12
     * </code>
     *
     * @param     mixed $used The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByUsed($used = null, $comparison = null)
    {
        if (is_array($used)) {
            $useMinMax = false;
            if (isset($used['min'])) {
                $this->addUsingAlias(CountrefPeer::USED, $used['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($used['max'])) {
                $this->addUsingAlias(CountrefPeer::USED, $used['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::USED, $used, $comparison);
    }

    /**
     * Filter the query on the Capital column
     *
     * Example usage:
     * <code>
     * $query->filterByCapital('fooValue');   // WHERE Capital = 'fooValue'
     * $query->filterByCapital('%fooValue%'); // WHERE Capital LIKE '%fooValue%'
     * </code>
     *
     * @param     string $capital The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCapital($capital = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($capital)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $capital)) {
                $capital = str_replace('*', '%', $capital);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CAPITAL, $capital, $comparison);
    }

    /**
     * Filter the query on the LatDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatdeg(1234); // WHERE LatDeg = 1234
     * $query->filterByLatdeg(array(12, 34)); // WHERE LatDeg IN (12, 34)
     * $query->filterByLatdeg(array('min' => 12)); // WHERE LatDeg >= 12
     * $query->filterByLatdeg(array('max' => 12)); // WHERE LatDeg <= 12
     * </code>
     *
     * @param     mixed $latdeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLatdeg($latdeg = null, $comparison = null)
    {
        if (is_array($latdeg)) {
            $useMinMax = false;
            if (isset($latdeg['min'])) {
                $this->addUsingAlias(CountrefPeer::LATDEG, $latdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdeg['max'])) {
                $this->addUsingAlias(CountrefPeer::LATDEG, $latdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LATDEG, $latdeg, $comparison);
    }

    /**
     * Filter the query on the LatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatmin(1234); // WHERE LatMin = 1234
     * $query->filterByLatmin(array(12, 34)); // WHERE LatMin IN (12, 34)
     * $query->filterByLatmin(array('min' => 12)); // WHERE LatMin >= 12
     * $query->filterByLatmin(array('max' => 12)); // WHERE LatMin <= 12
     * </code>
     *
     * @param     mixed $latmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLatmin($latmin = null, $comparison = null)
    {
        if (is_array($latmin)) {
            $useMinMax = false;
            if (isset($latmin['min'])) {
                $this->addUsingAlias(CountrefPeer::LATMIN, $latmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latmin['max'])) {
                $this->addUsingAlias(CountrefPeer::LATMIN, $latmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LATMIN, $latmin, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrefPeer::NORTHSOUTH, $northsouth, $comparison);
    }

    /**
     * Filter the query on the LongDeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLongdeg(1234); // WHERE LongDeg = 1234
     * $query->filterByLongdeg(array(12, 34)); // WHERE LongDeg IN (12, 34)
     * $query->filterByLongdeg(array('min' => 12)); // WHERE LongDeg >= 12
     * $query->filterByLongdeg(array('max' => 12)); // WHERE LongDeg <= 12
     * </code>
     *
     * @param     mixed $longdeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLongdeg($longdeg = null, $comparison = null)
    {
        if (is_array($longdeg)) {
            $useMinMax = false;
            if (isset($longdeg['min'])) {
                $this->addUsingAlias(CountrefPeer::LONGDEG, $longdeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdeg['max'])) {
                $this->addUsingAlias(CountrefPeer::LONGDEG, $longdeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LONGDEG, $longdeg, $comparison);
    }

    /**
     * Filter the query on the LongMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLongmin(1234); // WHERE LongMin = 1234
     * $query->filterByLongmin(array(12, 34)); // WHERE LongMin IN (12, 34)
     * $query->filterByLongmin(array('min' => 12)); // WHERE LongMin >= 12
     * $query->filterByLongmin(array('max' => 12)); // WHERE LongMin <= 12
     * </code>
     *
     * @param     mixed $longmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLongmin($longmin = null, $comparison = null)
    {
        if (is_array($longmin)) {
            $useMinMax = false;
            if (isset($longmin['min'])) {
                $this->addUsingAlias(CountrefPeer::LONGMIN, $longmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longmin['max'])) {
                $this->addUsingAlias(CountrefPeer::LONGMIN, $longmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LONGMIN, $longmin, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrefPeer::EASTWEST, $eastwest, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the PolarBoreal column
     *
     * Example usage:
     * <code>
     * $query->filterByPolarboreal(1234); // WHERE PolarBoreal = 1234
     * $query->filterByPolarboreal(array(12, 34)); // WHERE PolarBoreal IN (12, 34)
     * $query->filterByPolarboreal(array('min' => 12)); // WHERE PolarBoreal >= 12
     * $query->filterByPolarboreal(array('max' => 12)); // WHERE PolarBoreal <= 12
     * </code>
     *
     * @param     mixed $polarboreal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPolarboreal($polarboreal = null, $comparison = null)
    {
        if (is_array($polarboreal)) {
            $useMinMax = false;
            if (isset($polarboreal['min'])) {
                $this->addUsingAlias(CountrefPeer::POLARBOREAL, $polarboreal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($polarboreal['max'])) {
                $this->addUsingAlias(CountrefPeer::POLARBOREAL, $polarboreal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::POLARBOREAL, $polarboreal, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTemperate($temperate = null, $comparison = null)
    {
        if (is_array($temperate)) {
            $useMinMax = false;
            if (isset($temperate['min'])) {
                $this->addUsingAlias(CountrefPeer::TEMPERATE, $temperate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperate['max'])) {
                $this->addUsingAlias(CountrefPeer::TEMPERATE, $temperate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TEMPERATE, $temperate, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySubtropical($subtropical = null, $comparison = null)
    {
        if (is_array($subtropical)) {
            $useMinMax = false;
            if (isset($subtropical['min'])) {
                $this->addUsingAlias(CountrefPeer::SUBTROPICAL, $subtropical['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtropical['max'])) {
                $this->addUsingAlias(CountrefPeer::SUBTROPICAL, $subtropical['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SUBTROPICAL, $subtropical, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTropical($tropical = null, $comparison = null)
    {
        if (is_array($tropical)) {
            $useMinMax = false;
            if (isset($tropical['min'])) {
                $this->addUsingAlias(CountrefPeer::TROPICAL, $tropical['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tropical['max'])) {
                $this->addUsingAlias(CountrefPeer::TROPICAL, $tropical['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TROPICAL, $tropical, $comparison);
    }

    /**
     * Filter the query on the Landlocked column
     *
     * Example usage:
     * <code>
     * $query->filterByLandlocked(1234); // WHERE Landlocked = 1234
     * $query->filterByLandlocked(array(12, 34)); // WHERE Landlocked IN (12, 34)
     * $query->filterByLandlocked(array('min' => 12)); // WHERE Landlocked >= 12
     * $query->filterByLandlocked(array('max' => 12)); // WHERE Landlocked <= 12
     * </code>
     *
     * @param     mixed $landlocked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLandlocked($landlocked = null, $comparison = null)
    {
        if (is_array($landlocked)) {
            $useMinMax = false;
            if (isset($landlocked['min'])) {
                $this->addUsingAlias(CountrefPeer::LANDLOCKED, $landlocked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($landlocked['max'])) {
                $this->addUsingAlias(CountrefPeer::LANDLOCKED, $landlocked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LANDLOCKED, $landlocked, $comparison);
    }

    /**
     * Filter the query on the GeographicArea column
     *
     * Example usage:
     * <code>
     * $query->filterByGeographicarea('fooValue');   // WHERE GeographicArea = 'fooValue'
     * $query->filterByGeographicarea('%fooValue%'); // WHERE GeographicArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $geographicarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGeographicarea($geographicarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($geographicarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $geographicarea)) {
                $geographicarea = str_replace('*', '%', $geographicarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GEOGRAPHICAREA, $geographicarea, $comparison);
    }

    /**
     * Filter the query on the Region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE Region = 'fooValue'
     * $query->filterByRegion('%fooValue%'); // WHERE Region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $region)) {
                $region = str_replace('*', '%', $region);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the Continent column
     *
     * Example usage:
     * <code>
     * $query->filterByContinent('fooValue');   // WHERE Continent = 'fooValue'
     * $query->filterByContinent('%fooValue%'); // WHERE Continent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $continent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByContinent($continent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($continent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $continent)) {
                $continent = str_replace('*', '%', $continent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CONTINENT, $continent, $comparison);
    }

    /**
     * Filter the query on the AreaCodeInland column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodeinland(1234); // WHERE AreaCodeInland = 1234
     * $query->filterByAreacodeinland(array(12, 34)); // WHERE AreaCodeInland IN (12, 34)
     * $query->filterByAreacodeinland(array('min' => 12)); // WHERE AreaCodeInland >= 12
     * $query->filterByAreacodeinland(array('max' => 12)); // WHERE AreaCodeInland <= 12
     * </code>
     *
     * @param     mixed $areacodeinland The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAreacodeinland($areacodeinland = null, $comparison = null)
    {
        if (is_array($areacodeinland)) {
            $useMinMax = false;
            if (isset($areacodeinland['min'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEINLAND, $areacodeinland['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodeinland['max'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEINLAND, $areacodeinland['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREACODEINLAND, $areacodeinland, $comparison);
    }

    /**
     * Filter the query on the FAOAreaInland column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoareainland('fooValue');   // WHERE FAOAreaInland = 'fooValue'
     * $query->filterByFaoareainland('%fooValue%'); // WHERE FAOAreaInland LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoareainland The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFaoareainland($faoareainland = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoareainland)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoareainland)) {
                $faoareainland = str_replace('*', '%', $faoareainland);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FAOAREAINLAND, $faoareainland, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineI column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarinei(1234); // WHERE AreaCodeMarineI = 1234
     * $query->filterByAreacodemarinei(array(12, 34)); // WHERE AreaCodeMarineI IN (12, 34)
     * $query->filterByAreacodemarinei(array('min' => 12)); // WHERE AreaCodeMarineI >= 12
     * $query->filterByAreacodemarinei(array('max' => 12)); // WHERE AreaCodeMarineI <= 12
     * </code>
     *
     * @param     mixed $areacodemarinei The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarinei($areacodemarinei = null, $comparison = null)
    {
        if (is_array($areacodemarinei)) {
            $useMinMax = false;
            if (isset($areacodemarinei['min'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEI, $areacodemarinei['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarinei['max'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEI, $areacodemarinei['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREACODEMARINEI, $areacodemarinei, $comparison);
    }

    /**
     * Filter the query on the FAOAreaMarineI column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoareamarinei('fooValue');   // WHERE FAOAreaMarineI = 'fooValue'
     * $query->filterByFaoareamarinei('%fooValue%'); // WHERE FAOAreaMarineI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoareamarinei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFaoareamarinei($faoareamarinei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoareamarinei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoareamarinei)) {
                $faoareamarinei = str_replace('*', '%', $faoareamarinei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FAOAREAMARINEI, $faoareamarinei, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineII column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarineii(1234); // WHERE AreaCodeMarineII = 1234
     * $query->filterByAreacodemarineii(array(12, 34)); // WHERE AreaCodeMarineII IN (12, 34)
     * $query->filterByAreacodemarineii(array('min' => 12)); // WHERE AreaCodeMarineII >= 12
     * $query->filterByAreacodemarineii(array('max' => 12)); // WHERE AreaCodeMarineII <= 12
     * </code>
     *
     * @param     mixed $areacodemarineii The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarineii($areacodemarineii = null, $comparison = null)
    {
        if (is_array($areacodemarineii)) {
            $useMinMax = false;
            if (isset($areacodemarineii['min'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEII, $areacodemarineii['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarineii['max'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEII, $areacodemarineii['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREACODEMARINEII, $areacodemarineii, $comparison);
    }

    /**
     * Filter the query on the FAOAreaMarineII column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoareamarineii('fooValue');   // WHERE FAOAreaMarineII = 'fooValue'
     * $query->filterByFaoareamarineii('%fooValue%'); // WHERE FAOAreaMarineII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoareamarineii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFaoareamarineii($faoareamarineii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoareamarineii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoareamarineii)) {
                $faoareamarineii = str_replace('*', '%', $faoareamarineii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FAOAREAMARINEII, $faoareamarineii, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineIII column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarineiii(1234); // WHERE AreaCodeMarineIII = 1234
     * $query->filterByAreacodemarineiii(array(12, 34)); // WHERE AreaCodeMarineIII IN (12, 34)
     * $query->filterByAreacodemarineiii(array('min' => 12)); // WHERE AreaCodeMarineIII >= 12
     * $query->filterByAreacodemarineiii(array('max' => 12)); // WHERE AreaCodeMarineIII <= 12
     * </code>
     *
     * @param     mixed $areacodemarineiii The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarineiii($areacodemarineiii = null, $comparison = null)
    {
        if (is_array($areacodemarineiii)) {
            $useMinMax = false;
            if (isset($areacodemarineiii['min'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEIII, $areacodemarineiii['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarineiii['max'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEIII, $areacodemarineiii['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREACODEMARINEIII, $areacodemarineiii, $comparison);
    }

    /**
     * Filter the query on the FAOAreaMarineIII column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoareamarineiii('fooValue');   // WHERE FAOAreaMarineIII = 'fooValue'
     * $query->filterByFaoareamarineiii('%fooValue%'); // WHERE FAOAreaMarineIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoareamarineiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFaoareamarineiii($faoareamarineiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoareamarineiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoareamarineiii)) {
                $faoareamarineiii = str_replace('*', '%', $faoareamarineiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FAOAREAMARINEIII, $faoareamarineiii, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineIV column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarineiv(1234); // WHERE AreaCodeMarineIV = 1234
     * $query->filterByAreacodemarineiv(array(12, 34)); // WHERE AreaCodeMarineIV IN (12, 34)
     * $query->filterByAreacodemarineiv(array('min' => 12)); // WHERE AreaCodeMarineIV >= 12
     * $query->filterByAreacodemarineiv(array('max' => 12)); // WHERE AreaCodeMarineIV <= 12
     * </code>
     *
     * @param     mixed $areacodemarineiv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarineiv($areacodemarineiv = null, $comparison = null)
    {
        if (is_array($areacodemarineiv)) {
            $useMinMax = false;
            if (isset($areacodemarineiv['min'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEIV, $areacodemarineiv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarineiv['max'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEIV, $areacodemarineiv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREACODEMARINEIV, $areacodemarineiv, $comparison);
    }

    /**
     * Filter the query on the FAOAreaMarineIV column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoareamarineiv('fooValue');   // WHERE FAOAreaMarineIV = 'fooValue'
     * $query->filterByFaoareamarineiv('%fooValue%'); // WHERE FAOAreaMarineIV LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoareamarineiv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFaoareamarineiv($faoareamarineiv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoareamarineiv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoareamarineiv)) {
                $faoareamarineiv = str_replace('*', '%', $faoareamarineiv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FAOAREAMARINEIV, $faoareamarineiv, $comparison);
    }

    /**
     * Filter the query on the AreaCodeMarineV column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacodemarinev(1234); // WHERE AreaCodeMarineV = 1234
     * $query->filterByAreacodemarinev(array(12, 34)); // WHERE AreaCodeMarineV IN (12, 34)
     * $query->filterByAreacodemarinev(array('min' => 12)); // WHERE AreaCodeMarineV >= 12
     * $query->filterByAreacodemarinev(array('max' => 12)); // WHERE AreaCodeMarineV <= 12
     * </code>
     *
     * @param     mixed $areacodemarinev The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAreacodemarinev($areacodemarinev = null, $comparison = null)
    {
        if (is_array($areacodemarinev)) {
            $useMinMax = false;
            if (isset($areacodemarinev['min'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEV, $areacodemarinev['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacodemarinev['max'])) {
                $this->addUsingAlias(CountrefPeer::AREACODEMARINEV, $areacodemarinev['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREACODEMARINEV, $areacodemarinev, $comparison);
    }

    /**
     * Filter the query on the FAOAreaMarineV column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoareamarinev('fooValue');   // WHERE FAOAreaMarineV = 'fooValue'
     * $query->filterByFaoareamarinev('%fooValue%'); // WHERE FAOAreaMarineV LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoareamarinev The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFaoareamarinev($faoareamarinev = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoareamarinev)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoareamarinev)) {
                $faoareamarinev = str_replace('*', '%', $faoareamarinev);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FAOAREAMARINEV, $faoareamarinev, $comparison);
    }

    /**
     * Filter the query on the Population column
     *
     * Example usage:
     * <code>
     * $query->filterByPopulation(1234); // WHERE Population = 1234
     * $query->filterByPopulation(array(12, 34)); // WHERE Population IN (12, 34)
     * $query->filterByPopulation(array('min' => 12)); // WHERE Population >= 12
     * $query->filterByPopulation(array('max' => 12)); // WHERE Population <= 12
     * </code>
     *
     * @param     mixed $population The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPopulation($population = null, $comparison = null)
    {
        if (is_array($population)) {
            $useMinMax = false;
            if (isset($population['min'])) {
                $this->addUsingAlias(CountrefPeer::POPULATION, $population['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($population['max'])) {
                $this->addUsingAlias(CountrefPeer::POPULATION, $population['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::POPULATION, $population, $comparison);
    }

    /**
     * Filter the query on the PopulationYear column
     *
     * Example usage:
     * <code>
     * $query->filterByPopulationyear(1234); // WHERE PopulationYear = 1234
     * $query->filterByPopulationyear(array(12, 34)); // WHERE PopulationYear IN (12, 34)
     * $query->filterByPopulationyear(array('min' => 12)); // WHERE PopulationYear >= 12
     * $query->filterByPopulationyear(array('max' => 12)); // WHERE PopulationYear <= 12
     * </code>
     *
     * @param     mixed $populationyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPopulationyear($populationyear = null, $comparison = null)
    {
        if (is_array($populationyear)) {
            $useMinMax = false;
            if (isset($populationyear['min'])) {
                $this->addUsingAlias(CountrefPeer::POPULATIONYEAR, $populationyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($populationyear['max'])) {
                $this->addUsingAlias(CountrefPeer::POPULATIONYEAR, $populationyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::POPULATIONYEAR, $populationyear, $comparison);
    }

    /**
     * Filter the query on the PopulationRate column
     *
     * Example usage:
     * <code>
     * $query->filterByPopulationrate(1234); // WHERE PopulationRate = 1234
     * $query->filterByPopulationrate(array(12, 34)); // WHERE PopulationRate IN (12, 34)
     * $query->filterByPopulationrate(array('min' => 12)); // WHERE PopulationRate >= 12
     * $query->filterByPopulationrate(array('max' => 12)); // WHERE PopulationRate <= 12
     * </code>
     *
     * @param     mixed $populationrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPopulationrate($populationrate = null, $comparison = null)
    {
        if (is_array($populationrate)) {
            $useMinMax = false;
            if (isset($populationrate['min'])) {
                $this->addUsingAlias(CountrefPeer::POPULATIONRATE, $populationrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($populationrate['max'])) {
                $this->addUsingAlias(CountrefPeer::POPULATIONRATE, $populationrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::POPULATIONRATE, $populationrate, $comparison);
    }

    /**
     * Filter the query on the PopulationRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPopulationref(1234); // WHERE PopulationRef = 1234
     * $query->filterByPopulationref(array(12, 34)); // WHERE PopulationRef IN (12, 34)
     * $query->filterByPopulationref(array('min' => 12)); // WHERE PopulationRef >= 12
     * $query->filterByPopulationref(array('max' => 12)); // WHERE PopulationRef <= 12
     * </code>
     *
     * @param     mixed $populationref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPopulationref($populationref = null, $comparison = null)
    {
        if (is_array($populationref)) {
            $useMinMax = false;
            if (isset($populationref['min'])) {
                $this->addUsingAlias(CountrefPeer::POPULATIONREF, $populationref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($populationref['max'])) {
                $this->addUsingAlias(CountrefPeer::POPULATIONREF, $populationref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::POPULATIONREF, $populationref, $comparison);
    }

    /**
     * Filter the query on the CoastalPopulation column
     *
     * Example usage:
     * <code>
     * $query->filterByCoastalpopulation(1234); // WHERE CoastalPopulation = 1234
     * $query->filterByCoastalpopulation(array(12, 34)); // WHERE CoastalPopulation IN (12, 34)
     * $query->filterByCoastalpopulation(array('min' => 12)); // WHERE CoastalPopulation >= 12
     * $query->filterByCoastalpopulation(array('max' => 12)); // WHERE CoastalPopulation <= 12
     * </code>
     *
     * @param     mixed $coastalpopulation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCoastalpopulation($coastalpopulation = null, $comparison = null)
    {
        if (is_array($coastalpopulation)) {
            $useMinMax = false;
            if (isset($coastalpopulation['min'])) {
                $this->addUsingAlias(CountrefPeer::COASTALPOPULATION, $coastalpopulation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coastalpopulation['max'])) {
                $this->addUsingAlias(CountrefPeer::COASTALPOPULATION, $coastalpopulation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COASTALPOPULATION, $coastalpopulation, $comparison);
    }

    /**
     * Filter the query on the CoastPopRef column
     *
     * Example usage:
     * <code>
     * $query->filterByCoastpopref(1234); // WHERE CoastPopRef = 1234
     * $query->filterByCoastpopref(array(12, 34)); // WHERE CoastPopRef IN (12, 34)
     * $query->filterByCoastpopref(array('min' => 12)); // WHERE CoastPopRef >= 12
     * $query->filterByCoastpopref(array('max' => 12)); // WHERE CoastPopRef <= 12
     * </code>
     *
     * @param     mixed $coastpopref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCoastpopref($coastpopref = null, $comparison = null)
    {
        if (is_array($coastpopref)) {
            $useMinMax = false;
            if (isset($coastpopref['min'])) {
                $this->addUsingAlias(CountrefPeer::COASTPOPREF, $coastpopref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coastpopref['max'])) {
                $this->addUsingAlias(CountrefPeer::COASTPOPREF, $coastpopref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COASTPOPREF, $coastpopref, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(CountrefPeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(CountrefPeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::AREA, $area, $comparison);
    }

    /**
     * Filter the query on the Coastline column
     *
     * Example usage:
     * <code>
     * $query->filterByCoastline(1234); // WHERE Coastline = 1234
     * $query->filterByCoastline(array(12, 34)); // WHERE Coastline IN (12, 34)
     * $query->filterByCoastline(array('min' => 12)); // WHERE Coastline >= 12
     * $query->filterByCoastline(array('max' => 12)); // WHERE Coastline <= 12
     * </code>
     *
     * @param     mixed $coastline The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCoastline($coastline = null, $comparison = null)
    {
        if (is_array($coastline)) {
            $useMinMax = false;
            if (isset($coastline['min'])) {
                $this->addUsingAlias(CountrefPeer::COASTLINE, $coastline['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coastline['max'])) {
                $this->addUsingAlias(CountrefPeer::COASTLINE, $coastline['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COASTLINE, $coastline, $comparison);
    }

    /**
     * Filter the query on the CoastlineRef column
     *
     * Example usage:
     * <code>
     * $query->filterByCoastlineref(1234); // WHERE CoastlineRef = 1234
     * $query->filterByCoastlineref(array(12, 34)); // WHERE CoastlineRef IN (12, 34)
     * $query->filterByCoastlineref(array('min' => 12)); // WHERE CoastlineRef >= 12
     * $query->filterByCoastlineref(array('max' => 12)); // WHERE CoastlineRef <= 12
     * </code>
     *
     * @param     mixed $coastlineref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCoastlineref($coastlineref = null, $comparison = null)
    {
        if (is_array($coastlineref)) {
            $useMinMax = false;
            if (isset($coastlineref['min'])) {
                $this->addUsingAlias(CountrefPeer::COASTLINEREF, $coastlineref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coastlineref['max'])) {
                $this->addUsingAlias(CountrefPeer::COASTLINEREF, $coastlineref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COASTLINEREF, $coastlineref, $comparison);
    }

    /**
     * Filter the query on the ShelfArea column
     *
     * Example usage:
     * <code>
     * $query->filterByShelfarea(1234); // WHERE ShelfArea = 1234
     * $query->filterByShelfarea(array(12, 34)); // WHERE ShelfArea IN (12, 34)
     * $query->filterByShelfarea(array('min' => 12)); // WHERE ShelfArea >= 12
     * $query->filterByShelfarea(array('max' => 12)); // WHERE ShelfArea <= 12
     * </code>
     *
     * @param     mixed $shelfarea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByShelfarea($shelfarea = null, $comparison = null)
    {
        if (is_array($shelfarea)) {
            $useMinMax = false;
            if (isset($shelfarea['min'])) {
                $this->addUsingAlias(CountrefPeer::SHELFAREA, $shelfarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shelfarea['max'])) {
                $this->addUsingAlias(CountrefPeer::SHELFAREA, $shelfarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SHELFAREA, $shelfarea, $comparison);
    }

    /**
     * Filter the query on the ShelfRef column
     *
     * Example usage:
     * <code>
     * $query->filterByShelfref(1234); // WHERE ShelfRef = 1234
     * $query->filterByShelfref(array(12, 34)); // WHERE ShelfRef IN (12, 34)
     * $query->filterByShelfref(array('min' => 12)); // WHERE ShelfRef >= 12
     * $query->filterByShelfref(array('max' => 12)); // WHERE ShelfRef <= 12
     * </code>
     *
     * @param     mixed $shelfref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByShelfref($shelfref = null, $comparison = null)
    {
        if (is_array($shelfref)) {
            $useMinMax = false;
            if (isset($shelfref['min'])) {
                $this->addUsingAlias(CountrefPeer::SHELFREF, $shelfref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shelfref['max'])) {
                $this->addUsingAlias(CountrefPeer::SHELFREF, $shelfref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SHELFREF, $shelfref, $comparison);
    }

    /**
     * Filter the query on the EECarea column
     *
     * Example usage:
     * <code>
     * $query->filterByEecarea(1234); // WHERE EECarea = 1234
     * $query->filterByEecarea(array(12, 34)); // WHERE EECarea IN (12, 34)
     * $query->filterByEecarea(array('min' => 12)); // WHERE EECarea >= 12
     * $query->filterByEecarea(array('max' => 12)); // WHERE EECarea <= 12
     * </code>
     *
     * @param     mixed $eecarea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEecarea($eecarea = null, $comparison = null)
    {
        if (is_array($eecarea)) {
            $useMinMax = false;
            if (isset($eecarea['min'])) {
                $this->addUsingAlias(CountrefPeer::EECAREA, $eecarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eecarea['max'])) {
                $this->addUsingAlias(CountrefPeer::EECAREA, $eecarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EECAREA, $eecarea, $comparison);
    }

    /**
     * Filter the query on the EEZRef column
     *
     * Example usage:
     * <code>
     * $query->filterByEezref(1234); // WHERE EEZRef = 1234
     * $query->filterByEezref(array(12, 34)); // WHERE EEZRef IN (12, 34)
     * $query->filterByEezref(array('min' => 12)); // WHERE EEZRef >= 12
     * $query->filterByEezref(array('max' => 12)); // WHERE EEZRef <= 12
     * </code>
     *
     * @param     mixed $eezref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEezref($eezref = null, $comparison = null)
    {
        if (is_array($eezref)) {
            $useMinMax = false;
            if (isset($eezref['min'])) {
                $this->addUsingAlias(CountrefPeer::EEZREF, $eezref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eezref['max'])) {
                $this->addUsingAlias(CountrefPeer::EEZREF, $eezref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EEZREF, $eezref, $comparison);
    }

    /**
     * Filter the query on the Language column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage('fooValue');   // WHERE Language = 'fooValue'
     * $query->filterByLanguage('%fooValue%'); // WHERE Language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLanguage($language = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language)) {
                $language = str_replace('*', '%', $language);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LANGUAGE, $language, $comparison);
    }

    /**
     * Filter the query on the Currency column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrency('fooValue');   // WHERE Currency = 'fooValue'
     * $query->filterByCurrency('%fooValue%'); // WHERE Currency LIKE '%fooValue%'
     * </code>
     *
     * @param     string $currency The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCurrency($currency = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($currency)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $currency)) {
                $currency = str_replace('*', '%', $currency);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CURRENCY, $currency, $comparison);
    }

    /**
     * Filter the query on the MarineCount column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinecount(1234); // WHERE MarineCount = 1234
     * $query->filterByMarinecount(array(12, 34)); // WHERE MarineCount IN (12, 34)
     * $query->filterByMarinecount(array('min' => 12)); // WHERE MarineCount >= 12
     * $query->filterByMarinecount(array('max' => 12)); // WHERE MarineCount <= 12
     * </code>
     *
     * @param     mixed $marinecount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinecount($marinecount = null, $comparison = null)
    {
        if (is_array($marinecount)) {
            $useMinMax = false;
            if (isset($marinecount['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINECOUNT, $marinecount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinecount['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINECOUNT, $marinecount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINECOUNT, $marinecount, $comparison);
    }

    /**
     * Filter the query on the MarineFamCount column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinefamcount(1234); // WHERE MarineFamCount = 1234
     * $query->filterByMarinefamcount(array(12, 34)); // WHERE MarineFamCount IN (12, 34)
     * $query->filterByMarinefamcount(array('min' => 12)); // WHERE MarineFamCount >= 12
     * $query->filterByMarinefamcount(array('max' => 12)); // WHERE MarineFamCount <= 12
     * </code>
     *
     * @param     mixed $marinefamcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinefamcount($marinefamcount = null, $comparison = null)
    {
        if (is_array($marinefamcount)) {
            $useMinMax = false;
            if (isset($marinefamcount['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEFAMCOUNT, $marinefamcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinefamcount['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEFAMCOUNT, $marinefamcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEFAMCOUNT, $marinefamcount, $comparison);
    }

    /**
     * Filter the query on the CompleteMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByCompletemarine(1234); // WHERE CompleteMarine = 1234
     * $query->filterByCompletemarine(array(12, 34)); // WHERE CompleteMarine IN (12, 34)
     * $query->filterByCompletemarine(array('min' => 12)); // WHERE CompleteMarine >= 12
     * $query->filterByCompletemarine(array('max' => 12)); // WHERE CompleteMarine <= 12
     * </code>
     *
     * @param     mixed $completemarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCompletemarine($completemarine = null, $comparison = null)
    {
        if (is_array($completemarine)) {
            $useMinMax = false;
            if (isset($completemarine['min'])) {
                $this->addUsingAlias(CountrefPeer::COMPLETEMARINE, $completemarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($completemarine['max'])) {
                $this->addUsingAlias(CountrefPeer::COMPLETEMARINE, $completemarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COMPLETEMARINE, $completemarine, $comparison);
    }

    /**
     * Filter the query on the MarineLit column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinelit(1234); // WHERE MarineLit = 1234
     * $query->filterByMarinelit(array(12, 34)); // WHERE MarineLit IN (12, 34)
     * $query->filterByMarinelit(array('min' => 12)); // WHERE MarineLit >= 12
     * $query->filterByMarinelit(array('max' => 12)); // WHERE MarineLit <= 12
     * </code>
     *
     * @param     mixed $marinelit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinelit($marinelit = null, $comparison = null)
    {
        if (is_array($marinelit)) {
            $useMinMax = false;
            if (isset($marinelit['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINELIT, $marinelit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinelit['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINELIT, $marinelit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINELIT, $marinelit, $comparison);
    }

    /**
     * Filter the query on the MarineFamLit column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinefamlit(1234); // WHERE MarineFamLit = 1234
     * $query->filterByMarinefamlit(array(12, 34)); // WHERE MarineFamLit IN (12, 34)
     * $query->filterByMarinefamlit(array('min' => 12)); // WHERE MarineFamLit >= 12
     * $query->filterByMarinefamlit(array('max' => 12)); // WHERE MarineFamLit <= 12
     * </code>
     *
     * @param     mixed $marinefamlit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinefamlit($marinefamlit = null, $comparison = null)
    {
        if (is_array($marinefamlit)) {
            $useMinMax = false;
            if (isset($marinefamlit['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEFAMLIT, $marinefamlit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinefamlit['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEFAMLIT, $marinefamlit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEFAMLIT, $marinefamlit, $comparison);
    }

    /**
     * Filter the query on the CheckMarineRef column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckmarineref(1234); // WHERE CheckMarineRef = 1234
     * $query->filterByCheckmarineref(array(12, 34)); // WHERE CheckMarineRef IN (12, 34)
     * $query->filterByCheckmarineref(array('min' => 12)); // WHERE CheckMarineRef >= 12
     * $query->filterByCheckmarineref(array('max' => 12)); // WHERE CheckMarineRef <= 12
     * </code>
     *
     * @param     mixed $checkmarineref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCheckmarineref($checkmarineref = null, $comparison = null)
    {
        if (is_array($checkmarineref)) {
            $useMinMax = false;
            if (isset($checkmarineref['min'])) {
                $this->addUsingAlias(CountrefPeer::CHECKMARINEREF, $checkmarineref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checkmarineref['max'])) {
                $this->addUsingAlias(CountrefPeer::CHECKMARINEREF, $checkmarineref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CHECKMARINEREF, $checkmarineref, $comparison);
    }

    /**
     * Filter the query on the MarineFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineflag(1234); // WHERE MarineFlag = 1234
     * $query->filterByMarineflag(array(12, 34)); // WHERE MarineFlag IN (12, 34)
     * $query->filterByMarineflag(array('min' => 12)); // WHERE MarineFlag >= 12
     * $query->filterByMarineflag(array('max' => 12)); // WHERE MarineFlag <= 12
     * </code>
     *
     * @param     mixed $marineflag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineflag($marineflag = null, $comparison = null)
    {
        if (is_array($marineflag)) {
            $useMinMax = false;
            if (isset($marineflag['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEFLAG, $marineflag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineflag['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEFLAG, $marineflag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEFLAG, $marineflag, $comparison);
    }

    /**
     * Filter the query on the FreshwaterCount column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshwatercount(1234); // WHERE FreshwaterCount = 1234
     * $query->filterByFreshwatercount(array(12, 34)); // WHERE FreshwaterCount IN (12, 34)
     * $query->filterByFreshwatercount(array('min' => 12)); // WHERE FreshwaterCount >= 12
     * $query->filterByFreshwatercount(array('max' => 12)); // WHERE FreshwaterCount <= 12
     * </code>
     *
     * @param     mixed $freshwatercount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshwatercount($freshwatercount = null, $comparison = null)
    {
        if (is_array($freshwatercount)) {
            $useMinMax = false;
            if (isset($freshwatercount['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHWATERCOUNT, $freshwatercount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshwatercount['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHWATERCOUNT, $freshwatercount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHWATERCOUNT, $freshwatercount, $comparison);
    }

    /**
     * Filter the query on the FreshFamCount column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshfamcount(1234); // WHERE FreshFamCount = 1234
     * $query->filterByFreshfamcount(array(12, 34)); // WHERE FreshFamCount IN (12, 34)
     * $query->filterByFreshfamcount(array('min' => 12)); // WHERE FreshFamCount >= 12
     * $query->filterByFreshfamcount(array('max' => 12)); // WHERE FreshFamCount <= 12
     * </code>
     *
     * @param     mixed $freshfamcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshfamcount($freshfamcount = null, $comparison = null)
    {
        if (is_array($freshfamcount)) {
            $useMinMax = false;
            if (isset($freshfamcount['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHFAMCOUNT, $freshfamcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshfamcount['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHFAMCOUNT, $freshfamcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHFAMCOUNT, $freshfamcount, $comparison);
    }

    /**
     * Filter the query on the CompleteFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByCompletefresh(1234); // WHERE CompleteFresh = 1234
     * $query->filterByCompletefresh(array(12, 34)); // WHERE CompleteFresh IN (12, 34)
     * $query->filterByCompletefresh(array('min' => 12)); // WHERE CompleteFresh >= 12
     * $query->filterByCompletefresh(array('max' => 12)); // WHERE CompleteFresh <= 12
     * </code>
     *
     * @param     mixed $completefresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCompletefresh($completefresh = null, $comparison = null)
    {
        if (is_array($completefresh)) {
            $useMinMax = false;
            if (isset($completefresh['min'])) {
                $this->addUsingAlias(CountrefPeer::COMPLETEFRESH, $completefresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($completefresh['max'])) {
                $this->addUsingAlias(CountrefPeer::COMPLETEFRESH, $completefresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COMPLETEFRESH, $completefresh, $comparison);
    }

    /**
     * Filter the query on the FreshwaterLit column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshwaterlit(1234); // WHERE FreshwaterLit = 1234
     * $query->filterByFreshwaterlit(array(12, 34)); // WHERE FreshwaterLit IN (12, 34)
     * $query->filterByFreshwaterlit(array('min' => 12)); // WHERE FreshwaterLit >= 12
     * $query->filterByFreshwaterlit(array('max' => 12)); // WHERE FreshwaterLit <= 12
     * </code>
     *
     * @param     mixed $freshwaterlit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshwaterlit($freshwaterlit = null, $comparison = null)
    {
        if (is_array($freshwaterlit)) {
            $useMinMax = false;
            if (isset($freshwaterlit['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHWATERLIT, $freshwaterlit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshwaterlit['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHWATERLIT, $freshwaterlit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHWATERLIT, $freshwaterlit, $comparison);
    }

    /**
     * Filter the query on the FreshFamLit column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshfamlit(1234); // WHERE FreshFamLit = 1234
     * $query->filterByFreshfamlit(array(12, 34)); // WHERE FreshFamLit IN (12, 34)
     * $query->filterByFreshfamlit(array('min' => 12)); // WHERE FreshFamLit >= 12
     * $query->filterByFreshfamlit(array('max' => 12)); // WHERE FreshFamLit <= 12
     * </code>
     *
     * @param     mixed $freshfamlit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshfamlit($freshfamlit = null, $comparison = null)
    {
        if (is_array($freshfamlit)) {
            $useMinMax = false;
            if (isset($freshfamlit['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHFAMLIT, $freshfamlit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshfamlit['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHFAMLIT, $freshfamlit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHFAMLIT, $freshfamlit, $comparison);
    }

    /**
     * Filter the query on the CheckFreshRef column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckfreshref(1234); // WHERE CheckFreshRef = 1234
     * $query->filterByCheckfreshref(array(12, 34)); // WHERE CheckFreshRef IN (12, 34)
     * $query->filterByCheckfreshref(array('min' => 12)); // WHERE CheckFreshRef >= 12
     * $query->filterByCheckfreshref(array('max' => 12)); // WHERE CheckFreshRef <= 12
     * </code>
     *
     * @param     mixed $checkfreshref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCheckfreshref($checkfreshref = null, $comparison = null)
    {
        if (is_array($checkfreshref)) {
            $useMinMax = false;
            if (isset($checkfreshref['min'])) {
                $this->addUsingAlias(CountrefPeer::CHECKFRESHREF, $checkfreshref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checkfreshref['max'])) {
                $this->addUsingAlias(CountrefPeer::CHECKFRESHREF, $checkfreshref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CHECKFRESHREF, $checkfreshref, $comparison);
    }

    /**
     * Filter the query on the FreshFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshflag(1234); // WHERE FreshFlag = 1234
     * $query->filterByFreshflag(array(12, 34)); // WHERE FreshFlag IN (12, 34)
     * $query->filterByFreshflag(array('min' => 12)); // WHERE FreshFlag >= 12
     * $query->filterByFreshflag(array('max' => 12)); // WHERE FreshFlag <= 12
     * </code>
     *
     * @param     mixed $freshflag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshflag($freshflag = null, $comparison = null)
    {
        if (is_array($freshflag)) {
            $useMinMax = false;
            if (isset($freshflag['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHFLAG, $freshflag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshflag['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHFLAG, $freshflag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHFLAG, $freshflag, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTotalcount($totalcount = null, $comparison = null)
    {
        if (is_array($totalcount)) {
            $useMinMax = false;
            if (isset($totalcount['min'])) {
                $this->addUsingAlias(CountrefPeer::TOTALCOUNT, $totalcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalcount['max'])) {
                $this->addUsingAlias(CountrefPeer::TOTALCOUNT, $totalcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TOTALCOUNT, $totalcount, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTotalfamcount($totalfamcount = null, $comparison = null)
    {
        if (is_array($totalfamcount)) {
            $useMinMax = false;
            if (isset($totalfamcount['min'])) {
                $this->addUsingAlias(CountrefPeer::TOTALFAMCOUNT, $totalfamcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalfamcount['max'])) {
                $this->addUsingAlias(CountrefPeer::TOTALFAMCOUNT, $totalfamcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TOTALFAMCOUNT, $totalfamcount, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTotalcomplete($totalcomplete = null, $comparison = null)
    {
        if (is_array($totalcomplete)) {
            $useMinMax = false;
            if (isset($totalcomplete['min'])) {
                $this->addUsingAlias(CountrefPeer::TOTALCOMPLETE, $totalcomplete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalcomplete['max'])) {
                $this->addUsingAlias(CountrefPeer::TOTALCOMPLETE, $totalcomplete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TOTALCOMPLETE, $totalcomplete, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTotallit($totallit = null, $comparison = null)
    {
        if (is_array($totallit)) {
            $useMinMax = false;
            if (isset($totallit['min'])) {
                $this->addUsingAlias(CountrefPeer::TOTALLIT, $totallit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totallit['max'])) {
                $this->addUsingAlias(CountrefPeer::TOTALLIT, $totallit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TOTALLIT, $totallit, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTotalfamlit($totalfamlit = null, $comparison = null)
    {
        if (is_array($totalfamlit)) {
            $useMinMax = false;
            if (isset($totalfamlit['min'])) {
                $this->addUsingAlias(CountrefPeer::TOTALFAMLIT, $totalfamlit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalfamlit['max'])) {
                $this->addUsingAlias(CountrefPeer::TOTALFAMLIT, $totalfamlit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TOTALFAMLIT, $totalfamlit, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTotalref($totalref = null, $comparison = null)
    {
        if (is_array($totalref)) {
            $useMinMax = false;
            if (isset($totalref['min'])) {
                $this->addUsingAlias(CountrefPeer::TOTALREF, $totalref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalref['max'])) {
                $this->addUsingAlias(CountrefPeer::TOTALREF, $totalref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TOTALREF, $totalref, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLastupdate($lastupdate = null, $comparison = null)
    {
        if (is_array($lastupdate)) {
            $useMinMax = false;
            if (isset($lastupdate['min'])) {
                $this->addUsingAlias(CountrefPeer::LASTUPDATE, $lastupdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastupdate['max'])) {
                $this->addUsingAlias(CountrefPeer::LASTUPDATE, $lastupdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LASTUPDATE, $lastupdate, $comparison);
    }

    /**
     * Filter the query on the MorphCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByMorphcountfresh(1234); // WHERE MorphCountFresh = 1234
     * $query->filterByMorphcountfresh(array(12, 34)); // WHERE MorphCountFresh IN (12, 34)
     * $query->filterByMorphcountfresh(array('min' => 12)); // WHERE MorphCountFresh >= 12
     * $query->filterByMorphcountfresh(array('max' => 12)); // WHERE MorphCountFresh <= 12
     * </code>
     *
     * @param     mixed $morphcountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMorphcountfresh($morphcountfresh = null, $comparison = null)
    {
        if (is_array($morphcountfresh)) {
            $useMinMax = false;
            if (isset($morphcountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::MORPHCOUNTFRESH, $morphcountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($morphcountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::MORPHCOUNTFRESH, $morphcountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MORPHCOUNTFRESH, $morphcountfresh, $comparison);
    }

    /**
     * Filter the query on the OccurCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurcountfresh(1234); // WHERE OccurCountFresh = 1234
     * $query->filterByOccurcountfresh(array(12, 34)); // WHERE OccurCountFresh IN (12, 34)
     * $query->filterByOccurcountfresh(array('min' => 12)); // WHERE OccurCountFresh >= 12
     * $query->filterByOccurcountfresh(array('max' => 12)); // WHERE OccurCountFresh <= 12
     * </code>
     *
     * @param     mixed $occurcountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByOccurcountfresh($occurcountfresh = null, $comparison = null)
    {
        if (is_array($occurcountfresh)) {
            $useMinMax = false;
            if (isset($occurcountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::OCCURCOUNTFRESH, $occurcountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurcountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::OCCURCOUNTFRESH, $occurcountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::OCCURCOUNTFRESH, $occurcountfresh, $comparison);
    }

    /**
     * Filter the query on the PicCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByPiccountfresh(1234); // WHERE PicCountFresh = 1234
     * $query->filterByPiccountfresh(array(12, 34)); // WHERE PicCountFresh IN (12, 34)
     * $query->filterByPiccountfresh(array('min' => 12)); // WHERE PicCountFresh >= 12
     * $query->filterByPiccountfresh(array('max' => 12)); // WHERE PicCountFresh <= 12
     * </code>
     *
     * @param     mixed $piccountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPiccountfresh($piccountfresh = null, $comparison = null)
    {
        if (is_array($piccountfresh)) {
            $useMinMax = false;
            if (isset($piccountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::PICCOUNTFRESH, $piccountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piccountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::PICCOUNTFRESH, $piccountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::PICCOUNTFRESH, $piccountfresh, $comparison);
    }

    /**
     * Filter the query on the GrowthCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthcountfresh(1234); // WHERE GrowthCountFresh = 1234
     * $query->filterByGrowthcountfresh(array(12, 34)); // WHERE GrowthCountFresh IN (12, 34)
     * $query->filterByGrowthcountfresh(array('min' => 12)); // WHERE GrowthCountFresh >= 12
     * $query->filterByGrowthcountfresh(array('max' => 12)); // WHERE GrowthCountFresh <= 12
     * </code>
     *
     * @param     mixed $growthcountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGrowthcountfresh($growthcountfresh = null, $comparison = null)
    {
        if (is_array($growthcountfresh)) {
            $useMinMax = false;
            if (isset($growthcountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::GROWTHCOUNTFRESH, $growthcountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthcountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::GROWTHCOUNTFRESH, $growthcountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GROWTHCOUNTFRESH, $growthcountfresh, $comparison);
    }

    /**
     * Filter the query on the FoodCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodcountfresh(1234); // WHERE FoodCountFresh = 1234
     * $query->filterByFoodcountfresh(array(12, 34)); // WHERE FoodCountFresh IN (12, 34)
     * $query->filterByFoodcountfresh(array('min' => 12)); // WHERE FoodCountFresh >= 12
     * $query->filterByFoodcountfresh(array('max' => 12)); // WHERE FoodCountFresh <= 12
     * </code>
     *
     * @param     mixed $foodcountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFoodcountfresh($foodcountfresh = null, $comparison = null)
    {
        if (is_array($foodcountfresh)) {
            $useMinMax = false;
            if (isset($foodcountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::FOODCOUNTFRESH, $foodcountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodcountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::FOODCOUNTFRESH, $foodcountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FOODCOUNTFRESH, $foodcountfresh, $comparison);
    }

    /**
     * Filter the query on the DietCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByDietcountfresh(1234); // WHERE DietCountFresh = 1234
     * $query->filterByDietcountfresh(array(12, 34)); // WHERE DietCountFresh IN (12, 34)
     * $query->filterByDietcountfresh(array('min' => 12)); // WHERE DietCountFresh >= 12
     * $query->filterByDietcountfresh(array('max' => 12)); // WHERE DietCountFresh <= 12
     * </code>
     *
     * @param     mixed $dietcountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDietcountfresh($dietcountfresh = null, $comparison = null)
    {
        if (is_array($dietcountfresh)) {
            $useMinMax = false;
            if (isset($dietcountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::DIETCOUNTFRESH, $dietcountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietcountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::DIETCOUNTFRESH, $dietcountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DIETCOUNTFRESH, $dietcountfresh, $comparison);
    }

    /**
     * Filter the query on the ReproductionCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByReproductioncountfresh(1234); // WHERE ReproductionCountFresh = 1234
     * $query->filterByReproductioncountfresh(array(12, 34)); // WHERE ReproductionCountFresh IN (12, 34)
     * $query->filterByReproductioncountfresh(array('min' => 12)); // WHERE ReproductionCountFresh >= 12
     * $query->filterByReproductioncountfresh(array('max' => 12)); // WHERE ReproductionCountFresh <= 12
     * </code>
     *
     * @param     mixed $reproductioncountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByReproductioncountfresh($reproductioncountfresh = null, $comparison = null)
    {
        if (is_array($reproductioncountfresh)) {
            $useMinMax = false;
            if (isset($reproductioncountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::REPRODUCTIONCOUNTFRESH, $reproductioncountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproductioncountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::REPRODUCTIONCOUNTFRESH, $reproductioncountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REPRODUCTIONCOUNTFRESH, $reproductioncountfresh, $comparison);
    }

    /**
     * Filter the query on the SpawningCountFresh column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningcountfresh(1234); // WHERE SpawningCountFresh = 1234
     * $query->filterBySpawningcountfresh(array(12, 34)); // WHERE SpawningCountFresh IN (12, 34)
     * $query->filterBySpawningcountfresh(array('min' => 12)); // WHERE SpawningCountFresh >= 12
     * $query->filterBySpawningcountfresh(array('max' => 12)); // WHERE SpawningCountFresh <= 12
     * </code>
     *
     * @param     mixed $spawningcountfresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySpawningcountfresh($spawningcountfresh = null, $comparison = null)
    {
        if (is_array($spawningcountfresh)) {
            $useMinMax = false;
            if (isset($spawningcountfresh['min'])) {
                $this->addUsingAlias(CountrefPeer::SPAWNINGCOUNTFRESH, $spawningcountfresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningcountfresh['max'])) {
                $this->addUsingAlias(CountrefPeer::SPAWNINGCOUNTFRESH, $spawningcountfresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SPAWNINGCOUNTFRESH, $spawningcountfresh, $comparison);
    }

    /**
     * Filter the query on the MorphCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByMorphcountmarine(1234); // WHERE MorphCountMarine = 1234
     * $query->filterByMorphcountmarine(array(12, 34)); // WHERE MorphCountMarine IN (12, 34)
     * $query->filterByMorphcountmarine(array('min' => 12)); // WHERE MorphCountMarine >= 12
     * $query->filterByMorphcountmarine(array('max' => 12)); // WHERE MorphCountMarine <= 12
     * </code>
     *
     * @param     mixed $morphcountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMorphcountmarine($morphcountmarine = null, $comparison = null)
    {
        if (is_array($morphcountmarine)) {
            $useMinMax = false;
            if (isset($morphcountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::MORPHCOUNTMARINE, $morphcountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($morphcountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::MORPHCOUNTMARINE, $morphcountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MORPHCOUNTMARINE, $morphcountmarine, $comparison);
    }

    /**
     * Filter the query on the OccurCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurcountmarine(1234); // WHERE OccurCountMarine = 1234
     * $query->filterByOccurcountmarine(array(12, 34)); // WHERE OccurCountMarine IN (12, 34)
     * $query->filterByOccurcountmarine(array('min' => 12)); // WHERE OccurCountMarine >= 12
     * $query->filterByOccurcountmarine(array('max' => 12)); // WHERE OccurCountMarine <= 12
     * </code>
     *
     * @param     mixed $occurcountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByOccurcountmarine($occurcountmarine = null, $comparison = null)
    {
        if (is_array($occurcountmarine)) {
            $useMinMax = false;
            if (isset($occurcountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::OCCURCOUNTMARINE, $occurcountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurcountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::OCCURCOUNTMARINE, $occurcountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::OCCURCOUNTMARINE, $occurcountmarine, $comparison);
    }

    /**
     * Filter the query on the PicCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByPiccountmarine(1234); // WHERE PicCountMarine = 1234
     * $query->filterByPiccountmarine(array(12, 34)); // WHERE PicCountMarine IN (12, 34)
     * $query->filterByPiccountmarine(array('min' => 12)); // WHERE PicCountMarine >= 12
     * $query->filterByPiccountmarine(array('max' => 12)); // WHERE PicCountMarine <= 12
     * </code>
     *
     * @param     mixed $piccountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPiccountmarine($piccountmarine = null, $comparison = null)
    {
        if (is_array($piccountmarine)) {
            $useMinMax = false;
            if (isset($piccountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::PICCOUNTMARINE, $piccountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piccountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::PICCOUNTMARINE, $piccountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::PICCOUNTMARINE, $piccountmarine, $comparison);
    }

    /**
     * Filter the query on the GrowthCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthcountmarine(1234); // WHERE GrowthCountMarine = 1234
     * $query->filterByGrowthcountmarine(array(12, 34)); // WHERE GrowthCountMarine IN (12, 34)
     * $query->filterByGrowthcountmarine(array('min' => 12)); // WHERE GrowthCountMarine >= 12
     * $query->filterByGrowthcountmarine(array('max' => 12)); // WHERE GrowthCountMarine <= 12
     * </code>
     *
     * @param     mixed $growthcountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGrowthcountmarine($growthcountmarine = null, $comparison = null)
    {
        if (is_array($growthcountmarine)) {
            $useMinMax = false;
            if (isset($growthcountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::GROWTHCOUNTMARINE, $growthcountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthcountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::GROWTHCOUNTMARINE, $growthcountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GROWTHCOUNTMARINE, $growthcountmarine, $comparison);
    }

    /**
     * Filter the query on the FoodCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodcountmarine(1234); // WHERE FoodCountMarine = 1234
     * $query->filterByFoodcountmarine(array(12, 34)); // WHERE FoodCountMarine IN (12, 34)
     * $query->filterByFoodcountmarine(array('min' => 12)); // WHERE FoodCountMarine >= 12
     * $query->filterByFoodcountmarine(array('max' => 12)); // WHERE FoodCountMarine <= 12
     * </code>
     *
     * @param     mixed $foodcountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFoodcountmarine($foodcountmarine = null, $comparison = null)
    {
        if (is_array($foodcountmarine)) {
            $useMinMax = false;
            if (isset($foodcountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::FOODCOUNTMARINE, $foodcountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodcountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::FOODCOUNTMARINE, $foodcountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FOODCOUNTMARINE, $foodcountmarine, $comparison);
    }

    /**
     * Filter the query on the DietCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByDietcountmarine(1234); // WHERE DietCountMarine = 1234
     * $query->filterByDietcountmarine(array(12, 34)); // WHERE DietCountMarine IN (12, 34)
     * $query->filterByDietcountmarine(array('min' => 12)); // WHERE DietCountMarine >= 12
     * $query->filterByDietcountmarine(array('max' => 12)); // WHERE DietCountMarine <= 12
     * </code>
     *
     * @param     mixed $dietcountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDietcountmarine($dietcountmarine = null, $comparison = null)
    {
        if (is_array($dietcountmarine)) {
            $useMinMax = false;
            if (isset($dietcountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::DIETCOUNTMARINE, $dietcountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietcountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::DIETCOUNTMARINE, $dietcountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DIETCOUNTMARINE, $dietcountmarine, $comparison);
    }

    /**
     * Filter the query on the ReproductionCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterByReproductioncountmarine(1234); // WHERE ReproductionCountMarine = 1234
     * $query->filterByReproductioncountmarine(array(12, 34)); // WHERE ReproductionCountMarine IN (12, 34)
     * $query->filterByReproductioncountmarine(array('min' => 12)); // WHERE ReproductionCountMarine >= 12
     * $query->filterByReproductioncountmarine(array('max' => 12)); // WHERE ReproductionCountMarine <= 12
     * </code>
     *
     * @param     mixed $reproductioncountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByReproductioncountmarine($reproductioncountmarine = null, $comparison = null)
    {
        if (is_array($reproductioncountmarine)) {
            $useMinMax = false;
            if (isset($reproductioncountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::REPRODUCTIONCOUNTMARINE, $reproductioncountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproductioncountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::REPRODUCTIONCOUNTMARINE, $reproductioncountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REPRODUCTIONCOUNTMARINE, $reproductioncountmarine, $comparison);
    }

    /**
     * Filter the query on the SpawningCountMarine column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningcountmarine(1234); // WHERE SpawningCountMarine = 1234
     * $query->filterBySpawningcountmarine(array(12, 34)); // WHERE SpawningCountMarine IN (12, 34)
     * $query->filterBySpawningcountmarine(array('min' => 12)); // WHERE SpawningCountMarine >= 12
     * $query->filterBySpawningcountmarine(array('max' => 12)); // WHERE SpawningCountMarine <= 12
     * </code>
     *
     * @param     mixed $spawningcountmarine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySpawningcountmarine($spawningcountmarine = null, $comparison = null)
    {
        if (is_array($spawningcountmarine)) {
            $useMinMax = false;
            if (isset($spawningcountmarine['min'])) {
                $this->addUsingAlias(CountrefPeer::SPAWNINGCOUNTMARINE, $spawningcountmarine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningcountmarine['max'])) {
                $this->addUsingAlias(CountrefPeer::SPAWNINGCOUNTMARINE, $spawningcountmarine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SPAWNINGCOUNTMARINE, $spawningcountmarine, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLatdegfill($latdegfill = null, $comparison = null)
    {
        if (is_array($latdegfill)) {
            $useMinMax = false;
            if (isset($latdegfill['min'])) {
                $this->addUsingAlias(CountrefPeer::LATDEGFILL, $latdegfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latdegfill['max'])) {
                $this->addUsingAlias(CountrefPeer::LATDEGFILL, $latdegfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LATDEGFILL, $latdegfill, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLatminfill($latminfill = null, $comparison = null)
    {
        if (is_array($latminfill)) {
            $useMinMax = false;
            if (isset($latminfill['min'])) {
                $this->addUsingAlias(CountrefPeer::LATMINFILL, $latminfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latminfill['max'])) {
                $this->addUsingAlias(CountrefPeer::LATMINFILL, $latminfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LATMINFILL, $latminfill, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrefPeer::NORTHSOUTHFILL, $northsouthfill, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLongdegfill($longdegfill = null, $comparison = null)
    {
        if (is_array($longdegfill)) {
            $useMinMax = false;
            if (isset($longdegfill['min'])) {
                $this->addUsingAlias(CountrefPeer::LONGDEGFILL, $longdegfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longdegfill['max'])) {
                $this->addUsingAlias(CountrefPeer::LONGDEGFILL, $longdegfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LONGDEGFILL, $longdegfill, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByLongminfill($longminfill = null, $comparison = null)
    {
        if (is_array($longminfill)) {
            $useMinMax = false;
            if (isset($longminfill['min'])) {
                $this->addUsingAlias(CountrefPeer::LONGMINFILL, $longminfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longminfill['max'])) {
                $this->addUsingAlias(CountrefPeer::LONGMINFILL, $longminfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::LONGMINFILL, $longminfill, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrefPeer::EASTWESTFILL, $eastwestfill, $comparison);
    }

    /**
     * Filter the query on the MLatDegFill column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatdegfill(1234); // WHERE MLatDegFill = 1234
     * $query->filterByMlatdegfill(array(12, 34)); // WHERE MLatDegFill IN (12, 34)
     * $query->filterByMlatdegfill(array('min' => 12)); // WHERE MLatDegFill >= 12
     * $query->filterByMlatdegfill(array('max' => 12)); // WHERE MLatDegFill <= 12
     * </code>
     *
     * @param     mixed $mlatdegfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatdegfill($mlatdegfill = null, $comparison = null)
    {
        if (is_array($mlatdegfill)) {
            $useMinMax = false;
            if (isset($mlatdegfill['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL, $mlatdegfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatdegfill['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL, $mlatdegfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATDEGFILL, $mlatdegfill, $comparison);
    }

    /**
     * Filter the query on the MLatMinFill column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatminfill(1234); // WHERE MLatMinFill = 1234
     * $query->filterByMlatminfill(array(12, 34)); // WHERE MLatMinFill IN (12, 34)
     * $query->filterByMlatminfill(array('min' => 12)); // WHERE MLatMinFill >= 12
     * $query->filterByMlatminfill(array('max' => 12)); // WHERE MLatMinFill <= 12
     * </code>
     *
     * @param     mixed $mlatminfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatminfill($mlatminfill = null, $comparison = null)
    {
        if (is_array($mlatminfill)) {
            $useMinMax = false;
            if (isset($mlatminfill['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL, $mlatminfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatminfill['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL, $mlatminfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATMINFILL, $mlatminfill, $comparison);
    }

    /**
     * Filter the query on the MNorthSouthFill column
     *
     * Example usage:
     * <code>
     * $query->filterByMnorthsouthfill('fooValue');   // WHERE MNorthSouthFill = 'fooValue'
     * $query->filterByMnorthsouthfill('%fooValue%'); // WHERE MNorthSouthFill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mnorthsouthfill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMnorthsouthfill($mnorthsouthfill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnorthsouthfill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mnorthsouthfill)) {
                $mnorthsouthfill = str_replace('*', '%', $mnorthsouthfill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MNORTHSOUTHFILL, $mnorthsouthfill, $comparison);
    }

    /**
     * Filter the query on the MLongDegFill column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongdegfill(1234); // WHERE MLongDegFill = 1234
     * $query->filterByMlongdegfill(array(12, 34)); // WHERE MLongDegFill IN (12, 34)
     * $query->filterByMlongdegfill(array('min' => 12)); // WHERE MLongDegFill >= 12
     * $query->filterByMlongdegfill(array('max' => 12)); // WHERE MLongDegFill <= 12
     * </code>
     *
     * @param     mixed $mlongdegfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongdegfill($mlongdegfill = null, $comparison = null)
    {
        if (is_array($mlongdegfill)) {
            $useMinMax = false;
            if (isset($mlongdegfill['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL, $mlongdegfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongdegfill['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL, $mlongdegfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGDEGFILL, $mlongdegfill, $comparison);
    }

    /**
     * Filter the query on the MLongMinFill column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongminfill(1234); // WHERE MLongMinFill = 1234
     * $query->filterByMlongminfill(array(12, 34)); // WHERE MLongMinFill IN (12, 34)
     * $query->filterByMlongminfill(array('min' => 12)); // WHERE MLongMinFill >= 12
     * $query->filterByMlongminfill(array('max' => 12)); // WHERE MLongMinFill <= 12
     * </code>
     *
     * @param     mixed $mlongminfill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongminfill($mlongminfill = null, $comparison = null)
    {
        if (is_array($mlongminfill)) {
            $useMinMax = false;
            if (isset($mlongminfill['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL, $mlongminfill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongminfill['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL, $mlongminfill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGMINFILL, $mlongminfill, $comparison);
    }

    /**
     * Filter the query on the MEastWestFill column
     *
     * Example usage:
     * <code>
     * $query->filterByMeastwestfill('fooValue');   // WHERE MEastWestFill = 'fooValue'
     * $query->filterByMeastwestfill('%fooValue%'); // WHERE MEastWestFill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meastwestfill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMeastwestfill($meastwestfill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meastwestfill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meastwestfill)) {
                $meastwestfill = str_replace('*', '%', $meastwestfill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MEASTWESTFILL, $meastwestfill, $comparison);
    }

    /**
     * Filter the query on the MLatDegFill2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatdegfill2(1234); // WHERE MLatDegFill2 = 1234
     * $query->filterByMlatdegfill2(array(12, 34)); // WHERE MLatDegFill2 IN (12, 34)
     * $query->filterByMlatdegfill2(array('min' => 12)); // WHERE MLatDegFill2 >= 12
     * $query->filterByMlatdegfill2(array('max' => 12)); // WHERE MLatDegFill2 <= 12
     * </code>
     *
     * @param     mixed $mlatdegfill2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatdegfill2($mlatdegfill2 = null, $comparison = null)
    {
        if (is_array($mlatdegfill2)) {
            $useMinMax = false;
            if (isset($mlatdegfill2['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL2, $mlatdegfill2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatdegfill2['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL2, $mlatdegfill2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATDEGFILL2, $mlatdegfill2, $comparison);
    }

    /**
     * Filter the query on the MLatMinFill2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatminfill2(1234); // WHERE MLatMinFill2 = 1234
     * $query->filterByMlatminfill2(array(12, 34)); // WHERE MLatMinFill2 IN (12, 34)
     * $query->filterByMlatminfill2(array('min' => 12)); // WHERE MLatMinFill2 >= 12
     * $query->filterByMlatminfill2(array('max' => 12)); // WHERE MLatMinFill2 <= 12
     * </code>
     *
     * @param     mixed $mlatminfill2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatminfill2($mlatminfill2 = null, $comparison = null)
    {
        if (is_array($mlatminfill2)) {
            $useMinMax = false;
            if (isset($mlatminfill2['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL2, $mlatminfill2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatminfill2['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL2, $mlatminfill2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATMINFILL2, $mlatminfill2, $comparison);
    }

    /**
     * Filter the query on the MNorthSouthFill2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMnorthsouthfill2('fooValue');   // WHERE MNorthSouthFill2 = 'fooValue'
     * $query->filterByMnorthsouthfill2('%fooValue%'); // WHERE MNorthSouthFill2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mnorthsouthfill2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMnorthsouthfill2($mnorthsouthfill2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnorthsouthfill2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mnorthsouthfill2)) {
                $mnorthsouthfill2 = str_replace('*', '%', $mnorthsouthfill2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MNORTHSOUTHFILL2, $mnorthsouthfill2, $comparison);
    }

    /**
     * Filter the query on the MLongDegFill2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongdegfill2(1234); // WHERE MLongDegFill2 = 1234
     * $query->filterByMlongdegfill2(array(12, 34)); // WHERE MLongDegFill2 IN (12, 34)
     * $query->filterByMlongdegfill2(array('min' => 12)); // WHERE MLongDegFill2 >= 12
     * $query->filterByMlongdegfill2(array('max' => 12)); // WHERE MLongDegFill2 <= 12
     * </code>
     *
     * @param     mixed $mlongdegfill2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongdegfill2($mlongdegfill2 = null, $comparison = null)
    {
        if (is_array($mlongdegfill2)) {
            $useMinMax = false;
            if (isset($mlongdegfill2['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL2, $mlongdegfill2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongdegfill2['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL2, $mlongdegfill2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGDEGFILL2, $mlongdegfill2, $comparison);
    }

    /**
     * Filter the query on the MLongMinFill2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongminfill2(1234); // WHERE MLongMinFill2 = 1234
     * $query->filterByMlongminfill2(array(12, 34)); // WHERE MLongMinFill2 IN (12, 34)
     * $query->filterByMlongminfill2(array('min' => 12)); // WHERE MLongMinFill2 >= 12
     * $query->filterByMlongminfill2(array('max' => 12)); // WHERE MLongMinFill2 <= 12
     * </code>
     *
     * @param     mixed $mlongminfill2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongminfill2($mlongminfill2 = null, $comparison = null)
    {
        if (is_array($mlongminfill2)) {
            $useMinMax = false;
            if (isset($mlongminfill2['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL2, $mlongminfill2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongminfill2['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL2, $mlongminfill2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGMINFILL2, $mlongminfill2, $comparison);
    }

    /**
     * Filter the query on the MEastWestFill2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMeastwestfill2('fooValue');   // WHERE MEastWestFill2 = 'fooValue'
     * $query->filterByMeastwestfill2('%fooValue%'); // WHERE MEastWestFill2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meastwestfill2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMeastwestfill2($meastwestfill2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meastwestfill2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meastwestfill2)) {
                $meastwestfill2 = str_replace('*', '%', $meastwestfill2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MEASTWESTFILL2, $meastwestfill2, $comparison);
    }

    /**
     * Filter the query on the MLatDegFill3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatdegfill3(1234); // WHERE MLatDegFill3 = 1234
     * $query->filterByMlatdegfill3(array(12, 34)); // WHERE MLatDegFill3 IN (12, 34)
     * $query->filterByMlatdegfill3(array('min' => 12)); // WHERE MLatDegFill3 >= 12
     * $query->filterByMlatdegfill3(array('max' => 12)); // WHERE MLatDegFill3 <= 12
     * </code>
     *
     * @param     mixed $mlatdegfill3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatdegfill3($mlatdegfill3 = null, $comparison = null)
    {
        if (is_array($mlatdegfill3)) {
            $useMinMax = false;
            if (isset($mlatdegfill3['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL3, $mlatdegfill3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatdegfill3['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL3, $mlatdegfill3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATDEGFILL3, $mlatdegfill3, $comparison);
    }

    /**
     * Filter the query on the MLatMinFill3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatminfill3(1234); // WHERE MLatMinFill3 = 1234
     * $query->filterByMlatminfill3(array(12, 34)); // WHERE MLatMinFill3 IN (12, 34)
     * $query->filterByMlatminfill3(array('min' => 12)); // WHERE MLatMinFill3 >= 12
     * $query->filterByMlatminfill3(array('max' => 12)); // WHERE MLatMinFill3 <= 12
     * </code>
     *
     * @param     mixed $mlatminfill3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatminfill3($mlatminfill3 = null, $comparison = null)
    {
        if (is_array($mlatminfill3)) {
            $useMinMax = false;
            if (isset($mlatminfill3['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL3, $mlatminfill3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatminfill3['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL3, $mlatminfill3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATMINFILL3, $mlatminfill3, $comparison);
    }

    /**
     * Filter the query on the MNorthSouthFill3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMnorthsouthfill3('fooValue');   // WHERE MNorthSouthFill3 = 'fooValue'
     * $query->filterByMnorthsouthfill3('%fooValue%'); // WHERE MNorthSouthFill3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mnorthsouthfill3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMnorthsouthfill3($mnorthsouthfill3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnorthsouthfill3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mnorthsouthfill3)) {
                $mnorthsouthfill3 = str_replace('*', '%', $mnorthsouthfill3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MNORTHSOUTHFILL3, $mnorthsouthfill3, $comparison);
    }

    /**
     * Filter the query on the MLongDegFill3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongdegfill3(1234); // WHERE MLongDegFill3 = 1234
     * $query->filterByMlongdegfill3(array(12, 34)); // WHERE MLongDegFill3 IN (12, 34)
     * $query->filterByMlongdegfill3(array('min' => 12)); // WHERE MLongDegFill3 >= 12
     * $query->filterByMlongdegfill3(array('max' => 12)); // WHERE MLongDegFill3 <= 12
     * </code>
     *
     * @param     mixed $mlongdegfill3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongdegfill3($mlongdegfill3 = null, $comparison = null)
    {
        if (is_array($mlongdegfill3)) {
            $useMinMax = false;
            if (isset($mlongdegfill3['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL3, $mlongdegfill3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongdegfill3['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL3, $mlongdegfill3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGDEGFILL3, $mlongdegfill3, $comparison);
    }

    /**
     * Filter the query on the MLongMinFill3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongminfill3(1234); // WHERE MLongMinFill3 = 1234
     * $query->filterByMlongminfill3(array(12, 34)); // WHERE MLongMinFill3 IN (12, 34)
     * $query->filterByMlongminfill3(array('min' => 12)); // WHERE MLongMinFill3 >= 12
     * $query->filterByMlongminfill3(array('max' => 12)); // WHERE MLongMinFill3 <= 12
     * </code>
     *
     * @param     mixed $mlongminfill3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongminfill3($mlongminfill3 = null, $comparison = null)
    {
        if (is_array($mlongminfill3)) {
            $useMinMax = false;
            if (isset($mlongminfill3['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL3, $mlongminfill3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongminfill3['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL3, $mlongminfill3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGMINFILL3, $mlongminfill3, $comparison);
    }

    /**
     * Filter the query on the MEastWestFill3 column
     *
     * Example usage:
     * <code>
     * $query->filterByMeastwestfill3('fooValue');   // WHERE MEastWestFill3 = 'fooValue'
     * $query->filterByMeastwestfill3('%fooValue%'); // WHERE MEastWestFill3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meastwestfill3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMeastwestfill3($meastwestfill3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meastwestfill3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meastwestfill3)) {
                $meastwestfill3 = str_replace('*', '%', $meastwestfill3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MEASTWESTFILL3, $meastwestfill3, $comparison);
    }

    /**
     * Filter the query on the MLatDegFill4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatdegfill4(1234); // WHERE MLatDegFill4 = 1234
     * $query->filterByMlatdegfill4(array(12, 34)); // WHERE MLatDegFill4 IN (12, 34)
     * $query->filterByMlatdegfill4(array('min' => 12)); // WHERE MLatDegFill4 >= 12
     * $query->filterByMlatdegfill4(array('max' => 12)); // WHERE MLatDegFill4 <= 12
     * </code>
     *
     * @param     mixed $mlatdegfill4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatdegfill4($mlatdegfill4 = null, $comparison = null)
    {
        if (is_array($mlatdegfill4)) {
            $useMinMax = false;
            if (isset($mlatdegfill4['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL4, $mlatdegfill4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatdegfill4['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL4, $mlatdegfill4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATDEGFILL4, $mlatdegfill4, $comparison);
    }

    /**
     * Filter the query on the MLatMinFill4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatminfill4(1234); // WHERE MLatMinFill4 = 1234
     * $query->filterByMlatminfill4(array(12, 34)); // WHERE MLatMinFill4 IN (12, 34)
     * $query->filterByMlatminfill4(array('min' => 12)); // WHERE MLatMinFill4 >= 12
     * $query->filterByMlatminfill4(array('max' => 12)); // WHERE MLatMinFill4 <= 12
     * </code>
     *
     * @param     mixed $mlatminfill4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatminfill4($mlatminfill4 = null, $comparison = null)
    {
        if (is_array($mlatminfill4)) {
            $useMinMax = false;
            if (isset($mlatminfill4['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL4, $mlatminfill4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatminfill4['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL4, $mlatminfill4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATMINFILL4, $mlatminfill4, $comparison);
    }

    /**
     * Filter the query on the MNorthSouthFill4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMnorthsouthfill4('fooValue');   // WHERE MNorthSouthFill4 = 'fooValue'
     * $query->filterByMnorthsouthfill4('%fooValue%'); // WHERE MNorthSouthFill4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mnorthsouthfill4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMnorthsouthfill4($mnorthsouthfill4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnorthsouthfill4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mnorthsouthfill4)) {
                $mnorthsouthfill4 = str_replace('*', '%', $mnorthsouthfill4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MNORTHSOUTHFILL4, $mnorthsouthfill4, $comparison);
    }

    /**
     * Filter the query on the MLongDegFill4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongdegfill4(1234); // WHERE MLongDegFill4 = 1234
     * $query->filterByMlongdegfill4(array(12, 34)); // WHERE MLongDegFill4 IN (12, 34)
     * $query->filterByMlongdegfill4(array('min' => 12)); // WHERE MLongDegFill4 >= 12
     * $query->filterByMlongdegfill4(array('max' => 12)); // WHERE MLongDegFill4 <= 12
     * </code>
     *
     * @param     mixed $mlongdegfill4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongdegfill4($mlongdegfill4 = null, $comparison = null)
    {
        if (is_array($mlongdegfill4)) {
            $useMinMax = false;
            if (isset($mlongdegfill4['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL4, $mlongdegfill4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongdegfill4['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL4, $mlongdegfill4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGDEGFILL4, $mlongdegfill4, $comparison);
    }

    /**
     * Filter the query on the MLongMinFill4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongminfill4(1234); // WHERE MLongMinFill4 = 1234
     * $query->filterByMlongminfill4(array(12, 34)); // WHERE MLongMinFill4 IN (12, 34)
     * $query->filterByMlongminfill4(array('min' => 12)); // WHERE MLongMinFill4 >= 12
     * $query->filterByMlongminfill4(array('max' => 12)); // WHERE MLongMinFill4 <= 12
     * </code>
     *
     * @param     mixed $mlongminfill4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongminfill4($mlongminfill4 = null, $comparison = null)
    {
        if (is_array($mlongminfill4)) {
            $useMinMax = false;
            if (isset($mlongminfill4['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL4, $mlongminfill4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongminfill4['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL4, $mlongminfill4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGMINFILL4, $mlongminfill4, $comparison);
    }

    /**
     * Filter the query on the MEastWestFill4 column
     *
     * Example usage:
     * <code>
     * $query->filterByMeastwestfill4('fooValue');   // WHERE MEastWestFill4 = 'fooValue'
     * $query->filterByMeastwestfill4('%fooValue%'); // WHERE MEastWestFill4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meastwestfill4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMeastwestfill4($meastwestfill4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meastwestfill4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meastwestfill4)) {
                $meastwestfill4 = str_replace('*', '%', $meastwestfill4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MEASTWESTFILL4, $meastwestfill4, $comparison);
    }

    /**
     * Filter the query on the MLatDegFill5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatdegfill5(1234); // WHERE MLatDegFill5 = 1234
     * $query->filterByMlatdegfill5(array(12, 34)); // WHERE MLatDegFill5 IN (12, 34)
     * $query->filterByMlatdegfill5(array('min' => 12)); // WHERE MLatDegFill5 >= 12
     * $query->filterByMlatdegfill5(array('max' => 12)); // WHERE MLatDegFill5 <= 12
     * </code>
     *
     * @param     mixed $mlatdegfill5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatdegfill5($mlatdegfill5 = null, $comparison = null)
    {
        if (is_array($mlatdegfill5)) {
            $useMinMax = false;
            if (isset($mlatdegfill5['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL5, $mlatdegfill5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatdegfill5['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATDEGFILL5, $mlatdegfill5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATDEGFILL5, $mlatdegfill5, $comparison);
    }

    /**
     * Filter the query on the MLatMinFill5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlatminfill5(1234); // WHERE MLatMinFill5 = 1234
     * $query->filterByMlatminfill5(array(12, 34)); // WHERE MLatMinFill5 IN (12, 34)
     * $query->filterByMlatminfill5(array('min' => 12)); // WHERE MLatMinFill5 >= 12
     * $query->filterByMlatminfill5(array('max' => 12)); // WHERE MLatMinFill5 <= 12
     * </code>
     *
     * @param     mixed $mlatminfill5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlatminfill5($mlatminfill5 = null, $comparison = null)
    {
        if (is_array($mlatminfill5)) {
            $useMinMax = false;
            if (isset($mlatminfill5['min'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL5, $mlatminfill5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlatminfill5['max'])) {
                $this->addUsingAlias(CountrefPeer::MLATMINFILL5, $mlatminfill5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLATMINFILL5, $mlatminfill5, $comparison);
    }

    /**
     * Filter the query on the MNorthSouthFill5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMnorthsouthfill5('fooValue');   // WHERE MNorthSouthFill5 = 'fooValue'
     * $query->filterByMnorthsouthfill5('%fooValue%'); // WHERE MNorthSouthFill5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mnorthsouthfill5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMnorthsouthfill5($mnorthsouthfill5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mnorthsouthfill5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mnorthsouthfill5)) {
                $mnorthsouthfill5 = str_replace('*', '%', $mnorthsouthfill5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MNORTHSOUTHFILL5, $mnorthsouthfill5, $comparison);
    }

    /**
     * Filter the query on the MLongDegFill5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongdegfill5(1234); // WHERE MLongDegFill5 = 1234
     * $query->filterByMlongdegfill5(array(12, 34)); // WHERE MLongDegFill5 IN (12, 34)
     * $query->filterByMlongdegfill5(array('min' => 12)); // WHERE MLongDegFill5 >= 12
     * $query->filterByMlongdegfill5(array('max' => 12)); // WHERE MLongDegFill5 <= 12
     * </code>
     *
     * @param     mixed $mlongdegfill5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongdegfill5($mlongdegfill5 = null, $comparison = null)
    {
        if (is_array($mlongdegfill5)) {
            $useMinMax = false;
            if (isset($mlongdegfill5['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL5, $mlongdegfill5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongdegfill5['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGDEGFILL5, $mlongdegfill5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGDEGFILL5, $mlongdegfill5, $comparison);
    }

    /**
     * Filter the query on the MLongMinFill5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMlongminfill5(1234); // WHERE MLongMinFill5 = 1234
     * $query->filterByMlongminfill5(array(12, 34)); // WHERE MLongMinFill5 IN (12, 34)
     * $query->filterByMlongminfill5(array('min' => 12)); // WHERE MLongMinFill5 >= 12
     * $query->filterByMlongminfill5(array('max' => 12)); // WHERE MLongMinFill5 <= 12
     * </code>
     *
     * @param     mixed $mlongminfill5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMlongminfill5($mlongminfill5 = null, $comparison = null)
    {
        if (is_array($mlongminfill5)) {
            $useMinMax = false;
            if (isset($mlongminfill5['min'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL5, $mlongminfill5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mlongminfill5['max'])) {
                $this->addUsingAlias(CountrefPeer::MLONGMINFILL5, $mlongminfill5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MLONGMINFILL5, $mlongminfill5, $comparison);
    }

    /**
     * Filter the query on the MEastWestFill5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMeastwestfill5('fooValue');   // WHERE MEastWestFill5 = 'fooValue'
     * $query->filterByMeastwestfill5('%fooValue%'); // WHERE MEastWestFill5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $meastwestfill5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMeastwestfill5($meastwestfill5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($meastwestfill5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $meastwestfill5)) {
                $meastwestfill5 = str_replace('*', '%', $meastwestfill5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MEASTWESTFILL5, $meastwestfill5, $comparison);
    }

    /**
     * Filter the query on the NorthernLatitude column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlatitude(1234); // WHERE NorthernLatitude = 1234
     * $query->filterByNorthernlatitude(array(12, 34)); // WHERE NorthernLatitude IN (12, 34)
     * $query->filterByNorthernlatitude(array('min' => 12)); // WHERE NorthernLatitude >= 12
     * $query->filterByNorthernlatitude(array('max' => 12)); // WHERE NorthernLatitude <= 12
     * </code>
     *
     * @param     mixed $northernlatitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlatitude($northernlatitude = null, $comparison = null)
    {
        if (is_array($northernlatitude)) {
            $useMinMax = false;
            if (isset($northernlatitude['min'])) {
                $this->addUsingAlias(CountrefPeer::NORTHERNLATITUDE, $northernlatitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernlatitude['max'])) {
                $this->addUsingAlias(CountrefPeer::NORTHERNLATITUDE, $northernlatitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::NORTHERNLATITUDE, $northernlatitude, $comparison);
    }

    /**
     * Filter the query on the NorthernLatitudeNS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernlatitudens('fooValue');   // WHERE NorthernLatitudeNS = 'fooValue'
     * $query->filterByNorthernlatitudens('%fooValue%'); // WHERE NorthernLatitudeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northernlatitudens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByNorthernlatitudens($northernlatitudens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northernlatitudens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northernlatitudens)) {
                $northernlatitudens = str_replace('*', '%', $northernlatitudens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::NORTHERNLATITUDENS, $northernlatitudens, $comparison);
    }

    /**
     * Filter the query on the SouthernLatitude column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlatitude(1234); // WHERE SouthernLatitude = 1234
     * $query->filterBySouthernlatitude(array(12, 34)); // WHERE SouthernLatitude IN (12, 34)
     * $query->filterBySouthernlatitude(array('min' => 12)); // WHERE SouthernLatitude >= 12
     * $query->filterBySouthernlatitude(array('max' => 12)); // WHERE SouthernLatitude <= 12
     * </code>
     *
     * @param     mixed $southernlatitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlatitude($southernlatitude = null, $comparison = null)
    {
        if (is_array($southernlatitude)) {
            $useMinMax = false;
            if (isset($southernlatitude['min'])) {
                $this->addUsingAlias(CountrefPeer::SOUTHERNLATITUDE, $southernlatitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southernlatitude['max'])) {
                $this->addUsingAlias(CountrefPeer::SOUTHERNLATITUDE, $southernlatitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SOUTHERNLATITUDE, $southernlatitude, $comparison);
    }

    /**
     * Filter the query on the SouthernLatitudeNS column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthernlatitudens('fooValue');   // WHERE SouthernLatitudeNS = 'fooValue'
     * $query->filterBySouthernlatitudens('%fooValue%'); // WHERE SouthernLatitudeNS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $southernlatitudens The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySouthernlatitudens($southernlatitudens = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($southernlatitudens)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $southernlatitudens)) {
                $southernlatitudens = str_replace('*', '%', $southernlatitudens);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SOUTHERNLATITUDENS, $southernlatitudens, $comparison);
    }

    /**
     * Filter the query on the WesternLongitude column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlongitude(1234); // WHERE WesternLongitude = 1234
     * $query->filterByWesternlongitude(array(12, 34)); // WHERE WesternLongitude IN (12, 34)
     * $query->filterByWesternlongitude(array('min' => 12)); // WHERE WesternLongitude >= 12
     * $query->filterByWesternlongitude(array('max' => 12)); // WHERE WesternLongitude <= 12
     * </code>
     *
     * @param     mixed $westernlongitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByWesternlongitude($westernlongitude = null, $comparison = null)
    {
        if (is_array($westernlongitude)) {
            $useMinMax = false;
            if (isset($westernlongitude['min'])) {
                $this->addUsingAlias(CountrefPeer::WESTERNLONGITUDE, $westernlongitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernlongitude['max'])) {
                $this->addUsingAlias(CountrefPeer::WESTERNLONGITUDE, $westernlongitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::WESTERNLONGITUDE, $westernlongitude, $comparison);
    }

    /**
     * Filter the query on the WesternLongitudeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternlongitudeew('fooValue');   // WHERE WesternLongitudeEW = 'fooValue'
     * $query->filterByWesternlongitudeew('%fooValue%'); // WHERE WesternLongitudeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westernlongitudeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByWesternlongitudeew($westernlongitudeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westernlongitudeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westernlongitudeew)) {
                $westernlongitudeew = str_replace('*', '%', $westernlongitudeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::WESTERNLONGITUDEEW, $westernlongitudeew, $comparison);
    }

    /**
     * Filter the query on the EasternLongitude column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlongitude(1234); // WHERE EasternLongitude = 1234
     * $query->filterByEasternlongitude(array(12, 34)); // WHERE EasternLongitude IN (12, 34)
     * $query->filterByEasternlongitude(array('min' => 12)); // WHERE EasternLongitude >= 12
     * $query->filterByEasternlongitude(array('max' => 12)); // WHERE EasternLongitude <= 12
     * </code>
     *
     * @param     mixed $easternlongitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEasternlongitude($easternlongitude = null, $comparison = null)
    {
        if (is_array($easternlongitude)) {
            $useMinMax = false;
            if (isset($easternlongitude['min'])) {
                $this->addUsingAlias(CountrefPeer::EASTERNLONGITUDE, $easternlongitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternlongitude['max'])) {
                $this->addUsingAlias(CountrefPeer::EASTERNLONGITUDE, $easternlongitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EASTERNLONGITUDE, $easternlongitude, $comparison);
    }

    /**
     * Filter the query on the EasternLongitudeEW column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternlongitudeew('fooValue');   // WHERE EasternLongitudeEW = 'fooValue'
     * $query->filterByEasternlongitudeew('%fooValue%'); // WHERE EasternLongitudeEW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $easternlongitudeew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEasternlongitudeew($easternlongitudeew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($easternlongitudeew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $easternlongitudeew)) {
                $easternlongitudeew = str_replace('*', '%', $easternlongitudeew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EASTERNLONGITUDEEW, $easternlongitudeew, $comparison);
    }

    /**
     * Filter the query on the CenterLat column
     *
     * Example usage:
     * <code>
     * $query->filterByCenterlat(1234); // WHERE CenterLat = 1234
     * $query->filterByCenterlat(array(12, 34)); // WHERE CenterLat IN (12, 34)
     * $query->filterByCenterlat(array('min' => 12)); // WHERE CenterLat >= 12
     * $query->filterByCenterlat(array('max' => 12)); // WHERE CenterLat <= 12
     * </code>
     *
     * @param     mixed $centerlat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCenterlat($centerlat = null, $comparison = null)
    {
        if (is_array($centerlat)) {
            $useMinMax = false;
            if (isset($centerlat['min'])) {
                $this->addUsingAlias(CountrefPeer::CENTERLAT, $centerlat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($centerlat['max'])) {
                $this->addUsingAlias(CountrefPeer::CENTERLAT, $centerlat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CENTERLAT, $centerlat, $comparison);
    }

    /**
     * Filter the query on the CenterLong column
     *
     * Example usage:
     * <code>
     * $query->filterByCenterlong(1234); // WHERE CenterLong = 1234
     * $query->filterByCenterlong(array(12, 34)); // WHERE CenterLong IN (12, 34)
     * $query->filterByCenterlong(array('min' => 12)); // WHERE CenterLong >= 12
     * $query->filterByCenterlong(array('max' => 12)); // WHERE CenterLong <= 12
     * </code>
     *
     * @param     mixed $centerlong The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCenterlong($centerlong = null, $comparison = null)
    {
        if (is_array($centerlong)) {
            $useMinMax = false;
            if (isset($centerlong['min'])) {
                $this->addUsingAlias(CountrefPeer::CENTERLONG, $centerlong['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($centerlong['max'])) {
                $this->addUsingAlias(CountrefPeer::CENTERLONG, $centerlong['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::CENTERLONG, $centerlong, $comparison);
    }

    /**
     * Filter the query on the OtherLanguage column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherlanguage('fooValue');   // WHERE OtherLanguage = 'fooValue'
     * $query->filterByOtherlanguage('%fooValue%'); // WHERE OtherLanguage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherlanguage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByOtherlanguage($otherlanguage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherlanguage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherlanguage)) {
                $otherlanguage = str_replace('*', '%', $otherlanguage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::OTHERLANGUAGE, $otherlanguage, $comparison);
    }

    /**
     * Filter the query on the Geography column
     *
     * Example usage:
     * <code>
     * $query->filterByGeography('fooValue');   // WHERE Geography = 'fooValue'
     * $query->filterByGeography('%fooValue%'); // WHERE Geography LIKE '%fooValue%'
     * </code>
     *
     * @param     string $geography The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGeography($geography = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($geography)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $geography)) {
                $geography = str_replace('*', '%', $geography);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GEOGRAPHY, $geography, $comparison);
    }

    /**
     * Filter the query on the GeographyRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGeographyref(1234); // WHERE GeographyRef = 1234
     * $query->filterByGeographyref(array(12, 34)); // WHERE GeographyRef IN (12, 34)
     * $query->filterByGeographyref(array('min' => 12)); // WHERE GeographyRef >= 12
     * $query->filterByGeographyref(array('max' => 12)); // WHERE GeographyRef <= 12
     * </code>
     *
     * @param     mixed $geographyref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGeographyref($geographyref = null, $comparison = null)
    {
        if (is_array($geographyref)) {
            $useMinMax = false;
            if (isset($geographyref['min'])) {
                $this->addUsingAlias(CountrefPeer::GEOGRAPHYREF, $geographyref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($geographyref['max'])) {
                $this->addUsingAlias(CountrefPeer::GEOGRAPHYREF, $geographyref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GEOGRAPHYREF, $geographyref, $comparison);
    }

    /**
     * Filter the query on the Hydrography column
     *
     * Example usage:
     * <code>
     * $query->filterByHydrography('fooValue');   // WHERE Hydrography = 'fooValue'
     * $query->filterByHydrography('%fooValue%'); // WHERE Hydrography LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hydrography The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByHydrography($hydrography = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hydrography)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hydrography)) {
                $hydrography = str_replace('*', '%', $hydrography);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::HYDROGRAPHY, $hydrography, $comparison);
    }

    /**
     * Filter the query on the HydrographyRef column
     *
     * Example usage:
     * <code>
     * $query->filterByHydrographyref(1234); // WHERE HydrographyRef = 1234
     * $query->filterByHydrographyref(array(12, 34)); // WHERE HydrographyRef IN (12, 34)
     * $query->filterByHydrographyref(array('min' => 12)); // WHERE HydrographyRef >= 12
     * $query->filterByHydrographyref(array('max' => 12)); // WHERE HydrographyRef <= 12
     * </code>
     *
     * @param     mixed $hydrographyref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByHydrographyref($hydrographyref = null, $comparison = null)
    {
        if (is_array($hydrographyref)) {
            $useMinMax = false;
            if (isset($hydrographyref['min'])) {
                $this->addUsingAlias(CountrefPeer::HYDROGRAPHYREF, $hydrographyref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hydrographyref['max'])) {
                $this->addUsingAlias(CountrefPeer::HYDROGRAPHYREF, $hydrographyref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::HYDROGRAPHYREF, $hydrographyref, $comparison);
    }

    /**
     * Filter the query on the CommentFresh column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentfresh('fooValue');   // WHERE CommentFresh = 'fooValue'
     * $query->filterByCommentfresh('%fooValue%'); // WHERE CommentFresh LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentfresh The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByCommentfresh($commentfresh = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentfresh)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentfresh)) {
                $commentfresh = str_replace('*', '%', $commentfresh);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::COMMENTFRESH, $commentfresh, $comparison);
    }

    /**
     * Filter the query on the RefFresh1 column
     *
     * Example usage:
     * <code>
     * $query->filterByReffresh1(1234); // WHERE RefFresh1 = 1234
     * $query->filterByReffresh1(array(12, 34)); // WHERE RefFresh1 IN (12, 34)
     * $query->filterByReffresh1(array('min' => 12)); // WHERE RefFresh1 >= 12
     * $query->filterByReffresh1(array('max' => 12)); // WHERE RefFresh1 <= 12
     * </code>
     *
     * @param     mixed $reffresh1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByReffresh1($reffresh1 = null, $comparison = null)
    {
        if (is_array($reffresh1)) {
            $useMinMax = false;
            if (isset($reffresh1['min'])) {
                $this->addUsingAlias(CountrefPeer::REFFRESH1, $reffresh1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reffresh1['max'])) {
                $this->addUsingAlias(CountrefPeer::REFFRESH1, $reffresh1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REFFRESH1, $reffresh1, $comparison);
    }

    /**
     * Filter the query on the RefFresh2 column
     *
     * Example usage:
     * <code>
     * $query->filterByReffresh2(1234); // WHERE RefFresh2 = 1234
     * $query->filterByReffresh2(array(12, 34)); // WHERE RefFresh2 IN (12, 34)
     * $query->filterByReffresh2(array('min' => 12)); // WHERE RefFresh2 >= 12
     * $query->filterByReffresh2(array('max' => 12)); // WHERE RefFresh2 <= 12
     * </code>
     *
     * @param     mixed $reffresh2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByReffresh2($reffresh2 = null, $comparison = null)
    {
        if (is_array($reffresh2)) {
            $useMinMax = false;
            if (isset($reffresh2['min'])) {
                $this->addUsingAlias(CountrefPeer::REFFRESH2, $reffresh2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reffresh2['max'])) {
                $this->addUsingAlias(CountrefPeer::REFFRESH2, $reffresh2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REFFRESH2, $reffresh2, $comparison);
    }

    /**
     * Filter the query on the RefFresh3 column
     *
     * Example usage:
     * <code>
     * $query->filterByReffresh3(1234); // WHERE RefFresh3 = 1234
     * $query->filterByReffresh3(array(12, 34)); // WHERE RefFresh3 IN (12, 34)
     * $query->filterByReffresh3(array('min' => 12)); // WHERE RefFresh3 >= 12
     * $query->filterByReffresh3(array('max' => 12)); // WHERE RefFresh3 <= 12
     * </code>
     *
     * @param     mixed $reffresh3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByReffresh3($reffresh3 = null, $comparison = null)
    {
        if (is_array($reffresh3)) {
            $useMinMax = false;
            if (isset($reffresh3['min'])) {
                $this->addUsingAlias(CountrefPeer::REFFRESH3, $reffresh3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reffresh3['max'])) {
                $this->addUsingAlias(CountrefPeer::REFFRESH3, $reffresh3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::REFFRESH3, $reffresh3, $comparison);
    }

    /**
     * Filter the query on the FreshPrimary column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshprimary(1234); // WHERE FreshPrimary = 1234
     * $query->filterByFreshprimary(array(12, 34)); // WHERE FreshPrimary IN (12, 34)
     * $query->filterByFreshprimary(array('min' => 12)); // WHERE FreshPrimary >= 12
     * $query->filterByFreshprimary(array('max' => 12)); // WHERE FreshPrimary <= 12
     * </code>
     *
     * @param     mixed $freshprimary The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshprimary($freshprimary = null, $comparison = null)
    {
        if (is_array($freshprimary)) {
            $useMinMax = false;
            if (isset($freshprimary['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHPRIMARY, $freshprimary['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshprimary['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHPRIMARY, $freshprimary['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHPRIMARY, $freshprimary, $comparison);
    }

    /**
     * Filter the query on the FreshSecondary column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshsecondary(1234); // WHERE FreshSecondary = 1234
     * $query->filterByFreshsecondary(array(12, 34)); // WHERE FreshSecondary IN (12, 34)
     * $query->filterByFreshsecondary(array('min' => 12)); // WHERE FreshSecondary >= 12
     * $query->filterByFreshsecondary(array('max' => 12)); // WHERE FreshSecondary <= 12
     * </code>
     *
     * @param     mixed $freshsecondary The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshsecondary($freshsecondary = null, $comparison = null)
    {
        if (is_array($freshsecondary)) {
            $useMinMax = false;
            if (isset($freshsecondary['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHSECONDARY, $freshsecondary['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshsecondary['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHSECONDARY, $freshsecondary['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHSECONDARY, $freshsecondary, $comparison);
    }

    /**
     * Filter the query on the FreshInto column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshinto(1234); // WHERE FreshInto = 1234
     * $query->filterByFreshinto(array(12, 34)); // WHERE FreshInto IN (12, 34)
     * $query->filterByFreshinto(array('min' => 12)); // WHERE FreshInto >= 12
     * $query->filterByFreshinto(array('max' => 12)); // WHERE FreshInto <= 12
     * </code>
     *
     * @param     mixed $freshinto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFreshinto($freshinto = null, $comparison = null)
    {
        if (is_array($freshinto)) {
            $useMinMax = false;
            if (isset($freshinto['min'])) {
                $this->addUsingAlias(CountrefPeer::FRESHINTO, $freshinto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshinto['max'])) {
                $this->addUsingAlias(CountrefPeer::FRESHINTO, $freshinto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRESHINTO, $freshinto, $comparison);
    }

    /**
     * Filter the query on the InFisheriesReported column
     *
     * Example usage:
     * <code>
     * $query->filterByInfisheriesreported(1234); // WHERE InFisheriesReported = 1234
     * $query->filterByInfisheriesreported(array(12, 34)); // WHERE InFisheriesReported IN (12, 34)
     * $query->filterByInfisheriesreported(array('min' => 12)); // WHERE InFisheriesReported >= 12
     * $query->filterByInfisheriesreported(array('max' => 12)); // WHERE InFisheriesReported <= 12
     * </code>
     *
     * @param     mixed $infisheriesreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByInfisheriesreported($infisheriesreported = null, $comparison = null)
    {
        if (is_array($infisheriesreported)) {
            $useMinMax = false;
            if (isset($infisheriesreported['min'])) {
                $this->addUsingAlias(CountrefPeer::INFISHERIESREPORTED, $infisheriesreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infisheriesreported['max'])) {
                $this->addUsingAlias(CountrefPeer::INFISHERIESREPORTED, $infisheriesreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::INFISHERIESREPORTED, $infisheriesreported, $comparison);
    }

    /**
     * Filter the query on the InFisheriesPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByInfisheriespotential(1234); // WHERE InFisheriesPotential = 1234
     * $query->filterByInfisheriespotential(array(12, 34)); // WHERE InFisheriesPotential IN (12, 34)
     * $query->filterByInfisheriespotential(array('min' => 12)); // WHERE InFisheriesPotential >= 12
     * $query->filterByInfisheriespotential(array('max' => 12)); // WHERE InFisheriesPotential <= 12
     * </code>
     *
     * @param     mixed $infisheriespotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByInfisheriespotential($infisheriespotential = null, $comparison = null)
    {
        if (is_array($infisheriespotential)) {
            $useMinMax = false;
            if (isset($infisheriespotential['min'])) {
                $this->addUsingAlias(CountrefPeer::INFISHERIESPOTENTIAL, $infisheriespotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infisheriespotential['max'])) {
                $this->addUsingAlias(CountrefPeer::INFISHERIESPOTENTIAL, $infisheriespotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::INFISHERIESPOTENTIAL, $infisheriespotential, $comparison);
    }

    /**
     * Filter the query on the InAquaReported column
     *
     * Example usage:
     * <code>
     * $query->filterByInaquareported(1234); // WHERE InAquaReported = 1234
     * $query->filterByInaquareported(array(12, 34)); // WHERE InAquaReported IN (12, 34)
     * $query->filterByInaquareported(array('min' => 12)); // WHERE InAquaReported >= 12
     * $query->filterByInaquareported(array('max' => 12)); // WHERE InAquaReported <= 12
     * </code>
     *
     * @param     mixed $inaquareported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByInaquareported($inaquareported = null, $comparison = null)
    {
        if (is_array($inaquareported)) {
            $useMinMax = false;
            if (isset($inaquareported['min'])) {
                $this->addUsingAlias(CountrefPeer::INAQUAREPORTED, $inaquareported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inaquareported['max'])) {
                $this->addUsingAlias(CountrefPeer::INAQUAREPORTED, $inaquareported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::INAQUAREPORTED, $inaquareported, $comparison);
    }

    /**
     * Filter the query on the InAquaPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByInaquapotential(1234); // WHERE InAquaPotential = 1234
     * $query->filterByInaquapotential(array(12, 34)); // WHERE InAquaPotential IN (12, 34)
     * $query->filterByInaquapotential(array('min' => 12)); // WHERE InAquaPotential >= 12
     * $query->filterByInaquapotential(array('max' => 12)); // WHERE InAquaPotential <= 12
     * </code>
     *
     * @param     mixed $inaquapotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByInaquapotential($inaquapotential = null, $comparison = null)
    {
        if (is_array($inaquapotential)) {
            $useMinMax = false;
            if (isset($inaquapotential['min'])) {
                $this->addUsingAlias(CountrefPeer::INAQUAPOTENTIAL, $inaquapotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inaquapotential['max'])) {
                $this->addUsingAlias(CountrefPeer::INAQUAPOTENTIAL, $inaquapotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::INAQUAPOTENTIAL, $inaquapotential, $comparison);
    }

    /**
     * Filter the query on the ExportReported column
     *
     * Example usage:
     * <code>
     * $query->filterByExportreported(1234); // WHERE ExportReported = 1234
     * $query->filterByExportreported(array(12, 34)); // WHERE ExportReported IN (12, 34)
     * $query->filterByExportreported(array('min' => 12)); // WHERE ExportReported >= 12
     * $query->filterByExportreported(array('max' => 12)); // WHERE ExportReported <= 12
     * </code>
     *
     * @param     mixed $exportreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByExportreported($exportreported = null, $comparison = null)
    {
        if (is_array($exportreported)) {
            $useMinMax = false;
            if (isset($exportreported['min'])) {
                $this->addUsingAlias(CountrefPeer::EXPORTREPORTED, $exportreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($exportreported['max'])) {
                $this->addUsingAlias(CountrefPeer::EXPORTREPORTED, $exportreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EXPORTREPORTED, $exportreported, $comparison);
    }

    /**
     * Filter the query on the ExportPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByExportpotential(1234); // WHERE ExportPotential = 1234
     * $query->filterByExportpotential(array(12, 34)); // WHERE ExportPotential IN (12, 34)
     * $query->filterByExportpotential(array('min' => 12)); // WHERE ExportPotential >= 12
     * $query->filterByExportpotential(array('max' => 12)); // WHERE ExportPotential <= 12
     * </code>
     *
     * @param     mixed $exportpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByExportpotential($exportpotential = null, $comparison = null)
    {
        if (is_array($exportpotential)) {
            $useMinMax = false;
            if (isset($exportpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::EXPORTPOTENTIAL, $exportpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($exportpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::EXPORTPOTENTIAL, $exportpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EXPORTPOTENTIAL, $exportpotential, $comparison);
    }

    /**
     * Filter the query on the SportReported column
     *
     * Example usage:
     * <code>
     * $query->filterBySportreported(1234); // WHERE SportReported = 1234
     * $query->filterBySportreported(array(12, 34)); // WHERE SportReported IN (12, 34)
     * $query->filterBySportreported(array('min' => 12)); // WHERE SportReported >= 12
     * $query->filterBySportreported(array('max' => 12)); // WHERE SportReported <= 12
     * </code>
     *
     * @param     mixed $sportreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySportreported($sportreported = null, $comparison = null)
    {
        if (is_array($sportreported)) {
            $useMinMax = false;
            if (isset($sportreported['min'])) {
                $this->addUsingAlias(CountrefPeer::SPORTREPORTED, $sportreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sportreported['max'])) {
                $this->addUsingAlias(CountrefPeer::SPORTREPORTED, $sportreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SPORTREPORTED, $sportreported, $comparison);
    }

    /**
     * Filter the query on the SportPotential column
     *
     * Example usage:
     * <code>
     * $query->filterBySportpotential(1234); // WHERE SportPotential = 1234
     * $query->filterBySportpotential(array(12, 34)); // WHERE SportPotential IN (12, 34)
     * $query->filterBySportpotential(array('min' => 12)); // WHERE SportPotential >= 12
     * $query->filterBySportpotential(array('max' => 12)); // WHERE SportPotential <= 12
     * </code>
     *
     * @param     mixed $sportpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySportpotential($sportpotential = null, $comparison = null)
    {
        if (is_array($sportpotential)) {
            $useMinMax = false;
            if (isset($sportpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::SPORTPOTENTIAL, $sportpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sportpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::SPORTPOTENTIAL, $sportpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SPORTPOTENTIAL, $sportpotential, $comparison);
    }

    /**
     * Filter the query on the EndemicReported column
     *
     * Example usage:
     * <code>
     * $query->filterByEndemicreported(1234); // WHERE EndemicReported = 1234
     * $query->filterByEndemicreported(array(12, 34)); // WHERE EndemicReported IN (12, 34)
     * $query->filterByEndemicreported(array('min' => 12)); // WHERE EndemicReported >= 12
     * $query->filterByEndemicreported(array('max' => 12)); // WHERE EndemicReported <= 12
     * </code>
     *
     * @param     mixed $endemicreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEndemicreported($endemicreported = null, $comparison = null)
    {
        if (is_array($endemicreported)) {
            $useMinMax = false;
            if (isset($endemicreported['min'])) {
                $this->addUsingAlias(CountrefPeer::ENDEMICREPORTED, $endemicreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endemicreported['max'])) {
                $this->addUsingAlias(CountrefPeer::ENDEMICREPORTED, $endemicreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ENDEMICREPORTED, $endemicreported, $comparison);
    }

    /**
     * Filter the query on the EndemicPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByEndemicpotential(1234); // WHERE EndemicPotential = 1234
     * $query->filterByEndemicpotential(array(12, 34)); // WHERE EndemicPotential IN (12, 34)
     * $query->filterByEndemicpotential(array('min' => 12)); // WHERE EndemicPotential >= 12
     * $query->filterByEndemicpotential(array('max' => 12)); // WHERE EndemicPotential <= 12
     * </code>
     *
     * @param     mixed $endemicpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEndemicpotential($endemicpotential = null, $comparison = null)
    {
        if (is_array($endemicpotential)) {
            $useMinMax = false;
            if (isset($endemicpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::ENDEMICPOTENTIAL, $endemicpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endemicpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::ENDEMICPOTENTIAL, $endemicpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ENDEMICPOTENTIAL, $endemicpotential, $comparison);
    }

    /**
     * Filter the query on the Threatened column
     *
     * Example usage:
     * <code>
     * $query->filterByThreatened(1234); // WHERE Threatened = 1234
     * $query->filterByThreatened(array(12, 34)); // WHERE Threatened IN (12, 34)
     * $query->filterByThreatened(array('min' => 12)); // WHERE Threatened >= 12
     * $query->filterByThreatened(array('max' => 12)); // WHERE Threatened <= 12
     * </code>
     *
     * @param     mixed $threatened The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByThreatened($threatened = null, $comparison = null)
    {
        if (is_array($threatened)) {
            $useMinMax = false;
            if (isset($threatened['min'])) {
                $this->addUsingAlias(CountrefPeer::THREATENED, $threatened['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($threatened['max'])) {
                $this->addUsingAlias(CountrefPeer::THREATENED, $threatened['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::THREATENED, $threatened, $comparison);
    }

    /**
     * Filter the query on the ProtectedReported column
     *
     * Example usage:
     * <code>
     * $query->filterByProtectedreported(1234); // WHERE ProtectedReported = 1234
     * $query->filterByProtectedreported(array(12, 34)); // WHERE ProtectedReported IN (12, 34)
     * $query->filterByProtectedreported(array('min' => 12)); // WHERE ProtectedReported >= 12
     * $query->filterByProtectedreported(array('max' => 12)); // WHERE ProtectedReported <= 12
     * </code>
     *
     * @param     mixed $protectedreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByProtectedreported($protectedreported = null, $comparison = null)
    {
        if (is_array($protectedreported)) {
            $useMinMax = false;
            if (isset($protectedreported['min'])) {
                $this->addUsingAlias(CountrefPeer::PROTECTEDREPORTED, $protectedreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($protectedreported['max'])) {
                $this->addUsingAlias(CountrefPeer::PROTECTEDREPORTED, $protectedreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::PROTECTEDREPORTED, $protectedreported, $comparison);
    }

    /**
     * Filter the query on the ProtectedPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByProtectedpotential(1234); // WHERE ProtectedPotential = 1234
     * $query->filterByProtectedpotential(array(12, 34)); // WHERE ProtectedPotential IN (12, 34)
     * $query->filterByProtectedpotential(array('min' => 12)); // WHERE ProtectedPotential >= 12
     * $query->filterByProtectedpotential(array('max' => 12)); // WHERE ProtectedPotential <= 12
     * </code>
     *
     * @param     mixed $protectedpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByProtectedpotential($protectedpotential = null, $comparison = null)
    {
        if (is_array($protectedpotential)) {
            $useMinMax = false;
            if (isset($protectedpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::PROTECTEDPOTENTIAL, $protectedpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($protectedpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::PROTECTEDPOTENTIAL, $protectedpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::PROTECTEDPOTENTIAL, $protectedpotential, $comparison);
    }

    /**
     * Filter the query on the ACP column
     *
     * Example usage:
     * <code>
     * $query->filterByAcp(1234); // WHERE ACP = 1234
     * $query->filterByAcp(array(12, 34)); // WHERE ACP IN (12, 34)
     * $query->filterByAcp(array('min' => 12)); // WHERE ACP >= 12
     * $query->filterByAcp(array('max' => 12)); // WHERE ACP <= 12
     * </code>
     *
     * @param     mixed $acp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByAcp($acp = null, $comparison = null)
    {
        if (is_array($acp)) {
            $useMinMax = false;
            if (isset($acp['min'])) {
                $this->addUsingAlias(CountrefPeer::ACP, $acp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($acp['max'])) {
                $this->addUsingAlias(CountrefPeer::ACP, $acp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ACP, $acp, $comparison);
    }

    /**
     * Filter the query on the Developed column
     *
     * Example usage:
     * <code>
     * $query->filterByDeveloped(1234); // WHERE Developed = 1234
     * $query->filterByDeveloped(array(12, 34)); // WHERE Developed IN (12, 34)
     * $query->filterByDeveloped(array('min' => 12)); // WHERE Developed >= 12
     * $query->filterByDeveloped(array('max' => 12)); // WHERE Developed <= 12
     * </code>
     *
     * @param     mixed $developed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDeveloped($developed = null, $comparison = null)
    {
        if (is_array($developed)) {
            $useMinMax = false;
            if (isset($developed['min'])) {
                $this->addUsingAlias(CountrefPeer::DEVELOPED, $developed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($developed['max'])) {
                $this->addUsingAlias(CountrefPeer::DEVELOPED, $developed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DEVELOPED, $developed, $comparison);
    }

    /**
     * Filter the query on the Marine column
     *
     * Example usage:
     * <code>
     * $query->filterByMarine(1234); // WHERE Marine = 1234
     * $query->filterByMarine(array(12, 34)); // WHERE Marine IN (12, 34)
     * $query->filterByMarine(array('min' => 12)); // WHERE Marine >= 12
     * $query->filterByMarine(array('max' => 12)); // WHERE Marine <= 12
     * </code>
     *
     * @param     mixed $marine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarine($marine = null, $comparison = null)
    {
        if (is_array($marine)) {
            $useMinMax = false;
            if (isset($marine['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINE, $marine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marine['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINE, $marine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINE, $marine, $comparison);
    }

    /**
     * Filter the query on the Brackish column
     *
     * Example usage:
     * <code>
     * $query->filterByBrackish(1234); // WHERE Brackish = 1234
     * $query->filterByBrackish(array(12, 34)); // WHERE Brackish IN (12, 34)
     * $query->filterByBrackish(array('min' => 12)); // WHERE Brackish >= 12
     * $query->filterByBrackish(array('max' => 12)); // WHERE Brackish <= 12
     * </code>
     *
     * @param     mixed $brackish The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByBrackish($brackish = null, $comparison = null)
    {
        if (is_array($brackish)) {
            $useMinMax = false;
            if (isset($brackish['min'])) {
                $this->addUsingAlias(CountrefPeer::BRACKISH, $brackish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brackish['max'])) {
                $this->addUsingAlias(CountrefPeer::BRACKISH, $brackish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::BRACKISH, $brackish, $comparison);
    }

    /**
     * Filter the query on the MarineInto column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineinto(1234); // WHERE MarineInto = 1234
     * $query->filterByMarineinto(array(12, 34)); // WHERE MarineInto IN (12, 34)
     * $query->filterByMarineinto(array('min' => 12)); // WHERE MarineInto >= 12
     * $query->filterByMarineinto(array('max' => 12)); // WHERE MarineInto <= 12
     * </code>
     *
     * @param     mixed $marineinto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineinto($marineinto = null, $comparison = null)
    {
        if (is_array($marineinto)) {
            $useMinMax = false;
            if (isset($marineinto['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINTO, $marineinto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineinto['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINTO, $marineinto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEINTO, $marineinto, $comparison);
    }

    /**
     * Filter the query on the MarineInFisheriesReported column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineinfisheriesreported(1234); // WHERE MarineInFisheriesReported = 1234
     * $query->filterByMarineinfisheriesreported(array(12, 34)); // WHERE MarineInFisheriesReported IN (12, 34)
     * $query->filterByMarineinfisheriesreported(array('min' => 12)); // WHERE MarineInFisheriesReported >= 12
     * $query->filterByMarineinfisheriesreported(array('max' => 12)); // WHERE MarineInFisheriesReported <= 12
     * </code>
     *
     * @param     mixed $marineinfisheriesreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineinfisheriesreported($marineinfisheriesreported = null, $comparison = null)
    {
        if (is_array($marineinfisheriesreported)) {
            $useMinMax = false;
            if (isset($marineinfisheriesreported['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINFISHERIESREPORTED, $marineinfisheriesreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineinfisheriesreported['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINFISHERIESREPORTED, $marineinfisheriesreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEINFISHERIESREPORTED, $marineinfisheriesreported, $comparison);
    }

    /**
     * Filter the query on the MarineInFisheriesPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineinfisheriespotential(1234); // WHERE MarineInFisheriesPotential = 1234
     * $query->filterByMarineinfisheriespotential(array(12, 34)); // WHERE MarineInFisheriesPotential IN (12, 34)
     * $query->filterByMarineinfisheriespotential(array('min' => 12)); // WHERE MarineInFisheriesPotential >= 12
     * $query->filterByMarineinfisheriespotential(array('max' => 12)); // WHERE MarineInFisheriesPotential <= 12
     * </code>
     *
     * @param     mixed $marineinfisheriespotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineinfisheriespotential($marineinfisheriespotential = null, $comparison = null)
    {
        if (is_array($marineinfisheriespotential)) {
            $useMinMax = false;
            if (isset($marineinfisheriespotential['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINFISHERIESPOTENTIAL, $marineinfisheriespotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineinfisheriespotential['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINFISHERIESPOTENTIAL, $marineinfisheriespotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEINFISHERIESPOTENTIAL, $marineinfisheriespotential, $comparison);
    }

    /**
     * Filter the query on the MarineInAquaReported column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineinaquareported(1234); // WHERE MarineInAquaReported = 1234
     * $query->filterByMarineinaquareported(array(12, 34)); // WHERE MarineInAquaReported IN (12, 34)
     * $query->filterByMarineinaquareported(array('min' => 12)); // WHERE MarineInAquaReported >= 12
     * $query->filterByMarineinaquareported(array('max' => 12)); // WHERE MarineInAquaReported <= 12
     * </code>
     *
     * @param     mixed $marineinaquareported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineinaquareported($marineinaquareported = null, $comparison = null)
    {
        if (is_array($marineinaquareported)) {
            $useMinMax = false;
            if (isset($marineinaquareported['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINAQUAREPORTED, $marineinaquareported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineinaquareported['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINAQUAREPORTED, $marineinaquareported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEINAQUAREPORTED, $marineinaquareported, $comparison);
    }

    /**
     * Filter the query on the MarineInAquaPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineinaquapotential(1234); // WHERE MarineInAquaPotential = 1234
     * $query->filterByMarineinaquapotential(array(12, 34)); // WHERE MarineInAquaPotential IN (12, 34)
     * $query->filterByMarineinaquapotential(array('min' => 12)); // WHERE MarineInAquaPotential >= 12
     * $query->filterByMarineinaquapotential(array('max' => 12)); // WHERE MarineInAquaPotential <= 12
     * </code>
     *
     * @param     mixed $marineinaquapotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineinaquapotential($marineinaquapotential = null, $comparison = null)
    {
        if (is_array($marineinaquapotential)) {
            $useMinMax = false;
            if (isset($marineinaquapotential['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINAQUAPOTENTIAL, $marineinaquapotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineinaquapotential['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEINAQUAPOTENTIAL, $marineinaquapotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEINAQUAPOTENTIAL, $marineinaquapotential, $comparison);
    }

    /**
     * Filter the query on the MarineExportReported column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineexportreported(1234); // WHERE MarineExportReported = 1234
     * $query->filterByMarineexportreported(array(12, 34)); // WHERE MarineExportReported IN (12, 34)
     * $query->filterByMarineexportreported(array('min' => 12)); // WHERE MarineExportReported >= 12
     * $query->filterByMarineexportreported(array('max' => 12)); // WHERE MarineExportReported <= 12
     * </code>
     *
     * @param     mixed $marineexportreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineexportreported($marineexportreported = null, $comparison = null)
    {
        if (is_array($marineexportreported)) {
            $useMinMax = false;
            if (isset($marineexportreported['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEEXPORTREPORTED, $marineexportreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineexportreported['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEEXPORTREPORTED, $marineexportreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEEXPORTREPORTED, $marineexportreported, $comparison);
    }

    /**
     * Filter the query on the MarineExportPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineexportpotential(1234); // WHERE MarineExportPotential = 1234
     * $query->filterByMarineexportpotential(array(12, 34)); // WHERE MarineExportPotential IN (12, 34)
     * $query->filterByMarineexportpotential(array('min' => 12)); // WHERE MarineExportPotential >= 12
     * $query->filterByMarineexportpotential(array('max' => 12)); // WHERE MarineExportPotential <= 12
     * </code>
     *
     * @param     mixed $marineexportpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineexportpotential($marineexportpotential = null, $comparison = null)
    {
        if (is_array($marineexportpotential)) {
            $useMinMax = false;
            if (isset($marineexportpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEEXPORTPOTENTIAL, $marineexportpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineexportpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEEXPORTPOTENTIAL, $marineexportpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEEXPORTPOTENTIAL, $marineexportpotential, $comparison);
    }

    /**
     * Filter the query on the MarineSportReported column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinesportreported(1234); // WHERE MarineSportReported = 1234
     * $query->filterByMarinesportreported(array(12, 34)); // WHERE MarineSportReported IN (12, 34)
     * $query->filterByMarinesportreported(array('min' => 12)); // WHERE MarineSportReported >= 12
     * $query->filterByMarinesportreported(array('max' => 12)); // WHERE MarineSportReported <= 12
     * </code>
     *
     * @param     mixed $marinesportreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinesportreported($marinesportreported = null, $comparison = null)
    {
        if (is_array($marinesportreported)) {
            $useMinMax = false;
            if (isset($marinesportreported['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINESPORTREPORTED, $marinesportreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinesportreported['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINESPORTREPORTED, $marinesportreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINESPORTREPORTED, $marinesportreported, $comparison);
    }

    /**
     * Filter the query on the MarineSportPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinesportpotential(1234); // WHERE MarineSportPotential = 1234
     * $query->filterByMarinesportpotential(array(12, 34)); // WHERE MarineSportPotential IN (12, 34)
     * $query->filterByMarinesportpotential(array('min' => 12)); // WHERE MarineSportPotential >= 12
     * $query->filterByMarinesportpotential(array('max' => 12)); // WHERE MarineSportPotential <= 12
     * </code>
     *
     * @param     mixed $marinesportpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinesportpotential($marinesportpotential = null, $comparison = null)
    {
        if (is_array($marinesportpotential)) {
            $useMinMax = false;
            if (isset($marinesportpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINESPORTPOTENTIAL, $marinesportpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinesportpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINESPORTPOTENTIAL, $marinesportpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINESPORTPOTENTIAL, $marinesportpotential, $comparison);
    }

    /**
     * Filter the query on the MarineEndemicReported column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineendemicreported(1234); // WHERE MarineEndemicReported = 1234
     * $query->filterByMarineendemicreported(array(12, 34)); // WHERE MarineEndemicReported IN (12, 34)
     * $query->filterByMarineendemicreported(array('min' => 12)); // WHERE MarineEndemicReported >= 12
     * $query->filterByMarineendemicreported(array('max' => 12)); // WHERE MarineEndemicReported <= 12
     * </code>
     *
     * @param     mixed $marineendemicreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineendemicreported($marineendemicreported = null, $comparison = null)
    {
        if (is_array($marineendemicreported)) {
            $useMinMax = false;
            if (isset($marineendemicreported['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEENDEMICREPORTED, $marineendemicreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineendemicreported['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEENDEMICREPORTED, $marineendemicreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEENDEMICREPORTED, $marineendemicreported, $comparison);
    }

    /**
     * Filter the query on the MarineEndemicPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineendemicpotential(1234); // WHERE MarineEndemicPotential = 1234
     * $query->filterByMarineendemicpotential(array(12, 34)); // WHERE MarineEndemicPotential IN (12, 34)
     * $query->filterByMarineendemicpotential(array('min' => 12)); // WHERE MarineEndemicPotential >= 12
     * $query->filterByMarineendemicpotential(array('max' => 12)); // WHERE MarineEndemicPotential <= 12
     * </code>
     *
     * @param     mixed $marineendemicpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineendemicpotential($marineendemicpotential = null, $comparison = null)
    {
        if (is_array($marineendemicpotential)) {
            $useMinMax = false;
            if (isset($marineendemicpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEENDEMICPOTENTIAL, $marineendemicpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineendemicpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEENDEMICPOTENTIAL, $marineendemicpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEENDEMICPOTENTIAL, $marineendemicpotential, $comparison);
    }

    /**
     * Filter the query on the MarineThreatened column
     *
     * Example usage:
     * <code>
     * $query->filterByMarinethreatened(1234); // WHERE MarineThreatened = 1234
     * $query->filterByMarinethreatened(array(12, 34)); // WHERE MarineThreatened IN (12, 34)
     * $query->filterByMarinethreatened(array('min' => 12)); // WHERE MarineThreatened >= 12
     * $query->filterByMarinethreatened(array('max' => 12)); // WHERE MarineThreatened <= 12
     * </code>
     *
     * @param     mixed $marinethreatened The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarinethreatened($marinethreatened = null, $comparison = null)
    {
        if (is_array($marinethreatened)) {
            $useMinMax = false;
            if (isset($marinethreatened['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINETHREATENED, $marinethreatened['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marinethreatened['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINETHREATENED, $marinethreatened['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINETHREATENED, $marinethreatened, $comparison);
    }

    /**
     * Filter the query on the MarineProtectedReported column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineprotectedreported(1234); // WHERE MarineProtectedReported = 1234
     * $query->filterByMarineprotectedreported(array(12, 34)); // WHERE MarineProtectedReported IN (12, 34)
     * $query->filterByMarineprotectedreported(array('min' => 12)); // WHERE MarineProtectedReported >= 12
     * $query->filterByMarineprotectedreported(array('max' => 12)); // WHERE MarineProtectedReported <= 12
     * </code>
     *
     * @param     mixed $marineprotectedreported The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineprotectedreported($marineprotectedreported = null, $comparison = null)
    {
        if (is_array($marineprotectedreported)) {
            $useMinMax = false;
            if (isset($marineprotectedreported['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEPROTECTEDREPORTED, $marineprotectedreported['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineprotectedreported['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEPROTECTEDREPORTED, $marineprotectedreported['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEPROTECTEDREPORTED, $marineprotectedreported, $comparison);
    }

    /**
     * Filter the query on the MarineProtectedPotential column
     *
     * Example usage:
     * <code>
     * $query->filterByMarineprotectedpotential(1234); // WHERE MarineProtectedPotential = 1234
     * $query->filterByMarineprotectedpotential(array(12, 34)); // WHERE MarineProtectedPotential IN (12, 34)
     * $query->filterByMarineprotectedpotential(array('min' => 12)); // WHERE MarineProtectedPotential >= 12
     * $query->filterByMarineprotectedpotential(array('max' => 12)); // WHERE MarineProtectedPotential <= 12
     * </code>
     *
     * @param     mixed $marineprotectedpotential The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByMarineprotectedpotential($marineprotectedpotential = null, $comparison = null)
    {
        if (is_array($marineprotectedpotential)) {
            $useMinMax = false;
            if (isset($marineprotectedpotential['min'])) {
                $this->addUsingAlias(CountrefPeer::MARINEPROTECTEDPOTENTIAL, $marineprotectedpotential['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marineprotectedpotential['max'])) {
                $this->addUsingAlias(CountrefPeer::MARINEPROTECTEDPOTENTIAL, $marineprotectedpotential['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MARINEPROTECTEDPOTENTIAL, $marineprotectedpotential, $comparison);
    }

    /**
     * Filter the query on the NatFishDB column
     *
     * Example usage:
     * <code>
     * $query->filterByNatfishdb('fooValue');   // WHERE NatFishDB = 'fooValue'
     * $query->filterByNatfishdb('%fooValue%'); // WHERE NatFishDB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $natfishdb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByNatfishdb($natfishdb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($natfishdb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $natfishdb)) {
                $natfishdb = str_replace('*', '%', $natfishdb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::NATFISHDB, $natfishdb, $comparison);
    }

    /**
     * Filter the query on the NatFishDB2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNatfishdb2('fooValue');   // WHERE NatFishDB2 = 'fooValue'
     * $query->filterByNatfishdb2('%fooValue%'); // WHERE NatFishDB2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $natfishdb2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByNatfishdb2($natfishdb2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($natfishdb2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $natfishdb2)) {
                $natfishdb2 = str_replace('*', '%', $natfishdb2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::NATFISHDB2, $natfishdb2, $comparison);
    }

    /**
     * Filter the query on the Factbook column
     *
     * Example usage:
     * <code>
     * $query->filterByFactbook('fooValue');   // WHERE Factbook = 'fooValue'
     * $query->filterByFactbook('%fooValue%'); // WHERE Factbook LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factbook The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFactbook($factbook = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factbook)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factbook)) {
                $factbook = str_replace('*', '%', $factbook);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FACTBOOK, $factbook, $comparison);
    }

    /**
     * Filter the query on the NatFishAut column
     *
     * Example usage:
     * <code>
     * $query->filterByNatfishaut('fooValue');   // WHERE NatFishAut = 'fooValue'
     * $query->filterByNatfishaut('%fooValue%'); // WHERE NatFishAut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $natfishaut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByNatfishaut($natfishaut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($natfishaut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $natfishaut)) {
                $natfishaut = str_replace('*', '%', $natfishaut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::NATFISHAUT, $natfishaut, $comparison);
    }

    /**
     * Filter the query on the TradeNames column
     *
     * Example usage:
     * <code>
     * $query->filterByTradenames('fooValue');   // WHERE TradeNames = 'fooValue'
     * $query->filterByTradenames('%fooValue%'); // WHERE TradeNames LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tradenames The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTradenames($tradenames = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tradenames)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tradenames)) {
                $tradenames = str_replace('*', '%', $tradenames);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TRADENAMES, $tradenames, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CountrefPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CountrefPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ENTERED, $entered, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CountrefPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CountrefPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CountrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CountrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::MODIFIED, $modified, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CountrefPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CountrefPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CountrefPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CountrefPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::EXPERT, $expert, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(CountrefPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(CountrefPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Greek_original column
     *
     * Example usage:
     * <code>
     * $query->filterByGreekOriginal('fooValue');   // WHERE Greek_original = 'fooValue'
     * $query->filterByGreekOriginal('%fooValue%'); // WHERE Greek_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $greekOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGreekOriginal($greekOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($greekOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $greekOriginal)) {
                $greekOriginal = str_replace('*', '%', $greekOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GREEK_ORIGINAL, $greekOriginal, $comparison);
    }

    /**
     * Filter the query on the Greek column
     *
     * Example usage:
     * <code>
     * $query->filterByGreek('fooValue');   // WHERE Greek = 'fooValue'
     * $query->filterByGreek('%fooValue%'); // WHERE Greek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $greek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGreek($greek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($greek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $greek)) {
                $greek = str_replace('*', '%', $greek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GREEK, $greek, $comparison);
    }

    /**
     * Filter the query on the RUSSIAN_original column
     *
     * Example usage:
     * <code>
     * $query->filterByRussianOriginal('fooValue');   // WHERE RUSSIAN_original = 'fooValue'
     * $query->filterByRussianOriginal('%fooValue%'); // WHERE RUSSIAN_original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $russianOriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByRussianOriginal($russianOriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($russianOriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $russianOriginal)) {
                $russianOriginal = str_replace('*', '%', $russianOriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::RUSSIAN_ORIGINAL, $russianOriginal, $comparison);
    }

    /**
     * Filter the query on the RUSSIAN column
     *
     * Example usage:
     * <code>
     * $query->filterByRussian('fooValue');   // WHERE RUSSIAN = 'fooValue'
     * $query->filterByRussian('%fooValue%'); // WHERE RUSSIAN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $russian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByRussian($russian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($russian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $russian)) {
                $russian = str_replace('*', '%', $russian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::RUSSIAN, $russian, $comparison);
    }

    /**
     * Filter the query on the FRENCH column
     *
     * Example usage:
     * <code>
     * $query->filterByFrench('fooValue');   // WHERE FRENCH = 'fooValue'
     * $query->filterByFrench('%fooValue%'); // WHERE FRENCH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $french The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByFrench($french = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($french)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $french)) {
                $french = str_replace('*', '%', $french);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::FRENCH, $french, $comparison);
    }

    /**
     * Filter the query on the SPANISH column
     *
     * Example usage:
     * <code>
     * $query->filterBySpanish('fooValue');   // WHERE SPANISH = 'fooValue'
     * $query->filterBySpanish('%fooValue%'); // WHERE SPANISH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spanish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySpanish($spanish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spanish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spanish)) {
                $spanish = str_replace('*', '%', $spanish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SPANISH, $spanish, $comparison);
    }

    /**
     * Filter the query on the GERMAN column
     *
     * Example usage:
     * <code>
     * $query->filterByGerman('fooValue');   // WHERE GERMAN = 'fooValue'
     * $query->filterByGerman('%fooValue%'); // WHERE GERMAN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $german The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByGerman($german = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($german)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $german)) {
                $german = str_replace('*', '%', $german);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::GERMAN, $german, $comparison);
    }

    /**
     * Filter the query on the DUTCH column
     *
     * Example usage:
     * <code>
     * $query->filterByDutch('fooValue');   // WHERE DUTCH = 'fooValue'
     * $query->filterByDutch('%fooValue%'); // WHERE DUTCH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dutch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByDutch($dutch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dutch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dutch)) {
                $dutch = str_replace('*', '%', $dutch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::DUTCH, $dutch, $comparison);
    }

    /**
     * Filter the query on the PORTUGUESE column
     *
     * Example usage:
     * <code>
     * $query->filterByPortuguese('fooValue');   // WHERE PORTUGUESE = 'fooValue'
     * $query->filterByPortuguese('%fooValue%'); // WHERE PORTUGUESE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $portuguese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByPortuguese($portuguese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($portuguese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $portuguese)) {
                $portuguese = str_replace('*', '%', $portuguese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::PORTUGUESE, $portuguese, $comparison);
    }

    /**
     * Filter the query on the ITALIAN column
     *
     * Example usage:
     * <code>
     * $query->filterByItalian('fooValue');   // WHERE ITALIAN = 'fooValue'
     * $query->filterByItalian('%fooValue%'); // WHERE ITALIAN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $italian The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByItalian($italian = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($italian)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $italian)) {
                $italian = str_replace('*', '%', $italian);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::ITALIAN, $italian, $comparison);
    }

    /**
     * Filter the query on the SWEDISH column
     *
     * Example usage:
     * <code>
     * $query->filterBySwedish('fooValue');   // WHERE SWEDISH = 'fooValue'
     * $query->filterBySwedish('%fooValue%'); // WHERE SWEDISH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swedish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterBySwedish($swedish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swedish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swedish)) {
                $swedish = str_replace('*', '%', $swedish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrefPeer::SWEDISH, $swedish, $comparison);
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
     * @return CountrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CountrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CountrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Countref $countref Object to remove from the list of results
     *
     * @return CountrefQuery The current query, for fluid interface
     */
    public function prune($countref = null)
    {
        if ($countref) {
            $this->addUsingAlias(CountrefPeer::C_CODE, $countref->getCCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
