<?php


/**
 * Base class that represents a query for the 'ecology' table.
 *
 *
 *
 * @method EcologyQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method EcologyQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method EcologyQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method EcologyQuery orderByEcologyrefno($order = Criteria::ASC) Order by the EcologyRefNo column
 * @method EcologyQuery orderByHabitatsref($order = Criteria::ASC) Order by the HabitatsRef column
 * @method EcologyQuery orderByNeritic($order = Criteria::ASC) Order by the Neritic column
 * @method EcologyQuery orderBySupralittoralzone($order = Criteria::ASC) Order by the SupraLittoralZone column
 * @method EcologyQuery orderBySaltmarshes($order = Criteria::ASC) Order by the Saltmarshes column
 * @method EcologyQuery orderByLittoralzone($order = Criteria::ASC) Order by the LittoralZone column
 * @method EcologyQuery orderByTidepools($order = Criteria::ASC) Order by the TidePools column
 * @method EcologyQuery orderByIntertidal($order = Criteria::ASC) Order by the Intertidal column
 * @method EcologyQuery orderBySublittoral($order = Criteria::ASC) Order by the SubLittoral column
 * @method EcologyQuery orderByCaves($order = Criteria::ASC) Order by the Caves column
 * @method EcologyQuery orderByOceanic($order = Criteria::ASC) Order by the Oceanic column
 * @method EcologyQuery orderByEpipelagic($order = Criteria::ASC) Order by the Epipelagic column
 * @method EcologyQuery orderByMesopelagic($order = Criteria::ASC) Order by the Mesopelagic column
 * @method EcologyQuery orderByBathypelagic($order = Criteria::ASC) Order by the Bathypelagic column
 * @method EcologyQuery orderByAbyssopelagic($order = Criteria::ASC) Order by the Abyssopelagic column
 * @method EcologyQuery orderByHadopelagic($order = Criteria::ASC) Order by the Hadopelagic column
 * @method EcologyQuery orderByEstuaries($order = Criteria::ASC) Order by the Estuaries column
 * @method EcologyQuery orderByMangroves($order = Criteria::ASC) Order by the Mangroves column
 * @method EcologyQuery orderByMarshesswamps($order = Criteria::ASC) Order by the MarshesSwamps column
 * @method EcologyQuery orderByCaveanchialine($order = Criteria::ASC) Order by the CaveAnchialine column
 * @method EcologyQuery orderByStream($order = Criteria::ASC) Order by the Stream column
 * @method EcologyQuery orderByLakes($order = Criteria::ASC) Order by the Lakes column
 * @method EcologyQuery orderByCave($order = Criteria::ASC) Order by the Cave column
 * @method EcologyQuery orderByCave2($order = Criteria::ASC) Order by the Cave2 column
 * @method EcologyQuery orderByHerbivory2($order = Criteria::ASC) Order by the Herbivory2 column
 * @method EcologyQuery orderByHerbivoryref($order = Criteria::ASC) Order by the HerbivoryRef column
 * @method EcologyQuery orderByFeedingtype($order = Criteria::ASC) Order by the FeedingType column
 * @method EcologyQuery orderByFeedingtyperef($order = Criteria::ASC) Order by the FeedingTypeRef column
 * @method EcologyQuery orderByDiettroph($order = Criteria::ASC) Order by the DietTroph column
 * @method EcologyQuery orderByDietsetroph($order = Criteria::ASC) Order by the DietSeTroph column
 * @method EcologyQuery orderByDiettlu($order = Criteria::ASC) Order by the DietTLu column
 * @method EcologyQuery orderByDietsetlu($order = Criteria::ASC) Order by the DietseTLu column
 * @method EcologyQuery orderByDietremark($order = Criteria::ASC) Order by the DietRemark column
 * @method EcologyQuery orderByDietref($order = Criteria::ASC) Order by the DietRef column
 * @method EcologyQuery orderByFoodtroph($order = Criteria::ASC) Order by the FoodTroph column
 * @method EcologyQuery orderByFoodsetroph($order = Criteria::ASC) Order by the FoodSeTroph column
 * @method EcologyQuery orderByFoodremark($order = Criteria::ASC) Order by the FoodRemark column
 * @method EcologyQuery orderByFoodref($order = Criteria::ASC) Order by the FoodRef column
 * @method EcologyQuery orderByAddrems($order = Criteria::ASC) Order by the AddRems column
 * @method EcologyQuery orderByAssociationref($order = Criteria::ASC) Order by the AssociationRef column
 * @method EcologyQuery orderByParasitism($order = Criteria::ASC) Order by the Parasitism column
 * @method EcologyQuery orderBySolitary($order = Criteria::ASC) Order by the Solitary column
 * @method EcologyQuery orderBySymbiosis($order = Criteria::ASC) Order by the Symbiosis column
 * @method EcologyQuery orderBySymphorism($order = Criteria::ASC) Order by the Symphorism column
 * @method EcologyQuery orderByCommensalism($order = Criteria::ASC) Order by the Commensalism column
 * @method EcologyQuery orderByMutualism($order = Criteria::ASC) Order by the Mutualism column
 * @method EcologyQuery orderByEpiphytic($order = Criteria::ASC) Order by the Epiphytic column
 * @method EcologyQuery orderBySchooling($order = Criteria::ASC) Order by the Schooling column
 * @method EcologyQuery orderBySchoolingfrequency($order = Criteria::ASC) Order by the SchoolingFrequency column
 * @method EcologyQuery orderBySchoolinglifestage($order = Criteria::ASC) Order by the SchoolingLifestage column
 * @method EcologyQuery orderByShoaling($order = Criteria::ASC) Order by the Shoaling column
 * @method EcologyQuery orderByShoalingfrequency($order = Criteria::ASC) Order by the ShoalingFrequency column
 * @method EcologyQuery orderByShoalinglifestage($order = Criteria::ASC) Order by the ShoalingLifestage column
 * @method EcologyQuery orderBySchoolshoalref($order = Criteria::ASC) Order by the SchoolShoalRef column
 * @method EcologyQuery orderByAssociationswith($order = Criteria::ASC) Order by the AssociationsWith column
 * @method EcologyQuery orderByAssociationsremarks($order = Criteria::ASC) Order by the AssociationsRemarks column
 * @method EcologyQuery orderByOutsidehost($order = Criteria::ASC) Order by the OutsideHost column
 * @method EcologyQuery orderByOhremarks($order = Criteria::ASC) Order by the OHRemarks column
 * @method EcologyQuery orderByInsidehost($order = Criteria::ASC) Order by the InsideHost column
 * @method EcologyQuery orderByIhremarks($order = Criteria::ASC) Order by the IHRemarks column
 * @method EcologyQuery orderBySubstrateref($order = Criteria::ASC) Order by the SubstrateRef column
 * @method EcologyQuery orderByBenthic($order = Criteria::ASC) Order by the Benthic column
 * @method EcologyQuery orderBySessile($order = Criteria::ASC) Order by the Sessile column
 * @method EcologyQuery orderByMobile($order = Criteria::ASC) Order by the Mobile column
 * @method EcologyQuery orderByDemersal($order = Criteria::ASC) Order by the Demersal column
 * @method EcologyQuery orderByEndofauna($order = Criteria::ASC) Order by the Endofauna column
 * @method EcologyQuery orderByPelagic($order = Criteria::ASC) Order by the Pelagic column
 * @method EcologyQuery orderByMegabenthos($order = Criteria::ASC) Order by the Megabenthos column
 * @method EcologyQuery orderByMacrobenthos($order = Criteria::ASC) Order by the Macrobenthos column
 * @method EcologyQuery orderByMeiobenthos($order = Criteria::ASC) Order by the Meiobenthos column
 * @method EcologyQuery orderBySoftbottom($order = Criteria::ASC) Order by the SoftBottom column
 * @method EcologyQuery orderBySand($order = Criteria::ASC) Order by the Sand column
 * @method EcologyQuery orderByCoarse($order = Criteria::ASC) Order by the Coarse column
 * @method EcologyQuery orderByFine($order = Criteria::ASC) Order by the Fine column
 * @method EcologyQuery orderByLevel($order = Criteria::ASC) Order by the Level column
 * @method EcologyQuery orderBySloping($order = Criteria::ASC) Order by the Sloping column
 * @method EcologyQuery orderBySilt($order = Criteria::ASC) Order by the Silt column
 * @method EcologyQuery orderByMud($order = Criteria::ASC) Order by the Mud column
 * @method EcologyQuery orderByOoze($order = Criteria::ASC) Order by the Ooze column
 * @method EcologyQuery orderByDetritus($order = Criteria::ASC) Order by the Detritus column
 * @method EcologyQuery orderByOrganic($order = Criteria::ASC) Order by the Organic column
 * @method EcologyQuery orderByHardbottom($order = Criteria::ASC) Order by the HardBottom column
 * @method EcologyQuery orderByRocky($order = Criteria::ASC) Order by the Rocky column
 * @method EcologyQuery orderByRubble($order = Criteria::ASC) Order by the Rubble column
 * @method EcologyQuery orderBySpecialhabitatref($order = Criteria::ASC) Order by the SpecialHabitatRef column
 * @method EcologyQuery orderByMacrophyte($order = Criteria::ASC) Order by the Macrophyte column
 * @method EcologyQuery orderByBedsbivalve($order = Criteria::ASC) Order by the BedsBivalve column
 * @method EcologyQuery orderByBedsrock($order = Criteria::ASC) Order by the BedsRock column
 * @method EcologyQuery orderBySeagrassbeds($order = Criteria::ASC) Order by the SeaGrassBeds column
 * @method EcologyQuery orderByBedsothers($order = Criteria::ASC) Order by the BedsOthers column
 * @method EcologyQuery orderByCoralreefs($order = Criteria::ASC) Order by the CoralReefs column
 * @method EcologyQuery orderByReefexclusive($order = Criteria::ASC) Order by the ReefExclusive column
 * @method EcologyQuery orderByDropoffs($order = Criteria::ASC) Order by the DropOffs column
 * @method EcologyQuery orderByReefflats($order = Criteria::ASC) Order by the ReefFlats column
 * @method EcologyQuery orderByLagoons($order = Criteria::ASC) Order by the Lagoons column
 * @method EcologyQuery orderByBurrows($order = Criteria::ASC) Order by the Burrows column
 * @method EcologyQuery orderByTunnels($order = Criteria::ASC) Order by the Tunnels column
 * @method EcologyQuery orderByCrevices($order = Criteria::ASC) Order by the Crevices column
 * @method EcologyQuery orderByVents($order = Criteria::ASC) Order by the Vents column
 * @method EcologyQuery orderBySeamounts($order = Criteria::ASC) Order by the Seamounts column
 * @method EcologyQuery orderByDeepwatercorals($order = Criteria::ASC) Order by the DeepWaterCorals column
 * @method EcologyQuery orderByVegetation($order = Criteria::ASC) Order by the Vegetation column
 * @method EcologyQuery orderByLeaves($order = Criteria::ASC) Order by the Leaves column
 * @method EcologyQuery orderByStems($order = Criteria::ASC) Order by the Stems column
 * @method EcologyQuery orderByRoots($order = Criteria::ASC) Order by the Roots column
 * @method EcologyQuery orderByDriftwood($order = Criteria::ASC) Order by the Driftwood column
 * @method EcologyQuery orderByOinverterbrates($order = Criteria::ASC) Order by the OInverterbrates column
 * @method EcologyQuery orderByOiremarks($order = Criteria::ASC) Order by the OIRemarks column
 * @method EcologyQuery orderByVerterbrates($order = Criteria::ASC) Order by the Verterbrates column
 * @method EcologyQuery orderByVremarks($order = Criteria::ASC) Order by the VRemarks column
 * @method EcologyQuery orderByPilings($order = Criteria::ASC) Order by the Pilings column
 * @method EcologyQuery orderByBoathulls($order = Criteria::ASC) Order by the BoatHulls column
 * @method EcologyQuery orderByCorals($order = Criteria::ASC) Order by the Corals column
 * @method EcologyQuery orderBySoftcorals($order = Criteria::ASC) Order by the SoftCorals column
 * @method EcologyQuery orderByOnpolyp($order = Criteria::ASC) Order by the OnPolyp column
 * @method EcologyQuery orderByBetweenpolyps($order = Criteria::ASC) Order by the BetweenPolyps column
 * @method EcologyQuery orderByHardcorals($order = Criteria::ASC) Order by the HardCorals column
 * @method EcologyQuery orderByOnexoskeleton($order = Criteria::ASC) Order by the OnExoskeleton column
 * @method EcologyQuery orderByInterstitialspaces($order = Criteria::ASC) Order by the InterstitialSpaces column
 * @method EcologyQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EcologyQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method EcologyQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EcologyQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method EcologyQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EcologyQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method EcologyQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EcologyQuery groupByAutoctr() Group by the autoctr column
 * @method EcologyQuery groupBySpeccode() Group by the SpecCode column
 * @method EcologyQuery groupByStockcode() Group by the StockCode column
 * @method EcologyQuery groupByEcologyrefno() Group by the EcologyRefNo column
 * @method EcologyQuery groupByHabitatsref() Group by the HabitatsRef column
 * @method EcologyQuery groupByNeritic() Group by the Neritic column
 * @method EcologyQuery groupBySupralittoralzone() Group by the SupraLittoralZone column
 * @method EcologyQuery groupBySaltmarshes() Group by the Saltmarshes column
 * @method EcologyQuery groupByLittoralzone() Group by the LittoralZone column
 * @method EcologyQuery groupByTidepools() Group by the TidePools column
 * @method EcologyQuery groupByIntertidal() Group by the Intertidal column
 * @method EcologyQuery groupBySublittoral() Group by the SubLittoral column
 * @method EcologyQuery groupByCaves() Group by the Caves column
 * @method EcologyQuery groupByOceanic() Group by the Oceanic column
 * @method EcologyQuery groupByEpipelagic() Group by the Epipelagic column
 * @method EcologyQuery groupByMesopelagic() Group by the Mesopelagic column
 * @method EcologyQuery groupByBathypelagic() Group by the Bathypelagic column
 * @method EcologyQuery groupByAbyssopelagic() Group by the Abyssopelagic column
 * @method EcologyQuery groupByHadopelagic() Group by the Hadopelagic column
 * @method EcologyQuery groupByEstuaries() Group by the Estuaries column
 * @method EcologyQuery groupByMangroves() Group by the Mangroves column
 * @method EcologyQuery groupByMarshesswamps() Group by the MarshesSwamps column
 * @method EcologyQuery groupByCaveanchialine() Group by the CaveAnchialine column
 * @method EcologyQuery groupByStream() Group by the Stream column
 * @method EcologyQuery groupByLakes() Group by the Lakes column
 * @method EcologyQuery groupByCave() Group by the Cave column
 * @method EcologyQuery groupByCave2() Group by the Cave2 column
 * @method EcologyQuery groupByHerbivory2() Group by the Herbivory2 column
 * @method EcologyQuery groupByHerbivoryref() Group by the HerbivoryRef column
 * @method EcologyQuery groupByFeedingtype() Group by the FeedingType column
 * @method EcologyQuery groupByFeedingtyperef() Group by the FeedingTypeRef column
 * @method EcologyQuery groupByDiettroph() Group by the DietTroph column
 * @method EcologyQuery groupByDietsetroph() Group by the DietSeTroph column
 * @method EcologyQuery groupByDiettlu() Group by the DietTLu column
 * @method EcologyQuery groupByDietsetlu() Group by the DietseTLu column
 * @method EcologyQuery groupByDietremark() Group by the DietRemark column
 * @method EcologyQuery groupByDietref() Group by the DietRef column
 * @method EcologyQuery groupByFoodtroph() Group by the FoodTroph column
 * @method EcologyQuery groupByFoodsetroph() Group by the FoodSeTroph column
 * @method EcologyQuery groupByFoodremark() Group by the FoodRemark column
 * @method EcologyQuery groupByFoodref() Group by the FoodRef column
 * @method EcologyQuery groupByAddrems() Group by the AddRems column
 * @method EcologyQuery groupByAssociationref() Group by the AssociationRef column
 * @method EcologyQuery groupByParasitism() Group by the Parasitism column
 * @method EcologyQuery groupBySolitary() Group by the Solitary column
 * @method EcologyQuery groupBySymbiosis() Group by the Symbiosis column
 * @method EcologyQuery groupBySymphorism() Group by the Symphorism column
 * @method EcologyQuery groupByCommensalism() Group by the Commensalism column
 * @method EcologyQuery groupByMutualism() Group by the Mutualism column
 * @method EcologyQuery groupByEpiphytic() Group by the Epiphytic column
 * @method EcologyQuery groupBySchooling() Group by the Schooling column
 * @method EcologyQuery groupBySchoolingfrequency() Group by the SchoolingFrequency column
 * @method EcologyQuery groupBySchoolinglifestage() Group by the SchoolingLifestage column
 * @method EcologyQuery groupByShoaling() Group by the Shoaling column
 * @method EcologyQuery groupByShoalingfrequency() Group by the ShoalingFrequency column
 * @method EcologyQuery groupByShoalinglifestage() Group by the ShoalingLifestage column
 * @method EcologyQuery groupBySchoolshoalref() Group by the SchoolShoalRef column
 * @method EcologyQuery groupByAssociationswith() Group by the AssociationsWith column
 * @method EcologyQuery groupByAssociationsremarks() Group by the AssociationsRemarks column
 * @method EcologyQuery groupByOutsidehost() Group by the OutsideHost column
 * @method EcologyQuery groupByOhremarks() Group by the OHRemarks column
 * @method EcologyQuery groupByInsidehost() Group by the InsideHost column
 * @method EcologyQuery groupByIhremarks() Group by the IHRemarks column
 * @method EcologyQuery groupBySubstrateref() Group by the SubstrateRef column
 * @method EcologyQuery groupByBenthic() Group by the Benthic column
 * @method EcologyQuery groupBySessile() Group by the Sessile column
 * @method EcologyQuery groupByMobile() Group by the Mobile column
 * @method EcologyQuery groupByDemersal() Group by the Demersal column
 * @method EcologyQuery groupByEndofauna() Group by the Endofauna column
 * @method EcologyQuery groupByPelagic() Group by the Pelagic column
 * @method EcologyQuery groupByMegabenthos() Group by the Megabenthos column
 * @method EcologyQuery groupByMacrobenthos() Group by the Macrobenthos column
 * @method EcologyQuery groupByMeiobenthos() Group by the Meiobenthos column
 * @method EcologyQuery groupBySoftbottom() Group by the SoftBottom column
 * @method EcologyQuery groupBySand() Group by the Sand column
 * @method EcologyQuery groupByCoarse() Group by the Coarse column
 * @method EcologyQuery groupByFine() Group by the Fine column
 * @method EcologyQuery groupByLevel() Group by the Level column
 * @method EcologyQuery groupBySloping() Group by the Sloping column
 * @method EcologyQuery groupBySilt() Group by the Silt column
 * @method EcologyQuery groupByMud() Group by the Mud column
 * @method EcologyQuery groupByOoze() Group by the Ooze column
 * @method EcologyQuery groupByDetritus() Group by the Detritus column
 * @method EcologyQuery groupByOrganic() Group by the Organic column
 * @method EcologyQuery groupByHardbottom() Group by the HardBottom column
 * @method EcologyQuery groupByRocky() Group by the Rocky column
 * @method EcologyQuery groupByRubble() Group by the Rubble column
 * @method EcologyQuery groupBySpecialhabitatref() Group by the SpecialHabitatRef column
 * @method EcologyQuery groupByMacrophyte() Group by the Macrophyte column
 * @method EcologyQuery groupByBedsbivalve() Group by the BedsBivalve column
 * @method EcologyQuery groupByBedsrock() Group by the BedsRock column
 * @method EcologyQuery groupBySeagrassbeds() Group by the SeaGrassBeds column
 * @method EcologyQuery groupByBedsothers() Group by the BedsOthers column
 * @method EcologyQuery groupByCoralreefs() Group by the CoralReefs column
 * @method EcologyQuery groupByReefexclusive() Group by the ReefExclusive column
 * @method EcologyQuery groupByDropoffs() Group by the DropOffs column
 * @method EcologyQuery groupByReefflats() Group by the ReefFlats column
 * @method EcologyQuery groupByLagoons() Group by the Lagoons column
 * @method EcologyQuery groupByBurrows() Group by the Burrows column
 * @method EcologyQuery groupByTunnels() Group by the Tunnels column
 * @method EcologyQuery groupByCrevices() Group by the Crevices column
 * @method EcologyQuery groupByVents() Group by the Vents column
 * @method EcologyQuery groupBySeamounts() Group by the Seamounts column
 * @method EcologyQuery groupByDeepwatercorals() Group by the DeepWaterCorals column
 * @method EcologyQuery groupByVegetation() Group by the Vegetation column
 * @method EcologyQuery groupByLeaves() Group by the Leaves column
 * @method EcologyQuery groupByStems() Group by the Stems column
 * @method EcologyQuery groupByRoots() Group by the Roots column
 * @method EcologyQuery groupByDriftwood() Group by the Driftwood column
 * @method EcologyQuery groupByOinverterbrates() Group by the OInverterbrates column
 * @method EcologyQuery groupByOiremarks() Group by the OIRemarks column
 * @method EcologyQuery groupByVerterbrates() Group by the Verterbrates column
 * @method EcologyQuery groupByVremarks() Group by the VRemarks column
 * @method EcologyQuery groupByPilings() Group by the Pilings column
 * @method EcologyQuery groupByBoathulls() Group by the BoatHulls column
 * @method EcologyQuery groupByCorals() Group by the Corals column
 * @method EcologyQuery groupBySoftcorals() Group by the SoftCorals column
 * @method EcologyQuery groupByOnpolyp() Group by the OnPolyp column
 * @method EcologyQuery groupByBetweenpolyps() Group by the BetweenPolyps column
 * @method EcologyQuery groupByHardcorals() Group by the HardCorals column
 * @method EcologyQuery groupByOnexoskeleton() Group by the OnExoskeleton column
 * @method EcologyQuery groupByInterstitialspaces() Group by the InterstitialSpaces column
 * @method EcologyQuery groupByEntered() Group by the Entered column
 * @method EcologyQuery groupByDateentered() Group by the Dateentered column
 * @method EcologyQuery groupByModified() Group by the Modified column
 * @method EcologyQuery groupByDatemodified() Group by the Datemodified column
 * @method EcologyQuery groupByExpert() Group by the Expert column
 * @method EcologyQuery groupByDatechecked() Group by the Datechecked column
 * @method EcologyQuery groupByTs() Group by the TS column
 *
 * @method EcologyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EcologyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EcologyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ecology findOne(PropelPDO $con = null) Return the first Ecology matching the query
 * @method Ecology findOneOrCreate(PropelPDO $con = null) Return the first Ecology matching the query, or a new Ecology object populated from the query conditions when no match is found
 *
 * @method Ecology findOneByAutoctr(int $autoctr) Return the first Ecology filtered by the autoctr column
 * @method Ecology findOneBySpeccode(int $SpecCode) Return the first Ecology filtered by the SpecCode column
 * @method Ecology findOneByEcologyrefno(int $EcologyRefNo) Return the first Ecology filtered by the EcologyRefNo column
 * @method Ecology findOneByHabitatsref(int $HabitatsRef) Return the first Ecology filtered by the HabitatsRef column
 * @method Ecology findOneByNeritic(int $Neritic) Return the first Ecology filtered by the Neritic column
 * @method Ecology findOneBySupralittoralzone(int $SupraLittoralZone) Return the first Ecology filtered by the SupraLittoralZone column
 * @method Ecology findOneBySaltmarshes(int $Saltmarshes) Return the first Ecology filtered by the Saltmarshes column
 * @method Ecology findOneByLittoralzone(int $LittoralZone) Return the first Ecology filtered by the LittoralZone column
 * @method Ecology findOneByTidepools(int $TidePools) Return the first Ecology filtered by the TidePools column
 * @method Ecology findOneByIntertidal(int $Intertidal) Return the first Ecology filtered by the Intertidal column
 * @method Ecology findOneBySublittoral(int $SubLittoral) Return the first Ecology filtered by the SubLittoral column
 * @method Ecology findOneByCaves(int $Caves) Return the first Ecology filtered by the Caves column
 * @method Ecology findOneByOceanic(int $Oceanic) Return the first Ecology filtered by the Oceanic column
 * @method Ecology findOneByEpipelagic(int $Epipelagic) Return the first Ecology filtered by the Epipelagic column
 * @method Ecology findOneByMesopelagic(int $Mesopelagic) Return the first Ecology filtered by the Mesopelagic column
 * @method Ecology findOneByBathypelagic(int $Bathypelagic) Return the first Ecology filtered by the Bathypelagic column
 * @method Ecology findOneByAbyssopelagic(int $Abyssopelagic) Return the first Ecology filtered by the Abyssopelagic column
 * @method Ecology findOneByHadopelagic(int $Hadopelagic) Return the first Ecology filtered by the Hadopelagic column
 * @method Ecology findOneByEstuaries(int $Estuaries) Return the first Ecology filtered by the Estuaries column
 * @method Ecology findOneByMangroves(int $Mangroves) Return the first Ecology filtered by the Mangroves column
 * @method Ecology findOneByMarshesswamps(string $MarshesSwamps) Return the first Ecology filtered by the MarshesSwamps column
 * @method Ecology findOneByCaveanchialine(int $CaveAnchialine) Return the first Ecology filtered by the CaveAnchialine column
 * @method Ecology findOneByStream(int $Stream) Return the first Ecology filtered by the Stream column
 * @method Ecology findOneByLakes(int $Lakes) Return the first Ecology filtered by the Lakes column
 * @method Ecology findOneByCave(int $Cave) Return the first Ecology filtered by the Cave column
 * @method Ecology findOneByCave2(int $Cave2) Return the first Ecology filtered by the Cave2 column
 * @method Ecology findOneByHerbivory2(string $Herbivory2) Return the first Ecology filtered by the Herbivory2 column
 * @method Ecology findOneByHerbivoryref(int $HerbivoryRef) Return the first Ecology filtered by the HerbivoryRef column
 * @method Ecology findOneByFeedingtype(string $FeedingType) Return the first Ecology filtered by the FeedingType column
 * @method Ecology findOneByFeedingtyperef(int $FeedingTypeRef) Return the first Ecology filtered by the FeedingTypeRef column
 * @method Ecology findOneByDiettroph(double $DietTroph) Return the first Ecology filtered by the DietTroph column
 * @method Ecology findOneByDietsetroph(double $DietSeTroph) Return the first Ecology filtered by the DietSeTroph column
 * @method Ecology findOneByDiettlu(double $DietTLu) Return the first Ecology filtered by the DietTLu column
 * @method Ecology findOneByDietsetlu(double $DietseTLu) Return the first Ecology filtered by the DietseTLu column
 * @method Ecology findOneByDietremark(string $DietRemark) Return the first Ecology filtered by the DietRemark column
 * @method Ecology findOneByDietref(int $DietRef) Return the first Ecology filtered by the DietRef column
 * @method Ecology findOneByFoodtroph(double $FoodTroph) Return the first Ecology filtered by the FoodTroph column
 * @method Ecology findOneByFoodsetroph(double $FoodSeTroph) Return the first Ecology filtered by the FoodSeTroph column
 * @method Ecology findOneByFoodremark(string $FoodRemark) Return the first Ecology filtered by the FoodRemark column
 * @method Ecology findOneByFoodref(int $FoodRef) Return the first Ecology filtered by the FoodRef column
 * @method Ecology findOneByAddrems(string $AddRems) Return the first Ecology filtered by the AddRems column
 * @method Ecology findOneByAssociationref(int $AssociationRef) Return the first Ecology filtered by the AssociationRef column
 * @method Ecology findOneByParasitism(int $Parasitism) Return the first Ecology filtered by the Parasitism column
 * @method Ecology findOneBySolitary(int $Solitary) Return the first Ecology filtered by the Solitary column
 * @method Ecology findOneBySymbiosis(int $Symbiosis) Return the first Ecology filtered by the Symbiosis column
 * @method Ecology findOneBySymphorism(int $Symphorism) Return the first Ecology filtered by the Symphorism column
 * @method Ecology findOneByCommensalism(int $Commensalism) Return the first Ecology filtered by the Commensalism column
 * @method Ecology findOneByMutualism(int $Mutualism) Return the first Ecology filtered by the Mutualism column
 * @method Ecology findOneByEpiphytic(int $Epiphytic) Return the first Ecology filtered by the Epiphytic column
 * @method Ecology findOneBySchooling(int $Schooling) Return the first Ecology filtered by the Schooling column
 * @method Ecology findOneBySchoolingfrequency(string $SchoolingFrequency) Return the first Ecology filtered by the SchoolingFrequency column
 * @method Ecology findOneBySchoolinglifestage(string $SchoolingLifestage) Return the first Ecology filtered by the SchoolingLifestage column
 * @method Ecology findOneByShoaling(int $Shoaling) Return the first Ecology filtered by the Shoaling column
 * @method Ecology findOneByShoalingfrequency(string $ShoalingFrequency) Return the first Ecology filtered by the ShoalingFrequency column
 * @method Ecology findOneByShoalinglifestage(string $ShoalingLifestage) Return the first Ecology filtered by the ShoalingLifestage column
 * @method Ecology findOneBySchoolshoalref(int $SchoolShoalRef) Return the first Ecology filtered by the SchoolShoalRef column
 * @method Ecology findOneByAssociationswith(string $AssociationsWith) Return the first Ecology filtered by the AssociationsWith column
 * @method Ecology findOneByAssociationsremarks(string $AssociationsRemarks) Return the first Ecology filtered by the AssociationsRemarks column
 * @method Ecology findOneByOutsidehost(int $OutsideHost) Return the first Ecology filtered by the OutsideHost column
 * @method Ecology findOneByOhremarks(string $OHRemarks) Return the first Ecology filtered by the OHRemarks column
 * @method Ecology findOneByInsidehost(int $InsideHost) Return the first Ecology filtered by the InsideHost column
 * @method Ecology findOneByIhremarks(string $IHRemarks) Return the first Ecology filtered by the IHRemarks column
 * @method Ecology findOneBySubstrateref(int $SubstrateRef) Return the first Ecology filtered by the SubstrateRef column
 * @method Ecology findOneByBenthic(int $Benthic) Return the first Ecology filtered by the Benthic column
 * @method Ecology findOneBySessile(int $Sessile) Return the first Ecology filtered by the Sessile column
 * @method Ecology findOneByMobile(int $Mobile) Return the first Ecology filtered by the Mobile column
 * @method Ecology findOneByDemersal(int $Demersal) Return the first Ecology filtered by the Demersal column
 * @method Ecology findOneByEndofauna(int $Endofauna) Return the first Ecology filtered by the Endofauna column
 * @method Ecology findOneByPelagic(int $Pelagic) Return the first Ecology filtered by the Pelagic column
 * @method Ecology findOneByMegabenthos(int $Megabenthos) Return the first Ecology filtered by the Megabenthos column
 * @method Ecology findOneByMacrobenthos(int $Macrobenthos) Return the first Ecology filtered by the Macrobenthos column
 * @method Ecology findOneByMeiobenthos(int $Meiobenthos) Return the first Ecology filtered by the Meiobenthos column
 * @method Ecology findOneBySoftbottom(int $SoftBottom) Return the first Ecology filtered by the SoftBottom column
 * @method Ecology findOneBySand(int $Sand) Return the first Ecology filtered by the Sand column
 * @method Ecology findOneByCoarse(int $Coarse) Return the first Ecology filtered by the Coarse column
 * @method Ecology findOneByFine(int $Fine) Return the first Ecology filtered by the Fine column
 * @method Ecology findOneByLevel(int $Level) Return the first Ecology filtered by the Level column
 * @method Ecology findOneBySloping(int $Sloping) Return the first Ecology filtered by the Sloping column
 * @method Ecology findOneBySilt(int $Silt) Return the first Ecology filtered by the Silt column
 * @method Ecology findOneByMud(int $Mud) Return the first Ecology filtered by the Mud column
 * @method Ecology findOneByOoze(int $Ooze) Return the first Ecology filtered by the Ooze column
 * @method Ecology findOneByDetritus(int $Detritus) Return the first Ecology filtered by the Detritus column
 * @method Ecology findOneByOrganic(int $Organic) Return the first Ecology filtered by the Organic column
 * @method Ecology findOneByHardbottom(int $HardBottom) Return the first Ecology filtered by the HardBottom column
 * @method Ecology findOneByRocky(int $Rocky) Return the first Ecology filtered by the Rocky column
 * @method Ecology findOneByRubble(int $Rubble) Return the first Ecology filtered by the Rubble column
 * @method Ecology findOneBySpecialhabitatref(int $SpecialHabitatRef) Return the first Ecology filtered by the SpecialHabitatRef column
 * @method Ecology findOneByMacrophyte(int $Macrophyte) Return the first Ecology filtered by the Macrophyte column
 * @method Ecology findOneByBedsbivalve(int $BedsBivalve) Return the first Ecology filtered by the BedsBivalve column
 * @method Ecology findOneByBedsrock(int $BedsRock) Return the first Ecology filtered by the BedsRock column
 * @method Ecology findOneBySeagrassbeds(int $SeaGrassBeds) Return the first Ecology filtered by the SeaGrassBeds column
 * @method Ecology findOneByBedsothers(int $BedsOthers) Return the first Ecology filtered by the BedsOthers column
 * @method Ecology findOneByCoralreefs(int $CoralReefs) Return the first Ecology filtered by the CoralReefs column
 * @method Ecology findOneByReefexclusive(int $ReefExclusive) Return the first Ecology filtered by the ReefExclusive column
 * @method Ecology findOneByDropoffs(int $DropOffs) Return the first Ecology filtered by the DropOffs column
 * @method Ecology findOneByReefflats(int $ReefFlats) Return the first Ecology filtered by the ReefFlats column
 * @method Ecology findOneByLagoons(int $Lagoons) Return the first Ecology filtered by the Lagoons column
 * @method Ecology findOneByBurrows(int $Burrows) Return the first Ecology filtered by the Burrows column
 * @method Ecology findOneByTunnels(int $Tunnels) Return the first Ecology filtered by the Tunnels column
 * @method Ecology findOneByCrevices(int $Crevices) Return the first Ecology filtered by the Crevices column
 * @method Ecology findOneByVents(int $Vents) Return the first Ecology filtered by the Vents column
 * @method Ecology findOneBySeamounts(int $Seamounts) Return the first Ecology filtered by the Seamounts column
 * @method Ecology findOneByDeepwatercorals(int $DeepWaterCorals) Return the first Ecology filtered by the DeepWaterCorals column
 * @method Ecology findOneByVegetation(int $Vegetation) Return the first Ecology filtered by the Vegetation column
 * @method Ecology findOneByLeaves(int $Leaves) Return the first Ecology filtered by the Leaves column
 * @method Ecology findOneByStems(int $Stems) Return the first Ecology filtered by the Stems column
 * @method Ecology findOneByRoots(int $Roots) Return the first Ecology filtered by the Roots column
 * @method Ecology findOneByDriftwood(int $Driftwood) Return the first Ecology filtered by the Driftwood column
 * @method Ecology findOneByOinverterbrates(int $OInverterbrates) Return the first Ecology filtered by the OInverterbrates column
 * @method Ecology findOneByOiremarks(string $OIRemarks) Return the first Ecology filtered by the OIRemarks column
 * @method Ecology findOneByVerterbrates(int $Verterbrates) Return the first Ecology filtered by the Verterbrates column
 * @method Ecology findOneByVremarks(string $VRemarks) Return the first Ecology filtered by the VRemarks column
 * @method Ecology findOneByPilings(int $Pilings) Return the first Ecology filtered by the Pilings column
 * @method Ecology findOneByBoathulls(int $BoatHulls) Return the first Ecology filtered by the BoatHulls column
 * @method Ecology findOneByCorals(int $Corals) Return the first Ecology filtered by the Corals column
 * @method Ecology findOneBySoftcorals(int $SoftCorals) Return the first Ecology filtered by the SoftCorals column
 * @method Ecology findOneByOnpolyp(int $OnPolyp) Return the first Ecology filtered by the OnPolyp column
 * @method Ecology findOneByBetweenpolyps(int $BetweenPolyps) Return the first Ecology filtered by the BetweenPolyps column
 * @method Ecology findOneByHardcorals(int $HardCorals) Return the first Ecology filtered by the HardCorals column
 * @method Ecology findOneByOnexoskeleton(int $OnExoskeleton) Return the first Ecology filtered by the OnExoskeleton column
 * @method Ecology findOneByInterstitialspaces(int $InterstitialSpaces) Return the first Ecology filtered by the InterstitialSpaces column
 * @method Ecology findOneByEntered(int $Entered) Return the first Ecology filtered by the Entered column
 * @method Ecology findOneByDateentered(string $Dateentered) Return the first Ecology filtered by the Dateentered column
 * @method Ecology findOneByModified(int $Modified) Return the first Ecology filtered by the Modified column
 * @method Ecology findOneByDatemodified(string $Datemodified) Return the first Ecology filtered by the Datemodified column
 * @method Ecology findOneByExpert(int $Expert) Return the first Ecology filtered by the Expert column
 * @method Ecology findOneByDatechecked(string $Datechecked) Return the first Ecology filtered by the Datechecked column
 * @method Ecology findOneByTs(string $TS) Return the first Ecology filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Ecology objects filtered by the autoctr column
 * @method array findBySpeccode(int $SpecCode) Return Ecology objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Ecology objects filtered by the StockCode column
 * @method array findByEcologyrefno(int $EcologyRefNo) Return Ecology objects filtered by the EcologyRefNo column
 * @method array findByHabitatsref(int $HabitatsRef) Return Ecology objects filtered by the HabitatsRef column
 * @method array findByNeritic(int $Neritic) Return Ecology objects filtered by the Neritic column
 * @method array findBySupralittoralzone(int $SupraLittoralZone) Return Ecology objects filtered by the SupraLittoralZone column
 * @method array findBySaltmarshes(int $Saltmarshes) Return Ecology objects filtered by the Saltmarshes column
 * @method array findByLittoralzone(int $LittoralZone) Return Ecology objects filtered by the LittoralZone column
 * @method array findByTidepools(int $TidePools) Return Ecology objects filtered by the TidePools column
 * @method array findByIntertidal(int $Intertidal) Return Ecology objects filtered by the Intertidal column
 * @method array findBySublittoral(int $SubLittoral) Return Ecology objects filtered by the SubLittoral column
 * @method array findByCaves(int $Caves) Return Ecology objects filtered by the Caves column
 * @method array findByOceanic(int $Oceanic) Return Ecology objects filtered by the Oceanic column
 * @method array findByEpipelagic(int $Epipelagic) Return Ecology objects filtered by the Epipelagic column
 * @method array findByMesopelagic(int $Mesopelagic) Return Ecology objects filtered by the Mesopelagic column
 * @method array findByBathypelagic(int $Bathypelagic) Return Ecology objects filtered by the Bathypelagic column
 * @method array findByAbyssopelagic(int $Abyssopelagic) Return Ecology objects filtered by the Abyssopelagic column
 * @method array findByHadopelagic(int $Hadopelagic) Return Ecology objects filtered by the Hadopelagic column
 * @method array findByEstuaries(int $Estuaries) Return Ecology objects filtered by the Estuaries column
 * @method array findByMangroves(int $Mangroves) Return Ecology objects filtered by the Mangroves column
 * @method array findByMarshesswamps(string $MarshesSwamps) Return Ecology objects filtered by the MarshesSwamps column
 * @method array findByCaveanchialine(int $CaveAnchialine) Return Ecology objects filtered by the CaveAnchialine column
 * @method array findByStream(int $Stream) Return Ecology objects filtered by the Stream column
 * @method array findByLakes(int $Lakes) Return Ecology objects filtered by the Lakes column
 * @method array findByCave(int $Cave) Return Ecology objects filtered by the Cave column
 * @method array findByCave2(int $Cave2) Return Ecology objects filtered by the Cave2 column
 * @method array findByHerbivory2(string $Herbivory2) Return Ecology objects filtered by the Herbivory2 column
 * @method array findByHerbivoryref(int $HerbivoryRef) Return Ecology objects filtered by the HerbivoryRef column
 * @method array findByFeedingtype(string $FeedingType) Return Ecology objects filtered by the FeedingType column
 * @method array findByFeedingtyperef(int $FeedingTypeRef) Return Ecology objects filtered by the FeedingTypeRef column
 * @method array findByDiettroph(double $DietTroph) Return Ecology objects filtered by the DietTroph column
 * @method array findByDietsetroph(double $DietSeTroph) Return Ecology objects filtered by the DietSeTroph column
 * @method array findByDiettlu(double $DietTLu) Return Ecology objects filtered by the DietTLu column
 * @method array findByDietsetlu(double $DietseTLu) Return Ecology objects filtered by the DietseTLu column
 * @method array findByDietremark(string $DietRemark) Return Ecology objects filtered by the DietRemark column
 * @method array findByDietref(int $DietRef) Return Ecology objects filtered by the DietRef column
 * @method array findByFoodtroph(double $FoodTroph) Return Ecology objects filtered by the FoodTroph column
 * @method array findByFoodsetroph(double $FoodSeTroph) Return Ecology objects filtered by the FoodSeTroph column
 * @method array findByFoodremark(string $FoodRemark) Return Ecology objects filtered by the FoodRemark column
 * @method array findByFoodref(int $FoodRef) Return Ecology objects filtered by the FoodRef column
 * @method array findByAddrems(string $AddRems) Return Ecology objects filtered by the AddRems column
 * @method array findByAssociationref(int $AssociationRef) Return Ecology objects filtered by the AssociationRef column
 * @method array findByParasitism(int $Parasitism) Return Ecology objects filtered by the Parasitism column
 * @method array findBySolitary(int $Solitary) Return Ecology objects filtered by the Solitary column
 * @method array findBySymbiosis(int $Symbiosis) Return Ecology objects filtered by the Symbiosis column
 * @method array findBySymphorism(int $Symphorism) Return Ecology objects filtered by the Symphorism column
 * @method array findByCommensalism(int $Commensalism) Return Ecology objects filtered by the Commensalism column
 * @method array findByMutualism(int $Mutualism) Return Ecology objects filtered by the Mutualism column
 * @method array findByEpiphytic(int $Epiphytic) Return Ecology objects filtered by the Epiphytic column
 * @method array findBySchooling(int $Schooling) Return Ecology objects filtered by the Schooling column
 * @method array findBySchoolingfrequency(string $SchoolingFrequency) Return Ecology objects filtered by the SchoolingFrequency column
 * @method array findBySchoolinglifestage(string $SchoolingLifestage) Return Ecology objects filtered by the SchoolingLifestage column
 * @method array findByShoaling(int $Shoaling) Return Ecology objects filtered by the Shoaling column
 * @method array findByShoalingfrequency(string $ShoalingFrequency) Return Ecology objects filtered by the ShoalingFrequency column
 * @method array findByShoalinglifestage(string $ShoalingLifestage) Return Ecology objects filtered by the ShoalingLifestage column
 * @method array findBySchoolshoalref(int $SchoolShoalRef) Return Ecology objects filtered by the SchoolShoalRef column
 * @method array findByAssociationswith(string $AssociationsWith) Return Ecology objects filtered by the AssociationsWith column
 * @method array findByAssociationsremarks(string $AssociationsRemarks) Return Ecology objects filtered by the AssociationsRemarks column
 * @method array findByOutsidehost(int $OutsideHost) Return Ecology objects filtered by the OutsideHost column
 * @method array findByOhremarks(string $OHRemarks) Return Ecology objects filtered by the OHRemarks column
 * @method array findByInsidehost(int $InsideHost) Return Ecology objects filtered by the InsideHost column
 * @method array findByIhremarks(string $IHRemarks) Return Ecology objects filtered by the IHRemarks column
 * @method array findBySubstrateref(int $SubstrateRef) Return Ecology objects filtered by the SubstrateRef column
 * @method array findByBenthic(int $Benthic) Return Ecology objects filtered by the Benthic column
 * @method array findBySessile(int $Sessile) Return Ecology objects filtered by the Sessile column
 * @method array findByMobile(int $Mobile) Return Ecology objects filtered by the Mobile column
 * @method array findByDemersal(int $Demersal) Return Ecology objects filtered by the Demersal column
 * @method array findByEndofauna(int $Endofauna) Return Ecology objects filtered by the Endofauna column
 * @method array findByPelagic(int $Pelagic) Return Ecology objects filtered by the Pelagic column
 * @method array findByMegabenthos(int $Megabenthos) Return Ecology objects filtered by the Megabenthos column
 * @method array findByMacrobenthos(int $Macrobenthos) Return Ecology objects filtered by the Macrobenthos column
 * @method array findByMeiobenthos(int $Meiobenthos) Return Ecology objects filtered by the Meiobenthos column
 * @method array findBySoftbottom(int $SoftBottom) Return Ecology objects filtered by the SoftBottom column
 * @method array findBySand(int $Sand) Return Ecology objects filtered by the Sand column
 * @method array findByCoarse(int $Coarse) Return Ecology objects filtered by the Coarse column
 * @method array findByFine(int $Fine) Return Ecology objects filtered by the Fine column
 * @method array findByLevel(int $Level) Return Ecology objects filtered by the Level column
 * @method array findBySloping(int $Sloping) Return Ecology objects filtered by the Sloping column
 * @method array findBySilt(int $Silt) Return Ecology objects filtered by the Silt column
 * @method array findByMud(int $Mud) Return Ecology objects filtered by the Mud column
 * @method array findByOoze(int $Ooze) Return Ecology objects filtered by the Ooze column
 * @method array findByDetritus(int $Detritus) Return Ecology objects filtered by the Detritus column
 * @method array findByOrganic(int $Organic) Return Ecology objects filtered by the Organic column
 * @method array findByHardbottom(int $HardBottom) Return Ecology objects filtered by the HardBottom column
 * @method array findByRocky(int $Rocky) Return Ecology objects filtered by the Rocky column
 * @method array findByRubble(int $Rubble) Return Ecology objects filtered by the Rubble column
 * @method array findBySpecialhabitatref(int $SpecialHabitatRef) Return Ecology objects filtered by the SpecialHabitatRef column
 * @method array findByMacrophyte(int $Macrophyte) Return Ecology objects filtered by the Macrophyte column
 * @method array findByBedsbivalve(int $BedsBivalve) Return Ecology objects filtered by the BedsBivalve column
 * @method array findByBedsrock(int $BedsRock) Return Ecology objects filtered by the BedsRock column
 * @method array findBySeagrassbeds(int $SeaGrassBeds) Return Ecology objects filtered by the SeaGrassBeds column
 * @method array findByBedsothers(int $BedsOthers) Return Ecology objects filtered by the BedsOthers column
 * @method array findByCoralreefs(int $CoralReefs) Return Ecology objects filtered by the CoralReefs column
 * @method array findByReefexclusive(int $ReefExclusive) Return Ecology objects filtered by the ReefExclusive column
 * @method array findByDropoffs(int $DropOffs) Return Ecology objects filtered by the DropOffs column
 * @method array findByReefflats(int $ReefFlats) Return Ecology objects filtered by the ReefFlats column
 * @method array findByLagoons(int $Lagoons) Return Ecology objects filtered by the Lagoons column
 * @method array findByBurrows(int $Burrows) Return Ecology objects filtered by the Burrows column
 * @method array findByTunnels(int $Tunnels) Return Ecology objects filtered by the Tunnels column
 * @method array findByCrevices(int $Crevices) Return Ecology objects filtered by the Crevices column
 * @method array findByVents(int $Vents) Return Ecology objects filtered by the Vents column
 * @method array findBySeamounts(int $Seamounts) Return Ecology objects filtered by the Seamounts column
 * @method array findByDeepwatercorals(int $DeepWaterCorals) Return Ecology objects filtered by the DeepWaterCorals column
 * @method array findByVegetation(int $Vegetation) Return Ecology objects filtered by the Vegetation column
 * @method array findByLeaves(int $Leaves) Return Ecology objects filtered by the Leaves column
 * @method array findByStems(int $Stems) Return Ecology objects filtered by the Stems column
 * @method array findByRoots(int $Roots) Return Ecology objects filtered by the Roots column
 * @method array findByDriftwood(int $Driftwood) Return Ecology objects filtered by the Driftwood column
 * @method array findByOinverterbrates(int $OInverterbrates) Return Ecology objects filtered by the OInverterbrates column
 * @method array findByOiremarks(string $OIRemarks) Return Ecology objects filtered by the OIRemarks column
 * @method array findByVerterbrates(int $Verterbrates) Return Ecology objects filtered by the Verterbrates column
 * @method array findByVremarks(string $VRemarks) Return Ecology objects filtered by the VRemarks column
 * @method array findByPilings(int $Pilings) Return Ecology objects filtered by the Pilings column
 * @method array findByBoathulls(int $BoatHulls) Return Ecology objects filtered by the BoatHulls column
 * @method array findByCorals(int $Corals) Return Ecology objects filtered by the Corals column
 * @method array findBySoftcorals(int $SoftCorals) Return Ecology objects filtered by the SoftCorals column
 * @method array findByOnpolyp(int $OnPolyp) Return Ecology objects filtered by the OnPolyp column
 * @method array findByBetweenpolyps(int $BetweenPolyps) Return Ecology objects filtered by the BetweenPolyps column
 * @method array findByHardcorals(int $HardCorals) Return Ecology objects filtered by the HardCorals column
 * @method array findByOnexoskeleton(int $OnExoskeleton) Return Ecology objects filtered by the OnExoskeleton column
 * @method array findByInterstitialspaces(int $InterstitialSpaces) Return Ecology objects filtered by the InterstitialSpaces column
 * @method array findByEntered(int $Entered) Return Ecology objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Ecology objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Ecology objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Ecology objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Ecology objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Ecology objects filtered by the Datechecked column
 * @method array findByTs(string $TS) Return Ecology objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcologyQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEcologyQuery object.
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
            $modelName = 'Ecology';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EcologyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EcologyQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EcologyQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EcologyQuery) {
            return $criteria;
        }
        $query = new EcologyQuery(null, null, $modelAlias);

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
     * @return   Ecology|Ecology[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EcologyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ecology A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByStockcode($key, $con = null)
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
     * @return                 Ecology A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `SpecCode`, `StockCode`, `EcologyRefNo`, `HabitatsRef`, `Neritic`, `SupraLittoralZone`, `Saltmarshes`, `LittoralZone`, `TidePools`, `Intertidal`, `SubLittoral`, `Caves`, `Oceanic`, `Epipelagic`, `Mesopelagic`, `Bathypelagic`, `Abyssopelagic`, `Hadopelagic`, `Estuaries`, `Mangroves`, `MarshesSwamps`, `CaveAnchialine`, `Stream`, `Lakes`, `Cave`, `Cave2`, `Herbivory2`, `HerbivoryRef`, `FeedingType`, `FeedingTypeRef`, `DietTroph`, `DietSeTroph`, `DietTLu`, `DietseTLu`, `DietRemark`, `DietRef`, `FoodTroph`, `FoodSeTroph`, `FoodRemark`, `FoodRef`, `AddRems`, `AssociationRef`, `Parasitism`, `Solitary`, `Symbiosis`, `Symphorism`, `Commensalism`, `Mutualism`, `Epiphytic`, `Schooling`, `SchoolingFrequency`, `SchoolingLifestage`, `Shoaling`, `ShoalingFrequency`, `ShoalingLifestage`, `SchoolShoalRef`, `AssociationsWith`, `AssociationsRemarks`, `OutsideHost`, `OHRemarks`, `InsideHost`, `IHRemarks`, `SubstrateRef`, `Benthic`, `Sessile`, `Mobile`, `Demersal`, `Endofauna`, `Pelagic`, `Megabenthos`, `Macrobenthos`, `Meiobenthos`, `SoftBottom`, `Sand`, `Coarse`, `Fine`, `Level`, `Sloping`, `Silt`, `Mud`, `Ooze`, `Detritus`, `Organic`, `HardBottom`, `Rocky`, `Rubble`, `SpecialHabitatRef`, `Macrophyte`, `BedsBivalve`, `BedsRock`, `SeaGrassBeds`, `BedsOthers`, `CoralReefs`, `ReefExclusive`, `DropOffs`, `ReefFlats`, `Lagoons`, `Burrows`, `Tunnels`, `Crevices`, `Vents`, `Seamounts`, `DeepWaterCorals`, `Vegetation`, `Leaves`, `Stems`, `Roots`, `Driftwood`, `OInverterbrates`, `OIRemarks`, `Verterbrates`, `VRemarks`, `Pilings`, `BoatHulls`, `Corals`, `SoftCorals`, `OnPolyp`, `BetweenPolyps`, `HardCorals`, `OnExoskeleton`, `InterstitialSpaces`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `TS` FROM `ecology` WHERE `StockCode` = :p0';
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
            $obj = new Ecology();
            $obj->hydrate($row);
            EcologyPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ecology|Ecology[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ecology[]|mixed the list of results, formatted by the current formatter
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EcologyPeer::STOCKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EcologyPeer::STOCKCODE, $keys, Criteria::IN);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(EcologyPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(EcologyPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EcologyPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EcologyPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SPECCODE, $speccode, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(EcologyPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(EcologyPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the EcologyRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByEcologyrefno(1234); // WHERE EcologyRefNo = 1234
     * $query->filterByEcologyrefno(array(12, 34)); // WHERE EcologyRefNo IN (12, 34)
     * $query->filterByEcologyrefno(array('min' => 12)); // WHERE EcologyRefNo >= 12
     * $query->filterByEcologyrefno(array('max' => 12)); // WHERE EcologyRefNo <= 12
     * </code>
     *
     * @param     mixed $ecologyrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByEcologyrefno($ecologyrefno = null, $comparison = null)
    {
        if (is_array($ecologyrefno)) {
            $useMinMax = false;
            if (isset($ecologyrefno['min'])) {
                $this->addUsingAlias(EcologyPeer::ECOLOGYREFNO, $ecologyrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecologyrefno['max'])) {
                $this->addUsingAlias(EcologyPeer::ECOLOGYREFNO, $ecologyrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ECOLOGYREFNO, $ecologyrefno, $comparison);
    }

    /**
     * Filter the query on the HabitatsRef column
     *
     * Example usage:
     * <code>
     * $query->filterByHabitatsref(1234); // WHERE HabitatsRef = 1234
     * $query->filterByHabitatsref(array(12, 34)); // WHERE HabitatsRef IN (12, 34)
     * $query->filterByHabitatsref(array('min' => 12)); // WHERE HabitatsRef >= 12
     * $query->filterByHabitatsref(array('max' => 12)); // WHERE HabitatsRef <= 12
     * </code>
     *
     * @param     mixed $habitatsref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByHabitatsref($habitatsref = null, $comparison = null)
    {
        if (is_array($habitatsref)) {
            $useMinMax = false;
            if (isset($habitatsref['min'])) {
                $this->addUsingAlias(EcologyPeer::HABITATSREF, $habitatsref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($habitatsref['max'])) {
                $this->addUsingAlias(EcologyPeer::HABITATSREF, $habitatsref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::HABITATSREF, $habitatsref, $comparison);
    }

    /**
     * Filter the query on the Neritic column
     *
     * Example usage:
     * <code>
     * $query->filterByNeritic(1234); // WHERE Neritic = 1234
     * $query->filterByNeritic(array(12, 34)); // WHERE Neritic IN (12, 34)
     * $query->filterByNeritic(array('min' => 12)); // WHERE Neritic >= 12
     * $query->filterByNeritic(array('max' => 12)); // WHERE Neritic <= 12
     * </code>
     *
     * @param     mixed $neritic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByNeritic($neritic = null, $comparison = null)
    {
        if (is_array($neritic)) {
            $useMinMax = false;
            if (isset($neritic['min'])) {
                $this->addUsingAlias(EcologyPeer::NERITIC, $neritic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($neritic['max'])) {
                $this->addUsingAlias(EcologyPeer::NERITIC, $neritic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::NERITIC, $neritic, $comparison);
    }

    /**
     * Filter the query on the SupraLittoralZone column
     *
     * Example usage:
     * <code>
     * $query->filterBySupralittoralzone(1234); // WHERE SupraLittoralZone = 1234
     * $query->filterBySupralittoralzone(array(12, 34)); // WHERE SupraLittoralZone IN (12, 34)
     * $query->filterBySupralittoralzone(array('min' => 12)); // WHERE SupraLittoralZone >= 12
     * $query->filterBySupralittoralzone(array('max' => 12)); // WHERE SupraLittoralZone <= 12
     * </code>
     *
     * @param     mixed $supralittoralzone The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySupralittoralzone($supralittoralzone = null, $comparison = null)
    {
        if (is_array($supralittoralzone)) {
            $useMinMax = false;
            if (isset($supralittoralzone['min'])) {
                $this->addUsingAlias(EcologyPeer::SUPRALITTORALZONE, $supralittoralzone['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($supralittoralzone['max'])) {
                $this->addUsingAlias(EcologyPeer::SUPRALITTORALZONE, $supralittoralzone['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SUPRALITTORALZONE, $supralittoralzone, $comparison);
    }

    /**
     * Filter the query on the Saltmarshes column
     *
     * Example usage:
     * <code>
     * $query->filterBySaltmarshes(1234); // WHERE Saltmarshes = 1234
     * $query->filterBySaltmarshes(array(12, 34)); // WHERE Saltmarshes IN (12, 34)
     * $query->filterBySaltmarshes(array('min' => 12)); // WHERE Saltmarshes >= 12
     * $query->filterBySaltmarshes(array('max' => 12)); // WHERE Saltmarshes <= 12
     * </code>
     *
     * @param     mixed $saltmarshes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySaltmarshes($saltmarshes = null, $comparison = null)
    {
        if (is_array($saltmarshes)) {
            $useMinMax = false;
            if (isset($saltmarshes['min'])) {
                $this->addUsingAlias(EcologyPeer::SALTMARSHES, $saltmarshes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saltmarshes['max'])) {
                $this->addUsingAlias(EcologyPeer::SALTMARSHES, $saltmarshes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SALTMARSHES, $saltmarshes, $comparison);
    }

    /**
     * Filter the query on the LittoralZone column
     *
     * Example usage:
     * <code>
     * $query->filterByLittoralzone(1234); // WHERE LittoralZone = 1234
     * $query->filterByLittoralzone(array(12, 34)); // WHERE LittoralZone IN (12, 34)
     * $query->filterByLittoralzone(array('min' => 12)); // WHERE LittoralZone >= 12
     * $query->filterByLittoralzone(array('max' => 12)); // WHERE LittoralZone <= 12
     * </code>
     *
     * @param     mixed $littoralzone The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByLittoralzone($littoralzone = null, $comparison = null)
    {
        if (is_array($littoralzone)) {
            $useMinMax = false;
            if (isset($littoralzone['min'])) {
                $this->addUsingAlias(EcologyPeer::LITTORALZONE, $littoralzone['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($littoralzone['max'])) {
                $this->addUsingAlias(EcologyPeer::LITTORALZONE, $littoralzone['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::LITTORALZONE, $littoralzone, $comparison);
    }

    /**
     * Filter the query on the TidePools column
     *
     * Example usage:
     * <code>
     * $query->filterByTidepools(1234); // WHERE TidePools = 1234
     * $query->filterByTidepools(array(12, 34)); // WHERE TidePools IN (12, 34)
     * $query->filterByTidepools(array('min' => 12)); // WHERE TidePools >= 12
     * $query->filterByTidepools(array('max' => 12)); // WHERE TidePools <= 12
     * </code>
     *
     * @param     mixed $tidepools The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByTidepools($tidepools = null, $comparison = null)
    {
        if (is_array($tidepools)) {
            $useMinMax = false;
            if (isset($tidepools['min'])) {
                $this->addUsingAlias(EcologyPeer::TIDEPOOLS, $tidepools['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tidepools['max'])) {
                $this->addUsingAlias(EcologyPeer::TIDEPOOLS, $tidepools['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::TIDEPOOLS, $tidepools, $comparison);
    }

    /**
     * Filter the query on the Intertidal column
     *
     * Example usage:
     * <code>
     * $query->filterByIntertidal(1234); // WHERE Intertidal = 1234
     * $query->filterByIntertidal(array(12, 34)); // WHERE Intertidal IN (12, 34)
     * $query->filterByIntertidal(array('min' => 12)); // WHERE Intertidal >= 12
     * $query->filterByIntertidal(array('max' => 12)); // WHERE Intertidal <= 12
     * </code>
     *
     * @param     mixed $intertidal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByIntertidal($intertidal = null, $comparison = null)
    {
        if (is_array($intertidal)) {
            $useMinMax = false;
            if (isset($intertidal['min'])) {
                $this->addUsingAlias(EcologyPeer::INTERTIDAL, $intertidal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intertidal['max'])) {
                $this->addUsingAlias(EcologyPeer::INTERTIDAL, $intertidal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::INTERTIDAL, $intertidal, $comparison);
    }

    /**
     * Filter the query on the SubLittoral column
     *
     * Example usage:
     * <code>
     * $query->filterBySublittoral(1234); // WHERE SubLittoral = 1234
     * $query->filterBySublittoral(array(12, 34)); // WHERE SubLittoral IN (12, 34)
     * $query->filterBySublittoral(array('min' => 12)); // WHERE SubLittoral >= 12
     * $query->filterBySublittoral(array('max' => 12)); // WHERE SubLittoral <= 12
     * </code>
     *
     * @param     mixed $sublittoral The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySublittoral($sublittoral = null, $comparison = null)
    {
        if (is_array($sublittoral)) {
            $useMinMax = false;
            if (isset($sublittoral['min'])) {
                $this->addUsingAlias(EcologyPeer::SUBLITTORAL, $sublittoral['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sublittoral['max'])) {
                $this->addUsingAlias(EcologyPeer::SUBLITTORAL, $sublittoral['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SUBLITTORAL, $sublittoral, $comparison);
    }

    /**
     * Filter the query on the Caves column
     *
     * Example usage:
     * <code>
     * $query->filterByCaves(1234); // WHERE Caves = 1234
     * $query->filterByCaves(array(12, 34)); // WHERE Caves IN (12, 34)
     * $query->filterByCaves(array('min' => 12)); // WHERE Caves >= 12
     * $query->filterByCaves(array('max' => 12)); // WHERE Caves <= 12
     * </code>
     *
     * @param     mixed $caves The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCaves($caves = null, $comparison = null)
    {
        if (is_array($caves)) {
            $useMinMax = false;
            if (isset($caves['min'])) {
                $this->addUsingAlias(EcologyPeer::CAVES, $caves['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caves['max'])) {
                $this->addUsingAlias(EcologyPeer::CAVES, $caves['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CAVES, $caves, $comparison);
    }

    /**
     * Filter the query on the Oceanic column
     *
     * Example usage:
     * <code>
     * $query->filterByOceanic(1234); // WHERE Oceanic = 1234
     * $query->filterByOceanic(array(12, 34)); // WHERE Oceanic IN (12, 34)
     * $query->filterByOceanic(array('min' => 12)); // WHERE Oceanic >= 12
     * $query->filterByOceanic(array('max' => 12)); // WHERE Oceanic <= 12
     * </code>
     *
     * @param     mixed $oceanic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOceanic($oceanic = null, $comparison = null)
    {
        if (is_array($oceanic)) {
            $useMinMax = false;
            if (isset($oceanic['min'])) {
                $this->addUsingAlias(EcologyPeer::OCEANIC, $oceanic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oceanic['max'])) {
                $this->addUsingAlias(EcologyPeer::OCEANIC, $oceanic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::OCEANIC, $oceanic, $comparison);
    }

    /**
     * Filter the query on the Epipelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByEpipelagic(1234); // WHERE Epipelagic = 1234
     * $query->filterByEpipelagic(array(12, 34)); // WHERE Epipelagic IN (12, 34)
     * $query->filterByEpipelagic(array('min' => 12)); // WHERE Epipelagic >= 12
     * $query->filterByEpipelagic(array('max' => 12)); // WHERE Epipelagic <= 12
     * </code>
     *
     * @param     mixed $epipelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByEpipelagic($epipelagic = null, $comparison = null)
    {
        if (is_array($epipelagic)) {
            $useMinMax = false;
            if (isset($epipelagic['min'])) {
                $this->addUsingAlias(EcologyPeer::EPIPELAGIC, $epipelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($epipelagic['max'])) {
                $this->addUsingAlias(EcologyPeer::EPIPELAGIC, $epipelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::EPIPELAGIC, $epipelagic, $comparison);
    }

    /**
     * Filter the query on the Mesopelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByMesopelagic(1234); // WHERE Mesopelagic = 1234
     * $query->filterByMesopelagic(array(12, 34)); // WHERE Mesopelagic IN (12, 34)
     * $query->filterByMesopelagic(array('min' => 12)); // WHERE Mesopelagic >= 12
     * $query->filterByMesopelagic(array('max' => 12)); // WHERE Mesopelagic <= 12
     * </code>
     *
     * @param     mixed $mesopelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMesopelagic($mesopelagic = null, $comparison = null)
    {
        if (is_array($mesopelagic)) {
            $useMinMax = false;
            if (isset($mesopelagic['min'])) {
                $this->addUsingAlias(EcologyPeer::MESOPELAGIC, $mesopelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mesopelagic['max'])) {
                $this->addUsingAlias(EcologyPeer::MESOPELAGIC, $mesopelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MESOPELAGIC, $mesopelagic, $comparison);
    }

    /**
     * Filter the query on the Bathypelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByBathypelagic(1234); // WHERE Bathypelagic = 1234
     * $query->filterByBathypelagic(array(12, 34)); // WHERE Bathypelagic IN (12, 34)
     * $query->filterByBathypelagic(array('min' => 12)); // WHERE Bathypelagic >= 12
     * $query->filterByBathypelagic(array('max' => 12)); // WHERE Bathypelagic <= 12
     * </code>
     *
     * @param     mixed $bathypelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBathypelagic($bathypelagic = null, $comparison = null)
    {
        if (is_array($bathypelagic)) {
            $useMinMax = false;
            if (isset($bathypelagic['min'])) {
                $this->addUsingAlias(EcologyPeer::BATHYPELAGIC, $bathypelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bathypelagic['max'])) {
                $this->addUsingAlias(EcologyPeer::BATHYPELAGIC, $bathypelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BATHYPELAGIC, $bathypelagic, $comparison);
    }

    /**
     * Filter the query on the Abyssopelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByAbyssopelagic(1234); // WHERE Abyssopelagic = 1234
     * $query->filterByAbyssopelagic(array(12, 34)); // WHERE Abyssopelagic IN (12, 34)
     * $query->filterByAbyssopelagic(array('min' => 12)); // WHERE Abyssopelagic >= 12
     * $query->filterByAbyssopelagic(array('max' => 12)); // WHERE Abyssopelagic <= 12
     * </code>
     *
     * @param     mixed $abyssopelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByAbyssopelagic($abyssopelagic = null, $comparison = null)
    {
        if (is_array($abyssopelagic)) {
            $useMinMax = false;
            if (isset($abyssopelagic['min'])) {
                $this->addUsingAlias(EcologyPeer::ABYSSOPELAGIC, $abyssopelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abyssopelagic['max'])) {
                $this->addUsingAlias(EcologyPeer::ABYSSOPELAGIC, $abyssopelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ABYSSOPELAGIC, $abyssopelagic, $comparison);
    }

    /**
     * Filter the query on the Hadopelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByHadopelagic(1234); // WHERE Hadopelagic = 1234
     * $query->filterByHadopelagic(array(12, 34)); // WHERE Hadopelagic IN (12, 34)
     * $query->filterByHadopelagic(array('min' => 12)); // WHERE Hadopelagic >= 12
     * $query->filterByHadopelagic(array('max' => 12)); // WHERE Hadopelagic <= 12
     * </code>
     *
     * @param     mixed $hadopelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByHadopelagic($hadopelagic = null, $comparison = null)
    {
        if (is_array($hadopelagic)) {
            $useMinMax = false;
            if (isset($hadopelagic['min'])) {
                $this->addUsingAlias(EcologyPeer::HADOPELAGIC, $hadopelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hadopelagic['max'])) {
                $this->addUsingAlias(EcologyPeer::HADOPELAGIC, $hadopelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::HADOPELAGIC, $hadopelagic, $comparison);
    }

    /**
     * Filter the query on the Estuaries column
     *
     * Example usage:
     * <code>
     * $query->filterByEstuaries(1234); // WHERE Estuaries = 1234
     * $query->filterByEstuaries(array(12, 34)); // WHERE Estuaries IN (12, 34)
     * $query->filterByEstuaries(array('min' => 12)); // WHERE Estuaries >= 12
     * $query->filterByEstuaries(array('max' => 12)); // WHERE Estuaries <= 12
     * </code>
     *
     * @param     mixed $estuaries The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByEstuaries($estuaries = null, $comparison = null)
    {
        if (is_array($estuaries)) {
            $useMinMax = false;
            if (isset($estuaries['min'])) {
                $this->addUsingAlias(EcologyPeer::ESTUARIES, $estuaries['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estuaries['max'])) {
                $this->addUsingAlias(EcologyPeer::ESTUARIES, $estuaries['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ESTUARIES, $estuaries, $comparison);
    }

    /**
     * Filter the query on the Mangroves column
     *
     * Example usage:
     * <code>
     * $query->filterByMangroves(1234); // WHERE Mangroves = 1234
     * $query->filterByMangroves(array(12, 34)); // WHERE Mangroves IN (12, 34)
     * $query->filterByMangroves(array('min' => 12)); // WHERE Mangroves >= 12
     * $query->filterByMangroves(array('max' => 12)); // WHERE Mangroves <= 12
     * </code>
     *
     * @param     mixed $mangroves The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMangroves($mangroves = null, $comparison = null)
    {
        if (is_array($mangroves)) {
            $useMinMax = false;
            if (isset($mangroves['min'])) {
                $this->addUsingAlias(EcologyPeer::MANGROVES, $mangroves['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mangroves['max'])) {
                $this->addUsingAlias(EcologyPeer::MANGROVES, $mangroves['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MANGROVES, $mangroves, $comparison);
    }

    /**
     * Filter the query on the MarshesSwamps column
     *
     * Example usage:
     * <code>
     * $query->filterByMarshesswamps('2011-03-14'); // WHERE MarshesSwamps = '2011-03-14'
     * $query->filterByMarshesswamps('now'); // WHERE MarshesSwamps = '2011-03-14'
     * $query->filterByMarshesswamps(array('max' => 'yesterday')); // WHERE MarshesSwamps < '2011-03-13'
     * </code>
     *
     * @param     mixed $marshesswamps The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMarshesswamps($marshesswamps = null, $comparison = null)
    {
        if (is_array($marshesswamps)) {
            $useMinMax = false;
            if (isset($marshesswamps['min'])) {
                $this->addUsingAlias(EcologyPeer::MARSHESSWAMPS, $marshesswamps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marshesswamps['max'])) {
                $this->addUsingAlias(EcologyPeer::MARSHESSWAMPS, $marshesswamps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MARSHESSWAMPS, $marshesswamps, $comparison);
    }

    /**
     * Filter the query on the CaveAnchialine column
     *
     * Example usage:
     * <code>
     * $query->filterByCaveanchialine(1234); // WHERE CaveAnchialine = 1234
     * $query->filterByCaveanchialine(array(12, 34)); // WHERE CaveAnchialine IN (12, 34)
     * $query->filterByCaveanchialine(array('min' => 12)); // WHERE CaveAnchialine >= 12
     * $query->filterByCaveanchialine(array('max' => 12)); // WHERE CaveAnchialine <= 12
     * </code>
     *
     * @param     mixed $caveanchialine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCaveanchialine($caveanchialine = null, $comparison = null)
    {
        if (is_array($caveanchialine)) {
            $useMinMax = false;
            if (isset($caveanchialine['min'])) {
                $this->addUsingAlias(EcologyPeer::CAVEANCHIALINE, $caveanchialine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caveanchialine['max'])) {
                $this->addUsingAlias(EcologyPeer::CAVEANCHIALINE, $caveanchialine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CAVEANCHIALINE, $caveanchialine, $comparison);
    }

    /**
     * Filter the query on the Stream column
     *
     * Example usage:
     * <code>
     * $query->filterByStream(1234); // WHERE Stream = 1234
     * $query->filterByStream(array(12, 34)); // WHERE Stream IN (12, 34)
     * $query->filterByStream(array('min' => 12)); // WHERE Stream >= 12
     * $query->filterByStream(array('max' => 12)); // WHERE Stream <= 12
     * </code>
     *
     * @param     mixed $stream The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByStream($stream = null, $comparison = null)
    {
        if (is_array($stream)) {
            $useMinMax = false;
            if (isset($stream['min'])) {
                $this->addUsingAlias(EcologyPeer::STREAM, $stream['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stream['max'])) {
                $this->addUsingAlias(EcologyPeer::STREAM, $stream['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::STREAM, $stream, $comparison);
    }

    /**
     * Filter the query on the Lakes column
     *
     * Example usage:
     * <code>
     * $query->filterByLakes(1234); // WHERE Lakes = 1234
     * $query->filterByLakes(array(12, 34)); // WHERE Lakes IN (12, 34)
     * $query->filterByLakes(array('min' => 12)); // WHERE Lakes >= 12
     * $query->filterByLakes(array('max' => 12)); // WHERE Lakes <= 12
     * </code>
     *
     * @param     mixed $lakes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByLakes($lakes = null, $comparison = null)
    {
        if (is_array($lakes)) {
            $useMinMax = false;
            if (isset($lakes['min'])) {
                $this->addUsingAlias(EcologyPeer::LAKES, $lakes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lakes['max'])) {
                $this->addUsingAlias(EcologyPeer::LAKES, $lakes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::LAKES, $lakes, $comparison);
    }

    /**
     * Filter the query on the Cave column
     *
     * Example usage:
     * <code>
     * $query->filterByCave(1234); // WHERE Cave = 1234
     * $query->filterByCave(array(12, 34)); // WHERE Cave IN (12, 34)
     * $query->filterByCave(array('min' => 12)); // WHERE Cave >= 12
     * $query->filterByCave(array('max' => 12)); // WHERE Cave <= 12
     * </code>
     *
     * @param     mixed $cave The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCave($cave = null, $comparison = null)
    {
        if (is_array($cave)) {
            $useMinMax = false;
            if (isset($cave['min'])) {
                $this->addUsingAlias(EcologyPeer::CAVE, $cave['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cave['max'])) {
                $this->addUsingAlias(EcologyPeer::CAVE, $cave['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CAVE, $cave, $comparison);
    }

    /**
     * Filter the query on the Cave2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCave2(1234); // WHERE Cave2 = 1234
     * $query->filterByCave2(array(12, 34)); // WHERE Cave2 IN (12, 34)
     * $query->filterByCave2(array('min' => 12)); // WHERE Cave2 >= 12
     * $query->filterByCave2(array('max' => 12)); // WHERE Cave2 <= 12
     * </code>
     *
     * @param     mixed $cave2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCave2($cave2 = null, $comparison = null)
    {
        if (is_array($cave2)) {
            $useMinMax = false;
            if (isset($cave2['min'])) {
                $this->addUsingAlias(EcologyPeer::CAVE2, $cave2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cave2['max'])) {
                $this->addUsingAlias(EcologyPeer::CAVE2, $cave2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CAVE2, $cave2, $comparison);
    }

    /**
     * Filter the query on the Herbivory2 column
     *
     * Example usage:
     * <code>
     * $query->filterByHerbivory2('fooValue');   // WHERE Herbivory2 = 'fooValue'
     * $query->filterByHerbivory2('%fooValue%'); // WHERE Herbivory2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $herbivory2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByHerbivory2($herbivory2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($herbivory2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $herbivory2)) {
                $herbivory2 = str_replace('*', '%', $herbivory2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::HERBIVORY2, $herbivory2, $comparison);
    }

    /**
     * Filter the query on the HerbivoryRef column
     *
     * Example usage:
     * <code>
     * $query->filterByHerbivoryref(1234); // WHERE HerbivoryRef = 1234
     * $query->filterByHerbivoryref(array(12, 34)); // WHERE HerbivoryRef IN (12, 34)
     * $query->filterByHerbivoryref(array('min' => 12)); // WHERE HerbivoryRef >= 12
     * $query->filterByHerbivoryref(array('max' => 12)); // WHERE HerbivoryRef <= 12
     * </code>
     *
     * @param     mixed $herbivoryref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByHerbivoryref($herbivoryref = null, $comparison = null)
    {
        if (is_array($herbivoryref)) {
            $useMinMax = false;
            if (isset($herbivoryref['min'])) {
                $this->addUsingAlias(EcologyPeer::HERBIVORYREF, $herbivoryref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($herbivoryref['max'])) {
                $this->addUsingAlias(EcologyPeer::HERBIVORYREF, $herbivoryref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::HERBIVORYREF, $herbivoryref, $comparison);
    }

    /**
     * Filter the query on the FeedingType column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedingtype('fooValue');   // WHERE FeedingType = 'fooValue'
     * $query->filterByFeedingtype('%fooValue%'); // WHERE FeedingType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $feedingtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFeedingtype($feedingtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($feedingtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $feedingtype)) {
                $feedingtype = str_replace('*', '%', $feedingtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FEEDINGTYPE, $feedingtype, $comparison);
    }

    /**
     * Filter the query on the FeedingTypeRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedingtyperef(1234); // WHERE FeedingTypeRef = 1234
     * $query->filterByFeedingtyperef(array(12, 34)); // WHERE FeedingTypeRef IN (12, 34)
     * $query->filterByFeedingtyperef(array('min' => 12)); // WHERE FeedingTypeRef >= 12
     * $query->filterByFeedingtyperef(array('max' => 12)); // WHERE FeedingTypeRef <= 12
     * </code>
     *
     * @param     mixed $feedingtyperef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFeedingtyperef($feedingtyperef = null, $comparison = null)
    {
        if (is_array($feedingtyperef)) {
            $useMinMax = false;
            if (isset($feedingtyperef['min'])) {
                $this->addUsingAlias(EcologyPeer::FEEDINGTYPEREF, $feedingtyperef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedingtyperef['max'])) {
                $this->addUsingAlias(EcologyPeer::FEEDINGTYPEREF, $feedingtyperef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FEEDINGTYPEREF, $feedingtyperef, $comparison);
    }

    /**
     * Filter the query on the DietTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByDiettroph(1234); // WHERE DietTroph = 1234
     * $query->filterByDiettroph(array(12, 34)); // WHERE DietTroph IN (12, 34)
     * $query->filterByDiettroph(array('min' => 12)); // WHERE DietTroph >= 12
     * $query->filterByDiettroph(array('max' => 12)); // WHERE DietTroph <= 12
     * </code>
     *
     * @param     mixed $diettroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDiettroph($diettroph = null, $comparison = null)
    {
        if (is_array($diettroph)) {
            $useMinMax = false;
            if (isset($diettroph['min'])) {
                $this->addUsingAlias(EcologyPeer::DIETTROPH, $diettroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diettroph['max'])) {
                $this->addUsingAlias(EcologyPeer::DIETTROPH, $diettroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DIETTROPH, $diettroph, $comparison);
    }

    /**
     * Filter the query on the DietSeTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByDietsetroph(1234); // WHERE DietSeTroph = 1234
     * $query->filterByDietsetroph(array(12, 34)); // WHERE DietSeTroph IN (12, 34)
     * $query->filterByDietsetroph(array('min' => 12)); // WHERE DietSeTroph >= 12
     * $query->filterByDietsetroph(array('max' => 12)); // WHERE DietSeTroph <= 12
     * </code>
     *
     * @param     mixed $dietsetroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDietsetroph($dietsetroph = null, $comparison = null)
    {
        if (is_array($dietsetroph)) {
            $useMinMax = false;
            if (isset($dietsetroph['min'])) {
                $this->addUsingAlias(EcologyPeer::DIETSETROPH, $dietsetroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietsetroph['max'])) {
                $this->addUsingAlias(EcologyPeer::DIETSETROPH, $dietsetroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DIETSETROPH, $dietsetroph, $comparison);
    }

    /**
     * Filter the query on the DietTLu column
     *
     * Example usage:
     * <code>
     * $query->filterByDiettlu(1234); // WHERE DietTLu = 1234
     * $query->filterByDiettlu(array(12, 34)); // WHERE DietTLu IN (12, 34)
     * $query->filterByDiettlu(array('min' => 12)); // WHERE DietTLu >= 12
     * $query->filterByDiettlu(array('max' => 12)); // WHERE DietTLu <= 12
     * </code>
     *
     * @param     mixed $diettlu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDiettlu($diettlu = null, $comparison = null)
    {
        if (is_array($diettlu)) {
            $useMinMax = false;
            if (isset($diettlu['min'])) {
                $this->addUsingAlias(EcologyPeer::DIETTLU, $diettlu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diettlu['max'])) {
                $this->addUsingAlias(EcologyPeer::DIETTLU, $diettlu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DIETTLU, $diettlu, $comparison);
    }

    /**
     * Filter the query on the DietseTLu column
     *
     * Example usage:
     * <code>
     * $query->filterByDietsetlu(1234); // WHERE DietseTLu = 1234
     * $query->filterByDietsetlu(array(12, 34)); // WHERE DietseTLu IN (12, 34)
     * $query->filterByDietsetlu(array('min' => 12)); // WHERE DietseTLu >= 12
     * $query->filterByDietsetlu(array('max' => 12)); // WHERE DietseTLu <= 12
     * </code>
     *
     * @param     mixed $dietsetlu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDietsetlu($dietsetlu = null, $comparison = null)
    {
        if (is_array($dietsetlu)) {
            $useMinMax = false;
            if (isset($dietsetlu['min'])) {
                $this->addUsingAlias(EcologyPeer::DIETSETLU, $dietsetlu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietsetlu['max'])) {
                $this->addUsingAlias(EcologyPeer::DIETSETLU, $dietsetlu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DIETSETLU, $dietsetlu, $comparison);
    }

    /**
     * Filter the query on the DietRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByDietremark('fooValue');   // WHERE DietRemark = 'fooValue'
     * $query->filterByDietremark('%fooValue%'); // WHERE DietRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dietremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDietremark($dietremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dietremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dietremark)) {
                $dietremark = str_replace('*', '%', $dietremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DIETREMARK, $dietremark, $comparison);
    }

    /**
     * Filter the query on the DietRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDietref(1234); // WHERE DietRef = 1234
     * $query->filterByDietref(array(12, 34)); // WHERE DietRef IN (12, 34)
     * $query->filterByDietref(array('min' => 12)); // WHERE DietRef >= 12
     * $query->filterByDietref(array('max' => 12)); // WHERE DietRef <= 12
     * </code>
     *
     * @param     mixed $dietref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDietref($dietref = null, $comparison = null)
    {
        if (is_array($dietref)) {
            $useMinMax = false;
            if (isset($dietref['min'])) {
                $this->addUsingAlias(EcologyPeer::DIETREF, $dietref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietref['max'])) {
                $this->addUsingAlias(EcologyPeer::DIETREF, $dietref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DIETREF, $dietref, $comparison);
    }

    /**
     * Filter the query on the FoodTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodtroph(1234); // WHERE FoodTroph = 1234
     * $query->filterByFoodtroph(array(12, 34)); // WHERE FoodTroph IN (12, 34)
     * $query->filterByFoodtroph(array('min' => 12)); // WHERE FoodTroph >= 12
     * $query->filterByFoodtroph(array('max' => 12)); // WHERE FoodTroph <= 12
     * </code>
     *
     * @param     mixed $foodtroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFoodtroph($foodtroph = null, $comparison = null)
    {
        if (is_array($foodtroph)) {
            $useMinMax = false;
            if (isset($foodtroph['min'])) {
                $this->addUsingAlias(EcologyPeer::FOODTROPH, $foodtroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodtroph['max'])) {
                $this->addUsingAlias(EcologyPeer::FOODTROPH, $foodtroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FOODTROPH, $foodtroph, $comparison);
    }

    /**
     * Filter the query on the FoodSeTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodsetroph(1234); // WHERE FoodSeTroph = 1234
     * $query->filterByFoodsetroph(array(12, 34)); // WHERE FoodSeTroph IN (12, 34)
     * $query->filterByFoodsetroph(array('min' => 12)); // WHERE FoodSeTroph >= 12
     * $query->filterByFoodsetroph(array('max' => 12)); // WHERE FoodSeTroph <= 12
     * </code>
     *
     * @param     mixed $foodsetroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFoodsetroph($foodsetroph = null, $comparison = null)
    {
        if (is_array($foodsetroph)) {
            $useMinMax = false;
            if (isset($foodsetroph['min'])) {
                $this->addUsingAlias(EcologyPeer::FOODSETROPH, $foodsetroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodsetroph['max'])) {
                $this->addUsingAlias(EcologyPeer::FOODSETROPH, $foodsetroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FOODSETROPH, $foodsetroph, $comparison);
    }

    /**
     * Filter the query on the FoodRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodremark('fooValue');   // WHERE FoodRemark = 'fooValue'
     * $query->filterByFoodremark('%fooValue%'); // WHERE FoodRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFoodremark($foodremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodremark)) {
                $foodremark = str_replace('*', '%', $foodremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FOODREMARK, $foodremark, $comparison);
    }

    /**
     * Filter the query on the FoodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodref(1234); // WHERE FoodRef = 1234
     * $query->filterByFoodref(array(12, 34)); // WHERE FoodRef IN (12, 34)
     * $query->filterByFoodref(array('min' => 12)); // WHERE FoodRef >= 12
     * $query->filterByFoodref(array('max' => 12)); // WHERE FoodRef <= 12
     * </code>
     *
     * @param     mixed $foodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFoodref($foodref = null, $comparison = null)
    {
        if (is_array($foodref)) {
            $useMinMax = false;
            if (isset($foodref['min'])) {
                $this->addUsingAlias(EcologyPeer::FOODREF, $foodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodref['max'])) {
                $this->addUsingAlias(EcologyPeer::FOODREF, $foodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FOODREF, $foodref, $comparison);
    }

    /**
     * Filter the query on the AddRems column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrems('fooValue');   // WHERE AddRems = 'fooValue'
     * $query->filterByAddrems('%fooValue%'); // WHERE AddRems LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByAddrems($addrems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addrems)) {
                $addrems = str_replace('*', '%', $addrems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ADDREMS, $addrems, $comparison);
    }

    /**
     * Filter the query on the AssociationRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAssociationref(1234); // WHERE AssociationRef = 1234
     * $query->filterByAssociationref(array(12, 34)); // WHERE AssociationRef IN (12, 34)
     * $query->filterByAssociationref(array('min' => 12)); // WHERE AssociationRef >= 12
     * $query->filterByAssociationref(array('max' => 12)); // WHERE AssociationRef <= 12
     * </code>
     *
     * @param     mixed $associationref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByAssociationref($associationref = null, $comparison = null)
    {
        if (is_array($associationref)) {
            $useMinMax = false;
            if (isset($associationref['min'])) {
                $this->addUsingAlias(EcologyPeer::ASSOCIATIONREF, $associationref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($associationref['max'])) {
                $this->addUsingAlias(EcologyPeer::ASSOCIATIONREF, $associationref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ASSOCIATIONREF, $associationref, $comparison);
    }

    /**
     * Filter the query on the Parasitism column
     *
     * Example usage:
     * <code>
     * $query->filterByParasitism(1234); // WHERE Parasitism = 1234
     * $query->filterByParasitism(array(12, 34)); // WHERE Parasitism IN (12, 34)
     * $query->filterByParasitism(array('min' => 12)); // WHERE Parasitism >= 12
     * $query->filterByParasitism(array('max' => 12)); // WHERE Parasitism <= 12
     * </code>
     *
     * @param     mixed $parasitism The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByParasitism($parasitism = null, $comparison = null)
    {
        if (is_array($parasitism)) {
            $useMinMax = false;
            if (isset($parasitism['min'])) {
                $this->addUsingAlias(EcologyPeer::PARASITISM, $parasitism['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parasitism['max'])) {
                $this->addUsingAlias(EcologyPeer::PARASITISM, $parasitism['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::PARASITISM, $parasitism, $comparison);
    }

    /**
     * Filter the query on the Solitary column
     *
     * Example usage:
     * <code>
     * $query->filterBySolitary(1234); // WHERE Solitary = 1234
     * $query->filterBySolitary(array(12, 34)); // WHERE Solitary IN (12, 34)
     * $query->filterBySolitary(array('min' => 12)); // WHERE Solitary >= 12
     * $query->filterBySolitary(array('max' => 12)); // WHERE Solitary <= 12
     * </code>
     *
     * @param     mixed $solitary The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySolitary($solitary = null, $comparison = null)
    {
        if (is_array($solitary)) {
            $useMinMax = false;
            if (isset($solitary['min'])) {
                $this->addUsingAlias(EcologyPeer::SOLITARY, $solitary['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($solitary['max'])) {
                $this->addUsingAlias(EcologyPeer::SOLITARY, $solitary['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SOLITARY, $solitary, $comparison);
    }

    /**
     * Filter the query on the Symbiosis column
     *
     * Example usage:
     * <code>
     * $query->filterBySymbiosis(1234); // WHERE Symbiosis = 1234
     * $query->filterBySymbiosis(array(12, 34)); // WHERE Symbiosis IN (12, 34)
     * $query->filterBySymbiosis(array('min' => 12)); // WHERE Symbiosis >= 12
     * $query->filterBySymbiosis(array('max' => 12)); // WHERE Symbiosis <= 12
     * </code>
     *
     * @param     mixed $symbiosis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySymbiosis($symbiosis = null, $comparison = null)
    {
        if (is_array($symbiosis)) {
            $useMinMax = false;
            if (isset($symbiosis['min'])) {
                $this->addUsingAlias(EcologyPeer::SYMBIOSIS, $symbiosis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($symbiosis['max'])) {
                $this->addUsingAlias(EcologyPeer::SYMBIOSIS, $symbiosis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SYMBIOSIS, $symbiosis, $comparison);
    }

    /**
     * Filter the query on the Symphorism column
     *
     * Example usage:
     * <code>
     * $query->filterBySymphorism(1234); // WHERE Symphorism = 1234
     * $query->filterBySymphorism(array(12, 34)); // WHERE Symphorism IN (12, 34)
     * $query->filterBySymphorism(array('min' => 12)); // WHERE Symphorism >= 12
     * $query->filterBySymphorism(array('max' => 12)); // WHERE Symphorism <= 12
     * </code>
     *
     * @param     mixed $symphorism The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySymphorism($symphorism = null, $comparison = null)
    {
        if (is_array($symphorism)) {
            $useMinMax = false;
            if (isset($symphorism['min'])) {
                $this->addUsingAlias(EcologyPeer::SYMPHORISM, $symphorism['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($symphorism['max'])) {
                $this->addUsingAlias(EcologyPeer::SYMPHORISM, $symphorism['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SYMPHORISM, $symphorism, $comparison);
    }

    /**
     * Filter the query on the Commensalism column
     *
     * Example usage:
     * <code>
     * $query->filterByCommensalism(1234); // WHERE Commensalism = 1234
     * $query->filterByCommensalism(array(12, 34)); // WHERE Commensalism IN (12, 34)
     * $query->filterByCommensalism(array('min' => 12)); // WHERE Commensalism >= 12
     * $query->filterByCommensalism(array('max' => 12)); // WHERE Commensalism <= 12
     * </code>
     *
     * @param     mixed $commensalism The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCommensalism($commensalism = null, $comparison = null)
    {
        if (is_array($commensalism)) {
            $useMinMax = false;
            if (isset($commensalism['min'])) {
                $this->addUsingAlias(EcologyPeer::COMMENSALISM, $commensalism['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commensalism['max'])) {
                $this->addUsingAlias(EcologyPeer::COMMENSALISM, $commensalism['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::COMMENSALISM, $commensalism, $comparison);
    }

    /**
     * Filter the query on the Mutualism column
     *
     * Example usage:
     * <code>
     * $query->filterByMutualism(1234); // WHERE Mutualism = 1234
     * $query->filterByMutualism(array(12, 34)); // WHERE Mutualism IN (12, 34)
     * $query->filterByMutualism(array('min' => 12)); // WHERE Mutualism >= 12
     * $query->filterByMutualism(array('max' => 12)); // WHERE Mutualism <= 12
     * </code>
     *
     * @param     mixed $mutualism The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMutualism($mutualism = null, $comparison = null)
    {
        if (is_array($mutualism)) {
            $useMinMax = false;
            if (isset($mutualism['min'])) {
                $this->addUsingAlias(EcologyPeer::MUTUALISM, $mutualism['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutualism['max'])) {
                $this->addUsingAlias(EcologyPeer::MUTUALISM, $mutualism['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MUTUALISM, $mutualism, $comparison);
    }

    /**
     * Filter the query on the Epiphytic column
     *
     * Example usage:
     * <code>
     * $query->filterByEpiphytic(1234); // WHERE Epiphytic = 1234
     * $query->filterByEpiphytic(array(12, 34)); // WHERE Epiphytic IN (12, 34)
     * $query->filterByEpiphytic(array('min' => 12)); // WHERE Epiphytic >= 12
     * $query->filterByEpiphytic(array('max' => 12)); // WHERE Epiphytic <= 12
     * </code>
     *
     * @param     mixed $epiphytic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByEpiphytic($epiphytic = null, $comparison = null)
    {
        if (is_array($epiphytic)) {
            $useMinMax = false;
            if (isset($epiphytic['min'])) {
                $this->addUsingAlias(EcologyPeer::EPIPHYTIC, $epiphytic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($epiphytic['max'])) {
                $this->addUsingAlias(EcologyPeer::EPIPHYTIC, $epiphytic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::EPIPHYTIC, $epiphytic, $comparison);
    }

    /**
     * Filter the query on the Schooling column
     *
     * Example usage:
     * <code>
     * $query->filterBySchooling(1234); // WHERE Schooling = 1234
     * $query->filterBySchooling(array(12, 34)); // WHERE Schooling IN (12, 34)
     * $query->filterBySchooling(array('min' => 12)); // WHERE Schooling >= 12
     * $query->filterBySchooling(array('max' => 12)); // WHERE Schooling <= 12
     * </code>
     *
     * @param     mixed $schooling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySchooling($schooling = null, $comparison = null)
    {
        if (is_array($schooling)) {
            $useMinMax = false;
            if (isset($schooling['min'])) {
                $this->addUsingAlias(EcologyPeer::SCHOOLING, $schooling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schooling['max'])) {
                $this->addUsingAlias(EcologyPeer::SCHOOLING, $schooling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SCHOOLING, $schooling, $comparison);
    }

    /**
     * Filter the query on the SchoolingFrequency column
     *
     * Example usage:
     * <code>
     * $query->filterBySchoolingfrequency('fooValue');   // WHERE SchoolingFrequency = 'fooValue'
     * $query->filterBySchoolingfrequency('%fooValue%'); // WHERE SchoolingFrequency LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schoolingfrequency The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySchoolingfrequency($schoolingfrequency = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schoolingfrequency)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schoolingfrequency)) {
                $schoolingfrequency = str_replace('*', '%', $schoolingfrequency);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SCHOOLINGFREQUENCY, $schoolingfrequency, $comparison);
    }

    /**
     * Filter the query on the SchoolingLifestage column
     *
     * Example usage:
     * <code>
     * $query->filterBySchoolinglifestage('fooValue');   // WHERE SchoolingLifestage = 'fooValue'
     * $query->filterBySchoolinglifestage('%fooValue%'); // WHERE SchoolingLifestage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schoolinglifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySchoolinglifestage($schoolinglifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schoolinglifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schoolinglifestage)) {
                $schoolinglifestage = str_replace('*', '%', $schoolinglifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SCHOOLINGLIFESTAGE, $schoolinglifestage, $comparison);
    }

    /**
     * Filter the query on the Shoaling column
     *
     * Example usage:
     * <code>
     * $query->filterByShoaling(1234); // WHERE Shoaling = 1234
     * $query->filterByShoaling(array(12, 34)); // WHERE Shoaling IN (12, 34)
     * $query->filterByShoaling(array('min' => 12)); // WHERE Shoaling >= 12
     * $query->filterByShoaling(array('max' => 12)); // WHERE Shoaling <= 12
     * </code>
     *
     * @param     mixed $shoaling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByShoaling($shoaling = null, $comparison = null)
    {
        if (is_array($shoaling)) {
            $useMinMax = false;
            if (isset($shoaling['min'])) {
                $this->addUsingAlias(EcologyPeer::SHOALING, $shoaling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shoaling['max'])) {
                $this->addUsingAlias(EcologyPeer::SHOALING, $shoaling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SHOALING, $shoaling, $comparison);
    }

    /**
     * Filter the query on the ShoalingFrequency column
     *
     * Example usage:
     * <code>
     * $query->filterByShoalingfrequency('fooValue');   // WHERE ShoalingFrequency = 'fooValue'
     * $query->filterByShoalingfrequency('%fooValue%'); // WHERE ShoalingFrequency LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shoalingfrequency The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByShoalingfrequency($shoalingfrequency = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shoalingfrequency)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shoalingfrequency)) {
                $shoalingfrequency = str_replace('*', '%', $shoalingfrequency);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SHOALINGFREQUENCY, $shoalingfrequency, $comparison);
    }

    /**
     * Filter the query on the ShoalingLifestage column
     *
     * Example usage:
     * <code>
     * $query->filterByShoalinglifestage('fooValue');   // WHERE ShoalingLifestage = 'fooValue'
     * $query->filterByShoalinglifestage('%fooValue%'); // WHERE ShoalingLifestage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shoalinglifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByShoalinglifestage($shoalinglifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shoalinglifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shoalinglifestage)) {
                $shoalinglifestage = str_replace('*', '%', $shoalinglifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SHOALINGLIFESTAGE, $shoalinglifestage, $comparison);
    }

    /**
     * Filter the query on the SchoolShoalRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySchoolshoalref(1234); // WHERE SchoolShoalRef = 1234
     * $query->filterBySchoolshoalref(array(12, 34)); // WHERE SchoolShoalRef IN (12, 34)
     * $query->filterBySchoolshoalref(array('min' => 12)); // WHERE SchoolShoalRef >= 12
     * $query->filterBySchoolshoalref(array('max' => 12)); // WHERE SchoolShoalRef <= 12
     * </code>
     *
     * @param     mixed $schoolshoalref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySchoolshoalref($schoolshoalref = null, $comparison = null)
    {
        if (is_array($schoolshoalref)) {
            $useMinMax = false;
            if (isset($schoolshoalref['min'])) {
                $this->addUsingAlias(EcologyPeer::SCHOOLSHOALREF, $schoolshoalref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schoolshoalref['max'])) {
                $this->addUsingAlias(EcologyPeer::SCHOOLSHOALREF, $schoolshoalref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SCHOOLSHOALREF, $schoolshoalref, $comparison);
    }

    /**
     * Filter the query on the AssociationsWith column
     *
     * Example usage:
     * <code>
     * $query->filterByAssociationswith('fooValue');   // WHERE AssociationsWith = 'fooValue'
     * $query->filterByAssociationswith('%fooValue%'); // WHERE AssociationsWith LIKE '%fooValue%'
     * </code>
     *
     * @param     string $associationswith The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByAssociationswith($associationswith = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($associationswith)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $associationswith)) {
                $associationswith = str_replace('*', '%', $associationswith);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ASSOCIATIONSWITH, $associationswith, $comparison);
    }

    /**
     * Filter the query on the AssociationsRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByAssociationsremarks('fooValue');   // WHERE AssociationsRemarks = 'fooValue'
     * $query->filterByAssociationsremarks('%fooValue%'); // WHERE AssociationsRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $associationsremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByAssociationsremarks($associationsremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($associationsremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $associationsremarks)) {
                $associationsremarks = str_replace('*', '%', $associationsremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ASSOCIATIONSREMARKS, $associationsremarks, $comparison);
    }

    /**
     * Filter the query on the OutsideHost column
     *
     * Example usage:
     * <code>
     * $query->filterByOutsidehost(1234); // WHERE OutsideHost = 1234
     * $query->filterByOutsidehost(array(12, 34)); // WHERE OutsideHost IN (12, 34)
     * $query->filterByOutsidehost(array('min' => 12)); // WHERE OutsideHost >= 12
     * $query->filterByOutsidehost(array('max' => 12)); // WHERE OutsideHost <= 12
     * </code>
     *
     * @param     mixed $outsidehost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOutsidehost($outsidehost = null, $comparison = null)
    {
        if (is_array($outsidehost)) {
            $useMinMax = false;
            if (isset($outsidehost['min'])) {
                $this->addUsingAlias(EcologyPeer::OUTSIDEHOST, $outsidehost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($outsidehost['max'])) {
                $this->addUsingAlias(EcologyPeer::OUTSIDEHOST, $outsidehost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::OUTSIDEHOST, $outsidehost, $comparison);
    }

    /**
     * Filter the query on the OHRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByOhremarks('fooValue');   // WHERE OHRemarks = 'fooValue'
     * $query->filterByOhremarks('%fooValue%'); // WHERE OHRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ohremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOhremarks($ohremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ohremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ohremarks)) {
                $ohremarks = str_replace('*', '%', $ohremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::OHREMARKS, $ohremarks, $comparison);
    }

    /**
     * Filter the query on the InsideHost column
     *
     * Example usage:
     * <code>
     * $query->filterByInsidehost(1234); // WHERE InsideHost = 1234
     * $query->filterByInsidehost(array(12, 34)); // WHERE InsideHost IN (12, 34)
     * $query->filterByInsidehost(array('min' => 12)); // WHERE InsideHost >= 12
     * $query->filterByInsidehost(array('max' => 12)); // WHERE InsideHost <= 12
     * </code>
     *
     * @param     mixed $insidehost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByInsidehost($insidehost = null, $comparison = null)
    {
        if (is_array($insidehost)) {
            $useMinMax = false;
            if (isset($insidehost['min'])) {
                $this->addUsingAlias(EcologyPeer::INSIDEHOST, $insidehost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($insidehost['max'])) {
                $this->addUsingAlias(EcologyPeer::INSIDEHOST, $insidehost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::INSIDEHOST, $insidehost, $comparison);
    }

    /**
     * Filter the query on the IHRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByIhremarks('fooValue');   // WHERE IHRemarks = 'fooValue'
     * $query->filterByIhremarks('%fooValue%'); // WHERE IHRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ihremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByIhremarks($ihremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ihremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ihremarks)) {
                $ihremarks = str_replace('*', '%', $ihremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::IHREMARKS, $ihremarks, $comparison);
    }

    /**
     * Filter the query on the SubstrateRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySubstrateref(1234); // WHERE SubstrateRef = 1234
     * $query->filterBySubstrateref(array(12, 34)); // WHERE SubstrateRef IN (12, 34)
     * $query->filterBySubstrateref(array('min' => 12)); // WHERE SubstrateRef >= 12
     * $query->filterBySubstrateref(array('max' => 12)); // WHERE SubstrateRef <= 12
     * </code>
     *
     * @param     mixed $substrateref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySubstrateref($substrateref = null, $comparison = null)
    {
        if (is_array($substrateref)) {
            $useMinMax = false;
            if (isset($substrateref['min'])) {
                $this->addUsingAlias(EcologyPeer::SUBSTRATEREF, $substrateref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($substrateref['max'])) {
                $this->addUsingAlias(EcologyPeer::SUBSTRATEREF, $substrateref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SUBSTRATEREF, $substrateref, $comparison);
    }

    /**
     * Filter the query on the Benthic column
     *
     * Example usage:
     * <code>
     * $query->filterByBenthic(1234); // WHERE Benthic = 1234
     * $query->filterByBenthic(array(12, 34)); // WHERE Benthic IN (12, 34)
     * $query->filterByBenthic(array('min' => 12)); // WHERE Benthic >= 12
     * $query->filterByBenthic(array('max' => 12)); // WHERE Benthic <= 12
     * </code>
     *
     * @param     mixed $benthic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBenthic($benthic = null, $comparison = null)
    {
        if (is_array($benthic)) {
            $useMinMax = false;
            if (isset($benthic['min'])) {
                $this->addUsingAlias(EcologyPeer::BENTHIC, $benthic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($benthic['max'])) {
                $this->addUsingAlias(EcologyPeer::BENTHIC, $benthic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BENTHIC, $benthic, $comparison);
    }

    /**
     * Filter the query on the Sessile column
     *
     * Example usage:
     * <code>
     * $query->filterBySessile(1234); // WHERE Sessile = 1234
     * $query->filterBySessile(array(12, 34)); // WHERE Sessile IN (12, 34)
     * $query->filterBySessile(array('min' => 12)); // WHERE Sessile >= 12
     * $query->filterBySessile(array('max' => 12)); // WHERE Sessile <= 12
     * </code>
     *
     * @param     mixed $sessile The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySessile($sessile = null, $comparison = null)
    {
        if (is_array($sessile)) {
            $useMinMax = false;
            if (isset($sessile['min'])) {
                $this->addUsingAlias(EcologyPeer::SESSILE, $sessile['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sessile['max'])) {
                $this->addUsingAlias(EcologyPeer::SESSILE, $sessile['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SESSILE, $sessile, $comparison);
    }

    /**
     * Filter the query on the Mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByMobile(1234); // WHERE Mobile = 1234
     * $query->filterByMobile(array(12, 34)); // WHERE Mobile IN (12, 34)
     * $query->filterByMobile(array('min' => 12)); // WHERE Mobile >= 12
     * $query->filterByMobile(array('max' => 12)); // WHERE Mobile <= 12
     * </code>
     *
     * @param     mixed $mobile The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMobile($mobile = null, $comparison = null)
    {
        if (is_array($mobile)) {
            $useMinMax = false;
            if (isset($mobile['min'])) {
                $this->addUsingAlias(EcologyPeer::MOBILE, $mobile['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mobile['max'])) {
                $this->addUsingAlias(EcologyPeer::MOBILE, $mobile['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MOBILE, $mobile, $comparison);
    }

    /**
     * Filter the query on the Demersal column
     *
     * Example usage:
     * <code>
     * $query->filterByDemersal(1234); // WHERE Demersal = 1234
     * $query->filterByDemersal(array(12, 34)); // WHERE Demersal IN (12, 34)
     * $query->filterByDemersal(array('min' => 12)); // WHERE Demersal >= 12
     * $query->filterByDemersal(array('max' => 12)); // WHERE Demersal <= 12
     * </code>
     *
     * @param     mixed $demersal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDemersal($demersal = null, $comparison = null)
    {
        if (is_array($demersal)) {
            $useMinMax = false;
            if (isset($demersal['min'])) {
                $this->addUsingAlias(EcologyPeer::DEMERSAL, $demersal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($demersal['max'])) {
                $this->addUsingAlias(EcologyPeer::DEMERSAL, $demersal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DEMERSAL, $demersal, $comparison);
    }

    /**
     * Filter the query on the Endofauna column
     *
     * Example usage:
     * <code>
     * $query->filterByEndofauna(1234); // WHERE Endofauna = 1234
     * $query->filterByEndofauna(array(12, 34)); // WHERE Endofauna IN (12, 34)
     * $query->filterByEndofauna(array('min' => 12)); // WHERE Endofauna >= 12
     * $query->filterByEndofauna(array('max' => 12)); // WHERE Endofauna <= 12
     * </code>
     *
     * @param     mixed $endofauna The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByEndofauna($endofauna = null, $comparison = null)
    {
        if (is_array($endofauna)) {
            $useMinMax = false;
            if (isset($endofauna['min'])) {
                $this->addUsingAlias(EcologyPeer::ENDOFAUNA, $endofauna['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($endofauna['max'])) {
                $this->addUsingAlias(EcologyPeer::ENDOFAUNA, $endofauna['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ENDOFAUNA, $endofauna, $comparison);
    }

    /**
     * Filter the query on the Pelagic column
     *
     * Example usage:
     * <code>
     * $query->filterByPelagic(1234); // WHERE Pelagic = 1234
     * $query->filterByPelagic(array(12, 34)); // WHERE Pelagic IN (12, 34)
     * $query->filterByPelagic(array('min' => 12)); // WHERE Pelagic >= 12
     * $query->filterByPelagic(array('max' => 12)); // WHERE Pelagic <= 12
     * </code>
     *
     * @param     mixed $pelagic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByPelagic($pelagic = null, $comparison = null)
    {
        if (is_array($pelagic)) {
            $useMinMax = false;
            if (isset($pelagic['min'])) {
                $this->addUsingAlias(EcologyPeer::PELAGIC, $pelagic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pelagic['max'])) {
                $this->addUsingAlias(EcologyPeer::PELAGIC, $pelagic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::PELAGIC, $pelagic, $comparison);
    }

    /**
     * Filter the query on the Megabenthos column
     *
     * Example usage:
     * <code>
     * $query->filterByMegabenthos(1234); // WHERE Megabenthos = 1234
     * $query->filterByMegabenthos(array(12, 34)); // WHERE Megabenthos IN (12, 34)
     * $query->filterByMegabenthos(array('min' => 12)); // WHERE Megabenthos >= 12
     * $query->filterByMegabenthos(array('max' => 12)); // WHERE Megabenthos <= 12
     * </code>
     *
     * @param     mixed $megabenthos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMegabenthos($megabenthos = null, $comparison = null)
    {
        if (is_array($megabenthos)) {
            $useMinMax = false;
            if (isset($megabenthos['min'])) {
                $this->addUsingAlias(EcologyPeer::MEGABENTHOS, $megabenthos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($megabenthos['max'])) {
                $this->addUsingAlias(EcologyPeer::MEGABENTHOS, $megabenthos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MEGABENTHOS, $megabenthos, $comparison);
    }

    /**
     * Filter the query on the Macrobenthos column
     *
     * Example usage:
     * <code>
     * $query->filterByMacrobenthos(1234); // WHERE Macrobenthos = 1234
     * $query->filterByMacrobenthos(array(12, 34)); // WHERE Macrobenthos IN (12, 34)
     * $query->filterByMacrobenthos(array('min' => 12)); // WHERE Macrobenthos >= 12
     * $query->filterByMacrobenthos(array('max' => 12)); // WHERE Macrobenthos <= 12
     * </code>
     *
     * @param     mixed $macrobenthos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMacrobenthos($macrobenthos = null, $comparison = null)
    {
        if (is_array($macrobenthos)) {
            $useMinMax = false;
            if (isset($macrobenthos['min'])) {
                $this->addUsingAlias(EcologyPeer::MACROBENTHOS, $macrobenthos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($macrobenthos['max'])) {
                $this->addUsingAlias(EcologyPeer::MACROBENTHOS, $macrobenthos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MACROBENTHOS, $macrobenthos, $comparison);
    }

    /**
     * Filter the query on the Meiobenthos column
     *
     * Example usage:
     * <code>
     * $query->filterByMeiobenthos(1234); // WHERE Meiobenthos = 1234
     * $query->filterByMeiobenthos(array(12, 34)); // WHERE Meiobenthos IN (12, 34)
     * $query->filterByMeiobenthos(array('min' => 12)); // WHERE Meiobenthos >= 12
     * $query->filterByMeiobenthos(array('max' => 12)); // WHERE Meiobenthos <= 12
     * </code>
     *
     * @param     mixed $meiobenthos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMeiobenthos($meiobenthos = null, $comparison = null)
    {
        if (is_array($meiobenthos)) {
            $useMinMax = false;
            if (isset($meiobenthos['min'])) {
                $this->addUsingAlias(EcologyPeer::MEIOBENTHOS, $meiobenthos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meiobenthos['max'])) {
                $this->addUsingAlias(EcologyPeer::MEIOBENTHOS, $meiobenthos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MEIOBENTHOS, $meiobenthos, $comparison);
    }

    /**
     * Filter the query on the SoftBottom column
     *
     * Example usage:
     * <code>
     * $query->filterBySoftbottom(1234); // WHERE SoftBottom = 1234
     * $query->filterBySoftbottom(array(12, 34)); // WHERE SoftBottom IN (12, 34)
     * $query->filterBySoftbottom(array('min' => 12)); // WHERE SoftBottom >= 12
     * $query->filterBySoftbottom(array('max' => 12)); // WHERE SoftBottom <= 12
     * </code>
     *
     * @param     mixed $softbottom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySoftbottom($softbottom = null, $comparison = null)
    {
        if (is_array($softbottom)) {
            $useMinMax = false;
            if (isset($softbottom['min'])) {
                $this->addUsingAlias(EcologyPeer::SOFTBOTTOM, $softbottom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($softbottom['max'])) {
                $this->addUsingAlias(EcologyPeer::SOFTBOTTOM, $softbottom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SOFTBOTTOM, $softbottom, $comparison);
    }

    /**
     * Filter the query on the Sand column
     *
     * Example usage:
     * <code>
     * $query->filterBySand(1234); // WHERE Sand = 1234
     * $query->filterBySand(array(12, 34)); // WHERE Sand IN (12, 34)
     * $query->filterBySand(array('min' => 12)); // WHERE Sand >= 12
     * $query->filterBySand(array('max' => 12)); // WHERE Sand <= 12
     * </code>
     *
     * @param     mixed $sand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySand($sand = null, $comparison = null)
    {
        if (is_array($sand)) {
            $useMinMax = false;
            if (isset($sand['min'])) {
                $this->addUsingAlias(EcologyPeer::SAND, $sand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sand['max'])) {
                $this->addUsingAlias(EcologyPeer::SAND, $sand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SAND, $sand, $comparison);
    }

    /**
     * Filter the query on the Coarse column
     *
     * Example usage:
     * <code>
     * $query->filterByCoarse(1234); // WHERE Coarse = 1234
     * $query->filterByCoarse(array(12, 34)); // WHERE Coarse IN (12, 34)
     * $query->filterByCoarse(array('min' => 12)); // WHERE Coarse >= 12
     * $query->filterByCoarse(array('max' => 12)); // WHERE Coarse <= 12
     * </code>
     *
     * @param     mixed $coarse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCoarse($coarse = null, $comparison = null)
    {
        if (is_array($coarse)) {
            $useMinMax = false;
            if (isset($coarse['min'])) {
                $this->addUsingAlias(EcologyPeer::COARSE, $coarse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coarse['max'])) {
                $this->addUsingAlias(EcologyPeer::COARSE, $coarse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::COARSE, $coarse, $comparison);
    }

    /**
     * Filter the query on the Fine column
     *
     * Example usage:
     * <code>
     * $query->filterByFine(1234); // WHERE Fine = 1234
     * $query->filterByFine(array(12, 34)); // WHERE Fine IN (12, 34)
     * $query->filterByFine(array('min' => 12)); // WHERE Fine >= 12
     * $query->filterByFine(array('max' => 12)); // WHERE Fine <= 12
     * </code>
     *
     * @param     mixed $fine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByFine($fine = null, $comparison = null)
    {
        if (is_array($fine)) {
            $useMinMax = false;
            if (isset($fine['min'])) {
                $this->addUsingAlias(EcologyPeer::FINE, $fine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fine['max'])) {
                $this->addUsingAlias(EcologyPeer::FINE, $fine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::FINE, $fine, $comparison);
    }

    /**
     * Filter the query on the Level column
     *
     * Example usage:
     * <code>
     * $query->filterByLevel(1234); // WHERE Level = 1234
     * $query->filterByLevel(array(12, 34)); // WHERE Level IN (12, 34)
     * $query->filterByLevel(array('min' => 12)); // WHERE Level >= 12
     * $query->filterByLevel(array('max' => 12)); // WHERE Level <= 12
     * </code>
     *
     * @param     mixed $level The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByLevel($level = null, $comparison = null)
    {
        if (is_array($level)) {
            $useMinMax = false;
            if (isset($level['min'])) {
                $this->addUsingAlias(EcologyPeer::LEVEL, $level['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($level['max'])) {
                $this->addUsingAlias(EcologyPeer::LEVEL, $level['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::LEVEL, $level, $comparison);
    }

    /**
     * Filter the query on the Sloping column
     *
     * Example usage:
     * <code>
     * $query->filterBySloping(1234); // WHERE Sloping = 1234
     * $query->filterBySloping(array(12, 34)); // WHERE Sloping IN (12, 34)
     * $query->filterBySloping(array('min' => 12)); // WHERE Sloping >= 12
     * $query->filterBySloping(array('max' => 12)); // WHERE Sloping <= 12
     * </code>
     *
     * @param     mixed $sloping The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySloping($sloping = null, $comparison = null)
    {
        if (is_array($sloping)) {
            $useMinMax = false;
            if (isset($sloping['min'])) {
                $this->addUsingAlias(EcologyPeer::SLOPING, $sloping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sloping['max'])) {
                $this->addUsingAlias(EcologyPeer::SLOPING, $sloping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SLOPING, $sloping, $comparison);
    }

    /**
     * Filter the query on the Silt column
     *
     * Example usage:
     * <code>
     * $query->filterBySilt(1234); // WHERE Silt = 1234
     * $query->filterBySilt(array(12, 34)); // WHERE Silt IN (12, 34)
     * $query->filterBySilt(array('min' => 12)); // WHERE Silt >= 12
     * $query->filterBySilt(array('max' => 12)); // WHERE Silt <= 12
     * </code>
     *
     * @param     mixed $silt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySilt($silt = null, $comparison = null)
    {
        if (is_array($silt)) {
            $useMinMax = false;
            if (isset($silt['min'])) {
                $this->addUsingAlias(EcologyPeer::SILT, $silt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($silt['max'])) {
                $this->addUsingAlias(EcologyPeer::SILT, $silt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SILT, $silt, $comparison);
    }

    /**
     * Filter the query on the Mud column
     *
     * Example usage:
     * <code>
     * $query->filterByMud(1234); // WHERE Mud = 1234
     * $query->filterByMud(array(12, 34)); // WHERE Mud IN (12, 34)
     * $query->filterByMud(array('min' => 12)); // WHERE Mud >= 12
     * $query->filterByMud(array('max' => 12)); // WHERE Mud <= 12
     * </code>
     *
     * @param     mixed $mud The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMud($mud = null, $comparison = null)
    {
        if (is_array($mud)) {
            $useMinMax = false;
            if (isset($mud['min'])) {
                $this->addUsingAlias(EcologyPeer::MUD, $mud['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mud['max'])) {
                $this->addUsingAlias(EcologyPeer::MUD, $mud['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MUD, $mud, $comparison);
    }

    /**
     * Filter the query on the Ooze column
     *
     * Example usage:
     * <code>
     * $query->filterByOoze(1234); // WHERE Ooze = 1234
     * $query->filterByOoze(array(12, 34)); // WHERE Ooze IN (12, 34)
     * $query->filterByOoze(array('min' => 12)); // WHERE Ooze >= 12
     * $query->filterByOoze(array('max' => 12)); // WHERE Ooze <= 12
     * </code>
     *
     * @param     mixed $ooze The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOoze($ooze = null, $comparison = null)
    {
        if (is_array($ooze)) {
            $useMinMax = false;
            if (isset($ooze['min'])) {
                $this->addUsingAlias(EcologyPeer::OOZE, $ooze['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ooze['max'])) {
                $this->addUsingAlias(EcologyPeer::OOZE, $ooze['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::OOZE, $ooze, $comparison);
    }

    /**
     * Filter the query on the Detritus column
     *
     * Example usage:
     * <code>
     * $query->filterByDetritus(1234); // WHERE Detritus = 1234
     * $query->filterByDetritus(array(12, 34)); // WHERE Detritus IN (12, 34)
     * $query->filterByDetritus(array('min' => 12)); // WHERE Detritus >= 12
     * $query->filterByDetritus(array('max' => 12)); // WHERE Detritus <= 12
     * </code>
     *
     * @param     mixed $detritus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDetritus($detritus = null, $comparison = null)
    {
        if (is_array($detritus)) {
            $useMinMax = false;
            if (isset($detritus['min'])) {
                $this->addUsingAlias(EcologyPeer::DETRITUS, $detritus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($detritus['max'])) {
                $this->addUsingAlias(EcologyPeer::DETRITUS, $detritus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DETRITUS, $detritus, $comparison);
    }

    /**
     * Filter the query on the Organic column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganic(1234); // WHERE Organic = 1234
     * $query->filterByOrganic(array(12, 34)); // WHERE Organic IN (12, 34)
     * $query->filterByOrganic(array('min' => 12)); // WHERE Organic >= 12
     * $query->filterByOrganic(array('max' => 12)); // WHERE Organic <= 12
     * </code>
     *
     * @param     mixed $organic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOrganic($organic = null, $comparison = null)
    {
        if (is_array($organic)) {
            $useMinMax = false;
            if (isset($organic['min'])) {
                $this->addUsingAlias(EcologyPeer::ORGANIC, $organic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($organic['max'])) {
                $this->addUsingAlias(EcologyPeer::ORGANIC, $organic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ORGANIC, $organic, $comparison);
    }

    /**
     * Filter the query on the HardBottom column
     *
     * Example usage:
     * <code>
     * $query->filterByHardbottom(1234); // WHERE HardBottom = 1234
     * $query->filterByHardbottom(array(12, 34)); // WHERE HardBottom IN (12, 34)
     * $query->filterByHardbottom(array('min' => 12)); // WHERE HardBottom >= 12
     * $query->filterByHardbottom(array('max' => 12)); // WHERE HardBottom <= 12
     * </code>
     *
     * @param     mixed $hardbottom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByHardbottom($hardbottom = null, $comparison = null)
    {
        if (is_array($hardbottom)) {
            $useMinMax = false;
            if (isset($hardbottom['min'])) {
                $this->addUsingAlias(EcologyPeer::HARDBOTTOM, $hardbottom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardbottom['max'])) {
                $this->addUsingAlias(EcologyPeer::HARDBOTTOM, $hardbottom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::HARDBOTTOM, $hardbottom, $comparison);
    }

    /**
     * Filter the query on the Rocky column
     *
     * Example usage:
     * <code>
     * $query->filterByRocky(1234); // WHERE Rocky = 1234
     * $query->filterByRocky(array(12, 34)); // WHERE Rocky IN (12, 34)
     * $query->filterByRocky(array('min' => 12)); // WHERE Rocky >= 12
     * $query->filterByRocky(array('max' => 12)); // WHERE Rocky <= 12
     * </code>
     *
     * @param     mixed $rocky The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByRocky($rocky = null, $comparison = null)
    {
        if (is_array($rocky)) {
            $useMinMax = false;
            if (isset($rocky['min'])) {
                $this->addUsingAlias(EcologyPeer::ROCKY, $rocky['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rocky['max'])) {
                $this->addUsingAlias(EcologyPeer::ROCKY, $rocky['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ROCKY, $rocky, $comparison);
    }

    /**
     * Filter the query on the Rubble column
     *
     * Example usage:
     * <code>
     * $query->filterByRubble(1234); // WHERE Rubble = 1234
     * $query->filterByRubble(array(12, 34)); // WHERE Rubble IN (12, 34)
     * $query->filterByRubble(array('min' => 12)); // WHERE Rubble >= 12
     * $query->filterByRubble(array('max' => 12)); // WHERE Rubble <= 12
     * </code>
     *
     * @param     mixed $rubble The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByRubble($rubble = null, $comparison = null)
    {
        if (is_array($rubble)) {
            $useMinMax = false;
            if (isset($rubble['min'])) {
                $this->addUsingAlias(EcologyPeer::RUBBLE, $rubble['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rubble['max'])) {
                $this->addUsingAlias(EcologyPeer::RUBBLE, $rubble['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::RUBBLE, $rubble, $comparison);
    }

    /**
     * Filter the query on the SpecialHabitatRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecialhabitatref(1234); // WHERE SpecialHabitatRef = 1234
     * $query->filterBySpecialhabitatref(array(12, 34)); // WHERE SpecialHabitatRef IN (12, 34)
     * $query->filterBySpecialhabitatref(array('min' => 12)); // WHERE SpecialHabitatRef >= 12
     * $query->filterBySpecialhabitatref(array('max' => 12)); // WHERE SpecialHabitatRef <= 12
     * </code>
     *
     * @param     mixed $specialhabitatref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySpecialhabitatref($specialhabitatref = null, $comparison = null)
    {
        if (is_array($specialhabitatref)) {
            $useMinMax = false;
            if (isset($specialhabitatref['min'])) {
                $this->addUsingAlias(EcologyPeer::SPECIALHABITATREF, $specialhabitatref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($specialhabitatref['max'])) {
                $this->addUsingAlias(EcologyPeer::SPECIALHABITATREF, $specialhabitatref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SPECIALHABITATREF, $specialhabitatref, $comparison);
    }

    /**
     * Filter the query on the Macrophyte column
     *
     * Example usage:
     * <code>
     * $query->filterByMacrophyte(1234); // WHERE Macrophyte = 1234
     * $query->filterByMacrophyte(array(12, 34)); // WHERE Macrophyte IN (12, 34)
     * $query->filterByMacrophyte(array('min' => 12)); // WHERE Macrophyte >= 12
     * $query->filterByMacrophyte(array('max' => 12)); // WHERE Macrophyte <= 12
     * </code>
     *
     * @param     mixed $macrophyte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByMacrophyte($macrophyte = null, $comparison = null)
    {
        if (is_array($macrophyte)) {
            $useMinMax = false;
            if (isset($macrophyte['min'])) {
                $this->addUsingAlias(EcologyPeer::MACROPHYTE, $macrophyte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($macrophyte['max'])) {
                $this->addUsingAlias(EcologyPeer::MACROPHYTE, $macrophyte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MACROPHYTE, $macrophyte, $comparison);
    }

    /**
     * Filter the query on the BedsBivalve column
     *
     * Example usage:
     * <code>
     * $query->filterByBedsbivalve(1234); // WHERE BedsBivalve = 1234
     * $query->filterByBedsbivalve(array(12, 34)); // WHERE BedsBivalve IN (12, 34)
     * $query->filterByBedsbivalve(array('min' => 12)); // WHERE BedsBivalve >= 12
     * $query->filterByBedsbivalve(array('max' => 12)); // WHERE BedsBivalve <= 12
     * </code>
     *
     * @param     mixed $bedsbivalve The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBedsbivalve($bedsbivalve = null, $comparison = null)
    {
        if (is_array($bedsbivalve)) {
            $useMinMax = false;
            if (isset($bedsbivalve['min'])) {
                $this->addUsingAlias(EcologyPeer::BEDSBIVALVE, $bedsbivalve['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bedsbivalve['max'])) {
                $this->addUsingAlias(EcologyPeer::BEDSBIVALVE, $bedsbivalve['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BEDSBIVALVE, $bedsbivalve, $comparison);
    }

    /**
     * Filter the query on the BedsRock column
     *
     * Example usage:
     * <code>
     * $query->filterByBedsrock(1234); // WHERE BedsRock = 1234
     * $query->filterByBedsrock(array(12, 34)); // WHERE BedsRock IN (12, 34)
     * $query->filterByBedsrock(array('min' => 12)); // WHERE BedsRock >= 12
     * $query->filterByBedsrock(array('max' => 12)); // WHERE BedsRock <= 12
     * </code>
     *
     * @param     mixed $bedsrock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBedsrock($bedsrock = null, $comparison = null)
    {
        if (is_array($bedsrock)) {
            $useMinMax = false;
            if (isset($bedsrock['min'])) {
                $this->addUsingAlias(EcologyPeer::BEDSROCK, $bedsrock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bedsrock['max'])) {
                $this->addUsingAlias(EcologyPeer::BEDSROCK, $bedsrock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BEDSROCK, $bedsrock, $comparison);
    }

    /**
     * Filter the query on the SeaGrassBeds column
     *
     * Example usage:
     * <code>
     * $query->filterBySeagrassbeds(1234); // WHERE SeaGrassBeds = 1234
     * $query->filterBySeagrassbeds(array(12, 34)); // WHERE SeaGrassBeds IN (12, 34)
     * $query->filterBySeagrassbeds(array('min' => 12)); // WHERE SeaGrassBeds >= 12
     * $query->filterBySeagrassbeds(array('max' => 12)); // WHERE SeaGrassBeds <= 12
     * </code>
     *
     * @param     mixed $seagrassbeds The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySeagrassbeds($seagrassbeds = null, $comparison = null)
    {
        if (is_array($seagrassbeds)) {
            $useMinMax = false;
            if (isset($seagrassbeds['min'])) {
                $this->addUsingAlias(EcologyPeer::SEAGRASSBEDS, $seagrassbeds['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seagrassbeds['max'])) {
                $this->addUsingAlias(EcologyPeer::SEAGRASSBEDS, $seagrassbeds['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SEAGRASSBEDS, $seagrassbeds, $comparison);
    }

    /**
     * Filter the query on the BedsOthers column
     *
     * Example usage:
     * <code>
     * $query->filterByBedsothers(1234); // WHERE BedsOthers = 1234
     * $query->filterByBedsothers(array(12, 34)); // WHERE BedsOthers IN (12, 34)
     * $query->filterByBedsothers(array('min' => 12)); // WHERE BedsOthers >= 12
     * $query->filterByBedsothers(array('max' => 12)); // WHERE BedsOthers <= 12
     * </code>
     *
     * @param     mixed $bedsothers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBedsothers($bedsothers = null, $comparison = null)
    {
        if (is_array($bedsothers)) {
            $useMinMax = false;
            if (isset($bedsothers['min'])) {
                $this->addUsingAlias(EcologyPeer::BEDSOTHERS, $bedsothers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bedsothers['max'])) {
                $this->addUsingAlias(EcologyPeer::BEDSOTHERS, $bedsothers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BEDSOTHERS, $bedsothers, $comparison);
    }

    /**
     * Filter the query on the CoralReefs column
     *
     * Example usage:
     * <code>
     * $query->filterByCoralreefs(1234); // WHERE CoralReefs = 1234
     * $query->filterByCoralreefs(array(12, 34)); // WHERE CoralReefs IN (12, 34)
     * $query->filterByCoralreefs(array('min' => 12)); // WHERE CoralReefs >= 12
     * $query->filterByCoralreefs(array('max' => 12)); // WHERE CoralReefs <= 12
     * </code>
     *
     * @param     mixed $coralreefs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCoralreefs($coralreefs = null, $comparison = null)
    {
        if (is_array($coralreefs)) {
            $useMinMax = false;
            if (isset($coralreefs['min'])) {
                $this->addUsingAlias(EcologyPeer::CORALREEFS, $coralreefs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coralreefs['max'])) {
                $this->addUsingAlias(EcologyPeer::CORALREEFS, $coralreefs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CORALREEFS, $coralreefs, $comparison);
    }

    /**
     * Filter the query on the ReefExclusive column
     *
     * Example usage:
     * <code>
     * $query->filterByReefexclusive(1234); // WHERE ReefExclusive = 1234
     * $query->filterByReefexclusive(array(12, 34)); // WHERE ReefExclusive IN (12, 34)
     * $query->filterByReefexclusive(array('min' => 12)); // WHERE ReefExclusive >= 12
     * $query->filterByReefexclusive(array('max' => 12)); // WHERE ReefExclusive <= 12
     * </code>
     *
     * @param     mixed $reefexclusive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByReefexclusive($reefexclusive = null, $comparison = null)
    {
        if (is_array($reefexclusive)) {
            $useMinMax = false;
            if (isset($reefexclusive['min'])) {
                $this->addUsingAlias(EcologyPeer::REEFEXCLUSIVE, $reefexclusive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reefexclusive['max'])) {
                $this->addUsingAlias(EcologyPeer::REEFEXCLUSIVE, $reefexclusive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::REEFEXCLUSIVE, $reefexclusive, $comparison);
    }

    /**
     * Filter the query on the DropOffs column
     *
     * Example usage:
     * <code>
     * $query->filterByDropoffs(1234); // WHERE DropOffs = 1234
     * $query->filterByDropoffs(array(12, 34)); // WHERE DropOffs IN (12, 34)
     * $query->filterByDropoffs(array('min' => 12)); // WHERE DropOffs >= 12
     * $query->filterByDropoffs(array('max' => 12)); // WHERE DropOffs <= 12
     * </code>
     *
     * @param     mixed $dropoffs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDropoffs($dropoffs = null, $comparison = null)
    {
        if (is_array($dropoffs)) {
            $useMinMax = false;
            if (isset($dropoffs['min'])) {
                $this->addUsingAlias(EcologyPeer::DROPOFFS, $dropoffs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dropoffs['max'])) {
                $this->addUsingAlias(EcologyPeer::DROPOFFS, $dropoffs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DROPOFFS, $dropoffs, $comparison);
    }

    /**
     * Filter the query on the ReefFlats column
     *
     * Example usage:
     * <code>
     * $query->filterByReefflats(1234); // WHERE ReefFlats = 1234
     * $query->filterByReefflats(array(12, 34)); // WHERE ReefFlats IN (12, 34)
     * $query->filterByReefflats(array('min' => 12)); // WHERE ReefFlats >= 12
     * $query->filterByReefflats(array('max' => 12)); // WHERE ReefFlats <= 12
     * </code>
     *
     * @param     mixed $reefflats The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByReefflats($reefflats = null, $comparison = null)
    {
        if (is_array($reefflats)) {
            $useMinMax = false;
            if (isset($reefflats['min'])) {
                $this->addUsingAlias(EcologyPeer::REEFFLATS, $reefflats['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reefflats['max'])) {
                $this->addUsingAlias(EcologyPeer::REEFFLATS, $reefflats['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::REEFFLATS, $reefflats, $comparison);
    }

    /**
     * Filter the query on the Lagoons column
     *
     * Example usage:
     * <code>
     * $query->filterByLagoons(1234); // WHERE Lagoons = 1234
     * $query->filterByLagoons(array(12, 34)); // WHERE Lagoons IN (12, 34)
     * $query->filterByLagoons(array('min' => 12)); // WHERE Lagoons >= 12
     * $query->filterByLagoons(array('max' => 12)); // WHERE Lagoons <= 12
     * </code>
     *
     * @param     mixed $lagoons The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByLagoons($lagoons = null, $comparison = null)
    {
        if (is_array($lagoons)) {
            $useMinMax = false;
            if (isset($lagoons['min'])) {
                $this->addUsingAlias(EcologyPeer::LAGOONS, $lagoons['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lagoons['max'])) {
                $this->addUsingAlias(EcologyPeer::LAGOONS, $lagoons['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::LAGOONS, $lagoons, $comparison);
    }

    /**
     * Filter the query on the Burrows column
     *
     * Example usage:
     * <code>
     * $query->filterByBurrows(1234); // WHERE Burrows = 1234
     * $query->filterByBurrows(array(12, 34)); // WHERE Burrows IN (12, 34)
     * $query->filterByBurrows(array('min' => 12)); // WHERE Burrows >= 12
     * $query->filterByBurrows(array('max' => 12)); // WHERE Burrows <= 12
     * </code>
     *
     * @param     mixed $burrows The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBurrows($burrows = null, $comparison = null)
    {
        if (is_array($burrows)) {
            $useMinMax = false;
            if (isset($burrows['min'])) {
                $this->addUsingAlias(EcologyPeer::BURROWS, $burrows['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($burrows['max'])) {
                $this->addUsingAlias(EcologyPeer::BURROWS, $burrows['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BURROWS, $burrows, $comparison);
    }

    /**
     * Filter the query on the Tunnels column
     *
     * Example usage:
     * <code>
     * $query->filterByTunnels(1234); // WHERE Tunnels = 1234
     * $query->filterByTunnels(array(12, 34)); // WHERE Tunnels IN (12, 34)
     * $query->filterByTunnels(array('min' => 12)); // WHERE Tunnels >= 12
     * $query->filterByTunnels(array('max' => 12)); // WHERE Tunnels <= 12
     * </code>
     *
     * @param     mixed $tunnels The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByTunnels($tunnels = null, $comparison = null)
    {
        if (is_array($tunnels)) {
            $useMinMax = false;
            if (isset($tunnels['min'])) {
                $this->addUsingAlias(EcologyPeer::TUNNELS, $tunnels['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tunnels['max'])) {
                $this->addUsingAlias(EcologyPeer::TUNNELS, $tunnels['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::TUNNELS, $tunnels, $comparison);
    }

    /**
     * Filter the query on the Crevices column
     *
     * Example usage:
     * <code>
     * $query->filterByCrevices(1234); // WHERE Crevices = 1234
     * $query->filterByCrevices(array(12, 34)); // WHERE Crevices IN (12, 34)
     * $query->filterByCrevices(array('min' => 12)); // WHERE Crevices >= 12
     * $query->filterByCrevices(array('max' => 12)); // WHERE Crevices <= 12
     * </code>
     *
     * @param     mixed $crevices The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCrevices($crevices = null, $comparison = null)
    {
        if (is_array($crevices)) {
            $useMinMax = false;
            if (isset($crevices['min'])) {
                $this->addUsingAlias(EcologyPeer::CREVICES, $crevices['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crevices['max'])) {
                $this->addUsingAlias(EcologyPeer::CREVICES, $crevices['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CREVICES, $crevices, $comparison);
    }

    /**
     * Filter the query on the Vents column
     *
     * Example usage:
     * <code>
     * $query->filterByVents(1234); // WHERE Vents = 1234
     * $query->filterByVents(array(12, 34)); // WHERE Vents IN (12, 34)
     * $query->filterByVents(array('min' => 12)); // WHERE Vents >= 12
     * $query->filterByVents(array('max' => 12)); // WHERE Vents <= 12
     * </code>
     *
     * @param     mixed $vents The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByVents($vents = null, $comparison = null)
    {
        if (is_array($vents)) {
            $useMinMax = false;
            if (isset($vents['min'])) {
                $this->addUsingAlias(EcologyPeer::VENTS, $vents['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vents['max'])) {
                $this->addUsingAlias(EcologyPeer::VENTS, $vents['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::VENTS, $vents, $comparison);
    }

    /**
     * Filter the query on the Seamounts column
     *
     * Example usage:
     * <code>
     * $query->filterBySeamounts(1234); // WHERE Seamounts = 1234
     * $query->filterBySeamounts(array(12, 34)); // WHERE Seamounts IN (12, 34)
     * $query->filterBySeamounts(array('min' => 12)); // WHERE Seamounts >= 12
     * $query->filterBySeamounts(array('max' => 12)); // WHERE Seamounts <= 12
     * </code>
     *
     * @param     mixed $seamounts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySeamounts($seamounts = null, $comparison = null)
    {
        if (is_array($seamounts)) {
            $useMinMax = false;
            if (isset($seamounts['min'])) {
                $this->addUsingAlias(EcologyPeer::SEAMOUNTS, $seamounts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seamounts['max'])) {
                $this->addUsingAlias(EcologyPeer::SEAMOUNTS, $seamounts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SEAMOUNTS, $seamounts, $comparison);
    }

    /**
     * Filter the query on the DeepWaterCorals column
     *
     * Example usage:
     * <code>
     * $query->filterByDeepwatercorals(1234); // WHERE DeepWaterCorals = 1234
     * $query->filterByDeepwatercorals(array(12, 34)); // WHERE DeepWaterCorals IN (12, 34)
     * $query->filterByDeepwatercorals(array('min' => 12)); // WHERE DeepWaterCorals >= 12
     * $query->filterByDeepwatercorals(array('max' => 12)); // WHERE DeepWaterCorals <= 12
     * </code>
     *
     * @param     mixed $deepwatercorals The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDeepwatercorals($deepwatercorals = null, $comparison = null)
    {
        if (is_array($deepwatercorals)) {
            $useMinMax = false;
            if (isset($deepwatercorals['min'])) {
                $this->addUsingAlias(EcologyPeer::DEEPWATERCORALS, $deepwatercorals['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deepwatercorals['max'])) {
                $this->addUsingAlias(EcologyPeer::DEEPWATERCORALS, $deepwatercorals['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DEEPWATERCORALS, $deepwatercorals, $comparison);
    }

    /**
     * Filter the query on the Vegetation column
     *
     * Example usage:
     * <code>
     * $query->filterByVegetation(1234); // WHERE Vegetation = 1234
     * $query->filterByVegetation(array(12, 34)); // WHERE Vegetation IN (12, 34)
     * $query->filterByVegetation(array('min' => 12)); // WHERE Vegetation >= 12
     * $query->filterByVegetation(array('max' => 12)); // WHERE Vegetation <= 12
     * </code>
     *
     * @param     mixed $vegetation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByVegetation($vegetation = null, $comparison = null)
    {
        if (is_array($vegetation)) {
            $useMinMax = false;
            if (isset($vegetation['min'])) {
                $this->addUsingAlias(EcologyPeer::VEGETATION, $vegetation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vegetation['max'])) {
                $this->addUsingAlias(EcologyPeer::VEGETATION, $vegetation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::VEGETATION, $vegetation, $comparison);
    }

    /**
     * Filter the query on the Leaves column
     *
     * Example usage:
     * <code>
     * $query->filterByLeaves(1234); // WHERE Leaves = 1234
     * $query->filterByLeaves(array(12, 34)); // WHERE Leaves IN (12, 34)
     * $query->filterByLeaves(array('min' => 12)); // WHERE Leaves >= 12
     * $query->filterByLeaves(array('max' => 12)); // WHERE Leaves <= 12
     * </code>
     *
     * @param     mixed $leaves The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByLeaves($leaves = null, $comparison = null)
    {
        if (is_array($leaves)) {
            $useMinMax = false;
            if (isset($leaves['min'])) {
                $this->addUsingAlias(EcologyPeer::LEAVES, $leaves['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leaves['max'])) {
                $this->addUsingAlias(EcologyPeer::LEAVES, $leaves['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::LEAVES, $leaves, $comparison);
    }

    /**
     * Filter the query on the Stems column
     *
     * Example usage:
     * <code>
     * $query->filterByStems(1234); // WHERE Stems = 1234
     * $query->filterByStems(array(12, 34)); // WHERE Stems IN (12, 34)
     * $query->filterByStems(array('min' => 12)); // WHERE Stems >= 12
     * $query->filterByStems(array('max' => 12)); // WHERE Stems <= 12
     * </code>
     *
     * @param     mixed $stems The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByStems($stems = null, $comparison = null)
    {
        if (is_array($stems)) {
            $useMinMax = false;
            if (isset($stems['min'])) {
                $this->addUsingAlias(EcologyPeer::STEMS, $stems['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stems['max'])) {
                $this->addUsingAlias(EcologyPeer::STEMS, $stems['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::STEMS, $stems, $comparison);
    }

    /**
     * Filter the query on the Roots column
     *
     * Example usage:
     * <code>
     * $query->filterByRoots(1234); // WHERE Roots = 1234
     * $query->filterByRoots(array(12, 34)); // WHERE Roots IN (12, 34)
     * $query->filterByRoots(array('min' => 12)); // WHERE Roots >= 12
     * $query->filterByRoots(array('max' => 12)); // WHERE Roots <= 12
     * </code>
     *
     * @param     mixed $roots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByRoots($roots = null, $comparison = null)
    {
        if (is_array($roots)) {
            $useMinMax = false;
            if (isset($roots['min'])) {
                $this->addUsingAlias(EcologyPeer::ROOTS, $roots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roots['max'])) {
                $this->addUsingAlias(EcologyPeer::ROOTS, $roots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ROOTS, $roots, $comparison);
    }

    /**
     * Filter the query on the Driftwood column
     *
     * Example usage:
     * <code>
     * $query->filterByDriftwood(1234); // WHERE Driftwood = 1234
     * $query->filterByDriftwood(array(12, 34)); // WHERE Driftwood IN (12, 34)
     * $query->filterByDriftwood(array('min' => 12)); // WHERE Driftwood >= 12
     * $query->filterByDriftwood(array('max' => 12)); // WHERE Driftwood <= 12
     * </code>
     *
     * @param     mixed $driftwood The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDriftwood($driftwood = null, $comparison = null)
    {
        if (is_array($driftwood)) {
            $useMinMax = false;
            if (isset($driftwood['min'])) {
                $this->addUsingAlias(EcologyPeer::DRIFTWOOD, $driftwood['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($driftwood['max'])) {
                $this->addUsingAlias(EcologyPeer::DRIFTWOOD, $driftwood['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DRIFTWOOD, $driftwood, $comparison);
    }

    /**
     * Filter the query on the OInverterbrates column
     *
     * Example usage:
     * <code>
     * $query->filterByOinverterbrates(1234); // WHERE OInverterbrates = 1234
     * $query->filterByOinverterbrates(array(12, 34)); // WHERE OInverterbrates IN (12, 34)
     * $query->filterByOinverterbrates(array('min' => 12)); // WHERE OInverterbrates >= 12
     * $query->filterByOinverterbrates(array('max' => 12)); // WHERE OInverterbrates <= 12
     * </code>
     *
     * @param     mixed $oinverterbrates The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOinverterbrates($oinverterbrates = null, $comparison = null)
    {
        if (is_array($oinverterbrates)) {
            $useMinMax = false;
            if (isset($oinverterbrates['min'])) {
                $this->addUsingAlias(EcologyPeer::OINVERTERBRATES, $oinverterbrates['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oinverterbrates['max'])) {
                $this->addUsingAlias(EcologyPeer::OINVERTERBRATES, $oinverterbrates['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::OINVERTERBRATES, $oinverterbrates, $comparison);
    }

    /**
     * Filter the query on the OIRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByOiremarks('fooValue');   // WHERE OIRemarks = 'fooValue'
     * $query->filterByOiremarks('%fooValue%'); // WHERE OIRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oiremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOiremarks($oiremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oiremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oiremarks)) {
                $oiremarks = str_replace('*', '%', $oiremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::OIREMARKS, $oiremarks, $comparison);
    }

    /**
     * Filter the query on the Verterbrates column
     *
     * Example usage:
     * <code>
     * $query->filterByVerterbrates(1234); // WHERE Verterbrates = 1234
     * $query->filterByVerterbrates(array(12, 34)); // WHERE Verterbrates IN (12, 34)
     * $query->filterByVerterbrates(array('min' => 12)); // WHERE Verterbrates >= 12
     * $query->filterByVerterbrates(array('max' => 12)); // WHERE Verterbrates <= 12
     * </code>
     *
     * @param     mixed $verterbrates The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByVerterbrates($verterbrates = null, $comparison = null)
    {
        if (is_array($verterbrates)) {
            $useMinMax = false;
            if (isset($verterbrates['min'])) {
                $this->addUsingAlias(EcologyPeer::VERTERBRATES, $verterbrates['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verterbrates['max'])) {
                $this->addUsingAlias(EcologyPeer::VERTERBRATES, $verterbrates['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::VERTERBRATES, $verterbrates, $comparison);
    }

    /**
     * Filter the query on the VRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByVremarks('fooValue');   // WHERE VRemarks = 'fooValue'
     * $query->filterByVremarks('%fooValue%'); // WHERE VRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByVremarks($vremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vremarks)) {
                $vremarks = str_replace('*', '%', $vremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcologyPeer::VREMARKS, $vremarks, $comparison);
    }

    /**
     * Filter the query on the Pilings column
     *
     * Example usage:
     * <code>
     * $query->filterByPilings(1234); // WHERE Pilings = 1234
     * $query->filterByPilings(array(12, 34)); // WHERE Pilings IN (12, 34)
     * $query->filterByPilings(array('min' => 12)); // WHERE Pilings >= 12
     * $query->filterByPilings(array('max' => 12)); // WHERE Pilings <= 12
     * </code>
     *
     * @param     mixed $pilings The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByPilings($pilings = null, $comparison = null)
    {
        if (is_array($pilings)) {
            $useMinMax = false;
            if (isset($pilings['min'])) {
                $this->addUsingAlias(EcologyPeer::PILINGS, $pilings['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pilings['max'])) {
                $this->addUsingAlias(EcologyPeer::PILINGS, $pilings['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::PILINGS, $pilings, $comparison);
    }

    /**
     * Filter the query on the BoatHulls column
     *
     * Example usage:
     * <code>
     * $query->filterByBoathulls(1234); // WHERE BoatHulls = 1234
     * $query->filterByBoathulls(array(12, 34)); // WHERE BoatHulls IN (12, 34)
     * $query->filterByBoathulls(array('min' => 12)); // WHERE BoatHulls >= 12
     * $query->filterByBoathulls(array('max' => 12)); // WHERE BoatHulls <= 12
     * </code>
     *
     * @param     mixed $boathulls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBoathulls($boathulls = null, $comparison = null)
    {
        if (is_array($boathulls)) {
            $useMinMax = false;
            if (isset($boathulls['min'])) {
                $this->addUsingAlias(EcologyPeer::BOATHULLS, $boathulls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boathulls['max'])) {
                $this->addUsingAlias(EcologyPeer::BOATHULLS, $boathulls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BOATHULLS, $boathulls, $comparison);
    }

    /**
     * Filter the query on the Corals column
     *
     * Example usage:
     * <code>
     * $query->filterByCorals(1234); // WHERE Corals = 1234
     * $query->filterByCorals(array(12, 34)); // WHERE Corals IN (12, 34)
     * $query->filterByCorals(array('min' => 12)); // WHERE Corals >= 12
     * $query->filterByCorals(array('max' => 12)); // WHERE Corals <= 12
     * </code>
     *
     * @param     mixed $corals The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByCorals($corals = null, $comparison = null)
    {
        if (is_array($corals)) {
            $useMinMax = false;
            if (isset($corals['min'])) {
                $this->addUsingAlias(EcologyPeer::CORALS, $corals['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($corals['max'])) {
                $this->addUsingAlias(EcologyPeer::CORALS, $corals['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::CORALS, $corals, $comparison);
    }

    /**
     * Filter the query on the SoftCorals column
     *
     * Example usage:
     * <code>
     * $query->filterBySoftcorals(1234); // WHERE SoftCorals = 1234
     * $query->filterBySoftcorals(array(12, 34)); // WHERE SoftCorals IN (12, 34)
     * $query->filterBySoftcorals(array('min' => 12)); // WHERE SoftCorals >= 12
     * $query->filterBySoftcorals(array('max' => 12)); // WHERE SoftCorals <= 12
     * </code>
     *
     * @param     mixed $softcorals The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterBySoftcorals($softcorals = null, $comparison = null)
    {
        if (is_array($softcorals)) {
            $useMinMax = false;
            if (isset($softcorals['min'])) {
                $this->addUsingAlias(EcologyPeer::SOFTCORALS, $softcorals['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($softcorals['max'])) {
                $this->addUsingAlias(EcologyPeer::SOFTCORALS, $softcorals['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::SOFTCORALS, $softcorals, $comparison);
    }

    /**
     * Filter the query on the OnPolyp column
     *
     * Example usage:
     * <code>
     * $query->filterByOnpolyp(1234); // WHERE OnPolyp = 1234
     * $query->filterByOnpolyp(array(12, 34)); // WHERE OnPolyp IN (12, 34)
     * $query->filterByOnpolyp(array('min' => 12)); // WHERE OnPolyp >= 12
     * $query->filterByOnpolyp(array('max' => 12)); // WHERE OnPolyp <= 12
     * </code>
     *
     * @param     mixed $onpolyp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOnpolyp($onpolyp = null, $comparison = null)
    {
        if (is_array($onpolyp)) {
            $useMinMax = false;
            if (isset($onpolyp['min'])) {
                $this->addUsingAlias(EcologyPeer::ONPOLYP, $onpolyp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($onpolyp['max'])) {
                $this->addUsingAlias(EcologyPeer::ONPOLYP, $onpolyp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ONPOLYP, $onpolyp, $comparison);
    }

    /**
     * Filter the query on the BetweenPolyps column
     *
     * Example usage:
     * <code>
     * $query->filterByBetweenpolyps(1234); // WHERE BetweenPolyps = 1234
     * $query->filterByBetweenpolyps(array(12, 34)); // WHERE BetweenPolyps IN (12, 34)
     * $query->filterByBetweenpolyps(array('min' => 12)); // WHERE BetweenPolyps >= 12
     * $query->filterByBetweenpolyps(array('max' => 12)); // WHERE BetweenPolyps <= 12
     * </code>
     *
     * @param     mixed $betweenpolyps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByBetweenpolyps($betweenpolyps = null, $comparison = null)
    {
        if (is_array($betweenpolyps)) {
            $useMinMax = false;
            if (isset($betweenpolyps['min'])) {
                $this->addUsingAlias(EcologyPeer::BETWEENPOLYPS, $betweenpolyps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($betweenpolyps['max'])) {
                $this->addUsingAlias(EcologyPeer::BETWEENPOLYPS, $betweenpolyps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::BETWEENPOLYPS, $betweenpolyps, $comparison);
    }

    /**
     * Filter the query on the HardCorals column
     *
     * Example usage:
     * <code>
     * $query->filterByHardcorals(1234); // WHERE HardCorals = 1234
     * $query->filterByHardcorals(array(12, 34)); // WHERE HardCorals IN (12, 34)
     * $query->filterByHardcorals(array('min' => 12)); // WHERE HardCorals >= 12
     * $query->filterByHardcorals(array('max' => 12)); // WHERE HardCorals <= 12
     * </code>
     *
     * @param     mixed $hardcorals The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByHardcorals($hardcorals = null, $comparison = null)
    {
        if (is_array($hardcorals)) {
            $useMinMax = false;
            if (isset($hardcorals['min'])) {
                $this->addUsingAlias(EcologyPeer::HARDCORALS, $hardcorals['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardcorals['max'])) {
                $this->addUsingAlias(EcologyPeer::HARDCORALS, $hardcorals['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::HARDCORALS, $hardcorals, $comparison);
    }

    /**
     * Filter the query on the OnExoskeleton column
     *
     * Example usage:
     * <code>
     * $query->filterByOnexoskeleton(1234); // WHERE OnExoskeleton = 1234
     * $query->filterByOnexoskeleton(array(12, 34)); // WHERE OnExoskeleton IN (12, 34)
     * $query->filterByOnexoskeleton(array('min' => 12)); // WHERE OnExoskeleton >= 12
     * $query->filterByOnexoskeleton(array('max' => 12)); // WHERE OnExoskeleton <= 12
     * </code>
     *
     * @param     mixed $onexoskeleton The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByOnexoskeleton($onexoskeleton = null, $comparison = null)
    {
        if (is_array($onexoskeleton)) {
            $useMinMax = false;
            if (isset($onexoskeleton['min'])) {
                $this->addUsingAlias(EcologyPeer::ONEXOSKELETON, $onexoskeleton['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($onexoskeleton['max'])) {
                $this->addUsingAlias(EcologyPeer::ONEXOSKELETON, $onexoskeleton['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ONEXOSKELETON, $onexoskeleton, $comparison);
    }

    /**
     * Filter the query on the InterstitialSpaces column
     *
     * Example usage:
     * <code>
     * $query->filterByInterstitialspaces(1234); // WHERE InterstitialSpaces = 1234
     * $query->filterByInterstitialspaces(array(12, 34)); // WHERE InterstitialSpaces IN (12, 34)
     * $query->filterByInterstitialspaces(array('min' => 12)); // WHERE InterstitialSpaces >= 12
     * $query->filterByInterstitialspaces(array('max' => 12)); // WHERE InterstitialSpaces <= 12
     * </code>
     *
     * @param     mixed $interstitialspaces The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByInterstitialspaces($interstitialspaces = null, $comparison = null)
    {
        if (is_array($interstitialspaces)) {
            $useMinMax = false;
            if (isset($interstitialspaces['min'])) {
                $this->addUsingAlias(EcologyPeer::INTERSTITIALSPACES, $interstitialspaces['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interstitialspaces['max'])) {
                $this->addUsingAlias(EcologyPeer::INTERSTITIALSPACES, $interstitialspaces['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::INTERSTITIALSPACES, $interstitialspaces, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EcologyPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EcologyPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::ENTERED, $entered, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EcologyPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EcologyPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EcologyPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EcologyPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::MODIFIED, $modified, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EcologyPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EcologyPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EcologyPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EcologyPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::EXPERT, $expert, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EcologyPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EcologyPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return EcologyQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EcologyPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EcologyPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcologyPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ecology $ecology Object to remove from the list of results
     *
     * @return EcologyQuery The current query, for fluid interface
     */
    public function prune($ecology = null)
    {
        if ($ecology) {
            $this->addUsingAlias(EcologyPeer::STOCKCODE, $ecology->getStockcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
