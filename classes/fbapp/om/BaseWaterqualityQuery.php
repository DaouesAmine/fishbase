<?php


/**
 * Base class that represents a query for the 'waterquality' table.
 *
 *
 *
 * @method WaterqualityQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method WaterqualityQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method WaterqualityQuery orderByDissolvedo2opt($order = Criteria::ASC) Order by the DissolvedO2Opt column
 * @method WaterqualityQuery orderByDissolvedo2harm($order = Criteria::ASC) Order by the DissolvedO2Harm column
 * @method WaterqualityQuery orderByOzoneopt($order = Criteria::ASC) Order by the OzoneOpt column
 * @method WaterqualityQuery orderByOzoneharm($order = Criteria::ASC) Order by the OzoneHarm column
 * @method WaterqualityQuery orderByCarbondioxideopt($order = Criteria::ASC) Order by the CarbonDioxideOpt column
 * @method WaterqualityQuery orderByCarbondioxideharm($order = Criteria::ASC) Order by the CarbonDioxideHarm column
 * @method WaterqualityQuery orderByPhopt($order = Criteria::ASC) Order by the pHOpt column
 * @method WaterqualityQuery orderByPhharm($order = Criteria::ASC) Order by the pHHarm column
 * @method WaterqualityQuery orderByAmmoniaopt($order = Criteria::ASC) Order by the AmmoniaOpt column
 * @method WaterqualityQuery orderByAmmoniaharm($order = Criteria::ASC) Order by the AmmoniaHarm column
 * @method WaterqualityQuery orderByNitriteopt($order = Criteria::ASC) Order by the NitriteOpt column
 * @method WaterqualityQuery orderByNitriteharm($order = Criteria::ASC) Order by the NitriteHarm column
 * @method WaterqualityQuery orderByNitrateopt($order = Criteria::ASC) Order by the NitrateOpt column
 * @method WaterqualityQuery orderByNitrateharm($order = Criteria::ASC) Order by the NitrateHarm column
 * @method WaterqualityQuery orderByNitrousacidopt($order = Criteria::ASC) Order by the NitrousAcidOpt column
 * @method WaterqualityQuery orderByNitrousacidharm($order = Criteria::ASC) Order by the NitrousAcidHarm column
 * @method WaterqualityQuery orderByChlorineopt($order = Criteria::ASC) Order by the ChlorineOpt column
 * @method WaterqualityQuery orderByChlorineharm($order = Criteria::ASC) Order by the ChlorineHarm column
 * @method WaterqualityQuery orderByChlorideopt($order = Criteria::ASC) Order by the ChlorideOpt column
 * @method WaterqualityQuery orderByChlorideharm($order = Criteria::ASC) Order by the ChlorideHarm column
 * @method WaterqualityQuery orderByHsulphateopt($order = Criteria::ASC) Order by the HSulphateOpt column
 * @method WaterqualityQuery orderByHsulphateharm($order = Criteria::ASC) Order by the HSulphateHarm column
 * @method WaterqualityQuery orderByZincopt($order = Criteria::ASC) Order by the ZincOpt column
 * @method WaterqualityQuery orderByZincharm($order = Criteria::ASC) Order by the ZincHarm column
 * @method WaterqualityQuery orderByCopperopt($order = Criteria::ASC) Order by the CopperOpt column
 * @method WaterqualityQuery orderByCopperharm($order = Criteria::ASC) Order by the CopperHarm column
 * @method WaterqualityQuery orderByIronopt($order = Criteria::ASC) Order by the IronOpt column
 * @method WaterqualityQuery orderByIronharm($order = Criteria::ASC) Order by the IronHarm column
 * @method WaterqualityQuery orderByLeadopt($order = Criteria::ASC) Order by the LeadOpt column
 * @method WaterqualityQuery orderByLeadharm($order = Criteria::ASC) Order by the LeadHarm column
 * @method WaterqualityQuery orderByMercuryopt($order = Criteria::ASC) Order by the MercuryOpt column
 * @method WaterqualityQuery orderByMercuryharm($order = Criteria::ASC) Order by the MercuryHarm column
 * @method WaterqualityQuery orderByCadmiumopt($order = Criteria::ASC) Order by the CadmiumOpt column
 * @method WaterqualityQuery orderByCadmiumharm($order = Criteria::ASC) Order by the CadmiumHarm column
 * @method WaterqualityQuery orderByNickelopt($order = Criteria::ASC) Order by the NickelOpt column
 * @method WaterqualityQuery orderByNickelharm($order = Criteria::ASC) Order by the NickelHarm column
 * @method WaterqualityQuery orderByChromiumopt($order = Criteria::ASC) Order by the ChromiumOpt column
 * @method WaterqualityQuery orderByChromiumharm($order = Criteria::ASC) Order by the ChromiumHarm column
 * @method WaterqualityQuery orderByManganeseopt($order = Criteria::ASC) Order by the ManganeseOpt column
 * @method WaterqualityQuery orderByManganeseharm($order = Criteria::ASC) Order by the ManganeseHarm column
 * @method WaterqualityQuery orderByArsenicopt($order = Criteria::ASC) Order by the ArsenicOpt column
 * @method WaterqualityQuery orderByArsenicharm($order = Criteria::ASC) Order by the ArsenicHarm column
 * @method WaterqualityQuery orderByAluminumopt($order = Criteria::ASC) Order by the AluminumOpt column
 * @method WaterqualityQuery orderByAluminumharm($order = Criteria::ASC) Order by the AluminumHarm column
 * @method WaterqualityQuery orderByCyanideopt($order = Criteria::ASC) Order by the CyanideOpt column
 * @method WaterqualityQuery orderByCyanideharm($order = Criteria::ASC) Order by the CyanideHarm column
 * @method WaterqualityQuery orderByPcbopt($order = Criteria::ASC) Order by the PCBOpt column
 * @method WaterqualityQuery orderByPcbharm($order = Criteria::ASC) Order by the PCBHarm column
 * @method WaterqualityQuery orderByPesticidesopt($order = Criteria::ASC) Order by the PesticidesOpt column
 * @method WaterqualityQuery orderByPesticidesharm($order = Criteria::ASC) Order by the PesticidesHarm column
 * @method WaterqualityQuery orderByTurbidityopt($order = Criteria::ASC) Order by the TurbidityOpt column
 * @method WaterqualityQuery orderByTurbidityharm($order = Criteria::ASC) Order by the TurbidityHarm column
 * @method WaterqualityQuery orderByOilsrefinedopt($order = Criteria::ASC) Order by the OilsRefinedOpt column
 * @method WaterqualityQuery orderByOilsrefinedharm($order = Criteria::ASC) Order by the OilsRefinedHarm column
 * @method WaterqualityQuery orderByDyesopt($order = Criteria::ASC) Order by the DyesOpt column
 * @method WaterqualityQuery orderByDyesharm($order = Criteria::ASC) Order by the DyesHarm column
 * @method WaterqualityQuery orderByPhenolsopt($order = Criteria::ASC) Order by the PhenolsOpt column
 * @method WaterqualityQuery orderByPhenolsharm($order = Criteria::ASC) Order by the PhenolsHarm column
 * @method WaterqualityQuery orderBySurfactantsopt($order = Criteria::ASC) Order by the SurfactantsOpt column
 * @method WaterqualityQuery orderBySurfactantsharm($order = Criteria::ASC) Order by the SurfactantsHarm column
 * @method WaterqualityQuery orderByPhytoplanktonopt($order = Criteria::ASC) Order by the PhytoplanktonOpt column
 * @method WaterqualityQuery orderByPhytoplanktonharm($order = Criteria::ASC) Order by the PhytoplanktonHarm column
 * @method WaterqualityQuery orderByRemarko2($order = Criteria::ASC) Order by the RemarkO2 column
 * @method WaterqualityQuery orderByRemarko3($order = Criteria::ASC) Order by the RemarkO3 column
 * @method WaterqualityQuery orderByRemarkco2($order = Criteria::ASC) Order by the RemarkCO2 column
 * @method WaterqualityQuery orderByRemarkph($order = Criteria::ASC) Order by the RemarkpH column
 * @method WaterqualityQuery orderByRemarknh3($order = Criteria::ASC) Order by the RemarkNH3 column
 * @method WaterqualityQuery orderByRemarkno2($order = Criteria::ASC) Order by the RemarkNO2 column
 * @method WaterqualityQuery orderByRemarkno3($order = Criteria::ASC) Order by the RemarkNO3 column
 * @method WaterqualityQuery orderByRemarkhno2($order = Criteria::ASC) Order by the RemarkHNO2 column
 * @method WaterqualityQuery orderByRemarkcl2($order = Criteria::ASC) Order by the RemarkCL2 column
 * @method WaterqualityQuery orderByRemarkcl($order = Criteria::ASC) Order by the RemarkCL column
 * @method WaterqualityQuery orderByRemarkh2s($order = Criteria::ASC) Order by the RemarkH2S column
 * @method WaterqualityQuery orderByRemarkzinc($order = Criteria::ASC) Order by the RemarkZinc column
 * @method WaterqualityQuery orderByRemarkcopper($order = Criteria::ASC) Order by the RemarkCopper column
 * @method WaterqualityQuery orderByRemarkiron($order = Criteria::ASC) Order by the RemarkIron column
 * @method WaterqualityQuery orderByRemarklead($order = Criteria::ASC) Order by the RemarkLead column
 * @method WaterqualityQuery orderByRemarkmercury($order = Criteria::ASC) Order by the RemarkMercury column
 * @method WaterqualityQuery orderByRemarkcadmium($order = Criteria::ASC) Order by the RemarkCadmium column
 * @method WaterqualityQuery orderByRemarknickel($order = Criteria::ASC) Order by the RemarkNickel column
 * @method WaterqualityQuery orderByRemarkchromium($order = Criteria::ASC) Order by the RemarkChromium column
 * @method WaterqualityQuery orderByRemarkmanganese($order = Criteria::ASC) Order by the RemarkManganese column
 * @method WaterqualityQuery orderByRemarkarsenic($order = Criteria::ASC) Order by the RemarkArsenic column
 * @method WaterqualityQuery orderByRemarkaluminum($order = Criteria::ASC) Order by the RemarkAluminum column
 * @method WaterqualityQuery orderByRemarkcyanide($order = Criteria::ASC) Order by the RemarkCyanide column
 * @method WaterqualityQuery orderByRemarkpcb($order = Criteria::ASC) Order by the RemarkPCB column
 * @method WaterqualityQuery orderByRemarkpesticide($order = Criteria::ASC) Order by the RemarkPesticide column
 * @method WaterqualityQuery orderByRemarkturbidity($order = Criteria::ASC) Order by the RemarkTurbidity column
 * @method WaterqualityQuery orderByRemarkoilsrefined($order = Criteria::ASC) Order by the RemarkOilsRefined column
 * @method WaterqualityQuery orderByRemarkdyes($order = Criteria::ASC) Order by the RemarkDyes column
 * @method WaterqualityQuery orderByRemarkphenols($order = Criteria::ASC) Order by the RemarkPhenols column
 * @method WaterqualityQuery orderByRemarksurfactants($order = Criteria::ASC) Order by the RemarkSurfactants column
 * @method WaterqualityQuery orderByRemarkphytoplankton($order = Criteria::ASC) Order by the RemarkPhytoplankton column
 * @method WaterqualityQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method WaterqualityQuery groupByAutoctr() Group by the autoctr column
 * @method WaterqualityQuery groupBySpeccode() Group by the Speccode column
 * @method WaterqualityQuery groupByDissolvedo2opt() Group by the DissolvedO2Opt column
 * @method WaterqualityQuery groupByDissolvedo2harm() Group by the DissolvedO2Harm column
 * @method WaterqualityQuery groupByOzoneopt() Group by the OzoneOpt column
 * @method WaterqualityQuery groupByOzoneharm() Group by the OzoneHarm column
 * @method WaterqualityQuery groupByCarbondioxideopt() Group by the CarbonDioxideOpt column
 * @method WaterqualityQuery groupByCarbondioxideharm() Group by the CarbonDioxideHarm column
 * @method WaterqualityQuery groupByPhopt() Group by the pHOpt column
 * @method WaterqualityQuery groupByPhharm() Group by the pHHarm column
 * @method WaterqualityQuery groupByAmmoniaopt() Group by the AmmoniaOpt column
 * @method WaterqualityQuery groupByAmmoniaharm() Group by the AmmoniaHarm column
 * @method WaterqualityQuery groupByNitriteopt() Group by the NitriteOpt column
 * @method WaterqualityQuery groupByNitriteharm() Group by the NitriteHarm column
 * @method WaterqualityQuery groupByNitrateopt() Group by the NitrateOpt column
 * @method WaterqualityQuery groupByNitrateharm() Group by the NitrateHarm column
 * @method WaterqualityQuery groupByNitrousacidopt() Group by the NitrousAcidOpt column
 * @method WaterqualityQuery groupByNitrousacidharm() Group by the NitrousAcidHarm column
 * @method WaterqualityQuery groupByChlorineopt() Group by the ChlorineOpt column
 * @method WaterqualityQuery groupByChlorineharm() Group by the ChlorineHarm column
 * @method WaterqualityQuery groupByChlorideopt() Group by the ChlorideOpt column
 * @method WaterqualityQuery groupByChlorideharm() Group by the ChlorideHarm column
 * @method WaterqualityQuery groupByHsulphateopt() Group by the HSulphateOpt column
 * @method WaterqualityQuery groupByHsulphateharm() Group by the HSulphateHarm column
 * @method WaterqualityQuery groupByZincopt() Group by the ZincOpt column
 * @method WaterqualityQuery groupByZincharm() Group by the ZincHarm column
 * @method WaterqualityQuery groupByCopperopt() Group by the CopperOpt column
 * @method WaterqualityQuery groupByCopperharm() Group by the CopperHarm column
 * @method WaterqualityQuery groupByIronopt() Group by the IronOpt column
 * @method WaterqualityQuery groupByIronharm() Group by the IronHarm column
 * @method WaterqualityQuery groupByLeadopt() Group by the LeadOpt column
 * @method WaterqualityQuery groupByLeadharm() Group by the LeadHarm column
 * @method WaterqualityQuery groupByMercuryopt() Group by the MercuryOpt column
 * @method WaterqualityQuery groupByMercuryharm() Group by the MercuryHarm column
 * @method WaterqualityQuery groupByCadmiumopt() Group by the CadmiumOpt column
 * @method WaterqualityQuery groupByCadmiumharm() Group by the CadmiumHarm column
 * @method WaterqualityQuery groupByNickelopt() Group by the NickelOpt column
 * @method WaterqualityQuery groupByNickelharm() Group by the NickelHarm column
 * @method WaterqualityQuery groupByChromiumopt() Group by the ChromiumOpt column
 * @method WaterqualityQuery groupByChromiumharm() Group by the ChromiumHarm column
 * @method WaterqualityQuery groupByManganeseopt() Group by the ManganeseOpt column
 * @method WaterqualityQuery groupByManganeseharm() Group by the ManganeseHarm column
 * @method WaterqualityQuery groupByArsenicopt() Group by the ArsenicOpt column
 * @method WaterqualityQuery groupByArsenicharm() Group by the ArsenicHarm column
 * @method WaterqualityQuery groupByAluminumopt() Group by the AluminumOpt column
 * @method WaterqualityQuery groupByAluminumharm() Group by the AluminumHarm column
 * @method WaterqualityQuery groupByCyanideopt() Group by the CyanideOpt column
 * @method WaterqualityQuery groupByCyanideharm() Group by the CyanideHarm column
 * @method WaterqualityQuery groupByPcbopt() Group by the PCBOpt column
 * @method WaterqualityQuery groupByPcbharm() Group by the PCBHarm column
 * @method WaterqualityQuery groupByPesticidesopt() Group by the PesticidesOpt column
 * @method WaterqualityQuery groupByPesticidesharm() Group by the PesticidesHarm column
 * @method WaterqualityQuery groupByTurbidityopt() Group by the TurbidityOpt column
 * @method WaterqualityQuery groupByTurbidityharm() Group by the TurbidityHarm column
 * @method WaterqualityQuery groupByOilsrefinedopt() Group by the OilsRefinedOpt column
 * @method WaterqualityQuery groupByOilsrefinedharm() Group by the OilsRefinedHarm column
 * @method WaterqualityQuery groupByDyesopt() Group by the DyesOpt column
 * @method WaterqualityQuery groupByDyesharm() Group by the DyesHarm column
 * @method WaterqualityQuery groupByPhenolsopt() Group by the PhenolsOpt column
 * @method WaterqualityQuery groupByPhenolsharm() Group by the PhenolsHarm column
 * @method WaterqualityQuery groupBySurfactantsopt() Group by the SurfactantsOpt column
 * @method WaterqualityQuery groupBySurfactantsharm() Group by the SurfactantsHarm column
 * @method WaterqualityQuery groupByPhytoplanktonopt() Group by the PhytoplanktonOpt column
 * @method WaterqualityQuery groupByPhytoplanktonharm() Group by the PhytoplanktonHarm column
 * @method WaterqualityQuery groupByRemarko2() Group by the RemarkO2 column
 * @method WaterqualityQuery groupByRemarko3() Group by the RemarkO3 column
 * @method WaterqualityQuery groupByRemarkco2() Group by the RemarkCO2 column
 * @method WaterqualityQuery groupByRemarkph() Group by the RemarkpH column
 * @method WaterqualityQuery groupByRemarknh3() Group by the RemarkNH3 column
 * @method WaterqualityQuery groupByRemarkno2() Group by the RemarkNO2 column
 * @method WaterqualityQuery groupByRemarkno3() Group by the RemarkNO3 column
 * @method WaterqualityQuery groupByRemarkhno2() Group by the RemarkHNO2 column
 * @method WaterqualityQuery groupByRemarkcl2() Group by the RemarkCL2 column
 * @method WaterqualityQuery groupByRemarkcl() Group by the RemarkCL column
 * @method WaterqualityQuery groupByRemarkh2s() Group by the RemarkH2S column
 * @method WaterqualityQuery groupByRemarkzinc() Group by the RemarkZinc column
 * @method WaterqualityQuery groupByRemarkcopper() Group by the RemarkCopper column
 * @method WaterqualityQuery groupByRemarkiron() Group by the RemarkIron column
 * @method WaterqualityQuery groupByRemarklead() Group by the RemarkLead column
 * @method WaterqualityQuery groupByRemarkmercury() Group by the RemarkMercury column
 * @method WaterqualityQuery groupByRemarkcadmium() Group by the RemarkCadmium column
 * @method WaterqualityQuery groupByRemarknickel() Group by the RemarkNickel column
 * @method WaterqualityQuery groupByRemarkchromium() Group by the RemarkChromium column
 * @method WaterqualityQuery groupByRemarkmanganese() Group by the RemarkManganese column
 * @method WaterqualityQuery groupByRemarkarsenic() Group by the RemarkArsenic column
 * @method WaterqualityQuery groupByRemarkaluminum() Group by the RemarkAluminum column
 * @method WaterqualityQuery groupByRemarkcyanide() Group by the RemarkCyanide column
 * @method WaterqualityQuery groupByRemarkpcb() Group by the RemarkPCB column
 * @method WaterqualityQuery groupByRemarkpesticide() Group by the RemarkPesticide column
 * @method WaterqualityQuery groupByRemarkturbidity() Group by the RemarkTurbidity column
 * @method WaterqualityQuery groupByRemarkoilsrefined() Group by the RemarkOilsRefined column
 * @method WaterqualityQuery groupByRemarkdyes() Group by the RemarkDyes column
 * @method WaterqualityQuery groupByRemarkphenols() Group by the RemarkPhenols column
 * @method WaterqualityQuery groupByRemarksurfactants() Group by the RemarkSurfactants column
 * @method WaterqualityQuery groupByRemarkphytoplankton() Group by the RemarkPhytoplankton column
 * @method WaterqualityQuery groupByTs() Group by the TS column
 *
 * @method WaterqualityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WaterqualityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WaterqualityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Waterquality findOne(PropelPDO $con = null) Return the first Waterquality matching the query
 * @method Waterquality findOneOrCreate(PropelPDO $con = null) Return the first Waterquality matching the query, or a new Waterquality object populated from the query conditions when no match is found
 *
 * @method Waterquality findOneByAutoctr(int $autoctr) Return the first Waterquality filtered by the autoctr column
 * @method Waterquality findOneByDissolvedo2opt(string $DissolvedO2Opt) Return the first Waterquality filtered by the DissolvedO2Opt column
 * @method Waterquality findOneByDissolvedo2harm(string $DissolvedO2Harm) Return the first Waterquality filtered by the DissolvedO2Harm column
 * @method Waterquality findOneByOzoneopt(string $OzoneOpt) Return the first Waterquality filtered by the OzoneOpt column
 * @method Waterquality findOneByOzoneharm(string $OzoneHarm) Return the first Waterquality filtered by the OzoneHarm column
 * @method Waterquality findOneByCarbondioxideopt(string $CarbonDioxideOpt) Return the first Waterquality filtered by the CarbonDioxideOpt column
 * @method Waterquality findOneByCarbondioxideharm(string $CarbonDioxideHarm) Return the first Waterquality filtered by the CarbonDioxideHarm column
 * @method Waterquality findOneByPhopt(string $pHOpt) Return the first Waterquality filtered by the pHOpt column
 * @method Waterquality findOneByPhharm(string $pHHarm) Return the first Waterquality filtered by the pHHarm column
 * @method Waterquality findOneByAmmoniaopt(string $AmmoniaOpt) Return the first Waterquality filtered by the AmmoniaOpt column
 * @method Waterquality findOneByAmmoniaharm(string $AmmoniaHarm) Return the first Waterquality filtered by the AmmoniaHarm column
 * @method Waterquality findOneByNitriteopt(string $NitriteOpt) Return the first Waterquality filtered by the NitriteOpt column
 * @method Waterquality findOneByNitriteharm(string $NitriteHarm) Return the first Waterquality filtered by the NitriteHarm column
 * @method Waterquality findOneByNitrateopt(string $NitrateOpt) Return the first Waterquality filtered by the NitrateOpt column
 * @method Waterquality findOneByNitrateharm(string $NitrateHarm) Return the first Waterquality filtered by the NitrateHarm column
 * @method Waterquality findOneByNitrousacidopt(string $NitrousAcidOpt) Return the first Waterquality filtered by the NitrousAcidOpt column
 * @method Waterquality findOneByNitrousacidharm(string $NitrousAcidHarm) Return the first Waterquality filtered by the NitrousAcidHarm column
 * @method Waterquality findOneByChlorineopt(string $ChlorineOpt) Return the first Waterquality filtered by the ChlorineOpt column
 * @method Waterquality findOneByChlorineharm(string $ChlorineHarm) Return the first Waterquality filtered by the ChlorineHarm column
 * @method Waterquality findOneByChlorideopt(string $ChlorideOpt) Return the first Waterquality filtered by the ChlorideOpt column
 * @method Waterquality findOneByChlorideharm(string $ChlorideHarm) Return the first Waterquality filtered by the ChlorideHarm column
 * @method Waterquality findOneByHsulphateopt(string $HSulphateOpt) Return the first Waterquality filtered by the HSulphateOpt column
 * @method Waterquality findOneByHsulphateharm(string $HSulphateHarm) Return the first Waterquality filtered by the HSulphateHarm column
 * @method Waterquality findOneByZincopt(string $ZincOpt) Return the first Waterquality filtered by the ZincOpt column
 * @method Waterquality findOneByZincharm(string $ZincHarm) Return the first Waterquality filtered by the ZincHarm column
 * @method Waterquality findOneByCopperopt(string $CopperOpt) Return the first Waterquality filtered by the CopperOpt column
 * @method Waterquality findOneByCopperharm(string $CopperHarm) Return the first Waterquality filtered by the CopperHarm column
 * @method Waterquality findOneByIronopt(string $IronOpt) Return the first Waterquality filtered by the IronOpt column
 * @method Waterquality findOneByIronharm(string $IronHarm) Return the first Waterquality filtered by the IronHarm column
 * @method Waterquality findOneByLeadopt(string $LeadOpt) Return the first Waterquality filtered by the LeadOpt column
 * @method Waterquality findOneByLeadharm(string $LeadHarm) Return the first Waterquality filtered by the LeadHarm column
 * @method Waterquality findOneByMercuryopt(string $MercuryOpt) Return the first Waterquality filtered by the MercuryOpt column
 * @method Waterquality findOneByMercuryharm(string $MercuryHarm) Return the first Waterquality filtered by the MercuryHarm column
 * @method Waterquality findOneByCadmiumopt(string $CadmiumOpt) Return the first Waterquality filtered by the CadmiumOpt column
 * @method Waterquality findOneByCadmiumharm(string $CadmiumHarm) Return the first Waterquality filtered by the CadmiumHarm column
 * @method Waterquality findOneByNickelopt(string $NickelOpt) Return the first Waterquality filtered by the NickelOpt column
 * @method Waterquality findOneByNickelharm(string $NickelHarm) Return the first Waterquality filtered by the NickelHarm column
 * @method Waterquality findOneByChromiumopt(string $ChromiumOpt) Return the first Waterquality filtered by the ChromiumOpt column
 * @method Waterquality findOneByChromiumharm(string $ChromiumHarm) Return the first Waterquality filtered by the ChromiumHarm column
 * @method Waterquality findOneByManganeseopt(string $ManganeseOpt) Return the first Waterquality filtered by the ManganeseOpt column
 * @method Waterquality findOneByManganeseharm(string $ManganeseHarm) Return the first Waterquality filtered by the ManganeseHarm column
 * @method Waterquality findOneByArsenicopt(string $ArsenicOpt) Return the first Waterquality filtered by the ArsenicOpt column
 * @method Waterquality findOneByArsenicharm(string $ArsenicHarm) Return the first Waterquality filtered by the ArsenicHarm column
 * @method Waterquality findOneByAluminumopt(string $AluminumOpt) Return the first Waterquality filtered by the AluminumOpt column
 * @method Waterquality findOneByAluminumharm(string $AluminumHarm) Return the first Waterquality filtered by the AluminumHarm column
 * @method Waterquality findOneByCyanideopt(string $CyanideOpt) Return the first Waterquality filtered by the CyanideOpt column
 * @method Waterquality findOneByCyanideharm(string $CyanideHarm) Return the first Waterquality filtered by the CyanideHarm column
 * @method Waterquality findOneByPcbopt(string $PCBOpt) Return the first Waterquality filtered by the PCBOpt column
 * @method Waterquality findOneByPcbharm(string $PCBHarm) Return the first Waterquality filtered by the PCBHarm column
 * @method Waterquality findOneByPesticidesopt(string $PesticidesOpt) Return the first Waterquality filtered by the PesticidesOpt column
 * @method Waterquality findOneByPesticidesharm(string $PesticidesHarm) Return the first Waterquality filtered by the PesticidesHarm column
 * @method Waterquality findOneByTurbidityopt(string $TurbidityOpt) Return the first Waterquality filtered by the TurbidityOpt column
 * @method Waterquality findOneByTurbidityharm(string $TurbidityHarm) Return the first Waterquality filtered by the TurbidityHarm column
 * @method Waterquality findOneByOilsrefinedopt(string $OilsRefinedOpt) Return the first Waterquality filtered by the OilsRefinedOpt column
 * @method Waterquality findOneByOilsrefinedharm(string $OilsRefinedHarm) Return the first Waterquality filtered by the OilsRefinedHarm column
 * @method Waterquality findOneByDyesopt(string $DyesOpt) Return the first Waterquality filtered by the DyesOpt column
 * @method Waterquality findOneByDyesharm(string $DyesHarm) Return the first Waterquality filtered by the DyesHarm column
 * @method Waterquality findOneByPhenolsopt(string $PhenolsOpt) Return the first Waterquality filtered by the PhenolsOpt column
 * @method Waterquality findOneByPhenolsharm(string $PhenolsHarm) Return the first Waterquality filtered by the PhenolsHarm column
 * @method Waterquality findOneBySurfactantsopt(string $SurfactantsOpt) Return the first Waterquality filtered by the SurfactantsOpt column
 * @method Waterquality findOneBySurfactantsharm(string $SurfactantsHarm) Return the first Waterquality filtered by the SurfactantsHarm column
 * @method Waterquality findOneByPhytoplanktonopt(string $PhytoplanktonOpt) Return the first Waterquality filtered by the PhytoplanktonOpt column
 * @method Waterquality findOneByPhytoplanktonharm(string $PhytoplanktonHarm) Return the first Waterquality filtered by the PhytoplanktonHarm column
 * @method Waterquality findOneByRemarko2(string $RemarkO2) Return the first Waterquality filtered by the RemarkO2 column
 * @method Waterquality findOneByRemarko3(string $RemarkO3) Return the first Waterquality filtered by the RemarkO3 column
 * @method Waterquality findOneByRemarkco2(string $RemarkCO2) Return the first Waterquality filtered by the RemarkCO2 column
 * @method Waterquality findOneByRemarkph(string $RemarkpH) Return the first Waterquality filtered by the RemarkpH column
 * @method Waterquality findOneByRemarknh3(string $RemarkNH3) Return the first Waterquality filtered by the RemarkNH3 column
 * @method Waterquality findOneByRemarkno2(string $RemarkNO2) Return the first Waterquality filtered by the RemarkNO2 column
 * @method Waterquality findOneByRemarkno3(string $RemarkNO3) Return the first Waterquality filtered by the RemarkNO3 column
 * @method Waterquality findOneByRemarkhno2(string $RemarkHNO2) Return the first Waterquality filtered by the RemarkHNO2 column
 * @method Waterquality findOneByRemarkcl2(string $RemarkCL2) Return the first Waterquality filtered by the RemarkCL2 column
 * @method Waterquality findOneByRemarkcl(string $RemarkCL) Return the first Waterquality filtered by the RemarkCL column
 * @method Waterquality findOneByRemarkh2s(string $RemarkH2S) Return the first Waterquality filtered by the RemarkH2S column
 * @method Waterquality findOneByRemarkzinc(string $RemarkZinc) Return the first Waterquality filtered by the RemarkZinc column
 * @method Waterquality findOneByRemarkcopper(string $RemarkCopper) Return the first Waterquality filtered by the RemarkCopper column
 * @method Waterquality findOneByRemarkiron(string $RemarkIron) Return the first Waterquality filtered by the RemarkIron column
 * @method Waterquality findOneByRemarklead(string $RemarkLead) Return the first Waterquality filtered by the RemarkLead column
 * @method Waterquality findOneByRemarkmercury(string $RemarkMercury) Return the first Waterquality filtered by the RemarkMercury column
 * @method Waterquality findOneByRemarkcadmium(string $RemarkCadmium) Return the first Waterquality filtered by the RemarkCadmium column
 * @method Waterquality findOneByRemarknickel(string $RemarkNickel) Return the first Waterquality filtered by the RemarkNickel column
 * @method Waterquality findOneByRemarkchromium(string $RemarkChromium) Return the first Waterquality filtered by the RemarkChromium column
 * @method Waterquality findOneByRemarkmanganese(string $RemarkManganese) Return the first Waterquality filtered by the RemarkManganese column
 * @method Waterquality findOneByRemarkarsenic(string $RemarkArsenic) Return the first Waterquality filtered by the RemarkArsenic column
 * @method Waterquality findOneByRemarkaluminum(string $RemarkAluminum) Return the first Waterquality filtered by the RemarkAluminum column
 * @method Waterquality findOneByRemarkcyanide(string $RemarkCyanide) Return the first Waterquality filtered by the RemarkCyanide column
 * @method Waterquality findOneByRemarkpcb(string $RemarkPCB) Return the first Waterquality filtered by the RemarkPCB column
 * @method Waterquality findOneByRemarkpesticide(string $RemarkPesticide) Return the first Waterquality filtered by the RemarkPesticide column
 * @method Waterquality findOneByRemarkturbidity(string $RemarkTurbidity) Return the first Waterquality filtered by the RemarkTurbidity column
 * @method Waterquality findOneByRemarkoilsrefined(string $RemarkOilsRefined) Return the first Waterquality filtered by the RemarkOilsRefined column
 * @method Waterquality findOneByRemarkdyes(string $RemarkDyes) Return the first Waterquality filtered by the RemarkDyes column
 * @method Waterquality findOneByRemarkphenols(string $RemarkPhenols) Return the first Waterquality filtered by the RemarkPhenols column
 * @method Waterquality findOneByRemarksurfactants(string $RemarkSurfactants) Return the first Waterquality filtered by the RemarkSurfactants column
 * @method Waterquality findOneByRemarkphytoplankton(string $RemarkPhytoplankton) Return the first Waterquality filtered by the RemarkPhytoplankton column
 * @method Waterquality findOneByTs(string $TS) Return the first Waterquality filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Waterquality objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Waterquality objects filtered by the Speccode column
 * @method array findByDissolvedo2opt(string $DissolvedO2Opt) Return Waterquality objects filtered by the DissolvedO2Opt column
 * @method array findByDissolvedo2harm(string $DissolvedO2Harm) Return Waterquality objects filtered by the DissolvedO2Harm column
 * @method array findByOzoneopt(string $OzoneOpt) Return Waterquality objects filtered by the OzoneOpt column
 * @method array findByOzoneharm(string $OzoneHarm) Return Waterquality objects filtered by the OzoneHarm column
 * @method array findByCarbondioxideopt(string $CarbonDioxideOpt) Return Waterquality objects filtered by the CarbonDioxideOpt column
 * @method array findByCarbondioxideharm(string $CarbonDioxideHarm) Return Waterquality objects filtered by the CarbonDioxideHarm column
 * @method array findByPhopt(string $pHOpt) Return Waterquality objects filtered by the pHOpt column
 * @method array findByPhharm(string $pHHarm) Return Waterquality objects filtered by the pHHarm column
 * @method array findByAmmoniaopt(string $AmmoniaOpt) Return Waterquality objects filtered by the AmmoniaOpt column
 * @method array findByAmmoniaharm(string $AmmoniaHarm) Return Waterquality objects filtered by the AmmoniaHarm column
 * @method array findByNitriteopt(string $NitriteOpt) Return Waterquality objects filtered by the NitriteOpt column
 * @method array findByNitriteharm(string $NitriteHarm) Return Waterquality objects filtered by the NitriteHarm column
 * @method array findByNitrateopt(string $NitrateOpt) Return Waterquality objects filtered by the NitrateOpt column
 * @method array findByNitrateharm(string $NitrateHarm) Return Waterquality objects filtered by the NitrateHarm column
 * @method array findByNitrousacidopt(string $NitrousAcidOpt) Return Waterquality objects filtered by the NitrousAcidOpt column
 * @method array findByNitrousacidharm(string $NitrousAcidHarm) Return Waterquality objects filtered by the NitrousAcidHarm column
 * @method array findByChlorineopt(string $ChlorineOpt) Return Waterquality objects filtered by the ChlorineOpt column
 * @method array findByChlorineharm(string $ChlorineHarm) Return Waterquality objects filtered by the ChlorineHarm column
 * @method array findByChlorideopt(string $ChlorideOpt) Return Waterquality objects filtered by the ChlorideOpt column
 * @method array findByChlorideharm(string $ChlorideHarm) Return Waterquality objects filtered by the ChlorideHarm column
 * @method array findByHsulphateopt(string $HSulphateOpt) Return Waterquality objects filtered by the HSulphateOpt column
 * @method array findByHsulphateharm(string $HSulphateHarm) Return Waterquality objects filtered by the HSulphateHarm column
 * @method array findByZincopt(string $ZincOpt) Return Waterquality objects filtered by the ZincOpt column
 * @method array findByZincharm(string $ZincHarm) Return Waterquality objects filtered by the ZincHarm column
 * @method array findByCopperopt(string $CopperOpt) Return Waterquality objects filtered by the CopperOpt column
 * @method array findByCopperharm(string $CopperHarm) Return Waterquality objects filtered by the CopperHarm column
 * @method array findByIronopt(string $IronOpt) Return Waterquality objects filtered by the IronOpt column
 * @method array findByIronharm(string $IronHarm) Return Waterquality objects filtered by the IronHarm column
 * @method array findByLeadopt(string $LeadOpt) Return Waterquality objects filtered by the LeadOpt column
 * @method array findByLeadharm(string $LeadHarm) Return Waterquality objects filtered by the LeadHarm column
 * @method array findByMercuryopt(string $MercuryOpt) Return Waterquality objects filtered by the MercuryOpt column
 * @method array findByMercuryharm(string $MercuryHarm) Return Waterquality objects filtered by the MercuryHarm column
 * @method array findByCadmiumopt(string $CadmiumOpt) Return Waterquality objects filtered by the CadmiumOpt column
 * @method array findByCadmiumharm(string $CadmiumHarm) Return Waterquality objects filtered by the CadmiumHarm column
 * @method array findByNickelopt(string $NickelOpt) Return Waterquality objects filtered by the NickelOpt column
 * @method array findByNickelharm(string $NickelHarm) Return Waterquality objects filtered by the NickelHarm column
 * @method array findByChromiumopt(string $ChromiumOpt) Return Waterquality objects filtered by the ChromiumOpt column
 * @method array findByChromiumharm(string $ChromiumHarm) Return Waterquality objects filtered by the ChromiumHarm column
 * @method array findByManganeseopt(string $ManganeseOpt) Return Waterquality objects filtered by the ManganeseOpt column
 * @method array findByManganeseharm(string $ManganeseHarm) Return Waterquality objects filtered by the ManganeseHarm column
 * @method array findByArsenicopt(string $ArsenicOpt) Return Waterquality objects filtered by the ArsenicOpt column
 * @method array findByArsenicharm(string $ArsenicHarm) Return Waterquality objects filtered by the ArsenicHarm column
 * @method array findByAluminumopt(string $AluminumOpt) Return Waterquality objects filtered by the AluminumOpt column
 * @method array findByAluminumharm(string $AluminumHarm) Return Waterquality objects filtered by the AluminumHarm column
 * @method array findByCyanideopt(string $CyanideOpt) Return Waterquality objects filtered by the CyanideOpt column
 * @method array findByCyanideharm(string $CyanideHarm) Return Waterquality objects filtered by the CyanideHarm column
 * @method array findByPcbopt(string $PCBOpt) Return Waterquality objects filtered by the PCBOpt column
 * @method array findByPcbharm(string $PCBHarm) Return Waterquality objects filtered by the PCBHarm column
 * @method array findByPesticidesopt(string $PesticidesOpt) Return Waterquality objects filtered by the PesticidesOpt column
 * @method array findByPesticidesharm(string $PesticidesHarm) Return Waterquality objects filtered by the PesticidesHarm column
 * @method array findByTurbidityopt(string $TurbidityOpt) Return Waterquality objects filtered by the TurbidityOpt column
 * @method array findByTurbidityharm(string $TurbidityHarm) Return Waterquality objects filtered by the TurbidityHarm column
 * @method array findByOilsrefinedopt(string $OilsRefinedOpt) Return Waterquality objects filtered by the OilsRefinedOpt column
 * @method array findByOilsrefinedharm(string $OilsRefinedHarm) Return Waterquality objects filtered by the OilsRefinedHarm column
 * @method array findByDyesopt(string $DyesOpt) Return Waterquality objects filtered by the DyesOpt column
 * @method array findByDyesharm(string $DyesHarm) Return Waterquality objects filtered by the DyesHarm column
 * @method array findByPhenolsopt(string $PhenolsOpt) Return Waterquality objects filtered by the PhenolsOpt column
 * @method array findByPhenolsharm(string $PhenolsHarm) Return Waterquality objects filtered by the PhenolsHarm column
 * @method array findBySurfactantsopt(string $SurfactantsOpt) Return Waterquality objects filtered by the SurfactantsOpt column
 * @method array findBySurfactantsharm(string $SurfactantsHarm) Return Waterquality objects filtered by the SurfactantsHarm column
 * @method array findByPhytoplanktonopt(string $PhytoplanktonOpt) Return Waterquality objects filtered by the PhytoplanktonOpt column
 * @method array findByPhytoplanktonharm(string $PhytoplanktonHarm) Return Waterquality objects filtered by the PhytoplanktonHarm column
 * @method array findByRemarko2(string $RemarkO2) Return Waterquality objects filtered by the RemarkO2 column
 * @method array findByRemarko3(string $RemarkO3) Return Waterquality objects filtered by the RemarkO3 column
 * @method array findByRemarkco2(string $RemarkCO2) Return Waterquality objects filtered by the RemarkCO2 column
 * @method array findByRemarkph(string $RemarkpH) Return Waterquality objects filtered by the RemarkpH column
 * @method array findByRemarknh3(string $RemarkNH3) Return Waterquality objects filtered by the RemarkNH3 column
 * @method array findByRemarkno2(string $RemarkNO2) Return Waterquality objects filtered by the RemarkNO2 column
 * @method array findByRemarkno3(string $RemarkNO3) Return Waterquality objects filtered by the RemarkNO3 column
 * @method array findByRemarkhno2(string $RemarkHNO2) Return Waterquality objects filtered by the RemarkHNO2 column
 * @method array findByRemarkcl2(string $RemarkCL2) Return Waterquality objects filtered by the RemarkCL2 column
 * @method array findByRemarkcl(string $RemarkCL) Return Waterquality objects filtered by the RemarkCL column
 * @method array findByRemarkh2s(string $RemarkH2S) Return Waterquality objects filtered by the RemarkH2S column
 * @method array findByRemarkzinc(string $RemarkZinc) Return Waterquality objects filtered by the RemarkZinc column
 * @method array findByRemarkcopper(string $RemarkCopper) Return Waterquality objects filtered by the RemarkCopper column
 * @method array findByRemarkiron(string $RemarkIron) Return Waterquality objects filtered by the RemarkIron column
 * @method array findByRemarklead(string $RemarkLead) Return Waterquality objects filtered by the RemarkLead column
 * @method array findByRemarkmercury(string $RemarkMercury) Return Waterquality objects filtered by the RemarkMercury column
 * @method array findByRemarkcadmium(string $RemarkCadmium) Return Waterquality objects filtered by the RemarkCadmium column
 * @method array findByRemarknickel(string $RemarkNickel) Return Waterquality objects filtered by the RemarkNickel column
 * @method array findByRemarkchromium(string $RemarkChromium) Return Waterquality objects filtered by the RemarkChromium column
 * @method array findByRemarkmanganese(string $RemarkManganese) Return Waterquality objects filtered by the RemarkManganese column
 * @method array findByRemarkarsenic(string $RemarkArsenic) Return Waterquality objects filtered by the RemarkArsenic column
 * @method array findByRemarkaluminum(string $RemarkAluminum) Return Waterquality objects filtered by the RemarkAluminum column
 * @method array findByRemarkcyanide(string $RemarkCyanide) Return Waterquality objects filtered by the RemarkCyanide column
 * @method array findByRemarkpcb(string $RemarkPCB) Return Waterquality objects filtered by the RemarkPCB column
 * @method array findByRemarkpesticide(string $RemarkPesticide) Return Waterquality objects filtered by the RemarkPesticide column
 * @method array findByRemarkturbidity(string $RemarkTurbidity) Return Waterquality objects filtered by the RemarkTurbidity column
 * @method array findByRemarkoilsrefined(string $RemarkOilsRefined) Return Waterquality objects filtered by the RemarkOilsRefined column
 * @method array findByRemarkdyes(string $RemarkDyes) Return Waterquality objects filtered by the RemarkDyes column
 * @method array findByRemarkphenols(string $RemarkPhenols) Return Waterquality objects filtered by the RemarkPhenols column
 * @method array findByRemarksurfactants(string $RemarkSurfactants) Return Waterquality objects filtered by the RemarkSurfactants column
 * @method array findByRemarkphytoplankton(string $RemarkPhytoplankton) Return Waterquality objects filtered by the RemarkPhytoplankton column
 * @method array findByTs(string $TS) Return Waterquality objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseWaterqualityQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWaterqualityQuery object.
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
            $modelName = 'Waterquality';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WaterqualityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   WaterqualityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WaterqualityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WaterqualityQuery) {
            return $criteria;
        }
        $query = new WaterqualityQuery(null, null, $modelAlias);

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
     * @return   Waterquality|Waterquality[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WaterqualityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WaterqualityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Waterquality A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySpeccode($key, $con = null)
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
     * @return                 Waterquality A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `DissolvedO2Opt`, `DissolvedO2Harm`, `OzoneOpt`, `OzoneHarm`, `CarbonDioxideOpt`, `CarbonDioxideHarm`, `pHOpt`, `pHHarm`, `AmmoniaOpt`, `AmmoniaHarm`, `NitriteOpt`, `NitriteHarm`, `NitrateOpt`, `NitrateHarm`, `NitrousAcidOpt`, `NitrousAcidHarm`, `ChlorineOpt`, `ChlorineHarm`, `ChlorideOpt`, `ChlorideHarm`, `HSulphateOpt`, `HSulphateHarm`, `ZincOpt`, `ZincHarm`, `CopperOpt`, `CopperHarm`, `IronOpt`, `IronHarm`, `LeadOpt`, `LeadHarm`, `MercuryOpt`, `MercuryHarm`, `CadmiumOpt`, `CadmiumHarm`, `NickelOpt`, `NickelHarm`, `ChromiumOpt`, `ChromiumHarm`, `ManganeseOpt`, `ManganeseHarm`, `ArsenicOpt`, `ArsenicHarm`, `AluminumOpt`, `AluminumHarm`, `CyanideOpt`, `CyanideHarm`, `PCBOpt`, `PCBHarm`, `PesticidesOpt`, `PesticidesHarm`, `TurbidityOpt`, `TurbidityHarm`, `OilsRefinedOpt`, `OilsRefinedHarm`, `DyesOpt`, `DyesHarm`, `PhenolsOpt`, `PhenolsHarm`, `SurfactantsOpt`, `SurfactantsHarm`, `PhytoplanktonOpt`, `PhytoplanktonHarm`, `RemarkO2`, `RemarkO3`, `RemarkCO2`, `RemarkpH`, `RemarkNH3`, `RemarkNO2`, `RemarkNO3`, `RemarkHNO2`, `RemarkCL2`, `RemarkCL`, `RemarkH2S`, `RemarkZinc`, `RemarkCopper`, `RemarkIron`, `RemarkLead`, `RemarkMercury`, `RemarkCadmium`, `RemarkNickel`, `RemarkChromium`, `RemarkManganese`, `RemarkArsenic`, `RemarkAluminum`, `RemarkCyanide`, `RemarkPCB`, `RemarkPesticide`, `RemarkTurbidity`, `RemarkOilsRefined`, `RemarkDyes`, `RemarkPhenols`, `RemarkSurfactants`, `RemarkPhytoplankton`, `TS` FROM `waterquality` WHERE `Speccode` = :p0';
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
            $obj = new Waterquality();
            $obj->hydrate($row);
            WaterqualityPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Waterquality|Waterquality[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Waterquality[]|mixed the list of results, formatted by the current formatter
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
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WaterqualityPeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WaterqualityPeer::SPECCODE, $keys, Criteria::IN);
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
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(WaterqualityPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(WaterqualityPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(WaterqualityPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(WaterqualityPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the DissolvedO2Opt column
     *
     * Example usage:
     * <code>
     * $query->filterByDissolvedo2opt('fooValue');   // WHERE DissolvedO2Opt = 'fooValue'
     * $query->filterByDissolvedo2opt('%fooValue%'); // WHERE DissolvedO2Opt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dissolvedo2opt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByDissolvedo2opt($dissolvedo2opt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dissolvedo2opt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dissolvedo2opt)) {
                $dissolvedo2opt = str_replace('*', '%', $dissolvedo2opt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::DISSOLVEDO2OPT, $dissolvedo2opt, $comparison);
    }

    /**
     * Filter the query on the DissolvedO2Harm column
     *
     * Example usage:
     * <code>
     * $query->filterByDissolvedo2harm('fooValue');   // WHERE DissolvedO2Harm = 'fooValue'
     * $query->filterByDissolvedo2harm('%fooValue%'); // WHERE DissolvedO2Harm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dissolvedo2harm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByDissolvedo2harm($dissolvedo2harm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dissolvedo2harm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dissolvedo2harm)) {
                $dissolvedo2harm = str_replace('*', '%', $dissolvedo2harm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::DISSOLVEDO2HARM, $dissolvedo2harm, $comparison);
    }

    /**
     * Filter the query on the OzoneOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOzoneopt('fooValue');   // WHERE OzoneOpt = 'fooValue'
     * $query->filterByOzoneopt('%fooValue%'); // WHERE OzoneOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ozoneopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByOzoneopt($ozoneopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ozoneopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ozoneopt)) {
                $ozoneopt = str_replace('*', '%', $ozoneopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::OZONEOPT, $ozoneopt, $comparison);
    }

    /**
     * Filter the query on the OzoneHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByOzoneharm('fooValue');   // WHERE OzoneHarm = 'fooValue'
     * $query->filterByOzoneharm('%fooValue%'); // WHERE OzoneHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ozoneharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByOzoneharm($ozoneharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ozoneharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ozoneharm)) {
                $ozoneharm = str_replace('*', '%', $ozoneharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::OZONEHARM, $ozoneharm, $comparison);
    }

    /**
     * Filter the query on the CarbonDioxideOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByCarbondioxideopt('fooValue');   // WHERE CarbonDioxideOpt = 'fooValue'
     * $query->filterByCarbondioxideopt('%fooValue%'); // WHERE CarbonDioxideOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carbondioxideopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCarbondioxideopt($carbondioxideopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carbondioxideopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carbondioxideopt)) {
                $carbondioxideopt = str_replace('*', '%', $carbondioxideopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CARBONDIOXIDEOPT, $carbondioxideopt, $comparison);
    }

    /**
     * Filter the query on the CarbonDioxideHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByCarbondioxideharm('fooValue');   // WHERE CarbonDioxideHarm = 'fooValue'
     * $query->filterByCarbondioxideharm('%fooValue%'); // WHERE CarbonDioxideHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $carbondioxideharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCarbondioxideharm($carbondioxideharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($carbondioxideharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $carbondioxideharm)) {
                $carbondioxideharm = str_replace('*', '%', $carbondioxideharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CARBONDIOXIDEHARM, $carbondioxideharm, $comparison);
    }

    /**
     * Filter the query on the pHOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPhopt('fooValue');   // WHERE pHOpt = 'fooValue'
     * $query->filterByPhopt('%fooValue%'); // WHERE pHOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPhopt($phopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phopt)) {
                $phopt = str_replace('*', '%', $phopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PHOPT, $phopt, $comparison);
    }

    /**
     * Filter the query on the pHHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByPhharm('fooValue');   // WHERE pHHarm = 'fooValue'
     * $query->filterByPhharm('%fooValue%'); // WHERE pHHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPhharm($phharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phharm)) {
                $phharm = str_replace('*', '%', $phharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PHHARM, $phharm, $comparison);
    }

    /**
     * Filter the query on the AmmoniaOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByAmmoniaopt('fooValue');   // WHERE AmmoniaOpt = 'fooValue'
     * $query->filterByAmmoniaopt('%fooValue%'); // WHERE AmmoniaOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ammoniaopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByAmmoniaopt($ammoniaopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ammoniaopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ammoniaopt)) {
                $ammoniaopt = str_replace('*', '%', $ammoniaopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::AMMONIAOPT, $ammoniaopt, $comparison);
    }

    /**
     * Filter the query on the AmmoniaHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByAmmoniaharm('fooValue');   // WHERE AmmoniaHarm = 'fooValue'
     * $query->filterByAmmoniaharm('%fooValue%'); // WHERE AmmoniaHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ammoniaharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByAmmoniaharm($ammoniaharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ammoniaharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ammoniaharm)) {
                $ammoniaharm = str_replace('*', '%', $ammoniaharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::AMMONIAHARM, $ammoniaharm, $comparison);
    }

    /**
     * Filter the query on the NitriteOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByNitriteopt('fooValue');   // WHERE NitriteOpt = 'fooValue'
     * $query->filterByNitriteopt('%fooValue%'); // WHERE NitriteOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitriteopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNitriteopt($nitriteopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitriteopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitriteopt)) {
                $nitriteopt = str_replace('*', '%', $nitriteopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NITRITEOPT, $nitriteopt, $comparison);
    }

    /**
     * Filter the query on the NitriteHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByNitriteharm('fooValue');   // WHERE NitriteHarm = 'fooValue'
     * $query->filterByNitriteharm('%fooValue%'); // WHERE NitriteHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitriteharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNitriteharm($nitriteharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitriteharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitriteharm)) {
                $nitriteharm = str_replace('*', '%', $nitriteharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NITRITEHARM, $nitriteharm, $comparison);
    }

    /**
     * Filter the query on the NitrateOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrateopt('fooValue');   // WHERE NitrateOpt = 'fooValue'
     * $query->filterByNitrateopt('%fooValue%'); // WHERE NitrateOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitrateopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNitrateopt($nitrateopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitrateopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitrateopt)) {
                $nitrateopt = str_replace('*', '%', $nitrateopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NITRATEOPT, $nitrateopt, $comparison);
    }

    /**
     * Filter the query on the NitrateHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrateharm('fooValue');   // WHERE NitrateHarm = 'fooValue'
     * $query->filterByNitrateharm('%fooValue%'); // WHERE NitrateHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitrateharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNitrateharm($nitrateharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitrateharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitrateharm)) {
                $nitrateharm = str_replace('*', '%', $nitrateharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NITRATEHARM, $nitrateharm, $comparison);
    }

    /**
     * Filter the query on the NitrousAcidOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrousacidopt('fooValue');   // WHERE NitrousAcidOpt = 'fooValue'
     * $query->filterByNitrousacidopt('%fooValue%'); // WHERE NitrousAcidOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitrousacidopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNitrousacidopt($nitrousacidopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitrousacidopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitrousacidopt)) {
                $nitrousacidopt = str_replace('*', '%', $nitrousacidopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NITROUSACIDOPT, $nitrousacidopt, $comparison);
    }

    /**
     * Filter the query on the NitrousAcidHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByNitrousacidharm('fooValue');   // WHERE NitrousAcidHarm = 'fooValue'
     * $query->filterByNitrousacidharm('%fooValue%'); // WHERE NitrousAcidHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nitrousacidharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNitrousacidharm($nitrousacidharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nitrousacidharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nitrousacidharm)) {
                $nitrousacidharm = str_replace('*', '%', $nitrousacidharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NITROUSACIDHARM, $nitrousacidharm, $comparison);
    }

    /**
     * Filter the query on the ChlorineOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByChlorineopt('fooValue');   // WHERE ChlorineOpt = 'fooValue'
     * $query->filterByChlorineopt('%fooValue%'); // WHERE ChlorineOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chlorineopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByChlorineopt($chlorineopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chlorineopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chlorineopt)) {
                $chlorineopt = str_replace('*', '%', $chlorineopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CHLORINEOPT, $chlorineopt, $comparison);
    }

    /**
     * Filter the query on the ChlorineHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByChlorineharm('fooValue');   // WHERE ChlorineHarm = 'fooValue'
     * $query->filterByChlorineharm('%fooValue%'); // WHERE ChlorineHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chlorineharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByChlorineharm($chlorineharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chlorineharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chlorineharm)) {
                $chlorineharm = str_replace('*', '%', $chlorineharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CHLORINEHARM, $chlorineharm, $comparison);
    }

    /**
     * Filter the query on the ChlorideOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByChlorideopt('fooValue');   // WHERE ChlorideOpt = 'fooValue'
     * $query->filterByChlorideopt('%fooValue%'); // WHERE ChlorideOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chlorideopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByChlorideopt($chlorideopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chlorideopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chlorideopt)) {
                $chlorideopt = str_replace('*', '%', $chlorideopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CHLORIDEOPT, $chlorideopt, $comparison);
    }

    /**
     * Filter the query on the ChlorideHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByChlorideharm('fooValue');   // WHERE ChlorideHarm = 'fooValue'
     * $query->filterByChlorideharm('%fooValue%'); // WHERE ChlorideHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chlorideharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByChlorideharm($chlorideharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chlorideharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chlorideharm)) {
                $chlorideharm = str_replace('*', '%', $chlorideharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CHLORIDEHARM, $chlorideharm, $comparison);
    }

    /**
     * Filter the query on the HSulphateOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByHsulphateopt('fooValue');   // WHERE HSulphateOpt = 'fooValue'
     * $query->filterByHsulphateopt('%fooValue%'); // WHERE HSulphateOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hsulphateopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByHsulphateopt($hsulphateopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hsulphateopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hsulphateopt)) {
                $hsulphateopt = str_replace('*', '%', $hsulphateopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::HSULPHATEOPT, $hsulphateopt, $comparison);
    }

    /**
     * Filter the query on the HSulphateHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByHsulphateharm('fooValue');   // WHERE HSulphateHarm = 'fooValue'
     * $query->filterByHsulphateharm('%fooValue%'); // WHERE HSulphateHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hsulphateharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByHsulphateharm($hsulphateharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hsulphateharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hsulphateharm)) {
                $hsulphateharm = str_replace('*', '%', $hsulphateharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::HSULPHATEHARM, $hsulphateharm, $comparison);
    }

    /**
     * Filter the query on the ZincOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByZincopt('fooValue');   // WHERE ZincOpt = 'fooValue'
     * $query->filterByZincopt('%fooValue%'); // WHERE ZincOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zincopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByZincopt($zincopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zincopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zincopt)) {
                $zincopt = str_replace('*', '%', $zincopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::ZINCOPT, $zincopt, $comparison);
    }

    /**
     * Filter the query on the ZincHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByZincharm('fooValue');   // WHERE ZincHarm = 'fooValue'
     * $query->filterByZincharm('%fooValue%'); // WHERE ZincHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zincharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByZincharm($zincharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zincharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zincharm)) {
                $zincharm = str_replace('*', '%', $zincharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::ZINCHARM, $zincharm, $comparison);
    }

    /**
     * Filter the query on the CopperOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByCopperopt('fooValue');   // WHERE CopperOpt = 'fooValue'
     * $query->filterByCopperopt('%fooValue%'); // WHERE CopperOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $copperopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCopperopt($copperopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($copperopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $copperopt)) {
                $copperopt = str_replace('*', '%', $copperopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::COPPEROPT, $copperopt, $comparison);
    }

    /**
     * Filter the query on the CopperHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByCopperharm('fooValue');   // WHERE CopperHarm = 'fooValue'
     * $query->filterByCopperharm('%fooValue%'); // WHERE CopperHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $copperharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCopperharm($copperharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($copperharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $copperharm)) {
                $copperharm = str_replace('*', '%', $copperharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::COPPERHARM, $copperharm, $comparison);
    }

    /**
     * Filter the query on the IronOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByIronopt('fooValue');   // WHERE IronOpt = 'fooValue'
     * $query->filterByIronopt('%fooValue%'); // WHERE IronOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ironopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByIronopt($ironopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ironopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ironopt)) {
                $ironopt = str_replace('*', '%', $ironopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::IRONOPT, $ironopt, $comparison);
    }

    /**
     * Filter the query on the IronHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByIronharm('fooValue');   // WHERE IronHarm = 'fooValue'
     * $query->filterByIronharm('%fooValue%'); // WHERE IronHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ironharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByIronharm($ironharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ironharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ironharm)) {
                $ironharm = str_replace('*', '%', $ironharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::IRONHARM, $ironharm, $comparison);
    }

    /**
     * Filter the query on the LeadOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByLeadopt('fooValue');   // WHERE LeadOpt = 'fooValue'
     * $query->filterByLeadopt('%fooValue%'); // WHERE LeadOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leadopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByLeadopt($leadopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leadopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $leadopt)) {
                $leadopt = str_replace('*', '%', $leadopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::LEADOPT, $leadopt, $comparison);
    }

    /**
     * Filter the query on the LeadHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByLeadharm('fooValue');   // WHERE LeadHarm = 'fooValue'
     * $query->filterByLeadharm('%fooValue%'); // WHERE LeadHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leadharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByLeadharm($leadharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leadharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $leadharm)) {
                $leadharm = str_replace('*', '%', $leadharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::LEADHARM, $leadharm, $comparison);
    }

    /**
     * Filter the query on the MercuryOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByMercuryopt('fooValue');   // WHERE MercuryOpt = 'fooValue'
     * $query->filterByMercuryopt('%fooValue%'); // WHERE MercuryOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mercuryopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByMercuryopt($mercuryopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mercuryopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mercuryopt)) {
                $mercuryopt = str_replace('*', '%', $mercuryopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::MERCURYOPT, $mercuryopt, $comparison);
    }

    /**
     * Filter the query on the MercuryHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByMercuryharm('fooValue');   // WHERE MercuryHarm = 'fooValue'
     * $query->filterByMercuryharm('%fooValue%'); // WHERE MercuryHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mercuryharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByMercuryharm($mercuryharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mercuryharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mercuryharm)) {
                $mercuryharm = str_replace('*', '%', $mercuryharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::MERCURYHARM, $mercuryharm, $comparison);
    }

    /**
     * Filter the query on the CadmiumOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByCadmiumopt('fooValue');   // WHERE CadmiumOpt = 'fooValue'
     * $query->filterByCadmiumopt('%fooValue%'); // WHERE CadmiumOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cadmiumopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCadmiumopt($cadmiumopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cadmiumopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cadmiumopt)) {
                $cadmiumopt = str_replace('*', '%', $cadmiumopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CADMIUMOPT, $cadmiumopt, $comparison);
    }

    /**
     * Filter the query on the CadmiumHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByCadmiumharm('fooValue');   // WHERE CadmiumHarm = 'fooValue'
     * $query->filterByCadmiumharm('%fooValue%'); // WHERE CadmiumHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cadmiumharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCadmiumharm($cadmiumharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cadmiumharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cadmiumharm)) {
                $cadmiumharm = str_replace('*', '%', $cadmiumharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CADMIUMHARM, $cadmiumharm, $comparison);
    }

    /**
     * Filter the query on the NickelOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByNickelopt('fooValue');   // WHERE NickelOpt = 'fooValue'
     * $query->filterByNickelopt('%fooValue%'); // WHERE NickelOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nickelopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNickelopt($nickelopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nickelopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nickelopt)) {
                $nickelopt = str_replace('*', '%', $nickelopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NICKELOPT, $nickelopt, $comparison);
    }

    /**
     * Filter the query on the NickelHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByNickelharm('fooValue');   // WHERE NickelHarm = 'fooValue'
     * $query->filterByNickelharm('%fooValue%'); // WHERE NickelHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nickelharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByNickelharm($nickelharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nickelharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nickelharm)) {
                $nickelharm = str_replace('*', '%', $nickelharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::NICKELHARM, $nickelharm, $comparison);
    }

    /**
     * Filter the query on the ChromiumOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByChromiumopt('fooValue');   // WHERE ChromiumOpt = 'fooValue'
     * $query->filterByChromiumopt('%fooValue%'); // WHERE ChromiumOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chromiumopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByChromiumopt($chromiumopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chromiumopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chromiumopt)) {
                $chromiumopt = str_replace('*', '%', $chromiumopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CHROMIUMOPT, $chromiumopt, $comparison);
    }

    /**
     * Filter the query on the ChromiumHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByChromiumharm('fooValue');   // WHERE ChromiumHarm = 'fooValue'
     * $query->filterByChromiumharm('%fooValue%'); // WHERE ChromiumHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chromiumharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByChromiumharm($chromiumharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chromiumharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chromiumharm)) {
                $chromiumharm = str_replace('*', '%', $chromiumharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CHROMIUMHARM, $chromiumharm, $comparison);
    }

    /**
     * Filter the query on the ManganeseOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByManganeseopt('fooValue');   // WHERE ManganeseOpt = 'fooValue'
     * $query->filterByManganeseopt('%fooValue%'); // WHERE ManganeseOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manganeseopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByManganeseopt($manganeseopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manganeseopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manganeseopt)) {
                $manganeseopt = str_replace('*', '%', $manganeseopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::MANGANESEOPT, $manganeseopt, $comparison);
    }

    /**
     * Filter the query on the ManganeseHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByManganeseharm('fooValue');   // WHERE ManganeseHarm = 'fooValue'
     * $query->filterByManganeseharm('%fooValue%'); // WHERE ManganeseHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $manganeseharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByManganeseharm($manganeseharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($manganeseharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $manganeseharm)) {
                $manganeseharm = str_replace('*', '%', $manganeseharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::MANGANESEHARM, $manganeseharm, $comparison);
    }

    /**
     * Filter the query on the ArsenicOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByArsenicopt('fooValue');   // WHERE ArsenicOpt = 'fooValue'
     * $query->filterByArsenicopt('%fooValue%'); // WHERE ArsenicOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsenicopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByArsenicopt($arsenicopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsenicopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $arsenicopt)) {
                $arsenicopt = str_replace('*', '%', $arsenicopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::ARSENICOPT, $arsenicopt, $comparison);
    }

    /**
     * Filter the query on the ArsenicHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByArsenicharm('fooValue');   // WHERE ArsenicHarm = 'fooValue'
     * $query->filterByArsenicharm('%fooValue%'); // WHERE ArsenicHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsenicharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByArsenicharm($arsenicharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsenicharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $arsenicharm)) {
                $arsenicharm = str_replace('*', '%', $arsenicharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::ARSENICHARM, $arsenicharm, $comparison);
    }

    /**
     * Filter the query on the AluminumOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByAluminumopt('fooValue');   // WHERE AluminumOpt = 'fooValue'
     * $query->filterByAluminumopt('%fooValue%'); // WHERE AluminumOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aluminumopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByAluminumopt($aluminumopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aluminumopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aluminumopt)) {
                $aluminumopt = str_replace('*', '%', $aluminumopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::ALUMINUMOPT, $aluminumopt, $comparison);
    }

    /**
     * Filter the query on the AluminumHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByAluminumharm('fooValue');   // WHERE AluminumHarm = 'fooValue'
     * $query->filterByAluminumharm('%fooValue%'); // WHERE AluminumHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aluminumharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByAluminumharm($aluminumharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aluminumharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aluminumharm)) {
                $aluminumharm = str_replace('*', '%', $aluminumharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::ALUMINUMHARM, $aluminumharm, $comparison);
    }

    /**
     * Filter the query on the CyanideOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByCyanideopt('fooValue');   // WHERE CyanideOpt = 'fooValue'
     * $query->filterByCyanideopt('%fooValue%'); // WHERE CyanideOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cyanideopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCyanideopt($cyanideopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cyanideopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cyanideopt)) {
                $cyanideopt = str_replace('*', '%', $cyanideopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CYANIDEOPT, $cyanideopt, $comparison);
    }

    /**
     * Filter the query on the CyanideHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByCyanideharm('fooValue');   // WHERE CyanideHarm = 'fooValue'
     * $query->filterByCyanideharm('%fooValue%'); // WHERE CyanideHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cyanideharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByCyanideharm($cyanideharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cyanideharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cyanideharm)) {
                $cyanideharm = str_replace('*', '%', $cyanideharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::CYANIDEHARM, $cyanideharm, $comparison);
    }

    /**
     * Filter the query on the PCBOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPcbopt('fooValue');   // WHERE PCBOpt = 'fooValue'
     * $query->filterByPcbopt('%fooValue%'); // WHERE PCBOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pcbopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPcbopt($pcbopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pcbopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pcbopt)) {
                $pcbopt = str_replace('*', '%', $pcbopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PCBOPT, $pcbopt, $comparison);
    }

    /**
     * Filter the query on the PCBHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByPcbharm('fooValue');   // WHERE PCBHarm = 'fooValue'
     * $query->filterByPcbharm('%fooValue%'); // WHERE PCBHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pcbharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPcbharm($pcbharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pcbharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pcbharm)) {
                $pcbharm = str_replace('*', '%', $pcbharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PCBHARM, $pcbharm, $comparison);
    }

    /**
     * Filter the query on the PesticidesOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPesticidesopt('fooValue');   // WHERE PesticidesOpt = 'fooValue'
     * $query->filterByPesticidesopt('%fooValue%'); // WHERE PesticidesOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pesticidesopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPesticidesopt($pesticidesopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pesticidesopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pesticidesopt)) {
                $pesticidesopt = str_replace('*', '%', $pesticidesopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PESTICIDESOPT, $pesticidesopt, $comparison);
    }

    /**
     * Filter the query on the PesticidesHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByPesticidesharm('fooValue');   // WHERE PesticidesHarm = 'fooValue'
     * $query->filterByPesticidesharm('%fooValue%'); // WHERE PesticidesHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pesticidesharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPesticidesharm($pesticidesharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pesticidesharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pesticidesharm)) {
                $pesticidesharm = str_replace('*', '%', $pesticidesharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PESTICIDESHARM, $pesticidesharm, $comparison);
    }

    /**
     * Filter the query on the TurbidityOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByTurbidityopt('fooValue');   // WHERE TurbidityOpt = 'fooValue'
     * $query->filterByTurbidityopt('%fooValue%'); // WHERE TurbidityOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $turbidityopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByTurbidityopt($turbidityopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($turbidityopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $turbidityopt)) {
                $turbidityopt = str_replace('*', '%', $turbidityopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::TURBIDITYOPT, $turbidityopt, $comparison);
    }

    /**
     * Filter the query on the TurbidityHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByTurbidityharm('fooValue');   // WHERE TurbidityHarm = 'fooValue'
     * $query->filterByTurbidityharm('%fooValue%'); // WHERE TurbidityHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $turbidityharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByTurbidityharm($turbidityharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($turbidityharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $turbidityharm)) {
                $turbidityharm = str_replace('*', '%', $turbidityharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::TURBIDITYHARM, $turbidityharm, $comparison);
    }

    /**
     * Filter the query on the OilsRefinedOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOilsrefinedopt('fooValue');   // WHERE OilsRefinedOpt = 'fooValue'
     * $query->filterByOilsrefinedopt('%fooValue%'); // WHERE OilsRefinedOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oilsrefinedopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByOilsrefinedopt($oilsrefinedopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oilsrefinedopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oilsrefinedopt)) {
                $oilsrefinedopt = str_replace('*', '%', $oilsrefinedopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::OILSREFINEDOPT, $oilsrefinedopt, $comparison);
    }

    /**
     * Filter the query on the OilsRefinedHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByOilsrefinedharm('fooValue');   // WHERE OilsRefinedHarm = 'fooValue'
     * $query->filterByOilsrefinedharm('%fooValue%'); // WHERE OilsRefinedHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oilsrefinedharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByOilsrefinedharm($oilsrefinedharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oilsrefinedharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oilsrefinedharm)) {
                $oilsrefinedharm = str_replace('*', '%', $oilsrefinedharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::OILSREFINEDHARM, $oilsrefinedharm, $comparison);
    }

    /**
     * Filter the query on the DyesOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByDyesopt('fooValue');   // WHERE DyesOpt = 'fooValue'
     * $query->filterByDyesopt('%fooValue%'); // WHERE DyesOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dyesopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByDyesopt($dyesopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dyesopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dyesopt)) {
                $dyesopt = str_replace('*', '%', $dyesopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::DYESOPT, $dyesopt, $comparison);
    }

    /**
     * Filter the query on the DyesHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByDyesharm('fooValue');   // WHERE DyesHarm = 'fooValue'
     * $query->filterByDyesharm('%fooValue%'); // WHERE DyesHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dyesharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByDyesharm($dyesharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dyesharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dyesharm)) {
                $dyesharm = str_replace('*', '%', $dyesharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::DYESHARM, $dyesharm, $comparison);
    }

    /**
     * Filter the query on the PhenolsOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPhenolsopt('fooValue');   // WHERE PhenolsOpt = 'fooValue'
     * $query->filterByPhenolsopt('%fooValue%'); // WHERE PhenolsOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phenolsopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPhenolsopt($phenolsopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phenolsopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phenolsopt)) {
                $phenolsopt = str_replace('*', '%', $phenolsopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PHENOLSOPT, $phenolsopt, $comparison);
    }

    /**
     * Filter the query on the PhenolsHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByPhenolsharm('fooValue');   // WHERE PhenolsHarm = 'fooValue'
     * $query->filterByPhenolsharm('%fooValue%'); // WHERE PhenolsHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phenolsharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPhenolsharm($phenolsharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phenolsharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phenolsharm)) {
                $phenolsharm = str_replace('*', '%', $phenolsharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PHENOLSHARM, $phenolsharm, $comparison);
    }

    /**
     * Filter the query on the SurfactantsOpt column
     *
     * Example usage:
     * <code>
     * $query->filterBySurfactantsopt('fooValue');   // WHERE SurfactantsOpt = 'fooValue'
     * $query->filterBySurfactantsopt('%fooValue%'); // WHERE SurfactantsOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surfactantsopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterBySurfactantsopt($surfactantsopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surfactantsopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surfactantsopt)) {
                $surfactantsopt = str_replace('*', '%', $surfactantsopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::SURFACTANTSOPT, $surfactantsopt, $comparison);
    }

    /**
     * Filter the query on the SurfactantsHarm column
     *
     * Example usage:
     * <code>
     * $query->filterBySurfactantsharm('fooValue');   // WHERE SurfactantsHarm = 'fooValue'
     * $query->filterBySurfactantsharm('%fooValue%'); // WHERE SurfactantsHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surfactantsharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterBySurfactantsharm($surfactantsharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surfactantsharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surfactantsharm)) {
                $surfactantsharm = str_replace('*', '%', $surfactantsharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::SURFACTANTSHARM, $surfactantsharm, $comparison);
    }

    /**
     * Filter the query on the PhytoplanktonOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPhytoplanktonopt('fooValue');   // WHERE PhytoplanktonOpt = 'fooValue'
     * $query->filterByPhytoplanktonopt('%fooValue%'); // WHERE PhytoplanktonOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phytoplanktonopt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPhytoplanktonopt($phytoplanktonopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phytoplanktonopt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phytoplanktonopt)) {
                $phytoplanktonopt = str_replace('*', '%', $phytoplanktonopt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PHYTOPLANKTONOPT, $phytoplanktonopt, $comparison);
    }

    /**
     * Filter the query on the PhytoplanktonHarm column
     *
     * Example usage:
     * <code>
     * $query->filterByPhytoplanktonharm('fooValue');   // WHERE PhytoplanktonHarm = 'fooValue'
     * $query->filterByPhytoplanktonharm('%fooValue%'); // WHERE PhytoplanktonHarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phytoplanktonharm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByPhytoplanktonharm($phytoplanktonharm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phytoplanktonharm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $phytoplanktonharm)) {
                $phytoplanktonharm = str_replace('*', '%', $phytoplanktonharm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::PHYTOPLANKTONHARM, $phytoplanktonharm, $comparison);
    }

    /**
     * Filter the query on the RemarkO2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarko2('fooValue');   // WHERE RemarkO2 = 'fooValue'
     * $query->filterByRemarko2('%fooValue%'); // WHERE RemarkO2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarko2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarko2($remarko2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarko2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarko2)) {
                $remarko2 = str_replace('*', '%', $remarko2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKO2, $remarko2, $comparison);
    }

    /**
     * Filter the query on the RemarkO3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarko3('fooValue');   // WHERE RemarkO3 = 'fooValue'
     * $query->filterByRemarko3('%fooValue%'); // WHERE RemarkO3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarko3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarko3($remarko3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarko3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarko3)) {
                $remarko3 = str_replace('*', '%', $remarko3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKO3, $remarko3, $comparison);
    }

    /**
     * Filter the query on the RemarkCO2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkco2('fooValue');   // WHERE RemarkCO2 = 'fooValue'
     * $query->filterByRemarkco2('%fooValue%'); // WHERE RemarkCO2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkco2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkco2($remarkco2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkco2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkco2)) {
                $remarkco2 = str_replace('*', '%', $remarkco2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCO2, $remarkco2, $comparison);
    }

    /**
     * Filter the query on the RemarkpH column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkph('fooValue');   // WHERE RemarkpH = 'fooValue'
     * $query->filterByRemarkph('%fooValue%'); // WHERE RemarkpH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkph The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkph($remarkph = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkph)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkph)) {
                $remarkph = str_replace('*', '%', $remarkph);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKPH, $remarkph, $comparison);
    }

    /**
     * Filter the query on the RemarkNH3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarknh3('fooValue');   // WHERE RemarkNH3 = 'fooValue'
     * $query->filterByRemarknh3('%fooValue%'); // WHERE RemarkNH3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarknh3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarknh3($remarknh3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarknh3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarknh3)) {
                $remarknh3 = str_replace('*', '%', $remarknh3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKNH3, $remarknh3, $comparison);
    }

    /**
     * Filter the query on the RemarkNO2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkno2('fooValue');   // WHERE RemarkNO2 = 'fooValue'
     * $query->filterByRemarkno2('%fooValue%'); // WHERE RemarkNO2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkno2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkno2($remarkno2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkno2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkno2)) {
                $remarkno2 = str_replace('*', '%', $remarkno2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKNO2, $remarkno2, $comparison);
    }

    /**
     * Filter the query on the RemarkNO3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkno3('fooValue');   // WHERE RemarkNO3 = 'fooValue'
     * $query->filterByRemarkno3('%fooValue%'); // WHERE RemarkNO3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkno3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkno3($remarkno3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkno3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkno3)) {
                $remarkno3 = str_replace('*', '%', $remarkno3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKNO3, $remarkno3, $comparison);
    }

    /**
     * Filter the query on the RemarkHNO2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkhno2('fooValue');   // WHERE RemarkHNO2 = 'fooValue'
     * $query->filterByRemarkhno2('%fooValue%'); // WHERE RemarkHNO2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkhno2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkhno2($remarkhno2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkhno2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkhno2)) {
                $remarkhno2 = str_replace('*', '%', $remarkhno2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKHNO2, $remarkhno2, $comparison);
    }

    /**
     * Filter the query on the RemarkCL2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkcl2('fooValue');   // WHERE RemarkCL2 = 'fooValue'
     * $query->filterByRemarkcl2('%fooValue%'); // WHERE RemarkCL2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkcl2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkcl2($remarkcl2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkcl2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkcl2)) {
                $remarkcl2 = str_replace('*', '%', $remarkcl2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCL2, $remarkcl2, $comparison);
    }

    /**
     * Filter the query on the RemarkCL column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkcl('fooValue');   // WHERE RemarkCL = 'fooValue'
     * $query->filterByRemarkcl('%fooValue%'); // WHERE RemarkCL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkcl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkcl($remarkcl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkcl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkcl)) {
                $remarkcl = str_replace('*', '%', $remarkcl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCL, $remarkcl, $comparison);
    }

    /**
     * Filter the query on the RemarkH2S column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkh2s('fooValue');   // WHERE RemarkH2S = 'fooValue'
     * $query->filterByRemarkh2s('%fooValue%'); // WHERE RemarkH2S LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkh2s The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkh2s($remarkh2s = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkh2s)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkh2s)) {
                $remarkh2s = str_replace('*', '%', $remarkh2s);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKH2S, $remarkh2s, $comparison);
    }

    /**
     * Filter the query on the RemarkZinc column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkzinc('fooValue');   // WHERE RemarkZinc = 'fooValue'
     * $query->filterByRemarkzinc('%fooValue%'); // WHERE RemarkZinc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkzinc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkzinc($remarkzinc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkzinc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkzinc)) {
                $remarkzinc = str_replace('*', '%', $remarkzinc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKZINC, $remarkzinc, $comparison);
    }

    /**
     * Filter the query on the RemarkCopper column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkcopper('fooValue');   // WHERE RemarkCopper = 'fooValue'
     * $query->filterByRemarkcopper('%fooValue%'); // WHERE RemarkCopper LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkcopper The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkcopper($remarkcopper = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkcopper)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkcopper)) {
                $remarkcopper = str_replace('*', '%', $remarkcopper);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCOPPER, $remarkcopper, $comparison);
    }

    /**
     * Filter the query on the RemarkIron column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkiron('fooValue');   // WHERE RemarkIron = 'fooValue'
     * $query->filterByRemarkiron('%fooValue%'); // WHERE RemarkIron LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkiron The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkiron($remarkiron = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkiron)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkiron)) {
                $remarkiron = str_replace('*', '%', $remarkiron);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKIRON, $remarkiron, $comparison);
    }

    /**
     * Filter the query on the RemarkLead column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarklead('fooValue');   // WHERE RemarkLead = 'fooValue'
     * $query->filterByRemarklead('%fooValue%'); // WHERE RemarkLead LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarklead The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarklead($remarklead = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarklead)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarklead)) {
                $remarklead = str_replace('*', '%', $remarklead);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKLEAD, $remarklead, $comparison);
    }

    /**
     * Filter the query on the RemarkMercury column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkmercury('fooValue');   // WHERE RemarkMercury = 'fooValue'
     * $query->filterByRemarkmercury('%fooValue%'); // WHERE RemarkMercury LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkmercury The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkmercury($remarkmercury = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkmercury)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkmercury)) {
                $remarkmercury = str_replace('*', '%', $remarkmercury);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKMERCURY, $remarkmercury, $comparison);
    }

    /**
     * Filter the query on the RemarkCadmium column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkcadmium('fooValue');   // WHERE RemarkCadmium = 'fooValue'
     * $query->filterByRemarkcadmium('%fooValue%'); // WHERE RemarkCadmium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkcadmium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkcadmium($remarkcadmium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkcadmium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkcadmium)) {
                $remarkcadmium = str_replace('*', '%', $remarkcadmium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCADMIUM, $remarkcadmium, $comparison);
    }

    /**
     * Filter the query on the RemarkNickel column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarknickel('fooValue');   // WHERE RemarkNickel = 'fooValue'
     * $query->filterByRemarknickel('%fooValue%'); // WHERE RemarkNickel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarknickel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarknickel($remarknickel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarknickel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarknickel)) {
                $remarknickel = str_replace('*', '%', $remarknickel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKNICKEL, $remarknickel, $comparison);
    }

    /**
     * Filter the query on the RemarkChromium column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkchromium('fooValue');   // WHERE RemarkChromium = 'fooValue'
     * $query->filterByRemarkchromium('%fooValue%'); // WHERE RemarkChromium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkchromium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkchromium($remarkchromium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkchromium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkchromium)) {
                $remarkchromium = str_replace('*', '%', $remarkchromium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCHROMIUM, $remarkchromium, $comparison);
    }

    /**
     * Filter the query on the RemarkManganese column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkmanganese('fooValue');   // WHERE RemarkManganese = 'fooValue'
     * $query->filterByRemarkmanganese('%fooValue%'); // WHERE RemarkManganese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkmanganese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkmanganese($remarkmanganese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkmanganese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkmanganese)) {
                $remarkmanganese = str_replace('*', '%', $remarkmanganese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKMANGANESE, $remarkmanganese, $comparison);
    }

    /**
     * Filter the query on the RemarkArsenic column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkarsenic('fooValue');   // WHERE RemarkArsenic = 'fooValue'
     * $query->filterByRemarkarsenic('%fooValue%'); // WHERE RemarkArsenic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkarsenic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkarsenic($remarkarsenic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkarsenic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkarsenic)) {
                $remarkarsenic = str_replace('*', '%', $remarkarsenic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKARSENIC, $remarkarsenic, $comparison);
    }

    /**
     * Filter the query on the RemarkAluminum column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkaluminum('fooValue');   // WHERE RemarkAluminum = 'fooValue'
     * $query->filterByRemarkaluminum('%fooValue%'); // WHERE RemarkAluminum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkaluminum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkaluminum($remarkaluminum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkaluminum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkaluminum)) {
                $remarkaluminum = str_replace('*', '%', $remarkaluminum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKALUMINUM, $remarkaluminum, $comparison);
    }

    /**
     * Filter the query on the RemarkCyanide column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkcyanide('fooValue');   // WHERE RemarkCyanide = 'fooValue'
     * $query->filterByRemarkcyanide('%fooValue%'); // WHERE RemarkCyanide LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkcyanide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkcyanide($remarkcyanide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkcyanide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkcyanide)) {
                $remarkcyanide = str_replace('*', '%', $remarkcyanide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKCYANIDE, $remarkcyanide, $comparison);
    }

    /**
     * Filter the query on the RemarkPCB column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkpcb('fooValue');   // WHERE RemarkPCB = 'fooValue'
     * $query->filterByRemarkpcb('%fooValue%'); // WHERE RemarkPCB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkpcb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkpcb($remarkpcb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkpcb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkpcb)) {
                $remarkpcb = str_replace('*', '%', $remarkpcb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKPCB, $remarkpcb, $comparison);
    }

    /**
     * Filter the query on the RemarkPesticide column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkpesticide('fooValue');   // WHERE RemarkPesticide = 'fooValue'
     * $query->filterByRemarkpesticide('%fooValue%'); // WHERE RemarkPesticide LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkpesticide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkpesticide($remarkpesticide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkpesticide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkpesticide)) {
                $remarkpesticide = str_replace('*', '%', $remarkpesticide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKPESTICIDE, $remarkpesticide, $comparison);
    }

    /**
     * Filter the query on the RemarkTurbidity column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkturbidity('fooValue');   // WHERE RemarkTurbidity = 'fooValue'
     * $query->filterByRemarkturbidity('%fooValue%'); // WHERE RemarkTurbidity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkturbidity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkturbidity($remarkturbidity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkturbidity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkturbidity)) {
                $remarkturbidity = str_replace('*', '%', $remarkturbidity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKTURBIDITY, $remarkturbidity, $comparison);
    }

    /**
     * Filter the query on the RemarkOilsRefined column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkoilsrefined('fooValue');   // WHERE RemarkOilsRefined = 'fooValue'
     * $query->filterByRemarkoilsrefined('%fooValue%'); // WHERE RemarkOilsRefined LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkoilsrefined The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkoilsrefined($remarkoilsrefined = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkoilsrefined)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkoilsrefined)) {
                $remarkoilsrefined = str_replace('*', '%', $remarkoilsrefined);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKOILSREFINED, $remarkoilsrefined, $comparison);
    }

    /**
     * Filter the query on the RemarkDyes column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkdyes('fooValue');   // WHERE RemarkDyes = 'fooValue'
     * $query->filterByRemarkdyes('%fooValue%'); // WHERE RemarkDyes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkdyes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkdyes($remarkdyes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkdyes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkdyes)) {
                $remarkdyes = str_replace('*', '%', $remarkdyes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKDYES, $remarkdyes, $comparison);
    }

    /**
     * Filter the query on the RemarkPhenols column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkphenols('fooValue');   // WHERE RemarkPhenols = 'fooValue'
     * $query->filterByRemarkphenols('%fooValue%'); // WHERE RemarkPhenols LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkphenols The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkphenols($remarkphenols = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkphenols)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkphenols)) {
                $remarkphenols = str_replace('*', '%', $remarkphenols);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKPHENOLS, $remarkphenols, $comparison);
    }

    /**
     * Filter the query on the RemarkSurfactants column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarksurfactants('fooValue');   // WHERE RemarkSurfactants = 'fooValue'
     * $query->filterByRemarksurfactants('%fooValue%'); // WHERE RemarkSurfactants LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarksurfactants The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarksurfactants($remarksurfactants = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarksurfactants)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarksurfactants)) {
                $remarksurfactants = str_replace('*', '%', $remarksurfactants);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKSURFACTANTS, $remarksurfactants, $comparison);
    }

    /**
     * Filter the query on the RemarkPhytoplankton column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarkphytoplankton('fooValue');   // WHERE RemarkPhytoplankton = 'fooValue'
     * $query->filterByRemarkphytoplankton('%fooValue%'); // WHERE RemarkPhytoplankton LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarkphytoplankton The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByRemarkphytoplankton($remarkphytoplankton = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarkphytoplankton)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarkphytoplankton)) {
                $remarkphytoplankton = str_replace('*', '%', $remarkphytoplankton);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::REMARKPHYTOPLANKTON, $remarkphytoplankton, $comparison);
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
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(WaterqualityPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(WaterqualityPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WaterqualityPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Waterquality $waterquality Object to remove from the list of results
     *
     * @return WaterqualityQuery The current query, for fluid interface
     */
    public function prune($waterquality = null)
    {
        if ($waterquality) {
            $this->addUsingAlias(WaterqualityPeer::SPECCODE, $waterquality->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
